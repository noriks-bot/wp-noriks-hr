<?php
/**
 * product-bottom: NORIKS SeatCushion — ortopedski jastuk za sjedenje s potporom za donja leđa (orto-seatcushion).
 * Original: celinva.com/products/orthopedic-cushion — vsebina in vrstni red 1:1 z originalom, oblika po NORIKS stilu
 * (predloga why-grillbasket.php / why-nursingbra.php / why-hands.php), poudarek po paleti originala (roza #b83a72, temno modra #1c1d3a).
 * Pozor: NORIKS GelSeat (why-gelseat.php, orto-gelseat) je drug izdelek — ta datoteka ga ne spreminja.
 *   1) nakupna škatla: zavihki "Product Specifications / What Makes It So Special? / Return & Refund Policy"
 *      -> Što ga čini posebnim (slika z dimenzijami ob besedilu; vračilo po NORIKS pogojih)
 *   2) tekoči trak "STABILITYCORE FOAM · OEKO-TEX · HYPOALLERGENIC · …"        -> statičen trak (brez animacije, brez imen znamke)
 *   3) "The World's #1 Orthopedic Seat Cushion …" + 5 videov kupcev            -> besedilo + 5 utišanih videov s hrvaškimi napisi
 *      (logotip Celinva na videih odstranjen, angleški vžgani napisi prekriti, video 3 obrezan pred omembo akcije 50 %)
 *   4) "End Tailbone, Sciatica & Back Pain From Sitting"                       -> slika ob besedilu
 *   5) "Improve Posture & Boost Circulation"                                   -> utišan video ob besedilu
 *   6) "Relief That Adapts Wherever You Sit."                                  -> slika ob besedilu
 *   7) tekoči trak s 7 fotografijami kupcev                                    -> fotografije ob besedilu (besedilo s slike galerije originala)
 *   8) "Engineered with Orthopedic Insight …"                                  -> slika ob besedilu (značka »#1 Doctor recommended« odstranjena,
 *      »60 day money-back« -> »Pravo na 30 dana za povrat«)
 *   9) "Effective Against Common Sitting Problems" (6 harmonik)                -> 6 kartic
 *  10) "20x Cheaper Than Costly Fixes"                                         -> slika ob besedilu (USD zneski preračunani v EUR, ECB 0,89342)
 *  11) "The Cushion That Won't Quit" (primerjalna tabela)                      -> NORIKS / Ostali
 *  12) "Try It for 60 Days, Worry-Free"                                        -> Isprobajte ga 30 dana (HTML pečat ob besedilu, NORIKS pogoji)
 *  13) "Customer Reviews" (3894, 84/7/2/2/4 %)                                 -> 4,7 / 1081 z razdelitvijo, skalirano na 692 + 5 mnenj (3 s fotografijo)
 * Izpusceno: »Recommended by DR, Andy« (poimensko priporočilo zdravnika), »Less than 0.5% claim our guarantee«, »Only a few left«,
 * »Deal ends at 11:59 PM«, »128 orders placed«, ikone Free shipping / 60-day trial / Easy returns, trak »As seen in« (logotipi medijev),
 * gumba »Get yours now«, vrstica ikon »Free shipping / Money back / Secure payment / Customer service«, noga trgovine.
 * FAQ (7) je v reviews.php ($seatcushion_faq), mnenja v auto_reviews/HR_seatcushion.php, opis + nega v meta.php.
 * Slike in videi: img/seatcushion/ (nsk-…).
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$nsk      = get_template_directory_uri() . '/img/seatcushion/';
$nsk_path = get_template_directory() . '/img/seatcushion/';
$nsk_img  = function( $file, $alt, $cls = '' ) use ( $nsk, $nsk_path ) {
  if ( ! $file || ! file_exists( $nsk_path . $file ) ) { return ''; }
  return '<img src="' . esc_url( $nsk . $file ) . '" alt="' . esc_attr( $alt ) . '" loading="eager"' . ( $cls ? ' class="' . esc_attr( $cls ) . '"' : '' ) . '>';
};
$nsk_video = function( $file, $label ) use ( $nsk, $nsk_path ) {
  if ( ! file_exists( $nsk_path . $file ) ) { return ''; }
  $poster = preg_replace( '/(-hr)?\.mp4$/', '.webp', $file );
  return '<video src="' . esc_url( $nsk . $file ) . '"' . ( file_exists( $nsk_path . $poster ) ? ' poster="' . esc_url( $nsk . $poster ) . '"' : '' )
    . ' muted autoplay loop playsinline preload="metadata" aria-label="' . esc_attr( $label ) . '"></video>';
};
$nsk_stars = function( $n ) {
  $n = max( 0, min( 5, (int) $n ) );
  return '<span class="nsk-stars" aria-label="' . $n . ' od 5 zvjezdica">' . str_repeat( '★', $n ) . '<span class="nsk-stars__off">' . str_repeat( '★', 5 - $n ) . '</span></span>';
};
$nsk_kses = array( 'strong' => array(), 'em' => array(), 'br' => array() );

/* 1) zavihki nakupne škatle */
$nsk_specs = array(
  array( 'Vanjska navlaka', 'prozračna pletena tkanina, skidljiva i periva, hipoalergena' ),
  array( 'Jezgra', 'prilagodljiva ortopedska memorijska pjena' ),
  array( 'Sigurnost', 'netoksična pjena s certifikatom OEKO-TEX®' ),
  array( 'Namjena', 'osmišljen za ublažavanje pritiska i pravilno držanje' ),
);
$nsk_special = array(
  array( 'Ortopedska memorijska pjena', 'Pjena visoke gustoće koja ublažava pritisak i prilagođava se tijelu bez spljoštavanja – podupire trticu, kukove i kralježnicu za udobnost cijeli dan.' ),
  array( 'Prozračna navlaka', 'Mekana, prozračna i nježna prema koži. Skidljiva je i pere se u perilici, da jastuk uvijek ostane svjež.' ),
  array( 'Uravnotežena potpora', 'Ni premekan ni pretvrd. Osmišljen da poravna držanje i ublaži bolne točke od dugog sjedenja.' ),
);

