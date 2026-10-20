<?php
/**
 * product-bottom: NORIKS SupportSocks — potporne carape 12–15 mmHg (orto-supportsocks).
 * Original: diasocks.no/products/stottestromper — struktura je 1:1 z originalom
 * (isto stevilo sekcij, isti vrstni red, ista ozadja), besedila prevedena v hrvascino.
 *   1) Potporne carape koje se lako oblace ... (svetlo siva #f3f6f7, 3 video kartice)
 *   2) Zato su NORIKS bolje od obicnih potpornih carapa (temno modra #002e49, 6 ikon)
 *   3) Mekani rub / Suha stopala / Vrh bez savova (bela, 3 vrstice video + besedilo, izmenicno)
 *   4) 1 000 000+ prodanih pari — karusel 6 mnenj (svetlo siva #f4f7f8)
 *   5) Recenzije kupaca (Loox na originalu: ocena 4,3 / 5, 40 mnenj, 7 fotografij kupcev 1:1)
 * FAQ originala (med 4 in 5) je v reviews.php ($supportsocks_faq), kratka mnenja v auto_reviews/HR_supportsocks.php.
 * Promo pasica originala (temno modra vrstica na vrhu: "Fri frakt over 500 kr" / "Betal trygt med Vipps")
 * je na istem mestu — cisto na vrhu strani. Znacke zaupanja pod gumbom za nakup (3 ikone) so pod nakupno skatlo.
 * Glava trgovine, Trustpilot, "You may also like" in noga so izpusceni (trgovinski moduli).
 * Slike: img/supportsocks/ (logotip konkurenta odstranjen, napisi prevedeni v hrvascino).
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$nss      = get_template_directory_uri() . '/img/supportsocks/';
$nss_path = get_template_directory() . '/img/supportsocks/';
$nss_img  = function( $file, $alt, $cls = '' ) use ( $nss, $nss_path ) {
  if ( ! file_exists( $nss_path . $file ) ) { return ''; }
  $size = @getimagesize( $nss_path . $file );
  $wh   = $size ? ' width="' . (int) $size[0] . '" height="' . (int) $size[1] . '"' : '';
  return '<img src="' . esc_url( $nss . $file ) . '" alt="' . esc_attr( $alt ) . '"' . $wh . ( $cls ? ' class="' . esc_attr( $cls ) . '"' : '' ) . ' loading="lazy" decoding="async">';
};
$nss_video = function( $file, $label, $cls ) use ( $nss, $nss_path ) {
  if ( ! file_exists( $nss_path . $file . '.mp4' ) ) { return ''; }
  $poster = file_exists( $nss_path . $file . '-poster.webp' ) ? ' poster="' . esc_url( $nss . $file . '-poster.webp' ) . '"' : '';
  return '<video class="' . esc_attr( $cls ) . '" loop muted playsinline preload="none"' . $poster . ' aria-label="' . esc_attr( $label ) . '" data-src="' . esc_url( $nss . $file . '.mp4' ) . '"></video>'
    . '<button class="nss-play" type="button" aria-label="' . esc_attr( 'Pokreni video: ' . $label ) . '"><span aria-hidden="true"></span></button>';
};

/* 1) tri video kartice */
$nss_primary = array(
  array( 'ss-video-1', 'Lako se oblače i skidaju', 'Mekani, elastični materijal čini da se potporne čarape NORIKS SupportSocks lako oblače i skidaju.' ),
  array( 'ss-video-2', '12–15 mmHg stupnjevana kompresija', 'Pritisak je najjači oko gležnja i smanjuje se prema listu. To pomaže cirkulaciji krvi i smanjuje rizik od oticanja.' ),
  array( 'ss-video-3', 'Udobne cijeli dan', 'NORIKS SupportSocks pružaju potporu, a ne stežu previše. Ugodno ih je nositi od jutra do večeri.' ),
);
/* 2) sest ikon */
$nss_icons = array(
  array( 'ss-ic-1-lako-oblacenje.webp', 'Lako se oblače' ),
  array( 'ss-ic-2-kompresija.webp', '12–15 mmHg stupnjevana kompresija' ),
  array( 'ss-ic-3-udobne.webp', 'Udobne cijeli dan' ),
  array( 'ss-ic-4-meki-rub.webp', 'Mekani rub' ),
  array( 'ss-ic-5-prozracno.webp', 'Prozračan materijal' ),
  array( 'ss-ic-6-bez-savova.webp', 'Vrh bez šavova' ),
);
/* 3) tri vrstice video + besedilo */
$nss_secondary = array(
  array( 'ss-video-4', 'Bez dubokih tragova na nogama', 'Mekani rub koji se ne usijeca', 'Rub ostaje na mjestu, a ne usijeca se. Kad skinete čarape, na nogama nema crvenih tragova.' ),
  array( 'ss-video-5', 'Pomažu da stopala ostanu suha', 'Pomažu da stopala ostanu suha', 'Mekana mješavina s bambusom odvodi vlagu i održava stopala suhima cijeli dan.' ),
  array( 'ss-video-6', 'Vrh bez šavova za dodatnu udobnost', 'Vrh bez šavova za dodatnu udobnost', 'Nema šava kod prstiju koji bi pritiskao ili žuljao.' ),
);
/* 4) karusel mnenj — 1:1 z originala */
$nss_quotes = array(
  array( 'Mia M.', 'Jako udobne potporne čarape, lako se oblače, a navečer kad ih skinem nema tragova na nogama!' ),
  array( 'Jessika', 'Super udobne za nošenje cijeli dan. Kupit ću još parova.' ),
  array( 'Britt R.', 'Probala sam više vrsta potpornih čarapa. NORIKS su jedine koje ne klize prema dolje i lako se oblače.' ),
  array( 'Kira N.', 'Obožavam ih. Za nekoga tko radi smjene od 12 sati, ove čarape su pravi spas.' ),
  array( 'Christina V.', 'Kakva razlika za noge i stopala na kraju dana! Sigurno kupujem još!' ),
  array( 'Christer L.', 'Potporne čarape koje stvarno možete obući i skinuti bez pomoći, a ne stežu previše.' ),
);
/* 5) Recenzije kupaca — 40 mnenj z originala v istem vrstnem redu, fotografije kupcev 1:1 */
$nss_reviews = array(
  array( 'Sophie F.', '20.10.2026.', '👍🏽', '' ),
  array( 'Eva Sæthern A.', '20.10.2026.', 'Jako se lako navlače, a kompresija je taman. Osjetim da rade svoj posao, a da pritom nije neugodno.', '' ),
  array( 'Anne H.', '20.10.2026.', 'Ugodne za nošenje.', 'ss-rv-1.webp' ),
  array( 'Jette Z.', '20.10.2026.', 'Najbolje čarape. Postajem ovisna o njima.', 'ss-rv-2.webp' ),
  array( 'Annika B.', '19.10.2026.', 'Lako se oblače i lako se nose!', '' ),
  array( 'Marian F.', '19.10.2026.', 'Lijepe i udobne čarape koje se i relativno lako obuku.', '' ),
  array( 'Eva A.', '19.10.2026.', 'Jednostavno predivne, fantastično pristaju, ugodne na stopalu i super udobne oko nogu, ne stežu. Sigurno će biti još parova 🥰', '' ),
  array( 'Lisbeth S.', '19.10.2026.', 'Dobre!', 'ss-rv-3.webp' ),
  array( 'Lisbeth S.', '19.10.2026.', 'Dobre čarape.', '' ),
  array( 'Ann-helen W.', '19.10.2026.', 'Dobro pristaju, stvarno udobne.', 'ss-rv-4.webp' ),
  array( 'Dorte J.', '19.10.2026.', 'Divne.', '' ),
  array( 'Edvin M.', '19.10.2026.', 'Nakon otprilike 14 dana oteklina i proširene vene su se puno smirile, a stopala su mi puno toplija. Jedva čekam vidjeti kako će dalje biti.', '' ),
  array( 'Gro S.', '19.10.2026.', 'Mekane i ugodne! Dobro sjede.', '' ),
  array( 'Charlotte L.', '19.10.2026.', 'Super čarape, dobra deblja kvaliteta i taman dovoljno čvrste oko nogu ☺️', '' ),
  array( 'Wigdis Harjang N.', '19.10.2026.', 'Dobre i tople čarape.', '' ),
  array( 'Sandra H.', '19.10.2026.', 'Dobar vodič za veličine. Dobre, ugodne čarape s ugodnim pritiskom.', '' ),
  array( 'Toril J.', '19.10.2026.', 'Dobro pristaju, brza dostava 👍', '' ),
  array( 'Solveig N.', '19.10.2026.', '.', '' ),
  array( 'Sinikka K.', '19.10.2026.', 'Izvrsne čarape, taman dovoljno potpore i lako se navuku na nogu, a i tople su.', '' ),
  array( 'Annett H.', '19.10.2026.', 'Dugo čekanje na dostavu, a novac je skinut odmah. Čarape su savršene. Naručit ću još.', '' ),
  array( 'Randi Alida V.', '19.10.2026.', 'Tako se lako obuku. Dobra kvaliteta i jako ugodne za nošenje! Prezadovoljna! 👌🏼', 'ss-rv-5.webp' ),
  array( 'Marja V.', '19.10.2026.', 'Čarape su brzo stigle i kvalitetne su. Još ih nisam oprala, nadam se da će zadržati oblik. Izgledaju točno kao na slikama. Preporučujem!', '' ),
  array( 'Ruben E.', '19.10.2026.', 'Jako dobre čarape.', '' ),
  array( 'Anne-kristin M.', '19.10.2026.', 'Divne za nošenje.', '' ),
  array( 'Monica R.', '19.10.2026.', 'Jako udobne čarape! Nosim ih na poslu svaki dan, a ono neugodno trnjenje u nogama kad idem spavati je nestalo! Hvala! 🤗', '' ),
  array( 'Tove V.', '19.10.2026.', 'Pozdrav! Godinama sam se mučila s potpornim čarapama iz bolnice, morala sam ih nositi, a bile su užasne. Pa sam iz očaja naručila vaše čarape i FANTASTIČNE su. Doduše, i dalje mi treba pomagalo za navlačenje čarapa da ih obučem, ali kako su ugodne! Naručila sam ih iako sam se bojala prijevare pri kupnji preko interneta, ali s njima je sve u redu. Pa vam samo kažem hvala.', '' ),
  array( 'Karin Gjertrud W.', '19.10.2026.', 'Jako udobne čarape. 👌', '' ),
  array( 'Laila B.', '19.10.2026.', 'Toliko su udobne da danas nosim samo njih 🤩', '' ),
  array( 'Camilla S.', '19.10.2026.', 'Super usluga i brza dostava. Dobre čarape s blagom kompresijom.', '' ),
  array( 'Jennie N.', '19.10.2026.', 'Toplo preporučujem ove čarape! Iskreno, prije kupnje sam bila skeptična. Ali dugo sam tražila udobne dokoljenice bez uspjeha, pa sam odlučila dati im priliku. Sad se pitam kako ću preživjeti ljeto, jer ništa drugo neću htjeti nositi na nogama! Nevjerojatno udobne, a uz to djeluju i izdržljivo.', '' ),
  array( 'Vinni P.', '19.10.2026.', 'Divne čarape. Daju kompresiju koja mojim nogama treba. Preporučila sam ih susjedi, koja je također zadovoljna.', '' ),
  array( 'Malene B.', '19.10.2026.', 'Tako ih je ugodno nositi da sam kupila još 5. Lijepo griju po hladnom danu.', 'ss-rv-6.webp' ),
  array( 'Helle V.', '19.10.2026.', 'Pozdrav. Sad već imam skoro sve potporne čarape koje mi trebaju. Rado bih još 5 pari kad budu dostupne boje koje želim. To su jedine potporne čarape koje mogu nositi. Odlično sjede i ostaju na mjestu cijeli dan. Uz to su lijepe i nimalo ne izgledaju bolnički. Preporučujem ih svima koji nose potporne čarape, a znam da ih i nekoliko mojih poznanika sad nosi.', '' ),
  array( 'Susanne G.', '19.10.2026.', 'Fantastične čarape koje mi pomažu kroz svakodnevicu s nemirom nakon operacije i novih koljena 🦵👍', 'ss-rv-7.webp' ),
  array( 'Mona O.', '19.10.2026.', 'Potpuno fantastične, lako se obuku. I mekane su i udobne.', '' ),
  array( 'Annika W.', '19.10.2026.', 'Udobne čarape koje rade što trebaju.', '' ),
  array( 'Birgitte Kjær L.', '19.10.2026.', 'Kupila sam ih više puta i gotovo da ne nosim druge čarape. Toliko sam zadovoljna da sam naručila i prijateljicama.', '' ),
  array( 'Susanne R.', '18.10.2026.', 'Pa što da napišem… 😉 Tako ih je ugodno nositi. Tako se lako obuku. Tako dobro podupiru noge i gležnjeve. Jednostavno sam presretna s njima…. Dosad sam kupila 2 × 2 para.. Trebat će mi još dva para… mislim 😁', '' ),
  array( 'Laila A.', '18.10.2026.', 'Dobro sjede i puno su ugodnije od običnih potpornih čarapa, a jednako dobro rade svoj posao.', '' ),
  array( 'Eva B.', '18.10.2026.', 'Vrhunske su!!!', '' ),
);
$nss_rv_first = 12; // kot Loox: najprej nekaj mnenj, nato "Prikaži više"
?>

