<?php
/**
 * product-bottom: NORIKS Blanket — kompresijska vreca za smirenje i bolji san (orto-blanket).
 * Original: nestishop.com/products/nesti-pod — struktura je 1:1 z originalom
 * (isto stevilo sekcij, isti vrstni red, isti dizajn), besedila prevedena v hrvascino.
 *   1) Iskustva nase zajednice (4 lila kartice z mnenji — na originalu pod galerijo)
 *   2) Detalji proizvoda / Kako radi / Dostava i povrat / Jamstvo 60 dana (zavihki iz nakupne skatle)
 *   3) Zasto je NORIKS najbolji izbor? (banner + primerjava NORIKS : utezni pokrivaci)
 *   4) Koristite ga za... (karusel 3 kartic)
 *   5) Znanost iza NORIKS-a (slika z oznakami + 4 tocke) in Kako koristiti (video + CTA)
 *   6) Prednosti terapije dubokim pritiskom (DTP) — lila pas s 3 ikonami
 *   7) Recenzije kupaca (karusel mnenj z originala, s fotografijami)
 * FAQ originala je v reviews.php ($blanket_faq), mnenja tudi v auto_reviews/HR_blanket.php.
 * Glava trgovine, "As seen in", "You may also like" in noga so izpusceni (trgovinski moduli).
 * Slike: img/blanket/ (logotip konkurenta odstranjen, napisi prevedeni v hrvascino).
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$nbl      = get_template_directory_uri() . '/img/blanket/';
$nbl_path = get_template_directory() . '/img/blanket/';
$nbl_img  = function( $file, $alt, $cls = '' ) use ( $nbl, $nbl_path ) {
  if ( ! file_exists( $nbl_path . $file ) ) { return ''; }
  return '<img src="' . esc_url( $nbl . $file ) . '" alt="' . esc_attr( $alt ) . '"' . ( $cls ? ' class="' . esc_attr( $cls ) . '"' : '' ) . ' loading="lazy">';
};

$nbl_star  = '<svg viewBox="0 0 20 20" aria-hidden="true"><path fill="currentColor" d="M10 1.5l2.6 5.3 5.9.9-4.3 4.1 1 5.8L10 14.8l-5.2 2.8 1-5.8L1.5 7.7l5.9-.9z"/></svg>';
$nbl_stars = '<span class="nbl-stars" aria-label="5 od 5 zvjezdica">' . str_repeat( $nbl_star, 5 ) . '</span>';
$nbl_yes   = '<svg class="nbl-ico nbl-ico--yes" viewBox="0 0 20 20" aria-hidden="true"><path fill="currentColor" d="M10 0a10 10 0 1 0 0 20 10 10 0 0 0 0-20Zm5 7.6-6.1 6.1a1 1 0 0 1-1.4 0L4.9 11a1 1 0 0 1 1.4-1.4l1.9 1.9 5.4-5.4A1 1 0 0 1 15 7.6Z"/></svg>';
$nbl_no    = '<svg class="nbl-ico nbl-ico--no" viewBox="0 0 20 20" aria-hidden="true"><path fill="currentColor" d="M10 0a10 10 0 1 0 0 20 10 10 0 0 0 0-20Zm3.5 12.1a1 1 0 0 1-1.4 1.4L10 11.4l-2.1 2.1a1 1 0 0 1-1.4-1.4L8.6 10 6.5 7.9a1 1 0 0 1 1.4-1.4L10 8.6l2.1-2.1a1 1 0 0 1 1.4 1.4L11.4 10l2.1 2.1Z"/></svg>';
$nbl_arrow = '<svg class="nbl-cta__arrow" viewBox="0 0 24 24" width="22" height="22" aria-hidden="true"><path d="M4 12h14M13 6l6 6-6 6" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>';
$nbl_plus  = '<span class="nbl-acc__icon" aria-hidden="true"><svg viewBox="0 0 12 12" width="12" height="12" fill="none"><line x1="1" y1="6" x2="11" y2="6" stroke="currentColor" stroke-width="1.5"/><line class="nbl-acc__v" x1="6" y1="1" x2="6" y2="11" stroke="currentColor" stroke-width="1.5"/></svg></span>';

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

/* 2) Zavihki iz nakupne skatle originala. */
$nbl_sizes_txt = '';
if ( function_exists( 'noriks_blanket_sizes' ) ) {
  foreach ( noriks_blanket_sizes() as $r ) {
    $nbl_sizes_txt .= '<li><strong>' . esc_html( $r[0] ) . ':</strong> duljina ' . esc_html( $r[1] ) . ', širina ' . esc_html( $r[2] ) . '. Visina dijela za stopala ' . esc_html( $r[3] ) . '. Širina kapuljače ' . esc_html( $r[4] ) . '.</li>';
  }
}
$nbl_tabs = array(
  array( 'naslov' => 'Detalji proizvoda', 'html' =>
    '<h4>Materijali</h4><ul><li>95 % poliester, 5 % elastan</li><li>Mekano, prozračno i rastezljivo</li></ul>'
    . '<h4>Pranje</h4><ul><li>Strojno pranje na hladnom, nježni program</li><li>Sušenje na zraku</li><li>Kompresija se zadržava i nakon pranja</li></ul>'
    . '<h4>Veličine i dimenzije</h4><p>Nenošena, položena ravno:</p><ul>' . $nbl_sizes_txt . '</ul>'
    . '<p>Veličinu birajte prema kompresiji, a ne prema duljini. Za čvršći zagrljaj uzmite jednu veličinu manje.</p>'
    . '<p>Prije narudžbe pogledajte tablicu veličina iznad ponuda.</p>'
    . '<h4>Dostupne boje</h4><p>Plava, siva, ružičasta, ljubičasta</p>' ),
  array( 'naslov' => 'Kako radi', 'html' =>
    '<ul>'
    . '<li>Mekana rastezljiva cijev u koju se jednostavno uvučete. Bez zatvarača, kopči, utega i kompliciranog zakopčavanja.</li>'
    . '<li>Ništa tvrdo ili grebljivo što bi moglo štipati ili zapinjati. Sigurno za nemirne spavače i ruke koje se vrpolje.</li>'
    . '<li>Otvoreno dno. Stopala mogu ostati pokrivena ili izviriti van.</li>'
    . '<li>Kapuljača na vrhu po želji. Navucite je za veću pokrivenost ili je ostavite spuštenu.</li>'
    . '<li>Ruke mogu ostati unutra za kompresiju cijelog tijela ili izaći iznad ramena ako želite slobodne ruke.</li>'
    . '<li>Tkanina se rasteže s vama. I dalje možete sjesti, ustati i hodati bez osjećaja da ste zarobljeni.</li>'
    . '<li>Nježna kompresija sa svih strana. Nije utežni pokrivač — lagana je i lako se u njoj krećete.</li>'
    . '</ul>' ),
  array( 'naslov' => 'Dostava i povrat', 'html' =>
    '<h4>Dostava</h4><p>Narudžbe šaljemo <strong>praćenom dostavom</strong>. Dostava traje <strong>3–5 radnih dana</strong>. <strong>Broj za praćenje</strong> dobit ćete čim narudžba bude poslana.</p>'
    . '<h4>Zamjena veličine</h4><p>Ne pristaje baš najbolje? Nudimo <strong>14 dana za zamjenu veličine</strong> od dana dostave.</p>'
    . '<p>Zamjena <strong>ovisi o zalihama</strong>, pa ponekad treba kratko pričekati sljedeću isporuku.</p>'
    . '<p>Proizvod mora biti <strong>nenošen i u originalnom stanju</strong> da bi se mogao zamijeniti.</p>' ),
  array( 'naslov' => 'Jamstvo povrata novca 60 dana', 'html' =>
    '<p>Kad smo razvijali NORIKS Blanket, cilj nam nije bio napraviti još jedan proizvod.</p>'
    . '<p>Htjeli smo napraviti pomagalo koje ljudima zaista pomaže da se osjećaju mirnije, prizemljenije i da bolje upravljaju svojim osjetilnim svijetom.</p>'
    . '<p>No znamo i da je svaki živčani sustav drukčiji.</p>'
    . '<p>Neki osjete učinak odmah. Drugima treba nekoliko prilagodbi da pronađu svoju senzornu ravnotežu — i to je sasvim normalno.</p>'
    . '<p>Ovo jamstvo postoji jer želimo da imate vremena, prostora i podrške da NORIKS Blanket isprobate kako treba.</p>'
    . '<h4>NORIKS jamstvo udobnosti: povrat novca u 60 dana</h4>'
    . '<p>Od dana dostave imate 60 dana da odlučite odgovara li vam NORIKS Blanket.</p>' ),
);

