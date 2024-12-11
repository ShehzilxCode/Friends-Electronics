<?php

namespace App\Http\Controllers\Admin;

use App\Models\category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
// use App\Http\Controllers\Admin\CategoryController;

class CategoryController extends Controller
{
    public function create(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'categoryname' => 'required|string|max:255',
        ]);

        if($validate->fails())  {
            return response()->json([
                "status" => "error",
                "message"=> "Category is required"
            ]);
        }else{
        $category = new category();
        $category->Category = $request->categoryname;
        $category->status = 0;
        $category->save();
        return response()->json([
            'status' => 'success',
            'message' => 'Category has been inserted'
        ]);
    }

}
public function fetch(){
    $fetchcategory = Category::all();
    return response()->json([
        'data' => $fetchcategory
    ]);
}

}
