<?php
/**
 * NORIKS Comfort - majica s ugradenim grudnjakom (orto-tank) - why sekcije po natancni strukturi originala
 * (avouria.com/products/avourias-built-in-comfort-bra-tanktop).
 *
 * STRUKTURA ORIGINALA:
   1. naslov "50,000+ Women LOVE US!" + "See Why We're The Most Shared Bra Fix On Facebook" + drsnik 8 video mnenj (video, citat, ime in starost) - pri nas naslov + karusel 8 videov v istem vrstnem redu (brez zvoka), citati prevedeni, hrvaska imena; vzgani angleski podnapisi v videih 7 in 8 prevedeni v HR, tuja znamka -> NORIKS, napisa "Pickleball OOTD" / "Casual Weekend Outfit" izrezana
   2. tekoci trak prednosti (lahko vracilo, dostava, ocena, jamstvo, brez zice) - pri nas trak 4 prednosti z ikonami (NORIKS pogoji namesto tujih)
   3. "THE PROBLEM" - slika (hrbet z zarezanim nedrckom) + "The Truth About Your Bra" (3 odstavki) - pri nas slika LEVO, besedilo DESNO
   4. "THE SOLUTION" - slika (zenska v majici) + "The Built-In Bra You'll Forget You Have On" (6 tock) - pri nas slika DESNO, besedilo LEVO s 6 tockami z ikonami
   5. "Voted #1 tank" + "Why Women Choose Avouria Over Others": primerjalna tabela (original / kopija) s kljukicami - pri nas besedilo levo, tabela desno (vrstica tujega jamstva 90 dni izpuscena)
   6. "Over 10,000 - 5 Star Reviews" (gradnik mnenj) - pri nas mnenja pod why (auto_reviews/HR_tank.php), ocena 4,8
   7. "NO RISK PROMISE" - jamstvo 90 dni - pri nas 30 dana z NORIKS pogoji (sredinsko, 3 tocke z ikonami)
   8. FAQ (7 vprasanj) - pri nas v FAQ Informacije o proizvodu (auto_reviews/FAQ_HR_tank.php)
   9. NORIKS pogoji (skupni del noriks-pogoji.php)
 * VIDEI: 8 lokalnih posnetkov /img/tank/noriks-tank-video-1.mp4 do -8.mp4 (ffmpeg, 480p, brez zvoka) s posterji .jpg
 * BARVA ORIGINALA: #c9a58a (nude/bez barva majice in toplih tonov strani originala); svetel ton za --bg #f7efe9
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
$tk_u = get_template_directory_uri() . '/img/tank/';
$tk_svg = function ( $d, $s = 24 ) {
	return '<svg viewBox="0 0 24 24" width="' . $s . '" height="' . $s . '" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">' . $d . '</svg>';
};
$tk_ik = array(
	'srce'    => '<path d="M12 20s-7-4.4-7-10a4 4 0 0 1 7-2.6A4 4 0 0 1 19 10c0 5.6-7 10-7 10z"/>',
	'zica'    => '<circle cx="12" cy="12" r="8.5"/><path d="M6 6l12 12"/>',
	'naram'   => '<path d="M7 3v6c0 3 2 5 5 5s5-2 5-5V3"/><path d="M5 21c1-4 3.5-6 7-6s6 2 7 6"/>',
	'glatko'  => '<path d="M4 8c3-2 5 2 8 0s5-2 8 0"/><path d="M4 13c3-2 5 2 8 0s5-2 8 0"/><path d="M4 18h16"/>',
	'zrak'    => '<path d="M3 9h11a3 3 0 1 0-3-3"/><path d="M3 14h15a3 3 0 1 1-3 3"/>',
	'majica'  => '<path d="M8 3l-4 3v14h16V6l-4-3"/><path d="M8 3c0 2.2 1.8 4 4 4s4-1.8 4-4"/>',
	'povrat'  => '<path d="M4 12a8 8 0 1 0 2.4-5.7"/><path d="M4 4v4.5h4.5"/><path d="M12 8v4l2.6 2"/>',
	'kamion'  => '<path d="M2 7h11v9H2z"/><path d="M13 10h4l3 3v3h-7"/><circle cx="6" cy="17.5" r="1.8"/><circle cx="17" cy="17.5" r="1.8"/>',
	'zvijezda'=> '<path d="M12 3l2.7 5.6 6.1.9-4.4 4.3 1 6.1L12 17l-5.4 2.9 1-6.1L3.2 9.5l6.1-.9L12 3z"/>',
	'novac'   => '<rect x="2.5" y="6.5" width="19" height="11" rx="2"/><circle cx="12" cy="12" r="2.6"/><path d="M6 9.5v5M18 9.5v5"/>',
	'zamjena' => '<path d="M4 8h13l-3-3"/><path d="M20 16H7l3 3"/>',
);
$tk_li = function ( $ik, $naslov, $tekst ) use ( $tk_svg, $tk_ik ) {
	return '<li><span class="wstank__fi">' . $tk_svg( $tk_ik[ $ik ] ) . '</span><div><strong>' . esc_html( $naslov ) . '</strong><p>' . esc_html( $tekst ) . '</p></div></li>';
};
$tk_videi = array(
	array( 'noriks-tank-video-1.mp4', 'noriks-tank-video-1.jpg', '„Nikad više neću nositi običan grudnjak.“', 'Danica, 64 godine' ),
	array( 'noriks-tank-video-2.mp4', 'noriks-tank-video-2.jpg', '„Obožavam svoju. Tako je udobna!“', 'Marta, 66 godina' ),
	array( 'noriks-tank-video-7.mp4', 'noriks-tank-video-7.jpg', '„Zbogom, grudnjaci!“', 'Sanja, 70 godina' ),
	array( 'noriks-tank-video-3.mp4', 'noriks-tank-video-3.jpg', '„Napokon nema više boli u ramenima!“', 'Renata, 43 godine' ),
	array( 'noriks-tank-video-4.mp4', 'noriks-tank-video-4.jpg', '„Udobnost koja stvarno traje.“', 'Snježana, 69 godina' ),
	array( 'noriks-tank-video-5.mp4', 'noriks-tank-video-5.jpg', '„Iskreno, kupila sam je za svaki dan!“', 'Ljiljana, 74 godine' ),
	array( 'noriks-tank-video-8.mp4', 'noriks-tank-video-8.jpg', '„Obožavam majicu s ugrađenim grudnjakom!“', 'Lea, 62 godine' ),
	array( 'noriks-tank-video-6.mp4', 'noriks-tank-video-6.jpg', '„Odlična majica za svaki dan!“', 'Monika, 41 godina' ),
);
?>
<div class="wstank">
<section class="wstank__s wstank__s--bg"><div class="wstank__v"><div class="wstank__kicker wstank__c">120.000 kupaca vjeruje NORIKS-u</div><h2 class="wstank__h2 wstank__c">Pogledajte zašto je žene <em>dijele dalje</em></h2><p class="wstank__p wstank__c">Prave žene, prava tijela – i ni jedan grudnjak s žicom. Što kažu nakon prvog dana u majici s ugrađenim grudnjakom.</p><div class="wstank__grid wstank__kar"><?php foreach ( $tk_videi as $v ) : ?><div class="wstank__k"><div class="wstank__kv"><video src="<?php echo esc_url( $tk_u . $v[0] ); ?>" poster="<?php echo esc_url( $tk_u . $v[1] ); ?>" autoplay muted loop playsinline preload="metadata"></video></div><div class="wstank__kt"><span class="wstank__zv" role="img" aria-label="5 zvjezdica"><?php echo str_repeat( '<svg viewBox="0 0 24 24" width="15" height="15" fill="#e0a33c" aria-hidden="true"><path d="M12 2.8l2.8 5.8 6.3.9-4.6 4.4 1.1 6.3L12 17.2l-5.6 3 1.1-6.3L2.9 9.5l6.3-.9L12 2.8z"/></svg>', 5 ); ?></span><strong class="wstank__nm"><?php echo esc_html( $v[2] ); ?></strong><span class="wstank__ime"><?php echo esc_html( $v[3] ); ?></span></div></div><?php endforeach; ?></div></div></section>
<section class="wstank__s wstank__s--traka"><div class="wstank__v"><div class="wstank__trak"><?php foreach ( array( array( 'povrat', 'Lak povrat i zamjena', '30 dana' ), array( 'kamion', 'Besplatna dostava', 'iznad 70 €' ), array( 'zvijezda', 'Ocjena 4,8 / 5', '1.081 recenzija' ), array( 'zica', 'Bez žice', 'bez nelagode' ) ) as $c ) : ?><div class="wstank__tc"><span class="wstank__ti"><?php echo $tk_svg( $tk_ik[ $c[0] ], 22 ); ?></span><div><strong><?php echo esc_html( $c[1] ); ?></strong><span><?php echo esc_html( $c[2] ); ?></span></div></div><?php endforeach; ?></div></div></section>
<section class="wstank__s wstank__s--bg"><div class="wstank__v wstank__dva"><div class="wstank__media"><img src="<?php echo esc_url( $tk_u . 'noriks-tank-problem.webp' ); ?>" alt="Leđa žene s grudnjakom čije naramenice i traka urezuju u kožu" loading="eager" decoding="async"><span class="wstank__bad">Problem</span></div><div><div class="wstank__kicker">Problem</div><h2 class="wstank__h2">Istina o vašem <em>grudnjaku</em></h2><p class="wstank__p"><strong>Desetljećima se snalazite s pogrešnim grudnjakom.</strong> Naramenice se urezuju u ramena, traka pritišće prsa, a na kraju svakog dana ostaju crveni tragovi i udubljenja. Živite s tim toliko dugo da vam se čini normalno.</p><p class="wstank__p"><strong>A s godinama je sve teže.</strong> Stezanje je sve dublje, tragovi sporije nestaju, a bol u ramenima traje još dugo nakon što ga napokon skinete. Godinama – i puno novca – tražite onaj koji ne boli.</p><p class="wstank__zak">Što ako biste se cijeli dan osjećali udobno i imali potporu?</p></div></div></section>
<section class="wstank__s"><div class="wstank__v wstank__dva wstank__dva--rev"><div class="wstank__media"><img src="<?php echo esc_url( $tk_u . 'noriks-tank-rjesenje.webp' ); ?>" alt="Nasmijana žena u bež NORIKS Comfort majici s ugrađenim grudnjakom" loading="eager" decoding="async"><span class="wstank__bad">Rješenje</span></div><div><div class="wstank__kicker">Rješenje</div><h2 class="wstank__h2">Ugrađeni grudnjak za koji <em>zaboravite da ga nosite</em></h2><p class="wstank__p">NORIKS Comfort majica nije samo još jedan grudnjak. Ispravlja sve što vaš stari grudnjak sa žicom radi krivo.</p><ul class="wstank__feat"><?php echo $tk_li( 'srce', 'Ugrađena potpora', 'Pravi grudnjak ušiven unutra – drži i podiže bez žice.' ); echo $tk_li( 'zica', 'Bez žice', 'Ništa vas ne bode u prsa do podneva. Bol jednostavno nestane.' ); echo $tk_li( 'naram', 'Široke naramenice', 'Mekane i ravne – bez crvenih tragova na ramenima.' ); echo $tk_li( 'glatko', 'Sve izglađuje', 'Leži ravno pod svakim topom, bez vidljivih linija grudnjaka.' ); echo $tk_li( 'zrak', 'Prozračna tkanina', 'Lagana i prozračna – svježe cijeli dan, i ljeti.' ); echo $tk_li( 'majica', 'Lako se oblači', 'Navuče se kao majica – bez kopči i zakački.' ); ?></ul></div></div></section>
<section class="wstank__s wstank__s--bg"><div class="wstank__v wstank__dva wstank__dva--tab"><div><div class="wstank__kicker">Izbor broj 1</div><h2 class="wstank__h2">Zašto žene biraju <em>NORIKS Comfort</em></h2><p class="wstank__p">Majica s ugrađenim grudnjakom nije isto što i tanka majica s našivenim pojasom. Razlika se vidi već prvi dan – i nakon prvog pranja.</p><ul class="wstank__kv"><li>Pravi ušiveni grudnjak, ne tanki pojas</li><li>Ne gubi oblik nakon pranja</li><li>Veličine prema opsegu prsa</li></ul><p class="wstank__zak">Jedna majica umjesto grudnjaka i majice.</p></div><div><div class="wstank__tw"><table class="wstank__tab"><thead><tr><th></th><th class="wstank__nas">NORIKS Comfort</th><th>Jeftine kopije</th></tr></thead><tbody><?php foreach ( array( 'Prava potpora', 'Bez žice', 'Bez tragova na koži', 'Glatko pristajanje', 'Zadržava oblik', 'Točne veličine', 'Prozračna tkanina' ) as $r ) : ?><tr><td><?php echo esc_html( $r ); ?></td><td class="wstank__nas"><span class="wstank__da">✓</span></td><td><span class="wstank__ne">✕</span></td></tr><?php endforeach; ?></tbody></table></div></div></div></section>
<section class="wstank__s"><div class="wstank__v wstank__30"><div class="wstank__kicker wstank__c">Bez rizika</div><h2 class="wstank__h2 wstank__c">Isprobajte je <em>30 dana bez rizika</em></h2><p class="wstank__p wstank__c">Nosite je. Stavite je na test. Ako ne osjetite razliku, ako nije udobna kako ste se nadali ili vam ne daje potporu koja vam treba – javite nam se unutar 30 dana i vraćamo vam novac ili mijenjamo veličinu. Bez kompliciranja i bez pitanja.</p><p class="wstank__p wstank__c"><strong>Ne gubite ništa – osim grudnjaka koji vas boli.</strong></p><ul class="wstank__feat wstank__feat--3"><?php echo $tk_li( 'povrat', '30 dana za povrat', 'Rok teče od dana kad paket stigne.' ); echo $tk_li( 'zamjena', 'Zamjena veličine', 'Kriva veličina? Zamijenite je unutar 30 dana.' ); echo $tk_li( 'novac', 'Plaćanje pouzećem', 'Platite tek kad paket stigne.' ); ?></ul></div></section>
<section class="wstank__s wstank__s--bg npg-s"><?php $npg = array( 'izdelek' => 'NORIKS Comfort majicu', 'barva' => '#c9a58a' ); include __DIR__ . '/noriks-pogoji.php'; ?></section>
</div>
<style>
.wstank{color:#1c1c1c;font-family:inherit}
.wstank__s{padding:72px 0;background:#fff}.wstank__s--bg{background:#f7efe9}
.wstank__s--traka{padding:30px 0}
.wstank__v{width:100%;max-width:1240px;margin:0 auto;padding:0 24px;box-sizing:border-box}
.wstank__c{text-align:center}
.wstank__kicker{display:inline-flex;align-items:center;gap:10px;font-size:13px;letter-spacing:1.4px;text-transform:uppercase;color:#9a6b4f;margin:0 0 10px;font-weight:800}
.wstank__kicker::before{content:"";width:26px;height:2px;background:#c9a58a;border-radius:2px}
.wstank__kicker.wstank__c{display:flex;justify-content:center}
.wstank__h2{font-size:clamp(26px,3vw,36px);font-weight:800;line-height:1.2;margin:0 0 18px;color:#1c1c1c}.wstank__h2 em{font-style:italic;color:#9a6b4f}
.wstank__p{font-size:16px;line-height:1.65;color:#333;margin:0 0 14px}
.wstank__zak{font-size:16.5px;font-weight:800;line-height:1.5;margin:20px 0 0;padding-left:14px;border-left:3px solid #c9a58a}
.wstank__dva{display:grid;grid-template-columns:1fr 1fr;gap:56px;align-items:center}
.wstank__dva--rev>div:first-child{order:2}
.wstank__dva--tab{grid-template-columns:6fr 5fr}
.wstank__media{position:relative;border-radius:18px;overflow:hidden;box-shadow:0 14px 36px rgba(120,80,50,.16);aspect-ratio:4/5;background:#fff}
.wstank__media img{width:100%;height:100%;object-fit:cover;display:block}
.wstank__bad{position:absolute;left:16px;top:16px;background:#fff;color:#9a6b4f;font-weight:800;font-size:13px;letter-spacing:.8px;text-transform:uppercase;padding:7px 13px;border-radius:30px;box-shadow:0 4px 14px rgba(0,0,0,.12)}
.wstank__feat{list-style:none;margin:8px 0 0;padding:0;display:grid;grid-template-columns:1fr 1fr;gap:14px}
.wstank__feat--3{grid-template-columns:repeat(3,1fr);margin-top:26px;text-align:left}
.wstank__feat li{display:flex;gap:14px;align-items:flex-start;background:#fff;border-radius:16px;padding:16px;box-shadow:0 6px 20px rgba(120,80,50,.09);list-style:none;margin:0;transition:transform .2s,box-shadow .2s}
.wstank__s:not(.wstank__s--bg) .wstank__feat li{background:#fcf8f5}
.wstank__feat li:hover{transform:translateY(-2px);box-shadow:0 12px 26px rgba(120,80,50,.14)}
.wstank__feat strong{display:block;font-size:15.5px;font-weight:800;margin:0 0 3px}.wstank__feat p{margin:0;font-size:14.5px;line-height:1.5;color:#555}
.wstank__fi{flex:0 0 46px;width:46px;height:46px;border-radius:50%;background:#efe1d6;color:#9a6b4f;display:flex;align-items:center;justify-content:center}
.wstank__trak{display:grid;grid-template-columns:repeat(4,1fr)}
.wstank__tc{display:flex;align-items:center;justify-content:center;gap:12px;padding:6px 14px;border-left:1px solid rgba(0,0,0,.08)}
.wstank__tc:first-child{border-left:0}
.wstank__tc strong{display:block;font-size:15.5px;font-weight:800;line-height:1.2}.wstank__tc span{font-size:13.5px;color:#666}
.wstank__ti{flex:0 0 44px;width:44px;height:44px;border-radius:50%;background:#efe1d6;color:#9a6b4f;display:flex;align-items:center;justify-content:center}
.wstank__grid{display:grid;gap:22px;margin-top:26px}
.wstank__k{background:#fff;border-radius:16px;overflow:hidden;display:flex;flex-direction:column;box-shadow:0 8px 24px rgba(120,80,50,.10)}
.wstank__kv video{width:100%;aspect-ratio:9/16;object-fit:cover;display:block;background:#eee}
.wstank__kt{padding:16px 18px 18px}
.wstank__zv{display:flex;gap:2px;margin:0 0 6px}
.wstank__nm{display:block;font-size:16px;font-weight:800;line-height:1.35;margin:0 0 4px}
.wstank__ime{font-size:13.5px;color:#777;font-weight:600}
.wstank__karw{position:relative}
.wstank__kar{grid-auto-flow:column;grid-auto-columns:calc((100% - 66px)/4);overflow-x:auto;scroll-snap-type:x mandatory;scrollbar-width:none}
.wstank__kar::-webkit-scrollbar{display:none}.wstank__kar>*{scroll-snap-align:start}
.wstank__pus{position:absolute;top:40%;transform:translateY(-50%);width:44px;height:44px;border-radius:50%;border:0;background:#fff;box-shadow:0 4px 14px rgba(0,0,0,.18);font-size:24px;line-height:44px;cursor:pointer;z-index:2;color:#9a6b4f;padding:0}
.wstank__pus--l{left:-14px}.wstank__pus--d{right:-14px}
.wstank__kv{list-style:none;margin:6px 0 0;padding:0}
ul.wstank__kv li{position:relative;padding:0 0 0 32px;margin:0 0 12px;font-size:15.5px;line-height:1.55;color:#333;list-style:none;font-weight:600}
ul.wstank__kv li::before{content:"✓";position:absolute;left:0;top:0;width:22px;height:22px;border-radius:50%;background:#efe1d6;color:#9a6b4f;font-weight:800;font-size:13px;display:flex;align-items:center;justify-content:center}
.wstank__tw{overflow-x:auto;border-radius:16px;box-shadow:0 8px 24px rgba(120,80,50,.10);background:#fff}
.wstank__tab{width:100%;border-collapse:collapse;font-size:15px;margin:0}
.wstank__tab th{background:#1c1c1c!important;color:#fff!important;font-weight:800;padding:14px 12px;text-align:center;border:0}
.wstank__tab th.wstank__nas{background:#9a6b4f!important}
.wstank__tab td{padding:12px;text-align:center;border:0;border-bottom:1px solid #efe4dc;color:#333}
.wstank__tab td:first-child{text-align:left;font-weight:700;padding-left:18px}
.wstank__tab td.wstank__nas{background:#fbf6f2}
.wstank__tab tbody tr:last-child td{border-bottom:0}
.wstank__da,.wstank__ne{display:inline-flex;width:24px;height:24px;border-radius:50%;align-items:center;justify-content:center;font-size:13px;font-weight:800}
.wstank__da{background:#9a6b4f;color:#fff}.wstank__ne{background:#eee;color:#999}
.wstank__30 .wstank__p.wstank__c{max-width:none}
@media (max-width:1024px){.wstank__kar{grid-auto-columns:calc((100% - 44px)/3)}.wstank__trak{grid-template-columns:repeat(2,1fr);row-gap:16px}.wstank__tc:nth-child(3){border-left:0}}
@media (max-width:860px){
.wstank__s{padding:48px 0}.wstank__s--traka{padding:26px 0}
.wstank__dva,.wstank__dva--tab{grid-template-columns:1fr;gap:26px}.wstank__dva--rev>div:first-child{order:0}
.wstank__kar{grid-auto-columns:70%}.wstank__pus--l{left:4px}.wstank__pus--d{right:4px}
.wstank__feat--3{grid-template-columns:1fr}
}
@media (max-width:767px){.wstank__v{padding:0 16px}}
@media (max-width:560px){.wstank__feat{grid-template-columns:1fr}.wstank__h2{font-size:25px}.wstank__tc{flex-direction:column;text-align:center;gap:6px;padding:4px 6px}}
</style>
<script>
(function(){document.querySelectorAll('.wstank__kar').forEach(function(k){
  var w=document.createElement('div');w.className='wstank__karw';k.parentNode.insertBefore(w,k);w.appendChild(k);
  ['l','d'].forEach(function(s){var b=document.createElement('button');b.type='button';b.className='wstank__pus wstank__pus--'+s;b.setAttribute('aria-label',s==='l'?'Prethodno':'Sljedeće');b.innerHTML=s==='l'?'&#8249;':'&#8250;';
    b.addEventListener('click',function(){var x=k.firstElementChild;var d=x?x.getBoundingClientRect().width+22:300;k.scrollBy({left:s==='l'?-d:d,behavior:'smooth'});});w.appendChild(b);});
});})();
</script>
