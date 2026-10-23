<?php
/**
 * product-bottom: NORIKS HikingShoes — barefoot pohodne cipele od brušene kože (orto-hikingshoes).
 * Original: lonowear.com/products/wild (WILD Outdoor Trail Hiking Shoes) — vsebina in vrstni red 1:1 z originalom,
 * oblika po NORIKS stilu (predloga why-widetoeshoes.php / why-hands.php), gozdno zelena paleta (#3f6b45):
 *   1) hero "into the wild" (plasti gore/plezalec/ljudje)  -> U divljinu (plasti sestavljene v eno sliko, ob opisu originala)
 *   2) zavihek "Specs" v nakupni škatli                     -> Specifikacije (tabela ob sliki)
 *   3) "unfold your Adventure" (zvit čevelj)               -> Rasklopite svoju avanturu
 *   4) Zero Drop / Wide Toe / Flexible (3 kartice)          -> Zero drop · Širok prednji dio · Fleksibilnost
 *   5) "WILD LOOK" (video + drsnik 15 fotografij)           -> Divlji stil (video brez napisov/HUD, utišan) + Kombinacije (mreža 2x2 fotografij ob besedilu)
 *   6) "THE PROFESSIONAL WILD LIFE" (video + IG reels)      -> Profesionalni divlji život (video utišan; Instagram vdelave izpuščene)
 *   7) "heard it before? Wild Facts" (4 miti)               -> Čuli ste to već? (4 miti; odstotki in navedbe študij izpuščeni)
 *   8) SHIELD   (plakat lastnosti)                          -> Zaštita
 *   9) BALANCE                                              -> Ravnoteža
 *  10) DURABILITY                                           -> Izdržljivost
 *  11) BLEND IN WITH NATURE + SOLE BASE/LUG/STACK           -> Stopite se s prirodom (4 / 4 / 8 mm)
 *  12) Sustainability                                       -> Održivost (»100 % biorazgradivo« in imena materialov ublaženi)
 *  13) Reviews (Judge.me 4,5 / 348; 76/11/7/3/3 %)          -> Recenzije kupaca: 1081, zvezdice skalirane na 692, 8 mnenj s fotografijami
 * Izpusceno: glava, pasica, "Explore LONO's lineup" (drugi izdelki), pojavno okno "Did you know?", trgovine, noga.
 * FAQ (reviews.php, $hikingshoes_faq) iz FAQ originala (schema FAQPage) po NORIKS pogojih; mnenja v auto_reviews/HR_hikingshoes.php.
 * Napisi/oznake znamke konkurenta (oznaka na jeziku, napis na vložku) retuširani. Slike: img/hikingshoes/ (nhk-…).
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$nhk      = get_template_directory_uri() . '/img/hikingshoes/';
$nhk_path = get_template_directory() . '/img/hikingshoes/';
$nhk_img  = function( $file, $alt ) use ( $nhk, $nhk_path ) {
  if ( ! $file || ! file_exists( $nhk_path . $file ) ) { return ''; }
  return '<img src="' . esc_url( $nhk . $file ) . '" alt="' . esc_attr( $alt ) . '" loading="lazy">';
};
$nhk_vid  = function( $file, $poster ) use ( $nhk, $nhk_path ) {
  if ( ! $file || ! file_exists( $nhk_path . $file ) ) { return ''; }
  $p = ( $poster && file_exists( $nhk_path . $poster ) ) ? ' poster="' . esc_url( $nhk . $poster ) . '"' : '';
  return '<video src="' . esc_url( $nhk . $file ) . '"' . $p . ' muted autoplay loop playsinline preload="metadata"></video>';
};
$nhk_stars = function( $n ) {
  return '<span class="nhk-stars" aria-label="' . (int) $n . ' od 5 zvjezdica">' . str_repeat( '★', (int) $n ) . '<span class="nhk-stars__off">' . str_repeat( '★', 5 - (int) $n ) . '</span></span>';
};

/* 2) zavihek Specs */
$nhk_specs = array(
  array( 'Namjena', 'planinarenje, trekking, trail trčanje, ture s ruksakom, istraživanje prirode' ),
  array( 'Značajke', 'barefoot oblik, tanak i fleksibilan potplat, vodoodbojnost, neklizajući potplat i na mokrom, stabilizator pete, potpuno zatvoreni jezik, vezanje cijelom duljinom' ),
  array( 'Težina', 'muške oko 750 g, ženske oko 600 g (par)' ),
  array( 'Oblik', 'barefoot oblik, širok prednji dio, pripijeno pristajanje, za stopala srednjeg volumena' ),
  array( 'Svod stopala', 'normalan i visok svod' ),
  array( 'Materijali', 'gornji dio od brušene kože, gumeni potplat, uložak od prirodnog pluta' ),
  array( 'Sezona', 'cijela godina' ),
  array( 'Teren', 'planine, šume, močvarno tlo, kanjoni, doline, pustinje, visoravni' ),
);

