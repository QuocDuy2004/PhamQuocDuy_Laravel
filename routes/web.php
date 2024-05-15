<?php

use App\Http\Controllers\Controller;

use App\Http\Controllers\frontend\UserController;

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

//Account
Route::get('/auth/login', [AuthController::class, 'Login'])->name('login');
Route::get('/auth/register', [AuthController::class, 'Register'])->name('register');
Route::get('/auth/forgot', [AuthController::class, 'Forgot'])->name('forgot');

//Error 404
Route::get('/404', [ErrorController::class, 'Error'])->name('error');

//System
Route::get('/he-thong-cua-hang', [SystemController::class, 'System'])->name('system');