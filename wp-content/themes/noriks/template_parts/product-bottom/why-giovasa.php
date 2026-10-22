<?php
/**
 * product-bottom: NORIKS Giovasa — krpa iz mikrofilamenata (orto-giovasa).
 * Original: giovasa.com/products/panno-giovasa (IT) — čistilna krpa iz mikrofilamenata,
 * vpija do 1L vode, 300+ pranj, brez kemikalij, za steklo in površine.
 * Struktura: 6 sekcij, izmenjujoča ozadja, slika/video ob besedilu, NORIKS pogoji namesto 100-dnevne garancije originala.
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$ngv      = get_template_directory_uri() . '/img/giovasa/';
$ngv_path = get_template_directory() . '/img/giovasa/';
$ngv_img  = function( $file, $alt ) use ( $ngv, $ngv_path ) {
  if ( ! $file || ! file_exists( $ngv_path . $file ) ) { return ''; }
  return '<img src="' . esc_url( $ngv . $file ) . '" alt="' . esc_attr( $alt ) . '" loading="lazy">';
};
$ngv_video = function( $file, $poster, $label, $cls = '' ) use ( $ngv, $ngv_path ) {
  if ( ! file_exists( $ngv_path . $file ) ) { return ''; }
  return '<div class="ngv-vid ' . esc_attr( $cls ) . '"><video src="' . esc_url( $ngv . $file ) . '" poster="' . esc_url( $ngv . $poster ) . '"'
    . ' muted autoplay loop playsinline preload="metadata" aria-label="' . esc_attr( $label ) . '"></video></div>';
};
$ngv_kses = array( 'strong' => array(), 'em' => array(), 'br' => array() );
$ngv_tick = '<span class="ngv-dot" aria-hidden="true">✓</span>';

/* koraki uporabe */
$ngv_steps = array(
  array( 'Navlažite krpu', 'Krpu navlažite pod mlazom vode — ne potrebujete nobenih čistil.' ),
  array( 'Očistite površino', 'Brišite steklo, kuhinjske površine ali kopalnico — mikrovlakna učinkovito odstranjujejo prah in maščobo.' ),
  array( 'Operite in ponovno uporabite', 'Po uporabi krpo operite v pralnem stroju pri 60°C in ponovno uporabite — do 300+ pranj.' ),
);

$ngv_n = 0; // števec sekcij
$ngv_cls = function() use ( &$ngv_n ) { $ngv_n++; return ( $ngv_n % 2 ) ? ' ngv-tint' : ''; };
?>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap">

<!-- 1) BREZ KEMIKALIJ -->
<section class="ngv-sec<?php echo $ngv_cls(); ?>">
  <div class="ngv-wrap">
    <div class="ngv-row2">
      <div class="ngv-media"><?php echo $ngv_img( 'noriks-giovasa-upotreba.webp', 'NORIKS Giovasa krpa čisti steklo brez kemikalij' ); ?></div>
      <div class="ngv-copy">
        <p class="ngv-kicker">Čisto brez kemikalij</p>
        <h2 class="ngv-h3">Steklo blistavo čisto — <em>samo s vodom</em></h2>
        <p>Krpa iz <strong>mikrofilamenata</strong> čisti prozore, steklo in gladke površine <strong>brez kemikalij</strong>. Samo navlažite krpu in brišite — mikroskopska vlakna učinkovito odstranjujejo prah, maščobo i otiske prstiju, ne ostavljajući tragove.</p>
        <p>Bez mirisa kemikalija, bez ostataka — samo blistavo čiste površine.</p>
      </div>
    </div>
  </div>
</section>

<!-- 2) VPIJANJE 1L VODE -->
<section class="ngv-sec<?php echo $ngv_cls(); ?>">
  <div class="ngv-wrap">
    <div class="ngv-row2 ngv-row2--rev">
      <div class="ngv-media"><?php echo $ngv_img( 'noriks-giovasa-vpijanje.webp', 'Mikrofilamenti vpijajo do 1 litra vode' ); ?></div>
      <div class="ngv-copy">
        <p class="ngv-kicker">Visoka vpojnost</p>
        <h2 class="ngv-h3">Vpije do <em>1 litra vode</em></h2>
        <p>Ena sama krpa <strong>vpije do 1 litra vode</strong> — idealno za čiščenje velikih površin brez dodatnega ožemanja. Mikrovlakna zadržijo vodo in vlago, tako da lahko s krpo enostavno obrišete steklo, ploščice ali kuhinjske površine.</p>
        <ul class="ngv-points">
          <li><?php echo $ngv_tick; ?><span>Vpije <strong>do 1L vode</strong></span></li>
          <li><?php echo $ngv_tick; ?><span>Brez kapljanja in madežev</span></li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- 3) TRAJNOSTNOST 300+ PRANJ -->
