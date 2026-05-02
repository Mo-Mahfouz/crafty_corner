```html
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Nourhan Store – Handcrafted with Love</title>

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,600;1,400;1,600&family=Jost:wght@300;400;500&display=swap" rel="stylesheet">
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

<!-- HERO -->
<section class="hero">

    <div class="hero-text">

        <span class="label">✦ LIMITED EDITION COLLECTION</span>

        <h1>
            Nourhan Store:<br>
            <em>Handcrafted with Love</em>
        </h1>

        <p>
            Discover the delicate art of bespoke embroidery and luxury baby
            essentials. Every stitch tells a story of heritage, warmth, and
            meticulous craftsmanship designed for your most precious moments.
        </p>

        <div class="hero-btns">
            <a href="{{ route('collection') }}" class="btn-primary">
                Explore Collection →
            </a>

            <a href="{{ route('ourstory') }}" class="btn-outline">Our Story</a>
        </div>

        <div class="hero-stats">
            <div>
                <strong>100%</strong>
                <span>HANDMADE ART</span>
            </div>

            <div>
                <strong>Premium</strong>
                <span>EGYPTIAN COTTON</span>
            </div>

            <div>
                <strong>Global</strong>
                <span>EXPEDITED DELIVERY</span>
            </div>
        </div>

    </div>

    <div class="hero-img">
        <img src="{{ asset('images/ho1.png') }}" alt="Embroidery craft">
    </div>

</section>

<!-- TRUST BAR -->
<section class="trust-bar">

    <div class="trust-item">
        <strong>Worldwide Shipping</strong>
        <p>Handcrafted beauty, delivered globally.</p>
    </div>

    <div class="trust-item">
        <strong>Secure Payments</strong>
        <p>Shop with confidence and peace of mind.</p>
    </div>

    <div class="trust-item">
        <strong>Artisan Support</strong>
        <p>Every purchase supports traditional craft.</p>
    </div>

</section>

<!-- CATEGORIES -->
<section class="categories">

    <div class="section-label">CURATED SELECTIONS</div>
    <h2>Signature Categories</h2>

    <div class="cat-grid">

        <div class="cat-card">
            <img src="{{ asset('images/sc1.png') }}" alt="Floral Embroidery">
            <h3>Floral Embroidery</h3>
            <p>Intricate botanical designs stitched by hand for elegant interiors.</p>
        </div>

        <div class="cat-card">
            <img src="{{ asset('images/sc2.png') }}" alt="Baby Apparel">
            <h3>Baby Apparel</h3>
            <p>Soft organic cotton pieces crafted with delicate embroidery.</p>
        </div>

        <div class="cat-card">
            <img src="{{ asset('images/sc3.png') }}" alt="Custom Keepsakes">
            <h3>Custom Keepsakes</h3>
            <p>Personalised memories stitched to last a lifetime.</p>
        </div>

    </div>

</section>



</section>


<!-- FOOTER -->
<footer class="footer">

    <div class="footer-top">

        <div class="footer-brand">
            <h3>Nourhan Store</h3>
            <p>
                Elevating your everyday style with curated collections.
            </p>
        </div>

        <div class="footer-col">
            <h4>Shop</h4>
            <a href="{{ route('home') }}">Home</a>
            <a href="{{ route('collection') }}">All Collections</a>
        </div>

        <div class="footer-col">
            <h4>Support</h4>
            <a href="#">Contact Us</a>
           <form action="{{ route('contact.store') }}" method="POST">
    @csrf

    <input type="text" name="name" placeholder="Your Name">

    <input type="email" name="email" placeholder="Your Email">

    <textarea name="message" placeholder="Your Message"></textarea>

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
```
