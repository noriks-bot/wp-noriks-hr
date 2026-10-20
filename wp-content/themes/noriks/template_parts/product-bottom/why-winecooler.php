<?php
/**
 * product-bottom: NORIKS WineCooler — štapić za hlađenje vina s izljevom (orto-winecooler).
 * Original: lindnerco.nl/products/wijnkoeler-geen-lauwe-wijn-meer — struktura je 1:1 z originalom
 * (isto stevilo sekcij, isti vrstni red, ista ozadja), besedila prevedena v hrvascino.
 *   1) Valovit temen razdelilnik + 3 videi kupcev (gumb za predvajanje, crn rob)
 *   2) Recite zbogom toplom vinu (temen pas, sredinsko besedilo)
 *   3) 4 temne harmonike (Visoka kvaliteta / Trenutni užitak / Savršeno točenje / Otključajte puni okus)
 *   4) Za ljubitelje vina (GIF levo, besedilo desno)
 *   5) Odlično 4.7 / 5 — tekoci trak mnenj (zeleno-bel prelivni pas)
 *   6) Higijena i vrhunska kvaliteta (besedilo levo, slika desno)
 * Promo pasica originala (crna vrstica na vrhu: "HERFSTUITVERKOOP BEGINT NU – KOOP 1, KRIJG 1 GRATIS") je na istem mestu — cisto na vrhu.
 * V nakupni skatli sta kot na originalu pod gumbom vrstica s poklonom (spreminja se s ponudbo) in okvir "Poslušajte naše kupce".
 * FAQ originala je v reviews.php ($winecooler_faq), mnenja (Customer Reviews / Judge.me) v auto_reviews/HR_winecooler.php.
 * Glava trgovine, pojavno okno "Wil je een gratis wijnkoeler?", placilne ikone in noga so izpusceni (trgovinski moduli).
 * Slike: img/winecooler/ (logotip konkurenta na skatli zamenjan z NORIKS, napisi prevedeni v hrvascino).
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$nwc      = get_template_directory_uri() . '/img/winecooler/';
$nwc_path = get_template_directory() . '/img/winecooler/';
$nwc_img  = function( $file, $alt ) use ( $nwc, $nwc_path ) {
  if ( ! file_exists( $nwc_path . $file ) ) { return ''; }
  return '<img src="' . esc_url( $nwc . $file ) . '" alt="' . esc_attr( $alt ) . '" loading="lazy">';
};
$nwc_video = function( $n, $label ) use ( $nwc, $nwc_path ) {
  $file = 'wc-video-' . $n . '.mp4'; $poster = 'wc-video-' . $n . '-poster.webp';
  if ( ! file_exists( $nwc_path . $file ) ) { return ''; }
  return '<div class="nwc-vid">'
    . '<video data-src="' . esc_url( $nwc . $file ) . '"' . ( file_exists( $nwc_path . $poster ) ? ' poster="' . esc_url( $nwc . $poster ) . '"' : '' )
    . ' muted loop playsinline preload="none" aria-label="' . esc_attr( $label ) . '"></video>'
    . '<button type="button" class="nwc-vid__btn" aria-label="Pokreni video"><svg viewBox="0 0 24 24" aria-hidden="true"><path class="nwc-ic-play" d="M8 5.5v13l10.5-6.5z" fill="currentColor"/><g class="nwc-ic-pause" fill="currentColor"><rect x="7" y="5.5" width="3.4" height="13" rx=".6"/><rect x="13.6" y="5.5" width="3.4" height="13" rx=".6"/></g></svg></button>'
    . '</div>';
};

/* ikona harmonike (kot na originalu: obris bucke / kozarca) */
$nwc_acc_icon = '<svg class="nwc-acc__ic" viewBox="0 0 20 20" aria-hidden="true"><path fill="currentColor" fill-rule="evenodd" d="M14.34 4.01c-.36-.28-1.68-.25-3.01-.23-.37.01-.75.01-1.1.01-.34 0-.71-.01-1.09-.02-1.24-.03-2.53-.06-3.08.24C3.48 5.41 1.8 8.52 1.8 11.58c0 3.14 1.82 5.86 4.5 7.23 1.17.6 2.51.94 3.93.94s2.75-.34 3.93-.94c2.68-1.37 4.5-4.09 4.5-7.23 0-3.06-1.74-6.17-4.32-7.57zm-.54.84c-.04-.01-.1-.02-.2-.03-.22-.03-.52-.05-.9-.05-.44-.01-.87 0-1.32.01-.37.01-.75.01-1.15.01-.36 0-.74-.01-1.11-.02l-.1-.01c-.4-.01-.8-.01-1.16-.01-.37 0-.68.02-.93.05-.13.02-.22.03-.29.05C4.32 6.09 2.8 8.84 2.8 11.58c0 2.73 1.59 5.13 3.96 6.33 1.03.53 2.21.83 3.47.83s2.44-.3 3.47-.83c2.37-1.2 3.96-3.6 3.96-6.33 0-2.73-1.56-5.49-3.79-6.69z"/><path fill="currentColor" fill-rule="evenodd" d="M10.72 1.19h-.98c-.55 0-1 .45-1 1v1.56h2.98V2.19c0-.55-.45-1-1-1zM9.74.19c-1.1 0-2 .9-2 2v2.56h4.98V2.19c0-1.1-.9-2-2-2h-.98z"/><path fill="currentColor" d="M2.62 9.55c1.5.77 2.4 1.07 3.6.42 1.6-.85 2.65-1.2 4.05-.42 1.5.83 2.37 1.07 3.62.42 1.53-.8 2.63-1.2 3.95-.42l.63.89c-1.5.77-2.62 1.18-4.03.42-1.5-.8-2.3-1.07-3.57-.42-1.6.82-2.7 1.2-4.06.42-1.43-.82-2.3-1.05-3.61-.42-1.5.73-2.62 1.15-4.07.42z"/><path fill="currentColor" d="M10.2 3.76c.28 0 .5.22.5.5v10.2a.5.5 0 0 1-1 0V4.26c0-.28.22-.5.5-.5z"/></svg>';
$nwc_caret = '<svg class="nwc-acc__caret" viewBox="0 0 10 6" aria-hidden="true"><path fill="currentColor" fill-rule="evenodd" d="M9.354.646a.5.5 0 0 0-.708 0L5 4.293 1.354.646a.5.5 0 0 0-.708.708l4 4a.5.5 0 0 0 .708 0l4-4a.5.5 0 0 0 0-.708z"/></svg>';

