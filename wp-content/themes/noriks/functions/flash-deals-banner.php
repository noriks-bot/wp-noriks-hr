<?php
/**
 * Traka "Flash Deals" na vrhu kategorije ljetne rasprodaje.
 *
 * Prikazuje se SAMO na jednoj kategoriji (slug u NORIKS_FLASH_CAT). Postotak
 * ustede se racuna iz stvarnih cijena proizvoda u toj kategoriji (najveci popust),
 * pa napis nikad ne obecava vise nego sto stvarno stoji na policama.
 *
 * Odbrojavanje: svaki posjetitelj dobije svoj prozor od 24 sata, spremljen u
 * localStorage. Kad istekne, krece novi — traka nikad ne pokazuje "00:00:00".
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

const NORIKS_FLASH_CAT   = 'ljetna-rasprodaja';
const NORIKS_FLASH_HOURS = 24;
// Paketi nemaju WooCommerce akcijsku cijenu (popust radi izbornik ponuda), pa
// automatski izracun vrati 0. Tada se koristi ova brojka — provjereno na
// stvarnim cijenama: najveci paket ima 58 % nize po komadu, pa je 55 % sigurno.
const NORIKS_FLASH_OFF_FALLBACK = 55;

/** Najveci postotak popusta u kategoriji (cache 1 h). 0 = nema akcijskih cijena. */
function noriks_flash_max_discount() {
    $key    = 'noriks_flash_max_discount_' . NORIKS_FLASH_CAT;
    $cached = get_transient( $key );
    if ( $cached !== false ) { return (int) $cached; }

    $max = 0;
    if ( function_exists( 'wc_get_products' ) ) {
        $ids = wc_get_products( array(
            'status'   => 'publish',
            'limit'    => -1,
            'return'   => 'ids',
            'category' => array( NORIKS_FLASH_CAT ),
        ) );
        foreach ( (array) $ids as $pid ) {
            $p = wc_get_product( $pid );
            if ( ! $p ) { continue; }
            $reg  = (float) $p->get_regular_price();
            $sale = (float) $p->get_price();
            if ( $reg > 0 && $sale > 0 && $sale < $reg ) {
                $max = max( $max, (int) floor( ( ( $reg - $sale ) / $reg ) * 100 ) );
            }
        }
    }
    set_transient( $key, $max, HOUR_IN_SECONDS );
    return $max;
}

function noriks_flash_deals_banner() {
    if ( ! function_exists( 'is_product_category' ) || ! is_product_category( NORIKS_FLASH_CAT ) ) { return; }

    $off = noriks_flash_max_discount();
    if ( $off < 1 ) { $off = NORIKS_FLASH_OFF_FALLBACK; }
    ?>
    <div class="nfd" role="region" aria-label="Flash Deals">
      <div class="nfd-in">
        <div class="nfd-left">
          <span class="nfd-bolt" aria-hidden="true">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="#f07c00"><path d="M13 2 4.5 13.5H11L10 22l8.5-11.5H12L13 2z"/></svg>
          </span>
          <span class="nfd-title">Flash Deals</span>
          <?php if ( $off > 0 ) : ?>
            <span class="nfd-badge">Ušteda do &minus;<?php echo (int) $off; ?>%</span>
          <?php endif; ?>
        </div>

        <div class="nfd-right" id="nfd-clock" aria-live="off">
          <span class="nfd-unit"><b data-u="d">00</b>d</span><i>:</i>
          <span class="nfd-unit"><b data-u="h">00</b>h</span><i>:</i>
          <span class="nfd-unit"><b data-u="m">00</b>m</span><i>:</i>
          <span class="nfd-unit"><b data-u="s">00</b>s</span>
        </div>
      </div>
    </div>

    <style>
      .nfd { width: 100vw; margin-left: calc(50% - 50vw); background: linear-gradient(90deg, #f18a00 0%, #ef7c00 55%, #e97100 100%); }
      .nfd-in { max-width: 1180px; margin: 0 auto; padding: 14px 18px; display: flex; align-items: center;
                justify-content: space-between; gap: 16px; }
      .nfd-left { display: flex; align-items: center; gap: 12px; min-width: 0; }
      .nfd-bolt { flex: 0 0 auto; width: 42px; height: 42px; border-radius: 10px; background: #fff;
                  display: flex; align-items: center; justify-content: center; }
      .nfd-title { font-size: clamp(19px, 2.4vw, 26px); font-weight: 800; color: #fff; letter-spacing: -.01em; white-space: nowrap; }
      .nfd-badge { background: #c8102e; color: #fff; font-size: 12.5px; font-weight: 700; padding: 4px 11px;
                   border-radius: 999px; white-space: nowrap; }
      .nfd-right { display: flex; align-items: center; gap: 6px; flex: 0 0 auto; }
      .nfd-unit { background: rgba(255,255,255,.22); border-radius: 8px; padding: 8px 10px; color: #fff;
                  font-size: 14px; font-weight: 600; min-width: 46px; text-align: center; font-variant-numeric: tabular-nums; }
      .nfd-unit b { font-weight: 800; }
      .nfd-right i { color: rgba(255,255,255,.75); font-style: normal; font-weight: 700; }

      @media (max-width: 700px) {
        .nfd-in { padding: 11px 12px; gap: 10px; flex-wrap: wrap; justify-content: center; }
        .nfd-bolt { width: 34px; height: 34px; border-radius: 8px; }
        .nfd-bolt svg { width: 18px; height: 18px; }
        .nfd-title { font-size: 19px; }
        .nfd-badge { font-size: 11.5px; padding: 3px 9px; }
        .nfd-unit { padding: 6px 8px; min-width: 40px; font-size: 13px; }
      }
    </style>

    <script>
    (function(){
      var box = document.getElementById('nfd-clock');
      if (!box) { return; }
      var HOURS = <?php echo (int) NORIKS_FLASH_HOURS; ?>, KEY = 'nfd_end_<?php echo esc_js( NORIKS_FLASH_CAT ); ?>';
      function end(){
        var v = 0;
        try { v = parseInt(localStorage.getItem(KEY) || '0', 10); } catch(e) {}
        if (!v || v <= Date.now()) {
          v = Date.now() + HOURS * 3600 * 1000;
          try { localStorage.setItem(KEY, String(v)); } catch(e) {}
        }
        return v;
      }
      var target = end();
      var el = {};
      box.querySelectorAll('b[data-u]').forEach(function(b){ el[b.getAttribute('data-u')] = b; });
      function p(n){ return (n < 10 ? '0' : '') + n; }
      function tick(){
        var left = target - Date.now();
        if (left <= 0) { target = end(); left = target - Date.now(); }
        var s = Math.floor(left / 1000);
        el.d.textContent = p(Math.floor(s / 86400));
        el.h.textContent = p(Math.floor(s % 86400 / 3600));
        el.m.textContent = p(Math.floor(s % 3600 / 60));
        el.s.textContent = p(s % 60);
      }
      tick();
      setInterval(tick, 1000);
    })();
    </script>
    <?php
}
add_action( 'woocommerce_before_main_content', 'noriks_flash_deals_banner', 5 );
