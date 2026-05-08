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
        $detailsRoute = 'collection.baby_clothes.show';
        return view('collection.categoryItems', compact('productsFromDb', 'sectionName', 'detailsRoute'));
    }

    public function filterByCategoryEmbroidery()
    {
        $productsFromDb = Embroidery::all();
        $sectionName = 'Embroidery';
        $detailsRoute = 'collection.embroidery.show';
        return view('collection.categoryItems', compact('productsFromDb', 'sectionName', 'detailsRoute'));
    }

    public function filterByCategoryGifts()
    {
        $productsFromDb = Gift::all();
        $sectionName = 'Gifts';
        $detailsRoute = 'collection.gifts.show';
        return view('collection.categoryItems', compact('productsFromDb', 'sectionName', 'detailsRoute'));
    }
    public function showBabyClothesProduct($id)
    {
        $product = baby_clothes_product::findOrFail($id);
        return view('collection.productDetails', compact('product'));
    }
    public function showEmbroideryProduct($id)
    {
        $product = Embroidery::findOrFail($id);
        return view('collection.productDetails', compact('product'));
    }

    public function showGiftProduct($id)
    {
        $product = Gift::findOrFail($id);
        return view('collection.productDetails', compact('product'));
    }



}