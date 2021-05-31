<?php

namespace App\Services;

use Admitad\Api\Exception\ApiException;
use App\Models\InfoService;
use Admitad\Api\Api;

class AdmitadCoupon
{
    private $api;

    public function __construct()
    {
        $this->api = new Api();

        $current_service = new InfoService();

        if (is_null($current_service->getLast())) {
            $clientId = 'MJLauu2ApEHPPNXol7T1Bk58wuHoDv';
            $clientSecret = 'c6TIaRJXBwM15ZeWvc3HfkebfGzHyV';
            $scope = 'public_data' . ' ' . 'websites';
            $response = $this->api->selfAuthorize($clientId, $clientSecret, $scope);
            $result = $response->getLastResponse()->getArrayResult();
            $response_website_id = $this->api->get('/websites/v2/');
            $result_website_id = $response_website_id->getArrayResult(0);
            $current_service->createService($clientId, $clientSecret, $result['access_token'], $result['refresh_token'], $result_website_id['id']);
        }

        else {
            $current_service = $current_service->getLast();
            $access_token = $current_service->decryptValue($current_service['access_token']);
            $this->api->setAccessToken($access_token);
        }
    }

    /**
     * @return Api
     */
    public function getApi(): Api
    {
        return $this->api;
    }

    public function getCategories() {
        try {
            $response = $this->api->get('/coupons/categories/');
        }

        catch (ApiException $ex) {
            $this->fixError($this->api->getLastResponse()->getArrayResult('error_code'));
        }

        return $response->getArrayResult('results');
    }

    private function fixError($error_code) {
        $error_code === 0 ? $this->updateKey() : $this->dropKey();
    }

    private function updateKey() {
        $current_service = new InfoService();
        $current_service = $current_service->getLast();
        $clientId = $current_service->decryptValue($current_service['client_id']);
        $clientSecret = $current_service->decryptValue($current_service['client_secret']);
        $refreshToken = $current_service->decryptValue($current_service['refresh_token']);

        try {
            $response = $this->api->refreshToken($clientId, $clientSecret, $refreshToken);
        }

        catch (ApiException $ex) {
            $this->fixError($this->api->getLastResponse()->getArrayResult('error_code'));
        }

        $current_service->saveService($current_service, $response->getArrayResult('access_token'), $response->getArrayResult('refresh_token'));
    }

    private function dropKey() {
        $current_service = new InfoService();
        $current_service = $current_service->getLast();
        $clientId = $current_service->decryptValue($current_service['client_id']);
        $clientSecret = $current_service->decryptValue($current_service['client_secret']);
        $scope = 'public_data' . ' ' . 'websites';
        $response = $this->api->selfAuthorize($clientId, $clientSecret, $scope);
        $result = $response->getLastResponse()->getArrayResult();
        $response_website_id = $this->api->get('/websites/v2/');
        $result_website_id = $response_website_id->getArrayResult(0);
        $current_service->refreshService($current_service, $result['access_token'], $result['refresh_token'], $result_website_id['id']);
    }
}