/* 4) Zero Drop / Wide Toe / Flexible */
$nhk_feats = array(
  array( 'nhk-s04-zero-drop.webp', 'Zero drop', 'Peta i prsti na istoj visini za prirodan i stabilan korak.' ),
  array( 'nhk-s04-sirok-prednji-dio.webp', 'Širok prednji dio', 'Prsti se mogu prirodno raširiti — bez stiskanja.' ),
  array( 'nhk-s04-fleksibilno.webp', 'Fleksibilnost', 'Potplat se savija zajedno sa stopalom na svakom koraku.' ),
);

/* 5b) Wild Look — fotografije (mreža 2x2 ob besedilu namesto drsnika) */
$nhk_look = array( 'nhk-lb-02.webp', 'nhk-lb-04.webp', 'nhk-lb-06.webp', 'nhk-lb-08.webp' );

/* 7) Wild Facts — miti (brez odstotkov in navedb študij konkurenta) */
$nhk_myths = array(
  array( 'nhk-mit-1.webp', 'Barefoot cipele uništavaju koljena.', 'Barefoot obuća potiče kraći i lakši korak, bez naglog doskoka na petu. Ključan je postupan prijelaz — dajte stopalima vremena da se naviknu.' ),
  array( 'nhk-mit-2.webp', 'Ravne cipele čine stopala slabima.', 'Bez debelih jastuka i potpornih umetaka stopalo pri svakom koraku radi prirodno — kao kad hodate bosi.' ),
  array( 'nhk-mit-3.webp', 'Manje amortizacije znači brži umor.', 'Lagane cipele s tankim potplatom ne opterećuju nogu suvišnom težinom, pa korak ostaje lagan i okretan i na duljim turama.' ),
  array( 'nhk-mit-4.webp', 'Stopala u barefoot cipelama gube osjet.', 'Upravo suprotno — tanak potplat prenosi osjećaj podloge, pa osjećate svaki korak staze.' ),
);

/* 13) recenzije (Judge.me 4,5 / 348; 263/40/25/9/11 -> po NORIKS 1081, zvezdice skalirane na 692) */
$nhk_dist = array(
  array( 5, 76, 523 ),
  array( 4, 11, 79 ),
  array( 3, 7, 50 ),
  array( 2, 3, 18 ),
  array( 1, 3, 22 ),
);
$nhk_reviews = array(
  array( 'ime' => 'Kristina K.', 'img' => 'nhk-rv-1.webp', 'naslov' => 'Pokvarile su mi sve druge cipele', 'tekst' => 'Nosim ih svaki dan već šest tjedana. Dovoljno su potporne da su udobne i na asfaltu, a zglobovi me ne muče. Vjerujte tablici veličina — u početku se mogu činiti malo dugačke, ali prednji dio treba biti prostran.' ),
  array( 'ime' => 'Ivana H.',    'img' => 'nhk-rv-2.webp', 'naslov' => 'Apsolutno ih obožavam', 'tekst' => 'Nekoliko sam puta planinarila u njima i savršeno se snalaze na terenu. Tlo je čvrsto pod nogama, a cipele su dovoljno fleksibilne da se stopalo savija kako treba. Sad ih nosim svaki dan, i na posao.' ),
  array( 'ime' => 'Sandra M.',   'img' => 'nhk-rv-3.webp', 'naslov' => 'Jako mi se sviđaju', 'tekst' => 'Udobne su i lijepo izgledaju — i za planinarenje i za svaki dan. Odlične cipele!' ),
  array( 'ime' => 'Filip N.',    'img' => 'nhk-rv-4.webp', 'naslov' => 'Oko 150 km u njima', 'tekst' => 'Planinarim u njima već oko 150 km po vrućem terenu. Odlične barefoot cipele od dobrih materijala, s puno detalja. Vrlo izdržljive, a potplat dobro prianja na suhim površinama.' ),
  array( 'ime' => 'Cvijeta W.',  'img' => 'nhk-rv-5.webp', 'naslov' => 'Najudobnije cipele ikad', 'tekst' => 'Najudobnije cipele koje sam ikad imala! Obožavam i kako izgledaju — baš su slatke.' ),
  array( 'ime' => 'Jelena D.',   'img' => 'nhk-rv-6.webp', 'naslov' => 'Kao rukavica', 'tekst' => 'Upravo su stigle i osjećaj je bolji nego što sam zamišljala. Izmjerite stopalo i naručite preporučenu veličinu — ja sam tako napravila i pristaju savršeno.' ),
  array( 'ime' => 'Silvija J.',  'img' => 'nhk-rv-7.webp', 'naslov' => 'Obožavam ove cipele', 'tekst' => 'Osjećaj je odličan i dobivam puno komplimenata. Nosila sam ih po mokroj travi i za sitne kiše, a stopala su ostala suha. Iskreno, želim još jedan par u drugoj boji.' ),
  array( 'ime' => 'Lovro M.',    'img' => '',              'naslov' => 'Ugodno iznenađen', 'tekst' => 'Odličan osjećaj tla pod nogama, a ipak dobra zaštita ispod stopala. Kvaliteta me oduševila — čvrsta guma, dobri materijali i koža. Dostava je stigla brže nego što sam očekivao.' ),
);

