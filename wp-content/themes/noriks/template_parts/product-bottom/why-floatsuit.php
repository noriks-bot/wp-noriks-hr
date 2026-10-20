<?php
/**
 * product-bottom: NORIKS FloatSuit — djecji kupaci kostim s ugradenim podesivim plovcima (orto-floatsuit).
 * Original: floatbuds.shop/products/floatbuds-floatsuit — struktura je 1:1 z originalom
 * (isto stevilo sekcij, isti vrstni red, ista ozadja), besedila prevedena v hrvascino.
 *   1) Naslovna slika (otroka v kostimih)
 *   2) Sigurnosna napomena — naslov (svetlo modra)          3) Sigurnosna napomena — besedilo (svetlo modra)
 *   4) Val z morskim psom                                   5) Napis "Vodena čarolija!" (original "Aqua-mazing!")
 *   6) POTIČE SAMOSTALNU IGRU! (temno modra)                7) Video + GRADI SAMOPOUZDANJE U VODI
 *   8) PRUŽA DODATNU POTPORU... (temno modra)               9) Slika + besedilo o plovcih v punom krugu
 *  10) JAČA SAMOPOUZDANJE U VODI... (temno modra)          11) Video + POTIČE VEĆU SAMOSTALNOST
 *  12) Val s kitom                                         13) ZAŠTO RODITELJI VOLE NORIKS FLOATSUIT?
 *  14) Infografika s 4 prednostmi (napisi prevedeni)       15) Seznam 4 prednosti
 *  16) 4 fotografije (na mobilnem drsnik)                  17) Val z delfinom
 *  18) Napis "Super zabava!" (original "Fun-tastic!")      19) Val s podmornico
 *  20) Recenzije kupaca (10 mnenj z originala s fotografijami kupcev, 1:1)
 * Na originalu je med 2) in 3) prazen multicolumn (nic ne izrise) — izpuscen.
 * FAQ originala (med 17 in 18) je v reviews.php ($floatsuit_faq), mnenja tudi v auto_reviews/HR_floatsuit.php.
 * Promo pasici originala ("FREE SHIPPING TODAY", "Buy 2+ FloatBuds, 15% off!") sta na istem mestu — na vrhu strani.
 * Glava trgovine, mreza drzav in noga so izpusceni (trgovinski moduli).
 * Slike: img/floatsuit/ (brez logotipa konkurenta, napisi prevedeni v hrvascino).
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$nfs      = get_template_directory_uri() . '/img/floatsuit/';
$nfs_path = get_template_directory() . '/img/floatsuit/';
$nfs_img  = function( $file, $alt, $cls = '' ) use ( $nfs, $nfs_path ) {
  if ( ! file_exists( $nfs_path . $file ) ) { return ''; }
  $size = @getimagesize( $nfs_path . $file );
  $wh   = $size ? ' width="' . (int) $size[0] . '" height="' . (int) $size[1] . '"' : '';
  return '<img src="' . esc_url( $nfs . $file ) . '" alt="' . esc_attr( $alt ) . '"' . $wh . ( $cls ? ' class="' . esc_attr( $cls ) . '"' : '' ) . ' loading="lazy">';
};
$nfs_star = '<svg viewBox="0 0 20 20" aria-hidden="true"><path fill="currentColor" d="M10 1.5l2.6 5.3 5.9.9-4.3 4.1 1 5.8L10 14.8l-5.2 2.8 1-5.8L1.5 7.7l5.9-.9z"/></svg>';

/* 15) Seznam prednosti — 1:1 z originala. */
$nfs_points = array(
  array( 'LAKO ZAKOPČAVANJE:', 'Priprema je jednostavna i bez muke — UĐI I ZAKOPČAJ' ),
  array( 'UGRAĐENI PODESIVI PLOVCI:', 'Potpora koju prilagođavate kako djetetove vještine napreduju' ),
  array( 'ZAŠTITA OD SUNCA:', 'Pomaže zaštititi nježnu kožu tijekom igre u vodi na otvorenom, uz UPF 50+ zaštitu' ),
  array( 'NESPUTANA UDOBNOST:', 'Potpuna sloboda kretanja za igru cijeli dan' ),
);

