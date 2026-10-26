<?php
/**
 * product-bottom: NORIKS SlingBag — putna torbica preko ramena 2.0 sa zaštitom od krađe (orto-slingbag).
 * Original: conceptglobal.co/products/travel-sling-bag-2-0 — vsebina in vrstni red 1:1 z originalom, oblika po NORIKS stilu
 * (predloga why-hoodiedress.php / why-therapillow.php / why-hands.php), privzeta topla rjava paleta NORIKS (#a9683f):
 *   1) zavihek "Description" v nakupni škatli (zgodba 2.0)            -> Sigurno nošenje bez ruku (slika ob besedilu)
 *   2) zavihek "Sizing & Capacity" + okno "Compare sizes" (3 slike)    -> Usporedite veličine (3 kartice Mini / Regular / Max,
 *      etiketa z imenom znamke v torbici retuširana na vseh treh slikah) + osobni predmet u zrakoplovu
 *   3) zavihek "Material"                                              -> Materijal (slika ob besedilu)
 *   4) "Worn around the globe" (8 fotografij)                          -> Nosi se diljem svijeta (8 fotografij)
 *   5) "Made with 500D Nylon and YKK® Zippers…" (media with text)      -> slika ob besedilu
 *   6) "WHAT'S NEW IN 2.0?" + okno "Compare 2.0 vs 1.0"                -> Što je novo u 2.0? (tabela ob sliki; značka
 *      "60 DAY money-back guarantee" s slike odstranjena, ime znamke v glavi tabele izpuščeno)
 *   7) hot spots "Travel Sling Bag 2.0 Mini" (3 točke)                 -> NORIKS SlingBag 2.0 Mini (3 oznake čez sliko, HR)
 *   8) Okendo "3,000 reviews", 4.7                                     -> Recenzije kupaca: 1081, ocena 4,7 + 5 mnenj
 * Izpusceno: pasica Halloween Sale z odstevalnikom, logotipi medijev (marquee), trak "Free shipping $90+ / 99-day money-back /
 * 2-Year warranty", "High Demand", 99-DAY GUARANTEE / EASY RETURNS, zavihek "Delivery & Returns" (velja NORIKS: 30 dana za
 * povrat, besplatna dostava iznad 70 €), "2.0 COLLECTION" (navzkrizna prodaja), noga trgovine.
 * FAQ (9) je v reviews.php ($slingbag_faq), mnenja v auto_reviews/HR_slingbag.php, opis/nega/tablica velicin v standardnih
 * harmonikah (meta.php) in modalu (size-chart-slingbag.php). Slike: img/slingbag/ (nsb-…).
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$nsb      = get_template_directory_uri() . '/img/slingbag/';
$nsb_path = get_template_directory() . '/img/slingbag/';
$nsb_img  = function( $file, $alt, $cls = '' ) use ( $nsb, $nsb_path ) {
  if ( ! $file || ! file_exists( $nsb_path . $file ) ) { return ''; }
  return '<img src="' . esc_url( $nsb . $file ) . '" alt="' . esc_attr( $alt ) . '" loading="eager"' . ( $cls ? ' class="' . esc_attr( $cls ) . '"' : '' ) . '>';
};
$nsb_stars = function( $n ) {
  $n = max( 0, min( 5, (int) $n ) );
  return '<span class="nsb-stars" aria-label="' . $n . ' od 5 zvjezdica">' . str_repeat( '★', $n ) . '<span class="nsb-stars__off">' . str_repeat( '★', 5 - $n ) . '</span></span>';
};

/* 2) usporedite veličine (okno "Compare sizes" + zavihek "Sizing & Capacity") */
$nsb_sizes = array(
  array( 'nsb-s02-mini.webp', 'Mini', '', 'Za osnovne stvari: ključeve, mobitel, putovnicu, sunčane naočale, kabel za punjenje i druge sitnice.', '19 × 14 × 4 cm' ),
  array( 'nsb-s02-regular.webp', 'Regular', 'Najprodavanija', 'Stane sve što i u Mini, plus veće stvari poput prijenosne baterije, debljeg novčanika ili čak male boce vode. Ima puno više mjesta, a ne djeluje glomazno.', '22 × 15 × 4 cm' ),
  array( 'nsb-s02-max.webp', 'Max', '', 'Stane tablet od 11", slušalice preko ušiju, knjiga ili bilježnica – i sve što stane u Mini ili Regular.', '28 × 19,5 × 6 cm' ),
);

