<?php
/**
 * product-bottom: NORIKS UpholsteryCleaner — prenosni usisavač za mokro čišćenje presvlaka, tepiha i autosjedala (orto-upholsterycleaner).
 * Original: ryer.de/products/plus (RYER Plus Nasssauger, DE/AT) — vsebina in vrstni red 1:1 z originalom, prevod iz nemščine,
 * oblika po NORIKS stilu (predloga why-neckmassager.php / why-hands.php), poudarek temno modra po originalu (#0a1c26 / #1f568e).
 *   1) nakupna škatla, zavihek "Wie funktioniert der Nasssauger?" + izjava Kathrin W. -> Kako radi (slika s hrvaškimi oznakami spremnikov)
 *   2) zavihek "Was ist mit inbegriffen?" + tehnični podatki + "30 Tage Rückgaberecht" -> Što je u paketu (slika kompleta; bon 30 € izpuščen,
 *      vračilo po NORIKS pogojih, e-pošta konkurenta izpuščena)
 *   3) "Gebaut für viele Einsatzgebiete" (vrtiljak 4 primerov)           -> 4 kartice s slikami
 *   4) "Bekommt jeden Fleck problemlos heraus"                          -> slika ob besedilu
 *   5) "Neutralisiert Gerüche dank Tiefenreinigung"                     -> slika ob besedilu (»4 mal stärker« omiljeno)
 *   6) "Echte Ergebnisse – Vorher / Nachher" (9 slik + 1 video)          -> mreža prije/poslije (»Über 50.000« -> tisuće), video utišan
 *   7) "Besser als eine professionelle Reinigung"                       -> prevedena slika ob besedilu (škatla z znamko zamenjana z napravo)
 *   8) "Der direkte Vergleich – Warum RYER?"                            -> usporedba ob studijski sliki naprave (vrstica garancije 4 leta izpuščena)
 *   9) "30 Tage Testzeit, Einfache Rückgabe" (GIF)                       -> utišan video ob besedilu, NORIKS 30 dana
 *  10) recenzije (Stamped)                                                 -> 4,9 / 1081 + 5 prevedenih mnenj originala
 * Izpuščeno: pasica HALLOWEEN ANGEBOT, darila (bon 30 €, nastavki, dostava, četka kot »Gratis«), primerjava modelov RYER (Hybrid / Compact /
 * Ultimate — drugi izdelki konkurenta), križna prodaja čistila »Surface Cleaner Spray«, RYER Insider, noga trgovine.
 * FAQ je v reviews.php ($upholsterycleaner_faq), mnenja v auto_reviews/HR_upholsterycleaner.php, opis + nega v meta.php.
 * Slike in videi: img/upholsterycleaner/ (nuc-…).
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$nuc      = get_template_directory_uri() . '/img/upholsterycleaner/';
$nuc_path = get_template_directory() . '/img/upholsterycleaner/';
$nuc_img  = function( $file, $alt, $cls = '' ) use ( $nuc, $nuc_path ) {
  if ( ! $file || ! file_exists( $nuc_path . $file ) ) { return ''; }
  return '<img src="' . esc_url( $nuc . $file ) . '" alt="' . esc_attr( $alt ) . '" loading="lazy"' . ( $cls ? ' class="' . esc_attr( $cls ) . '"' : '' ) . '>';
};
$nuc_video = function( $file, $label ) use ( $nuc, $nuc_path ) {
  if ( ! file_exists( $nuc_path . $file ) ) { return ''; }
  $poster = preg_replace( '/(-hr)?\.mp4$/', '.webp', $file );
  return '<video src="' . esc_url( $nuc . $file ) . '"' . ( file_exists( $nuc_path . $poster ) ? ' poster="' . esc_url( $nuc . $poster ) . '"' : '' )
    . ' muted autoplay loop playsinline preload="metadata" aria-label="' . esc_attr( $label ) . '"></video>';
};
$nuc_stars = function( $n ) {
  $n = max( 0, min( 5, (int) $n ) );
  return '<span class="nuc-stars" aria-label="' . $n . ' od 5 zvjezdica">' . str_repeat( '★', $n ) . '<span class="nuc-stars__off">' . str_repeat( '★', 5 - $n ) . '</span></span>';
};

/* 2) u paketu + tehnički podaci (zavihek "Was ist mit inbegriffen?") */
$nuc_paket = array(
  '1x NORIKS UpholsteryCleaner usisavač za mokro čišćenje',
  '3x nastavka',
  '1x četka za čišćenje',
  '1x kabel za napajanje',
  '1x upute za uporabu',
);
$nuc_specs = array(
  array( 'Dimenzije', '49 × 24 × 30 cm' ),
  array( 'Težina', '6 kg' ),
  array( 'Snaga', '600 W (maksimalno)' ),
  array( 'Usisna snaga', 'više od 15.000 Pa' ),
  array( 'Duljina kabela', '5 m' ),
  array( 'Spremnik za čistu vodu', '3 L' ),
  array( 'Spremnik za prljavu vodu', '1,5 L' ),
  array( 'Utikač', 'EU' ),
  array( 'Oznaka kvalitete', 'CE' ),
);

