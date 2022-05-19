<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\CompanyController;

/*									
|--------------------------------------------------------------------------									
| Web Routes									
|--------------------------------------------------------------------------									
*/

Route::get('dashboard', [CustomAuthController::class, 'dashboard']);
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom')->middleware('per_page');
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom');
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');
Route::get('user', [CustomAuthController::class, 'user'])->name('user');
Route::get('user', [CustomAuthController::class, 'userInfor'])->name('userInfor');

 Route::get('/companies', [CompanyController::class, 'getCompany'])->name('per_page')->middleware('per_page');
// Route::get('/trainers', [TrainerController::class, 'getTrainers'])->name('per_page')->middleware('per_page');

Route::get('/profile', function () {
    //
})->middleware('per_page');

Route::fallback(function () {
    return view('404');
});

Route::get('/error', function () {
    return view('error');
});
Route::get('foo', function () {
    return 'Hello World';
});
Route::get('/', function () {
    return view('home');
});