<?php
/**
 * product-bottom: NORIKS Blanket — kompresijska vreca za smirenje i bolji san (orto-blanket).
 * Original: nestishop.com/products/nesti-pod — vsebina 1:1 z originalom (isti vrstni red, ista besedila),
 * oblika po NORIKS stilu (vzor why-hands.php): slika/video vedno ob besedilu, strani in ozadja se izmenjujejo,
 * brez drsnikov, pasic in animacij.
 *   1) Kako koristiti (video s hrvaskimi podnapisi desno + CTA)
 *   2) Detalji proizvoda + Kako radi (zavihka iz nakupne skatle)
 *   3) Dostava i povrat (zavihka iz nakupne skatle — po NORIKS pogojih: 30 dana za povrat, besplatna dostava iznad 70 €)
 *   4) Zasto je NORIKS najbolji izbor? (slika levo + primerjava NORIKS : utezni pokrivaci)
 *   5) Koristite ga za... (3 vrstice slika/besedilo: san, opustanje, putovanja)
 *   6) Znanost iza NORIKS-a (slika levo + 4 tocke)
 *   7) Prednosti terapije dubokim pritiskom (DTP) — 3 tocke z ikonami
 *   8) Recenzije kupaca (mreza mnenj z originala, s fotografijami)
 * Sekcija »Iskustva nase zajednice« (4 kartice mnenj) je na Dejanovo zelo odstranjena 22.10.
 * FAQ originala je v reviews.php ($blanket_faq), mnenja tudi v auto_reviews/HR_blanket.php.
 * Promo pasica originala (akcija ADHD meseca) je po NORIKS stilu izpuscena.
 * Slike: img/blanket/ (logotip konkurenta odstranjen, napisi prevedeni v hrvascino).
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$nbl      = get_template_directory_uri() . '/img/blanket/';
$nbl_path = get_template_directory() . '/img/blanket/';
$nbl_img  = function( $file, $alt, $cls = '' ) use ( $nbl, $nbl_path ) {
  if ( ! file_exists( $nbl_path . $file ) ) { return ''; }
  return '<img src="' . esc_url( $nbl . $file ) . '" alt="' . esc_attr( $alt ) . '"' . ( $cls ? ' class="' . esc_attr( $cls ) . '"' : '' ) . ' loading="lazy">';
};

/* 1) Iskustva nase zajednice — 1:1 z originala. */
$nbl_community = array(
  array( 'naslov' => 'Puno mirniji kad ga nosi',
    'tekst' => 'Oduševila me koliko je mekana. Nikad nismo kupovali kompresijske proizvode jer su svi od grozne sintetike. Charlieju je bilo toliko udobno da se mogao protezati i lako kretati. U njoj je djelovao puno mirnije.',
    'ime'   => 'Stacey P. i Charlie' ),
  array( 'naslov' => 'Odlična, mekana i ugodna',
    'tekst' => 'Daje kompresiju i senzorni podražaj, a nije pretijesna, pretopla ni preteška. Super mekan materijal koji je istodobno ugodan i hladan. Sviđa mi se što stopala mogu biti unutra ili vani, a to što se pere u perilici veliki je plus!',
    'ime'   => 'Nicole i Vinnie' ),
  array( 'naslov' => 'Utežni pokrivači nisu pomogli',
    'tekst' => 'Avery ima autizam s izraženim senzornim potrebama i ADHD. Teško se regulira tijekom dana i smiri navečer, obično ne zaspi prije 1–3 ujutro. Utežni pokrivači nisu joj pomogli, previše su je sputavali. Avery je zavoljela NORIKS! Nježna kompresija pružila joj je utjehu bez preopterećenja.',
    'ime'   => 'Nicola i Avery' ),
  array( 'naslov' => 'Jako pomaže u regulaciji',
    'tekst' => 'Znam da će napraviti veliku razliku, pogotovo zbog materijala, a to što ima slobodne ruke za tablet je odlično. Prije smo kupili drugu vrstu, ali u njoj nije mogla osloboditi ruke, materijal nije bio ugodan i nije joj odgovarala. Ovo će joj puno pomoći u regulaciji.',
    'ime'   => 'Rebecca N. i Eve' ),
);

