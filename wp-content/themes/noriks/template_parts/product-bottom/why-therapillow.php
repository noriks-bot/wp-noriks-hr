<?php
/**
 * product-bottom: NORIKS TheraPillow — terapijski jastuk za vrat 3 u 1 (orto-therapillow).
 * Original: callixe.com/products/thera — vsebina in vrstni red 1:1 z originalom, oblika po NORIKS stilu
 * (predloga why-calmingcollar.php / why-hands.php), poudarek po paleti originala (skrilasto modra #2c3b4e + cimetova #a35139,
 * ozadje »soft bone« #efebe1):
 *   1) "See how Thera Pillow works" (3-in-1 Neck Reset, 3 zavihki z videi)   -> Pogledajte kako djeluje (3 kartice z videi,
 *      logotip na nalepki v videih vibracija/toplina retuširan po sličicah)
 *   2) "Unlock Deep Reset With Combined Power of Stretching & Relaxation"     -> video ob besedilu (kadri z logotipom izrezani,
 *      besedilo iz opisa originala)
 *   3) "Four Major Upgrades To The Thera Pillow" (4 ikone)                     -> Četiri velike nadogradnje (ikona 96° F -> 44 °C)
 *   4) "14x Cheaper Than Weekly Appointments"                                  -> slika ob besedilu (logotip na nalepki retuširan)
 *   5) "Designed By Engineers. Built For Premium Relief."                      -> slika ob besedilu
 *   6) "What Makes Callixe So Special?" (primerjalna tabela)                    -> Po čemu je NORIKS TheraPillow poseban (tabela ob sliki)
 *   7) "Hear what our customers have to say" (zid mnenj: 8 videov + 5 besedil)  -> Što kažu naši kupci (8 fotografij iz posnetkov
 *      kupcev + 5 mnenj; videi z govorom niso preneseni, uporabljene so naslovne sličice z logotipom retuširanim)
 *   8) "Inside Package / Specifications" (zavihka)                              -> U paketu i specifikacije (slika ob besedilu, logotip
 *      na vrečki in nalepki odstranjen)
 *   9) Loox "7,755 Reviews"                                                      -> Recenzije kupaca: 1081 + 8 mnenj
 * Izpusceno: pasica "100,000+ Necks Saved / 90 Nights Risk Free", "Featured in" (logotipi medijev), "Trusted and Recommended by
 * Experts" (poimenska priporocila resnicnih terapevtov za izdelek konkurenta), "Expand your relief" (navzkrizna prodaja Thera Back
 * Pillow), dodatki v nakupni skatli, harmonike FSA/HSA, Guarantee & Warranty (90 nights / 365 day), Shipping & Returns (velja NORIKS).
 * Ime tehnologije "ThermoTrac™" (blagovna znamka konkurenta) ni preneseno.
 * FAQ (8) je v reviews.php ($therapillow_faq), mnenja v auto_reviews/HR_therapillow.php, opis + specifikacije + nega v meta.php.
 * Slike/videi: img/therapillow/ (ntp-…).
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$ntp      = get_template_directory_uri() . '/img/therapillow/';
$ntp_path = get_template_directory() . '/img/therapillow/';
$ntp_img  = function( $file, $alt, $cls = '' ) use ( $ntp, $ntp_path ) {
  if ( ! $file || ! file_exists( $ntp_path . $file ) ) { return ''; }
  return '<img src="' . esc_url( $ntp . $file ) . '" alt="' . esc_attr( $alt ) . '" loading="eager"' . ( $cls ? ' class="' . esc_attr( $cls ) . '"' : '' ) . '>';
};
$ntp_video = function( $file, $label, $cls = '' ) use ( $ntp, $ntp_path ) {
  if ( ! file_exists( $ntp_path . $file ) ) { return ''; }
  $poster = preg_replace( '/\.mp4$/', '-poster.webp', $file );
  return '<div class="ntp-vid ' . esc_attr( $cls ) . '"><video src="' . esc_url( $ntp . $file ) . '" poster="' . esc_url( $ntp . $poster ) . '"'
    . ' muted autoplay loop playsinline preload="metadata" aria-label="' . esc_attr( $label ) . '"></video></div>';
};
$ntp_stars = function( $n ) {
  $n = max( 0, min( 5, (int) $n ) );
  return '<span class="ntp-stars" aria-label="' . $n . ' od 5 zvjezdica">' . str_repeat( '★', $n ) . '<span class="ntp-stars__off">' . str_repeat( '★', 5 - $n ) . '</span></span>';
};

/* 1) pogledajte kako djeluje (3 zavihki originala z videi) */
$ntp_how = array(
  array( 'ntp-s01-trakcija.mp4', 'Cervikalna trakcija', 'Podupire prirodnu zakrivljenost vrata', 'Sustav cervikalne trakcije na zračni pogon dinamički podiže i isteže vrat pod optimalnim kutom od <strong>26°</strong> i podupire njegovu prirodnu zakrivljenost u mirovanju. Ublažava ukočenost i duboku napetost te potiče zdravo, uspravno držanje.' ),
  array( 'ntp-s01-vibracija.mp4', 'Terapija vibracijom', 'Opušta živce, napetost i čvorove', '<strong>4 jedinstvena uzorka vibracije</strong> pružaju duboko, umirujuće olakšanje napetim mišićima vrata – kako biste se napokon opustili, otpustili svakodnevni stres i prepustili se.' ),
  array( 'ntp-s01-toplina.mp4', 'Terapija toplinom', 'Otopite napetost umirujućom toplinom', 'Ugrađeni grijaći jastučići zagrijavaju se na preciznih <strong>44 °C</strong> – idealnu temperaturu za smirivanje napetih mišića i ugodnu toplinu koja prodire u dubinu.' ),
);

