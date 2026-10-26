<?php
/**
 * product-bottom: NORIKS ComfortJeans — opuštene traperice širokih nogavica (orto-comfortjeans).
 * Original: ninepine.se / ninepine.eu (EU trg) /products/relaxed-comfortdenim-jeans-dblue — vsebina in vrstni red 1:1
 * z originalom, oblika po NORIKS stilu (predloga why-hoodiedress.php / why-hands.php), modra paleta trapera (#1f568e):
 *   1) opis v nakupni škatli (odstavek + 6 alinej)                   -> Izgled pravog trapera: slika ob besedilu
 *   2) zavihek "HOW IT FITS" – "Easy to style" (video)              -> Lako se kombiniraju: video ob besedilu
 *   3) zavihek "HOW IT FITS" – "Stretchy and flexible" (video)      -> Rastezljive i fleksibilne: video ob besedilu
 *   4) zavihek "MATERIAL & CARE" (tkanina, sastav, njega; video)    -> Materijal i njega: video ob besedilu
 *   5) blok "Easy to style" (video)                                 -> Lako se kombiniraju: video ob besedilu
 *   6) blok "Stretchy & flexible" (video = isti kot v 3) -> video iz galerije originala (oblačenje, rastezanje)
 *   7) blok "Real denim, but stretchy & comfortable" (video = isti kot v 3) -> drugi video iz galerije originala
 *   8) blok "Stretchy & comfortable waist" (video)                  -> Rastezljiv i udoban struk: video ob besedilu
 *   9) Okendo mnenja (4,8 / 4920; 4,1k / 758 / 89 / 12 / 5; 98 % preporučuje) -> 1081, zvezdice skalirane na 692 + 5 mnenj
 * Videi so brez zvoka (original nima govora ne napisov), kadri z usnjeno etiketo z logotipom konkurenta (pogled od zadaj)
 * so izrezani; v galeriji je logotip na etiketi in gumbu retusiran.
 * Izpusceno: glava, pasica »FREE SHIPPING OVER €50« (velja NORIKS: besplatna dostava iznad 70 €), »Signature … patch«
 * (ime znamke -> kožna etiketa), ime tkanine »ComfortDenim™« (blagovna znamka konkurenta -> rastezljivi traper od 12 oz),
 * »Hurry, only 0 left«, obvestilo o zalogi, »You may also like«, novice, noga.
 * Tablica velicin (Size guide) je v modalu (size-chart-comfortjeans.php) in harmoniki (meta.php), FAQ v reviews.php
 * ($comfortjeans_faq), mnenja v auto_reviews/HR_comfortjeans.php. Slike in videi: img/comfortjeans/ (ncj-…).
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$ncj      = get_template_directory_uri() . '/img/comfortjeans/';
$ncj_path = get_template_directory() . '/img/comfortjeans/';
$ncj_img  = function( $file, $alt, $cls = '' ) use ( $ncj, $ncj_path ) {
  if ( ! $file || ! file_exists( $ncj_path . $file ) ) { return ''; }
  return '<img src="' . esc_url( $ncj . $file ) . '" alt="' . esc_attr( $alt ) . '" loading="eager"' . ( $cls ? ' class="' . esc_attr( $cls ) . '"' : '' ) . '>';
};
$ncj_video = function( $file, $label, $cls = 'ncj-vid--sq' ) use ( $ncj, $ncj_path ) {
  if ( ! file_exists( $ncj_path . $file ) ) { return ''; }
  $poster = preg_replace( '/\.mp4$/', '-poster.webp', $file );
  return '<div class="ncj-vid ' . esc_attr( $cls ) . '"><video src="' . esc_url( $ncj . $file ) . '" poster="' . esc_url( $ncj . $poster ) . '"'
    . ' muted autoplay loop playsinline preload="metadata" aria-label="' . esc_attr( $label ) . '"></video></div>';
};
$ncj_stars = function( $n ) {
  $n = max( 0, min( 5, (int) $n ) );
  return '<span class="ncj-stars" aria-label="' . $n . ' od 5 zvjezdica">' . str_repeat( '★', $n ) . '<span class="ncj-stars__off">' . str_repeat( '★', 5 - $n ) . '</span></span>';
};

/* 1) alineje opisa z originala (»Signature … patch« -> kožna etiketa, brez imena znamke) */
$ncj_opis = array(
  'Opušten kroj nogavica',
  'Rastezljiv pravi traper',
  'Visoki struk',
  'Metalni patentni zatvarač YKK®',
  'Dva stražnja i dva prednja džepa',
  'Kožna etiketa na stražnjem dijelu struka',
);

