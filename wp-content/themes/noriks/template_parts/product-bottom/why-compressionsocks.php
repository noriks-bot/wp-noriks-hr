<?php
/**
 * product-bottom: NORIKS CompressionSocks — široke bambusove kompresijske čarape do koljena (orto-compressionsocks).
 * Original: everstridesocks.com/products/bamboo-compression-socks (»Bamboo Wide Compression Socks«)
 * — vsebina in vrstni red 1:1 z originalom, oblika po NORIKS stilu (predloga why-bathmat.php / why-hands.php),
 * poudarek malinasto roza (barva originala) #b8264f, svetlo #fcf0f3.
 * Ni povezano s SupportSocks (why-supportsocks.php), Relief ni kompresijskimi čarapami teme (tip carape).
 *   1) nakupna škatla: zavihki »Fabric & Care« + »60-Day Fit Guarantee« + »Shipping & Returns«
 *      -> Materijal i njega (slika ob besedilu; garancija in dostava konkurenta -> NORIKS pogoji, velikosti z gumbom tablice)
 *   2) »380,000+ Women Wear Everstride Daily« (22,000+ reviews) -> Tisuće žena (1081 recenzija), 3 fotografije kupk
 *      (fotografije z embalažo z znamko izpuščene)
 *   3) »Reduces Swelling From Day One«          -> slika ob besedilu (trditev omiljena: »pomažu ublažiti«)
 *   4) »Slide On & Off With Ease«               -> slika s hrvaškim napisom »Postupna kompresija«
 *   5) »Say Goodbye To Tight Restrictive Socks« -> 3 kljukice + usporedba NORIKS / Ostale čarape, 6 vrstic 1:1 (28" -> 71 cm)
 *   6) »All-Day Comfort & Relief«               -> slika ob besedilu
 *   7) »Promote Healthy Blood Flow«             -> ilustracija ob besedilu (trditev omiljena + opomba)
 *   8) Loox recenzije (4.9 / 28495)             -> 4,9 / 1081 + 5 mnenj s fotografijami kupk (imena lokalizirana)
 *   9) »Why Pick Everstride?« (4 kartice)       -> Zašto NORIKS: 60-Day Fit -> 30 dana za povrat, 24/7 podpora konkurenta ->
 *      besplatna dostava iznad 70 €, ocjena 4,8/5, posebno za široke listove (zdravstvena trditev omiljena)
 * Izpuščeno: pasica in odštevalnik akcije, Kaching podnaslovi/značke paketov (»+ 2 Pairs FREE«, Best Seller), logotip na koncu
 * (slideshow), e-pošta in podpora konkurenta, slika »Loved by 400,000+«. Logotip »everstride« s stopal na slikah odstranjen.
 * FAQ je v reviews.php ($compressionsocks_faq), mnenja v auto_reviews/HR_compressionsocks.php, opis + nega + tablica v meta.php.
 * Slike: img/compressionsocks/ (ncps-…).
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$ncps      = get_template_directory_uri() . '/img/compressionsocks/';
$ncps_path = get_template_directory() . '/img/compressionsocks/';
$ncps_img  = function( $file, $alt, $cls = '' ) use ( $ncps, $ncps_path ) {
  if ( ! $file || ! file_exists( $ncps_path . $file ) ) { return ''; }
  return '<img src="' . esc_url( $ncps . $file ) . '" alt="' . esc_attr( $alt ) . '" loading="eager"' . ( $cls ? ' class="' . esc_attr( $cls ) . '"' : '' ) . '>';
};
$ncps_stars = function( $n ) {
  $n = max( 0, min( 5, (int) $n ) );
  return '<span class="ncps-stars" aria-label="' . $n . ' od 5 zvjezdica">' . str_repeat( '★', $n ) . '<span class="ncps-stars__off">' . str_repeat( '★', 5 - $n ) . '</span></span>';
};

/* 1) Fabric & Care — 4 lastnosti tkanine */
$ncps_tkanina = array(
  array( 'Nježne prema koži', 'glatka bambusova vlakna mekana su i na osjetljivoj ili suhoj koži, a noge ostaju hladne, svježe i udobne.' ),
  array( 'Udobna, prilagodljiva rastezljivost', 'tkanina se kreće s vama — nježno obuhvaća listove bez usijecanja, čak i kad se oticanje mijenja.' ),
  array( 'Izdržljive i pouzdane', 'mješavina zadržava oblik nošenje za nošenjem, pa se na potporu možete osloniti svaki dan.' ),
  array( 'Čvršća potpora gdje vam treba', 'bambusovo pletivo uz čvršću razinu kompresije podržava zdravu cirkulaciju i olakšava teške, umorne noge.' ),
);

