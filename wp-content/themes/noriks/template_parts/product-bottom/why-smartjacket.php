<?php
/**
 * product-bottom: NORIKS SmartJacket — reflektirajuća vodootporna ženska jakna 3 u 1 (orto-smartjacket).
 * Original: valkental.com/products/3in1-smart-jacket-damen — vsebina in vrstni red 1:1 z originalom,
 * oblika po NORIKS stilu (predloga why-hands.php / why-sculptbrief.php), privzeta topla rjava paleta (#a9683f):
 *   1) "Das sagt unsere Community" (5 videov kupcev) -> Što kaže naša zajednica (videi ob besedilu + prednosti iz nakupne škatle)
 *   2) "Kundenstimmen" (6 mnenj) -> Recenzije kupaca
 *   3) "LUMI-TEX Pro Technologie" -> Reflektirajuća tehnologija (slika ob besedilu)
 *   4) "Warum vollreflektierend?" -> Zašto potpuno reflektirajuća? (besedilo ob sliki)
 *   5) "Von Herbst bis Frühling" -> Od jeseni do proljeća (slika ob besedilu)
 *   6) "Sicherheit, die du wirklich gerne trägst" -> Sigurnost koju ćete rado nositi (besedilo ob sliki)
 *   7) "Lieferung & Retoure" -> NORIKS pogoji (30 dana za povrat, besplatna dostava iznad 70 €)
 *   8) "Wissenswertes zu unserer 3 in 1 Smart Jacket" -> Sve o jakni 3 u 1 (video izdelka ob besedilu)
 * Izpusceno: glava, "Bundle Angebote", A/B animacija "Wer wird zuerst gesehen?", priporocila, noga, povezave na druge
 * kolekcije konkurenta. Znamka konkurenta (logotip, LUMI-TEX®, DHL, Koblenz) odstranjena iz besedil, slik in videov.
 * FAQ (10) je v reviews.php ($smartjacket_faq), mnenja tudi v auto_reviews/HR_smartjacket.php.
 * Slike/videi: img/smartjacket/ (z originala, brez znamke; videi brez zvoka s hrvaškimi podnapisi).
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$nsj      = get_template_directory_uri() . '/img/smartjacket/';
$nsj_path = get_template_directory() . '/img/smartjacket/';
$nsj_img  = function( $file, $alt ) use ( $nsj, $nsj_path ) {
  if ( ! $file || ! file_exists( $nsj_path . $file ) ) { return ''; }
  return '<img src="' . esc_url( $nsj . $file ) . '" alt="' . esc_attr( $alt ) . '" loading="lazy">';
};
$nsj_video = function( $name, $label, $cls = '' ) use ( $nsj, $nsj_path ) {
  $file = $name . '-hr.mp4'; $poster = $name . '-poster.webp';
  if ( ! file_exists( $nsj_path . $file ) ) { return ''; }
  return '<div class="nsj-vid' . ( $cls ? ' ' . esc_attr( $cls ) : '' ) . '"><video src="' . esc_url( $nsj . $file ) . '" poster="' . esc_url( $nsj . $poster ) . '"'
    . ' muted autoplay loop playsinline preload="metadata" aria-label="' . esc_attr( $label ) . '"></video></div>';
};
$nsj_stars = function( $n ) {
  return '<span class="nsj-stars" aria-label="' . (int) $n . ' od 5 zvjezdica">' . str_repeat( '★', (int) $n ) . '<span class="nsj-stars__off">' . str_repeat( '★', 5 - (int) $n ) . '</span></span>';
};

/* 1) prednosti iz nakupne skatle originala */
$nsj_points = array(
  '<strong>Do 5x ranije uočljivi u mraku</strong> — cijela vanjska površina reflektira svjetlo farova',
  '<strong>3 jakne u 1:</strong> fleksibilnost kad se vrijeme promijeni',
  '<strong>Suhi po svakom vremenu</strong> zahvaljujući vodenom stupcu od 10.000 mm',
  '<strong>Podesiva</strong> za savršeno pristajanje',
  '<strong>Bez rizika</strong> — pravo na povrat u roku od 30 dana',
);

