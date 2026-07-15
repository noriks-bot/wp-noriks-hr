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
$bun_video_2 = $bun_vid_dir . 'section-2.mp4'; // 2) Kako funkcionira

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

<style>
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

  @media (max-width: 820px) {
    .bun-row { grid-template-columns: 1fr; gap: 22px; }
    .bun-reverse .bun-media { order: 0; }
    .bun-reverse .bun-copy { order: 0; }
    .bun-steps-grid { grid-template-columns: 1fr; gap: 18px; }
  }
</style>
