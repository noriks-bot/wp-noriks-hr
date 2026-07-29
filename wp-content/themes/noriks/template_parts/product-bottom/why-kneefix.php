<?php
/**
 * product-bottom: NORIKS KneeFix — ortopedska steznica za koljeno (orto-kneefix).
 * Sekcije i redoslijed preslikani s referentne stranice, tekst na HR,
 * slike su NORIKS kreative iz img/kneefix/. Svaka sekcija ima sliku s jedne
 * i tekst s druge strane (naizmjenično) — nema sekcija koje su samo slika.
 *   1. Kad svaki korak postane neugodan   slika lijevo   01_hero
 *   2. Možda nije riječ samo o trošenju   slika desno    10_review-1
 *   3. Podrška za aktivna koljena         slika desno    08_aktivno
 *   4. 4 funkcije. Stabilniji osjećaj.    slika lijevo   03_funkcije
 *   5. Udoban oslonac u 3 koraka          slika desno    04_koraki
 *   6. Više udobnosti u svakodnevici      slika lijevo   05_lifestyle
 *   7. Preporučeno za potporu koljena     slika desno    06_zdravnik
 *   8. Razlika se osjeti                  slika lijevo   07_vs
 *   9. Što kažu naši kupci                3 kartice      10/11/12 + trust bar
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
  <div class="kfx-wrap kfx-row2">
    <div class="kfx-copy">
      <h2 class="kfx-h2">Možda nije riječ samo o trošenju</h2>
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
    <div class="kfx-media"><?php echo $kf_img('10_review-1.jpg','Muškarac stoji s NORIKS KneeFix steznicom na koljenu'); ?></div>
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
  <div class="kfx-wrap kfx-row2">
    <div class="kfx-media"><?php echo $kf_img('03_funkcije.jpg','Četiri funkcije NORIKS KneeFix steznice'); ?></div>
    <div class="kfx-copy">
      <h2 class="kfx-h2">4 funkcije. Stabilniji osjećaj.</h2>
      <p>KneeFix ne radi samo jedno — više sustava podrške djeluje istovremeno:</p>
      <ul class="kfx-check">
        <li><strong>Precizni kotačić za kompresiju</strong> — prilagodljiva kompresija i siguran dosjed</li>
        <li><strong>Dvostruki bočni stabilizatori</strong> — bočna stabilnost koljena</li>
        <li><strong>Gel jastučić za patelu</strong> — rasterećenje pritiska i ublažavanje udaraca</li>
        <li><strong>Silikonski grip protiv klizanja</strong> — meka silikonska tekstura sprječava klizanje i uvijanje</li>
      </ul>
    </div>
  </div>
</section>

<!-- ============ 5) Udoban oslonac u 3 koraka ============ -->
<section class="kfx-sec">
  <div class="kfx-wrap kfx-row2">
    <div class="kfx-copy">
      <h2 class="kfx-h2">Udoban oslonac u 3 koraka</h2>
      <ol class="kfx-steps">
        <li><strong>Navucite steznik preko koljena.</strong> Povucite steznik prema gore za siguran i udoban dosjed.</li>
        <li><strong>Poravnajte gel jastučić.</strong> Postavite ga centrirano oko čašice koljena.</li>
        <li><strong>Prilagodite kompresiju.</strong> Okrenite kotačić kako biste podesili oslonac i stabilnost.</li>
      </ol>
      <p>Bez kompliciranih remena i namještanja — spremni ste u nekoliko sekundi.</p>
    </div>
    <div class="kfx-media"><?php echo $kf_img('04_koraki.jpg','Udoban oslonac u tri koraka — navucite, poravnajte, prilagodite'); ?></div>
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
  <div class="kfx-wrap kfx-row2">
    <div class="kfx-copy">
      <h2 class="kfx-h2">Preporučeno za svakodnevnu potporu koljena</h2>
      <ul class="kfx-check">
        <li>Prilagodljiva kompresijska potpora</li>
        <li>Stabilizira i štiti koljeno</li>
        <li>Udobno za svakodnevnu uporabu</li>
      </ul>
      <p>KneeFix je zamišljen kao svakodnevna potpora, a ne kao medicinski tretman. Ako imate akutnu ozljedu ili trajne tegobe, o nošenju se posavjetujte sa svojim liječnikom.</p>
    </div>
    <div class="kfx-media"><?php echo $kf_img('06_zdravnik.jpg','Preporučeno za svakodnevnu potporu koljena'); ?></div>
  </div>
</section>

<!-- ============ 8) Razlika se osjeti ============ -->
<section class="kfx-sec kfx-alt">
  <div class="kfx-wrap kfx-row2">
    <div class="kfx-media"><?php echo $kf_img('07_vs.jpg','NORIKS steznik za koljeno u odnosu na tradicionalnu ortozu'); ?></div>
    <div class="kfx-copy">
      <h2 class="kfx-h2">Razlika se osjeti</h2>
      <p>Tradicionalne ortoze problem često rješavaju tako da koljeno ukoče. KneeFix ide drugim putem — podupire pokret umjesto da ga blokira.</p>
      <ul class="kfx-check">
        <li>Prirodan hod umjesto ukočenosti pri kretanju</li>
        <li>Opušteno držanje tijela umjesto neugodnog položaja</li>
        <li>Sloboda kretanja i udobnost umjesto vidljivog opterećenja koljena</li>
      </ul>
      <a class="kfx-cta" href="#bundle-selector">Naruči KneeFix</a>
    </div>
  </div>
</section>

<!-- ============ 9) Što kažu naši kupci ============ -->
<section class="kfx-sec kfx-revs">
  <div class="kfx-wrap">
    <h2 class="kfx-h2 kfx-center">Što kažu naši kupci</h2>
    <p class="kfx-sub kfx-center"><strong>Tisuće kupaca već svakodnevno nosi NORIKS KneeFix</strong> jer je razvijen da koljeno ciljano podupre — umjesto da nepotrebno ograničava pokret ili tegobe samo kratkoročno prekrije.</p>
    <div class="kfx-rev-grid">
      <?php foreach ( array(
        array( '10_review-1.jpg', 'Konačno stabilniji hod', 'Probao sam već nekoliko steznica, ali su bile ili prekrute ili su stalno klizile. Ova sjedi osjetno ugodnije i koljenu pri hodu i na stepenicama daje puno više stabilnosti.', 'Damir P.' ),
        array( '11_review-3.jpg', 'Više sigurnosti na stepenicama', 'Stepenice su mi godinama bile mučenje jer mi se koljeno činilo nestabilnim. Otkad nosim KneeFix, osjećam se znatno sigurnije. Gotovo da ne klizi ni na duljim šetnjama.', 'Sanja M.' ),
        array( '12_review-6.jpg', 'Ugodno u svakodnevici', 'Nosim je na poslu i nisam mislila da će biti toliko udobna. Materijal je fleksibilan, kompresija se lako podesi, a ispod hlača se gotovo i ne primijeti.', 'Vesna N.' ),
      ) as $rv ) : ?>
        <article class="kfx-rev">
          <div class="kfx-rev-img"><?php echo $kf_img( $rv[0], 'Kupac nosi NORIKS KneeFix steznicu' ); ?></div>
          <div class="kfx-rev-body">
            <div class="kfx-stars" aria-label="Ocjena 5 od 5">★★★★★</div>
            <p class="kfx-rev-title"><?php echo esc_html( $rv[1] ); ?></p>
            <p class="kfx-rev-text"><?php echo esc_html( $rv[2] ); ?></p>
            <p class="kfx-rev-name"><?php echo esc_html( $rv[3] ); ?></p>
          </div>
        </article>
      <?php endforeach; ?>
    </div>
    <div class="kfx-trustbar"><?php echo $kf_img('09_trustbar.png','Besplatna dostava, 60 dana jamstvo povrata novca, korisnička podrška 24/7'); ?></div>
  </div>
</section>

<style>
  .kfx-sec { padding: 48px 0; }
  .kfx-alt { background: #f5f6f7; }
  .kfx-wrap { max-width: 1180px; margin: 0 auto; padding: 0 18px; }
  .kfx-row2 { display: grid; grid-template-columns: 1fr 1fr; gap: 48px; align-items: center; }
  .kfx-h2 { font-size: clamp(24px,3.1vw,36px); font-weight: 800; color: #141414; line-height: 1.15; margin: 0 0 16px; }
  .kfx-center { text-align: center; }
  .kfx-copy p, .kfx-sub { font-size: 16px; line-height: 1.65; color: #3a3a3a; margin: 0 0 14px; }
  .kfx-sub { max-width: 820px; margin: 0 auto 26px; }
  .kfx-lead { font-weight: 700; color: #141414; }
  .kfx-strong { font-weight: 700; color: #141414; }
  .kfx-media img { width: 100%; height: auto; display: block; border-radius: 16px; }

  .kfx-ph { width: 100%; aspect-ratio: 1/1; background: #ededed; border: 1px dashed #d3d3d3; border-radius: 16px;
            display: flex; align-items: center; justify-content: center; padding: 18px; box-sizing: border-box; }
  .kfx-ph span { font-size: 13px; line-height: 1.45; color: #9a9a9a; text-align: center; }

  .kfx-list { margin: 0 0 16px; padding-left: 20px; }
  .kfx-list li { font-size: 16px; line-height: 1.6; color: #3a3a3a; margin: 0 0 6px; }
  .kfx-inline-list { list-style: none; display: flex; flex-wrap: wrap; gap: 8px 10px; margin: 0 0 16px; padding: 0; }
  .kfx-inline-list li { background: #fff; border: 1px solid #e4e4e4; border-radius: 999px; padding: 8px 16px; font-size: 14px; color: #141414; }
  .kfx-check { list-style: none; margin: 0 0 16px; padding: 0; }
  .kfx-check li { position: relative; padding: 0 0 11px 30px; font-size: 15.5px; color: #141414; line-height: 1.5; }
  .kfx-check li:before { content: "✓"; position: absolute; left: 0; top: 0; width: 20px; height: 20px; background: #141414; color: #fff; border-radius: 50%; font-size: 12px; text-align: center; line-height: 20px; }
  .kfx-steps { list-style: none; counter-reset: kfxstep; margin: 0 0 16px; padding: 0; }
  .kfx-steps li { counter-increment: kfxstep; position: relative; padding: 0 0 14px 40px; font-size: 15.5px; line-height: 1.55; color: #3a3a3a; }
  .kfx-steps li:before { content: counter(kfxstep); position: absolute; left: 0; top: 0; width: 26px; height: 26px; background: #141414; color: #fff; border-radius: 50%; font-size: 13px; font-weight: 700; text-align: center; line-height: 26px; }

  .kfx-cta { display: inline-block; margin-top: 8px; background: #141414; color: #fff; font-weight: 700; font-size: 16px; padding: 14px 30px; border-radius: 10px; text-decoration: none; }
  .kfx-cta:hover { background: #E8450E; color: #fff; }

  /* 9) recenzije s fotografijama kupaca */
  .kfx-rev-grid { display: grid; grid-template-columns: repeat(3,1fr); gap: 22px; }
  .kfx-rev { background: #fff; border: 1px solid #e8e8e8; border-radius: 14px; overflow: hidden; }
  .kfx-rev-img img { width: 100%; height: 100%; aspect-ratio: 3/4; object-fit: cover; display: block; border-radius: 0; }
  .kfx-rev-body { padding: 16px 18px 18px; text-align: center; }
  .kfx-stars { color: #f5a623; font-size: 15px; letter-spacing: 1px; }
  .kfx-rev-title { font-weight: 700; color: #141414; font-size: 15px; margin: 8px 0 8px; }
  .kfx-rev-text { font-size: 14px; line-height: 1.6; color: #4a4a4a; margin: 0 0 12px; }
  .kfx-rev-name { font-size: 13px; font-style: italic; font-weight: 700; color: #6b6b6b; margin: 0; padding-top: 10px; border-top: 1px solid #ededed; }
  .kfx-trustbar { margin-top: 30px; }
  .kfx-trustbar img { width: 100%; max-width: 860px; height: auto; display: block; margin: 0 auto; }

  @media (max-width: 820px) {
    .kfx-sec { padding: 30px 0; }
    .kfx-row2 { grid-template-columns: 1fr; gap: 20px; }
    .kfx-row2 .kfx-media { order: -1; }
    .kfx-h2 { font-size: 2rem; }
    .kfx-rev-grid { grid-template-columns: 1fr; }
    .kfx-rev-img img { aspect-ratio: 4/3; }
  }

  /* Nema "Tablica veličina" linka na KneeFixu (ni plugin ni globalni). */
  .noriks-global-sizechart, .gck-size-link, .gck-size-link-wrap,
  #open-size-chart, #open-size-chartCustom { display: none !important; }
</style>

<script>
(function(){
  document.querySelectorAll('a.kfx-cta[href="#bundle-selector"]').forEach(function(a){
    a.addEventListener('click', function(e){ e.preventDefault(); var t=document.getElementById('bundle-selector')||document.querySelector('.single_add_to_cart_button'); if(t) t.scrollIntoView({behavior:'smooth',block:'center'}); });
  });
})();
</script>
