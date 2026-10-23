<?php
/**
 * product-bottom: NORIKS AirTravel — putni ruksak s vakuumskom kompresijom (SKU NORIKS-AIRTRAVEL, tip airtravel,
 * kategorija orto-airtravel; SKU iz izbora, izdelek na originalu je potovalni nahrbtnik, ne kompresija za noge).
 * Original: flovir.com/products/air-travel-bag®-2nd-gen ("Air Pro® Compression System") — vsebina in vrstni red 1:1 z
 * originalom, oblika po NORIKS stilu (predloga why-grillbasket.php / why-hands.php), poudarek po barvah izdelka
 * (crna + crveni detalji: rdeča #b8282e, temno #1d1b1c, nevtralno toplo sivo ozadje #f5f2f0):
 *   1) harmonika "Description" + "Specifications" (s skico dimenzij)    -> Opis proizvoda: skica ob besedilu + specifikacije
 *   2) "Carry-On Only. Fit 10 Days" (1 Pack, 2 Compress, 3 Fly free, GIF)  -> slika ob besedilu (kader iz GIF-a; logotipi
 *      VORTEX / V in "on" na majici retuširani), 3 koraki
 *   3) "Built for Carry-On Travelers" (7 videov kupcev)                  -> besedilo (Pack light, travel carry-on. + 3 točke
 *      iz nakupne škatle) + 7 utišanih videov (skrajšanih na ~20 s; v 6. videu "Dry as a desert !" -> "Suho kao pustinja!")
 *   4) "Skip the Counter. Skip the Fees"                                 -> slika ob besedilu
 *   5) "DESIGNED FOR EASIER TRAVEL" (5 zavihkov Secure/Shoes/…)          -> Osmišljen za lakše putovanje (5 kartic s slikami)
 *   6) "Why Travelers Love It!" (4 mnenja s fotografijami)               -> Zašto ga putnici obožavaju (4 mnenja, imena lokalizirana)
 *   7) "What Makes Air Travel Bag® Special" (tabela Air Pro® / Others)  -> Po čemu je NORIKS AirTravel poseban (NORIKS / Ostali)
 *   8) "90-Day Risk-Free Guarantee"                                      -> 30 dana bez rizika (HTML pečat, NORIKS pogoji)
 * Izpusceno: pasica trgovine, "Add Air Pump" dodatek, darila "3 travel gifts ($94 value)", "SUMMER BUNDLE" z darili,
 * 3-Year Warranty, 90-Day Trial, Ships from USA, harmoniki 90-Day Money Back Guarantee in Shipping (velja NORIKS),
 * "Ask a Question" (e-pošta podpore), noga trgovine.
 * FAQ (6) je v reviews.php ($airtravel_faq), mnenja v auto_reviews/HR_airtravel.php, opis + nega v meta.php.
 * Slike in videi: img/airtravel/ (nlc-…).
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$nlc      = get_template_directory_uri() . '/img/airtravel/';
$nlc_path = get_template_directory() . '/img/airtravel/';
$nlc_img  = function( $file, $alt, $cls = '' ) use ( $nlc, $nlc_path ) {
  if ( ! $file || ! file_exists( $nlc_path . $file ) ) { return ''; }
  return '<img src="' . esc_url( $nlc . $file ) . '" alt="' . esc_attr( $alt ) . '" loading="lazy"' . ( $cls ? ' class="' . esc_attr( $cls ) . '"' : '' ) . '>';
};
$nlc_video = function( $file, $label ) use ( $nlc, $nlc_path ) {
  if ( ! file_exists( $nlc_path . $file ) ) { return ''; }
  $poster = preg_replace( '/\.mp4$/', '-poster.webp', $file );
  return '<video src="' . esc_url( $nlc . $file ) . '" poster="' . esc_url( $nlc . $poster ) . '"'
    . ' muted autoplay loop playsinline preload="metadata" aria-label="' . esc_attr( $label ) . '"></video>';
};
$nlc_stars = function( $n ) {
  $n = max( 0, min( 5, (int) $n ) );
  return '<span class="nlc-stars" aria-label="' . $n . ' od 5 zvjezdica">' . str_repeat( '★', $n ) . '<span class="nlc-stars__off">' . str_repeat( '★', 5 - $n ) . '</span></span>';
};

/* 1) opis: prednosti (seznam iz harmonike Description) in specifikacije (harmonika Specifications) */
$nlc_feats = array(
  'Prostrani pretinci koji se mogu proširiti',
  'Vodoodbojan i izdržljiv materijal',
  'Više pretinaca za bolju organizaciju',
  'Podstavljene naramenice za udobno nošenje',
  'Traka za jednostavno pričvršćivanje na kovčeg',
  'Skriveni džepovi za vrijedne stvari',
  'Ugrađeni lokot za dodatnu sigurnost na putovanju',
);
$nlc_specs = array(
  array( 'Za koga', 'Unisex – udoban za svakoga.' ),
  array( 'Zapremina', '22–48 litara (prilagodljivo kompresijom).' ),
  array( 'Dimenzije', '49/43 × 32 × 15–20 cm (duljina × širina × dubina) – po dubini se proširuje do 20 cm.' ),
  array( 'Težina', '1,6–1,8 kg' ),
);
$nlc_mats = array(
  'Glavna tkanina: 100 % reciklirani najlon 900D s voštanim premazom izvana i PU premazom s unutarnje strane, GRS certifikat, bez PFC-a',
  'Tkanina stražnjeg panela: 100 % poliester',
  'Podstava: 100 % poliester 230T',
  'Mrežica: 100 % poliester',
  'Trake: polipropilen, najlonska traka riblje kosti',
  'Pjene: polietilenska pjena, EVA pjena, neopren',
);

