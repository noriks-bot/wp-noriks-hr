<?php
/**
 * product-bottom: NORIKS BRA — grudnjak s prednjim zakopcavanjem i potporom drzanja (orto-bra).
 *
 * Sekcije (redoslijed po referentnoj stranici) — prve DVIJE imaju animaciju,
 * kao i na referenci:
 *   1. Crisscross Back For Better Posture   animacija bra-anim-1
 *   2. Natural Lift & Flattering Shaping    animacija bra-anim-2
 *   3. Convenient Front Closure Design      bra-anim-4 ako postoji, inace slika
 *   4. Precision In Every Detail            4 plocice s izrezanim detaljima
 *   5. Loved By 12,000+ Ladies Worldwide    4 recenzije + UGC snimke kupaca
 * Recenzije i FAQ renderira zajednicki reviews.php (ne ovdje).
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
$nb      = get_template_directory_uri() . '/img/bra/';
$nb_path = get_template_directory() . '/img/bra/';

$nb_has = function( $file ) use ( $nb_path ) { return file_exists( $nb_path . $file ); };
$nb_img = function( $file, $alt ) use ( $nb, $nb_path ) {
  if ( file_exists( $nb_path . $file ) ) {
    return '<img src="'.esc_url($nb.$file).'" alt="'.esc_attr($alt).'" loading="lazy">';
  }
  return '<div class="nbr-ph" role="img" aria-label="'.esc_attr($alt).'"><span>'.esc_html($alt).'</span></div>';
};
/* Animacija ako postoji, inace staticna slika (kad dodamo _002 i _003 s reference). */
$nb_anim = function( $mp4, $fallback_img, $alt ) use ( $nb, $nb_path, $nb_img ) {
  if ( file_exists( $nb_path . $mp4 ) ) {
    $poster = str_replace( '.mp4', '-poster.webp', $mp4 );
    return '<video class="nbr-video" src="'.esc_url($nb.$mp4).'" poster="'.esc_url($nb.$poster).'"'
         . ' autoplay muted loop playsinline preload="metadata" aria-label="'.esc_attr($alt).'"></video>';
  }
  return $nb_img( $fallback_img, $alt );
};
?>

<!-- ============ 1) Prekrizena ledna potpora za bolje drzanje ============ -->
<section class="nbr-sec nbr-alt">
  <div class="nbr-wrap nbr-row2">
    <div class="nbr-media"><?php echo $nb_anim('bra-anim-1-v2.mp4','bra-04-znacajke.webp','Prekrižena leđna potpora — NORIKS BRA'); ?></div>
    <div class="nbr-copy">
      <h2 class="nbr-h2">💪 Prekrižena leđna potpora za bolje držanje</h2>
      <p>Naš prepoznatljivi prekriženi kroj naramenica nježno poravnava ramena i gornji dio leđa. Učinkovito odvraća od pogrbljenog položaja i pomaže vam zadržati uspravnu, podignutu siluetu i prirodno samouvjereno držanje tijekom cijelog dana.</p>
    </div>
  </div>
</section>

<!-- ============ 2) Prirodno podizanje i oblikovanje (drugi gif) ============ -->
<section class="nbr-sec">
  <div class="nbr-wrap nbr-row2">
    <div class="nbr-copy">
      <h2 class="nbr-h2">✨ Prirodno podizanje i oblikovanje</h2>
      <p>Izrađen s čvrstom trakom ispod grudi i potpornim prednjim panelom, ovaj grudnjak bez žice daje postojano, nježno podizanje koje naglašava vašu prirodnu figuru. Dobivate savršeno oblikovane obline i udobnost tijekom cijelog dana, bez odricanja od lijepe linije.</p>
    </div>
    <div class="nbr-media"><?php echo $nb_anim('bra-anim-2.mp4','bra-03-podizanje.webp','Prirodno podizanje i oblikovanje'); ?></div>
  </div>
</section>

<!-- ============ 3) Praktican dizajn s prednjim zakopcavanjem ============ -->
<section class="nbr-sec nbr-alt">
  <div class="nbr-wrap nbr-row2">
    <div class="nbr-media"><?php echo $nb_anim('bra-anim-4.mp4','bra-05-korekcija.webp','Prednje zakopčavanje grudnjaka'); ?></div>
    <div class="nbr-copy">
      <h2 class="nbr-h2">🔒 Praktičan dizajn s prednjim zakopčavanjem</h2>
      <p>Podesiva prednja kopča čini oblačenje i svlačenje jednostavnim — bez izvijanja ruku iza leđa. Daje stabilnu potporu sa svih strana i prilagođeno, pripijeno pristajanje koje je ugodno od jutra do večeri.</p>
    </div>
  </div>