/* 3) Primerjava. */
$nbl_cmp_yes = array(
  'Nježna, ravnomjerna kompresija bez težine',
  'Prozračan i regulira temperaturu',
  'Osmišljen posebno za djecu sa senzornom osjetljivošću',
  'Lagan i jednostavan za nošenje na put',
  'Pere se u perilici i brzo se suši',
);
$nbl_cmp_no = array(
  'Mogu sputavati i biti teški',
  'Često zadržavaju toplinu i uzrokuju pregrijavanje',
  'Generički dizajn, nije prilagođen djeci',
  'Glomazni i teško ih je spakirati',
  'Često preveliki ili preteški za često pranje',
);

/* 4) Koristite ga za... */
$nbl_uses = array(
  array( 'slika' => 'bl-uc-1-san.webp', 'naslov' => 'Bolji san',
    'tekst' => 'NORIKS Blanket pomaže djetetu da brže zaspi i dulje spava jer nježna kompresija cijelog tijela daje osjećaj sigurnosti i smirenosti. To je jednostavan način bez lijekova da odlazak na spavanje bude manje stresan — i za dijete i za vas.' ),
  array( 'slika' => 'bl-uc-2-opustanje.webp', 'naslov' => 'Opuštanje',
    'tekst' => 'Bilo da se smiruje nakon škole ili radi senzornu pauzu, NORIKS Blanket djetetu daje ugodan kutak za opuštanje. Kao umirujući zagrljaj u koji se može uvući kad god se treba prizemljiti.' ),
  array( 'slika' => 'bl-uc-3-putovanja.webp', 'naslov' => 'Putovanja',
    'tekst' => 'Od vožnje autom i spavanja kod prijatelja do dugih letova — NORIKS Blanket ide svugdje gdje treba udobnosti. Lagan je i lako se spakira, a pruža poznati mir i dosljednost kad se rutina promijeni — posebno korisno za senzorno osjetljivu djecu u pokretu.' ),
);

