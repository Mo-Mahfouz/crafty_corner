<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Nourhan Store - Product Page</title>
    <!-- <link rel="stylesheet" href="bootstrap.min.css" /> -->
    <link rel="stylesheet" href="{{ asset('css/productDetails.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body style="margin-top: 100px;">
    @if(session('success'))
        <div class="alert alert-success position-fixed top-0 start-50 translate-middle-x mt-3 px-5 py-3 rounded-3 shadow"
            style="z-index:9999; background:#d4edda; color:#155724; border:1px solid #c3e6cb;">
            ✔ {{ session('success') }}
        </div>
        <script>
            setTimeout(() => {
                document.querySelector('.alert').style.display = 'none';
            }, 3000);
        </script>
    @endif
    <header
        class="px-5 py-3 d-flex justify-content-between align-items-center border border-white py-2 fixed-top bg-white">
        <a class="a text-decoration-none" href="">Shop</a>
        <div class="d-flex align-items-center gap-2 fs-5 text-m">
            <i class="fa-regular fa-gem"></i>
            <span>Nourhan Store</span>
        </div>
        <div class="nav-right d-flex align-items-center gap-3">
            <i class="fa-regular fa-heart text-m"></i>
            <a href="">Sign In</a>
        </div>
    </header>

    <main class="product-page row container m-auto">
        <section class="product-gallery col-md-6">
            <img src="{{ asset($product->image) }}" alt="{{ $product->name }}" class="main-image" />
            <div class="thumbnails d-flex gap-3 mt-3">
                <img src="{{ asset($product->image) }}" alt="Thumbnail 1" />
                <img src="{{ asset($product->image) }}" alt="Thumbnail 2" />
                <img src="{{ asset($product->image) }}" alt="Thumbnail 3" />
            </div>
        </section>

        <section class="product-info col-md-6">
            <p class="breadcrumb mt-2">COLLECTION / BABY ESSENTIALS / KNITWEAR</p>
            <h1 class="fs-1 mb-3">{{ $product->name }}</h1>
            <div class="fs-5 text-m mb-2">
                ${{ $product->price }} <span class="fs-6 text-m p-1">In Stock</span>
            </div>
            <p class="opacity-75">{{ $product->description }}</p>

            <div class="option-group mb-3">
                <h4>Colour: Cream</h4>
                <div class="colors d-flex gap-2 mt-2">
                    <span class="color cream active"></span>
                    <span class="color pink"></span>
                </div>
            </div>

            <div class="option-group">
                <h4>Size</h4>
                <div class="sizes py-2 d-flex gap-2">
                    <button class="active bg-white rounded-2 border-1 px-2 py-1">
                        1-3M
                    </button>
                    <button class="bg-white rounded-2 border-1 px-2 py-1">3-6M</button>
                    <button class="bg-white rounded-2 border-1 px-2 py-1">6-12M</button>
                </div>
            </div>

            <div class="d-flex align-items-center gap-3 mt-4">
                <div class="quantity d-flex align-items-center gap-2">
                    <button class="bg-white rounded-2 border-1 px-3 fs-6">-</button>
                    <span class="fs-5">1</span>
                    <button class="bg-white rounded-2 border-1 px-3 fs-6">+</button>
                </div>

                <form action="{{ route('cart.add') }}" method="POST">
                    @csrf
                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                    <input type="hidden" name="product_type" value="{{ $productType }}">
                    <input type="hidden" name="name" value="{{ $product->name }}">
                    <input type="hidden" name="image" value="{{ $product->image }}">
                    <input type="hidden" name="price" value="{{ $product->price }}">
                    <button type="submit" class="add-cart bg-m text-white border-0 px-2 py-3 rounded-2 w-100">
                        Add to Cart
                    </button>
                </form>

                <div class="action-icons">
                    <button class="border-1 bg-white rounded-2 fs-6">
                        <i class="fa-regular fa-heart"></i>
                    </button>
                    <button class="border-1 bg-white rounded-2 fs-6">
                        <i class="fa-solid fa-share-nodes"></i>
                    </button>
                </div>
            </div>

            <div class="text-center my-3 d-flex justify-content-center align-items-center gap-2 text-secondary">
                <i class="fa-regular fa-bookmark"></i>
                <span>Add to Bag for Later</span>
            </div>
            <div class="d-flex justify-content-between text-center py-4 border-top border-bottom mb-4">
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

    <section class="container py-5">
        <div class="d-flex justify-content-between mb-4">
            <h2 class="fw-bold">Complete the Look</h2>
            <a href="#" class="text-decoration-none text-md-center">View All Collection</a>
        </div>

        <div class="row g-4">
            <div class="col-md-3">
                <div class="card border-0 text-center">
                    <img src="first.PNG" class="card-img-top" alt="" />
                    <div class="card-body">
                        <h6 class="card-title">Silk Embroidered Bonnet</h6>
                        <p class="fw-bold text-m">$45.00</p>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card border-0 text-center">
                    <img src="second.PNG" class="card-img-top" alt="" />
                    <div class="card-body">
                        <h6>Organic Cotton Booties</h6>
                        <p class="fw-bold text-m">$32.00</p>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card border-0 text-center">
                    <img src="third.PNG" class="card-img-top" alt="" />
                    <div class="card-body">
                        <h6>Linen Christening Gown</h6>
                        <p class="fw-bold text-m">$195.00</p>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card border-0 text-center">
                    <img src="fourth.PNG" class="card-img-top" alt="" />
                    <div class="card-body">
                        <h6>Handmade Plush Bunny</h6>
                        <p class="fw-bold text-m">$58.00</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="container my-5 p-5 text-center rounded" style="background:#f9f4ef;">
        <p class="text-uppercase">The Nourhan Circle</p>
        <h2 class="fw-bold">Join Our Journal</h2>
        <p>Stay inspired with early access to new collections and exclusive styling tips.</p>

        <form class="d-flex justify-content-center gap-2 mt-3">
            <input type="email" class="form-control w-25" placeholder="Email address">
            <button class="btn btn-m text-white">Subscribe</button>
        </form>
    </section>

    <footer class="container py-5 border-top">

        <div class="row">

            <div class="col-md-4">
                <h5>Nourhan Store</h5>
                <p class="text-muted">Premium quality and timeless elegance.</p>
            </div>

            <div class="col-md-2">
                <h6>Shop</h6>
                <ul class="list-unstyled text-muted">
                    <li>New Arrivals</li>
                    <li>Best Sellers</li>
                    <li>Collections</li>
                </ul>
            </div>

            <div class="col-md-3">
                <h6>Support</h6>
                <ul class="list-unstyled text-muted">
                    <li>Shipping Policy</li>
                    <li>Returns</li>
                    <li>My Account</li>
                </ul>
            </div>

            <div class="col-md-3">
                <h6>Admin</h6>
                <ul class="list-unstyled text-muted">
                    <li>Staff Login</li>
                    <li>Activity Logs</li>
                </ul>
            </div>

        </div>

        <div class="d-flex justify-content-center pt-3 border-top text-muted small">
            <span>© 2026 Nourhan Store</span>
        </div>

    </footer>
</body>

</html>