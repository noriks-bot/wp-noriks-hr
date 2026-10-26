<?php
/**
 * product-bottom: NORIKS TravelPillow — putni jastuk za vrat od memorijske pjene (orto-travelpillow).
 * Original: wander-plus.com/products/bogo-pillow (»The Original WANDER+ Pillow«) — vsebina in vrstni red 1:1 z originalom,
 * oblika po NORIKS stilu (predloga why-sleepearplugs.php / why-maternityleggings.php / why-hands.php), privzeta topla
 * rjava paleta NORIKS (#a9683f):
 *   1) "What our customers say" (nakupna škatla: 5 videov kupcev + mnenje Sharon S. + »Over 250,453 Happy Travelers«)
 *        -> Što kažu naši putnici (5 kadrov iz videov kupcev z izjavami iz videov, mnenje Sharon S., števila po NORIKS)
 *   2) "Say Goodbye to Uncomfortable Journeys" (video)          -> Zbogom neudobnim putovanjima (video ob besedilu)
 *   3) "Wrap, Secure, Relax – It's That Easy" (3 koraki, video) -> Omotajte, pričvrstite, opustite se
 *   4) "Crafted From The Highest Quality Memory Foam" (video)   -> Izrađen od vrhunske memorijske pjene
 *   5) "Super Compact & Easy To Transport" (3 koraki, video)    -> Iznimno kompaktan i lagan za nošenje
 *   6) "Join our community of happy travelers!" (3 mnenja s fotografijami) -> Pridružite se zajednici putnika
 *   7) drsnik s 3 ikonami (No more jetlags / Travel comfortably / Luxury memory foam) -> 3 ikone ob besedilu (brez drsnika)
 *   8) "Our Guarantee" (60 dni)                                 -> Naše jamstvo po NORIKS pogojih (30 dni, dostava nad 70 €)
 *   9) "Rated 4.6/5 by 180,000+ Happy Customers" (Okendo)       -> Recenzije kupaca (4 mnenja o jastuku, 1081)
 * Izpusceno: glava, pasica »You've unlocked buy one, get one free« (paket 1+1 je prenesen v ponudbo 2x kom), ikone zaupanja
 * konkurenta (»60-day Risk Free Guarantee«, »SSL Compliant«), maska za oči (drug izdelek), mnenje o torbi (drug izdelek),
 * odštevalnik in »Back in stock«, noga. Videi kupcev imajo vžgane angleške napise čez obraz in kadre z znamko, zato so na
 * strani čisti kadri iz videov z izjavami (prevod govora) namesto videov. Videi izdelka so utišani, kadri z znamko izrezani
 * (pri »kompaktan« logotip na torbici sledeno zakrit). Opis in nega v standardnih harmonikah (meta.php), FAQ v reviews.php
 * ($travelpillow_faq), mnenja v auto_reviews/HR_travelpillow.php. Slike/videi: img/travelpillow/ (ntp-…).
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$ntp      = get_template_directory_uri() . '/img/travelpillow/';
$ntp_path = get_template_directory() . '/img/travelpillow/';
$ntp_img  = function( $file, $alt ) use ( $ntp, $ntp_path ) {
  if ( ! $file || ! file_exists( $ntp_path . $file ) ) { return ''; }
  return '<img src="' . esc_url( $ntp . $file ) . '" alt="' . esc_attr( $alt ) . '" loading="eager">';
};
$ntp_video = function( $name, $label ) use ( $ntp, $ntp_path ) {
  $file = $name . '.mp4'; $poster = $name . '-poster.webp';
  if ( ! file_exists( $ntp_path . $file ) ) { return ''; }
  return '<div class="ntp-vid"><video src="' . esc_url( $ntp . $file ) . '" poster="' . esc_url( $ntp . $poster ) . '"'
    . ' muted autoplay loop playsinline preload="metadata" aria-label="' . esc_attr( $label ) . '">Vaš preglednik ne podržava video.</video></div>';
};
$ntp_stars = function( $n ) {
  $n = max( 0, min( 5, (int) $n ) );
  return '<span class="ntp-stars" aria-label="' . $n . ' od 5 zvjezdica">' . str_repeat( '★', $n ) . '<span class="ntp-stars__off">' . str_repeat( '★', 5 - $n ) . '</span></span>';
};
$ntp_kses = array( 'strong' => array(), 'em' => array(), 'br' => array() );

/* 1) izjave iz videov kupcev (prevod govora; kadri brez napisov in brez znamke) */
$ntp_ugc = array(
  array( 'ntp-k1.webp', 'Putnica spava u avionu s jastukom NORIKS TravelPillow', 'Dobar san mi je jako važan, pogotovo na putovanjima. Nisam mogla vjerovati koliko sam dugo spavala s ovim jastukom — kao da tijelo misli da ležite, jer se glava odmara na njemu.' ),
  array( 'ntp-k2.webp', 'Putnik nosi sivi NORIKS TravelPillow oko vrata', 'Isprobao sam puno jastuka za vrat i nijedan mi nije odgovarao. S ovim sam na osmosatnom letu za Europu prespavao cijeli put. Tako je mekan, kao da grlim oblak.' ),
  array( 'ntp-k3.webp', 'Putnica u avionu s ružičastim jastukom za vrat', 'Inače me od jastuka za vrat uhvati grč u vratu. Ovaj je stvarno mekan i udoban i obuhvaća cijeli vrat — osjećam da me grč neće uhvatiti.' ),
  array( 'ntp-k4.webp', 'Žena s jastukom NORIKS TravelPillow oko vrata', 'Uvijek bih zadrijemala na ramenu suputnika. Trebate kvalitetan jastuk s potporom za vrat, bradu i bilo koji kut u kojem zaspite — a ovaj stane ravno u ručnu prtljagu.' ),
  array( 'ntp-k5.webp', 'Putnica namješta NORIKS TravelPillow oko vrata', 'Na prvom letu prespavala sam oko 10 sati u komadu, jer je savršeno podupirao vrat, glavu i bradu. Ne mogu ni zamisliti putovanje bez njega.' ),
);