/* 4) nosi se diljem svijeta (8 fotografij) */
$nsb_world = array(
  'nsb-s04-1.webp', 'nsb-s04-2.webp', 'nsb-s04-3.webp', 'nsb-s04-4.webp',
  'nsb-s04-5.webp', 'nsb-s04-6.webp', 'nsb-s04-7.webp', 'nsb-s04-8.webp',
);

/* 6) što je novo u 2.0? (stupci originala: 2.0 / 1.0; opisi iz oblačića originala) */
$nsb_cmp = array(
  array( 'Bolji materijali', 'Nadograđeno s 300D na 500D najlon: izdržljiviji, jači, otporniji na vodu i ljepšeg izgleda.', 'y', 'n' ),
  array( 'Skriveni stražnji džep', 'Džep za kartice, putovnicu i druge vrijedne stvari sa skrivenim patentnim zatvaračem i RFID zaštitom.', 'y', 'n' ),
  array( 'Glatki YKK patentni zatvarači', 'S novim povlakačima patentnih zatvarača.', 'y', 'n' ),
  array( 'Kopča s 3 točke koja se zaključava', 'Dodatni sloj zaštite.', 'y', 'n' ),
  array( 'Remen ojačan sajlom, otporan na rezanje', 'U remen smo dodali metalnu sajlu, a ostao je jednako udoban kao prije.', 'y', 'n' ),
  array( 'Zaštita od RFID krađe', 'Poboljšano u odnosu na 1.0 – blokira više frekvencija.', 'y', 'y' ),
  array( 'Zaključavanje patentnih zatvarača', '', 'y', 'y' ),
  array( 'Diskretan dizajn', '', 'y', 'y' ),
);

/* 7) oznake čez sliko (položaji % z originala, mobilna slika) */
$nsb_spots = array(
  array( 37, 70, 'Pametna zaštita od krađe', 'Vaše stvari ostaju sigurne uz kopču koja se zaključava, patentne zatvarače koji se zaključavaju i remen ojačan metalom.' ),
  array( 62, 14, 'Tanak profil', 'Stane sve što vam treba, a ne smeta kad vam ne treba.' ),
  array( 72, 75, 'Tkanine otporne na vremenske uvjete', 'Svestrane tkanine za svako vrijeme koje se uklapaju u vašu garderobu.' ),
);

/* 8) recenzije kupaca (Okendo 3,000 -> po NORIKS 1081, ocena 4,7 kot na originalu); imena lokalizirana */
$nsb_rv = array(
  array( 'Josip S.', 5, 'Odlična torbica', 'Uzeo sam Regular, a zapravo sam trebao uzeti veću jer je torbica stvarno korisna, pa na kraju nosite sve više stvari. Kvalitetno je izrađena i itekako se isplati.' ),
  array( 'Siniša P.', 5, 'Odlična korisnička podrška', 'Odlična korisnička podrška, odličan proizvod.' ),
  array( 'Krešimir S.', 5, 'Izvrsna putna torbica – udobna, praktična i dobro osmišljena!', 'NORIKS SlingBag izvrstan je izbor za svakoga tko traži kompaktnu, udobnu i funkcionalnu putnu torbicu. Promišljen dizajn pruža dovoljno mjesta za svakodnevne potrepštine poput putovnice, novčanika, mobitela i drugih sitnica, a da ne djeluje glomazno. Pretinci olakšavaju organizaciju, a podesivi remen pruža udobno i sigurno pristajanje. Kvaliteta materijala i izrade je impresivna, a elegantan dizajn savršen je za putovanja, razgledavanje ili svakodnevnu upotrebu. Toplo preporučujem!' ),
  array( 'Davor N.', 5, 'Izvrstan proizvod', 'Torbica je izvrsna i kompaktna, idealna za kraća putovanja po gradovima i u javnom prijevozu. Vjerojatno ću kupiti i srednju veličinu za putovanja u inozemstvo.' ),
  array( 'Josipa D.', 5, 'Putna torbica', 'Obožavam je. Odlična za putovanja. Baš prave veličine.' ),
);

