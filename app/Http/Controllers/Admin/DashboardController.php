<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        return view('AdminDashboard.home');
    }
    public function product(){
        return view('AdminDashboard.product');
    }
    public function createproduct(){
        return view('AdminDashboard.createproduct');
    }
}
