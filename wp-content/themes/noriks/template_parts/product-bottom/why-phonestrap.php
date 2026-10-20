<?php
/**
 * product-bottom: NORIKS PhoneStrap — drzac za mobitel protiv ispadanja (orto-phonestrap).
 * Original: holdmategear.com/products/holdmate-anti-drop-strap — struktura je 1:1 z originalom
 * (isto stevilo sekcij, isti vrstni red, isti dizajn), besedila prevedena v hrvascino.
 *   1) Jamstvo povrata novca 90 dana (svetlo modra skatla z znacko — na originalu pod nakupno skatlo)
 *   2) Kako ga koristiti (besedilo levo, video desno)
 *   3) 3 razloga za nadogradnju (besedilo levo, video desno)
 *   4) Zasto cete ga zavoljeti (slika levo, besedilo desno)
 *   5) Nase jamstvo od 90 dana (siv pas, sredinsko besedilo)
 *   6) 80.000+ zadovoljnih kupaca (karusel 7 kartic s fotografijami kupcev)
 * Promo pasica originala (oranzna vrstica na vrhu: "No Tariffs or Extra Fees" / "Fall Sale: Up to 60% OFF" /
 * "Use code: FALL for 10% EXTRA OFF") je na istem mestu — cisto na vrhu strani.
 * FAQ originala je v reviews.php ($phonestrap_faq), mnenja (Customer Reviews) v auto_reviews/HR_phonestrap.php.
 * Glava trgovine, placilne ikone, "You may also like" in noga so izpusceni (trgovinski moduli).
 * Slike: img/phonestrap/ (logotip konkurenta odstranjen, napisi prevedeni v hrvascino).
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$nps      = get_template_directory_uri() . '/img/phonestrap/';
$nps_path = get_template_directory() . '/img/phonestrap/';
$nps_img  = function( $file, $alt, $cls = '' ) use ( $nps, $nps_path ) {
  if ( ! file_exists( $nps_path . $file ) ) { return ''; }
  return '<img src="' . esc_url( $nps . $file ) . '" alt="' . esc_attr( $alt ) . '"' . ( $cls ? ' class="' . esc_attr( $cls ) . '"' : '' ) . ' loading="lazy">';
};
$nps_video = function( $file, $poster, $label ) use ( $nps, $nps_path ) {
  if ( ! file_exists( $nps_path . $file ) ) { return ''; }
  return '<video class="nps-video" src="' . esc_url( $nps . $file ) . '"' . ( file_exists( $nps_path . $poster ) ? ' poster="' . esc_url( $nps . $poster ) . '"' : '' )
    . ' muted loop playsinline preload="metadata" aria-label="' . esc_attr( $label ) . '"></video>';
};

$nps_star = '<svg viewBox="0 0 20 20" aria-hidden="true"><path fill="currentColor" d="M10 1.5l2.6 5.3 5.9.9-4.3 4.1 1 5.8L10 14.8l-5.2 2.8 1-5.8L1.5 7.7l5.9-.9z"/></svg>';

/* 6) 80.000+ zadovoljnih kupaca — 1:1 z originala (isti vrstni red, iste fotografije kupcev). */
$nps_testimonials = array(
  array( 'foto' => 'ps-rv-annartimm.webp', 'ime' => '@Annartimm', 'tekst' => 'Ovo mijenja sve. Na zadnjem skijanju ispao mi je mobitel, a sad se osjećam puno sigurnije.' ),
  array( 'foto' => 'ps-rv-johnny.webp',    'ime' => '@Johnny',    'tekst' => 'Super čvrst i jednostavan za korištenje — upravo ono što mi je trebalo za skijanje i planinarenje.' ),
  array( 'foto' => 'ps-rv-jacob.webp',     'ime' => '@Jacob',     'tekst' => 'Odlična kvaliteta i pametan dizajn. Mobitel mi je uvijek pri ruci, bez ikakvog rizika.' ),
  array( 'foto' => 'ps-rv-stephanie.webp', 'ime' => '@Stephanie', 'tekst' => 'Kupila sam jedan za sebe, a onda još dva za djecu — radi savršeno.' ),
  array( 'foto' => 'ps-rv-robert.webp',    'ime' => '@Robert',    'tekst' => 'Cijeli vikend koristio sam ga na stazama i nijednom se nisam brinuo da će mi ispasti mobitel.' ),
  array( 'foto' => 'ps-zasto-volite.webp', 'ime' => '@Niko',      'tekst' => 'Napokon držač za mobitel koji stvarno ostaje na mjestu na žičari! Sad se osjećam puno sigurnije.' ),
  array( 'foto' => 'ps-rv-hanna.webp',     'ime' => '@Hanna',     'tekst' => 'Obožavam koliko je siguran. Čak ni na brzim spustovima mobitel se nije pomaknuo.' ),
);
?>

