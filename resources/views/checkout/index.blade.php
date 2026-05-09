<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Checkout - Crafty Corner</title>
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

        .section-title {
            color: var(--main);
            font-size: 15px;
            font-weight: bold;
            margin-bottom: 15px;
        }

        .form-control:focus {
            border-color: var(--main);
            box-shadow: 0 0 0 0.2rem rgba(200, 155, 109, 0.25);
        }

        .main-btn {
            background: var(--main);
            color: #fff;
            border: none;
            padding: 14px;
            font-size: 16px;
            border-radius: 8px;
        }

        .main-btn:hover {
            background: #b88a5c;
            color: #fff;
        }

        .payment-box {
            background: #fff8f3;
            border: 1px solid #f0dcc8;
            border-radius: 10px;
            padding: 15px;
        }

        .upload-box {
            border: 2px dashed #c89b6d;
            border-radius: 10px;
            padding: 30px;
            text-align: center;
            cursor: pointer;
            color: #999;
        }

        .item-img {
            width: 60px;
            height: 60px;
            object-fit: cover;
            border-radius: 8px;
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar px-4 d-flex justify-content-between align-items-center py-3">
        <a href="{{ route('home') }}" class="text-decoration-none">
            <span class="logo">◇ Nourhan Store</span>
        </a>
        <div class="d-flex gap-3">
            <a href="{{ route('home') }}" class="text-decoration-none text-dark">Home</a>
            <a href="{{ route('collection') }}" class="text-decoration-none text-dark">Shop</a>
            <a href="{{ route('cart.index') }}" class="text-decoration-none text-dark">Cart</a>
        </div>
    </nav>

    <div class="container py-5">
        <h2 class="text-center mb-2">Finalize Your Order</h2>
        <p class="text-center text-muted mb-5">Complete your details and bring handcrafted elegance to your doorstep</p>

        <form method="POST" action="{{ route('checkout.store') }}" enctype="multipart/form-data">
            @csrf

            <div class="row">
                <div class="col-md-8">

                    <!-- Order Summary -->
                    <div class="card-box">
                        <div class="section-title">📦 Your Selection</div>
                        @foreach($cartItems as $item)
                            <div class="d-flex align-items-center gap-3 mb-3">
                                <img src="{{ asset('storage/' . $item->image) }}" class="item-img">
                                <div class="flex-grow-1">
                                    <div>{{ $item->name }}</div>
                                    <small class="text-muted">Qty: {{ $item->quantity }}</small>
                                </div>
                                <div class="text-end" style="color: var(--main)">
                                    EGP {{ number_format($item->price * $item->quantity, 2) }}
                                </div>
                            </div>
                        @endforeach
                        <hr>
                        <div class="d-flex justify-content-between">
                            <b>Total Amount</b>
                            <b style="color: var(--main)">EGP {{ number_format($total, 2) }}</b>
                        </div>
                    </div>

                    <!-- Shipping Info -->
                    <div class="card-box">
                        <div class="section-title">🚚 Shipping Information</div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Full Name</label>
                                <input type="text" name="full_name"
                                    class="form-control @error('full_name') is-invalid @enderror"
                                    placeholder="Enter your full name" value="{{ old('full_name') }}">
                                @error('full_name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Phone Number</label>
                                <input type="text" name="phone"
                                    class="form-control @error('phone') is-invalid @enderror"
                                    placeholder="+20 000 000 0000" value="{{ old('phone') }}">
                                @error('phone')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-12 mb-3">
                                <label class="form-label">Shipping Address</label>
                                <input type="text" name="address"
                                    class="form-control @error('address') is-invalid @enderror"
                                    placeholder="Apartment, Street, City" value="{{ old('address') }}">
                                @error('address')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-12">
                                <label class="form-label text-muted">Order Notes (optional)</label>
                                <textarea name="notes" class="form-control" rows="3"
                                    placeholder="Special requests, gift messages, or delivery instructions...">{{ old('notes') }}</textarea>
                            </div>
                        </div>
                    </div>

                    <!-- Payment -->
                    <div class="card-box">
                        <div class="section-title">💳 Payment & Receipt</div>
                        <div class="payment-box mb-3">
                            <p class="mb-2"><b>Payment Instructions</b></p>
                            <p class="text-muted small">Please complete your manual transfer to one of the following
                                accounts and upload a screenshot of your receipt below to finalize your order.</p>
                            <div class="row mt-3">
                                <div class="col-md-6">
                                    <small class="text-muted">INSTAPAY</small>
                                    <p><b>010 2235 9878</b></p>
                                </div>
                                <div class="col-md-6">
                                    <small class="text-muted">INSTAPAY</small>
                                    <p><b>nourhan.store@instapay</b></p>
                                </div>
                            </div>
                        </div>

                        <!-- Upload Screenshot -->
                        <label class="form-label">Proof of Payment</label>
                        <div class="upload-box" onclick="document.getElementById('screenshot').click()">
                            <div>⬆️</div>
                            <div>Upload Payment Screenshot</div>
                            <small>PNG, JPG or JPEG (Max 2MB)</small>
                            <br>
                            <span id="file-name" class="text-muted small"></span>
                        </div>
                        <input type="file" id="screenshot" name="payment_screenshot"
                            class="d-none @error('payment_screenshot') is-invalid @enderror" accept="image/*"
                            onchange="document.getElementById('file-name').textContent = this.files[0].name">
                        @error('payment_screenshot')
                            <div class="text-danger small mt-1">{{ $message }}</div>
                        @enderror
                    </div>

                </div>

                <!-- Sidebar -->
                <div class="col-md-4">
                    <div class="card-box">
                        <h6 class="mb-3">Order Summary</h6>
                        <div class="d-flex justify-content-between mb-2">
                            <span class="text-muted">Subtotal</span>
                            <span>EGP {{ number_format($total, 2) }}</span>
                        </div>
                        <div class="d-flex justify-content-between mb-2">
                            <span class="text-muted">Shipping</span>
                            <span>EGP 15.00</span>
                        </div>
                        <hr>
                        <div class="d-flex justify-content-between mb-4">
                            <b>Total</b>
                            <b style="color: var(--main)">EGP {{ number_format($total + 15, 2) }}</b>
                        </div>
                        <button type="submit" class="btn main-btn w-100">Confirm & Submit Order</button>
                    </div>
                </div>

            </div>
        </form>
    </div>

</body>

</html>