$nsb_n = 0; // števec sekcij za izmenična ozadja
$nsb_cls = function() use ( &$nsb_n ) { $nsb_n++; return ( $nsb_n % 2 ) ? ' nsb-tint' : ''; };
$nsb_mark = function( $v ) {
  return ( 'y' === $v ) ? '<span class="nsb-yes" aria-label="da">✓</span>' : '<span class="nsb-no" aria-label="ne">✕</span>';
};
?>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap">

<!-- 1) SIGURNO NOŠENJE BEZ RUKU (zavihek "Description") — slika ob besedilu -->
<section class="nsb-sec<?php echo $nsb_cls(); ?>">
  <div class="nsb-wrap">
    <div class="nsb-row2">
      <div class="nsb-media"><?php echo $nsb_img( 'nsb-s01-opis.webp', 'Muškarac sprema mobitel u torbicu NORIKS SlingBag preko ramena' ); ?></div>
      <div class="nsb-copy">
        <p class="nsb-kicker">NORIKS SlingBag 2.0</p>
        <h2 class="nsb-h2">Sigurno i praktično nošenje <em>bez ruku, kamo god išli</em></h2>
        <p>Kad smo predstavili prvu putnu torbicu preko ramena, znali smo da imamo nešto posebno. No nakon što smo čuli tisuće kupaca diljem svijeta, znali smo da je možemo učiniti još boljom.</p>
        <p>Rekli ste nam da torbica služi posvuda – ne samo na putovanjima, nego i u teretani, u obavljanju poslova, na planinarenju i na putu na posao. Postala je prvi izbor za <strong>uredno i dostupno nošenje osnovnih stvari</strong>, bez glomaznog ruksaka i bez punih džepova. Neki su od vas ipak željeli više izdržljivosti, bolju sigurnost i kvalitetnije materijale. Zato smo se vratili za stol za crtanje.</p>
        <ul class="nsb-ticks">
          <li><strong>500D najlonska tkanina</strong> – isti materijal kao u vrhunskoj opremi za prirodu: čvršća, otpornija na vremenske uvjete i izrađena da traje godinama, a ne mjesecima.</li>
          <li><strong>Remen s unutarnjom čeličnom sajlom</strong> – džepari danas ne samo kradu iz džepova, nego i režu i grabe. Vaš remen ne mogu prerezati.</li>
          <li><strong>Sustav zaključavanja s 3 točke</strong> – umjesto stare plastične kopče, koja pod pritiskom ne puca.</li>
          <li><strong>Skriveni stražnji džep</strong> uz tijelo za gotovinu i kartice, <strong>YKK patentni zatvarači</strong> posvuda, poboljšana <strong>RFID zaštita</strong> i <strong>kopča za ključeve</strong> unutra.</li>
        </ul>
        <p>Bilo da istražujete Europu, hodate stazama, kupujete namirnice ili vam samo trebaju slobodne ruke, NORIKS SlingBag 2.0 drži vaše osnovne stvari <strong>organiziranima, zaštićenima i odmah dostupnima</strong>.</p>
        <p class="nsb-big">Poslušali smo vas. Hvala što ste nas potaknuli da je učinimo boljom.</p>
      </div>
    </div>
  </div>
</section>

<!-- 2) USPOREDITE VELIČINE (zavihek "Sizing & Capacity" + okno "Compare sizes") — 3 kartice -->
<section class="nsb-sec<?php echo $nsb_cls(); ?>">
  <div class="nsb-wrap">
    <p class="nsb-kicker nsb-c">Veličine i kapacitet</p>
    <h2 class="nsb-h2 nsb-c">Usporedite <em>veličine</em></h2>
    <p class="nsb-lead nsb-c"><strong>Jedna veličina za sve.</strong> Podesivi remen dug je najviše <strong>130 cm</strong> i pristaje svakoj građi. Sve veličine uklapaju se u ograničenja za osobni predmet velikih zrakoplovnih kompanija. Poboljšan kapacitet.</p>
    <div class="nsb-sizes">
      <?php foreach ( $nsb_sizes as $s ) : ?>
      <article class="nsb-size">
        <div class="nsb-size__img"><?php echo $nsb_img( $s[0], 'NORIKS SlingBag ' . $s[1] . ' na tijelu – što stane u torbicu' ); ?></div>
        <div class="nsb-size__body">
          <h3><?php echo esc_html( $s[1] ); ?><?php if ( $s[2] ) : ?> <span class="nsb-size__tag"><?php echo esc_html( $s[2] ); ?></span><?php endif; ?></h3>
          <p><?php echo esc_html( $s[3] ); ?></p>
          <dl class="nsb-size__dim">
            <div><dt>Visina × širina × dubina</dt><dd><?php echo esc_html( $s[4] ); ?></dd></div>
            <div><dt>Podesivi remen</dt><dd>najviše 130 cm</dd></div>
          </dl>
        </div>
      </article>
      <?php endforeach; ?>
    </div>
    <div class="nsb-air">
      <p class="nsb-air__h">✈ Prikladna kao osobni predmet u zrakoplovu</p>
      <p>Sve tri veličine uklapaju se u besplatna ograničenja za osobni predmet ispod sjedala velikih zrakoplovnih kompanija, uključujući <strong>Ryanair</strong> (40 × 30 × 20 cm), <strong>easyJet</strong> (45 × 36 × 20 cm), <strong>United</strong> (43 × 25 × 22 cm) i <strong>American Airlines</strong> (45 × 35 × 20 cm).</p>
    </div>
  </div>
