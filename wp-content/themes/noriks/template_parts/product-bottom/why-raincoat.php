<?php
/**
 * product-bottom: NORIKS Raincoat — kratka oversized kisna jakna s kapuljacom (orto-raincoat).
 * Original: puffit.com (STM-TEX One Size Short Oversized Rain Jacket) — vsebina in vrstni red 1:1
 * z zavihki nakupne skatle originala, oblika po NORIKS stilu (predloga why-hands.php / why-polo.php):
 *   1) Opis (video ob besedilu)
 *   2) Detalji — 5 vrstic slika ob besedilu (kapuljaca, manzete, podstava rukava, dzepi, nabrani rub)
 *   3) Kroj (oversized, jedna velicina, mjere modela)
 *   4) Tehnologija (vodootporna, otporna na mrlje i vjetar)
 *   5) Znacajke proizvoda
 *   6) Funkcionalne znacajke
 *   7) Materijali i njega
 *   8) Nase obecanje — dostava / isporuka / povrati (po NORIKS pogojih)
 *   9) Recenzije kupcev (preprosta mreza, brez drsnika)
 * NORIKS prodaja samo klasicno verzijo (15–25 °C), zato so primerjave s Fleece/Faux-fur verzijo izpuscene
 * (slike detajlov obrezane na klasicno polovico). "You may also like" je izpuscen (trgovinski modul).
 * Slike: img/raincoat/ (original, brez tuje znamke).
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$nrc      = get_template_directory_uri() . '/img/raincoat/';
$nrc_path = get_template_directory() . '/img/raincoat/';
$nrc_img  = function( $file, $alt, $cls = '' ) use ( $nrc, $nrc_path ) {
  if ( ! $file || ! file_exists( $nrc_path . $file ) ) { return ''; }
  return '<img src="' . esc_url( $nrc . $file ) . '" alt="' . esc_attr( $alt ) . '"' . ( $cls ? ' class="' . esc_attr( $cls ) . '"' : '' ) . ' loading="lazy">';
};
$nrc_stars = function( $n ) {
  $n = max( 0, min( 5, (int) $n ) );
  $out = '<span class="nrc-stars" aria-label="' . esc_attr( $n . ' od 5 zvjezdica' ) . '">';
  for ( $i = 1; $i <= 5; $i++ ) { $out .= '<i' . ( $i > $n ? ' class="is-off"' : '' ) . '>★</i>'; }
  return $out . '</span>';
};
$nrc_allowed = array( 'strong' => array(), 'em' => array(), 'br' => array() );

/* 2) Detalji — 5 slik originala (klasicna verzija), besedila iz "Details" + "Product Features" */
$nrc_details = array(
  array( 'slika' => 'rc-d1-kapuljaca.webp', 'oznaka' => 'Detalj 1 / 5',
    'naslov' => 'Kapuljača <em>sa širokim obodom</em>',
    'tekst'  => array( 'Pri ekstremnom vremenu <strong>štiti vas i od vjetra i od kiše</strong>.', 'Ekstra velik preklopivi obod kapuljače čuva lice, kosu i šminku od kiše.' ) ),
  array( 'slika' => 'rc-d2-manzete.webp', 'oznaka' => 'Detalj 2 / 5',
    'naslov' => 'Podesive manžete <em>s čičkom</em>',
    'tekst'  => array( 'Slobodno prilagodite širinu manžeta za <strong>veću udobnost i toplinu</strong>.' ) ),
  array( 'slika' => 'rc-d3-podstava.webp', 'oznaka' => 'Detalj 3 / 5',
    'naslov' => 'Mekana <em>podstava rukava</em>',
    'tekst'  => array( 'Glatka, mekana podstava s unutarnje strane rukava <strong>ugodna je na koži</strong>.' ) ),
  array( 'slika' => 'rc-d4-dzepovi.webp', 'oznaka' => 'Detalj 4 / 5',
    'naslov' => 'Bočni <em>džepovi</em>',
    'tekst'  => array( 'Prostrani džepovi sa strane za ruke, mobitel i sitnice.' ) ),
  array( 'slika' => 'rc-d5-rub.webp', 'oznaka' => 'Detalj 5 / 5',
    'naslov' => 'Nabrani <em>„bubble” rub</em>',
    'tekst'  => array( 'Stvara <strong>mekanu, oblikovanu siluetu</strong>.', 'Elastični rub daje suptilan oblik i nenametljiv izgled.' ) ),
);

