<?php
/**
 * product-bottom: NORIKS VacuumSealer — bežični ručni vakuumski aparat za hranu (orto-vacuumsealer).
 * Original: chefpreserve.com/products/cp — vsebina in vrstni red 1:1 z originalom, oblika po NORIKS stilu
 * (predloga why-therapillow.php / why-hands.php), poudarek po paleti originala (rdeča #c3192a -> #b51f2e, ozadje #f5f6f8):
 *   1) zavihki nakupne škatle "Product Details / What's Included / Bag Information" -> Detalji o proizvodu (slika ob besedilu)
 *   2) "Other Storage Methods" (3 kartice)                     -> Drugi načini čuvanja hrane (3 kartice s slikami)
 *   3) "Why People Love Chef Preserve" (video + 2 sliki, 94/91/96 %) -> Zašto ljudi vole NORIKS VacuumSealer (3 vrstice
 *      slika/video ob besedilu; video utišan, logotip na pokrovčku zamegljen; 2. video zamenjan s čisto sličico, ker je
 *      napis znamke na vrečki čez avokado)
 *   4) "Seal Faster. Store Smarter. Waste Less." (6 lastnosti)  -> slika ob seznamu (Two Year Warranty -> pravo na povrat 30 dana)
 *   5) "Works in 4 Simple Steps"                               -> Radi u 4 jednostavna koraka (4 kartice)
 *   6) "Innovative Vacuum Bags" (4 lastnosti)                  -> Inovativne vakuumske vrećice (slika ob besedilu)
 *   7) "Unsealed vs. Sealed" (3-day test)                      -> Bez vakuuma vs. vakuumirano (par slik ob besedilu)
 *   8) "Vacuum Sealing. Reinvented." (primerjalna tabela)       -> Vakuumiranje. Iznova osmišljeno. (tabela ob besedilu)
 *   9) "Let's Hear What Our Customers Have To Say" (3 mnenja)   -> Poslušajte što kažu naši kupci (3 fotografije + mnenja)
 *  10) Judge.me 12,202 recenzij, 4,8                           -> Recenzije kupaca: 1081, porazdelitev zvezdic skalirana na 692 + 8 mnenj
 *  11) "Sale Ends Soon" zaključni CTA (slika paketa)           -> Uštedite novac… (slika ob besedilu, brez odštevalnika in »51 % OFF«)
 * Izpusceno: pasice Free Shipping / 2-Year Warranty / 60-Day Money Back (3x), blok Free & Fast Delivery / Secure Payment,
 * odštevalnik "Sale Ends Soon", "Sell-out Risk", noga trgovine, portreti kupcev (vplivnezi) pri mnenjih.
 * Slike z logotipom (cp na pokrovu, napis na podnožju, napis na vrečkah) so retuširane; napis "30 BAGS" -> "30 VREĆICA".
 * FAQ (8) je v reviews.php ($vacuumsealer_faq), mnenja v auto_reviews/HR_vacuumsealer.php, opis + nega v meta.php.
 * Slike/video: img/vacuumsealer/ (nvs-…).
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$nvs      = get_template_directory_uri() . '/img/vacuumsealer/';
$nvs_path = get_template_directory() . '/img/vacuumsealer/';
$nvs_img  = function( $file, $alt, $cls = '' ) use ( $nvs, $nvs_path ) {
  if ( ! $file || ! file_exists( $nvs_path . $file ) ) { return ''; }
  return '<img src="' . esc_url( $nvs . $file ) . '" alt="' . esc_attr( $alt ) . '" loading="lazy"' . ( $cls ? ' class="' . esc_attr( $cls ) . '"' : '' ) . '>';
};
$nvs_video = function( $file, $label, $cls = '' ) use ( $nvs, $nvs_path ) {
  if ( ! file_exists( $nvs_path . $file ) ) { return ''; }
  $poster = preg_replace( '/\.mp4$/', '-poster.webp', $file );
  return '<div class="nvs-vid ' . esc_attr( $cls ) . '"><video src="' . esc_url( $nvs . $file ) . '" poster="' . esc_url( $nvs . $poster ) . '"'
    . ' muted autoplay loop playsinline preload="metadata" aria-label="' . esc_attr( $label ) . '"></video></div>';
};
$nvs_stars = function( $n ) {
  $n = max( 0, min( 5, (int) $n ) );
  return '<span class="nvs-stars" aria-label="' . $n . ' od 5 zvjezdica">' . str_repeat( '★', $n ) . '<span class="nvs-stars__off">' . str_repeat( '★', 5 - $n ) . '</span></span>';
};

/* 2) drugi načini čuvanja (3 kartice originala) */
$nvs_other = array(
  array( 'nvs-s02-vrecice.webp', 'Obične vrećice s patentnim zatvaračem', array( 'Zadržavaju zrak', 'Zadržavaju vlagu', 'Nisu hermetične' ) ),
  array( 'nvs-s02-posude.webp', 'Obične posude', array( 'Zadržavaju zrak', 'Zadržavaju vlagu', 'Nisu hermetične' ) ),
  array( 'nvs-s02-stolni.webp', 'Stolni vakuumski aparati', array( 'Teški i glomazni', 'Vrećice treba rezati', 'Komplicirani za upotrebu' ) ),
);