</section>

<!-- 3) MATERIJAL (zavihek "Material") — slika ob besedilu -->
<section class="nsb-sec<?php echo $nsb_cls(); ?>">
  <div class="nsb-wrap">
    <div class="nsb-row2 nsb-row2--rev">
      <div class="nsb-media"><?php echo $nsb_img( 'nsb-s03-materijal.webp', 'Maslinasto zelena torbica NORIKS SlingBag od 500D najlona s YKK patentnim zatvaračem' ); ?></div>
      <div class="nsb-copy">
        <p class="nsb-kicker">Materijal</p>
        <h2 class="nsb-h2">Izrađena da <em>štiti ono što je važno</em></h2>
        <ul class="nsb-ticks">
          <li><strong>500D najlonska tkanina</strong></li>
          <li><strong>YKK® patentni zatvarači</strong></li>
          <li><strong>Tkanina koja blokira RFID</strong></li>
        </ul>
        <p>Naše su torbice podstavljene naprednom tkaninom koja blokira RFID i čuva vaše osobne podatke gdje god bili. Uz površinski otpor od samo <strong>0,022 – 0,047 Ω</strong> i izdržljivu gramaturu od <strong>75 g/m²</strong>, ovaj materijal stvara pouzdan štit od neovlaštenog RFID skeniranja.</p>
        <p class="nsb-big">Lagana, a učinkovita – vaše kreditne kartice, putovnica i osobna iskaznica zaštićene su od digitalne krađe.</p>
      </div>
    </div>
  </div>
</section>

<!-- 4) NOSI SE DILJEM SVIJETA ("Worn around the globe") — 8 fotografij -->
<section class="nsb-sec<?php echo $nsb_cls(); ?>">
  <div class="nsb-wrap">
    <p class="nsb-kicker nsb-c">Na putovanjima i svaki dan</p>
    <h2 class="nsb-h2 nsb-c">Nosi se <em>diljem svijeta</em></h2>
    <div class="nsb-world">
      <?php foreach ( $nsb_world as $w ) : ?>
      <div class="nsb-world__item"><?php echo $nsb_img( $w, 'Kupci nose torbicu NORIKS SlingBag na putovanjima i u svakodnevnom životu' ); ?></div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- 5) 500D NAJLON I YKK® ZATVARAČI ("Made with 500D Nylon and YKK® Zippers…") — slika ob besedilu -->
