<?php
/**
 * NORIKS Salon | Četkica za obrve s bojom — why sekcije (1:1 z originalom). Generirano z postavi.js.
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
$slika = function ( $dat, $alt ) {
    $url = get_template_directory_uri() . '/img/salon/' . $dat;
    return '<img src="' . esc_url( $url ) . '" alt="' . esc_attr( $alt ) . '" loading="eager" decoding="async">';
};
$video = function ( $dat ) {
    $url = get_template_directory_uri() . '/img/salon/' . $dat;
    return '<video src="' . esc_url( $url ) . '" autoplay muted loop playsinline preload="metadata"></video>';
};
?>
<div class="nsalon">

  <section class="nsalon__sekcija nsalon__sekcija--bg nsalon__sekcija--video">
    <div class="nsalon__v nsalon__v--video">
      <div class="nsalon__glava">
        <div class="nsalon__kicker">Pogledajte kako se nanosi</div>
        <h2 class="nsalon__h2">Otkrijte koliko je lako dobiti <em>gušće obrve</em> ✨</h2>
        <p class="nsalon__p">Okrenite četkicu, lagano pritisnite da se oslobodi boja i prijeđite preko obrva u smjeru rasta dlačica. Rijetki dijelovi ispune se mekanim potezima koji izgledaju kao prave dlačice – bez olovke, sjenila i kompliciranja.</p>
      </div>
      <div class="nsalon__videi">
        <div class="nsalon__vid"><?php echo $video( 'noriks-salon-video-1.mp4' ); ?></div>
        <div class="nsalon__vid"><?php echo $video( 'noriks-salon-video-2.mp4' ); ?></div>
        <div class="nsalon__vid"><?php echo $video( 'noriks-salon-video-3.mp4' ); ?></div>
      </div>
    </div>
  </section>

  <section class="nsalon__sekcija">
    <div class="nsalon__v">
      <div class="nsalon__tekst">
        <div class="nsalon__kicker">Savršene obrve u sekundama</div>
        <h2 class="nsalon__h2">Ne u satima – u sekundama.</h2>
        <p class="nsalon__p">Stojite pred ogledalom. Jutro je, žurite se, a obrve jednostavno ne surađuju. Olovka je preoštra, sjenilo neujednačeno i čini se nemogućim da obje obrve izgledaju isto. Ispunjavate, brišete i pokušavate ponovno, a vrijeme prolazi. Ali ovaj put ne: okrenete četkicu, lagano pritisnete da se oslobodi boja i prijeđete preko obrva. U nekoliko sekundi rijetki dijelovi ispune se mekanim, prirodnim potezima koji oponašaju izgled dlačica.</p>
      </div>
      <div class="nsalon__media"><?php echo $slika( 'salon-01.png', 'Ne u satima – u sekundama.' ); ?></div>
    </div>
  </section>

  <section class="nsalon__sekcija nsalon__sekcija--bg">
    <div class="nsalon__v">
      <div class="nsalon__tekst">
        <div class="nsalon__kicker">Obrve kao iz salona, kod kuće</div>
        <h2 class="nsalon__h2">Gušće i prirodnije za 10–60 sekundi.</h2>
        <p class="nsalon__p">S inovativnom četkicom za obrve dobivate gušće, definirane i prirodne obrve u samo 10–60 sekundi. Bez olovke, bez sjenila, bez kompliciranja: samo jedan jednostavan potez koji oblikuje i ispunjava obrve kao da su prirodne dlačice. Pripremite se na komplimente i onaj sjajan osjećaj kad izađete iz kuće s obrvama koje uokviruju cijelo lice.</p>
      </div>
      <div class="nsalon__media"><?php echo $slika( 'salon-02.png', 'Gušće i prirodnije za 10–60 sekundi.' ); ?></div>
    </div>
  </section>

  <section class="nsalon__sekcija">
    <div class="nsalon__v">
      <div class="nsalon__tekst">
        <div class="nsalon__kicker">Zašto ga žene vole</div>
        <h2 class="nsalon__h2">Prati prirodni oblik obrve.</h2>
        <p class="nsalon__p">Precizna kosa četkica oblikuje i ispunjava bez razmazivanja. Završni izgled je prirodan i ujednačen – potezi nalik dlačicama izgledaju stvarno, a ne nacrtano. Rezultat je mekan i ujednačen, a obrve izgledaju prirodno gušće.</p>
      </div>
      <div class="nsalon__media"><?php echo $slika( 'salon-03.png', 'Prati prirodni oblik obrve.' ); ?></div>
    </div>
  </section>

  <section class="nsalon__sekcija nsalon__sekcija--bg">
    <div class="nsalon__v">
      <div class="nsalon__tekst">
        <div class="nsalon__kicker">Traje cijeli dan</div>
        <h2 class="nsalon__h2">Otporno na vodu i razmazivanje.</h2>
        <p class="nsalon__p">Formula otporna na znoj i trljanje traje cijeli dan, od jutra do večeri, i obrve zadržavaju mekan i prirodan izgled. Potpuno je otporna na vodu – ostaje netaknuta i po kiši, znoju, vježbanju i vlazi. Možete biti mirni da će obrve zadržati oblik bez razmazivanja.</p>
      </div>
      <div class="nsalon__media"><?php echo $slika( 'salon-04.png', 'Otporno na vodu i razmazivanje.' ); ?></div>
    </div>
  </section>

  <section class="nsalon__sekcija">
    <div class="nsalon__v">
      <div class="nsalon__tekst">
        <div class="nsalon__kicker">Za početnice</div>
        <h2 class="nsalon__h2">Ne morate znati crtati.</h2>
        <p class="nsalon__p">Savršeno za početnice – dovoljan je jedan potez za lijepe obrve. Nježna formula pogodna je i za osjetljivu kožu. Idealno i za tanke ili rijetke obrve: ispunjava prorijeđene dijelove, oblikuje tanke obrve i vraća definiciju ondje gdje nedostaje dlačica.</p>
      </div>
      <div class="nsalon__media"><?php echo $slika( 'salon-05.png', 'Ne morate znati crtati.' ); ?></div>
    </div>
  </section>

  <section class="nsalon__sekcija nsalon__sekcija--bg">
    <div class="nsalon__v">
      <div class="nsalon__tekst">
        <div class="nsalon__kicker">Nijanse i trajanje</div>
        <h2 class="nsalon__h2">Pet nijansi, 6–8 tjedana uz svakodnevnu upotrebu.</h2>
        <p class="nsalon__p">Birajte između pet nijansi: pepeljasto siva, tamnosmeđa, prirodno smeđa, svijetlosmeđa i crna. Jedan aplikator uz svakodnevnu upotrebu obično traje 6 do 8 tjedana. Manje od minute svako jutro – i obrve su gotove.</p>
      </div>
      <div class="nsalon__media"><?php echo $slika( 'salon-06.png', 'Pet nijansi, 6–8 tjedana uz svakodnevnu upotrebu.' ); ?></div>
    </div>
  </section>

  <section class="nsalon__sekcija">
    <div class="nsalon__v">
      <div class="nsalon__tekst">
        <div class="nsalon__kicker">Kupujte bez brige</div>
        <h2 class="nsalon__h2">Zašto NORIKS?</h2>
        <p class="nsalon__p">30 dana za povrat novca – ako niste zadovoljni, vratite proizvod unutar 30 dana. Besplatna dostava iznad 70 € i plaćanje pouzećem. Više od 120.000 zadovoljnih kupaca i prosječna ocjena 4,8.</p>
      </div>
      <div class="nsalon__media"><?php echo $slika( 'salon-07.png', 'Zašto NORIKS?' ); ?></div>
    </div>
  </section>
</div>
<style>
.nsalon{font-family:inherit;color:#121030}
.nsalon__sekcija{padding:46px 0}
.nsalon__sekcija--bg{background:#f6f5f2}
.nsalon__v{max-width:1240px;margin:0 auto;padding:0 24px;box-sizing:border-box;display:grid;grid-template-columns:1fr 1fr;gap:34px;align-items:center}
.nsalon__sekcija:nth-child(even) .nsalon__v{direction:rtl}
.nsalon__sekcija:nth-child(even) .nsalon__tekst,.nsalon__sekcija:nth-child(even) .nsalon__media{direction:ltr}
.nsalon__kicker{font-size:12px;letter-spacing:.14em;text-transform:uppercase;color:#8a8781;margin-bottom:8px}
.nsalon__h2{font-size:30px;line-height:1.15;margin:0 0 12px}
.nsalon__p{font-size:16px;line-height:1.6;margin:0}
.nsalon__media img{width:100%;height:auto;display:block;border-radius:12px}
@media(max-width:860px){.nsalon__v{grid-template-columns:1fr}.nsalon__h2{font-size:24px}}
.nsalon__v--video{display:block;max-width:1240px}
.nsalon__glava{max-width:760px;margin:0 auto 26px;text-align:center}
.nsalon__videi{display:grid;grid-template-columns:repeat(3,1fr);gap:18px}
.nsalon__vid video{width:100%;aspect-ratio:9/16;object-fit:cover;display:block;border-radius:12px;box-shadow:0 6px 20px rgba(0,0,0,.08);background:#000}
@media(max-width:860px){.nsalon__videi{grid-template-columns:repeat(3,72%);overflow-x:auto;scroll-snap-type:x mandatory;-webkit-overflow-scrolling:touch}.nsalon__vid{scroll-snap-align:start}}
</style>