/* 3) kako se koristi */
$ntp_koraci = array(
  'Raspakirajte svoj NORIKS TravelPillow i pustite da memorijska pjena postupno vrati svoj izvorni oblik.',
  'Udobno namjestite jastuk oko vrata dok ne osjetite da su vam glava i brada poduprte. Budite strpljivi i dajte si malo vremena da pronađete savršen položaj.',
  'Jastuk će vas uspavati i držati vas u snu, pa ćete se na odredištu probuditi odmorni, bez boli i ukočenosti. Tako jednostavno!',
);

/* 5) kompaktan */
$ntp_kompakt = array(
  'Smotajte svoj NORIKS TravelPillow.',
  'Spremite ga u torbicu za nošenje.',
  'Iznimno kompaktan, lagan i jednostavan za nošenje. Primjećujete koliko je malen? Manji od vašeg mobitela.',
);

/* 6) zajednica putnika — 3 mnenja s fotografijami */
$ntp_zaj = array(
  array( 'ime' => 'Petar R.', 'img' => 'ntp-rv-1.webp', 'tekst' => 'Užasno slabo spavam u avionu, ali na noćnom letu MORAO sam se odmoriti. NORIKS TravelPillow mi je omogućio da zaspim. Spavam na boku i bio je odličan!' ),
  array( 'ime' => 'Katarina S.', 'img' => 'ntp-rv-2.webp', 'tekst' => 'Suprug i ja oboje obožavamo ovaj putni jastuk za vrat! Napravio je ogromnu razliku na našim letovima. Ako ga još nemate, a puno putujete, nabavite ga! Obožavam ga!' ),
  array( 'ime' => 'Iva R.', 'img' => 'ntp-rv-3.webp', 'tekst' => 'Bolji nego što sam očekivala! Ne samo da mi je glava ostala uspravna, nego mi je bilo i toplo i udobno na dugom noćnom međunarodnom letu! Jako sam zadovoljna kupnjom. Hvala, NORIKS!' ),
);

