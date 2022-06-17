<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/category', [CategoryController::class,"index"]);
Route::get('/login', [LoginController::class,"login"]);

// Route::get('/auth/login',[UserController::class,"sociallogin"]);
// Route::get('/auth/google/redirect',[UserController::class,"redirectToGoogle"]);
// Route::get('/google/callback', [UserController::class,"handleGoogleCallback"]);


Route::get('auth/google', [UserController::class, 'redirectToGoogle']);
Route::get('auth/google/callback', [UserController::class, 'handleGoogleCallback']);
