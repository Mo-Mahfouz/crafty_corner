<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover" />
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/categoryItems.css') }}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<!-- we have
1-section title
2-product image
3-product name
4-product price
5-product short description
6-link to details page 
for each product             
        -->

<body>
    <!-- HEADER -->
    <header class="site-header">
        <div class="container header-inner">
            <div class="logo">
                <h1><span class="logo-icon">◇</span> Nourhan Store</h1>
            </div>
        </div>
    </header>

    <!-- MAIN -->
    <main>
        <section class="products-section">
            <div class="container">
                <h2 class="section-title">@yield('section-title')</h2>

                <div class="product-grid">
                    <div class="product-card">
                        <div class="product-img">
                            @yield('product1-image')
                            class="product-image" />
                        </div>

                        <div class="product-info">
                            <h3 class="product-name">@yield('product1-name')</h3>
                            <div class="price">@yield('product1-price')</div>
                            <p class="short-description">
                                @yield('product1-description')
                            </p>
                            <a href="details.html" class="details-link">More Details</a>
                        </div>
                    </div>

                    <div class="product-card">
                        <div class="product-img">
                            @yield('product2-image')
                            class="product-image" />
                        </div>
                        <div class="product-info">
                            <h3 class="product-name">@yield('product2-name')</h3>
                            <div class="price">@yield('product2-price')</div>
                            <p class="short-description">
                                @yield('product2-description')
                            </p>
                            <a href="details.html" class="details-link">More Details</a>
                        </div>
                    </div>

                    <div class="product-card">
                        <div class="product-img">
                            @yield('product3-image')
                        </div>
                        <div class="product-info">
                            <h3 class="product-name">@yield('product3-name')</h3>
                            <div class="price">@yield('product3-price')</div>
                            <p class="short-description">
                                @yield('product3-description')
                            </p>
                            <a href="details.html" class="details-link">More Details</a>
                        </div>
                    </div>

                    <div class="product-card">
                        <div class="product-img">
                            @yield('product4-image')
                        </div>
                        <div class="product-info">
                            <h3 class="product-name">@yield('product4-name')</h3>
                            <div class="price">@yield('product4-price')</div>
                            <p class="short-description">
                                @yield('product4-description')
                            </p>
                            <a href="details.html" class="details-link">More Details</a>
                        </div>
                    </div>

                    <div class="product-card">
                        <div class="product-img">
                            @yield('product5-image')
                            class="product-image" />
                        </div>
                        <div class="product-info">
                            <h3 class="product-name">@yield('product5-name')</h3>
                            <div class="price">@yield('product5-price')</div>
                            <p class="short-description">
                                @yield('product5-description')
                            </p>
                            <a href="details.html" class="details-link">More Details</a>
                        </div>
                    </div>

                    <div class="product-card">
                        <div class="product-img">
                            @yield('product6-image')
                        </div>
                        <div class="product-info">
                            <h3 class="product-name">@yield('product6-name')</h3>
                            <div class="price">@yield('product6-price')</div>
                            <p class="short-description">
                                @yield('product6-description')
                            </p>
                            <a href="details.html" class="details-link">More Details</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- FOOTER -->
    <footer class="footer">
        <div class="container">
            <p>© 2026 Nourhan Store. All rights reserved.</p>
        </div>
    </footer>
</body>

</html>