/* 16) Fotografije. */
$nfs_gallery = array(
  array( 'fs-g-1.webp', 'Detalj kostima NORIKS FloatSuit s plovcima' ),
  array( 'fs-g-2.webp', 'Djeca se igraju u bazenu u kostimima NORIKS FloatSuit' ),
  array( 'fs-g-3.webp', 'Zakopčavanje patenta na kostimu NORIKS FloatSuit' ),
  array( 'fs-g-4.webp', 'Dvije djevojčice u bazenu u kostimima NORIKS FloatSuit' ),
);

/* 20) Recenzije kupaca — 1:1 z originala (vse 5 zvezdic, fotografije kupcev ostanejo). */
$nfs_reviews = array(
  array( 'ime' => 'Karen T.',     'datum' => '20.08.2026.', 'foto' => 'fs-rv-1.webp',
    'tekst' => 'Odličan proizvod — moj unuk ga obožava, a nama je drago što je siguran.' ),
  array( 'ime' => 'Rosa M.',      'datum' => '20.08.2026.', 'foto' => 'fs-rv-2.webp',
    'tekst' => 'Fantastičan kupaći kostim za djecu.' ),
  array( 'ime' => 'Hollie S.',    'datum' => '14.08.2026.', 'foto' => 'fs-rv-3.webp',
    'tekst' => 'Obožavam ga!' ),
  array( 'ime' => 'Stephanie H.', 'datum' => '10.08.2026.', 'foto' => 'fs-rv-4.webp',
    'tekst' => 'Moja kći ima četiri godine i tek uči plivati. Ovaj kostim je NEVJEROJATAN!! Više se ne drži za mamu i tatu. Pliva posvuda i stječe samopouzdanje u vodi. Tako mi je drago što sam joj ga kupila. Da je barem ovo postojalo kad sam ja bila mala!' ),
  array( 'ime' => 'Lisa B.',      'datum' => '06.07.2026.', 'foto' => 'fs-rv-5.webp',
    'tekst' => 'Moja unuka od 16 mjeseci obožava što može plivati sa starijim sestrama — baš je slatko...' ),
  array( 'ime' => 'William C.',   'datum' => '27.09.2026.', 'foto' => 'fs-rv-6.webp',
    'tekst' => 'Samo ga kupite! Stvarno je odličan! Moj dvogodišnjak plivao je potpuno samostalno na jezeru! Toliko se zabavio i bio je tako samouvjeren! Obožavam ga!' ),
  array( 'ime' => 'Jessica K.',   'datum' => '23.09.2026.', 'foto' => 'fs-rv-7.webp',
    'tekst' => 'Super je što ih imamo za blizance kad dođu kod bake na kupanje u jacuzziju!' ),
  array( 'ime' => 'Nicole D.',    'datum' => '18.09.2026.', 'foto' => 'fs-rv-8.webp',
    'tekst' => 'Moj četverogodišnji sin obožava svoj kostim! Djeluje samouvjerenije i lakše se kreće dok vježba plivanje.' ),
  array( 'ime' => 'Mariecel G.',  'datum' => '09.09.2026.', 'foto' => 'fs-rv-9.webp',
    'tekst' => 'Naša kći obožava plivati u bazenu u njemu. Uživa što može plutati, vrtjeti se u vodi i biti samostalna. Pravi hit! Voljela bih da je materijal bolji, malo je tanak, ali cijena nije previsoka.' ),
  array( 'ime' => 'Susan H.',     'datum' => '08.09.2026.', 'foto' => 'fs-rv-10.webp',
    'tekst' => 'Obožavam ih. Moje mališane naučili su plivati!' ),
);
$nfs_hist = array( array( 5, 95, 294 ), array( 4, 4, 13 ), array( 3, 1, 2 ), array( 2, 0, 0 ), array( 1, 0, 0 ) );
?>

