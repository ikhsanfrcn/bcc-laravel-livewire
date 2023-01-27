<?php

use App\Http\Controllers\BlogpostController;
use App\Http\Controllers\SubscriberController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

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

// Static Pages
Route::get('/', function () {
    return view('Static.welcome');
});
Route::get('/about-us', function () {
    return view('Static.about');
});
Route::get('/bakery', function () {
    return view('Static.bakery');
});
Route::get('/eatery', function () {
    return view('Static.eatery');
});
Route::get('/coffee', function () {
    return view('Static.coffee');
});
Route::get('/coffeepedia', function () {
    return view('Static.coffeepedia');
});
Route::get('/contact', function () {
    return view('Static.contact');
});
Route::get('/membership', function () {
    return view('Static.membership');
});

Route::get('/register', function () {
    return view('Auth.register');
});

Route::get('/login',[LoginController::class,'index']);
Route::post('/login',[LoginController::class,'authenticate']);

// Administrator Pages Route
Route::prefix('admin')->group(function () {
    Route::resource('/dashboard', AdminController::class);
    Route::resource('/blogpost', BlogpostController::class);
    Route::resource('/user', UserController::class);
    Route::resource('/subscriber', SubscriberController::class);
})->name('Administrator');
