<?php
/**
 * product-bottom: NORIKS SleepEarplugs — čepići za uši za spavanje na boku (orto-sleepearplugs).
 * Original: loopearplugs.com/products/dream — vsebina in vrstni red 1:1 z originalom (model »Dream«),
 * oblika po NORIKS stilu (predloga why-litterbox.php / why-hands.php), privzeta topla rjava paleta (#a9683f):
 *   1) opis + seznam lastnosti iz nakupne škatle -> Za miran san (video zgradbe čepića s hrvaškimi oznakami)
 *   2) "Sleep tips from experts and real users"   -> Savjeti za san (3 videi kupcev, utišani, hrvaški podnapisi)
 *   3) "What you get"                             -> Što je u paketu (4 dijelovi paketa)
 *   4) "Shipping & returns"                       -> Dostava i povrat po NORIKS pogojih (namesto pogojev konkurenta)
 *   5) "Understanding noise reduction"            -> Što znači 27 dB (video izdelka)
 *   6)–8) "Why Choose Loop Dream?" (3 kartice)     -> Zašto NORIKS SleepEarplugs (slika ob besedilu)
 *   9) "Reviews"                                  -> Recenzije kupaca (7 mnenj, 1081 recenzij)
 * Izpusceno: glava, pasica, ponudba Eclipse maske (drug izdelek), paketi z drugimi izdelki ("Bundle & save"),
 * vrstica s številkami konkurenta (14M kupcev, 55.000+ ocen, 2 leti garancije, 100 dni vračila), Instagram
 * "Loop fans", primerjava z drugimi modeli znamke (Quiet, Switch, Experience, Engage), "Discover all earplugs",
 * značka nagrade SleepTech 2024 (nagrada konkurenta), odstotki iz ankete konkurenta (91 % / 87 % / 79 %), noga.
 * Znamka konkurenta odstranjena (logotip na pokrovu kutijice, embalaža izpuščena, videi brez kadrov z znamko).
 * FAQ je v reviews.php ($sleepearplugs_faq), mnenja tudi v auto_reviews/HR_sleepearplugs.php.
 * Slike/videi: img/sleepearplugs/ (nse-…).
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$nse      = get_template_directory_uri() . '/img/sleepearplugs/';
$nse_path = get_template_directory() . '/img/sleepearplugs/';
$nse_img  = function( $file, $alt ) use ( $nse, $nse_path ) {
  if ( ! $file || ! file_exists( $nse_path . $file ) ) { return ''; }
  return '<img src="' . esc_url( $nse . $file ) . '" alt="' . esc_attr( $alt ) . '" loading="lazy">';
};
$nse_video = function( $name, $label ) use ( $nse, $nse_path ) {
  $file = $name . '-hr.mp4'; $poster = $name . '-poster.webp';
  if ( ! file_exists( $nse_path . $file ) ) { return ''; }
  return '<div class="nse-vid"><video src="' . esc_url( $nse . $file ) . '" poster="' . esc_url( $nse . $poster ) . '"'
    . ' muted autoplay loop playsinline preload="metadata" aria-label="' . esc_attr( $label ) . '"></video></div>';
};
$nse_stars = function( $n ) {
  return '<span class="nse-stars" aria-label="' . (int) $n . ' od 5 zvjezdica">' . str_repeat( '★', (int) $n ) . '<span class="nse-stars__off">' . str_repeat( '★', 5 - (int) $n ) . '</span></span>';
};
$nse_kses = array( 'strong' => array(), 'em' => array(), 'br' => array() );

/* 1) lastnosti iz nakupne škatle originala */
$nse_feats = array(
  array( 'Udobni za spavanje na boku', 'Nizak profil i naš najmekši silikon smanjuju pritisak za udobnost cijelu noć.' ),
  array( 'Dvije vrste nastavaka', 'Unaprijed postavljeni nastavci od pjene i silikona, plus dvostruki nastavci za još bolju prilagodbu.' ),
  array( 'Nastavci od pjene i silikona', 'Ovalni nastavci prate prirodan oblik uha za priljubljeno pristajanje.' ),
  array( 'Manje hrkanja i noćne buke', '27 dB (SNR) prigušuje hrkanje partnera, gradsku buku i druga noćna ometanja.' ),
  array( 'Sigurno pristajanje dok spavate', 'Stvoreni da ostanu u ušima dok spavate na boku i krećete se tijekom noći.' ),
  array( 'Kutijica za noćni ormarić', 'S neklizajućim dnom i prostranim pretincem — uvijek nadohvat ruke uz krevet.' ),
  array( 'Prilagodljivo pristajanje', 'Četiri veličine nastavaka za priljubljeno pristajanje, i u manjim ušima.' ),
  array( 'Višekratni i lako se čiste', 'Izrađeni od izdržljivog silikona — za miran san iz noći u noć.' ),
  array( 'Zaštita sluha', 'Pomažu zaštititi vaše uši od štetne buke.' ),
);

