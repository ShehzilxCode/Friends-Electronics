<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    
    public function register(){
        return view('UserUI.register');
    }
    
    public function login(){
        return view('UserUI.login');
    }
    

}