<?php
/**
 * product-bottom: NORIKS KneeFix — ortopedska steznica za koljeno (orto-kneefix).
 * Sekcije i redoslijed preslikani s referentne stranice, tekst na HR,
 * slike su NORIKS kreative iz img/kneefix/.
 * Redoslijed:
 *   1. Kad svaki korak postane neugodan        (slika L / tekst D)   01_hero
 *   2. Možda nije riječ samo o trošenju        (tekst, puna širina)
 *   3. Podrška za aktivna koljena              (tekst L / slika D)   08_aktivno
 *   4. 4 funkcije. Stabilniji osjećaj.         (puna širina)         03_funkcije
 *   5. Udoban oslonac u 3 koraka               (puna širina)         04_koraki
 *   6. Više udobnosti u svakodnevici           (slika L / tekst D)   05_lifestyle
 *   7. Preporučeno za svakodnevnu potporu      (puna širina)         06_zdravnik
 *   8. Razlika se osjeti                       (puna širina)         07_vs
 *   9. Traka povjerenja + fotografije kupaca                          09–12
 * Recenzije i FAQ renderira zajednički reviews.php (ne ovdje).
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
$kf      = get_template_directory_uri() . '/img/kneefix/';
$kf_path = get_template_directory() . '/img/kneefix/';

/* Ako slika nije na serveru, prikaže se neutralni sivi placeholder. */
$kf_img = function( $file, $alt ) use ( $kf, $kf_path ) {
  if ( file_exists( $kf_path . $file ) ) {
    return '<img src="'.esc_url($kf.$file).'" alt="'.esc_attr($alt).'" loading="lazy">';
  }
  return '<div class="kfx-ph" role="img" aria-label="'.esc_attr($alt).'"><span>'.esc_html($alt).'</span></div>';
};
?>

<!-- ============ 1) Kad svaki korak postane neugodan ============ -->
<section class="kfx-sec">
  <div class="kfx-wrap kfx-row2">
    <div class="kfx-media"><?php echo $kf_img('01_hero.jpg','NORIKS KneeFix steznica za koljeno'); ?></div>
    <div class="kfx-copy">
      <h2 class="kfx-h2">Kad svaki korak postane neugodan</h2>
      <p class="kfx-lead">Na početku je to često samo blago potezanje.</p>
      <p>Onda dođu trenuci u kojima koljeno osjetite znatno jače:</p>
      <ul class="kfx-list">
        <li>Pri ustajanju</li>
        <li>Na stepenicama</li>
        <li>Nakon duljeg sjedenja</li>
        <li>Pri hodanju ili duljem stajanju</li>
      </ul>
      <p>Mnogi tada automatski počnu izbjegavati pokrete. Hodaju sporije, nesvjesno rasterećuju koljeno ili se pri svakodnevnim kretnjama osjećaju nesigurno.</p>
      <p class="kfx-strong">Problem je u tome: što se opreznije krećete, to više koljeno postaje središte vaše svakodnevice.</p>
    </div>
  </div>
</section>

<!-- ============ 2) Možda nije riječ samo o trošenju ============ -->
<section class="kfx-sec kfx-alt">
  <div class="kfx-wrap-narrow kfx-center-text">
    <h2 class="kfx-h2 kfx-center">Možda nije riječ samo o trošenju</h2>
    <p>Mnoga uobičajena objašnjenja govore samo o „istrošenosti". No bol u koljenu se često osjeća prije kao <strong>pritisak, nadraženost ili nestabilnost</strong>.</p>
    <p>Jedan od mogućih razloga je nadražena zglobna ovojnica — osjetljiva unutarnja opna koljenog zgloba. Kada se to tkivo nadraži, koljeno može osjetljivije reagirati na opterećenje. To se može očitovati kao:</p>
    <ul class="kfx-inline-list">
      <li>Osjećaj pritiska oko čašice</li>
      <li>Ukočenost nakon mirovanja</li>
      <li>Nesigurnost pri kretanju</li>
      <li>Osjetljivost pri opterećenju</li>
    </ul>
    <p>Mnoge klasične ortoze pokušavaju problem riješiti krutom stabilizacijom. No tvrde ortoze znaju biti neudobne, kliziti ili ograničavati prirodan pokret. Upravo zato je <strong>NORIKS KneeFix</strong> razvijen drukčije.</p>
  </div>
</section>

