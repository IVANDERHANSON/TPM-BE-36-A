<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductAPIController extends Controller
{
    function getProducts() {
        $products = Product::all();
        return response()->json([
            'data' => $products
        ]);
    }

    function createProduct(Request $request) {
        $validated = $request->validate([
            "ProductName" => "required",
            "ProductPrice" => ["required", "integer", "min:1"],
            "ProductImage" => ["required", "image"],
            "CategoryId" => "required"
        ], [
            "ProductName.required" => "Product Name is required.",
            "ProductPrice.required" => "Product Price is required.",
            "ProductPrice.min" => "Product price can't less than 1.",
            "ProductImage.image" => "Product Image must be an image.",
            "ProductImage.required" => "Product Image is required.",
            "CategoryId.required" => "Category is required."
        ]);

        $now = now()->format('Y-m-d_H.i.s');
        $filename = $now.'_'.$request->file('ProductImage')->getClientOriginalName();
        $request->file('ProductImage')->storeAs('/public'.'/'.$filename);

        Product::create([
            "ProductName" => $request->ProductName,
            "ProductPrice" => $request->ProductPrice,
            "ProductImage" => $filename,
            "CategoryId" => $request->CategoryId
        ]);

        return response('New Product Created Succesfully.', 201);
    }

    function updateProduct(Request $request, $productId) {
        $request->validate([
            "ProductName" => "required",
            "ProductPrice" => ["required", "integer", "min:1"],
            "ProductImage" => ["required", "image"],
            "CategoryId" => "required"
        ], [
            "ProductName.required" => "Product Name is required.",
            "ProductPrice.required" => "Product Price is required.",
            "ProductPrice.min" => "Product price can't less than 1.",
            "ProductImage.image" => "Product Image must be an image.",
            "ProductImage.required" => "Product Image is required.",
            "CategoryId.required" => "Category is required."
        ]);

        $product = Product::findOrFail($productId);
        Storage::delete('/public'.'/'.$product->ProductImage);
        $now = now()->format('Y-m-d_H.i.s');
        $filename = $now.'_'.$request->file('ProductImage')->getClientOriginalName();
        $request->file('ProductImage')->storeAs('/public'.'/'.$filename);

        $product->update([
            "ProductName" => $request->ProductName,
            "ProductPrice" => $request->ProductPrice,
            "ProductImage" => $filename,
            "CategoryId" => $request->CategoryId
        ]);

        return response('Product Updated Succesfully.', 201);
    }

    function deleteProduct($productId) {
        $product = Product::findOrFail($productId);
        Storage::delete('/public'.'/'.$product->ProductImage);
        Product::destroy($productId);
        return response('Product '.$productId.' Deleted Succesfully.', 201);
    }
}
