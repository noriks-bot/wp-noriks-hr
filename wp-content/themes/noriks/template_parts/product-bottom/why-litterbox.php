<?php
/**
 * product-bottom: NORIKS LitterBox — automatska samočisteća posuda za mačji pijesak (orto-litterbox).
 * Original: petpivot.com/products/autoscooper-12-lite-cat-litter-box — vsebina in vrstni red 1:1 z originalom,
 * oblika po NORIKS stilu (predloga why-catfountain.php / why-hands.php), privzeta topla rjava paleta (#a9683f):
 *   1)  okno "Package List"                    -> Što je u paketu (slika ob besedilu)
 *   2)  okno "Product Dimensions"              -> Dimenzije (slika ob besedilu, mere tudi v "Tablica veličina")
 *   3)  vrstica videov kupcev v nakupni škatli -> Videi kupaca (4 videi, utišani, hrvaški podnapisi)
 *   4)  "The smarter AutoScooper"              -> Pametnija posuda (5 lastnosti)
 *   5)  video izdelka                          -> Kako radi (video ob besedilu, hrvaški podnapisi)
 *   6)–9)  zavihki "Blind-Spot Free System / Infrared Entrance Detection / Instant Safety Stop / Mechanical Safety Limit"
 *   10) "A better way to care for cats."       -> Bolji način brige o mačkama (7 prednosti)
 *   11)–14) zavihki "300D Durable Oxford Mat / Quick 2-Step Cleanup / Easy Water-Wash Design / 8L High-Capacity Bin"
 *   15) "Check the fit for your cat and home"  -> Uklapa se u svaki dom (6 prostorij)
 *   16) "Customer Reviews"                     -> Recenzije kupaca (6 mnenj, 1081 recenzij)
 *   17) okna "30-day returns / warranty / shipping / payment" -> zaključek z NORIKS pogoji
 * Izpusceno: glava, pasica s kodo za popust, izbira regije in paketa z vrečkami, dodatki in naročnine (pijesak,
 * vrečke, podloga), noga. Znamka konkurenta odstranjena iz besedil, slik in videov (značka na ohišju, potisk na
 * podlogi, naslovi v videih); številke in cene konkurenta (1153 mnenj, 4450, "under $150") izpuščene.
 * FAQ (15) je v reviews.php ($litterbox_faq), mnenja tudi v auto_reviews/HR_litterbox.php. Slike/videi: img/litterbox/ (nlb-…).
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$nlb      = get_template_directory_uri() . '/img/litterbox/';
$nlb_path = get_template_directory() . '/img/litterbox/';
$nlb_img  = function( $file, $alt ) use ( $nlb, $nlb_path ) {
  if ( ! $file || ! file_exists( $nlb_path . $file ) ) { return ''; }
  return '<img src="' . esc_url( $nlb . $file ) . '" alt="' . esc_attr( $alt ) . '" loading="lazy">';
};
$nlb_video = function( $name, $label ) use ( $nlb, $nlb_path ) {
  $file = $name . '-hr.mp4'; $poster = $name . '-poster.webp';
  if ( ! file_exists( $nlb_path . $file ) ) { return ''; }
  return '<div class="nlb-vid"><video src="' . esc_url( $nlb . $file ) . '" poster="' . esc_url( $nlb . $poster ) . '"'
    . ' muted autoplay loop playsinline preload="metadata" aria-label="' . esc_attr( $label ) . '"></video></div>';
};
$nlb_stars = function( $n ) {
  return '<span class="nlb-stars" aria-label="' . (int) $n . ' od 5 zvjezdica">' . str_repeat( '★', (int) $n ) . '<span class="nlb-stars__off">' . str_repeat( '★', 5 - (int) $n ) . '</span></span>';
};
$nlb_kses = array( 'strong' => array(), 'em' => array(), 'br' => array() );

/* 1)–2) okni iz nakupne škatle originala */
$nlb_box = array(
  '<strong>1x</strong> glavna jedinica',
  '<strong>1x</strong> spremnik za otpad',
  '<strong>4x</strong> noge',
  '<strong>1x</strong> adapter za napajanje',
  '<strong>1x</strong> rola vrećica za otpad (20 kom)',
  '<strong>1x</strong> prednja stepenica za ulaz',
  '<strong>1x</strong> upute za upotrebu',
  '<strong>1x</strong> vodič za brzi početak',
);
$nlb_dims = array(
  array( 'Visina', '55,5 cm' ),
  array( 'Širina', '53,5 cm' ),
  array( 'Dubina', '40 cm' ),
  array( 'Visina bočne strane', '31,5 cm' ),
  array( 'Dubina bočne strane', '38,5 cm' ),
  array( 'Visina ulaza', '31,5 cm' ),
);