/* 3) četiri velike nadogradnje */
$ntp_upg = array(
  array( 'ntp-s03-baterija.webp', 'Punjiva baterija', 'Ponesite ga bilo kamo – baterija od 2500 mAh traje do 2 sata.' ),
  array( 'ntp-s03-tkanina.webp', 'Glatka, rashlađujuća navlaka', 'Obložen rashlađujućom svilenkastom tkaninom za mekan, luksuzan osjećaj.' ),
  array( 'ntp-s03-isklop.webp', 'Sigurnosni isklop nakon 30 min', 'Četiri sesije od 30 minuta na jedno punjenje – bez brige.' ),
  array( 'ntp-s03-toplina.webp', 'Regulirana toplina', 'Zagrijavanje na 44 °C uz naprednu regulaciju topline.' ),
);

/* 6) usporedba (stupci originala: Callixe / Other Massagers / Other Pillows) */
$ntp_cmp = array(
  array( 'Podupire pravilan položaj vrata', 'y', 'n', 'n' ),
  array( '3 terapije u jednom', 'y', 'n', 'n' ),
  array( 'Ublažavanje napetosti', 'BRZO', 'SPORO', 'n' ),
  array( 'Štedi novac i vrijeme', 'y', 'n', 'n' ),
  array( 'Udobnost na prvom mjestu', 'y', 'y', 'n' ),
  array( 'Bežični', 'y', 'n', 'y' ),
  array( 'Jednostavan za upotrebu', 'y', 'n', 'y' ),
);

/* 7) što kažu naši kupci: 8 fotografij (naslovne sličice videov kupcev) + 5 besedilnih mnenj; imena lokalizirana */
$ntp_rv_foto = array(
  array( 'ntp-rv-1.webp', 'Martina K.', 'Bol u vratu mučila me desetak godina… <strong>vrijedi svakog centa</strong>.' ),
  array( 'ntp-rv-2.webp', 'Ivan P.', 'Bol se <strong>znatno smanjila</strong>… gledam televiziju i uključim grijanje.' ),
  array( 'ntp-rv-3.webp', 'Sanja R.', 'Ništa mi drugo zapravo nije pomagalo… a imala sam i <strong>pravo na povrat u roku od 30 dana</strong>, pa sam se zato odlučila za njega.' ),
  array( 'ntp-rv-4.webp', 'Petra L.', '<strong>30 minuta dnevno</strong> promijenilo mi je život.' ),
  array( 'ntp-rv-5.webp', 'Vesna M.', 'Redovito sam išla na masaže… htjela sam smanjiti troškove… i <strong>vidim razliku</strong>.' ),
  array( 'ntp-rv-6.webp', 'Ljiljana B.', 'Prošlo je barem tjedan dana dok nisam primijetila razliku… iskreno, <strong>osjećaj je bio predivan</strong>.' ),
  array( 'ntp-rv-7.webp', 'Tomislav H.', 'Jedan sam kupio i tati za Božić… <strong>baterija traje jako dugo</strong>.' ),
  array( 'ntp-rv-8.webp', 'Ana Š.', 'Svakako ga preporučujem prijateljima i obitelji… <strong>itekako se isplati</strong>.' ),
);
$ntp_rv_txt = array(
  array( 'Ivona S.', '…ovaj mi je jastuk za samo tjedan dana korištenja (20 minuta prije spavanja) napravio veću razliku za bol – a i za novčanik.' ),
  array( 'Jasna S.', 'Ne izaziva mi glavobolju kao drugi jastuci za masažu koje sam kupovala prije.' ),
  array( 'Gordana P.', 'I moj ga suprug obožava – isprva je bio skeptičan, ali jedan pokušaj i bio je oduševljen!' ),
  array( 'Nikolina R.', 'Nevjerojatno se lako puni, baterija dugo traje i dovoljno je jednostavan za svakodnevnu upotrebu, a da ne postane obveza.' ),
  array( 'Renata T.', 'Mekan je i udoban, masaža je vrlo ugodna, a toplina je baš kako treba.' ),
);