<section class="nsb-sec<?php echo $nsb_cls(); ?>">
  <div class="nsb-wrap">
    <div class="nsb-row2">
      <div class="nsb-media"><?php echo $nsb_img( 'nsb-s05-najlon.webp', 'Izbliza: tkanina od 500D najlona torbice NORIKS SlingBag' ); ?></div>
      <div class="nsb-copy">
        <p class="nsb-kicker">Bolji izgled i bolje performanse u svim uvjetima</p>
        <h2 class="nsb-h2">Izrađena od 500D najlona i YKK® zatvarača za <em>veću izdržljivost i otpornost na vodu</em></h2>
        <p>Rekli ste nam da torbica služi posvuda – ne samo na putovanjima, nego i u teretani, u obavljanju poslova, na planinarenju i na putu na posao.</p>
        <p>Izradili smo je iznova od <strong>500D najlona</strong>, istog materijala kao u vrhunskoj opremi za prirodu. Čvršća je, otpornija na vremenske uvjete i izrađena da traje godinama, a ne mjesecima.</p>
        <p>Remen ima <strong>unutarnju čeličnu sajlu</strong>, jer džepari danas ne samo kradu iz džepova, nego i režu i grabe. Zato smo se pobrinuli da vaš remen ne mogu prerezati. Stara plastična kopča? Nema je. Verzija 2.0 ima <strong>sustav zaključavanja s 3 točke</strong> koji stvarno drži torbicu sigurnom i ne puca pod pritiskom.</p>
        <p>Dodali smo <strong>skriveni stražnji džep</strong> uz tijelo za gotovinu, kartice ili bilo što što želite potpuno skloniti od pogleda. YKK® patentni zatvarači posvuda. Poboljšana RFID zaštita. I kopča za ključeve unutra, da ne morate kopati svaki put kad nešto otključavate.</p>
        <p class="nsb-big">Vaše osnovne stvari – organizirane, zaštićene i odmah dostupne.</p>
      </div>
    </div>
  </div>
</section>

<!-- 6) ŠTO JE NOVO U 2.0? ("WHAT'S NEW IN 2.0?" + okno "Compare 2.0 vs 1.0") — tabela ob sliki -->
<section class="nsb-sec<?php echo $nsb_cls(); ?>">
  <div class="nsb-wrap">
    <div class="nsb-row2 nsb-row2--rev nsb-row2--top">
      <div class="nsb-media"><?php echo $nsb_img( 'nsb-s06-usporedba.webp', 'Crna torbica NORIKS SlingBag 2.0 s remenom i kopčom', 'nsb-img--free' ); ?></div>
      <div class="nsb-copy">
        <p class="nsb-kicker">Usporedba 2.0 i 1.0</p>
        <h2 class="nsb-h2">Što je novo <em>u verziji 2.0?</em></h2>
        <div class="nsb-cmp" role="table" aria-label="Usporedba NORIKS SlingBag 2.0 i prethodne verzije 1.0">
          <div class="nsb-cmp__row nsb-cmp__head" role="row">
            <span role="columnheader">Značajke</span>
            <span role="columnheader" class="nsb-cmp__us">SlingBag 2.0</span>
            <span role="columnheader">Verzija 1.0</span>
          </div>
          <?php foreach ( $nsb_cmp as $r ) : ?>
          <div class="nsb-cmp__row" role="row">
            <span role="cell" class="nsb-cmp__lbl"><?php echo esc_html( $r[0] ); ?><?php if ( $r[1] ) : ?><small><?php echo esc_html( $r[1] ); ?></small><?php endif; ?></span>
            <span role="cell" class="nsb-cmp__us"><?php echo $nsb_mark( $r[2] ); ?></span>
            <span role="cell"><?php echo $nsb_mark( $r[3] ); ?></span>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- 7) NORIKS SlingBag 2.0 MINI (hot spots) — 3 oznake čez sliko -->
<section class="nsb-sec<?php echo $nsb_cls(); ?>">
  <div class="nsb-wrap">
    <div class="nsb-row2">
      <div class="nsb-media">
        <div class="nsb-spots">
          <?php echo $nsb_img( 'nsb-s07-mini.webp', 'NORIKS SlingBag 2.0 Mini na prsima, ruka zakopčava kopču s 3 točke' ); ?>
          <?php foreach ( $nsb_spots as $i => $p ) : ?>
          <span class="nsb-spot" style="left:<?php echo (int) $p[0]; ?>%;top:<?php echo (int) $p[1]; ?>%;" title="<?php echo esc_attr( $p[2] ); ?>"><?php echo (int) $i + 1; ?></span>
          <?php endforeach; ?>
        </div>
      </div>
      <div class="nsb-copy">
        <p class="nsb-kicker">Detalji</p>
        <h2 class="nsb-h2">NORIKS SlingBag 2.0 <em>Mini</em></h2>
        <ol class="nsb-points">
          <?php foreach ( $nsb_spots as $p ) : ?>
          <li><strong><?php echo esc_html( $p[2] ); ?></strong><span><?php echo esc_html( $p[3] ); ?></span></li>
          <?php endforeach; ?>
        </ol>
      </div>
    </div>
  </div>
</section>

