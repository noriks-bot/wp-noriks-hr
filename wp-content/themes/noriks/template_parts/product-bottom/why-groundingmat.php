<?php
/**
 * product-bottom: NORIKS GroundingMat — podloga za uzemljenje (orto-groundingmat).
 * Original: groundingwell.com/products/groundingwell-mat — vsebina in vrstni red 1:1 z originalom, oblika po NORIKS stilu
 * (predloga why-pillorganizer.php / why-seatcushion.php / why-hands.php), poudarek temno zelena po barvi originala (#2f6b3a).
 *   1) nakupna škatla: zavihek "How does it work?"         -> Kako funkcionira (ilustracija neuzemljeno/uzemljeno ob besedilu;
 *      zdravstvene trditve omiljene: brez seznama bolezni, »mnogi navajajo …«, 50,000+ -> tisuće, 90-day -> NORIKS 30 dana)
 *   2) zavihka "What's in the package?" + "Care instructions" -> Što je u paketu (slika z merami ob besedilu, EU adapter)
 *   3) "Ground Yourself & Feel Amazing Immediately"          -> utišan video meritve napetosti ob besedilu (napisa prevedena v HR,
 *      logotip GroundingWell na podlogi odstranjen)
 *   4) "How Does Grounding Improve Your Health?"             -> utišan 3D video ob besedilu, 4 vprašanja (trditve omiljene)
 *   5) "What the Science Says About Grounding"               -> termografska slika ob besedilu, 96 / 93 / 100 % z navedbo studije
 *   6) "How it works? Simple Steps …"                        -> 3 koraki s 3 utišanimi videi (logotipi na podlogi/vtiču odstranjeni)
 *   7) recenzije (1599, 87/13/0/0/0 %)                       -> 4,9 / 1081 z razdelitvijo, skalirano na 692 + 5 mnenj s fotografijami
 * Izpusceno: OCTOBER SALE pasica, »Save 50%«, BONUS nogavice, lažni FB komentar v nakupni škatli, »Need help?« z e-pošto,
 * pripomočki FrontrowMD (iframe) in ocene tretjih strani (Google/Trustpilot), izbirnik vtiča (za HR samo EU), noga trgovine.
 * FAQ je v reviews.php ($groundingmat_faq), mnenja v auto_reviews/HR_groundingmat.php, opis + nega v meta.php.
 * Slike: img/groundingmat/ (ngm-…).
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$ngm      = get_template_directory_uri() . '/img/groundingmat/';
$ngm_path = get_template_directory() . '/img/groundingmat/';
$ngm_img  = function( $file, $alt, $cls = '' ) use ( $ngm, $ngm_path ) {
  if ( ! $file || ! file_exists( $ngm_path . $file ) ) { return ''; }
  return '<img src="' . esc_url( $ngm . $file ) . '" alt="' . esc_attr( $alt ) . '" loading="lazy"' . ( $cls ? ' class="' . esc_attr( $cls ) . '"' : '' ) . '>';
};
$ngm_video = function( $file, $label ) use ( $ngm, $ngm_path ) {
  if ( ! file_exists( $ngm_path . $file ) ) { return ''; }
  $poster = preg_replace( '/(-hr)?\.mp4$/', '.webp', $file );
  return '<video src="' . esc_url( $ngm . $file ) . '"' . ( file_exists( $ngm_path . $poster ) ? ' poster="' . esc_url( $ngm . $poster ) . '"' : '' )
    . ' muted autoplay loop playsinline preload="metadata" aria-label="' . esc_attr( $label ) . '"></video>';
};
$ngm_stars = function( $n ) {
  $n = max( 0, min( 5, (int) $n ) );
  return '<span class="ngm-stars" aria-label="' . $n . ' od 5 zvjezdica">' . str_repeat( '★', $n ) . '<span class="ngm-stars__off">' . str_repeat( '★', 5 - $n ) . '</span></span>';
};

/* 2) paket + nega */
$ngm_paket = array(
  array( '1 × NORIKS GroundingMat', 'podloga 60 × 40 cm' ),
  array( '1 × kabel za uzemljenje', 'duljine 4,5 m' ),
  array( '1 × adapter za uzemljenje', 'za EU utičnice' ),
  array( '1 × upute za uporabu', '' ),
);
$ngm_njega = array(
  array( 'Čuvanje', 'podalje od izravne sunčeve svjetlosti' ),
  array( 'Čišćenje', 'po potrebi vlažnim maramicama bez alkohola' ),
);

