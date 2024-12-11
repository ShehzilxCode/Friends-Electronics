<?php

use Illuminate\Support\Facades\Route;

// User Controllers
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController as FUserController;
use App\Http\Controllers\User\UserController as UserController;

//Admin Controllers
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Admin\CategoryController as AdminCategoryController;

Route::controller(AuthController::class)->group(function () {
    Route::post('/login', 'login')->name('auth.login');
    Route::post('/register', 'register')->name('auth.register');
    Route::post('/verify-otp', 'verifyotp')->name('auth.verifyotp');
    Route::post('/resend-verify-otp', 'resendverifyotp')->name('auth.resendotp');
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
        Route::get('/prouduct', 'product')->name('product.dashboard.page'); // Admin Dashboard Page
        Route::get('/createproduct', 'createproduct')->name('create.product'); // Admin Dashboard Page
        Route::get('/category', 'category')->name('product.category'); // Admin Dashboard Page
    });
    Route::controller(AdminCategoryController::class)->group(function () {
        Route::prefix('category')->group(function () {
            Route::post('/addcategory', 'create')->name('categroy.insert'); //add category
            Route::get('/fetchcategory', 'fetch')->name('categroy.fetch'); //add category
        });
    });

});



//User Auth routes

Route::controller(UserController::class)->prefix('users')->group(function (){
    Route::get('/login', 'login')->name('users.login'); // User Login
    Route::get('/register', 'register')->name('users.register'); // User Register
    Route::get('/verify-otp', 'verifyotp')->name('users.verifyotp'); // User Verify-OTP
});
