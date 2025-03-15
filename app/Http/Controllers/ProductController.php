<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    // Insert Product
    public function store(Request $request)
    {
        $request->validate([
            'pdt_name' => 'required|string|max:255',
            'pdt_category' => 'required|string|max:255',
            'brandname' => 'required|string|max:255',
            'baseprice' => 'required|numeric|min:0',
            'salesrate' => 'required|numeric|min:0',
            'tax_id' => 'required|exists:tax,tax_id', // Assuming tax_id references a taxes table
            'unitname' => 'required|string|max:100',
        ]);

        $product = Product::create($request->all());

        return response()->json(['message' => 'Product created successfully', 'product' => $product], 201);
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