/* 5) Znanost */
$nbl_science = array(
  array( 'Kompresijska terapija od 360°', 'Nježnom kompresijom obavija cijelo tijelo sa svih strana.' ),
  array( 'Šalje signale opuštanja mozgu', 'Nježna kompresija oponaša osjećaj zagrljaja i potiče receptore serotonina u mozgu.' ),
  array( 'Stvara stanje smirenosti', 'Osjećaj dodira opušta mišiće, što prirodno smiruje tjeskoban um.' ),
  array( 'Za miran san koji obnavlja', 'Tjeskoba i stres prelaze u umor, pa brže zaspite i dulje spavate.' ),
);

/* 6) DTP */
$nbl_dtp = array(
  array( 'ikona' => 'bl-dtp-1.webp', 'naslov' => 'Smiruje živčani sustav i ublažava tjeskobu',
    'tekst' => 'DTP aktivira umirujući dio živčanog sustava i snižava razinu hormona stresa. Djeci s tjeskobom, ADHD-om ili senzornim teškoćama pomaže da se osjećaju sigurno i smireno.' ),
  array( 'ikona' => 'bl-dtp-2.webp', 'naslov' => 'Brže uspavljivanje i kvalitetniji san',
    'tekst' => 'Istraživanja pokazuju da DTP pomaže djeci da brže zaspu i dublje spavaju. Nježan pritisak signalizira sigurnost, pa se navečer lakše opuste.' ),
  array( 'ikona' => 'bl-dtp-3.webp', 'naslov' => 'Podupire senzornu regulaciju i smanjuje nemir',
    'tekst' => 'DTP daje stalan podražaj koji djeci pomaže da ostanu mirna i usredotočena. Odlično smanjuje vrpoljenje i olakšava prijelaz na spavanje.' ),
);

/* 7) Recenzije kupaca — 1:1 z originala (test vnos izpuscen), fotografije kupcev brez logotipa. */
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
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@600;700&family=Montserrat:wght@400;500;600;700&display=swap">

<!-- 1) ISKUSTVA NAŠE ZAJEDNICE -->
<section class="nbl-sec nbl-sec--community">
  <div class="nbl-wrap">
    <h2 class="nbl-h2">Iskustva naše zajednice</h2>
    <div class="nbl-slider" data-nbl-slider="community" tabindex="0" role="group" aria-label="Iskustva naše zajednice">
      <div class="nbl-track">
        <?php foreach ( $nbl_community as $c ) : ?>
        <article class="nbl-testi">
          <p class="nbl-testi__quote">„<?php echo esc_html( $c['naslov'] ); ?>”</p>
          <p class="nbl-testi__body"><?php echo esc_html( $c['tekst'] ); ?></p>
          <div class="nbl-testi__meta"><?php echo $nbl_stars; ?><p class="nbl-testi__author">– <?php echo esc_html( $c['ime'] ); ?></p></div>
        </article>
        <?php endforeach; ?>
      </div>
    </div>
    <div class="nbl-nav">
      <button type="button" class="nbl-arrow" data-nbl-prev="community" aria-label="Prethodno"><svg viewBox="0 0 20 20" aria-hidden="true"><path d="M12.5 4 6.5 10l6 6" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg></button>
      <button type="button" class="nbl-arrow" data-nbl-next="community" aria-label="Sljedeće"><svg viewBox="0 0 20 20" aria-hidden="true"><path d="M7.5 4l6 6-6 6" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg></button>
    </div>
  </div>
</section>

<!-- 2) DETALJI PROIZVODA (zavihki iz nakupne skatle originala) -->
<section class="nbl-sec nbl-sec--tabs">
  <div class="nbl-wrap nbl-wrap--narrow">
    <div class="nbl-acc-list">
      <?php foreach ( $nbl_tabs as $tab ) : ?>
      <details class="nbl-acc nbl-acc--bold">
        <summary><span class="nbl-acc__label"><?php echo esc_html( $tab['naslov'] ); ?></span><?php echo $nbl_plus; ?></summary>
        <div class="nbl-acc__panel"><?php echo wp_kses_post( $tab['html'] ); ?></div>
      </details>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- 3) ZAŠTO JE NORIKS NAJBOLJI IZBOR? -->
