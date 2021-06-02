<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SmartFormQuestion extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'content', 'positive', 'negative'];

    public $incrementing = false;

    public function smartFormUserAnswers() {
        return $this->hasMany(SmartFormUserAnswer::class);
    }
}