/* 4) kako uzemljenje pomaže (vprašanja originala, trditve omiljene) */
$ngm_pitanja = array(
  array( 'Loše spavate?',
         'Uzemljenje pomaže uravnotežiti autonomni živčani sustav, koji upravlja otkucajima srca, probavom i ritmom spavanja. Potiče opuštanje mišića i smanjuje osjećaj stresa, pa mnogi korisnici lakše zaspu i mirnije spavaju.' ),
  array( 'Mišići su vam bolni i ukočeni?',
         'Uzemljenje može potaknuti bolju prokrvljenost, a s njom mišići i tkiva dobivaju više kisika i hranjivih tvari. Bolja cirkulacija pridonosi energiji, oporavku mišića i osjećaju olakšanja.' ),
  array( 'Umorni ste cijeli dan?',
         'Uzemljenje može podići razinu energije i smanjiti osjećaj umora. Mnogi korisnici kao prvu promjenu navode i bistriji um i bolju koncentraciju.' ),
  array( 'Osjećate stres i napetost?',
         'Uzemljenje potiče opuštanje i kvalitetniji san – a odmoreno i opušteno tijelo lakše se nosi sa stresom i napetošću.' ),
);

/* 5) znanost */
$ngm_brojke = array(
  array( '96 %', 'sudionika navodi da se uz podlogu osjećaju znatno opuštenije' ),
  array( '93 %', 'sudionika imalo je vidljive promjene na infracrvenim (termografskim) snimkama u studiji iz 2015. (Oschman, Brown i Chevalier)' ),
  array( '100 %', 'sudionika imalo je nakon 10 minuta uzemljenja bolju viskoznost krvi i manje nakupljanja krvnih stanica u studiji iz 2015. (Oschman, Brown i Chevalier)' ),
);

/* 6) koraki */
$ngm_koraci = array(
  array( 'ngm-s6-korak1.mp4', 'Korak 1', 'Kabel za uzemljenje pričvrstite na spojni klin podloge.' ),
  array( 'ngm-s6-korak2.mp4', 'Korak 2', 'Drugi kraj kabela uključite u priključak za uzemljenje utičnice (za EU utičnice uz adapter iz paketa).' ),
  array( 'ngm-s6-korak3.mp4', 'Korak 3', 'Dodirnite podlogu bilo kojim dijelom tijela i opustite se.' ),
);

/* 7) recenzije — 5 mnenj originala s fotografijami (imena lokalizirana, zdravstvene trditve izpuščene) */
$ngm_reviews = array(
  array( 'ime' => 'Jelena C.', 'img' => 'ngm-r1-macak.webp', 'naslov' => 'Odlična podloga!',
         'tekst' => 'Obožavam ovu podlogu! Koristim je stalno – dok radim u fotelji i pokraj kreveta dok gledam TV. Jako me opušta. A moj mačak leži na njoj kad god stigne.' ),
  array( 'ime' => 'Jasna L.', 'img' => 'ngm-r2-stopala.webp', 'naslov' => 'Bolje spavam',
         'tekst' => 'Bila sam skeptična, ali otkad se uzemljujem, spavam puno bolje. Da, preporučila bih ovaj proizvod. :)' ),
  array( 'ime' => 'Lina P.', 'img' => 'ngm-r3-macka.webp', 'naslov' => 'Odlična podloga za uzemljenje',
         'tekst' => 'Podlogu koristim već mjesec dana – i dečko i ja osjećamo razliku kad je koristimo, a obje naše mačke obožavaju ležati na njoj.' ),
  array( 'ime' => 'Mihael P.', 'img' => 'ngm-r4-stopala.webp', 'naslov' => 'Divna stvar',
         'tekst' => 'Razliku u stopalima i nogama osjetio sam već pri prvom korištenju. Sada mi je to svakodnevna rutina – dvaput dnevno.' ),
  array( 'ime' => 'Ana A.', 'img' => 'ngm-r5-fotelja.webp', 'naslov' => 'Volim svoju podlogu',
         'tekst' => 'Stoji ispred moje fotelje i koristim je svaki dan. Preporučujem je svima koji me posjete – san mi je dublji i mirniji.' ),
);
/* razdelitev ocen originala 1386 / 209 / 2 / 1 / 1 (od 1599) skalirana na 692 recenzij (NORIKS) */
$ngm_dist = array( 5 => 601, 4 => 90, 3 => 1, 2 => 0, 1 => 0 );

