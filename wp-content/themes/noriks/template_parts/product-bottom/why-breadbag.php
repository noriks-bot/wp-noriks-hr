<?php
/**
 * product-bottom: NORIKS BreadBag — vrećica za kruh od pamuka i pčelinjeg voska (orto-breadbag).
 * Original: brot-meister.com/products/premium-brotbeutel-aus-100-baumwolle-und-bienenwachs (Brot Meister, DE/AT, EUR) —
 * stran produkta 100 % preusmeri na novo stran lp.brot-meister.com (split.js, SHARE_NEW = 1), zato je vsebina 1:1 po tej strani.
 * Prevod iz nemščine, oblika po NORIKS stilu (predloga why-travelkit.php / why-hands.php), poudarek topla rjava po originalu (#a9683f).
 * Lasten tip breadbag (predpona nbb-, img/breadbag/). Logotip BROT MEISTER odstranjen z vseh vrečk (slike in galerija).
 *   1) "Beschreibung" (+ razširjen opis: anketa, Ein Geheimnis…, Warum Plastik und Leinen…)  -> Opis, slika ob besedilu
 *   2) "Wer dahinter steht – Sorgenfrei & sicher einkaufen" (Mittwoch-Test)                   -> Bezbrižna kupnja, slika ob besedilu
 *      (družinsko podjetje iz Avstrije, Hans in Marie, 34.000 kupcev -> izpuščeno / tisuće; 30 dni -> NORIKS pogoji)
 *   3) "Anwendung – So einfach bleibt dein Brot frisch" (4 koraki s slikami)                  -> Primjena, 4 slike ob besedilu
 *   4) "Vorteile – Deine Vorteile" (5 prednosti + slika Plastik / Leinen / Brot Meister)      -> Prednosti, slika z oznakami ob besedilu
 *   5) "Material – Von Hand gewachst. Gemacht für Jahre." (100 % / 33 × 43 / 0 %)             -> Materijal, slika ob besedilu
 *   6) "Details – Alle Details auf einen Blick." (tabela; Marke -> NORIKS)                    -> Detalji, slika ob tabeli
 *   7) "Bewertungen – Echte Meinungen unserer Kund:innen" (4,8 / 978 + 6 mnenj)               -> Recenzije 4,8 / 1081 (deleži), 6 prevedenih mnenj
 *   8) zaključni poziv "Dein Brot ist gut. Es braucht nur die richtige Hülle."                -> slika kompleta ob besedilu + gumb do ponudb
 * Izpuščeno: pasica »Herbst-Angebot endet bald!«, darila (E-Book, Brotschleuder, Brotschneider, Bienenwachstuch), dodatki (Bienenwachstuch-Set,
 * Sauerteig-Starterset), »Gratis-Versand ab 4 Beuteln«, »Nur noch wenige auf Lager«, kontakt »Wir sind nur eine Nachricht entfernt« (podpora in
 * e-pošta konkurenta), podpis »Hans & Marie Meister«, »Familienbetrieb aus Österreich«.
 * FAQ (8) je v reviews.php ($breadbag_faq), mnenja v auto_reviews/HR_breadbag.php, opis + nega v meta.php.
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$nbb      = get_template_directory_uri() . '/img/breadbag/';
$nbb_path = get_template_directory() . '/img/breadbag/';
$nbb_img  = function( $file, $alt, $cls = '' ) use ( $nbb, $nbb_path ) {
  if ( ! $file || ! file_exists( $nbb_path . $file ) ) { return ''; }
  return '<img src="' . esc_url( $nbb . $file ) . '" alt="' . esc_attr( $alt ) . '" loading="eager"' . ( $cls ? ' class="' . esc_attr( $cls ) . '"' : '' ) . '>';
};
$nbb_stars = function( $n ) {
  $n = max( 0, min( 5, (int) $n ) );
  return '<span class="nbb-stars" aria-label="' . $n . ' od 5 zvjezdica">' . str_repeat( '★', $n ) . '<span class="nbb-stars__off">' . str_repeat( '★', 5 - $n ) . '</span></span>';
};

/* cena za zaključni poziv (iz izdelka, da se ujema s ponudbami) */
$nbb_eur  = function( $v ) { return number_format( (float) $v, 2, ',', '.' ) . ' €'; };
$nbb_prod = function_exists( 'wc_get_product' ) ? wc_get_product( get_the_ID() ) : null;
$nbb_sale = $nbb_prod ? $nbb_prod->get_sale_price() : '';
$nbb_reg  = $nbb_prod ? $nbb_prod->get_regular_price() : '';
if ( '' === $nbb_sale && $nbb_prod ) { $nbb_sale = $nbb_prod->get_price(); }