/* 4) njega proizvoda (»PRODUCT CARE«) */
$ncj_njega = array(
  'Perite u perilici u hladnoj vodi do 30 °C',
  'Okrenite naopako',
  'Perite sa sličnim tkaninama i bojama',
  'Sušite na zraku (na užetu)',
  'Nikada ne sušite u sušilici',
  'Izbjegavajte toplinu',
  'Ne izbjeljujte',
  'Ne glačajte',
  'Ne čistite kemijski',
);

/* 9) recenzije (Okendo 4,8 / 4920; 4056 / 758 / 89 / 12 / 5 -> po NORIKS 1081, zvezdice skalirane na 692) */
$ncj_dist = array(
  array( 5, 82, '82 %', 569 ),
  array( 4, 15, '15 %', 107 ),
  array( 3, 2,  '2 %',  13 ),
  array( 2, 1,  '< 1 %', 2 ),
  array( 1, 1,  '< 1 %', 1 ),
);
$ncj_reviews = array(
  array( 'ime' => 'Jelena S.', 'meta' => 'Kupljena veličina: M · Uobičajena veličina: M · Visina: 160 cm', 'naslov' => 'Lijepe, udobne i savršeno pristaju',
         'tekst' => 'Obožavam ove traperice. Udobne su i lijepo izgledaju, dobro pristaju i točno su onakve kako su opisane. Kao niža osoba posebno volim što imaju točne duljine nogavica! Sigurno ću uskoro kupiti još jedne.' ),
  array( 'ime' => 'Iris V.',   'meta' => 'Kupljena veličina: L · Uobičajena veličina: L · Visina: 163 cm', 'naslov' => 'Otkad su stigle, ne nosim druge hlače',
         'tekst' => 'Jako mi se sviđa kako su udobne, a opet izgledaju elegantno. Odlične su za svaki dan i lako se kombiniraju. Otkad je narudžba stigla, ne nosim druge hlače! Uskoro kupujem još jedne.' ),
  array( 'ime' => 'Marija B.', 'meta' => 'Kupljena veličina: L · Uobičajena veličina: L · Visina: 165 cm', 'naslov' => 'Odlično pristaju',
         'tekst' => 'Prekrasne traperice. Vrlo udobne.' ),
  array( 'ime' => 'Ana B.',    'meta' => 'Kupljena veličina: M · Uobičajena veličina: M · Visina: 168 cm', 'naslov' => 'Vrlo udobne',
         'tekst' => 'Ovo mi je već drugi par. Stvarno udobne i lijepe boje.' ),
  array( 'ime' => 'Helena K.', 'meta' => 'Kupljena veličina: M · Uobičajena veličina: M · Visina: 169 cm', 'naslov' => 'Savršene traperice',
         'tekst' => 'Savršene traperice! Ovo mi je već treća kupnja hlača i sve ih obožavam. I dostava je bila brza.' ),
);

$ncj_n = 0; // števec sekcij za izmenična ozadja
$ncj_cls = function() use ( &$ncj_n ) { $ncj_n++; return ( $ncj_n % 2 ) ? ' ncj-tint' : ''; };
?>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap">

<!-- 1) OPIS (nakupna škatla) — slika ob besedilu -->
<section class="ncj-sec<?php echo $ncj_cls(); ?>">
  <div class="ncj-wrap">
    <div class="ncj-row2">
      <div class="ncj-media"><?php echo $ncj_img( 'ncj-s1-opis.webp', 'NORIKS ComfortJeans – tamnoplave traperice širokih nogavica uz sivu majicu i remen' ); ?></div>
      <div class="ncj-copy">
        <p class="ncj-kicker">Klasičan traper, nova udobnost</p>
        <h2 class="ncj-h2">Izgled pravog trapera, <em>udobnost rastezljivog</em></h2>
        <p>Doživite klasičan izgled trapera s udobnošću nevjerojatne rastezljivosti. Ove traperice <strong>visokog struka, opuštenog kroja i širokih ravnih nogavica</strong> izrađene su od posebne mješavine trapera koja je <strong>vrlo rastezljiva</strong>, a ipak zadržava osjećaj pravog, klasičnog trapera.</p>
        <ul class="ncj-ticks">
          <?php foreach ( $ncj_opis as $t ) : ?><li><?php echo esc_html( $t ); ?></li><?php endforeach; ?>
        </ul>
        <p class="ncj-big">Svestrane i savršene za svaki dan — komad koji mora imati svaka osnovna garderoba.</p>
      </div>
    </div>
  </div>