/* 2) Recenzije kupaca — 6 mnenj z originala */
$nsj_reviews = array(
  array( 'ime' => 'Iva', 'z' => 5, 'tekst' => 'Danas sam jaknu »testirala« na zimskim temperaturama i uz malo vjetra u laganom hodanju i stvarno sam oduševljena. Ispod jakne bila mi je dovoljna majica dugih rukava i bilo mi je dovoljno toplo. Rukavi flis jakne malo su dugi, ali zato mi nisu trebale rukavice. Crvena boja je odlična i osjećam se dobro vidljivo! Odabrala sam veličinu M nakon što mi je L bila prevelika. Zamjena je bila potpuno jednostavna. Sve u svemu, savršena jakna. Već se veselim prvoj vožnji biciklom u njoj! Svakako preporučujem!' ),
  array( 'ime' => 'Marin', 'z' => 5, 'tekst' => 'Super brza dostava. Jaknu sam kupio u veličini S i moram reći — odličan proizvod, dobra izrada, a svijetli fantastično. 👍👍👍👍 Samo za preporuku.' ),
  array( 'ime' => 'Matija', 'z' => 5, 'tekst' => 'Odlična jakna — vrlo ugodna za nošenje. Lijepo je mekana i topla. U mraku dobro reflektira. Napokon je ima i u većim veličinama — a dostava najbrža. Hvala, hvala! 😊' ),
  array( 'ime' => 'Mihael', 'z' => 5, 'tekst' => 'Nova verzija jakne 3 u 1 ispunjava sva očekivanja — vodootporna, ugodno topla bez pregrijavanja, vrlo dobra izrada i bolji materijal nego kod prethodne verzije. Za mene optimalna i k tome povoljna oprema. Vrlo korisna i onima koji ne voze bicikl. Jako sam zadovoljan i svima je preporučujem.' ),
  array( 'ime' => 'Oliver', 'z' => 5, 'tekst' => 'Jaknu sam dobio prije otprilike tjedan dana. Prvi put sam je nosio bez flis jakne i oduševljen sam koliko ne propušta kišu. Cijeli dan jake kiše, samo pješice i bez kišobrana. Što reći — ostao sam potpuno suh. I jakna se brzo osuši. Vrhunski proizvod. Oduševljen sam.' ),
  array( 'ime' => 'Stjepan', 'z' => 5, 'tekst' => 'Senzacionalna jakna! Sa sportskih 1,90 m zapravo sam htio XL, ali kako je nije bilo, na sreću sam naručio L i jako sam zadovoljan. Savršeno pristaje, rukavi su ipak dovoljno dugi, s flisom je jako topla, a skriveni vanjski džep za mobitel je super. Da, i svijetli jarko bijelo, što mi je bio glavni razlog kupnje.' ),
);

