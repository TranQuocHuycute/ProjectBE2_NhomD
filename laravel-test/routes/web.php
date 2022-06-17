<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\TeamDetailsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\SendMailController;
use App\Http\Controllers\TournamentsController;
use Illuminate\Support\Facades\Auth;
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

Route::post('add', [CategoryController::class,"add"])->name("name.add");
Route::get('auth/google', [UserController::class, 'redirectToGoogle']);
Route::get('auth/google/callback', [UserController::class, 'handleGoogleCallback']);

Route::get('/', function () {
    return view('welcome');
});

Route::get('send-mail', [SendMailController::class, 'sendMail']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// LOGIN FACEBOOK
Route::get('login/facebook', [LoginController::class, 'redirectToFacebook'])->name('login.facebook');
Route::get('login/facebook/callback', [LoginController::class, 'handleFacebookCallback']);

// LOGIN GITHUB
Route::get('login/github', [LoginController::class, 'redirectToGithub'])->name('login.github');
Route::get('login/github/callback', [LoginController::class, 'handleGithubCallback']);

Route::get('/hello', [App\Http\Controllers\HelloController::class, 'hello']);

// Categories
Route::get('categories/update', [CategoriesController::class, 'update'])->name('categories.update')->middleware('auth');
Route::get('categories/delete-all', [CategoriesController::class, 'deleteAll'])->name('delete-all')->middleware('auth');

//admin
Route::get('admin', [AdminController::class, 'index'])->middleware('auth')->name('admin');
Route::get('admin/all', [AdminController::class, 'getAllCategory'])->middleware('auth');

//Tournaments
Route::get('tournaments/update', [TournamentsController::class, 'update'])->name('tournaments.update')->middleware('auth');
Route::get('tournaments/delete-all', [TournamentsController::class, 'deleteAll'])->name('tournaments.delete-all')->middleware('auth');
Route::get('tournaments/delete', [TournamentsController::class, 'delete'])->name('tournaments.delete')->middleware('auth');
Route::get('tournaments/add', [TournamentsController::class, 'add'])->name('tournaments.add')->middleware('auth');
// Route::get('tournaments/edit', [TournamentsController::class, 'edit'])->name('tournaments.edit')->middleware('auth');
Route::put('tournaments/edit', [TournamentsController::class, 'edit'])->name('tournaments.edit')->middleware('auth')->middleware('updateversion');
