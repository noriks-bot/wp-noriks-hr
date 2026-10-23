<?php
/**
 * product-bottom: NORIKS CalmingCollar — umirujuća ovratnica s feromonima za mačke (orto-calmingcollar).
 * Original: gentlepawsupplies.com/products/cat-pheromene-collar — vsebina in vrstni red 1:1 z originalom, oblika po
 * NORIKS stilu (predloga why-petdental.php / why-hands.php), vijolični poudarek po barvi ovratnice (#594aa5):
 *   1) hero "Stop Stress-Driven Peeing and Anxiety in Cats"     -> Manje mokrenja izvan posude (slika ob besedilu)
 *   2) "What cat parents are saying" (8 mnenj s fotografijami)  -> Što kažu vlasnici mačaka
 *   3) "50% of Cat Owners Deal With Litter Box Problems"        -> Problemi s posudom (slika ob besedilu, statistika ublazena)
 *   4) "You've Done Everything Right.." (4 kartice s slikami)   -> Učinili ste sve kako treba…
 *   5) "Don't Blame Your Cat. Help Them" (3 tocke)              -> Ne krivite mačku. Pomozite joj. (slika ob besedilu)
 *   6) "The Only Breakaway Pheromone Collar" (GIF -> mp4)        -> Sigurnosno otpuštanje (video ob besedilu)
 *   7) "Beware of Cheap Imitations with Lavender & Chamomile"   -> Bez lavande i kamilice (slika prevedena ob besedilu)
 *   8) "What Makes GentlePaws Collars Far Superior to Diffusers" + tekoci trak tezav -> NORIKS ovratnica ili difuzor
 *      (slika ob primerjalni tabeli; tekoci trak kot staticni seznam "Pomaže kod")
 *   9) zavihek v nakupni skatli "Instructions"                 -> Kako staviti ovratnicu (4 koraki + prva uporaba)
 *  10) "Don't Just Take Our Word For It!" (6 mnenj)             -> Ne vjerujte nam samo na riječ
 *  11) "The Science Behind the Calm" (3 kartice s slikami)      -> Znanost iza smirenosti
 *  12) "Backed by a 30-day guarantee" (slika z znacko)          -> 30 dana za povrat (znacka prevedena, slika ob besedilu)
 *  13) Vitals "Customer Reviews" (4,86 / 407)                  -> Recenzije kupaca: 1081, zvezdice skalirane na 692, 5 mnenj
 * Izpusceno: glava, avatarji "120,000+ Happy Pet Parents" (stevilka konkurenta), gumbi CTA, Instagram feed, "Have a question?",
 * priporocila, noga z ikonami (Free shipping / Money back), zavihek "Shipping Details".
 * Trditve konkurenta, ki jih ni mogoce preveriti ("Recommended by Veterinarians", "vet-approved", "Proven, Science-Based",
 * "50 % / #1 reason", "over 95 %", "up to 60 % burned off", "Medical-Grade", "The Only", valerijana "na istih receptorjih kot
 * zdravila", omemba Prozaca v mnenju, "no toxic substances") niso prenesene ali so ublazene v splosne opise.
 * FAQ (9) je v reviews.php ($calmingcollar_faq), mnenja v auto_reviews/HR_calmingcollar.php, opis in nega v meta.php.
 * Slike/videi: img/calmingcollar/ (ncc-…).
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$ncc      = get_template_directory_uri() . '/img/calmingcollar/';
$ncc_path = get_template_directory() . '/img/calmingcollar/';
$ncc_img  = function( $file, $alt, $cls = '' ) use ( $ncc, $ncc_path ) {
  if ( ! $file || ! file_exists( $ncc_path . $file ) ) { return ''; }
  return '<img src="' . esc_url( $ncc . $file ) . '" alt="' . esc_attr( $alt ) . '" loading="lazy"' . ( $cls ? ' class="' . esc_attr( $cls ) . '"' : '' ) . '>';
};
$ncc_video = function( $file, $label, $cls = '' ) use ( $ncc, $ncc_path ) {
  if ( ! file_exists( $ncc_path . $file ) ) { return ''; }
  $poster = preg_replace( '/\.mp4$/', '-poster.webp', $file );
  return '<div class="ncc-vid ' . esc_attr( $cls ) . '"><video src="' . esc_url( $ncc . $file ) . '" poster="' . esc_url( $ncc . $poster ) . '"'
    . ' muted autoplay loop playsinline preload="metadata" aria-label="' . esc_attr( $label ) . '"></video></div>';
};
$ncc_stars = function( $n ) {
  $n = max( 0, min( 5, (int) $n ) );
  return '<span class="ncc-stars" aria-label="' . $n . ' od 5 zvjezdica">' . str_repeat( '★', $n ) . '<span class="ncc-stars__off">' . str_repeat( '★', 5 - $n ) . '</span></span>';
};

/* 2) što kažu vlasnici mačaka (8 mnenj s fotografijami; prevedeno, imena lokalizirana, "veterinar je preporučio" ublaženo) */
$ncc_rv_foto = array(
  array( 'ncc-rv-1.webp', 'Ivana J.', 'Pokazalo se da je moja mačka mokrila po kući zbog stresa. Isprobali smo NORIKS umirujuću ovratnicu i već <strong>dva tjedna nema nezgoda</strong> – napokon opet koristi svoju posudu.' ),
  array( 'ncc-rv-2.webp', 'Ema S.', 'Skoro sam odustala jer moja mačka nije prestajala mokriti po kući zbog stresa. <strong>Nakon samo tjedan dana</strong> s umirujućom ovratnicom mokrenje izvan posude je prestalo.' ),
  array( 'ncc-rv-3.webp', 'Marijana K.', 'Ovratnicu mi je preporučila prijateljica i jako mi je drago što sam je poslušala. Moj mačak je mokrio posvuda, a otkad nosi ovratnicu <strong>puno je mirniji</strong> – i moje se mačke napokon slažu!' ),
  array( 'ncc-rv-4.webp', 'Jelena M.', 'Imamo 4 mačke potpuno različitih karaktera koje se često ne slažu. Nakon što smo im stavili ovratnice, primijetila sam <strong>stvarnu promjenu u ponašanju</strong>. Opuštenije su i mirnije, i uvjerena sam da će nam dom ostati puno mirniji.' ),
  array( 'ncc-rv-5.webp', 'Dario M.', 'Moje su mačke stalno siktale, režale i tukle se. Prije sam probao sprejeve i difuzore, ali ništa nije pomoglo. Ova ovratnica napravila je <strong>ogromnu razliku</strong> – sada su puno mirnije, a ja stalno kupujem nove.' ),
  array( 'ncc-rv-6.webp', 'Hana M.', 'Svaki odlazak veterinaru bio je noćna mora – plač, grebanje i stres. S ovratnicom moja mačka <strong>ostaje mirna u transporteru</strong> cijelim putem.' ),
  array( 'ncc-rv-7.webp', 'Lana N.', 'Moja je mačka cijelu noć glasno mijaukala i nije nam dala spavati. Otkad nosi umirujuću ovratnicu, <strong>spava mirno – a i mi</strong>.' ),
  array( 'ncc-rv-8.webp', 'Kristina P.', 'Odličan proizvod. Moj mali mangup Leo <strong>prestao se tući</strong> s drugim mačkama.' ),
);

