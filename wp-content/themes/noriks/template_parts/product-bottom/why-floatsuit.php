<?php
/**
 * product-bottom: NORIKS FloatSuit — djecji kupaci kostim s ugradenim podesivim plovcima (orto-floatsuit).
 * Original: floatbuds.shop/products/floatbuds-floatsuit — vsebina 1:1 z originalom (isti vrstni red,
 * besedila prevedena v hrvascino), oblika po NORIKS stilu (predloga why-hands.php):
 * vsaka sekcija s sliko/videom ima dva stolpca (medij + besedilo), strani in ozadja se izmenjujejo.
 *   1) Naslovna slika + »Zabava koja pluta« (besedilo z originala)
 *   2) Sigurnosna napomena (samo besedilo)
 *   3) Video + »Vodena čarolija!« / POTIČE SAMOSTALNU IGRU! / GRADI SAMOPOUZDANJE U VODI
 *   4) PRUŽA DODATNU POTPORU... + slika plovcev v punom krugu
 *   5) Video + JAČA SAMOPOUZDANJE U VODI... / POTIČE VEĆU SAMOSTALNOST
 *   6) ZAŠTO RODITELJI VOLE NORIKS FLOATSUIT? — 4 prednosti + infografika
 *   7) 4 fotografije + »Super zabava!« (besedilo z originala: pravilan polozaj, uzgon)
 *   8) Recenzije kupaca (10 mnenj z originala, s fotografijami kupcev)
 * FAQ originala je v reviews.php ($floatsuit_faq), mnenja tudi v auto_reviews/HR_floatsuit.php.
 * Brez promo pasic, tekocih trakov, drsnikov in valovitih okrasnih slik (NORIKS stil »Preprosto«);
 * napisa-sliki »Vodena čarolija!« in »Super zabava!« sta zdaj oznaki (kicker) sekcij 3 in 7.
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$nfs      = get_template_directory_uri() . '/img/floatsuit/';
$nfs_path = get_template_directory() . '/img/floatsuit/';
$nfs_img  = function( $file, $alt ) use ( $nfs, $nfs_path ) {
  if ( ! file_exists( $nfs_path . $file ) ) { return ''; }
  $size = @getimagesize( $nfs_path . $file );
  $wh   = $size ? ' width="' . (int) $size[0] . '" height="' . (int) $size[1] . '"' : '';
  return '<img src="' . esc_url( $nfs . $file ) . '" alt="' . esc_attr( $alt ) . '"' . $wh . ' loading="lazy">';
};
$nfs_video = function( $file, $label ) use ( $nfs ) {
  return '<video src="' . esc_url( $nfs . $file ) . '" autoplay loop muted playsinline preload="metadata" aria-label="' . esc_attr( $label ) . '"></video>';
};

/* 6) Prednosti — 1:1 z originala. */
$nfs_points = array(
  array( 'Lako zakopčavanje:', 'Priprema je jednostavna i bez muke — uđi i zakopčaj.' ),
  array( 'Ugrađeni podesivi plovci:', 'Potpora koju prilagođavate kako djetetove vještine napreduju.' ),
  array( 'Zaštita od sunca:', 'Pomaže zaštititi nježnu kožu tijekom igre u vodi na otvorenom, uz UPF 50+ zaštitu.' ),
  array( 'Nesputana udobnost:', 'Potpuna sloboda kretanja za igru cijeli dan.' ),
);

/* 7) Fotografije. */
$nfs_gallery = array(
  array( 'fs-g-1.webp', 'Detalj kostima NORIKS FloatSuit s plovcima' ),
  array( 'fs-g-2.webp', 'Djeca se igraju u bazenu u kostimima NORIKS FloatSuit' ),
  array( 'fs-g-3.webp', 'Zakopčavanje patenta na kostimu NORIKS FloatSuit' ),
  array( 'fs-g-4.webp', 'Dvije djevojčice u bazenu u kostimima NORIKS FloatSuit' ),
);