$ngm_n = 0; // števec sekcij za izmenična ozadja
$ngm_cls = function() use ( &$ngm_n ) { $ngm_n++; return ( $ngm_n % 2 ) ? ' ngm-tint' : ''; };
?>

<!-- 1) KAKO FUNKCIONIRA (zavihek nakupne škatle "How does it work?") — ilustracija ob besedilu -->
<section class="ngm-sec<?php echo $ngm_cls(); ?>">
  <div class="ngm-wrap">
    <div class="ngm-row2 ngm-row2--top">
      <div class="ngm-media"><?php echo $ngm_img( 'ngm-s1-kako-radi-hr.webp', 'Neuzemljeno i uzemljeno – rad za računalom uz podlogu NORIKS GroundingMat' ); ?></div>
      <div class="ngm-copy">
        <p class="ngm-kicker">Kako funkcionira</p>
        <h2 class="ngm-h2">Podloga koja vas <em>povezuje sa zemljom</em></h2>
        <p>NORIKS GroundingMat priključuje se izravno u <strong>priključak za uzemljenje utičnice</strong>. Taj je priključak potpuno siguran jer kroz njega ne teče struja – iza njega je samo vodljiva žica koja vodi ravno u zemlju.</p>
        <p>Kad koža dotakne vodljivu površinu podloge, vaše je tijelo <strong>izravno povezano sa zemljom</strong> – s istim električnim učinkom kao kad vani bosi dodirujete tlo.</p>
        <p>Električni naboj koji se na tijelu nakuplja od uređaja oko nas (mobitel, računalo, televizor, mikrovalna pećnica, slušalice, sušilo za kosu, električni automobil …) tada se odvodi natrag u zemlju, a tijelo se vraća u <strong>prirodnu električnu ravnotežu</strong>.</p>
        <p>Mnogi korisnici navode da se uz uzemljenje osjećaju opuštenije, bolje spavaju i imaju više energije – neke promjene primijete odmah, a druge s vremenom. Mnogi spominju i živopisnije snove dok spavaju uzemljeni.</p>
        <p>Priključak za uzemljenje izvorno postoji kako bi uređaje zaštitio od strujnog udara, pregrijavanja i požara: siguran put u zemlju odvodi štetan višak naboja. Ista logika vrijedi i za vaše tijelo – svaki njegov dio provodi električnu struju.</p>
        <p>Tisuće kupaca svoje iskustvo s uzemljenjem opisuju riječima »nevjerojatno« i »nisam mogao vjerovati«. Zvuči predobro da bi bilo istinito? Zato uz NORIKS imate <strong>pravo na povrat u roku od 30 dana</strong> – ako niste zadovoljni, jednostavno vratite podlogu.</p>
        <p class="ngm-big">Isprobajte bez rizika – 30 dana za povrat.</p>
      </div>
    </div>
  </div>
</section>

<!-- 2) ŠTO JE U PAKETU + NJEGA (zavihka "What's in the package?" / "Care instructions") — slika z merami ob besedilu -->
<section class="ngm-sec<?php echo $ngm_cls(); ?>">
  <div class="ngm-wrap">
    <div class="ngm-row2 ngm-row2--rev">
      <div class="ngm-media"><?php echo $ngm_img( 'ngm-s2-paket-hr.webp', 'NORIKS GroundingMat 60 × 40 cm s kabelom za uzemljenje od 4,5 m', 'ngm-img--free' ); ?></div>
      <div class="ngm-copy">
        <p class="ngm-kicker">Što je u paketu</p>
        <h2 class="ngm-h2">Raspakirajte <em>i odmah se uzemljite</em></h2>
        <ul class="ngm-check">
          <?php foreach ( $ngm_paket as $pk ) : ?>
          <li><strong><?php echo esc_html( $pk[0] ); ?></strong><?php echo $pk[1] ? ' – ' . esc_html( $pk[1] ) : ''; ?></li>
          <?php endforeach; ?>
        </ul>
        <p class="ngm-sub">Upute za održavanje</p>
        <dl class="ngm-specs">
          <?php foreach ( $ngm_njega as $sp ) : ?>
          <div><dt><?php echo esc_html( $sp[0] ); ?>:</dt><dd><?php echo esc_html( $sp[1] ); ?></dd></div>
          <?php endforeach; ?>
        </dl>
        <p class="ngm-big">Pravo na povrat u roku od 30 dana i besplatna dostava za narudžbe iznad 70 €.</p>
      </div>
    </div>
  </div>
