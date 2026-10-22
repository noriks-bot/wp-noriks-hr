<?php
/**
 * product-bottom: NORIKS MaternityLeggings — tajice za trudnice (orto-maternityleggings).
 * Original: sivara.de/products/sivara-schwangerschafts-leggings (»Schwangerschaftsleggings«, DE) — vsebina in vrstni red
 * 1:1 z originalom, oblika po NORIKS stilu (predloga why-techtee.php / why-hands.php), nezno roza paleta originala
 * (#f69799 -> poudarek #c9606a):
 *   1) "Entlastet deinen Rücken während der Schwangerschaft" + 4 lastnosti z ikonami
 *        -> Rasterećuju leđa tijekom trudnoće (besedilo ob 4 ikonah originala)
 *   2) "Über 120.000+ zufriedene Kundinnen" + "Hervorragend 4.8/5" + 5 mnenj s fotografijami
 *        -> Tisuće zadovoljnih kupaca (5 mnenj s fotografijami, število po NORIKS = 1081)
 *   3) "Sorgenfrei durch deine Schwangerschaft" (SSW 1–14 / 14–28 / 28–40 / Wochenbett, 4 slike)
 *        -> Bez brige kroz cijelu trudnoću (4 faze, slika ob besedilu, izmenično)
 *   4) "Spüre den Unterschied mit Sivara" (94 % / 87 % / 79 %) -> Osjetite razliku s NORIKS-om
 *   5) "Kundenbewertungen" (Loox, mnenja s fotografijami) -> Recenzije kupaca (8 mnenj o tajicah; 1081)
 * Izpusceno: glava, pasica »Herbst-Sale 2+1 GRATIS« (cene ponud 1x/2x/3x so prenesene v kartice), ikone zaupanja
 * (»Kostenloser Versand ab 45 €«, »Deutsches Unternehmen« …), SEO besedilo na dnu (preneseno v »Detalji o proizvodu«),
 * certifikat OEKO-TEX konkurenta (velja za njihov izdelek), noga. Opis, material in nega so v standardnih harmonikah
 * (meta.php), FAQ v reviews.php ($maternityleggings_faq), mnenja v auto_reviews/HR_maternityleggings.php.
 * Slike: img/maternityleggings/ (nml-…); galerija (USP trakovi originala prevedeni in vrisani) je v HR medijih.
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$nml      = get_template_directory_uri() . '/img/maternityleggings/';
$nml_path = get_template_directory() . '/img/maternityleggings/';
$nml_img  = function( $file, $alt, $cls = '' ) use ( $nml, $nml_path ) {
  if ( ! $file || ! file_exists( $nml_path . $file ) ) { return ''; }
  return '<img' . ( $cls ? ' class="' . esc_attr( $cls ) . '"' : '' ) . ' src="' . esc_url( $nml . $file ) . '" alt="' . esc_attr( $alt ) . '" loading="lazy">';
};
$nml_stars = function( $n ) {
  $n = max( 0, min( 5, (int) $n ) );
  return '<span class="nml-stars" aria-label="' . $n . ' od 5 zvjezdica">' . str_repeat( '★', $n ) . '<span class="nml-stars__off">' . str_repeat( '★', 5 - $n ) . '</span></span>';
};

/* 1) lastnosti z ikonami originala */
$nml_feat = array(
  array( 'nml-ic-udobno.svg',    'Udobno kroz svakodnevicu', 'Mekane, fleksibilne i udobne. Naše tajice prate svaki pokret i osjećaju se kao druga koža.' ),
  array( 'nml-ic-raste.svg',     'Rastu s vašim trbuhom',    'Tajice se prilagođavaju vašem tijelu i rastu s vašim trbuščićem.' ),
  array( 'nml-ic-leda.svg',      'Rasterećuju vaša leđa',    'Naše tajice raspoređuju težinu vaše bebe i tako rasterećuju donji dio leđa.' ),
  array( 'nml-ic-trudnoca.webp', 'Tijekom i nakon trudnoće', 'Prilagođavaju se vašem trbuščiću i učinkovito pomažu oporavak nakon poroda (dijastaza trbušnih mišića).' ),
);

