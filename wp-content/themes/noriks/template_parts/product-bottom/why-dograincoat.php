<?php
/**
 * product-bottom: NORIKS DogRaincoat — prozracna kabanica za pse (orto-dograincoat).
 * Original: sparkpaws.com/products/dog-raincoat-mustard-yellow (»Breatheshield Dog Raincoats«) — vsebina in vrstni red
 * 1:1 z originalom (zavihki nakupne skatle + mnenja), oblika po NORIKS stilu (predloga why-maternityleggings.php /
 * why-hands.php), poudarek v gorcicno rumeni barvi izdelka (#a87508):
 *   1) »Product Description« — video izdelka + »Say goodbye to stuffy, suffocating raincoats…«
 *        -> Zbogom zagušljivim kabanicama (video utisan, hrvaski napisi vzgani, vodni znak znamke odstranjen,
 *           kader z napisom znamke na kabanici izrezan)
 *   2) »Product Description« — 9 lastnosti -> Promišljena do zadnjeg detalja (slika ob seznamu)
 *   3) »Size Guide« — »How to Measure Your Dog« (video), »Size by Measurements«, »Perfect Fit Guarantee«,
 *      »Still Need Help?« -> Pronađite pravu veličinu (video utisan s HR napisi, tablica S–4XL, jamstvo po NORIKS
 *      pogojih: 30 dana za povrat ili zamjenu); »Size by Breed« je v modalu tablice velicin
 *   4) »Customer Reviews« (Loox, prvih 8 mnenj s fotografijami) -> Recenzije kupaca (število po NORIKS = 1081)
 * Izpusceno: glava, »Complete The Set« (prodaja drugih izdelkov), »Your dog may also like«, ikone zaupanja
 * (»Free Return & Exchange«, »Trustpilot«, »30-Day Money Back«, »Worn by 2M+ Dogs«), »Shipping Info« (velja
 * standardna NORIKS harmonika o dostavi), noga. Opis je tudi v »Detalji o proizvodu« (meta.php), FAQ v reviews.php
 * ($dograincoat_faq), mnenja v auto_reviews/HR_dograincoat.php.
 * Slike in videi: img/dograincoat/ (ndr-…); galerija (velikostna slika prevedena v HR, znamka odstranjena) je v HR medijih.
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$ndr      = get_template_directory_uri() . '/img/dograincoat/';
$ndr_path = get_template_directory() . '/img/dograincoat/';
$ndr_img  = function( $file, $alt, $cls = '' ) use ( $ndr, $ndr_path ) {
  if ( ! $file || ! file_exists( $ndr_path . $file ) ) { return ''; }
  return '<img' . ( $cls ? ' class="' . esc_attr( $cls ) . '"' : '' ) . ' src="' . esc_url( $ndr . $file ) . '" alt="' . esc_attr( $alt ) . '" loading="lazy">';
};
$ndr_video = function( $name, $label ) use ( $ndr, $ndr_path ) {
  $file = $name . '.mp4'; $poster = $name . '-poster.webp';
  if ( ! file_exists( $ndr_path . $file ) ) { return ''; }
  return '<div class="ndr-vid"><video src="' . esc_url( $ndr . $file ) . '" poster="' . esc_url( $ndr . $poster ) . '"'
    . ' muted autoplay loop playsinline preload="metadata" aria-label="' . esc_attr( $label ) . '">Vaš preglednik ne podržava video.</video></div>';
};
$ndr_stars = function( $n ) {
  $n = max( 0, min( 5, (int) $n ) );
  return '<span class="ndr-stars" aria-label="' . $n . ' od 5 zvjezdica">' . str_repeat( '★', $n ) . '<span class="ndr-stars__off">' . str_repeat( '★', 5 - $n ) . '</span></span>';
};

/* 2) lastnosti iz opisa originala (9 alinej) */
$ndr_feat = array(
  'Vodootporan, vjetrootporan, <strong>lagan i izdržljiv</strong> materijal',
  '<strong>Bolja regulacija temperature</strong> — višak topline i vlage izlazi van, pa je psu udobnije',
  '<strong>Podesivi ovratnik</strong> čuva vrat i lice psa suhima, a ne zaklanja mu pogled',
  '<strong>Podesive vezice kod stražnjih nogu</strong> za lako obavljanje nužde',
  'Kroj koji <strong>ne sputava kretanje</strong> — pas se kreće slobodno',
  '<strong>Lako se oblači i skida</strong>, s kopčama sa strane',
  'Unutarnja <strong>mrežasta podstava</strong> za dodatnu udobnost, ne lijepi se za dlaku',
  '<strong>Reflektirajuće trake</strong> sa strane kabanice za sigurnost',
  '<strong>Otvor za povodac</strong> sa zaštitnim preklopom koji ne propušta kišu',
);

