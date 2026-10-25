<?php
/**
 * Why sekcije podatkovnega izdelka — vsebina iz polja _noriks_vsebina.
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
$nv = noriks_vsebina_izdelka();
if ( ! $nv ) { return; }
?>
<div class="npod">
<?php foreach ( $nv['sekcije'] as $i => $s ) : ?>
  <section class="npod__sekcija<?php echo $i % 2 ? ' npod__sekcija--bg' : ''; ?>">
    <div class="npod__v">
      <div class="npod__tekst">
        <?php if ( ! empty( $s['kicker'] ) ) : ?><div class="npod__kicker"><?php echo esc_html( $s['kicker'] ); ?></div><?php endif; ?>
        <h2 class="npod__h2"><?php echo esc_html( $s['naslov'] ?? '' ); ?></h2>
        <p class="npod__p"><?php echo esc_html( $s['besedilo'] ?? '' ); ?></p>
      </div>
      <?php if ( ! empty( $s['slika'] ) ) : ?>
      <div class="npod__media"><img src="<?php echo esc_url( $s['slika'] ); ?>" alt="<?php echo esc_attr( $s['naslov'] ?? '' ); ?>" loading="lazy" decoding="async"></div>
      <?php endif; ?>
    </div>
  </section>
<?php endforeach; ?>
</div>
<style>
.npod{color:#121030}
.npod__sekcija{padding:46px 0}
.npod__sekcija--bg{background:#f6f5f2}
.npod__v{max-width:1180px;margin:0 auto;padding:0 18px;display:grid;grid-template-columns:1fr 1fr;gap:34px;align-items:center}
.npod__sekcija:nth-child(even) .npod__v{direction:rtl}
.npod__sekcija:nth-child(even) .npod__tekst,.npod__sekcija:nth-child(even) .npod__media{direction:ltr}
.npod__kicker{font-size:12px;letter-spacing:.14em;text-transform:uppercase;color:#8a8781;margin-bottom:8px}
.npod__h2{font-size:30px;line-height:1.15;margin:0 0 12px}
.npod__p{font-size:16px;line-height:1.6;margin:0}
.npod__media img{width:100%;height:auto;display:block;border-radius:12px}
@media(max-width:860px){.npod__v{grid-template-columns:1fr}.npod__h2{font-size:24px}}
</style>
