<?php
/**
 * product-bottom: NORIKS Slippers — tople papuce s debelim potplatom za kucu i van (orto-slippers).
 * Original: Slippers ("The Original") — vsebina in vrstni red 1:1,
 * oblika po NORIKS stilu (predloga why-hands.php / why-corksandals.php):
 *   1) Video kupke (1. video iz nakupne skatle) — govor preveden v hrvascino in vzgan kot napisi, vodni znak
 *      z imenom znamke odstranjen, utisan — ob besedilu
 *   2) Video kupca (2. video) — angleski vzgani napisi prekriti in nadomesceni s hrvaskimi, vodni znak
 *      odstranjen, utisan — ob besedilu
 *   3) Iskustvo NORIKS Slippers ("The ... Experience": 3x deblji potplat / potporni dizajn / izdrzljiva izrada) — slika ob besedilu
 *   4) Kvalitetan potplat ("Quality Sole") — slika ob besedilu (vtisnjen logotip na potplatu retusiran)
 *   5) Pouzdano prianjanje ("Reliable Traction") — slika ob besedilu
 *   6) Ojacana zavrsna obrada ("Reinforced Finish") — slika ob besedilu (napis na etiketi retusiran)
 *   7) Kupci nam vjeruju ("Trusted by 100,000+ Customers" — stevilka konkurenta izpuscena) — 4 recenzije, 3 s fotografijami
 *   8) Iz vasih domova ("Tag us on Instagram! @...") — 4 fotografije kupcev ob besedilu (brez imena profila znamke)
 *   9) Recenzije kupaca (ocene 82/9/3/2/3 % skalirane na 692, pozitivne recenzije z originala)
 * FAQ z originala je v reviews.php ($slippers_faq). Odstevalnik ("Sale ends midnight tonight"), "Over 215,000 pairs sold",
 * "Frequently bought together" (vrecka za pranje), "Mix & Match" in 3. video (embalaza z znamko) so izpusceni (NORIKS stil).
 * Slike / videi: img/slippers/ (brez tuje znamke, napisi v hrvascini).
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$nsl      = get_template_directory_uri() . '/img/slippers/';
$nsl_path = get_template_directory() . '/img/slippers/';
$nsl_img  = function( $file, $alt ) use ( $nsl, $nsl_path ) {
  if ( ! $file || ! file_exists( $nsl_path . $file ) ) { return ''; }
  return '<img src="' . esc_url( $nsl . $file ) . '" alt="' . esc_attr( $alt ) . '" loading="lazy">';
};
$nsl_vid  = function( $file ) use ( $nsl, $nsl_path ) {
  if ( ! $file || ! file_exists( $nsl_path . $file . '.mp4' ) ) { return ''; }
  return '<video src="' . esc_url( $nsl . $file . '.mp4' ) . '" poster="' . esc_url( $nsl . $file . '-poster.webp' ) . '" muted autoplay loop playsinline preload="metadata"></video>';
};
$nsl_stars = function( $n ) {
  $n = max( 0, min( 5, (int) $n ) );
  $out = '<span class="nsl-stars" aria-label="' . esc_attr( $n . ' od 5 zvjezdica' ) . '">';
  for ( $i = 1; $i <= 5; $i++ ) { $out .= '<i' . ( $i > $n ? ' class="is-off"' : '' ) . '>★</i>'; }
  return $out . '</span>';
};

/* 7) istaknute recenzije 1:1 z originala (prevedene) */
$nsl_trusted = array(
  array( 'slika' => 'sl-rv-01.webp', 'ime' => 'Heidi', 'naslov' => 'Apsolutno obožavam ove papuče!', 'tekst' => 'Kupila sam po par prijateljima i obitelji, a onda i još jedan par sebi! Toliko su udobne da sam u njima otišla i u grad i na trening hrvanja! Mekane su za hodanje, griju stopala, ali nisu prevruće — baš kako treba!' ),
  array( 'slika' => 'sl-rv-02.webp', 'ime' => 'Michelle', 'naslov' => 'Ove papuče su najbolje!', 'tekst' => 'Tako tople i udobne! Kupila sam ih mužu i kćeri za Božić. Oboje su rekli da su to najbolje papuče koje su ikad imali. Slažem se! Obožavam ih! Sigurno ću kupiti još boja.' ),
  array( 'slika' => 'sl-rv-03.webp', 'ime' => 'Lynne', 'naslov' => 'Savršene!', 'tekst' => 'Veličina točno odgovara, griju stopala, jako su udobne i mekane. Imam jako visok hrbat stopala i mnogi modeli mi uopće ne pristaju ili su neudobni. Ove pristaju savršeno, bez boli i nelagode.' ),
  array( 'slika' => '', 'ime' => 'Camara', 'naslov' => 'Ovo mi je druga narudžba', 'tekst' => 'Ove papuče su božanstvene!!! Nožni prsti su mi topli, ne moram paziti da mi spadnu s nogu, a čini mi se da mi čak i omekšavaju stopala!' ),
);