/* 2) videi kupcev (utišani, hrvaški podnapisi) */
$nse_videos = array(
  'nse-v-ugc-noc'     => 'Iskustvo kupca — prospavajte cijelu noć',
  'nse-v-ugc-savjeti' => 'Tri savjeta za bolji san',
  'nse-v-ugc-tajna'   => 'Iskustvo kupca — mala tajna za bolji san',
);

/* 3) što je u paketu */
$nse_box = array(
  array( 'nse-s-cepici.webp',    'Čepići',            '<strong>1x</strong> par NORIKS SleepEarplugs čepića' ),
  array( 'nse-s-kutijica.webp',  'Kutijica',          '<strong>1x</strong> kutijica za noćni ormarić' ),
  array( 'nse-s-nastavci.webp',  'Nastavci',          '<strong>4x</strong> par nastavaka od pjene i silikona (XS + S + M + L)' ),
  array( 'nse-s-dvostruki.webp', 'Dvostruki nastavci', '<strong>4x</strong> par dvostrukih nastavaka (XS + S + M + L)' ),
);

/* 6)–8) zakaj izbrati */
$nse_why = array(
  array( 'img' => 'nse-s-na-boku.webp', 'alt' => 'Žena spava na boku s čepićima u boji lila', 'k' => 'Za spavanje na boku',
    'h' => 'Udobni čepići <em>za spavanje na boku</em>',
    'p' => array( 'Mekano tijelo i optimizirani oblik <strong>smanjuju pritisak na uho</strong> — za udobne noći bez muke.' ) ),
  array( 'img' => 'nse-s-hrkanje.webp', 'alt' => 'Par spava zagrljen, žena nosi čepiće za uši', 'k' => 'Za noći s hrkanjem',
    'h' => 'Čepići za <em>noći s hrkanjem</em>',
    'p' => array( 'Prigušite hrkanje i noćne zvukove uz <strong>smanjenje buke od 27 dB (SNR)</strong>.' ) ),
  array( 'img' => 'nse-s-cijelu-noc.webp', 'alt' => 'Muškarac spava na boku s crnim čepićima za uši', 'k' => 'Cijelu noć',
    'h' => 'Sigurno pristajanje <em>koje ostaje cijelu noć</em>',
    'p' => array( '<strong>Ovalni nastavci</strong> prate prirodan oblik uha za priljubljeno pristajanje koje ostaje na mjestu.' ) ),
);

