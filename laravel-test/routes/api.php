<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CommentController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
<<<<<<< HEAD:example-app/routes/api.php
// Route::get("/product/{id}",[ProductController::class,'show']);
Route::post("/product", [ProductController::class, 'show']);
Route::resource('comments', CommentController::class);
=======
>>>>>>> main:laravel-test/routes/api.php
