<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Our Collection – Nourhan Store</title>

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/collection.css') }}" />

    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,600;1,400;1,600&family=Jost:wght@300;400;500&display=swap" rel="stylesheet" />
</head>

<body>

<!-- NAVBAR -->
<header class="navbar">
    <nav class="nav-links left">
        <a href="{{ route('home') }}">Home</a>
        <a href="{{ route('collection') }}" class="active">Collection</a>
    </nav>

    <a href="{{ route('home') }}" class="logo">
        <span class="logo-icon">◇</span> Nourhan Store
    </a>

    <div class="nav-right">

        <a href="{{ route('login') }}" class="icon-btn">Login</a>

        <a href="{{ route('register') }}" class="icon-btn">Register</a>

    </div>
</header>

<!-- PAGE HEADER -->
<section class="page-header">
    <h1>Our Collection</h1>

    <p>
        Discover our curated selection of handmade luxury essentials,
        crafted with impeccable attention to detail and a passion
        for artisanal heritage.
    </p>
</section>

<!-- FILTERS -->
<section class="filters-bar">

    <div class="filter-tabs">
        <button class="tab active">All</button>
        <button class="tab">Baby Clothes</button>
        <button class="tab">Embroidery</button>
        <button class="tab">Gifts</button>
        <button class="tab">Custom Orders</button>
    </div>

    <div class="filter-right"></div>

</section>

<!-- PRODUCTS GRID -->
<section class="products-grid">

    <div class="product-card">
        <div class="product-img">
            <img src="{{ asset('images/co1.png') }}" alt="Lace Heirloom Gown">
        </div>

        <div class="product-info">
            <span class="product-cat">BABY CLOTHES</span>
            <h3>Lace Heirloom Gown</h3>
        </div>
    </div>

    <div class="product-card">
        <div class="product-img">
            <img src="{{ asset('images/co2.png') }}" alt="Floral Silk Cushion">
        </div>

        <div class="product-info">
            <span class="product-cat">EMBROIDERY</span>
            <h3>Floral Silk Cushion</h3>
        </div>
    </div>

    <div class="product-card">
        <div class="product-img">
            <img src="{{ asset('images/co3.png') }}" alt="Newborn Welcome Set">
        </div>

        <div class="product-info">
            <span class="product-cat">GIFTS</span>
            <h3>Newborn Welcome Set</h3>
        </div>
    </div>

    <div class="product-card">
        <div class="product-img">
            <img src="{{ asset('images/co4.png') }}" alt="Velvet Ribbon Bonnet">
        </div>

        <div class="product-info">
            <span class="product-cat">BABY CLOTHES</span>
            <h3>Velvet Ribbon Bonnet</h3>
        </div>
    </div>

    <div class="product-card">
        <div class="product-img">
            <img src="{{ asset('images/co5.png') }}" alt="Botanical Wall Hoop">
        </div>

        <div class="product-info">
            <span class="product-cat">EMBROIDERY</span>
            <h3>Botanical Wall Hoop</h3>
        </div>
    </div>

    <div class="product-card">
        <div class="product-img">
            <img src="{{ asset('images/co6.png') }}" alt="Linen Tea Towel Set">
        </div>

        <div class="product-info">
            <span class="product-cat">GIFTS</span>
            <h3>Linen Tea Towel Set</h3>
        </div>
    </div>

</section>

<!-- DISCOVER MORE -->
<div class="discover-more">
    <a href="{{ route('collection') }}" class="btn-outline">
        Discover More Pieces →
    </a>
</div>

<!-- HERITAGE BANNER -->
<section class="heritage-banner">

    <div class="heritage-text">
        <span class="badge-tag">Limited Availability</span>

        <h2>
            The Heritage Series:<br>
            Handmade Lace
        </h2>

        <p>
            Explore the intricate craftsmanship behind our signature lace
            collection. Each piece tells a story of tradition, woven into
            modern silhouettes for your little ones.
        </p>

        <a href="{{ route('ourstory') }}" class="btn-gold">
            Learn the Craft
        </a>
    </div>

    <div class="heritage-img">
        <img src="{{ asset('images/coLast.png') }}" alt="Handmade lace craft">
    </div>

</section>

<!-- FOOTER -->
<footer class="footer">

    <div class="footer-top">

        <div class="footer-brand">
            <h3>Nourhan Store</h3>
            <p>Elevating your everyday style with curated collections.</p>
        </div>

        <div class="footer-col">
            <h4>Shop</h4>

            <a href="{{ route('home') }}">Home</a>
            <a href="{{ route('collection') }}">All Collections</a>
        </div>

        <div class="footer-col">
            <h4>Support</h4>

            <form action="{{ route('contact.store') }}" method="POST">
                @csrf

                <input type="text" name="name" placeholder="Your Name" required>

                <input type="email" name="email" placeholder="Your Email" required>

                <textarea name="message" placeholder="Your Message" required></textarea>

                <button type="submit">Send</button>
            </form>
        </div>

    </div>

    <div class="footer-bottom">
        <p>© 2026 Nourhan Store. All rights reserved.</p>
    </div>

</footer>

</body>
</html>