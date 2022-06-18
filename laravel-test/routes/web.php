<?php

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/player', [PlayerController::class,'index']);
// player
Route::get('/playerdetail', [TeamDetailsController::class,'getTeam']);
Route::DELETE('/playerdetail/delete/{id}', [TeamDetailsController::class,'destroy']);
Route::GET('/playerdetail/update', [TeamDetailsController::class],"update");