/* 3) namjene (vrtiljak originala "Gebaut für viele Einsatzgebiete") */
$nuc_kartice = array(
  array( 'nuc-s3-madrac.webp', 'Važno ljeti', 'Grinje i znoj u madracu',
         'Pri ljetnim temperaturama grinje se nakupljaju u madracima i presvlakama. NORIKS UpholsteryCleaner pomaže vam da ih se učinkovito riješite.' ),
  array( 'nuc-s3-ljeto.webp', 'Sezonski', 'Ljetne mrlje i slobodno vrijeme',
         'Kapi s roštilja, mrlje od sladoleda, krema za sunčanje na presvlakama – ljeto ostavlja tragove.' ),
  array( 'nuc-s3-auto.webp', 'Za čist automobil', 'Čišćenje automobila',
         'Sjedala, tepisi, armaturna ploča – za čist automobil ugodnog mirisa.' ),
  array( 'nuc-s3-prljavstina.webp', 'Prljavština izvana', 'Mrlje i prljavština koje unesemo izvana',
         'Prljavština koju unesemo izvana duboko se uvuče u vlakna. NORIKS UpholsteryCleaner uklanja je u samo nekoliko poteza.' ),
);

/* 6) prije / poslije (9 slik + 1 utišan video) */
$nuc_pp = array(
  array( 'img', 'nuc-s6-01.webp', 'Kutna garnitura prije i poslije čišćenja' ),
  array( 'img', 'nuc-s6-02.webp', 'Autosjedalo prije i poslije čišćenja' ),
  array( 'vid', 'nuc-s6-video.mp4', 'Mrlja od crnog vina nestaje s bijelog tepiha' ),
  array( 'img', 'nuc-s6-03.webp', 'Usisavanje crvene mrlje s bijelog tepiha' ),
  array( 'img', 'nuc-s6-04.webp', 'Svijetla sjedeća garnitura prije i poslije' ),
  array( 'img', 'nuc-s6-05.webp', 'Tamni kauč – očišćena polovica u usporedbi s neočišćenom' ),
  array( 'img', 'nuc-s6-06.webp', 'Sivi kauč prije i poslije čišćenja' ),
  array( 'img', 'nuc-s6-07.webp', 'Stolice od tkanine – očišćena i neočišćena' ),
  array( 'img', 'nuc-s6-08.webp', 'Ležaljka prije i poslije čišćenja' ),
  array( 'img', 'nuc-s6-09.webp', 'Prljava voda u spremniku nakon čišćenja tepiha' ),
);

/* 8) izravna usporedba ("Der direkte Vergleich"; vrstica garancije konkurenta izpuščena) */
$nuc_usporedba = array(
  array( 'Usisna snaga', 'više od 15.000 Pa', 'manje od 9.000 Pa' ),
  array( 'Duljina crijeva', '1,7 m', '1,2 – 1,5 m' ),
  array( 'Nastavci', '3 uključena', '1 – 2 uključena' ),
  array( 'Cijena', '€€', '€€€' ),
  array( 'Pravo na povrat u roku od 30 dana', 'Da', 'Ne' ),
);