/* 3) harmonike — 1:1 z originala */
$nwc_acc = array(
  array( 'Visoka kvaliteta', 'Izrađen od visokokvalitetnog nehrđajućeg čelika prikladnog za hranu, ovaj proizvod pruža trajnu kvalitetu i pouzdanost za svakodnevnu upotrebu.' ),
  array( 'Trenutni užitak', 'Jednostavan za korištenje, brzo se postavlja i nevjerojatno je praktičan — ovo je lako rješenje za uživanje u vinu bez imalo truda.' ),
  array( 'Savršeno točenje', 'Recite zbogom prolijevanju. Ovaj izljev svaki put osigurava ravnomjerno točenje bez kapanja te čuva i vaše vino i vaš stol besprijekorno čistima.' ),
  array( 'Otključajte puni okus', 'Ugrađeno prozračivanje omogućuje da se arome vina potpuno razviju, čime se poboljšava okus i stvara bogatiji doživljaj vina.' ),
);

/* 5) tekoci trak mnenj — 1:1 z originala (isti vrstni red, ista imena) */
$nwc_testimonials = array(
  array( 'Odlična stvar', 'Odlična stvar, ravnomjerno hladi i toči bez prolijevanja.', 'Emma Molenaar' ),
  array( 'Praktično', 'Praktično je što čep i zatvara; nema kapljica na stolnjaku.', 'Lars van Dam' ),
  array( 'Koristim ga', 'Koristim ga uglavnom za rosé — ostaje svjež do zadnje čaše.', 'Julian Rietveld' ),
  array( 'Hladi bolje', 'Hladi bolje od zasebnih rashladnih uložaka koje sam imala. ✨', 'Nina Mulder' ),
  array( 'Radi brzo', 'Radi brzo; za deset minuta primjetno hladnije.', 'Sara Smits' ),
  array( 'Praktičan', 'Praktičan i čvrst, upravo ono što sam tražio.', 'Jesse de Bruin' ),
);
$nwc_tp_star = '<span class="nwc-tp"><svg viewBox="0 0 24 24" aria-hidden="true"><path fill="#fff" d="M12 3.5l2.47 5.6 6.03.52-4.58 3.97 1.37 5.91L12 16.38 6.71 19.5l1.37-5.91L3.5 9.62l6.03-.52z"/></svg></span>';
$nwc_tp_stars = '<span class="nwc-tp-row" aria-label="5 od 5 zvjezdica">' . str_repeat( $nwc_tp_star, 5 ) . '</span>';
?>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap">

