<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductsController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('Products.productGrid', compact('products'));
    }

    public function filterByCategory($category)
    {
        $products = Product::where('category', $category)->get();
        return view('Products.productGrid', compact('products', 'category'));
    }

    public function productDetails($id)
    {
        $product = Product::findOrFail($id);
        return view('Products.productDetails', compact('product'));
    }
    public function filterByCategoryBabyClothes()
    {
        return ('baby_clothes');
    }
    public function filterByCategoryEmbroidery()
    {
        return ('embroidery');
    }
    public function filterByCategoryGifts()
    {
        return ('gifts');
    }
    public function filterByCategoryCustomOrders()
    {
        return ('custom_orders');
    }
    public function filterByCategoryAllProducts()
    {
        return view('layouts.collections');
    }

}