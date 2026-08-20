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

<!-- ============ 2) Uzrok hrkanja ============ -->
<section class="nsn-sec nsn-dark">
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
<section class="nsn-sec">
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
<section class="nsn-sec nsn-dark">
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
<section class="nsn-sec">
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

<!-- ============ 6) Kako djeluje — pet krugova (kao na referenci) ============ -->
<?php
$sn_how = array(
  array('jaw',   'Pomak čeljusti',      'Udlaga nježno pomiče donju čeljust naprijed, dišni put se otvara i zrak prolazi slobodno.'),
  array('boil',  'Prilagodba ugrizu',   'Uronite je u vruću vodu i ugrizite — poprima točan oblik vaših zubi.'),
  array('strap', 'Podesiva traka',      'Pet traka (#1–#5) određuje koliko pomaka trebate, a čeljust ostaje pokretna.'),
  array('swiss', 'Švicarska izrada',    'Izrađena od medicinskih polimera, bez BPA, ftalata i lateksa.'),
  array('trust', 'Povjerenje tisuća',   'Više od 500.000 prodanih komada u Europi i 98 % zadovoljnih kupaca.'),
);
$sn_icon = function( $key ) {
  $ico = array(
    'jaw'   => '<path d="M14 20c0-7 5-12 12-12"/><path d="M14 20c0 8 6 14 14 14h12"/><path d="M34 26l8 4-8 4"/><circle cx="21" cy="18" r="1.6" fill="currentColor" stroke="none"/>',
    'boil'  => '<path d="M12 22h24v10a6 6 0 0 1-6 6H18a6 6 0 0 1-6-6z"/><path d="M36 25h5a3 3 0 0 1 0 6h-5"/><path d="M18 15c0-3 3-3 3-6M27 15c0-3 3-3 3-6"/>',
    'strap' => '<path d="M10 17h28M10 24h28M10 31h28"/><circle cx="17" cy="17" r="2"/><circle cx="17" cy="24" r="2"/><circle cx="17" cy="31" r="2"/><circle cx="31" cy="17" r="2"/><circle cx="31" cy="24" r="2"/><circle cx="31" cy="31" r="2"/>',
    'swiss' => '<path d="M24 9l13 5v11c0 8-5.5 13.5-13 16-7.5-2.5-13-8-13-16V14z"/><path d="M24 17v12M18 23h12"/>',
    'trust' => '<circle cx="24" cy="20" r="6"/><path d="M13 37c0-6 5-10 11-10s11 4 11 10"/><circle cx="12" cy="18" r="4"/><circle cx="36" cy="18" r="4"/>',
  );
  return isset( $ico[ $key ] ) ? $ico[ $key ] : '';
};
?>
<section class="nsn-sec nsn-soft">
  <div class="nsn-wrap nsn-center">
    <h2 class="nsn-h2">Kako djeluje</h2>
    <p class="nsn-sub">Pet stvari zbog kojih radi ondje gdje sprejevi i trakice ne pomognu.</p>
  </div>
  <div class="nsn-wrap">
    <div class="nsn-how">
      <?php foreach ( $sn_how as $h ) : ?>
        <div class="nsn-how-item">
          <span class="nsn-how-ic" aria-hidden="true">
            <svg viewBox="0 0 48 48" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><?php echo $sn_icon( $h[0] ); ?></svg>
          </span>
          <h3><?php echo esc_html( $h[1] ); ?></h3>
          <p><?php echo esc_html( $h[2] ); ?></p>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ============ 7) Usporedba — tablica (kao na referenci) ============ -->
<?php
$sn_vs = array(
  'Klinički dokazano',
  'Izrađeno od švicarskih medicinskih polimera',
  'Patentirane podesive trake za pokretljivost čeljusti',
  'Podesiv pomak čeljusti (#1–#5)',
  'Bez BPA, ftalata i lateksa',
  'Omogućuje pijenje i govor tijekom nošenja',
);
?>
<section class="nsn-sec">
  <div class="nsn-wrap nsn-center">
    <h2 class="nsn-h2">NORIKS i sve ostalo</h2>
    <p class="nsn-sub">Zašto se isplati uzeti udlagu koja je napravljena da traje.</p>
  </div>
  <div class="nsn-wrap">
    <div class="nsn-tbl-wrap">
      <table class="nsn-tbl">
        <thead>
          <tr>
            <th class="nsn-tbl-feat">Značajke</th>
            <th class="nsn-tbl-us">NORIKS</th>
            <th class="nsn-tbl-them">Ostali</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ( $sn_vs as $row ) : ?>
            <tr>
              <td class="nsn-tbl-feat"><?php echo esc_html( $row ); ?></td>
              <td class="nsn-tbl-us">
                <span class="nsn-yes" aria-label="da">
                  <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg>
                </span>
              </td>
              <td class="nsn-tbl-them">
                <span class="nsn-no" aria-label="ne">
                  <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round"><path d="M18 6 6 18M6 6l12 12"/></svg>
                </span>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</section>

