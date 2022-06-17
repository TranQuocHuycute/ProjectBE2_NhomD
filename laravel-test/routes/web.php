<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\GoogleSocialiteController;
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

Route::get('/home', [CategoryController::class,"index"])->name('home');
//Route::get('/login', [LoginController::class,"login"]);
 
Route::get('auth/google', [GoogleSocialiteController::class, 'redirectToGoogle']);
Route::get('callback/google', [GoogleSocialiteController::class, 'handleCallback']);

Route::post('login', [GoogleSocialiteController::class,"login"])->name("auth.login");
Route::post('add', [CategoryController::class,"add"])->name("category.add");
Route::get('edit/{id}', [CategoryController::class,"edit"])->name("category.edit");
Route::get('remove/{id}', [CategoryController::class,"delete"])->name("category.delete");
Route::post('edit-category', [CategoryController::class,"update"])->name("category.update");

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
