<?php
/**
 * product-bottom: NORIKS Hugger — nosivi termofor (orto-hug).
 *
 * Sve sekcije su LIJEVO/DESNO (slika + tekst), po referentnoj stranici
 * (huggercomfort.com / Hot Hugger). Nikad slika na sredini.
 * Recenzije i FAQ renderira zajednicki reviews.php.
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$hg      = get_template_directory_uri() . '/img/hug/';
$hg_path = get_template_directory() . '/img/hug/';

$hg_img = function( $file, $alt ) use ( $hg, $hg_path ) {
  if ( file_exists( $hg_path . $file ) ) {
    return '<img src="' . esc_url( $hg . $file ) . '" alt="' . esc_attr( $alt ) . '" loading="lazy">';
  }
  return '<div class="nhg-ph" role="img" aria-label="' . esc_attr( $alt ) . '"><span>' . esc_html( $alt ) . '</span></div>';
};
?>


<!-- 1) Mnenja kupcev — tri fotografije -->
<section class="nhg-sec nhg-warm">
  <div class="nhg-wrap">
    <h2 class="nhg-h2">Što nam kupci pišu</h2>
    <div class="nhg-fb">
      <figure>
        <?php echo $hg_img( 'hug-fb-1.jpg', 'Recenzija kupca s NORIKS Huggerom' ); ?>
        <figcaption>
          <strong>Izum koji mijenja dan</strong>
          <span class="nhg-stars">★★★★★ <em>5/5</em></span>
          <p>„Imam endometriozu i grčeve koje tablete jedva ublaže. Prije sam si termofor gurala pod trenirku i nadala se najboljem — ovako ostane točno na mjestu i mogu normalno funkcionirati.”</p>
        </figcaption>
      </figure>
      <figure>
        <?php echo $hg_img( 'hug-fb-2.jpg', 'Recenzija kupca s NORIKS Huggerom' ); ?>
        <figcaption>
          <strong>„Nevjerojatan proizvod"</strong>
          <span class="nhg-stars">★★★★★ <em>5/5</em></span>
          <p>„Iznenadila me kvaliteta materijala — jako je mekan. Nosim ga cijeli dan, s bocom sprijeda ili straga, ovisno o tome što me taj dan muči.”</p>
        </figcaption>
      </figure>
      <figure>
        <?php echo $hg_img( 'hug-fb-3.jpg', 'Recenzija kupca s NORIKS Huggerom' ); ?>
        <figcaption>
          <strong>„Ne skidam ga!"</strong>
          <span class="nhg-stars">★★★★★ <em>5/5</em></span>
          <p>„Kupila sam ga prije tjedan dana i doslovno ga ne skidam. Savršen je kad zatreba topline — i za grčeve i za križa nakon dugog dana.”</p>
        </figcaption>
      </figure>
    </div>
  </div>
</section>

<!-- 2) Kako je napravljen — slika desno -->
<section class="nhg-sec nhg-white">
  <div class="nhg-wrap nhg-row">
    <div class="nhg-media nhg-graf"><?php echo $hg_img( 'hug-09-strane.jpg', 'Prednja i stražnja strana navlake' ); ?></div>
    <div class="nhg-copy">
      <h2 class="nhg-h2">Kako se koristi</h2>
      <ol class="nhg-steps">
        <li><span>1</span><div><strong>Napunite termofor.</strong> Vrućom, ali ne kipućom vodom, do otprilike dvije trećine i istisnite zrak prije zatvaranja.</div></li>
        <li><span>2</span><div><strong>Umetnite ga u navlaku.</strong> Boca ide u džep na stražnjoj strani — navlaka je između boce i kože.</div></li>
        <li><span>3</span><div><strong>Zategnite krakove na čičak.</strong> Namjestite oko struka do ugodne napetosti i nastavite s onim što ste radili.</div></li>
      </ol>
      <p class="nhg-note">Prednja strana je mekano krzno, stražnja ima džep za bocu i čičak na krakovima.</p>
    </div>
  </div>
</section>

<!-- 3) Dvostruka izolacija — slika lijevo -->
<section class="nhg-sec nhg-warm">
  <div class="nhg-wrap nhg-row">
    <div class="nhg-copy">
      <h2 class="nhg-h2">Zašto grije duže od običnog termofora</h2>
      <p>Navlaka ima <strong>dvostruki sloj izolacije</strong>, pa temperatura ostaje ugodna satima — bez skoka od prevruće do mlake nakon deset minuta.</p>
      <p class="nhg-strong">Krakovi drže bocu uz tijelo, pa se toplina zadržava između navlake i vas, a ne bježi u sobu.</p>
    </div>
    <div class="nhg-media"><?php echo $hg_img( 'hug-01-sofa.jpg', 'Nosivi termofor na kauču' ); ?></div>
  </div>
</section>

<!-- 4) Prednosti — slika desno -->
<section class="nhg-sec nhg-white">
  <div class="nhg-wrap nhg-row">
    <div class="nhg-media nhg-graf"><?php echo $hg_img( 'hug-07-prednosti.jpg', 'Prednosti nosivog termofora' ); ?></div>
    <div class="nhg-copy">
      <h2 class="nhg-h2">Kad se najčešće poseže za njim</h2>
      <p>Prvi dan ciklusa, dok grčevi ne popuste. Poslije duge vožnje ili smjene na nogama, kad se križa jave. U prohladnom uredu, gdje grijanje nikad nije taman.</p>
      <p>Za razliku od grijaćeg jastuka ne veže vas za utičnicu, a za razliku od gel-obloga ne treba mikrovalna — dovoljan je čajnik.</p>
      <p class="nhg-strong">Zato često završi kao poklon: dolazi u urednom pakiranju i ne treba mu ništa dodatno kupovati.</p>
    </div>
  </div>
</section>

<!-- 5) Boca i sigurnost — slika lijevo -->
<section class="nhg-sec nhg-warm">
  <div class="nhg-wrap nhg-row">
    <div class="nhg-copy">
      <h2 class="nhg-h2">Boca koja dolazi u kompletu</h2>
      <p>U pakiranju je termofor od <strong>500 ml</strong> izrađen od <strong>100 % prirodne gume</strong>, bez lateksa — ne trebate ništa dokupljivati.</p>
      <ul class="nhg-ticks">
        <li>Punite vrućom, ali ne kipućom vodom</li>
        <li>Istisnite zrak i dobro zavrnite čep prije uporabe</li>
        <li>Ne stavljajte termofor izravno na golu kožu na dulje vrijeme</li>
        <li>Zamijenite bocu ako primijetite pukotine ili zamor gume</li>
      </ul>
    </div>
    <div class="nhg-media"><?php echo $hg_img( 'hug-08-boce.jpg', 'Termofor od prirodne gume' ); ?></div>
  </div>
</section>

<!-- 6) Dodaci — tri slike u nizu -->
<section class="nhg-sec nhg-white">
  <div class="nhg-wrap">
    <div class="nhg-lead-copy">
      <h2 class="nhg-h2">Dodaci koji dopunjuju komplet</h2>
      <p>Produžetak veličine povećava opseg do 110 cm, putna vrećica čuva navlaku u torbi, a rezervna boca i klasična navlaka produžuju vijek kompleta.</p>
      <p class="nhg-strong">Sve je iz iste linije, u istim nijansama — bež i kapučino.</p>
    </div>
    <div class="nhg-three">
      <figure><?php echo $hg_img( 'hug-02-extender-bez.jpg', 'Produžetak veličine' ); ?><figcaption>Produžetak veličine</figcaption></figure>
      <figure><?php echo $hg_img( 'hug-14-vrecica-boca.jpg', 'Putna vrećica s termoforom' ); ?><figcaption>Putna vrećica</figcaption></figure>
      <figure><?php echo $hg_img( 'hug-12-dodaci.jpg', 'Pregled dodataka' ); ?><figcaption>Cijela linija dodataka</figcaption></figure>
    </div>
  </div>
</section>

<!-- 7) Materijal i pranje — slika desno -->
<section class="nhg-sec nhg-warm">
  <div class="nhg-wrap nhg-row">
    <div class="nhg-media"><?php echo $hg_img( 'hug-04-navlaka.jpg', 'Mekana navlaka od krzna' ); ?></div>
    <div class="nhg-copy">
      <h2 class="nhg-h2">Materijal i održavanje</h2>
      <ul class="nhg-ticks">
        <li>Vanjski sloj od super mekanog krzna, ugodan uz kožu</li>
        <li>Mrlje obrišite vlažnom krpom</li>
        <li>Strojno pranje na najviše 30 °C, program za osjetljivo, blagi deterdžent</li>
        <li>Ne bijeliti, ne peglati, ne sušiti u sušilici i ne prati s drugim bojama</li>
      </ul>
      <p class="nhg-note">Za najduži vijek navlake preporučujemo ručno pranje u hladnoj vodi.</p>
    </div>
  </div>
</section>



<style>
.nhg-sec { padding: 46px 0; }
.nhg-warm  { background: #fdf2ec; color: #3a2620; }
.nhg-white { background: #fff;    color: #3a2620; }
.nhg-wrap { max-width: 1440px; margin: 0 auto; padding: 0 22px; }
.nhg-row { display: grid; grid-template-columns: 1fr 1fr; gap: 48px; align-items: center; }
.nhg-media img { width: 100%; height: auto; display: block; border-radius: 14px; }
.nhg-eyebrow { text-transform: uppercase; letter-spacing: .14em; font-size: 12px; font-weight: 700; color: #d24a2a; margin: 0 0 8px; }
.nhg-h2 { font-size: 27px; line-height: 1.22; margin: 0 0 12px; font-weight: 700; }
.nhg-sec p { font-size: 15.5px; line-height: 1.62; margin: 0 0 12px; }
.nhg-strong { font-weight: 600; }
.nhg-note { font-size: 14.5px; opacity: .82; margin: 4px 0 0; }
.nhg-stars { color: #d8a94b; letter-spacing: 3px; margin: 0 0 6px; font-size: 17px; }
.nhg-ticks { list-style: none; padding: 0; margin: 14px 0 0; }
.nhg-ticks li { position: relative; padding-left: 24px; margin-bottom: 7px; font-size: 15px; }
.nhg-ticks li:before { content: ""; position: absolute; left: 0; top: 6px; width: 12px; height: 12px; border-radius: 50%; background: #d24a2a; }
.nhg-steps { list-style: none; padding: 0; margin: 14px 0 0; }
.nhg-steps li { display: flex; gap: 12px; margin-bottom: 12px; font-size: 15px; line-height: 1.55; }
.nhg-steps span { flex: 0 0 auto; width: 28px; height: 28px; border-radius: 50%; background: #d24a2a; color: #fff;
                  font-weight: 800; display: flex; align-items: center; justify-content: center; font-size: 14px; }
.nhg-lead-copy { max-width: 780px; margin: 0 0 20px; }
.nhg-three { display: grid; grid-template-columns: repeat(3, 1fr); gap: 16px; align-items: start; }
.nhg-three figure { margin: 0; }
.nhg-three img { width: 100%; height: auto; display: block; border-radius: 10px; }
.nhg-three figcaption { text-align: center; font-size: 13px; margin-top: 7px; opacity: .72; }
.nhg-mini { display: grid; grid-template-columns: 1fr 1fr; gap: 12px; margin-top: 14px; }
.nhg-mini figure { margin: 0; }
.nhg-mini img { width: 100%; height: auto; display: block; border-radius: 10px; }
.nhg-ph { display: flex; align-items: center; justify-content: center; min-height: 200px; background: #f6e2d8; border-radius: 12px; color: #a86a55; font-size: 14px; text-align: center; padding: 12px; }
@media (max-width: 820px) {
  .nhg-sec { padding: 22px 0; }
  .nhg-wrap { padding-left: 0; padding-right: 0; }
  .nhg-h2 { font-size: 22px; }
  .nhg-row { grid-template-columns: 1fr; gap: 18px; }
  .nhg-fb { grid-template-columns: 1fr; gap: 22px; }
  .nhg-three { grid-template-columns: 1fr; gap: 14px; }
  .nhg-row .nhg-media { order: -1; }
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
.woocommerce-product-details__short-description .nhg-tick {
  display: inline-block !important; width: 24px !important; text-indent: 0 !important;
  color: #d24a2a !important; font-weight: 800 !important; }
/* slika naj bo poravnana na rob kontejnerja, ne na sredino stolpca */
.nhg-fb { display: grid; grid-template-columns: repeat(3, 1fr); gap: 24px; margin-top: 18px; }
.nhg-fb figure { margin: 0; }
.nhg-fb img { width: 100%; height: auto; display: block; border-radius: 14px; }
.nhg-fb figcaption { padding-top: 12px; }
.nhg-fb figcaption strong { display: block; font-size: 19px; line-height: 1.25; margin-bottom: 4px; }
.nhg-fb .nhg-stars { display: block; font-size: 15px; margin: 0 0 8px; }
.nhg-fb .nhg-stars em { font-style: normal; color: #6b625c; font-size: 14px; }
.nhg-fb p { font-size: 14.5px; line-height: 1.6; margin: 0; }
</style>