<div class="nfs">

<!-- 1) Naslovna slika -->
<section class="nfs-sec nfs-sec--white nfs-banner">
  <?php echo $nfs_img( 'fs-hero.webp', 'Djeca u kostimima NORIKS FloatSuit' ); ?>
</section>

<!-- 2) + 3) Sigurnosna napomena -->
<section class="nfs-sec nfs-sec--sky nfs-rt nfs-rt--tight">
  <h2 class="nfs-h">⚠️ Sigurnosna napomena ⚠️</h2>
</section>
<section class="nfs-sec nfs-sec--sky nfs-rt nfs-rt--tight">
  <p class="nfs-rt__p">NORIKS FloatSuit je pomagalo za plivanje, a NE sredstvo za spašavanje života. Nije certificiran kao sredstvo za spašavanje. Potreban je stalan nadzor odrasle osobe — nikad ne ostavljajte djecu bez nadzora u vodi ili blizu nje.</p>
</section>

<!-- 4) Val + 5) Vodena čarolija! -->
<section class="nfs-sec nfs-sec--white nfs-banner"><?php echo $nfs_img( 'fs-val-1-morski-pas.webp', '' ); ?></section>
<section class="nfs-sec nfs-sec--navy nfs-banner"><?php echo $nfs_img( 'fs-vodena-carolija-hr.webp', 'Vodena čarolija!' ); ?></section>

<!-- 6) + 7) -->
<section class="nfs-sec nfs-sec--navy nfs-rt">
  <h2 class="nfs-h">POTIČE SAMOSTALNU IGRU!</h2>
</section>
<section class="nfs-sec nfs-sec--navy nfs-vc-wrap">
  <div class="nfs-vc">
    <div class="nfs-vc__video"><video src="<?php echo esc_url( $nfs . 'fs-video-samopouzdanje.mp4' ); ?>" autoplay loop muted playsinline preload="metadata" aria-label="Dijete pliva u kostimu NORIKS FloatSuit"></video></div>
    <div class="nfs-vc__text" style="background:#136fad;">
      <h3>GRADI SAMOPOUZDANJE U VODI</h3>
      <p><strong>NORIKS FloatSuit</strong> osmišljen je da podrži prve plivačke korake jačanjem samopouzdanja u vodi i oko nje. Uz pravu ravnotežu sigurnosti i slobode djeca se mogu opustiti i zabaviti.</p>
    </div>
  </div>
</section>

<!-- 8) + 9) -->
<section class="nfs-sec nfs-sec--navy nfs-rt">
  <h2 class="nfs-h">PRUŽA DODATNU POTPORU...</h2>
</section>
<section class="nfs-sec nfs-sec--navy nfs-iwt-wrap">
  <div class="nfs-iwt">
    <div class="nfs-iwt__text"><p>Sustav plovaka u punom krugu ravnomjerno obavija trup i pomaže da dijete ostane u ravnoteži u vodi, a istodobno potiče prirodniji položaj pri plivanju.</p></div>
    <div class="nfs-iwt__media"><?php echo $nfs_img( 'fs-potpora.webp', 'Plovci NORIKS FloatSuit obavijaju trup u punom krugu' ); ?></div>
  </div>
</section>

<!-- 10) + 11) -->
<section class="nfs-sec nfs-sec--navy nfs-rt">
  <h2 class="nfs-h">JAČA SAMOPOUZDANJE U VODI...</h2>
</section>
<section class="nfs-sec nfs-sec--navy nfs-vc-wrap nfs-vc-wrap--last">
  <div class="nfs-vc">
    <div class="nfs-vc__video"><video src="<?php echo esc_url( $nfs . 'fs-video-samostalnost.mp4' ); ?>" autoplay loop muted playsinline preload="metadata" aria-label="Dječji kostimi NORIKS FloatSuit s plovcima"></video></div>
    <div class="nfs-vc__text" style="background:#73b2e1;">
      <h3>POTIČE VEĆU SAMOSTALNOST</h3>
      <p><strong>NORIKS FloatSuit</strong> osmišljen je da osnaži male plivače dok počinju sve više raditi sami. Djeci omogućuje da u vodi razvijaju vještine i vjeru u sebe, a roditeljima i dalje pruža mir.</p>
    </div>
  </div>
