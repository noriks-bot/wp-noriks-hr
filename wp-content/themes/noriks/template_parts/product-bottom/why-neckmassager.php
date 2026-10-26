<?php
/**
 * product-bottom: NORIKS NeckMassager — masažer za vrat i ramena (orto-neckmassager).
 * Original: noxamassager.com/products/noxa-neck-and-shoulder-massager-copy-1 — vsebina in vrstni red 1:1 z originalom,
 * oblika po NORIKS stilu (predloga why-groundingmat.php / why-hands.php), poudarek topla bež/taupe po barvi originala (#8a6d54).
 *   1) nakupna škatla: uvod + zavihek "How it works" + izjava Sarah B. -> Kako radi (slika s hrvaškimi oznakami ob besedilu;
 *      »This is proven to help« omiljeno)
 *   2) zavihek "Pressure and settings"                         -> Pritisak i postavke (slika »kako se koristi« ob besedilu)
 *   3) zavihek "Specifications" (+ "Returns & refunds")        -> Specifikacije (slika izdelka ob besedilu, NORIKS pogoji)
 *   4) "How it works" (4 stolpci s slikami)                     -> Kako djeluje, 4 kartice (kortizol/limfa omiljeno)
 *   5) "Real people, real love for Noxa" (4 videi kupcev)       -> 4 utišani videi s hrvaškimi napisi (angleški vžgani napisi
 *      v1/v2 prekriti z zamegljenim pasom, v1 skrajšan pred kadri s škatlo z logotipom, ime znamke izpuščeno)
 *   6) "Way more than any other massager"                       -> slika izdelka ob besedilu
 *   7) recenzije (639, 74/14/2/2/9 %)                            -> 4,4 / 1081 z razdelitvijo, skalirano na 692 + 5 mnenj originala
 * Izpuščeno: pasica WELLNESS SALE, »2 Free gifts« (delovni zvezek, meditacija), Sternify paketi z drugimi izdelki (krtača za
 * obraz, blazina), »As seen in« logotipi, Shipping and delivery (dostava/carine konkurenta), noga trgovine.
 * FAQ je v reviews.php ($neckmassager_faq), mnenja v auto_reviews/HR_neckmassager.php, opis + nega v meta.php.
 * Slike in videi: img/neckmassager/ (nnm-…).
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$nnm      = get_template_directory_uri() . '/img/neckmassager/';
$nnm_path = get_template_directory() . '/img/neckmassager/';
$nnm_img  = function( $file, $alt, $cls = '' ) use ( $nnm, $nnm_path ) {
  if ( ! $file || ! file_exists( $nnm_path . $file ) ) { return ''; }
  return '<img src="' . esc_url( $nnm . $file ) . '" alt="' . esc_attr( $alt ) . '" loading="eager"' . ( $cls ? ' class="' . esc_attr( $cls ) . '"' : '' ) . '>';
};
$nnm_video = function( $file, $label ) use ( $nnm, $nnm_path ) {
  if ( ! file_exists( $nnm_path . $file ) ) { return ''; }
  $poster = preg_replace( '/(-hr)?\.mp4$/', '.webp', $file );
  return '<video src="' . esc_url( $nnm . $file ) . '"' . ( file_exists( $nnm_path . $poster ) ? ' poster="' . esc_url( $nnm . $poster ) . '"' : '' )
    . ' muted autoplay loop playsinline preload="metadata" aria-label="' . esc_attr( $label ) . '"></video>';
};
$nnm_stars = function( $n ) {
  $n = max( 0, min( 5, (int) $n ) );
  return '<span class="nnm-stars" aria-label="' . $n . ' od 5 zvjezdica">' . str_repeat( '★', $n ) . '<span class="nnm-stars__off">' . str_repeat( '★', 5 - $n ) . '</span></span>';
};

/* 3) specifikacije (zavihek "Specifications") */
$nnm_specs = array(
  array( 'Dizajn', 'bežični' ),
  array( 'Intenzitet', 'nježno, umjereno, intenzivno' ),
  array( 'Toplina', 'blaga, topla' ),
  array( 'Način rada', 'u smjeru kazaljke na satu, suprotno od kazaljke na satu, masaža dubokog tkiva' ),
  array( 'U paketu', 'masažer i punjač' ),
  array( 'Certifikat', 'CE' ),
);