/* 4) mnenja kupcev s fotografijami (Loox, prvih 8 kot na originalu; ime znamke izpusceno) */
$ndr_rv = array(
  array( 'ime' => 'Joanne T.',    'img' => 'ndr-rv-1.webp', 'z' => 5, 'tekst' => 'Moj pas je staford s opsegom prsa 70 cm, a 2XL ima 66 cm, pa sam uzela 3XL. Bila je malo velika, ali samo sam prošila mali dio. Na fotografiji je ta veličina. Kvaliteta je izvrsna.' ),
  array( 'ime' => 'Carla',        'img' => 'ndr-rv-2.webp', 'z' => 5, 'tekst' => 'Kupila sam ovu kabanicu za svog psa, mješanca maltezera i pomeranca, i stvarno sam oduševljena! Kvaliteta je izvrsna, a izrada besprijekorna. Veličina L savršena je za njega. Bočne kopče i reflektirajuće trake jako su korisni detalji, a podesivi ovratnik odlično pristaje.' ),
  array( 'ime' => 'Joneth Y.',    'img' => 'ndr-rv-3.webp', 'z' => 5, 'tekst' => 'Moj pas je obožava 🤩 Isprva me gledao kao da pita »mama, što je ovo?«, ali brzo se navikao. Materijal je mekan i lagan, nimalo ne podsjeća na tešku, plastičnu kabanicu. Duljina je dobra i pokriva mu cijelo tijelo. Već sam je preporučila prijateljima.' ),
  array( 'ime' => 'Gagandeep K.', 'img' => 'ndr-rv-4.webp', 'z' => 5, 'tekst' => 'Kabanica je savršena za našeg velikog zlatnog retrivera! Lako se oblači i skida, lagana je, udobna i ne sputava ga u hodu. Čini se sretnim u njoj, a po kišnim danima ostaje lijepo suh. Toplo preporučujem za velike pse!' ),
  array( 'ime' => 'Kelly B.',     'img' => 'ndr-rv-5.webp', 'z' => 5, 'tekst' => 'Ove kabanice su i lijepe i praktične. Lagan vodootporan materijal pokriva psa od vrata nadolje, a visoki ovratnik dodatno štiti od vjetra i kiše. Nježna boja lavande izgleda fantastično, a kroj je dovoljno prostran i za veće pasmine.' ),
  array( 'ime' => 'Christina M.', 'img' => 'ndr-rv-6.webp', 'z' => 5, 'tekst' => 'Moji psi i ja jako smo zadovoljni ovom kupnjom. Kabanice se lako oblače i štite pse od kiše – sad, naravno, inzistiraju na šetnji po svakom vremenu 🤣' ),
  array( 'ime' => 'Shannen L.',   'img' => 'ndr-rv-7.webp', 'z' => 5, 'tekst' => 'Obožavam boju, duljinu i kroj! Tkanina je kvalitetna, a sviđa mi se što ima i male trake oko stražnjih nogu. Moj dečko sigurno ostaje suh! Toplo preporučujem!' ),
  array( 'ime' => 'Betsy K.',     'img' => 'ndr-rv-8.webp', 'z' => 5, 'tekst' => 'Kvalitetna i vrlo praktična! Mogu je spremiti u džep svoje kabanice, za svaki slučaj… Obožavam boju, a Waffles u njoj izgleda preslatko :)' ),
);

$ndr_n = 0; // števec sekcij za izmenična ozadja
$ndr_cls = function() use ( &$ndr_n ) { $ndr_n++; return ( $ndr_n % 2 ) ? ' ndr-tint' : ''; };
$ndr_side = 0; // izmenične strani slika/besedilo
$ndr_rev = function() use ( &$ndr_side ) { $ndr_side++; return ( $ndr_side % 2 ) ? '' : ' ndr-row2--rev'; };
?>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap">

