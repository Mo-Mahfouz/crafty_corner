<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Nourhan Store – Handcrafted with Love</title>

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,600;1,400;1,600&family=Jost:wght@300;400;500&display=swap" rel="stylesheet">
</head>

<body>

<!-- NAVBAR -->
<header class="navbar sticky-top">
    <div class="container-fluid px-md-5">
        <nav class="nav-links  d-lg-flex gap-4">
            <a href="{{ route('home') }}">Home</a>
            <a href="{{ route('collection') }}">Collection</a>
        </nav>

        <a href="{{ route('home') }}" class="logo mx-auto mx-lg-0 d-none d-md-block">
            <span class="  logo-icon">◇</span> Nourhan Store
        </a>

        <div class="nav-right d-flex align-items-center gap-2">
            <a href="{{ route('login') }}" class="icon-btn px-3 nav-links py-1 text-black opacity-75 link-offset-2 link-underline link-underline-opacity-0">Login</a>
            <a href="{{ route('register') }}" class="icon-btn px-3 py-1 text-black opacity-75 link-offset-2 link-underline link-underline-opacity-0">Register</a>
        </div>
    </div>
</header>

<!-- HERO -->
<div class=" bg-m">
    <section class="hero container py-5">
        <div class="row align-items-center g-5 ">
            <div class="col-lg-6 hero-text text-center text-lg-start">
                <span class="label mb-1 d-block text-gold fs-7">✦ LIMITED EDITION COLLECTION</span>
                <h1 class="display-4 mb-2 ">
                    Nourhan Store:
                </h1>
                <h2 class="mb-3 fs-2 text-gold">Handcrafted with Love</h2>
                <p class="mb-5 mx-auto mx-lg-0 opacity-50 ">
                    Discover the delicate art of bespoke embroidery and luxury baby
                    essentials. Every stitch tells a story of heritage, warmth, and
                    meticulous craftsmanship designed for your most precious moments.
                </p>
                <div class="hero-btns d-flex flex-wrap justify-content-center justify-content-lg-start gap-3 mb-5">
                    <a href="{{ route('collection') }}" class="btn btn-b text-white px-4 py-2 rounded-2 link-offset-2 link-underline link-underline-opacity-0">Explore Collection →</a>
                    <a href="{{ route('ourstory') }}" class="btn-outline text-black  link-offset-2 link-underline link-underline-opacity-0">Our Story</a>
                </div>
                <div class="hero-stats d-flex justify-content-center justify-content-lg-start gap-4 pt-4 border-top">
                    <div class="text-start d-flex flex-column">
                        <span>100%</span>
                        <span class="opacity-50 fs-7">HANDMADE ART</span>
                    </div>
                    <div class="text-start d-flex flex-column">
                        <span>Premium</span>
                        <span class="opacity-50 fs-7">EGYPTIAN COTTON</span>
                    </div>
                    <div class="text-start d-flex flex-column">
                        <span>Global</span>
                        <span class="opacity-50 fs-7">EXPEDITED DELIVERY</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="hero-img">
                    <img src="{{ asset('images/ho1.png') }}" class="img-fluid" alt="Embroidery craft">
                </div>
            </div>
        </div>
    </section>
</div>

<!-- TRUST BAR -->
<section class="trust-bar border-top border-bottom bg-white py-4">
    <div class="container">
        <div class="row text-center g-4">
            <div class="col-md-4 d-flex align-items-center justify-content-center trust-item border-end-md">
                <span class="m-0" >Worldwide Shipping</span>
                <p class="m-0 ms-2 mt-1">Handcrafted beauty, delivered globally.</p>
            </div>
            <div class="col-md-4 d-flex align-items-center justify-content-center trust-item border-end-md">
                <span class="mb-0" >Secure Payments</span>
                <p class="m-0 ms-2 mt-1">Shop with confidence and peace of mind.</p>
            </div>
            <div class="col-md-4 trust-item d-flex align-items-center justify-content-center">
                <span class="mb-0" >Artisan Support</span>
                <p class="m-0 ms-2 mt-1">Every purchase supports traditional craft.</p>
            </div>
        </div>
    </div>
</section>

<!-- CATEGORIES -->
<div class=" bg-m">
    <section class="categories container py-5">
         <div class="text-center mb-5">
             <div class="section-label">CURATED SELECTIONS</div>
             <h2 class="display-5">Signature Categories</h2>
         </div>
         <div class="row g-4">
             <div class="col-md-6 col-lg-4">
                 <div class="cat-card h-100">
                     <div class="cat-img mb-3">
                         <img src="{{ asset('images/sc1.png') }}" alt="Floral">
                     </div>
                     <h3>Floral Embroidery</h3>
                     <p>Intricate botanical designs stitched by hand for elegant interiors.</p>
                 </div>
             </div>
             <div class="col-md-6 col-lg-4">
                 <div class="cat-card h-100">
                     <div class="cat-img mb-3">
                         <img src="{{ asset('images/sc2.png') }}" alt="Floral">
                     </div>
                     <h3>Baby Apparel</h3>
                     <p>Soft organic cotton pieces crafted with delicate embroidery.</p>
                 </div>
             </div>
             <div class="col-md-12 col-lg-4">
                 <div class="cat-card h-100">
                     <div class="cat-img mb-3">
                         <img src="{{ asset('images/sc3.png') }}" alt="Floral">
                     </div>
                     <h3>Custom Keepsakes</h3>
                     <p>Personalised memories stitched to last a lifetime.</p>
                 </div>
             </div>
             
         </div>
    </section>
</div>

<!-- FOOTER -->
<footer class="footer border-top  bg-white pt-5 pb-3">
    <div class="container">
        <div class="row g-5">
            <div class="col-sm-12 col-md-6 col-lg-4 footer-brand text-center text-lg-start">
                <h3 class="mb-3">Nourhan Store</h3>
                <p class="text-black opacity-50" >Elevating your everyday style with curated collections.</p>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 footer-col ps-5 d-flex flex-column justify-content-center align-items-center">
                <h4 class="mb-4 pe-5">Shop</h4>
                <ul class="d-flex flex-column p-0" >
                    <a class="text-black  link-offset-2 link-underline link-underline-opacity-0 opacity-50 mb-2" href="{{ route('home') }}">Home</a>
                    <a class="text-black  link-offset-2 link-underline link-underline-opacity-0 opacity-50" href="{{ route('collection') }}">All Collections</a>
                </ul>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-4 footer-col">
                <h4 class="mb-4">Support / Contact</h4>
                <form action="{{ route('contact.store') }}" method="POST" class="d-flex flex-column gap-2">
                    @csrf
                    <input type="text" name="name" class="form-control" placeholder="Your Name">
                    <input type="email" name="email" class="form-control" placeholder="Your Email">
                    <textarea name="message" class="form-control" placeholder="Your Message"></textarea>
                    <button type="submit" class="btn btn-b text-white px-4 py-2 rounded-2 w-100 justify-content-center">Send</button>
                </form>
            </div>
        </div>
        <div class="footer-bottom mt-5 pt-3 border-top text-center text-muted">
            <p>© 2026 Nourhan Store. All rights reserved.</p>
        </div>
    </div>
</footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
