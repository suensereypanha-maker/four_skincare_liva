@php
  $currentLocale = app()->getLocale();
@endphp
<!DOCTYPE html>
<html lang="{{ $currentLocale }}">

<head>
    @include('partials.head', [
        'pageTitle' => __('chk.page_title'),
        'metaDescription' => __('chk.meta_desc'),
    ])
</head>
<body class="checkout-page">

    <a class="skip-link" href="#main">{{ __('nav.skip') }}</a>

    <!-- Header / Simple Brand Bar -->
    <header class="checkout-header">
      <div class="container checkout-header__inner">
        <a class="emp-brand" href="{{ route('home') }}" aria-label="{{ __('nav.home_aria') }}">
          <span class="emp-brand__mark">
            <img src="{{ asset('images/logo.webp') }}" width="70" height="46" alt="Liva Skincare" class="emp-brand__logo">
          </span>
          <span class="visually-hidden">Liva</span>
        </a>
        <div class="checkout-header__right">
          <div class="emp-lang" role="group" aria-label="{{ __('nav.language') }}">
            <a href="{{ route('lang.switch', ['locale' => 'en']) }}" class="emp-lang__btn {{ $currentLocale === 'en' ? 'is-active' : '' }}" hreflang="en" lang="en">EN</a>
            <a href="{{ route('lang.switch', ['locale' => 'km']) }}" class="emp-lang__btn {{ $currentLocale === 'km' ? 'is-active' : '' }}" hreflang="km" lang="km">ខ្មែរ</a>
          </div>
          <div class="checkout-secure-badge">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
            <span>{{ __('chk.ssl') }}</span>
          </div>
        </div>
      </div>
    </header>

    <main id="main" class="checkout-main">
      <div class="container">

        <!-- Navigation back link -->
        <div class="checkout-back">
          <a href="{{ route('product') }}" class="checkout-back__link">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><polyline points="15 18 9 12 15 6"></polyline></svg>
            <span>{{ __('chk.back') }}</span>
          </a>
        </div>

        <form id="checkoutOrderForm" class="checkout-grid" onsubmit="event.preventDefault(); handleOrderSubmit();">

          <!-- Left Column: Customer & Delivery Details -->
          <div class="checkout-content">
            <section class="native-sec">
              <div class="native-sec__head">
                <span class="native-sec__badge">1</span>
                <h2>{{ __('chk.step1') }}</h2>
              </div>

              <div class="native-form-group">
                <label for="username" class="native-label">{{ __('chk.fullname') }} <span class="req">*</span></label>
                <input type="text" id="username" name="username" class="native-input" placeholder="{{ __('chk.fullname_ph') }}" required autocomplete="name">
              </div>

              <div class="native-form-group">
                <label for="phone" class="native-label">{{ __('chk.phone') }} <span class="req">*</span></label>
                <input type="tel" id="phone" name="phone" class="native-input" placeholder="{{ __('chk.phone_ph') }}" required autocomplete="tel">
              </div>

              <div class="native-form-group">
                <label for="address" class="native-label">{{ __('chk.address') }} <span class="req">*</span></label>
                <input type="text" id="address" name="address" class="native-input" placeholder="{{ __('chk.address_ph') }}" required autocomplete="street-address">
              </div>

              <div class="native-form-group">
                <label for="note" class="native-label">{{ __('chk.note') }}</label>
                <textarea id="note" name="note" class="native-input native-textarea" placeholder="{{ __('chk.note_ph') }}" rows="3"></textarea>
              </div>
            </section>
          </div>

          <!-- Right Column: Order Summary + Shipping + Payment under Total -->
          <div class="checkout-sidebar">
            <div class="native-summary">
              <h3>{{ __('chk.summary') }}</h3>

              <!-- Cart Items List (populated dynamically from Cart / localStorage) -->
              <ul class="native-summary-items" id="summaryItemList">
                <!-- Fallback item if user directly visited checkout with empty cart -->
                <li class="native-sitem">
                  <img src="{{ asset('images/daily-edit.png') }}" class="native-sitem__img" alt="{{ __('chk.fallback_name') }}">
                  <div class="native-sitem__mid">
                    <span class="native-sitem__name">{{ __('chk.fallback_name') }}</span>
                    <span class="native-sitem__qty">{{ __('chk.qty') }} 1</span>
                  </div>
                  <span class="native-sitem__price">$69.00</span>
                </li>
              </ul>

              <!-- Pricing breakdown -->
              <div class="native-breakdown">
                <div class="native-row">
                  <span>{{ __('chk.subtotal') }}</span>
                  <strong id="chkSubtotal">$69.00</strong>
                </div>
                <div class="native-row">
                  <span>{{ __('chk.shipping') }}</span>
                  <span id="chkShipping">$1.50</span>
                </div>
                <div class="native-row native-row--total">
                  <span>{{ __('chk.total') }}</span>
                  <strong class="native-grand-total" id="chkGrandTotal">$70.50</strong>
                </div>
              </div>

              <!-- 2. Shipping Options -->
              <section class="native-sec">
                <div class="native-sec__head">
                  <span class="native-sec__badge">2</span>
                  <h2>{{ __('chk.step2') }}</h2>
                </div>

                <div class="native-options-list">
                  <label class="native-option is-active" data-ship-opt>
                    <input type="radio" name="shipping_method" value="standard" checked onchange="updateShipping(this, 1.50)">
                    <div class="native-option__body">
                      <div class="native-option__title">
                        <strong>{{ __('chk.ship_std') }}</strong>
                        <span class="native-option__price" id="ship-std-price">$1.50</span>
                      </div>
                      <p class="native-option__sub">{{ __('chk.ship_std_sub') }}</p>
                    </div>
                  </label>

                  <label class="native-option" data-ship-opt>
                    <input type="radio" name="shipping_method" value="express" onchange="updateShipping(this, 2.50)">
                    <div class="native-option__body">
                      <div class="native-option__title">
                        <strong>{{ __('chk.ship_exp') }}</strong>
                        <span class="native-option__price">$2.50</span>
                      </div>
                      <p class="native-option__sub">{{ __('chk.ship_exp_sub') }}</p>
                    </div>
                  </label>

                  <label class="native-option" data-ship-opt>
                    <input type="radio" name="shipping_method" value="sameday" onchange="updateShipping(this, 2.00)">
                    <div class="native-option__body">
                      <div class="native-option__title">
                        <strong>{{ __('chk.ship_same') }}</strong>
                        <span class="native-option__price">$2.00</span>
                      </div>
                      <p class="native-option__sub">{{ __('chk.ship_same_sub') }}</p>
                    </div>
                  </label>
                </div>
              </section>

              <!-- 3. Payment Methods -->
              <section class="native-sec">
                <div class="native-sec__head">
                  <span class="native-sec__badge">3</span>
                  <h2>{{ __('chk.step3') }}</h2>
                </div>

                <div class="native-options-list">

                  <!-- Cash on Delivery -->
                  <label class="native-option is-active" data-pay-opt>
                    <input type="radio" name="payment_method" value="cod" checked onchange="togglePaymentMethod('cod')">
                    <div class="native-option__body">
                      <div class="native-option__title">
                        <span class="native-pay-name">{{ __('chk.pay_cod') }}</span>
                      </div>
                      <p class="native-option__sub">{{ __('chk.pay_cod_sub') }}</p>
                    </div>
                  </label>

                  <!-- Bank & KHQR Transfer -->
                  <label class="native-option" data-pay-opt>
                    <input type="radio" name="payment_method" value="bank" onchange="togglePaymentMethod('bank')">
                    <div class="native-option__body">
                      <div class="native-option__title">
                        <span class="native-pay-name">{{ __('chk.pay_bank') }}</span>
                      </div>
                      <p class="native-option__sub">{{ __('chk.pay_bank_sub') }}</p>
                    </div>
                  </label>

                </div>

                <!-- Bank details drawer -->
                <div class="native-bank-panel" id="bankPaymentDetails" style="display: none;">
                  <p class="native-bank-panel__intro">{{ __('chk.bank_intro') }}</p>

                  <div class="native-bank-tabs">
                    <button type="button" class="native-bank-tab is-active" onclick="switchBankTab('khqr', this)">
                      <img src="{{ asset('images/payments/bakong-khqr-icon.png') }}" alt="KHQR">
                      <span>KHQR</span>
                    </button>
                    <button type="button" class="native-bank-tab" onclick="switchBankTab('aba', this)">
                      <img src="{{ asset('images/payments/aba.png') }}" alt="ABA Bank">
                      <span>ABA</span>
                    </button>
                    <button type="button" class="native-bank-tab" onclick="switchBankTab('acleda', this)">
                      <img src="{{ asset('images/payments/acleda.png') }}" alt="ACLEDA Bank">
                      <span>ACLEDA</span>
                    </button>
                    <button type="button" class="native-bank-tab" onclick="switchBankTab('wing', this)">
                      <img src="{{ asset('images/payments/wing.jpg') }}" alt="Wing Bank">
                      <span>Wing</span>
                    </button>
                  </div>

                  <!-- QR & Account Display Card -->
                  <div class="native-qr-display" id="bankDisplayBox">
                    <div class="native-qr-visual">
                      <img src="{{ asset('images/payments/khqr.png') }}" alt="Bakong KHQR Code" class="native-qr-img" id="bankQrImage">
                      <span class="native-qr-scan-tag">{{ __('chk.scan_any') }}</span>
                    </div>
                    <div class="native-qr-meta">
                      <span class="native-meta-label">{{ __('chk.acc_name') }}</span>
                      <strong class="native-meta-val" id="bankAccName">LIVA BOTANICAL SKINCARE</strong>

                      <span class="native-meta-label" style="margin-top: 10px;">{{ __('chk.acc_num') }}</span>
                      <div class="native-copy-val">
                        <strong id="bankAccNum">001 234 567 (USD / KHR)</strong>
                        <button type="button" class="native-copy-btn" onclick="copyAccNum()">{{ __('chk.copy') }}</button>
                      </div>
                      <p class="native-meta-hint">{{ __('chk.bank_hint') }}</p>
                    </div>
                  </div>
                </div>

              </section>

              <!-- Complete Order Button -->
              <div class="native-submit-wrap">
                <button type="submit" class="btn-native-order" id="placeOrderBtn">
                  {{ __('chk.place_order') }} &mdash; <span id="btnTotalDisplay">$0.00</span>
                </button>
                <p class="native-policy-note">{{ __('chk.policy') }}</p>
              </div>

              <!-- Perks -->
              <ul class="native-perks">
                <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M20 6L9 17l-5-5"/></svg> {{ __('chk.perk1') }}</li>
                <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M20 6L9 17l-5-5"/></svg> {{ __('chk.perk2') }}</li>
                <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M20 6L9 17l-5-5"/></svg> {{ __('chk.perk3') }}</li>
              </ul>

            </div>
          </div>

        </form>

      </div>
    </main>

    <!-- Success Modal -->
    <div class="order-modal-overlay" id="orderSuccessModal" style="display: none;">
      <div class="order-modal-card">
        <div class="order-modal-check">✓</div>
        <h2>{{ __('chk.modal_title') }}</h2>
        <p class="order-modal-sub">{{ __('chk.modal_sub') }}</p>

        <div class="order-modal-details">
          <div class="order-modal-row">
            <span>{{ __('chk.modal_order') }}</span>
            <strong id="modalOrderNum">#LIV-89421</strong>
          </div>
          <div class="order-modal-row">
            <span>{{ __('chk.modal_cust') }}</span>
            <strong id="modalCustomer">Chan Dara</strong>
          </div>
          <div class="order-modal-row">
            <span>{{ __('chk.modal_total') }}</span>
            <strong id="modalTotal" style="color: var(--brand);">$70.50</strong>
          </div>
          <div class="order-modal-row">
            <span>{{ __('chk.modal_pay') }}</span>
            <strong id="modalPayment">{{ __('chk.pay_cod') }}</strong>
          </div>
        </div>

        <p class="order-modal-note">{{ __('chk.modal_note') }}</p>
        <a href="{{ route('home') }}" class="btn-emp btn-emp--primary btn-emp--block">{{ __('chk.modal_btn') }}</a>
      </div>
    </div>

    <!-- Toasts -->
    <div class="toasts" data-toasts aria-live="polite" aria-atomic="false"></div>

    @php
      $chkI18n = [
        'qty' => __('chk.qty'),
        'free' => __('chk.free'),
        'accCopied' => __('js.acc_copied'),
        'payBank' => __('chk.pay_bank'),
        'payCod' => __('chk.pay_cod'),
      ];
    @endphp
    <script>window.CHK_I18N = @json($chkI18n);</script>
    <script src="{{ asset('js/vendor/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}?v={{ filemtime(public_path('js/main.js')) }}"></script>
    <script>
      var CHK = window.CHK_I18N || {};
      var currentShippingFee = 1.50;
      var currentSubtotal = 69.00;
      var bankData = {
        khqr: {
          name: "LIVA BOTANICAL SKINCARE",
          num: "001 234 567 (USD / KHR)",
          img: "{{ asset('images/payments/khqr.png') }}"
        },
        aba: {
          name: "LIVA BOTANICAL SKINCARE",
          num: "001 234 567",
          img: "{{ asset('images/payments/khqr.png') }}"
        },
        acleda: {
          name: "LIVA BOTANICAL SKINCARE",
          num: "1234-5678-9012",
          img: "{{ asset('images/payments/khqr.png') }}"
        },
        wing: {
          name: "LIVA BOTANICAL SKINCARE",
          num: "012 345 678",
          img: "{{ asset('images/payments/khqr.png') }}"
        }
      };

      function money(n) { return "$" + parseFloat(n).toFixed(2); }

      function loadCartItems() {
        var items = [];
        try {
          var raw = localStorage.getItem("liva_cart");
          if (raw) items = JSON.parse(raw);
        } catch (e) {}

        var listEl = document.getElementById("summaryItemList");
        if (items && items.length > 0) {
          currentSubtotal = items.reduce(function(s, it) { return s + it.price * it.qty; }, 0);
          listEl.innerHTML = items.map(function(it) {
            return '<li class="native-sitem">' +
              '<img src="' + it.img + '" class="native-sitem__img" alt="' + it.name + '">' +
              '<div class="native-sitem__mid">' +
                '<span class="native-sitem__name">' + it.name + '</span>' +
                '<span class="native-sitem__qty">' + (CHK.qty || 'Qty:') + ' ' + it.qty + '</span>' +
              '</div>' +
              '<span class="native-sitem__price">' + money(it.price * it.qty) + '</span>' +
            '</li>';
          }).join("");
        } else {
          currentSubtotal = 69.00;
        }

        if (currentSubtotal >= 49) {
          currentShippingFee = 0;
        }
        recalculateTotal();
      }

      function updateShipping(radio, fee) {
        document.querySelectorAll("[data-ship-opt]").forEach(function(el) {
          el.classList.toggle("is-active", el.contains(radio));
        });
        currentShippingFee = (currentSubtotal >= 49 && radio.value === "standard") ? 0 : fee;
        recalculateTotal();
      }

      function recalculateTotal() {
        var freeText = CHK.free || "FREE";
        var stdPriceEl = document.getElementById("ship-std-price");
        if (currentSubtotal >= 49 && stdPriceEl) {
          stdPriceEl.textContent = freeText;
        }
        var total = currentSubtotal + currentShippingFee;
        document.getElementById("chkSubtotal").textContent = money(currentSubtotal);
        document.getElementById("chkShipping").textContent = currentShippingFee === 0 ? freeText : money(currentShippingFee);
        document.getElementById("chkGrandTotal").textContent = money(total);
        document.getElementById("btnTotalDisplay").textContent = money(total);
      }

      function togglePaymentMethod(type) {
        var bankPanel = document.getElementById("bankPaymentDetails");
        var opts = document.querySelectorAll("[data-pay-opt]");
        opts.forEach(function(opt) {
          var isCurrent = opt.querySelector('input[value="' + type + '"]');
          opt.classList.toggle("is-active", !!isCurrent);
        });
        bankPanel.style.display = type === "bank" ? "block" : "none";
      }

      function switchBankTab(key, btn) {
        document.querySelectorAll(".native-bank-tab").forEach(function(t) { t.classList.remove("is-active"); });
        btn.classList.add("is-active");
        var d = bankData[key] || bankData.khqr;
        document.getElementById("bankAccName").textContent = d.name;
        document.getElementById("bankAccNum").textContent = d.num;
        document.getElementById("bankQrImage").src = d.img;
      }

      function copyAccNum() {
        var num = document.getElementById("bankAccNum").textContent;
        if (navigator.clipboard) {
          navigator.clipboard.writeText(num);
          if (window.toast) window.toast((CHK.accCopied || "Account number copied: ") + num);
        }
      }

      function handleOrderSubmit() {
        var name = document.getElementById("username").value.trim();
        var phone = document.getElementById("phone").value.trim();
        var addr = document.getElementById("address").value.trim();
        if (!name || !phone || !addr) return;

        var isBank = document.querySelector('input[name="payment_method"]:checked').value === "bank";
        var payMethodName = isBank ? (CHK.payBank || "Bank Transfer / KHQR") : (CHK.payCod || "Cash on Delivery");
        var orderNum = "#LIV-" + Math.floor(10000 + Math.random() * 90000);

        document.getElementById("modalOrderNum").textContent = orderNum;
        document.getElementById("modalCustomer").textContent = name + " (" + phone + ")";
        document.getElementById("modalTotal").textContent = money(currentSubtotal + currentShippingFee);
        document.getElementById("modalPayment").textContent = payMethodName;

        try {
          if (window.Cart && window.Cart.clear) window.Cart.clear();
          localStorage.removeItem("liva_cart");
        } catch (e) {}

        document.getElementById("orderSuccessModal").style.display = "flex";
      }

      document.addEventListener("DOMContentLoaded", function() {
        loadCartItems();
      });
    </script>
  </body>
</html>
