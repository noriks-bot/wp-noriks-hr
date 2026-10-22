<?php
/**
 * product-bottom: NORIKS FleeceTights — tople hulahopke s flisom koje izgledaju kao koza (orto-fleecetights).
 * Original: irazia.com/products/fleece-leggings — vsebina in vrstni red 1:1 z originalom,
 * oblika po NORIKS stilu (predloga why-hands.php / why-polo.php):
 *   1) Videi kupaca (6 videov, utisani, s hrvaskimi napisi; angleski napisi prekriti)
 *   2) "Cozy, Chic, Snatched." -> Tople, elegantne i oblikuju (slika ob besedilu)
 *   3) "Style Inspo" -> Inspiracija za stil (13 fotografij kupk z velikostjo, nijanso in mnenjem)
 *   4) Primerjalna tabela NORIKS / ostali (slika ob tabeli; tuja stevilka 200.000 -> nasa 120.000)
 *   5) "30-Day Shade & Size Match Guarantee" -> NORIKS pogoji (30 dana za povrat, dostava iznad 70 €)
 *   6) Slika "Find your shade" iz sekcije FAQ -> Pronadite svoju nijansu (slika ob seznamu nijans)
 * Izpusceno: glava, "Tag us @iraziaofficial", gumb "Try it Risk-Free", noga, e-posta konkurenta.
 * FAQ originala je v reviews.php ($fleecetights_faq), mnenja tudi v auto_reviews/HR_fleecetights.php.
 * Slike/videi: img/fleecetights/ (z originala, brez tuje znamke; napisi na slikah prevedeni v galeriji).
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$nft      = get_template_directory_uri() . '/img/fleecetights/';
$nft_path = get_template_directory() . '/img/fleecetights/';
$nft_img  = function( $file, $alt, $cls = '' ) use ( $nft, $nft_path ) {
  if ( ! $file || ! file_exists( $nft_path . $file ) ) { return ''; }
  return '<img src="' . esc_url( $nft . $file ) . '" alt="' . esc_attr( $alt ) . '"' . ( $cls ? ' class="' . esc_attr( $cls ) . '"' : '' ) . ' loading="lazy">';
};
$nft_video = function( $n, $label ) use ( $nft, $nft_path ) {
  $file = 'ft-video-' . $n . '-hr.mp4'; $poster = 'ft-video-' . $n . '-poster.webp';
  if ( ! file_exists( $nft_path . $file ) ) { return ''; }
  return '<div class="nft-vid"><video src="' . esc_url( $nft . $file ) . '" poster="' . esc_url( $nft . $poster ) . '"'
    . ' muted autoplay loop playsinline preload="metadata" aria-label="' . esc_attr( $label ) . '"></video></div>';
};
$nft_allowed = array( 'strong' => array(), 'em' => array() );

/* 3) Inspiracija za stil — 1:1 z originala (velikost, nijansa, mnenje; mere v cm/kg) */
$nft_inspo = array(
  array( 'foto' => 'ft-ugc-01.webp', 'vel' => 'M/L', 'boja' => 'Karamela (brončana)',
    'tekst' => 'Ove hulahopke bile su savršene — nosila sam ih na večernjem izlasku u New Yorku i bilo mi je toplo, a unutra se nisam pregrijala. Cure su me pitale kako mi nije hladno u prozirnim hulahopkama 😂 Curo, ove su podstavljene flisom. Uzela sam nijansu Karamela, veličinu M/L. Visoka sam 175 cm i imam 73 kg.' ),
  array( 'foto' => 'ft-ugc-02.webp', 'vel' => 'L/XL', 'boja' => 'Vanilija (svijetla)',
    'tekst' => 'Kompresija NIJE šala. Bila sam skeptična oko cijele priče o »oblikovanju struka«, ali WOW. Stvarno sve drže na mjestu, a izgledaju nevidljivo. Kolege me stalno pitaju nosim li hulahopke ili su to samo moje noge 😂' ),
  array( 'foto' => 'ft-ugc-03.webp', 'vel' => 'XS/S', 'boja' => 'Vanilija (svijetla)',
    'tekst' => 'Dobro, a zašto mi nitko nije rekao za ove ranije?? GODINAMA se smrzavam u običnim hulahopkama. Izgledaju točno kao moja koža, a stvarno griju? Ovo mijenja sve. Već sam naručila još 3 para.' ),
  array( 'foto' => 'ft-ugc-04.webp', 'vel' => '2XL/3XL', 'boja' => 'Latte (preplanula)',
    'tekst' => 'Super mekane, rastezljive i udobne. Isprva sam mislila da su pretamne, ali kad sam ih obukla, boja je bila sjajna. Sigurno ću naručiti još, a konačno mogu nositi i kraće haljine.' ),
  array( 'foto' => 'ft-ugc-05.webp', 'vel' => 'L/XL', 'boja' => 'Vanilija (svijetla)',
    'tekst' => 'Jako slatke i mekane hulahopke. Brinula sam se oko boje, kvalitete i izdržljivosti. Materijal je dobar, debeo i ne čini se da se lako trga. Izašla sam van provjeriti boju — savršeno se slaže. Visoka sam 163 cm, imam 83 kg i uzela sam L/XL u svijetloj nijansi.' ),
  array( 'foto' => 'ft-ugc-06.webp', 'vel' => 'XS/S', 'boja' => 'Latte (preplanula)',
    'tekst' => 'Stvarno mekane, stvarno tople, stvarno vrijede! Probala sam toliko hulahopki s flisom koje grebu ili čudno izgledaju. Ove su iznutra zaista mekane, ne izgledaju debelo ni glomazno, a nijansa Latte savršeno mi odgovara. Upravo stavljam još jedan par u košaricu.' ),
  array( 'foto' => 'ft-ugc-07.webp', 'vel' => 'XS/S', 'boja' => 'Karamela (brončana)',
    'tekst' => 'Fantastične! Nosim ih barem 3 puta tjedno. Jedino žalim što ih nisam kupila ranije! Trik: kad je JAKO hladno, nosite ih ispod hlača. Služe i kao hulahopke i kao termo rublje. Uzimam si još 😅' ),
  array( 'foto' => 'ft-ugc-08.webp', 'vel' => 'M/L', 'boja' => 'Vanilija (svijetla)',
    'tekst' => 'Uživo stvarno izgledaju TAKO dobro. Mislila sam da su fotografije obrađene, ali ne — stvarno se stope s kožom. Mama me pitala gdje sam kupila »te najlonke boje kože« i bila je šokirana kad sam joj rekla da su podstavljene flisom!' ),
  array( 'foto' => 'ft-ugc-09.webp', 'vel' => 'L/XL', 'boja' => 'Vanilija (svijetla)',
    'tekst' => 'Lako se oznojim. Ove su me grijale vani na velikoj hladnoći, a unutra uz upaljeni kamin nisam se pregrijala. Inače nosim L, a uzela sam L/XL umjesto M/L jer sam se bojala da će biti premale. Stoje dobro, samo sam ih morala malo namjestiti. Visoka sam 168 cm i imam oko 86 kg. Sve u svemu — oduševljena sam.' ),
  array( 'foto' => 'ft-ugc-10.webp', 'vel' => 'L/XL', 'boja' => 'Karamela (brončana)',
    'tekst' => 'Izgledaju odlično, ugodne su i savršeno stoje! Uzela sam L/XL u brončanoj nijansi. Da sam ih barem imala ranije! Konačno mogu nositi slatke haljine, a da se ne SMRZNEM!' ),
  array( 'foto' => 'ft-ugc-11.webp', 'vel' => 'L/XL', 'boja' => 'Karamela (brončana)',
    'tekst' => 'Lijepo stoje, a izgled je savršen. Zaglađuju noge i stvarno izgledaju kao koža. Muž je mislio da izlazim iz kuće samo u majici, haha.' ),
  array( 'foto' => 'ft-ugc-12.webp', 'vel' => 'L/XL', 'boja' => 'Vanilija (svijetla)',
    'tekst' => 'Obožavam, obožavam, OBOŽAVAM ove hulahopke! Točno ono što nisam ni znala da tražim. Ne možete mi reći da to nije moja koža. Tako su mekane i ugodne, a i oblikuju 🥰' ),
  array( 'foto' => 'ft-ugc-13.webp', 'vel' => 'XXS/XS', 'boja' => 'Latte (preplanula)',
    'tekst' => 'Ove hulahopke su stvarno debele i tople. Kupila sam neke druge na Amazonu misleći da sam dobro prošla, ali su nakon nekoliko nošenja imale rupe i paranja. Trebala sam odmah uzeti ove. Obožavam ih!!' ),
);

