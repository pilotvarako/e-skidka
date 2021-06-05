<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class SmartFormUserAnswer extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'smart_form_question_id', 'content'];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function smartFormQuestion() {
        return $this->belongsTo(SmartFormQuestion::class);
    }

    public function createSmartFormUserAnswer($user_id, $question_id, $content) {
        $content = $content === 'true'? 1 : 0;

        SmartFormUserAnswer::create([
            'user_id' => $user_id,
            'smart_form_question_id' => $question_id,
            'content' => $content,
        ]);
    }

    public function deleteSmartFormUserAnswer($user_id) {
        SmartFormUserAnswer::where('user_id', $user_id)->delete();
    }
}