/* 4) učinili ste sve kako treba */
$ncc_tried = array(
  array( 'ncc-s04-posude.webp', 'Dodatne posude za pijesak', 'Iako to može pomoći u kućanstvima s više mačaka, samo dodavanje posuda neće riješiti označavanje uzrokovano tjeskobom ili stresom.', 'Vlasnici često kupe dodatne posude, a onda otkriju da mačka i dalje mokri izvan njih.' ),
  array( 'ncc-s04-difuzor.webp', 'Difuzori feromona', 'Većina se oslanja na jedan feromon, a mačke doživljavaju različite vrste stresa – pa su rezultati promjenjivi.', 'I difuzor ostaje na jednom mjestu, a vaša mačka ne.' ),
  array( 'ncc-s04-ciscenje.webp', 'Enzimska sredstva za čišćenje', 'Odlična su za uklanjanje mirisa, ali ne rješavaju uzrok ponašanja.', 'Besprijekorno čist dom neće spriječiti mačku pod stresom da ponovno označava.' ),
  array( 'ncc-s04-pijesak.webp', 'Druga vrsta pijeska', 'Lako je okriviti pijesak – no mokrenje izvan posude često je povezano sa stresom ili tjeskobom, a ne s teksturom pijeska.', 'Možete isprobati sve vrste s police i ne vidjeti nikakvu promjenu.' ),
);

/* 8) usporedba ovratnica / difuzor */
$ncc_vs_yes = array(
  array( 'Trostruka umirujuća formula', 'tri umirujuća sastojka djeluju zajedno za dublji i dugotrajniji mir.' ),
  array( '60 dana mira', 'dva puna mjeseca olakšanja u svakom pakiranju (2 ovratnice).' ),
  array( 'Čvrsta izrada', 'dovoljno izdržljiva i za znatiželjne mačke.' ),
  array( 'Ide kamo i mačka', 'djeluje posvuda – u kući, vani i na putu.' ),
  array( 'Bez rizika', 'pravo na povrat u roku od 30 dana.' ),
);
$ncc_vs_no = array(
  array( 'Samo jedan feromon', 'jedan sastojak, ograničen umirujući učinak.' ),
  array( 'Rade na zagrijavanje', 'miris se širi prostorijom, a ne uz samu mačku.' ),
  array( 'Lako se pokvare', 'krhka izrada koja nije stvorena za život s mačkama.' ),
  array( 'Vezani za jednu prostoriju', 'uključeni u jednu utičnicu, a drugdje ne pomažu.' ),
  array( 'Bez sigurnosne mreže', 'ako ne djeluje, problem ostaje vaš.' ),
);
$ncc_chips = array( 'Mokrenje zbog stresa', 'Sukobi među mačkama', 'Noćno mijaukanje', 'Stres na putovanju', 'Stres pri upoznavanju' );

/* 9) upute (zavihek "Instructions") */
$ncc_steps = array(
  array( '01', 'Postavite', 'Ovratnicu stavite oko vrata mačke tako da ostane oko <strong>0,6 cm</strong> prostora.' ),
  array( '02', 'Skratite', 'Odrežite višak duljine, ali ostavite <strong>2,5–5 cm</strong> za kasnije podešavanje.' ),
  array( '03', 'Provjeravajte', 'Kod mačića koji rastu redovito provjeravajte da ovratnica nije pretijesna. Kod svih mačaka <strong>svaki dan provjerite</strong> da dobro i sigurno pristaje.' ),
  array( '04', 'Operite ruke', 'Nakon rukovanja ovratnicom <strong>operite ruke</strong> sapunom i vodom.' ),
);
$ncc_first = array(
  'Ovratnicu labavo stavite oko vrata i nadzirite mačku <strong>10 minuta</strong>.',
  'Ako je mački ugodno, podesite ovratnicu tako da između nje i vrata stanu <strong>dva prsta</strong> (oko 2–3 cm).',
  'Nastavite s nadzorom još <strong>30 minuta</strong>.',
  'Ako mački i dalje nije neugodno, ovratnicu može nositi i bez nadzora.',
);

