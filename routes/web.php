<?php

use Illuminate\Support\Facades\Route;

// User Controllers
use App\Http\Controllers\AuthController;

//Admin Controllers
use App\Http\Controllers\UserController as FUserController;
use App\Http\Controllers\User\UserController as UserController;
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;

Route::controller(AuthController::class)->group(function () {
    Route::post('/login', 'login')->name('auth.login');
    Route::post('/register', 'register')->name('auth.register');
    Route::post('/verify-otp', 'verifyotp')->name('auth.verifyotp');
});

// Website Routes
Route::controller(FUserController::class)->group(function () {
    Route::get('/', 'index')->name('user.home');               // Home Page
    Route::get('/about-us', 'about')->name('user.about');      // About Us Page
    Route::get('/contact-us', 'contact')->name('user.contact');// Contact Us Page
    Route::get('/shop', 'shop')->name('user.shop');            // Shop Page
    Route::get('/wishlist', 'wishlist')->name('user.wishlist');// Wishlist Page
    Route::get('/cart', 'cart')->name('user.cart');            // Cart Page
    Route::get('/myaccount', 'myaccount')->name('user.myaccount'); // My Account Page
    Route::get('/checkout', 'checkout')->name('user.checkout');// Checkout Page
    Route::get('/product', 'product')->name('user.product');   // Product Page
    Route::get('/thankyou', 'thankyou')->name('user.thankyou');// Thank You Page
    Route::get('/order-tracking', 'ordertracking')->name('user.ordertracking'); // Order Tracking Page
    Route::get('/404', 'page404')->name('user.page404');       // 404 Page

});

// AdminDashboard Routes
Route::prefix('admin')->group(function () {
    Route::controller(AdminDashboardController::class)->group(function () {
        Route::get('/dashboard', 'index')->name('admin.dashboard'); // Admin Dashboard Page
    });
});

//User Auth routes

Route::controller(UserController::class)->prefix('users')->group(function (){
    Route::get('/login', 'login')->name('users.login'); // User Login
    Route::get('/register', 'register')->name('users.register'); // User Register
    Route::get('/verify-otp', 'verifyotp')->name('users.verifyotp'); // User Verify-OTP
});