<!-- 1) ZBOGOM ZAGUŠLJIVIM KABANICAMA ("Product Description": video + "Say goodbye to stuffy, suffocating raincoats") -->
<section class="ndr-sec<?php echo $ndr_cls(); ?>">
  <div class="ndr-wrap">
    <div class="ndr-row2<?php echo $ndr_rev(); ?>">
      <div class="ndr-media"><?php echo $ndr_video( 'ndr-v-opis', 'Pas u NORIKS DogRaincoat kabanici: oblačenje, kopče sa strane i podesivi ovratnik' ); ?></div>
      <div class="ndr-copy">
        <p class="ndr-kicker">Prva prozračna kabanica za pse</p>
        <h2 class="ndr-h3">Zbogom <em>zagušljivim kabanicama</em></h2>
        <p>NORIKS DogRaincoat prva je <strong>prozračna kabanica za pse</strong> na svijetu. Izrađena je od naprednih materijala koji propuštaju zrak, a istodobno ostaju <strong>vodootporni</strong> — vaš pas ostaje udoban i suh.</p>
        <p>Prozračna tkanina bolje regulira temperaturu jer propušta višak topline i vlage. Kabanicu samo prebacite psu preko glave i zakopčajte kopče sa strane.</p>
        <p class="ndr-big">Ne dopustite da kiša pokvari raspoloženje vašem ljubimcu — neka svaka šetnja bude suha i vesela.</p>
      </div>
    </div>
  </div>
</section>

<!-- 2) PROMIŠLJENA DO ZADNJEG DETALJA ("Product Description": 9 lastnosti) -->
<section class="ndr-sec<?php echo $ndr_cls(); ?>">
  <div class="ndr-wrap">
    <div class="ndr-row2<?php echo $ndr_rev(); ?>">
      <div class="ndr-media"><?php echo $ndr_img( 'ndr-znacajke.webp', 'Pas u žutoj NORIKS DogRaincoat kabanici na kiši', 'ndr-photo' ); ?></div>
      <div class="ndr-copy">
        <p class="ndr-kicker">Što je čini posebnom</p>
        <h2 class="ndr-h3">Promišljena <em>do zadnjeg detalja</em></h2>
        <ul class="ndr-list">
          <?php foreach ( $ndr_feat as $f ) : ?>
          <li><span class="ndr-check" aria-hidden="true">✓</span><span><?php echo wp_kses( $f, array( 'strong' => array() ) ); ?></span></li>
          <?php endforeach; ?>
        </ul>
        <p class="ndr-big">Suh i udoban pas — i po najgoroj kiši.</p>
      </div>
    </div>
  </div>
</section>

<!-- 3) PRONAĐITE PRAVU VELIČINU ("Size Guide": How to Measure Your Dog + Size by Measurements + Perfect Fit Guarantee + Still Need Help?) -->
<section class="ndr-sec<?php echo $ndr_cls(); ?>">
  <div class="ndr-wrap">
    <div class="ndr-row2<?php echo $ndr_rev(); ?>">
      <div class="ndr-media"><?php echo $ndr_video( 'ndr-v-mjerenje', 'Kako izmjeriti opseg prsa i duljinu leđa psa krojačkim metrom' ); ?></div>
      <div class="ndr-copy">
        <p class="ndr-kicker">Pronađite pravu veličinu</p>
        <h2 class="ndr-h3">Kako <em>izmjeriti psa</em></h2>
        <p>Izmjeriti psa je jednostavno — samo pripremite poslastice i <strong>krojački metar</strong> (ili vezicu, pa je poslije izmjerite).</p>
        <p><strong>Opseg prsa:</strong> najširi dio odmah iza prednjih nogu. <strong>Duljina leđa:</strong> od početka vrata do mjesta gdje počinje rep.</p>
        <div class="ndr-scroll">
          <table class="ndr-table">
            <thead><tr><th>Veličina</th><th>Opseg prsa</th><th>Duljina leđa</th><th>Težina psa</th></tr></thead>
            <tbody>
              <?php foreach ( noriks_dograincoat_sizes() as $r ) : ?>
              <tr><th scope="row"><?php echo esc_html( $r[0] ); ?></th><td><?php echo esc_html( $r[1] ); ?></td><td><?php echo esc_html( $r[2] ); ?></td><td><?php echo esc_html( $r[3] ); ?></td></tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
        <p><a href="#size-chart" class="ndr-open-size">Veličina prema pasmini →</a></p>
        <div class="ndr-help">
          <div class="ndr-help__item"><?php echo $ndr_img( 'ndr-ic-jamstvo.webp', '' ); ?><span><strong>Jamstvo savršenog pristajanja</strong>Pravo na povrat ili zamjenu u roku od 30 dana.</span></div>
          <div class="ndr-help__item"><?php echo $ndr_img( 'ndr-ic-pomoc.webp', '' ); ?><span><strong>Trebate pomoć?</strong>Javite nam se — rado ćemo vam pomoći odabrati veličinu.</span></div>
        </div>
        <p class="ndr-big">Ako je pas između dviju veličina, odaberite veću.</p>
      </div>
    </div>
  </div>
</section>