/* 3–7) vrstice slika ob besedilu */
$nrc_rows = array(
  array( 'slika' => 'rc-15-tamnocrvena-otvorena.webp', 'oznaka' => 'Kroj',
    'naslov' => 'Oversized kroj — <em>jedna veličina</em>',
    'tekst'  => array(
      '<strong>Namjerno širok kroj</strong>, moderne i upečatljive siluete.',
      'Jedna veličina — osmišljena da odgovara veličinama <strong>EU 36–50</strong> (UK 8–22 / US 4–18).',
      '<strong>Model 1:</strong> visina 175 cm, grudi 81 cm, struk 66 cm, bokovi 96 cm, veličina haljine EU 36<br><strong>Model 2:</strong> visina 175 cm, grudi 89 cm (32C), struk 69 cm, bokovi 86 cm<br><strong>Model 3:</strong> visina 175 cm, grudi 89 cm (32C), struk 66 cm, bokovi 86 cm' ),
    'big'    => 'Duljina 60 cm · opseg grudi 155 cm · duljina rukava 75 cm.' ),
  array( 'slika' => 'rc-16-tamnocrvena-kapuljaca.webp', 'oznaka' => 'Tehnologija',
    'naslov' => 'Zaštita <em>po svakom vremenu</em>',
    'tekst'  => array(
      'Izrađena za <strong>pouzdanu zaštitu po svakom vremenu</strong> — spaja vodootpornost, otpornost na mrlje i vjetar te izdržljivost.',
      'Ostajete <strong>suhi, zaštićeni i udobni</strong> po kiši i promjenjivim vremenskim uvjetima.' ),
    'big'    => 'Vodootporna · otporna na mrlje · otporna na vjetar · izdržljiva.' ),
  array( 'slika' => 'rc-03-kapuljaca.webp', 'oznaka' => 'Značajke proizvoda',
    'naslov' => 'Lagana zaštita <em>za svaki dan</em>',
    'tekst'  => array(
      '<strong>Kapuljača sa širokim obodom</strong> — pri ekstremnom vremenu štiti vas od vjetra i kiše.',
      '<strong>Podesive manžete s čičkom</strong> — prilagodite širinu za veću udobnost i toplinu.',
      '<strong>Nabrani „bubble” rub</strong> — stvara mekanu, oblikovanu siluetu.',
      '<strong>Klasična verzija:</strong> udobnost od 15 °C do 25 °C, ventilacijski otvori ispod pazuha, opušten kroj.' ),
    'big'    => 'Lagana zaštita za svakodnevno nošenje.' ),
  array( 'slika' => 'rc-09-crna.webp', 'oznaka' => 'Funkcionalne značajke',
    'naslov' => 'Suha <em>i pod pljuskom</em>',
    'tekst'  => array(
      '<strong>Udobna toplina:</strong> od 15 °C do 25 °C.',
      '<strong>Vodootporna</strong> do 12.000 mm vodenog stupca.',
      '<strong>Otporna na mrlje.</strong>',
      '<strong>Otporna na vjetar.</strong>' ),
    'big'    => 'Za blage, kišne dane u proljeće, ljeto i jesen.' ),
  array( 'slika' => 'rc-05-dzep-mobitel.webp', 'oznaka' => 'Materijali i njega',
    'naslov' => '100 % poliester — <em>pažljiva njega</em>',
    'tekst'  => array(
      '✔ Samo ručno pranje, do 30 °C. ✔ Ne čistiti kemijski. ✔ Ne sušiti u sušilici. ✔ Ne prati u perilici.',
      'Pažljivo održavanje odjeće <strong>produljuje joj vijek trajanja</strong> i čuva okoliš.',
      '<strong>Za svakodnevnu svježinu:</strong> prozračite jaknu i nježno je očetkajte mekom krpom ili četkom za odjeću — tako štedite vodu i energiju.',
      '<strong>Za pranje:</strong> samo ručno, najviše 30 °C, s blagim deterdžentom.<br><strong>Izbjegavajte:</strong> izbjeljivače i sredstva za posvjetljivanje, kemijsko čišćenje, sušilicu i glačanje iznad 110 °C.' ),
    'big'    => 'Kvaliteta očuvana pažljivom njegom.' ),
);