/* 10) ne vjerujte nam samo na riječ (6 mnenj; omemba zdravil izpuščena) */
$ncc_rv = array(
  array( 'Hvala vam, NORIKS!', 'Ovratnica djeluje divno! A i služba za kupce je odlična!', 'Lorena' ),
  array( 'Ovo je prava čarolija', 'Kao da je netko pritisnuo prekidač kod mog malog Charlieja. Čim sam mu je stavila, odmah je ponovno postao stari on – miran, mazan i drag. Oko 28. ili 29. dana znam da je učinak prestao jer postane plašljiv i počne mokriti po kući. Ove ovratnice spasile su nam dom. Probala sam sve…', 'Elizabeta G.' ),
  array( 'Toplo preporučujem', 'Odlična i brza usluga. Umirujuće ovratnice spasile su naše živce i namještaj. Bila sam skeptična kad sam ih kupila, ali napravile su ogromnu razliku kod našeg tjeskobnog mačka. Potpuno se promijenio i postao mačak kakvog smo priželjkivali.', 'Mihaela L.' ),
  array( 'Odlično za moje 2 mačke', 'Kupio sam umirujuće ovratnice jer mi je bilo dosta da mi mačke mokre po cijeloj kući, i iskreno, nisam se puno nadao. Ali u roku od 3 dana mokrenje je napokon prestalo – ne mogu vjerovati da je uspjelo.', 'Oliver R.' ),
  array( 'Umirujuća ovratnica za 10/10', 'Kupila sam ovratnicu za svoju mačku i djelovala je puno bolje nego što sam očekivala! Selili smo se u drugi grad s dugim vožnjama, a mačka je cijelo vrijeme bila mirna. Pomogla joj je i s pretjeranim lizanjem! 10/10.', 'Leona B.' ),
  array( 'Mačka mi je mokrila po odjeći', 'Moja je mačka mokrila po svakoj odjeći na podu pa sam kupila ovratnicu – i otad više nije. Jako sam zadovoljna i nedavno sam kupila još jednu za drugu mačku.', 'Olga R.' ),
);

/* 11) znanost iza smirenosti (valerijana ublažena) */
$ncc_sci = array(
  array( 'ncc-s11-feromoni.webp', 'Feromoni lica mačke', 'Mačke ih prirodno ispuštaju kad se osjećaju sigurno – tako prostor označavaju kao »dom«. Mi smo ih stavili u ovratnicu.', array( 'Mir na svom teritoriju', 'Manje potrebe za označavanjem', 'Osjećaj sigurnosti' ) ),
  array( 'ncc-s11-majka.webp', 'Umirujući feromoni majke (MAP)', 'Signal kojim mačka majka smiruje mačiće i jača povezanost s njima. Budi dubok, instinktivan osjećaj ugode – i kod odraslih mačaka.', array( 'Dubok mir', 'Jača povezanost', 'Lakša prilagodba novih mačaka' ) ),
  array( 'ncc-s11-valerijana.webp', 'Valerijana', 'Prirodna biljka poznata po umirujućem djelovanju – nježna podrška opuštanju, bez uspavljivanja.', array( 'Ublažava napetost', 'Prirodno opuštanje', 'Podrška dobrom raspoloženju' ) ),
);

/* 13) recenzije kupaca (Vitals 4,86 / 407 -> po NORIKS 1081; razdelitev 91/6/2/0/1 % skalirana na 692) */
$ncc_dist = array(
  array( 5, 91, 629 ),
  array( 4, 6, 42 ),
  array( 3, 2, 14 ),
  array( 2, 0, 0 ),
  array( 1, 1, 7 ),
);
$ncc_rv2 = array(
  array( 'Snježana', 5, 'Naš mačak se nakon selidbe skrivao ispod kreveta i mokrio pokraj posude. Nakon nekoliko dana s ovratnicom opet izlazi, jede normalno i koristi posudu.' ),
  array( 'Petra V.', 5, 'Dvije mačke koje se nisu podnosile sada spavaju na istom kauču. Nisam vjerovala dok nisam vidjela.' ),
  array( 'Marko', 5, 'Ovratnica je lagana, mačak je nakon pola sata potpuno zaboravio na nju. Sigurnosna kopča mi je bila jako važna jer izlazi u dvorište.' ),
  array( 'Anita D.', 4, 'Kod naše mace učinak se vidio nakon otprilike tjedan dana – manje šuljanja po kutovima i manje siktanja na psa. Daje četvorku samo zato što miris prvih dana osjetim i ja.' ),
  array( 'Ružica', 5, 'Vožnja do veterinara bez plača u transporteru – prvi put u tri godine. Naručila sam odmah još jedno pakiranje.' ),
);

$ncc_n = 0; // števec sekcij za izmenična ozadja
$ncc_cls = function() use ( &$ncc_n ) { $ncc_n++; return ( $ncc_n % 2 ) ? ' ncc-tint' : ''; };
?>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap">

<!-- 1) MANJE MOKRENJA IZVAN POSUDE (hero "Stop Stress-Driven Peeing and Anxiety in Cats") — slika ob besedilu -->
<section class="ncc-sec<?php echo $ncc_cls(); ?>">
  <div class="ncc-wrap">
    <div class="ncc-row2">
      <div class="ncc-media"><?php echo $ncc_img( 'ncc-s01-hero.webp', 'NORIKS CalmingCollar – umirujuća ovratnica s feromonima za mačke, pakiranje s 2 ovratnice', 'ncc-img--free ncc-img--dark' ); ?></div>
      <div class="ncc-copy">
        <p class="ncc-kicker">Tisuće zadovoljnih vlasnika mačaka</p>
        <h2 class="ncc-h3">Manje mokrenja izvan posude i tjeskobe – <em>uz pristup koji cilja stres</em></h2>
        <ul class="ncc-ticks">
          <li>Sigurno, prirodno i bez lijekova</li>
          <li>Umirujuća podrška 24 sata dnevno</li>
          <li>Sigurnosno otpuštanje ako ovratnica negdje zapne</li>
        </ul>
        <p class="ncc-big">Pravo na povrat u roku od 30 dana.</p>
      </div>
    </div>
  </div>
</section>