/* 3) videi kupcev (utišani, hrvaški podnapisi) */
$nlb_videos = array(
  'nlb-v-bez-aplikacije' => 'Iskustvo kupca — bez aplikacije i bez Wi-Fija',
  'nlb-v-luna'           => 'Mačka Luna i automatska posuda sa stepenicom',
  'nlb-v-macja-mama'     => 'Iskustvo kupca — otvoren dizajn i sigurnost',
  'nlb-v-macka-i-macic'  => 'Iskustvo kupca — testirano s mačkom i mačićem',
);

/* 4) pametnija posuda — 5 lastnosti */
$nlb_smart = array(
  array( 'Automatski čist pijesak', 'Čisti se nakon svake upotrebe, pa pijesak ostaje svjež — bez svakodnevnog čišćenja.' ),
  array( 'Za više mačaka', 'Osmišljena za do 3 mačke. U kućanstvima s više mačaka ladicu provjeravajte češće.' ),
  array( 'Kontrola mirisa', 'Otpad zatvara u zatvorenu ladicu i pomaže da vaš prostor ostane čist i svjež.' ),
  array( 'Minimalno raznošenje pijeska', 'Pomaže smanjiti nered na samom izvoru, pa vaš dom ostaje uredniji.' ),
  array( 'Mačke se lako naviknu', 'Dajte mački vremena da se prilagodi i slijedite korake navikavanja iz uputa.' ),
);

/* 6)–9) sigurnost — zavihki 1 */
$nlb_safety = array(
  array( 'img' => 'nlb-s-senzori.webp', 'alt' => 'Šest parova infracrvenih senzora u NORIKS LitterBox posudi', 'k' => 'Sustav bez mrtvih kutova',
    'h' => 'Precizno prati <em>prisutnost mačke</em>',
    'p' => array( '<strong>Šest parova infracrvenih senzora</strong> zajedno prati položaj vaše mačke iz više kutova i pruža gotovo potpunu pokrivenost uz minimalno mrtvih kutova.' ) ),
  array( 'img' => 'nlb-s-tezina.webp', 'alt' => 'Mačka šapom dodiruje senzor — posuda se zaustavlja', 'k' => 'Infracrveno otkrivanje na ulazu',
    'h' => 'Poboljšani <em>senzor težine</em>',
    'p' => array( 'Čišćenje se <strong>odmah zaustavlja</strong> kad senzor otkrije težinu mačke na površini s pijeskom — bez slučajnog pokretanja.',
                  'Rad se zaustavlja i kad mačka stane izravno na <strong>prednju sigurnosnu papučicu</strong>.' ) ),
  array( 'img' => 'nlb-s-prisutnost.webp', 'alt' => 'Sigurnosni senzori NORIKS LitterBox posude', 'k' => 'Trenutačno sigurnosno zaustavljanje',
    'h' => 'Automatsko zaustavljanje <em>kad je mačka blizu</em>',
    'p' => array( 'Kad otkrije težinu ili blizinu vaše mačke, <strong>sav rad motora odmah prestaje</strong> — sigurnost je uvijek na prvom mjestu.',
                  'Tijekom rada više sigurnosnih mehanizama neprestano prati prisutnost mačke. Ako se aktivira bilo koji sigurnosni okidač, sustav odmah zaustavlja rad.' ) ),
  array( 'img' => 'nlb-s-zupcanik.webp', 'alt' => 'Mačka gleda u posudu — polužupčanik ograničava okretanje', 'k' => 'Mehaničko sigurnosno ograničenje',
    'h' => 'Pametni senzor zaustavljanja <em>uvijek je uključen</em>',
    'p' => array( 'Ugrađeni infracrveni senzori rade zajedno s fizičkim <strong>polužupčanikom</strong> i odmah zaustavljaju rad ako u području otpada otkriju predmet ili ljubimca.',
                  '<strong>Potpuno okretanje nije moguće:</strong> polužupčanik mehanički ograničava kretanje, a graničnik od 30° sprječava nesigurno zatvaranje.' ) ),
);

/* 10) bolji način brige o mačkama — 7 prednosti */
$nlb_care = array(
  array( 'Napredni sigurnosni sustav', 'Šest parova infracrvenih senzora nadzire ulaz, četiri Hallova senzora prate bubanj, a graničnik od 30° i zaštita od priklještenja zaustavljaju ciklus ako mačka priđe.' ),
  array( 'Automatski čist pijesak', 'Automatski uklanja otpad nakon svake upotrebe — pijesak ostaje svjež, a svakodnevnog čišćenja je manje.' ),
  array( 'Zatvoreni sustav za mirise', 'Nakon svakog ciklusa otpad zatvara u donju ladicu, pa mirisi ostaju zatvoreni, a dom svjež.' ),
  array( 'Spremna za više mačaka', 'Stvorena za domove s više mačaka — dosljedan rad i jednostavno, predvidljivo održavanje.' ),
  array( 'Jednostavna kontrola', 'Samo je uključite i to je to — ništa za postavljanje, ništa za upravljanje.' ),
  array( 'Prirodna otvorena udobnost', 'Otvoren, prostran ulaz. Prije upotrebe provjerite dob i težinu mačke te odgovara li joj posuda.' ),
  array( 'Tih i uglađen rad', 'Radi tiho u pozadini — vaš dom ostaje miran, bez prekida i buke.' ),
);

