<!-- Cart drawer -->
<div class="cart-overlay" data-cart-overlay hidden></div>
<aside class="cart" id="cartDrawer" aria-label="{{ __('cart.title') }}" aria-modal="true" role="dialog" aria-hidden="true" tabindex="-1">
  <div class="cart__head">
    <h2 class="cart__title">{{ __('cart.title') }} <span data-cart-count-text>(0)</span></h2>
    <button type="button" class="cart__close" data-cart-close aria-label="Close cart">
      <svg width="22" height="22" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="m6 6 12 12M18 6 6 18" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>
    </button>
  </div>
  <div class="cart__ship" data-ship-wrap>
    <p class="cart__shipmsg" data-ship-msg>{!! __('cart.ship_more', ['amount' => '<strong>$49.00</strong>']) !!}</p>
    <div class="cart__shipbar"><span data-ship-bar style="width:0%"></span></div>
  </div>
  <ul class="cart__items" data-cart-items></ul>
  <div class="cart__empty" data-cart-empty>
    <p>{{ __('cart.empty') }}</p>
    <button type="button" class="btn-emp btn-emp--ghost" data-cart-close>{{ __('cart.start_shopping') }}</button>
  </div>
  <div class="cart__foot" data-cart-foot hidden>
    <div class="cart__subtotal">
      <span>{{ __('cart.subtotal') }}</span>
      <strong data-cart-subtotal>$0.00</strong>
    </div>
    <p class="cart__note">{{ __('cart.note') }}</p>
    <a href="{{ route('checkout') }}" class="btn-emp btn-emp--primary btn-emp--block">{{ __('cart.checkout') }}</a>
    <button type="button" class="cart__continue" data-cart-close>{{ __('cart.continue') }}</button>
  </div>
</aside>

<!-- Wishlist drawer -->
<div class="wishlist-overlay" data-wishlist-overlay hidden></div>
<aside class="wishlist-drawer" id="wishlistDrawer" aria-label="{{ __('wish.title') }}" aria-modal="true" role="dialog" aria-hidden="true" tabindex="-1">
  <div class="wishlist__head">
    <h2 class="wishlist__title">
      <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor" style="color:#e53935;" aria-hidden="true"><path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/></svg>
      {{ __('wish.title') }} <span data-wishlist-count-text>(0)</span>
    </h2>
    <button type="button" class="wishlist__close" data-wishlist-close aria-label="Close favorites">
      <svg width="22" height="22" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="m6 6 12 12M18 6 6 18" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>
    </button>
  </div>
  <ul class="wishlist__items" data-wishlist-items></ul>
  <div class="wishlist__empty" data-wishlist-empty>
    <div class="wishlist__empty-icon">♡</div>
    <p>{{ __('wish.empty') }}</p>
    <button type="button" class="btn-emp btn-emp--ghost" data-wishlist-close>{{ __('wish.explore') }}</button>
  </div>
  <div class="wishlist__foot" data-wishlist-foot hidden>
    <button type="button" class="btn-emp btn-emp--primary btn-emp--block" data-wishlist-add-all>{{ __('wish.move_all') }}</button>
    <button type="button" class="wishlist__clear" data-wishlist-clear>{{ __('wish.clear') }}</button>
  </div>
</aside>

<!-- Toasts -->
<div class="toasts" data-toasts aria-live="polite" aria-atomic="false"></div>

@php
  $livaI18n = [
    'addedToCart' => __('js.added_to_cart'),
    'removedFav' => __('js.removed_fav'),
    'addedFav' => __('js.added_fav'),
    'clearedFav' => __('js.cleared_fav'),
    'movedToCart' => __('js.moved_to_cart'),
    'addedAllFav' => __('js.added_all_fav'),
    'addedCompare' => __('js.added_compare'),
    'linkCopied' => __('js.link_copied'),
    'instagramCopied' => __('js.instagram_copied'),
    'shareReady' => __('js.share_ready'),
    'invalidEmail' => __('js.invalid_email'),
    'newsletterOk' => __('js.newsletter_ok'),
    'shipMore' => __('cart.ship_more'),
    'shipFree' => __('cart.ship_free'),
    'each' => __('cart.each'),
    'remove' => __('cart.remove'),
    'wishAddToCart' => __('wish.add_to_cart'),
    'addToWishlist' => __('wish.add_to_wishlist'),
    'inWishlist' => __('wish.in_wishlist'),
    'addToCart' => __('pdp.add_to_cart'),
  ];
@endphp
<script>window.LIVA_I18N = @json($livaI18n);</script>
<script src="{{ asset('js/vendor/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('js/main.js') }}?v={{ filemtime(public_path('js/main.js')) }}"></script>
