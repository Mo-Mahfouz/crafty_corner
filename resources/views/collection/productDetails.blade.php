@extends('layouts.nav') 

@section('title', $product->name . ' – sšr')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/productDetails.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
@endsection

@section('content')
    @if(session('success'))
        <div class="alert alert-success position-fixed top-0 start-50 translate-middle-x mt-3 px-5 py-3 rounded-3 shadow"
            style="z-index:9999; background:#d4edda; color:#155724; border:1px solid #c3e6cb;">
            ✔ {{ session('success') }}
        </div>
        <script>
            setTimeout(() => { document.querySelector('.alert').style.display = 'none'; }, 3000);
        </script>
    @endif

    <main class="product-page row container m-auto">
        <section class="product-gallery col-md-5 p-md-5">
            <img src="{{ asset($product->image) }}" alt="{{ $product->name }}" class="main-image w-100" />
            <div class="thumbnails d-flex gap-3 mt-3">
                <!-- <img src="{{ asset($product->image) }}" alt="Thumbnail 1" />
                <img src="{{ asset($product->image) }}" alt="Thumbnail 2" />
                <img src="{{ asset($product->image) }}" alt="Thumbnail 3" /> -->
            </div>
        </section>

        <section class="product-info col-md-7 pt-5 mt-md-5 px-md-0">
            <p class="breadcrumb mt-2">COLLECTION / {{ strtoupper($productType) }}</p>
            <h1 class="fs-1 mb-3">{{ $product->name }}</h1>
            <div class="fs-5 text-m mb-2">
                ${{ $product->price }} <span class="fs-6 text-m p-1">In Stock</span>
            </div>
            <p class="opacity-75">{{ $product->description }}</p>

            <div class="d-flex justify-content-center align-items-center mt-4 row ">
                <div class="quantity d-flex align-items-center justify-content-center gap-2 col-3">
                    <button onclick="changeQty(-1)" class="bg-white rounded-2 border-1 px-3 py-1 fs-5">-</button>
                    <span class="fs-4" id="qty">1</span>
                    <button onclick="changeQty(1)" class="bg-white rounded-2 border-1 px-3 py-1 fs-5">+</button>
                </div>

                <form class="col-6 me-5" action="{{ route('cart.add') }}" method="POST">
                    @csrf
                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                    <input type="hidden" name="product_type" value="{{ $productType }}">
                    <input type="hidden" name="name" value="{{ $product->name }}">
                    <input type="hidden" name="image" value="{{ $product->image }}">
                    <input type="hidden" name="price" value="{{ $product->price }}">
                    <input type="hidden" name="quantity" id="qty-input" value="1">
                    <button type="submit" class="add-cart bg-m text-white border-0 py-3 px-2 rounded-2  w-100">
                        Add to Cart
                    </button>
                </form>
                
                <div class="action-icons col-2">
                    <button onclick="shareProduct()" class="border-1 bg-white rounded-2 fs-6" title="Share">
                        <i class="fa-solid fa-share-nodes"></i>
                    </button>
                </div>
            </div>

            <div class="d-flex justify-content-between text-center py-4 border-top border-bottom mb-4 mt-4">
                <div class="flex-fill text-secondary">
                    <i class="fa-solid fa-truck d-block mb-2 text-m"></i>
                    <small class="fw-bold">FAST DELIVERY</small>
                </div>
                <div class="flex-fill text-secondary">
                    <i class="fa-solid fa-shield-halved d-block mb-2 text-m"></i>
                    <small class="fw-bold">SECURE PAYMENT</small>
                </div>
                <div class="flex-fill text-secondary">
                    <i class="fa-solid fa-gift d-block mb-2 text-m"></i>
                    <small class="fw-bold">GIFT WRAPPED</small>
                </div>
            </div>
        </section>
    </main>

    <footer class="container">
        <div class="d-flex justify-content-center py-4 border-top opacity-75">
            <span>© 2026 sšr</span>
        </div>
    </footer>
@endsection

@section('scripts')
    <script>
        function shareProduct() {
            navigator.clipboard.writeText(window.location.href);
            const toast = document.createElement('div');
            toast.innerText = '🔗 Link copied!';
            toast.style.cssText = `position:fixed;bottom:30px;left:50%;transform:translateX(-50%);background:#d6a06a;color:white;padding:10px 24px;border-radius:8px;font-size:14px;z-index:9999;`;
            document.body.appendChild(toast);
            setTimeout(() => toast.remove(), 2500);
        }

        function changeQty(change) {
            const qtyEl = document.getElementById('qty');
            let qty = parseInt(qtyEl.innerText) + change;
            if (qty < 1) qty = 1;
            qtyEl.innerText = qty;
            document.getElementById('qty-input').value = qty;
        }
    </script>
@endsection