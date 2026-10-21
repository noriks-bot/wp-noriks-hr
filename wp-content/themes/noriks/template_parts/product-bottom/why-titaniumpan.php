<?php
/**
 * product-bottom: NORIKS TitaniumPan — titanijska kovana tava bez premaza (orto-titaniumpan).
 * Original: siraatskitchen.com (Titanium Hammered Pan Pro Standard) — vsebina in vrstni red 1:1,
 * oblika po NORIKS stilu (predloga why-hands.php / why-raincoat.php):
 *   1) Zasto titanij (nakupna skatla) — video ob besedilu
 *   2) Sest znacajk (indukcija, pecnica, brez toksinov, perilica, kovinski pribor, hladna rocaj)
 *   3) Pregled (zavihek "Overview") — slika ob besedilu
 *   4) Netoksicni materiali — video ob besedilu (HR napisi)
 *   5) Detalji, konstrukcija, v paketu, nega (zavihki nakupne skatle)
 *   6) Mnenje kupca (proof band; videi originala z znamko konkurenta so izpusceni)
 *   7) Unutar svake tave — 3 sloji, video ob besedilu
 *   8) Zakovice / rocaj / rob — 3 vrstice slika ob besedilu
 *   9) Zakaj so tradicionalne ponve preteklost
 *  10) Primerjava s teflonom (vrstica "75-year warranty" izpuscena — NORIKS pogoji)
 *  11) Pogledajte je na djelu — video ob besedilu
 *  12) Iz zajednice — videi kupcev (utisani, HR napisi)
 *  13) Recenzije (preprosta mreza)
 * NORIKS pogoji: 30 dana za povrat, besplatna dostava iznad 70 € (namesto 75-letne garancije in
 * brezplacnih vracil). Darila (e-knjiga, cistilec vode, mystery gift) in nadgradnja v set so izpusceni.
 * Slike / videi: img/titaniumpan/ (original, brez tuje znamke, napisi prevedeni).
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$ntp      = get_template_directory_uri() . '/img/titaniumpan/';
$ntp_path = get_template_directory() . '/img/titaniumpan/';
$ntp_img  = function( $file, $alt ) use ( $ntp, $ntp_path ) {
  if ( ! $file || ! file_exists( $ntp_path . $file ) ) { return ''; }
  return '<img src="' . esc_url( $ntp . $file ) . '" alt="' . esc_attr( $alt ) . '" loading="lazy">';
};
$ntp_vid  = function( $file ) use ( $ntp, $ntp_path ) {
  if ( ! $file || ! file_exists( $ntp_path . $file . '.mp4' ) ) { return ''; }
  return '<video src="' . esc_url( $ntp . $file . '.mp4' ) . '" poster="' . esc_url( $ntp . $file . '-poster.webp' ) . '" muted autoplay loop playsinline preload="metadata"></video>';
};
$ntp_stars = function( $n ) {
  $n = max( 0, min( 5, (int) $n ) );
  $out = '<span class="ntp-stars" aria-label="' . esc_attr( $n . ' od 5 zvjezdica' ) . '">';
  for ( $i = 1; $i <= 5; $i++ ) { $out .= '<i' . ( $i > $n ? ' class="is-off"' : '' ) . '>★</i>'; }
  return $out . '</span>';
};
$ntp_allowed = array( 'strong' => array(), 'em' => array(), 'br' => array() );

/* 2) sest znacajk iz nakupne skatle */
$ntp_feats = array(
  array( 'Za indukciju', 'Radi na svim pločama za kuhanje — i na indukciji — zahvaljujući dnu od nehrđajućeg čelika 430.' ),
  array( 'Za pećnicu', 'Otporna na temperaturu do 548 °C — nigdje nema plastičnih dijelova.' ),
  array( 'Bez toksina', 'Neovisno testirana u laboratoriju Light Labs — PFAS, PTFE, olovo i kadmij nisu otkriveni.' ),
  array( 'Za perilicu posuđa', 'Može se prati u perilici posuđa — kratko ručno pranje godinama čuva sjaj.' ),
  array( 'Za metalni pribor', 'Metalne lopatice, pjenjače i hvataljke nisu problem — titanijska površina otporna je na ogrebotine.' ),
  array( 'Ručka ostaje hladna', 'Ergonomske ručke oblikovane su tako da ostanu hladne na štednjaku — od pečenja do tanjura bez krpe.' ),
);