/* 11)–14) čiščenje — zavihki 2 */
$nlb_clean = array(
  array( 'img' => 'nlb-s-podloga.webp', 'cls' => 'land', 'alt' => 'Višekratna podloga od tkanine Oxford 300D', 'k' => 'Izdržljiva podloga Oxford 300D',
    'h' => 'Višekratna podloga za otpad <em>dugog vijeka</em>',
    'p' => array( 'Izrađena je od izdržljive <strong>tkanine Oxford 300D</strong> s vodoodbojnim premazom i podignutim rubovima — zadržava rasuti pijesak i svakodnevne mrlje, pa je čišćenje s vremenom sve lakše.' ),
    'list' => array( 'Ne propušta tekućinu', 'Vodootporna', 'Protiv lijepljenja', 'Pere se četkom' ) ),
  array( 'img' => 'nlb-s-rastavljanje.webp', 'alt' => 'Rastavljanje posude u dva koraka', 'k' => 'Brzo čišćenje u 2 koraka',
    'h' => 'Jednostavno rastavljanje <em>u 2 koraka</em>',
    'p' => array( 'Ključne dijelove možete skinuti u <strong>samo dva jednostavna koraka</strong>, pa je redovito održavanje brzo i jednostavno.' ),
    'list' => array() ),
  array( 'img' => 'nlb-s-pranje.webp', 'alt' => 'Komora za pijesak i ladica za otpad ispiru se vodom', 'k' => 'Jednostavno pranje vodom',
    'h' => 'Dizajn za <em>lako ispiranje</em>',
    'p' => array( 'I <strong>komora za pijesak</strong> i <strong>ladica za otpad</strong> mogu se isprati izravno vodom — za jednostavno i higijensko održavanje.',
                  'Osnovu s elektronikom, adapter i priključke nikad ne ispirite vodom.' ),
    'list' => array() ),
  array( 'img' => 'nlb-s-ladica.webp', 'cls' => 'land', 'alt' => 'Ladica za otpad velikog kapaciteta 8,5 L', 'k' => 'Spremnik velikog kapaciteta',
    'h' => 'Rjeđe pražnjenje, <em>više slobodnog vremena</em>',
    'p' => array( 'Ladica za otpad od <strong>8,5 L</strong> drži otpad nekoliko dana, pa između pražnjenja može proći i do <strong>7–10 dana</strong>, ovisno o tome koliko je mačka koristi.' ),
    'list' => array() ),
);

/* 15) prostori */
$nlb_rooms = array(
  'nlb-s-suncana-soba.webp'   => 'Sunčana soba',
  'nlb-s-radna-soba.webp'     => 'Radna soba',
  'nlb-s-praonica.webp'       => 'Praonica',
  'nlb-s-dnevni-boravak.webp' => 'Dnevni boravak',
  'nlb-s-kupaonica.webp'      => 'Kupaonica',
  'nlb-s-spavaca-soba.webp'   => 'Spavaća soba',
);

/* 16) Recenzije kupaca — 6 mnenj z originala, števila po NORIKS (1081) */
$nlb_reviews = array(
  array( 'ime' => 'Boris S.', 'z' => 5, 'h' => 'Sastavljanje je bilo brzo i jednostavno', 'tekst' => 'Sve postavke rade kako treba. Naša Molly je posudu pregledala i iskoristila unutar dvije minute. Prvih par dana koristili smo ručni način dok se nije navikla. Oboje smo jako zadovoljni.' ),
  array( 'ime' => 'Tea M.', 'z' => 5, 'h' => 'Obožavamo ovu posudu!', 'tekst' => 'Našem mačku dijagnosticiran je dijabetes i puno piški. U staroj posudi radio je ogroman nered. Ova je super praktična jer se čisti sama dok smo mi na poslu.' ),
  array( 'ime' => 'Anita R.', 'z' => 5, 'h' => 'Mačka ju je odmah zavoljela', 'tekst' => 'Jako sam zadovoljna. Postavljanje je bilo jednostavno, a mačka ju je počela koristiti odmah, bez imalo oklijevanja. Održavanje pijeska puno je lakše i više ne moram ručno čistiti. Čak i kutija služi kao igračka!' ),
  array( 'ime' => 'Kristijan P.', 'z' => 5, 'h' => 'Promijenila mi je svakodnevicu', 'tekst' => 'Vrlo jednostavna za korištenje i štedi mi puno vremena. Moj mačak voli kopati i prije je raznosio pijesak po cijeloj kući. Sada to više ne radi, a ima dovoljno prostora za sve svoje potrebe.' ),
  array( 'ime' => 'Martina V.', 'z' => 5, 'h' => 'Odlična i za velike mačke', 'tekst' => 'Čitala sam da je mala pa sam oklijevala jer su moji mačci veliki, 9 i 7 kg. Koriste je bez problema. Mislila sam da će ih okretanje preplašiti, ali sada sjede i gledaju kako radi. Mirisa više nema, a otpad ostaje u donjoj ladici.' ),
  array( 'ime' => 'Kristina J.', 'z' => 5, 'h' => 'Štedi vrijeme i smanjuje mirise', 'tekst' => 'Imam pet mačića pa zasad koristimo ručni način, ali posuda nam štedi puno vremena i smanjuje neugodne mirise. Uskoro uzimam i drugu!' ),
);

