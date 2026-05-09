@extends('layouts.nav')

@section('title', 'Our Collection – sšr')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/collection.css') }}">
@endsection

@section('content')
    <!-- PAGE HEADER -->
    <section class="page-header">
        <h1>Our Collection</h1>
        <p>Discover our curated selection of handmade luxury essentials, crafted with impeccable attention to detail.</p>
    </section>

    <!-- FILTERS -->
    <section class="filters-bar">
        <div class="filter-tabs d-flex justify-content-center align-items-center container">
            <a href="{{ route('collection') }}" class="tab">All</a>
            <a href="{{ route('collection.baby_clothes') }}" class="tab">Baby Clothes</a>
            <a href="{{ route('collection.embroidery') }}" class="tab">Embroidery</a>
            <a href="{{ route('collection.gifts') }}" class="tab">Gifts</a>
        </div>
    </section>

    <!-- PRODUCTS GRID -->
    <section class="products-grid container pb-5">
        <div class="row">
            <div class="product-card col-md-6 col-lg-4 col-sm-12">
                <a href="{{ route('collection.baby_clothes') }}">
                    <div class="product-img"><img src="{{ asset('images/co1.png') }}" alt="Lace Heirloom Gown"></div>
                    <div class="product-info"><span class="product-cat">BABY CLOTHES</span>
                        <h3>Lace Heirloom Gown</h3>
                    </div>
                </a>
            </div>
            <div class="product-card col-md-6 col-lg-4 col-sm-12">
                <a href="{{ route('collection.embroidery') }}">
                    <div class="product-img"><img src="{{ asset('images/co2.png') }}" alt="Floral Silk Cushion"></div>
                    <div class="product-info"><span class="product-cat">EMBROIDERY</span>
                        <h3>Floral Silk Cushion</h3>
                    </div>
                </a>
            </div>
            <div class="product-card col-md-6 col-lg-4 col-sm-12">
                <a href="{{ route('collection.gifts') }}">
                    <div class="product-img"><img src="{{ asset('images/co3.png') }}" alt="Newborn Welcome Set"></div>
                    <div class="product-info"><span class="product-cat">GIFTS</span>
                        <h3>Newborn Welcome Set</h3>
                    </div>
                </a>
            </div>
            <div class="product-card col-md-6 col-lg-4 col-sm-12">
                <a href="{{ route('collection.baby_clothes') }}">
                    <div class="product-img"><img src="{{ asset('images/co4.png') }}" alt="Velvet Ribbon Bonnet"></div>
                    <div class="product-info"><span class="product-cat">BABY CLOTHES</span>
                        <h3>Velvet Ribbon Bonnet</h3>
                    </div>
                </a>
            </div>
            <div class="product-card col-md-6 col-lg-4 col-sm-12">
                <a href="{{ route('collection.embroidery') }}">
                    <div class="product-img"><img src="{{ asset('images/co5.png') }}" alt="Botanical Wall Hoop"></div>
                    <div class="product-info"><span class="product-cat">EMBROIDERY</span>
                        <h3>Botanical Wall Hoop</h3>
                    </div>
                </a>
            </div>
            <div class="product-card col-md-6 col-lg-4 col-sm-12">
                <a href="{{ route('collection.gifts') }}">
                    <div class="product-img"><img src="{{ asset('images/co6.png') }}" alt="Linen Tea Towel Set"></div>
                    <div class="product-info"><span class="product-cat">GIFTS</span>
                        <h3>Linen Tea Towel Set</h3>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- HERITAGE BANNER -->
    <section class="heritage-banner row">
        <div class="heritage-text col-md-6 col-sm-12">
            <span class="badge-tag">Limited Availability</span>
            <h2>The Heritage Series:<br>Handmade Lace</h2>
            <p>Explore the intricate craftsmanship behind our signature lace collection.</p>
            <a href="{{ route('ourstory') }}" class="btn-gold">Learn the Craft</a>
        </div>
        <div class="heritage-img col-md-6 col-sm-12">
            <img src="{{ asset('images/coLast.png') }}" class="rounded-2" alt="Handmade lace craft">
        </div>
    </section>

    <!-- FOOTER -->
    <footer class="footer border-top bg-white pt-5 pb-3">
        <div class="container">
            <div class="row g-5">
                <div class="col-sm-12 col-md-6 col-lg-4 footer-brand text-center text-lg-start">
                    <h3 class="mb-3">sšr</h3>
                    <p class="text-black opacity-50">Elevating your everyday style with curated collections.</p>
                </div>
                <div
                    class="col-sm-12 col-md-6 col-lg-4 footer-col ps-5 d-flex d-md-block flex-column justify-content-center align-items-center">
                    <h4 class="mb-4 pe-5">Shop</h4>
                    <ul class="d-flex flex-column p-0">
                        <a class="text-black link-offset-2 link-underline link-underline-opacity-0 opacity-50 mb-2"
                            href="{{ route('home') }}">Home</a>
                        <a class="text-black link-offset-2 link-underline link-underline-opacity-0 opacity-50"
                            href="{{ route('collection') }}">All Collections</a>
                    </ul>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-4 footer-col">
                    <h4 class="mb-4">Support / Contact</h4>
                    <form action="{{ route('contact.store') }}" method="POST" class="d-flex flex-column gap-2">
                        @csrf
                        <input type="text" name="name" class="form-control" placeholder="Your Name">
                        <input type="email" name="email" class="form-control" placeholder="Your Email">
                        <textarea name="message" class="form-control" placeholder="Your Message"></textarea>
                        <button type="submit"
                            class="btn btn-b text-white px-4 py-2 rounded-2 w-100 justify-content-center">Send</button>
                    </form>
                </div>
            </div>
            <div class="footer-bottom mt-5 pt-3 border-top text-center text-muted">
                <p>© 2026 sšr. All rights reserved.</p>
            </div>
        </div>
    </footer>
@endsection