/* 9) recenzije 1:1 z originala (prevedene, samo pozitivne; imena skrajsana) */
$nsl_reviews = array(
  array( 'ime' => 'Pat D.', 'z' => 5, 'tekst' => 'Kupila sam ove papuče za oba sina i OBOŽAVAJU ih. Jedan ih nosi i vani — dok kosi travnjak, pere auto i obavlja poslove po gradu. Kupila sam i par snahi. Tko god ih dobije, oduševljen je. NAJBOLJE papuče IKAD.' ),
  array( 'ime' => 'Loraine A.', 'z' => 5, 'tekst' => 'Ove papuče stvarno dobro pristaju, a boje izgledaju predivno.' ),
  array( 'ime' => 'Suzanne T.', 'z' => 5, 'tekst' => 'Bože, ovo su najbolje papuče koje sam ikad imala! Mekane, tople i jednostavno udobne!' ),
  array( 'ime' => 'Erika Z.', 'z' => 5, 'tekst' => 'Tako udobne. Jako mekane i tople. Obožavam ih.' ),
  array( 'ime' => 'Catherine L.', 'z' => 5, 'tekst' => 'Hodam kao po oblacima, a ne kližu se. Udobne su, a crveni karo izgleda prekrasno.' ),
  array( 'ime' => 'Amanda D.', 'z' => 5, 'tekst' => 'Mama ih OBOŽAVA — odlično pristaju, ugodne su i tople, a karo uzorak joj se posebno sviđa. Lijep detalj.' ),
  array( 'ime' => 'Andrea P.', 'z' => 5, 'tekst' => 'Tako su mekane i tople da ih nosim cijeli dan, svaki dan.' ),
  array( 'ime' => 'Gordon S.', 'z' => 5, 'tekst' => 'Jako udobne i griju stopala.' ),
  array( 'ime' => 'Christine G.', 'z' => 5, 'tekst' => 'Kupila sam ih mužu. Zadovoljan je, ali bi volio da su malo veće.' ),
  array( 'ime' => 'Sarah A.', 'z' => 5, 'tekst' => 'Obožavam ih! Jako tople i udobne!' ),
  array( 'ime' => 'Zachary Y.', 'z' => 5, 'tekst' => 'Najbolje papuče ikad.' ),
  array( 'ime' => 'Julie H.', 'z' => 5, 'tekst' => 'Jako ih volim!' ),
);
// Število recenzij usklajeno z glavo strani in zavihki recenzij teme (1081 skupaj = 692 izdelka + 389 dostave);
// razmerje 82 / 9 / 3 / 2 / 3 % kot na originalu, skalirano na 692.
$nsl_dist = array( 5 => array( '568', 82 ), 4 => array( '64', 9 ), 3 => array( '24', 3 ), 2 => array( '12', 2 ), 1 => array( '24', 3 ) );
?>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap">

<!-- 1) VIDEO KUPKE — kao da hodate po oblaku -->
<section class="nsl-sec nsl-tint">
  <div class="nsl-wrap">
    <div class="nsl-row2">
      <div class="nsl-media nsl-media--video"><?php echo $nsl_vid( 'sl-video-1-hr' ); ?></div>
      <div class="nsl-copy">
        <p class="nsl-kicker">Kupci ih obožavaju</p>
        <h2 class="nsl-h3">Stopala se doslovno <em>tope u mekom plišu</em></h2>
        <p>„U ovim papučama stopala mi se doslovno tope u toplom, mekanom plišu. Nosim ih cijeli dan, čak i kad izađem van, jer imaju <strong>čvrst potplat</strong>.”</p>
        <p>NORIKS Slippers su <strong>unisex</strong> — zato ih kupci kupuju za cijelu obitelj: za mamu, tatu, brata i partnera. Mogu se nositi u kući, a za kratke izlaske van ne morate se presvlačiti.</p>
        <p class="nsl-big">Jedne papuče — za kuću i za brze izlaske van.</p>
      </div>
    </div>
  </div>
