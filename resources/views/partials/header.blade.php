@php
  $currentLocale = app()->getLocale();
  $activeNav = $activeNav ?? '';
  $isHome = $isHome ?? false;
@endphp

<a class="skip-link" href="#main">{{ __('nav.skip') }}</a>

<!-- Header / Navbar -->
<header class="site-header" id="site-header">
  <div class="container">
    <nav class="navbar navbar-expand-lg emp-nav" aria-label="Main navigation">
      <a class="navbar-brand emp-brand" href="{{ route('home') }}" aria-label="{{ __('nav.home_aria') }}">
        <span class="emp-brand__mark">
          <img src="{{ asset('images/logo.webp') }}" width="70" height="46" alt="Liva Skincare" class="emp-brand__logo">
        </span>
        <span class="visually-hidden">Liva</span>
      </a>

      <!-- Search (desktop) -->
      <form class="emp-search" role="search" aria-label="{{ __('nav.search_aria') }}" @unless($isHome) action="{{ route('home') }}" @endunless>
        <label for="q" class="visually-hidden">{{ __('nav.search_aria') }}</label>
        <input id="q" type="search" class="emp-search__input" placeholder="{{ __('nav.search_placeholder') }}" autocomplete="off">
        <button type="submit" class="emp-search__btn" aria-label="{{ __('nav.search_btn') }}">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" aria-hidden="true"><circle cx="11" cy="11" r="7" stroke="currentColor" stroke-width="2"/><path d="m20 20-3-3" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>
        </button>
      </form>

      <div class="emp-nav__actions">
        <!-- Language Switcher (EN / KM) -->
        <div class="emp-lang" role="group" aria-label="{{ __('nav.language') }}">
          <a href="{{ route('lang.switch', ['locale' => 'en']) }}" class="emp-lang__btn {{ $currentLocale === 'en' ? 'is-active' : '' }}" hreflang="en" lang="en" aria-current="{{ $currentLocale === 'en' ? 'true' : 'false' }}">EN</a>
          <a href="{{ route('lang.switch', ['locale' => 'km']) }}" class="emp-lang__btn {{ $currentLocale === 'km' ? 'is-active' : '' }}" hreflang="km" lang="km" aria-current="{{ $currentLocale === 'km' ? 'true' : 'false' }}">ខ្មែរ</a>
        </div>

        <a href="https://t.me/+85512345678" target="_blank" rel="noopener noreferrer" class="emp-iconlink emp-iconlink--telegram emp-nav__hide-sm" aria-label="Telegram" title="Telegram">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
            <path d="M11.944 0A12 12 0 0 0 0 12a12 12 0 0 0 12 12 12 12 0 0 0 12-12A12 12 0 0 0 12 0a12 12 0 0 0-.056 0zm4.962 7.224c.1-.002.321.023.465.14a.506.506 0 0 1 .171.325c.016.093.036.306.02.472-.18 1.898-.962 6.502-1.36 8.627-.168.9-.499 1.201-.82 1.23-.696.065-1.225-.46-1.9-.902-1.056-.693-1.653-1.124-2.678-1.8-1.185-.78-.417-1.21.258-1.91.177-.184 3.247-2.977 3.307-3.23.007-.032.014-.15-.056-.212s-.174-.041-.249-.024c-.106.024-1.793 1.14-5.061 3.345-.48.33-.913.49-1.302.48-.428-.008-1.252-.241-1.865-.44-.752-.245-1.349-.374-1.297-.789.027-.216.325-.437.893-.663 3.498-1.524 5.83-2.529 6.998-3.014 3.332-1.386 4.025-1.627 4.476-1.635z"/>
          </svg>
          <span class="visually-hidden">Telegram</span>
        </a>
        <a href="https://facebook.com" target="_blank" rel="noopener noreferrer" class="emp-iconlink emp-iconlink--facebook emp-nav__hide-sm" aria-label="Facebook" title="Facebook">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
            <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
          </svg>
          <span class="visually-hidden">Facebook</span>
        </a>
        <button type="button" class="emp-wishbtn" data-wishlist-open aria-label="{{ __('nav.view_favorites') }}">
          <svg width="22" height="22" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M12 20s-7-4.35-9.2-8.3C1.1 8.4 2.6 5 6 5c2 0 3.2 1.2 4 2.3C10.8 6.2 12 5 14 5c3.4 0 4.9 3.4 3.2 6.7C19 15.65 12 20 12 20Z" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round"/></svg>
          <span class="emp-wishbtn__count" data-wishlist-count style="display:none;">0</span>
          <span class="visually-hidden">{{ __('nav.favorites') }}</span>
        </button>
        <a href="#" class="emp-iconlink emp-nav__hide-sm" aria-label="{{ __('nav.account') }}">
          <svg width="22" height="22" viewBox="0 0 24 24" fill="none" aria-hidden="true"><circle cx="12" cy="8" r="3.5" stroke="currentColor" stroke-width="1.8"/><path d="M5 20c0-3.3 3.1-5.5 7-5.5s7 2.2 7 5.5" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/></svg>
          <span class="visually-hidden">{{ __('nav.account') }}</span>
        </a>
        <button type="button" class="emp-cartpill" data-cart-open aria-label="{{ __('nav.open_cart') }}">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M4 6h16l-1.4 8.1a2 2 0 0 1-2 1.7H7.4a2 2 0 0 1-2-1.7L4 6Z" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round"/><circle cx="9" cy="20" r="1.4" fill="currentColor"/><circle cx="17" cy="20" r="1.4" fill="currentColor"/></svg>
          <span class="emp-cartpill__label">{{ __('nav.cart') }}</span>
          <span class="emp-cartpill__count" data-cart-count>0</span>
        </button>
        <button class="emp-burger" type="button" aria-expanded="false" aria-controls="mobileMenu" aria-label="{{ __('nav.open_menu') }}" data-menu-toggle>
          <span></span><span></span><span></span>
        </button>
      </div>
    </nav>
  </div>

  <!-- Categories row (desktop) -->
  <div class="emp-catbar">
    <div class="container">
      <ul class="emp-catbar__list" aria-label="Main navigation">
        <li>
          <a href="{{ $isHome ? '#products' : route('home') . '#products' }}"
             class="{{ $activeNav === 'home' ? 'is-current' : '' }}"
             @if($isHome) data-nav-category="all" data-filter-link="all" @endif>
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M4 6h16M4 12h16M4 18h16" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>
            {{ __('nav.all_categories') }}
          </a>
        </li>
        <li><a href="{{ route('about') }}" class="{{ $activeNav === 'about' ? 'is-current' : '' }}">{{ __('nav.about_us') }}</a></li>
        <li><a href="{{ route('contact') }}" class="{{ $activeNav === 'contact' ? 'is-current' : '' }}">{{ __('nav.contact') }}</a></li>
      </ul>
    </div>
  </div>