/* 8) Recenzije kupaca — 1:1 z originala (vse 5 zvezdic, fotografije kupcev ostanejo). */
$nfs_reviews = array(
  array( 'ime' => 'Karen T.',     'datum' => '20.08.2026.', 'foto' => 'fs-rv-1.webp',
    'tekst' => 'Odličan proizvod — moj unuk ga obožava, a nama je drago što je siguran.' ),
  array( 'ime' => 'Rosa M.',      'datum' => '20.08.2026.', 'foto' => 'fs-rv-2.webp',
    'tekst' => 'Fantastičan kupaći kostim za djecu.' ),
  array( 'ime' => 'Hollie S.',    'datum' => '14.08.2026.', 'foto' => 'fs-rv-3.webp',
    'tekst' => 'Obožavam ga!' ),
  array( 'ime' => 'Stephanie H.', 'datum' => '10.08.2026.', 'foto' => 'fs-rv-4.webp',
    'tekst' => 'Moja kći ima četiri godine i tek uči plivati. Ovaj kostim je NEVJEROJATAN!! Više se ne drži za mamu i tatu. Pliva posvuda i stječe samopouzdanje u vodi. Tako mi je drago što sam joj ga kupila. Da je barem ovo postojalo kad sam ja bila mala!' ),
  array( 'ime' => 'Lisa B.',      'datum' => '06.07.2026.', 'foto' => 'fs-rv-5.webp',
    'tekst' => 'Moja unuka od 16 mjeseci obožava što može plivati sa starijim sestrama — baš je slatko...' ),
  array( 'ime' => 'William C.',   'datum' => '27.09.2026.', 'foto' => 'fs-rv-6.webp',
    'tekst' => 'Samo ga kupite! Stvarno je odličan! Moj dvogodišnjak plivao je potpuno samostalno na jezeru! Toliko se zabavio i bio je tako samouvjeren! Obožavam ga!' ),
  array( 'ime' => 'Jessica K.',   'datum' => '23.09.2026.', 'foto' => 'fs-rv-7.webp',
    'tekst' => 'Super je što ih imamo za blizance kad dođu kod bake na kupanje u jacuzziju!' ),
  array( 'ime' => 'Nicole D.',    'datum' => '18.09.2026.', 'foto' => 'fs-rv-8.webp',
    'tekst' => 'Moj četverogodišnji sin obožava svoj kostim! Djeluje samouvjerenije i lakše se kreće dok vježba plivanje.' ),
  array( 'ime' => 'Mariecel G.',  'datum' => '09.09.2026.', 'foto' => 'fs-rv-9.webp',
    'tekst' => 'Naša kći obožava plivati u bazenu u njemu. Uživa što može plutati, vrtjeti se u vodi i biti samostalna. Pravi hit! Voljela bih da je materijal bolji, malo je tanak, ali cijena nije previsoka.' ),
  array( 'ime' => 'Susan H.',     'datum' => '08.09.2026.', 'foto' => 'fs-rv-10.webp',
    'tekst' => 'Obožavam ih. Moje mališane naučili su plivati!' ),
);
?>

<!-- 1) ZABAVA KOJA PLUTA — slika lijevo -->
<section class="nfs-sec nfs-tint">
  <div class="nfs-wrap nfs-row2">
    <div class="nfs-media"><?php echo $nfs_img( 'fs-hero.webp', 'Djeca u kostimima NORIKS FloatSuit s plovcima' ); ?></div>
    <div class="nfs-copy">
      <p class="nfs-kicker">Zabava koja pluta</p>
      <h2 class="nfs-h2">Rješenje „sve u jednom” <em>dok dijete uči plivati.</em></h2>
      <p><strong>NORIKS FloatSuit</strong> je praktično rješenje „sve u jednom” koje djeci pomaže da ostanu na površini dok uče plivati.</p>
      <p>Pruža uravnoteženu potporu i mališanima daje stabilnost koja im u vodi treba.</p>
      <p class="nfs-big">A pritom ih ne sputava u kretanju.</p>
    </div>
  </div>
</section>