/* 10) recenzije — 5 mnenj originala (prevedena iz nemščine, imena lokalizirana) */
$nuc_reviews = array(
  array( 'ime' => 'Tea V.', 'naslov' => 'Wow', 'tekst' => 'Nevjerojatan učinak. Kvaliteta je čvrsta, sve je dobro osmišljeno i jednostavno se rukuje, nije težak i lako se prenosi. Dobar opis u uputama … jednostavno WOW, svakako ga preporučujem.' ),
  array( 'ime' => 'Kristina K.', 'naslov' => 'Super stvar', 'tekst' => 'Oduševljena sam i istovremeno šokirana koliko je toga izvukao iz mog madraca i kauča. Nisam mislila da će se rezultati vidjeti tako brzo.' ),
  array( 'ime' => 'Margita R.', 'naslov' => 'Presvučeni namještaj ponovno blista', 'tekst' => 'Oduševljena sam kako je izvukao godinama nakupljenu prljavštinu iz presvlaka mojih stolica i kuhinjske klupe! Boje napokon ponovno dolaze do izražaja. I samo rukovanje i čišćenje uređaja vrlo je jednostavno i brzo. Sljedeći na redu su tepisi.' ),
  array( 'ime' => 'Sonja K.', 'naslov' => 'Potpuno oduševljena', 'tekst' => 'Imam ga tek nekoliko dana, ali sam oduševljena. Najprije sam očistila sve naše madrace i uklonila čak i rubove od znoja. Čak je i suprug bio zatečen. Imate osjećaj da nikad niste spavali tako čisto i svježe.' ),
  array( 'ime' => 'Sandra P.', 'naslov' => 'Malen, ali moćan', 'tekst' => 'Usisavač je malen pa sam isprva bila skeptična. Ali drži ono što obećava: odlično čisti presvlake i tepihe, a i mrlje jednostavno nestaju.' ),
);

$nuc_n = 0; // števec sekcij za izmenična ozadja
$nuc_cls = function() use ( &$nuc_n ) { $nuc_n++; return ( $nuc_n % 2 ) ? ' nuc-tint' : ''; };
?>

<!-- 1) KAKO RADI (zavihek nakupne škatle "Wie funktioniert der Nasssauger?" + izjava kupke) — slika s hrvaškimi oznakami ob besedilu -->
<section class="nuc-sec<?php echo $nuc_cls(); ?>">
  <div class="nuc-wrap">
    <div class="nuc-row2 nuc-row2--top">
      <div class="nuc-media"><?php echo $nuc_img( 'nuc-s1-spremnici-hr.webp', 'NORIKS UpholsteryCleaner – spremnik za čistu i spremnik za prljavu vodu' ); ?></div>
      <div class="nuc-copy">
        <p class="nuc-kicker">Kako radi</p>
        <h2 class="nuc-h2">Kako radi usisavač za <em>mokro čišćenje?</em></h2>
        <p>Usisavač za mokro čišćenje ima <strong>dva odvojena spremnika</strong>: jedan za čistu vodu i jedan za usisanu prljavu vodu.</p>
        <p>Ciljano <strong>prska svježu vodu</strong> na presvlaku, otapa duboko ukorijenjenu prljavštinu, a zatim <strong>prljavu vodu ponovno usisava</strong>.</p>
        <blockquote class="nuc-quote">„Usisna snaga je jako jaka, iako je tako malen i kompaktan.” <span>– Katarina W.</span></blockquote>
        <p class="nuc-big">Uklanja grinje, mrlje od znoja i neugodne mirise – madrac je dubinski očišćen za 20 minuta.</p>
      </div>
    </div>
  </div>
</section>

<!-- 2) ŠTO JE U PAKETU (zavihek "Was ist mit inbegriffen?" + tehnični podatki; vračilo po NORIKS pogojih) — slika kompleta ob besedilu -->
<section class="nuc-sec<?php echo $nuc_cls(); ?>">
  <div class="nuc-wrap">
    <div class="nuc-row2 nuc-row2--rev">
      <div class="nuc-media"><?php echo $nuc_img( 'nuc-s2-komplet.webp', 'NORIKS UpholsteryCleaner s nastavcima, četkom za čišćenje i uputama' ); ?></div>
      <div class="nuc-copy">
        <p class="nuc-kicker">Što je u paketu</p>
        <h2 class="nuc-h2">Sve što trebate za <em>čiste presvlake</em></h2>
        <ul class="nuc-list">
          <?php foreach ( $nuc_paket as $li ) : ?>
          <li><?php echo esc_html( $li ); ?></li>
          <?php endforeach; ?>
        </ul>
        <dl class="nuc-specs">
          <?php foreach ( $nuc_specs as $sp ) : ?>
          <div><dt><?php echo esc_html( $sp[0] ); ?>:</dt><dd><?php echo esc_html( $sp[1] ); ?></dd></div>
          <?php endforeach; ?>
        </dl>
        <p class="nuc-big">Pravo na povrat u roku od 30 dana i besplatna dostava za narudžbe iznad 70 €.</p>
      </div>
    </div>
  </div>