/* 8) NORIKS pogoji namesto "Shipping / Delivery / Returns" (14-day returns, worldwide shipping) */
$nrc_trust = array(
  array( 'ikona' => 'rc-ik-dostava.webp', 'naslov' => 'Dostava', 'tekst' => 'Besplatna dostava za narudžbe iznad 70 €.' ),
  array( 'ikona' => 'rc-ik-30-dana.webp', 'naslov' => 'Isporuka', 'tekst' => 'Jasni rokovi i praćenje pošiljke.' ),
  array( 'ikona' => 'rc-ik-povrat.webp',  'naslov' => 'Povrati', 'tekst' => 'Pravo na povrat u roku od 30 dana.' ),
);

/* 9) recenzije 1:1 z originala (17 recenzij, ocene kot na originalu; odgovori trgovine izpusceni) */
$nrc_reviews = array(
  array( 'ime' => 'Caley Dimmock', 'ocjena' => 4, 'foto' => 'rc-rv-caley.webp', 'naslov' => '',
    'tekst' => 'Sveukupno sam prilično zadovoljna, ali moram reći da je PUNO kraća nego na slikama. Visoka sam 169 cm i inače nosim veličinu 36/38 (M). Da je imalo kraća, ne bih je mogla nositi.' ),
  array( 'ime' => 'Anonimno', 'ocjena' => 5, 'foto' => '', 'naslov' => '',
    'tekst' => 'Obožavam kakav je osjećaj u ovoj jakni. Prilično sam niska pa na meni izgleda malo smiješno, haha. Znala sam da je oversized, ali to je u redu. Baš mi je trebala nova jakna za jesen. Nadam se da će jednom biti i drugih veličina jer bih rado uzela još boja ♡ (molim vas) 😊' ),
  array( 'ime' => 'Rraber', 'ocjena' => 4, 'foto' => '', 'naslov' => '',
    'tekst' => 'Jakna je jako slatka, ali jedna veličina za sve meni ne odgovara. JAKO je široka, što mi nikako ne stoji. Djeluje kvalitetno izrađeno i toplo. Voljela bih je zamijeniti za drugi model.' ),
  array( 'ime' => 'Jessie Saumur', 'ocjena' => 1, 'foto' => '', 'naslov' => '',
    'tekst' => 'Vidjela sam ovu jaknu na Instagramu i bila sam jako uzbuđena, ali sam na kraju razočarana. Materijal je jeftin i tanji nego što sam mislila. Imam dojam da patentni zatvarač neće dugo izdržati, definitivno nije jedna veličina za sve, a i malo je kraća. Visoka sam 170 cm i nosim veličinu 42. Dostava je ipak bila brza.' ),
  array( 'ime' => 'Anastacia Hakala', 'ocjena' => 5, 'foto' => '', 'naslov' => '',
    'tekst' => 'Baš kao u oglasima i videima. Jako sam sretna što sam je kupila. Jako lijepa, ogromna kapuljača. Dobra kvaliteta. Stigla je za manje od tjedan dana.' ),
  array( 'ime' => 'Catb', 'ocjena' => 4, 'foto' => '', 'naslov' => '',
    'tekst' => 'Kvaliteta jakne je odlična. Jednu zvjezdicu oduzimam samo zato što je na meni, sa 157 cm i 49 kg, bila komično prevelika. Izgledala sam kao Missy Elliott 1997. (pravi fanovi sjetit će se napuhanog odijela iz spota „Supa Dupa Fly”).' ),
  array( 'ime' => 'Annelies', 'ocjena' => 5, 'foto' => '', 'naslov' => '',
    'tekst' => 'Divna jakna, vodootporna i otporna na vjetar. Visoki ovratnik i velika kapuljača brinu se da kroz kišu prođete potpuno suhi!' ),
  array( 'ime' => 'Zoe Weibel', 'ocjena' => 5, 'foto' => '', 'naslov' => 'Toplo preporučujem!',
    'tekst' => 'Izgleda točno kao na slikama — slatka je, moderna i savršeno oversized. Definitivno vrijedi svog novca, a kapuljača stvarno može potpuno pokriti glavu, što je super.' ),
  array( 'ime' => 'Lucie Bernhard', 'ocjena' => 4, 'foto' => '', 'naslov' => 'Odlična kišna jakna',
    'tekst' => 'Jakna mi se sviđa i dobro odbija kišu. Samo mi se, nažalost, materijal baš ne sviđa — potpuno je od poliestera pa je na dodir prilično jeftin. Inače lijepa jakna.' ),
  array( 'ime' => 'Val Parsons', 'ocjena' => 5, 'foto' => '', 'naslov' => 'Toplo preporučujem!',
    'tekst' => 'Točno je onakva kako je oglašeno i dobro pristaje.' ),
  array( 'ime' => 'Weronika S.', 'ocjena' => 5, 'foto' => '', 'naslov' => 'Toplo preporučujem!',
    'tekst' => 'Isprva sam bila skeptična, ali nakon što sam je isprobala, iskreno sam JAKO impresionirana ovom jaknom! Jedna veličina za sve, velika kapuljača i tkanina savršeno su izdržali cijeli tjedan pljuskova u Norveškoj. Doslovno mi je spasila život!' ),
  array( 'ime' => 'Sarah Alker', 'ocjena' => 5, 'foto' => '', 'naslov' => 'Fantastična!',
    'tekst' => 'Obožavam je.' ),
  array( 'ime' => 'Silvia Longo', 'ocjena' => 5, 'foto' => '', 'naslov' => 'Obožavam je!!',
    'tekst' => 'Brinula sam se zbog jedne veličine jer sam stvarno visoka (183 cm), ali izgleda odlično, savršeno pristaje i jednostavno obožavam kapuljaču!! Dostava je bila brža nego što sam očekivala, a korisnička podrška jako ljubazna i susretljiva. Hvala vam puno! Toplo preporučujem!' ),
  array( 'ime' => 'Teodor Danut Husarciuc', 'ocjena' => 5, 'foto' => '', 'naslov' => 'Nevjerojatna!', 'tekst' => '' ),
  array( 'ime' => 'Laivi Markii', 'ocjena' => 5, 'foto' => '', 'naslov' => 'Predivna!', 'tekst' => '' ),
  array( 'ime' => 'Siobhan Morgan', 'ocjena' => 5, 'foto' => '', 'naslov' => 'Spektakularna!',
    'tekst' => 'Jako volim ovu jaknu.' ),
  array( 'ime' => 'Erin Keeso', 'ocjena' => 5, 'foto' => '', 'naslov' => 'Savršena kišna jakna za ljeto',
    'tekst' => 'Pristaje uz svaku odjeću i drži vas potpuno suhima po pljusku ili vjetrovitoj kiši.' ),
);
$nrc_dist = array( 5 => array( 12, 71 ), 4 => array( 4, 24 ), 3 => array( 0, 0 ), 2 => array( 0, 0 ), 1 => array( 1, 6 ) );
?>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap">

