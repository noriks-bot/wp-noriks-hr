<?php
/**
 * product-bottom: NORIKS SculptBrief — oblikujuće gaćice visokog struka s 360° križnim pojasom (orto-sculptbrief).
 * Original: saybeam.com/products/saybeam-sculpt-brief — vsebina in vrstni red 1:1 z originalom,
 * oblika po NORIKS stilu (predloga why-hands.php / why-fleecetights.php), barvni poudarek magenta (#a3336b):
 *   1) "What moms are saying" (6 mnenj iz nakupne škatle) -> Što kažu mame
 *   2) "Made to wear and forget" (video iz nakupne škatle) -> Napravljene da ih zaboravite (video ob besedilu)
 *   3) "Loved by 50,000+ women" (6 videov kupk + 2 mnenji) -> Vole ih tisuće žena (videi ob besedilu)
 *   4) "Why it actually works" (3 vrstice z videom) -> Zašto stvarno djeluju (izmenično video/besedilo)
 *   5) "Not all shapewear works the same way" (2 sliki + seznama + bengkung) -> Usporedba (sliki ob seznamih)
 *   6) "Real Bodies. Real Confidence." (10 mnenj s fotografijami) -> Prava tijela, pravo samopouzdanje
 *   7) "Love It or Your Money Back" (90 dni) -> NORIKS pogoji (30 dana za povrat, dostava iznad 70 €)
 * Izpusceno: glava, tekoci trak, gumbi "Get My Sculpt Brief", "LIMITED STOCK", noga, e-posta konkurenta.
 * Stevilke konkurenta (50.000+) zamenjane: 1081 recenzija (tema). FAQ (iz nakupne škatle + sekcije FAQ, 13)
 * je v reviews.php ($sculptbrief_faq), mnenja tudi v auto_reviews/HR_sculptbrief.php.
 * Slike/videi: img/sculptbrief/ (z originala, brez tuje znamke; videi brez zvoka, brez govora in napisov).
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$nsb      = get_template_directory_uri() . '/img/sculptbrief/';
$nsb_path = get_template_directory() . '/img/sculptbrief/';
$nsb_img  = function( $file, $alt, $cls = '' ) use ( $nsb, $nsb_path ) {
  if ( ! $file || ! file_exists( $nsb_path . $file ) ) { return ''; }
  return '<img src="' . esc_url( $nsb . $file ) . '" alt="' . esc_attr( $alt ) . '"' . ( $cls ? ' class="' . esc_attr( $cls ) . '"' : '' ) . ' loading="eager">';
};
$nsb_video = function( $name, $label, $cls = '' ) use ( $nsb, $nsb_path ) {
  $file = $name . '.mp4'; $poster = $name . '-poster.webp';
  if ( ! file_exists( $nsb_path . $file ) ) { return ''; }
  return '<div class="nsb-vid' . ( $cls ? ' ' . esc_attr( $cls ) : '' ) . '"><video src="' . esc_url( $nsb . $file ) . '" poster="' . esc_url( $nsb . $poster ) . '"'
    . ' muted autoplay loop playsinline preload="metadata" aria-label="' . esc_attr( $label ) . '"></video></div>';
};
$nsb_stars = function( $n ) {
  return '<span class="nsb-stars" aria-label="' . (int) $n . ' od 5 zvjezdica">' . str_repeat( '★', (int) $n ) . '<span class="nsb-stars__off">' . str_repeat( '★', 5 - (int) $n ) . '</span></span>';
};
$nsb_allowed = array( 'strong' => array(), 'em' => array() );

/* 1) Što kažu mame — 6 mnenj iz nakupne škatle originala */
$nsb_moms = array(
  array( 'ime' => 'Ana M., 36', 'z' => 5, 'naslov' => 'Svi su mislili da sam trudna. Više ne.',
    'tekst' => 'Najmlađe dijete ima dvije godine, a mene su i dalje pitali »kad je termin«. Mislila sam da je to samo salo koje ne želi otići. Bili su to trbušni mišići, razmaknuti u trudnoći i nikad zatvoreni. Ove gaćice drže cijelu stijenku, 360°, i <strong>za otprilike dva tjedna trbuh se uvukao i prestao stršati prema naprijed.</strong> Struk mi se vratio, a traperice se zakopčavaju bez borbe. Stvarno djeluje i žao mi je što nisam znala prije nekoliko godina.',
    'kada' => '2 mjeseca' ),
  array( 'ime' => 'Renata P., 40', 'z' => 5, 'naslov' => 'Nabor iznad ožiljka od carskog reza napokon je nestao',
    'tekst' => 'Nakon carskog reza ostao mi je onaj prevjes koji nijedna dijeta ni vježba nisu riješile, a liječnik je samo rekao »dajte tome vremena«. Bez obzira je li ožiljak nizak ili okomit, ove gaćice uvuku cijelo područje i nježno ga drže točno iznad linije ožiljka. <strong>Nakon nekoliko tjedana nabor se izravnao i vratio mi se trbuh od prije bebe.</strong> Ovo je prava promjena, a ne filter. Mekane, prozračne i sigurne nakon carskog reza. Plakala sam kad sam obukla stare traperice.',
    'kada' => '6 tjedana' ),
  array( 'ime' => 'Maja T., 35', 'z' => 5, 'naslov' => 'Pet centimetara manje u struku, a zaboravim da ih nosim',
    'tekst' => 'Mamin trbuščić bio je jedino što se nije micalo, što god radila. <strong>Do kraja prvog tjedna struk mi je bio otprilike pet centimetara manji</strong>, a odjeća labavija. Tanke su i prozračne, pa iskreno zaboravim da ih nosim, a ispod uske haljine potpuno su nevidljive. Osam sati na nogama, bez linija, bez smotavanja i bez namještanja u kupaonici.',
    'kada' => '1 mjesec' ),
  array( 'ime' => 'Sandra L., 41', 'z' => 5, 'naslov' => 'Nakon djece i histerektomije napokon nešto drži',
    'tekst' => 'Nakon troje djece i histerektomije donji dio trbuha se promijenio i ništa ga nije držalo tako da mi bude ugodno. Ove gaćice obuhvaćaju cijeli trup, 360°, a nigdje se ne urezuju blizu ožiljka. <strong>Za nekoliko tjedana trbuh je bio vidno ravniji i ostaje ravan cijeli dan.</strong> Mekane, bešavne i ni jednom se nisu smotale. Napokon nešto što stvarno radi ono što su drugi obećavali, a nikad ispunili. Sad ih nosim svaki dan.',
    'kada' => '5 tjedana' ),
  array( 'ime' => 'Jelena R., 39', 'z' => 5, 'naslov' => 'Fizioterapeutkinja mi je izmjerila razmak. Napokon se smanjio.',
    'tekst' => 'Mjesecima sam radila fizioterapiju zbog dijastaze, gotovo bez promjene. Počela sam ih nositi cijeli dan uz vježbe i <strong>oko trećeg tjedna razmak se prvi put stvarno smanjio. Fizioterapeutkinja ga je izmjerila i pitala što sam promijenila.</strong> Drže stijenku zatvorenom, pa trud napokon daje rezultat, a ni jednom se nisu smotale. To mi je bio dokaz. Već sam kupila drugi par.',
    'kada' => '7 tjedana' ),
  array( 'ime' => 'Dubravka H., 52', 'z' => 4, 'naslov' => 'Dvadeset godina i troje djece kasnije — uvjerena',
    'tekst' => 'Dvadeset godina sam od zadnjeg poroda, imam troje djece i bacila sam novac na pojaseve i steznike koji nisu ništa napravili, pa sam i u ovo sumnjala — a još sam naručila krivu veličinu. Javila sam se i bez komplikacija su mi pomogli oko zamjene za pravu veličinu. <strong>Ostaju na mjestu cijeli dan i trbuh je vidno ravniji</strong>, a otišlo je i kilo-dva. Ipak nije bilo prekasno. Četiri zvjezdice samo zato što bih voljela da bež dolazi u više nijansi.',
    'kada' => '6 tjedana' ),
);

