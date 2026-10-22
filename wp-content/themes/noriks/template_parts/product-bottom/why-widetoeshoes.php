<?php
/**
 * product-bottom: NORIKS WideToeShoes — tenisice sa širokim prednjim dijelom (orto-widetoeshoes).
 * Original: hobibear.com/products/hareball — vsebina in vrstni red 1:1 z originalom,
 * oblika po NORIKS stilu (predloga why-orthomules.php / why-hands.php), privzeta topla rjava paleta (#a9683f):
 *   1) zavihek "Customer Experience"              -> Iskustvo kupaca (kolaž fotografij kupcev + 4 ocjene)
 *   2) zavihek "Delivery And Timelines"           -> Dostava i rokovi (NORIKS pogoji namesto skladišč in rokov konkurenta)
 *   3) zavihek "Materials And Details"            -> Materijali i detalji (potplat ob seznamu)
 *   4) zavihek "Sustainability At Hobibear"       -> Održivost (prirodna guma, ulošci, papirnate kutije; brez znamke)
 *   5) "Why Choose Us?" + 3 ikone                 -> Zašto odabrati nas? (slika izdelka + 3 ikone)
 *   6) "Wide Toe Box"                             -> Širok prednji dio
 *   7) "Shock-Absorbing Soles"                    -> Potplat koji upija udarce
 *   8) "Non-Slip And Worry-Free"                  -> Neklizajuće i bez brige
 *   9) "Customer Reviews" (Loox)                  -> Recenzije kupaca (8 mnenj, 4 s fotografijami; število po NORIKS = 1081)
 * Izpusceno: glava, pasica, "Trending Now" (drugi izdelki), noga.
 * Original nima FAQ — FAQ (reviews.php, $widetoeshoes_faq) je sestavljen iz podatkov originala in NORIKS pogojev;
 * mnenja v auto_reviews/HR_widetoeshoes.php. Znamka konkurenta (napis na boku, jeziku in vložku, logotip S)
 * retuširana na vseh slikah. Slike: img/widetoeshoes/ (nwt-…).
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$nwt      = get_template_directory_uri() . '/img/widetoeshoes/';
$nwt_path = get_template_directory() . '/img/widetoeshoes/';
$nwt_img  = function( $file, $alt ) use ( $nwt, $nwt_path ) {
  if ( ! $file || ! file_exists( $nwt_path . $file ) ) { return ''; }
  return '<img src="' . esc_url( $nwt . $file ) . '" alt="' . esc_attr( $alt ) . '" loading="lazy">';
};
$nwt_stars = function( $n ) {
  return '<span class="nwt-stars" aria-label="' . (int) $n . ' od 5 zvjezdica">' . str_repeat( '★', (int) $n ) . '<span class="nwt-stars__off">' . str_repeat( '★', 5 - (int) $n ) . '</span></span>';
};

/* 1) ocjene kupaca z originala (Customer Experience) */
$nwt_bars = array(
  array( 'Udobnost', '97,9', 97.9 ),
  array( 'Pristajanje', '97,6', 97.6 ),
  array( 'Lakoća', '98,9', 98.9 ),
  array( 'Kvaliteta', '98,1', 98.1 ),
);