</section>

<!-- 12) Val + 13) naslov + 14) infografika + 15) seznam -->
<section class="nfs-sec nfs-sec--white nfs-banner"><?php echo $nfs_img( 'fs-val-2-kit.webp', '' ); ?></section>
<section class="nfs-sec nfs-sec--white nfs-rt nfs-rt--why">
  <h2 class="nfs-h nfs-h--ink">ZAŠTO RODITELJI VOLE NORIKS FLOATSUIT?</h2>
</section>
<section class="nfs-sec nfs-sec--white nfs-banner nfs-banner--info">
  <?php echo $nfs_img( 'fs-prednosti-hr.webp', 'Lako se zakopča, zaštita od sunca, ugrađeni podesivi plovci, nesputana udobnost' ); ?>
</section>
<section class="nfs-sec nfs-sec--white nfs-rt">
  <ul class="nfs-points">
    <?php foreach ( $nfs_points as $pt ) : ?>
      <li><strong><?php echo esc_html( $pt[0] ); ?></strong> <?php echo esc_html( $pt[1] ); ?></li>
    <?php endforeach; ?>
  </ul>
</section>

<!-- 16) Fotografije -->
<section class="nfs-sec nfs-sec--white nfs-photos">
  <div class="nfs-wrap">
    <div class="nfs-photos__track" data-nfs-slider="photos">
      <?php foreach ( $nfs_gallery as $g ) : ?>
        <div class="nfs-photos__item"><?php echo $nfs_img( $g[0], $g[1] ); ?></div>
      <?php endforeach; ?>
    </div>
    <div class="nfs-photos__count" aria-hidden="true"><span data-nfs-cur="photos">1</span> / <?php echo count( $nfs_gallery ); ?></div>
  </div>
</section>

<!-- 17) Val, (FAQ je v bloku teme), 18) Super zabava!, 19) Val -->
<section class="nfs-sec nfs-sec--white nfs-banner"><?php echo $nfs_img( 'fs-val-3-dupin.webp', '' ); ?></section>
<section class="nfs-sec nfs-sec--navy nfs-banner"><?php echo $nfs_img( 'fs-super-zabava-hr.webp', 'Super zabava!' ); ?></section>
<section class="nfs-sec nfs-sec--white nfs-banner"><?php echo $nfs_img( 'fs-val-4-podmornica.webp', '' ); ?></section>

