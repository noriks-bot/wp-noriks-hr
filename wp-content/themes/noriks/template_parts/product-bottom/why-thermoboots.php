<?php
/**
 * product-bottom: NORIKS ThermoBoots — vodootporne zimske cizme s podstavom od flisa (orto-thermoboots).
 * Original: thermafits.com/products/thermaboots-fleeced-waterproof-boots — vsebina in vrstni red 1:1 z originalom,
 * oblika po NORIKS stilu (predloga why-widetoeshoes.php / why-hands.php), privzeta topla rjava paleta (#a9683f):
 *   1) "Engineered for Cold, Built to Keep You Moving"     -> Izrađene za hladnoću (animacija testa u vodi + 4 prednosti)
 *   2) "Reasons Why You'll Love it..." + 4 ikone           -> Razlozi zašto ćete ih voljeti (ikona HASSLE FREE -> BEZ MUKE)
 *   3) "Why Suffer Cold, Wet Feet When You Don't Have To?"  -> Zašto trpjeti hladna, mokra stopala (kolaž kupaca, kartica prevedena)
 *   4) "30-Day Risk Free Trial" (pečat 30 day money back)    -> 30 dana bez rizika (HTML pečat, NORIKS pogoji)
 *   5) "Testimonials" (3 izjave s fotografijama)            -> Što kažu naši kupci
 *   6) "Customer Reviews" (4.8 / 5)                         -> Recenzije kupaca (8 mnenj s fotografijami; število po NORIKS = 1081)
 * Izpusceno: glava, pasica Halloween Sale, »Featured on« (logotipi medijev), tekoci trak »Buy 1 pair get another 50% off«,
 * zavihka UK Shipping / 30 Day Money Back (vsebina v standardnih harmonikah), darila (rokavice, vlozki), noga.
 * FAQ originala je v reviews.php ($thermoboots_faq, po NORIKS pogojih); mnenja v auto_reviews/HR_thermoboots.php.
 * Slike: img/thermoboots/ (ntb-…).
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$ntb      = get_template_directory_uri() . '/img/thermoboots/';
$ntb_path = get_template_directory() . '/img/thermoboots/';
$ntb_img  = function( $file, $alt ) use ( $ntb, $ntb_path ) {
  if ( ! $file || ! file_exists( $ntb_path . $file ) ) { return ''; }
  return '<img src="' . esc_url( $ntb . $file ) . '" alt="' . esc_attr( $alt ) . '" loading="eager">';
};
$ntb_stars = function( $n ) {
  return '<span class="ntb-stars" aria-label="' . (int) $n . ' od 5 zvjezdica">' . str_repeat( '★', (int) $n ) . '<span class="ntb-stars__off">' . str_repeat( '★', 5 - (int) $n ) . '</span></span>';
};

/* 2) razlozi z originala */
$ntb_why = array(
  array( 'ntb-i-toplina.webp',   'Cjelodnevna toplina',          'Plišana podstava od flisa drži stopala toplima i ugodnima i na temperaturama ispod nule. Stvorene za hladna jutra, duge šetnje i zimski put na posao. Bez hladnih stopala, bez kompromisa.' ),
  array( 'ntb-i-bez-muke.webp',  'Obuvanje bez muke',            'Bočni patentni zatvarač — vani ste za 3 sekunde. Bez saginjanja, bez vezica, bez muke. Savršeno za užurbana jutra i brze izlaske.' ),
  array( 'ntb-i-gleznjevi.webp', 'Potpora i stabilnost gležnja', 'Sežu iznad gležnja za dodatnu potporu na neravnom tlu. Idealne za osobe sa slabijim gležnjevima i za sve koji žele sigurnost u svakom koraku.' ),
  array( 'ntb-i-unisex.webp',    'Unisex dizajn za sve',         'Za muškarce i žene koji ne žele birati između stila i udobnosti. Jedne čizme za posao, šetnje i vikende.' ),
);

