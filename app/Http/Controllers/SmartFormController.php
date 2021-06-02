<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SmartFormUserAnswer;

class SmartFormController extends Controller
{
    public function index() {
        return view('smart_form.index');
    }
}