<!-- 20) Recenzije kupaca -->
<section class="nfs-sec nfs-sec--white nfs-rv-sec">
  <div class="nfs-wrap nfs-wrap--rv">
    <div class="nfs-rv-head">
      <h2 class="nfs-rv-title">Recenzije kupaca</h2>
      <div class="nfs-rv-sum">
        <span class="nfs-stars" aria-label="Prosječna ocjena 4,94 od 5"><?php echo str_repeat( $nfs_star, 5 ); ?></span>
        <span class="nfs-rv-sum__txt">Na temelju 309 recenzija</span>
      </div>
      <div class="nfs-hist">
        <?php foreach ( $nfs_hist as $h ) : ?>
          <div class="nfs-hist__row">
            <span class="nfs-stars nfs-stars--sm"><?php for ( $i = 1; $i <= 5; $i++ ) { echo str_replace( '<svg ', '<svg class="' . ( $i <= $h[0] ? 'on' : 'off' ) . '" ', $nfs_star ); } ?></span>
            <span class="nfs-hist__bar"><span style="width:<?php echo (int) $h[1]; ?>%"></span></span>
            <span class="nfs-hist__pct"><?php echo (int) $h[1]; ?> %</span>
            <span class="nfs-hist__n">(<?php echo (int) $h[2]; ?>)</span>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
    <div class="nfs-rv-list">
      <?php foreach ( $nfs_reviews as $r ) : ?>
      <article class="nfs-rv">
        <div class="nfs-rv__top">
          <span class="nfs-rv__icon" aria-hidden="true"><?php echo esc_html( substr( $r['ime'], 0, 1 ) ); ?></span>
          <div class="nfs-rv__who">
            <span class="nfs-stars nfs-stars--sm" aria-label="5 od 5 zvjezdica"><?php echo str_repeat( $nfs_star, 5 ); ?></span>
            <span class="nfs-rv__name"><?php echo esc_html( $r['ime'] ); ?> <span class="nfs-rv__ver">✓ Provjereni kupac</span></span>
          </div>
          <span class="nfs-rv__date"><?php echo esc_html( $r['datum'] ); ?></span>
        </div>
        <p class="nfs-rv__txt"><?php echo esc_html( $r['tekst'] ); ?></p>
        <?php if ( $r['foto'] ) : ?><div class="nfs-rv__photo"><?php echo $nfs_img( $r['foto'], 'Fotografija kupca — ' . $r['ime'] ); ?></div><?php endif; ?>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

</div>

<script>
(function(){
  /* promo pasici originala ("FREE SHIPPING TODAY 🌊" + tekoca vrstica "• Buy 2+ FloatBuds, 15% off! •") — na istem mestu: cisto na vrhu strani. */
  if (!document.querySelector('.nfs-annbar')) {
    var wrap = document.createElement('div');
    wrap.className = 'nfs-promo';
    wrap.innerHTML = '<div class="nfs-annbar" role="region" aria-label="Obavijest">BESPLATNA DOSTAVA DANAS 🌊</div>'
      + '<div class="nfs-marquee" aria-label="Kupite 2+ NORIKS FloatSuit i uštedite 15 %"><span>• Kupite 2+ NORIKS FloatSuit i uštedite 15 %! •</span></div>';
    document.body.insertBefore(wrap, document.body.firstChild);
  }
  /* 16) fotografije: na mobilnem drsnik s stevcem "1 / 4" kot na originalu */
  var t = document.querySelector('[data-nfs-slider="photos"]'), cur = document.querySelector('[data-nfs-cur="photos"]');
  if (t && cur) {
    t.addEventListener('scroll', function(){
      var it = t.querySelector('.nfs-photos__item'); if (!it) return;
      cur.textContent = Math.min(t.children.length, Math.round(t.scrollLeft / (it.getBoundingClientRect().width + 12)) + 1);
    }, { passive: true });
  }
  /* videi: predvajanje samo, ko so v vidnem polju */
  if ('IntersectionObserver' in window) {
    document.querySelectorAll('.nfs video').forEach(function(v){
      new IntersectionObserver(function(es){ es.forEach(function(e){ if (e.isIntersecting) { var p = v.play(); if (p && p.catch) p.catch(function(){}); } else { v.pause(); } }); }, { threshold: .2 }).observe(v);
    });
  }
})();
</script>