/* 2) trak prednosti (tekoči trak originala, tu statičen) */
$nsk_strip = array( 'Stabilna jezgra od pjene', 'Certifikat OEKO-TEX®', 'Hipoalergen', 'Svilenkasto mekana navlaka', 'Prozračan i periv', 'Savršeno poravnanje' );

/* 3) videi kupcev (utišani, hrvaški napisi) */
$nsk_vids = array(
  array( 'nsk-v1-auto-hr.mp4',      'Vozač stavlja jastuk na sjedalo automobila prije dugog puta' ),
  array( 'nsk-v2-stolica-hr.mp4',   'Kupac isprobava jastuk na stolici za blagovaonskim stolom' ),
  array( 'nsk-v3-bez-boli-hr.mp4',  'Kupac od 55 godina o sjedenju bez boli' ),
  array( 'nsk-v4-trtica-hr.mp4',    'Kupac pokazuje izrez za trticu i potporu za donja leđa na autosjedalu' ),
  array( 'nsk-v5-isijas-hr.mp4',    'Vozač s išijasom o jastuku s potporom za donja leđa' ),
);

/* 7) fotografije kupcev */
$nsk_kupci = array( 'nsk-k1.webp', 'nsk-k2.webp', 'nsk-k3.webp', 'nsk-k4.webp', 'nsk-k5.webp', 'nsk-k6.webp', 'nsk-k7.webp' );

/* 9) učinkovit protiv čestih tegoba */
$nsk_tegobe = array(
  array( 'Bol u trtici', 'Izrez za trticu uklanja pritisak s trtice i raspoređuje težinu po jastuku, pa nakon nekoliko minuta sjedenja ne osjećate onu oštru, žareću bol.' ),
  array( 'Išijas i bol koja se širi u nogu', 'Držeći kukove u ravnini, a kralježnicu uspravnom, jastuk ublažava pritisak na išijasni živac – pa možete sjediti, voziti ili raditi bez boli koja se širi niz noge.' ),
  array( 'Bol u donjem dijelu leđa', 'Većina stolica ostavlja prazninu iza donjeg dijela leđa. NORIKS SeatCushion popunjava tu prazninu, vraća prirodnu zakrivljenost i smanjuje napetost mišića tijekom dugog sjedenja.' ),
  array( 'Utrnulost i oticanje nogu', 'Ravna sjedala prekidaju cirkulaciju. Zaobljeni rubovi jastuka smanjuju pritisak na bedra i održavaju protok krvi, pa su noge pune energije, a ne teške ili utrnule.' ),
  array( 'Bol u SI zglobu i kukovima', 'Neravnomjerna težina opterećuje kukove i zglobove. NORIKS SeatCushion ravnomjerno raspoređuje pritisak, pomaže održati uravnoteženo držanje i smanjuje opterećenje kukova.' ),
  array( 'Olakšanje za osjetljivo sjedenje', 'Za osjetljiva područja jastuk spaja čvrstu potporu s nježnim oblikovanjem – ublažava pritisak, pa možete udobno sjediti čak i kad je tijelo osjetljivo.' ),
);

/* 10) skupa rješenja (USD originala preračunani v EUR) */
$nsk_cijene = array(
  array( 'Ergonomska stolica:', '700 – 1.100 €', '' ),
  array( 'Tjedni posjeti kiropraktičaru:', '65 – 135 €', 'po posjetu (više od 2.600 € godišnje)' ),
  array( 'Fizikalna terapija:', '180 €+', 'po terapiji, često tjednima' ),
);

/* 11) usporedba */
$nsk_cmp = array(
  array( 'Ublažava pritisak na trticu i leđa', 'y', 'n' ),
  array( 'Podupire uspravno, zdravo držanje', 'y', 'n' ),
  array( 'Zadržava oblik s vremenom', 'y', 'n' ),
  array( 'Protuklizna podloga', 'y', 'n' ),
);

/* 13) recenzije — 5 mnenj originala (imena lokalizirana), 3 s fotografijami kupcev */
$nsk_reviews = array(
  array( 'ime' => 'Ivan M.', 'img' => 'nsk-rv-1.webp',
         'tekst' => 'Pruža više potpore nego što izgleda. Čvrst, a opet udoban, i zadržava oblik i nakon dugih vožnji. Koristim ga svaki dan u autu i zasad odlično služi.' ),
  array( 'ime' => 'Marta J.', 'img' => 'nsk-rv-2.webp',
         'tekst' => 'Savršeno pristaje na običnu stolicu. Čvrst, ali udoban, i ne kliže.' ),
  array( 'ime' => 'Marko E.', 'img' => 'nsk-rv-3.webp',
         'tekst' => 'Čvrst na dobar način. Pjena se ne ulegne i pruža jednaku potporu svaki put kad sjednem.' ),
  array( 'ime' => 'Sanja S.', 'img' => '',
         'tekst' => 'Duge vožnje autom prava su muka za moja donja leđa i stražnjicu, pa sam ga kupila za auto. Ali do auta nije stigao. I sjedenje na kauču mi je bolno (kad nađem kauč koji nije, odmah ću ga kupiti), pa je završio tamo i tamo ostao. Sviđa mi se oblik i potpora za sam donji dio leđa. Podstava je udobna i dovoljno čvrsta da pruža potporu, a navlaka djeluje izdržljivo. Razmišljam da kupim još jedan za auto.' ),
  array( 'ime' => 'Margareta E.', 'img' => '',
         'tekst' => 'Moj suprug ga obožava! Vozač je i dugo sjedi, a ovaj jastuk mu ublažava bol u leđima i stražnjici. Naručili smo jedan za njega i oboje smo oduševljeni. Toplo preporučujem svima koji voze – bit će vam drago što ste ga kupili!' ),
);
/* razdelitev ocen originala 3284 / 269 / 97 / 77 / 167 (od 3894) skalirana na 692 recenzij (NORIKS) */
$nsk_dist = array( 5 => 584, 4 => 48, 3 => 17, 2 => 14, 1 => 29 );

