<?php
/**
 * Prebacivanje paketa na stranicama "X-paket" (majice i bokserice).
 *
 *  - red "Odaberi paket": 3 / 6 / 9 / 12 / 15 (koliko ih grupa ima), s cijenom po komadu
 *  - red "Boja": svi paketi ISTE velicine (druge kombinacije boja), trenutni je oznacen
 *
 * Sve se gradi iz naslova proizvoda ("Crne majice 6-paket") i kategorija, pa nije
 * potrebno nista rucno vezati. Indeks je u transientu (10 min), da stranica ne radi
 * dodatne upite na svaki pogled.
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

const NORIKS_PACK_TRANSIENT = 'noriks_pack_index_v1';

/** Iz naslova izvuce broj komada: "Crne majice 6-paket" => 6 */
function noriks_pack_size_from_title( $title ) {
    if ( preg_match( '/(\d+)\s*-?\s*paket/iu', (string) $title, $m ) ) {
        return (int) $m[1];
    }
    return 0;
}

/** Naslov bez oznake velicine => "obitelj" (kombinacija boja): "Crne majice" */
function noriks_pack_family_from_title( $title ) {
    $t = preg_replace( '/(\d+)\s*-?\s*paket/iu', '', (string) $title );
    return trim( $t, " -–—|\t\n\r\0\x0B" );
}

/** Skupina: bokserice ili majice (iz kategorija proizvoda). */
function noriks_pack_group_for( $product_id ) {
    $slugs = wp_get_post_terms( $product_id, 'product_cat', array( 'fields' => 'slugs' ) );
    if ( is_wp_error( $slugs ) ) { return ''; }
    foreach ( $slugs as $s ) {
        if ( strpos( $s, 'bokseric' ) !== false || strpos( $s, 'boxer' ) !== false ) { return 'bokserice'; }
    }
    foreach ( $slugs as $s ) {
        if ( strpos( $s, 'majic' ) !== false ) { return 'majice'; }
    }
    return '';
}

/**
 * Indeks svih paketa: [group][size] => lista proizvoda.
 * @return array
 */
function noriks_pack_index() {
    $cached = get_transient( NORIKS_PACK_TRANSIENT );
    if ( is_array( $cached ) ) { return $cached; }

    $ids = get_posts( array(
        'post_type'      => 'product',
        'post_status'    => 'publish',
        'posts_per_page' => 300,
        'fields'         => 'ids',
        'no_found_rows'  => true,
        's'              => 'paket',      // suzi upit; naslov ionako provjeravamo ispod
    ) );

    $index = array();
    foreach ( $ids as $id ) {
        $title = get_the_title( $id );
        $size  = noriks_pack_size_from_title( $title );
        if ( $size < 2 ) { continue; }
        $group = noriks_pack_group_for( $id );
        if ( $group === '' ) { continue; }

        $product = wc_get_product( $id );
        if ( ! $product || ! $product->is_visible() ) { continue; }

        $price = (float) $product->get_price();
        $index[ $group ][ $size ][] = array(
            'id'     => $id,
            'title'  => $title,
            'family' => noriks_pack_family_from_title( $title ),
            'url'    => get_permalink( $id ),
            'img'    => get_the_post_thumbnail_url( $id, 'woocommerce_thumbnail' ),
            'price'  => $price,
            'ppu'    => $size > 0 ? $price / $size : 0,
        );
    }
    foreach ( $index as $g => $sizes ) {
        ksort( $index[ $g ], SORT_NUMERIC );
        foreach ( $sizes as $s => $list ) {
            usort( $index[ $g ][ $s ], function ( $a, $b ) { return strcmp( $a['family'], $b['family'] ); } );
        }
    }
    set_transient( NORIKS_PACK_TRANSIENT, $index, 10 * MINUTE_IN_SECONDS );
    return $index;
}

/** Cilj kad se mijenja velicina: ista obitelj ako postoji, inace najslicnija. */
function noriks_pack_target( $list, $family ) {
    foreach ( $list as $p ) {
        if ( mb_strtolower( $p['family'] ) === mb_strtolower( $family ) ) { return $p; }
    }
    // djelomicno poklapanje po prvoj rijeci ("Crne majice" vs "Crne bokserice")
    $first = mb_strtolower( strtok( $family, ' ' ) );
    foreach ( $list as $p ) {
        if ( $first !== '' && mb_stripos( $p['family'], $first ) !== false ) { return $p; }
    }
    return isset( $list[0] ) ? $list[0] : null;
}