$nhk_n = 0; // števec sekcij za izmenična ozadja
$nhk_cls = function() use ( &$nhk_n ) { $nhk_n++; return ( $nhk_n % 2 ) ? ' nhk-tint' : ''; };
$nhk_side = 0; // izmenične strani slika/besedilo
$nhk_rev = function() use ( &$nhk_side ) { $nhk_side++; return ( $nhk_side % 2 ) ? '' : ' nhk-row2--rev'; };
?>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap">

<!-- 1) U DIVLJINU — hero "into the wild" (plasti originala v eni sliki) ob opisu izdelka -->
<section class="nhk-sec<?php echo $nhk_cls(); ?>">
  <div class="nhk-wrap">
    <div class="nhk-row2<?php echo $nhk_rev(); ?>">
      <div class="nhk-media"><?php echo $nhk_img( 'nhk-s01-u-divljinu.webp', 'Planinari na stijenama ispod planinskog vrha' ); ?></div>
      <div class="nhk-copy">
        <p class="nhk-kicker">U divljinu</p>
        <h2 class="nhk-h3">Pohodne cipele za <em>prirodan korak</em></h2>
        <p>Vodoodbojne pohodne cipele od <strong>brušene kože</strong>, osmišljene za avanture u prirodi u stilu hodanja bosonogi. <strong>Prostran prednji dio</strong> i fleksibilna izrada omogućuju stopalima da se prirodno kreću, a ravan, <strong>neklizajući potplat</strong> poboljšava ravnotežu na stazama i neravnom terenu.</p>
        <p>Završna obrada od brušene kože izgleda jednako dobro u gradu kao i na stazi — za sve koji žele prirodan osjećaj tla pod nogama bez kompromisa u stilu i izvedbi.</p>
        <p class="nhk-big">Zakoračite u divljinu.</p>
      </div>
    </div>
  </div>
</section>

<!-- 2) SPECIFIKACIJE — zavihek "Specs" iz nakupne škatle -->
<section class="nhk-sec<?php echo $nhk_cls(); ?>">
  <div class="nhk-wrap">
    <div class="nhk-row2<?php echo $nhk_rev(); ?>">
      <div class="nhk-media nhk-media--sq"><?php echo $nhk_img( 'nhk-s02-specifikacije.webp', 'NORIKS HikingShoes u boji terakota, pogled sa strane' ); ?></div>
      <div class="nhk-copy">
        <p class="nhk-kicker">Specifikacije</p>
        <h2 class="nhk-h3">Sve što trebate <em>za stazu</em></h2>
        <dl class="nhk-specs">
          <?php foreach ( $nhk_specs as $sp ) : ?>
          <div><dt><?php echo esc_html( $sp[0] ); ?></dt><dd><?php echo esc_html( $sp[1] ); ?></dd></div>
          <?php endforeach; ?>
        </dl>
      </div>
    </div>
  </div>
</section>

<!-- 3) RASKLOPITE SVOJU AVANTURU — "unfold your Adventure" (zvita cipela) -->
<section class="nhk-sec<?php echo $nhk_cls(); ?>">
  <div class="nhk-wrap">
    <div class="nhk-row2<?php echo $nhk_rev(); ?>">
      <div class="nhk-media nhk-media--sq nhk-media--plain"><?php echo $nhk_img( 'nhk-s03-avantura.webp', 'Smotana NORIKS HikingShoes cipela — toliko je fleksibilna' ); ?></div>
      <div class="nhk-copy">
        <p class="nhk-kicker">Rasklopite svoju</p>
        <h2 class="nhk-h3"><em>Avanturu</em></h2>
        <p>Cipela je toliko <strong>fleksibilna da se može smotati</strong> — tanak potplat savija se zajedno sa stopalom, a ipak štiti od kamenja i korijenja.</p>
        <p>Spakirajte je, obujte i krenite tamo gdje staza završava.</p>
        <p class="nhk-big">Lagana na nozi, spremna za svaki teren.</p>
      </div>
    </div>
  </div>
</section>

<!-- 4) ZERO DROP · ŠIROK PREDNJI DIO · FLEKSIBILNOST -->
<section class="nhk-sec<?php echo $nhk_cls(); ?>">
  <div class="nhk-wrap">
    <p class="nhk-kicker nhk-c">Barefoot osnove</p>
    <h2 class="nhk-h2 nhk-c">Tri stvari koje <em>stopala vole</em></h2>
    <div class="nhk-feats">
      <?php foreach ( $nhk_feats as $f ) : ?>
      <article class="nhk-feat">
        <div class="nhk-feat__img"><?php echo $nhk_img( $f[0], $f[1] ); ?></div>
        <h3 class="nhk-feat__t"><?php echo esc_html( $f[1] ); ?></h3>
        <p class="nhk-feat__p"><?php echo esc_html( $f[2] ); ?></p>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- 5) DIVLJI STIL — "WILD LOOK": video (utišan, brez napisov) ob besedilu -->
