<?php
/**
 * product-bottom: NORIKS SilkBoxers — svilene bokserice za cjelodnevnu udobnost (orto-silkboxers).
 * Original: aresunderwear.com/products/ares-silk-boxers-all-day-comfort-navy-blue — vsebina in vrstni red 1:1 z originalom,
 * oblika po NORIKS stilu (predloga why-modalsweatshirt.php / why-hands.php), modri poudarek (#1f568e) po barvi izdelka:
 *   1) "Real Men. Real Comfort." (trak fotografij in videov kupcev) -> Pravi muškarci. Prava udobnost. — 4 fotografije kupcev
 *        (znamka ARES na pasu retusirana) ob besedilu; videi kupcev izpusceni (znamka ARES na skoraj vsakem kadru)
 *   2) Trustpilot mnenja (4,3 / 3400+) -> Što kažu naši kupci: 8 prevedenih mnenj, ocena po NORIKS (4,9 / 5, 1081)
 *   3) "Engineered to End Swamp Ass, Stick, and Chafe." -> Stvorene da zaustave znojenje, lijepljenje i trljanje (slika ob besedilu)
 *   4) "Proven benefits, proven results" (95 / 89 / 92 %) -> Dokazane prednosti, dokazani rezultati
 *   5) "Unique Men Deserve More Than Just Ordinary Underwear" -> Jedinstveni muškarci zaslužuju više (slika ob besedilu, brez imen znamke)
 *   6) "Customer Reviews" (Loox, 4,5 / 213) -> Recenzije kupaca: 8 mnenj (6 s fotografijami), 4,9 / 5 z 1081
 * FAQ originala (6 vprasanj) je v reviews.php ($silkboxers_faq), mnenja v auto_reviews/HR_silkboxers.php,
 * opis/nega/tablica velicin v standardnih harmonikah (meta.php) in modalu (size-chart-silkboxers.php).
 * Izpusceno: glava, pasice, »As seen in«, nagradna igra (Cartier), »You'll also love«, noga. Slike: img/silkboxers/ (nsb-…).
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$nsb      = get_template_directory_uri() . '/img/silkboxers/';
$nsb_path = get_template_directory() . '/img/silkboxers/';
$nsb_img  = function( $file, $alt ) use ( $nsb, $nsb_path ) {
  if ( ! $file || ! file_exists( $nsb_path . $file ) ) { return ''; }
  return '<img src="' . esc_url( $nsb . $file ) . '" alt="' . esc_attr( $alt ) . '" loading="lazy">';
};
$nsb_stars = function( $n ) {
  $n = max( 0, min( 5, (int) $n ) );
  return '<span class="nsb-stars" aria-label="' . $n . ' od 5 zvjezdica">' . str_repeat( '★', $n ) . '<span class="nsb-stars__off">' . str_repeat( '★', 5 - $n ) . '</span></span>';
};

/* 1) fotografije kupcev ("Real Men. Real Comfort.") */
$nsb_kupci = array(
  array( 'nsb-k1-kupac.webp',      'Kupac u crnim svilenim boksericama' ),
  array( 'nsb-k2-kupac.webp',      'Kupac u crnim svilenim boksericama ispred ogledala' ),
  array( 'nsb-k3-kupac.webp',      'Kupac pokazuje udoban pojas bokserica' ),
  array( 'nsb-k4-pakiranje.webp',  'Svilene bokserice u poklon kutiji' ),
);

