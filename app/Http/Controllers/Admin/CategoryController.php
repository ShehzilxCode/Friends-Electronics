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
            'status' => 'required',
        ]);

        if($validate->fails())  {
            return response()->json([
                "status" => "error",
                "message"=> " Category & Status  is required"
            ]);
        }else{
        $category = new category();
        $category->Category = $request->categoryname;
        $category->status = $request->status;
        $category->save();
        return response()->json([
            'status' => 'success',
            'message' => 'Category has been inserted'
        ]);
    }


}
public function fetch(){
    $categories = Category::orderBy('id', 'desc')->paginate(10); // Descending order and paginate
    return response()->json($categories);

}


public function getrecord(Request $request)
{
    $category = Category::find($request->id);
    if ($category) {
        return response()->json([
            'status' => 'success',
            'data' => $category
        ]);
    } else {
        return response()->json([
            'success' => false,
            'error' => 'Category not found'
        ]);
    }
}

// update record
public function updaterecord(Request $request)
{
    // Validate the incoming request data
    $category = Category::find($request->id);

    if (!$category) {
        return response()->json([
            'status' => 'error',
            'message' => 'Category not found'
        ], 404);
    }

    // Update the category record
    $category->Category = $request->categoryinput;
    $category->Status = $request->upstatus;

    $category->save();

    return response()->json([
        'status' => 'success',
        'message' => 'Record Updated'
    ]);
}

// delete record

public function deleterecord($id){
    $category = Category::find($id);

    if($category){
        $category->delete();
        return response()->json([
            'status'=> 'success',
            'message'=> 'Record Deleted'
        ]);
    }
    else{
        return response()->json([
            'status'=> 'error',
            'message'=> 'Record not found'
        ]);
    }

}
// sorting

public function search(Request $request)
{
    $query = $request->input('query');
    $categories = Category::where('Category', 'LIKE', "%{$query}%")->get();

    return response()->json(['data' => $categories]);
}


public function filter(Request $request)
{
    $filter = Category::query();
    if ($request->has('date') && $request->date != '') {
        $filter->whereDate('created_at', $request->date);
    }
    if ($request->has('status') && $request->status != '') {
        if ($request->status != 'all') {
            $filter->where('status', $request->status);
        }
    }
    $categories = $filter->get();
    return response()->json($categories);
}


}
