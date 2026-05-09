<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $orders = Order::with(['user', 'items'])->latest()->get();
        $totalOrders = $orders->count();
        $totalUsers = User::where('role', 'user')->count();

        return view('dashboard.index', compact('orders', 'totalOrders', 'totalUsers'));
    }

    public function showOrder($id)
    {
        $order = Order::with(['user', 'items'])->findOrFail($id);
        return view('dashboard.order_details', compact('order'));
    }

    public function updateStatus(Request $request, $id)
    {
        $order = Order::findOrFail($id);

        $request->validate([
            'status' => 'required|in:pending,under_review,confirmed,completed,canceled',
        ]);

        $order->update(['status' => $request->status]);

        return back()->with('success', 'Order status updated successfully!');
    }
}