<div class="nwc">

<!-- 1) valovit razdelilnik + 3 videi kupcev -->
<section class="nwc-sec nwc-sec--videos">
  <div class="nwc-wave" aria-hidden="true">
    <svg viewBox="0 0 1440 250" preserveAspectRatio="none"><path fill="currentColor" d="M0,125L30,120.8C60,117,120,108,180,104.2C240,100,300,100,360,120.8C420,142,480,183,540,191.7C600,200,660,175,720,162.5C780,150,840,150,900,145.8C960,142,1020,133,1080,125C1140,117,1200,108,1260,108.3C1320,108,1380,117,1440,133.3L1440,250L0,250Z"/><path fill="currentColor" opacity=".5" transform="translate(0 37)" d="M0,75L30,62.5C60,50,120,25,180,41.7C240,58,300,117,360,125C420,133,480,92,540,87.5C600,83,660,117,720,116.7C780,117,840,83,900,62.5C960,42,1020,33,1080,50C1140,67,1200,108,1260,129.2C1320,150,1380,150,1440,141.7L1440,250L0,250Z"/></svg>
  </div>
  <div class="nwc-vids">
    <?php echo $nwc_video( 1, 'Video kupca 1 — NORIKS WineCooler' ); ?>
    <?php echo $nwc_video( 2, 'Video kupca 2 — NORIKS WineCooler' ); ?>
    <?php echo $nwc_video( 3, 'Video kupca 3 — NORIKS WineCooler' ); ?>
  </div>
</section>

<!-- 2) Recite zbogom toplom vinu -->
<section class="nwc-sec nwc-sec--dark">
  <div class="nwc-wrap nwc-wrap--center">
    <h2 class="nwc-h2 nwc-h2--light">Recite zbogom toplom vinu</h2>
    <p>Sada možete svaki put uživati u savršeno ohlađenom vinu, bez brige o vrućini!</p>
  </div>
</section>

<!-- 3) harmonike -->
<section class="nwc-sec nwc-sec--acc">
  <div class="nwc-acc-wrap">
    <?php foreach ( $nwc_acc as $a ) : ?>
    <details class="nwc-acc">
      <summary><?php echo $nwc_acc_icon; ?><h3><?php echo esc_html( $a[0] ); ?></h3><?php echo $nwc_caret; ?></summary>
      <div class="nwc-acc__body"><p><?php echo esc_html( $a[1] ); ?></p></div>
    </details>
    <?php endforeach; ?>
  </div>
</section>

<!-- 4) Za ljubitelje vina -->
<section class="nwc-sec">
  <div class="nwc-wrap nwc-split">
    <div class="nwc-split__media nwc-split__media--round"><?php echo $nwc_img( 'wc-ljubitelji-vina.gif', 'Točenje ohlađenog vina s NORIKS WineCooler izljevom na plaži' ); ?></div>
    <div class="nwc-split__txt">
      <h2 class="nwc-h2">Za ljubitelje vina</h2>
      <p>Otkrijte najbolji način uživanja u vinu uz štapić za hlađenje vina. Za samo 10–15 minuta dovodi vaše vino na idealnu temperaturu posluživanja i održava ga hladnim do 3 sata. Uz ovaj štapić za hlađenje vaše vino ostaje savršeno ohlađeno od prvog točenja do zadnjeg gutljaja.</p>
    </div>
  </div>
</section>

