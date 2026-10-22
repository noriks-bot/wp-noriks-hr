<?php
/**
 * product-bottom: NORIKS CatFountain — fontana za mačke od nehrđajućeg čelika 2,2 L (orto-catfountain).
 * Original: kittyspout.com/products/2-2l-fountain — vsebina in vrstni red 1:1 z originalom,
 * oblika po NORIKS stilu (predloga why-hands.php / why-smartjacket.php), privzeta topla rjava paleta (#a9683f):
 *   1)  zavihek "What's in the Box?"          -> Što je u kutiji (slika ob besedilu)
 *   2)  zavihek "How The Filters Work?"       -> Kako rade filtri (besedilo ob sliki)
 *   3)  zavihek "Specifications"              -> Specifikacije (slika ob besedilu)
 *   4)  "See What Proper Hydration Does for Cats" (7 videov kupcev) -> videi ob besedilu (utišani, hrvaški podnapisi)
 *   5)  "Science Doesn't Lie"                 -> Znanost ne laže (3 podatki, slika ob besedilu)
 *   6)  "Why 770k+ Cat Parents Switched"      -> Zašto vlasnici mačaka prelaze (6 prednosti, brez števila konkurenta)
 *   7)  "KittySpout vs Plastic Cat Fountains" -> NORIKS fontana ili plastična fontana (tabela ob slikah)
 *   8)–11) "The Easiest Way to Improve Your Cat's Health & Happiness" (4 lastnosti, slika ob besedilu, izmenično)
 *   12) "Loved by Thousands of Cat Parents"   -> Recenzije kupaca (5 mnenj, 1081 recenzij)
 *   13) "Ready to Improve Your Cat's Hydration?" + zavihek "Shipping Information" -> zaključek z NORIKS pogoji
 * Izpusceno: glava, odštevalnik in "4 Free Gifts" (darila), mnenja veterinarjev znamke konkurenta, naročnina na filtre,
 * lepljivi CTA, tekoči trak, noga. Znamka konkurenta odstranjena iz besedil, slik in videov; številke konkurenta
 * (770k+, 96 %, Trustpilot 4,3 / 9.996) zamenjane ali izpuščene. FAQ (12) je v reviews.php ($catfountain_faq),
 * mnenja tudi v auto_reviews/HR_catfountain.php. Slike/videi: img/catfountain/ (ncf-…).
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$ncf      = get_template_directory_uri() . '/img/catfountain/';
$ncf_path = get_template_directory() . '/img/catfountain/';
$ncf_img  = function( $file, $alt ) use ( $ncf, $ncf_path ) {
  if ( ! $file || ! file_exists( $ncf_path . $file ) ) { return ''; }
  return '<img src="' . esc_url( $ncf . $file ) . '" alt="' . esc_attr( $alt ) . '" loading="lazy">';
};
$ncf_video = function( $name, $label ) use ( $ncf, $ncf_path ) {
  $file = $name . '-hr.mp4'; $poster = $name . '-poster.webp';
  if ( ! file_exists( $ncf_path . $file ) ) { return ''; }
  return '<div class="ncf-vid"><video src="' . esc_url( $ncf . $file ) . '" poster="' . esc_url( $ncf . $poster ) . '"'
    . ' muted autoplay loop playsinline preload="metadata" aria-label="' . esc_attr( $label ) . '"></video></div>';
};
$ncf_stars = function( $n ) {
  return '<span class="ncf-stars" aria-label="' . (int) $n . ' od 5 zvjezdica">' . str_repeat( '★', (int) $n ) . '<span class="ncf-stars__off">' . str_repeat( '★', 5 - (int) $n ) . '</span></span>';
};
$ncf_kses = array( 'strong' => array(), 'em' => array(), 'br' => array() );

/* 1)–3) zavihki iz nakupne škatle originala — slika ob besedilu */
$ncf_tabs = array(
  array( 'img' => 'ncf-g10-u-kutiji.webp', 'alt' => 'NORIKS CatFountain fontana 2,2 L s filtrima', 'k' => 'Što je u kutiji?',
    'h' => 'Sve što trebate <em>za svježu vodu</em>',
    'p' => array(),
    'list' => array(
      '<strong>1x NORIKS CatFountain fontana 2,2 L:</strong> fontana od nehrđajućeg čelika koja budi prirodni nagon vaše mačke da pije više',
      '<strong>1x filtri za 2 mjeseca:</strong> filtri s aktivnim ugljenom koji smanjuju dlake, ostatke, mirise i nečistoće za stalno čistu vodu',
      '<strong>1x adapter za napajanje:</strong> spreman za upotrebu',
      '<strong>1x upute za upotrebu:</strong> jednostavno postavljanje korak po korak, pa vaša mačka može uživati u fontani za nekoliko minuta',
    ),
    'big' => 'Raspakirajte, napunite, uključite — i to je to.' ),
  array( 'img' => 'ncf-g08-odozgo.webp', 'alt' => 'Pogled odozgo na NORIKS CatFountain s tekućom vodom', 'k' => 'Kako rade filtri?',
    'h' => 'Trostruko filtriranje <em>za čistu vodu cijeli dan</em>',
    'p' => array(
      'NORIKS CatFountain koristi <strong>sustav filtriranja s aktivnim ugljenom u 3 sloja</strong>, stvoren da voda vaše mačke cijeli dan ostane čista, svježa i pitka.',
      'Svaki filtar kombinira <strong>aktivni ugljen visoke gustoće</strong>, <strong>ionsku izmjenu</strong> i <strong>fino mehaničko filtriranje</strong> koji ciljaju uobičajene nečistoće iz vode iz slavine:',
    ),
    'list' => array(
      '<strong>Uklanja do 99,9 % klora</strong>, koji utječe na okus i može iritirati osjetljivu probavu',
      '<strong>Uklanja 95–98 % teških metala</strong> poput olova i bakra koji se s vremenom nakupljaju u tijelu',
      '<strong>Filtrira 90–95 % ostataka lijekova</strong> koji se često nalaze u gradskoj vodi',
      '<strong>Zadržava dlake, ostatke i talog</strong> prije nego što dođu do posude',
    ),
    'after' => 'Budući da se voda neprestano filtrira dok kruži, čista je tijekom cijelog dana, a ne samo odmah nakon punjenja. Da bi filtriranje bilo učinkovito, filtre redovito mijenjajte.',
    'big' => '' ),
  array( 'img' => 'ncf-g06-fontana.webp', 'alt' => 'NORIKS CatFountain fontana od nehrđajućeg čelika 304', 'k' => 'Specifikacije',
    'h' => 'Izrađena da traje <em>godinama</em>',
    'p' => array(),
    'list' => array(
      '<strong>Nehrđajući čelik 304</strong>, izrađen da traje godinama',
      '<strong>Bez BPA</strong>, siguran za mačke',
      'Može se prati u <strong>perilici posuđa</strong>',
      'Fontana s kabelom (napajanje preko adaptera)',
      'Jednostavno čišćenje',
      'Sustav filtriranja u 3 sloja s filtrom s aktivnim ugljenom i spužvom za predfiltriranje',
      'Filtre mijenjajte svaka 4 tjedna',
      'Kapacitet <strong>2,2 L</strong>, dovoljno vode za 8–10 dana',
      'Pokazivač razine vode',
      '<strong>Ultra tiha pumpa (&lt; 20 dB)</strong>, može raditi cijelu noć bez ometanja sna',
      'Dimenzije (D × Š × V): 17,5 × 17,5 × 17,5 cm',
    ),
    'big' => '' ),
);

