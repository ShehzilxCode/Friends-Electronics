<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view('UserUI.home');
    }

    public function about(){
        return view('UserUI.about-us');
    }

    public function contact(){
        return view('UserUI.contact-us');
    }

    public function shop(){
        return view('UserUI.shop');
    }

    public function wishlist(){
        return view('UserUI.wishlist');
    }

    public function cart(){
        return view('UserUI.cart');
    }

    public function myaccount(){
        return view('UserUI.myaccount');
    }

    public function checkout(){
        return view('UserUI.checkout');
    }

    public function product(){
        return view('UserUI.product');
    }

    public function thankyou(){
        return view('UserUI.thankyou');
    }

    public function ordertracking(){
        return view('UserUI.order-tracking');
    }

    public function page404(){
        return view('UserUI.404');
    }
}