/* 8) u paketu + specifikacije (zavihka originala; mere pretvorjene v cm/kg) */
$ntp_pack = array( '1 x NORIKS TheraPillow', '1 x USB-C kabel za punjenje', 'Korisnički priručnik', 'Vrećica s vezicom za pohranu' );
$ntp_spec = array(
  array( 'Veličina', '39,4 × 27 × 15,9 cm' ),
  array( 'Težina', '0,88 kg' ),
  array( 'Materijal', '100 % poliuretanska memorijska pjena' ),
  array( 'Načini rada', '3 – zračna trakcija, toplina, vibracijska masaža' ),
  array( 'Napajanje', 'bežični uređaj s priloženim USB-C kabelom za punjenje' ),
  array( 'Vrijeme punjenja', '90 minuta do punog' ),
  array( 'Trajanje', '4 sesije od 30 minuta po punjenju' ),
  array( 'Ulazna snaga', '10 W' ),
  array( 'Sigurnost', 'automatski isklop (svakih 30 min) i regulacija temperature (do 44 °C)' ),
);

/* 9) recenzije kupaca (Loox 7,755 -> po NORIKS 1081) */
$ntp_rv2 = array(
  array( 'Karolina B.', 5, 'Ove se godine posvećujem sebi. Toplina i masaža su prekrasni, a jastuk za vrat bio je moj poklon samoj sebi. Potpuno uživam – i zaslužila sam to.' ),
  array( 'Eva H.', 5, 'Koristim ga više od tjedan dana i obožavam toplinu i masažu! Ublažio mi je dio boli u vratu i pomaže mi da se opustim prije spavanja.' ),
  array( 'Paula L.', 5, 'Kupila sam ga kćeri i ona ga obožava! Cijeli dan radi na nogama… nakon prvog korištenja dotrčala je reći mi kako se dobro osjeća i kako joj je ublažio bol.' ),
  array( 'Sandra L.', 4, 'Obožavam kombinaciju topline, masaže i trakcije! Uz 15 minuta svaki dan vrat mi je osjetno pokretljiviji.' ),
  array( 'Darko B.', 5, 'Vrat i gornji dio leđa potpuno mi se opuste pri svakoj upotrebi. Napetost u ramenima i stres popuštaju dok masažer prolazi kroz svoj program. Fantastično!' ),
  array( 'Višnja S.', 5, 'Oboje imamo bolove u vratu – suprug obožava kombinaciju topline i vibracije, a ja trakciju. Sada se izmjenjujemo. Bolje i spavam jer sam opuštenija.' ),
  array( 'Pavao H.', 5, 'Kupio sam ga kćeri koja ima stresan uredski posao, da joj ublaži napetost. Koristi ga svaki dan i jastuk je nadmašio sva naša očekivanja.' ),
  array( 'Katarina D.', 5, 'Bol u vratu popustila mi je već nakon prvog korištenja, a i ramena su mi manje napeta. Cijeli dan gledam u ekrane, a ovaj mi je jastuk jako pomogao.' ),
);

$ntp_n = 0; // števec sekcij za izmenična ozadja
$ntp_cls = function() use ( &$ntp_n ) { $ntp_n++; return ( $ntp_n % 2 ) ? ' ntp-tint' : ''; };
$ntp_mark = function( $v ) {
  if ( 'y' === $v ) { return '<span class="ntp-yes" aria-label="da">✓</span>'; }
  if ( 'n' === $v ) { return '<span class="ntp-no" aria-label="ne">✕</span>'; }
  return '<span class="ntp-word">' . esc_html( $v ) . '</span>';
};
?>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap">

<!-- 1) POGLEDAJTE KAKO DJELUJE ("See how Thera Pillow works" / "3-in-1 Neck Reset") — 3 kartice z videi -->
<section class="ntp-sec<?php echo $ntp_cls(); ?>">
  <div class="ntp-wrap">
    <p class="ntp-kicker ntp-c">Reset vrata 3 u 1</p>
    <h2 class="ntp-h2 ntp-c">Pogledajte kako djeluje <em>NORIKS TheraPillow</em></h2>
    <p class="ntp-lead ntp-c">NORIKS TheraPillow spaja cervikalnu trakciju s umirujućom terapijom toplinom i vibracijom. Dovoljno je <strong>15 minuta</strong> da osjetite kako se vrat opušta, a napetost nestaje.</p>
    <div class="ntp-how">
      <?php foreach ( $ntp_how as $h ) : ?>
      <article class="ntp-how__card">
        <?php echo $ntp_video( $h[0], $h[1] . ' – NORIKS TheraPillow', 'ntp-vid--sq' ); ?>
        <div class="ntp-how__body">
          <p class="ntp-how__tag"><?php echo esc_html( $h[1] ); ?></p>
          <h3><?php echo esc_html( $h[2] ); ?></h3>
          <p><?php echo wp_kses( $h[3], array( 'strong' => array() ) ); ?></p>
        </div>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- 2) DUBOKI RESET ("Unlock Deep Reset With Combined Power of Stretching & Relaxation") — video ob besedilu -->