/* 4) videi kupcev (utišani, hrvaški podnapisi) */
$ncf_videos = array(
  'ncf-v-jill'       => 'Iskustvo kupca — mačke piju više vode',
  'ncf-v-stevie'     => 'Kako fontana pomaže slijepom mačku Stevieju',
  'ncf-v-celik'      => 'Fontana od nehrđajućeg čelika — čišćenje i filtri',
  'ncf-v-iskustvo'   => 'Iskustvo kupca — tiha pumpa i kvaliteta izrade',
  'ncf-v-suki'       => 'Iskustvo kupca — potpuno tiha fontana',
  'ncf-v-tuna-sushi' => 'Dvije mačke piju iz fontane u obliku slavine',
  'ncf-v-zdjelica'   => 'Zamijenite zdjelicu fontanom',
);

/* 5) Znanost ne laže */
$ncf_stats = array(
  array( 'n' => 'do 3x', 'l' => 'više vode', 't' => 'Mačke piju i do 3x više vode kad im je na raspolaganju svježa tekuća voda.' ),
  array( 'n' => '60 %', 'l' => 'mačaka', 't' => 'Suočava se s većim rizikom za zdravlje mokraćnog sustava kad je dnevni unos vode nizak.' ),
  array( 'n' => '1 od 3', 'l' => 'mačke', 't' => 'Pati od bolesti bubrega koje su posljedica slabe hidracije.' ),
);

