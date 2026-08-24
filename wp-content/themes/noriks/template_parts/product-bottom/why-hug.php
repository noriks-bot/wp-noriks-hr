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

$hg_vid = function( $file, $poster, $alt ) use ( $hg, $hg_path ) {
  if ( ! file_exists( $hg_path . $file ) ) { return ''; }
  return '<video class="nhg-video" autoplay muted loop playsinline preload="metadata" '
       . 'poster="' . esc_url( $hg . $poster ) . '" aria-label="' . esc_attr( $alt ) . '">'
       . '<source src="' . esc_url( $hg . $file ) . '" type="video/mp4"></video>';
};

$hg_img = function( $file, $alt ) use ( $hg, $hg_path ) {
  if ( file_exists( $hg_path . $file ) ) {
    return '<img src="' . esc_url( $hg . $file ) . '" alt="' . esc_attr( $alt ) . '" loading="lazy">';
  }
  return '<div class="nhg-ph" role="img" aria-label="' . esc_attr( $alt ) . '"><span>' . esc_html( $alt ) . '</span></div>';
};
?>


<!-- 1) Kako izgleda u stvarnom danu — cetiri videa -->
<section class="nhg-sec nhg-warm">
  <div class="nhg-wrap">
    <div class="nhg-lead-copy">
      <h2 class="nhg-h2">Toplina koja ide s vama kroz dan</h2>
      <p>Kuhinja, kauč, ured ili šetnja — termofor ostaje na mjestu, a ruke su slobodne.</p>
    </div>
    <div class="nhg-vids">
      <figure>
        <?php echo $hg_vid( 'hug-vid-1.mp4', 'hug-vid-1.jpg', 'Punjenje termofora u kuhinji' ); ?>
        <figcaption>Brzo, jednostavno i prirodno</figcaption>
      </figure>
      <figure>
        <?php echo $hg_vid( 'hug-vid-2.mp4', 'hug-vid-2.jpg', 'Mekana navlaka od krzna' ); ?>
        <figcaption>Mekano i ugodno</figcaption>
      </figure>
      <figure>
        <?php echo $hg_vid( 'hug-vid-3.mp4', 'hug-vid-3.jpg', 'Nosivi termofor na križima' ); ?>
        <figcaption>Prilagodljivo — trbuh ili križa</figcaption>
      </figure>
      <figure>
        <?php echo $hg_vid( 'hug-vid-4.mp4', 'hug-vid-4.jpg', 'Nošenje ispod odjeće' ); ?>
        <figcaption>Uvijek sa sobom</figcaption>
      </figure>
    </div>
  </div>
</section>

<!-- 1) Mnenja kupcev — tri fotografije -->
<section class="nhg-sec nhg-white">
  <div class="nhg-wrap">
    <div class="nhg-lead-copy">
      <h2 class="nhg-h2">Što nam kupci pišu</h2>
      <p>Tri poruke koje najbolje opisuju zašto se Hugger ne vraća u ladicu.</p>
    </div>
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
<section class="nhg-sec nhg-warm">
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
<section class="nhg-sec nhg-white">
  <div class="nhg-wrap nhg-row">
    <div class="nhg-copy">
      <h2 class="nhg-h2">Zašto grije duže od običnog termofora</h2>
      <p>Klasičan termofor ima jedan problem: prvih deset minuta je prevruć, a onda naglo postane mlak. Razlog je jednostavan — toplina bježi u sobu jer je ništa ne zadržava uz tijelo.</p>
      <p>NORIKS Hugger rješava oboje. Navlaka ima <strong>dvostruki sloj izolacije</strong>: gušći sloj prema van zadržava toplinu, mekano krzno prema koži je ublažava, pa nema onog prvog vrelog šoka.</p>
      <p class="nhg-strong">Krakovi na čičak drže bocu pritisnutu uz tijelo, pa toplina ide u vas, a ne u zrak.</p>
      <ul class="nhg-ticks">
        <li><strong>Ugodna temperatura satima</strong>, bez skoka od vrućeg do mlakog</li>
        <li><strong>Toplina ostaje na jednom mjestu</strong> — na trbuhu ili križima, ondje gdje ste je stavili</li>
        <li><strong>Ne treba je pridržavati</strong>: ruke su slobodne dok kuhate, radite ili spavate</li>
        <li><strong>Bez struje i bez čekanja</strong> — dovoljan je čajnik, spremna je za minutu</li>
      </ul>
      <p class="nhg-note">Za usporedbu: termofor ispod deke ohladi se čim ustanete i deka sklizne. Hugger ide s vama i toplina traje koliko i voda u boci.</p>
    </div>
    <div class="nhg-media"><?php echo $hg_img( 'hug-01-sofa.jpg', 'Nosivi termofor na kauču' ); ?></div>
  </div>
</section>

<!-- 4) Prednosti — slika desno -->
<!-- 5) Boca i sigurnost — slika lijevo -->
<!-- 6) Dodaci — tri slike u nizu -->
<!-- 7) Materijal i pranje — slika desno -->
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
  .nhg-vids { grid-template-columns: 1fr 1fr; gap: 14px; }
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
.nhg-sec .nhg-center { text-align: center; }
.nhg-vids { display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px; margin-top: 18px; }
.nhg-vids figure { margin: 0; }
.nhg-vids .nhg-video { width: 100%; height: auto; display: block; border-radius: 14px; }
.nhg-vids figcaption { text-align: center; font-size: 16px; font-weight: 700; margin-top: 12px; }
.nhg-media .nhg-video { width: 100%; height: auto; display: block; border-radius: 14px; }
.nhg-sec .nhg-lead-copy { max-width: 820px; margin: 0 auto 22px !important; text-align: center; }
.nhg-sec .nhg-lead-copy p { margin-left: auto !important; margin-right: auto !important; }
.nhg-sec .nhg-lead-copy h2 { text-align: center; }
</style>