</section>

<!-- 3) NAPRAVLJEN ZA MNOGE NAMJENE ("Gebaut für viele Einsatzgebiete", 4 primeri) — 4 kartice -->
<section class="nuc-sec<?php echo $nuc_cls(); ?>">
  <div class="nuc-wrap">
    <p class="nuc-kicker nuc-c">Primjena</p>
    <h2 class="nuc-h2 nuc-c">Napravljen za <em>mnoge namjene</em></h2>
    <div class="nuc-cards">
      <?php foreach ( $nuc_kartice as $k ) : ?>
      <article class="nuc-cardx">
        <div class="nuc-cardx__img"><?php echo $nuc_img( $k[0], $k[2] ); ?></div>
        <div class="nuc-cardx__body">
          <p class="nuc-cardx__tag"><?php echo esc_html( $k[1] ); ?></p>
          <h3><?php echo esc_html( $k[2] ); ?></h3>
          <p><?php echo esc_html( $k[3] ); ?></p>
        </div>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- 4) BEZ PROBLEMA UKLANJA SVAKU MRLJU ("Bekommt jeden Fleck problemlos heraus") — slika ob besedilu -->
<section class="nuc-sec<?php echo $nuc_cls(); ?>">
  <div class="nuc-wrap">
    <div class="nuc-row2">
      <div class="nuc-media nuc-media--sq"><?php echo $nuc_img( 'nuc-s4-mrlje.webp', 'Čišćenje okruglog tepiha s NORIKS UpholsteryCleanerom' ); ?></div>
      <div class="nuc-copy">
        <p class="nuc-kicker">Za svaku površinu</p>
        <h2 class="nuc-h2">Bez problema uklanja <em>svaku mrlju</em></h2>
        <p>Bilo da je riječ o <strong>autosjedalima, tepihu, kauču ili zavjesama</strong> – NORIKS UpholsteryCleaner možete koristiti posvuda, a mrlje uklanja bez problema.</p>
        <p>I neugodni mirisi neutraliziraju se u samo <strong>nekoliko poteza</strong>.</p>
        <p class="nuc-big">Jedan uređaj za kauč, tepih, madrac i auto.</p>
      </div>
    </div>
  </div>
</section>

<!-- 5) NEUTRALIZIRA MIRISE ("Neutralisiert Gerüche dank Tiefenreinigung"; »4 mal stärker« omiljeno) — slika ob besedilu -->
<section class="nuc-sec<?php echo $nuc_cls(); ?>">
  <div class="nuc-wrap">
    <div class="nuc-row2 nuc-row2--rev">
      <div class="nuc-media"><?php echo $nuc_img( 'nuc-s5-mirisi.webp', 'Dubinsko čišćenje tepiha s NORIKS UpholsteryCleanerom' ); ?></div>
      <div class="nuc-copy">
        <p class="nuc-kicker">Dubinsko čišćenje</p>
        <h2 class="nuc-h2">Neutralizira mirise zahvaljujući <em>dubinskom čišćenju</em></h2>
        <p>NORIKS UpholsteryCleaner ima snažan usis od <strong>više od 15.000 Pa</strong>. Kombinacijom prskanja i usisavanja prodire <strong>duboko u tkaninu</strong>.</p>
        <p>Nećete prepoznati svoj namještaj! Čak i <strong>stare mrlje</strong> možete bez problema ukloniti.</p>
        <p class="nuc-big">Prska. Otapa. Usisava.</p>
      </div>
    </div>
  </div>
</section>