/* 9) mnenja z originala (prevedena; mnenja o pogojih vračila konkurenta in o drugih izdelkih izpuščena) */
$nwt_reviews = array(
  array( 'ime' => 'Petra H.',    'img' => 'nwt-k-03-crno-bijela.webp', 'tekst' => 'Kupila sam ih za posao, da odmorim stopala od teških čizama na betonskom podu. Sada su mi najdraži par cipela. Vozim bicikl u njima i nosim ih posvuda — stopala me ne bole otkako sam prešla na njih. Naručila sam broj 41 i pristaje savršeno.' ),
  array( 'ime' => 'Marija Č.',  'img' => 'nwt-k-29-bijelo-siva.webp', 'tekst' => 'Ove cipele su nevjerojatno udobne! Medicinska sam sestra i radim dugo na nogama, a ove široke cipele me nisu razočarale. I moderne su i udobne, pa sam na kraju naručila 2 para.' ),
  array( 'ime' => 'Anđela C.', 'img' => 'nwt-k-27-smeda.webp',       'tekst' => 'Obožavam svoje cipele! Tako su udobne i lagane na nozi, a to mi puno znači jer imam vijke i pločicu u gležnju. Već sam spremna naručiti i smeđi par!' ),
  array( 'ime' => 'Lucija L.',    'img' => 'nwt-k-01-tamnosmeda.webp',  'tekst' => 'Obožavam ove cipele — najbolja investicija ikad. Uskoro kupujem još jedan par!' ),
  array( 'ime' => 'Kristina G.',  'img' => '', 'tekst' => 'Plantarni fasciitis mi se toliko pogoršao da gotovo nisam mogla hodati bez pridržavanja. Nakon 3 dana nošenja novih cipela shvatila sam da ponovno normalno hodam.' ),
  array( 'ime' => 'Karla R.', 'img' => '', 'tekst' => 'Na nogama sam 8 sati dnevno, stalno gore-dolje stepenicama, a stopala obožavaju ove cipele — kao da hodam po oblacima. Prsti se osjećaju odlično s više prostora.' ),
  array( 'ime' => 'Maja M.',     'img' => '', 'tekst' => 'Godinama nosim klasične barefoot cipele. Ove imaju deblji potplat, ali su odlične kao prijelazna cipela za početnike. Veličina je savršena, a kvaliteta odlična.' ),
  array( 'ime' => 'Ana B.',   'img' => '', 'tekst' => 'Apsolutno ih obožavam! Dobila sam toliko komplimenata da sam poveznicu poslala valjda šestorici prijatelja!' ),
);

$nwt_n = 0; // števec sekcij za izmenična ozadja
$nwt_cls = function() use ( &$nwt_n ) { $nwt_n++; return ( $nwt_n % 2 ) ? ' nwt-tint' : ''; };
$nwt_side = 0; // izmenične strani slika/besedilo
$nwt_rev = function() use ( &$nwt_side ) { $nwt_side++; return ( $nwt_side % 2 ) ? '' : ' nwt-row2--rev'; };
?>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap">

<!-- 1) ISKUSTVO KUPACA — kolaž fotografija kupaca + ocjene (Customer Experience) -->
<section class="nwt-sec<?php echo $nwt_cls(); ?>">
  <div class="nwt-wrap">
    <div class="nwt-row2<?php echo $nwt_rev(); ?>">
      <div class="nwt-media nwt-media--sq"><?php echo $nwt_img( 'nwt-s-iskustvo-kupaca.webp', 'Kupci u NORIKS tenisicama sa širokim prednjim dijelom' ); ?></div>
      <div class="nwt-copy">
        <p class="nwt-kicker">Iskustvo kupaca</p>
        <h2 class="nwt-h3">Ocjene kupaca <em>govore same za sebe</em></h2>
        <div class="nwt-bars">
          <?php foreach ( $nwt_bars as $b ) : ?>
          <div class="nwt-bar">
            <div class="nwt-bar__top"><span><?php echo esc_html( $b[0] ); ?></span><strong><?php echo esc_html( $b[1] ); ?> %</strong></div>
            <div class="nwt-bar__track"><span style="width:<?php echo esc_attr( $b[2] ); ?>%"></span></div>
          </div>
          <?php endforeach; ?>
        </div>
        <p class="nwt-big">Udobnost koju osjetite od prvog koraka.</p>
      </div>
    </div>
  </div>
</section>

