<?php
/**
 * product-bottom: NORIKS TravelKit — vakuumska putna vrećica za odjeću s električnom pumpom (orto-travelkit).
 * Original: twopackbag.com/products/twopackbag (2PackBag Travel Kit, US, osnovna valuta USD) — vsebina in vrstni red 1:1 z originalom,
 * prevod iz angleščine, oblika po NORIKS stilu (predloga why-kneelight.php / why-hands.php), poudarek oranžna po originalu (#e8590c).
 * Lasten tip travelkit (predpona ntvk-, img/travelkit/) — ločen od travelbag (ntb-), airtravel (nlc-), travelpillow (ntp-), slingbag (nsb-).
 *   1) nakupna škatla, zavihek "How much space can I save?" (+ zgodba Sarah from Chicago) -> Više prostora (prevedena slika 60 %)
 *   2) nakupna škatla, zavihek "How does it work?"                                       -> Kako radi (prevedena slika Travel-Tested Design)
 *   3) nakupna škatla, zavihek "Will it fit my luggage?" (mere, zapremina, pumpa)          -> Hoće li stati (prevedena slika z merami v cm)
 *   4) nakupna škatla: 3 mnenja s fotografijami + "Over 121,500 Happy Customers"           -> Tisuće zadovoljnih putnika (4,8 / 1081)
 *   5) "Why This Works (When Other Solutions Don't)"                                       -> slika vodootpornega najlona ob besedilu
 *   6) "Features" tabela 2Packbag / Packing Cubes / Compression Bags + "The Bag That Pays For Itself" (60 % / $138 / +3h)
 *                                                                                           -> usporedba ob sliki vrećice (100 day -> 30 dana, $138 -> 123 €)
 *   7) "Upgrade The Way You Travel"                                                        -> slika ob besedilu + gumb do ponudb (free gifts izpuščeno)
 *   8) "3 Simple Steps to Fit 14 Days In a Carry-On" (Open / Pack / Zip & Compress)        -> 3 koraki ob sliki vrećice
 *   9) "Pack smarter. Travel lighter." (+ Save $138+ / Pack Twice as Much / Repack Anywhere) -> slika ob besedilu; »Carry-on approved for all
 *      major US airlines« -> mere 45 × 30 × 20 cm + »prije leta provjerite pravila svoje zrakoplovne kompanije«
 * Izpuščeno: pasica »Off-Season Sale $175 in Free Gifts«, darila (Free Air Pump, $25 Gift Card, Lifetime Warranty), oznaka »+ Free Shipping«,
 * zavihka »Shipping & Returns« (100 dni, ZDA) in »Customer support« (e-pošta konkurenta) -> NORIKS pogoji v standardnih harmonikah,
 * trak z logotipi medijev (Forbes, WIRED, HYPEBEAST, HICONSUMPTION, GEAR PATROL, BuzzFeed; 2x), 5 videov kupcev in video v galeriji
 * (logotip znamke na vrećici viden skoraj v vseh kadrih, ki se premika – rez ali čista zameglitev nista mogoča), galerijski sliki s kolažem
 * TikTok (86,432+) in komentarji FB (121,487+), »1,000,000 bags sold«, »military-grade / 1,000+ trips« (omiljeno).
 * FAQ (9) je v reviews.php ($travelkit_faq), mnenja v auto_reviews/HR_travelkit.php, opis + nega v meta.php.
 * Zneski USD -> EUR po ECB 0,89342 (23. 10. 2026).
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$ntvk      = get_template_directory_uri() . '/img/travelkit/';
$ntvk_path = get_template_directory() . '/img/travelkit/';
$ntvk_img  = function( $file, $alt, $cls = '' ) use ( $ntvk, $ntvk_path ) {
  if ( ! $file || ! file_exists( $ntvk_path . $file ) ) { return ''; }
  return '<img src="' . esc_url( $ntvk . $file ) . '" alt="' . esc_attr( $alt ) . '" loading="eager"' . ( $cls ? ' class="' . esc_attr( $cls ) . '"' : '' ) . '>';
};
$ntvk_stars = function( $n ) {
  $n = max( 0, min( 5, (int) $n ) );
  return '<span class="ntvk-stars" aria-label="' . $n . ' od 5 zvjezdica">' . str_repeat( '★', $n ) . '<span class="ntvk-stars__off">' . str_repeat( '★', 5 - $n ) . '</span></span>';
};

/* cena za zaključni poziv (iz izdelka, da se ujema s ponudbami) */
$ntvk_eur  = function( $v ) { return number_format( (float) $v, 2, ',', '.' ) . ' €'; };
$ntvk_prod = function_exists( 'wc_get_product' ) ? wc_get_product( get_the_ID() ) : null;
$ntvk_sale = $ntvk_prod ? $ntvk_prod->get_sale_price() : '';
$ntvk_reg  = $ntvk_prod ? $ntvk_prod->get_regular_price() : '';
if ( '' === $ntvk_sale && $ntvk_prod ) { $ntvk_sale = $ntvk_prod->get_price(); }

