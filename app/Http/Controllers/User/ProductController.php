<?php

namespace App\Http\Controllers\User;

use App\Models\product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function fetchproduct(){
        $fetchproduct = product::all();
        return view("UserUI.shop",compact("fetchproduct"));
    }
}