<!-- 2) ŠTO KAŽU VLASNICI MAČAKA ("What cat parents are saying") — 8 mnenj s fotografijami -->
<section class="ncc-sec<?php echo $ncc_cls(); ?>">
  <div class="ncc-wrap">
    <p class="ncc-kicker ncc-c">Iskustva vlasnika</p>
    <h2 class="ncc-h2 ncc-c">Što kažu <em>vlasnici mačaka</em></h2>
    <div class="ncc-photos">
      <?php foreach ( $ncc_rv_foto as $r ) : ?>
      <article class="ncc-card">
        <div class="ncc-card__img"><?php echo $ncc_img( $r[0], 'Mačka s umirujućom ovratnicom NORIKS CalmingCollar – fotografija kupca' ); ?></div>
        <div class="ncc-card__body">
          <?php echo $ncc_stars( 5 ); ?>
          <p class="ncc-card__txt">„<?php echo wp_kses( $r[2], array( 'strong' => array() ) ); ?>”</p>
          <p class="ncc-card__name"><?php echo esc_html( $r[1] ); ?> <span class="ncc-ok">✓ Potvrđena kupnja</span></p>
        </div>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- 3) PROBLEMI S POSUDOM ("50% of Cat Owners Deal With Litter Box Problems") — slika ob besedilu -->
<section class="ncc-sec<?php echo $ncc_cls(); ?>">
  <div class="ncc-wrap">
    <div class="ncc-row2 ncc-row2--rev">
      <div class="ncc-media"><?php echo $ncc_img( 'ncc-s03-macka.webp', 'Uplašeni mačić skriva se ispod namještaja' ); ?></div>
      <div class="ncc-copy">
        <p class="ncc-kicker">Česta muka vlasnika mačaka</p>
        <h2 class="ncc-h3">Mnogi vlasnici bore se s <em>mokrenjem izvan posude</em></h2>
        <p>Mokrenje po kući jedan je od najčešćih problema u ponašanju mačaka – i jedan od čestih razloga zbog kojih mačke ostaju bez doma. Ne agresija. Ne grebanje. <strong>Mokrenje.</strong></p>
        <p>Dobra vijest: često je <strong>povezano sa stresom</strong>, a na ponašanja uzrokovana stresom može se utjecati pravim pristupom – ako reagirate prije nego što obrazac postane trajan.</p>
        <p class="ncc-big">Smirite stres svoje mačke.</p>
      </div>
    </div>
  </div>
</section>

<!-- 4) UČINILI STE SVE KAKO TREBA… ("You've Done Everything Right..") — 4 kartice s slikami -->
<section class="ncc-sec<?php echo $ncc_cls(); ?>">
  <div class="ncc-wrap">
    <p class="ncc-kicker ncc-c">Zvuči poznato?</p>
    <h2 class="ncc-h2 ncc-c">Učinili ste sve kako treba… <em>a mačka i dalje mokri posvuda</em></h2>
    <div class="ncc-tried">
      <?php foreach ( $ncc_tried as $t ) : ?>
      <div class="ncc-tried__card">
        <div class="ncc-tried__img"><?php echo $ncc_img( $t[0], $t[1] ); ?></div>
        <div class="ncc-tried__body">
          <h3><span class="ncc-x" aria-hidden="true">✕</span> <?php echo esc_html( $t[1] ); ?></h3>
          <p><?php echo esc_html( $t[2] ); ?></p>
          <p><?php echo esc_html( $t[3] ); ?></p>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- 5) NE KRIVITE MAČKU. POMOZITE JOJ. ("Don't Blame Your Cat. Help Them") — slika ob besedilu -->
<section class="ncc-sec<?php echo $ncc_cls(); ?>">
  <div class="ncc-wrap">
    <div class="ncc-row2">
      <div class="ncc-media"><?php echo $ncc_img( 'ncc-s05-pomozite.webp', 'Opuštena mačka s umirujućom ovratnicom NORIKS CalmingCollar' ); ?></div>
      <div class="ncc-copy">
        <p class="ncc-kicker">Uzrok je stres</p>
        <h2 class="ncc-h3">Ne krivite mačku. <em>Pomozite joj.</em></h2>
        <p>Vaša mačka ne mokri po kauču da bi vam napakostila. <strong>Stres mijenja njezino ponašanje</strong> – a kad se obrazac jednom ustali, ni čišćenje ni dodatne posude neće ga prekinuti.</p>
        <p>NORIKS CalmingCollar djeluje na tjeskobu koja stoji iza mokrenja, kako biste prestali ribati i počeli rješavati problem.</p>
        <ul class="ncc-ticks">
          <li>Djeluje na stres zbog kojeg mačka mokri izvan posude</li>
          <li>Smiruje tjeskobu koja potiče prskanje, grebanje i označavanje</li>
          <li>Pomaže mački da se osjeća dovoljno sigurno da opet koristi posudu</li>
        </ul>
        <p class="ncc-big">Besplatna dostava za narudžbe iznad 70 € · 30 dana za povrat</p>
      </div>
    </div>
  </div>
</section>

<!-- 6) SIGURNOSNO OTPUŠTANJE ("The Only Breakaway Pheromone Collar") — video ob besedilu -->
<section class="ncc-sec<?php echo $ncc_cls(); ?>">
  <div class="ncc-wrap">
    <div class="ncc-row2 ncc-row2--rev">
      <div class="ncc-media"><?php echo $ncc_video( 'ncc-s06-otpustanje.mp4', 'Aktiviranje sigurnosnog otpuštanja na ovratnici NORIKS CalmingCollar', 'ncc-vid--sq' ); ?></div>
      <div class="ncc-copy">
        <p class="ncc-kicker">Sigurnost na prvom mjestu</p>
        <h2 class="ncc-h3">Ovratnica s feromonima i sigurnosnim otpuštanjem – <em>za sigurniju i mirniju mačku</em></h2>
        <p>Sigurnosno otpuštanje štiti vašu mačku ako ovratnica zapne za namještaj, grane ili druge predmete.</p>
        <p>Prije upotrebe jednostavno <strong>zarežite male označene dijelove</strong> na ovratnici kako biste aktivirali funkciju otpuštanja.</p>
        <p>Tako nastaje kontrolirano slabo mjesto na ovratnici: ako mačka ikada zapne, ovratnica se pod pritiskom <strong>odmah otpusti</strong>.</p>
        <p class="ncc-big">Vaša mačka uživa u umirujućem učinku feromona – bez kompromisa u sigurnosti.</p>
      </div>
    </div>
  </div>
