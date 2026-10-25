<?php
/**
 * product-bottom: PIKSELAND (pikseland)
 *
 * Retro gaming konzola — 58.000 igara, 40+ emulatora, 2 bežična kontrolera.
 * Why sekcije 1:1 s originalom thepikseland.de.
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$pik_i = get_template_directory_uri() . '/img/pikseland/';

// 1) Zaštom igrači vole PIKSELAND — 5 kartica
$pik_loves = array(
    array( 'title' => 'Povratak u djetinjstvo',         'text' => '„Pokrenuo prvu igru i odmah su se vratila sjećanja iz djetinjstva. Kakav osjećaj! ❤️"' ),
    array( 'title' => 'Brza dostava',                   'text' => '„Sve je brzo stiglo, konzola radi besprijekorno. Priključi i igraj. Jasna preporuka!"' ),
    array( 'title' => 'Ogroman izbor igara',            'text' => '„Toliko klasika u jednom uređaju? Teško se zaustaviti! Savršeno za duge večeri."' ),
    array( 'title' => '👨‍👩‍👦 Za cijelu obitelj',         'text' => '„Zapravo sam kupio za sebe, sad igram zajedno s djecom. Imamo ogroman fun!"' ),
    array( 'title' => 'Jednostavno korištenje',         'text' => '„Bez gnjavae, bez kompliciranog postavljanja. Priključio na TV i odmah igrao. Upravo to!"' ),
);
// 2) Usporedba: PIKSELAND vs stare konzole
$pik_vs = array(
    array( 'row' => 'Cijena',      'pik' => 'od 58,99 €',    'old' => 'Svaka posebno' ),
    array( 'row' => 'Igre',        'pik' => 'Do 58.000',     'old' => 'Par modula' ),
    array( 'row' => 'Kontroleri',  'pik' => 'Bežični',       'old' => 'S kabelom' ),
    array( 'row' => 'Start',       'pik' => '30 sekundi',    'old' => 'Adapter' ),
    array( 'row' => 'Prostor',     'pik' => 'U ruci',        'old' => 'Cijela polica' ),
    array( 'row' => 'Povrat',      'pik' => '14 dana',       'old' => 'Nema' ),
);
?>

<!-- ============ 1) Cijela retro-era u jednom uređaju ============ -->
<section class="pik-intro">
  <div class="pik-wrap">
    <p class="pik-kicker">PIKSELAND</p>
    <h2 class="pik-h2">Cijela retro-era u jednom uređaju!</h2>
    <div class="pik-row2">
      <div class="pik-row2-copy">
        <p><strong>Čak 58.000 igara</strong> i podrška za preko <strong>40 emulatora</strong> — jump'n'run, beat'em'up, trkaće igre, arkadne igre, pucačine, sportovi i još mnogo toga. Upravo one vrste igara pred kojima ste kao dijete sjedili satima.</p>
        <p>Od 8-bitnih klasika do 3D — sve na jednom malom sticku.</p>
      </div>
      <div class="pik-row2-media">
        <img src="<?php echo esc_url( $pik_i . 'pik-hero-1.webp' ); ?>" alt="PIKSELAND konzola s kontrolerima" loading="lazy">
      </div>
    </div>
  </div>
</section>

<!-- ============ 2) Zašto igrači vole PIKSELAND ============ -->
<section class="pik-loves">
  <div class="pik-wrap">
    <p class="pik-kicker">★★★★★ 4,8/5 · 1.081 kupaca</p>
    <h2 class="pik-h2 pik-center">Zašto naši kupci vole PIKSELAND</h2>
    <div class="pik-loves-grid">
      <?php foreach ( $pik_loves as $lv ) : ?>
        <div class="pik-love-card">
          <h3 class="pik-love-title"><?php echo esc_html( $lv['title'] ); ?></h3>
          <p class="pik-love-text"><?php echo wp_kses_post( $lv['text'] ); ?></p>
          <p class="pik-love-stars">★★★★★</p>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ============ 3) Postavljanje bez gnjavaže ============ -->
<section class="pik-setup">
  <div class="pik-wrap">
    <div class="pik-row2 pik-row2--rev">
      <div class="pik-row2-copy">
        <h2 class="pik-h2">Pikseland — postavljanje bez gnjavaže!</h2>
        <p>Priključi HDMI kabel, spoji struju, odaberi igru — <strong>tri jednostavna koraka i igraš.</strong></p>
        <p>Bez instalacije, bez postavljanja, bez interneta.</p>
        <p><strong>30 sekundi</strong> od kutije do prve igre.</p>
      </div>
      <div class="pik-row2-media">
        <img src="<?php echo esc_url( $pik_i . 'pik-setup.webp' ); ?>" alt="Priključivanje PIKSELAND konzole na TV" loading="lazy">
      </div>
    </div>
  </div>
</section>

<!-- ============ 4) Usporedba: umjesto police starih konzola ============ -->
<section class="pik-vs">
  <div class="pik-wrap">
    <p class="pik-kicker">USPOREDBA</p>
    <h2 class="pik-h2 pik-center">Umjesto police punoj starih konzola</h2>
    <p class="pik-subtitle">Cijelo tvoje djetinjstvo u jednom malom sticku.</p>
    <div class="pik-table">
      <div class="pik-thead">
        <div></div>
        <div>PIKSELAND™</div>
        <div>Stare konzole</div>
      </div>
      <?php foreach ( $pik_vs as $v ) : ?>
        <div class="pik-tr">
          <div class="pik-td-row"><?php echo esc_html( $v['row'] ); ?></div>
          <div class="pik-td-val pik-td-pik"><?php echo esc_html( $v['pik'] ); ?></div>
          <div class="pik-td-val pik-td-old"><?php echo esc_html( $v['old'] ); ?></div>
        </div>
      <?php endforeach; ?>
    </div>
    <div class="pik-vs-img">
      <img src="<?php echo esc_url( $pik_i . 'pik-games.webp' ); ?>" alt="PIKSELAND konzola s 58.000 igara" loading="lazy">
    </div>
  </div>
</section>

<!-- ============ 5) Igre koje cijela obitelj voli ============ -->
<section class="pik-family">
  <div class="pik-wrap">
    <div class="pik-row2">
      <div class="pik-row2-copy">
        <h2 class="pik-h2">Pikseland — igre koje cijela obitelj voli!</h2>
        <p>Bez diskova, modula i kabela — <strong>tisuće igara s klasičnih konzola u jednom uređaju.</strong></p>
        <p>Savršen izbor za retro-fanove, djecu i kao poklon svakom igraču.</p>
      </div>
      <div class="pik-row2-media">
        <img src="<?php echo esc_url( $pik_i . 'pik-family.webp' ); ?>" alt="Obitelj igra PIKSELAND zajedno" loading="lazy">
      </div>
    </div>
  </div>
</section>

<!-- ============ 6) Testiraj bez rizika ============ -->
<section class="pik-guarantee">
  <div class="pik-wrap pik-box">
    <h2 class="pik-h2 pik-center">Testiraj bez rizika.</h2>
    <p class="pik-center">Ako te PIKSELAND ne uvjeri, vrati ga unutar <strong>30 dana</strong> nakon primitka i dobit ćeš novac natrag. Bez ikakvih uvjeta.</p>
    <p class="pik-center"><strong>Besplatna dostava iznad 70 €</strong> · Plaćanje pouzećem · 120.000 kupaca · Ocjena 4,8</p>
  </div>
</section>

<style>
  /* Common */
  .pik-wrap { max-width: 1240px; margin: 0 auto; padding: 0 24px; }
  .pik-h2 { font-size: clamp(26px,3.2vw,38px); font-weight: 800; color: #1c1c1c; line-height: 1.2; margin: 0 0 20px; }
  .pik-kicker { font-size: 13px; letter-spacing: 1px; text-transform: uppercase; color: #777; margin: 0 0 10px; font-weight: 600; }
  .pik-center { text-align: center; }
  .pik-subtitle { font-size: 17px; color: #555; text-align: center; margin: -10px 0 28px; }

  /* 1) Intro */
  .pik-intro { background: #f7f7f7; padding: 50px 0; }
  .pik-row2 { display: grid; grid-template-columns: 1fr 1fr; gap: 50px; align-items: center; }
  .pik-row2--rev { direction: rtl; }
  .pik-row2--rev > * { direction: ltr; }
  .pik-row2-copy p { font-size: 16px; line-height: 1.65; color: #333; margin: 0 0 16px; }
  .pik-row2-media { border-radius: 16px; overflow: hidden; aspect-ratio: 4/5; background: #000; }
  .pik-row2-media img { width: 100%; height: 100%; object-fit: cover; display: block; }

  /* 2) Loves */
  .pik-loves { padding: 50px 0; background: #fff; }
  .pik-loves-grid { display: grid; grid-template-columns: repeat(5, 1fr); gap: 20px; }
  .pik-love-card { background: #f9f9f9; border-radius: 14px; padding: 20px; text-align: center; }
  .pik-love-title { font-size: 16px; font-weight: 700; color: #1c1c1c; margin: 0 0 10px; }
  .pik-love-text { font-size: 14px; line-height: 1.5; color: #444; margin: 0 0 10px; }
  .pik-love-stars { font-size: 18px; color: #ffb800; margin: 0; }

  /* 3) Setup */
  .pik-setup { background: #fff; padding: 50px 0; }

  /* 4) Usporedba */
  .pik-vs { background: #f0efe9; padding: 50px 0; }
  .pik-table { max-width: 700px; margin: 0 auto 30px; background: #fff; border-radius: 12px; overflow: hidden; }
  .pik-thead { display: grid; grid-template-columns: 1.2fr 1fr 1fr; background: #1c1c1c; color: #fff; font-weight: 700; font-size: 15px; padding: 14px 20px; }
  .pik-tr { display: grid; grid-template-columns: 1.2fr 1fr 1fr; border-bottom: 1px solid #e5e5e5; font-size: 15px; }
  .pik-tr:last-child { border-bottom: 0; }
  .pik-td-row { padding: 14px 20px; font-weight: 600; color: #1c1c1c; }
  .pik-td-val { padding: 14px 20px; color: #333; text-align: center; }
  .pik-td-pik { background: #d4f4dd; font-weight: 600; }
  .pik-td-old { background: #f9f9f9; }
  .pik-vs-img { max-width: 500px; margin: 0 auto; }
  .pik-vs-img img { width: 100%; height: auto; border-radius: 12px; display: block; }

  /* 5) Family */
  .pik-family { background: #fff; padding: 50px 0; }

  /* 6) Guarantee */
  .pik-guarantee { background: #223047; padding: 50px 0; }
  .pik-box { background: rgba(255,255,255,0.05); border-radius: 16px; padding: 40px; }
  .pik-guarantee .pik-h2, .pik-guarantee p { color: #fff; }

  /* Mobilno */
  @media (max-width: 900px) {
    .pik-row2 { grid-template-columns: 1fr; gap: 26px; }
    .pik-row2--rev { direction: ltr; }
    .pik-loves-grid { grid-template-columns: 1fr 1fr; gap: 16px; }
    .pik-table { margin: 0 16px; }
  }
  @media (max-width: 560px) {
    .pik-loves-grid { grid-template-columns: 1fr; }
    .pik-thead, .pik-tr { grid-template-columns: 1.5fr 1fr 1fr; font-size: 13px; }
    .pik-td-row, .pik-td-val { padding: 10px 12px; }
  }

  /* Sakrij tablicu veličina (konzola nema veličine) */
  .noriks-global-sizechart, .gck-size-link, .gck-size-link-wrap,
  #open-size-chart, #open-size-chartCustom { display: none !important; }
</style>
