<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Hash;

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\HelperController;

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

// users
Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);
Route::post('alive', [AuthController::class, 'alive'])->middleware('JWTAuth');
Route::post('save_user_info', [AuthController::class, 'saveUserInfo'])->middleware('JWTAuth');
Route::post('logout', [AuthController::class, 'logout']);

// helper
Route::post('unique', [HelperController::class, 'unique']);
Route::get('wilayas', [HelperController::class, 'wilayas']);
Route::post('districts', [HelperController::class, 'districts']);
Route::post('dairas', [HelperController::class, 'dairas']);

Route::get('/', function () {
    return "works";
});