/* 3) "Anwendung" — 4 koraki */
$nbb_koraci = array(
  array( 'nbb-s3-korak-1.webp', 'Ostavite da se ohladi', 'Svježe pečen kruh hladi se na rešetki pokraj vrećice' ),
  array( 'nbb-s3-korak-2.webp', 'Stavite u vrećicu', 'Kruh se stavlja u vrećicu za kruh' ),
  array( 'nbb-s3-korak-3.webp', 'Zarolajte i zakopčajte', 'Gornji rub vrećice zarola se i zakopča kopčama' ),
  array( 'nbb-s3-korak-4.webp', 'Na radnu ploču', 'Zatvorena vrećica s kruhom stoji na kuhinjskoj radnoj ploči' ),
);

/* 4) "Deine Vorteile" */
$nbb_prednosti = array(
  array( 'Do 3× dulje svjež', 'Plastika zadržava vlagu, lan isušuje. Pčelinji vosak diše taman koliko treba: korica ostaje hrskava, a sredina danima mekana.' ),
  array( 'Prirodna zaštita od plijesni', 'Pčelinji vosak usporava razvoj bakterija i gljivica. Bez konzervansa, bez kemikalija, bez plastike.' ),
  array( 'Manje kruha u smeću', 'Kruh pojedete umjesto da ga bacite ili date pticama. Tako uštedite na svakoj pogači.' ),
  array( '100 % pravi pčelinji vosak', 'Mnoge jeftine vrećice sadrže primjesu plastike. Mi koristimo samo čisti pčelinji vosak na pamuku. Fina struktura u tkanini to dokazuje.' ),
  array( 'Poklon koji ljubitelji kruha vole', 'Za ljubitelje kiselog tijesta, hobi pekare i sve koji cijene dobar kruh.' ),
);

/* 5) "Material" — brojke */
$nbb_brojke = array(
  array( '100 %', 'pamuk' ),
  array( '33 × 43', 'cm veličina' ),
  array( '0 %', 'plastike' ),
);

/* 6) "Alle Details auf einen Blick" (Marke -> NORIKS) */
$nbb_detalji = array(
  array( 'Materijal', 'Pamuk s pravim pčelinjim voskom' ),
  array( 'Veličina', '33 × 43 cm' ),
  array( 'Zatvaranje', 'Rolanjem, s kopčama na obje strane' ),
  array( 'Prikladno za', 'Kruh, kruh od kiselog tijesta, baguette, pecivo' ),
  array( 'Njega', 'Obrišite vlažnom krpom, osušite na zraku' ),
  array( 'Molimo ne', 'Perilica rublja, perilica posuđa, vruća voda' ),
  array( 'Marka', 'NORIKS' ),
);