/* 3) Vole ih tisuće žena — 2 mnenji ob videih kupk */
$nsb_loved = array(
  array( 'ime' => 'Nina R., 37', 'z' => 5, 'naslov' => 'Ravno ispod svega',
    'tekst' => 'Najmlađe dijete ima tri godine, a ljudi su me i dalje pitali čekam li bebu. Dva tjedna kasnije trbuščić je jednostavno nestao ispod odjeće.' ),
  array( 'ime' => 'Andrea T., 44', 'z' => 4, 'naslov' => 'Napokon ostaju na mjestu',
    'tekst' => 'Svako oblikujuće rublje koje sam probala smotalo se do ručka. Ove obuhvaćaju cijeli opseg i nikad se ne pomaknu. Ako ste između veličina, uzmite veću.' ),
);

/* 4) Zašto stvarno djeluju — 3 vrstice z videom */
$nsb_works = array(
  array( 'v' => 'sb-video-ravan', 'cls' => 'nsb-vid--sq', 'st' => '01', 'k' => 'Čim ih obučete', 'h' => 'Ravniji trbuh, <em>odmah.</em>',
    'p' => 'Visoki struk obuhvaća trbuh i struk nježnom, ciljanom kompresijom, pa glađu, oblikovaniju liniju vidite čim ih obučete. Bez stezanja. Bez štipanja. Bez nelagode.' ),
  array( 'v' => 'sb-video-ispod', 'cls' => 'nsb-vid--tall', 'st' => '02', 'k' => 'Nevidljive ispod svega', 'h' => 'Nestaju <em>ispod odjeće.</em>',
    'p' => 'Bešavni rubovi znače bez linija, bez tragova i bez izbočine koja odaje oblikujuće rublje. Uska haljina, uske traperice, tajice — jednostavno nestanu. Samo glatka, prirodna linija koja i dalje izgleda kao vi.' ),
  array( 'v' => 'sb-video-nevidljive', 'cls' => 'nsb-vid--wide', 'st' => '03', 'k' => 'Drže cijeli dan', 'h' => 'Nikad se ne smotaju. <em>Nikad.</em>',
    'p' => 'Mekana, prozračna tkanina prianja uz tijelo i ostaje točno ondje gdje ste je namjestili. Bez smotavanja, bez klizanja, bez namještanja u kupaonici. Obucite ih ujutro i zaboravite na njih do večeri.' ),
);

