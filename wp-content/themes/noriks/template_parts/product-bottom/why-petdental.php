<?php
/**
 * product-bottom: NORIKS PetDental — sprej za njegu zubi pasa i mačaka (orto-petdental).
 * Original: paw-guardian.com/products/anti-tartar-spray-dogs-cats — vsebina in vrstni red 1:1 z originalom, oblika po
 * NORIKS stilu (predloga why-showertowel.php / why-bottlesling.php / why-hands.php), zeleno-modri (teal) poudarek po barvi
 * originala (#2a8a78):
 *   1) zavihka v nakupni skatli "Directions for Use" + "Ingredient list" -> Upute za uporabu i sastav (doziranje po tezini + sastav)
 *   2) "Real dogs. Real moms. Real before & afters." (4 mnenja s prije/poslije) + video iz galerije (govor -> utisan, HR napisi)
 *                                                    -> Pravi psi. Pravi vlasnici. Pravi rezultati.
 *   3) "Your Dog's 3-Month Journey" (Month 1/2/3+)   -> Put od 3 mjeseca (3 koraka)
 *   4) "Skeptical at first.. Speechless after" (3 posnetki komentarjev, 11 komentarjev) -> Isprva skeptični… a onda bez riječi
 *   5) "Why this works when everything else failed" (4 kartice z ikonami) -> Zašto ovo djeluje
 *   6) "Add to their food or their teeth" (video)    -> Dodajte u hranu ili na zube (video ob besedilu, zacetek z znamko izrezan)
 *   7) slika "Before / After — After 90 days"        -> Prije i poslije 90 dana (napisi prevedeni, slika ob besedilu iz FAQ)
 *   8) "Key ingredients" (5 kartic s slikami)        -> Ključni sastojci
 *   9) "Customer Reviews" (549, 72/19/6/1/1 %, 5 mnenj) -> Recenzije kupaca: 1081, zvezdice skalirane na 692, 5 mnenj
 * Izpusceno: glava, pasica "Fall sale", tekoca traka z lastnostmi, "Low stock", znacka "Clinically approved formula",
 * "Over 100K sold" z avatarji, harmonika "Where can you find us?" (Amazon/eBay), noga z izjavo FDA.
 * Medicinske trditve konkurenta (srce, ledvice, "clinically approved/studied", nadomestilo veterinarskega ciscenja,
 * "99 % manj kamenca", "manj kot 1 % vracil") niso prenesene ali so ublazene v splosne opise.
 * FAQ (6) je v reviews.php ($petdental_faq), mnenja v auto_reviews/HR_petdental.php, opis in hramba v meta.php.
 * Slike/videi: img/petdental/ (npd-…).
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$npd      = get_template_directory_uri() . '/img/petdental/';
$npd_path = get_template_directory() . '/img/petdental/';
$npd_img  = function( $file, $alt, $cls = '' ) use ( $npd, $npd_path ) {
  if ( ! $file || ! file_exists( $npd_path . $file ) ) { return ''; }
  return '<img src="' . esc_url( $npd . $file ) . '" alt="' . esc_attr( $alt ) . '" loading="lazy"' . ( $cls ? ' class="' . esc_attr( $cls ) . '"' : '' ) . '>';
};
$npd_video = function( $file, $label, $cls = '' ) use ( $npd, $npd_path ) {
  if ( ! file_exists( $npd_path . $file ) ) { return ''; }
  $poster = preg_replace( '/\.mp4$/', '-poster.webp', $file );
  return '<div class="npd-vid ' . esc_attr( $cls ) . '"><video src="' . esc_url( $npd . $file ) . '" poster="' . esc_url( $npd . $poster ) . '"'
    . ' muted autoplay loop playsinline preload="metadata" aria-label="' . esc_attr( $label ) . '"></video></div>';
};
$npd_stars = function( $n ) {
  $n = max( 0, min( 5, (int) $n ) );
  return '<span class="npd-stars" aria-label="' . $n . ' od 5 zvjezdica">' . str_repeat( '★', $n ) . '<span class="npd-stars__off">' . str_repeat( '★', 5 - $n ) . '</span></span>';
};
$npd_kses = array( 'strong' => array(), 'em' => array(), 'br' => array() );

/* 1) upute za uporabu (zavihek "Directions for Use") */
$npd_dose = array(
  array( 'XS', 'do 5 kg', '2–3 prskanja dnevno', 'Jedna bočica traje otprilike 1,5 mjesec' ),
  array( 'S', '5–10 kg', '3–4 prskanja dnevno', 'Jedna bočica traje otprilike 6 tjedana' ),
  array( 'M', '10–20 kg', '4–6 prskanja dnevno', 'Jedna bočica traje otprilike 5 tjedana' ),
  array( 'L', '20 kg i više', '6–8 prskanja dnevno', 'Jedna bočica traje otprilike 1 mjesec' ),
);
/* zavihek "Ingredient list" */
$npd_inci = array(
  array( 'Voda, glicerin', 'čista i jednostavna baza.' ),
  array( 'Lactobacillus ferment', 'probiotici za uravnotežen mikrobiom usne šupljine.' ),
  array( 'Bakrov kompleks klorofilina', 'klorofil koji pomaže neutralizirati loš zadah.' ),
  array( 'Ekstrakt alge Chlorella vulgaris', 'mikroalga koja pomaže njegovati desni.' ),
  array( 'Ekstrakt smeđe alge Ascophyllum nodosum', 'morska alga poznata po djelovanju na kamenac.' ),
  array( 'Ekstrakt lista zelenog čaja (Camellia sinensis)', 'zbog prirodnih antibakterijskih svojstava.' ),
  array( 'Ekstrakt nevena (Calendula officinalis)', 'nježan i umirujući, za zdrave desni.' ),
  array( 'Kalijev sorbat', 'konzervans, ništa više.' ),
  array( 'Aroma govedine', 'jer i naši ljubimci zaslužuju dobar okus.' ),
);