/* 2) Detalji proizvoda — velicine iz noriks_blanket_sizes() (iste kot v tablici velicin). */
$nbl_sizes_txt = '';
if ( function_exists( 'noriks_blanket_sizes' ) ) {
  foreach ( noriks_blanket_sizes() as $r ) {
    $nbl_sizes_txt .= '<li><strong>' . esc_html( $r[0] ) . ':</strong> duljina ' . esc_html( $r[1] ) . ', širina ' . esc_html( $r[2] ) . '. Visina dijela za stopala ' . esc_html( $r[3] ) . '. Širina kapuljače ' . esc_html( $r[4] ) . '.</li>';
  }
}
$nbl_how = array(
  'Mekana rastezljiva cijev u koju se jednostavno uvučete. Bez zatvarača, kopči, utega i kompliciranog zakopčavanja.',
  'Ništa tvrdo ili grebljivo što bi moglo štipati ili zapinjati. Sigurno za nemirne spavače i ruke koje se vrpolje.',
  'Otvoreno dno. Stopala mogu ostati pokrivena ili izviriti van.',
  'Kapuljača na vrhu po želji. Navucite je za veću pokrivenost ili je ostavite spuštenu.',
  'Ruke mogu ostati unutra za kompresiju cijelog tijela ili izaći iznad ramena ako želite slobodne ruke.',
  'Tkanina se rasteže s vama. I dalje možete sjesti, ustati i hodati bez osjećaja da ste zarobljeni.',
);

/* 4) Primerjava. */
$nbl_cmp = array(
  array( 'Nježna, ravnomjerna kompresija bez težine',            'Mogu sputavati i biti teški' ),
  array( 'Prozračan i regulira temperaturu',                      'Često zadržavaju toplinu i uzrokuju pregrijavanje' ),
  array( 'Osmišljen posebno za djecu sa senzornom osjetljivošću', 'Generički dizajn, nije prilagođen djeci' ),
  array( 'Lagan i jednostavan za nošenje na put',                 'Glomazni i teško ih je spakirati' ),
  array( 'Pere se u perilici i brzo se suši',                     'Često preveliki ili preteški za često pranje' ),
);

/* 5) Koristite ga za... — slika in besedilo, strani se izmenjujejo. */
$nbl_uses = array(
  array( 'slika' => 'bl-uc-1-san.webp', 'h2' => 'Bolji <em>san</em>',
    'tekst' => 'NORIKS Blanket pomaže djetetu da brže zaspi i dulje spava jer nježna kompresija cijelog tijela daje osjećaj sigurnosti i smirenosti.',
    'big'   => 'Jednostavan način bez lijekova da odlazak na spavanje bude manje stresan — i za dijete i za vas.' ),
  array( 'slika' => 'bl-uc-2-opustanje.webp', 'h2' => '<em>Opuštanje</em>',
    'tekst' => 'Bilo da se smiruje nakon škole ili radi senzornu pauzu, NORIKS Blanket djetetu daje ugodan kutak za opuštanje.',
    'big'   => 'Kao umirujući zagrljaj u koji se može uvući kad god se treba prizemljiti.' ),
  array( 'slika' => 'bl-uc-3-putovanja.webp', 'h2' => '<em>Putovanja</em>',
    'tekst' => 'Od vožnje autom i spavanja kod prijatelja do dugih letova — NORIKS Blanket ide svugdje gdje treba udobnosti. Lagan je i lako se spakira, a pruža poznati mir i dosljednost kad se rutina promijeni.',
    'big'   => 'Posebno korisno za senzorno osjetljivu djecu u pokretu.' ),
);

/* 6) Znanost */
$nbl_science = array(
  array( 'Kompresijska terapija od 360°', 'Nježnom kompresijom obavija cijelo tijelo sa svih strana.' ),
  array( 'Šalje tijelu signal da se može opustiti', 'Nježna kompresija oponaša osjećaj zagrljaja — tijelo ga prepozna kao sigurnost.' ),
  array( 'Stvara stanje smirenosti', 'Osjećaj obuhvaćenosti opušta mišiće i tijelo se lakše spusti u mirovanje.' ),
  array( 'Za miran san koji obnavlja', 'Tjeskoba i stres prelaze u umor, pa brže zaspite i dulje spavate.' ),
);

/* 8) DTP */
$nbl_dtp = array(
  array( 'ikona' => 'bl-dtp-1.webp', 'naslov' => 'Daje osjećaj sigurnosti i pomaže pri smirivanju',
    'tekst' => 'Ravnomjeran, nježan pritisak po cijelom tijelu daje osjećaj sigurnosti i pomaže da se lakše smirite. Mnogi ga koriste navečer, kad je teško doći do mira.' ),
  array( 'ikona' => 'bl-dtp-2.webp', 'naslov' => 'Brže uspavljivanje i kvalitetniji san',
    'tekst' => 'Istraživanja pokazuju da DTP pomaže djeci da brže zaspu i dublje spavaju. Nježan pritisak signalizira sigurnost, pa se navečer lakše opuste.' ),
  array( 'ikona' => 'bl-dtp-3.webp', 'naslov' => 'Podupire senzornu regulaciju i smanjuje nemir',
    'tekst' => 'DTP daje stalan podražaj koji djeci pomaže da ostanu mirna i usredotočena. Odlično smanjuje vrpoljenje i olakšava prijelaz na spavanje.' ),
);

