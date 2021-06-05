<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SmartFormQuestion extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'category_id', 'content', 'positive', 'negative'];

    public $incrementing = false;

    public function smartFormUserAnswers() {
        return $this->hasMany(SmartFormUserAnswer::class);
    }

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function getQuestions() {
        return SmartFormQuestion::all();
    }
}