/* 2) prije i poslije (mnenja originala; prevedeno, imena lokalizirana, trditve o veterinarskem čiščenju izpuščene) */
$npd_ba = array(
  array( 'prije' => 'npd-ba-1-prije.webp', 'poslije' => 'npd-ba-1-poslije.webp', 'ime' => 'Sanja M.',
    'txt' => 'Obožavam ovaj sprej!! Moja haskica Luna ima 5 godina i zubi su joj bili sve lošiji. <strong>Nakon 4 tjedna</strong> kamenac se već povlači, a <strong>dah joj je puno ljepši</strong>. Veterinar će se iznenaditi na sljedećem pregledu.' ),
  array( 'prije' => 'npd-ba-2-prije.webp', 'poslije' => 'npd-ba-2-poslije.webp', 'ime' => 'Karmen H.',
    'txt' => 'Bila sam 100 % skeptična kad sam ga naručila. Zubi moje čivave Belle bili su u lošem stanju. Oko <strong>3. tjedna</strong> smeđe naslage počele su nestajati. <strong>Ne mogu vjerovati kolika je razlika</strong> – uštedjelo mi je puno brige.' ),
  array( 'prije' => 'npd-ba-3-prije.webp', 'poslije' => 'npd-ba-3-poslije.webp', 'ime' => 'Julija B.',
    'txt' => 'Iskreno, muž više nije mogao podnijeti Mijin dah – toliko je bio loš da je nije puštao na kauč. <strong>Tri tjedna kasnije</strong> on je taj koji je pušta da spava pokraj njega. Kratko i jasno – <strong>jednostavno djeluje!!</strong>' ),
  array( 'prije' => 'npd-ba-4-prije.webp', 'poslije' => 'npd-ba-4-poslije.webp', 'ime' => 'Petra O.',
    'txt' => 'Coco je imala dosta kamenca i jako loš dah. 6 tjedana po dva prskanja ujutro i navečer i, ne šalim se, <strong>kamenca je vidljivo manje</strong>. A sada joj <strong>opet dam da me poliže po licu</strong>. Toplo preporučujem!!' ),
);

/* 3) put od 3 mjeseca */
$npd_journey = array(
  array( '01', '1. mjesec', 'Djelovanje na uzrok', 'NORIKS PetDental počinje djelovati uz rub desni i pomaže smanjiti nakupljanje bakterija. Zdravija usta počinju od zdravih temelja.', 33 ),
  array( '02', '2. mjesec', 'Zdravije okruženje u ustima', 'Kako bakterija ima sve manje, desni se mogu vratiti u zdravije stanje. Tada mnogi vlasnici primijete svježiji dah i zdravije zube.', 66 ),
  array( '03', '3. mjesec i dalje', 'Dugoročna zaštita', 'Uz dosljednu svakodnevnu upotrebu NORIKS PetDental pomaže dugoročno održati zdravije okruženje u ustima. Fokus se pomiče s ispravljanja na zaštitu.', 100 ),
);

/* 4) komentarji (3 posnetki zaslona originala; prevedeno, imena lokalizirana) */
$npd_cm = array(
  array( 'Marija F.', 'Pročitala sam o ovom proizvodu i odlučila ga isprobati na svojoj maloj mješanki pudlice i jorkija koja je imala jako loš zadah i sve lošije zube. Dostava je malo potrajala, ali kad sam ga počela koristiti, razlika u Mazieinim ustima bila je nevjerojatna. Koristimo ga oko tri tjedna, dva prskanja ujutro kad jede i dva navečer – kamenca je puno manje, a zubi su joj bijeli, bijeli, bijeli. Mirno sjedi i pusti me da joj otvorim usta i poprskam. Kupila sam zalihu za tri mjeseca i naručit ću još. Jedva čekam sljedeći pregled kod veterinara da pokažem rezultate. Hvala vam, i Mazie vam zahvaljuje!!!', 21 ),
  array( 'Karolina S.', 'Obožavam, obožavam, obožavam ovaj sprej. Počeo je djelovati nakon nekoliko dana. Moja mala princeza uskoro će imati blistave zube, sigurno!!', 0 ),
  array( 'Dubravka G.', 'Imam više pasa, od 6 mjeseci do 14 godina. Počela sam koristiti ovaj proizvod i jako sam zadovoljna rezultatima. Imam i mačka koji je vrlo izbirljiv s hranom. Par prskanja na hranu i odlično djeluje!!', 79 ),
  array( 'Lana B.', 'Svojoj dvojici dečki dajem NORIKS otprilike 3 i pol tjedna. Jednom je dah bio toliko loš da mu doslovno nisam mogla biti blizu lica, a već sada je ogromna razlika!', 0 ),
  array( 'Ana L.', 'I ja vidim veliko poboljšanje na zubima svog psa. Jako sam impresionirana.', 0 ),
  array( 'Elena A.', 'Zubi mog psa nisu bili dobri, ali sprej koristimo oko 2 mjeseca i već vidim razliku – i nema više lošeg zadaha.', 0 ),
  array( 'Tomislav K.', 'Kod mog psa djeluje izvanredno.', 5 ),
  array( 'Krešimir V.', 'Tek smo ga nabavili – naš pas ima 15 godina i ovo stvarno odlično djeluje.', 26 ),
  array( 'Robert S.', 'Moram reći da zubi našeg 4-godišnjeg labradora nisu izgledali dobro unatoč svemu što postoji na tržištu. Teško je povjerovati što je dobro, a što će stvarno djelovati. Nakon 4 dana već se vidi razlika.', 0 ),
  array( 'Eli E.', 'Mom psu dobro pomaže. Stvarno primjećujem poboljšanje.', 58 ),
  array( 'Tamara L.', 'Koristim ga za pse i mačke. Jedan pas imao je jako puno kamenca na stražnjim zubima, a dah mu je smrdio. Nakon otprilike 2 tjedna zubi su mu izgledali puno bolje, kamenca je bilo sve manje, a dah je opet bio u redu. I dalje ga koristim i jako sam zadovoljna rezultatima.', 0 ),
);

