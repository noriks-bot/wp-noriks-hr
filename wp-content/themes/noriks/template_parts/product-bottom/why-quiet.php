<?php
/**
 * NORIKS Quiet | Čepići za uši za smanjenje buke — why sekcije (1:1 z originalom). Generirano z postavi.js.
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
$slika = function ( $dat, $alt ) {
    $url = get_template_directory_uri() . '/img/quiet/' . $dat;
    return '<img src="' . esc_url( $url ) . '" alt="' . esc_attr( $alt ) . '" loading="lazy" decoding="async">';
};
?>
<div class="nquiet">

  <section class="nquiet__sekcija">
    <div class="nquiet__v">
      <div class="nquiet__tekst">
        <div class="nquiet__kicker">Manje buke</div>
        <h2 class="nquiet__h2">24 dB manje buke</h2>
        <p class="nquiet__p">Čepići prigušuju buku za 24 dB (SNR).</p>
      </div>
      <div class="nquiet__media"><?php echo $slika( 'nqt-01-24db.jpg', '24 dB manje buke' ); ?></div>
    </div>
  </section>

  <section class="nquiet__sekcija nquiet__sekcija--bg">
    <div class="nquiet__v">
      <div class="nquiet__tekst">
        <div class="nquiet__kicker">Udobnost</div>
        <h2 class="nquiet__h2">Mekani silikon i 4 veličine</h2>
        <p class="nquiet__p">Mekani silikon i četiri veličine nastavaka.</p>
      </div>
      <div class="nquiet__media"><?php echo $slika( 'nqt-02-silikon.png', 'Mekani silikon i 4 veličine' ); ?></div>
    </div>
  </section>

  <section class="nquiet__sekcija">
    <div class="nquiet__v">
      <div class="nquiet__tekst">
        <div class="nquiet__kicker">U paketu</div>
        <h2 class="nquiet__h2">Što dobivate</h2>
        <p class="nquiet__p">Čepići, 4 para nastavaka i kutijica.</p>
      </div>
      <div class="nquiet__media"><?php echo $slika( 'nqt-03-paket.jpg', 'Što dobivate' ); ?></div>
    </div>
  </section>

  <section class="nquiet__sekcija nquiet__sekcija--bg">
    <div class="nquiet__v">
      <div class="nquiet__tekst">
        <div class="nquiet__kicker">Odmor</div>
        <h2 class="nquiet__h2">Mir za odmor</h2>
        <p class="nquiet__p">Manje buke za miran odmor.</p>
      </div>
      <div class="nquiet__media"><?php echo $slika( 'nqt-04-odmor.png', 'Mir za odmor' ); ?></div>
    </div>
  </section>

  <section class="nquiet__sekcija">
    <div class="nquiet__v">
      <div class="nquiet__tekst">
        <div class="nquiet__kicker">Fokus</div>
        <h2 class="nquiet__h2">Više fokusa</h2>
        <p class="nquiet__p">Manje ometanja za bolji fokus.</p>
      </div>
      <div class="nquiet__media"><?php echo $slika( 'nqt-05-fokus.png', 'Više fokusa' ); ?></div>
    </div>
  </section>

  <section class="nquiet__sekcija nquiet__sekcija--bg">
    <div class="nquiet__v">
      <div class="nquiet__tekst">
        <div class="nquiet__kicker">Poklon</div>
        <h2 class="nquiet__h2">Poklon koji se koristi</h2>
        <p class="nquiet__p">Praktičan i višekratan poklon.</p>
      </div>
      <div class="nquiet__media"><?php echo $slika( 'nqt-06-poklon.png', 'Poklon koji se koristi' ); ?></div>
    </div>
  </section>

  <section class="nquiet__sekcija">
    <div class="nquiet__v">
      <div class="nquiet__tekst">
        <div class="nquiet__kicker">Iskustva</div>
        <h2 class="nquiet__h2">Što kažu kupci</h2>
        <p class="nquiet__p">Kupci o čepićima u uredu.</p>
      </div>
      <div class="nquiet__media"><?php echo $slika( 'nqt-07-ured.jpg', 'Što kažu kupci' ); ?></div>
    </div>
  </section>

  <section class="nquiet__sekcija nquiet__sekcija--bg">
    <div class="nquiet__v">
      <div class="nquiet__tekst">
        <div class="nquiet__kicker">NORIKS</div>
        <h2 class="nquiet__h2">Kupujte bez rizika</h2>
        <p class="nquiet__p">30 dana za povrat, besplatna dostava iznad 70 €, plaćanje pouzećem.</p>
      </div>
      <div class="nquiet__media"><?php echo $slika( 'nqt-08-noriks.png', 'Kupujte bez rizika' ); ?></div>
    </div>
  </section>
</div>
<style>
.nquiet{font-family:inherit;color:#121030}
.nquiet__sekcija{padding:46px 0}
.nquiet__sekcija--bg{background:#f6f5f2}
.nquiet__v{max-width:1180px;margin:0 auto;padding:0 18px;display:grid;grid-template-columns:1fr 1fr;gap:34px;align-items:center}
.nquiet__sekcija:nth-child(even) .nquiet__v{direction:rtl}
.nquiet__sekcija:nth-child(even) .nquiet__tekst,.nquiet__sekcija:nth-child(even) .nquiet__media{direction:ltr}
.nquiet__kicker{font-size:12px;letter-spacing:.14em;text-transform:uppercase;color:#8a8781;margin-bottom:8px}
.nquiet__h2{font-size:30px;line-height:1.15;margin:0 0 12px}
.nquiet__p{font-size:16px;line-height:1.6;margin:0}
.nquiet__media img{width:100%;height:auto;display:block;border-radius:12px}
@media(max-width:860px){.nquiet__v{grid-template-columns:1fr}.nquiet__h2{font-size:24px}}
</style>
