<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Cart;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $orders = Cart::with('user')->latest()->get(); // ✅ جيب كل الأوردرات
        $totalOrders = $orders->count();
        $totalUsers = User::where('role', 'user')->count();

        return view('dashboard.index', compact('orders', 'totalOrders', 'totalUsers'));
    }
}