<!-- 5) Odlično 4.7 / 5 -->
<section class="nwc-sec nwc-sec--tp">
  <div class="nwc-tp-head">
    <p class="nwc-tp-score">Odlično <strong>4.7</strong> <b>/ 5</b> <?php echo $nwc_tp_stars; ?></p>
    <p class="nwc-tp-based">Na temelju <u>168</u> recenzija</p>
  </div>
  <div class="nwc-marquee" aria-label="Recenzije kupaca">
    <div class="nwc-marquee__track">
      <?php for ( $r = 0; $r < 2; $r++ ) : foreach ( $nwc_testimonials as $t ) : ?>
      <article class="nwc-tc"<?php echo $r ? ' aria-hidden="true"' : ''; ?>>
        <?php echo $nwc_tp_stars; ?>
        <h3><?php echo esc_html( $t[0] ); ?></h3>
        <p><?php echo esc_html( $t[1] ); ?></p>
        <span class="nwc-tc__name"><?php echo esc_html( $t[2] ); ?></span>
      </article>
      <?php endforeach; endfor; ?>
    </div>
  </div>
</section>

<!-- 6) Higijena i vrhunska kvaliteta -->
<section class="nwc-sec">
  <div class="nwc-wrap nwc-split nwc-split--img-right">
    <div class="nwc-split__txt">
      <h2 class="nwc-h2">Higijena i vrhunska kvaliteta</h2>
      <p>Oslanjamo se na vrhunski nehrđajući čelik prikladan za hranu za neusporedivu kvalitetu i trajnost, kako bi vaš štapić za hlađenje vina godinama pouzdano radio. Štapić za hlađenje vina može se prati u perilici posuđa i ima odvojivi izljev, pa ga je lako temeljito očistiti toplom vodom.</p>
    </div>
    <div class="nwc-split__media"><?php echo $nwc_img( 'wc-higijena.webp', 'NORIKS WineCooler štapić za hlađenje i boca vina' ); ?></div>
  </div>
</section>

</div>

<script>
(function(){
  /* promo pasica originala (crna vrstica na vrhu) — na istem mestu: cisto na vrhu strani. */
  if (!document.querySelector('.nwc-annbar')) {
    var bar = document.createElement('div');
    bar.className = 'nwc-annbar'; bar.setAttribute('role', 'region'); bar.setAttribute('aria-label', 'Obavijest');
    bar.textContent = 'JESENSKA RASPRODAJA POČINJE SADA – KUPITE 1, DOBIJTE 1 GRATIS';
    document.body.insertBefore(bar, document.body.firstChild);
  }

  /* pod gumbom za nakup (kot na originalu): vrstica s poklonom glede na izbrano ponudo + okvir "Poslušajte naše kupce" */
  var gifts = ['🎁 Kupite 1, dobijte 1 gratis — u košaricu idu 2 hladnjaka za vino',
               '🎁 Kupite 2, dobijte 2 gratis — u košaricu idu 4 hladnjaka za vino',
               '🎁 Kupite 3, dobijte 3 gratis — u košaricu idu 6 hladnjaka za vino'];
  var quotes = [['Jako praktičan za korištenje i lako se nosi sa sobom.', 'Elin de Vries'],
                ['Ispunili ste ono što ste obećali, a stigao mi je i prilično brzo.', 'Sanne van Dijk'],
                ['Super 😊', 'Tessa Jansen']];
  function buybox(){
    if (document.querySelector('.nwc-gift')) return;
    var host = document.querySelector('.gck-benefits-box') || (document.querySelector('.single_add_to_cart_button') || {}).parentNode;
    if (!host) return;
    var g = document.createElement('div'); g.className = 'nwc-gift'; host.appendChild(g);
    function upd(){
      var opts = document.querySelectorAll('#bundle-selector .bundle-option'), idx = 0;
      opts.forEach(function(o, i){ if (o.classList.contains('active')) idx = i; });
      g.textContent = gifts[Math.min(idx, gifts.length - 1)];
    }
    upd();
    document.addEventListener('click', function(e){ if (e.target.closest && e.target.closest('#bundle-selector')) setTimeout(upd, 30); });
    var q = document.createElement('div'); q.className = 'nwc-hear';
    q.innerHTML = '<div class="nwc-hear__top"><strong>Poslušajte naše kupce</strong><span class="nwc-hear__stars" aria-label="5 od 5 zvjezdica">★★★★★</span></div>'
      + '<div class="nwc-hear__q"></div>'
      + '<div class="nwc-hear__nav"><button type="button" data-d="-1" aria-label="Prethodno">&#10094;</button><button type="button" data-d="1" aria-label="Sljedeće">&#10095;</button></div>';
    host.appendChild(q);
    var box = q.querySelector('.nwc-hear__q'), i = 0, timer;
    function show(){ box.innerHTML = '<p>' + quotes[i][0] + '</p><span>- ' + quotes[i][1] + '</span>'; }
    function go(d){ i = (i + d + quotes.length) % quotes.length; show(); }
    function auto(){ clearInterval(timer); timer = setInterval(function(){ go(1); }, 5000); }
    q.querySelectorAll('button').forEach(function(b){ b.addEventListener('click', function(){ go(parseInt(b.getAttribute('data-d'), 10)); auto(); }); });
    show(); auto();
  }
  if (document.readyState === 'loading') { document.addEventListener('DOMContentLoaded', buybox); } else { buybox(); }

  /* videi: kot na originalu — sličica + gumb za predvajanje; klik predvaja / ustavi */
  document.querySelectorAll('.nwc-vid').forEach(function(w){
    var v = w.querySelector('video'), b = w.querySelector('.nwc-vid__btn');
    if (!v || !b) return;
    b.addEventListener('click', function(){
      if (!v.getAttribute('src') && v.dataset.src) { v.setAttribute('src', v.dataset.src); }
      if (v.paused) { var p = v.play(); if (p && p.catch) p.catch(function(){}); w.classList.add('is-playing'); b.setAttribute('aria-label', 'Zaustavi video'); }
      else { v.pause(); w.classList.remove('is-playing'); b.setAttribute('aria-label', 'Pokreni video'); }
    });
  });
})();
</script>

