<?php

namespace App\Http\Controllers\Admin;

use App\Models\product;
use App\Models\ProductImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    public function create(Request $request)
    {
        $input = $request->all();

        $validator = Validator::make($input, [
            'producttitle' => 'required|string|max:255',
            'productcategory' => 'required|exists:categories,id',
            'productdesc' => 'required|string',
            'productprice' => 'required|numeric',
            'productdiscount' => 'required|numeric',
            // 'productTotal' => 'required|numeric',
            'productsku' => 'required|numeric',
            'productmainimage' => 'required|mimes:jpg,jpeg,png,gif|max:2048',
            'file.*' => 'nullable|mimes:jpg,jpeg,png,gif|max:2048',
        ]);


        if ($validator->fails()) {
            return response()->json([
                'status' => 'warning',
                'message' => $validator->errors()->first(),
            ]);
        }

        $product = new product();
        $product->name = $request->producttitle;
        $product->category_id = $request->productcategory;
        $product->description = $request->productdesc;
        $product->price = $request->productprice;
        $product->discount = $request->productdiscount;
        // $product->Total = $request->productTotal;
        $product->sku = $request->productsku;
        $product->status = $request->productstatus;
        if($request->hasFile('productmainimage')) {
            $mainFile = $request->file('productmainimage');
            $mainFileName = time() . '_' . $mainFile->getClientOriginalName();
            $mainFilePath = $mainFile->storeAs('products', $mainFileName, 'public');
            $product->main_image_path = $mainFilePath;
        }

        // total working here
        $total = $product->price ;
        $discount = $total * ($product->discount / 100);
        $finaltotal = $total-$discount;
        $product->Total = $finaltotal;
        $product->save();

        \Log::info('Request Data:', $request->all());
        \Log::info('Request Files:', $request->file('file') ?? []);

        if ($request->hasFile('file')) {
            foreach ($request->file('file') as $file) {
                $fileName = time() . '_' . $file->getClientOriginalName();
                $filePath = $file->storeAs('product_images', $fileName, 'public'); // Store the file
                ProductImage::create([
                    'product_id' => $product->id,
                    'image_path' => $filePath,
                ]);
            }
        } 
    
        return response()->json([
            'status' => 'success',
            'message' => 'Product created successfully!',
        ]);
    }

    public function fetch(Request $request)
    {
        $products = product::with('category')->get(); // Eager load category relation

        return $products->map(function ($product) {
            return [
                'id' => $product->id,
                'name' => $product->name,
                'category_name' => $product->category->Category ?? 'Uncategorized',
                'description' => $product->description,
                'price' => $product->price,
                'discount' => $product->discount,
                'main_image_path' => $product->main_image_path,
                'sku' => $product->sku,
                'status' => $product->status,
            ];
        });

    }
}