<!-- ============ 3) Podrška za aktivna koljena ============ -->
<section class="kfx-sec">
  <div class="kfx-wrap kfx-row2">
    <div class="kfx-copy">
      <h2 class="kfx-h2">Podrška za aktivna koljena</h2>
      <p><strong>NORIKS KneeFix</strong> spaja više funkcija u jednom fleksibilnom sustavu podrške za svakodnevicu. Umjesto teške ortoze dobivate:</p>
      <ul class="kfx-check">
        <li>Kompresiju koju sami podešavate</li>
        <li>Bočnu stabilizaciju</li>
        <li>Gel jastučić za rasterećenje čašice</li>
        <li>Protuklizni prianjajući rub</li>
      </ul>
      <p>Cilj nije ukočiti vaše koljeno. KneeFix je razvijen da koljeno ugodnije podupre pri svakodnevnom kretanju — u hodu, na poslu, u kupovini ili na putu.</p>
    </div>
    <div class="kfx-media"><?php echo $kf_img('08_aktivno.jpg','Ostanite aktivni — bez ograničenja u koljenima'); ?></div>
  </div>
</section>

<!-- ============ 4) 4 funkcije. Stabilniji osjećaj. ============ -->
<section class="kfx-sec kfx-alt">
  <div class="kfx-wrap">
    <h2 class="kfx-h2 kfx-center">4 funkcije. Stabilniji osjećaj.</h2>
    <p class="kfx-sub kfx-center">NORIKS KneeFix razvijen je tako da više sustava podrške djeluje istovremeno: precizni kotačić za kompresiju, gel jastučić za patelu, dvostruki bočni stabilizatori i silikonski grip protiv klizanja.</p>
    <div class="kfx-full"><?php echo $kf_img('03_funkcije.jpg','Četiri funkcije NORIKS KneeFix steznice'); ?></div>
  </div>
</section>

<!-- ============ 5) Udoban oslonac u 3 koraka ============ -->
<section class="kfx-sec">
  <div class="kfx-wrap">
    <div class="kfx-full"><?php echo $kf_img('04_koraki.jpg','Udoban oslonac u tri koraka — navucite, poravnajte, prilagodite'); ?></div>
  </div>
</section>

<!-- ============ 6) Više udobnosti u svakodnevici ============ -->
<section class="kfx-sec kfx-alt">
  <div class="kfx-wrap kfx-row2">
    <div class="kfx-media"><?php echo $kf_img('05_lifestyle.jpg','KneeFix u svakodnevici — šetnja, bicikl, trening'); ?></div>
    <div class="kfx-copy">
      <h2 class="kfx-h2">Više udobnosti u svakodnevici</h2>
      <p>Mnogi ne žele tešku sportsku ortozu. Žele jednostavno:</p>
      <ul class="kfx-check">
        <li>Sigurnije hodati</li>
        <li>Opuštenije se penjati stepenicama</li>
        <li>Dulje stajati</li>
        <li>Slobodnije se kretati</li>
      </ul>
      <p>NORIKS KneeFix razvijen je da svakodnevne pokrete učini ugodnijima — bez nepotrebnih ograničenja. Fleksibilan materijal bolje se prilagođava vašem danu i podupire koljeno ondje gdje vam je potrebno.</p>
      <a class="kfx-cta" href="#bundle-selector">Odaberi svoju veličinu →</a>
    </div>
  </div>
</section>

<!-- ============ 7) Preporučeno za svakodnevnu potporu koljena ============ -->
<section class="kfx-sec">
  <div class="kfx-wrap-narrow">
    <div class="kfx-full"><?php echo $kf_img('06_zdravnik.jpg','Preporučeno za svakodnevnu potporu koljena'); ?></div>
  </div>
</section>

<!-- ============ 8) Razlika se osjeti ============ -->
<section class="kfx-sec kfx-alt">
  <div class="kfx-wrap-narrow">
    <h2 class="kfx-h2 kfx-center">Razlika se osjeti</h2>
    <div class="kfx-full"><?php echo $kf_img('07_vs.jpg','NORIKS steznik za koljeno u odnosu na tradicionalnu ortozu'); ?></div>
    <div class="kfx-cta-wrap"><a class="kfx-cta" href="#bundle-selector">Naruči KneeFix</a></div>
  </div>
</section>

