<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index() {
        $products = Product::all();
        return view('product.index', compact('products'));
    }

    public function showAddForm() {
        return view('product.add');
    }

    public function addProduct(Request $request) {
        Product::create($request->all());
        return redirect('/products')->with('success', 'Product added successfully.');
    }
}
