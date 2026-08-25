<?php
/**
 * product-bottom: NORIKS KidsNest — djecji jastuk za pravilno disanje (orto-kidsnest).
 * Kopija tryneedo.com/products/kids-pillow sekcija, HR prijevod (ublazene med. tvrdnje).
 * Redoslijed:
 *   1. Trust marquee (plava)  2. "Pocnite veceras..." (slika L / tekst D, plavi naslov)
 *   3. "Pravilna potpora..." (tekst L / slika D)  4. Statistika 94/60/98 (svijetlo-plava, 3 kartice s krugovima)
 *   5. "#1 djecji jastuk 2026" + zvjezdice + drseca foto traka
 * Plava: #2b3fb0, svijetla: #eef1fb, navy: #1b2450. Slike: img/kidsnest/
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
$kn = get_template_directory_uri() . '/img/kidsnest/';
?>

<!-- ============ 1) Trust marquee (plava traka, vrti se) ============ -->
<div class="kn-marquee" aria-hidden="true">
  <div class="kn-marquee-track">
    <?php $kn_ticker = array('PREPORUKA PEDIJATARA','OEKO-TEX® MEMORIJSKA PJENA','3-ZONSKA STRUKTURA','30 NOĆI ISPROBAVANJA','HIPOALERGENO','PERIVA NAVLAKA');
    for ( $r = 0; $r < 2; $r++ ) { foreach ( $kn_ticker as $t ) { echo '<span class="kn-tick">'.esc_html($t).'</span><span class="kn-dot">•</span>'; } } ?>
  </div>
</div>

<!-- ============ 2) Pocnite veceras — slika LIJEVO, tekst DESNO ============ -->
<section class="kn-sec">
  <div class="kn-wrap kn-row2">
    <div class="kn-media"><img src="<?php echo esc_url( $kn.'01-poravnan-hr.webp' ); ?>" alt="Savršeno poravnat — glava, vrat i kralježnica tijekom sna" loading="lazy" onerror="this.style.display='none'"></div>
    <div class="kn-copy">
      <p class="kn-eyebrow">Razvijeno sa stomatolozima za dječje dišne putove</p>
      <h2 class="kn-h2 kn-h2-blue">Počnite večeras ispravljati skrivenu štetu.</h2>
      <p>Pedijatrijski stomatolozi za dišne putove upozoravaju roditelje na isti tihi problem: djeca koja hrču i dišu na usta ne "spavaju samo lošije". Njihova čeljust, nepce i struktura lica mogu se polako razvijati u pogrešnom smjeru.</p>
      <p><strong>A prozor za ispravljanje ne ostaje otvoren zauvijek.</strong></p>
      <p>NORIKS <strong>KidsNest jastuk</strong> dizajniran je da <strong>podupire glavu, čeljust i dišne putove u pravilnom položaju tijekom sna</strong> — potičući disanje kroz nos i zdraviji razvoj lica dok je to još važno.</p>
      <p><strong>Ovo nije samo jastuk.<br>To je noćna potpora dišnim putovima u godinama koje oblikuju lice vašeg djeteta.</strong></p>
    </div>
  </div>
</section>

<!-- ============ 3) Pravilna potpora — tekst LIJEVO, slika DESNO ============ -->
<section class="kn-sec">
  <div class="kn-wrap kn-row2">
    <div class="kn-copy">
      <h2 class="kn-h2 kn-h2-blue">Pravilna potpora glave i vrata ključna je za zdrav san.</h2>
      <p>Ergonomski dječji jastuk drži <strong>glavu i vrat u prirodnom poravnanju i pomaže spriječiti naginjanje glave</strong> tijekom noći. Tako kralježnica ostaje pravilno poravnata — čak i ako se dijete puno vrti u snu.</p>
      <p><strong>Rezultat su mirniji san i bolji oporavak.</strong></p>
    </div>
    <div class="kn-media"><img src="<?php echo esc_url( $kn.'kn-hr-2.webp' ); ?>" alt="Dijete mirno spava na KidsNest jastuku" loading="lazy" onerror="this.style.display='none'"></div>
  </div>
</section>

<!-- ============ 4) Statistika — svijetlo-plava, 3 kartice s krugovima ============ -->
<section class="kn-sec kn-stats-sec">
  <div class="kn-wrap">
    <h2 class="kn-h2 kn-h2-blue kn-center">Stvoren da zaštiti lice vašeg djeteta u razvoju</h2>
    <p class="kn-sub kn-center"><strong>Spavanje s otvorenim ustima u djetinjstvu može preoblikovati lice koje raste. KidsNest drži glavu vašeg djeteta poravnatu kako bi disalo kroz nos.</strong></p>
    <div class="kn-stats">
      <?php
      $kn_stats = array(
        array('94','165.3','roditelja primijeti da dijete spava <strong>zatvorenih usta</strong> u roku od 2 tjedna'),
        array('60','105.5','razvoja lica vašeg <strong>djeteta</strong> oblikuje se do 6. godine — taj se prozor ne otvara ponovno'),
        array('98','172.3','roditelja bi preporučilo <strong>KidsNest</strong> da zaštiti osmijeh još jednog djeteta'),
      );
      foreach ( $kn_stats as $st ) : ?>
      <div class="kn-stat-card">
        <svg class="kn-ring" viewBox="0 0 64 64" aria-hidden="true">
          <circle cx="32" cy="32" r="28" fill="none" stroke="#dfe5f5" stroke-width="5"/>
          <circle cx="32" cy="32" r="28" fill="none" stroke="#2b3fb0" stroke-width="5" stroke-linecap="round" stroke-dasharray="<?php echo esc_attr($st[1]); ?> 175.9" transform="rotate(-90 32 32)"/>
          <text x="32" y="38" text-anchor="middle" class="kn-ring-t"><?php echo esc_html($st[0]); ?>%</text>
        </svg>
        <p><?php echo wp_kses_post($st[2]); ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ============ 5) #1 djecji jastuk + zvjezdice + drseca foto traka ============ -->
<section class="kn-sec kn-rated-sec">
  <div class="kn-wrap">
    <h2 class="kn-h2 kn-h2-blue kn-center">Ocijenjen kao dječji jastuk za spavanje #1 u 2026.</h2>
    <p class="kn-sub kn-center">Podržite njihov san — podržite godine odrastanja.</p>
    <p class="kn-stars kn-center"><span aria-hidden="true">★★★★★</span> Ocjena 4,8/5 na temelju 140+ recenzija</p>
  </div>
  <div class="kn-strip">
    <div class="kn-strip-track">
      <?php for ( $r = 0; $r < 2; $r++ ) : for ( $i = 1; $i <= 5; $i++ ) : ?>
        <img src="<?php echo esc_url( $kn.'traka/t'.$i.'.webp' ); ?>" alt="NORIKS KidsNest — djeca i roditelji" loading="lazy" onerror="this.style.display='none'">
      <?php endfor; endfor; ?>
    </div>
  </div>
</section>

<!-- ============ 6) Kvaliteta materijala — slika LIJEVO, tekst DESNO ============ -->
<section class="kn-sec">
  <div class="kn-wrap kn-row2">
    <div class="kn-media"><img src="<?php echo esc_url( $kn.'kn-hr-6.webp' ); ?>" alt="KidsNest — 3-zonska struktura i prozračna tkanina izbliza" loading="lazy" onerror="this.style.display='none'"></div>
    <div class="kn-copy">
      <h2 class="kn-h2 kn-h2-blue">Kvaliteta koja se osjeti — noć za noći.</h2>
      <p>Gusta, prozračna pletenina i pažljivo oblikovana površina nisu tu zbog izgleda — <strong>svaka zona ima svoju ulogu</strong>. Sredina nježno prihvaća glavu, rubovi podupiru vrat, a struktura zadržava oblik i nakon mjeseci svakodnevne uporabe.</p>
      <p>Navlaka se skida i pere u perilici, pjena je <strong>hipoalergena i otporna na grinje</strong> — pa jastuk ostaje svjež, čist i spreman za svaku noć. Bez udubljenja, bez splošnjavanja, bez kompromisa.</p>
      <p><strong>Jastuk koji i nakon godinu dana izgleda — i podupire — kao prvi dan.</strong></p>
    </div>
  </div>
</section>

<style>
  .kn-wrap { max-width: 1440px; margin: 0 auto; padding: 0 22px; } /* isti container kao gornji .product */
  .kn-sec { padding: 60px 0; }
  .kn-row2 { display: grid; grid-template-columns: 1fr 1fr; gap: 60px; align-items: center; }
  .kn-h2 { font-size: clamp(26px,3.2vw,40px); font-weight: 800; color: #1b2450; line-height: 1.14; margin: 0 0 16px; }
  .kn-h2-blue { color: #2b3fb0; }
  .kn-center { text-align: center; }
  .kn-eyebrow { font-size: 13px; font-weight: 800; letter-spacing: .02em; color: #1b2450; margin: 0 0 6px; }
  .kn-copy p { font-size: 15.5px; line-height: 1.65; color: #33394f; margin: 0 0 14px; }
  .kn-sub { font-size: 16px; line-height: 1.55; color: #33394f; max-width: 680px; margin: 0 auto 10px; }
  .kn-media img { width: 100%; height: auto; display: block; border-radius: 18px; box-shadow: 0 14px 40px rgba(27,36,80,.10); }

  /* 1) marquee */
  .kn-marquee { background: #2b3fb0; overflow: hidden; white-space: nowrap; margin-top: 26px; }
  @media (min-width: 861px) { .kn-marquee { margin-top: -20px; } } /* desktop: prepolovljen razmik do vsebine zgoraj */
  .kn-marquee + .kn-sec { padding-top: 26px; }
  .kn-marquee-track { display: inline-block; padding: 13px 0; animation: knScroll 28s linear infinite; }
  .kn-tick { color: #fff; font-weight: 800; font-style: italic; font-size: 15px; letter-spacing: .06em; text-transform: uppercase; }
  .kn-dot { color: #aebafe; margin: 0 22px; font-weight: 800; }
  @keyframes knScroll { from { transform: translateX(0); } to { transform: translateX(-50%); } }

  /* 4) statistika */
  .kn-stats-sec { background: #eef1fb; }
  .kn-stats { display: grid; grid-template-columns: repeat(3,1fr); gap: 24px; max-width: 1180px; margin: 30px auto 0; }
  .kn-stat-card { background: #fff; border-radius: 16px; padding: 34px 26px; text-align: center; box-shadow: 0 10px 28px rgba(27,36,80,.07); }
  .kn-ring { width: 150px; height: 150px; margin: 0 auto 18px; display: block; }
  .kn-ring-t { font-size: 15px; font-weight: 800; fill: #2b3fb0; }
  .kn-stat-card p { font-size: 15px; line-height: 1.5; color: #33394f; margin: 0; }
  .kn-stat-card p strong { color: #2b3fb0; }

  /* 5) rated + strip */
  .kn-rated-sec { background: #eef1fb; padding-bottom: 0; }
  .kn-stars { font-size: 16px; color: #1b2450; font-weight: 600; margin: 6px 0 26px; }
  .kn-stars span { color: #f5a623; letter-spacing: 2px; margin-right: 8px; }
  .kn-strip { overflow: hidden; width: 100vw; margin-left: calc(50% - 50vw); padding-bottom: 34px; }
  .kn-strip-track { display: flex; gap: 8px; width: max-content; animation: knScroll 60s linear infinite; }
  .kn-strip:hover .kn-strip-track { animation-play-state: paused; }
  .kn-strip-track img { width: 350px; aspect-ratio: 1/1; object-fit: cover; border-radius: 10px; display: block; flex: 0 0 auto; }

  @media (max-width: 860px) {
    .kn-sec { padding: 30px 0; }
    .kn-row2 { grid-template-columns: 1fr; gap: 18px; }
    .kn-row2 .kn-media { order: -1; }
    .kn-h2 { font-size: 2rem; }
    .kn-stats { grid-template-columns: 1fr; gap: 14px; margin-top: 18px; }
    .kn-ring { width: 120px; height: 120px; }
    .kn-strip-track img { width: 240px; }
  }
</style>
