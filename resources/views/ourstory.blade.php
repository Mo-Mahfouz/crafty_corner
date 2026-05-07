<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Our Story – Nourhan Store</title>

<link rel="stylesheet" href="{{ asset('css/ourstory.css') }}">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@300;400;600&family=Jost:wght@300;400;500&display=swap" rel="stylesheet">

</head>

<body>

<!-- NAVBAR (same home) -->
<header class="navbar navbar-expand-lg sticky-top bg-white py-3">
    <div class="container-fluid px-md-5">
        <nav class="nav-links d-none d-lg-flex gap-4 ">
            <a class="text-black opacity-75 link-offset-2 link-underline link-underline-opacity-0" href="{{ route('home') }}">Home</a>
            <a class="text-black opacity-75 link-offset-2 link-underline link-underline-opacity-0" href="{{ route('collection') }}">Collection</a>
        </nav>

        <a href="{{ route('home') }}" class="logo mx-auto mx-lg-0 text-gold link-offset-2 link-underline link-underline-opacity-0">
            <span class="logo-icon ">◇</span> Nourhan Store
        </a>
    </div>
</header>

<!-- OUR STORY SECTION (same style as home sections) -->
<section class="bg-cream min-vh-100 d-flex align-items-center">
    <div class="container py-5">

        <div class="row align-items-center g-5">

            <!-- IMAGE -->
            <div class="col-lg-6">
                <img src="{{ asset('images/ourstoryimage.png') }}"
                    class="img-fluid rounded-4 shadow-sm w-100 story-img"
                    alt="Our Story">
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
                    Nourhan Store began as a small handmade dream inspired by Egyptian craftsmanship.
                    Every piece is designed with care, detail, and elegance.
                </p>

                <p class="text-muted mb-3">
                    We focus on luxury baby essentials, embroidery art, and personalized gifts
                    that last forever.
                </p>

                <p class="text-muted mb-5">
                    Our goal is to bring warmth, softness, and meaning into every home.
                </p>

                <a href="{{ route('home') }}" class="btn btn-outline-succes border rounded-pill px-4 py-2 btn-custom">
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
                    <button type="submit" class="btn btn-outline-succes border w-100 justify-content-center">Send</button>
                </form>
            </div>
        </div>
        <div class="footer-bottom mt-5 pt-3 border-top text-center text-muted">
            <p>© 2026 Nourhan Store. All rights reserved.</p>
        </div>
    </div>
</footer>

</body>
</html>