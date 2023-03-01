<?php
use App\Http\Controllers\FrontendController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
/* Route::post('add-story',[FrontendController::class,'save_story'])->middleware('guest'); */

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