/* 9) Recenzije kupaca — 7 mnenj z originala, števila po NORIKS (1081) */
$nse_reviews = array(
  array( 'ime' => 'Robert G.', 'z' => 5, 'h' => 'Kvaliteta sna mi se poboljšala', 'tekst' => 'Prije sam koristio obične čepiće, a ovi su udobniji i bolje prigušuju buku, pa spavam još bolje. Kako spavam na boku, savršeno mi pristaju i ne budim se s bolom u uhu. Toplo preporučujem!' ),
  array( 'ime' => 'Filip H.', 'z' => 5, 'h' => 'Vrlo mekani i ugodni', 'tekst' => 'Vrlo su mekani i ugodni za nošenje. Pri spavanju su mi puno ugodniji od klasičnih čepića jer gotovo ne stvaraju pritisak. Sigurno sjede i mogu ih nositi satima bez nelagode.' ),
  array( 'ime' => 'Katarina F.', 'z' => 5, 'h' => 'Rade savršeno', 'tekst' => 'Isprobala sam razne čepiće za spavanje i nijedni nisu ovako udobni. Imam vrlo male zvukovode i većina mi ispada, pa su mi dvije vrste nastavaka u maloj veličini savršene. Kutijica mi pomaže da ih ne izgubim.' ),
  array( 'ime' => 'Kristina L.', 'z' => 5, 'h' => 'Vrhunska udobnost', 'tekst' => 'Obične čepiće teško je dobro namjestiti i neudobni su kad spavam na boku. Ove koristim već 3 mjeseca i neću koristiti ništa drugo — ni noću ni za drijemanje u avionu. Kupila bih ih opet.' ),
  array( 'ime' => 'Ines S.', 'z' => 5, 'h' => 'Kraj neprospavanim noćima', 'tekst' => 'Zbog partnerova hrkanja patila sam od nesanice. Konačno sam se odlučila za ove čepiće i potpuno su se isplatili — sad prospavam cijelu noć, a hrkanje me više ne budi.' ),
  array( 'ime' => 'Melita B.', 'z' => 5, 'h' => 'Upravo ono što mi treba', 'tekst' => 'Živim u vrlo bučnom gradu i godinama sam koristila druge čepiće bez prave razlike. S ovima danju mogu izaći van bez preopterećenja, a noću konačno mirno spavam.' ),
  array( 'ime' => 'Maksim C.', 'z' => 4, 'h' => 'Najbolji čepići koje sam probao', 'tekst' => 'Jedino je bilo izazovno pronaći pravu veličinu nastavaka — na jednom uhu mi odgovara druga veličina nego na drugom, i to je u redu. Kad sam je pronašao, više me ništa nije ometalo.' ),
);

$nse_n = 0; // števec sekcij za izmenična ozadja
$nse_cls = function() use ( &$nse_n ) { $nse_n++; return ( $nse_n % 2 ) ? ' nse-tint' : ''; };
$nse_side = 0; // izmenične strani slika/besedilo
$nse_rev = function() use ( &$nse_side ) { $nse_side++; return ( $nse_side % 2 ) ? '' : ' nse-row2--rev'; };
?>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap">

<!-- 1) ZA MIRAN SAN — opis in lastnosti -->
<section class="nse-sec<?php echo $nse_cls(); ?>">
  <div class="nse-wrap">
    <div class="nse-row2<?php echo $nse_rev(); ?>">
      <div class="nse-media"><div class="nse-sq"><?php echo $nse_video( 'nse-v-anatomija', 'Građa NORIKS SleepEarplugs čepića: vanjski silikonski vrh, memorijska pjena, čvrsta jezgra i mekano tijelo' ); ?></div></div>
      <div class="nse-copy">
        <p class="nse-kicker">NORIKS SleepEarplugs</p>
        <h2 class="nse-h3">Za miran noćni san — <em>bez buke koja vas budi</em></h2>
        <p>Pripremite se za miran san uz NORIKS čepiće za uši. <strong>Manje bučnih ometanja</strong> za neprekinute noći — bilo da spavate na boku, prigušujete hrkanje partnera ili oboje.</p>
        <div class="nse-feats">
          <?php foreach ( $nse_feats as $f ) : ?>
          <div class="nse-feat"><p class="nse-feat__h"><span class="nse-dot" aria-hidden="true">✓</span><?php echo esc_html( $f[0] ); ?></p><p class="nse-feat__t"><?php echo esc_html( $f[1] ); ?></p></div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- 2) SAVJETI ZA SAN — 3 videi kupcev ob besedilu -->
