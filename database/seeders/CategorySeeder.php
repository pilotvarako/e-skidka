<?php

namespace Database\Seeders;

use Admitad\Api\Api;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $api = new Api();
        $clientId = 'MJLauu2ApEHPPNXol7T1Bk58wuHoDv';
        $clientSecret = 'c6TIaRJXBwM15ZeWvc3HfkebfGzHyV';
        $scope = 'public_data';
        $api = $api->selfAuthorize($clientId, $clientSecret, $scope);
        $response = $api->get('/coupons/categories/');
        dd($response->getArrayResult('results'));
    }
}
