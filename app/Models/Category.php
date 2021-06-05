<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'name'];

    public $incrementing = false;

    public function coupons() {
        return $this->hasMany(Coupon::class);
    }

    public function smartFormQuestions() {
        return $this->hasMany(SmartFormQuestion::class);
    }

    public function getAllCategories() {
        return Category::all();
    }
}