/* 7) tri ikone (drsnik originala) */
$ntp_ikone = array(
  array( 'ntp-ic-jetlag.webp',    'Bez jet laga',            'Probudite se odmorni nakon dugog leta i brže se oporavite od jet laga.' ),
  array( 'ntp-ic-putovanje.webp', 'Putujte udobno',          'Glava, vrat i brada poduprti — u avionu, vlaku, autu ili autobusu.' ),
  array( 'ntp-ic-pjena.webp',     'Luksuzna memorijska pjena', 'Prilagođava se obliku vašeg vrata i glave za neusporedivu udobnost.' ),
);

/* 9) recenzije kupaca (Okendo; mnenje o torbi = drug izdelek izpuščeno) */
$ntp_reviews = array(
  array( 'ime' => 'Karolina S.', 'z' => 5, 'h' => 'Putni jastuk — stvarno radi.', 'tekst' => 'U autu sam spavala kao beba, nevjerojatno udoban, a glava mi se nije mogla klimati. Obožavam ga.' ),
  array( 'ime' => 'Helena M.', 'z' => 5, 'h' => 'Obožavam svoj NORIKS putni jastuk!', 'tekst' => 'Pruža odličnu potporu, a opet je mekan i udoban. Uz to se ne pregrijavam dok ga nosim. Moj muž, koji NIKAD ne spava u avionu, uzeo ga je sebi. Sad moram naručiti još jedan!' ),
  array( 'ime' => 'Zoran B.', 'z' => 5, 'h' => 'Najbolji putni jastuk koji sam ikad imao', 'tekst' => 'Ovaj jastuk koristim već dugo i lako je najbolji putni jastuk koji sam ikad imao. Jednostavno se pakira, a let je s njim puno udobniji.' ),
  array( 'ime' => 'Ema M.', 'z' => 5, 'h' => 'Odličan za 11, 14, 44 i 45 godina na 10 letova u 2,5 tjedna', 'tekst' => 'Spavanje u avionu nikad nije savršeno, ali ovi su nam puno pomogli da uhvatimo san kad god je bilo moguće tijekom dugog putovanja po Ekvadoru i Peruu. Posebno mi se sviđa što se mogu nositi čvršće za ravniji vrat ili malo labavije za više slobode (djeca su ih voljela labavije). Lako se nose, udobni su i sprječavaju klimanje glavom za mirniji san. Kod kuće smo skinuli navlake, oprali ih i sve je odlično.' ),
);

$ntp_n = 0; // števec sekcij za izmenična ozadja
$ntp_cls = function() use ( &$ntp_n ) { $ntp_n++; return ( $ntp_n % 2 ) ? ' ntp-tint' : ''; };
$ntp_side = 0; // izmenične strani slika/besedilo
$ntp_rev = function() use ( &$ntp_side ) { $ntp_side++; return ( $ntp_side % 2 ) ? '' : ' ntp-row2--rev'; };
?>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap">

<!-- 1) ŠTO KAŽU NAŠI PUTNICI ("What our customers say" — videi kupcev + Sharon S.) -->
<section class="ntp-sec<?php echo $ntp_cls(); ?>">
  <div class="ntp-wrap">
    <p class="ntp-kicker ntp-c">Što kažu naši putnici</p>
    <h2 class="ntp-h2 ntp-c">Tisuće putnika <em>putuje udobno</em></h2>
    <div class="ntp-score">
      <span class="ntp-score__num">4,6 / 5</span>
      <?php echo $ntp_stars( 5 ); ?>
      <span class="ntp-score__txt">Na temelju 1081 recenzije</span>
    </div>
    <figure class="ntp-quote">
      <?php echo $ntp_img( 'ntp-sharon.webp', 'Kupac Sharon S. s jastukom NORIKS TravelPillow' ); ?>
      <blockquote>
        <p>„Nema više boli u vratu, a i frizura mi ostaje savršena! Ovaj jastuk je kao čarolija. Svaki put se probudim odmorna. Ako puno putujete, kupite ga!”</p>
        <figcaption>Sharon S. <span class="ntp-ok">✓ Potvrđena kupnja</span></figcaption>
      </blockquote>
    </figure>
    <div class="ntp-tm">
      <?php foreach ( $ntp_ugc as $u ) : ?>
      <article class="ntp-card">
        <div class="ntp-card__img"><?php echo $ntp_img( $u[0], $u[1] ); ?></div>
        <div class="ntp-card__body">
          <?php echo $ntp_stars( 5 ); ?>
          <p class="ntp-card__txt">„<?php echo esc_html( $u[2] ); ?>”</p>
          <p class="ntp-card__name">Iskustvo putnika</p>
        </div>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- 2) ZBOGOM NEUDOBNIM PUTOVANJIMA ("Say Goodbye to Uncomfortable Journeys") -->