$nsk_n = 0; // števec sekcij za izmenična ozadja
$nsk_cls = function() use ( &$nsk_n ) { $nsk_n++; return ( $nsk_n % 2 ) ? ' nsk-tint' : ''; };
$nsk_mark = function( $v ) {
  if ( 'y' === $v ) { return '<span class="nsk-yes" aria-label="da">✓</span>'; }
  return '<span class="nsk-no" aria-label="ne">✕</span>';
};
?>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap">

<!-- 1) ŠTO GA ČINI POSEBNIM (zavihki nakupne škatle: specifikacije, posebnosti, vračilo) — slika ob besedilu -->
<section class="nsk-sec<?php echo $nsk_cls(); ?>">
  <div class="nsk-wrap">
    <div class="nsk-row2 nsk-row2--top">
      <div class="nsk-media"><?php echo $nsk_img( 'nsk-s1-dimenzije.webp', 'NORIKS SeatCushion – dimenzije 44 × 42 cm, visina naslona 32 cm', 'nsk-img--free' ); ?></div>
      <div class="nsk-copy">
        <p class="nsk-kicker">Što ga čini posebnim?</p>
        <h2 class="nsk-h2">Ortopedska udobnost <em>za svako sjedalo</em></h2>
        <dl class="nsk-specs">
          <?php foreach ( $nsk_specs as $sp ) : ?>
          <div><dt><?php echo esc_html( $sp[0] ); ?>:</dt><dd><?php echo esc_html( $sp[1] ); ?></dd></div>
          <?php endforeach; ?>
        </dl>
        <?php foreach ( $nsk_special as $f ) : ?>
        <div class="nsk-feat">
          <h3><?php echo esc_html( $f[0] ); ?></h3>
          <p><?php echo esc_html( $f[1] ); ?></p>
        </div>
        <?php endforeach; ?>
        <p class="nsk-note"><strong>Izrađen za svakodnevno olakšanje.</strong> Svaki jastuk izrađen je od ortopedske pjene i prozračne navlake, osmišljen da zadrži oblik i udobnost uz svakodnevnu upotrebu.</p>
        <p class="nsk-big">Pravo na povrat u roku od 30 dana – isprobajte ga kod kuće, na poslu ili na putu.</p>
      </div>
    </div>
  </div>
</section>

<!-- 2) TRAK PREDNOSTI (tekoči trak originala, statičen) -->
<section class="nsk-strip" aria-label="Prednosti NORIKS SeatCushion">
  <div class="nsk-wrap">
    <ul class="nsk-strip__list">
      <?php foreach ( $nsk_strip as $s ) : ?><li><?php echo esc_html( $s ); ?></li><?php endforeach; ?>
    </ul>
  </div>
</section>

<!-- 3) OMILJENI ORTOPEDSKI JASTUK ("The World's #1 Orthopedic Seat Cushion …") — besedilo + 5 utišanih videov s hrvaškimi napisi -->
<section class="nsk-sec<?php echo $nsk_cls(); ?>">
  <div class="nsk-wrap">
    <div class="nsk-row2 nsk-row2--vids">
      <div class="nsk-copy">
        <p class="nsk-kicker">Vole ga tisuće kupaca</p>
        <h2 class="nsk-h2">Omiljeni ortopedski jastuk <em>za svakodnevnu udobnost</em></h2>
        <p>Podržavaju ga tisuće zadovoljnih kupaca – <strong>od vozača na cesti do uredskih radnika i obitelji kod kuće</strong>.</p>
        <p class="nsk-big">Pogledajte što kažu oni koji na njemu sjede svaki dan.</p>
      </div>
      <div class="nsk-vids">
        <?php foreach ( $nsk_vids as $v ) : $html = $nsk_video( $v[0], $v[1] ); if ( ! $html ) { continue; } ?>
        <div class="nsk-vids__item"><?php echo $html; ?></div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>

