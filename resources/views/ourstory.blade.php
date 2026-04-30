<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Our Story – Nourhan Store</title>

<link rel="stylesheet" href="{{ asset('css/home.css') }}">

<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@300;400;600&family=Jost:wght@300;400;500&display=swap" rel="stylesheet">

</head>

<body>

<!-- NAVBAR (same home) -->
<header class="navbar">
    <nav class="nav-links left">
        <a href="{{ route('home') }}">Home</a>
        <a href="{{ route('collection') }}">Collection</a>
        <a href="#">Categories</a>
    </nav>

    <a href="{{ route('home') }}" class="logo">
        <span class="logo-icon">◇</span> Nourhan Store
    </a>
</header>

<!-- OUR STORY SECTION (same style as home sections) -->
<section class="legacy">

    <!-- IMAGE LEFT -->
    <div class="legacy-img">
        <img src="{{ asset('images/ourstoryimage.png') }}" alt="Our Story">
    </div>

    <!-- TEXT RIGHT -->
    <div class="legacy-text">

        <span class="section-label">OUR STORY</span>

        <h2>Crafted With Love & Heritage</h2>

        <p>
            Nourhan Store began as a small handmade dream inspired by Egyptian craftsmanship.
            Every piece is designed with care, detail, and elegance.
        </p>

        <p>
            We focus on luxury baby essentials, embroidery art, and personalized gifts
            that last forever.
        </p>

        <p>
            Our goal is to bring warmth, softness, and meaning into every home.
        </p>

        <a href="{{ route('home') }}" class="btn-outline">
            Back to Home
        </a>

    </div>

</section>

<!-- FOOTER (same home) -->
<footer class="footer">
    <div class="footer-bottom">
        <span>© 2026 Nourhan Store</span>
    </div>
</footer>

</body>
</html>