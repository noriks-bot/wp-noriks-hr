<?php
/**
 * product-bottom: NORIKS UltrasonicCleaner — ultrazvučni i UV-C čistač za dentalna pomagala (orto-ultrasoniccleaner).
 * Original: sonicdental.co/products/the-sonic-pro — vsebina in vrstni red 1:1 z originalom, oblika po NORIKS stilu
 * (predloga why-neckmassager.php / why-groundingmat.php / why-hands.php), poudarek zelena po barvi originala (#1f8a68).
 *   1) nakupna škatla: Product Description + "A faster, more hygienic daily clean for your" -> Opis (slika ob besedilu;
 *      patent-pending, clinical-grade, viruses/pathogens, "engineered with dental professionals" izpuščeno / omiljeno)
 *   2) "Simple daily cleaning" 4 kartice pomagal                -> 4 kartice s slikami
 *   3) "Two Technologies. One cleaner routine." (scrollytelling)  -> slika ob besedilu (logotipa odstranjena)
 *   4) feature kartica "High-frequency ultrasonic cleaning" + 3 koraki -> slika ob besedilu s 3 koraki
 *   5) feature kartica "Integrated UV-C" + 2 koraka                  -> slika ob besedilu z 2 korakoma (99,9 % previdno, z opombo)
 *   6) feature kartice one-touch / 3-5 min / compact / two colours  -> 4 kartice s slikami
 *   7) "Dentist approval" + statistika ankete 90/77/71 %             -> slika ob besedilu (videi imenovanih zobozdravnikov izpuščeni)
 *   8) "Why choose" + "The key difference: built-in UV-C" tabela      -> slika ob tabeli (2,000+ ordinacij, razvito z zobozdravniki
 *      in 12-mesečna garancija izpuščeni, 100-day returns -> NORIKS 30 dana)
 *   9) "A daily clean in 4 simple steps" (4 videi)                    -> 4 utišani videi (brez govora/napisov; napis znamke na obroču
 *      zabrisan z delogo)
 *  10) "No more brushing your retainer."                              -> slika ob besedilu
 *  11) "Better than Traditional Cleaning" 5 metod + "Why different"   -> 5 kartic + slika ob besedilu ("the only" omiljeno)
 *  12) recenzije (4.8, 1,425, "1+ million sold")                       -> 4,8 / 1081 + 3 fotografije + 5 mnenj (Reviews.io), brez prodanih kosov
 *  13) "Tech Specs"                                                     -> slika ob tabeli (utikač samo EU)
 * Izpuščeno: USP trak in pasice, logotipi medijev, navigacija, nagrade (Dental Industry finalist, 2K dentists), paket +30 tablet,
 * dostava/vračilo/garancija konkurenta, Compare Sonic cleaners (drug izdelek), noga trgovine.
 * FAQ je v reviews.php ($ultrasoniccleaner_faq), mnenja v auto_reviews/HR_ultrasoniccleaner.php, opis + nega v meta.php.
 * Slike in videi: img/ultrasoniccleaner/ (nusc-…).
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$nusc      = get_template_directory_uri() . '/img/ultrasoniccleaner/';
$nusc_path = get_template_directory() . '/img/ultrasoniccleaner/';
$nusc_img  = function( $file, $alt, $cls = '' ) use ( $nusc, $nusc_path ) {
  if ( ! $file || ! file_exists( $nusc_path . $file ) ) { return ''; }
  return '<img src="' . esc_url( $nusc . $file ) . '" alt="' . esc_attr( $alt ) . '" loading="eager"' . ( $cls ? ' class="' . esc_attr( $cls ) . '"' : '' ) . '>';
};
$nusc_video = function( $file, $label ) use ( $nusc, $nusc_path ) {
  if ( ! file_exists( $nusc_path . $file ) ) { return ''; }
  $poster = preg_replace( '/(-hr)?\.mp4$/', '.webp', $file );
  return '<video src="' . esc_url( $nusc . $file ) . '"' . ( file_exists( $nusc_path . $poster ) ? ' poster="' . esc_url( $nusc . $poster ) . '"' : '' )
    . ' muted autoplay loop playsinline preload="metadata" aria-label="' . esc_attr( $label ) . '"></video>';
};
$nusc_stars = function( $n ) {
  $n = max( 0, min( 5, (int) $n ) );
  return '<span class="nusc-stars" aria-label="' . $n . ' od 5 zvjezdica">' . str_repeat( '★', $n ) . '<span class="nusc-stars__off">' . str_repeat( '★', 5 - $n ) . '</span></span>';
};

/* 2) pomagala */
$nusc_pomagala = array(
  array( 'nusc-s2-aligneri.webp', 'Aligneri / retaineri' ),
  array( 'nusc-s2-proteze.webp', 'Proteze' ),
  array( 'nusc-s2-stitnici.webp', 'Noćni štitnici / štitnici za zube' ),
  array( 'nusc-s2-glave-cetkica.webp', 'Glave četkica za zube' ),
);

/* 4) ultrazvuk — 3 koraki */
$nusc_ultrazvuk = array(
  array( 'nusc-s4-valovi.webp', 'Nastaju snažni ultrazvučni valovi od 43 kHz',
         'Uređaj šalje visokofrekventne ultrazvučne valove kroz vodu i stvara kretanje oko vašeg pomagala.' ),
  array( 'nusc-s4-mjehurici.webp', 'Milijuni mikroskopskih mjehurića kreću se kroz vodu',
         'Ultrazvučni valovi stvaraju sitne kavitacijske mjehuriće koji nastaju i kreću se kroz vodu.' ),
  array( 'nusc-s4-necistoce.webp', 'Mjehurići podižu svakodnevne naslage',
         'Dok se mjehurići raspadaju, pomažu otpustiti nečistoće, ostatke i naslage s teško dostupnih mjesta.' ),
);

