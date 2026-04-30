<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Our Collection – Nourhan Store</title>
    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/collection.css') }}">
    <link
      href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,600;1,400;1,600&family=Jost:wght@300;400;500&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <!-- ── NAVBAR ── -->
    <header class="navbar">
      <nav class="nav-links left">
        <a href="home.html">Home</a>
        <a href="collection.html" class="active">Collection</a>
        <a href="#">Categories</a>
      </nav>
      <a href="index.html" class="logo">
        <span class="logo-icon">◇</span> Nourhan Store
      </a>
      <div class="nav-right">
        <div class="search-box">
          <svg
            width="14"
            height="14"
            viewBox="0 0 24 24"
            fill="none"
            stroke="currentColor"
            stroke-width="2"
          >
            <circle cx="11" cy="11" r="8" />
            <line x1="21" y1="21" x2="16.65" y2="16.65" />
          </svg>
          <input type="text" placeholder="Search..." />
        </div>
        <button class="icon-btn" aria-label="Wishlist">
          <svg
            width="18"
            height="18"
            viewBox="0 0 24 24"
            fill="none"
            stroke="currentColor"
            stroke-width="1.8"
          >
            <path
              d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"
            />
          </svg>
        </button>
        <button class="icon-btn cart-btn" aria-label="Cart">
          <svg
            width="18"
            height="18"
            viewBox="0 0 24 24"
            fill="none"
            stroke="currentColor"
            stroke-width="1.8"
          >
            <path d="M6 2L3 6v14a2 2 0 002 2h14a2 2 0 002-2V6l-3-4z" />
            <line x1="3" y1="6" x2="21" y2="6" />
            <path d="M16 10a4 4 0 01-8 0" />
          </svg>
          <span class="badge">3</span>
        </button>
        <button class="icon-btn" aria-label="Account">
          <svg
            width="18"
            height="18"
            viewBox="0 0 24 24"
            fill="none"
            stroke="currentColor"
            stroke-width="1.8"
          >
            <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2" />
            <circle cx="12" cy="7" r="4" />
          </svg>
        </button>
      </div>
    </header>

    <!-- ── PAGE HEADER ── -->
    <section class="page-header">
      <h1>Our Collection</h1>
      <p>
        Discover our curated selection of handmade luxury essentials, crafted
        with impeccable attention to detail and a passion for artisanal
        heritage.
      </p>
    </section>

    <!-- ── FILTERS ── -->
    <section class="filters-bar">
      <div class="filter-tabs">
        <button class="tab active">All</button>
        <button class="tab">Baby Clothes</button>
        <button class="tab">Embroidery</button>
        <button class="tab">Gifts</button>
        <button class="tab">Custom Orders</button>
      </div>
      <div class="filter-right">
        <div class="search-inline">
          <svg
            width="13"
            height="13"
            viewBox="0 0 24 24"
            fill="none"
            stroke="currentColor"
            stroke-width="2"
          >
            <circle cx="11" cy="11" r="8" />
            <line x1="21" y1="21" x2="16.65" y2="16.65" />
          </svg>
          <input type="text" placeholder="Find something special..." />
        </div>
      </div>
    </section>

    <!-- ── RESULTS META ── -->
    <div class="results-meta">
      <span>SHOWING <strong>6 LUXURY ITEMS</strong></span>
      <div class="sort-wrap">
        SORT BY:
        <select>
          <option>Newest</option>
          <option>Price: Low to High</option>
          <option>Price: High to Low</option>
          <option>Best Sellers</option>
        </select>
      </div>
    </div>

    <!-- ── PRODUCTS GRID ── -->
    <section class="products-grid">
      <div class="product-card">
        <div class="product-img">
          <img
            src="{{ asset('images/co1.png') }}"
            alt="Lace Heirloom Gown"
          />
          <span class="stock-badge in">IN STOCK</span>
          <button class="wishlist-btn" aria-label="Add to wishlist">
            <svg
              width="16"
              height="16"
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="1.8"
            >
              <path
                d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"
              />
            </svg>
          </button>
        </div>
        <div class="product-info">
          <span class="product-cat">BABY CLOTHES</span>
          <h3>Lace Heirloom Gown</h3>
          <span class="product-price">$185.00</span>
        </div>
      </div>

      <div class="product-card">
        <div class="product-img">
          <img src="{{ asset('images/co2.png') }}" alt="Floral Silk Cushion" />
          <span class="stock-badge in">IN STOCK</span>
          <button class="wishlist-btn" aria-label="Add to wishlist">
            <svg
              width="16"
              height="16"
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="1.8"
            >
              <path
                d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"
              />
            </svg>
          </button>
        </div>
        <div class="product-info">
          <span class="product-cat">EMBROIDERY</span>
          <h3>Floral Silk Cushion</h3>
          <span class="product-price">$120.00</span>
        </div>
      </div>

      <div class="product-card">
        <div class="product-img">
          <img
            src="{{ asset('images/co3.png') }}"
            alt="Newborn Welcome Set"
          />
          <span class="stock-badge in">IN STOCK</span>
          <button class="wishlist-btn" aria-label="Add to wishlist">
            <svg
              width="16"
              height="16"
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="1.8"
            >
              <path
                d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"
              />
            </svg>
          </button>
        </div>
        <div class="product-info">
          <span class="product-cat">GIFTS</span>
          <h3>Newborn Welcome Set</h3>
          <span class="product-price">$240.00</span>
        </div>
      </div>

      <div class="product-card">
        <div class="product-img">
          <img
            src="{{ asset('images/co4.png') }}"
            alt="Velvet Ribbon Bonnet"
          />
          <span class="stock-badge in">IN STOCK</span>
          <button class="wishlist-btn" aria-label="Add to wishlist">
            <svg
              width="16"
              height="16"
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="1.8"
            >
              <path
                d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"
              />
            </svg>
          </button>
        </div>
        <div class="product-info">
          <span class="product-cat">BABY CLOTHES</span>
          <h3>Velvet Ribbon Bonnet</h3>
          <span class="product-price">$65.00</span>
        </div>
      </div>

      <div class="product-card">
        <div class="product-img">
          <img
            src="{{ asset('images/co5.png') }}"
            alt="Botanical Wall Hoop"
          />
          <span class="stock-badge in">IN STOCK</span>
          <button class="wishlist-btn" aria-label="Add to wishlist">
            <svg
              width="16"
              height="16"
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="1.8"
            >
              <path
                d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"
              />
            </svg>
          </button>
        </div>
        <div class="product-info">
          <span class="product-cat">EMBROIDERY</span>
          <h3>Botanical Wall Hoop</h3>
          <span class="product-price">$95.00</span>
        </div>
      </div>

      <div class="product-card">
        <div class="product-img">
          <img
            src="{{ asset('images/co6.png') }}"
            alt="Linen Tea Towel Set"
          />
          <span class="stock-badge in">IN STOCK</span>
          <button class="wishlist-btn" aria-label="Add to wishlist">
            <svg
              width="16"
              height="16"
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="1.8"
            >
              <path
                d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"
              />
            </svg>
          </button>
        </div>
        <div class="product-info">
          <span class="product-cat">GIFTS</span>
          <h3>Linen Tea Towel Set</h3>
          <span class="product-price">$55.00</span>
        </div>
      </div>
    </section>

    <!-- ── DISCOVER MORE ── -->
    <div class="discover-more">
      <a href="#" class="btn-outline">Discover More Pieces →</a>
    </div>

    <!-- ── HERITAGE BANNER ── -->
    <section class="heritage-banner">
      <div class="heritage-text">
        <span class="badge-tag">Limited Availability</span>
        <h2>The Heritage Series:<br />Handmade Lace</h2>
        <p>
          Explore the intricate craftsmanship behind our signature lace
          collection. Each piece tells a story of tradition, woven into modern
          silhouettes for your little ones.
        </p>
        <a href="#" class="btn-gold">Learn the Craft</a>
      </div>
      <div class="heritage-img">
        <img src="{{ asset('images/colast.png') }}" alt="Handmade lace craft" />
      </div>
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