/* 4) kako djeluje (4 stolpci originala; trditve o kortizolu in limfi omiljene) */
$nnm_kartice = array(
  array( 'nnm-s4-kortizol.webp', 'Manje stresa',
         'Opuštajuća masaža pomaže smanjiti osjećaj stresa, što može pridonijeti boljoj koncentraciji, mirnijem snu i emocionalnoj ravnoteži.' ),
  array( 'nnm-s4-ramena.webp', 'Zbogom ukočenim ramenima',
         'Duboki pritisak i toplina opuštaju mišiće vrata i otpuštaju čvoriće i svu nakupljenu napetost.' ),
  array( 'nnm-s4-limfa.webp', 'Potaknite limfnu drenažu',
         'Masaža potiče limfne putove, pa nakupljena tekućina lakše odlazi iz područja vrata i lica – što može pridonijeti vitkijem izgledu lica.' ),
  array( 'nnm-s4-trenutak.webp', 'Trenutak samo za vas',
         'Ponekad nam treba samo trenutak da se opustimo i ponovno povežemo sa sobom. NORIKS NeckMassager pruža vam taj osjećaj udobnosti i mira.' ),
);

/* 5) videi kupcev (utišani, hrvaški napisi) */
$nnm_videi = array(
  array( 'nnm-v1-hr.mp4', 'Kupka pokazuje masažer za vrat i remene za potporu' ),
  array( 'nnm-v2-hr.mp4', 'Kupka: masažer je topao, ima podesiv pritisak i oponaša prave ruke' ),
  array( 'nnm-v3-hr.mp4', 'Kupka o napetosti u vratu i limfnim čvorovima' ),
  array( 'nnm-v4-hr.mp4', 'Kupka koristi masažer bez ruku dok radi u uredu' ),
);

/* 7) recenzije — 5 mnenj originala (imena lokalizirana) */
$nnm_reviews = array(
  array( 'ime' => 'Ema K.', 'naslov' => 'Baš ono što mi je trebalo', 'tekst' => 'Ramena su mi nakon posla jako napeta. Ovo je predivan osjećaj!' ),
  array( 'ime' => 'Renata B.', 'naslov' => 'Jako opuštajuće', 'tekst' => 'Na ramenima je osjećaj predivan. Žao mi je što ga nisam kupila ranije!' ),
  array( 'ime' => 'Marija E.', 'naslov' => 'Jednostavno divan', 'tekst' => 'Jednostavno divan! Obožavam ga – masaža KOD KUĆE!' ),
  array( 'ime' => 'Jelena S.', 'naslov' => 'Stvarno snažni valjci', 'tekst' => 'Stvarno snažni valjci koji su odlični na leđima. Dijelovi za vrat su mi malo široki (imajte to na umu ako imate jako tanak vrat), ali i dalje mi se itekako isplati. Posebno je savršen za čvoriće u ramenima.' ),
  array( 'ime' => 'Anđela M.', 'naslov' => 'Odličan proizvod', 'tekst' => 'Odličan proizvod.' ),
);
/* razdelitev ocen originala 470 / 89 / 12 / 13 / 55 (od 639) skalirana na 692 recenzij (NORIKS) */
$nnm_dist = array( 5 => 509, 4 => 96, 3 => 13, 2 => 14, 1 => 60 );

$nnm_n = 0; // števec sekcij za izmenična ozadja
$nnm_cls = function() use ( &$nnm_n ) { $nnm_n++; return ( $nnm_n % 2 ) ? ' nnm-tint' : ''; };
?>