/* 5) detalji (zavihki nakupne skatle) */
$ntp_details = array(
  array( 'Titanijska kovana tava', array( 'Promjer: 28 cm / 11″', 'Visina: 6,3 cm / 2,5″', 'Za sve ploče za kuhanje, uključujući indukciju' ) ),
  array( 'Konstrukcija', array( 'Potpuno troslojna izvedba', 'Donji sloj: 0,6 mm nehrđajućeg čelika (430) – za indukciju', 'Jezgra: 1 mm aluminija – brza, ravnomjerna raspodjela topline', 'Površina za kuhanje: 0,5 mm čistog titanija s kovanim uzorkom – prirodno neljepljiva, bez toksina i iznimno izdržljiva' ) ),
  array( 'U paketu', array( 'Titanijska kovana tava, sigurno zapakirana u posebnu zaštitnu kutiju', '5 osnovnih vodiča – savjeti za njegu, prvo pripremanje tave i profesionalne tehnike kuhanja' ) ),
  array( 'Njega i upotreba', array( 'Otporna na temperaturu do 548 °C', 'Može se prati u perilici posuđa', 'Sigurna za metalni pribor', 'Neljepljivost aktivirajte s 1 žličicom ulja s visokom točkom dimljenja prije kuhanja', 'Titanijsku površinu lako očistite s malo deterdženta i spužvom' ) ),
);

/* 8) zakovice / rocaj / rob */
$ntp_rows = array(
  array( 'slika' => 'tp-f1-zakovice.webp', 'oznaka' => 'Vrhunske zakovice',
    'naslov' => 'Trostruko <em>zakovane ručke</em>',
    'tekst'  => 'Trostruko zakovane ručke čvrsto su pričvršćene za tijelo tave i <strong>ostaju čvrste kroz godine</strong> korištenja u pećnici i na štednjaku.' ),
  array( 'slika' => 'tp-f2-rucka.webp', 'oznaka' => 'Ručka ostaje hladna',
    'naslov' => 'Od pečenja do tanjura <em>bez krpe</em>',
    'tekst'  => 'Ergonomske ručke oblikovane su tako da <strong>ostanu hladne na štednjaku</strong>, pa hranu možete prebaciti na tanjur bez posezanja za krpom.' ),
  array( 'slika' => 'tp-f3-rub.webp', 'oznaka' => 'Zaobljeni rubovi',
    'naslov' => 'Čisto izlijevanje <em>bez kapanja</em>',
    'tekst'  => 'Precizno zaobljeni rubovi omogućuju <strong>čisto izlijevanje bez kapanja</strong> izravno na tanjur ili u zdjelu.' ),
);

/* 9) tradicionalne tave */
$ntp_past = array(
  array( 'PFAS / teflon', 'Neljepljivi premazi troše se, grebu i ljušte u hranu — a pri pregrijavanju ispuštaju pare.', false ),
  array( 'Nehrđajući čelik', 'Siguran je, ali bez prave tehnike i stalnog pazenja na temperaturu sve se lijepi.', false ),
  array( 'Čisti titanij', 'Površina bez premaza koja lijepo zapeče hranu i prirodno je otpušta — za cijeli život, ne za jednu sezonu.', true ),
);

/* 10) primerjava */
$ntp_compare = array(
  array( 'Bez PFAS-a i PTFE-a', '✓', '✕' ),
  array( 'Površina za kuhanje od čistog titanija', '✓', '✕' ),
  array( 'Nema premaza koji se grebe ili ljušti', '✓', '✕' ),
  array( 'Sigurna za metalni pribor', '✓', '✕' ),
  array( 'Za pećnicu do 548 °C', '✓', 'Ograničeno' ),
  array( 'Za indukciju', '✓', 'Ovisi' ),
  array( 'Za perilicu posuđa', '✓', 'Propada' ),
);