/* 5) izjave kupcev z originala (Testimonials) */
$ntb_tst = array(
  array( 'ime' => 'Karla',   'img' => 'ntb-t1-karla.webp',   'naslov' => 'Sigurno kupujem još jedan par!', 'tekst' => 'Nisam mislila da čizme za navlačenje mogu biti ovako tople i vodootporne. Stopala su mi ugodno topla cijeli dan bez debelih čarapa. Kiša i lokve nemaju šanse.' ),
  array( 'ime' => 'Andrej',  'img' => 'ntb-t2-andrej.webp',  'naslov' => 'Vrijede svakog centa',            'tekst' => 'Nisam znao što da očekujem, ali ove čizme su me iskreno iznenadile. Prvi put kad sam ih nosio po kiši, stopala su mi ostala potpuno suha. Savršene su za hladna i kišna jutra.' ),
  array( 'ime' => 'Stjepan', 'img' => 'ntb-t3-stjepan.webp', 'naslov' => 'Točno kako je opisano',           'tekst' => 'Jako sam zadovoljan ovim čizmama. Stopala su mi topla i suha, a nisu glomazne ni teške. Dobro pristaju, lijepo izgledaju i rade točno ono što obećavaju. Savršene za moj posao na otvorenom i šetnje sa psom.' ),
);

/* 6) mnenja z originala (prevedena; mnenja o vračilu, dostavi in darilih konkurenta izpuščena) */
$ntb_reviews = array(
  array( 'ime' => 'Sandra J.',   'ocjena' => 4, 'img' => 'ntb-rv-1.webp', 'tekst' => 'Kupila sam 2 para za šetnje sa psom — crne i sive. Dobro pristaju i jako su tople. Sad samo čekam kišne i blatnjave dane da ih pravo isprobam.' ),
  array( 'ime' => 'Samir E.',    'ocjena' => 5, 'img' => 'ntb-rv-2.webp', 'tekst' => 'Obožavam ove termo čizme! Tako su lagane i udobne za šetnju sa psom po kiši i poledici, savršeno ne kližu. I jako su vodootporne, tople i mekane. Čarape nisu potrebne!' ),
  array( 'ime' => 'Dona F.',     'ocjena' => 5, 'img' => 'ntb-rv-3.webp', 'tekst' => 'Odlične su, tako tople i vodootporne. Imala sam čizme i prije, ali ne ovako dobre. Sigurno kupujem još jedan par.' ),
  array( 'ime' => 'Jelena H.',   'ocjena' => 5, 'img' => 'ntb-rv-4.webp', 'tekst' => 'Profesionalno šetam pse 13 godina i prošla sam puno obuće. Ove čizme su najbolja odluka — cijeli dan su mi stopala topla i suha u snijegu, a ni na ledu se nisam poskliznula. Svakako ih preporučujem svima koji šetaju pse!' ),
  array( 'ime' => 'Anita P.',    'ocjena' => 5, 'img' => 'ntb-rv-5.webp', 'tekst' => 'Obožavam ove čizme, tako su tople i udobne, kao da cijeli dan nosim papuče! Mislim da ću naručiti još jedan par za sebe i jedan za prijateljicu.' ),
  array( 'ime' => 'Kristina H.', 'ocjena' => 5, 'img' => 'ntb-rv-6.webp', 'tekst' => 'Odmah sam bila oduševljena pristajanjem i udobnošću. Šetala sam psa po blatnjavim poljima, a stopala su mi ostala topla i suha. Jako su udobne i lagane za hodanje.' ),
  array( 'ime' => 'Mia',         'ocjena' => 5, 'img' => 'ntb-rv-7.webp', 'tekst' => 'Odličan omjer cijene i kvalitete. Jako sam zadovoljna.' ),
  array( 'ime' => 'Olivija',     'ocjena' => 5, 'img' => 'ntb-rv-8.webp', 'tekst' => 'Najbolje čizme koje sam imala, a imala sam ih puno.' ),
);

$ntb_n = 0; // števec sekcij za izmenična ozadja
$ntb_cls = function() use ( &$ntb_n ) { $ntb_n++; return ( $ntb_n % 2 ) ? ' ntb-tint' : ''; };
$ntb_side = 0; // izmenične strani slika/besedilo
$ntb_rev = function() use ( &$ntb_side ) { $ntb_side++; return ( $ntb_side % 2 ) ? '' : ' ntb-row2--rev'; };
?>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap">