/* 3) zašto ljudi vole (3 vrstice originala s postotki) */
$nvs_love = array(
  array( 'video', 'nvs-s03-svjeza.mp4', 'Čuva hranu svježom',
    'Uz NORIKS VacuumSealer hranu vakuumirate <strong>za samo 5 sekundi</strong> i dulje je čuvate svježom. Jednostavno pritisnite tipku za početak, a uređaj se <strong>sam isključi kada završi</strong>.',
    '94 %', 'korisnika primijetilo je da im hrana dulje ostaje svježa nego uz uobičajene načine čuvanja.' ),
  array( 'img', 'nvs-s03-usteda.webp', 'Štedi novac jer smanjuje bacanje hrane',
    'NORIKS VacuumSealer pomaže da vam hrana <strong>dulje ostane svježa</strong>, pa manje bacate i štedite na pokvarenim namirnicama. Pomaže usporiti tamnjenje avokada, plijesan na jagodama i kvarenje hrane općenito.',
    '91 %', 'korisnika primijetilo je osjetnu uštedu na namirnicama zahvaljujući manjem bacanju hrane.' ),
  array( 'img', 'nvs-s03-ladica.webp', 'Kompaktan, bežičan i prijenosan',
    'NORIKS VacuumSealer dovoljno je malen da stane u bilo koju ladicu – savršen za sve kojima je važan prostor na kuhinjskom pultu. Uvijek je pri ruci, pa ćete ga <strong>koristiti stalno</strong>. A budući da je bežičan i prijenosan, možete ga ponijeti i na put.',
    '96 %', 'korisnika koristi ga češće jer ga je lako spremiti i uvijek je nadohvat ruke.' ),
);

/* 4) šest prednosti ("Two Year Warranty" originala zamijenjen NORIKS uvjetima) */
$nvs_feat = array( 'Punjiva baterija', 'Prijenosan i snažan', 'Pametno automatsko isključivanje', 'Kompaktan i lagan', 'Rukovanje jednom tipkom', 'Pravo na povrat u roku od 30 dana' );

/* 5) četiri koraka */
$nvs_steps = array(
  array( 'nvs-s05-korak1.webp', 'Napunite vrećicu hranom' ),
  array( 'nvs-s05-korak2.webp', 'Zatvorite vrećicu' ),
  array( 'nvs-s05-korak3.webp', 'Pritisnite tipku za početak' ),
  array( 'nvs-s05-korak4.webp', 'Uređaj se sam isključi kada završi' ),
);

/* 6) vakuumske vrećice */
$nvs_bags = array(
  array( 'Sigurne za zamrzivač, mikrovalnu i perilicu posuđa', 'Sigurno čuvanje, podgrijavanje i pranje.' ),
  array( 'Čuvaju okus i hranjive tvari', 'Pomažu sačuvati okus i nutrijente.' ),
  array( 'Bez mirisa i curenja', 'Dobro brtve – bez curenja i bez mirisa.' ),
  array( 'Izdržljive i višekratne', 'Višekratne za dugotrajnu upotrebu u kuhinji.' ),
);

/* 8) usporedba (stupci originala: Chef Preserve / Countertop Sealers) */
$nvs_cmp = array( 'Bežični', 'Prijenosni', 'Kompaktni', 'Jednostavni za upotrebu', 'Višekratne vrećice' );

/* 9) što kažu naši kupci (3 mnenja originala s fotografijami; imena lokalizirana) */
$nvs_rv_foto = array(
  array( 'nvs-s09-kupac1.webp', 'Jelena M.', 'NORIKS VacuumSealer koristim već 12 mjeseci i do sada sam na namirnicama uštedjela <strong>TISUĆE</strong>. Koristim ga gotovo svaki dan za vakuumiranje mesa, voća i povrća – u mojoj se kuhinji više uopće ne baca hrana.' ),
  array( 'nvs-s09-kupac2.webp', 'Josip J.', 'Upravo sam bacio svoj stari vakuumski aparat koji je bio glomazan i zastario. Ovaj je kompaktan, odlično obavlja posao i jednostavan je za upotrebu. Posebno mi se sviđa što se vrećice mogu otvoriti <strong>bez uništavanja</strong> i što se smiju prati u perilici posuđa.' ),
  array( 'nvs-s09-kupac3.webp', 'Sanja A.', 'Kad sam vidjela prijenosni vakuumski aparat, odmah sam bila oduševljena! Ribu vakuumiram <strong>u nekoliko sekundi</strong>. Obožavam što se vrećice mogu ponovno zatvoriti, pa uzmem pola ribe, a ostatak opet vakuumiram. Za mene je ovo pravo otkriće!' ),
);

