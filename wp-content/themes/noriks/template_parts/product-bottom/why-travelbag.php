<?php
/**
 * product-bottom: NORIKS TravelBag — putna torba za ručnu prtljagu s odvojivim kotačićima (orto-travelbag).
 * Original: luhxe.com/products/luhxe-0 — vsebina in vrstni red 1:1 z originalom, oblika po NORIKS stilu
 * (predloga why-seatcushion.php / why-hands.php), poudarek privzeta topla rjava NORIKS (#a9683f), besedilo #382929 kot original.
 *   1) nakupna škatla: "SEE THE LUHXE BAG IN ACTION" (5 videov kupk)       -> besedilo + 5 utišanih videov (3 s hrvaškimi napisi,
 *      angleški vžgani napisi prekriti; video 2 skrajšan na 25–58 s, brez poziva »click this link«)
 *   2) nakupna škatla: "Save BIG on Every Trip" ($0 / $65+ / $325+)       -> Uštedite na svakom putovanju (USD -> EUR, ECB 0,89342)
 *   3) nakupna škatla: zavihki "details / what's included / other details" -> Što je čini posebnom (100-Day Guarantee / 24/7 support /
 *      Travel Guide izpuščeni -> NORIKS pogoji)
 *   4) "3 Features only women would think to include"                      -> 3 kartice s slikami (dimenzije v cm)
 *   5) "still struggling with overstuffed, awkward bags? let's talk."     -> 4 kartice
 *   6) "a whole new meaning to smart packing" + video                       -> utišan video s hrvaškimi napisi ob besedilu
 *      (uvod z imenom znamke in poziv na e-pošto podpore izpuščena)
 *   7) "snap them on, roll smoothly …" (telescopic handle, smooth wheels)  -> 2 sliki ob besedilu
 *   8) "weather-ready / built for the long haul / eco-friendly"            -> 3 kartice s slikami (ploščica z logotipom izrezana)
 *   9) "carry-on approved—skip the check-in line" + kalkulator             -> besedilo ob kalkulatorju (logotipi letalskih družb izpuščeni)
 *  10) "rated as the #1 travel bag of 2025" + 5 fotografij                 -> omiljeno »Jedna od najomiljenijih putnih torbi«, 4,8 / 1081
 *  11) "not just better superior in every way — US VS THEM"                -> usporedba NORIKS / Ostale torbe
 *  12) "over 100,000+ women can't be wrong..." (3 mnenja s fotografijami)  -> Tisuće žena … + 3 mnenja (imena lokalizirana)
 * Izpusceno: značke »Carry-on approved on 100+ Airlines / free gifts worth $35 / 2026 TOP-RATED«, »Holiday Sale: 3 Gifts for $1«
 * (dodatki Cosmetic / Laundry / Shoe Bag), darila (Travel Savings Guide, Shoe Bag), »Low Stock«, pasice »Limited-Time Sale /
 * get 3 free Pre-order gifts / NEW CUSTOMER OFFER 30% OFF ENDS TODAY«, »100-DAY GUARANTEE«, »100,000+ Sold«, »LUHXE PROMISE«,
 * logotipi letalskih družb, zavihek »shipping« (ZDA), noga trgovine.
 * FAQ (8) je v reviews.php ($travelbag_faq), seznam letalskih družb (okno »See list of approved airlines«) skrajšan v FAQ,
 * okno »Which one is for me?« = tablica velicin (size-chart-travelbag.php), mnenja v auto_reviews/HR_travelbag.php,
 * opis + nega v meta.php. Slike in videi: img/travelbag/ (ntb-…).
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$ntb      = get_template_directory_uri() . '/img/travelbag/';
$ntb_path = get_template_directory() . '/img/travelbag/';
$ntb_img  = function( $file, $alt, $cls = '', $pos = '' ) use ( $ntb, $ntb_path ) {
  if ( ! $file || ! file_exists( $ntb_path . $file ) ) { return ''; }
  return '<img src="' . esc_url( $ntb . $file ) . '" alt="' . esc_attr( $alt ) . '" loading="lazy"'
    . ( $cls ? ' class="' . esc_attr( $cls ) . '"' : '' ) . ( $pos ? ' style="object-position:' . esc_attr( $pos ) . '"' : '' ) . '>';
};
$ntb_video = function( $file, $label ) use ( $ntb, $ntb_path ) {
  if ( ! file_exists( $ntb_path . $file ) ) { return ''; }
  $poster = preg_replace( '/(-hr)?\.mp4$/', '.webp', $file );
  return '<video src="' . esc_url( $ntb . $file ) . '"' . ( file_exists( $ntb_path . $poster ) ? ' poster="' . esc_url( $ntb . $poster ) . '"' : '' )
    . ' muted autoplay loop playsinline preload="metadata" aria-label="' . esc_attr( $label ) . '"></video>';
};
$ntb_stars = function( $n ) {
  $n = max( 0, min( 5, (int) $n ) );
  return '<span class="ntb-stars" aria-label="' . $n . ' od 5 zvjezdica">' . str_repeat( '★', $n ) . '<span class="ntb-stars__off">' . str_repeat( '★', 5 - $n ) . '</span></span>';
};

/* 1) videi kupk (utišani; 1, 2 in 5 s hrvaškimi napisi) */
$ntb_vids = array(
  array( 'ntb-v1-dizajn-hr.mp4',    'Zašto žene vole ovaj dizajn' ),
  array( 'ntb-v2-omiljena-hr.mp4',  'Zašto mi je ovo omiljena putna torba' ),
  array( 'ntb-v3-pakiranje.mp4',    'Kako pakirati kao profesionalac' ),
  array( 'ntb-v4-sve-stane.mp4',    'Pogledajte koliko toga stvarno stane' ),
  array( 'ntb-v5-za-dvoje-hr.mp4',  'Pakiranje za dvoje: vikend za parove' ),
);

