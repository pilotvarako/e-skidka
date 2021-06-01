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
}
