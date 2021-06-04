<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\CouponController;
use App\Http\Controllers\SmartFormController;
use App\Http\Controllers\Auth\LoginController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes([
    'reset' => false,
    'confirm' => false,
    'verify' => false,
]);

Route::get('/', [MainController::class, 'index'])->name('index');
Route::get('/coupons', [CouponController::class, 'index'])->name('coupons');
Route::post('/coupons', [CouponController::class, 'search'])->name('coupons');
Route::get('/smart-form', [SmartFormController::class, 'index'])->name('smart-form');
Route::get('/smart-form/edit', [SmartFormController::class, 'edit'])->name('smart-form-edit');
Route::post('/smart-form/edit', [SmartFormController::class, 'send'])->name('smart-form-edit');

Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('get-logout');