/* 2) tri koraka */
$nlc_steps = array(
  array( '1', 'Spakirajte', 'Složite odjeću kao u bilo koji ruksak.' ),
  array( '2', 'Komprimirajte', 'Pritisnite ventil. Zrak van, prostor se udvostručuje.' ),
  array( '3', 'Letite slobodno', 'Stane ispod sjedala. Bez naknade. Bez čekanja na prtljagu.' ),
);

/* 3) videi kupcev (7, utišani) */
$nlc_vids = array(
  array( 'nlc-v1-pakiranje.mp4', 'Pakiranje odjeće u vakuumski pretinac ruksaka' ),
  array( 'nlc-v2-vakuumiranje.mp4', 'Vakuumiranje odjeće prijenosnom pumpom' ),
  array( 'nlc-v3-pretinci.mp4', 'Pakiranje ruksaka i zaključavanje TSA lokotom' ),
  array( 'nlc-v4-kompresija.mp4', 'Kompresija vakuumskog pretinca i pakiranje sitnica' ),
  array( 'nlc-v5-sve-u-jednom.mp4', 'Sve za putovanje u jednom ruksaku' ),
  array( 'nlc-v6-vodootporan-hr.mp4', 'Ruksak izvađen iz bazena – odjeća unutra ostaje suha' ),
  array( 'nlc-v7-pumpa.mp4', 'Vakuumiranje pumpom i pakiranje obuće' ),
);

/* 5) pet stvari, ki smo jih popravili */
$nlc_five = array(
  array( 'nlc-s05-tsa-lokot.webp', 'TSA lokot na ruksaku', 'Sigurnost', 'TSA lokot', 'Zaključajte glavni pretinac – bez posebnog lokota.' ),
  array( 'nlc-s05-pretinac-za-cipele.webp', 'Pakiranje tenisica u poseban pretinac', 'Cipele', 'Pretinac za cipele', 'Cipele su u vlastitom pretincu.' ),
  array( 'nlc-s05-naramenice.webp', 'Podstavljena naramenica ruksaka', 'Naramenice', 'Podstavljene naramenice', 'Podstavljene naramenice olakšavaju nošenje težeg tereta.' ),
  array( 'nlc-s05-laptop.webp', 'Laptop u podstavljenom pretincu ruksaka', 'Laptop', 'Zaštitni pretinac za laptop do 17"', 'Zaštićen i lako dostupan. Stanu laptopi do 17 inča.' ),
  array( 'nlc-s05-skriveni-dzep.webp', 'Kartica u skrivenom džepu na leđnom dijelu', 'Džep', 'Skriveni pretinac', 'Putovnice i novac ostaju skriveni od pogleda.' ),
);