/* 2) mnenja s fotografijami (»Über 120.000+ zufriedene Kundinnen«) */
$nml_t = array(
  array( 'ime' => 'Jana D.',       'img' => 'nml-t1.webp', 'tekst' => 'Super su udobne u trudnoći i nije važno koliko je trbuh velik – tajice rastu s njim.' ),
  array( 'ime' => 'Christina K.',  'img' => 'nml-t2.webp', 'tekst' => 'Prvo sam naručila L i bile su prevelike, ali u manjoj veličini sjede super. Nijedne druge hlače za trudnice ne sjede tako savršeno i ne podupiru trbuh tako dobro.' ),
  array( 'ime' => 'Jacqueline L.', 'img' => 'nml-t3.webp', 'tekst' => 'Super udobne, tkanina je mega mekana. Jako ugodne za nošenje i savršeno se prilagođavaju. Ne stežu i nemam osjećaj tijesnoga. Jednostavno savršene 😍' ),
  array( 'ime' => 'Sophie U.',     'img' => 'nml-t4.webp', 'tekst' => 'Jako lijepe i odlično pristaju. Ravnala sam se po tablici veličina i S mi uz 1,68 m sjedi optimalno. Ima i dovoljno mjesta da trbuh raste…' ),
  array( 'ime' => 'Svenja K.',     'img' => 'nml-t5.webp', 'tekst' => 'Tako sam dugo tražila udobne i duge tajice! Napokon sam pronašla savršene. Imam duge noge, a ove sežu do gležnja. Napokon! Uvijek iznova rado!' ),
);

/* 3) faze trudnoće */
$nml_faze = array(
  array( 'nml-f1.webp', '1. – 14. tjedan trudnoće',  'Nježna potpora',  'od prvog dana',            'U prva tri mjeseca, kad se vaše tijelo počinje mijenjati, mir i udobnost su najvažniji. Naše tajice pružaju vam <strong>nježnu, fleksibilnu potporu</strong> i čine vaše prve dane bezbrižnima i udobnima.' ),
  array( 'nml-f2.webp', '14. – 28. tjedan trudnoće', 'Rastu s vama',    'i vašom bebom',            'U ovoj fazi ne raste samo vaš trbuh, nego i potreba za udobnošću. Naše tajice <strong>prilagođavaju se trbuhu koji raste</strong> i pružaju vam mekanu potporu, slobodu kretanja i elegantnu podršku.' ),
  array( 'nml-f3.webp', '28. – 40. tjedan trudnoće', 'Rasterećuju vas', 'kad vam je najpotrebnije', 'Upravo sada, kad vaše tijelo toliko daje, naše tajice pružaju <strong>ciljanu potporu za leđa i trbuh</strong> kako bi vas osjetno rasteretile i ublažile tegobe.' ),
  array( 'nml-f4.webp', 'Babinje',                   'Udobnost',        'i nakon trudnoće',         'Babinje je razdoblje prijelaza. Naše tajice prilagođavaju se promjenama vašeg tijela nakon poroda i pružaju vam <strong>istu udobnost i stil</strong> na koje ste se oslanjali tijekom trudnoće.' ),
);

/* 4) rezultati */
$nml_stat = array(
  array( 94, 'preporučuje naše tajice za trudnice' ),
  array( 87, 'navodi udobniju svakodnevicu' ),
  array( 79, 'osjeća osjetno rasterećenje leđa' ),
);