/* 5) usporedba NORIKS / ostale čarape (1:1 z originala: povsod kljukica / križec) */
$ncps_cmp = array(
  'Mekana tkanina bogata bambusom',
  'Prava postupna kompresija',
  'Za listove do 71 cm',
  'Lako se oblače',
  'Prozračne i odvode vlagu',
  'Izdržljive i dugotrajne',
);

/* 8) recenzije — 5 mnenj originala s fotografijami kupk (imena lokalizirana) */
$ncps_reviews = array(
  array( 'img' => 'ncps-r1-kupac.webp', 'ime' => 'Katarina V.', 'naslov' => 'Pomažu mi od prvog dana',
         'tekst' => 'Najbolja stvar koju sam ikad kupila za svoje noge — osjetila sam razliku već prvi dan.' ),
  array( 'img' => 'ncps-r2-kupac.webp', 'ime' => 'Lidija M.', 'naslov' => 'Udobne, a kompresija se osjeti',
         'tekst' => 'Imala sam bambusove kompresijske čarape drugih proizvođača, ali bile su preuske na vrhu, posebno preko ožiljka od nove proteze koljena. Uzela sam jedan par, toliko mi se svidio da sam odmah naručila paket od 4 para u različitim bojama (ljubičasta mi je prekrasna). Lako se oblače i tako su udobne da nisam vjerovala da daju dovoljno kompresije — ali daju, osjeti se. Moram ih nositi cijeli dan, pa mi je važno da djeluju, da su udobne i da ne klize — ove ispunjavaju sve. Preporučujem ih 100 posto.' ),
  array( 'img' => 'ncps-r3-kupac.webp', 'ime' => 'Ivana M.', 'naslov' => 'Stvarno udobne',
         'tekst' => 'Stvarno udobne!' ),
  array( 'img' => 'ncps-r4-kupac.webp', 'ime' => 'Mandica H.', 'naslov' => 'Nosim ih cijeli dan',
         'tekst' => 'Jednostavno ih obožavam. Kvaliteta 5*, veličina 5*, osjećaj 5*. Nosim ih cijeli dan — fantastične!' ),
  array( 'img' => 'ncps-r5-kupac.webp', 'ime' => 'Elizabeta A.', 'naslov' => 'Vrlo mekana tkanina',
         'tekst' => 'Vrlo sam zadovoljna bambusovim kompresijskim čarapama. Tkanina je jako mekana i pomaže mi s cirkulacijom. Brza dostava i odlična usluga.' ),
);

/* 9) zašto NORIKS — 4 kartice */
$ncps_zasto = array(
  array( 'ikona' => '↺', 'naslov' => '30 dana za povrat', 'tekst' => 'Ako iz bilo kojeg razloga niste zadovoljni, imate pravo na povrat ili zamjenu u roku od 30 dana — bez brige.' ),
  array( 'ikona' => '🚚', 'naslov' => 'Besplatna dostava iznad 70 €', 'tekst' => 'Besplatna dostava za narudžbe iznad 70 €, uz broj za praćenje i mogućnost plaćanja pouzećem.' ),
  array( 'ikona' => '★', 'naslov' => 'Ocjena 4,8/5', 'tekst' => 'Pridružite se tisućama zadovoljnih kupaca koji su u našim kompresijskim čarapama pronašli udobnost.' ),
  array( 'ikona' => '✓', 'naslov' => 'Posebno za široke listove', 'tekst' => 'Udoban dizajn za žene s otečenim, umornim nogama — i za one koje imaju dijabetes, edeme ili proširene vene.' ),
);