<div class="nps">

<!-- 1) Jamstvo povrata novca 90 dana -->
<section class="nps-sec nps-sec--guarantee-box">
  <div class="nps-wrap nps-wrap--narrow">
    <div class="nps-gbox">
      <div class="nps-gbox__badge"><?php echo $nps_img( 'ps-jamstvo-90-dana-hr.webp', 'Jamstvo povrata novca 90 dana' ); ?></div>
      <div class="nps-gbox__txt">
        <h3>Jamstvo povrata novca 90 dana</h3>
        <p>Želimo da zavolite svoj NORIKS PhoneStrap, pa ako niste <strong>potpuno zadovoljni</strong>, kupnju možete vratiti u roku od 90 dana i dobiti puni povrat novca.</p>
      </div>
    </div>
  </div>
</section>

<!-- 2) Kako ga koristiti -->
<section class="nps-sec">
  <div class="nps-wrap nps-split">
    <div class="nps-split__txt">
      <h2 class="nps-h2">Kako ga koristiti</h2>
      <p>Korištenje držača za mobitel brzo je, jednostavno i osmišljeno za maksimalnu sigurnost. Samo umetnite podložak između mobitela i maske, pritisnite da sjedne na mjesto i zakačite kolut na hlače, jaknu ili ruksak. Mobitel vam tako više ne može ispasti — a uvijek je nadohvat ruke.</p>
      <ul class="nps-list">
        <li>Postavljanje u nekoliko sekundi — bez alata i muke</li>
        <li>Čuva mobitel na skijanju, planinarenju, putovanjima i svaki dan</li>
        <li>Tanak i lagan dizajn koji jedva primjećujete</li>
        <li>Odgovara svim pametnim telefonima</li>
        <li>Daje vam sigurnost da zabilježite svaki trenutak bez straha da ćete izgubiti mobitel</li>
      </ul>
    </div>
    <div class="nps-split__media"><?php echo $nps_video( 'ps-kako-koristiti.mp4', 'ps-kako-koristiti-poster.webp', 'Kako koristiti NORIKS PhoneStrap' ); ?></div>
  </div>
</section>

<!-- 3) 3 razloga za nadogradnju -->
<section class="nps-sec">
  <div class="nps-wrap nps-split">
    <div class="nps-split__txt">
      <h2 class="nps-h2">3 razloga za nadogradnju</h2>
      <p class="nps-check">✔&nbsp; Uvijek osiguran, bilo kad i bilo gdje</p>
      <p class="nps-check">✔&nbsp; Odgovara svakom pametnom telefonu</p>
      <p class="nps-check">✔&nbsp; Postavljanje za 8 sekundi</p>
    </div>
    <div class="nps-split__media nps-split__media--grey"><?php echo $nps_video( 'ps-3-razloga.mp4', 'ps-3-razloga-poster.webp', 'NORIKS PhoneStrap — karabiner, kolut sa sajlom i podložak' ); ?></div>
  </div>
</section>

<!-- 4) Zasto cete ga zavoljeti -->
<section class="nps-sec">
  <div class="nps-wrap nps-split nps-split--img-left">
    <div class="nps-split__media nps-split__media--tall"><?php echo $nps_img( 'ps-zasto-volite.webp', 'NORIKS PhoneStrap na ruksaku — mobitel uvijek pri ruci' ); ?></div>
    <div class="nps-split__txt nps-split__txt--small">
      <h2 class="nps-h2">Zašto ćete ga zavoljeti</h2>
      <p>Svake godine tisuće mobitela izgube se, razbiju ili unište tijekom aktivnosti na otvorenom. Jedno poskliznuće, jedan nespretan pokret, jedan trenutak nepažnje — i 1.000+ € nestaje zauvijek.</p>
      <p>NORIKS PhoneStrap stoji 26,95 € i čuva vas od te noćne more.</p>
      <p>Zakačite ga na jaknu, ruksak ili remen. Idite na skijanje, planinarenje, pecanje ili na najluđi rollercoaster. Mobitel ostaje uz vas — zajamčeno.</p>
      <p class="nps-gap">Pridružite se tisućama zadovoljnih kupaca koji već vjeruju našem proizvodu!</p>
    </div>
  </div>