<!-- 1) OPIS — video ob besedilu -->
<section class="nrc-sec nrc-tint">
  <div class="nrc-wrap">
    <div class="nrc-row2">
      <div class="nrc-media nrc-media--video">
        <video src="<?php echo esc_url( $nrc . 'rc-video.mp4' ); ?>" poster="<?php echo esc_url( $nrc . 'rc-video-poster.webp' ); ?>" muted autoplay loop playsinline preload="metadata"></video>
      </div>
      <div class="nrc-copy">
        <p class="nrc-kicker">Za nepredvidivo vrijeme</p>
        <h2 class="nrc-h3">Udobnost i samopouzdanje <em>po svakom vremenu</em></h2>
        <p>Osmišljena za <strong>udobnost i samopouzdanje po nepredvidivom vremenu</strong>. Oversized kroj daje zaštitnu siluetu koju je lako slojevito kombinirati, a <strong>ekstra velik preklopivi obod kapuljače</strong> štiti lice, kosu i šminku od kiše.</p>
        <p><strong>Elastični rub</strong> daje suptilan oblik i stvara nenametljiv izgled spreman i za gradske ulice i za svakodnevne avanture.</p>
        <p class="nrc-big">Klasična verzija — lagana zaštita za svakodnevno nošenje.</p>
      </div>
    </div>
  </div>