/* 12) videi kupcev */
$ntp_ugc = array(
  array( 'video' => 'tp-video-sarah', 'ime' => 'Sarah M.' ),
  array( 'video' => 'tp-video-lora-hr', 'ime' => 'Lora K.' ),
  array( 'video' => 'tp-video-jake-hr', 'ime' => 'Jake N.' ),
);

/* 13) recenzije 1:1 z originala (5 prikazanih recenzij, vse 5 zvezdic) */
$ntp_reviews = array(
  array( 'ime' => 'Marilyn B.', 'naslov' => 'Radi kako je obećano',
    'tekst' => 'Slijedila sam vaše upute, napravila kajganu i savršeno je skliznula s tave. Zadovoljna sam i rješavam se (ili poklanjam) svojih tava s premazom. Treba mi samo ova nova.' ),
  array( 'ime' => 'J. A.', 'naslov' => 'Odlični proizvodi, odlična usluga',
    'tekst' => 'Proizvod koji smo kupili točno je onakav kakav je ponuđen. Kvaliteta izrade i materijala vrlo je dobra. Korisnička podrška je izvrsna — pitali smo nešto o dostavi i javljali su nam se sve dok nismo primili paket.' ),
  array( 'ime' => 'Sarah M.', 'naslov' => 'Brz i koristan odgovor',
    'tekst' => 'Brz i koristan odgovor. Jedva čekam svoju tavu!' ),
  array( 'ime' => 'Danny', 'naslov' => 'Pravodobna i iskrena komunikacija',
    'tekst' => 'Pravodobna i iskrena komunikacija s korisničkom podrškom. Znao sam što se događa i brzo dobio informacije koje sam tražio.' ),
  array( 'ime' => 'Caliann', 'naslov' => 'Brza i temeljita podrška',
    'tekst' => 'Vrlo brz i temeljit odgovor korisničke podrške e-mailom na pitanje o proizvodu. Prije nekoliko mjeseci kupila sam i titanijski wok i radi točno kako sam očekivala. Sad mi je omiljeno posuđe.' ),
);
$ntp_dist = array( 5 => array( '1,9 tis.', 83 ), 4 => array( '337', 15 ), 3 => array( '38', 2 ), 2 => array( '6', 0 ), 1 => array( '3', 0 ) );
?>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap">

<!-- 1) ZASTO TITANIJ — video ob besedilu -->
<section class="ntp-sec ntp-tint">
  <div class="ntp-wrap">
    <div class="ntp-row2">
      <div class="ntp-media"><?php echo $ntp_vid( 'tp-video-kuhanje' ); ?></div>
      <div class="ntp-copy">
        <p class="ntp-kicker">Zašto titanij</p>
        <h2 class="ntp-h3">Bez premaza, <em>bez PFAS-a</em></h2>
        <p><strong>◆ Bez premaza, bez PFAS-a.</strong> Površina za kuhanje od čistog titanija — neovisno testirana u laboratoriju Light Labs.</p>
        <p><strong>◆ Prirodno neljepljiva.</strong> Kovana mikrotekstura lijepo zapeče hranu i otpušta je uz malo ulja.</p>
        <p><strong>◆ Jedna poštena tava.</strong> Izrađena da nadživi svaku tavu s premazom koju ste ikad bacili.</p>
        <p class="ntp-big">Pravo na povrat u roku od 30 dana · Besplatna dostava za narudžbe iznad 70 €.</p>
      </div>
    </div>
  </div>
</section>

<!-- 2) SEST ZNACAJK -->
<section class="ntp-sec">
  <div class="ntp-wrap">
    <p class="ntp-kicker ntp-c">Značajke</p>
    <h2 class="ntp-h2 ntp-c">Jedna tava <em>za sve</em></h2>
    <div class="ntp-cards ntp-cards--3">
      <?php foreach ( $ntp_feats as $f ) : ?>
      <div class="ntp-card"><h3><?php echo esc_html( $f[0] ); ?></h3><p><?php echo esc_html( $f[1] ); ?></p></div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- 3) PREGLED — slika ob besedilu -->