/* 5) UV-C — 2 koraka */
$nusc_uvc = array(
  array( 'nusc-s5-uvc-svjetlo.webp', 'UV-C svjetlo obasjava spremnik kad je poklopac zatvoren',
         'Tijekom ciklusa čišćenja integrirano UV-C svjetlo obasjava spremnik dok je poklopac zatvoren. Djeluje zajedno s ultrazvučnim čišćenjem, koje pomaže otpustiti nečistoće s pomagala.' ),
  array( 'nusc-s5-bakterije.webp', 'Do 99,9 % manje bakterija na vašem pomagalu*',
         'Kombinirani sustav ultrazvučnog i UV-C čišćenja neovisno je laboratorijski testiran i pokazao je smanjenje bakterija do 99,9 %. Pridržavajte se uputa za upotrebu i uputa proizvođača vašeg pomagala.' ),
);

/* 6) jednostavna upotreba — 4 kartice */
$nusc_prednosti = array(
  array( 'nusc-s6-jedan-dodir.webp', 'Čišćenje jednim dodirom',
         'Samo dodirnite sredinu poklopca i čišćenje počinje. Bez tipki, bez muke.' ),
  array( 'nusc-s6-3-5-minuta.webp', 'Odaberite čišćenje od 3 ili 5 minuta',
         '3 minute za svakodnevno čišćenje, 5 minuta kad pomagalu treba temeljitije osvježenje.' ),
  array( 'nusc-s6-kompaktan.webp', 'Dovoljno kompaktan za svaki dan',
         'Dovoljno malen da uredno stoji pokraj umivaonika ili na noćnom ormariću, spreman kad god vam zatreba.' ),
  array( 'nusc-s6-dvije-boje.webp', 'Dostupan u dvije boje',
         'Odaberite biserno bijelu ili oniks crnu – kako najbolje odgovara vašem prostoru.' ),
);

/* 7) anketa među stručnjacima dentalne medicine */
$nusc_stat = array(
  array( '90 %', 'Trenutačne metode čišćenja', 'smatra da su metode čišćenja pomagala kod kuće nedovoljne.' ),
  array( '77 %', 'Povratne informacije pacijenata', 'navodi da se pacijenti žale na neugodan miris ili mrlje.' ),
  array( '71 %', 'Klinička opažanja', 'često vidi lošu higijenu alignera ili retainera.' ),
);

/* 8) usporedba (redovi originala; 2,000+ ordinacij, razvito z zobozdravniki in garancija izpuščeni, vračilo po NORIKS pogojih) */
$nusc_usporedba = array(
  array( 'Snažno ultrazvučno čišćenje od 43.000 Hz', 'Često neprovjereno ili slabije od navedenog' ),
  array( 'Ugrađeno UV-C svjetlo', 'Samo ultrazvuk' ),
  array( 'Do 99,9 % manje bakterija, laboratorijski testirano*', 'Rijetko testirano' ),
  array( 'Namijenjen dentalnim pomagalima', 'Često univerzalni' ),
  array( 'Načini rada: 3 min svakodnevno i 5 min dubinsko čišćenje', 'Samo jedan ciklus' ),
  array( 'Izolirani spremnik – voda ostaje hladna', 'Voda se može zagrijati' ),
  array( 'Pravo na povrat u roku od 30 dana', 'Često bez jasnih pravila povrata' ),
);

/* 9) 4 koraka (utišani videi) */
$nusc_koraci = array(
  array( 'nusc-v1-korak.mp4', '1. korak', 'Napunite spremnik vodom', 'Ulijte hladnu vodu u spremnik do preporučene razine prije nego što stavite pomagalo.' ),
  array( 'nusc-v2-korak.mp4', '2. korak', 'Stavite pomagalo', 'Stavite aligner, retainer, protezu ili štitnik u vodu i zatvorite poklopac.' ),
  array( 'nusc-v3-korak.mp4', '3. korak', 'Odaberite čišćenje', 'Odaberite ciklus od 3 ili 5 minuta i pustite uređaj da radi dok vi nastavljate sa svojom rutinom.' ),
  array( 'nusc-v4-korak.mp4', '4. korak', 'Izvadite i isperite', 'Izvadite pomagalo, po potrebi ga kratko isperite i spremno je za ponovno nošenje.' ),
);

/* 11) usporedba metoda čišćenja (1 = prednost, 0 = nedostatak) */
$nusc_metode = array(
  array( 'nusc-s11-ispiranje.webp', 'Ispiranje vodom', '', array( array( 1, 'Uklanja labave nečistoće' ), array( 0, 'Ne dopire do pukotina' ), array( 0, 'Ne smanjuje bakterije' ) ) ),
  array( 'nusc-s11-cetkanje.webp', 'Četkanje', '', array( array( 1, 'Uklanja površinske nečistoće' ), array( 0, 'Može izgrebati pomagalo' ), array( 0, 'Ograničen doseg' ) ) ),
  array( 'nusc-s11-tablete.webp', 'Tablete za čišćenje', '', array( array( 1, 'Pomažu ukloniti mirise' ), array( 0, 'Ograničeno uklanjanje mrlja' ), array( 0, 'Ne uklanjaju biofilm' ) ) ),
  array( 'nusc-s11-samo-ultrazvuk.webp', 'Ultrazvučno čišćenje', '', array( array( 1, 'Dubinsko kavitacijsko čišćenje' ), array( 1, 'Doseže mjesta do kojih četkica ne može' ), array( 0, 'Ograničeno smanjenje bakterija' ) ) ),
  array( 'nusc-s11-ultrazvuk-uvc.webp', 'Ultrazvuk + UV-C', 'Jasan pobjednik', array( array( 1, 'Dubinsko kavitacijsko čišćenje' ), array( 1, 'Čisti teško dostupna mjesta' ), array( 1, 'Do 99,9 % manje bakterija*' ) ) ),
);