/* 3)–6) slika ob besedilu (izmenicno), 1:1 z originala */
$nsj_rows = array(
  array( 'img' => 'sj-s-tehnologija.webp', 'alt' => 'Reflektirajuća vodootporna tkanina NORIKS SmartJacket danju i noću', 'k' => 'Tehnologija',
    'h' => 'Reflektirajuća <em>tehnologija</em>',
    'p' => array( 'Uz novu reflektirajuću tehnologiju ostajete <strong>suhi i vidljivi</strong>. Jakna u mraku potpuno reflektira svjetlo, a vodenim stupcem od <strong>10.000 mm</strong> pouzdano vas štiti od kiše.' ),
    'big' => 'Suhi po kiši. Vidljivi u mraku.' ),
  array( 'img' => 'sj-s-noc.webp', 'alt' => 'Žena u NORIKS SmartJacket jakni noću na pješačkom prijelazu', 'k' => 'Sigurnost u mraku',
    'h' => 'Zašto <em>potpuno reflektirajuća?</em>',
    'p' => array( 'Mnoge žene podcjenjuju koliko su u mraku zapravo nevidljive. S potpuno reflektirajućom jaknom niste samo bolje uočljivi — <strong>uočljivi ste ranije</strong>.', 'To vozačima daje više vremena za reakciju, a vama više sigurnosti na svakom koraku.' ),
    'big' => 'Viđeni ranije. Sigurniji na svakom koraku.' ),
  array( 'img' => 'sj-s-sezone.webp', 'alt' => 'Vanjska jakna po kiši i unutarnja flis jakna u zatvorenom', 'k' => 'Jedna jakna za cijelu godinu',
    'h' => 'Od jeseni <em>do proljeća</em>',
    'p' => array( 'Dosta je više jakni za svako godišnje doba. Vanjska jakna odlična je kao <strong>lagana kišna i prijelazna jakna</strong>.', 'Unutarnja flis jakna savršena je za hladne, suhe dane — a zajedno su topla zimska jakna.' ),
    'big' => 'Tri jakne. Jedna vješalica.' ),
  array( 'img' => 'sj-s-kupci.webp', 'alt' => 'Kupci u reflektirajućoj jakni 3 u 1 danju i noću', 'k' => 'Za svaki dan',
    'h' => 'Sigurnost koju ćete <em>rado nositi.</em>',
    'p' => array( 'Bolja vidljivost pomaže samo ako jaknu redovito nosite. Zato NORIKS SmartJacket spaja <strong>potpuno reflektirajuću vanjsku površinu</strong> s jednostavnim izgledom i udobnošću za svaki dan.', 'Za put na posao, šetnju sa psom ili vožnju biciklom — bez izgleda klasične zaštitne odjeće.' ),
    'big' => 'Elegantna danju. Sigurna noću.' ),
);
?>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap">

<!-- 1) ŠTO KAŽE NAŠA ZAJEDNICA — 5 videov kupcev ob besedilu -->
<section class="nsj-sec nsj-tint">
  <div class="nsj-wrap">
    <div class="nsj-row2 nsj-row2--top">
      <div class="nsj-media">
        <div class="nsj-ugc">
          <?php for ( $n = 1; $n <= 5; $n++ ) { echo $nsj_video( 'sj-ugc-' . $n, 'Video kupca ' . $n . ' — NORIKS SmartJacket', 'nsj-vid--tall' ); } ?>
        </div>
      </div>
      <div class="nsj-copy">
        <p class="nsj-kicker">Videi kupaca</p>
        <h2 class="nsj-h3">Što kaže <em>naša zajednica</em></h2>
        <p>Danju jednostavna, elegantna jakna — noću, u svjetlu farova, potpuno reflektira. Pogledajte kako NORIKS SmartJacket izgleda uživo, po kiši, u mraku i u svakodnevici.</p>
        <ul class="nsj-points">
          <?php foreach ( $nsj_points as $pt ) : ?><li><span class="nsj-dot" aria-hidden="true">✓</span><span><?php echo wp_kses( $pt, array( 'strong' => array() ) ); ?></span></li><?php endforeach; ?>
        </ul>
        <p class="nsj-big">Topla flis jakna + reflektirajuća kišna jakna = vodootporna zimska jakna.</p>
      </div>
    </div>
  </div>
</section>

<!-- 2) RECENZIJE KUPACA — 6 mnenj -->
<section class="nsj-sec">
  <div class="nsj-wrap">
    <p class="nsj-kicker nsj-c">Recenzije kupaca</p>
    <h2 class="nsj-h2 nsj-c">Iskustva <em>provjerenih kupaca</em></h2>
    <div class="nsj-reviews">
      <?php foreach ( $nsj_reviews as $r ) : ?>
      <article class="nsj-card">
        <div class="nsj-card__top">
          <span class="nsj-avatar" aria-hidden="true"><?php echo esc_html( substr( $r['ime'], 0, 1 ) ); ?></span>
          <div><p class="nsj-card__name"><?php echo esc_html( $r['ime'] ); ?> <span class="nsj-ok">✓ Potvrđena kupnja</span></p><?php echo $nsj_stars( $r['z'] ); ?></div>
        </div>
        <p class="nsj-card__txt"><?php echo esc_html( $r['tekst'] ); ?></p>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<?php foreach ( $nsj_rows as $i => $w ) : ?>
