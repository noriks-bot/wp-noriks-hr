<?php
/**
 * product-bottom: NORIKS DishSheets — listići za pranje posuđa (orto-dishsheets).
 * Original: lucentglobe.com/products/dishwashing-detergent-sheets — vsebina in vrstni red 1:1 z originalom,
 * oblika po NORIKS stilu (predloga why-hands.php / why-catfountain.php), poudarek temno modra z embalaže (#1f568e):
 *   1)  "Forever Chemicals Don't Belong On Your Dishes"      -> Trajnim kemikalijama nije mjesto na posuđu (video otapanja iz galerije ob besedilu)
 *   2)  "See how ... families are cleaning better"            -> Prije i poslije (3 videi, hrvaški napisi, brez komentarjev s tujo znamko)
 *   3)  "Why choose us?" (primerjalna tabela)                 -> Zašto baš NORIKS DishSheets (tabela ob sliki, brez tujih znamk in vrstice "Aussie owned")
 *   4)–6) "No Plastic Packaging / No Artificial Dyes / Save Money" -> 3 lastnosti, video/slika ob besedilu (izmenično)
 *   7)  zavihka "Save on every single wash" + "What's Included" + "Ingredients" -> Uštedite na svakom pranju
 *   8)  zavihek "Extra Details"                               -> Dodatni detalji
 *   9)  "Plant Derived Ingredients — 1 Powerful Formula"      -> 3 sastojka biljnog podrijetla
 *   10) "How to use" (3 koraki + video)                        -> Kako koristiti (video s hrvaškimi podnapisi)
 *   11) "Comments from families who've made the switch"       -> Komentari obitelji (komentarji z originala, ki se nanašajo na ta izdelek)
 *   12) "30 Day Money Back Guarantee" + zavihek "Money Back Guarantee" -> NORIKS pogoji (30 dana za povrat, dostava iznad 70 €)
 *   13) mnenja (Judge.me)                                      -> Recenzije kupaca (1081)
 * Izpuščeno: glava, pasica, "As seen in" (logotipi), gumbi "Add to cart", naročnina, "+4 FREE Gifts" (darila), noga,
 * slika ustanoviteljev in slika "We charge $72" (osebe in izdelki tuje znamke). Znamka konkurenta odstranjena iz slik in videov,
 * številke konkurenta (784.567 obitelji, 27.000+ recenzij, 150.000+ naročnikov) izpuščene. FAQ (8) je v reviews.php ($dishsheets_faq),
 * mnenja tudi v auto_reviews/HR_dishsheets.php. Slike/videi: img/dishsheets/ (nds-…).
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$nds      = get_template_directory_uri() . '/img/dishsheets/';
$nds_path = get_template_directory() . '/img/dishsheets/';
$nds_img  = function( $file, $alt ) use ( $nds, $nds_path ) {
  if ( ! $file || ! file_exists( $nds_path . $file ) ) { return ''; }
  return '<img src="' . esc_url( $nds . $file ) . '" alt="' . esc_attr( $alt ) . '" loading="lazy">';
};
$nds_video = function( $file, $poster, $label, $cls = '' ) use ( $nds, $nds_path ) {
  if ( ! file_exists( $nds_path . $file ) ) { return ''; }
  return '<div class="nds-vid ' . esc_attr( $cls ) . '"><video src="' . esc_url( $nds . $file ) . '" poster="' . esc_url( $nds . $poster ) . '"'
    . ' muted autoplay loop playsinline preload="metadata" aria-label="' . esc_attr( $label ) . '"></video></div>';
};
$nds_stars = function( $n ) {
  return '<span class="nds-stars" aria-label="' . (int) $n . ' od 5 zvjezdica">' . str_repeat( '★', (int) $n ) . '<span class="nds-stars__off">' . str_repeat( '★', 5 - (int) $n ) . '</span></span>';
};
$nds_kses = array( 'strong' => array(), 'em' => array(), 'br' => array() );
$nds_tick = '<span class="nds-dot" aria-hidden="true">✓</span>';

/* 3) usporedba */
$nds_cmp = array(
  array( 'Prirodni sastojci', 1, 0, 0 ),
  array( 'Bez plastične ambalaže', 1, 0, 0 ),
  array( 'Snažno čišćenje', 1, 1, 1 ),
  array( 'Praktični za putovanja', 1, 0, 0 ),
);

