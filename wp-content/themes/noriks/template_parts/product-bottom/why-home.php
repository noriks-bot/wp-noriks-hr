<?php
/**
 * product-bottom: NORIKS HOME PowerHook — vakuumske kuke (orto-home).
 * Sekcije prate original (rohahome.com) u istom redoslijedu:
 *   0) traka s jamstvima
 *   1) Estetske i praktične kuke
 *   2) Twist & Lock tehnologija
 *   3) Montaža bez oštećenja
 *   4) Snažno prianjanje do 7 kg (video)
 *   5) NORIKS HOME PowerHook vs klasične kuke
 *   6) Otkrijte snagu naših kuka (videi)
 *   7) Recenzije kupaca s fotografijama
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$hm      = get_template_directory_uri() . '/img/home/';
$hm_path = get_template_directory() . '/img/home/';

$hm_img = function( $file, $alt, $cls = '' ) use ( $hm, $hm_path ) {
  if ( file_exists( $hm_path . $file ) ) {
    return '<img class="' . esc_attr( $cls ) . '" src="' . esc_url( $hm . $file ) . '" alt="' . esc_attr( $alt ) . '" loading="lazy">';
  }
  return '<div class="nhm-ph" role="img" aria-label="' . esc_attr( $alt ) . '"><span>' . esc_html( $alt ) . '</span></div>';
};
$hm_vid = function( $file, $poster, $alt ) use ( $hm, $hm_path ) {
  if ( ! file_exists( $hm_path . $file ) ) { return ''; }
  return '<video class="nhm-video" autoplay muted loop playsinline preload="metadata" '
       . 'poster="' . esc_url( $hm . $poster ) . '" aria-label="' . esc_attr( $alt ) . '">'
       . '<source src="' . esc_url( $hm . $file ) . '" type="video/mp4"></video>';
};
?>

<!-- 1) DISCOVER THE POWER — videi -->
<section class="nhm-sec nhm-white">
  <div class="nhm-wrap">
    <h2 class="nhm-h2 nhm-center">Otkrijte snagu naših kuka</h2>
    <p class="nhm-tagline">Montaža, opterećenje i skidanje — bez montaže i bez tragova.</p>
    <div class="nhm-vids">
      <figure><?php echo $hm_vid( 'home-vid-2.mp4', 'home-vid-2.jpg', 'Postavljanje kuke u nekoliko sekundi' ); ?><figcaption>Postavljanje u nekoliko sekundi</figcaption></figure>
      <figure><?php echo $hm_vid( 'home-vid-3.mp4', 'home-vid-3.jpg', 'Kuka u kupaonici' ); ?><figcaption>U kupaonici, na staklu i pločicama</figcaption></figure>
      <figure><?php echo $hm_vid( 'home-vid-1.mp4', 'home-vid-1.jpg', 'Ispitivanje nosivosti' ); ?><figcaption>Ispitana nosivost do 7 kg</figcaption></figure>
    </div>
  </div>
</section>

<!-- 2) Twist & Lock tehnologija -->
<section class="nhm-sec nhm-grey">
  <div class="nhm-wrap nhm-row">
    <div class="nhm-copy">
      <p class="nhm-eyebrow">Patentirana tehnologija</p>
      <h2 class="nhm-h2">Twist &amp; Lock</h2>
      <p>Okretanjem gumba aktivira se <strong>višestruka kompresija</strong>: brtva se prilagodi površini i stvori čvrst dosjed, a vakuum ga dodatno pojača.</p>
      <p>Zato kuka drži i kad je okolina vlažna, a kad je poželite premjestiti, otpustite je jednim okretom — bez ostatka ljepila i bez oštećenja.</p>
      <p class="nhm-note">Promjer 6,1 cm · dubina 4 cm · izdržljivi polimer otporan na hrđu</p>
    </div>
    <div class="nhm-media"><?php echo $hm_img( 'home-tehnologija.jpg', 'Presjek Twist & Lock vakuumske kuke' ); ?></div>
  </div>
</section>

<!-- 3) Montaza bez ostecenja -->
<section class="nhm-sec nhm-white">
  <div class="nhm-wrap nhm-row">
    <div class="nhm-media"><?php echo $hm_img( 'home-povrsine.jpg', 'Kuke rade na više vrsta glatkih površina' ); ?></div>
    <div class="nhm-copy">
      <p class="nhm-eyebrow">Bez alata</p>
      <h2 class="nhm-h2">Montaža bez oštećenja</h2>
      <p>Bez bušenja, bez vijaka i bez ljepila. Kuku prislonite, zavrnete i gotovo — postavljanje traje nekoliko sekundi.</p>
      <ul class="nhm-ticks">
        <li>Staklo i ogledala</li>
        <li>Pločice i mramor</li>
        <li>Akril i glatka plastika</li>
        <li>Glatki metal i inox</li>
        <li>Laminat i glatko drvo</li>
      </ul>
      <p class="nhm-note">Površina mora biti glatka, čista i suha. Ne prianja na hrapave, porozne i teksturirane zidove.</p>
    </div>
  </div>
</section>

<!-- 4) Recenzije kupaca -->
<section class="nhm-sec nhm-white">
  <div class="nhm-wrap">
    <h2 class="nhm-h2 nhm-center">Što kažu naši kupci</h2>
    <p class="nhm-tagline"><strong>4,9 / 5</strong> — prosječna ocjena na temelju recenzija kupaca</p>
    <div class="nhm-rev-grid">
      <?php
      $hm_revs = array(
        array( 'home-ugc-1.jpg',  'Stavio sam jednu na staklo tuš-kabine — tjednima drži bez pomicanja.', 'Vedran C.' ),
        array( 'home-ugc-2.jpg',  'Konačno nešto praktično za pribor pod tušem što stvarno drži i lijepo izgleda.', 'Lovro M.' ),
        array( 'home-ugc-3.jpg',  'Kupila sam četiri i sve drže čvrsto. Čak i četka za tuširanje ostane gore bez problema.', 'Petra G.' ),
        array( 'home-ugc-4.jpg',  'Jednostavna montaža i ne ostavlja tragove. Idealno za one koji ne žele bušiti u kadu.', 'Jelena M.' ),
        array( 'home-ugc-5.jpg',  'Ove kuke odlično rade na mramoru u tušu. Bolje od nekih klasičnih držača.', 'Nora B.' ),
        array( 'home-ugc-6.jpg',  'Uselili smo se u novi stan i trebale su nam kuke za krpe. Obične vakuumske nisu držale na našim pločicama, ove drže i mjesec dana kasnije.', 'Damir T.' ),
        array( 'home-ugc-7.jpg',  'Kupio sam ih za renoviranje kupaonice. Postavio jednu u stari tuš za probu — drži mokri ručnik bez problema.', 'Ana W.' ),
        array( 'home-ugc-8.jpg',  'Bila sam skeptična da će držati na staklu. Mislila sam da će pasti preko noći — dva tjedna kasnije još stoje.', 'Sofija A.' ),
        array( 'home-ugc-9.jpg',  'Slijedio sam upute: postaviti, zavrnuti i pričekati dan prije vješanja. Drži težinu vlažnih ručnika bez pomaka.', 'Emil S.' ),
        array( 'home-ugc-10.jpg', 'Jednu držim izvana za ručnik, drugu iznutra za spužvu. Ostat ću kod ove marke jer druge padaju puno brže.', 'Tin V.' ),
        array( 'home-ugc-11.jpg', 'Kupio sam ih za staklene stijenke tuša — prošle su test dugotrajnosti. Drže i suhe i mokre ručnike.', 'Lidija M.' ),
        array( 'home-ugc-12.jpg', 'Izgledaju moderno i uredno, točno ono što sam tražila. Konačno nema nereda u kupaonici.', 'Eliana S.' ),
      );
      foreach ( $hm_revs as $rv ) : ?>
        <article class="nhm-rev">
          <?php echo $hm_img( $rv[0], 'Recenzija kupca NORIKS HOME PowerHook' ); ?>
          <div class="nhm-rev-body">
            <span class="nhm-stars">★★★★★</span>
            <p><?php echo esc_html( $rv[1] ); ?></p>
            <footer><strong><?php echo esc_html( $rv[2] ); ?></strong><em>Provjerena kupnja</em></footer>
          </div>
        </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<style>
.nhm-sec { padding: 52px 0; }
.nhm-white { background: #fff;    color: #151515; }
.nhm-grey  { background: #f4f4f4; color: #151515; }
.nhm-sec *, .nhm-marquee * { box-sizing: border-box; }
.nhm-wrap { width: 100%; max-width: 1240px; margin: 0 auto; padding: 0 24px; }
.nhm-center { text-align: center; }
.nhm-sec, .nhm-sec p, .nhm-sec li { font-family: 'Inter', -apple-system, BlinkMacSystemFont, Helvetica, Arial, sans-serif; }
.nhm-sec h2, .nhm-sec strong { font-family: 'Plus Jakarta Sans', 'Inter', Helvetica, Arial, sans-serif; }
.nhm-h2 { font-size: 36px; line-height: 1.12; margin: 0 0 18px; font-weight: 800; letter-spacing: -.03em; color: #151515; }
.nhm-sec p { font-size: 16.5px; line-height: 1.62; margin: 0 0 12px; color: #333; }
.nhm-eyebrow { text-transform: uppercase; letter-spacing: .14em; font-size: 12px; font-weight: 800; color: #8a8a8a; margin: 0 0 8px; }
.nhm-note { font-size: 14px; color: #6b6b6b; margin-top: 10px; }
.nhm-tagline { max-width: 720px; margin: -6px auto 30px !important; text-align: center !important; font-size: 16px; color: #5f5f5f; }
.nhm-row { display: grid; grid-template-columns: 1fr 1fr; gap: 56px; align-items: center; }
.nhm-row .nhm-copy { max-width: 540px; }
.nhm-row-card { gap: 24px; align-items: stretch; }
.nhm-card { background: #f1f1f1; border-radius: 18px; padding: 46px 44px; display: flex; flex-direction: column;
  justify-content: center; max-width: none !important; }
.nhm-media-video { border-radius: 18px; overflow: hidden; }
.nhm-media-video .nhm-video { width: 100%; height: 100%; min-height: 340px; object-fit: cover; display: block; }
.nhm-media img { width: 100%; height: auto; display: block; border-radius: 18px; }
.nhm-sq { aspect-ratio: 1/1; border-radius: 18px; overflow: hidden; background: #ececed; }
.nhm-sq .nhm-video { width: 100%; height: 100%; object-fit: cover; display: block; }
.nhm-ticks { list-style: none; padding: 0; margin: 14px 0 0; display: grid; grid-template-columns: 1fr 1fr; gap: 8px 18px; }
.nhm-ticks li { position: relative; padding-left: 24px; font-size: 15.5px; }
.nhm-ticks li:before { content: "✓"; position: absolute; left: 0; color: #22c55e; font-weight: 800; }
.nhm-cmp img { width: 100%; max-width: 900px; height: auto; display: block; margin: 0 auto; border-radius: 16px; }
.nhm-vids { display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px; }
.nhm-vids figure { margin: 0; }
.nhm-vids .nhm-video { width: 100%; aspect-ratio: 1/1; object-fit: cover; border-radius: 14px; display: block; }
.nhm-vids figcaption { text-align: center; font-size: 15px; font-weight: 700; margin-top: 10px; }
.nhm-rev-grid { display: grid; grid-template-columns: repeat(4, 1fr); gap: 22px; }
.nhm-rev { border: 1px solid #ececee; border-radius: 18px; overflow: hidden; background: #fff;
  display: flex; flex-direction: column; transition: box-shadow .2s, transform .2s; }
.nhm-rev:hover { box-shadow: 0 10px 28px rgba(0,0,0,.09); transform: translateY(-2px); }
.nhm-rev img { width: 100%; aspect-ratio: 1/1; object-fit: cover; display: block; }
.nhm-rev-body { padding: 16px 18px 18px; display: flex; flex-direction: column; flex: 1; position: relative; }
.nhm-stars { color: #f5b301; font-size: 14px; letter-spacing: 2.5px; }
.nhm-rev p { font-size: 14.5px; line-height: 1.6; margin: 10px 0 14px; flex: 1; color: #333; }
.nhm-rev footer { border-top: 1px solid #efefef; padding-top: 11px; display: flex; align-items: center; gap: 9px; }
.nhm-rev footer strong { font-size: 14.5px; letter-spacing: -.01em; }
.nhm-rev footer em { font-style: normal; font-size: 12.5px; color: #1f7a4d; font-weight: 700;
  background: #e8f5ee; border-radius: 999px; padding: 3px 9px; white-space: nowrap; }
.nhm-ph { display: flex; align-items: center; justify-content: center; min-height: 180px; background: #ececed; border-radius: 12px; color: #8b8b8b; font-size: 14px; }

@media (max-width: 900px) {
  .nhm-sec { padding: 26px 0; }
  .nhm-wrap { padding-left: 14px; padding-right: 14px; }
  .nhm-h2 { font-size: 25px; }
  .nhm-row { grid-template-columns: 1fr; gap: 18px; }
  .nhm-row .nhm-copy { max-width: none; }
  .nhm-card { padding: 26px 22px; }
  .nhm-media-video .nhm-video { min-height: 240px; }
  .nhm-row-card .nhm-media { order: -1; }
  .nhm-row .nhm-media { order: -1; }
  .nhm-ticks { grid-template-columns: 1fr; }
  .nhm-vids { grid-template-columns: 1fr; gap: 16px; }
  .nhm-rev-grid { grid-template-columns: 1fr 1fr; gap: 12px; }
  .nhm-rev p { font-size: 13.5px; }
}

/* kratki opis proizvoda: zelene kvacice */
.woocommerce-product-details__short-description ul,
.woocommerce div.product .woocommerce-product-details__short-description ul {
  list-style: none !important; margin: 4px 0 10px !important; padding-left: 0 !important; }
.woocommerce-product-details__short-description ul li,
.woocommerce div.product .woocommerce-product-details__short-description ul li {
  list-style: none !important; padding-left: 0 !important; text-indent: 0 !important; margin-left: 0 !important;
  line-height: 1.38 !important; margin-bottom: 0 !important; display: flex !important; align-items: flex-start; gap: 8px; }
.woocommerce-product-details__short-description ul li::marker { content: "" !important; }
.woocommerce-product-details__short-description ul li::before { content: none !important; }
.woocommerce-product-details__short-description .nhm-tick {
  flex: 0 0 auto !important; display: inline-block !important; color: #22c55e !important; font-weight: 800 !important; font-size: 17px !important; }
.woocommerce-product-details__short-description .nhm-red {
  color: #c3192a !important; font-weight: 700 !important; font-size: 15px !important; margin: 8px 0 12px !important; }
</style>