</section>

<!-- ============ 4) Preciznost u svakom detalju ============ -->
<section class="nbr-sec">
  <div class="nbr-wrap">
    <h2 class="nbr-h2 nbr-center">Preciznost u svakom detalju</h2>
    <div class="nbr-tiles">
      <div class="nbr-tile">
        <div class="nbr-tile-media"><?php echo $nb_img('bra-tile-1.webp','Mekana rastezljiva tkanina'); ?></div>
        <h3>Mekana, rastezljiva tkanina</h3>
        <p>Lagan i prozračan materijal iznimno mekan na dodir — ugodan tijekom cijelog dana.</p>
      </div>
      <div class="nbr-tile">
        <div class="nbr-tile-media"><?php echo $nb_img('bra-tile-2.webp','Bešavne oblikovane košarice'); ?></div>
        <h3>Bešavne oblikovane košarice</h3>
        <p>Glatke, oblikovane košarice prate i naglašavaju vaše prirodne obline.</p>
      </div>
      <div class="nbr-tile">
        <div class="nbr-tile-media"><?php echo $nb_img('bra-tile-3.webp','Prekrižena potpora na leđima'); ?></div>
        <h3>Prekrižena potpora na leđima</h3>
        <p>Prekriženi kroj podupire držanje i opušta ramena, a silueta ostaje uredna.</p>
      </div>
      <div class="nbr-tile">
        <div class="nbr-tile-media"><?php echo $nb_img('bra-tile-4.webp','Jednostavno prednje zakopčavanje'); ?></div>
        <h3>Jednostavno prednje zakopčavanje</h3>
        <p>Brze prednje kopče za lako oblačenje i sigurno, udobno pristajanje.</p>
      </div>
    </div>
  </div>
</section>

<!-- ============ 5) Voli ga 12.000+ zena ============ -->
<section class="nbr-sec nbr-alt">
  <div class="nbr-wrap nbr-center">
    <h2 class="nbr-h2">Voli ga 12.000+ žena diljem svijeta</h2>
  </div>
  <div class="nbr-wrap">
    <div class="nbr-revs">
      <div class="nbr-rev"><div class="nbr-stars">★★★★★</div><p>Obožavam ovaj grudnjak bez žice! Savršeno podizanje, nikakva nelagoda, a prekriženi kroj na leđima stvarno rješava moje pogrbljeno držanje.</p><span>Kelsey</span></div>
      <div class="nbr-rev"><div class="nbr-stars">★★★★★</div><p>Ovaj grudnjak s prekriženim leđima je izuzetno udoban! Prednje zakopčavanje je brzo, a ramena mi ostaju poravnata cijeli dan.</p><span>Freyja</span></div>
      <div class="nbr-rev"><div class="nbr-stars">★★★★★</div><p>Odličan omjer cijene i kvalitete. Pripijeno pristaje, kopča sprijeda je jednostavna i lijepo oblikuje obline bez urezivanja.</p><span>Marija P.</span></div>
      <div class="nbr-rev"><div class="nbr-stars">★★★★★</div><p>Prava promjena! Mekana tkanina, pouzdana potpora, a prekriženi kroj čini ga savršenim za svakodnevno nošenje.</p><span>Jelena D.</span></div>
    </div>

    <?php if ( $nb_has('bra-review-1.mp4') ) : ?>
    <div class="nbr-slider" id="nbrVideoSlider">
      <div class="nbr-track">
        <?php for ( $i = 1; $i <= 3; $i++ ) :
          if ( ! $nb_has( 'bra-review-'.$i.'.mp4' ) ) { continue; } ?>
          <div class="nbr-slide">
            <div class="nbr-vwrap">
              <video class="nbr-vrev" src="<?php echo esc_url($nb.'bra-review-'.$i.'.mp4'); ?>" poster="<?php echo esc_url($nb.'bra-review-'.$i.'-poster.webp'); ?>" playsinline preload="none"></video>
              <button class="nbr-play" type="button" aria-label="Pokreni video">
                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M8 5.5v13l11-6.5-11-6.5z" fill="currentColor"/></svg>
              </button>
            </div>
          </div>
        <?php endfor; ?>
      </div>
      <div class="nbr-dots" aria-hidden="true"></div>
    </div>
    <?php endif; ?>

    <div class="nbr-center"><a class="nbr-cta" href="#bundle-selector">Naruči NORIKS BRA</a></div>
  </div>
</section>

