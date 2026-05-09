@extends('layouts.nav')

@section('title', 'Cart – sšr')

@section('styles')
    <style>
        body {
            background: #f8f7f5;
            font-family: 'Inter', sans-serif;
            color: #222;
        }

        .serif {
            font-family: 'Cormorant Garamond', serif;
        }

        .gold {
            color: #d6a06a;
        }

        .border-soft {
            border: 1px solid #e8e1da;
        }

        .bg-soft {
            background: #fbfaf8;
        }

        .title {
            font-size: 70px;
            font-weight: 500;
        }

        .item-title {
            font-size: 24px;
            font-weight: 500;
        }

        .summary-title {
            font-size: 38px;
        }

        .price {
            font-size: 24px;
            font-weight: 600;
        }

        .total-price {
            font-size: 42px;
            font-weight: 700;
        }

        .btn-gold {
            background: #d6a06a;
            color: white;
            border: none;
        }

        .btn-gold:hover {
            background: #c58d55;
            color: white;
        }

        .btn-outline-gold {
            border: 1px solid #d6a06a;
            color: #d6a06a;
            background: white;
        }

        .btn-outline-gold:hover {
            background: #d6a06a;
            color: white;
        }

        .qty-box {
            width: 120px;
        }

        .cart-img {
            width: 120px;
            height: 120px;
            object-fit: cover;
            border-radius: 12px;
        }
    </style>
@endsection

@section('content')
    <div class="container py-5">
        <p class="text-secondary small mb-4">Home > Shopping Bag</p>
        <h1 class="title serif mb-5">Your Cart</h1>

        @if($cartItems->isEmpty())
            <div class="text-center py-5">
                <h3 class="serif">Your cart is empty</h3>
                <a href="{{ route('collection') }}" class="btn btn-gold mt-3 px-5 py-2 rounded-3">Continue Shopping</a>
            </div>
        @else
            <div class="row g-5">
                <div class="col-lg-8">
                    @foreach($cartItems as $item)
                        <div class="border-top py-4 d-flex justify-content-between">
                            <div class="d-flex gap-4">
                                <img src="{{ asset($item->image) }}" class="cart-img">
                                <div>
                                    <p class="text-uppercase small fw-semibold gold mb-2">{{ $item->product_type }}</p>
                                    <h2 class="item-title serif">{{ $item->name }}</h2>
                                    <p class="text-secondary">${{ $item->price }}</p>
                                    <div
                                        class="qty-box border-soft rounded-3 d-flex justify-content-around py-2 bg-white align-items-center">
                                        <form action="{{ route('cart.update', $item->id) }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="action" value="decrease">
                                            <button type="submit" class="border-0 bg-white">-</button>
                                        </form>
                                        <span>{{ $item->quantity }}</span>
                                        <form action="{{ route('cart.update', $item->id) }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="action" value="increase">
                                            <button type="submit" class="border-0 bg-white">+</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex flex-column justify-content-between text-end">
                                <h3 class="price serif">${{ $item->price * $item->quantity }}</h3>
                                <form action="{{ route('cart.remove', $item->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="border-0 bg-transparent text-secondary">🗑 Remove</button>
                                </form>
                            </div>
                        </div>
                    @endforeach

                    <div class="bg-light rounded-4 p-4 mt-5 d-flex justify-content-between align-items-center">
                        <div class="d-flex align-items-center gap-3">
                            <div class="bg-white rounded-circle d-flex justify-content-center align-items-center"
                                style="width:50px;height:50px;">🚚</div>
                            <div>
                                <h6 class="fw-bold mb-1">Complementary Shipping</h6>
                                <small class="text-secondary">on all orders over $500.</small>
                            </div>
                        </div>
                        <a href="{{ route('collection') }}" class="btn btn-outline-gold px-4 py-2 rounded-3">Continue
                            Shopping</a>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="bg-white border-soft rounded-4 overflow-hidden shadow-sm">
                        <div class="p-4 border-bottom">
                            <h2 class="summary-title serif mb-0">Order Summary</h2>
                        </div>
                        <div class="p-4">
                            <div class="d-flex justify-content-between mb-4 text-secondary">
                                <span>Subtotal ({{ $cartItems->count() }} items)</span>
                                <span>${{ $total }}</span>
                            </div>
                            <div class="d-flex justify-content-between mb-4 text-secondary">
                                <span>Estimated Shipping</span>
                                <span>$15.00</span>
                            </div>
                            <div class="d-flex justify-content-between mb-4 text-secondary">
                                <span>Sales Tax</span>
                                <span>Calculated at checkout</span>
                            </div>
                            <div class="border-top pt-4 d-flex justify-content-between align-items-center">
                                <h5 class="mb-0">Total</h5>
                                <h2 class="total-price serif gold mb-0">${{ $total + 15 }}</h2>
                            </div>
                            <a href="{{ route('checkout.index', ['id' => $cartItems->first()->id]) }}"
                                class="btn btn-gold w-100 py-3 rounded-3 mt-4 fw-semibold">
                                Proceed to Checkout
                            </a>
                        </div>
                        <div class="border-top p-4 text-secondary small lh-lg">
                            ✔ Secure encrypted checkout <br>
                            💳 We accept Visa, Mastercard & InstaPay
                        </div>
                    </div>

                    <div class="bg-white border-soft rounded-4 p-4 mt-4 shadow-sm">
                        <h6 class="mb-3 fw-semibold">Have a promo code?</h6>
                        <div class="d-flex gap-2">
                            <input type="text" class="form-control py-2" placeholder="Enter code"
                                style="border:1px solid #e8e1da;">
                            <button class="btn btn-light px-4 border-soft">Apply</button>
                        </div>
                    </div>

                    <div class="bg-white border-soft rounded-4 p-4 mt-4 shadow-sm">
                        <h6 class="mb-3 fw-semibold">Message For Order</h6>
                        <textarea class="form-control" rows="5" placeholder="Write your notes here..."
                            style="resize:none;border:1px solid #e8e1da;"></textarea>
                    </div>

                    <div class="bg-white border-soft rounded-4 p-4 mt-4 shadow-sm">
                        <h6 class="mb-3 fw-semibold">WhatsApp Number</h6>
                        <div class="input-group">
                            <span class="input-group-text" style="border:1px solid #e8e1da;">+20</span>
                            <input type="text" class="form-control" placeholder="Enter your WhatsApp number"
                                style="border:1px solid #e8e1da;">
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>

    <footer class="border-top mt-5 py-5 bg-soft">
        <div class="container">
            <div class="d-flex justify-content-center pt-3 text-secondary small">
                <span>© 2026 sšr. All rights reserved.</span>
            </div>
        </div>
    </footer>
@endsection