/* 6) mnenja s fotografijami (imena lokalizirana) */
$nlc_rv = array(
  array( 'nlc-rv-1.webp', 'Morao sam napisati recenziju', 'Moram reći da sam potpuno oduševljen! Moja su očekivanja inače prilično visoka, pa kad kažem da je ovaj proizvod besprijekoran, stvarno to i mislim. Materijal, kvaliteta i dizajn su odlični. Htio sam nešto što mogu koristiti u uredu, ali i na svim svojim putovanjima – i ovaj ruksak radi upravo to.', 'Ivan J.' ),
  array( 'nlc-rv-2.webp', 'Stvarno udoban', 'Nedavno sam kupio veći model od 49 cm i iskreno je odličan. Ponio sam ga na kratko putovanje u London i savršeno je stao ispod sjedala u avionu. Nevjerojatno koliko sam stvari uspio spakirati za tako kratko putovanje. Zahvaljujući podstavljenim naramenicama bio je i vrlo udoban za nošenje.', 'Josip P.' ),
  array( 'nlc-rv-3.webp', 'Prošao je', 'Isprva sam bio malo skeptičan hoće li ruksak stvarno proći kao ručna prtljaga. Nikad se ne zna. Ali iskreno, sva moja briga bila je uzaludna. Ruksak se pokazao savršenim.', 'Luka L.' ),
  array( 'nlc-rv-4.webp', 'Impresivne značajke', 'Pažnja posvećena detaljima je impresivna i stvarno se ističe među drugim putnim torbama. Kvalitetni materijali i čvrsta izrada daju mu vrhunski dojam. Kad mi treba, u njega stane puno više stvari. Počeo sam ga koristiti i kad idem u teretanu.', 'Marko K.' ),
);

/* 7) usporedba (stolpca originala: Air Pro® / Others) */
$nlc_cmp = array(
  'Ugrađeni vakuumski sustav',
  'Kvalitetan materijal',
  'Podstavljeni pretinac za laptop',
  'Proširiv za dodatni prostor',
  'Dizajn otporan na krađu',
  'Traka za kovčeg',
  'Skriveni džepovi',
  'Materijal otporan na vodu i rezanje',
  'Savršen za svaku priliku',
);

$nlc_n = 0; // števec sekcij za izmenična ozadja
$nlc_cls = function() use ( &$nlc_n ) { $nlc_n++; return ( $nlc_n % 2 ) ? ' nlc-tint' : ''; };
?>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap">

<!-- 1) OPIS PROIZVODA (harmonika "Description" + "Specifications") — skica dimenzij ob besedilu -->
<section class="nlc-sec<?php echo $nlc_cls(); ?>">
  <div class="nlc-wrap">
    <div class="nlc-row2">
      <div class="nlc-media"><?php echo $nlc_img( 'nlc-s01-dimenzije.webp', 'Skica ruksaka NORIKS AirTravel s dimenzijama: širina 32 cm, visina 43/49 cm, dubina 15–20 cm', 'nlc-img--free' ); ?></div>
      <div class="nlc-copy">
        <p class="nlc-kicker">Opis proizvoda</p>
        <h2 class="nlc-h3">Vrhunsko iskustvo putovanja za one koji cijene <em>praktičnost, učinkovitost i sigurnost.</em></h2>
        <p><strong>Preskočite red za predaju prtljage i čekanje na traci za prtljagu</strong> i putujte bez brige, znajući da su vaše stvari sigurne i uvijek dostupne. Ruksak se lako prilagođava svakoj situaciji – savršen je za putovanja i za svaki dan.</p>
        <p>Bilo da je riječ o <strong>kratkom izletu ili dugom putovanju</strong>, NORIKS AirTravel se uklapa u sve vaše planove.</p>
        <p>Zahvaljujući izdržljivoj izradi ne morate svake godine trošiti stotine eura na novu prtljagu – a uz NORIKS imate i <strong>pravo na povrat u roku od 30 dana</strong>.</p>
        <ul class="nlc-list">
          <?php foreach ( $nlc_feats as $f ) : ?><li><?php echo esc_html( $f ); ?></li><?php endforeach; ?>
        </ul>
      </div>
    </div>
    <div class="nlc-specs">
      <h3 class="nlc-specs__title">Specifikacije</h3>
      <div class="nlc-specs__grid">
        <?php foreach ( $nlc_specs as $s ) : ?>
        <div class="nlc-spec"><span class="nlc-spec__k"><?php echo esc_html( $s[0] ); ?></span><span class="nlc-spec__v"><?php echo esc_html( $s[1] ); ?></span></div>
        <?php endforeach; ?>
        <div class="nlc-spec nlc-spec--wide"><span class="nlc-spec__k">Materijali</span>
          <ul class="nlc-mats"><?php foreach ( $nlc_mats as $m ) : ?><li><?php echo esc_html( $m ); ?></li><?php endforeach; ?></ul>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- 2) SAMO RUČNA PRTLJAGA. STANE ZA 10 DANA. ("Carry-On Only. Fit 10 Days") — slika ob besedilu -->
