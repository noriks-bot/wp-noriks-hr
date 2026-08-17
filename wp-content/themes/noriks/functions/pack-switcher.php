<?php
/**
 * Prebacivanje paketa na stranicama paketa (majice, bokserice, …).
 *
 *   - red "Odaberi paket": sve velicine koje grupa ima (3/6/9/12/15 …), s cijenom po komadu
 *   - red "Boja": svi paketi ISTE velicine (druge kombinacije boja), trenutni oznacen
 *
 * PRENOSIVOST NA DRUGA TRZISTA — nista se ne cita iz naslova proizvoda ni iz
 * tvrdo upisanih slugova. Velicina i grupa se izvode iz STRUKTURE kategorija:
 *
 *   product_cat s roditeljem  +  broj u slugu   =>  "velicinska" kategorija
 *   broj iz sluga                               =>  broj komada u paketu
 *   ID roditeljske kategorije                   =>  grupa (majice / bokserice / …)
 *
 * Tako radi na svim jezicima bez ijedne izmjene:
 *   HR  6-paket-majice   (roditelj: majice)
 *   SI  6-paket-majic    (roditelj: majice)
 *   PL  pakiet-6-szt     (roditelj: koszulki)
 *
 * Ista kombinacija boja kroz velicine prepoznaje se po SKU-u (SKU je isti na svim
 * trzistima), npr. NORIKS-ALL-BLACK-6-PACK i NORIKS-ALL-BLACK-9-PACK => ALL-BLACK.
 * Ako te kombinacije nema u ciljanoj velicini, vodi na prvi paket te velicine.
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

const NORIKS_PACK_TRANSIENT = 'noriks_pack_index_v2';
const NORIKS_PACK_MIN_SIZE  = 1;    // ukljucuje i "1 komad" — i s jedne majice se nudi 3/6/9/12…
const NORIKS_PACK_MAX_SIZE  = 20;   // iznad toga to nije paket (npr. "komplet-25")

/**
 * Broj komada iz sluga kategorije — samo ako slug ima TOCNO JEDAN broj u razumnom
 * rasponu. Tako otpadaju kombinirani setovi ("komplet-5-5", "komplet-4-10",
 * "komplet-25") koji nisu paketi jedne vrste proizvoda.
 * @return int  0 ako slug nije velicinska kategorija
 */
function noriks_pack_size_from_slug( $slug ) {
    if ( ! preg_match_all( '/\d+/', (string) $slug, $m ) ) { return 0; }
    if ( count( $m[0] ) !== 1 ) { return 0; }
    $size = (int) $m[0][0];
    if ( $size < NORIKS_PACK_MIN_SIZE || $size > NORIKS_PACK_MAX_SIZE ) { return 0; }
    return $size;
}

/**
 * Velicinska kategorija proizvoda: dijete neke kategorije, sa brojem u slugu.
 * @return array|null  ['size' => int, 'group' => int(parent term id), 'term' => WP_Term]
 */
function noriks_pack_meta( $product_id ) {
    $terms = get_the_terms( $product_id, 'product_cat' );
    if ( empty( $terms ) || is_wp_error( $terms ) ) { return null; }

    $best = null;
    foreach ( $terms as $t ) {
        if ( (int) $t->parent === 0 ) { continue; }        // grupa mora imati roditelja
        $size = noriks_pack_size_from_slug( $t->slug );
        if ( $size === 0 ) { continue; }
        // ako ih je vise, uzmi onu s najvecim brojem djece istog roditelja (prava velicinska grana)
        if ( $best === null || $size > $best['size'] ) {
            $best = array( 'size' => $size, 'group' => (int) $t->parent, 'term' => $t );
        }
    }
    return $best;
}