/* 4)–6) tri lastnosti */
$nds_rows = array(
  array( 'media' => $nds_video( 'nds-v-razgradnja.mp4', 'nds-v-razgradnja-poster.webp', 'Kartonska ambalaža se prirodno razgrađuje u zemlji', 'nds-vid--tall' ),
    'k' => 'Bez plastične ambalaže', 'h' => 'Plastika na odlagalištu, <em>karton u prirodi</em>',
    'p' => 'Plastične posude za deterdžent na odlagalištima stoje <strong>500 godina</strong>, a naša kartonska ambalaža <strong>se prirodno razgrađuje</strong>. Lagan dizajn smanjuje emisije pri prijevozu za 90 % i čuva oceane bez plastike.' ),
  array( 'media' => $nds_video( 'nds-v-bez-kemikalija-hr.mp4', 'nds-v-bez-kemikalija-poster.webp', 'Klasični deterdžent ostavlja tragove na tanjuru, NORIKS DishSheets ne', 'nds-vid--sq' ),
    'k' => 'Bez umjetnih bojila', 'h' => 'Blistavo čisto — <em>bez izbjeljivača</em>',
    'p' => 'Posuđe postaje <strong>blistavo čisto</strong> bez izbjeljivača i sintetičkih bojila. Naša <strong>netoksična formula biljnog podrijetla</strong> razgrađuje se u vodenim sustavima.' ),
  array( 'media' => $nds_img( 'nds-s-usteda.webp', 'NORIKS DishSheets — od 0,16 € po pranju' ),
    'k' => 'Uštedite novac', 'h' => 'Prirodni sastojci, <em>manji trošak</em>',
    'p' => 'Koristimo sastojke <strong>prirodnog podrijetla</strong> i izbacili smo sve štetne tvari — a vi pritom <strong>štedite novac</strong>!' ),
);

/* 9) sastojci */
$nds_ingr = array(
  array( 'img' => 'nds-i-enzimi.webp', 'h' => 'Enzimi', 'gdje' => 'Dobre bakterije u tlu i biljkama', 'zasto' => 'Pomažu razgraditi ostatke hrane i nečistoće, pa posuđe postaje blistavo čisto.' ),
  array( 'img' => 'nds-i-citrusi.webp', 'h' => 'Natrijev citrat', 'gdje' => 'Limuni i naranče', 'zasto' => 'Pomaže ukloniti kamenac iz tvrde vode poput kalcija, pa na posuđu ne ostaju mrlje.' ),
  array( 'img' => 'nds-i-kokos.webp', 'h' => 'Lauril glukozid', 'gdje' => 'Kokos i kokosovo ulje', 'zasto' => 'Izvrsno uklanja masnoću i ostatke masne hrane za fantastično čisto posuđe.' ),
);

/* 10) koraki */
$nds_steps = array(
  array( 'Pripremite posuđe', 'Složite posuđe u perilicu. Ako više volite prati na ruke, napunite sudoper vodom.' ),
  array( 'Dodajte listić', 'Jedan listić stavite izravno u pretinac za deterdžent. Za manja pranja ili namakanje dovoljna je polovica listića.' ),
  array( 'Pokrenite i opustite se', 'Odaberite željeni program i pustite da se listić otopi i ukloni tvrdokorne ostatke hrane. Za pranje na ruke listić promiješajte u vodi da nastane lagana pjena i perite kao i inače.' ),
);

/* 11) komentarji obitelji (z originala, samo tisti o tem izdelku) */
$nds_comments = array(
  array( 'ime' => 'Sanja M.', 'tekst' => 'Drago mi je što smo ih probali! Mislila sam da je problem u perilici. Posuđe je sada čisto, bez ostataka deterdženta. Svaki dan me boljeo trbuh — mislim da sam pila ostatke, jer su mi šalice bile skliske kad bih ulila vodu. Sada više ne. Hvala vam na ovom proizvodu!' ),
  array( 'ime' => 'Elizabeta B.', 'tekst' => 'Ovi listići za perilicu posuđa su fantastični. Koristim ih otprilike dva tjedna.' ),
  array( 'ime' => 'Ratka B.', 'tekst' => 'Najbolja kupnja koju sam napravila — bila sam vrlo skeptična da ih probam, ali su najbolji izbor.' ),
  array( 'ime' => 'Snježana V.', 'tekst' => 'Obožavam ove listiće — koristim ih već neko vrijeme. Jako sam zadovoljna kvalitetom i jednostavnošću upotrebe.' ),
  array( 'ime' => 'Helena S.', 'tekst' => 'Sjajni su — posuđe mi nikad nije bilo čišće i više se ne brinem da su moja djeca izložena groznim kemikalijama. Potpuno sam ih zavoljela.' ),
  array( 'ime' => 'Vesna B.', 'tekst' => 'Koristim vaše listiće za perilicu posuđa. Dobar je osjećaj koristiti ih.' ),
  array( 'ime' => 'Tina T.', 'tekst' => 'Koristimo ih pri svakom pranju, puno je bolje, ne ostavljaju onaj grozni film na svemu. Hvala što ste se toga sjetili.' ),
);