<section class="ntp-sec<?php echo $ntp_cls(); ?>">
  <div class="ntp-wrap">
    <div class="ntp-row2">
      <div class="ntp-media"><?php echo $ntp_video( 'ntp-s02-reset.mp4', 'NORIKS TheraPillow – memorijska pjena, toplina, vibracija i trakcija', 'ntp-vid--wide' ); ?></div>
      <div class="ntp-copy">
        <p class="ntp-kicker">Istezanje i opuštanje</p>
        <h2 class="ntp-h3">Otključajte duboki reset uz <em>spojenu snagu istezanja i opuštanja</em></h2>
        <p>NORIKS TheraPillow spaja <strong>toplinu, vibraciju i cervikalnu trakciju</strong>: samo 15 minuta dnevno ublažava ukočenost, stres i nakupljenu napetost zbog pognutog držanja glave.</p>
        <p class="ntp-big">Samo 15 minuta dnevno.</p>
      </div>
    </div>
  </div>
</section>

<!-- 3) ČETIRI VELIKE NADOGRADNJE ("Four Major Upgrades To The Thera Pillow") — 4 ikone -->
<section class="ntp-sec<?php echo $ntp_cls(); ?>">
  <div class="ntp-wrap">
    <p class="ntp-kicker ntp-c">Nova generacija</p>
    <h2 class="ntp-h2 ntp-c">Četiri velike nadogradnje <em>NORIKS TheraPillow jastuka</em></h2>
    <div class="ntp-upg">
      <?php foreach ( $ntp_upg as $u ) : ?>
      <div class="ntp-upg__card">
        <div class="ntp-upg__ic"><?php echo $ntp_img( $u[0], $u[1] ); ?></div>
        <h3><?php echo esc_html( $u[1] ); ?></h3>
        <p><?php echo esc_html( $u[2] ); ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- 4) 14X JEFTINIJE OD TJEDNIH TERMINA ("14x Cheaper Than Weekly Appointments") — slika ob besedilu -->
<section class="ntp-sec<?php echo $ntp_cls(); ?>">
  <div class="ntp-wrap">
    <div class="ntp-row2 ntp-row2--rev">
      <div class="ntp-media"><?php echo $ntp_img( 'ntp-s04-opustanje.webp', 'Žena se opušta na jastuku za vrat NORIKS TheraPillow', 'ntp-img--free' ); ?></div>
      <div class="ntp-copy">
        <p class="ntp-kicker">Sigurno i opuštajuće dnevno resetiranje</p>
        <h2 class="ntp-h3">14x jeftinije <em>od tjednih termina</em></h2>
        <p>NORIKS TheraPillow isplati se za nekoliko dana, a ne mjeseci. Platite <strong>samo jednom</strong> i dobivate dosljedno, nježno olakšanje svake večeri.</p>
        <ul class="ntp-ticks">
          <li>Bez dogovaranja termina</li>
          <li>Bez odlazaka i čekanja</li>
          <li>Bez ponavljajućih troškova</li>
        </ul>
        <p class="ntp-big">Pravo na povrat u roku od 30 dana.</p>
      </div>
    </div>
  </div>
</section>

<!-- 5) DIZAJNIRALI INŽENJERI ("Designed By Engineers. Built For Premium Relief.") — slika ob besedilu -->
<section class="ntp-sec<?php echo $ntp_cls(); ?>">
  <div class="ntp-wrap">
    <div class="ntp-row2">
      <div class="ntp-media"><?php echo $ntp_img( 'ntp-s05-dizajn.webp', 'Ruka na teksturiranoj navlaci jastuka NORIKS TheraPillow', 'ntp-img--free' ); ?></div>
      <div class="ntp-copy">
        <p class="ntp-kicker">Vrhunska izrada</p>
        <h2 class="ntp-h3">Dizajnirali inženjeri. <em>Izrađen za vrhunsko olakšanje.</em></h2>
        <p>NORIKS TheraPillow nije samo masažer za vrat. To je <strong>uređaj za terapiju vrata sve u jednom</strong> koji opušta čvorove, ublažava napetost mišića i podupire prirodnu zakrivljenost vrata.</p>
        <p class="ntp-big">Toplina, vibracija i trakcija – u jednom jastuku.</p>
      </div>
    </div>
  </div>
</section>