<!-- 1) KAKO RADI (uvod + zavihek nakupne škatle "How it works" + izjava kupke) — slika s hrvaškimi oznakami ob besedilu -->
<section class="nnm-sec<?php echo $nnm_cls(); ?>">
  <div class="nnm-wrap">
    <div class="nnm-row2 nnm-row2--top">
      <div class="nnm-media"><?php echo $nnm_img( 'nnm-s1-kako-radi-hr.webp', 'Masažni čvorovi NORIKS NeckMassagera s infracrvenim grijanjem i podesivim pritiskom' ); ?></div>
      <div class="nnm-copy">
        <p class="nnm-kicker">Kako radi</p>
        <h2 class="nnm-h2">Ritmični valjci koji oponašaju <em>prave ruke</em></h2>
        <p>NORIKS NeckMassager ritmičnim valjcima oponaša pravu profesionalnu masažu rukama. Prilagođava se vratu, ramenima, leđima i drugim dijelovima tijela – za ugodnu masažu cijelog tijela kod kuće ili na putu.</p>
        <p>Masažer kombinira <strong>duboku gnječeću masažu</strong> i umirujuću toplinu, koje potiču cirkulaciju, opuštaju napete mišiće i potiču limfnu drenažu oko vrata i ramena.</p>
        <p>Tako se tijelo lakše opusti, a nakupljeni stres popušta – osjećate se lakše, i tjelesno i psihički.</p>
        <p>Koristite ga ondje gdje vam najviše treba: na <strong>vratu, ramenima, donjem dijelu leđa, bedrima</strong> … Svestrani dizajn opušta napetost mišića posvuda.</p>
        <blockquote class="nnm-quote">„Masažer je vrijedan svakog centa – nikad u životu nisam bila tako mirna i opuštena.” <span>– Sara B.</span></blockquote>
        <p class="nnm-big">Topla masaža za trenutačno olakšanje nakon dugog, napornog dana.</p>
      </div>
    </div>
  </div>
</section>

<!-- 2) PRITISAK I POSTAVKE (zavihek "Pressure and settings") — slika ob besedilu -->
<section class="nnm-sec<?php echo $nnm_cls(); ?>">
  <div class="nnm-wrap">
    <div class="nnm-row2 nnm-row2--rev">
      <div class="nnm-media"><?php echo $nnm_img( 'nnm-s2-postavke-hr.webp', 'Kako se koristi NORIKS NeckMassager: postavite, podesite pritisak i grijanje, opustite se' ); ?></div>
      <div class="nnm-copy">
        <p class="nnm-kicker">Pritisak i postavke</p>
        <h2 class="nnm-h2">Intenzitet koji vam <em>najviše odgovara</em></h2>
        <p>Zahvaljujući jedinstvenom dizajnu NORIKS NeckMassagera <strong>intenzitet možete prilagoditi</strong> onome što vam je najugodnije.</p>
        <p>Uz isprobane postavke masaža je dovoljno duboka da otpusti napetost, a pritom ostaje umirujuća i ugodna za tijelo.</p>
        <p>Birate između <strong>3 razine pritiska</strong>, smjera okretanja masažnih čvorova i <strong>infracrvenog grijanja</strong>. Remenima dodatno podešavate idealan pritisak za svaki dio tijela.</p>
        <p class="nnm-big">Vi birate koliko duboko – i koliko toplo.</p>
      </div>
    </div>
  </div>
</section>

<!-- 3) SPECIFIKACIJE (zavihek "Specifications"; vračilo po NORIKS pogojih) — slika izdelka ob besedilu -->
<section class="nnm-sec<?php echo $nnm_cls(); ?>">
  <div class="nnm-wrap">
    <div class="nnm-row2">
      <div class="nnm-media"><?php echo $nnm_img( 'nnm-s3-specifikacije-hr.webp', 'NORIKS NeckMassager – bežični masažer za vrat i ramena' ); ?></div>
      <div class="nnm-copy">
        <p class="nnm-kicker">Specifikacije</p>
        <h2 class="nnm-h2">Bežični dizajn, <em>tri načina masaže</em></h2>
        <dl class="nnm-specs">
          <?php foreach ( $nnm_specs as $sp ) : ?>
          <div><dt><?php echo esc_html( $sp[0] ); ?>:</dt><dd><?php echo esc_html( $sp[1] ); ?></dd></div>
          <?php endforeach; ?>
        </dl>
        <p class="nnm-big">Pravo na povrat u roku od 30 dana i besplatna dostava za narudžbe iznad 70 €.</p>
      </div>
    </div>
  </div>
</section>

<!-- 4) KAKO DJELUJE ("How it works", 4 stolpci s slikami) — 4 kartice -->
<section class="nnm-sec<?php echo $nnm_cls(); ?>">
  <div class="nnm-wrap">
    <p class="nnm-kicker nnm-c">Kako djeluje</p>
    <h2 class="nnm-h2 nnm-c">Što NORIKS NeckMassager <em>čini za vas</em></h2>
    <div class="nnm-cards">
      <?php foreach ( $nnm_kartice as $k ) : ?>
      <article class="nnm-cardx">
        <div class="nnm-cardx__img"><?php echo $nnm_img( $k[0], $k[1] ); ?></div>
        <div class="nnm-cardx__body">
          <h3><?php echo esc_html( $k[1] ); ?></h3>
          <p><?php echo esc_html( $k[2] ); ?></p>
        </div>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- 5) STVARNI LJUDI ("Real people, real love for Noxa") — besedilo + 4 utišani videi kupcev s hrvaškimi napisi -->
