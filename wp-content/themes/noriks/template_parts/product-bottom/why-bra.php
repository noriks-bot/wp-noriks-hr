<?php
/**
 * product-bottom: NORIKS BRA — grudnjak s prednjim zakopcavanjem i potporom drzanja (orto-bra).
 * Sekcije prate referentnu stranicu (cross-back posture bra), tekst na HR,
 * slike su NORIKS kreative iz img/bra/. Naizmjenicno slika/tekst.
 *   1. Ramena se sama vracaju na mjesto      slika desno   05_korekcija
 *   2. Ergonomski dizajn do detalja          slika lijevo  01_leopard
 *   3. Prekrizena ledna potpora              slika desno   04_znacajke
 *   4. Prirodno podizanje i oblikovanje      slika lijevo  03_podizanje
 *   5. Prije i poslije                       usko, sredina 06_prije-poslije
 *   6. Prednje zakopcavanje u sekundi        video         bra-anim-2
 *   7. Kako stoji na tijelu                  slika lijevo  07_model
 *   8. Recenzija kupca (Marija P.)           slika desno   08_recenzija
 *   9. Video recenzije                       slider        3 mp4
 * Recenzije i FAQ renderira zajednicki reviews.php (ne ovdje).
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
$nb      = get_template_directory_uri() . '/img/bra/';
$nb_path = get_template_directory() . '/img/bra/';

$nb_img = function( $file, $alt ) use ( $nb, $nb_path ) {
  if ( file_exists( $nb_path . $file ) ) {
    return '<img src="'.esc_url($nb.$file).'" alt="'.esc_attr($alt).'" loading="lazy">';
  }
  return '<div class="nbr-ph" role="img" aria-label="'.esc_attr($alt).'"><span>'.esc_html($alt).'</span></div>';
};
$nb_has = function( $file ) use ( $nb_path ) { return file_exists( $nb_path . $file ); };
?>

<!-- ============ 1) Ramena se sama vracaju na mjesto ============ -->
<section class="nbr-sec">
  <div class="nbr-wrap nbr-row2">
    <div class="nbr-copy">
      <p class="nbr-eyebrow">Korekcija držanja</p>
      <h2 class="nbr-h2">Ramena se sama vraćaju na mjesto</h2>
      <p class="nbr-lead">Pogrbljeno držanje rijetko je odluka — obično je navika koju tijelo pokupi za stolom, za volanom i uz telefon.</p>
      <p>NORIKS BRA radi tiho u pozadini: prekriženi dizajn na leđima nježno povlači ramena unatrag i drži prsni koš otvorenim. Nema stezanja i nema remenja preko trbuha — potporu osjetite kao lagani podsjetnik, ne kao ortopedski pojas.</p>
      <ul class="nbr-check">
        <li>Ramena ostaju unatrag i kad se opustite</li>
        <li>Manje napetosti u vratu i gornjem dijelu leđa</li>
        <li>Uspravnija silueta odmah, bez navikavanja</li>
      </ul>
    </div>
    <div class="nbr-media"><?php echo $nb_img('bra-05-korekcija.webp','Korekcija držanja s NORIKS BRA grudnjakom'); ?></div>
  </div>
</section>

<!-- ============ 2) Ergonomski dizajn do detalja ============ -->
<section class="nbr-sec nbr-alt">
  <div class="nbr-wrap nbr-row2">
    <div class="nbr-media"><?php echo $nb_img('bra-01-ergonomija-leopard.webp','Ergonomski dizajn NORIKS BRA grudnjaka'); ?></div>
    <div class="nbr-copy">
      <h2 class="nbr-h2">Ergonomski dizajn do detalja</h2>
      <p>Svaki dio grudnjaka ima zadatak. Ništa nije tu samo zbog izgleda.</p>
      <ul class="nbr-feat">
        <li><strong>Šire naramenice</strong><span>Težina se raspoređuje po većoj površini — bez urezivanja u ramena.</span></li>
        <li><strong>Naramenice za podizanje</strong><span>Blago podižu grudi i otvaraju prsni koš.</span></li>
        <li><strong>Bešavne košarice</strong><span>Glatka, oblikovana forma bez šavova koji se otiskuju kroz odjeću.</span></li>
        <li><strong>Visoka bočna pokrivenost</strong><span>Skuplja i izglađuje liniju ispod pazuha.</span></li>
        <li><strong>Prednje zakopčavanje</strong><span>Dvije kopče, 8 razina zategnutosti.</span></li>
      </ul>
    </div>
  </div>
</section>

<!-- ============ 3) Prekrizena ledna potpora ============ -->
<section class="nbr-sec">
  <div class="nbr-wrap nbr-row2">
    <div class="nbr-copy">
      <h2 class="nbr-h2">Prekrižena leđna potpora</h2>
      <p>Klasični grudnjak vuče prema dolje i naprijed. Prekriženi X na leđima radi obrnuto — povlači lopatice jednu prema drugoj i rasterećuje vrat.</p>
      <ul class="nbr-inline-list">
        <li>X potpora na leđima</li>
        <li>Bez žice</li>
        <li>Bez klizanja naramenica</li>
        <li>Ultra-mekana tkanina</li>
      </ul>
      <p class="nbr-strong">Rezultat: uspravnija leđa bez osjećaja da nosite pomagalo.</p>
    </div>
    <div class="nbr-media"><?php echo $nb_img('bra-04-znacajke.webp','Prekrižena leđna potpora i značajke grudnjaka'); ?></div>
  </div>
</section>

<!-- ============ 4) Prirodno podizanje i oblikovanje ============ -->
<section class="nbr-sec nbr-alt">
  <div class="nbr-wrap nbr-row2">
    <div class="nbr-media"><?php echo $nb_img('bra-03-podizanje.webp','Prirodno podizanje i oblikovanje grudi'); ?></div>
    <div class="nbr-copy">
      <h2 class="nbr-h2">Prirodno podizanje i oblikovanje</h2>
      <p>Čvrsta traka ispod grudi i oblikovane košarice zajedno daju stabilan oslonac — podizanje dolazi iz kroja, a ne iz žice koja pritišće rebra.</p>
      <ul class="nbr-check">
        <li>Stabilna traka ispod grudi koja se ne penje</li>
        <li>Oblikovane košarice bez šavova</li>
        <li>Glatka linija i ispod pripijene odjeće</li>
      </ul>
      <a class="nbr-cta" href="#bundle-selector">Odaberi svoju veličinu</a>
    </div>
  </div>
</section>

<!-- ============ 5) Prije i poslije ============ -->
<section class="nbr-sec nbr-narrow">
  <div class="nbr-wrap-sm nbr-center">
    <h2 class="nbr-h2">Razlika se vidi odmah</h2>
    <p class="nbr-sub">Ista osoba, ista majica — jedina razlika je grudnjak ispod.</p>
    <div class="nbr-media nbr-media-shadow"><?php echo $nb_img('bra-06-prije-poslije.webp','Prije i poslije — držanje s NORIKS BRA grudnjakom'); ?></div>
  </div>
</section>

<!-- ============ 6) Prednje zakopcavanje u sekundi ============ -->
<section class="nbr-sec nbr-alt">
  <div class="nbr-wrap nbr-row2">
    <div class="nbr-copy">
      <h2 class="nbr-h2">Zakopčate ga sprijeda — u sekundi</h2>
      <p>Bez izvijanja ruku iza leđa i bez traženja kopče naslijepo. Dvije kopče sprijeda daju <strong>8 razina zategnutosti</strong>, pa isti grudnjak prilagodite raspoloženju dana.</p>
      <ul class="nbr-steps">
        <li>Obucite grudnjak kao majicu, kopča je sprijeda.</li>
        <li>Zakopčajte na razinu koja vam odgovara.</li>
        <li>Poravnajte naramenice — i gotovi ste.</li>
      </ul>
      <p class="nbr-note">Zategnutost mijenjate u hodu: čvršće ujutro, opuštenije navečer.</p>
    </div>
    <div class="nbr-media">
      <?php if ( $nb_has('bra-anim-2.mp4') ) : ?>
        <video class="nbr-video" src="<?php echo esc_url($nb.'bra-anim-2.mp4'); ?>" poster="<?php echo esc_url($nb.'bra-anim-2-poster.webp'); ?>" autoplay muted loop playsinline preload="metadata"></video>
      <?php else : echo $nb_img('bra-02-ergonomija-crna.webp','Prednje zakopčavanje grudnjaka'); endif; ?>
    </div>
  </div>
</section>

<!-- ============ 7) Kako stoji na tijelu ============ -->
<section class="nbr-sec">
  <div class="nbr-wrap nbr-row2">
    <div class="nbr-media"><?php echo $nb_img('bra-07-model.webp','NORIKS BRA na modelu'); ?></div>
    <div class="nbr-copy">
      <h2 class="nbr-h2">Kako stoji na tijelu</h2>
      <p>Grudnjak prati liniju tijela i ne stvara nabore ispod odjeće. Visoki bočni dio prekriva zonu ispod pazuha, a mekani rub ne ostavlja tragove na koži.</p>
      <ul class="nbr-check">
        <li>Nevidljiv ispod majice i pripijene haljine</li>
        <li>Ne urezuje se ni nakon cijelog dana</li>
        <li>Dostupno u bež, crnoj i leopard nijansi</li>
      </ul>
      <p class="nbr-note">Model na fotografiji ima 47,5&nbsp;kg i 34B — nosi veličinu S.</p>
    </div>
  </div>
</section>

<!-- ============ 8) Recenzija kupca ============ -->
<section class="nbr-sec nbr-alt">
  <div class="nbr-wrap nbr-row2">
    <div class="nbr-copy">
      <p class="nbr-eyebrow">Provjereni kupac</p>
      <h2 class="nbr-h2">„Drži mi leđa ravnima"</h2>
      <div class="nbr-stars">★★★★★</div>
      <p class="nbr-quote">Drži mi leđa ravnima i uklonila je bolove u leđima. Izuzetno je udoban, ne vidi se ispod odjeće i cijeli dan se osjećam lijepo. Kupila sam crni NORIKS u veličini L i već naručujem i bijeli. Toplo preporučujem!</p>
      <p class="nbr-rev-name">Marija P. · Hrvatska</p>
    </div>
    <div class="nbr-media"><?php echo $nb_img('bra-08-recenzija.webp','Recenzija kupca — NORIKS BRA'); ?></div>
  </div>
</section>

<!-- ============ 9) Video recenzije ============ -->
<?php if ( $nb_has('bra-review-1.mp4') ) : ?>
<section class="nbr-sec">
  <div class="nbr-wrap nbr-center">
    <h2 class="nbr-h2">Kupci pokazuju kako ga nose</h2>
    <p class="nbr-sub">Snimke naših kupaca — bez montaže i bez studija.</p>
  </div>
  <div class="nbr-wrap">
    <div class="nbr-slider" id="nbrVideoSlider">
      <div class="nbr-track">
        <?php for ( $i = 1; $i <= 3; $i++ ) :
          if ( ! $nb_has( 'bra-review-'.$i.'.mp4' ) ) { continue; } ?>
          <div class="nbr-slide">
            <video class="nbr-vrev" src="<?php echo esc_url($nb.'bra-review-'.$i.'.mp4'); ?>" poster="<?php echo esc_url($nb.'bra-review-'.$i.'-poster.webp'); ?>" controls playsinline preload="none"></video>
          </div>
        <?php endfor; ?>
      </div>
      <div class="nbr-dots" aria-hidden="true"></div>
    </div>
    <div class="nbr-center"><a class="nbr-cta" href="#bundle-selector">Naruči NORIKS BRA</a></div>
  </div>
</section>
<?php endif; ?>

<style>
  .nbr-sec { padding: 46px 0; background: #fff; }
  .nbr-alt { background: #f6f2ef; }
  .nbr-wrap { max-width: 1180px; margin: 0 auto; padding: 0 18px; }
  .nbr-wrap-sm { max-width: 760px; margin: 0 auto; padding: 0 18px; }
  .nbr-row2 { display: grid; grid-template-columns: 1fr 1fr; gap: 48px; align-items: center; }
  .nbr-h2 { font-size: clamp(24px,3.1vw,36px); font-weight: 800; color: #141414; line-height: 1.15; margin: 0 0 16px; }
  .nbr-eyebrow { font-size: 12.5px; font-weight: 800; letter-spacing: .12em; text-transform: uppercase; color: #a97a63; margin: 0 0 8px; }
  .nbr-center { text-align: center; }
  .nbr-copy p, .nbr-sub { font-size: 16px; line-height: 1.65; color: #3a3a3a; margin: 0 0 14px; }
  .nbr-sub { max-width: 820px; margin: 0 auto 26px; }
  .nbr-lead { font-weight: 700; color: #141414; }
  .nbr-strong { font-weight: 700; color: #141414; }
  .nbr-note { font-size: 14px !important; color: #6b6b6b !important; }
  .nbr-media img, .nbr-video { width: 100%; height: auto; display: block; border-radius: 16px; }
  .nbr-media-shadow img { box-shadow: 0 10px 34px rgba(0,0,0,.10); }

  .nbr-ph { width: 100%; aspect-ratio: 4/5; background: #efe9e5; border: 1px dashed #ddd0c8; border-radius: 16px;
            display: flex; align-items: center; justify-content: center; padding: 18px; box-sizing: border-box; }
  .nbr-ph span { font-size: 13px; line-height: 1.45; color: #a08e83; text-align: center; }

  .nbr-check { list-style: none; margin: 0 0 16px; padding: 0; }
  .nbr-check li { position: relative; padding: 0 0 11px 30px; font-size: 15.5px; color: #141414; line-height: 1.5; }
  .nbr-check li:before { content: "✓"; position: absolute; left: 0; top: 0; width: 20px; height: 20px; background: #141414; color: #fff; border-radius: 50%; font-size: 12px; text-align: center; line-height: 20px; }

  .nbr-feat { list-style: none; margin: 0; padding: 0; }
  .nbr-feat li { padding: 12px 0; border-bottom: 1px solid #e8ded8; }
  .nbr-feat li:last-child { border-bottom: 0; }
  .nbr-feat strong { display: block; font-size: 15.5px; color: #141414; margin-bottom: 3px; }
  .nbr-feat span { display: block; font-size: 14.5px; line-height: 1.55; color: #5a5a5a; }

  .nbr-inline-list { list-style: none; display: flex; flex-wrap: wrap; gap: 8px 10px; margin: 0 0 16px; padding: 0; }
  .nbr-inline-list li { background: #fff; border: 1px solid #e4ddd8; border-radius: 999px; padding: 8px 16px; font-size: 14px; color: #141414; }

  .nbr-steps { list-style: none; counter-reset: nbrstep; margin: 0 0 16px; padding: 0; }
  .nbr-steps li { counter-increment: nbrstep; position: relative; padding: 0 0 14px 40px; font-size: 15.5px; line-height: 1.55; color: #3a3a3a; }
  .nbr-steps li:before { content: counter(nbrstep); position: absolute; left: 0; top: 0; width: 26px; height: 26px; background: #141414; color: #fff; border-radius: 50%; font-size: 13px; font-weight: 700; text-align: center; line-height: 26px; }

  .nbr-stars { color: #f5a623; font-size: 18px; letter-spacing: 2px; margin-bottom: 10px; }
  .nbr-quote { font-size: 17px !important; line-height: 1.6 !important; color: #141414 !important; font-style: italic; }
  .nbr-rev-name { font-size: 13.5px !important; font-weight: 700; color: #6b6b6b !important; margin: 0 !important; }

  .nbr-cta { display: inline-block; margin-top: 8px; background: #141414; color: #fff; font-weight: 700; font-size: 16px; padding: 14px 30px; border-radius: 10px; text-decoration: none; }
  .nbr-cta:hover { background: #E8450E; color: #fff; }

  /* video recenzije */
  .nbr-slider { position: relative; }
  .nbr-track { display: grid; grid-template-columns: repeat(3,1fr); gap: 22px; }
  .nbr-vrev { width: 100%; aspect-ratio: 9/16; object-fit: cover; border-radius: 14px; background: #000; display: block; }
  .nbr-dots { display: none; }

  @media (max-width: 820px) {
    .nbr-sec { padding: 30px 0; }
    .nbr-row2 { grid-template-columns: 1fr; gap: 20px; }
    .nbr-row2 .nbr-media { order: -1; }
    .nbr-h2 { font-size: 2rem; }
    .nbr-track { display: flex; overflow-x: auto; scroll-snap-type: x mandatory; gap: 12px;
                 -webkit-overflow-scrolling: touch; scrollbar-width: none; padding-bottom: 4px; }
    .nbr-track::-webkit-scrollbar { display: none; }
    .nbr-slide { flex: 0 0 78%; scroll-snap-align: center; }
    .nbr-dots { display: flex; justify-content: center; gap: 7px; margin-top: 12px; }
    .nbr-dots i { width: 7px; height: 7px; border-radius: 50%; background: #d8ccc4; display: block; transition: background .2s, width .2s; }
    .nbr-dots i.is-on { background: #141414; width: 18px; border-radius: 4px; }
  }

  /* NORIKS BRA nema link "Tablica veličina" iznad ponuda — tablica je u akordeonu. */
  .noriks-global-sizechart { display: none !important; }

  /* Kratki opis: bez standardnih tocaka, ostaje samo ✓ iz teksta. */
  .woocommerce-product-details__short-description ul { list-style: none; margin: 8px 0 26px; padding-left: 0; }
  .woocommerce-product-details__short-description ul li { list-style: none; padding-left: 0; margin-left: 0; line-height: 1.55; margin-bottom: 6px; }
  .woocommerce-product-details__short-description p:has(+ ul) { margin-top: 20px; margin-bottom: 4px; }
</style>

<script>
(function(){
  document.querySelectorAll('a.nbr-cta[href="#bundle-selector"]').forEach(function(a){
    a.addEventListener('click', function(e){
      e.preventDefault();
      var t = document.getElementById('bundle-selector') || document.querySelector('.single_add_to_cart_button');
      if (t) t.scrollIntoView({ behavior: 'smooth', block: 'center' });
    });
  });

  /* Tockice ispod slidera video recenzija (samo na mobitelu). */
  var sl = document.getElementById('nbrVideoSlider');
  if (!sl) { return; }
  var track = sl.querySelector('.nbr-track');
  var dots  = sl.querySelector('.nbr-dots');
  var items = track ? track.querySelectorAll('.nbr-slide') : [];
  if (!track || !dots || items.length < 2) { return; }
  for (var i = 0; i < items.length; i++) { dots.appendChild(document.createElement('i')); }
  var marks = dots.querySelectorAll('i');
  function paint(){
    var idx = Math.round(track.scrollLeft / (track.scrollWidth / items.length));
    if (idx < 0) { idx = 0; }
    if (idx > items.length - 1) { idx = items.length - 1; }
    for (var k = 0; k < marks.length; k++) { marks[k].classList.toggle('is-on', k === idx); }
  }
  track.addEventListener('scroll', function(){ window.requestAnimationFrame(paint); }, { passive: true });
  paint();
})();
</script>