</header>

<!-- Mobile menu -->
<div class="emp-mobile" id="mobileMenu" hidden>
  <form class="emp-search emp-search--mobile" role="search" aria-label="{{ __('nav.search_aria') }}" @unless($isHome) action="{{ route('home') }}" @endunless>
    <label for="qm" class="visually-hidden">{{ __('nav.search_aria') }}</label>
    <input id="qm" type="search" class="emp-search__input" placeholder="{{ __('nav.search_mobile_placeholder') }}" autocomplete="off">
    <button type="submit" class="emp-search__btn" aria-label="{{ __('nav.search_btn') }}">
      <svg width="18" height="18" viewBox="0 0 24 24" fill="none" aria-hidden="true"><circle cx="11" cy="11" r="7" stroke="currentColor" stroke-width="2"/><path d="m20 20-3-3" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>
    </button>
  </form>
  <nav aria-label="Mobile categories">
    <ul class="emp-mobile__list">
      <li><a href="{{ $isHome ? '#products' : route('home') . '#products' }}" @if($isHome) data-nav-category="all" data-filter-link="all" @endif>{{ __('nav.all_categories') }}</a></li>
      <li><a href="{{ route('about') }}">{{ __('nav.about_us') }}</a></li>
      <li><a href="{{ route('contact') }}">{{ __('nav.contact') }}</a></li>
    </ul>
  </nav>
  <div class="emp-mobile__foot">
    <div class="emp-mobile__btns">
      <a href="#" class="btn-line">{{ __('nav.my_account') }}</a>
      <a href="#" class="btn-line" data-wishlist-open>{{ __('nav.favorites') }} (<span data-wishlist-count>0</span>)</a>
    </div>
    <div class="emp-mobile__extras">
      <div class="emp-mobile__social">
        <a href="https://t.me/+85512345678" target="_blank" rel="noopener noreferrer" class="emp-iconlink emp-iconlink--telegram" aria-label="Telegram" title="Telegram">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M11.944 0A12 12 0 0 0 0 12a12 12 0 0 0 12 12 12 12 0 0 0 12-12A12 12 0 0 0 12 0a12 12 0 0 0-.056 0zm4.962 7.224c.1-.002.321.023.465.14a.506.506 0 0 1 .171.325c.016.093.036.306.02.472-.18 1.898-.962 6.502-1.36 8.627-.168.9-.499 1.201-.82 1.23-.696.065-1.225-.46-1.9-.902-1.056-.693-1.653-1.124-2.678-1.8-1.185-.78-.417-1.21.258-1.91.177-.184 3.247-2.977 3.307-3.23.007-.032.014-.15-.056-.212s-.174-.041-.249-.024c-.106.024-1.793 1.14-5.061 3.345-.48.33-.913.49-1.302.48-.428-.008-1.252-.241-1.865-.44-.752-.245-1.349-.374-1.297-.789.027-.216.325-.437.893-.663 3.498-1.524 5.83-2.529 6.998-3.014 3.332-1.386 4.025-1.627 4.476-1.635z"/></svg>
        </a>
        <a href="https://facebook.com" target="_blank" rel="noopener noreferrer" class="emp-iconlink emp-iconlink--facebook" aria-label="Facebook" title="Facebook">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
        </a>
      </div>
      <div class="emp-lang emp-lang--mobile" role="group" aria-label="{{ __('nav.language') }}">
        <a href="{{ route('lang.switch', ['locale' => 'en']) }}" class="emp-lang__btn {{ $currentLocale === 'en' ? 'is-active' : '' }}" hreflang="en" lang="en">English</a>
        <a href="{{ route('lang.switch', ['locale' => 'km']) }}" class="emp-lang__btn {{ $currentLocale === 'km' ? 'is-active' : '' }}" hreflang="km" lang="km">ខ្មែរ</a>
      </div>
    </div>
  </div>
</div>