<section class="nnm-sec<?php echo $nnm_cls(); ?>">
  <div class="nnm-wrap">
    <p class="nnm-kicker nnm-c">Iskustva kupaca</p>
    <h2 class="nnm-h2 nnm-c">Stvarni ljudi, <em>stvarna ljubav</em></h2>
    <p class="nnm-lead nnm-c">Tisuće kupaca diljem svijeta već je zaljubljeno u naš masažer.</p>
    <div class="nnm-videos">
      <?php foreach ( $nnm_videi as $v ) : ?>
      <div class="nnm-vid"><?php echo $nnm_video( $v[0], $v[1] ); ?></div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- 6) PUNO VIŠE OD BILO KOJEG MASAŽERA ("Way more than any other massager") — slika ob besedilu -->
<section class="nnm-sec<?php echo $nnm_cls(); ?>">
  <div class="nnm-wrap">
    <div class="nnm-row2 nnm-row2--rev">
      <div class="nnm-media"><?php echo $nnm_img( 'nnm-s6-vise-od-masazera.webp', 'NORIKS NeckMassager s 4 masažna čvora na krevetu' ); ?></div>
      <div class="nnm-copy">
        <p class="nnm-kicker">Zašto NORIKS</p>
        <h2 class="nnm-h2">Puno više od <em>bilo kojeg drugog masažera</em></h2>
        <p>Smetali su nam drugi masažeri na tržištu. Većina je samo vibrirala, morala je stalno biti uključena u struju i nikad nije donosila pravo olakšanje.</p>
        <p>Zato je NORIKS NeckMassager drukčiji: ima <strong>4 duboka valjkasta čvora</strong> koji stvarno opuštaju napete mišiće vrata i čvoriće – a pritom je <strong>potpuno bežičan</strong>.</p>
        <p class="nnm-big">Bez kabela. Bez vibriranja. Pravo olakšanje.</p>
      </div>
    </div>
  </div>
</section>

<!-- 7) RECENZIJE KUPACA — 1081 po NORIKS + 5 mnenj originala -->
<section class="nnm-sec<?php echo $nnm_cls(); ?>">
  <div class="nnm-wrap">
    <p class="nnm-kicker nnm-c">Recenzije kupaca</p>
    <h2 class="nnm-h2 nnm-c">Što kažu oni <em>koji su se opustili</em></h2>
    <div class="nnm-score">
      <div class="nnm-score__left">
        <span class="nnm-score__num">4,4</span>
        <?php echo $nnm_stars( 4 ); ?>
        <span class="nnm-score__txt">Na temelju 1081 recenzije</span>
      </div>
      <div class="nnm-dist">
        <?php foreach ( $nnm_dist as $z => $c ) : ?>
        <div class="nnm-dist__row"><span><?php echo (int) $z; ?> ★</span><span class="nnm-dist__bar"><i style="width:<?php echo round( $c / 692 * 100, 1 ); ?>%"></i></span><span><?php echo (int) $c; ?></span></div>
        <?php endforeach; ?>
      </div>
    </div>
    <div class="nnm-reviews">
      <?php foreach ( $nnm_reviews as $r ) : ?>
      <article class="nnm-card">
        <div class="nnm-card__body">
          <div class="nnm-card__head"><span class="nnm-avatar"><?php echo esc_html( function_exists( 'mb_substr' ) ? mb_substr( $r['ime'], 0, 1 ) : substr( $r['ime'], 0, 1 ) ); ?></span><?php echo $nnm_stars( 5 ); ?></div>
          <h3><?php echo esc_html( $r['naslov'] ); ?></h3>
          <p class="nnm-card__txt">„<?php echo esc_html( $r['tekst'] ); ?>”</p>
          <p class="nnm-card__name"><?php echo esc_html( $r['ime'] ); ?> <span class="nnm-ok">✓ Potvrđena kupnja</span></p>
        </div>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<style>
/* NORIKS stil (predloga why-groundingmat.php / why-hands.php): oznaka + naslov z ležečim poudarkom, slika ali video ob
   besedilu, izmenjujoča ozadja in strani. Paleta po originalu (topla bež / taupe): poudarek #8a6d54, temno #2e241c, svetlo #f6efe7. */
