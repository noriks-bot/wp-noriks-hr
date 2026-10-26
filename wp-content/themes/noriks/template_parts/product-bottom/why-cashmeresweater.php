<?php
/**
 * product-bottom: NORIKS CashmereSweater — pulover od kašmira i svile opuštenog kroja (orto-cashmeresweater).
 * Original: meilleur-moment.com/products/womens-cashmere-silk-relaxed-pullover-sweater-5g813217 — vsebina in vrstni red
 * 1:1 z originalom, oblika po NORIKS stilu (predloga why-hoodiedress.php / why-hands.php), privzeta topla rjava paleta
 * NORIKS (#a9683f):
 *   1) zavihek "Description" (nakupna škatla)              -> Kašmir i svila: slika ob besedilu
 *   2) "COMPOSITION" + "CARE" (isti zavihek)               -> Sastav i njega: slika ob besedilu
 *      (74.7 % CASHMERE / 25.3 % MULBERRY SILK (EXCEPT RIB) 1:1; dry cleaning)
 *   3) "SIZE GUIDE" (Product / Body Measurement, nakupna škatla) -> Kroj i veličina: slika ob besedilu (jedna veličina M,
 *      US 6–10, mjere proizvoda 54 / 45 / 73 / 144 cm, odstupanje 2–3 cm)
 *   4) "Spotted in Meilleur Moment" (fotografije zajednice) -> Viđeno na našim kupcima: 2 fotografije s ovim puloverom ob
 *      besedilu (ostalih 5 fotografij prikazuje druge izdelke trgovine — kaput, kardigane, jaknu — zato izpuščene)
 *   5) Judge.me mnenja (286; 257/21/7/1/0)                 -> Recenzije kupaca: 1081 po NORIKS, zvezdice skalirane na 692
 *      (4,9) + 17 mnenj (11 s fotografijami kupcev)
 * Izpusceno: glava, pasica »Limited Time: Free Global Shipping & Easy Returns on $90+«, zavihek »Shipping & Return«
 * (velja NORIKS: besplatna dostava iznad 70 €, 30 dana za povrat), SPU koda, stavek o šljokicama (»Ivory white and
 * midnight navy« — teh barv izdelek nima), »You may also like«, »Recently viewed«, noga trgovine.
 * FAQ (original ga nima) je v reviews.php ($cashmeresweater_faq, po NORIKS pogojih), mnenja v
 * auto_reviews/HR_cashmeresweater.php, opis / nega / tablica velicin v standardnih harmonikah (meta.php) in modalu
 * (size-chart-cashmeresweater.php). Slike: img/cashmeresweater/ (ncm-…).
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$ncm      = get_template_directory_uri() . '/img/cashmeresweater/';
$ncm_path = get_template_directory() . '/img/cashmeresweater/';
$ncm_img  = function( $file, $alt, $cls = '' ) use ( $ncm, $ncm_path ) {
  if ( ! $file || ! file_exists( $ncm_path . $file ) ) { return ''; }
  return '<img src="' . esc_url( $ncm . $file ) . '" alt="' . esc_attr( $alt ) . '" loading="eager"' . ( $cls ? ' class="' . esc_attr( $cls ) . '"' : '' ) . '>';
};
$ncm_stars = function( $n ) {
  $n = max( 0, min( 5, (int) $n ) );
  return '<span class="ncm-stars" aria-label="' . $n . ' od 5 zvjezdica">' . str_repeat( '★', $n ) . '<span class="ncm-stars__off">' . str_repeat( '★', 5 - $n ) . '</span></span>';
};

/* 3) mjere proizvoda (Product Measurement originala, cm) */
$ncm_mjere = function_exists( 'noriks_cashmeresweater_sizes' ) ? noriks_cashmeresweater_sizes() : array();

