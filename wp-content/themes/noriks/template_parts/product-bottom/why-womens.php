<?php
/**
 * NORIKS Ortopedske Cipele za Žene — why sekcije (1:1 z originalom). Generirano z postavi.js.
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
$slika = function ( $dat, $alt ) {
    $url = get_template_directory_uri() . '/img/womens/' . $dat;
    return '<img src="' . esc_url( $url ) . '" alt="' . esc_attr( $alt ) . '" loading="lazy" decoding="async">';
};
?>
<div class="nwomens">

  <section class="nwomens__sekcija">
    <div class="nwomens__v">
      <div class="nwomens__tekst">
        <div class="nwomens__kicker">PLANTARNA FASCIITIS</div>
        <h2 class="nwomens__h2">Ublažite bol u petama i svodovima</h2>
        <p class="nwomens__p">Ortopedski uložak s podrškom za svod stopala smanjuje napetost na plantarnoj fasciji i pruža trenutno olakšanje. Biomehaniĉki dizajn distribui ra pritisak ravnomjerno, čime se smanjuje bol tijekom hodanja i stajanja.</p>
      </div>
      <div class="nwomens__media"><?php echo $slika( 'womens-01.webp', 'Ublažite bol u petama i svodovima' ); ?></div>
    </div>
  </section>

  <section class="nwomens__sekcija nwomens__sekcija--bg">
    <div class="nwomens__v">
      <div class="nwomens__tekst">
        <div class="nwomens__kicker">ŠIROKA PREDNJA ZONA</div>
        <h2 class="nwomens__h2">Prirodno širenje prstiju bez pritiska</h2>
        <p class="nwomens__p">Prostor za prste dizajniran prema anatomiji stopala omogućava prirodan položaj i sprječava deformacije poput buniona. Vaši prsti neće biti stisnuti, što poboljšava cirkulaciju i smanjuje umor.</p>
      </div>
      <div class="nwomens__media"><?php echo $slika( 'womens-02.webp', 'Prirodno širenje prstiju bez pritiska' ); ?></div>
    </div>
  </section>

  <section class="nwomens__sekcija">
    <div class="nwomens__v">
      <div class="nwomens__tekst">
        <div class="nwomens__kicker">POTPORA ZGLOBOVIMA</div>
        <h2 class="nwomens__h2">Zaštitite koljena, kukove i leđa</h2>
        <p class="nwomens__p">Vrhunska amortizacija i potporna struktura smanjuju udarce pri svakom koraku, štiteći zglobove od prekomjernog opterećenja. Idealno za osobe s artritisom ili kroničnim bolovima u zglobovima.</p>
      </div>
      <div class="nwomens__media"><?php echo $slika( 'womens-03.webp', 'Zaštitite koljena, kukove i leđa' ); ?></div>
    </div>
  </section>

  <section class="nwomens__sekcija nwomens__sekcija--bg">
    <div class="nwomens__v">
      <div class="nwomens__tekst">
        <div class="nwomens__kicker">ANTIKLIZNA POTPLATA</div>
        <h2 class="nwomens__h2">Sigurnost na svakoj površini</h2>
        <p class="nwomens__p">Specijalno profilirana gumena potplata osigurava odličan prijanjanje na mokrim i glatkim površinama. Savršeno za bolnice, restorane i druge radne sredine gdje je sigurnost prioritet.</p>
      </div>
      <div class="nwomens__media"><?php echo $slika( 'womens-04.webp', 'Sigurnost na svakoj površini' ); ?></div>
    </div>
  </section>

  <section class="nwomens__sekcija">
    <div class="nwomens__v">
      <div class="nwomens__tekst">
        <div class="nwomens__kicker">PROZRAČNI MATERIJALI</div>
        <h2 class="nwomens__h2">Svježa stopala cijeli dan</h2>
        <p class="nwomens__p">Visokokvalitetna mrežasta tkanina omogućava optimalnu cirkulaciju zraka i odvodi vlagu. Vaša stopala ostaju suha i ugodna čak i nakon 12-satne smjene.</p>
      </div>
      <div class="nwomens__media"><?php echo $slika( 'womens-05.webp', 'Svježa stopala cijeli dan' ); ?></div>
    </div>
  </section>

  <section class="nwomens__sekcija nwomens__sekcija--bg">
    <div class="nwomens__v">
      <div class="nwomens__tekst">
        <div class="nwomens__kicker">ZA CIJELI DAN</div>
        <h2 class="nwomens__h2">Dizajnirane za profesionalce koji stoje</h2>
        <p class="nwomens__p">Medicinske sestre, učiteljice, prodavačice i frizerke diljem svijeta biraju NORIKS jer znaju da mogu računati na udobnost od početka do kraja radnog dana. Ergonomski dizajn smanjuje umor i povećava produktivnost.</p>
      </div>
      <div class="nwomens__media"><?php echo $slika( 'womens-06.webp', 'Dizajnirane za profesionalce koji stoje' ); ?></div>
    </div>
  </section>
</div>
<style>
.nwomens{font-family:inherit;color:#121030}
.nwomens__sekcija{padding:46px 0}
.nwomens__sekcija--bg{background:#f6f5f2}
.nwomens__v{max-width:1180px;margin:0 auto;padding:0 18px;display:grid;grid-template-columns:1fr 1fr;gap:34px;align-items:center}
.nwomens__sekcija:nth-child(even) .nwomens__v{direction:rtl}
.nwomens__sekcija:nth-child(even) .nwomens__tekst,.nwomens__sekcija:nth-child(even) .nwomens__media{direction:ltr}
.nwomens__kicker{font-size:12px;letter-spacing:.14em;text-transform:uppercase;color:#8a8781;margin-bottom:8px}
.nwomens__h2{font-size:30px;line-height:1.15;margin:0 0 12px}
.nwomens__p{font-size:16px;line-height:1.6;margin:0}
.nwomens__media img{width:100%;height:auto;display:block;border-radius:12px}
@media(max-width:860px){.nwomens__v{grid-template-columns:1fr}.nwomens__h2{font-size:24px}}
</style>
