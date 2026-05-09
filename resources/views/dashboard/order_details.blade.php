<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Order #{{ $order->id }} - Admin</title>
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

        .sidebar a:hover {
            background: #f3ede7;
            color: var(--main);
        }

        .card-box {
            background: #fff;
            border-radius: 12px;
            padding: 25px;
            border: 1px solid #eee;
            margin-bottom: 20px;
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

        .item-img {
            width: 60px;
            height: 60px;
            object-fit: cover;
            border-radius: 8px;
        }

        .receipt-img {
            width: 100%;
            max-height: 400px;
            object-fit: contain;
            border-radius: 10px;
            border: 1px solid #eee;
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar px-4 d-flex justify-content-between align-items-center py-2">
        <div class="d-flex gap-3"><span>Shop</span><span>Admin</span></div>
        <div class="logo">◇ sšr</div>
        <div><span>👤 {{ Auth::user()->name }}</span></div>
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
                        <a href="{{ route('dashboard.index') }}" class="text-muted text-decoration-none">← Back to
                            Orders</a>
                        <h3 class="mt-1">Order #{{ $order->id }}</h3>
                        <small class="text-muted">Placed on {{ $order->created_at->format('d M Y, h:i A') }}</small>
                    </div>
                    <div>
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
                    </div>
                </div>

                @if(session('success'))
                    <div class="alert alert-success rounded-3">{{ session('success') }}</div>
                @endif

                <div class="row">
                    <div class="col-md-8">

                        <!-- Customer Info -->
                        <div class="card-box">
                            <h5 class="mb-3">Customer Details</h5>
                            <p><b>Name:</b> {{ $order->user->name ?? 'N/A' }}</p>
                            <p><b>Email:</b> {{ $order->user->email ?? 'N/A' }}</p>
                            <p><b>Full Name:</b> {{ $order->full_name }}</p>
                            <p><b>Phone:</b> {{ $order->phone }}</p>
                            <p><b>Address:</b> {{ $order->address }}</p>
                            @if($order->notes)
                                <p><b>Notes:</b> {{ $order->notes }}</p>
                            @endif
                        </div>

                        <!-- Order Items -->
                        <div class="card-box">
                            <h5 class="mb-3">Order Items</h5>
                            @foreach($order->items as $item)
                                <div class="d-flex align-items-center gap-3 mb-3">
                                    <img src="{{ asset('storage/' . $item->image) }}" class="item-img">
                                    <div class="flex-grow-1">
                                        <div><b>{{ $item->name }}</b></div>
                                        <small class="text-muted">{{ ucfirst($item->product_type) }} • Qty:
                                            {{ $item->quantity }}</small>
                                    </div>
                                    <div style="color: var(--main)"><b>EGP
                                            {{ number_format($item->price * $item->quantity, 2) }}</b></div>
                                </div>
                            @endforeach
                            <hr>
                            <div class="d-flex justify-content-between">
                                <b>Total</b>
                                <b style="color: var(--main)">EGP {{ number_format($order->total_price, 2) }}</b>
                            </div>
                        </div>

                        <!-- Payment Receipt -->
                        <div class="card-box">
                            <h5 class="mb-3">Payment Receipt</h5>
                            @if($order->payment_screenshot)
                                <img src="{{ asset('storage/' . $order->payment_screenshot) }}" class="receipt-img">
                            @else
                                <p class="text-muted">No receipt uploaded</p>
                            @endif
                        </div>

                    </div>

                    <!-- Update Status -->
                    <div class="col-md-4">
                        <div class="card-box">
                            <h5 class="mb-3">Update Status</h5>
                            <form method="POST" action="{{ route('dashboard.order.status', $order->id) }}">
                                @csrf
                                <select name="status" class="form-select mb-3">
                                    <option value="pending" {{ $order->status == 'pending' ? 'selected' : '' }}>Pending
                                    </option>
                                    <option value="under_review" {{ $order->status == 'under_review' ? 'selected' : '' }}>
                                        Under Review</option>
                                    <option value="confirmed" {{ $order->status == 'confirmed' ? 'selected' : '' }}>
                                        Confirmed</option>
                                    <option value="completed" {{ $order->status == 'completed' ? 'selected' : '' }}>
                                        Completed</option>
                                    <option value="canceled" {{ $order->status == 'canceled' ? 'selected' : '' }}>Canceled
                                    </option>
                                </select>
                                <button type="submit" class="btn main-btn w-100">Update Status</button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

</body>

</html>