<section class="nhk-sec<?php echo $nhk_cls(); ?>">
  <div class="nhk-wrap">
    <div class="nhk-row2<?php echo $nhk_rev(); ?>">
      <div class="nhk-media nhk-media--vid"><?php echo $nhk_vid( 'nhk-s05-wild-look.mp4', 'nhk-s05-wild-look.webp' ); ?></div>
      <div class="nhk-copy">
        <p class="nhk-kicker">Divlji stil</p>
        <h2 class="nhk-h3">Jednako dobro <em>na stazi i u gradu</em></h2>
        <p>Završna obrada od <strong>brušene kože</strong> izgleda profinjeno i daleko od staze — od planinskih puteljaka do gradskih ulica.</p>
        <p class="nhk-big">Spremne za divljinu, lijepe za svaki dan.</p>
      </div>
    </div>
  </div>
</section>

<!-- 5b) DIVLJI STIL — fotografije lookbooka (drsnik originala -> mreža 2x2 ob besedilu) -->
<section class="nhk-sec<?php echo $nhk_cls(); ?>">
  <div class="nhk-wrap">
    <div class="nhk-row2<?php echo $nhk_rev(); ?>">
      <div class="nhk-media nhk-look">
        <?php foreach ( $nhk_look as $i => $lf ) : ?>
        <div class="nhk-look__ph"><?php echo $nhk_img( $lf, 'Kombinacija odjeće s NORIKS HikingShoes ' . ( $i + 1 ) ); ?></div>
        <?php endforeach; ?>
      </div>
      <div class="nhk-copy">
        <p class="nhk-kicker">Kombinacije</p>
        <h2 class="nhk-h3">Jedna cipela, <em>bezbroj kombinacija</em></h2>
        <p>Brušena koža, crni gumeni potplat i šarene vezice slažu se s planinarskom opremom jednako kao s <strong>trapericama, suknjom ili širokim hlačama</strong>.</p>
        <p class="nhk-big">Obujte ih uz ruksak ili uz omiljeni gradski komad.</p>
      </div>
    </div>
  </div>
</section>

<!-- 6) PROFESIONALNI DIVLJI ŽIVOT — "THE PROFESSIONAL WILD LIFE" (video utišan) -->
<section class="nhk-sec<?php echo $nhk_cls(); ?>">
  <div class="nhk-wrap">
    <div class="nhk-row2<?php echo $nhk_rev(); ?>">
      <div class="nhk-media nhk-media--sq nhk-media--vid"><?php echo $nhk_vid( 'nhk-s06-profesionalci.mp4', 'nhk-s06-profesionalci.webp' ); ?></div>
      <div class="nhk-copy">
        <p class="nhk-kicker">Profesionalni</p>
        <h2 class="nhk-h3"><em>Divlji život</em></h2>
        <p>Fotografi, planinari i ljubitelji prirode nose ih tamo gdje drugi ne stižu — od stjenovitih vrhova do vlažnih kanjona obraslih mahovinom.</p>
        <p>Sigurno prianjanje na stijeni, lakoća pri skakanju s kamena na kamen i osjećaj tla pod nogama — <strong>kao da ste dio divljine</strong>.</p>
        <p class="nhk-big">Gdje vi idete, idu i one.</p>
      </div>
    </div>
  </div>
</section>

<!-- 7) ČULI STE TO VEĆ? — Wild Facts (4 mita; odstotki in navedbe študij izpuščeni) -->
<section class="nhk-sec<?php echo $nhk_cls(); ?>">
  <div class="nhk-wrap">
    <p class="nhk-kicker nhk-c">Čuli ste to već?</p>
    <h2 class="nhk-h2 nhk-c">Mitovi i <em>činjenice</em></h2>
    <div class="nhk-myths">
      <?php foreach ( $nhk_myths as $m ) : ?>
      <article class="nhk-myth">
        <div class="nhk-myth__img"><?php echo $nhk_img( $m[0], $m[1] ); ?></div>
        <div class="nhk-myth__body">
          <p class="nhk-myth__lbl">Mit</p>
          <p class="nhk-myth__m"><?php echo esc_html( $m[1] ); ?></p>
          <p class="nhk-myth__lbl nhk-myth__lbl--f">Činjenica</p>
          <p class="nhk-myth__f"><?php echo esc_html( $m[2] ); ?></p>
        </div>
      </article>
      <?php endforeach; ?>
    </div>
    <p class="nhk-note nhk-c">Iskustva se razlikuju od osobe do osobe. Na barefoot obuću prelazite postupno.</p>
  </div>