/* 7) "Bewertungen" — 4,8 / 978 -> 1081; razdelitev 845 / 95 / 22 / 9 / 7 kot deleži */
$nbb_razdioba = array( 5 => 86, 4 => 10, 3 => 2, 2 => 1, 1 => 1 );
$nbb_mnenja = array(
  array( 'ime' => 'Luka B.',   'tekst' => 'Djeluje vrlo kvalitetno. Moj kruh od kiselog tijesta sada bez problema traje do petka, a prije je već u srijedu bio gotov. Razlika se odmah osjeti.' ),
  array( 'ime' => 'Ivan K.',   'tekst' => 'Probao sam papirnate vrećice, kutije za kruh i kuhinjske krpe – ovo je prvo što stvarno funkcionira. Moje pogače napokon traju dovoljno dugo da ih pojedemo.' ),
  array( 'ime' => 'Nina T.',   'tekst' => 'Ugodno sam iznenađena. Prije sam s takvim proizvodima imala samo loša iskustva, ali ova vrećica drži ono što obećava. Nema usporedbe s jeftinim vrećicama.' ),
  array( 'ime' => 'Mara S.',   'tekst' => 'To je korak nakon pečenja za koji nisam znala. Zarez na korici ostaje uzdignut i ne omekša kao u plastici.' ),
  array( 'ime' => 'Sofija V.', 'tekst' => 'Kuhinja mi je prije bila puna napola pojedenih, tvrdih pogača. S tim je gotovo. Korica ne postaje gumena, a sredina se ne isušuje.' ),
  array( 'ime' => 'Ela A.',    'tekst' => 'Odlična je i kao poklon. Donijela sam jednu sestri i ona je odmah naručila i za sebe.' ),
);

$nbb_n = 0; // števec sekcij za izmenična ozadja
$nbb_cls = function() use ( &$nbb_n ) { $nbb_n++; return ( $nbb_n % 2 ) ? ' nbb-tint' : ''; };
?>

<!-- 1) OPIS ("Beschreibung: Frisches Brot. Nicht nur am ersten Tag." + razširjen opis) — slika ob besedilu -->
<section class="nbb-sec<?php echo $nbb_cls(); ?>">
  <div class="nbb-wrap">
    <div class="nbb-row2">
      <div class="nbb-media nbb-media--sq"><?php echo $nbb_img( 'nbb-s1-opis.webp', 'Svježa pogača stavlja se u NORIKS vrećicu za kruh od pamuka i pčelinjeg voska' ); ?></div>
      <div class="nbb-copy">
        <p class="nbb-kicker">Opis</p>
        <h2 class="nbb-h2">Svjež kruh. <em>Ne samo prvi dan.</em></h2>
        <p>Kupite dobar kruh ili ga sami ispečete, a treći je dan tvrd ili se „znoji” u plastičnoj vrećici. NORIKS vrećica od pamuka i pravog pčelinjeg voska čuva vaš kruh <strong>do 3× dulje svježim</strong>: <strong>korica ostaje hrskava</strong>, a <strong>sredina mekana</strong>. Bez plastike, bez hladnjaka – jednostavno na radnoj ploči.</p>
        <p class="nbb-quote">Mnogi kupci kažu da im je kruh prije trajao samo 3 do 4 dana.<br>„Plastična vrećica čini kruh gnjecavim, a lanena ga isušuje.” <span>– iskustvo kupaca</span></p>
        <h3 class="nbb-h3">Tajna koja je nastajala milijunima godina</h3>
        <p>Pčele već milijunima godina voskom štite svoj med od bakterija i gljivica. Europski pekari to su otkrili prije nekoliko stoljeća: davno prije plastike kruh su zamatali u voštano platno. Hrskava korica, mekana sredina, bez plijesni.</p>
        <h3 class="nbb-h3">Zašto plastika i lan ne funkcioniraju</h3>
        <p>Svjež kruh neprestano otpušta vlagu. U plastičnoj vrećici ona ostaje unutra: korica omekša, a plijesan se brže pojavi. U lanenoj vrećici vlaga odmah izlazi: sredina se isuši. Pčelinji vosak diše taman koliko treba – a između toga je vaš svjež kruh.</p>
      </div>
    </div>
  </div>
</section>