<!-- 2) DOSTAVA I ROKOVI — NORIKS pogoji (namesto skladišč in rokov konkurenta) -->
<section class="nwt-sec<?php echo $nwt_cls(); ?>">
  <div class="nwt-wrap">
    <div class="nwt-row2<?php echo $nwt_rev(); ?>">
      <div class="nwt-media"><div class="nwt-icon"><?php echo $nwt_img( 'nwt-i-dostava.webp', 'Brza dostava' ); ?></div></div>
      <div class="nwt-copy">
        <p class="nwt-kicker">Dostava i rokovi</p>
        <h2 class="nwt-h3">Brza i <em>sigurna dostava</em></h2>
        <p>Narudžbe šaljemo <strong>brzo</strong> i surađujemo s pouzdanim dostavnim službama. Uz pošiljku dobivate <strong>broj za praćenje</strong>, pa uvijek znate gdje je vaša narudžba.</p>
        <ul class="nwt-points">
          <li><span class="nwt-dot" aria-hidden="true">✓</span><span><strong>Besplatna dostava za narudžbe iznad 70 €</strong></span></li>
          <li><span class="nwt-dot" aria-hidden="true">✓</span><span><strong>Pravo na povrat u roku od 30 dana</strong> od primitka narudžbe</span></li>
          <li><span class="nwt-dot" aria-hidden="true">✓</span><span>Plaćanje pouzećem</span></li>
        </ul>
        <p class="nwt-big">Kupujte bez brige.</p>
      </div>
    </div>
  </div>
</section>

<!-- 3) MATERIJALI I DETALJI -->
<section class="nwt-sec<?php echo $nwt_cls(); ?>">
  <div class="nwt-wrap">
    <div class="nwt-row2<?php echo $nwt_rev(); ?>">
      <div class="nwt-media nwt-media--sq"><?php echo $nwt_img( 'nwt-g03-potplat.webp', 'Debeli gumeni potplat NORIKS tenisica sa širokim prednjim dijelom' ); ?></div>
      <div class="nwt-copy">
        <p class="nwt-kicker">Materijali i detalji</p>
        <h2 class="nwt-h3">Izrađene <em>do detalja</em></h2>
        <dl class="nwt-specs">
          <div><dt>Gornji dio</dt><dd>sintetička koža + tkanina</dd></div>
          <div><dt>Podstava</dt><dd>mrežasta tkanina</dd></div>
          <div><dt>Potplat</dt><dd>guma</dd></div>
          <div><dt>Debljina potplata</dt><dd>debeli gumeni potplat za fleksibilnost i otpornost na klizanje</dd></div>
          <div><dt>Vodootpornost</dt><dd>nisu vodootporne, ali se brzo suše</dd></div>
          <div><dt>Zatvaranje</dt><dd>vezice</dd></div>
        </dl>
        <p class="nwt-big">Lagane, prozračne i izdržljive.</p>
      </div>
    </div>
  </div>
</section>

<!-- 4) ODRŽIVOST — prirodna guma, ulošci, papirnate kutije -->
<section class="nwt-sec<?php echo $nwt_cls(); ?>">
  <div class="nwt-wrap">
    <div class="nwt-row2<?php echo $nwt_rev(); ?>">
      <div class="nwt-media nwt-media--sq"><?php echo $nwt_img( 'nwt-s-prirodna-guma.webp', 'Potplat od prirodne gume' ); ?></div>
      <div class="nwt-copy">
        <p class="nwt-kicker">Održivost</p>
        <h2 class="nwt-h3">Udobne za vas, <em>prijateljske prema prirodi</em></h2>
        <ul class="nwt-points">
          <li><span class="nwt-dot" aria-hidden="true">✓</span><span><strong>Potplat od prirodne gume</strong> — za potplate koristimo prirodnu gumu, zbog čega su ove cipele ekološki prihvatljivije i zdravije, a uz to izdržljivije i otpornije na klizanje.</span></li>
          <li><span class="nwt-dot" aria-hidden="true">✓</span><span><strong>Održivi ulošci</strong> — ulošci od poliuretanske pjene ne sadrže štetne tvari i u skladu su sa zahtjevima međunarodnih ekoloških organizacija. Mogu se reciklirati, a biološki se razgrađuju za otprilike pet godina.</span></li>
          <li><span class="nwt-dot" aria-hidden="true">✓</span><span><strong>Ekološke papirnate kutije</strong> — koristimo 100 % reciklabilne papirnate kutije za cipele koje zadovoljavaju standarde zaštite okoliša i mogu se ponovno upotrijebiti ili reciklirati.</span></li>
        </ul>
        <p class="nwt-big">Manje otpada, više udobnosti.</p>
      </div>
    </div>
  </div>
