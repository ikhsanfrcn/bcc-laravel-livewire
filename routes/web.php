<?php

use App\Http\Controllers\BlogpostController;
use App\Http\Controllers\SubscriberController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CoffeeController;
use App\Http\Controllers\PediaController;

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

Route::resource('/', IndexController::class);
Route::resource('/coffee', CoffeeController::class);
Route::resource('/coffeepedia', PediaController::class);

// Static Pages
Route::get('/about-us', function () {
    return view('Static.about');
});
Route::get('/bakery', function () {
    return view('Static.bakery');
});
Route::get('/eatery', function () {
    return view('Static.eatery');
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

// Login Route
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Administrator Pages Route
Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
    Route::resource('/dashboard', AdminController::class);
    Route::resource('/blogpost', BlogpostController::class);
    Route::resource('/user', UserController::class);
    Route::resource('/subscriber', SubscriberController::class);
    Route::resource('/products', ProductController::class);
});