<!-- 2) BEZBRIŽNA KUPNJA ("Wer dahinter steht – Sorgenfrei & sicher einkaufen", Mittwoch-Test; družinsko podjetje / Hans / Marie / 34.000 izpuščeno) -->
<section class="nbb-sec<?php echo $nbb_cls(); ?>">
  <div class="nbb-wrap">
    <div class="nbb-row2 nbb-row2--rev">
      <div class="nbb-media nbb-media--sq"><?php echo $nbb_img( 'nbb-s2-pcelar.webp', 'Pčelar drži NORIKS vrećicu za kruh punu svježeg kruha pokraj košnica' ); ?></div>
      <div class="nbb-copy">
        <p class="nbb-kicker">Bez rizika</p>
        <h2 class="nbb-h2">Bezbrižna i <em>sigurna kupnja.</em></h2>
        <p>NORIKS vrećica za kruh izrađena je od pamuka u koji je utrljan <strong>pravi pčelinji vosak</strong>. <strong>Tisuće kupaca</strong> već u njoj čuva svoj kruh.</p>
        <p>Napravite <strong>test srijede</strong>: u nedjelju stavite kruh u vrećicu i narežite ga u srijedu. Ako vas ne uvjeri, vrećicu nam vratite <strong>u roku od 30 dana</strong> i dobit ćete novac natrag.</p>
        <p class="nbb-big">Pravo na povrat u roku od 30 dana · Besplatna dostava za narudžbe iznad 70 €</p>
      </div>
    </div>
  </div>
</section>

<!-- 3) PRIMJENA ("Anwendung – So einfach bleibt dein Brot frisch", 4 koraki s slikami) — slike ob besedilu -->
<section class="nbb-sec<?php echo $nbb_cls(); ?>">
  <div class="nbb-wrap">
    <div class="nbb-row2">
      <div class="nbb-media">
        <div class="nbb-steps">
          <?php foreach ( $nbb_koraci as $i => $k ) : ?>
          <figure class="nbb-step"><?php echo $nbb_img( $k[0], $k[2] ); ?><span class="nbb-step__n"><?php echo (int) $i + 1; ?></span><figcaption><?php echo esc_html( $k[1] ); ?></figcaption></figure>
          <?php endforeach; ?>
        </div>
      </div>
      <div class="nbb-copy">
        <p class="nbb-kicker">Primjena</p>
        <h2 class="nbb-h2">Tako jednostavno vaš kruh <em>ostaje svjež.</em></h2>
        <p>Bez zamrzavanja, bez hladnjaka, bez zamatanja. Vrećica jednostavno stoji u vašoj kuhinji i <strong>održava ravnotežu vlage</strong>.</p>
        <ol class="nbb-num">
          <?php foreach ( $nbb_koraci as $i => $k ) : ?>
          <li><span class="nbb-num__n"><?php echo (int) $i + 1; ?></span><?php echo esc_html( $k[1] ); ?></li>
          <?php endforeach; ?>
        </ol>
        <p>Za čišćenje je okrenite, istresite mrvice i obrišite je vlažnom krpom.</p>
      </div>
    </div>
  </div>
</section>

<!-- 4) PREDNOSTI ("Vorteile – Deine Vorteile", 5 prednosti) — slika Plastika / Lan / NORIKS z oznakami ob besedilu -->
<section class="nbb-sec<?php echo $nbb_cls(); ?>">
  <div class="nbb-wrap">
    <div class="nbb-row2 nbb-row2--rev">
      <div class="nbb-media nbb-media--sq">
        <div class="nbb-labeled">
          <?php echo $nbb_img( 'nbb-s4-usporedba.webp', 'Kruh u plastičnoj vrećici, u lanenoj vrećici i u NORIKS vrećici od pčelinjeg voska' ); ?>
          <span class="nbb-tag" style="left:17%">Plastika</span>
          <span class="nbb-tag" style="left:49%">Lan</span>
          <span class="nbb-tag nbb-tag--us" style="left:82%">NORIKS</span>
        </div>
      </div>
      <div class="nbb-copy">
        <p class="nbb-kicker">Prednosti</p>
        <h2 class="nbb-h2">Vaše <em>prednosti.</em></h2>
        <ul class="nbb-list">
          <?php foreach ( $nbb_prednosti as $p ) : ?>
          <li><strong><?php echo esc_html( $p[0] ); ?></strong><br><?php echo esc_html( $p[1] ); ?></li>
          <?php endforeach; ?>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- 5) MATERIJAL ("Material – Von Hand gewachst. Gemacht für Jahre.", 100 % / 33 × 43 / 0 %) — slika ob besedilu -->