<!-- 6) STVARNI REZULTATI – PRIJE / POSLIJE ("Echte Ergebnisse – Vorher / Nachher"; »Über 50.000« -> tisuće) — mreža slik + utišan video -->
<section class="nuc-sec<?php echo $nuc_cls(); ?>">
  <div class="nuc-wrap">
    <p class="nuc-kicker nuc-c">Stvarni rezultati</p>
    <h2 class="nuc-h2 nuc-c">Prije / <em>poslije</em></h2>
    <p class="nuc-lead nuc-c">Tisuće zadovoljnih kupaca</p>
    <div class="nuc-pp">
      <?php foreach ( $nuc_pp as $t ) : ?>
      <div class="nuc-pp__item"><?php echo ( 'vid' === $t[0] ) ? $nuc_video( $t[1], $t[2] ) : $nuc_img( $t[1], $t[2] ); ?></div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- 7) BOLJE OD PROFESIONALNOG ČIŠĆENJA ("Besser als eine professionelle Reinigung") — prevedena slika ob besedilu -->
<section class="nuc-sec<?php echo $nuc_cls(); ?>">
  <div class="nuc-wrap">
    <div class="nuc-row2">
      <div class="nuc-media nuc-media--wide"><?php echo $nuc_img( 'nuc-s7-profesionalno-hr.webp', 'NORIKS UpholsteryCleaner 149,99 € jednokratno u usporedbi s uslugom čišćenja tepiha 240 € po čišćenju' ); ?></div>
      <div class="nuc-copy">
        <p class="nuc-kicker">Isplati se</p>
        <h2 class="nuc-h2">Bolje od <em>profesionalnog čišćenja</em></h2>
        <p>Profesionalno čišćenje tepiha u prosjeku stoji <strong>240 eura</strong> (za tepih veličine 3 × 4 m). NORIKS UpholsteryCleaner stoji samo djelić toga.</p>
        <p>Jednim ulaganjem svoj namještaj možete čistiti zauvijek – <strong>bez dodatnih troškova</strong>.</p>
        <p class="nuc-big">Jednom kupite – čistite kad god želite.</p>
      </div>
    </div>
  </div>
</section>

<!-- 8) IZRAVNA USPOREDBA ("Der direkte Vergleich – Warum RYER?"; garancija konkurenta izpuščena) — usporedba ob sliki naprave -->
<section class="nuc-sec<?php echo $nuc_cls(); ?>">
  <div class="nuc-wrap">
    <div class="nuc-row2 nuc-row2--rev">
      <div class="nuc-media nuc-media--sq"><?php echo $nuc_img( 'nuc-s8-uredaj.webp', 'NORIKS UpholsteryCleaner – usisavač za mokro čišćenje' ); ?></div>
      <div class="nuc-copy">
        <p class="nuc-kicker">Izravna usporedba</p>
        <h2 class="nuc-h2">Zašto <em>NORIKS?</em></h2>
        <div class="nuc-cmp" role="table" aria-label="Usporedba NORIKS UpholsteryCleanera i drugih usisavača za mokro čišćenje">
          <div class="nuc-cmp__row nuc-cmp__head" role="row">
            <span role="columnheader"></span>
            <span role="columnheader" class="nuc-cmp__us">NORIKS<small>15.000 Pa · 600 W · 3 nastavka</small></span>
            <span role="columnheader">Drugi usisavači<small>tipična konkurencija na tržištu</small></span>
          </div>
          <?php foreach ( $nuc_usporedba as $r ) : ?>
          <div class="nuc-cmp__row" role="row">
            <span role="rowheader"><?php echo esc_html( $r[0] ); ?></span>
            <span role="cell" class="nuc-cmp__us"><?php echo esc_html( $r[1] ); ?></span>
            <span role="cell"><?php echo esc_html( $r[2] ); ?></span>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- 9) 30 DANA ZA POVRAT ("30 Tage Testzeit, Einfache Rückgabe"; GIF -> utišan video) — video ob besedilu -->
