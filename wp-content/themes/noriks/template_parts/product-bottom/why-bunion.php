<?php
/**
 * product-bottom: KOREKTOR ČUKLJEVA (bunion / halux valgus)
 *
 * Dedicated bottom-nicer for the NORIKS bunion corrector.
 * Shown via single-product-bottom-nicer.php when noriks_is_type('bunion').
 *
 * Mediji su u temi (git), relativno preko get_template_directory_uri():
 *   img/bunion-videos/section-1.mp4, section-2.mp4
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$bun_vid_dir = get_template_directory_uri() . '/img/bunion-videos/';
$bun_video_1 = $bun_vid_dir . 'section-1.mp4'; // 1) One foot away
$bun_video_2 = $bun_vid_dir . 'funkcionira.mp4'; // 2) Kako funkcionira

$bun_img_features = get_template_directory_uri() . '/img/bunion/why-2026.webp';

// Pravi rezultati — postotci
$bun_results = array(
    array( 'pct' => 91, 'text' => 'korisnika prijavilo je smanjenje boli od čukljeva već od 2. sesije' ),
    array( 'pct' => 90, 'text' => 'korisnika potpuno je uklonilo bol od čukljeva nakon samo 14 dana dosljedne uporabe (30 min/dan)' ),
    array( 'pct' => 88, 'text' => 'korisnika vidjelo je vidljiva poboljšanja u poravnanju prstiju nakon samo 30 dana dosljedne uporabe (30 min/dan)' ),
);

// Zašto odabrati nas — usporedba (isti stil kao knc-table na čarapama sa zatvaračem)
$bun_cmp = array(
    '30-dnevno jamstvo povrata novca',
    'Ublažava nelagodu',
    'Sprječava rast čuklja',
    'Poboljšava stanje čuklja s vremenom',
    'Pokretni dizajn — možete hodati s njim',
    'Izdržljiv i dugotrajan',
);

// Kako se koristi — 3 koraka (video + opis)
$bun_steps = array(
    array( 'video' => $bun_vid_dir . 'step-1.mp4', 'caption' => 'Pričvrstite NORIKS korektor na palac i stopalo' ),
    array( 'video' => $bun_vid_dir . 'step-2.mp4', 'caption' => 'Podesite intenzitet istezanja po želji' ),
    array( 'video' => $bun_vid_dir . 'step-3.mp4', 'caption' => 'Opustite se i pustite da NORIKS korektor odradi svoj posao' ),
);
?>

<!-- ============ 1) Samo ste jedan korak udaljeni… ============ -->
<section class="bun-why bun-intro">
  <div class="bun-wrap bun-row">
    <div class="bun-col bun-media">
      <video src="<?php echo esc_url( $bun_video_1 ); ?>" muted autoplay loop playsinline preload="metadata"></video>
    </div>
    <div class="bun-col bun-copy">
      <h2 class="bun-title">Samo ste jedan korak udaljeni od <span class="bun-hl">oslobađanja od nelagode zbog čukljeva</span>, oteklih prstiju i bolova u stopalima…</h2>
      <p>Ako ovo čitate, velika je vjerojatnost da patite od uporne <strong class="bun-red">nelagode zbog čukljeva</strong>.</p>
      <p>Rezultat? Bol i nelagoda utječu na vaše svakodnevne aktivnosti.</p>
      <p>Ako se ne liječe, mogu se pogoršati. Prsti se prekrižuju, a mogu se razviti čekićasti prsti i koštane izrasline.</p>
      <p>Čukljevi su <strong class="bun-red">progresivni poremećaj</strong> i neće nestati sami od sebe.</p>
      <p>S vremenom to može dovesti do ozbiljnijih problema poput <u>invazivne operacije, problema s kukovima, koljenima i donjim dijelom leđa, pa čak i nepokretnosti</u>.</p>
      <p>Koristeći prednosti klinički dokazane napredne terapije poravnanja i patentiranog zglobnog mehanizma, <strong>NORIKS korektor čukljeva</strong> učinkovito ublažava nelagodu na zahvaćenom području stopala i obnavlja zdravlje vašeg stopala uz samo 30 minuta dnevne uporabe.</p>
      <p class="bun-stat"><span class="bun-check" aria-hidden="true">✔</span> <em>91% korisnika prijavilo je <strong>smanjenje boli u stopalima</strong> već od prvog tjedna</em></p>
    </div>
  </div>
</section>

<!-- ============ 2) Kako funkcionira? ============ -->
<section class="bun-why">
  <div class="bun-wrap bun-row bun-reverse">
    <div class="bun-col bun-media">
      <video src="<?php echo esc_url( $bun_video_2 ); ?>" muted autoplay loop playsinline preload="metadata"></video>
    </div>
    <div class="bun-col bun-copy">
      <h2 class="bun-title">Kako funkcionira?</h2>
      <p><strong>NORIKS korektor čukljeva</strong> primjenjuje naprednu terapiju poravnanja. Osmišljen je da <strong class="bun-red">podupre ponovno poravnanje</strong> palca i postupno ublaži upalu pomoću snažnog patentiranog zglobnog mehanizma.</p>
      <p>Pomaže osloboditi mišićnu napetost tako da nježno vraća palac u njegov prirodan položaj, što s vremenom dovodi do bezbolnog prirodnog poravnanja zgloba prsta.</p>
      <p>Time se oslobađa godinama nakupljena napetost, izbočenje se ispravlja i smanjuje, bol se ublažava i sprječava daljnji rast — da ponovno stanete na noge, uspravno i samopouzdano.</p>
      <p>Nekim korisnicima može trebati sesija ili dvije da se priviknu, jer <strong class="bun-red">osjećaj može biti izraženiji</strong> u odnosu na druge metode.</p>
      <p>To je prirodan i neinvazivan način vraćanja prirodnog položaja prsta i stopala te ispravljanja štete uzrokovane neodgovarajućom obućom ili genetikom.</p>
      <p>Bilo da se radi o malom dječjem stopalu ili velikom stopalu odrasle osobe, <u>korektor je izrađen da udobno pristaje svim veličinama stopala</u>.</p>
      <p class="bun-stat"><span class="bun-check" aria-hidden="true">✔</span> <em>87% korisnika prijavilo je <strong>vidljiva poboljšanja</strong> već od prvog mjeseca</em></p>
    </div>
  </div>
</section>

<!-- ============ 3) Kako se koristi (sivo, 3 koraka) ============ -->
<section class="bun-why bun-howto">
  <div class="bun-wrap">
    <h2 class="bun-howto-title">Kako se koristi</h2>
    <div class="bun-howto-intro">
      <p>Preporučujemo da započnete s 30 minuta dnevno i postupno povećavate do sesije od 1 do 3 sata.</p>
      <p>Kada se osjećate ugodno, možete ga početi nositi i tijekom spavanja svake noći.</p>
      <p>Najbolji je za mirovanje — dok ležite na kauču, gledate TV, čitate ili spavate.</p>
      <p>No, za razliku od drugih proizvoda na tržištu, možete se i kretati, a da vas NORIKS korektor ne ograničava u pokretu, zahvaljujući svojem pokretnom dizajnu.</p>
    </div>
    <div class="bun-steps-grid">
      <?php $bun_n = 0; foreach ( $bun_steps as $bun_step ) : $bun_n++; ?>
        <div class="bun-step">
          <div class="bun-step-media">
            <video src="<?php echo esc_url( $bun_step['video'] ); ?>" muted autoplay loop playsinline preload="metadata"></video>
          </div>
          <div class="bun-step-num"><?php echo (int) $bun_n; ?></div>
          <p class="bun-step-caption"><?php echo esc_html( $bun_step['caption'] ); ?></p>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ============ 4) 8 razloga zašto ćete ga voljeti ============ -->
<section class="bun-why">
  <div class="bun-wrap bun-row">
    <div class="bun-col bun-copy">
      <h2 class="bun-title">8 razloga zašto ćete ga voljeti</h2>
      <ul class="bun-reasons">
        <li><strong>Olakšanje nelagode</strong> pri hodu, vježbanju, stajanju i spavanju</li>
        <li><strong>Sprječava</strong> daljnji rast čuklja</li>
        <li><strong>Nekirurška opcija</strong> za olakšanje</li>
        <li>Čvrsto poravnanje zgloba koje <strong>uistinu poboljšava vaše stanje</strong></li>
        <li><strong>Podesiv</strong> intenzitet istezanja</li>
        <li>Osmišljen i preporučen od strane <strong>medicinskih stručnjaka</strong></li>
        <li><strong>Jednostavan za uporabu</strong> i prijenosan</li>
        <li><strong>30-dnevno jamstvo povrata novca</strong> („rezultati ili puni povrat") jer smo toliko sigurni u svoj proizvod i znamo da će vam pomoći</li>
      </ul>
    </div>
    <div class="bun-col bun-media">
      <img loading="lazy" decoding="async" src="<?php echo esc_url( $bun_img_features ); ?>" alt="Zašto je NORIKS korektor čukljeva drukčiji" />
    </div>
  </div>
</section>

<!-- ============ 5) Pravi rezultati, pravi ljudi ============ -->
<section class="bun-why bun-results-sec">
  <div class="bun-wrap bun-row">
    <div class="bun-col bun-copy">
      <h2 class="bun-title">Pravi <span class="bun-hl">rezultati</span>, pravi ljudi</h2>
      <p>Proveli smo potrošački test u kojem smo NORIKS korektor čukljeva poslali u više od <strong>37 podijatrijskih ordinacija</strong>. Ukupno ga je testiralo <strong>432 pacijenata</strong> s čukljevima. Evo rezultata.</p>
    </div>
    <div class="bun-col">
      <div class="bun-results">
        <?php foreach ( $bun_results as $bun_r ) : $bun_dash = round( $bun_r['pct'] * 1.6336, 1 ); ?>
          <div class="bun-result">
            <svg class="bun-ring" viewBox="0 0 60 60" aria-hidden="true">
              <circle cx="30" cy="30" r="26" fill="none" stroke="#dfe6ee" stroke-width="5"/>
              <circle cx="30" cy="30" r="26" fill="none" stroke="#1a86d0" stroke-width="5" stroke-linecap="round"
                      stroke-dasharray="<?php echo esc_attr( $bun_dash ); ?> 163.4" transform="rotate(-90 30 30)"/>
              <text x="30" y="34" text-anchor="middle" class="bun-ring-txt"><?php echo (int) $bun_r['pct']; ?>%</text>
            </svg>
            <p class="bun-result-text"><?php echo esc_html( $bun_r['text'] ); ?></p>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>

<!-- ============ 6) Zašto odabrati nas? (usporedna tablica, knc stil) ============ -->
<section class="bun-cmp-section">
  <div class="bun-cmp-wrap">
    <h2 class="bun-cmp-title">Zašto odabrati nas?</h2>
    <p class="bun-cmp-lead">Ne nasjedajte na <span class="bun-hl">JEFTINE imitacije</span></p>
    <p class="bun-cmp-sub">Kako se <strong>NORIKS korektor čukljeva</strong> uspoređuje s ostalima:</p>
    <div class="bun-cmp-scroll">
      <table class="bun-cmp-table">
        <thead>
          <tr>
            <th></th>
            <th class="bun-us">NORIKS</th>
            <th class="bun-comp">Ostali korektori</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ( $bun_cmp as $bun_row ) : ?>
            <tr>
              <td><?php echo esc_html( $bun_row ); ?></td>
              <td class="us ok">✓</td>
              <td class="no">✕</td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</section>

<style>
  /* Nema "Tablica veličina" linka na korektoru čukljeva (ni plugin ni globalni). */
  .noriks-global-sizechart, .gck-size-link, .gck-size-link-wrap,
  #open-size-chart, #open-size-chartCustom { display: none !important; }

  /* Kratki opis (short description): sakrij standardne točke (•), ostaje samo ✅;
     razmak iznad "Prednosti:" i više prostora ispod liste.
     (Ovaj se predložak učitava samo na orto-bunion stranicama.) */
  .woocommerce-product-details__short-description ul {
      list-style: none;
      margin: 8px 0 26px;
      padding-left: 0;
  }
  .woocommerce-product-details__short-description ul li {
      list-style: none;
      padding-left: 0;
      margin-left: 0;
  }
  .woocommerce-product-details__short-description p:has(+ ul) {
      margin-top: 20px;
      margin-bottom: 4px;
  }

  .bun-why { padding: 44px 0; }
  .bun-why.bun-intro { background: #fbf9f4; }
  .bun-wrap { max-width: 1180px; margin: 0 auto; padding: 0 16px; }
  .bun-row { display: grid; grid-template-columns: 1fr 1fr; gap: 48px; align-items: center; }
  .bun-media video { width: 100%; height: auto; border-radius: 12px; display: block; }
  .bun-title { font-size: clamp(24px,2.9vw,34px); font-weight: 800; color: #1c1c1c; line-height: 1.2; margin: 0 0 18px; }
  .bun-hl { color: #1a86d0; }
  .bun-red { color: #e0563f; }
  .bun-copy p { font-size: 16px; line-height: 1.7; color: #333; margin: 0 0 12px; }
  .bun-stat { display: flex; align-items: flex-start; gap: 8px; margin-top: 6px !important; }
  .bun-check { color: #1a86d0; font-weight: 800; }
  .bun-stat em { font-style: italic; color: #333; }

  /* section 2: media on the right */
  .bun-reverse .bun-media { order: 2; }
  .bun-reverse .bun-copy { order: 1; }

  /* 3) Kako se koristi (sivo ozadje) */
  .bun-why.bun-howto { background: #f0f2f5; }
  .bun-howto-title { text-align: center; font-size: clamp(24px,2.9vw,34px); font-weight: 800; color: #1c1c1c; margin: 0 0 18px; }
  .bun-howto-intro { max-width: 820px; margin: 0 auto 34px; text-align: center; }
  .bun-howto-intro p { font-size: 16px; line-height: 1.6; color: #333; margin: 0 0 12px; }
  .bun-steps-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 26px; }
  .bun-step { text-align: center; }
  .bun-step-media { width: 100%; aspect-ratio: 1 / 1; border-radius: 14px; overflow: hidden; background: #e6e9ee; }
  .bun-step-media video { width: 100%; height: 100%; object-fit: cover; display: block; }
  .bun-step-num { font-size: 22px; font-weight: 800; color: #1c1c1c; margin: 14px 0 6px; }
  .bun-step-caption { font-size: 15px; line-height: 1.5; color: #333; margin: 0 8px; }

  /* 4) 8 razloga */
  .bun-media img { width: 100%; height: auto; border-radius: 12px; display: block; }
  .bun-reasons { list-style: none; margin: 0; padding: 0; }
  .bun-reasons li { position: relative; padding: 0 0 16px 34px; font-size: 15.5px; line-height: 1.5; color: #333; }
  .bun-reasons li:before {
      content: ""; position: absolute; left: 0; top: 1px; width: 22px; height: 22px; border-radius: 50%;
      background: #1a86d0 url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M6 12.5l4 4 8-8' fill='none' stroke='white' stroke-width='2.6' stroke-linecap='round' stroke-linejoin='round'/></svg>") center/15px no-repeat;
  }

  /* 5) Pravi rezultati */
  .bun-results { display: flex; flex-direction: column; gap: 18px; }
  .bun-result { display: flex; align-items: center; gap: 16px; border-bottom: 1px solid #e6e6e6; padding-bottom: 16px; }
  .bun-result:last-child { border-bottom: 0; padding-bottom: 0; }
  .bun-ring { width: 70px; height: 70px; flex: 0 0 70px; }
  .bun-ring-txt { font-size: 16px; font-weight: 800; fill: #1a86d0; }
  .bun-result-text { font-size: 14.5px; line-height: 1.5; color: #333; margin: 0; }

  /* 6) Zašto odabrati nas — usporedna tablica (isti stil kao knc-table) */
  .bun-cmp-section { background:#fff; padding:44px 0; }
  .bun-cmp-wrap { max-width:940px; margin:0 auto; padding:0 16px; }
  .bun-cmp-title { text-align:center; font-size:clamp(24px,3vw,34px); font-weight:800; color:#111; margin:0 0 8px; }
  .bun-cmp-lead { text-align:center; font-size:18px; font-weight:800; color:#111; margin:0 0 6px; }
  .bun-cmp-sub { text-align:center; font-size:14px; color:#444; margin:0 0 24px; }
  .bun-cmp-scroll { border-radius:16px; overflow:hidden; box-shadow:0 12px 34px rgba(18,48,90,.12); border:1px solid #edf0f4; }
  .bun-cmp-table { width:100%; border-collapse:collapse; table-layout:fixed; margin:0 !important; }
  .bun-cmp-table th, .bun-cmp-table td { padding:15px 12px; text-align:center; font-size:15px; }
  .bun-cmp-table thead th { color:#fff; font-weight:700; vertical-align:middle; font-size:14px; }
  .bun-cmp-table thead th:first-child { width:52%; background:#fff; }
  .bun-cmp-table .bun-comp { background:#767676; }
  .bun-cmp-table .bun-us { background:#111; }
  .bun-cmp-table tbody td:first-child { text-align:left; font-weight:600; color:#111; font-size:14px; line-height:1.3; padding-left:18px; }
  .bun-cmp-table tbody tr { border-bottom:1px solid #eef0f4; }
  .bun-cmp-table tbody tr:nth-child(even) { background:#fafbfc; }
  .bun-cmp-table td.ok { color:#1a9e5f; font-size:19px; font-weight:700; }
  .bun-cmp-table td.no { color:#d64545; font-size:18px; font-weight:700; }
  .bun-cmp-table td.us { background:#f3f3f3 !important; }
  .bun-cmp-table td.us.ok { color:#1a9e5f; }
  @media (max-width:600px) {
    .bun-cmp-table th, .bun-cmp-table td { padding:12px 6px; font-size:13px; }
    .bun-cmp-table thead th { font-size:12px; }
    .bun-cmp-table tbody td:first-child { font-size:12px; padding-left:10px; }
  }

  @media (max-width: 820px) {
    .bun-row { grid-template-columns: 1fr; gap: 22px; }
    .bun-reverse .bun-media { order: 0; }
    .bun-reverse .bun-copy { order: 0; }
    .bun-steps-grid { grid-template-columns: 1fr; gap: 18px; }
  }
</style>