<section class="nse-sec<?php echo $nse_cls(); ?>">
  <div class="nse-wrap">
    <div class="nse-row2<?php echo $nse_rev(); ?>">
      <div class="nse-media">
        <div class="nse-ugc">
          <?php foreach ( $nse_videos as $vn => $vl ) { echo $nse_video( $vn, $vl ); } ?>
        </div>
      </div>
      <div class="nse-copy">
        <p class="nse-kicker">Savjeti za san</p>
        <h2 class="nse-h3">Savjeti stručnjaka i <em>stvarnih korisnika</em></h2>
        <p>Pogledajte kako ljudi koji lagano spavaju, dijele krevet s hrkačem ili žive u bučnom gradu koriste čepiće za miran san.</p>
        <ul class="nse-points">
          <li><span class="nse-dot" aria-hidden="true">✓</span><span><strong>Smanjenje buke do 27 dB</strong> — za hrkanje, promet i bučne susjede</span></li>
          <li><span class="nse-dot" aria-hidden="true">✓</span><span><strong>Udobni na boku</strong> — bez pritiska i bez boli u uhu</span></li>
          <li><span class="nse-dot" aria-hidden="true">✓</span><span><strong>Kutijica protiv klizanja</strong> — uvijek na noćnom ormariću</span></li>
        </ul>
        <p class="nse-big">Probudite se odmorni.</p>
      </div>
    </div>
  </div>
</section>

<!-- 3) ŠTO JE U PAKETU -->
<section class="nse-sec<?php echo $nse_cls(); ?>">
  <div class="nse-wrap">
    <div class="nse-row2<?php echo $nse_rev(); ?>">
      <div class="nse-media">
        <div class="nse-box">
          <?php foreach ( $nse_box as $b ) : ?>
          <figure><?php echo $nse_img( $b[0], 'NORIKS SleepEarplugs — ' . $b[1] ); ?><figcaption><?php echo esc_html( $b[1] ); ?></figcaption></figure>
          <?php endforeach; ?>
        </div>
      </div>
      <div class="nse-copy">
        <p class="nse-kicker">Što je u paketu?</p>
        <h2 class="nse-h3">Sve što trebate <em>za savršeno pristajanje</em></h2>
        <ul class="nse-points">
          <?php foreach ( $nse_box as $b ) : ?><li><span class="nse-dot" aria-hidden="true">✓</span><span><?php echo wp_kses( $b[2], $nse_kses ); ?></span></li><?php endforeach; ?>
        </ul>
        <p>Isprobajte različite veličine i obje vrste nastavaka — veličina se može razlikovati od jednog uha do drugog.</p>
      </div>
    </div>
  </div>
</section>

<!-- 4) DOSTAVA I POVRAT — NORIKS pogoji (namesto pogojev konkurenta) -->
<section class="nse-sec<?php echo $nse_cls(); ?>">
  <div class="nse-wrap">
    <div class="nse-row2<?php echo $nse_rev(); ?>">
      <div class="nse-media nse-media--sq"><?php echo $nse_img( 'nse-s-breskva-na-boku.webp', 'Muškarac mirno spava s čepićima u boji breskve' ); ?></div>
      <div class="nse-copy">
        <p class="nse-kicker">Dostava i povrat</p>
        <h2 class="nse-h3">Isprobajte ih <em>bez rizika</em></h2>
        <p>Uživajte u <strong>besplatnoj dostavi za narudžbe iznad 70 €</strong>. Narudžbu šaljemo brzo, a platiti možete i <strong>pouzećem</strong>.</p>
        <p>Ako iz bilo kojeg razloga niste zadovoljni, imate <strong>pravo na povrat u roku od 30 dana</strong> — javite nam se i pomoći ćemo vam s povratom ili zamjenom.</p>
        <p class="nse-trust"><span>Pravo na povrat u roku od 30 dana</span><span>Besplatna dostava za narudžbe iznad 70 €</span><span>Plaćanje pouzećem</span></p>
      </div>
    </div>
  </div>
</section>