<section class="nlc-sec<?php echo $nlc_cls(); ?>">
  <div class="nlc-wrap">
    <div class="nlc-row2 nlc-row2--rev">
      <div class="nlc-media"><?php echo $nlc_img( 'nlc-s02-10-dana.webp', 'Otvoreni ruksak s visokim snopom složene odjeće za 10 dana', 'nlc-img--free' ); ?></div>
      <div class="nlc-copy">
        <p class="nlc-kicker">Kako radi</p>
        <h2 class="nlc-h3">Samo ručna prtljaga. <em>Stane za 10 dana.</em></h2>
        <ol class="nlc-steps">
          <?php foreach ( $nlc_steps as $s ) : ?>
          <li><span class="nlc-steps__no"><?php echo esc_html( $s[0] ); ?></span><p><strong><?php echo esc_html( $s[1] ); ?></strong> – <?php echo esc_html( $s[2] ); ?></p></li>
          <?php endforeach; ?>
        </ol>
        <p class="nlc-big">Spakirajte, komprimirajte i krenite – bez predane prtljage.</p>
      </div>
    </div>
  </div>
</section>

<!-- 3) STVOREN ZA PUTNIKE S RUČNOM PRTLJAGOM ("Built for Carry-On Travelers") — besedilo + 7 videov kupcev -->
<section class="nlc-sec<?php echo $nlc_cls(); ?>">
  <div class="nlc-wrap">
    <div class="nlc-row2 nlc-row2--vids">
      <div class="nlc-vids">
        <?php foreach ( $nlc_vids as $v ) : $html = $nlc_video( $v[0], $v[1] ); if ( ! $html ) { continue; } ?>
        <div class="nlc-vid"><?php echo $html; ?></div>
        <?php endforeach; ?>
      </div>
      <div class="nlc-copy">
        <p class="nlc-kicker">Putujte lagano</p>
        <h2 class="nlc-h3">Stvoren za putnike <em>s ručnom prtljagom.</em></h2>
        <p>Putujte lagano – samo s ručnom prtljagom. Pogledajte kako ga putnici pakiraju, vakuumiraju i nose.</p>
        <ul class="nlc-list">
          <li><strong>Veličina ručne prtljage</strong> – preskočite red za predaju prtljage.</li>
          <li><strong>Stane odjeće za 10 dana</strong> – kompresija udvostručuje prostor.</li>
          <li><strong>Dimenzije ručne prtljage</strong> – stane ispod sjedala u avionu.</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- 4) PRESKOČITE ŠALTER. PRESKOČITE NAKNADE. ("Skip the Counter. Skip the Fees") — slika ob besedilu -->
<section class="nlc-sec<?php echo $nlc_cls(); ?>">
  <div class="nlc-wrap">
    <div class="nlc-row2 nlc-row2--rev">
      <div class="nlc-media"><?php echo $nlc_img( 'nlc-s04-bez-predaje-prtljage.webp', 'Muškarac s crnim ruksakom NORIKS AirTravel na leđima' ); ?></div>
      <div class="nlc-copy">
        <p class="nlc-kicker">Bez predane prtljage</p>
        <h2 class="nlc-h3">Preskočite šalter. <em>Preskočite naknade.</em></h2>
        <p>Ostavite predanu prtljagu kod kuće. <strong>Bez čekanja. Bez naknada.</strong></p>
        <p class="nlc-big">Putujte samo s ručnom prtljagom i zadržite svoj novac.</p>
      </div>
    </div>
  </div>
</section>

<!-- 5) OSMIŠLJEN ZA LAKŠE PUTOVANJE ("DESIGNED FOR EASIER TRAVEL") — 5 kartic -->
<section class="nlc-sec<?php echo $nlc_cls(); ?>">
  <div class="nlc-wrap">
    <p class="nlc-kicker nlc-c">Osmišljen za lakše putovanje</p>
    <h2 class="nlc-h2 nlc-c">Pet stvari koje smo popravili da više <em>ne morate kopati po torbi.</em></h2>
    <div class="nlc-five">
      <?php foreach ( $nlc_five as $f ) : ?>
      <article class="nlc-fcard">
        <div class="nlc-fcard__img"><?php echo $nlc_img( $f[0], $f[1] ); ?></div>
        <div class="nlc-fcard__body">
          <p class="nlc-fcard__tag"><?php echo esc_html( $f[2] ); ?></p>
          <h3><?php echo esc_html( $f[3] ); ?></h3>
          <p><?php echo esc_html( $f[4] ); ?></p>
        </div>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- 6) ZAŠTO GA PUTNICI OBOŽAVAJU ("Why Travelers Love It!") — 4 mnenja s fotografijami -->