/* 4) primerjalna tabela 1:1 (NORIKS namesto tuje znamke) */
$nft_compare = array(
  'Debeo i ultra mekan flis',
  'Ne trgaju se i ne paraju',
  'Kompresijski pojas koji oblikuje struk',
  'Samo jedan šav, bez nezgrapnog šava straga',
  'Ultra fleksibilne, rastežu se u 4 smjera',
  'Nijansa koja savršeno odgovara koži',
);

/* 6) nijanse (iz FAQ originala »How do I find my perfect color match?«) */
$nft_shades = array(
  array( 'boja' => '#ecc5ac', 'ime' => 'Vanilija (svijetla)', 'opis' => 'vrlo svijetla do svijetla koža' ),
  array( 'boja' => '#d09b6b', 'ime' => 'Latte (preplanula)',  'opis' => 'svijetla do srednja koža' ),
  array( 'boja' => '#7e3f00', 'ime' => 'Karamela (brončana)', 'opis' => 'srednja do tamna koža' ),
  array( 'boja' => '#5c4033', 'ime' => 'Espresso (tamna)',    'opis' => 'tamna do vrlo tamna koža' ),
);
?>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap">

<!-- 1) VIDEI KUPACA -->
<section class="nft-sec nft-tint nft-sec--videos">
  <div class="nft-wrap">
    <p class="nft-kicker nft-c">Videi kupaca</p>
    <h2 class="nft-h2 nft-c">Izgledaju kao koža, <em>griju kao flis</em></h2>
    <div class="nft-vids">
      <?php for ( $n = 1; $n <= 6; $n++ ) { echo $nft_video( $n, 'Video kupca ' . $n . ' — NORIKS FleeceTights' ); } ?>
    </div>
  </div>
