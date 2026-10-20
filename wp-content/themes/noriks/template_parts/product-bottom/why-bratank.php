<?php
/**
 * product-bottom: NORIKS BraTank — majica s ugradenim grudnjakom bez trake (orto-bratank).
 * Original: lunara-comfort.com/products/front-support-built-in-bra-tank — struktura je 1:1 z originalom
 * (isto stevilo sekcij, isti vrstni red, isti dizajn), besedila prevedena.
 *   1) Pridruzite se 20.000+ zadovoljnih kupaca (6 kartic mnenj, 3 v vrsti / karusel na mobilnem)
 *   2) Sto smo promijenili + Kako djeluje — sloj po sloj (4 kartice)
 *   3) Vasa nova jutarnja rutina (3 koraki)
 *   4) Usporedba (tabela, stolpec NORIKS)
 * FAQ originala je v reviews.php ($bratank_faq), mnenja za karusel teme v auto_reviews/HR_bratank.php.
 * Promo pasica originala ("FALL SALE" z odstevalnikom) je na istem mestu: cisto na vrhu strani.
 * Izpusceno: glava, noga, locilna crta pred nogo (trgovinski moduli).
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$nbt_img = get_template_directory_uri() . '/img/bratank/';

/* Mnenja 1:1 z originala (ime in leta ostanejo kot na originalu). */
$nbt_reviews = array(
  array( 'ime' => 'Janet Mercer, 66', 'tekst' => '»Svako jutro stajala sam pred komodom i pokušavala shvatiti koji grudnjak ide uz ono što nosim. Onaj s jastučićima, onaj bez žica, onaj koji se ne vidi ispod bijelog. Sada uzmem majicu i obučena sam. To je cijela odluka. Ladicu s grudnjacima nisam otvorila mjesecima i ni sekunde mi ne nedostaje.«' ),
  array( 'ime' => 'Sarah Hartley, 69', 'tekst' => '»Cijeli odrasli život prvo što bih napravila kad uđem u kuću bilo je da posegnem iza leđa i otkopčam grudnjak. Svaki dan. Ovu majicu nosim dva mjeseca i neku sam večer shvatila da legnem u krevet, a nemam što skinuti. Već mi je udobno. Nikad nisam mislila da ću to reći za nešto što nosim cijeli dan.«' ),
  array( 'ime' => 'Linda White, 67', 'tekst' => '»Iskreno, sada živim u njoj. Obučem je odmah ujutro i nosim je cijeli dan po kući — dok kuham, čistim, idem do poštanskog sandučića, navečer na kauču. Prije bih se čim dođem kući presvukla u nešto mekano. Sada se nemam u što presvući ni što skinuti. Nosim je od trenutka kad ustanem do odlaska na spavanje. Kupila sam po jednu u svakoj boji da uvijek imam čistu u ladici.«' ),
  array( 'ime' => 'Stephanie Foren, 74', 'tekst' => 'Cijeli život mrzim grudnjake. Žice, uske trake, tragovi grudnjaka — s time se nosim desetljećima. Prijateljica mi je preporučila ovu majicu i iskreno, bila sam skeptična. Ali naručila sam tri jer ima jamstvo pristajanja. Najbolja stvar koju sam kupila godinama.' ),
  array( 'ime' => 'Erin Elwell, 78', 'tekst' => '»Najbolji dan s unucima 💕 Toliko je udobna da se mogu cijeli dan igrati na podu, a da me grudnjak ne ubija. Ove majice MIJENJAJU SVE! Imam 78 i napokon sam našla nešto što me stvarno podržava!«' ),
  array( 'ime' => 'Jessica Reller, 72', 'tekst' => '»Godinama sam probala sve i ništa nije pomoglo. Ovo je prva stvar koja zaista pristaje mom tijelu, a da me ne boli. Nosim je cijeli dan, u njoj odspavam, u njoj radim u vrtu. Nitko ne primijeti da ne nosim grudnjak.«' ),
);