/* 2) ušteda (USD originala preračunani v EUR, ECB 0,89342) */
$ntb_save = array(
  array( '0 €', 'naknade za prtljagu', 'S NORIKS TravelBag torbom' ),
  array( '58 €+', 'po putovanju', 'naknade za predanu prtljagu' ),
  array( '290 €+', 'ušteđeno', '*godišnji trošak za 5 putovanja' ),
);

/* 3) zavihki nakupne škatle */
$ntb_great = array(
  'Prostor za svaku kombinaciju i još malo više',
  'Mogućnost odvojivih kotačića',
  'Više džepova za šminku',
  'Sustav pakiranja bez gužvanja',
  'Poseban pretinac za cipele',
  'Dimenzije ručne prtljage',
);
$ntb_inbox = array(
  '1x podstavljena naramenica',
  '1x torbica za kozmetiku / cipele',
  'Pravo na povrat u roku od 30 dana',
  'Besplatna dostava za narudžbe iznad 70 €',
);
$ntb_specs = array(
  array( 'Dimenzije', '51 × 23 × 32 cm (dimenzije ručne prtljage)' ),
  array( 'Materijal', 'kvalitetna, ekološki prihvatljiva PU koža' ),
  array( 'Vodoodbojni premaz', 'štiti od prolivenih tekućina i slabe kiše' ),
  array( 'Težina', '1,1 kg' ),
  array( 'Zatvarači', 'patentni zatvarači koji ne zapinju' ),
);

/* 4) 3 značajke */
$ntb_three = array(
  array( 'ntb-s4-kotacici.webp', 'Novo', 'Kotačići kad vam trebaju, naramenice kad ne trebaju',
         'Bez napora prebacite s vožnje kroz zračnu luku na udobno nošenje preko ramena. Putujte lagano ili skinite kotačiće za uredniji izgled.', 'Odvojivi kotačići na torbi NORIKS TravelBag' ),
  array( 'ntb-s4-vjesalica.webp', '', 'Vaša odjeća, uvijek bez gužvanja (bez pretjerivanja)',
         'Ugrađena vješalica i podstava otporna na gužvanje znače da vaša odjeća stiže svježa kao kad ste je spakirali – bez glačanja.', 'Odjeća na vješalici u torbi NORIKS TravelBag' ),
  array( 'ntb-s4-dimenzije-hr.webp', '', 'Stane u pretinac iznad sjedala, bez naknada za prtljagu',
         'Osmišljena prema pravilima za ručnu prtljagu, pa možete preskočiti red na šalteru i uštedjeti na naknadama. Putujte pametnije, bez kompromisa.', 'NORIKS TravelBag – dimenzije 51 × 23 × 32 cm' ),
);

/* 5) bolne točke */
$ntb_pain = array(
  array( 'Vući <strong>težak kofer</strong> kroz gužvu?', 'NIJE zabavno.' ),
  array( 'Morati ostaviti <strong>omiljenu odjeću</strong> kod kuće?', 'Bili smo tamo.' ),
  array( 'Ništa ne kaže »spremna za odmor« kao izglačana haljina…', 'osim kad je <strong>nemate</strong>.' ),
  array( 'Plaćate dodatno <strong>za prtljagu</strong>?', 'Taj novac mogao bi otići na koktele!' ),
);

/* 6) pametno pakiranje */
$ntb_smart = array(
  array( 'Stane odjeća za 10+ dana', 'Prostor za svaki izgled koji vam treba.' ),
  array( 'Više pari cipela', 'Spakirajte štikle, tenisice i još toga.' ),
  array( 'Kozmetika i potrepštine', 'Organizirano i lako za pronaći.' ),
  array( 'Pakiranje bez gužvanja', 'Odjeća ostaje svježa i spremna.' ),
);

/* 8) otporna, izdržljiva, ekološka */
$ntb_built = array(
  array( 'ntb-s8-vodootporna.webp', 'Otporna na vremenske uvjete', 'Vodoodbojna PU koža štiti od prolivenih tekućina, kiše i nepredvidivih trenutaka na putovanju.', 'Kapljice vode na torbi NORIKS TravelBag', '50% 50%' ),
  array( 'ntb-s8-putovanje.webp', 'Izrađena za duge relacije', 'Izdržljiva tkanina i šavovi održavaju je kao novu, kamo god je ponijeli.', 'Putnica s torbom NORIKS TravelBag na kotačićima', '50% 88%' ),
  array( 'ntb-s8-izdrzljiva.webp', 'Ekološka i kvalitetna', 'Elegantna, održiva i osmišljena da izdrži test vremena.', 'Stražnja strana torbe NORIKS TravelBag s utorom za kotačiće', '50% 40%' ),
);

/* 10) fotografije */
$ntb_photos = array(
  array( 'ntb-s10-1.webp', 'Stjuardesa s ružičastom torbom NORIKS TravelBag u zračnoj luci' ),
  array( 'ntb-s10-2.webp', 'Žena s ružičastom torbom NORIKS TravelBag na gradskoj ulici' ),
  array( 'ntb-s10-3.webp', 'Žena u kafiću s ružičastom torbom NORIKS TravelBag' ),
  array( 'ntb-s10-4.webp', 'Žena s ružičastom torbom NORIKS TravelBag preko ramena' ),
  array( 'ntb-s10-5.webp', 'Žena u gradu s ružičastom torbom NORIKS TravelBag' ),
);

