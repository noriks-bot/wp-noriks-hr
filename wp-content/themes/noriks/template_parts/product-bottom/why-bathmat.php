<?php
/**
 * product-bottom: NORIKS BathMat — upijajući protuklizni tepih za kupaonicu (orto-bathmat).
 * Original: modrnizd.com/products/absorbent-bath-mats-quick-drying-bathroom-rug-non-slip-bath-tub-side-area-rug-napa-skin-floor-mats-home-oil-proof-kitchen-mat
 * — vsebina in vrstni red 1:1 z originalom, oblika po NORIKS stilu (predloga why-neckmassager.php / why-hands.php),
 * poudarek modra (voda, kupaonica) #1f568e, svetlo #eef4fa.
 *   1) nakupna škatla: uvod + "Why 100,000+ homes made the switch" + zavihek "Care & Sizing"
 *      -> Zašto NORIKS BathMat (slika usporedbe veličina ob besedilu; 100,000+ -> tisuće)
 *   2) "Instant Absorption"                     -> Trenutačno upijanje (slika ob besedilu)
 *   3) "Dries Fast, Stays Fresh"                -> Brzo se suši, ostaje svjež (slika 3 koraka s hrvaškimi oznakami)
 *   4) "No Sliding. No Slipping. No Bunching."  -> Protuklizna baza (slika s hrvaško oznako)
 *   5) "Odor & Mold Resistant"                  -> Bez mirisa i plijesni (slika ob besedilu)
 *   6) "4 Layers, 1 Game Changing Mat"          -> 4 sloja (slika s hrvaškimi oznakami slojev)
 *   7) "Why You Should Choose Us" (MagicMat / Knock-Offs) -> usporedba NORIKS / Jeftine kopije, 10 vrstic
 *   8) "What Our Customers Are Saying..." (5 izjav)        -> 5 izjav (imena in mesta lokalizirana, »from the US« izpuščeno)
 *   9) Loox recenzije (4.9 / 2102)               -> 4,9 / 1081 + 5 mnenj s fotografijami kupcev
 * Izpuščeno: »As seen on« logotipi (InStyle, Vogue, Elle …), zavihka Shipping & Delivery in Money-Back Guarantee
 * (NORIKS pogoji so v standardnih harmonikah), You may also like, noga trgovine. Logotip »M« s preprog odstranjen.
 * FAQ je v reviews.php ($bathmat_faq), mnenja v auto_reviews/HR_bathmat.php, opis + nega + tablica v meta.php.
 * Slike: img/bathmat/ (nbm-…).
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$nbm      = get_template_directory_uri() . '/img/bathmat/';
$nbm_path = get_template_directory() . '/img/bathmat/';
$nbm_img  = function( $file, $alt, $cls = '' ) use ( $nbm, $nbm_path ) {
  if ( ! $file || ! file_exists( $nbm_path . $file ) ) { return ''; }
  return '<img src="' . esc_url( $nbm . $file ) . '" alt="' . esc_attr( $alt ) . '" loading="eager"' . ( $cls ? ' class="' . esc_attr( $cls ) . '"' : '' ) . '>';
};
$nbm_stars = function( $n ) {
  $n = max( 0, min( 5, (int) $n ) );
  return '<span class="nbm-stars" aria-label="' . $n . ' od 5 zvjezdica">' . str_repeat( '★', $n ) . '<span class="nbm-stars__off">' . str_repeat( '★', 5 - $n ) . '</span></span>';
};

/* 6) 4 sloja */
$nbm_slojevi = array(
  array( 'Brzosušeća površina', 'upija vlagu u nekoliko sekundi za čist i suh osjećaj.' ),
  array( 'Jezgra otvorenih ćelija', 'odvodi vodu i ubrzava isparavanje.' ),
  array( 'Sloj za kontrolu vlage', 'sprječava natapanje i plijesan.' ),
  array( 'Protuklizna baza', 'čvrsto drži tepih na svakoj podlozi.' ),
);

/* 7) usporedba: NORIKS / jeftine kopije (kljukice in križci 1:1 z originala) */
$nbm_cmp = array(
  array( 'Tanak, nizak profil', true ),
  array( 'Upija vodu', true ),
  array( 'Višeslojna konstrukcija', false ),
  array( 'Trenutačno upijanje', false ),
  array( 'Suši se za nekoliko minuta', false ),
  array( 'Otporan na mirise i plijesan', false ),
  array( 'Nikad ne kliže i ne pomiče se', false ),
  array( 'Izdržljiv i izrađen da traje', false ),
  array( 'Originalni NORIKS BathMat', false ),
  array( 'Povjerenje tisuća kupaca', false ),
);

