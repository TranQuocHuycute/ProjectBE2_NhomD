<?php

use App\Http\Controllers\PlayerController;
use App\Http\Controllers\TeamDetailsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ModuleControler;
use App\Http\Controllers\Admin;


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
Route::get("home", [HomeController::class,"index"]);
Route::get('/player', [PlayerController::class,'index']);
// player
Route::get('/playerdetail', [TeamDetailsController::class,'getTeam']);
// Categories
Route::get('categories/add', [CategoriesController::class, 'store']);
Route::get('games/add', [GameController::class, 'store']);
Route::get('games/read', [GameController::class, 'GetGame']);
Route::get('games/delete', [GameController::class, 'DeleteGame']);
Route::get('games/edit', [GameController::class, 'FindByID']);
Route::post('games/update', [GameController::class, 'UpdateGame']);
Route::get('games/date', [GameController::class, 'GetGameByDate']);
Route::get('games/deleteAll', [GameController::class, 'DeleteAll']);

//admin
Route::get("admin", [Admin::class,"GetData"]);