/* 6) prednosti */
$ncf_feats = array(
  array( 'Ultra tih rad', 'Tiha pumpa drži osjetljive mačke mirnima, pa piju opušteno.' ),
  array( 'Izrađena od nehrđajućeg čelika', 'Sprječava sluz, mirise i mačje akne koje uzrokuju plastične zdjelice.' ),
  array( 'Čišćenje za manje od 5 minuta', 'Jednostavni dijelovi brzo se isperu ili idu ravno u perilicu posuđa.' ),
  array( 'Hidracija po preporuci veterinara', 'Potiče redovito pijenje i dugoročno zdravlje bubrega.' ),
  array( 'Dugotrajan kapacitet vode', 'Manje dolijevanja, manje nadzora i svježija voda tijekom cijelog dana.' ),
  array( 'Mlaz u obliku slavine', 'Oponaša slavinu koju mačke već vole i potiče prirodno, često pijenje.' ),
);

/* 7) usporedba */
$ncf_cmp = array( 'Mlaz u obliku slavine', 'Prehrambeni nehrđajući čelik 304', 'Ultra tiha pumpa (&lt; 20 dB)', 'Ugrađeno filtriranje', 'Kapacitet 2,2 L', 'Jednostavno čišćenje i sastavljanje' );

/* 8)–11) štiri lastnosti, slika ob besedilu */
$ncf_rows = array(
  array( 'img' => 'ncf-s-bubrezi.webp', 'alt' => 'Mačka pije iz NORIKS CatFountain u dnevnom boravku', 'k' => 'Zdravlje uz podršku veterinarske struke',
    'h' => 'Smanjuje rizik od <em>problema s bubrezima i urinarnih infekcija</em>',
    'p' => 'Prema časopisu Journal of Veterinary Internal Medicine, jedan od najčešćih zdravstvenih problema mačaka je <strong>kronična bolest bubrega zbog slabe hidracije</strong>.',
    'list' => array( 'Mačke prirodno piju <strong>više iz tekuće vode</strong>', 'Bolja hidracija podržava <strong>zdravlje bubrega i mokraćnog sustava</strong>', 'Pomaže spriječiti <strong>dugoročne probleme povezane s hidracijom</strong>' ) ),
  array( 'img' => 'ncf-s-brkovi.webp', 'alt' => 'Crna mačka pije iz široke posude NORIKS CatFountain', 'k' => 'Širok dizajn prilagođen brkovima',
    'h' => 'Stvorena da ukloni <em>zamor brkova</em>',
    'p' => 'Mnoge zdjelice tjeraju mačku da osjetljivim brkovima dodiruje rubove, što može biti neugodno pa izbjegava piti. <strong>Široka i plitka posuda</strong> omogućuje mački da pije bez pritiska, pa joj je ugodno i pije dulje.',
    'list' => array( 'Široka površina za piće <strong>sprječava preopterećenje brkova</strong>', 'Smanjuje <strong>oklijevanje</strong> zbog uskih i dubokih zdjelica', 'Potiče <strong>dulje i češće</strong> pijenje' ) ),
  array( 'img' => 'ncf-s-tisa.webp', 'alt' => 'NORIKS CatFountain je tiša od mačjeg predenja — 25 dB', 'k' => 'Mlaz u obliku slavine',
    'h' => 'Potiče <em>prirodni nagon za pijenjem</em>',
    'p' => 'Mačke instinktivno više vole tekuću vodu. U divljini je tekuća voda bila sigurnija za piće od stajaće. Taj je nagon i danas duboko ukorijenjen — zato ih tekuća voda prirodno privlači.',
    'list' => array( 'Oponaša <strong>slavinu iz koje mačke ionako pokušavaju piti</strong>', 'Potiče <strong>ponovne posjete</strong> tijekom dana', 'Pomaže da pijenje postane <strong>redovita navika</strong>' ) ),
  array( 'img' => 'ncf-s-kapacitet.webp', 'alt' => 'Punjenje NORIKS CatFountain vodom iz vrča', 'k' => 'Velik kapacitet, malo održavanja',
    'h' => 'Do dva tjedna vode <em>po jednom punjenju</em>',
    'p' => 'Velik spremnik znači manje dolijevanja i manje svakodnevnog nadzora.',
    'list' => array( 'Dovoljno vode za <strong>8–10 dana</strong>', 'Idealno za <strong>užurbane dane</strong> ili kraća putovanja', 'Svježa voda <strong>uvijek dostupna</strong>' ) ),
);