<!-- 8) RECENZIJE KUPACA (Okendo 3,000 -> 1081 po NORIKS, ocena 4,7) -->
<section class="nsb-sec<?php echo $nsb_cls(); ?>">
  <div class="nsb-wrap">
    <p class="nsb-kicker nsb-c">Recenzije kupaca</p>
    <h2 class="nsb-h2 nsb-c">Što kažu <em>naši kupci</em></h2>
    <div class="nsb-score">
      <span class="nsb-score__num">4,7</span>
      <?php echo $nsb_stars( 5 ); ?>
      <span class="nsb-score__txt">Na temelju <strong>1081</strong> recenzije</span>
    </div>
    <div class="nsb-reviews">
      <?php foreach ( $nsb_rv as $r ) : ?>
      <article class="nsb-card">
        <div class="nsb-card__body">
          <?php echo $nsb_stars( $r[1] ); ?>
          <p class="nsb-card__title"><?php echo esc_html( $r[2] ); ?></p>
          <p class="nsb-card__txt">„<?php echo esc_html( $r[3] ); ?>”</p>
          <p class="nsb-card__name"><?php echo esc_html( $r[0] ); ?> <span class="nsb-ok">✓ Potvrđena kupnja</span></p>
        </div>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<style>
/* NORIKS stil (predloga why-hoodiedress.php / why-therapillow.php / why-hands.php): oznaka + naslov z ležečim poudarkom,
   slika ob besedilu, izmenjujoča ozadja in strani. Privzeta topla rjava paleta NORIKS (#a9683f). */