<section class="nbl-sec nbl-sec--compare">
  <div class="nbl-wrap">
    <div class="nbl-cmp-layout">
      <div class="nbl-cmp-layout__banner"><?php echo $nbl_img( 'bl-cmp-banner.webp', 'Djevojčica u ružičastoj NORIKS vreći' ); ?></div>
      <div class="nbl-cmp-layout__main">
        <h2 class="nbl-h2">Zašto je NORIKS najbolji izbor?</h2>
        <div class="nbl-cmp">
          <div class="nbl-cmp__col nbl-cmp__col--noriks">
            <div class="nbl-cmp__media"><?php echo $nbl_img( 'bl-cmp-noriks.webp', 'NORIKS Blanket' ); ?></div>
            <p class="nbl-cmp__label">NORIKS</p>
            <?php foreach ( $nbl_cmp_yes as $it ) : ?><div class="nbl-cmp__item"><?php echo $nbl_yes; ?><span><?php echo esc_html( $it ); ?></span></div><?php endforeach; ?>
          </div>
          <div class="nbl-cmp__col nbl-cmp__col--other">
            <div class="nbl-cmp__media"><?php echo $nbl_img( 'bl-cmp-utezni.webp', 'Utežni pokrivač' ); ?></div>
            <p class="nbl-cmp__label">Utežni pokrivači</p>
            <?php foreach ( $nbl_cmp_no as $it ) : ?><div class="nbl-cmp__item"><?php echo $nbl_no; ?><span><?php echo esc_html( $it ); ?></span></div><?php endforeach; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- 4) KORISTITE GA ZA... -->
<section class="nbl-sec nbl-sec--uses">
  <div class="nbl-wrap">
    <h2 class="nbl-h2">Koristite ga za...</h2>
    <div class="nbl-slider nbl-slider--uses" data-nbl-slider="uses" tabindex="0" role="group" aria-label="Koristite ga za">
      <div class="nbl-track">
        <?php foreach ( $nbl_uses as $u ) : ?>
        <article class="nbl-use">
          <?php echo $nbl_img( $u['slika'], $u['naslov'] ); ?>
          <div class="nbl-use__body">
            <p class="nbl-use__title"><?php echo esc_html( $u['naslov'] ); ?></p>
            <p class="nbl-use__text"><?php echo esc_html( $u['tekst'] ); ?></p>
          </div>
        </article>
        <?php endforeach; ?>
      </div>
    </div>
    <div class="nbl-nav nbl-nav--uses">
      <button type="button" class="nbl-arrow" data-nbl-prev="uses" aria-label="Prethodno"><svg viewBox="0 0 20 20" aria-hidden="true"><path d="M12.5 4 6.5 10l6 6" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg></button>
      <button type="button" class="nbl-arrow" data-nbl-next="uses" aria-label="Sljedeće"><svg viewBox="0 0 20 20" aria-hidden="true"><path d="M7.5 4l6 6-6 6" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg></button>
    </div>
  </div>
</section>

<!-- 5) ZNANOST IZA NORIKS-A + KAKO KORISTITI -->
<section class="nbl-sec nbl-sec--science">
  <div class="nbl-wrap">
    <div class="nbl-sci">
      <div class="nbl-sci__row nbl-sci__row--science">
        <div class="nbl-sci__media"><?php echo $nbl_img( 'bl-04-dijelovi-hr.webp', 'Dijelovi NORIKS Blanket vreće: fleksibilna kapuljača, ultramekana tkanina, pokrov za stopala po želji' ); ?></div>
        <div class="nbl-sci__content">
          <h2 class="nbl-h2 nbl-h2--left">Znanost iza NORIKS-a</h2>
          <?php foreach ( $nbl_science as $s ) : ?>
          <div class="nbl-sci__item"><p class="nbl-sci__item-title"><?php echo esc_html( $s[0] ); ?></p><p class="nbl-sci__item-text"><?php echo esc_html( $s[1] ); ?></p></div>
          <?php endforeach; ?>
        </div>
      </div>
      <div class="nbl-sci__row nbl-sci__row--howto">
        <div class="nbl-sci__content">
          <h2 class="nbl-h2 nbl-h2--left">Kako koristiti</h2>
          <p class="nbl-sci__howto">Kad ste u krevetu, uvucite se u NORIKS Blanket tako da gornji rub bude u udobnom položaju. Preporučujemo da ga namjestite blizu gornjeg dijela prsa i zatim ga povučete preko ramena. Tkanina će se rastegnuti i stisnuti te pružiti umirujući pritisak oko tijela.</p>
        </div>
        <div class="nbl-sci__media nbl-sci__media--video">
          <video class="nbl-sci__video" src="<?php echo esc_url( $nbl . 'bl-kako-koristiti.mp4' ); ?>" poster="<?php echo esc_url( $nbl . 'bl-video-poster.webp' ); ?>" preload="none" muted loop playsinline autoplay disablepictureinpicture aria-label="Kako koristiti"></video>
        </div>
      </div>
      <div class="nbl-cta-wrap"><a class="nbl-cta" href="#bundle-selector"><span>Isprobajte danas, bez rizika</span><?php echo $nbl_arrow; ?></a></div>
    </div>
  </div>
