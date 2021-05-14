<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

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

Route::get('/', [MainController::class, 'index'])->name('index');
Route::get('/coupons', [MainController::class, 'plug'])->name('coupons');
Route::get('/smart-form', [MainController::class, 'plug'])->name('smart-form');
Route::get('/register', [MainController::class, 'register'])->name('register');
Route::get('/login', [MainController::class, 'login'])->name('login');
Route::get('/profile', [MainController::class, 'plug'])->name('profile');