/* 5) mnenja kupcev s fotografijami (Loox, samo mnenja o tajicah; ime znamke zamenjano z NORIKS) */
$nml_rv = array(
  array( 'ime' => 'Jennifer U.', 'img' => 'nml-rv-1.webp', 'z' => 5, 'tekst' => 'Jako udobne tajice. Još sam na samom početku pa su gore malo široke, ali sigurna sam da će savršeno pristajati.' ),
  array( 'ime' => 'Ma R.',       'img' => 'nml-rv-2.webp', 'z' => 5, 'tekst' => 'Tajice za trudnice koje odlično sjede. Stvarno sam oduševljena – dobro pristaju, a materijal je lijep. Naručit ću još jedne.' ),
  array( 'ime' => 'Eileen A.',   'img' => 'nml-rv-3.webp', 'z' => 5, 'tekst' => 'Stvarno su super! Navečer nisam imala teške noge, trbuh i leđa imali su odličnu potporu, a tajice su neprozirne. Služba za korisnike odgovorila je brzo i jako ljubazno. NORIKS mogu samo preporučiti!' ),
  array( 'ime' => 'Janine F.',   'img' => 'nml-rv-4.webp', 'z' => 5, 'tekst' => 'Mega udobne, trbuh je odlično poduprt – nema usporedbe s uobičajenim tajicama za trudnice. Vrijede svakog centa i sigurno ću naručiti još.' ),
  array( 'ime' => 'Jasmine H.',  'img' => 'nml-rv-5.webp', 'z' => 5, 'tekst' => 'Super udobne i odlično pristaju, drže i dobro podupiru. U trudnoći više ništa drugo neću oblačiti.' ),
  array( 'ime' => 'Franziska',   'img' => 'nml-rv-6.webp', 'z' => 5, 'tekst' => 'Wow! Nakon što sam ih isprobala, nisam ih skidala cijeli dan! Prije sam probala tri druga modela i nijedan nije bio osobito dobar. Ove su savršene – najradije bih imala sve boje. :)' ),
  array( 'ime' => 'Jessica S.',  'img' => 'nml-rv-7.webp', 'z' => 5, 'tekst' => 'U 26. sam tjednu druge trudnoće. Voljela bih da sam ih imala već u prvoj – jednako udobne danju i noću. Odlično rastu s trbuhom, pa radije posežem za njima nego za hlačama za trudnice.' ),
  array( 'ime' => 'Anna H.',     'img' => 'nml-rv-8.webp', 'z' => 5, 'tekst' => 'Super tajice za svaku priliku – odmah sam naručila još i svijetlosmeđe i tamnosive. Jednostavno odlične 🫶😊' ),
);

$nml_n = 0; // števec sekcij za izmenična ozadja
$nml_cls = function() use ( &$nml_n ) { $nml_n++; return ( $nml_n % 2 ) ? ' nml-tint' : ''; };
$nml_side = 0; // izmenične strani slika/besedilo
$nml_rev = function() use ( &$nml_side ) { $nml_side++; return ( $nml_side % 2 ) ? '' : ' nml-row2--rev'; };
?>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap">

<!-- 1) RASTEREĆUJU LEĐA TIJEKOM TRUDNOĆE ("Entlastet deinen Rücken während der Schwangerschaft" + 4 lastnosti) -->
<section class="nml-sec<?php echo $nml_cls(); ?>">
  <div class="nml-wrap">
    <div class="nml-row2<?php echo $nml_rev(); ?>">
      <div class="nml-media">
        <ul class="nml-feat">
          <?php foreach ( $nml_feat as $f ) : ?>
          <li>
            <span class="nml-feat__ic"><?php echo $nml_img( $f[0], '' ); ?></span>
            <span class="nml-feat__txt"><strong><?php echo esc_html( $f[1] ); ?></strong><?php echo esc_html( $f[2] ); ?></span>
          </li>
          <?php endforeach; ?>
        </ul>
      </div>
      <div class="nml-copy">
        <p class="nml-kicker">Potpora za trbuh i leđa</p>
        <h2 class="nml-h3">Rasterećuju vaša leđa <em>tijekom trudnoće</em></h2>
        <p>Tajice za trudnice koje se prilagođavaju vama – a ne obrnuto. <strong>Podupiru trbuh, rasterećuju leđa</strong> i daju vam osjećaj sigurne potpore, bez stezanja.</p>
        <p>Mekane, prozračne i 100 % neprozirne – od prvih tjedana do babinja.</p>
        <p class="nml-big">Toliko udobne da ih nećete htjeti skinuti – čak ni nakon trudnoće.</p>
      </div>
    </div>
  </div>
</section>

