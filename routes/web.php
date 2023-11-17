<?php

use App\Http\Controllers\BlogpostController;
use App\Http\Controllers\SubscriberController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CoffeeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\UserSubscriberController;
use App\Http\Controllers\PediaController;
use App\Http\Controllers\BaristaCompetitionController;
use App\Http\Controllers\PDFController;
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
Route::resource('/coffeepedia', PediaController::class);
Route::resource('/bcc-pdf', PDFController::class );
Route::resource('/barista-competition',BaristaCompetitionController::class);

// Static Pages
Route::get('/about-us', function () {
    return view('Static.about');
});
Route::get('/pastry', function () {
    return view('Static.pastry');
});
Route::get('/coffee', function () {
    return view('Static.coffee');
});
Route::get('/eatery', function () {
    return view('Static.eatery');
});

Route::get('/register', function () {
    return view('Auth.register');
});
Route::get('/menusunset.php', function () {
    return view('Menu.menusunset');
});
Route::get('/menucanggu.php', function () {
    return view('Menu.menucanggu');
});


Route::resource('/coffeepedia', PediaController::class);
Route::resource('/membership', UserSubscriberController::class);
Route::resource('/contact', ContactController::class);

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

// Promotion Links
Route::get('/promotion', function () {
    return view('Static.linktree');
});
Route::get('/promotion/bcc-canggu-sunset', function () {
    return view('Static.bcc-canggu-linktree');
});
Route::get('/promotion/bcc-jakarta', function () {
    return view('Static.bcc-jakarta-linktree');
});