<style>
.nwc { --nwc-ink: #121212; --nwc-text: rgba(18,18,18,.75); --nwc-dark: #333333;
  font-family: 'Poppins', system-ui, -apple-system, 'Segoe UI', Roboto, Arial, sans-serif; color: var(--nwc-text); overflow-x: hidden; }
.nwc * { box-sizing: border-box; }
.nwc img, .nwc video { display: block; max-width: 100%; height: auto; }
.nwc-sec { background: #fff; padding: 36px 0; }
.nwc-wrap { width: 100%; max-width: 1200px; margin: 0 auto; padding: 0 50px; }
.nwc-wrap--center { text-align: center; max-width: 820px; }
.nwc-h2 { font-family: 'Poppins', sans-serif; font-weight: 600; font-size: clamp(24px, 2.6vw, 30px); line-height: 1.3; color: var(--nwc-ink); margin: 0 0 18px; letter-spacing: .02em; text-transform: none; }
.nwc-h2--light { color: #fff; }
.nwc p { margin: 0 0 14px; font-size: 14px; line-height: 1.8; letter-spacing: .05em; }

/* 1) razdelilnik + videi */
.nwc-sec--videos { padding: 0 0 40px; }
.nwc-wave { color: #121212; line-height: 0; margin-bottom: 36px; }
.nwc-wave svg { display: block; width: 100%; height: 110px; transform: scaleY(-1); background: #fff; }
.nwc-vids { display: grid; grid-template-columns: repeat(3, 300px); justify-content: space-between; gap: 16px; max-width: 1200px; margin: 0 auto; padding: 0 60px; }
.nwc-vid { position: relative; height: 500px; border-radius: 12px; overflow: hidden; background: #f4f4f4; border: 2px solid #000; }
.nwc-vid video { position: absolute; inset: 0; width: 100%; height: 100%; object-fit: cover; }
.nwc-vid__btn { position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 40px; height: 40px; border-radius: 50%; border: 0; padding: 0;
  background: #121212; color: #fff; display: flex; align-items: center; justify-content: center; cursor: pointer; box-shadow: 0 2px 8px rgba(0,0,0,.3); transition: transform .2s ease; z-index: 2; }
.nwc-vid__btn:hover { transform: translate(-50%, -50%) scale(1.1); }
.nwc-vid__btn svg { width: 20px; height: 20px; }
.nwc-vid .nwc-ic-pause { display: none; }
.nwc-vid.is-playing .nwc-ic-pause { display: inline; }
.nwc-vid.is-playing .nwc-ic-play { display: none; }
.nwc-vid.is-playing .nwc-vid__btn { opacity: 0; }
.nwc-vid.is-playing:hover .nwc-vid__btn { opacity: 1; }

/* 2) temen pas */
.nwc-sec--dark { background: var(--nwc-dark); padding: 40px 0 52px; }
.nwc-sec--dark p { color: rgba(255,255,255,.75); }

/* 3) harmonike */
.nwc-sec--acc { padding: 92px 0 52px; }
.nwc-acc-wrap { max-width: 726px; margin: 0 auto; padding: 0 20px; display: flex; flex-direction: column; gap: 16px; }
.nwc-acc { background: var(--nwc-dark); color: #fff; border-radius: 16px; overflow: hidden; }
.nwc-acc summary { list-style: none; display: flex; align-items: center; gap: 10px; padding: 16px 22px; cursor: pointer; }
.nwc-acc summary::-webkit-details-marker { display: none; }
.nwc-acc summary h3 { flex: 1; margin: 0; font-family: 'Poppins', sans-serif; font-size: 15px; font-weight: 700; color: #fff; letter-spacing: .04em; text-transform: none; line-height: 1.3; }
.nwc-acc__ic { width: 20px; height: 20px; flex: 0 0 20px; color: #fff; }
.nwc-acc__caret { width: 10px; height: 6px; flex: 0 0 10px; color: #fff; transition: transform .2s ease; }
.nwc-acc[open] .nwc-acc__caret { transform: rotate(180deg); }
.nwc-acc__body { padding: 0 22px 16px 52px; }
.nwc-acc__body p { color: rgba(255,255,255,.8); margin: 0; }

/* 4) + 6) slika + besedilo */
.nwc-split { display: grid; grid-template-columns: 1fr 1fr; gap: 70px; align-items: center; }
.nwc-split__media img { width: 100%; }
.nwc-split__media--round img { border-radius: 10px; }
.nwc-split__txt { max-width: 470px; }
.nwc-split--img-right .nwc-split__txt { justify-self: end; padding-left: 20px; }

/* 5) trustpilot pas */
.nwc-sec--tp { background: linear-gradient(180deg, #d0efc9 0%, #ffffff 100%); padding: 60px 0 50px; }
.nwc-tp-head { text-align: center; margin-bottom: 26px; padding: 0 16px; }
.nwc-tp-score { display: flex; align-items: center; justify-content: center; gap: 8px; flex-wrap: wrap; font-size: 22px !important; letter-spacing: 0 !important; color: #121212; margin: 0 0 6px !important; }
.nwc-tp-score strong { font-weight: 700; color: #121212; font-size: 26px; }
.nwc-tp-score b { font-weight: 600; margin-right: 4px; }
.nwc-tp-based { font-size: 18px !important; letter-spacing: 0 !important; color: #121212; margin: 0 !important; }
.nwc-tp-based u { font-weight: 700; }
.nwc-tp-row { display: inline-flex; gap: 2px; }
.nwc-tp { display: inline-flex; align-items: center; justify-content: center; width: 22px; height: 22px; background: #00b67a; }
.nwc-tp svg { width: 18px; height: 18px; }
.nwc-marquee { overflow: hidden; }
.nwc-marquee__track { display: flex; gap: 20px; width: max-content; padding: 10px 0 20px; animation: nwc-marq 40s linear infinite; }
.nwc-marquee:hover .nwc-marquee__track { animation-play-state: paused; }
@keyframes nwc-marq { from { transform: translateX(0); } to { transform: translateX(calc(-50% - 10px)); } }
.nwc-tc { flex: 0 0 360px; background: #fff; border-radius: 14px; box-shadow: 0 4px 18px rgba(0,0,0,.08); padding: 24px 20px 26px; text-align: center; }
.nwc-tc .nwc-tp-row { margin-bottom: 12px; }
.nwc-tc .nwc-tp { width: 26px; height: 26px; }
.nwc-tc .nwc-tp svg { width: 21px; height: 21px; }
.nwc-tc h3 { font-family: 'Poppins', sans-serif; font-size: 20px; font-weight: 700; color: #121212; margin: 0 0 8px; text-transform: none; letter-spacing: 0; }
.nwc-tc p { font-size: 13px !important; line-height: 1.5 !important; color: #121212; margin: 0 0 14px !important; letter-spacing: .02em !important; }
.nwc-tc__name { font-size: 14px; color: #121212; }

/* nakupna skatla: vrstice z ikonami (kratek opis), vrstica s poklonom, "Poslušajte naše kupce" */
.nwc-icons { display: flex; flex-direction: column; gap: 10px; margin: 10px 0 15px; }
.nwc-icon-row { display: flex; align-items: center; font-size: 16px; font-weight: 500; color: #333; line-height: 1.2; }
.nwc-ic { flex: 0 0 22px; width: 22px; height: 22px; margin-right: 8px; border-radius: 50%; display: inline-flex; align-items: center; justify-content: center; color: #fff; font-size: 13px; font-weight: 700; }
.nwc-ic--card { background: #121212; }
.nwc-ic--card svg { width: 13px; height: 13px; }
.nwc-ic--check { background: #22a35a; }
.nwc-dot { width: 12px; height: 12px; background: #ffa500; border-radius: 50%; display: inline-block; margin: 0 13px 0 5px; animation: nwc-pulse 1.5s infinite; }
@keyframes nwc-pulse { 0% { box-shadow: 0 0 0 rgba(255,165,0,.4); } 50% { box-shadow: 0 0 8px rgba(255,200,0,.9); } 100% { box-shadow: 0 0 0 rgba(255,165,0,.4); } }
.nwc-gift { margin: 12px 0 0; padding: 9px 12px; background: #f3f3f3; border-radius: 6px; text-align: center; font-family: 'Poppins', sans-serif; font-size: 13px; font-weight: 600; color: #121212; }
.nwc-hear { margin: 14px 0 6px; padding: 14px 16px 10px; background: #f6f6f6; border-radius: 8px; font-family: 'Poppins', sans-serif; box-shadow: 0 1px 4px rgba(0,0,0,.06); }
.nwc-hear__top { display: flex; justify-content: space-between; align-items: center; margin-bottom: 8px; }
.nwc-hear__top strong { font-size: 14px; color: #121212; }
.nwc-hear__stars { color: #00b67a; font-size: 14px; letter-spacing: 1px; }
.nwc-hear__q p { margin: 0 0 4px; font-size: 13px; font-style: italic; color: #333; }
.nwc-hear__q span { font-size: 12px; font-weight: 600; color: #121212; }
.nwc-hear__nav { display: flex; justify-content: center; gap: 10px; margin-top: 6px; }
.nwc-hear__nav button { background: none; border: 0; padding: 2px 4px; cursor: pointer; color: #555; font-size: 12px; }

/* promo pasica */
.nwc-annbar { position: relative; z-index: 2; background: #121212; color: #fff; text-align: center; font-family: 'Poppins', system-ui, sans-serif;
  font-size: 15px; font-weight: 700; letter-spacing: .06em; text-transform: uppercase; padding: 11px 16px; line-height: 1.4; }

@media (max-width: 989px) {
  .nwc-wrap { padding: 0 20px; }
  .nwc-split { grid-template-columns: 1fr; gap: 26px; }
  .nwc-split__txt, .nwc-split--img-right .nwc-split__txt { max-width: none; justify-self: stretch; padding-left: 0; }
  .nwc-split--img-right .nwc-split__media { order: -1; }
  .nwc-vids { grid-template-columns: repeat(3, 1fr); padding: 0 20px; gap: 10px; }
  .nwc-sec--acc { padding: 60px 0 40px; }
}
@media (max-width: 749px) {
  .nwc-vid { height: 200px; }
  .nwc-vid__btn { width: 32px; height: 32px; }
  .nwc-wave svg { height: 50px; }
  .nwc-tc { flex-basis: 280px; }
  .nwc-annbar { font-size: 12px; }
}
</style>