/* 12) recenzije — 5 mnenj originala (Reviews.io, imena lokalizirana) */
$nusc_reviews = array(
  array( 'ime' => 'Maja L.', 'naslov' => 'Aligneri su opet prozirni', 'tekst' => 'Prvi put nosim alignere (već 6 tjedana) i u početku sam ih čistila četkicom i pastom. Do kraja tjedna bi promijenili boju. Otkad koristim ovaj čistač, aligneri su mi lijepo prozirni i čisti.' ),
  array( 'ime' => 'Dragana H.', 'naslov' => 'Šteta što ga nisam kupila ranije', 'tekst' => 'Vrlo brz i jednostavan. Štitnik ubacim svako jutro dok se tuširam – kad izađem, gotovo je. Štitnik više nema neugodan miris i znam da je čist.' ),
  array( 'ime' => 'Josip M.', 'naslov' => 'Kao novi', 'tekst' => 'Upravo sam ga prvi put upotrijebio. Retaineri su mi bili jako prljavi – sad izgledaju kao novi!' ),
  array( 'ime' => 'Sanja K.', 'naslov' => 'Konačno bez muke', 'tekst' => 'Svaki dan njime čistim retainer. Prije sam koristila četkicu, pastu sa sodom bikarbonom i hidrogen – bilo je zamorno i neuredno, a mrlje nisu nestajale ni nakon namakanja.' ),
  array( 'ime' => 'Ivana P.', 'naslov' => 'Već nakon tjedan dana', 'tekst' => 'Imam ga tek otprilike tjedan dana, ali moj noćni štitnik već izgleda puno bolje. Zasad sam jako zadovoljna.' ),
);
$nusc_fotke = array( 'nusc-s12-foto-1.webp', 'nusc-s12-foto-2.webp', 'nusc-s12-foto-3.webp' );

/* 13) tehničke specifikacije (utikač samo EU) */
$nusc_specs = array(
  array( 'Nazivna snaga', '20 W' ),
  array( 'Nazivni napon / struja', 'DC 12 V / 2 A' ),
  array( 'Ultrazvučna frekvencija', '43 kHz' ),
  array( 'UV-C svjetlo', '200–280 nm' ),
  array( 'Buka', '< 65 dB(A)' ),
  array( 'Mjerač vremena', '3 min / 5 min' ),
  array( 'Upravljanje', 'na dodir' ),
  array( 'Veličina spremnika', '80 × 45 mm' ),
  array( 'Kapacitet spremnika (maks.)', '165 ml' ),
  array( 'Materijal spremnika', 'nehrđajući čelik' ),
  array( 'Materijal uređaja', 'ABS + nehrđajući čelik 304' ),
  array( 'Utikač', 'EU' ),
);

$nusc_n = 0; // števec sekcij za izmenična ozadja
$nusc_cls = function() use ( &$nusc_n ) { $nusc_n++; return ( $nusc_n % 2 ) ? ' nusc-tint' : ''; };
?>

<!-- 1) OPIS PROIZVODA (nakupna škatla: Product Description + "A faster, more hygienic daily clean for your") — slika ob besedilu -->
<section class="nusc-sec<?php echo $nusc_cls(); ?>">
  <div class="nusc-wrap">
    <div class="nusc-row2 nusc-row2--top">
      <div class="nusc-media"><?php echo $nusc_img( 'nusc-s1-uvod.webp', 'Otvoreni spremnik NORIKS UltrasonicCleanera od nehrđajućeg čelika' ); ?></div>
      <div class="nusc-copy">
        <p class="nusc-kicker">Ultrazvuk + UV-C</p>
        <h2 class="nusc-h2">Čisto pomagalo <em>za samo 3 minute</em></h2>
        <p>Milijuni ljudi svaki dan nose alignere, retainere i noćne štitnike – ali njihovo pravilno čišćenje oduvijek je bilo izazov.</p>
        <p>Upoznajte <strong>NORIKS UltrasonicCleaner</strong>: ultrazvučni i UV čistač koji pomagalo dubinski čisti za samo <strong>3 minute</strong> – bez četkanja, ribanja i namakanja.</p>
        <p>Snažne ultrazvučne vibracije od <strong>43.000 Hz</strong> odvajaju plak, naslage i nečistoće, a integrirano UV-C svjetlo pomaže smanjiti bakterije na pomagalu – <strong>do 99,9 %*</strong>.</p>
        <p class="nusc-list-title">Brže i higijenskije svakodnevno čišćenje za vaše:</p>
        <ul class="nusc-ticks">
          <li>alignere / retainere</li>
          <li>noćne štitnike / štitnike za zube</li>
          <li>proteze</li>
          <li>glave četkica za zube</li>
        </ul>
        <p class="nusc-big">Rezultat? Blistavo čisto pomagalo bez neugodnih mirisa, spremno za nošenje.</p>
      </div>
    </div>
  </div>
</section>

<!-- 2) JEDNOSTAVNO SVAKODNEVNO ČIŠĆENJE ("Simple daily cleaning", 4 kartice pomagal) -->
<section class="nusc-sec<?php echo $nusc_cls(); ?>">
  <div class="nusc-wrap">
    <p class="nusc-kicker nusc-c">Jednostavno svakodnevno čišćenje</p>
    <h2 class="nusc-h2 nusc-c">Jednostavniji način čišćenja <em>pomagala koja nosite svaki dan</em></h2>
    <div class="nusc-cards nusc-cards--4">
      <?php foreach ( $nusc_pomagala as $k ) : ?>
      <article class="nusc-cardx nusc-cardx--pom">
        <div class="nusc-cardx__img"><?php echo $nusc_img( $k[0], $k[1] ); ?></div>
        <div class="nusc-cardx__body"><h3><?php echo esc_html( $k[1] ); ?></h3></div>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- 3) DVIJE TEHNOLOGIJE ("Two Technologies. One cleaner routine.") — slika ob besedilu -->
<section class="nusc-sec<?php echo $nusc_cls(); ?>">
  <div class="nusc-wrap">
    <div class="nusc-row2 nusc-row2--rev">
      <div class="nusc-media"><?php echo $nusc_img( 'nusc-s3-dvije-tehnologije.webp', 'Poklopac i metalni obruč NORIKS UltrasonicCleanera izbliza' ); ?></div>
      <div class="nusc-copy">
        <p class="nusc-kicker">Kako radi</p>
        <h2 class="nusc-h2">Dvije tehnologije. <em>Jedna čišća rutina.</em></h2>
        <div class="nusc-duo">
          <div><span class="nusc-duo__num">1</span><p><strong>Ultrazvučni valovi</strong> uklanjaju nečistoće koje vidite.</p></div>
          <div><span class="nusc-duo__num">2</span><p><strong>UV-C svjetlo</strong> djeluje na bakterije koje ne vidite.</p></div>
        </div>
        <p class="nusc-big">Ultrazvuk i UV-C svjetlo u jednom ciklusu čišćenja.</p>
      </div>
    </div>
  </div>
