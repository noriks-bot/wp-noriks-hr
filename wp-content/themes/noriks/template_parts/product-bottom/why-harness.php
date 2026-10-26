<?php
/**
 * product-bottom: NORIKS Harness — oprsnica za pse protiv povlačenja (orto-harness).
 * Original: paropet.co.uk (No-Pull Dog Harness) — vsebina in vrstni red 1:1,
 * oblika po NORIKS stilu (predloga why-hands.php / why-titaniumpan.php):
 *   1) Uvod iz nakupne skatle (mnenje Sona T. + 4 prednosti) — slika ob besedilu
 *   2) Recenzije s fotografijami iz nakupne skatle (6 kartic, mreza brez drsnika)
 *   3) Savjet trenera ("Why a treat pouch") — slika ob besedilu (brez imena/fotografije trenerke in brez darila)
 *   4) Zasto prednja kopca (zavihek "Why Front Clip?") — slika ob besedilu
 *   5) Materijali i njega (zavihek) — slika ob besedilu
 *   6) Detalji proizvoda (zavihek) — slika ob besedilu
 *   7) Tisuce vlasnika pasa — mreza 12 fotografij kupcev (namesto tekocega traku)
 *   8) Kako bi mogle izgledati vase setnje — video s HR napisi ob besedilu
 *   9) Zasto odabrati NORIKS — primerjalna tabela (vrstica "Lifetime Warranty" izpuscena — NORIKS pogoji)
 *  10) Bez hrvanja — video (utisan) ob besedilu
 *  11) Dva nacina, jedna oprsnica (zavihek "Tips for use") — slika ob besedilu
 *  12) Recenzije kupaca (preprosta mreza)
 *  13) Nase obecanje (40-day guarantee + dostava -> 30 dana za povrat, besplatna dostava iznad 70 €)
 * FAQ z originala je v reviews.php ($harness_faq). Darila (povodac, vrecica za poslastice), personalizirana
 * zakrpa, odstevalnik in pojavno okno z originala so izpusceni.
 * Slike / videi: img/harness/ (original, brez tuje znamke, napisi prevedeni).
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$nhar      = get_template_directory_uri() . '/img/harness/';
$nhar_path = get_template_directory() . '/img/harness/';
$nhar_img  = function( $file, $alt ) use ( $nhar, $nhar_path ) {
  if ( ! $file || ! file_exists( $nhar_path . $file ) ) { return ''; }
  return '<img src="' . esc_url( $nhar . $file ) . '" alt="' . esc_attr( $alt ) . '" loading="eager">';
};
$nhar_vid  = function( $file ) use ( $nhar, $nhar_path ) {
  if ( ! $file || ! file_exists( $nhar_path . $file . '.mp4' ) ) { return ''; }
  return '<video src="' . esc_url( $nhar . $file . '.mp4' ) . '" poster="' . esc_url( $nhar . $file . '-poster.webp' ) . '" muted autoplay loop playsinline preload="metadata"></video>';
};
$nhar_stars = function( $n ) {
  $n = max( 0, min( 5, (int) $n ) );
  $out = '<span class="nhar-stars" aria-label="' . esc_attr( $n . ' od 5 zvjezdica' ) . '">';
  for ( $i = 1; $i <= 5; $i++ ) { $out .= '<i' . ( $i > $n ? ' class="is-off"' : '' ) . '>★</i>'; }
  return $out . '</span>';
};

/* 2) recenzije s fotografijami iz nakupne skatle */
$nhar_photo_revs = array(
  array( 'slika' => 'nh-rv-01.webp', 'ime' => 'Eamonn M.',
    'tekst' => 'Toplo preporučujem! Nisam bio siguran hoće li ova oprsnica riješiti jako povlačenje mog psa u šetnjama, ali već nakon prvih nekoliko šetnji kao da je drugi pas — ne vuče i šetnja s njim je pravo zadovoljstvo. Najbolja stvar koju sam kupio za svog psa.' ),
  array( 'slika' => 'nh-rv-02.webp', 'ime' => 'Kelly H.',
    'tekst' => 'Isprva sam oklijevala, ali iz očaja — ozlijedila sam leđa i trebala mi je oprema uz koju pas neće vući — odlučila sam probati. Fantastičan proizvod! Nasmijala sam se kad je prvi put krenuo vući kao i inače, a ništa se nije dogodilo. Pomislili biste da je sad savršeno dresiran beagle.' ),
  array( 'slika' => 'nh-rv-03.webp', 'ime' => 'Barry E.',
    'tekst' => 'Oduševljen sam — dobro izrađena, savršeno pristaje i pas više ne vuče.' ),
  array( 'slika' => 'nh-rv-04.webp', 'ime' => 'Jorma R.',
    'tekst' => 'Čim ju je stavio (i prebolio ono „ovo je čudno”), hodao je stvarno mirno i nije vukao. Na mjestima gdje inače povuče jedva sam išta osjetila. Presretna sam, definitivno preporučujem 😍' ),
  array( 'slika' => 'nh-rv-05.webp', 'ime' => 'Samantha L.',
    'tekst' => 'Arlo je zaigran i uzbudljiv mops koji je uvijek vukao u šetnjama, čak i uz dresuru i poslastice. Otkako nosi ovu oprsnicu, hoda uz nas i to je nevjerojatno. Sad se zapravo veselim našim mirnim šetnjama.' ),
  array( 'slika' => 'nh-rv-06.webp', 'ime' => 'Janine J.',
    'tekst' => 'Odlična je i stvarno pomaže protiv povlačenja.' ),
);