/* 13) recenzije kupaca (Judge.me na originalu, samo mnenja o tem izdelku) */
$nds_reviews = array(
  array( 'ime' => 'Ivana S.', 'z' => 5, 'h' => 'Ne vraćam se agresivnim kemikalijama', 'tekst' => 'Jako volim ove listiće. Dosad ih nisam koristila, ali dosadile su mi obične tablete jer su na plastičnim čašama i tanjurićima moje kćerkice ostavljale jak miris kemikalija. Otkad koristim listiće, toga više nema, a čaše i tanjuri se sjaje. Sigurno ću ih opet kupiti!' ),
  array( 'ime' => 'Karolina M.', 'z' => 5, 'h' => 'Blistavo posuđe i širok osmijeh', 'tekst' => 'Definitivno najbolji listići za perilicu koje sam ikad koristila. Puno bolji od skupih kapsula koje smo kupovali. Čaše blistaju, tanjuri se sjaje, a i perilica iznutra izgleda kao nova.' ),
  array( 'ime' => 'Josip B.', 'z' => 5, 'h' => 'Odlično peru posuđe', 'tekst' => 'Odlični listići. Posuđe je savršeno oprano, a dobro se osjećam jer manje opterećujem okoliš. Preporučio sam ih cijeloj obitelji!' ),
  array( 'ime' => 'Tea T.', 'z' => 5, 'h' => 'Zadovoljna kupnjom', 'tekst' => 'Probala sam ih prvi put i jako sam impresionirana kako je posuđe ispalo. Sto posto sam uvjerena da su bolji od skupih tableta koje sam kupovala. Sigurno ću ih opet naručiti.' ),
  array( 'ime' => 'Boris C.', 'z' => 5, 'h' => 'Bio sam skeptičan', 'tekst' => 'Bio sam skeptičan dok sam gledao reklame, ali nakon što sam probao listiće za posuđe moram priznati da su odlični — pomažu planetu, a i štedite novac.' ),
  array( 'ime' => 'Andrej B.', 'z' => 5, 'h' => 'Sto posto zadovoljan', 'tekst' => 'Sto posto sam zadovoljan ovim proizvodom. Nakon pranja nema toksičnog mirisa i sve je savršeno čisto. 10/10, pet zvjezdica bez razmišljanja.' ),
);

$nds_n = 0; // števec sekcij za izmenična ozadja
$nds_cls = function() use ( &$nds_n ) { $nds_n++; return ( $nds_n % 2 ) ? ' nds-tint' : ''; };
?>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap">

<!-- 1) TRAJNE KEMIKALIJE -->
<section class="nds-sec<?php echo $nds_cls(); ?>">
  <div class="nds-wrap">
    <div class="nds-row2">
      <div class="nds-media"><?php echo $nds_video( 'nds-v-otapanje.mp4', 'nds-v-otapanje-poster.webp', 'NORIKS DishSheets listići se otapaju u vodi', 'nds-vid--sq' ); ?></div>
      <div class="nds-copy">
        <p class="nds-kicker">Kao što pokazuju izvješća</p>
        <h2 class="nds-h3">Trajnim kemikalijama <em>nije mjesto na vašem posuđu</em></h2>
        <p>Klasični deterdženti za pranje posuđa mogu sadržavati <strong>trajne kemikalije</strong> — sintetičke kemikalije koje se <strong>ne razgrađuju ni u tijelu ni u okolišu</strong>. Povezuju se s hormonskim poremećajima, problemima s imunitetom i rakom.</p>
        <p class="nds-chips"><span>Hormonski poremećaji</span><span>Slabljenje imuniteta</span><span>Poremećaji štitnjače</span><span>Povezanost s rakom</span></p>
        <p class="nds-big">Listići za pranje posuđa bez trajnih kemikalija.</p>
      </div>
    </div>
  </div>
</section>