/* 9) Recenzije kupaca — 1:1 z originala (test vnos izpuscen), fotografije kupcev brez logotipa. */
$nbl_reviews = array(
  array( 'ime' => 'Jessica Thomas', 'ocjena' => 5, 'foto' => '',
    'tekst' => 'Moj petogodišnjak ima autizam i teško se regulira, pogotovo nakon škole i pred spavanje. NORIKS je promijenio igru. Apsolutno ga obožava i odmah postane mirniji i spokojniji. Toplo preporučujem!!' ),
  array( 'ime' => 'Charlotte', 'ocjena' => 5, 'foto' => 'bl-rv-1.webp',
    'tekst' => 'San je uvijek bio velik problem za moju kćer s autizmom. NORIKS joj je pomogao da se regulira, smiri prije spavanja i dobije duboku kompresiju koju treba i za kojom žudi. Nosi ga pri odlasku na spavanje i ponovno ga obuče čim dođe iz škole. Ne mogu biti zadovoljnija proizvodom.' ),
  array( 'ime' => 'Rebecca', 'ocjena' => 5, 'foto' => 'bl-rv-2.webp',
    'tekst' => 'Potpuno sam oduševljena! Vidjela sam trenutačnu promjenu i smirenost kod kćeri čim ga je obukla — fantastično pomagalo za svako dijete, s posebnim potrebama ili bez njih! Kći je potpuno mirna i osjeća se sigurno, ima kromosomski poremećaj i u procesu je dijagnostike autizma, pa hvala, NORIKS ✨' ),
  array( 'ime' => 'Jodie', 'ocjena' => 5, 'foto' => 'bl-rv-3.webp',
    'tekst' => 'Kći se teško smiruje, često je hiperaktivna i nemirna te ima senzorne teškoće. Otkad koristimo NORIKS, pomaže joj da bolje osjeća svoje tijelo, a uz to je smiruje i regulira. Koristi ga noću, ali i tijekom dana. Najljepše je što mi je sama rekla da ga voli i da joj pomaže. 😊' ),
  array( 'ime' => 'Mel T.', 'ocjena' => 5, 'foto' => '',
    'tekst' => 'Sinoć je prvi put u 5 godina prespavala cijelu noć u njemu. Došla je iz škole, presvukla se i odmah ga ponovno obukla, a sad spava u njemu. Ovo mijenja sve. Stvarno imam osjećaj da nam je promijenio život. Nevjerojatno.' ),
  array( 'ime' => 'Jacob', 'ocjena' => 5, 'foto' => '',
    'tekst' => 'Jacob kaže... Obožavam ga, jako je mekan i plav, to mi je najdraža boja.' ),
  array( 'ime' => 'Celeste', 'ocjena' => 5, 'foto' => '',
    'tekst' => 'NORIKS koristim u svojoj praksi terapije pokretom s mnogo djece kako bi kroz nježan pritisak pronašla regulaciju. Odličan je za taktilnu osjetljivost, a sviđa mi se koliko je prilagodljiv — pokriva od glave do pete.' ),
  array( 'ime' => 'Kelly McKay', 'ocjena' => 5, 'foto' => '',
    'tekst' => 'Vjerojatno se stalno pitate trebate li ga kupiti. Isplati li se? Hoće li pomoći? Imam ADHD i poremećaj vezivnog tkiva. Ovo je prvi put da se mogu odmoriti, a da osjećam da mi je tijelo poduprto i sigurno. Daje mi dovoljno kompresije da mi tijelo drži na okupu. Volim taj nježan stisak, a ako želim jači, dodam utežni pokrivač. Toplo preporučujem!' ),
  array( 'ime' => 'Susie Y', 'ocjena' => 5, 'foto' => 'bl-rv-4.webp',
    'tekst' => 'Moj sin imao je teških nekoliko godina prije dijagnoze ADHD-a i isprobavanja lijekova. Isprobali smo mnogo pomagala i utežnih pokrivača za senzorno preopterećenje, a NORIKS sam vidjela prije nekog vremena i stalno mi se vraćao oglas. Prije nekoliko tjedana odlučila sam ga naručiti — prvi dan doslovno mi je trebalo dva dana da ga skinem s njega! Osjeća se sigurno i čak spava u njemu. Kaže da mu je svilenkast na koži. I jako se dobro pere. Ozbiljno razmišljam da naručim jedan i za sebe! Toplo preporučujem.' ),
  array( 'ime' => 'C evans', 'ocjena' => 5, 'foto' => '',
    'tekst' => 'Kupila sam dva za unuke od 7 i 8 godina. Zovu ih svojim maženjem i zagrljajem. Obožavaju ih i traže ih nakon škole i pred spavanje. Ne mogu reći da sam primijetila da brže zaspu, ali stvarno ih vole. Još ih nismo imali prilike oprati.' ),
  array( 'ime' => 'Susan', 'ocjena' => 5, 'foto' => '',
    'tekst' => 'Od 2 do 3 sata napadaja bijesa pred spavanje došli smo do toga da sin sam zaspi za otprilike 5 minuta. Prošlo je 5 noći i razlika je ogromna, kao da mi je pao kamen sa srca. Naručit ću još da imamo rezervne.' ),
  array( 'ime' => 'Shannon Whitlock', 'ocjena' => 4, 'foto' => '',
    'tekst' => 'Nedavno sam kupila dva, jedan za desetogodišnjakinju i jedan za šestogodišnjakinju. Starijoj odlično pomaže, a mlađoj ponekad nije lako. Ne voli kad se nabere ili kad joj kapuljača previše padne preko lica. Puno se vrti u krevetu pa to zna stvarati probleme. Ali kad se napokon smiri, djeluje odlično!' ),
  array( 'ime' => 'Michelle Fernandes', 'ocjena' => 5, 'foto' => '',
    'tekst' => 'Moja četrnaestogodišnja kći loše spava od svoje 11. godine. Ne može spavati s običnom navlakom na pokrivaču — skida je jer se toliko vrti dok pokušava zaspati, pa se nervira. Bila je presretna kad sam joj pokazala NORIKS. „TO MI TREBA U ŽIVOTU!” rekla je. Naručila sam veću dječju veličinu jer je sitna i stoji joj savršeno. SPAVALA JE 13 SATI U KOMADU!!! Puno vam hvala. Promijenio nam je život 🩷🩷🩷' ),
  array( 'ime' => 'Sue', 'ocjena' => 5, 'foto' => 'bl-rv-5.webp',
    'tekst' => 'Vau, kakva razlika. Naš unuk ima ADHD i apsolutno obožava svoj NORIKS. Obukao ga je prvu noć, smjestio se u njega i mirno spavao. Ne možemo biti zadovoljniji.' ),
);
?>

