<?php

use App\Http\Controllers\Auth\AuthClientController;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\backend\DashboardController;

use App\Http\Controllers\frontend\UserController;
use App\Http\Controllers\backend\UserController as UsersControllers;


use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\IntroduceController;
use App\Http\Controllers\frontend\NewsController;
use App\Http\Controllers\frontend\SystemController;

use App\Http\Controllers\frontend\ErrorController;

use App\Http\Controllers\frontend\FavouriteController;
use App\Http\Controllers\frontend\CartController;

use App\Http\Controllers\frontend\ContactController;
use App\Http\Controllers\backend\ContactController as ContactControllers;
use App\Http\Controllers\frontend\ProductController as SanphamController;

use App\Http\Controllers\frontend\ProductDetailController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

//Admin
use App\Http\Controllers\backend\ProductController;
use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\backend\BrandController;
use App\Http\Controllers\backend\MenuController;
use App\Http\Controllers\backend\OrderController;
use App\Http\Controllers\backend\OrderdetailController;
use App\Http\Controllers\backend\PostController;
use App\Http\Controllers\backend\TopicController;
use App\Http\Controllers\backend\BannerController;

//Home
Route::get('/', [HomeController::class, 'Home'])->name('home');
Route::get('/gioi-thieu', [IntroduceController::class, 'Introduce'])->name('introduce');
Route::get('/tin-tuc', [NewsController::class, 'News'])->name('news');
Route::get('/home', [ContactController::class, 'home']);
//Product
Route::get('/san-pham', [SanphamController::class, 'Product'])->name('product');
Route::get('/chi-tiet-san-pham/{slug}', [ProductDetailController::class, 'ProductDetail'])->name('detail');
Route::post('cart/add/{id}', [CartController::class, 'add'])->name('cart.add');
Route::get('/lien-he', [ContactController::class, 'Contact'])->name('contact');

Route::get('/contact-phone', [ContactController::class, 'getContactPhone']);
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
    Route::get('/forgot-password', [AuthClientController::class, 'ForgotPage'])->name('forgot.password');
    Route::post('/forgot-password', [AuthClientController::class, 'ForgotPassword'])->name('forgot.password.post');
    Route::get('/reset-password/{token}', [AuthClientController::class, 'ResetPasswordPage'])->name('reset.password');
    Route::post('/reset-password/{token}', [AuthClientController::class, 'ResetPassword'])->name('reset.password.post');

    //login google
    Route::get('/login/google', [AuthClientController::class, 'LoginGoogle'])->name('login.google');
    Route::get('/login/google/callback', [AuthClientController::class, 'LoginGoogleCallback'])->name('login.google.callback');


    // // login facebook
    Route::get('/login/facebook', [AuthClientController::class, 'LoginFacebook'])->name('login.facebook');
    Route::get('/login/facebook/callback', [AuthClientController::class, 'LoginFacebookCallback'])->name('login.facebook.callback');
});


//Error 404
Route::get('/404', [ErrorController::class, 'Error'])->name('error');

//System
Route::get('/he-thong-cua-hang', [SystemController::class, 'System'])->name('system');