$nlb_n = 0; // števec sekcij za izmenična ozadja
$nlb_cls = function() use ( &$nlb_n ) { $nlb_n++; return ( $nlb_n % 2 ) ? ' nlb-tint' : ''; };
$nlb_side = 0; // izmenične strani slika/besedilo
$nlb_rev = function() use ( &$nlb_side ) { $nlb_side++; return ( $nlb_side % 2 ) ? '' : ' nlb-row2--rev'; };
?>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap">

<!-- 1) ŠTO JE U PAKETU -->
<section class="nlb-sec<?php echo $nlb_cls(); ?>">
  <div class="nlb-wrap">
    <div class="nlb-row2<?php echo $nlb_rev(); ?>">
      <div class="nlb-media nlb-media--sq nlb-media--white"><?php echo $nlb_img( 'nlb-g11-bijela.webp', 'NORIKS LitterBox automatska posuda za mačji pijesak sa stepenicom' ); ?></div>
      <div class="nlb-copy">
        <p class="nlb-kicker">Što je u paketu?</p>
        <h2 class="nlb-h3">Sve što trebate <em>za čist pijesak bez lopatice</em></h2>
        <ul class="nlb-points">
          <?php foreach ( $nlb_box as $li ) : ?><li><span class="nlb-dot" aria-hidden="true">✓</span><span><?php echo wp_kses( $li, $nlb_kses ); ?></span></li><?php endforeach; ?>
        </ul>
        <p class="nlb-big">Raspakirajte, postavite, uključite — i to je to.</p>
      </div>
    </div>
  </div>
</section>

<!-- 2) DIMENZIJE -->
<section class="nlb-sec<?php echo $nlb_cls(); ?>">
  <div class="nlb-wrap">
    <div class="nlb-row2<?php echo $nlb_rev(); ?>">
      <div class="nlb-media nlb-media--port"><?php echo $nlb_img( 'nlb-g10-dimenzije.webp', 'Dimenzije NORIKS LitterBox posude: 53,5 × 40 × 55,5 cm' ); ?></div>
      <div class="nlb-copy">
        <p class="nlb-kicker">Dimenzije proizvoda</p>
        <h2 class="nlb-h3">Prostrana unutrašnjost, <em>udoban ulazak</em></h2>
        <table class="nlb-dims">
          <tbody>
            <?php foreach ( $nlb_dims as $r ) : ?><tr><td><?php echo esc_html( $r[0] ); ?></td><td><?php echo esc_html( $r[1] ); ?></td></tr><?php endforeach; ?>
          </tbody>
        </table>
        <p>Automatski način namijenjen je mačkama <strong>težim od 1,4 kg i starijim od 6 mjeseci</strong>; za mlađe i manje mačke koristite ručni način.</p>
      </div>
    </div>
  </div>
</section>

<!-- 3) VIDEI KUPACA — 4 videa ob besedilu -->
<section class="nlb-sec<?php echo $nlb_cls(); ?>">
  <div class="nlb-wrap">
    <div class="nlb-row2 nlb-row2--vids<?php echo $nlb_rev(); ?>">
      <div class="nlb-media">
        <div class="nlb-ugc">
          <?php foreach ( $nlb_videos as $vn => $vl ) { echo $nlb_video( $vn, $vl ); } ?>
        </div>
      </div>
      <div class="nlb-copy">
        <p class="nlb-kicker">Videi kupaca</p>
        <h2 class="nlb-h3">Pogledajte kako radi <em>u pravim domovima</em></h2>
        <p>Vlasnici mačaka pokazuju kako im je automatska posuda olakšala svakodnevicu — od raspakiranja do prvog čišćenja.</p>
        <ul class="nlb-points">
          <li><span class="nlb-dot" aria-hidden="true">✓</span><span><strong>Bez aplikacije, bez Wi-Fija</strong> i bez pretplate — radi odmah nakon raspakiranja</span></li>
          <li><span class="nlb-dot" aria-hidden="true">✓</span><span><strong>Sama se čisti</strong> nakon svake upotrebe</span></li>
          <li><span class="nlb-dot" aria-hidden="true">✓</span><span><strong>Odmah se zaustavlja</strong> ako mačka priđe tijekom ciklusa</span></li>
          <li><span class="nlb-dot" aria-hidden="true">✓</span><span><strong>Ugrađena stepenica</strong> za lakši ulazak i izlazak</span></li>
        </ul>
        <p class="nlb-big">Čist pijesak — bez svakodnevne lopatice.</p>
      </div>
    </div>
  </div>
