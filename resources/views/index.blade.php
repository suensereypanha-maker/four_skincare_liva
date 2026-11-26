<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    @include('partials.head', [
        'pageTitle' => __('site.title'),
        'metaDescription' => __('site.description'),
    ])
</head>

<body>
    @include('partials.header', ['activeNav' => 'home', 'isHome' => true])

    <main id="main">

        <!-- Hero -->
        <section class="hero" aria-label="Featured promotion">
            <div class="container">
                <div class="hero__grid">
                    <div class="hero__main">
                        <p class="hero__eyebrow reveal">{{ __('hero.eyebrow') }}</p>
                        <h1 class="hero__title reveal">{{ __('hero.title_before') }} <em>{{ __('hero.title_em') }}</em></h1>
                        <p class="hero__lead reveal">{{ __('hero.lead') }}</p>
                        <div class="hero__cta reveal">
                            <a href="#products" class="btn-emp btn-emp--primary">{{ __('hero.cta') }}</a>
                        </div>
                        <ul class="hero__meta reveal">
                            <li><strong>{{ __('hero.stat1_num') }}</strong>{{ __('hero.stat1_txt') }}</li>
                            <li><strong>{{ __('hero.stat2_num') }}</strong>{{ __('hero.stat2_txt') }}</li>
                            <li><strong>{{ __('hero.stat3_num') }}</strong>{{ __('hero.stat3_txt') }}</li>
                        </ul>
                    </div>
                    <div class="hero__media">
                        <img src="{{ asset('images/hero.webp') }}" width="640" height="720"
                            alt="Liva Skincare Collection" fetchpriority="high" class="hero__img">
                        <div class="hero__badge" aria-hidden="true">
                            <span class="hero__badge-off">-40%</span>
                            <span class="hero__badge-txt">{{ __('hero.badge_txt') }}</span>
                        </div>
                    </div>
                </div>

                <!-- Secondary promo cards -->
                <div class="hero__promos">
                    <a href="#products" class="promo promo--a reveal" data-filter-link="beauty">
                        <img src="{{ asset('images/botanical.webp') }}" width="360" height="220" loading="lazy"
                            alt="{{ __('promo.a_kicker') }}">
                        <div class="promo__body">
                            <span class="promo__kicker">{{ __('promo.a_kicker') }}</span>
                            <span class="promo__title">{{ __('promo.a_title') }}</span>
                            <span class="promo__link">{{ __('promo.shop_now') }}</span>
                        </div>
                    </a>
                    <a href="#products" class="promo promo--b reveal" data-filter-link="beauty">
                        <img src="{{ asset('images/campaign/everyday-poster.webp') }}" width="360" height="220"
                            loading="lazy" alt="{{ __('promo.b_kicker') }}">
                        <div class="promo__body">
                            <span class="promo__kicker">{{ __('promo.b_kicker') }}</span>
                            <span class="promo__title">{{ __('promo.b_title') }}</span>
                            <span class="promo__link">{{ __('promo.shop_now') }}</span>
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
                        <p class="eyebrow">{{ __('cat.eyebrow') }}</p>
                        <h2 class="section__title" id="cat-h">{{ __('cat.title') }}</h2>
                    </div>
                    <a href="#products" class="section__link">{{ __('cat.view_all') }}</a>
                </div>
                <div class="cats">
                    <a href="#products" class="cat reveal" data-filter-link="hair">
                        <span class="cat__img"><img src="{{ asset('images/shampoo.webp') }}" width="200"
                                height="200" loading="lazy" alt="{{ __('cat.hair') }}"></span>
                        <span class="cat__name">{{ __('cat.hair') }}</span>
                        <span class="cat__count">{{ __('cat.hair_count') }}</span>
                    </a>
                    <a href="#products" class="cat reveal" data-filter-link="body">
                        <span class="cat__img"><img src="{{ asset('images/body-wash.webp') }}" width="200"
                                height="200" loading="lazy" alt="{{ __('cat.body') }}"></span>
                        <span class="cat__name">{{ __('cat.body') }}</span>
                        <span class="cat__count">{{ __('cat.body_count') }}</span>
                    </a>
                    <a href="#products" class="cat reveal" data-filter-link="lotions">
                        <span class="cat__img"><img src="{{ asset('images/body-lotion.webp') }}" width="200"
                                height="200" loading="lazy" alt="{{ __('cat.lotions') }}"></span>
                        <span class="cat__name">{{ __('cat.lotions') }}</span>
                        <span class="cat__count">{{ __('cat.lotions_count') }}</span>
                    </a>
                    <a href="#products" class="cat reveal" data-filter-link="masks">
                        <span class="cat__img"><img src="{{ asset('images/hair-mask.webp') }}" width="200"
                                height="200" loading="lazy" alt="{{ __('cat.masks') }}"></span>
                        <span class="cat__name">{{ __('cat.masks') }}</span>
                        <span class="cat__count">{{ __('cat.masks_count') }}</span>
                    </a>
                    <a href="#products" class="cat reveal" data-filter-link="beauty">
                        <span class="cat__img"><img src="{{ asset('images/botanical.png') }}" width="200"
                                height="200" loading="lazy" alt="{{ __('cat.botanicals') }}"></span>
                        <span class="cat__name">{{ __('cat.botanicals') }}</span>
                        <span class="cat__count">{{ __('cat.botanicals_count') }}</span>
                    </a>
                    <a href="#deals" class="cat cat--deal reveal">
                        <span class="cat__img"><img src="{{ asset('images/travel-set.webp') }}" width="200"
                                height="200" loading="lazy" alt="{{ __('cat.deals') }}"></span>
                        <span class="cat__name">{{ __('cat.deals') }}</span>
                        <span class="cat__count">{{ __('cat.deals_count') }}</span>
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
                            loading="lazy" alt="{{ __('deal.title') }}">
                        <span class="deal__flag">{{ __('deal.flag') }}</span>
                    </div>
                    <div class="deal__body">
                        <p class="eyebrow eyebrow--light">{{ __('deal.eyebrow') }}</p>
                        <h2 class="deal__title" id="deal-h">{{ __('deal.title') }}</h2>
                        <div class="deal__rating" aria-label="Rated 4.9 out of 5">
                            <span class="stars" style="--rate:98%" aria-hidden="true"></span>
                            <span class="deal__reviews">{{ __('deal.reviews') }}</span>
                        </div>
                        <p class="deal__desc">{{ __('deal.desc') }}</p>
                        <div class="deal__price">
                            <span class="price-now">$59.00</span>
                            <span class="price-was">$99.00</span>
                            <span class="price-save">{{ __('deal.save') }}</span>
                        </div>
                        <div class="deal__count" role="timer" aria-live="off"
                            aria-label="Time remaining on this deal">
                            <div class="cd" data-countdown>
                                <span class="cd__unit"><b data-cd="hours">00</b><small>{{ __('deal.hrs') }}</small></span>
                                <span class="cd__sep">:</span>
                                <span class="cd__unit"><b data-cd="minutes">00</b><small>{{ __('deal.min') }}</small></span>
                                <span class="cd__sep">:</span>
                                <span class="cd__unit"><b data-cd="seconds">00</b><small>{{ __('deal.sec') }}</small></span>
                            </div>
                        </div>
                        <div class="deal__stock">
                            <div class="deal__stockbar"><span style="width:38%"></span></div>
                            <p><strong>{{ __('deal.sold') }}</strong> · {{ __('deal.left') }}</p>
                        </div>
                        <button class="btn-emp btn-emp--primary btn-emp--lg" type="button" data-add-to-cart
                            data-id="ritual-duo" data-name="{{ __('deal.title') }}" data-price="59.00"
                            data-img="{{ asset('images/ritual-duo.png') }}">{{ __('deal.cta') }}</button>
                    </div>
                </div>
            </div>
        </section>

        <!-- Featured products -->
        <section class="section" id="products" aria-labelledby="prod-h">
            <div class="container">
                <div class="section__head">
                    <div>
                        <p class="eyebrow">{{ __('prod.eyebrow') }}</p>
                        <h2 class="section__title" id="prod-h">{{ __('prod.title') }}</h2>
                    </div>
                </div>

                <div class="filters" role="tablist" aria-label="Filter products by category">
                    <button class="filter is-active" data-filter="all" role="tab" aria-selected="true">{{ __('prod.filter_all') }}</button>
                    <button class="filter" data-filter="hair" role="tab" aria-selected="false">{{ __('cat.hair') }}</button>
                    <button class="filter" data-filter="body" role="tab" aria-selected="false">{{ __('cat.body') }}</button>
                    <button class="filter" data-filter="lotions" role="tab" aria-selected="false">{{ __('cat.lotions_short') }}</button>
                    <button class="filter" data-filter="masks" role="tab" aria-selected="false">{{ __('cat.masks') }}</button>
                    <button class="filter" data-filter="beauty" role="tab" aria-selected="false">{{ __('cat.botanicals') }}</button>
                </div>

                <div class="pgrid" data-products>

                    <!-- 1 -->
                    <article class="pcard reveal" data-category="hair">
                        <div class="pcard__media">
                            <span class="badge-emp badge-emp--sale">{{ __('badge.sale') }}</span>
                            <button class="pcard__wish" type="button"
                                aria-label="{{ __('prod.shampoo') }}" aria-pressed="false">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                                    <path d="M12 20s-7-4.35-9.2-8.3C1.1 8.4 2.6 5 6 5c2 0 3.2 1.2 4 2.3C10.8 6.2 12 5 14 5c3.4 0 4.9 3.4 3.2 6.7C19 15.65 12 20 12 20Z" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round" />
                                </svg>
                            </button>
                            <a href="{{ route('product') }}" class="pcard__imglink"><img
                                    src="{{ asset('images/shampoo.webp') }}" width="300" height="300"
                                    loading="lazy" alt="{{ __('prod.shampoo') }}"></a>
                            <button class="pcard__quick" type="button" data-add-to-cart data-id="liva-shampoo"
                                data-name="{{ __('prod.shampoo') }}" data-price="24.00"
                                data-img="{{ asset('images/shampoo.webp') }}">{{ __('prod.quick_add') }}</button>
                        </div>
                        <div class="pcard__body">
                            <span class="pcard__cat">{{ __('cat.hair') }}</span>
                            <h3 class="pcard__title"><a href="{{ route('product') }}">{{ __('prod.shampoo') }}</a></h3>
                            <div class="pcard__rate"><span class="stars" style="--rate:96%" aria-hidden="true"></span><span class="pcard__rnum">4.8</span></div>
                            <div class="pcard__price"><span class="price-now">$24.00</span><span class="price-was">$32.00</span></div>
                        </div>
                    </article>

                    <!-- 2 -->
                    <article class="pcard reveal" data-category="hair">
                        <div class="pcard__media">
                            <span class="badge-emp badge-emp--best">{{ __('badge.bestseller') }}</span>
                            <button class="pcard__wish" type="button"
                                aria-label="{{ __('prod.conditioner') }}" aria-pressed="false">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                                    <path d="M12 20s-7-4.35-9.2-8.3C1.1 8.4 2.6 5 6 5c2 0 3.2 1.2 4 2.3C10.8 6.2 12 5 14 5c3.4 0 4.9 3.4 3.2 6.7C19 15.65 12 20 12 20Z" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round" />
                                </svg>
                            </button>
                            <a href="{{ route('product') }}" class="pcard__imglink"><img
                                    src="{{ asset('images/conditioner.png') }}" width="300" height="300"
                                    loading="lazy" alt="{{ __('prod.conditioner') }}"></a>
                            <button class="pcard__quick" type="button" data-add-to-cart data-id="liva-conditioner"
                                data-name="{{ __('prod.conditioner') }}" data-price="26.00"
                                data-img="{{ asset('images/conditioner.png') }}">{{ __('prod.quick_add') }}</button>
                        </div>
                        <div class="pcard__body">
                            <span class="pcard__cat">{{ __('cat.hair') }}</span>
                            <h3 class="pcard__title"><a href="{{ route('product') }}">{{ __('prod.conditioner') }}</a></h3>
                            <div class="pcard__rate"><span class="stars" style="--rate:94%" aria-hidden="true"></span><span class="pcard__rnum">4.7</span></div>
                            <div class="pcard__price"><span class="price-now">$26.00</span><span class="price-was">$34.00</span></div>
                        </div>
                    </article>

                    <!-- 3 -->
                    <article class="pcard reveal" data-category="body">
                        <div class="pcard__media">
                            <button class="pcard__wish" type="button"
                                aria-label="{{ __('prod.body_wash') }}" aria-pressed="false">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                                    <path d="M12 20s-7-4.35-9.2-8.3C1.1 8.4 2.6 5 6 5c2 0 3.2 1.2 4 2.3C10.8 6.2 12 5 14 5c3.4 0 4.9 3.4 3.2 6.7C19 15.65 12 20 12 20Z" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round" />
                                </svg>
                            </button>
                            <a href="{{ route('product') }}" class="pcard__imglink"><img
                                    src="{{ asset('images/body-wash.webp') }}" width="300" height="300"
                                    loading="lazy" alt="{{ __('prod.body_wash') }}"></a>
                            <button class="pcard__quick" type="button" data-add-to-cart data-id="liva-bodywash"
                                data-name="{{ __('prod.body_wash') }}" data-price="22.00"
                                data-img="{{ asset('images/body-wash.webp') }}">{{ __('prod.quick_add') }}</button>
                        </div>
                        <div class="pcard__body">
                            <span class="pcard__cat">{{ __('cat.body') }}</span>
                            <h3 class="pcard__title"><a href="{{ route('product') }}">{{ __('prod.body_wash') }}</a></h3>
                            <div class="pcard__rate"><span class="stars" style="--rate:94%" aria-hidden="true"></span><span class="pcard__rnum">4.7</span></div>
                            <div class="pcard__price"><span class="price-now">$22.00</span></div>
                        </div>
                    </article>

                    <!-- 4 -->
                    <article class="pcard reveal" data-category="lotions">
                        <div class="pcard__media">
                            <span class="badge-emp badge-emp--sale">{{ __('badge.sale') }}</span>
                            <button class="pcard__wish" type="button"
                                aria-label="{{ __('prod.body_lotion') }}" aria-pressed="false">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                                    <path d="M12 20s-7-4.35-9.2-8.3C1.1 8.4 2.6 5 6 5c2 0 3.2 1.2 4 2.3C10.8 6.2 12 5 14 5c3.4 0 4.9 3.4 3.2 6.7C19 15.65 12 20 12 20Z" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round" />
                                </svg>
                            </button>
                            <a href="{{ route('product') }}" class="pcard__imglink"><img
                                    src="{{ asset('images/body-lotion.webp') }}" width="300" height="300"
                                    loading="lazy" alt="{{ __('prod.body_lotion') }}"></a>
                            <button class="pcard__quick" type="button" data-add-to-cart data-id="liva-bodylotion"
                                data-name="{{ __('prod.body_lotion') }}" data-price="28.00"
                                data-img="{{ asset('images/body-lotion.webp') }}">{{ __('prod.quick_add') }}</button>
                        </div>
                        <div class="pcard__body">
                            <span class="pcard__cat">{{ __('cat.lotions_short') }}</span>
                            <h3 class="pcard__title"><a href="{{ route('product') }}">{{ __('prod.body_lotion') }}</a></h3>
                            <div class="pcard__rate"><span class="stars" style="--rate:92%" aria-hidden="true"></span><span class="pcard__rnum">4.6</span></div>
                            <div class="pcard__price"><span class="price-now">$28.00</span><span class="price-was">$36.00</span></div>
                        </div>
                    </article>

                    <!-- 5 -->
                    <article class="pcard reveal" data-category="body">
                        <div class="pcard__media">
                            <span class="badge-emp badge-emp--sale">{{ __('badge.sale') }}</span>
                            <button class="pcard__wish" type="button"
                                aria-label="{{ __('prod.shower_gel') }}" aria-pressed="false">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                                    <path d="M12 20s-7-4.35-9.2-8.3C1.1 8.4 2.6 5 6 5c2 0 3.2 1.2 4 2.3C10.8 6.2 12 5 14 5c3.4 0 4.9 3.4 3.2 6.7C19 15.65 12 20 12 20Z" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round" />
                                </svg>
                            </button>
                            <a href="{{ route('product') }}" class="pcard__imglink"><img
                                    src="{{ asset('images/shower-gel.webp') }}" width="300" height="300"
                                    loading="lazy" alt="{{ __('prod.shower_gel') }}"></a>
                            <button class="pcard__quick" type="button" data-add-to-cart data-id="liva-showergel"
                                data-name="{{ __('prod.shower_gel') }}" data-price="20.00"
                                data-img="{{ asset('images/shower-gel.webp') }}">{{ __('prod.quick_add') }}</button>
                        </div>
                        <div class="pcard__body">
                            <span class="pcard__cat">{{ __('cat.body') }}</span>
                            <h3 class="pcard__title"><a href="{{ route('product') }}">{{ __('prod.shower_gel') }}</a></h3>
                            <div class="pcard__rate"><span class="stars" style="--rate:90%" aria-hidden="true"></span><span class="pcard__rnum">4.5</span></div>
                            <div class="pcard__price"><span class="price-now">$20.00</span><span class="price-was">$28.00</span></div>
                        </div>
                    </article>

                    <!-- 6 -->
                    <article class="pcard reveal" data-category="masks">
                        <div class="pcard__media">
                            <span class="badge-emp badge-emp--new">{{ __('badge.new') }}</span>
                            <button class="pcard__wish" type="button"
                                aria-label="{{ __('prod.hair_mask') }}" aria-pressed="false">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                                    <path d="M12 20s-7-4.35-9.2-8.3C1.1 8.4 2.6 5 6 5c2 0 3.2 1.2 4 2.3C10.8 6.2 12 5 14 5c3.4 0 4.9 3.4 3.2 6.7C19 15.65 12 20 12 20Z" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round" />
                                </svg>
                            </button>
                            <a href="{{ route('product') }}" class="pcard__imglink"><img
                                    src="{{ asset('images/hair-mask.webp') }}" width="300" height="300"
                                    loading="lazy" alt="{{ __('prod.hair_mask') }}"></a>
                            <button class="pcard__quick" type="button" data-add-to-cart data-id="liva-hairmask"
                                data-name="{{ __('prod.hair_mask') }}" data-price="34.00"
                                data-img="{{ asset('images/hair-mask.webp') }}">{{ __('prod.quick_add') }}</button>
                        </div>
                        <div class="pcard__body">
                            <span class="pcard__cat">{{ __('cat.masks') }}</span>
                            <h3 class="pcard__title"><a href="{{ route('product') }}">{{ __('prod.hair_mask') }}</a></h3>
                            <div class="pcard__rate"><span class="stars" style="--rate:98%" aria-hidden="true"></span><span class="pcard__rnum">4.9</span></div>
                            <div class="pcard__price"><span class="price-now">$34.00</span></div>
                        </div>
                    </article>

                    <!-- 7 -->
                    <article class="pcard reveal" data-category="beauty sets">
                        <div class="pcard__media">
                            <span class="badge-emp badge-emp--deal">{{ __('badge.travel_set') }}</span>
                            <button class="pcard__wish" type="button"
                                aria-label="{{ __('prod.travel_set') }}" aria-pressed="false">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                                    <path d="M12 20s-7-4.35-9.2-8.3C1.1 8.4 2.6 5 6 5c2 0 3.2 1.2 4 2.3C10.8 6.2 12 5 14 5c3.4 0 4.9 3.4 3.2 6.7C19 15.65 12 20 12 20Z" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round" />
                                </svg>
                            </button>
                            <a href="{{ route('product') }}" class="pcard__imglink"><img
                                    src="{{ asset('images/travel-set.webp') }}" width="300" height="300"
                                    loading="lazy" alt="{{ __('prod.travel_set') }}"></a>
                            <button class="pcard__quick" type="button" data-add-to-cart data-id="liva-travelset"
                                data-name="{{ __('prod.travel_set') }}" data-price="38.00"
                                data-img="{{ asset('images/travel-set.webp') }}">{{ __('prod.quick_add') }}</button>
                        </div>
                        <div class="pcard__body">
                            <span class="pcard__cat">{{ __('prod.cat_botanical_set') }}</span>
                            <h3 class="pcard__title"><a href="{{ route('product') }}">{{ __('prod.travel_set') }}</a></h3>
                            <div class="pcard__rate"><span class="stars" style="--rate:94%" aria-hidden="true"></span><span class="pcard__rnum">4.7</span></div>
                            <div class="pcard__price"><span class="price-now">$38.00</span></div>
                        </div>
                    </article>

                    <!-- 8 -->
                    <article class="pcard reveal" data-category="hair sets">
                        <div class="pcard__media">
                            <span class="badge-emp badge-emp--deal">{{ __('badge.duo_set') }}</span>
                            <button class="pcard__wish" type="button"
                                aria-label="{{ __('prod.ritual_duo') }}" aria-pressed="false">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                                    <path d="M12 20s-7-4.35-9.2-8.3C1.1 8.4 2.6 5 6 5c2 0 3.2 1.2 4 2.3C10.8 6.2 12 5 14 5c3.4 0 4.9 3.4 3.2 6.7C19 15.65 12 20 12 20Z" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round" />
                                </svg>
                            </button>
                            <a href="{{ route('product') }}" class="pcard__imglink"><img
                                    src="{{ asset('images/ritual-duo.png') }}" width="300" height="300"
                                    loading="lazy" alt="{{ __('prod.ritual_duo') }}"></a>
                            <button class="pcard__quick" type="button" data-add-to-cart data-id="liva-ritualduo"
                                data-name="{{ __('prod.ritual_duo') }}" data-price="48.00"
                                data-img="{{ asset('images/ritual-duo.png') }}">{{ __('prod.quick_add') }}</button>
                        </div>
                        <div class="pcard__body">
                            <span class="pcard__cat">{{ __('prod.cat_hair_body_set') }}</span>
                            <h3 class="pcard__title"><a href="{{ route('product') }}">{{ __('prod.ritual_duo') }}</a></h3>
                            <div class="pcard__rate"><span class="stars" style="--rate:96%" aria-hidden="true"></span><span class="pcard__rnum">4.8</span></div>
                            <div class="pcard__price"><span class="price-now">$48.00</span><span class="price-was">$65.00</span></div>
                        </div>
                    </article>

                    <!-- 9 -->
                    <article class="pcard reveal" data-category="beauty sets">
                        <div class="pcard__media">
                            <span class="badge-emp badge-emp--best">{{ __('badge.set_box') }}</span>
                            <button class="pcard__wish" type="button"
                                aria-label="{{ __('prod.daily_edit') }}" aria-pressed="false">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                                    <path d="M12 20s-7-4.35-9.2-8.3C1.1 8.4 2.6 5 6 5c2 0 3.2 1.2 4 2.3C10.8 6.2 12 5 14 5c3.4 0 4.9 3.4 3.2 6.7C19 15.65 12 20 12 20Z" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round" />
                                </svg>
                            </button>
                            <a href="{{ route('product') }}" class="pcard__imglink"><img
                                    src="{{ asset('images/daily-edit.png') }}" width="300" height="300"
                                    loading="lazy" alt="{{ __('prod.daily_edit') }}"></a>
                            <button class="pcard__quick" type="button" data-add-to-cart data-id="liva-dailyedit"
                                data-name="{{ __('prod.daily_edit') }}" data-price="52.00"
                                data-img="{{ asset('images/daily-edit.png') }}">{{ __('prod.quick_add') }}</button>
                        </div>
                        <div class="pcard__body">
                            <span class="pcard__cat">{{ __('prod.cat_skincare_set') }}</span>
                            <h3 class="pcard__title"><a href="{{ route('product') }}">{{ __('prod.daily_edit') }}</a></h3>
                            <div class="pcard__rate"><span class="stars" style="--rate:92%" aria-hidden="true"></span><span class="pcard__rnum">4.6</span></div>
                            <div class="pcard__price"><span class="price-now">$52.00</span></div>
                        </div>
                    </article>

                    <!-- 10 -->
                    <article class="pcard reveal" data-category="beauty">
                        <div class="pcard__media">
                            <span class="badge-emp badge-emp--best">{{ __('badge.bestseller') }}</span>
                            <button class="pcard__wish" type="button"
                                aria-label="{{ __('prod.botanical') }}" aria-pressed="false">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                                    <path d="M12 20s-7-4.35-9.2-8.3C1.1 8.4 2.6 5 6 5c2 0 3.2 1.2 4 2.3C10.8 6.2 12 5 14 5c3.4 0 4.9 3.4 3.2 6.7C19 15.65 12 20 12 20Z" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round" />
                                </svg>
                            </button>
                            <a href="{{ route('product') }}" class="pcard__imglink"><img
                                    src="{{ asset('images/botanical.webp') }}" width="300" height="300"
                                    loading="lazy" alt="{{ __('prod.botanical') }}"></a>
                            <button class="pcard__quick" type="button" data-add-to-cart data-id="liva-botanical"
                                data-name="{{ __('prod.botanical') }}" data-price="42.00"
                                data-img="{{ asset('images/botanical.webp') }}">{{ __('prod.quick_add') }}</button>
                        </div>
                        <div class="pcard__body">
                            <span class="pcard__cat">{{ __('cat.botanicals') }}</span>
                            <h3 class="pcard__title"><a href="{{ route('product') }}">{{ __('prod.botanical') }}</a></h3>
                            <div class="pcard__rate"><span class="stars" style="--rate:96%" aria-hidden="true"></span><span class="pcard__rnum">4.8</span></div>
                            <div class="pcard__price"><span class="price-now">$42.00</span><span class="price-was">$58.00</span></div>
                        </div>
                    </article>

                    <!-- 11 (Set) -->
                    <article class="pcard reveal" data-category="beauty sets">
                        <div class="pcard__media">
                            <span class="badge-emp badge-emp--best">{{ __('badge.set_bundle') }}</span>
                            <button class="pcard__wish" type="button"
                                aria-label="{{ __('prod.super_c_set') }}" aria-pressed="false">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                                    <path d="M12 20s-7-4.35-9.2-8.3C1.1 8.4 2.6 5 6 5c2 0 3.2 1.2 4 2.3C10.8 6.2 12 5 14 5c3.4 0 4.9 3.4 3.2 6.7C19 15.65 12 20 12 20Z" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round" />
                                </svg>
                            </button>
                            <a href="{{ route('product') }}" class="pcard__imglink"><img
                                    src="{{ asset('images/hair-mask.webp') }}" width="300" height="300"
                                    loading="lazy" alt="{{ __('prod.super_c_set') }}"></a>
                            <a href="{{ route('product') }}" class="pcard__quick"
                                style="text-decoration:none;text-align:center;">{{ __('prod.customize_set') }}</a>
                        </div>
                        <div class="pcard__body">
                            <span class="pcard__cat">{{ __('prod.cat_skincare_set') }}</span>
                            <h3 class="pcard__title"><a href="{{ route('product') }}">{{ __('prod.super_c_set') }}</a></h3>
                            <div class="pcard__rate"><span class="stars" style="--rate:100%" aria-hidden="true"></span><span class="pcard__rnum">5.0</span></div>
                            <div class="pcard__price"><span class="price-now">$69.00 – $249.00</span></div>
                        </div>
                    </article>

                    <!-- 12 (Set) -->
                    <article class="pcard reveal" data-category="body sets">
                        <div class="pcard__media">
                            <span class="badge-emp badge-emp--deal">{{ __('badge.duo_set') }}</span>
                            <button class="pcard__wish" type="button"
                                aria-label="{{ __('prod.daily_duo_set') }}" aria-pressed="false">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                                    <path d="M12 20s-7-4.35-9.2-8.3C1.1 8.4 2.6 5 6 5c2 0 3.2 1.2 4 2.3C10.8 6.2 12 5 14 5c3.4 0 4.9 3.4 3.2 6.7C19 15.65 12 20 12 20Z" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round" />
                                </svg>
                            </button>
                            <a href="{{ route('product') }}" class="pcard__imglink"><img
                                    src="{{ asset('images/daily-edit-detail.webp') }}" width="300" height="300"
                                    loading="lazy" alt="{{ __('prod.daily_duo_set') }}"></a>
                            <button class="pcard__quick" type="button" data-add-to-cart data-id="liva-dailyduo-set"
                                data-name="{{ __('prod.daily_duo_set') }}" data-price="59.00"
                                data-img="{{ asset('images/daily-edit-detail.webp') }}">{{ __('prod.quick_add') }}</button>
                        </div>
                        <div class="pcard__body">
                            <span class="pcard__cat">{{ __('prod.cat_hair_body_set') }}</span>
                            <h3 class="pcard__title"><a href="{{ route('product') }}">{{ __('prod.daily_duo_set') }}</a></h3>
                            <div class="pcard__rate"><span class="stars" style="--rate:98%" aria-hidden="true"></span><span class="pcard__rnum">4.9</span></div>
                            <div class="pcard__price"><span class="price-now">$59.00</span><span class="price-was">$99.00</span></div>
                        </div>
                    </article>

                </div>
                <p class="pgrid__empty" data-empty hidden>{{ __('prod.empty') }}</p>
            </div>
        </section>

        <!-- Best sellers scroll row -->
        <section class="section section--tint" aria-labelledby="best-h">
            <div class="container">
                <div class="section__head">
                    <div>
                        <p class="eyebrow">{{ __('best.eyebrow') }}</p>
                        <h2 class="section__title" id="best-h">{{ __('best.title') }}</h2>
                    </div>
                    <div class="scroller__nav" aria-hidden="true">
                        <button class="scroller__btn" type="button" data-scroll="prev" aria-label="Scroll best sellers left">‹</button>
                        <button class="scroller__btn" type="button" data-scroll="next" aria-label="Scroll best sellers right">›</button>
                    </div>
                </div>
                <div class="scroller" data-scroller tabindex="0" role="group" aria-label="{{ __('best.title') }}">
                    <article class="scard">
                        <a href="{{ route('product') }}" class="scard__img"><img src="{{ asset('images/shampoo.webp') }}" width="240" height="240" loading="lazy" alt="{{ __('prod.shampoo') }}"></a>
                        <div class="scard__body">
                            <h3 class="scard__title"><a href="{{ route('product') }}">{{ __('prod.shampoo') }}</a></h3>
                            <div class="pcard__rate"><span class="stars" style="--rate:96%" aria-hidden="true"></span><span class="pcard__rnum">4.8</span></div>
                            <span class="price-now">$24.00</span>
                        </div>
                    </article>
                    <article class="scard">
                        <a href="{{ route('product') }}" class="scard__img"><img src="{{ asset('images/conditioner.png') }}" width="240" height="240" loading="lazy" alt="{{ __('prod.conditioner_short') }}"></a>
                        <div class="scard__body">
                            <h3 class="scard__title"><a href="{{ route('product') }}">{{ __('prod.conditioner_short') }}</a></h3>
                            <div class="pcard__rate"><span class="stars" style="--rate:94%" aria-hidden="true"></span><span class="pcard__rnum">4.7</span></div>
                            <span class="price-now">$26.00</span>
                        </div>
                    </article>
                    <article class="scard">
                        <a href="{{ route('product') }}" class="scard__img"><img src="{{ asset('images/body-lotion.webp') }}" width="240" height="240" loading="lazy" alt="{{ __('prod.body_lotion') }}"></a>
                        <div class="scard__body">
                            <h3 class="scard__title"><a href="{{ route('product') }}">{{ __('prod.body_lotion') }}</a></h3>
                            <div class="pcard__rate"><span class="stars" style="--rate:92%" aria-hidden="true"></span><span class="pcard__rnum">4.6</span></div>
                            <span class="price-now">$28.00</span>
                        </div>
                    </article>
                    <article class="scard">
                        <a href="{{ route('product') }}" class="scard__img"><img src="{{ asset('images/shower-gel.webp') }}" width="240" height="240" loading="lazy" alt="{{ __('prod.shower_gel') }}"></a>
                        <div class="scard__body">
                            <h3 class="scard__title"><a href="{{ route('product') }}">{{ __('prod.shower_gel') }}</a></h3>
                            <div class="pcard__rate"><span class="stars" style="--rate:98%" aria-hidden="true"></span><span class="pcard__rnum">4.9</span></div>
                            <span class="price-now">$20.00</span>
                        </div>
                    </article>
                    <article class="scard">
                        <a href="{{ route('product') }}" class="scard__img"><img src="{{ asset('images/hair-mask.webp') }}" width="240" height="240" loading="lazy" alt="{{ __('prod.hair_mask') }}"></a>
                        <div class="scard__body">
                            <h3 class="scard__title"><a href="{{ route('product') }}">{{ __('prod.hair_mask') }}</a></h3>
                            <div class="pcard__rate"><span class="stars" style="--rate:98%" aria-hidden="true"></span><span class="pcard__rnum">4.9</span></div>
                            <span class="price-now">$34.00</span>
                        </div>
                    </article>
                    <article class="scard">
                        <a href="{{ route('product') }}" class="scard__img"><img src="{{ asset('images/travel-set.webp') }}" width="240" height="240" loading="lazy" alt="{{ __('prod.travel_set_short') }}"></a>
                        <div class="scard__body">
                            <h3 class="scard__title"><a href="{{ route('product') }}">{{ __('prod.travel_set_short') }}</a></h3>
                            <div class="pcard__rate"><span class="stars" style="--rate:94%" aria-hidden="true"></span><span class="pcard__rnum">4.7</span></div>
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
                        <span class="trust__icon" aria-hidden="true"><svg width="26" height="26" viewBox="0 0 24 24" fill="none">
                            <path d="M2 7h11v9H2zM13 10h5l3 3v3h-8z" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round" />
                            <circle cx="6" cy="18" r="1.8" stroke="currentColor" stroke-width="1.8" />
                            <circle cx="17" cy="18" r="1.8" stroke="currentColor" stroke-width="1.8" />
                        </svg></span>
                        <span class="trust__txt"><strong>{{ __('trust.ship_title') }}</strong>{{ __('trust.ship_sub') }}</span>
                    </li>
                    <li class="trust__item reveal">
                        <span class="trust__icon" aria-hidden="true"><svg width="26" height="26" viewBox="0 0 24 24" fill="none">
                            <path d="M12 3l7 3v5c0 4.4-3 7.8-7 9-4-1.2-7-4.6-7-9V6l7-3Z" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round" />
                            <path d="m9 12 2 2 4-4" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" />
                        </svg></span>
                        <span class="trust__txt"><strong>{{ __('trust.secure_title') }}</strong>{{ __('trust.secure_sub') }}</span>
                    </li>
                    <li class="trust__item reveal">
                        <span class="trust__icon" aria-hidden="true"><svg width="26" height="26" viewBox="0 0 24 24" fill="none">
                            <path d="M20 12a8 8 0 1 1-2.3-5.6" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" />
                            <path d="M20 4v4h-4" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" />
                        </svg></span>
                        <span class="trust__txt"><strong>{{ __('trust.returns_title') }}</strong>{{ __('trust.returns_sub') }}</span>
                    </li>
                    <li class="trust__item reveal">
                        <span class="trust__icon" aria-hidden="true"><svg width="26" height="26" viewBox="0 0 24 24" fill="none">
                            <path d="M12 3a7 7 0 0 0-7 7v3a3 3 0 0 0 3 3h1v-6H7v-.5a5 5 0 0 1 10 0V13h-2v6h1a3 3 0 0 0 3-3v-3a7 7 0 0 0-7-7Z" stroke="currentColor" stroke-width="1.6" stroke-linejoin="round" />
                        </svg></span>
                        <span class="trust__txt"><strong>{{ __('trust.support_title') }}</strong>{{ __('trust.support_sub') }}</span>
                    </li>
                </ul>
            </div>
        </section>

        <!-- Testimonials -->
        <section class="section" aria-labelledby="rev-h">
            <div class="container">
                <div class="section__head section__head--center">
                    <div>
                        <p class="eyebrow">{{ __('rev.eyebrow') }}</p>
                        <h2 class="section__title" id="rev-h">{{ __('rev.title') }}</h2>
                    </div>
                </div>
                <div class="tgrid">
                    <figure class="tcard reveal">
                        <div class="pcard__rate"><span class="stars" style="--rate:100%" aria-hidden="true"></span></div>
                        <blockquote class="tcard__quote">{{ __('rev.q1') }}</blockquote>
                        <figcaption class="tcard__who">
                            <img src="{{ asset('images/person-1.jpg') }}" width="52" height="52" loading="lazy" alt="Portrait of Danielle Osei">
                            <span><strong>Danielle Osei</strong>{{ __('rev.b1') }}</span>
                        </figcaption>
                    </figure>
                    <figure class="tcard reveal">
                        <div class="pcard__rate"><span class="stars" style="--rate:100%" aria-hidden="true"></span></div>
                        <blockquote class="tcard__quote">{{ __('rev.q2') }}</blockquote>
                        <figcaption class="tcard__who">
                            <img src="{{ asset('images/person-2.jpg') }}" width="52" height="52" loading="lazy" alt="Portrait of Marcus Feld">
                            <span><strong>Marcus Feld</strong>{{ __('rev.b2') }}</span>
                        </figcaption>
                    </figure>
                    <figure class="tcard reveal">
                        <div class="pcard__rate"><span class="stars" style="--rate:90%" aria-hidden="true"></span></div>
                        <blockquote class="tcard__quote">{{ __('rev.q3') }}</blockquote>
                        <figcaption class="tcard__who">
                            <img src="{{ asset('images/person-3.jpg') }}" width="52" height="52" loading="lazy" alt="Portrait of Priya Raman">
                            <span><strong>Priya Raman</strong>{{ __('rev.b3') }}</span>
                        </figcaption>
                    </figure>
                </div>
            </div>
        </section>

    </main>

    @include('partials.footer', ['isHome' => true])
    @include('partials.drawers')
</body>

</html>
