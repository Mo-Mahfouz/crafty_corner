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
        $productType = 'baby_clothes';
        return view('collection.productDetails', compact('product', 'productType'));
    }

    public function showEmbroideryProduct($id)
    {
        $product = Embroidery::findOrFail($id);
        $productType = 'embroidery';
        return view('collection.productDetails', compact('product', 'productType'));
    }

    public function showGiftProduct($id)
    {
        $product = Gift::findOrFail($id);
        $productType = 'gifts';
        return view('collection.productDetails', compact('product', 'productType'));
    }

    public function create()
    {
        return view('dashboard.products.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpg,jpeg,png|max:2048',
            'category' => 'required|in:baby_clothes,embroidery,gifts',
        ]);

        $category = $request->category;
        $folderMap = [
            'baby_clothes' => 'Baby_clothes',
            'embroidery' => 'Embroideries',
            'gifts' => 'Gifts',
        ];
        $folder = $folderMap[$category];
        $image = $request->file('image');
        $imageName = $image->getClientOriginalName();
        $image->move(public_path('images/' . $folder), $imageName);

        $data = [
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description,
            'image' => 'images/' . $folder . '/' . $imageName,
        ];

        if ($category === 'baby_clothes') {
            baby_clothes_product::create($data);
        } elseif ($category === 'embroidery') {
            Embroidery::create($data);
        } elseif ($category === 'gifts') {
            Gift::create($data);
        }

        return redirect()->route('dashboard.index')->with('success', 'Product added successfully!');
    }

    public function adminIndex()
    {
        $babyClothes = baby_clothes_product::all()->map(function ($item) {
            $item->type = 'baby_clothes';
            return $item;
        });

        $embroideries = Embroidery::all()->map(function ($item) {
            $item->type = 'embroidery';
            return $item;
        });

        $gifts = Gift::all()->map(function ($item) {
            $item->type = 'gifts';
            return $item;
        });

        $products = $babyClothes->concat($embroideries)->concat($gifts);

        return view('dashboard.products.index', compact('products'));
    }

    public function edit($type, $id)
    {
        if ($type === 'baby_clothes') {
            $product = baby_clothes_product::findOrFail($id);
        } elseif ($type === 'embroidery') {
            $product = Embroidery::findOrFail($id);
        } else {
            $product = Gift::findOrFail($id);
        }

        return view('dashboard.products.edit', compact('product', 'type'));
    }

    public function update(Request $request, $type, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        if ($type === 'baby_clothes') {
            $product = baby_clothes_product::findOrFail($id);
        } elseif ($type === 'embroidery') {
            $product = Embroidery::findOrFail($id);
        } else {
            $product = Gift::findOrFail($id);
        }

        $folderMap = [
            'baby_clothes' => 'Baby_clothes',
            'embroidery' => 'Embroideries',
            'gifts' => 'Gifts',
        ];

        if ($request->hasFile('image')) {
            $folder = $folderMap[$type];
            $image = $request->file('image');
            $imageName = $image->getClientOriginalName();
            $image->move(public_path('images/' . $folder), $imageName);
            $product->image = 'images/' . $folder . '/' . $imageName;
        }

        $product->name = $request->name;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->save();

        return redirect()->route('dashboard.products.index')->with('success', 'Product updated successfully!');
    }

    public function destroy($type, $id)
    {
        if ($type === 'baby_clothes') {
            $product = baby_clothes_product::findOrFail($id);
        } elseif ($type === 'embroidery') {
            $product = Embroidery::findOrFail($id);
        } else {
            $product = Gift::findOrFail($id);
        }

        $product->delete();

        return redirect()->route('dashboard.products.index')->with('success', 'Product deleted successfully!');
    }
}