function noriks_render_pack_switcher() {
    global $product;
    if ( ! $product instanceof WC_Product ) { return; }
    $id    = $product->get_id();
    $title = get_the_title( $id );
    $size  = noriks_pack_size_from_title( $title );
    if ( $size < 2 ) { return; }
    $group = noriks_pack_group_for( $id );
    if ( $group === '' ) { return; }

    $index = noriks_pack_index();
    if ( empty( $index[ $group ] ) ) { return; }

    $family   = noriks_pack_family_from_title( $title );
    $sizes    = $index[ $group ];
    $same     = isset( $sizes[ $size ] ) ? $sizes[ $size ] : array();
    $unit     = ( $group === 'bokserice' ) ? 'bokserici' : 'majici';
    $unit_lbl = ( $group === 'bokserice' ) ? 'po bokserici' : 'po majici';

    if ( count( $sizes ) < 2 && count( $same ) < 2 ) { return; }
    ?>
    <div class="npk">

        <?php if ( count( $sizes ) > 1 ) : ?>
        <div class="npk-block">
            <div class="npk-label">Odaberi paket</div>
            <div class="npk-sizes">
                <?php foreach ( $sizes as $s => $list ) :
                    $t = noriks_pack_target( $list, $family );
                    if ( ! $t ) { continue; }
                    $is_cur = ( (int) $s === (int) $size );
                    $best   = ( $s === array_key_last( $sizes ) );
                    ?>
                    <a class="npk-size<?php echo $is_cur ? ' is-active' : ''; ?>"
                       href="<?php echo esc_url( $is_cur ? get_permalink( $id ) : $t['url'] ); ?>"
                       <?php echo $is_cur ? 'aria-current="true"' : ''; ?>>
                        <?php if ( $best && ! $is_cur ) : ?><span class="npk-best">Najbolja cijena</span><?php endif; ?>
                        <span class="npk-size-n"><?php echo (int) $s; ?>-paket</span>
                        <span class="npk-size-p"><?php echo wc_price( $is_cur ? ( (float) $product->get_price() / max( 1, $size ) ) : $t['ppu'] ); ?> <?php echo esc_html( $unit_lbl ); ?></span>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
        <?php endif; ?>

        <?php if ( count( $same ) > 1 ) : ?>
        <div class="npk-block">
            <div class="npk-label">Boja <span class="npk-current"><?php echo esc_html( $family ); ?></span></div>
            <div class="npk-colors">
                <?php foreach ( $same as $p ) :
                    $is_cur = ( (int) $p['id'] === (int) $id ); ?>
                    <a class="npk-color<?php echo $is_cur ? ' is-active' : ''; ?>"
                       href="<?php echo esc_url( $p['url'] ); ?>"
                       title="<?php echo esc_attr( $p['family'] ); ?>">
                        <?php if ( $p['img'] ) : ?>
                            <img src="<?php echo esc_url( $p['img'] ); ?>" alt="<?php echo esc_attr( $p['family'] ); ?>" loading="lazy">
                        <?php else : ?>
                            <span class="npk-color-txt"><?php echo esc_html( mb_substr( $p['family'], 0, 12 ) ); ?></span>
                        <?php endif; ?>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
        <?php endif; ?>

    </div>

    <style>
      .npk { margin: 6px 0 18px; }
      .npk-block { margin-bottom: 16px; }
      .npk-label { font-size: 15px; font-weight: 800; color: #141414; margin: 0 0 8px; }
      .npk-current { font-weight: 500; color: #6b6b6b; }

      .npk-sizes { display: grid; grid-template-columns: repeat(auto-fit, minmax(120px, 1fr)); gap: 10px; }
      .npk-size { position: relative; display: block; text-align: center; text-decoration: none;
                  border: 1px solid #dcdcdc; border-radius: 10px; padding: 12px 8px; background: #fff;
                  transition: border-color .15s, background .15s; }
      .npk-size:hover { border-color: #141414; }
      .npk-size.is-active { background: #12233b; border-color: #12233b; }
      .npk-size-n { display: block; font-size: 15.5px; font-weight: 800; color: #141414; line-height: 1.2; }
      .npk-size-p { display: block; font-size: 12.5px; color: #6b6b6b; margin-top: 3px; }
      .npk-size.is-active .npk-size-n, .npk-size.is-active .npk-size-p { color: #fff; }
      .npk-size.is-active .npk-size-p { opacity: .85; }
      .npk-size .npk-size-p .amount { color: inherit; }
      .npk-best { position: absolute; top: -10px; left: 50%; transform: translateX(-50%);
                  background: #1f9d55; color: #fff; font-size: 10.5px; font-weight: 800; letter-spacing: .02em;
                  padding: 2px 9px; border-radius: 999px; white-space: nowrap; }

      .npk-colors { display: flex; flex-wrap: wrap; gap: 8px; }
      .npk-color { display: block; width: 62px; height: 62px; border: 1px solid #e2e2e2; border-radius: 8px;
                   overflow: hidden; background: #f4f4f4; }
      .npk-color img { width: 100%; height: 100%; object-fit: cover; display: block; }
      .npk-color:hover { border-color: #9a9a9a; }
      .npk-color.is-active { border: 2px solid #141414; }
      .npk-color-txt { display: flex; width: 100%; height: 100%; align-items: center; justify-content: center;
                       font-size: 10px; line-height: 1.2; text-align: center; color: #6b6b6b; padding: 4px; box-sizing: border-box; }

      @media (max-width: 560px) {
        .npk-sizes { grid-template-columns: repeat(3, 1fr); gap: 8px; }
        .npk-size { padding: 10px 4px; }
        .npk-size-n { font-size: 14px; }
        .npk-size-p { font-size: 11px; }
        .npk-colors { flex-wrap: nowrap; overflow-x: auto; -webkit-overflow-scrolling: touch; scrollbar-width: none; padding-bottom: 2px; }
        .npk-colors::-webkit-scrollbar { display: none; }
        .npk-color { flex: 0 0 56px; width: 56px; height: 56px; }
      }
    </style>
    <?php
}
add_action( 'woocommerce_single_product_summary', 'noriks_render_pack_switcher', 24 );

/** Indeks se osvjezi kad se proizvod spremi. */
function noriks_pack_index_flush() { delete_transient( NORIKS_PACK_TRANSIENT ); }
add_action( 'save_post_product', 'noriks_pack_index_flush' );
add_action( 'woocommerce_update_product', 'noriks_pack_index_flush' );