/* 2) mnenja (Trustpilot originala, prevedena) */
$nsb_tp = array(
  array( 'ime' => 'Brad M.',    'z' => 5, 'naslov' => 'Sve je izvrsno',                  'tekst' => 'Cijelo iskustvo je izvrsno. Jednostavna narudžba i fantastičan proizvod!' ),
  array( 'ime' => 'Joe B.',     'z' => 5, 'naslov' => 'Najudobnije bokserice koje imam',  'tekst' => 'Ovo su najudobnije bokserice koje posjedujem. I noću me drže ugodno svježim.' ),
  array( 'ime' => 'Mark K.',    'z' => 5, 'naslov' => 'Bio sam skeptičan, ali…',         'tekst' => 'Bio sam skeptičan, ali ove su nevjerojatne i drže svježinu. Tako su glatke na koži i nema iritacija kao kod drugih. Sad ću obnoviti cijelu ladicu donjeg rublja.' ),
  array( 'ime' => 'Richard R.', 'z' => 5, 'naslov' => 'Nisam vjerovao da rublje može toliko promijeniti', 'tekst' => 'Svaki put kad ih obučem, nasmijem se. Nikad nisam osjetio takvu udobnost i potporu kao u ovim boksericama. Hvala!' ),
  array( 'ime' => 'Andrej N.',  'z' => 5, 'naslov' => 'Napokon sam našao ono što sam tražio!', 'tekst' => 'Tražio sam rublje koje je jako mekano, a ipak daje potporu gdje treba i ostaje na mjestu i nakon sati kretanja. Nakon mnogo godina traženja napokon sam našao savršen izbor!' ),
  array( 'ime' => 'Jim',        'z' => 5, 'naslov' => 'Stiglo danas',                    'tekst' => 'Narudžba je stigla danas. Sve kako je obećano. Izvrsna kvaliteta, kroj i udobnost. Moje novo omiljeno rublje.' ),
  array( 'ime' => 'Kevin C.',   'z' => 5, 'naslov' => 'Savršeno pristaju!',              'tekst' => 'Savršeno pristaju! Glatke i svilenkaste na dodir. I supruga obožava kako izgledaju i kakve su na dodir.' ),
  array( 'ime' => 'Steven T.',  'z' => 5, 'naslov' => 'Obožavam osjećaj',                'tekst' => 'Obožavam osjećaj i kroj. Tako su udobne, uvijek ostaju na mjestu – ne podvrću se ni na nogama ni u struku.' ),
);

/* 4) rezultati */
$nsb_stat = array(
  array( 95, 'nije imalo trljanja, lijepljenja ni skupljanja tkanine' ),
  array( 89, 'ostalo je suho kroz vruće dane i duge smjene' ),
  array( 92, 'kaže da je partnerica primijetila promjenu' ),
);

/* 6) recenzije kupaca s fotografijami (Loox originala, prevedene) */
$nsb_rv = array(
  array( 'ime' => 'Jonny N.',  'z' => 5, 'naslov' => 'Toliko udobne – zaboravite da ih nosite', 'tekst' => 'Bio je mali rizik kupiti 11 pari odjednom, ali čovječe, nevjerojatno su udobne! Stvarno zaboravite da išta nosite, i to i tijekom dugih dana. Dobro se peru (hladna voda, sušenje na zraku) i zadržavaju oblik, kvalitetu i osjećaj.' ),
  array( 'ime' => 'Steven E.', 'z' => 5, 'img' => 'nsb-rv-1.webp', 'naslov' => 'Odlično izgledaju', 'tekst' => 'Obožavam ove bokserice. Odlično izgledaju, ugodne su, a i djevojka ih obožava na meni!' ),
  array( 'ime' => 'Steven E.', 'z' => 5, 'img' => 'nsb-rv-2.webp', 'naslov' => 'Fantastičan kroj',  'tekst' => 'Rublje fantastično pristaje i osjećaj je nevjerojatan!' ),
  array( 'ime' => 'Scott S.',  'z' => 5, 'naslov' => 'Udobne i moderne', 'tekst' => 'Odlično pristaju, udobne su i moderne.' ),
  array( 'ime' => 'Clay K.',   'z' => 5, 'img' => 'nsb-rv-3.webp', 'naslov' => 'Osjećaj je FANTASTIČAN', 'tekst' => 'Osjećaj je FANTASTIČAN.' ),
  array( 'ime' => 'James C.',  'z' => 5, 'img' => 'nsb-rv-5.webp', 'naslov' => 'Bez neugodnog mirisa', 'tekst' => 'Kao bivši sportaš navikao sam na tkanine koje ne ograničavaju. Ovaj svileni materijal djeluje vrlo funkcionalno – ne steže i nema mirisa znoja nakon treninga. A moje gaćice usto i dobro izgledaju.' ),
  array( 'ime' => 'Ray O.',    'z' => 5, 'img' => 'nsb-rv-6.webp', 'naslov' => 'Kao da ih ne nosim', 'tekst' => 'Ove gaćice su odlične – zapravo uopće ne osjećam da ih nosim.' ),
  array( 'ime' => 'Made A.',   'z' => 4, 'img' => 'nsb-rv-4.webp', 'naslov' => 'Dobar proizvod',     'tekst' => 'Proizvod je dobar. Možda sam samo odabrao pogrešnu veličinu, pa su mi malo prevelike.' ),
);