<section class="nuc-sec<?php echo $nuc_cls(); ?>">
  <div class="nuc-wrap">
    <div class="nuc-row2">
      <div class="nuc-media nuc-media--video"><?php echo $nuc_video( 'nuc-s9-30-dana.mp4', 'Mrlja od kave nestaje s bijelog tepiha' ); ?></div>
      <div class="nuc-copy">
        <p class="nuc-kicker">Bez rizika</p>
        <h2 class="nuc-h2">30 dana za isprobavanje, <em>jednostavan povrat</em></h2>
        <p>NORIKS UpholsteryCleaner možete isprobavati <strong>punih 30 dana</strong> i njime očistiti sve što želite.</p>
        <p>Ako niste uvjereni u učinak i kvalitetu, <strong>vraćamo vam novac</strong>.</p>
        <p class="nuc-big">Pravo na povrat u roku od 30 dana i besplatna dostava za narudžbe iznad 70 €.</p>
      </div>
    </div>
  </div>
</section>

<!-- 10) RECENZIJE KUPACA — 1081 po NORIKS + 5 mnenj originala -->
<section class="nuc-sec<?php echo $nuc_cls(); ?>">
  <div class="nuc-wrap">
    <p class="nuc-kicker nuc-c">Recenzije kupaca</p>
    <h2 class="nuc-h2 nuc-c">Što kažu oni koji su <em>već očistili</em></h2>
    <div class="nuc-score">
      <span class="nuc-score__num">4,9</span>
      <?php echo $nuc_stars( 5 ); ?>
      <span class="nuc-score__txt">Na temelju 1081 recenzije</span>
    </div>
    <div class="nuc-reviews">
      <?php foreach ( $nuc_reviews as $r ) : ?>
      <article class="nuc-card">
        <div class="nuc-card__body">
          <div class="nuc-card__head"><span class="nuc-avatar"><?php echo esc_html( function_exists( 'mb_substr' ) ? mb_substr( $r['ime'], 0, 1 ) : substr( $r['ime'], 0, 1 ) ); ?></span><?php echo $nuc_stars( 5 ); ?></div>
          <h3><?php echo esc_html( $r['naslov'] ); ?></h3>
          <p class="nuc-card__txt">„<?php echo esc_html( $r['tekst'] ); ?>”</p>
          <p class="nuc-card__name"><?php echo esc_html( $r['ime'] ); ?> <span class="nuc-ok">✓ Potvrđena kupnja</span></p>
        </div>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<style>
/* NORIKS stil (predloga why-neckmassager.php / why-hands.php): oznaka + naslov z ležečim poudarkom, slika ali video ob
   besedilu, izmenjujoča ozadja in strani. Paleta po originalu (temno modra): poudarek #1f568e, temno #0a1c26, svetlo #eef4fa. */