<style>
  .nbr-sec { padding: 46px 0; background: #fff; }
  .nbr-alt { background: #f6f2ef; }
  .nbr-wrap { max-width: 1180px; margin: 0 auto; padding: 0 18px; }
  .nbr-row2 { display: grid; grid-template-columns: 1fr 1fr; gap: 48px; align-items: center; }
  .nbr-h2 { font-size: clamp(24px,3.1vw,36px); font-weight: 800; color: #141414; line-height: 1.2; margin: 0 0 16px; }
  .nbr-center { text-align: center; }
  .nbr-copy p { font-size: 16.5px; line-height: 1.7; color: #3a3a3a; margin: 0 0 14px; }
  .nbr-media img, .nbr-video { width: 100%; height: auto; display: block; border-radius: 16px; }

  .nbr-ph { width: 100%; aspect-ratio: 4/5; background: #efe9e5; border: 1px dashed #ddd0c8; border-radius: 16px;
            display: flex; align-items: center; justify-content: center; padding: 18px; box-sizing: border-box; }
  .nbr-ph span { font-size: 13px; line-height: 1.45; color: #a08e83; text-align: center; }

  /* 4) plocice */
  .nbr-tiles { display: grid; grid-template-columns: repeat(4,1fr); gap: 22px; margin-top: 26px; }
  .nbr-tile { background: #fff; border: 1px solid #e8ded8; border-radius: 16px; overflow: hidden; }
  .nbr-tile-media img, .nbr-tile-media video { width: 100%; height: 100%; aspect-ratio: 4/5; object-fit: cover; display: block; border-radius: 0; }
  .nbr-tile h3 { font-size: 16px; font-weight: 800; color: #141414; margin: 16px 18px 6px; line-height: 1.3; }
  .nbr-tile p { font-size: 14.5px; line-height: 1.55; color: #5a5a5a; margin: 0 18px 18px; }

  /* 5) recenzije */
  .nbr-revs { display: grid; grid-template-columns: repeat(4,1fr); gap: 20px; margin-bottom: 30px; }
  .nbr-rev { background: #f6f2ef; border-radius: 16px; padding: 20px 20px 18px; }
  .nbr-rev p { font-size: 14.5px; line-height: 1.6; color: #3a3a3a; margin: 8px 0 12px; }
  .nbr-rev span { font-size: 13.5px; font-weight: 700; color: #6b6b6b; }
  .nbr-stars { color: #f5a623; font-size: 15px; letter-spacing: 1.5px; }

  .nbr-cta { display: inline-block; margin-top: 26px; background: #141414; color: #fff; font-weight: 700; font-size: 16px; padding: 14px 30px; border-radius: 10px; text-decoration: none; }
  .nbr-cta:hover { background: #E8450E; color: #fff; }

  .nbr-slider { position: relative; }
  .nbr-track { display: grid; grid-template-columns: repeat(3,1fr); gap: 22px; }
  .nbr-vwrap { position: relative; }
  .nbr-vrev { width: 100%; aspect-ratio: 9/16; object-fit: cover; border-radius: 14px; background: #000; display: block; }
  .nbr-play { position: absolute; left: 50%; top: 50%; transform: translate(-50%,-50%);
              width: 78px; height: 78px; border-radius: 50%; border: 0; cursor: pointer;
              background: rgba(255,255,255,.92); color: #141414; display: flex; align-items: center; justify-content: center;
              box-shadow: 0 6px 22px rgba(0,0,0,.28); transition: transform .15s ease, background .15s ease; padding: 0; }
  .nbr-play svg { width: 34px; height: 34px; margin-left: 4px; }
  .nbr-play:hover { transform: translate(-50%,-50%) scale(1.06); background: #fff; }
  .nbr-vwrap.is-playing .nbr-play { display: none; }
  .nbr-dots { display: none; }

  @media (max-width: 980px) {
    .nbr-tiles { grid-template-columns: repeat(2,1fr); }
    .nbr-revs  { grid-template-columns: repeat(2,1fr); }
  }
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
  @media (max-width: 560px) {
    .nbr-tiles { grid-template-columns: 1fr; }
    .nbr-revs  { grid-template-columns: 1fr; }
  }

  /* NORIKS BRA: tablica velicina je u akordeonu i modalu — bez globalnog linka. */
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

  /* Veliki gumb za reprodukciju na sredini videa. */
  document.querySelectorAll('.nbr-vwrap').forEach(function(w){
    var v = w.querySelector('video'), b = w.querySelector('.nbr-play');
    if (!v || !b) { return; }
    b.addEventListener('click', function(){
      w.classList.add('is-playing');
      v.setAttribute('controls','controls');
      v.play();
    });
    v.addEventListener('pause', function(){ if (v.currentTime === 0) { w.classList.remove('is-playing'); } });
  });

  /* Tockice ispod slidera UGC snimaka (samo na mobitelu). */
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
