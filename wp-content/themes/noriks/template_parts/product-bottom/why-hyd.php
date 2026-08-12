<?php
/**
 * product-bottom: NORIKS HYD — boca za vodikovu vodu s PEM/SPE elektrolizom (orto-hyd).
 *
 * Redoslijed sekcija preslikan s referentne stranice (hydrah2):
 *   1. Pokretna traka (marquee)             "3.000 ppb · trajni filter · omiljena…"
 *   2. Karusel recenzija                     3 kratke izjave s fotografijama
 *   3. Watch It Fizz                         01_hidracija
 *   4. Antioxidant Power, Less Inflammation  03_prednosti
 *   5. Real User Stories                     3 kartice + 06_pravi-ljudi
 *   6. Perks of Hydrogen Water               4 prednosti
 *   7. Advanced Hydrogen Generation          04_kako-radi
 *   8. Ready to Elevate Hydration?           07_lifestyle + CTA
 * FAQ i recenzije renderira zajednicki reviews.php (ne ovdje).
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
$nh      = get_template_directory_uri() . '/img/hyd/';
$nh_path = get_template_directory() . '/img/hyd/';

$nh_has = function( $file ) use ( $nh_path ) { return file_exists( $nh_path . $file ); };
$nh_img = function( $file, $alt ) use ( $nh, $nh_path ) {
  if ( file_exists( $nh_path . $file ) ) {
    return '<img src="'.esc_url($nh.$file).'" alt="'.esc_attr($alt).'" loading="lazy">';
  }
  return '<div class="nhy-ph" role="img" aria-label="'.esc_attr($alt).'"><span>'.esc_html($alt).'</span></div>';
};

$nhy_marquee = array(
  '3.000 ppb maksimalna infuzija',
  'Trajni filter, bez zamjena',
  'Omiljena među ljubiteljima wellnessa',
);
$nhy_revs = array(
  array( 'av' => 'hyd-av-1.webp', 'name' => 'Aleks P.',
         'text' => 'Ova boca je promijenila moje treninge! Osjećam više energije i brže se oporavljam zahvaljujući infuziji vodika.' ),
  array( 'av' => 'hyd-av-2.webp', 'name' => 'Samanta L.',
         'text' => 'Obožavam gledati mjehuriće! Ciklus od 10 minuta daje savršenu dozu vode bogate vodikom. I koža mi djeluje blistavije.' ),
  array( 'av' => 'hyd-av-3.webp', 'name' => 'Mihael R.',
         'text' => 'Čvrsta izrada i nula okusa plastike. Punjiva baterija traje cijeli tjedan, a zvučna potvrda ciklusa je praktična.' ),
);
?>

<!-- ============ 1) Pokretna traka ============ -->
<section class="nhy-sec nhy-sec-flush">
  <div class="nhy-marquee" aria-hidden="true">
    <div class="nhy-marquee-track">
      <?php for ( $r = 0; $r < 4; $r++ ) : foreach ( $nhy_marquee as $m ) : ?>
        <span class="nhy-marquee-item"><?php echo esc_html( $m ); ?></span>
      <?php endforeach; endfor; ?>
    </div>
  </div>
</section>

<!-- ============ 2) Karusel recenzija ============ -->
<section class="nhy-sec nhy-sec-tight">
  <div class="nhy-wrap-sm">
    <div class="nhy-car" id="nhyCar">
      <button class="nhy-car-nav is-prev" type="button" aria-label="Prethodna recenzija">‹</button>
      <div class="nhy-car-track">
        <?php foreach ( $nhy_revs as $r ) : ?>
          <div class="nhy-car-slide">
            <?php if ( $nh_has( $r['av'] ) ) : ?>
              <div class="nhy-car-av"><img src="<?php echo esc_url( $nh . $r['av'] ); ?>" alt="" loading="lazy"></div>
            <?php endif; ?>
            <div class="nhy-car-body">
              <p class="nhy-car-text"><?php echo esc_html( $r['text'] ); ?></p>
              <p class="nhy-car-name"><?php echo esc_html( $r['name'] ); ?></p>
              <div class="nhy-car-stars">★★★★★</div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
      <button class="nhy-car-nav is-next" type="button" aria-label="Sljedeća recenzija">›</button>
    </div>
    <p class="nhy-car-sub">Na temelju više od 1.000 recenzija</p>
  </div>
</section>

<!-- ============ 3) Pogledajte kako pjeni ============ -->
<section class="nhy-sec">
  <div class="nhy-wrap nhy-row2">
    <div class="nhy-media"><?php echo $nh_img('hyd-01-hidracija.webp','Mjehurići vodika tijekom elektrolize'); ?></div>
    <div class="nhy-copy">
      <h2 class="nhy-h2">Pogledajte kako pjeni</h2>
      <p>Pogledajte snažne mjehuriće koji nastaju tijekom elektrolize — to je čista infuzija vodika u najboljem izdanju. Voda pritom ostaje bistra i osvježavajuća nakon svakog ciklusa.</p>
      <ul class="nhy-check">
        <li>3 minute → oko 1.600 ppb H₂</li>
        <li>10 minuta → do 3.000 ppb H₂</li>
        <li>450 mL · USB punjenje u 30–60 min</li>
      </ul>
    </div>
  </div>
</section>

<!-- ============ 4) Snaga antioksidansa, manje upala ============ -->
<section class="nhy-sec nhy-alt">
  <div class="nhy-wrap nhy-row2">
    <div class="nhy-copy">
      <h2 class="nhy-h2">Snaga antioksidansa, manje upala</h2>
      <p>Vodikova voda poznata je po snažnom antioksidativnom i protuupalnom djelovanju, koje se u znanstvenim istraživanjima povezuje s dobrobitima kod više od 150 stanja.</p>
      <p>Kliničke studije pokazale su i da unos triju boca vodikove vode može imati antioksidativni učinak usporediv s konzumacijom stotina komada voća i povrća.</p>
      <p class="nhy-note">Vodikova voda je dodatak svakodnevnoj hidraciji, a ne zamjena za liječničku terapiju.</p>
    </div>
    <div class="nhy-media"><?php echo $nh_img('hyd-03-prednosti.webp','Antioksidativno djelovanje vodikove vode'); ?></div>
  </div>
</section>

<!-- ============ 5) Prave price korisnika ============ -->
<section class="nhy-sec">
  <div class="nhy-wrap nhy-center">
    <h2 class="nhy-h2">Prave priče korisnika</h2>
  </div>
  <div class="nhy-wrap nhy-row2">
    <div class="nhy-media nhy-media-shadow"><?php echo $nh_img('hyd-06-pravi-ljudi.webp','Korisnici NORIKS HYD boce'); ?></div>
    <div class="nhy-copy">
      <ul class="nhy-stories">
        <li><strong>Oporavak s više energije</strong><span>„Nakon svakog treninga osjećam manje umora u mišićima. HydraH₂ mi je oporavak učinio jednostavnim."</span></li>
        <li><strong>Hidracija koja se vidi</strong><span>„Koža mi je punija i bolje hidrirana. Savršeno za svakodnevnu rutinu."</span></li>
        <li><strong>Praktično i čisto</strong><span>„Nema okusa plastike, punjenje preko USB-a je jednostavno. Moja svakodnevna boca."</span></li>
      </ul>
    </div>
  </div>
</section>

<!-- ============ 6) Prednosti vodikove vode ============ -->
<section class="nhy-sec nhy-alt">
  <div class="nhy-wrap nhy-center">
    <h2 class="nhy-h2">Prednosti vodikove vode</h2>
  </div>
  <div class="nhy-wrap">
    <div class="nhy-perks">
      <div class="nhy-perk"><strong>Bolja hidracija</strong><span>Vodu obogaćuje vodikom visoke koncentracije za optimalnu hidraciju.</span></div>
      <div class="nhy-perk"><strong>Punjiva baterija</strong><span>USB punjenje za manje od 60 minuta drži bocu spremnom cijeli dan.</span></div>
      <div class="nhy-perk"><strong>Trajni filter</strong><span>Ugrađeni filter ne treba zamjenu — štedi vam vrijeme i novac.</span></div>
      <div class="nhy-perk"><strong>Brzi ciklusi</strong><span>Odaberite ciklus od 3 ili 10 minuta za prilagođenu dozu vodika.</span></div>
    </div>
  </div>
</section>

<!-- ============ 7) Napredna proizvodnja vodika ============ -->
<section class="nhy-sec">
  <div class="nhy-wrap nhy-row2">
    <div class="nhy-media"><?php echo $nh_img('hyd-04-kako-radi.webp','PEM i SPE elektroliza — proizvodnja vodika'); ?></div>
    <div class="nhy-copy">
      <h2 class="nhy-h2">Napredna proizvodnja vodika</h2>
      <p>Uz vrhunsku <strong>PEM i SPE elektrolizu</strong> NORIKS HYD stvara do <strong>3.000 ppb</strong> molekularnog vodika u vodi. Staklena boca s bazom od nehrđajućeg čelika osigurava da voda nikada ne dodiruje plastiku, a trajni filter generatora uklanja brigu o održavanju. Automatsko odzračivanje izbacuje preostale plinove za čisto i sigurno pijenje.</p>
      <ul class="nhy-check">
        <li>Titanske elektrode s platinskim slojem</li>
        <li>99,99 % čisti vodik, nusprodukti odlaze kroz odzrak</li>
        <li>Radi s bilo kojom pitkom vodom, i s destiliranom</li>
      </ul>
    </div>
  </div>
</section>

<!-- ============ 8) Spremni podici hidraciju? ============ -->
<section class="nhy-sec nhy-alt">
  <div class="nhy-wrap nhy-row2">
    <div class="nhy-copy">
      <h2 class="nhy-h2">Spremni podići hidraciju na višu razinu?</h2>
      <p>Pridružite se tisućama onih koji su svoju wellness rutinu nadogradili vodom bogatom vodikom. Osjetite nalet energije, bolji oporavak i hidraciju koja se vidi.</p>
      <a class="nhy-cta" href="#bundle-selector">Naruči NORIKS HYD</a>
    </div>
    <div class="nhy-media"><?php echo $nh_img('hyd-07-lifestyle.webp','NORIKS HYD u svakodnevnoj upotrebi'); ?></div>
  </div>
</section>

<style>
  .nhy-sec { padding: 46px 0; background: #fff; }
  .nhy-sec-flush { padding: 0; }
  .nhy-sec-tight { padding: 28px 0 34px; }
  .nhy-alt { background: #eef4fa; }
  .nhy-wrap { max-width: 1180px; margin: 0 auto; padding: 0 18px; }
  .nhy-wrap-sm { max-width: 820px; margin: 0 auto; padding: 0 18px; }
  .nhy-row2 { display: grid; grid-template-columns: 1fr 1fr; gap: 48px; align-items: center; }
  .nhy-h2 { font-size: clamp(24px,3.1vw,36px); font-weight: 800; color: #0f2f5c; line-height: 1.2; margin: 0 0 16px; }
  .nhy-center { text-align: center; }
  .nhy-copy p { font-size: 16px; line-height: 1.7; color: #3a3a3a; margin: 0 0 14px; }
  .nhy-note { font-size: 14px !important; color: #6b6b6b !important; }
  .nhy-media img { width: 100%; height: auto; display: block; border-radius: 16px; }
  .nhy-media-shadow img { box-shadow: 0 10px 34px rgba(15,47,92,.12); }

  .nhy-ph { width: 100%; aspect-ratio: 1/1; background: #e6eef7; border: 1px dashed #c9d9e9; border-radius: 16px;
            display: flex; align-items: center; justify-content: center; padding: 18px; box-sizing: border-box; }
  .nhy-ph span { font-size: 13px; line-height: 1.45; color: #8ba3bd; text-align: center; }

  /* 1) pokretna traka */
  .nhy-marquee { background: #57a8dd; overflow: hidden; padding: 13px 0; }
  .nhy-marquee-track { display: flex; align-items: center; gap: 56px; width: max-content;
                       animation: nhyMarquee 28s linear infinite; }
  .nhy-marquee-item { font-size: 15.5px; font-weight: 600; color: #0f2f5c; white-space: nowrap; }
  @keyframes nhyMarquee { from { transform: translateX(0); } to { transform: translateX(-50%); } }
  @media (prefers-reduced-motion: reduce) { .nhy-marquee-track { animation: none; } }

  /* 2) karusel recenzija */
  .nhy-car { position: relative; display: flex; align-items: center; gap: 6px; }
  .nhy-car-track { display: flex; overflow-x: auto; scroll-snap-type: x mandatory; scroll-behavior: smooth;
                   -webkit-overflow-scrolling: touch; scrollbar-width: none; flex: 1 1 auto; }
  .nhy-car-track::-webkit-scrollbar { display: none; }
  .nhy-car-slide { flex: 0 0 100%; scroll-snap-align: center; display: flex; align-items: center; gap: 18px;
                   background: #fff; border: 1px solid #e3ebf3; border-radius: 16px; padding: 18px 22px;
                   box-shadow: 0 4px 16px rgba(15,47,92,.06); box-sizing: border-box; }
  .nhy-car-av { flex: 0 0 74px; }
  .nhy-car-av img { width: 74px; height: 74px; border-radius: 50%; object-fit: cover; display: block; }
  .nhy-car-body { text-align: center; flex: 1 1 auto; }
  .nhy-car-text { font-size: 15.5px; line-height: 1.55; color: #141414; margin: 0 0 8px; }
  .nhy-car-name { font-size: 13.5px; font-style: italic; color: #6b6b6b; margin: 0 0 6px; }
  .nhy-car-stars { color: #2e7fd4; font-size: 14px; letter-spacing: 2px; }
  .nhy-car-nav { flex: 0 0 auto; width: 30px; height: 30px; border: 0; background: transparent; cursor: pointer;
                 font-size: 26px; line-height: 1; color: #8ba3bd; }
  .nhy-car-nav:hover { color: #0f2f5c; }
  .nhy-car-sub { text-align: center; font-size: 13px; color: #6b6b6b; margin: 12px 0 0; }

  .nhy-check { list-style: none; margin: 0 0 16px; padding: 0; }
  .nhy-check li { position: relative; padding: 0 0 11px 30px; font-size: 15.5px; color: #0f2f5c; line-height: 1.5; }
  .nhy-check li:before { content: "✓"; position: absolute; left: 0; top: 0; width: 20px; height: 20px; background: #2e7fd4; color: #fff; border-radius: 50%; font-size: 12px; text-align: center; line-height: 20px; }

  .nhy-stories { list-style: none; margin: 0; padding: 0; }
  .nhy-stories li { background: #f4f8fc; border: 1px solid #dbe7f3; border-radius: 14px; padding: 14px 16px; margin-bottom: 12px; }
  .nhy-stories strong { display: block; font-size: 15.5px; color: #0f2f5c; margin-bottom: 4px; }
  .nhy-stories span { display: block; font-size: 14.5px; line-height: 1.6; color: #5a5a5a; }

  .nhy-perks { display: grid; grid-template-columns: repeat(4,1fr); gap: 20px; }
  .nhy-perk { background: #fff; border: 1px solid #dbe7f3; border-radius: 16px; padding: 20px 18px; }
  .nhy-perk strong { display: block; font-size: 16px; color: #0f2f5c; margin-bottom: 6px; }
  .nhy-perk span { display: block; font-size: 14.5px; line-height: 1.6; color: #5a5a5a; }

  .nhy-cta { display: inline-block; margin-top: 8px; background: #0f2f5c; color: #fff; font-weight: 700; font-size: 16px; padding: 14px 30px; border-radius: 10px; text-decoration: none; }
  .nhy-cta:hover { background: #2e7fd4; color: #fff; }

  @media (max-width: 980px) { .nhy-perks { grid-template-columns: repeat(2,1fr); } }
  @media (max-width: 820px) {
    .nhy-sec { padding: 30px 0; }
    .nhy-row2 { grid-template-columns: 1fr; gap: 20px; }
    .nhy-row2 .nhy-media { order: -1; }
    .nhy-h2 { font-size: 2rem; }
    .nhy-car-slide { flex-direction: column; text-align: center; gap: 12px; padding: 18px 16px; }
  }
  @media (max-width: 560px) { .nhy-perks { grid-template-columns: 1fr; } }

  /* NORIKS HYD nema velicine — nema linka na tablicu velicina. */
  .noriks-global-sizechart, .gck-size-link, .gck-size-link-wrap,
  #open-size-chart, #open-size-chartCustom { display: none !important; }

  /* Kratki opis: bez standardnih tocaka, ostaju samo emotikoni iz teksta. */
  .woocommerce-product-details__short-description ul { list-style: none; margin: 8px 0 26px; padding-left: 0; }
  .woocommerce-product-details__short-description ul li { list-style: none; padding-left: 0; margin-left: 0; line-height: 1.55; margin-bottom: 6px; }
  .woocommerce-product-details__short-description p:has(+ ul) { margin-top: 20px; margin-bottom: 4px; }
</style>

<script>
(function(){
  document.querySelectorAll('a.nhy-cta[href="#bundle-selector"]').forEach(function(a){
    a.addEventListener('click', function(e){
      e.preventDefault();
      var t = document.getElementById('bundle-selector') || document.querySelector('.single_add_to_cart_button');
      if (t) t.scrollIntoView({ behavior: 'smooth', block: 'center' });
    });
  });

  var car = document.getElementById('nhyCar');
  if (!car) { return; }
  var track = car.querySelector('.nhy-car-track');
  var prev  = car.querySelector('.is-prev');
  var next  = car.querySelector('.is-next');
  if (!track) { return; }
  function go(dir){
    var w = track.clientWidth;
    var max = track.scrollWidth - w - 2;
    var to = track.scrollLeft + dir * w;
    if (to > max) { to = 0; }
    if (to < 0)   { to = max; }
    track.scrollTo({ left: to, behavior: 'smooth' });
  }
  if (prev) { prev.addEventListener('click', function(){ go(-1); }); }
  if (next) { next.addEventListener('click', function(){ go(1); }); }
  var timer = setInterval(function(){ go(1); }, 6000);
  car.addEventListener('mouseenter', function(){ clearInterval(timer); });
})();
</script>