<style>
.nfs { --nfs-navy: #002a71; --nfs-sky: #0a97d5; --nfs-ink: #0e1b4d; font-family: 'Montserrat', system-ui, -apple-system, 'Segoe UI', Roboto, Arial, sans-serif; overflow-x: hidden; }
.nfs * { box-sizing: border-box; }
.nfs img, .nfs video { display: block; max-width: 100%; height: auto; }
.nfs-sec { margin: 0; padding: 0; display: flow-root; }
.nfs-sec--white { background: #fff; color: rgba(14,27,77,.75); }
.nfs-sec--navy  { background: var(--nfs-navy); color: #fff; }
.nfs-sec--sky   { background: var(--nfs-sky); color: #fff; }
.nfs-wrap { width: 100%; max-width: 1200px; margin: 0 auto; padding: 0 20px; }
.nfs-banner img { width: 100%; }

/* naslovi (rich text) */
.nfs-rt { padding: 12px 20px; text-align: center; }
.nfs-rt--tight { padding: 12px 20px; }
.nfs-rt--why { padding-top: 40px; padding-bottom: 16px; }
.nfs-h { margin: 0 auto; max-width: 1100px; font-weight: 800; font-size: clamp(28px, 3.6vw, 40px); line-height: 1.2; letter-spacing: .02em; color: #fff; text-transform: none; }
.nfs-h--ink { color: var(--nfs-ink); }
.nfs-rt__p { margin: 0 auto; max-width: 900px; font-size: 16px; line-height: 1.7; color: #fff; }

/* video + besedilo */
.nfs-vc-wrap { padding: 6px 16px 0; }
.nfs-vc-wrap--last { padding-bottom: 39px; }
.nfs-vc { display: flex; align-items: stretch; max-width: 1100px; margin: 16px auto; border-radius: 16px; overflow: hidden; }
.nfs-vc__video { flex: 1 1 0; background: #000; }
.nfs-vc__video video { width: 100%; height: 100%; object-fit: cover; }
.nfs-vc__text { flex: 1 1 0; display: flex; flex-direction: column; justify-content: center; align-items: center; padding: 32px 24px; text-align: center; }
.nfs-vc__text h3 { font-size: 22px; font-weight: 800; color: #fff; margin: 0 0 14px; letter-spacing: 1px; }
.nfs-vc__text p { font-size: 15px; color: rgba(255,255,255,.9); line-height: 1.7; max-width: 380px; margin: 0; }

/* slika + besedilo */
.nfs-iwt-wrap { padding: 0 20px 16px; }
.nfs-iwt { display: grid; grid-template-columns: 1fr 1fr; max-width: 1200px; margin: 0 auto; }
.nfs-iwt__text { background: var(--nfs-sky); display: flex; align-items: center; justify-content: center; padding: 40px 48px; text-align: center; }
.nfs-iwt__text p { margin: 0; font-size: 17px; line-height: 1.7; color: #fff; }
.nfs-iwt__media { background: var(--nfs-sky); }
.nfs-iwt__media img { width: 100%; height: 100%; object-fit: cover; }

/* seznam prednosti */
.nfs-points { list-style: disc; display: inline-block; text-align: left; margin: 0 auto; padding: 0 0 0 22px; max-width: 900px; }
.nfs-points li { font-size: 16px; line-height: 1.7; margin: 0 0 4px; color: rgba(14,27,77,.75); }
.nfs-points strong { color: var(--nfs-ink); }

/* fotografije */
.nfs-photos { padding: 12px 0 32px; }
.nfs-photos__track { display: grid; grid-template-columns: repeat(4, 1fr); gap: 12px; }
.nfs-photos__item img { width: 100%; aspect-ratio: 1 / 1; object-fit: cover; }
.nfs-photos__count { display: none; text-align: center; margin-top: 12px; font-size: 14px; color: var(--nfs-ink); }

/* recenzije */
.nfs-rv-sec { padding: 40px 0; color: #222; }
.nfs-wrap--rv { max-width: 1200px; }
.nfs-rv-head { display: grid; grid-template-columns: 1fr auto; gap: 16px 40px; align-items: center; border-bottom: 1px solid #e3e3e3; padding-bottom: 24px; margin-bottom: 8px; }
.nfs-rv-title { grid-column: 1 / -1; margin: 0; text-align: center; font-size: 26px; font-weight: 700; color: var(--nfs-ink); }
.nfs-rv-sum { display: flex; flex-direction: column; align-items: center; gap: 6px; }
.nfs-rv-sum__txt { font-size: 14px; color: #555; }
.nfs-stars { display: inline-flex; gap: 2px; color: #0a97d5; line-height: 1; }
.nfs-stars svg { width: 20px; height: 20px; }
.nfs-stars--sm svg { width: 15px; height: 15px; }
.nfs-stars svg.off { color: #cfe3f1; }
.nfs-hist { display: flex; flex-direction: column; gap: 4px; }
.nfs-hist__row { display: flex; align-items: center; gap: 8px; font-size: 13px; color: #555; }
.nfs-hist__bar { display: block; width: 120px; height: 12px; background: #eef3f7; }
.nfs-hist__bar span { display: block; height: 100%; background: #0a97d5; }
.nfs-hist__pct { width: 34px; text-align: right; }
.nfs-rv-list { display: flex; flex-direction: column; }
.nfs-rv { padding: 20px 0; border-bottom: 1px solid #e3e3e3; }
.nfs-rv__top { display: flex; align-items: center; gap: 12px; }
.nfs-rv__icon { flex: 0 0 40px; width: 40px; height: 40px; border-radius: 50%; background: #e6f3fb; color: var(--nfs-sky); font-weight: 700; display: flex; align-items: center; justify-content: center; font-size: 17px; }
.nfs-rv__who { display: flex; flex-direction: column; gap: 4px; flex: 1 1 auto; }
.nfs-rv__name { font-size: 14px; font-weight: 700; color: var(--nfs-ink); }
.nfs-rv__ver { font-weight: 500; font-size: 12px; color: #2f9e5f; margin-left: 6px; }
.nfs-rv__date { font-size: 13px; color: #888; }
.nfs-rv__txt { margin: 12px 0 0 52px; font-size: 15px; line-height: 1.6; color: #333; }
.nfs-rv__photo { margin: 12px 0 0 52px; }
.nfs-rv__photo img { width: 110px; height: 110px; object-fit: cover; border-radius: 4px; }

@media (max-width: 749px) {
  .nfs-rt { padding: 9px 16px; }
  .nfs-rt--why { padding-top: 30px; padding-bottom: 12px; }
  .nfs-h { font-size: 30px; }
  .nfs-vc { flex-direction: column; }
  .nfs-iwt { grid-template-columns: 1fr; }
  .nfs-iwt__media { order: -1; }
  .nfs-iwt__text { padding: 28px 22px; }
  .nfs-photos__track { display: flex; overflow-x: auto; scroll-snap-type: x mandatory; scrollbar-width: none; -webkit-overflow-scrolling: touch; }
  .nfs-photos__track::-webkit-scrollbar { display: none; }
  .nfs-photos__item { flex: 0 0 calc(50% - 30px); scroll-snap-align: start; }
  .nfs-photos__count { display: block; }
  .nfs-rv-head { grid-template-columns: 1fr; justify-items: center; }
  .nfs-rv__txt, .nfs-rv__photo { margin-left: 0; }
}

/* promo pasici na vrhu strani */
.nfs-promo { position: relative; z-index: 2; font-family: 'Montserrat', system-ui, sans-serif; }
.nfs-annbar { background: #002a71; color: #fff; text-align: center; font-weight: 700; font-size: 14px; letter-spacing: .06em; padding: 9px 12px; line-height: 1.3; }
.nfs-marquee { background: #0a97d5; color: #fff; overflow: hidden; white-space: nowrap; font-size: 16px; font-weight: 700; padding: 6px 0; }
.nfs-marquee span { display: inline-block; padding-left: 100%; animation: nfs-marquee 15s linear infinite; }
@keyframes nfs-marquee { 0% { transform: translate(0, 0); } 100% { transform: translate(-100%, 0); } }
@media (prefers-reduced-motion: reduce) { .nfs-marquee span { animation: none; padding-left: 0; } .nfs-marquee { text-align: center; } }

/* kratek opis izdelka: zelene kljukice namesto pik */
.woocommerce-product-details__short-description .nfs-tick {
  display: inline-block; width: 21px; height: 21px; border-radius: 50%; background: #2f9e5f; color: #fff;
  font-size: 12px; font-weight: 800; line-height: 21px; text-align: center; margin-right: 8px; }
</style>
