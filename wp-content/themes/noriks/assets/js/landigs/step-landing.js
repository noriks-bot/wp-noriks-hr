(function () {
  var config = window.noriksStepLandingConfig || {};
  var skuMap = config.skuMap || {};

  function currentVariation() {
    if (typeof propertiesArr === "undefined" || typeof variationsArr === "undefined") {
      return null;
    }

    var selectedOptionIds = [];

    for (var p = 0; p < propertiesArr.length; p += 1) {
      var propertyId = propertiesArr[p].id;
      var selected = document.querySelector(
        "[property-id='" + propertyId + "'][selected-option='true']"
      );

      if (selected) {
        selectedOptionIds.push(selected.value);
      }
    }

    if (!selectedOptionIds.length) {
      return variationsArr[0] || null;
    }

    for (var i = 0; i < variationsArr.length; i += 1) {
      var variation = variationsArr[i];
      var ids = (variation.ids || []).slice().sort().join(",");
      var selectedIds = selectedOptionIds.slice().sort().join(",");

      if (ids === selectedIds) {
        return variation;
      }
    }

    return null;
  }

  function selectedQuantity() {
    var qtyInput = document.getElementById("single-quantity-value");
    if (qtyInput && qtyInput.value) {
      return parseInt(qtyInput.value, 10) || 1;
    }

    var checkedQty = document.querySelector("[id^='qty']:checked");
    if (checkedQty) {
      var match = checkedQty.id.match(/(\d+)$/);
      if (match) {
        return parseInt(match[1], 10) || 1;
      }
    }

    return 1;
  }

  function addToCartUrl() {
    var variation = currentVariation();
    if (!variation || !variation.sku || !skuMap[variation.sku] || !config.productId) {
      return null;
    }

    var mapped = skuMap[variation.sku];
    var url = new URL(config.homeUrl);
    url.searchParams.set("add-to-cart", String(config.productId));
    url.searchParams.set("variation_id", String(mapped.id));
    url.searchParams.set("attribute_pa_barva", mapped.b || "");
    url.searchParams.set("attribute_pa_velikost", mapped.v || "");
    url.searchParams.set("quantity", String(selectedQuantity()));
    return url.toString();
  }

  function rewriteAnchors() {
    document.querySelectorAll("a[href='https://ortowp.noriks.com/product/stepease/']").forEach(function (link) {
      link.href = config.landingUrl;
    });

    document.querySelectorAll("a[href='https://ortowp.noriks.com/cart/']").forEach(function (link) {
      link.href = config.cartUrl;
    });

    document.querySelectorAll("a[href='https://ortowp.noriks.com/kosarica/?add-more='], a.header__cart").forEach(function (link) {
      link.href = config.cartUrl;
    });

    document.querySelectorAll("a[href='https://ortowp.noriks.com/']").forEach(function (link) {
      link.href = config.homeUrl;
    });
  }

  function syncBuyButtons() {
    var url = addToCartUrl();
    var buttons = document.querySelectorAll(".hs-cf-cart-btn, [id$='-hs-cf-add-to-cart'], .checkout-add-to-cart-btn");

    buttons.forEach(function (button) {
      button.setAttribute("href", url || "#");
      button.style.cursor = "pointer";
    });
  }

  function handleBuyClick(event) {
    var trigger = event.target.closest(".hs-cf-cart-btn, [id$='-hs-cf-add-to-cart'], .checkout-add-to-cart-btn");
    if (!trigger) {
      return;
    }

    var url = addToCartUrl();
    if (!url) {
      event.preventDefault();
      window.alert("Povezava izdelka trenutno ni pripravljena. Preveri SKU-je oziroma variacije v WooCommerce.");
      return;
    }

    event.preventDefault();
    window.location.href = url;
  }

  function refresh() {
    rewriteAnchors();
    syncBuyButtons();
  }

  document.addEventListener("click", handleBuyClick, true);

  if (document.readyState === "loading") {
    document.addEventListener("DOMContentLoaded", refresh);
  } else {
    refresh();
  }

  if (typeof window.setLinkDynamicCart === "function") {
    var originalSetLinkDynamicCart = window.setLinkDynamicCart;
    window.setLinkDynamicCart = function () {
      var result = originalSetLinkDynamicCart.apply(this, arguments);
      setTimeout(refresh, 50);
      return result;
    };
  }

  setInterval(refresh, 1500);
})();