<div class="nss">

<!-- 1) Potporne carape koje se lako oblace -->
<section class="nss-sec nss-primary" aria-labelledby="nss-primary-h">
  <div class="nss-inner">
    <h2 id="nss-primary-h" class="nss-h2 nss-h2--center">Potporne čarape koje se lako oblače i udobne su cijeli dan</h2>
    <div class="nss-primary__grid">
      <?php foreach ( $nss_primary as $c ) : ?>
      <article class="nss-primary__card">
        <div class="nss-video"><?php echo $nss_video( $c[0], $c[1], 'nss-video__media' ); ?></div>
        <h3><?php echo esc_html( $c[1] ); ?></h3>
        <p><?php echo esc_html( $c[2] ); ?></p>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- 2) Zasto su NORIKS bolje -->
<section class="nss-sec nss-icons" aria-labelledby="nss-icons-h">
  <div class="nss-inner">
    <h2 id="nss-icons-h">Zato su NORIKS SupportSocks bolje od običnih potpornih čarapa</h2>
    <div class="nss-icons__grid">
      <?php foreach ( $nss_icons as $ic ) : ?>
      <div class="nss-icons__item"><?php echo $nss_img( $ic[0], '' ); ?><strong><?php echo esc_html( $ic[1] ); ?></strong></div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- 3) Mekani rub / suha stopala / vrh bez savova -->
