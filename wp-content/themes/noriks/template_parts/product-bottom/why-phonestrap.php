<?php
/**
 * product-bottom: NORIKS PhoneStrap — drzac za mobitel protiv ispadanja (orto-phonestrap).
 * Original: holdmategear.com/products/holdmate-anti-drop-strap — vsebina 1:1 z originalom
 * (isti vrstni red, ista besedila v hrvascini), oblika po NORIKS stilu (predloga why-hands.php):
 *   1) Kako ga koristiti          (besedilo levo, video desno)
 *   2) 3 razloga za nadogradnju   (video levo, besedilo desno)
 *   3) Zasto cete ga zavoljeti    (besedilo levo, slika desno)
 *   4) 30 dana za povrat          (samo besedilo — po NORIKS pogojih namesto "90-day guarantee")
 *   5) 120.000+ zadovoljnih kupaca (preprosta mreza 7 kartic s fotografijami kupcev)
 * Skatla z jamstvom 90 dni (na originalu pod nakupno skatlo) in promo pasica originala sta odstranjeni
 * (NORIKS pogoji / NORIKS stil). FAQ je v reviews.php ($phonestrap_faq), mnenja v auto_reviews/HR_phonestrap.php,
 * dolg opis v woocommerce/single-product/meta.php.
 * Slike: img/phonestrap/.
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$nps      = get_template_directory_uri() . '/img/phonestrap/';
$nps_path = get_template_directory() . '/img/phonestrap/';
$nps_img  = function( $file, $alt ) use ( $nps, $nps_path ) {
  if ( ! file_exists( $nps_path . $file ) ) { return ''; }
  return '<img src="' . esc_url( $nps . $file ) . '" alt="' . esc_attr( $alt ) . '" loading="lazy">';
};
$nps_video = function( $file, $poster, $label ) use ( $nps, $nps_path ) {
  if ( ! file_exists( $nps_path . $file ) ) { return ''; }
  return '<video src="' . esc_url( $nps . $file ) . '"' . ( file_exists( $nps_path . $poster ) ? ' poster="' . esc_url( $nps . $poster ) . '"' : '' )
    . ' autoplay muted loop playsinline preload="metadata" aria-label="' . esc_attr( $label ) . '"></video>';
};

/* 5) 120.000+ zadovoljnih kupaca — 1:1 z originala (isti vrstni red, iste fotografije kupcev). */
$nps_testimonials = array(
  array( 'foto' => 'ps-rv-annartimm.webp', 'ime' => '@Annartimm', 'tekst' => 'Ovo mijenja sve. Na zadnjem skijanju ispao mi je mobitel, a sad se osjećam puno sigurnije.' ),
  array( 'foto' => 'ps-rv-johnny.webp',    'ime' => '@Johnny',    'tekst' => 'Super čvrst i jednostavan za korištenje — upravo ono što mi je trebalo za skijanje i planinarenje.' ),
  array( 'foto' => 'ps-rv-jacob.webp',     'ime' => '@Jacob',     'tekst' => 'Odlična kvaliteta i pametan dizajn. Mobitel mi je uvijek pri ruci, bez ikakvog rizika.' ),
  array( 'foto' => 'ps-rv-stephanie.webp', 'ime' => '@Stephanie', 'tekst' => 'Kupila sam jedan za sebe, a onda još dva za djecu — radi savršeno.' ),
  array( 'foto' => 'ps-rv-robert.webp',    'ime' => '@Robert',    'tekst' => 'Cijeli vikend koristio sam ga na stazama i nijednom se nisam brinuo da će mi ispasti mobitel.' ),
  array( 'foto' => 'ps-zasto-volite.webp', 'ime' => '@Niko',      'tekst' => 'Napokon držač za mobitel koji stvarno ostaje na mjestu na žičari! Sad se osjećam puno sigurnije.' ),
  array( 'foto' => 'ps-rv-hanna.webp',     'ime' => '@Hanna',     'tekst' => 'Obožavam koliko je siguran. Čak ni na brzim spustovima mobitel se nije pomaknuo.' ),
);
?>

<!-- 1) KAKO GA KORISTITI — video desno -->
<section class="nps-sec nps-tint">
  <div class="nps-wrap nps-row2 nps-row2--rev">
    <div class="nps-copy">
      <p class="nps-kicker">Kako radi</p>
      <h2 class="nps-h2">Kako ga <em>koristiti</em></h2>
      <p>Korištenje držača za mobitel brzo je, jednostavno i osmišljeno za maksimalnu sigurnost. Samo umetnite podložak između mobitela i maske, pritisnite da sjedne na mjesto i zakačite kolut na hlače, jaknu ili ruksak. Mobitel vam tako više ne može ispasti — a uvijek je nadohvat ruke.</p>
      <ul class="nps-check">
        <li>Postavljanje u nekoliko sekundi — bez alata i muke</li>
        <li>Čuva mobitel na skijanju, planinarenju, putovanjima i svaki dan</li>
        <li>Tanak i lagan dizajn koji jedva primjećujete</li>
        <li>Odgovara svim pametnim telefonima</li>
      </ul>
      <p class="nps-big">Daje vam sigurnost da zabilježite svaki trenutak bez straha da ćete izgubiti mobitel.</p>
    </div>
    <div class="nps-media"><?php echo $nps_video( 'ps-kako-koristiti.mp4', 'ps-kako-koristiti-poster.webp', 'Kako koristiti NORIKS PhoneStrap' ); ?></div>
  </div>