/* 8) izjave kupcev (imena in mesta lokalizirana) */
$nbm_izjave = array(
  array( 'Danijel R.', 'Zagreb', 'Imamo ga više od godinu dana i još uvijek izgleda kao nov. Lako se čisti, ne zaudara i stvarno upija vodu u nekoliko sekundi. Vrijedan svakog centa.' ),
  array( 'Zrinka J.', 'Split', 'Napokon tepih za kupaonicu koji stvarno radi. Naš stari je stalno bio mokar i klizao je, a ovaj se odmah suši i nikad se ne pomakne s mjesta. Prava promjena za našu obiteljsku kupaonicu.' ),
  array( 'Marko L.', 'Rijeka', 'Na internetu sam stalno viđao kopije, ali odlučio sam probati original. Razlika se vidi odmah – teži je, kvalitetniji i stvarno radi onako kako pokazuju oglasi.' ),
  array( 'Robert T.', 'Osijek', 'Dostava je bila brza, tepih djeluje vrhunski i otad nam je pod potpuno suh. Već sam ga preporučio prijateljima – jedan je od rijetkih proizvoda koji stvarno opravdava očekivanja.' ),
  array( 'Ema H.', 'Zadar', 'Nije samo praktičan, nego i elegantno izgleda. Gosti su me pitali gdje sam ga kupila, a sada sam naručila još za kuhinju i kupaonicu za goste. Sviđa mi se kako se uklapa u moderan interijer.' ),
);

/* 9) recenzije — 5 mnenj originala s fotografijami kupcev (imena lokalizirana) */
$nbm_reviews = array(
  array( 'img' => 'nbm-r1-kupac.webp', 'ime' => 'Josip S.', 'naslov' => 'Točno kako je opisano',
         'tekst' => 'Točno onakvi kako su opisani. Iz našeg iskustva stvarno ne kližu i brzo upijaju vlagu. Lagani i jednostavno elegantni.' ),
  array( 'img' => 'nbm-r2-kupac.webp', 'ime' => 'Marija U.', 'naslov' => 'Daleko najbolji tepih',
         'tekst' => 'Daleko najbolji tanki, iznimno upijajući i kvalitetan tepih za kupaonicu! Kupila sam dva za svaku kupaonicu i toliko sam zadovoljna da ću naručiti još. Suprug i ja imamo više od 70 godina, ali preporučujem ga svim generacijama.' ),
  array( 'img' => 'nbm-r3-kupac.webp', 'ime' => 'Kristina R.', 'naslov' => 'Fantastičan tepih',
         'tekst' => 'Fantastičan tepih. Trebao mi je protuklizni i ovaj je savršen. Gotovo je s mokrim tekstilnim tepisima. Naručit ću još jedan za tuš i jedan za mamu. Toplo preporučujem!' ),
  array( 'img' => 'nbm-r4-kupac.webp', 'ime' => 'Tea L.', 'naslov' => 'Upija gotovo trenutačno',
         'tekst' => 'Voda nakon tuširanja upije se gotovo trenutačno, a površina je za nekoliko minuta iznenađujuće suha na dodir. Ne pomiče se, nema brige oko plijesni i lako se pere. Izgleda lijepo, siguran je i ostaje svjež.' ),
  array( 'img' => 'nbm-r5-kupac.webp', 'ime' => 'Dragica R.', 'naslov' => 'Vrijedi svoje cijene',
         'tekst' => 'Divno je izaći iz tuša na suh tepih koji ne kliže. Obožavam ih ispred umivaonika dok se spremam za dan! Nema više spoticanja o zgužvane tepihe. Vrijedi svoje cijene!' ),
);

$nbm_n = 0; // števec sekcij za izmenična ozadja
$nbm_cls = function() use ( &$nbm_n ) { $nbm_n++; return ( $nbm_n % 2 ) ? ' nbm-tint' : ''; };
?>