</section>

<!-- 5) ZAŠTO ODABRATI NAS? — slika izdelka + 3 ikone -->
<section class="nwt-sec<?php echo $nwt_cls(); ?>">
  <div class="nwt-wrap">
    <div class="nwt-row2<?php echo $nwt_rev(); ?>">
      <div class="nwt-media nwt-media--sq"><?php echo $nwt_img( 'nwt-g09-kaki.webp', 'NORIKS tenisice sa širokim prednjim dijelom u kaki boji' ); ?></div>
      <div class="nwt-copy">
        <p class="nwt-kicker">Zašto odabrati nas?</p>
        <h2 class="nwt-h3">Nove veganske ležerne cipele <em>sa širokim prednjim dijelom</em></h2>
        <ul class="nwt-feats">
          <li><?php echo $nwt_img( 'nwt-i-fleksibilno.webp', '' ); ?><span>Fleksibilan dizajn</span></li>
          <li><?php echo $nwt_img( 'nwt-i-neklizajuce.webp', '' ); ?><span>Neklizajuće</span></li>
          <li><?php echo $nwt_img( 'nwt-i-siroki-prsti.webp', '' ); ?><span>Širok prostor za prste</span></li>
        </ul>
        <p class="nwt-big">Prirodan korak, svaki dan.</p>
      </div>
    </div>
  </div>
</section>

<!-- 6) ŠIROK PREDNJI DIO -->
<section class="nwt-sec<?php echo $nwt_cls(); ?>">
  <div class="nwt-wrap">
    <div class="nwt-row2<?php echo $nwt_rev(); ?>">
      <div class="nwt-media"><?php echo $nwt_img( 'nwt-s-siroki-prednji-dio.webp', 'Širok prednji dio daje prstima više prostora' ); ?></div>
      <div class="nwt-copy">
        <p class="nwt-kicker">Širok prednji dio</p>
        <h2 class="nwt-h3">Više prostora <em>da prsti dišu</em></h2>
        <p>Barefoot cipele sa širokim prednjim dijelom stvorene su za sve koji traže <strong>prirodnu udobnost</strong>. Širok prednji dio daje prstima više prostora da dišu i omogućuje stopalima da se prirodno rašire, što <strong>smanjuje pritisak na stopala</strong> i održava udobnost cijeli dan.</p>
        <p>Bilo da šetate gradom ili istražujete prirodu, ove cipele vaš su najbolji izbor.</p>
        <p class="nwt-big">Udobnost kakvu dosad niste osjetili.</p>
      </div>
    </div>
  </div>
</section>