$ncps_n = 0; // števec sekcij za izmenična ozadja
$ncps_cls = function() use ( &$ncps_n ) { $ncps_n++; return ( $ncps_n % 2 ) ? ' ncps-tint' : ''; };
?>

<!-- 1) MATERIJAL I NJEGA (zavihki nakupne škatle »Fabric & Care« + »60-Day Fit Guarantee« + »Shipping & Returns«) — slika ob besedilu -->
<section class="ncps-sec<?php echo $ncps_cls(); ?>">
  <div class="ncps-wrap">
    <div class="ncps-row2 ncps-row2--top">
      <div class="ncps-media"><?php echo $ncps_img( 'ncps-g11-tamnoljubicasta.webp', 'NORIKS CompressionSocks bambusove kompresijske čarape do koljena, tamnoljubičaste' ); ?></div>
      <div class="ncps-copy">
        <p class="ncps-kicker">Materijal i njega</p>
        <h2 class="ncps-h2">Bambus koji je <em>nježan prema koži</em></h2>
        <p>Naše bambusove čarape izrađene su od kvalitetne mješavine <strong>60 % bambusa, 25 % poliestera i 15 % elastana</strong> — odabrane zbog mekoće, prozračnosti i potporne rastezljivosti za cijeli dan.</p>
        <ul class="ncps-checks">
          <?php foreach ( $ncps_tkanina as $t ) : ?>
          <li><strong><?php echo esc_html( $t[0] ); ?></strong> – <?php echo esc_html( $t[1] ); ?></li>
          <?php endforeach; ?>
        </ul>
        <dl class="ncps-specs">
          <div><dt>Njega:</dt><dd>perite u hladnoj vodi, sušite položeno na zraku. Da bambusova vlakna ostanu mekana i svježa, koristite blagi deterdžent, bez izbjeljivača i sredstava s aktivnim kisikom.</dd></div>
          <div><dt>Veličine:</dt><dd>M–3XL prema opsegu lista (28–71 cm). <a href="#" class="ncps-sizelink js-open-size-chart">Tablica veličina</a></dd></div>
          <div><dt>Bez rizika:</dt><dd>pravo na povrat u roku od 30 dana. Besplatna dostava za narudžbe iznad 70 €.</dd></div>
        </dl>
        <p class="ncps-big">Mekoća bambusa. Potpora za cijeli dan.</p>
      </div>
    </div>
  </div>
</section>

<!-- 2) TISUĆE ŽENA (»380,000+ Women Wear Everstride Daily«) — fotografije kupk ob besedilu -->
<section class="ncps-sec<?php echo $ncps_cls(); ?>">
  <div class="ncps-wrap">
    <div class="ncps-row2 ncps-row2--rev">
      <div class="ncps-media ncps-photos">
        <?php echo $ncps_img( 'ncps-k1-kupka.webp', 'Kupka u NORIKS CompressionSocks čarapama sjedi na kamenu' ); ?>
        <?php echo $ncps_img( 'ncps-k2-kupka.webp', 'Kupka u crnim NORIKS CompressionSocks čarapama do koljena' ); ?>
        <?php echo $ncps_img( 'ncps-k3-kupka.webp', 'Kupka u tamnoljubičastim NORIKS CompressionSocks čarapama na terasi' ); ?>
      </div>
      <div class="ncps-copy">
        <p class="ncps-kicker">Naše kupke</p>
        <h2 class="ncps-h2">Tisuće žena svaki dan <em>nosi NORIKS</em></h2>
        <p>Uz <strong>1081 recenziju</strong> naše su čarape postale pouzdan izbor žena koje traže <strong>udobnost i potporu</strong> u svakom koraku.</p>
        <p class="ncps-big">Udobnost koju osjetite od prvog koraka.</p>
      </div>
    </div>
  </div>