<section class="ntp-sec ntp-tint">
  <div class="ntp-wrap">
    <div class="ntp-row2 ntp-row2--rev">
      <div class="ntp-media"><?php echo $ntp_img( 'tp-01-tava.webp', 'NORIKS TitaniumPan titanijska kovana tava' ); ?></div>
      <div class="ntp-copy">
        <p class="ntp-kicker">Pregled</p>
        <h2 class="ntp-h3">Posljednja tava <em>koja vam ikad treba</em></h2>
        <p>Ova tava izrađena je da bude <strong>neuništiva i da traje cijeli život</strong>. Kovana površina daje profesionalnu raspodjelu topline i izvedbu dostojnu vrhunskih svjetskih kuhara.</p>
        <p>Testirano bez PFAS-a · <strong>Light Labs</strong></p>
        <p class="ntp-big">Bez premaza. Bez toksina. Bez kompromisa.</p>
      </div>
    </div>
  </div>
</section>

<!-- 4) NETOKSICNI MATERIJALI — video ob besedilu -->
<section class="ntp-sec">
  <div class="ntp-wrap">
    <div class="ntp-row2">
      <div class="ntp-media"><?php echo $ntp_vid( 'tp-video-ciscenje-hr' ); ?></div>
      <div class="ntp-copy">
        <p class="ntp-kicker">Netoksični materijali</p>
        <h2 class="ntp-h3">Kuhajte <em>s povjerenjem</em></h2>
        <p>Izrađujemo netoksično, sigurno kuhinjsko posuđe <strong>bez štetnih kemikalija</strong> koje mogu prijeći u hranu i okoliš. Jer vi i vaša obitelj uvijek morate moći vjerovati svom posuđu.</p>
        <p><strong>Naši proizvodi izrađeni su bez:</strong></p>
        <ul class="ntp-x">
          <li>PFAS-a („vječnih kemikalija”)</li><li>PTFE-a (teflona)</li><li>PFOA-e</li>
          <li>olova i kadmija</li><li>nanočestica</li><li>teških metala</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- 5) DETALJI -->
<section class="ntp-sec ntp-tint">
  <div class="ntp-wrap">
    <p class="ntp-kicker ntp-c">Detalji</p>
    <h2 class="ntp-h2 ntp-c">Sve što trebate <em>znati</em></h2>
    <div class="ntp-cards ntp-cards--4">
      <?php foreach ( $ntp_details as $dt ) : ?>
      <div class="ntp-card">
        <h3><?php echo esc_html( $dt[0] ); ?></h3>
        <ul><?php foreach ( $dt[1] as $li ) : ?><li><?php echo esc_html( $li ); ?></li><?php endforeach; ?></ul>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- 6) MNENJE KUPCA -->
<section class="ntp-sec ntp-sec--quote">
  <div class="ntp-wrap ntp-c">
    <p class="ntp-score"><strong>4,8</strong> <?php echo $ntp_stars( 5 ); ?> <span>38.393 recenzija</span></p>
    <blockquote class="ntp-quote">„Ovo je posljednje posuđe koje ću ikad kupiti. Sve se odvaja, ništa se ne lijepi, a i nakon godinu dana svakodnevnog korištenja izgleda kao novo.”</blockquote>
    <p class="ntp-quote__name">Danielle R. <span>· Provjereni kupac</span></p>
  </div>
</section>

