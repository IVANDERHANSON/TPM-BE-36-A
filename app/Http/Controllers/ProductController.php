<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    function getCreateProductPage() {
        return view("createProduct");
    }

    function createProduct(Request $request) {
        $request->validate([
            "ProductName" => "required",
            "ProductPrice" => ["required", "integer", "min:1"]
        ], [
            "ProductName.required" => "Product Name is required.",
            "ProductPrice.required" => "Product Price is required.",
            "ProductPrice.min" => "Product price can't less than 1."
        ]);

        Product::create([
            "ProductName" => $request->ProductName,
            "ProductPrice" => $request->ProductPrice
        ]);

        return redirect(route('getCreateProductPage'));
    }
}