.nuc-sec { padding: 60px 0; font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Arial, sans-serif; color: #0a1c26; background: #fff; }
.nuc-sec * { box-sizing: border-box; }
.nuc-tint { background: #eef4fa; }
.nuc-wrap { width: 100%; max-width: 1200px; margin: 0 auto; padding: 0 24px; }
.nuc-c { text-align: center; }
.nuc-sec h2, .nuc-sec h3 { font-family: inherit; text-transform: none; letter-spacing: 0; }
.nuc-kicker, .nuc-copy p.nuc-kicker { font-size: 12.5px; line-height: 1.4; font-weight: 800; letter-spacing: .14em; text-transform: uppercase; color: #1f568e; margin: 0 0 10px; }
.nuc-h2 { font-weight: 800; font-size: clamp(25px, 3.1vw, 36px); line-height: 1.2; margin: 0 0 18px; color: #0a1c26; }
.nuc-h2 em { font-style: italic; color: #1f568e; }
.nuc-sec img { display: block; width: 100%; height: auto; }
.nuc-sec p.nuc-lead { font-size: 17px; line-height: 1.6; color: #45566a; margin: -6px auto 26px; max-width: 640px; }

/* slika ob besedilu */
.nuc-row2 { display: grid; grid-template-columns: 1fr 1fr; gap: 56px; align-items: center; }
.nuc-row2--top { align-items: start; }
.nuc-row2--rev > :first-child { order: 2; }
.nuc-media > img, .nuc-media > video { display: block; width: 100%; border-radius: 10px; box-shadow: 0 2px 4px rgba(10,28,38,.05), 0 14px 40px rgba(10,28,38,.10); max-width: 560px; margin: 0 auto; aspect-ratio: 4 / 5; object-fit: cover; background: #fff; }
.nuc-media--wide > img { aspect-ratio: auto; object-fit: contain; }
.nuc-media--sq > img { aspect-ratio: 1 / 1; }
.nuc-media--video > video { aspect-ratio: 16 / 9; background: #0a1c26; }
.nuc-copy p { font-size: 16px; line-height: 1.7; color: #45566a; margin: 0 0 14px; }
.nuc-copy p strong { color: #0a1c26; font-weight: 700; }
.nuc-sec p.nuc-big { font-size: 19px; font-weight: 800; color: #0a1c26; line-height: 1.45; margin-top: 6px; }
.nuc-quote { margin: 6px 0 18px; padding: 14px 18px; background: #fff; border-left: 3px solid #1f568e; border-radius: 0 10px 10px 0; font-size: 15.5px; line-height: 1.6; font-style: italic; color: #0a1c26; box-shadow: 0 2px 10px rgba(10,28,38,.05); }
.nuc-quote span { display: block; margin-top: 4px; font-style: normal; font-weight: 700; font-size: 14px; color: #1f568e; }

/* 2) paket + tehnički podaci */
.nuc-list { list-style: none; margin: 0 0 16px; padding: 0; }
.nuc-list li { position: relative; padding-left: 28px; margin: 0 0 8px; font-size: 16px; line-height: 1.55; color: #0a1c26; }
.nuc-list li::before { content: "✓"; position: absolute; left: 0; top: 1px; width: 20px; height: 20px; border-radius: 50%; background: #1f568e; color: #fff; font-size: 11px; font-weight: 800; line-height: 20px; text-align: center; }
.nuc-specs { margin: 0 0 18px; padding: 12px 18px; background: #fff; border: 1px solid #b9cde3; border-radius: 10px; }
.nuc-specs > div { display: grid; grid-template-columns: 190px 1fr; gap: 10px; padding: 7px 0; border-top: 1px solid #e3ecf6; font-size: 15px; line-height: 1.5; }
.nuc-specs > div:first-child { border-top: 0; }
.nuc-specs dt { font-weight: 700; color: #0a1c26; margin: 0; }
.nuc-specs dd { margin: 0; color: #45566a; }

/* 3) kartice */
.nuc-cards { display: grid; grid-template-columns: repeat(4, minmax(0, 1fr)); gap: 18px; margin-top: 10px; }
.nuc-cardx { background: #fff; border: 1px solid #b9cde3; border-radius: 10px; overflow: hidden; box-shadow: 0 2px 10px rgba(10,28,38,.05); display: flex; flex-direction: column; }
.nuc-cardx__img img { aspect-ratio: 4 / 5; object-fit: cover; }
.nuc-cardx__body { padding: 16px 18px 18px; }
.nuc-sec p.nuc-cardx__tag { display: inline-block; font-size: 11.5px; font-weight: 800; letter-spacing: .08em; text-transform: uppercase; color: #1f568e; background: #dce8f5; border-radius: 999px; padding: 3px 10px; margin: 0 0 8px; }
.nuc-cardx h3 { font-size: 17px; font-weight: 800; color: #0a1c26; margin: 0 0 8px; line-height: 1.35; }
.nuc-cardx p { font-size: 15px; line-height: 1.6; color: #45566a; margin: 0; }

/* 6) prije / poslije */
.nuc-pp { display: grid; grid-template-columns: repeat(5, minmax(0, 1fr)); gap: 14px; }
.nuc-pp__item img, .nuc-pp__item video { display: block; width: 100%; aspect-ratio: 3 / 4; object-fit: cover; border-radius: 10px; background: #0a1c26; box-shadow: 0 2px 4px rgba(10,28,38,.05), 0 10px 28px rgba(10,28,38,.10); }

/* 8) usporedba */
.nuc-cmp { background: #fff; border: 1px solid #b9cde3; border-radius: 10px; overflow: hidden; box-shadow: 0 2px 10px rgba(10,28,38,.05); }
.nuc-cmp__row { display: grid; grid-template-columns: 1.15fr 1fr 1fr; border-top: 1px solid #e3ecf6; }
.nuc-cmp__row:first-child { border-top: 0; }
.nuc-cmp__row > span { padding: 12px 14px; font-size: 15px; line-height: 1.45; color: #45566a; }
.nuc-cmp__row > span[role="rowheader"] { font-weight: 700; color: #0a1c26; }
.nuc-cmp__row > span.nuc-cmp__us { background: #dce8f5; color: #0a1c26; font-weight: 700; }
.nuc-cmp__head > span { font-weight: 800; color: #0a1c26; font-size: 15.5px; }
.nuc-cmp__head > span.nuc-cmp__us { background: #1f568e; color: #fff; }
.nuc-cmp__head small { display: block; font-size: 12px; font-weight: 500; opacity: .85; margin-top: 2px; }

/* 10) recenzije */
.nuc-score { display: flex; flex-direction: column; align-items: center; gap: 4px; margin: 6px auto 30px; }
.nuc-score__num { font-size: 52px; font-weight: 800; line-height: 1; color: #0a1c26; }
.nuc-score .nuc-stars { font-size: 20px; }
.nuc-score__txt { font-size: 14px; color: #5d6f82; }
.nuc-reviews { display: grid; grid-template-columns: repeat(5, minmax(0, 1fr)); gap: 16px; align-items: start; }
.nuc-card { background: #fff; border: 1px solid #b9cde3; border-radius: 10px; overflow: hidden; display: flex; flex-direction: column; box-shadow: 0 2px 10px rgba(10,28,38,.05); }
.nuc-card__body { padding: 16px; }
.nuc-card__head { display: flex; align-items: center; gap: 10px; }
.nuc-avatar { width: 34px; height: 34px; border-radius: 50%; background: #dce8f5; color: #1f568e; font-weight: 800; display: inline-flex; align-items: center; justify-content: center; font-size: 15px; }
.nuc-card h3 { font-size: 16px; font-weight: 800; line-height: 1.35; color: #0a1c26; margin: 10px 0 6px; }
.nuc-card__txt { font-size: 14.5px; line-height: 1.6; color: #2f4152; margin: 0 0 10px; font-style: italic; }
.nuc-card__name { font-size: 13.5px; font-weight: 700; color: #0a1c26; margin: 0; }

/* ocjene */
.nuc-stars { color: #f2a516; letter-spacing: 1px; font-size: 15px; }
.nuc-stars__off { color: #d5dde6; }
.nuc-ok { color: #2f9e5f; font-weight: 600; font-size: 12px; margin-left: 4px; font-style: normal; }

@media (max-width: 989px) {
  .nuc-row2 { gap: 32px; }
  .nuc-cards { grid-template-columns: repeat(2, minmax(0, 1fr)); }
  .nuc-pp { grid-template-columns: repeat(3, minmax(0, 1fr)); }
  .nuc-reviews { grid-template-columns: repeat(3, minmax(0, 1fr)); }
}
@media (max-width: 749px) {
  .nuc-sec { padding: 42px 0; }
  .nuc-wrap { padding: 0 16px; }
  .nuc-row2 { grid-template-columns: 1fr; gap: 24px; }
  .nuc-row2--rev > :first-child { order: 0; }
  .nuc-specs > div { grid-template-columns: 1fr; gap: 2px; }
  .nuc-cards { gap: 12px; }
  .nuc-pp { grid-template-columns: 1fr 1fr; gap: 10px; }
  .nuc-cmp__row > span { padding: 10px 10px; font-size: 14px; }
  .nuc-reviews { grid-template-columns: 1fr 1fr; gap: 12px; }
  .nuc-card__body { padding: 12px; }
}
@media (max-width: 480px) {
  .nuc-cards { grid-template-columns: 1fr; }
  .nuc-reviews { grid-template-columns: 1fr; }
}

/* galerija izdelka: sličice največ v 2 vrstah (5 na vrsto), ostale slike so dosegljive z drsenjem glavne slike */
.product_cat-orto-upholsterycleaner .flex-control-thumbs li:nth-child(n+11) { display: none !important; }

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
.woocommerce-product-details__short-description .nuc-tick {
  position: absolute !important; left: 0 !important; top: 1px !important;
  width: 21px; height: 21px; border-radius: 50%;
  background: #2f9e5f !important; color: #fff !important;
  font-size: 12px !important; font-weight: 800 !important; line-height: 21px !important;
  text-align: center !important; display: inline-block !important; }
.woocommerce-product-details__short-description p:first-of-type { font-size: 16px; line-height: 1.55; }
</style>
