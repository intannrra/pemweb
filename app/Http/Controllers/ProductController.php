<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;

//memanggil model product
use App\Models\Product;
use App\Models\RedirectResponse;


class ProductController extends Controller
{
    public function index(): View
    {
        $products = Product::latest()->paginate(10);
        return view('products.index', compact('products'));
    }

    public function create(): View
    {
        return view('products.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'image'     =>'required|image|mines:jpeg,jpg,png|max:2048mb',
            'title'     =>'required|min:5',
            'description'   =>'required|min:10',
            'price'     =>'required|numeric',
            'stock'     =>'required|numeric'
        ]);

        $image =$request->file('image');
        $image->storageAs('products', $image->hashName(), 'public');

        Product::create([
            'image' => $image->hashName(),
            'title' => $request->title,
            'description'   => $request->description,
            'price' => $request->price,
            'stock' => $request->stock
        ]);

        return redirect()->route('products.index')->with('success', 'Data Berhasil Disimpan.');
    }
    //
}