<section class="nss-sec nss-secondary" aria-label="Još prednosti NORIKS SupportSocks">
  <div class="nss-inner nss-inner--narrow">
    <?php foreach ( $nss_secondary as $r ) : ?>
    <article class="nss-secondary__row">
      <div class="nss-video nss-secondary__video"><?php echo $nss_video( $r[0], $r[1], 'nss-video__media' ); ?></div>
      <div class="nss-secondary__copy">
        <h2><?php echo esc_html( $r[2] ); ?></h2>
        <p><?php echo esc_html( $r[3] ); ?></p>
      </div>
    </article>
    <?php endforeach; ?>
  </div>
</section>

<!-- 4) 1 000 000+ prodanih pari -->
<section class="nss-sec nss-quotes" aria-labelledby="nss-quotes-h">
  <div class="nss-inner">
    <h2 id="nss-quotes-h" class="nss-h2 nss-h2--big nss-h2--center">1 000 000+ prodanih pari – evo što kažu kupci</h2>
    <div class="nss-quotes__viewport" tabindex="0" aria-label="Recenzije kupaca">
      <div class="nss-quotes__track">
        <?php foreach ( $nss_quotes as $q ) : ?>
        <article class="nss-qcard">
          <div class="nss-qcard__stars" aria-label="5 od 5 zvjezdica">★★★★★</div>
          <blockquote>«<?php echo esc_html( $q[1] ); ?>»</blockquote>
          <footer>
            <cite><?php echo esc_html( $q[0] ); ?></cite>
            <span class="nss-qcard__ver"><svg viewBox="0 0 24 24" aria-hidden="true"><circle cx="12" cy="12" r="9"></circle><path d="m8 12 2.5 2.5L16 9"></path></svg> Provjereni kupac</span>
          </footer>
        </article>
        <?php endforeach; ?>
      </div>
    </div>
    <div class="nss-quotes__controls">
      <button type="button" data-nss-prev aria-label="Prethodna recenzija"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="m15 18-6-6 6-6"></path></svg></button>
      <button type="button" data-nss-next aria-label="Sljedeća recenzija"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="m9 18 6-6-6-6"></path></svg></button>
    </div>
  </div>
