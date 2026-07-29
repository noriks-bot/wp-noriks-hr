<?php
/**
 * product-bottom: NORIKS KneeFix — ortopedska steznica za koljeno (orto-kneefix).
 * Sekcije i redoslijed preslikani s referentne stranice, tekst preveden na HR.
 * Redoslijed:
 *   1. Kad svaki korak postane neugodan   (slika L / tekst D)
 *   2. Možda nije riječ samo o trošenju   (tekst L / slika D)
 *   3. Podrška za aktivna koljena         (slika L / tekst D)
 *   4. 4 funkcije. Stabilniji osjećaj.    (4 kartice)
 *   5. Više udobnosti u svakodnevici      (tekst L / slika D)
 *   6. Razlika se osjeti                  (usporedna tablica)
 * Slike: img/kneefix/ (ako datoteka ne postoji, slika se sakrije i tekst ostaje čitljiv)
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
$kf = get_template_directory_uri() . '/img/kneefix/';
$kf_img = function( $file, $alt ) use ( $kf ) {
  return '<img src="'.esc_url($kf.$file).'" alt="'.esc_attr($alt).'" loading="lazy" onerror="this.style.display=\'none\'">';
};
?>

<!-- ============ 1) Kad svaki korak postane neugodan ============ -->
<section class="kfx-sec">
  <div class="kfx-wrap kfx-row2">
    <div class="kfx-media"><?php echo $kf_img('01-stepenice.jpg','Bol u koljenu pri silasku niz stepenice'); ?></div>
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
  <div class="kfx-wrap kfx-row2">
    <div class="kfx-copy">
      <h2 class="kfx-h2">Možda nije riječ samo o trošenju</h2>
      <p>Mnoga uobičajena objašnjenja govore samo o „istrošenosti".</p>
      <p>No bol u koljenu se često osjeća prije kao <strong>pritisak, nadraženost ili nestabilnost</strong>.</p>
      <p>Jedan od mogućih razloga je nadražena zglobna ovojnica — osjetljiva unutarnja opna koljenog zgloba. Kada se to tkivo nadraži, koljeno može osjetljivije reagirati na opterećenje.</p>
      <p>To se može očitovati kao:</p>
      <ul class="kfx-list">
        <li>Osjećaj pritiska oko čašice koljena</li>
        <li>Ukočenost nakon mirovanja</li>
        <li>Nesigurnost pri kretanju</li>
        <li>Osjetljivost pri opterećenju</li>
      </ul>
      <p>Mnoge klasične ortoze pokušavaju problem riješiti krutom stabilizacijom. No tvrde ortoze znaju biti neudobne, kliziti ili ograničavati prirodan pokret. Upravo zato je <strong>NORIKS KneeFix</strong> razvijen drukčije.</p>
    </div>
    <div class="kfx-media"><?php echo $kf_img('02-koljeno.jpg','Nadražena zglobna ovojnica i osjećaj pritiska u koljenu'); ?></div>
  </div>
</section>

<!-- ============ 3) Podrška za aktivna koljena ============ -->
<section class="kfx-sec">
  <div class="kfx-wrap kfx-row2">
    <div class="kfx-media"><?php echo $kf_img('03-podrska.jpg','NORIKS KneeFix — podrška pri svakodnevnom kretanju'); ?></div>
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
  </div>
</section>

<!-- ============ 4) 4 funkcije. Stabilniji osjećaj. ============ -->
<section class="kfx-sec kfx-alt">
  <div class="kfx-wrap">
    <h2 class="kfx-h2 kfx-center">4 funkcije. Stabilniji osjećaj.</h2>
    <p class="kfx-sub kfx-center">NORIKS KneeFix razvijen je tako da više sustava podrške djeluje istovremeno:</p>
    <div class="kfx-cards">
      <?php
      $kfx_feat = array(
        array( '04-kotacic.jpg',  'Precizni kotačić za kompresiju', 'Omogućuje podršku koju sami podesite.' ),
        array( '05-gel.jpg',      'Gel jastučić za čašicu',         'Pomaže ugodnije raspodijeliti pritisak oko čašice koljena.' ),
        array( '06-stabilizatori.jpg', 'Dvostruki bočni stabilizatori', 'Podupiru koljeno pri svakodnevnim pokretima.' ),
        array( '07-silikon.jpg',  'Protuklizni silikonski rub',     'Pomaže spriječiti klizanje i uvijanje steznice.' ),
      );
      foreach ( $kfx_feat as $f ) : ?>
        <div class="kfx-card">
          <div class="kfx-card-media"><?php echo $kf_img( $f[0], $f[1] ); ?></div>
          <h3 class="kfx-card-title"><?php echo esc_html( $f[1] ); ?></h3>
          <p class="kfx-card-text"><?php echo esc_html( $f[2] ); ?></p>
        </div>
      <?php endforeach; ?>
    </div>
    <p class="kfx-sub kfx-center kfx-mt">Rezultat je stabilniji i ugodniji osjećaj nošenja u svakodnevici.</p>
  </div>
</section>

<!-- ============ 5) Više udobnosti u svakodnevici ============ -->
<section class="kfx-sec">
  <div class="kfx-wrap kfx-row2">
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
    <div class="kfx-media"><?php echo $kf_img('08-svakodnevica.jpg','KneeFix u svakodnevici — hodanje i stepenice'); ?></div>
  </div>
</section>

<!-- ============ 6) Razlika se osjeti (usporedna tablica) ============ -->
<section class="kfx-sec kfx-alt">
  <div class="kfx-wrap-narrow">
    <h2 class="kfx-h2 kfx-center">Razlika se osjeti</h2>
    <div class="kfx-cmp-scroll">
      <table class="kfx-cmp-table">
        <thead>
          <tr>
            <th></th>
            <th class="kfx-us">NORIKS KneeFix</th>
            <th>Klasična ortoza</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $kfx_rows = array(
            array( 'Podrška koljenu',            true,  true  ),
            array( 'Podesiva kompresija',        true,  false ),
            array( 'Gel jastučić za čašicu',     true,  false ),
            array( 'Bočni stabilizatori',        true,  false ),
            array( 'Protuklizni rub',            true,  false ),
            array( 'Pristaje za svakodnevicu',   true,  false ),
          );
          foreach ( $kfx_rows as $r ) : ?>
            <tr>
              <td><?php echo esc_html( $r[0] ); ?></td>
              <td class="us"><?php echo $r[1] ? '<span class="kfx-yes">✓</span>' : '<span class="kfx-no">✕</span>'; ?></td>
              <td><?php echo $r[2] ? '<span class="kfx-yes">✓</span>' : '<span class="kfx-no">✕</span>'; ?></td>
            </tr>
          <?php endforeach; ?>
          <tr>
            <td>Osjećaj pri nošenju</td>
            <td class="us kfx-mid">Fleksibilno i prilagodljivo</td>
            <td class="kfx-mid">Često kruto i glomazno</td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="kfx-cta-wrap"><a class="kfx-cta" href="#bundle-selector">Naruči KneeFix</a></div>
  </div>
</section>


<style>
  .kfx-sec { padding: 48px 0; }
  .kfx-alt { background: #f5f6f7; }
  .kfx-wrap { max-width: 1180px; margin: 0 auto; padding: 0 18px; }
  .kfx-wrap-narrow { max-width: 860px; margin: 0 auto; padding: 0 18px; }
  .kfx-row2 { display: grid; grid-template-columns: 1fr 1fr; gap: 48px; align-items: center; }
  .kfx-h2 { font-size: clamp(24px,3.1vw,36px); font-weight: 800; color: #141414; line-height: 1.15; margin: 0 0 16px; }
  .kfx-center { text-align: center; }
  .kfx-eyebrow { font-size: 12.5px; font-weight: 800; letter-spacing: .14em; color: #8a8f96; margin: 0 0 6px; }
  .kfx-copy p, .kfx-sub { font-size: 16px; line-height: 1.65; color: #3a3a3a; margin: 0 0 14px; }
  .kfx-sub { max-width: 720px; margin-left: auto; margin-right: auto; }
  .kfx-mt { margin-top: 26px; }
  .kfx-lead { font-weight: 700; color: #141414; }
  .kfx-strong { font-weight: 700; color: #141414; }
  .kfx-media img { width: 100%; height: auto; display: block; border-radius: 16px; }

  .kfx-list { margin: 0 0 16px; padding-left: 20px; }
  .kfx-list li { font-size: 16px; line-height: 1.6; color: #3a3a3a; margin: 0 0 6px; }
  .kfx-check { list-style: none; margin: 0 0 16px; padding: 0; }
  .kfx-check li { position: relative; padding: 0 0 11px 30px; font-size: 15.5px; color: #141414; line-height: 1.5; }
  .kfx-check li:before { content: "✓"; position: absolute; left: 0; top: 0; width: 20px; height: 20px; background: #141414; color: #fff; border-radius: 50%; font-size: 12px; text-align: center; line-height: 20px; }

  .kfx-cta { display: inline-block; margin-top: 8px; background: #141414; color: #fff; font-weight: 700; font-size: 16px; padding: 14px 30px; border-radius: 10px; text-decoration: none; }
  .kfx-cta:hover { background: #E8450E; color: #fff; }
  .kfx-cta-wrap { text-align: center; margin-top: 26px; }

  /* 4) kartice */
  .kfx-cards { display: grid; grid-template-columns: repeat(4,1fr); gap: 18px; margin-top: 26px; }
  .kfx-card { background: #fff; border: 1px solid #e9e9e9; border-radius: 16px; padding: 18px; text-align: center; }
  .kfx-card-media img { width: 100%; height: auto; border-radius: 12px; display: block; margin-bottom: 14px; }
  .kfx-card-title { font-size: 16px; font-weight: 800; color: #141414; margin: 0 0 8px; line-height: 1.25; }
  .kfx-card-text { font-size: 14px; line-height: 1.55; color: #555; margin: 0; }

  /* 6) tablica */
  .kfx-cmp-scroll { overflow-x: auto; border-radius: 16px; box-shadow: 0 12px 34px rgba(18,48,90,.12); border: 1px solid #edf0f4; margin-top: 20px; }
  .kfx-cmp-table { width: 100%; border-collapse: collapse; min-width: 520px; background: #fff; margin: 0 !important; }
  .kfx-cmp-table th, .kfx-cmp-table td { padding: 14px 12px; text-align: center; font-size: 14.5px; }
  .kfx-cmp-table thead th { color: #fff; background: #767676; font-weight: 700; font-size: 14px; }
  .kfx-cmp-table thead th:first-child { background: #fff; width: 44%; }
  .kfx-cmp-table thead th.kfx-us { background: #111; }
  .kfx-cmp-table tbody td:first-child { text-align: left; font-weight: 600; color: #111; padding-left: 18px; }
  .kfx-cmp-table tbody tr { border-bottom: 1px solid #eef0f4; }
  .kfx-cmp-table tbody tr:nth-child(even) { background: #fafbfc; }
  .kfx-cmp-table td.us { background: #f3f3f3; }
  .kfx-yes { color: #1a9e5f; font-size: 19px; font-weight: 700; }
  .kfx-no { color: #cdd2da; font-size: 18px; }
  .kfx-mid { font-size: 13px; color: #5b5b5b; }

  @media (max-width: 900px) {
    .kfx-cards { grid-template-columns: 1fr 1fr; }
    .kfx-rev-cards { grid-template-columns: 1fr; }
  }
  @media (max-width: 820px) {
    .kfx-sec { padding: 30px 0; }
    .kfx-row2 { grid-template-columns: 1fr; gap: 20px; }
    .kfx-row2 .kfx-media { order: -1; }
    .kfx-h2 { font-size: 2rem; }
  }
  @media (max-width: 560px) {
    .kfx-cards { grid-template-columns: 1fr; }
  }
</style>

<script>
(function(){
  document.querySelectorAll('a.kfx-cta[href="#bundle-selector"]').forEach(function(a){
    a.addEventListener('click', function(e){ e.preventDefault(); var t=document.getElementById('bundle-selector')||document.querySelector('.single_add_to_cart_button'); if(t) t.scrollIntoView({behavior:'smooth',block:'center'}); });
  });
})();
</script>
