<?php
/**
 * NORIKS ThermaBoots - zimske vodootporne cizme s runom (orto-boots) - why sekcije po natancni strukturi originala
 * (thermafits.com/products/thermaboots-fleeced-waterproof-boots).
 *
 * STRUKTURA ORIGINALA:
   1. glavni del ob nakupu: 3 alineje s kljukicami (100% vodootporne, podstava od runa, lagane + protuklizni potplat) in slika z oznakami (runo, vodootporne, potplat, lagane) - pri nas slika LEVO (slika 2 galerije, prevedena v HR s Higgsfieldom), besedilo DESNO s 4 lastnostmi z ikonami + materiali iz FAQ originala
   2. glavni del: modalna tablica velicin (EU / UK / duzina stopala cm / unutarnja duzina cm, EU 37 do 48) - pri nas besedilo s kljukicami levo, tabela desno, samo EU in cm (brez UK)
   3. "Reasons Why You'll Love it...": naslov + 4 kartice v vrsti (ikona zgoraj, naslov, besedilo: toplina cijeli dan, navlacenje sa zatvaracem, potpora gleznja, unisex) - pri nas naslov + mreza 4 kartic s SVG ikonami
   4. "30-Day Risk Free Trial": znacka + naslov + besedilo sredinsko - pri nas sredinsko: ikona v krogu, naslov, besedilo, 3 tocke (NORIKS 30 dana za povrat)
   5. "Testimonials": drsnik 3 kartic (fotografija kupca, zvezdice, citat, naslov, besedilo, ime) - pri nas karusel 3 kartic z istimi fotografijami (znamka na cizmi -> NORIKS, Higgsfield), hrvaska imena
   6. FAQ "Frequently Asked Questions" (15 vprasanj) - pri nas v FAQ Informacije o proizvodu pod mnenji (reviews.php $boots_faq), brez rokavic kot darila, brez tujega e-naslova
   7. "Customer Reviews" (ocene kupcev) - pri nas mnenja pod why (auto_reviews/HR_boots.php), ocena 4,8
   8. NORIKS pogoji (skupni del noriks-pogoji.php)
 * BARVA ORIGINALA: #e8651f (oranzna akcentna barva originala - znacke, puscice in naslovi na slikah); svetel ton za --bg #fcf1ea
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
$tb_u = get_template_directory_uri() . '/img/boots/';
$tb_svg = function ( $d, $s = 24 ) {
	return '<svg viewBox="0 0 24 24" width="' . $s . '" height="' . $s . '" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">' . $d . '</svg>';
};
$tb_ik = array(
	'kapljica' => '<path d="M12 3c3.5 4.2 6 7.4 6 10.5a6 6 0 0 1-12 0C6 10.4 8.5 7.2 12 3z"/><path d="M9.5 14.5a2.6 2.6 0 0 0 2.5 2.4"/>',
	'runo'     => '<path d="M4 10c1.2-1.6 2.8-1.6 4 0 1.2-1.6 2.8-1.6 4 0 1.2-1.6 2.8-1.6 4 0 1.2-1.6 2.8-1.6 4 0"/><path d="M4 15c1.2-1.6 2.8-1.6 4 0 1.2-1.6 2.8-1.6 4 0 1.2-1.6 2.8-1.6 4 0 1.2-1.6 2.8-1.6 4 0"/><path d="M4 20h16"/>',
	'pero'     => '<path d="M20 4C10 4 5 10 5 19"/><path d="M5 19c6 0 12-4 14-12"/><path d="M9 15h5"/>',
	'potplat'  => '<path d="M4 16h16"/><path d="M5 19h14"/><path d="M7 13l2-2 2 2 2-2 2 2 2-2"/>',
	'plamen'   => '<path d="M12 3c1 3.5 5 5.5 5 10a5 5 0 0 1-10 0c0-2.3 1.2-3.8 2.4-5 .2 1.6 1 2.6 2 3 .3-2.8.6-5.3.6-8z"/>',
	'zip'      => '<path d="M9 3v18"/><path d="M9 6h3M9 9h3M9 12h3M9 15h3"/><rect x="11" y="16" width="4" height="5" rx="1"/>',
	'glezanj'  => '<path d="M9 3v8.5c0 1.4-.6 2.3-1.8 3.2L5 16.5V20h14v-2.2c0-1.6-1-2.6-2.6-3.1L13 13.5V3"/><path d="M9 7h4"/>',
	'ljudi'    => '<circle cx="8" cy="6" r="2.2"/><circle cx="16" cy="6" r="2.2"/><path d="M5 21v-6l-1-4h8l-1 4v6"/><path d="M14 21v-5h4v5M13 11h6l1 5"/>',
	'stit'     => '<path d="M12 3l7 3v5.5c0 4.4-3 8-7 9.5-4-1.5-7-5.1-7-9.5V6l7-3z"/><path d="M9 12l2 2 4-4"/>',
	'povrat'   => '<path d="M4 12a8 8 0 1 0 2.4-5.7"/><path d="M4 4v4.5h4.5"/><path d="M12 8v4l2.6 2"/>',
	'zamjena'  => '<path d="M4 8h13l-3-3"/><path d="M20 16H7l3 3"/>',
	'novac'    => '<rect x="2.5" y="6.5" width="19" height="11" rx="2"/><circle cx="12" cy="12" r="2.6"/><path d="M6 9.5v5M18 9.5v5"/>',
	'metar'    => '<rect x="2.5" y="8" width="19" height="8" rx="1.5"/><path d="M6.5 8v3M10 8v4M13.5 8v3M17 8v4"/>',
);
$tb_li = function ( $ik, $naslov, $tekst ) use ( $tb_svg, $tb_ik ) {
	return '<li><span class="wsboots__fi">' . $tb_svg( $tb_ik[ $ik ] ) . '</span><div><strong>' . esc_html( $naslov ) . '</strong><p>' . esc_html( $tekst ) . '</p></div></li>';
};
$tb_razlozi = array(
	array( 'plamen', 'Toplina cijeli dan', 'Plišana podstava od runa drži stopala toplima i udobnima i na temperaturama ispod nule. Stvorene za hladna jutra, duge šetnje i zimski put na posao. Bez hladnih stopala, bez kompromisa.' ),
	array( 'zip', 'Obuvate ih za 3 sekunde', 'Bočni zatvarač znači da ste spremni za izlazak za tri sekunde. Bez saginjanja, bez vezica, bez muke. Savršeno za užurbana jutra i brze izlaske.' ),
	array( 'glezanj', 'Potpora gležnja i stabilnost', 'Dizajnirane da prekriju gležanj za dodatnu potporu na neravnom terenu. Idealne za osobe sa slabijim gležnjevima i za sve koji žele sigurnost u svakom koraku.' ),
	array( 'ljudi', 'Unisex – za sve', 'Stvorene i za muškarce i za žene koji ne žele birati između izgleda i udobnosti. Jedna čizma za posao, šetnje i vikende.' ),
);
$tb_velicine = array(
	array( '37', '22,8', '23,8' ), array( '38', '23,4', '24,4' ), array( '39', '24,0', '25,0' ), array( '40', '24,6', '25,6' ),
	array( '41', '25,2', '26,2' ), array( '42', '25,8', '26,8' ), array( '43', '26,4', '27,4' ), array( '44', '27,0', '28,0' ),
	array( '45', '27,6', '28,6' ), array( '46', '28,2', '29,2' ), array( '47', '28,8', '29,8' ), array( '48', '29,4', '30,4' ),
);
$tb_mnenja = array(
	array( 'noriks-boots-mnenje-1.webp', 'Kupit ću još jedan par!', 'Nisam mislila da čizme koje se samo navuku mogu biti ovako tople i vodootporne. Stopala su mi cijeli dan topla i bez debelih čarapa. Kiša i lokve nemaju šanse.', 'Karmen', 'Crna' ),
	array( 'noriks-boots-mnenje-2.webp', 'Vrijede svaki cent', 'Nisam znao što očekivati, ali ove čizme su me stvarno iznenadile. Prvi put sam ih nosio po kiši i stopala su ostala potpuno suha. Savršene za hladna i vlažna jutra.', 'Andrej', 'Smeđa' ),
	array( 'noriks-boots-mnenje-3.webp', 'Točno kako je opisano', 'Stvarno sam zadovoljan. Stopala su topla i suha, a čizme nisu ni glomazne ni teške. Dobro pristaju, lijepo izgledaju i rade točno ono što obećavaju. Savršene za rad vani i šetnje sa psom.', 'Stjepan', 'Crna' ),
);
?>
<div class="wsboots">
<section class="wsboots__s wsboots__s--bg"><div class="wsboots__v wsboots__dva"><div class="wsboots__media"><img src="<?php echo esc_url( $tb_u . 'noriks-boots-runo-vodootporne.webp' ); ?>" alt="Crna NORIKS ThermaBoots čizma s oznakama: podstava od runa, 100% vodootporne, protuklizni potplat, lagane" loading="eager" decoding="async"><span class="wsboots__bad">Zima 2026</span></div><div><div class="wsboots__kicker">Topla, suha i lagana</div><h2 class="wsboots__h2">Zimska čizma koja <em>ne pušta hladnoću ni vodu</em></h2><p class="wsboots__p">Hladna jutra, mokri pločnici, bljuzga na parkiralištu – a stopala ostaju topla i suha. NORIKS ThermaBoots spajaju toplu podstavu od runa s vanjskim slojem koji odbija vodu, a sve stoji na potplatu koji drži i na mokrom i na zaleđenom.</p><p class="wsboots__p">I unatoč runu i potpunoj zaštiti od vode – lagane su. Ne umaraju noge ni nakon cijelog dana hodanja, posla vani ili šetnje sa psom.</p><ul class="wsboots__feat"><?php echo $tb_li( 'kapljica', '100% vodootporne', 'Zatvorena izrada – kiša, snijeg, lokve i bljuzga ostaju vani.' ); echo $tb_li( 'runo', 'Podstava od runa', 'Debela i mekana – mnogi ih nose i bez čarapa.' ); echo $tb_li( 'pero', 'Lagane', 'Ne umaraju noge ni nakon cijelog dana.' ); echo $tb_li( 'potplat', 'Protuklizni potplat', 'Drži na mokrom asfaltu, ledu i skliskom tlu.' ); ?></ul><p class="wsboots__p wsboots__p2"><strong>Materijali:</strong> ultra topla termo podstava od runa, vanjski sloj od vodoodbojnog tekstila koji se lako čisti i robustan potplat s prianjanjem za svaki teren.</p><p class="wsboots__zak">Topla stopala od prvog koraka do zadnjeg.</p></div></div></section>
<section class="wsboots__s"><div class="wsboots__v wsboots__dva wsboots__dva--tab"><div><div class="wsboots__kicker">Tablica veličina</div><h2 class="wsboots__h2">Uzmite svoj <em>uobičajeni broj</em></h2><p class="wsboots__p">ThermaBoots odgovaraju standardnoj veličini. Odaberite broj koji inače nosite – a ako niste sigurni, izmjerite stopalo i usporedite s tablicom.</p><ul class="wsboots__kv"><li>Stanite na papir, petom uz zid, i označite najdulji prst.</li><li>Izmjerite razmak od zida do oznake u centimetrima – to je dužina stopala.</li><li>Odaberite broj s istom ili prvom većom dužinom stopala.</li><li>Unutarnja dužina čizme je oko 1 cm veća – mjesta za čarapu i runo.</li></ul><p class="wsboots__zak">Kriva veličina? Zamjena unutar 30 dana.</p></div><div><div class="wsboots__tw"><table class="wsboots__tab"><thead><tr><th>Veličina (EU)</th><th>Dužina stopala</th><th>Unutarnja dužina</th></tr></thead><tbody><?php foreach ( $tb_velicine as $r ) : ?><tr><td><strong><?php echo esc_html( $r[0] ); ?></strong></td><td><?php echo esc_html( $r[1] ); ?> cm</td><td><?php echo esc_html( $r[2] ); ?> cm</td></tr><?php endforeach; ?></tbody></table></div></div></div></section>
<section class="wsboots__s wsboots__s--bg"><div class="wsboots__v"><div class="wsboots__kicker wsboots__c">Zašto ih kupci vole</div><h2 class="wsboots__h2 wsboots__c">Razlozi zašto ćete ih <em>voljeti</em></h2><p class="wsboots__p wsboots__c">Četiri stvari koje kupci najčešće spominju nakon prve zime u NORIKS ThermaBoots čizmama.</p><div class="wsboots__grid wsboots__g4"><?php foreach ( $tb_razlozi as $r ) : ?><div class="wsboots__k wsboots__k--ik"><span class="wsboots__ki"><?php echo $tb_svg( $tb_ik[ $r[0] ], 30 ); ?></span><strong><?php echo esc_html( $r[1] ); ?></strong><p><?php echo esc_html( $r[2] ); ?></p></div><?php endforeach; ?></div></div></section>
<section class="wsboots__s"><div class="wsboots__v wsboots__30"><span class="wsboots__30i"><?php echo $tb_svg( $tb_ik['stit'], 40 ); ?><b>30</b></span><div class="wsboots__kicker wsboots__c">Bez rizika</div><h2 class="wsboots__h2 wsboots__c">30 dana da ih <em>isprobate</em></h2><p class="wsboots__p wsboots__c">Imate 30 dana za povrat novca. Niste zadovoljni? Samo nam se javite unutar 30 dana i vratit ćemo vam novac – bez kompliciranja. Nemate što izgubiti.</p><ul class="wsboots__feat wsboots__feat--3"><?php echo $tb_li( 'povrat', '30 dana za povrat', 'Rok teče od dana kad paket stigne.' ); echo $tb_li( 'zamjena', 'Zamjena veličine', 'Krivi broj zamijenite unutar 30 dana.' ); echo $tb_li( 'novac', 'Plaćanje pouzećem', 'Platite tek kad paket stigne.' ); ?></ul></div></section>
<section class="wsboots__s wsboots__s--bg"><div class="wsboots__v"><div class="wsboots__kicker wsboots__c">Iskustva kupaca</div><h2 class="wsboots__h2 wsboots__c">Što kažu oni koji ih <em>već nose</em></h2><p class="wsboots__p wsboots__c">Ocjena 4,8 od 5 – 120.000 kupaca vjeruje NORIKS-u.</p><div class="wsboots__grid wsboots__kar"><?php foreach ( $tb_mnenja as $m ) : ?><div class="wsboots__k"><div class="wsboots__km"><img src="<?php echo esc_url( $tb_u . $m[0] ); ?>" alt="<?php echo esc_attr( 'Kupac u NORIKS ThermaBoots čizmama, boja ' . $m[4] . ' – ' . $m[3] ); ?>" loading="eager" decoding="async"></div><div class="wsboots__kt"><span class="wsboots__zv">★★★★★</span><strong class="wsboots__nm"><?php echo esc_html( $m[1] ); ?></strong><p><?php echo esc_html( $m[2] ); ?></p><span class="wsboots__ime"><i class="wsboots__av" aria-hidden="true"><?php echo esc_html( mb_substr( $m[3], 0, 1 ) ); ?></i><?php echo esc_html( $m[3] ); ?> <small>· Provjereni kupac · <?php echo esc_html( $m[4] ); ?></small></span></div></div><?php endforeach; ?></div><p class="wsboots__zak wsboots__zak--c">Topla i suha stopala cijelu zimu – ili novac natrag.</p></div></section>
<section class="wsboots__s npg-s"><?php $npg = array( 'izdelek' => 'NORIKS ThermaBoots', 'barva' => '#e8651f' ); include __DIR__ . '/noriks-pogoji.php'; ?></section>
</div>
<style>
.wsboots{color:#1c1c1c;font-family:inherit}
.wsboots__s{padding:72px 0;background:#fff}.wsboots__s--bg{background:#fcf1ea}
.wsboots__v{width:100%;max-width:1240px;margin:0 auto;padding:0 24px;box-sizing:border-box}
.wsboots__c{text-align:center}
.wsboots__kicker{display:inline-flex;align-items:center;gap:10px;font-size:13px;letter-spacing:1.4px;text-transform:uppercase;color:#c4521a;margin:0 0 10px;font-weight:800}
.wsboots__kicker::before{content:"";width:26px;height:2px;background:#e8651f;border-radius:2px}
.wsboots__kicker.wsboots__c{display:flex;justify-content:center}
.wsboots__h2{font-size:clamp(26px,3vw,36px);font-weight:800;line-height:1.2;margin:0 0 18px;color:#1c1c1c}.wsboots__h2 em{font-style:italic;color:#c4521a}
.wsboots__p{font-size:16px;line-height:1.65;color:#333;margin:0 0 14px}
.wsboots__p.wsboots__c{max-width:none}
.wsboots__p2{margin-top:16px!important;color:#555!important;font-size:14.5px!important}
.wsboots__zak{font-size:16.5px;font-weight:800;line-height:1.5;margin:20px 0 0;padding-left:14px;border-left:3px solid #e8651f}
.wsboots__zak--c{text-align:center;border-left:0;padding-left:0;margin-top:28px}
.wsboots__dva{display:grid;grid-template-columns:1fr 1fr;gap:56px;align-items:center}
.wsboots__dva--tab{grid-template-columns:5fr 6fr;align-items:start}
.wsboots__media{position:relative;border-radius:18px;overflow:hidden;box-shadow:0 14px 36px rgba(120,60,20,.16);aspect-ratio:4/5;background:#fff}
.wsboots__media img{width:100%;height:100%;object-fit:cover;display:block}
.wsboots__bad{position:absolute;left:16px;top:16px;background:#fff;color:#c4521a;font-weight:800;font-size:13px;letter-spacing:.8px;text-transform:uppercase;padding:7px 13px;border-radius:30px;box-shadow:0 4px 14px rgba(0,0,0,.12)}
.wsboots__feat{list-style:none;margin:8px 0 0;padding:0;display:grid;grid-template-columns:1fr 1fr;gap:14px}
.wsboots__feat--3{grid-template-columns:repeat(3,1fr);margin-top:26px;text-align:left}
.wsboots__feat li{display:flex;gap:14px;align-items:flex-start;background:#fff;border-radius:16px;padding:16px;box-shadow:0 6px 20px rgba(120,60,20,.09);list-style:none;margin:0;transition:transform .2s,box-shadow .2s}
.wsboots__s:not(.wsboots__s--bg) .wsboots__feat li{background:#fdf8f4}
.wsboots__feat li:hover{transform:translateY(-2px);box-shadow:0 12px 26px rgba(120,60,20,.14)}
.wsboots__feat strong{display:block;font-size:15.5px;font-weight:800;margin:0 0 3px}.wsboots__feat p{margin:0;font-size:14.5px;line-height:1.5;color:#555}
.wsboots__fi{flex:0 0 46px;width:46px;height:46px;border-radius:50%;background:#fbe0cf;color:#c4521a;display:flex;align-items:center;justify-content:center}
.wsboots__kv{list-style:none;margin:6px 0 0;padding:0}
.wsboots__kv li{position:relative;padding:0 0 0 32px;margin:0 0 12px;font-size:15.5px;line-height:1.55;color:#333;list-style:none}
.wsboots__kv li::before{content:"✓";position:absolute;left:0;top:0;width:22px;height:22px;border-radius:50%;background:#fbe0cf;color:#c4521a;font-weight:800;font-size:13px;display:flex;align-items:center;justify-content:center}
.wsboots__tw{overflow-x:auto;border-radius:16px;box-shadow:0 8px 24px rgba(120,60,20,.10);background:#fff}
.wsboots__tab{width:100%;border-collapse:collapse;font-size:15px;margin:0}
.wsboots__tab th{background:#1c1c1c!important;color:#fff!important;font-weight:800;padding:14px 16px;text-align:center;border:0}
.wsboots__tab td{padding:11px 16px;text-align:center;border:0;border-bottom:1px solid #f3e4d9;color:#333}
.wsboots__tab tbody tr:nth-child(even) td{background:#fdf8f4}
.wsboots__tab tbody tr:last-child td{border-bottom:0}
.wsboots__grid{display:grid;gap:22px;margin-top:26px}
.wsboots__g4{grid-template-columns:repeat(4,1fr)}
.wsboots__k{background:#fff;border-radius:16px;overflow:hidden;display:flex;flex-direction:column;box-shadow:0 8px 24px rgba(120,60,20,.10);transition:transform .2s,box-shadow .2s}
.wsboots__k:hover{transform:translateY(-3px);box-shadow:0 14px 30px rgba(120,60,20,.16)}
.wsboots__k--ik{padding:28px 24px;text-align:center;align-items:center}
.wsboots__k--ik strong{display:block;font-size:17px;font-weight:800;margin:0 0 8px;text-transform:uppercase;letter-spacing:.4px}
.wsboots__k--ik p{margin:0;font-size:15px;line-height:1.55;color:#555}
.wsboots__ki{width:64px;height:64px;border-radius:50%;background:#fbe0cf;color:#c4521a;display:flex;align-items:center;justify-content:center;margin:0 0 16px;box-shadow:inset 0 0 0 1.5px #e8651f}
.wsboots__30{text-align:center}
.wsboots__30i{position:relative;display:inline-flex;align-items:center;justify-content:center;width:92px;height:92px;border-radius:50%;background:#fbe0cf;color:#c4521a;margin:0 0 18px}
.wsboots__30i b{position:absolute;right:-6px;bottom:-4px;background:#e8651f;color:#fff;font-size:15px;font-weight:800;border-radius:20px;padding:3px 9px}
.wsboots__km img{width:100%;aspect-ratio:4/5;object-fit:cover;display:block}
.wsboots__kt{padding:20px 22px 24px;flex:1;display:flex;flex-direction:column}
.wsboots__nm{font-size:17px;font-weight:800;margin:0 0 8px}
.wsboots__kt p{margin:0 0 14px;font-size:15.5px;line-height:1.55;color:#333;flex:1}
.wsboots__zv{color:#e0a33c;letter-spacing:2px;display:block;margin-bottom:8px}
.wsboots__ime{display:flex;align-items:center;flex-wrap:wrap;font-weight:800;font-size:14.5px}.wsboots__ime small{font-weight:600;color:#777;margin-left:6px;font-size:13px}
.wsboots__av{display:inline-flex;align-items:center;justify-content:center;width:30px;height:30px;border-radius:50%;background:#fbe0cf;color:#c4521a;font-style:normal;font-weight:800;font-size:13px;margin-right:9px}
.wsboots__karw{position:relative}
.wsboots__kar{grid-auto-flow:column;grid-auto-columns:calc((100% - 44px)/3);overflow-x:auto;scroll-snap-type:x mandatory;scrollbar-width:none}
.wsboots__kar::-webkit-scrollbar{display:none}.wsboots__kar>*{scroll-snap-align:start}
.wsboots__pus{position:absolute;top:42%;transform:translateY(-50%);width:44px;height:44px;border-radius:50%;border:0;background:#fff;box-shadow:0 4px 14px rgba(0,0,0,.18);font-size:24px;line-height:44px;cursor:pointer;z-index:2;color:#c4521a;padding:0;display:none}
.wsboots__pus--l{left:-14px}.wsboots__pus--d{right:-14px}
@media (max-width:1024px){.wsboots__g4{grid-template-columns:repeat(2,1fr)}}
@media (max-width:860px){
.wsboots__s{padding:48px 0}
.wsboots__dva,.wsboots__dva--tab{grid-template-columns:1fr;gap:26px}
.wsboots__kar{grid-auto-columns:82%}.wsboots__pus{display:block}.wsboots__pus--l{left:4px}.wsboots__pus--d{right:4px}
.wsboots__feat--3{grid-template-columns:1fr}
}
@media (max-width:767px){.wsboots__v{padding:0 16px}}
@media (max-width:560px){.wsboots__feat{grid-template-columns:1fr}.wsboots__h2{font-size:25px}.wsboots__g4{grid-template-columns:1fr}.wsboots__tab{font-size:14px}.wsboots__tab th,.wsboots__tab td{padding:10px 8px}}
</style>
<script>
(function(){document.querySelectorAll('.wsboots__kar').forEach(function(k){
  var w=document.createElement('div');w.className='wsboots__karw';k.parentNode.insertBefore(w,k);w.appendChild(k);
  ['l','d'].forEach(function(s){var b=document.createElement('button');b.type='button';b.className='wsboots__pus wsboots__pus--'+s;b.setAttribute('aria-label',s==='l'?'Prethodno':'Sljedeće');b.innerHTML=s==='l'?'&#8249;':'&#8250;';
    b.addEventListener('click',function(){var x=k.firstElementChild;var d=x?x.getBoundingClientRect().width+22:300;k.scrollBy({left:s==='l'?-d:d,behavior:'smooth'});});w.appendChild(b);});
});})();
</script>
