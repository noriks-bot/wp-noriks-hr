<?php
/**
 * product-bottom: NORIKS udlaga protiv hrkanja (orto-snore).
 *
 * Redoslijed prati referentnu stranicu (snorelessnow.com / Somnofit-S):
 *   1. Sto korisnici prijavljuju            (popis koristi)
 *   2. Rjesava glavni uzrok hrkanja         sn-prije-poslije
 *   3. Preporuka lijecnika                  sn-lijecnik
 *   4. Brojke                               sn-statistika
 *   5. Trake za raspodjelu pritiska         sn-trake
 *   6. Kako se koristi                      4 koraka
 *   7. Nije svaka udlaga ista               sn-usporedba
 *   8. Nagrade i priznanja                  sn-nagrade
 *   9. Vodic za velicine                    sn-velicine
 *  10. 120 noci jamstva                     sn-zajamceno
 * Recenzije i FAQ renderira zajednicki reviews.php.
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
$sn      = get_template_directory_uri() . '/img/snore/';
$sn_path = get_template_directory() . '/img/snore/';

$sn_img = function( $file, $alt ) use ( $sn, $sn_path ) {
  if ( file_exists( $sn_path . $file ) ) {
    return '<img src="'.esc_url($sn.$file).'" alt="'.esc_attr($alt).'" loading="lazy">';
  }
  return '<div class="nsn-ph" role="img" aria-label="'.esc_attr($alt).'"><span>'.esc_html($alt).'</span></div>';
};
?>

<!-- ============ 1) Sto korisnici prijavljuju ============ -->
<section class="nsn-sec nsn-dark">
  <div class="nsn-wrap nsn-center">
    <p class="nsn-eyebrow">Zašto ljudi ne odustaju od nje</p>
    <h2 class="nsn-h2">Što korisnici najčešće prijave</h2>
  </div>
  <div class="nsn-wrap">
    <div class="nsn-bens">
      <div class="nsn-ben"><strong>Manje hrkanja</strong><span>Već od prve noći, kod većine korisnika.</span></div>
      <div class="nsn-ben"><strong>Dublji san</strong><span>Više faza dubokog i REM sna.</span></div>
      <div class="nsn-ben"><strong>Mirniji partner</strong><span>Bez buđenja od buke pokraj sebe.</span></div>
      <div class="nsn-ben"><strong>Više energije</strong><span>Jutro bez one teške omamljenosti.</span></div>
      <div class="nsn-ben"><strong>Bistrija glava</strong><span>Bolja koncentracija tijekom dana.</span></div>
      <div class="nsn-ben"><strong>Bolje zdravlje</strong><span>Tijelo se noću stvarno oporavlja.</span></div>
    </div>
  </div>
</section>

<!-- ============ 2) Uzrok hrkanja ============ -->
<section class="nsn-sec">
  <div class="nsn-wrap nsn-row2">
    <div class="nsn-media"><?php echo $sn_img('sn-prije-poslije.webp','Prije i poslije — otvoren dišni put'); ?></div>
    <div class="nsn-copy">
      <h2 class="nsn-h2">Rješava glavni uzrok hrkanja</h2>
      <p>Tijekom sna mišići grla se opuste. Jezik i meko nepce padnu prema natrag i suze dišni put — zrak prolazi kroz uski otvor, tkivo vibrira i nastaje zvuk koji poznajete.</p>
      <p class="nsn-strong">Udlaga nježno pomiče donju čeljust naprijed i otvara dišni put. Zrak prolazi slobodno, vibracija prestaje.</p>
      <p>Zato djeluje i kada sprejevi, trakice za nos i jastuci ne pomognu — oni ne diraju uzrok, nego posljedicu.</p>
    </div>
  </div>
</section>

<!-- ============ 3) Lijecnik ============ -->
<section class="nsn-sec nsn-dark">
  <div class="nsn-wrap nsn-row2">
    <div class="nsn-copy">
      <p class="nsn-eyebrow">Preporuka struke</p>
      <h2 class="nsn-h2">„Preporučujem je svim svojim pacijentima koji hrču."</h2>
      <p>Udlaga za pomicanje čeljusti jedno je od rješenja koje liječnici najčešće predlažu kod jednostavnog hrkanja — neinvazivno je, bez lijekova i bez aparata uz krevet.</p>
      <p class="nsn-note">Ako sumnjate na apneju u snu (prestanak disanja, gušenje tijekom noći), prvo se javite liječniku.</p>
    </div>
    <div class="nsn-media"><?php echo $sn_img('sn-lijecnik.webp','Preporuka liječnika'); ?></div>
  </div>
</section>

<!-- ============ 4) Brojke ============ -->
<section class="nsn-sec">
  <div class="nsn-wrap nsn-row2">
    <div class="nsn-media"><?php echo $sn_img('sn-statistika.webp','97 % manje hrkanja, 98 % zadovoljstvo, 500.000+ prodanih'); ?></div>
    <div class="nsn-copy">
      <h2 class="nsn-h2">Brojke iza proizvoda</h2>
      <ul class="nsn-check">
        <li><strong>97 %</strong> korisnika prijavilo je manje hrkanja</li>
        <li><strong>98 %</strong> zadovoljstvo kupaca</li>
        <li><strong>500.000+</strong> prodanih komada u Europi</li>
      </ul>
      <p>Nije riječ o novom, neprovjerenom pomagalu — ista udlaga godinama se prodaje diljem Europe.</p>
    </div>
  </div>
</section>

<!-- ============ 5) Trake ============ -->
<section class="nsn-sec nsn-dark">
  <div class="nsn-wrap nsn-row2">
    <div class="nsn-copy">
      <h2 class="nsn-h2">Pet traka — vi birate koliko pomaka trebate</h2>
      <p>Uz udlagu dolazi <strong>pet zamjenjivih traka (#1–#5)</strong>. Svaka sljedeća pomiče čeljust <strong>1,5 mm više</strong> od prethodne.</p>
      <ul class="nsn-steps">
        <li>Počnite s najmanjim pomakom i spavajte nekoliko noći.</li>
        <li>Ako hrkanje ostane, prijeđite na sljedeću traku.</li>
        <li>Stanite na onoj traci na kojoj hrkanje prestane, a čeljust je i dalje udobna.</li>
      </ul>
      <p class="nsn-note">Trake ujedno raspoređuju pritisak po cijelom zubnom luku, pa nema bolnih točaka ujutro.</p>
    </div>
    <div class="nsn-media"><?php echo $sn_img('sn-trake.webp','Trake za raspodjelu pritiska'); ?></div>
  </div>
</section>

<!-- ============ 6) Kako se koristi ============ -->
<section class="nsn-sec">
  <div class="nsn-wrap nsn-center">
    <h2 class="nsn-h2">Kako se koristi</h2>
    <p class="nsn-sub">Prilagodba traje nekoliko minuta i radi se samo jednom.</p>
  </div>
  <div class="nsn-wrap">
    <div class="nsn-steps4">
      <div class="nsn-step4"><span class="nsn-num">1</span><h3>Zagrijte</h3><p>Udlagu uronite u vruću vodu na nekoliko sekundi da omekša.</p></div>
      <div class="nsn-step4"><span class="nsn-num">2</span><h3>Ugrizite</h3><p>Stavite je u usta i ugrizite — poprima oblik vaših zubi.</p></div>
      <div class="nsn-step4"><span class="nsn-num">3</span><h3>Podesite traku</h3><p>Odaberite traku #1–#5 prema tome koliko pomaka trebate.</p></div>
      <div class="nsn-step4"><span class="nsn-num">4</span><h3>Spavajte</h3><p>Nosite je cijelu noć. Vodu možete piti i dok je u ustima.</p></div>
    </div>
  </div>
</section>

<!-- ============ 7) Usporedba ============ -->
<section class="nsn-sec nsn-dark">
  <div class="nsn-wrap nsn-row2">
    <div class="nsn-media"><?php echo $sn_img('sn-usporedba.webp','NORIKS u usporedbi s običnom udlagom'); ?></div>
    <div class="nsn-copy">
      <h2 class="nsn-h2">Nije svaka udlaga ista</h2>
      <ul class="nsn-vs">
        <li class="is-yes"><strong>Švicarska izrada</strong><span>medicinski polimeri, ne jeftina plastika</span></li>
        <li class="is-yes"><strong>Podesiv pomak čeljusti</strong><span>pet traka umjesto jednog fiksnog položaja</span></li>
        <li class="is-yes"><strong>Otvorena usta</strong><span>možete piti i govoriti dok je nosite</span></li>
        <li class="is-yes"><strong>Prilagodba svim ustima</strong><span>oblikuje se po vašem ugrizu</span></li>
        <li class="is-yes"><strong>Ravnomjeran pritisak</strong><span>bez bolnih točaka na zubima</span></li>
      </ul>
    </div>
  </div>
</section>

<!-- ============ 8) Nagrade ============ -->
<section class="nsn-sec">
  <div class="nsn-wrap nsn-row2">
    <div class="nsn-copy">
      <p class="nsn-eyebrow">Priznanja</p>
      <h2 class="nsn-h2">Nagrađena udlaga</h2>
      <ul class="nsn-check">
        <li><strong>Sleep Foundation</strong> — „Najudobnija udlaga protiv hrkanja 2024."</li>
        <li><strong>MedTech Outlook</strong> — „Najbolji pružatelj ORL rješenja 2023."</li>
      </ul>
    </div>
    <div class="nsn-media"><?php echo $sn_img('sn-nagrade.webp','Nagrade i priznanja'); ?></div>
  </div>
</section>

<!-- ============ 9) Velicine ============ -->
<section class="nsn-sec nsn-dark">
  <div class="nsn-wrap nsn-row2">
    <div class="nsn-media"><?php echo $sn_img('sn-velicine.webp','Vodič za veličine — 4,1 × 6 × 2,5 cm'); ?></div>
    <div class="nsn-copy">
      <h2 class="nsn-h2">Jedna veličina, prilagodljiv okvir</h2>
      <p>Okvir je fleksibilan i oblikuje se po vašem ugrizu, pa <strong>odgovara većini veličina usta</strong> — ne birate veličinu pri narudžbi.</p>
      <ul class="nsn-check">
        <li>Duljina <strong>4,1 cm</strong> · Širina <strong>6 cm</strong></li>
        <li>Visina <strong>2,5 cm</strong> · Dubina ugriza <strong>1,3 cm</strong></li>
      </ul>
    </div>
  </div>
</section>

<!-- ============ 10) Jamstvo ============ -->
<section class="nsn-sec">
  <div class="nsn-wrap nsn-row2">
    <div class="nsn-copy">
      <p class="nsn-eyebrow">Bez rizika</p>
      <h2 class="nsn-h2">120 noći jamstva</h2>
      <p>Isprobajte je četiri mjeseca. Ako hrkanje ne popusti ili vam udlaga jednostavno ne odgovara, vraćamo vam cijeli iznos.</p>
      <ul class="nsn-check">
        <li>Bez BPA, ftalata i lateksa</li>
        <li>Možete piti vodu dok je nosite</li>
        <li>Podesive trake za maksimalnu udobnost</li>
      </ul>
      <a class="nsn-cta" href="#bundle-selector">Naruči bez rizika</a>
    </div>
    <div class="nsn-media"><?php echo $sn_img('sn-zajamceno.webp','120 noći jamstva'); ?></div>
  </div>
</section>

<style>
  .nsn-sec { padding: 46px 0; background: #fff; }
  .nsn-dark { background: #0b2a4a; }
  .nsn-wrap { max-width: 1180px; margin: 0 auto; padding: 0 18px; }
  .nsn-row2 { display: grid; grid-template-columns: 1fr 1fr; gap: 48px; align-items: center; }
  .nsn-center { text-align: center; }
  .nsn-h2 { font-size: clamp(24px,3.1vw,34px); font-weight: 800; color: #0b2a4a; line-height: 1.2; margin: 0 0 16px; }
  .nsn-eyebrow { font-size: 12.5px; font-weight: 800; letter-spacing: .12em; text-transform: uppercase; color: #5b83ad; margin: 0 0 8px; }
  .nsn-copy p, .nsn-sub { font-size: 16px; line-height: 1.7; color: #3a3a3a; margin: 0 0 14px; }
  .nsn-sub { max-width: 780px; margin: 0 auto 24px; }
  .nsn-strong { font-weight: 700; color: #0b2a4a !important; }
  .nsn-note { font-size: 14px !important; color: #6b6b6b !important; }
  .nsn-media img { width: 100%; height: auto; display: block; border-radius: 16px; }
  .nsn-ph { width: 100%; aspect-ratio: 1/1; background: #e8eef6; border: 1px dashed #c9d8e6; border-radius: 16px;
            display: flex; align-items: center; justify-content: center; padding: 18px; box-sizing: border-box; }
  .nsn-ph span { font-size: 13px; line-height: 1.45; color: #8ba3c0; text-align: center; }

  .nsn-dark .nsn-h2, .nsn-dark .nsn-strong { color: #fff !important; }
  .nsn-dark .nsn-copy p, .nsn-dark .nsn-sub { color: #c9daea; }
  .nsn-dark .nsn-note { color: #93aec9 !important; }
  .nsn-dark .nsn-check li { color: #eaf1f8; }
  .nsn-dark .nsn-steps li { color: #c9daea; }
  .nsn-dark .nsn-vs strong { color: #fff; }
  .nsn-dark .nsn-vs span { color: #a9c1d8; }
  .nsn-dark .nsn-vs li { border-bottom-color: #1c4269; }
  .nsn-dark .nsn-eyebrow { color: #7fa6cc; }

  .nsn-bens { display: grid; grid-template-columns: repeat(3, 1fr); gap: 16px; margin-top: 26px; }
  .nsn-ben { background: rgba(255,255,255,.07); border: 1px solid rgba(255,255,255,.14); border-radius: 12px; padding: 16px 18px; }
  .nsn-ben strong { display: block; font-size: 16px; font-weight: 800; color: #fff; margin-bottom: 5px; }
  .nsn-ben span { display: block; font-size: 14px; line-height: 1.55; color: #a9c1d8; }

  .nsn-check { list-style: none; margin: 0 0 16px; padding: 0; }
  .nsn-check li { position: relative; padding: 0 0 11px 30px; font-size: 15.5px; color: #0b2a4a; line-height: 1.5; }
  .nsn-check li:before { content: "✓"; position: absolute; left: 0; top: 0; width: 20px; height: 20px; background: #1e6fc4; color: #fff; border-radius: 50%; font-size: 12px; text-align: center; line-height: 20px; }

  .nsn-steps { list-style: none; counter-reset: nsn; margin: 0 0 16px; padding: 0; }
  .nsn-steps li { counter-increment: nsn; position: relative; padding: 0 0 14px 40px; font-size: 15.5px; line-height: 1.55; color: #3a3a3a; }
  .nsn-steps li:before { content: counter(nsn); position: absolute; left: 0; top: 0; width: 26px; height: 26px; background: #1e6fc4; color: #fff; border-radius: 50%; font-size: 13px; font-weight: 700; text-align: center; line-height: 26px; }

  .nsn-steps4 { display: grid; grid-template-columns: repeat(4, 1fr); gap: 22px; margin-top: 28px; }
  .nsn-step4 { text-align: center; }
  .nsn-num { display: inline-flex; width: 38px; height: 38px; align-items: center; justify-content: center;
             border-radius: 50%; background: #1e6fc4; color: #fff; font-weight: 800; font-size: 16px; margin-bottom: 12px; }
  .nsn-step4 h3 { font-size: 17px; font-weight: 800; color: #0b2a4a; margin: 0 0 6px; }
  .nsn-step4 p { font-size: 14.5px; line-height: 1.55; color: #40505f; margin: 0; }

  .nsn-vs { list-style: none; margin: 0; padding: 0; }
  .nsn-vs li { position: relative; padding: 11px 0 11px 34px; border-bottom: 1px solid #e2e8f2; }
  .nsn-vs li:last-child { border-bottom: 0; }
  .nsn-vs li:before { position: absolute; left: 0; top: 12px; width: 22px; height: 22px; border-radius: 50%; font-size: 12px; text-align: center; line-height: 22px; color: #fff; }
  .nsn-vs li.is-yes:before { content: "✓"; background: #1e6fc4; }
  .nsn-vs strong { display: block; font-size: 15.5px; color: #0b2a4a; }
  .nsn-vs span { display: block; font-size: 14px; color: #5a5a5a; }

  .nsn-cta { display: inline-block; margin-top: 8px; background: #0b2a4a; color: #fff; font-weight: 700; font-size: 16px; padding: 14px 30px; border-radius: 10px; text-decoration: none; }
  .nsn-cta:hover { background: #1e6fc4; color: #fff; }

  @media (max-width: 820px) {
    .nsn-sec { padding: 30px 0; }
    .nsn-row2 { grid-template-columns: 1fr; gap: 20px; }
    .nsn-row2 .nsn-media { order: -1; }
    .nsn-h2 { font-size: 1.75rem; }
    .nsn-wrap { padding: 0 9px; }
    .nsn-bens { grid-template-columns: repeat(2, 1fr); gap: 10px; }
    .nsn-ben { padding: 13px 14px; }
    .nsn-steps4 { grid-template-columns: repeat(2, 1fr); gap: 18px; }
  }

  /* jedna velicina — bez tablice velicina */
  .noriks-global-sizechart, .gck-size-link, .gck-size-link-wrap,
  #open-size-chart, #open-size-chartCustom { display: none !important; }

  .woocommerce-product-details__short-description ul { list-style: none; margin: 8px 0 14px; padding-left: 0; }
  .woocommerce-product-details__short-description ul li { list-style: none; padding-left: 17px; text-indent: -17px; margin-left: 0; line-height: 1.55; margin-bottom: 7px; }
  .woocommerce-product-details__short-description .nsn-tick { display: inline-block; width: 17px; text-indent: 0; color: #1e6fc4; font-weight: 800; }
  .woocommerce-product-details__short-description p:has(+ ul) { margin-top: 20px; margin-bottom: 4px; }
</style>

<script>
(function(){
  document.querySelectorAll('a.nsn-cta[href="#bundle-selector"]').forEach(function(a){
    a.addEventListener('click', function(e){
      e.preventDefault();
      var t = document.getElementById('bundle-selector') || document.querySelector('.single_add_to_cart_button');
      if (t) t.scrollIntoView({ behavior: 'smooth', block: 'center' });
    });
  });
})();
</script>