<!-- 4) RECENZIJE KUPACA ("Customer Reviews", Loox: prvih 8 mnenj s fotografijami) — število po NORIKS (1081) -->
<section class="ndr-sec<?php echo $ndr_cls(); ?>">
  <div class="ndr-wrap">
    <p class="ndr-kicker ndr-c">Recenzije kupaca</p>
    <h2 class="ndr-h2 ndr-c">Psi i vlasnici <em>obožavaju</em> svoje kabanice</h2>
    <div class="ndr-score">
      <span class="ndr-score__num">4,7 / 5</span>
      <?php echo $ndr_stars( 5 ); ?>
      <span class="ndr-score__txt">1081 recenzija</span>
    </div>
    <div class="ndr-reviews">
      <?php foreach ( $ndr_rv as $r ) : ?>
      <article class="ndr-card">
        <div class="ndr-card__img"><?php echo $ndr_img( $r['img'], 'Fotografija kupca: ' . $r['ime'] ); ?></div>
        <div class="ndr-card__body">
          <?php echo $ndr_stars( $r['z'] ); ?>
          <p class="ndr-card__txt">„<?php echo esc_html( $r['tekst'] ); ?>”</p>
          <p class="ndr-card__name"><?php echo esc_html( $r['ime'] ); ?> <span class="ndr-ok">✓ Potvrđena kupnja</span></p>
        </div>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<style>
/* NORIKS stil (predloga why-maternityleggings.php / why-hands.php): oznaka + naslov z ležečim poudarkom, slika/video
   ob besedilu, izmenjujoča ozadja in strani. Gorčično rumena paleta izdelka (poudarek #a87508). */