<section class="ngv-sec<?php echo $ngv_cls(); ?>">
  <div class="ngv-wrap">
    <div class="ngv-row2">
      <div class="ngv-media"><?php echo $ngv_img( 'noriks-giovasa-trajnostnost.webp', 'Krpa se opere 300+ krat' ); ?></div>
      <div class="ngv-copy">
        <p class="ngv-kicker">Dolga življenjska doba</p>
        <h2 class="ngv-h3">Lahko oprete <em>več kot 300-krat</em></h2>
        <p>Krpa NORIKS Giovasa zdržuje <strong>300+ pranj</strong> v pralnem stroju pri 60°C. Po uporabi jo preprosto vrzite v pralni stroj, posušite in ponovno uporabite — mesece čistih površin brez potrebe po novih krpah ali papirnate brisačah.</p>
        <p class="ngv-big">Trajnostna izbira, ki varčuje z denarjem in varuje okolje.</p>
      </div>
    </div>
  </div>
</section>

<!-- 4) KAKO UPORABITI -->
<section class="ngv-sec<?php echo $ngv_cls(); ?>">
  <div class="ngv-wrap">
    <div class="ngv-row2 ngv-row2--rev">
      <div class="ngv-media"><?php echo $ngv_img( 'noriks-giovasa-koraki.webp', 'Kako uporabljati NORIKS Giovasa krpo — 3 koraki' ); ?></div>
      <div class="ngv-copy">
        <p class="ngv-kicker">Kako uporabljati</p>
        <h2 class="ngv-h3">Tri koraka <em>do čistih površin</em></h2>
        <ol class="ngv-steps">
          <?php foreach ( $ngv_steps as $k => $s ) : ?>
          <li><span class="ngv-step__n"><?php echo (int) ( $k + 1 ); ?></span><span><strong><?php echo esc_html( $s[0] ); ?></strong> <?php echo esc_html( $s[1] ); ?></span></li>
          <?php endforeach; ?>
        </ol>
      </div>
    </div>
  </div>
</section>

<!-- 5) PRIMERI UPORABE -->
<section class="ngv-sec<?php echo $ngv_cls(); ?>">
  <div class="ngv-wrap">
    <div class="ngv-row2">
      <div class="ngv-media"><?php echo $ngv_img( 'noriks-giovasa-primeri.webp', 'Krpa za prozore, kuhinjske površine, kopalnico' ); ?></div>
      <div class="ngv-copy">
        <p class="ngv-kicker">Vsestransko čiščenje</p>
        <h2 class="ngv-h3">Za prozore, kuhinjo <em>in kopalnico</em></h2>
        <p>Uporabite krpo za <strong>prozore, steklene površine, kuhinjske ploščice, kopalniško opremo, avtomobilska stekla</strong> in vse gladke površine. Mikrovlakna učinkovito čistijo brez prask in odrgnin.</p>
        <ul class="ngv-points">
          <li><?php echo $ngv_tick; ?><span>Prozori in steklene površine</span></li>
          <li><?php echo $ngv_tick; ?><span>Kuhinjske ploščice in delovne površine</span></li>
          <li><?php echo $ngv_tick; ?><span>Kopalnica, ogledala, pipa</span></li>
          <li><?php echo $ngv_tick; ?><span>Avtomobilska stekla</span></li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- 6) NORIKS POGOJI -->