/* 10) recenzije kupaca (Judge.me 12,202 / 4,8 -> po NORIKS 1081; porazdelitev 87/10/1/1/2 % skalirana na 692) */
$nvs_hist = array( 5 => 603, 4 => 67, 3 => 7, 2 => 4, 1 => 11 );
$nvs_rv2  = array(
  array( 'Diana P.', 5, 'Koristila sam ga već tri puta i radi savršeno! Jednostavan je za upotrebu, a hrana u zamrzivaču ostaje svježa.' ),
  array( 'Dunja R.', 5, 'Obožavam ga! Imam i jedan od onih velikih, glomaznih aparata, ali ovaj mali vakuumski aparat potpuno je promijenio stvari!' ),
  array( 'Vlado C.', 5, 'Imam i vakuumski aparat druge marke – ne može se ni usporediti s ovim. Iznimno je učinkovit i jednostavan za rukovanje. Toliko sam zadovoljan da sam jedan poklonio sinu koji je kuhar.' ),
  array( 'Katarina S.', 5, 'Toliko mi se svidio da sam ga kupila kćerima i mami. Odmah sam počela štedjeti i opet kupujem avokado. Nisam mogla vjerovati kako je avokado izgledao nakon 3 dana – ništa nisam bacila!' ),
  array( 'Lidija V.', 5, 'Koristim ga za puno toga – u zamrzivaču i u hladnjaku. Jako je praktičan, a vrećice su višekratne.' ),
  array( 'Saša L.', 4, 'Radi odlično! Samo pazite da u vrećici nema tekućine jer će je vakuum izvući i napraviti nered na vrećici.' ),
  array( 'Marija K.', 5, 'Danas sam ga koristila za zamrzavanje pita s mesom i radi odlično. Vrlo je jednostavan za upotrebu.' ),
  array( 'Ana H.', 5, 'Kompaktan je i ne zauzima puno mjesta, što je savršeno ako ne želite glomazan aparat. Jako je praktičan, lako se spremi, a perive i višekratne vrećice veliki su plus. Toplo preporučujem!' ),
);

$nvs_n = 0; // števec sekcij za izmenična ozadja
$nvs_cls = function() use ( &$nvs_n ) { $nvs_n++; return ( $nvs_n % 2 ) ? ' nvs-tint' : ''; };
$nvs_pct = function( $n ) use ( $nvs_hist ) { $t = array_sum( $nvs_hist ); return $t ? round( $n * 100 / $t ) : 0; };
?>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,400;0,500;0,600;0,700;0,800;1,700&display=swap">

<!-- 1) DETALJI O PROIZVODU (zavihki nakupne škatle: Product Details / What's Included / Bag Information) — slika ob besedilu -->
<section class="nvs-sec<?php echo $nvs_cls(); ?>">
  <div class="nvs-wrap">
    <div class="nvs-row2 nvs-row2--top">
      <div class="nvs-media"><?php echo $nvs_img( 'nvs-s01-uredjaj.webp', 'NORIKS VacuumSealer – kompaktni bežični vakuumski aparat', 'nvs-img--free' ); ?></div>
      <div class="nvs-copy">
        <p class="nvs-kicker">Kompaktni vakuumski aparat</p>
        <h2 class="nvs-h3">Vakuumira hranu <em>za manje od 5 sekundi</em> i čuva je svježom</h2>
        <ul class="nvs-ticks">
          <li>Smanjuje bacanje hrane i štedi novac</li>
          <li>Brz, kompaktan i jednostavan za upotrebu</li>
          <li>Isplati se već nakon nekoliko upotreba</li>
        </ul>
        <p>Ovaj kompaktni vakuumski aparat osmišljen je za praktičnu svakodnevnu upotrebu – <strong>snažan, a ipak prijenosan</strong>.</p>
        <p>Ima punjivu bateriju od <strong>1200 mAh</strong> i puni se preko <strong>USB priključka (5 V)</strong>, pa ga koristite jednostavno, bez glomazne opreme.</p>
        <p>S dimenzijama <strong>20,5 × 4,7 cm</strong> i težinom od samo <strong>237 g</strong> lagan je, jednostavan za rukovanje i lako ga je spremiti u bilo koji kutak kuhinje.</p>
        <h3 class="nvs-h4">Što je u paketu</h3>
        <ol class="nvs-pack">
          <li>NORIKS VacuumSealer vakuumski aparat</li>
          <li>Kabel za punjenje</li>
          <li>Kopča za jednostavno zatvaranje vrećice</li>
          <li>Korisnički priručnik</li>
          <li>Vakuumske vrećice (10, 20 ili 30 – po izboru)</li>
        </ol>
        <h3 class="nvs-h4">Informacije o vrećicama</h3>
        <p>Polovica vrećica ima zapreminu od <strong>oko 1 litre</strong>, a druga polovica <strong>oko 2 litre</strong>.</p>
      </div>
    </div>
  </div>
</section>

<!-- 2) DRUGI NAČINI ČUVANJA HRANE ("Other Storage Methods") — 3 kartice -->
<section class="nvs-sec<?php echo $nvs_cls(); ?>">
  <div class="nvs-wrap">
    <p class="nvs-kicker nvs-c">Zašto obične metode ne čuvaju hranu</p>
    <h2 class="nvs-h2 nvs-c">Drugi načini <em>čuvanja hrane</em></h2>
    <div class="nvs-other">
      <?php foreach ( $nvs_other as $o ) : ?>
      <article class="nvs-other__card">
        <div class="nvs-other__img"><?php echo $nvs_img( $o[0], $o[1] ); ?></div>
        <div class="nvs-other__body">
          <h3><?php echo esc_html( $o[1] ); ?></h3>
          <ul class="nvs-cons">
            <?php foreach ( $o[2] as $c ) : ?><li><?php echo esc_html( $c ); ?></li><?php endforeach; ?>
          </ul>
        </div>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- 3) ZAŠTO LJUDI VOLE NORIKS VacuumSealer ("Why People Love Chef Preserve") — 3 vrstice slika/video ob besedilu -->