/* 12) Recenzije kupaca — 5 mnenj z originala, števila po NORIKS (1081) */
$ncf_reviews = array(
  array( 'ime' => 'Marko B.', 'z' => 5, 'h' => 'Daleko bolja od plastičnih fontana', 'tekst' => 'Ova fontana je daleko bolja od plastičnih fontana za mačke. Filtri su odlični. Toplo preporučujem ovaj proizvod svima.' ),
  array( 'ime' => 'Robert N.', 'z' => 5, 'h' => 'Odličan uređaj', 'tekst' => 'Fontana se lako čisti, a voda je uvijek svježa i filtrirana. Nikad nam ne stvara nikakve probleme.' ),
  array( 'ime' => 'Ivana C.', 'z' => 5, 'h' => 'Odličan proizvod, brižna podrška', 'tekst' => 'Odlična korisnička podrška. Moj mačak obožava fontanu — kao i svaka mačka, voli slavinu. I sada pije više vode. Imala sam i druge fontane za mačke, ali ova je najbolja.' ),
  array( 'ime' => 'Renata K.', 'z' => 5, 'h' => 'Mačke stvarno vole tekuću vodu', 'tekst' => 'Mačke stvarno više vole tekuću vodu. Moja je uvijek htjela piti iz slavine u kuhinji. Sada može piti kad god poželi!!' ),
  array( 'ime' => 'Karolina Š.', 'z' => 5, 'h' => 'Napokon bolje i jednostavnije pojilo', 'tekst' => 'Stalno sam tražila bolje i jednostavnije pojilo za mačku. Narudžba je stigla u razumnom roku. Jednostavno se naručuje, jednostavno postavlja i jednostavno čisti. Javili su mi se i provjerili jesam li zadovoljna.' ),
);

$ncf_n = 0; // števec sekcij za izmenična ozadja
$ncf_cls = function() use ( &$ncf_n ) { $ncf_n++; return ( $ncf_n % 2 ) ? ' ncf-tint' : ''; };
?>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap">

<?php foreach ( $ncf_tabs as $i => $w ) : ?>
<!-- <?php echo (int) ( $i + 1 ); ?>) <?php echo esc_html( $w['k'] ); ?> -->
<section class="ncf-sec<?php echo $ncf_cls(); ?>">
  <div class="ncf-wrap">
    <div class="ncf-row2<?php echo ( $i % 2 ) ? ' ncf-row2--rev' : ''; ?>">
      <div class="ncf-media ncf-media--sq"><?php echo $ncf_img( $w['img'], $w['alt'] ); ?></div>
      <div class="ncf-copy">
        <p class="ncf-kicker"><?php echo esc_html( $w['k'] ); ?></p>
        <h2 class="ncf-h3"><?php echo wp_kses( $w['h'], $ncf_kses ); ?></h2>
        <?php foreach ( $w['p'] as $p ) : ?><p><?php echo wp_kses( $p, $ncf_kses ); ?></p><?php endforeach; ?>
        <?php if ( ! empty( $w['list'] ) ) : ?>
        <ul class="ncf-points">
          <?php foreach ( $w['list'] as $li ) : ?><li><span class="ncf-dot" aria-hidden="true">✓</span><span><?php echo wp_kses( $li, $ncf_kses ); ?></span></li><?php endforeach; ?>
        </ul>
        <?php endif; ?>
        <?php if ( ! empty( $w['after'] ) ) : ?><p><?php echo wp_kses( $w['after'], $ncf_kses ); ?></p><?php endif; ?>
        <?php if ( $w['big'] ) : ?><p class="ncf-big"><?php echo esc_html( $w['big'] ); ?></p><?php endif; ?>
      </div>
    </div>
  </div>
</section>
<?php endforeach; ?>

<!-- 4) VIDEI KUPACA — 7 videov ob besedilu -->
<section class="ncf-sec<?php echo $ncf_cls(); ?>">
  <div class="ncf-wrap">
    <div class="ncf-row2 ncf-row2--rev ncf-row2--vids">
      <div class="ncf-media">
        <div class="ncf-ugc">
          <?php foreach ( $ncf_videos as $vn => $vl ) { echo $ncf_video( $vn, $vl ); } ?>
        </div>
      </div>
      <div class="ncf-copy">
        <p class="ncf-kicker">Videi kupaca</p>
        <h2 class="ncf-h3">Pogledajte što pravilna hidracija <em>čini za mačke</em></h2>
        <p>Počnu piti više, više se igraju i općenito se bolje osjećaju.</p>
        <ul class="ncf-points">
          <li><span class="ncf-dot" aria-hidden="true">✓</span><span>Pomaže da vaša mačka pije <strong>i do 3x više vode</strong></span></li>
          <li><span class="ncf-dot" aria-hidden="true">✓</span><span>Nehrđajući čelik zaustavlja <strong>99 % bakterija</strong></span></li>
          <li><span class="ncf-dot" aria-hidden="true">✓</span><span><strong>Super tiha</strong> i čisti se za <strong>manje od 5 minuta</strong></span></li>
          <li><span class="ncf-dot" aria-hidden="true">✓</span><span>Smanjuje rizik od <strong>problema s bubrezima</strong> i <strong>urinarnih infekcija</strong></span></li>
        </ul>
        <p class="ncf-big">Svježa tekuća voda — danonoćno.</p>
      </div>
    </div>
  </div>