/* 5) usporedba 1:1 */
$nsb_cmp_no  = array( 'Steže samo prednji dio trbuha', 'Smotava se i klizi kako dan odmiče', 'Ocrtava se kroz odjeću', 'Učinak nestaje čim ga skinete' );
$nsb_cmp_yes = array( '<strong>Potpuna potpora od 360°</strong>: sprijeda, sa strane i straga', 'Osjećaj kao obične svakodnevne gaćice', 'Skrivene ispod svega što nosite', 'Vidljiva razlika za 2 do 3 tjedna' );

/* 6) Prava tijela — 10 mnenj s fotografijami */
$nsb_real = array(
  array( 'f' => 'sb-r01.webp', 'ime' => 'Petra N., 30', 'z' => 5, 'kada' => 'prije 1 mjesec', 'tekst' => 'Mama nakon carskog reza. Nježne su preko ožiljka, ali stvarno sve drže, cijelim opsegom, ne samo sprijeda. Bež je potpuno nevidljiva ispod poslovne odjeće.' ),
  array( 'f' => 'sb-r02.webp', 'ime' => 'Dragica M., 46', 'z' => 5, 'kada' => 'prije 2 mjeseca', 'tekst' => 'Četvero djece i odustala sam od toga da mi se trbuh ikad vrati. Ove drže cijelo područje, cijelim opsegom, i tri tjedna kasnije struk mi se stvarno vraća. Uzela sam fuksiju.' ),
  array( 'f' => 'sb-r03.webp', 'ime' => 'Romana H., 32', 'z' => 5, 'kada' => 'prije 6 tjedana', 'tekst' => 'Većina oblikujućeg rublja mi se urezuje ili ne seže dovoljno visoko. Ravnala sam se prema opsegu struka umjesto uobičajene veličine i savršene su — zaglađuju struk, a ne guše. Jedine koje sad nosim.' ),
  array( 'f' => 'sb-r04.webp', 'ime' => 'Marija K., 33', 'z' => 5, 'kada' => 'prije 6 tjedana', 'tekst' => 'Tri godine nakon poroda, a ljudi su me i dalje pitali čekam li bebu. Dva tjedna kasnije trbuščić je nestao ispod odjeće — stvarno sam se rasplakala. Bež nestaje ispod uske haljine.' ),
  array( 'f' => 'sb-r05.webp', 'ime' => 'Helena R., 32', 'z' => 5, 'kada' => 'prije 1 mjesec', 'tekst' => 'Nosila sam tamnoplave ispod uske haljine osam sati — nula linija i nula namještanja u kupaonici. Struk je izgledao savršeno, a cijelu večer mi je bilo udobno. To se nikad ne događa.' ),
  array( 'f' => 'sb-r06.webp', 'ime' => 'Klara B., 29', 'z' => 4, 'kada' => 'prije 3 tjedna', 'tekst' => 'Izmjerite struk i ravnajte se po tablici, nemojte pogađati prema uobičajenoj veličini kao ja prvi put. Kad sam pogodila veličinu, ovo je najudobnije držanje koje imam — sve zagladi, a zaboravim da ih nosim.' ),
  array( 'f' => 'sb-r07.webp', 'ime' => 'Ema S., 36', 'z' => 4, 'kada' => 'prije 4 tjedna', 'tekst' => 'Rade točno ono što piše — cijeli dan drže mamin trbuščić i ispod ničega se ne vide. Nisu pet zvjezdica samo zato što bih voljela više boja. Nosim ih svaki dan.' ),
  array( 'f' => 'sb-r08.webp', 'ime' => 'Daniela V., 37', 'z' => 5, 'kada' => 'prije 7 tjedana', 'tekst' => 'Dvoje djece i donji dio trbuha nikad se nije vratio. Ovo je jedino što ga drži ravnim cijeli dan bez smotavanja i štipanja. Prvo sam uzela šljivu, a već sam naručila još dvije boje.' ),
  array( 'f' => 'sb-r09.webp', 'ime' => 'Jasna P., 34', 'z' => 5, 'kada' => 'prije 5 tjedana', 'tekst' => 'Ujutro mi je trbuh bio ravan, a navečer ispupčen, svaki dan. Ove ga drže od jutra do večeri, bez smotavanja. Iskreno, voljela bih da sam ih našla prije dvije godine.' ),
  array( 'f' => 'sb-r10.webp', 'ime' => 'Gabrijela R., 33', 'z' => 5, 'kada' => 'prije 1 mjesec', 'tekst' => 'Nikad to nije bilo salo, nego razmak nakon dvije bebe koji ništa nije riješilo. Ovo je prvo što ga stvarno uvuče. Ravno čim ih obučem i tako ostaje cijeli dan.' ),
);
?>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap">