<section class="nlc-sec<?php echo $nlc_cls(); ?>">
  <div class="nlc-wrap">
    <p class="nlc-kicker nlc-c"><?php echo $nlc_stars( 5 ); ?> Potvrđene kupnje</p>
    <h2 class="nlc-h2 nlc-c">Zašto ga putnici <em>obožavaju!</em></h2>
    <div class="nlc-rv">
      <?php foreach ( $nlc_rv as $r ) : ?>
      <article class="nlc-card">
        <div class="nlc-card__img"><?php echo $nlc_img( $r[0], 'Kupac s ruksakom NORIKS AirTravel' ); ?></div>
        <div class="nlc-card__body">
          <?php echo $nlc_stars( 5 ); ?>
          <h3 class="nlc-card__title"><?php echo esc_html( $r[1] ); ?></h3>
          <p class="nlc-card__txt">„<?php echo esc_html( $r[2] ); ?>”</p>
          <p class="nlc-card__name">– <?php echo esc_html( $r[3] ); ?> <span class="nlc-ok">✓ Potvrđena kupnja</span></p>
        </div>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- 7) PO ČEMU JE NORIKS AIRTRAVEL POSEBAN ("What Makes Air Travel Bag® Special" — tabela) -->
<section class="nlc-sec<?php echo $nlc_cls(); ?>">
  <div class="nlc-wrap nlc-wrap--narrow">
    <p class="nlc-kicker nlc-c">Usporedba</p>
    <h2 class="nlc-h2 nlc-c">Po čemu je NORIKS AirTravel <em>poseban</em></h2>
    <p class="nlc-lead nlc-c">Otkrijte zašto se NORIKS AirTravel ističe među ostalim torbama.</p>
    <div class="nlc-cmp" role="table" aria-label="Usporedba: NORIKS AirTravel i ostale torbe">
      <div class="nlc-cmp__row nlc-cmp__head" role="row">
        <span role="columnheader"></span>
        <span role="columnheader" class="nlc-cmp__us">NORIKS</span>
        <span role="columnheader">Ostali</span>
      </div>
      <?php foreach ( $nlc_cmp as $r ) : ?>
      <div class="nlc-cmp__row" role="row">
        <span role="cell" class="nlc-cmp__lbl"><?php echo esc_html( $r ); ?></span>
        <span role="cell" class="nlc-cmp__us"><span class="nlc-yes" aria-label="da">✓</span></span>
        <span role="cell"><span class="nlc-no" aria-label="ne">✕</span></span>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- 8) 30 DANA BEZ RIZIKA ("90-Day Risk-Free Guarantee" -> NORIKS pogoji) — HTML pečat ob besedilu -->
<section class="nlc-sec<?php echo $nlc_cls(); ?>">
  <div class="nlc-wrap">
    <div class="nlc-row2">
      <div class="nlc-media nlc-seal-wrap">
        <div class="nlc-seal" role="img" aria-label="30 dana za povrat">
          <div class="nlc-seal__in">
            <span class="nlc-seal__top">Pravo na povrat</span>
            <span class="nlc-seal__num">30</span>
            <span class="nlc-seal__days">DANA</span>
            <span class="nlc-seal__bot">Bez rizika</span>
          </div>
        </div>
      </div>
      <div class="nlc-copy">
        <p class="nlc-kicker">Kupujte bez brige</p>
        <h2 class="nlc-h3">30 dana <em>bez rizika</em></h2>
        <p>Stojimo iza ruksaka NORIKS AirTravel i vjerujemo da ćete ga voljeti jednako kao i mi! Razumijemo da nije svako iskustvo isto.</p>
        <p>Zato imate <strong>pravo na povrat u roku od 30 dana</strong>. Ako niste potpuno zadovoljni, vratit ćemo vam novac.</p>
        <p class="nlc-big">Besplatna dostava za narudžbe iznad 70 €.</p>
      </div>
    </div>
  </div>
</section>