</section>

<!-- 8) ZAŠTITA — SHIELD -->
<section class="nhk-sec<?php echo $nhk_cls(); ?>">
  <div class="nhk-wrap">
    <div class="nhk-row2<?php echo $nhk_rev(); ?>">
      <div class="nhk-media nhk-media--plain"><?php echo $nhk_img( 'nhk-s08-zastita.webp', 'Par NORIKS HikingShoes u žutoj boji od brušene kože' ); ?></div>
      <div class="nhk-copy">
        <p class="nhk-kicker">Zaštita</p>
        <h2 class="nhk-h3">Štit za <em>svaki teren</em></h2>
        <ul class="nhk-points">
          <li><span class="nhk-dot" aria-hidden="true">✓</span><span><strong>Odbija vodu i prljavštinu</strong> — za vlažno tlo, blato i promjenjivo vrijeme</span></li>
          <li><span class="nhk-dot" aria-hidden="true">✓</span><span><strong>Gornji dio od prave brušene kože</strong></span></li>
          <li><span class="nhk-dot" aria-hidden="true">✓</span><span><strong>Zaštitni TPU rub</strong> oko cipele</span></li>
        </ul>
        <p class="nhk-big">Spremne za kišu, blato i prašinu.</p>
      </div>
    </div>
  </div>
</section>

<!-- 9) RAVNOTEŽA — BALANCE -->
<section class="nhk-sec<?php echo $nhk_cls(); ?>">
  <div class="nhk-wrap">
    <div class="nhk-row2<?php echo $nhk_rev(); ?>">
      <div class="nhk-media nhk-media--plain"><?php echo $nhk_img( 'nhk-s09-ravnoteza.webp', 'NORIKS HikingShoes odozgo — prirodan oblik stopala' ); ?></div>
      <div class="nhk-copy">
        <p class="nhk-kicker">Ravnoteža</p>
        <h2 class="nhk-h3">Prirodan oblik, <em>sigurno pristajanje</em></h2>
        <ul class="nhk-points">
          <li><span class="nhk-dot" aria-hidden="true">✓</span><span><strong>Prirodan oblik stopala</strong> — za slobodu prstiju</span></li>
          <li><span class="nhk-dot" aria-hidden="true">✓</span><span><strong>Vezanje preko svoda stopala</strong> — za savršeno pristajanje</span></li>
        </ul>
        <p class="nhk-big">Stabilan korak na svakoj podlozi.</p>
      </div>
    </div>
  </div>
</section>

<!-- 10) IZDRŽLJIVOST — DURABILITY -->
<section class="nhk-sec<?php echo $nhk_cls(); ?>">
  <div class="nhk-wrap">
    <div class="nhk-row2<?php echo $nhk_rev(); ?>">
      <div class="nhk-media nhk-media--plain"><?php echo $nhk_img( 'nhk-s10-izdrzljivost.webp', 'Savijena NORIKS HikingShoes cipela s gumenim potplatom' ); ?></div>
      <div class="nhk-copy">
        <p class="nhk-kicker">Izdržljivost</p>
        <h2 class="nhk-h3">Izrađene za <em>grube staze</em></h2>
        <ul class="nhk-points">
          <li><span class="nhk-dot" aria-hidden="true">✓</span><span><strong>Ojačani prednji rub</strong> — zaštita prstiju na grubom terenu</span></li>
          <li><span class="nhk-dot" aria-hidden="true">✓</span><span><strong>Točka savijanja u potplatu</strong> — za lako savijanje cipele</span></li>
        </ul>
        <p class="nhk-big">Čvrste gdje treba, savitljive gdje treba.</p>
      </div>
    </div>
  </div>
</section>

<!-- 11) STOPITE SE S PRIRODOM — BLEND IN WITH NATURE + potplat 4 / 4 / 8 mm -->
<section class="nhk-sec<?php echo $nhk_cls(); ?>">
  <div class="nhk-wrap">
    <div class="nhk-row2<?php echo $nhk_rev(); ?>">
      <div class="nhk-media nhk-media--plain"><?php echo $nhk_img( 'nhk-s11-priroda.webp', 'Potplat NORIKS HikingShoes s uzorkom krampona' ); ?></div>
      <div class="nhk-copy">
        <p class="nhk-kicker">Stopite se</p>
        <h2 class="nhk-h3">S <em>prirodom</em></h2>
        <p>Kad se prestanemo previše truditi, sve postaje lakše. Svaki pokret i svaki korak postaju lagani i okretni — <strong>kao da ste postali dio divljine</strong>.</p>
        <ul class="nhk-mm">
          <li><strong>4 mm</strong><span>baza potplata</span></li>
          <li><strong>4 mm</strong><span>visina krampona</span></li>
          <li><strong>8 mm</strong><span>ukupna visina</span></li>
        </ul>
        <p class="nhk-big">Osjetite stazu pod nogama.</p>
      </div>
    </div>
  </div>
