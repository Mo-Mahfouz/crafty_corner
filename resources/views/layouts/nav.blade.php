<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title', 'Nourhan Store')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,600;1,400;1,600&family=Jost:wght@300;400;500&display=swap"
        rel="stylesheet">
    @yield('styles')
</head>

<body>

    <header class="navbar sticky-top bg-white border-bottom px-md-5">
        <div class="container-fluid">
            <nav class="d-flex gap-4 align-items-center">
                <a href="{{ route('home') }}" class="text-dark text-decoration-none">Home</a>
                <a href="{{ route('collection') }}" class="text-dark text-decoration-none">Collection</a>
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
            </nav>

            <a href="{{ route('home') }}" class="text-decoration-none mx-auto"
                style="color:#d6a06a; font-family:'Cormorant Garamond',serif; font-size:22px;">
                ◇ Nourhan Store
            </a>

            <div class="d-flex align-items-center gap-2">
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

    @yield('content')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    @yield('scripts')
</body>

</html>