<!-- 1) IZRAĐENE ZA HLADNOĆU — animacija testa u vodi + 4 prednosti (Engineered for Cold) -->
<section class="ntb-sec<?php echo $ntb_cls(); ?>">
  <div class="ntb-wrap">
    <div class="ntb-row2<?php echo $ntb_rev(); ?>">
      <div class="ntb-media ntb-media--sq"><?php echo $ntb_img( 'ntb-s01-vodootporne.webp', 'NORIKS ThermoBoots u vodi — stopalo ostaje suho' ); ?></div>
      <div class="ntb-copy">
        <p class="ntb-kicker">Stvorene za zimu</p>
        <h2 class="ntb-h3">Izrađene za hladnoću, <em>stvorene za kretanje</em></h2>
        <p>Dosadila su vam <strong>hladna, mokra stopala</strong> koja vam pokvare dan? Upoznajte <strong>NORIKS ThermoBoots</strong> — naše vrhunske <strong>zimske čizme</strong> izrađene za pravu toplinu, zaštitu i svakodnevnu udobnost.</p>
        <ul class="ntb-points">
          <li><span class="ntb-dot" aria-hidden="true">✓</span><span><strong>100 % vodootporna zaštita</strong> — potpuno zatvorena izrada drži stopala potpuno suhima na kiši, snijegu i bljuzgavici.</span></li>
          <li><span class="ntb-dot" aria-hidden="true">✓</span><span><strong>Topla podstava od flisa</strong> — debela, mekana unutrašnjost grije stopala cijeli dan, čak i bez čarapa.</span></li>
          <li><span class="ntb-dot" aria-hidden="true">✓</span><span><strong>Lagane i neklizajuće</strong> — za cjelodnevno nošenje bez glomaznosti. Neklizajući potplat prianja na mokrim i zaleđenim površinama.</span></li>
          <li><span class="ntb-dot" aria-hidden="true">✓</span><span><strong>Unisex dizajn za sve</strong> — savršene za muškarce i žene koji ne dopuštaju da ih vrijeme zaustavi.</span></li>
        </ul>
        <p class="ntb-big">Suha i topla stopala — po svakom vremenu.</p>
      </div>
    </div>
  </div>
</section>

<!-- 2) RAZLOZI ZAŠTO ĆETE IH VOLJETI — 4 ikone (Reasons Why You'll Love it) -->
<section class="ntb-sec<?php echo $ntb_cls(); ?>">
  <div class="ntb-wrap">
    <p class="ntb-kicker ntb-c">Zašto ćete ih voljeti</p>
    <h2 class="ntb-h2 ntb-c">Razlozi zašto ćete ih <em>voljeti…</em></h2>
    <ul class="ntb-why4">
      <?php foreach ( $ntb_why as $w ) : ?>
      <li><?php echo $ntb_img( $w[0], '' ); ?><h3><?php echo esc_html( $w[1] ); ?></h3><p><?php echo esc_html( $w[2] ); ?></p></li>
      <?php endforeach; ?>
    </ul>
  </div>
</section>

<!-- 3) ZAŠTO TRPJETI HLADNA, MOKRA STOPALA — kolaž kupaca + popis (Why Suffer Cold, Wet Feet) -->
<section class="ntb-sec<?php echo $ntb_cls(); ?>">
  <div class="ntb-wrap">
    <div class="ntb-row2<?php echo $ntb_rev(); ?>">
      <div class="ntb-media ntb-media--sq"><?php echo $ntb_img( 'ntb-g03-zadovoljni-kupci.webp', 'Zadovoljni kupci u NORIKS ThermoBoots čizmama' ); ?></div>
      <div class="ntb-copy">
        <p class="ntb-kicker">Zbogom hladnim stopalima</p>
        <h2 class="ntb-h3">Zašto trpjeti hladna, mokra stopala <em>kad ne morate?</em></h2>
        <p>Obične čizme vas zimi iznevjere. <strong>NORIKS ThermoBoots</strong> pružaju pravu zaštitu i pravu udobnost — bez kompromisa. Prođite kroz dan sigurno, bez obzira na uvjete.</p>
        <ul class="ntb-points">
          <li><span class="ntb-dot" aria-hidden="true">✓</span><span><strong>Debela podstava od flisa</strong> koja grije stopala i bez čarapa</span></li>
          <li><span class="ntb-dot" aria-hidden="true">✓</span><span><strong>Neklizajući potplat</strong> za prianjanje na zaleđenim pločnicima i mokrim površinama</span></li>
          <li><span class="ntb-dot" aria-hidden="true">✓</span><span><strong>Lagana izrada</strong> koja vam neće umoriti noge</span></li>
          <li><span class="ntb-dot" aria-hidden="true">✓</span><span><strong>Obuvanje za 3 sekunde</strong> uz bočni patentni zatvarač — bez vezica</span></li>
          <li><span class="ntb-dot" aria-hidden="true">✓</span><span><strong>Visina iznad gležnja</strong> za stabilnost na neravnom tlu</span></li>
          <li><span class="ntb-dot" aria-hidden="true">✓</span><span><strong>Dostupne u 3 boje</strong> — crnoj, sivoj i svijetlosmeđoj, za svaki stil</span></li>
          <li><span class="ntb-dot" aria-hidden="true">✓</span><span><strong>Za muškarce i žene</strong> — unisex dizajn za sve</span></li>
          <li><span class="ntb-dot" aria-hidden="true">✓</span><span><strong>Izdržljiva, kvalitetna tkanina</strong> koja traje sezonu za sezonom</span></li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- 4) 30 DANA BEZ RIZIKA — HTML pečat (30-Day Risk Free Trial), NORIKS pogoji -->
