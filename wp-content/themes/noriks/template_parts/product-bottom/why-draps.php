<?php
/**
 * NORIKS DuoSleep 2 u 1 Pokrivač Koji Zamjenjuje Plahte — why sekcije 1:1 z originalom
 * (3 vsebinske sekcije v istem vrstnem redu + NORIKS pogoji namesto tujega jamstva).
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
$wdir = get_template_directory_uri() . '/img/draps/';
?>
<div class="wdraps">

  <section class="wdraps__s wdraps__s--bg">
    <div class="wdraps__v">
      <div class="wdraps__media"><video src="<?php echo esc_url( $wdir . 'noriks-duosleep-sekcija-1.mp4' ); ?>" poster="<?php echo esc_url( $wdir . 'noriks-duosleep-sekcija-1-poster.webp' ); ?>" autoplay muted loop playsinline preload="metadata" aria-label="Krevet pospremljen u 10 sekundi s NORIKS DuoSleep pokrivačem"></video></div>
      <div class="wdraps__tekst">
        <div class="wdraps__kicker">BEZ NAVLAKA</div>
        <h2 class="wdraps__h2">Gotovo zauvijek. <em>Pospremite krevet u 10 sekundi.</em></h2>
        <p class="wdraps__p">Nema više plahta. Nema više navlaka. Nema više muke.</p>
        <p class="wdraps__p">Znamo koliko je frustrirajuće boriti se s navlakom za pokrivač. NORIKS DuoSleep spaja pokrivač i navlaku u jedan proizvod – sve u jednom.</p>
        <p class="wdraps__p">Ne treba vam nikakav drugi dodatak. Krevet je čist i pospremljen u tren oka.</p>
        <p class="wdraps__zak">Jedan pokrivač umjesto pokrivača i navlake.</p>
      </div>
    </div>
  </section>

  <section class="wdraps__s">
    <div class="wdraps__v wdraps__v--rev">
      <div class="wdraps__media"><img src="<?php echo esc_url( $wdir . 'noriks-duosleep-sekcija-2.webp' ); ?>" alt="Žena spava pod NORIKS DuoSleep pokrivačem" loading="lazy" decoding="async"></div>
      <div class="wdraps__tekst">
        <div class="wdraps__kicker">PRANJE</div>
        <h2 class="wdraps__h2">Pere se jednako lako <em>kao obična plahta.</em></h2>
        <p class="wdraps__p">Pokrivač stane u svaku standardnu perilicu rublja.</p>
        <p class="wdraps__p">Kod klasičnog pokrivača pere se samo navlaka – sam pokrivač skuplja bakterije, a nikad se ne opere. S NORIKS DuoSleep pokrivačem sve ide u perilicu: jedno pranje i sve je čisto.</p>
        <p class="wdraps__p">Na zraku se osuši za oko 2 sata – u sušilici još brže.</p>
        <p class="wdraps__zak">Sve u perilicu, suho za 2 sata.</p>
      </div>
    </div>
  </section>

  <section class="wdraps__s wdraps__s--bg">
    <div class="wdraps__v">
      <div class="wdraps__media"><video src="<?php echo esc_url( $wdir . 'noriks-duosleep-sekcija-3.mp4' ); ?>" poster="<?php echo esc_url( $wdir . 'noriks-duosleep-sekcija-3-poster.webp' ); ?>" autoplay muted loop playsinline preload="metadata" aria-label="Lagani NORIKS DuoSleep pokrivač"></video></div>
      <div class="wdraps__tekst">
        <div class="wdraps__kicker">TEMPERATURA</div>
        <h2 class="wdraps__h2">Uvijek <em>prava temperatura.</em></h2>
        <p class="wdraps__p">Termoregulacijska vlakna punjenja prilagođavaju se toplini vašeg tijela.</p>
        <p class="wdraps__p">Ljeti svježe i lagano. Zimi mekano i ugodno toplo.</p>
        <p class="wdraps__p">Bez znojenja i bez drhtanja – pokrivač je prozračan i toplina se ispod njega ne nakuplja.</p>
        <p class="wdraps__zak">Prozračan ljeti, topao zimi.</p>
      </div>
    </div>
  </section>

  <section class="wdraps__s">
    <div class="wdraps__v wdraps__v--rev">
      <div class="wdraps__media"><img src="<?php echo esc_url( $wdir . 'noriks-duosleep-sekcija-4.webp' ); ?>" alt="Kupac drži NORIKS DuoSleep pokrivač" loading="lazy" decoding="async"></div>
      <div class="wdraps__tekst">
        <div class="wdraps__kicker">KUPUJTE BEZ BRIGE</div>
        <h2 class="wdraps__h2">Isprobajte ga <em>bez rizika</em></h2>
        <p class="wdraps__p">NORIKS DuoSleep isprobajte kod kuće, u vlastitom krevetu. Ako vam ne odgovara, imate 30 dana za povrat novca – bez kompliciranja.</p>
        <p class="wdraps__p">Dostava je besplatna iznad 70 €, a platiti možete pouzećem, kad paket stigne na vaša vrata. NORIKS-u vjeruje više od 120.000 kupaca, s prosječnom ocjenom 4,8.</p>
        <div class="wdraps__pogoji">
          <div class="wdraps__pog"><strong>30 dana</strong><span>za povrat novca</span></div>
          <div class="wdraps__pog"><strong>Besplatna dostava</strong><span>iznad 70 €</span></div>
          <div class="wdraps__pog"><strong>Plaćanje pouzećem</strong><span>platite kad paket stigne</span></div>
          <div class="wdraps__pog"><strong>120.000 kupaca</strong><span>prosječna ocjena 4,8</span></div>
        </div>
      </div>
    </div>
  </section>
</div>
<style>
.wdraps{color:#1c1c1c;font-family:inherit}
.wdraps__s{padding:56px 0;background:#fff}
.wdraps__s--bg{background:#f4f3ef}
.wdraps__v{max-width:1240px;margin:0 auto;padding:0 24px;box-sizing:border-box;display:grid;grid-template-columns:1fr 1fr;gap:48px;align-items:center}
.wdraps__v--rev .wdraps__media{order:2}
.wdraps__v--rev .wdraps__tekst{order:1}
.wdraps__media{border-radius:16px;overflow:hidden;box-shadow:0 10px 30px rgba(0,0,0,.10);aspect-ratio:4/5;background:#eee}
.wdraps__media img,.wdraps__media video{width:100%;height:100%;object-fit:cover;display:block}
.wdraps__kicker{font-size:13px;letter-spacing:1px;text-transform:uppercase;color:#555;margin:0 0 8px;font-weight:700}
.wdraps__h2{font-size:clamp(24px,3vw,34px);font-weight:800;line-height:1.2;margin:0 0 18px;color:#1c1c1c}
.wdraps__h2 em{font-style:italic}
.wdraps__p{font-size:15.5px;line-height:1.65;color:#333;margin:0 0 14px}
.wdraps__zak{font-size:16px;font-weight:800;line-height:1.5;color:#1c1c1c;margin:6px 0 0}
.wdraps__pogoji{display:grid;grid-template-columns:1fr 1fr;gap:14px;margin-top:10px}
.wdraps__pog{background:#f4f3ef;border-radius:14px;padding:18px 14px;text-align:center}
.wdraps__pog strong{display:block;font-size:16px;font-weight:800;margin:0 0 4px}
.wdraps__pog span{font-size:14px;color:#444}
@media (max-width:860px){
  .wdraps__s{padding:38px 0}
  .wdraps__v{grid-template-columns:1fr;gap:22px}
  .wdraps__v--rev .wdraps__media,.wdraps__media{order:0}
  .wdraps__v--rev .wdraps__tekst,.wdraps__tekst{order:1}
}
</style>