<!-- 1) ŠTO KAŽU MAME — 6 mnenj (iz nakupne škatle originala) -->
<section class="nsb-sec nsb-tint">
  <div class="nsb-wrap">
    <p class="nsb-kicker nsb-c">Što kažu mame</p>
    <h2 class="nsb-h2 nsb-c">Pravi rezultati, <em>prave mame</em></h2>
    <div class="nsb-moms">
      <?php foreach ( $nsb_moms as $r ) : ?>
      <article class="nsb-card nsb-card--txt">
        <div class="nsb-card__top">
          <span class="nsb-avatar" aria-hidden="true"><?php echo esc_html( substr( $r['ime'], 0, 1 ) ); ?></span>
          <div><p class="nsb-card__name"><?php echo esc_html( $r['ime'] ); ?> <span class="nsb-ok" aria-label="potvrđena kupnja">✓</span></p><?php echo $nsb_stars( $r['z'] ); ?></div>
        </div>
        <h3 class="nsb-card__h">„<?php echo esc_html( $r['naslov'] ); ?>”</h3>
        <p class="nsb-card__txt"><?php echo wp_kses( $r['tekst'], $nsb_allowed ); ?></p>
        <p class="nsb-card__meta">Potvrđena kupnja · <?php echo esc_html( $r['kada'] ); ?></p>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- 2) NAPRAVLJENE DA IH ZABORAVITE — video ob besedilu -->