/* 6) detalji proizvoda */
$nhar_details = array(
  'Podesive trake za savršeno pristajanje',
  'Prozračni, mekani materijali za udobnost cijeli dan',
  'Jednostavna kopča na klik za brzo stavljanje i skidanje',
  'Čvrsta ručka za dodatnu kontrolu',
  'Izdržljivi D-prsten za sigurno pričvršćivanje povodca',
  'Dostupna u devet posebno odabranih boja',
);

/* 7) fotografije kupcev */
$nhar_ugc = array( 'nh-ug-01.webp', 'nh-ug-02.webp', 'nh-ug-03.webp', 'nh-ug-04.webp', 'nh-ug-05.webp', 'nh-ug-06.webp',
                   'nh-ug-07.webp', 'nh-ug-08.webp', 'nh-ug-09.webp', 'nh-ug-10.webp', 'nh-ug-11.webp', 'nh-ug-12.webp' );

/* 9) usporedba (stupci: NORIKS Harness, oprsnica za njušku, ostale oprsnice) */
$nhar_compare = array(
  array( 'Trenutačno preusmjeravanje povlačenja', true, true, false ),
  array( 'Stavljanje i skidanje za 2 sekunde', true, false, false ),
  array( 'Dvije kopče: dresura + opuštena šetnja', true, false, false ),
  array( 'Bez gušenja i davljenja', true, true, false ),
  array( 'Udobna za vašeg psa', true, false, false ),
  array( 'Čičak površina za oznaku s imenom', true, false, false ),
);