/* 5) zakaj deluje */
$npd_why = array(
  array( 'npd-ik-kamenac.webp', 'Djeluje na bakterije ondje gdje nastaju', 'Djeluje na naslage uz rub desni – ondje gdje se bakterije množe, a većina proizvoda ne dopire.' ),
  array( 'npd-ik-dah.webp', 'Loš zadah rješava u korijenu', 'Za razliku od proizvoda koji miris samo prikrivaju, ovaj sprej pomaže ukloniti njegov uzrok.' ),
  array( 'npd-ik-desni.webp', 'Njegovane desni, ugodnije jelo', 'Pomaže njegovati desni kako bi vaš pas mogao jesti udobno, bez nelagode.' ),
  array( 'npd-ik-bez-cetkanja.webp', 'Bez četkanja. Bez svakodnevne muke', 'Nanosi se u nekoliko sekundi – bez stresa i bez otpora.' ),
);

/* 8) ključni sastojci */
$npd_ing = array(
  array( 'npd-sastojak-probiotici.webp', 'Probiotici', 'Ovi probiotici stvaraju zaštitni sloj i održavaju savršenu ravnotežu za zdrave desni i svjež dah.' ),
  array( 'npd-sastojak-smeda-alga.webp', 'Smeđa alga (Ascophyllum nodosum)', 'Morska alga bogata mineralima, poznata po djelovanju na kamenac. Pomaže smanjiti nakupljanje plaka i podupire dugoročnu higijenu zubi.' ),
  array( 'npd-sastojak-neven.webp', 'Ekstrakt nevena', 'Nježan, ali snažan cvjetni ekstrakt poznat po umirujućim svojstvima. Pomaže održati zdrave desni i prirodno se bori protiv bakterija.' ),
  array( 'npd-sastojak-klorofil.webp', 'Klorofil u prahu', 'Prirodni zeleni spoj poznat po pročišćavajućim svojstvima. Pomaže neutralizirati loš zadah i podupire zdrav mikrobiom usta.' ),
  array( 'npd-sastojak-zeleni-caj.webp', 'Zeleni čaj (bez kofeina)', 'Prirodni zeleni sastojak poznat po pročišćavajućim svojstvima. Pomaže neutralizirati loš zadah i podupire zdrav mikrobiom usta.' ),
);

/* 9) recenzije kupaca (549 -> po NORIKS 1081; zvezdice 396/107/31/8/7 skalirane na 692) */
$npd_dist = array(
  array( 5, 72, 499 ),
  array( 4, 19, 135 ),
  array( 3, 6, 39 ),
  array( 2, 1, 10 ),
  array( 1, 1, 9 ),
);
$npd_rv = array(
  array( 'ime' => 'Dubravka', 'z' => 5, 'naslov' => '', 'tekst' => 'Ovo mi je već druga narudžba. Odlično čisti.', 'foto' => array() ),
  array( 'ime' => 'Branka', 'z' => 5, 'naslov' => '', 'tekst' => 'Moji psi ga koriste oko mjesec dana i velika je promjena na zubima – i stalno je sve bolje.', 'foto' => array() ),
  array( 'ime' => 'M. Radić', 'z' => 5, 'naslov' => 'SADA VJERUJEM!!', 'tekst' => 'Oko tri mjeseca koristila sam drugi proizvod, granule koje se posipaju po hrani, i nisam primijetila velike rezultate. Nakon čitanja recenzija odlučila sam probati NORIKS. Moja draga labradudlica ima 13 godina i puno plaka, a dah joj je ponekad tjerao suze na oči!! Sprej joj od 20. svibnja prskam izravno na zube, a istodobno i u zdjelicu. Prošlo je 12 dana i moram reći da vidim OGROMNU razliku. Bijeli dijelovi izgledaju nevjerojatno bjelje, a plaka je definitivno manje, iako je pred nama još dug put. Kupila sam samo dvije bočice i sad mi je žao što nisam uzela više po nižoj cijeni. Opet ću naručiti!', 'foto' => array() ),
  array( 'ime' => 'Marija F.', 'z' => 5, 'naslov' => 'Odlično djeluje, drago mi je da sam počela', 'tekst' => 'Odlično djeluje, drago mi je da sam ga počela koristiti. Zubi moje psice su čisti, bijeli i sjajni, a dah joj najljepše miriše. Vrijedi svakog centa.', 'foto' => array() ),
  array( 'ime' => 'Nikolina', 'z' => 4, 'naslov' => 'Obožavam ovaj sprej!! Rezultati nakon 4 tjedna.', 'tekst' => 'Proizvod koristim od 17. lipnja, a pravi napredak vidjela sam početkom srpnja. Plak se polako skida s njegovih zuba. Imajte na umu da ima naslage od 8 godina. Veselim se još boljim rezultatima.', 'foto' => array( 'npd-rv-foto-1.webp', 'npd-rv-foto-2.webp', 'npd-rv-foto-3.webp' ) ),
);