/* 11) usporedba */
$ntb_cmp = array(
  'Jednokratna kupnja, štedi na naknadama',
  'Stane 38 komada odjeće i 5 pari cipela',
  'Dimenzije ručne prtljage',
  'Dizajn protiv gužvanja',
  'Ugrađena vješalica',
  'Odvojivi kotačići i ručka',
  'Izdržljiva i vodoodbojna',
  'Pretinci za organizaciju',
);

/* 12) mnenja originala (imena lokalizirana) */
$ntb_reviews = array(
  array( 'ime' => 'Katarina S.', 'img' => 'ntb-rv-1.webp', 'naslov' => 'Kotačići na ovoj torbi zauvijek su promijenili moja putovanja',
         'tekst' => 'Prije sam se užasavala vučenja prtljage kroz zračne luke, a sad samo pričvrstim kotačiće i torba klizi bez napora. Presjedanja i duge šetnje do izlaza puno su lakše!' ),
  array( 'ime' => 'Stefanija L.', 'img' => 'ntb-rv-2.webp', 'naslov' => 'Napokon torba u koju stane SVE što želim spakirati!',
         'tekst' => 'Stane sve što mi treba, uključujući cipele za svaku priliku i odjeću za cijeli tjedan! Više ništa ne ostavljam kod kuće i ne osjećam se nespremno. Napokon imam kontrolu nad pakiranjem.' ),
  array( 'ime' => 'Hana T.', 'img' => 'ntb-rv-3.webp', 'naslov' => 'Nosim je posvuda, nagovorila sam i sve prijateljice!',
         'tekst' => 'Probala sam svaki trik da mi se odjeća ne gužva na putovanjima, ali ugrađena vješalica i podstava protiv gužvanja u ovoj torbi stvarno rade. Odjeća ostaje bez nabora i spremna za nošenje!' ),
);

$ntb_n = 0; // števec sekcij za izmenična ozadja
$ntb_cls = function() use ( &$ntb_n ) { $ntb_n++; return ( $ntb_n % 2 ) ? ' ntb-tint' : ''; };
?>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap">

<!-- 1) POGLEDAJTE TORBU NA DJELU ("SEE THE LUHXE BAG IN ACTION") — besedilo + 5 utišanih videov kupk -->
<section class="ntb-sec<?php echo $ntb_cls(); ?>">
  <div class="ntb-wrap">
    <div class="ntb-row2 ntb-row2--vids">
      <div class="ntb-copy">
        <p class="ntb-kicker">Pogledajte je na djelu</p>
        <h2 class="ntb-h2">Pogledajte NORIKS TravelBag <em>na djelu</em></h2>
        <ul class="ntb-vlist">
          <?php foreach ( $ntb_vids as $v ) : ?><li><?php echo esc_html( $v[1] ); ?></li><?php endforeach; ?>
        </ul>
        <p class="ntb-big">Pakirajte pametnije, putujte lakše i preskočite naknade za prtljagu – sa stilom.</p>
      </div>
      <div class="ntb-vids">
        <?php foreach ( $ntb_vids as $v ) : $html = $ntb_video( $v[0], $v[1] ); if ( ! $html ) { continue; } ?>
        <figure class="ntb-vids__item"><?php echo $html; ?><figcaption><?php echo esc_html( $v[1] ); ?></figcaption></figure>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>

<!-- 2) UŠTEDITE NA SVAKOM PUTOVANJU ("Save BIG on Every Trip") -->
<section class="ntb-sec<?php echo $ntb_cls(); ?>">
  <div class="ntb-wrap ntb-wrap--narrow">
    <p class="ntb-kicker ntb-c">Bez naknada za prtljagu</p>
    <h2 class="ntb-h2 ntb-c">Uštedite <em>puno</em> na svakom putovanju</h2>
    <p class="ntb-lead ntb-c">Zašto plaćati dodatne naknade za prtljagu? S NORIKS TravelBag torbom preskočite red na šalteru za predaju prtljage i sačuvajte budžet za putovanje.</p>
    <div class="ntb-save">
      <?php foreach ( $ntb_save as $i => $sv ) : ?>
      <div class="ntb-save__item<?php echo 0 === $i ? ' ntb-save__item--us' : ''; ?>">
        <span class="ntb-save__num"><?php echo esc_html( $sv[0] ); ?></span>
        <span class="ntb-save__lbl"><?php echo esc_html( $sv[1] ); ?></span>
        <span class="ntb-save__sub"><?php echo esc_html( $sv[2] ); ?></span>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- 3) ŠTO JE ČINI POSEBNOM (zavihki nakupne škatle: details / what's included / other details) -->
<section class="ntb-sec<?php echo $ntb_cls(); ?>">
  <div class="ntb-wrap">
    <div class="ntb-row2 ntb-row2--top">
      <div class="ntb-copy">
        <p class="ntb-kicker">Detalji</p>
        <h2 class="ntb-h2">Što je <em>čini posebnom</em></h2>
        <ul class="ntb-great">
          <?php foreach ( $ntb_great as $g ) : ?><li><span class="ntb-yes" aria-hidden="true">✓</span><?php echo esc_html( $g ); ?></li><?php endforeach; ?>
        </ul>
        <h3 class="ntb-h3">Uz svaku NORIKS TravelBag torbu dobivate</h3>
        <ul class="ntb-inbox">
          <?php foreach ( $ntb_inbox as $g ) : ?><li><?php echo esc_html( $g ); ?></li><?php endforeach; ?>
        </ul>
      </div>
      <div class="ntb-copy">
        <h3 class="ntb-h3">Ostali detalji</h3>
        <dl class="ntb-specs">
          <?php foreach ( $ntb_specs as $sp ) : ?>
          <div><dt><?php echo esc_html( $sp[0] ); ?>:</dt><dd><?php echo esc_html( $sp[1] ); ?></dd></div>
          <?php endforeach; ?>
        </dl>
        <p class="ntb-big">Dva modela: Classic s ravnim dnom ili Roller s odvojivom ručkom i kotačićima.</p>
      </div>
    </div>
  </div>
</section>

<!-- 4) 3 ZNAČAJKE KOJE BI UKLJUČILA SAMO ŽENA ("3 Features only women would think to include") -->
<section class="ntb-sec<?php echo $ntb_cls(); ?>">
  <div class="ntb-wrap">
    <p class="ntb-kicker ntb-c">3 značajke</p>
    <h2 class="ntb-h2 ntb-c">3 značajke koje bi uključila <em>samo žena (ozbiljno)</em></h2>
    <div class="ntb-cards">
      <?php foreach ( $ntb_three as $t ) : ?>
      <article class="ntb-icard">
        <div class="ntb-icard__img"><?php echo $ntb_img( $t[0], $t[4] ); ?></div>
        <div class="ntb-icard__body">
          <?php if ( $t[1] ) : ?><span class="ntb-tag"><?php echo esc_html( $t[1] ); ?></span><?php endif; ?>
          <h3><?php echo esc_html( $t[2] ); ?></h3>
          <p><?php echo esc_html( $t[3] ); ?></p>
        </div>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- 5) JOŠ SE MUČITE S PRETRPANIM TORBAMA? ("still struggling with overstuffed, awkward bags? let's talk.") -->