</section>

<!-- 5) ZNANOST NE LAŽE -->
<section class="ncf-sec<?php echo $ncf_cls(); ?>">
  <div class="ncf-wrap">
    <div class="ncf-row2">
      <div class="ncf-media ncf-media--port"><?php echo $ncf_img( 'ncf-s-statistika.webp', 'Mačka pije iz NORIKS CatFountain' ); ?></div>
      <div class="ncf-copy">
        <p class="ncf-kicker">Znanost ne laže</p>
        <h2 class="ncf-h3">Hidracija ima <em>velik utjecaj</em> na zdravlje mačke</h2>
        <div class="ncf-stats">
          <?php foreach ( $ncf_stats as $s ) : ?>
          <div class="ncf-stat">
            <p class="ncf-stat__n"><?php echo esc_html( $s['n'] ); ?> <span><?php echo esc_html( $s['l'] ); ?></span></p>
            <p class="ncf-stat__t"><?php echo esc_html( $s['t'] ); ?></p>
          </div>
          <?php endforeach; ?>
        </div>
        <p class="ncf-big">Isprobajte NORIKS CatFountain bez rizika — 30 dana za povrat.</p>
      </div>
    </div>
  </div>
</section>

<!-- 6) ZAŠTO VLASNICI MAČAKA PRELAZE — 6 prednosti -->
<section class="ncf-sec<?php echo $ncf_cls(); ?>">
  <div class="ncf-wrap">
    <div class="ncf-row2 ncf-row2--rev">
      <div class="ncf-media ncf-media--sq ncf-media--white"><?php echo $ncf_img( 'ncf-s-prednosti.webp', 'NORIKS CatFountain fontana od nehrđajućeg čelika s mlazom u obliku slavine' ); ?></div>
      <div class="ncf-copy">
        <p class="ncf-kicker">Zašto baš ova fontana</p>
        <h2 class="ncf-h3">Zašto vlasnici mačaka <em>prelaze na NORIKS CatFountain</em></h2>
        <p>Bez glasnih pumpi, bez nakupina u plastici i bez svakodnevne muke s održavanjem.</p>
        <div class="ncf-feats">
          <?php foreach ( $ncf_feats as $f ) : ?>
          <div class="ncf-feat"><p class="ncf-feat__h"><span class="ncf-dot" aria-hidden="true">✓</span><?php echo esc_html( $f[0] ); ?></p><p class="ncf-feat__t"><?php echo esc_html( $f[1] ); ?></p></div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- 7) USPOREDBA — NORIKS CatFountain ili plastične fontane -->
<section class="ncf-sec<?php echo $ncf_cls(); ?>">
  <div class="ncf-wrap">
    <div class="ncf-row2">
      <div class="ncf-media">
        <div class="ncf-duo">
          <figure><?php echo $ncf_img( 'ncf-g09-bijela.webp', 'NORIKS CatFountain fontana od nehrđajućeg čelika 2,2 L' ); ?><figcaption>NORIKS CatFountain 2,2 L</figcaption></figure>
          <figure><?php echo $ncf_img( 'ncf-s-plasticna.webp', 'Obična plastična fontana za mačke' ); ?><figcaption>Plastične fontane</figcaption></figure>
        </div>
      </div>
      <div class="ncf-copy">
        <p class="ncf-kicker">Usporedba</p>
        <h2 class="ncf-h3">NORIKS CatFountain <em>ili plastična fontana?</em></h2>
        <p>Otkrijte zašto mačke više vole NORIKS CatFountain od običnih fontana.</p>
        <table class="ncf-cmp">
          <thead><tr><th></th><th>NORIKS<br>CatFountain</th><th>Plastične<br>fontane</th></tr></thead>
          <tbody>
            <?php foreach ( $ncf_cmp as $c ) : ?>
            <tr><td><?php echo wp_kses( $c, $ncf_kses ); ?></td><td class="ncf-yes" aria-label="da">✓</td><td class="ncf-no" aria-label="ne">✕</td></tr>
            <?php endforeach; ?>
          </tbody>
        </table>
        <p class="ncf-big">Prijeđite na NORIKS CatFountain već danas.</p>
      </div>
    </div>
  </div>
</section>