<!-- <?php echo (int) ( $i + 3 ); ?>) slika ob besedilu -->
<section class="nsj-sec<?php echo ( $i % 2 ) ? '' : ' nsj-tint'; ?>">
  <div class="nsj-wrap">
    <div class="nsj-row2<?php echo ( $i % 2 ) ? ' nsj-row2--rev' : ''; ?>">
      <div class="nsj-media nsj-media--land"><?php echo $nsj_img( $w['img'], $w['alt'] ); ?></div>
      <div class="nsj-copy">
        <p class="nsj-kicker"><?php echo esc_html( $w['k'] ); ?></p>
        <h2 class="nsj-h3"><?php echo wp_kses( $w['h'], array( 'em' => array() ) ); ?></h2>
        <?php foreach ( $w['p'] as $p ) : ?><p><?php echo wp_kses( $p, array( 'strong' => array() ) ); ?></p><?php endforeach; ?>
        <p class="nsj-big"><?php echo esc_html( $w['big'] ); ?></p>
      </div>
    </div>
  </div>
</section>
<?php endforeach; ?>

<!-- 7) DOSTAVA I POVRAT — NORIKS pogoji (namesto "Lieferung & Retoure") -->
<section class="nsj-sec nsj-tint">
  <div class="nsj-wrap">
    <div class="nsj-row2">
      <div class="nsj-media nsj-media--port"><?php echo $nsj_img( 'sj-s-noriks.webp', 'NORIKS SmartJacket reflektirajuća jakna 3 u 1 u crvenoj boji' ); ?></div>
      <div class="nsj-copy">
        <p class="nsj-kicker">Dostava i povrat</p>
        <h2 class="nsj-h3">Dostava i povrat — <em>brzo i jednostavno</em></h2>
        <p>Narudžbu šaljemo brzo, a platiti možete i <strong>pouzećem</strong>. Za narudžbe iznad 70 € dostava je besplatna.</p>
        <p>Ako vam jakna ne odgovara ili vam treba druga veličina, imate <strong>pravo na povrat u roku od 30 dana</strong> — javite nam se i pomoći ćemo vam oko povrata ili zamjene.</p>
        <p class="nsj-trust"><span>Pravo na povrat u roku od 30 dana</span><span>Besplatna dostava za narudžbe iznad 70 €</span><span>Plaćanje pouzećem</span></p>
      </div>
    </div>
  </div>
</section>

<!-- 8) SVE O JAKNI 3 U 1 — video izdelka ob besedilu -->
<section class="nsj-sec">
  <div class="nsj-wrap">
    <div class="nsj-row2 nsj-row2--rev">
      <div class="nsj-media nsj-media--vid"><?php echo $nsj_video( 'sj-video-3u1', 'NORIKS SmartJacket — reflektirajuća vodootporna jakna 3 u 1', 'nsj-vid--sq' ); ?></div>
      <div class="nsj-copy">
        <p class="nsj-kicker">Sve o jakni 3 u 1</p>
        <h2 class="nsj-h3">Ženska jakna 3 u 1 <em>za svako vrijeme</em></h2>
        <p>Ženska jakna 3 u 1 idealna je kad tražite fleksibilnu jaknu koja vas ne prati samo jednu sezonu. NORIKS SmartJacket spaja zaštitni vanjski sloj s <strong>odvojivim flisom</strong>, pa je prilagođavate temperaturi, kiši i svakodnevici. Po kiši nosite samo vanjsku jaknu, a za suhih hladnih dana često je dovoljan i mekani flis.</p>
        <p>Upravo u prijelaznom razdoblju i na niskim temperaturama načelo 3 u 1 pokazuje svoju snagu. Kao zimska jakna s unutarnjom jaknom prikladna je za put na posao, šetnje, vožnju biciklom ili šetnju gradom — grije, štiti od vjetra i kiše, a dovoljno je fleksibilna da je ne nosite samo zimi.</p>
        <h3 class="nsj-h4">Maksimalna udobnost <em>flisa</em></h3>
        <p>Kad zahladi, nije važna samo vodootpornost nego i ugodan osjećaj pri nošenju. Mekana flis podstava daje dodatnu toplinu, a ne deblja. Kapuljača štiti kad je vrijeme nestalno, a prozračni materijal pomaže da i u pokretu ostanete ugodno suhi.</p>
        <p class="nsj-big">Pouzdana pratnja za hladne dane, nagle promjene vremena i lagane aktivnosti na otvorenom.</p>
      </div>
    </div>
  </div>