<section class="nvs-sec<?php echo $nvs_cls(); ?>">
  <div class="nvs-wrap">
    <p class="nvs-kicker nvs-c">Iskustva korisnika</p>
    <h2 class="nvs-h2 nvs-c">Zašto ljudi vole <em>NORIKS VacuumSealer</em></h2>
    <?php foreach ( $nvs_love as $i => $l ) : ?>
    <div class="nvs-row2 nvs-love<?php echo ( $i % 2 ) ? ' nvs-row2--rev' : ''; ?>">
      <div class="nvs-media">
        <?php echo ( 'video' === $l[0] ) ? $nvs_video( $l[1], $l[2] . ' – NORIKS VacuumSealer', 'nvs-vid--sq' ) : $nvs_img( $l[1], $l[2] . ' – NORIKS VacuumSealer' ); ?>
      </div>
      <div class="nvs-copy">
        <h3 class="nvs-h3"><?php echo esc_html( $l[2] ); ?></h3>
        <p><?php echo wp_kses( $l[3], array( 'strong' => array() ) ); ?></p>
        <div class="nvs-stat"><span class="nvs-stat__num"><?php echo esc_html( $l[4] ); ?></span><span class="nvs-stat__txt"><?php echo esc_html( $l[5] ); ?></span></div>
      </div>
    </div>
    <?php endforeach; ?>
  </div>
</section>

<!-- 4) BRŽE VAKUUMIRAJTE. PAMETNIJE ČUVAJTE. MANJE BACAJTE. ("Seal Faster. Store Smarter. Waste Less.") — slika ob seznamu -->
<section class="nvs-sec<?php echo $nvs_cls(); ?>">
  <div class="nvs-wrap">
    <div class="nvs-row2">
      <div class="nvs-media"><?php echo $nvs_img( 'nvs-s04-uredjaj.webp', 'NORIKS VacuumSealer – punjivi bežični vakuumski aparat', 'nvs-img--free' ); ?></div>
      <div class="nvs-copy">
        <p class="nvs-kicker">Prednosti</p>
        <h2 class="nvs-h3">Brže vakuumirajte. <em>Pametnije čuvajte.</em> Manje bacajte.</h2>
        <ul class="nvs-feat">
          <?php foreach ( $nvs_feat as $f ) : ?><li><?php echo esc_html( $f ); ?></li><?php endforeach; ?>
        </ul>
        <p class="nvs-big">Jedna tipka – i hrana je vakuumirana.</p>
      </div>
    </div>
  </div>
</section>

<!-- 5) RADI U 4 JEDNOSTAVNA KORAKA ("Works in 4 Simple Steps") — 4 kartice -->
<section class="nvs-sec<?php echo $nvs_cls(); ?>">
  <div class="nvs-wrap">
    <p class="nvs-kicker nvs-c">Kako radi</p>
    <h2 class="nvs-h2 nvs-c">Radi u <em>4 jednostavna koraka</em></h2>
    <div class="nvs-steps">
      <?php foreach ( $nvs_steps as $i => $s ) : ?>
      <article class="nvs-step">
        <div class="nvs-step__img"><?php echo $nvs_img( $s[0], ( $i + 1 ) . '. korak: ' . $s[1] ); ?></div>
        <p class="nvs-step__txt"><span class="nvs-step__no"><?php echo (int) ( $i + 1 ); ?></span><?php echo esc_html( $s[1] ); ?></p>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- 6) INOVATIVNE VAKUUMSKE VREĆICE ("Innovative Vacuum Bags") — slika ob besedilu -->
<section class="nvs-sec<?php echo $nvs_cls(); ?>">
  <div class="nvs-wrap">
    <div class="nvs-row2 nvs-row2--rev">
      <div class="nvs-media"><?php echo $nvs_img( 'nvs-s06-vrecice.webp', 'Vakuumska vrećica NORIKS VacuumSealer s krastavcima', 'nvs-img--free' ); ?></div>
      <div class="nvs-copy">
        <p class="nvs-kicker">Vrećice</p>
        <h2 class="nvs-h3">Inovativne <em>vakuumske vrećice</em></h2>
        <div class="nvs-bags">
          <?php foreach ( $nvs_bags as $b ) : ?>
          <div class="nvs-bags__item"><h3><?php echo esc_html( $b[0] ); ?></h3><p><?php echo esc_html( $b[1] ); ?></p></div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- 7) BEZ VAKUUMA VS. VAKUUMIRANO ("Unsealed vs. Sealed", 3-day test) — par slik ob besedilu -->
<section class="nvs-sec<?php echo $nvs_cls(); ?>">
  <div class="nvs-wrap">
    <div class="nvs-row2">
      <div class="nvs-media">
        <div class="nvs-ba">
          <figure><?php echo $nvs_img( 'nvs-s07-bez.webp', 'Avokado bez vakuuma nakon 3 dana' ); ?><figcaption>Bez vakuuma</figcaption></figure>
          <figure><?php echo $nvs_img( 'nvs-s07-vakuum.webp', 'Vakuumirani avokado nakon 3 dana' ); ?><figcaption class="nvs-ba__ok">Vakuumirano</figcaption></figure>
        </div>
      </div>
      <div class="nvs-copy">
        <p class="nvs-kicker">Test u stvarnim uvjetima</p>
        <h2 class="nvs-h3">Bez vakuuma <em>vs. vakuumirano</em></h2>
        <p>Ista hrana, ista tri dana – razliku radi zrak. Vakuumirana hrana <strong>dulje ostaje svježa</strong>, a ona bez vakuuma brže tamni i kvari se.</p>
        <p class="nvs-note">*Na temelju trodnevnog testa čuvanja u stvarnim uvjetima.</p>
        <p class="nvs-big">Manje zraka – dulja svježina.</p>
      </div>
    </div>
  </div>
