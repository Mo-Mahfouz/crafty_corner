<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;

class CartController extends Controller
{
    // عرض الكارت
    public function index()
    {
        $cartItems = Cart::where('user_id', auth()->id())->get();
        $total = $cartItems->sum(fn($item) => $item->price * $item->quantity);
        return view('cart', compact('cartItems', 'total'));
    }

    // إضافة منتج
    public function add(Request $request)
    {
        $existing = Cart::where('user_id', auth()->id())
            ->where('product_id', $request->product_id)
            ->where('product_type', $request->product_type)
            ->first();

        if ($existing) {
            $existing->increment('quantity');
        } else {
            Cart::create([
                'user_id' => auth()->id(),
                'product_type' => $request->product_type,
                'product_id' => $request->product_id,
                'name' => $request->name,
                'image' => $request->image,
                'price' => $request->price,
                'quantity' => 1,
            ]);
        }

        return redirect()->back()->with('success', 'Added to cart!');
    }

    // تحديث الكمية
    public function update(Request $request, $id)
    {
        $item = Cart::where('id', $id)
            ->where('user_id', auth()->id())
            ->firstOrFail();

        if ($request->action === 'increase') {
            $item->increment('quantity');
        } elseif ($request->action === 'decrease') {
            if ($item->quantity > 1) {
                $item->decrement('quantity');
            } else {
                $item->delete();
            }
        }

        return redirect()->back();
    }

    // حذف منتج
    public function remove($id)
    {
        Cart::where('id', $id)
            ->where('user_id', auth()->id())
            ->delete();

        return redirect()->back();
    }
}