<!-- 2) PRIJE I POSLIJE — 3 videa -->
<section class="nds-sec<?php echo $nds_cls(); ?>">
  <div class="nds-wrap">
    <div class="nds-row2 nds-row2--rev">
      <div class="nds-media">
        <div class="nds-trio">
          <?php
          echo $nds_video( 'nds-v-prije-poslije-1-hr.mp4', 'nds-v-prije-poslije-1-poster.webp', 'Staklena posuda prije i poslije pranja', 'nds-vid--ba' );
          echo $nds_video( 'nds-v-prije-poslije-2-hr.mp4', 'nds-v-prije-poslije-2-poster.webp', 'Tanjur prije i poslije pranja', 'nds-vid--ba' );
          echo $nds_video( 'nds-v-prije-poslije-3-hr.mp4', 'nds-v-prije-poslije-3-poster.webp', 'Posuda s ostacima hrane prije i poslije pranja', 'nds-vid--ba' );
          ?>
        </div>
      </div>
      <div class="nds-copy">
        <p class="nds-kicker">Prije i poslije</p>
        <h2 class="nds-h3">Pogledajte kako obitelji peru <em>čišće i štede novac</em></h2>
        <ul class="nds-points">
          <li><?php echo $nds_tick; ?><span>Zapečeni ostaci, masnoća i mrlje — <strong>nakon jednog pranja</strong></span></li>
          <li><?php echo $nds_tick; ?><span><strong>1 listić = 1 puno pranje</strong>, bez tekućine i bez nereda</span></li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- 3) ZAŠTO BAŠ NORIKS — usporedba -->
<section class="nds-sec<?php echo $nds_cls(); ?>">
  <div class="nds-wrap">
    <div class="nds-row2">
      <div class="nds-media nds-media--sq"><?php echo $nds_img( 'nds-g01-kutija.webp', 'NORIKS DishSheets listići za pranje posuđa — 80 listića' ); ?></div>
      <div class="nds-copy">
        <p class="nds-kicker">Usporedba</p>
        <h2 class="nds-h3">Zašto <em>odabrati nas?</em></h2>
        <table class="nds-cmp">
          <thead><tr><th>Prednosti</th><th>NORIKS<br>DishSheets</th><th>Tablete za<br>perilicu</th><th>Kapsule za<br>perilicu</th></tr></thead>
          <tbody>
            <?php foreach ( $nds_cmp as $c ) : ?>
            <tr><td><?php echo esc_html( $c[0] ); ?></td>
              <?php for ( $j = 1; $j <= 3; $j++ ) : ?>
              <td class="<?php echo $c[ $j ] ? 'nds-yes' : 'nds-no'; ?><?php echo 1 === $j ? ' nds-our' : ''; ?>" aria-label="<?php echo $c[ $j ] ? 'da' : 'ne'; ?>"><?php echo $c[ $j ] ? '✓' : '✕'; ?></td>
              <?php endfor; ?>
            </tr>
            <?php endforeach; ?>
            <tr><td>Cijena po pranju</td><td class="nds-price nds-our">od 0,16 €</td><td class="nds-price">0,89 €+</td><td class="nds-price">0,84 €+</td></tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</section>

<?php foreach ( $nds_rows as $i => $w ) : ?>
<!-- <?php echo (int) ( $i + 4 ); ?>) <?php echo esc_html( $w['k'] ); ?> -->
<section class="nds-sec<?php echo $nds_cls(); ?>">
  <div class="nds-wrap">
    <div class="nds-row2<?php echo ( $i % 2 ) ? '' : ' nds-row2--rev'; ?>">
      <div class="nds-media<?php echo ( 2 === $i ) ? ' nds-media--port' : ''; ?>"><?php echo $w['media']; ?></div>
      <div class="nds-copy">
        <p class="nds-kicker"><?php echo esc_html( $w['k'] ); ?></p>
        <h2 class="nds-h3"><?php echo wp_kses( $w['h'], $nds_kses ); ?></h2>
        <p><?php echo wp_kses( $w['p'], $nds_kses ); ?></p>
      </div>
    </div>
  </div>
</section>
<?php endforeach; ?>

<!-- 7) UŠTEDITE NA SVAKOM PRANJU — što je uključeno + sastojci -->
<section class="nds-sec<?php echo $nds_cls(); ?>">
  <div class="nds-wrap">
    <div class="nds-row2">
      <div class="nds-media nds-media--sq"><?php echo $nds_img( 'nds-g02-prednosti.webp', 'NORIKS DishSheets — za perilicu, pranje na ruke i četku za posuđe' ); ?></div>
      <div class="nds-copy">
        <p class="nds-kicker">Uštedite na svakom pranju</p>
        <h2 class="nds-h3">Snažni gdje treba, <em>nježni gdje je važno</em></h2>
        <p>Za blistavo čisto posuđe — svaki put.</p>
        <p class="nds-sub">Što je uključeno</p>
        <p><strong>1 listić = 1 puno pranje.</strong> Svaki listić savršeno je odmjeren za jedno puno pranje, za učinkovito i temeljito čišćenje svaki put.</p>
        <div class="nds-packs">
          <span><strong>1 paket</strong>80 listića</span>
          <span><strong>3 paketa</strong>240 listića</span>
          <span><strong>6 paketa</strong>480 listića</span>
        </div>
        <p class="nds-sub">Sastojci</p>
        <p>Naši proizvodi sadrže samo sastojke potrebne za učinkovito čišćenje: natrijev kokosulfat, polivinil alkohol, lauril glukozid, glicerin, saponini, natrijev citrat, natrijev bikarbonat, miris i enzimi.</p>
      </div>
    </div>
  </div>
