<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\TeamDetailsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ModuleControler;


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

// Route::get('/', function () {
//     return view('welcome');
// });
//Route::get('/player', [PlayerController::class,'index']);
// player
//Route::get('/playerdetail', [TeamDetailsController::class,'getTeam']);

Route::get('/home', [CategoryController::class,"index"]);
//Route::get('/login', [LoginController::class,"login"]);


Route::get('auth/google', [UserController::class, 'redirectToGoogle']);
Route::get('auth/google/callback', [UserController::class, 'handleGoogleCallback']);