<section class="ntb-sec<?php echo $ntb_cls(); ?>">
  <div class="ntb-wrap">
    <div class="ntb-row2<?php echo $ntb_rev(); ?>">
      <div class="ntb-media ntb-seal-wrap">
        <div class="ntb-seal" role="img" aria-label="30 dana za povrat">
          <div class="ntb-seal__in">
            <span class="ntb-seal__top">Pravo na povrat</span>
            <span class="ntb-seal__num">30</span>
            <span class="ntb-seal__days">DANA</span>
            <span class="ntb-seal__bot">Bez rizika</span>
          </div>
        </div>
      </div>
      <div class="ntb-copy">
        <p class="ntb-kicker">Bez rizika</p>
        <h2 class="ntb-h3">Isprobajte ih <em>30 dana bez rizika</em></h2>
        <p>Imate <strong>pravo na povrat u roku od 30 dana</strong>. Niste zadovoljni? Jednostavno nam se javite i pomoći ćemo vam s povratom ili zamjenom.</p>
        <p class="ntb-big">Nemate što izgubiti!</p>
      </div>
    </div>
  </div>
</section>

<!-- 5) ŠTO KAŽU NAŠI KUPCI — 3 izjave s fotografijama (Testimonials) -->
<section class="ntb-sec<?php echo $ntb_cls(); ?>">
  <div class="ntb-wrap">
    <p class="ntb-kicker ntb-c">Iskustva kupaca</p>
    <h2 class="ntb-h2 ntb-c">Što kažu <em>naši kupci</em></h2>
    <div class="ntb-tst">
      <?php foreach ( $ntb_tst as $t ) : ?>
      <article class="ntb-card ntb-card--img">
        <div class="ntb-card__img"><?php echo $ntb_img( $t['img'], 'Fotografija kupca: ' . $t['ime'] ); ?></div>
        <div class="ntb-card__body">
          <?php echo $ntb_stars( 5 ); ?>
          <p class="ntb-card__title"><?php echo esc_html( $t['naslov'] ); ?></p>
          <p class="ntb-card__txt">„<?php echo esc_html( $t['tekst'] ); ?>”</p>
          <p class="ntb-card__name"><?php echo esc_html( $t['ime'] ); ?> <span class="ntb-ok">✓ Potvrđena kupnja</span></p>
        </div>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- 6) RECENZIJE KUPACA — mnenja z originala, število po NORIKS (1081) -->