$npd_n = 0; // števec sekcij za izmenična ozadja
$npd_cls = function() use ( &$npd_n ) { $npd_n++; return ( $npd_n % 2 ) ? ' npd-tint' : ''; };
?>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap">

<!-- 1) UPUTE ZA UPORABU I SASTAV (zavihka "Directions for Use" + "Ingredient list") -->
<section class="npd-sec<?php echo $npd_cls(); ?>">
  <div class="npd-wrap">
    <p class="npd-kicker npd-c">Kako koristiti</p>
    <h2 class="npd-h2 npd-c">Upute za uporabu <em>i sastav</em></h2>
    <div class="npd-row2 npd-row2--top">
      <div class="npd-copy">
        <h3 class="npd-h4">Doziranje prema težini psa</h3>
        <div class="npd-dose">
          <?php foreach ( $npd_dose as $d ) : ?>
          <div class="npd-dose__card">
            <span class="npd-dose__size"><?php echo esc_html( $d[0] ); ?></span>
            <div>
              <p class="npd-dose__w"><?php echo esc_html( $d[1] ); ?></p>
              <p class="npd-dose__n"><?php echo esc_html( $d[2] ); ?></p>
              <p class="npd-dose__t"><?php echo esc_html( $d[3] ); ?></p>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
        <p class="npd-small">Poprskajte izravno na zube ili na hranu – svaki dan, za najbolje rezultate.</p>
      </div>
      <div class="npd-copy">
        <h3 class="npd-h4">Sastav</h3>
        <ul class="npd-inci">
          <?php foreach ( $npd_inci as $i ) : ?>
          <li><strong><?php echo esc_html( $i[0] ); ?></strong> – <?php echo esc_html( $i[1] ); ?></li>
          <?php endforeach; ?>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- 2) PRAVI PSI. PRAVI VLASNICI. PRAVI REZULTATI. ("Real dogs. Real moms. Real before & afters.") -->
<section class="npd-sec<?php echo $npd_cls(); ?>">
  <div class="npd-wrap">
    <p class="npd-kicker npd-c">Iskustva vlasnika</p>
    <h2 class="npd-h2 npd-c">Pravi psi. Pravi vlasnici. <em>Pravi rezultati prije i poslije.</em></h2>
    <div class="npd-row2">
      <div class="npd-media"><?php echo $npd_video( 'npd-v-vlasnica-hr.mp4', 'Vlasnica dvaju pasa pokazuje sprej NORIKS PetDental (hrvatski podnapisi)', 'npd-vid--sq' ); ?></div>
      <div class="npd-copy">
        <?php echo $npd_stars( 5 ); ?>
        <p class="npd-quote">„Zubi mog psa brzo su žutjeli, a četkanje više nije pomagalo. Isprva sam bila skeptična, ali za samo tri tjedna loš zadah potpuno je nestao. Jako je jednostavan za upotrebu – psi ga ni ne primijete.”</p>
        <p class="npd-quote__name">– vlasnica Bentleyja (10) i Rue (2)</p>
      </div>
    </div>
    <?php foreach ( $npd_ba as $i => $b ) : ?>
    <div class="npd-row2<?php echo ( $i % 2 ) ? '' : ' npd-row2--rev'; ?> npd-row2--ba">
      <div class="npd-media">
        <div class="npd-ba">
          <figure><?php echo $npd_img( $b['prije'], 'Zubi psa prije korištenja spreja NORIKS PetDental' ); ?><figcaption>Prije</figcaption></figure>
          <figure><?php echo $npd_img( $b['poslije'], 'Zubi psa nakon korištenja spreja NORIKS PetDental' ); ?><figcaption class="npd-ba__after">Poslije</figcaption></figure>
        </div>
      </div>
      <div class="npd-copy">
        <?php echo $npd_stars( 5 ); ?>
        <p class="npd-quote">„<?php echo wp_kses( $b['txt'], $npd_kses ); ?>”</p>
        <p class="npd-quote__name">– <?php echo esc_html( $b['ime'] ); ?> <span class="npd-ok">✓ Potvrđena kupnja</span></p>
      </div>
    </div>
    <?php endforeach; ?>
  </div>
</section>