<!-- 6) PO ČEMU JE NORIKS TheraPillow POSEBAN ("What Makes Callixe So Special?") — primerjalna tabela ob sliki -->
<section class="ntp-sec<?php echo $ntp_cls(); ?>">
  <div class="ntp-wrap">
    <div class="ntp-row2 ntp-row2--rev ntp-row2--top">
      <div class="ntp-media"><?php echo $ntp_img( 'ntp-s06-usporedba.webp', 'Ruka na jastuku NORIKS TheraPillow na krevetu', 'ntp-img--free' ); ?></div>
      <div class="ntp-copy">
        <p class="ntp-kicker">Usporedba</p>
        <h2 class="ntp-h3">Po čemu je <em>NORIKS TheraPillow</em> poseban?</h2>
        <p>U NORIKS-u smo ponosni na kvalitetu i sigurnost. Svaki proizvod pažljivo je provjeren kako bi bio <strong>siguran, pouzdan i dugotrajan</strong>.</p>
        <div class="ntp-cmp" role="table" aria-label="Usporedba NORIKS TheraPillow s drugim masažerima i jastucima">
          <div class="ntp-cmp__row ntp-cmp__head" role="row">
            <span role="columnheader"></span>
            <span role="columnheader" class="ntp-cmp__us">NORIKS</span>
            <span role="columnheader">Drugi masažeri</span>
            <span role="columnheader">Drugi jastuci</span>
          </div>
          <?php foreach ( $ntp_cmp as $r ) : ?>
          <div class="ntp-cmp__row" role="row">
            <span role="cell" class="ntp-cmp__lbl"><?php echo esc_html( $r[0] ); ?></span>
            <span role="cell" class="ntp-cmp__us"><?php echo $ntp_mark( $r[1] ); ?></span>
            <span role="cell"><?php echo $ntp_mark( $r[2] ); ?></span>
            <span role="cell"><?php echo $ntp_mark( $r[3] ); ?></span>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- 7) ŠTO KAŽU NAŠI KUPCI ("Hear what our customers have to say") — 8 fotografij + 5 mnenj -->
<section class="ntp-sec<?php echo $ntp_cls(); ?>">
  <div class="ntp-wrap">
    <p class="ntp-kicker ntp-c"><?php echo $ntp_stars( 5 ); ?> Tisuće zadovoljnih kupaca</p>
    <h2 class="ntp-h2 ntp-c">Poslušajte što kažu <em>naši kupci</em></h2>
    <div class="ntp-wall">
      <?php foreach ( $ntp_rv_foto as $i => $r ) : ?>
      <article class="ntp-card">
        <div class="ntp-card__img"><?php echo $ntp_img( $r[0], 'Kupac s jastukom NORIKS TheraPillow – fotografija kupca' ); ?></div>
        <div class="ntp-card__body">
          <?php echo $ntp_stars( 5 ); ?>
          <p class="ntp-card__txt">„<?php echo wp_kses( $r[2], array( 'strong' => array() ) ); ?>”</p>
          <p class="ntp-card__name"><?php echo esc_html( $r[1] ); ?> <span class="ntp-ok">✓ Potvrđena kupnja</span></p>
        </div>
      </article>
      <?php if ( isset( $ntp_rv_txt[ $i ] ) ) : $t = $ntp_rv_txt[ $i ]; ?>
      <article class="ntp-card ntp-card--txt">
        <div class="ntp-card__body">
          <span class="ntp-q" aria-hidden="true">“</span>
          <p class="ntp-card__txt"><?php echo esc_html( $t[1] ); ?></p>
          <?php echo $ntp_stars( 5 ); ?>
          <p class="ntp-card__name"><?php echo esc_html( $t[0] ); ?> <span class="ntp-ok">✓ Potvrđena kupnja</span></p>
        </div>
      </article>
      <?php endif; ?>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- 8) U PAKETU I SPECIFIKACIJE ("Inside Package" / "Specifications") — slika ob besedilu -->
<section class="ntp-sec<?php echo $ntp_cls(); ?>">
  <div class="ntp-wrap">
    <div class="ntp-row2 ntp-row2--top">
      <div class="ntp-media"><?php echo $ntp_img( 'ntp-s08-paket.webp', 'Sadržaj paketa NORIKS TheraPillow: jastuk, USB-C kabel, priručnik i vrećica', 'ntp-img--free ntp-img--pack' ); ?></div>
      <div class="ntp-copy">
        <p class="ntp-kicker">U paketu i specifikacije</p>
        <h2 class="ntp-h3">Što se nalazi <em>u paketu</em></h2>
        <ol class="ntp-pack">
          <?php foreach ( $ntp_pack as $p ) : ?><li><?php echo esc_html( $p ); ?></li><?php endforeach; ?>
        </ol>
        <h3 class="ntp-h4">Specifikacije</h3>
        <dl class="ntp-spec">
          <?php foreach ( $ntp_spec as $s ) : ?>
          <div><dt><?php echo esc_html( $s[0] ); ?></dt><dd><?php echo esc_html( $s[1] ); ?></dd></div>
          <?php endforeach; ?>
        </dl>
      </div>
    </div>
  </div>