<!-- ============ 1) Sto korisnici prijavljuju ============ -->
<section class="nsn-sec nsn-soft">
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

<!-- ============ 8) Nagrade ============ -->
<section class="nsn-sec nsn-dark">
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

  .nsn-soft { background: #eef5fb; }
  .nsn-how { display: grid; grid-template-columns: repeat(5, 1fr); gap: 22px; margin-top: 30px; }
  .nsn-how-item { text-align: center; }
  .nsn-how-ic { display: flex; width: 108px; height: 108px; margin: 0 auto 16px; border-radius: 50%;
                background: #0b2a4a; color: #9ecbf0; align-items: center; justify-content: center; }
  .nsn-how-ic svg { width: 58px; height: 58px; }
  .nsn-how-item h3 { font-size: 16.5px; font-weight: 800; color: #1e6fc4; margin: 0 0 8px; }
  .nsn-how-item p { font-size: 14.5px; line-height: 1.6; color: #40505f; margin: 0; }

  .nsn-bens { display: grid; grid-template-columns: repeat(3, 1fr); gap: 16px; margin-top: 26px; }
  .nsn-ben { background: #fff; border: 1px solid #dbe7f2; border-radius: 12px; padding: 16px 18px; }
  .nsn-ben strong { display: block; font-size: 16px; font-weight: 800; color: #0b2a4a; margin-bottom: 5px; }
  .nsn-ben span { display: block; font-size: 14px; line-height: 1.55; color: #4a5a6a; }
  .nsn-dark .nsn-ben { background: rgba(255,255,255,.07); border-color: rgba(255,255,255,.14); }
  .nsn-dark .nsn-ben strong { color: #fff; }
  .nsn-dark .nsn-ben span { color: #a9c1d8; }

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

  /* usporedna tablica */
  .nsn-tbl-wrap { margin-top: 28px; overflow-x: auto; -webkit-overflow-scrolling: touch; }
  table.nsn-tbl { width: 100%; min-width: 460px; border-collapse: separate; border-spacing: 0; background: #fff;
                  border-radius: 14px; overflow: hidden; }
  table.nsn-tbl th, table.nsn-tbl td { padding: 15px 16px; font-size: 15px; border-bottom: 1px solid #eef2f6; }
  table.nsn-tbl tbody tr:last-child th, table.nsn-tbl tbody tr:last-child td { border-bottom: 0; }
  table.nsn-tbl thead th { font-size: 15.5px; font-weight: 800; color: #fff; border-bottom: 0; text-align: center; }
  table.nsn-tbl thead th.nsn-tbl-feat { background: #3d95d8; text-align: left; }
  table.nsn-tbl thead th.nsn-tbl-us   { background: #0b2a4a; }
  table.nsn-tbl thead th.nsn-tbl-them { background: #0b2a4a; color: #b9cbdd; }
  table.nsn-tbl td.nsn-tbl-feat { color: #223; font-weight: 600; line-height: 1.45; }
  table.nsn-tbl td.nsn-tbl-us, table.nsn-tbl td.nsn-tbl-them { text-align: center; width: 22%; }
  table.nsn-tbl tbody tr:nth-child(even) td { background: #f7fafd; }
  .nsn-yes { display: inline-flex; color: #3d95d8; }
  .nsn-no  { display: inline-flex; color: #e14b4b; }

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
    .nsn-how { grid-template-columns: repeat(2, 1fr); gap: 20px 14px; margin-top: 20px; }
    .nsn-how-ic { width: 82px; height: 82px; margin-bottom: 12px; }
    .nsn-how-ic svg { width: 44px; height: 44px; }
    .nsn-how-item h3 { font-size: 15px; }
    .nsn-how-item p { font-size: 13.5px; }
    table.nsn-tbl { min-width: 420px; }
    table.nsn-tbl th, table.nsn-tbl td { padding: 12px 10px; font-size: 13.5px; }
    table.nsn-tbl thead th { font-size: 13.5px; }
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