/** "Obitelj" (kombinacija boja) iz SKU-a: NORIKS-ALL-BLACK-6-PACK => noriks-all-black */
function noriks_pack_family_key( $sku ) {
    $s = strtoupper( (string) $sku );
    if ( $s === '' ) { return ''; }
    $s = preg_replace( '/[-_]?\d+[-_]?(PACK|PAKET|PAKIET|SZT|KOM|KOS)S?\b/', '', $s ); // -6-PACK, -12-SZT …
    $s = preg_replace( '/[-_](DOZEN|PACK|PAKET)\b/', '', $s );                          // -DOZEN, -PACK
    return strtolower( trim( $s, '-_ ' ) );
}

/**
 * Indeks paketa po grupama: [group_term_id][size] => lista proizvoda.
 * Gradi se iz svih "velicinskih" kategorija (dijete + broj u slugu).
 */
function noriks_pack_index() {
    $cached = get_transient( NORIKS_PACK_TRANSIENT );
    if ( is_array( $cached ) ) { return $cached; }

    $index = array();
    $terms = get_terms( array( 'taxonomy' => 'product_cat', 'hide_empty' => true ) );
    if ( is_wp_error( $terms ) ) { return $index; }

    foreach ( $terms as $t ) {
        if ( (int) $t->parent === 0 ) { continue; }
        $size = noriks_pack_size_from_slug( $t->slug );
        if ( $size === 0 ) { continue; }

        $ids = get_posts( array(
            'post_type'      => 'product',
            'post_status'    => 'publish',
            'posts_per_page' => 60,
            'fields'         => 'ids',
            'no_found_rows'  => true,
            'tax_query'      => array( array(
                'taxonomy' => 'product_cat', 'field' => 'term_id', 'terms' => (int) $t->term_id,
            ) ),
        ) );
        foreach ( $ids as $id ) {
            $product = wc_get_product( $id );
            if ( ! $product || ! $product->is_visible() ) { continue; }
            $price = (float) $product->get_price();
            $index[ (int) $t->parent ][ $size ][] = array(
                'id'     => $id,
                'sku'    => $product->get_sku(),
                'family' => noriks_pack_family_key( $product->get_sku() ),
                'label'  => get_the_title( $id ),
                'url'    => get_permalink( $id ),
                'img'    => get_the_post_thumbnail_url( $id, 'woocommerce_thumbnail' ),
                'price'  => $price,
                'ppu'    => $size > 0 ? $price / $size : 0,
            );
        }
    }
    foreach ( $index as $g => $sizes ) {
        ksort( $index[ $g ], SORT_NUMERIC );
        foreach ( $sizes as $s => $list ) {
            usort( $index[ $g ][ $s ], function ( $a, $b ) { return strcmp( (string) $a['sku'], (string) $b['sku'] ); } );
        }
    }
    set_transient( NORIKS_PACK_TRANSIENT, $index, 10 * MINUTE_IN_SECONDS );
    return $index;
}

/**
 * Cilj kad se mijenja velicina: ista kombinacija (SKU obitelj); ako je nema,
 * ona s najduzim zajednickim pocetkom SKU-a; tek na kraju prvi paket te velicine.
 */
function noriks_pack_target( $list, $family ) {
    if ( empty( $list ) ) { return null; }
    if ( $family !== '' ) {
        foreach ( $list as $p ) {
            if ( $p['family'] === $family ) { return $p; }
        }
        $best = null; $best_score = 0;
        foreach ( $list as $p ) {
            $n = 0; $max = min( strlen( $p['family'] ), strlen( $family ) );
            while ( $n < $max && $p['family'][ $n ] === $family[ $n ] ) { $n++; }
            if ( $n > $best_score ) { $best_score = $n; $best = $p; }
        }
        if ( $best && $best_score >= 8 ) { return $best; }   // npr. "noriks-a…" ni dovolj
    }
    return $list[0];
}