<!-- 4) KRAJ BOLI U TRTICI, IŠIJASA I BOLI U LEĐIMA ("End Tailbone, Sciatica & Back Pain From Sitting") — slika ob besedilu -->
<section class="nsk-sec<?php echo $nsk_cls(); ?>">
  <div class="nsk-wrap">
    <div class="nsk-row2">
      <div class="nsk-media"><?php echo $nsk_img( 'nsk-s4-bez-boli.webp', 'Vozač s bolom u križima i isti vozač bez boli na jastuku NORIKS SeatCushion' ); ?></div>
      <div class="nsk-copy">
        <p class="nsk-kicker">Bez boli pri sjedenju</p>
        <h2 class="nsk-h2">Kraj boli u trtici, išijasa i <em>boli u leđima od sjedenja</em></h2>
        <p>Većina stolica iscrpljuje vaše tijelo već za 30 minuta. <strong>Kukovi se nagnu, kralježnica se uruši, a pritisak se nakuplja na trtici i išijasnom živcu.</strong> Zato vas duge vožnje, rad za stolom ili čak večera za stolom mogu ostaviti bolnima, ukočenima ili utrnulima.</p>
        <p><strong>NORIKS SeatCushion</strong> izrađen je drugačije. Izrez za trticu uklanja izravan pritisak s trtice, a oblikovani dizajn podupire kralježnicu i vraća zdravo držanje. Memorijska pjena visoke gustoće ravnomjerno raspoređuje težinu na kukove i bedra i održava cirkulaciju, pa noge ne utrnu.</p>
        <p class="nsk-big">Izrez za trticu, potpora kralježnici i pjena koja se ne spljošti.</p>
      </div>
    </div>
  </div>
</section>

<!-- 5) BOLJE DRŽANJE I BOLJA CIRKULACIJA ("Improve Posture & Boost Circulation") — utišan video ob besedilu -->
<section class="nsk-sec<?php echo $nsk_cls(); ?>">
  <div class="nsk-wrap">
    <div class="nsk-row2 nsk-row2--rev">
      <div class="nsk-media nsk-media--video"><?php echo $nsk_video( 'nsk-s5-drzanje.mp4', 'Jastuk NORIKS SeatCushion na uredskoj stolici' ); ?></div>
      <div class="nsk-copy">
        <p class="nsk-kicker">Držanje i cirkulacija</p>
        <h2 class="nsk-h2">Bolje držanje i <em>bolja cirkulacija</em></h2>
        <p>Autosjedala i uredske stolice napravljene su da budu izdržljive, a ne za vaše tijelo. Njihov oblik tjera kukove da propadnu, a bedra da utonu u sjedalo – <strong>cirkulacija se usporava</strong>, noge postaju nemirne, a leđa vas bole još dugo nakon što ustanete.</p>
        <p><strong>NORIKS SeatCushion</strong> osmišljen je za duge sate sjedenja. Oblikovana baza drži kukove u ravnini, zaobljeni rubovi smanjuju pritisak na bedra, a lumbalno uzdignuće podupire kralježnicu kilometar za kilometrom.</p>
        <p class="nsk-big">Rezultat? Uspravno držanje, zdrava cirkulacija i sati sjedenja bez boli i ukočenosti.</p>
      </div>
    </div>
  </div>
</section>

<!-- 6) OLAKŠANJE GDJE GOD SJEDITE ("Relief That Adapts Wherever You Sit.") — slika ob besedilu -->
<section class="nsk-sec<?php echo $nsk_cls(); ?>">
  <div class="nsk-wrap">
    <div class="nsk-row2">
      <div class="nsk-media"><?php echo $nsk_img( 'nsk-s6-svugdje.webp', 'NORIKS SeatCushion na uredskoj stolici, autosjedalu i stolici' ); ?></div>
      <div class="nsk-copy">
        <p class="nsk-kicker">Za svako sjedalo</p>
        <h2 class="nsk-h2">Olakšanje koje se prilagođava <em>gdje god sjedite</em></h2>
        <p><strong>NORIKS SeatCushion</strong> prilagođava se svakom sjedalu. Stabilna, protuklizna podloga drži ga na mjestu na <strong>autosjedalima, uredskim i blagovaonskim stolicama te invalidskim kolicima</strong>, pa udobnost ide s vama kroz cijeli dan.</p>
        <p>Memorijska pjena visoke gustoće podupire tijelo bez spljoštavanja, a skidljiva navlaka koja se pere u perilici održava ga svježim, čistim i spremnim za svakodnevnu upotrebu.</p>
        <p class="nsk-big">Auto, ured, blagovaonica – jedan jastuk za sve.</p>
      </div>
    </div>
  </div>
</section>

<!-- 7) FOTOGRAFIJE KUPCEV (tekoči trak originala s 7 fotografijami) — fotografije ob besedilu -->
<section class="nsk-sec<?php echo $nsk_cls(); ?>">
  <div class="nsk-wrap">
    <div class="nsk-row2 nsk-row2--rev">
      <div class="nsk-photos">
        <?php foreach ( $nsk_kupci as $k ) : ?><div class="nsk-photos__item"><?php echo $nsk_img( $k, 'Kupac s jastukom NORIKS SeatCushion' ); ?></div><?php endforeach; ?>
      </div>
      <div class="nsk-copy">
        <p class="nsk-kicker"><?php echo $nsk_stars( 5 ); ?> Naši kupci</p>
        <h2 class="nsk-h2">Vole ga tisuće – <em>dokazano olakšava bol pri sjedenju</em></h2>
        <p>Pridružite se ljudima kojima je <strong>bolno sjedenje postalo udobno</strong>.</p>
        <p class="nsk-big">U autu, na poslu i kod kuće.</p>
      </div>
    </div>
  </div>
</section>

<!-- 8) OSMIŠLJEN UZ ORTOPEDSKO ZNANJE ("Engineered with Orthopedic Insight, Built for Everyday Sitting.") — slika ob besedilu -->
<section class="nsk-sec<?php echo $nsk_cls(); ?>">
  <div class="nsk-wrap">
    <div class="nsk-row2">
      <div class="nsk-media"><?php echo $nsk_img( 'nsk-s8-strucnjaci.webp', 'Ortopedski jastuk za sjedenje NORIKS SeatCushion u rukama stručnjaka' ); ?></div>
      <div class="nsk-copy">
        <p class="nsk-kicker">Ortopedsko znanje</p>
        <h2 class="nsk-h2">Osmišljen uz ortopedsko znanje, <em>izrađen za svakodnevno sjedenje</em></h2>
        <p>Uz savjete ortopedskih stručnjaka i mjesece ergonomskog testiranja, <strong>NORIKS SeatCushion</strong> osmišljen je da ublaži najčešće tegobe uzrokovane dugim sjedenjem – <strong>od pritiska na trticu do nelagode u donjem dijelu leđa i kukovima</strong>.</p>
        <p class="nsk-big">Izrađen za sate sjedenja – u autu, uredu i kod kuće.</p>
      </div>
    </div>
  </div>