$nbt_layers = array(
  array( 'Sloj za raspoređenu potporu', 'Unutarnji sloj daje nježno, ravnomjerno držanje preko cijelog trupa. Bez uskih traka koje koncentriraju pritisak.' ),
  array( 'Ušiveni jastučići koji ostaju na mjestu', 'Jastučići su ušiveni izravno u majicu. Ne pomiču se. Ne gužvaju se. I nakon 20 pranja su na istom mjestu.' ),
  array( 'Dizajn bez točaka pritiska', 'Bez žica. Bez kopči. Široka pokrivenost ramena ravnomjerno raspoređuje težinu pa se ništa ne urezuje u ramena.' ),
  array( 'Zaglađujući vanjski sloj', 'Vanjski sloj ravno prianja uz tijelo i stvara čistu siluetu ispod odjeće. Samo gladak, uredan izgled.' ),
);

$nbt_steps = array(
  array( 'Navucite je', 'Bez kopči. Bez kukica. Bez petljanja iza leđa. Samo je navucite preko glave kao svaku majicu na naramenice.' ),
  array( 'Izađite iz kuće', 'Sve je glatko. Pokrivene ste. Imate potporu. Uzmite ključeve i krenite.' ),
  array( 'Zaboravite da je nosite', 'Bez namještanja naramenica usred jutra. Bez povlačenja trake nakon ručka. Samo udobnost koja traje od jutarnje kave do večeri na kauču.' ),
);

/* Usporedba: 1 = kvacica, 0 = krizec (Klasicni grudnjak, Sportski grudnjak, Top s policom, NORIKS). */
$nbt_compare = array(
  array( 'Udobno cijeli dan',              0, 0, 0 ),
  array( 'Dovoljno potpore',               1, 1, 0 ),
  array( 'Glatko ispod odjeće',            0, 0, 1 ),
  array( 'Ostaje na mjestu cijeli dan',    0, 1, 0 ),
  array( 'Bez namještanja',                0, 1, 0 ),
  array( 'Jastučići ostaju nakon pranja',  1, 0, 0 ),
  array( 'Prozračno',                      0, 0, 1 ),
  array( 'Lako oblačenje i skidanje',      0, 0, 1 ),
);

$nbt_star = '<svg viewBox="0 0 20 20" aria-hidden="true"><path fill="currentColor" d="M10 1.5l2.6 5.3 5.9.9-4.3 4.1 1 5.8L10 14.8l-5.2 2.8 1-5.8L1.5 7.7l5.9-.9z"/></svg>';
?>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap">

<!-- 1) PRIDRUZITE SE 20.000+ ZADOVOLJNIH KUPACA -->
<section class="nbt-sec nbt-sec--reviews">
  <div class="nbt-wrap nbt-wrap--wide">
    <h2 class="nbt-h1">Pridružite se više od 20.000 zadovoljnih kupaca.</h2>
    <p class="nbt-score">Odlično <span class="nbt-score__num"><strong>4.8</strong></span> <strong>/ 5</strong>
      <span class="nbt-stars" aria-label="5 od 5 zvjezdica"><?php echo str_repeat( '<i>' . $nbt_star . '</i>', 5 ); ?></span></p>
    <div class="nbt-slider" data-nbt-slider tabindex="0" role="group" aria-label="Recenzije kupaca">
      <div class="nbt-track">
        <?php foreach ( $nbt_reviews as $r ) : ?>
        <article class="nbt-rv">
          <span class="nbt-stars" aria-label="5 od 5 zvjezdica"><?php echo str_repeat( '<i>' . $nbt_star . '</i>', 5 ); ?></span>
          <p class="nbt-rv__txt"><?php echo esc_html( $r['tekst'] ); ?></p>
          <p class="nbt-rv__name"><em><strong><?php echo esc_html( $r['ime'] ); ?></strong></em></p>
        </article>
        <?php endforeach; ?>
      </div>
    </div>
    <div class="nbt-dots" data-nbt-dots aria-hidden="true"></div>
  </div>
</section>