</section>

<!-- 8) VAKUUMIRANJE. IZNOVA OSMIŠLJENO. ("Vacuum Sealing. Reinvented.") — primerjalna tabela ob besedilu -->
<section class="nvs-sec<?php echo $nvs_cls(); ?>">
  <div class="nvs-wrap">
    <div class="nvs-row2 nvs-row2--rev">
      <div class="nvs-media">
        <div class="nvs-cmp" role="table" aria-label="Usporedba NORIKS VacuumSealer sa stolnim vakuumskim aparatima">
          <div class="nvs-cmp__row nvs-cmp__head" role="row">
            <span role="columnheader" class="nvs-cmp__lbl">Ključne značajke</span>
            <span role="columnheader" class="nvs-cmp__us"><?php echo $nvs_img( 'nvs-s08-noriks.webp', 'NORIKS VacuumSealer' ); ?>NORIKS</span>
            <span role="columnheader"><?php echo $nvs_img( 'nvs-s08-stolni.webp', 'Stolni vakuumski aparat' ); ?>Stolni aparati</span>
          </div>
          <?php foreach ( $nvs_cmp as $r ) : ?>
          <div class="nvs-cmp__row" role="row">
            <span role="cell" class="nvs-cmp__lbl"><?php echo esc_html( $r ); ?></span>
            <span role="cell" class="nvs-cmp__us"><span class="nvs-yes" aria-label="da">✓</span></span>
            <span role="cell"><span class="nvs-no" aria-label="ne">✕</span></span>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
      <div class="nvs-copy">
        <p class="nvs-kicker">Usporedba</p>
        <h2 class="nvs-h3">Vakuumiranje. <em>Iznova osmišljeno.</em></h2>
        <p>Za razliku od stolnih vakuumskih aparata, NORIKS VacuumSealer je <strong>bežičan, prijenosan i kompaktan</strong>, jednostavan za upotrebu i radi s <strong>višekratnim vrećicama</strong>.</p>
        <p class="nvs-big">Bez rezanja vrećica. Bez glomaznog aparata na pultu.</p>
      </div>
    </div>
  </div>
</section>

<!-- 9) POSLUŠAJTE ŠTO KAŽU NAŠI KUPCI ("Let's Hear What Our Customers Have To Say") — 3 fotografije + mnenja -->
<section class="nvs-sec<?php echo $nvs_cls(); ?>">
  <div class="nvs-wrap">
    <p class="nvs-kicker nvs-c"><?php echo $nvs_stars( 5 ); ?> Tisuće zadovoljnih kupaca</p>
    <h2 class="nvs-h2 nvs-c">Poslušajte što kažu <em>naši kupci</em></h2>
    <div class="nvs-voices">
      <?php foreach ( $nvs_rv_foto as $r ) : ?>
      <article class="nvs-card">
        <div class="nvs-card__img"><?php echo $nvs_img( $r[0], 'Fotografija kupca – hrana vakuumirana aparatom NORIKS VacuumSealer' ); ?></div>
        <div class="nvs-card__body">
          <?php echo $nvs_stars( 5 ); ?>
          <p class="nvs-card__txt">„<?php echo wp_kses( $r[2], array( 'strong' => array() ) ); ?>”</p>
          <p class="nvs-card__name"><?php echo esc_html( $r[1] ); ?> <span class="nvs-ok">✓ Potvrđena kupnja</span></p>
        </div>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- 10) RECENZIJE KUPACA (Judge.me 12,202 / 4,8 -> 1081 po NORIKS) -->
<section class="nvs-sec<?php echo $nvs_cls(); ?>">
  <div class="nvs-wrap">
    <p class="nvs-kicker nvs-c">Recenzije kupaca</p>
    <h2 class="nvs-h2 nvs-c">Recenzije <em>NORIKS VacuumSealer</em></h2>
    <div class="nvs-score">
      <div class="nvs-score__avg"><span class="nvs-score__num">4,8</span><?php echo $nvs_stars( 5 ); ?><span class="nvs-score__txt">Na temelju 1081 recenzije</span></div>
      <div class="nvs-hist">
        <?php foreach ( $nvs_hist as $st => $cnt ) : ?>
        <div class="nvs-hist__row"><span><?php echo (int) $st; ?> ★</span><span class="nvs-hist__bar"><i style="width:<?php echo (int) $nvs_pct( $cnt ); ?>%"></i></span><span><?php echo (int) $cnt; ?></span></div>
        <?php endforeach; ?>
      </div>
    </div>
    <div class="nvs-reviews">
      <?php foreach ( $nvs_rv2 as $r ) : ?>
      <article class="nvs-card">
        <div class="nvs-card__body">
          <?php echo $nvs_stars( $r[1] ); ?>
          <p class="nvs-card__txt">„<?php echo esc_html( $r[2] ); ?>”</p>
          <p class="nvs-card__name"><?php echo esc_html( $r[0] ); ?> <span class="nvs-ok">✓ Potvrđena kupnja</span></p>
        </div>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- 11) UŠTEDITE NOVAC… (zaključni blok originala, brez odštevalnika in »Get 51% OFF«) — slika ob besedilu -->