</section>

<!-- 2) VIDEO KUPCA — debeo potplat, mekana podstava, pranje u perilici -->
<section class="nsl-sec">
  <div class="nsl-wrap">
    <div class="nsl-row2 nsl-row2--rev">
      <div class="nsl-media nsl-media--video"><?php echo $nsl_vid( 'sl-video-2-hr' ); ?></div>
      <div class="nsl-copy">
        <p class="nsl-kicker">Iskustva kupaca</p>
        <h2 class="nsl-h3">Debeo potplat, <em>mekana podstava od flisa</em></h2>
        <p>„Kupio sam par za sebe i za partnera i oboje ih obožavamo. Imaju <strong>jako debeo potplat</strong> koji je savršen i za izlazak van.”</p>
        <p>„Najdraža mi je <strong>mekana podstava od flisa</strong> zbog koje su tako mekane i udobne. A najbolje od svega — <strong>peru se u perilici</strong>. Oprao sam ih već dvaput i izgledaju gotovo kao nove.”</p>
        <p class="nsl-big">Udobnost koja traje i nakon pranja.</p>
      </div>
    </div>
  </div>
</section>

<!-- 3) ISKUSTVO NORIKS SLIPPERS — slika ob besedilu -->
<section class="nsl-sec nsl-tint">
  <div class="nsl-wrap">
    <div class="nsl-row2">
      <div class="nsl-media nsl-media--tall"><?php echo $nsl_img( 'sl-01-iskustvo.webp', 'Prijatelji u papučama NORIKS Slippers u različitim bojama' ); ?></div>
      <div class="nsl-copy">
        <p class="nsl-kicker">Iskustvo NORIKS Slippers</p>
        <h2 class="nsl-h3">Od jutra kod kuće do <em>brzih izlazaka van</em></h2>
        <p>NORIKS Slippers su par koji ćete zaista držati kraj vrata.</p>
        <ul class="nsl-chips">
          <li><span>✓</span> 3x deblji potplat</li>
          <li><span>✓</span> Potporni dizajn</li>
          <li><span>✓</span> Izdržljiva izrada</li>
        </ul>
        <p>NORIKS Slippers napravljene su za stvaran život. Uz amortizaciju <strong>3x deblju od običnih papuča</strong> stopala dobivaju potporu koja im treba — bez gubitka mekanog, ugodnog osjećaja. Ojačani potplat izdržat će svakodnevno nošenje, a ne samo jednu sezonu.</p>
        <p class="nsl-big">Udobnost, potpora i izdržljivost — sve u jednom.</p>
      </div>
    </div>
  </div>
</section>

<!-- 4) KVALITETAN POTPLAT — slika ob besedilu -->
<section class="nsl-sec">
  <div class="nsl-wrap">
    <div class="nsl-row2 nsl-row2--rev">
      <div class="nsl-media"><?php echo $nsl_img( 'sl-02-potplat.webp', 'Debeo, ojačan potplat papuča NORIKS Slippers' ); ?></div>
      <div class="nsl-copy">
        <p class="nsl-kicker">Kvalitetan potplat</p>
        <h2 class="nsl-h3">Izrađen za <em>prianjanje i izdržljivost</em></h2>
        <p>Potplat je osmišljen da dobro prianja i dugo traje — <strong>podnosi svakodnevno nošenje</strong>, a da se ne istroši.</p>
        <p class="nsl-big">Čvrst temelj za svaki korak.</p>
      </div>
    </div>
  </div>
</section>

<!-- 5) POUZDANO PRIANJANJE — slika ob besedilu -->
<section class="nsl-sec nsl-tint">
  <div class="nsl-wrap">
    <div class="nsl-row2">
      <div class="nsl-media"><?php echo $nsl_img( 'sl-03-prianjanje.webp', 'Protuklizni uzorak na potplatu papuča NORIKS Slippers' ); ?></div>
      <div class="nsl-copy">
        <p class="nsl-kicker">Pouzdano prianjanje</p>
        <h2 class="nsl-h3">Protuklizni uzorak za <em>siguran korak</em></h2>
        <p>Protuklizni uzorak drži <strong>svaki korak stabilnim</strong> — od glatkih podova do kratkih izlazaka van.</p>
        <p class="nsl-big">Siguran korak u kući i ispred nje.</p>
      </div>
    </div>
  </div>
