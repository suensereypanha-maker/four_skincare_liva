<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    @include('partials.head', [
        'pageTitle' => __('about.page_title'),
        'metaDescription' => __('about.meta_desc'),
    ])
</head>

<body>
    @include('partials.header', ['activeNav' => 'about', 'isHome' => false])

    <main id="main">
      <div class="container">

        <!-- Breadcrumb -->
        <nav class="crumb" aria-label="Breadcrumb">
          <ol>
            <li><a href="{{ route('home') }}">{{ __('pdp.home') }}</a></li>
            <li aria-current="page">{{ __('nav.about_us') }}</li>
          </ol>
        </nav>

        <!-- About Hero -->
        <section class="about-hero" aria-labelledby="about-title">
          <p class="eyebrow">{{ __('about.eyebrow') }}</p>
          <h1 class="about-hero__title" id="about-title">{{ __('about.title') }}</h1>
          <p class="about-hero__lead">{{ __('about.lead') }}</p>
        </section>

        <!-- Story Split Section -->
        <section class="about-story">
          <div class="about-story__grid">
            <div class="about-story__content">
              <span class="badge-discount" style="background: var(--brand); color: #fff;">{{ __('about.badge') }}</span>
              <h2>{{ __('about.story_h2') }}</h2>
              <p>{{ __('about.story_p1') }}</p>
              <p>{{ __('about.story_p2') }}</p>

              <ul class="about-checklist">
                <li><svg width="20" height="20" viewBox="0 0 24 24" fill="none"><path d="m5 12 4 4 10-10" stroke="currentColor" stroke-width="2.4" stroke-linecap="round"/></svg> {{ __('about.check1') }}</li>
                <li><svg width="20" height="20" viewBox="0 0 24 24" fill="none"><path d="m5 12 4 4 10-10" stroke="currentColor" stroke-width="2.4" stroke-linecap="round"/></svg> {{ __('about.check2') }}</li>
                <li><svg width="20" height="20" viewBox="0 0 24 24" fill="none"><path d="m5 12 4 4 10-10" stroke="currentColor" stroke-width="2.4" stroke-linecap="round"/></svg> {{ __('about.check3') }}</li>
              </ul>
            </div>
            <div class="about-story__media">
              <div class="about-image-card">
                <img src="{{ asset('images/hero.webp') }}" alt="Liva Botanical Skincare Ritual" class="about-image-main">
                <div class="about-badge-float">
                  <strong>{{ __('about.float_num') }}</strong>
                  <span>{{ __('about.float_txt') }}</span>
                </div>
              </div>
            </div>
          </div>
        </section>

        <!-- CTA Banner -->
        <section class="about-cta">
          <div class="about-cta__inner">
            <h2>{{ __('about.cta_h2') }}</h2>
            <p>{{ __('about.cta_p') }}</p>
            <div class="about-cta__btns">
              <a href="{{ route('home') }}#products" class="btn-emp btn-emp--primary btn-emp--lg">{{ __('about.cta_btn1') }}</a>
              <a href="{{ route('contact') }}" class="btn-emp btn-emp--ghost btn-emp--lg">{{ __('about.cta_btn2') }}</a>
            </div>
          </div>
        </section>

      </div>
    </main>

    @include('partials.footer', ['isHome' => false])
    @include('partials.drawers')
</body>

</html>