</section>

<!-- 2) 3 RAZLOGA ZA NADOGRADNJU — video lijevo -->
<section class="nps-sec">
  <div class="nps-wrap nps-row2">
    <div class="nps-media nps-media--grey"><?php echo $nps_video( 'ps-3-razloga.mp4', 'ps-3-razloga-poster.webp', 'NORIKS PhoneStrap — karabiner, kolut sa sajlom i podložak' ); ?></div>
    <div class="nps-copy">
      <p class="nps-kicker">Nadogradnja</p>
      <h2 class="nps-h2">3 razloga <em>za nadogradnju</em></h2>
      <p>Maska štiti mobitel kad padne. NORIKS PhoneStrap pazi da uopće ne padne — a to je jedina zaštita koja radi i kad ste na žičari, na biciklu ili nagnuti preko ograde.</p>
      <p>Sastavljen je iz tri dijela: tankog podloška koji ide između mobitela i maske, koluta sa sajlom koja se uvlači sama i kukice kojom ga zakačite na odjeću ili ruksak.</p>
      <ul class="nps-check nps-check--big">
        <li>Uvijek osiguran, bilo kad i bilo gdje</li>
        <li>Odgovara svakom pametnom telefonu</li>
        <li>Postavljanje za 8 sekundi</li>
      </ul>
    </div>
  </div>
</section>

<!-- 3) 120.000+ ZADOVOLJNIH KUPACA -->
<section class="nps-sec nps-tint">
  <div class="nps-wrap">
    <h2 class="nps-h2 nps-h2--c"><em>120.000+</em> zadovoljnih kupaca</h2>
    <div class="nps-grid">
      <?php foreach ( $nps_testimonials as $t ) : ?>
      <article class="nps-tc">
        <?php echo $nps_img( $t['foto'], 'Fotografija kupca — ' . $t['ime'] ); ?>
        <p class="nps-tc__stars" aria-label="5 od 5 zvjezdica">★★★★★</p>
        <p class="nps-tc__txt">„<?php echo esc_html( $t['tekst'] ); ?>“</p>
        <p class="nps-tc__name"><?php echo esc_html( $t['ime'] ); ?></p>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- 4) ZAŠTO ĆETE GA ZAVOLJETI — slika desno -->
<section class="nps-sec">
  <div class="nps-wrap nps-row2 nps-row2--rev">
    <div class="nps-copy">
      <p class="nps-kicker">Zašto NORIKS PhoneStrap</p>
      <h2 class="nps-h2">Zašto ćete ga <em>zavoljeti</em></h2>
      <p>Svake godine tisuće mobitela izgube se, razbiju ili unište tijekom aktivnosti na otvorenom. Jedno poskliznuće, jedan nespretan pokret, jedan trenutak nepažnje — i 1.000+ € nestaje zauvijek.</p>
      <p>NORIKS PhoneStrap stoji manje od jedne zamjene zaslona — i čuva vas od te noćne more.</p>
      <p>Zakačite ga na jaknu, ruksak ili remen. Idite na skijanje, planinarenje, pecanje ili na najluđi rollercoaster. Mobitel ostaje uz vas.</p>
      <p class="nps-big">Pridružite se tisućama zadovoljnih kupaca koji već vjeruju našem proizvodu!</p>
    </div>
    <div class="nps-media"><?php echo $nps_img( 'ps-zasto-volite.webp', 'NORIKS PhoneStrap na ruksaku — mobitel uvijek pri ruci' ); ?></div>
  </div>
</section>

<style>
/* NORIKS standard: slika/video zapolni svoj stolpec v razmerju 4/5, besedilo navpicno na sredini */
.nps-row2 { align-items: center; }
.nps-media > img, .nps-media > video,
.nps-media > a > img, .nps-media picture > img {
  width: 100%; aspect-ratio: 4 / 5; object-fit: cover; border-radius: 12px;
  box-shadow: 0 2px 4px rgba(25,20,15,.05), 0 14px 40px rgba(25,20,15,.10); }
@media (max-width: 749px) {
  .nps-media > img, .nps-media > video { aspect-ratio: 1 / 1; }
}

