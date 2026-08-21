<?php
/**
 * Template Name: Upute za uporabu
 *
 * Popis proizvoda s PDF uputama. PDF-ovi stoje lokalno u temi, u mapi /manuals/.
 */
get_header(); ?>

<div class="nmn">
  <div class="nmn-wrap">
    <h1 class="nmn-title"><?php echo esc_html( get_the_title() ); ?></h1>
    <p class="nmn-sub">Preuzmite upute za svoj NORIKS proizvod u PDF formatu.</p>

    <?php
    $dir_url  = get_template_directory_uri() . '/manuals/';
    $dir_path = get_template_directory() . '/manuals/';
    ?>
    <div class="nmn-grid">
      <?php foreach ( noriks_manuals_list() as $m ) :
          $exists = file_exists( $dir_path . $m['file'] );
          if ( ! $exists ) { continue; }
          $size = size_format( filesize( $dir_path . $m['file'] ) );
          ?>
        <div class="nmn-card">
          <span class="nmn-ic" aria-hidden="true">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><path d="M14 2v6h6"/></svg>
          </span>
          <div class="nmn-body">
            <h2><?php echo esc_html( $m['title'] ); ?></h2>
            <p class="nmn-kind"><?php echo esc_html( $m['sub'] ); ?></p>
            <p class="nmn-desc"><?php echo esc_html( $m['desc'] ); ?></p>
            <p class="nmn-links">
              <a class="nmn-btn" href="<?php echo esc_url( $dir_url . $m['file'] ); ?>" target="_blank" rel="noopener">
                Preuzmi PDF <span>(<?php echo esc_html( $size ); ?>)</span>
              </a>
              <a class="nmn-link" href="<?php echo esc_url( $m['url'] ); ?>">Stranica proizvoda</a>
            </p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

    <p class="nmn-help">Trebate pomoć oko proizvoda? Pišite nam na <a href="mailto:info@noriks.com">info@noriks.com</a>.</p>
  </div>
</div>

<style>
  .nmn { background: #f6f6f6; padding: 40px 0 56px; }
  .nmn-wrap { max-width: 900px; margin: 0 auto; padding: 0 16px;
              font-family: 'Inter', 'Barlow', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif; }
  .nmn-title { font-size: clamp(26px, 4vw, 36px); font-weight: 800; color: #111; margin: 0 0 6px; letter-spacing: -.02em; }
  .nmn-sub { font-size: 15.5px; color: #5a5a5a; margin: 0 0 26px; }
  .nmn-grid { display: grid; gap: 12px; }
  .nmn-card { display: flex; gap: 14px; background: #fff; border-radius: 9px; padding: 18px; box-shadow: 0 1px 2px rgba(0,0,0,.06); }
  .nmn-ic { flex: 0 0 auto; width: 42px; height: 42px; border-radius: 8px; background: #f1f4f8; color: #12233b;
            display: flex; align-items: center; justify-content: center; }
  .nmn-body { min-width: 0; }
  .nmn-card h2 { font-size: 17px; font-weight: 800; color: #111; margin: 0 0 2px; }
  .nmn-kind { font-size: 13px; font-weight: 600; color: #12233b; margin: 0 0 7px; }
  .nmn-desc { font-size: 14.5px; line-height: 1.55; color: #555; margin: 0 0 12px; }
  .nmn-links { display: flex; align-items: center; gap: 14px; flex-wrap: wrap; margin: 0; }
  .nmn-btn { display: inline-block; background: #111; color: #fff !important; font-size: 14px; font-weight: 700;
             padding: 9px 16px; border-radius: 7px; text-decoration: none; }
  .nmn-btn span { font-weight: 500; opacity: .7; }
  .nmn-btn:hover { background: #12233b; }
  .nmn-link { font-size: 14px; color: #12233b !important; text-decoration: underline; }
  .nmn-help { margin-top: 22px; font-size: 14px; color: #5a5a5a; }
  @media (max-width: 600px) {
    .nmn { padding: 26px 0 36px; }
    .nmn-card { flex-direction: column; gap: 10px; padding: 16px; }
  }
</style>

<?php get_footer(); ?>