<!-- 1) ZAŠTO NORIKS BATHMAT (uvod nakupne škatle + "Why 100,000+ homes made the switch" + zavihek "Care & Sizing") — slika ob besedilu -->
<section class="nbm-sec<?php echo $nbm_cls(); ?>">
  <div class="nbm-wrap">
    <div class="nbm-row2 nbm-row2--top">
      <div class="nbm-media"><?php echo $nbm_img( 'nbm-g6-usporedba-velicina-hr.webp', 'Usporedba veličina NORIKS BathMat: 50 × 80 cm i 40 × 60 cm' ); ?></div>
      <div class="nbm-copy">
        <p class="nbm-kicker">Zašto NORIKS BathMat</p>
        <h2 class="nbm-h2">Nema više natopljenih tepiha. <em>Nema više mokrog poda.</em></h2>
        <p>NORIKS BathMat <strong>trenutačno upija vodu</strong>, brzo se suši i čvrsto prianja uz pod pa nikad ne kliže. Otporan je na neugodne mirise i plijesan – kupaonica svaki dan ostaje čista, sigurna i svježa.</p>
        <p><strong>Zašto su tisuće kućanstava prešle na njega:</strong></p>
        <ul class="nbm-checks">
          <li>Trenutačno upija vodu</li>
          <li>Brzo se suši i ostaje svjež</li>
          <li>Ne kliže – siguran za djecu i starije osobe</li>
          <li>Otporan na neugodne mirise i plijesan</li>
        </ul>
        <dl class="nbm-specs">
          <div><dt>Mala:</dt><dd>40 × 60 cm</dd></div>
          <div><dt>Standardna:</dt><dd>50 × 80 cm</dd></div>
          <div><dt>Njega:</dt><dd>za površinsko čišćenje obrišite ga vlažnom spužvom (neabrazivnom stranom) ili mekom krpom. Za temeljito čišćenje upotrijebite blagi sprej za čišćenje ili sapun, zatim isperite toplom vodom i objesite da se osuši.</dd></div>
        </dl>
        <p class="nbm-big">Trenutačno upijanje. Brzo sušenje. Uvijek svježe.</p>
      </div>
    </div>
  </div>
</section>

<!-- 2) TRENUTAČNO UPIJANJE ("Instant Absorption") — slika ob besedilu -->
<section class="nbm-sec<?php echo $nbm_cls(); ?>">
  <div class="nbm-wrap">
    <div class="nbm-row2 nbm-row2--rev">
      <div class="nbm-media"><?php echo $nbm_img( 'nbm-s1-trenutno-upijanje.webp', 'Mokro stopalo na tepihu NORIKS BathMat – voda se odmah upija' ); ?></div>
      <div class="nbm-copy">
        <p class="nbm-kicker">Trenutačno upijanje</p>
        <h2 class="nbm-h2">Voda nestaje <em>čim je dotakne</em></h2>
        <p>Izađite iz tuša i gledajte kako voda nestaje na dodir.</p>
        <p>NORIKS BathMat upija trenutačno – <strong>bez lokvi, bez mokrih tragova</strong>, samo kupaonica koja bez truda ostaje suha.</p>
        <p class="nbm-big">Korak iz tuša – i pod ostaje suh.</p>
      </div>
    </div>
  </div>
</section>

<!-- 3) BRZO SE SUŠI, OSTAJE SVJEŽ ("Dries Fast, Stays Fresh") — slika 3 koraka ob besedilu -->
<section class="nbm-sec<?php echo $nbm_cls(); ?>">
  <div class="nbm-wrap">
    <div class="nbm-row2">
      <div class="nbm-media"><?php echo $nbm_img( 'nbm-s2-susenje-hr.webp', 'NORIKS BathMat odmah nakon tuša, 3 minute kasnije i 5 minuta kasnije' ); ?></div>
      <div class="nbm-copy">
        <p class="nbm-kicker">Brzo sušenje</p>
        <h2 class="nbm-h2">Brzo se suši, <em>ostaje svjež</em></h2>
        <p>Dok obični tepisi satima ostaju vlažni, NORIKS BathMat <strong>suši se za nekoliko minuta</strong>.</p>
        <p>Jezgra otvorenih ćelija brzo otpušta vlagu i sprječava onaj ustajali, vlažni miris.</p>
        <p class="nbm-big">Uvijek suh, uvijek spreman za sljedeće korištenje.</p>
      </div>
    </div>
  </div>