<section class="ntb-sec<?php echo $ntb_cls(); ?>">
  <div class="ntb-wrap">
    <p class="ntb-kicker ntb-c">Recenzije kupaca</p>
    <h2 class="ntb-h2 ntb-c">Kupci <em>obožavaju</em> svoje nove čizme</h2>
    <div class="ntb-score">
      <span class="ntb-score__num">4,8 / 5</span>
      <?php echo $ntb_stars( 5 ); ?>
      <span class="ntb-score__txt">Na temelju 1081 recenzije</span>
    </div>
    <div class="ntb-reviews">
      <?php foreach ( $ntb_reviews as $r ) : ?>
      <article class="ntb-card<?php echo $r['img'] ? ' ntb-card--img' : ''; ?>">
        <?php if ( $r['img'] ) : ?><div class="ntb-card__img"><?php echo $ntb_img( $r['img'], 'Fotografija kupca: ' . $r['ime'] ); ?></div><?php endif; ?>
        <div class="ntb-card__body">
          <?php echo $ntb_stars( $r['ocjena'] ); ?>
          <p class="ntb-card__txt">„<?php echo esc_html( $r['tekst'] ); ?>”</p>
          <p class="ntb-card__name"><?php echo esc_html( $r['ime'] ); ?> <span class="ntb-ok">✓ Potvrđena kupnja</span></p>
        </div>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<style>
/* NORIKS stil (predloga why-widetoeshoes.php / why-hands.php): oznaka + naslov z ležečim poudarkom, slika ob
   besedilu, izmenjujoča ozadja in strani. Privzeta topla rjava paleta NORIKS (#a9683f). */
