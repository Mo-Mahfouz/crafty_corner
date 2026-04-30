<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductsController extends Controller
{

    public function index()
    {
        return view('Products.productGrid');
    }
    public function productDetails($id)
    {
        return view('Products.productDetails');
    }
 
}