$nsb_n = 0; // števec sekcij za izmenična ozadja
$nsb_cls = function() use ( &$nsb_n ) { $nsb_n++; return ( $nsb_n % 2 ) ? ' nsb-tint' : ''; };
?>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap">

<!-- 1) PRAVI MUŠKARCI. PRAVA UDOBNOST. ("Real Men. Real Comfort.") — fotografije kupaca ob besedilu -->
<section class="nsb-sec<?php echo $nsb_cls(); ?>">
  <div class="nsb-wrap">
    <div class="nsb-row2">
      <div class="nsb-media">
        <div class="nsb-grid4">
          <?php foreach ( $nsb_kupci as $k ) : ?>
          <div class="nsb-grid4__cell"><?php echo $nsb_img( $k[0], $k[1] ); ?></div>
          <?php endforeach; ?>
        </div>
      </div>
      <div class="nsb-copy">
        <p class="nsb-kicker">Pravi muškarci</p>
        <h2 class="nsb-h3">Pravi muškarci. <em>Prava udobnost.</em></h2>
        <p>Pridružite se tisućama muškaraca koji su pamuk zamijenili <strong>vrhunskim donjim rubljem od svilene mješavine</strong>.</p>
        <p>Glatke na koži, prozračne cijeli dan i krojene da ostanu na svom mjestu — od jutra na poslu do noćnog sna.</p>
        <p class="nsb-big">Jednom kad ih probate, nećete se vratiti na pamuk.</p>
      </div>
    </div>
  </div>
</section>

<!-- 2) ŠTO KAŽU NAŠI KUPCI (Trustpilot originala) — prevedena mnenja, ocjena po NORIKS (1081) -->
<section class="nsb-sec<?php echo $nsb_cls(); ?>">
  <div class="nsb-wrap">
    <p class="nsb-kicker nsb-c">Recenzije</p>
    <h2 class="nsb-h2 nsb-c">Što kažu <em>naši kupci</em></h2>
    <div class="nsb-score">
      <span class="nsb-score__num">4,9 / 5</span>
      <?php echo $nsb_stars( 5 ); ?>
      <span class="nsb-score__txt">Na temelju 1081 recenzije</span>
    </div>
    <div class="nsb-reviews">
      <?php foreach ( $nsb_tp as $r ) : ?>
      <article class="nsb-card nsb-card--txt">
        <div class="nsb-card__body">
          <?php echo $nsb_stars( $r['z'] ); ?>
          <h3 class="nsb-card__title"><?php echo esc_html( $r['naslov'] ); ?></h3>
          <p class="nsb-card__txt">„<?php echo esc_html( $r['tekst'] ); ?>”</p>
          <p class="nsb-card__name"><?php echo esc_html( $r['ime'] ); ?> <span class="nsb-ok">✓ Potvrđena kupnja</span></p>
        </div>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- 3) BEZ ZNOJENJA, LIJEPLJENJA I TRLJANJA ("Engineered to End Swamp Ass, Stick, and Chafe.") — slika ob besedilu -->