/* 2) "How does it work? – Simple 3-step process" */
$ntvk_postupak = array(
  'Spakirajte odjeću u vrećicu.',
  'Zatvorite hermetički patentni zatvarač.',
  'Priključite električnu pumpu i pritisnite tipku – kompresija traje svega nekoliko sekundi.',
);

/* 3) "Will it fit my luggage?" */
$ntvk_specs = array(
  array( 'Mjere vrećice', '45 × 30 × 20 cm' ),
  array( 'Što stane', '10 – 15 komada odjeće, ovisno o debljini (majice, traperice, haljine, džemperi …)' ),
  array( 'Pumpa', 'kompaktna, 8,5 × 3,5 cm' ),
  array( 'Baterija', 'do 20 kompresija po punjenju' ),
  array( 'Punjenje', 'USB-C' ),
);

/* 4) mnenja z nakupne škatle (3, s fotografijami; imena lokalizirana, $200 -> 178 €) */
$ntvk_reviews = array(
  array( 'img' => 'ntvk-r1.webp', 'ime' => 'Ivan K.', 'tekst' => 'Stigla je za manje od tjedan dana, taman na vrijeme za naše putovanje. Mjesec dana bili smo u inozemstvu samo s ručnom prtljagom, a u svaku od dvije vrećice stala mi je odjeća za dva tjedna. Uz električnu pumpu ponovno pakiranje u hotelima bilo je posve jednostavno.' ),
  array( 'img' => 'ntvk-r2.webp', 'ime' => 'Nikolina J.', 'tekst' => 'Na putovanje u Meksiko ponijela sam četiri vrećice i na tri leta uštedjela više od 178 € na naknadama za predanu prtljagu. Kompresija stvarno radi – cijela garderoba za odmor stala mi je u običan kofer za ručnu prtljagu. Isplatila se već na prvom putovanju.' ),
  array( 'img' => 'ntvk-r3.webp', 'ime' => 'Agata M.', 'tekst' => 'Po prirodi sam skeptična pa nisam vjerovala u »60 % više prostora«. Ispostavilo se da je istina. Za 10 dana putovanja spakirala sam 15 komada samo u ručnu prtljagu – traperice, džempere, čak i zimsku jaknu. Najbolje od svega? Koristila sam je već više od 20 puta, a vrećica i dalje izgleda kao nova.' ),
);

/* 6) "Features" (100 day money back guarantee -> NORIKS 30 dana) */
$ntvk_usporedba = array(
  array( 'Maksimalno štedi prostor', 'da', 'da', 'da' ),
  array( 'Komprimira 15+ komada odjeće', 'da', 'ne', 'ne' ),
  array( 'Pumpa s USB punjenjem', 'da', 'ne', 'ne' ),
  array( 'Odjeća ostaje svježa', 'da', 'ne', 'ne' ),
  array( 'Izdržljiv vodootporan najlon, otporan na trganje', 'da', 'ne', 'ne' ),
  array( 'Pravo na povrat u roku od 30 dana', 'da', 'ne', 'ne' ),
);
$ntvk_cell = function( $v ) {
  return ( 'da' === $v ) ? '<span class="ntvk-yes" aria-label="Da">✓</span>' : '<span class="ntvk-no" aria-label="Ne">✕</span>';
};
$ntvk_brojke = array(
  array( '60 %', 'više prostora' ),
  array( '123 €', 'ušteđeno na naknadama za prtljagu' ),
  array( '+3 h', 'ušteđeno u zračnoj luci' ),
);