</section>

<!-- 6) OJACANA ZAVRSNA OBRADA — slika ob besedilu -->
<section class="nsl-sec">
  <div class="nsl-wrap">
    <div class="nsl-row2 nsl-row2--rev">
      <div class="nsl-media"><?php echo $nsl_img( 'sl-04-obrada.webp', 'Čvrsti šavovi i mekani flis papuča NORIKS Slippers' ); ?></div>
      <div class="nsl-copy">
        <p class="nsl-kicker">Ojačana završna obrada</p>
        <h2 class="nsl-h3">Čvrsti šavovi i <em>izdržljive tkanine</em></h2>
        <p>Čvrsti šavovi i izdržljive tkanine <strong>zadržavaju oblik i udobnost</strong> i nakon dugog nošenja.</p>
        <p class="nsl-big">Napravljene da traju iz sezone u sezonu.</p>
      </div>
    </div>
  </div>
</section>

<!-- 7) KUPCI NAM VJERUJU — 4 istaknute recenzije -->
<section class="nsl-sec nsl-tint">
  <div class="nsl-wrap">
    <p class="nsl-kicker nsl-c">Povjerenje kupaca</p>
    <h2 class="nsl-h2 nsl-c">Kupci nam <em>vjeruju</em></h2>
    <div class="nsl-trust">
      <?php foreach ( $nsl_trusted as $r ) : ?>
      <article class="nsl-rv">
        <?php if ( $r['slika'] ) : ?><div class="nsl-rv__img"><?php echo $nsl_img( $r['slika'], 'Fotografija kupca: ' . $r['ime'] ); ?></div><?php endif; ?>
        <div class="nsl-rv__body">
          <?php echo $nsl_stars( 5 ); ?>
          <p class="nsl-rv__title"><?php echo esc_html( $r['naslov'] ); ?></p>
          <p class="nsl-rv__txt"><?php echo esc_html( $r['tekst'] ); ?></p>
          <p class="nsl-rv__name"><?php echo esc_html( $r['ime'] ); ?> <span>· Provjereni kupac</span></p>
        </div>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- 8) IZ VASIH DOMOVA — fotografije kupcev ob besedilu -->
<section class="nsl-sec">
  <div class="nsl-wrap">
    <div class="nsl-row2 nsl-row2--rev">
      <div class="nsl-media nsl-grid4">
        <?php echo $nsl_img( 'sl-ig-01.webp', 'Kupka u ljubičastim papučama NORIKS Slippers' ); ?>
        <?php echo $nsl_img( 'sl-ig-02.webp', 'Obitelj u papučama NORIKS Slippers u dnevnom boravku' ); ?>
        <?php echo $nsl_img( 'sl-ig-03.webp', 'Papuče NORIKS Slippers ispred televizora uz šalicu čaja' ); ?>
        <?php echo $nsl_img( 'sl-ig-04.webp', 'Mačka i zelena papuča NORIKS Slippers' ); ?>
      </div>
      <div class="nsl-copy">
        <p class="nsl-kicker">Iz vaših domova</p>
        <h2 class="nsl-h3">Udobnost u <em>svakom kutku doma</em></h2>
        <p>Kupci nam šalju fotografije svojih papuča — na kauču uz kavu, u igri s djecom, ispred televizora i u društvu kućnih ljubimaca.</p>
        <p>Podijelite i vi svoje trenutke udobnosti i <strong>označite nas na društvenim mrežama</strong>!</p>
        <p class="nsl-big">Vaše papuče, vaši trenuci.</p>
      </div>
    </div>
  </div>
</section>