</section>

<!-- 3) UZEMLJITE SE ("Ground Yourself & Feel Amazing Immediately") — utišan video ob besedilu -->
<section class="ngm-sec<?php echo $ngm_cls(); ?>">
  <div class="ngm-wrap">
    <div class="ngm-row2">
      <div class="ngm-media ngm-media--video"><?php echo $ngm_video( 'ngm-s3-napon-hr.mp4', 'Mjerenje napona tijela: neuzemljeno i uzemljeno na podlozi NORIKS GroundingMat' ); ?></div>
      <div class="ngm-copy">
        <p class="ngm-kicker">Uzemljenje</p>
        <h2 class="ngm-h2">Uzemljite se i <em>osjećajte se odlično</em></h2>
        <p>Uzemljenje je posvuda u našim životima. Električni uređaji na koje se svakodnevno oslanjamo mogli bi se pregrijati ili zapaliti kad ne bi bili uzemljeni, jer bi im nedostajala ravnoteža elektrona.</p>
        <p>Izvana se to ne vidi, ali i naše tijelo svakodnevno nakuplja višak naboja od uređaja oko nas – a kad nismo uzemljeni, <strong>taj naboj nema kamo otići</strong>.</p>
        <p>Kad se preko podloge NORIKS GroundingMat povežete sa zemljom, elektroni iz zemlje ulaze u tijelo i gotovo odmah neutraliziraju vanjske električne smetnje. Na videu pogledajte kako <strong>napon tijela pada</strong> čim ruka dotakne podlogu.</p>
        <p class="ngm-big">Dodirnite podlogu – i osjetite razliku.</p>
      </div>
    </div>
  </div>
</section>

<!-- 4) KAKO UZEMLJENJE POMAŽE ("How Does Grounding Improve Your Health?") — utišan video ob besedilu -->
<section class="ngm-sec<?php echo $ngm_cls(); ?>">
  <div class="ngm-wrap">
    <div class="ngm-row2 ngm-row2--rev ngm-row2--top">
      <div class="ngm-media ngm-media--video"><?php echo $ngm_video( 'ngm-s4-uzemljenje.mp4', 'Animacija: podloga NORIKS GroundingMat priključena na uzemljenje' ); ?></div>
      <div class="ngm-copy">
        <p class="ngm-kicker">Dobrobiti</p>
        <h2 class="ngm-h2">Kako uzemljenje <em>pomaže vašem tijelu?</em></h2>
        <?php foreach ( $ngm_pitanja as $q ) : ?>
        <div class="ngm-feat">
          <h3><?php echo esc_html( $q[0] ); ?></h3>
          <p><?php echo esc_html( $q[1] ); ?></p>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>

<!-- 5) ŠTO KAŽE ZNANOST ("What the Science Says About Grounding") — termografska slika ob besedilu -->
<section class="ngm-sec<?php echo $ngm_cls(); ?>">
  <div class="ngm-wrap">
    <div class="ngm-row2">
      <div class="ngm-media">
        <?php echo $ngm_img( 'ngm-s5-studija-hr.webp', 'Termografska snimka ruku prije i poslije 4 noći spavanja uz uzemljenje', 'ngm-img--free' ); ?>
        <p class="ngm-cap">Termografska snimka ruku prije i poslije 4 noći spavanja uz uzemljenje. Izvor: J. L. Oschman, »Can Electrons Act as Antioxidants? A Review and Commentary«.</p>
      </div>
      <div class="ngm-copy">
        <p class="ngm-kicker">Znanost</p>
        <h2 class="ngm-h2">Što znanost kaže <em>o uzemljenju</em></h2>
        <div class="ngm-stats">
          <?php foreach ( $ngm_brojke as $b ) : ?>
          <div class="ngm-stat"><span class="ngm-stat__num"><?php echo esc_html( $b[0] ); ?></span><span class="ngm-stat__txt"><?php echo esc_html( $b[1] ); ?></span></div>
          <?php endforeach; ?>
        </div>
        <p class="ngm-note">Na temelju recenziranih znanstvenih studija (stanje 2023.). Rezultati studija ne jamče isti učinak kod svakoga; podloga nije medicinski proizvod i ne zamjenjuje savjet liječnika.</p>
      </div>
    </div>
  </div>
