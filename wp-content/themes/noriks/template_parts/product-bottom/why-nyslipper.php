<?php
/**
 * NORIKS NY Slipper - kucne papuce s dvije trake (orto-nyslipper) - why sekcije po natancni strukturi originala
 * (bisousandco.com/products/the-new-york-slipper).
 *
 * STRUKTURA ORIGINALA:
   1. "One band floats. Two straps hold.": slika LEVO (bose noge v krem papucah na kavcu, skodelica), besedilo DESNO - uvod + 4 alineje - pri nas slika levo, besedilo z alinejami z ikonami desno; napisa na skodelici in blazini prevedena v HR (Higgsfield)
   2. "Warm where you're cold. Open where you sweat.": slika DESNO (selfie v ogledalu, papuce v vrecki), besedilo LEVO - uvod + 4 alineje - pri nas slika desno, besedilo levo
   3. "What you are actually getting": slika LEVO (krem papuce iz vrecke s tujo znamko), besedilo DESNO - 5 alinej (trake, prsti, potplat, 300 g, barve in velicine) - pri nas slika levo (znamka na vrecki -> NORIKS, Higgsfield), 5 lastnosti z ikonami + sestava z originala
   4. "Thirty days, and a human on the other end.": slika DESNO (sive papuce, vrecka), besedilo LEVO - 30 dni - pri nas slika desno, besedilo levo z NORIKS pogoji (tuja obljuba "zamenjamo brez vracila" izpuscena)
   5. FAQ "Questions people ask before they buy" (7 vprasanj) - pri nas v FAQ Informacije o proizvodu pod mnenji (auto_reviews/FAQ_HR_nyslipper.php), brez tujih obljub
   6. "Trusted by 23,000+ customers": drsnik 4 kartic mnenj s fotografijo kupke, ime, zvezdice, besedilo - pri nas karusel 4 kartic z istimi fotografijami (znamka na vreckah -> NORIKS), 120.000 kupcev namesto tuje stevilke, hrvaska imena
   7. NORIKS pogoji (skupni del noriks-pogoji.php)
 * BARVA ORIGINALA: #b9987a (topla latte/bez barva papuc Coffee in toplih tonov fotografij in strani originala); svetel ton za --bg #f6f0ea
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
$nys_u = get_template_directory_uri() . '/img/nyslipper/';
$nys_svg = function ( $d ) {
	return '<svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">' . $d . '</svg>';
};
$nys_ik = array(
	'trake'   => '<path d="M4 9c3-2 13-2 16 0"/><path d="M4 14c3-2 13-2 16 0"/><path d="M5 18h14"/>',
	'prsti'   => '<circle cx="7" cy="7" r="1.6"/><circle cx="11" cy="5.5" r="1.6"/><circle cx="15" cy="6" r="1.6"/><path d="M6 12c0 5 3 8 6 8s6-3 6-8c0-1.5-1-2.5-2.5-2.5h-7C7 9.5 6 10.5 6 12z"/>',
	'potplat' => '<path d="M4 16h16"/><path d="M5 19h14"/><path d="M7 13l2-2 2 2 2-2 2 2 2-2"/>',
	'kuca'    => '<path d="M3 11l9-7 9 7"/><path d="M5 10v10h14V10"/><path d="M10 20v-6h4v6"/>',
	'pero'    => '<path d="M20 4C10 4 5 10 5 19"/><path d="M5 19c6 0 12-4 14-12"/><path d="M9 15h5"/>',
	'paleta'  => '<circle cx="12" cy="12" r="8.5"/><circle cx="8.5" cy="10" r="1.2"/><circle cx="12" cy="7.5" r="1.2"/><circle cx="15.5" cy="10" r="1.2"/><path d="M12 20.5c0-2 1-3 3-3h2"/>',
	'toplo'   => '<path d="M12 3v10"/><circle cx="12" cy="17" r="3.5"/><path d="M15 6h3M15 9h2"/>',
	'vrata'   => '<path d="M6 21V4h10v17"/><path d="M3 21h18"/><circle cx="13" cy="12.5" r=".8"/>',
	'povrat'  => '<path d="M4 12a8 8 0 1 0 2.4-5.7"/><path d="M4 4v4.5h4.5"/><path d="M12 8v4l2.6 2"/>',
	'zamjena' => '<path d="M4 8h13l-3-3"/><path d="M20 16H7l3 3"/>',
	'kamion'  => '<path d="M2 7h11v9H2z"/><path d="M13 10h4l3 3v3h-7"/><circle cx="6" cy="17.5" r="1.8"/><circle cx="17" cy="17.5" r="1.8"/>',
	'novac'   => '<rect x="2.5" y="6.5" width="19" height="11" rx="2"/><circle cx="12" cy="12" r="2.6"/><path d="M6 9.5v5M18 9.5v5"/>',
);
$nys_li = function ( $ik, $naslov, $tekst ) use ( $nys_svg, $nys_ik ) {
	return '<li><span class="wsnyslipper__fi">' . $nys_svg( $nys_ik[ $ik ] ) . '</span><div><strong>' . esc_html( $naslov ) . '</strong><p>' . esc_html( $tekst ) . '</p></div></li>';
};
$nys_mnenja = array(
	array( 'noriks-nyslipper-mnenje-1.webp', 'Ema K.', 'Boja Bež · 38-39', 'Iskreno sam oduševljena ovim papučama. Jako su mekane, udobne i lako se obuju. Htjela sam nešto slatko za po kući i ovo je točno ono što sam tražila.' ),
	array( 'noriks-nyslipper-mnenje-2.webp', 'Ana M.', 'Boja Bež · 40-41', 'Tako su udobne i tople. Nosim ih svako jutro i navečer kad dođem kući i stopala mi se osjećaju odlično. A i izgledaju jako slatko, što mi je posebno drago.' ),
	array( 'noriks-nyslipper-mnenje-3.webp', 'Lucija P.', 'Boja Crna · 38-39', 'Nisam znala što očekivati, ali ispale su odlično. Materijal je jako mekan, plišane su i dovoljno udobne da ih nosim po kući cijeli dan. Definitivno dobra kupnja.' ),
	array( 'noriks-nyslipper-mnenje-4.webp', 'Petra B.', 'Boja Crna · 36-37', 'Ovo su točno one tople kućne papuče koje sam htjela. Mekane su, lagane, a ipak daju osjećaj oslonca. Uživo izgledaju još slađe nego na slikama.' ),
);
?>
<div class="wsnyslipper">
<section class="wsnyslipper__s wsnyslipper__s--bg"><div class="wsnyslipper__v wsnyslipper__dva"><div class="wsnyslipper__media"><img src="<?php echo esc_url( $nys_u . 'noriks-nyslipper-dvije-trake.webp' ); ?>" alt="Bose noge u krem NORIKS NY Slipper papučama s dvije trake na kauču, uz šalicu kave" loading="eager" decoding="async"><span class="wsnyslipper__bad">2 trake</span></div><div><div class="wsnyslipper__kicker">Zašto dvije trake</div><h2 class="wsnyslipper__h2">Jedna traka pleše. <em>Dvije trake drže.</em></h2><p class="wsnyslipper__p">Obična kućna papuča ima jednu mekanu traku preko prstiju i ništa preko sredine stopala. Stopalo klizi naprijed, peta se diže, papuča lupka po podu – i spadne baš na stepenicama.</p><p class="wsnyslipper__p">NORIKS NY Slipper drži. Jedna traka ide preko prstiju, druga preko rista – kao kod sandale. Stopalo nema kamo pobjeći, pa papuča ide zajedno s vama, a ne za vama.</p><ul class="wsnyslipper__feat"><?php echo $nys_li( 'trake', 'Dvije trake kao kod sandale', 'Jedna preko prstiju, jedna preko rista – stopalo je držano, ne pluta.' ); echo $nys_li( 'prsti', 'Otvoreni prsti', 'Plišano svuda drugdje, a prsti dišu.' ); echo $nys_li( 'potplat', 'Teksturirani potplat', 'Nisko uz pod, stopalo ostaje ravno.' ); echo $nys_li( 'kuca', 'Za cijelu kuću', 'Za kauč, stepenice i ulazna vrata.' ); ?></ul><p class="wsnyslipper__zak">Papuča koja ostaje na nozi – od kauča do vrata.</p></div></div></section>
<section class="wsnyslipper__s"><div class="wsnyslipper__v wsnyslipper__dva wsnyslipper__dva--rev"><div class="wsnyslipper__media"><img src="<?php echo esc_url( $nys_u . 'noriks-nyslipper-toplo-otvoreno.webp' ); ?>" alt="Žena u kućnoj odjeći i krem NORIKS NY Slipper papučama drži novi par u vrećici" loading="eager" decoding="async"></div><div><div class="wsnyslipper__kicker">Toplo, a ne vruće</div><h2 class="wsnyslipper__h2">Toplo gdje vam je hladno. <em>Otvoreno gdje se znojite.</em></h2><p class="wsnyslipper__p">Zatvorena papuča u stanu grijanom na 21 °C nakon sat vremena postaje pećnica. Bose noge na hladnim pločicama – to je drugi problem.</p><p class="wsnyslipper__p">Ovo je par između: plišano oko stopala, a prsti su vani. Stopala su topla, ali se ne kuhaju – od listopada do travnja.</p><ul class="wsnyslipper__feat"><?php echo $nys_li( 'toplo', 'Od listopada do travnja', 'Plišano oko stopala, prsti vani – toplo bez znojenja.' ); echo $nys_li( 'trake', 'Ostaje na nozi', 'Od kauča do stepenica i do vrata.' ); echo $nys_li( 'vrata', 'Pravi potplat', 'Do poštanskog sandučića i na terasu – bez problema.' ); echo $nys_li( 'kuca', 'Kućna papuča, ne cipela', 'Staje kod prilaza kući – za vani je uzmite cipele.' ); ?></ul><p class="wsnyslipper__zak">Topla stopala, a ne znojna.</p></div></div></section>
<section class="wsnyslipper__s wsnyslipper__s--bg"><div class="wsnyslipper__v wsnyslipper__dva"><div class="wsnyslipper__media"><img src="<?php echo esc_url( $nys_u . 'noriks-nyslipper-sto-dobivate.webp' ); ?>" alt="Krem NORIKS NY Slipper papuče izvađene iz NORIKS vrećice" loading="eager" decoding="async"></div><div><div class="wsnyslipper__kicker">Što zapravo dobivate</div><h2 class="wsnyslipper__h2">Sve što dobivate – <em>bez uljepšavanja</em></h2><p class="wsnyslipper__p">Bez obećanja koja papuča ne može ispuniti. Ovo je točno ono što stiže u paketu:</p><ul class="wsnyslipper__feat wsnyslipper__feat--1"><?php echo $nys_li( 'trake', 'Dvije trake', 'Jedna preko prstiju, jedna preko rista – kao kod sandale.' ); echo $nys_li( 'prsti', 'Otvoreni prsti', 'Dišu u grijanom stanu.' ); echo $nys_li( 'potplat', 'Teksturirani potplat, nisko uz pod', 'Pravi potplat za terasu i prag, a ne filcani uložak – oko 2,5 cm na peti.' ); echo $nys_li( 'pero', 'Oko 300 g po paru', 'Toliko lagane da zaboravite da su na nogama.' ); echo $nys_li( 'paleta', '4 boje · veličine u parovima', 'Krem, Bež, Siva i Crna, od 36-37 do 42-43 – drugi par je za nju.' ); ?></ul><p class="wsnyslipper__p wsnyslipper__p2"><strong>Materijali:</strong> gornji dio od kovrčavog umjetnog krzna (poliester), plišana podstava (poliester), međupotplat od spužve, vanjski potplat od teksturiranog TPR-a sličnog gumi.</p></div></div></section>
<section class="wsnyslipper__s"><div class="wsnyslipper__v wsnyslipper__dva wsnyslipper__dva--rev"><div class="wsnyslipper__media"><img src="<?php echo esc_url( $nys_u . 'noriks-nyslipper-30-dana.webp' ); ?>" alt="Žena obuva sive NORIKS NY Slipper papuče na tepihu u spavaćoj sobi" loading="eager" decoding="async"><span class="wsnyslipper__bad">30 dana</span></div><div><div class="wsnyslipper__kicker">Bez rizika</div><h2 class="wsnyslipper__h2">Trideset dana da se <em>predomislite</em></h2><p class="wsnyslipper__p">Nosite ih. Živite u njima mjesec dana. Ako vam nešto ne odgovara, javite nam se unutar 30 dana – bez kompliciranja i bez objašnjavanja dvaput.</p><p class="wsnyslipper__p">Kriva veličina? Par zamijenite unutar 30 dana. Dostava je besplatna iznad 70 €, a plaćate pouzećem – tek kad paket stigne na vaša vrata.</p><ul class="wsnyslipper__feat"><?php echo $nys_li( 'povrat', '30 dana za povrat', 'Rok teče od dana kad paket stigne.' ); echo $nys_li( 'zamjena', 'Zamjena veličine', 'Krivi par zamijenite unutar 30 dana.' ); echo $nys_li( 'kamion', 'Besplatna dostava', 'Za narudžbe iznad 70 €.' ); echo $nys_li( 'novac', 'Plaćanje pouzećem', 'Platite kad paket stigne.' ); ?></ul><p class="wsnyslipper__zak">Isprobajte ih kod kuće – vi odlučujete.</p></div></div></section>
<section class="wsnyslipper__s wsnyslipper__s--bg"><div class="wsnyslipper__v"><div class="wsnyslipper__kicker wsnyslipper__c">Iskustva kupaca</div><h2 class="wsnyslipper__h2 wsnyslipper__c">Povjerenje <em>120.000 kupaca</em></h2><p class="wsnyslipper__p wsnyslipper__c">Ocjena 4,8 od 5 – što kažu žene koje NORIKS NY Slipper nose svako jutro i svaku večer.</p><div class="wsnyslipper__grid wsnyslipper__kar"><?php foreach ( $nys_mnenja as $m ) : ?><div class="wsnyslipper__k"><div class="wsnyslipper__km"><img src="<?php echo esc_url( $nys_u . $m[0] ); ?>" alt="<?php echo esc_attr( 'Kupac u NORIKS NY Slipper papučama – ' . $m[1] ); ?>" loading="eager" decoding="async"></div><div class="wsnyslipper__kt"><span class="wsnyslipper__zv">★★★★★</span><span class="wsnyslipper__oz"><?php echo esc_html( $m[2] ); ?></span><p><?php echo esc_html( $m[3] ); ?></p><span class="wsnyslipper__ime"><i class="wsnyslipper__av" aria-hidden="true"><?php echo esc_html( mb_substr( $m[1], 0, 1 ) ); ?></i><?php echo esc_html( $m[1] ); ?> <small>· Provjereni kupac</small></span></div></div><?php endforeach; ?></div></div></section>
<section class="wsnyslipper__s npg-s"><?php $npg = array( 'izdelek' => 'NORIKS NY Slipper', 'barva' => '#b9987a' ); include __DIR__ . '/noriks-pogoji.php'; ?></section>
</div>
<style>
.wsnyslipper{color:#1c1c1c;font-family:inherit}
.wsnyslipper__s{padding:72px 0;background:#fff}.wsnyslipper__s--bg{background:#f6f0ea}
.wsnyslipper__v{width:100%;max-width:1240px;margin:0 auto;padding:0 24px;box-sizing:border-box}
.wsnyslipper__c{text-align:center}
.wsnyslipper__kicker{display:inline-flex;align-items:center;gap:10px;font-size:13px;letter-spacing:1.4px;text-transform:uppercase;color:#8a6a4f;margin:0 0 10px;font-weight:800}
.wsnyslipper__kicker::before{content:"";width:26px;height:2px;background:#b9987a;border-radius:2px}
.wsnyslipper__kicker.wsnyslipper__c{display:flex;justify-content:center}
.wsnyslipper__h2{font-size:clamp(26px,3vw,36px);font-weight:800;line-height:1.2;margin:0 0 18px;color:#1c1c1c}.wsnyslipper__h2 em{font-style:italic;color:#8a6a4f}
.wsnyslipper__p{font-size:16px;line-height:1.65;color:#333;margin:0 0 14px}
.wsnyslipper__p2{margin-top:16px!important;color:#555!important;font-size:14.5px!important}
.wsnyslipper__zak{font-size:16.5px;font-weight:800;line-height:1.5;margin:20px 0 0;padding-left:14px;border-left:3px solid #b9987a}
.wsnyslipper__dva{display:grid;grid-template-columns:1fr 1fr;gap:56px;align-items:center}
.wsnyslipper__dva--rev>div:first-child{order:2}
.wsnyslipper__media{position:relative;border-radius:18px;overflow:hidden;box-shadow:0 14px 36px rgba(110,80,55,.16);aspect-ratio:4/5;background:#fff}
.wsnyslipper__media img{width:100%;height:100%;object-fit:cover;display:block}
.wsnyslipper__bad{position:absolute;left:16px;top:16px;background:#fff;color:#8a6a4f;font-weight:800;font-size:13px;letter-spacing:.8px;text-transform:uppercase;padding:7px 13px;border-radius:30px;box-shadow:0 4px 14px rgba(0,0,0,.12)}
.wsnyslipper__feat{list-style:none;margin:8px 0 0;padding:0;display:grid;grid-template-columns:1fr 1fr;gap:14px}
.wsnyslipper__feat--1{grid-template-columns:1fr}
.wsnyslipper__feat li{display:flex;gap:14px;align-items:flex-start;background:#fff;border-radius:16px;padding:16px;box-shadow:0 6px 20px rgba(110,80,55,.09);list-style:none;margin:0;transition:transform .2s,box-shadow .2s}
.wsnyslipper__s--bg .wsnyslipper__feat li{background:#fff}.wsnyslipper__s:not(.wsnyslipper__s--bg) .wsnyslipper__feat li{background:#fbf8f5}
.wsnyslipper__feat li:hover{transform:translateY(-2px);box-shadow:0 12px 26px rgba(110,80,55,.14)}
.wsnyslipper__feat strong{display:block;font-size:15.5px;font-weight:800;margin:0 0 3px}.wsnyslipper__feat p{margin:0;font-size:14.5px;line-height:1.5;color:#555}
.wsnyslipper__fi{flex:0 0 46px;width:46px;height:46px;border-radius:50%;background:#efe4d9;color:#8a6a4f;display:flex;align-items:center;justify-content:center}
.wsnyslipper__grid{display:grid;gap:22px;margin-top:26px}
.wsnyslipper__k{background:#fff;border-radius:16px;overflow:hidden;display:flex;flex-direction:column;box-shadow:0 8px 24px rgba(110,80,55,.10);transition:transform .2s,box-shadow .2s}
.wsnyslipper__k:hover{transform:translateY(-3px);box-shadow:0 14px 30px rgba(110,80,55,.16)}
.wsnyslipper__km img{width:100%;aspect-ratio:4/5;object-fit:cover;display:block}
.wsnyslipper__kt{padding:20px 22px 24px;flex:1;display:flex;flex-direction:column}
.wsnyslipper__kt p{margin:0 0 14px;font-size:15.5px;line-height:1.55;color:#333;flex:1}
.wsnyslipper__zv{color:#e0a33c;letter-spacing:2px;display:block;margin-bottom:8px}
.wsnyslipper__oz{align-self:flex-start;display:inline-block;font-size:13px;font-weight:700;color:#8a6a4f;background:#f6f0ea;border-radius:20px;padding:3px 10px;margin:0 0 10px}
.wsnyslipper__ime{display:flex;align-items:center;font-weight:800;font-size:14.5px}.wsnyslipper__ime small{font-weight:600;color:#777;margin-left:6px;font-size:13px}
.wsnyslipper__av{display:inline-flex;align-items:center;justify-content:center;width:30px;height:30px;border-radius:50%;background:#efe4d9;color:#8a6a4f;font-style:normal;font-weight:800;font-size:13px;margin-right:9px}
.wsnyslipper__karw{position:relative}
.wsnyslipper__kar{grid-auto-flow:column;grid-auto-columns:calc((100% - 44px)/3);overflow-x:auto;scroll-snap-type:x mandatory;scrollbar-width:none}
.wsnyslipper__kar::-webkit-scrollbar{display:none}.wsnyslipper__kar>*{scroll-snap-align:start}
.wsnyslipper__pus{position:absolute;top:42%;transform:translateY(-50%);width:44px;height:44px;border-radius:50%;border:0;background:#fff;box-shadow:0 4px 14px rgba(0,0,0,.18);font-size:24px;line-height:44px;cursor:pointer;z-index:2;color:#8a6a4f;padding:0}
.wsnyslipper__pus--l{left:-14px}.wsnyslipper__pus--d{right:-14px}
@media (max-width:860px){
.wsnyslipper__s{padding:48px 0}
.wsnyslipper__dva{grid-template-columns:1fr;gap:26px}.wsnyslipper__dva--rev>div:first-child{order:0}
.wsnyslipper__kar{grid-auto-columns:82%}.wsnyslipper__pus--l{left:4px}.wsnyslipper__pus--d{right:4px}
}
@media (max-width:767px){.wsnyslipper__v{padding:0 16px}}
@media (max-width:560px){.wsnyslipper__feat{grid-template-columns:1fr}.wsnyslipper__h2{font-size:25px}}
</style>
<script>
(function(){document.querySelectorAll('.wsnyslipper__kar').forEach(function(k){
  var w=document.createElement('div');w.className='wsnyslipper__karw';k.parentNode.insertBefore(w,k);w.appendChild(k);
  ['l','d'].forEach(function(s){var b=document.createElement('button');b.type='button';b.className='wsnyslipper__pus wsnyslipper__pus--'+s;b.setAttribute('aria-label',s==='l'?'Prethodno':'Sljedeće');b.innerHTML=s==='l'?'&#8249;':'&#8250;';
    b.addEventListener('click',function(){var x=k.firstElementChild;var d=x?x.getBoundingClientRect().width+22:300;k.scrollBy({left:s==='l'?-d:d,behavior:'smooth'});});w.appendChild(b);});
});})();
</script>