.ntb-sec { padding: 60px 0; font-family: 'Poppins', system-ui, -apple-system, 'Segoe UI', Roboto, Arial, sans-serif; color: #231d19; background: #fff; }
.ntb-sec * { box-sizing: border-box; }
.ntb-tint { background: #f7f2ec; }
.ntb-wrap { width: 100%; max-width: 1200px; margin: 0 auto; padding: 0 24px; }
.ntb-c { text-align: center; }
.ntb-sec h2, .ntb-sec h3 { font-family: inherit; text-transform: none; letter-spacing: 0; }
.ntb-kicker, .ntb-copy p.ntb-kicker { font-size: 12.5px; line-height: 1.4; font-weight: 700; letter-spacing: .14em; text-transform: uppercase; color: #a9683f; margin: 0 0 10px; }
.ntb-h2 { font-weight: 700; font-size: clamp(25px, 3.1vw, 36px); line-height: 1.2; margin: 0 0 14px; color: #231d19; }
.ntb-h2 em, .ntb-h3 em { font-style: italic; color: #a9683f; }
.ntb-h3 { font-weight: 700; font-size: clamp(22px, 2.6vw, 30px); line-height: 1.25; margin: 0 0 16px; color: #231d19; }
.ntb-sec img { display: block; width: 100%; height: auto; }

/* slika ob besedilu */
.ntb-row2 { display: grid; grid-template-columns: 1fr 1fr; gap: 56px; align-items: center; }
.ntb-row2--rev .ntb-media { order: 2; }
.ntb-media img { object-fit: cover; border-radius: 10px; box-shadow: 0 2px 4px rgba(40,25,15,.05), 0 14px 40px rgba(40,25,15,.10); max-width: 560px; margin: 0 auto; }
.ntb-media--sq img { aspect-ratio: 1 / 1; max-width: 540px; }
.ntb-icon { max-width: 540px; aspect-ratio: 16 / 10; margin: 0 auto; background: #fff; border: 1px solid #ecdfd3; border-radius: 10px;
  display: flex; align-items: center; justify-content: center; box-shadow: 0 2px 4px rgba(40,25,15,.05), 0 14px 40px rgba(40,25,15,.10); }
.ntb-sec:not(.ntb-tint) .ntb-icon { background: #f7f2ec; }
.ntb-media .ntb-icon img { width: 46%; max-width: 230px; box-shadow: none; border-radius: 0; object-fit: contain; }
.ntb-copy p { font-size: 16px; line-height: 1.7; color: #4f443d; margin: 0 0 14px; }
.ntb-copy p strong { color: #231d19; font-weight: 600; }
.ntb-copy p.ntb-big { font-size: 19px; font-weight: 700; color: #231d19; line-height: 1.45; margin-top: 6px; }
.ntb-points { list-style: none; margin: 0 0 16px; padding: 0; }
.ntb-points li { font-size: 16px; line-height: 1.6; color: #4f443d; margin: 0 0 12px; display: flex; gap: 12px; align-items: flex-start; }
.ntb-points li strong { color: #231d19; font-weight: 600; }
.ntb-dot { flex: 0 0 22px; width: 22px; height: 22px; border-radius: 50%; background: #a9683f; color: #fff; font-size: 12px; font-weight: 800; line-height: 22px; text-align: center; margin-top: 2px; }

/* ocjene kupaca */
.ntb-bars { margin: 4px 0 18px; display: grid; gap: 14px; }
.ntb-bar__top { display: flex; justify-content: space-between; font-size: 15px; color: #4f443d; margin-bottom: 6px; }
.ntb-bar__top strong { color: #231d19; font-weight: 700; }
.ntb-bar__track { height: 10px; border-radius: 999px; background: #eadccf; overflow: hidden; }
.ntb-bar__track span { display: block; height: 100%; border-radius: 999px; background: #a9683f; }

/* materijali */
.ntb-specs { margin: 0 0 16px; padding: 0; border-top: 1px solid #ecdfd3; }
.ntb-specs > div { display: grid; grid-template-columns: 170px 1fr; gap: 12px; padding: 11px 0; border-bottom: 1px solid #ecdfd3; }
.ntb-specs dt { font-size: 15px; font-weight: 700; color: #231d19; margin: 0; }
.ntb-specs dd { font-size: 15px; line-height: 1.55; color: #4f443d; margin: 0; }

/* 3 ikone */
.ntb-feats { list-style: none; margin: 4px 0 18px; padding: 0; display: grid; grid-template-columns: repeat(3, minmax(0, 1fr)); gap: 14px; }
.ntb-feats li { background: #fff; border: 1px solid #ecdfd3; border-radius: 10px; padding: 14px 10px 12px; text-align: center; }
.ntb-sec:not(.ntb-tint) .ntb-feats li { background: #f7f2ec; }
.ntb-feats li img { width: 74px; height: 74px; object-fit: contain; margin: 0 auto 8px; }
.ntb-feats li span { display: block; font-size: 14px; font-weight: 600; color: #231d19; line-height: 1.35; }

/* recenzije */
.ntb-stars { color: #f2a516; letter-spacing: 1px; font-size: 15px; }
.ntb-stars__off { color: #e6dbd2; }
.ntb-score { display: flex; justify-content: center; align-items: center; gap: 12px; margin: 0 0 28px; flex-wrap: wrap; }
.ntb-score__num { font-size: 28px; font-weight: 700; color: #231d19; }
.ntb-score .ntb-stars { font-size: 20px; }
.ntb-score__txt { font-size: 14.5px; color: #6b625a; }
.ntb-reviews { display: grid; grid-template-columns: repeat(4, minmax(0, 1fr)); gap: 18px; align-items: stretch; }
.ntb-card { background: #fff; border: 1px solid #ecdfd3; border-radius: 10px; overflow: hidden; display: flex; flex-direction: column; }
.ntb-card__img img { aspect-ratio: 1 / 1; object-fit: cover; border-radius: 0; box-shadow: none; }
.ntb-card__body { padding: 16px 16px 16px; }
.ntb-card__txt { font-size: 14.5px; line-height: 1.6; color: #3a302a; margin: 8px 0 10px; font-style: italic; }
.ntb-card__name { font-size: 13.5px; font-weight: 600; color: #231d19; margin: 0; }
.ntb-ok { color: #2f9e5f; font-weight: 600; font-size: 12px; margin-left: 4px; font-style: normal; }

@media (max-width: 989px) {
  .ntb-row2 { gap: 32px; }
  .ntb-reviews { grid-template-columns: repeat(2, minmax(0, 1fr)); }
}
@media (max-width: 749px) {
  .ntb-sec { padding: 42px 0; }
  .ntb-wrap { padding: 0 16px; }
  .ntb-row2 { grid-template-columns: 1fr; gap: 24px; }
  .ntb-row2--rev .ntb-media { order: 0; }
  .ntb-specs > div { grid-template-columns: 1fr; gap: 2px; }
  .ntb-feats li img { width: 56px; height: 56px; }
  .ntb-feats li span { font-size: 13px; }
  .ntb-reviews { gap: 12px; }
  .ntb-card__body { padding: 12px; }
}

/* 2) razlozi — 4 kartice z ikono */
.ntb-why4 { list-style: none; margin: 28px 0 0; padding: 0; display: grid; grid-template-columns: repeat(4, minmax(0, 1fr)); gap: 18px; }
.ntb-why4 li { background: #fff; border: 1px solid #ecdfd3; border-radius: 10px; padding: 22px 18px 20px; text-align: center;
  box-shadow: 0 2px 4px rgba(40,25,15,.04), 0 10px 26px rgba(40,25,15,.07); }
.ntb-sec:not(.ntb-tint) .ntb-why4 li { background: #f7f2ec; }
.ntb-why4 li img { width: 72px; height: 72px; object-fit: contain; margin: 0 auto 14px; }
.ntb-why4 h3 { font-size: 14px; font-weight: 700; letter-spacing: .08em; text-transform: uppercase; color: #a9683f; margin: 0 0 10px; line-height: 1.35; }
.ntb-why4 p { font-size: 15px; line-height: 1.6; color: #4f443d; margin: 0; }

/* 4) pečat 30 dana (HTML namjesto slike s engleskim natpisom) */
.ntb-seal-wrap { display: flex; align-items: center; justify-content: center; min-height: 300px; }
.ntb-seal { width: 280px; height: 280px; border-radius: 50%; display: flex; align-items: center; justify-content: center;
  background: radial-gradient(circle at 35% 30%, #ffe08a 0%, #f2b632 45%, #c98a12 100%);
  box-shadow: 0 0 0 10px #f5c94e, 0 0 0 14px #b57a0e, 0 18px 40px rgba(40,25,15,.18); text-align: center; }
.ntb-seal__in { width: 206px; height: 206px; border-radius: 50%; background: #231d19; color: #f5c94e;
  display: flex; flex-direction: column; align-items: center; justify-content: center; }
.ntb-seal__top, .ntb-seal__bot { font-size: 11px; font-weight: 700; letter-spacing: .12em; text-transform: uppercase; max-width: 150px; line-height: 1.3; }
.ntb-seal__num { font-size: 78px; font-weight: 800; line-height: 1; margin: 4px 0 0; color: #ffd45e; }
.ntb-seal__days { font-size: 22px; font-weight: 700; letter-spacing: .12em; margin: 0 0 6px; }

/* 5) izjave kupcev */
.ntb-tst { display: grid; grid-template-columns: repeat(3, minmax(0, 1fr)); gap: 20px; }
.ntb-tst .ntb-card__img img { aspect-ratio: 4 / 5; }
.ntb-card__title { font-size: 16px; font-weight: 700; color: #231d19; margin: 8px 0 0; }
@media (max-width: 989px) { .ntb-why4 { grid-template-columns: repeat(2, minmax(0, 1fr)); } }
@media (max-width: 749px) {
  .ntb-why4 { gap: 12px; }
  .ntb-why4 li { padding: 16px 12px; }
  .ntb-why4 li img { width: 56px; height: 56px; }
  .ntb-tst { grid-template-columns: 1fr; gap: 14px; }
  .ntb-seal-wrap { min-height: 0; }
  .ntb-seal { width: 230px; height: 230px; }
  .ntb-seal__in { width: 170px; height: 170px; }
  .ntb-seal__num { font-size: 62px; }
}

/* galerija izdelka: sličice največ v 2 vrstah (5 na vrsto), ostale slike so dosegljive z drsenjem glavne slike */
.product_cat-orto-thermoboots .flex-control-thumbs li:nth-child(n+11) { display: none !important; }

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
.woocommerce-product-details__short-description .ntb-tick {
  position: absolute !important; left: 0 !important; top: 1px !important;
  width: 21px; height: 21px; border-radius: 50%;
  background: #2f9e5f !important; color: #fff !important;
  font-size: 12px !important; font-weight: 800 !important; line-height: 21px !important;
  text-align: center !important; display: inline-block !important; }
.woocommerce-product-details__short-description p:first-of-type { font-size: 16px; line-height: 1.55; }
</style>