function noriks_render_pack_switcher() {
    global $product;
    if ( ! $product instanceof WC_Product ) { return; }

    $id = $product->get_id();

    // Samo webshop asortiman (majice/bokserice paketi) — nikad orto proizvodi.
    if ( function_exists( 'noriks_is_type' ) && noriks_is_type( 'orto', $id ) ) { return; }

    $meta = noriks_pack_meta( $id );
    if ( ! $meta ) { return; }

    $index = noriks_pack_index();
    if ( empty( $index[ $meta['group'] ] ) ) { return; }

    $sizes  = $index[ $meta['group'] ];
    $size   = $meta['size'];
    $family = noriks_pack_family_key( $product->get_sku() );
    $same   = isset( $sizes[ $size ] ) ? $sizes[ $size ] : array();

    // Proizvod mora i sam biti dio te ponude (skriveni upsell/mystery artikli
    // nose istu kategoriju, ali nisu dio izbora paketa).
    $in_list = false;
    foreach ( $same as $p ) {
        if ( (int) $p['id'] === (int) $id ) { $in_list = true; break; }
    }
    if ( ! $in_list ) { return; }

    if ( count( $sizes ) < 2 && count( $same ) < 2 ) { return; }

    $keys      = array_values( array_filter( array_keys( $sizes ), function ( $k ) { return (int) $k > 1; } ) );
    $last_size = $keys ? end( $keys ) : 0;
    $shown     = count( $keys );
    ?>
    <div class="npk">

        <?php if ( $shown > 1 ) : ?>
        <div class="npk-block">
            <div class="npk-label"><?php esc_html_e( 'Odaberi paket', 'noriks' ); ?></div>
            <div class="npk-sizes">
                <?php foreach ( $sizes as $s => $list ) :
                    if ( (int) $s < 2 ) { continue; }   // "1-paket" nikad ne prikazujemo
                    $t = noriks_pack_target( $list, $family );
                    if ( ! $t ) { continue; }
                    $is_cur = ( (int) $s === (int) $size );
                    $ppu    = $is_cur ? ( (float) $product->get_price() / max( 1, $size ) ) : $t['ppu'];
                    ?>
                    <a class="npk-size<?php echo $is_cur ? ' is-active' : ''; ?>"
                       href="<?php echo esc_url( $is_cur ? get_permalink( $id ) : $t['url'] ); ?>"
                       <?php echo $is_cur ? 'aria-current="true"' : ''; ?>>
                        <?php if ( (int) $s === (int) $last_size && ! $is_cur ) : ?>
                            <span class="npk-best"><?php esc_html_e( 'Najbolja cijena', 'noriks' ); ?></span>
                        <?php endif; ?>
                        <span class="npk-size-n"><?php echo (int) $s; ?>-<?php esc_html_e( 'paket', 'noriks' ); ?></span>
                        <span class="npk-size-p"><?php echo wp_kses_post( wc_price( $ppu ) ); ?> <?php esc_html_e( 'po komadu', 'noriks' ); ?></span>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
        <?php endif; ?>

        <?php if ( count( $same ) > 1 ) : ?>
        <div class="npk-block">
            <div class="npk-label"><?php esc_html_e( 'Boja', 'noriks' ); ?></div>
            <div class="npk-colors">
                <?php foreach ( $same as $p ) :
                    $is_cur = ( (int) $p['id'] === (int) $id ); ?>
                    <a class="npk-color<?php echo $is_cur ? ' is-active' : ''; ?>"
                       href="<?php echo esc_url( $p['url'] ); ?>"
                       title="<?php echo esc_attr( $p['label'] ); ?>">
                        <?php if ( $p['img'] ) : ?>
                            <img src="<?php echo esc_url( $p['img'] ); ?>" alt="<?php echo esc_attr( $p['label'] ); ?>" loading="lazy">
                        <?php else : ?>
                            <span class="npk-color-txt"><?php echo esc_html( mb_substr( $p['label'], 0, 14 ) ); ?></span>
                        <?php endif; ?>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
        <?php endif; ?>

    </div>

    <style>
      .npk { margin: 8px 0 20px; }
      .npk-block { margin-bottom: 18px; }
      .npk-label { font-size: 15px; font-weight: 800; color: #141414; margin: 0 0 10px; }

      /* velicine paketa — ravni robovi, kao i gumbi za velicinu ispod */
      .npk-sizes { display: grid; grid-auto-flow: column; grid-auto-columns: 1fr; gap: 10px; padding-top: 12px; }
      .npk-size { position: relative; display: flex; flex-direction: column; justify-content: center;
                  min-height: 62px; min-width: 0; text-align: center; text-decoration: none;
                  border: 1px solid #d7d7d7; border-radius: 0; padding: 12px 6px; background: #fff;
                  transition: border-color .15s, background .15s; }
      .npk-size:hover { border-color: #141414; }
      .npk-size.is-active { background: #12233b; border-color: #12233b; }
      /* pisava se skrci s sirino stolpca, da tekst nikoli ne izpade iz kartice */
      .npk-size-n { display: block; font-size: clamp(14px, 1.35vw, 18px); font-weight: 800; color: #141414; line-height: 1.15; }
      .npk-size-p { display: block; font-size: clamp(10.5px, 1.02vw, 13px); color: #6b6b6b; margin-top: 4px;
                    line-height: 1.25; white-space: normal; overflow-wrap: anywhere; }
      .npk-size.is-active .npk-size-n, .npk-size.is-active .npk-size-p,
      .npk-size.is-active .npk-size-p .amount, .npk-size.is-active .npk-size-p bdi { color: #fff !important; }
      .npk-size.is-active .npk-size-p { opacity: .92; }
      .npk-best { position: absolute; top: -11px; left: 50%; transform: translateX(-50%);
                  background: #1f9d55; color: #fff; font-size: 11px; font-weight: 800;
                  padding: 3px 10px; border-radius: 0; white-space: nowrap; letter-spacing: .01em; }

      /* boje — kvadratne plocice */
      .npk-colors { display: flex; flex-wrap: wrap; gap: 10px; }
      .npk-color { display: block; width: 78px; height: 78px; border: 1px solid #e2e2e2; border-radius: 0;
                   overflow: hidden; background: #f4f4f4; transition: border-color .15s; }
      .npk-color img { width: 100%; height: 100%; object-fit: cover; display: block; }
      .npk-color:hover { border-color: #9a9a9a; }
      .npk-color.is-active { border: 2px solid #141414; }
      .npk-color-txt { display: flex; width: 100%; height: 100%; align-items: center; justify-content: center;
                       font-size: 10.5px; line-height: 1.2; text-align: center; color: #6b6b6b; padding: 4px; box-sizing: border-box; }

      @media (min-width: 1024px) {
        .npk-label { font-size: 16px; }
        .npk-size { min-height: 70px; padding: 12px 8px; }
        .npk-color { width: 86px; height: 86px; }
      }

      @media (max-width: 700px) {
        .npk-sizes { grid-auto-flow: row; grid-template-columns: repeat(3, 1fr); gap: 8px; }
      }
      @media (max-width: 560px) {
        .npk-sizes { gap: 8px; }
        .npk-size { min-height: 56px; padding: 10px 4px; }
        .npk-size-n { font-size: 14.5px; }
        .npk-size-p { font-size: 11px; }
        .npk-colors { flex-wrap: nowrap; overflow-x: auto; -webkit-overflow-scrolling: touch; scrollbar-width: none; padding-bottom: 2px; }
        .npk-colors::-webkit-scrollbar { display: none; }
        .npk-color { flex: 0 0 62px; width: 62px; height: 62px; }
      }
    </style>
    <?php
}
add_action( 'woocommerce_single_product_summary', 'noriks_render_pack_switcher', 24 );

/** Indeks se osvjezi kad se proizvod ili kategorija promijeni. */
function noriks_pack_index_flush() { delete_transient( NORIKS_PACK_TRANSIENT ); }
add_action( 'save_post_product', 'noriks_pack_index_flush' );
add_action( 'woocommerce_update_product', 'noriks_pack_index_flush' );
add_action( 'edited_product_cat', 'noriks_pack_index_flush' );
