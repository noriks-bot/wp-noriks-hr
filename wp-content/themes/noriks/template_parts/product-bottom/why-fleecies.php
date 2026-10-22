<?php
/**
 * product-bottom: Fleecies™ Classics — hlačne tajice s flisom za toplinu zimi.
 *
 * Sekcije:
 *   1. Fleece toplina + elegantan izgled (dvostupčano, animacija)
 *   2. Ostani topla bez odricanja od stila
 *   3. Savršeno pristajanje koje prate tvoje obline
 *   4. Lagana, prozračna tkanina
 *   5. Praktične za svakodnevno nošenje
 *   6. Voljene od 120.000+ žena širom svijeta (4 recenzije + UGC)
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
$nb      = get_template_directory_uri() . '/img/fleecies/';
$nb_path = get_template_directory() . '/img/fleecies/';

$nb_has = function( $file ) use ( $nb_path ) { return file_exists( $nb_path . $file ); };
$nb_img = function( $file, $alt ) use ( $nb, $nb_path ) {
  if ( file_exists( $nb_path . $file ) ) {
    return '<img src="'.esc_url($nb.$file).'" alt="'.esc_attr($alt).'" loading="lazy">';
  }
  return '<div class="nbr-ph" role="img" aria-label="'.esc_attr($alt).'"><span>'.esc_html($alt).'</span></div>';
};
$nb_anim = function( $mp4, $fallback_img, $alt ) use ( $nb, $nb_path, $nb_img ) {
  if ( file_exists( $nb_path . $mp4 ) ) {
    $poster = str_replace( '.mp4', '-poster.webp', $mp4 );
    return '<video class="nbr-video" src="'.esc_url($nb.$mp4).'" poster="'.esc_url($nb.$poster).'"'
         . ' autoplay muted loop playsinline preload="metadata" aria-label="'.esc_attr($alt).'"></video>';
  }
  return $nb_img( $fallback_img, $alt );
};
?>

<!-- ============ 1) Topao flis + elegantni prozirni izgled ============ -->
<section class="nbr-sec nbr-alt">
  <div class="nbr-wrap nbr-row2">
    <div class="nbr-media"><?php echo $nb_anim('fleecies-anim-1.mp4','fleecies-01-toplina.webp','Fleece toplina uz elegantan izgled — Fleecies™'); ?></div>
    <div class="nbr-copy">
      <h2 class="nbr-h2">❄️ Topao flis + elegantni prozirni izgled</h2>
      <p>Naše Fleecies™ tajice imaju gustu flis postavu koja te grije tijekom cijele zime, dok vanjski sloj najlona stvara izgled klasičnih prozirnih čarapa. Ostani topla i izgledaj elegantno — bez odricanja od stila.</p>
    </div>
  </div>
</section>

<!-- ============ 2) Ostani topla bez odricanja od stila ============ -->
<section class="nbr-sec">
  <div class="nbr-wrap nbr-row2">
    <div class="nbr-copy">
      <h2 class="nbr-h2">✨ Ostani topla bez odricanja od stila</h2>
      <p>Zaboravi debele tajice koje uništavaju tvoj outfit. Fleecies™ Classics kombiniraju toplinu flis obloge s prozirnim, elegantnim izgledom koji se savršeno uklapa u svaku zimsku kombinaciju — od haljina do suknji i kratkih hlača.</p>
    </div>
    <div class="nbr-media"><?php echo $nb_img('fleecies-02-stil.webp','Elegantan izgled prozirnih čarapa'); ?></div>
  </div>
</section>

<!-- ============ 3) Savršeno pristajanje koje prati tvoje obline ============ -->
<section class="nbr-sec nbr-alt">
  <div class="nbr-wrap nbr-row2">
    <div class="nbr-media"><?php echo $nb_img('fleecies-03-kroj.webp','Savršeno pristajanje'); ?></div>
    <div class="nbr-copy">
      <h2 class="nbr-h2">👗 Savršeno pristajanje koje prati tvoje obline</h2>
      <p>Izrađene od rastezljivog materijala koji se prilagođava oblinama tijela i pruža ugodan osjećaj cijeli dan. Visokog su struka, ne klize i ostaju na mjestu — bez stalnog podešavanja.</p>
    </div>
  </div>
</section>

<!-- ============ 4) Lagana, prozračna tkanina ============ -->
<section class="nbr-sec">
  <div class="nbr-wrap nbr-row2">
    <div class="nbr-copy">
      <h2 class="nbr-h2">🌬️ Lagana, prozračna tkanina</h2>
      <p>Unatoč gustoj flis postavi, Fleecies™ ostaju prozračne i ugodne. Tkanina omogućuje koži da diše, pa se nećeš osjećati preznojeno ni nakon sati nošenja. Savršeno za ured, šetnju gradom ili večernji izlazak.</p>
    </div>
    <div class="nbr-media"><?php echo $nb_img('fleecies-04-prozracno.webp','Prozračna tkanina'); ?></div>
  </div>
</section>

<!-- ============ 5) Praktične za svakodnevno nošenje ============ -->
<section class="nbr-sec nbr-alt">
  <div class="nbr-wrap nbr-row2">
    <div class="nbr-media"><?php echo $nb_img('fleecies-05-prakticno.webp','Praktično svakodnevno'); ?></div>
    <div class="nbr-copy">
      <h2 class="nbr-h2">🔄 Praktične za svakodnevno nošenje</h2>
      <p>Izdržljiv materijal koji se lako pere i brzo suši. Jednostavno ih ubaci u perilicu na 30°C program i gotovo — uvijek su spremne za nošenje. Bez kompliciranog održavanja.</p>
    </div>
  </div>
</section>

<!-- ============ 6) Voljene od 120.000+ žena širom svijeta ============ -->
<section class="nbr-sec">
  <div class="nbr-wrap">
    <h2 class="nbr-h2 nbr-center">Voljene od 120.000+ žena širom svijeta</h2>
    <div class="nbr-tiles">
      <div class="nbr-tile">
        <div class="nbr-tile-media"><?php echo $nb_img('fleecies-rev-1.webp','Ana S. — Zagreb'); ?></div>
        <h3>Ana S. — Zagreb</h3>
        <p>⭐⭐⭐⭐⭐<br>„Konačno tajice koje me griju bez da izgledam kao da nosim žile!​ Savršene za zimske haljine."</p>
      </div>
      <div class="nbr-tile">
        <div class="nbr-tile-media"><?php echo $nb_img('fleecies-rev-2.webp','Lucija M. — Split'); ?></div>
        <h3>Lucija M. — Split</h3>
        <p>⭐⭐⭐⭐⭐<br>„Ne mogu vjerovati koliko su tople! Nosim ih svaki dan na poslu i nikad mi nije hladno."</p>
      </div>
      <div class="nbr-tile">
        <div class="nbr-tile-media"><?php echo $nb_img('fleecies-rev-3.webp','Petra K. — Osijek'); ?></div>
        <h3>Petra K. — Osijek</h3>
        <p>⭐⭐⭐⭐⭐<br>„Naručila sam 3 para odmah. Savršene su — udobne, tople, i izgledaju kao obične čarape."</p>
      </div>
      <div class="nbr-tile">
        <div class="nbr-tile-media"><?php echo $nb_img('fleecies-rev-4.webp','Marija D. — Rijeka'); ?></div>
        <h3>Marija D. — Rijeka</h3>
        <p>⭐⭐⭐⭐⭐<br>„Najbolja kupovina ove zime! Više ne moram birati između stila i topline."</p>
      </div>
    </div>
  </div>
</section>

<!-- Garancija + CTA -->
<section class="nbr-sec nbr-cta">
  <div class="nbr-wrap nbr-center">
    <h2 class="nbr-h2">✅ 30 dana jamstvo povrata novca</h2>
    <p>Ako iz bilo kojeg razloga nisi zadovoljna, vratit ćemo ti puni iznos. Bez pitanja.</p>
    <p><strong>Besplatna dostava iznad 70 €</strong> • Plaćanje pouzećem • Ocjena 4,8/5 od 120.000+ kupaca</p>
  </div>
</section>