<!-- 7) UNUTAR SVAKE TAVE — video ob besedilu -->
<section class="ntp-sec ntp-tint">
  <div class="ntp-wrap">
    <div class="ntp-row2 ntp-row2--rev">
      <div class="ntp-media ntp-media--wide"><?php echo $ntp_vid( 'tp-video-slojevi' ); ?></div>
      <div class="ntp-copy">
        <p class="ntp-kicker">Unutar svake tave</p>
        <h2 class="ntp-h3">Potpuno troslojna <em>izvedba</em></h2>
        <p>Nema „titanijske jezgre” — <strong>titanij je površina na kojoj kuhate</strong>.</p>
        <p><strong>Površina za kuhanje · 0,5 mm čistog titanija</strong><br>Ručno kovana mikrotekstura — prirodno slabo ljepljiva, bez toksina, iznimno izdržljiva.</p>
        <p><strong>Jezgra · 1 mm aluminija</strong><br>Brza, ravnomjerna raspodjela topline po cijelom dnu.</p>
        <p><strong>Dno · 0,6 mm nehrđajućeg čelika (430)</strong><br>Za indukciju, a radi i na plinu, električnim i keramičkim pločama.</p>
      </div>
    </div>
  </div>
</section>

<!-- 8) ZAKOVICE / RUCKA / RUB — strani se izmenjujejo -->
<section class="ntp-sec">
  <div class="ntp-wrap">
    <?php foreach ( $ntp_rows as $i => $row ) : ?>
    <div class="ntp-row2 ntp-row2--detail<?php echo ( 1 === $i % 2 ) ? ' ntp-row2--rev' : ''; ?>">
      <div class="ntp-media ntp-media--wide"><?php echo $ntp_img( $row['slika'], wp_strip_all_tags( $row['naslov'] ) ); ?></div>
      <div class="ntp-copy">
        <p class="ntp-kicker"><?php echo esc_html( $row['oznaka'] ); ?></p>
        <h3 class="ntp-h3"><?php echo wp_kses( $row['naslov'], $ntp_allowed ); ?></h3>
        <p><?php echo wp_kses( $row['tekst'], $ntp_allowed ); ?></p>
      </div>
    </div>
    <?php endforeach; ?>
  </div>
</section>

<!-- 9) TRADICIONALNE TAVE -->
<section class="ntp-sec ntp-tint">
  <div class="ntp-wrap">
    <h2 class="ntp-h2 ntp-c">Zašto su tradicionalne tave <em>prošlost</em></h2>
    <div class="ntp-cards ntp-cards--3">
      <?php foreach ( $ntp_past as $pp ) : ?>
      <div class="ntp-card<?php echo $pp[2] ? ' ntp-card--win' : ''; ?>"><h3><?php echo esc_html( $pp[0] ); ?></h3><p><?php echo esc_html( $pp[1] ); ?></p></div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- 10) USPOREDBA -->
<section class="ntp-sec">
  <div class="ntp-wrap ntp-wrap--narrow">
    <h2 class="ntp-h2 ntp-c">Kako se <em>uspoređuje</em></h2>
    <table class="ntp-cmp">
      <thead><tr><th></th><th>NORIKS TitaniumPan</th><th>Tave s premazom / teflon</th></tr></thead>
      <tbody>
        <?php foreach ( $ntp_compare as $c ) : ?>
        <tr><td><?php echo esc_html( $c[0] ); ?></td><td class="is-yes"><?php echo esc_html( $c[1] ); ?></td><td class="is-no"><?php echo esc_html( $c[2] ); ?></td></tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</section>

<!-- 11) NA DJELU — video ob besedilu -->
<section class="ntp-sec ntp-tint">
  <div class="ntp-wrap">
    <div class="ntp-row2">
      <div class="ntp-media ntp-media--wide"><?php echo $ntp_vid( 'tp-video-na-djelu' ); ?></div>
      <div class="ntp-copy">
        <p class="ntp-kicker">Na djelu</p>
        <h2 class="ntp-h3">Pogledajte je <em>na djelu</em></h2>
        <p>Zapečavanje, prženje, roštiljanje, pirjanje, svakodnevno kuhanje, pečenje u pećnici, kajgana i lagano kuhanje — <strong>jedna tava za sve</strong>.</p>
        <p class="ntp-big">Od jake vatre na štednjaku ravno u pećnicu.</p>
      </div>
    </div>
  </div>
