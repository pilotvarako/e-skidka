<?php

namespace App\Http\Controllers;

use Admitad\Api\Api;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $api = new Api();
        $clientId = 'MJLauu2ApEHPPNXol7T1Bk58wuHoDv';
        $clientSecret = 'c6TIaRJXBwM15ZeWvc3HfkebfGzHyV';
        $scope = 'private_data' . ' ' . 'coupons';
        $response = $api->selfAuthorize($clientId, $clientSecret, $scope);
        //dd($response->getLastResponse()->getResult());
        $response = $api->get('/coupons/')->getArrayResult();
        dd($response);
        return view('plug');
    }
}