/* 5) recenzije (Judge.me 286; 257/21/7/1/0 -> po NORIKS 1081, zvezdice skalirane na 692) */
$ncm_dist = array(
  array( 5, 90, 622 ),
  array( 4, 7, 51 ),
  array( 3, 2, 17 ),
  array( 2, 0, 2 ),
  array( 1, 0, 0 ),
);
$ncm_reviews = array(
  array( 'ime' => 'Suzana V.',   'z' => 5, 'img' => 'ncm-rv-01.webp', 'naslov' => 'Apsolutno obožavam ovaj pulover', 'tekst' => 'Apsolutno obožavam ovaj pulover. Nosila sam ga po cijeloj Italiji! Savršene je boje i težine.' ),
  array( 'ime' => 'Lana V.',     'z' => 5, 'img' => 'ncm-rv-02.webp', 'naslov' => 'Stvarno lijep, mekan i prozračan', 'tekst' => 'Stvarno lijep, mekan i prozračan.' ),
  array( 'ime' => 'Jelena R.',   'z' => 5, 'img' => 'ncm-rv-03.webp', 'naslov' => 'Obožavam ga', 'tekst' => 'Obožavam ga. Boja mi jako laska, super je mekan i tako sladak.' ),
  array( 'ime' => 'Anonimno',    'z' => 5, 'img' => 'ncm-rv-04.webp', 'naslov' => 'Tako lijep', 'tekst' => 'Tako lijep, mekan i izgleda skupocjeno!' ),
  array( 'ime' => 'Lijana Č.',   'z' => 4, 'img' => 'ncm-rv-05.webp', 'naslov' => 'Sviđa mi se kvaliteta ovog pulovera', 'tekst' => 'Sviđa mi se ukupna kvaliteta ovog pulovera. Dobro je osmišljen i lagan kao pero. Ne zauzima puno mjesta i odličan je za putovanja. Nažalost, pri dnu s prednje strane vidi se tanka vodoravna linija šava koju stalno primjećujem i pokušavam sakriti. Trebala sam se odmah javiti dok je etiketa još bila na njemu. Ipak ga mogu nositi.' ),
  array( 'ime' => 'Kristina F.', 'z' => 5, 'img' => 'ncm-rv-06.webp', 'naslov' => 'Fantastičan komad', 'tekst' => 'Tkanina je mekana, lagana i divna na koži. Savršen ljetni sloj. Boja je odlična, a takav je i lepršav kroj. Obožavam ga i razmišljam da kupim još jedan.' ),
  array( 'ime' => 'Anonimno',    'z' => 5, 'img' => 'ncm-rv-07.webp', 'naslov' => 'Kupila sam ga u ružičastoj, a zatim još dvije boje', 'tekst' => 'Kupila sam ovaj pulover u ružičastoj i ubrzo kupila još dvije boje. Prekrasan je. Vrlo je lagan i ne grebe. Savršen komad preko majice s naramenicama.' ),
  array( 'ime' => 'Anonimno',    'z' => 5, 'img' => 'ncm-rv-08.webp', 'naslov' => 'Jednostavno prekrasni', 'tekst' => 'Jednostavno su prekrasni. Nježni i mekani. I boja jako laska.' ),
  array( 'ime' => 'Elena P.',    'z' => 5, 'img' => 'ncm-rv-09.webp', 'naslov' => 'Obožavam ga', 'tekst' => 'Obožavam ga 😍' ),
  array( 'ime' => 'Ivana',       'z' => 5, 'img' => 'ncm-rv-10.webp', 'naslov' => 'Odlična boja i dobra kvaliteta', 'tekst' => 'Potpuno sam oduševljena ovim puloverom od kašmira! Mekan, pahuljast osjećaj tako je luksuzan na koži – lagan, a ugodan, savršen za slojevito odijevanje. Dostava je bila munjevito brza, a služba za korisnike nevjerojatno susretljiva kad sam imala pitanje o veličini. Postao mi je omiljeni komad za ležerni šik; uz omiljene traperice to je savršen svakodnevni izgled. 10/10, sigurno ću kupiti još boja!' ),
  array( 'ime' => 'Anonimno',    'z' => 5, 'img' => 'ncm-rv-11.webp', 'naslov' => 'Obožavam ovaj kašmir!', 'tekst' => 'Nedavno sam kupila ovaj pulover i jako sam zadovoljna! Tkanina je mekana i udobna, a kvaliteta odlična. Boja je točno kao na slici, a veličina odgovara. Već sam ga nekoliko puta nosila. Dizajn je moderan i svestran – lako ga je kombinirati za svečanije ili ležernije prilike. Svaki put kad ga nosim dobijem nekoliko komplimenata! Dostava je bila brza, a pakiranje uredno. Ako tražite pouzdan i moderan komad za svoj ormar, toplo ga preporučujem. Definitivno vrijedi svoje cijene!' ),
  array( 'ime' => 'Sara H.',     'z' => 5, 'img' => '', 'naslov' => 'Tri riječi – luksuz »starog novca«', 'tekst' => 'Tri riječi – luksuz »starog novca«. Super je mekan, ne grebe i bez truda je elegantan. Imam jako velike grudi (opseg 122 cm, košarica J) i široke bokove pa sam se bojala da će biti pretijesan i neudoban. JAO, kako sam se prevarila i oduševila kad sam ga isprobala. Tako je prostran i prekrasno pada, čak i na punijim tijelima. Jedina napomena: ovaj komad isključivo se kemijski čisti ili pere ručno, pa ako niste navikli nježno postupati s tkaninama, možda nije za vas.' ),
  array( 'ime' => 'Nina N.',     'z' => 5, 'img' => '', 'naslov' => 'Profinjen, elegantan i iznenađujuće mekan', 'tekst' => 'Ovaj pulover ističe se čim ga dotaknete. Mješavina svile i kašmira daje mu mekan, gotovo luksuzan osjećaj, a nije težak, pa je savršen za slojevito odijevanje u proljeće ili za hladnije večeri. Dizajn je minimalistički, ali vrlo profinjen: čiste linije, laskav pad i moderna silueta koja jednako dobro izgleda svečano i ležerno. Najviše cijenim to što je tako lagan, a ipak izgleda uredno.' ),
  array( 'ime' => 'Natalija D.', 'z' => 5, 'img' => '', 'naslov' => 'Oprez…', 'tekst' => 'Oprez, ako naručite jedan, poželjet ćete još haha. Obožavam ovaj pulover i trenutno imam još tri u košarici.' ),
  array( 'ime' => 'Anonimno',    'z' => 5, 'img' => '', 'naslov' => 'Opušten, a pristaje gdje treba', 'tekst' => 'Malo sam se bojala da će biti prevelik i neuredan. Iako je opušten i lepršav, pametno je uži ondje gdje treba kako bi zadržao oblik. Vrlo dobro izrađen!' ),
  array( 'ime' => 'Marija R.',   'z' => 5, 'img' => '', 'naslov' => 'Obožavam ovaj pulover!', 'tekst' => 'Obožavam ovaj pulover! Lagan je, prozračan, mekan i prekrasan. Savršen je za mene jer su mi dugi rukavi obično pretijesni ili pretopli. I svaki put kad ga nosim dobijem toliko komplimenata :)' ),
  array( 'ime' => 'Jelena J.',   'z' => 5, 'img' => '', 'naslov' => 'Imam ih dva', 'tekst' => 'Imam ih dva. Toliko volim boju i tkaninu.' ),
);

