<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsControler extends Controller
{
    public function index(){
        // $products = Products::all();
        
        return view('index')->with ['products'.Products::all()];
    }

    public function show(Products $products)
    {
        return view('', ['products' => $products]);
    } 

    public function store()
    {
        $validated = request()->validate([
            'title' => ['required', 'min:20', 'max:255'],
            'products_image' => ['mimes:png,jpg,jpeg'],
            'body' => ['required', 'min:20'],
        ]);

       

        if (request('products_image')) {
            $filename = request('products_image')->getClientOriginalName();
            $validated['products_image'] = request('products_image')->store('images');
        }

        auth()->user()->products()->create($validated);
        return back();
    }
}

    