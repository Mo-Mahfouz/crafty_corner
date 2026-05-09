<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>My Orders - sšr</title>
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

        .card-box {
            background: #fff;
            border-radius: 12px;
            padding: 25px;
            border: 1px solid #eee;
            margin-bottom: 20px;
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
            width: 50px;
            height: 50px;
            object-fit: cover;
            border-radius: 8px;
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar px-4 d-flex justify-content-between align-items-center py-3">
        <a href="{{ route('home') }}" class="text-decoration-none logo">◇ sšr</a>
        <div class="d-flex gap-3">
            <a href="{{ route('home') }}" class="text-decoration-none text-dark">Home</a>
            <a href="{{ route('collection') }}" class="text-decoration-none text-dark">Shop</a>
            <a href="{{ route('cart.index') }}" class="text-decoration-none text-dark">Cart</a>
        </div>
    </nav>

    <div class="container py-5">

        <h3 class="mb-1">My Orders</h3>
        <p class="text-muted mb-4">Track all your orders and their status</p>

        @if(session('success'))
            <div class="alert alert-success rounded-3">{{ session('success') }}</div>
        @endif

        @forelse($orders as $order)
            <div class="card-box">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <div>
                        <h5 class="mb-0">#{{ $order->id }}</h5>
                        <small class="text-muted">{{ $order->created_at->format('d M Y, h:i A') }}</small>
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

                <hr>

                <!-- Items -->
                @foreach($order->items as $item)
                    <div class="d-flex align-items-center gap-3 mb-2">
                        <img src="{{ asset('storage/' . $item->image) }}" class="item-img">
                        <div class="flex-grow-1">
                            <div>{{ $item->name }}</div>
                            <small class="text-muted">Qty: {{ $item->quantity }}</small>
                        </div>
                        <div style="color: var(--main)">EGP {{ number_format($item->price * $item->quantity, 2) }}</div>
                    </div>
                @endforeach

                <hr>

                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <small class="text-muted">Shipping to: {{ $order->address }}</small>
                    </div>
                    <div class="d-flex align-items-center gap-3">
                        @if($order->status == 'confirmed' || $order->status == 'completed')
                            <a href="https://wa.me/201555677945?text=Hi! I'd like to track my order %23{{ $order->id }}"
                                target="_blank" class="btn btn-sm" style="background:#25D366; color:#fff; border-radius:20px;">
                                📦 Track Your Order
                            </a>
                        @elseif($order->status == 'canceled')
                            <a href="https://wa.me/201555677945?text=Hi! My order %23{{ $order->id }} was rejected. Can you explain the reason?"
                                target="_blank" class="btn btn-sm" style="background:#ff4d4d; color:#fff; border-radius:20px;">
                                ❌ Explain Rejection Reason
                            </a>
                        @endif
                        <b style="color: var(--main)">Total: EGP {{ number_format($order->total_price, 2) }}</b>
                    </div>
                </div>
            </div>
        @empty
            <div class="card-box text-center py-5">
                <h5 class="text-muted">No orders yet</h5>
                <a href="{{ route('collection') }}" class="btn mt-3" style="background: var(--main); color: #fff;">Start
                    Shopping</a>
            </div>
        @endforelse

    </div>

</body>

</html>