/* 12) recenzije 1:1 z originala (prevedene; brez ponovitev iz sekcije 2 in brez mnenj samo o darilih) */
$nhar_reviews = array(
  array( 'slika' => 'nh-ug-08.webp', 'ime' => 'Pat P.', 'z' => 5,
    'tekst' => 'Definitivno je napravila razliku! Kupili smo je za šetnje među ljudima na odmoru i bila je odlična. Kako je riječ o psu kratke njuške, brinula sam se zbog vrata, ali nije bilo razloga — sve je bilo u redu! Toplo preporučujemo. Hvala!' ),
  array( 'slika' => '', 'ime' => 'Janet R.', 'z' => 5,
    'tekst' => 'Moja kuja inače lijepo hoda, ali je skakala za biciklima i trkačima. Probala sam oprsnicu za njušku, ali ju je mrzila. S ovom oprsnicom imam istu kontrolu i sada imam jednog sretnog psa. Opis je točan — stvarno sprječava povlačenje i jako se lako stavlja. Drago mi je da sam je kupila, 10 od 10 😊👍' ),
  array( 'slika' => 'nh-rk-07.webp', 'ime' => 'Julie C.', 'z' => 5,
    'tekst' => 'Ruka i rame su mi jako zahvalni 🙏' ),
  array( 'slika' => 'nh-rk-08.webp', 'ime' => 'Louise S.', 'z' => 5,
    'tekst' => 'Udomili smo velikog njemačkog ovčara koji uopće nije znao hodati na povodcu i zbog povlačenja ga nisam mogla sama šetati. Danas sam je prvi put isprobala i sama prošetala dva velika psa! Ne može jako vući. Prava promjena! A u njoj i odlično izgleda. Hvala!' ),
  array( 'slika' => '', 'ime' => 'Janine J.', 'z' => 5,
    'tekst' => 'Naš koker španijel Jax strašno je vukao. Isprobali smo više oprsnica i povodaca, uključujući oprsnice za njušku i zatezne ogrlice, ali ništa ga nije zaustavilo — sve do sada! Hoda kao iz snova, a naša petogodišnjakinja, kojoj ga nikad nismo smjeli dati jer bi je povukao, sada ga obožava voditi.' ),
  array( 'slika' => '', 'ime' => 'Ruby T.', 'z' => 5,
    'tekst' => 'Stvarno je smanjila trzanje. Sprijeda mi se čini malo labava jer se regulatori znaju olabaviti, ali to ću riješiti. Jako sam zadovoljna — šetnje su puno bolje! Psi još malo vuku, ali puno manje, i nadam se da ćemo s vremenom napokon uživati u šetnjama zajedno.' ),
  array( 'slika' => '', 'ime' => 'Angela R.', 'z' => 5,
    'tekst' => 'Promijenila je naše šetnje. Vrlo udobna za našeg psa koji je prije vukao. Svakako preporučujem.' ),
  array( 'slika' => '', 'ime' => 'Jane L.', 'z' => 5,
    'tekst' => 'Ovo je Casper, ima 2 godine. U oprsnici s kopčom na leđima vukao je kao vlak, a sad je kao drugi pas. Sve što ste napisali o oprsnici je točno — da sam barem ranije znala. Hvala što ste promijenili naše šetnje, svakako ćemo vas preporučiti drugim vlasnicima.' ),
  array( 'slika' => 'nh-rk-19.webp', 'ime' => 'David K.', 'z' => 5,
    'tekst' => 'Savršeno mu pristaje, odlična kvaliteta.' ),
  array( 'slika' => 'nh-rk-20.webp', 'ime' => 'Michelle L.', 'z' => 5,
    'tekst' => 'Nevjerojatno kakvu je razliku napravila — da sam je barem ranije pronašla.' ),
  array( 'slika' => 'nh-rk-21.webp', 'ime' => 'Zoe B.', 'z' => 5,
    'tekst' => 'Radi nevjerojatno — nema više povlačenja ni bolova u leđima, hvala!' ),
  array( 'slika' => 'nh-rk-22.webp', 'ime' => 'Yvette A.', 'z' => 5,
    'tekst' => 'Imamo malu šestogodišnju cockapoo kuju Kyru koja misli da su šetnje na povodcu mučenje i da se moraju odraditi najvećom mogućom brzinom. U šest godina isprobala sam vjerojatno svaku oprsnicu na tržištu. Izmjerila sam je, poslala upit i dobila preporuku za veličinu S. Prvih dana povodac smo kopčali na stražnji D-prsten da se navikne na oprsnicu. Treći dan smo ga zakopčali sprijeda — krenula je vući kroz dvorište i niz ulicu, a umjesto toga samo se okrenula prema meni. Nakon nekoliko dana dogodilo se čudo: prestala je vući i prvi put u šest godina hodala uz mene! Danas hoda gotovo savršeno. Toliko sam oduševljena da sam naručila još jednu, nebeskoplavu, za njezina starijeg brata. Ako vaš pas vuče — nabavite ovu oprsnicu (ili dvije).' ),
  array( 'slika' => 'nh-rk-24.webp', 'ime' => 'Sarah A.', 'z' => 5,
    'tekst' => 'Imamo udomljenog sprocker španijela koji obožava avanture, ali vuče kao teretni vlak. Ova oprsnica definitivno pomaže — još vuče, ali ni približno kao prije i okreće ga prema meni. Puno lakše za moje i njegove zglobove, a dosad nisam pala, što je veliki napredak. Korisnička podrška bila je brza i susretljiva. Svakako preporučujem.' ),
  array( 'slika' => 'nh-rk-25.webp', 'ime' => 'Mr G.', 'z' => 5,
    'tekst' => 'Napravila je ogromnu razliku.' ),
  array( 'slika' => 'nh-rk-26.webp', 'ime' => 'Emily P.', 'z' => 5,
    'tekst' => 'Potpuno je promijenila naše šetnje 😁' ),
  array( 'slika' => 'nh-rk-27.webp', 'ime' => 'Denise P.', 'z' => 5,
    'tekst' => 'Mojoj petomjesečnoj koker španijelki dobro pristaje. Prednje kopče su mi se malo pomicale kad se jedna strana olabavi dok vuče, pa sam traku iza kopče učvrstila ljepljivom trakom. Prednja kopča je odlična, koristim je za šetnju uz nogu i povlačenje se smanjilo.' ),
  array( 'slika' => '', 'ime' => 'Jason S.', 'z' => 5,
    'tekst' => 'Tko god se ovoga sjetio, pravi je genij. Da je ovo postojalo prije 20 godina, kupio bih dvije.' ),
  array( 'slika' => 'nh-rk-29.webp', 'ime' => 'Tim S.', 'z' => 5,
    'tekst' => 'Naša sedmomjesečna labradorica loše je hodala na zateznoj ogrlici i gušila se. Nisam bio siguran hoće li oprsnica pomoći, ali razlika je nevjerojatna već od prvog dana. Sad većinom hoda na labavom povodcu, a kad krene vući, brzo se vrati uz mene. Toliko sam impresioniran da sam naručio još jednu.' ),
  array( 'slika' => '', 'ime' => 'Irene B.', 'z' => 5,
    'tekst' => 'Fantastična! Moj pas je uvijek nosio oprsnicu za njušku, a bez nje bi me srušio na tlo. S ovom oprsnicom njuška mu više nije trebala i bio je savršen. Hvala vam još jednom, promijenila je mog psa. Pozdrav, Irene' ),
  array( 'slika' => 'nh-rk-31.webp', 'ime' => 'Anita D.', 'z' => 5,
    'tekst' => 'Odlična, nema više povlačenja.' ),
  array( 'slika' => 'nh-rk-33.webp', 'ime' => 'Julia A.', 'z' => 5,
    'tekst' => 'Naš veliki zlatni retriver ima 3 i pol godine i godinama smo isprobavali razne oprsnice i povodce. Ova je jednostavno NAJBOLJA jer stvarno radi — čim povuče, okrene se natrag prema vama. Sviđa mi se i prsten na leđima za kad je dobar, ali ga još ne mogu pustiti s povodca, a koristila sam i ručku. Ne mogu je dovoljno preporučiti.' ),
  array( 'slika' => 'nh-rk-34.webp', 'ime' => 'Julie M.', 'z' => 5,
    'tekst' => 'Imam springer španijela koji bez povodca hoda divno, ali na povodcu jako vuče. Nijedna oprsnica protiv povlačenja nije ga zaustavila, a uvijek je bio između dvije veličine. Ova savršeno pristaje i, što je najvažnije, kao da šetam drugog psa! Ramena i leđa me više ne bole. Iskreno preporučujem vlasnicima španijela 💙' ),
  array( 'slika' => '', 'ime' => 'Yvonne O.', 'z' => 5,
    'tekst' => 'Odlična oprsnica, prednji prsten daje onu dodatnu kontrolu! Već sam imala sličnu pa sam znala da će biti dobra, a obožavam i ručku na leđima.' ),
  array( 'slika' => 'nh-rk-36.webp', 'ime' => 'Jackie A.', 'z' => 5,
    'tekst' => 'Riječ koju sam izgovorila kad smo je prvi put isprobali bila je „čarolija”. Radi predivno. Hvala.' ),
  array( 'slika' => 'nh-rk-39.webp', 'ime' => 'Anita D.', 'z' => 5,
    'tekst' => 'Nakon 2 godine povlačenja u šetnjama, već se u prvom tjednu s oprsnicom smirio.' ),
  array( 'slika' => 'nh-rk-40.webp', 'ime' => 'Natalie J.', 'z' => 5,
    'tekst' => 'Obožavam novu oprsnicu — stvarno radi! Boja je lijepa i jarka, a kvaliteta odlična. Jedino je prednja traka malo labava, iako oko prsa savršeno pristaje. Uzeli smo veličinu M za našu sprocker španijelku. Šetnje su potpuno drukčije: s kopčom na leđima još vuče, a s prednjom hoda deset puta bolje.' ),
);
// Število recenzij usklajeno z glavo strani in zavihki recenzij teme (1081 skupaj = 692 izdelka + 389 dostave)
$nhar_dist = array( 5 => array( '574', 83 ), 4 => array( '104', 15 ), 3 => array( '11', 2 ), 2 => array( '2', 0 ), 1 => array( '1', 0 ) );
?>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap">