</section>

<!-- 9) RECENZIJE KUPACA (Loox 7,755 -> 1081 po NORIKS) -->
<section class="ntp-sec<?php echo $ntp_cls(); ?>">
  <div class="ntp-wrap">
    <p class="ntp-kicker ntp-c">Recenzije kupaca</p>
    <h2 class="ntp-h2 ntp-c">Recenzije <em>NORIKS TheraPillow</em></h2>
    <div class="ntp-score">
      <?php echo $ntp_stars( 5 ); ?>
      <span class="ntp-score__txt">Na temelju 1081 recenzije</span>
    </div>
    <div class="ntp-reviews">
      <?php foreach ( $ntp_rv2 as $r ) : ?>
      <article class="ntp-card">
        <div class="ntp-card__body">
          <?php echo $ntp_stars( $r[1] ); ?>
          <p class="ntp-card__txt">„<?php echo esc_html( $r[2] ); ?>”</p>
          <p class="ntp-card__name"><?php echo esc_html( $r[0] ); ?> <span class="ntp-ok">✓ Potvrđena kupnja</span></p>
        </div>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<style>
/* NORIKS stil (predloga why-calmingcollar.php / why-hands.php): oznaka + naslov z ležečim poudarkom, slika ob
   besedilu, izmenjujoča ozadja in strani. Paleta originala: skrilasto modra #2c3b4e, cimetova #a35139, »soft bone« #efebe1. */