</section>

<!-- 7) BEZ LAVANDE I KAMILICE ("Beware of Cheap Imitations with Lavender & Chamomile") — slika ob besedilu -->
<section class="ncc-sec<?php echo $ncc_cls(); ?>">
  <div class="ncc-wrap">
    <div class="ncc-row2">
      <div class="ncc-media"><?php echo $ncc_img( 'ncc-s07-bez-lavande.webp', 'Druge ovratnice sadrže lavandu i kamilicu, NORIKS CalmingCollar je bez lavande i kamilice', 'ncc-img--free' ); ?></div>
      <div class="ncc-copy">
        <p class="ncc-kicker">⚠️ Oprez s jeftinim imitacijama</p>
        <h2 class="ncc-h3">Bez lavande <em>i bez kamilice</em></h2>
        <p>Mnoge ovratnice s feromonima sadrže lavandu i kamilicu. Zvuče opuštajuće, ali eterična ulja <strong>nisu preporučljiva za mačke</strong> i kod nekih mogu izazvati iritaciju kože ili alergijsku reakciju.</p>
        <p>NORIKS CalmingCollar izrađen je drugačije: <strong>bez lavande, bez kamilice</strong> – samo prirodni sastojci prilagođeni mačkama.</p>
        <p class="ncc-big">Mirna mačka, bez nepotrebnih rizika.</p>
      </div>
    </div>
  </div>
</section>

<!-- 8) NORIKS OVRATNICA ILI DIFUZOR ("What Makes GentlePaws Collars Far Superior to Pheromone Diffusers") + tekoči trak -->
<section class="ncc-sec<?php echo $ncc_cls(); ?>">
  <div class="ncc-wrap">
    <div class="ncc-row2 ncc-row2--rev ncc-row2--top">
      <div class="ncc-media"><?php echo $ncc_img( 'ncc-s08-macka.webp', 'Razigrana mačka s vlasnicom', 'ncc-img--tall' ); ?></div>
      <div class="ncc-copy">
        <p class="ncc-kicker">Usporedba</p>
        <h2 class="ncc-h3">Po čemu je NORIKS ovratnica <em>bolja od difuzora feromona</em></h2>
        <div class="ncc-vs">
          <div class="ncc-vs__col ncc-vs__col--yes">
            <div class="ncc-vs__head"><?php echo $ncc_img( 'ncc-s08-ovratnica.webp', 'NORIKS CalmingCollar' ); ?><span>NORIKS ovratnica</span></div>
            <ul>
              <?php foreach ( $ncc_vs_yes as $v ) : ?>
              <li><span class="ncc-vs__ic" aria-hidden="true">✓</span><span><strong><?php echo esc_html( $v[0] ); ?>:</strong> <?php echo esc_html( $v[1] ); ?></span></li>
              <?php endforeach; ?>
            </ul>
          </div>
          <div class="ncc-vs__col ncc-vs__col--no">
            <div class="ncc-vs__head"><?php echo $ncc_img( 'ncc-s08-difuzor.webp', 'Difuzor feromona' ); ?><span>Difuzori feromona</span></div>
            <ul>
              <?php foreach ( $ncc_vs_no as $v ) : ?>
              <li><span class="ncc-vs__ic" aria-hidden="true">✕</span><span><strong><?php echo esc_html( $v[0] ); ?>:</strong> <?php echo esc_html( $v[1] ); ?></span></li>
              <?php endforeach; ?>
            </ul>
          </div>
        </div>
        <p class="ncc-small">Pravo na povrat u roku od 30 dana.</p>
      </div>
    </div>
    <div class="ncc-chips">
      <span class="ncc-chips__lbl">Pomaže kod:</span>
      <?php foreach ( $ncc_chips as $c ) : ?><span class="ncc-chip"><?php echo esc_html( $c ); ?></span><?php endforeach; ?>
    </div>
  </div>
</section>

<!-- 9) KAKO STAVITI OVRATNICU (zavihek "Instructions") -->
<section class="ncc-sec<?php echo $ncc_cls(); ?>">
  <div class="ncc-wrap">
    <p class="ncc-kicker ncc-c">Upute</p>
    <h2 class="ncc-h2 ncc-c">Kako <em>staviti ovratnicu</em></h2>
    <div class="ncc-cards ncc-cards--4">
      <?php foreach ( $ncc_steps as $s ) : ?>
      <div class="ncc-cardx">
        <span class="ncc-cardx__n"><?php echo esc_html( $s[0] ); ?></span>
        <h3><?php echo esc_html( $s[1] ); ?></h3>
        <p><?php echo wp_kses( $s[2], array( 'strong' => array() ) ); ?></p>
      </div>
      <?php endforeach; ?>
    </div>
    <div class="ncc-first">
      <h3 class="ncc-h4">Ako vaša mačka nikada prije nije nosila ovratnicu:</h3>
      <ol>
        <?php foreach ( $ncc_first as $f ) : ?><li><?php echo wp_kses( $f, array( 'strong' => array() ) ); ?></li><?php endforeach; ?>
      </ol>
    </div>
  </div>
</section>

<!-- 10) NE VJERUJTE NAM SAMO NA RIJEČ ("Don't Just Take Our Word For It!") — 6 mnenj -->
<section class="ncc-sec<?php echo $ncc_cls(); ?>">
  <div class="ncc-wrap">
    <p class="ncc-kicker ncc-c">Poslušajte naše zadovoljne kupce</p>
    <h2 class="ncc-h2 ncc-c">Ne vjerujte nam <em>samo na riječ!</em></h2>
    <div class="ncc-reviews">
      <?php foreach ( $ncc_rv as $r ) : ?>
      <article class="ncc-card">
        <div class="ncc-card__body">
          <?php echo $ncc_stars( 5 ); ?>
          <p class="ncc-card__title"><?php echo esc_html( $r[0] ); ?></p>
          <p class="ncc-card__txt">„<?php echo esc_html( $r[1] ); ?>”</p>
          <p class="ncc-card__name"><?php echo esc_html( $r[2] ); ?> <span class="ncc-ok">✓ Potvrđena kupnja</span></p>
        </div>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- 11) ZNANOST IZA SMIRENOSTI ("The Science Behind the Calm: Our Triple-Pheromone Blend") — 3 kartice s slikami -->