</section>

<!-- 5) Recenzije kupaca -->
<section class="nss-sec nss-rv-sec" aria-labelledby="nss-rv-h">
  <div class="nss-inner">
    <h2 id="nss-rv-h" class="nss-rv-title">Recenzije kupaca</h2>
    <p class="nss-rv-sum"><span class="nss-rv-sum__stars" aria-hidden="true">★★★★☆</span> Ukupna ocjena: <strong>4,3 / 5</strong> na temelju 39 216 recenzija</p>
    <div class="nss-rv-grid">
      <?php foreach ( $nss_reviews as $i => $r ) : ?>
      <article class="nss-rv<?php echo $i >= $nss_rv_first ? ' is-hidden' : ''; ?>">
        <?php if ( $r[3] ) : ?><div class="nss-rv__photo"><?php echo $nss_img( $r[3], 'Fotografija kupca — ' . $r[0] ); ?></div><?php endif; ?>
        <div class="nss-rv__body">
          <div class="nss-rv__head"><span class="nss-rv__name"><?php echo esc_html( $r[0] ); ?></span> <span class="nss-rv__ver">✓ Provjereni kupac</span></div>
          <div class="nss-rv__stars" aria-label="5 od 5 zvjezdica">★★★★★</div>
          <p class="nss-rv__txt"><?php echo esc_html( $r[2] ); ?></p>
          <div class="nss-rv__date"><?php echo esc_html( $r[1] ); ?></div>
        </div>
      </article>
      <?php endforeach; ?>
    </div>
    <div class="nss-rv-more-wrap"><button type="button" class="nss-rv-more">Prikaži više recenzija</button></div>
  </div>
</section>

</div>