<section class="nsb-sec<?php echo $nsb_cls(); ?>">
  <div class="nsb-wrap">
    <div class="nsb-row2 nsb-row2--rev">
      <div class="nsb-media"><?php echo $nsb_img( 'nsb-s1-bez-trljanja.webp', 'Svilene bokserice s glatkim, prozračnim materijalom' ); ?></div>
      <div class="nsb-copy">
        <p class="nsb-kicker">Bez trljanja</p>
        <h2 class="nsb-h3">Stvorene da zaustave <em>znojenje, lijepljenje i trljanje.</em></h2>
        <p>Većina bokserica zadržava toplinu i trenje upravo ondje gdje to najmanje želite. Naše su izrađene od <strong>prozračne, glatke tkanine</strong> s oblikovanim prednjim dijelom — pa sve ostaje na svom mjestu, suho i ne smeta vam.</p>
        <ul class="nsb-list">
          <li>Nema više lijepljenja ni namještanja usred dana</li>
          <li>Tkanina koja odvodi vlagu i diše cijeli dan</li>
          <li>Kreću se s vama, a ne protiv vas</li>
          <li>Kroj koji savršeno pristaje — ona će primijetiti razliku</li>
        </ul>
        <p class="nsb-big">Suho, udobno i na svom mjestu — cijeli dan.</p>
      </div>
    </div>
  </div>
</section>

<!-- 4) DOKAZANE PREDNOSTI, DOKAZANI REZULTATI ("Proven benefits, proven results": 95 % / 89 % / 92 %) -->
<section class="nsb-sec<?php echo $nsb_cls(); ?>">
  <div class="nsb-wrap">
    <p class="nsb-kicker nsb-c">Rezultati</p>
    <h2 class="nsb-h2 nsb-c">Dokazane prednosti, <em>dokazani rezultati</em></h2>
    <ul class="nsb-stats">
      <?php foreach ( $nsb_stat as $st ) : ?>
      <li>
        <svg viewBox="0 0 36 36" width="80" height="80" aria-hidden="true">
          <circle cx="18" cy="18" r="16" stroke="#d6e2ef" stroke-width="3.6" fill="none"/>
          <circle cx="18" cy="18" r="16" stroke="#1f568e" stroke-width="3.6" fill="none" stroke-dasharray="<?php echo (int) $st[0]; ?>, 100" transform="rotate(-90 18 18)" stroke-linecap="round" pathLength="100"/>
          <text x="18" y="21.6" font-size="9.5" fill="#1f568e" text-anchor="middle" font-weight="700" font-family="Poppins, Arial, sans-serif"><?php echo (int) $st[0]; ?>%</text>
        </svg>
        <span><strong><?php echo (int) $st[0]; ?> %</strong> kupaca <?php echo esc_html( $st[1] ); ?></span>
        <small>*Na temelju četverotjednog neovisnog panela kupaca</small>
      </li>
      <?php endforeach; ?>
    </ul>
  </div>
</section>

<!-- 5) JEDINSTVENI MUŠKARCI ZASLUŽUJU VIŠE ("Unique Men Deserve More Than Just Ordinary Underwear") — slika ob besedilu -->
<section class="nsb-sec<?php echo $nsb_cls(); ?>">
  <div class="nsb-wrap">
    <div class="nsb-row2">
      <div class="nsb-media"><?php echo $nsb_img( 'nsb-s2-prica.webp', 'Dva prijatelja drže svilene bokserice' ); ?></div>
      <div class="nsb-copy">
        <p class="nsb-kicker">Naša priča</p>
        <h2 class="nsb-h3">Jedinstveni muškarci zaslužuju <em>više od običnog donjeg rublja</em></h2>
        <p>Sve je počelo na živopisnim tržnicama Singapura, gdje smo naišli na <strong>svilene bokserice</strong> koje su obećavale neusporedivu udobnost.</p>
        <p>Znatiželjni, isprobali smo ih — i razlika je bila nevjerojatna. <strong>Luksuzna mekoća i prozračnost tijekom cijelog dana</strong> bile su drugačije od svega što smo dotad iskusili.</p>
        <p class="nsb-big">To otkriće nadahnulo je NORIKS SilkBoxers: vrhunska udobnost svile za muškarce koji ne pristaju na manje.</p>
      </div>
    </div>
  </div>
</section>