<section class="nbb-sec<?php echo $nbb_cls(); ?>">
  <div class="nbb-wrap">
    <div class="nbb-row2">
      <div class="nbb-media nbb-media--sq"><?php echo $nbb_img( 'nbb-s5-sace.webp', 'Pčelar drži okvir sa saćem, pokraj košnice stoji NORIKS vrećica za kruh' ); ?></div>
      <div class="nbb-copy">
        <p class="nbb-kicker">Materijal</p>
        <h2 class="nbb-h2">Ručno voskirano. <em>Napravljeno da traje godinama.</em></h2>
        <p>Vosak je <strong>utrljan duboko u pamuk</strong>, a ne samo poprskan po površini. Ta jedna odluka čini razliku između vrećice koja izdrži tri pranja i one koja traje <strong>tri godine</strong>.</p>
        <div class="nbb-stats">
          <?php foreach ( $nbb_brojke as $b ) : ?>
          <div><b><?php echo esc_html( $b[0] ); ?></b><span><?php echo esc_html( $b[1] ); ?></span></div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- 6) DETALJI ("Details – Alle Details auf einen Blick.", Marke -> NORIKS) — slika ob tabeli -->
<section class="nbb-sec<?php echo $nbb_cls(); ?>">
  <div class="nbb-wrap">
    <div class="nbb-row2 nbb-row2--rev">
      <div class="nbb-media nbb-media--sq"><?php echo $nbb_img( 'nbb-s6-detalji.webp', 'Otvorena NORIKS vrećica za kruh s pogačom od kiselog tijesta' ); ?></div>
      <div class="nbb-copy">
        <p class="nbb-kicker">Detalji</p>
        <h2 class="nbb-h2">Svi detalji <em>na prvi pogled.</em></h2>
        <dl class="nbb-specs">
          <?php foreach ( $nbb_detalji as $d ) : ?>
          <div><dt><?php echo esc_html( $d[0] ); ?></dt><dd><?php echo esc_html( $d[1] ); ?></dd></div>
          <?php endforeach; ?>
        </dl>
      </div>
    </div>
  </div>
</section>

<!-- 7) RECENZIJE ("Bewertungen – Echte Meinungen unserer Kund:innen", 4,8 / 978 -> 1081, 6 mnenj) -->
<section class="nbb-sec<?php echo $nbb_cls(); ?>">
  <div class="nbb-wrap">
    <p class="nbb-kicker nbb-c">Recenzije</p>
    <h2 class="nbb-h2 nbb-c">Stvarna mišljenja <em>naših kupaca.</em></h2>
    <div class="nbb-score">
      <div class="nbb-score__left">
        <span class="nbb-score__num">4,8</span>
        <?php echo $nbb_stars( 5 ); ?>
        <span class="nbb-score__txt">1081 recenzija</span>
      </div>
      <div class="nbb-bars">
        <?php foreach ( $nbb_razdioba as $z => $pct ) : ?>
        <div class="nbb-bar"><span><?php echo (int) $z; ?>★</span><i><b style="width:<?php echo (int) $pct; ?>%"></b></i><em><?php echo (int) $pct; ?> %</em></div>
        <?php endforeach; ?>
      </div>
    </div>
    <div class="nbb-reviews">
      <?php foreach ( $nbb_mnenja as $r ) : ?>
      <article class="nbb-card">
        <div class="nbb-card__head"><span class="nbb-card__av"><?php echo esc_html( substr( $r['ime'], 0, 1 ) ); ?></span><span class="nbb-card__name"><?php echo esc_html( $r['ime'] ); ?><span class="nbb-ok">✓ Potvrđena kupnja</span></span><?php echo $nbb_stars( 5 ); ?></div>
        <p class="nbb-card__txt">„<?php echo esc_html( $r['tekst'] ); ?>”</p>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- 8) ZAKLJUČNI POZIV ("Dein Brot ist gut. Es braucht nur die richtige Hülle.") — slika kompleta ob besedilu -->