</section>

<!-- 4) NE KLIŽE ("No Sliding. No Slipping. No Bunching.") — slika ob besedilu -->
<section class="nbm-sec<?php echo $nbm_cls(); ?>">
  <div class="nbm-wrap">
    <div class="nbm-row2 nbm-row2--rev">
      <div class="nbm-media"><?php echo $nbm_img( 'nbm-s3-protuklizna-baza-hr.webp', 'Protuklizna baza s donje strane tepiha NORIKS BathMat' ); ?></div>
      <div class="nbm-copy">
        <p class="nbm-kicker">Protuklizna baza</p>
        <h2 class="nbm-h2">Ne pomiče se. Ne kliže. <em>Ne gužva se.</em></h2>
        <p><strong>Protuklizna baza</strong> drži tepih čvrsto na svakoj podlozi – pločicama, drvu, vinilu ili bilo čemu između.</p>
        <p>Ostaje na mjestu pa možete koračati potpuno sigurno – mir za djecu, roditelje i goste.</p>
        <p class="nbm-big">Siguran korak, svaki put.</p>
      </div>
    </div>
  </div>
</section>

<!-- 5) BEZ MIRISA I PLIJESNI ("Odor & Mold Resistant") — slika ob besedilu -->
<section class="nbm-sec<?php echo $nbm_cls(); ?>">
  <div class="nbm-wrap">
    <div class="nbm-row2">
      <div class="nbm-media"><?php echo $nbm_img( 'nbm-s4-bez-mirisa-i-plijesni.webp', 'NORIKS BathMat ispred tuša u modernoj kupaonici' ); ?></div>
      <div class="nbm-copy">
        <p class="nbm-kicker">Otporan na mirise i plijesan</p>
        <h2 class="nbm-h2">Bez vlage, <em>bez neugodnih mirisa</em></h2>
        <p>Izrađen da se bori protiv vlage prije nego što se pojavi. NORIKS BathMat sprječava plijesan i neugodne mirise jer se <strong>brzo suši i otpušta zarobljenu vlagu</strong>.</p>
        <p>Bez zaostale vlage, bez ustajalih mirisa, bez plijesni – samo tepih koji je čist i svjež na dodir svaki put kad stanete na njega.</p>
        <p class="nbm-big">Čista i svježa kupaonica, svaki dan.</p>
      </div>
    </div>
  </div>
</section>

<!-- 6) 4 SLOJA ("4 Layers, 1 Game Changing Mat") — slika slojev ob besedilu -->
<section class="nbm-sec<?php echo $nbm_cls(); ?>">
  <div class="nbm-wrap">
    <div class="nbm-row2 nbm-row2--rev">
      <div class="nbm-media"><?php echo $nbm_img( 'nbm-s5-4-sloja-hr.webp', '4 sloja tepiha NORIKS BathMat: brzosušeća površina, jezgra otvorenih ćelija, sloj za kontrolu vlage i protuklizna baza' ); ?></div>
      <div class="nbm-copy">
        <p class="nbm-kicker">Konstrukcija</p>
        <h2 class="nbm-h2">4 sloja, <em>1 tepih koji mijenja sve</em></h2>
        <ol class="nbm-layers">
          <?php foreach ( $nbm_slojevi as $i => $s ) : ?>
          <li><span class="nbm-layers__n"><?php echo (int) $i + 1; ?></span><span><strong><?php echo esc_html( $s[0] ); ?></strong> – <?php echo esc_html( $s[1] ); ?></span></li>
          <?php endforeach; ?>
        </ol>
        <p class="nbm-big">Četiri sloja koja zajedno drže pod suhim.</p>
      </div>
    </div>
  </div>
</section>