</section>

<style>
/* NORIKS stil (predloga why-hands.php / why-sculptbrief.php): oznaka + naslov z ležečim poudarkom, slika/video ob
   besedilu, izmenjujoča ozadja. Privzeta topla rjava paleta NORIKS (#a9683f). */
.nsj-sec { padding: 60px 0; font-family: 'Poppins', system-ui, -apple-system, 'Segoe UI', Roboto, Arial, sans-serif; color: #231d19; background: #fff; }
.nsj-sec * { box-sizing: border-box; }
.nsj-tint { background: #f7f2ec; }
.nsj-wrap { width: 100%; max-width: 1200px; margin: 0 auto; padding: 0 24px; }
.nsj-c { text-align: center; }
.nsj-sec h2, .nsj-sec h3 { font-family: inherit; text-transform: none; letter-spacing: 0; }
.nsj-kicker, .nsj-copy p.nsj-kicker { font-size: 12.5px; line-height: 1.4; font-weight: 700; letter-spacing: .14em; text-transform: uppercase; color: #a9683f; margin: 0 0 10px; }
.nsj-h2 { font-weight: 700; font-size: clamp(25px, 3.1vw, 36px); line-height: 1.2; margin: 0 0 28px; color: #231d19; }
.nsj-h2 em, .nsj-h3 em, .nsj-h4 em { font-style: italic; color: #a9683f; }
.nsj-h3 { font-weight: 700; font-size: clamp(22px, 2.6vw, 30px); line-height: 1.25; margin: 0 0 16px; color: #231d19; }
.nsj-h4 { font-weight: 700; font-size: 19px; line-height: 1.3; margin: 22px 0 10px; color: #231d19; }
.nsj-sec img { display: block; width: 100%; height: auto; }

/* slika/video ob besedilu */
.nsj-row2 { display: grid; grid-template-columns: 1fr 1fr; gap: 56px; align-items: center; }
.nsj-row2--top { align-items: start; }
.nsj-row2--rev .nsj-media { order: 2; }
.nsj-media img { object-fit: cover; border-radius: 10px; box-shadow: 0 2px 4px rgba(40,25,15,.05), 0 14px 40px rgba(40,25,15,.10); }
.nsj-media--land img { aspect-ratio: 7 / 5; }
.nsj-media--port img { aspect-ratio: 4 / 5; max-width: 480px; margin: 0 auto; }
.nsj-copy p { font-size: 16px; line-height: 1.7; color: #4f443d; margin: 0 0 14px; }
.nsj-copy p strong { color: #231d19; font-weight: 600; }
.nsj-copy p.nsj-big { font-size: 19px; font-weight: 700; color: #231d19; line-height: 1.45; margin-top: 6px; }
.nsj-points { list-style: none; margin: 0 0 16px; padding: 0; }
.nsj-points li { font-size: 16px; line-height: 1.6; color: #4f443d; margin: 0 0 10px; display: flex; gap: 12px; align-items: flex-start; }
.nsj-points li strong { color: #231d19; font-weight: 600; }
.nsj-dot { flex: 0 0 22px; width: 22px; height: 22px; border-radius: 50%; background: #a9683f; color: #fff; font-size: 12px; font-weight: 800; line-height: 22px; text-align: center; margin-top: 2px; }

/* videi */
.nsj-vid { position: relative; overflow: hidden; background: #ece3da; border-radius: 10px; box-shadow: 0 2px 4px rgba(40,25,15,.05), 0 14px 40px rgba(40,25,15,.10); }
.nsj-vid video { display: block; width: 100%; height: 100%; object-fit: cover; }
.nsj-vid--tall { aspect-ratio: 9 / 16; }
.nsj-vid--sq { aspect-ratio: 1 / 1; }
.nsj-ugc { display: grid; grid-template-columns: repeat(6, minmax(0, 1fr)); gap: 12px; }
.nsj-ugc .nsj-vid { grid-column: span 2; box-shadow: none; }
.nsj-ugc .nsj-vid:nth-child(4) { grid-column: 2 / span 2; }
.nsj-media--vid .nsj-vid--sq { max-width: 560px; margin: 0 auto; }

/* mnenja */
.nsj-stars { color: #f2a516; letter-spacing: 1px; font-size: 15px; }
.nsj-stars__off { color: #e6dbd2; }
.nsj-reviews { display: grid; grid-template-columns: repeat(3, minmax(0, 1fr)); gap: 18px; align-items: start; }
.nsj-card { background: #fff; border: 1px solid #ecdfd3; border-radius: 10px; padding: 18px 18px 16px; }
.nsj-card__top { display: flex; gap: 12px; align-items: center; margin: 0 0 10px; }
.nsj-avatar { flex: 0 0 42px; width: 42px; height: 42px; border-radius: 50%; background: #f1e6dc; color: #a9683f; font-weight: 700; font-size: 17px; line-height: 42px; text-align: center; }
.nsj-card__name { font-size: 14.5px; font-weight: 600; color: #231d19; margin: 0; }
.nsj-ok { color: #2f9e5f; font-weight: 600; font-size: 12.5px; margin-left: 4px; }
.nsj-card__txt { font-size: 14.5px; line-height: 1.6; color: #3a302a; margin: 0; }

/* NORIKS pogoji */
.nsj-trust { display: flex; flex-wrap: wrap; gap: 10px 22px; margin: 18px 0 0 !important; font-size: 14px !important; font-weight: 600; color: #6b625a !important; }
.nsj-trust span { position: relative; padding-left: 20px; }
.nsj-trust span::before { content: "\2713"; position: absolute; left: 0; color: #a9683f; }

@media (max-width: 989px) {
  .nsj-reviews { grid-template-columns: repeat(2, minmax(0, 1fr)); }
  .nsj-row2 { gap: 32px; }
}
@media (max-width: 749px) {
  .nsj-sec { padding: 42px 0; }
  .nsj-wrap { padding: 0 16px; }
  .nsj-row2 { grid-template-columns: 1fr; gap: 24px; }
  .nsj-row2--rev .nsj-media { order: 0; }
  .nsj-reviews { grid-template-columns: 1fr; gap: 14px; }
  .nsj-ugc { gap: 8px; }
}

/* galerija izdelka: sličice največ v 2 vrstah (5 na vrsto), ostale slike so dosegljive z drsenjem glavne slike */
.product_cat-orto-smartjacket .flex-control-thumbs li:nth-child(n+11) { display: none !important; }

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
.woocommerce-product-details__short-description .nsj-tick {
  position: absolute !important; left: 0 !important; top: 1px !important;
  width: 21px; height: 21px; border-radius: 50%;
  background: #2f9e5f !important; color: #fff !important;
  font-size: 12px !important; font-weight: 800 !important; line-height: 21px !important;
  text-align: center !important; display: inline-block !important; }
.woocommerce-product-details__short-description p:first-of-type { font-size: 16px; line-height: 1.55; }
</style>