<!-- 6) RECENZIJE KUPACA ("Customer Reviews", Loox) — mnenja s fotografijami, število po NORIKS (1081) -->
<section class="nsb-sec<?php echo $nsb_cls(); ?>">
  <div class="nsb-wrap">
    <p class="nsb-kicker nsb-c">Recenzije kupaca</p>
    <h2 class="nsb-h2 nsb-c">Muškarci <em>obožavaju</em> svoje NORIKS SilkBoxers</h2>
    <div class="nsb-score">
      <span class="nsb-score__num">4,9 / 5</span>
      <?php echo $nsb_stars( 5 ); ?>
      <span class="nsb-score__txt">1081 recenzija</span>
    </div>
    <div class="nsb-reviews">
      <?php foreach ( $nsb_rv as $r ) : ?>
      <article class="nsb-card<?php echo empty( $r['img'] ) ? ' nsb-card--txt' : ''; ?>">
        <?php if ( ! empty( $r['img'] ) ) : ?>
        <div class="nsb-card__img"><?php echo $nsb_img( $r['img'], 'Fotografija kupca: ' . $r['ime'] ); ?></div>
        <?php endif; ?>
        <div class="nsb-card__body">
          <?php echo $nsb_stars( $r['z'] ); ?>
          <h3 class="nsb-card__title"><?php echo esc_html( $r['naslov'] ); ?></h3>
          <p class="nsb-card__txt">„<?php echo esc_html( $r['tekst'] ); ?>”</p>
          <p class="nsb-card__name"><?php echo esc_html( $r['ime'] ); ?> <span class="nsb-ok">✓ Potvrđena kupnja</span></p>
        </div>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<style>
/* NORIKS stil (predloga why-modalsweatshirt.php / why-hands.php): oznaka + naslov z ležečim poudarkom, slika ob
   besedilu, izmenjujoča ozadja in strani. Modri poudarek po barvi izdelka (#1f568e, tamnoplave bokserice). */