<!-- 3) PUT OD 3 MJESECA ("Your Dog's 3-Month Journey") -->
<section class="npd-sec<?php echo $npd_cls(); ?>">
  <div class="npd-wrap">
    <p class="npd-kicker npd-c">Put od 3 mjeseca</p>
    <h2 class="npd-h2 npd-c">Što se događa tijekom <em>preobrazbe usne šupljine</em> vašeg psa</h2>
    <div class="npd-cards npd-cards--3">
      <?php foreach ( $npd_journey as $j ) : ?>
      <div class="npd-cardx npd-step">
        <div class="npd-step__top"><span class="npd-cardx__n"><?php echo esc_html( $j[0] ); ?></span><span class="npd-step__tag"><?php echo esc_html( $j[1] ); ?></span></div>
        <h3><?php echo esc_html( $j[2] ); ?></h3>
        <p><?php echo esc_html( $j[3] ); ?></p>
        <div class="npd-step__bar"><span style="width:<?php echo (int) $j[4]; ?>%"></span></div>
        <p class="npd-step__pct"><?php echo (int) $j[4]; ?> % puta</p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- 4) ISPRVA SKEPTIČNI… A ONDA BEZ RIJEČI ("Skeptical at first.. Speechless after") — komentarji kupaca -->
<section class="npd-sec<?php echo $npd_cls(); ?>">
  <div class="npd-wrap">
    <p class="npd-kicker npd-c">Komentari kupaca</p>
    <h2 class="npd-h2 npd-c">Isprva skeptični… <em>a onda bez riječi</em></h2>
    <div class="npd-comments">
      <?php foreach ( $npd_cm as $c ) : ?>
      <div class="npd-cm">
        <span class="npd-cm__av" aria-hidden="true"><?php echo esc_html( preg_match( '/^./u', $c[0], $npd_m ) ? $npd_m[0] : '' ); ?></span>
        <div class="npd-cm__bubble">
          <p class="npd-cm__name"><?php echo esc_html( $c[0] ); ?></p>
          <p class="npd-cm__txt"><?php echo esc_html( $c[1] ); ?></p>
          <?php if ( $c[2] ) : ?><span class="npd-cm__likes">👍 <?php echo (int) $c[2]; ?></span><?php endif; ?>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- 5) ZAŠTO OVO DJELUJE ("Why this works when everything else failed") — 4 kartice z ikonami -->
<section class="npd-sec<?php echo $npd_cls(); ?>">
  <div class="npd-wrap">
    <p class="npd-kicker npd-c">Jednostavan način da se napokon pobrinete za usta svog psa</p>
    <h2 class="npd-h2 npd-c">Zašto ovo djeluje kad <em>ništa drugo nije</em></h2>
    <div class="npd-cards npd-cards--4">
      <?php foreach ( $npd_why as $w ) : ?>
      <div class="npd-cardx npd-why">
        <span class="npd-why__ic"><?php echo $npd_img( $w[0], '' ); ?></span>
        <h3><?php echo esc_html( $w[1] ); ?></h3>
        <p><?php echo esc_html( $w[2] ); ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- 6) DODAJTE U HRANU ILI NA ZUBE ("Add to their food or their teeth") — video ob besedilu -->
<section class="npd-sec<?php echo $npd_cls(); ?>">
  <div class="npd-wrap">
    <div class="npd-row2">
      <div class="npd-media"><?php echo $npd_video( 'npd-v-hrana.mp4', 'Sprej NORIKS PetDental prska se na hranu u zdjelici', 'npd-vid--sq' ); ?></div>
      <div class="npd-copy">
        <p class="npd-kicker">Jednostavna primjena</p>
        <h2 class="npd-h3">Dodajte u hranu <em>ili izravno na zube</em></h2>
        <p>Poprskajte izravno na zube – ili, ako vaš ljubimac ne voli da ga dirate oko usta, <strong>na hranu, poslasticu ili igračku za žvakanje</strong>. Isti učinak, bez borbe.</p>
        <p>Sprej ima <strong>okus govedine</strong>, pa ga psi i mačke ni ne primijete. Bez četkanja i bez držanja usta otvorenima.</p>
        <p class="npd-big">Samo poprskajte – sprej odradi ostalo.</p>
      </div>
    </div>
  </div>
</section>

<!-- 7) PRIJE I POSLIJE 90 DANA (slika "Before / After — After 90 days") — slika ob besedilu -->
<section class="npd-sec<?php echo $npd_cls(); ?>">
  <div class="npd-wrap">
    <div class="npd-row2 npd-row2--rev">
      <div class="npd-media"><?php echo $npd_img( 'npd-s7-prije-poslije.webp', 'Zubi psa prije i nakon 90 dana korištenja spreja NORIKS PetDental', 'npd-img--free' ); ?></div>
      <div class="npd-copy">
        <p class="npd-kicker">Prije i poslije</p>
        <h2 class="npd-h3">Rezultat nakon <em>90 dana</em></h2>
        <p>Budimo iskreni – ovo nije čudotvorni proizvod. Rezultati dolaze <strong>samo uz svakodnevnu upotrebu</strong>, u tome je cijela tajna.</p>
        <p>Mnogi vlasnici <strong>svježiji dah primijete već u prvih 1–2 tjedna</strong>, a vidljivije promjene na zubima i desnima nakon nekoliko tjedana redovite upotrebe. Brzina ovisi o tome odakle vaš pas kreće – kamenac se stvarao mjesecima, pa treba i nekoliko tjedana da se smanji.</p>
        <p class="npd-big">Zato ga preporučujemo kao jednostavnu svakodnevnu rutinu.</p>
      </div>
    </div>
  </div>
</section>

