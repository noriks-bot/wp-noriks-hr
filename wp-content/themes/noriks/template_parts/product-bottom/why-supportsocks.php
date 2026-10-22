<?php
/**
 * product-bottom: NORIKS SupportSocks — potporne carape 12–15 mmHg (orto-supportsocks).
 * Original: diasocks.no/products/stottestromper — vsebina 1:1 z originalom (iste sekcije, isti vrstni red),
 * oblika po NORIKS stilu (predloga why-hands.php: slika/video ob besedilu, strani se izmenjujeta).
 *   1) Potporne carape koje se lako oblace ... — naslov + 3 vrstice video | besedilo (svetlo siva)
 *   2) Zato su NORIKS bolje od obicnih potpornih carapa — vrstica 6 ikon (temno modra)
 *   3) Mekani rub / Suha stopala / Vrh bez savova — 3 vrstice video | besedilo (bela)
 *   4) 1 000 000+ prodanih pari — 6 mnenj v preprosti mrezi (svetlo siva)
 *   5) Recenzije kupaca (Loox na originalu: ocena 4,3 / 5, 40 mnenj, 7 fotografij kupcev)
 * FAQ originala (med 4 in 5) je v reviews.php ($supportsocks_faq), kratka mnenja v auto_reviews/HR_supportsocks.php,
 * dolg opis v meta.php, velikosti v size-chart-supportsocks.php (noriks_supportsocks_sizes()).
 * Brez dodatnih pasic, znack zaupanja in drsnikov (NORIKS stil); pogoji: 30 dana za povrat, besplatna dostava iznad 70 €.
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
$nss_video = function( $file, $label ) use ( $nss, $nss_path ) {
  if ( ! file_exists( $nss_path . $file . '.mp4' ) ) { return ''; }
  $poster = file_exists( $nss_path . $file . '-poster.webp' ) ? ' poster="' . esc_url( $nss . $file . '-poster.webp' ) . '"' : '';
  return '<video class="nss-video__media" loop muted playsinline preload="none"' . $poster . ' aria-label="' . esc_attr( $label ) . '" data-src="' . esc_url( $nss . $file . '.mp4' ) . '"></video>'
    . '<button class="nss-play" type="button" aria-label="' . esc_attr( 'Pokreni video: ' . $label ) . '"><span aria-hidden="true"></span></button>';
};

/* video | besedilo — 1) tri vrstice pod naslovom, 3) tri vrstice; besedila z originala
 * (kartice videov + "Produktinformasjon" originala za zakljucno vrstico).
 * [ video, kicker, naslov, poudarek, odstavek, zakljucna vrstica ] */