<!-- 1) UVOD — slika ob besedilu -->
<section class="nhar-sec nhar-tint">
  <div class="nhar-wrap">
    <div class="nhar-row2">
      <div class="nhar-media"><?php echo $nhar_img( 'nh-02-pas.webp', 'Pas u oprsnici NORIKS Harness' ); ?></div>
      <div class="nhar-copy">
        <p class="nhar-kicker">NORIKS Harness</p>
        <h2 class="nhar-h3">Šetnje <em>bez povlačenja</em></h2>
        <blockquote class="nhar-inq">„Osjećam da imam više kontrole kad povuče, a mirnija sam jer znam da je ne guši.”<span>— Sona T.</span></blockquote>
        <ul class="nhar-ticks">
          <li><strong>Trenutačno zaustavlja povlačenje</strong></li>
          <li><strong>Bez gušenja i trzanja</strong></li>
          <li><strong>Stavljanje i skidanje za 2 sekunde</strong></li>
          <li><strong>30 dana za povrat — probajte bez rizika</strong></li>
        </ul>
        <p class="nhar-big">Pravo na povrat u roku od 30 dana · Besplatna dostava za narudžbe iznad 70 €.</p>
      </div>
    </div>
  </div>
</section>

<!-- 2) RECENZIJE S FOTOGRAFIJAMA (nakupna skatla) -->
<section class="nhar-sec">
  <div class="nhar-wrap">
    <p class="nhar-kicker nhar-c">Recenzije kupaca</p>
    <h2 class="nhar-h2 nhar-c">Ocjena 4,8 — <em>692 recenzije</em></h2>
    <div class="nhar-prevs">
      <?php foreach ( $nhar_photo_revs as $r ) : ?>
      <article class="nhar-prv">
        <div class="nhar-prv__img"><?php echo $nhar_img( $r['slika'], 'Fotografija kupca: ' . $r['ime'] ); ?></div>
        <div class="nhar-prv__body">
          <?php echo $nhar_stars( 5 ); ?>
          <p class="nhar-rv__txt"><?php echo esc_html( $r['tekst'] ); ?></p>
          <p class="nhar-rv__name"><?php echo esc_html( $r['ime'] ); ?> <span>· Provjereni kupac</span></p>
        </div>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- 3) SAVJET TRENERA — slika ob besedilu -->
<section class="nhar-sec nhar-tint">
  <div class="nhar-wrap">
    <div class="nhar-row2 nhar-row2--rev">
      <div class="nhar-media"><?php echo $nhar_img( 'nh-ug-06.webp', 'Pas u oprsnici čeka nagradu' ); ?></div>
      <div class="nhar-copy">
        <p class="nhar-kicker">Savjet trenera</p>
        <h2 class="nhar-h3">Ne samo kontrola — <em>nova navika</em></h2>
        <p>Cilj nije samo obuzdati povlačenje, nego promijeniti naviku koja stoji iza njega. Jer cilj je jednostavan: da šetnje ponovno budu užitak — zauvijek.</p>
        <p><strong>Prednja kopča odmah obavi svoj dio posla.</strong> Kad pas pokuša jurnuti naprijed, prednja kopča ga usmjeri natrag prema vama. Umjesto da vas vuče niz ulicu, povlačenje ga jednostavno više nikamo ne vodi.</p>
        <p><strong>Zatim dolazi drugi dio.</strong> Dok ga oprsnica prirodno drži bliže vama, nagradite ponašanje koje želite zadržati. Mala poslastica kad mirno hoda uz vas stvara pozitivno potkrepljenje: povlačenje ga nikamo ne vodi, a hodanje uz vas donosi nagradu.</p>
        <p>Šetnju za šetnjom vaš pas uči potpuno drukčije hodati — umjesto da se svaki put iznova borite protiv povlačenja.</p>
        <p class="nhar-big">Prednja kopča pomaže vam sada. Dresura je tu da vam jednog dana više ne treba. A kad pas bude spreman — za to služi stražnja kopča.</p>
      </div>
    </div>
  </div>
</section>