<!-- 1) KAKO KORISTITI — video desno -->
<section class="nbl-sec nbl-tint">
  <div class="nbl-wrap nbl-row2 nbl-row2--rev">
    <div class="nbl-copy">
      <p class="nbl-kicker">Kako koristiti</p>
      <h2 class="nbl-h2">Uvucite se <em>i opustite</em></h2>
      <p>Kad ste u krevetu, uvucite se u NORIKS Blanket tako da gornji rub bude u udobnom položaju. Preporučujemo da ga namjestite blizu gornjeg dijela prsa i zatim ga povučete preko ramena.</p>
      <p class="nbl-big">Tkanina će se rastegnuti i stisnuti te pružiti umirujući pritisak oko tijela.</p>
      <a class="nbl-cta" href="#bundle-selector">Isprobajte danas — 30 dana za povrat</a>
    </div>
    <div class="nbl-media nbl-media--video">
      <video src="<?php echo esc_url( $nbl . 'bl-kako-koristiti.mp4' ); ?>" poster="<?php echo esc_url( $nbl . 'bl-video-poster.webp' ); ?>" preload="metadata" muted loop playsinline autoplay disablepictureinpicture aria-label="Kako koristiti NORIKS Blanket"></video>
    </div>
  </div>
</section>

<!-- 2) KAKO RADI — slika lijevo -->
<section class="nbl-sec">
  <div class="nbl-wrap nbl-row2">
    <div class="nbl-media"><?php echo $nbl_img( 'bl-04-dijelovi-hr.webp', 'Dijelovi NORIKS Blanket vreće — kapuljača, otvoreno dno i otvori za ruke' ); ?></div>
    <div class="nbl-copy">
      <p class="nbl-kicker">Kako radi</p>
      <h2 class="nbl-h2">Jednostavno se <em>uvučete</em></h2>
      <ul class="nbl-check">
        <?php foreach ( $nbl_how as $it ) : ?><li><?php echo esc_html( $it ); ?></li><?php endforeach; ?>
      </ul>
      <p class="nbl-big">Nježna kompresija sa svih strana. Nije utežni pokrivač — lagana je i lako se u njoj krećete.</p>
    </div>
  </div>