<!-- 5) RAZUMIJEVANJE SMANJENJA BUKE -->
<section class="nse-sec<?php echo $nse_cls(); ?>">
  <div class="nse-wrap">
    <div class="nse-row2<?php echo $nse_rev(); ?>">
      <div class="nse-media"><div class="nse-sq"><?php echo $nse_video( 'nse-v-rotacija', 'NORIKS SleepEarplugs čepić iz svih kutova' ); ?></div></div>
      <div class="nse-copy">
        <p class="nse-kicker">Razumijevanje smanjenja buke</p>
        <h2 class="nse-h3">Što znači smanjenje buke <em>od 27 dB?</em></h2>
        <p>Čepići smanjuju buku za 27 dB — to je značajno smanjenje za mnoge zvukove, ali <strong>buku ne uklanjaju potpuno</strong>. Evo što možete očekivati:</p>
        <ul class="nse-points">
          <li><span class="nse-dot" aria-hidden="true">✓</span><span><strong>Tihi zvukovi</strong> poput disanja, zujanja hladnjaka ili perilice posuđa najvjerojatnije se neće čuti.</span></li>
          <li><span class="nse-dot" aria-hidden="true">✓</span><span><strong>Srednje glasni zvukovi</strong> poput televizora u drugoj sobi, udaljenog prometa ili vodokotlića svest će se na tihi šum.</span></li>
          <li><span class="nse-dot" aria-hidden="true">✓</span><span><strong>Glasni zvukovi</strong> poput sirena, lajanja psa ili vatrometa i dalje će se čuti, ali puno tiše.</span></li>
        </ul>
        <p><strong>A hrkanje?</strong> Hrkanje se razlikuje po glasnoći. Tiše hrkanje može biti potpuno prigušeno ili se jedva čuti, a glasnije hrkanje (koje može doseći i 100 dB) i dalje će se primijetiti, ali bit će manje intenzivno.</p>
      </div>
    </div>
  </div>
</section>

<?php foreach ( $nse_why as $i => $w ) : ?>
<!-- <?php echo (int) ( $i + 6 ); ?>) <?php echo esc_html( $w['k'] ); ?> -->
<section class="nse-sec<?php echo $nse_cls(); ?>">
  <div class="nse-wrap">
    <?php if ( 0 === $i ) : ?>
    <div class="nse-intro">
      <p class="nse-kicker nse-c">Zašto baš ovi čepići</p>
      <h2 class="nse-h2 nse-c">Zašto odabrati <em>NORIKS SleepEarplugs?</em></h2>
    </div>
    <?php endif; ?>
    <div class="nse-row2<?php echo $nse_rev(); ?>">
      <div class="nse-media nse-media--sq"><?php echo $nse_img( $w['img'], $w['alt'] ); ?></div>
      <div class="nse-copy">
        <p class="nse-kicker"><?php echo esc_html( $w['k'] ); ?></p>
        <h2 class="nse-h3"><?php echo wp_kses( $w['h'], $nse_kses ); ?></h2>
        <?php foreach ( $w['p'] as $p ) : ?><p><?php echo wp_kses( $p, $nse_kses ); ?></p><?php endforeach; ?>
      </div>
    </div>
  </div>
</section>
<?php endforeach; ?>

<!-- 9) RECENZIJE KUPACA -->
<section class="nse-sec<?php echo $nse_cls(); ?>">
  <div class="nse-wrap">
    <p class="nse-kicker nse-c">Recenzije kupaca</p>
    <h2 class="nse-h2 nse-c">Mirne noći <em>u njihovim riječima</em></h2>
    <p class="nse-c nse-lead">Pročitajte što kupci kažu o udobnosti, pristajanju i snu uz NORIKS SleepEarplugs.</p>
    <div class="nse-score">
      <span class="nse-score__num">4,9</span>
      <?php echo $nse_stars( 5 ); ?>
      <span class="nse-score__txt">Na temelju 1081 recenzije</span>
    </div>
    <div class="nse-reviews">
      <?php foreach ( $nse_reviews as $r ) : ?>
      <article class="nse-card">
        <?php echo $nse_stars( $r['z'] ); ?>
        <p class="nse-card__h"><?php echo esc_html( $r['h'] ); ?></p>
        <p class="nse-card__txt"><?php echo esc_html( $r['tekst'] ); ?></p>
        <p class="nse-card__name"><?php echo esc_html( $r['ime'] ); ?> <span class="nse-ok">✓ Potvrđena kupnja</span></p>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<style>