<!-- 8) KLJUČNI SASTOJCI ("Key ingredients") — 5 kartic s slikami -->
<section class="npd-sec<?php echo $npd_cls(); ?>">
  <div class="npd-wrap">
    <p class="npd-kicker npd-c">Iz prirode</p>
    <h2 class="npd-h2 npd-c">Ključni <em>sastojci</em></h2>
    <div class="npd-ings">
      <?php foreach ( $npd_ing as $g ) : ?>
      <div class="npd-ing">
        <div class="npd-ing__img"><?php echo $npd_img( $g[0], $g[1] ); ?></div>
        <div class="npd-ing__body">
          <h3><?php echo esc_html( $g[1] ); ?></h3>
          <p><?php echo esc_html( $g[2] ); ?></p>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- 9) RECENZIJE KUPACA ("Customer Reviews", 549 -> 1081 po NORIKS) — razdelitev zvezdic + mnenja -->
<section class="npd-sec<?php echo $npd_cls(); ?>">
  <div class="npd-wrap">
    <p class="npd-kicker npd-c">Recenzije kupaca</p>
    <h2 class="npd-h2 npd-c">Recenzije <em>NORIKS PetDental</em></h2>
    <div class="npd-score">
      <span class="npd-score__num">4,6 / 5</span>
      <?php echo $npd_stars( 5 ); ?>
      <span class="npd-score__txt">Na temelju 1081 recenzije</span>
    </div>
    <ul class="npd-dist">
      <?php foreach ( $npd_dist as $d ) : ?>
      <li>
        <span class="npd-dist__lbl"><?php echo (int) $d[0]; ?> ★</span>
        <span class="npd-dist__bar"><span style="width:<?php echo (int) $d[1]; ?>%"></span></span>
        <span class="npd-dist__pct"><?php echo (int) $d[1]; ?> % (<?php echo (int) $d[2]; ?>)</span>
      </li>
      <?php endforeach; ?>
    </ul>
    <div class="npd-reviews">
      <?php foreach ( $npd_rv as $r ) : ?>
      <article class="npd-card">
        <div class="npd-card__body">
          <?php echo $npd_stars( $r['z'] ); ?>
          <?php if ( $r['naslov'] ) : ?><p class="npd-card__title"><?php echo esc_html( $r['naslov'] ); ?></p><?php endif; ?>
          <p class="npd-card__txt">„<?php echo esc_html( $r['tekst'] ); ?>”</p>
          <?php if ( $r['foto'] ) : ?>
          <div class="npd-card__pics">
            <?php foreach ( $r['foto'] as $f ) { echo $npd_img( $f, 'Fotografija kupca – zubi psa tijekom korištenja spreja NORIKS PetDental' ); } ?>
          </div>
          <?php endif; ?>
          <p class="npd-card__name"><?php echo esc_html( $r['ime'] ); ?> <span class="npd-ok">✓ Potvrđena kupnja</span></p>
        </div>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<style>
/* NORIKS stil (predloga why-showertowel.php / why-hands.php): oznaka + naslov z ležečim poudarkom, slika ob
   besedilu, izmenjujoča ozadja in strani. Zeleno-modri (teal) poudarek po barvi originala (#2a8a78). */