$ncm_n = 0; // števec sekcij za izmenična ozadja
$ncm_cls = function() use ( &$ncm_n ) { $ncm_n++; return ( $ncm_n % 2 ) ? ' ncm-tint' : ''; };
?>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap">

<!-- 1) KAŠMIR I SVILA (zavihek "Description") — slika ob besedilu -->
<section class="ncm-sec<?php echo $ncm_cls(); ?>">
  <div class="ncm-wrap">
    <div class="ncm-row2">
      <div class="ncm-media"><?php echo $ncm_img( 'ncm-s1-opis.webp', 'NORIKS CashmereSweater – pulover od kašmira i svile, svijetlosiva' ); ?></div>
      <div class="ncm-copy">
        <p class="ncm-kicker">Kašmir i svila</p>
        <h2 class="ncm-h2">Nevjerojatno mekan, <em>prirodnog i lepršavog pada</em></h2>
        <p>Izrađen od <strong>mješavine kašmira i svile</strong>, ovaj pulover s okruglim izrezom nevjerojatno je mekan, prirodnog i lepršavog pada.</p>
        <p>Dizajniran sa <strong>spuštenim ramenima i opuštenim krojem</strong>, odiše jednostavnom, nenametljivom elegancijom.</p>
        <p>Svijetlosiva nijansa čini ga svestranim izborom koji savršeno ide <strong>uz hlače ili suknje</strong> – od radnog dana do vikenda.</p>
        <p class="ncm-big">Nenametljiva elegancija za svaki dan.</p>
      </div>
    </div>
  </div>
</section>