<section class="nvs-sec<?php echo $nvs_cls(); ?>">
  <div class="nvs-wrap">
    <div class="nvs-row2">
      <div class="nvs-media"><?php echo $nvs_img( 'nvs-s11-paket.webp', 'NORIKS VacuumSealer s kabelom za punjenje i vakuumskim vrećicama', 'nvs-img--free' ); ?></div>
      <div class="nvs-copy">
        <p class="nvs-kicker">Svježija hrana, manje bacanja</p>
        <h2 class="nvs-h3">NORIKS <em>VacuumSealer</em></h2>
        <p>Uštedite novac, smanjite bacanje hrane i dulje čuvajte hranu svježom – <strong>sve s jednim kompaktnim uređajem</strong>.</p>
        <ul class="nvs-ticks">
          <li>Besplatna dostava za narudžbe iznad 70 €</li>
          <li>Pravo na povrat u roku od 30 dana</li>
        </ul>
        <p class="nvs-big">Isprobajte ga već danas – uz pravo na povrat u roku od 30 dana!</p>
      </div>
    </div>
  </div>
</section>

<style>
/* NORIKS stil (predloga why-therapillow.php / why-hands.php): oznaka + naslov z ležečim poudarkom, slika ob
   besedilu, izmenjujoča ozadja in strani. Paleta originala: rdeča #c3192a (-> #b51f2e), svetlo siva #f5f6f8, črna #151515. */