/* 8) "3 Simple Steps to Fit 14 Days In a Carry-On" */
$ntvk_koraci = array(
  array( 'Korak 1', 'Otvorite vrećicu', 'Otvorite nepropusni patentni zatvarač na vrećici.' ),
  array( 'Korak 2', 'Spakirajte', 'Napunite vrećicu odjećom složenom baš kao u koferu.' ),
  array( 'Korak 3', 'Zatvorite i komprimirajte', 'Zatvorite patentni zatvarač, priključite električnu pumpu, pritisnite tipku i gledajte kako se odjeća smanjuje.' ),
);

/* 9) "Pack smarter. Travel lighter." */
$ntvk_prednosti = array(
  'Uštedite 123 €+ na svakom putovanju',
  'Spakirajte dvostruko više',
  'Ponovno spakirajte bilo gdje',
);

$ntvk_n = 0; // števec sekcij za izmenična ozadja
$ntvk_cls = function() use ( &$ntvk_n ) { $ntvk_n++; return ( $ntvk_n % 2 ) ? ' ntvk-tint' : ''; };
?>

<!-- 1) VIŠE PROSTORA (zavihek "How much space can I save?" + zgodba kupke; $100 -> 89 €) — prevedena slika ob besedilu -->
<section class="ntvk-sec<?php echo $ntvk_cls(); ?>">
  <div class="ntvk-wrap">
    <div class="ntvk-row2">
      <div class="ntvk-media ntvk-media--sq"><?php echo $ntvk_img( 'ntvk-g02-vise-prostora-hr.webp', 'NORIKS TravelKit prije i poslije kompresije – 60 % više prostora, uključena zračna pumpa' ); ?></div>
      <div class="ntvk-copy">
        <p class="ntvk-kicker">Koliko prostora mogu uštedjeti?</p>
        <h2 class="ntvk-h2">Do 60 % više prostora <em>u istoj torbi</em></h2>
        <p>NORIKS TravelKit komprimira vašu odjeću pa možete spakirati <strong>dvostruko više</strong>, a da torba ne postane veća.</p>
        <p>To znači: <strong>bez predane prtljage, bez naknada za prtljagu – sve ostaje uz vas.</strong></p>
        <p class="ntvk-story">Sara je u ožujku 14 dana putovala Europom – hladna jutra, topla poslijepodneva i nepredvidiva kiša. U ručnu prtljagu stala su joj 3 džempera, 2 jakne, traperice, majice dugih rukava, šalovi i čizme. Prije je zbog glomazne odjeće uvijek morala predati prtljagu. Ovaj put? Uštedjela je 89 € na naknadama i nije čekala na traci pitajući se je li joj prtljaga stigla na presjedanje.</p>
        <p class="ntvk-big">Dvostruko više odjeće – ista ručna prtljaga.</p>
      </div>
    </div>
  </div>
</section>

<!-- 2) KAKO RADI (zavihek "How does it work? – Simple 3-step process") — prevedena slika ob besedilu -->
<section class="ntvk-sec<?php echo $ntvk_cls(); ?>">
  <div class="ntvk-wrap">
    <div class="ntvk-row2 ntvk-row2--rev">
      <div class="ntvk-media ntvk-media--sq"><?php echo $ntvk_img( 'ntvk-g04-dizajn-hr.webp', 'NORIKS TravelKit – najlon otporan na trganje, nepropusni zatvarač, 100 % vodootporna' ); ?></div>
      <div class="ntvk-copy">
        <p class="ntvk-kicker">Kako radi?</p>
        <h2 class="ntvk-h2">Jednostavan postupak <em>u 3 koraka</em></h2>
        <ol class="ntvk-num">
          <?php foreach ( $ntvk_postupak as $i => $li ) : ?>
          <li><span class="ntvk-num__n"><?php echo (int) $i + 1; ?></span><?php echo esc_html( $li ); ?></li>
          <?php endforeach; ?>
        </ol>
        <p class="ntvk-big">Gotovo. Vrećica se smanji na pola.</p>
      </div>
    </div>
  </div>
</section>