<section class="ncc-sec<?php echo $ncc_cls(); ?>">
  <div class="ncc-wrap">
    <p class="ncc-kicker ncc-c">Trostruka umirujuća mješavina</p>
    <h2 class="ncc-h2 ncc-c">Znanost iza <em>smirenosti</em></h2>
    <div class="ncc-ings">
      <?php foreach ( $ncc_sci as $g ) : ?>
      <div class="ncc-ing">
        <div class="ncc-ing__img"><?php echo $ncc_img( $g[0], $g[1] ); ?></div>
        <div class="ncc-ing__body">
          <h3><?php echo esc_html( $g[1] ); ?></h3>
          <p><?php echo esc_html( $g[2] ); ?></p>
          <ul class="ncc-tags"><?php foreach ( $g[3] as $tg ) : ?><li><?php echo esc_html( $tg ); ?></li><?php endforeach; ?></ul>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- 12) 30 DANA ZA POVRAT ("Backed by a 30-day guarantee") — slika ob besedilu -->
<section class="ncc-sec<?php echo $ncc_cls(); ?>">
  <div class="ncc-wrap">
    <div class="ncc-row2 ncc-row2--rev">
      <div class="ncc-media"><?php echo $ncc_img( 'ncc-s13-jamstvo.webp', 'NORIKS CalmingCollar – 30 dana za povrat', 'ncc-img--free' ); ?></div>
      <div class="ncc-copy">
        <p class="ncc-kicker">Kupujte bez brige</p>
        <h2 class="ncc-h3">Uz <em>30 dana za povrat</em></h2>
        <p>Stavite ovratnicu. Dajte joj vremena. Ako se mokrenje, svađe ili stres ne poboljšaju, imate <strong>pravo na povrat u roku od 30 dana</strong>.</p>
        <p>Za narudžbe iznad 70 € <strong>dostava je besplatna</strong>.</p>
        <p class="ncc-big">Bez rizika – probajte bez brige.</p>
      </div>
    </div>
  </div>
</section>

<!-- 13) RECENZIJE KUPACA (Vitals 4,86 / 407 -> 1081 po NORIKS) — razdelitev zvezdic + mnenja -->
<section class="ncc-sec<?php echo $ncc_cls(); ?>">
  <div class="ncc-wrap">
    <p class="ncc-kicker ncc-c">Recenzije kupaca</p>
    <h2 class="ncc-h2 ncc-c">Recenzije <em>NORIKS CalmingCollar</em></h2>
    <div class="ncc-score">
      <span class="ncc-score__num">4,9 / 5</span>
      <?php echo $ncc_stars( 5 ); ?>
      <span class="ncc-score__txt">Na temelju 1081 recenzije</span>
    </div>
    <ul class="ncc-dist">
      <?php foreach ( $ncc_dist as $d ) : ?>
      <li>
        <span class="ncc-dist__lbl"><?php echo (int) $d[0]; ?> ★</span>
        <span class="ncc-dist__bar"><span style="width:<?php echo (int) $d[1]; ?>%"></span></span>
        <span class="ncc-dist__pct"><?php echo (int) $d[1]; ?> % (<?php echo (int) $d[2]; ?>)</span>
      </li>
      <?php endforeach; ?>
    </ul>
    <div class="ncc-reviews">
      <?php foreach ( $ncc_rv2 as $r ) : ?>
      <article class="ncc-card">
        <div class="ncc-card__body">
          <?php echo $ncc_stars( $r[1] ); ?>
          <p class="ncc-card__txt">„<?php echo esc_html( $r[2] ); ?>”</p>
          <p class="ncc-card__name"><?php echo esc_html( $r[0] ); ?> <span class="ncc-ok">✓ Potvrđena kupnja</span></p>
        </div>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<style>
/* NORIKS stil (predloga why-petdental.php / why-hands.php): oznaka + naslov z ležečim poudarkom, slika ob
   besedilu, izmenjujoča ozadja in strani. Vijolični poudarek po barvi ovratnice (#594aa5). */
