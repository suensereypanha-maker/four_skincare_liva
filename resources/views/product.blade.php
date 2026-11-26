<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    @include('partials.head', [
        'pageTitle' => __('pdp.page_title'),
        'metaDescription' => __('pdp.meta_desc'),
    ])
</head>

<body>
    @include('partials.header', ['activeNav' => 'product', 'isHome' => false])

    <main id="main">
      <div class="container">

        <!-- Breadcrumb -->
        <nav class="crumb" aria-label="Breadcrumb">
          <ol>
            <li><a href="{{ route('home') }}">{{ __('pdp.home') }}</a></li>
            <li><a href="{{ route('home') }}#products">{{ __('pdp.breadcrumb_cat') }}</a></li>
            <li aria-current="page">{{ __('pdp.title') }}</li>
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
                  <img src="{{ asset('images/hair-mask.webp') }}" width="640" height="640" alt="{{ __('pdp.title') }}" data-main-image fetchpriority="high">
                </button>
              </div>
            </div>
          </div>

          <!-- Info -->
          <div class="pdp__info">
            <span class="badge-discount">-20%</span>
            <p class="pdp__brand-line">{{ __('pdp.brand_label') }} <span class="pdp__brand-name">{{ __('pdp.brand_name') }}</span></p>
            <h1 class="pdp__title" id="pdp-title">{{ __('pdp.title') }}</h1>

            <div class="pdp__price-rating">
              <span class="pdp__range-price">$69 – $249</span>
              <div class="pdp__stars-wrap">
                <span class="stars-gold">★★★★★</span>
                <span class="pdp__review-count">{{ __('pdp.review_count') }}</span>
              </div>
            </div>

            <ul class="pdp__feature-bullets">
              <li>{{ __('pdp.bullet1') }}</li>
              <li>{{ __('pdp.bullet2') }}</li>
              <li>{{ __('pdp.bullet3') }}</li>
            </ul>

            <!-- Set Product Box -->
            <div class="set-bundle-card">
              <!-- Item 1 -->
              <div class="set-bundle-item" data-bundle-item data-id="magic-skin-duo" data-name="{{ __('pdp.item1') }}" data-price="69.00" data-img="{{ asset('images/daily-edit.png') }}">
                <div class="set-bundle-item__left">
                  <img src="{{ asset('images/daily-edit.png') }}" class="set-bundle-item__thumb" alt="{{ __('pdp.item1') }}">
                  <div class="set-bundle-item__info">
                    <div class="set-bundle-item__name">{{ __('pdp.item1') }}</div>
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
              <div class="set-bundle-item" data-bundle-item data-id="ren-hyaluronic-acid" data-name="{{ __('pdp.item2') }}" data-price="249.00" data-img="{{ asset('images/product-serum.jpg') }}">
                <div class="set-bundle-item__left">
                  <img src="{{ asset('images/product-serum.jpg') }}" class="set-bundle-item__thumb" alt="{{ __('pdp.item2') }}">
                  <div class="set-bundle-item__info">
                    <div class="set-bundle-item__name">{{ __('pdp.item2') }}</div>
                    <div class="set-bundle-item__pricing">
                      <span class="set-bundle-item__was">$300</span>
                      <span class="set-bundle-item__price">$249</span>
                      <span class="set-bundle-item__stock">{{ __('pdp.in_stock') }}</span>
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
              <div class="set-bundle-item" data-bundle-item data-id="mz-skin-oil" data-name="{{ __('pdp.item3') }}" data-price="199.00" data-img="{{ asset('images/botanical.webp') }}">
                <div class="set-bundle-item__left">
                  <img src="{{ asset('images/botanical.webp') }}" class="set-bundle-item__thumb" alt="{{ __('pdp.item3') }}">
                  <div class="set-bundle-item__info">
                    <div class="set-bundle-item__name">{{ __('pdp.item3') }}</div>
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
              <button type="button" class="btn-set-cart" id="setAddToCartBtn" aria-label="{{ __('pdp.add_to_cart') }}">
                {{ __('pdp.add_to_cart') }}
              </button>
            </div>

            <!-- Sub actions -->
            <div class="pdp__sub-actions">
              <button type="button" class="sub-action-link" data-set-wishlist data-wish-btn data-id="set-super-c" data-name="{{ __('pdp.title') }}" data-price="69.00" data-img="{{ asset('images/hair-mask.webp') }}" aria-label="{{ __('wish.add_to_wishlist') }}" aria-pressed="false">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M12 20s-7-4.35-9.2-8.3C1.1 8.4 2.6 5 6 5c2 0 3.2 1.2 4 2.3C10.8 6.2 12 5 14 5c3.4 0 4.9 3.4 3.2 6.7C19 15.65 12 20 12 20Z"/></svg>
                <span>{{ __('wish.add_to_wishlist') }}</span>
              </button>
              <button type="button" class="sub-action-link" data-set-compare aria-label="{{ __('pdp.compare') }}">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M16 3h5v5M4 20L21 3M21 16v5h-5M15 15l6 6M4 4l5 5"/></svg>
                <span>{{ __('pdp.compare') }}</span>
              </button>
              <button type="button" class="sub-action-link" data-set-share aria-label="{{ __('pdp.share') }}">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><circle cx="18" cy="5" r="3"/><circle cx="6" cy="12" r="3"/><circle cx="18" cy="19" r="3"/><line x1="8.59" y1="13.51" x2="15.42" y2="17.49"/><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"/></svg>
                <span>{{ __('pdp.share') }}</span>
              </button>
            </div>

            <!-- Social Share: Telegram, Instagram, Facebook -->
            <div class="pdp__share" aria-label="{{ __('pdp.share_via') }}">
              <span class="pdp__share-label">{{ __('pdp.share_via') }}</span>
              <div class="pdp__share-btns">
                <a href="https://t.me/share/url?url={{ urlencode(request()->fullUrl()) }}&text={{ urlencode(__('pdp.title')) }}"
                   target="_blank" rel="noopener noreferrer"
                   class="pdp__share-btn pdp__share-btn--telegram"
                   data-share-telegram
                   aria-label="Share on Telegram">
                  <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M11.944 0A12 12 0 0 0 0 12a12 12 0 0 0 12 12 12 12 0 0 0 12-12A12 12 0 0 0 12 0a12 12 0 0 0-.056 0zm4.962 7.224c.1-.002.321.023.465.14a.506.506 0 0 1 .171.325c.016.093.036.306.02.472-.18 1.898-.962 6.502-1.36 8.627-.168.9-.499 1.201-.82 1.23-.696.065-1.225-.46-1.9-.902-1.056-.693-1.653-1.124-2.678-1.8-1.185-.78-.417-1.21.258-1.91.177-.184 3.247-2.977 3.307-3.23.007-.032.014-.15-.056-.212s-.174-.041-.249-.024c-.106.024-1.793 1.14-5.061 3.345-.48.33-.913.49-1.302.48-.428-.008-1.252-.241-1.865-.44-.752-.245-1.349-.374-1.297-.789.027-.216.325-.437.893-.663 3.498-1.524 5.83-2.529 6.998-3.014 3.332-1.386 4.025-1.627 4.476-1.635z"/></svg>
                  <span>{{ __('pdp.share_telegram') }}</span>
                </a>
                <button type="button"
                   class="pdp__share-btn pdp__share-btn--instagram"
                   data-share-instagram
                   aria-label="Share on Instagram">
                  <svg width="16" height="16" viewBox="0 0 24 24" fill="none" aria-hidden="true"><rect x="3" y="3" width="18" height="18" rx="5" stroke="currentColor" stroke-width="2"/><circle cx="12" cy="12" r="4" stroke="currentColor" stroke-width="2"/><circle cx="17.5" cy="6.5" r="1.2" fill="currentColor"/></svg>
                  <span>{{ __('pdp.share_instagram') }}</span>
                </button>
                <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(request()->fullUrl()) }}"
                   target="_blank" rel="noopener noreferrer"
                   class="pdp__share-btn pdp__share-btn--facebook"
                   data-share-facebook
                   aria-label="Share on Facebook">
                  <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                  <span>{{ __('pdp.share_facebook') }}</span>
                </a>
              </div>
            </div>

            <ul class="pdp__assure" style="margin-top: 22px;">
              <li><svg width="18" height="18" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M2 7h11v9H2zM13 10h5l3 3v3h-8z" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round"/></svg> {{ __('pdp.assure1') }}</li>
              <li><svg width="18" height="18" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M20 12a8 8 0 1 1-2.3-5.6" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/><path d="M20 4v4h-4" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round"/></svg> {{ __('pdp.assure2') }}</li>
              <li><svg width="18" height="18" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M12 3l7 3v5c0 4.4-3 7.8-7 9-4-1.2-7-4.6-7-9V6l7-3Z" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round"/></svg> {{ __('pdp.assure3') }}</li>
            </ul>
          </div>
        </section>

        <!-- Tabs -->
        <section class="ptabs" aria-label="Product details">
          <div class="ptabs__nav" role="tablist" aria-label="Product information">
            <button class="ptab is-active" role="tab" id="tab-desc" aria-controls="panel-desc" aria-selected="true" tabindex="0">{{ __('pdp.tab_desc') }}</button>
            <button class="ptab" role="tab" id="tab-specs" aria-controls="panel-specs" aria-selected="false" tabindex="-1">{{ __('pdp.tab_specs') }}</button>
            <button class="ptab" role="tab" id="tab-reviews" aria-controls="panel-reviews" aria-selected="false" tabindex="-1">{{ __('pdp.tab_reviews') }} <span class="ptab__n">1,284</span></button>
            <button class="ptab" role="tab" id="tab-how" aria-controls="panel-how" aria-selected="false" tabindex="-1">{{ __('pdp.tab_how') }}</button>
          </div>

          <div class="ptabs__panels">
            <div class="ppanel is-active" id="panel-desc" role="tabpanel" aria-labelledby="tab-desc" tabindex="0">
              <div class="prose">
                <p>{{ __('pdp.desc_p1') }}</p>
                <p>{{ __('pdp.desc_p2') }}</p>
                <h3>{{ __('pdp.in_set') }}</h3>
                <ul>
                  <li>{{ __('pdp.in_set_1') }}</li>
                  <li>{{ __('pdp.in_set_2') }}</li>
                  <li>{{ __('pdp.in_set_3') }}</li>
                  <li>{{ __('pdp.in_set_4') }}</li>
                </ul>
              </div>
            </div>

            <div class="ppanel" id="panel-specs" role="tabpanel" aria-labelledby="tab-specs" tabindex="0" hidden>
              <table class="spec">
                <tbody>
                  <tr><th scope="row">{{ __('pdp.spec_k1') }}</th><td>{{ __('pdp.spec_v1') }}</td></tr>
                  <tr><th scope="row">{{ __('pdp.spec_k2') }}</th><td>{{ __('pdp.spec_v2') }}</td></tr>
                  <tr><th scope="row">{{ __('pdp.spec_k3') }}</th><td>{{ __('pdp.spec_v3') }}</td></tr>
                  <tr><th scope="row">{{ __('pdp.spec_k4') }}</th><td>{{ __('pdp.spec_v4') }}</td></tr>
                  <tr><th scope="row">{{ __('pdp.spec_k5') }}</th><td>{{ __('pdp.spec_v5') }}</td></tr>
                  <tr><th scope="row">{{ __('pdp.spec_k6') }}</th><td>{{ __('pdp.spec_v6') }}</td></tr>
                  <tr><th scope="row">{{ __('pdp.spec_k7') }}</th><td>{{ __('pdp.spec_v7') }}</td></tr>
                </tbody>
              </table>
            </div>

            <div class="ppanel" id="panel-reviews" role="tabpanel" aria-labelledby="tab-reviews" tabindex="0" hidden>
              <div class="revsum">
                <div class="revsum__score">
                  <strong>5.0</strong>
                  <span class="stars" style="--rate:100%" aria-hidden="true"></span>
                  <span class="revsum__based">{{ __('pdp.rev_based') }}</span>
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
                      <span class="rev__verified">{{ __('pdp.rev_verified') }}</span>
                    </div>
                    <span class="stars" style="--rate:100%" aria-label="Rated 5 out of 5"></span>
                  </div>
                  <p class="rev__body">{{ __('pdp.rev_body') }}</p>
                </li>
              </ul>
            </div>

            <div class="ppanel" id="panel-how" role="tabpanel" aria-labelledby="tab-how" tabindex="0" hidden>
              <div class="prose">
                <h3>{{ __('pdp.how_title') }}</h3>
                <div class="how-steps-list">
                  <div class="how-step-item">
                    <span class="how-step-badge">1</span>
                    <div>
                      <strong>{{ __('pdp.step1_title') }}</strong>
                      <p>{{ __('pdp.step1_body') }}</p>
                    </div>
                  </div>
                  <div class="how-step-item">
                    <span class="how-step-badge">2</span>
                    <div>
                      <strong>{{ __('pdp.step2_title') }}</strong>
                      <p>{{ __('pdp.step2_body') }}</p>
                    </div>
                  </div>
                  <div class="how-step-item">
                    <span class="how-step-badge">3</span>
                    <div>
                      <strong>{{ __('pdp.step3_title') }}</strong>
                      <p>{{ __('pdp.step3_body') }}</p>
                    </div>
                  </div>
                  <div class="how-step-item">
                    <span class="how-step-badge">4</span>
                    <div>
                      <strong>{{ __('pdp.step4_title') }}</strong>
                      <p>{{ __('pdp.step4_body') }}</p>
                    </div>
                  </div>
                </div>
                <div class="how-pro-tip">
                  <strong>💡 {{ __('pdp.pro_tip_label') }}</strong> {{ __('pdp.pro_tip_body') }}
                </div>
              </div>
            </div>
          </div>
        </section>

        <!-- Related -->
        <section class="section" aria-labelledby="rel-h">
          <div class="section__head">
            <div>
              <p class="eyebrow">{{ __('pdp.rel_eyebrow') }}</p>
              <h2 class="section__title" id="rel-h">{{ __('pdp.rel_title') }}</h2>
            </div>
          </div>
          <div class="pgrid pgrid--rel">
            <article class="pcard">
              <div class="pcard__media">
                <span class="badge-emp badge-emp--best">{{ __('badge.bestseller') }}</span>
                <a href="{{ route('product') }}" class="pcard__imglink"><img src="{{ asset('images/conditioner.png') }}" width="300" height="300" loading="lazy" alt="{{ __('prod.conditioner_short') }}"></a>
                <button class="pcard__quick" type="button" data-add-to-cart data-id="liva-conditioner" data-name="{{ __('prod.conditioner_short') }}" data-price="26.00" data-img="{{ asset('images/conditioner.png') }}">{{ __('prod.quick_add') }}</button>
              </div>
              <div class="pcard__body">
                <span class="pcard__cat">{{ __('cat.hair') }}</span>
                <h3 class="pcard__title"><a href="{{ route('product') }}">{{ __('prod.conditioner_short') }}</a></h3>
                <div class="pcard__rate"><span class="stars" style="--rate:94%" aria-hidden="true"></span><span class="pcard__rnum">4.7</span></div>
                <div class="pcard__price"><span class="price-now">$26.00</span><span class="price-was">$34.00</span></div>
              </div>
            </article>
            <article class="pcard">
              <div class="pcard__media">
                <a href="{{ route('product') }}" class="pcard__imglink"><img src="{{ asset('images/body-wash.webp') }}" width="300" height="300" loading="lazy" alt="{{ __('prod.body_wash_short') }}"></a>
                <button class="pcard__quick" type="button" data-add-to-cart data-id="liva-bodywash" data-name="{{ __('prod.body_wash_short') }}" data-price="22.00" data-img="{{ asset('images/body-wash.webp') }}">{{ __('prod.quick_add') }}</button>
              </div>
              <div class="pcard__body">
                <span class="pcard__cat">{{ __('cat.body') }}</span>
                <h3 class="pcard__title"><a href="{{ route('product') }}">{{ __('prod.body_wash_short') }}</a></h3>
                <div class="pcard__rate"><span class="stars" style="--rate:94%" aria-hidden="true"></span><span class="pcard__rnum">4.7</span></div>
                <div class="pcard__price"><span class="price-now">$22.00</span></div>
              </div>
            </article>
            <article class="pcard">
              <div class="pcard__media">
                <span class="badge-emp badge-emp--sale">{{ __('badge.deal') }}</span>
                <a href="{{ route('product') }}" class="pcard__imglink"><img src="{{ asset('images/body-lotion.webp') }}" width="300" height="300" loading="lazy" alt="{{ __('prod.body_lotion_short') }}"></a>
                <button class="pcard__quick" type="button" data-add-to-cart data-id="liva-bodylotion" data-name="{{ __('prod.body_lotion_short') }}" data-price="28.00" data-img="{{ asset('images/body-lotion.webp') }}">{{ __('prod.quick_add') }}</button>
              </div>
              <div class="pcard__body">
                <span class="pcard__cat">{{ __('cat.lotions_short') }}</span>
                <h3 class="pcard__title"><a href="{{ route('product') }}">{{ __('prod.body_lotion_short') }}</a></h3>
                <div class="pcard__rate"><span class="stars" style="--rate:92%" aria-hidden="true"></span><span class="pcard__rnum">4.6</span></div>
                <div class="pcard__price"><span class="price-now">$28.00</span><span class="price-was">$36.00</span></div>
              </div>
            </article>
            <article class="pcard">
              <div class="pcard__media">
                <span class="badge-emp badge-emp--new">{{ __('badge.new') }}</span>
                <a href="{{ route('product') }}" class="pcard__imglink"><img src="{{ asset('images/hair-mask.webp') }}" width="300" height="300" loading="lazy" alt="{{ __('prod.hair_mask_short') }}"></a>
                <button class="pcard__quick" type="button" data-add-to-cart data-id="liva-hairmask" data-name="{{ __('prod.hair_mask_short') }}" data-price="34.00" data-img="{{ asset('images/hair-mask.webp') }}">{{ __('prod.quick_add') }}</button>
              </div>
              <div class="pcard__body">
                <span class="pcard__cat">{{ __('cat.masks') }}</span>
                <h3 class="pcard__title"><a href="{{ route('product') }}">{{ __('prod.hair_mask_short') }}</a></h3>
                <div class="pcard__rate"><span class="stars" style="--rate:98%" aria-hidden="true"></span><span class="pcard__rnum">4.9</span></div>
                <div class="pcard__price"><span class="price-now">$34.00</span></div>
              </div>
            </article>
          </div>
        </section>

      </div>
    </main>

    @include('partials.footer', ['isHome' => false])

    <!-- Lightbox -->
    <div class="lightbox" data-lightbox hidden role="dialog" aria-modal="true" aria-label="Product image viewer">
      <button class="lightbox__close" type="button" data-lightbox-close aria-label="Close image viewer">
        <svg width="26" height="26" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="m6 6 12 12M18 6 6 18" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>
      </button>
      <img src="{{ asset('images/shampoo.webp') }}" width="900" height="900" alt="Enlarged product image" data-lightbox-img>
    </div>

    @include('partials.drawers')
</body>

</html>