<section class="ntp-sec<?php echo $ntp_cls(); ?>">
  <div class="ntp-wrap">
    <div class="ntp-row2<?php echo $ntp_rev(); ?>">
      <div class="ntp-media"><div class="ntp-sq"><?php echo $ntp_video( 'ntp-v-putovanje', 'Putnici spavaju u avionu s jastukom NORIKS TravelPillow' ); ?></div></div>
      <div class="ntp-copy">
        <p class="ntp-kicker">Putovanje bez stresa</p>
        <h2 class="ntp-h3">Zbogom <em>neudobnim putovanjima</em></h2>
        <p>Bilo da vas čeka dugi let ili samo vožnja na posao, NORIKS TravelPillow pobrinut će se za vas! Njegov oblik <strong>drži vaše tijelo uspravnim</strong> i sprječava bol u vratu, ukočenost, istegnuća, napetost i bolove.</p>
        <p>NORIKS TravelPillow je <strong>lagan i iznimno kompaktan</strong>. Brže ćete zaspati i spavati tijekom cijelog leta.</p>
        <p>Dugi letovi jednostavno postaju puno kraći, a od jet laga se oporavljate brže.</p>
        <p class="ntp-big">Ne dopustite da vam neudobnost pokvari putovanje — nabavite svoj NORIKS TravelPillow već danas!</p>
      </div>
    </div>
  </div>
</section>

<!-- 3) OMOTAJTE, PRIČVRSTITE, OPUSTITE SE ("Wrap, Secure, Relax – It's That Easy") -->
<section class="ntp-sec<?php echo $ntp_cls(); ?>">
  <div class="ntp-wrap">
    <div class="ntp-row2<?php echo $ntp_rev(); ?>">
      <div class="ntp-media"><div class="ntp-sq"><?php echo $ntp_video( 'ntp-v-kako-koristiti', 'Putnica razmata NORIKS TravelPillow i stavlja ga oko vrata u avionu' ); ?></div></div>
      <div class="ntp-copy">
        <p class="ntp-kicker">Kako se koristi</p>
        <h2 class="ntp-h3">Omotajte, pričvrstite, opustite se — <em>tako je jednostavno</em></h2>
        <ol class="ntp-steps">
          <?php foreach ( $ntp_koraci as $i => $k ) : ?>
          <li><span class="ntp-num" aria-hidden="true"><?php echo (int) ( $i + 1 ); ?></span><span><?php echo esc_html( $k ); ?></span></li>
          <?php endforeach; ?>
        </ol>
        <p class="ntp-big">Stignite odmorni — bez boli i ukočenosti u vratu.</p>
      </div>
    </div>
  </div>
</section>

<!-- 4) VRHUNSKA MEMORIJSKA PJENA ("Crafted From The Highest Quality Memory Foam") -->
<section class="ntp-sec<?php echo $ntp_cls(); ?>">
  <div class="ntp-wrap">
    <div class="ntp-row2<?php echo $ntp_rev(); ?>">
      <div class="ntp-media"><div class="ntp-sq"><?php echo $ntp_video( 'ntp-v-memorijska-pjena', 'NORIKS TravelPillow od memorijske pjene se razmotava' ); ?></div></div>
      <div class="ntp-copy">
        <p class="ntp-kicker">Memorijska pjena</p>
        <h2 class="ntp-h3">Izrađen od <em>vrhunske memorijske pjene</em></h2>
        <p>Da — naš jastuk izrađen je od <strong>potpuno istog materijala koji se koristi u najskupljim madracima</strong>.</p>
        <p>Memorijska pjena prilagođava se obliku vašeg vrata i glave i pruža <strong>neusporedivu udobnost i potporu</strong>.</p>
        <p class="ntp-big">Unaprijedite svoja putovanja i otkrijte izvanredne prednosti memorijske pjene već danas.</p>
      </div>
    </div>
  </div>