<!-- 2) TISUĆE ZADOVOLJNIH KUPACA ("Über 120.000+ zufriedene Kundinnen", "Hervorragend 4.8/5") — 5 mnenj s fotografijami -->
<section class="nml-sec<?php echo $nml_cls(); ?>">
  <div class="nml-wrap">
    <p class="nml-kicker nml-c">Iskustva mama</p>
    <h2 class="nml-h2 nml-c">Tisuće <em>zadovoljnih</em> kupaca</h2>
    <div class="nml-score">
      <span class="nml-score__num">Odlično 4,8 / 5</span>
      <?php echo $nml_stars( 5 ); ?>
      <span class="nml-score__txt">Na temelju 1081 recenzije</span>
    </div>
    <div class="nml-tm">
      <?php foreach ( $nml_t as $r ) : ?>
      <article class="nml-card">
        <div class="nml-card__img"><?php echo $nml_img( $r['img'], 'Fotografija kupca: ' . $r['ime'] ); ?></div>
        <div class="nml-card__body">
          <?php echo $nml_stars( 5 ); ?>
          <p class="nml-card__txt">„<?php echo esc_html( $r['tekst'] ); ?>”</p>
          <p class="nml-card__name"><?php echo esc_html( $r['ime'] ); ?> <span class="nml-ok">✓ Potvrđena kupnja</span></p>
        </div>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- 3) BEZ BRIGE KROZ CIJELU TRUDNOĆU ("Sorgenfrei durch deine Schwangerschaft": SSW 1–14 / 14–28 / 28–40 / Wochenbett) -->
<section class="nml-sec<?php echo $nml_cls(); ?>">
  <div class="nml-wrap">
    <p class="nml-kicker nml-c">Od prvog dana do babinja</p>
    <h2 class="nml-h2 nml-c">Bez brige <em>kroz cijelu trudnoću</em></h2>
    <p class="nml-lead nml-c">Od prvih znakova trudnoće do nezaboravnog trenutka nakon poroda naše tajice pružaju vam udobnost, rasterećenje i stil.</p>
    <?php foreach ( $nml_faze as $f ) : ?>
    <div class="nml-row2 nml-faza<?php echo $nml_rev(); ?>">
      <div class="nml-media"><?php echo $nml_img( $f[0], 'NORIKS tajice za trudnice — ' . $f[1], 'nml-photo' ); ?></div>
      <div class="nml-copy">
        <p class="nml-kicker"><?php echo esc_html( $f[1] ); ?></p>
        <h3 class="nml-h3"><?php echo esc_html( $f[2] ); ?> <em><?php echo esc_html( $f[3] ); ?></em></h3>
        <p><?php echo wp_kses_post( $f[4] ); ?></p>
      </div>
    </div>
    <?php endforeach; ?>
    <p class="nml-big nml-c nml-end">Jedne tajice – od prvog tjedna do babinja.</p>
  </div>
</section>

<!-- 4) OSJETITE RAZLIKU ("Spüre den Unterschied": 94 % / 87 % / 79 %) -->
<section class="nml-sec<?php echo $nml_cls(); ?>">
  <div class="nml-wrap">
    <p class="nml-kicker nml-c">Rezultati</p>
    <h2 class="nml-h2 nml-c">Osjetite <em>razliku</em> s NORIKS-om</h2>
    <p class="nml-lead nml-c">Ne vjerujte nama! Poslušajte tisuće sretnih mama i sami osjetite razliku s našim tajicama za trudnice.</p>
    <ul class="nml-stats">
      <?php foreach ( $nml_stat as $st ) : ?>
      <li>
        <svg viewBox="0 0 36 36" width="76" height="76" aria-hidden="true">
          <circle cx="18" cy="18" r="16" stroke="#f3dcdd" stroke-width="3.6" fill="none"/>
          <circle cx="18" cy="18" r="16" stroke="#c9606a" stroke-width="3.6" fill="none" stroke-dasharray="<?php echo (int) $st[0]; ?>, 100" transform="rotate(-90 18 18)" stroke-linecap="round" pathLength="100"/>
          <text x="18" y="21.6" font-size="9.5" fill="#c9606a" text-anchor="middle" font-weight="700" font-family="Poppins, Arial, sans-serif"><?php echo (int) $st[0]; ?>%</text>
        </svg>
        <span><?php echo (int) $st[0]; ?> % mama <?php echo esc_html( $st[1] ); ?></span>
      </li>
      <?php endforeach; ?>
    </ul>
  </div>
</section>