</section>

<!-- 5) Nase jamstvo od 90 dana -->
<section class="nps-sec nps-sec--grey">
  <div class="nps-wrap nps-wrap--text">
    <h2 class="nps-h2 nps-h2--center">Naše jamstvo od 90 dana</h2>
    <p>Uvjereni smo da ćete zavoljeti <strong>NORIKS PhoneStrap</strong>. Zato na sve narudžbe nudimo <strong>jamstvo povrata novca od 90 dana</strong>.</p>
    <p>Koristite NORIKS PhoneStrap na skijanju, planinarenju ili bilo kojoj avanturi i čuvajte mobitel na sigurnom. Ako niste potpuno zadovoljni u roku od 90 dana, samo nam se javite i vratit ćemo vam cijeli iznos. Bez muke i bez pitanja.</p>
  </div>
</section>

<!-- 6) 80.000+ zadovoljnih kupaca -->
<section class="nps-sec nps-sec--testimonials">
  <div class="nps-wrap">
    <h2 class="nps-h2 nps-h2--center nps-h2--big">80.000+ zadovoljnih kupaca</h2>
  </div>
  <div class="nps-slider" data-nps-slider="t" tabindex="0" role="group" aria-label="Iskustva kupaca">
    <div class="nps-track">
      <?php foreach ( $nps_testimonials as $t ) : ?>
      <article class="nps-tc">
        <div class="nps-tc__photo"><?php echo $nps_img( $t['foto'], 'Fotografija kupca — ' . $t['ime'] ); ?></div>
        <span class="nps-stars" aria-label="5 od 5 zvjezdica"><?php echo str_repeat( $nps_star, 5 ); ?></span>
        <p class="nps-tc__txt">“<?php echo esc_html( $t['tekst'] ); ?>”</p>
        <p class="nps-tc__name"><?php echo esc_html( $t['ime'] ); ?></p>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
  <div class="nps-nav">
    <button type="button" class="nps-arrow" data-nps-prev="t" aria-label="Prethodno"><svg viewBox="0 0 52 16" aria-hidden="true"><path d="M51 8H2M8 1.5 1.5 8 8 14.5" fill="none" stroke="currentColor" stroke-width="1.3"/></svg></button>
    <button type="button" class="nps-arrow" data-nps-next="t" aria-label="Sljedeće"><svg viewBox="0 0 52 16" aria-hidden="true"><path d="M1 8h49M44 1.5 50.5 8 44 14.5" fill="none" stroke="currentColor" stroke-width="1.3"/></svg></button>
  </div>
</section>

</div>