</section>

<!-- 3) DETALJI PROIZVODA — specifikacije v treh stolpcih -->
<section class="nbl-sec nbl-tint">
  <div class="nbl-wrap">
    <p class="nbl-kicker nbl-kicker--c">Detalji proizvoda</p>
    <h2 class="nbl-h2 nbl-h2--c">Sve što trebate <em>znati prije narudžbe</em></h2>
    <div class="nbl-specs">
      <div class="nbl-spec">
        <h3>Materijali</h3>
        <p>95 % poliester, 5 % elastan. Mekano, prozračno i rastezljivo.</p>
        <h3>Pranje</h3>
        <p>Strojno pranje na hladnom, nježni program. Sušenje na zraku. Kompresija se zadržava i nakon pranja.</p>
      </div>
      <div class="nbl-spec">
        <h3>Veličine i dimenzije</h3>
        <p class="nbl-spec__note">Nenošena, položena ravno:</p>
        <ul class="nbl-sizes"><?php echo wp_kses_post( $nbl_sizes_txt ); ?></ul>
      </div>
      <div class="nbl-spec">
        <h3>Odabir veličine</h3>
        <p>Veličinu birajte prema kompresiji, a ne prema duljini. Za čvršći zagrljaj uzmite jednu veličinu manje.</p>
        <h3>Dostupne boje</h3>
        <p>Plava, siva, ružičasta, ljubičasta.</p>
      </div>
    </div>
  </div>
</section>

<!-- 4) DOSTAVA I POVRAT (po NORIKS pogojih) -->
<section class="nbl-sec">
  <div class="nbl-wrap nbl-wrap--narrow nbl-copy">
    <p class="nbl-kicker nbl-kicker--c">Dostava i povrat</p>
    <h2 class="nbl-h2 nbl-h2--c">Vrijeme da ga isprobate <em>kako treba</em></h2>
    <p>Kad smo razvijali NORIKS Blanket, cilj nam nije bio napraviti još jedan proizvod. Htjeli smo napraviti pomagalo koje ljudima zaista pomaže da se osjećaju mirnije, prizemljenije i da bolje upravljaju svojim osjetilnim svijetom.</p>
    <p>No znamo i da je svaki živčani sustav drukčiji. Neki osjete učinak odmah. Drugima treba nekoliko prilagodbi da pronađu svoju senzornu ravnotežu — i to je sasvim normalno.</p>
    <ul class="nbl-check nbl-check--c">
      <li><strong>Besplatna dostava za narudžbe iznad 70 €</strong> — broj za praćenje dobit ćete čim narudžba bude poslana.</li>
      <li><strong>Pravo na povrat u roku od 30 dana</strong> od dana dostave.</li>
      <li><strong>Zamjena veličine</strong> — ne pristaje baš najbolje? Zamjena ovisi o zalihama, a proizvod mora biti nenošen i u originalnom stanju.</li>
    </ul>
    <p class="nbl-big nbl-big--c">30 dana za povrat — da odlučite odgovara li vam NORIKS Blanket.</p>
  </div>
</section>

<!-- 5) ZAŠTO JE NORIKS NAJBOLJI IZBOR? — slika lijevo -->
<section class="nbl-sec nbl-tint">
  <div class="nbl-wrap nbl-row2">
    <div class="nbl-media"><?php echo $nbl_img( 'bl-cmp-banner.webp', 'Djevojčica u ružičastoj NORIKS Blanket vreći' ); ?></div>
    <div class="nbl-copy">
      <p class="nbl-kicker">Usporedba</p>
      <h2 class="nbl-h2">Zašto je NORIKS <em>najbolji izbor?</em></h2>
      <div class="nbl-cmp">
        <table class="nbl-cmp__table">
          <thead>
            <tr>
              <th class="nbl-cmp__us"><?php echo $nbl_img( 'bl-cmp-noriks.webp', 'NORIKS Blanket' ); ?>NORIKS</th>
              <th class="nbl-cmp__them"><?php echo $nbl_img( 'bl-cmp-utezni.webp', 'Utežni pokrivač' ); ?>Utežni pokrivači</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ( $nbl_cmp as $row ) : ?>
            <tr><td><span class="nbl-y">✓</span><?php echo esc_html( $row[0] ); ?></td><td><span class="nbl-n">✕</span><?php echo esc_html( $row[1] ); ?></td></tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</section>