<!-- 2) SIGURNOSNA NAPOMENA — samo besedilo -->
<section class="nfs-sec">
  <div class="nfs-wrap">
    <div class="nfs-safety">
      <p class="nfs-kicker nfs-kicker--c">⚠️ Sigurnosna napomena ⚠️</p>
      <p>NORIKS FloatSuit je pomagalo za plivanje, a <strong>NE sredstvo za spašavanje života</strong>. Nije certificiran kao sredstvo za spašavanje. Potreban je stalan nadzor odrasle osobe — nikad ne ostavljajte djecu bez nadzora u vodi ili blizu nje.</p>
    </div>
  </div>
</section>

<!-- 3) POTIČE SAMOSTALNU IGRU — video desno -->
<section class="nfs-sec nfs-tint">
  <div class="nfs-wrap nfs-row2 nfs-row2--rev">
    <div class="nfs-copy">
      <p class="nfs-kicker">Vodena čarolija!</p>
      <h2 class="nfs-h2">Potiče <em>samostalnu igru!</em></h2>
      <p><strong>Gradi samopouzdanje u vodi.</strong> NORIKS FloatSuit osmišljen je da podrži prve plivačke korake jačanjem samopouzdanja u vodi i oko nje.</p>
      <p class="nfs-big">Uz pravu ravnotežu sigurnosti i slobode djeca se mogu opustiti i zabaviti.</p>
    </div>
    <div class="nfs-media nfs-media--video"><?php echo $nfs_video( 'fs-video-samopouzdanje.mp4', 'Dijete pliva u kostimu NORIKS FloatSuit' ); ?></div>
  </div>
</section>

<!-- 4) PRUŽA DODATNU POTPORU — slika lijevo -->
<section class="nfs-sec">
  <div class="nfs-wrap nfs-row2">
    <div class="nfs-media"><?php echo $nfs_img( 'fs-potpora.webp', 'Plovci NORIKS FloatSuit obavijaju trup u punom krugu' ); ?></div>
    <div class="nfs-copy">
      <p class="nfs-kicker">Plovci u punom krugu</p>
      <h2 class="nfs-h2">Pruža <em>dodatnu potporu...</em></h2>
      <p>Sustav plovaka u punom krugu ravnomjerno obavija trup i pomaže da dijete ostane u ravnoteži u vodi.</p>
      <p class="nfs-big">A istodobno potiče prirodniji položaj pri plivanju.</p>
    </div>
  </div>
</section>

<!-- 5) JAČA SAMOPOUZDANJE U VODI — video desno -->
<section class="nfs-sec nfs-tint">
  <div class="nfs-wrap nfs-row2 nfs-row2--rev">
    <div class="nfs-copy">
      <p class="nfs-kicker">Potiče veću samostalnost</p>
      <h2 class="nfs-h2">Jača samopouzdanje <em>u vodi...</em></h2>
      <p>NORIKS FloatSuit osmišljen je da osnaži male plivače dok počinju sve više raditi sami. Djeci omogućuje da u vodi razvijaju vještine i vjeru u sebe.</p>
      <p class="nfs-big">A roditeljima i dalje pruža mir.</p>
    </div>
    <div class="nfs-media nfs-media--video"><?php echo $nfs_video( 'fs-video-samostalnost.mp4', 'Dječji kostimi NORIKS FloatSuit s plovcima' ); ?></div>
  </div>
</section>

<!-- 6) ZAŠTO RODITELJI VOLE — infografika lijevo -->
<section class="nfs-sec">
  <div class="nfs-wrap nfs-row2">
    <div class="nfs-media nfs-media--flat"><?php echo $nfs_img( 'fs-prednosti-hr.webp', 'Lako se zakopča, zaštita od sunca, ugrađeni podesivi plovci, nesputana udobnost' ); ?></div>
    <div class="nfs-copy">
      <p class="nfs-kicker">Prednosti</p>
      <h2 class="nfs-h2">Zašto roditelji vole <em>NORIKS FloatSuit?</em></h2>
      <ul class="nfs-check">
        <?php foreach ( $nfs_points as $pt ) : ?>
          <li><strong><?php echo esc_html( $pt[0] ); ?></strong> <?php echo esc_html( $pt[1] ); ?></li>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>