<!-- 9) RECENZIJE KUPACA -->
<section class="nsl-sec nsl-tint nsl-sec--reviews">
  <div class="nsl-wrap">
    <p class="nsl-kicker nsl-c">Recenzije kupaca</p>
    <h2 class="nsl-h2 nsl-c">Što kažu <em>naši kupci</em></h2>
    <div class="nsl-summary">
      <div class="nsl-summary__score"><strong>4,7</strong><?php echo $nsl_stars( 5 ); ?><span>na temelju 692 recenzije proizvoda</span></div>
      <div class="nsl-summary__bars">
        <?php foreach ( $nsl_dist as $z => $d ) : ?>
        <div class="nsl-bar"><span class="nsl-bar__lbl"><?php echo (int) $z; ?> ★</span><span class="nsl-bar__track"><span style="width:<?php echo (int) $d[1]; ?>%"></span></span><span class="nsl-bar__n"><?php echo esc_html( $d[0] ); ?></span></div>
        <?php endforeach; ?>
      </div>
    </div>
    <div class="nsl-revs">
      <?php foreach ( $nsl_reviews as $r ) : ?>
      <article class="nsl-rv">
        <div class="nsl-rv__body">
          <?php echo $nsl_stars( $r['z'] ); ?>
          <p class="nsl-rv__txt"><?php echo esc_html( $r['tekst'] ); ?></p>
          <p class="nsl-rv__name"><?php echo esc_html( $r['ime'] ); ?> <span>· Provjereni kupac</span></p>
        </div>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<style>
/* NORIKS stil (predloga why-hands.php / why-corksandals.php): oznaka + naslov z lezecim poudarkom, slika/video ob besedilu,
   izmenjujoca ozadja. Barvni poudarek izdelka: zajbljevo zelena (#5f7f57). */