$nss_rows_1 = array(
  array( 'ss-video-1', 'Lako oblačenje', 'Lako se oblače', 'i skidaju', 'Mekani, elastični materijal čini da se potporne čarape NORIKS SupportSocks lako oblače i skidaju.', 'Ne morate se mučiti s njima.' ),
  array( 'ss-video-2', 'Kompresija', '12–15 mmHg', 'stupnjevana kompresija', 'Pritisak je najjači oko gležnja i smanjuje se prema listu. To pomaže cirkulaciji krvi i smanjuje rizik od oticanja.', 'Može ublažiti umor i oticanje nogu.' ),
  array( 'ss-video-3', 'Udobnost', 'Udobne', 'cijeli dan', 'NORIKS SupportSocks pružaju potporu, a ne stežu previše. Ugodno ih je nositi od jutra do večeri.', 'Savršene za svakodnevno nošenje, posao, putovanja i još mnogo toga.' ),
);
$nss_rows_3 = array(
  array( 'ss-video-4', 'Mekani rub', 'Mekani rub', 'koji se ne usijeca', 'Rub ostaje na mjestu, a ne usijeca se. Kad skinete čarape, na nogama nema crvenih tragova.', 'Ne ostavlja tragove na koži.' ),
  array( 'ss-video-5', 'Prozračan materijal', 'Pomažu da stopala', 'ostanu suha', 'Mekana mješavina s bambusom odvodi vlagu i održava stopala suhima cijeli dan.', 'Materijal: 60 % poliester, 18 % bambus, 15 % lycra, 7 % pamuk.' ),
  array( 'ss-video-6', 'Vrh bez šavova', 'Vrh bez šavova', 'za dodatnu udobnost', 'Nema šava kod prstiju koji bi pritiskao ili žuljao.', 'Ne žulja.' ),
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
/* 4) mnenja — 1:1 z originala (na originalu karusel, tu preprosta mreza) */
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
  array( 'Lisbeth S.', '19.10.2026.', 'Dobre!', 'ss-rv-3-hr.webp' ),
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

/* ena vrstica video | besedilo; $rev = video desno */
$nss_row = function( $r, $rev ) use ( $nss_video ) {
  $media = '<div class="nss-media"><div class="nss-video">' . $nss_video( $r[0], $r[2] . ' ' . $r[3] ) . '</div></div>';
  $copy  = '<div class="nss-copy">'
    . '<p class="nss-kicker">' . esc_html( $r[1] ) . '</p>'
    . '<h3 class="nss-h2">' . esc_html( $r[2] ) . ' <em>' . esc_html( $r[3] ) . '</em></h3>'
    . '<p>' . esc_html( $r[4] ) . '</p>'
    . '<p class="nss-big">' . esc_html( $r[5] ) . '</p>'
    . '</div>';
  return '<div class="nss-row2' . ( $rev ? ' nss-row2--rev' : '' ) . '">' . ( $rev ? $copy . $media : $media . $copy ) . '</div>';
};
?>

<div class="nss">

<!-- 1) Potporne carape koje se lako oblace — naslov + 3 vrstice video | besedilo (video levo, desno, levo) -->
<section class="nss-sec nss-tint" aria-labelledby="nss-primary-h">
  <div class="nss-wrap">
    <p class="nss-kicker nss-kicker--c">NORIKS SupportSocks</p>
    <h2 id="nss-primary-h" class="nss-h2 nss-h2--c">Potporne čarape koje se lako oblače <em>i udobne su cijeli dan</em></h2>
    <div class="nss-rows">
      <?php foreach ( $nss_rows_1 as $i => $r ) { echo $nss_row( $r, (bool) ( $i % 2 ) ); } ?>
    </div>
  </div>
</section>

<!-- 2) Zato su NORIKS bolje — ikone -->
<section class="nss-sec nss-icons" aria-labelledby="nss-icons-h">
  <div class="nss-wrap">
    <h2 id="nss-icons-h" class="nss-h2 nss-h2--c">Zato su NORIKS SupportSocks <em>bolje od običnih potpornih čarapa</em></h2>
    <div class="nss-icons__grid">
      <?php foreach ( $nss_icons as $ic ) : ?>
      <div class="nss-icons__item"><?php echo $nss_img( $ic[0], '' ); ?><strong><?php echo esc_html( $ic[1] ); ?></strong></div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- 3) Mekani rub / suha stopala / vrh bez savova — video desno, levo, desno -->
<section class="nss-sec" aria-label="Još prednosti NORIKS SupportSocks">
  <div class="nss-wrap">
    <div class="nss-rows">
      <?php foreach ( $nss_rows_3 as $i => $r ) { echo $nss_row( $r, ! ( $i % 2 ) ); } ?>
    </div>
  </div>
</section>

<!-- 4) 1 000 000+ prodanih pari — preprosta mreza mnenj -->
<section class="nss-sec nss-tint" aria-labelledby="nss-quotes-h">
  <div class="nss-wrap">
    <p class="nss-kicker nss-kicker--c">Recenzije</p>
    <h2 id="nss-quotes-h" class="nss-h2 nss-h2--c">1 000 000+ prodanih pari – <em>evo što kažu kupci</em></h2>
    <div class="nss-quotes">
      <?php foreach ( $nss_quotes as $q ) : ?>
      <article class="nss-qcard">
        <div class="nss-qcard__stars" aria-label="5 od 5 zvjezdica">★★★★★</div>
        <blockquote>„<?php echo esc_html( $q[1] ); ?>"</blockquote>
        <footer><cite><?php echo esc_html( $q[0] ); ?></cite> <span class="nss-qcard__ver">✓ Provjereni kupac</span></footer>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- 5) Recenzije kupaca -->