</section>

<!-- 3) OTICANJE (»Reduces Swelling From Day One«) — slika ob besedilu -->
<section class="ncps-sec<?php echo $ncps_cls(); ?>">
  <div class="ncps-wrap">
    <div class="ncps-row2">
      <div class="ncps-media"><?php echo $ncps_img( 'ncps-s1-otekline.webp', 'Žena navlači bež NORIKS CompressionSocks čarape' ); ?></div>
      <div class="ncps-copy">
        <p class="ncps-kicker">Lakše noge</p>
        <h2 class="ncps-h2">Pomažu ublažiti oticanje <em>već od prvog dana</em></h2>
        <p>Naše bambusove čarape spajaju <strong>pravu postupnu kompresiju</strong> s iznimno mekanom tkaninom bogatom bambusom — podržavaju zdravu cirkulaciju i pružaju nogama udobnost koju zaslužuju.</p>
        <p>Prozračne, lagane i dovoljno udobne za nošenje cijeli dan. Noge se osjećaju <strong>lakše i manje umorno</strong> od jutra do večeri.</p>
        <p class="ncps-big">Lagane noge od jutra do večeri.</p>
      </div>
    </div>
  </div>
</section>

<!-- 4) LAKO OBLAČENJE (»Slide On & Off With Ease«) — slika s hrvaškim napisom ob besedilu -->
<section class="ncps-sec<?php echo $ncps_cls(); ?>">
  <div class="ncps-wrap">
    <div class="ncps-row2 ncps-row2--rev">
      <div class="ncps-media"><?php echo $ncps_img( 'ncps-s2-postupna-kompresija-hr.webp', 'Navlačenje NORIKS CompressionSocks čarape – postupna kompresija', 'ncps-img--nat' ); ?></div>
      <div class="ncps-copy">
        <p class="ncps-kicker">Lako oblačenje</p>
        <h2 class="ncps-h2">Lako se oblače <em>i skidaju</em></h2>
        <p>Naše bambusove čarape imaju <strong>rastezljivost u 4 smjera</strong>, zato se oblače i skidaju lakše od klasičnih kompresijskih čarapa.</p>
        <p>Bez mučenja. Bez natezanja s uskom tkaninom. Samo postupna kompresija koja <strong>lako sklizne na nogu</strong>, a i dalje pruža potporu koja vašim nogama treba.</p>
        <p class="ncps-big">Navucite ih bez muke – svako jutro.</p>
      </div>
    </div>
  </div>
</section>

<!-- 5) RECITE ZBOGOM USKIM ČARAPAMA (»Say Goodbye To Tight Restrictive Socks«) — usporedba ob besedilu -->
<section class="ncps-sec<?php echo $ncps_cls(); ?>">
  <div class="ncps-wrap">
    <div class="ncps-row2">
      <div class="ncps-media">
        <div class="ncps-cmp" role="table" aria-label="Usporedba: NORIKS CompressionSocks i ostale čarape">
          <div class="ncps-cmp__row ncps-cmp__head" role="row">
            <span role="columnheader"></span>
            <span role="columnheader" class="ncps-cmp__us">NORIKS</span>
            <span role="columnheader">Ostale čarape</span>
          </div>
          <?php foreach ( $ncps_cmp as $r ) : ?>
          <div class="ncps-cmp__row" role="row">
            <span role="cell" class="ncps-cmp__lbl"><?php echo esc_html( $r ); ?></span>
            <span role="cell" class="ncps-cmp__us"><span class="ncps-yes" aria-label="da">✓</span></span>
            <span role="cell"><span class="ncps-no" aria-label="ne">✕</span></span>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
      <div class="ncps-copy">
        <p class="ncps-kicker">NORIKS ili ostale</p>
        <h2 class="ncps-h2">Recite zbogom uskim čarapama <em>koje stežu</em></h2>
        <p>Kompresijske čarape koje ćete stvarno voljeti nositi. Uz <strong>mekana bambusova vlakna</strong> i nježnu postupnu kompresiju NORIKS se osjeća kao ugodan zagrljaj, a ne kao stezanje.</p>
        <ul class="ncps-checks ncps-checks--plain">
          <li>Udobnost i olakšanje cijeli dan</li>
          <li>Pomažu smanjiti oticanje i nakupljanje tekućine</li>
          <li>Prozračne i odvode vlagu</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- 6) UDOBNOST CIJELI DAN (»All-Day Comfort & Relief«) — slika ob besedilu -->