</section>

<!-- 8) DODATNI DETALJI -->
<section class="nds-sec<?php echo $nds_cls(); ?>">
  <div class="nds-wrap">
    <div class="nds-row2 nds-row2--rev">
      <div class="nds-media nds-media--sq"><?php echo $nds_img( 'nds-g03-upotreba.webp', 'Kako koristiti listiće — u perilici, u četki za posuđe i u sudoperu' ); ?></div>
      <div class="nds-copy">
        <p class="nds-kicker">Dodatni detalji</p>
        <h2 class="nds-h3">Prvi na svijetu — <em>budućnost čistog posuđa</em></h2>
        <p>Pojednostavnite pranje posuđa uz NORIKS DishSheets — snažno čišćenje bez nereda, otpada i kemikalija. Svaki listić je točno odmjeren: <strong>1 listić = 1 puno pranje</strong>, a dovoljno je svestran za perilicu posuđa, sudoper, namakanje tvrdokornih lonaca i tava ili četku za posuđe.</p>
        <ul class="nds-points">
          <li><?php echo $nds_tick; ?><span><strong>Točno odmjereni:</strong> svaki listić je prava količina za jedno puno pranje</span></li>
          <li><?php echo $nds_tick; ?><span><strong>Višenamjenski:</strong> za perilicu posuđa, pranje na ruke, namakanje lonaca ili četku za posuđe</span></li>
          <li><?php echo $nds_tick; ?><span><strong>Za štedljive perilice:</strong> kompatibilni s visokoučinkovitim (HE) perilicama za optimalan rezultat</span></li>
          <li><?php echo $nds_tick; ?><span><strong>Bez štetnih tvari:</strong> bez plastične ambalaže i agresivnih kemikalija — čistoća u koju možete imati povjerenja</span></li>
          <li><?php echo $nds_tick; ?><span><strong>Snažni i nježni:</strong> uklanjaju masnoću, prljavštinu i zapečenu hranu</span></li>
        </ul>
        <p class="nds-big">Nadogradite svoju rutinu pranja posuđa inovativnim i održivim rješenjem.</p>
      </div>
    </div>
  </div>
</section>

<!-- 9) SASTOJCI BILJNOG PODRIJETLA -->
<section class="nds-sec<?php echo $nds_cls(); ?>">
  <div class="nds-wrap">
    <p class="nds-kicker nds-c">Sastojci biljnog podrijetla</p>
    <h2 class="nds-h2 nds-c">Jedna <em>snažna formula</em></h2>
    <div class="nds-ingr">
      <?php foreach ( $nds_ingr as $g ) : ?>
      <article class="nds-ingr__card">
        <div class="nds-ingr__img"><?php echo $nds_img( $g['img'], $g['h'] ); ?></div>
        <p class="nds-ingr__h"><?php echo esc_html( $g['h'] ); ?></p>
        <p class="nds-ingr__t"><strong>Nalazi se u:</strong> <?php echo esc_html( $g['gdje'] ); ?></p>
        <p class="nds-ingr__t"><strong>Prednosti:</strong> <?php echo esc_html( $g['zasto'] ); ?></p>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- 10) KAKO KORISTITI -->
<section class="nds-sec<?php echo $nds_cls(); ?>">
  <div class="nds-wrap">
    <div class="nds-row2">
      <div class="nds-media"><?php echo $nds_video( 'nds-v-upotreba-hr.mp4', 'nds-v-upotreba-poster.webp', 'Kako koristiti NORIKS DishSheets', 'nds-vid--tall' ); ?></div>
      <div class="nds-copy">
        <p class="nds-kicker">Kako koristiti</p>
        <h2 class="nds-h3">Tri koraka <em>do čistog posuđa</em></h2>
        <ol class="nds-steps">
          <?php foreach ( $nds_steps as $k => $s ) : ?>
          <li><span class="nds-step__n"><?php echo (int) ( $k + 1 ); ?></span><span><strong><?php echo esc_html( $s[0] ); ?></strong><?php echo esc_html( $s[1] ); ?></span></li>
          <?php endforeach; ?>
        </ol>
      </div>
    </div>
  </div>
</section>