<!-- 3) HOĆE LI STATI U MOJU PRTLJAGU? (zavihek "Will it fit my luggage?"; inči -> cm) — prevedena slika z merami ob besedilu -->
<section class="ntvk-sec<?php echo $ntvk_cls(); ?>">
  <div class="ntvk-wrap">
    <div class="ntvk-row2 ntvk-row2--top">
      <div class="ntvk-media ntvk-media--sq"><?php echo $ntvk_img( 'ntvk-g05-dimenzije-hr.webp', 'Mjere NORIKS TravelKit vrećice 45 × 30 cm, zapremina 27 litara, samo 0,24 kg' ); ?></div>
      <div class="ntvk-copy">
        <p class="ntvk-kicker">Hoće li stati u moju prtljagu?</p>
        <h2 class="ntvk-h2">Da – <em>pristaje uz svaku torbu</em></h2>
        <p>Vrećica mjeri <strong>45 × 30 × 20 cm</strong> i savršeno stane u kofer za ručnu prtljagu, ruksak, putnu torbu ili predanu prtljagu.</p>
        <dl class="ntvk-specs">
          <?php foreach ( $ntvk_specs as $sp ) : ?>
          <div><dt><?php echo esc_html( $sp[0] ); ?>:</dt><dd><?php echo esc_html( $sp[1] ); ?></dd></div>
          <?php endforeach; ?>
        </dl>
        <p class="ntvk-small">Električna pumpa je uključena u paket.</p>
      </div>
    </div>
  </div>
</section>

<!-- 4) TISUĆE ZADOVOLJNIH PUTNIKA (3 mnenja s fotografijami z nakupne škatle + "Over 121,500 Happy Customers"; 121,500+ -> tisuće, 1081; videi izpuščeni) -->
<section class="ntvk-sec<?php echo $ntvk_cls(); ?>">
  <div class="ntvk-wrap">
    <p class="ntvk-kicker ntvk-c">Stvarni kupci</p>
    <h2 class="ntvk-h2 ntvk-c">Tisuće <em>zadovoljnih putnika</em></h2>
    <div class="ntvk-score">
      <span class="ntvk-score__num">4,8</span>
      <?php echo $ntvk_stars( 5 ); ?>
      <span class="ntvk-score__txt">Odlično · na temelju 1081 recenzije</span>
    </div>
    <div class="ntvk-reviews">
      <?php foreach ( $ntvk_reviews as $r ) : ?>
      <article class="ntvk-card">
        <div class="ntvk-card__img"><?php echo $ntvk_img( $r['img'], 'Kupac ' . $r['ime'] . ' na putovanju' ); ?></div>
        <div class="ntvk-card__body">
          <?php echo $ntvk_stars( 5 ); ?>
          <p class="ntvk-card__txt">„<?php echo esc_html( $r['tekst'] ); ?>”</p>
          <p class="ntvk-card__name"><?php echo esc_html( $r['ime'] ); ?> <span class="ntvk-ok">✓ Potvrđena kupnja</span></p>
        </div>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- 5) ZAŠTO OVO FUNKCIONIRA ("Why This Works (When Other Solutions Don't)") — slika vodootpornega najlona ob besedilu -->
<section class="ntvk-sec<?php echo $ntvk_cls(); ?>">
  <div class="ntvk-wrap">
    <div class="ntvk-row2">
      <div class="ntvk-media ntvk-media--sq"><?php echo $ntvk_img( 'ntvk-g08-vodootporni-hr.webp', 'Vodootporni najlon NORIKS TravelKit vrećice s kapljicama vode' ); ?></div>
      <div class="ntvk-copy">
        <p class="ntvk-kicker">Zašto ovo funkcionira</p>
        <h2 class="ntvk-h2">Kad druga rješenja <em>ne uspiju</em></h2>
        <p>Klasične kocke za pakiranje pomažu u organizaciji, ali zapravo ne štede prostor – samo preslože problem.</p>
        <p>Jeftine vakuumske vrećice popuste nakon 2 – 3 putovanja: materijal napukne, zatvarač propušta i odjeća se ponovno napuhne prije nego što se uopće ukrcate.</p>
        <p class="ntvk-big">Pogledajte kako NORIKS TravelKit nadmašuje uobičajena rješenja za kompresiju.</p>
      </div>
    </div>
  </div>
</section>

