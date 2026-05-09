<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        :root {
            --main: #c89b6d;
            --bg: #f7f5f2;
        }

        body {
            background: var(--bg);
            font-family: Arial;
        }

        .navbar {
            background: #fff;
            border-bottom: 1px solid #eee;
        }

        .logo {
            color: var(--main);
            font-weight: bold;
        }

        .sidebar {
            background: #fff;
            height: 100vh;
            border-right: 1px solid #eee;
        }

        .sidebar a {
            display: block;
            padding: 12px;
            color: #555;
            text-decoration: none;
            border-radius: 8px;
        }

        .sidebar a.active,
        .sidebar a:hover {
            background: #f3ede7;
            color: var(--main);
        }

        .card-box {
            background: #fff;
            border-radius: 12px;
            padding: 20px;
            border: 1px solid #eee;
        }

        .status {
            padding: 4px 12px;
            border-radius: 20px;
            font-size: 12px;
        }

        .blue {
            background: #e6f0ff;
            color: #2b6cb0;
        }

        .green {
            background: #e6f7ee;
            color: #2f855a;
        }

        .orange {
            background: #fff4e5;
            color: #c05621;
        }

        .red {
            background: #fde8e8;
            color: #c53030;
        }

        .main-btn {
            background: var(--main);
            color: #fff;
            border: none;
        }

        .main-btn:hover {
            background: #b88a5c;
            color: #fff;
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar px-4 d-flex justify-content-between align-items-center py-2">
        <div class="d-flex gap-3">
            <span>Shop</span>
            <span>Admin</span>
        </div>
        <div class="logo">◇ sšr</div>
        <div class="d-flex gap-3 align-items-center">
            <span>👤 {{ Auth::user()->name }}</span>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row">

            <!-- Sidebar -->
            <div class="col-md-2 sidebar p-3">
                <a href="{{ route('dashboard.index') }}" class="active">Orders</a>
                <a href="{{ route('dashboard.activity_logs') }}">Activity Logs</a>
                <a href="{{ route('dashboard.account') }}">Account</a>
                <div class="mt-5">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="btn text-danger w-100 text-start">Sign Out</button>
                    </form>
                </div>
            </div>

            <!-- Main -->
            <div class="col-md-10 p-4">

                <!-- Header -->
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <div>
                        <h3>Orders Management</h3>
                        <small class="text-muted">Manage and track all purchases</small>
                    </div>
                    <div class="d-flex gap-2">
                        <input class="form-control" style="width:280px; border-radius:20px;"
                            placeholder="Search by ID or Customer">
                        <button class="btn btn-light">Filters</button>
                    </div>
                </div>

                <!-- Stats -->
                <div class="row mb-4">
                    <div class="col-md-3">
                        <div class="card-box text-center">
                            <h6 class="text-muted">Total Orders</h6>
                            <h3>{{ $totalOrders }}</h3>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card-box text-center">
                            <h6 class="text-muted">Total Users</h6>
                            <h3>{{ $totalUsers }}</h3>
                        </div>
                    </div>
                </div>

                <!-- Table -->
                <div class="card-box">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Order</th>
                                <th>Customer</th>
                                <th>Items</th>
                                <th>Total</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($orders as $order)
                                <tr>
                                    <td>
                                        <a href="{{ route('dashboard.order.show', $order->id) }}"
                                            style="color: var(--main)">#{{ $order->id }}</a>
                                    </td>
                                    <td>{{ $order->user->name ?? 'N/A' }}</td>
                                    <td>{{ $order->items->count() }}</td>
                                    <td>EGP {{ number_format($order->total_price, 2) }}</td>
                                    <td>
                                        @if($order->status == 'pending')
                                            <span class="status orange">Pending</span>
                                        @elseif($order->status == 'under_review')
                                            <span class="status blue">Under Review</span>
                                        @elseif($order->status == 'confirmed')
                                            <span class="status green">Confirmed</span>
                                        @elseif($order->status == 'completed')
                                            <span class="status green">Completed</span>
                                        @elseif($order->status == 'canceled')
                                            <span class="status red">Canceled</span>
                                        @endif
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="text-center text-muted">No orders yet</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>

</body>

</html>