</section>

<!-- 6) KAKO SE KORISTI ("How it works? Simple Steps for Maximum Grounding Benefits") — 3 koraki z utišanimi videi -->
<section class="ngm-sec<?php echo $ngm_cls(); ?>">
  <div class="ngm-wrap">
    <p class="ngm-kicker ngm-c">Kako se koristi?</p>
    <h2 class="ngm-h2 ngm-c">Jednostavni koraci <em>za najviše koristi</em></h2>
    <div class="ngm-steps">
      <?php foreach ( $ngm_koraci as $k ) : ?>
      <article class="ngm-step">
        <div class="ngm-step__vid"><?php echo $ngm_video( $k[0], $k[1] . ': ' . $k[2] ); ?></div>
        <div class="ngm-step__body">
          <span class="ngm-step__num"><?php echo esc_html( $k[1] ); ?></span>
          <p><?php echo esc_html( $k[2] ); ?></p>
        </div>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- 7) RECENZIJE KUPACA — 1081 po NORIKS + 5 mnenj originala s fotografijami -->
<section class="ngm-sec<?php echo $ngm_cls(); ?>">
  <div class="ngm-wrap">
    <p class="ngm-kicker ngm-c">Recenzije kupaca</p>
    <h2 class="ngm-h2 ngm-c">Što kažu oni <em>koji se uzemljuju</em></h2>
    <div class="ngm-score">
      <div class="ngm-score__left">
        <span class="ngm-score__num">4,9</span>
        <?php echo $ngm_stars( 5 ); ?>
        <span class="ngm-score__txt">Na temelju 1081 recenzije</span>
      </div>
      <div class="ngm-dist">
        <?php foreach ( $ngm_dist as $z => $c ) : ?>
        <div class="ngm-dist__row"><span><?php echo (int) $z; ?> ★</span><span class="ngm-dist__bar"><i style="width:<?php echo round( $c / 692 * 100, 1 ); ?>%"></i></span><span><?php echo (int) $c; ?></span></div>
        <?php endforeach; ?>
      </div>
    </div>
    <div class="ngm-reviews">
      <?php foreach ( $ngm_reviews as $r ) : ?>
      <article class="ngm-card">
        <div class="ngm-card__img"><?php echo $ngm_img( $r['img'], 'Fotografija kupca: ' . $r['ime'] ); ?></div>
        <div class="ngm-card__body">
          <?php echo $ngm_stars( 5 ); ?>
          <h3><?php echo esc_html( $r['naslov'] ); ?></h3>
          <p class="ngm-card__txt">„<?php echo esc_html( $r['tekst'] ); ?>”</p>
          <p class="ngm-card__name"><?php echo esc_html( $r['ime'] ); ?> <span class="ngm-ok">✓ Potvrđena kupnja</span></p>
        </div>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<style>
/* NORIKS stil (predloga why-pillorganizer.php / why-hands.php): oznaka + naslov z ležečim poudarkom, slika ali video ob
   besedilu, izmenjujoča ozadja in strani. Paleta po originalu (temno zelena): poudarek #2f6b3a, temno #1d2b20, svetlo #eef5ef. */
