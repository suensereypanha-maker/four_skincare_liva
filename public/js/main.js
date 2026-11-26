/* =============================================================
   Emporium — vanilla JavaScript (no jQuery)
   One function per feature · guard clauses · IntersectionObserver
   ============================================================= */
(function () {
  "use strict";

  var I18N = window.LIVA_I18N || {};
  function t(key, fallback) {
    return Object.prototype.hasOwnProperty.call(I18N, key) && I18N[key] ? I18N[key] : fallback;
  }
  function copyText(text) {
    if (navigator.clipboard && navigator.clipboard.writeText) {
      return navigator.clipboard.writeText(text).catch(function () {});
    }
    var ta = document.createElement("textarea");
    ta.value = text;
    ta.setAttribute("readonly", "");
    ta.style.position = "fixed";
    ta.style.opacity = "0";
    document.body.appendChild(ta);
    ta.select();
    try { document.execCommand("copy"); } catch (e) {}
    document.body.removeChild(ta);
    return Promise.resolve();
  }

  var DEFAULT_IMG = window.location.pathname.indexOf("/km/") !== -1
    ? "../images/hair-mask.webp"
    : (window.location.pathname.indexOf(".html") !== -1 ? "images/hair-mask.webp" : "/images/hair-mask.webp");
  function resolveImg(path) {
    if (!path) return DEFAULT_IMG;
    if (window.location.pathname.indexOf("/km/") !== -1 && path.indexOf("/images/") === 0) {
      return ".." + path;
    }
    if (window.location.pathname.indexOf(".html") !== -1 && path.indexOf("/images/") === 0) {
      return path.slice(1);
    }
    return path;
  }

  var reduceMotion = window.matchMedia("(prefers-reduced-motion: reduce)").matches;
  var money = function (n) {
    if (typeof n === "string") {
      n = parseFloat(n.replace(/[^0-9.]/g, ""));
    }
    if (typeof n !== "number" || isNaN(n)) n = 0;
    return "$" + n.toFixed(2);
  };

  /* ---------- Sticky header shadow ---------- */
  function initStickyHeader() {
    var header = document.getElementById("site-header");
    if (!header) return;
    var onScroll = function () {
      header.classList.toggle("is-stuck", window.scrollY > 8);
    };
    onScroll();
    window.addEventListener("scroll", onScroll, { passive: true });
  }

  /* ---------- Mobile menu ---------- */
  function initMobileMenu() {
    var toggle = document.querySelector("[data-menu-toggle]");
    var menu = document.getElementById("mobileMenu");
    if (!toggle || !menu) return;

    var open = function () {
      menu.hidden = false;
      requestAnimationFrame(function () { menu.classList.add("is-open"); });
      toggle.setAttribute("aria-expanded", "true");
      document.body.classList.add("menu-open");
    };
    var close = function () {
      menu.classList.remove("is-open");
      toggle.setAttribute("aria-expanded", "false");
      document.body.classList.remove("menu-open");
      window.setTimeout(function () { menu.hidden = true; }, 300);
    };

    toggle.addEventListener("click", function () {
      if (toggle.getAttribute("aria-expanded") === "true") close(); else open();
    });
    menu.addEventListener("click", function (e) {
      if (e.target.closest("a")) close();
    });
    document.addEventListener("keydown", function (e) {
      if (e.key === "Escape" && toggle.getAttribute("aria-expanded") === "true") close();
    });
  }

  /* ---------- Reveal on scroll ---------- */
  function initReveal() {
    var items = document.querySelectorAll(".reveal");
    if (!items.length) return;
    if (reduceMotion || !("IntersectionObserver" in window)) {
      items.forEach(function (el) { el.classList.add("in"); });
      return;
    }
    var io = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          entry.target.classList.add("in");
          io.unobserve(entry.target);
        }
      });
    }, { threshold: 0.05, rootMargin: "0px 0px 100px 0px" });
    items.forEach(function (el) { io.observe(el); });

    // Fallback safeguard: guarantee all elements are visible
    window.setTimeout(function () {
      items.forEach(function (el) { el.classList.add("in"); });
    }, 1200);
  }

  /* ---------- Product filtering ---------- */
  function initFilters() {
    var buttons = document.querySelectorAll(".filter");
    var cards = document.querySelectorAll("[data-products] .pcard");
    var empty = document.querySelector("[data-empty]");
    var navLinks = document.querySelectorAll(".emp-catbar__list a, .emp-mobile__list a");
    if (!cards.length) return;

    function apply(cat) {
      var visible = 0;
      cards.forEach(function (card) {
        var rawCats = card.getAttribute("data-category") || "";
        var cats = rawCats.split(/\s+/);
        var match = cat === "all" || cats.indexOf(cat) !== -1;
        card.classList.toggle("is-hidden", !match);
        if (match) {
          card.classList.add("in");
          visible++;
        }
      });
      if (empty) empty.hidden = visible !== 0;

      // Update filter pill buttons
      buttons.forEach(function (b) {
        var active = b.getAttribute("data-filter") === cat;
        b.classList.toggle("is-active", active);
        b.setAttribute("aria-selected", active ? "true" : "false");
      });

      // Update top navbar active state
      navLinks.forEach(function (link) {
        var linkCat = link.getAttribute("data-nav-category") || link.getAttribute("data-filter-link");
        if (linkCat) {
          var isCurrent = (cat === linkCat);
          link.classList.toggle("is-current", isCurrent);
        }
      });
    }

    buttons.forEach(function (btn) {
      btn.addEventListener("click", function () {
        apply(btn.getAttribute("data-filter"));
      });
    });

    // Category deep-links (nav / footer / tiles)
    document.querySelectorAll("[data-filter-link]").forEach(function (link) {
      link.addEventListener("click", function (e) {
        var cat = link.getAttribute("data-filter-link");
        if (cat) {
          apply(cat);
          var href = link.getAttribute("href") || "";
          if (href.indexOf("#products") !== -1 || href === "#categories") {
            var target = document.getElementById("products");
            if (target) {
              e.preventDefault();
              target.scrollIntoView({ behavior: reduceMotion ? "auto" : "smooth", block: "start" });
            }
          }
        }
      });
    });

    // Check URL query param or hash on load (e.g. ?category=sets or #sets)
    try {
      var params = new URLSearchParams(window.location.search);
      var queryCat = params.get("category");
      if (queryCat) {
        apply(queryCat);
        if (window.location.hash.indexOf("#products") !== -1 || queryCat === "sets") {
          window.setTimeout(function () {
            var target = document.getElementById("products");
            if (target) target.scrollIntoView({ behavior: reduceMotion ? "auto" : "smooth", block: "start" });
          }, 180);
        }
      } else if (window.location.hash === "#sets") {
        apply("sets");
      }
    } catch (e) {}
  }

  /* ---------- Wishlist / Favorites Module ---------- */
  var Wishlist = (function () {
    var KEY = "liva_favorites";
    var items = [];
    var els = {};

    function load() {
      try {
        var raw = localStorage.getItem(KEY);
        items = raw ? JSON.parse(raw) : [];
        if (!Array.isArray(items)) items = [];
        items = items.filter(function (it) {
          return it && typeof it === "object";
        }).map(function (it) {
          var p = parseFloat(it.price);
          return {
            id: String(it.id || ("fav-" + Math.random().toString(36).substr(2, 6))),
            name: String(it.name || "Skincare Product"),
            price: isNaN(p) ? 24.00 : p,
            img: resolveImg(String(it.img || DEFAULT_IMG))
          };
        });
      } catch (e) {
        items = [];
      }
    }

    function persist() {
      try {
        localStorage.setItem(KEY, JSON.stringify(items));
      } catch (e) {}
    }

    function cache() {
      els.drawer = document.getElementById("wishlistDrawer");
      els.overlay = document.querySelector("[data-wishlist-overlay]");
      els.list = document.querySelector("[data-wishlist-items]");
      els.empty = document.querySelector("[data-wishlist-empty]");
      els.foot = document.querySelector("[data-wishlist-foot]");
      els.counts = document.querySelectorAll("[data-wishlist-count]");
      els.countText = document.querySelector("[data-wishlist-count-text]");
    }

    function count() { return items.length; }

    function syncHeartButtons() {
      var ids = items.map(function (it) { return it.id; });
      document.querySelectorAll(".pcard__wish, .pdp__wish, [data-wish-btn], [data-set-wishlist]").forEach(function (btn) {
        var card = btn.closest(".pcard, .scard, .deal__card, .pdp") || document;
        var cartBtn = card.querySelector("[data-add-to-cart]");
        var id = btn.getAttribute("data-id") || (cartBtn && cartBtn.getAttribute("data-id"));
        var active = ids.indexOf(id) !== -1;
        btn.setAttribute("aria-pressed", active ? "true" : "false");
        btn.classList.toggle("is-active", active);
        if (btn.hasAttribute("data-set-wishlist")) {
          var label = btn.querySelector("span");
          if (label) label.textContent = active ? t("inWishlist", "In Wishlist") : t("addToWishlist", "Add To Wishlist");
        }
      });
    }

    function render() {
      cache();
      var n = count();
      els.counts.forEach(function (c) {
        c.textContent = n;
        c.setAttribute("data-count", n);
        if (n > 0) {
          c.style.display = "";
          c.classList.remove("pop");
          void c.offsetWidth;
          c.classList.add("pop");
        } else {
          c.style.display = "none";
        }
      });
      if (els.countText) els.countText.textContent = "(" + n + ")";

      var isEmpty = n === 0;
      if (els.empty) els.empty.style.display = isEmpty ? "flex" : "none";
      if (els.foot) els.foot.hidden = isEmpty;

      if (els.list) {
        els.list.style.display = isEmpty ? "none" : "block";
        if (!isEmpty) {
          els.list.innerHTML = items.map(function (it) {
            var itemImg = resolveImg(it.img || DEFAULT_IMG);
            return '<li class="witem">' +
              '<img class="witem__img" src="' + itemImg + '" width="64" height="64" alt="' + it.name + '" loading="lazy">' +
              '<div class="witem__mid">' +
                '<span class="witem__name">' + it.name + '</span>' +
                '<span class="witem__price">' + money(it.price) + '</span>' +
              '</div>' +
              '<div class="witem__right">' +
                '<button type="button" class="witem__addbtn" data-wish-to-cart="' + it.id + '">' + t("wishAddToCart", "+ Add to Cart") + '</button>' +
                '<button type="button" class="witem__remove" data-wish-remove="' + it.id + '">' + t("remove", "Remove") + '</button>' +
              '</div>' +
            '</li>';
          }).join("");
        } else {
          els.list.innerHTML = "";
        }
      }

      syncHeartButtons();
    }

    function toggle(product, shouldOpen) {
      var idx = -1;
      for (var i = 0; i < items.length; i++) {
        if (items[i].id === product.id) { idx = i; break; }
      }
      if (idx !== -1) {
        items.splice(idx, 1);
        persist();
        render();
        toast(t("removedFav", "Removed from favorites"));
        return false;
      } else {
        items.push({
          id: String(product.id || ("fav-" + Math.random().toString(36).substr(2, 6))),
          name: String(product.name || "Skincare Product"),
          price: parseFloat(product.price) || 24.00,
          img: resolveImg(String(product.img || DEFAULT_IMG))
        });
        persist();
        render();
        toast(t("addedFav", "Added to favorites"));
        if (shouldOpen !== false) {
          open();
        }
        return true;
      }
    }

    function remove(id) {
      items = items.filter(function (it) { return it.id !== id; });
      persist();
      render();
      toast(t("removedFav", "Removed from favorites"));
    }

    function clear() {
      items = [];
      persist();
      render();
      toast(t("clearedFav", "Favorites cleared"));
    }

    function open() {
      cache();
      render();
      if (!els.drawer) {
        console.warn("Wishlist drawer element #wishlistDrawer not found in DOM");
        return;
      }
      if (window.Cart && typeof window.Cart.close === "function") {
        window.Cart.close();
      }
      els.drawer.classList.add("is-open");
      els.drawer.setAttribute("aria-hidden", "false");
      if (els.overlay) {
        els.overlay.hidden = false;
        requestAnimationFrame(function () { els.overlay.classList.add("is-open"); });
      }
      document.body.classList.add("menu-open");
    }

    function close() {
      if (!els.drawer) return;
      els.drawer.classList.remove("is-open");
      els.drawer.setAttribute("aria-hidden", "true");
      if (els.overlay) {
        els.overlay.classList.remove("is-open");
        window.setTimeout(function () { els.overlay.hidden = true; }, 320);
      }
      document.body.classList.remove("menu-open");
    }

    function init() {
      load();
      cache();
      render();

      document.querySelectorAll("[data-wishlist-open]").forEach(function (btn) {
        btn.addEventListener("click", function (e) {
          e.preventDefault();
          open();
        });
      });
      document.querySelectorAll("[data-wishlist-close]").forEach(function (btn) {
        btn.addEventListener("click", close);
      });
      if (els.overlay) els.overlay.addEventListener("click", close);

      document.addEventListener("keydown", function (e) {
        if (e.key === "Escape" && els.drawer && els.drawer.classList.contains("is-open")) close();
      });

      document.querySelectorAll(".pcard__wish, .pdp__wish, [data-wish-btn], [data-set-wishlist]").forEach(function (btn) {
        btn.addEventListener("click", function (e) {
          e.preventDefault();
          e.stopPropagation();
          var card = btn.closest(".pcard, .scard, .deal__card, .pdp") || document;
          var cartBtn = card.querySelector("[data-add-to-cart]");
          var id = btn.getAttribute("data-id") || (cartBtn && cartBtn.getAttribute("data-id")) || ("fav-" + Math.random().toString(36).substr(2, 6));
          var name = btn.getAttribute("data-name") || (cartBtn && cartBtn.getAttribute("data-name")) || "Skincare Product";
          var price = parseFloat(btn.getAttribute("data-price") || (cartBtn && cartBtn.getAttribute("data-price")) || "24.00");
          var img = btn.getAttribute("data-img") || (cartBtn && cartBtn.getAttribute("data-img")) || "";

          toggle({ id: id, name: name, price: price, img: img }, true);
        });
      });

      // Global delegation for open/close and item actions so clicks NEVER fail
      document.addEventListener("click", function (e) {
        var openBtn = e.target.closest("[data-wishlist-open]");
        if (openBtn) {
          e.preventDefault();
          open();
          return;
        }
        var closeBtn = e.target.closest("[data-wishlist-close]");
        if (closeBtn) {
          e.preventDefault();
          close();
          return;
        }
        var addBtn = e.target.closest("[data-wish-to-cart]");
        var remBtn = e.target.closest("[data-wish-remove]");
        if (addBtn) {
          e.preventDefault();
          var id = addBtn.getAttribute("data-wish-to-cart");
          var it = items.filter(function (x) { return x.id === id; })[0];
          if (it && window.Cart) {
            window.Cart.add({ id: it.id, name: it.name, price: it.price, img: it.img }, 1);
            toast(t("movedToCart", "Moved :name to cart").replace(":name", it.name));
            close();
            window.Cart.open();
          }
        } else if (remBtn) {
          e.preventDefault();
          remove(remBtn.getAttribute("data-wish-remove"));
        }
      });

      document.querySelectorAll("[data-wishlist-add-all]").forEach(function (btn) {
        btn.addEventListener("click", function () {
          if (items.length && window.Cart) {
            items.forEach(function (it) {
              window.Cart.add({ id: it.id, name: it.name, price: it.price, img: it.img }, 1);
            });
            toast(t("addedAllFav", "Added all favorites to cart"));
            close();
            window.Cart.open();
          }
        });
      });

      document.querySelectorAll("[data-wishlist-clear]").forEach(function (btn) {
        btn.addEventListener("click", clear);
      });
    }

    return {
      init: init,
      open: open,
      close: close,
      toggle: toggle,
      remove: remove,
      clear: clear,
      getItems: function () { return items; },
      count: count
    };
  })();

  /* ---------- Wishlist toggles ---------- */
  function initWishlist() {
    Wishlist.init();
  }

  /* ---------- Countdown ---------- */
  function initCountdown() {
    var root = document.querySelector("[data-countdown]");
    if (!root) return;
    var out = {
      hours: root.querySelector('[data-cd="hours"]'),
      minutes: root.querySelector('[data-cd="minutes"]'),
      seconds: root.querySelector('[data-cd="seconds"]')
    };
    // Deal ends at next local midnight
    function target() {
      var t = new Date();
      t.setHours(24, 0, 0, 0);
      return t;
    }
    var end = target();
    var pad = function (n) { return String(n).padStart(2, "0"); };

    function tick() {
      var diff = end - new Date();
      if (diff <= 0) { end = target(); diff = end - new Date(); }
      var h = Math.floor(diff / 3.6e6);
      var m = Math.floor((diff % 3.6e6) / 6e4);
      var s = Math.floor((diff % 6e4) / 1000);
      if (out.hours) out.hours.textContent = pad(h);
      if (out.minutes) out.minutes.textContent = pad(m);
      if (out.seconds) out.seconds.textContent = pad(s);
    }
    tick();
    window.setInterval(tick, 1000);
  }

  /* ---------- Best sellers scroller ---------- */
  function initScroller() {
    var scroller = document.querySelector("[data-scroller]");
    if (!scroller) return;
    document.querySelectorAll("[data-scroll]").forEach(function (btn) {
      btn.addEventListener("click", function () {
        var amount = Math.round(scroller.clientWidth * 0.8);
        scroller.scrollBy({
          left: btn.getAttribute("data-scroll") === "next" ? amount : -amount,
          behavior: reduceMotion ? "auto" : "smooth"
        });
      });
    });
  }

  /* ---------- Cart ---------- */
  var Cart = (function () {
    var items = [];
    try {
      var saved = localStorage.getItem("liva_cart");
      if (saved) items = JSON.parse(saved);
      if (!Array.isArray(items)) items = [];
    } catch (e) {
      items = [];
    }

    var FREE_SHIP = 49;

    function persist() {
      try {
        localStorage.setItem("liva_cart", JSON.stringify(items));
      } catch (e) {}
    }

    var els = {};
    function q(sel) { return document.querySelector(sel); }

    function cache() {
      els.drawer = document.getElementById("cartDrawer");
      els.overlay = q("[data-cart-overlay]");
      els.list = q("[data-cart-items]");
      els.empty = q("[data-cart-empty]");
      els.foot = q("[data-cart-foot]");
      els.subtotal = q("[data-cart-subtotal]");
      els.shipMsg = q("[data-ship-msg]");
      els.shipBar = q("[data-ship-bar]");
      els.counts = document.querySelectorAll("[data-cart-count]");
      els.countText = q("[data-cart-count-text]");
    }

    function count() { return items.reduce(function (n, it) { return n + it.qty; }, 0); }
    function subtotal() { return items.reduce(function (s, it) { return s + it.price * it.qty; }, 0); }

    function render() {
      var n = count();
      els.counts.forEach(function (c) {
        c.textContent = n;
        if (n > 0) { c.classList.remove("pop"); void c.offsetWidth; c.classList.add("pop"); }
      });
      if (els.countText) els.countText.textContent = "(" + n + ")";

      var isEmpty = items.length === 0;
      if (els.empty) els.empty.style.display = isEmpty ? "" : "none";
      if (els.foot) els.foot.hidden = isEmpty;
      if (els.list) els.list.style.display = isEmpty ? "none" : "";

      if (els.list) {
        els.list.innerHTML = items.map(function (it) {
          return '<li class="citem">' +
            '<img class="citem__img" src="' + resolveImg(it.img) + '" width="64" height="64" alt="" loading="lazy">' +
            '<div class="citem__mid">' +
              '<span class="citem__name">' + it.name + '</span>' +
              '<span class="citem__price">' + money(it.price) + ' ' + t("each", "each") + '</span>' +
              '<div class="citem__ctrls">' +
                '<button type="button" class="citem__qtybtn" data-dec="' + it.id + '" aria-label="Decrease quantity of ' + it.name + '">−</button>' +
                '<span class="citem__qty">' + it.qty + '</span>' +
                '<button type="button" class="citem__qtybtn" data-inc="' + it.id + '" aria-label="Increase quantity of ' + it.name + '">+</button>' +
              '</div>' +
            '</div>' +
            '<div class="citem__right">' +
              '<span class="citem__line">' + money(it.price * it.qty) + '</span>' +
              '<button type="button" class="citem__remove" data-remove="' + it.id + '">' + t("remove", "Remove") + '</button>' +
            '</div>' +
          '</li>';
        }).join("");
      }

      if (els.subtotal) els.subtotal.textContent = money(subtotal());

      // Free shipping progress
      var sub = subtotal();
      var pct = Math.min(100, Math.round((sub / FREE_SHIP) * 100));
      if (els.shipBar) els.shipBar.style.width = pct + "%";
      if (els.shipMsg) {
        if (sub >= FREE_SHIP) {
          els.shipMsg.innerHTML = "🎉 " + t("shipFree", "You've unlocked free shipping!");
          els.shipMsg.classList.add("is-free");
        } else {
          els.shipMsg.innerHTML = t("shipMore", "Add :amount more for free shipping").replace(":amount", "<strong>" + money(FREE_SHIP - sub) + "</strong>");
          els.shipMsg.classList.remove("is-free");
        }
      }
    }

    function add(product, qty) {
      qty = qty || 1;
      var existing = items.filter(function (it) { return it.id === product.id; })[0];
      if (existing) existing.qty += qty;
      else items.push({ id: product.id, name: product.name, price: product.price, img: product.img, qty: qty });
      persist();
      render();
      toast(product.name + " " + t("addedToCart", "added to cart"));
    }

    var lastFocus = null;
    function open() {
      if (!els.drawer) return;
      lastFocus = document.activeElement;
      els.overlay.hidden = false;
      requestAnimationFrame(function () {
        els.overlay.classList.add("is-open");
        els.drawer.classList.add("is-open");
      });
      els.drawer.setAttribute("aria-hidden", "false");
      document.body.classList.add("menu-open");
      var closeBtn = els.drawer.querySelector("[data-cart-close]");
      if (closeBtn) closeBtn.focus();
    }
    function close() {
      if (!els.drawer) return;
      els.overlay.classList.remove("is-open");
      els.drawer.classList.remove("is-open");
      els.drawer.setAttribute("aria-hidden", "true");
      document.body.classList.remove("menu-open");
      window.setTimeout(function () { if (els.overlay) els.overlay.hidden = true; }, 320);
      if (lastFocus && lastFocus.focus) lastFocus.focus();
    }

    function trapFocus(e) {
      if (e.key !== "Tab" || !els.drawer.classList.contains("is-open")) return;
      var f = els.drawer.querySelectorAll('button, [href], input, [tabindex]:not([tabindex="-1"])');
      f = Array.prototype.filter.call(f, function (el) { return el.offsetParent !== null; });
      if (!f.length) return;
      var first = f[0], last = f[f.length - 1];
      if (e.shiftKey && document.activeElement === first) { e.preventDefault(); last.focus(); }
      else if (!e.shiftKey && document.activeElement === last) { e.preventDefault(); first.focus(); }
    }

    function init() {
      cache();
      if (!els.drawer) return;

      document.querySelectorAll("[data-cart-open]").forEach(function (b) {
        b.addEventListener("click", open);
      });
      document.querySelectorAll("[data-cart-close]").forEach(function (b) {
        b.addEventListener("click", close);
      });
      if (els.overlay) els.overlay.addEventListener("click", close);

      document.addEventListener("keydown", function (e) {
        if (e.key === "Escape" && els.drawer.classList.contains("is-open")) close();
        trapFocus(e);
      });

      // Add-to-cart buttons
      document.querySelectorAll("[data-add-to-cart]").forEach(function (btn) {
        btn.addEventListener("click", function () {
          var qty = 1;
          if (btn.hasAttribute("data-qty-source")) {
            var qEl = document.querySelector("[data-qty]");
            if (qEl) qty = Math.max(1, parseInt(qEl.value, 10) || 1);
          }
          add({
            id: btn.getAttribute("data-id"),
            name: btn.getAttribute("data-name"),
            price: parseFloat(btn.getAttribute("data-price")),
            img: btn.getAttribute("data-img")
          }, qty);
          open();
        });
      });

      // Delegated qty / remove
      if (els.list) {
        els.list.addEventListener("click", function (e) {
          var inc = e.target.closest("[data-inc]");
          var dec = e.target.closest("[data-dec]");
          var rem = e.target.closest("[data-remove]");
          if (inc) changeQty(inc.getAttribute("data-inc"), 1);
          else if (dec) changeQty(dec.getAttribute("data-dec"), -1);
          else if (rem) remove(rem.getAttribute("data-remove"));
        });
      }

      render();
    }

    function changeQty(id, delta) {
      var it = items.filter(function (x) { return x.id === id; })[0];
      if (!it) return;
      it.qty += delta;
      if (it.qty < 1) { remove(id); return; }
      persist();
      render();
    }
    function remove(id) {
      items = items.filter(function (x) { return x.id !== id; });
      persist();
      render();
    }
    function clear() {
      items = [];
      persist();
      render();
    }

    return {
      init: init,
      open: open,
      close: close,
      add: add,
      clear: clear,
      getItems: function () { return items; },
      getSubtotal: subtotal
    };
  })();
  window.Cart = Cart;
  window.Wishlist = Wishlist;
  window.toast = toast;

  /* ---------- Toasts ---------- */
  var toastHost;
  function toast(msg) {
    if (!toastHost) toastHost = document.querySelector("[data-toasts]");
    if (!toastHost) return;
    var el = document.createElement("div");
    el.className = "toast";
    el.innerHTML = '<span class="toast__check" aria-hidden="true">' +
      '<svg width="14" height="14" viewBox="0 0 24 24" fill="none"><path d="m5 12 4 4 10-10" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"/></svg>' +
      '</span><span>' + msg + '</span>';
    toastHost.appendChild(el);
    requestAnimationFrame(function () { el.classList.add("in"); });
    window.setTimeout(function () {
      el.classList.remove("in");
      window.setTimeout(function () { el.remove(); }, 300);
    }, 2600);
  }

  /* ---------- Quantity stepper (PDP) ---------- */
  function initStepper() {
    var stepper = document.querySelector("[data-stepper]");
    if (!stepper) return;
    var input = stepper.querySelector("[data-qty]");
    stepper.querySelectorAll("[data-step]").forEach(function (btn) {
      btn.addEventListener("click", function () {
        var v = Math.max(1, (parseInt(input.value, 10) || 1) + parseInt(btn.getAttribute("data-step"), 10));
        input.value = v;
      });
    });
    input.addEventListener("input", function () {
      var v = input.value.replace(/[^0-9]/g, "");
      input.value = v === "" ? "" : String(Math.max(1, parseInt(v, 10)));
    });
    input.addEventListener("blur", function () {
      if (!input.value || parseInt(input.value, 10) < 1) input.value = "1";
    });
  }

  /* ---------- Gallery thumbnail swap ---------- */
  function initGallery() {
    var main = document.querySelector("[data-main-image]");
    var thumbs = document.querySelectorAll("[data-thumb]");
    if (!main || !thumbs.length) return;

    function activateThumb(idx) {
      if (idx < 0) idx = thumbs.length - 1;
      if (idx >= thumbs.length) idx = 0;
      var thumb = thumbs[idx];
      if (!thumb) return;
      var full = thumb.getAttribute("data-full");
      if (full) {
        main.src = full;
        var thumbImg = thumb.querySelector("img");
        if (thumbImg && thumbImg.alt) main.alt = thumbImg.alt;
      }
      thumbs.forEach(function (t, i) {
        t.classList.toggle("is-active", i === idx);
        t.setAttribute("aria-selected", i === idx ? "true" : "false");
      });
      thumb.scrollIntoView({ block: "nearest", inline: "nearest" });
    }

    thumbs.forEach(function (thumb, i) {
      thumb.addEventListener("click", function (e) {
        e.preventDefault();
        activateThumb(i);
      });
    });

    var upBtn = document.querySelector("[data-thumb-up]");
    var downBtn = document.querySelector("[data-thumb-down]");
    if (upBtn) {
      upBtn.addEventListener("click", function (e) {
        e.preventDefault();
        var current = 0;
        thumbs.forEach(function (t, i) {
          if (t.classList.contains("is-active")) current = i;
        });
        activateThumb(current - 1);
      });
    }
    if (downBtn) {
      downBtn.addEventListener("click", function (e) {
        e.preventDefault();
        var current = 0;
        thumbs.forEach(function (t, i) {
          if (t.classList.contains("is-active")) current = i;
        });
        activateThumb(current + 1);
      });
    }

    // Global delegation safeguard for thumbnails
    document.addEventListener("click", function (e) {
      var thumb = e.target.closest("[data-thumb]");
      if (thumb) {
        var allThumbs = document.querySelectorAll("[data-thumb]");
        var idx = Array.prototype.indexOf.call(allThumbs, thumb);
        if (idx !== -1) {
          activateThumb(idx);
        }
      }
    });
  }

  /* ---------- Set Product Bundle UX ---------- */
  function initSetProduct() {
    var items = document.querySelectorAll("[data-bundle-item]");
    var addBtn = document.getElementById("setAddToCartBtn");
    if (!items.length) return;

    function updateTotal() {
      var total = 0;
      items.forEach(function (item) {
        var input = item.querySelector(".set-stepper__input");
        var qty = parseInt(input ? input.value : 0, 10) || 0;
        if (qty > 0) {
          total += parseFloat(item.getAttribute("data-price") || 0) * qty;
        }
      });
      if (addBtn) {
        var baseAddLabel = t("addToCart", "Add To Cart");
        addBtn.textContent = total > 0 ? baseAddLabel + " · $" + total.toFixed(2) : baseAddLabel;
      }
    }

    // Steppers and row click selection inside set product box
    items.forEach(function (item) {
      var stepper = item.querySelector("[data-item-stepper]");
      var input = item.querySelector(".set-stepper__input");
      if (!input) return;

      // Row click toggles between 0 and 1 (unless clicking directly on stepper buttons)
      item.addEventListener("click", function (e) {
        if (e.target.closest("[data-item-stepper]") || e.target.closest("button")) return;
        var cur = parseInt(input.value, 10) || 0;
        var next = cur > 0 ? 0 : 1;
        input.value = next;
        item.classList.toggle("is-selected", next > 0);
        updateTotal();
      });

      if (stepper) {
        stepper.querySelectorAll("[data-step]").forEach(function (btn) {
          btn.addEventListener("click", function (e) {
            e.preventDefault();
            e.stopPropagation();
            var delta = parseInt(btn.getAttribute("data-step"), 10) || 0;
            var cur = parseInt(input.value, 10) || 0;
            var next = Math.max(0, cur + delta);
            input.value = next;
            item.classList.toggle("is-selected", next > 0);
            updateTotal();
          });
        });
      }
    });

    // Global delegation safeguard for stepper buttons
    document.addEventListener("click", function (e) {
      var stepBtn = e.target.closest("[data-step]");
      if (stepBtn && stepBtn.closest("[data-item-stepper]")) {
        e.preventDefault();
        e.stopPropagation();
        var stepper = stepBtn.closest("[data-item-stepper]");
        var input = stepper.querySelector(".set-stepper__input");
        var item = stepBtn.closest("[data-bundle-item]");
        if (input) {
          var delta = parseInt(stepBtn.getAttribute("data-step"), 10) || 0;
          var cur = parseInt(input.value, 10) || 0;
          var next = Math.max(0, cur + delta);
          input.value = next;
          if (item) item.classList.toggle("is-selected", next > 0);
          updateTotal();
        }
      }
    });

    // Add to Cart
    if (addBtn) {
      addBtn.addEventListener("click", function (e) {
        e.preventDefault();
        var selected = [];
        items.forEach(function (item) {
          var input = item.querySelector(".set-stepper__input");
          var qty = parseInt(input ? input.value : 0, 10) || 0;
          if (qty > 0) {
            selected.push({
              id: item.getAttribute("data-id") || ("bundle-" + Math.random().toString(36).substr(2, 6)),
              name: item.getAttribute("data-name") || "Skincare Set Item",
              price: parseFloat(item.getAttribute("data-price")) || 24.00,
              img: resolveImg(item.getAttribute("data-img") || DEFAULT_IMG),
              qty: qty
            });
          }
        });

        // If no items individually selected, default to adding 1 of the first item
        if (selected.length === 0) {
          var first = items[0];
          var firstInput = first.querySelector(".set-stepper__input");
          if (firstInput) {
            firstInput.value = "1";
            first.classList.add("is-selected");
          }
          selected.push({
            id: first.getAttribute("data-id") || "bundle-1",
            name: first.getAttribute("data-name") || "Charlotte Tilbury Magic Skin Duo",
            price: parseFloat(first.getAttribute("data-price")) || 69.00,
            img: resolveImg(first.getAttribute("data-img") || DEFAULT_IMG),
            qty: 1
          });
        }

        selected.forEach(function (it) {
          Cart.add({ id: it.id, name: it.name, price: it.price, img: it.img }, it.qty);
        });
        Cart.open();
        updateTotal();
      });
    }

    // Sub-actions (compare, share, social sharing; wishlist is handled by Wishlist module)
    var compBtn = document.querySelector("[data-set-compare]");
    if (compBtn) {
      compBtn.addEventListener("click", function () {
        toast(t("addedCompare", "Added to comparison list"));
      });
    }
    var shareBtn = document.querySelector("[data-set-share]");
    if (shareBtn) {
      shareBtn.addEventListener("click", function () {
        copyText(window.location.href).then(function () {
          toast(t("linkCopied", "Product link copied to clipboard!"));
        });
      });
    }

    // Telegram, Instagram, Facebook sharing on /product
    var shareUrl = window.location.href;
    var titleEl = document.getElementById("pdp-title");
    var shareTitle = titleEl ? titleEl.textContent.trim() : document.title;
    var tgShare = document.querySelector("[data-share-telegram]");
    if (tgShare) {
      tgShare.href = "https://t.me/share/url?url=" + encodeURIComponent(shareUrl) + "&text=" + encodeURIComponent(shareTitle);
    }
    var fbShare = document.querySelector("[data-share-facebook]");
    if (fbShare) {
      fbShare.href = "https://www.facebook.com/sharer/sharer.php?u=" + encodeURIComponent(shareUrl);
    }
    var igShare = document.querySelector("[data-share-instagram]");
    if (igShare) {
      igShare.addEventListener("click", function () {
        copyText(shareUrl).then(function () {
          toast(t("instagramCopied", "Product link copied! Paste in Instagram to share."));
        });
        if (navigator.share && ("ontouchstart" in window || navigator.maxTouchPoints > 0)) {
          navigator.share({ title: shareTitle, url: shareUrl }).catch(function () {});
        }
      });
    }
  }

  /* ---------- Variant selectors (PDP) ---------- */
  function initVariants() {
    document.querySelectorAll("[data-variant]").forEach(function (group) {
      var name = group.getAttribute("data-variant");
      var label = group.querySelector('[data-variant-value="' + name + '"]');
      var opts = group.querySelectorAll("[data-variant-opt]");
      opts.forEach(function (opt) {
        opt.addEventListener("click", function () {
          opts.forEach(function (o) { o.classList.remove("is-active"); o.setAttribute("aria-checked", "false"); });
          opt.classList.add("is-active");
          opt.setAttribute("aria-checked", "true");
          if (label) label.textContent = opt.getAttribute("data-variant-opt");
        });
      });
    });
  }

  /* ---------- Product tabs (keyboard accessible) ---------- */
  function initTabs() {
    var tablist = document.querySelector(".ptabs__nav");
    if (!tablist) return;
    var tabs = Array.prototype.slice.call(tablist.querySelectorAll(".ptab"));

    function select(tab) {
      tabs.forEach(function (t) {
        var active = t === tab;
        t.classList.toggle("is-active", active);
        t.setAttribute("aria-selected", active ? "true" : "false");
        t.setAttribute("tabindex", active ? "0" : "-1");
        var panel = document.getElementById(t.getAttribute("aria-controls"));
        if (panel) {
          panel.hidden = !active;
          panel.classList.toggle("is-active", active);
        }
      });
    }

    tabs.forEach(function (tab, i) {
      tab.addEventListener("click", function () { select(tab); });
      tab.addEventListener("keydown", function (e) {
        var idx = i;
        if (e.key === "ArrowRight") idx = (i + 1) % tabs.length;
        else if (e.key === "ArrowLeft") idx = (i - 1 + tabs.length) % tabs.length;
        else if (e.key === "Home") idx = 0;
        else if (e.key === "End") idx = tabs.length - 1;
        else return;
        e.preventDefault();
        tabs[idx].focus();
        select(tabs[idx]);
      });
    });
  }

  /* ---------- Lightbox (PDP) ---------- */
  function initLightbox() {
    var box = document.querySelector("[data-lightbox]");
    var openBtn = document.querySelector("[data-lightbox-open]");
    if (!box || !openBtn) return;
    var img = box.querySelector("[data-lightbox-img]");
    var closeBtn = box.querySelector("[data-lightbox-close]");
    var main = document.querySelector("[data-main-image]");
    var lastFocus = null;

    function open() {
      lastFocus = document.activeElement;
      if (main && img) { img.src = main.src; img.alt = main.alt; }
      box.hidden = false;
      requestAnimationFrame(function () { box.classList.add("is-open"); });
      if (closeBtn) closeBtn.focus();
    }
    function close() {
      box.classList.remove("is-open");
      window.setTimeout(function () { box.hidden = true; }, 250);
      if (lastFocus && lastFocus.focus) lastFocus.focus();
    }
    openBtn.addEventListener("click", open);
    if (closeBtn) closeBtn.addEventListener("click", close);
    box.addEventListener("click", function (e) { if (e.target === box) close(); });
    document.addEventListener("keydown", function (e) {
      if (e.key === "Escape" && !box.hidden) close();
    });
  }

  /* ---------- Newsletter validation ---------- */
  function initNewsletter() {
    var form = document.querySelector("[data-newsletter]");
    if (!form) return;
    var input = form.querySelector('input[type="email"]');
    var msg = form.querySelector(".news__msg");
    var re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    form.addEventListener("submit", function (e) {
      e.preventDefault();
      var val = (input.value || "").trim();
      if (!re.test(val)) {
        input.classList.add("is-invalid");
        input.setAttribute("aria-invalid", "true");
        if (msg) { msg.textContent = t("invalidEmail", "Please enter a valid email address."); msg.classList.add("is-error"); }
        input.focus();
        return;
      }
      input.classList.remove("is-invalid");
      input.removeAttribute("aria-invalid");
      if (msg) { msg.textContent = t("newsletterOk", "Thanks! Your $10 code is on its way to your inbox."); msg.classList.remove("is-error"); }
      form.reset();
    });
  }

  /* ---------- init with isolated module error boundary ---------- */
  function boot() {
    [
      initStickyHeader,
      initMobileMenu,
      initReveal,
      initFilters,
      initWishlist,
      initCountdown,
      initScroller,
      function () { if (window.Cart && Cart.init) Cart.init(); },
      initStepper,
      initGallery,
      initSetProduct,
      initVariants,
      initTabs,
      initLightbox,
      initNewsletter
    ].forEach(function (fn) {
      try {
        if (typeof fn === "function") fn();
      } catch (err) {
        console.error("Module initialization error:", err);
      }
    });
  }

  if (document.readyState === "loading") {
    document.addEventListener("DOMContentLoaded", boot);
  } else {
    boot();
  }
})();