.nps-trust { display: flex; flex-wrap: wrap; justify-content: center; gap: 10px 26px; margin: 18px 0 0; font-size: 14px; font-weight: 600; color: #6b6b6b; }
.nps-trust span { position: relative; padding-left: 20px; }
.nps-trust span::before { content: "\2713"; position: absolute; left: 0; color: #3d3d3d; }

.nps-sec { padding: 60px 0; background: #fff; font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Arial, sans-serif; color: #1d1d1f; }
.nps-sec * { box-sizing: border-box; }
.nps-tint { background: #f4f4f2; }
.nps-wrap { width: 100%; max-width: 1240px; margin: 0 auto; padding: 0 24px; }
.nps-row2 { display: grid; grid-template-columns: 1fr 1fr; gap: 56px; align-items: center; }
.nps-media img, .nps-media video { display: block; width: 100%; height: auto; aspect-ratio: 1 / 1; object-fit: cover; border-radius: 0;
  box-shadow: 0 2px 4px rgba(0,0,0,.05), 0 14px 40px rgba(0,0,0,.10); }
.nps-media--grey video { background: #f0f0f0; }
.nps-sec p.nps-kicker { font-size: 12.5px; line-height: 1.4; font-weight: 800; letter-spacing: .14em; text-transform: uppercase; color: #d9480f; margin: 0 0 10px; }
.nps-sec p.nps-kicker--c { text-align: center; }
.nps-h2 { font-size: clamp(25px, 3.1vw, 36px); font-weight: 800; line-height: 1.18; letter-spacing: -.01em; margin: 0 0 16px; text-transform: none; }
.nps-h2--c { text-align: center; }
.nps-h2 em { font-style: italic; font-weight: 800; color: #d9480f; }
.nps-copy p, .nps-text p { font-size: 16px; line-height: 1.7; color: #4a4a4f; margin: 0 0 14px; }
.nps-copy strong, .nps-text strong { color: #1d1d1f; }
.nps-big { font-size: 19px !important; font-weight: 800; line-height: 1.45 !important; color: #1d1d1f !important; }
.nps-text { max-width: 760px; text-align: center; }
.nps-check { list-style: none; padding: 0; margin: 6px 0 18px; display: flex; flex-direction: column; gap: 11px; }
.nps-check li { position: relative; padding-left: 30px; font-size: 15.5px; line-height: 1.5; color: #1d1d1f; list-style: none; }
.nps-check li::before { content: "\2713"; position: absolute; left: 0; top: 1px; width: 20px; height: 20px; border-radius: 50%;
  background: #1d1d1f; color: #fff; font-size: 11px; font-weight: 800; display: flex; align-items: center; justify-content: center; }
.nps-check--big li { font-size: 18px; font-weight: 700; padding-left: 34px; }
.nps-check--big li::before { width: 23px; height: 23px; font-size: 12.5px; }

/* 5) mnenja kupcev — preprosta mreza */
.nps-grid { display: grid; grid-template-columns: repeat(4, 1fr); gap: 18px; margin-top: 10px; }
.nps-tc { background: #fff; border: 1px solid #e4e4e0; padding: 16px 16px 20px; text-align: center; }
.nps-tc img { display: block; width: 100%; aspect-ratio: 1 / 1; object-fit: cover; margin: 0 0 12px; }
.nps-tc__stars { color: #e0a33c; letter-spacing: 2px; font-size: 15px; margin: 0 0 8px; }
.nps-tc__txt { font-size: 14.8px; line-height: 1.55; color: #4a4a4f; margin: 0 0 10px; }
.nps-tc__name { font-size: 14px; font-weight: 800; color: #1d1d1f; margin: 0; }

/* kratek opis v nakupni skatli: "Kljucne prednosti" s crnimi kljukicami */
.nps-benefits { list-style: none !important; padding: 0 !important; margin: 6px 0 10px !important; }
.nps-benefits li { display: flex; align-items: flex-start; gap: 8px; margin: 0 0 8px; list-style: none !important; }
.nps-benefits li::before { content: none !important; }
.nps-tick { flex: 0 0 18px; display: inline-flex; align-items: center; justify-content: center; width: 18px; height: 18px; margin-top: 2px;
  border-radius: 50%; background: #000; color: #fff; font-size: 11px; font-weight: 700; line-height: 1; }

/* NORIKS stil: brez naslova nad ponudbami (vticnik ga izpise s ::before) */
.product_cat-orto-phonestrap #bundle-selector::before, #bundle-selector::before { content: none !important; display: none !important; }

@media (max-width: 980px) {
  .nps-row2 { grid-template-columns: 1fr; gap: 28px; }
  .nps-row2--rev .nps-media { order: -1; }
  .nps-grid { grid-template-columns: repeat(2, 1fr); }
}
@media (max-width: 560px) {
  .nps-sec { padding: 42px 0; }
  .nps-wrap { padding: 0 16px; }
  .nps-grid { gap: 10px; }
  .nps-tc { padding: 10px 10px 14px; }
  .nps-tc__txt { font-size: 13.5px; }
}
</style>