<!-- 6) KORISTITE GA ZA... — tri vrstice, strani se izmenjujejo (desno, levo, desno) -->
<?php foreach ( $nbl_uses as $i => $u ) : $nbl_rev = ( 0 === $i % 2 ); ?>
<section class="nbl-sec<?php echo $nbl_rev ? ' nbl-tint' : ''; ?>">
  <div class="nbl-wrap nbl-row2<?php echo $nbl_rev ? ' nbl-row2--rev' : ''; ?>">
    <?php if ( ! $nbl_rev ) : ?><div class="nbl-media"><?php echo $nbl_img( $u['slika'], wp_strip_all_tags( $u['h2'] ) . ' — NORIKS Blanket' ); ?></div><?php endif; ?>
    <div class="nbl-copy">
      <p class="nbl-kicker">Koristite ga za...</p>
      <h2 class="nbl-h2"><?php echo wp_kses( $u['h2'], array( 'em' => array() ) ); ?></h2>
      <p><?php echo esc_html( $u['tekst'] ); ?></p>
      <p class="nbl-big"><?php echo esc_html( $u['big'] ); ?></p>
    </div>
    <?php if ( $nbl_rev ) : ?><div class="nbl-media"><?php echo $nbl_img( $u['slika'], wp_strip_all_tags( $u['h2'] ) . ' — NORIKS Blanket' ); ?></div><?php endif; ?>
  </div>
</section>
<?php endforeach; ?>

<!-- 7) ZNANOST IZA NORIKS-A — slika lijevo -->
<section class="nbl-sec">
  <div class="nbl-wrap nbl-row2">
    <div class="nbl-media"><?php echo $nbl_img( 'bl-04-dijelovi-hr.webp', 'Dijelovi NORIKS Blanket vreće: fleksibilna kapuljača, ultramekana tkanina, pokrov za stopala po želji' ); ?></div>
    <div class="nbl-copy">
      <p class="nbl-kicker">Znanost</p>
      <h2 class="nbl-h2">Znanost iza <em>NORIKS-a</em></h2>
      <?php foreach ( $nbl_science as $s ) : ?>
      <p><strong><?php echo esc_html( $s[0] ); ?></strong><br><?php echo esc_html( $s[1] ); ?></p>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- 8) PREDNOSTI TERAPIJE DUBOKIM PRITISKOM (DTP) -->
<section class="nbl-sec nbl-tint">
  <div class="nbl-wrap">
    <p class="nbl-kicker nbl-kicker--c">Terapija dubokim pritiskom</p>
    <h2 class="nbl-h2 nbl-h2--c">Znanstveno potvrđene prednosti <em>terapije dubokim pritiskom (DTP)</em></h2>
    <div class="nbl-dtp">
      <?php foreach ( $nbl_dtp as $d ) : ?>
      <div class="nbl-dtp__item">
        <?php echo $nbl_img( $d['ikona'], '', 'nbl-dtp__icon' ); ?>
        <h3><?php echo esc_html( $d['naslov'] ); ?></h3>
        <p><?php echo esc_html( $d['tekst'] ); ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- 9) RECENZIJE KUPACA -->
<section class="nbl-sec">
  <div class="nbl-wrap">
    <h2 class="nbl-h2 nbl-h2--c">Recenzije <em>kupaca</em></h2>
    <p class="nbl-rate"><span class="nbl-stars">★★★★★</span> <strong>4,8 od 5</strong> · na temelju 1.081 recenzije</p>
    <div class="nbl-rv">
      <?php foreach ( $nbl_reviews as $r ) : ?>
      <article class="nbl-rv__card">
        <?php if ( $r['foto'] ) : ?><div class="nbl-rv__photo"><?php echo $nbl_img( $r['foto'], 'Fotografija kupca — ' . $r['ime'] ); ?></div><?php endif; ?>
        <span class="nbl-stars" aria-label="<?php echo (int) $r['ocjena']; ?> od 5 zvjezdica"><?php echo str_repeat( '★', (int) $r['ocjena'] ); ?><span class="nbl-stars__off"><?php echo str_repeat( '★', 5 - (int) $r['ocjena'] ); ?></span></span>
        <p><?php echo esc_html( $r['tekst'] ); ?></p>
        <div class="nbl-rv__who"><cite><?php echo esc_html( $r['ime'] ); ?></cite><span>✓ Provjereni kupac</span></div>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<style>