<!-- 11) KOMENTARI OBITELJI -->
<section class="nds-sec<?php echo $nds_cls(); ?>">
  <div class="nds-wrap">
    <p class="nds-kicker nds-c">Iskustva kupaca</p>
    <h2 class="nds-h2 nds-c">Komentari obitelji <em>koje su prešle na listiće</em></h2>
    <p class="nds-c nds-lead">Obitelji vole koliko su jednostavni, učinkoviti i bezbrižni za svakodnevno čišćenje. Stvarni rezultati, manje nereda i puno više povjerenja u ono što ide u svako pranje.</p>
    <div class="nds-reviews nds-reviews--fb">
      <?php foreach ( $nds_comments as $r ) : ?>
      <article class="nds-card">
        <p class="nds-card__name"><?php echo esc_html( $r['ime'] ); ?></p>
        <p class="nds-card__txt"><?php echo esc_html( $r['tekst'] ); ?></p>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- 12) NORIKS POGOJI — namesto garancije konkurenta -->
<section class="nds-sec<?php echo $nds_cls(); ?>">
  <div class="nds-wrap">
    <div class="nds-row2 nds-row2--rev">
      <div class="nds-media nds-media--sq"><?php echo $nds_img( 'nds-g01-kutija.webp', 'NORIKS DishSheets listići za pranje posuđa' ); ?></div>
      <div class="nds-copy">
        <p class="nds-kicker">Bez rizika</p>
        <h2 class="nds-h3">Pravo na povrat <em>u roku od 30 dana</em></h2>
        <p>Stojimo iza svakog NORIKS proizvoda. Ako niste potpuno zadovoljni svojim novim listićima za pranje posuđa, javite nam se u roku od <strong>30 dana</strong> od primitka narudžbe i pomoći ćemo vam. Bez stresa i bez komplikacija — samo proizvodi koji rade onako kako trebaju.</p>
        <p>Narudžbu šaljemo brzo, a platiti možete i <strong>pouzećem</strong>. Za narudžbe iznad 70 € dostava je besplatna.</p>
        <p class="nds-trust"><span>Pravo na povrat u roku od 30 dana</span><span>Besplatna dostava za narudžbe iznad 70 €</span><span>Plaćanje pouzećem</span></p>
      </div>
    </div>
  </div>
</section>

<!-- 13) RECENZIJE KUPACA -->
<section class="nds-sec<?php echo $nds_cls(); ?>">
  <div class="nds-wrap">
    <p class="nds-kicker nds-c">Recenzije kupaca</p>
    <h2 class="nds-h2 nds-c">Što kažu <em>naši kupci</em></h2>
    <p class="nds-c nds-lead">Kupci hvale listiće zbog učinkovitog čišćenja, ugodnog mirisa i ambalaže bez plastike — posuđe izlazi čisto i sjajno, bez ostataka kemikalija.</p>
    <div class="nds-score">
      <span class="nds-score__num">4,7</span>
      <?php echo $nds_stars( 5 ); ?>
      <span class="nds-score__txt">Na temelju 1081 recenzije</span>
    </div>
    <div class="nds-reviews">
      <?php foreach ( $nds_reviews as $r ) : ?>
      <article class="nds-card">
        <?php echo $nds_stars( $r['z'] ); ?>
        <p class="nds-card__h"><?php echo esc_html( $r['h'] ); ?></p>
        <p class="nds-card__txt"><?php echo esc_html( $r['tekst'] ); ?></p>
        <p class="nds-card__name"><?php echo esc_html( $r['ime'] ); ?> <span class="nds-ok">✓ Potvrđena kupnja</span></p>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<style>
/* NORIKS stil (predloga why-hands.php / why-catfountain.php): oznaka + naslov z ležečim poudarkom, slika/video ob
   besedilu, izmenjujoča ozadja. Poudarek: temno modra z embalaže izdelka (#1f568e), topla rumenkasta ozadja. */
