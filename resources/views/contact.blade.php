<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    @include('partials.head', [
        'pageTitle' => __('contact.page_title'),
        'metaDescription' => __('contact.meta_desc'),
    ])
</head>

<body>
    @include('partials.header', ['activeNav' => 'contact', 'isHome' => false])

    <main id="main">
      <div class="container">

        <!-- Breadcrumb -->
        <nav class="crumb" aria-label="Breadcrumb">
          <ol>
            <li><a href="{{ route('home') }}">{{ __('pdp.home') }}</a></li>
            <li aria-current="page">{{ __('nav.contact') }}</li>
          </ol>
        </nav>

        <!-- Contact Hero -->
        <section class="about-hero" aria-labelledby="contact-title">
          <p class="eyebrow">{{ __('contact.eyebrow') }}</p>
          <h1 class="about-hero__title" id="contact-title">{{ __('contact.title') }}</h1>
          <p class="about-hero__lead">{{ __('contact.lead') }}</p>
        </section>

        <!-- Contact Split Layout -->
        <section class="contact-section">
          <div class="contact-grid">

            <!-- Contact Form Card -->
            <div class="contact-card contact-card--form">
              <h2>{{ __('contact.form_h2') }}</h2>
              <p class="contact-card__sub">{{ __('contact.form_sub') }}</p>

              <form class="contact-form" id="contactForm" onsubmit="event.preventDefault(); if (window.toast) { window.toast(@js(__('js.contact_sent'))); } this.reset();">
                <div class="contact-form__row">
                  <div class="contact-field">
                    <label for="c-name">{{ __('contact.name') }} <span class="req">*</span></label>
                    <input type="text" id="c-name" class="contact-input" placeholder="{{ __('contact.name_ph') }}" required>
                  </div>
                  <div class="contact-field">
                    <label for="c-email">{{ __('contact.email') }} <span class="req">*</span></label>
                    <input type="email" id="c-email" class="contact-input" placeholder="{{ __('contact.email_ph') }}" required>
                  </div>
                </div>

                <div class="contact-field">
                  <label for="c-subject">{{ __('contact.subject') }}</label>
                  <select id="c-subject" class="contact-input contact-select">
                    <option value="skincare">{{ __('contact.opt_skincare') }}</option>
                    <option value="order">{{ __('contact.opt_order') }}</option>
                    <option value="product">{{ __('contact.opt_product') }}</option>
                    <option value="wholesale">{{ __('contact.opt_wholesale') }}</option>
                    <option value="other">{{ __('contact.opt_other') }}</option>
                  </select>
                </div>

                <div class="contact-field">
                  <label for="c-msg">{{ __('contact.message') }} <span class="req">*</span></label>
                  <textarea id="c-msg" class="contact-input contact-textarea" rows="5" placeholder="{{ __('contact.message_ph') }}" required></textarea>
                </div>

                <button type="submit" class="btn-emp btn-emp--primary btn-emp--lg">{{ __('contact.send') }}</button>
              </form>
            </div>

            <!-- Contact Info & Cards -->
            <div class="contact-sidebar">

              <!-- Direct channels -->
              <div class="contact-info-card">
                <h3>{{ __('contact.support_h3') }}</h3>
                <ul class="contact-info-list">
                  <li>
                    <span class="contact-info-icon">📞</span>
                    <div>
                      <strong>{{ __('contact.phone_label') }}</strong>
                      <p>+855 (0) 23 987 654<br>+855 (0) 12 345 678</p>
                    </div>
                  </li>
                  <li>
                    <span class="contact-info-icon">✉️</span>
                    <div>
                      <strong>{{ __('contact.email_label') }}</strong>
                      <p><a href="mailto:support@liva-skincare.com">support@liva-skincare.com</a></p>
                    </div>
                  </li>
                  <li>
                    <span class="contact-info-icon">📍</span>
                    <div>
                      <strong>{{ __('contact.address_label') }}</strong>
                      <p>{!! nl2br(e(__('contact.address_val'))) !!}</p>
                    </div>
                  </li>
                  <li>
                    <span class="contact-info-icon">⏰</span>
                    <div>
                      <strong>{{ __('contact.hours_label') }}</strong>
                      <p>{!! nl2br(e(__('contact.hours_val'))) !!}</p>
                    </div>
                  </li>
                </ul>
              </div>

              <!-- Quick FAQ Box -->
              <div class="contact-faq-card">
                <h3>{{ __('contact.faq_h3') }}</h3>
                <div class="contact-faq-item">
                  <strong>{{ __('contact.faq1_q') }}</strong>
                  <p>{{ __('contact.faq1_a') }}</p>
                </div>
                <div class="contact-faq-item">
                  <strong>{{ __('contact.faq2_q') }}</strong>
                  <p>{{ __('contact.faq2_a') }}</p>
                </div>
              </div>

            </div>

          </div>
        </section>

      </div>
    </main>

    @include('partials.footer', ['isHome' => false])
    @include('partials.drawers')
</body>

</html>