<section class="ncps-sec<?php echo $ncps_cls(); ?>">
  <div class="ncps-wrap">
    <div class="ncps-row2 ncps-row2--rev">
      <div class="ncps-media"><?php echo $ncps_img( 'ncps-s3-cijeli-dan.webp', 'Sive NORIKS CompressionSocks čarape do koljena uz haljinu' ); ?></div>
      <div class="ncps-copy">
        <p class="ncps-kicker">Za široke listove</p>
        <h2 class="ncps-h2">Udobnost i olakšanje <em>cijeli dan</em></h2>
        <p>Dok većina kompresijskih čarapa steže previše i donosi još više nelagode, mi to radimo drukčije.</p>
        <p>Naše su čarape <strong>posebno osmišljene za široke listove</strong> — pružaju ugodnu kompresiju koja ne ograničava pokrete i ne prekida cirkulaciju. Kako biste se mogli osjećati dobro svaki dan.</p>
        <p class="ncps-big">Potpora koja ne steže.</p>
      </div>
    </div>
  </div>
</section>

<!-- 7) PROTOK KRVI (»Promote Healthy Blood Flow«) — ilustracija ob besedilu -->
<section class="ncps-sec<?php echo $ncps_cls(); ?>">
  <div class="ncps-wrap">
    <div class="ncps-row2">
      <div class="ncps-media"><?php echo $ncps_img( 'ncps-s4-cirkulacija.webp', 'Ilustracija cirkulacije krvi od nogu prema srcu uz kompresijske čarape' ); ?></div>
      <div class="ncps-copy">
        <p class="ncps-kicker">Cirkulacija</p>
        <h2 class="ncps-h2">Potiču zdrav <em>protok krvi</em></h2>
        <p>Dobar protok krvi važan je za zdrave i lagane noge. Postupna kompresija <strong>pomaže vraćanju krvi prema srcu</strong> i tako pomaže smanjiti zadržavanje krvi i nakupljanje tekućine u nogama.</p>
        <p class="ncps-big">Lakše noge, korak po korak.</p>
        <p class="ncps-note">NORIKS CompressionSocks nisu lijek ni zamjena za terapiju. Ako imate zdravstvenih tegoba, posavjetujte se s liječnikom.</p>
      </div>
    </div>
  </div>
</section>

<!-- 8) RECENZIJE KUPACA (Loox 4.9 / 28495) — 1081 po NORIKS + 5 mnenj originala s fotografijami kupk -->
<section class="ncps-sec<?php echo $ncps_cls(); ?>">
  <div class="ncps-wrap">
    <p class="ncps-kicker ncps-c">Recenzije kupaca</p>
    <h2 class="ncps-h2 ncps-c">Lakše noge, <em>zadovoljne kupke</em></h2>
    <div class="ncps-score">
      <span class="ncps-score__num">4,9</span>
      <?php echo $ncps_stars( 5 ); ?>
      <span class="ncps-score__txt">Na temelju 1081 recenzije</span>
    </div>
    <div class="ncps-reviews">
      <?php foreach ( $ncps_reviews as $r ) : ?>
      <article class="ncps-card">
        <div class="ncps-card__img"><?php echo $ncps_img( $r['img'], 'Fotografija kupke: NORIKS CompressionSocks na nogama' ); ?></div>
        <div class="ncps-card__body">
          <?php echo $ncps_stars( 5 ); ?>
          <h3><?php echo esc_html( $r['naslov'] ); ?></h3>
          <p class="ncps-card__txt">„<?php echo esc_html( $r['tekst'] ); ?>”</p>
          <p class="ncps-card__name"><?php echo esc_html( $r['ime'] ); ?> <span class="ncps-ok">✓ Potvrđena kupnja</span></p>
        </div>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- 9) ZAŠTO NORIKS (»Why Pick Everstride?«) — 4 kartice po NORIKS pogojih -->
