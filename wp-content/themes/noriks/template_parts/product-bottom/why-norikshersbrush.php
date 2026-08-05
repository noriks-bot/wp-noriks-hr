<?php
/**
 * product-bottom: NORIKSHERS Cool Curl Pencil — stiler za ravnanje i kovrčanje (orto-norikshersbrush).
 * Struktura prati referentnu stranicu: malo klasicnih slika/tekst sekcija, ostalo
 * su kartice s koracima, usporedna tablica i specifikacije.
 *   1. Precizno oblikovanje — dva stila           slika lijevo   01
 *   2. Podizanje korijena + 4 koraka              slika desno    03 + kartice
 *   3. 360° hladni protok i manje topline         slika lijevo   04
 *   4. 5 temperatura i glatko klizanje            slika desno    05
 *   5. Kako uključiti                             4 kartice (kao original)
 *   6. Usporedba s drugim uređajima               tablica
 *   7. Specifikacije                              kartice
 *   8. U pakiranju                                slika + lista
 *   9. Što kažu kupci                             3 kartice recenzija
 * FAQ i recenzije renderira zajednički reviews.php (ne ovdje).
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
$nb      = get_template_directory_uri() . '/img/norikshersbrush/';
$nb_path = get_template_directory() . '/img/norikshersbrush/';

$nb_img = function( $file, $alt ) use ( $nb, $nb_path ) {
  if ( file_exists( $nb_path . $file ) ) {
    return '<img src="'.esc_url($nb.$file).'" alt="'.esc_attr($alt).'" loading="lazy">';
  }
  return '<div class="nhb-ph" role="img" aria-label="'.esc_attr($alt).'"><span>'.esc_html($alt).'</span></div>';
};
?>

<!-- ============ 1) Precizno oblikovanje — dva stila jednim uređajem ============ -->
<section class="nhb-sec">
  <div class="nhb-wrap nhb-row2">
    <div class="nhb-media"><?php echo $nb_img('01_precizno-oblikovanje_pink.jpg','Precizno oblikovanje kratke kose'); ?></div>
    <div class="nhb-copy">
      <h2 class="nhb-h2">Precizno oblikovanje, dva stila jednim uređajem</h2>
      <p class="nhb-lead">Uska ploča od <strong>1,7 cm</strong> ulazi točno tamo gdje velike pegle ne mogu — u šiške, rubne vlasi, pixie rez i bob.</p>
      <p>Zaobljeni rub omogućuje da kosu jednim potezom izravnate, a okretom zapešća oblikujete kovrču. Umjesto pegle, uvijača i četke u torbici nosite jedan uređaj.</p>
      <ul class="nhb-check">
        <li>Ravno i kovrčavo — bez mijenjanja nastavaka</li>
        <li>Kontrola pramen po pramen, bez povlačenja</li>
        <li>Radi i na teksturiranoj kosi</li>
      </ul>
      <a class="nhb-cta" href="#bundle-selector">Odaberi svoju boju →</a>
    </div>
  </div>
</section>

<!-- ============ 2) Podizanje korijena + 4 koraka ============ -->
<section class="nhb-sec nhb-alt">
  <div class="nhb-wrap nhb-row2">
    <div class="nhb-copy">
      <h2 class="nhb-h2">Podizanje korijena hladnim zrakom</h2>
      <p>Volumen najčešće nestane do podneva jer se kosa oblikuje toplinom, a onda se pod vlastitom težinom spusti. Hladni protok zraka fiksira oblik <strong>dok je kosa još u ploči</strong> — zato volumen ostaje.</p>
      <p>Uska ploča prilazi korijenu bez opasnosti za vlasište, pa podignete točno ono što treba, bez napora.</p>
    </div>
    <div class="nhb-media"><?php echo $nb_img('03_podizanje-korijena_pink.jpg','Podizanje korijena hladnim zrakom'); ?></div>
  </div>

  <div class="nhb-wrap">
    <div class="nhb-panel">
      <h3 class="nhb-panel-h">Kako podići korijen</h3>
      <div class="nhb-cards">
        <?php foreach ( array(
          array( '1', 'Uzmite tanak pramen uz liniju kose i postavite ploču blizu korijena', '10_korak-1' ),
          array( '2', 'Polako zarotirajte u obliku slova C, tik uz korijen',                 '10_korak-2' ),
          array( '3', 'Provucite kosu ravno prema van',                                      '10_korak-3' ),
          array( '4', 'Gotovo — uživajte u volumenu!',                                       '10_korak-4' ),
        ) as $st ) : ?>
          <article class="nhb-card">
            <?php $f = $st[2] . '.jpg'; if ( file_exists( $nb_path . $f ) ) : ?>
              <div class="nhb-card-media"><img src="<?php echo esc_url( $nb . $f ); ?>" alt="<?php echo esc_attr( $st[1] ); ?>" loading="lazy"></div>
            <?php endif; ?>
            <p class="nhb-card-text"><strong><?php echo esc_html( $st[0] ); ?>.</strong> <?php echo esc_html( $st[1] ); ?></p>
          </article>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>

<!-- ============ 3) 360° hladni protok zraka i manje topline ============ -->
<section class="nhb-sec">
  <div class="nhb-wrap nhb-row2">
    <div class="nhb-media"><?php echo $nb_img('04_hladni-protok_pink.jpg','360 stupnjeva hladni protok zraka'); ?></div>
    <div class="nhb-copy">
      <h2 class="nhb-h2">360° hladni protok zraka — manje topline, više sjaja</h2>
      <p>104 otvora po cijelom obodu ploče puštaju hladan zrak oko pramena, u svim smjerovima. Kosa se oblikuje i odmah fiksira, uz manje topline nego kod klasične pegle.</p>
      <ul class="nhb-check">
        <li><strong>2 sekunde</strong> za fiksiranje kovrče</li>
        <li><strong>48 sati</strong> trajanja stila</li>
        <li>Zrak se uključuje tek kad uređaj dosegne zadanu temperaturu</li>
        <li>Vlaga ostaje u kosi — glatka i sjajna umjesto isušene</li>
      </ul>
    </div>
  </div>
</section>

<!-- ============ 4) 5 temperaturnih postavki i glatko klizanje ============ -->
<section class="nhb-sec nhb-alt">
  <div class="nhb-wrap nhb-row2">
    <div class="nhb-copy">
      <h2 class="nhb-h2">5 temperaturnih postavki i glatko klizanje</h2>
      <ul class="nhb-temp">
        <li><span>220 °C</span> gruba kosa</li>
        <li><span>200 °C</span> gusta kosa</li>
        <li><span>180 °C</span> kovrčava kosa</li>
        <li><span>160 °C</span> fina kosa</li>
        <li><span>140 °C</span> tanka kosa</li>
      </ul>
      <ul class="nhb-check">
        <li><strong>3D plutajuća keramička ploča</strong> — bez zapinjanja i čupanja</li>
        <li><strong>Zaobljeni rub</strong> — glatko klizanje, bez pregiba</li>
        <li><strong>Sigurnosna brava</strong> — bez slučajnog uključivanja u torbici</li>
      </ul>
    </div>
    <div class="nhb-media"><?php echo $nb_img('05_temperature_pink.jpg','Pet temperaturnih postavki'); ?></div>
  </div>
</section>

<!-- ============ 5) Kako uključiti (kao na originalu: panel + 4 kartice) ============ -->
<section class="nhb-sec">
  <div class="nhb-wrap">
    <div class="nhb-panel">
      <h3 class="nhb-panel-h">Kako uključiti NORIKSHERS</h3>
      <div class="nhb-cards">
        <?php foreach ( array(
          array( 'Uključite u struju', 'Radi na 100–240 V — i na putovanju.', '11_ukljuci-1' ),
          array( 'Držite tipku 2 s',   'Pritisnite i držite tipku 2 sekunde.', '11_ukljuci-2' ),
          array( 'Svjetlo = spreman',  'Indikator pokazuje da je uređaj uključen.', '11_ukljuci-3' ),
        ) as $st ) : ?>
          <article class="nhb-card">
            <?php $f = $st[2] . '.jpg'; if ( file_exists( $nb_path . $f ) ) : ?>
              <div class="nhb-card-media"><img src="<?php echo esc_url( $nb . $f ); ?>" alt="<?php echo esc_attr( $st[0] ); ?>" loading="lazy"></div>
            <?php endif; ?>
            <p class="nhb-card-title"><?php echo esc_html( $st[0] ); ?></p>
            <p class="nhb-card-text"><?php echo esc_html( $st[1] ); ?></p>
          </article>
        <?php endforeach; ?>
        <article class="nhb-card nhb-card-help">
          <p class="nhb-card-title">Ne pali se?</p>
          <p class="nhb-card-text">Držite tipku za uključivanje <strong>pune 2 sekunde</strong>.</p>
          <p class="nhb-card-text nhb-muted">Automatsko isključivanje slijedi nakon 60 minuta.</p>
        </article>
      </div>
    </div>
  </div>
</section>

<!-- ============ 6) Usporedba s drugim uređajima ============ -->
<section class="nhb-sec nhb-alt">
  <div class="nhb-wrap">
    <div class="nhb-cmp-box">
      <div class="nhb-cmp-media"><?php echo $nb_img('07_izravnaj-ukovrcaj_pink.jpg','NORIKSHERS Cool Curl Pencil'); ?></div>
      <div class="nhb-cmp-table">
        <div class="nhb-cmp-head">
          <span></span>
          <span class="nhb-cmp-us">NORIKSHERS</span>
          <span>Klasični uvijač</span>
          <span>Pegla 25 mm</span>
        </div>
        <?php
        $y = '<i class="nhb-yes">✓</i>'; $n = '<i class="nhb-no">✕</i>';
        foreach ( array(
          array( 'Podizanje korijena',   1, 0, 0 ),
          array( 'Precizno oblikovanje', 1, 1, 0 ),
          array( 'Dugotrajan rezultat',  1, 0, 1 ),
          array( 'Zaštita od opeklina',  1, 0, 0 ),
          array( 'Hladni protok zraka',  1, 0, 0 ),
          array( 'Ravna i kovrča',       1, 0, 1 ),
        ) as $r ) : ?>
          <div class="nhb-cmp-row">
            <span class="nhb-cmp-label"><?php echo esc_html( $r[0] ); ?></span>
            <span><?php echo $r[1] ? $y : $n; ?></span>
            <span><?php echo $r[2] ? $y : $n; ?></span>
            <span><?php echo $r[3] ? $y : $n; ?></span>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>

<!-- ============ 7) Specifikacije ============ -->
<section class="nhb-sec nhb-spec-sec">
  <div class="nhb-wrap">
    <h2 class="nhb-h2 nhb-center">Specifikacije</h2>
    <p class="nhb-sub nhb-center">Sve što uređaj nosi ispod poklopca — bez sitnog tiska.</p>
    <div class="nhb-spec-grid">
      <?php foreach ( array(
        array( '📏', 'Širina ploče',             '94,5 × 10,0 mm', 'profil 1,7 cm' ),
        array( '🌡️', 'Temperature',              '140 – 220 °C',   '5 postavki' ),
        array( '💨', 'Hladni protok zraka',      '104 otvora',     '360° oko pramena' ),
        array( '🔌', 'Napajanje',                '100 – 240 V',    'dvostruki napon, 50–60 Hz' ),
        array( '⚡', 'Snaga',                     '46 W',           'brzo zagrijavanje' ),
        array( '🧵', 'Duljina kabela',            '2 m',            'okretni priključak' ),
        array( '⏱️', 'Automatsko isključivanje',  '60 minuta',      'bez brige ako zaboravite' ),
        array( '🎨', 'Boje',                      'crna i roza',    'ista tehnologija' ),
      ) as $sp ) : ?>
        <div class="nhb-spec-card">
          <span class="nhb-spec-ico" aria-hidden="true"><?php echo $sp[0]; ?></span>
          <div>
            <p class="nhb-spec-label"><?php echo esc_html( $sp[1] ); ?></p>
            <p class="nhb-spec-val"><?php echo esc_html( $sp[2] ); ?></p>
            <p class="nhb-spec-note"><?php echo esc_html( $sp[3] ); ?></p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ============ 8) U pakiranju ============ -->
<section class="nhb-sec nhb-pack-sec">
  <div class="nhb-wrap nhb-row2">
    <div class="nhb-pack-media"><?php echo $nb_img('09_sadrzaj-pakiranja_pink.jpg','Sadržaj pakiranja'); ?></div>
    <div class="nhb-copy">
      <h2 class="nhb-h2">Što dobivate u pakiranju</h2>
      <p>Sve je već unutra — ništa se ne dokupljuje.</p>
      <ul class="nhb-check">
        <li><strong>NORIKSHERS Cool Curl Pencil</strong> — stiler za ravnanje i kovrčanje</li>
        <li><strong>Rukavica otporna na toplinu</strong> — za sigurno oblikovanje u početku</li>
        <li><strong>Vodič za izradu kovrča</strong> — koraci i savjeti za svaki tip kose</li>
      </ul>
      <a class="nhb-cta" href="#bundle-selector">Naruči NORIKSHERS</a>
    </div>
  </div>
</section>

<!-- ============ 9) Što kažu kupci ============ -->
<section class="nhb-sec">
  <div class="nhb-wrap">
    <h2 class="nhb-h2 nhb-center">Što kažu kupci</h2>
    <div class="nhb-rev-grid">
      <?php foreach ( array(
        array( 'Konačno nešto za kratku kosu', 'Imam pixie i sve pegle su mi bile preširoke — nisam mogla do korijena ni do šiški. Ova uska ploča ulazi svugdje. Prvi put oblikujem kosu bez frustracije.', 'Petra M.' ),
        array( 'Volumen drži cijeli dan', 'Kosa mi je tanka i volumen je nestajao do podneva. Uz hladni zrak korijen ostaje podignut do večeri. To mi je bilo najveće iznenađenje.', 'Ivana K.' ),
        array( 'Manje oštećenja nego prije', 'Koristim 160 °C i kosa je vidno mekša nego s prijašnjom peglom na 200. Kovrče se fiksiraju u par sekundi i drže do sljedećeg pranja.', 'Marija T.' ),
      ) as $rv ) : ?>
        <article class="nhb-rev">
          <div class="nhb-stars" aria-label="Ocjena 5 od 5">★★★★★</div>
          <p class="nhb-rev-title"><?php echo esc_html( $rv[0] ); ?></p>
          <p class="nhb-rev-text">„<?php echo esc_html( $rv[1] ); ?>"</p>
          <p class="nhb-rev-name"><?php echo esc_html( $rv[2] ); ?></p>
        </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<style>
  .nhb-sec { padding: 46px 0; }
  .nhb-alt { background: #f6f4fa; }
  .nhb-wrap { max-width: 1180px; margin: 0 auto; padding: 0 18px; }
  .nhb-wrap-narrow { max-width: 940px; margin: 0 auto; padding: 0 18px; }
  .nhb-row2 { display: grid; grid-template-columns: 1fr 1fr; gap: 48px; align-items: center; }
  .nhb-h2 { font-size: clamp(24px,3.1vw,34px); font-weight: 800; color: #141414; line-height: 1.2; margin: 0 0 16px; }
  .nhb-h3 { font-size: 18px; font-weight: 800; color: #141414; margin: 0 0 12px; }
  .nhb-center { text-align: center; }
  .nhb-copy p { font-size: 15.5px; line-height: 1.65; color: #3a3a3a; margin: 0 0 14px; }
  .nhb-lead { font-weight: 700; color: #141414; }
  .nhb-muted { color: #8a8a8a !important; }
  .nhb-media img { width: 100%; height: auto; display: block; border-radius: 14px; }

  .nhb-ph { width: 100%; aspect-ratio: 1/1; background: #ededed; border: 1px dashed #d3d3d3; border-radius: 14px;
            display: flex; align-items: center; justify-content: center; padding: 18px; box-sizing: border-box; }
  .nhb-ph span { font-size: 13px; line-height: 1.45; color: #9a9a9a; text-align: center; }

  .nhb-check { list-style: none; margin: 0 0 16px; padding: 0; }
  .nhb-check li { position: relative; padding: 0 0 11px 30px; font-size: 15.5px; color: #141414; line-height: 1.5; }
  .nhb-check li:before { content: "✓"; position: absolute; left: 0; top: 0; width: 20px; height: 20px; background: #141414; color: #fff; border-radius: 50%; font-size: 12px; text-align: center; line-height: 20px; }
  .nhb-temp { list-style: none; margin: 0 0 20px; padding: 0; }
  .nhb-temp li { display: flex; align-items: center; gap: 12px; padding: 8px 0; border-bottom: 1px solid #e8e6f0; font-size: 15px; color: #3a3a3a; }
  .nhb-temp li span { min-width: 82px; font-weight: 800; color: #141414; }

  .nhb-cta { display: inline-block; margin-top: 6px; background: #141414; color: #fff; font-weight: 700; font-size: 15px; padding: 13px 26px; border-radius: 8px; text-decoration: none; }
  .nhb-cta:hover { background: #E8450E; color: #fff; }

  /* panel s karticama — kao na originalu (svijetlo ljubičasta ploha, bijele kartice) */
  .nhb-panel { background: #e9e6f8; border-radius: 22px; padding: 34px 28px; margin-top: 34px; }
  .nhb-panel-h { text-align: center; font-size: clamp(22px,2.6vw,32px); font-weight: 800; color: #1c1630; margin: 0 0 26px; }
  .nhb-cards { display: grid; grid-template-columns: repeat(4,1fr); gap: 16px; }
  .nhb-card { background: #fff; border-radius: 14px; overflow: hidden; display: flex; flex-direction: column; }
  .nhb-card-media img { width: 100%; height: 100%; aspect-ratio: 3/4; object-fit: cover; display: block; }
  .nhb-card-title { font-weight: 800; color: #141414; font-size: 14.5px; margin: 14px 16px 4px; }
  .nhb-card-text { font-size: 13.5px; line-height: 1.5; color: #4a4a4a; margin: 0 16px 14px; }
  .nhb-card-help { justify-content: center; padding: 22px 4px; }

  /* usporedna tablica */
  .nhb-cmp-box { display: grid; grid-template-columns: 0.85fr 1.15fr; gap: 30px; align-items: center;
                 background: #fff; border: 1px solid #e8e6f0; border-radius: 18px; padding: 26px; }
  .nhb-cmp-media img { width: 100%; height: auto; display: block; border-radius: 12px; }
  .nhb-cmp-head, .nhb-cmp-row { display: grid; grid-template-columns: 1.25fr .6fr .6fr .6fr; align-items: center; gap: 8px; }
  .nhb-cmp-head { padding-bottom: 12px; border-bottom: 2px solid #141414; }
  .nhb-cmp-head span { text-align: center; font-size: 13.5px; font-weight: 700; color: #6b6b6b; }
  .nhb-cmp-us { background: #e6f6ea; color: #1f7a3d !important; border-radius: 999px; padding: 6px 10px; }
  .nhb-cmp-row { padding: 12px 0; border-bottom: 1px solid #f0eef6; }
  .nhb-cmp-row span { text-align: center; }
  .nhb-cmp-label { text-align: left !important; font-size: 14.5px; font-weight: 700; color: #141414; }
  .nhb-yes, .nhb-no { display: inline-flex; width: 24px; height: 24px; border-radius: 50%; align-items: center;
                      justify-content: center; font-style: normal; font-size: 13px; }
  .nhb-yes { background: #e6f6ea; color: #1f7a3d; }
  .nhb-no  { background: #f2f2f2; color: #9a9a9a; }

  /* specifikacije — kartice na mekom prijelazu */
  .nhb-spec-sec { background: linear-gradient(180deg,#f6f4fa 0%,#efeaf9 100%); }
  .nhb-sub { font-size: 15.5px; color: #6b6b6b; max-width: 620px; margin: 0 auto 30px; }
  .nhb-spec-grid { display: grid; grid-template-columns: repeat(4,1fr); gap: 16px; }
  .nhb-spec-card { display: flex; gap: 12px; align-items: flex-start; background: #fff; border-radius: 16px;
                   padding: 20px 18px; box-shadow: 0 2px 10px rgba(28,22,48,.05); }
  .nhb-spec-ico { font-size: 20px; line-height: 1.1; }
  .nhb-spec-label { font-size: 12.5px; text-transform: uppercase; letter-spacing: .04em; color: #8a86a0; margin: 0 0 4px; }
  .nhb-spec-val { font-size: 17px; font-weight: 800; color: #141414; margin: 0 0 2px; }
  .nhb-spec-note { font-size: 12.5px; color: #8a8a8a; margin: 0; }

  /* pakiranje — svijetla sekcija sa slikom u okviru */
  .nhb-pack-sec { background: #fff; }
  .nhb-pack-media { background: #f6f4fa; border-radius: 18px; padding: 22px; }
  .nhb-pack-media img { width: 100%; height: auto; display: block; border-radius: 12px; }

  /* recenzije */
  .nhb-rev-grid { display: grid; grid-template-columns: repeat(3,1fr); gap: 22px; margin-top: 26px; }
  .nhb-rev { background: #fff; border: 1px solid #e8e8e8; border-radius: 12px; padding: 22px 20px; text-align: center; }
  .nhb-stars { color: #f5b301; font-size: 16px; letter-spacing: 1px; }
  .nhb-rev-title { font-weight: 800; color: #141414; font-size: 15px; margin: 10px 0; }
  .nhb-rev-text { font-size: 14px; line-height: 1.6; color: #4a4a4a; margin: 0 0 14px; }
  .nhb-rev-name { font-size: 13px; font-style: italic; color: #6b6b6b; margin: 0; }

  @media (max-width: 820px) {
    .nhb-sec { padding: 9px 0; }
    .nhb-sec:first-of-type { padding-top: 0; }
    .nhb-wrap, .nhb-wrap-narrow { padding-left: 0; padding-right: 0; }
    .nhb-row2, .nhb-pack { grid-template-columns: 1fr; gap: 18px; }
    .nhb-row2 .nhb-media { order: -1; }
    .nhb-h2 { font-size: 1.9rem; margin-bottom: 12px; }
    .nhb-panel { padding: 20px 14px; border-radius: 16px; margin-top: 20px; }
    .nhb-cards { grid-template-columns: 1fr 1fr; gap: 10px; }
    .nhb-rev-grid { grid-template-columns: 1fr; gap: 18px; }
    .nhb-spec-grid { grid-template-columns: 1fr 1fr; gap: 10px; }
    .nhb-spec-card { padding: 14px 12px; }
    .nhb-pack-media { padding: 12px; }
    .nhb-cmp-box { grid-template-columns: 1fr; gap: 18px; padding: 16px; }
    .nhb-cmp-head, .nhb-cmp-row { grid-template-columns: 1.1fr .5fr .5fr .5fr; }
    .nhb-cmp-head span, .nhb-cmp-label { font-size: 12.5px; }
  }

  /* Nema "Tablica veličina" linka na uređaju (ni plugin ni globalni). */
  .noriks-global-sizechart, .gck-size-link, .gck-size-link-wrap,
  #open-size-chart, #open-size-chartCustom { display: none !important; }

  /* Kratki opis: viseci uvod samo na ✓ retcima, odstavci poravnani. */
  .woocommerce-product-details__short-description { margin-bottom: 10px !important; }
  .woocommerce-product-details__short-description ul { list-style: none; margin: 4px 0 8px; padding-left: 0; }
  .woocommerce-product-details__short-description ul li { padding-left: 1.6em; text-indent: -1.6em; line-height: 1.45; margin: 0 0 6px; }
  .woocommerce-product-details__short-description p { padding-left: 0; text-indent: 0; line-height: 1.5; margin: 0 0 10px !important; }
</style>

<script>
(function(){
  document.querySelectorAll('a.nhb-cta[href="#bundle-selector"]').forEach(function(a){
    a.addEventListener('click', function(e){ e.preventDefault(); var t=document.getElementById('bundle-selector')||document.querySelector('.single_add_to_cart_button'); if(t) t.scrollIntoView({behavior:'smooth',block:'center'}); });
  });

  /* Slike u sekcijama prate odabranu boju (crna / roza). */
  function nhbSetColour(c){
    document.querySelectorAll('.nhb-media img, .nhb-cmp-media img, .nhb-pack-media img').forEach(function(img){
      var s=img.getAttribute('src'); if(!s){ return; }
      var alt=s.replace(/_(black|pink)\.jpg$/, '_'+c+'.jpg');
      if (alt!==s) { var p=new Image(); p.onload=function(){ img.src=alt; }; p.src=alt; }
    });
  }
  document.addEventListener('change', function(e){
    var t=e.target; if(!t||!t.value){ return; }
    var v=String(t.value).toLowerCase();
    if (v.indexOf('crn')===0 || v==='black') { nhbSetColour('black'); }
    if (v.indexOf('roz')===0 || v==='pink')  { nhbSetColour('pink'); }
  });
})();
</script>
