<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\SmartFormQuestion;
use App\Models\SmartFormUserAnswer;
use App\Models\User;

class SmartFormController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() {
        if (count(auth()->user()->smartFormUserAnswers) === 0) {
            $unused = true;

            return view('smart_form.index', ['coupons' => [], 'unused' => $unused]);
        }

        $unused = false;
        $coupons = User::findUserCoupons();

        return view('smart_form.index', ['coupons' => $coupons, 'unused' => $unused]);
    }

    public function edit() {
        $questions = new SmartFormQuestion();
        $questions = $questions->getQuestions();

        return view('smart_form.edit', ['questions' => $questions]);
    }

    public function send(Request $request) {
        $result = array_values($request->all());
        $answer = new SmartFormUserAnswer();
        $user_id = Auth::id();

        if (count(auth()->user()->smartFormUserAnswers) !== 0) {
            $answer->deleteSmartFormUserAnswer($user_id);
        }

        unset($result[0]);

        if ($result[1] === 'true') {
            $result[1] = 'false';
        }

        else {
            $result[1] = 'true';
        }

        for ($element = 1; $element <= count($result); $element++) {
            $question_id = $element;
            $answer->createSmartFormUserAnswer($user_id, $question_id, $result[$element]);
        }

        return redirect()->route('smart-form');
    }
}
