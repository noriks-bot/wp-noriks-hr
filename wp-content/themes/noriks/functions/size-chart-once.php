<?php
/**
 * Tabela velikosti se sme izrisati SAMO enkrat na stran.
 *
 * Prej so jo vkljucevala tri mesta (functions.php, price.php, single_product_mods.php),
 * zato so na kompletih nastali podvojeni ID-ji #custom-size-chart-modal in klik na
 * spodnjo povezavo je odprl obe tabeli hkrati.
 */

if ( ! defined( 'ABSPATH' ) ) { exit; }

if ( ! function_exists( 'noriks_size_chart_once' ) ) {
    function noriks_size_chart_once() {
        static $done = false;
        if ( $done ) { return; }
        $done = true;
        // Proizvodi bez velicina uopce nemaju tablicu — ne izrisuj je.
        if ( function_exists( 'noriks_is_type' ) && noriks_is_type( 'seal' ) ) { return; }
        // NORIKS FIT Woman: zenska tablica po opsegu grudi i struka, ne muska po visini i tezini.
        // NORIKS Slim: tablica po opsegu struka (XS–5XL).
        if ( function_exists( 'noriks_is_type' ) && noriks_is_type( 'slim' ) ) {
            get_template_part( 'template_parts/size-chart-slim' );
            return;
        }
        // KneeBrace: jedna velicina, nema tablice.
        if ( function_exists( 'noriks_is_type' ) && noriks_is_type( 'kneebrace' ) ) { return; }
        // Bowl nema velicina.
        if ( function_exists( 'noriks_is_type' ) && noriks_is_type( 'bowl' ) ) { return; }
        // Cloud / Cloth / HYD nemaju velicina — modal s tablicom majica se ne smije ispisati.
        if ( function_exists( 'noriks_is_type' ) && ( noriks_is_type( 'cloud' ) || noriks_is_type( 'cloath' ) || noriks_is_type( 'hyd' ) ) ) { return; }
        // NORIKS Relief: tablica po EU broju obuce.
        if ( function_exists( 'noriks_is_type' ) && noriks_is_type( 'relief' ) ) {
            get_template_part( 'template_parts/size-chart-relief' );
            return;
        }
        // NORIKS BuildShirt: tablica po visini i tezini modela (XS–6XL).
        if ( function_exists( 'noriks_is_type' ) && noriks_is_type( 'buildshirt' ) ) {
            get_template_part( 'template_parts/size-chart-buildshirt' );
            return;
        }
        // NORIKS Hands: tablica po opsegu dlana (S–L).
        if ( function_exists( 'noriks_is_type' ) && noriks_is_type( 'hands' ) ) {
            get_template_part( 'template_parts/size-chart-hands' );
            return;
        }
        // NORIKS CelLeg: tablica po opsegu struka i bokova (XS–5XL).
        if ( function_exists( 'noriks_is_type' ) && noriks_is_type( 'celleg' ) ) {
            get_template_part( 'template_parts/size-chart-celleg' );
            return;
        }
        // NORIKS StepCloud: tablica po EU broju obuce.
        if ( function_exists( 'noriks_is_type' ) && noriks_is_type( 'stepcloud' ) ) {
            get_template_part( 'template_parts/size-chart-stepcloud' );
            return;
        }
        // NORIKS SlabProof: tablica po EU broju obuce (M–XL).
        if ( function_exists( 'noriks_is_type' ) && noriks_is_type( 'slabproof' ) ) {
            get_template_part( 'template_parts/size-chart-slabproof' );
            return;
        }
        // NORIKS Brassiere: tablica po sirini trake in opsegu grudi (XS–5XL).
        if ( function_exists( 'noriks_is_type' ) && noriks_is_type( 'brassiere' ) ) {
            get_template_part( 'template_parts/size-chart-brassiere' );
            return;
        }
        // NORIKS Blanket: tablica po duljini i sirini vrece (Djeca S – Odrasli L).
        if ( function_exists( 'noriks_is_type' ) && noriks_is_type( 'blanket' ) ) {
            get_template_part( 'template_parts/size-chart-blanket' );
            return;
        }
        // NORIKS BraTank: tablica po opsegu grudi i kosarici (S–4XL).
        if ( function_exists( 'noriks_is_type' ) && noriks_is_type( 'bratank' ) ) {
            get_template_part( 'template_parts/size-chart-bratank' );
            return;
        }
        // GelSeat i KneeTape nemaju velicina.
        if ( function_exists( 'noriks_is_type' ) && ( noriks_is_type( 'gelseat' ) || noriks_is_type( 'kneetape' ) ) ) { return; }
        if ( function_exists( 'noriks_is_type' ) && noriks_is_type( 'kompwom' ) ) {
            get_template_part( 'template_parts/size-chart-kompwom' );
            return;
        }
        get_template_part( 'template_parts/size-chart-modal' );
    }
}

if ( ! function_exists( 'noriks_size_chart_secondary_once' ) ) {
    function noriks_size_chart_secondary_once() {
        static $done = false;
        if ( $done ) { return; }
        $done = true;
        get_template_part( 'template_parts/size-chart-secondary' );
    }
}