<section class="ngv-sec<?php echo $ngv_cls(); ?>">
  <div class="ngv-wrap">
    <div class="ngv-row2 ngv-row2--rev">
      <div class="ngv-media ngv-media--sq"><?php echo $ngv_img( 'noriks-giovasa-packshot.webp', 'NORIKS Giovasa krpa iz mikrofilamenata' ); ?></div>
      <div class="ngv-copy">
        <p class="ngv-kicker">Brez rizika</p>
        <h2 class="ngv-h3">Pravo na povrat <em>u roku od 30 dana</em></h2>
        <p>Stojimo iza svakog NORIKS proizvoda. Ako niste potpuno zadovoljni svojom novom krpom za čišćenje, javite nam se u roku od <strong>30 dana</strong> od primitka narudžbe i pomoći ćemo vam. Bez stresa i bez komplikacija — samo proizvodi koji rade onako kako trebaju.</p>
        <p>Narudžbu šaljemo brzo, a platiti možete i <strong>pouzećem</strong>. Za narudžbe iznad 70 € dostava je besplatna.</p>
        <p class="ngv-trust"><span>Pravo na povrat u roku od 30 dana</span><span>Besplatna dostava za narudžbe iznad 70 €</span><span>Plaćanje pouzećem</span><span>120.000 zadovoljnih kupaca</span><span>Ocjena 4,8</span></p>
      </div>
    </div>
  </div>
</section>

<style>
/* NORIKS Giovasa — mikrovlaknasta krpa */
.ngv-sec { padding: 80px 0; position: relative; }
.ngv-tint { background: #f8f9fa; }
.ngv-wrap { max-width: 1240px; margin: 0 auto; padding: 0 24px; }
.ngv-row2 { display: grid; grid-template-columns: 1fr 1fr; gap: 64px; align-items: center; }
.ngv-row2--rev { grid-template-columns: 1fr 1fr; }
.ngv-row2--rev .ngv-media { order: 2; }
.ngv-row2--rev .ngv-copy { order: 1; }

.ngv-media img, .ngv-media video { width: 100%; height: auto; border-radius: 16px; box-shadow: 0 8px 24px rgba(0,0,0,0.1); }
.ngv-media--sq img { aspect-ratio: 1/1; object-fit: cover; }

.ngv-kicker { font-size: 14px; font-weight: 600; text-transform: uppercase; color: #8b7355; letter-spacing: 1px; margin-bottom: 12px; }
.ngv-h2 { font-size: 42px; font-weight: 700; line-height: 1.2; margin: 0 0 24px; }
.ngv-h3 { font-size: 36px; font-weight: 700; line-height: 1.2; margin: 0 0 20px; }
.ngv-h2 em, .ngv-h3 em { font-style: italic; color: #8b7355; }
.ngv-c { text-align: center; }
.ngv-lead { font-size: 18px; line-height: 1.6; color: #555; margin: 0 0 40px; max-width: 800px; margin-left: auto; margin-right: auto; }
.ngv-copy p { font-size: 17px; line-height: 1.7; margin: 0 0 16px; color: #333; }
.ngv-big { font-size: 20px; font-weight: 600; color: #222; margin-top: 24px; }

.ngv-points { list-style: none; padding: 0; margin: 24px 0; }
.ngv-points li { display: flex; gap: 12px; align-items: flex-start; margin-bottom: 12px; }
.ngv-dot { display: inline-block; width: 24px; height: 24px; background: #8b7355; color: #fff; border-radius: 50%; text-align: center; line-height: 24px; flex-shrink: 0; font-size: 14px; }
.ngv-points span { font-size: 16px; line-height: 1.6; }

.ngv-steps { list-style: none; padding: 0; margin: 24px 0; counter-reset: ngv-step; }
.ngv-steps li { display: flex; gap: 16px; align-items: flex-start; margin-bottom: 24px; }
.ngv-step__n { display: inline-flex; align-items: center; justify-content: center; width: 40px; height: 40px; background: #8b7355; color: #fff; border-radius: 50%; font-size: 20px; font-weight: 700; flex-shrink: 0; }
.ngv-steps span { font-size: 16px; line-height: 1.6; }

.ngv-trust { display: flex; flex-wrap: wrap; gap: 12px; margin-top: 24px; }
.ngv-trust span { display: inline-block; background: #e8f5e9; color: #2e7d32; padding: 8px 16px; border-radius: 20px; font-size: 14px; font-weight: 600; }

@media (max-width: 768px) {
  .ngv-sec { padding: 48px 0; }
  .ngv-row2, .ngv-row2--rev { grid-template-columns: 1fr; gap: 32px; }
  .ngv-row2--rev .ngv-media { order: 1; }
  .ngv-row2--rev .ngv-copy { order: 2; }
  .ngv-h2 { font-size: 32px; }
  .ngv-h3 { font-size: 28px; }
  .ngv-copy p { font-size: 16px; }
}
</style>