<section class="ncps-sec<?php echo $ncps_cls(); ?>">
  <div class="ncps-wrap">
    <p class="ncps-kicker ncps-c">Zašto NORIKS</p>
    <h2 class="ncps-h2 ncps-c">Zašto odabrati <em>NORIKS?</em></h2>
    <p class="ncps-sub ncps-c">Uvjereni smo da su naše čarape najudobnije koje ćete ikad nositi.</p>
    <div class="ncps-why">
      <?php foreach ( $ncps_zasto as $z ) : ?>
      <article class="ncps-why__card">
        <span class="ncps-why__ico" aria-hidden="true"><?php echo esc_html( $z['ikona'] ); ?></span>
        <h3><?php echo esc_html( $z['naslov'] ); ?></h3>
        <p><?php echo esc_html( $z['tekst'] ); ?></p>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<style>
/* NORIKS stil (predloga why-bathmat.php / why-hands.php): oznaka + naslov z ležečim poudarkom, slika ob besedilu,
   izmenjujoča ozadja in strani. Paleta malinasto roza (barva originala): poudarek #b8264f, temno #2a1520, svetlo #fcf0f3. */
.ncps-sec { padding: 60px 0; font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Arial, sans-serif; color: #2a1520; background: #fff; }
.ncps-sec * { box-sizing: border-box; }
.ncps-tint { background: #fcf0f3; }
.ncps-wrap { width: 100%; max-width: 1200px; margin: 0 auto; padding: 0 24px; }
.ncps-c { text-align: center; }
.ncps-sec h2, .ncps-sec h3 { font-family: inherit; text-transform: none; letter-spacing: 0; }
.ncps-kicker, .ncps-copy p.ncps-kicker { font-size: 12.5px; line-height: 1.4; font-weight: 800; letter-spacing: .14em; text-transform: uppercase; color: #b8264f; margin: 0 0 10px; }
.ncps-h2 { font-weight: 800; font-size: clamp(25px, 3.1vw, 36px); line-height: 1.2; margin: 0 0 18px; color: #2a1520; }
.ncps-h2 em { font-style: italic; color: #b8264f; }
.ncps-sub { font-size: 16px; line-height: 1.6; color: #5d4a53; margin: -6px auto 26px; max-width: 640px; }
.ncps-sec img { display: block; width: 100%; height: auto; }

/* slika ob besedilu */
.ncps-row2 { display: grid; grid-template-columns: 1fr 1fr; gap: 56px; align-items: center; }
.ncps-row2--top { align-items: start; }
.ncps-row2--rev > :first-child { order: 2; }
.ncps-media > img { border-radius: 10px; box-shadow: 0 2px 4px rgba(60,15,30,.05), 0 14px 40px rgba(60,15,30,.10); max-width: 560px; margin: 0 auto; aspect-ratio: 1 / 1; object-fit: cover; background: #fff; }
.ncps-media > img.ncps-img--nat { aspect-ratio: auto; object-fit: contain; }
.ncps-copy p { font-size: 16px; line-height: 1.7; color: #5d4a53; margin: 0 0 14px; }
.ncps-copy p strong, .ncps-copy li strong { color: #2a1520; font-weight: 700; }
.ncps-sec p.ncps-big { font-size: 19px; font-weight: 800; color: #2a1520; line-height: 1.45; margin-top: 6px; }
.ncps-sec p.ncps-note { font-size: 13px; line-height: 1.55; color: #7a6670; font-style: italic; margin-top: 10px; }

/* 2) fotografije kupk */
.ncps-photos { display: grid; grid-template-columns: repeat(3, minmax(0, 1fr)); gap: 12px; max-width: 560px; margin: 0 auto; width: 100%; }
.ncps-photos > img { aspect-ratio: 3 / 4; object-fit: cover; border-radius: 10px; box-shadow: 0 8px 24px rgba(60,15,30,.10); }

/* 1) + 5) kljukice + specifikacije */
.ncps-checks { list-style: none; margin: 0 0 18px; padding: 0; }
.ncps-checks li { position: relative; padding-left: 32px; margin: 0 0 10px; font-size: 15.5px; line-height: 1.6; color: #5d4a53; }
.ncps-checks--plain li { font-weight: 600; color: #2a1520; }
.ncps-checks li::before { content: "✓"; position: absolute; left: 0; top: 2px; width: 21px; height: 21px; border-radius: 50%; background: #b8264f; color: #fff; font-size: 12px; font-weight: 800; line-height: 21px; text-align: center; }
.ncps-specs { margin: 0 0 18px; padding: 14px 18px; background: #fff; border: 1px solid #ecc9d4; border-radius: 10px; }
.ncps-specs > div { display: grid; grid-template-columns: 110px 1fr; gap: 10px; padding: 8px 0; border-top: 1px solid #f4dde4; font-size: 15px; line-height: 1.55; }
.ncps-specs > div:first-child { border-top: 0; }
.ncps-specs dt { font-weight: 700; color: #2a1520; margin: 0; }
.ncps-specs dd { margin: 0; color: #5d4a53; }
.ncps-sizelink { color: #b8264f; font-weight: 700; text-decoration: underline; margin-left: 4px; white-space: nowrap; }

/* 5) usporedba */
.ncps-cmp { margin: 0 auto; max-width: 560px; width: 100%; border-radius: 10px; overflow: hidden; border: 1px solid #ecc9d4; background: #fff; box-shadow: 0 14px 40px rgba(60,15,30,.08); }
.ncps-cmp__row { display: grid; grid-template-columns: 2fr 1fr 1fr; align-items: center; border-top: 1px solid #f4dde4; }
.ncps-cmp__row:first-child { border-top: 0; }
.ncps-cmp__row > span { padding: 14px 8px; text-align: center; font-size: 15px; color: #5d4a53; }
.ncps-cmp__row > span.ncps-cmp__lbl { text-align: left; padding-left: 18px; font-weight: 600; color: #2a1520; }
.ncps-cmp__head > span { font-size: 12.5px; font-weight: 700; text-transform: uppercase; letter-spacing: .06em; color: #7a6670; }
.ncps-cmp__row > span.ncps-cmp__us { background: #b8264f; color: #fff; }
.ncps-cmp__head > span.ncps-cmp__us { color: #fff; font-size: 14px; letter-spacing: .1em; }
.ncps-yes, .ncps-no { display: inline-block; width: 22px; height: 22px; border-radius: 50%; font-size: 12px; font-weight: 800; line-height: 22px; text-align: center; font-style: normal; }
.ncps-cmp__us .ncps-yes { background: #fff; color: #b8264f; }
.ncps-no { background: #f3d6d6; color: #c0392b; }

/* 8) recenzije */
.ncps-score { display: flex; flex-direction: column; align-items: center; gap: 4px; margin: 0 auto 28px; }
.ncps-score__num { font-size: 52px; font-weight: 800; line-height: 1; color: #2a1520; }
.ncps-score .ncps-stars { font-size: 20px; }
.ncps-score__txt { font-size: 14px; color: #7a6670; }
.ncps-reviews { display: grid; grid-template-columns: repeat(5, minmax(0, 1fr)); gap: 16px; align-items: start; }
.ncps-card { background: #fff; border: 1px solid #ecc9d4; border-radius: 10px; overflow: hidden; display: flex; flex-direction: column; box-shadow: 0 2px 10px rgba(60,15,30,.05); }
.ncps-card__img img { aspect-ratio: 4 / 5; object-fit: cover; }
.ncps-card__body { padding: 14px 16px 16px; }
.ncps-card h3 { font-size: 16px; font-weight: 800; line-height: 1.35; color: #2a1520; margin: 8px 0 6px; }
.ncps-card__txt { font-size: 14.5px; line-height: 1.6; color: #4a3a42; margin: 0 0 10px; font-style: italic; }
.ncps-card__name { font-size: 13.5px; font-weight: 700; color: #2a1520; margin: 0; }

/* 9) zašto NORIKS */
.ncps-why { display: grid; grid-template-columns: repeat(4, minmax(0, 1fr)); gap: 16px; }
.ncps-why__card { background: #fff; border: 1px solid #ecc9d4; border-radius: 10px; padding: 22px 20px; box-shadow: 0 2px 10px rgba(60,15,30,.05); }
.ncps-why__ico { display: inline-flex; align-items: center; justify-content: center; width: 44px; height: 44px; border-radius: 50%; background: #fbe3ea; color: #b8264f; font-size: 20px; font-weight: 800; margin-bottom: 12px; }
.ncps-why__card h3 { font-size: 18px; font-weight: 800; line-height: 1.3; color: #2a1520; margin: 0 0 8px; }
.ncps-why__card p { font-size: 15px; line-height: 1.6; color: #5d4a53; margin: 0; }

/* ocjene */
.ncps-stars { color: #f2a516; letter-spacing: 1px; font-size: 15px; }
.ncps-stars__off { color: #ecd9df; }
.ncps-ok { color: #2f9e5f; font-weight: 600; font-size: 12px; margin-left: 4px; font-style: normal; }

@media (max-width: 989px) {
  .ncps-row2 { gap: 32px; }
  .ncps-reviews { grid-template-columns: repeat(3, minmax(0, 1fr)); }
  .ncps-why { grid-template-columns: repeat(2, minmax(0, 1fr)); }
}
@media (max-width: 749px) {
  .ncps-sec { padding: 42px 0; }
  .ncps-wrap { padding: 0 16px; }
  .ncps-row2 { grid-template-columns: 1fr; gap: 24px; }
  .ncps-row2--rev > :first-child { order: 0; }
  .ncps-specs > div { grid-template-columns: 1fr; gap: 2px; }
  .ncps-reviews { grid-template-columns: 1fr 1fr; gap: 12px; }
  .ncps-card__body { padding: 12px; }
  .ncps-cmp__row > span { font-size: 14px; padding: 11px 6px; }
  .ncps-cmp__row > span.ncps-cmp__lbl { padding-left: 12px; }
}
@media (max-width: 480px) {
  .ncps-reviews, .ncps-why { grid-template-columns: 1fr; }
}

/* galerija izdelka: sličice največ v 2 vrstah (5 na vrsto), ostale slike so dosegljive z drsenjem glavne slike */
.product_cat-orto-compressionsocks .flex-control-thumbs li:nth-child(n+11) { display: none !important; }

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
.woocommerce-product-details__short-description .ncps-tick {
  position: absolute !important; left: 0 !important; top: 1px !important;
  width: 21px; height: 21px; border-radius: 50%;
  background: #2f9e5f !important; color: #fff !important;
  font-size: 12px !important; font-weight: 800 !important; line-height: 21px !important;
  text-align: center !important; display: inline-block !important; }
.woocommerce-product-details__short-description p:first-of-type { font-size: 16px; line-height: 1.55; }
</style>