</section>

<!-- 2) DETALJI — 5 vrstic slika ob besedilu -->
<section class="nrc-sec">
  <div class="nrc-wrap">
    <p class="nrc-kicker nrc-c">Detalji</p>
    <h2 class="nrc-h2 nrc-c">Svaki detalj <em>ima svoju svrhu</em></h2>
    <?php foreach ( $nrc_details as $i => $row ) : ?>
    <div class="nrc-row2 nrc-row2--detail<?php echo ( 1 === $i % 2 ) ? ' nrc-row2--rev' : ''; ?>">
      <div class="nrc-media nrc-media--wide"><?php echo $nrc_img( $row['slika'], wp_strip_all_tags( $row['naslov'] ) ); ?></div>
      <div class="nrc-copy">
        <p class="nrc-kicker"><?php echo esc_html( $row['oznaka'] ); ?></p>
        <h3 class="nrc-h3"><?php echo wp_kses( $row['naslov'], $nrc_allowed ); ?></h3>
        <?php foreach ( $row['tekst'] as $p ) : ?><p><?php echo wp_kses( $p, $nrc_allowed ); ?></p><?php endforeach; ?>
      </div>
    </div>
    <?php endforeach; ?>
  </div>
</section>

<!-- 3–7) KROJ, TEHNOLOGIJA, ZNACAJKE, FUNKCIJE, NJEGA — strani in ozadja se izmenjujejo -->
<?php foreach ( $nrc_rows as $i => $row ) : ?>
<section class="nrc-sec<?php echo ( 0 === $i % 2 ) ? ' nrc-tint' : ''; ?>">
  <div class="nrc-wrap">
    <div class="nrc-row2<?php echo ( 1 === $i % 2 ) ? '' : ' nrc-row2--rev'; ?>">
      <div class="nrc-media"><?php echo $nrc_img( $row['slika'], wp_strip_all_tags( $row['naslov'] ) ); ?></div>
      <div class="nrc-copy">
        <p class="nrc-kicker"><?php echo esc_html( $row['oznaka'] ); ?></p>
        <h2 class="nrc-h3"><?php echo wp_kses( $row['naslov'], $nrc_allowed ); ?></h2>
        <?php foreach ( $row['tekst'] as $p ) : ?><p><?php echo wp_kses( $p, $nrc_allowed ); ?></p><?php endforeach; ?>
        <p class="nrc-big"><?php echo esc_html( $row['big'] ); ?></p>
      </div>
    </div>
  </div>
</section>
<?php endforeach; ?>

<!-- 8) NASE OBECANJE — NORIKS pogoji -->
<section class="nrc-sec nrc-sec--trust">
  <div class="nrc-wrap">
    <p class="nrc-kicker nrc-c">Naše obećanje</p>
    <h2 class="nrc-h2 nrc-c">Kupujte s povjerenjem — <em>vaše zadovoljstvo naš je prioritet</em></h2>
    <div class="nrc-trust">
      <?php foreach ( $nrc_trust as $t ) : ?>
      <div class="nrc-trust__item">
        <span class="nrc-trust__ico"><?php echo $nrc_img( $t['ikona'], '' ); ?></span>
        <h3><?php echo esc_html( $t['naslov'] ); ?></h3>
        <p><?php echo esc_html( $t['tekst'] ); ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- 9) RECENZIJE — preprosta mreza -->