</section>

<!-- 6) PREDNOSTI TERAPIJE DUBOKIM PRITISKOM (DTP) -->
<section class="nbl-sec nbl-sec--dtp">
  <div class="nbl-wrap">
    <h2 class="nbl-h2 nbl-h2--white">Znanstveno potvrđene prednosti terapije dubokim pritiskom (DTP)</h2>
    <div class="nbl-dtp">
      <?php foreach ( $nbl_dtp as $d ) : ?>
      <div class="nbl-dtp__item">
        <?php echo $nbl_img( $d['ikona'], '', 'nbl-dtp__icon' ); ?>
        <p class="nbl-dtp__title"><?php echo esc_html( $d['naslov'] ); ?></p>
        <p class="nbl-dtp__text"><?php echo esc_html( $d['tekst'] ); ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- 7) RECENZIJE KUPACA -->
<section class="nbl-sec nbl-sec--reviews">
  <div class="nbl-wrap">
    <h2 class="nbl-h2">Recenzije kupaca</h2>
    <p class="nbl-rv-sum"><?php echo $nbl_stars; ?> <strong>4,97 od 5</strong> · na temelju 319 recenzija</p>
    <div class="nbl-slider" data-nbl-slider="reviews" tabindex="0" role="group" aria-label="Recenzije kupaca">
      <div class="nbl-track">
        <?php foreach ( $nbl_reviews as $r ) : ?>
        <article class="nbl-rv">
          <?php if ( $r['foto'] ) : ?><div class="nbl-rv__photo"><?php echo $nbl_img( $r['foto'], 'Fotografija kupca — ' . $r['ime'] ); ?></div><?php endif; ?>
          <span class="nbl-stars nbl-stars--rv" aria-label="<?php echo (int) $r['ocjena']; ?> od 5 zvjezdica"><?php echo str_repeat( $nbl_star, (int) $r['ocjena'] ); ?><?php echo str_repeat( '<svg class="is-off" viewBox="0 0 20 20" aria-hidden="true"><path fill="currentColor" d="M10 1.5l2.6 5.3 5.9.9-4.3 4.1 1 5.8L10 14.8l-5.2 2.8 1-5.8L1.5 7.7l5.9-.9z"/></svg>', 5 - (int) $r['ocjena'] ); ?></span>
          <p class="nbl-rv__txt"><?php echo esc_html( $r['tekst'] ); ?></p>
          <div class="nbl-rv__bottom"><span class="nbl-rv__name"><?php echo esc_html( $r['ime'] ); ?></span><span class="nbl-rv__ver">✓ Provjereni kupac</span></div>
        </article>
        <?php endforeach; ?>
      </div>
    </div>
    <div class="nbl-nav">
      <button type="button" class="nbl-arrow" data-nbl-prev="reviews" aria-label="Prethodna recenzija"><svg viewBox="0 0 20 20" aria-hidden="true"><path d="M12.5 4 6.5 10l6 6" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg></button>
      <button type="button" class="nbl-arrow" data-nbl-next="reviews" aria-label="Sljedeća recenzija"><svg viewBox="0 0 20 20" aria-hidden="true"><path d="M7.5 4l6 6-6 6" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg></button>
    </div>
  </div>
</section>

<script>
(function(){
  /* promo pasica originala ("ADHD Month Sale Live Now") — na istem mestu: cisto na vrhu strani, nad glavo. */
  if (!document.querySelector('.nbl-annbar')) {
    var bar = document.createElement('div');
    bar.className = 'nbl-annbar'; bar.setAttribute('role', 'region'); bar.setAttribute('aria-label', 'Obavijest');
    bar.textContent = 'Akcija za mjesec ADHD-a je u tijeku';
    document.body.insertBefore(bar, document.body.firstChild);
  }
})();
(function(){
  document.querySelectorAll('[data-nbl-slider]').forEach(function(s){
    var key = s.getAttribute('data-nbl-slider');
    var prev = document.querySelector('[data-nbl-prev="' + key + '"]'), next = document.querySelector('[data-nbl-next="' + key + '"]');
    if (!prev || !next) return;
    function step(){ var c = s.querySelector('.nbl-track > *'); return c ? c.getBoundingClientRect().width + 16 : 300; }
    function upd(){ prev.disabled = s.scrollLeft <= 2; next.disabled = s.scrollLeft + s.clientWidth >= s.scrollWidth - 2; }
    prev.addEventListener('click', function(){ s.scrollBy({ left: -step(), behavior: 'smooth' }); });
    next.addEventListener('click', function(){ s.scrollBy({ left: step(), behavior: 'smooth' }); });
    s.addEventListener('scroll', upd, { passive: true });
    window.addEventListener('resize', upd);
    upd();
  });
  /* video "Kako koristiti" se zazene sele, ko pride v vidno polje (kot na originalu, data-src + preload none). */
  var v = document.querySelector('.nbl-sci__video');
  if (v && 'IntersectionObserver' in window) {
    v.removeAttribute('autoplay');
    new IntersectionObserver(function(es){ es.forEach(function(e){ if (e.isIntersecting) { var p = v.play(); if (p && p.catch) p.catch(function(){}); } else { v.pause(); } }); }, { threshold: .25 }).observe(v);
  }
})();
</script>