</section>

<!-- 4) ULTRAZVUČNO ČIŠĆENJE (feature kartica "High-frequency ultrasonic cleaning" + 3 koraki) — slika ob besedilu -->
<section class="nusc-sec<?php echo $nusc_cls(); ?>">
  <div class="nusc-wrap">
    <div class="nusc-row2">
      <div class="nusc-media nusc-media--tall"><?php echo $nusc_img( 'nusc-s4-ultrazvuk.webp', 'Aligner u spremniku NORIKS UltrasonicCleanera tijekom ultrazvučnog čišćenja' ); ?></div>
      <div class="nusc-copy">
        <p class="nusc-kicker">Ultrazvučno čišćenje</p>
        <h2 class="nusc-h2">Visokofrekventni ultrazvuk <em>od 43 kHz</em></h2>
        <p>Valovi od 43 kHz podižu nečistoće iz svakog skrivenog utora. <strong>Ultrazvučni valovi podižu nečistoće s vašeg pomagala:</strong></p>
        <ol class="nusc-steps">
          <?php foreach ( $nusc_ultrazvuk as $i => $s ) : ?>
          <li>
            <div class="nusc-steps__img"><?php echo $nusc_img( $s[0], $s[1] ); ?></div>
            <div><h3><span><?php echo (int) $i + 1; ?></span><?php echo esc_html( $s[1] ); ?></h3><p><?php echo esc_html( $s[2] ); ?></p></div>
          </li>
          <?php endforeach; ?>
        </ol>
      </div>
    </div>
  </div>
</section>

<!-- 5) UV-C ČIŠĆENJE (feature kartica "Integrated UV-C bacteria destroying light" + 2 koraka) — slika ob besedilu -->
<section class="nusc-sec<?php echo $nusc_cls(); ?>">
  <div class="nusc-wrap">
    <div class="nusc-row2 nusc-row2--rev">
      <div class="nusc-media nusc-media--tall"><?php echo $nusc_img( 'nusc-s5-uvc.webp', 'Otvoreni NORIKS UltrasonicCleaner s UV-C svjetlom u spremniku' ); ?></div>
      <div class="nusc-copy">
        <p class="nusc-kicker">UV-C čišćenje</p>
        <h2 class="nusc-h2">Integrirano UV-C svjetlo <em>protiv bakterija</em></h2>
        <p>Do 99,9 % manje bakterija – neovisno laboratorijski testirano.* Za razliku od mnogih čistača, NORIKS UltrasonicCleaner uz ultrazvuk koristi i <strong>ultraljubičasto svjetlo</strong>.</p>
        <ol class="nusc-steps">
          <?php foreach ( $nusc_uvc as $i => $s ) : ?>
          <li>
            <div class="nusc-steps__img"><?php echo $nusc_img( $s[0], $s[1] ); ?></div>
            <div><h3><span><?php echo (int) $i + 1; ?></span><?php echo esc_html( $s[1] ); ?></h3><p><?php echo esc_html( $s[2] ); ?></p></div>
          </li>
          <?php endforeach; ?>
        </ol>
        <p class="nusc-note">*Na temelju laboratorijskog testiranja kombiniranog ultrazvučnog i UV-C čišćenja. Rezultat ovisi o uvjetima upotrebe.</p>
      </div>
    </div>
  </div>
</section>

<!-- 6) JEDNOSTAVNA UPOTREBA (feature kartice one-touch / 3-5 min / compact / two colours) -->
<section class="nusc-sec<?php echo $nusc_cls(); ?>">
  <div class="nusc-wrap">
    <p class="nusc-kicker nusc-c">Jednostavna upotreba</p>
    <h2 class="nusc-h2 nusc-c">Napravljen za <em>svakodnevnu rutinu</em></h2>
    <div class="nusc-cards nusc-cards--4">
      <?php foreach ( $nusc_prednosti as $k ) : ?>
      <article class="nusc-cardx">
        <div class="nusc-cardx__img nusc-cardx__img--tall"><?php echo $nusc_img( $k[0], $k[1] ); ?></div>
        <div class="nusc-cardx__body">
          <h3><?php echo esc_html( $k[1] ); ?></h3>
          <p><?php echo esc_html( $k[2] ); ?></p>
        </div>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- 7) STRUČNJACI ZA ORALNO ZDRAVLJE ("Dentist approval" + statistika ankete) — slika ob besedilu -->
<section class="nusc-sec<?php echo $nusc_cls(); ?>">
  <div class="nusc-wrap">
    <div class="nusc-row2">
      <div class="nusc-media"><?php echo $nusc_img( 'nusc-s7-stomatolozi.webp', 'Aligner u spremniku NORIKS UltrasonicCleanera, pogled odozgo' ); ?></div>
      <div class="nusc-copy">
        <p class="nusc-kicker">Mišljenje stručnjaka</p>
        <h2 class="nusc-h2">Ono što stomatolozi <em>vide svaki dan</em></h2>
        <p>Stručnjaci dentalne medicine svakodnevno susreću iste probleme s njegom pomagala – od neugodnih mirisa i mrlja do loše higijene retainera i alignera.</p>
        <div class="nusc-stats">
          <?php foreach ( $nusc_stat as $s ) : ?>
          <div class="nusc-stat"><strong><?php echo esc_html( $s[0] ); ?></strong><span class="nusc-stat__t"><?php echo esc_html( $s[1] ); ?></span><span><?php echo esc_html( $s[2] ); ?></span></div>
          <?php endforeach; ?>
        </div>
        <p class="nusc-note">Rezultati ankete među stručnjacima dentalne medicine o čišćenju dentalnih pomagala.</p>
        <p class="nusc-big">Što stručnjaci zaista misle o čišćenju pomagala? Kućne metode često nisu dovoljne.</p>
      </div>
    </div>
  </div>
