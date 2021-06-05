<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Coupon;
use App\Models\Category;

class MainController extends Controller
{
    public function index() {
        $categories = new Category();
        $categories = $categories->getAllCategories();
        $coupons = array();

        foreach ($categories as $category) {
            $coupons[] = $category->coupons()->get();
        }

        $top_coupons = new Coupon();

        $result_coupons = $top_coupons->getCouponsTop($coupons);

        return view('index', ['coupons' => $result_coupons]);
    }

    public function plug() {
        return view('plug');
    }
}