<!-- 6) USPOREDBA ("Features" 2Packbag / Packing Cubes / Compression Bags; 100 day -> 30 dana) + "The Bag That Pays For Itself on the First Trip" -->
<section class="ntvk-sec<?php echo $ntvk_cls(); ?>">
  <div class="ntvk-wrap">
    <div class="ntvk-row2 ntvk-row2--rev">
      <div class="ntvk-media ntvk-media--sq"><?php echo $ntvk_img( 'ntvk-s-torba.webp', 'NORIKS TravelKit vakuumska putna vrećica s električnom pumpom' ); ?></div>
      <div class="ntvk-copy">
        <p class="ntvk-kicker">Značajke</p>
        <h2 class="ntvk-h2">Vrećica koja se isplati <em>već na prvom putovanju</em></h2>
        <div class="ntvk-cmp" role="table" aria-label="Usporedba NORIKS TravelKit, kocki za pakiranje i vakuumskih vrećica">
          <div class="ntvk-cmp__row ntvk-cmp__head" role="row">
            <span role="columnheader"></span>
            <span role="columnheader" class="ntvk-cmp__us">NORIKS</span>
            <span role="columnheader">Kocke za pakiranje</span>
            <span role="columnheader">Vakuumske vrećice</span>
          </div>
          <?php foreach ( $ntvk_usporedba as $r ) : ?>
          <div class="ntvk-cmp__row" role="row">
            <span role="rowheader"><?php echo esc_html( $r[0] ); ?></span>
            <span role="cell" class="ntvk-cmp__us"><?php echo $ntvk_cell( $r[1] ); ?></span>
            <span role="cell"><?php echo $ntvk_cell( $r[2] ); ?></span>
            <span role="cell"><?php echo $ntvk_cell( $r[3] ); ?></span>
          </div>
          <?php endforeach; ?>
        </div>
        <div class="ntvk-stats">
          <?php foreach ( $ntvk_brojke as $b ) : ?>
          <div><b><?php echo esc_html( $b[0] ); ?></b><span><?php echo esc_html( $b[1] ); ?></span></div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- 7) NADOGRADITE NAČIN PUTOVANJA ("Upgrade The Way You Travel"; »+ FREE GIFTS« izpuščeno) — slika ob besedilu -->
<section class="ntvk-sec<?php echo $ntvk_cls(); ?>">
  <div class="ntvk-wrap">
    <div class="ntvk-row2">
      <div class="ntvk-media ntvk-media--sq"><?php echo $ntvk_img( 'ntvk-s-hotel.webp', 'Putnica u hotelskoj sobi drži NORIKS TravelKit vrećicu' ); ?></div>
      <div class="ntvk-copy">
        <p class="ntvk-kicker">Putujte drukčije</p>
        <h2 class="ntvk-h2">Nadogradite način <em>na koji putujete</em></h2>
        <p>NORIKS TravelKit sve što spakirate komprimira na <strong>djelić izvorne veličine</strong>. Preskočite predanu prtljagu, a da se ne odreknete ničega što želite ponijeti.</p>
        <p>Odjeća ostaje <strong>čista, suha i svježa</strong>, a vi izbjegavate naknade za prtljagu i štedite vrijeme u zračnoj luci.</p>
        <p><a class="ntvk-btn" href="#bundle-selector">Da! Želim svoj NORIKS TravelKit →</a></p>
      </div>
    </div>
  </div>
</section>

<!-- 8) 3 JEDNOSTAVNA KORAKA ("3 Simple Steps to Fit 14 Days In a Carry-On": Open the bag / Pack it / Zip & Compress) — slika ob besedilu -->
<section class="ntvk-sec<?php echo $ntvk_cls(); ?>">
  <div class="ntvk-wrap">
    <div class="ntvk-row2 ntvk-row2--rev">
      <div class="ntvk-media ntvk-media--sq"><?php echo $ntvk_img( 'ntvk-s-koraci.webp', 'NORIKS TravelKit vrećica i električna pumpa' ); ?></div>
      <div class="ntvk-copy">
        <p class="ntvk-kicker">3 jednostavna koraka</p>
        <h2 class="ntvk-h2">Odjeća za 14 dana <em>u ručnoj prtljazi</em></h2>
        <ol class="ntvk-steps">
          <?php foreach ( $ntvk_koraci as $k ) : ?>
          <li><span class="ntvk-steps__n"><?php echo esc_html( $k[0] ); ?></span><strong><?php echo esc_html( $k[1] ); ?></strong><br><?php echo esc_html( $k[2] ); ?></li>
          <?php endforeach; ?>
        </ol>
      </div>
    </div>
  </div>
</section>

