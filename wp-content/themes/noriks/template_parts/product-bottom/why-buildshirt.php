<?php
/**
 * product-bottom: NORIKS BuildShirt — majica s ugradenim grudnjakom (orto-buildshirt).
 * Original: getsummet.com (Sculpt Tank with Built-in Bra). Slike: img/buildshirt/ (Dropbox NORIKS - BUILDSHIRT/SPLETNA STRAN).
 * Pravilo: svaka sekcija ima TOCNO JEDNU sliku, naizmjenicno lijevo/desno; slike preko cijele kolone.
 *   1) Zvuči poznato? (lijevo)
 *   2) Glatko ispod svega (desno)
 *   3) Prava potpora (lijevo)
 *   4) Odvojivi ulošci (desno)
 *   5) Od jutra do večeri (lijevo)
 *   6) Tkanina (desno)
 *   7) Detalji kroja (lijevo)
 *   8) Jedan korak (desno)
 *   9) Veličine (lijevo)
 *  10) NORIKS BuildShirt (desno)
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$nbs      = get_template_directory_uri() . '/img/buildshirt/';
$nbs_path = get_template_directory() . '/img/buildshirt/';
$nbs_img  = function( $file, $alt ) use ( $nbs, $nbs_path ) {
  if ( ! file_exists( $nbs_path . $file ) ) { return ''; }
  return '<img src="' . esc_url( $nbs . $file ) . '" alt="' . esc_attr( $alt ) . '" loading="lazy">';
};
?>

<!-- 1) ZVUČI POZNATO? — slika lijevo -->
<section class="nbs-sec nbs-tint">
  <div class="nbs-wrap nbs-row2">
    <div class="nbs-media"><?php echo $nbs_img( 'bs-01-naramice.webp', 'Naramice koje se ne urezuju — NORIKS BuildShirt' ); ?></div>
    <div class="nbs-copy">
      <p class="nbs-kicker">Zvuči poznato?</p>
      <h2 class="nbs-h2">Grudnjaci koje <em>jedva čekate skinuti</em></h2>
      <p>Godine probavanja, kukice koje se savijaju, ladica puna grudnjaka od kojih nijedan ne sjedne kako treba. Naramice se urezuju u ramena, traka steže ispod grudi, a prvo što napravite kad dođete doma jest — skinete ga.</p>
      <ul class="nbs-cross">
        <li>Naramice koje <strong>urezuju</strong> ramena</li>
        <li>Traka koja <strong>steže</strong> ispod grudi</li>
        <li>Vidljive <strong>linije</strong> ispod odjeće</li>
        <li>Kukice koje se <strong>savijaju i pucaju</strong></li>
      </ul>
    </div>
  </div>
</section>

<!-- 2) GLATKO ISPOD SVEGA — slika desno -->
<section class="nbs-sec">
  <div class="nbs-wrap nbs-row2 nbs-row2--rev">
    <div class="nbs-copy">
      <p class="nbs-kicker">Glatko ispod svega</p>
      <h2 class="nbs-h2">Bez tragova grudnjaka <em>i naramica</em></h2>
      <p>NORIKS BuildShirt nije još jedan pokušaj boljeg grudnjaka. To je majica s <strong>već ugrađenim grudnjakom</strong>: široke plosnate naramice, četvrtasti izrez i glatko pletivo do bokova. Ništa se ne kopča i ništa se ne vidi ispod odjeće.</p>
      <ul class="nbs-check">
        <li>Čista linija ispod majice, haljine i košulje</li>
        <li>Bez kukica, žica i petljanja</li>
        <li>Jedan sloj umjesto dva</li>
      </ul>
    </div>
    <div class="nbs-media"><?php echo $nbs_img( 'bs-02-glatko.webp', 'Glatka linija ispod odjeće — NORIKS BuildShirt' ); ?></div>
  </div>
</section>

<!-- 3) PRAVA POTPORA — slika lijevo -->
<section class="nbs-sec nbs-tint">
  <div class="nbs-wrap nbs-row2">
    <div class="nbs-media"><?php echo $nbs_img( 'bs-06-potpora.webp', 'Mekane košarice bez žica — NORIKS BuildShirt' ); ?></div>
    <div class="nbs-copy">
      <p class="nbs-kicker">Prava potpora</p>
      <h2 class="nbs-h2">Potpora <em>bez žica</em></h2>
      <p>Mekane košarice podižu i oblikuju, a da ništa ne ureza, ne bode i ne stišće. Potpora dolazi iz kroja i pletiva, ne iz metalne žice.</p>
      <ul class="nbs-check">
        <li>Podiže i oblikuje bez žica</li>
        <li>Ne ureza se ni nakon cijelog dana</li>
        <li>Drži oblik i nakon pranja</li>
      </ul>
    </div>
  </div>
</section>

<!-- 4) ODVOJIVI ULOŠCI — slika desno -->
<section class="nbs-sec">
  <div class="nbs-wrap nbs-row2 nbs-row2--rev">
    <div class="nbs-copy">
      <p class="nbs-kicker">Odvojivi ulošci</p>
      <h2 class="nbs-h2">Vaša pokrivenost, <em>vaš izbor</em></h2>
      <p>Ulošci se umetnu ili izvade u nekoliko sekundi. Ostavite ih za oblik i dodatnu pokrivenost ili ih izvadite za potpuno prirodan izgled — ostaju na mjestu čak i u pranju.</p>
      <ul class="nbs-check">
        <li>Unutra — oblik i pokrivenost</li>
        <li>Vani — prirodan, mekan izgled</li>
        <li>Ne pomiču se i ne gužvaju u perilici</li>
      </ul>
    </div>
    <div class="nbs-media"><?php echo $nbs_img( 'bs-04-ulosci.webp', 'Odvojivi ulošci — NORIKS BuildShirt' ); ?></div>
  </div>
</section>

<!-- 5) OD JUTRA DO VEČERI — slika lijevo -->
<section class="nbs-sec nbs-tint">
  <div class="nbs-wrap nbs-row2">
    <div class="nbs-media"><?php echo $nbs_img( 'bs-03-cijeli-dan.webp', 'Udobnost cijeli dan — NORIKS BuildShirt' ); ?></div>
    <div class="nbs-copy">
      <p class="nbs-kicker">Od jutra do večeri</p>
      <h2 class="nbs-h2">Od 7 ujutro <em>do 23 navečer</em></h2>
      <p>Prvi grudnjak koji nećete poželjeti skinuti čim dođete kući. Nosite ga uz jutarnju kavu, na poslu, u šetnji i pred TV-om — i zaboravite da ga imate na sebi.</p>
      <ul class="nbs-check">
        <li>Za posao, kuću i putovanja</li>
        <li>Za spavanje i odmor</li>
        <li>Za vježbu niskog intenziteta</li>
      </ul>
    </div>
  </div>
</section>

<!-- 6) TKANINA — slika desno -->
<section class="nbs-sec">
  <div class="nbs-wrap nbs-row2 nbs-row2--rev">
    <div class="nbs-copy">
      <p class="nbs-kicker">Tkanina</p>
      <h2 class="nbs-h2">Meko kao maslac, <em>prozračno, rasteže se s vama</em></h2>
      <p>Bešavno pletivo koje se rasteže u svim smjerovima i vraća u oblik. Prozračno je, ugodno na koži i dovoljno tanko da se ne vidi ispod odjeće.</p>
      <ul class="nbs-check">
        <li>Bešavna izrada — bez šavova koji žuljaju</li>
        <li>Rasteže se u svim smjerovima</li>
        <li>Pranje na hladno, bez sušilice</li>
      </ul>
    </div>
    <div class="nbs-media"><?php echo $nbs_img( 'bs-05-meko.webp', 'Mekana prozračna tkanina — NORIKS BuildShirt' ); ?></div>
  </div>
</section>

<!-- 7) DETALJI KROJA — slika lijevo -->
<section class="nbs-sec nbs-tint">
  <div class="nbs-wrap nbs-row2">
    <div class="nbs-media"><?php echo $nbs_img( 'bs-07-detalji.webp', 'Detalji kroja — četvrtasti izrez, potpora, dužina do bokova' ); ?></div>
    <div class="nbs-copy">
      <p class="nbs-kicker">Detalji kroja</p>
      <h2 class="nbs-h2">Kroj koji <em>stoji na mjestu</em></h2>
      <p>Svaki detalj ima razlog: četvrtasti izrez koji lijepo stoji bez zjapljenja, dio ispod grudi koji zaglađuje i podupire te dužina do bokova koja se ne diže dok se krećete.</p>
      <ul class="nbs-check">
        <li>Četvrtasti izrez — bez zjapljenja</li>
        <li>Zaglađuje i podupire cijelo tijelo</li>
        <li>Seže do bokova — ne diže se i lako se podvuče</li>
      </ul>
    </div>
  </div>
</section>

<!-- 8) JEDAN KORAK — slika desno -->
<section class="nbs-sec">
  <div class="nbs-wrap nbs-row2 nbs-row2--rev">
    <div class="nbs-copy">
      <p class="nbs-kicker">Jedan korak</p>
      <h2 class="nbs-h2">Odjeveni <em>u jednom koraku</em></h2>
      <p>Jedan sloj zamjenjuje tri. Nema više kopčanja, namještanja naramica i traženja grudnjaka koji odgovara izrezu.</p>
      <ul class="nbs-check">
        <li>Stari način: grudnjak + majica + namještanje</li>
        <li>NORIKS način: jedna majica i gotovo</li>
        <li>Ujutro uštedite nekoliko minuta</li>
      </ul>
    </div>
    <div class="nbs-media"><?php echo $nbs_img( 'bs-12-jedan-korak.webp', 'Stari način protiv NORIKS načina — jedan sloj umjesto tri' ); ?></div>
  </div>
</section>

<!-- 9) VELIČINE — slika lijevo -->
<section class="nbs-sec nbs-tint">
  <div class="nbs-wrap nbs-row2">
    <div class="nbs-media"><?php echo $nbs_img( 'bs-10-velicine.webp', 'Tablica veličina NORIKS BuildShirt — XS do 6XL' ); ?></div>
    <div class="nbs-copy">
      <p class="nbs-kicker">Veličine</p>
      <h2 class="nbs-h2">Deset veličina, <em>od XS do 6XL</em></h2>
      <p>Veličinu birajte prema svojoj visini i težini. Ako ste između dvije veličine, uzmite veću — majica treba glatko prianjati, a ne stezati.</p>
      <ul class="nbs-check">
        <li>XS do XL — za 49 do 79 kg</li>
        <li>2XL do 6XL — za 89 do 134 kg</li>
        <li>Deset boja, od crne i bijele do kave i maslinaste</li>
      </ul>
    </div>
  </div>
</section>

<!-- 10) NORIKS BUILDSHIRT — slika desno -->
<section class="nbs-sec">
  <div class="nbs-wrap nbs-row2 nbs-row2--rev">
    <div class="nbs-copy">
      <p class="nbs-kicker">NORIKS BuildShirt</p>
      <h2 class="nbs-h2">Isprobajte je <em>30 dana bez rizika</em></h2>
      <p>Nosite je tjedan dana na poslu i kod kuće. Ako vam ne odgovara veličina ili boja, zamijenit ćemo je besplatno — a ako vam ne odgovara uopće, vraćamo novac.</p>
      <ul class="nbs-check">
        <li><strong>30 dana</strong> za povrat novca</li>
        <li>Besplatna zamjena veličine</li>
        <li>Plaćanje pouzećem pri preuzimanju</li>
      </ul>
      <a class="nbs-cta" href="#bundle-selector">Naruči NORIKS BuildShirt</a>
    </div>
    <div class="nbs-media"><?php echo $nbs_img( 'bs-14-jamstvo.webp', '30 dana jamstva povrata novca — NORIKS BuildShirt' ); ?></div>
  </div>
</section>

<style>
.nbs-sec { padding: 60px 0; background: #fff; font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Arial, sans-serif; color: #2a2320; }
.nbs-sec * { box-sizing: border-box; }
.nbs-tint { background: #f7f1ec; }
.nbs-wrap { width: 100%; max-width: 1440px; margin: 0 auto; padding: 0 24px; }
.nbs-row2 { display: grid; grid-template-columns: 1fr 1fr; gap: 56px; align-items: center; }
.nbs-media { text-align: left; }
.nbs-media img { display: block; width: 100%; max-width: 100%; height: auto; object-fit: cover; border-radius: 14px;
  box-shadow: 0 2px 4px rgba(40,25,20,.05), 0 14px 40px rgba(40,25,20,.10); }
.nbs-kicker { font-size: 12.5px; font-weight: 800; letter-spacing: .14em; text-transform: uppercase; color: #a8705a; margin: 0 0 10px; }
.nbs-h2 { font-size: clamp(25px, 3.1vw, 36px); font-weight: 800; line-height: 1.18; letter-spacing: -.01em; margin: 0 0 16px; color: #2a2320; }
.nbs-h2 em { font-style: italic; font-weight: 800; color: #a8705a; }
.nbs-copy p { font-size: 16px; line-height: 1.7; color: #5d4f48; margin: 0 0 14px; }
.nbs-check, .nbs-cross { list-style: none; padding: 0; margin: 4px 0 0; display: flex; flex-direction: column; gap: 11px; }
.nbs-check li, .nbs-cross li { position: relative; padding-left: 28px; font-size: 15.5px; line-height: 1.5; color: #2a2320; }
.nbs-check li::before { content: "\2713"; position: absolute; left: 0; top: 0; width: 20px; height: 20px; border-radius: 50%;
  background: #2f9e5f; color: #fff; font-size: 11px; font-weight: 800; display: flex; align-items: center; justify-content: center; }
.nbs-cross li::before { content: "\2715"; position: absolute; left: 0; top: 0; width: 20px; height: 20px; border-radius: 50%;
  background: #d05353; color: #fff; font-size: 11px; font-weight: 800; display: flex; align-items: center; justify-content: center; }
.nbs-cta { display: inline-block; margin-top: 22px; background: #a8705a; color: #fff !important; font-size: 15px; font-weight: 700;
  padding: 15px 30px; border-radius: 8px; text-decoration: none; }
.nbs-cta:hover { background: #8d5a46; color: #fff !important; }
@media (max-width: 980px) {
  .nbs-row2 { grid-template-columns: 1fr; gap: 28px; }
  .nbs-row2--rev .nbs-media { order: -1; }
}
@media (max-width: 560px) {
  .nbs-sec { padding: 42px 0; }
  .nbs-wrap { padding: 0 16px; }
  .nbs-cta { width: 100%; text-align: center; }
}
</style>