</section>

<!-- 12) ODRŽIVOST — Sustainability -->
<section class="nhk-sec<?php echo $nhk_cls(); ?>">
  <div class="nhk-wrap">
    <div class="nhk-row2<?php echo $nhk_rev(); ?>">
      <div class="nhk-media nhk-media--sq"><?php echo $nhk_img( 'nhk-s12-odrzivost.webp', 'Dvije planinarke odmaraju na vrhu brda' ); ?></div>
      <div class="nhk-copy">
        <p class="nhk-kicker">Održivost</p>
        <h2 class="nhk-h3">Blaže prema <em>prirodi</em></h2>
        <p>Pri izradi cipela vodimo računa o tome da budu što prijateljskije prema okolišu — zato su ključni dijelovi izrađeni od materijala <strong>osmišljenih da se s vremenom biološki razgrade</strong>.</p>
        <ul class="nhk-points">
          <li><span class="nhk-dot" aria-hidden="true">✓</span><span><strong>Gumeni potplat</strong> od biorazgradive gume</span></li>
          <li><span class="nhk-dot" aria-hidden="true">✓</span><span><strong>Vezice</strong> od biorazgradivog materijala</span></li>
          <li><span class="nhk-dot" aria-hidden="true">✓</span><span><strong>EVA međupotplat</strong> od biorazgradive pjene</span></li>
        </ul>
        <p class="nhk-big">Ostavite samo tragove stopala.</p>
      </div>
    </div>
  </div>
</section>

<!-- 13) RECENZIJE KUPACA — 1081 po NORIKS, razdelitev zvezdic skalirana na 692 + mnenja s fotografijami -->
<section class="nhk-sec<?php echo $nhk_cls(); ?>">
  <div class="nhk-wrap">
    <p class="nhk-kicker nhk-c">Recenzije kupaca</p>
    <h2 class="nhk-h2 nhk-c">Planinari <em>govore</em></h2>
    <div class="nhk-score">
      <span class="nhk-score__num">4,5 / 5</span>
      <?php echo $nhk_stars( 5 ); ?>
      <span class="nhk-score__txt">Na temelju 1081 recenzije · <span class="nhk-ok">✓ Potvrđene kupnje</span></span>
    </div>
    <ul class="nhk-dist">
      <?php foreach ( $nhk_dist as $d ) : ?>
      <li>
        <span class="nhk-dist__lbl"><?php echo (int) $d[0]; ?> ★</span>
        <span class="nhk-dist__bar"><span style="width:<?php echo (int) $d[1]; ?>%"></span></span>
        <span class="nhk-dist__pct"><?php echo (int) $d[1]; ?> % (<?php echo (int) $d[2]; ?>)</span>
      </li>
      <?php endforeach; ?>
    </ul>
    <div class="nhk-reviews">
      <?php foreach ( $nhk_reviews as $r ) : ?>
      <article class="nhk-card<?php echo $r['img'] ? ' nhk-card--img' : ''; ?>">
        <?php if ( $r['img'] ) : ?><div class="nhk-card__img"><?php echo $nhk_img( $r['img'], 'Fotografija kupca: ' . $r['ime'] ); ?></div><?php endif; ?>
        <div class="nhk-card__body">
          <?php echo $nhk_stars( 5 ); ?>
          <p class="nhk-card__h"><?php echo esc_html( $r['naslov'] ); ?></p>
          <p class="nhk-card__txt">„<?php echo esc_html( $r['tekst'] ); ?>”</p>
          <p class="nhk-card__name"><?php echo esc_html( $r['ime'] ); ?> <span class="nhk-ok">✓ Potvrđena kupnja</span></p>
        </div>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<style>
/* NORIKS stil (predloga why-widetoeshoes.php / why-hands.php): oznaka + naslov z ležečim poudarkom, slika ob
   besedilu, izmenjujoča ozadja in strani. Gozdno zelena paleta (#3f6b45). */
