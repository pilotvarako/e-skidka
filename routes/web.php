<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
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
Route::get('/coupons', [MainController::class, 'plug'])->name('coupons');
Route::get('/smart-form', [MainController::class, 'plug'])->name('smart-form');

Route::get('/profile', [App\Http\Controllers\HomeController::class, 'index'])->name('profile');
Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('get-logout');