</section>

<!-- 8) USPOREDBA ("Why choose" + "The key difference: built-in UV-C") — slika ob tabeli -->
<section class="nusc-sec<?php echo $nusc_cls(); ?>">
  <div class="nusc-wrap">
    <div class="nusc-row2 nusc-row2--rev nusc-row2--top">
      <div class="nusc-media nusc-media--natural"><?php echo $nusc_img( 'nusc-s8-uv-c-razlika.webp', 'NORIKS UltrasonicCleaner bijeli i crni s ugrađenim UV-C svjetlom' ); ?></div>
      <div class="nusc-copy">
        <p class="nusc-kicker">Usporedba</p>
        <h2 class="nusc-h2">Zašto odabrati <em>NORIKS UltrasonicCleaner?</em></h2>
        <p>Kombinira ultrazvučno čišćenje s ugrađenim UV-C svjetlom za dodatnu higijenu. <strong>Ključna razlika: ugrađeno UV-C svjetlo.</strong> Mnogi čistači za pomagala staju na ultrazvučnom čišćenju – NORIKS UltrasonicCleaner dodaje UV-C svjetlo koje pomaže djelovati na bakterije koje ne vidite.</p>
        <div class="nusc-table" role="table" aria-label="Usporedba s drugim ultrazvučnim čistačima">
          <div class="nusc-table__head" role="row"><span role="columnheader">NORIKS UltrasonicCleaner<small>Ultrazvuk + UV-C</small></span><span role="columnheader">Ostali ultrazvučni čistači</span></div>
          <?php foreach ( $nusc_usporedba as $r ) : ?>
          <div class="nusc-table__row" role="row"><span role="cell"><i class="nusc-ok">✓</i><?php echo esc_html( $r[0] ); ?></span><span role="cell"><i class="nusc-no">✗</i><?php echo esc_html( $r[1] ); ?></span></div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- 9) 4 KORAKA ("A daily clean in 4 simple steps") — utišani videi s koraki -->
<section class="nusc-sec<?php echo $nusc_cls(); ?>">
  <div class="nusc-wrap">
    <p class="nusc-kicker nusc-c">Kako se koristi</p>
    <h2 class="nusc-h2 nusc-c">Svakodnevno čišćenje u <em>4 jednostavna koraka</em></h2>
    <div class="nusc-cards nusc-cards--4">
      <?php foreach ( $nusc_koraci as $k ) : ?>
      <article class="nusc-cardx">
        <div class="nusc-vid"><?php echo $nusc_video( $k[0], $k[2] ); ?></div>
        <div class="nusc-cardx__body">
          <p class="nusc-step-label"><?php echo esc_html( $k[1] ); ?></p>
          <h3><?php echo esc_html( $k[2] ); ?></h3>
          <p><?php echo esc_html( $k[3] ); ?></p>
        </div>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- 10) BEZ ČETKANJA ("No more brushing your retainer.") — slika ob besedilu -->
<section class="nusc-sec<?php echo $nusc_cls(); ?>">
  <div class="nusc-wrap">
    <div class="nusc-row2">
      <div class="nusc-media nusc-media--tall"><?php echo $nusc_img( 'nusc-s10-bez-cetkanja.webp', 'Žena stavlja retainer, NORIKS UltrasonicCleaner na polici u kupaonici' ); ?></div>
      <div class="nusc-copy">
        <p class="nusc-kicker">Bez četkanja</p>
        <h2 class="nusc-h2">Više nema <em>četkanja retainera.</em></h2>
        <p>Četkanje grebe i zamućuje pomagalo, a skrivene bakterije često promaknu.</p>
        <p>NORIKS UltrasonicCleaner dubinski čisti <strong>ultrazvukom i UV-C svjetlom</strong> za samo tri minute.</p>
        <p class="nusc-big">Stavite pomagalo, zatvorite poklopac – i gotovo.</p>
      </div>
    </div>
  </div>
</section>

<!-- 11) BOLJE OD TRADICIONALNOG ČIŠĆENJA (5 metod + "Why the Sonic Pro is different") -->
<section class="nusc-sec<?php echo $nusc_cls(); ?>">
  <div class="nusc-wrap">
    <p class="nusc-kicker nusc-c">Provjereni rezultati</p>
    <h2 class="nusc-h2 nusc-c">Bolje od <em>tradicionalnog čišćenja</em></h2>
    <p class="nusc-lead nusc-c">Većina metoda čišćenja rješava samo dio problema. NORIKS UltrasonicCleaner kombinira dubinsko ultrazvučno čišćenje s neovisno testiranom UV-C tehnologijom za cjelovitiji pristup higijeni pomagala.</p>
    <div class="nusc-cards nusc-cards--5">
      <?php foreach ( $nusc_metode as $m ) : ?>
      <article class="nusc-cardx nusc-method<?php echo $m[2] ? ' is-win' : ''; ?>">
        <div class="nusc-cardx__img"><?php echo $nusc_img( $m[0], $m[1] ); ?><?php if ( $m[2] ) : ?><span class="nusc-win"><?php echo esc_html( $m[2] ); ?></span><?php endif; ?></div>
        <div class="nusc-cardx__body">
          <h3><?php echo esc_html( $m[1] ); ?></h3>
          <ul>
            <?php foreach ( $m[3] as $t ) : ?>
            <li><i class="<?php echo $t[0] ? 'nusc-ok' : 'nusc-no'; ?>"><?php echo $t[0] ? '✓' : '✗'; ?></i><?php echo esc_html( $t[1] ); ?></li>
            <?php endforeach; ?>
          </ul>
        </div>
      </article>
      <?php endforeach; ?>
    </div>
    <div class="nusc-row2 nusc-row2--rev nusc-gap">
      <div class="nusc-media nusc-media--tall"><?php echo $nusc_img( 'nusc-s11-razlika.webp', 'Otvoreni NORIKS UltrasonicCleaner s alignerom' ); ?></div>
      <div class="nusc-copy">
        <p class="nusc-kicker">Po čemu je drukčiji</p>
        <h2 class="nusc-h2">Ultrazvuk i UV-C <em>u jednom uređaju</em></h2>
        <p>NORIKS UltrasonicCleaner kod kuće kombinira snažnu ultrazvučnu kavitaciju i neovisno testirano UV-C svjetlo za dokazano smanjenje bakterija.</p>
        <ul class="nusc-ticks nusc-ticks--big">
          <li><strong>Snažna ultrazvučna kavitacija</strong> – čisti duboko u razmacima i pukotinama</li>
          <li><strong>Neovisno testirana UV-C tehnologija</strong> – do 99,9 % manje bakterija*</li>
          <li><strong>Provjerena učinkovitost čišćenja</strong> – potvrđeno inženjerskim testiranjem i mikroskopijom</li>
        </ul>
        <p class="nusc-big"><span class="nusc-pct">99,9 %</span> uklonjenih bakterija*</p>
        <p class="nusc-note">*Na temelju usporednih testova uklanjanja bakterija s odabranim metodama čišćenja pomagala. Pridržavajte se uputa za upotrebu i uputa proizvođača vašeg pomagala.</p>
      </div>
    </div>
  </div>
