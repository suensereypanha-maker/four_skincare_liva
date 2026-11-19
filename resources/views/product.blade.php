<!DOCTYPE html>
<html lang="en">
  
<head>
    <script>document.documentElement.classList.add('js')</script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Super C Smart Nutrient Beauty Capsules &mdash; Liva Skincare</title>
    <meta name="description" content="Super C Smart Nutrient Beauty Capsules and botanical set — reduces uneven pigmentation, brightens skin tone, and restores natural radiant glow.">
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

          <form class="emp-search" role="search" aria-label="Search products">
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

      <div class="emp-catbar">
        <div class="container">
          <ul class="emp-catbar__list" aria-label="Shop categories">
            <li><a href="{{ route('home') }}#products"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M4 6h16M4 12h16M4 18h16" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg> All Categories</a></li>
            <li><a href="{{ route('about') }}">About Us</a></li>
            <li><a href="{{ route('contact') }}">Contact</a></li>
          </ul>
        </div>
      </div>
    </header>

    <!-- Mobile menu -->
    <div class="emp-mobile" id="mobileMenu" hidden>
      <form class="emp-search emp-search--mobile" role="search" aria-label="Search products">
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
            <li><a href="{{ route('home') }}#products">Skincare Sets</a></li>
            <li aria-current="page">Super C Smart Nutrient Beauty Capsules</li>
          </ol>
        </nav>

        <!-- Product -->
        <section class="pdp" aria-labelledby="pdp-title">

          <!-- Gallery -->
          <div class="pdp__gallery">
            <div class="gallery">
              <div class="gallery__thumbs-col">
                <button type="button" class="gallery__nav-btn gallery__nav-btn--up" data-thumb-up aria-label="Previous thumbnail">
                  <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="18 15 12 9 6 15"></polyline></svg>
                </button>
                <ul class="gallery__thumbs" role="tablist" aria-label="Product images">
                  <li>
                    <button class="gallery__thumb is-active" type="button" role="tab" aria-selected="true"
                      data-thumb data-full="{{ asset('images/hair-mask.webp') }}">
                      <img src="{{ asset('images/hair-mask.webp') }}" width="80" height="80" loading="lazy" alt="Super C Capsules Jar">
                    </button>
                  </li>
                  <li>
                    <button class="gallery__thumb" type="button" role="tab" aria-selected="false"
                      data-thumb data-full="{{ asset('images/daily-edit.png') }}">
                      <img src="{{ asset('images/daily-edit.png') }}" width="80" height="80" loading="lazy" alt="Set Product Box">
                    </button>
                  </li>
                  <li>
                    <button class="gallery__thumb" type="button" role="tab" aria-selected="false"
                      data-thumb data-full="{{ asset('images/daily-edit-detail.webp') }}">
                      <img src="{{ asset('images/daily-edit-detail.webp') }}" width="80" height="80" loading="lazy" alt="Capsules Spilling Detail">
                    </button>
                  </li>
                  <li>
                    <button class="gallery__thumb" type="button" role="tab" aria-selected="false"
                      data-thumb data-full="{{ asset('images/travel-set.webp') }}">
                      <img src="{{ asset('images/travel-set.webp') }}" width="80" height="80" loading="lazy" alt="Complete Skincare Set Collection">
                    </button>
                  </li>
                </ul>
                <button type="button" class="gallery__nav-btn gallery__nav-btn--down" data-thumb-down aria-label="Next thumbnail">
                  <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"></polyline></svg>
                </button>
              </div>

              <div class="gallery__main">
                <span class="badge-discount gallery__badge">-20%</span>
                <button class="gallery__zoom" type="button" data-lightbox-open aria-label="View larger image">
                  <img src="{{ asset('images/hair-mask.webp') }}" width="640" height="640" alt="Super C Smart Nutrient Beauty Capsules" data-main-image fetchpriority="high">
                </button>
              </div>
            </div>
          </div>

          <!-- Info -->
          <div class="pdp__info">
            <span class="badge-discount">-20%</span>
            <p class="pdp__brand-line">Brand: <span class="pdp__brand-name">Highlight</span></p>
            <h1 class="pdp__title" id="pdp-title">Super C Smart Nutrient Beauty Capsules</h1>

            <div class="pdp__price-rating">
              <span class="pdp__range-price">$69 – $249</span>
              <div class="pdp__stars-wrap">
                <span class="stars-gold">★★★★★</span>
                <span class="pdp__review-count">(1 review)</span>
              </div>
            </div>

            <ul class="pdp__feature-bullets">
              <li>Reduces Uneven Pigmentation And Evens Out Skin Tone.</li>
              <li>It Brightens Your Skin Tone And Adds A Natural Glow To It.</li>
              <li>Reduces Dark Spots To Reveal Visibly Fairer Skin.</li>
            </ul>

            <!-- Set Product Box -->
            <div class="set-bundle-card">
              <!-- Item 1 -->
              <div class="set-bundle-item" data-bundle-item data-id="magic-skin-duo" data-name="Charlotte Tilbury Magic Skin Duo" data-price="69.00" data-img="{{ asset('images/daily-edit.png') }}">
                <div class="set-bundle-item__left">
                  <img src="{{ asset('images/daily-edit.png') }}" class="set-bundle-item__thumb" alt="Charlotte Tilbury Magic Skin Duo">
                  <div class="set-bundle-item__info">
                    <div class="set-bundle-item__name">Charlotte Tilbury Magic Skin Duo</div>
                    <div class="set-bundle-item__pricing">
                      <span class="set-bundle-item__was">$71</span>
                      <span class="set-bundle-item__price">$69</span>
                    </div>
                  </div>
                </div>
                <div class="set-stepper" data-item-stepper>
                  <button type="button" class="set-stepper__btn" data-step="-1" aria-label="Decrease quantity">−</button>
                  <input type="text" inputmode="numeric" class="set-stepper__input" value="0" readonly aria-label="Quantity">
                  <button type="button" class="set-stepper__btn" data-step="1" aria-label="Increase quantity">+</button>
                </div>
              </div>

              <!-- Item 2 -->
              <div class="set-bundle-item" data-bundle-item data-id="ren-hyaluronic-acid" data-name="Ren Hyaluronic Acid 2% + B5 30ml" data-price="249.00" data-img="{{ asset('images/product-serum.jpg') }}">
                <div class="set-bundle-item__left">
                  <img src="{{ asset('images/product-serum.jpg') }}" class="set-bundle-item__thumb" alt="Ren Hyaluronic Acid 2% + B5 30ml">
                  <div class="set-bundle-item__info">
                    <div class="set-bundle-item__name">Ren Hyaluronic Acid 2% + B5 30ml</div>
                    <div class="set-bundle-item__pricing">
                      <span class="set-bundle-item__was">$300</span>
                      <span class="set-bundle-item__price">$249</span>
                      <span class="set-bundle-item__stock">5 in stock</span>
                    </div>
                  </div>
                </div>
                <div class="set-stepper" data-item-stepper>
                  <button type="button" class="set-stepper__btn" data-step="-1" aria-label="Decrease quantity">−</button>
                  <input type="text" inputmode="numeric" class="set-stepper__input" value="0" readonly aria-label="Quantity">
                  <button type="button" class="set-stepper__btn" data-step="1" aria-label="Increase quantity">+</button>
                </div>
              </div>

              <!-- Item 3 -->
              <div class="set-bundle-item" data-bundle-item data-id="mz-skin-oil" data-name="Mz Skin Reviving Antioxidant Glow Oil" data-price="199.00" data-img="{{ asset('images/botanical.webp') }}">
                <div class="set-bundle-item__left">
                  <img src="{{ asset('images/botanical.webp') }}" class="set-bundle-item__thumb" alt="Mz Skin Reviving Antioxidant Glow Oil">
                  <div class="set-bundle-item__info">
                    <div class="set-bundle-item__name">Mz Skin Reviving Antioxidant Glow Oil...</div>
                    <div class="set-bundle-item__pricing">
                      <span class="set-bundle-item__was">$249</span>
                      <span class="set-bundle-item__price">$199</span>
                    </div>
                  </div>
                </div>
                <div class="set-stepper" data-item-stepper>
                  <button type="button" class="set-stepper__btn" data-step="-1" aria-label="Decrease quantity">−</button>
                  <input type="text" inputmode="numeric" class="set-stepper__input" value="0" readonly aria-label="Quantity">
                  <button type="button" class="set-stepper__btn" data-step="1" aria-label="Increase quantity">+</button>
                </div>
              </div>
            </div>

            <!-- Add to Cart button -->
            <div class="pdp__set-buy">
              <button type="button" class="btn-set-cart" id="setAddToCartBtn" aria-label="Add selected items to cart">
                Add To Cart
              </button>
            </div>

            <!-- Sub actions -->
            <div class="pdp__sub-actions">
              <button type="button" class="sub-action-link" data-set-wishlist data-wish-btn data-id="set-super-c" data-name="Super C Smart Nutrient Beauty Capsules" data-price="69.00" data-img="{{ asset('images/hair-mask.webp') }}" aria-label="Add to wishlist" aria-pressed="false">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M12 20s-7-4.35-9.2-8.3C1.1 8.4 2.6 5 6 5c2 0 3.2 1.2 4 2.3C10.8 6.2 12 5 14 5c3.4 0 4.9 3.4 3.2 6.7C19 15.65 12 20 12 20Z"/></svg>
                <span>Add To Wishlist</span>
              </button>
              <button type="button" class="sub-action-link" data-set-compare aria-label="Add to compare">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M16 3h5v5M4 20L21 3M21 16v5h-5M15 15l6 6M4 4l5 5"/></svg>
                <span>Add To Compare</span>
              </button>
              <button type="button" class="sub-action-link" data-set-share aria-label="Share product">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><circle cx="18" cy="5" r="3"/><circle cx="6" cy="12" r="3"/><circle cx="18" cy="19" r="3"/><line x1="8.59" y1="13.51" x2="15.42" y2="17.49"/><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"/></svg>
                <span>Share</span>
              </button>
            </div>

            <ul class="pdp__assure" style="margin-top: 26px;">
              <li><svg width="18" height="18" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M2 7h11v9H2zM13 10h5l3 3v3h-8z" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round"/></svg> Free shipping over $49 · dispatched within 24h</li>
              <li><svg width="18" height="18" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M20 12a8 8 0 1 1-2.3-5.6" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/><path d="M20 4v4h-4" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round"/></svg> 30-day free returns · 100% authentic guarantee</li>
              <li><svg width="18" height="18" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M12 3l7 3v5c0 4.4-3 7.8-7 9-4-1.2-7-4.6-7-9V6l7-3Z" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round"/></svg> Secure checkout · pay your way</li>
            </ul>
          </div>
        </section>

        <!-- Tabs -->
        <section class="ptabs" aria-label="Product details">
          <div class="ptabs__nav" role="tablist" aria-label="Product information">
            <button class="ptab is-active" role="tab" id="tab-desc" aria-controls="panel-desc" aria-selected="true" tabindex="0">Description</button>
            <button class="ptab" role="tab" id="tab-specs" aria-controls="panel-specs" aria-selected="false" tabindex="-1">Specifications</button>
            <button class="ptab" role="tab" id="tab-reviews" aria-controls="panel-reviews" aria-selected="false" tabindex="-1">Reviews <span class="ptab__n">1,284</span></button>
            <button class="ptab" role="tab" id="tab-how" aria-controls="panel-how" aria-selected="false" tabindex="-1">How to use</button>
          </div>

          <div class="ptabs__panels">
            <div class="ppanel is-active" id="panel-desc" role="tabpanel" aria-labelledby="tab-desc" tabindex="0">
              <div class="prose">
                <p>The Super C Smart Nutrient Beauty Capsules delivers concentrated botanical nutrition to revitalize dull, fatigued skin. Formulated with stable Vitamin C esters, organic plant sterols, and bio-compatible lipids, each single-dose capsule preserves maximum antioxidant potency until the exact moment of application.</p>
                <p>Clinically tested to boost natural skin radiance and support cellular collagen synthesis, this restorative set pairs seamlessly with our deep hydrating botanical serums for a luminous, firm, and thoroughly replenished complexion.</p>
                <h3>In this set</h3>
                <ul>
                  <li>Super C Smart Nutrient Beauty Capsules (60 biodegradable capsules)</li>
                  <li>Charlotte Tilbury Magic Skin Duo primer &amp; glow elixir</li>
                  <li>Ren Hyaluronic Acid 2% + B5 (30ml) deep moisture serum</li>
                  <li>Mz Skin Reviving Antioxidant Glow Oil (treatment dropper bottle)</li>
                </ul>
              </div>
            </div>

            <div class="ppanel" id="panel-specs" role="tabpanel" aria-labelledby="tab-specs" tabindex="0" hidden>
              <table class="spec">
                <tbody>
                  <tr><th scope="row">Key Ingredients</th><td>Stable Vitamin C (Tetrahexyldecyl Ascorbate), Hyaluronic Acid, Vitamin E &amp; F, Botanical Seed Oils</td></tr>
                  <tr><th scope="row">Skin Type</th><td>Suitable for all skin types, including sensitive and mature skin</td></tr>
                  <tr><th scope="row">Formulation</th><td>100% preservative-free, fragrance-free, vegan &amp; biodegradable capsules</td></tr>
                  <tr><th scope="row">Texture</th><td>Silky, rapidly absorbed dry oil and nutrient gel</td></tr>
                  <tr><th scope="row">Origin</th><td>Formulated in London &amp; sustainably crafted with organic botanical extracts</td></tr>
                  <tr><th scope="row">Cruelty-Free</th><td>Leaping Bunny certified, never tested on animals</td></tr>
                  <tr><th scope="row">Shelf Life</th><td>18 months (sealed capsules maintain 100% active vitamin potency)</td></tr>
                </tbody>
              </table>
            </div>

            <div class="ppanel" id="panel-reviews" role="tabpanel" aria-labelledby="tab-reviews" tabindex="0" hidden>
              <div class="revsum">
                <div class="revsum__score">
                  <strong>5.0</strong>
                  <span class="stars" style="--rate:100%" aria-hidden="true"></span>
                  <span class="revsum__based">Based on verified reviews</span>
                </div>
                <ul class="revsum__bars">
                  <li><span>5★</span><span class="revbar"><span style="width:100%"></span></span><span>100%</span></li>
                  <li><span>4★</span><span class="revbar"><span style="width:0%"></span></span><span>0%</span></li>
                  <li><span>3★</span><span class="revbar"><span style="width:0%"></span></span><span>0%</span></li>
                  <li><span>2★</span><span class="revbar"><span style="width:0%"></span></span><span>0%</span></li>
                  <li><span>1★</span><span class="revbar"><span style="width:0%"></span></span><span>0%</span></li>
                </ul>
              </div>
              <ul class="revlist">
                <li class="rev">
                  <div class="rev__head">
                    <img src="{{ asset('images/person-1.jpg') }}" width="44" height="44" loading="lazy" alt="Portrait of Danielle Osei">
                    <div>
                      <strong>Danielle Osei</strong>
                      <span class="rev__verified">Verified purchase</span>
                    </div>
                    <span class="stars" style="--rate:100%" aria-label="Rated 5 out of 5"></span>
                  </div>
                  <p class="rev__body">This set transformed my skincare routine completely. After two weeks of using the Super C capsules and serum, my sun spots have faded noticeably and my skin has a healthy dewy glow without feeling greasy at all.</p>
                </li>
              </ul>
            </div>

            <div class="ppanel" id="panel-how" role="tabpanel" aria-labelledby="tab-how" tabindex="0" hidden>
              <div class="prose">
                <h3>Recommended Application Ritual</h3>
                <div class="how-steps-list">
                  <div class="how-step-item">
                    <span class="how-step-badge">1</span>
                    <div>
                      <strong>Step 1: Cleanse Thoroughly</strong>
                      <p>Start with freshly cleansed, slightly damp skin using lukewarm water to prepare your pores for active vitamin absorption.</p>
                    </div>
                  </div>
                  <div class="how-step-item">
                    <span class="how-step-badge">2</span>
                    <div>
                      <strong>Step 2: Twist &amp; Dispense Capsule</strong>
                      <p>Twist off the tip of one Super C Smart Nutrient Capsule. Squeeze the silky serum into the palm of your hand.</p>
                    </div>
                  </div>
                  <div class="how-step-item">
                    <span class="how-step-badge">3</span>
                    <div>
                      <strong>Step 3: Press &amp; Smooth</strong>
                      <p>Press serum gently into face, neck, and decollete in upward circular motions. Allow 60 seconds for full absorption.</p>
                    </div>
                  </div>
                  <div class="how-step-item">
                    <span class="how-step-badge">4</span>
                    <div>
                      <strong>Step 4: Layer with Duo &amp; Glow Oil</strong>
                      <p>Follow with your Magic Skin Duo hydration and seal in maximum nourishment with 2–3 drops of the Reviving Glow Oil.</p>
                    </div>
                  </div>
                </div>
                <div class="how-pro-tip">
                  <strong>💡 Pro Tip:</strong> For optimal skin brightness and antioxidant protection, apply one capsule every morning followed by your preferred SPF.
                </div>
              </div>
            </div>
          </div>
        </section>

        <!-- Related -->
        <section class="section" aria-labelledby="rel-h">
          <div class="section__head">
            <div>
              <p class="eyebrow">You might also like</p>
              <h2 class="section__title" id="rel-h">Related products</h2>
            </div>
          </div>
          <div class="pgrid pgrid--rel">
            <article class="pcard">
              <div class="pcard__media">
                <span class="badge-emp badge-emp--best">Bestseller</span>
                <a href="{{ route('product') }}" class="pcard__imglink"><img src="{{ asset('images/conditioner.png') }}" width="300" height="300" loading="lazy" alt="Liva Nourishing Botanical Conditioner"></a>
                <button class="pcard__quick" type="button" data-add-to-cart data-id="liva-conditioner" data-name="Liva Nourishing Botanical Conditioner" data-price="26.00" data-img="{{ asset('images/conditioner.png') }}">Quick add</button>
              </div>
              <div class="pcard__body">
                <span class="pcard__cat">Hair Care</span>
                <h3 class="pcard__title"><a href="{{ route('product') }}">Liva Nourishing Conditioner</a></h3>
                <div class="pcard__rate"><span class="stars" style="--rate:94%" aria-hidden="true"></span><span class="pcard__rnum">4.7</span></div>
                <div class="pcard__price"><span class="price-now">$26.00</span><span class="price-was">$34.00</span></div>
              </div>
            </article>
            <article class="pcard">
              <div class="pcard__media">
                <a href="{{ route('product') }}" class="pcard__imglink"><img src="{{ asset('images/body-wash.webp') }}" width="300" height="300" loading="lazy" alt="Liva Gentle Purifying Body Wash"></a>
                <button class="pcard__quick" type="button" data-add-to-cart data-id="liva-bodywash" data-name="Liva Gentle Purifying Body Wash" data-price="22.00" data-img="{{ asset('images/body-wash.webp') }}">Quick add</button>
              </div>
              <div class="pcard__body">
                <span class="pcard__cat">Body Care</span>
                <h3 class="pcard__title"><a href="{{ route('product') }}">Liva Gentle Body Wash</a></h3>
                <div class="pcard__rate"><span class="stars" style="--rate:94%" aria-hidden="true"></span><span class="pcard__rnum">4.7</span></div>
                <div class="pcard__price"><span class="price-now">$22.00</span></div>
              </div>
            </article>
            <article class="pcard">
              <div class="pcard__media">
                <span class="badge-emp badge-emp--sale">Deal</span>
                <a href="{{ route('product') }}" class="pcard__imglink"><img src="{{ asset('images/body-lotion.webp') }}" width="300" height="300" loading="lazy" alt="Liva Deep Moisture Body Lotion"></a>
                <button class="pcard__quick" type="button" data-add-to-cart data-id="liva-bodylotion" data-name="Liva Deep Moisture Body Lotion" data-price="28.00" data-img="{{ asset('images/body-lotion.webp') }}">Quick add</button>
              </div>
              <div class="pcard__body">
                <span class="pcard__cat">Lotions</span>
                <h3 class="pcard__title"><a href="{{ route('product') }}">Liva Deep Moisture Lotion</a></h3>
                <div class="pcard__rate"><span class="stars" style="--rate:92%" aria-hidden="true"></span><span class="pcard__rnum">4.6</span></div>
                <div class="pcard__price"><span class="price-now">$28.00</span><span class="price-was">$36.00</span></div>
              </div>
            </article>
            <article class="pcard">
              <div class="pcard__media">
                <span class="badge-emp badge-emp--new">New</span>
                <a href="{{ route('product') }}" class="pcard__imglink"><img src="{{ asset('images/hair-mask.webp') }}" width="300" height="300" loading="lazy" alt="Liva Intensive Repair Hair Mask"></a>
                <button class="pcard__quick" type="button" data-add-to-cart data-id="liva-hairmask" data-name="Liva Intensive Repair Hair Mask" data-price="34.00" data-img="{{ asset('images/hair-mask.webp') }}">Quick add</button>
              </div>
              <div class="pcard__body">
                <span class="pcard__cat">Hair Masks</span>
                <h3 class="pcard__title"><a href="{{ route('product') }}">Liva Intensive Hair Mask</a></h3>
                <div class="pcard__rate"><span class="stars" style="--rate:98%" aria-hidden="true"></span><span class="pcard__rnum">4.9</span></div>
                <div class="pcard__price"><span class="price-now">$34.00</span></div>
              </div>
            </article>
          </div>
        </section>

      </div>
    </main>

    <!-- Footer -->
    <footer class="foot">
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
              <li><a href="#" aria-label="Emporium on Instagram"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" aria-hidden="true"><rect x="3" y="3" width="18" height="18" rx="5" stroke="currentColor" stroke-width="1.8"/><circle cx="12" cy="12" r="4" stroke="currentColor" stroke-width="1.8"/><circle cx="17.5" cy="6.5" r="1.2" fill="currentColor"/></svg></a></li>
              <li><a href="#" aria-label="Emporium on YouTube"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" aria-hidden="true"><rect x="3" y="6" width="18" height="12" rx="3" stroke="currentColor" stroke-width="1.8"/><path d="M11 9.5v5l4-2.5-4-2.5Z" fill="currentColor"/></svg></a></li>
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
                <li><a href="#">Size guides</a></li>
                <li><a href="#">Contact support</a></li>
              </ul>
            </div>
            <div class="foot__col">
              <h3>Company</h3>
              <ul>
                <li><a href="#">About Liva</a></li>
                <li><a href="#">Careers</a></li>
                <li><a href="#">Sustainability</a></li>
                <li><a href="#">Affiliates</a></li>
                <li><a href="#">Press</a></li>
              </ul>
            </div>
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

    <!-- Lightbox -->
    <div class="lightbox" data-lightbox hidden role="dialog" aria-modal="true" aria-label="Product image viewer">
      <button class="lightbox__close" type="button" data-lightbox-close aria-label="Close image viewer">
        <svg width="26" height="26" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="m6 6 12 12M18 6 6 18" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>
      </button>
      <img src="{{ asset('images/shampoo.webp') }}" width="900" height="900" alt="Enlarged product image" data-lightbox-img>
    </div>

    <!-- Toasts -->
    <div class="toasts" data-toasts aria-live="polite" aria-atomic="false"></div>

    <script src="{{ asset('js/vendor/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}?v={{ filemtime(public_path('js/main.js')) }}"></script>
  </body>

</html>