.nhk-sec { padding: 60px 0; font-family: 'Poppins', system-ui, -apple-system, 'Segoe UI', Roboto, Arial, sans-serif; color: #1e2a20; background: #fff; }
.nhk-sec * { box-sizing: border-box; }
.nhk-tint { background: #f1f6ee; }
.nhk-wrap { width: 100%; max-width: 1200px; margin: 0 auto; padding: 0 24px; }
.nhk-c { text-align: center; }
.nhk-sec h2, .nhk-sec h3 { font-family: inherit; text-transform: none; letter-spacing: 0; }
.nhk-kicker, .nhk-copy p.nhk-kicker { font-size: 12.5px; line-height: 1.4; font-weight: 700; letter-spacing: .14em; text-transform: uppercase; color: #3f6b45; margin: 0 0 10px; }
.nhk-h2 { font-weight: 700; font-size: clamp(25px, 3.1vw, 36px); line-height: 1.2; margin: 0 0 14px; color: #1e2a20; }
.nhk-h2 em, .nhk-h3 em { font-style: italic; color: #3f6b45; }
.nhk-h3 { font-weight: 700; font-size: clamp(22px, 2.6vw, 30px); line-height: 1.25; margin: 0 0 16px; color: #1e2a20; }
.nhk-sec img, .nhk-sec video { display: block; width: 100%; height: auto; }

/* slika ob besedilu */
.nhk-row2 { display: grid; grid-template-columns: 1fr 1fr; gap: 56px; align-items: center; }
.nhk-row2--rev .nhk-media { order: 2; }
.nhk-media img, .nhk-media video { object-fit: cover; border-radius: 10px; box-shadow: 0 2px 4px rgba(20,40,25,.05), 0 14px 40px rgba(20,40,25,.10); max-width: 560px; margin: 0 auto; }
.nhk-media--sq img, .nhk-media--sq video { aspect-ratio: 1 / 1; max-width: 540px; }
.nhk-media--plain img { background: #fff; object-fit: contain; padding: 18px; }
.nhk-copy p { font-size: 16px; line-height: 1.7; color: #4a5649; margin: 0 0 14px; }
.nhk-copy p strong { color: #1e2a20; font-weight: 600; }
.nhk-copy p.nhk-big { font-size: 19px; font-weight: 700; color: #1e2a20; line-height: 1.45; margin-top: 6px; }
.nhk-points { list-style: none; margin: 0 0 16px; padding: 0; }
.nhk-points li { font-size: 16px; line-height: 1.6; color: #4a5649; margin: 0 0 12px; display: flex; gap: 12px; align-items: flex-start; }
.nhk-points li strong { color: #1e2a20; font-weight: 600; }
.nhk-dot { flex: 0 0 22px; width: 22px; height: 22px; border-radius: 50%; background: #3f6b45; color: #fff; font-size: 12px; font-weight: 800; line-height: 22px; text-align: center; margin-top: 2px; }

/* specifikacije */
.nhk-specs { margin: 0 0 8px; padding: 0; border-top: 1px solid #cfdfca; }
.nhk-specs > div { display: grid; grid-template-columns: 140px 1fr; gap: 12px; padding: 10px 0; border-bottom: 1px solid #cfdfca; }
.nhk-specs dt { font-size: 15px; font-weight: 700; color: #1e2a20; margin: 0; }
.nhk-specs dd { font-size: 15px; line-height: 1.55; color: #4a5649; margin: 0; }

/* 3 kartice */
.nhk-feats { display: grid; grid-template-columns: repeat(3, minmax(0, 1fr)); gap: 22px; margin-top: 26px; }
.nhk-feat { background: #fff; border: 1px solid #cfdfca; border-radius: 10px; overflow: hidden; text-align: center; }
.nhk-sec:not(.nhk-tint) .nhk-feat { background: #f1f6ee; }
.nhk-feat__img img { aspect-ratio: 1 / 1; object-fit: cover; }
.nhk-feat__t { font-size: 19px; font-weight: 700; margin: 16px 14px 6px; color: #1e2a20; }
.nhk-feat__p { font-size: 15px; line-height: 1.55; color: #4a5649; margin: 0 16px 18px; }

/* wild look */
.nhk-media--vid video { aspect-ratio: 854 / 410; }
.nhk-media--sq.nhk-media--vid video { aspect-ratio: 1 / 1; }
.nhk-look { display: grid; grid-template-columns: repeat(2, minmax(0, 1fr)); gap: 12px; max-width: 480px; width: 100%; margin: 0 auto; }
.nhk-look__ph img { aspect-ratio: 3 / 4; object-fit: cover; border-radius: 10px; max-width: none; box-shadow: 0 2px 4px rgba(20,40,25,.05), 0 10px 26px rgba(20,40,25,.10); }

/* miti */
.nhk-myths { display: grid; grid-template-columns: repeat(4, minmax(0, 1fr)); gap: 18px; margin-top: 26px; }
.nhk-myth { background: #fff; border: 1px solid #cfdfca; border-radius: 10px; overflow: hidden; display: flex; flex-direction: column; }
.nhk-sec:not(.nhk-tint) .nhk-myth { background: #f1f6ee; }
.nhk-myth__img { background: #fff; }
.nhk-myth__img img { aspect-ratio: 4 / 5; object-fit: contain; }
.nhk-myth__body { padding: 14px 16px 18px; }
.nhk-myth__lbl { font-size: 11.5px; font-weight: 700; letter-spacing: .12em; text-transform: uppercase; color: #a33a2a; margin: 0 0 4px; }
.nhk-myth__lbl--f { color: #3f6b45; margin-top: 12px; }
.nhk-myth__m { font-size: 16px; font-weight: 700; line-height: 1.4; color: #1e2a20; margin: 0; text-decoration: line-through; text-decoration-color: rgba(163,58,42,.55); }
.nhk-myth__f { font-size: 14.5px; line-height: 1.6; color: #4a5649; margin: 0; }
.nhk-note { font-size: 13px; color: #6e7d70; font-style: italic; margin: 18px 0 0; }

/* 4 / 4 / 8 mm */
.nhk-mm { list-style: none; margin: 4px 0 18px; padding: 0; display: grid; grid-template-columns: repeat(3, minmax(0, 1fr)); gap: 12px; }
.nhk-mm li { background: #fff; border: 1px solid #cfdfca; border-radius: 10px; padding: 14px 8px; text-align: center; }
.nhk-sec:not(.nhk-tint) .nhk-mm li { background: #f1f6ee; }
.nhk-mm strong { display: block; font-size: 26px; font-weight: 700; color: #3f6b45; line-height: 1.1; }
.nhk-mm span { display: block; font-size: 13.5px; color: #4a5649; margin-top: 4px; }

/* recenzije */
.nhk-stars { color: #f2a516; letter-spacing: 1px; font-size: 15px; }
.nhk-stars__off { color: #dfe6dc; }
.nhk-score { display: flex; justify-content: center; align-items: center; gap: 12px; margin: 0 0 20px; flex-wrap: wrap; }
.nhk-score__num { font-size: 28px; font-weight: 700; color: #1e2a20; }
.nhk-score .nhk-stars { font-size: 20px; }
.nhk-score__txt { font-size: 14.5px; color: #5d6a5e; }
.nhk-dist { list-style: none; margin: 0 auto 32px; padding: 0; max-width: 460px; }
.nhk-dist li { display: grid; grid-template-columns: 38px 1fr 92px; gap: 10px; align-items: center; margin: 0 0 8px; font-size: 14px; color: #1e2a20; }
.nhk-dist__lbl { font-weight: 600; white-space: nowrap; }
.nhk-dist__bar { display: block; height: 10px; border-radius: 6px; background: #dce9d6; overflow: hidden; }
.nhk-dist__bar span { display: block; height: 100%; background: #3f6b45; border-radius: 6px; }
.nhk-dist__pct { color: #5d6a5e; white-space: nowrap; }
.nhk-reviews { display: grid; grid-template-columns: repeat(4, minmax(0, 1fr)); gap: 18px; align-items: stretch; }
.nhk-card { background: #fff; border: 1px solid #cfdfca; border-radius: 10px; overflow: hidden; display: flex; flex-direction: column; }
.nhk-card__img img { aspect-ratio: 1 / 1; object-fit: cover; border-radius: 0; box-shadow: none; }
.nhk-card__body { padding: 16px; }
.nhk-card__h { font-size: 15px; font-weight: 700; color: #1e2a20; margin: 8px 0 0; line-height: 1.35; }
.nhk-card__txt { font-size: 14.5px; line-height: 1.6; color: #3a463b; margin: 6px 0 10px; font-style: italic; }
.nhk-card__name { font-size: 13.5px; font-weight: 600; color: #1e2a20; margin: 0; }
.nhk-ok { color: #2f9e5f; font-weight: 600; font-size: 12px; margin-left: 4px; font-style: normal; }

@media (max-width: 989px) {
  .nhk-row2 { gap: 32px; }
  .nhk-reviews, .nhk-myths { grid-template-columns: repeat(2, minmax(0, 1fr)); }
}
@media (max-width: 749px) {
  .nhk-sec { padding: 42px 0; }
  .nhk-wrap { padding: 0 16px; }
  .nhk-row2 { grid-template-columns: 1fr; gap: 24px; }
  .nhk-row2--rev .nhk-media { order: 0; }
  .nhk-specs > div { grid-template-columns: 1fr; gap: 2px; }
  .nhk-feats { grid-template-columns: 1fr; gap: 14px; }
  .nhk-look { gap: 10px; }
  .nhk-myths, .nhk-reviews { gap: 12px; }
  .nhk-card__body, .nhk-myth__body { padding: 12px; }
  .nhk-mm strong { font-size: 22px; }
}

/* galerija izdelka: sličice največ v 2 vrstah (5 na vrsto), ostale slike so dosegljive z drsenjem glavne slike */
.product_cat-orto-hikingshoes .flex-control-thumbs li:nth-child(n+11) { display: none !important; }

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
.woocommerce-product-details__short-description .nhk-tick {
  position: absolute !important; left: 0 !important; top: 1px !important;
  width: 21px; height: 21px; border-radius: 50%;
  background: #2f9e5f !important; color: #fff !important;
  font-size: 12px !important; font-weight: 800 !important; line-height: 21px !important;
  text-align: center !important; display: inline-block !important; }
.woocommerce-product-details__short-description p:first-of-type { font-size: 16px; line-height: 1.55; }
</style>