<section class="ntb-sec<?php echo $ntb_cls(); ?>">
  <div class="ntb-wrap">
    <p class="ntb-kicker ntb-c">Razgovarajmo</p>
    <h2 class="ntb-h2 ntb-c">Još se mučite s pretrpanim, <em>nezgrapnim torbama?</em></h2>
    <div class="ntb-pain">
      <?php foreach ( $ntb_pain as $p ) : ?>
      <div class="ntb-pain__item">
        <span class="ntb-no" aria-hidden="true">✕</span>
        <p><?php echo wp_kses( $p[0], array( 'strong' => array() ) ); ?> <span><?php echo wp_kses( $p[1], array( 'strong' => array() ) ); ?></span></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- 6) PAMETNO PAKIRANJE ("a whole new meaning to smart packing—space, style, and wrinkle-free") — utišan video ob besedilu -->
<section class="ntb-sec<?php echo $ntb_cls(); ?>">
  <div class="ntb-wrap">
    <div class="ntb-row2">
      <div class="ntb-media ntb-media--video"><?php echo $ntb_video( 'ntb-s3-kotacici-hr.mp4', 'Kako se pričvršćuju i skidaju kotačići torbe NORIKS TravelBag' ); ?></div>
      <div class="ntb-copy">
        <p class="ntb-kicker">Pametno pakiranje</p>
        <h2 class="ntb-h2">Potpuno novo značenje pametnog pakiranja – <em>prostor, stil i bez gužvanja</em></h2>
        <p>Pakiranje za putovanje ne mora značiti odricanje od stila ili ostavljanje važnih stvari kod kuće. <strong>NORIKS TravelBag</strong> daje potpuno novo značenje laganom putovanju – ponesite sve što volite, bez glomaznosti.</p>
        <ul class="ntb-feats">
          <?php foreach ( $ntb_smart as $f ) : ?><li><strong><?php echo esc_html( $f[0] ); ?></strong><span><?php echo esc_html( $f[1] ); ?></span></li><?php endforeach; ?>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- 7) PRIČVRSTITE KOTAČIĆE ("snap them on, roll smoothly, and say goodbye to heavy lifting.") — 2 sliki ob besedilu -->
<section class="ntb-sec<?php echo $ntb_cls(); ?>">
  <div class="ntb-wrap">
    <div class="ntb-row2 ntb-row2--rev">
      <div class="ntb-media ntb-duo">
        <?php echo $ntb_img( 'ntb-s7-rucka.webp', 'Teleskopska ručka s kotačićima torbe NORIKS TravelBag' ); ?>
        <?php echo $ntb_img( 'ntb-s7-kotacici.webp', 'Kotačići se pričvršćuju na dno torbe NORIKS TravelBag' ); ?>
      </div>
      <div class="ntb-copy">
        <p class="ntb-kicker">Model Roller</p>
        <h2 class="ntb-h2">Pričvrstite ih, vozite glatko i <em>zaboravite na teško podizanje</em></h2>
        <p>Bez nezgrapnog podizanja i žongliranja teškim torbama. Pričvrstite kotačiće, klizite kroz zračnu luku kao da ništa nije, a kad završite, samo ih skinite i spremite unutra. Tako je jednostavno – <strong>bez alata, bez stresa, samo glatko putovanje</strong>.</p>
        <div class="ntb-feat"><h3>Teleskopska ručka</h3><p>Glatka vožnja, podešena na vašu idealnu visinu.</p></div>
        <div class="ntb-feat"><h3>Glatki kotačići</h3><p>Kotačići koji se pričvršćuju za lako kotrljanje.</p></div>
      </div>
    </div>
  </div>
</section>