<!-- 4) ZASTO PREDNJA KOPCA — slika ob besedilu -->
<section class="nhar-sec">
  <div class="nhar-wrap">
    <div class="nhar-row2">
      <div class="nhar-media nhar-media--wide"><?php echo $nhar_img( 'nh-04-prednja-kopca.webp', 'Stražnja i prednja kopča: zašto pas prestaje vući' ); ?></div>
      <div class="nhar-copy">
        <p class="nhar-kicker">Zašto prednja kopča?</p>
        <h2 class="nhar-h3">Isti pas. <em>Drukčija šetnja.</em></h2>
        <p>Većina oprsnica kopča se na leđima, pa se pas može nagnuti naprijed i vući još jače. Naš <strong>prednji D-prsten preusmjerava njegov zamah u stranu</strong> i prekida kretanje prema naprijed — bez trzanja i bez gušenja.</p>
        <p class="nhar-big">Isto načelo koje preporučuju veterinari i treneri — ugrađeno u oprsnicu.</p>
      </div>
    </div>
  </div>
</section>

<!-- 5) MATERIJALI I NJEGA — slika ob besedilu -->
<section class="nhar-sec nhar-tint">
  <div class="nhar-wrap">
    <div class="nhar-row2 nhar-row2--rev">
      <div class="nhar-media nhar-media--wide"><?php echo $nhar_img( 'nh-13-tirkizna.webp', 'NORIKS Harness od laganog prozračnog najlona' ); ?></div>
      <div class="nhar-copy">
        <p class="nhar-kicker">Materijali i njega</p>
        <h2 class="nhar-h3">Lagana, prozračna, <em>bez žuljanja</em></h2>
        <p>Izrađena je od <strong>laganog, prozračnog najlona</strong> — dovoljno čvrstog za svakodnevnu upotrebu i dovoljno mekanog da nikad ne žulja. Trake priliježu uz tijelo psa: bez trljanja, bez iritacije i bez točaka pritiska, čak ni u duljim šetnjama.</p>
        <p>Kad se zablati, isperite je pod mlazom tople vode, obrišite i ostavite da se osuši na zraku. <strong>Pranje u perilici nije potrebno.</strong></p>
        <p class="nhar-big">Spremna je za sljedeću šetnju čim i vaš pas bude spreman.</p>
      </div>
    </div>
  </div>
</section>

<!-- 6) DETALJI PROIZVODA — slika ob besedilu -->
<section class="nhar-sec">
  <div class="nhar-wrap">
    <div class="nhar-row2">
      <div class="nhar-media nhar-media--wide"><?php echo $nhar_img( 'nh-03-znacajke.webp', 'Značajke oprsnice NORIKS Harness' ); ?></div>
      <div class="nhar-copy">
        <p class="nhar-kicker">Detalji proizvoda</p>
        <h2 class="nhar-h3">Sve što trebate <em>za mirne šetnje</em></h2>
        <ul class="nhar-ticks">
          <?php foreach ( $nhar_details as $li ) : ?><li><?php echo esc_html( $li ); ?></li><?php endforeach; ?>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- 7) TISUCE VLASNIKA PASA — fotografije kupcev -->
<section class="nhar-sec nhar-tint">
  <div class="nhar-wrap">
    <p class="nhar-kicker nhar-c">Iz zajednice</p>
    <h2 class="nhar-h2 nhar-c">Tisuće vlasnika pasa <em>ponovno uživa u šetnjama!</em></h2>
    <div class="nhar-ugc">
      <?php foreach ( $nhar_ugc as $u ) : ?>
      <figure class="nhar-ugc__item"><?php echo $nhar_img( $u, 'Pas kupca u oprsnici NORIKS Harness' ); ?></figure>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- 8) KAKO BI MOGLE IZGLEDATI VASE SETNJE — video ob besedilu -->
<section class="nhar-sec">
  <div class="nhar-wrap">
    <div class="nhar-row2 nhar-row2--rev">
      <div class="nhar-media nhar-media--video"><?php echo $nhar_vid( 'nh-video-setnja-hr' ); ?></div>
      <div class="nhar-copy">
        <p class="nhar-kicker">Na djelu</p>
        <h2 class="nhar-h3">Kako bi mogle izgledati <em>vaše šetnje</em></h2>
        <p>Oprsnica koja radi <strong>s pokretima vašeg psa, a ne protiv njih</strong>.</p>
        <p>Pas povuče — prednja kopča ga zaustavi i preusmjeri natrag prema vama. Bez trzanja, bez gušenja, bez vike.</p>
        <p class="nhar-big">Sigurnije šetnje u kojima ponovno uživate.</p>
      </div>
    </div>
  </div>
</section>

<!-- 9) ZASTO ODABRATI NORIKS — usporedba -->
<section class="nhar-sec nhar-tint">
  <div class="nhar-wrap nhar-wrap--narrow">
    <p class="nhar-kicker nhar-c">Usporedba</p>
    <h2 class="nhar-h2 nhar-c">Zašto odabrati <em>NORIKS?</em></h2>
    <table class="nhar-cmp">
      <thead>
        <tr>
          <th></th>
          <th class="is-ours"><?php echo $nhar_img( 'nh-cmp-noriks.webp', 'NORIKS Harness' ); ?><span>NORIKS Harness</span></th>
          <th><?php echo $nhar_img( 'nh-cmp-njuska.webp', 'Oprsnica za njušku' ); ?><span>Oprsnica za njušku</span></th>
          <th><?php echo $nhar_img( 'nh-cmp-ostale.webp', 'Ostale oprsnice' ); ?><span>Ostale</span></th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ( $nhar_compare as $c ) : ?>
        <tr>
          <td><?php echo esc_html( $c[0] ); ?></td>
          <?php for ( $k = 1; $k <= 3; $k++ ) : ?>
          <td class="<?php echo ( 1 === $k ) ? 'is-ours ' : ''; ?><?php echo $c[ $k ] ? 'is-yes' : 'is-no'; ?>"><span><?php echo $c[ $k ] ? '✓' : '✕'; ?></span></td>
          <?php endfor; ?>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</section>