</section>

<!-- 7) SUPER ZABAVA — fotografije desno -->
<section class="nfs-sec nfs-tint">
  <div class="nfs-wrap nfs-row2 nfs-row2--rev">
    <div class="nfs-copy">
      <p class="nfs-kicker">Super zabava!</p>
      <h2 class="nfs-h2">Bolje od glomaznih plutača <em>i rukavića za plivanje.</em></h2>
      <p>Za razliku od glomaznih plutača ili rukavića za plivanje, NORIKS FloatSuit potiče <strong>pravilan položaj tijela i ravnomjeran uzgon</strong>.</p>
      <p>Pomaže djeci da ostanu uspravna, a pritom slobodno mašu nogama i rukama — tako stvarno razvijaju plivanje.</p>
      <p class="nfs-big">Uče plutati, kliziti i plivati sa samopouzdanjem.</p>
    </div>
    <div class="nfs-media nfs-grid">
      <?php foreach ( $nfs_gallery as $g ) { echo $nfs_img( $g[0], $g[1] ); } ?>
    </div>
  </div>
</section>

<!-- 8) RECENZIJE KUPACA -->
<section class="nfs-sec">
  <div class="nfs-wrap nfs-wrap--rv">
    <h2 class="nfs-h2 nfs-h2--c">Recenzije <em>kupaca</em></h2>
    <p class="nfs-rate"><span class="nfs-rate__stars">★★★★★</span> <strong>4,94</strong> · na temelju 309 recenzija</p>
    <div class="nfs-rv-list">
      <?php foreach ( $nfs_reviews as $r ) : ?>
      <article class="nfs-rv">
        <div class="nfs-rv__top">
          <span class="nfs-rv__stars" aria-label="5 od 5 zvjezdica">★★★★★</span>
          <span class="nfs-rv__name"><?php echo esc_html( $r['ime'] ); ?> <span class="nfs-rv__ver">✓ Provjereni kupac</span></span>
          <span class="nfs-rv__date"><?php echo esc_html( $r['datum'] ); ?></span>
        </div>
        <p class="nfs-rv__txt"><?php echo esc_html( $r['tekst'] ); ?></p>
        <?php if ( $r['foto'] ) : ?><div class="nfs-rv__photo"><?php echo $nfs_img( $r['foto'], 'Fotografija kupca — ' . $r['ime'] ); ?></div><?php endif; ?>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<style>