.nsb-sec { padding: 60px 0; font-family: 'Poppins', system-ui, -apple-system, 'Segoe UI', Roboto, Arial, sans-serif; color: #1c2430; background: #fff; }
.nsb-sec * { box-sizing: border-box; }
.nsb-tint { background: #f1f5fa; }
.nsb-wrap { width: 100%; max-width: 1200px; margin: 0 auto; padding: 0 24px; }
.nsb-c { text-align: center; }
.nsb-sec h2, .nsb-sec h3 { font-family: inherit; text-transform: none; letter-spacing: 0; }
.nsb-kicker, .nsb-copy p.nsb-kicker { font-size: 12.5px; line-height: 1.4; font-weight: 700; letter-spacing: .14em; text-transform: uppercase; color: #1f568e; margin: 0 0 10px; }
.nsb-h2 { font-weight: 700; font-size: clamp(25px, 3.1vw, 36px); line-height: 1.2; margin: 0 0 14px; color: #1c2430; }
.nsb-h2 em, .nsb-h3 em { font-style: italic; color: #1f568e; }
.nsb-h3 { font-weight: 700; font-size: clamp(22px, 2.6vw, 30px); line-height: 1.25; margin: 0 0 16px; color: #1c2430; }
.nsb-sec img { display: block; width: 100%; height: auto; }

/* slika ob besedilu */
.nsb-row2 { display: grid; grid-template-columns: 1fr 1fr; gap: 56px; align-items: center; }
.nsb-row2--rev .nsb-media { order: 2; }
.nsb-media > img { border-radius: 10px; box-shadow: 0 2px 4px rgba(15,30,50,.05), 0 14px 40px rgba(15,30,50,.10); max-width: 520px; margin: 0 auto; aspect-ratio: 1 / 1; object-fit: cover; }
.nsb-grid4 { display: grid; grid-template-columns: 1fr 1fr; gap: 10px; max-width: 520px; margin: 0 auto; }
.nsb-grid4__cell img { aspect-ratio: 4 / 5; object-fit: cover; border-radius: 10px; box-shadow: 0 6px 18px rgba(15,30,50,.10); }
.nsb-copy p { font-size: 16px; line-height: 1.7; color: #434d5a; margin: 0 0 14px; }
.nsb-copy p strong { color: #1c2430; font-weight: 600; }
.nsb-copy p.nsb-big { font-size: 19px; font-weight: 700; color: #1c2430; line-height: 1.45; margin-top: 6px; }
.nsb-list { list-style: none; margin: 0 0 16px; padding: 0; }
.nsb-list li { position: relative; padding-left: 30px; margin: 0 0 9px; font-size: 15.5px; line-height: 1.55; color: #2f3845; }
.nsb-list li::before { content: "✓"; position: absolute; left: 0; top: 1px; width: 20px; height: 20px; border-radius: 50%; background: #1f568e; color: #fff; font-size: 11.5px; font-weight: 800; line-height: 20px; text-align: center; }

/* rezultati */
.nsb-stats { list-style: none; margin: 30px auto 0; padding: 0; display: grid; grid-template-columns: repeat(3, minmax(0, 1fr)); gap: 24px; max-width: 920px; }
.nsb-stats li { display: flex; flex-direction: column; align-items: center; text-align: center; gap: 10px; }
.nsb-stats svg { display: block; flex: 0 0 auto; }
.nsb-stats span { font-size: 15.5px; line-height: 1.55; color: #2f3845; font-weight: 500; max-width: 240px; }
.nsb-stats small { font-size: 12px; color: #6b7686; font-style: italic; max-width: 220px; line-height: 1.4; }

/* ocjene */
.nsb-stars { color: #f2a516; letter-spacing: 1px; font-size: 15px; }
.nsb-stars__off { color: #dfe5ec; }
.nsb-score { display: flex; justify-content: center; align-items: center; gap: 12px; margin: 0 0 28px; flex-wrap: wrap; }
.nsb-score__num { font-size: 26px; font-weight: 700; color: #1c2430; }
.nsb-score .nsb-stars { font-size: 20px; }
.nsb-score__txt { font-size: 14.5px; color: #5f6a78; }

/* mnenja */
.nsb-reviews { display: grid; grid-template-columns: repeat(4, minmax(0, 1fr)); gap: 18px; align-items: start; margin-top: 12px; }
.nsb-card { background: #fff; border: 1px solid #d9e3ee; border-radius: 10px; overflow: hidden; display: flex; flex-direction: column; }
.nsb-sec:not(.nsb-tint) .nsb-card { background: #f1f5fa; }
.nsb-card__img img { aspect-ratio: 3 / 4; object-fit: cover; }
.nsb-card__body { padding: 16px; }
.nsb-card__title { font-size: 15px; font-weight: 700; color: #1c2430; margin: 8px 0 6px; line-height: 1.35; }
.nsb-card__txt { font-size: 14.5px; line-height: 1.6; color: #2f3845; margin: 0 0 10px; font-style: italic; }
.nsb-card__name { font-size: 13.5px; font-weight: 600; color: #1c2430; margin: 0; }
.nsb-ok { color: #2f9e5f; font-weight: 600; font-size: 12px; margin-left: 4px; font-style: normal; }

@media (max-width: 989px) {
  .nsb-row2 { gap: 32px; }
  .nsb-reviews { grid-template-columns: repeat(2, minmax(0, 1fr)); }
}
@media (max-width: 749px) {
  .nsb-sec { padding: 42px 0; }
  .nsb-wrap { padding: 0 16px; }
  .nsb-row2 { grid-template-columns: 1fr; gap: 24px; }
  .nsb-row2--rev .nsb-media { order: 0; }
  .nsb-stats { grid-template-columns: 1fr; gap: 26px; }
  .nsb-reviews { gap: 12px; }
  .nsb-card__body { padding: 12px; }
}
@media (max-width: 420px) {
  .nsb-reviews { grid-template-columns: 1fr; }
}

/* galerija izdelka: sličice največ v 2 vrstah (5 na vrsto), ostale slike so dosegljive z drsenjem glavne slike */
.product_cat-orto-silkboxers .flex-control-thumbs li:nth-child(n+11) { display: none !important; }

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
.woocommerce-product-details__short-description .nsb-tick {
  position: absolute !important; left: 0 !important; top: 1px !important;
  width: 21px; height: 21px; border-radius: 50%;
  background: #2f9e5f !important; color: #fff !important;
  font-size: 12px !important; font-weight: 800 !important; line-height: 21px !important;
  text-align: center !important; display: inline-block !important; }
.woocommerce-product-details__short-description p:first-of-type { font-size: 16px; line-height: 1.55; }
</style>