<!-- 2) SASTAV I NJEGA ("COMPOSITION" + "CARE") — slika ob besedilu, strani zamenjani -->
<section class="ncm-sec<?php echo $ncm_cls(); ?>">
  <div class="ncm-wrap">
    <div class="ncm-row2 ncm-row2--rev">
      <div class="ncm-media"><?php echo $ncm_img( 'ncm-s2-sastav.webp', 'NORIKS CashmereSweater – pletivo od kašmira i svile izbliza' ); ?></div>
      <div class="ncm-copy">
        <p class="ncm-kicker">Sastav i njega</p>
        <h2 class="ncm-h2">Kašmir i <em>mulberry svila</em></h2>
        <dl class="ncm-specs">
          <div><dt>Sastav</dt><dd><strong>74,7 % kašmir</strong><br><strong>25,3 % mulberry svila</strong> (osim rebrastih rubova)</dd></div>
          <div><dt>Njega</dt><dd>Preporučujemo <strong>profesionalno kemijsko čišćenje</strong>.</dd></div>
        </dl>
        <p class="ncm-big">Mekoća kašmira i svile u jednom puloveru.</p>
      </div>
    </div>
  </div>
</section>

<!-- 3) KROJ I VELIČINA ("SIZE GUIDE": Product / Body Measurement) — slika ob besedilu -->
<section class="ncm-sec<?php echo $ncm_cls(); ?>">
  <div class="ncm-wrap">
    <div class="ncm-row2">
      <div class="ncm-media"><?php echo $ncm_img( 'ncm-s3-kroj.webp', 'NORIKS CashmereSweater – opušteni kroj sa spuštenim ramenima, pogled straga' ); ?></div>
      <div class="ncm-copy">
        <p class="ncm-kicker">Kroj i veličina</p>
        <h2 class="ncm-h2">Opušteni kroj, <em>jedna veličina</em></h2>
        <p>Pulover dolazi u jednoj veličini – <strong>M</strong>, koja odgovara veličinama <strong>EU 36–40</strong>.</p>
        <?php if ( $ncm_mjere ) : $r = $ncm_mjere[0]; ?>
        <dl class="ncm-specs">
          <div><dt>Duljina</dt><dd><?php echo esc_html( $r[3] ); ?></dd></div>
          <div><dt>Duljina rukava</dt><dd><?php echo esc_html( $r[4] ); ?></dd></div>
          <div><dt>Širina ramena</dt><dd><?php echo esc_html( $r[5] ); ?></dd></div>
          <div><dt>Opseg prsa</dt><dd><?php echo esc_html( $r[6] ); ?></dd></div>
        </dl>
        <?php endif; ?>
        <p>Za najbolji pristanak usporedite ove mjere sa sličnim komadom odjeće koji već imate – položite ga ravno i izmjerite s vanjske strane. Sve mjere uzete su ručno, moguće je odstupanje od 2–3 cm.</p>
        <p>Ako vam ne odgovara, imate <strong>pravo na povrat u roku od 30 dana</strong>.</p>
        <p class="ncm-big">Opušten, a uredan.</p>
      </div>
    </div>
  </div>
</section>

<!-- 4) VIĐENO NA NAŠIM KUPCIMA ("Spotted in …") — fotografije zajednice ob besedilu, strani zamenjani -->
<section class="ncm-sec<?php echo $ncm_cls(); ?>">
  <div class="ncm-wrap">
    <div class="ncm-row2 ncm-row2--rev">
      <div class="ncm-media">
        <div class="ncm-duo">
          <?php echo $ncm_img( 'ncm-s4-kupci-1.webp', 'Kupac nosi NORIKS CashmereSweater – sivosmeđa' ); ?>
          <?php echo $ncm_img( 'ncm-s4-kupci-2.webp', 'Kupac nosi NORIKS CashmereSweater – bijela' ); ?>
        </div>
      </div>
      <div class="ncm-copy">
        <p class="ncm-kicker">Viđeno na našim kupcima</p>
        <h2 class="ncm-h2">Pogledajte kako ga <em>nosi naša zajednica</em></h2>
        <p>Pogledajte kako naša zajednica nosi svoje omiljene komade.</p>
        <p class="ncm-big">Jedan pulover, bezbroj kombinacija.</p>
      </div>
    </div>
  </div>
</section>