.ndr-sec { padding: 60px 0; font-family: 'Poppins', system-ui, -apple-system, 'Segoe UI', Roboto, Arial, sans-serif; color: #2b2414; background: #fff; }
.ndr-sec * { box-sizing: border-box; }
.ndr-tint { background: #fdf6e2; }
.ndr-wrap { width: 100%; max-width: 1200px; margin: 0 auto; padding: 0 24px; }
.ndr-c { text-align: center; }
.ndr-sec h2, .ndr-sec h3 { font-family: inherit; text-transform: none; letter-spacing: 0; }
.ndr-kicker, .ndr-copy p.ndr-kicker { font-size: 12.5px; line-height: 1.4; font-weight: 700; letter-spacing: .14em; text-transform: uppercase; color: #a87508; margin: 0 0 10px; }
.ndr-h2 { font-weight: 700; font-size: clamp(25px, 3.1vw, 36px); line-height: 1.2; margin: 0 0 14px; color: #2b2414; }
.ndr-h2 em, .ndr-h3 em { font-style: italic; color: #a87508; }
.ndr-h3 { font-weight: 700; font-size: clamp(22px, 2.6vw, 30px); line-height: 1.25; margin: 0 0 16px; color: #2b2414; }
.ndr-sec img { display: block; width: 100%; height: auto; }
.ndr-big, .ndr-copy p.ndr-big { font-size: 19px; font-weight: 700; color: #2b2414; line-height: 1.45; margin-top: 6px; }

/* slika/video ob besedilu */
.ndr-row2 { display: grid; grid-template-columns: 1fr 1fr; gap: 56px; align-items: center; }
.ndr-row2--rev .ndr-media { order: 2; }
.ndr-photo { border-radius: 10px; box-shadow: 0 2px 4px rgba(50,35,5,.05), 0 14px 40px rgba(50,35,5,.10); max-width: 520px; margin: 0 auto; aspect-ratio: 1 / 1; object-fit: cover; }
.ndr-vid { border-radius: 10px; overflow: hidden; box-shadow: 0 2px 4px rgba(50,35,5,.05), 0 14px 40px rgba(50,35,5,.10); background: #e9e5dc; aspect-ratio: 16 / 9; }
.ndr-vid video { display: block; width: 100%; height: 100%; object-fit: cover; }
.ndr-copy p { font-size: 16px; line-height: 1.7; color: #574b35; margin: 0 0 14px; }
.ndr-copy p strong { color: #2b2414; font-weight: 600; }

/* seznam lastnosti */
.ndr-list { list-style: none; margin: 0 0 16px; padding: 0; }
.ndr-list li { display: flex; gap: 12px; align-items: flex-start; font-size: 15.5px; line-height: 1.55; color: #574b35; margin: 0 0 10px; }
.ndr-list li strong { color: #2b2414; font-weight: 600; }
.ndr-check { flex: 0 0 22px; width: 22px; height: 22px; border-radius: 50%; background: #a87508; color: #fff; font-size: 12px; font-weight: 800; line-height: 22px; text-align: center; margin-top: 1px; }

/* tablica velicin */
.ndr-scroll { overflow-x: auto; -webkit-overflow-scrolling: touch; margin: 4px 0 12px; border-radius: 8px; border: 1px solid #ecd9a6; }
.ndr-table { width: 100%; border-collapse: collapse; font-size: 14px; background: #fff; }
.ndr-table th, .ndr-table td { padding: 9px 10px; text-align: left; white-space: nowrap; }
.ndr-table thead th { background: #fbf0d2; color: #2b2414; font-weight: 700; border-bottom: 2px solid #a87508; }
.ndr-table tbody th { font-weight: 700; color: #2b2414; }
.ndr-table td { color: #574b35; font-weight: 500; }
.ndr-table tbody tr + tr { border-top: 1px solid #f1e3bd; }
.ndr-table tbody tr:nth-child(even) { background: #fffaf0; }
.ndr-open-size { color: #a87508 !important; font-weight: 700; text-decoration: underline; text-underline-offset: 3px; }
.ndr-help { display: grid; grid-template-columns: 1fr 1fr; gap: 12px; margin: 6px 0 16px; }
.ndr-help__item { display: flex; gap: 12px; align-items: center; background: #fff; border: 1px solid #ecd9a6; border-radius: 10px; padding: 12px; }
.ndr-help__item img { flex: 0 0 44px; width: 44px !important; height: 44px; border-radius: 50%; object-fit: cover; }
.ndr-help__item span { font-size: 13.5px; line-height: 1.45; color: #574b35; }
.ndr-help__item strong { display: block; color: #2b2414; font-size: 14px; margin-bottom: 2px; }

/* ocjene */
.ndr-stars { color: #f2a516; letter-spacing: 1px; font-size: 15px; }
.ndr-stars__off { color: #ece2c8; }
.ndr-score { display: flex; justify-content: center; align-items: center; gap: 12px; margin: 0 0 28px; flex-wrap: wrap; }
.ndr-score__num { font-size: 24px; font-weight: 700; color: #2b2414; }
.ndr-score .ndr-stars { font-size: 20px; }
.ndr-score__txt { font-size: 14.5px; color: #75694f; }

/* mnenja s fotografijami */
.ndr-reviews { display: grid; grid-template-columns: repeat(4, minmax(0, 1fr)); gap: 18px; align-items: stretch; }
.ndr-card { background: #fff; border: 1px solid #ecd9a6; border-radius: 10px; overflow: hidden; display: flex; flex-direction: column; }
.ndr-sec:not(.ndr-tint) .ndr-card { background: #fdf6e2; }
.ndr-card__img img { aspect-ratio: 3 / 4; object-fit: cover; }
.ndr-card__body { padding: 16px; }
.ndr-card__txt { font-size: 14.5px; line-height: 1.6; color: #3d3220; margin: 8px 0 10px; font-style: italic; }
.ndr-card__name { font-size: 13.5px; font-weight: 600; color: #2b2414; margin: 0; }
.ndr-ok { color: #2f9e5f; font-weight: 600; font-size: 12px; margin-left: 4px; font-style: normal; }

@media (max-width: 989px) {
  .ndr-row2 { gap: 32px; }
  .ndr-reviews { grid-template-columns: repeat(2, minmax(0, 1fr)); }
}
@media (max-width: 749px) {
  .ndr-sec { padding: 42px 0; }
  .ndr-wrap { padding: 0 16px; }
  .ndr-row2 { grid-template-columns: 1fr; gap: 24px; }
  .ndr-row2--rev .ndr-media { order: 0; }
  .ndr-reviews { grid-template-columns: repeat(2, minmax(0, 1fr)); gap: 12px; }
  .ndr-card__body { padding: 12px; }
  .ndr-help { grid-template-columns: 1fr; }
}

/* galerija izdelka: sličice največ v 2 vrstah (5 na vrsto), ostale slike so dosegljive z drsenjem glavne slike */
.product_cat-orto-dograincoat .flex-control-thumbs li:nth-child(n+11) { display: none !important; }

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
.woocommerce-product-details__short-description .ndr-tick {
  position: absolute !important; left: 0 !important; top: 1px !important;
  width: 21px; height: 21px; border-radius: 50%;
  background: #2f9e5f !important; color: #fff !important;
  font-size: 12px !important; font-weight: 800 !important; line-height: 21px !important;
  text-align: center !important; display: inline-block !important; }
.woocommerce-product-details__short-description p:first-of-type { font-size: 16px; line-height: 1.55; }
</style>