.ncc-sec { padding: 60px 0; font-family: 'Poppins', system-ui, -apple-system, 'Segoe UI', Roboto, Arial, sans-serif; color: #1f1b32; background: #fff; }
.ncc-sec * { box-sizing: border-box; }
.ncc-tint { background: #f2f0f9; }
.ncc-wrap { width: 100%; max-width: 1200px; margin: 0 auto; padding: 0 24px; }
.ncc-c { text-align: center; }
.ncc-sec h2, .ncc-sec h3 { font-family: inherit; text-transform: none; letter-spacing: 0; }
.ncc-kicker, .ncc-copy p.ncc-kicker { font-size: 12.5px; line-height: 1.4; font-weight: 700; letter-spacing: .14em; text-transform: uppercase; color: #594aa5; margin: 0 0 10px; }
.ncc-h2 { font-weight: 700; font-size: clamp(25px, 3.1vw, 36px); line-height: 1.2; margin: 0 0 28px; color: #1f1b32; }
.ncc-h2 em, .ncc-h3 em { font-style: italic; color: #594aa5; }
.ncc-h3 { font-weight: 700; font-size: clamp(22px, 2.6vw, 30px); line-height: 1.25; margin: 0 0 16px; color: #1f1b32; }
.ncc-h4 { font-weight: 700; font-size: 18px; line-height: 1.35; margin: 0 0 12px; color: #1f1b32; }
.ncc-sec img { display: block; width: 100%; height: auto; }

/* slika ob besedilu */
.ncc-row2 { display: grid; grid-template-columns: 1fr 1fr; gap: 56px; align-items: center; }
.ncc-row2--top { align-items: start; }
.ncc-row2--rev .ncc-media { order: 2; }
.ncc-media > img { border-radius: 10px; box-shadow: 0 2px 4px rgba(40,30,90,.05), 0 14px 40px rgba(40,30,90,.10); max-width: 520px; margin: 0 auto; aspect-ratio: 1 / 1; object-fit: cover; background: #fff; }
.ncc-media > img.ncc-img--free { aspect-ratio: auto; object-fit: contain; }
.ncc-media > img.ncc-img--dark { background: #000; }
.ncc-media > img.ncc-img--tall { aspect-ratio: 5 / 7; }
.ncc-copy p { font-size: 16px; line-height: 1.7; color: #3e3a52; margin: 0 0 14px; }
.ncc-copy p strong { color: #1f1b32; font-weight: 600; }
.ncc-sec p.ncc-big { font-size: 19px; font-weight: 700; color: #1f1b32; line-height: 1.45; margin-top: 6px; }
.ncc-sec p.ncc-small { font-size: 14px; color: #5d5874; margin: 14px 0 0; }
.ncc-ticks { list-style: none; margin: 4px 0 16px; padding: 0; }
.ncc-ticks li { position: relative; padding-left: 32px; margin: 0 0 10px; font-size: 16px; line-height: 1.55; color: #2d2942; }
.ncc-ticks li::before { content: "✓"; position: absolute; left: 0; top: 1px; width: 22px; height: 22px; border-radius: 50%; background: #594aa5; color: #fff; font-size: 12px; font-weight: 800; line-height: 22px; text-align: center; }

/* videi */
.ncc-vid { position: relative; overflow: hidden; background: #e0dbf5; border-radius: 10px; margin: 0 auto; box-shadow: 0 2px 4px rgba(40,30,90,.05), 0 14px 40px rgba(40,30,90,.10); }
.ncc-vid video { display: block; width: 100%; height: 100%; object-fit: cover; }
.ncc-vid--sq { aspect-ratio: 1 / 1; max-width: 520px; }

/* kartice */
.ncc-card { background: #fff; border: 1px solid #d9d3ef; border-radius: 10px; overflow: hidden; display: flex; flex-direction: column; box-shadow: 0 2px 10px rgba(40,30,90,.05); }
.ncc-sec:not(.ncc-tint) .ncc-card { background: #f7f5fc; }
.ncc-card__img img { aspect-ratio: 4 / 5; object-fit: cover; }
.ncc-card__body { padding: 16px; }
.ncc-card__title { font-size: 15px; font-weight: 700; color: #1f1b32; margin: 8px 0 0; }
.ncc-card__txt { font-size: 14.5px; line-height: 1.6; color: #2d2942; margin: 8px 0 10px; font-style: italic; }
.ncc-card__txt strong { font-weight: 600; color: #1f1b32; }
.ncc-card__name { font-size: 13.5px; font-weight: 600; color: #1f1b32; margin: 0; }
.ncc-photos { display: grid; grid-template-columns: repeat(4, minmax(0, 1fr)); gap: 18px; align-items: start; }

.ncc-tried { display: grid; grid-template-columns: repeat(4, minmax(0, 1fr)); gap: 18px; }
.ncc-tried__card { background: #fff; border: 1px solid #d9d3ef; border-radius: 10px; overflow: hidden; box-shadow: 0 2px 10px rgba(40,30,90,.05); }
.ncc-sec:not(.ncc-tint) .ncc-tried__card { background: #f7f5fc; }
.ncc-tried__img img { aspect-ratio: 3 / 2; object-fit: cover; }
.ncc-tried__body { padding: 16px 18px 18px; }
.ncc-tried__body h3 { font-size: 17px; font-weight: 700; color: #1f1b32; margin: 0 0 8px; line-height: 1.35; }
.ncc-tried__body p { font-size: 14.5px; line-height: 1.6; color: #3e3a52; margin: 0 0 8px; }
.ncc-tried__body p:last-child { margin: 0; font-weight: 600; color: #1f1b32; }
.ncc-x { display: inline-block; width: 22px; height: 22px; border-radius: 50%; background: #c0392b; color: #fff; font-size: 12px; line-height: 22px; text-align: center; vertical-align: 2px; }

/* usporedba */
.ncc-vs { display: grid; grid-template-columns: 1fr 1fr; gap: 14px; margin: 6px 0 0; }
.ncc-vs__col { border-radius: 10px; padding: 16px; border: 1px solid #d9d3ef; background: #fff; }
.ncc-vs__col--yes { border: 2px solid #594aa5; background: #fff; }
.ncc-sec:not(.ncc-tint) .ncc-vs__col--no { background: #f7f5fc; }
.ncc-vs__head { display: flex; align-items: center; gap: 10px; margin: 0 0 12px; font-weight: 700; font-size: 15.5px; color: #1f1b32; }
.ncc-vs__head img { width: 56px !important; height: 56px; object-fit: contain; border-radius: 8px; background: #fff; }
.ncc-vs__col--yes .ncc-vs__head img { background: #000; }
.ncc-vs ul { list-style: none; margin: 0; padding: 0; }
.ncc-vs li { display: flex; gap: 9px; align-items: flex-start; font-size: 14px; line-height: 1.5; color: #3e3a52; margin: 0 0 10px; }
.ncc-vs li strong { color: #1f1b32; font-weight: 600; }
.ncc-vs__ic { flex: 0 0 20px; height: 20px; border-radius: 50%; color: #fff; font-size: 11px; font-weight: 800; line-height: 20px; text-align: center; margin-top: 1px; }
.ncc-vs__col--yes .ncc-vs__ic { background: #2f9e5f; }
.ncc-vs__col--no .ncc-vs__ic { background: #8c879e; }
.ncc-chips { display: flex; flex-wrap: wrap; justify-content: center; align-items: center; gap: 10px; margin: 40px 0 0; }
.ncc-chips__lbl { font-weight: 700; font-size: 14px; color: #594aa5; text-transform: uppercase; letter-spacing: .1em; }
.ncc-chip { background: #e0dbf5; color: #2d2942; border-radius: 999px; padding: 7px 16px; font-size: 14.5px; font-weight: 600; }

/* upute */
.ncc-cards { display: grid; gap: 18px; }
.ncc-cards--4 { grid-template-columns: repeat(4, minmax(0, 1fr)); }
.ncc-cardx { background: #fff; border: 1px solid #d9d3ef; border-radius: 10px; padding: 22px 20px; box-shadow: 0 2px 10px rgba(40,30,90,.05); }
.ncc-sec:not(.ncc-tint) .ncc-cardx { background: #f7f5fc; }
.ncc-cardx__n { display: inline-block; width: 34px; height: 34px; border-radius: 50%; background: #594aa5; color: #fff; font-weight: 700; font-size: 13px; line-height: 34px; text-align: center; margin: 0 0 12px; }
.ncc-cardx h3 { font-size: 17px; font-weight: 700; line-height: 1.35; color: #1f1b32; margin: 0 0 8px; }
.ncc-cardx p { font-size: 15px; line-height: 1.65; color: #3e3a52; margin: 0; }
.ncc-cardx p strong { color: #1f1b32; font-weight: 600; }
.ncc-first { max-width: 760px; margin: 30px auto 0; background: #fff; border: 1px solid #d9d3ef; border-left: 4px solid #594aa5; border-radius: 10px; padding: 20px 24px; }
.ncc-first ol { margin: 0; padding-left: 20px; }
.ncc-first li { font-size: 15px; line-height: 1.65; color: #3e3a52; margin: 0 0 6px; }
.ncc-first li strong { color: #1f1b32; font-weight: 600; }

/* znanost */
.ncc-ings { display: grid; grid-template-columns: repeat(3, minmax(0, 1fr)); gap: 18px; }
.ncc-ing { background: #fff; border: 1px solid #d9d3ef; border-radius: 10px; overflow: hidden; box-shadow: 0 2px 10px rgba(40,30,90,.05); }
.ncc-sec:not(.ncc-tint) .ncc-ing { background: #f7f5fc; }
.ncc-ing__img img { aspect-ratio: 16 / 11; object-fit: cover; }
.ncc-ing__body { padding: 16px 18px 18px; }
.ncc-ing h3 { font-size: 17px; font-weight: 700; color: #594aa5; margin: 0 0 6px; line-height: 1.35; }
.ncc-ing p { font-size: 14.5px; line-height: 1.6; color: #3e3a52; margin: 0 0 12px; }
.ncc-tags { list-style: none; margin: 0; padding: 0; display: flex; flex-wrap: wrap; gap: 6px; }
.ncc-tags li { background: #e0dbf5; color: #2d2942; border-radius: 999px; padding: 4px 11px; font-size: 12.5px; font-weight: 600; }

/* ocjene */
.ncc-stars { color: #f2a516; letter-spacing: 1px; font-size: 15px; }
.ncc-stars__off { color: #dcd8e8; }
.ncc-ok { color: #2f9e5f; font-weight: 600; font-size: 12px; margin-left: 4px; font-style: normal; }
.ncc-score { display: flex; justify-content: center; align-items: center; gap: 12px; margin: -10px 0 18px; flex-wrap: wrap; }
.ncc-score__num { font-size: 26px; font-weight: 700; color: #1f1b32; }
.ncc-score .ncc-stars { font-size: 20px; }
.ncc-score__txt { font-size: 14.5px; color: #5d5874; }
.ncc-dist { list-style: none; margin: 0 auto 32px; padding: 0; max-width: 460px; }
.ncc-dist li { display: grid; grid-template-columns: 38px 1fr 92px; gap: 10px; align-items: center; margin: 0 0 8px; font-size: 14px; color: #2d2942; }
.ncc-dist__lbl { font-weight: 600; white-space: nowrap; }
.ncc-dist__bar { display: block; height: 10px; border-radius: 6px; background: #e0dbf5; overflow: hidden; }
.ncc-dist__bar span { display: block; height: 100%; background: #594aa5; border-radius: 6px; }
.ncc-dist__pct { color: #5d5874; white-space: nowrap; }
.ncc-reviews { columns: 3; column-gap: 18px; }
.ncc-reviews > .ncc-card { break-inside: avoid; margin-bottom: 18px; }

@media (max-width: 989px) {
  .ncc-row2 { gap: 32px; }
  .ncc-reviews { columns: 2; }
  .ncc-photos, .ncc-tried, .ncc-cards--4 { grid-template-columns: 1fr 1fr; }
  .ncc-ings { grid-template-columns: 1fr 1fr; }
}
@media (max-width: 749px) {
  .ncc-sec { padding: 42px 0; }
  .ncc-wrap { padding: 0 16px; }
  .ncc-row2 { grid-template-columns: 1fr; gap: 24px; }
  .ncc-row2--rev .ncc-media { order: 0; }
  .ncc-media > img.ncc-img--tall { aspect-ratio: 1 / 1; }
  .ncc-photos { gap: 12px; }
  .ncc-card__body { padding: 12px; }
  .ncc-reviews { column-gap: 12px; }
  .ncc-reviews > .ncc-card { margin-bottom: 12px; }
}
@media (max-width: 520px) {
  .ncc-reviews { columns: 1; }
  .ncc-tried, .ncc-cards--4, .ncc-ings, .ncc-vs { grid-template-columns: 1fr; }
}

/* galerija izdelka: sličice največ v 2 vrstah (5 na vrsto), ostale slike so dosegljive z drsenjem glavne slike */
.product_cat-orto-calmingcollar .flex-control-thumbs li:nth-child(n+11) { display: none !important; }

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
.woocommerce-product-details__short-description .ncc-tick {
  position: absolute !important; left: 0 !important; top: 1px !important;
  width: 21px; height: 21px; border-radius: 50%;
  background: #2f9e5f !important; color: #fff !important;
  font-size: 12px !important; font-weight: 800 !important; line-height: 21px !important;
  text-align: center !important; display: inline-block !important; }
.woocommerce-product-details__short-description p:first-of-type { font-size: 16px; line-height: 1.55; }
</style>