.nfs-sec { padding: 60px 0; background: #fff; font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Arial, sans-serif; color: #0e1b4d; }
.nfs-sec * { box-sizing: border-box; }
.nfs-tint { background: #eef7fc; }
.nfs-wrap { width: 100%; max-width: 1240px; margin: 0 auto; padding: 0 24px; }
.nfs-row2 { display: grid; grid-template-columns: 1fr 1fr; gap: 56px; align-items: center; }
.nfs-media img, .nfs-media video { display: block; width: 100%; height: auto; border-radius: 0;
  box-shadow: 0 2px 4px rgba(0,42,113,.05), 0 14px 40px rgba(0,42,113,.10); }
.nfs-media--video video { max-height: 640px; object-fit: cover; background: #000; }
.nfs-media--flat img { box-shadow: none; }
.nfs-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 12px; }
.nfs-grid img { aspect-ratio: 1 / 1; object-fit: cover; }
.nfs-kicker { font-size: 12.5px; font-weight: 800; letter-spacing: .14em; text-transform: uppercase; color: #0a97d5; margin: 0 0 10px; }
.nfs-kicker--c { text-align: center; }
.nfs-h2 { font-size: clamp(25px, 3.1vw, 36px); font-weight: 800; line-height: 1.18; letter-spacing: -.01em; margin: 0 0 16px; color: #0e1b4d; }
.nfs-h2--c { text-align: center; }
.nfs-h2 em { font-style: italic; font-weight: 800; color: #0a97d5; }
.nfs-copy p { font-size: 16px; line-height: 1.7; color: #3d4a6b; margin: 0 0 14px; }
.nfs-big { font-size: 19px !important; font-weight: 800; color: #0e1b4d !important; }
.nfs-check { list-style: none; padding: 0; margin: 6px 0 0; display: flex; flex-direction: column; gap: 12px; }
.nfs-check li { position: relative; padding-left: 30px; font-size: 15.5px; line-height: 1.55; color: #3d4a6b; }
.nfs-check li strong { color: #0e1b4d; }
.nfs-check li::before { content: "\2713"; position: absolute; left: 0; top: 1px; width: 20px; height: 20px; border-radius: 50%;
  background: #2f9e5f; color: #fff; font-size: 11px; font-weight: 800; display: flex; align-items: center; justify-content: center; }

/* 2) sigurnosna napomena */
.nfs-safety { max-width: 900px; margin: 0 auto; background: #fff8e6; border-left: 3px solid #e0a33c; padding: 20px 24px; }
.nfs-safety p { margin: 0; font-size: 15.5px; line-height: 1.7; color: #3d4a6b; text-align: center; }
.nfs-safety .nfs-kicker { color: #0e1b4d; margin-bottom: 8px; }

/* 8) recenzije */
.nfs-wrap--rv { max-width: 1000px; }
.nfs-rate { text-align: center; font-size: 15px; color: #3d4a6b; margin: 0 0 18px; }
.nfs-rate__stars, .nfs-rv__stars { color: #e0a33c; letter-spacing: 1px; }
.nfs-rv-list { display: flex; flex-direction: column; border-top: 1px solid #e3e8f0; }
.nfs-rv { padding: 18px 0; border-bottom: 1px solid #e3e8f0; }
.nfs-rv__top { display: flex; flex-wrap: wrap; align-items: center; gap: 6px 12px; }
.nfs-rv__name { font-size: 14.5px; font-weight: 800; color: #0e1b4d; }
.nfs-rv__ver { font-weight: 500; font-size: 12.5px; color: #2f9e5f; margin-left: 6px; }
.nfs-rv__date { font-size: 13px; color: #8a93a8; margin-left: auto; }
.nfs-rv__txt { margin: 10px 0 0; font-size: 15px; line-height: 1.6; color: #3d4a6b; }
.nfs-rv__photo { margin: 12px 0 0; }
.nfs-rv__photo img { display: block; width: 96px; height: 96px; object-fit: cover; }

/* galerija izdelka: slicice najvec v 2 vrstah (5 na vrsto), ostale slike dosegljive s potegom glavne slike */
.single-product div.product.product_cat-orto-floatsuit .woocommerce-product-gallery .flex-control-thumbs li:nth-child(n+11) { display: none !important; }

/* kratek opis izdelka: zelene kljukice namesto pik */
.woocommerce-product-details__short-description ul { list-style: none !important; padding-left: 0 !important; margin: 10px 0 14px !important; }
.woocommerce-product-details__short-description ul li { list-style: none !important; position: relative !important; padding-left: 31px !important; margin: 0 0 7px !important; line-height: 1.45 !important; }
.woocommerce-product-details__short-description ul li::marker { content: "" !important; }
.woocommerce-product-details__short-description ul li::before { content: none !important; }
.woocommerce-product-details__short-description .nfs-tick {
  position: absolute !important; left: 0 !important; top: 1px !important;
  width: 21px; height: 21px; border-radius: 50%; background: #2f9e5f !important; color: #fff !important;
  font-size: 12px !important; font-weight: 800 !important; line-height: 21px !important; text-align: center !important; display: inline-block !important; }

@media (max-width: 980px) {
  .nfs-row2 { grid-template-columns: 1fr; gap: 28px; }
  .nfs-row2--rev .nfs-media { order: -1; }
}
@media (max-width: 560px) {
  .nfs-sec { padding: 42px 0; }
  .nfs-wrap { padding: 0 16px; }
  .nfs-grid { gap: 8px; }
}
</style>
