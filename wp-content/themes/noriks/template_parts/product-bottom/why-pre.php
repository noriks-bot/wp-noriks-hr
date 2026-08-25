<?php
/**
 * product-bottom: NORIKS Pre — jastuk za trudnice (orto-pre).
 *
 * Sve sekcije su LIJEVO/DESNO (slika + tekst), po referentnoj stranici
 * (babybub.com / Bub's Maternity Pillow). Nikad slika na sredini.
 * Recenzije i FAQ renderira zajednicki reviews.php.
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$pr      = get_template_directory_uri() . '/img/pre/';
$pr_path = get_template_directory() . '/img/pre/';

$pr_img = function( $file, $alt ) use ( $pr, $pr_path ) {
  if ( file_exists( $pr_path . $file ) ) {
    return '<img src="' . esc_url( $pr . $file ) . '" alt="' . esc_attr( $alt ) . '" loading="lazy">';
  }
  return '<div class="npr-ph" role="img" aria-label="' . esc_attr( $alt ) . '"><span>' . esc_html( $alt ) . '</span></div>';
};
?>

<!-- 1) Potpora trbuščiću i leđima — slika lijevo -->
<section class="npr-sec npr-rose">
  <div class="npr-wrap npr-row">
    <div class="npr-media"><?php echo $pr_img( 'pre-01-potpora.jpg', 'Jastuk obuhvaća trbuščić i leđa' ); ?></div>
    <div class="npr-copy">
      <p class="npr-eyebrow">Za spavanje na boku</p>
      <h2 class="npr-h2">Potpora sprijeda i straga, u isto vrijeme</h2>
      <p>Dva krila obuhvate trbuščić sprijeda i leđa straga. Tijelo ostaje na boku cijelu noć, pa nema buđenja na leđima i nema slaganja utvrde od pet običnih jastuka.</p>
      <p class="npr-strong">Duljina se prilagođava, pa jastuk prati rast trbuščića kroz cijelu trudnoću.</p>
      <ul class="npr-ticks">
        <li>Ublažava pritisak na trbuh, kukove i leđa</li>
        <li>Drži vas na boku, ali dopušta lako okretanje</li>
        <li>Kompaktan — partner ostaje u krevetu</li>
      </ul>
    </div>
  </div>
</section>

<!-- 2) Kako funkcionira — slika desno -->
<section class="npr-sec npr-white">
  <div class="npr-wrap npr-row">
    <div class="npr-copy">
      <h2 class="npr-h2">Namjestite ga jednom, ostaje cijelu noć</h2>
      <p>Krila se razmiču i skupljaju, pa razmak podesite prema trbuščiću — u 20. tjednu drukčije nego u 35. Kad jednom pogodite svoju širinu, jastuk ostaje takav i ne treba ga svaku večer namještati iznova.</p>
      <p>Manji jastučić je tu za mjesto koje vas trenutno najviše smeta: pod trbuh kad vuče prema naprijed, iza leđa kad želite polulezeći položaj ili među koljena kad se jave kukovi.</p>
      <p class="npr-strong">Okretanje na drugu stranu ne traži preslagivanje — jastuk jednostavno prebacite sa sobom.</p>
    </div>
    <div class="npr-media npr-graf"><?php echo $pr_img( 'pre-08-kako.jpg', 'Kako funkcionira jastuk za trudnice' ); ?></div>
  </div>
</section>

<!-- 7) San, putovanja i jamstvo — tri slike u nizu -->
<section class="npr-sec npr-rose">
  <div class="npr-wrap">
    <div class="npr-lead-copy">
      <h2 class="npr-h2">San koji zaslužujete — 14 noći bez rizika</h2>
      <p>Umjesto prevrtanja i traženja položaja do tri ujutro — jedan jastuk koji ostaje na mjestu i kad se okrenete. Ne grije kao veliki jastuci koji vas obuhvate sa svih strana, pa ljetne noći ostaju podnošljive.</p>
      <p>Lagan je i prenosiv, pa ide s vama na vikend, k mami ili u rodilište. Isprobajte ga <strong>14 noći</strong>: ako vam ne odgovara, javite nam se i vraćamo cijeli iznos — bez obrazaca i bez neugodnih pitanja. Uz to ide i 12 mjeseci jamstva na izradu.</p>
    </div>
    <div class="npr-three">
      <figure><?php echo $pr_img( 'pre-07-zagrljaj.jpg', 'Jastuk je lagan i prenosiv' ); ?></figure>
      <figure><?php echo $pr_img( 'pre-03.jpg', 'NORIKS Pre jastuk za trudnice' ); ?></figure>
      <figure><?php echo $pr_img( 'pre-06.jpg', 'NORIKS Pre jastuk za trudnice' ); ?></figure>
    </div>
  </div>
</section>

<!-- 4) Usporedba — slika desno -->
<section class="npr-sec npr-white">
  <div class="npr-wrap npr-row">
    <div class="npr-media npr-graf"><?php echo $pr_img( 'pre-09-usporedba.jpg', 'Usporedba s velikim jastucima za trudnice' ); ?></div>
    <div class="npr-copy">
      <h2 class="npr-h2">Zašto ne veliki C ili U jastuk</h2>
      <p>Veliki jastuci zauzmu pola kreveta, griju i traže preslagivanje pri svakom okretanju. NORIKS Pre daje potporu točno ondje gdje treba — uz trbuščić i leđa — i ostaje kompaktan.</p>
      <p class="npr-strong">Zato stane i u kofer, a partner ne mora na kauč.</p>
    </div>
  </div>
</section>

<!-- 5) Navlaka i punjenje — slika lijevo -->
<section class="npr-sec npr-rose">
  <div class="npr-wrap npr-row">
    <div class="npr-copy">
      <h2 class="npr-h2">Materijali i održavanje</h2>
      <ul class="npr-ticks">
        <li>Navlaka od mješavine bambusa i poliestera — prozračna i mekana uz kožu</li>
        <li>Punjenje od mikrovlakana koje zadržava oblik i ne stvara grude</li>
        <li>Navlaka se skida na patentni zatvarač i pere u perilici</li>
        <li>Perite na 60 °C i sušite u sušilici za punoću jastuka</li>
      </ul>
      <p class="npr-strong">U pakiranju su jastuk, navlaka i manji jastučić za dodatnu potporu.</p>
    </div>
    <div class="npr-media"><?php echo $pr_img( 'pre-04-navlaka.jpg', 'Periva navlaka i dodatni jastučić' ); ?></div>
  </div>
</section>

<!-- 6) Poslije trudnoće — slika desno -->
<section class="npr-sec npr-white">
  <div class="npr-wrap npr-row">
    <div class="npr-media"><?php echo $pr_img( 'pre-05.jpg', 'Jastuk kao potpora pri dojenju' ); ?></div>
    <div class="npr-copy">
      <h2 class="npr-h2">Koristan i nakon poroda</h2>
      <p>Nakon trudnoće jastuk ostaje u uporabi: podupire ruke i leđa tijekom dojenja, a manji jastučić rasterećuje zapešće dok držite bebu.</p>
      <p class="npr-strong">Isti jastuk, druga faza — zato se isplati više nego jastuk koji odslužite u devet mjeseci.</p>
    </div>
  </div>
</section>

<!-- 3) Zašto spavanje na boku — slika lijevo -->
<section class="npr-sec npr-rose">
  <div class="npr-wrap npr-row">
    <div class="npr-copy">
      <h2 class="npr-h2">Zašto se preporučuje lijevi bok</h2>
      <ul class="npr-tri">
        <li><strong>Manji pritisak na leđa</strong> — kralježnica ostaje poravnata, pa je jutarnja ukočenost manja.</li>
        <li><strong>Bolja cirkulacija</strong> — na lijevom boku protok prema posteljici ostaje neometan.</li>
        <li><strong>Manje oticanja</strong> — bubrezi lakše rade, pa su noge i gležnjevi ujutro rasterećeniji.</li>
        <li><strong>Manje žgaravice i lakše disanje</strong> — trbuščić manje pritišće ošit i želudac.</li>
      </ul>
      <p class="npr-note">Preporuku o položaju spavanja uvijek uskladite sa svojim liječnikom ili primaljom.</p>
    </div>
    <div class="npr-media"><?php echo $pr_img( 'pre-02.jpg', 'Spavanje na lijevom boku u trudnoći' ); ?></div>
  </div>
</section>

<style>
.npr-sec { padding: 46px 0; }
.npr-rose { background: #fdf1f1; color: #34262a; }
.npr-white { background: #fff;   color: #34262a; }
.npr-wrap { max-width: 1440px; margin: 0 auto; padding: 0 22px; }
.npr-row { display: grid; grid-template-columns: 1fr 1fr; gap: 48px; align-items: center; }
.npr-media img { width: 100%; height: auto; display: block; border-radius: 14px; }
.npr-eyebrow { text-transform: uppercase; letter-spacing: .14em; font-size: 12px; font-weight: 700; color: #c47b8a; margin: 0 0 8px; }
.npr-h2 { font-size: 27px; line-height: 1.22; margin: 0 0 12px; font-weight: 700; }
.npr-sec p { font-size: 15.5px; line-height: 1.62; margin: 0 0 12px; }
.npr-strong { font-weight: 600; }
.npr-note { font-size: 14.5px; opacity: .8; margin: 4px 0 0; }
.npr-ticks, .npr-tri { list-style: none; padding: 0; margin: 14px 0 0; }
.npr-ticks li { position: relative; padding-left: 24px; margin-bottom: 7px; font-size: 15px; }
.npr-ticks li:before { content: ""; position: absolute; left: 0; top: 6px; width: 12px; height: 12px; border-radius: 50%; background: #c47b8a; }
.npr-tri li { border-left: 3px solid #e3b5be; padding: 2px 0 2px 14px; margin-bottom: 12px; font-size: 15px; line-height: 1.55; }
.npr-steps { list-style: none; padding: 0; margin: 14px 0 0; }
.npr-steps li { display: flex; gap: 12px; margin-bottom: 12px; font-size: 15px; line-height: 1.55; }
.npr-steps span { flex: 0 0 auto; width: 28px; height: 28px; border-radius: 50%; background: #c47b8a; color: #fff;
                  font-weight: 800; display: flex; align-items: center; justify-content: center; font-size: 14px; }

.npr-three { display: grid; grid-template-columns: repeat(3, 1fr); gap: 16px; }
.npr-three figure { margin: 0; }
.npr-three img { width: 100%; height: auto; display: block; border-radius: 10px; }
.npr-mini { display: grid; grid-template-columns: 1fr 1fr; gap: 12px; margin-top: 14px; }
.npr-mini figure { margin: 0; }
.npr-mini img { width: 100%; height: auto; display: block; border-radius: 10px; }
.npr-ph { display: flex; align-items: center; justify-content: center; min-height: 200px; background: #f3dfe2; border-radius: 12px; color: #a9707c; font-size: 14px; text-align: center; padding: 12px; }
@media (max-width: 820px) {
  .npr-sec { padding: 22px 0; }
  .npr-wrap { padding-left: 0; padding-right: 0; }
  .npr-h2 { font-size: 22px; }
  .npr-row { grid-template-columns: 1fr; gap: 18px; }
  .npr-three { grid-template-columns: 1fr; gap: 14px; }
  .npr-row .npr-media { order: -1; }
}

/* kratek opis izdelka: kljukice namesto pikic (kot pri udlagi proti hrkanju) */
.woocommerce-product-details__short-description ul,
.woocommerce div.product .woocommerce-product-details__short-description ul {
  list-style: none !important; margin: 8px 0 14px !important; padding-left: 0 !important; }
.woocommerce-product-details__short-description ul li,
.woocommerce div.product .woocommerce-product-details__short-description ul li {
  list-style: none !important; list-style-type: none !important; padding-left: 24px !important;
  text-indent: -24px !important; margin-left: 0 !important; line-height: 1.55 !important; margin-bottom: 8px !important; }
.woocommerce-product-details__short-description ul li::marker { content: "" !important; }
.woocommerce-product-details__short-description ul li::before { content: none !important; }
.woocommerce-product-details__short-description .npr-tick {
  display: inline-block !important; width: 24px !important; text-indent: 0 !important;
  color: #c47b8a !important; font-weight: 800 !important; }
/* slika naj bo poravnana na rob kontejnerja, ne na sredino stolpca */
.npr-sec .npr-lead-copy { max-width: 820px; margin: 0 auto 22px !important; text-align: center; }
.npr-sec .npr-lead-copy p { margin-left: auto !important; margin-right: auto !important; }
.npr-sec .npr-lead-copy h2 { text-align: center; }
</style>