<!-- 10) BEZ HRVANJA — video ob besedilu -->
<section class="nhar-sec">
  <div class="nhar-wrap">
    <div class="nhar-row2">
      <div class="nhar-media nhar-media--wide"><?php echo $nhar_vid( 'nh-video-oblacenje' ); ?></div>
      <div class="nhar-copy">
        <p class="nhar-kicker">Stavljanje za 2 sekunde</p>
        <h2 class="nhar-h3">Bez hrvanja. <em>Bez navlačenja preko glave.</em></h2>
        <p>Uvedite psa u oprsnicu. Kliknite kopče. <strong>Gotovo.</strong></p>
        <p class="nhar-big">Oprsnica je spremna u dvije sekunde — i vi ste spremni za šetnju.</p>
      </div>
    </div>
  </div>
</section>

<!-- 11) DVA NACINA, JEDNA OPRSNICA — slika ob besedilu -->
<section class="nhar-sec nhar-tint">
  <div class="nhar-wrap">
    <div class="nhar-row2 nhar-row2--rev">
      <div class="nhar-media nhar-media--wide"><?php echo $nhar_img( 'nh-01-oprsnica.webp', 'NORIKS Harness s prednjom i stražnjom kopčom' ); ?></div>
      <div class="nhar-copy">
        <p class="nhar-kicker">Savjeti za korištenje</p>
        <h2 class="nhar-h3">Dva načina. <em>Jedna oprsnica.</em></h2>
        <p>Prednja kopča za kontrolu. Stražnja kopča za slobodu. Promjena u nekoliko sekundi.</p>
        <p><strong>Način 1 — Dresura (prednja kopča)</strong><br>Povodac zakopčajte za prednji D-prsten na prsima. Kad pas povuče, tijelo mu se okrene u stranu i kretanje prema naprijed se prekine. Koristite ga za šetnje uz dresuru, na prometnim pločnicima i svugdje gdje se pas uzbudi.</p>
        <p><strong>Način 2 — Avantura (stražnja kopča)</strong><br>Povodac zakopčajte za stražnji D-prsten. Potpuna sloboda kretanja za opuštene šetnje, planinarenje i izlaske kad je vani mirnije — kad pas već lijepo hoda na labavom povodcu.</p>
        <p><strong>Kada prebaciti:</strong> svakog psa počnite s načinom za dresuru. Kad počne mirno hodati uz vas (većina pasa prilagodi se u 1–3 šetnje), isprobajte način za avanturu na mirnijim rutama. Ako ponovno počne vući, vratite se na prednju kopču.</p>
        <p class="nhar-big">Bez alata i bez muke — samo premjestite kopču.</p>
      </div>
    </div>
  </div>
</section>

<!-- 12) RECENZIJE — preprosta mreza -->
<section class="nhar-sec nhar-sec--reviews">
  <div class="nhar-wrap">
    <p class="nhar-kicker nhar-c">Recenzije kupaca</p>
    <h2 class="nhar-h2 nhar-c">Što kažu <em>vlasnici pasa</em></h2>
    <div class="nhar-summary">
      <div class="nhar-summary__score"><strong>4,8</strong><?php echo $nhar_stars( 5 ); ?><span>na temelju 692 recenzije proizvoda</span></div>
      <div class="nhar-summary__bars">
        <?php foreach ( $nhar_dist as $z => $d ) : ?>
        <div class="nhar-bar"><span class="nhar-bar__lbl"><?php echo (int) $z; ?> ★</span><span class="nhar-bar__track"><span style="width:<?php echo (int) $d[1]; ?>%"></span></span><span class="nhar-bar__n"><?php echo esc_html( $d[0] ); ?></span></div>
        <?php endforeach; ?>
      </div>
    </div>
    <div class="nhar-revs">
      <?php foreach ( $nhar_reviews as $r ) : ?>
      <article class="nhar-rv">
        <?php if ( $r['slika'] ) : ?><div class="nhar-rv__img"><?php echo $nhar_img( $r['slika'], 'Fotografija kupca: ' . $r['ime'] ); ?></div><?php endif; ?>
        <div class="nhar-rv__body">
          <?php echo $nhar_stars( $r['z'] ); ?>
          <p class="nhar-rv__txt"><?php echo esc_html( $r['tekst'] ); ?></p>
          <p class="nhar-rv__name"><?php echo esc_html( $r['ime'] ); ?> <span>· Provjereni kupac</span></p>
        </div>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- 13) NASE OBECANJE — NORIKS pogoji -->
<section class="nhar-sec nhar-tint">
  <div class="nhar-wrap nhar-wrap--narrow nhar-c">
    <p class="nhar-kicker">Naše obećanje</p>
    <h2 class="nhar-h2">Pravo na povrat <em>u roku od 30 dana</em></h2>
    <div class="nhar-cards">
      <div class="nhar-card"><h3>30 dana za povrat</h3><p>Ako vama ili vašem psu oprsnica ne odgovara — pogrešna veličina, boja ili pas i dalje vuče — vratite je u roku od 30 dana. Bez komplikacija.</p></div>
      <div class="nhar-card"><h3>Besplatna dostava</h3><p>Besplatna dostava za narudžbe iznad 70 €. Nakon slanja narudžbe e-mailom dobivate podatke za praćenje pošiljke.</p></div>
    </div>
  </div>