.ngm-sec { padding: 60px 0; font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Arial, sans-serif; color: #1d2b20; background: #fff; }
.ngm-sec * { box-sizing: border-box; }
.ngm-tint { background: #eef5ef; }
.ngm-wrap { width: 100%; max-width: 1200px; margin: 0 auto; padding: 0 24px; }
.ngm-c { text-align: center; }
.ngm-sec h2, .ngm-sec h3 { font-family: inherit; text-transform: none; letter-spacing: 0; }
.ngm-kicker, .ngm-copy p.ngm-kicker { font-size: 12.5px; line-height: 1.4; font-weight: 800; letter-spacing: .14em; text-transform: uppercase; color: #2f6b3a; margin: 0 0 10px; }
.ngm-h2 { font-weight: 800; font-size: clamp(25px, 3.1vw, 36px); line-height: 1.2; margin: 0 0 18px; color: #1d2b20; }
.ngm-h2 em { font-style: italic; color: #2f6b3a; }
.ngm-sec img { display: block; width: 100%; height: auto; }

/* slika / video ob besedilu */
.ngm-row2 { display: grid; grid-template-columns: 1fr 1fr; gap: 56px; align-items: center; }
.ngm-row2--top { align-items: start; }
.ngm-row2--rev > :first-child { order: 2; }
.ngm-media > img { border-radius: 10px; box-shadow: 0 2px 4px rgba(20,45,25,.05), 0 14px 40px rgba(20,45,25,.10); max-width: 560px; margin: 0 auto; aspect-ratio: 1 / 1; object-fit: cover; background: #fff; }
.ngm-media > img.ngm-img--free { aspect-ratio: auto; object-fit: contain; }
.ngm-media--video video { display: block; width: 100%; max-width: 520px; margin: 0 auto; border-radius: 10px; aspect-ratio: 1 / 1; object-fit: cover; background: #1d2b20; box-shadow: 0 2px 4px rgba(20,45,25,.05), 0 14px 40px rgba(20,45,25,.10); }
.ngm-copy p { font-size: 16px; line-height: 1.7; color: #4a5a4e; margin: 0 0 14px; }
.ngm-copy p strong { color: #1d2b20; font-weight: 700; }
.ngm-sec p.ngm-big { font-size: 19px; font-weight: 800; color: #1d2b20; line-height: 1.45; margin-top: 6px; }
.ngm-copy p.ngm-sub { font-size: 15px; font-weight: 800; color: #1d2b20; margin: 6px 0 8px; }
.ngm-cap { font-size: 13px; line-height: 1.55; color: #66766b; margin: 12px auto 0; max-width: 560px; text-align: center; }
.ngm-copy p.ngm-note { font-size: 13.5px; line-height: 1.6; color: #66766b; margin-top: 14px; }

/* seznam s kljukicami + nega */
.ngm-check { list-style: none; padding: 0; margin: 4px 0 18px; display: flex; flex-direction: column; gap: 11px; }
.ngm-check li { position: relative; padding-left: 30px; font-size: 15.5px; line-height: 1.55; color: #4a5a4e; margin: 0; }
.ngm-check li strong { color: #1d2b20; }
.ngm-check li::before { content: "\2713"; position: absolute; left: 0; top: 1px; width: 21px; height: 21px; border-radius: 50%;
  background: #2f9e5f; color: #fff; font-size: 11px; font-weight: 800; display: flex; align-items: center; justify-content: center; }
.ngm-specs { margin: 0 0 18px; padding: 14px 18px; background: #fff; border: 1px solid #cfe2d2; border-radius: 10px; }
.ngm-specs > div { display: grid; grid-template-columns: 110px 1fr; gap: 10px; padding: 7px 0; border-top: 1px solid #e3efe5; font-size: 15px; line-height: 1.55; }
.ngm-specs > div:first-child { border-top: 0; }
.ngm-specs dt { font-weight: 700; color: #1d2b20; margin: 0; }
.ngm-specs dd { margin: 0; color: #4a5a4e; }

/* 4) vprašanja */
.ngm-feat { border-left: 3px solid #2f6b3a; padding: 2px 0 2px 16px; margin: 16px 0 0; }
.ngm-feat h3 { font-size: 17px; font-weight: 800; color: #1d2b20; margin: 0 0 6px; line-height: 1.35; }
.ngm-copy .ngm-feat p { font-size: 15px; line-height: 1.65; margin: 0; }

/* 5) brojke */
.ngm-stats { display: flex; flex-direction: column; gap: 12px; }
.ngm-stat { display: grid; grid-template-columns: 112px 1fr; gap: 14px; align-items: center; background: #fff; border: 1px solid #cfe2d2; border-radius: 10px; padding: 14px 16px; box-shadow: 0 2px 10px rgba(20,45,25,.05); }
.ngm-stat__num { font-size: 34px; font-weight: 800; color: #2f6b3a; line-height: 1; }
.ngm-stat__txt { font-size: 15px; line-height: 1.55; color: #4a5a4e; }

/* 6) koraki */
.ngm-steps { display: grid; grid-template-columns: repeat(3, minmax(0, 1fr)); gap: 18px; margin-top: 10px; }
.ngm-step { background: #fff; border: 1px solid #cfe2d2; border-radius: 10px; overflow: hidden; box-shadow: 0 2px 10px rgba(20,45,25,.05); display: flex; flex-direction: column; }
.ngm-step__vid video { display: block; width: 100%; aspect-ratio: 1 / 1; object-fit: cover; background: #1d2b20; }
.ngm-step__body { padding: 16px 18px 18px; }
.ngm-step__num { display: inline-block; font-size: 12.5px; font-weight: 800; letter-spacing: .12em; text-transform: uppercase; color: #fff; background: #2f6b3a; border-radius: 999px; padding: 4px 12px; margin-bottom: 10px; }
.ngm-step__body p { font-size: 15.5px; line-height: 1.6; color: #1d2b20; margin: 0; font-weight: 600; }

/* 7) recenzije */
.ngm-score { display: grid; grid-template-columns: 220px minmax(0, 420px); gap: 28px; justify-content: center; align-items: center; margin: 6px auto 30px; }
.ngm-score__left { display: flex; flex-direction: column; align-items: center; gap: 4px; }
.ngm-score__num { font-size: 52px; font-weight: 800; line-height: 1; color: #1d2b20; }
.ngm-score__left .ngm-stars { font-size: 20px; }
.ngm-score__txt { font-size: 14px; color: #66766b; }
.ngm-dist__row { display: grid; grid-template-columns: 38px 1fr 40px; gap: 10px; align-items: center; font-size: 14px; color: #4a5a4e; margin: 5px 0; }
.ngm-dist__bar { height: 9px; border-radius: 999px; background: #dbe9dd; overflow: hidden; }
.ngm-dist__bar i { display: block; height: 100%; background: #2f6b3a; border-radius: 999px; }
.ngm-reviews { display: grid; grid-template-columns: repeat(5, minmax(0, 1fr)); gap: 16px; align-items: start; }
.ngm-card { background: #fff; border: 1px solid #cfe2d2; border-radius: 10px; overflow: hidden; display: flex; flex-direction: column; box-shadow: 0 2px 10px rgba(20,45,25,.05); }
.ngm-card__img img { aspect-ratio: 3 / 4; object-fit: cover; }
.ngm-card__body { padding: 16px; }
.ngm-card h3 { font-size: 16px; font-weight: 800; line-height: 1.35; color: #1d2b20; margin: 8px 0 6px; }
.ngm-card__txt { font-size: 14.5px; line-height: 1.6; color: #3b4a3f; margin: 0 0 10px; font-style: italic; }
.ngm-card__name { font-size: 13.5px; font-weight: 700; color: #1d2b20; margin: 0; }

/* ocjene */
.ngm-stars { color: #f2a516; letter-spacing: 1px; font-size: 15px; }
.ngm-stars__off { color: #d9e4dc; }
.ngm-ok { color: #2f9e5f; font-weight: 600; font-size: 12px; margin-left: 4px; font-style: normal; }

@media (max-width: 989px) {
  .ngm-row2 { gap: 32px; }
  .ngm-reviews { grid-template-columns: repeat(3, minmax(0, 1fr)); }
}
@media (max-width: 749px) {
  .ngm-sec { padding: 42px 0; }
  .ngm-wrap { padding: 0 16px; }
  .ngm-row2 { grid-template-columns: 1fr; gap: 24px; }
  .ngm-row2--rev > :first-child { order: 0; }
  .ngm-specs > div { grid-template-columns: 1fr; gap: 2px; }
  .ngm-stat { grid-template-columns: 84px 1fr; }
  .ngm-stat__num { font-size: 28px; }
  .ngm-steps { grid-template-columns: 1fr; gap: 12px; }
  .ngm-score { grid-template-columns: 1fr; gap: 14px; }
  .ngm-reviews { grid-template-columns: 1fr 1fr; gap: 12px; }
  .ngm-card__body { padding: 12px; }
}
@media (max-width: 480px) {
  .ngm-reviews { grid-template-columns: 1fr; }
}

/* galerija izdelka: sličice največ v 2 vrstah (5 na vrsto), ostale slike so dosegljive z drsenjem glavne slike */
.product_cat-orto-groundingmat .flex-control-thumbs li:nth-child(n+11) { display: none !important; }

/* kratek opis izdelka: zelene kljukice namesto pik (REST pobriše inline slog) */
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
.woocommerce-product-details__short-description .ngm-tick {
  position: absolute !important; left: 0 !important; top: 1px !important;
  width: 21px; height: 21px; border-radius: 50%;
  background: #2f9e5f !important; color: #fff !important;
  font-size: 12px !important; font-weight: 800 !important; line-height: 21px !important;
  text-align: center !important; display: inline-block !important; }
.woocommerce-product-details__short-description p:first-of-type { font-size: 16px; line-height: 1.55; }
</style>