.nnm-sec { padding: 60px 0; font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Arial, sans-serif; color: #2e241c; background: #fff; }
.nnm-sec * { box-sizing: border-box; }
.nnm-tint { background: #f6efe7; }
.nnm-wrap { width: 100%; max-width: 1200px; margin: 0 auto; padding: 0 24px; }
.nnm-c { text-align: center; }
.nnm-sec h2, .nnm-sec h3 { font-family: inherit; text-transform: none; letter-spacing: 0; }
.nnm-kicker, .nnm-copy p.nnm-kicker { font-size: 12.5px; line-height: 1.4; font-weight: 800; letter-spacing: .14em; text-transform: uppercase; color: #8a6d54; margin: 0 0 10px; }
.nnm-h2 { font-weight: 800; font-size: clamp(25px, 3.1vw, 36px); line-height: 1.2; margin: 0 0 18px; color: #2e241c; }
.nnm-h2 em { font-style: italic; color: #8a6d54; }
.nnm-sec img { display: block; width: 100%; height: auto; }
.nnm-sec p.nnm-lead { font-size: 17px; line-height: 1.6; color: #5a4c40; margin: -6px auto 26px; max-width: 640px; }

/* slika ob besedilu */
.nnm-row2 { display: grid; grid-template-columns: 1fr 1fr; gap: 56px; align-items: center; }
.nnm-row2--top { align-items: start; }
.nnm-row2--rev > :first-child { order: 2; }
.nnm-media > img { border-radius: 10px; box-shadow: 0 2px 4px rgba(60,40,20,.05), 0 14px 40px rgba(60,40,20,.10); max-width: 560px; margin: 0 auto; aspect-ratio: 1 / 1; object-fit: cover; background: #fff; }
.nnm-copy p { font-size: 16px; line-height: 1.7; color: #5a4c40; margin: 0 0 14px; }
.nnm-copy p strong { color: #2e241c; font-weight: 700; }
.nnm-sec p.nnm-big { font-size: 19px; font-weight: 800; color: #2e241c; line-height: 1.45; margin-top: 6px; }
.nnm-quote { margin: 6px 0 18px; padding: 14px 18px; background: #fff; border-left: 3px solid #8a6d54; border-radius: 0 10px 10px 0; font-size: 15.5px; line-height: 1.6; font-style: italic; color: #2e241c; box-shadow: 0 2px 10px rgba(60,40,20,.05); }
.nnm-quote span { display: block; margin-top: 4px; font-style: normal; font-weight: 700; font-size: 14px; color: #8a6d54; }

/* specifikacije */
.nnm-specs { margin: 0 0 18px; padding: 14px 18px; background: #fff; border: 1px solid #e6d6c6; border-radius: 10px; }
.nnm-specs > div { display: grid; grid-template-columns: 120px 1fr; gap: 10px; padding: 8px 0; border-top: 1px solid #f0e5da; font-size: 15px; line-height: 1.55; }
.nnm-specs > div:first-child { border-top: 0; }
.nnm-specs dt { font-weight: 700; color: #2e241c; margin: 0; }
.nnm-specs dd { margin: 0; color: #5a4c40; }

/* 4) kartice */
.nnm-cards { display: grid; grid-template-columns: repeat(4, minmax(0, 1fr)); gap: 18px; margin-top: 10px; }
.nnm-cardx { background: #fff; border: 1px solid #e6d6c6; border-radius: 10px; overflow: hidden; box-shadow: 0 2px 10px rgba(60,40,20,.05); display: flex; flex-direction: column; }
.nnm-cardx__img img { aspect-ratio: 1 / 1; object-fit: cover; }
.nnm-cardx__body { padding: 16px 18px 18px; }
.nnm-cardx h3 { font-size: 17px; font-weight: 800; color: #2e241c; margin: 0 0 8px; line-height: 1.35; }
.nnm-cardx p { font-size: 15px; line-height: 1.6; color: #5a4c40; margin: 0; }

/* 5) videi */
.nnm-videos { display: grid; grid-template-columns: repeat(4, minmax(0, 1fr)); gap: 16px; }
.nnm-vid video { display: block; width: 100%; aspect-ratio: 9 / 16; object-fit: cover; border-radius: 10px; background: #2e241c; box-shadow: 0 2px 4px rgba(60,40,20,.05), 0 10px 28px rgba(60,40,20,.10); }

/* 7) recenzije */
.nnm-score { display: grid; grid-template-columns: 220px minmax(0, 420px); gap: 28px; justify-content: center; align-items: center; margin: 6px auto 30px; }
.nnm-score__left { display: flex; flex-direction: column; align-items: center; gap: 4px; }
.nnm-score__num { font-size: 52px; font-weight: 800; line-height: 1; color: #2e241c; }
.nnm-score__left .nnm-stars { font-size: 20px; }
.nnm-score__txt { font-size: 14px; color: #7a6a5e; }
.nnm-dist__row { display: grid; grid-template-columns: 38px 1fr 40px; gap: 10px; align-items: center; font-size: 14px; color: #5a4c40; margin: 5px 0; }
.nnm-dist__bar { height: 9px; border-radius: 999px; background: #eadfd3; overflow: hidden; }
.nnm-dist__bar i { display: block; height: 100%; background: #8a6d54; border-radius: 999px; }
.nnm-reviews { display: grid; grid-template-columns: repeat(5, minmax(0, 1fr)); gap: 16px; align-items: start; }
.nnm-card { background: #fff; border: 1px solid #e6d6c6; border-radius: 10px; overflow: hidden; display: flex; flex-direction: column; box-shadow: 0 2px 10px rgba(60,40,20,.05); }
.nnm-card__body { padding: 16px; }
.nnm-card__head { display: flex; align-items: center; gap: 10px; }
.nnm-avatar { width: 34px; height: 34px; border-radius: 50%; background: #eadfd3; color: #8a6d54; font-weight: 800; display: inline-flex; align-items: center; justify-content: center; font-size: 15px; }
.nnm-card h3 { font-size: 16px; font-weight: 800; line-height: 1.35; color: #2e241c; margin: 10px 0 6px; }
.nnm-card__txt { font-size: 14.5px; line-height: 1.6; color: #4a3e34; margin: 0 0 10px; font-style: italic; }
.nnm-card__name { font-size: 13.5px; font-weight: 700; color: #2e241c; margin: 0; }

/* ocjene */
.nnm-stars { color: #f2a516; letter-spacing: 1px; font-size: 15px; }
.nnm-stars__off { color: #e3d8cc; }
.nnm-ok { color: #2f9e5f; font-weight: 600; font-size: 12px; margin-left: 4px; font-style: normal; }

@media (max-width: 989px) {
  .nnm-row2 { gap: 32px; }
  .nnm-cards { grid-template-columns: repeat(2, minmax(0, 1fr)); }
  .nnm-reviews { grid-template-columns: repeat(3, minmax(0, 1fr)); }
}
@media (max-width: 749px) {
  .nnm-sec { padding: 42px 0; }
  .nnm-wrap { padding: 0 16px; }
  .nnm-row2 { grid-template-columns: 1fr; gap: 24px; }
  .nnm-row2--rev > :first-child { order: 0; }
  .nnm-specs > div { grid-template-columns: 1fr; gap: 2px; }
  .nnm-cards { gap: 12px; }
  .nnm-videos { grid-template-columns: 1fr 1fr; gap: 10px; }
  .nnm-score { grid-template-columns: 1fr; gap: 14px; }
  .nnm-reviews { grid-template-columns: 1fr 1fr; gap: 12px; }
  .nnm-card__body { padding: 12px; }
}
@media (max-width: 480px) {
  .nnm-cards { grid-template-columns: 1fr; }
  .nnm-reviews { grid-template-columns: 1fr; }
}

/* galerija izdelka: sličice največ v 2 vrstah (5 na vrsto), ostale slike so dosegljive z drsenjem glavne slike */
.product_cat-orto-neckmassager .flex-control-thumbs li:nth-child(n+11) { display: none !important; }

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
.woocommerce-product-details__short-description .nnm-tick {
  position: absolute !important; left: 0 !important; top: 1px !important;
  width: 21px; height: 21px; border-radius: 50%;
  background: #2f9e5f !important; color: #fff !important;
  font-size: 12px !important; font-weight: 800 !important; line-height: 21px !important;
  text-align: center !important; display: inline-block !important; }
.woocommerce-product-details__short-description p:first-of-type { font-size: 16px; line-height: 1.55; }
</style>