</section>

<!-- 5) IZNIMNO KOMPAKTAN ("Super Compact & Easy To Transport") -->
<section class="ntp-sec<?php echo $ntp_cls(); ?>">
  <div class="ntp-wrap">
    <div class="ntp-row2<?php echo $ntp_rev(); ?>">
      <div class="ntp-media"><div class="ntp-sq"><?php echo $ntp_video( 'ntp-v-kompaktan', 'NORIKS TravelPillow se smota u torbicu veličine mobitela' ); ?></div></div>
      <div class="ntp-copy">
        <p class="ntp-kicker">Kompaktan</p>
        <h2 class="ntp-h3">Iznimno kompaktan i <em>lagan za nošenje</em></h2>
        <ol class="ntp-steps">
          <?php foreach ( $ntp_kompakt as $i => $k ) : ?>
          <li><span class="ntp-num" aria-hidden="true"><?php echo (int) ( $i + 1 ); ?></span><span><?php echo esc_html( $k ); ?></span></li>
          <?php endforeach; ?>
        </ol>
        <p class="ntp-big">Stane u ručnu prtljagu — ili ga omotajte oko remena torbe.</p>
      </div>
    </div>
  </div>
</section>

<!-- 6) ZAJEDNICA PUTNIKA ("Join our community of happy travelers!") — 3 mnenja s fotografijami -->
<section class="ntp-sec<?php echo $ntp_cls(); ?>">
  <div class="ntp-wrap">
    <p class="ntp-kicker ntp-c">Zajednica putnika</p>
    <h2 class="ntp-h2 ntp-c">Pridružite se našoj zajednici <em>zadovoljnih putnika!</em></h2>
    <div class="ntp-zaj">
      <?php foreach ( $ntp_zaj as $r ) : ?>
      <article class="ntp-card">
        <div class="ntp-card__img ntp-card__img--45"><?php echo $ntp_img( $r['img'], 'Fotografija kupca: ' . $r['ime'] ); ?></div>
        <div class="ntp-card__body">
          <?php echo $ntp_stars( 5 ); ?>
          <p class="ntp-card__txt">„<?php echo esc_html( $r['tekst'] ); ?>”</p>
          <p class="ntp-card__name"><?php echo esc_html( $r['ime'] ); ?> <span class="ntp-ok">✓ Potvrđena kupnja</span></p>
        </div>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- 7) TRI IKONE (drsnik originala: No more jetlags / Travel comfortably / Luxury memory foam) -->
<section class="ntp-sec<?php echo $ntp_cls(); ?>">
  <div class="ntp-wrap">
    <div class="ntp-row2<?php echo $ntp_rev(); ?>">
      <div class="ntp-media">
        <ul class="ntp-ikone">
          <?php foreach ( $ntp_ikone as $ik ) : ?>
          <li>
            <span class="ntp-ikone__ic"><?php echo $ntp_img( $ik[0], '' ); ?></span>
            <span class="ntp-ikone__txt"><strong><?php echo esc_html( $ik[1] ); ?></strong><?php echo esc_html( $ik[2] ); ?></span>
          </li>
          <?php endforeach; ?>
        </ul>
      </div>
      <div class="ntp-copy">
        <p class="ntp-kicker">Putujte bez brige</p>
        <h2 class="ntp-h3">Bez jet laga, <em>udobno na svakom putu</em></h2>
        <p>Uvijek stignite <strong>opušteni i odmorni</strong> na odredište. NORIKS TravelPillow pruža savršenu potporu za vrat, glavu i bradu i drži vaše tijelo uspravnim.</p>
        <p>Puno brže ćete zaspati, dulje ćete spavati, a glava vam više neće padati na rame suputnika.</p>
        <p class="ntp-big">Mekan, ugodan i udoban — od polijetanja do slijetanja.</p>
      </div>
    </div>
  </div>
</section>