<section class="nrc-sec nrc-tint nrc-sec--reviews">
  <div class="nrc-wrap">
    <p class="nrc-kicker nrc-c">Recenzije kupaca</p>
    <h2 class="nrc-h2 nrc-c">Što kažu <em>naši kupci</em></h2>
    <div class="nrc-summary">
      <div class="nrc-summary__score"><strong>4,5</strong><?php echo $nrc_stars( 5 ); ?><span>na temelju 17 recenzija</span></div>
      <div class="nrc-summary__bars">
        <?php foreach ( $nrc_dist as $z => $d ) : ?>
        <div class="nrc-bar"><span class="nrc-bar__lbl"><?php echo (int) $z; ?> ★</span><span class="nrc-bar__track"><span style="width:<?php echo (int) $d[1]; ?>%"></span></span><span class="nrc-bar__n"><?php echo (int) $d[0]; ?> (<?php echo (int) $d[1]; ?> %)</span></div>
        <?php endforeach; ?>
      </div>
    </div>
    <div class="nrc-revs">
      <?php foreach ( $nrc_reviews as $r ) : ?>
      <article class="nrc-rv">
        <?php if ( $r['foto'] ) : ?><div class="nrc-rv__photo"><?php echo $nrc_img( $r['foto'], 'Fotografija kupca — ' . $r['ime'] ); ?></div><?php endif; ?>
        <div class="nrc-rv__body">
          <?php echo $nrc_stars( $r['ocjena'] ); ?>
          <?php if ( $r['naslov'] ) : ?><p class="nrc-rv__title"><?php echo esc_html( $r['naslov'] ); ?></p><?php endif; ?>
          <?php if ( $r['tekst'] ) : ?><p class="nrc-rv__txt"><?php echo esc_html( $r['tekst'] ); ?></p><?php endif; ?>
          <p class="nrc-rv__name"><?php echo esc_html( $r['ime'] ); ?> <span>· Provjereni kupac</span></p>
        </div>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<style>
/* NORIKS stil (predloga why-hands.php / why-polo.php): oznaka + naslov z lezecim poudarkom, slika ob besedilu,
   izmenjujoca ozadja. Privzeta topla rjava paleta NORIKS (#a9683f). */
