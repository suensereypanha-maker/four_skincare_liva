<!DOCTYPE html>
<html lang="en">
  
<head>
    <script>document.documentElement.classList.add('js')</script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>About Us &mdash; Liva Skincare</title>
    <meta name="description" content="Discover the Liva Skincare story — pure botanical formulas, certified organic seed extracts, and mindful daily rituals.">
    <meta name="theme-color" content="#0c6b58">

    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700&amp;family=Plus+Jakarta+Sans:wght@600;700;800&amp;display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/vendor/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}?v={{ filemtime(public_path('css/style.css')) }}">
  </head>
  <body>

    <a class="skip-link" href="#main">Skip to content</a>

    <!-- Header / Navbar -->
    <header class="site-header" id="site-header">
      <div class="container">
        <nav class="navbar navbar-expand-lg emp-nav" aria-label="Main navigation">
          <a class="navbar-brand emp-brand" href="{{ route('home') }}" aria-label="Liva Skincare home">
            <span class="emp-brand__mark" aria-hidden="true">
              <img src="{{ asset('images/logo.png') }}" width="38" height="38" alt="Liva Logo" class="emp-brand__logo" style="height:38px;width:auto;object-fit:contain;border-radius:0;box-shadow:none;">
            </span>
            <span class="emp-brand__name">Liva</span>
          </a>

          <form class="emp-search" role="search" aria-label="Search products" action="{{ route('home') }}">
            <label for="q" class="visually-hidden">Search products</label>
            <input id="q" type="search" class="emp-search__input" placeholder="Search for products, brands and more…" autocomplete="off">
            <button type="submit" class="emp-search__btn" aria-label="Search">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" aria-hidden="true"><circle cx="11" cy="11" r="7" stroke="currentColor" stroke-width="2"/><path d="m20 20-3-3" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>
            </button>
          </form>

          <div class="emp-nav__actions">
            <a href="https://t.me/+85512345678" target="_blank" rel="noopener noreferrer" class="emp-iconlink emp-iconlink--telegram" aria-label="Telegram" title="Chat on Telegram">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                <path d="M11.944 0A12 12 0 0 0 0 12a12 12 0 0 0 12 12 12 12 0 0 0 12-12A12 12 0 0 0 12 0a12 12 0 0 0-.056 0zm4.962 7.224c.1-.002.321.023.465.14a.506.506 0 0 1 .171.325c.016.093.036.306.02.472-.18 1.898-.962 6.502-1.36 8.627-.168.9-.499 1.201-.82 1.23-.696.065-1.225-.46-1.9-.902-1.056-.693-1.653-1.124-2.678-1.8-1.185-.78-.417-1.21.258-1.91.177-.184 3.247-2.977 3.307-3.23.007-.032.014-.15-.056-.212s-.174-.041-.249-.024c-.106.024-1.793 1.14-5.061 3.345-.48.33-.913.49-1.302.48-.428-.008-1.252-.241-1.865-.44-.752-.245-1.349-.374-1.297-.789.027-.216.325-.437.893-.663 3.498-1.524 5.83-2.529 6.998-3.014 3.332-1.386 4.025-1.627 4.476-1.635z"/>
              </svg>
              <span class="visually-hidden">Telegram</span>
            </a>
            <a href="https://facebook.com" target="_blank" rel="noopener noreferrer" class="emp-iconlink emp-iconlink--facebook" aria-label="Facebook" title="Visit Facebook">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
              </svg>
              <span class="visually-hidden">Facebook</span>
            </a>
            <button type="button" class="emp-wishbtn" data-wishlist-open aria-label="View favorites">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M12 20s-7-4.35-9.2-8.3C1.1 8.4 2.6 5 6 5c2 0 3.2 1.2 4 2.3C10.8 6.2 12 5 14 5c3.4 0 4.9 3.4 3.2 6.7C19 15.65 12 20 12 20Z" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round"/></svg>
              <span class="emp-wishbtn__count" data-wishlist-count style="display:none;">0</span>
              <span class="visually-hidden">Favorites</span>
            </button>
            <a href="#" class="emp-iconlink" aria-label="Account">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" aria-hidden="true"><circle cx="12" cy="8" r="3.5" stroke="currentColor" stroke-width="1.8"/><path d="M5 20c0-3.3 3.1-5.5 7-5.5s7 2.2 7 5.5" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/></svg>
              <span class="visually-hidden">Account</span>
            </a>
            <button type="button" class="emp-cartpill" data-cart-open aria-label="Open cart">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M4 6h16l-1.4 8.1a2 2 0 0 1-2 1.7H7.4a2 2 0 0 1-2-1.7L4 6Z" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round"/><circle cx="9" cy="20" r="1.4" fill="currentColor"/><circle cx="17" cy="20" r="1.4" fill="currentColor"/></svg>
              <span class="emp-cartpill__label">Cart</span>
              <span class="emp-cartpill__count" data-cart-count>0</span>
            </button>
            <button class="emp-burger" type="button" aria-expanded="false" aria-controls="mobileMenu" aria-label="Open menu" data-menu-toggle>
              <span></span><span></span><span></span>
            </button>
          </div>
        </nav>
      </div>

      <!-- Navigation category bar (Clean text links: no background, no border) -->
      <div class="emp-catbar">
        <div class="container">
          <ul class="emp-catbar__list" aria-label="Main navigation">
            <li><a href="{{ route('home') }}#products"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M4 6h16M4 12h16M4 18h16" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg> All Categories</a></li>
            <li><a href="{{ route('about') }}" class="is-current">About Us</a></li>
            <li><a href="{{ route('contact') }}">Contact</a></li>
          </ul>
        </div>
      </div>
    </header>

    <!-- Mobile menu -->
    <div class="emp-mobile" id="mobileMenu" hidden>
      <form class="emp-search emp-search--mobile" role="search" aria-label="Search products" action="{{ route('home') }}">
        <label for="qm" class="visually-hidden">Search products</label>
        <input id="qm" type="search" class="emp-search__input" placeholder="Search products…" autocomplete="off">
        <button type="submit" class="emp-search__btn" aria-label="Search">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" aria-hidden="true"><circle cx="11" cy="11" r="7" stroke="currentColor" stroke-width="2"/><path d="m20 20-3-3" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>
        </button>
      </form>
      <nav aria-label="Mobile categories">
        <ul class="emp-mobile__list">
          <li><a href="{{ route('home') }}#products">All Categories</a></li>
          <li><a href="{{ route('about') }}">About Us</a></li>
          <li><a href="{{ route('contact') }}">Contact</a></li>
        </ul>
      </nav>
      <div class="emp-mobile__foot">
        <a href="#" class="btn-line">My account</a>
        <a href="#" class="btn-line" data-wishlist-open>Favorites (<span data-wishlist-count>0</span>)</a>
        <div style="display:flex;gap:10px;margin-top:12px;padding-top:12px;border-top:1px solid var(--line);">
          <a href="https://t.me/+85512345678" target="_blank" rel="noopener noreferrer" class="emp-iconlink emp-iconlink--telegram" aria-label="Telegram" title="Telegram" style="width:40px;height:40px;">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M11.944 0A12 12 0 0 0 0 12a12 12 0 0 0 12 12 12 12 0 0 0 12-12A12 12 0 0 0 12 0a12 12 0 0 0-.056 0zm4.962 7.224c.1-.002.321.023.465.14a.506.506 0 0 1 .171.325c.016.093.036.306.02.472-.18 1.898-.962 6.502-1.36 8.627-.168.9-.499 1.201-.82 1.23-.696.065-1.225-.46-1.9-.902-1.056-.693-1.653-1.124-2.678-1.8-1.185-.78-.417-1.21.258-1.91.177-.184 3.247-2.977 3.307-3.23.007-.032.014-.15-.056-.212s-.174-.041-.249-.024c-.106.024-1.793 1.14-5.061 3.345-.48.33-.913.49-1.302.48-.428-.008-1.252-.241-1.865-.44-.752-.245-1.349-.374-1.297-.789.027-.216.325-.437.893-.663 3.498-1.524 5.83-2.529 6.998-3.014 3.332-1.386 4.025-1.627 4.476-1.635z"/></svg>
          </a>
          <a href="https://facebook.com" target="_blank" rel="noopener noreferrer" class="emp-iconlink emp-iconlink--facebook" aria-label="Facebook" title="Facebook" style="width:40px;height:40px;">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
          </a>
        </div>
      </div>
    </div>

    <main id="main">
      <div class="container">

        <!-- Breadcrumb -->
        <nav class="crumb" aria-label="Breadcrumb">
          <ol>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li aria-current="page">About Us</li>
          </ol>
        </nav>

        <!-- About Hero -->
        <section class="about-hero" aria-labelledby="about-title">
          <p class="eyebrow">Our Philosophy &amp; Botanical Heritage</p>
          <h1 class="about-hero__title" id="about-title">Pure Botanical Science for Mindful Daily Rituals</h1>
          <p class="about-hero__lead">At Liva, we formulate clean, restorative skincare centered around nutrient-dense botanical extracts, cold-pressed seed oils, and proven active vitamins. We believe daily self-care should be nourishing, uncomplicated, and deeply restorative.</p>
        </section>

        <!-- Story Split Section -->
        <section class="about-story">
          <div class="about-story__grid">
            <div class="about-story__content">
              <span class="badge-discount" style="background: var(--brand); color: #fff;">Founded with Purpose</span>
              <h2>Crafted to Nourish Your Skin Barrier</h2>
              <p>Liva began with a singular conviction: modern skincare should work in harmony with your skin's natural biology rather than overwhelming it with harsh synthetic fillers and aggressive chemical agents.</p>
              <p>Each formulation is meticulously blended in our laboratory using sustainably harvested seed extracts, stabilized antioxidants, and deeply hydrating lipid complexes. From our signature beauty capsules to gentle purifying washes, we ensure every drop delivers maximum cellular vitality.</p>
              
              <ul class="about-checklist">
                <li><svg width="20" height="20" viewBox="0 0 24 24" fill="none"><path d="m5 12 4 4 10-10" stroke="currentColor" stroke-width="2.4" stroke-linecap="round"/></svg> 100% Leaping Bunny certified cruelty-free</li>
                <li><svg width="20" height="20" viewBox="0 0 24 24" fill="none"><path d="m5 12 4 4 10-10" stroke="currentColor" stroke-width="2.4" stroke-linecap="round"/></svg> Free from parabens, sulfates, and synthetic dyes</li>
                <li><svg width="20" height="20" viewBox="0 0 24 24" fill="none"><path d="m5 12 4 4 10-10" stroke="currentColor" stroke-width="2.4" stroke-linecap="round"/></svg> Sustainably packaged in recyclable amber glass &amp; refillable pouches</li>
              </ul>
            </div>
            <div class="about-story__media">
              <div class="about-image-card">
                <img src="{{ asset('images/hero.webp') }}" alt="Liva Botanical Skincare Ritual" class="about-image-main">
                <div class="about-badge-float">
                  <strong>98%+</strong>
                  <span>Organic Botanical Extracts</span>
                </div>
              </div>
            </div>
          </div>
        </section>

    
        <!-- CTA Banner -->
        <section class="about-cta">
          <div class="about-cta__inner">
            <h2>Experience the Complete Botanical Collection</h2>
            <p>Elevate your morning and evening ritual with our Super C capsules and revitalizing nutrient oils.</p>
            <div class="about-cta__btns">
              <a href="{{ route('home') }}#products" class="btn-emp btn-emp--primary btn-emp--lg">Explore Products</a>
              <a href="{{ route('contact') }}" class="btn-emp btn-emp--ghost btn-emp--lg">Ask a Specialist</a>
            </div>
          </div>
        </section>

      </div>
    </main>

    <!-- Footer -->
    <footer class="foot" id="contact">
      <div class="container">
        <div class="foot__top">
          <div class="foot__brandcol">
            <a class="emp-brand emp-brand--foot" href="{{ route('home') }}" aria-label="Liva Skincare home">
              <span class="emp-brand__mark" aria-hidden="true">
                <img src="{{ asset('images/logo.png') }}" width="38" height="38" alt="Liva Logo" class="emp-brand__logo" style="height:38px;width:auto;object-fit:contain;border-radius:0;box-shadow:none;">
              </span>
              <span class="emp-brand__name">Liva</span>
            </a>
            <p class="foot__blurb">Pure botanical formulations for mindful self-care — crafted with certified organic extracts and skin-loving nutrients, delivered direct to your door.</p>
            <ul class="foot__social" aria-label="Social media">
              <li><a href="https://t.me/+85512345678" target="_blank" rel="noopener noreferrer" aria-label="Liva on Telegram"><svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M11.944 0A12 12 0 0 0 0 12a12 12 0 0 0 12 12 12 12 0 0 0 12-12A12 12 0 0 0 12 0a12 12 0 0 0-.056 0zm4.962 7.224c.1-.002.321.023.465.14a.506.506 0 0 1 .171.325c.016.093.036.306.02.472-.18 1.898-.962 6.502-1.36 8.627-.168.9-.499 1.201-.82 1.23-.696.065-1.225-.46-1.9-.902-1.056-.693-1.653-1.124-2.678-1.8-1.185-.78-.417-1.21.258-1.91.177-.184 3.247-2.977 3.307-3.23.007-.032.014-.15-.056-.212s-.174-.041-.249-.024c-.106.024-1.793 1.14-5.061 3.345-.48.33-.913.49-1.302.48-.428-.008-1.252-.241-1.865-.44-.752-.245-1.349-.374-1.297-.789.027-.216.325-.437.893-.663 3.498-1.524 5.83-2.529 6.998-3.014 3.332-1.386 4.025-1.627 4.476-1.635z"/></svg></a></li>
              <li><a href="https://facebook.com" target="_blank" rel="noopener noreferrer" aria-label="Liva on Facebook"><svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg></a></li>
              <li><a href="#" aria-label="Liva on Instagram"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" aria-hidden="true"><rect x="3" y="3" width="18" height="18" rx="5" stroke="currentColor" stroke-width="1.8"/><circle cx="12" cy="12" r="4" stroke="currentColor" stroke-width="1.8"/><circle cx="17.5" cy="6.5" r="1.2" fill="currentColor"/></svg></a></li>
              <li><a href="#" aria-label="Liva on YouTube"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" aria-hidden="true"><rect x="3" y="6" width="18" height="12" rx="3" stroke="currentColor" stroke-width="1.8"/><path d="M11 9.5v5l4-2.5-4-2.5Z" fill="currentColor"/></svg></a></li>
            </ul>
          </div>
          <div class="foot__links">
            <div class="foot__col">
              <h3>Shop</h3>
              <ul>
                <li><a href="{{ route('home') }}#products">All Products</a></li>
                <li><a href="{{ route('home') }}#products">Hair Care</a></li>
                <li><a href="{{ route('home') }}#products">Body Care</a></li>
                <li><a href="{{ route('home') }}#products">Botanicals</a></li>
                <li><a href="{{ route('home') }}#deals">Today's deals</a></li>
              </ul>
            </div>
            <div class="foot__col">
              <h3>Help</h3>
              <ul>
                <li><a href="#">Track your order</a></li>
                <li><a href="#">Shipping &amp; delivery</a></li>
                <li><a href="#">Returns &amp; refunds</a></li>
                <li><a href="#">Skincare guides</a></li>
                <li><a href="{{ route('contact') }}">Contact support</a></li>
              </ul>
            </div>
            <div class="foot__col">
              <h3>Company</h3>
              <ul>
                <li><a href="{{ route('about') }}">About Liva</a></li>
                <li><a href="#">Sustainability</a></li>
                <li><a href="#">Wholesale &amp; Spas</a></li>
                <li><a href="#">Press</a></li>
              </ul>
            </div>
            <!-- Support Bank Column -->
            <div class="foot__col foot__col--bank">
              <h3>Support Bank</h3>
              <div class="bank-grid">
                <div class="bank-pill" title="KHQR / Bakong">
                  <img src="{{ asset('images/payments/bakong-khqr-icon.png') }}" alt="KHQR">
                  <span>KHQR</span>
                </div>
                <div class="bank-pill" title="ABA Bank">
                  <img src="{{ asset('images/payments/aba.png') }}" alt="ABA Bank">
                  <span>ABA</span>
                </div>
                <div class="bank-pill" title="ACLEDA Bank">
                  <img src="{{ asset('images/payments/acleda.png') }}" alt="ACLEDA Bank">
                  <span>ACLEDA</span>
                </div>
                <div class="bank-pill" title="Wing Bank">
                  <img src="{{ asset('images/payments/wing.jpg') }}" alt="Wing Bank">
                  <span>Wing</span>
                </div>
              </div>
              <div class="bank-qr-box">
                <img src="{{ asset('images/payments/khqr.png') }}" alt="Scan to Pay via KHQR" class="bank-qr-img">
                <div class="bank-qr-info">
                  <span class="bank-qr-title">Scan to Pay</span>
                  <span class="bank-qr-sub">Any banking app</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="foot__bottom">
          <p>&copy; 2026 Liva Skincare. All rights reserved.</p>
          <ul class="foot__pay" aria-label="Accepted payment methods">
            <li>KHQR</li><li>ABA</li><li>ACLEDA</li><li>Wing</li><li>Visa</li><li>Mastercard</li>
          </ul>
        </div>
      </div>
    </footer>

    <!-- Cart drawer -->
    <div class="cart-overlay" data-cart-overlay hidden></div>
    <aside class="cart" id="cartDrawer" aria-label="Shopping cart" aria-modal="true" role="dialog" aria-hidden="true" tabindex="-1">
      <div class="cart__head">
        <h2 class="cart__title">Your cart <span data-cart-count-text>(0)</span></h2>
        <button type="button" class="cart__close" data-cart-close aria-label="Close cart">
          <svg width="22" height="22" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="m6 6 12 12M18 6 6 18" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>
        </button>
      </div>
      <div class="cart__ship" data-ship-wrap>
        <p class="cart__shipmsg" data-ship-msg>Add <strong>$49.00</strong> more for free shipping</p>
        <div class="cart__shipbar"><span data-ship-bar style="width:0%"></span></div>
      </div>
      <ul class="cart__items" data-cart-items></ul>
      <div class="cart__empty" data-cart-empty>
        <p>Your cart is empty.</p>
        <button type="button" class="btn-emp btn-emp--ghost" data-cart-close>Start shopping</button>
      </div>
      <div class="cart__foot" data-cart-foot hidden>
        <div class="cart__subtotal">
          <span>Subtotal</span>
          <strong data-cart-subtotal>$0.00</strong>
        </div>
        <p class="cart__note">Shipping &amp; taxes calculated at checkout.</p>
        <a href="{{ route('checkout') }}" class="btn-emp btn-emp--primary btn-emp--block">Checkout</a>
        <button type="button" class="cart__continue" data-cart-close>Continue shopping</button>
      </div>
    </aside>

    <!-- Wishlist drawer -->
    <div class="wishlist-overlay" data-wishlist-overlay hidden></div>
    <aside class="wishlist-drawer" id="wishlistDrawer" aria-label="Favorites list" aria-modal="true" role="dialog" aria-hidden="true" tabindex="-1">
      <div class="wishlist__head">
        <h2 class="wishlist__title">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor" style="color:#e53935;" aria-hidden="true"><path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/></svg>
          Your Favorites <span data-wishlist-count-text>(0)</span>
        </h2>
        <button type="button" class="wishlist__close" data-wishlist-close aria-label="Close favorites">
          <svg width="22" height="22" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="m6 6 12 12M18 6 6 18" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>
        </button>
      </div>
      <ul class="wishlist__items" data-wishlist-items></ul>
      <div class="wishlist__empty" data-wishlist-empty>
        <div class="wishlist__empty-icon">♡</div>
        <p>Your favorites list is empty.</p>
        <button type="button" class="btn-emp btn-emp--ghost" data-wishlist-close>Explore products</button>
      </div>
      <div class="wishlist__foot" data-wishlist-foot hidden>
        <button type="button" class="btn-emp btn-emp--primary btn-emp--block" data-wishlist-add-all>Move All To Cart</button>
        <button type="button" class="wishlist__clear" data-wishlist-clear>Clear all favorites</button>
      </div>
    </aside>

    <!-- Toasts -->
    <div class="toasts" data-toasts aria-live="polite" aria-atomic="false"></div>

    <script src="{{ asset('js/vendor/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}?v={{ filemtime(public_path('js/main.js')) }}"></script>
  </body>
</html>

