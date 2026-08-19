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
    <div class="nfd" role="region" aria-label="Ljetna rasprodaja">
      <div class="nfd-in">
        <div class="nfd-left">
          <div class="nfd-head">
          <span class="nfd-bolt" aria-hidden="true">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="#f07c00"><path d="M13 2 4.5 13.5H11L10 22l8.5-11.5H12L13 2z"/></svg>
          </span>
          <span class="nfd-title">Ljetna rasprodaja</span>
          <?php if ( $off > 0 ) : ?>
            <span class="nfd-badge">do &minus;<?php echo (int) $off; ?>%</span>
          <?php endif; ?>
          </div>
          <p class="nfd-sub">Sniženo dok traju zalihe</p>
        </div>

        <div class="nfd-right">
          <span class="nfd-cta">Ponuda istječe za</span>
          <div class="nfd-clock" id="nfd-clock" aria-live="off">
            <span class="nfd-unit"><b data-u="d">00</b><em>dana</em></span>
            <span class="nfd-unit"><b data-u="h">00</b><em>sati</em></span>
            <span class="nfd-unit"><b data-u="m">00</b><em>min</em></span>
            <span class="nfd-unit"><b data-u="s">00</b><em>sek</em></span>
          </div>
        </div>
      </div>
    </div>

    <style>
      /* Na ovoj kategoriji traka JE naslov stranice — hero slika se ne prikazuje. */
      .one-banner-shop { display: none !important; }

      .nfd { width: 100vw; margin-left: calc(50% - 50vw); color: #fff;
             background: linear-gradient(100deg, #ff8c1a 0%, #f37600 48%, #e26600 100%); }
      .nfd-in { max-width: 1180px; margin: 0 auto; padding: 20px 18px; display: flex; align-items: center;
                justify-content: space-between; gap: 20px; }
      .nfd-left { min-width: 0; }
      .nfd-head { display: flex; align-items: center; gap: 12px; }
      .nfd-bolt { flex: 0 0 auto; width: 42px; height: 42px; border-radius: 11px; background: #fff;
                  display: flex; align-items: center; justify-content: center; box-shadow: 0 2px 6px rgba(0,0,0,.12); }
      .nfd-title { font-size: clamp(22px, 3vw, 32px); font-weight: 800; letter-spacing: -.02em; line-height: 1.1;
                   text-transform: uppercase; white-space: nowrap; }
      .nfd-badge { background: #111; color: #fff; font-size: 12.5px; font-weight: 800; letter-spacing: .03em;
                   padding: 5px 11px; border-radius: 6px; white-space: nowrap; }
      .nfd-sub { margin: 7px 0 0 54px; font-size: 14px; color: rgba(255,255,255,.9); }

      .nfd-right { flex: 0 0 auto; text-align: right; }
      .nfd-cta { display: block; font-size: 12px; font-weight: 700; letter-spacing: .08em; text-transform: uppercase;
                 color: rgba(255,255,255,.85); margin-bottom: 7px; }
      .nfd-clock { display: flex; gap: 8px; }
      .nfd-unit { background: rgba(0,0,0,.16); border-radius: 8px; padding: 7px 10px 6px; min-width: 58px;
                  display: flex; flex-direction: column; align-items: center; line-height: 1; }
      .nfd-unit b { font-size: 21px; font-weight: 800; font-variant-numeric: tabular-nums; }
      .nfd-unit em { font-style: normal; font-size: 10.5px; letter-spacing: .06em; text-transform: uppercase;
                     color: rgba(255,255,255,.8); margin-top: 5px; }

      @media (max-width: 820px) {
        .nfd-in { flex-direction: column; align-items: flex-start; gap: 12px; padding: 14px 14px 16px; }
        .nfd-bolt { width: 34px; height: 34px; border-radius: 9px; }
        .nfd-bolt svg { width: 18px; height: 18px; }
        .nfd-title { font-size: 20px; }
        .nfd-badge { font-size: 11.5px; padding: 4px 9px; }
        .nfd-sub { margin: 6px 0 0 46px; font-size: 13px; }
        .nfd-right { width: 100%; text-align: left; }
        .nfd-clock { width: 100%; }
        .nfd-unit { flex: 1 1 0; min-width: 0; padding: 6px 4px 5px; }
        .nfd-unit b { font-size: 18px; }
        .nfd-unit em { font-size: 9.5px; }
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