.nrc-sec { padding: 60px 0; font-family: 'Poppins', system-ui, -apple-system, 'Segoe UI', Roboto, Arial, sans-serif; color: #231d19; background: #fff; }
.nrc-sec * { box-sizing: border-box; }
.nrc-tint { background: #f7f2ec; }
.nrc-wrap { width: 100%; max-width: 1200px; margin: 0 auto; padding: 0 24px; }
.nrc-c { text-align: center; }
.nrc-sec h2, .nrc-sec h3 { font-family: inherit; text-transform: none; letter-spacing: 0; }
.nrc-kicker, .nrc-copy p.nrc-kicker { font-size: 12.5px; line-height: 1.4; font-weight: 700; letter-spacing: .14em; text-transform: uppercase; color: #a9683f; margin: 0 0 10px; }
.nrc-h2 { font-weight: 700; font-size: clamp(25px, 3.1vw, 36px); line-height: 1.2; margin: 0 0 30px; color: #231d19; }
.nrc-h2 em, .nrc-h3 em { font-style: italic; color: #a9683f; }
.nrc-h3 { font-weight: 700; font-size: clamp(22px, 2.6vw, 30px); line-height: 1.25; margin: 0 0 16px; color: #231d19; }
.nrc-sec img, .nrc-sec video { display: block; width: 100%; height: auto; }

/* slika ob besedilu */
.nrc-row2 { display: grid; grid-template-columns: 1fr 1fr; gap: 56px; align-items: center; }
.nrc-row2--rev .nrc-media { order: 2; }
.nrc-row2--detail + .nrc-row2--detail { margin-top: 40px; }
.nrc-media img, .nrc-media video { aspect-ratio: 1 / 1; object-fit: cover; border-radius: 4px; box-shadow: 0 2px 4px rgba(40,25,15,.05), 0 14px 40px rgba(40,25,15,.10); }
.nrc-media--video video { aspect-ratio: 3 / 4; max-width: 440px; margin: 0 auto; }
.nrc-media--wide img { aspect-ratio: auto; }
.nrc-copy p { font-size: 16px; line-height: 1.7; color: #4f443d; margin: 0 0 14px; }
.nrc-copy p strong { color: #231d19; font-weight: 600; }
.nrc-copy p.nrc-big { font-size: 19px; font-weight: 700; color: #231d19; line-height: 1.45; margin-top: 6px; }

/* zvjezdice */
.nrc-stars { display: inline-flex; gap: 3px; margin: 0 0 12px; vertical-align: middle; }
.nrc-stars i { font-style: normal; width: 22px; height: 22px; background: #00b67a; color: #fff; font-size: 15px; line-height: 22px; text-align: center; }
.nrc-stars i.is-off { background: #dcdce6; }

/* recenzije */
.nrc-summary { display: flex; align-items: center; justify-content: center; gap: 40px; margin: 0 0 34px; flex-wrap: wrap; }
.nrc-summary__score { display: flex; flex-direction: column; align-items: center; gap: 6px; }
.nrc-summary__score strong { font-size: 44px; line-height: 1; font-weight: 700; }
.nrc-summary__score .nrc-stars { margin: 0; }
.nrc-summary__score span { font-size: 14px; color: #4f443d; }
.nrc-summary__bars { min-width: 280px; }
.nrc-bar { display: flex; align-items: center; gap: 10px; font-size: 14px; color: #4f443d; margin: 0 0 6px; }
.nrc-bar__lbl { width: 30px; white-space: nowrap; }
.nrc-bar__track { flex: 1 1 auto; height: 9px; background: #e6dbd0; border-radius: 6px; overflow: hidden; min-width: 160px; }
.nrc-bar__track span { display: block; height: 100%; background: #a9683f; }
.nrc-bar__n { width: 64px; white-space: nowrap; }
.nrc-revs { display: grid; grid-template-columns: repeat(4, minmax(0, 1fr)); gap: 18px; align-items: start; }
.nrc-rv { background: #fff; border: 1px solid #ecdfd3; border-radius: 10px; overflow: hidden; }
.nrc-rv__photo img { aspect-ratio: 3 / 4; object-fit: cover; }
.nrc-rv__body { padding: 16px 18px 14px; }
.nrc-rv .nrc-stars { margin-bottom: 10px; }
.nrc-rv .nrc-stars i { width: 19px; height: 19px; font-size: 13px; line-height: 19px; }
.nrc-rv__title { font-size: 15px; font-weight: 700; color: #231d19; margin: 0 0 6px; }
.nrc-rv__txt { font-size: 14.5px; line-height: 1.6; color: #3a302a; margin: 0 0 12px; }
.nrc-rv__name { font-size: 13.5px; font-weight: 600; color: #231d19; margin: 0; border-top: 1px solid #ecdfd3; padding-top: 12px; }
.nrc-rv__name span { font-weight: 400; color: #2e7d32; }

/* NORIKS pogoji */
.nrc-sec--trust { padding: 52px 0; }
.nrc-trust { display: grid; grid-template-columns: repeat(3, minmax(0, 1fr)); gap: 24px; text-align: center; }
.nrc-trust__ico { display: block; width: 64px; height: 64px; margin: 0 auto 12px; }
.nrc-trust h3 { font-size: 17px; font-weight: 700; margin: 0 0 6px; color: #231d19; }
.nrc-trust p { font-size: 14.5px; line-height: 1.55; color: #4f443d; margin: 0; }

@media (max-width: 989px) {
  .nrc-revs { grid-template-columns: repeat(2, minmax(0, 1fr)); }
  .nrc-row2 { gap: 32px; }
}
@media (max-width: 749px) {
  .nrc-sec { padding: 42px 0; }
  .nrc-wrap { padding: 0 16px; }
  .nrc-revs { grid-template-columns: 1fr; gap: 14px; }
  .nrc-row2 { grid-template-columns: 1fr; gap: 24px; }
  .nrc-row2--rev .nrc-media { order: 0; }
  .nrc-trust { grid-template-columns: 1fr; gap: 22px; }
  .nrc-summary { gap: 22px; }
}

/* galerija izdelka: sličice največ v 2 vrstah (5 na vrsto), ostale slike so dosegljive z drsenjem glavne slike */
.product_cat-orto-raincoat .flex-control-thumbs li:nth-child(n+11) { display: none !important; }

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
.woocommerce-product-details__short-description .nrc-tick {
  position: absolute !important; left: 0 !important; top: 1px !important;
  width: 21px; height: 21px; border-radius: 50%;
  background: #2f9e5f !important; color: #fff !important;
  font-size: 12px !important; font-weight: 800 !important; line-height: 21px !important;
  text-align: center !important; display: inline-block !important; }
.woocommerce-product-details__short-description p:first-of-type { font-size: 16px; line-height: 1.55; }
</style>