<!-- 7) ZAŠTO ODABRATI NAS ("Why You Should Choose Us", MagicMat / Knock-Offs) — usporedba -->
<section class="nbm-sec<?php echo $nbm_cls(); ?>">
  <div class="nbm-wrap nbm-wrap--narrow">
    <p class="nbm-kicker nbm-c">Originalni NORIKS BathMat</p>
    <h2 class="nbm-h2 nbm-c">Zašto odabrati <em>nas</em></h2>
    <div class="nbm-cmp" role="table" aria-label="Usporedba: NORIKS BathMat i jeftine kopije">
      <div class="nbm-cmp__row nbm-cmp__head" role="row">
        <span role="columnheader">Značajke</span>
        <span role="columnheader" class="nbm-cmp__us">NORIKS</span>
        <span role="columnheader">Jeftine kopije</span>
      </div>
      <?php foreach ( $nbm_cmp as $r ) : ?>
      <div class="nbm-cmp__row" role="row">
        <span role="cell" class="nbm-cmp__lbl"><?php echo esc_html( $r[0] ); ?></span>
        <span role="cell" class="nbm-cmp__us"><span class="nbm-yes" aria-label="da">✓</span></span>
        <span role="cell"><?php echo $r[1] ? '<span class="nbm-yes" aria-label="da">✓</span>' : '<span class="nbm-no" aria-label="ne">✕</span>'; ?></span>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- 8) ŠTO KAŽU NAŠI KUPCI ("What Our Customers Are Saying...") — 5 izjav -->
<section class="nbm-sec<?php echo $nbm_cls(); ?>">
  <div class="nbm-wrap">
    <p class="nbm-kicker nbm-c">Iskustva kupaca</p>
    <h2 class="nbm-h2 nbm-c">Što kažu <em>naši kupci</em></h2>
    <div class="nbm-quotes">
      <?php foreach ( $nbm_izjave as $q ) : ?>
      <article class="nbm-qcard">
        <?php echo $nbm_stars( 5 ); ?>
        <p class="nbm-qcard__txt">„<?php echo esc_html( $q[2] ); ?>”</p>
        <p class="nbm-qcard__name"><?php echo esc_html( $q[0] ); ?> <span><?php echo esc_html( $q[1] ); ?></span></p>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- 9) RECENZIJE KUPACA (Loox 4.9 / 2102) — 1081 po NORIKS + 5 mnenj originala s fotografijami kupcev -->
<section class="nbm-sec<?php echo $nbm_cls(); ?>">
  <div class="nbm-wrap">
    <p class="nbm-kicker nbm-c">Recenzije kupaca</p>
    <h2 class="nbm-h2 nbm-c">Suh pod, <em>zadovoljni kupci</em></h2>
    <div class="nbm-score">
      <span class="nbm-score__num">4,9</span>
      <?php echo $nbm_stars( 5 ); ?>
      <span class="nbm-score__txt">Na temelju 1081 recenzije</span>
    </div>
    <div class="nbm-reviews">
      <?php foreach ( $nbm_reviews as $r ) : ?>
      <article class="nbm-card">
        <div class="nbm-card__img"><?php echo $nbm_img( $r['img'], 'Fotografija kupca: NORIKS BathMat u kupaonici' ); ?></div>
        <div class="nbm-card__body">
          <?php echo $nbm_stars( 5 ); ?>
          <h3><?php echo esc_html( $r['naslov'] ); ?></h3>
          <p class="nbm-card__txt">„<?php echo esc_html( $r['tekst'] ); ?>”</p>
          <p class="nbm-card__name"><?php echo esc_html( $r['ime'] ); ?> <span class="nbm-ok">✓ Potvrđena kupnja</span></p>
        </div>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<style>
/* NORIKS stil (predloga why-neckmassager.php / why-hands.php): oznaka + naslov z ležečim poudarkom, slika ob besedilu,
   izmenjujoča ozadja in strani. Paleta modra (voda / kupaonica): poudarek #1f568e, temno #1b2233, svetlo #eef4fa. */
