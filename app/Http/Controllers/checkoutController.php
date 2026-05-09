<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Cart;
use App\Models\ActivityLog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function index()
    {
        $cartItems = Cart::where('user_id', Auth::id())->get();
        $total = $cartItems->sum(fn($item) => $item->price * $item->quantity);

        return view('checkout.index', compact('cartItems', 'total'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'full_name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'address' => 'required|string|max:500',
            'notes' => 'nullable|string',
            'payment_screenshot' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $cartItems = Cart::where('user_id', Auth::id())->get();
        $total = $cartItems->sum(fn($item) => $item->price * $item->quantity);

        // ✅ رفع الـ screenshot
        $screenshotPath = $request->file('payment_screenshot')->store('payments', 'public');

        // ✅ إنشاء الأوردر
        $order = Order::create([
            'user_id' => Auth::id(),
            'total_price' => $total,
            'notes' => $request->notes,
            'status' => 'pending',
            'full_name' => $request->full_name,
            'phone' => $request->phone,
            'address' => $request->address,
            'payment_screenshot' => $screenshotPath,
        ]);

        // ✅ إنشاء الـ OrderItems
        foreach ($cartItems as $item) {
            OrderItem::create([
                'order_id' => $order->id,
                'product_type' => $item->product_type,
                'product_id' => $item->product_id,
                'name' => $item->name,
                'image' => $item->image,
                'price' => $item->price,
                'quantity' => $item->quantity,
            ]);
        }

        // ✅ مسح الـ Cart
        Cart::where('user_id', Auth::id())->delete();

        // ✅ تسجيل في الـ Activity Log
        ActivityLog::create([
            'user_id' => Auth::id(),
            'action' => 'order',
            'description' => Auth::user()->name . ' placed a new order #' . $order->id,
            'ip_address' => $request->ip(),
        ]);

        return redirect()->route('home')->with('success', 'Order placed successfully!');
    }
}