<script>
(function(){
  /* promo pasica originala (temno modra vrstica z dvema izmenjujocima se sporociloma in puscicama) — na istem mestu: cisto na vrhu strani. */
  if (!document.querySelector('.nss-annbar')) {
    var msgs = ['Besplatna dostava za narudžbe iznad 46,99 €', 'Sigurno plaćanje'];
    var bar = document.createElement('div');
    bar.className = 'nss-annbar'; bar.setAttribute('role', 'region'); bar.setAttribute('aria-label', 'Obavijest');
    bar.innerHTML = '<button type="button" class="nss-annbar__btn" data-dir="-1" aria-label="Prethodna obavijest">&#8249;</button>'
      + '<div class="nss-annbar__msg"></div>'
      + '<button type="button" class="nss-annbar__btn" data-dir="1" aria-label="Sljedeća obavijest">&#8250;</button>';
    document.body.insertBefore(bar, document.body.firstChild);
    var box = bar.querySelector('.nss-annbar__msg'), i = 0, timer;
    function show(){ box.textContent = msgs[i]; }
    function go(d){ i = (i + d + msgs.length) % msgs.length; show(); }
    function auto(){ clearInterval(timer); timer = setInterval(function(){ go(1); }, 4000); }
    bar.querySelectorAll('.nss-annbar__btn').forEach(function(b){ b.addEventListener('click', function(){ go(parseInt(b.getAttribute('data-dir'), 10)); auto(); }); });
    show(); auto();
  }

  /* znacke zaupanja pod gumbom za nakup (kot na originalu: 3 ikone v vrsti) */
  function trust(){
    if (document.querySelector('.nss-trust')) return;
    var host = document.querySelector('.gck-benefits-box') || (document.querySelector('.single_add_to_cart_button') || {}).parentNode;
    if (!host) return;
    var t = document.createElement('div');
    t.className = 'nss-trust'; t.setAttribute('role', 'list'); t.setAttribute('aria-label', 'Sigurna kupnja');
    t.innerHTML =
      '<div class="nss-trust__i" role="listitem"><svg viewBox="0 0 24 24" fill="none" aria-hidden="true"><circle cx="12" cy="8" r="3" stroke="currentColor" stroke-width="1.7"/><path d="M6.5 20v-1.5A5.5 5.5 0 0 1 12 13a5.5 5.5 0 0 1 5.5 5.5V20" stroke="currentColor" stroke-width="1.7" stroke-linecap="round"/><path d="M17 6.5a2.5 2.5 0 0 1 0 5M19 14a4.5 4.5 0 0 1 3 4.25M7 6.5a2.5 2.5 0 0 0 0 5M5 14a4.5 4.5 0 0 0-3 4.25" stroke="currentColor" stroke-width="1.7" stroke-linecap="round"/></svg><span>Preko 500 000<br>zadovoljnih kupaca</span></div>'
      + '<div class="nss-trust__i" role="listitem"><svg viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M3 7h11v9H3V7ZM14 10h3l3 3v3h-6v-6Z" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"/><circle cx="7" cy="17" r="2" stroke="currentColor" stroke-width="1.7"/><circle cx="17" cy="17" r="2" stroke="currentColor" stroke-width="1.7"/></svg><span>Dostava u roku od<br>2–7 radnih dana</span></div>'
      + '<div class="nss-trust__i" role="listitem"><svg viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M4 8.5 12 4l8 4.5v8L12 21l-8-4.5v-8Z" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"/><path d="m4.5 8.7 7.5 4.2 7.5-4.2M12 13v8" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"/></svg><span>Besplatna dostava<br>iznad 46,99 €</span></div>';
    host.appendChild(t);
  }
  if (document.readyState === 'loading') { document.addEventListener('DOMContentLoaded', trust); } else { trust(); }

  /* videi: nalaganje in predvajanje, ko so v vidnem polju (kot na originalu: brez zvoka, v zanki, gumb za predvajanje) */
  var wraps = document.querySelectorAll('.nss .nss-video');
  function load(v){ if (v && !v.getAttribute('src') && v.dataset.src) { v.setAttribute('src', v.dataset.src); v.load(); } }
  function play(v, b){ load(v); var p = v.play(); if (p && p.catch) { p.catch(function(){ b.hidden = false; }); } }
  wraps.forEach(function(w){
    var v = w.querySelector('video'), b = w.querySelector('.nss-play');
    if (!v || !b) return;
    b.addEventListener('click', function(){ play(v, b); });
    v.addEventListener('play', function(){ b.hidden = true; });
    v.addEventListener('pause', function(){ b.hidden = false; });
  });
  if ('IntersectionObserver' in window) {
    var io = new IntersectionObserver(function(es){
      es.forEach(function(e){
        var v = e.target.querySelector('video'), b = e.target.querySelector('.nss-play');
        if (!v) return;
        if (e.isIntersecting && e.intersectionRatio >= .35) { play(v, b); } else if (!v.paused) { v.pause(); }
      });
    }, { threshold: [0, .35, .75] });
    wraps.forEach(function(w){ io.observe(w); });
  } else { wraps.forEach(function(w){ load(w.querySelector('video')); }); }

  /* karusel mnenj (ob koncu skoci na zacetek, kot na originalu) */
  var vp = document.querySelector('.nss-quotes__viewport'), prev = document.querySelector('[data-nss-prev]'), next = document.querySelector('[data-nss-next]');
  if (vp && prev && next) {
    function step(){ var c = vp.querySelector('.nss-qcard'); return c ? c.getBoundingClientRect().width + 22 : vp.clientWidth; }
    prev.addEventListener('click', function(){ if (vp.scrollLeft <= 4) { vp.scrollTo({ left: vp.scrollWidth, behavior: 'smooth' }); } else { vp.scrollBy({ left: -step(), behavior: 'smooth' }); } });
    next.addEventListener('click', function(){ var end = vp.scrollWidth - vp.clientWidth; if (vp.scrollLeft >= end - 4) { vp.scrollTo({ left: 0, behavior: 'smooth' }); } else { vp.scrollBy({ left: step(), behavior: 'smooth' }); } });
  }

  /* Recenzije kupaca: "Prikaži više" */
  var more = document.querySelector('.nss-rv-more');
  if (more) {
    more.addEventListener('click', function(){
      var hidden = document.querySelectorAll('.nss-rv.is-hidden');
      for (var k = 0; k < hidden.length && k < 12; k++) { hidden[k].classList.remove('is-hidden'); }
      if (!document.querySelector('.nss-rv.is-hidden')) { more.parentNode.style.display = 'none'; }
    });
  }
})();
</script>