.nbm-sec { padding: 60px 0; font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Arial, sans-serif; color: #1b2233; background: #fff; }
.nbm-sec * { box-sizing: border-box; }
.nbm-tint { background: #eef4fa; }
.nbm-wrap { width: 100%; max-width: 1200px; margin: 0 auto; padding: 0 24px; }
.nbm-wrap--narrow { max-width: 820px; }
.nbm-c { text-align: center; }
.nbm-sec h2, .nbm-sec h3 { font-family: inherit; text-transform: none; letter-spacing: 0; }
.nbm-kicker, .nbm-copy p.nbm-kicker { font-size: 12.5px; line-height: 1.4; font-weight: 800; letter-spacing: .14em; text-transform: uppercase; color: #1f568e; margin: 0 0 10px; }
.nbm-h2 { font-weight: 800; font-size: clamp(25px, 3.1vw, 36px); line-height: 1.2; margin: 0 0 18px; color: #1b2233; }
.nbm-h2 em { font-style: italic; color: #1f568e; }
.nbm-sec img { display: block; width: 100%; height: auto; }

/* slika ob besedilu */
.nbm-row2 { display: grid; grid-template-columns: 1fr 1fr; gap: 56px; align-items: center; }
.nbm-row2--top { align-items: start; }
.nbm-row2--rev > :first-child { order: 2; }
.nbm-media > img { border-radius: 10px; box-shadow: 0 2px 4px rgba(15,35,60,.05), 0 14px 40px rgba(15,35,60,.10); max-width: 560px; margin: 0 auto; aspect-ratio: 1 / 1; object-fit: cover; background: #fff; }
.nbm-copy p { font-size: 16px; line-height: 1.7; color: #4a5568; margin: 0 0 14px; }
.nbm-copy p strong, .nbm-copy li strong { color: #1b2233; font-weight: 700; }
.nbm-sec p.nbm-big { font-size: 19px; font-weight: 800; color: #1b2233; line-height: 1.45; margin-top: 6px; }

/* 1) kljukice + mere */
.nbm-checks { list-style: none; margin: 0 0 18px; padding: 0; }
.nbm-checks li { position: relative; padding-left: 32px; margin: 0 0 9px; font-size: 16px; line-height: 1.55; color: #1b2233; font-weight: 600; }
.nbm-checks li::before { content: "✓"; position: absolute; left: 0; top: 1px; width: 21px; height: 21px; border-radius: 50%; background: #1f568e; color: #fff; font-size: 12px; font-weight: 800; line-height: 21px; text-align: center; }
.nbm-specs { margin: 0 0 18px; padding: 14px 18px; background: #fff; border: 1px solid #c9daec; border-radius: 10px; }
.nbm-specs > div { display: grid; grid-template-columns: 110px 1fr; gap: 10px; padding: 8px 0; border-top: 1px solid #e3ecf5; font-size: 15px; line-height: 1.55; }
.nbm-specs > div:first-child { border-top: 0; }
.nbm-specs dt { font-weight: 700; color: #1b2233; margin: 0; }
.nbm-specs dd { margin: 0; color: #4a5568; }

/* 6) slojevi */
.nbm-layers { list-style: none; margin: 0 0 18px; padding: 0; counter-reset: none; }
.nbm-layers li { display: flex; gap: 14px; align-items: flex-start; padding: 12px 14px; margin: 0 0 10px; background: #fff; border: 1px solid #c9daec; border-radius: 10px; font-size: 15.5px; line-height: 1.55; color: #4a5568; }
.nbm-layers__n { flex: 0 0 28px; width: 28px; height: 28px; border-radius: 50%; background: #1f568e; color: #fff; font-weight: 800; font-size: 14px; line-height: 28px; text-align: center; }

/* 7) usporedba */
.nbm-cmp { margin: 8px auto 0; max-width: 680px; border-radius: 10px; overflow: hidden; border: 1px solid #c9daec; background: #fff; }
.nbm-cmp__row { display: grid; grid-template-columns: 2fr 1fr 1fr; align-items: center; border-top: 1px solid #e3ecf5; }
.nbm-cmp__row:first-child { border-top: 0; }
.nbm-cmp__row > span { padding: 13px 8px; text-align: center; font-size: 15px; color: #4a5568; }
.nbm-cmp__row > span.nbm-cmp__lbl { text-align: left; padding-left: 18px; font-weight: 600; color: #1b2233; }
.nbm-cmp__head > span { font-size: 12.5px; font-weight: 700; text-transform: uppercase; letter-spacing: .06em; color: #5a6275; }
.nbm-cmp__head > span:first-child { text-align: left; padding-left: 18px; }
.nbm-cmp__row > span.nbm-cmp__us { background: #1f568e; color: #fff; }
.nbm-cmp__head > span.nbm-cmp__us { color: #fff; font-size: 14px; letter-spacing: .1em; }
.nbm-yes, .nbm-no { display: inline-block; width: 22px; height: 22px; border-radius: 50%; font-size: 12px; font-weight: 800; line-height: 22px; text-align: center; font-style: normal; }
.nbm-yes { background: #2f9e5f; color: #fff; }
.nbm-cmp__us .nbm-yes { background: #fff; color: #1f568e; }
.nbm-no { background: #f3d6d6; color: #c0392b; }

/* 8) izjave */
.nbm-quotes { display: grid; grid-template-columns: repeat(5, minmax(0, 1fr)); gap: 16px; align-items: stretch; margin-top: 8px; }
.nbm-qcard { background: #fff; border: 1px solid #c9daec; border-radius: 10px; padding: 18px 16px; box-shadow: 0 2px 10px rgba(15,35,60,.05); display: flex; flex-direction: column; }
.nbm-qcard__txt { font-size: 14.5px; line-height: 1.6; color: #3d4656; font-style: italic; margin: 10px 0 12px; flex: 1 1 auto; }
.nbm-qcard__name { font-size: 14px; font-weight: 700; color: #1b2233; margin: 0; }
.nbm-qcard__name span { display: block; font-weight: 500; font-size: 13px; color: #6b7487; }

/* 9) recenzije */
.nbm-score { display: flex; flex-direction: column; align-items: center; gap: 4px; margin: 0 auto 28px; }
.nbm-score__num { font-size: 52px; font-weight: 800; line-height: 1; color: #1b2233; }
.nbm-score .nbm-stars { font-size: 20px; }
.nbm-score__txt { font-size: 14px; color: #6b7487; }
.nbm-reviews { display: grid; grid-template-columns: repeat(5, minmax(0, 1fr)); gap: 16px; align-items: start; }
.nbm-card { background: #fff; border: 1px solid #c9daec; border-radius: 10px; overflow: hidden; display: flex; flex-direction: column; box-shadow: 0 2px 10px rgba(15,35,60,.05); }
.nbm-card__img img { aspect-ratio: 4 / 5; object-fit: cover; }
.nbm-card__body { padding: 14px 16px 16px; }
.nbm-card h3 { font-size: 16px; font-weight: 800; line-height: 1.35; color: #1b2233; margin: 8px 0 6px; }
.nbm-card__txt { font-size: 14.5px; line-height: 1.6; color: #3d4656; margin: 0 0 10px; font-style: italic; }
.nbm-card__name { font-size: 13.5px; font-weight: 700; color: #1b2233; margin: 0; }

/* ocjene */
.nbm-stars { color: #f2a516; letter-spacing: 1px; font-size: 15px; }
.nbm-stars__off { color: #d8e1ec; }
.nbm-ok { color: #2f9e5f; font-weight: 600; font-size: 12px; margin-left: 4px; font-style: normal; }

@media (max-width: 989px) {
  .nbm-row2 { gap: 32px; }
  .nbm-quotes, .nbm-reviews { grid-template-columns: repeat(3, minmax(0, 1fr)); }
}
@media (max-width: 749px) {
  .nbm-sec { padding: 42px 0; }
  .nbm-wrap { padding: 0 16px; }
  .nbm-row2 { grid-template-columns: 1fr; gap: 24px; }
  .nbm-row2--rev > :first-child { order: 0; }
  .nbm-specs > div { grid-template-columns: 1fr; gap: 2px; }
  .nbm-quotes, .nbm-reviews { grid-template-columns: 1fr 1fr; gap: 12px; }
  .nbm-card__body { padding: 12px; }
  .nbm-cmp__row > span { font-size: 14px; padding: 11px 6px; }
  .nbm-cmp__row > span.nbm-cmp__lbl, .nbm-cmp__head > span:first-child { padding-left: 12px; }
}
@media (max-width: 480px) {
  .nbm-quotes, .nbm-reviews { grid-template-columns: 1fr; }
}

/* galerija izdelka: sličice največ v 2 vrstah (5 na vrsto), ostale slike so dosegljive z drsenjem glavne slike */
.product_cat-orto-bathmat .flex-control-thumbs li:nth-child(n+11) { display: none !important; }

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
.woocommerce-product-details__short-description .nbm-tick {
  position: absolute !important; left: 0 !important; top: 1px !important;
  width: 21px; height: 21px; border-radius: 50%;
  background: #2f9e5f !important; color: #fff !important;
  font-size: 12px !important; font-weight: 800 !important; line-height: 21px !important;
  text-align: center !important; display: inline-block !important; }
.woocommerce-product-details__short-description p:first-of-type { font-size: 16px; line-height: 1.55; }
</style>
