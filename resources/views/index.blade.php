<!DOCTYPE html>
<html lang="en">

<head>
    <script>
        document.documentElement.classList.add('js')
    </script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Emporium &mdash; Free Bootstrap 5 E-commerce Template by uiCookies</title>
    <meta name="description"
        content="Emporium is a free multi-category e-commerce website template built on Bootstrap 5 — product grid, filtering, slide-in cart, countdown deals, and a full product page. jQuery-free.">
    <meta name="theme-color" content="#0c6b58">

    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700&amp;family=Plus+Jakarta+Sans:wght@600;700;800&amp;display=swap"
        rel="stylesheet">

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
                        <img src="{{ asset('images/logo.png') }}" width="38" height="38" alt="Liva Logo"
                            class="emp-brand__logo"
                            style="height:38px;width:auto;object-fit:contain;border-radius:0;box-shadow:none;">
                    </span>
                    <span class="emp-brand__name">Liva</span>
                </a>

                <!-- Search (desktop) -->
                <form class="emp-search" role="search" aria-label="Search products">
                    <label for="q" class="visually-hidden">Search products</label>
                    <input id="q" type="search" class="emp-search__input"
                        placeholder="Search for products, brands and more…" autocomplete="off">
                    <button type="submit" class="emp-search__btn" aria-label="Search">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                            <circle cx="11" cy="11" r="7" stroke="currentColor" stroke-width="2" />
                            <path d="m20 20-3-3" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                        </svg>
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
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                            <path
                                d="M12 20s-7-4.35-9.2-8.3C1.1 8.4 2.6 5 6 5c2 0 3.2 1.2 4 2.3C10.8 6.2 12 5 14 5c3.4 0 4.9 3.4 3.2 6.7C19 15.65 12 20 12 20Z"
                                stroke="currentColor" stroke-width="1.8" stroke-linejoin="round" />
                        </svg>
                        <span class="emp-wishbtn__count" data-wishlist-count style="display:none;">0</span>
                        <span class="visually-hidden">Favorites</span>
                    </button>
                    <a href="#" class="emp-iconlink" aria-label="Account">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                            <circle cx="12" cy="8" r="3.5" stroke="currentColor" stroke-width="1.8" />
                            <path d="M5 20c0-3.3 3.1-5.5 7-5.5s7 2.2 7 5.5" stroke="currentColor" stroke-width="1.8"
                                stroke-linecap="round" />
                        </svg>
                        <span class="visually-hidden">Account</span>
                    </a>
                    <button type="button" class="emp-cartpill" data-cart-open aria-label="Open cart">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                            <path d="M4 6h16l-1.4 8.1a2 2 0 0 1-2 1.7H7.4a2 2 0 0 1-2-1.7L4 6Z" stroke="currentColor"
                                stroke-width="1.8" stroke-linejoin="round" />
                            <circle cx="9" cy="20" r="1.4" fill="currentColor" />
                            <circle cx="17" cy="20" r="1.4" fill="currentColor" />
                        </svg>
                        <span class="emp-cartpill__label">Cart</span>
                        <span class="emp-cartpill__count" data-cart-count>0</span>
                    </button>
                    <button class="emp-burger" type="button" aria-expanded="false" aria-controls="mobileMenu"
                        aria-label="Open menu" data-menu-toggle>
                        <span></span><span></span><span></span>
                    </button>
                </div>
            </nav>
        </div>

        <!-- Categories row (desktop) -->
        <div class="emp-catbar">
            <div class="container">
                <ul class="emp-catbar__list" aria-label="Shop categories">
                    <li><a href="#products" class="is-current" data-nav-category="all" data-filter-link="all"><svg
                                width="16" height="16" viewBox="0 0 24 24" fill="none"
                                aria-hidden="true">
                                <path d="M4 6h16M4 12h16M4 18h16" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" />
                            </svg> All Categories</a></li>
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
            <input id="qm" type="search" class="emp-search__input" placeholder="Search products…"
                autocomplete="off">
            <button type="submit" class="emp-search__btn" aria-label="Search">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                    <circle cx="11" cy="11" r="7" stroke="currentColor" stroke-width="2" />
                    <path d="m20 20-3-3" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                </svg>
            </button>
        </form>
        <nav aria-label="Mobile categories">
            <ul class="emp-mobile__list">
                <li><a href="#products" data-nav-category="all" data-filter-link="all">All Categories</a></li>
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

        <!-- Hero -->
        <section class="hero" aria-label="Featured promotion">
            <div class="container">
                <div class="hero__grid">
                    <div class="hero__main">
                        <p class="hero__eyebrow reveal">Summer Sale · Up to 40% off</p>
                        <h1 class="hero__title reveal">Everything for the season, <em>in one cart.</em></h1>
                        <p class="hero__lead reveal">Electronics, home essentials, sports gear and more — thousands of
                            products at prices worth switching for. New markdowns added every week.</p>
                        <div class="hero__cta reveal">
                            <a href="#products" class="btn-emp btn-emp--primary">Shop the sale</a>
                        </div>
                        <ul class="hero__meta reveal">
                            <li><strong>2M+</strong> happy customers</li>
                            <li><strong>4.8/5</strong> average rating</li>
                            <li><strong>30-day</strong> free returns</li>
                        </ul>
                    </div>
                    <div class="hero__media">
                        <img src="{{ asset('images/hero.webp') }}" width="640" height="720"
                            alt="Liva Skincare Collection" fetchpriority="high" class="hero__img">
                        <div class="hero__badge" aria-hidden="true">
                            <span class="hero__badge-off">-40%</span>
                            <span class="hero__badge-txt">Season<br>Deals</span>
                        </div>
                    </div>
                </div>

                <!-- Secondary promo cards -->
                <div class="hero__promos">
                    <a href="#products" class="promo promo--a reveal" data-filter-link="beauty">
                        <img src="{{ asset('images/botanical.webp') }}" width="360" height="220" loading="lazy"
                            alt="Botanical skincare essentials">
                        <div class="promo__body">
                            <span class="promo__kicker">Botanical care</span>
                            <span class="promo__title">Daily Essentials from $19</span>
                            <span class="promo__link">Shop now →</span>
                        </div>
                    </a>
                    <a href="#products" class="promo promo--b reveal" data-filter-link="beauty">
                        <img src="{{ asset('images/campaign/everyday-poster.webp') }}" width="360" height="220"
                            loading="lazy" alt="Everyday skincare routine essentials">
                        <div class="promo__body">
                            <span class="promo__kicker">Self-care rituals</span>
                            <span class="promo__title">Skincare Bundles up to 30% off</span>
                            <span class="promo__link">Shop now →</span>
                        </div>
                    </a>
                </div>
            </div>
        </section>

        <!-- Shop by category -->
        <section class="section" id="categories" aria-labelledby="cat-h">
            <div class="container">
                <div class="section__head">
                    <div>
                        <p class="eyebrow">Browse the store</p>
                        <h2 class="section__title" id="cat-h">Shop by category</h2>
                    </div>
                    <a href="#products" class="section__link">View all products →</a>
                </div>
                <div class="cats">
                    <a href="#products" class="cat reveal" data-filter-link="hair">
                        <span class="cat__img"><img src="{{ asset('images/shampoo.webp') }}" width="200"
                                height="200" loading="lazy" alt="Hair Care"></span>
                        <span class="cat__name">Hair Care</span>
                        <span class="cat__count">12 items</span>
                    </a>
                    <a href="#products" class="cat reveal" data-filter-link="body">
                        <span class="cat__img"><img src="{{ asset('images/body-wash.webp') }}" width="200"
                                height="200" loading="lazy" alt="Body Care"></span>
                        <span class="cat__name">Body Care</span>
                        <span class="cat__count">18 items</span>
                    </a>
                    <a href="#products" class="cat reveal" data-filter-link="lotions">
                        <span class="cat__img"><img src="{{ asset('images/body-lotion.webp') }}" width="200"
                                height="200" loading="lazy" alt="Lotions & Creams"></span>
                        <span class="cat__name">Lotions &amp; Creams</span>
                        <span class="cat__count">14 items</span>
                    </a>
                    <a href="#products" class="cat reveal" data-filter-link="masks">
                        <span class="cat__img"><img src="{{ asset('images/hair-mask.webp') }}" width="200"
                                height="200" loading="lazy" alt="Hair Masks"></span>
                        <span class="cat__name">Hair Masks</span>
                        <span class="cat__count">8 items</span>
                    </a>
                    <a href="#products" class="cat reveal" data-filter-link="beauty">
                        <span class="cat__img"><img src="{{ asset('images/botanical.png') }}" width="200"
                                height="200" loading="lazy" alt="Botanical & Serum"></span>
                        <span class="cat__name">Botanicals</span>
                        <span class="cat__count">10 items</span>
                    </a>
                    <a href="#deals" class="cat cat--deal reveal">
                        <span class="cat__img"><img src="{{ asset('images/travel-set.webp') }}" width="200"
                                height="200" loading="lazy" alt="Gift & Travel Sets"></span>
                        <span class="cat__name">Deals &amp; Sets</span>
                        <span class="cat__count">Save up to 40%</span>
                    </a>
                </div>
            </div>
        </section>

        <!-- Deal of the day -->
        <section class="section deal" id="deals" aria-labelledby="deal-h">
            <div class="container">
                <div class="deal__card reveal">
                    <div class="deal__media">
                        <img src="{{ asset('images/ritual-duo.png') }}" width="520" height="440"
                            loading="lazy" alt="Liva Daily Ritual Hair &amp; Body Duo">
                        <span class="deal__flag">Deal of the day</span>
                    </div>
                    <div class="deal__body">
                        <p class="eyebrow eyebrow--light">Today only · while stocks last</p>
                        <h2 class="deal__title" id="deal-h">Daily Ritual Hair &amp; Body Duo</h2>
                        <div class="deal__rating" aria-label="Rated 4.9 out of 5">
                            <span class="stars" style="--rate:98%" aria-hidden="true"></span>
                            <span class="deal__reviews">4.9 (2,140 reviews)</span>
                        </div>
                        <p class="deal__desc">Botanical nutrient complex with organic seed oils and clean extracts.
                            Restores natural moisture balance, leaves hair silky and skin glowing.</p>
                        <div class="deal__price">
                            <span class="price-now">$59.00</span>
                            <span class="price-was">$99.00</span>
                            <span class="price-save">Save 40%</span>
                        </div>
                        <div class="deal__count" role="timer" aria-live="off"
                            aria-label="Time remaining on this deal">
                            <div class="cd" data-countdown>
                                <span class="cd__unit"><b data-cd="hours">00</b><small>Hrs</small></span>
                                <span class="cd__sep">:</span>
                                <span class="cd__unit"><b data-cd="minutes">00</b><small>Min</small></span>
                                <span class="cd__sep">:</span>
                                <span class="cd__unit"><b data-cd="seconds">00</b><small>Sec</small></span>
                            </div>
                        </div>
                        <div class="deal__stock">
                            <div class="deal__stockbar"><span style="width:38%"></span></div>
                            <p><strong>76 sold</strong> · only 24 left in stock</p>
                        </div>
                        <button class="btn-emp btn-emp--primary btn-emp--lg" type="button" data-add-to-cart
                            data-id="ritual-duo" data-name="Daily Ritual Hair &amp; Body Duo" data-price="59.00"
                            data-img="{{ asset('images/ritual-duo.png') }}">Add to cart · $59.00</button>
                    </div>
                </div>
            </div>
        </section>

        <!-- Featured products -->
        <section class="section" id="products" aria-labelledby="prod-h">
            <div class="container">
                <div class="section__head">
                    <div>
                        <p class="eyebrow">Handpicked this week</p>
                        <h2 class="section__title" id="prod-h">Featured products</h2>
                    </div>
                </div>

                <div class="filters" role="tablist" aria-label="Filter products by category">
                    <button class="filter is-active" data-filter="all" role="tab"
                        aria-selected="true">All</button>
                    <button class="filter" data-filter="hair" role="tab" aria-selected="false">Hair
                        Care</button>
                    <button class="filter" data-filter="body" role="tab" aria-selected="false">Body
                        Care</button>
                    <button class="filter" data-filter="lotions" role="tab"
                        aria-selected="false">Lotions</button>
                    <button class="filter" data-filter="masks" role="tab" aria-selected="false">Hair
                        Masks</button>
                    <button class="filter" data-filter="beauty" role="tab"
                        aria-selected="false">Botanicals</button>
                </div>

                <div class="pgrid" data-products>

                    <!-- 1 -->
                    <article class="pcard reveal" data-category="hair">
                        <div class="pcard__media">
                            <span class="badge-emp badge-emp--sale">Sale</span>
                            <button class="pcard__wish" type="button"
                                aria-label="Add Liva Hydrating Botanical Shampoo to wishlist" aria-pressed="false">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                    aria-hidden="true">
                                    <path
                                        d="M12 20s-7-4.35-9.2-8.3C1.1 8.4 2.6 5 6 5c2 0 3.2 1.2 4 2.3C10.8 6.2 12 5 14 5c3.4 0 4.9 3.4 3.2 6.7C19 15.65 12 20 12 20Z"
                                        stroke="currentColor" stroke-width="1.8" stroke-linejoin="round" />
                                </svg>
                            </button>
                            <a href="{{ route('product') }}" class="pcard__imglink"><img
                                    src="{{ asset('images/shampoo.webp') }}" width="300" height="300"
                                    loading="lazy" alt="Liva Hydrating Botanical Shampoo"></a>
                            <button class="pcard__quick" type="button" data-add-to-cart data-id="liva-shampoo"
                                data-name="Liva Hydrating Botanical Shampoo" data-price="24.00"
                                data-img="{{ asset('images/shampoo.webp') }}">Quick add</button>
                        </div>
                        <div class="pcard__body">
                            <span class="pcard__cat">Hair Care</span>
                            <h3 class="pcard__title"><a href="{{ route('product') }}">Liva Hydrating Botanical
                                    Shampoo</a></h3>
                            <div class="pcard__rate"><span class="stars" style="--rate:96%"
                                    aria-hidden="true"></span><span class="pcard__rnum">4.8</span></div>
                            <div class="pcard__price"><span class="price-now">$24.00</span><span
                                    class="price-was">$32.00</span></div>
                        </div>
                    </article>

                    <!-- 2 -->
                    <article class="pcard reveal" data-category="hair">
                        <div class="pcard__media">
                            <span class="badge-emp badge-emp--best">Bestseller</span>
                            <button class="pcard__wish" type="button"
                                aria-label="Add Liva Nourishing Botanical Conditioner to wishlist"
                                aria-pressed="false">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                    aria-hidden="true">
                                    <path
                                        d="M12 20s-7-4.35-9.2-8.3C1.1 8.4 2.6 5 6 5c2 0 3.2 1.2 4 2.3C10.8 6.2 12 5 14 5c3.4 0 4.9 3.4 3.2 6.7C19 15.65 12 20 12 20Z"
                                        stroke="currentColor" stroke-width="1.8" stroke-linejoin="round" />
                                </svg>
                            </button>
                            <a href="{{ route('product') }}" class="pcard__imglink"><img
                                    src="{{ asset('images/conditioner.png') }}" width="300" height="300"
                                    loading="lazy" alt="Liva Nourishing Botanical Conditioner"></a>
                            <button class="pcard__quick" type="button" data-add-to-cart data-id="liva-conditioner"
                                data-name="Liva Nourishing Botanical Conditioner" data-price="26.00"
                                data-img="{{ asset('images/conditioner.png') }}">Quick add</button>
                        </div>
                        <div class="pcard__body">
                            <span class="pcard__cat">Hair Care</span>
                            <h3 class="pcard__title"><a href="{{ route('product') }}">Liva Nourishing Botanical
                                    Conditioner</a></h3>
                            <div class="pcard__rate"><span class="stars" style="--rate:94%"
                                    aria-hidden="true"></span><span class="pcard__rnum">4.7</span></div>
                            <div class="pcard__price"><span class="price-now">$26.00</span><span
                                    class="price-was">$34.00</span></div>
                        </div>
                    </article>

                    <!-- 3 -->
                    <article class="pcard reveal" data-category="body">
                        <div class="pcard__media">
                            <button class="pcard__wish" type="button"
                                aria-label="Add Liva Gentle Purifying Body Wash to wishlist" aria-pressed="false">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                    aria-hidden="true">
                                    <path
                                        d="M12 20s-7-4.35-9.2-8.3C1.1 8.4 2.6 5 6 5c2 0 3.2 1.2 4 2.3C10.8 6.2 12 5 14 5c3.4 0 4.9 3.4 3.2 6.7C19 15.65 12 20 12 20Z"
                                        stroke="currentColor" stroke-width="1.8" stroke-linejoin="round" />
                                </svg>
                            </button>
                            <a href="{{ route('product') }}" class="pcard__imglink"><img
                                    src="{{ asset('images/body-wash.webp') }}" width="300" height="300"
                                    loading="lazy" alt="Liva Gentle Purifying Body Wash"></a>
                            <button class="pcard__quick" type="button" data-add-to-cart data-id="liva-bodywash"
                                data-name="Liva Gentle Purifying Body Wash" data-price="22.00"
                                data-img="{{ asset('images/body-wash.webp') }}">Quick add</button>
                        </div>
                        <div class="pcard__body">
                            <span class="pcard__cat">Body Care</span>
                            <h3 class="pcard__title"><a href="{{ route('product') }}">Liva Gentle Purifying Body
                                    Wash</a></h3>
                            <div class="pcard__rate"><span class="stars" style="--rate:94%"
                                    aria-hidden="true"></span><span class="pcard__rnum">4.7</span></div>
                            <div class="pcard__price"><span class="price-now">$22.00</span></div>
                        </div>
                    </article>

                    <!-- 4 -->
                    <article class="pcard reveal" data-category="lotions">
                        <div class="pcard__media">
                            <span class="badge-emp badge-emp--sale">Sale</span>
                            <button class="pcard__wish" type="button"
                                aria-label="Add Liva Deep Moisture Body Lotion to wishlist" aria-pressed="false">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                    aria-hidden="true">
                                    <path
                                        d="M12 20s-7-4.35-9.2-8.3C1.1 8.4 2.6 5 6 5c2 0 3.2 1.2 4 2.3C10.8 6.2 12 5 14 5c3.4 0 4.9 3.4 3.2 6.7C19 15.65 12 20 12 20Z"
                                        stroke="currentColor" stroke-width="1.8" stroke-linejoin="round" />
                                </svg>
                            </button>
                            <a href="{{ route('product') }}" class="pcard__imglink"><img
                                    src="{{ asset('images/body-lotion.webp') }}" width="300" height="300"
                                    loading="lazy" alt="Liva Deep Moisture Body Lotion"></a>
                            <button class="pcard__quick" type="button" data-add-to-cart data-id="liva-bodylotion"
                                data-name="Liva Deep Moisture Body Lotion" data-price="28.00"
                                data-img="{{ asset('images/body-lotion.webp') }}">Quick add</button>
                        </div>
                        <div class="pcard__body">
                            <span class="pcard__cat">Lotions</span>
                            <h3 class="pcard__title"><a href="{{ route('product') }}">Liva Deep Moisture Body
                                    Lotion</a></h3>
                            <div class="pcard__rate"><span class="stars" style="--rate:92%"
                                    aria-hidden="true"></span><span class="pcard__rnum">4.6</span></div>
                            <div class="pcard__price"><span class="price-now">$28.00</span><span
                                    class="price-was">$36.00</span></div>
                        </div>
                    </article>

                    <!-- 5 -->
                    <article class="pcard reveal" data-category="body">
                        <div class="pcard__media">
                            <span class="badge-emp badge-emp--sale">Sale</span>
                            <button class="pcard__wish" type="button"
                                aria-label="Add Liva Refreshing Citrus Shower Gel to wishlist" aria-pressed="false">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                    aria-hidden="true">
                                    <path
                                        d="M12 20s-7-4.35-9.2-8.3C1.1 8.4 2.6 5 6 5c2 0 3.2 1.2 4 2.3C10.8 6.2 12 5 14 5c3.4 0 4.9 3.4 3.2 6.7C19 15.65 12 20 12 20Z"
                                        stroke="currentColor" stroke-width="1.8" stroke-linejoin="round" />
                                </svg>
                            </button>
                            <a href="{{ route('product') }}" class="pcard__imglink"><img
                                    src="{{ asset('images/shower-gel.webp') }}" width="300" height="300"
                                    loading="lazy" alt="Liva Refreshing Citrus Shower Gel"></a>
                            <button class="pcard__quick" type="button" data-add-to-cart data-id="liva-showergel"
                                data-name="Liva Refreshing Citrus Shower Gel" data-price="20.00"
                                data-img="{{ asset('images/shower-gel.webp') }}">Quick add</button>
                        </div>
                        <div class="pcard__body">
                            <span class="pcard__cat">Body Care</span>
                            <h3 class="pcard__title"><a href="{{ route('product') }}">Liva Refreshing Citrus Shower
                                    Gel</a></h3>
                            <div class="pcard__rate"><span class="stars" style="--rate:90%"
                                    aria-hidden="true"></span><span class="pcard__rnum">4.5</span></div>
                            <div class="pcard__price"><span class="price-now">$20.00</span><span
                                    class="price-was">$28.00</span></div>
                        </div>
                    </article>

                    <!-- 6 -->
                    <article class="pcard reveal" data-category="masks">
                        <div class="pcard__media">
                            <span class="badge-emp badge-emp--new">New</span>
                            <button class="pcard__wish" type="button"
                                aria-label="Add Liva Intensive Repair Hair Mask to wishlist" aria-pressed="false">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                    aria-hidden="true">
                                    <path
                                        d="M12 20s-7-4.35-9.2-8.3C1.1 8.4 2.6 5 6 5c2 0 3.2 1.2 4 2.3C10.8 6.2 12 5 14 5c3.4 0 4.9 3.4 3.2 6.7C19 15.65 12 20 12 20Z"
                                        stroke="currentColor" stroke-width="1.8" stroke-linejoin="round" />
                                </svg>
                            </button>
                            <a href="{{ route('product') }}" class="pcard__imglink"><img
                                    src="{{ asset('images/hair-mask.webp') }}" width="300" height="300"
                                    loading="lazy" alt="Liva Intensive Repair Hair Mask"></a>
                            <button class="pcard__quick" type="button" data-add-to-cart data-id="liva-hairmask"
                                data-name="Liva Intensive Repair Hair Mask" data-price="34.00"
                                data-img="{{ asset('images/hair-mask.webp') }}">Quick add</button>
                        </div>
                        <div class="pcard__body">
                            <span class="pcard__cat">Hair Masks</span>
                            <h3 class="pcard__title"><a href="{{ route('product') }}">Liva Intensive Repair Hair
                                    Mask</a></h3>
                            <div class="pcard__rate"><span class="stars" style="--rate:98%"
                                    aria-hidden="true"></span><span class="pcard__rnum">4.9</span></div>
                            <div class="pcard__price"><span class="price-now">$34.00</span></div>
                        </div>
                    </article>

                    <!-- 7 -->
                    <article class="pcard reveal" data-category="beauty sets">
                        <div class="pcard__media">
                            <span class="badge-emp badge-emp--deal">Travel Set</span>
                            <button class="pcard__wish" type="button"
                                aria-label="Add Liva Botanical Discovery Travel Set to wishlist" aria-pressed="false">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                    aria-hidden="true">
                                    <path
                                        d="M12 20s-7-4.35-9.2-8.3C1.1 8.4 2.6 5 6 5c2 0 3.2 1.2 4 2.3C10.8 6.2 12 5 14 5c3.4 0 4.9 3.4 3.2 6.7C19 15.65 12 20 12 20Z"
                                        stroke="currentColor" stroke-width="1.8" stroke-linejoin="round" />
                                </svg>
                            </button>
                            <a href="{{ route('product') }}" class="pcard__imglink"><img
                                    src="{{ asset('images/travel-set.webp') }}" width="300" height="300"
                                    loading="lazy" alt="Liva Botanical Discovery Travel Set"></a>
                            <button class="pcard__quick" type="button" data-add-to-cart data-id="liva-travelset"
                                data-name="Liva Botanical Discovery Travel Set" data-price="38.00"
                                data-img="{{ asset('images/travel-set.webp') }}">Quick add</button>
                        </div>
                        <div class="pcard__body">
                            <span class="pcard__cat">Botanical Set</span>
                            <h3 class="pcard__title"><a href="{{ route('product') }}">Liva Botanical Discovery Travel
                                    Set</a></h3>
                            <div class="pcard__rate"><span class="stars" style="--rate:94%"
                                    aria-hidden="true"></span><span class="pcard__rnum">4.7</span></div>
                            <div class="pcard__price"><span class="price-now">$38.00</span></div>
                        </div>
                    </article>

                    <!-- 8 -->
                    <article class="pcard reveal" data-category="hair sets">
                        <div class="pcard__media">
                            <span class="badge-emp badge-emp--deal">Duo Set</span>
                            <button class="pcard__wish" type="button"
                                aria-label="Add Liva Restorative Hair & Body Duo to wishlist" aria-pressed="false">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                    aria-hidden="true">
                                    <path
                                        d="M12 20s-7-4.35-9.2-8.3C1.1 8.4 2.6 5 6 5c2 0 3.2 1.2 4 2.3C10.8 6.2 12 5 14 5c3.4 0 4.9 3.4 3.2 6.7C19 15.65 12 20 12 20Z"
                                        stroke="currentColor" stroke-width="1.8" stroke-linejoin="round" />
                                </svg>
                            </button>
                            <a href="{{ route('product') }}" class="pcard__imglink"><img
                                    src="{{ asset('images/ritual-duo.png') }}" width="300" height="300"
                                    loading="lazy" alt="Liva Restorative Hair &amp; Body Duo"></a>
                            <button class="pcard__quick" type="button" data-add-to-cart data-id="liva-ritualduo"
                                data-name="Liva Restorative Hair & Body Duo" data-price="48.00"
                                data-img="{{ asset('images/ritual-duo.png') }}">Quick add</button>
                        </div>
                        <div class="pcard__body">
                            <span class="pcard__cat">Hair &amp; Body Set</span>
                            <h3 class="pcard__title"><a href="{{ route('product') }}">Liva Restorative Hair &amp;
                                    Body Duo</a></h3>
                            <div class="pcard__rate"><span class="stars" style="--rate:96%"
                                    aria-hidden="true"></span><span class="pcard__rnum">4.8</span></div>
                            <div class="pcard__price"><span class="price-now">$48.00</span><span
                                    class="price-was">$65.00</span></div>
                        </div>
                    </article>

                    <!-- 9 -->
                    <article class="pcard reveal" data-category="beauty sets">
                        <div class="pcard__media">
                            <span class="badge-emp badge-emp--best">Set Box</span>
                            <button class="pcard__wish" type="button"
                                aria-label="Add The Daily Edit Skincare Box to wishlist" aria-pressed="false">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                    aria-hidden="true">
                                    <path
                                        d="M12 20s-7-4.35-9.2-8.3C1.1 8.4 2.6 5 6 5c2 0 3.2 1.2 4 2.3C10.8 6.2 12 5 14 5c3.4 0 4.9 3.4 3.2 6.7C19 15.65 12 20 12 20Z"
                                        stroke="currentColor" stroke-width="1.8" stroke-linejoin="round" />
                                </svg>
                            </button>
                            <a href="{{ route('product') }}" class="pcard__imglink"><img
                                    src="{{ asset('images/daily-edit.png') }}" width="300" height="300"
                                    loading="lazy" alt="The Daily Edit Skincare Box"></a>
                            <button class="pcard__quick" type="button" data-add-to-cart data-id="liva-dailyedit"
                                data-name="The Daily Edit Skincare Box" data-price="52.00"
                                data-img="{{ asset('images/daily-edit.png') }}">Quick add</button>
                        </div>
                        <div class="pcard__body">
                            <span class="pcard__cat">Skincare Set</span>
                            <h3 class="pcard__title"><a href="{{ route('product') }}">The Daily Edit Skincare Box</a>
                            </h3>
                            <div class="pcard__rate"><span class="stars" style="--rate:92%"
                                    aria-hidden="true"></span><span class="pcard__rnum">4.6</span></div>
                            <div class="pcard__price"><span class="price-now">$52.00</span></div>
                        </div>
                    </article>

                    <!-- 10 -->
                    <article class="pcard reveal" data-category="beauty">
                        <div class="pcard__media">
                            <span class="badge-emp badge-emp--best">Bestseller</span>
                            <button class="pcard__wish" type="button"
                                aria-label="Add Liva Pure Botanical Elixir to wishlist" aria-pressed="false">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                    aria-hidden="true">
                                    <path
                                        d="M12 20s-7-4.35-9.2-8.3C1.1 8.4 2.6 5 6 5c2 0 3.2 1.2 4 2.3C10.8 6.2 12 5 14 5c3.4 0 4.9 3.4 3.2 6.7C19 15.65 12 20 12 20Z"
                                        stroke="currentColor" stroke-width="1.8" stroke-linejoin="round" />
                                </svg>
                            </button>
                            <a href="{{ route('product') }}" class="pcard__imglink"><img
                                    src="{{ asset('images/botanical.webp') }}" width="300" height="300"
                                    loading="lazy" alt="Liva Pure Botanical Elixir"></a>
                            <button class="pcard__quick" type="button" data-add-to-cart data-id="liva-botanical"
                                data-name="Liva Pure Botanical Elixir" data-price="42.00"
                                data-img="{{ asset('images/botanical.webp') }}">Quick add</button>
                        </div>
                        <div class="pcard__body">
                            <span class="pcard__cat">Botanicals</span>
                            <h3 class="pcard__title"><a href="{{ route('product') }}">Liva Pure Botanical Elixir</a>
                            </h3>
                            <div class="pcard__rate"><span class="stars" style="--rate:96%"
                                    aria-hidden="true"></span><span class="pcard__rnum">4.8</span></div>
                            <div class="pcard__price"><span class="price-now">$42.00</span><span
                                    class="price-was">$58.00</span></div>
                        </div>
                    </article>

                    <!-- 11 (Set) -->
                    <article class="pcard reveal" data-category="beauty sets">
                        <div class="pcard__media">
                            <span class="badge-emp badge-emp--best">Set Bundle</span>
                            <button class="pcard__wish" type="button"
                                aria-label="Add Super C Smart Nutrient Beauty Set to wishlist" aria-pressed="false">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                    aria-hidden="true">
                                    <path
                                        d="M12 20s-7-4.35-9.2-8.3C1.1 8.4 2.6 5 6 5c2 0 3.2 1.2 4 2.3C10.8 6.2 12 5 14 5c3.4 0 4.9 3.4 3.2 6.7C19 15.65 12 20 12 20Z"
                                        stroke="currentColor" stroke-width="1.8" stroke-linejoin="round" />
                                </svg>
                            </button>
                            <a href="{{ route('product') }}" class="pcard__imglink"><img
                                    src="{{ asset('images/hair-mask.webp') }}" width="300" height="300"
                                    loading="lazy" alt="Super C Smart Nutrient Beauty Set"></a>
                            <a href="{{ route('product') }}" class="pcard__quick"
                                style="text-decoration:none;text-align:center;">Customize Set</a>
                        </div>
                        <div class="pcard__body">
                            <span class="pcard__cat">Skincare Set</span>
                            <h3 class="pcard__title"><a href="{{ route('product') }}">Super C Smart Nutrient Beauty
                                    Set</a></h3>
                            <div class="pcard__rate"><span class="stars" style="--rate:100%"
                                    aria-hidden="true"></span><span class="pcard__rnum">5.0</span></div>
                            <div class="pcard__price"><span class="price-now">$69.00 – $249.00</span></div>
                        </div>
                    </article>

                    <!-- 12 (Set) -->
                    <article class="pcard reveal" data-category="body sets">
                        <div class="pcard__media">
                            <span class="badge-emp badge-emp--deal">Duo Set</span>
                            <button class="pcard__wish" type="button"
                                aria-label="Add Daily Ritual Complete Skincare Duo to wishlist" aria-pressed="false">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                    aria-hidden="true">
                                    <path
                                        d="M12 20s-7-4.35-9.2-8.3C1.1 8.4 2.6 5 6 5c2 0 3.2 1.2 4 2.3C10.8 6.2 12 5 14 5c3.4 0 4.9 3.4 3.2 6.7C19 15.65 12 20 12 20Z"
                                        stroke="currentColor" stroke-width="1.8" stroke-linejoin="round" />
                                </svg>
                            </button>
                            <a href="{{ route('product') }}" class="pcard__imglink"><img
                                    src="{{ asset('images/daily-edit-detail.webp') }}" width="300" height="300"
                                    loading="lazy" alt="Daily Ritual Complete Skincare Duo"></a>
                            <button class="pcard__quick" type="button" data-add-to-cart data-id="liva-dailyduo-set"
                                data-name="Daily Ritual Complete Skincare Duo" data-price="59.00"
                                data-img="{{ asset('images/daily-edit-detail.webp') }}">Quick add</button>
                        </div>
                        <div class="pcard__body">
                            <span class="pcard__cat">Hair &amp; Body Set</span>
                            <h3 class="pcard__title"><a href="{{ route('product') }}">Daily Ritual Complete Skincare
                                    Duo</a></h3>
                            <div class="pcard__rate"><span class="stars" style="--rate:98%"
                                    aria-hidden="true"></span><span class="pcard__rnum">4.9</span></div>
                            <div class="pcard__price"><span class="price-now">$59.00</span><span
                                    class="price-was">$99.00</span></div>
                        </div>
                    </article>

                </div>
                <p class="pgrid__empty" data-empty hidden>No products in this category yet — check back soon.</p>
            </div>
        </section>

        <!-- Best sellers scroll row -->
        <section class="section section--tint" aria-labelledby="best-h">
            <div class="container">
                <div class="section__head">
                    <div>
                        <p class="eyebrow">Loved by shoppers</p>
                        <h2 class="section__title" id="best-h">This week's best sellers</h2>
                    </div>
                    <div class="scroller__nav" aria-hidden="true">
                        <button class="scroller__btn" type="button" data-scroll="prev"
                            aria-label="Scroll best sellers left">‹</button>
                        <button class="scroller__btn" type="button" data-scroll="next"
                            aria-label="Scroll best sellers right">›</button>
                    </div>
                </div>
                <div class="scroller" data-scroller tabindex="0" role="group"
                    aria-label="Best sellers, scrollable">
                    <article class="scard">
                        <a href="{{ route('product') }}" class="scard__img"><img
                                src="{{ asset('images/shampoo.webp') }}" width="240" height="240"
                                loading="lazy" alt="Liva Botanical Hydrating Shampoo"></a>
                        <div class="scard__body">
                            <h3 class="scard__title"><a href="{{ route('product') }}">Botanical Hydrating Shampoo</a>
                            </h3>
                            <div class="pcard__rate"><span class="stars" style="--rate:96%"
                                    aria-hidden="true"></span><span class="pcard__rnum">4.8</span></div>
                            <span class="price-now">$24.00</span>
                        </div>
                    </article>
                    <article class="scard">
                        <a href="{{ route('product') }}" class="scard__img"><img
                                src="{{ asset('images/conditioner.png') }}" width="240" height="240"
                                loading="lazy" alt="Liva Nourishing Botanical Conditioner"></a>
                        <div class="scard__body">
                            <h3 class="scard__title"><a href="{{ route('product') }}">Nourishing Conditioner</a></h3>
                            <div class="pcard__rate"><span class="stars" style="--rate:94%"
                                    aria-hidden="true"></span><span class="pcard__rnum">4.7</span></div>
                            <span class="price-now">$26.00</span>
                        </div>
                    </article>
                    <article class="scard">
                        <a href="{{ route('product') }}" class="scard__img"><img
                                src="{{ asset('images/body-lotion.webp') }}" width="240" height="240"
                                loading="lazy" alt="Liva Deep Moisture Body Lotion"></a>
                        <div class="scard__body">
                            <h3 class="scard__title"><a href="{{ route('product') }}">Deep Moisture Body Lotion</a>
                            </h3>
                            <div class="pcard__rate"><span class="stars" style="--rate:92%"
                                    aria-hidden="true"></span><span class="pcard__rnum">4.6</span></div>
                            <span class="price-now">$28.00</span>
                        </div>
                    </article>
                    <article class="scard">
                        <a href="{{ route('product') }}" class="scard__img"><img
                                src="{{ asset('images/shower-gel.webp') }}" width="240" height="240"
                                loading="lazy" alt="Liva Refreshing Citrus Shower Gel"></a>
                        <div class="scard__body">
                            <h3 class="scard__title"><a href="{{ route('product') }}">Refreshing Citrus Shower
                                    Gel</a></h3>
                            <div class="pcard__rate"><span class="stars" style="--rate:98%"
                                    aria-hidden="true"></span><span class="pcard__rnum">4.9</span></div>
                            <span class="price-now">$20.00</span>
                        </div>
                    </article>
                    <article class="scard">
                        <a href="{{ route('product') }}" class="scard__img"><img
                                src="{{ asset('images/hair-mask.webp') }}" width="240" height="240"
                                loading="lazy" alt="Liva Intensive Repair Hair Mask"></a>
                        <div class="scard__body">
                            <h3 class="scard__title"><a href="{{ route('product') }}">Intensive Repair Hair Mask</a>
                            </h3>
                            <div class="pcard__rate"><span class="stars" style="--rate:98%"
                                    aria-hidden="true"></span><span class="pcard__rnum">4.9</span></div>
                            <span class="price-now">$34.00</span>
                        </div>
                    </article>
                    <article class="scard">
                        <a href="{{ route('product') }}" class="scard__img"><img
                                src="{{ asset('images/travel-set.webp') }}" width="240" height="240"
                                loading="lazy" alt="Liva Botanical Discovery Travel Set"></a>
                        <div class="scard__body">
                            <h3 class="scard__title"><a href="{{ route('product') }}">Discovery Travel Set</a></h3>
                            <div class="pcard__rate"><span class="stars" style="--rate:94%"
                                    aria-hidden="true"></span><span class="pcard__rnum">4.7</span></div>
                            <span class="price-now">$38.00</span>
                        </div>
                    </article>
                </div>
            </div>
        </section>

        <!-- Brand trust bar -->
        <section class="trust" id="about" aria-label="About Liva Skincare">
            <div class="container">
                <ul class="trust__list">
                    <li class="trust__item reveal">
                        <span class="trust__icon" aria-hidden="true"><svg width="26" height="26"
                                viewBox="0 0 24 24" fill="none">
                                <path d="M2 7h11v9H2zM13 10h5l3 3v3h-8z" stroke="currentColor" stroke-width="1.8"
                                    stroke-linejoin="round" />
                                <circle cx="6" cy="18" r="1.8" stroke="currentColor"
                                    stroke-width="1.8" />
                                <circle cx="17" cy="18" r="1.8" stroke="currentColor"
                                    stroke-width="1.8" />
                            </svg></span>
                        <span class="trust__txt"><strong>Free shipping</strong>On all orders over $49</span>
                    </li>
                    <li class="trust__item reveal">
                        <span class="trust__icon" aria-hidden="true"><svg width="26" height="26"
                                viewBox="0 0 24 24" fill="none">
                                <path d="M12 3l7 3v5c0 4.4-3 7.8-7 9-4-1.2-7-4.6-7-9V6l7-3Z" stroke="currentColor"
                                    stroke-width="1.8" stroke-linejoin="round" />
                                <path d="m9 12 2 2 4-4" stroke="currentColor" stroke-width="1.8"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg></span>
                        <span class="trust__txt"><strong>Secure checkout</strong>256-bit SSL encryption</span>
                    </li>
                    <li class="trust__item reveal">
                        <span class="trust__icon" aria-hidden="true"><svg width="26" height="26"
                                viewBox="0 0 24 24" fill="none">
                                <path d="M20 12a8 8 0 1 1-2.3-5.6" stroke="currentColor" stroke-width="1.8"
                                    stroke-linecap="round" />
                                <path d="M20 4v4h-4" stroke="currentColor" stroke-width="1.8"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg></span>
                        <span class="trust__txt"><strong>Easy returns</strong>30-day money-back promise</span>
                    </li>
                    <li class="trust__item reveal">
                        <span class="trust__icon" aria-hidden="true"><svg width="26" height="26"
                                viewBox="0 0 24 24" fill="none">
                                <path
                                    d="M12 3a7 7 0 0 0-7 7v3a3 3 0 0 0 3 3h1v-6H7v-.5a5 5 0 0 1 10 0V13h-2v6h1a3 3 0 0 0 3-3v-3a7 7 0 0 0-7-7Z"
                                    stroke="currentColor" stroke-width="1.6" stroke-linejoin="round" />
                            </svg></span>
                        <span class="trust__txt"><strong>24/7 support</strong>Real people, any time zone</span>
                    </li>
                </ul>
            </div>
        </section>

        <!-- Testimonials -->
        <section class="section" aria-labelledby="rev-h">
            <div class="container">
                <div class="section__head section__head--center">
                    <div>
                        <p class="eyebrow">What customers say</p>
                        <h2 class="section__title" id="rev-h">Over 40,000 five-star reviews</h2>
                    </div>
                </div>
                <div class="tgrid">
                    <figure class="tcard reveal">
                        <div class="pcard__rate"><span class="stars" style="--rate:100%"
                                aria-hidden="true"></span></div>
                        <blockquote class="tcard__quote">“Ordered a lamp and a coffee maker on Sunday and both arrived
                            Tuesday. Everything was packed properly and the prices genuinely beat the big marketplaces.”
                        </blockquote>
                        <figcaption class="tcard__who">
                            <img src="{{ asset('images/person-1.jpg') }}" width="52" height="52"
                                loading="lazy" alt="Portrait of Danielle Osei">
                            <span><strong>Danielle Osei</strong>Verified buyer · Home &amp; Living</span>
                        </figcaption>
                    </figure>
                    <figure class="tcard reveal">
                        <div class="pcard__rate"><span class="stars" style="--rate:100%"
                                aria-hidden="true"></span></div>
                        <blockquote class="tcard__quote">“The Orbit earbuds were the deal of the day and I almost
                            missed the countdown. So glad I didn't — the noise cancelling is better than pairs twice the
                            price.”</blockquote>
                        <figcaption class="tcard__who">
                            <img src="{{ asset('images/person-2.jpg') }}" width="52" height="52"
                                loading="lazy" alt="Portrait of Marcus Feld">
                            <span><strong>Marcus Feld</strong>Verified buyer · Electronics</span>
                        </figcaption>
                    </figure>
                    <figure class="tcard reveal">
                        <div class="pcard__rate"><span class="stars" style="--rate:90%"
                                aria-hidden="true"></span></div>
                        <blockquote class="tcard__quote">“Returns were painless. A size didn't fit, I printed the
                            label from my account, and the refund was back on my card within three days. That's why I
                            keep coming back.”</blockquote>
                        <figcaption class="tcard__who">
                            <img src="{{ asset('images/person-3.jpg') }}" width="52" height="52"
                                loading="lazy" alt="Portrait of Priya Raman">
                            <span><strong>Priya Raman</strong>Verified buyer · Fashion</span>
                        </figcaption>
                    </figure>
                </div>
            </div>
        </section>

   
    </main>

    <!-- Footer -->
    <footer class="foot" id="contact">
        <div class="container">
            <div class="foot__top">
                <div class="foot__brandcol">
                    <a class="emp-brand emp-brand--foot" href="{{ route('home') }}"
                        aria-label="Liva Skincare home">
                        <span class="emp-brand__mark" aria-hidden="true">
                            <img src="{{ asset('images/logo.png') }}" width="38" height="38"
                                alt="Liva Logo" class="emp-brand__logo"
                                style="height:38px;width:auto;object-fit:contain;border-radius:0;box-shadow:none;">
                        </span>
                        <span class="emp-brand__name">Liva</span>
                    </a>
                    <p class="foot__blurb">Pure botanical formulations for mindful self-care — crafted with certified
                        organic extracts and skin-loving nutrients, delivered direct to your door.</p>
                    <ul class="foot__social" aria-label="Social media">
                        <li><a href="https://t.me/+85512345678" target="_blank" rel="noopener noreferrer" aria-label="Liva on Telegram"><svg width="18" height="18"
                                    viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                                    <path
                                        d="M11.944 0A12 12 0 0 0 0 12a12 12 0 0 0 12 12 12 12 0 0 0 12-12A12 12 0 0 0 12 0a12 12 0 0 0-.056 0zm4.962 7.224c.1-.002.321.023.465.14a.506.506 0 0 1 .171.325c.016.093.036.306.02.472-.18 1.898-.962 6.502-1.36 8.627-.168.9-.499 1.201-.82 1.23-.696.065-1.225-.46-1.9-.902-1.056-.693-1.653-1.124-2.678-1.8-1.185-.78-.417-1.21.258-1.91.177-.184 3.247-2.977 3.307-3.23.007-.032.014-.15-.056-.212s-.174-.041-.249-.024c-.106.024-1.793 1.14-5.061 3.345-.48.33-.913.49-1.302.48-.428-.008-1.252-.241-1.865-.44-.752-.245-1.349-.374-1.297-.789.027-.216.325-.437.893-.663 3.498-1.524 5.83-2.529 6.998-3.014 3.332-1.386 4.025-1.627 4.476-1.635z" />
                                </svg></a></li>
                        <li><a href="https://facebook.com" target="_blank" rel="noopener noreferrer" aria-label="Liva on Facebook"><svg width="18"
                                    height="18" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                                    <path
                                        d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                                </svg></a></li>
                        <li><a href="#" aria-label="Emporium on Instagram"><svg width="18"
                                    height="18" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                                    <rect x="3" y="3" width="18" height="18" rx="5"
                                        stroke="currentColor" stroke-width="1.8" />
                                    <circle cx="12" cy="12" r="4" stroke="currentColor"
                                        stroke-width="1.8" />
                                    <circle cx="17.5" cy="6.5" r="1.2" fill="currentColor" />
                                </svg></a></li>
                        <li><a href="#" aria-label="Emporium on YouTube"><svg width="18"
                                    height="18" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                                    <rect x="3" y="6" width="18" height="12" rx="3"
                                        stroke="currentColor" stroke-width="1.8" />
                                    <path d="M11 9.5v5l4-2.5-4-2.5Z" fill="currentColor" />
                                </svg></a></li>
                    </ul>
                </div>
                <div class="foot__links">
                    <div class="foot__col">
                        <h3>Shop</h3>
                        <ul>
                            <li><a href="#products" data-filter-link="all">All Products</a></li>
                            <li><a href="#products" data-filter-link="hair">Hair Care</a></li>
                            <li><a href="#products" data-filter-link="body">Body Care</a></li>
                            <li><a href="#products" data-filter-link="beauty">Botanicals</a></li>
                            <li><a href="#deals">Today's deals</a></li>
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
                            <img src="{{ asset('images/payments/khqr.png') }}" alt="Scan to Pay via KHQR"
                                class="bank-qr-img">
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
                    <li>KHQR</li>
                    <li>ABA</li>
                    <li>ACLEDA</li>
                    <li>Wing</li>
                    <li>Visa</li>
                    <li>Mastercard</li>
                </ul>
            </div>
        </div>
    </footer>

    <!-- Cart drawer -->
    <div class="cart-overlay" data-cart-overlay hidden></div>
    <aside class="cart" id="cartDrawer" aria-label="Shopping cart" aria-modal="true" role="dialog"
        aria-hidden="true" tabindex="-1">
        <div class="cart__head">
            <h2 class="cart__title">Your cart <span data-cart-count-text>(0)</span></h2>
            <button type="button" class="cart__close" data-cart-close aria-label="Close cart">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                    <path d="m6 6 12 12M18 6 6 18" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" />
                </svg>
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