</section>

<!-- 9) UČINKOVIT PROTIV ČESTIH TEGOBA OD SJEDENJA ("Effective Against Common Sitting Problems") — 6 kartic -->
<section class="nsk-sec<?php echo $nsk_cls(); ?>">
  <div class="nsk-wrap">
    <p class="nsk-kicker nsk-c">Učinkovit protiv</p>
    <h2 class="nsk-h2 nsk-c">Učinkovit protiv <em>čestih tegoba od sjedenja</em></h2>
    <div class="nsk-cards">
      <?php foreach ( $nsk_tegobe as $t ) : ?>
      <article class="nsk-tcard">
        <span class="nsk-tcard__tick" aria-hidden="true">✓</span>
        <div>
          <h3><?php echo esc_html( $t[0] ); ?></h3>
          <p><?php echo esc_html( $t[1] ); ?></p>
        </div>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- 10) 20 PUTA JEFTINIJI OD SKUPIH RJEŠENJA ("20x Cheaper Than Costly Fixes") — slika ob besedilu -->
<section class="nsk-sec<?php echo $nsk_cls(); ?>">
  <div class="nsk-wrap">
    <div class="nsk-row2 nsk-row2--rev">
      <div class="nsk-media"><?php echo $nsk_img( 'nsk-s10-cijena.webp', 'NORIKS SeatCushion na uredskoj stolici – sjedite bolje, živite bolje' ); ?></div>
      <div class="nsk-copy">
        <p class="nsk-kicker">Pametna investicija</p>
        <h2 class="nsk-h2">20 puta jeftiniji <em>od skupih rješenja</em></h2>
        <p>Većina ljudi <strong>potroši tisuće</strong> pokušavajući riješiti bol od sjedenja:</p>
        <ul class="nsk-costs">
          <?php foreach ( $nsk_cijene as $c ) : ?>
          <li><span class="nsk-no" aria-hidden="true">✕</span><span><strong><?php echo esc_html( $c[0] ); ?></strong> <b class="nsk-costs__eur"><?php echo esc_html( $c[1] ); ?></b> <?php echo esc_html( $c[2] ); ?></span></li>
          <?php endforeach; ?>
          <li class="nsk-costs__us"><span class="nsk-yes" aria-hidden="true">✓</span><span><strong>NORIKS SeatCushion:</strong> jednokratna kupnja koja ublažava bol u trtici, leđima i kukovima bez pražnjenja novčanika.</span></li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- 11) JASTUK KOJI NE ODUSTAJE ("The Cushion That Won't Quit" — primerjalna tabela) -->
<section class="nsk-sec<?php echo $nsk_cls(); ?>">
  <div class="nsk-wrap nsk-wrap--narrow">
    <p class="nsk-kicker nsk-c">Usporedba</p>
    <h2 class="nsk-h2 nsk-c">Jastuk koji <em>ne odustaje</em></h2>
    <p class="nsk-lead nsk-c">Ostaje čvrst, ublažava bol i pruža potporu ondje gdje drugi zakažu.</p>
    <div class="nsk-cmp" role="table" aria-label="Usporedba: NORIKS SeatCushion i drugi jastuci">
      <div class="nsk-cmp__row nsk-cmp__head" role="row">
        <span role="columnheader"></span>
        <span role="columnheader" class="nsk-cmp__us">NORIKS</span>
        <span role="columnheader">Ostali</span>
      </div>
      <?php foreach ( $nsk_cmp as $r ) : ?>
      <div class="nsk-cmp__row" role="row">
        <span role="cell" class="nsk-cmp__lbl"><?php echo esc_html( $r[0] ); ?></span>
        <span role="cell" class="nsk-cmp__us"><?php echo $nsk_mark( $r[1] ); ?></span>
        <span role="cell"><?php echo $nsk_mark( $r[2] ); ?></span>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- 12) ISPROBAJTE GA 30 DANA ("Try It for 60 Days, Worry-Free" -> NORIKS pogoji) — pečat ob besedilu -->
<section class="nsk-sec<?php echo $nsk_cls(); ?>">
  <div class="nsk-wrap">
    <div class="nsk-row2">
      <div class="nsk-media nsk-media--seal">
        <div class="nsk-seal" role="img" aria-label="Pravo na povrat u roku od 30 dana">
          <span class="nsk-seal__top">Pravo na povrat</span>
          <span class="nsk-seal__num">30</span>
          <span class="nsk-seal__days">dana</span>
          <span class="nsk-seal__bot">bez brige</span>
        </div>
      </div>
      <div class="nsk-copy">
        <p class="nsk-kicker">Bez rizika</p>
        <h2 class="nsk-h2">Isprobajte ga <em>30 dana</em>, bez brige</h2>
        <p>Pronaći pravi jastuk nije lako – mnogi se spljošte ili jednostavno ne donesu pravo olakšanje. Zato uz svaki NORIKS SeatCushion imate <strong>pravo na povrat u roku od 30 dana</strong>.</p>
        <p>Ponesite ga u ured, u auto ili ga koristite tijekom dugih sati kod kuće. Ako ne osjetite manje boli i više udobnosti pri svakodnevnom sjedenju, jednostavno ga vratite. <strong>Besplatna dostava za narudžbe iznad 70 €.</strong></p>
        <p class="nsk-big">Kad je riječ o vašem zdravlju i udobnosti, razliku trebate osjetiti, a ne se samo nadati.</p>
      </div>
    </div>
  </div>