<section class="nsb-sec">
  <div class="nsb-wrap">
    <div class="nsb-row2">
      <div class="nsb-media"><?php echo $nsb_video( 'sb-video-drzi', 'NORIKS SculptBrief ostaju na mjestu od jutra do večeri', 'nsb-vid--wide' ); ?></div>
      <div class="nsb-copy">
        <p class="nsb-kicker">Napravljene da ih zaboravite</p>
        <h2 class="nsb-h3">Obucite ih <em>i zaboravite.</em></h2>
        <ul class="nsb-points">
          <li><span class="nsb-dot" aria-hidden="true">✓</span><div><strong>Nevidljive ispod odjeće</strong><br>Bešavni rubovi, bez izbočina i linija. Nestaju ispod haljina, traperica i tajica.</div></li>
          <li><span class="nsb-dot" aria-hidden="true">✓</span><div><strong>Na mjestu od jutra do večeri</strong><br>Mekane i prozračne, prilagode se vašem tijelu i nikad se ne smotaju niti nabiru.</div></li>
        </ul>
        <p class="nsb-big">Obucite ih ujutro i zaboravite na njih.</p>
      </div>
    </div>
  </div>
</section>

<!-- 3) VOLE IH TISUĆE ŽENA — videi kupk ob besedilu -->
<section class="nsb-sec nsb-tint">
  <div class="nsb-wrap">
    <div class="nsb-row2 nsb-row2--rev nsb-row2--top">
      <div class="nsb-media">
        <div class="nsb-ugc">
          <?php for ( $n = 1; $n <= 6; $n++ ) { echo $nsb_video( 'sb-ugc-' . $n, 'Video kupca ' . $n . ' — NORIKS SculptBrief', 'nsb-vid--tall' ); } ?>
        </div>
      </div>
      <div class="nsb-copy">
        <p class="nsb-kicker">Videi kupaca</p>
        <h2 class="nsb-h3">Vole ih <em>tisuće žena</em></h2>
        <p>Prave mame, prava tijela i iskreni dojmovi — pogledajte kako NORIKS SculptBrief izgledaju uživo, u svih šest boja.</p>
        <?php foreach ( $nsb_loved as $r ) : ?>
        <div class="nsb-quote">
          <?php echo $nsb_stars( $r['z'] ); ?>
          <p class="nsb-quote__h"><?php echo esc_html( $r['naslov'] ); ?></p>
          <p class="nsb-quote__t">„<?php echo esc_html( $r['tekst'] ); ?>”</p>
          <p class="nsb-quote__who"><?php echo esc_html( $r['ime'] ); ?></p>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>

<!-- 4) ZAŠTO STVARNO DJELUJU — tri vrstice, video ob besedilu (izmenično) -->
<section class="nsb-sec">
  <div class="nsb-wrap">
    <p class="nsb-kicker nsb-c">Zašto stvarno djeluju</p>
    <h2 class="nsb-h2 nsb-c">Napravljene da savršeno rade <em>tri stvari.</em></h2>
    <?php foreach ( $nsb_works as $i => $w ) : ?>
    <div class="nsb-row2 nsb-row2--step<?php echo ( $i % 2 ) ? ' nsb-row2--rev' : ''; ?>">
      <div class="nsb-media nsb-media--vid"><?php echo $nsb_video( $w['v'], wp_strip_all_tags( $w['k'] ) . ' — NORIKS SculptBrief', $w['cls'] ); ?></div>
      <div class="nsb-copy">
        <span class="nsb-num"><?php echo esc_html( $w['st'] ); ?></span>
        <p class="nsb-kicker"><?php echo esc_html( $w['k'] ); ?></p>
        <h3 class="nsb-h3"><?php echo wp_kses( $w['h'], $nsb_allowed ); ?></h3>
        <p><?php echo esc_html( $w['p'] ); ?></p>
      </div>
    </div>
    <?php endforeach; ?>
  </div>
</section>

