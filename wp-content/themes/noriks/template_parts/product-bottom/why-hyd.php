<?php
/**
 * product-bottom: NORIKS HYD — boca za vodikovu vodu s PEM/SPE elektrolizom (orto-hyd).
 * Sekcije prate referentnu stranicu (hydrogen water bottle), tekst na HR,
 * slike su NORIKS kreative iz img/hyd/. Naizmjenicno slika/tekst.
 *   1. Vodikom bogata hidracija u pokretu    slika desno   01_hidracija
 *   2. Kako nastaje vodikova voda            slika lijevo  04_kako-radi
 *   3. Snaga vodikove vode (6 ucinaka)       slika desno   03_prednosti
 *   4. Traka s brojkama                      3 brojke
 *   5. NORIKS HYD vs jeftine imitacije       slika lijevo  05_usporedba
 *   6. Uz vas kroz cijeli dan                slika desno   07_lifestyle
 *   7. Pravi ljudi, pravi rezultati          usko, sredina 06_pravi-ljudi
 *   8. Specifikacije                         kartica
 * Recenzije i FAQ renderira zajednicki reviews.php (ne ovdje).
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
$nh      = get_template_directory_uri() . '/img/hyd/';
$nh_path = get_template_directory() . '/img/hyd/';

$nh_img = function( $file, $alt ) use ( $nh, $nh_path ) {
  if ( file_exists( $nh_path . $file ) ) {
    return '<img src="'.esc_url($nh.$file).'" alt="'.esc_attr($alt).'" loading="lazy">';
  }
  return '<div class="nhy-ph" role="img" aria-label="'.esc_attr($alt).'"><span>'.esc_html($alt).'</span></div>';
};
?>

<!-- ============ 1) Vodikom bogata hidracija u pokretu ============ -->
<section class="nhy-sec">
  <div class="nhy-wrap nhy-row2">
    <div class="nhy-copy">
      <p class="nhy-eyebrow">Prijenosna PEM elektroliza</p>
      <h2 class="nhy-h2">Vodikom bogata hidracija u pokretu</h2>
      <p class="nhy-lead">Obična voda gasi žeđ. Vodikova voda uz to donosi i molekularni vodik — najmanju antioksidativnu molekulu koja postoji.</p>
      <p>NORIKS HYD otapa vodik izravno u vodu koju već imate: natočite, pritisnete tipku i za nekoliko minuta pijete vodu obogaćenu vodikom. Bez tableta, bez patrona i bez pripreme unaprijed.</p>
      <ul class="nhy-check">
        <li>3 minute → oko 1.600 ppb H₂</li>
        <li>10 minuta → do 3.000 ppb H₂</li>
        <li>450 mL · USB punjenje u 30–60 min</li>
      </ul>
    </div>
    <div class="nhy-media"><?php echo $nh_img('hyd-01-hidracija.webp','NORIKS HYD — vodikom bogata hidracija u pokretu'); ?></div>
  </div>
</section>

<!-- ============ 2) Kako nastaje vodikova voda ============ -->
<section class="nhy-sec nhy-alt">
  <div class="nhy-wrap nhy-row2">
    <div class="nhy-media"><?php echo $nh_img('hyd-04-kako-radi.webp','PEM elektroliza — kako nastaje vodikova voda'); ?></div>
    <div class="nhy-copy">
      <h2 class="nhy-h2">Kako nastaje vodikova voda</h2>
      <p>U bazi boce je generator s <strong>naprednom protonskom membranom (PEM/SPE)</strong>. Membrana propušta samo protone, pa se na katodi izdvaja <strong>99,99&nbsp;% čisti vodik</strong>, a nusprodukti (O₃, Cl₂, H₂O₂) odlaze kroz odzračni kanal — ne u vaše piće.</p>
      <ul class="nhy-steps">
        <li>Natočite vodu — radi s bilo kojom pitkom vodom.</li>
        <li>Pritisnite tipku i odaberite ciklus od 3 ili 10 minuta.</li>
        <li>Popijte unutar 30-ak minuta, dok je koncentracija vodika najviša.</li>
      </ul>
      <p class="nhy-note">Bez klora i bez potrebe za „prljavom" vodom kakvu traže jeftini uređaji.</p>
    </div>
  </div>
</section>

<!-- ============ 3) Snaga vodikove vode ============ -->
<section class="nhy-sec">
  <div class="nhy-wrap nhy-row2">
    <div class="nhy-copy">
      <h2 class="nhy-h2">Zašto ljudi prelaze na vodikovu vodu</h2>
      <p>Molekularni vodik je toliko malen da lako prolazi kroz stanične membrane. Zato ga se u istraživanjima povezuje sa selektivnim antioksidativnim djelovanjem.</p>
      <ul class="nhy-benefits">
        <li><span>Blistava koža</span></li>
        <li><span>Oporavak mišića</span></li>
        <li><span>Fokus i raspoloženje</span></li>
        <li><span>Brži metabolizam</span></li>
        <li><span>Manje upalnih procesa</span></li>
        <li><span>Više energije</span></li>
      </ul>
      <p class="nhy-note">Vodikova voda je dodatak svakodnevnoj hidraciji, a ne zamjena za liječničku terapiju.</p>
    </div>
    <div class="nhy-media"><?php echo $nh_img('hyd-03-prednosti.webp','Prednosti vodikove vode'); ?></div>
  </div>
</section>

<!-- ============ 4) Brojke ============ -->
<section class="nhy-band">
  <div class="nhy-wrap nhy-stats">
    <div class="nhy-stat"><strong>3.000 ppb</strong><span>najviša koncentracija vodika u ciklusu od 10 minuta</span></div>
    <div class="nhy-stat"><strong>2 min</strong><span>do oko 90&nbsp;% infuzije vodika u vodi</span></div>
    <div class="nhy-stat"><strong>0</strong><span>zamjena filtera — generator je trajni</span></div>
  </div>
</section>

<!-- ============ 5) Usporedba ============ -->
<section class="nhy-sec nhy-alt">
  <div class="nhy-wrap nhy-row2">
    <div class="nhy-media"><?php echo $nh_img('hyd-05-usporedba.webp','NORIKS HYD u usporedbi s jeftinim bocama'); ?></div>
    <div class="nhy-copy">
      <h2 class="nhy-h2">Zašto sve boce nisu iste</h2>
      <p>Tržište je puno boca koje izgledaju slično, a rade posve drukčije. Razlika je u tehnologiji generatora.</p>
      <ul class="nhy-vs">
        <li class="is-yes"><strong>PEM/SPE tehnologija</strong><span>bez klora i nusprodukata u vodi</span></li>
        <li class="is-yes"><strong>Visok sadržaj vodika</strong><span>1,6–2,5 PPM na 450 mL</span></li>
        <li class="is-yes"><strong>Radi s bilo kojom vodom</strong><span>uključujući filtriranu i destiliranu</span></li>
        <li class="is-no"><strong>Tehnologija koja stvara klor</strong><span>jeftina elektroliza bez membrane</span></li>
        <li class="is-no"><strong>Nizak sadržaj vodika</strong><span>visoke brojke samo uz sitan volumen</span></li>
        <li class="is-no"><strong>Zahtijeva „nečistu" vodu</strong><span>bez minerala uređaj ne radi</span></li>
      </ul>
    </div>
  </div>
</section>

<!-- ============ 6) Uz vas kroz cijeli dan ============ -->
<section class="nhy-sec">
  <div class="nhy-wrap nhy-row2">
    <div class="nhy-copy">
      <h2 class="nhy-h2">Uz vas kroz cijeli dan</h2>
      <p>Boca je od <strong>borosilikatnog stakla</strong> s bazom od nehrđajućeg čelika, pa voda nikada ne dodiruje plastiku — nema stranog okusa ni nakon mjeseci korištenja.</p>
      <ul class="nhy-check">
        <li>Ujutro na prazan želudac, umjesto prve kave</li>
        <li>Prije i poslije treninga, za oporavak</li>
        <li>Za radnim stolom, kad padne koncentracija</li>
      </ul>
      <a class="nhy-cta" href="#bundle-selector">Naruči NORIKS HYD</a>
    </div>
    <div class="nhy-media"><?php echo $nh_img('hyd-07-lifestyle.webp','NORIKS HYD u svakodnevnoj upotrebi'); ?></div>
  </div>
</section>

<!-- ============ 7) Pravi ljudi, pravi rezultati ============ -->
<section class="nhy-sec nhy-alt">
  <div class="nhy-wrap nhy-row2">
    <div class="nhy-media nhy-media-shadow"><?php echo $nh_img('hyd-06-pravi-ljudi.webp','Kupci NORIKS HYD boce'); ?></div>
    <div class="nhy-copy">
      <h2 class="nhy-h2">Pravi ljudi. Pravi rezultati.</h2>
      <p>Boca se ne koristi „kad se sjetimo" — uđe u rutinu. Evo za što je naši kupci najčešće koriste.</p>
      <ul class="nhy-quotes">
        <li>
          <strong>Brži oporavak</strong>
          <span>„Nakon treninga osjećam manje umora u mišićima. Oporavak mi je jednostavno lakši."</span>
          <em>Alen P. · ★★★★★</em>
        </li>
        <li>
          <strong>Hidracija koja se vidi</strong>
          <span>„Koža mi djeluje punije i odmornije. Konačno pijem dovoljno vode tijekom dana."</span>
          <em>Samanta L. · ★★★★★</em>
        </li>
        <li>
          <strong>Praktično i čisto</strong>
          <span>„Nema okusa plastike, punjenje preko USB-a traje kratko. Moja svakodnevna boca."</span>
          <em>Mihael R. · ★★★★★</em>
        </li>
      </ul>
    </div>
  </div>
</section>

<!-- ============ 8) Specifikacije ============ -->
<section class="nhy-sec">
  <div class="nhy-wrap-sm">
    <h2 class="nhy-h2 nhy-center">Specifikacije</h2>
    <div class="nhy-specs">
      <div><span>Kapacitet</span><strong>450 mL</strong></div>
      <div><span>Tehnologija</span><strong>PEM / SPE elektroliza</strong></div>
      <div><span>Koncentracija H₂</span><strong>do 3.000 ppb (1,6–2,5 PPM)</strong></div>
      <div><span>Ciklusi</span><strong>3 min i 10 min</strong></div>
      <div><span>Materijali</span><strong>borosilikatno staklo + nehrđajući čelik</strong></div>
      <div><span>Elektrode</span><strong>titan s platinskim slojem</strong></div>
      <div><span>Punjenje</span><strong>USB-C, 30–60 min</strong></div>
      <div><span>Filter</span><strong>trajni, bez zamjena</strong></div>
      <div><span>Jamstvo</span><strong>1 godina + 30 dana povrata novca</strong></div>
    </div>
  </div>
</section>

<style>
  .nhy-sec { padding: 46px 0; background: #fff; }
  .nhy-alt { background: #eef4fa; }
  .nhy-wrap { max-width: 1180px; margin: 0 auto; padding: 0 18px; }
  .nhy-wrap-sm { max-width: 820px; margin: 0 auto; padding: 0 18px; }
  .nhy-row2 { display: grid; grid-template-columns: 1fr 1fr; gap: 48px; align-items: center; }
  .nhy-h2 { font-size: clamp(24px,3.1vw,36px); font-weight: 800; color: #0f2f5c; line-height: 1.15; margin: 0 0 16px; }
  .nhy-eyebrow { font-size: 12.5px; font-weight: 800; letter-spacing: .12em; text-transform: uppercase; color: #2e7fd4; margin: 0 0 8px; }
  .nhy-center { text-align: center; }
  .nhy-copy p, .nhy-sub { font-size: 16px; line-height: 1.65; color: #3a3a3a; margin: 0 0 14px; }
  .nhy-sub { max-width: 820px; margin: 0 auto 26px; }
  .nhy-lead { font-weight: 700; color: #0f2f5c; }
  .nhy-note { font-size: 14px !important; color: #6b6b6b !important; }
  .nhy-media img { width: 100%; height: auto; display: block; border-radius: 16px; }
  .nhy-media-shadow img { box-shadow: 0 10px 34px rgba(15,47,92,.12); }

  .nhy-ph { width: 100%; aspect-ratio: 1/1; background: #e6eef7; border: 1px dashed #c9d9e9; border-radius: 16px;
            display: flex; align-items: center; justify-content: center; padding: 18px; box-sizing: border-box; }
  .nhy-ph span { font-size: 13px; line-height: 1.45; color: #8ba3bd; text-align: center; }

  .nhy-check { list-style: none; margin: 0 0 16px; padding: 0; }
  .nhy-check li { position: relative; padding: 0 0 11px 30px; font-size: 15.5px; color: #0f2f5c; line-height: 1.5; }
  .nhy-check li:before { content: "✓"; position: absolute; left: 0; top: 0; width: 20px; height: 20px; background: #2e7fd4; color: #fff; border-radius: 50%; font-size: 12px; text-align: center; line-height: 20px; }

  .nhy-steps { list-style: none; counter-reset: nhystep; margin: 0 0 16px; padding: 0; }
  .nhy-steps li { counter-increment: nhystep; position: relative; padding: 0 0 14px 40px; font-size: 15.5px; line-height: 1.55; color: #3a3a3a; }
  .nhy-steps li:before { content: counter(nhystep); position: absolute; left: 0; top: 0; width: 26px; height: 26px; background: #0f2f5c; color: #fff; border-radius: 50%; font-size: 13px; font-weight: 700; text-align: center; line-height: 26px; }

  .nhy-benefits { list-style: none; display: grid; grid-template-columns: 1fr 1fr; gap: 10px; margin: 0 0 16px; padding: 0; }
  .nhy-benefits li { background: #f4f8fc; border: 1px solid #dbe7f3; border-radius: 12px; padding: 12px 14px; font-size: 14.5px; font-weight: 700; color: #0f2f5c; }

  .nhy-vs { list-style: none; margin: 0; padding: 0; }
  .nhy-vs li { position: relative; padding: 11px 0 11px 34px; border-bottom: 1px solid #dbe7f3; }
  .nhy-vs li:last-child { border-bottom: 0; }
  .nhy-vs li:before { position: absolute; left: 0; top: 12px; width: 22px; height: 22px; border-radius: 50%; font-size: 12px; text-align: center; line-height: 22px; color: #fff; }
  .nhy-vs li.is-yes:before { content: "✓"; background: #2e7fd4; }
  .nhy-vs li.is-no:before  { content: "✕"; background: #b9c6d4; }
  .nhy-vs strong { display: block; font-size: 15.5px; color: #0f2f5c; }
  .nhy-vs span { display: block; font-size: 14px; color: #5a5a5a; }
  .nhy-vs li.is-no strong { color: #6b7b8c; }

  .nhy-band { background: #0f2f5c; padding: 30px 0; }
  .nhy-stats { display: grid; grid-template-columns: repeat(3,1fr); gap: 22px; text-align: center; }
  .nhy-stat strong { display: block; font-size: clamp(26px,3.4vw,38px); font-weight: 800; color: #fff; line-height: 1.1; }
  .nhy-stat span { display: block; font-size: 14px; line-height: 1.5; color: #b9cde6; margin-top: 6px; }

  .nhy-specs { border: 1px solid #dbe7f3; border-radius: 16px; overflow: hidden; }
  .nhy-specs div { display: flex; justify-content: space-between; gap: 18px; padding: 13px 18px; border-bottom: 1px solid #eaf1f8; }
  .nhy-specs div:last-child { border-bottom: 0; }
  .nhy-specs div:nth-child(odd) { background: #f7fbff; }
  .nhy-specs span { font-size: 14.5px; color: #5a5a5a; }
  .nhy-specs strong { font-size: 14.5px; color: #0f2f5c; text-align: right; }

  .nhy-cta { display: inline-block; margin-top: 8px; background: #0f2f5c; color: #fff; font-weight: 700; font-size: 16px; padding: 14px 30px; border-radius: 10px; text-decoration: none; }
  .nhy-cta:hover { background: #2e7fd4; color: #fff; }

  @media (max-width: 820px) {
    .nhy-sec { padding: 30px 0; }
    .nhy-row2 { grid-template-columns: 1fr; gap: 20px; }
    .nhy-row2 .nhy-media { order: -1; }
    .nhy-h2 { font-size: 2rem; }
    .nhy-stats { grid-template-columns: 1fr; gap: 16px; }
    .nhy-benefits { grid-template-columns: 1fr; }
    .nhy-specs div { flex-direction: column; gap: 2px; }
    .nhy-specs strong { text-align: left; }
  }

  /* NORIKS HYD nema velicine — nema linka na tablicu velicina. */
  .noriks-global-sizechart, .gck-size-link, .gck-size-link-wrap,
  #open-size-chart, #open-size-chartCustom { display: none !important; }

  /* Kratki opis: bez standardnih tocaka, ostaje samo ✓ iz teksta. */
  .woocommerce-product-details__short-description ul { list-style: none; margin: 8px 0 26px; padding-left: 0; }
  .woocommerce-product-details__short-description ul li { list-style: none; padding-left: 0; margin-left: 0; line-height: 1.55; margin-bottom: 6px; }
  .woocommerce-product-details__short-description p:has(+ ul) { margin-top: 20px; margin-bottom: 4px; }
</style>

<script>
(function(){
  document.querySelectorAll('a.nhy-cta[href="#bundle-selector"]').forEach(function(a){
    a.addEventListener('click', function(e){
      e.preventDefault();
      var t = document.getElementById('bundle-selector') || document.querySelector('.single_add_to_cart_button');
      if (t) t.scrollIntoView({ behavior: 'smooth', block: 'center' });
    });
  });
})();
</script>