<!-- 2) STO SMO PROMIJENILI + KAKO DJELUJE — SLOJ PO SLOJ -->
<section class="nbt-sec nbt-sec--changed">
  <div class="nbt-wrap">
    <h2 class="nbt-title">Što smo promijenili — i zašto je osjećaj drukčiji</h2>
    <p class="nbt-sub">Nismo napravili bolji grudnjak. Potpuno smo prestali raditi grudnjake.</p>
    <div class="nbt-callout">
      <p>Umjesto da potporu natjeramo u dvije naramenice i traku, raspodijelili smo je po cijeloj majici. Bez točaka koncentriranog pritiska. Bez kopči i žica. Bez konstrukcije koja se urezuje, štipa ili smota.</p>
      <p>Ovo nije steznik. Ovo nije kompresija. Ovo je »taman dovoljno potpore« — osjećaj da vas nešto nježno drži i glatko pokriva, a da se nijedan dio majice ne bori protiv vašeg tijela.</p>
    </div>
    <h3 class="nbt-works">Kako djeluje — sloj po sloj</h3>
    <div class="nbt-grid">
      <?php foreach ( $nbt_layers as $i => $l ) : ?>
      <div class="nbt-card">
        <div class="nbt-num"><?php echo (int) ( $i + 1 ); ?></div>
        <h4><?php echo esc_html( $l[0] ); ?></h4>
        <p><?php echo esc_html( $l[1] ); ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- 3) VASA NOVA JUTARNJA RUTINA -->
<section class="nbt-sec nbt-sec--morning">
  <div class="nbt-wrap nbt-wrap--narrow">
    <h2 class="nbt-title nbt-title--morning">Vaša nova jutarnja rutina</h2>
    <?php foreach ( $nbt_steps as $i => $st ) : ?>
    <div class="nbt-step">
      <div class="nbt-num nbt-num--big"><?php echo (int) ( $i + 1 ); ?></div>
      <h3><?php echo esc_html( $st[0] ); ?></h3>
      <p><?php echo esc_html( $st[1] ); ?></p>
    </div>
    <?php endforeach; ?>
  </div>
</section>

<!-- 4) USPOREDBA -->
<section class="nbt-sec nbt-sec--compare">
  <div class="nbt-wrap">
    <h2 class="nbt-title nbt-title--compare">Usporedba</h2>
    <p class="nbt-sub nbt-sub--compare">Nije svaka potpora jednaka.</p>
    <table class="nbt-cmp">
      <thead>
        <tr>
          <th class="feat"></th>
          <th>Klasični grudnjak</th>
          <th>Sportski grudnjak</th>
          <th>Top s policom</th>
          <th class="win">NORIKS</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ( $nbt_compare as $row ) : ?>
        <tr>
          <td class="feat"><?php echo esc_html( $row[0] ); ?></td>
          <?php for ( $c = 1; $c <= 3; $c++ ) : ?>
            <?php if ( $row[ $c ] ) : ?><td class="check">&#10003;</td><?php else : ?><td class="cross">&#10005;</td><?php endif; ?>
          <?php endfor; ?>
          <td class="win check">&#10003;</td>
        </tr>
        <?php endforeach; ?>
        <tr class="score">
          <td class="feat">Ocjena</td>
          <td>2/8</td>
          <td>3/8</td>
          <td>3/8</td>
          <td class="win">8/8</td>
        </tr>
      </tbody>
    </table>
    <p class="nbt-caption">Jedan stupac sa svim kvačicama. To je onaj koji želite.</p>
  </div>
</section>