</section>

<!-- 2) KAKO PRISTAJU – »Easy to style« (zavihek HOW IT FITS) — video ob besedilu, strani zamenjani -->
<section class="ncj-sec<?php echo $ncj_cls(); ?>">
  <div class="ncj-wrap">
    <div class="ncj-row2 ncj-row2--rev">
      <div class="ncj-media"><?php echo $ncj_video( 'ncj-s2-kombinacije.mp4', 'Traper NORIKS ComfortJeans rasteže se na bedru' ); ?></div>
      <div class="ncj-copy">
        <p class="ncj-kicker">Kako pristaju</p>
        <h2 class="ncj-h2">Lako se <em>kombiniraju</em></h2>
        <p>Nema više dugog razmišljanja o odjevnoj kombinaciji! Ove traperice odrade posao umjesto vas — jamčimo da ćete svaki put kad ih odjenete izgledati <strong>uredno i bez truda</strong>.</p>
        <p>Opušten kroj <strong>prianja u struku</strong>, a od donjeg dijela bedara pada <strong>poluširoko i ravno</strong>. Nosite ih duge (ispod gležnja, iznad poda u cipelama) ili skraćene do gležnja.</p>
        <p class="ncj-big">Jedne traperice, bezbroj kombinacija.</p>
      </div>
    </div>
  </div>
</section>

<!-- 3) KAKO PRISTAJU – »Stretchy and flexible« (zavihek HOW IT FITS) — video ob besedilu -->
<section class="ncj-sec<?php echo $ncj_cls(); ?>">
  <div class="ncj-wrap">
    <div class="ncj-row2">
      <div class="ncj-media"><?php echo $ncj_video( 'ncj-s3-rastezljive.mp4', 'Zakopčavanje visokog struka traperica NORIKS ComfortJeans' ); ?></div>
      <div class="ncj-copy">
        <p class="ncj-kicker">Kako pristaju</p>
        <h2 class="ncj-h2">Rastezljive i <em>fleksibilne</em></h2>
        <p>Bez krutosti, bez ograničenja! Bilo da ste u pokretu ili se odmarate, mekani i fleksibilni traper prilagođava se svakom vašem pokretu.</p>
        <p>Dobivate <strong>savršen spoj rastezljivosti i prave potpore</strong> — da vam uvijek bude udobno.</p>
        <p class="ncj-big">Udobnost koja vas prati cijeli dan.</p>
      </div>
    </div>
  </div>
</section>

<!-- 4) MATERIJAL I NJEGA (zavihek MATERIAL & CARE) — video ob besedilu, strani zamenjani -->
<section class="ncj-sec<?php echo $ncj_cls(); ?>">
  <div class="ncj-wrap">
    <div class="ncj-row2 ncj-row2--rev">
      <div class="ncj-media"><?php echo $ncj_video( 'ncj-s4-tkanina.mp4', 'Izbliza: tkanina rastezljivog trapera NORIKS ComfortJeans' ); ?></div>
      <div class="ncj-copy">
        <p class="ncj-kicker">Materijal i njega</p>
        <h2 class="ncj-h2">Rastezljivi traper <em>od 12 oz</em></h2>
        <p>Traper od 12 oz tkan s <strong>elastičnom potkom za udobnost</strong> i s izgledom pravog krutog trapera — spoj klasične teksture i moderne slobode pokreta.</p>
        <p><strong>Sastav:</strong> pamuk / poliester / elastan</p>
        <p class="ncj-sub">Njega proizvoda</p>
        <ul class="ncj-care">
          <?php foreach ( $ncj_njega as $t ) : ?><li><?php echo esc_html( $t ); ?></li><?php endforeach; ?>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- 5) »Easy to style« (blok s videom) — video ob besedilu -->
<section class="ncj-sec<?php echo $ncj_cls(); ?>">
  <div class="ncj-wrap">
    <div class="ncj-row2">
      <div class="ncj-media"><?php echo $ncj_video( 'ncj-s5-stil.mp4', 'NORIKS ComfortJeans uz dolčevitu, sako i majicu' ); ?></div>
      <div class="ncj-copy">
        <p class="ncj-kicker">Bezvremenski osnovni komad</p>
        <h2 class="ncj-h2">Lako se <em>kombiniraju</em></h2>
        <p>Svestrane bez truda — s ovim <strong>bezvremenskim osnovnim komadom garderobe</strong> ne možete pogriješiti.</p>
        <p>Pogotovo kad su ovoliko udobne.</p>
        <p class="ncj-big">Uz majicu, sako ili dolčevitu — uvijek izgledaju dobro.</p>
      </div>
    </div>
  </div>
