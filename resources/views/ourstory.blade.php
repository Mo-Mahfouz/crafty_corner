<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Our Story – sšr</title>

    <link rel="stylesheet" href="{{ asset('css/ourstory.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@300;400;600&family=Jost:wght@300;400;500&display=swap"
        rel="stylesheet">

</head>

<body >

         <header class="navbar sticky-top bg-white border-bottom px-md-5 d-flex justify-content-between align-items-center ">
        <div class="container-fluid ">
            <nav class="d-flex gap-4 align-items-center">
                <a href="{{ route('home') }}" class=" text-decoration-none">Home</a>
                <a href="{{ route('collection') }}" class=" text-decoration-none">Collection</a>
            </nav>

            <a href="{{ route('home') }}" class="text-decoration-none d-none d-md-block"
                style="color:#d6a06a; font-family:'Cormorant Garamond',serif; font-size:25px;">
                <span >◇</span> sšr
            </a>

            <div class="d-flex align-items-center gap-3">
                 <a href="{{ route('cart.index') }}" class="text-dark text-decoration-none position-relative">
                    🛒
                    @auth
                        @php $cartCount = \App\Models\Cart::where('user_id', auth()->id())->sum('quantity'); @endphp
                        @if($cartCount > 0)
                            <span
                                class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-warning text-dark">
                                {{ $cartCount }}
                            </span>
                        @endif
                    @endauth
                </a>
                @auth
                    <div class="dropdown">
                        <div class="rounded-circle d-flex align-items-center justify-content-center"
                            style="width:36px;height:36px;background:#d6a06a;color:white;font-weight:600;font-size:14px;cursor:pointer;"
                            data-bs-toggle="dropdown">
                            {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}
                        </div>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><span class="dropdown-item text-muted">{{ auth()->user()->name }}</span></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <a href="{{ route('orders.index') }}" class="dropdown-item">My Orders</a> {{-- ✅ --}}
                            </li>
                            <li>
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button type="submit" class="dropdown-item text-danger">Logout</button>
                                </form>
                            </li>
                        </ul>
                    </div>
                @else
                    <a href="{{ route('login') }}" class="text-dark text-decoration-none opacity-75">Login</a>
                    <a href="{{ route('register') }}" class="text-dark text-decoration-none opacity-75">Register</a>
                @endauth
            </div>
        </div>
    </header>

    <!-- OUR STORY SECTION (same style as home sections) -->
    <section class="bg-cream py-5 d-flex align-items-center">
        <div class="container">

            <div class="row align-items-center g-5">

                <!-- IMAGE -->
                <div class="col-lg-6">
                    <img src="{{ asset('images/ourstoryimage.png') }}"
                        class="img-fluid rounded-4 shadow-sm w-100 story-img" alt="Our Story">
                </div>

                <!-- TEXT -->
                <div class="col-lg-6 ps-lg-5">

                    <span class="text-uppercase small fw-medium text-gold mb-3 d-block letter-spacing">
                        OUR STORY
                    </span>

                    <h2 class="display-5 fw-normal mb-4 story-title">
                        Crafted With Love & Heritage
                    </h2>

                    <p class="text-muted mb-3">
                        sšr began as a small handmade dream inspired by Egyptian craftsmanship.
                        Every piece is designed with care, detail, and elegance.
                    </p>

                    <p class="text-muted mb-3">
                        We focus on luxury baby essentials, embroidery art, and personalized gifts
                        that last forever.
                    </p>

                    <p class="text-muted mb-5">
                        Our goal is to bring warmth, softness, and meaning into every home.
                    </p>

                    <a href="{{ route('home') }}"
                        class="btn btn-outline-succes border rounded-pill px-4 py-2 btn-custom">
                        Back to Home
                    </a>

                </div>

            </div>

        </div>
    </section>



    <!-- FOOTER (same home) -->
    <footer class="footer border-top  bg-white pt-5 pb-3">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-5 footer-brand text-center text-lg-start">
                    <h3 class="mb-3">sšr</h3>
                    <p class="text-black opacity-50">Elevating your everyday style with curated collections.</p>
                </div>
                <div class="col-md-3 col-lg-3 footer-col">
                    <h4 class="mb-4 ">Shop</h4>
                    <ul class="d-flex flex-column p-0 ">
                        <a class="text-black  link-offset-2 link-underline link-underline-opacity-0 opacity-50 mb-2"
                            href="{{ route('home') }}">Home</a>
                        <a class="text-black  link-offset-2 link-underline link-underline-opacity-0 opacity-50"
                            href="{{ route('collection') }}">All Collections</a>
                    </ul>
                </div>
                <div class="col-md-6 col-lg-4 footer-col">
                    <h4 class="mb-4">Support / Contact</h4>
                    <form action="{{ route('contact.store') }}" method="POST" class="d-flex flex-column gap-2">
                        @csrf
                        <input type="text" name="name" class="form-control" placeholder="Your Name">
                        <input type="email" name="email" class="form-control" placeholder="Your Email">
                        <textarea name="message" class="form-control" placeholder="Your Message"></textarea>
                        <button type="submit"
                            class="btn btn-outline-succes border w-100 justify-content-center">Send</button>
                    </form>
                </div>
            </div>
            <div class="footer-bottom mt-5 pt-3 border-top text-center text-muted">
                <p>© 2026 sšr. All rights reserved.</p>
            </div>
        </div>
    </footer>

</body>

</html>