</section>

<!-- 4) PAMETNIJA POSUDA — 5 lastnosti -->
<section class="nlb-sec<?php echo $nlb_cls(); ?>">
  <div class="nlb-wrap">
    <div class="nlb-row2<?php echo $nlb_rev(); ?>">
      <div class="nlb-media nlb-media--sq nlb-media--white"><?php echo $nlb_img( 'nlb-g12-svijetlo-siva.webp', 'Mačka izlazi iz NORIKS LitterBox posude preko stepenice' ); ?></div>
      <div class="nlb-copy">
        <p class="nlb-kicker">NORIKS LitterBox</p>
        <h2 class="nlb-h3">Pametnija posuda <em>za mačji pijesak</em></h2>
        <div class="nlb-feats nlb-feats--1">
          <?php foreach ( $nlb_smart as $f ) : ?>
          <div class="nlb-feat"><p class="nlb-feat__h"><span class="nlb-dot" aria-hidden="true">✓</span><?php echo esc_html( $f[0] ); ?></p><p class="nlb-feat__t"><?php echo esc_html( $f[1] ); ?></p></div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- 5) KAKO RADI — video izdelka -->
<section class="nlb-sec<?php echo $nlb_cls(); ?>">
  <div class="nlb-wrap">
    <div class="nlb-row2<?php echo $nlb_rev(); ?>">
      <div class="nlb-media"><div class="nlb-wide"><?php echo $nlb_video( 'nlb-v-ciklus', 'Kako NORIKS LitterBox čisti pijesak' ); ?></div></div>
      <div class="nlb-copy">
        <p class="nlb-kicker">Kako radi</p>
        <h2 class="nlb-h3">Ciklus čišćenja <em>bez vašeg truda</em></h2>
        <p>Kad mačka izađe, posuda pričeka da se pijesak zgruda i zatim <strong>automatski pokreće ciklus čišćenja</strong>.</p>
        <p>Zgrudani pijesak gravitacijom se odvaja od čistog, a otpad pada u <strong>zatvorenu ladicu</strong> ispod. Tijekom cijelog ciklusa ulaz, unutarnja komora i ladica za otpad neprestano prate prisutnost mačke — ako se mačka približi, <strong>sustav odmah zaustavlja rad</strong>.</p>
        <p class="nlb-big">Samo je uključite — i zaboravite na lopaticu.</p>
      </div>
    </div>
  </div>
</section>

<?php foreach ( $nlb_safety as $i => $w ) : ?>
<!-- <?php echo (int) ( $i + 6 ); ?>) <?php echo esc_html( $w['k'] ); ?> -->
<section class="nlb-sec<?php echo $nlb_cls(); ?>">
  <div class="nlb-wrap">
    <?php if ( 0 === $i ) : ?>
    <div class="nlb-intro">
      <p class="nlb-kicker nlb-c">Sigurnost</p>
      <h2 class="nlb-h2 nlb-c">Sigurnosni sustav <em>bez mrtvih kutova</em></h2>
    </div>
    <?php endif; ?>
    <div class="nlb-row2<?php echo $nlb_rev(); ?>">
      <div class="nlb-media nlb-media--sq"><?php echo $nlb_img( $w['img'], $w['alt'] ); ?></div>
      <div class="nlb-copy">
        <p class="nlb-kicker"><?php echo esc_html( $w['k'] ); ?></p>
        <h2 class="nlb-h3"><?php echo wp_kses( $w['h'], $nlb_kses ); ?></h2>
        <?php foreach ( $w['p'] as $p ) : ?><p><?php echo wp_kses( $p, $nlb_kses ); ?></p><?php endforeach; ?>
      </div>
    </div>
  </div>
</section>
<?php endforeach; ?>

<!-- 10) BOLJI NAČIN BRIGE O MAČKAMA — 7 prednosti -->
<section class="nlb-sec<?php echo $nlb_cls(); ?>">
  <div class="nlb-wrap">
    <div class="nlb-row2<?php echo $nlb_rev(); ?>">
      <div class="nlb-media nlb-media--port"><?php echo $nlb_img( 'nlb-s-briga.webp', 'Žena čita na kauču, mačka sjedi pored NORIKS LitterBox posude' ); ?></div>
      <div class="nlb-copy">
        <p class="nlb-kicker">Zašto baš ova posuda</p>
        <h2 class="nlb-h3">Bolji način <em>brige o mačkama</em></h2>
        <div class="nlb-feats">
          <?php foreach ( $nlb_care as $f ) : ?>
          <div class="nlb-feat"><p class="nlb-feat__h"><span class="nlb-dot" aria-hidden="true">✓</span><?php echo esc_html( $f[0] ); ?></p><p class="nlb-feat__t"><?php echo esc_html( $f[1] ); ?></p></div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</section>

