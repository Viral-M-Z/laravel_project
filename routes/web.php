<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
// use App\Http\Controller\AuthController;
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

Route::get('/', [AuthController::class,'index']);

Route::get('login',[AuthController::class,'index'])->name('login')->middleware('guest');
Route::post('login',[AuthController::class,'login'])->middleware('guest');
Route::get('logout',[AuthController::class,'logout'])->middleware('auth');

Route::get('forgot-password',[AuthController::class,'forgot_password'])->middleware('guest');
Route::post('forgot-password',[AuthController::class,'send_reset_link'])->middleware('guest')->name('password.email');
Route::get('/reset-password/{token}',[AuthController::class,'reset_password'])->middleware('guest')->name('password.reset');
Route::post('/reset-password',[AuthController::class,'update_password'])->middleware('guest')->name('password.update');

Route::get('dashboard',[AuthController::class,'dashboard'])->middleware('auth');
Route::get('home',[AuthController::class,'dashboard'])->middleware('auth');



