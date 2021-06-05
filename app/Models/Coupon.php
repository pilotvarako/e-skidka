<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'category_id', 'name_company', 'name', 'discount', 'image', 'link'];

    public $incrementing = false;

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function getCoupons() {
        return Coupon::all();
    }

    public function getCouponsPaginate() {
        return Coupon::paginate(12);
    }

    public function searchCoupons($search) {
        return Coupon::where('name', 'like', '%' . $search . '%')->orWhere('name_company', 'like', '%' . $search . '%')->get();
    }

    public function getCouponsTop($coupons) {
        $filter_coupons = array();

        foreach ($coupons as $coupon) {
            if (count($coupon) !== 0) {
                $filter_coupons[] = $coupon;
            }
        }

        for ($i = 0; $i < count($filter_coupons) - 1; $i++) {
            for ($j = 0; $j < count($filter_coupons) - $i - 1; $j++) {
                if (count($filter_coupons[$j]) < count($filter_coupons[$j + 1])) {
                    $buffer = $filter_coupons[$j];
                    $filter_coupons[$j] = $filter_coupons[$j + 1];
                    $filter_coupons[$j + 1] = $buffer;
                }
            }
        }

        $top_coupons = array_slice($filter_coupons, 0, 4);

        $result_coupons = array();

        foreach ($top_coupons as $coupon) {
            $result_coupons[] = $coupon[0];
        }

        return $result_coupons;
    }
}