<!-- 9) PAKIRAJTE PAMETNIJE ("Pack smarter. Travel lighter."; $138 -> 123 €; »Carry-on approved for all major US airlines« -> mere + pravila kompanije) -->
<section class="ntvk-sec<?php echo $ntvk_cls(); ?>">
  <div class="ntvk-wrap">
    <div class="ntvk-row2">
      <div class="ntvk-media ntvk-media--sq"><?php echo $ntvk_img( 'ntvk-s-zracna-luka.webp', 'Putnica s koferom za ručnu prtljagu na putu do zrakoplova' ); ?></div>
      <div class="ntvk-copy">
        <p class="ntvk-kicker">Pakirajte pametnije</p>
        <h2 class="ntvk-h2">Pakirajte pametnije. <em>Putujte lakše.</em></h2>
        <p>NORIKS TravelKit košta manje od naknade za predanu prtljagu na jednom povratnom putovanju – i od tada vam svako putovanje štedi novac.</p>
        <ul class="ntvk-list">
          <?php foreach ( $ntvk_prednosti as $li ) : ?>
          <li><strong><?php echo esc_html( $li ); ?></strong></li>
          <?php endforeach; ?>
        </ul>
        <p class="ntvk-note">Vrećica mjeri 45 × 30 × 20 cm. Pravila za ručnu prtljagu razlikuju se od kompanije do kompanije – prije leta provjerite pravila svoje zrakoplovne kompanije.</p>
        <?php if ( $ntvk_sale ) : ?>
        <p class="ntvk-price">Već od <strong><?php echo esc_html( $ntvk_eur( $ntvk_sale ) ); ?></strong><?php if ( $ntvk_reg && (float) $ntvk_reg > (float) $ntvk_sale ) : ?> <s><?php echo esc_html( $ntvk_eur( $ntvk_reg ) ); ?></s><?php endif; ?></p>
        <?php endif; ?>
        <p class="ntvk-small">Besplatna dostava za narudžbe iznad 70 € · Pravo na povrat u roku od 30 dana</p>
        <p><a class="ntvk-btn" href="#bundle-selector">Prestanite plaćati prtljagu →</a></p>
      </div>
    </div>
  </div>
</section>

<style>
/* NORIKS stil (predloga why-kneelight.php / why-hands.php): oznaka + naslov z ležečim poudarkom, slika ob besedilu,
   izmenjujoča ozadja in strani. Paleta po originalu (oranžna + črna): poudarek #e8590c, temno #1a1a1a, svetlo #fbf3ee. */