</section>

<!-- 12) IZ ZAJEDNICE — videi kupcev -->
<section class="ntp-sec">
  <div class="ntp-wrap">
    <p class="ntp-kicker ntp-c">Iz zajednice</p>
    <h2 class="ntp-h2 ntp-c">Kuhari kod kuće <em>o svojoj tavi</em></h2>
    <div class="ntp-ugc">
      <?php foreach ( $ntp_ugc as $u ) : ?>
      <figure class="ntp-ugc__item"><?php echo $ntp_vid( $u['video'] ); ?><figcaption><?php echo esc_html( $u['ime'] ); ?></figcaption></figure>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- 13) RECENZIJE — preprosta mreza -->
<section class="ntp-sec ntp-tint ntp-sec--reviews">
  <div class="ntp-wrap">
    <p class="ntp-kicker ntp-c">Recenzije kupaca</p>
    <h2 class="ntp-h2 ntp-c">Što kažu <em>naši kupci</em></h2>
    <div class="ntp-summary">
      <div class="ntp-summary__score"><strong>4,8</strong><?php echo $ntp_stars( 5 ); ?><span>na temelju 2.289 recenzija</span></div>
      <div class="ntp-summary__bars">
        <?php foreach ( $ntp_dist as $z => $d ) : ?>
        <div class="ntp-bar"><span class="ntp-bar__lbl"><?php echo (int) $z; ?> ★</span><span class="ntp-bar__track"><span style="width:<?php echo (int) $d[1]; ?>%"></span></span><span class="ntp-bar__n"><?php echo esc_html( $d[0] ); ?></span></div>
        <?php endforeach; ?>
      </div>
    </div>
    <div class="ntp-revs">
      <?php foreach ( $ntp_reviews as $r ) : ?>
      <article class="ntp-rv">
        <?php echo $ntp_stars( 5 ); ?>
        <p class="ntp-rv__title"><?php echo esc_html( $r['naslov'] ); ?></p>
        <p class="ntp-rv__txt"><?php echo esc_html( $r['tekst'] ); ?></p>
        <p class="ntp-rv__name"><?php echo esc_html( $r['ime'] ); ?> <span>· Provjereni kupac</span></p>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<style>
/* NORIKS stil (predloga why-hands.php / why-raincoat.php): oznaka + naslov z lezecim poudarkom, slika/video ob besedilu,
   izmenjujoca ozadja. Privzeta topla rjava paleta NORIKS (#a9683f). */