<!-- 7) POTPLAT KOJI UPIJA UDARCE -->
<section class="nwt-sec<?php echo $nwt_cls(); ?>">
  <div class="nwt-wrap">
    <div class="nwt-row2<?php echo $nwt_rev(); ?>">
      <div class="nwt-media"><?php echo $nwt_img( 'nwt-s-amortizacija.webp', 'Prozračan i lagan potplat koji upija udarce' ); ?></div>
      <div class="nwt-copy">
        <p class="nwt-kicker">Potplat koji upija udarce</p>
        <h2 class="nwt-h3">Udobnost <em>na novi način</em></h2>
        <p>Ove cipele s debljim potplatom spajaju <strong>prostran prednji dio</strong> i <strong>amortizirajući potplat</strong> za prirodno kretanje uz bolju potporu. Debeli potplat upija udarce i rasterećuje stopala, a prostran prednji dio dopušta prstima da se slobodno rašire — bez stiskanja i nelagode.</p>
        <p>Izrađene su od <strong>laganih materijala i prozračnih tkanina</strong>, pa stopala ostaju svježa i udobna i pri dugom nošenju. Fleksibilan, a ipak potporan dizajn pruža stabilnost bez gubitka slobode — savršeno za svakodnevno nošenje i avanture na otvorenom.</p>
        <p class="nwt-big">Zakoračite u revoluciju »debelo i lagano« — stabilnost uz udobnost hodanja kao bosonogi!</p>
      </div>
    </div>
  </div>
</section>

<!-- 8) NEKLIZAJUĆE I BEZ BRIGE -->
<section class="nwt-sec<?php echo $nwt_cls(); ?>">
  <div class="nwt-wrap">
    <div class="nwt-row2<?php echo $nwt_rev(); ?>">
      <div class="nwt-media"><?php echo $nwt_img( 'nwt-s-neklizajuci.webp', 'Neklizajući potplat s posebnim uzorkom' ); ?></div>
      <div class="nwt-copy">
        <p class="nwt-kicker">Neklizajuće i bez brige</p>
        <h2 class="nwt-h3">Siguran <em>izbor</em></h2>
        <p>Cipele sa širokim prednjim dijelom izrađene su od <strong>kvalitetnih, neklizajućih materijala</strong> koji omogućuju sigurno hodanje po svakoj podlozi.</p>
        <p>Potplat ima <strong>poseban uzorak protiv klizanja</strong> koji znatno povećava trenje i osigurava stabilnost i pouzdanost pri svakom koraku.</p>
        <p class="nwt-big">Odaberite NORIKS cipele sa širokim prednjim dijelom i hodajte bez brige na svakom koraku!</p>
      </div>
    </div>
  </div>
</section>

<!-- 9) RECENZIJE KUPACA — mnenja z originala, število po NORIKS (1081) -->
<section class="nwt-sec<?php echo $nwt_cls(); ?>">
  <div class="nwt-wrap">
    <p class="nwt-kicker nwt-c">Recenzije kupaca</p>
    <h2 class="nwt-h2 nwt-c">Kupci <em>obožavaju</em> svoje nove tenisice</h2>
    <div class="nwt-score">
      <span class="nwt-score__num">4,5 / 5</span>
      <?php echo $nwt_stars( 5 ); ?>
      <span class="nwt-score__txt">Na temelju 1081 recenzije</span>
    </div>
    <div class="nwt-reviews">
      <?php foreach ( $nwt_reviews as $r ) : ?>
      <article class="nwt-card<?php echo $r['img'] ? ' nwt-card--img' : ''; ?>">
        <?php if ( $r['img'] ) : ?><div class="nwt-card__img"><?php echo $nwt_img( $r['img'], 'Fotografija kupca: ' . $r['ime'] ); ?></div><?php endif; ?>
        <div class="nwt-card__body">
          <?php echo $nwt_stars( 5 ); ?>
          <p class="nwt-card__txt">„<?php echo esc_html( $r['tekst'] ); ?>”</p>
          <p class="nwt-card__name"><?php echo esc_html( $r['ime'] ); ?> <span class="nwt-ok">✓ Potvrđena kupnja</span></p>
        </div>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<style>
/* NORIKS stil (predloga why-orthomules.php / why-hands.php): oznaka + naslov z ležečim poudarkom, slika ob
   besedilu, izmenjujoča ozadja in strani. Privzeta topla rjava paleta NORIKS (#a9683f). */