<style>
.nss { --nss-ink: #303030; --nss-text: #50575b; --nss-muted: #626262; --nss-navy: #002e49; --nss-line: #dce2e5;
  font-family: 'Inter', system-ui, -apple-system, 'Segoe UI', Roboto, Arial, sans-serif; color: var(--nss-ink); overflow-x: hidden; }
.nss * , .nss *::before, .nss *::after { box-sizing: border-box; }
.nss img, .nss video { display: block; max-width: 100%; height: auto; }
.nss-sec { width: 100%; }
.nss-inner { width: min(1240px, calc(100% - 64px)); margin-inline: auto; }
.nss-inner--narrow { width: min(1100px, calc(100% - 64px)); }
.nss-h2, .nss h2 { font-family: 'Inter', system-ui, sans-serif; text-transform: none; }
.nss-h2 { margin: 0 0 26px; color: var(--nss-ink); font-size: clamp(30px, 3vw, 37px); font-weight: 700; letter-spacing: -0.03em; line-height: 1.2; text-wrap: balance; }
.nss-h2--center { text-align: center; max-width: 900px; margin-left: auto; margin-right: auto; }
.nss-h2--big { font-size: clamp(35px, 3.5vw, 46px); letter-spacing: -0.035em; line-height: 1.13; margin-bottom: 42px; }

