<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {
        $products = Product::all();
        return view('admin.product-index', compact('products'));
    }


    public function create()
    {
        return view('admin.product-create');
    }


    public function store(Request $request)
    {

        $validated = $request->validate([
            'name' => 'required|min:3',
            'price' => 'required|numeric|min:0',
            'description' => 'required|string',
            'image_url' => 'required|mimes:jpg,jpeg,png',
            'tag' => 'required|integer',
        ]);

        $validated['slug'] = Str::slug($validated['name']) . '-' . time();

        $file = $request->file('image_url');
        $fileName = time() . '_' . $file->getClientOriginalName();
        $file->move(public_path('img/images'), $fileName);
        $validated['image_url'] = $fileName;
        Product::create($validated);
        return redirect()->route('product.index')->with('success', 'Product Created Successfully');
    }


    public function show(Product $product)
    {
        return $product;
    }


    public function edit(Product $product)
    {
        //
    }


    public function update(Request $request, Product $product)
    {
        //
    }

    public function destroy(Product $product)
    {
        //
    }
}