<style>
/* NORIKS stil (predloga why-grillbasket.php / why-hands.php): oznaka + naslov z ležečim poudarkom, slika ob
   besedilu, izmenjujoča ozadja in strani. Paleta izdelka: rdeča #b8282e (rdeči detajli ruksaka), temno #1d1b1c,
   nevtralno toplo sivo ozadje #f5f2f0. */
.nlc-sec { padding: 60px 0; font-family: 'Poppins', system-ui, -apple-system, 'Segoe UI', Roboto, Arial, sans-serif; color: #1d1b1c; background: #fff; }
.nlc-sec * { box-sizing: border-box; }
.nlc-tint { background: #f5f2f0; }
.nlc-wrap { width: 100%; max-width: 1200px; margin: 0 auto; padding: 0 24px; }
.nlc-wrap--narrow { max-width: 900px; }
.nlc-c { text-align: center; }
.nlc-sec h2, .nlc-sec h3 { font-family: inherit; text-transform: none; letter-spacing: 0; }
.nlc-kicker, .nlc-copy p.nlc-kicker { font-size: 12.5px; line-height: 1.4; font-weight: 700; letter-spacing: .14em; text-transform: uppercase; color: #b8282e; margin: 0 0 10px; }
.nlc-kicker .nlc-stars { letter-spacing: 1px; margin-right: 6px; }
.nlc-h2 { font-weight: 700; font-size: clamp(25px, 3.1vw, 36px); line-height: 1.2; margin: 0 0 18px; color: #1d1b1c; }
.nlc-h2 em, .nlc-h3 em { font-style: italic; color: #b8282e; }
.nlc-h3 { font-weight: 700; font-size: clamp(22px, 2.6vw, 30px); line-height: 1.25; margin: 0 0 16px; color: #1d1b1c; }
.nlc-sec img { display: block; width: 100%; height: auto; }
.nlc-lead { max-width: 760px; margin: 0 auto 28px; font-size: 16.5px; line-height: 1.7; color: #4a4446; }

/* slika ob besedilu */
.nlc-row2 { display: grid; grid-template-columns: 1fr 1fr; gap: 56px; align-items: center; }
.nlc-row2--rev .nlc-media { order: 2; }
.nlc-media > img { border-radius: 10px; box-shadow: 0 2px 4px rgba(29,27,28,.05), 0 14px 40px rgba(29,27,28,.10); max-width: 560px; margin: 0 auto; aspect-ratio: 1 / 1; object-fit: cover; background: #fff; }
.nlc-media > img.nlc-img--free { aspect-ratio: auto; object-fit: contain; }
.nlc-copy p { font-size: 16px; line-height: 1.7; color: #4a4446; margin: 0 0 14px; }
.nlc-copy p strong { color: #1d1b1c; font-weight: 600; }
.nlc-sec p.nlc-big { font-size: 19px; font-weight: 700; color: #1d1b1c; line-height: 1.45; margin-top: 6px; }

/* seznam s kljukicami */
.nlc-list { list-style: none; margin: 6px 0 0; padding: 0; }
.nlc-list li { position: relative; padding-left: 30px; margin: 0 0 9px; font-size: 15.5px; line-height: 1.55; color: #3a3436; }
.nlc-list li::before { content: "✓"; position: absolute; left: 0; top: 2px; width: 20px; height: 20px; border-radius: 50%; background: #b8282e; color: #fff; font-size: 11px; font-weight: 800; line-height: 20px; text-align: center; }
.nlc-list li strong { color: #1d1b1c; font-weight: 600; }

/* specifikacije */
.nlc-specs { margin: 40px auto 0; max-width: 1000px; background: #fff; border: 1px solid #e7dfdb; border-radius: 10px; padding: 22px 24px; box-shadow: 0 2px 10px rgba(29,27,28,.05); }
.nlc-sec:not(.nlc-tint) .nlc-specs { background: #faf8f7; }
.nlc-specs__title { font-size: 18px; font-weight: 700; margin: 0 0 14px; color: #1d1b1c; }
.nlc-specs__grid { display: grid; grid-template-columns: repeat(4, minmax(0, 1fr)); gap: 14px 22px; }
.nlc-spec { border-top: 3px solid #b8282e; padding-top: 10px; }
.nlc-spec--wide { grid-column: 1 / -1; }
.nlc-spec__k { display: block; font-size: 12px; font-weight: 700; letter-spacing: .1em; text-transform: uppercase; color: #b8282e; margin: 0 0 4px; }
.nlc-spec__v { display: block; font-size: 14.5px; line-height: 1.55; color: #3a3436; }
.nlc-mats { margin: 4px 0 0; padding-left: 18px; columns: 2; column-gap: 32px; }
.nlc-mats li { font-size: 14px; line-height: 1.55; color: #3a3436; margin: 0 0 5px; break-inside: avoid; }

/* koraki */
.nlc-steps { list-style: none; margin: 4px 0 8px; padding: 0; }
.nlc-steps li { display: grid; grid-template-columns: 42px 1fr; gap: 12px; align-items: start; padding: 12px 0; border-top: 1px solid #e7dfdb; margin: 0; }
.nlc-steps li:first-child { border-top: 0; padding-top: 2px; }
.nlc-steps__no { width: 38px; height: 38px; border-radius: 50%; background: #b8282e; color: #fff; font-size: 16px; font-weight: 700; line-height: 38px; text-align: center; }
.nlc-copy .nlc-steps p { margin: 6px 0 0; font-size: 16px; }

/* videi */
.nlc-row2--vids { grid-template-columns: 7fr 5fr; gap: 44px; }
.nlc-vids { display: grid; grid-template-columns: repeat(4, minmax(0, 1fr)); gap: 10px; }
.nlc-vid { border-radius: 10px; overflow: hidden; background: #1d1b1c; aspect-ratio: 9 / 16; box-shadow: 0 2px 10px rgba(29,27,28,.12); }
.nlc-vid video { display: block; width: 100%; height: 100%; object-fit: cover; }

/* pet kartic */
.nlc-five { display: grid; grid-template-columns: repeat(5, minmax(0, 1fr)); gap: 16px; }
.nlc-fcard { background: #fff; border: 1px solid #e7dfdb; border-radius: 10px; overflow: hidden; display: flex; flex-direction: column; box-shadow: 0 2px 10px rgba(29,27,28,.06); }
.nlc-sec:not(.nlc-tint) .nlc-fcard { background: #faf8f7; }
.nlc-fcard__img img { aspect-ratio: 1 / 1; object-fit: cover; }
.nlc-fcard__body { padding: 14px 16px 18px; }
.nlc-fcard__body p.nlc-fcard__tag { display: inline-block; background: #b8282e; color: #fff; border-radius: 999px; padding: 3px 11px; font-size: 11.5px; font-weight: 600; text-transform: uppercase; letter-spacing: .06em; margin: 0 0 8px; }
.nlc-fcard__body h3 { font-size: 16px; font-weight: 700; line-height: 1.35; color: #1d1b1c; margin: 0 0 6px; }
.nlc-fcard__body p { font-size: 14.5px; line-height: 1.6; color: #4a4446; margin: 0; }

/* mnenja */
.nlc-rv { display: grid; grid-template-columns: repeat(4, minmax(0, 1fr)); gap: 18px; align-items: start; }
.nlc-card { background: #fff; border: 1px solid #e7dfdb; border-radius: 10px; overflow: hidden; display: flex; flex-direction: column; box-shadow: 0 2px 10px rgba(29,27,28,.05); }
.nlc-sec:not(.nlc-tint) .nlc-card { background: #faf8f7; }
.nlc-card__img img { aspect-ratio: 4 / 5; object-fit: cover; }
.nlc-card__body { padding: 16px; }
.nlc-card__title { font-size: 16px; font-weight: 700; color: #1d1b1c; margin: 8px 0 4px; line-height: 1.35; }
.nlc-card__txt { font-size: 14.5px; line-height: 1.6; color: #3a3436; margin: 6px 0 10px; font-style: italic; }
.nlc-card__name { font-size: 13.5px; font-weight: 600; color: #1d1b1c; margin: 0; }

/* usporedba */
.nlc-cmp { margin: 8px auto 0; max-width: 680px; border-radius: 10px; overflow: hidden; border: 1px solid #e7dfdb; background: #fff; }
.nlc-cmp__row { display: grid; grid-template-columns: 2fr 1fr 1fr; align-items: center; border-top: 1px solid #efe8e4; }
.nlc-cmp__row:first-child { border-top: 0; }
.nlc-cmp__row > span { padding: 13px 8px; text-align: center; font-size: 14.5px; color: #4a4446; }
.nlc-cmp__row > span.nlc-cmp__lbl { text-align: left; padding-left: 18px; font-weight: 600; color: #1d1b1c; }
.nlc-cmp__head > span { font-size: 12.5px; font-weight: 700; text-transform: uppercase; letter-spacing: .06em; color: #6b6365; }
.nlc-cmp__row > span.nlc-cmp__us { background: #b8282e; color: #fff; }
.nlc-cmp__head > span.nlc-cmp__us { color: #fff; font-size: 14px; letter-spacing: .1em; }
.nlc-yes, .nlc-no { display: inline-block; width: 22px; height: 22px; border-radius: 50%; font-size: 12px; font-weight: 800; line-height: 22px; text-align: center; }
.nlc-cmp__us .nlc-yes { background: #fff; color: #2f9e5f; }
.nlc-no { background: #ece6e3; color: #8f8789; }

/* pečat 30 dana (HTML) */
.nlc-seal-wrap { display: flex; align-items: center; justify-content: center; min-height: 300px; }
.nlc-seal { width: 280px; height: 280px; border-radius: 50%; display: flex; align-items: center; justify-content: center;
  background: radial-gradient(circle at 35% 30%, #e0565b 0%, #b8282e 50%, #861a1f 100%);
  box-shadow: 0 0 0 10px #f1d4d4, 0 0 0 14px #b8282e, 0 18px 40px rgba(29,27,28,.18); text-align: center; }
.nlc-seal__in { width: 206px; height: 206px; border-radius: 50%; background: #1d1b1c; color: #fff;
  display: flex; flex-direction: column; align-items: center; justify-content: center; }
.nlc-seal__top, .nlc-seal__bot { font-size: 11px; font-weight: 700; letter-spacing: .12em; text-transform: uppercase; max-width: 150px; line-height: 1.3; color: #f3c9ca; }
.nlc-seal__num { font-size: 78px; font-weight: 800; line-height: 1; margin: 4px 0 0; color: #fff; }
.nlc-seal__days { font-size: 22px; font-weight: 700; letter-spacing: .12em; margin: 0 0 6px; }

/* ocjene */
.nlc-stars { color: #f2a516; letter-spacing: 1px; font-size: 15px; }
.nlc-stars__off { color: #dcd3cf; }
.nlc-ok { color: #2f9e5f; font-weight: 600; font-size: 12px; margin-left: 4px; font-style: normal; }

@media (max-width: 989px) {
  .nlc-row2 { gap: 32px; }
  .nlc-row2--vids { grid-template-columns: 1fr; }
  .nlc-five { grid-template-columns: repeat(3, minmax(0, 1fr)); }
  .nlc-rv { grid-template-columns: 1fr 1fr; }
  .nlc-specs__grid { grid-template-columns: 1fr 1fr; }
}
@media (max-width: 749px) {
  .nlc-sec { padding: 42px 0; }
  .nlc-wrap { padding: 0 16px; }
  .nlc-row2 { grid-template-columns: 1fr; gap: 24px; }
  .nlc-row2--rev .nlc-media { order: 0; }
  .nlc-vids { grid-template-columns: repeat(2, minmax(0, 1fr)); }
  .nlc-five { grid-template-columns: 1fr 1fr; gap: 12px; }
  .nlc-rv { gap: 12px; }
  .nlc-card__body, .nlc-fcard__body { padding: 12px; }
  .nlc-mats { columns: 1; }
  .nlc-cmp__row > span { padding: 10px 4px; font-size: 13px; }
  .nlc-cmp__row > span.nlc-cmp__lbl { padding-left: 10px; }
  .nlc-seal-wrap { min-height: 0; }
  .nlc-seal { width: 230px; height: 230px; }
  .nlc-seal__in { width: 170px; height: 170px; }
  .nlc-seal__num { font-size: 62px; }
}
@media (max-width: 480px) {
  .nlc-rv { grid-template-columns: 1fr; }
  .nlc-specs__grid { grid-template-columns: 1fr; }
}

/* galerija izdelka: sličice največ v 2 vrstah (5 na vrsto), ostale slike so dosegljive z drsenjem glavne slike */
.product_cat-orto-airtravel .flex-control-thumbs li:nth-child(n+11) { display: none !important; }

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
.woocommerce-product-details__short-description .nlc-tick {
  position: absolute !important; left: 0 !important; top: 1px !important;
  width: 21px; height: 21px; border-radius: 50%;
  background: #2f9e5f !important; color: #fff !important;
  font-size: 12px !important; font-weight: 800 !important; line-height: 21px !important;
  text-align: center !important; display: inline-block !important; }
.woocommerce-product-details__short-description p:first-of-type { font-size: 16px; line-height: 1.55; }
</style>
