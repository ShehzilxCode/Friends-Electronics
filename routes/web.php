<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

// Website Routes
Route::get('/', function () {
    return view('UserUI.home');
});
Route::get('/about', function () {
    return view('UserUI.about-us');
});

Route::get('/contact', function () {
    return view('UserUI.contact-us');
});

Route::get('/shop', function () {
    return view('UserUI.shop');
});

Route::get('/wishlist', function () {
    return view('UserUI.wishlist');
});
Route::get('/cart', function () {
    return view('UserUI.cart');
});
Route::get('/my-account', function () {
    return view('UserUI.myaccount');
});
Route::get('/checkout', function () {
    return view('UserUI.checkout');
});
Route::get('/product', function () {
    return view('UserUI.product');
});
Route::get('/thank-you', function () {
    return view('UserUI.thankyou');
});
Route::get('/order-tracking', function () {
    return view('UserUI.order-tracking');
});
Route::get('/404', function () {
    return view('UserUI.404');
});

// AdminDashboard Routes 
Route::get('/dashboardhome', function () {
    return view('AdminDashboard.home');
});
Route::get('/dashboardproduct', function () {
    return view('AdminDashboard.product');
});
Route::get('/dashboardcreateproduct', function () {
    return view('AdminDashboard.createproduct');
});
Route::get('/dashboardcategory', function () {
    return view('AdminDashboard.category');
});
Route::get('/dashboardorder', function () {
    return view('AdminDashboard.order');
});
Route::get('/dashboardorderdetail', function () {
    return view('AdminDashboard.orderdetail');
});
Route::get('/dashboardcustomer', function () {
    return view('AdminDashboard.cutomer');
});