</section>

<style>
/* NORIKS stil (predloga why-hands.php / why-titaniumpan.php): oznaka + naslov z lezecim poudarkom, slika/video ob besedilu,
   izmenjujoca ozadja. Barvni poudarek izdelka: svez tirkizno-zelen (#2b7a6f), kot barve oprsnice. */
.nhar-sec { padding: 60px 0; font-family: 'Poppins', system-ui, -apple-system, 'Segoe UI', Roboto, Arial, sans-serif; color: #1f2a28; background: #fff; }
.nhar-sec * { box-sizing: border-box; }
.nhar-tint { background: #eef5f3; }
.nhar-wrap { width: 100%; max-width: 1200px; margin: 0 auto; padding: 0 24px; }
.nhar-wrap--narrow { max-width: 860px; }
.nhar-c { text-align: center; }
.nhar-sec h2, .nhar-sec h3 { font-family: inherit; text-transform: none; letter-spacing: 0; }
.nhar-kicker, .nhar-copy p.nhar-kicker { font-size: 12.5px; line-height: 1.4; font-weight: 700; letter-spacing: .14em; text-transform: uppercase; color: #2b7a6f; margin: 0 0 10px; }
.nhar-h2 { font-weight: 700; font-size: clamp(25px, 3.1vw, 36px); line-height: 1.2; margin: 0 0 30px; color: #1f2a28; }
.nhar-h2 em, .nhar-h3 em { font-style: italic; color: #2b7a6f; }
.nhar-h3 { font-weight: 700; font-size: clamp(22px, 2.6vw, 30px); line-height: 1.25; margin: 0 0 16px; color: #1f2a28; }
.nhar-sec img, .nhar-sec video { display: block; width: 100%; height: auto; }

/* slika/video ob besedilu */
.nhar-row2 { display: grid; grid-template-columns: 1fr 1fr; gap: 56px; align-items: center; }
.nhar-row2--rev .nhar-media { order: 2; }
.nhar-media img, .nhar-media video { aspect-ratio: 1 / 1; object-fit: cover; border-radius: 4px; box-shadow: 0 2px 4px rgba(20,40,35,.05), 0 14px 40px rgba(20,40,35,.10); }
.nhar-media--wide img, .nhar-media--wide video { aspect-ratio: auto; }
.nhar-media--video video { aspect-ratio: 972 / 1080; max-width: 520px; margin: 0 auto; }
.nhar-copy p { font-size: 16px; line-height: 1.7; color: #4a5653; margin: 0 0 14px; }
.nhar-copy p strong { color: #1f2a28; font-weight: 600; }
.nhar-copy p.nhar-big { font-size: 19px; font-weight: 700; color: #1f2a28; line-height: 1.45; margin-top: 6px; }
.nhar-inq { margin: 0 0 18px; padding: 0 0 0 16px; border: 0; border-left: 3px solid #2b7a6f; font-size: 17px; line-height: 1.55; font-style: italic; color: #1f2a28; }
.nhar-inq span { display: block; margin-top: 6px; font-size: 14px; font-style: normal; font-weight: 600; color: #4a5653; }
.nhar-ticks { list-style: none; margin: 0 0 14px; padding: 0; }
.nhar-ticks li { position: relative; padding-left: 32px; margin: 0 0 10px; font-size: 16px; line-height: 1.5; color: #1f2a28; }
.nhar-ticks li::before { content: "✓"; position: absolute; left: 0; top: 1px; width: 21px; height: 21px; border-radius: 50%; background: #2b7a6f; color: #fff; font-size: 12px; font-weight: 800; line-height: 21px; text-align: center; }

/* recenzije s fotografijami */
.nhar-prevs { display: grid; grid-template-columns: repeat(3, minmax(0, 1fr)); gap: 18px; align-items: start; }
.nhar-prv, .nhar-rv { background: #fff; border: 1px solid #d6e7e2; border-radius: 10px; overflow: hidden; }
.nhar-tint .nhar-prv, .nhar-tint .nhar-rv { background: #fff; }
.nhar-prv__img img { aspect-ratio: 4 / 5; object-fit: cover; }
.nhar-prv__body, .nhar-rv__body { padding: 16px 18px 14px; }
.nhar-rv__img img { aspect-ratio: 1 / 1; object-fit: cover; }

/* fotografije kupcev */
.nhar-ugc { display: grid; grid-template-columns: repeat(6, minmax(0, 1fr)); gap: 10px; }
.nhar-ugc__item { margin: 0; }
.nhar-ugc__item img { aspect-ratio: 3 / 4; object-fit: cover; border-radius: 8px; }

/* usporedba */
.nhar-cmp { width: 100%; border-collapse: collapse; font-size: 15px; background: #fff; border: 1px solid #d6e7e2; border-radius: 10px; overflow: hidden; }
.nhar-cmp th, .nhar-cmp td { padding: 12px 10px; border-bottom: 1px solid #e3efeb; text-align: center; vertical-align: middle; }
.nhar-cmp th:first-child, .nhar-cmp td:first-child { text-align: left; font-weight: 600; color: #1f2a28; }
.nhar-cmp thead th { font-size: 13.5px; font-weight: 700; color: #1f2a28; background: #fff; }
.nhar-cmp thead th img { width: 76px; height: 76px; object-fit: contain; margin: 0 auto 6px; border-radius: 8px; background: #fff; }
.nhar-cmp thead th span { display: block; line-height: 1.3; }
.nhar-cmp .is-ours { background: #e3f1ed; }
.nhar-cmp thead th.is-ours { background: #2b7a6f; color: #fff; }
.nhar-cmp td span { display: inline-block; width: 26px; height: 26px; border-radius: 50%; line-height: 26px; font-weight: 800; font-size: 14px; }
.nhar-cmp td.is-yes span { background: #2e9d5b; color: #fff; }
.nhar-cmp td.is-no span { background: #dfe3e2; color: #1f2a28; }

/* kartice */
.nhar-cards { display: grid; grid-template-columns: repeat(2, minmax(0, 1fr)); gap: 18px; text-align: left; }
.nhar-card { background: #fff; border: 1px solid #d6e7e2; border-radius: 10px; padding: 22px 22px 18px; }
.nhar-card h3 { font-size: 17px; font-weight: 700; margin: 0 0 8px; color: #2b7a6f; }
.nhar-card p { font-size: 14.5px; line-height: 1.6; color: #4a5653; margin: 0; }

/* zvjezdice */
.nhar-stars { display: inline-flex; gap: 3px; margin: 0 0 12px; vertical-align: middle; }
.nhar-stars i { font-style: normal; width: 22px; height: 22px; background: #00b67a; color: #fff; font-size: 15px; line-height: 22px; text-align: center; }
.nhar-stars i.is-off { background: #dcdce6; }

/* recenzije */
.nhar-summary { display: flex; align-items: center; justify-content: center; gap: 40px; margin: 0 0 34px; flex-wrap: wrap; }
.nhar-summary__score { display: flex; flex-direction: column; align-items: center; gap: 6px; }
.nhar-summary__score strong { font-size: 44px; line-height: 1; font-weight: 700; }
.nhar-summary__score .nhar-stars { margin: 0; }
.nhar-summary__score span { font-size: 14px; color: #4a5653; }
.nhar-summary__bars { min-width: 280px; }
.nhar-bar { display: flex; align-items: center; gap: 10px; font-size: 14px; color: #4a5653; margin: 0 0 6px; }
.nhar-bar__lbl { width: 30px; white-space: nowrap; }
.nhar-bar__track { flex: 1 1 auto; height: 9px; background: #d9e6e2; border-radius: 6px; overflow: hidden; min-width: 160px; }
.nhar-bar__track span { display: block; height: 100%; background: #2b7a6f; }
.nhar-bar__n { width: 64px; white-space: nowrap; }
.nhar-revs { columns: 3; column-gap: 18px; }
.nhar-revs .nhar-rv { break-inside: avoid; margin: 0 0 18px; display: inline-block; width: 100%; }
.nhar-rv .nhar-stars, .nhar-prv .nhar-stars { margin-bottom: 10px; }
.nhar-rv .nhar-stars i, .nhar-prv .nhar-stars i { width: 19px; height: 19px; font-size: 13px; line-height: 19px; }
.nhar-rv__txt { font-size: 14.5px; line-height: 1.6; color: #34403d; margin: 0 0 12px; }
.nhar-rv__name { font-size: 13.5px; font-weight: 600; color: #1f2a28; margin: 0; border-top: 1px solid #d6e7e2; padding-top: 12px; }
.nhar-rv__name span { font-weight: 400; color: #2e7d32; }

@media (max-width: 989px) {
  .nhar-prevs { grid-template-columns: repeat(2, minmax(0, 1fr)); }
  .nhar-revs { columns: 2; }
  .nhar-ugc { grid-template-columns: repeat(4, minmax(0, 1fr)); }
  .nhar-row2 { gap: 32px; }
}
@media (max-width: 749px) {
  .nhar-sec { padding: 42px 0; }
  .nhar-wrap { padding: 0 16px; }
  .nhar-prevs { grid-template-columns: 1fr; gap: 14px; }
  .nhar-revs { columns: 1; }
  .nhar-cards { grid-template-columns: 1fr; gap: 14px; }
  .nhar-row2 { grid-template-columns: 1fr; gap: 24px; }
  .nhar-row2--rev .nhar-media { order: 0; }
  .nhar-ugc { grid-template-columns: repeat(3, minmax(0, 1fr)); gap: 6px; }
  .nhar-cmp { font-size: 13px; }
  .nhar-cmp th, .nhar-cmp td { padding: 9px 5px; }
  .nhar-cmp thead th { font-size: 11.5px; }
  .nhar-cmp thead th img { width: 52px; height: 52px; }
}

/* galerija izdelka: sličice največ v 2 vrstah (5 na vrsto), ostale slike so dosegljive z drsenjem glavne slike */
.product_cat-orto-harness .flex-control-thumbs li:nth-child(n+11) { display: none !important; }

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
.woocommerce-product-details__short-description .nhar-tick {
  position: absolute !important; left: 0 !important; top: 1px !important;
  width: 21px; height: 21px; border-radius: 50%;
  background: #2f9e5f !important; color: #fff !important;
  font-size: 12px !important; font-weight: 800 !important; line-height: 21px !important;
  text-align: center !important; display: inline-block !important; }
.woocommerce-product-details__short-description p:first-of-type { font-size: 16px; line-height: 1.55; }
</style>
