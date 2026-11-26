@php
  $isHome = $isHome ?? false;
@endphp

<!-- Footer (no logo image) -->
<footer class="foot" id="contact">
  <div class="container">
    <div class="foot__top">
      <div class="foot__brandcol">
        <a class="emp-brand emp-brand--foot" href="{{ route('home') }}" aria-label="{{ __('nav.home_aria') }}">
          <span class="emp-brand__name">Liva Skincare</span>
        </a>
        <p class="foot__blurb">{{ __('foot.blurb') }}</p>
        <ul class="foot__social" aria-label="Social media">
          <li><a href="https://t.me/+85512345678" target="_blank" rel="noopener noreferrer" aria-label="Liva on Telegram"><svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M11.944 0A12 12 0 0 0 0 12a12 12 0 0 0 12 12 12 12 0 0 0 12-12A12 12 0 0 0 12 0a12 12 0 0 0-.056 0zm4.962 7.224c.1-.002.321.023.465.14a.506.506 0 0 1 .171.325c.016.093.036.306.02.472-.18 1.898-.962 6.502-1.36 8.627-.168.9-.499 1.201-.82 1.23-.696.065-1.225-.46-1.9-.902-1.056-.693-1.653-1.124-2.678-1.8-1.185-.78-.417-1.21.258-1.91.177-.184 3.247-2.977 3.307-3.23.007-.032.014-.15-.056-.212s-.174-.041-.249-.024c-.106.024-1.793 1.14-5.061 3.345-.48.33-.913.49-1.302.48-.428-.008-1.252-.241-1.865-.44-.752-.245-1.349-.374-1.297-.789.027-.216.325-.437.893-.663 3.498-1.524 5.83-2.529 6.998-3.014 3.332-1.386 4.025-1.627 4.476-1.635z"/></svg></a></li>
          <li><a href="https://facebook.com" target="_blank" rel="noopener noreferrer" aria-label="Liva on Facebook"><svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg></a></li>
          <li><a href="https://instagram.com" target="_blank" rel="noopener noreferrer" aria-label="Liva on Instagram"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" aria-hidden="true"><rect x="3" y="3" width="18" height="18" rx="5" stroke="currentColor" stroke-width="1.8"/><circle cx="12" cy="12" r="4" stroke="currentColor" stroke-width="1.8"/><circle cx="17.5" cy="6.5" r="1.2" fill="currentColor"/></svg></a></li>
          <li><a href="#" aria-label="Liva on YouTube"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" aria-hidden="true"><rect x="3" y="6" width="18" height="12" rx="3" stroke="currentColor" stroke-width="1.8"/><path d="M11 9.5v5l4-2.5-4-2.5Z" fill="currentColor"/></svg></a></li>
        </ul>
      </div>
      <div class="foot__links">
        <div class="foot__col">
          <h3>{{ __('foot.shop') }}</h3>
          <ul>
            <li><a href="{{ $isHome ? '#products' : route('home') . '#products' }}" @if($isHome) data-filter-link="all" @endif>{{ __('foot.all_products') }}</a></li>
            <li><a href="{{ $isHome ? '#products' : route('home') . '?category=hair#products' }}" @if($isHome) data-filter-link="hair" @endif>{{ __('cat.hair') }}</a></li>
            <li><a href="{{ $isHome ? '#products' : route('home') . '?category=body#products' }}" @if($isHome) data-filter-link="body" @endif>{{ __('cat.body') }}</a></li>
            <li><a href="{{ $isHome ? '#products' : route('home') . '?category=beauty#products' }}" @if($isHome) data-filter-link="beauty" @endif>{{ __('cat.botanicals') }}</a></li>
            <li><a href="{{ $isHome ? '#deals' : route('home') . '#deals' }}">{{ __('foot.todays_deals') }}</a></li>
          </ul>
        </div>
        <div class="foot__col">
          <h3>{{ __('foot.help') }}</h3>
          <ul>
            <li><a href="#">{{ __('foot.track_order') }}</a></li>
            <li><a href="#">{{ __('foot.shipping') }}</a></li>
            <li><a href="#">{{ __('foot.returns') }}</a></li>
            <li><a href="#">{{ __('foot.guides') }}</a></li>
            <li><a href="{{ route('contact') }}">{{ __('foot.support') }}</a></li>
          </ul>
        </div>
        <div class="foot__col">
          <h3>{{ __('foot.company') }}</h3>
          <ul>
            <li><a href="{{ route('about') }}">{{ __('foot.about') }}</a></li>
            <li><a href="#">{{ __('foot.careers') }}</a></li>
            <li><a href="#">{{ __('foot.sustainability') }}</a></li>
            <li><a href="#">{{ __('foot.wholesale') }}</a></li>
            <li><a href="#">{{ __('foot.press') }}</a></li>
          </ul>
        </div>
        <div class="foot__col foot__col--bank">
          <h3>{{ __('foot.bank') }}</h3>
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
            <img src="{{ asset('images/payments/khqr.png') }}" alt="{{ __('foot.scan_to_pay') }}" class="bank-qr-img">
            <div class="bank-qr-info">
              <span class="bank-qr-title">{{ __('foot.scan_to_pay') }}</span>
              <span class="bank-qr-sub">{{ __('foot.any_app') }}</span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="foot__bottom">
      <p>{{ __('foot.rights') }}</p>
      <ul class="foot__pay" aria-label="Accepted payment methods">
        <li>KHQR</li><li>ABA</li><li>ACLEDA</li><li>Wing</li><li>Visa</li><li>Mastercard</li>
      </ul>
    </div>
  </div>
</footer>