<section class="nbb-sec<?php echo $nbb_cls(); ?>">
  <div class="nbb-wrap">
    <div class="nbb-row2">
      <div class="nbb-media nbb-media--sq"><?php echo $nbb_img( 'nbb-s8-komplet.webp', 'Komplet NORIKS vrećica za kruh – dvije pune kruha i dvije složene' ); ?></div>
      <div class="nbb-copy">
        <p class="nbb-kicker">Za vaš kruh</p>
        <h2 class="nbb-h2">Vaš kruh je dobar. <em>Treba mu samo prava vrećica.</em></h2>
        <p>Odaberite komplet od <strong>2, 4 ili 6 vrećica</strong> – što više vrećica, to niža cijena po komadu.</p>
        <?php if ( $nbb_sale ) : ?>
        <p class="nbb-price">Već od <strong><?php echo esc_html( $nbb_eur( $nbb_sale ) ); ?></strong> / kom<?php if ( $nbb_reg && (float) $nbb_reg > (float) $nbb_sale ) : ?> <s><?php echo esc_html( $nbb_eur( $nbb_reg ) ); ?></s><?php endif; ?></p>
        <?php endif; ?>
        <p class="nbb-small">Pravo na povrat u roku od 30 dana · Besplatna dostava za narudžbe iznad 70 €</p>
        <p><a class="nbb-btn" href="#bundle-selector">Odaberite svoj komplet →</a></p>
      </div>
    </div>
  </div>
</section>

<style>
/* NORIKS stil (predloga why-travelkit.php / why-hands.php): oznaka + naslov z ležečim poudarkom, slika ob besedilu,
   izmenjujoča ozadja in strani. Paleta po originalu (bombaž + med + temno rjava): poudarek #a9683f, temno #241a10, svetlo #f7efe6. */