<!-- 8) OTPORNA, IZDRŽLJIVA, EKOLOŠKA ("weather-ready / built for the long haul / eco-friendly & high-quality") — 3 kartice -->
<section class="ntb-sec<?php echo $ntb_cls(); ?>">
  <div class="ntb-wrap">
    <p class="ntb-kicker ntb-c">Izrađena da traje</p>
    <h2 class="ntb-h2 ntb-c">Otporna, izdržljiva i <em>ekološka</em></h2>
    <div class="ntb-cards">
      <?php foreach ( $ntb_built as $b ) : ?>
      <article class="ntb-icard">
        <div class="ntb-icard__img ntb-icard__img--sq"><?php echo $ntb_img( $b[0], $b[3], '', $b[4] ); ?></div>
        <div class="ntb-icard__body">
          <h3><?php echo esc_html( $b[1] ); ?></h3>
          <p><?php echo esc_html( $b[2] ); ?></p>
        </div>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- 9) RUČNA PRTLJAGA ("carry-on approved—skip the check-in line") — besedilo ob kalkulatorju -->
<section class="ntb-sec<?php echo $ntb_cls(); ?>">
  <div class="ntb-wrap">
    <div class="ntb-row2">
      <div class="ntb-copy">
        <p class="ntb-kicker">Ručna prtljaga</p>
        <h2 class="ntb-h2">Ručna prtljaga – <em>preskočite red na šalteru</em></h2>
        <p>Osmišljena prema pravilima za ručnu prtljagu velikih zrakoplovnih kompanija, NORIKS TravelBag omogućuje vam da prođete kroz zračnu luku bez čekanja prtljage. Spakirajte sve što vam treba i držite to u pretincu iznad sjedala, na dohvat ruke – <strong>bez kompromisa i bez dodatnih naknada</strong>.</p>
        <p class="ntb-note">Pravila za ručnu prtljagu razlikuju se od kompanije do kompanije – prije leta provjerite dopuštene dimenzije za svoju kartu.</p>
      </div>
      <div class="ntb-media">
        <div class="ntb-calc" role="table" aria-label="Usporedba troškova prtljage">
          <p class="ntb-calc__base">Na temelju 58 € naknade za predanu prtljagu po putovanju</p>
          <div class="ntb-calc__row ntb-calc__row--us" role="row">
            <span role="cell" class="ntb-calc__who">NORIKS</span>
            <span role="cell" class="ntb-calc__sum">0,00 €</span>
            <span role="cell" class="ntb-calc__txt">Preskočite čekanje prtljage, uštedite vrijeme</span>
          </div>
          <div class="ntb-calc__row" role="row">
            <span role="cell" class="ntb-calc__who">Ostali</span>
            <span role="cell" class="ntb-calc__sum">580 €+</span>
            <span role="cell" class="ntb-calc__txt">Dodatni troškovi, čekanje</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- 10) JEDNA OD NAJOMILJENIJIH PUTNIH TORBI ("rated as the #1 travel bag of 2025") — 5 fotografij ob besedilu -->
<section class="ntb-sec<?php echo $ntb_cls(); ?>">
  <div class="ntb-wrap">
    <div class="ntb-row2 ntb-row2--rev">
      <div class="ntb-photos">
        <?php foreach ( $ntb_photos as $ph ) : ?><div class="ntb-photos__item"><?php echo $ntb_img( $ph[0], $ph[1] ); ?></div><?php endforeach; ?>
      </div>
      <div class="ntb-copy">
        <p class="ntb-kicker"><?php echo $ntb_stars( 5 ); ?> Ocjena 4,8 / 5</p>
        <h2 class="ntb-h2">Jedna od najomiljenijih <em>putnih torbi</em></h2>
        <p>I lako je vidjeti zašto… Ocjena <strong>4,8 / 5 na temelju 1081 recenzije</strong>.</p>
        <p class="ntb-big">U zračnoj luci, na gradskim ulicama i na vikend putovanjima.</p>
      </div>
    </div>
  </div>
</section>

<!-- 11) USPOREDBA ("not just better superior in every way — US VS THEM") -->
<section class="ntb-sec<?php echo $ntb_cls(); ?>">
  <div class="ntb-wrap ntb-wrap--narrow">
    <p class="ntb-kicker ntb-c">Mi i oni</p>
    <h2 class="ntb-h2 ntb-c">Ne samo bolja – <em>bolja u svemu</em></h2>
    <div class="ntb-cmp" role="table" aria-label="Usporedba: NORIKS TravelBag i ostale torbe">
      <div class="ntb-cmp__row ntb-cmp__head" role="row">
        <span role="columnheader"></span>
        <span role="columnheader" class="ntb-cmp__us">NORIKS</span>
        <span role="columnheader">Ostale torbe</span>
      </div>
      <?php foreach ( $ntb_cmp as $r ) : ?>
      <div class="ntb-cmp__row" role="row">
        <span role="cell" class="ntb-cmp__lbl"><?php echo esc_html( $r ); ?></span>
        <span role="cell" class="ntb-cmp__us"><span class="ntb-yes" aria-label="da">✓</span></span>
        <span role="cell"><span class="ntb-no" aria-label="ne">✕</span></span>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- 12) TISUĆE ŽENA NE MOGU POGRIJEŠITI ("over 100,000+ women can't be wrong...") — 3 mnenja s fotografijami -->
<section class="ntb-sec<?php echo $ntb_cls(); ?>">
  <div class="ntb-wrap">
    <p class="ntb-kicker ntb-c"><?php echo $ntb_stars( 5 ); ?> Ocjena 4,8 / 5 na temelju 1081 recenzije</p>
    <h2 class="ntb-h2 ntb-c">Tisuće žena <em>ne mogu pogriješiti…</em></h2>
    <div class="ntb-reviews">
      <?php foreach ( $ntb_reviews as $r ) : ?>
      <article class="ntb-card">
        <div class="ntb-card__img"><?php echo $ntb_img( $r['img'], 'Fotografija kupca: ' . $r['ime'] ); ?></div>
        <div class="ntb-card__body">
          <?php echo $ntb_stars( 5 ); ?>
          <h3><?php echo esc_html( $r['naslov'] ); ?></h3>
          <p class="ntb-card__txt">„<?php echo esc_html( $r['tekst'] ); ?>”</p>
          <p class="ntb-card__name"><?php echo esc_html( $r['ime'] ); ?> <span class="ntb-ok">✓ Potvrđena kupnja</span></p>
        </div>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<style>