<!-- 5) USPOREDBA — sliki ob seznamih -->
<section class="nsb-sec nsb-tint">
  <div class="nsb-wrap">
    <p class="nsb-kicker nsb-c">Usporedba</p>
    <h2 class="nsb-h2 nsb-c">Nije svako oblikujuće rublje <em>isto.</em></h2>
    <div class="nsb-row2 nsb-row2--step">
      <div class="nsb-media nsb-media--cmp"><?php echo $nsb_img( 'sb-obicno.webp', 'Obični pojas za trbuh steže samo sprijeda' ); ?></div>
      <div class="nsb-copy">
        <p class="nsb-kicker nsb-kicker--grey">Obično oblikujuće rublje</p>
        <ul class="nsb-list nsb-list--no">
          <?php foreach ( $nsb_cmp_no as $c ) : ?><li><span class="nsb-x" aria-hidden="true">✕</span><?php echo esc_html( $c ); ?></li><?php endforeach; ?>
        </ul>
      </div>
    </div>
    <div class="nsb-row2 nsb-row2--step nsb-row2--rev">
      <div class="nsb-media nsb-media--cmp"><?php echo $nsb_img( 'sb-noriks.webp', 'NORIKS SculptBrief — 360° križni pojas obuhvaća trbuh sprijeda, sa strane i straga' ); ?></div>
      <div class="nsb-copy">
        <p class="nsb-kicker">NORIKS SculptBrief</p>
        <ul class="nsb-list">
          <?php foreach ( $nsb_cmp_yes as $c ) : ?><li><span class="nsb-dot" aria-hidden="true">✓</span><span><?php echo wp_kses( $c, $nsb_allowed ); ?></span></li><?php endforeach; ?>
        </ul>
        <p class="nsb-note"><strong>Inspirirane malezijskim bengkungom:</strong> tehnikom kompresijskog omatanja koja se stoljećima koristi kako bi nakon poroda pridržala i poduprla trbušnu stijenku.</p>
      </div>
    </div>
  </div>
</section>

<!-- 6) PRAVA TIJELA, PRAVO SAMOPOUZDANJE — 10 mnenj s fotografijami -->
<section class="nsb-sec">
  <div class="nsb-wrap">
    <p class="nsb-rate nsb-c"><span class="nsb-stars">★★★★★</span> Ocjena 4,8/5 · 1081 recenzija</p>
    <h2 class="nsb-h2 nsb-c">Prava tijela. <em>Pravo samopouzdanje.</em></h2>
    <p class="nsb-trust nsb-trust--c"><span>1081 recenzija</span><span>Pravo na povrat u roku od 30 dana</span><span>Besplatna dostava za narudžbe iznad 70 €</span></p>
    <div class="nsb-real">
      <?php foreach ( $nsb_real as $r ) : ?>
      <article class="nsb-card">
        <div class="nsb-card__photo"><?php echo $nsb_img( $r['f'], 'Kupac s NORIKS SculptBrief gaćicama — ' . $r['ime'] ); ?></div>
        <div class="nsb-card__body">
          <?php echo $nsb_stars( $r['z'] ); ?>
          <p class="nsb-card__name"><?php echo esc_html( $r['ime'] ); ?> <span class="nsb-ok">✓ Potvrđena kupnja</span></p>
          <p class="nsb-card__txt"><?php echo esc_html( $r['tekst'] ); ?></p>
          <p class="nsb-card__meta">Potvrđena kupnja · <?php echo esc_html( $r['kada'] ); ?></p>
        </div>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- 7) NORIKS POGOJI (namesto »Love It or Your Money Back«, 90 dni) -->
<section class="nsb-sec nsb-tint">
  <div class="nsb-wrap nsb-narrow nsb-c">
    <p class="nsb-kicker">Bez rizika</p>
    <h2 class="nsb-h2">Obožavat ćete ih — <em>ili ih vratite</em></h2>
    <p class="nsb-lead">Toliko smo sigurni da će NORIKS SculptBrief promijeniti način na koji se osjećate u svojoj odjeći da vam dajemo vremena da se sami uvjerite. Nosite ih, i ako ne vidite glađu, ravniju liniju ili vam jednostavno ne odgovaraju, imate <strong>pravo na povrat u roku od 30 dana</strong>.</p>
    <p class="nsb-trust nsb-trust--c"><span>Pravo na povrat u roku od 30 dana</span><span>Besplatna dostava za narudžbe iznad 70 €</span><span>Plaćanje pouzećem</span></p>
  </div>
</section>

<style>
/* NORIKS stil (predloga why-hands.php / why-fleecetights.php): oznaka + naslov z ležečim poudarkom, slika/video ob
   besedilu, izmenjujoča ozadja. Barvni poudarek magenta kot original (#a3336b, kot NORIKS Slim). */