<script>
(function(){
  /* promo pasica originala (oranzna vrstica s tremi izmenjujocimi se sporocili in puscicama) — na istem mestu: cisto na vrhu strani. */
  if (!document.querySelector('.nps-annbar')) {
    var msgs = ['Bez carina i dodatnih troškova', 'Jesenska akcija: do 60 % popusta', 'Upotrijebite kôd <strong>FALL</strong> za <strong>dodatnih 10 % popusta</strong>'];
    var bar = document.createElement('div');
    bar.className = 'nps-annbar'; bar.setAttribute('role', 'region'); bar.setAttribute('aria-label', 'Obavijest');
    bar.innerHTML = '<button type="button" class="nps-annbar__btn" data-dir="-1" aria-label="Prethodna obavijest">&#8249;</button>'
      + '<div class="nps-annbar__msg"></div>'
      + '<button type="button" class="nps-annbar__btn" data-dir="1" aria-label="Sljedeća obavijest">&#8250;</button>';
    document.body.insertBefore(bar, document.body.firstChild);
    var box = bar.querySelector('.nps-annbar__msg'), i = 0, timer;
    function show(){ box.innerHTML = msgs[i]; }
    function go(d){ i = (i + d + msgs.length) % msgs.length; show(); }
    function auto(){ clearInterval(timer); timer = setInterval(function(){ go(1); }, 4000); }
    bar.querySelectorAll('.nps-annbar__btn').forEach(function(b){ b.addEventListener('click', function(){ go(parseInt(b.getAttribute('data-dir'), 10)); auto(); }); });
    show(); auto();
  }
  /* karusel mnenj */
  document.querySelectorAll('[data-nps-slider]').forEach(function(s){
    var key = s.getAttribute('data-nps-slider');
    var prev = document.querySelector('[data-nps-prev="' + key + '"]'), next = document.querySelector('[data-nps-next="' + key + '"]');
    if (!prev || !next) return;
    function step(){ var c = s.querySelector('.nps-track > *'); return c ? c.getBoundingClientRect().width + 28 : 230; }
    prev.addEventListener('click', function(){ s.scrollBy({ left: -step(), behavior: 'smooth' }); });
    next.addEventListener('click', function(){ s.scrollBy({ left: step(), behavior: 'smooth' }); });
  });
  /* videi: predvajanje samo, ko so v vidnem polju (kot na originalu: brez zvoka, v zanki) */
  var vids = document.querySelectorAll('.nps video');
  if ('IntersectionObserver' in window) {
    vids.forEach(function(v){
      new IntersectionObserver(function(es){ es.forEach(function(e){ if (e.isIntersecting) { var p = v.play(); if (p && p.catch) p.catch(function(){}); } else { v.pause(); } }); }, { threshold: .25 }).observe(v);
    });
  } else { vids.forEach(function(v){ v.setAttribute('autoplay', ''); }); }
})();
</script>

<style>
.nps { --nps-ink: #121212; --nps-text: #222; --nps-grey: #f0f0f0; --nps-card: #f1f1f1; --nps-line: #d4d4d4;
  font-family: 'Inter', 'Montserrat', system-ui, -apple-system, 'Segoe UI', Roboto, Arial, sans-serif; color: var(--nps-text); overflow-x: hidden; }
