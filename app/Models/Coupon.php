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
}