</section>

<!-- 6) »Stretchy & flexible« (blok s videom) — video ob besedilu, strani zamenjani -->
<section class="ncj-sec<?php echo $ncj_cls(); ?>">
  <div class="ncj-wrap">
    <div class="ncj-row2 ncj-row2--rev">
      <div class="ncj-media"><?php echo $ncj_video( 'ncj-s6-oblacenje.mp4', 'Oblačenje i rastezanje traperica NORIKS ComfortJeans', 'ncj-vid--tall' ); ?></div>
      <div class="ncj-copy">
        <p class="ncj-kicker">Sloboda pokreta</p>
        <h2 class="ncj-h2">Rastezljive i <em>fleksibilne</em></h2>
        <p>Navucite ih, rastegnite, čučnite — traper je <strong>vrlo rastezljiv</strong>, a ipak zadržava osjećaj klasičnog trapera.</p>
        <p>Od jutarnje kave do večernjeg izlaska: kombinirajte ih s majicom, puloverom ili kaputom.</p>
        <p class="ncj-big">Pokret bez ograničenja.</p>
      </div>
    </div>
  </div>
</section>

<!-- 7) »Real denim, but stretchy & comfortable« (blok s videom) — video ob besedilu -->
<section class="ncj-sec<?php echo $ncj_cls(); ?>">
  <div class="ncj-wrap">
    <div class="ncj-row2">
      <div class="ncj-media"><?php echo $ncj_video( 'ncj-s7-cucanj.mp4', 'Tamnoplave traperice NORIKS ComfortJeans u čučnju i stojećem položaju' ); ?></div>
      <div class="ncj-copy">
        <p class="ncj-kicker">Pravi traper</p>
        <h2 class="ncj-h2">Pravi traper, ali <em>rastezljiv i udoban</em></h2>
        <p>Izgled i tekstura <strong>pravog trapera</strong>, a udobnost kakvu inače pružaju samo rastezljive hlače.</p>
        <p>Visoki struk i metalni patentni zatvarač YKK® drže sve na svom mjestu — i kad čučnete.</p>
        <p class="ncj-big">Klasika koja se kreće s vama.</p>
      </div>
    </div>
  </div>
</section>

<!-- 8) »Stretchy & comfortable waist« (blok s videom) — video ob besedilu, strani zamenjani -->
<section class="ncj-sec<?php echo $ncj_cls(); ?>">
  <div class="ncj-wrap">
    <div class="ncj-row2 ncj-row2--rev">
      <div class="ncj-media"><?php echo $ncj_video( 'ncj-s8-struk.mp4', 'Rastezljiv visoki struk traperica NORIKS ComfortJeans' ); ?></div>
      <div class="ncj-copy">
        <p class="ncj-kicker">Visoki struk</p>
        <h2 class="ncj-h2">Rastezljiv i <em>udoban struk</em></h2>
        <p>Struk prianja uz tijelo i <strong>rasteže se s vama</strong> — ne steže kad sjedite i ostaje na mjestu kad se krećete.</p>
        <p>Veličine od <strong>XXS (22/23) do XXL (34/35)</strong> i šest duljina od L26 do L36 — pravu kombinaciju pronaći ćete u tablici veličina.</p>
        <p class="ncj-big">Udobno od prvog dana.</p>
      </div>
    </div>
  </div>
</section>