</section>

<!-- 12) RECENZIJE — 1081 po NORIKS + 3 fotografije + 5 mnenj originala -->
<section class="nusc-sec<?php echo $nusc_cls(); ?>">
  <div class="nusc-wrap">
    <p class="nusc-kicker nusc-c">Recenzije</p>
    <h2 class="nusc-h2 nusc-c">Stvarne recenzije <em>naših kupaca</em></h2>
    <div class="nusc-score">
      <span class="nusc-score__num">4,8</span>
      <?php echo $nusc_stars( 5 ); ?>
      <span class="nusc-score__txt">Na temelju 1081 recenzije</span>
    </div>
    <div class="nusc-photos">
      <?php foreach ( $nusc_fotke as $f ) : ?>
      <div><?php echo $nusc_img( $f, 'NORIKS UltrasonicCleaner u kupaonici' ); ?></div>
      <?php endforeach; ?>
    </div>
    <div class="nusc-reviews">
      <?php foreach ( $nusc_reviews as $r ) : ?>
      <article class="nusc-card">
        <div class="nusc-card__head"><span class="nusc-avatar"><?php echo esc_html( function_exists( 'mb_substr' ) ? mb_substr( $r['ime'], 0, 1 ) : substr( $r['ime'], 0, 1 ) ); ?></span><?php echo $nusc_stars( 5 ); ?></div>
        <h3><?php echo esc_html( $r['naslov'] ); ?></h3>
        <p class="nusc-card__txt">„<?php echo esc_html( $r['tekst'] ); ?>”</p>
        <p class="nusc-card__name"><?php echo esc_html( $r['ime'] ); ?> <span class="nusc-verified">✓ Potvrđena kupnja</span></p>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- 13) TEHNIČKE SPECIFIKACIJE ("Tech Specs"; utikač samo EU) — slika ob tabeli -->
<section class="nusc-sec<?php echo $nusc_cls(); ?>">
  <div class="nusc-wrap">
    <div class="nusc-row2 nusc-row2--top">
      <div class="nusc-media"><?php echo $nusc_img( 'nusc-s13-specifikacije.webp', 'NORIKS UltrasonicCleaner u oniks crnoj boji' ); ?></div>
      <div class="nusc-copy">
        <p class="nusc-kicker">Tehničke specifikacije</p>
        <h2 class="nusc-h2">Sve <em>tehničke pojedinosti</em></h2>
        <dl class="nusc-specs">
          <?php foreach ( $nusc_specs as $sp ) : ?>
          <div><dt><?php echo esc_html( $sp[0] ); ?></dt><dd><?php echo esc_html( $sp[1] ); ?></dd></div>
          <?php endforeach; ?>
        </dl>
        <p class="nusc-big">Pravo na povrat u roku od 30 dana i besplatna dostava za narudžbe iznad 70 €.</p>
      </div>
    </div>
  </div>
</section>

<style>
/* NORIKS stil (predloga why-neckmassager.php / why-hands.php): oznaka + naslov z ležečim poudarkom, slika ali video ob
   besedilu, izmenjujoča ozadja in strani. Paleta po originalu (zelena #28a17b / #9fe3c5): poudarek #1f8a68, temno #16181d, svetlo #eef7f3. */
