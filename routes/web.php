<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Auth\AuthClientController;

use App\Http\Controllers\frontend\UserController;
use App\Http\Controllers\Auth\RegisterController;

use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\IntroduceController;
use App\Http\Controllers\frontend\NewsController;
use App\Http\Controllers\frontend\SystemController;

use App\Http\Controllers\frontend\ErrorController;

use App\Http\Controllers\frontend\FavouriteController;
use App\Http\Controllers\frontend\CartController;

use App\Http\Controllers\frontend\AuthController;

use App\Http\Controllers\frontend\ContactController;
use App\Http\Controllers\frontend\ProductController;
use App\Http\Controllers\frontend\ProductDetailController;
use Illuminate\Support\Facades\Route;


//User


Route::get("user", [UserController::class, "index"]);
Route::get("user/1", [UserController::class, "show"]);
Route::get("user/{id}/edit", [UserController::class, "edit"])->name("user.edit");
Route::get("user/list/{page?}", [UserController::class, "list"])->name("user.list");


//Home
Route::get('/', [HomeController::class, 'Home'])->name('home');
Route::get('/gioi-thieu', [IntroduceController::class, 'Introduce'])->name('introduce');
Route::get('/tin-tuc', [NewsController::class, 'News'])->name('news');

//Product
Route::get('san-pham', [ProductController::class, 'Product']);
Route::get('chi-tiet-san-pham/{slug}', [ProductDetailController::class, 'ProductDetail']);
Route::get('/lien-he', [ContactController::class, 'Contact'])->name('contact');
//Cart
Route::get('/gio-hang', [CartController::class, 'Cart'])->name('cart');
//Favourite
Route::get('/san-pham-yeu-thich', [FavouriteController::class, 'Favourite'])->name('favourite');

Route::get('/logout', [AuthClientController::class, 'Logout'])->name('logout');
Route::prefix('/auth')->middleware('guest')->group(function () {
    Route::get('/login', [AuthClientController::class, 'LoginPage'])->name('login');
    Route::post('/login', [AuthClientController::class, 'Login'])->name('login.post');
    Route::get('/register', [AuthClientController::class, 'RegisterPage'])->name('register');
    Route::post('/register', [AuthClientController::class, 'Register'])->name('register.post');
    // Route::get('/forgot-password', [AuthClientController::class, 'ForgotPasswordPage'])->name('forgot.password');
    // Route::post('/forgot-password', [AuthClientController::class, 'ForgotPassword'])->name('forgot.password.post');
    // Route::get('/reset-password/{token}', [AuthClientController::class, 'ResetPasswordPage'])->name('reset.password');
    // Route::post('/reset-password/{token}', [AuthClientController::class, 'ResetPassword'])->name('reset.password.post');

    //login google
    Route::get('/login/google', [AuthClientController::class, 'LoginGoogle'])->name('login.google');
    Route::get('/login/google/callback', [AuthClientController::class, 'LoginGoogleCallback'])->name('login.google.callback');


    // // login facebook
    // Route::get('/login/facebook', [AuthClientController::class, 'LoginFacebook'])->name('login.facebook');
    // Route::get('/login/facebook/callback', [AuthClientController::class, 'LoginFacebookCallback'])->name('login.facebook.callback');
});
Route::middleware('auth')->group(function () {
    Route::get('/home', function () {
        return view('home'); // Đảm bảo rằng bạn có view 'home'
    })->name('home');
});


//Error 404
Route::get('/404', [ErrorController::class, 'Error'])->name('error');

//System
Route::get('/he-thong-cua-hang', [SystemController::class, 'System'])->name('system');