<!-- 5) RECENZIJE KUPACA ("Kundenbewertungen") — mnenja s fotografijami, število po NORIKS (1081) -->
<section class="nml-sec<?php echo $nml_cls(); ?>">
  <div class="nml-wrap">
    <p class="nml-kicker nml-c">Recenzije kupaca</p>
    <h2 class="nml-h2 nml-c">Mame <em>obožavaju</em> svoje NORIKS tajice</h2>
    <div class="nml-score">
      <span class="nml-score__num">4,9 / 5</span>
      <?php echo $nml_stars( 5 ); ?>
      <span class="nml-score__txt">1081 recenzija</span>
    </div>
    <div class="nml-reviews">
      <?php foreach ( $nml_rv as $r ) : ?>
      <article class="nml-card">
        <div class="nml-card__img"><?php echo $nml_img( $r['img'], 'Fotografija kupca: ' . $r['ime'] ); ?></div>
        <div class="nml-card__body">
          <?php echo $nml_stars( $r['z'] ); ?>
          <p class="nml-card__txt">„<?php echo esc_html( $r['tekst'] ); ?>”</p>
          <p class="nml-card__name"><?php echo esc_html( $r['ime'] ); ?> <span class="nml-ok">✓ Potvrđena kupnja</span></p>
        </div>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<style>
/* NORIKS stil (predloga why-techtee.php / why-hands.php): oznaka + naslov z ležečim poudarkom, slika ob
   besedilu, izmenjujoča ozadja in strani. Nežno roza paleta originala (poudarek #c9606a). */