.nbb-sec { padding: 60px 0; font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Arial, sans-serif; color: #241a10; background: #fff; }
.nbb-sec * { box-sizing: border-box; }
.nbb-tint { background: #f7efe6; }
.nbb-wrap { width: 100%; max-width: 1200px; margin: 0 auto; padding: 0 24px; }
.nbb-c { text-align: center; }
.nbb-sec h2, .nbb-sec h3 { font-family: inherit; text-transform: none; letter-spacing: 0; }
.nbb-kicker, .nbb-copy p.nbb-kicker { font-size: 12.5px; line-height: 1.4; font-weight: 800; letter-spacing: .14em; text-transform: uppercase; color: #a9683f; margin: 0 0 10px; }
.nbb-h2 { font-weight: 800; font-size: clamp(25px, 3.1vw, 36px); line-height: 1.2; margin: 0 0 18px; color: #241a10; }
.nbb-h2 em { font-style: italic; color: #a9683f; }
.nbb-h3 { font-weight: 800; font-size: 18px; line-height: 1.35; margin: 18px 0 8px; color: #241a10; }
.nbb-sec img { display: block; width: 100%; height: auto; }

/* slika ob besedilu */
.nbb-row2 { display: grid; grid-template-columns: 1fr 1fr; gap: 56px; align-items: center; }
.nbb-row2--rev > :first-child { order: 2; }
.nbb-media > img, .nbb-labeled > img { display: block; width: 100%; border-radius: 10px; box-shadow: 0 2px 4px rgba(36,26,16,.05), 0 14px 40px rgba(36,26,16,.10); max-width: 560px; margin: 0 auto; aspect-ratio: 4 / 5; object-fit: cover; background: #fff; }
.nbb-media--sq > img, .nbb-labeled > img { aspect-ratio: 1 / 1; }
.nbb-copy p { font-size: 16px; line-height: 1.7; color: #5b4d3c; margin: 0 0 14px; }
.nbb-copy p strong { color: #241a10; font-weight: 700; }
.nbb-sec p.nbb-big { font-size: 18px; font-weight: 800; color: #241a10; line-height: 1.45; margin-top: 6px; }
.nbb-sec p.nbb-small { font-size: 13.5px; line-height: 1.55; color: #7a6a58; }
.nbb-sec p.nbb-quote { background: #fff; border-left: 3px solid #a9683f; border-radius: 0 10px 10px 0; padding: 12px 16px; font-size: 15px; font-style: italic; }
.nbb-quote span { font-style: normal; font-size: 13px; color: #7a6a58; }

/* 3) koraki s slikami */
.nbb-steps { display: grid; grid-template-columns: 1fr 1fr; gap: 12px; max-width: 560px; margin: 0 auto; }
.nbb-step { position: relative; margin: 0; background: #fff; border-radius: 10px; overflow: hidden; box-shadow: 0 2px 10px rgba(36,26,16,.08); }
.nbb-step img { aspect-ratio: 1 / 1; object-fit: cover; }
.nbb-step__n { position: absolute; top: 8px; left: 8px; width: 28px; height: 28px; border-radius: 50%; background: #241a10; color: #fff; font-weight: 800; font-size: 14px; line-height: 28px; text-align: center; }
.nbb-step figcaption { padding: 8px 10px; font-size: 13.5px; font-weight: 700; color: #241a10; line-height: 1.35; }
.nbb-num { list-style: none; margin: 0 0 14px; padding: 0; }
.nbb-num li { position: relative; padding: 3px 0 3px 42px; margin: 0 0 10px; font-size: 16px; line-height: 1.6; color: #5b4d3c; min-height: 30px; }
.nbb-num__n { position: absolute; left: 0; top: 1px; width: 30px; height: 30px; border-radius: 50%; background: #a9683f; color: #fff; font-weight: 800; font-size: 14px; line-height: 30px; text-align: center; }

/* 4) slika z oznakami */
.nbb-labeled { position: relative; max-width: 560px; margin: 0 auto; }
.nbb-tag { position: absolute; bottom: 7%; transform: translateX(-50%); background: #fff; color: #241a10; font-weight: 700; font-size: 14px; padding: 6px 12px; border-radius: 6px; box-shadow: 0 2px 8px rgba(36,26,16,.15); white-space: nowrap; }
.nbb-tag--us { background: #241a10; color: #fff; }

/* seznam prednosti */
.nbb-list { list-style: none; margin: 0 0 6px; padding: 0; }
.nbb-list li { position: relative; padding-left: 32px; margin: 0 0 14px; font-size: 15.5px; line-height: 1.6; color: #5b4d3c; }
.nbb-list li strong { color: #241a10; font-size: 16px; }
.nbb-list li::before { content: "✓"; position: absolute; left: 0; top: 3px; width: 21px; height: 21px; border-radius: 50%; background: #a9683f; color: #fff; font-size: 11px; font-weight: 800; line-height: 21px; text-align: center; }

/* 5) brojke */
.nbb-stats { display: grid; grid-template-columns: repeat(3, minmax(0, 1fr)); gap: 12px; margin: 6px 0 4px; }
.nbb-stats > div { background: #fff; border: 1px solid #dcc3ad; border-radius: 10px; padding: 14px 10px; text-align: center; box-shadow: 0 2px 10px rgba(36,26,16,.04); }
.nbb-stats b { display: block; font-size: 24px; font-weight: 800; color: #a9683f; line-height: 1.2; }
.nbb-stats span { display: block; font-size: 13px; color: #6b5c4b; line-height: 1.4; margin-top: 2px; }

/* 6) tabela detajlov */
.nbb-specs { margin: 0; padding: 6px 18px; background: #fff; border: 1px solid #dcc3ad; border-radius: 10px; box-shadow: 0 2px 10px rgba(36,26,16,.04); }
.nbb-specs > div { display: grid; grid-template-columns: 130px 1fr; gap: 12px; padding: 11px 0; border-top: 1px solid #efe2d5; font-size: 15px; line-height: 1.5; }
.nbb-specs > div:first-child { border-top: 0; }
.nbb-specs dt { font-weight: 700; color: #241a10; margin: 0; }
.nbb-specs dd { margin: 0; color: #5b4d3c; }

/* 7) recenzije */
.nbb-score { display: flex; align-items: center; justify-content: center; gap: 36px; margin: 6px auto 30px; max-width: 720px; }
.nbb-score__left { display: flex; flex-direction: column; align-items: center; gap: 4px; flex: none; }
.nbb-score__num { font-size: 52px; font-weight: 800; line-height: 1; color: #241a10; }
.nbb-score .nbb-stars { font-size: 20px; }
.nbb-score__txt { font-size: 14px; color: #6b5c4b; }
.nbb-bars { flex: 1; display: grid; gap: 6px; }
.nbb-bar { display: grid; grid-template-columns: 30px 1fr 44px; gap: 10px; align-items: center; font-size: 13.5px; color: #5b4d3c; }
.nbb-bar i { display: block; height: 8px; border-radius: 99px; background: #efe2d5; overflow: hidden; }
.nbb-bar b { display: block; height: 100%; background: #a9683f; border-radius: 99px; }
.nbb-bar em { font-style: normal; text-align: right; }
.nbb-reviews { display: grid; grid-template-columns: repeat(3, minmax(0, 1fr)); gap: 18px; align-items: start; }
.nbb-card { background: #fff; border: 1px solid #dcc3ad; border-radius: 10px; padding: 16px; box-shadow: 0 2px 10px rgba(36,26,16,.05); }
.nbb-card__head { display: flex; align-items: center; gap: 10px; flex-wrap: wrap; }
.nbb-card__av { width: 36px; height: 36px; border-radius: 50%; background: #eeddcd; color: #a9683f; font-weight: 800; font-size: 16px; line-height: 36px; text-align: center; flex: none; }
.nbb-card__name { display: flex; flex-direction: column; font-size: 14px; font-weight: 700; color: #241a10; margin-right: auto; line-height: 1.3; }
.nbb-card__txt { font-size: 14.5px; line-height: 1.6; color: #3d3226; margin: 12px 0 0; font-style: italic; }

/* 8) zaključek */
.nbb-sec p.nbb-price { font-size: 18px; color: #241a10; }
.nbb-price strong { font-size: 26px; color: #a9683f; }
.nbb-price s { color: #9a8b7a; margin-left: 6px; }
.nbb-sec a.nbb-btn { display: inline-block; background: #a9683f; color: #fff; font-weight: 800; font-size: 16px; padding: 13px 28px; border-radius: 10px; text-decoration: none; box-shadow: 0 4px 14px rgba(169,104,63,.25); }
.nbb-sec a.nbb-btn:hover { background: #8f5532; color: #fff; }

/* ocjene */
.nbb-stars { color: #e0a82e; letter-spacing: 1px; font-size: 15px; }
.nbb-stars__off { color: #e6dacd; }
.nbb-ok { color: #2f9e5f; font-weight: 600; font-size: 12px; font-style: normal; }

@media (max-width: 989px) {
  .nbb-row2 { gap: 32px; }
  .nbb-reviews { grid-template-columns: repeat(2, minmax(0, 1fr)); }
}
@media (max-width: 749px) {
  .nbb-sec { padding: 42px 0; }
  .nbb-wrap { padding: 0 16px; }
  .nbb-row2 { grid-template-columns: 1fr; gap: 24px; }
  .nbb-row2--rev > :first-child { order: 0; }
  .nbb-specs > div { grid-template-columns: 1fr; gap: 2px; }
  .nbb-score { flex-direction: column; gap: 16px; }
  .nbb-bars { width: 100%; }
  .nbb-reviews { grid-template-columns: 1fr; gap: 12px; }
  .nbb-stats b { font-size: 19px; }
  .nbb-tag { font-size: 12px; padding: 5px 9px; }
}

/* galerija izdelka: sličice največ v 2 vrstah (5 na vrsto), ostale slike so dosegljive z drsenjem glavne slike */
.product_cat-orto-breadbag .flex-control-thumbs li:nth-child(n+11) { display: none !important; }

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
.woocommerce-product-details__short-description .nbb-tick {
  position: absolute !important; left: 0 !important; top: 1px !important;
  width: 21px; height: 21px; border-radius: 50%;
  background: #2f9e5f !important; color: #fff !important;
  font-size: 12px !important; font-weight: 800 !important; line-height: 21px !important;
  text-align: center !important; display: inline-block !important; }
.woocommerce-product-details__short-description p:first-of-type { font-size: 16px; line-height: 1.55; }
</style>