</section>

<!-- 2) TOPLE, ELEGANTNE I OBLIKUJU — slika ob besedilu -->
<section class="nft-sec">
  <div class="nft-wrap">
    <div class="nft-row2">
      <div class="nft-media"><?php echo $nft_img( 'ft-flis.webp', 'Debela i mekana podstava od flisa — NORIKS FleeceTights' ); ?></div>
      <div class="nft-copy">
        <p class="nft-kicker">Flis + kompresija</p>
        <h2 class="nft-h3">Tople, elegantne <em>i oblikuju liniju.</em></h2>
        <p>Jedine hulahopke s flisom s <strong>kompresijskim pojasom koji oblikuje struk</strong>, koje izgledaju kao <strong>koža</strong>, a osjećaj je kao <strong>topli zagrljaj</strong>.</p>
        <ul class="nft-points">
          <li><span class="nft-dot" aria-hidden="true">✓</span> 4 nijanse za <strong>svaki ton kože</strong></li>
          <li><span class="nft-dot" aria-hidden="true">✓</span> Veličine od XXS do 5XL za <strong>svako tijelo</strong></li>
        </ul>
        <p class="nft-big">Izgled golih nogu, toplina debelih tajica.</p>
      </div>
    </div>
  </div>
</section>

<!-- 3) INSPIRACIJA ZA STIL — fotografije kupaca -->
<section class="nft-sec nft-tint">
  <div class="nft-wrap">
    <p class="nft-kicker nft-c">Inspiracija za stil</p>
    <h2 class="nft-h2 nft-c">Kako ih <em>nose kupci</em></h2>
    <div class="nft-inspo">
      <?php foreach ( $nft_inspo as $r ) : ?>
      <article class="nft-card">
        <div class="nft-card__photo"><?php echo $nft_img( $r['foto'], 'Kupac u NORIKS FleeceTights hulahopkama — ' . $r['boja'] ); ?></div>
        <div class="nft-card__body">
          <p class="nft-card__meta"><span>Veličina: <strong><?php echo esc_html( $r['vel'] ); ?></strong></span><span>Nijansa: <strong><?php echo esc_html( $r['boja'] ); ?></strong></span></p>
          <p class="nft-card__txt">„<?php echo esc_html( $r['tekst'] ); ?>”</p>
        </div>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- 4) USPOREDBA — slika ob tabeli -->