/* video + gumb za predvajanje */
.nss-video { position: relative; aspect-ratio: 1; overflow: hidden; border-radius: 14px; background: #e8ecee; }
.nss-video__media { display: block; width: 100%; height: 100%; object-fit: cover; }
.nss-play { position: absolute; top: 50%; left: 50%; display: grid; place-items: center; width: 64px; height: 64px; padding: 0; border: 0; border-radius: 50%;
  background: rgba(255,255,255,.94); box-shadow: 0 8px 24px rgba(0,46,73,.22); cursor: pointer; transform: translate(-50%,-50%); transition: background 160ms ease, transform 160ms ease; }
.nss-play[hidden] { display: none; }
.nss-play:hover { background: #fff; transform: translate(-50%,-50%) scale(1.05); }
.nss-play span { width: 0; height: 0; margin-left: 5px; border-top: 10px solid transparent; border-bottom: 10px solid transparent; border-left: 16px solid var(--nss-navy); }

/* 1) primary */
.nss-primary { background: #f3f6f7; padding: 40px 0 48px; }
.nss-primary__grid { display: grid; grid-template-columns: repeat(3, minmax(0, 1fr)); gap: 28px; }
.nss-primary__card { min-width: 0; }
.nss-primary__card h3 { margin: 18px 0 8px; color: var(--nss-ink); font-size: 22px; font-weight: 700; letter-spacing: -0.02em; line-height: 1.25; text-transform: none; }
.nss-primary__card p { max-width: 42ch; margin: 0; color: var(--nss-text); font-size: 18px; line-height: 1.55; }

/* 2) icons */
.nss-icons { background: var(--nss-navy); color: #fff; padding: 52px 0 56px; }
.nss-icons h2 { max-width: 760px; margin: 0 auto 40px; color: #fff; font-size: clamp(30px, 3vw, 37px); font-weight: 700; letter-spacing: -0.03em; line-height: 1.2; text-align: center; text-wrap: balance; }
.nss-icons__grid { display: grid; grid-template-columns: repeat(6, minmax(0, 1fr)); gap: 24px; }
.nss-icons__item { display: flex; min-width: 0; flex-direction: column; align-items: center; text-align: center; }
.nss-icons__item img { width: 72px; height: 72px; margin-bottom: 14px; object-fit: contain; }
.nss-icons__item strong { max-width: 18ch; color: #fff; font-size: 18px; font-weight: 700; letter-spacing: -0.015em; line-height: 1.35; }

/* 3) secondary */
.nss-secondary { background: #fff; padding: 76px 0; }
.nss-secondary__row { display: grid; grid-template-columns: minmax(0, 1.08fr) minmax(0, .92fr); align-items: center; gap: clamp(48px, 6vw, 78px); }
.nss-secondary__row + .nss-secondary__row { margin-top: 72px; padding-top: 72px; border-top: 1px solid var(--nss-line); }
.nss-secondary__row:nth-child(odd) .nss-secondary__video { order: 2; }
.nss-secondary__row:nth-child(odd) .nss-secondary__copy { order: 1; }
.nss-secondary__copy { max-width: 450px; }
.nss-secondary__copy h2 { margin: 0 0 14px; color: var(--nss-ink); font-size: clamp(28px, 3vw, 36px); font-weight: 700; letter-spacing: -0.035em; line-height: 1.18; text-wrap: balance; }
.nss-secondary__copy p { margin: 0; color: var(--nss-muted); font-size: 19px; line-height: 1.6; }

/* 4) karusel mnenj */
.nss-quotes { background: #f4f7f8; padding: 76px 0 88px; }
.nss-quotes__viewport { width: 100%; overflow-x: auto; scroll-behavior: smooth; scroll-snap-type: x mandatory; scrollbar-width: none; overscroll-behavior-inline: contain; }
.nss-quotes__viewport::-webkit-scrollbar { display: none; }
.nss-quotes__track { display: flex; gap: 22px; width: max-content; min-width: 100%; padding: 1px; }
.nss-qcard { display: flex; width: calc((min(1240px, calc(100vw - 64px)) - 44px) / 3); min-height: 270px; flex: 0 0 auto; flex-direction: column; padding: 30px 28px;
  border: 1px solid var(--nss-line); border-radius: 14px; background: #fff; scroll-snap-align: start; }
.nss-qcard__stars { margin-bottom: 10px; color: #e5a900; font-size: 19px; letter-spacing: .06em; line-height: 1; }
.nss-qcard blockquote { flex: 1; margin: 0 0 18px; padding: 0; border: 0; color: var(--nss-ink); font-size: 21px; font-weight: 700; font-style: normal; letter-spacing: -0.02em; line-height: 1.4; quotes: none; }
.nss-qcard blockquote::before, .nss-qcard blockquote::after { content: none; }
.nss-qcard footer { display: flex; align-items: center; justify-content: space-between; gap: 16px; }
.nss-qcard cite { color: var(--nss-muted); font-size: 16px; font-style: normal; font-weight: 700; }
.nss-qcard__ver { display: inline-flex; align-items: center; gap: 6px; color: var(--nss-muted); font-size: 14px; font-weight: 600; white-space: nowrap; }
.nss-qcard__ver svg { width: 17px; height: 17px; fill: none; stroke: #17845f; stroke-linecap: round; stroke-linejoin: round; stroke-width: 2.2; }
.nss-quotes__controls { display: flex; justify-content: center; gap: 14px; margin-top: 28px; }
.nss-quotes__controls button { display: grid; place-items: center; width: 48px; height: 48px; padding: 0; border: 1px solid var(--nss-navy); border-radius: 14px; background: #fff; color: var(--nss-navy); cursor: pointer; }
.nss-quotes__controls button:hover { background: #e9f0f3; }
.nss-quotes__controls svg { width: 22px; height: 22px; fill: none; stroke: currentColor; stroke-linecap: round; stroke-linejoin: round; stroke-width: 2; }

/* 5) Recenzije kupaca (Loox) */
.nss-rv-sec { background: #fff; padding: 56px 0 64px; }
.nss-rv-sec .nss-inner { max-width: 1080px; }
.nss-rv-title { margin: 0 0 8px; text-align: center; font-size: 28px; font-weight: 700; color: var(--nss-ink); letter-spacing: -0.02em; }
.nss-rv-sum { text-align: center; margin: 0 0 30px; color: var(--nss-muted); font-size: 15px; }
.nss-rv-sum__stars { color: #e5a900; letter-spacing: .06em; margin-right: 6px; }
.nss-rv-grid { columns: 3 280px; column-gap: 18px; }
.nss-rv { break-inside: avoid; margin: 0 0 18px; border: 1px solid #e6e9eb; border-radius: 10px; background: #fff; overflow: hidden; box-shadow: 0 1px 3px rgba(0,0,0,.05); }
.nss-rv.is-hidden { display: none; }
.nss-rv__photo img { width: 100%; height: auto; }
.nss-rv__body { padding: 14px 16px 16px; }
.nss-rv__head { display: flex; flex-wrap: wrap; align-items: baseline; gap: 6px; margin-bottom: 4px; }
.nss-rv__name { font-weight: 700; font-size: 15px; color: var(--nss-ink); }
.nss-rv__ver { font-size: 12px; color: #17845f; font-weight: 600; }
.nss-rv__stars { color: #e5a900; font-size: 15px; letter-spacing: .05em; margin-bottom: 8px; }
.nss-rv__txt { margin: 0 0 10px; font-size: 15px; line-height: 1.5; color: var(--nss-ink); }
.nss-rv__date { font-size: 12px; color: #9aa1a5; }
.nss-rv-more-wrap { text-align: center; margin-top: 10px; }
.nss-rv-more { border: 1px solid var(--nss-navy); background: #fff; color: var(--nss-navy); border-radius: 14px; padding: 12px 26px; font-size: 15px; font-weight: 600; cursor: pointer; }
.nss-rv-more:hover { background: #e9f0f3; }

/* kratek opis v nakupni skatli: prednosti iz "Produktinformasjon" originala z zelenimi kljukicami */
.nss-benefits { list-style: none !important; padding: 0 !important; margin: 6px 0 10px !important; }
.nss-benefits li { display: flex; align-items: flex-start; gap: 8px; margin: 0 0 6px; list-style: none !important; }
.nss-tick { flex: 0 0 18px; display: inline-flex; align-items: center; justify-content: center; width: 18px; height: 18px; margin-top: 2px;
  border-radius: 50%; background: #17845f; color: #fff; font-size: 11px; font-weight: 700; line-height: 1; }

/* znacke zaupanja pod gumbom za nakup */
.nss-trust { display: grid; grid-template-columns: repeat(3, minmax(0, 1fr)); gap: 10px; width: 100%; margin: 16px 0 6px; }
.nss-trust__i { display: flex; min-width: 0; flex-direction: column; align-items: center; gap: 8px; color: #111; text-align: center; }
.nss-trust__i svg { display: block; width: 28px; height: 28px; flex-shrink: 0; }
.nss-trust__i span { font-size: 14px; font-weight: 600; line-height: 1.35; }

/* promo pasica na vrhu strani */
.nss-annbar { position: relative; z-index: 2; display: flex; align-items: center; justify-content: center; gap: 18px; background: #002e49; color: #fff;
  font-family: 'Inter', system-ui, sans-serif; font-size: 15px; font-weight: 500; min-height: 46px; padding: 0 20px; border-bottom: 1px solid #f5f5f7; }
.nss-annbar__msg { flex: 0 1 auto; min-width: 0; text-align: center; padding: 8px 6px; line-height: 1.2; }
.nss-annbar__btn { background: none; border: 0; color: #fff; font-size: 22px; line-height: 1; cursor: pointer; padding: 4px 8px; }

@media (max-width: 1020px) {
  .nss-inner { width: min(900px, calc(100% - 48px)); }
  .nss-primary__grid { gap: 22px; }
  .nss-icons__grid { grid-template-columns: repeat(3, minmax(0, 1fr)); gap: 38px 24px; }
  .nss-qcard { width: calc((min(900px, calc(100vw - 48px)) - 22px) / 2); }
}
@media (max-width: 740px) {
  .nss-inner, .nss-inner--narrow { width: calc(100% - 36px); }
  .nss-primary { padding: 30px 0 40px; }
  .nss-h2 { font-size: 30px; }
  .nss-h2--big { font-size: clamp(33px, 8.5vw, 40px); margin-bottom: 32px; }
  .nss-primary__grid { grid-template-columns: 1fr; gap: 32px; }
  .nss-icons { padding: 44px 0 48px; }
  .nss-icons h2 { margin-bottom: 34px; font-size: 30px; }
  .nss-icons__grid { grid-template-columns: repeat(2, minmax(0, 1fr)); gap: 38px 16px; }
  .nss-icons__item img { width: 64px; height: 64px; }
  .nss-icons__item strong { font-size: 16px; line-height: 1.4; }
  .nss-secondary { padding: 62px 0; }
  .nss-secondary__row { grid-template-columns: 1fr; gap: 0; }
  .nss-secondary__row + .nss-secondary__row { margin-top: 45px; padding-top: 45px; }
  .nss-secondary__row .nss-secondary__video, .nss-secondary__row:nth-child(odd) .nss-secondary__video { order: 1; }
  .nss-secondary__row .nss-secondary__copy, .nss-secondary__row:nth-child(odd) .nss-secondary__copy { order: 2; max-width: none; }
  .nss-secondary__copy h2 { margin: 18px 0 9px; font-size: 24px; letter-spacing: -0.025em; line-height: 1.25; }
  .nss-secondary__copy p { font-size: 18px; }
  .nss-quotes { padding: 58px 0 66px; }
  .nss-quotes__track { gap: 14px; }
  .nss-qcard { width: calc((100vw - 36px) * .88); min-height: 255px; padding: 26px 24px; }
  .nss-qcard footer { flex-direction: column; align-items: flex-start; gap: 7px; }
  .nss-rv-grid { columns: 2 150px; column-gap: 12px; }
  .nss-rv { margin-bottom: 12px; }
  .nss-annbar { font-size: 13px; padding: 0 8px; }
  .nss-trust { gap: 5px; }
  .nss-trust__i span { font-size: 13px; }
}
</style>
