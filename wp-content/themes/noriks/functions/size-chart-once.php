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
        // NORIKS Polo: velicina po visini i tezini (S–5XL), iz kalkulatora originala.
        if ( function_exists( 'noriks_is_type' ) && noriks_is_type( 'polo' ) ) {
            get_template_part( 'template_parts/size-chart-polo' );
            return;
        }
        // NORIKS TitaniumPan: velicine tave 26 / 28 / 30 cm (porcije, jaja) iz vodica originala.
        if ( function_exists( 'noriks_is_type' ) && noriks_is_type( 'titaniumpan' ) ) {
            get_template_part( 'template_parts/size-chart-titaniumpan' );
            return;
        }
        // NORIKS Harness: velicine XS–XL po opsegu prsa i pasmine iz tablice originala.
        if ( function_exists( 'noriks_is_type' ) && noriks_is_type( 'harness' ) ) {
            get_template_part( 'template_parts/size-chart-harness' );
            return;
        }
        // NORIKS Slippers: EU 34–35 do 48–49 po duljini stopala (cm) + UK/US velicine iz tablice originala.
        if ( function_exists( 'noriks_is_type' ) && noriks_is_type( 'slippers' ) ) {
            get_template_part( 'template_parts/size-chart-slippers' );
            return;
        }
        // NORIKS AnkleSleeve: S/M/L po broju cipele (EU) iz tablice originala.
        if ( function_exists( 'noriks_is_type' ) && noriks_is_type( 'anklesleeve' ) ) {
            get_template_part( 'template_parts/size-chart-anklesleeve' );
            return;
        }
        // NORIKS CorkSandals: EU 36–46 po unutarnjoj duljini (cm) + US velicine iz tablice originala.
        if ( function_exists( 'noriks_is_type' ) && noriks_is_type( 'corksandals' ) ) {
            get_template_part( 'template_parts/size-chart-corksandals' );
            return;
        }
        // NORIKS Raincoat: jedna velicina (EU 36–50), mjere jakne iz tablice originala.
        if ( function_exists( 'noriks_is_type' ) && noriks_is_type( 'raincoat' ) ) {
            get_template_part( 'template_parts/size-chart-raincoat' );
            return;
        }
        // NORIKS Doggo: mjere kreveta M / XL u cm i pasmine.
        if ( function_exists( 'noriks_is_type' ) && noriks_is_type( 'doggo' ) ) {
            get_template_part( 'template_parts/size-chart-doggo' );
            return;
        }
        // NORIKS Tuck: struk i bokovi u cm, EU velicina (S–XXL).
        if ( function_exists( 'noriks_is_type' ) && noriks_is_type( 'tuck' ) ) {
            get_template_part( 'template_parts/size-chart-tuck' );
            return;
        }
        // NORIKS FleeceTights: struk, bokovi i duljina noge u cm (XXS/XS–4XL/5XL), 1:1 s originala.
        if ( function_exists( 'noriks_is_type' ) && noriks_is_type( 'fleecetights' ) ) {
            get_template_part( 'template_parts/size-chart-fleecetights' );
            return;
        }
        // NORIKS SmartJacket: opseg prsa i trbuha, duljina i rukav u cm (XS–4XL), 1:1 s originala.
        if ( function_exists( 'noriks_is_type' ) && noriks_is_type( 'smartjacket' ) ) {
            get_template_part( 'template_parts/size-chart-smartjacket' );
            return;
        }
        // NORIKS SculptBrief: opseg struka u cm (XS–5XL), 1:1 s originala.
        if ( function_exists( 'noriks_is_type' ) && noriks_is_type( 'sculptbrief' ) ) {
            get_template_part( 'template_parts/size-chart-sculptbrief' );
            return;
        }
        // NORIKS SupportSocks: veličina prema broju cipela (M / L / XL).
        if ( function_exists( 'noriks_is_type' ) && noriks_is_type( 'supportsocks' ) ) {
            get_template_part( 'template_parts/size-chart-supportsocks' );
            return;
        }
        // NORIKS FloatSuit: tablica po dobi djeteta (90–120).
        if ( function_exists( 'noriks_is_type' ) && noriks_is_type( 'floatsuit' ) ) {
            get_template_part( 'template_parts/size-chart-floatsuit' );
            return;
        }
        // GelSeat i KneeTape nemaju velicina.
        if ( function_exists( 'noriks_is_type' ) && ( noriks_is_type( 'gelseat' ) || noriks_is_type( 'kneetape' ) || noriks_is_type( 'phonestrap' ) || noriks_is_type( 'winecooler' ) || noriks_is_type( 'bracelet' ) || noriks_is_type( 'seatcover' ) ) ) { return; }
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