.npd-sec { padding: 60px 0; font-family: 'Poppins', system-ui, -apple-system, 'Segoe UI', Roboto, Arial, sans-serif; color: #1b2b28; background: #fff; }
.npd-sec * { box-sizing: border-box; }
.npd-tint { background: #ecf6f3; }
.npd-wrap { width: 100%; max-width: 1200px; margin: 0 auto; padding: 0 24px; }
.npd-c { text-align: center; }
.npd-sec h2, .npd-sec h3 { font-family: inherit; text-transform: none; letter-spacing: 0; }
.npd-kicker, .npd-copy p.npd-kicker { font-size: 12.5px; line-height: 1.4; font-weight: 700; letter-spacing: .14em; text-transform: uppercase; color: #2a8a78; margin: 0 0 10px; }
.npd-h2 { font-weight: 700; font-size: clamp(25px, 3.1vw, 36px); line-height: 1.2; margin: 0 0 28px; color: #1b2b28; }
.npd-h2 em, .npd-h3 em { font-style: italic; color: #2a8a78; }
.npd-h3 { font-weight: 700; font-size: clamp(22px, 2.6vw, 30px); line-height: 1.25; margin: 0 0 16px; color: #1b2b28; }
.npd-h4 { font-weight: 700; font-size: 19px; line-height: 1.3; margin: 0 0 14px; color: #1b2b28; }
.npd-sec img { display: block; width: 100%; height: auto; }
.npd-sec figure { margin: 0; }

/* slika ob besedilu */
.npd-row2 { display: grid; grid-template-columns: 1fr 1fr; gap: 56px; align-items: center; }
.npd-row2--top { align-items: start; }
.npd-row2--rev .npd-media { order: 2; }
.npd-row2 + .npd-row2 { margin-top: 36px; }
.npd-media > img { border-radius: 10px; box-shadow: 0 2px 4px rgba(20,60,50,.05), 0 14px 40px rgba(20,60,50,.10); max-width: 520px; margin: 0 auto; aspect-ratio: 1 / 1; object-fit: cover; background: #fff; }
.npd-media > img.npd-img--free { aspect-ratio: auto; object-fit: contain; padding: 14px; }
.npd-copy p { font-size: 16px; line-height: 1.7; color: #3d4f4b; margin: 0 0 14px; }
.npd-copy p strong { color: #1b2b28; font-weight: 600; }
.npd-sec p.npd-big { font-size: 19px; font-weight: 700; color: #1b2b28; line-height: 1.45; margin-top: 6px; }
.npd-small { font-size: 14.5px !important; margin: 14px 0 0 !important; }

/* doziranje + sastav */
.npd-dose { display: grid; grid-template-columns: 1fr 1fr; gap: 12px; }
.npd-dose__card { display: flex; gap: 12px; align-items: flex-start; background: #fff; border: 1px solid #c9e3dc; border-radius: 10px; padding: 14px; }
.npd-sec:not(.npd-tint) .npd-dose__card { background: #f3f9f7; }
.npd-dose__size { flex: 0 0 42px; height: 42px; border-radius: 50%; background: #2a8a78; color: #fff; font-weight: 700; font-size: 15px; line-height: 42px; text-align: center; }
.npd-copy p.npd-dose__w { font-size: 14px; font-weight: 700; color: #1b2b28; margin: 0 0 2px; line-height: 1.4; }
.npd-copy p.npd-dose__n { font-size: 15px; font-weight: 600; color: #2a8a78; margin: 0 0 2px; line-height: 1.4; }
.npd-copy p.npd-dose__t { font-size: 13px; color: #5a6b67; margin: 0; line-height: 1.45; }
.npd-inci { list-style: none; margin: 0; padding: 0; background: #fff; border: 1px solid #c9e3dc; border-radius: 10px; }
.npd-sec:not(.npd-tint) .npd-inci { background: #f3f9f7; }
.npd-inci li { font-size: 15px; line-height: 1.55; color: #3d4f4b; padding: 10px 16px; border-bottom: 1px solid #e0efeb; }
.npd-inci li:last-child { border-bottom: 0; }
.npd-inci li strong { color: #1b2b28; font-weight: 600; }

/* prije / poslije */
.npd-ba { display: grid; grid-template-columns: 1fr 1fr; gap: 10px; max-width: 520px; margin: 0 auto; }
.npd-ba figure { position: relative; border-radius: 10px; overflow: hidden; box-shadow: 0 2px 4px rgba(20,60,50,.05), 0 10px 28px rgba(20,60,50,.10); }
.npd-ba img { aspect-ratio: 1 / 1; object-fit: cover; }
.npd-ba figcaption { position: absolute; left: 10px; top: 10px; background: rgba(27,43,40,.82); color: #fff; font-size: 12.5px; font-weight: 700; border-radius: 999px; padding: 4px 12px; }
.npd-ba figcaption.npd-ba__after { background: #2a8a78; }
.npd-quote { font-size: 18px !important; line-height: 1.6 !important; color: #1b2b28 !important; font-style: italic; margin: 10px 0 10px !important; }
.npd-quote__name { font-weight: 700; color: #2a8a78 !important; }

/* videi */
.npd-vid { position: relative; overflow: hidden; background: #d6ebe5; border-radius: 10px; margin: 0 auto; box-shadow: 0 2px 4px rgba(20,60,50,.05), 0 14px 40px rgba(20,60,50,.10); }
.npd-vid video { display: block; width: 100%; height: 100%; object-fit: cover; }
.npd-vid--sq { aspect-ratio: 1 / 1; max-width: 520px; }

/* kartice */
.npd-cards { display: grid; gap: 18px; }
.npd-cards--3 { grid-template-columns: repeat(3, minmax(0, 1fr)); }
.npd-cards--4 { grid-template-columns: repeat(4, minmax(0, 1fr)); }
.npd-cardx { background: #fff; border: 1px solid #c9e3dc; border-radius: 10px; padding: 22px 20px; box-shadow: 0 2px 10px rgba(20,60,50,.05); }
.npd-sec:not(.npd-tint) .npd-cardx { background: #f3f9f7; }
.npd-cardx__n { display: inline-block; width: 34px; height: 34px; border-radius: 50%; background: #2a8a78; color: #fff; font-weight: 700; font-size: 13px; line-height: 34px; text-align: center; }
.npd-cardx h3 { font-size: 17px; font-weight: 700; line-height: 1.35; color: #1b2b28; margin: 0 0 8px; }
.npd-cardx p { font-size: 15px; line-height: 1.65; color: #3d4f4b; margin: 0; }
.npd-step__top { display: flex; align-items: center; gap: 10px; margin-bottom: 12px; }
.npd-step__tag { font-size: 12px; font-weight: 700; letter-spacing: .08em; text-transform: uppercase; color: #2a8a78; background: #d3ebe5; border-radius: 999px; padding: 4px 10px; }
.npd-step__bar { height: 8px; border-radius: 6px; background: #d3ebe5; overflow: hidden; margin: 16px 0 6px; }
.npd-step__bar span { display: block; height: 100%; background: #2a8a78; border-radius: 6px; }
.npd-sec .npd-cardx p.npd-step__pct { font-size: 12.5px; font-weight: 600; color: #5a6b67; }
.npd-why { text-align: center; }
.npd-why__ic { display: block; width: 76px; height: 76px; margin: 0 auto 14px; border-radius: 50%; background: #d3ebe5; padding: 14px; }
.npd-why__ic img { width: 48px; height: 48px; }

/* komentarji */
.npd-comments { columns: 3; column-gap: 18px; }
.npd-cm { break-inside: avoid; display: flex; gap: 10px; align-items: flex-start; margin-bottom: 16px; }
.npd-cm__av { flex: 0 0 38px; height: 38px; border-radius: 50%; background: #2a8a78; color: #fff; font-weight: 700; font-size: 15px; line-height: 38px; text-align: center; }
.npd-cm__bubble { position: relative; background: #fff; border: 1px solid #d6e8e3; border-radius: 16px; padding: 10px 14px 12px; box-shadow: 0 1px 4px rgba(20,60,50,.06); }
.npd-cm__name { font-size: 14px; font-weight: 700; color: #1b2b28; margin: 0 0 3px; }
.npd-cm__txt { font-size: 14.5px; line-height: 1.55; color: #2c3b38; margin: 0; }
.npd-cm__likes { display: inline-block; margin-top: 6px; font-size: 12px; color: #5a6b67; background: #ecf6f3; border-radius: 999px; padding: 2px 8px; }

/* sastojci */
.npd-ings { display: grid; grid-template-columns: repeat(3, minmax(0, 1fr)); gap: 18px; }
.npd-ing { background: #fff; border: 1px solid #c9e3dc; border-radius: 10px; overflow: hidden; box-shadow: 0 2px 10px rgba(20,60,50,.05); }
.npd-sec:not(.npd-tint) .npd-ing { background: #f3f9f7; }
.npd-ing__img img { aspect-ratio: 16 / 10; object-fit: cover; }
.npd-ing__body { padding: 16px 18px 18px; }
.npd-ing h3 { font-size: 17px; font-weight: 700; color: #2a8a78; margin: 0 0 6px; line-height: 1.35; }
.npd-ing p { font-size: 14.5px; line-height: 1.6; color: #3d4f4b; margin: 0; }

/* ocjene */
.npd-stars { color: #f2a516; letter-spacing: 1px; font-size: 15px; }
.npd-stars__off { color: #d5e2df; }
.npd-ok { color: #2f9e5f; font-weight: 600; font-size: 12px; margin-left: 4px; font-style: normal; }
.npd-score { display: flex; justify-content: center; align-items: center; gap: 12px; margin: -10px 0 18px; flex-wrap: wrap; }
.npd-score__num { font-size: 26px; font-weight: 700; color: #1b2b28; }
.npd-score .npd-stars { font-size: 20px; }
.npd-score__txt { font-size: 14.5px; color: #5a6b67; }
.npd-dist { list-style: none; margin: 0 auto 32px; padding: 0; max-width: 460px; }
.npd-dist li { display: grid; grid-template-columns: 38px 1fr 92px; gap: 10px; align-items: center; margin: 0 0 8px; font-size: 14px; color: #2c3b38; }
.npd-dist__lbl { font-weight: 600; white-space: nowrap; }
.npd-dist__bar { display: block; height: 10px; border-radius: 6px; background: #d3ebe5; overflow: hidden; }
.npd-dist__bar span { display: block; height: 100%; background: #2a8a78; border-radius: 6px; }
.npd-dist__pct { color: #5a6b67; white-space: nowrap; }

/* mnenja */
.npd-reviews { columns: 3; column-gap: 18px; margin-top: 12px; }
.npd-reviews > .npd-card { break-inside: avoid; margin-bottom: 18px; }
.npd-card { background: #fff; border: 1px solid #c9e3dc; border-radius: 10px; overflow: hidden; display: flex; flex-direction: column; }
.npd-sec:not(.npd-tint) .npd-card { background: #f3f9f7; }
.npd-card__body { padding: 16px; }
.npd-card__title { font-size: 15px; font-weight: 700; color: #1b2b28; margin: 8px 0 0; }
.npd-card__txt { font-size: 14.5px; line-height: 1.6; color: #2c3b38; margin: 8px 0 10px; font-style: italic; }
.npd-card__pics { display: grid; grid-template-columns: repeat(3, 1fr); gap: 6px; margin: 0 0 10px; }
.npd-card__pics img { aspect-ratio: 3 / 4; object-fit: cover; border-radius: 6px; }
.npd-card__name { font-size: 13.5px; font-weight: 600; color: #1b2b28; margin: 0; }

@media (max-width: 989px) {
  .npd-row2 { gap: 32px; }
  .npd-reviews, .npd-comments { columns: 2; }
  .npd-cards--4, .npd-ings { grid-template-columns: 1fr 1fr; }
}
@media (max-width: 749px) {
  .npd-sec { padding: 42px 0; }
  .npd-wrap { padding: 0 16px; }
  .npd-row2 { grid-template-columns: 1fr; gap: 24px; }
  .npd-row2--rev .npd-media { order: 0; }
  .npd-cards--3 { grid-template-columns: 1fr; }
  .npd-dose { grid-template-columns: 1fr; }
  .npd-reviews { column-gap: 12px; }
  .npd-reviews > .npd-card { margin-bottom: 12px; }
  .npd-card__body { padding: 12px; }
}
@media (max-width: 520px) {
  .npd-reviews, .npd-comments { columns: 1; }
  .npd-cards--4, .npd-ings { grid-template-columns: 1fr; }
}

/* galerija izdelka: sličice največ v 2 vrstah (5 na vrsto), ostale slike so dosegljive z drsenjem glavne slike */
.product_cat-orto-petdental .flex-control-thumbs li:nth-child(n+11) { display: none !important; }

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
.woocommerce-product-details__short-description .npd-tick {
  position: absolute !important; left: 0 !important; top: 1px !important;
  width: 21px; height: 21px; border-radius: 50%;
  background: #2f9e5f !important; color: #fff !important;
  font-size: 12px !important; font-weight: 800 !important; line-height: 21px !important;
  text-align: center !important; display: inline-block !important; }
.woocommerce-product-details__short-description p:first-of-type { font-size: 16px; line-height: 1.55; }
</style>