.nml-sec { padding: 60px 0; font-family: 'Poppins', system-ui, -apple-system, 'Segoe UI', Roboto, Arial, sans-serif; color: #2a1d1e; background: #fff; }
.nml-sec * { box-sizing: border-box; }
.nml-tint { background: #fcf1f1; }
.nml-wrap { width: 100%; max-width: 1200px; margin: 0 auto; padding: 0 24px; }
.nml-c { text-align: center; }
.nml-sec h2, .nml-sec h3 { font-family: inherit; text-transform: none; letter-spacing: 0; }
.nml-kicker, .nml-copy p.nml-kicker { font-size: 12.5px; line-height: 1.4; font-weight: 700; letter-spacing: .14em; text-transform: uppercase; color: #c9606a; margin: 0 0 10px; }
.nml-h2 { font-weight: 700; font-size: clamp(25px, 3.1vw, 36px); line-height: 1.2; margin: 0 0 14px; color: #2a1d1e; }
.nml-h2 em, .nml-h3 em { font-style: italic; color: #c9606a; }
.nml-h3 { font-weight: 700; font-size: clamp(22px, 2.6vw, 30px); line-height: 1.25; margin: 0 0 16px; color: #2a1d1e; }
.nml-sec img { display: block; width: 100%; height: auto; }
.nml-lead { font-size: 16px; line-height: 1.7; color: #574749; max-width: 720px; margin: 0 auto 34px; }
.nml-big, .nml-copy p.nml-big { font-size: 19px; font-weight: 700; color: #2a1d1e; line-height: 1.45; margin-top: 6px; }
.nml-end { margin: 40px 0 0; }

/* slika ob besedilu */
.nml-row2 { display: grid; grid-template-columns: 1fr 1fr; gap: 56px; align-items: center; }
.nml-row2--rev .nml-media { order: 2; }
.nml-faza + .nml-faza { margin-top: 44px; }
.nml-photo { border-radius: 10px; box-shadow: 0 2px 4px rgba(60,20,25,.05), 0 14px 40px rgba(60,20,25,.10); max-width: 460px; margin: 0 auto; aspect-ratio: 1 / 1; object-fit: cover; }
.nml-copy p { font-size: 16px; line-height: 1.7; color: #574749; margin: 0 0 14px; }
.nml-copy p strong { color: #2a1d1e; font-weight: 600; }

/* 4 lastnosti z ikonami */
.nml-feat { list-style: none; margin: 0 auto; padding: 0; display: grid; grid-template-columns: 1fr 1fr; gap: 14px; max-width: 560px; }
.nml-feat li { background: #fff; border: 1px solid #f0d4d5; border-radius: 10px; padding: 20px 18px; box-shadow: 0 2px 4px rgba(60,20,25,.04), 0 10px 26px rgba(60,20,25,.07); }
.nml-sec:not(.nml-tint) .nml-feat li { background: #fcf1f1; }
.nml-feat__ic { display: flex; align-items: center; justify-content: center; width: 64px; height: 64px; border-radius: 50%; background: #fbe4e4; margin: 0 0 12px; }
.nml-feat__ic img { width: 46px; height: 46px; object-fit: contain; }
.nml-feat__txt { display: block; font-size: 14.5px; line-height: 1.6; color: #574749; }
.nml-feat__txt strong { display: block; font-size: 16px; color: #2a1d1e; font-weight: 700; margin-bottom: 4px; line-height: 1.35; }

/* ocjene */
.nml-stars { color: #f2a516; letter-spacing: 1px; font-size: 15px; }
.nml-stars__off { color: #eddcdc; }
.nml-score { display: flex; justify-content: center; align-items: center; gap: 12px; margin: 0 0 28px; flex-wrap: wrap; }
.nml-score__num { font-size: 24px; font-weight: 700; color: #2a1d1e; }
.nml-score .nml-stars { font-size: 20px; }
.nml-score__txt { font-size: 14.5px; color: #75686a; }

/* mnenja s fotografijami */
.nml-tm { display: grid; grid-template-columns: repeat(5, minmax(0, 1fr)); gap: 16px; align-items: stretch; }
.nml-reviews { display: grid; grid-template-columns: repeat(4, minmax(0, 1fr)); gap: 18px; align-items: stretch; }
.nml-card { background: #fff; border: 1px solid #f0d4d5; border-radius: 10px; overflow: hidden; display: flex; flex-direction: column; }
.nml-sec:not(.nml-tint) .nml-card { background: #fcf1f1; }
.nml-card__img img { aspect-ratio: 3 / 4; object-fit: cover; }
.nml-card__body { padding: 16px; }
.nml-card__txt { font-size: 14.5px; line-height: 1.6; color: #3d2f30; margin: 8px 0 10px; font-style: italic; }
.nml-card__name { font-size: 13.5px; font-weight: 600; color: #2a1d1e; margin: 0; }
.nml-ok { color: #2f9e5f; font-weight: 600; font-size: 12px; margin-left: 4px; font-style: normal; }

/* rezultati */
.nml-stats { list-style: none; margin: 0 auto; padding: 0; display: grid; grid-template-columns: repeat(3, minmax(0, 1fr)); gap: 24px; max-width: 900px; }
.nml-stats li { display: flex; flex-direction: column; align-items: center; text-align: center; gap: 12px; }
.nml-stats svg { display: block; flex: 0 0 auto; }
.nml-stats span { font-size: 15.5px; line-height: 1.55; color: #3d2f30; font-weight: 500; max-width: 230px; }

@media (max-width: 989px) {
  .nml-row2 { gap: 32px; }
  .nml-reviews { grid-template-columns: repeat(2, minmax(0, 1fr)); }
  .nml-tm { grid-template-columns: repeat(3, minmax(0, 1fr)); }
}
@media (max-width: 749px) {
  .nml-sec { padding: 42px 0; }
  .nml-wrap { padding: 0 16px; }
  .nml-row2 { grid-template-columns: 1fr; gap: 24px; }
  .nml-row2--rev .nml-media { order: 0; }
  .nml-faza + .nml-faza { margin-top: 34px; }
  .nml-reviews, .nml-tm { grid-template-columns: repeat(2, minmax(0, 1fr)); gap: 12px; }
  .nml-card__body { padding: 12px; }
  .nml-feat { gap: 10px; }
  .nml-feat li { padding: 14px 12px; }
  .nml-stats { grid-template-columns: 1fr; gap: 20px; }
  .nml-stats li { flex-direction: row; text-align: left; }
}
@media (max-width: 420px) {
  .nml-feat { grid-template-columns: 1fr; }
}

/* galerija izdelka: sličice največ v 2 vrstah (5 na vrsto), ostale slike so dosegljive z drsenjem glavne slike */
.product_cat-orto-maternityleggings .flex-control-thumbs li:nth-child(n+11) { display: none !important; }

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
.woocommerce-product-details__short-description .nml-tick {
  position: absolute !important; left: 0 !important; top: 1px !important;
  width: 21px; height: 21px; border-radius: 50%;
  background: #2f9e5f !important; color: #fff !important;
  font-size: 12px !important; font-weight: 800 !important; line-height: 21px !important;
  text-align: center !important; display: inline-block !important; }
.woocommerce-product-details__short-description p:first-of-type { font-size: 16px; line-height: 1.55; }
</style>