/* NORIKS stil (predloga why-litterbox.php / why-hands.php): oznaka + naslov z ležečim poudarkom, slika/video ob
   besedilu, izmenjujoča ozadja in strani. Privzeta topla rjava paleta NORIKS (#a9683f). */
.nse-sec { padding: 60px 0; font-family: 'Poppins', system-ui, -apple-system, 'Segoe UI', Roboto, Arial, sans-serif; color: #231d19; background: #fff; }
.nse-sec * { box-sizing: border-box; }
.nse-tint { background: #f7f2ec; }
.nse-wrap { width: 100%; max-width: 1200px; margin: 0 auto; padding: 0 24px; }
.nse-c { text-align: center; }
.nse-sec h2, .nse-sec h3 { font-family: inherit; text-transform: none; letter-spacing: 0; }
.nse-kicker, .nse-copy p.nse-kicker { font-size: 12.5px; line-height: 1.4; font-weight: 700; letter-spacing: .14em; text-transform: uppercase; color: #a9683f; margin: 0 0 10px; }
.nse-h2 { font-weight: 700; font-size: clamp(25px, 3.1vw, 36px); line-height: 1.2; margin: 0 0 14px; color: #231d19; }
.nse-h2 em, .nse-h3 em { font-style: italic; color: #a9683f; }
.nse-h3 { font-weight: 700; font-size: clamp(22px, 2.6vw, 30px); line-height: 1.25; margin: 0 0 16px; color: #231d19; }
.nse-lead { font-size: 16.5px; line-height: 1.6; color: #4f443d; max-width: 720px; margin: 0 auto 32px; }
.nse-intro { margin: 0 0 36px; }
.nse-sec img { display: block; width: 100%; height: auto; }

/* slika/video ob besedilu */
.nse-row2 { display: grid; grid-template-columns: 1fr 1fr; gap: 56px; align-items: center; }
.nse-row2--rev .nse-media { order: 2; }
.nse-media img { object-fit: cover; border-radius: 10px; box-shadow: 0 2px 4px rgba(40,25,15,.05), 0 14px 40px rgba(40,25,15,.10); }
.nse-media--sq img { aspect-ratio: 1 / 1; max-width: 540px; margin: 0 auto; }
.nse-copy p { font-size: 16px; line-height: 1.7; color: #4f443d; margin: 0 0 14px; }
.nse-copy p strong { color: #231d19; font-weight: 600; }
.nse-copy p.nse-big { font-size: 19px; font-weight: 700; color: #231d19; line-height: 1.45; margin-top: 6px; }
.nse-points { list-style: none; margin: 0 0 16px; padding: 0; }
.nse-points li { font-size: 16px; line-height: 1.6; color: #4f443d; margin: 0 0 10px; display: flex; gap: 12px; align-items: flex-start; }
.nse-points li strong { color: #231d19; font-weight: 600; }
.nse-dot { flex: 0 0 22px; width: 22px; height: 22px; border-radius: 50%; background: #a9683f; color: #fff; font-size: 12px; font-weight: 800; line-height: 22px; text-align: center; margin-top: 2px; }

/* videi */
.nse-vid { position: relative; overflow: hidden; background: #ece3da; border-radius: 10px; aspect-ratio: 9 / 16; }
.nse-vid video { display: block; width: 100%; height: 100%; object-fit: cover; }
.nse-sq { max-width: 540px; margin: 0 auto; }
.nse-sq .nse-vid { aspect-ratio: 1 / 1; background: #242326; box-shadow: 0 2px 4px rgba(40,25,15,.05), 0 14px 40px rgba(40,25,15,.10); }
.nse-ugc { display: grid; grid-template-columns: repeat(3, minmax(0, 1fr)); gap: 10px; max-width: 560px; margin: 0 auto; }

/* lastnosti */
.nse-feats { display: grid; grid-template-columns: 1fr 1fr; gap: 14px 22px; margin-top: 6px; }
.nse-copy p.nse-feat__h { display: flex; gap: 10px; align-items: flex-start; font-weight: 700; color: #231d19; font-size: 15.5px; line-height: 1.4; margin: 0 0 4px; }
.nse-copy p.nse-feat__t { font-size: 14.5px; line-height: 1.55; margin: 0 0 0 32px; }

/* paket */
.nse-box { display: grid; grid-template-columns: repeat(2, minmax(0, 1fr)); gap: 12px; max-width: 520px; margin: 0 auto; }
.nse-box figure { margin: 0; background: #f3f3f3; border-radius: 10px; overflow: hidden; box-shadow: 0 2px 8px rgba(40,25,15,.08); }
.nse-box img { aspect-ratio: 1 / 1; object-fit: contain; border-radius: 0; box-shadow: none; }
.nse-box figcaption { text-align: center; font-size: 13px; font-weight: 600; color: #4f443d; padding: 0 4px 10px; }

/* mnenja */
.nse-stars { color: #f2a516; letter-spacing: 1px; font-size: 15px; }
.nse-stars__off { color: #e6dbd2; }
.nse-score { display: flex; justify-content: center; align-items: center; gap: 12px; margin: 0 0 28px; flex-wrap: wrap; }
.nse-score__num { font-size: 30px; font-weight: 700; color: #231d19; }
.nse-score .nse-stars { font-size: 20px; }
.nse-score__txt { font-size: 14.5px; color: #6b625a; }
.nse-reviews { display: grid; grid-template-columns: repeat(3, minmax(0, 1fr)); gap: 18px; align-items: start; }
.nse-card { background: #fff; border: 1px solid #ecdfd3; border-radius: 10px; padding: 18px 18px 16px; }
.nse-card__h { font-size: 15.5px; font-weight: 700; color: #231d19; margin: 8px 0 6px; }
.nse-card__txt { font-size: 14.5px; line-height: 1.6; color: #3a302a; margin: 0 0 10px; }
.nse-card__name { font-size: 14px; font-weight: 600; color: #231d19; margin: 0; }
.nse-ok { color: #2f9e5f; font-weight: 600; font-size: 12.5px; margin-left: 4px; }

/* NORIKS pogoji */
.nse-trust { display: flex; flex-wrap: wrap; gap: 10px 22px; margin: 18px 0 0 !important; font-size: 14px !important; font-weight: 600; color: #6b625a !important; }
.nse-trust span { position: relative; padding-left: 20px; }
.nse-trust span::before { content: "\2713"; position: absolute; left: 0; color: #a9683f; }

@media (max-width: 989px) {
  .nse-reviews { grid-template-columns: repeat(2, minmax(0, 1fr)); }
  .nse-row2 { gap: 32px; }
  .nse-feats { grid-template-columns: 1fr; }
}
@media (max-width: 749px) {
  .nse-sec { padding: 42px 0; }
  .nse-wrap { padding: 0 16px; }
  .nse-row2 { grid-template-columns: 1fr; gap: 24px; }
  .nse-row2--rev .nse-media { order: 0; }
  .nse-reviews { grid-template-columns: 1fr; gap: 14px; }
  .nse-ugc { gap: 6px; }
}

/* galerija izdelka: sličice največ v 2 vrstah (5 na vrsto), ostale slike so dosegljive z drsenjem glavne slike */
.product_cat-orto-sleepearplugs .flex-control-thumbs li:nth-child(n+11) { display: none !important; }

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
.woocommerce-product-details__short-description .nse-tick {
  position: absolute !important; left: 0 !important; top: 1px !important;
  width: 21px; height: 21px; border-radius: 50%;
  background: #2f9e5f !important; color: #fff !important;
  font-size: 12px !important; font-weight: 800 !important; line-height: 21px !important;
  text-align: center !important; display: inline-block !important; }
.woocommerce-product-details__short-description p:first-of-type { font-size: 16px; line-height: 1.55; }
</style>