<section class="nft-sec">
  <div class="nft-wrap">
    <div class="nft-row2 nft-row2--rev">
      <div class="nft-media"><?php echo $nft_img( 'ft-usporedba.webp', 'NORIKS FleeceTights — kompresijski pojas i prozirni izgled' ); ?></div>
      <div class="nft-copy">
        <p class="nft-kicker">Usporedba</p>
        <h2 class="nft-h3">Zašto je više od <em>120.000 kupaca</em> odabralo NORIKS</h2>
        <div class="nft-cmp" role="table" aria-label="NORIKS FleeceTights u usporedbi s ostalima">
          <div class="nft-cmp__row nft-cmp__head" role="row">
            <span role="columnheader"></span><span role="columnheader">NORIKS</span><span role="columnheader">Ostali</span>
          </div>
          <?php foreach ( $nft_compare as $c ) : ?>
          <div class="nft-cmp__row" role="row">
            <span class="nft-cmp__lbl" role="cell"><?php echo esc_html( $c ); ?></span>
            <span class="nft-cmp__yes" role="cell" aria-label="da">✓</span>
            <span class="nft-cmp__no" role="cell" aria-label="ne">✕</span>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- 5) NORIKS POGOJI (namesto »30-Day Shade & Size Match Guarantee«) — slika ob besedilu -->
<section class="nft-sec nft-tint">
  <div class="nft-wrap">
    <div class="nft-row2">
      <div class="nft-media nft-media--sq"><?php echo $nft_img( 'ft-jamstvo.webp', 'Tri kupca u NORIKS FleeceTights hulahopkama' ); ?></div>
      <div class="nft-copy">
        <p class="nft-kicker">Bez rizika</p>
        <h2 class="nft-h3">30 dana <em>za povrat</em></h2>
        <p>Kupnja hulahopki online ne bi trebala biti nagađanje. Ako vam veličina ili nijansa ne odgovaraju baš savršeno, imate <strong>pravo na povrat u roku od 30 dana</strong>.</p>
        <p class="nft-big">Isprobajte ih bez brige.</p>
        <p class="nft-trust"><span>30 dana za povrat</span><span>Besplatna dostava za narudžbe iznad 70 €</span><span>Plaćanje pouzećem</span></p>
      </div>
    </div>
  </div>
</section>

<!-- 6) PRONAĐITE SVOJU NIJANSU — slika ob seznamu -->
<section class="nft-sec">
  <div class="nft-wrap">
    <div class="nft-row2 nft-row2--rev">
      <div class="nft-media"><?php echo $nft_img( 'ft-nijanse-hr.webp', 'Pronađite svoju nijansu — Vanilija, Latte, Karamela i Espresso' ); ?></div>
      <div class="nft-copy">
        <p class="nft-kicker">Vodič kroz nijanse</p>
        <h2 class="nft-h3">Pronađite <em>svoju nijansu</em></h2>
        <p>Od svijetle do tamne — imamo nijansu za svakoga (doslovno)! Nudimo <strong>4 nijanse</strong> za različite tonove kože:</p>
        <ul class="nft-shades">
          <?php foreach ( $nft_shades as $sh ) : ?>
          <li><span class="nft-shade" style="background:<?php echo esc_attr( $sh['boja'] ); ?>"></span><strong><?php echo esc_html( $sh['ime'] ); ?></strong> – <?php echo esc_html( $sh['opis'] ); ?></li>
          <?php endforeach; ?>
        </ul>
        <p class="nft-big">Pogledajte fotografije nijansi ili nam se javite za pomoć.</p>
      </div>
    </div>
  </div>
</section>