.nwt-sec { padding: 60px 0; font-family: 'Poppins', system-ui, -apple-system, 'Segoe UI', Roboto, Arial, sans-serif; color: #231d19; background: #fff; }
.nwt-sec * { box-sizing: border-box; }
.nwt-tint { background: #f7f2ec; }
.nwt-wrap { width: 100%; max-width: 1200px; margin: 0 auto; padding: 0 24px; }
.nwt-c { text-align: center; }
.nwt-sec h2, .nwt-sec h3 { font-family: inherit; text-transform: none; letter-spacing: 0; }
.nwt-kicker, .nwt-copy p.nwt-kicker { font-size: 12.5px; line-height: 1.4; font-weight: 700; letter-spacing: .14em; text-transform: uppercase; color: #a9683f; margin: 0 0 10px; }
.nwt-h2 { font-weight: 700; font-size: clamp(25px, 3.1vw, 36px); line-height: 1.2; margin: 0 0 14px; color: #231d19; }
.nwt-h2 em, .nwt-h3 em { font-style: italic; color: #a9683f; }
.nwt-h3 { font-weight: 700; font-size: clamp(22px, 2.6vw, 30px); line-height: 1.25; margin: 0 0 16px; color: #231d19; }
.nwt-sec img { display: block; width: 100%; height: auto; }

/* slika ob besedilu */
.nwt-row2 { display: grid; grid-template-columns: 1fr 1fr; gap: 56px; align-items: center; }
.nwt-row2--rev .nwt-media { order: 2; }
.nwt-media img { object-fit: cover; border-radius: 10px; box-shadow: 0 2px 4px rgba(40,25,15,.05), 0 14px 40px rgba(40,25,15,.10); max-width: 560px; margin: 0 auto; }
.nwt-media--sq img { aspect-ratio: 1 / 1; max-width: 540px; }
.nwt-icon { max-width: 540px; aspect-ratio: 16 / 10; margin: 0 auto; background: #fff; border: 1px solid #ecdfd3; border-radius: 10px;
  display: flex; align-items: center; justify-content: center; box-shadow: 0 2px 4px rgba(40,25,15,.05), 0 14px 40px rgba(40,25,15,.10); }
.nwt-sec:not(.nwt-tint) .nwt-icon { background: #f7f2ec; }
.nwt-media .nwt-icon img { width: 46%; max-width: 230px; box-shadow: none; border-radius: 0; object-fit: contain; }
.nwt-copy p { font-size: 16px; line-height: 1.7; color: #4f443d; margin: 0 0 14px; }
.nwt-copy p strong { color: #231d19; font-weight: 600; }
.nwt-copy p.nwt-big { font-size: 19px; font-weight: 700; color: #231d19; line-height: 1.45; margin-top: 6px; }
.nwt-points { list-style: none; margin: 0 0 16px; padding: 0; }
.nwt-points li { font-size: 16px; line-height: 1.6; color: #4f443d; margin: 0 0 12px; display: flex; gap: 12px; align-items: flex-start; }
.nwt-points li strong { color: #231d19; font-weight: 600; }
.nwt-dot { flex: 0 0 22px; width: 22px; height: 22px; border-radius: 50%; background: #a9683f; color: #fff; font-size: 12px; font-weight: 800; line-height: 22px; text-align: center; margin-top: 2px; }

/* ocjene kupaca */
.nwt-bars { margin: 4px 0 18px; display: grid; gap: 14px; }
.nwt-bar__top { display: flex; justify-content: space-between; font-size: 15px; color: #4f443d; margin-bottom: 6px; }
.nwt-bar__top strong { color: #231d19; font-weight: 700; }
.nwt-bar__track { height: 10px; border-radius: 999px; background: #eadccf; overflow: hidden; }
.nwt-bar__track span { display: block; height: 100%; border-radius: 999px; background: #a9683f; }

/* materijali */
.nwt-specs { margin: 0 0 16px; padding: 0; border-top: 1px solid #ecdfd3; }
.nwt-specs > div { display: grid; grid-template-columns: 170px 1fr; gap: 12px; padding: 11px 0; border-bottom: 1px solid #ecdfd3; }
.nwt-specs dt { font-size: 15px; font-weight: 700; color: #231d19; margin: 0; }
.nwt-specs dd { font-size: 15px; line-height: 1.55; color: #4f443d; margin: 0; }

/* 3 ikone */
.nwt-feats { list-style: none; margin: 4px 0 18px; padding: 0; display: grid; grid-template-columns: repeat(3, minmax(0, 1fr)); gap: 14px; }
.nwt-feats li { background: #fff; border: 1px solid #ecdfd3; border-radius: 10px; padding: 14px 10px 12px; text-align: center; }
.nwt-sec:not(.nwt-tint) .nwt-feats li { background: #f7f2ec; }
.nwt-feats li img { width: 74px; height: 74px; object-fit: contain; margin: 0 auto 8px; }
.nwt-feats li span { display: block; font-size: 14px; font-weight: 600; color: #231d19; line-height: 1.35; }

/* recenzije */
.nwt-stars { color: #f2a516; letter-spacing: 1px; font-size: 15px; }
.nwt-stars__off { color: #e6dbd2; }
.nwt-score { display: flex; justify-content: center; align-items: center; gap: 12px; margin: 0 0 28px; flex-wrap: wrap; }
.nwt-score__num { font-size: 28px; font-weight: 700; color: #231d19; }
.nwt-score .nwt-stars { font-size: 20px; }
.nwt-score__txt { font-size: 14.5px; color: #6b625a; }
.nwt-reviews { display: grid; grid-template-columns: repeat(4, minmax(0, 1fr)); gap: 18px; align-items: stretch; }
.nwt-card { background: #fff; border: 1px solid #ecdfd3; border-radius: 10px; overflow: hidden; display: flex; flex-direction: column; }
.nwt-card__img img { aspect-ratio: 1 / 1; object-fit: cover; border-radius: 0; box-shadow: none; }
.nwt-card__body { padding: 16px 16px 16px; }
.nwt-card__txt { font-size: 14.5px; line-height: 1.6; color: #3a302a; margin: 8px 0 10px; font-style: italic; }
.nwt-card__name { font-size: 13.5px; font-weight: 600; color: #231d19; margin: 0; }
.nwt-ok { color: #2f9e5f; font-weight: 600; font-size: 12px; margin-left: 4px; font-style: normal; }

@media (max-width: 989px) {
  .nwt-row2 { gap: 32px; }
  .nwt-reviews { grid-template-columns: repeat(2, minmax(0, 1fr)); }
}
@media (max-width: 749px) {
  .nwt-sec { padding: 42px 0; }
  .nwt-wrap { padding: 0 16px; }
  .nwt-row2 { grid-template-columns: 1fr; gap: 24px; }
  .nwt-row2--rev .nwt-media { order: 0; }
  .nwt-specs > div { grid-template-columns: 1fr; gap: 2px; }
  .nwt-feats li img { width: 56px; height: 56px; }
  .nwt-feats li span { font-size: 13px; }
  .nwt-reviews { gap: 12px; }
  .nwt-card__body { padding: 12px; }
}

/* galerija izdelka: sličice največ v 2 vrstah (5 na vrsto), ostale slike so dosegljive z drsenjem glavne slike */
.product_cat-orto-widetoeshoes .flex-control-thumbs li:nth-child(n+11) { display: none !important; }

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
.woocommerce-product-details__short-description .nwt-tick {
  position: absolute !important; left: 0 !important; top: 1px !important;
  width: 21px; height: 21px; border-radius: 50%;
  background: #2f9e5f !important; color: #fff !important;
  font-size: 12px !important; font-weight: 800 !important; line-height: 21px !important;
  text-align: center !important; display: inline-block !important; }
.woocommerce-product-details__short-description p:first-of-type { font-size: 16px; line-height: 1.55; }
</style>