.ntp-sec { padding: 60px 0; font-family: 'Poppins', system-ui, -apple-system, 'Segoe UI', Roboto, Arial, sans-serif; color: #1c2632; background: #fff; }
.ntp-sec * { box-sizing: border-box; }
.ntp-tint { background: #efebe1; }
.ntp-wrap { width: 100%; max-width: 1200px; margin: 0 auto; padding: 0 24px; }
.ntp-c { text-align: center; }
.ntp-sec h2, .ntp-sec h3 { font-family: inherit; text-transform: none; letter-spacing: 0; }
.ntp-kicker, .ntp-copy p.ntp-kicker { font-size: 12.5px; line-height: 1.4; font-weight: 700; letter-spacing: .14em; text-transform: uppercase; color: #a35139; margin: 0 0 10px; }
.ntp-kicker .ntp-stars { letter-spacing: 1px; margin-right: 6px; }
.ntp-h2 { font-weight: 700; font-size: clamp(25px, 3.1vw, 36px); line-height: 1.2; margin: 0 0 18px; color: #1c2632; }
.ntp-h2 em, .ntp-h3 em { font-style: italic; color: #a35139; }
.ntp-h3 { font-weight: 700; font-size: clamp(22px, 2.6vw, 30px); line-height: 1.25; margin: 0 0 16px; color: #1c2632; }
.ntp-h4 { font-weight: 700; font-size: 18px; line-height: 1.35; margin: 22px 0 10px; color: #1c2632; }
.ntp-sec img { display: block; width: 100%; height: auto; }
.ntp-lead { max-width: 760px; margin: 0 auto 32px; font-size: 16.5px; line-height: 1.7; color: #3f4752; }
.ntp-lead strong { color: #1c2632; font-weight: 600; }

/* slika ob besedilu */
.ntp-row2 { display: grid; grid-template-columns: 1fr 1fr; gap: 56px; align-items: center; }
.ntp-row2--top { align-items: start; }
.ntp-row2--rev .ntp-media { order: 2; }
.ntp-media > img { border-radius: 10px; box-shadow: 0 2px 4px rgba(28,38,50,.05), 0 14px 40px rgba(28,38,50,.10); max-width: 560px; margin: 0 auto; aspect-ratio: 1 / 1; object-fit: cover; background: #fff; }
.ntp-media > img.ntp-img--free { aspect-ratio: auto; object-fit: contain; }
.ntp-media > img.ntp-img--pack { background: #1c2632; padding: 18px; }
.ntp-copy p { font-size: 16px; line-height: 1.7; color: #3f4752; margin: 0 0 14px; }
.ntp-copy p strong { color: #1c2632; font-weight: 600; }
.ntp-sec p.ntp-big { font-size: 19px; font-weight: 700; color: #1c2632; line-height: 1.45; margin-top: 6px; }
.ntp-ticks { list-style: none; margin: 4px 0 16px; padding: 0; }
.ntp-ticks li { position: relative; padding-left: 32px; margin: 0 0 10px; font-size: 16px; line-height: 1.55; color: #2a3340; }
.ntp-ticks li::before { content: "✓"; position: absolute; left: 0; top: 1px; width: 22px; height: 22px; border-radius: 50%; background: #2c3b4e; color: #fff; font-size: 12px; font-weight: 800; line-height: 22px; text-align: center; }

/* videi */
.ntp-vid { position: relative; overflow: hidden; background: #1c2632; border-radius: 10px; margin: 0 auto; box-shadow: 0 2px 4px rgba(28,38,50,.05), 0 14px 40px rgba(28,38,50,.10); }
.ntp-vid video { display: block; width: 100%; height: 100%; object-fit: cover; }
.ntp-vid--sq { aspect-ratio: 1 / 1; border-radius: 10px 10px 0 0; box-shadow: none; }
.ntp-vid--wide { aspect-ratio: 16 / 9; max-width: 620px; }

/* kako djeluje */
.ntp-how { display: grid; grid-template-columns: repeat(3, minmax(0, 1fr)); gap: 20px; }
.ntp-how__card { background: #fff; border: 1px solid #ddd6c8; border-radius: 10px; overflow: hidden; box-shadow: 0 2px 10px rgba(28,38,50,.06); display: flex; flex-direction: column; }
.ntp-how__body { padding: 18px 20px 20px; }
.ntp-how__body p.ntp-how__tag { display: inline-block; background: #2c3b4e; color: #fff; border-radius: 999px; padding: 4px 12px; font-size: 12.5px; font-weight: 600; margin: 0 0 10px; }
.ntp-how__body h3 { font-size: 18px; font-weight: 700; line-height: 1.35; color: #1c2632; margin: 0 0 8px; }
.ntp-how__body p { font-size: 15px; line-height: 1.65; color: #3f4752; margin: 0; }
.ntp-how__body p strong { color: #1c2632; font-weight: 600; }

/* nadogradnje */
.ntp-upg { display: grid; grid-template-columns: repeat(4, minmax(0, 1fr)); gap: 18px; margin-top: 14px; }
.ntp-upg__card { background: #fff; border: 1px solid #ddd6c8; border-radius: 10px; padding: 24px 20px 22px; text-align: center; box-shadow: 0 2px 10px rgba(28,38,50,.05); }
.ntp-sec:not(.ntp-tint) .ntp-upg__card { background: #f8f6f1; }
.ntp-upg__ic { width: 74px; height: 74px; margin: 0 auto 14px; }
.ntp-upg__card h3 { font-size: 16.5px; font-weight: 700; color: #1c2632; margin: 0 0 6px; line-height: 1.35; }
.ntp-upg__card p { font-size: 14.5px; line-height: 1.6; color: #3f4752; margin: 0; }

/* usporedba */
.ntp-cmp { margin: 8px 0 0; border-radius: 10px; overflow: hidden; border: 1px solid #ddd6c8; background: #fff; }
.ntp-cmp__row { display: grid; grid-template-columns: 1.7fr 1fr 1fr 1fr; align-items: center; border-top: 1px solid #ece6da; }
.ntp-cmp__row:first-child { border-top: 0; }
.ntp-cmp__row > span { padding: 12px 8px; text-align: center; font-size: 14px; color: #3f4752; }
.ntp-cmp__row > span.ntp-cmp__lbl { text-align: left; padding-left: 16px; font-weight: 600; color: #1c2632; }
.ntp-cmp__head > span { font-size: 12.5px; font-weight: 700; text-transform: uppercase; letter-spacing: .06em; color: #5b6470; }
.ntp-cmp__row > span.ntp-cmp__us { background: #2c3b4e; color: #fff; }
.ntp-cmp__head > span.ntp-cmp__us { color: #fff; font-size: 14px; letter-spacing: .1em; }
.ntp-yes, .ntp-no { display: inline-block; width: 22px; height: 22px; border-radius: 50%; font-size: 12px; font-weight: 800; line-height: 22px; text-align: center; }
.ntp-yes { background: #2f9e5f; color: #fff; }
.ntp-cmp__us .ntp-yes { background: #fff; color: #2c3b4e; }
.ntp-no { background: #e6e1d6; color: #8a8f97; }
.ntp-word { font-weight: 700; font-size: 12.5px; letter-spacing: .08em; }

/* kartice mnenj */
.ntp-card { background: #fff; border: 1px solid #ddd6c8; border-radius: 10px; overflow: hidden; display: flex; flex-direction: column; box-shadow: 0 2px 10px rgba(28,38,50,.05); }
.ntp-sec:not(.ntp-tint) .ntp-card { background: #f8f6f1; }
.ntp-card__img img { aspect-ratio: 3 / 4; object-fit: cover; }
.ntp-card__body { padding: 16px; }
.ntp-card__txt { font-size: 14.5px; line-height: 1.6; color: #2a3340; margin: 8px 0 10px; font-style: italic; }
.ntp-card__txt strong { font-weight: 600; color: #1c2632; }
.ntp-card__name { font-size: 13.5px; font-weight: 600; color: #1c2632; margin: 0; }
.ntp-card--txt { background: #2c3b4e !important; border-color: #2c3b4e; }
.ntp-card--txt .ntp-card__txt { color: #fff; font-size: 16px; font-style: normal; font-weight: 500; }
.ntp-card--txt .ntp-card__name { color: #ede9de; }
.ntp-card--txt .ntp-ok { color: #9fd9b5; }
.ntp-q { display: block; font-family: Georgia, serif; font-size: 46px; line-height: .8; color: #feb161; }
.ntp-wall { columns: 4; column-gap: 18px; }
.ntp-wall > .ntp-card { break-inside: avoid; margin-bottom: 18px; }

/* u paketu */
.ntp-pack { list-style: none; counter-reset: ntp; margin: 0 0 6px; padding: 0; }
.ntp-pack li { counter-increment: ntp; position: relative; padding-left: 38px; margin: 0 0 10px; font-size: 16px; line-height: 1.55; color: #2a3340; }
.ntp-pack li::before { content: counter(ntp); position: absolute; left: 0; top: 0; width: 26px; height: 26px; border-radius: 50%; background: #2c3b4e; color: #fff; font-size: 13px; font-weight: 700; line-height: 26px; text-align: center; }
.ntp-spec { margin: 0; border: 1px solid #ddd6c8; border-radius: 10px; overflow: hidden; background: #fff; }
.ntp-spec > div { display: grid; grid-template-columns: 150px 1fr; gap: 12px; padding: 10px 14px; border-top: 1px solid #ece6da; }
.ntp-spec > div:first-child { border-top: 0; }
.ntp-spec dt { font-weight: 600; font-size: 14px; color: #1c2632; }
.ntp-spec dd { margin: 0; font-size: 14px; line-height: 1.55; color: #3f4752; }

/* ocjene */
.ntp-stars { color: #f2a516; letter-spacing: 1px; font-size: 15px; }
.ntp-stars__off { color: #dcd6ca; }
.ntp-ok { color: #2f9e5f; font-weight: 600; font-size: 12px; margin-left: 4px; font-style: normal; }
.ntp-score { display: flex; justify-content: center; align-items: center; gap: 12px; margin: -4px 0 26px; flex-wrap: wrap; }
.ntp-score .ntp-stars { font-size: 20px; }
.ntp-score__txt { font-size: 14.5px; color: #5b6470; }
.ntp-reviews { columns: 4; column-gap: 18px; }
.ntp-reviews > .ntp-card { break-inside: avoid; margin-bottom: 18px; }

@media (max-width: 989px) {
  .ntp-row2 { gap: 32px; }
  .ntp-how { grid-template-columns: 1fr 1fr 1fr; gap: 14px; }
  .ntp-upg { grid-template-columns: 1fr 1fr; }
  .ntp-wall, .ntp-reviews { columns: 3; }
}
@media (max-width: 749px) {
  .ntp-sec { padding: 42px 0; }
  .ntp-wrap { padding: 0 16px; }
  .ntp-row2 { grid-template-columns: 1fr; gap: 24px; }
  .ntp-row2--rev .ntp-media { order: 0; }
  .ntp-how { grid-template-columns: 1fr; }
  .ntp-wall, .ntp-reviews { columns: 2; column-gap: 12px; }
  .ntp-wall > .ntp-card, .ntp-reviews > .ntp-card { margin-bottom: 12px; }
  .ntp-card__body { padding: 12px; }
  .ntp-cmp__row { grid-template-columns: 1.4fr 1fr 1fr 1fr; }
  .ntp-cmp__row > span { padding: 10px 4px; font-size: 12.5px; }
  .ntp-cmp__row > span.ntp-cmp__lbl { padding-left: 10px; }
  .ntp-cmp__head > span { font-size: 10.5px; letter-spacing: .02em; }
  .ntp-spec > div { grid-template-columns: 120px 1fr; }
}
@media (max-width: 480px) {
  .ntp-upg { grid-template-columns: 1fr; }
  .ntp-reviews { columns: 1; }
}

/* galerija izdelka: sličice največ v 2 vrstah (5 na vrsto), ostale slike so dosegljive z drsenjem glavne slike */
.product_cat-orto-therapillow .flex-control-thumbs li:nth-child(n+11) { display: none !important; }

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
.woocommerce-product-details__short-description .ntp-tick {
  position: absolute !important; left: 0 !important; top: 1px !important;
  width: 21px; height: 21px; border-radius: 50%;
  background: #2f9e5f !important; color: #fff !important;
  font-size: 12px !important; font-weight: 800 !important; line-height: 21px !important;
  text-align: center !important; display: inline-block !important; }
.woocommerce-product-details__short-description p:first-of-type { font-size: 16px; line-height: 1.55; }
</style>
