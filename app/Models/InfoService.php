<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Crypt;

class InfoService extends Model
{
    use HasFactory;

    protected $fillable = ['client_id', 'client_secret', 'access_token', 'refresh_token', 'website_id'];

    public function createService($clientId, $clientSecret, $access_token, $refresh_token, $website_id) {
        InfoService::create([
            'client_id' => Crypt::encryptString($clientId),
            'client_secret' => Crypt::encryptString($clientSecret),
            'access_token' => Crypt::encryptString($access_token),
            'refresh_token' => Crypt::encryptString($refresh_token),
            'website_id' => $website_id,
        ]);
    }

    public function getLast() {
        return InfoService::all()->last();
    }

    public function getDecryptValue($value) {
        $current_service = InfoService::all()->last();
        return Crypt::decryptString($current_service[$value]);
    }

    public function decryptValue($value) {
        return Crypt::decryptString($value);
    }

    public function saveService($current_service, $access_token, $refresh_token) {
        $current_service->access_token = Crypt::encryptString($access_token);
        $current_service->refresh_token = Crypt::encryptString($refresh_token);
        $current_service->save();
    }

    public function refreshService($current_service, $access_token, $refresh_token, $website_id) {
        $current_service->access_token = Crypt::encryptString($access_token);
        $current_service->refresh_token = Crypt::encryptString($refresh_token);
        $current_service->website_id = $website_id;
        $current_service->save();
    }
}
