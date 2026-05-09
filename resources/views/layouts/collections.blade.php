<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/categoryItems.css') }}" />
</head>

<body>
    <!-- HEADER -->
    <header class="navbar sticky-top bg-white border-bottom px-md-5 d-flex justify-content-between align-items-center py-3">
        <div class="container-fluid">
            <nav class="d-flex gap-4 align-items-center">
                <a href="{{ route('home') }}" class=" text-dark text-decoration-none">Home</a>
                <a href="{{ route('collection') }}" class="text-dark text-decoration-none">Collection</a>
               
                <!-- @auth
                    <a href="{{ route('orders.index') }}" class="text-dark text-decoration-none">My Orders</a> {{-- ✅ --}}
                @endauth -->
            </nav>

            <a href="{{ route('home') }}" class="text-decoration-none fs-3 d-none d-md-block"
                style="color:#d6a06a; font-family:'Cormorant Garamond',serif; ">
                ◇ sšr
            </a>

            <div class="d-flex align-items-center gap-2">
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
                        <div class="rounded-circle d-flex align-items-center fs-5 text-white justify-content-center"
                            style="width:36px;height:36px;background:#d6a06a;cursor:pointer;"
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


    <!-- MAIN -->
    <main>
        <section class="products-section">
            <div class="container">
                <h2 class="section-title">@yield('section-title')</h2>
                <div class="product-grid">
                    @yield('content')
                </div>
            </div>
        </section>
    </main>

    <!-- FOOTER -->
    <footer class="footer">
        <div class="container">
            <p>© 2026 sšr. All rights reserved.</p>
        </div>
    </footer>
</body>

</html>