</section>

<!-- 13) RECENZIJE KUPACA ("Customer Reviews") — 1081 po NORIKS + 5 mnenj originala -->
<section class="nsk-sec<?php echo $nsk_cls(); ?>">
  <div class="nsk-wrap">
    <p class="nsk-kicker nsk-c">Recenzije kupaca</p>
    <h2 class="nsk-h2 nsk-c">Što kažu oni <em>koji na njemu sjede</em></h2>
    <div class="nsk-score">
      <div class="nsk-score__left">
        <span class="nsk-score__num">4,7</span>
        <?php echo $nsk_stars( 5 ); ?>
        <span class="nsk-score__txt">Na temelju 1081 recenzije</span>
      </div>
      <div class="nsk-dist">
        <?php foreach ( $nsk_dist as $z => $c ) : ?>
        <div class="nsk-dist__row"><span><?php echo (int) $z; ?> ★</span><span class="nsk-dist__bar"><i style="width:<?php echo round( $c / 692 * 100, 1 ); ?>%"></i></span><span><?php echo (int) $c; ?></span></div>
        <?php endforeach; ?>
      </div>
    </div>
    <div class="nsk-reviews">
      <?php foreach ( $nsk_reviews as $r ) : ?>
      <article class="nsk-card<?php echo $r['img'] ? ' nsk-card--img' : ' nsk-card--txt'; ?>">
        <?php if ( $r['img'] ) : ?><div class="nsk-card__img"><?php echo $nsk_img( $r['img'], 'Fotografija kupca: ' . $r['ime'] ); ?></div><?php endif; ?>
        <div class="nsk-card__body">
          <?php echo $nsk_stars( 5 ); ?>
          <p class="nsk-card__txt">„<?php echo esc_html( $r['tekst'] ); ?>”</p>
          <p class="nsk-card__name"><?php echo esc_html( $r['ime'] ); ?> <span class="nsk-ok">✓ Potvrđena kupnja</span></p>
        </div>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<style>
/* NORIKS stil (predloga why-grillbasket.php / why-hands.php): oznaka + naslov z ležečim poudarkom, slika ali video ob
   besedilu, izmenjujoča ozadja in strani. Paleta originala: roza #b83a72, temno modra #1c1d3a, svetlo roza #fbf0f5. */