<?php foreach ( $nlb_clean as $i => $w ) : ?>
<!-- <?php echo (int) ( $i + 11 ); ?>) <?php echo esc_html( $w['k'] ); ?> -->
<section class="nlb-sec<?php echo $nlb_cls(); ?>">
  <div class="nlb-wrap">
    <?php if ( 0 === $i ) : ?>
    <div class="nlb-intro">
      <p class="nlb-kicker nlb-c">Održavanje</p>
      <h2 class="nlb-h2 nlb-c">Čišćenje i održavanje <em>bez muke</em></h2>
    </div>
    <?php endif; ?>
    <div class="nlb-row2<?php echo $nlb_rev(); ?>">
      <div class="nlb-media nlb-media--<?php echo esc_attr( isset( $w['cls'] ) ? $w['cls'] : 'sq' ); ?>"><?php echo $nlb_img( $w['img'], $w['alt'] ); ?></div>
      <div class="nlb-copy">
        <p class="nlb-kicker"><?php echo esc_html( $w['k'] ); ?></p>
        <h2 class="nlb-h3"><?php echo wp_kses( $w['h'], $nlb_kses ); ?></h2>
        <?php foreach ( $w['p'] as $p ) : ?><p><?php echo wp_kses( $p, $nlb_kses ); ?></p><?php endforeach; ?>
        <?php if ( ! empty( $w['list'] ) ) : ?>
        <ul class="nlb-points nlb-points--2">
          <?php foreach ( $w['list'] as $li ) : ?><li><span class="nlb-dot" aria-hidden="true">✓</span><span><?php echo wp_kses( $li, $nlb_kses ); ?></span></li><?php endforeach; ?>
        </ul>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>
<?php endforeach; ?>

<!-- 15) UKLAPA SE U SVAKI DOM — 6 prostorij -->
<section class="nlb-sec<?php echo $nlb_cls(); ?>">
  <div class="nlb-wrap">
    <div class="nlb-row2<?php echo $nlb_rev(); ?>">
      <div class="nlb-media">
        <div class="nlb-rooms">
          <?php foreach ( $nlb_rooms as $f => $l ) : ?>
          <figure><?php echo $nlb_img( $f, 'NORIKS LitterBox — ' . $l ); ?><figcaption><?php echo esc_html( $l ); ?></figcaption></figure>
          <?php endforeach; ?>
        </div>
      </div>
      <div class="nlb-copy">
        <p class="nlb-kicker">Za vaš dom</p>
        <h2 class="nlb-h3">Provjerite odgovara li <em>vašoj mački i vašem domu</em></h2>
        <p>Sunčana soba, radna soba, praonica, dnevni boravak, kupaonica ili spavaća soba — kompaktna posuda (<strong>53,5 × 40 cm, visina 55,5 cm</strong>) lako se uklapa u svaki prostor.</p>
        <p>Postavite je na <strong>ravnu, čvrstu podlogu</strong> u zatvorenom prostoru, dalje od izravnog sunca i vlage, s dovoljno mjesta za ulaz i vađenje ladice. Posuda blizu stare posude za pijesak olakšava mački prijelaz.</p>
        <p class="nlb-big">Izgleda uredno u svakoj sobi.</p>
      </div>
    </div>
  </div>
</section>

<!-- 16) RECENZIJE KUPACA -->
<section class="nlb-sec<?php echo $nlb_cls(); ?>">
  <div class="nlb-wrap">
    <p class="nlb-kicker nlb-c">Recenzije kupaca</p>
    <h2 class="nlb-h2 nlb-c">Vole je <em>vlasnici mačaka</em></h2>
    <p class="nlb-c nlb-lead">Pročitajte nekoliko recenzija i pogledajte što vlasnici mačaka kažu o NORIKS LitterBox posudi.</p>
    <div class="nlb-score">
      <span class="nlb-score__num">4,9</span>
      <?php echo $nlb_stars( 5 ); ?>
      <span class="nlb-score__txt">Na temelju 1081 recenzije</span>
    </div>
    <div class="nlb-reviews">
      <?php foreach ( $nlb_reviews as $r ) : ?>
      <article class="nlb-card">
        <?php echo $nlb_stars( $r['z'] ); ?>
        <p class="nlb-card__h"><?php echo esc_html( $r['h'] ); ?></p>
        <p class="nlb-card__txt"><?php echo esc_html( $r['tekst'] ); ?></p>
        <p class="nlb-card__name"><?php echo esc_html( $r['ime'] ); ?> <span class="nlb-ok">✓ Potvrđena kupnja</span></p>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- 17) ZAKLJUČAK — NORIKS pogoji (namesto vračila, garancije, dostave in plačila konkurenta) -->