<!-- 9) RECENZIJE KUPACA (Okendo) — 1081 po NORIKS, razdelitev zvezdic skalirana na 692 + 5 mnenj -->
<section class="ncj-sec<?php echo $ncj_cls(); ?>">
  <div class="ncj-wrap">
    <p class="ncj-kicker ncj-c">Recenzije kupaca</p>
    <h2 class="ncj-h2 ncj-c">Što kažu <em>naši kupci</em></h2>
    <div class="ncj-score">
      <span class="ncj-score__num">4,8 / 5</span>
      <?php echo $ncj_stars( 5 ); ?>
      <span class="ncj-score__txt">Na temelju 1081 recenzije · <span class="ncj-ok">✓ Potvrđene kupnje</span></span>
    </div>
    <ul class="ncj-dist">
      <?php foreach ( $ncj_dist as $d ) : ?>
      <li>
        <span class="ncj-dist__lbl"><?php echo (int) $d[0]; ?> ★</span>
        <span class="ncj-dist__bar"><span style="width:<?php echo (int) $d[1]; ?>%"></span></span>
        <span class="ncj-dist__pct"><?php echo esc_html( $d[2] ); ?> (<?php echo (int) $d[3]; ?>)</span>
      </li>
      <?php endforeach; ?>
    </ul>
    <p class="ncj-reco"><strong>98 %</strong> kupaca preporučuje ovaj proizvod · Pristajanje: <strong>točno prema veličini</strong></p>
    <div class="ncj-reviews">
      <?php foreach ( $ncj_reviews as $r ) : ?>
      <article class="ncj-card">
        <div class="ncj-card__body">
          <?php echo $ncj_stars( 5 ); ?>
          <h3 class="ncj-card__title"><?php echo esc_html( $r['naslov'] ); ?></h3>
          <p class="ncj-card__txt">„<?php echo esc_html( $r['tekst'] ); ?>”</p>
          <p class="ncj-card__meta"><?php echo esc_html( $r['meta'] ); ?></p>
          <p class="ncj-card__name"><?php echo esc_html( $r['ime'] ); ?> <span class="ncj-ok">✓ Potvrđena kupnja</span></p>
        </div>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<style>
/* NORIKS stil (predloga why-hoodiedress.php / why-hands.php): oznaka + naslov z ležečim poudarkom, slika/video ob
   besedilu, izmenjujoča ozadja in strani. Modra paleta trapera (#1f568e). */