<!-- 5) RECENZIJE KUPACA (Judge.me) — 1081 po NORIKS, razdelitev zvezdic skalirana na 692 + mnenja s fotografijami -->
<section class="ncm-sec<?php echo $ncm_cls(); ?>">
  <div class="ncm-wrap">
    <p class="ncm-kicker ncm-c">Recenzije kupaca</p>
    <h2 class="ncm-h2 ncm-c">Što kažu <em>naši kupci</em></h2>
    <div class="ncm-score">
      <span class="ncm-score__num">4,9 / 5</span>
      <?php echo $ncm_stars( 5 ); ?>
      <span class="ncm-score__txt">Na temelju 1081 recenzije · <span class="ncm-ok">✓ Potvrđene kupnje</span></span>
    </div>
    <ul class="ncm-dist">
      <?php foreach ( $ncm_dist as $d ) : ?>
      <li>
        <span class="ncm-dist__lbl"><?php echo (int) $d[0]; ?> ★</span>
        <span class="ncm-dist__bar"><span style="width:<?php echo (int) $d[1]; ?>%"></span></span>
        <span class="ncm-dist__pct"><?php echo (int) $d[1]; ?> % (<?php echo (int) $d[2]; ?>)</span>
      </li>
      <?php endforeach; ?>
    </ul>
    <div class="ncm-reviews">
      <?php foreach ( $ncm_reviews as $r ) : ?>
      <article class="ncm-card<?php echo $r['img'] ? ' ncm-card--img' : ' ncm-card--txt'; ?>">
        <?php if ( $r['img'] ) : ?><div class="ncm-card__img"><?php echo $ncm_img( $r['img'], 'Fotografija kupca: ' . $r['ime'] ); ?></div><?php endif; ?>
        <div class="ncm-card__body">
          <?php echo $ncm_stars( $r['z'] ); ?>
          <h3 class="ncm-card__title"><?php echo esc_html( $r['naslov'] ); ?></h3>
          <p class="ncm-card__txt">„<?php echo esc_html( $r['tekst'] ); ?>”</p>
          <p class="ncm-card__name"><?php echo esc_html( $r['ime'] ); ?> <span class="ncm-ok">✓ Potvrđena kupnja</span></p>
        </div>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<style>
/* NORIKS stil (predloga why-hoodiedress.php / why-hands.php): oznaka + naslov z ležečim poudarkom, slika ob
   besedilu, izmenjujoča ozadja in strani. Privzeta topla rjava paleta NORIKS (#a9683f). */
