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
}