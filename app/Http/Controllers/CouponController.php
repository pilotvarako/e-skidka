<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Coupon;

class CouponController extends Controller
{
    public function index() {
        $coupons = new Coupon();
        $coupons = $coupons->getCouponsPaginate();

        return view('coupon.coupons', ['coupons' => $coupons]);
    }

    public function search(Request $request) {
        dd($request->input('search'));
    }
}
