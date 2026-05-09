<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/categoryItems.css') }}" />
</head>

<body>
    <!-- HEADER -->
    <header class="site-header">
        <div class="container header-inner">
            <div class="logo">
                <h1><span class="logo-icon">◇</span> sšr</h1>
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