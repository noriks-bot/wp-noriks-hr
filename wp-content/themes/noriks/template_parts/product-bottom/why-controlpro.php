<?php
/**
 * product-bottom: NORIKS ControlPro — trener dna zdjelice (orto-controlpro).
 * TOCNO 4 sekcije kao na referentnoj stranici, u istom redoslijedu i istoj
 * postavi (slika lijevo / tekst desno), s nasim tekstom i nasim slikama:
 *   1. Zašto osjetiti stisak i stvarno ojačati nije isto   gif   08-vjezba-1
 *   2. 3 serije od 10 stiskova dnevno. To je sve.          gif   09-vjezba-2
 *   3. Zašto ovo djeluje kad ništa drugo nije              slika 01-usporedba
 *   4. Muškarci poput vas već vide rezultate               3 kartice recenzija
 * FAQ i recenzije renderira zajednički reviews.php (ne ovdje).
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
$cp      = get_template_directory_uri() . '/img/controlpro/';
$cp_path = get_template_directory() . '/img/controlpro/';

/* Ako slika nije na serveru, prikaže se neutralni sivi placeholder. */
$cp_img = function( $file, $alt ) use ( $cp, $cp_path ) {
  if ( file_exists( $cp_path . $file ) ) {
    return '<img src="'.esc_url($cp.$file).'" alt="'.esc_attr($alt).'" loading="lazy">';
  }
  return '<div class="cpr-ph" role="img" aria-label="'.esc_attr($alt).'"><span>'.esc_html($alt).'</span></div>';
};
?>

<!-- ============ 1) Zašto osjetiti stisak i stvarno ojačati nije isto ============ -->
<section class="cpr-sec">
  <div class="cpr-wrap cpr-row2">
    <div class="cpr-media"><?php echo $cp_img('08-vjezba-1.webp','Vježba s NORIKS ControlPro trenerom dna zdjelice'); ?></div>
    <div class="cpr-copy">
      <h2 class="cpr-h2">Zašto osjetiti stisak i stvarno ojačati dno zdjelice nije isto</h2>
      <p>Liječnik vam je rekao da radite Kegelove vježbe. Pa ste stiskali. I osjetili ste da radi — tu napetost, tu kontrakciju. Zato ste nastavili. Tjednima, možda mjesecima.</p>
      <p>A curenje nije prestalo.</p>
      <p>Evo zašto: osjetiti stisak i stvarno izgraditi snagu dna zdjelice nisu ista stvar. Bez otpora mišić samo aktivirate — ali ga ne trenirate. Stišćete u prazno, a nijedan mišić u vašem tijelu tako nikada nije postao snažniji.</p>
      <p>ControlPro to mijenja. Daje vašem dnu zdjelice nešto protiv čega može pritisnuti — stvaran fizički otpor koji opterećuje upravo one mišiće koji kontroliraju mjehur. Svaki stisak gradi stvarnu, funkcionalnu snagu. Ne samo napetost koju osjećate, nego snagu koja zaustavlja curenje.</p>
    </div>
  </div>
</section>

<!-- ============ 2) 3 serije od 10 stiskova dnevno. To je sve. ============ -->
<section class="cpr-sec">
  <div class="cpr-wrap cpr-row2">
    <div class="cpr-media"><?php echo $cp_img('09-vjezba-2.webp','Stiskanje protiv otpora — 3 serije od 10 ponavljanja dnevno'); ?></div>
    <div class="cpr-copy">
      <h2 class="cpr-h2">3 serije od 10 stiskova dnevno. To je sve.</h2>
      <p>Samo sjednite na stolicu i postavite ControlPro između koljena. Stišćite protiv otpora — 3 serije od 10 ponavljanja dnevno.</p>
      <p>Bez umetanja, bez žica, bez aplikacija. Izgleda kao sprava za vježbanje jer to i jest. Radite ga uz vijesti ili za radnim stolom — nitko to ne mora vidjeti.</p>
      <a class="cpr-cta" href="#bundle-selector">Vratite kontrolu danas</a>
    </div>
  </div>
</section>

<!-- ============ 3) Zašto ovo djeluje kad ništa drugo nije ============ -->
<section class="cpr-sec">
  <div class="cpr-wrap cpr-row2">
    <div class="cpr-media"><?php echo $cp_img('01-usporedba.jpg','Usporedba: ulošci i zaštite, EMS uređaji, same Kegelove vježbe i NORIKS'); ?></div>
    <div class="cpr-copy">
      <h2 class="cpr-h2">Zašto ovo djeluje kad ništa drugo nije</h2>
      <p>Ulošci i zaštite ublažavaju simptom — kupovat ćete ih svaki mjesec, zauvijek, a ništa ne postaje snažnije.</p>
      <p>EMS uređaji (175–350 €) stežu mišiće <em>umjesto vas</em>, što je kao da netko drugi radi vaše sklekove — veza mozak–mišić se nikada ne razvije, a mnogi zahtijevaju unutrašnje sonde.</p>
      <p>Same Kegelove vježbe dobra su ideja, ali bez otpora i bez povratne informacije većina muškaraca trenira naslijepo i odustane unutar nekoliko tjedana.</p>
      <p>NORIKS ControlPro plaćate jednom, tjera vas da rad obavite sami protiv pravog otpora i primjenjuje isti princip progresivnog opterećenja koji jača svaki drugi mišić u vašem tijelu.</p>
      <p>Vaše dno zdjelice nije pokvareno.</p>
      <p class="cpr-strong">Samo je nedovoljno trenirano.</p>
    </div>
  </div>
</section>