<!-- 8) NAŠE JAMSTVO ("Our Guarantee") — NORIKS pogoji namesto pogojev konkurenta -->
<section class="ntp-sec<?php echo $ntp_cls(); ?>">
  <div class="ntp-wrap">
    <div class="ntp-row2<?php echo $ntp_rev(); ?>">
      <div class="ntp-media ntp-media--wide"><?php echo $ntp_img( 'ntp-jamstvo.webp', 'Zadovoljna kupčica s jastukom NORIKS TravelPillow pokazuje palčeve gore' ); ?></div>
      <div class="ntp-copy">
        <p class="ntp-kicker">Naše jamstvo</p>
        <h2 class="ntp-h3">Isprobajte ga <em>bez rizika</em></h2>
        <p>Obožavamo naš NORIKS TravelPillow i sigurni smo da ćete ga i vi zavoljeti! Zato vam nudimo <strong>pravo na povrat u roku od 30 dana</strong>. Ako niste oduševljeni jastukom, možete vratiti narudžbu i vratit ćemo vam novac.*</p>
        <p class="ntp-small">*Povrat novca obrađuje se u skladu s našim pravilima o povratu.</p>
        <p class="ntp-trust"><span>Pravo na povrat u roku od 30 dana</span><span>Besplatna dostava za narudžbe iznad 70 €</span><span>Plaćanje pouzećem</span></p>
      </div>
    </div>
  </div>
</section>

<!-- 9) RECENZIJE KUPACA ("Rated 4.6/5 by 180,000+ Happy Customers") -->
<section class="ntp-sec<?php echo $ntp_cls(); ?>">
  <div class="ntp-wrap">
    <p class="ntp-kicker ntp-c">Recenzije kupaca</p>
    <h2 class="ntp-h2 ntp-c">Ocjena 4,6/5 — <em>tisuće zadovoljnih kupaca</em></h2>
    <div class="ntp-score">
      <span class="ntp-score__num">4,6</span>
      <?php echo $ntp_stars( 5 ); ?>
      <span class="ntp-score__txt">Na temelju 1081 recenzije</span>
    </div>
    <div class="ntp-reviews">
      <?php foreach ( $ntp_reviews as $r ) : ?>
      <article class="ntp-rcard">
        <?php echo $ntp_stars( $r['z'] ); ?>
        <p class="ntp-rcard__h"><?php echo esc_html( $r['h'] ); ?></p>
        <p class="ntp-rcard__txt"><?php echo esc_html( $r['tekst'] ); ?></p>
        <p class="ntp-card__name"><?php echo esc_html( $r['ime'] ); ?> <span class="ntp-ok">✓ Potvrđena kupnja</span></p>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<style>
/* NORIKS stil (predloga why-sleepearplugs.php / why-hands.php): oznaka + naslov z ležečim poudarkom, slika/video ob
   besedilu, izmenjujoča ozadja in strani. Privzeta topla rjava paleta NORIKS (#a9683f). */
