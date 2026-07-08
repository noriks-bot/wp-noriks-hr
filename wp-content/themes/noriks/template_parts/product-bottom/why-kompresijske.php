<!-- product-bottom: KOMPRESIJSKE NOGAVICE (kompresijske-nogavice) -->
<?php
// Images live in the theme's /img/ folder. Drop these 3 files there:
//   wp-content/themes/noriks/img/kompresijske-1.jpg
//   wp-content/themes/noriks/img/kompresijske-2.jpg
//   wp-content/themes/noriks/img/kompresijske-3.jpg
// Until a file exists, a neutral placeholder is shown.
// Drop the images into wp-content/themes/noriks/img/ named so they start
// with "kompresijske" (e.g. kompresijske-1.jpg, kompresijske-2.jpg ...).
// Any of jpg/jpeg/png/webp works; they are used in sorted order.
$kn_dir_path = get_template_directory() . '/img/';
$kn_dir_uri  = get_template_directory_uri() . '/img/';

$kn_matches = glob( $kn_dir_path . 'kompresijske*.{jpg,jpeg,png,webp,JPG,JPEG,PNG,WEBP}', GLOB_BRACE );
$kn_matches = is_array( $kn_matches ) ? $kn_matches : array();
sort( $kn_matches );

$kn_url = function( $i ) use ( $kn_matches, $kn_dir_uri ) {
    return isset( $kn_matches[ $i ] ) ? ( $kn_dir_uri . rawurlencode( basename( $kn_matches[ $i ] ) ) ) : '';
};
$kn_img_1 = $kn_url( 0 );
$kn_img_2 = $kn_url( 1 );
$kn_img_3 = $kn_url( 2 );

$kn_placeholder = '<div style="width:100%;aspect-ratio:1/1;background:#f1f1f1;"></div>';
?>

<section class="why-section">
  <div style="max-width: 1440px;" class="container why-container">

    <!-- Left media -->
    <div class="why-col">
      <div class="video-wrapper">
        <?php if ( $kn_img_1 ) : ?>
          <img loading="lazy" decoding="async" style="width:100%; aspect-ratio:1/1; object-fit:cover;" src="<?php echo esc_url( $kn_img_1 ); ?>" alt="Kompresijske nogavice">
        <?php else : echo $kn_placeholder; endif; ?>
      </div>
    </div>

    <!-- Right content -->
    <div class="why-col why-content">
      <h2 style="color: #222; text-align:left; margin-left: 20px; font-family: 'Barlow', sans-serif; color:#222223;">
        ZAŠTO KOMPRESIJSKE NOGAVICE?
      </h2>

      <div style="margin-left: 20px;" class="why-point">
        <p><strong>Bolja cirkulacija, manje umora</strong></p>
        <p class="description">Postupna kompresija nježno potiče protok krvi prema srcu, smanjuje osjećaj težine i umora u nogama te pomaže da noge ostanu lagane i kroz najduži dan.</p>
      </div>

      <div style="margin-left: 20px;" class="why-point">
        <p><strong>Manje oticanja</strong></p>
        <p class="description">Idealne za duga putovanja, dugo stajanje ili sjedenje. Ravnomjeran pritisak smanjuje zadržavanje tekućine i oticanje gležnjeva i listova.</p>
      </div>

      <div style="margin-left: 20px;" class="why-point">
        <p><strong>Podrška koja se osjeti</strong></p>
        <p class="description">Anatomski kroj drži nogavicu na mjestu, bez stezanja na vrhu. Osjećaj čvrste, ali ugodne podrške tijekom cijelog dana.</p>
      </div>
    </div>

  </div>
</section>

<section style="background: white;" class="why-section">
  <div style="max-width: 1440px;" class="container why-container">

    <!-- Left media -->
    <div class="why-col">
      <div class="video-wrapper">
        <?php if ( $kn_img_2 ) : ?>
          <img loading="lazy" decoding="async" style="width:100%; aspect-ratio:1/1; object-fit:cover;" src="<?php echo esc_url( $kn_img_2 ); ?>" alt="Kompresijske nogavice - sport">
        <?php else : echo $kn_placeholder; endif; ?>
      </div>
    </div>

    <!-- Right content -->
    <div class="why-col why-content">
      <h2 style="color: #222; text-align:left; margin-left: 20px; font-family: 'Barlow', sans-serif; color:#222223;">
        ZA SPORT, RAD I OPORAVAK
      </h2>

      <div style="margin-left: 20px;" class="why-point">
        <p><strong>Više energije tijekom aktivnosti</strong></p>
        <p class="description">Kompresija podupire mišiće i smanjuje vibracije tijekom trčanja, treninga ili dugog hodanja — manje zamora, više izdržljivosti.</p>
      </div>

      <div style="margin-left: 20px;" class="why-point">
        <p class="description">
          ✅ Brži oporavak nakon treninga <br/>
          ✅ Manje grčeva i težine u nogama <br/>
          ✅ Savršene za posao na nogama i putovanja
        </p>
      </div>
    </div>

  </div>
</section>

<section class="why-section">
  <div style="max-width: 1440px;" class="container why-container">

    <!-- Left media -->
    <div class="why-col">
      <div class="video-wrapper">
        <?php if ( $kn_img_3 ) : ?>
          <img loading="lazy" decoding="async" style="width:100%; aspect-ratio:1/1; object-fit:cover;" src="<?php echo esc_url( $kn_img_3 ); ?>" alt="Kompresijske nogavice - materijal">
        <?php else : echo $kn_placeholder; endif; ?>
      </div>
    </div>

    <!-- Right content -->
    <div class="why-col why-content">
      <h2 style="color: #222; text-align:left; margin-left: 20px; font-family: 'Barlow', sans-serif; color:#222223;">
        UDOBNOST KOJA TRAJE
      </h2>

      <div style="margin-left: 20px;" class="why-point">
        <p><strong>Prozračan, mekan materijal</strong></p>
        <p class="description">Prozračno tkanje odvodi vlagu i drži stopala suhima, a mekana pletiva ne žuljaju i ne stežu — ugodne za nošenje od jutra do večeri.</p>
      </div>

      <div style="margin-left: 20px;" class="why-point">
        <p><strong>Ojačana peta i prsti</strong></p>
        <p class="description">Pojačane zone na peti i prstima produžuju trajnost, a ravni šav sprječava nadražaje. Kvaliteta koja se osjeti već pri prvom nošenju.</p>
      </div>
    </div>

  </div>
</section>
