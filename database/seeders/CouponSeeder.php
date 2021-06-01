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
        $admitad_filter_coupons = $admitad->filterCoupons($admitad_all_coupons);
        DB::table('coupons')->insert($admitad_filter_coupons);
    }
}