<!-- ============ 9) Traka povjerenja + fotografije kupaca ============ -->
<section class="kfx-sec kfx-trust">
  <div class="kfx-wrap-narrow">
    <div class="kfx-trustbar"><?php echo $kf_img('09_trustbar.png','Besplatna dostava, 60 dana jamstvo povrata novca, korisnička podrška'); ?></div>
  </div>
  <div class="kfx-wrap">
    <div class="kfx-photos">
      <?php foreach ( array(
        array('10_review-1.jpg','Kupac nosi NORIKS KneeFix steznicu'),
        array('11_review-3.jpg','Kupkinja nosi NORIKS KneeFix steznicu'),
        array('12_review-6.jpg','NORIKS KneeFix steznica na koljenu'),
      ) as $ph ) : ?>
        <div class="kfx-photo"><?php echo $kf_img( $ph[0], $ph[1] ); ?></div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<style>
  .kfx-sec { padding: 48px 0; }
  .kfx-alt { background: #f5f6f7; }
  .kfx-wrap { max-width: 1180px; margin: 0 auto; padding: 0 18px; }
  .kfx-wrap-narrow { max-width: 900px; margin: 0 auto; padding: 0 18px; }
  .kfx-row2 { display: grid; grid-template-columns: 1fr 1fr; gap: 48px; align-items: center; }
  .kfx-h2 { font-size: clamp(24px,3.1vw,36px); font-weight: 800; color: #141414; line-height: 1.15; margin: 0 0 16px; }
  .kfx-center { text-align: center; }
  .kfx-center-text p, .kfx-center-text ul { text-align: center; }
  .kfx-copy p, .kfx-sub, .kfx-center-text p { font-size: 16px; line-height: 1.65; color: #3a3a3a; margin: 0 0 14px; }
  .kfx-sub { max-width: 760px; margin-left: auto; margin-right: auto; }
  .kfx-lead { font-weight: 700; color: #141414; }
  .kfx-strong { font-weight: 700; color: #141414; }
  .kfx-media img, .kfx-full img { width: 100%; height: auto; display: block; border-radius: 16px; }
  .kfx-full { margin-top: 22px; }

  .kfx-ph { width: 100%; aspect-ratio: 1/1; background: #ededed; border: 1px dashed #d3d3d3; border-radius: 16px;
            display: flex; align-items: center; justify-content: center; padding: 18px; box-sizing: border-box; }
  .kfx-ph span { font-size: 13px; line-height: 1.45; color: #9a9a9a; text-align: center; }

  .kfx-list { margin: 0 0 16px; padding-left: 20px; }
  .kfx-list li { font-size: 16px; line-height: 1.6; color: #3a3a3a; margin: 0 0 6px; }
  .kfx-inline-list { list-style: none; display: flex; flex-wrap: wrap; justify-content: center; gap: 8px 10px; margin: 0 0 16px; padding: 0; }
  .kfx-inline-list li { background: #fff; border: 1px solid #e4e4e4; border-radius: 999px; padding: 8px 16px; font-size: 14px; color: #141414; }
  .kfx-check { list-style: none; margin: 0 0 16px; padding: 0; }
  .kfx-check li { position: relative; padding: 0 0 11px 30px; font-size: 15.5px; color: #141414; line-height: 1.5; }
  .kfx-check li:before { content: "✓"; position: absolute; left: 0; top: 0; width: 20px; height: 20px; background: #141414; color: #fff; border-radius: 50%; font-size: 12px; text-align: center; line-height: 20px; }

  .kfx-cta { display: inline-block; margin-top: 8px; background: #141414; color: #fff; font-weight: 700; font-size: 16px; padding: 14px 30px; border-radius: 10px; text-decoration: none; }
  .kfx-cta:hover { background: #E8450E; color: #fff; }
  .kfx-cta-wrap { text-align: center; margin-top: 26px; }

  /* 9) traka povjerenja + fotografije kupaca */
  .kfx-trust { padding-top: 34px; }
  .kfx-trustbar img { width: 100%; height: auto; display: block; border-radius: 0; }
  .kfx-photos { display: grid; grid-template-columns: repeat(3,1fr); gap: 14px; margin-top: 26px; }
  .kfx-photo img { width: 100%; height: 100%; aspect-ratio: 3/4; object-fit: cover; border-radius: 14px; display: block; }

  @media (max-width: 820px) {
    .kfx-sec { padding: 30px 0; }
    .kfx-row2 { grid-template-columns: 1fr; gap: 20px; }
    .kfx-row2 .kfx-media { order: -1; }
    .kfx-h2 { font-size: 2rem; }
    .kfx-photos { grid-template-columns: 1fr 1fr; }
  }
</style>

<script>
(function(){
  document.querySelectorAll('a.kfx-cta[href="#bundle-selector"]').forEach(function(a){
    a.addEventListener('click', function(e){ e.preventDefault(); var t=document.getElementById('bundle-selector')||document.querySelector('.single_add_to_cart_button'); if(t) t.scrollIntoView({behavior:'smooth',block:'center'}); });
  });
})();
</script>