<section class="nlb-sec<?php echo $nlb_cls(); ?>">
  <div class="nlb-wrap">
    <div class="nlb-row2<?php echo $nlb_rev(); ?>">
      <div class="nlb-media nlb-media--sq"><?php echo $nlb_img( 'nlb-s-sve-velicine.webp', 'Dvije mačke u NORIKS LitterBox posudi — prikladna za mačke svih veličina' ); ?></div>
      <div class="nlb-copy">
        <p class="nlb-kicker">Bez rizika</p>
        <h2 class="nlb-h3">Dođite kući u čist dom — <em>bez razmišljanja o tome.</em></h2>
        <p>Zamislite da uđete u svoj dom i ne osjetite nikakav miris. Bez podsjetnika da pijesak treba očistiti i bez grižnje savjesti zbog čišćenja za kasnije. NORIKS LitterBox to radi umjesto vas — tiho, dosljedno i sigurno.</p>
        <p>Narudžbu šaljemo brzo, a platiti možete i <strong>pouzećem</strong>. Za narudžbe iznad 70 € dostava je besplatna. Ako posuda ne odgovara vašoj mački, imate <strong>pravo na povrat u roku od 30 dana</strong>.</p>
        <p class="nlb-trust"><span>Pravo na povrat u roku od 30 dana</span><span>Besplatna dostava za narudžbe iznad 70 €</span><span>Plaćanje pouzećem</span></p>
      </div>
    </div>
  </div>
</section>

<style>
/* NORIKS stil (predloga why-catfountain.php / why-hands.php): oznaka + naslov z ležečim poudarkom, slika/video ob
   besedilu, izmenjujoča ozadja in strani. Privzeta topla rjava paleta NORIKS (#a9683f). */
