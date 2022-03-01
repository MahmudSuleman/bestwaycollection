<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {
        return view('admin.product-index');
    }


    public function create()
    {
        return view('admin.product-create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' =>'required|min:3',
            'price'=>'required|numeric|min:0',
            'description' => 'required',
            'image' => 'required|mimes:jpg,jpeg,png'
        ]);

//        dd($request->file('image'));
    }


    public function show(Product $product)
    {
        //
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
