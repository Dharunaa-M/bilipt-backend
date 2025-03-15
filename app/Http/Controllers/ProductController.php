<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    // Insert Product
    public function store(Request $request)
    {
        
        $product = Product::create([
            'pdt_name' => $request-> pdt_name,
            'pdt_category' => $request-> pdt_category,
            'brandname' => $request-> brandname,
            'baseprice' => $request-> baseprice,
            'salesrate' => $request-> salesrate,
            'tax_id' => $request-> tax_id,
            'unitname' => $request-> unitname,
        ]);

        //return response()->json(['message' => 'Product created successfully', 'product' => $product], 201);
    }

    // Update Product
    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        $request->validate([
            'pdt_name' => 'sometimes|string|max:255',
            'pdt_category' => 'sometimes|string|max:255',
            'brandname' => 'sometimes|string|max:255',
            'baseprice' => 'sometimes|numeric|min:0',
            'salesrate' => 'sometimes|numeric|min:0',
            'tax_id' => 'sometimes|exists:taxes,id',
            'unitname' => 'sometimes|string|max:100',
        ]);

        $product->update($request->all());

        return response()->json(['message' => 'Product updated successfully', 'product' => $product], 200);
    }
}