.nsb-sec { padding: 60px 0; font-family: 'Poppins', system-ui, -apple-system, 'Segoe UI', Roboto, Arial, sans-serif; color: #2b1622; background: #fff; }
.nsb-sec * { box-sizing: border-box; }
.nsb-tint { background: #fbf3f6; }
.nsb-wrap { width: 100%; max-width: 1200px; margin: 0 auto; padding: 0 24px; }
.nsb-narrow { max-width: 820px; }
.nsb-c { text-align: center; }
.nsb-sec h2, .nsb-sec h3 { font-family: inherit; text-transform: none; letter-spacing: 0; }
.nsb-kicker, .nsb-copy p.nsb-kicker { font-size: 12.5px; line-height: 1.4; font-weight: 700; letter-spacing: .14em; text-transform: uppercase; color: #a3336b; margin: 0 0 10px; }
.nsb-copy p.nsb-kicker--grey { color: #8a7a82; }
.nsb-h2 { font-weight: 700; font-size: clamp(25px, 3.1vw, 36px); line-height: 1.2; margin: 0 0 28px; color: #2b1622; }
.nsb-h2 em, .nsb-h3 em { font-style: italic; color: #a3336b; }
.nsb-h3 { font-weight: 700; font-size: clamp(22px, 2.6vw, 30px); line-height: 1.25; margin: 0 0 16px; color: #2b1622; }
.nsb-sec img { display: block; width: 100%; height: auto; }

/* slika/video ob besedilu */
.nsb-row2 { display: grid; grid-template-columns: 1fr 1fr; gap: 56px; align-items: center; }
.nsb-row2--top { align-items: start; }
.nsb-row2--step + .nsb-row2--step { margin-top: 48px; }
.nsb-row2--rev .nsb-media { order: 2; }
.nsb-media img { aspect-ratio: 4 / 5; object-fit: cover; border-radius: 10px; box-shadow: 0 2px 4px rgba(58,20,40,.05), 0 14px 40px rgba(58,20,40,.10); }
.nsb-copy p { font-size: 16px; line-height: 1.7; color: #574650; margin: 0 0 14px; }
.nsb-copy p strong { color: #2b1622; font-weight: 600; }
.nsb-copy p.nsb-big { font-size: 19px; font-weight: 700; color: #2b1622; line-height: 1.45; margin-top: 6px; }
.nsb-points, .nsb-list { list-style: none; margin: 0 0 16px; padding: 0; }
.nsb-points li, .nsb-list li { font-size: 16px; line-height: 1.6; color: #574650; margin: 0 0 12px; display: flex; gap: 12px; align-items: flex-start; }
.nsb-points li strong, .nsb-list li strong { color: #2b1622; font-weight: 600; }
.nsb-dot, .nsb-x { flex: 0 0 22px; width: 22px; height: 22px; border-radius: 50%; background: #a3336b; color: #fff; font-size: 12px; font-weight: 800; line-height: 22px; text-align: center; margin-top: 2px; }
.nsb-x { background: #e9dfe3; color: #8a7a82; }
.nsb-list--no li { color: #6f6168; }
.nsb-num { display: inline-block; font-size: 15px; font-weight: 700; color: #fff; background: #a3336b; border-radius: 999px; padding: 3px 12px; margin: 0 0 12px; }
.nsb-note { font-size: 14.5px !important; line-height: 1.6 !important; background: #fff; border-left: 3px solid #a3336b; border-radius: 6px; padding: 12px 14px; margin-top: 10px !important; }

/* videi */
.nsb-vid { position: relative; overflow: hidden; background: #f1e3ea; border-radius: 10px; box-shadow: 0 2px 4px rgba(58,20,40,.05), 0 14px 40px rgba(58,20,40,.10); }
.nsb-vid video { display: block; width: 100%; height: 100%; object-fit: cover; }
.nsb-vid--wide { aspect-ratio: 4 / 3; }
.nsb-vid--sq { aspect-ratio: 1 / 1; }
.nsb-vid--tall { aspect-ratio: 9 / 16; }
.nsb-media--cmp img { max-width: 440px; margin: 0 auto; }
.nsb-media--vid .nsb-vid--tall { max-width: 380px; margin: 0 auto; }
.nsb-media--vid .nsb-vid--sq { max-width: 520px; margin: 0 auto; }
.nsb-ugc { display: grid; grid-template-columns: repeat(3, minmax(0, 1fr)); gap: 12px; }
.nsb-ugc .nsb-vid { box-shadow: none; }

/* mnenja */
.nsb-stars { color: #f2a516; letter-spacing: 1px; font-size: 15px; }
.nsb-stars__off { color: #e3d7dc; }
.nsb-moms { display: grid; grid-template-columns: repeat(3, minmax(0, 1fr)); gap: 18px; align-items: start; }
.nsb-card { background: #fff; border: 1px solid #efdfe7; border-radius: 10px; overflow: hidden; }
.nsb-card--txt { padding: 18px 18px 16px; }
.nsb-card__top { display: flex; gap: 12px; align-items: center; margin: 0 0 10px; }
.nsb-avatar { flex: 0 0 42px; width: 42px; height: 42px; border-radius: 50%; background: #f6e4ec; color: #a3336b; font-weight: 700; font-size: 17px; line-height: 42px; text-align: center; }
.nsb-card__name { font-size: 14.5px; font-weight: 600; color: #2b1622; margin: 0; }
.nsb-ok { color: #2f9e5f; font-weight: 600; font-size: 12.5px; }
.nsb-card__h { font-size: 16.5px !important; font-weight: 700; line-height: 1.35; margin: 0 0 8px; color: #2b1622; }
.nsb-card__txt { font-size: 14.5px; line-height: 1.6; color: #4a3a43; margin: 0 0 10px; }
.nsb-card__txt strong { color: #2b1622; font-weight: 600; }
.nsb-card__meta { font-size: 12.5px; color: #8a7a82; margin: 0; }
.nsb-real { display: grid; grid-template-columns: repeat(5, minmax(0, 1fr)); gap: 16px; align-items: start; }
.nsb-card__photo img { aspect-ratio: 4 / 5; object-fit: cover; }
.nsb-card__body { padding: 12px 14px 14px; }
.nsb-card__body .nsb-card__name { margin: 4px 0 8px; }
.nsb-card__body .nsb-ok { display: block; font-size: 12px; }
.nsb-real .nsb-card__txt { font-size: 14px; }
.nsb-rate { font-size: 14px; font-weight: 600; color: #574650; margin: 0 0 8px; }
.nsb-quote { background: #fff; border: 1px solid #efdfe7; border-radius: 10px; padding: 14px 16px; margin: 0 0 12px; }
.nsb-copy .nsb-quote__h { font-weight: 700; color: #2b1622; margin: 4px 0 4px; font-size: 16px; }
.nsb-copy .nsb-quote__t { font-size: 15px; line-height: 1.6; margin: 0 0 6px; }
.nsb-copy .nsb-quote__who { font-size: 13px; color: #8a7a82; margin: 0; font-weight: 600; }

/* NORIKS pogoji */
.nsb-lead { font-size: 16.5px; line-height: 1.7; color: #574650; margin: 0 0 14px; }
.nsb-lead strong { color: #2b1622; }
.nsb-trust { display: flex; flex-wrap: wrap; gap: 10px 22px; margin: 18px 0 0; font-size: 14px !important; font-weight: 600; color: #6b5a63 !important; }
.nsb-trust--c { justify-content: center; margin: 0 0 26px; }
.nsb-narrow .nsb-trust--c { margin: 18px 0 0; }
.nsb-trust span { position: relative; padding-left: 20px; }
.nsb-trust span::before { content: "\2713"; position: absolute; left: 0; color: #a3336b; }

@media (max-width: 989px) {
  .nsb-real { grid-template-columns: repeat(3, minmax(0, 1fr)); }
  .nsb-moms { grid-template-columns: repeat(2, minmax(0, 1fr)); }
  .nsb-row2 { gap: 32px; }
}
@media (max-width: 749px) {
  .nsb-sec { padding: 42px 0; }
  .nsb-wrap { padding: 0 16px; }
  .nsb-row2 { grid-template-columns: 1fr; gap: 24px; }
  .nsb-row2--rev .nsb-media { order: 0; }
  .nsb-moms { grid-template-columns: 1fr; gap: 14px; }
  .nsb-real { grid-template-columns: repeat(2, minmax(0, 1fr)); gap: 10px; }
  .nsb-ugc { gap: 8px; }
  .nsb-row2--step + .nsb-row2--step { margin-top: 36px; }
}

/* galerija izdelka: sličice največ v 2 vrstah (5 na vrsto), ostale slike so dosegljive z drsenjem glavne slike */
.product_cat-orto-sculptbrief .flex-control-thumbs li:nth-child(n+11) { display: none !important; }
</style>