.nsb-sec { padding: 60px 0; font-family: 'Poppins', system-ui, -apple-system, 'Segoe UI', Roboto, Arial, sans-serif; color: #231d19; background: #fff; }
.nsb-sec * { box-sizing: border-box; }
.nsb-tint { background: #f7f0e8; }
.nsb-wrap { width: 100%; max-width: 1200px; margin: 0 auto; padding: 0 24px; }
.nsb-c { text-align: center; }
.nsb-sec h2, .nsb-sec h3 { font-family: inherit; text-transform: none; letter-spacing: 0; }
.nsb-kicker, .nsb-copy p.nsb-kicker { font-size: 12.5px; line-height: 1.4; font-weight: 700; letter-spacing: .14em; text-transform: uppercase; color: #a9683f; margin: 0 0 10px; }
.nsb-h2 { font-weight: 700; font-size: clamp(25px, 3.1vw, 36px); line-height: 1.2; margin: 0 0 16px; color: #231d19; }
.nsb-h2 em { font-style: italic; color: #a9683f; }
.nsb-sec img { display: block; width: 100%; height: auto; }
.nsb-lead { max-width: 780px; margin: 0 auto 30px; font-size: 16px; line-height: 1.7; color: #4a403a; }
.nsb-lead strong { color: #231d19; font-weight: 600; }

/* slika ob besedilu */
.nsb-row2 { display: grid; grid-template-columns: 1fr 1fr; gap: 56px; align-items: center; }
.nsb-row2--top { align-items: start; }
.nsb-row2--rev .nsb-media { order: 2; }
.nsb-media > img, .nsb-spots > img { border-radius: 10px; box-shadow: 0 2px 4px rgba(40,25,15,.05), 0 14px 40px rgba(40,25,15,.10); max-width: 560px; margin: 0 auto; aspect-ratio: 1 / 1; object-fit: cover; }
.nsb-media > img.nsb-img--free { background: #f2f2f2; }
.nsb-copy p { font-size: 16px; line-height: 1.7; color: #4a403a; margin: 0 0 14px; }
.nsb-copy p strong { color: #231d19; font-weight: 600; }
.nsb-sec p.nsb-big { font-size: 19px; font-weight: 700; color: #231d19; line-height: 1.45; margin-top: 6px; }
.nsb-ticks { list-style: none; margin: 4px 0 16px; padding: 0; }
.nsb-ticks li { position: relative; padding-left: 32px; margin: 0 0 10px; font-size: 15.5px; line-height: 1.6; color: #4a403a; }
.nsb-ticks li strong { color: #231d19; font-weight: 600; }
.nsb-ticks li::before { content: "✓"; position: absolute; left: 0; top: 2px; width: 22px; height: 22px; border-radius: 50%; background: #a9683f; color: #fff; font-size: 12px; font-weight: 800; line-height: 22px; text-align: center; }

/* veličine */
.nsb-sizes { display: grid; grid-template-columns: repeat(3, minmax(0, 1fr)); gap: 20px; }
.nsb-size { background: #fff; border: 1px solid #ead9c9; border-radius: 10px; overflow: hidden; box-shadow: 0 2px 10px rgba(40,25,15,.06); display: flex; flex-direction: column; }
.nsb-size__img img { aspect-ratio: 1 / 1; object-fit: cover; }
.nsb-size__body { padding: 18px 20px 20px; }
.nsb-size__body h3 { font-size: 20px; font-weight: 700; color: #231d19; margin: 0 0 8px; line-height: 1.3; }
.nsb-size__tag { display: inline-block; vertical-align: middle; background: #a9683f; color: #fff; border-radius: 999px; padding: 3px 11px; font-size: 12px; font-weight: 600; margin-left: 4px; }
.nsb-size__body p { font-size: 15px; line-height: 1.6; color: #4a403a; margin: 0 0 12px; }
.nsb-size__dim { margin: 0; border-top: 1px solid #ead9c9; }
.nsb-size__dim > div { display: flex; justify-content: space-between; gap: 10px; padding: 8px 0; border-bottom: 1px solid #f0e4d8; font-size: 14px; }
.nsb-size__dim dt { color: #6b5f56; }
.nsb-size__dim dd { margin: 0; font-weight: 700; color: #231d19; white-space: nowrap; }
.nsb-air { max-width: 860px; margin: 28px auto 0; background: #fff; border: 1px solid #ead9c9; border-left: 4px solid #a9683f; border-radius: 10px; padding: 18px 22px; }
.nsb-air p { font-size: 15px; line-height: 1.65; color: #4a403a; margin: 0; }
.nsb-air p strong { color: #231d19; }
.nsb-sec p.nsb-air__h { font-weight: 700; color: #231d19; font-size: 16.5px; margin: 0 0 6px; }

/* nosi se diljem svijeta */
.nsb-world { display: grid; grid-template-columns: repeat(4, minmax(0, 1fr)); gap: 14px; }
.nsb-world__item img { aspect-ratio: 1 / 1; object-fit: cover; border-radius: 10px; box-shadow: 0 2px 10px rgba(40,25,15,.08); }

/* usporedba */
.nsb-cmp { margin: 8px 0 0; border-radius: 10px; overflow: hidden; border: 1px solid #ead9c9; background: #fff; }
.nsb-cmp__row { display: grid; grid-template-columns: 2.2fr 1fr 1fr; align-items: center; border-top: 1px solid #f0e4d8; }
.nsb-cmp__row:first-child { border-top: 0; }
.nsb-cmp__row > span { padding: 12px 8px; text-align: center; font-size: 14px; color: #4a403a; align-self: stretch; display: flex; align-items: center; justify-content: center; }
.nsb-cmp__row > span.nsb-cmp__lbl { text-align: left; padding-left: 16px; font-weight: 600; color: #231d19; flex-direction: column; align-items: flex-start; justify-content: center; }
.nsb-cmp__lbl small { display: block; font-weight: 400; font-size: 12.5px; line-height: 1.45; color: #6b5f56; margin-top: 3px; }
.nsb-cmp__head > span { font-size: 12.5px; font-weight: 700; text-transform: uppercase; letter-spacing: .06em; color: #6b5f56; }
.nsb-cmp__row > span.nsb-cmp__us { background: #a9683f; color: #fff; }
.nsb-cmp__head > span.nsb-cmp__us { color: #fff; }
.nsb-yes, .nsb-no { display: inline-block; width: 22px; height: 22px; border-radius: 50%; font-size: 12px; font-weight: 800; line-height: 22px; text-align: center; }
.nsb-yes { background: #2f9e5f; color: #fff; }
.nsb-cmp__us .nsb-yes { background: #fff; color: #a9683f; }
.nsb-no { background: #eee4da; color: #9a8f86; }

/* oznake čez sliko */
.nsb-spots { position: relative; max-width: 560px; margin: 0 auto; }
.nsb-spot { position: absolute; transform: translate(-50%, -50%); width: 32px; height: 32px; border-radius: 50%; background: #fff; color: #a9683f; border: 3px solid #a9683f; font-size: 14px; font-weight: 700; line-height: 26px; text-align: center; box-shadow: 0 0 0 6px rgba(255,255,255,.35), 0 4px 12px rgba(0,0,0,.25); }
.nsb-points { list-style: none; counter-reset: nsb; margin: 6px 0 0; padding: 0; }
.nsb-points li { counter-increment: nsb; position: relative; padding-left: 46px; margin: 0 0 18px; }
.nsb-points li::before { content: counter(nsb); position: absolute; left: 0; top: 0; width: 32px; height: 32px; border-radius: 50%; background: #a9683f; color: #fff; font-size: 14px; font-weight: 700; line-height: 32px; text-align: center; }
.nsb-points strong { display: block; font-size: 17px; color: #231d19; margin: 3px 0 4px; }
.nsb-points span { display: block; font-size: 15.5px; line-height: 1.6; color: #4a403a; }

/* ocjene i mnenja */
.nsb-stars { color: #f2a516; letter-spacing: 1px; font-size: 15px; }
.nsb-stars__off { color: #e6ddd4; }
.nsb-score { display: flex; justify-content: center; align-items: center; gap: 12px; margin: 0 0 26px; flex-wrap: wrap; }
.nsb-score__num { font-size: 28px; font-weight: 700; color: #231d19; }
.nsb-score .nsb-stars { font-size: 20px; }
.nsb-score__txt { font-size: 14.5px; color: #6b5f56; }
.nsb-score__txt strong { color: #231d19; }
.nsb-reviews { columns: 3; column-gap: 18px; }
.nsb-reviews > .nsb-card { break-inside: avoid; margin-bottom: 18px; }
.nsb-card { background: #fff; border: 1px solid #ead9c9; border-radius: 10px; overflow: hidden; display: flex; flex-direction: column; box-shadow: 0 2px 10px rgba(40,25,15,.05); }
.nsb-sec:not(.nsb-tint) .nsb-card { background: #f7f0e8; }
.nsb-card__body { padding: 18px; }
.nsb-sec p.nsb-card__title { font-size: 15px; font-weight: 700; color: #231d19; margin: 8px 0 6px; line-height: 1.35; }
.nsb-card__txt { font-size: 14.5px; line-height: 1.6; color: #3b322c; margin: 0 0 10px; font-style: italic; }
.nsb-card__name { font-size: 13.5px; font-weight: 600; color: #231d19; margin: 0; }
.nsb-ok { color: #2f9e5f; font-weight: 600; font-size: 12px; margin-left: 4px; font-style: normal; }

@media (max-width: 989px) {
  .nsb-row2 { gap: 32px; }
  .nsb-sizes { gap: 14px; }
  .nsb-world { grid-template-columns: repeat(4, minmax(0, 1fr)); gap: 10px; }
  .nsb-reviews { columns: 2; }
}
@media (max-width: 749px) {
  .nsb-sec { padding: 42px 0; }
  .nsb-wrap { padding: 0 16px; }
  .nsb-row2 { grid-template-columns: 1fr; gap: 24px; }
  .nsb-row2--rev .nsb-media { order: 0; }
  .nsb-sizes { grid-template-columns: 1fr; }
  .nsb-world { grid-template-columns: repeat(2, minmax(0, 1fr)); }
  .nsb-cmp__row { grid-template-columns: 1.8fr 1fr 1fr; }
  .nsb-cmp__row > span { padding: 10px 4px; font-size: 12.5px; }
  .nsb-cmp__row > span.nsb-cmp__lbl { padding-left: 10px; }
  .nsb-cmp__head > span { font-size: 10.5px; letter-spacing: .02em; }
  .nsb-spot { width: 28px; height: 28px; line-height: 22px; font-size: 13px; }
  .nsb-reviews { columns: 1; }
}

/* galerija izdelka: sličice največ v 2 vrstah (5 na vrsto), ostale slike so dosegljive z drsenjem glavne slike */
.product_cat-orto-slingbag .flex-control-thumbs li:nth-child(n+11) { display: none !important; }

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
.woocommerce-product-details__short-description .nsb-tick {
  position: absolute !important; left: 0 !important; top: 1px !important;
  width: 21px; height: 21px; border-radius: 50%;
  background: #2f9e5f !important; color: #fff !important;
  font-size: 12px !important; font-weight: 800 !important; line-height: 21px !important;
  text-align: center !important; display: inline-block !important; }
.woocommerce-product-details__short-description p:first-of-type { font-size: 16px; line-height: 1.55; }
</style>