.ntvk-sec { padding: 60px 0; font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Arial, sans-serif; color: #1a1a1a; background: #fff; }
.ntvk-sec * { box-sizing: border-box; }
.ntvk-tint { background: #fbf3ee; }
.ntvk-wrap { width: 100%; max-width: 1200px; margin: 0 auto; padding: 0 24px; }
.ntvk-c { text-align: center; }
.ntvk-sec h2, .ntvk-sec h3 { font-family: inherit; text-transform: none; letter-spacing: 0; }
.ntvk-kicker, .ntvk-copy p.ntvk-kicker { font-size: 12.5px; line-height: 1.4; font-weight: 800; letter-spacing: .14em; text-transform: uppercase; color: #e8590c; margin: 0 0 10px; }
.ntvk-h2 { font-weight: 800; font-size: clamp(25px, 3.1vw, 36px); line-height: 1.2; margin: 0 0 18px; color: #1a1a1a; }
.ntvk-h2 em { font-style: italic; color: #e8590c; }
.ntvk-sec img { display: block; width: 100%; height: auto; }

/* slika ob besedilu */
.ntvk-row2 { display: grid; grid-template-columns: 1fr 1fr; gap: 56px; align-items: center; }
.ntvk-row2--top { align-items: start; }
.ntvk-row2--rev > :first-child { order: 2; }
.ntvk-media > img { display: block; width: 100%; border-radius: 10px; box-shadow: 0 2px 4px rgba(26,26,26,.05), 0 14px 40px rgba(26,26,26,.10); max-width: 560px; margin: 0 auto; aspect-ratio: 4 / 5; object-fit: cover; background: #fff; }
.ntvk-media--sq > img { aspect-ratio: 1 / 1; }
.ntvk-copy p { font-size: 16px; line-height: 1.7; color: #4d4743; margin: 0 0 14px; }
.ntvk-copy p strong { color: #1a1a1a; font-weight: 700; }
.ntvk-sec p.ntvk-big { font-size: 19px; font-weight: 800; color: #1a1a1a; line-height: 1.45; margin-top: 6px; }
.ntvk-sec p.ntvk-small { font-size: 13.5px; line-height: 1.55; color: #6f6a66; }
.ntvk-sec p.ntvk-story { background: #fff; border-left: 3px solid #e8590c; border-radius: 0 10px 10px 0; padding: 12px 16px; font-size: 15px; font-style: italic; }

/* 2) postopek */
.ntvk-num { list-style: none; margin: 0 0 14px; padding: 0; }
.ntvk-num li { position: relative; padding: 4px 0 4px 44px; margin: 0 0 12px; font-size: 16px; line-height: 1.6; color: #4d4743; min-height: 32px; }
.ntvk-num__n { position: absolute; left: 0; top: 2px; width: 32px; height: 32px; border-radius: 50%; background: #e8590c; color: #fff; font-weight: 800; font-size: 15px; line-height: 32px; text-align: center; }

/* 3) tehnični podatki */
.ntvk-specs { margin: 0 0 14px; padding: 12px 18px; background: #fff; border: 1px solid #f5c6a5; border-radius: 10px; }
.ntvk-specs > div { display: grid; grid-template-columns: 130px 1fr; gap: 10px; padding: 7px 0; border-top: 1px solid #fbe3d2; font-size: 15px; line-height: 1.5; }
.ntvk-specs > div:first-child { border-top: 0; }
.ntvk-specs dt { font-weight: 700; color: #1a1a1a; margin: 0; }
.ntvk-specs dd { margin: 0; color: #4d4743; }

/* številke */
.ntvk-stats { display: grid; grid-template-columns: repeat(3, minmax(0, 1fr)); gap: 12px; margin: 6px 0 4px; }
.ntvk-stats > div { background: #fff; border: 1px solid #f5c6a5; border-radius: 10px; padding: 14px 10px; text-align: center; box-shadow: 0 2px 10px rgba(26,26,26,.04); }
.ntvk-stats b { display: block; font-size: 24px; font-weight: 800; color: #e8590c; line-height: 1.2; }
.ntvk-stats span { display: block; font-size: 13px; color: #625c58; line-height: 1.4; margin-top: 2px; }

/* seznam */
.ntvk-list { list-style: none; margin: 0 0 16px; padding: 0; }
.ntvk-list li { position: relative; padding-left: 30px; margin: 0 0 10px; font-size: 15.5px; line-height: 1.6; color: #4d4743; }
.ntvk-list li strong { color: #1a1a1a; }
.ntvk-list li::before { content: "✓"; position: absolute; left: 0; top: 2px; width: 20px; height: 20px; border-radius: 50%; background: #e8590c; color: #fff; font-size: 11px; font-weight: 800; line-height: 20px; text-align: center; }

/* 8) koraki */
.ntvk-steps { list-style: none; margin: 0 0 10px; padding: 0; }
.ntvk-steps li { background: #fff; border: 1px solid #f5c6a5; border-radius: 10px; padding: 12px 16px; margin: 0 0 10px; font-size: 15px; line-height: 1.6; color: #4d4743; box-shadow: 0 2px 10px rgba(26,26,26,.04); }
.ntvk-steps li strong { color: #1a1a1a; font-size: 16px; }
.ntvk-steps__n { display: block; font-size: 11.5px; font-weight: 800; letter-spacing: .1em; text-transform: uppercase; color: #e8590c; }

/* 6) usporedba */
.ntvk-cmp { background: #fff; border: 1px solid #f5c6a5; border-radius: 10px; overflow: hidden; box-shadow: 0 2px 10px rgba(26,26,26,.05); margin-bottom: 18px; }
.ntvk-cmp__row { display: grid; grid-template-columns: 1.6fr 1fr 1fr 1fr; border-top: 1px solid #fbe3d2; }
.ntvk-cmp__row:first-child { border-top: 0; }
.ntvk-cmp__row > span { padding: 10px 8px; font-size: 14.5px; line-height: 1.4; color: #4d4743; text-align: center; display: flex; align-items: center; justify-content: center; }
.ntvk-cmp__row > span[role="rowheader"] { font-weight: 700; color: #1a1a1a; text-align: left; justify-content: flex-start; }
.ntvk-cmp__row > span.ntvk-cmp__us { background: #fde0cb; }
.ntvk-cmp__head > span { font-weight: 800; color: #1a1a1a; font-size: 13.5px; }
.ntvk-cmp__head > span.ntvk-cmp__us { background: #e8590c; color: #fff; }
.ntvk-yes { color: #e8590c; font-weight: 800; font-size: 18px; }
.ntvk-no { color: #b3aaa5; font-weight: 700; font-size: 15px; }
.ntvk-sec a.ntvk-btn { display: inline-block; background: #e8590c; color: #fff; font-weight: 800; font-size: 16px; padding: 13px 28px; border-radius: 10px; text-decoration: none; box-shadow: 0 4px 14px rgba(232,89,12,.25); }
.ntvk-sec a.ntvk-btn:hover { background: #c94a08; color: #fff; }

/* 4) recenzije */
.ntvk-score { display: flex; flex-direction: column; align-items: center; gap: 4px; margin: 6px auto 30px; text-align: center; }
.ntvk-score__num { font-size: 52px; font-weight: 800; line-height: 1; color: #1a1a1a; }
.ntvk-score .ntvk-stars { font-size: 20px; }
.ntvk-score__txt { font-size: 14px; color: #625c58; }
.ntvk-reviews { display: grid; grid-template-columns: repeat(3, minmax(0, 1fr)); gap: 18px; align-items: start; }
.ntvk-card { background: #fff; border: 1px solid #f5c6a5; border-radius: 10px; overflow: hidden; display: flex; flex-direction: column; box-shadow: 0 2px 10px rgba(26,26,26,.05); }
.ntvk-card__img img { aspect-ratio: 4 / 3; object-fit: cover; }
.ntvk-card__body { padding: 16px; }
.ntvk-card__txt { font-size: 14.5px; line-height: 1.6; color: #3d3734; margin: 8px 0 10px; font-style: italic; }
.ntvk-card__name { font-size: 13.5px; font-weight: 700; color: #1a1a1a; margin: 0; }

/* 9) zaključek */
.ntvk-sec p.ntvk-price { font-size: 18px; color: #1a1a1a; }
.ntvk-price strong { font-size: 26px; color: #e8590c; }
.ntvk-price s { color: #9a918c; margin-left: 6px; }
.ntvk-sec p.ntvk-note { padding: 12px 16px; background: #fff; border-left: 3px solid #e8590c; border-radius: 0 10px 10px 0; font-size: 14px; line-height: 1.6; color: #4d4743; }

/* ocjene */
.ntvk-stars { color: #f2a516; letter-spacing: 1px; font-size: 15px; }
.ntvk-stars__off { color: #e2d8d3; }
.ntvk-ok { color: #2f9e5f; font-weight: 600; font-size: 12px; margin-left: 4px; font-style: normal; }

@media (max-width: 989px) {
  .ntvk-row2 { gap: 32px; }
  .ntvk-reviews { grid-template-columns: repeat(2, minmax(0, 1fr)); }
}
@media (max-width: 749px) {
  .ntvk-sec { padding: 42px 0; }
  .ntvk-wrap { padding: 0 16px; }
  .ntvk-row2 { grid-template-columns: 1fr; gap: 24px; }
  .ntvk-row2--rev > :first-child { order: 0; }
  .ntvk-specs > div { grid-template-columns: 1fr; gap: 2px; }
  .ntvk-cmp__row { grid-template-columns: 1.4fr 1fr 1fr 1fr; }
  .ntvk-cmp__row > span { padding: 9px 5px; font-size: 13px; }
  .ntvk-cmp__head > span { font-size: 11.5px; }
  .ntvk-reviews { grid-template-columns: 1fr; gap: 12px; }
  .ntvk-stats b { font-size: 19px; }
}

/* galerija izdelka: sličice največ v 2 vrstah (5 na vrsto), ostale slike so dosegljive z drsenjem glavne slike */
.product_cat-orto-travelkit .flex-control-thumbs li:nth-child(n+11) { display: none !important; }

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
.woocommerce-product-details__short-description .ntvk-tick {
  position: absolute !important; left: 0 !important; top: 1px !important;
  width: 21px; height: 21px; border-radius: 50%;
  background: #2f9e5f !important; color: #fff !important;
  font-size: 12px !important; font-weight: 800 !important; line-height: 21px !important;
  text-align: center !important; display: inline-block !important; }
.woocommerce-product-details__short-description p:first-of-type { font-size: 16px; line-height: 1.55; }
</style>
