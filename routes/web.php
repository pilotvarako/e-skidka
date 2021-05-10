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

Route::get('/', [MainController::class, 'index']);
Route::get('/coupons', [MainController::class, 'plug']);
Route::get('/smart-form', [MainController::class, 'plug']);
Route::get('/registration', [MainController::class, 'plug']);
Route::get('/authorization', [MainController::class, 'plug']);
Route::get('/profile', [MainController::class, 'plug']);
