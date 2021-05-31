<?php

namespace Database\Seeders;

use App\Services\AdmitadCoupon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admitad = new AdmitadCoupon();
        $admitad_all_categories = $admitad->getCategories();
        DB::table('categories')->insert($admitad_all_categories);
    }
}
