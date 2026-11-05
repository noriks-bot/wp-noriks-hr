<?php
/**
 * NORIKS Grandpa - skijaska maska s hiperrealisticnim licem, 3 lica (orto-grandpa) - why sekcije po natancni strukturi originala
 * (luxarmy.store/products/ski-mask).
 *
 * STRUKTURA ORIGINALA:
   1. tekuci trak (ticker) s 3 prednostima: "3 Faces To Choose From / One Size Fits All / Real Ski Mask" - pri nas trak prednosti s 3 ikonami v vrsti (brez tekocega traku)
   2. "So detailed people do a double-take": video + besedilo (2 odstavka o HD tisku, dye-sublimacija) - pri nas video levo (/img/grandpa/noriks-grandpa-detalji.mp4, z originala; vzgan angleski napis "POV: You bought the best ski mask ever" izrezan in zamenjan s HR napisom), besedilo desno
   3. "Actually warm, not just funny": video + besedilo (flis, veter, zamagljivanje, vrat, 4-way stretch, ena velikost) - pri nas video desno (/img/grandpa/noriks-grandpa-toplina.mp4, z originala; napis "I regret buying this for my husband..." zamenjan s HR napisom), besedilo levo
   4. "Everything you'd want, plus a face": naslov + 4 kartice z ikonami v vrsti (3 lica, flis, ena velicina, 30 dni) - pri nas mreza 4 kartic z ikonami
   5. "Meet the three faces": naslov + 3 kartice v vrsti (slika lica zgoraj, ime, opis) - pri nas mreza 3 kartic s slikami z originala
   6. "Bought as a joke, kept as a mask": 3 mnenja v vrsti (fotografija kupca, naslov, besedilo, ime) - pri nas 3 kartice z istimi fotografijami, hrvaska imena
   7. "Everything you're wondering": FAQ harmonika s 4 vprasanji - pri nas harmonika s 4 vprasanji (isti odgovori)
   8. NORIKS pogoji (skupni del noriks-pogoji.php)
 * VIDEO: /img/grandpa/noriks-grandpa-detalji.mp4, /img/grandpa/noriks-grandpa-toplina.mp4
 * BARVA ORIGINALA: #3ba9e0 (ledeno modra originala - gumb in ozadje sekcij #e8f4fb na originalu); svetel ton za --bg #e8f4fb
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
$gp_u = get_template_directory_uri() . '/img/grandpa/';
$gp_svg = function ( $d, $s = 26 ) {
	return '<svg viewBox="0 0 24 24" width="' . $s . '" height="' . $s . '" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">' . $d . '</svg>';
};
$gp_ik = array(
	'lice'    => '<circle cx="12" cy="12" r="9"/><path d="M8 14.5c1 1.4 2.4 2 4 2s3-.6 4-2"/><path d="M9 9.5h.01M15 9.5h.01"/>',
	'vel'     => '<path d="M4 12h16"/><path d="M7 9l-3 3 3 3"/><path d="M17 9l3 3-3 3"/>',
	'snijeg'  => '<path d="M12 2v20M4.9 6.5l14.2 11M19.1 6.5L4.9 17.5"/><path d="M9.5 3.5L12 6l2.5-2.5M9.5 20.5L12 18l2.5 2.5"/>',
	'plamen'  => '<path d="M12 3c1 3.5 5 5.5 5 10a5 5 0 0 1-10 0c0-2.5 1.4-4 2.5-5 .2 1.8 1 2.8 2 3.2C11 9 11 6 12 3z"/>',
	'stit'    => '<path d="M12 3l7 3v5.5c0 4.4-3 8-7 9.5-4-1.5-7-5.1-7-9.5V6l7-3z"/><path d="M9 12l2 2 4-4"/>',
	'vjetar'  => '<path d="M3 9h11a3 3 0 1 0-3-3"/><path d="M3 14h15a3 3 0 1 1-3 3"/><path d="M3 19h6"/>',
	'kaciga'  => '<path d="M4 15a8 8 0 0 1 16 0v2H4z"/><path d="M4 17h16"/><path d="M12 7v4"/>',
	'pranje'  => '<path d="M4 6h16l-1.5 13a2 2 0 0 1-2 1.8H7.5a2 2 0 0 1-2-1.8z"/><path d="M4 10c2.7 1.3 5.3 1.3 8 0s5.3-1.3 8 0"/>',
);
$gp_lica = array(
	array( 'noriks-grandpa-djed-gordon.webp', 'Djed Gordon', 'Starčić koji se baca niz crnu stazu. Liftaš neće znati što bi mislio.' ),
	array( 'noriks-grandpa-brkati-manny.webp', 'Brkati Manny', 'Puna energija brkova iz 70-ih. Izgleda kao da će vam upravo ponuditi vrlo sumnjiv rabljeni auto.' ),
	array( 'noriks-grandpa-krezubi-gary.webp', 'Krezubi Gary', 'Krezubi osmijeh od kojeg se stranci smiju prije nego što uopće shvate zašto. Neporažen na sedežnici.' ),
);
$gp_mnenja = array(
	array( 'noriks-grandpa-mnenje-1.webp', 'Kupljena za šalu, ostala za skijanje', 'Uzeo sam Krezubog Garyja misleći da će to biti smijeh za jedan dan. Ništa od toga – sad je to najtoplija stvar u mojoj torbi i nosim je na svakoj vožnji. Leži glatko ispod kacige, bez nabiranja.', 'Marko T.', 'Krezubi Gary' ),
	array( 'noriks-grandpa-mnenje-2.webp', 'Sad mi je to glavna maska', 'Nosila sam Brkatog Mannyja u gondoli i tri različita stranca tražila su zajedničku fotografiju prije nego što smo stigli na vrh. Naočale mi se nisu zamaglile cijeli dan. Toplo preporučujem.', 'Danijela P.', 'Brkati Manny' ),
	array( 'noriks-grandpa-mnenje-3.webp', 'Stvarno dobro napravljena', 'Kupili smo tri za skijanje i stranci su nas cijeli dan tražili fotografije. Savršeno pristaje ispod kacige i iza naočala, bez ikakvog zamagljivanja.', 'Krešimir R.', 'Djed Gordon' ),
);
$gp_faq = array(
	array( 'Stane li stvarno ispod kacige i naočala?', 'Da. Tkanina je tanka i rastezljiva, pa leži ravno ispod svake skijaške kacige i iza svakih naočala, bez nabiranja.' ),
	array( 'Je li stvarno topla ili je samo šala?', 'Vrlo je topla. Podstavljena je flisom i ne propušta vjetar, a pokriva glavu, lice i vrat. Prvo je prava skijaška maska, a tek onda šala – mnogi je nose i dugo nakon što smijeh prođe.' ),
	array( 'Mogu li je prati?', 'Da. Lice je sublimacijom utisnuto u tkaninu, a ne otisnuto na površinu, pa ne puca i ne ljušti se. Perite u perilici na hladnom programu i ostaje oštra sezonama.' ),
	array( 'Hoće li mi se naočale zamagliti?', 'Neće. Tkanina je prozračna i odvodi vlagu, pa dah izlazi van umjesto da se penje u naočale.' ),
);
?>
<div class="wsgp">
<section class="wsgp__s wsgp__s--bg wsgp__s--traka"><div class="wsgp__v"><ul class="wsgp__traka">
	<li><span class="wsgp__ti"><?php echo $gp_svg( $gp_ik['lice'] ); ?></span><div><strong>3 lica po izboru</strong><small>Djed Gordon, Brkati Manny, Krezubi Gary</small></div></li>
	<li><span class="wsgp__ti"><?php echo $gp_svg( $gp_ik['vel'] ); ?></span><div><strong>Jedna veličina za sve</strong><small>Rastezljiva u 4 smjera</small></div></li>
	<li><span class="wsgp__ti"><?php echo $gp_svg( $gp_ik['snijeg'] ); ?></span><div><strong>Prava skijaška maska</strong><small>Flis, zaštita od vjetra, vrat</small></div></li>
</ul></div></section>

<section class="wsgp__s"><div class="wsgp__v wsgp__dva"><div class="wsgp__media"><video src="<?php echo esc_url( $gp_u . 'noriks-grandpa-detalji.mp4' ); ?>" poster="<?php echo esc_url( $gp_u . 'noriks-grandpa-detalji.jpg' ); ?>" autoplay muted loop playsinline webkit-playsinline preload="metadata" aria-label="Skijaš navlači NORIKS Grandpa masku s licem Krezubog Garyja ispod naočala"></video><span class="wsgp__bad">HD lice</span></div><div><div class="wsgp__kicker">Do najsitnijeg detalja</div><h2 class="wsgp__h2">Toliko detaljna da se ljudi <em>okreću dvaput</em></h2><p class="wsgp__p">Lice nije jeftina naljepnica koja se glača na tkaninu. Sublimacijom je utisnuto ravno u tkaninu u punoj HD rezoluciji – s porama, borama, zalutalim dlačicama i svim ostalim. Tisak je bez šavova po cijeloj maski, pa nema čudne linije koja bi pokvarila iluziju.</p><p class="wsgp__p">Upravo je taj drugi pogled cijela poanta: ljudi prvo vide starčića na stazi, a tek onda shvate da je riječ o maski. A budući da je lice dio same tkanine, preživljava svako pranje i svaku sezonu.</p><ul class="wsgp__kv"><li>Pore, bore i dlačice u punoj HD rezoluciji</li><li>Tisak bez šavova po cijeloj maski</li><li>Ne puca i ne ljušti se nakon pranja</li></ul><p class="wsgp__zak">Drugi pogled je cijela poanta – a lice ostaje oštro sezonama.</p></div></div></section>

<section class="wsgp__s wsgp__s--bg"><div class="wsgp__v wsgp__dva wsgp__dva--rev"><div class="wsgp__media"><video src="<?php echo esc_url( $gp_u . 'noriks-grandpa-toplina.mp4' ); ?>" poster="<?php echo esc_url( $gp_u . 'noriks-grandpa-toplina.jpg' ); ?>" autoplay muted loop playsinline webkit-playsinline preload="metadata" aria-label="Skijaši na stazi u NORIKS Grandpa maskama s tri različita lica"></video><span class="wsgp__bad">Podstava od flisa</span></div><div><div class="wsgp__kicker">Toplina na prvom mjestu</div><h2 class="wsgp__h2">Stvarno topla, <em>ne samo smiješna</em></h2><p class="wsgp__p">Podstava od flisa zadržava toplinu, tkanje ne propušta vjetar, a tkanina odvodi vlagu, pa vam se naočale ne zamagljuju. Maska pokriva i vrat – nema hladnog procjepa između maske i jakne dok se vozite žičarom.</p><p class="wsgp__p">Tanka tkanina rastezljiva u 4 smjera leži ravno ispod kacige i iza naočala, bez nabiranja. Jedna veličina stvarno odgovara glavama odraslih od S do XL.</p><ul class="wsgp__feat"><li><span class="wsgp__fi"><?php echo $gp_svg( $gp_ik['plamen'], 22 ); ?></span><div><strong>Flis iznutra</strong><p>Mekan i topao na koži.</p></div></li><li><span class="wsgp__fi"><?php echo $gp_svg( $gp_ik['vjetar'], 22 ); ?></span><div><strong>Ne propušta vjetar</strong><p>Prozračna, bez zamagljivanja.</p></div></li><li><span class="wsgp__fi"><?php echo $gp_svg( $gp_ik['kaciga'], 22 ); ?></span><div><strong>Ispod kacige</strong><p>Tanka i rastezljiva u 4 smjera.</p></div></li><li><span class="wsgp__fi"><?php echo $gp_svg( $gp_ik['vel'], 22 ); ?></span><div><strong>Jedna veličina</strong><p>Za glave odraslih od S do XL.</p></div></li></ul></div></div></section>

<section class="wsgp__s"><div class="wsgp__v"><div class="wsgp__kicker wsgp__c">Sve što trebate</div><h2 class="wsgp__h2 wsgp__c">Sve što biste htjeli od maske – <em>plus lice</em></h2><p class="wsgp__p wsgp__c">Prava skijaška maska za hladne dane na stazi, s licem zbog kojeg će vas svi pamtiti.</p><div class="wsgp__grid wsgp__g4">
	<div class="wsgp__k wsgp__k--ik"><span class="wsgp__ki"><?php echo $gp_svg( $gp_ik['lice'], 30 ); ?></span><strong>3 hiperrealna lica</strong><p>Djed Gordon, Brkati Manny i Krezubi Gary.</p></div>
	<div class="wsgp__k wsgp__k--ik"><span class="wsgp__ki"><?php echo $gp_svg( $gp_ik['plamen'], 30 ); ?></span><strong>Toplina flisa</strong><p>Ne propušta vjetar, prozračna, bez zamagljivanja.</p></div>
	<div class="wsgp__k wsgp__k--ik"><span class="wsgp__ki"><?php echo $gp_svg( $gp_ik['vel'], 30 ); ?></span><strong>Jedna veličina za sve</strong><p>Rastezljiva u 4 smjera – stane ispod svake kacige i naočala.</p></div>
	<div class="wsgp__k wsgp__k--ik"><span class="wsgp__ki"><?php echo $gp_svg( $gp_ik['stit'], 30 ); ?></span><strong>30 dana za povrat</strong><p>Brza dostava i jednostavan povrat.</p></div>
</div></div></section>

<section class="wsgp__s wsgp__s--bg"><div class="wsgp__v"><div class="wsgp__kicker wsgp__c">Tri lica</div><h2 class="wsgp__h2 wsgp__c">Upoznajte <em>tri lica</em></h2><p class="wsgp__p wsgp__c">Odaberite svog favorita – ili uzmite sva tri za cijelu ekipu na skijanju.</p><div class="wsgp__grid wsgp__g3">
	<?php foreach ( $gp_lica as $l ) : ?><div class="wsgp__k"><div class="wsgp__km"><img src="<?php echo esc_url( $gp_u . $l[0] ); ?>" alt="<?php echo esc_attr( 'NORIKS Grandpa skijaška maska s licem ' . $l[1] . ' na skijalištu' ); ?>" loading="eager" decoding="async"></div><div class="wsgp__kt"><h3 class="wsgp__nm"><?php echo esc_html( $l[1] ); ?></h3><p><?php echo esc_html( $l[2] ); ?></p></div></div><?php endforeach; ?>
</div></div></section>

<section class="wsgp__s"><div class="wsgp__v"><div class="wsgp__kicker wsgp__c">Kupci je vole</div><h2 class="wsgp__h2 wsgp__c">Kupljena za šalu, <em>ostala kao maska</em></h2><p class="wsgp__p wsgp__c">Ocjena 4,8 od 5 – 120.000 kupaca vjeruje NORIKS-u.</p><div class="wsgp__grid wsgp__g3 wsgp__kar">
	<?php foreach ( $gp_mnenja as $m ) : ?><div class="wsgp__k"><div class="wsgp__km"><img src="<?php echo esc_url( $gp_u . $m[0] ); ?>" alt="<?php echo esc_attr( 'Kupac u NORIKS Grandpa maski, lice ' . $m[4] . ' – ' . $m[3] ); ?>" loading="eager" decoding="async"></div><div class="wsgp__kt"><span class="wsgp__zv">★★★★★</span><h3 class="wsgp__nm"><?php echo esc_html( $m[1] ); ?></h3><p><?php echo esc_html( $m[2] ); ?></p><span class="wsgp__ime"><i class="wsgp__av"><?php echo esc_html( mb_substr( $m[3], 0, 1 ) ); ?></i><?php echo esc_html( $m[3] ); ?><small>· provjereni kupac</small></span></div></div><?php endforeach; ?>
</div></div></section>

<section class="wsgp__s wsgp__s--bg"><div class="wsgp__v wsgp__dva wsgp__dva--faq"><div><div class="wsgp__kicker">Pitanja i odgovori</div><h2 class="wsgp__h2">Sve što vas <em>zanima</em></h2><p class="wsgp__p">Najčešća pitanja o maski – o kacigi, toplini, pranju i naočalama. Ako vas zanima još nešto, naša podrška vam rado odgovori.</p><p class="wsgp__zak">Prava skijaška maska prije svega – šala je bonus.</p></div><div class="wsgp__faq">
	<?php foreach ( $gp_faq as $i => $q ) : ?><details class="wsgp__q"<?php echo 0 === $i ? ' open' : ''; ?>><summary><?php echo esc_html( $q[0] ); ?><span class="wsgp__qp" aria-hidden="true">+</span></summary><p><?php echo esc_html( $q[1] ); ?></p></details><?php endforeach; ?>
</div></div></section>

<section class="wsgp__s npg-s"><?php $npg = array( 'izdelek' => 'NORIKS Grandpa', 'barva' => '#3ba9e0' ); include __DIR__ . '/noriks-pogoji.php'; ?></section>
</div>
<style>
.wsgp{color:#1c1c1c;font-family:inherit}
.wsgp__s{padding:72px 0;background:#fff}.wsgp__s--bg{background:#e8f4fb}
.wsgp__s--traka{padding:36px 0}
.wsgp__v{width:100%;max-width:1240px;margin:0 auto;padding:0 24px;box-sizing:border-box}
.wsgp__c{text-align:center}
.wsgp__kicker{display:inline-flex;align-items:center;gap:10px;font-size:13px;letter-spacing:1.4px;text-transform:uppercase;color:#1b78a8;margin:0 0 10px;font-weight:800}
.wsgp__kicker::before{content:"";width:26px;height:2px;background:#3ba9e0;border-radius:2px}
.wsgp__kicker.wsgp__c{display:flex;justify-content:center}
.wsgp__h2{font-size:clamp(26px,3vw,36px);font-weight:800;line-height:1.2;margin:0 0 18px;color:#1c1c1c}.wsgp__h2 em{font-style:italic;color:#1b78a8}
.wsgp__p{font-size:16px;line-height:1.65;color:#333;margin:0 0 14px}
.wsgp__zak{font-size:16.5px;font-weight:800;line-height:1.5;margin:20px 0 0;padding-left:14px;border-left:3px solid #3ba9e0}
.wsgp__traka{list-style:none;margin:0;padding:0;display:grid;grid-template-columns:repeat(3,1fr);gap:20px}
.wsgp__traka li{display:flex;align-items:center;gap:16px;background:#fff;border-radius:16px;padding:22px 24px;box-shadow:0 8px 24px rgba(20,90,130,.10);list-style:none;margin:0}
.wsgp__traka strong{display:block;font-size:16.5px;font-weight:800;margin:0 0 3px}.wsgp__traka small{display:block;font-size:14px;color:#5b6670;line-height:1.4}
.wsgp__ti{flex:0 0 52px;width:52px;height:52px;border-radius:50%;background:#3ba9e0;color:#fff;display:flex;align-items:center;justify-content:center}
.wsgp__dva{display:grid;grid-template-columns:1fr 1fr;gap:56px;align-items:center}
.wsgp__dva--rev>.wsgp__media{order:2}
.wsgp__dva--faq{grid-template-columns:5fr 7fr;align-items:start}
.wsgp__media{position:relative;border-radius:18px;overflow:hidden;box-shadow:0 14px 36px rgba(20,90,130,.18);aspect-ratio:4/5;background:#dcebf4}
.wsgp__media video,.wsgp__media img{width:100%;height:100%;object-fit:cover;display:block}
.wsgp__bad{position:absolute;left:16px;bottom:16px;background:#fff;color:#1b78a8;font-weight:800;font-size:13px;letter-spacing:.8px;text-transform:uppercase;padding:7px 13px;border-radius:30px;box-shadow:0 4px 14px rgba(0,0,0,.12)}
.wsgp__kv{list-style:none;margin:6px 0 0;padding:0}
.wsgp__kv li{position:relative;padding:0 0 0 32px;margin:0 0 12px;font-size:15.5px;line-height:1.55;color:#333;list-style:none}
.wsgp__kv li::before{content:"✓";position:absolute;left:0;top:0;width:22px;height:22px;border-radius:50%;background:#cfe7f5;color:#1b78a8;font-weight:800;font-size:13px;display:flex;align-items:center;justify-content:center}
.wsgp__feat{list-style:none;margin:8px 0 0;padding:0;display:grid;grid-template-columns:1fr 1fr;gap:14px}
.wsgp__feat li{display:flex;gap:14px;align-items:flex-start;background:#fff;border-radius:16px;padding:16px;box-shadow:0 6px 20px rgba(20,90,130,.09);list-style:none;margin:0;transition:transform .2s,box-shadow .2s}
.wsgp__feat li:hover{transform:translateY(-2px);box-shadow:0 12px 26px rgba(20,90,130,.14)}
.wsgp__feat strong{display:block;font-size:15.5px;font-weight:800;margin:0 0 3px}.wsgp__feat p{margin:0;font-size:14.5px;line-height:1.5;color:#555}
.wsgp__fi{flex:0 0 44px;width:44px;height:44px;border-radius:50%;background:#cfe7f5;color:#1b78a8;display:flex;align-items:center;justify-content:center}
.wsgp__grid{display:grid;gap:22px;margin-top:26px;align-items:stretch}
.wsgp__g3{grid-template-columns:repeat(3,1fr)}
.wsgp__g4{grid-template-columns:repeat(4,1fr)}
.wsgp__k{background:#fff;border-radius:16px;overflow:hidden;display:flex;flex-direction:column;box-shadow:0 8px 24px rgba(20,90,130,.10);transition:transform .2s,box-shadow .2s}
.wsgp__s:not(.wsgp__s--bg) .wsgp__k--ik{background:#f3f9fd}
.wsgp__k:hover{transform:translateY(-3px);box-shadow:0 14px 30px rgba(20,90,130,.16)}
.wsgp__k--ik{padding:28px 24px;text-align:center;align-items:center}
.wsgp__k--ik strong{display:block;font-size:17px;font-weight:800;margin:0 0 8px}
.wsgp__k--ik p{margin:0;font-size:15px;line-height:1.55;color:#555}
.wsgp__ki{width:64px;height:64px;border-radius:50%;background:#cfe7f5;color:#1b78a8;display:flex;align-items:center;justify-content:center;margin:0 0 16px;box-shadow:inset 0 0 0 1.5px #3ba9e0}
.wsgp__km img{width:100%;aspect-ratio:1/1;object-fit:cover;display:block}
.wsgp__kt{padding:20px 22px 24px;flex:1;display:flex;flex-direction:column}
.wsgp__nm{font-size:18px;font-weight:800;margin:0 0 8px;color:#1c1c1c}
.wsgp__kt p{margin:0 0 14px;font-size:15.5px;line-height:1.55;color:#333;flex:1}
.wsgp__zv{color:#e0a33c;letter-spacing:2px;display:block;margin-bottom:8px}
.wsgp__ime{display:flex;align-items:center;flex-wrap:wrap;font-weight:800;font-size:14.5px}.wsgp__ime small{font-weight:600;color:#777;margin-left:6px;font-size:13px}
.wsgp__av{display:inline-flex;align-items:center;justify-content:center;width:30px;height:30px;border-radius:50%;background:#cfe7f5;color:#1b78a8;font-style:normal;font-weight:800;font-size:13px;margin-right:9px}
.wsgp__faq{display:flex;flex-direction:column;gap:12px}
.wsgp__q{background:#fff;border-radius:14px;box-shadow:0 6px 20px rgba(20,90,130,.09);padding:0 22px}
.wsgp__q summary{list-style:none;cursor:pointer;display:flex;justify-content:space-between;align-items:center;gap:16px;padding:18px 0;font-size:16.5px;font-weight:800;color:#1c1c1c}
.wsgp__q summary::-webkit-details-marker{display:none}
.wsgp__qp{flex:0 0 30px;width:30px;height:30px;border-radius:50%;background:#cfe7f5;color:#1b78a8;display:flex;align-items:center;justify-content:center;font-size:20px;font-weight:700;transition:transform .2s}
.wsgp__q[open] .wsgp__qp{transform:rotate(45deg)}
.wsgp__q p{margin:0 0 18px;font-size:15.5px;line-height:1.6;color:#444}
@media (max-width:1024px){.wsgp__g4{grid-template-columns:repeat(2,1fr)}}
@media (max-width:860px){
.wsgp__s{padding:48px 0}.wsgp__s--traka{padding:28px 0}
.wsgp__traka{grid-template-columns:1fr;gap:12px}
.wsgp__dva,.wsgp__dva--faq{grid-template-columns:1fr;gap:26px}
.wsgp__dva--rev>.wsgp__media{order:0}
.wsgp__kar{grid-template-columns:none;grid-auto-flow:column;grid-auto-columns:84%;overflow-x:auto;scroll-snap-type:x mandatory;scrollbar-width:none;padding-bottom:6px}
.wsgp__kar::-webkit-scrollbar{display:none}.wsgp__kar>*{scroll-snap-align:start}
.wsgp__g3:not(.wsgp__kar){grid-template-columns:1fr}
}
@media (max-width:767px){.wsgp__v{padding:0 16px}}
@media (max-width:560px){.wsgp__feat{grid-template-columns:1fr}.wsgp__h2{font-size:25px}.wsgp__g4{grid-template-columns:1fr}}
</style>