.ntp-sec { padding: 60px 0; font-family: 'Poppins', system-ui, -apple-system, 'Segoe UI', Roboto, Arial, sans-serif; color: #231d19; background: #fff; }
.ntp-sec * { box-sizing: border-box; }
.ntp-tint { background: #f7f2ec; }
.ntp-wrap { width: 100%; max-width: 1240px; margin: 0 auto; padding: 0 24px; }
.ntp-c { text-align: center; }
.ntp-sec h2, .ntp-sec h3 { font-family: inherit; text-transform: none; letter-spacing: 0; }
.ntp-kicker, .ntp-copy p.ntp-kicker { font-size: 12.5px; line-height: 1.4; font-weight: 700; letter-spacing: .14em; text-transform: uppercase; color: #a9683f; margin: 0 0 10px; }
.ntp-h2 { font-weight: 700; font-size: clamp(25px, 3.1vw, 36px); line-height: 1.2; margin: 0 0 14px; color: #231d19; }
.ntp-h2 em, .ntp-h3 em { font-style: italic; color: #a9683f; }
.ntp-h3 { font-weight: 700; font-size: clamp(22px, 2.6vw, 30px); line-height: 1.25; margin: 0 0 16px; color: #231d19; }
.ntp-sec img { display: block; width: 100%; height: auto; }

/* slika/video ob besedilu */
.ntp-row2 { display: grid; grid-template-columns: 1fr 1fr; gap: 56px; align-items: center; }
.ntp-row2--rev .ntp-media { order: 2; }
.ntp-media img { object-fit: cover; border-radius: 10px; box-shadow: 0 2px 4px rgba(40,25,15,.05), 0 14px 40px rgba(40,25,15,.10); }
.ntp-media--wide img { aspect-ratio: 6 / 5; max-width: 600px; margin: 0 auto; }
.ntp-copy p { font-size: 16px; line-height: 1.7; color: #4f443d; margin: 0 0 14px; }
.ntp-copy p strong { color: #231d19; font-weight: 600; }
.ntp-copy p.ntp-big { font-size: 19px; font-weight: 700; color: #231d19; line-height: 1.45; margin-top: 6px; }
.ntp-copy p.ntp-small { font-size: 13.5px; color: #8a7a6e; }

/* koraki */
.ntp-steps { list-style: none; margin: 0 0 16px; padding: 0; }
.ntp-steps li { font-size: 16px; line-height: 1.6; color: #4f443d; margin: 0 0 12px; display: flex; gap: 14px; align-items: flex-start; }
.ntp-num { flex: 0 0 30px; width: 30px; height: 30px; border-radius: 50%; background: #a9683f; color: #fff; font-size: 14px; font-weight: 700; line-height: 30px; text-align: center; }

/* videi */
.ntp-vid { position: relative; overflow: hidden; background: #ece3da; border-radius: 10px; }
.ntp-vid video { display: block; width: 100%; height: 100%; object-fit: cover; }
.ntp-sq { max-width: 540px; margin: 0 auto; }
.ntp-sq .ntp-vid { aspect-ratio: 1 / 1; box-shadow: 0 2px 4px rgba(40,25,15,.05), 0 14px 40px rgba(40,25,15,.10); }

/* izjava Sharon S. */
.ntp-quote { display: flex; align-items: center; gap: 18px; max-width: 760px; margin: 0 auto 30px; background: #fff; border: 1px solid #ecdfd3; border-radius: 10px; padding: 16px 20px; }
.ntp-quote img { flex: 0 0 72px; width: 72px; height: 72px; border-radius: 50%; object-fit: cover; }
.ntp-quote blockquote { margin: 0; }
.ntp-quote blockquote p { font-size: 15.5px; line-height: 1.6; font-style: italic; color: #3a302a; margin: 0 0 6px; }
.ntp-quote figcaption { font-size: 14px; font-weight: 600; color: #231d19; }

/* kartice s fotografijami */
.ntp-tm { display: grid; grid-template-columns: repeat(5, minmax(0, 1fr)); gap: 16px; align-items: stretch; }
.ntp-zaj { display: grid; grid-template-columns: repeat(3, minmax(0, 1fr)); gap: 18px; align-items: stretch; max-width: 1000px; margin: 8px auto 0; }
.ntp-card { background: #fff; border: 1px solid #ecdfd3; border-radius: 10px; overflow: hidden; display: flex; flex-direction: column; }
.ntp-sec:not(.ntp-tint) .ntp-card { background: #fbf6f1; }
.ntp-card__img img { aspect-ratio: 1 / 1; object-fit: cover; }
.ntp-card__img--45 img { aspect-ratio: 4 / 5; }
.ntp-card__body { padding: 16px; }
.ntp-card__txt { font-size: 14.5px; line-height: 1.6; color: #3a302a; margin: 8px 0 10px; font-style: italic; }
.ntp-card__name { font-size: 13.5px; font-weight: 600; color: #231d19; margin: 0; }

/* ikone */
.ntp-ikone { list-style: none; margin: 0 auto; padding: 0; display: grid; gap: 14px; max-width: 520px; }
.ntp-ikone li { display: flex; align-items: center; gap: 18px; background: #fff; border: 1px solid #ecdfd3; border-radius: 10px; padding: 14px 18px; box-shadow: 0 2px 4px rgba(40,25,15,.04), 0 10px 26px rgba(40,25,15,.07); }
.ntp-sec:not(.ntp-tint) .ntp-ikone li { background: #fbf6f1; }
.ntp-ikone__ic { flex: 0 0 92px; width: 92px; height: 92px; border-radius: 50%; overflow: hidden; }
.ntp-ikone__ic img { width: 92px; height: 92px; object-fit: cover; border-radius: 50%; box-shadow: none; }
.ntp-ikone__txt { display: block; font-size: 14.5px; line-height: 1.55; color: #4f443d; }
.ntp-ikone__txt strong { display: block; font-size: 16px; color: #231d19; font-weight: 700; margin-bottom: 3px; text-transform: uppercase; letter-spacing: .04em; }

/* mnenja */
.ntp-stars { color: #f2a516; letter-spacing: 1px; font-size: 15px; }
.ntp-stars__off { color: #e6dbd2; }
.ntp-score { display: flex; justify-content: center; align-items: center; gap: 12px; margin: 0 0 26px; flex-wrap: wrap; }
.ntp-score__num { font-size: 26px; font-weight: 700; color: #231d19; }
.ntp-score .ntp-stars { font-size: 20px; }
.ntp-score__txt { font-size: 14.5px; color: #6b625a; }
.ntp-reviews { display: grid; grid-template-columns: repeat(4, minmax(0, 1fr)); gap: 18px; align-items: start; }
.ntp-rcard { background: #fff; border: 1px solid #ecdfd3; border-radius: 10px; padding: 18px 18px 16px; }
.ntp-sec:not(.ntp-tint) .ntp-rcard { background: #fbf6f1; }
.ntp-rcard__h { font-size: 15.5px; font-weight: 700; color: #231d19; margin: 8px 0 6px; line-height: 1.4; }
.ntp-rcard__txt { font-size: 14.5px; line-height: 1.6; color: #3a302a; margin: 0 0 10px; }
.ntp-ok { color: #2f9e5f; font-weight: 600; font-size: 12.5px; margin-left: 4px; }

/* NORIKS pogoji */
.ntp-trust { display: flex; flex-wrap: wrap; gap: 10px 22px; margin: 18px 0 0 !important; font-size: 14px !important; font-weight: 600; color: #6b625a !important; }
.ntp-trust span { position: relative; padding-left: 20px; }
.ntp-trust span::before { content: "\2713"; position: absolute; left: 0; color: #a9683f; }

@media (max-width: 989px) {
  .ntp-row2 { gap: 32px; }
  .ntp-tm { grid-template-columns: repeat(3, minmax(0, 1fr)); }
  .ntp-reviews { grid-template-columns: repeat(2, minmax(0, 1fr)); }
}
@media (max-width: 749px) {
  .ntp-sec { padding: 42px 0; }
  .ntp-wrap { padding: 0 16px; }
  .ntp-row2 { grid-template-columns: 1fr; gap: 24px; }
  .ntp-row2--rev .ntp-media { order: 0; }
  .ntp-tm, .ntp-zaj { grid-template-columns: repeat(2, minmax(0, 1fr)); gap: 12px; }
  .ntp-card__body { padding: 12px; }
  .ntp-reviews { grid-template-columns: 1fr; gap: 14px; }
  .ntp-quote { padding: 14px; gap: 14px; }
  .ntp-quote img { flex-basis: 56px; width: 56px; height: 56px; }
  .ntp-ikone__ic, .ntp-ikone__ic img { flex-basis: 72px; width: 72px; height: 72px; }
}

/* galerija izdelka: sličice največ v 2 vrstah (5 na vrsto), ostale slike so dosegljive z drsenjem glavne slike */
.product_cat-orto-travelpillow .flex-control-thumbs li:nth-child(n+11) { display: none !important; }

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
.woocommerce-product-details__short-description .ntp-tick {
  position: absolute !important; left: 0 !important; top: 1px !important;
  width: 21px; height: 21px; border-radius: 50%;
  background: #2f9e5f !important; color: #fff !important;
  font-size: 12px !important; font-weight: 800 !important; line-height: 21px !important;
  text-align: center !important; display: inline-block !important; }
.woocommerce-product-details__short-description p:first-of-type { font-size: 16px; line-height: 1.55; }
</style>