.ncm-sec { padding: 60px 0; font-family: 'Poppins', system-ui, -apple-system, 'Segoe UI', Roboto, Arial, sans-serif; color: #231d19; background: #fff; }
.ncm-sec * { box-sizing: border-box; }
.ncm-tint { background: #f7f2ec; }
.ncm-wrap { width: 100%; max-width: 1200px; margin: 0 auto; padding: 0 24px; }
.ncm-c { text-align: center; }
.ncm-sec h2, .ncm-sec h3 { font-family: inherit; text-transform: none; letter-spacing: 0; }
.ncm-kicker, .ncm-copy p.ncm-kicker { font-size: 12.5px; line-height: 1.4; font-weight: 700; letter-spacing: .14em; text-transform: uppercase; color: #a9683f; margin: 0 0 10px; }
.ncm-h2 { font-weight: 700; font-size: clamp(25px, 3.1vw, 36px); line-height: 1.2; margin: 0 0 14px; color: #231d19; }
.ncm-h2 em { font-style: italic; color: #a9683f; }
.ncm-sec img { display: block; width: 100%; height: auto; }

/* slika ob besedilu */
.ncm-row2 { display: grid; grid-template-columns: 1fr 1fr; gap: 56px; align-items: center; }
.ncm-row2--rev .ncm-media { order: 2; }
.ncm-media > img { border-radius: 10px; box-shadow: 0 2px 4px rgba(40,25,15,.05), 0 14px 40px rgba(40,25,15,.10); max-width: 520px; margin: 0 auto; aspect-ratio: 4 / 5; object-fit: cover; }
.ncm-copy p { font-size: 16px; line-height: 1.7; color: #4a403a; margin: 0 0 14px; }
.ncm-copy p strong { color: #231d19; font-weight: 600; }
.ncm-copy p.ncm-big { font-size: 19px; font-weight: 700; color: #231d19; line-height: 1.45; margin-top: 6px; }

/* sastav / mjere */
.ncm-specs { margin: 6px 0 18px; padding: 0; }
.ncm-specs > div { display: grid; grid-template-columns: 140px 1fr; gap: 12px; padding: 10px 0; border-bottom: 1px solid #ead9c9; }
.ncm-specs > div:first-child { border-top: 1px solid #ead9c9; }
.ncm-specs dt { font-size: 13px; font-weight: 700; letter-spacing: .08em; text-transform: uppercase; color: #a9683f; margin: 0; padding-top: 2px; }
.ncm-specs dd { font-size: 16px; line-height: 1.6; color: #4a403a; margin: 0; }
.ncm-specs dd strong { color: #231d19; font-weight: 600; }

/* fotografije zajednice: 2 sliki v stolpcu slike */
.ncm-duo { display: grid; grid-template-columns: repeat(2, minmax(0, 1fr)); gap: 12px; max-width: 520px; width: 100%; margin: 0 auto; }
.ncm-duo img { border-radius: 10px; aspect-ratio: 3 / 4; object-fit: cover; box-shadow: 0 2px 4px rgba(40,25,15,.05), 0 10px 28px rgba(40,25,15,.10); }

/* ocjene */
.ncm-stars { color: #f2a516; letter-spacing: 1px; font-size: 15px; }
.ncm-stars__off { color: #e6ddd4; }
.ncm-score { display: flex; justify-content: center; align-items: center; gap: 12px; margin: 0 0 24px; flex-wrap: wrap; }
.ncm-score__num { font-size: 28px; font-weight: 700; color: #231d19; }
.ncm-score .ncm-stars { font-size: 20px; }
.ncm-score__txt { font-size: 14.5px; color: #6b5f56; }
.ncm-dist { list-style: none; margin: 0 auto 32px; padding: 0; max-width: 460px; }
.ncm-dist li { display: grid; grid-template-columns: 38px 1fr 92px; gap: 10px; align-items: center; margin: 0 0 8px; font-size: 14px; color: #231d19; }
.ncm-dist__lbl { font-weight: 600; white-space: nowrap; }
.ncm-dist__bar { display: block; height: 10px; border-radius: 6px; background: #eeddcd; overflow: hidden; }
.ncm-dist__bar span { display: block; height: 100%; background: #a9683f; border-radius: 6px; }
.ncm-dist__pct { color: #6b5f56; white-space: nowrap; }

/* mnenja */
.ncm-reviews { columns: 4; column-gap: 18px; }
.ncm-reviews > .ncm-card { break-inside: avoid; margin-bottom: 18px; }
.ncm-card { background: #fff; border: 1px solid #ead9c9; border-radius: 10px; overflow: hidden; display: flex; flex-direction: column; }
.ncm-sec:not(.ncm-tint) .ncm-card { background: #f7f2ec; }
.ncm-card__img img { aspect-ratio: 3 / 4; object-fit: cover; }
.ncm-card__body { padding: 16px; }
.ncm-card__title { font-size: 15px; font-weight: 700; color: #231d19; margin: 8px 0 6px; line-height: 1.35; }
.ncm-card__txt { font-size: 14.5px; line-height: 1.6; color: #3b322c; margin: 0 0 10px; font-style: italic; }
.ncm-card__name { font-size: 13.5px; font-weight: 600; color: #231d19; margin: 0; }
.ncm-ok { color: #2f9e5f; font-weight: 600; font-size: 12px; margin-left: 4px; font-style: normal; }

@media (max-width: 989px) {
  .ncm-row2 { gap: 32px; }
  .ncm-reviews { columns: 2; }
}
@media (max-width: 749px) {
  .ncm-sec { padding: 42px 0; }
  .ncm-wrap { padding: 0 16px; }
  .ncm-row2 { grid-template-columns: 1fr; gap: 24px; }
  .ncm-row2--rev .ncm-media { order: 0; }
  .ncm-specs > div { grid-template-columns: 120px 1fr; }
  .ncm-reviews { column-gap: 12px; }
  .ncm-reviews > .ncm-card { margin-bottom: 12px; }
  .ncm-card__body { padding: 12px; }
}
@media (max-width: 420px) {
  .ncm-reviews { columns: 1; }
}

/* galerija izdelka: sličice največ v 2 vrstah (5 na vrsto), ostale slike so dosegljive z drsenjem glavne slike */
.product_cat-orto-cashmeresweater .flex-control-thumbs li:nth-child(n+11) { display: none !important; }

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
.woocommerce-product-details__short-description .ncm-tick {
  position: absolute !important; left: 0 !important; top: 1px !important;
  width: 21px; height: 21px; border-radius: 50%;
  background: #2f9e5f !important; color: #fff !important;
  font-size: 12px !important; font-weight: 800 !important; line-height: 21px !important;
  text-align: center !important; display: inline-block !important; }
.woocommerce-product-details__short-description p:first-of-type { font-size: 16px; line-height: 1.55; }
</style>