<!-- ============ 4) Muškarci poput vas već vide rezultate ============ -->
<section class="cpr-sec cpr-revs">
  <div class="cpr-wrap">
    <h2 class="cpr-h2 cpr-center">Muškarci poput vas već vide rezultate</h2>
    <div class="cpr-rev-grid">
      <?php foreach ( array(
        array( 'Od 4 uloška dnevno na 0', 'Nakon operacije prostate radio sam Kegelove vježbe više od godinu dana bez ikakvog napretka. Bio sam skeptičan, ali koristim ga oko 5 tjedana i sa 4 uloška dnevno sam pao na nula. Vrlo sam zadovoljan rezultatom.', 'Lovro R.' ),
        array( 'Bio sam skeptičan', 'Curilo mi je dvije godine i Kegelove vježbe nisu donijele nikakvu promjenu. Bio sam skeptičan prema ovom uređaju, ali odmah se osjeti razlika kad mišići dna zdjelice imaju otpor. Sada mi više ne curi.', 'Goran P.' ),
        array( 'Jednostavno i dobro izrađeno', 'Jednostavan i dobro izrađen uređaj. Stišćete i otpuštate, a s vremenom stvarno dobijete puno više kontrole. Izbjegavajte jeftine kopije koje izgledaju slično — nemaju isti otpor.', 'Ante T.' ),
      ) as $rv ) : ?>
        <article class="cpr-rev">
          <span class="cpr-quote" aria-hidden="true">&#10077;</span>
          <div class="cpr-stars" aria-label="Ocjena 5 od 5">★★★★★</div>
          <p class="cpr-rev-title"><?php echo esc_html( $rv[0] ); ?></p>
          <p class="cpr-rev-text">„<?php echo esc_html( $rv[1] ); ?>"</p>
          <p class="cpr-rev-name"><?php echo esc_html( $rv[2] ); ?></p>
        </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<style>
  .cpr-sec { padding: 46px 0; }
  .cpr-wrap { max-width: 1180px; margin: 0 auto; padding: 0 18px; }
  .cpr-row2 { display: grid; grid-template-columns: 1fr 1fr; gap: 48px; align-items: center; }
  .cpr-h2 { font-size: clamp(24px,3.1vw,34px); font-weight: 800; color: #141414; line-height: 1.2; margin: 0 0 16px; }
  .cpr-center { text-align: center; }
  .cpr-copy p { font-size: 15.5px; line-height: 1.65; color: #3a3a3a; margin: 0 0 14px; }
  .cpr-strong { font-weight: 700; color: #141414; }
  .cpr-media img { width: 100%; height: auto; display: block; border-radius: 6px; }

  .cpr-ph { width: 100%; aspect-ratio: 1/1; background: #ededed; border: 1px dashed #d3d3d3; border-radius: 6px;
            display: flex; align-items: center; justify-content: center; padding: 18px; box-sizing: border-box; }
  .cpr-ph span { font-size: 13px; line-height: 1.45; color: #9a9a9a; text-align: center; }

  .cpr-cta { display: inline-block; margin-top: 6px; background: #141414; color: #fff; font-weight: 700; font-size: 15px; padding: 13px 26px; border-radius: 8px; text-decoration: none; }
  .cpr-cta:hover { background: #E8450E; color: #fff; }

  /* 4) kartice recenzija */
  .cpr-rev-grid { display: grid; grid-template-columns: repeat(3,1fr); gap: 22px; margin-top: 26px; }
  .cpr-rev { position: relative; background: #f4f4f4; border-radius: 10px; padding: 22px 20px; text-align: center; }
  .cpr-quote { position: absolute; top: 14px; right: 16px; font-size: 20px; line-height: 1; color: #141414; }
  .cpr-stars { color: #f5b301; font-size: 16px; letter-spacing: 1px; }
  .cpr-rev-title { font-weight: 800; color: #141414; font-size: 15px; margin: 10px 0 10px; }
  .cpr-rev-text { font-size: 14px; line-height: 1.6; color: #4a4a4a; margin: 0 0 14px; }
  .cpr-rev-name { font-size: 13px; font-style: italic; color: #6b6b6b; margin: 0; }

  @media (max-width: 820px) {
    .cpr-sec { padding: 28px 0; }
    .cpr-row2 { grid-template-columns: 1fr; gap: 20px; }
    .cpr-h2 { font-size: 1.9rem; }
    .cpr-rev-grid { grid-template-columns: 1fr; }
  }

  /* Nema "Tablica veličina" linka na ControlPro uređaju (ni plugin ni globalni). */
  .noriks-global-sizechart, .gck-size-link, .gck-size-link-wrap,
  #open-size-chart, #open-size-chartCustom { display: none !important; }

  /* Kratki opis: sakrij standardne točke (•), ostaje samo ✅ iz teksta. */
  .woocommerce-product-details__short-description ul { list-style: none; margin: 8px 0 26px; padding-left: 0; }
  .woocommerce-product-details__short-description ul li { list-style: none; padding-left: 0; margin-left: 0; line-height: 1.55; margin-bottom: 6px; }
  .woocommerce-product-details__short-description p:has(+ ul) { margin-top: 20px; margin-bottom: 4px; }
</style>

<script>
(function(){
  document.querySelectorAll('a.cpr-cta[href="#bundle-selector"]').forEach(function(a){
    a.addEventListener('click', function(e){ e.preventDefault(); var t=document.getElementById('bundle-selector')||document.querySelector('.single_add_to_cart_button'); if(t) t.scrollIntoView({behavior:'smooth',block:'center'}); });
  });
})();
</script>