.nusc-sec { padding: 60px 0; font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Arial, sans-serif; color: #16181d; background: #fff; }
.nusc-sec * { box-sizing: border-box; }
.nusc-tint { background: #eef7f3; }
.nusc-wrap { width: 100%; max-width: 1200px; margin: 0 auto; padding: 0 24px; }
.nusc-c { text-align: center; }
.nusc-sec h2, .nusc-sec h3 { font-family: inherit; text-transform: none; letter-spacing: 0; }
.nusc-kicker, .nusc-copy p.nusc-kicker { font-size: 12.5px; line-height: 1.4; font-weight: 800; letter-spacing: .14em; text-transform: uppercase; color: #1f8a68; margin: 0 0 10px; }
.nusc-h2 { font-weight: 800; font-size: clamp(25px, 3.1vw, 36px); line-height: 1.2; margin: 0 0 18px; color: #16181d; }
.nusc-h2 em { font-style: italic; color: #1f8a68; }
.nusc-sec img { display: block; width: 100%; height: auto; }
.nusc-sec p.nusc-lead { font-size: 17px; line-height: 1.6; color: #4b5260; margin: -6px auto 26px; max-width: 760px; }

/* slika ob besedilu */
.nusc-row2 { display: grid; grid-template-columns: 1fr 1fr; gap: 56px; align-items: center; }
.nusc-row2--top { align-items: start; }
.nusc-row2--rev > :first-child { order: 2; }
.nusc-gap { margin-top: 48px; }
.nusc-media > img { border-radius: 10px; box-shadow: 0 2px 4px rgba(20,40,32,.05), 0 14px 40px rgba(20,40,32,.10); max-width: 560px; margin: 0 auto; aspect-ratio: 1 / 1; object-fit: cover; background: #fff; }
.nusc-media--tall > img { aspect-ratio: 3 / 4; max-width: 480px; }
.nusc-media--natural > img { aspect-ratio: auto; object-fit: contain; }
.nusc-copy p { font-size: 16px; line-height: 1.7; color: #4b5260; margin: 0 0 14px; }
.nusc-copy p strong { color: #16181d; font-weight: 700; }
.nusc-sec p.nusc-big { font-size: 19px; font-weight: 800; color: #16181d; line-height: 1.45; margin-top: 6px; }
.nusc-sec p.nusc-note { font-size: 13px; line-height: 1.5; color: #6a7281; margin: 8px 0 12px; }
.nusc-sec p.nusc-list-title { font-weight: 700; color: #16181d; margin-bottom: 8px; }
.nusc-ticks { list-style: none; margin: 0 0 16px; padding: 0; }
.nusc-ticks li { position: relative; padding-left: 30px; margin: 0 0 8px; font-size: 16px; line-height: 1.55; color: #16181d; }
.nusc-ticks li::before { content: "✓"; position: absolute; left: 0; top: 1px; width: 20px; height: 20px; border-radius: 50%; background: #1f8a68; color: #fff; font-size: 11px; font-weight: 800; line-height: 20px; text-align: center; }
.nusc-ticks--big li { font-size: 15.5px; color: #4b5260; }
.nusc-pct { color: #1f8a68; font-size: 30px; margin-right: 6px; }

/* 3) dvije tehnologije */
.nusc-duo { display: grid; gap: 12px; margin: 0 0 16px; }
.nusc-duo > div { display: flex; gap: 14px; align-items: center; background: #fff; border: 1px solid #cfe7dd; border-radius: 10px; padding: 14px 16px; box-shadow: 0 2px 10px rgba(20,40,32,.05); }
.nusc-duo p { margin: 0 !important; }
.nusc-duo__num { flex: 0 0 34px; height: 34px; border-radius: 50%; background: #1f8a68; color: #fff; font-weight: 800; display: inline-flex; align-items: center; justify-content: center; }

/* 4/5) koraki s sličicami */
.nusc-steps { list-style: none; margin: 4px 0 8px; padding: 0; display: grid; gap: 12px; }
.nusc-steps li { display: grid; grid-template-columns: 112px 1fr; gap: 14px; align-items: center; background: #fff; border: 1px solid #cfe7dd; border-radius: 10px; padding: 10px; box-shadow: 0 2px 10px rgba(20,40,32,.05); }
.nusc-steps__img img { border-radius: 8px; aspect-ratio: 4 / 3; object-fit: cover; }
.nusc-steps h3 { font-size: 15.5px; font-weight: 800; line-height: 1.35; margin: 0 0 4px; color: #16181d; }
.nusc-steps h3 span { display: inline-flex; width: 22px; height: 22px; border-radius: 50%; background: #1f8a68; color: #fff; font-size: 12px; align-items: center; justify-content: center; margin-right: 8px; vertical-align: 1px; }
.nusc-copy .nusc-steps p { font-size: 14.5px; line-height: 1.55; margin: 0; }

/* kartice */
.nusc-cards { display: grid; gap: 18px; margin-top: 10px; }
.nusc-cards--4 { grid-template-columns: repeat(4, minmax(0, 1fr)); }
.nusc-cards--5 { grid-template-columns: repeat(5, minmax(0, 1fr)); gap: 14px; }
.nusc-cardx { background: #fff; border: 1px solid #cfe7dd; border-radius: 10px; overflow: hidden; box-shadow: 0 2px 10px rgba(20,40,32,.05); display: flex; flex-direction: column; }
.nusc-cardx__img { position: relative; }
.nusc-cardx__img img { aspect-ratio: 4 / 3; object-fit: cover; }
.nusc-cardx--pom .nusc-cardx__img img { aspect-ratio: 1 / 1; object-fit: contain; padding: 10px; background: #fff; }
.nusc-cardx__img--tall img { aspect-ratio: 3 / 4; }
.nusc-cardx__body { padding: 16px 18px 18px; }
.nusc-cardx h3 { font-size: 17px; font-weight: 800; color: #16181d; margin: 0 0 8px; line-height: 1.35; }
.nusc-cardx--pom h3 { text-align: center; margin: 0; }
.nusc-cardx p { font-size: 15px; line-height: 1.6; color: #4b5260; margin: 0; }
.nusc-cardx p.nusc-step-label { font-size: 12px; font-weight: 800; letter-spacing: .12em; text-transform: uppercase; color: #1f8a68; margin: 0 0 4px; }
.nusc-vid video { display: block; width: 100%; aspect-ratio: 16 / 9; object-fit: cover; background: #e6ece9; }

/* 7) statistika */
.nusc-stats { display: grid; grid-template-columns: repeat(3, minmax(0, 1fr)); gap: 12px; margin: 4px 0 6px; }
.nusc-stat { background: #fff; border: 1px solid #cfe7dd; border-radius: 10px; padding: 14px; box-shadow: 0 2px 10px rgba(20,40,32,.05); display: flex; flex-direction: column; gap: 4px; font-size: 14px; line-height: 1.5; color: #4b5260; }
.nusc-stat strong { font-size: 30px; line-height: 1.1; color: #1f8a68; font-weight: 800; }
.nusc-stat .nusc-stat__t { font-weight: 700; color: #16181d; }

/* 8) tabela usporedbe */
.nusc-table { border: 1px solid #cfe7dd; border-radius: 10px; overflow: hidden; background: #fff; box-shadow: 0 2px 10px rgba(20,40,32,.05); }
.nusc-table__head, .nusc-table__row { display: grid; grid-template-columns: 1fr 1fr; }
.nusc-table__head span { padding: 12px 14px; font-weight: 800; font-size: 14.5px; color: #16181d; background: #f4f6f5; }
.nusc-table__head span:first-child { background: #1f8a68; color: #fff; }
.nusc-table__head small { display: block; font-weight: 600; font-size: 12px; opacity: .9; }
.nusc-table__row span { padding: 10px 14px; font-size: 14.5px; line-height: 1.45; border-top: 1px solid #e3efe9; display: flex; gap: 8px; align-items: flex-start; }
.nusc-table__row span:first-child { background: #eef7f3; color: #16181d; font-weight: 600; }
.nusc-table__row span:last-child { color: #6a7281; }
.nusc-ok, .nusc-no { font-style: normal; font-weight: 800; flex: 0 0 auto; }
.nusc-ok { color: #1f8a68; }
.nusc-no { color: #c0392b; }

/* 11) metode */
.nusc-method ul { list-style: none; margin: 0; padding: 0; }
.nusc-method li { display: flex; gap: 8px; font-size: 14px; line-height: 1.45; color: #4b5260; margin: 0 0 6px; }
.nusc-method h3 { font-size: 16px; }
.nusc-method.is-win { border: 2px solid #1f8a68; }
.nusc-win { position: absolute; left: 10px; top: 10px; background: #1f8a68; color: #fff; font-size: 12px; font-weight: 800; padding: 4px 10px; border-radius: 999px; }

/* 12) recenzije */
.nusc-score { display: flex; flex-direction: column; align-items: center; gap: 4px; margin: 0 auto 22px; }
.nusc-score__num { font-size: 52px; font-weight: 800; line-height: 1; color: #16181d; }
.nusc-score .nusc-stars { font-size: 20px; }
.nusc-score__txt { font-size: 14px; color: #6a7281; }
.nusc-photos { display: grid; grid-template-columns: repeat(3, minmax(0, 1fr)); gap: 14px; max-width: 900px; margin: 0 auto 26px; }
.nusc-photos img { border-radius: 10px; aspect-ratio: 1 / 1; object-fit: cover; box-shadow: 0 2px 10px rgba(20,40,32,.06); }
.nusc-reviews { display: grid; grid-template-columns: repeat(5, minmax(0, 1fr)); gap: 16px; align-items: start; }
.nusc-card { background: #fff; border: 1px solid #cfe7dd; border-radius: 10px; padding: 16px; box-shadow: 0 2px 10px rgba(20,40,32,.05); }
.nusc-card__head { display: flex; align-items: center; gap: 10px; }
.nusc-avatar { width: 34px; height: 34px; border-radius: 50%; background: #d5ece2; color: #1f8a68; font-weight: 800; display: inline-flex; align-items: center; justify-content: center; font-size: 15px; }
.nusc-card h3 { font-size: 16px; font-weight: 800; line-height: 1.35; color: #16181d; margin: 10px 0 6px; }
.nusc-card__txt { font-size: 14.5px; line-height: 1.6; color: #3b414c; margin: 0 0 10px; font-style: italic; }
.nusc-card__name { font-size: 13.5px; font-weight: 700; color: #16181d; margin: 0; }
.nusc-stars { color: #f2a516; letter-spacing: 1px; font-size: 15px; }
.nusc-stars__off { color: #dfe4e2; }
.nusc-verified { color: #2f9e5f; font-weight: 600; font-size: 12px; margin-left: 4px; }

/* 13) specifikacije */
.nusc-specs { margin: 0 0 18px; padding: 6px 18px; background: #fff; border: 1px solid #cfe7dd; border-radius: 10px; }
.nusc-specs > div { display: grid; grid-template-columns: 200px 1fr; gap: 10px; padding: 8px 0; border-top: 1px solid #e3efe9; font-size: 15px; line-height: 1.5; }
.nusc-specs > div:first-child { border-top: 0; }
.nusc-specs dt { font-weight: 700; color: #16181d; margin: 0; }
.nusc-specs dd { margin: 0; color: #4b5260; }

@media (max-width: 989px) {
  .nusc-row2 { gap: 32px; }
  .nusc-cards--4 { grid-template-columns: repeat(2, minmax(0, 1fr)); }
  .nusc-cards--5 { grid-template-columns: repeat(3, minmax(0, 1fr)); }
  .nusc-reviews { grid-template-columns: repeat(3, minmax(0, 1fr)); }
}
@media (max-width: 749px) {
  .nusc-sec { padding: 42px 0; }
  .nusc-wrap { padding: 0 16px; }
  .nusc-row2 { grid-template-columns: 1fr; gap: 24px; }
  .nusc-row2--rev > :first-child { order: 0; }
  .nusc-cards { gap: 12px; }
  .nusc-cards--5 { grid-template-columns: repeat(2, minmax(0, 1fr)); }
  .nusc-stats { grid-template-columns: 1fr; }
  .nusc-specs > div { grid-template-columns: 1fr; gap: 2px; }
  .nusc-steps li { grid-template-columns: 88px 1fr; }
  .nusc-photos { gap: 8px; }
  .nusc-reviews { grid-template-columns: 1fr 1fr; gap: 12px; }
  .nusc-table__row span, .nusc-table__head span { padding: 9px 10px; font-size: 13.5px; }
}
@media (max-width: 480px) {
  .nusc-cards--4 { grid-template-columns: 1fr; }
  .nusc-reviews { grid-template-columns: 1fr; }
}

/* galerija izdelka: sličice največ v 2 vrstah (5 na vrsto), ostale slike so dosegljive z drsenjem glavne slike */
.product_cat-orto-ultrasoniccleaner .flex-control-thumbs li:nth-child(n+11) { display: none !important; }

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
.woocommerce-product-details__short-description .nusc-tick {
  position: absolute !important; left: 0 !important; top: 1px !important;
  width: 21px; height: 21px; border-radius: 50%;
  background: #2f9e5f !important; color: #fff !important;
  font-size: 12px !important; font-weight: 800 !important; line-height: 21px !important;
  text-align: center !important; display: inline-block !important; }
.woocommerce-product-details__short-description p:first-of-type { font-size: 16px; line-height: 1.55; }
</style>