<?php foreach ( $ncf_rows as $i => $w ) : ?>
<!-- <?php echo (int) ( $i + 8 ); ?>) <?php echo esc_html( $w['k'] ); ?> -->
<section class="ncf-sec<?php echo $ncf_cls(); ?>">
  <div class="ncf-wrap">
    <?php if ( 0 === $i ) : ?>
    <div class="ncf-intro">
      <h2 class="ncf-h2 ncf-c">Najjednostavniji način da poboljšate <em>zdravlje i sreću svoje mačke</em></h2>
      <p class="ncf-c ncf-lead">Jednostavna nadogradnja koja pomaže spriječiti dehidraciju i zdravstvene probleme koji s njom dolaze.</p>
    </div>
    <?php endif; ?>
    <div class="ncf-row2<?php echo ( $i % 2 ) ? '' : ' ncf-row2--rev'; ?>">
      <div class="ncf-media ncf-media--sq"><?php echo $ncf_img( $w['img'], $w['alt'] ); ?></div>
      <div class="ncf-copy">
        <p class="ncf-kicker"><?php echo esc_html( $w['k'] ); ?></p>
        <h2 class="ncf-h3"><?php echo wp_kses( $w['h'], $ncf_kses ); ?></h2>
        <p><?php echo wp_kses( $w['p'], $ncf_kses ); ?></p>
        <ul class="ncf-points">
          <?php foreach ( $w['list'] as $li ) : ?><li><span class="ncf-dot" aria-hidden="true">✓</span><span><?php echo wp_kses( $li, $ncf_kses ); ?></span></li><?php endforeach; ?>
        </ul>
      </div>
    </div>
  </div>
</section>
<?php endforeach; ?>

<!-- 12) RECENZIJE KUPACA -->
<section class="ncf-sec<?php echo $ncf_cls(); ?>">
  <div class="ncf-wrap">
    <p class="ncf-kicker ncf-c">Recenzije kupaca</p>
    <h2 class="ncf-h2 ncf-c">Vole je <em>tisuće vlasnika mačaka</em></h2>
    <p class="ncf-c ncf-lead">Pročitajte nekoliko recenzija i pogledajte što vlasnici mačaka kažu o NORIKS CatFountain.</p>
    <div class="ncf-score">
      <span class="ncf-score__num">4,9</span>
      <?php echo $ncf_stars( 5 ); ?>
      <span class="ncf-score__txt">Na temelju 1081 recenzije</span>
    </div>
    <div class="ncf-reviews">
      <?php foreach ( $ncf_reviews as $r ) : ?>
      <article class="ncf-card">
        <?php echo $ncf_stars( $r['z'] ); ?>
        <p class="ncf-card__h"><?php echo esc_html( $r['h'] ); ?></p>
        <p class="ncf-card__txt"><?php echo esc_html( $r['tekst'] ); ?></p>
        <p class="ncf-card__name"><?php echo esc_html( $r['ime'] ); ?> <span class="ncf-ok">✓ Potvrđena kupnja</span></p>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- 13) ZAKLJUČAK — NORIKS pogoji (namesto "4 Free Gifts" in "Shipping Information" konkurenta) -->
<section class="ncf-sec<?php echo $ncf_cls(); ?>">
  <div class="ncf-wrap">
    <div class="ncf-row2 ncf-row2--rev">
      <div class="ncf-media ncf-media--sq"><?php echo $ncf_img( 'ncf-g11-pije.webp', 'Mačka pije svježu vodu iz NORIKS CatFountain' ); ?></div>
      <div class="ncf-copy">
        <p class="ncf-kicker">Bez rizika</p>
        <h2 class="ncf-h3">Spremni poboljšati hidraciju svoje mačke? <em>Isprobajte bez rizika.</em></h2>
        <p><strong>Fontana 2,2 L + filtri za 2 mjeseca</strong> — sve što vaša mačka treba za svježu, filtriranu vodu od prvog dana.</p>
        <p>Narudžbu šaljemo brzo, a platiti možete i <strong>pouzećem</strong>. Za narudžbe iznad 70 € dostava je besplatna.</p>
        <p>Ako se vašoj mački fontana ne svidi, imate <strong>pravo na povrat u roku od 30 dana</strong> — javite nam se i pomoći ćemo vam.</p>
        <p class="ncf-trust"><span>Pravo na povrat u roku od 30 dana</span><span>Besplatna dostava za narudžbe iznad 70 €</span><span>Plaćanje pouzećem</span></p>
      </div>
    </div>
  </div>
</section>

<style>
/* NORIKS stil (predloga why-hands.php / why-smartjacket.php): oznaka + naslov z ležečim poudarkom, slika/video ob
   besedilu, izmenjujoča ozadja. Privzeta topla rjava paleta NORIKS (#a9683f). */