.ncj-sec { padding: 60px 0; font-family: 'Poppins', system-ui, -apple-system, 'Segoe UI', Roboto, Arial, sans-serif; color: #1c2430; background: #fff; }
.ncj-sec * { box-sizing: border-box; }
.ncj-tint { background: #f1f6fb; }
.ncj-wrap { width: 100%; max-width: 1200px; margin: 0 auto; padding: 0 24px; }
.ncj-c { text-align: center; }
.ncj-sec h2, .ncj-sec h3 { font-family: inherit; text-transform: none; letter-spacing: 0; }
.ncj-kicker, .ncj-copy p.ncj-kicker { font-size: 12.5px; line-height: 1.4; font-weight: 700; letter-spacing: .14em; text-transform: uppercase; color: #1f568e; margin: 0 0 10px; }
.ncj-h2 { font-weight: 700; font-size: clamp(25px, 3.1vw, 36px); line-height: 1.2; margin: 0 0 14px; color: #1c2430; }
.ncj-h2 em { font-style: italic; color: #1f568e; }
.ncj-sec img { display: block; width: 100%; height: auto; }

/* slika / video ob besedilu */
.ncj-row2 { display: grid; grid-template-columns: 1fr 1fr; gap: 56px; align-items: center; }
.ncj-row2--rev .ncj-media { order: 2; }
.ncj-media > img { border-radius: 10px; box-shadow: 0 2px 4px rgba(16,36,64,.05), 0 14px 40px rgba(16,36,64,.10); max-width: 520px; margin: 0 auto; aspect-ratio: 1 / 1; object-fit: cover; }
.ncj-vid { position: relative; overflow: hidden; background: #dce8f5; border-radius: 10px; margin: 0 auto; box-shadow: 0 2px 4px rgba(16,36,64,.05), 0 14px 40px rgba(16,36,64,.10); }
.ncj-vid video { display: block; width: 100%; height: 100%; object-fit: cover; }
.ncj-vid--sq { aspect-ratio: 1 / 1; max-width: 520px; }
.ncj-vid--tall { aspect-ratio: 3 / 4; max-width: 420px; }
.ncj-copy p { font-size: 16px; line-height: 1.7; color: #3c4654; margin: 0 0 14px; }
.ncj-copy p strong { color: #1c2430; font-weight: 600; }
.ncj-copy p.ncj-big { font-size: 19px; font-weight: 700; color: #1c2430; line-height: 1.45; margin-top: 6px; }
.ncj-copy p.ncj-sub { font-size: 13px; font-weight: 700; letter-spacing: .1em; text-transform: uppercase; color: #1c2430; margin: 18px 0 8px; }
.ncj-ticks { list-style: none; margin: 4px 0 16px; padding: 0; }
.ncj-ticks li { position: relative; padding-left: 32px; margin: 0 0 9px; font-size: 16px; line-height: 1.55; color: #26303d; }
.ncj-ticks li::before { content: "✓"; position: absolute; left: 0; top: 1px; width: 22px; height: 22px; border-radius: 50%; background: #1f568e; color: #fff; font-size: 12px; font-weight: 800; line-height: 22px; text-align: center; }
.ncj-care { list-style: none; margin: 0; padding: 0; display: grid; grid-template-columns: 1fr 1fr; gap: 6px 18px; }
.ncj-care li { position: relative; padding-left: 16px; font-size: 14.5px; line-height: 1.5; color: #3c4654; }
.ncj-care li::before { content: ""; position: absolute; left: 0; top: 8px; width: 7px; height: 7px; border-radius: 50%; background: #1f568e; }

/* ocjene */
.ncj-stars { color: #f2a516; letter-spacing: 1px; font-size: 15px; }
.ncj-stars__off { color: #dfe5ec; }
.ncj-score { display: flex; justify-content: center; align-items: center; gap: 12px; margin: 0 0 24px; flex-wrap: wrap; }
.ncj-score__num { font-size: 28px; font-weight: 700; color: #1c2430; }
.ncj-score .ncj-stars { font-size: 20px; }
.ncj-score__txt { font-size: 14.5px; color: #5a6676; }
.ncj-dist { list-style: none; margin: 0 auto 18px; padding: 0; max-width: 460px; }
.ncj-dist li { display: grid; grid-template-columns: 38px 1fr 96px; gap: 10px; align-items: center; margin: 0 0 8px; font-size: 14px; color: #1c2430; }
.ncj-dist__lbl { font-weight: 600; white-space: nowrap; }
.ncj-dist__bar { display: block; height: 10px; border-radius: 6px; background: #dce8f5; overflow: hidden; }
.ncj-dist__bar span { display: block; height: 100%; background: #1f568e; border-radius: 6px; }
.ncj-dist__pct { color: #5a6676; white-space: nowrap; }
.ncj-reco { text-align: center; font-size: 15px; color: #3c4654; margin: 0 0 30px; }
.ncj-reco strong { color: #1c2430; }

/* mnenja */
.ncj-reviews { display: grid; grid-template-columns: repeat(5, 1fr); gap: 16px; align-items: start; }
.ncj-card { background: #fff; border: 1px solid #c9d8ea; border-radius: 10px; overflow: hidden; display: flex; flex-direction: column; }
.ncj-sec:not(.ncj-tint) .ncj-card { background: #f1f6fb; }
.ncj-card__body { padding: 16px; }
.ncj-card__title { font-size: 15px; font-weight: 700; color: #1c2430; margin: 8px 0 6px; line-height: 1.35; }
.ncj-card__txt { font-size: 14.5px; line-height: 1.6; color: #2f3946; margin: 0 0 10px; font-style: italic; }
.ncj-card__meta { font-size: 12.5px; line-height: 1.5; color: #5a6676; margin: 0 0 8px; }
.ncj-card__name { font-size: 13.5px; font-weight: 600; color: #1c2430; margin: 0; }
.ncj-ok { color: #2f9e5f; font-weight: 600; font-size: 12px; margin-left: 4px; font-style: normal; }

@media (max-width: 989px) {
  .ncj-row2 { gap: 32px; }
  .ncj-reviews { grid-template-columns: repeat(2, 1fr); }
}
@media (max-width: 749px) {
  .ncj-sec { padding: 42px 0; }
  .ncj-wrap { padding: 0 16px; }
  .ncj-row2 { grid-template-columns: 1fr; gap: 24px; }
  .ncj-row2--rev .ncj-media { order: 0; }
  .ncj-reviews { gap: 12px; }
  .ncj-card__body { padding: 12px; }
}
@media (max-width: 480px) {
  .ncj-reviews { grid-template-columns: 1fr; }
  .ncj-care { grid-template-columns: 1fr; }
}

/* galerija izdelka: sličice največ v 2 vrstah (5 na vrsto), ostale slike so dosegljive z drsenjem glavne slike */
.product_cat-orto-comfortjeans .flex-control-thumbs li:nth-child(n+11) { display: none !important; }

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
.woocommerce-product-details__short-description .ncj-tick {
  position: absolute !important; left: 0 !important; top: 1px !important;
  width: 21px; height: 21px; border-radius: 50%;
  background: #2f9e5f !important; color: #fff !important;
  font-size: 12px !important; font-weight: 800 !important; line-height: 21px !important;
  text-align: center !important; display: inline-block !important; }
.woocommerce-product-details__short-description p:first-of-type { font-size: 16px; line-height: 1.55; }
</style>
