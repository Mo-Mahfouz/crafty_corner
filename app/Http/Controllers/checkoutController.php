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

        $screenshotPath = $request->file('payment_screenshot')->store('payments', 'public');

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

        Cart::where('user_id', Auth::id())->delete();

        ActivityLog::create([
            'user_id' => Auth::id(),
            'action' => 'order',
            'description' => Auth::user()->name . ' placed a new order #' . $order->id,
            'ip_address' => $request->ip(),
        ]);

        return redirect()->route('orders.index')->with('success', 'Order placed successfully!'); // ✅ بعد الأوردر يروح لـ my orders
    }

    // ✅ My Orders
    public function myOrders()
    {
        $orders = Order::with('items')
            ->where('user_id', Auth::id())
            ->latest()
            ->get();

        return view('orders.index', compact('orders'));
    }
}