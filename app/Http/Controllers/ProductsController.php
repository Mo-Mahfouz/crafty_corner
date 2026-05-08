<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\baby_clothes_product;
use App\Models\Embroidery;
use App\Models\Gift;
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
        $productsFromDb = baby_clothes_product::all();
        $sectionName = 'Baby Clothes';
        return view('collection.categoryItems', compact('productsFromDb', 'sectionName'));
    }
    public function filterByCategoryEmbroidery()
    {
        $productsFromDb = Embroidery::all();
        $sectionName = 'Embroidery';
        return view('collection.categoryItems', compact('productsFromDb', 'sectionName'));
    }
    public function filterByCategoryGifts()
    {
        $productsFromDb = Gift::all();
        $sectionName = 'Gifts';
        return view('collection.categoryItems', compact('productsFromDb', 'sectionName'));
    }

    public function showBabyClothesProduct($id)
    {
        $product = baby_clothes_product::findOrFail($id);
        return view('collection.productDetails', compact('product'));
    }



}