.nsk-sec { padding: 60px 0; font-family: 'Poppins', system-ui, -apple-system, 'Segoe UI', Roboto, Arial, sans-serif; color: #1c1d3a; background: #fff; }
.nsk-sec *, .nsk-strip * { box-sizing: border-box; }
.nsk-tint { background: #fbf0f5; }
.nsk-wrap { width: 100%; max-width: 1200px; margin: 0 auto; padding: 0 24px; }
.nsk-wrap--narrow { max-width: 900px; }
.nsk-c { text-align: center; }
.nsk-sec h2, .nsk-sec h3 { font-family: inherit; text-transform: none; letter-spacing: 0; }
.nsk-kicker, .nsk-copy p.nsk-kicker { font-size: 12.5px; line-height: 1.4; font-weight: 700; letter-spacing: .14em; text-transform: uppercase; color: #b83a72; margin: 0 0 10px; }
.nsk-kicker .nsk-stars { letter-spacing: 1px; margin-right: 6px; }
.nsk-h2 { font-weight: 700; font-size: clamp(25px, 3.1vw, 36px); line-height: 1.2; margin: 0 0 18px; color: #1c1d3a; }
.nsk-h2 em { font-style: italic; color: #b83a72; }
.nsk-sec img { display: block; width: 100%; height: auto; }
.nsk-lead { max-width: 760px; margin: 0 auto 28px; font-size: 16.5px; line-height: 1.7; color: #4a4458; }

/* slika / video ob besedilu */
.nsk-row2 { display: grid; grid-template-columns: 1fr 1fr; gap: 56px; align-items: center; }
.nsk-row2--top { align-items: start; }
.nsk-row2--rev > :first-child { order: 2; }
.nsk-media > img { border-radius: 10px; box-shadow: 0 2px 4px rgba(28,29,58,.05), 0 14px 40px rgba(28,29,58,.10); max-width: 560px; margin: 0 auto; aspect-ratio: 1 / 1; object-fit: cover; background: #fff; }
.nsk-media > img.nsk-img--free { aspect-ratio: auto; object-fit: contain; }
.nsk-media--video video { display: block; width: 100%; max-width: 480px; margin: 0 auto; border-radius: 10px; aspect-ratio: 810 / 1080; object-fit: cover; background: #1c1d3a; box-shadow: 0 2px 4px rgba(28,29,58,.05), 0 14px 40px rgba(28,29,58,.10); }
.nsk-copy p { font-size: 16px; line-height: 1.7; color: #4a4458; margin: 0 0 14px; }
.nsk-copy p strong { color: #1c1d3a; font-weight: 600; }
.nsk-sec p.nsk-big { font-size: 19px; font-weight: 700; color: #1c1d3a; line-height: 1.45; margin-top: 6px; }

/* 1) specifikacije + posebnosti */
.nsk-specs { margin: 0 0 18px; padding: 14px 18px; background: #fff; border: 1px solid #efd3e0; border-radius: 10px; }
.nsk-tint .nsk-specs { background: #fff; }
.nsk-specs > div { display: grid; grid-template-columns: 140px 1fr; gap: 10px; padding: 7px 0; border-top: 1px solid #f5e3ec; font-size: 15px; line-height: 1.55; }
.nsk-specs > div:first-child { border-top: 0; }
.nsk-specs dt { font-weight: 700; color: #1c1d3a; margin: 0; }
.nsk-specs dd { margin: 0; color: #4a4458; }
.nsk-feat { border-left: 3px solid #b83a72; padding: 2px 0 2px 16px; margin: 16px 0 0; }
.nsk-feat h3 { font-size: 17px; font-weight: 700; color: #1c1d3a; margin: 0 0 6px; line-height: 1.35; }
.nsk-copy .nsk-feat p { font-size: 15px; line-height: 1.65; margin: 0; }
.nsk-copy p.nsk-note { margin-top: 18px; font-size: 15px; }

/* 2) trak prednosti */
.nsk-strip { background: #1c1d3a; color: #fff; padding: 16px 0; font-family: 'Poppins', system-ui, -apple-system, 'Segoe UI', Roboto, Arial, sans-serif; }
.nsk-strip__list { list-style: none; margin: 0; padding: 0; display: flex; flex-wrap: wrap; justify-content: center; gap: 10px 30px; }
.nsk-strip__list li { position: relative; padding-left: 26px; font-size: 14.5px; font-weight: 600; letter-spacing: .04em; text-transform: uppercase; line-height: 1.5; margin: 0; }
.nsk-strip__list li::before { content: "✓"; position: absolute; left: 0; top: 2px; width: 18px; height: 18px; border-radius: 50%; background: #e05a98; color: #fff; font-size: 11px; font-weight: 800; line-height: 18px; text-align: center; }

/* 3) videi */
.nsk-row2--vids { grid-template-columns: 1fr 1.6fr; }
.nsk-vids { display: grid; grid-template-columns: repeat(3, minmax(0, 1fr)); gap: 10px; }
.nsk-vids__item { border-radius: 10px; overflow: hidden; background: #1c1d3a; aspect-ratio: 606 / 1080; box-shadow: 0 2px 10px rgba(28,29,58,.12); }
.nsk-vids__item video { display: block; width: 100%; height: 100%; object-fit: cover; }

/* 7) fotografije kupcev */
.nsk-photos { display: grid; grid-template-columns: repeat(4, minmax(0, 1fr)); gap: 10px; }
.nsk-photos__item { position: relative; border-radius: 10px; overflow: hidden; box-shadow: 0 2px 10px rgba(28,29,58,.10); }
.nsk-photos__item img { aspect-ratio: 3 / 4; object-fit: cover; }
.nsk-photos__item:first-child { grid-row: span 2; }
.nsk-photos__item:first-child img { position: absolute; inset: 0; height: 100%; aspect-ratio: auto; }

/* 9) kartice tegob */
.nsk-cards { display: grid; grid-template-columns: repeat(3, minmax(0, 1fr)); gap: 18px; margin-top: 10px; }
.nsk-tcard { display: grid; grid-template-columns: 34px 1fr; gap: 12px; background: #fff; border: 1px solid #efd3e0; border-radius: 10px; padding: 18px; box-shadow: 0 2px 10px rgba(28,29,58,.05); }
.nsk-tcard__tick { width: 30px; height: 30px; border-radius: 50%; background: #2f9e5f; color: #fff; font-weight: 800; font-size: 15px; line-height: 30px; text-align: center; }
.nsk-tcard h3 { font-size: 17px; font-weight: 700; color: #1c1d3a; margin: 3px 0 6px; line-height: 1.35; }
.nsk-tcard p { font-size: 14.5px; line-height: 1.65; color: #4a4458; margin: 0; }

/* 10) skupa rješenja */
.nsk-costs { list-style: none; margin: 4px 0 0; padding: 0; }
.nsk-costs li { display: grid; grid-template-columns: 30px 1fr; gap: 10px; align-items: start; padding: 10px 0; border-top: 1px solid #f0dbe5; font-size: 15.5px; line-height: 1.6; color: #4a4458; margin: 0; }
.nsk-costs li:first-child { border-top: 0; }
.nsk-costs li strong { color: #1c1d3a; }
.nsk-costs__eur { color: #b83a72; font-weight: 700; }
.nsk-costs li.nsk-costs__us { margin-top: 6px; background: #fff; border: 2px solid #b83a72; border-radius: 10px; padding: 12px 14px; }

/* 11) usporedba */
.nsk-cmp { margin: 8px auto 0; max-width: 680px; border-radius: 10px; overflow: hidden; border: 1px solid #efd3e0; background: #fff; }
.nsk-cmp__row { display: grid; grid-template-columns: 2fr 1fr 1fr; align-items: center; border-top: 1px solid #f5e3ec; }
.nsk-cmp__row:first-child { border-top: 0; }
.nsk-cmp__row > span { padding: 14px 8px; text-align: center; font-size: 15px; color: #4a4458; }
.nsk-cmp__row > span.nsk-cmp__lbl { text-align: left; padding-left: 18px; font-weight: 600; color: #1c1d3a; }
.nsk-cmp__head > span { font-size: 12.5px; font-weight: 700; text-transform: uppercase; letter-spacing: .06em; color: #6b6478; }
.nsk-cmp__row > span.nsk-cmp__us { background: #b83a72; color: #fff; }
.nsk-cmp__head > span.nsk-cmp__us { color: #fff; font-size: 14px; letter-spacing: .1em; }
.nsk-yes, .nsk-no { display: inline-block; width: 22px; height: 22px; border-radius: 50%; font-size: 12px; font-weight: 800; line-height: 22px; text-align: center; font-style: normal; }
.nsk-yes { background: #2f9e5f; color: #fff; }
.nsk-cmp__us .nsk-yes { background: #fff; color: #b83a72; }
.nsk-no { background: #f3d6d6; color: #c0392b; }
.nsk-costs .nsk-yes, .nsk-costs .nsk-no { margin-top: 2px; }

/* 12) pečat */
.nsk-media--seal { display: flex; justify-content: center; }
.nsk-seal { width: 300px; height: 300px; border-radius: 50%; background: #fff; border: 10px solid #f6d9e6; outline: 2px dashed #b83a72; outline-offset: -26px; display: flex; flex-direction: column; align-items: center; justify-content: center; text-align: center; box-shadow: 0 14px 40px rgba(28,29,58,.12); color: #1c1d3a; }
.nsk-seal__top, .nsk-seal__bot { font-size: 14px; font-weight: 700; letter-spacing: .14em; text-transform: uppercase; }
.nsk-seal__num { font-size: 96px; font-weight: 800; line-height: .95; color: #b83a72; margin-top: 6px; }
.nsk-seal__days { font-size: 28px; font-weight: 800; text-transform: uppercase; color: #b83a72; letter-spacing: .06em; margin-bottom: 8px; }

/* 13) recenzije */
.nsk-score { display: grid; grid-template-columns: 220px minmax(0, 420px); gap: 28px; justify-content: center; align-items: center; margin: 6px auto 30px; }
.nsk-score__left { display: flex; flex-direction: column; align-items: center; gap: 4px; }
.nsk-score__num { font-size: 52px; font-weight: 700; line-height: 1; color: #1c1d3a; }
.nsk-score__left .nsk-stars { font-size: 20px; }
.nsk-score__txt { font-size: 14px; color: #6b6478; }
.nsk-dist__row { display: grid; grid-template-columns: 38px 1fr 40px; gap: 10px; align-items: center; font-size: 14px; color: #4a4458; margin: 5px 0; }
.nsk-dist__bar { height: 9px; border-radius: 999px; background: #f1e1e9; overflow: hidden; }
.nsk-dist__bar i { display: block; height: 100%; background: #b83a72; border-radius: 999px; }
.nsk-reviews { display: grid; grid-template-columns: repeat(5, minmax(0, 1fr)); gap: 16px; align-items: start; }
.nsk-card { background: #fff; border: 1px solid #efd3e0; border-radius: 10px; overflow: hidden; display: flex; flex-direction: column; box-shadow: 0 2px 10px rgba(28,29,58,.05); }
.nsk-tint .nsk-card { background: #fff; }
.nsk-card__img img { aspect-ratio: 3 / 4; object-fit: cover; }
.nsk-card__body { padding: 16px; }
.nsk-card__txt { font-size: 14.5px; line-height: 1.6; color: #3a3448; margin: 8px 0 10px; font-style: italic; }
.nsk-card__name { font-size: 13.5px; font-weight: 600; color: #1c1d3a; margin: 0; }

/* ocjene */
.nsk-stars { color: #f2a516; letter-spacing: 1px; font-size: 15px; }
.nsk-stars__off { color: #e2d6dc; }
.nsk-ok { color: #2f9e5f; font-weight: 600; font-size: 12px; margin-left: 4px; font-style: normal; }

@media (max-width: 989px) {
  .nsk-row2 { gap: 32px; }
  .nsk-row2--vids { grid-template-columns: 1fr; }
  .nsk-cards { grid-template-columns: 1fr 1fr; }
  .nsk-reviews { grid-template-columns: repeat(3, minmax(0, 1fr)); }
}
@media (max-width: 749px) {
  .nsk-sec { padding: 42px 0; }
  .nsk-wrap { padding: 0 16px; }
  .nsk-row2 { grid-template-columns: 1fr; gap: 24px; }
  .nsk-row2--rev > :first-child { order: 0; }
  .nsk-vids { grid-template-columns: repeat(2, minmax(0, 1fr)); }
  .nsk-cards { grid-template-columns: 1fr; gap: 12px; }
  .nsk-specs > div { grid-template-columns: 1fr; gap: 2px; }
  .nsk-strip__list { justify-content: flex-start; gap: 8px 22px; }
  .nsk-strip__list li { font-size: 13px; }
  .nsk-score { grid-template-columns: 1fr; gap: 14px; }
  .nsk-reviews { grid-template-columns: 1fr 1fr; gap: 12px; }
  .nsk-card__body { padding: 12px; }
  .nsk-seal { width: 240px; height: 240px; }
  .nsk-seal__num { font-size: 76px; }
}
@media (max-width: 480px) {
  .nsk-reviews { grid-template-columns: 1fr; }
}

/* galerija izdelka: sličice največ v 2 vrstah (5 na vrsto), ostale slike so dosegljive z drsenjem glavne slike */
.product_cat-orto-seatcushion .flex-control-thumbs li:nth-child(n+11) { display: none !important; }

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
.woocommerce-product-details__short-description .nsk-tick {
  position: absolute !important; left: 0 !important; top: 1px !important;
  width: 21px; height: 21px; border-radius: 50%;
  background: #2f9e5f !important; color: #fff !important;
  font-size: 12px !important; font-weight: 800 !important; line-height: 21px !important;
  text-align: center !important; display: inline-block !important; }
.woocommerce-product-details__short-description p:first-of-type { font-size: 16px; line-height: 1.55; }
</style>
