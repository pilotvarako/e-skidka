<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function smartFormUserAnswers() {
        return $this->hasMany(SmartFormUserAnswer::class);
    }

    public static function findUserCoupons() {
        $answers = auth()->user()->smartFormUserAnswers()->where('content', 1)->get();
        $result_questions = array();

        foreach ($answers as $answer) {
            $result_questions[] = $answer->smartFormQuestion()->get();
        }

        $result_categories = array();

        foreach ($result_questions as $question) {
            $result_categories[] = $question[0]->category()->get();
        }

        $result_coupons = array();

        foreach ($result_categories as $category) {
            $result_coupons[] = $category[0]->coupons()->get();
        }

        $result = array();

        foreach ($result_coupons as $coupons) {
            foreach ($coupons as $coupon) {
                $result[] = $coupon;
            }
        }

        return $result;
    }
}