.nds-sec { padding: 60px 0; font-family: 'Poppins', system-ui, -apple-system, 'Segoe UI', Roboto, Arial, sans-serif; color: #172433; background: #fff; }
.nds-sec * { box-sizing: border-box; }
.nds-tint { background: #fbf7e6; }
.nds-wrap { width: 100%; max-width: 1200px; margin: 0 auto; padding: 0 24px; }
.nds-c { text-align: center; }
.nds-sec h2, .nds-sec h3 { font-family: inherit; text-transform: none; letter-spacing: 0; }
.nds-kicker, .nds-copy p.nds-kicker { font-size: 12.5px; line-height: 1.4; font-weight: 700; letter-spacing: .14em; text-transform: uppercase; color: #1f568e; margin: 0 0 10px; }
.nds-h2 { font-weight: 700; font-size: clamp(25px, 3.1vw, 36px); line-height: 1.2; margin: 0 0 14px; color: #172433; }
.nds-h2 em, .nds-h3 em { font-style: italic; color: #1f568e; }
.nds-h3 { font-weight: 700; font-size: clamp(22px, 2.6vw, 30px); line-height: 1.25; margin: 0 0 16px; color: #172433; }
.nds-lead { font-size: 16.5px; line-height: 1.6; color: #45505c; max-width: 760px; margin: 0 auto 32px; }
.nds-sec img { display: block; width: 100%; height: auto; }

/* slika/video ob besedilu */
.nds-row2 { display: grid; grid-template-columns: 1fr 1fr; gap: 56px; align-items: center; }
.nds-row2--rev .nds-media { order: 2; }
.nds-media img { object-fit: cover; border-radius: 10px; box-shadow: 0 2px 4px rgba(15,35,60,.05), 0 14px 40px rgba(15,35,60,.10); }
.nds-media--sq img { aspect-ratio: 1 / 1; max-width: 540px; margin: 0 auto; }
.nds-media--port img { aspect-ratio: 59 / 94; max-width: 400px; margin: 0 auto; }
.nds-copy p { font-size: 16px; line-height: 1.7; color: #45505c; margin: 0 0 14px; }
.nds-copy p strong { color: #172433; font-weight: 600; }
.nds-copy p.nds-big { font-size: 19px; font-weight: 700; color: #172433; line-height: 1.45; margin-top: 6px; }
.nds-copy p.nds-sub { font-size: 15px; font-weight: 700; color: #1f568e; margin: 18px 0 6px; text-transform: uppercase; letter-spacing: .06em; }
.nds-points { list-style: none; margin: 0 0 16px; padding: 0; }
.nds-points li { font-size: 16px; line-height: 1.6; color: #45505c; margin: 0 0 10px; display: flex; gap: 12px; align-items: flex-start; }
.nds-points li strong { color: #172433; font-weight: 600; }
.nds-dot { flex: 0 0 22px; width: 22px; height: 22px; border-radius: 50%; background: #1f568e; color: #fff; font-size: 12px; font-weight: 800; line-height: 22px; text-align: center; margin-top: 2px; }
.nds-copy p.nds-chips { display: flex; flex-wrap: wrap; gap: 8px; margin: 4px 0 16px; }
.nds-chips span { border: 1.5px solid #1f568e; color: #1f568e; border-radius: 999px; padding: 5px 14px; font-size: 14px; font-weight: 600; background: #fff; }
.nds-packs { display: grid; grid-template-columns: repeat(3, 1fr); gap: 10px; margin: 4px 0 6px; }
.nds-packs span { background: #fff; border: 1px solid #e6dfc3; border-radius: 10px; padding: 10px 8px; text-align: center; font-size: 14px; color: #45505c; }
.nds-packs strong { display: block; color: #1f568e; font-size: 15.5px; }

/* videi */
.nds-vid { position: relative; overflow: hidden; background: #ece6cf; border-radius: 10px; margin: 0 auto; box-shadow: 0 2px 4px rgba(15,35,60,.05), 0 14px 40px rgba(15,35,60,.10); }
.nds-vid video { display: block; width: 100%; height: 100%; object-fit: cover; }
.nds-vid--sq { aspect-ratio: 1 / 1; max-width: 540px; }
.nds-vid--tall { aspect-ratio: 9 / 16; max-width: 340px; }
.nds-vid--ba { aspect-ratio: 480 / 748; }
.nds-trio { display: grid; grid-template-columns: repeat(3, minmax(0, 1fr)); gap: 10px; }

/* usporedba */
.nds-cmp { width: 100%; border-collapse: collapse; margin: 6px 0 8px; font-size: 15px; background: #fff; border-radius: 10px; overflow: hidden; }
.nds-cmp th { font-size: 12.5px; font-weight: 700; color: #fff; padding: 10px 6px; text-align: center; background: #1f568e; line-height: 1.3; }
.nds-cmp th:first-child { text-align: left; padding-left: 12px; }
.nds-cmp td { padding: 10px 8px; border-bottom: 1px solid #ece6cf; color: #2c3742; font-weight: 600; font-size: 14px; }
.nds-cmp td:first-child { padding-left: 12px; }
.nds-cmp td.nds-yes, .nds-cmp td.nds-no, .nds-cmp td.nds-price { text-align: center; font-weight: 800; font-size: 17px; width: 21%; }
.nds-cmp td.nds-price { font-size: 14px; }
.nds-cmp td.nds-our { background: #f3f8e9; }
.nds-cmp td.nds-yes { color: #2f9e5f; }
.nds-cmp td.nds-no { color: #c0392b; }

/* sastojci */
.nds-ingr { display: grid; grid-template-columns: repeat(3, minmax(0, 1fr)); gap: 22px; margin-top: 26px; }
.nds-ingr__card { background: #fff; border: 1px solid #ece6cf; border-radius: 10px; padding: 22px 22px 18px; text-align: center; }
.nds-ingr__img { width: 112px; height: 112px; margin: 0 auto 14px; border-radius: 50%; overflow: hidden; }
.nds-sec .nds-ingr__img img { width: 100%; height: 100%; object-fit: cover; }
.nds-ingr__h { font-size: 18px; font-weight: 700; color: #1f568e; margin: 0 0 8px; }
.nds-ingr__t { font-size: 14.5px; line-height: 1.6; color: #45505c; margin: 0 0 6px; }
.nds-ingr__t strong { color: #172433; }

/* koraki */
.nds-steps { list-style: none; margin: 0; padding: 0; }
.nds-steps li { display: flex; gap: 14px; align-items: flex-start; margin: 0 0 16px; font-size: 15.5px; line-height: 1.6; color: #45505c; }
.nds-steps li strong { display: block; color: #172433; font-size: 16.5px; margin-bottom: 2px; }
.nds-step__n { flex: 0 0 34px; width: 34px; height: 34px; border-radius: 50%; background: #1f568e; color: #fff; font-weight: 700; font-size: 16px; line-height: 34px; text-align: center; }

/* mnenja */
.nds-stars { color: #f2a516; letter-spacing: 1px; font-size: 15px; }
.nds-stars__off { color: #e6dfc8; }
.nds-score { display: flex; justify-content: center; align-items: center; gap: 12px; margin: 0 0 28px; flex-wrap: wrap; }
.nds-score__num { font-size: 30px; font-weight: 700; color: #172433; }
.nds-score .nds-stars { font-size: 20px; }
.nds-score__txt { font-size: 14.5px; color: #66707a; }
.nds-reviews { display: grid; grid-template-columns: repeat(3, minmax(0, 1fr)); gap: 18px; align-items: start; }
.nds-reviews--fb { grid-template-columns: repeat(4, minmax(0, 1fr)); }
.nds-card { background: #fff; border: 1px solid #ece6cf; border-radius: 10px; padding: 18px 18px 16px; }
.nds-reviews--fb .nds-card { background: #f3f5f8; border-color: #e3e8ee; border-radius: 16px; }
.nds-card__h { font-size: 15.5px; font-weight: 700; color: #172433; margin: 8px 0 6px; }
.nds-card__txt { font-size: 14.5px; line-height: 1.6; color: #2c3742; margin: 0 0 10px; }
.nds-reviews--fb .nds-card__txt { margin: 0; }
.nds-card__name { font-size: 14px; font-weight: 600; color: #172433; margin: 0; }
.nds-reviews--fb .nds-card__name { margin: 0 0 6px; }
.nds-ok { color: #2f9e5f; font-weight: 600; font-size: 12.5px; margin-left: 4px; }

/* NORIKS pogoji */
.nds-trust { display: flex; flex-wrap: wrap; gap: 10px 22px; margin: 18px 0 0 !important; font-size: 14px !important; font-weight: 600; color: #66707a !important; }
.nds-trust span { position: relative; padding-left: 20px; }
.nds-trust span::before { content: "\2713"; position: absolute; left: 0; color: #1f568e; }

@media (max-width: 989px) {
  .nds-reviews, .nds-reviews--fb { grid-template-columns: repeat(2, minmax(0, 1fr)); }
  .nds-row2 { gap: 32px; }
  .nds-ingr { grid-template-columns: 1fr; max-width: 520px; margin-left: auto; margin-right: auto; }
}
@media (max-width: 749px) {
  .nds-sec { padding: 42px 0; }
  .nds-wrap { padding: 0 16px; }
  .nds-row2 { grid-template-columns: 1fr; gap: 24px; }
  .nds-row2--rev .nds-media { order: 0; }
  .nds-reviews, .nds-reviews--fb { grid-template-columns: 1fr; gap: 14px; }
  .nds-trio { gap: 6px; }
  .nds-cmp th { font-size: 11px; }
  .nds-cmp td { font-size: 13px; }
}

/* galerija izdelka: sličice največ v 2 vrstah (5 na vrsto), ostale slike so dosegljive z drsenjem glavne slike */
.product_cat-orto-dishsheets .flex-control-thumbs li:nth-child(n+11) { display: none !important; }

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
.woocommerce-product-details__short-description .nds-tick {
  position: absolute !important; left: 0 !important; top: 1px !important;
  width: 21px; height: 21px; border-radius: 50%;
  background: #2f9e5f !important; color: #fff !important;
  font-size: 12px !important; font-weight: 800 !important; line-height: 21px !important;
  text-align: center !important; display: inline-block !important; }
.woocommerce-product-details__short-description p:first-of-type { font-size: 16px; line-height: 1.55; }
</style>