<script>
(function(){
  /* promo pasica originala ("FALL SALE" + odstevalnik 2 h) — na istem mestu: cisto na vrhu strani, nad glavo. */
  if (!document.querySelector('.nbt-topbar')) {
    var bar = document.createElement('div');
    bar.className = 'nbt-topbar'; bar.setAttribute('role', 'region'); bar.setAttribute('aria-label', 'Obavijest');
    bar.innerHTML = '<div class="nbt-topbar__row"><div class="nbt-topbar__msg"><div class="t">🍁 JESENSKA AKCIJA</div><div class="s">Kupite sada i uštedite do 70 %</div></div>'
      + '<div class="nbt-topbar__timer" aria-label="Akcija završava za"><div class="u"><span class="n" data-nbt-h>02</span><span class="l">Sati</span></div><span class="sep">:</span>'
      + '<div class="u"><span class="n" data-nbt-m>00</span><span class="l">Min</span></div><span class="sep">:</span>'
      + '<div class="u"><span class="n" data-nbt-s>00</span><span class="l">Sek</span></div></div></div>';
    document.body.insertBefore(bar, document.body.firstChild);
    var h = bar.querySelector('[data-nbt-h]'), m = bar.querySelector('[data-nbt-m]'), s = bar.querySelector('[data-nbt-s]');
    var KEY = 'noriks_bratank_sale_end', DUR = 2 * 60 * 60 * 1000;
    function getEnd(){ var e = 0; try { e = parseInt(localStorage.getItem(KEY), 10) || 0; } catch (x) {}
      if (!e || e <= Date.now()) { e = Date.now() + DUR; try { localStorage.setItem(KEY, e); } catch (x) {} } return e; }
    var end = getEnd();
    function p(n){ return (n < 10 ? '0' : '') + n; }
    function tick(){ var d = end - Date.now(); if (d <= 0) { end = getEnd(); d = end - Date.now(); }
      h.textContent = p(Math.floor(d / 3.6e6)); m.textContent = p(Math.floor((d % 3.6e6) / 6e4)); s.textContent = p(Math.floor((d % 6e4) / 1000)); }
    tick(); setInterval(tick, 1000);
  }
})();
(function(){
  /* mnenja: na namizju 3 v vrsti (kot original), na mobilnem karusel s pikami. */
  var s = document.querySelector('[data-nbt-slider]'), dots = document.querySelector('[data-nbt-dots]');
  if (!s || !dots) return;
  var cards = s.querySelectorAll('.nbt-rv');
  cards.forEach(function(c, i){ var b = document.createElement('span'); b.className = 'nbt-dot' + (i === 0 ? ' is-on' : ''); dots.appendChild(b); });
  s.addEventListener('scroll', function(){
    var w = cards[0] ? cards[0].getBoundingClientRect().width + 15 : 1, i = Math.round(s.scrollLeft / w);
    dots.querySelectorAll('.nbt-dot').forEach(function(d, k){ d.classList.toggle('is-on', k === i); });
  }, { passive: true });
})();
</script>