.nlb-sec { padding: 60px 0; font-family: 'Poppins', system-ui, -apple-system, 'Segoe UI', Roboto, Arial, sans-serif; color: #231d19; background: #fff; }
.nlb-sec * { box-sizing: border-box; }
.nlb-tint { background: #f7f2ec; }
.nlb-wrap { width: 100%; max-width: 1200px; margin: 0 auto; padding: 0 24px; }
.nlb-c { text-align: center; }
.nlb-sec h2, .nlb-sec h3 { font-family: inherit; text-transform: none; letter-spacing: 0; }
.nlb-kicker, .nlb-copy p.nlb-kicker { font-size: 12.5px; line-height: 1.4; font-weight: 700; letter-spacing: .14em; text-transform: uppercase; color: #a9683f; margin: 0 0 10px; }
.nlb-h2 { font-weight: 700; font-size: clamp(25px, 3.1vw, 36px); line-height: 1.2; margin: 0 0 14px; color: #231d19; }
.nlb-h2 em, .nlb-h3 em { font-style: italic; color: #a9683f; }
.nlb-h3 { font-weight: 700; font-size: clamp(22px, 2.6vw, 30px); line-height: 1.25; margin: 0 0 16px; color: #231d19; }
.nlb-lead { font-size: 16.5px; line-height: 1.6; color: #4f443d; max-width: 720px; margin: 0 auto 32px; }
.nlb-intro { margin: 0 0 36px; }
.nlb-sec img { display: block; width: 100%; height: auto; }

/* slika/video ob besedilu */
.nlb-row2 { display: grid; grid-template-columns: 1fr 1fr; gap: 56px; align-items: center; }
.nlb-row2--rev .nlb-media { order: 2; }
.nlb-media img { object-fit: cover; border-radius: 10px; box-shadow: 0 2px 4px rgba(40,25,15,.05), 0 14px 40px rgba(40,25,15,.10); }
.nlb-media--sq img { aspect-ratio: 1 / 1; max-width: 540px; margin: 0 auto; }
.nlb-media--port img { aspect-ratio: 3 / 4; max-width: 480px; margin: 0 auto; }
.nlb-media--land img { aspect-ratio: 4 / 3; max-width: 560px; margin: 0 auto; }
.nlb-media--white img { object-fit: contain; background: #fff; }
.nlb-copy p { font-size: 16px; line-height: 1.7; color: #4f443d; margin: 0 0 14px; }
.nlb-copy p strong { color: #231d19; font-weight: 600; }
.nlb-copy p.nlb-big { font-size: 19px; font-weight: 700; color: #231d19; line-height: 1.45; margin-top: 6px; }
.nlb-points { list-style: none; margin: 0 0 16px; padding: 0; }
.nlb-points li { font-size: 16px; line-height: 1.6; color: #4f443d; margin: 0 0 10px; display: flex; gap: 12px; align-items: flex-start; }
.nlb-points li strong { color: #231d19; font-weight: 600; }
.nlb-points--2 { display: grid; grid-template-columns: 1fr 1fr; gap: 0 18px; }
.nlb-dot { flex: 0 0 22px; width: 22px; height: 22px; border-radius: 50%; background: #a9683f; color: #fff; font-size: 12px; font-weight: 800; line-height: 22px; text-align: center; margin-top: 2px; }

/* mere */
.nlb-dims { width: 100%; border-collapse: collapse; margin: 4px 0 18px; font-size: 15px; background: #fff; border-radius: 10px; overflow: hidden; }
.nlb-dims td { padding: 10px 14px; border-bottom: 1px solid #f0e6dd; color: #3a302a; }
.nlb-dims td:first-child { font-weight: 600; color: #231d19; }
.nlb-dims td:last-child { text-align: right; color: #a9683f; font-weight: 700; }
.nlb-dims tr:last-child td { border-bottom: 0; }

/* videi */
.nlb-vid { position: relative; overflow: hidden; background: #ece3da; border-radius: 10px; aspect-ratio: 9 / 16; }
.nlb-vid video { display: block; width: 100%; height: 100%; object-fit: cover; }
.nlb-ugc { display: grid; grid-template-columns: repeat(2, minmax(0, 1fr)); gap: 12px; max-width: 460px; margin: 0 auto; }
.nlb-wide .nlb-vid { aspect-ratio: 16 / 9; box-shadow: 0 2px 4px rgba(40,25,15,.05), 0 14px 40px rgba(40,25,15,.10); }

/* prednosti */
.nlb-feats { display: grid; grid-template-columns: 1fr 1fr; gap: 14px 22px; margin-top: 6px; }
.nlb-feats--1 { grid-template-columns: 1fr; }
.nlb-copy p.nlb-feat__h { display: flex; gap: 10px; align-items: flex-start; font-weight: 700; color: #231d19; font-size: 15.5px; line-height: 1.4; margin: 0 0 4px; }
.nlb-copy p.nlb-feat__t { font-size: 14.5px; line-height: 1.55; margin: 0 0 0 32px; }

/* prostori */
.nlb-rooms { display: grid; grid-template-columns: repeat(3, minmax(0, 1fr)); gap: 10px; }
.nlb-rooms figure { margin: 0; }
.nlb-rooms img { aspect-ratio: 1 / 1; object-fit: cover; border-radius: 8px; box-shadow: 0 2px 8px rgba(40,25,15,.10); }
.nlb-rooms figcaption { text-align: center; font-size: 13px; font-weight: 600; color: #4f443d; padding: 6px 2px 0; }

/* mnenja */
.nlb-stars { color: #f2a516; letter-spacing: 1px; font-size: 15px; }
.nlb-stars__off { color: #e6dbd2; }
.nlb-score { display: flex; justify-content: center; align-items: center; gap: 12px; margin: 0 0 28px; flex-wrap: wrap; }
.nlb-score__num { font-size: 30px; font-weight: 700; color: #231d19; }
.nlb-score .nlb-stars { font-size: 20px; }
.nlb-score__txt { font-size: 14.5px; color: #6b625a; }
.nlb-reviews { display: grid; grid-template-columns: repeat(3, minmax(0, 1fr)); gap: 18px; align-items: start; }
.nlb-card { background: #fff; border: 1px solid #ecdfd3; border-radius: 10px; padding: 18px 18px 16px; }
.nlb-card__h { font-size: 15.5px; font-weight: 700; color: #231d19; margin: 8px 0 6px; }
.nlb-card__txt { font-size: 14.5px; line-height: 1.6; color: #3a302a; margin: 0 0 10px; }
.nlb-card__name { font-size: 14px; font-weight: 600; color: #231d19; margin: 0; }
.nlb-ok { color: #2f9e5f; font-weight: 600; font-size: 12.5px; margin-left: 4px; }

/* NORIKS pogoji */
.nlb-trust { display: flex; flex-wrap: wrap; gap: 10px 22px; margin: 18px 0 0 !important; font-size: 14px !important; font-weight: 600; color: #6b625a !important; }
.nlb-trust span { position: relative; padding-left: 20px; }
.nlb-trust span::before { content: "\2713"; position: absolute; left: 0; color: #a9683f; }

@media (max-width: 989px) {
  .nlb-reviews { grid-template-columns: repeat(2, minmax(0, 1fr)); }
  .nlb-row2 { gap: 32px; }
  .nlb-feats { grid-template-columns: 1fr; }
}
@media (max-width: 749px) {
  .nlb-sec { padding: 42px 0; }
  .nlb-wrap { padding: 0 16px; }
  .nlb-row2 { grid-template-columns: 1fr; gap: 24px; }
  .nlb-row2--rev .nlb-media { order: 0; }
  .nlb-reviews { grid-template-columns: 1fr; gap: 14px; }
  .nlb-ugc { gap: 8px; }
  .nlb-points--2 { grid-template-columns: 1fr; }
}

/* galerija izdelka: sličice največ v 2 vrstah (5 na vrsto), ostale slike so dosegljive z drsenjem glavne slike */
.product_cat-orto-litterbox .flex-control-thumbs li:nth-child(n+11) { display: none !important; }

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
.woocommerce-product-details__short-description .nlb-tick {
  position: absolute !important; left: 0 !important; top: 1px !important;
  width: 21px; height: 21px; border-radius: 50%;
  background: #2f9e5f !important; color: #fff !important;
  font-size: 12px !important; font-weight: 800 !important; line-height: 21px !important;
  text-align: center !important; display: inline-block !important; }
.woocommerce-product-details__short-description p:first-of-type { font-size: 16px; line-height: 1.55; }
</style>