.nps * { box-sizing: border-box; }
.nps img, .nps video { display: block; max-width: 100%; height: auto; }
.nps-sec { padding: 40px 0; background: #fff; }
.nps-sec--grey { background: var(--nps-grey); padding: 140px 0; }
.nps-wrap { width: 100%; max-width: 1200px; margin: 0 auto; padding: 0 40px; }
.nps-wrap--narrow { max-width: 640px; }
.nps-wrap--text { max-width: 500px; text-align: center; font-size: 15px; line-height: 1.45; }
.nps-h2 { font-family: 'Archivo', 'Montserrat', 'Inter', sans-serif; font-weight: 800; font-size: clamp(24px, 2.4vw, 27px); line-height: 1.25; color: var(--nps-ink); margin: 0 0 28px; letter-spacing: 0; text-transform: none; }
.nps-h2--center { text-align: center; }
.nps-h2--big { font-size: clamp(26px, 2.8vw, 33px); margin-bottom: 26px; }
.nps p { margin: 0 0 14px; }
.nps strong { font-weight: 700; color: var(--nps-ink); }

/* 1) skatla z jamstvom */
.nps-gbox { display: flex; align-items: center; gap: 18px; background: #e3edf7; border-radius: 10px; padding: 18px 22px; }
.nps-gbox__badge { flex: 0 0 64px; }
.nps-gbox__badge img { width: 64px; height: 64px; border-radius: 50%; }
.nps-gbox__txt h3 { margin: 0 0 4px; font-size: 15px; font-weight: 700; color: var(--nps-ink); text-transform: none; letter-spacing: 0; }
.nps-gbox__txt p { margin: 0; font-size: 14.5px; line-height: 1.5; }

/* 2–4) besedilo + medij */
.nps-split { display: grid; grid-template-columns: 1fr 1fr; gap: 80px; align-items: center; }
.nps-split__txt { font-size: 16px; line-height: 1.5; padding: 0 0 0 0; }
.nps-split__txt--small { font-size: 14px; line-height: 1.4; max-width: 470px; }
.nps-split__media { width: 100%; max-width: 520px; justify-self: end; }
.nps-split__media--grey { background: #f0f0f0; }
.nps-split--img-left { grid-template-columns: 1fr 1fr; gap: 32px; }
.nps-split--img-left .nps-split__media { justify-self: start; max-width: 584px; }
.nps-split__media img, .nps-split__media video { width: 100%; aspect-ratio: 1 / 1; object-fit: cover; }
.nps-split__media--tall img { aspect-ratio: auto; }
.nps-list { margin: 22px 0 0; padding: 0 0 0 40px; list-style: disc; }
.nps-list li { margin: 0 0 4px; }
.nps-check { font-size: 16px; margin: 0 0 18px !important; }
.nps-gap { margin-top: 24px !important; }

/* 6) karusel mnenj */
.nps-sec--testimonials { padding: 50px 0 40px; }
.nps-slider { overflow-x: auto; scroll-snap-type: x mandatory; -webkit-overflow-scrolling: touch; scrollbar-width: none; padding: 0 40px; }
.nps-slider::-webkit-scrollbar { display: none; }
.nps-track { display: flex; gap: 28px; width: max-content; margin: 0 auto; }
.nps-tc { scroll-snap-align: center; flex: 0 0 202px; background: var(--nps-card); border: 1px solid var(--nps-line); border-radius: 14px; padding: 20px 20px 22px; text-align: center; }
.nps-tc__photo img { width: 160px; height: 160px; object-fit: cover; border-radius: 12px; margin: 0 auto 14px; }
.nps-stars { display: inline-flex; gap: 2px; color: #333; margin-bottom: 12px; }
.nps-stars svg { width: 16px; height: 16px; }
.nps-tc__txt { font-size: 15.5px; line-height: 1.35; color: #333; margin: 0 0 16px !important; min-height: 84px; }
.nps-tc__name { font-size: 14px; font-weight: 700; color: #333; margin: 0 !important; }
.nps-nav { display: flex; justify-content: center; gap: 18px; margin-top: 30px; }
.nps-arrow { background: none; border: 0; padding: 4px; cursor: pointer; color: #6b6448; }
.nps-arrow svg { width: 52px; height: 16px; display: block; }

/* kratek opis v nakupni skatli: "Key Benefits" s crnimi kljukicami + "Low Stock" kot na originalu */
.nps-benefits { list-style: none !important; padding: 0 !important; margin: 6px 0 10px !important; }
.nps-benefits li { display: flex; align-items: flex-start; gap: 8px; margin: 0 0 8px; list-style: none !important; }
.nps-tick { flex: 0 0 18px; display: inline-flex; align-items: center; justify-content: center; width: 18px; height: 18px; margin-top: 2px;
  border-radius: 50%; background: #000; color: #fff; font-size: 11px; font-weight: 700; line-height: 1; }
.nps-lowstock { display: flex; align-items: center; gap: 8px; color: #ffa503; font-size: 15px; margin: 8px 0 6px; }
.nps-lowstock strong { color: #ffa503; }
.nps-dot { width: 12px; height: 12px; border-radius: 50%; background: #ef9441; display: inline-block; }

/* promo pasica na vrhu strani */
.nps-annbar { position: relative; z-index: 2; display: flex; align-items: center; justify-content: space-between; background: #ff6501; color: #fff;
  font-family: 'Inter', 'Montserrat', system-ui, sans-serif; font-size: 13px; font-weight: 500; min-height: 44px; padding: 0 30px; }
.nps-annbar__msg { flex: 1; text-align: center; padding: 8px 10px; }
.nps-annbar__msg strong { font-weight: 800; }
.nps-annbar__btn { background: none; border: 0; color: #fff; font-size: 22px; line-height: 1; cursor: pointer; padding: 4px 8px; }

@media (max-width: 989px) {
  .nps-wrap { padding: 0 20px; }
  .nps-split, .nps-split--img-left { grid-template-columns: 1fr; gap: 26px; }
  .nps-split__media, .nps-split--img-left .nps-split__media { justify-self: stretch; max-width: none; }
  .nps-split--img-left .nps-split__media { order: 0; }
  .nps-sec--grey { padding: 70px 0; }
  .nps-slider { padding: 0 20px; }
  .nps-track { margin: 0; }
  .nps-annbar { padding: 0 10px; font-size: 12px; }
}
</style>
