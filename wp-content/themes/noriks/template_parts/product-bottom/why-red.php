<?php
/**
 * product-bottom: NORIKS RED — terapija crvenim svjetlom za zapešće (orto-red).
 * Sekcije prate original (kovaria.com/products/therawrap) u istom redoslijedu:
 *   1) Upoznajte NORIKS RED + statistike (tw-intro)
 *   2) Dvije valne duljine / 48 LED dioda (kv-why, slika lijevo-desno)
 *   3) Za koje tegobe (slika + popis)
 *   4) Što možete očekivati — vremenska crta (Tjedan 1 / 2-3 / 4-6 / 8+)
 *   5) Tri jednostavna koraka (videi)
 *   6) Zašto odabrati NORIKS RED — usporedba s drugim uređajima
 *   7) Traka s jamstvom
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$rd      = get_template_directory_uri() . '/img/red/';
$rd_path = get_template_directory() . '/img/red/';

$rd_img = function( $file, $alt, $cls = '' ) use ( $rd, $rd_path ) {
  if ( ! file_exists( $rd_path . $file ) ) { return ''; }
  return '<img class="' . esc_attr( $cls ) . '" src="' . esc_url( $rd . $file ) . '" alt="' . esc_attr( $alt ) . '" loading="lazy">';
};
$rd_vid = function( $file, $poster, $alt ) use ( $rd, $rd_path ) {
  if ( ! file_exists( $rd_path . $file ) ) { return ''; }
  return '<video class="nrd-video" autoplay muted loop playsinline preload="metadata" '
       . 'poster="' . esc_url( $rd . $poster ) . '" aria-label="' . esc_attr( $alt ) . '">'
       . '<source src="' . esc_url( $rd . $file ) . '" type="video/mp4"></video>';
};
?>

<!-- 1) UPOZNAJTE NORIKS RED -->
<section class="nrd-intro">
  <div class="nrd-wrap">
    <div class="nrd-intro__top">
      <div class="nrd-intro__img"><?php echo $rd_img( 'red-meet.jpg', 'NORIKS RED omotač za zapešće s crvenim svjetlom' ); ?></div>
      <div class="nrd-intro__text">
        <p class="nrd-kicker">Upoznajte NORIKS RED</p>
        <h2 class="nrd-h2">Pomoć koja cilja uzrok, a ne samo simptom.</h2>
        <p>NORIKS RED dovodi crveno i infracrveno svjetlo dvostruke valne duljine točno do područja srednjeg živca — ondje gdje nastaje upala koja stoji iza boli u zapešću.</p>
        <p>Ista terapija crvenim svjetlom istražena je za poticanje stvaranja stanične energije (ATP), obnovu protoka krvi i dovod kisika u tkivo — kako bi tijelo moglo raditi svoj posao.</p>
      </div>
    </div>

    <div class="nrd-stats">
      <div class="nrd-stat"><div class="nrd-stat__big">87%</div><div class="nrd-stat__lab">Manje trnaca i utrnulosti</div><div class="nrd-stat__sub">Unutar prvih 30 dana*</div></div>
      <div class="nrd-stat"><div class="nrd-stat__big">92%</div><div class="nrd-stat__lab">Bolji san kroz noć</div><div class="nrd-stat__sub">Nakon 4+ tjedna svakodnevne upotrebe*</div></div>
      <div class="nrd-stat"><div class="nrd-stat__big">94%</div><div class="nrd-stat__lab">Preporučilo bi NORIKS RED</div><div class="nrd-stat__sub">Prijateljima i obitelji*</div></div>
      <div class="nrd-stat"><div class="nrd-stat__big">71%</div><div class="nrd-stat__lab">Odgodilo ili izbjeglo zahvat</div><div class="nrd-stat__sub">Zbog karpalnog tunela*</div></div>
    </div>
    <p class="nrd-foot">*Prema iskustvima kupaca koji redovito koriste NORIKS RED. Rezultati se razlikuju od osobe do osobe.</p>
  </div>
</section>

<!-- 2) DVIJE VALNE DULJINE / 48 LED DIODA -->
<div class="nrd-why">

  <div class="nrd-why__row nrd-why__row--reverse">
    <div class="nrd-why__imgwrap"><?php echo $rd_img( 'red-valne.jpg', 'Unutrašnjost omotača s upaljenim crvenim LED diodama', 'nrd-why__img' ); ?></div>
    <div class="nrd-why__content">
      <h2 class="nrd-h2">Dvije valne duljine. Dvostruki doseg.</h2>
      <p class="nrd-why__body">NORIKS RED spaja dvije najistraženije valne duljine u terapiji crvenim svjetlom, pa jedna seansa pokriva i površinu i dubinu.</p>
      <ul class="nrd-checks">
        <li><span class="nrd-ck"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12.5l4.5 4.5L19 7.5"/></svg></span><span><strong>660 nm crveno svjetlo</strong> — smiruje površinsku upalu</span></li>
        <li><span class="nrd-ck"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12.5l4.5 4.5L19 7.5"/></svg></span><span><strong>850 nm infracrveno</strong> — dopire do srednjeg živca</span></li>
      </ul>
    </div>
  </div>

  <div class="nrd-why__row">
    <div class="nrd-why__imgwrap"><?php echo $rd_img( 'red-led.jpg', '48 dvostrukih LED dioda u omotaču', 'nrd-why__img' ); ?></div>
    <div class="nrd-why__content">
      <h2 class="nrd-h2">48 dvostrukih LED dioda.</h2>
      <p class="nrd-why__body">Diode su raspoređene po cijeloj unutarnjoj strani lagane trake koja prati oblik zapešća — pa svaka seansa pokriva cijelo područje, a ne samo jednu točku.</p>
      <ul class="nrd-checks">
        <li><span class="nrd-ck"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12.5l4.5 4.5L19 7.5"/></svg></span><span><strong>48 LED dioda</strong> (crvene + infracrvene)</span></li>
        <li><span class="nrd-ck"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12.5l4.5 4.5L19 7.5"/></svg></span><span><strong>3 razine snage</strong> · 4 načina rada</span></li>
        <li><span class="nrd-ck"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12.5l4.5 4.5L19 7.5"/></svg></span><span><strong>Svega 126 g</strong> — dovoljno lagano za svaki dan</span></li>
      </ul>
    </div>
  </div>

</div>

<!-- 3) ZA KOJE TEGOBE -->
<section class="nrd-pain">
  <div class="nrd-wrap nrd-pain__wrap">
    <div class="nrd-pain__text">
      <p class="nrd-kicker">Za koga je NORIKS RED</p>
      <h2 class="nrd-h2">Olakšanje boli počinje terapijom crvenim svjetlom.</h2>
      <p class="nrd-pain__body">Bol u zapešću rijetko dolazi sama. NORIKS RED namijenjen je onima koji svaki dan opterećuju šaku i zapešće — za tipkovnicom, za volanom, u frizerskom salonu, na gradilištu ili u vrtu.</p>
      <ul class="nrd-pills">
        <li>Karpalni tunel</li><li>Tendinitis</li><li>Artritis</li><li>Bolovi u šaci i zapešću</li>
      </ul>
      <p class="nrd-pain__note">Uređaj nije zamjena za liječnički pregled ni za propisanu terapiju.</p>
    </div>
    <div class="nrd-pain__img"><?php echo $rd_img( 'red-bolovi.jpg', 'Terapija crvenim svjetlom na zapešću' ); ?></div>
  </div>
</section>

<!-- 4) ŠTO MOŽETE OČEKIVATI -->
<section class="nrd-tl">
  <h2 class="nrd-h2 nrd-center">Što možete očekivati</h2>
  <p class="nrd-sub">Rezultati traže vrijeme. Ovo je put kojim ide većina korisnika.</p>

  <div class="nrd-tl__wrap">
    <div class="nrd-tl__rail"><div class="nrd-tl__fill"></div></div>

    <div class="nrd-tl__step nrd-tl__step--right">
      <div class="nrd-tl__node"><svg viewBox="0 0 24 24" fill="none"><path d="M5 12.5l4.5 4.5L19 7.5" stroke="#fff" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/></svg></div>
      <div class="nrd-tl__content">
        <div class="nrd-tl__eyebrow">Tjedan 1</div>
        <h3 class="nrd-tl__name">Prvi znakovi olakšanja</h3>
        <ul><li>Upala oko srednjeg živca počinje popuštati</li><li>Zapešće djeluje lakše i rasterećenije</li><li>Manje jutarnje ukočenosti</li><li>Lakše hvatanje šalice ili volana</li></ul>
      </div>
    </div>

    <div class="nrd-tl__step nrd-tl__step--left">
      <div class="nrd-tl__node"><svg viewBox="0 0 24 24" fill="none"><path d="M5 12.5l4.5 4.5L19 7.5" stroke="#fff" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/></svg></div>
      <div class="nrd-tl__content">
        <div class="nrd-tl__eyebrow">Tjedan 2 – 3</div>
        <h3 class="nrd-tl__name">Dnevna bol popušta</h3>
        <ul><li>Trnci i utrnulost osjetno se smanjuju</li><li>Snaga stiska se popravlja</li><li>Tipkanje i otvaranje staklenki idu lakše</li><li>Manje posezanja za tabletama protiv bolova</li></ul>
      </div>
    </div>

    <div class="nrd-tl__step nrd-tl__step--right">
      <div class="nrd-tl__node"><svg viewBox="0 0 24 24" fill="none"><path d="M5 12.5l4.5 4.5L19 7.5" stroke="#fff" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/></svg></div>
      <div class="nrd-tl__content">
        <div class="nrd-tl__eyebrow">Tjedan 4 – 6</div>
        <h3 class="nrd-tl__name">San kroz cijelu noć</h3>
        <ul><li>Utrnule ruke više vas ne bude</li><li>Buđenje bez ukočenosti u prstima</li><li>Povratak hobijima — gitara, pletenje, vrt</li><li>Povjerenje u vlastite ruke se vraća</li></ul>
      </div>
    </div>

    <div class="nrd-tl__step nrd-tl__step--left">
      <div class="nrd-tl__node"><svg viewBox="0 0 24 24" fill="none"><path d="M5 12.5l4.5 4.5L19 7.5" stroke="#fff" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/></svg></div>
      <div class="nrd-tl__content">
        <div class="nrd-tl__eyebrow">Tjedan 8+</div>
        <h3 class="nrd-tl__name">Dugoročno zdravlje šake</h3>
        <ul><li>Funkcija zapešća nastavlja se popravljati</li><li>Bol postaje uspomena, a ne svakodnevica</li><li>Terapija bez tableta i bez zahvata</li><li>Seansa od 15 minuta ostaje dio dana</li></ul>
      </div>
    </div>
  </div>
</section>

<!-- 5) TRI JEDNOSTAVNA KORAKA -->
<section class="nrd-steps">
  <div class="nrd-wrap">
    <p class="nrd-kicker nrd-center">Jednostavno koliko može biti</p>
    <h2 class="nrd-h2 nrd-center">Tri koraka do seanse.</h2>
    <p class="nrd-sub">Bez termina i bez namještanja. Samo stavite, pritisnite i opustite se.</p>
    <div class="nrd-steps__grid">
      <div class="nrd-steps__step">
        <div class="nrd-steps__media"><span class="nrd-steps__num">1</span><?php echo $rd_vid( 'red-vid-1.mp4', 'red-vid-1.jpg', 'Stavljanje omotača na zapešće' ); ?></div>
        <h4>Stavite omotač</h4>
        <p>Provucite palac kroz otvor i pričvrstite traku preko nadlanice.</p>
      </div>
      <div class="nrd-steps__step">
        <div class="nrd-steps__media"><span class="nrd-steps__num">2</span><?php echo $rd_vid( 'red-vid-2.mp4', 'red-vid-2.jpg', 'Pokretanje seanse jednim gumbom' ); ?></div>
        <h4>Pritisnite gumb</h4>
        <p>Jedan pritisak pokreće seansu od 15 minuta. Odaberite razinu snage i način rada.</p>
      </div>
      <div class="nrd-steps__step">
        <div class="nrd-steps__media"><span class="nrd-steps__num">3</span><?php echo $rd_vid( 'red-vid-3.mp4', 'red-vid-3.jpg', 'Opuštanje tijekom terapije' ); ?></div>
        <h4>Opustite se</h4>
        <p>Pustite svjetlo da radi. Jednom dnevno — redovitost je ono što donosi rezultat.</p>
      </div>
    </div>
  </div>
</section>

<!-- 6) ZAŠTO ODABRATI NORIKS RED -->
<section class="nrd-vs">
  <div class="nrd-vs__inner">
    <h2 class="nrd-h2 nrd-center nrd-vs__title-mobile">Zašto odabrati NORIKS RED?</h2>

    <div class="nrd-vs__cards">
      <div class="nrd-vs__card nrd-vs__card--us">
        <div class="nrd-vs__imgwrap"><?php echo $rd_img( 'red-vs.jpg', 'NORIKS RED', 'nrd-vs__img' ); ?></div>
        <div class="nrd-vs__card-title">NORIKS RED</div>
        <div class="nrd-vs__list">
          <div class="nrd-vs__row"><span class="nrd-vs__ic nrd-vs__ic--yes">&#10003;</span>Dvostruka valna duljina (660 + 850 nm)</div>
          <div class="nrd-vs__row"><span class="nrd-vs__ic nrd-vs__ic--yes">&#10003;</span>48 dvostrukih LED dioda</div>
          <div class="nrd-vs__row"><span class="nrd-vs__ic nrd-vs__ic--yes">&#10003;</span>3 razine snage, 4 načina rada</div>
          <div class="nrd-vs__row"><span class="nrd-vs__ic nrd-vs__ic--yes">&#10003;</span>Bežično i punjivo (USB-C)</div>
          <div class="nrd-vs__row"><span class="nrd-vs__ic nrd-vs__ic--yes">&#10003;</span>Oblikovano za šaku i zapešće</div>
        </div>
      </div>

      <div class="nrd-vs__card nrd-vs__card--them">
        <div class="nrd-vs__card-title nrd-vs__card-title--dark">Drugi uređaji</div>
        <div class="nrd-vs__list">
          <div class="nrd-vs__row nrd-vs__row--dark"><span class="nrd-vs__ic nrd-vs__ic--no">&#10007;</span>Samo jedna valna duljina</div>
          <div class="nrd-vs__row nrd-vs__row--dark"><span class="nrd-vs__ic nrd-vs__ic--no">&#10007;</span>Manje dioda, nejednaka pokrivenost</div>
          <div class="nrd-vs__row nrd-vs__row--dark"><span class="nrd-vs__ic nrd-vs__ic--no">&#10007;</span>Fiksni intenzitet</div>
          <div class="nrd-vs__row nrd-vs__row--dark"><span class="nrd-vs__ic nrd-vs__ic--no">&#10007;</span>Ovisni o utičnici</div>
          <div class="nrd-vs__row nrd-vs__row--dark"><span class="nrd-vs__ic nrd-vs__ic--no">&#10007;</span>Univerzalni kroj koji ne prianja</div>
        </div>
      </div>
    </div>

    <div class="nrd-vs__copy">
      <h2 class="nrd-h2">Zašto NORIKS RED?</h2>
      <div class="nrd-vs__bullets">
        <div class="nrd-vs__bullet"><span class="nrd-vs__bc">&#10003;</span><span>Oblikovan upravo za šaku i zapešće</span></div>
        <div class="nrd-vs__bullet"><span class="nrd-vs__bc">&#10003;</span><span>Dvostruka valna duljina u jednoj seansi</span></div>
        <div class="nrd-vs__bullet"><span class="nrd-vs__bc">&#10003;</span><span>Bežično, bilo gdje, 15 minuta dnevno</span></div>
        <div class="nrd-vs__bullet"><span class="nrd-vs__bc">&#10003;</span><span>Do 4 tretmana po jednom punjenju</span></div>
      </div>
      <div class="nrd-vs__guar"><span class="nrd-vs__shield">&#128737;</span> 30 dana povrata novca</div>
    </div>
  </div>
</section>

<!-- 7) TRAKA S JAMSTVOM -->
<section class="nrd-belt">
  <div class="nrd-belt__badge">
    <div class="nrd-belt__ring"><span class="nrd-belt__num">30</span><span class="nrd-belt__label">Dana jamstva</span></div>
  </div>
  <div class="nrd-belt__body">
    <p class="nrd-belt__eyebrow"><span>——</span> Naše obećanje</p>
    <h2 class="nrd-belt__headline">Isprobajte 30 dana,<br>bez rizika.</h2>
    <p class="nrd-belt__copy">Ako nakon redovite upotrebe ne osjetite razliku, javite nam se unutar 30 dana od primitka i vraćamo novac.</p>
    <p class="nrd-belt__fine">Jedan povrat po kupcu na prvu narudžbu. Svaka narudžba šalje se s praćenjem pošiljke.</p>
  </div>
</section>

<style>
/* ===== NORIKS RED — why sekcije (paleta preuzeta s originala) ===== */
.nrd-intro,.nrd-why,.nrd-pain,.nrd-tl,.nrd-steps,.nrd-vs,.nrd-belt{
  font-family:'Inter',-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,Arial,sans-serif;
  color:#231b16; box-sizing:border-box;
}
.nrd-intro *,.nrd-why *,.nrd-pain *,.nrd-tl *,.nrd-steps *,.nrd-vs *,.nrd-belt *{ box-sizing:border-box; }
.nrd-wrap{ max-width:1180px; margin:0 auto; padding:0 24px; }
.nrd-h2{ font-size:clamp(26px,3.4vw,40px); font-weight:800; line-height:1.12; letter-spacing:-.01em; margin:0 0 14px; color:#231b16; }
.nrd-kicker{ font-size:13px; font-weight:800; letter-spacing:.14em; text-transform:uppercase; color:#c3192a; margin:0 0 12px; }
.nrd-center{ text-align:center; }
.nrd-sub{ text-align:center; font-size:16px; color:#6b625d; max-width:56ch; margin:0 auto 46px; line-height:1.55; }

/* 1) intro */
.nrd-intro{ background:#f0e9db; padding:78px 0; }
.nrd-intro__top{ display:grid; grid-template-columns:1fr 1.08fr; gap:50px; align-items:center; }
.nrd-intro__img{ aspect-ratio:4/3.4; border-radius:12px; overflow:hidden; background:#e8ddd4;
  box-shadow:0 1px 2px rgba(28,24,23,.04),0 10px 34px rgba(28,24,23,.07); }
.nrd-intro__img img{ width:100%; height:100%; object-fit:cover; display:block; }
.nrd-intro__text p{ font-size:16px; color:#6b625d; margin:0 0 10px; line-height:1.6; }
.nrd-stats{ display:grid; grid-template-columns:repeat(4,1fr); gap:18px; margin-top:54px; border-top:1px solid #d4c9bc; padding-top:40px; }
.nrd-stat{ text-align:center; }
.nrd-stat__big{ font-size:44px; font-weight:800; color:#c3192a; line-height:1; }
.nrd-stat__lab{ font-size:14px; font-weight:700; margin-top:8px; }
.nrd-stat__sub{ font-size:12px; color:#6b625d; margin-top:3px; }
.nrd-foot{ font-size:11.5px; color:#9a8e86; font-style:italic; margin-top:20px; text-align:center; }

/* 2) why */
.nrd-why__row{ display:grid; grid-template-columns:1fr 1fr; align-items:center; background:#faf7f3; }
.nrd-why__row--reverse{ direction:rtl; }
.nrd-why__row--reverse > *{ direction:ltr; }
.nrd-why__imgwrap{ padding:56px 60px; }
.nrd-why__img{ width:100%; aspect-ratio:1/1; object-fit:cover; display:block; border-radius:12px; }
.nrd-why__content{ padding:56px 60px; }
.nrd-why__body{ font-size:15px; color:#6b625d; line-height:1.7; margin:0 0 24px; }
.nrd-checks{ list-style:none; padding:0; margin:0; display:flex; flex-direction:column; gap:14px; }
.nrd-checks li{ display:flex; align-items:flex-start; gap:10px; font-size:15px; line-height:1.5; }
.nrd-ck{ flex:none; width:22px; height:22px; border-radius:50%; background:#c3192a; color:#fff; display:flex; align-items:center; justify-content:center; margin-top:1px; }
.nrd-ck svg{ width:12px; height:12px; }

/* 3) tegobe */
.nrd-pain{ background:#f0e9db; padding:78px 0; }
.nrd-pain__wrap{ display:grid; grid-template-columns:1.05fr .95fr; gap:50px; align-items:center; }
.nrd-pain__body{ font-size:16px; color:#6b625d; line-height:1.6; margin:0 0 22px; max-width:48ch; }
.nrd-pills{ list-style:none; padding:0; margin:0 0 18px; display:flex; flex-wrap:wrap; gap:10px; }
.nrd-pills li{ background:#fff; border:1px solid #d4c9bc; border-radius:999px; padding:9px 16px; font-size:14px; font-weight:700; }
.nrd-pills li::before{ content:'●'; color:#c3192a; font-size:10px; margin-right:8px; vertical-align:middle; }
.nrd-pain__note{ font-size:12px; color:#9a8e86; font-style:italic; margin:0; }
.nrd-pain__img{ border-radius:12px; overflow:hidden; box-shadow:0 1px 2px rgba(28,24,23,.04),0 10px 34px rgba(28,24,23,.07); }
.nrd-pain__img img{ width:100%; display:block; }

/* 4) vremenska crta */
.nrd-tl{ padding:72px 24px 80px; background:radial-gradient(circle,#d4c9bc 1px,transparent 1px) 0 0/20px 20px,#faf7f3; }
.nrd-tl__wrap{ position:relative; max-width:1000px; margin:0 auto; }
.nrd-tl__rail{ position:absolute; top:0; bottom:0; left:50%; width:3px; background:#d4c9bc; transform:translateX(-50%); border-radius:2px; overflow:hidden; }
.nrd-tl__fill{ position:absolute; top:0; left:0; right:0; height:0; background:#c3192a; border-radius:2px; transition:height .15s linear; }
.nrd-tl__step{ position:relative; display:grid; grid-template-columns:1fr 56px 1fr; align-items:start; margin-bottom:56px; }
.nrd-tl__step:last-child{ margin-bottom:0; }
.nrd-tl__node{ grid-column:2; grid-row:1; width:44px; height:44px; border-radius:50%; background:#d4c9bc; display:flex; align-items:center; justify-content:center; margin:0 auto; z-index:2; box-shadow:0 0 0 6px #faf7f3; transition:background .4s ease,transform .4s cubic-bezier(.34,1.56,.64,1); }
.nrd-tl__node svg{ width:22px; height:22px; opacity:.7; transition:opacity .4s ease; }
.nrd-tl__step.is-active .nrd-tl__node{ background:#c3192a; transform:scale(1.08); }
.nrd-tl__step.is-active .nrd-tl__node svg{ opacity:1; }
.nrd-tl__content{ padding:0 8px; opacity:.55; transition:opacity .4s ease; }
.nrd-tl__step.is-active .nrd-tl__content{ opacity:1; }
.nrd-tl__step--right .nrd-tl__content{ grid-column:3; grid-row:1; padding-left:24px; text-align:left; }
.nrd-tl__step--left  .nrd-tl__content{ grid-column:1; grid-row:1; padding-right:24px; text-align:right; }
.nrd-tl__eyebrow{ font-size:12px; color:#c3192a; font-weight:800; text-transform:uppercase; letter-spacing:1.5px; margin-bottom:4px; }
.nrd-tl__name{ font-size:19px; font-weight:800; margin:0 0 10px; }
.nrd-tl__content ul{ list-style:none; padding:0; margin:0; display:flex; flex-direction:column; gap:6px; }
.nrd-tl__content li{ font-size:14.5px; color:#6b625d; line-height:1.5; }

/* 5) koraci */
.nrd-steps{ background:#f0e9db; padding:78px 0; }
.nrd-steps__grid{ display:grid; grid-template-columns:repeat(3,1fr); gap:24px; }
.nrd-steps__step{ text-align:center; }
.nrd-steps__media{ position:relative; aspect-ratio:1/1; border-radius:14px; overflow:hidden; background:#e8ddd0; margin-bottom:18px; }
.nrd-steps__media .nrd-video{ width:100%; height:100%; object-fit:cover; display:block; pointer-events:none; }
.nrd-steps__num{ position:absolute; top:14px; left:14px; width:38px; height:38px; border-radius:50%; background:#c3192a; color:#fff; font-size:18px; font-weight:800; display:flex; align-items:center; justify-content:center; z-index:2; }
.nrd-steps__step h4{ font-size:18px; font-weight:800; margin:0 0 6px; }
.nrd-steps__step p{ font-size:14.5px; color:#6b625d; max-width:34ch; margin:0 auto; line-height:1.5; }

/* 6) usporedba */
.nrd-vs{ padding:64px 24px; background:#faf7f3; }
.nrd-vs__inner{ max-width:1100px; margin:0 auto; display:grid; grid-template-columns:1.15fr .85fr; gap:48px; align-items:center; }
.nrd-vs__title-mobile{ display:none; }
.nrd-vs__cards{ display:grid; grid-template-columns:1fr 1fr; gap:18px; align-items:start; }
.nrd-vs__card{ border-radius:16px; padding:24px 22px; }
.nrd-vs__card--us{ background:#231b16; color:#fff; box-shadow:0 18px 44px rgba(28,24,23,.16); }
.nrd-vs__card--them{ background:#fff; border:1px solid #d4c9bc; margin-top:26px; }
.nrd-vs__imgwrap{ border-radius:12px; overflow:hidden; background:#2e241e; margin-bottom:16px; }
.nrd-vs__img{ width:100%; aspect-ratio:1/1; object-fit:cover; display:block; }
.nrd-vs__card-title{ font-size:18px; font-weight:800; margin-bottom:14px; }
.nrd-vs__card-title--dark{ color:#231b16; }
.nrd-vs__list{ display:flex; flex-direction:column; gap:11px; }
.nrd-vs__row{ display:flex; align-items:flex-start; gap:10px; font-size:14px; line-height:1.45; }
.nrd-vs__row--dark{ color:#6b625d; }
.nrd-vs__ic{ flex:none; width:19px; height:19px; border-radius:50%; display:flex; align-items:center; justify-content:center; font-size:11px; margin-top:1px; }
.nrd-vs__ic--yes{ background:#c3192a; color:#fff; }
.nrd-vs__ic--no{ background:#e6ddd3; color:#9a8e86; }
.nrd-vs__bullets{ display:flex; flex-direction:column; gap:12px; margin:0 0 22px; }
.nrd-vs__bullet{ display:flex; align-items:flex-start; gap:10px; font-size:15px; line-height:1.5; }
.nrd-vs__bc{ flex:none; width:21px; height:21px; border-radius:50%; background:#c3192a; color:#fff; font-size:12px; display:flex; align-items:center; justify-content:center; margin-top:1px; }
.nrd-vs__guar{ display:flex; align-items:center; gap:9px; font-size:14px; font-weight:700; color:#6b625d; }
.nrd-vs__shield{ font-size:16px; }

/* 7) traka */
.nrd-belt{ background:#f0e9db; padding:72px 48px; display:flex; align-items:center; justify-content:center; gap:56px; flex-wrap:wrap; }
.nrd-belt__ring{ width:148px; height:148px; border-radius:50%; border:2px solid #d4c9bc; background:#fff; display:flex; flex-direction:column; align-items:center; justify-content:center; gap:4px; }
.nrd-belt__num{ font-size:58px; font-weight:800; line-height:1; color:#c3192a; }
.nrd-belt__label{ font-size:9px; font-weight:800; letter-spacing:.18em; text-transform:uppercase; color:#6b625d; }
.nrd-belt__body{ max-width:440px; }
.nrd-belt__eyebrow{ display:flex; align-items:center; gap:10px; font-size:11px; font-weight:700; letter-spacing:.16em; text-transform:uppercase; color:#6b625d; margin:0 0 16px; }
.nrd-belt__headline{ font-size:36px; font-weight:800; line-height:1.15; margin:0 0 18px; }
.nrd-belt__copy{ font-size:15px; line-height:1.7; color:#6b625d; margin:0 0 20px; }
.nrd-belt__fine{ font-size:12px; line-height:1.6; color:#9a8e86; margin:0; padding-top:14px; border-top:1px solid #d4c9bc; }

/* ===== mobilno ===== */
@media (max-width:880px){
  .nrd-intro__top{ grid-template-columns:1fr; gap:30px; }
  .nrd-pain__wrap{ grid-template-columns:1fr; gap:28px; }
  .nrd-vs__inner{ grid-template-columns:1fr; gap:32px; }
  .nrd-vs__title-mobile{ display:block; }
  .nrd-vs__copy > .nrd-h2{ display:none; }
}
@media (max-width:760px){
  .nrd-intro,.nrd-pain,.nrd-steps{ padding:52px 0; }
  .nrd-stats{ grid-template-columns:repeat(2,1fr); gap:28px 18px; margin-top:40px; padding-top:32px; }
  .nrd-why__row{ grid-template-columns:1fr; }
  .nrd-why__row--reverse{ direction:ltr; }
  .nrd-why__imgwrap{ padding:36px 24px 0; }
  .nrd-why__content{ padding:24px 24px 36px; }
  .nrd-tl{ padding:52px 20px 56px; }
  .nrd-tl__rail{ left:22px; }
  .nrd-tl__step{ grid-template-columns:44px 1fr; margin-bottom:34px; }
  .nrd-tl__node{ grid-column:1; }
  .nrd-tl__step--right .nrd-tl__content,
  .nrd-tl__step--left  .nrd-tl__content{ grid-column:2; grid-row:1; text-align:left; padding:0 0 0 18px; }
  .nrd-steps__grid{ display:flex; gap:14px; overflow-x:auto; scroll-snap-type:x mandatory; -webkit-overflow-scrolling:touch; padding:4px 24px 16px; margin:0 -24px; scrollbar-width:none; }
  .nrd-steps__grid::-webkit-scrollbar{ display:none; }
  .nrd-steps__step{ flex:0 0 80%; scroll-snap-align:center; }
  .nrd-vs__cards{ grid-template-columns:1fr; }
  .nrd-vs__card--them{ margin-top:0; }
  .nrd-belt{ padding:48px 20px; flex-direction:column; text-align:center; gap:28px; }
  .nrd-belt__eyebrow{ justify-content:center; }
  .nrd-belt__headline{ font-size:28px; }
}
</style>

<script>
(function(){
  var tl = document.querySelector('.nrd-tl__wrap');
  if(!tl) return;
  var fill  = tl.querySelector('.nrd-tl__fill');
  var steps = [].slice.call(tl.querySelectorAll('.nrd-tl__step'));
  function upd(){
    var r = tl.getBoundingClientRect();
    var mid = window.innerHeight * 0.62;
    var p = (mid - r.top) / r.height;
    p = Math.max(0, Math.min(1, p));
    fill.style.height = (p * 100) + '%';
    steps.forEach(function(s){
      var n = s.querySelector('.nrd-tl__node').getBoundingClientRect();
      s.classList.toggle('is-active', n.top + n.height / 2 <= mid);
    });
  }
  window.addEventListener('scroll', upd, {passive:true});
  window.addEventListener('resize', upd);
  upd();
})();
</script>
