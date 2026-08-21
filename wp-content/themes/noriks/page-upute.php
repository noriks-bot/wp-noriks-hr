<?php
/**
 * Template Name: Upute za uporabu
 *
 * Popis proizvoda s PDF uputama u dva stupca, sa slikom proizvoda i pretragom.
 * PDF-ovi stoje lokalno u temi, u mapi /manuals/.
 */
get_header();
$dir_url  = get_template_directory_uri() . '/manuals/';
$dir_path = get_template_directory() . '/manuals/';
?>

<div class="nmn">
  <div class="nmn-wrap">
    <h1 class="nmn-title"><?php echo esc_html( get_the_title() ); ?></h1>
    <p class="nmn-sub">Preuzmite upute za svoj NORIKS proizvod u PDF formatu.</p>

    <div class="nmn-search">
      <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><circle cx="11" cy="11" r="7"/><path d="m20 20-3.5-3.5"/></svg>
      <input type="search" id="nmn-q" placeholder="Pretraži po nazivu proizvoda…" autocomplete="off" aria-label="Pretraga uputa">
    </div>

    <div class="nmn-grid" id="nmn-grid">
      <?php foreach ( noriks_manuals_list() as $m ) :
          if ( ! file_exists( $dir_path . $m['file'] ) ) { continue; }
          $size = size_format( filesize( $dir_path . $m['file'] ) );
          $p    = noriks_manual_product( $m['sku'] );
          $key  = mb_strtolower( $m['title'] . ' ' . $m['sub'] . ' ' . $m['desc'] );
          ?>
        <div class="nmn-card" data-key="<?php echo esc_attr( $key ); ?>">
          <div class="nmn-thumb">
            <?php if ( $p['img'] ) : ?>
              <img src="<?php echo esc_url( $p['img'] ); ?>" alt="<?php echo esc_attr( $m['title'] ); ?>" loading="lazy">
            <?php else : ?>
              <span class="nmn-ic" aria-hidden="true">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><path d="M14 2v6h6"/></svg>
              </span>
            <?php endif; ?>
          </div>

          <div class="nmn-body">
            <h2><?php echo esc_html( $m['title'] ); ?></h2>
            <p class="nmn-kind"><?php echo esc_html( $m['sub'] ); ?></p>
            <p class="nmn-desc"><?php echo esc_html( $m['desc'] ); ?></p>
            <p class="nmn-links">
              <a class="nmn-btn" href="<?php echo esc_url( $dir_url . $m['file'] ); ?>" target="_blank" rel="noopener">
                Preuzmi PDF <span>(<?php echo esc_html( $size ); ?>)</span>
              </a>
              <?php if ( $p['url'] ) : ?>
                <a class="nmn-link" href="<?php echo esc_url( $p['url'] ); ?>">Stranica proizvoda</a>
              <?php endif; ?>
            </p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

    <p class="nmn-empty" id="nmn-empty" hidden>Nema uputa za taj pojam. Pišite nam na <a href="mailto:info@noriks.com">info@noriks.com</a>.</p>
    <p class="nmn-help">Trebate pomoć oko proizvoda? Pišite nam na <a href="mailto:info@noriks.com">info@noriks.com</a>.</p>
  </div>
</div>

<style>
  .nmn { background: #f6f6f6; padding: 40px 0 56px; }
  .nmn-wrap { max-width: 1040px; margin: 0 auto; padding: 0 16px;
              font-family: 'Inter', 'Barlow', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif; }
  .nmn-title { font-size: clamp(26px, 4vw, 36px); font-weight: 800; color: #111; margin: 0 0 6px; letter-spacing: -.02em; }
  .nmn-sub { font-size: 15.5px; color: #5a5a5a; margin: 0 0 20px; }

  .nmn-search { position: relative; display: flex; align-items: center; max-width: 420px; margin: 0 0 22px; color: #8a8a8a; }
  .nmn-search svg { position: absolute; left: 14px; pointer-events: none; }
  .nmn-search input {
    width: 100%; padding: 12px 14px 12px 40px; font-size: 15px; color: #111;
    background: #fff; border: 1px solid #e2e2e2; border-radius: 9px; outline: none;
  }
  .nmn-search input:focus { border-color: #12233b; box-shadow: 0 0 0 3px rgba(18,35,59,.08); }

  .nmn-grid { display: grid; grid-template-columns: repeat(2, 1fr); gap: 14px; }
  .nmn-card { display: flex; gap: 14px; height: 100%; background: #fff; border-radius: 9px; padding: 18px;
              box-shadow: 0 1px 2px rgba(0,0,0,.06); box-sizing: border-box; }
  .nmn-thumb { flex: 0 0 auto; width: 84px; height: 84px; border-radius: 8px; overflow: hidden; background: #f1f4f8;
               display: flex; align-items: center; justify-content: center; color: #12233b; }
  .nmn-thumb img { width: 100%; height: 100%; object-fit: cover; display: block; }
  .nmn-body { min-width: 0; display: flex; flex-direction: column; flex: 1 1 auto; }
  .nmn-card h2 { font-size: 17px; font-weight: 800; color: #111; margin: 0 0 2px; }
  .nmn-kind { font-size: 13px; font-weight: 600; color: #12233b; margin: 0 0 7px; }
  .nmn-desc { font-size: 14.5px; line-height: 1.55; color: #555; margin: 0 0 12px; }
  .nmn-links { display: flex; align-items: center; gap: 14px; flex-wrap: wrap; margin: auto 0 0; }
  .nmn-btn { display: inline-block; background: #111; color: #fff !important; font-size: 14px; font-weight: 700;
             padding: 9px 16px; border-radius: 7px; text-decoration: none; white-space: nowrap; }
  .nmn-btn span { font-weight: 500; opacity: .7; }
  .nmn-btn:hover { background: #12233b; }
  .nmn-link { font-size: 14px; color: #12233b !important; text-decoration: underline; }
  .nmn-empty { margin-top: 18px; font-size: 15px; color: #5a5a5a; }
  .nmn-help { margin-top: 22px; font-size: 14px; color: #5a5a5a; }

  @media (max-width: 820px) {
    .nmn-grid { grid-template-columns: 1fr; }
  }
  @media (max-width: 600px) {
    .nmn { padding: 26px 0 36px; }
    .nmn-card { padding: 16px; gap: 12px; }
    .nmn-thumb { width: 64px; height: 64px; }
    .nmn-search { max-width: none; }
  }
</style>

<script>
(function(){
  var q = document.getElementById('nmn-q');
  var grid = document.getElementById('nmn-grid');
  var empty = document.getElementById('nmn-empty');
  if (!q || !grid) { return; }
  var cards = [].slice.call(grid.querySelectorAll('.nmn-card'));

  /* Pretraga bez dijakritike, da "cuklja" nade i "čukljeva". */
  function norm(s){
    s = (s || '').toLowerCase().replace(/\u0111/g, 'd');   /* đ nema razlozeni oblik */
    return s.normalize ? s.normalize('NFD').replace(/[\u0300-\u036f]/g, '') : s;
  }
  function run(){
    var t = norm(q.value).trim();
    var hit = 0;
    cards.forEach(function(c){
      var match = !t || norm(c.getAttribute('data-key')).indexOf(t) !== -1;
      c.style.display = match ? '' : 'none';
      if (match) { hit++; }
    });
    empty.hidden = hit > 0;
  }
  q.addEventListener('input', run);
  run();
})();
</script>

<?php get_footer(); ?>