<style>
/* promo pasica */
.nbt-topbar { background: #b57e7e; color: #fff; padding: 8px 12px; font-family: 'Poppins', system-ui, -apple-system, 'Segoe UI', Roboto, Arial, sans-serif; position: relative; z-index: 50; }
.nbt-topbar * { box-sizing: border-box; margin: 0; padding: 0; }
.nbt-topbar__row { display: flex; align-items: center; justify-content: center; gap: 22px; flex-wrap: nowrap; }
.nbt-topbar__msg { text-align: center; min-width: 0; }
.nbt-topbar__msg .t { font-size: 19px; font-weight: 600; letter-spacing: .02em; line-height: 1.15; white-space: nowrap; }
.nbt-topbar__msg .s { font-size: 12px; opacity: .92; line-height: 1.3; margin-top: 2px; white-space: nowrap; }
.nbt-topbar__timer { display: flex; align-items: flex-start; gap: 5px; flex: 0 0 auto; }
.nbt-topbar__timer .u { display: flex; flex-direction: column; align-items: center; min-width: 30px; }
.nbt-topbar__timer .n { font-size: 24px; font-weight: 500; line-height: 1; font-variant-numeric: tabular-nums; }
.nbt-topbar__timer .l { font-size: 11px; opacity: .92; margin-top: 4px; }
.nbt-topbar__timer .sep { font-size: 20px; line-height: 1; padding-top: 2px; opacity: .9; }
@media (max-width: 420px) {
  .nbt-topbar__row { gap: 14px; }
  .nbt-topbar__msg .t { font-size: 16px; }
  .nbt-topbar__msg .s { font-size: 10.5px; }
  .nbt-topbar__timer .n { font-size: 20px; }
  .nbt-topbar__timer .u { min-width: 26px; }
  .nbt-topbar__timer .l { font-size: 10px; }
  .nbt-topbar__timer .sep { font-size: 17px; }
}

.nbt-sec { --nbt-rose: #b57e7e; --nbt-ink: #1f1b1a; --nbt-muted: #5b5350; --nbt-beige: #f6f2ec; --nbt-line: #e8ded6; --nbt-x: #cbc3bd;
  padding: 30px 0 39px; font-family: 'Poppins', system-ui, -apple-system, 'Segoe UI', Roboto, Arial, sans-serif; color: var(--nbt-ink); background: #fff; overflow-x: hidden; }
.nbt-sec * { box-sizing: border-box; }
.nbt-wrap { width: 100%; max-width: 860px; margin: 0 auto; padding: 0 20px; }
.nbt-wrap--wide { max-width: 1200px; }
.nbt-wrap--narrow { max-width: 640px; }
.nbt-sec h2, .nbt-sec h3, .nbt-sec h4 { font-family: inherit; text-transform: none; letter-spacing: 0; }

/* 1) mnenja */
.nbt-sec--reviews { padding: 27px 0; }
.nbt-h1 { font-weight: 700; font-size: clamp(26px, 3.2vw, 40px); line-height: 1.2; text-align: center; color: #2e2a39; margin: 0 0 12px; }
.nbt-score { display: flex; align-items: center; justify-content: center; flex-wrap: wrap; gap: 6px; font-size: 18px; color: #2e2a39; margin: 0 0 26px; }
.nbt-score__num { font-size: 1.25em; }
.nbt-stars { display: inline-flex; gap: 2px; color: #00b67a; line-height: 1; }
.nbt-stars i { display: inline-flex; width: 20px; height: 20px; }
.nbt-stars svg { width: 100%; height: 100%; }
.nbt-slider { overflow-x: auto; scroll-snap-type: x mandatory; -webkit-overflow-scrolling: touch; scrollbar-width: none; outline: none; }
.nbt-slider::-webkit-scrollbar { display: none; }
.nbt-track { display: grid; grid-template-columns: repeat(3, minmax(0, 1fr)); gap: 24px; }
.nbt-rv { background: #f3f3f3; color: #2e2a39; border-radius: 16px; padding: 26px 24px; text-align: center; display: flex; flex-direction: column; align-items: center; scroll-snap-align: start; }
.nbt-rv .nbt-stars { margin-bottom: 14px; }
.nbt-rv__txt { font-size: 15px; line-height: 1.65; margin: 0 0 14px; flex: 1 1 auto; }
.nbt-rv__name { font-size: 15px; margin: 0; }
.nbt-dots { display: none; justify-content: center; gap: 8px; margin-top: 16px; }
.nbt-dot { width: 8px; height: 8px; border-radius: 50%; background: #d0ccd4; }
.nbt-dot.is-on { background: #2e2a39; }

/* 2) sto smo promijenili */
.nbt-title { font-weight: 700; font-size: 30px; line-height: 1.18; color: var(--nbt-rose); text-align: center; margin: 0; }
.nbt-sub { text-align: center; color: var(--nbt-muted); font-size: 16px; margin: 10px 0 28px; }
.nbt-sec--changed .nbt-wrap { padding-top: 44px; padding-bottom: 44px; }
.nbt-callout { background: var(--nbt-beige); border-radius: 14px; padding: 26px 24px; margin-bottom: 38px; }
.nbt-callout p { font-size: 17px; line-height: 1.6; color: #332e2c; margin: 0; }
.nbt-callout p + p { margin-top: 16px; font-style: italic; font-weight: 700; color: var(--nbt-ink); }
.nbt-works { font-size: 24px; font-weight: 700; color: var(--nbt-ink); margin: 0 0 18px; }
.nbt-grid { display: grid; grid-template-columns: 1fr; gap: 16px; }
.nbt-card { border: 1px solid var(--nbt-line); border-radius: 14px; padding: 22px 20px; background: #fff; }
.nbt-num { font-size: 34px; line-height: 1; font-weight: 700; color: var(--nbt-rose); margin-bottom: 10px; }
.nbt-card h4 { font-size: 18px; font-weight: 800; color: var(--nbt-ink); margin: 0 0 8px; }
.nbt-card p { font-size: 15px; line-height: 1.55; color: var(--nbt-muted); margin: 0; }

/* 3) jutarnja rutina */
.nbt-sec--morning .nbt-wrap { padding-top: 44px; padding-bottom: 44px; }
.nbt-title--morning { line-height: 1.15; margin-bottom: 34px; }
.nbt-step { margin-bottom: 30px; }
.nbt-step:last-child { margin-bottom: 0; }
.nbt-num--big { font-size: 40px; margin-bottom: 4px; }
.nbt-step h3 { font-size: 19px; font-weight: 800; color: var(--nbt-ink); margin: 0 0 7px; }
.nbt-step p { font-size: 16px; line-height: 1.55; color: var(--nbt-muted); max-width: 540px; margin: 0; }

/* 4) usporedba */
.nbt-sec--compare .nbt-wrap { padding: 0 14px; }
.nbt-title--compare { font-size: 26px; line-height: 1.15; }
.nbt-sub--compare { font-size: 15px; margin: 8px 0 24px; }
.nbt-cmp { width: 100%; border-collapse: collapse; table-layout: fixed; margin: 0; border: 0; }
.nbt-cmp th, .nbt-cmp td { padding: 11px 3px; text-align: center; border: 0; border-bottom: 1px solid var(--nbt-line); vertical-align: middle; background: transparent; }
.nbt-cmp thead th { font-weight: 700; color: var(--nbt-ink); font-size: 12px; line-height: 1.2; }
.nbt-cmp .feat { text-align: left; width: 33%; color: var(--nbt-ink); font-weight: 500; font-size: 13px; line-height: 1.3; padding-left: 2px; }
.nbt-cmp .check { color: var(--nbt-rose); font-weight: 800; font-size: 16px; }
.nbt-cmp .cross { color: var(--nbt-x); font-weight: 700; font-size: 14px; }
.nbt-cmp .win { background: var(--nbt-beige); }
.nbt-cmp thead .win { color: var(--nbt-rose); border-top: 3px solid var(--nbt-rose); }
.nbt-cmp .score td { font-weight: 800; border-bottom: none; padding-top: 14px; font-size: 13px; }
.nbt-cmp .score .win { color: var(--nbt-rose); }
.nbt-caption { text-align: center; font-style: italic; color: var(--nbt-muted); font-size: 15px; margin: 22px auto 0; max-width: 420px; }

@media (min-width: 680px) {
  .nbt-title { font-size: 38px; }
  .nbt-title--morning { font-size: 34px; }
  .nbt-grid { grid-template-columns: 1fr 1fr; gap: 20px; }
  .nbt-sec--compare .nbt-wrap { padding: 44px 16px; }
  .nbt-title--compare { font-size: 34px; }
  .nbt-sub--compare { font-size: 16px; }
  .nbt-cmp th, .nbt-cmp td { padding: 13px 8px; }
  .nbt-cmp thead th { font-size: 14px; }
  .nbt-cmp .feat { font-size: 15px; }
  .nbt-cmp .check { font-size: 18px; }
  .nbt-cmp .cross { font-size: 16px; }
  .nbt-cmp .score td { font-size: 15px; }
}
@media (min-width: 750px) {
  .nbt-sec { padding: 40px 0 52px; }
  .nbt-sec--reviews { padding: 36px 0; }
  .nbt-score { font-size: 20px; }
}
@media (max-width: 749px) {
  .nbt-track { display: flex; gap: 15px; }
  .nbt-rv { flex: 0 0 100%; }
  .nbt-dots { display: flex; }
  .nbt-sec--changed .nbt-wrap, .nbt-sec--morning .nbt-wrap { padding-top: 14px; padding-bottom: 14px; }
}

/* kratek opis izdelka: sive vrstice z ikono kljukice kot na originalu (REST pobrise inline slog) */
.woocommerce-product-details__short-description ul.nbt-points,
.woocommerce div.product .woocommerce-product-details__short-description ul.nbt-points {
  list-style: none !important; margin: 14px 0 !important; padding-left: 0 !important; }
.woocommerce-product-details__short-description ul.nbt-points li {
  list-style: none !important; text-indent: 0 !important; display: flex !important; align-items: center !important; gap: 12px;
  background: #f3f3f3; border-radius: 6px; padding: 7px 10px !important; margin: 0 0 10px !important;
  font-size: 15px !important; line-height: 1.4 !important; color: #121212; }
.woocommerce-product-details__short-description ul.nbt-points li::marker { content: "" !important; }
.woocommerce-product-details__short-description ul.nbt-points li::before { content: none !important; }
.woocommerce-product-details__short-description .nbt-tick {
  flex: 0 0 22px; width: 22px; height: 22px; display: inline-block;
  background: url('<?php echo esc_url( $nbt_img . 'bt-ikona-provjera.webp' ); ?>') center / contain no-repeat; }
</style>