.nvs-sec { padding: 60px 0; font-family: 'Plus Jakarta Sans', system-ui, -apple-system, 'Segoe UI', Roboto, Arial, sans-serif; color: #151515; background: #fff; }
.nvs-sec * { box-sizing: border-box; }
.nvs-tint { background: #f5f6f8; }
.nvs-wrap { width: 100%; max-width: 1200px; margin: 0 auto; padding: 0 24px; }
.nvs-c { text-align: center; }
.nvs-sec h2, .nvs-sec h3 { font-family: inherit; text-transform: none; letter-spacing: 0; }
.nvs-kicker, .nvs-copy p.nvs-kicker { font-size: 12.5px; line-height: 1.4; font-weight: 700; letter-spacing: .14em; text-transform: uppercase; color: #b51f2e; margin: 0 0 10px; }
.nvs-kicker .nvs-stars { letter-spacing: 1px; margin-right: 6px; }
.nvs-h2 { font-weight: 800; font-size: clamp(25px, 3.1vw, 36px); line-height: 1.2; margin: 0 0 22px; color: #151515; }
.nvs-h2 em, .nvs-h3 em { font-style: italic; color: #b51f2e; }
.nvs-h3 { font-weight: 800; font-size: clamp(22px, 2.6vw, 30px); line-height: 1.25; margin: 0 0 16px; color: #151515; }
.nvs-h4 { font-weight: 700; font-size: 18px; line-height: 1.35; margin: 22px 0 10px; color: #151515; }
.nvs-sec img { display: block; width: 100%; height: auto; }

/* slika ob besedilu */
.nvs-row2 { display: grid; grid-template-columns: 1fr 1fr; gap: 56px; align-items: center; }
.nvs-row2--top { align-items: start; }
.nvs-row2--rev .nvs-media { order: 2; }
.nvs-media > img { border-radius: 10px; box-shadow: 0 2px 4px rgba(21,21,21,.05), 0 14px 40px rgba(21,21,21,.10); max-width: 560px; margin: 0 auto; aspect-ratio: 1 / 1; object-fit: cover; background: #fff; }
.nvs-media > img.nvs-img--free { aspect-ratio: auto; object-fit: contain; }
.nvs-copy p { font-size: 16px; line-height: 1.7; color: #3d4148; margin: 0 0 14px; }
.nvs-copy p strong { color: #151515; font-weight: 700; }
.nvs-sec p.nvs-big { font-size: 19px; font-weight: 800; color: #151515; line-height: 1.45; margin-top: 6px; }
.nvs-sec p.nvs-note { font-size: 13.5px; color: #6b7078; font-style: italic; }
.nvs-ticks, .nvs-feat { list-style: none; margin: 4px 0 16px; padding: 0; }
.nvs-ticks li, .nvs-feat li { position: relative; padding-left: 32px; margin: 0 0 10px; font-size: 16px; line-height: 1.55; color: #24272c; }
.nvs-ticks li::before, .nvs-feat li::before { content: "✓"; position: absolute; left: 0; top: 1px; width: 22px; height: 22px; border-radius: 50%; background: #b51f2e; color: #fff; font-size: 12px; font-weight: 800; line-height: 22px; text-align: center; }
.nvs-feat { display: grid; grid-template-columns: 1fr 1fr; column-gap: 18px; }
.nvs-feat li { font-weight: 600; }

/* video */
.nvs-vid { position: relative; overflow: hidden; background: #151515; border-radius: 10px; margin: 0 auto; max-width: 560px; box-shadow: 0 2px 4px rgba(21,21,21,.05), 0 14px 40px rgba(21,21,21,.10); }
.nvs-vid video { display: block; width: 100%; height: 100%; object-fit: cover; }
.nvs-vid--sq { aspect-ratio: 1 / 1; }

/* drugi načini */
.nvs-other { display: grid; grid-template-columns: repeat(3, minmax(0, 1fr)); gap: 20px; }
.nvs-other__card { background: #fff; border: 1px solid #e3e5ea; border-radius: 10px; overflow: hidden; box-shadow: 0 2px 10px rgba(21,21,21,.06); display: flex; flex-direction: column; }
.nvs-other__img { background: #fff; }
.nvs-other__img img { aspect-ratio: 4 / 3; object-fit: contain; }
.nvs-other__body { padding: 16px 20px 20px; border-top: 1px solid #eef0f3; }
.nvs-other__body h3 { font-size: 18px; font-weight: 800; line-height: 1.35; color: #151515; margin: 0 0 10px; }
.nvs-cons { list-style: none; margin: 0; padding: 0; }
.nvs-cons li { position: relative; padding-left: 30px; margin: 0 0 8px; font-size: 15px; line-height: 1.5; color: #3d4148; }
.nvs-cons li::before { content: "✕"; position: absolute; left: 0; top: 0; width: 21px; height: 21px; border-radius: 50%; background: #fde3e5; color: #b51f2e; font-size: 11px; font-weight: 800; line-height: 21px; text-align: center; }

/* zašto ljudi vole */
.nvs-love { margin-top: 36px; }
.nvs-love + .nvs-love { margin-top: 48px; }
.nvs-love .nvs-media > img { aspect-ratio: 1 / 1; }
.nvs-stat { display: flex; align-items: center; gap: 16px; background: #fff; border: 1px solid #e3e5ea; border-left: 4px solid #b51f2e; border-radius: 10px; padding: 14px 18px; margin-top: 8px; }
.nvs-tint .nvs-stat { background: #fff; }
.nvs-stat__num { font-size: 34px; font-weight: 800; color: #b51f2e; line-height: 1; white-space: nowrap; }
.nvs-stat__txt { font-size: 14.5px; line-height: 1.5; color: #3d4148; }

/* koraki */
.nvs-steps { display: grid; grid-template-columns: repeat(4, minmax(0, 1fr)); gap: 18px; }
.nvs-step { background: #fff; border: 1px solid #e3e5ea; border-radius: 10px; overflow: hidden; box-shadow: 0 2px 10px rgba(21,21,21,.05); }
.nvs-step__img img { aspect-ratio: 1 / 1; object-fit: cover; }
.nvs-sec p.nvs-step__txt { display: flex; align-items: center; gap: 10px; margin: 0; padding: 14px 16px; font-size: 15.5px; font-weight: 700; line-height: 1.4; color: #151515; }
.nvs-step__no { flex: 0 0 30px; width: 30px; height: 30px; border-radius: 50%; background: #b51f2e; color: #fff; font-size: 14px; font-weight: 800; line-height: 30px; text-align: center; }

/* vrećice */
.nvs-bags { display: grid; grid-template-columns: 1fr 1fr; gap: 14px; }
.nvs-bags__item { background: #fff; border: 1px solid #e3e5ea; border-radius: 10px; padding: 16px; }
.nvs-tint .nvs-bags__item { background: #fff; }
.nvs-sec:not(.nvs-tint) .nvs-bags__item { background: #f8f9fa; }
.nvs-bags__item h3 { font-size: 15.5px; font-weight: 800; line-height: 1.35; color: #151515; margin: 0 0 6px; }
.nvs-copy .nvs-bags__item p { font-size: 14.5px; line-height: 1.55; margin: 0; }

/* bez vakuuma vs vakuumirano */
.nvs-ba { display: grid; grid-template-columns: 1fr 1fr; gap: 14px; max-width: 560px; margin: 0 auto; }
.nvs-ba figure { margin: 0; background: #fff; border-radius: 10px; overflow: hidden; box-shadow: 0 2px 10px rgba(21,21,21,.08); }
.nvs-ba img { aspect-ratio: 1 / 1; object-fit: contain; background: #fff; }
.nvs-ba figcaption { padding: 10px; text-align: center; font-weight: 800; font-size: 15px; color: #fff; background: #6b7078; }
.nvs-ba figcaption.nvs-ba__ok { background: #b51f2e; }

/* usporedba */
.nvs-cmp { border-radius: 10px; overflow: hidden; border: 1px solid #e3e5ea; background: #fff; max-width: 560px; margin: 0 auto; box-shadow: 0 2px 10px rgba(21,21,21,.06); }
.nvs-cmp__row { display: grid; grid-template-columns: 1.5fr 1fr 1fr; align-items: center; border-top: 1px solid #eef0f3; }
.nvs-cmp__row:first-child { border-top: 0; }
.nvs-cmp__row > span { padding: 12px 8px; text-align: center; font-size: 14.5px; color: #3d4148; }
.nvs-cmp__row > span.nvs-cmp__lbl { text-align: left; padding-left: 16px; font-weight: 700; color: #151515; }
.nvs-cmp__head > span { font-size: 12.5px; font-weight: 800; text-transform: uppercase; letter-spacing: .06em; color: #6b7078; align-self: stretch; display: flex; flex-direction: column; align-items: center; justify-content: flex-end; gap: 8px; }
.nvs-cmp__head > span.nvs-cmp__lbl { align-items: flex-start; }
.nvs-cmp__head img { width: auto !important; height: 84px !important; object-fit: contain; }
.nvs-cmp__row > span.nvs-cmp__us { background: #fbe9eb; }
.nvs-cmp__head > span.nvs-cmp__us { color: #b51f2e; }
.nvs-yes, .nvs-no { display: inline-block; width: 24px; height: 24px; border-radius: 50%; font-size: 12px; font-weight: 800; line-height: 24px; text-align: center; }
.nvs-yes { background: #2f9e5f; color: #fff; }
.nvs-no { background: #e6e8ec; color: #8a8f97; }

/* kartice mnenj */
.nvs-card { background: #fff; border: 1px solid #e3e5ea; border-radius: 10px; overflow: hidden; display: flex; flex-direction: column; box-shadow: 0 2px 10px rgba(21,21,21,.05); }
.nvs-sec:not(.nvs-tint) .nvs-card { background: #f8f9fa; }
.nvs-card__img img { aspect-ratio: 4 / 3; object-fit: cover; }
.nvs-card__body { padding: 16px; }
.nvs-card__txt { font-size: 14.5px; line-height: 1.6; color: #24272c; margin: 8px 0 10px; font-style: italic; }
.nvs-card__txt strong { font-weight: 700; color: #151515; }
.nvs-card__name { font-size: 13.5px; font-weight: 700; color: #151515; margin: 0; }
.nvs-voices { display: grid; grid-template-columns: repeat(3, minmax(0, 1fr)); gap: 20px; }

/* ocjene */
.nvs-stars { color: #f2a516; letter-spacing: 1px; font-size: 15px; }
.nvs-stars__off { color: #d9dbe0; }
.nvs-ok { color: #2f9e5f; font-weight: 700; font-size: 12px; margin-left: 4px; font-style: normal; }
.nvs-score { display: flex; justify-content: center; align-items: center; gap: 36px; margin: -4px 0 28px; flex-wrap: wrap; }
.nvs-score__avg { display: flex; flex-direction: column; align-items: center; gap: 4px; }
.nvs-score__num { font-size: 44px; font-weight: 800; line-height: 1; color: #151515; }
.nvs-score .nvs-stars { font-size: 20px; }
.nvs-score__txt { font-size: 14px; color: #6b7078; }
.nvs-hist { width: 280px; max-width: 100%; }
.nvs-hist__row { display: grid; grid-template-columns: 36px 1fr 40px; gap: 10px; align-items: center; font-size: 13.5px; color: #3d4148; margin: 4px 0; }
.nvs-hist__bar { height: 9px; background: #e6e8ec; border-radius: 99px; overflow: hidden; }
.nvs-hist__bar i { display: block; height: 100%; background: #f2a516; border-radius: 99px; }
.nvs-reviews { columns: 4; column-gap: 18px; }
.nvs-reviews > .nvs-card { break-inside: avoid; margin-bottom: 18px; }

@media (max-width: 989px) {
  .nvs-row2 { gap: 32px; }
  .nvs-steps { grid-template-columns: 1fr 1fr; }
  .nvs-reviews { columns: 3; }
}
@media (max-width: 749px) {
  .nvs-sec { padding: 42px 0; }
  .nvs-wrap { padding: 0 16px; }
  .nvs-row2 { grid-template-columns: 1fr; gap: 24px; }
  .nvs-row2--rev .nvs-media { order: 0; }
  .nvs-other, .nvs-voices { grid-template-columns: 1fr; }
  .nvs-feat, .nvs-bags { grid-template-columns: 1fr; }
  .nvs-reviews { columns: 2; column-gap: 12px; }
  .nvs-reviews > .nvs-card { margin-bottom: 12px; }
  .nvs-card__body { padding: 12px; }
  .nvs-cmp__row > span { padding: 10px 4px; font-size: 13px; }
  .nvs-cmp__row > span.nvs-cmp__lbl { padding-left: 10px; }
  .nvs-cmp__head > span { font-size: 10.5px; letter-spacing: .02em; }
  .nvs-cmp__head img { height: 60px !important; }
}
@media (max-width: 480px) {
  .nvs-reviews { columns: 1; }
  .nvs-steps { gap: 10px; }
  .nvs-sec p.nvs-step__txt { font-size: 13.5px; padding: 10px; }
}

/* galerija izdelka: sličice največ v 2 vrstah (5 na vrsto), ostale slike so dosegljive z drsenjem glavne slike */
.product_cat-orto-vacuumsealer .flex-control-thumbs li:nth-child(n+11) { display: none !important; }

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
.woocommerce-product-details__short-description .nvs-tick {
  position: absolute !important; left: 0 !important; top: 1px !important;
  width: 21px; height: 21px; border-radius: 50%;
  background: #2f9e5f !important; color: #fff !important;
  font-size: 12px !important; font-weight: 800 !important; line-height: 21px !important;
  text-align: center !important; display: inline-block !important; }
.woocommerce-product-details__short-description p:first-of-type { font-size: 16px; line-height: 1.55; }
</style>