<style>
/* NORIKS stil (predloga why-hands.php / why-polo.php): oznaka + naslov z lezecim poudarkom, slika ob besedilu,
   izmenjujoca ozadja. Privzeta topla rjava paleta NORIKS (kot Hands, #a9683f). */
.nft-sec { padding: 60px 0; font-family: 'Poppins', system-ui, -apple-system, 'Segoe UI', Roboto, Arial, sans-serif; color: #231d19; background: #fff; }
.nft-sec * { box-sizing: border-box; }
.nft-tint { background: #f7f2ec; }
.nft-wrap { width: 100%; max-width: 1200px; margin: 0 auto; padding: 0 24px; }
.nft-c { text-align: center; }
.nft-sec h2, .nft-sec h3 { font-family: inherit; text-transform: none; letter-spacing: 0; }
.nft-kicker, .nft-copy p.nft-kicker { font-size: 12.5px; line-height: 1.4; font-weight: 700; letter-spacing: .14em; text-transform: uppercase; color: #a9683f; margin: 0 0 10px; }
.nft-h2 { font-weight: 700; font-size: clamp(25px, 3.1vw, 36px); line-height: 1.2; margin: 0 0 28px; color: #231d19; }
.nft-h2 em, .nft-h3 em { font-style: italic; color: #a9683f; }
.nft-h3 { font-weight: 700; font-size: clamp(22px, 2.6vw, 30px); line-height: 1.25; margin: 0 0 16px; color: #231d19; }
.nft-sec img { display: block; width: 100%; height: auto; }

/* slika ob besedilu */
.nft-row2 { display: grid; grid-template-columns: 1fr 1fr; gap: 56px; align-items: center; }
.nft-row2--rev .nft-media { order: 2; }
.nft-media img { aspect-ratio: 4 / 5; object-fit: cover; border-radius: 4px; box-shadow: 0 2px 4px rgba(40,25,15,.05), 0 14px 40px rgba(40,25,15,.10); }
.nft-media--sq img { aspect-ratio: 1 / 1; }
.nft-copy p { font-size: 16px; line-height: 1.7; color: #4f443d; margin: 0 0 14px; }
.nft-copy p strong { color: #231d19; font-weight: 600; }
.nft-copy p.nft-big { font-size: 19px; font-weight: 700; color: #231d19; line-height: 1.45; margin-top: 6px; }
.nft-points { list-style: none; margin: 0 0 16px; padding: 0; }
.nft-points li { font-size: 16px; line-height: 1.6; color: #4f443d; margin: 0 0 8px; display: flex; gap: 10px; align-items: flex-start; }
.nft-points li strong { color: #231d19; font-weight: 600; }
.nft-dot { flex: 0 0 22px; width: 22px; height: 22px; border-radius: 50%; background: #a9683f; color: #fff; font-size: 12px; font-weight: 800; line-height: 22px; text-align: center; margin-top: 2px; }

/* videi kupaca */
.nft-vids { display: grid; grid-template-columns: repeat(3, minmax(0, 1fr)); gap: 18px; max-width: 960px; margin: 0 auto; }
.nft-vid { position: relative; aspect-ratio: 9 / 16; overflow: hidden; background: #ece3da; border-radius: 10px; }
.nft-vid video { display: block; width: 100%; height: 100%; object-fit: cover; }

/* inspiracija za stil */
.nft-inspo { display: grid; grid-template-columns: repeat(4, minmax(0, 1fr)); gap: 18px; align-items: start; }
.nft-card { background: #fff; border: 1px solid #ecdfd3; border-radius: 10px; overflow: hidden; }
.nft-card__photo img { aspect-ratio: 4 / 5; object-fit: cover; }
.nft-card__body { padding: 14px 16px 16px; }
.nft-card__meta { display: flex; flex-wrap: wrap; gap: 4px 12px; font-size: 12.5px; color: #8a7a6e; margin: 0 0 10px; }
.nft-card__meta strong { color: #a9683f; font-weight: 600; }
.nft-card__txt { font-size: 14.5px; line-height: 1.6; color: #3a302a; margin: 0; }

/* usporedba */
.nft-cmp { border: 1px solid #ecdfd3; border-radius: 10px; overflow: hidden; background: #fff; margin-top: 6px; }
.nft-cmp__row { display: grid; grid-template-columns: 1fr 84px 84px; align-items: center; border-top: 1px solid #f1e7de; }
.nft-cmp__row > span { padding: 12px 14px; font-size: 15px; line-height: 1.4; }
.nft-cmp__head { border-top: 0; background: #f7f2ec; }
.nft-cmp__head span { font-weight: 700; font-size: 14px; text-align: center; color: #231d19; }
.nft-cmp__head span:nth-child(2) { color: #a9683f; }
.nft-cmp__lbl { color: #231d19; font-weight: 500; }
.nft-cmp__yes, .nft-cmp__no { text-align: center; font-weight: 800; font-size: 17px; }
.nft-cmp__row .nft-cmp__yes { background: rgba(169,104,63,.08); color: #a9683f; }
.nft-cmp__no { color: #b9aea5; }

/* NORIKS pogoji */
.nft-trust { display: flex; flex-wrap: wrap; gap: 10px 22px; margin: 18px 0 0; font-size: 14px !important; font-weight: 600; color: #6b625a !important; }
.nft-trust span { position: relative; padding-left: 20px; }
.nft-trust span::before { content: "\2713"; position: absolute; left: 0; color: #a9683f; }

/* nijanse */
.nft-shades { list-style: none; margin: 0 0 16px; padding: 0; }
.nft-shades li { display: flex; align-items: center; gap: 12px; font-size: 16px; line-height: 1.5; color: #4f443d; margin: 0 0 10px; }
.nft-shades li strong { color: #231d19; font-weight: 600; }
.nft-shade { flex: 0 0 26px; width: 26px; height: 26px; border-radius: 50%; box-shadow: inset 0 0 0 1px rgba(0,0,0,.10); }

@media (max-width: 989px) {
  .nft-inspo { grid-template-columns: repeat(2, minmax(0, 1fr)); }
  .nft-row2 { gap: 32px; }
}
@media (max-width: 749px) {
  .nft-sec { padding: 42px 0; }
  .nft-wrap { padding: 0 16px; }
  .nft-vids { grid-template-columns: repeat(2, minmax(0, 1fr)); gap: 10px; }
  .nft-inspo { grid-template-columns: 1fr; gap: 14px; }
  .nft-row2 { grid-template-columns: 1fr; gap: 24px; }
  .nft-row2--rev .nft-media { order: 0; }
  .nft-cmp__row { grid-template-columns: 1fr 64px 64px; }
  .nft-cmp__row > span { padding: 10px 10px; font-size: 14px; }
}

/* galerija izdelka: sličice največ v 2 vrstah (5 na vrsto), ostale slike so dosegljive z drsenjem glavne slike */
.product_cat-orto-fleecetights .flex-control-thumbs li:nth-child(n+11) { display: none !important; }

/* kratek opis izdelka: zelene kljukice namesto pik (REST pobrise inline slog) */
.woocommerce div.product .woocommerce-product-details__short-description ul,
.woocommerce-product-details__short-description ul {
  list-style: none !important; margin: 10px 0 14px !important; padding-left: 0 !important; }
.woocommerce div.product .woocommerce-product-details__short-description ul li,
.woocommerce-product-details__short-description ul li {
  list-style: none !important; text-indent: 0 !important; margin: 0 0 7px !important;
  line-height: 1.45 !important; font-size: 15.5px !important;
  display: block !important; position: relative !important; padding-left: 31px !important; }
.woocommerce-product-details__short-description ul li::marker { content: "" !important; }
.woocommerce-product-details__short-description ul li::before { content: none !important; }
.woocommerce-product-details__short-description .nft-tick {
  position: absolute !important; left: 0 !important; top: 1px !important;
  width: 21px; height: 21px; border-radius: 50%;
  background: #2f9e5f !important; color: #fff !important;
  font-size: 12px !important; font-weight: 800 !important; line-height: 21px !important;
  text-align: center !important; display: inline-block !important; }
.woocommerce-product-details__short-description p:first-of-type { font-size: 16px; line-height: 1.55; }
</style>