<section class="nss-sec nss-rv-sec" aria-labelledby="nss-rv-h">
  <div class="nss-wrap">
    <h2 id="nss-rv-h" class="nss-h2 nss-h2--c">Recenzije kupaca</h2>
    <p class="nss-rv-sum"><span class="nss-rv-sum__stars" aria-hidden="true">★★★★★</span> Ukupna ocjena: <strong>4,8 / 5</strong> na temelju 1.081 recenzije</p>
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
  /* videi z originala: brez zvoka, v zanki; nalozijo se sele, ko so v vidnem polju */
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
        if (!v || !b) return;
        if (e.isIntersecting && e.intersectionRatio >= .35) { play(v, b); } else if (!v.paused) { v.pause(); }
      });
    }, { threshold: [0, .35, .75] });
    wraps.forEach(function(w){ io.observe(w); });
  } else { wraps.forEach(function(w){ load(w.querySelector('video')); }); }

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
.nss { --nss-ink: #1c2a33; --nss-text: #4f5b62; --nss-navy: #002e49; --nss-accent: #1f6f9a; --nss-line: #dce2e5; --nss-tint: #f3f6f7;
  font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Arial, sans-serif; color: var(--nss-ink); }
.nss *, .nss *::before, .nss *::after { box-sizing: border-box; }
.nss img, .nss video { display: block; max-width: 100%; height: auto; }
.nss-sec { padding: 60px 0; background: #fff; }
.nss-tint { background: var(--nss-tint); }
.nss-wrap { width: 100%; max-width: 1240px; margin: 0 auto; padding: 0 24px; }

/* naslovi v slogu Hands: oznaka + naslov z lezecim poudarkom */
.nss-kicker { font-size: 12.5px; font-weight: 800; letter-spacing: .14em; text-transform: uppercase; color: var(--nss-accent); margin: 0 0 10px; }
.nss-kicker--c { text-align: center; }
.nss .nss-h2 { font-family: inherit; text-transform: none; font-size: clamp(25px, 3.1vw, 36px); font-weight: 800; line-height: 1.18; letter-spacing: -.01em; margin: 0 0 16px; color: var(--nss-ink); }
.nss .nss-h2--c { text-align: center; max-width: 900px; margin-left: auto; margin-right: auto; margin-bottom: 36px; }
.nss-h2 em { font-style: italic; font-weight: 800; color: var(--nss-accent); }

/* video | besedilo */
.nss-rows { display: flex; flex-direction: column; gap: 64px; }
.nss-row2 { display: grid; grid-template-columns: 1fr 1fr; gap: 56px; align-items: center; }
.nss-media { min-width: 0; }
.nss-copy { min-width: 0; }
.nss-copy p { font-size: 16px; line-height: 1.7; color: var(--nss-text); margin: 0 0 14px; }
.nss-copy p.nss-kicker { font-size: 12.5px; line-height: 1.4; color: var(--nss-accent); margin: 0 0 10px; }
.nss-copy p.nss-big { font-size: 19px; font-weight: 800; color: var(--nss-ink); }
.nss-video { position: relative; aspect-ratio: 1; overflow: hidden; background: #e8ecee;
  box-shadow: 0 2px 4px rgba(0,30,50,.05), 0 14px 40px rgba(0,30,50,.10); }
.nss-video__media { display: block; width: 100%; height: 100%; object-fit: cover; }
.nss-play { position: absolute; top: 50%; left: 50%; display: grid; place-items: center; width: 64px; height: 64px; padding: 0; border: 0; border-radius: 50%;
  background: rgba(255,255,255,.94); box-shadow: 0 8px 24px rgba(0,46,73,.22); cursor: pointer; transform: translate(-50%,-50%); }
.nss-play[hidden] { display: none; }
.nss-play span { width: 0; height: 0; margin-left: 5px; border-top: 10px solid transparent; border-bottom: 10px solid transparent; border-left: 16px solid var(--nss-navy); }

/* 2) ikone */
.nss-icons { background: var(--nss-navy); }
.nss-icons .nss-h2, .nss-icons .nss-h2 em { color: #fff; }
.nss-icons .nss-h2 em { color: #9fd0ec; }
.nss-icons__grid { display: grid; grid-template-columns: repeat(6, minmax(0, 1fr)); gap: 24px; }
.nss-icons__item { display: flex; min-width: 0; flex-direction: column; align-items: center; text-align: center; }
.nss-icons__item img { width: 64px; height: 64px; margin-bottom: 14px; object-fit: contain; }
.nss-icons__item strong { max-width: 18ch; color: #fff; font-size: 16px; font-weight: 700; line-height: 1.4; }

/* 4) mnenja — preprosta mreza */
.nss-quotes { display: grid; grid-template-columns: repeat(3, minmax(0, 1fr)); gap: 18px; }
.nss-qcard { display: flex; flex-direction: column; padding: 24px 22px; background: #fff; border: 1px solid var(--nss-line); }
.nss-qcard__stars { margin-bottom: 10px; color: #e5a900; font-size: 17px; letter-spacing: .06em; line-height: 1; }
.nss-qcard blockquote { flex: 1; margin: 0 0 16px; padding: 0; border: 0; color: var(--nss-ink); font-size: 17px; font-weight: 700; font-style: normal; line-height: 1.45; quotes: none; }
.nss-qcard blockquote::before, .nss-qcard blockquote::after { content: none; }
.nss-qcard footer { display: flex; flex-wrap: wrap; align-items: center; justify-content: space-between; gap: 6px 14px; }
.nss-qcard cite { color: var(--nss-ink); font-size: 14.5px; font-style: normal; font-weight: 800; }
.nss-qcard__ver { color: #17845f; font-size: 13px; font-weight: 600; }

/* 5) Recenzije kupaca */
.nss-rv-sec .nss-wrap { max-width: 1080px; }
.nss-rv-sec .nss-h2--c { margin-bottom: 8px; }
.nss-rv-sum { text-align: center; margin: 0 0 30px; color: var(--nss-text); font-size: 15px; }
.nss-rv-sum__stars { color: #e5a900; letter-spacing: .06em; margin-right: 6px; }
.nss-rv-grid { columns: 3 280px; column-gap: 18px; }
.nss-rv { break-inside: avoid; margin: 0 0 18px; border: 1px solid #e6e9eb; background: #fff; overflow: hidden; }
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
.nss-rv-more { border: 1px solid var(--nss-navy); background: #fff; color: var(--nss-navy); padding: 12px 26px; font-size: 15px; font-weight: 600; cursor: pointer; }
.nss-rv-more:hover { background: #e9f0f3; }

/* kratek opis v nakupni skatli: prednosti iz "Produktinformasjon" originala z zelenimi kljukicami */
.woocommerce-product-details__short-description ul.nss-benefits { list-style: none !important; padding: 0 !important; margin: 10px 0 14px !important; }
.woocommerce-product-details__short-description ul.nss-benefits li { list-style: none !important; display: block !important; position: relative !important;
  padding-left: 31px !important; margin: 0 0 7px !important; text-indent: 0 !important; line-height: 1.45 !important; font-size: 15.5px !important; }
.woocommerce-product-details__short-description ul.nss-benefits li::marker { content: "" !important; }
.woocommerce-product-details__short-description ul.nss-benefits li::before { content: none !important; }
.woocommerce-product-details__short-description .nss-tick { position: absolute !important; left: 0 !important; top: 1px !important;
  width: 21px; height: 21px; border-radius: 50%; background: #17845f !important; color: #fff !important;
  font-size: 12px !important; font-weight: 800 !important; line-height: 21px !important; text-align: center !important; display: inline-block !important; }

/* galerija: najvec 2 vrsti slicic (5 na vrsto) — ostale slike so dosegljive z drsenjem glavne slike */
.product_cat-orto-supportsocks .flex-control-thumbs li:nth-child(n+11) { display: none !important; }

@media (max-width: 980px) {
  .nss-row2 { grid-template-columns: 1fr; gap: 28px; }
  .nss-row2--rev .nss-media { order: -1; }
  .nss-rows { gap: 48px; }
  .nss-icons__grid { grid-template-columns: repeat(3, minmax(0, 1fr)); gap: 32px 20px; }
  .nss-quotes { grid-template-columns: repeat(2, minmax(0, 1fr)); }
}
@media (max-width: 560px) {
  .nss-sec { padding: 42px 0; }
  .nss-wrap { padding: 0 16px; }
  .nss-icons__grid { grid-template-columns: repeat(2, minmax(0, 1fr)); }
  .nss-quotes { grid-template-columns: 1fr; }
  .nss-rv-grid { columns: 2 150px; column-gap: 12px; }
  .nss-rv { margin-bottom: 12px; }
}
</style>
