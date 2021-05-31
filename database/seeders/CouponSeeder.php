<?php

namespace Database\Seeders;

use App\Services\AdmitadCoupon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CouponSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admitad = new AdmitadCoupon();
        $admitad_all_coupons = $admitad->getCoupons();
        dd($admitad_all_coupons);
    }
}
