<?php
/**
 * product-bottom: NORIKS HERS HairMagic+ — puder za liniju kose (orto-norikshershairmagic).
 * Struktura preslikana s referentne stranice (rumicosmetiques HairMagic+):
 *   1. Trenutačno prekrivanje i rezultati     slika 02
 *   2. Zašto ga žene vole — 6 prednosti       kartice + slika 04
 *   3. HairMagic+ transformacije               6 kartic (slika + recenzija)
 *   4. Pronađite svoju nijansu                slika 03 + lista nijansi
 *   5. Kako nanijeti — 3 koraka               slika 14 + kartice
 *   6. Brojke                                 97 / 94 / 100 %
 *   7. Recenzija + djeluje i na obrve         slike 15 i 13
 *   8. 100 % jamstvo povrata novca
 * FAQ i recenzije renderira zajednički reviews.php (ne ovdje).
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
$hm      = get_template_directory_uri() . '/img/hairmagic/';
$hm_path = get_template_directory() . '/img/hairmagic/';

$hm_img = function( $file, $alt ) use ( $hm, $hm_path ) {
  if ( file_exists( $hm_path . $file ) ) {
    return '<img src="'.esc_url($hm.$file).'" alt="'.esc_attr($alt).'" loading="lazy">';
  }
  return '<div class="hgm-ph" role="img" aria-label="'.esc_attr($alt).'"><span>'.esc_html($alt).'</span></div>';
};
?>

<!-- ============ 1) Trenutačno prekrivanje i rezultati ============ -->
<section class="hgm-sec hgm-alt">
  <div class="hgm-wrap hgm-row2">
    <div class="hgm-media"><?php echo $hm_img('hm_02_instant-prekrivanje-rezultati.webp','Prije i poslije — trenutačno prekrivanje'); ?></div>
    <div class="hgm-copy">
      <h2 class="hgm-h2">Trenutačno prekrivanje, vidljiv rezultat</h2>
      <p class="hgm-lead">Sijede na razdjeljku, prorijeđena linija kose i izrast — prekriveni u manje od dvije minute.</p>
      <p>Prilagodljivi pigmenti stapaju se s vašom bojom kose, pa se ne vidi da je nešto naneseno. Nema naslaga, nema tvrdog ruba — samo gušća linija kose.</p>
      <ul class="hgm-check">
        <li>Prekriva sijede i izrast između bojanja</li>
        <li>Popunjava prorijeđena mjesta i razdjeljak</li>
        <li>Djeluje i na obrvama</li>
      </ul>
      <a class="hgm-cta" href="#bundle-selector">Odaberi svoju nijansu →</a>
    </div>
  </div>
</section>

<!-- ============ 2) Zašto ga žene vole ============ -->
<section class="hgm-sec">
  <div class="hgm-wrap hgm-row2">
    <div class="hgm-copy">
      <h2 class="hgm-h2">Zašto ga žene vole</h2>
      <div class="hgm-benefits">
        <?php foreach ( array(
          array( 'Obogaćen njegom',        'Arganovo ulje, panthenol i vitamin E — njega vlasišta, ne samo pigment.' ),
          array( 'Lagano i nadogradivo',   'Nanesite malo za prirodan rezultat ili slojevito za punije prekrivanje.' ),
          array( 'Otporan na vodu',        'Drži cijeli dan, ne razmazuje se i ne prenosi na odjeću.' ),
          array( 'Nježno prema vlasištu',  'Prikladno i za osjetljivo vlasište.' ),
          array( 'Traje 2 do 4 mjeseca',   'Jedno pakiranje uz svakodnevnu upotrebu.' ),
          array( 'Ogledalce i kist',       'U poklopcu — nanošenje bilo gdje, bez dodatnog pribora.' ),
        ) as $b ) : ?>
          <div class="hgm-benefit">
            <span class="hgm-dot" aria-hidden="true">✓</span>
            <div>
              <p class="hgm-benefit-t"><?php echo esc_html( $b[0] ); ?></p>
              <p class="hgm-benefit-d"><?php echo esc_html( $b[1] ); ?></p>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
    <div class="hgm-media"><?php echo $hm_img('hm_04_znacajke-7-nijansi.webp','Značajke HairMagic+ i 7 nijansi'); ?></div>
  </div>
</section>

<!-- ============ 3) HairMagic+ transformacije (kartice kao na originalu) ============ -->
<section class="hgm-sec hgm-alt">
  <div class="hgm-wrap">
    <h2 class="hgm-h2 hgm-center">HairMagic+ transformacije</h2>
    <div class="hgm-tr-grid">
      <?php foreach ( array(
        array( 'hm_05_prije-poslije-1', 'Moje tajno oružje između odlazaka frizeru',
               'Prije sam svaka tri tjedna trčala frizeru zbog izrasta. S HairMagic+ bez problema izdržim šest tjedana — nanošenje traje minutu i nitko ne primijeti razliku, čak ni pod uredskim svjetlom.', 'Jasna B.' ),
        array( 'hm_07_prije-poslije-3', 'Punija linija kose i samopouzdanje natrag',
               'Prorijeđena linija kose mi je godinama smetala. Probala sam sprejeve koji su izgledali lažno i bili ljepljivi. Ovaj puder popuni rijetka mjesta tako prirodno da mi ni frizerka nije primijetila.', 'Lidija P.' ),
        array( 'hm_10_prije-poslije-6', 'Konačno prekrivanje koje ne nadražuje',
               'Moje osjetljivo vlasište reagiralo je na svaki korektor koji sam probala — do HairMagic+. Prekrivanje je besprijekorno, drži i nakon joge, a vlasište me ne svrbi.', 'Emilija R.' ),
        array( 'hm_06_prije-poslije-2', 'Sijede nestanu u dvije minute',
               'Ujutro nemam vremena za bojanje. Utapkam puder na razdjeljak i gotova sam prije kave. Sijede se jednostavno više ne vide.', 'Vesna M.' ),
        array( 'hm_08_prije-poslije-4', 'Razdjeljak izgleda gušće',
               'Najviše me smetao široki razdjeljak. Sada izgleda uže i punije, a kosa se i dalje normalno pomiče — nema tvrdog ruba ni ljepljivosti.', 'Ivana K.' ),
        array( 'hm_11_prije-poslije-7', 'Nitko ne primijeti da nešto koristim',
               'Koristim ga i na obrvama. Kolegice su primijetile samo da izgledam odmornije — nitko nije pogodio zbog čega.', 'Maja T.' ),
      ) as $tr ) : ?>
        <article class="hgm-tr">
          <div class="hgm-tr-media"><?php echo $hm_img( $tr[0] . '.webp', $tr[1] ); ?></div>
          <div class="hgm-tr-body">
            <p class="hgm-tr-title"><?php echo esc_html( $tr[1] ); ?></p>
            <p class="hgm-tr-text">„<?php echo esc_html( $tr[2] ); ?>"</p>
            <p class="hgm-tr-foot"><span class="hgm-stars">★★★★★</span> <?php echo esc_html( $tr[3] ); ?></p>
          </div>
        </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ============ 4) Pronađite svoju nijansu ============ -->
<section class="hgm-sec">
  <div class="hgm-wrap hgm-row2">
    <div class="hgm-media"><?php echo $hm_img('hm_03_pronadite-nijansu.webp','Pronađite svoju nijansu'); ?></div>
    <div class="hgm-copy">
      <h2 class="hgm-h2">Pronađite svoju nijansu</h2>
      <p>Dostupno u 7 nijansi. Ako ste između dvije, odaberite <strong>svjetliju</strong> — puder se nadograđuje, pa tamniji ton uvijek možete dodati.</p>
      <ul class="hgm-shades">
        <?php foreach ( array(
          array( 'Platinasto plava', '#e8dcc4', 'svijetlo ledeno plava' ),
          array( 'Prirodno plava',   '#d8bb85', 'topla prirodno plava' ),
          array( 'Srednje smeđa',    '#8a5a3b', 'srednja topla smeđa' ),
          array( 'Čokoladno smeđa',  '#5a3524', 'topla čokoladno smeđa' ),
          array( 'Grafitno smeđa',   '#3a3330', 'duboka, hladno smeđa' ),
          array( 'Tamno smeđa',      '#2a1d16', 'najtamnija smeđa' ),
          array( 'Bakrena',          '#9c4b2f', 'bakreno crvena' ),
        ) as $sh ) : ?>
          <li><span class="hgm-swatch" style="background:<?php echo esc_attr( $sh[1] ); ?>"></span>
              <strong><?php echo esc_html( $sh[0] ); ?></strong> — <?php echo esc_html( $sh[2] ); ?></li>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>
</section>

<!-- ============ 5) Kako nanijeti ============ -->
<section class="hgm-sec hgm-alt">
  <div class="hgm-wrap hgm-row2">
    <div class="hgm-copy">
      <h2 class="hgm-h2">Od prorijeđenog do savršenog — za manje od 2 minute</h2>
      <ol class="hgm-steps">
        <li><strong>Nanesite na čistu, suhu kosu.</strong> Puder se ne nanosi na vlažnu kosu.</li>
        <li><strong>Usredotočite se na liniju kose</strong> ili prorijeđena mjesta — kist radi precizno.</li>
        <li><strong>Utapkajte i krenite.</strong> Drži cijeli dan, skida se običnim pranjem.</li>
      </ol>
      <a class="hgm-cta" href="#bundle-selector">Naruči HairMagic+</a>
    </div>
    <div class="hgm-media"><?php echo $hm_img('hm_14_kako-nanijeti.webp','Kako nanijeti HairMagic+ u tri koraka'); ?></div>
  </div>
</section>

<!-- ============ 6) Brojke ============ -->
<section class="hgm-sec">
  <div class="hgm-wrap hgm-row2">
    <div class="hgm-media"><?php echo $hm_img('hm_12_statistika-97-94-100.webp','Rezultati istraživanja'); ?></div>
    <div class="hgm-copy">
      <h2 class="hgm-h2">Što kažu korisnice</h2>
      <div class="hgm-stats">
        <div><span>97 %</span><p>žena starijih od 50 slaže se da puder trenutačno prekriva sijede i čini liniju kose punijom</p></div>
        <div><span>94 %</span><p>slaže se da drži cijeli dan i da se ne razmazuje</p></div>
        <div><span>100 %</span><p>slaže se da će uštedjeti novac rjeđim odlascima u frizerski salon</p></div>
      </div>
      <p class="hgm-note">Na temelju neovisnog potrošačkog istraživanja na 172 sudionice.</p>
    </div>
  </div>
</section>

<!-- ============ 7) Recenzija + obrve ============ -->
<section class="hgm-sec hgm-alt">
  <div class="hgm-wrap hgm-row2">
    <div class="hgm-media"><?php echo $hm_img('hm_15_recenzija-sarah.webp','Recenzija korisnice'); ?></div>
    <div class="hgm-media"><?php echo $hm_img('hm_13_znacajke-obrve.webp','Djeluje i na obrvama'); ?></div>
  </div>
</section>

<!-- ============ 8) Jamstvo ============ -->
<section class="hgm-sec">
  <div class="hgm-wrap-narrow hgm-center">
    <h2 class="hgm-h2 hgm-center">100 % jamstvo povrata novca</h2>
    <p>Isprobajte HairMagic+ bez rizika. Ako niste zadovoljni, javite nam se u roku od 30 dana i vraćamo vam novac.</p>
    <a class="hgm-cta" href="#bundle-selector">Naruči bez rizika</a>
  </div>
</section>

<style>
  .hgm-sec { padding: 46px 0; }
  .hgm-alt { background: #f7f4fa; }
  .hgm-wrap { max-width: 1440px; margin: 0 auto; padding: 0 22px; }
  .hgm-wrap-narrow { max-width: 820px; margin: 0 auto; padding: 0 22px; }
  .hgm-row2 { display: grid; grid-template-columns: 1fr 1fr; gap: 48px; align-items: center; }
  .hgm-h2 { font-size: clamp(24px,3.1vw,34px); font-weight: 800; color: #2a1b34; line-height: 1.2; margin: 0 0 16px; }
  .hgm-center { text-align: center; }
  .hgm-copy p, .hgm-sub, .hgm-wrap-narrow p { font-size: 15.5px; line-height: 1.65; color: #3a3a3a; margin: 0 0 14px; }
  .hgm-sub { max-width: 720px; margin: 0 auto 24px; }
  .hgm-lead { font-weight: 700; color: #2a1b34; }
  .hgm-note { font-size: 12.5px; color: #8a8a8a; }
  .hgm-media img { width: 100%; height: auto; display: block; border-radius: 14px; }

  .hgm-ph { width: 100%; aspect-ratio: 1/1; background: #ededed; border: 1px dashed #d3d3d3; border-radius: 14px;
            display: flex; align-items: center; justify-content: center; padding: 18px; box-sizing: border-box; }
  .hgm-ph span { font-size: 13px; color: #9a9a9a; text-align: center; }

  .hgm-check { list-style: none; margin: 0 0 16px; padding: 0; }
  .hgm-check li { position: relative; padding: 0 0 11px 30px; font-size: 15.5px; color: #2a1b34; line-height: 1.5; }
  .hgm-check li:before { content: "✓"; position: absolute; left: 0; top: 0; width: 20px; height: 20px; background: #6b3fa0; color: #fff; border-radius: 50%; font-size: 12px; text-align: center; line-height: 20px; }

  .hgm-benefits { display: grid; grid-template-columns: 1fr 1fr; gap: 16px; }
  .hgm-benefit { display: flex; gap: 10px; background: #fff; border: 1px solid #ece6f3; border-radius: 12px; padding: 14px 16px; }
  .hgm-dot { flex: 0 0 22px; width: 22px; height: 22px; border-radius: 50%; background: #6b3fa0; color: #fff; font-size: 12px; display: inline-flex; align-items: center; justify-content: center; }
  .hgm-benefit-t { font-weight: 800; font-size: 14.5px; color: #2a1b34; margin: 0 0 4px; }
  .hgm-benefit-d { font-size: 13.5px; line-height: 1.5; color: #5a5a5a; margin: 0; }

  .hgm-ba-grid { display: grid; grid-template-columns: repeat(3,1fr); gap: 18px; margin-top: 22px; }
  .hgm-ba img { border-radius: 12px; }

  /* transformacije — kartica: slika, naslov, citat, zvjezdice + ime */
  .hgm-tr-grid { display: grid; grid-template-columns: repeat(3,1fr); gap: 22px; margin-top: 26px; }
  .hgm-tr { background: #fff; border: 1px solid #ece6f3; border-radius: 14px; overflow: hidden; display: flex; flex-direction: column; }
  .hgm-tr-media img { width: 100%; height: auto; display: block; border-radius: 0; }
  .hgm-tr-body { padding: 18px 20px 20px; text-align: center; }
  .hgm-tr-title { font-size: 17px; font-weight: 800; color: #2a1b34; margin: 0 0 10px; line-height: 1.3; }
  .hgm-tr-text { font-size: 14.5px; line-height: 1.6; color: #4a4a4a; margin: 0 0 14px; }
  .hgm-tr-foot { font-size: 14px; font-weight: 700; color: #2a1b34; margin: 0; display: flex; align-items: center; justify-content: center; gap: 8px; }
  .hgm-stars { color: #f5b301; letter-spacing: 1px; }

  .hgm-shades { list-style: none; margin: 0; padding: 0; }
  .hgm-shades li { display: flex; align-items: center; gap: 10px; padding: 9px 0; border-bottom: 1px solid #ece6f3; font-size: 15px; color: #3a3a3a; }
  .hgm-swatch { width: 22px; height: 22px; border-radius: 50%; border: 1px solid rgba(0,0,0,.12); flex: 0 0 22px; }

  .hgm-steps { list-style: none; counter-reset: hgmstep; margin: 0 0 16px; padding: 0; }
  .hgm-steps li { counter-increment: hgmstep; position: relative; padding: 0 0 14px 40px; font-size: 15.5px; line-height: 1.55; color: #3a3a3a; }
  .hgm-steps li:before { content: counter(hgmstep); position: absolute; left: 0; top: 0; width: 26px; height: 26px; background: #6b3fa0; color: #fff; border-radius: 50%; font-size: 13px; font-weight: 700; text-align: center; line-height: 26px; }

  .hgm-stats { display: grid; gap: 14px; margin-bottom: 10px; }
  .hgm-stats > div { display: flex; gap: 14px; align-items: baseline; }
  .hgm-stats span { font-size: 30px; font-weight: 800; color: #6b3fa0; min-width: 88px; }
  .hgm-stats p { font-size: 14.5px; line-height: 1.5; color: #3a3a3a; margin: 0; }

  .hgm-cta { display: inline-block; margin-top: 6px; background: #6b3fa0; color: #fff; font-weight: 700; font-size: 15px; padding: 13px 26px; border-radius: 10px; text-decoration: none; }
  .hgm-cta:hover { background: #57318a; color: #fff; }

  @media (max-width: 820px) {
    .hgm-sec { padding: 9px 0; }
    .hgm-sec:first-of-type { padding-top: 0; }
    .hgm-wrap, .hgm-wrap-narrow { padding-left: 0; padding-right: 0; }
    .hgm-row2 { grid-template-columns: 1fr; gap: 18px; }
    .hgm-row2 .hgm-media { order: -1; }
    .hgm-h2 { font-size: 1.9rem; margin-bottom: 12px; }
    .hgm-benefits { grid-template-columns: 1fr; gap: 10px; }
    .hgm-tr-grid { grid-template-columns: 1fr; gap: 14px; }
    .hgm-cta { display: block; width: max-content; margin: 10px auto 0; }
  }

  /* Nema "Tablica veličina" na ovom proizvodu. */
  .noriks-global-sizechart, .gck-size-link, .gck-size-link-wrap,
  #open-size-chart, #open-size-chartCustom { display: none !important; }

  /* Ponude u ljubičastoj boji brenda; naslov lijevo, jedna cijena desno. */
  #bundle-selector .gck-per-chip, #bundle-selector .gck-hl-break { display: none !important; }
  #bundle-selector .bundle-total-line > span[style*="font-weight:normal"] { display: none !important; }
  #bundle-selector .bundle-option {
      background: #fff !important; border: 2px solid rgba(107,63,160,.28) !important; border-radius: 10px !important;
      display: flex !important; flex-wrap: wrap; align-items: center !important; min-height: 74px;
      padding: 14px 18px !important; margin: 0 0 12px !important; cursor: pointer;
      transition: border-color .15s ease, background .15s ease;
  }
  #bundle-selector .bundle-option.active { border-color: #6b3fa0 !important; background: rgba(107,63,160,.08) !important; }
  #bundle-selector .bundle-option .bundle-option-title { display: inline-flex; align-items: center; font-weight: 700; color: #2a1b34; font-size: 16px; }
  #bundle-selector .bundle-option .bundle-total-line { margin: 0 0 0 auto !important; display: inline-flex; flex-direction: column; align-items: flex-end; gap: 2px; font-size: 17px; font-weight: 800; color: #2a1b34; }
  #bundle-selector .bundle-option .gck-regular-price { font-weight: 400 !important; font-size: 14px !important; color: rgba(42,27,52,.55) !important; text-decoration: line-through; }
  #bundle-selector .gck-discount-badge {
      display: inline-flex !important; align-items: center; margin-left: 10px;
      background: #f1e9fa !important; color: #6b3fa0 !important; border: 1px solid #d9c9ee !important;
      border-radius: 6px !important; padding: 4px 8px !important; font-size: 12px !important; font-weight: 700 !important; line-height: 1 !important;
  }
  #bundle-selector .bundle-option input[type="radio"] {
      margin: 0 9px 0 0 !important; width: 18px !important; height: 18px !important; flex: 0 0 18px;
      box-sizing: border-box !important; border-color: #6b3fa0 !important;
      display: inline-flex !important; align-items: center !important; justify-content: center !important;
  }
  #bundle-selector .bundle-option input[type="radio"]::before {
      position: static !important; inset: auto !important; width: 8px !important; height: 8px !important;
      border-radius: 50% !important; background: #6b3fa0 !important;
  }
  /* Izbornik nijanse — kao dropdown na originalu */
  #bundle-selector .gck-size-select {
      width: 100% !important; max-width: none !important; border: 1px solid rgba(107,63,160,.35) !important;
      border-radius: 8px !important; padding: 11px 32px 11px 12px !important; font-size: 14.5px !important;
  }

  /* Kratki opis: viseci uvod samo na ✓ retcima. */
  .woocommerce-product-details__short-description ul { list-style: none; margin: 4px 0 8px; padding-left: 0; }
  .woocommerce-product-details__short-description ul li { padding-left: 1.6em; text-indent: -1.6em; line-height: 1.45; margin: 0 0 6px; }
  .woocommerce-product-details__short-description p { padding-left: 0; text-indent: 0; line-height: 1.5; margin: 0 0 10px !important; }
</style>

<script>
(function(){
  document.querySelectorAll('a.hgm-cta[href="#bundle-selector"]').forEach(function(a){
    a.addEventListener('click', function(e){ e.preventDefault(); var t=document.getElementById('bundle-selector')||document.querySelector('.single_add_to_cart_button'); if(t) t.scrollIntoView({behavior:'smooth',block:'center'}); });
  });
  /* Aktivna ponuda u ljubičastoj (preživljava LiteSpeed UCSS). */
  function paintHgm(){
    var sel=document.getElementById('bundle-selector'); if(!sel) return;
    sel.querySelectorAll('.bundle-option').forEach(function(c){ c.style.removeProperty('border-color'); c.style.removeProperty('background'); });
    var ch=sel.querySelector('input[name="bundle_option"]:checked');
    var card=ch?ch.closest('.bundle-option'):(sel.querySelector('.bundle-option.active')||sel.querySelector('.bundle-option'));
    if(card){ card.style.setProperty('border-color','#6b3fa0','important'); card.style.setProperty('background','rgba(107,63,160,0.08)','important'); }
  }
  function bindHgm(){ var sel=document.getElementById('bundle-selector'); if(!sel) return; paintHgm();
    sel.querySelectorAll('input[name="bundle_option"]').forEach(function(r){ r.addEventListener('change', paintHgm); }); }
  if(document.readyState==='loading'){ document.addEventListener('DOMContentLoaded', bindHgm); } else { bindHgm(); }
})();
</script>
