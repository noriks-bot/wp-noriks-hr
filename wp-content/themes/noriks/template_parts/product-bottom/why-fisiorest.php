<?php
/**
 * product-bottom: FISIOREST (orto-fisiorest)
 *
 * Dedicated bottom-nicer for the NORIKS FisioRest product.
 * Shown via single-product-bottom-nicer.php when noriks_is_type('fisiorest').
 *
 * SCAFFOLD — sekcije se dodaju po uputama korisnika (mediji u temu: img/fisiorest*).
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

// 1) "Znanstveno potkrijepljeno" — 4 kartice.
$fis_science = array(
    array( 'title' => 'Grba na vratu',        'text' => 'Trakcija <strong>oslobađa pritisak i vraća pravilno držanje</strong> kako bi smanjila grbu od tehnološkog vrata.' ),
    array( 'title' => 'Bolovi u vratu',       'text' => '<strong>Ublažava mišićne čvorove i ukočenost</strong> te <strong>ponovno poravnava krivinu vrata</strong> za brzo olakšanje boli.' ),
    array( 'title' => 'Kvalitetan san',       'text' => 'Umirujuća terapija <strong>opušta vrat i kralježnicu</strong> za dubok i okrepljujući san.' ),
    array( 'title' => 'Oslobađanje od stresa','text' => 'Topla masaža i istezanje <strong>oslobađaju nakupljenu napetost</strong> za veću udobnost.' ),
);
$fis_v = get_template_directory_uri() . '/img/fisiorest-videos/';
$fis_hero_video = $fis_v . 'hero.mp4';

// 3) Preporučuju stručnjaci
$fis_experts = array(
    array( 'vid' => $fis_v.'v01.mp4', 'name' => 'Joannie Lee',    'role' => 'Certificirana masažna terapeutkinja', 'org' => '' ),
    array( 'vid' => $fis_v.'v08.mp4', 'name' => 'Dr. Erin Cooper','role' => 'Doktorica fizikalne terapije',        'org' => '' ),
    array( 'vid' => $fis_v.'v03.mp4', 'name' => 'Dr. David Kulla','role' => 'Doktor kiropraktike',                 'org' => '' ),
);
// 4) Iskustva korisnika
$fis_ugc = array(
    array( 'vid' => $fis_v.'v09.mp4', 'cap' => '„Prvi put u dugo vremena napokon sam bez bolova…"' ),
    array( 'vid' => $fis_v.'v06.mp4', 'cap' => '„NORIKS jastuk je moja nova svakodnevna nužnost…"' ),
    array( 'vid' => $fis_v.'v11.mp4', 'cap' => '„Jako mi pomaže u ublažavanju napetosti u vratu i ramenima."' ),
    array( 'vid' => $fis_v.'v02.mp4', 'cap' => '„Ako ste tek postali mama, ovo bi moglo biti baš ono što trebate…"' ),
);
// 5) ThermoTrac 3-u-1
$fis_thermo = array(
    array( 'vid' => $fis_v.'v10.mp4', 'title' => 'Terapija trakcijom' ),
    array( 'vid' => $fis_v.'v07.mp4', 'title' => 'Terapija vibracijom' ),
    array( 'vid' => $fis_v.'v05.mp4', 'title' => 'Terapija toplinom' ),
);
// 6) Četiri poboljšanja
$fis_upgrades = array(
    array( 't' => 'Punjiva baterija',             'd' => 'Ponesite ga bilo kamo — baterija od 2500 mAh traje do 2 sata.' ),
    array( 't' => 'Navlaka od dudove svile',      'd' => 'Omotan u rashlađujuću svilu za mekan, luksuzan osjećaj.' ),
    array( 't' => 'Isključivanje nakon 30 min',   'd' => 'Četiri sesije po 30 minuta na jedno punjenje, bez brige.' ),
    array( 't' => 'Regulirana toplina',           'd' => 'Grijanje na 50 °C uz naprednu ThermoTrac tehnologiju.' ),
);
?>

<!-- ============ 1) Znanstveno potkrijepljeno ============ -->
<section class="fis-science">
  <div class="fis-wrap">
    <div class="fis-box">
      <h2 class="fis-title">Znanstveno potkrijepljeno: dokazano olakšanje za njegu vrata</h2>
      <div class="fis-grid">
        <?php foreach ( $fis_science as $fis_c ) : ?>
          <div class="fis-card">
            <h3 class="fis-card-title"><?php echo esc_html( $fis_c['title'] ); ?></h3>
            <p class="fis-card-text"><?php echo wp_kses_post( $fis_c['text'] ); ?></p>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>

<!-- ============ 2) Video hero + naslov ============ -->
<section class="fis-hero">
  <video class="fis-hero-vid" src="<?php echo esc_url( $fis_hero_video ); ?>" muted autoplay loop playsinline preload="metadata"></video>
  <div class="fis-hero-overlay"></div>
  <div class="fis-hero-inner">
    <h2 class="fis-hero-title">Otključajte duboki reset uz kombiniranu snagu poravnanja i opuštanja</h2>
  </div>
</section>

<!-- ============ 3) Preporučuju stručnjaci ============ -->
<section class="fis-experts">
  <div class="fis-wrap fis-exp-grid">
    <div class="fis-exp-quote">
      <h2 class="fis-h2">Preporučuju stručnjaci</h2>
      <p>„NORIKS je jedan od najboljih jastuka za vrat trenutno na tržištu. Budući da sam u wellness zajednici više od 25 godina, isprobala sam različite jastuke za vrat, a ono što NORIKS izdvaja jest funkcija trakcije…</p>
      <p>Ako imate isturenu glavu ili 'pognuto držanje', trakcija može pomoći da se kralješci ponovno poravnaju i potpuno podupru tijelo. Sama ga koristim i preporučujem svojim klijentima!"</p>
      <p class="fis-exp-author"><strong>Joannie Lee</strong><br>Certificirana masažna terapeutkinja</p>
    </div>
    <div class="fis-exp-cards">
      <?php foreach ( $fis_experts as $e ) : ?>
        <div class="fis-exp-card">
          <video src="<?php echo esc_url( $e['vid'] ); ?>" muted autoplay loop playsinline preload="metadata"></video>
          <div class="fis-exp-cap">
            <div class="fis-exp-name"><?php echo esc_html( $e['name'] ); ?></div>
            <div class="fis-exp-role"><?php echo esc_html( $e['role'] ); ?></div>
            <?php if ( $e['org'] ) : ?><div class="fis-exp-org"><?php echo esc_html( $e['org'] ); ?></div><?php endif; ?>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ============ 4) Iskustva korisnika ============ -->
<section class="fis-ugc">
  <div class="fis-wrap">
    <div class="fis-ugc-grid">
      <?php foreach ( $fis_ugc as $u ) : ?>
        <div class="fis-ugc-card">
          <div class="fis-ugc-media"><video src="<?php echo esc_url( $u['vid'] ); ?>" muted autoplay loop playsinline preload="metadata"></video></div>
          <p class="fis-ugc-cap"><?php echo esc_html( $u['cap'] ); ?></p>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ============ 5) ThermoTrac 3-u-1 ============ -->
<section class="fis-thermo">
  <div class="fis-wrap">
    <p class="fis-eyebrow"><strong>ThermoTrac™</strong> tehnologija</p>
    <h2 class="fis-h2 fis-center">Doživite 3-u-1 terapiju za vrat</h2>
    <div class="fis-thermo-grid">
      <?php foreach ( $fis_thermo as $t ) : ?>
        <div class="fis-thermo-card">
          <video src="<?php echo esc_url( $t['vid'] ); ?>" muted autoplay loop playsinline preload="metadata"></video>
          <div class="fis-thermo-label"><?php echo esc_html( $t['title'] ); ?></div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ============ 6) Četiri poboljšanja ============ -->
<section class="fis-upg">
  <div class="fis-wrap">
    <h2 class="fis-h2 fis-center">Četiri velika poboljšanja</h2>
    <div class="fis-upg-grid">
      <?php foreach ( $fis_upgrades as $g ) : ?>
        <div class="fis-upg-card">
          <div class="fis-upg-dot" aria-hidden="true"></div>
          <div class="fis-upg-title"><?php echo esc_html( $g['t'] ); ?></div>
          <p class="fis-upg-text"><?php echo esc_html( $g['d'] ); ?></p>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ============ 7) Dizajnirano od inženjera ============ -->
<section class="fis-eng">
  <div class="fis-wrap fis-row2">
    <div class="fis-row2-copy">
      <h2 class="fis-h2">Dizajnirano od inženjera. Izrađeno prema PT standardima</h2>
      <p>Uložili smo više od 50.000 € i 2 godine razvoja kako bismo osigurali da NORIKS nije samo maser za vrat. To je sveobuhvatan uređaj za terapiju vrata koji zaista liječi uzrok. Svaka narudžba prolazi detaljnu kontrolu kvalitete kako bi stigla u savršenom stanju.</p>
    </div>
    <div class="fis-row2-media"><video src="<?php echo esc_url( $fis_v.'hero.mp4' ); ?>" muted autoplay loop playsinline preload="metadata"></video></div>
  </div>
</section>

<!-- ============ 8) 14x jeftinije ============ -->
<section class="fis-cheaper">
  <div class="fis-wrap fis-row2">
    <div class="fis-row2-media"><video src="<?php echo esc_url( $fis_v.'v08.mp4' ); ?>" muted autoplay loop playsinline preload="metadata"></video></div>
    <div class="fis-row2-copy">
      <p class="fis-eyebrow">SIGURNA I OPUŠTAJUĆA TERAPIJA</p>
      <h2 class="fis-h2">14× jeftinije od tjednih termina</h2>
      <p>NORIKS se isplati u danima, ne mjesecima. Preporučen od terapeuta, pruža nježno olakšanje bez grubog pritiska ili rizičnih zahvata. Koristite ga svaku večer. Bez naručivanja. Bez putovanja. Bez ponavljajućih troškova — samo sigurna, dosljedna njega vrata kad god vam zatreba.</p>
    </div>
  </div>
</section>

<style>
  /* 2) Video hero */
  .fis-hero { position: relative; width: 100vw; left: 50%; margin-left: -50vw; min-height: 520px; display: flex; align-items: center; overflow: hidden; }
  .fis-hero-vid { position: absolute; inset: 0; width: 100%; height: 100%; object-fit: cover; }
  .fis-hero-overlay { position: absolute; inset: 0; background: linear-gradient(90deg, rgba(0,0,0,0.5), rgba(0,0,0,0.05) 55%); }
  .fis-hero-inner { position: relative; z-index: 2; max-width: 1180px; margin: 0 auto; padding: 0 40px; width: 100%; box-sizing: border-box; }
  .fis-hero-title { color: #fff; font-weight: 800; font-size: clamp(27px,4vw,46px); line-height: 1.15; max-width: 640px; margin: 0; text-shadow: 0 2px 14px rgba(0,0,0,0.4); }
  @media (max-width: 768px) { .fis-hero { min-height: 380px; } .fis-hero-inner { padding: 0 22px; } }

  /* zajednički */
  .fis-h2 { font-size: clamp(24px,3vw,34px); font-weight: 800; color: #1c1c1c; line-height: 1.2; margin: 0 0 18px; }
  .fis-center { text-align: center; }
  .fis-eyebrow { font-size: 13px; letter-spacing: 1px; text-transform: uppercase; color: #555; margin: 0 0 8px; }

  /* 3) Stručnjaci */
  .fis-experts { padding: 44px 0; }
  .fis-exp-grid { display: grid; grid-template-columns: 1fr 2fr; gap: 40px; align-items: start; }
  .fis-exp-quote p { font-size: 15.5px; line-height: 1.6; color: #333; margin: 0 0 14px; }
  .fis-exp-author { color: #1c1c1c; }
  .fis-exp-cards { display: grid; grid-template-columns: repeat(3, 1fr); gap: 18px; }
  .fis-exp-card { position: relative; border-radius: 14px; overflow: hidden; aspect-ratio: 3/4; background: #222; }
  .fis-exp-card video { width: 100%; height: 100%; object-fit: cover; display: block; }
  .fis-exp-cap { position: absolute; left: 0; right: 0; bottom: 0; padding: 14px; color: #fff; background: linear-gradient(0deg, rgba(0,0,0,.75), rgba(0,0,0,0)); }
  .fis-exp-name { font-weight: 800; font-size: 18px; }
  .fis-exp-role { font-size: 13px; }
  .fis-exp-org { font-size: 12px; font-style: italic; opacity: .9; }

  /* 4) UGC */
  .fis-ugc { background: #223047; padding: 40px 0; }
  .fis-ugc-grid { display: grid; grid-template-columns: repeat(4, 1fr); gap: 18px; }
  .fis-ugc-media { border-radius: 12px; overflow: hidden; aspect-ratio: 3/4; background: #000; }
  .fis-ugc-media video { width: 100%; height: 100%; object-fit: cover; display: block; }
  .fis-ugc-cap { color: #eee; font-size: 14px; line-height: 1.5; margin: 10px 0 0; }

  /* 5) ThermoTrac */
  .fis-thermo { background: #f0efe9; padding: 44px 0; }
  .fis-thermo-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px; }
  .fis-thermo-card { position: relative; border-radius: 16px; overflow: hidden; aspect-ratio: 4/3; background: #111; }
  .fis-thermo-card video { width: 100%; height: 100%; object-fit: cover; display: block; }
  .fis-thermo-label { position: absolute; left: 16px; bottom: 14px; color: #fff; font-weight: 800; font-size: 18px; text-shadow: 0 1px 8px rgba(0,0,0,.6); }

  /* 6) Upgrades */
  .fis-upg { padding: 44px 0; }
  .fis-upg-grid { display: grid; grid-template-columns: repeat(4, 1fr); gap: 24px; text-align: center; }
  .fis-upg-dot { width: 46px; height: 46px; border-radius: 50%; background: #223047; margin: 0 auto 14px; }
  .fis-upg-title { font-weight: 800; color: #1c1c1c; margin: 0 0 8px; font-size: 16px; }
  .fis-upg-text { font-size: 14px; line-height: 1.5; color: #444; margin: 0; }

  /* 7 + 8) row2 */
  .fis-eng, .fis-cheaper { padding: 40px 0; }
  .fis-cheaper { background: #f0efe9; }
  .fis-row2 { display: grid; grid-template-columns: 1fr 1fr; gap: 44px; align-items: center; }
  .fis-row2-copy p { font-size: 15.5px; line-height: 1.65; color: #333; }
  .fis-row2-media { border-radius: 16px; overflow: hidden; }
  .fis-row2-media video { width: 100%; height: auto; display: block; }

  @media (max-width: 900px) {
    .fis-exp-grid { grid-template-columns: 1fr; gap: 24px; }
    .fis-ugc-grid { grid-template-columns: 1fr 1fr; }
    .fis-thermo-grid { grid-template-columns: 1fr; }
    .fis-upg-grid { grid-template-columns: 1fr 1fr; gap: 22px; }
    .fis-row2 { grid-template-columns: 1fr; gap: 22px; }
    .fis-cheaper .fis-row2-media { order: 2; }
  }
  @media (max-width: 560px) {
    .fis-exp-cards { grid-template-columns: 1fr 1fr; }
    .fis-ugc-grid { grid-template-columns: 1fr; }
  }

  /* 1) Znanstveno potkrijepljeno — siva kartica */
  .fis-science { background: #f4f4f4; padding: 44px 0; }
  .fis-wrap { max-width: 1180px; margin: 0 auto; padding: 0 16px; }
  .fis-box { background: transparent; border-radius: 0; padding: 0; }
  .fis-title { font-size: clamp(23px,2.9vw,32px); font-weight: 800; color: #1c1c1c; line-height: 1.2; margin: 0 0 26px; }
  .fis-grid { display: grid; grid-template-columns: repeat(4, 1fr); gap: 0; }
  .fis-card { padding: 0 22px; border-left: 1px solid #dcdcdc; }
  .fis-card:first-child { border-left: 0; padding-left: 0; }
  .fis-card-title { font-size: 17px; font-weight: 800; color: #1c1c1c; margin: 0 0 10px; }
  .fis-card-text { font-size: 15px; line-height: 1.55; color: #333; margin: 0; }
  @media (max-width: 820px) {
    .fis-grid { grid-template-columns: 1fr 1fr; gap: 22px 0; }
    .fis-card:nth-child(odd) { border-left: 0; padding-left: 0; }
  }
  @media (max-width: 480px) {
    .fis-grid { grid-template-columns: 1fr; }
    .fis-card { border-left: 0; padding-left: 0; }
  }

  /* Nema "Tablica veličina" linka na FisioRest-u (identično kao bunion). */
  .noriks-global-sizechart, .gck-size-link, .gck-size-link-wrap,
  #open-size-chart, #open-size-chartCustom { display: none !important; }

  /* Kratki opis: sakrij standardne točke (•), razmaci. */
  .woocommerce-product-details__short-description ul { list-style: none; margin: 8px 0 26px; padding-left: 0; }
  .woocommerce-product-details__short-description ul li { list-style: none; padding-left: 0; margin-left: 0; }
  .woocommerce-product-details__short-description p:has(+ ul) { margin-top: 20px; margin-bottom: 4px; }
</style>