.ntp-sec { padding: 60px 0; font-family: 'Poppins', system-ui, -apple-system, 'Segoe UI', Roboto, Arial, sans-serif; color: #231d19; background: #fff; }
.ntp-sec * { box-sizing: border-box; }
.ntp-tint { background: #f7f2ec; }
.ntp-wrap { width: 100%; max-width: 1200px; margin: 0 auto; padding: 0 24px; }
.ntp-wrap--narrow { max-width: 860px; }
.ntp-c { text-align: center; }
.ntp-sec h2, .ntp-sec h3 { font-family: inherit; text-transform: none; letter-spacing: 0; }
.ntp-kicker, .ntp-copy p.ntp-kicker { font-size: 12.5px; line-height: 1.4; font-weight: 700; letter-spacing: .14em; text-transform: uppercase; color: #a9683f; margin: 0 0 10px; }
.ntp-h2 { font-weight: 700; font-size: clamp(25px, 3.1vw, 36px); line-height: 1.2; margin: 0 0 30px; color: #231d19; }
.ntp-h2 em, .ntp-h3 em { font-style: italic; color: #a9683f; }
.ntp-h3 { font-weight: 700; font-size: clamp(22px, 2.6vw, 30px); line-height: 1.25; margin: 0 0 16px; color: #231d19; }
.ntp-sec img, .ntp-sec video { display: block; width: 100%; height: auto; }

/* slika/video ob besedilu */
.ntp-row2 { display: grid; grid-template-columns: 1fr 1fr; gap: 56px; align-items: center; }
.ntp-row2--rev .ntp-media { order: 2; }
.ntp-row2--detail + .ntp-row2--detail { margin-top: 40px; }
.ntp-media img, .ntp-media video { aspect-ratio: 1 / 1; object-fit: cover; border-radius: 4px; box-shadow: 0 2px 4px rgba(40,25,15,.05), 0 14px 40px rgba(40,25,15,.10); }
.ntp-media--wide img, .ntp-media--wide video { aspect-ratio: auto; }
.ntp-copy p { font-size: 16px; line-height: 1.7; color: #4f443d; margin: 0 0 14px; }
.ntp-copy p strong { color: #231d19; font-weight: 600; }
.ntp-copy p.ntp-big { font-size: 19px; font-weight: 700; color: #231d19; line-height: 1.45; margin-top: 6px; }
.ntp-x { list-style: none; margin: 0; padding: 0; display: grid; grid-template-columns: 1fr 1fr; gap: 6px 18px; }
.ntp-x li { position: relative; padding-left: 26px; font-size: 15.5px; line-height: 1.5; color: #231d19; }
.ntp-x li::before { content: "✕"; position: absolute; left: 0; top: 0; color: #c0392b; font-weight: 700; }

/* kartice */
.ntp-cards { display: grid; gap: 18px; }
.ntp-cards--3 { grid-template-columns: repeat(3, minmax(0, 1fr)); }
.ntp-cards--4 { grid-template-columns: repeat(4, minmax(0, 1fr)); }
.ntp-card { background: #fff; border: 1px solid #ecdfd3; border-radius: 10px; padding: 22px 22px 18px; }
.ntp-tint .ntp-card { background: #fff; }
.ntp-card h3 { font-size: 17px; font-weight: 700; margin: 0 0 8px; color: #231d19; }
.ntp-card p, .ntp-card li { font-size: 14.5px; line-height: 1.6; color: #4f443d; margin: 0; }
.ntp-card ul { margin: 0; padding-left: 18px; }
.ntp-card li { margin: 0 0 6px; }
.ntp-card--win { border-color: #a9683f; background: #fdfaf7; }
.ntp-card--win h3 { color: #a9683f; }

/* mnenje */
.ntp-sec--quote { padding: 52px 0; }
.ntp-score { display: flex; align-items: center; justify-content: center; gap: 10px; font-size: 15px; color: #4f443d; margin: 0 0 16px; }
.ntp-score strong { font-size: 22px; color: #231d19; }
.ntp-score .ntp-stars { margin: 0; }
.ntp-quote { max-width: 760px; margin: 0 auto 12px; font-size: clamp(19px, 2.2vw, 24px); line-height: 1.5; font-style: italic; color: #231d19; border: 0; padding: 0; }
.ntp-quote__name { font-size: 14.5px; font-weight: 600; margin: 0; }
.ntp-quote__name span, .ntp-rv__name span { font-weight: 400; color: #2e7d32; }

/* primerjava */
.ntp-cmp { width: 100%; border-collapse: collapse; font-size: 15px; background: #fff; border: 1px solid #ecdfd3; border-radius: 10px; overflow: hidden; }
.ntp-cmp th, .ntp-cmp td { padding: 12px 14px; border-bottom: 1px solid #f0e6dc; text-align: center; }
.ntp-cmp th:first-child, .ntp-cmp td:first-child { text-align: left; }
.ntp-cmp thead th { background: #a9683f; color: #fff; font-weight: 600; }
.ntp-cmp td.is-yes { color: #2e7d32; font-weight: 700; }
.ntp-cmp td.is-no { color: #8a7a6e; }

/* videi kupcev */
.ntp-ugc { display: grid; grid-template-columns: repeat(3, minmax(0, 1fr)); gap: 18px; max-width: 900px; margin: 0 auto; }
.ntp-ugc__item { margin: 0; }
.ntp-ugc__item video { aspect-ratio: 9 / 16; object-fit: cover; border-radius: 10px; }
.ntp-ugc__item figcaption { font-size: 14px; font-weight: 600; text-align: center; margin-top: 8px; }

/* zvjezdice */
.ntp-stars { display: inline-flex; gap: 3px; margin: 0 0 12px; vertical-align: middle; }
.ntp-stars i { font-style: normal; width: 22px; height: 22px; background: #00b67a; color: #fff; font-size: 15px; line-height: 22px; text-align: center; }
.ntp-stars i.is-off { background: #dcdce6; }

/* recenzije */
.ntp-summary { display: flex; align-items: center; justify-content: center; gap: 40px; margin: 0 0 34px; flex-wrap: wrap; }
.ntp-summary__score { display: flex; flex-direction: column; align-items: center; gap: 6px; }
.ntp-summary__score strong { font-size: 44px; line-height: 1; font-weight: 700; }
.ntp-summary__score .ntp-stars { margin: 0; }
.ntp-summary__score span { font-size: 14px; color: #4f443d; }
.ntp-summary__bars { min-width: 280px; }
.ntp-bar { display: flex; align-items: center; gap: 10px; font-size: 14px; color: #4f443d; margin: 0 0 6px; }
.ntp-bar__lbl { width: 30px; white-space: nowrap; }
.ntp-bar__track { flex: 1 1 auto; height: 9px; background: #e6dbd0; border-radius: 6px; overflow: hidden; min-width: 160px; }
.ntp-bar__track span { display: block; height: 100%; background: #a9683f; }
.ntp-bar__n { width: 64px; white-space: nowrap; }
.ntp-revs { display: grid; grid-template-columns: repeat(3, minmax(0, 1fr)); gap: 18px; align-items: start; }
.ntp-rv { background: #fff; border: 1px solid #ecdfd3; border-radius: 10px; padding: 16px 18px 14px; }
.ntp-rv .ntp-stars { margin-bottom: 10px; }
.ntp-rv .ntp-stars i { width: 19px; height: 19px; font-size: 13px; line-height: 19px; }
.ntp-rv__title { font-size: 15px; font-weight: 700; color: #231d19; margin: 0 0 6px; }
.ntp-rv__txt { font-size: 14.5px; line-height: 1.6; color: #3a302a; margin: 0 0 12px; }
.ntp-rv__name { font-size: 13.5px; font-weight: 600; color: #231d19; margin: 0; border-top: 1px solid #ecdfd3; padding-top: 12px; }

@media (max-width: 989px) {
  .ntp-revs, .ntp-cards--4 { grid-template-columns: repeat(2, minmax(0, 1fr)); }
  .ntp-row2 { gap: 32px; }
}
@media (max-width: 749px) {
  .ntp-sec { padding: 42px 0; }
  .ntp-wrap { padding: 0 16px; }
  .ntp-revs, .ntp-cards--3, .ntp-cards--4 { grid-template-columns: 1fr; gap: 14px; }
  .ntp-row2 { grid-template-columns: 1fr; gap: 24px; }
  .ntp-row2--rev .ntp-media { order: 0; }
  .ntp-ugc { grid-template-columns: repeat(3, minmax(0, 1fr)); gap: 8px; }
  .ntp-cmp { font-size: 13.5px; }
  .ntp-cmp th, .ntp-cmp td { padding: 10px 8px; }
}

/* galerija izdelka: sličice največ v 2 vrstah (5 na vrsto), ostale slike so dosegljive z drsenjem glavne slike */
.product_cat-orto-titaniumpan .flex-control-thumbs li:nth-child(n+11) { display: none !important; }

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
.woocommerce-product-details__short-description .ntp-tick {
  position: absolute !important; left: 0 !important; top: 1px !important;
  width: 21px; height: 21px; border-radius: 50%;
  background: #2f9e5f !important; color: #fff !important;
  font-size: 12px !important; font-weight: 800 !important; line-height: 21px !important;
  text-align: center !important; display: inline-block !important; }
.woocommerce-product-details__short-description p:first-of-type { font-size: 16px; line-height: 1.55; }
</style>