//Panel Admin
Route::prefix('admin')->middleware('guest')->group(function () {
    Route::get('dashboard', [DashboardController::class, 'Dashboard'])->name('admin.dashboard.index');
    Route::get('auth/login', [AuthClientController::class, 'LoginAdminPage'])->name('admin.login');


    Route::prefix('category')->middleware('guest')->group(function () {
        Route::get('/', [CategoryController::class, 'index'])->name('admin.category.index');
        Route::get('trash', [CategoryController::class, 'trash'])->name('admin.category.trash');
        Route::get('create', [CategoryController::class, 'create'])->name('admin.category.create');
        Route::post('store', [CategoryController::class, 'store'])->name('admin.category.store');

        Route::get('edit/{id}', [CategoryController::class, 'edit'])->name('admin.category.edit');
        Route::put('update/{id}', [CategoryController::class, 'update'])->name('admin.category.update');
        Route::get('status/{id}', [CategoryController::class, 'status'])->name('admin.category.status');
        Route::delete('delete/{id}', [CategoryController::class, 'delete'])->name('admin.category.delete');
        Route::get('show/{id}', [ProductController::class, 'show'])->name('admin.category.show');

        Route::delete('destroy/{id}', [CategoryController::class, 'destroy'])->name('admin.category.destroy');
        Route::post('restore/{id}', [CategoryController::class, 'restore'])->name('admin.category.restore');
    });

    Route::prefix('brand')->middleware('guest')->group(function () {
        Route::get('/', [BrandController::class, 'index'])->name('admin.brand.index');
        Route::get('trash', [BrandController::class, 'trash'])->name('admin.brand.trash');
        Route::get('create', [BrandController::class, 'create'])->name('admin.brand.create');
        Route::post('store', [BrandController::class, 'store'])->name('admin.brand.store');

        Route::get('edit/{id}', [BrandController::class, 'edit'])->name('admin.brand.edit');
        Route::put('update/{id}', [BrandController::class, 'update'])->name('admin.brand.update');
        Route::get('status/{id}', [BrandController::class, 'status'])->name('admin.brand.status');
        Route::delete('delete/{id}', [BrandController::class, 'delete'])->name('admin.brand.delete');
        Route::get('show/{id}', [BrandController::class, 'show'])->name('admin.brand.show');

        Route::delete('destroy/{id}', [BrandController::class, 'destroy'])->name('admin.brand.destroy');
        Route::post('restore/{id}', [BrandController::class, 'restore'])->name('admin.brand.restore');
    });

    Route::prefix('banner')->middleware('guest')->group(function () {
        Route::get('/', [BannerController::class, 'index'])->name('admin.banner.index');
        Route::get('trash', [BannerController::class, 'trash'])->name('admin.banner.trash');
        Route::get('create', [BannerController::class, 'create'])->name('admin.banner.create');
        Route::post('store', [BannerController::class, 'store'])->name('admin.banner.store');

        Route::get('edit/{id}', [BannerController::class, 'edit'])->name('admin.banner.edit');
        Route::put('update/{id}', [BannerController::class, 'update'])->name('admin.banner.update');
        Route::get('status/{id}', [BannerController::class, 'status'])->name('admin.banner.status');
        Route::delete('delete/{id}', [BannerController::class, 'delete'])->name('admin.banner.delete');
        Route::get('show/{id}', [BannerController::class, 'show'])->name('admin.banner.show');

        Route::delete('destroy/{id}', [BannerController::class, 'destroy'])->name('admin.banner.destroy');
        Route::post('restore/{id}', [BannerController::class, 'restore'])->name('admin.banner.restore');
    });

    Route::prefix('contact')->middleware('guest')->group(function () {
        Route::get('/', [ContactControllers::class, 'index'])->name('admin.contact.index');
        Route::get('trash', [ContactControllers::class, 'trash'])->name('admin.contact.trash');
        Route::get('create', [ContactControllers::class, 'create'])->name('admin.contact.create');
        Route::post('store', [ContactControllers::class, 'store'])->name('admin.contact.store');

        Route::get('edit/{id}', [ContactControllers::class, 'edit'])->name('admin.contact.edit');
        Route::put('update/{id}', [ContactControllers::class, 'update'])->name('admin.contact.update');
        Route::get('status/{id}', [ContactControllers::class, 'status'])->name('admin.contact.status');
        Route::get('delete/{id}', [ContactControllers::class, 'delete'])->name('admin.contact.delete');
        Route::get('show/{id}', [ContactControllers::class, 'show'])->name('admin.contact.show');
        Route::get('destroy/{id}', [ContactControllers::class, 'destroy'])->name('admin.contact.destroy');
        Route::delete('restore/{id}', [ContactControllers::class, 'restore'])->name('admin.contact.restore');
    });

    Route::prefix('menu')->middleware('guest')->group(function () {
        Route::get('/', [MenuController::class, 'index'])->name('admin.menu.index');
        Route::get('trash', [MenuController::class, 'trash'])->name('admin.menu.trash');
        Route::get('create', [MenuController::class, 'create'])->name('admin.menu.create');
        Route::post('store', [MenuController::class, 'store'])->name('admin.menu.store');

        Route::get('edit/{id}', [MenuController::class, 'edit'])->name('admin.menu.edit');
        Route::put('update/{id}', [MenuController::class, 'update'])->name('admin.menu.update');
        Route::get('status/{id}', [MenuController::class, 'status'])->name('admin.menu.status');
        Route::get('delete/{id}', [MenuController::class, 'delete'])->name('admin.menu.delete');
        Route::get('show/{id}', [MenuController::class, 'show'])->name('admin.menu.show');
        Route::get('destroy/{id}', [MenuController::class, 'destroy'])->name('admin.menu.destroy');
        Route::delete('restore/{id}', [MenuController::class, 'restore'])->name('admin.menu.restore');
    });

    Route::prefix('order')->middleware('guest')->group(function () {
        Route::get('/', [OrderController::class, 'index'])->name('admin.order.index');
        Route::get('trash', [OrderController::class, 'trash'])->name('admin.order.trash');
        Route::get('create', [OrderController::class, 'create'])->name('admin.order.create');
        Route::post('store', [OrderController::class, 'store'])->name('admin.order.store');

        Route::get('edit/{id}', [OrderController::class, 'edit'])->name('admin.order.edit');
        Route::put('update/{id}', [OrderController::class, 'update'])->name('admin.order.update');
        Route::get('status/{id}', [OrderController::class, 'status'])->name('admin.order.status');
        Route::delete('delete/{id}', [OrderController::class, 'delete'])->name('admin.order.delete');
        Route::get('show/{id}', [OrderController::class, 'show'])->name('admin.order.show');

        Route::delete('destroy/{id}', [OrderController::class, 'destroy'])->name('admin.order.destroy');
        Route::post('restore/{id}', [OrderController::class, 'restore'])->name('admin.order.restore');
    });

    Route::prefix('orderdetail')->middleware('guest')->group(function () {
        Route::get('/', [OrderdetailController::class, 'index'])->name('admin.orderdetail.index');
        Route::get('trash', [OrderdetailController::class, 'trash'])->name('admin.orderdetail.trash');
        Route::get('create', [OrderdetailController::class, 'create'])->name('admin.orderdetail.create');
        Route::post('store', [OrderdetailController::class, 'store'])->name('admin.orderdetail.store');

        Route::get('edit/{id}', [OrderdetailController::class, 'edit'])->name('admin.orderdetail.edit');
        Route::put('update/{id}', [OrderdetailController::class, 'update'])->name('admin.orderdetail.update');
        Route::get('status/{id}', [OrderdetailController::class, 'status'])->name('admin.orderdetail.status');
        Route::get('delete/{id}', [OrderdetailController::class, 'delete'])->name('admin.orderdetail.delete');
        Route::get('show/{id}', [OrderdetailController::class, 'show'])->name('admin.orderdetail.show');
        Route::get('destroy/{id}', [OrderdetailController::class, 'destroy'])->name('admin.orderdetail.destroy');
        Route::delete('restore/{id}', [OrderdetailController::class, 'restore'])->name('admin.orderdetail.restore');
    });

    Route::prefix('post')->middleware('guest')->group(function () {
        Route::get('/', [PostController::class, 'index'])->name('admin.post.index');
        Route::get('trash', [PostController::class, 'trash'])->name('admin.post.trash');
        Route::get('create', [PostController::class, 'create'])->name('admin.post.create');
        Route::post('store', [PostController::class, 'store'])->name('admin.post.store');

        Route::get('edit/{id}', [PostController::class, 'edit'])->name('admin.post.edit');
        Route::put('update/{id}', [PostController::class, 'update'])->name('admin.post.update');
        Route::get('status/{id}', [PostController::class, 'status'])->name('admin.post.status');
        Route::delete('delete/{id}', [PostController::class, 'delete'])->name('admin.post.delete');
        Route::get('show/{id}', [PostController::class, 'show'])->name('admin.post.show');

        Route::delete('destroy/{id}', [PostController::class, 'destroy'])->name('admin.post.destroy');
        Route::post('restore/{id}', [PostController::class, 'restore'])->name('admin.post.restore');
    });

    Route::prefix('product')->middleware('guest')->group(function () {
        Route::get('/', [ProductController::class, 'index'])->name('admin.product.index');
        Route::get('trash', [ProductController::class, 'trash'])->name('admin.product.trash');
        Route::get('create', [ProductController::class, 'create'])->name('admin.product.create');
        Route::post('store', [ProductController::class, 'store'])->name('admin.product.store');

        Route::get('edit/{id}', [ProductController::class, 'edit'])->name('admin.product.edit');
        Route::put('update/{id}', [ProductController::class, 'update'])->name('admin.product.update');
        Route::get('status/{id}', [ProductController::class, 'status'])->name('admin.product.status');
        Route::delete('delete/{id}', [ProductController::class, 'delete'])->name('admin.product.delete');
        Route::get('show/{id}', [ProductController::class, 'show'])->name('admin.product.show');

        Route::delete('destroy/{id}', [ProductController::class, 'destroy'])->name('admin.product.destroy');
        Route::post('restore/{id}', [ProductController::class, 'restore'])->name('admin.product.restore');
    });


    Route::prefix('topic')->middleware('guest')->group(function () {
        Route::get('/', [TopicController::class, 'index'])->name('admin.topic.index');
        Route::get('trash', [TopicController::class, 'trash'])->name('admin.topic.trash');
        Route::get('create', [TopicController::class, 'create'])->name('admin.topic.create');
        Route::post('store', [TopicController::class, 'store'])->name('admin.topic.store');

        Route::get('edit/{id}', [TopicController::class, 'edit'])->name('admin.topic.edit');
        Route::put('update/{id}', [TopicController::class, 'update'])->name('admin.topic.update');
        Route::get('status/{id}', [TopicController::class, 'status'])->name('admin.topic.status');
        Route::delete('delete/{id}', [TopicController::class, 'delete'])->name('admin.topic.delete');
        Route::get('show/{id}', [TopicController::class, 'show'])->name('admin.topic.show');

        Route::delete('destroy/{id}', [TopicController::class, 'destroy'])->name('admin.topic.destroy');
        Route::post('restore/{id}', [TopicController::class, 'restore'])->name('admin.topic.restore');
    });


    Route::prefix('user')->middleware('guest')->group(function () {
        Route::get('/', [UsersControllers::class, 'index'])->name('admin.user.index');
        Route::get('trash', [UsersControllers::class, 'trash'])->name('admin.user.trash');
        Route::get('create', [UsersControllers::class, 'create'])->name('admin.user.create');
        Route::post('store', [UsersControllers::class, 'store'])->name('admin.user.store');

        Route::get('edit/{id}', [UsersControllers::class, 'edit'])->name('admin.user.edit');
        Route::put('update/{id}', [UsersControllers::class, 'update'])->name('admin.user.update');
        Route::get('status/{id}', [UsersControllers::class, 'status'])->name('admin.user.status');
        Route::delete('delete/{id}', [UsersControllers::class, 'delete'])->name('admin.user.delete');
        Route::get('show/{id}', [UsersControllers::class, 'show'])->name('admin.user.show');

        Route::delete('destroy/{id}', [UsersControllers::class, 'destroy'])->name('admin.user.destroy');
        Route::post('restore/{id}', [UsersControllers::class, 'restore'])->name('admin.user.restore');
    });
});