/* NORIKS stil (predloga why-seatcushion.php / why-hands.php): oznaka + naslov z ležečim poudarkom, slika ali video ob
   besedilu, izmenjujoča ozadja in strani. Paleta: topla rjava NORIKS #a9683f, besedilo #382929 (original), svetlo #f7f1eb. */
.ntb-sec { padding: 60px 0; font-family: 'Poppins', system-ui, -apple-system, 'Segoe UI', Roboto, Arial, sans-serif; color: #382929; background: #fff; }
.ntb-sec * { box-sizing: border-box; }
.ntb-tint { background: #f7f1eb; }
.ntb-wrap { width: 100%; max-width: 1200px; margin: 0 auto; padding: 0 24px; }
.ntb-wrap--narrow { max-width: 900px; }
.ntb-c { text-align: center; }
.ntb-sec h2, .ntb-sec h3 { font-family: inherit; text-transform: none; letter-spacing: 0; }
.ntb-kicker, .ntb-copy p.ntb-kicker { font-size: 12.5px; line-height: 1.4; font-weight: 700; letter-spacing: .14em; text-transform: uppercase; color: #a9683f; margin: 0 0 10px; }
.ntb-kicker .ntb-stars { letter-spacing: 1px; margin-right: 6px; }
.ntb-h2 { font-weight: 700; font-size: clamp(25px, 3.1vw, 36px); line-height: 1.2; margin: 0 0 18px; color: #382929; }
.ntb-h2 em { font-style: italic; color: #a9683f; }
.ntb-h3 { font-size: 17px; font-weight: 700; color: #382929; margin: 22px 0 10px; line-height: 1.35; }
.ntb-sec img { display: block; width: 100%; height: auto; }
.ntb-lead { max-width: 760px; margin: 0 auto 28px; font-size: 16.5px; line-height: 1.7; color: #5a4c4a; }

/* slika / video ob besedilu */
.ntb-row2 { display: grid; grid-template-columns: 1fr 1fr; gap: 56px; align-items: center; }
.ntb-row2--top { align-items: start; }
.ntb-row2--rev > :first-child { order: 2; }
.ntb-media > img { border-radius: 10px; box-shadow: 0 2px 4px rgba(56,41,41,.05), 0 14px 40px rgba(56,41,41,.10); max-width: 560px; margin: 0 auto; aspect-ratio: 1 / 1; object-fit: cover; background: #fff; }
.ntb-media--video video { display: block; width: 100%; max-width: 400px; margin: 0 auto; border-radius: 10px; aspect-ratio: 9 / 16; object-fit: cover; background: #382929; box-shadow: 0 2px 4px rgba(56,41,41,.05), 0 14px 40px rgba(56,41,41,.10); }
.ntb-copy p { font-size: 16px; line-height: 1.7; color: #5a4c4a; margin: 0 0 14px; }
.ntb-copy p strong { color: #382929; font-weight: 600; }
.ntb-sec p.ntb-big { font-size: 19px; font-weight: 700; color: #382929; line-height: 1.45; margin-top: 6px; }
.ntb-copy p.ntb-note { font-size: 13.5px; font-style: italic; color: #7a6c68; }

/* 1) videi */
.ntb-row2--vids { grid-template-columns: 1fr 1.7fr; }
.ntb-vlist { list-style: none; margin: 0 0 18px; padding: 0; }
.ntb-vlist li { position: relative; padding: 8px 0 8px 30px; border-top: 1px solid #ecdccd; font-size: 15.5px; font-weight: 600; color: #382929; margin: 0; }
.ntb-vlist li:first-child { border-top: 0; }
.ntb-vlist li::before { content: "▶"; position: absolute; left: 2px; top: 9px; width: 20px; height: 20px; border-radius: 50%; background: #a9683f; color: #fff; font-size: 8.5px; line-height: 20px; text-align: center; padding-left: 2px; }
.ntb-vids { display: grid; grid-template-columns: repeat(3, minmax(0, 1fr)); gap: 10px; }
.ntb-vids__item { margin: 0; border-radius: 10px; overflow: hidden; background: #382929; position: relative; box-shadow: 0 2px 10px rgba(56,41,41,.12); }
.ntb-vids__item video { display: block; width: 100%; aspect-ratio: 9 / 16; object-fit: cover; }
.ntb-vids__item figcaption { position: absolute; left: 0; right: 0; bottom: 0; padding: 22px 10px 9px; font-size: 12.5px; font-weight: 600; line-height: 1.3; color: #fff; background: linear-gradient(transparent, rgba(0,0,0,.65)); }

/* 2) ušteda */
.ntb-save { display: grid; grid-template-columns: repeat(3, minmax(0, 1fr)); gap: 16px; }
.ntb-save__item { background: #fff; border: 1px solid #ecdccd; border-radius: 10px; padding: 22px 16px; text-align: center; display: flex; flex-direction: column; gap: 4px; box-shadow: 0 2px 10px rgba(56,41,41,.05); }
.ntb-save__item--us { border: 2px solid #a9683f; background: #fbf6f1; }
.ntb-save__num { font-size: 36px; font-weight: 800; color: #a9683f; line-height: 1.1; }
.ntb-save__lbl { font-size: 15px; font-weight: 700; color: #382929; text-transform: uppercase; letter-spacing: .06em; }
.ntb-save__sub { font-size: 13.5px; color: #7a6c68; }

/* 3) detalji */
.ntb-great { list-style: none; margin: 0; padding: 0; display: grid; grid-template-columns: 1fr 1fr; gap: 10px 18px; }
.ntb-great li { display: grid; grid-template-columns: 28px 1fr; gap: 8px; align-items: start; font-size: 15px; line-height: 1.5; font-weight: 600; color: #382929; margin: 0; }
.ntb-inbox { list-style: none; margin: 0; padding: 0; }
.ntb-inbox li { position: relative; padding: 7px 0 7px 22px; font-size: 15px; line-height: 1.5; color: #5a4c4a; border-top: 1px solid #ecdccd; margin: 0; }
.ntb-inbox li:first-child { border-top: 0; }
.ntb-inbox li::before { content: ""; position: absolute; left: 4px; top: 15px; width: 8px; height: 8px; border-radius: 50%; background: #a9683f; }
.ntb-specs { margin: 0 0 18px; padding: 14px 18px; background: #fff; border: 1px solid #ecdccd; border-radius: 10px; }
.ntb-specs > div { display: grid; grid-template-columns: 170px 1fr; gap: 10px; padding: 8px 0; border-top: 1px solid #f2e6da; font-size: 15px; line-height: 1.55; }
.ntb-specs > div:first-child { border-top: 0; }
.ntb-specs dt { font-weight: 700; color: #382929; margin: 0; }
.ntb-specs dd { margin: 0; color: #5a4c4a; }

/* 4) + 8) kartice s slikami */
.ntb-cards { display: grid; grid-template-columns: repeat(3, minmax(0, 1fr)); gap: 20px; margin-top: 10px; }
.ntb-icard { background: #fff; border: 1px solid #ecdccd; border-radius: 10px; overflow: hidden; box-shadow: 0 2px 10px rgba(56,41,41,.05); display: flex; flex-direction: column; }
.ntb-icard__img img { aspect-ratio: 4 / 3; object-fit: cover; background: #fff; }
.ntb-icard__img--sq img { aspect-ratio: 1 / 1; }
.ntb-icard__body { padding: 18px; }
.ntb-icard h3 { font-size: 17.5px; font-weight: 700; color: #382929; margin: 0 0 8px; line-height: 1.35; }
.ntb-icard p { font-size: 15px; line-height: 1.65; color: #5a4c4a; margin: 0; }
.ntb-tag { display: inline-block; background: #a9683f; color: #fff; font-size: 11.5px; font-weight: 700; letter-spacing: .12em; text-transform: uppercase; border-radius: 999px; padding: 3px 10px; margin-bottom: 8px; }

/* 5) bolne točke */
.ntb-pain { display: grid; grid-template-columns: repeat(2, minmax(0, 1fr)); gap: 16px; max-width: 900px; margin: 10px auto 0; }
.ntb-pain__item { display: grid; grid-template-columns: 34px 1fr; gap: 12px; align-items: start; background: #fff; border: 1px solid #ecdccd; border-radius: 10px; padding: 18px; box-shadow: 0 2px 10px rgba(56,41,41,.05); }
.ntb-pain__item p { margin: 0; font-size: 16px; line-height: 1.6; color: #5a4c4a; }
.ntb-pain__item p strong { color: #382929; }
.ntb-pain__item p span { display: block; font-weight: 700; color: #382929; margin-top: 2px; }
.ntb-pain .ntb-no { width: 30px; height: 30px; line-height: 30px; font-size: 14px; }

/* 6) značilnosti */
.ntb-feats { list-style: none; margin: 6px 0 0; padding: 0; display: grid; grid-template-columns: 1fr 1fr; gap: 12px; }
.ntb-feats li { background: #fff; border: 1px solid #ecdccd; border-left: 3px solid #a9683f; border-radius: 8px; padding: 12px 14px; margin: 0; }
.ntb-feats li strong { display: block; font-size: 15.5px; color: #382929; margin-bottom: 3px; }
.ntb-feats li span { font-size: 14px; line-height: 1.5; color: #5a4c4a; }

/* 7) dve sliki */
.ntb-duo { display: grid; grid-template-columns: 1fr 1fr; gap: 12px; }
.ntb-duo img { border-radius: 10px; aspect-ratio: 1 / 1; object-fit: cover; background: #fff; box-shadow: 0 2px 4px rgba(56,41,41,.05), 0 14px 40px rgba(56,41,41,.10); }
.ntb-feat { border-left: 3px solid #a9683f; padding: 2px 0 2px 16px; margin: 16px 0 0; }
.ntb-feat h3 { font-size: 17px; font-weight: 700; color: #382929; margin: 0 0 4px; line-height: 1.35; }
.ntb-copy .ntb-feat p { font-size: 15px; line-height: 1.6; margin: 0; }

/* 9) kalkulator */
.ntb-calc { max-width: 520px; margin: 0 auto; background: #fff; border: 1px solid #ecdccd; border-radius: 12px; padding: 22px; box-shadow: 0 2px 4px rgba(56,41,41,.05), 0 14px 40px rgba(56,41,41,.10); }
.ntb-calc__base { font-size: 13.5px; color: #7a6c68; margin: 0 0 14px; text-align: center; }
.ntb-calc__row { display: grid; grid-template-columns: 90px 120px 1fr; gap: 12px; align-items: center; padding: 14px; border-radius: 10px; background: #f6efe8; margin-top: 10px; }
.ntb-calc__row--us { background: #a9683f; color: #fff; }
.ntb-calc__who { font-weight: 800; letter-spacing: .08em; text-transform: uppercase; font-size: 13.5px; }
.ntb-calc__sum { font-size: 26px; font-weight: 800; }
.ntb-calc__txt { font-size: 14px; line-height: 1.45; }
.ntb-calc__row:not(.ntb-calc__row--us) .ntb-calc__sum { color: #c0392b; }

/* 10) fotografije */
.ntb-photos { display: grid; grid-template-columns: repeat(6, minmax(0, 1fr)); gap: 10px; }
.ntb-photos__item { grid-column: span 2; border-radius: 10px; overflow: hidden; box-shadow: 0 2px 10px rgba(56,41,41,.10); }
.ntb-photos__item img { aspect-ratio: 2 / 3; object-fit: cover; }
.ntb-photos__item:nth-child(n+4) { grid-column: span 3; }
.ntb-photos__item:nth-child(n+4) img { aspect-ratio: 4 / 3; object-position: 50% 30%; }

/* 11) usporedba */
.ntb-cmp { margin: 8px auto 0; max-width: 680px; border-radius: 10px; overflow: hidden; border: 1px solid #ecdccd; background: #fff; }
.ntb-cmp__row { display: grid; grid-template-columns: 2fr 1fr 1fr; align-items: center; border-top: 1px solid #f2e6da; }
.ntb-cmp__row:first-child { border-top: 0; }
.ntb-cmp__row > span { padding: 14px 8px; text-align: center; font-size: 15px; color: #5a4c4a; }
.ntb-cmp__row > span.ntb-cmp__lbl { text-align: left; padding-left: 18px; font-weight: 600; color: #382929; }
.ntb-cmp__head > span { font-size: 12.5px; font-weight: 700; text-transform: uppercase; letter-spacing: .06em; color: #7a6c68; }
.ntb-cmp__row > span.ntb-cmp__us { background: #a9683f; color: #fff; }
.ntb-cmp__head > span.ntb-cmp__us { color: #fff; font-size: 14px; letter-spacing: .1em; }
.ntb-yes, .ntb-no { display: inline-block; width: 22px; height: 22px; border-radius: 50%; font-size: 12px; font-weight: 800; line-height: 22px; text-align: center; font-style: normal; }
.ntb-yes { background: #2f9e5f; color: #fff; }
.ntb-cmp__us .ntb-yes { background: #fff; color: #a9683f; }
.ntb-no { background: #f3d6d6; color: #c0392b; }

/* 12) mnenja */
.ntb-reviews { display: grid; grid-template-columns: repeat(3, minmax(0, 1fr)); gap: 18px; align-items: start; margin-top: 8px; }
.ntb-card { background: #fff; border: 1px solid #ecdccd; border-radius: 10px; overflow: hidden; display: flex; flex-direction: column; box-shadow: 0 2px 10px rgba(56,41,41,.05); }
.ntb-card__img img { aspect-ratio: 4 / 3; object-fit: cover; }
.ntb-card__body { padding: 16px; }
.ntb-card h3 { font-size: 16px; font-weight: 700; color: #382929; margin: 8px 0 6px; line-height: 1.35; }
.ntb-card__txt { font-size: 14.5px; line-height: 1.6; color: #4a3d3b; margin: 0 0 10px; font-style: italic; }
.ntb-card__name { font-size: 13.5px; font-weight: 600; color: #382929; margin: 0; }

/* ocjene */
.ntb-stars { color: #f2a516; letter-spacing: 1px; font-size: 15px; }
.ntb-stars__off { color: #e6d9cf; }
.ntb-ok { color: #2f9e5f; font-weight: 600; font-size: 12px; margin-left: 4px; font-style: normal; }

@media (max-width: 989px) {
  .ntb-row2 { gap: 32px; }
  .ntb-row2--vids { grid-template-columns: 1fr; }
  .ntb-cards { grid-template-columns: 1fr 1fr; }
  .ntb-reviews { grid-template-columns: 1fr 1fr; }
}
@media (max-width: 749px) {
  .ntb-sec { padding: 42px 0; }
  .ntb-wrap { padding: 0 16px; }
  .ntb-row2 { grid-template-columns: 1fr; gap: 24px; }
  .ntb-row2--rev > :first-child { order: 0; }
  .ntb-vids { grid-template-columns: repeat(2, minmax(0, 1fr)); }
  .ntb-save { grid-template-columns: 1fr; gap: 10px; }
  .ntb-great, .ntb-feats, .ntb-pain { grid-template-columns: 1fr; }
  .ntb-cards { grid-template-columns: 1fr; gap: 14px; }
  .ntb-specs > div { grid-template-columns: 1fr; gap: 2px; }
  .ntb-calc__row { grid-template-columns: 1fr 1fr; }
  .ntb-calc__txt { grid-column: 1 / -1; }
  .ntb-reviews { grid-template-columns: 1fr; }
}

/* galerija izdelka: sličice največ v 2 vrstah (5 na vrsto), ostale slike so dosegljive z drsenjem glavne slike */
.product_cat-orto-travelbag .flex-control-thumbs li:nth-child(n+11) { display: none !important; }

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
.woocommerce-product-details__short-description .ntb-tick {
  position: absolute !important; left: 0 !important; top: 1px !important;
  width: 21px; height: 21px; border-radius: 50%;
  background: #2f9e5f !important; color: #fff !important;
  font-size: 12px !important; font-weight: 800 !important; line-height: 21px !important;
  text-align: center !important; display: inline-block !important; }
.woocommerce-product-details__short-description p:first-of-type { font-size: 16px; line-height: 1.55; }
</style>
