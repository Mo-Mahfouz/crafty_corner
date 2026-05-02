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
<<<<<<< HEAD
<header class="navbar">
    <nav class="nav-links left">
        <a href="{{ route('home') }}">Home</a>
        <a href="{{ route('collection') }}" class="active">Collection</a>
    </nav>
=======
<header class="navbar navbar-expand-lg sticky-top">
    <div class="container-fluid px-md-5">
        <nav class="nav-links d-none d-lg-flex gap-4">
            <a href="{{ route('home') }}">Home</a>
            <a href="{{ route('collection') }}">Collection</a>
        </nav>
>>>>>>> 71092f9 (ay 7aga test pull&puch)

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
<<<<<<< HEAD
<footer class="footer">

    <div class="footer-top">

        <div class="footer-brand">
            <h3>Nourhan Store</h3>
            <p>
                Elevating your everyday style with curated collections.
            </p>
=======
<footer class="footer border-top  bg-white pt-5 pb-3">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-5 footer-brand text-center text-lg-start">
                <h3 class="mb-3">Nourhan Store</h3>
                <p class="text-black opacity-50" >Elevating your everyday style with curated collections.</p>
            </div>
            <div class="col-md-3 col-lg-3 footer-col">
                <h4 class="mb-4 ">Shop</h4>
                <ul class="d-flex flex-column p-0 ">
                    <a class="text-black  link-offset-2 link-underline link-underline-opacity-0 opacity-50 mb-2" href="{{ route('home') }}">Home</a>
                    <a class="text-black  link-offset-2 link-underline link-underline-opacity-0 opacity-50" href="{{ route('collection') }}">All Collections</a>
                </ul>
            </div>
            <div class="col-md-6 col-lg-4 footer-col">
                <h4 class="mb-4">Support / Contact</h4>
                <form action="{{ route('contact.store') }}" method="POST" class="d-flex flex-column gap-2">
                    @csrf
                    <input type="text" name="name" class="form-control" placeholder="Your Name">
                    <input type="email" name="email" class="form-control" placeholder="Your Email">
                    <textarea name="message" class="form-control" placeholder="Your Message"></textarea>
                    <button type="submit" class="btn-primary w-100 justify-content-center">Send</button>
                </form>
            </div>
>>>>>>> 71092f9 (ay 7aga test pull&puch)
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
