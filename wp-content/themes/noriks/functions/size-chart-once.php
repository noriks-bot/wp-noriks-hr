<?php
/**
 * Tabela velikosti se sme izrisati SAMO enkrat na stran.
 *
 * Prej so jo vkljucevala tri mesta (functions.php, price.php, single_product_mods.php),
 * zato so na kompletih nastali podvojeni ID-ji #custom-size-chart-modal in klik na
 * spodnjo povezavo je odprl obe tabeli hkrati.
 */

if ( ! defined( 'ABSPATH' ) ) { exit; }

/**
 * Univerzalno pravilo (22.10.2026, Dejan): proizvod bez velicina nema tablicu velicina.
 * Umjesto crne liste tipova provjeravamo ima li proizvod atribut s velicinom.
 */
if ( ! function_exists( 'noriks_ima_velicine' ) ) {
    function noriks_ima_velicine( $product_id = null ) {
        if ( ! function_exists( 'wc_get_product' ) ) { return false; }
        if ( ! $product_id && function_exists( 'noriks_resolve_product_id' ) ) { $product_id = noriks_resolve_product_id( $product_id ); }
        if ( ! $product_id ) { $product_id = get_the_ID(); }
        $product = $product_id ? wc_get_product( $product_id ) : null;
        if ( ! $product ) { return false; }
        $vzorec = '/veli[c\x{010d}\x{0107}]in|size|broj (cipel|obu)|\x{0161}tevilk/iu';
        foreach ( (array) $product->get_attributes() as $kljuc => $atribut ) {
            $ime = is_object( $atribut ) && method_exists( $atribut, 'get_name' ) ? $atribut->get_name() : (string) $kljuc;
            $oznaka = function_exists( 'wc_attribute_label' ) ? wc_attribute_label( $ime ) : $ime;
            if ( preg_match( $vzorec, $ime . ' ' . $oznaka ) ) { return true; }
        }
        if ( function_exists( 'noriks_product_type' ) ) {
            $tip = noriks_product_type( $product_id );
            if ( $tip && function_exists( 'noriks_' . str_replace( '-', '_', $tip ) . '_sizes' ) ) { return true; }
        }
        return false;
    }
}

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
        // NORIKS DogRaincoat: S–4XL po opsegu prsa, duljini leda i tezini psa + velicina po pasmini (1:1 s originalom).
        if ( function_exists( 'noriks_is_type' ) && noriks_is_type( 'dograincoat' ) ) {
            get_template_part( 'template_parts/size-chart-dograincoat' );
            return;
        }
        // NORIKS MaternityLeggings: S–XXL po opsegu bokova i duljini nogavice (slika tablice originala prevedena).
        if ( function_exists( 'noriks_is_type' ) && noriks_is_type( 'maternityleggings' ) ) {
            get_template_part( 'template_parts/size-chart-maternityleggings' );
            return;
        }
        // NORIKS MattressTopper: 5 velicin nadmadraca 90 x 190 … 198 x 203 cm (slika »Available sizes« originala).
        if ( function_exists( 'noriks_is_type' ) && noriks_is_type( 'mattresstopper' ) ) {
            get_template_part( 'template_parts/size-chart-mattresstopper' );
            return;
        }
        // NORIKS SilkBoxers: M–3XL po opsegu struka (cm + inci), savjet originala: izmedu velicina odaberite vecu.
        if ( function_exists( 'noriks_is_type' ) && noriks_is_type( 'silkboxers' ) ) {
            get_template_part( 'template_parts/size-chart-silkboxers' );
            return;
        }
        // NORIKS ModalSweatshirt: S–3XL po mjerama proizvoda (duljina leda, prsa, struk, rukav) + slika mjerenja.
        if ( function_exists( 'noriks_is_type' ) && noriks_is_type( 'modalsweatshirt' ) ) {
            get_template_part( 'template_parts/size-chart-modalsweatshirt' );
            return;
        }
        // NORIKS TechTee: S–4XL po opsegu prsa, visini i tezini (savjet originala: uobicajena velicina).
        if ( function_exists( 'noriks_is_type' ) && noriks_is_type( 'techtee' ) ) {
            get_template_part( 'template_parts/size-chart-techtee' );
            return;
        }
        // NORIKS WideToeShoes: EU 37–47 po duljini uloska (cm) + sirina, UK i US velicine iz tablice originala.
        if ( function_exists( 'noriks_is_type' ) && noriks_is_type( 'widetoeshoes' ) ) {
            get_template_part( 'template_parts/size-chart-widetoeshoes' );
            return;
        }
        // NORIKS ThermoBoots: EU 37–48 + UK, duljina stopala i unutarnja duljina cizme (cm) iz tablice originala.
        if ( function_exists( 'noriks_is_type' ) && noriks_is_type( 'thermoboots' ) ) {
            get_template_part( 'template_parts/size-chart-thermoboots' );
            return;
        }
        // NORIKS LeatherBoots: EU 37–48 + US (muska) in duljina stopala (cm) iz tablice originala.
        if ( function_exists( 'noriks_is_type' ) && noriks_is_type( 'leatherboots' ) ) {
            get_template_part( 'template_parts/size-chart-leatherboots' );
            return;
        }
        // NORIKS DogBed: M / L / XL / 2XL po vanjskih merah, prostoru za lezanje, duljini in tezi psa (z originala).
        if ( function_exists( 'noriks_is_type' ) && noriks_is_type( 'dogbed' ) ) {
            get_template_part( 'template_parts/size-chart-dogbed' );
            return;
        }
        // NORIKS SlingBag: Mini / Regular / Max po merah torbice (cm), remen do 130 cm, kaj stane (z originala).
        if ( function_exists( 'noriks_is_type' ) && noriks_is_type( 'slingbag' ) ) {
            get_template_part( 'template_parts/size-chart-slingbag' );
            return;
        }
        // NORIKS ComfortJeans: XXS–XXL po opsegu struka i bokova + mjere hlaca, duljina 26–36 po visini (z originala).
        if ( function_exists( 'noriks_is_type' ) && noriks_is_type( 'comfortjeans' ) ) {
            get_template_part( 'template_parts/size-chart-comfortjeans' );
            return;
        }
        // NORIKS HoodieDress: S–3XL po EU velicini, opsegu struka i prsa (»uzmite svoju uobicajenu velicinu hudice«).
        if ( function_exists( 'noriks_is_type' ) && noriks_is_type( 'hoodiedress' ) ) {
            get_template_part( 'template_parts/size-chart-hoodiedress' );
            return;
        }
        // NORIKS MinimizerBra: traka EU 70–115 x kosarica B–I po opsegu ispod grudi i opsegu grudi (cm) iz tablice originala.
        if ( function_exists( 'noriks_is_type' ) && noriks_is_type( 'minimizerbra' ) ) {
            get_template_part( 'template_parts/size-chart-minimizerbra' );
            return;
        }
        // NORIKS CashmereSweater: jedna velicina M (US 6–10), mjere proizvoda i tijela iz »SIZE GUIDE« originala.
        if ( function_exists( 'noriks_is_type' ) && noriks_is_type( 'cashmeresweater' ) ) {
            get_template_part( 'template_parts/size-chart-cashmeresweater' );
            return;
        }
        // NORIKS NursingBra: velicina S–4XL po kosarici (EU B–K) in traki EU 60–110 (UK 28–48) iz tablice originala.
        if ( function_exists( 'noriks_is_type' ) && noriks_is_type( 'nursingbra' ) ) {
            get_template_part( 'template_parts/size-chart-nursingbra' );
            return;
        }
        // NORIKS HikingShoes: EU 36–46 po duljini stopala (peta–prst, cm), UK i US velicine iz tablice originala.
        if ( function_exists( 'noriks_is_type' ) && noriks_is_type( 'hikingshoes' ) ) {
            get_template_part( 'template_parts/size-chart-hikingshoes' );
            return;
        }
        // NORIKS OrthoMules: EU 35–43 + US/UK velicine iz tablice originala.
        if ( function_exists( 'noriks_is_type' ) && noriks_is_type( 'orthomules' ) ) {
            get_template_part( 'template_parts/size-chart-orthomules' );
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
        // NORIKS Hoodie: mjere proizvoda u cm po visini (do 157 cm ... od 198 cm), 1:1 s originala.
        if ( function_exists( 'noriks_is_type' ) && noriks_is_type( 'hoodie' ) ) {
            get_template_part( 'template_parts/size-chart-hoodie' );
            return;
        }
        // NORIKS UtilityPants: struk, bokovi, visina, duljina i unutarnja duljina nogavice u cm (S–3XL), 1:1 s originala.
        if ( function_exists( 'noriks_is_type' ) && noriks_is_type( 'utilitypants' ) ) {
            get_template_part( 'template_parts/size-chart-utilitypants' );
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
        if ( function_exists( 'noriks_is_type' ) && ( noriks_is_type( 'gelseat' ) || noriks_is_type( 'kneetape' ) || noriks_is_type( 'phonestrap' ) || noriks_is_type( 'winecooler' ) || noriks_is_type( 'bracelet' ) || noriks_is_type( 'seatcover' ) || noriks_is_type( 'catfountain' ) || noriks_is_type( 'dishsheets' ) || noriks_is_type( 'litterbox' ) || noriks_is_type( 'sleepearplugs' ) || noriks_is_type( 'travelpillow' ) || noriks_is_type( 'fleeceshawl' ) || noriks_is_type( 'bottlesling' ) || noriks_is_type( 'antitheftbag' ) || noriks_is_type( 'showertowel' ) || noriks_is_type( 'petdental' ) || noriks_is_type( 'calmingcollar' ) || noriks_is_type( 'therapillow' ) || noriks_is_type( 'grillbasket' ) || noriks_is_type( 'pethairglove' ) || noriks_is_type( 'dualpillow' ) || noriks_is_type( 'vacuumsealer' ) || noriks_is_type( 'airtravel' ) ) ) { return; }
        if ( function_exists( 'noriks_is_type' ) && noriks_is_type( 'kompwom' ) ) {
            get_template_part( 'template_parts/size-chart-kompwom' );
            return;
        }
        // Brez velikosti ni privzete tabele majic (Dejan, 22.10.2026).
        if ( function_exists( 'noriks_ima_velicine' ) && ! noriks_ima_velicine() ) { return; }
        get_template_part( 'template_parts/size-chart-modal' );
    }
}

if ( ! function_exists( 'noriks_size_chart_secondary_once' ) ) {
    function noriks_size_chart_secondary_once() {
        static $done = false;
        if ( $done ) { return; }
        // Brez velikosti tudi sekundarne tabele ni (Dejan, 22.10.2026).
        if ( function_exists( 'noriks_ima_velicine' ) && ! noriks_ima_velicine() ) { return; }
        $done = true;
        get_template_part( 'template_parts/size-chart-secondary' );
    }
}