<style>
.nbl-sec { --nbl-lilac: #cec1df; --nbl-lilac-strong: #b7a3d0; --nbl-hot: #9217ff; --nbl-ink: #242424; --nbl-muted: #5f5f5f; --nbl-grey: #f4f4f4;
  padding: 40px 0; font-family: 'Montserrat', system-ui, -apple-system, 'Segoe UI', Roboto, Arial, sans-serif; color: var(--nbl-ink); background: #fff; overflow-x: hidden; }
.nbl-sec * { box-sizing: border-box; }
.nbl-wrap { width: 100%; max-width: 1200px; margin: 0 auto; padding: 0 24px; }
.nbl-wrap--narrow { max-width: 820px; }
.nbl-h2 { font-family: 'League Spartan', 'Montserrat', sans-serif; font-weight: 700; font-size: clamp(27px, 3vw, 33px); line-height: 1.3; text-align: center; margin: 0 0 22px; color: var(--nbl-lilac-strong); letter-spacing: 0; text-transform: none; }
.nbl-h2--left { text-align: left; }
.nbl-h2--white { color: #fff; }
.nbl-sec img { display: block; max-width: 100%; height: auto; }

/* karuseli */
.nbl-slider { overflow-x: auto; scroll-snap-type: x mandatory; scroll-behavior: smooth; -webkit-overflow-scrolling: touch; scrollbar-width: none; outline: none; }
.nbl-slider::-webkit-scrollbar { display: none; }
.nbl-track { display: flex; gap: 16px; align-items: stretch; }
.nbl-nav { display: flex; justify-content: center; gap: 12px; margin-top: 22px; }
.nbl-arrow { display: inline-flex; align-items: center; justify-content: center; width: 44px; height: 44px; padding: 0; border: 1px solid #b4b4b4; border-radius: 50%; background: #fff; color: #111; cursor: pointer; }
.nbl-arrow:hover:not(:disabled) { border-color: var(--nbl-hot); color: var(--nbl-hot); }
.nbl-arrow:disabled { opacity: .35; cursor: default; }
.nbl-arrow svg { width: 20px; height: 20px; }
.nbl-stars { display: inline-flex; align-items: center; gap: 4px; color: #764293; line-height: 1; }
.nbl-stars svg { width: 16px; height: 16px; }
.nbl-stars svg.is-off { color: #d9d2e3; }

/* 1) iskustva zajednice */
.nbl-sec--community { padding-top: 24px; }
.nbl-testi { flex: 0 0 calc((100% - 32px) / 3); scroll-snap-align: start; background: var(--nbl-lilac); color: #fff; border-radius: 8px; padding: 14px 26px 16px; display: flex; flex-direction: column; }
.nbl-testi__quote { font-weight: 700; font-size: 15px; line-height: 1.6; margin: 0 0 6px; color: #fff; }
.nbl-testi__body { font-size: 13.5px; line-height: 1.7; margin: 0 0 12px; color: #fff; flex: 1 1 auto; }
.nbl-testi__meta { display: flex; align-items: center; flex-wrap: wrap; gap: 6px 10px; }
.nbl-testi__author { margin: 0; font-family: 'League Spartan', 'Montserrat', sans-serif; font-weight: 700; font-size: 15px; color: #fff; }

/* 2) zavihki / harmonika */
.nbl-sec--tabs { padding-top: 8px; }
.nbl-acc { border-top: 1px solid rgba(0,0,0,.12); }
.nbl-acc:last-of-type { border-bottom: 1px solid rgba(0,0,0,.12); }
.nbl-acc > summary { display: flex; align-items: center; justify-content: space-between; gap: 16px; padding: 16px 0; cursor: pointer; font-weight: 400; font-size: 16px; color: var(--nbl-ink); list-style: none; }
.nbl-acc--bold > summary { font-weight: 700; }
.nbl-acc > summary::-webkit-details-marker { display: none; }
.nbl-acc__icon { flex: 0 0 12px; display: inline-flex; color: var(--nbl-ink); }
.nbl-acc[open] .nbl-acc__v { opacity: 0; }
.nbl-acc__panel { padding: 0 0 18px; color: var(--nbl-muted); font-size: 15px; line-height: 1.8; }
.nbl-acc__panel h4 { font-family: inherit; font-size: 15px; font-weight: 700; color: var(--nbl-ink); margin: 12px 0 4px; text-transform: none; letter-spacing: 0; }
.nbl-acc__panel h4:first-child { margin-top: 0; }
.nbl-acc__panel p { margin: 0 0 8px; }
.nbl-acc__panel ul { margin: 0 0 8px; padding-left: 20px; }
.nbl-acc__panel li { margin: 0 0 4px; }

/* 3) primerjava */
.nbl-cmp-layout { display: grid; grid-template-columns: minmax(0,5fr) minmax(0,7fr); gap: 30px; align-items: start; }
.nbl-cmp-layout__banner img { width: 100%; border-radius: 8px; }
.nbl-cmp-layout__main .nbl-h2 { margin-bottom: 40px; }
.nbl-cmp { display: grid; grid-template-columns: 1fr 1fr; gap: 12px; align-items: start; padding-top: 30px; }
.nbl-cmp__col { border-radius: 12px; padding: 12px; }
.nbl-cmp__col--noriks { background: var(--nbl-lilac); }
.nbl-cmp__col--other { background: var(--nbl-grey); margin-top: 24px; }
.nbl-cmp__media { margin: -50px 0 12px; text-align: center; }
.nbl-cmp__media img { display: inline-block; max-height: 190px; width: auto; }
.nbl-cmp__label { text-align: center; font-family: 'League Spartan', 'Montserrat', sans-serif; font-weight: 700; font-size: 19px; line-height: 1.5; margin: 0 0 10px; color: var(--nbl-ink); }
.nbl-cmp__col--noriks .nbl-cmp__label { color: #fff; font-size: 26px; line-height: 1.1; }
.nbl-cmp__item { display: flex; align-items: center; gap: 8px; background: #fff; border-radius: 10px; box-shadow: 0 2px 10px rgba(0,0,0,.07); padding: 16px; margin-bottom: 10px; font-size: 14px; line-height: 1.35; }
.nbl-cmp__item:last-child { margin-bottom: 0; }
.nbl-ico { flex: 0 0 20px; width: 20px; height: 20px; }
.nbl-ico--yes { color: #52c41a; }
.nbl-ico--no { color: #8c8c8c; }

/* 4) koristite ga za */
.nbl-use { flex: 0 0 calc((100% - 32px) / 3); scroll-snap-align: start; background: var(--nbl-lilac); color: #fff; border-radius: 12px; overflow: hidden; display: flex; flex-direction: column; }
.nbl-sec .nbl-use img { width: 100%; height: 300px; object-fit: cover; }
.nbl-use__body { padding: 24px 24px 16px; }
.nbl-use__title { font-family: 'League Spartan', 'Montserrat', sans-serif; font-weight: 600; font-size: 24px; line-height: 1.3; margin: 0 0 7px; color: #fff; }
.nbl-use__text { font-size: 15px; line-height: 1.45; margin: 0; color: #fff; }
.nbl-nav--uses { display: none; }

/* 5) znanost + kako koristiti */
.nbl-sci { display: flex; flex-direction: column; gap: 28px; }
.nbl-sci__row { display: grid; grid-template-columns: 1fr 1fr; gap: 40px; align-items: start; }
.nbl-sci__row--howto { align-items: center; }
.nbl-sci__media { border-radius: 12px; overflow: hidden; background: var(--nbl-lilac); }
.nbl-sci__media img, .nbl-sci__video { display: block; width: 100%; height: auto; border: 0; }
.nbl-sci__video { background: #000; pointer-events: none; aspect-ratio: 1 / 1; object-fit: cover; }
.nbl-sci__item { margin-bottom: 18px; }
.nbl-sci__item-title { font-weight: 700; font-size: 17px; color: var(--nbl-ink); margin: 0 0 4px; line-height: 1.3; }
.nbl-sci__item-text { color: var(--nbl-muted); font-size: 14.5px; line-height: 1.5; margin: 0; }
.nbl-sci__howto { color: var(--nbl-muted); font-size: 14.5px; line-height: 1.5; margin: 0 0 20px; }
.nbl-cta-wrap { display: flex; justify-content: center; width: 100%; }
.nbl-cta { display: inline-flex; align-items: center; justify-content: center; gap: 8px; width: 100%; max-width: 420px; min-height: 52px; padding: 0 24px;
  border-radius: 999px; background: var(--nbl-hot); color: #fff !important; font-weight: 700; font-size: 16px; letter-spacing: .02em; text-decoration: none;
  box-shadow: 0 4px 14px rgba(146,23,255,.28); transition: background .2s ease, box-shadow .2s ease, transform .15s ease; }
.nbl-cta:hover { background: #7a12d9; box-shadow: 0 6px 18px rgba(146,23,255,.36); transform: translateY(-1px); color: #fff !important; }

/* 6) DTP */
.nbl-sec--dtp { background: var(--nbl-lilac); color: #fff; padding: 48px 0; }
.nbl-dtp { display: grid; grid-template-columns: repeat(3, minmax(0,1fr)); gap: 30px; }
.nbl-dtp__item { text-align: center; max-width: 600px; margin: 0 auto; }
.nbl-sec .nbl-dtp__icon { width: 110px; height: 110px; object-fit: contain; margin: 0 auto 12px; }
.nbl-dtp__title { font-weight: 700; font-size: 19px; line-height: 1.3; margin: 0 0 7px; color: #fff; }
.nbl-dtp__text { font-size: 15px; line-height: 1.3; margin: 0; color: #fff; }

/* 7) recenzije */
.nbl-rv-sum { display: flex; align-items: center; justify-content: center; flex-wrap: wrap; gap: 8px; margin: -8px 0 22px; font-size: 15px; color: var(--nbl-muted); }
.nbl-rv-sum strong { color: var(--nbl-ink); }
.nbl-sec--reviews .nbl-track { align-items: flex-start; }
.nbl-rv { flex: 0 0 calc((100% - 48px) / 4); scroll-snap-align: start; display: flex; flex-direction: column; background: #fff; border: 1px solid #e6e0ee; border-radius: 12px; padding: 16px; }
.nbl-rv__photo { margin: 0 0 12px; border-radius: 8px; overflow: hidden; aspect-ratio: 1 / 1; }
.nbl-sec .nbl-rv__photo img { width: 100%; height: 100%; object-fit: cover; }
.nbl-stars--rv { margin: 0 0 10px; }
.nbl-rv__txt { font-size: 14px; line-height: 1.6; color: #3a3a3a; margin: 0 0 14px; flex: 1 1 auto; }
.nbl-rv__bottom { display: flex; justify-content: space-between; align-items: center; gap: 8px; border-top: 1px solid #eee7f5; padding-top: 10px; }
.nbl-rv__name { font-size: 13.5px; font-weight: 700; color: var(--nbl-ink); }
.nbl-rv__ver { font-size: 12px; color: #2e7d32; white-space: nowrap; }

@media (max-width: 989px) {
  .nbl-rv { flex-basis: calc((100% - 16px) / 2); }
  .nbl-testi { flex-basis: calc((100% - 16px) / 2); }
}
@media (max-width: 749px) {
  .nbl-sec { padding: 30px 0; }
  .nbl-wrap { padding: 0 16px; }
  .nbl-h2 { font-size: 27px; }
  .nbl-testi { flex-basis: 86%; padding: 12px 20px 14px; }
  .nbl-cmp-layout { grid-template-columns: 1fr; gap: 20px; }
  .nbl-cmp-layout__banner { display: none; }
  .nbl-cmp-layout__main .nbl-h2 { margin-bottom: 30px; }
  .nbl-cmp__label { font-size: 17px; }
  .nbl-cmp__col--noriks .nbl-cmp__label { font-size: 22px; }
  .nbl-cmp__item { padding: 12px 8px; font-size: 13px; }
  .nbl-cmp__media img { max-height: 130px; }
  .nbl-use { flex-basis: 84%; }
  .nbl-sec .nbl-use img { height: 220px; }
  .nbl-use__body { padding: 14px 14px 10px; }
  .nbl-use__title { font-size: 18px; }
  .nbl-use__text { font-size: 14px; }
  .nbl-nav--uses { display: flex; }
  .nbl-sci__row { grid-template-columns: 1fr; gap: 24px; }
  .nbl-sci__row--science .nbl-sci__content { order: 1; }
  .nbl-sci__row--science .nbl-sci__media { order: 2; }
  .nbl-sci__item-title { font-size: 15px; }
  .nbl-sci__item-text, .nbl-sci__howto { font-size: 14px; }
  .nbl-sec--dtp { padding: 36px 0; }
  .nbl-dtp { grid-template-columns: 1fr; gap: 30px; }
  .nbl-dtp__title { font-size: 17px; }
  .nbl-dtp__text { font-size: 14px; }
  .nbl-rv { flex-basis: 82%; }
}

.nbl-annbar { background: #cec1df; color: #fff; text-align: center; font-family: 'Montserrat', system-ui, sans-serif; font-weight: 700;
  font-size: 13px; letter-spacing: .06em; text-transform: uppercase; padding: 9px 12px; line-height: 1.3; position: relative; z-index: 2; }

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
.woocommerce-product-details__short-description .nbl-tick {
  position: absolute !important; left: 0 !important; top: 1px !important;
  width: 21px; height: 21px; border-radius: 50%;
  background: #2f9e5f !important; color: #fff !important;
  font-size: 12px !important; font-weight: 800 !important; line-height: 21px !important;
  text-align: center !important; display: inline-block !important; }
.woocommerce-product-details__short-description p:first-of-type { font-size: 16px; line-height: 1.55; }
</style>
