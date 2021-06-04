<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SmartFormQuestion;
use App\Models\SmartFormUserAnswer;
use App\Models\Coupon;

class SmartFormController extends Controller
{
    public function index() {
        $search = 'yvos';
        $coupons = new Coupon();
        $coupons = $coupons->searchCoupons($search);

        return view('smart_form.index', ['coupons' => $coupons, 'search' => $search]);
    }

    public function edit() {
        $questions = new SmartFormQuestion();
        $questions = $questions->getQuestions();

        return view('smart_form.edit', ['questions' => $questions]);
    }

    public function send(Request $request) {
        dd($request->all());
    }
}