/* 3) specifikacije v treh stolpcih */
.nbl-specs { display: grid; grid-template-columns: repeat(3, minmax(0,1fr)); gap: 28px; }
.nbl-spec { background: #fff; border: 1px solid #ece6f3; border-radius: 12px; padding: 24px 24px 20px; }
.nbl-spec h3 { font-size: 15px; font-weight: 800; letter-spacing: .04em; text-transform: uppercase; color: #7b4fb3; margin: 0 0 8px; }
.nbl-spec h3 + p, .nbl-spec h3 + ul, .nbl-spec h3 + .nbl-spec__note { margin-top: 0; }
.nbl-spec p { font-size: 15.5px; line-height: 1.65; color: #4a4450; margin: 0 0 18px; }
.nbl-spec p:last-child { margin-bottom: 0; }
.nbl-spec__note { margin-bottom: 8px !important; }
.nbl-spec .nbl-sizes { margin: 0; padding-left: 18px; }
.nbl-spec .nbl-sizes li { font-size: 14.5px; line-height: 1.6; margin: 0 0 10px; color: #4a4450; }
@media (max-width: 989px) { .nbl-specs { grid-template-columns: 1fr; gap: 16px; } }

.nbl-sec { padding: 60px 0; background: #fff; font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Arial, sans-serif; color: #231d29; }
.nbl-sec * { box-sizing: border-box; }
.nbl-tint { background: #f6f2fa; }
.nbl-wrap { width: 100%; max-width: 1240px; margin: 0 auto; padding: 0 24px; }
.nbl-wrap--narrow { max-width: 860px; }
.nbl-row2 { display: grid; grid-template-columns: 1fr 1fr; gap: 56px; align-items: center; }
.nbl-row2--top { align-items: start; }
.nbl-media img, .nbl-media video { display: block; width: 100%; height: auto; border: 0;
  box-shadow: 0 2px 4px rgba(40,20,60,.05), 0 14px 40px rgba(40,20,60,.10); }
.nbl-media--video video { background: #000; aspect-ratio: 1 / 1; object-fit: cover; }
.nbl-kicker { font-size: 12.5px; font-weight: 800; letter-spacing: .14em; text-transform: uppercase; color: #7b4fb3; margin: 0 0 10px; }
.nbl-kicker--c { text-align: center; }
.nbl-h2 { font-size: clamp(25px, 3.1vw, 36px); font-weight: 800; line-height: 1.18; letter-spacing: -.01em; margin: 0 0 16px; color: #231d29; text-transform: none; }
.nbl-h2--c { text-align: center; }
.nbl-h2 em { font-style: italic; font-weight: 800; color: #7b4fb3; }
.nbl-copy p { font-size: 16px; line-height: 1.7; color: #574c5e; margin: 0 0 14px; }
.nbl-copy p strong { color: #231d29; }
.nbl-big { font-size: 19px !important; font-weight: 800; color: #231d29 !important; }
.nbl-big--c { text-align: center; }
.nbl-card { background: #f6f2fa; border: 1px solid #e7def1; padding: 28px 26px; }
.nbl-card p { font-size: 15px; }
.nbl-sizes { margin: 0 0 14px; padding-left: 18px; font-size: 14.5px; line-height: 1.6; color: #574c5e; }
.nbl-sizes li { margin: 0 0 4px; }
.nbl-check { list-style: none; padding: 0; margin: 6px 0 18px; display: flex; flex-direction: column; gap: 11px; }
.nbl-check li { position: relative; padding-left: 30px; font-size: 15.5px; line-height: 1.55; color: #3d3346; }
.nbl-check li::before { content: "\2713"; position: absolute; left: 0; top: 1px; width: 20px; height: 20px; border-radius: 50%;
  background: #2f9e5f; color: #fff; font-size: 11px; font-weight: 800; display: flex; align-items: center; justify-content: center; }
.nbl-check--c { max-width: 640px; margin: 18px auto 20px; }
.nbl-cta { display: inline-block; margin-top: 8px; background: #7b4fb3; color: #fff !important; font-size: 15px; font-weight: 700;
  padding: 15px 30px; border-radius: 8px; text-decoration: none; }
.nbl-cta:hover { background: #643c99; color: #fff !important; }
.nbl-stars { color: #e0a33c; letter-spacing: 1px; font-size: 15px; }
.nbl-stars__off { color: #ddd3e6; }

/* 1) iskustva zajednice */
.nbl-testi-grid { display: grid; grid-template-columns: repeat(4, 1fr); gap: 18px; margin-top: 10px; }
.nbl-testi { background: #fff; border: 1px solid #e7def1; padding: 22px 20px; display: flex; flex-direction: column; }
.nbl-testi h3 { font-size: 16.5px; font-weight: 800; line-height: 1.3; margin: 8px 0 10px; color: #231d29; }
.nbl-testi p { font-size: 14.5px; line-height: 1.65; color: #574c5e; margin: 0 0 14px; flex: 1 1 auto; }
.nbl-testi cite { font-style: normal; font-size: 14px; font-weight: 800; color: #231d29; }

/* 4) usporedba */
.nbl-cmp { background: #fff; border: 1px solid #e7def1; overflow: hidden; }
.nbl-cmp__table { width: 100%; border-collapse: collapse; font-size: 14.5px; margin: 0 !important; table-layout: fixed; }
.nbl-cmp__table th, .nbl-cmp__table td { padding: 13px 14px; border-bottom: 1px solid #eee6f5; vertical-align: middle; text-align: left; }
.nbl-cmp__table th { font-size: 16px; font-weight: 800; text-align: center; }
.nbl-cmp__table th img { display: block; height: 90px; width: auto; max-width: 100%; margin: 0 auto 8px; object-fit: contain; }
.nbl-cmp__us { background: #7b4fb3; color: #fff; }
.nbl-cmp__them { background: #f1edf4; color: #6b5e75; }
.nbl-cmp__table td { color: #3d3346; line-height: 1.45; }
.nbl-cmp__table td span { font-weight: 800; margin-right: 8px; }
.nbl-y { color: #2f9e5f; }
.nbl-n { color: #c0392b; }
.nbl-cmp__table tbody tr:last-child td { border-bottom: 0; }

/* 8) DTP */
.nbl-dtp { display: grid; grid-template-columns: repeat(3, 1fr); gap: 30px; margin-top: 10px; }
.nbl-dtp__item { text-align: center; }
.nbl-sec .nbl-dtp__icon { display: block; width: 84px; height: 84px; object-fit: contain; margin: 0 auto 14px; }
.nbl-dtp__item h3 { font-size: 17.5px; font-weight: 800; line-height: 1.3; margin: 0 0 8px; color: #231d29; }
.nbl-dtp__item p { font-size: 15px; line-height: 1.6; color: #574c5e; margin: 0; }

/* 9) recenzije */
.nbl-rate { text-align: center; font-size: 15px; color: #6b5e75; margin: 0 0 24px; }
.nbl-rv { column-count: 3; column-gap: 18px; }
.nbl-rv__card { break-inside: avoid; display: inline-block; width: 100%; margin: 0 0 18px; background: #fff; border: 1px solid #e7def1; padding: 18px; }
.nbl-rv__photo { margin: 0 0 12px; }
.nbl-sec .nbl-rv__photo img { display: block; width: 100%; aspect-ratio: 4 / 3; height: auto; object-fit: cover; }
.nbl-rv__card p { font-size: 14.5px; line-height: 1.65; color: #574c5e; margin: 8px 0 14px; }
.nbl-rv__who { display: flex; justify-content: space-between; align-items: center; gap: 8px; border-top: 1px solid #eee6f5; padding-top: 10px; }
.nbl-rv__who cite { font-style: normal; font-size: 14px; font-weight: 800; color: #231d29; }
.nbl-rv__who span { font-size: 12.5px; color: #2e7d32; white-space: nowrap; }

/* kratek opis izdelka: zelene kljukice namesto pik */
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
.woocommerce-product-details__short-description .nbl-tick {
  position: absolute !important; left: 0 !important; top: 1px !important;
  width: 21px; height: 21px; border-radius: 50%;
  background: #2f9e5f !important; color: #fff !important;
  font-size: 12px !important; font-weight: 800 !important; line-height: 21px !important;
  text-align: center !important; display: inline-block !important; }
.woocommerce-product-details__short-description p:first-of-type { font-size: 16px; line-height: 1.55; }

@media (max-width: 980px) {
  .nbl-row2 { grid-template-columns: 1fr; gap: 28px; }
  .nbl-row2--rev .nbl-media { order: -1; }
  .nbl-testi-grid { grid-template-columns: repeat(2, 1fr); }
  .nbl-rv { column-count: 2; }
}
@media (max-width: 560px) {
  .nbl-sec { padding: 42px 0; }
  .nbl-wrap { padding: 0 16px; }
  .nbl-cta { width: 100%; text-align: center; }
  .nbl-testi-grid { grid-template-columns: 1fr; }
  .nbl-dtp { grid-template-columns: 1fr; }
  .nbl-rv { column-count: 1; }
  .nbl-card { padding: 22px 18px; }
  .nbl-cmp__table th, .nbl-cmp__table td { padding: 10px 8px; font-size: 13px; }
  .nbl-cmp__table th img { height: 60px; }
}
</style>