.nsl-sec { padding: 60px 0; font-family: 'Poppins', system-ui, -apple-system, 'Segoe UI', Roboto, Arial, sans-serif; color: #26302a; background: #fff; }
.nsl-sec * { box-sizing: border-box; }
.nsl-tint { background: #f3f6f0; }
.nsl-wrap { width: 100%; max-width: 1200px; margin: 0 auto; padding: 0 24px; }
.nsl-c { text-align: center; }
.nsl-sec h2, .nsl-sec h3 { font-family: inherit; text-transform: none; letter-spacing: 0; }
.nsl-kicker, .nsl-copy p.nsl-kicker { font-size: 12.5px; line-height: 1.4; font-weight: 700; letter-spacing: .14em; text-transform: uppercase; color: #5f7f57; margin: 0 0 10px; }
.nsl-h2 { font-weight: 700; font-size: clamp(25px, 3.1vw, 36px); line-height: 1.2; margin: 0 0 30px; color: #26302a; }
.nsl-h2 em, .nsl-h3 em { font-style: italic; color: #5f7f57; }
.nsl-h3 { font-weight: 700; font-size: clamp(22px, 2.6vw, 30px); line-height: 1.25; margin: 0 0 16px; color: #26302a; }
.nsl-sec img, .nsl-sec video { display: block; width: 100%; height: auto; }

/* slika/video ob besedilu */
.nsl-row2 { display: grid; grid-template-columns: 1fr 1fr; gap: 56px; align-items: center; }
.nsl-row2--rev .nsl-media { order: 2; }
.nsl-media img, .nsl-media video { aspect-ratio: 1 / 1; object-fit: cover; border-radius: 8px; background: #fff; box-shadow: 0 2px 4px rgba(30,45,25,.05), 0 14px 40px rgba(30,45,25,.10); }
.nsl-media--tall img { aspect-ratio: 4 / 5; }
.nsl-media--video video { aspect-ratio: 9 / 16; max-width: 400px; margin: 0 auto; }
.nsl-copy p { font-size: 16px; line-height: 1.7; color: #4d5a4f; margin: 0 0 14px; }
.nsl-copy p strong { color: #26302a; font-weight: 600; }
.nsl-copy p.nsl-big { font-size: 19px; font-weight: 700; color: #26302a; line-height: 1.45; margin-top: 6px; }
.nsl-chips { list-style: none; margin: 0 0 16px; padding: 0; display: flex; flex-wrap: wrap; gap: 8px; }
.nsl-chips li { display: inline-flex; align-items: center; gap: 7px; background: #fff; border: 1px solid #d6e2d0; border-radius: 999px; padding: 7px 14px 7px 8px; font-size: 14.5px; font-weight: 600; color: #26302a; }
.nsl-chips li span { width: 21px; height: 21px; border-radius: 50%; background: #5f7f57; color: #fff; font-size: 12px; font-weight: 800; line-height: 21px; text-align: center; }

/* fotografije kupcev 2 x 2 */
.nsl-grid4 { display: grid; grid-template-columns: 1fr 1fr; gap: 12px; }
.nsl-grid4 img { aspect-ratio: 3 / 4; }

/* zvjezdice */
.nsl-stars { display: inline-flex; gap: 3px; margin: 0 0 12px; vertical-align: middle; }
.nsl-stars i { font-style: normal; width: 22px; height: 22px; background: #00b67a; color: #fff; font-size: 15px; line-height: 22px; text-align: center; }
.nsl-stars i.is-off { background: #dcdce6; }

/* recenzije */
.nsl-trust { display: grid; grid-template-columns: repeat(4, 1fr); gap: 18px; align-items: start; }
.nsl-summary { display: flex; align-items: center; justify-content: center; gap: 40px; margin: 0 0 34px; flex-wrap: wrap; }
.nsl-summary__score { display: flex; flex-direction: column; align-items: center; gap: 6px; }
.nsl-summary__score strong { font-size: 44px; line-height: 1; font-weight: 700; }
.nsl-summary__score .nsl-stars { margin: 0; }
.nsl-summary__score span { font-size: 14px; color: #4d5a4f; }
.nsl-summary__bars { min-width: 280px; }
.nsl-bar { display: flex; align-items: center; gap: 10px; font-size: 14px; color: #4d5a4f; margin: 0 0 6px; }
.nsl-bar__lbl { width: 30px; white-space: nowrap; }
.nsl-bar__track { flex: 1 1 auto; height: 9px; background: #e2eadc; border-radius: 6px; overflow: hidden; min-width: 160px; }
.nsl-bar__track span { display: block; height: 100%; background: #5f7f57; }
.nsl-bar__n { width: 64px; white-space: nowrap; }
.nsl-revs { columns: 3; column-gap: 18px; }
.nsl-rv { background: #fff; border: 1px solid #d6e2d0; border-radius: 10px; overflow: hidden; break-inside: avoid; margin: 0 0 18px; display: inline-block; width: 100%; }
.nsl-trust .nsl-rv { margin: 0; }
.nsl-rv__img img { aspect-ratio: 4 / 5; object-fit: cover; }
.nsl-rv__body { padding: 16px 18px 14px; }
.nsl-rv .nsl-stars { margin-bottom: 10px; }
.nsl-rv .nsl-stars i { width: 19px; height: 19px; font-size: 13px; line-height: 19px; }
.nsl-rv__title { font-size: 15.5px; font-weight: 700; color: #26302a; margin: 0 0 8px; line-height: 1.4; }
.nsl-rv__txt { font-size: 14.5px; line-height: 1.6; color: #3d473f; margin: 0 0 12px; }
.nsl-rv__name { font-size: 13.5px; font-weight: 600; color: #26302a; margin: 0; border-top: 1px solid #d6e2d0; padding-top: 12px; }
.nsl-rv__name span { font-weight: 400; color: #2e7d32; }

@media (max-width: 989px) {
  .nsl-revs { columns: 2; }
  .nsl-trust { grid-template-columns: repeat(2, 1fr); }
  .nsl-row2 { gap: 32px; }
}
@media (max-width: 749px) {
  .nsl-sec { padding: 42px 0; }
  .nsl-wrap { padding: 0 16px; }
  .nsl-revs { columns: 1; }
  .nsl-trust { grid-template-columns: 1fr; }
  .nsl-row2 { grid-template-columns: 1fr; gap: 24px; }
  .nsl-row2--rev .nsl-media { order: 0; }
}

/* galerija izdelka: sličice največ v 2 vrstah (5 na vrsto), ostale slike so dosegljive z drsenjem glavne slike */
.product_cat-orto-slippers .flex-control-thumbs li:nth-child(n+11) { display: none !important; }

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
.woocommerce-product-details__short-description .nsl-tick {
  position: absolute !important; left: 0 !important; top: 1px !important;
  width: 21px; height: 21px; border-radius: 50%;
  background: #2f9e5f !important; color: #fff !important;
  font-size: 12px !important; font-weight: 800 !important; line-height: 21px !important;
  text-align: center !important; display: inline-block !important; }
.woocommerce-product-details__short-description p:first-of-type { font-size: 16px; line-height: 1.55; }
</style>