.ncf-sec { padding: 60px 0; font-family: 'Poppins', system-ui, -apple-system, 'Segoe UI', Roboto, Arial, sans-serif; color: #231d19; background: #fff; }
.ncf-sec * { box-sizing: border-box; }
.ncf-tint { background: #f7f2ec; }
.ncf-wrap { width: 100%; max-width: 1200px; margin: 0 auto; padding: 0 24px; }
.ncf-c { text-align: center; }
.ncf-sec h2, .ncf-sec h3 { font-family: inherit; text-transform: none; letter-spacing: 0; }
.ncf-kicker, .ncf-copy p.ncf-kicker { font-size: 12.5px; line-height: 1.4; font-weight: 700; letter-spacing: .14em; text-transform: uppercase; color: #a9683f; margin: 0 0 10px; }
.ncf-h2 { font-weight: 700; font-size: clamp(25px, 3.1vw, 36px); line-height: 1.2; margin: 0 0 14px; color: #231d19; }
.ncf-h2 em, .ncf-h3 em { font-style: italic; color: #a9683f; }
.ncf-h3 { font-weight: 700; font-size: clamp(22px, 2.6vw, 30px); line-height: 1.25; margin: 0 0 16px; color: #231d19; }
.ncf-lead { font-size: 16.5px; line-height: 1.6; color: #4f443d; max-width: 720px; margin: 0 auto 32px; }
.ncf-intro { margin: 0 0 40px; }
.ncf-intro .ncf-lead { margin-bottom: 0; }
.ncf-sec img { display: block; width: 100%; height: auto; }

/* slika/video ob besedilu */
.ncf-row2 { display: grid; grid-template-columns: 1fr 1fr; gap: 56px; align-items: center; }
.ncf-row2--rev .ncf-media { order: 2; }
.ncf-media img { object-fit: cover; border-radius: 10px; box-shadow: 0 2px 4px rgba(40,25,15,.05), 0 14px 40px rgba(40,25,15,.10); }
.ncf-media--sq img { aspect-ratio: 1 / 1; max-width: 540px; margin: 0 auto; }
.ncf-media--port img { aspect-ratio: 39 / 45; max-width: 480px; margin: 0 auto; }
.ncf-media--white img { object-fit: contain; background: #fff; }
.ncf-copy p { font-size: 16px; line-height: 1.7; color: #4f443d; margin: 0 0 14px; }
.ncf-copy p strong { color: #231d19; font-weight: 600; }
.ncf-copy p.ncf-big { font-size: 19px; font-weight: 700; color: #231d19; line-height: 1.45; margin-top: 6px; }
.ncf-points { list-style: none; margin: 0 0 16px; padding: 0; }
.ncf-points li { font-size: 16px; line-height: 1.6; color: #4f443d; margin: 0 0 10px; display: flex; gap: 12px; align-items: flex-start; }
.ncf-points li strong { color: #231d19; font-weight: 600; }
.ncf-dot { flex: 0 0 22px; width: 22px; height: 22px; border-radius: 50%; background: #a9683f; color: #fff; font-size: 12px; font-weight: 800; line-height: 22px; text-align: center; margin-top: 2px; }

/* videi */
.ncf-vid { position: relative; overflow: hidden; background: #ece3da; border-radius: 10px; aspect-ratio: 9 / 16; }
.ncf-vid video { display: block; width: 100%; height: 100%; object-fit: cover; }
.ncf-ugc { display: grid; grid-template-columns: repeat(8, minmax(0, 1fr)); gap: 10px; }
.ncf-ugc .ncf-vid { grid-column: span 2; }
.ncf-ugc .ncf-vid:nth-child(5) { grid-column: 2 / span 2; }

/* statistika */
.ncf-stats { display: grid; gap: 12px; margin: 4px 0 16px; }
.ncf-stat { background: #fff; border: 1px solid #ecdfd3; border-radius: 10px; padding: 14px 18px; }
.ncf-tint .ncf-stat { background: #fff; }
.ncf-copy p.ncf-stat__n { font-size: 28px; font-weight: 700; color: #a9683f; line-height: 1.1; margin: 0 0 4px; }
.ncf-copy p.ncf-stat__n span { font-size: 15px; font-weight: 600; color: #231d19; }
.ncf-copy p.ncf-stat__t { font-size: 15px; line-height: 1.55; margin: 0; }

/* prednosti */
.ncf-feats { display: grid; grid-template-columns: 1fr 1fr; gap: 14px 22px; margin-top: 6px; }
.ncf-copy p.ncf-feat__h { display: flex; gap: 10px; align-items: flex-start; font-weight: 700; color: #231d19; font-size: 15.5px; line-height: 1.4; margin: 0 0 4px; }
.ncf-copy p.ncf-feat__t { font-size: 14.5px; line-height: 1.55; margin: 0 0 0 32px; }

/* usporedba */
.ncf-duo { display: grid; grid-template-columns: 1fr 1fr; gap: 16px; }
.ncf-duo figure { margin: 0; background: #fff; border-radius: 10px; box-shadow: 0 2px 4px rgba(40,25,15,.05), 0 14px 40px rgba(40,25,15,.10); overflow: hidden; }
.ncf-duo img { aspect-ratio: 1 / 1; object-fit: contain; box-shadow: none; border-radius: 0; }
.ncf-duo figcaption { text-align: center; font-size: 14px; font-weight: 600; color: #231d19; padding: 10px 8px 14px; }
.ncf-cmp { width: 100%; border-collapse: collapse; margin: 6px 0 18px; font-size: 15px; background: #fff; border-radius: 10px; overflow: hidden; }
.ncf-cmp th { font-size: 13px; font-weight: 700; color: #231d19; padding: 10px 8px; text-align: center; background: #f1e6dc; line-height: 1.3; }
.ncf-cmp td { padding: 10px 8px; border-bottom: 1px solid #f0e6dd; color: #3a302a; }
.ncf-cmp td.ncf-yes, .ncf-cmp td.ncf-no { text-align: center; font-weight: 800; font-size: 17px; width: 26%; }
.ncf-cmp td.ncf-yes { color: #2f9e5f; }
.ncf-cmp td.ncf-no { color: #c0392b; }

/* mnenja */
.ncf-stars { color: #f2a516; letter-spacing: 1px; font-size: 15px; }
.ncf-stars__off { color: #e6dbd2; }
.ncf-score { display: flex; justify-content: center; align-items: center; gap: 12px; margin: 0 0 28px; flex-wrap: wrap; }
.ncf-score__num { font-size: 30px; font-weight: 700; color: #231d19; }
.ncf-score .ncf-stars { font-size: 20px; }
.ncf-score__txt { font-size: 14.5px; color: #6b625a; }
.ncf-reviews { display: grid; grid-template-columns: repeat(3, minmax(0, 1fr)); gap: 18px; align-items: start; }
.ncf-card { background: #fff; border: 1px solid #ecdfd3; border-radius: 10px; padding: 18px 18px 16px; }
.ncf-card__h { font-size: 15.5px; font-weight: 700; color: #231d19; margin: 8px 0 6px; }
.ncf-card__txt { font-size: 14.5px; line-height: 1.6; color: #3a302a; margin: 0 0 10px; }
.ncf-card__name { font-size: 14px; font-weight: 600; color: #231d19; margin: 0; }
.ncf-ok { color: #2f9e5f; font-weight: 600; font-size: 12.5px; margin-left: 4px; }

/* NORIKS pogoji */
.ncf-trust { display: flex; flex-wrap: wrap; gap: 10px 22px; margin: 18px 0 0 !important; font-size: 14px !important; font-weight: 600; color: #6b625a !important; }
.ncf-trust span { position: relative; padding-left: 20px; }
.ncf-trust span::before { content: "\2713"; position: absolute; left: 0; color: #a9683f; }

@media (max-width: 989px) {
  .ncf-reviews { grid-template-columns: repeat(2, minmax(0, 1fr)); }
  .ncf-row2 { gap: 32px; }
  .ncf-feats { grid-template-columns: 1fr; }
}
@media (max-width: 749px) {
  .ncf-sec { padding: 42px 0; }
  .ncf-wrap { padding: 0 16px; }
  .ncf-row2 { grid-template-columns: 1fr; gap: 24px; }
  .ncf-row2--rev .ncf-media { order: 0; }
  .ncf-reviews { grid-template-columns: 1fr; gap: 14px; }
  .ncf-ugc { gap: 6px; }
  .ncf-cmp { font-size: 14px; }
}

/* galerija izdelka: sličice največ v 2 vrstah (5 na vrsto), ostale slike so dosegljive z drsenjem glavne slike */
.product_cat-orto-catfountain .flex-control-thumbs li:nth-child(n+11) { display: none !important; }

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
.woocommerce-product-details__short-description .ncf-tick {
  position: absolute !important; left: 0 !important; top: 1px !important;
  width: 21px; height: 21px; border-radius: 50%;
  background: #2f9e5f !important; color: #fff !important;
  font-size: 12px !important; font-weight: 800 !important; line-height: 21px !important;
  text-align: center !important; display: inline-block !important; }
.woocommerce-product-details__short-description p:first-of-type { font-size: 16px; line-height: 1.55; }
</style>
