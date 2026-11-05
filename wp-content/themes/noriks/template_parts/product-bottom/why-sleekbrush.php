<?php
/**
 * NORIKS SleekBrush - bezicna cetka za ravnanje kose (orto-sleekbrush) - why sekcije po natancni strukturi originala
 * (flownbeauty.com/products/flown-portable-straightener-brush-gobrush-pro-new).
 *
 * STRUKTURA ORIGINALA:
   1. trak 4 prednosti z ikonami (Convenience & Speed, Salon Quality Results, Portability, Easily Charge Anywhere) - pri nas trak 4 kartic z ikonami
   2. media with text: video LEVO, besedilo DESNO ("Just 5 Minutes And You're Ready to Go") + 2 ikoni (vsi tipi kose, sjajna kosa) - pri nas enako (video levo, besedilo desno, 2 ikoni)
   3. primerjalna tabela "Why we crush our competition" (uvod o 30-dnevnem preizkusu + tabela 6 vrstic) - pri nas uvod + <table> NORIKS vs ostali
   4. naslov + 6 kartic mnenj s fotografijami ("Results speak for themselves") - pri nas mreza 6 kartic (3 v vrsti) s fotografijami kupcev
   5. 3 odstotki ("Proven benefits, proven results": 98 % / 89 % / 64 %) - pri nas 3 kartice s stevilkami in ikonami
   6. drsnik prije/poslije ("Get this effect on the go") - pri nas drsnik prije/poslije z vlecenjem
   7. media with text: slika DESNO, besedilo LEVO ("Try It Risk-Free for 30 Days") + 2 ikoni (30 min baterija, bez ostecenja od topline) - pri nas slika desno (cik-cak), besedilo levo
   8. karusel 7 slik prije/poslije ("FLOWN is for everyone") - pri nas karusel 7 slik prije/poslije (oznake PRIJE/POSLIJE, Higgsfield)
   9. FAQ -> FAQ_HR_sleekbrush.php; mnenja kupcev -> HR_sleekbrush.php
   10. NORIKS pogoji (skupni del noriks-pogoji.php); tuje stevilke kupcev (100.000+, 400K+) zamenjane z 120.000
 * VIDEO: lokalni posnetek /img/sleekbrush/noriks-sleekbrush-video.mp4 (GIF originala pretvorjen v mp4, brez napisov) s posterjem .jpg
 * BARVA ORIGINALA: #6b3fa0 (vijolicna akcentna barva infografik in oznak na originalu); svetel ton za --bg #f3eefa
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
$sb_u   = get_template_directory_uri() . '/img/sleekbrush/';
$sb_svg = function ( $d, $s = 24 ) {
	return '<svg viewBox="0 0 24 24" width="' . $s . '" height="' . $s . '" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">' . $d . '</svg>';
};
$sb_ik = array(
	'brzo'    => '<circle cx="12" cy="13" r="8"/><path d="M12 9v4l2.5 2.5"/><path d="M9.5 2.5h5"/>',
	'salon'   => '<path d="M6 3l6 9 6-9"/><circle cx="6.5" cy="17.5" r="3"/><circle cx="17.5" cy="17.5" r="3"/><path d="M12 12l-3.5 3.5M12 12l3.5 3.5"/>',
	'torba'   => '<path d="M5 8h14l-1 12H6L5 8z"/><path d="M9 8V6a3 3 0 0 1 6 0v2"/>',
	'punjenje'=> '<rect x="7" y="2.5" width="10" height="19" rx="2.5"/><path d="M12.8 7.5L10.5 12h3l-2.3 4.5"/>',
	'kosa'    => '<path d="M8 3c-2 4 2 6 0 10s2 6 0 8"/><path d="M12 3c-2 4 2 6 0 10s2 6 0 8"/><path d="M16 3c-2 4 2 6 0 10s2 6 0 8"/>',
	'sjaj'    => '<path d="M12 3l1.8 4.7L18.5 9.5l-4.7 1.8L12 16l-1.8-4.7L5.5 9.5l4.7-1.8z"/><path d="M19 15l.8 2 2 .8-2 .8-.8 2-.8-2-2-.8 2-.8z"/>',
	'baterija'=> '<rect x="2.5" y="7" width="17" height="10" rx="2"/><path d="M21.5 10.5v3"/><path d="M6 10v4M9.5 10v4M13 10v4"/>',
	'plamen'  => '<path d="M12 3c2.5 3 4 5.5 4 8.5a4 4 0 0 1-8 0c0-1.6.6-3 1.6-4.3.3 1.3 1 2.1 2 2.4C11 7.5 11.3 5.3 12 3z"/><path d="M4 4l16 16"/>',
	'osmijeh' => '<circle cx="12" cy="12" r="9"/><path d="M8.5 14.5a4.5 4.5 0 0 0 7 0"/><path d="M9 9.5h.01M15 9.5h.01"/>',
	'sat'     => '<circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/>',
	'zamjena' => '<path d="M4 8h13l-3-3"/><path d="M20 16H7l3 3"/>',
	'kvacica' => '<path d="M5 12.5l4.5 4.5L19 7.5"/>',
	'iks'     => '<path d="M7 7l10 10M17 7L7 17"/>',
	'lijevo'  => '<path d="M15 5l-7 7 7 7"/>',
	'desno'   => '<path d="M9 5l7 7-7 7"/>',
);
$sb_trak = array(
	array( 'brzo', 'Brzo i praktično', 'Glatka frizura za manje od 5 minuta' ),
	array( 'salon', 'Rezultat kao iz salona', 'Uredna, sjajna kosa bez frizera' ),
	array( 'torba', 'Stane u torbicu', 'Bežična – za put, ured i auto' ),
	array( 'punjenje', 'Punite bilo gdje', 'USB-C punjenje, do 30 min rada' ),
);
$sb_tablica = array(
	'Oblikovanje u pokretu, bez kabela',
	'Ionska tehnologija',
	'Lagana – lakša od mobitela',
	'3 razine temperature',
	'Preporučuju frizeri',
	'Bez skupih posjeta salonu',
);
$sb_mnenja = array(
	array( 'noriks-sleekbrush-kupac-1', 'Moja nova omiljena četka', 'Koristim je više od dva mjeseca i radi kao prvi dan. Uštedjela sam puno novca na odlascima u salon, a kosa mi je na dodir zdravija. Rezultati su uvijek isti – komplimente za kosu dobivam gotovo svaki dan. Najbolja investicija u ljepotu dosad.', 'Ivana K.' ),
	array( 'noriks-sleekbrush-kupac-2', 'Nosim je posvuda', 'Najbolje je to što je bežična – mogu je ponijeti bilo kamo i ne moram tražiti utičnicu. Uz to je puno sigurnija od klasične pegle za kosu, bez straha od opeklina. Za brzi popravak frizure u pokretu – savršena.', 'Martina P.' ),
	array( 'noriks-sleekbrush-kupac-3', 'Nezamjenjiva', 'Obožavam svoju bežičnu četku za ravnanje! Jednostavna je za korištenje, brzo se zagrije i lagano klizi kroz kosu. Osjećam se puno sigurnije nego s klasičnom peglom. Kosa mi izgleda glatko i zdravije je nego ikad.', 'Sanja B.' ),
	array( 'noriks-sleekbrush-kupac-4', 'Čudesna četka', 'Bila sam skeptična prema „frizuri za 5 minuta". Kako to može biti tako brzo? Već nakon prve upotrebe bila sam uvjerena. Moja rutina od 45 minuta pala je na samo 5 – čak sam mjerila vrijeme! Sad ujutro mirno odgodim alarm.', 'Petra M.' ),
	array( 'noriks-sleekbrush-kupac-5', 'Tako je jednostavna!', 'Nikad nisam znala sama urediti kosu. Figaro me plašio, a pegla mi je ostavljala kosu nakostriješenu. Ova četka je toliko jednostavna da je i ja znam koristiti! Jedan prolaz i kosa izgleda kao da sam upravo izašla iz salona.', 'Ana Đ.' ),
	array( 'noriks-sleekbrush-kupac-6', 'Napokon bez brige', 'Puno je sigurnija od klasičnih pegli, pa je savršena i za moju kćer. Bežična je, zagrijava se ravnomjerno i bez opasnosti od opeklina. Jutra su nam sada bez stresa, a kći samouvjereno sama uređuje kosu.', 'Snježana T.' ),
);
$sb_postotci = array(
	array( 'osmijeh', '98 %', 'kaže da se više ne brine zbog loših dana za kosu' ),
	array( 'sat', '89 %', 'primijetilo je da na frizuru troši i do 40 minuta manje' ),
	array( 'zamjena', '64 %', 'odustaje od klasične pegle s kabelom' ),
);
?>
<div class="wssleek">
<section class="wssleek__s wssleek__s--bg"><div class="wssleek__v"><div class="wssleek__trak"><?php foreach ( $sb_trak as $t ) : ?><div class="wssleek__tk"><span class="wssleek__ti"><?php echo $sb_svg( $sb_ik[ $t[0] ], 28 ); ?></span><div><strong><?php echo esc_html( $t[1] ); ?></strong><span><?php echo esc_html( $t[2] ); ?></span></div></div><?php endforeach; ?></div></div></section>
<section class="wssleek__s"><div class="wssleek__v wssleek__dva"><div class="wssleek__media"><video src="<?php echo esc_url( $sb_u . 'noriks-sleekbrush-video.mp4' ); ?>" poster="<?php echo esc_url( $sb_u . 'noriks-sleekbrush-video.jpg' ); ?>" autoplay muted loop playsinline preload="metadata"></video><span class="wssleek__znacka">Prije i poslije</span></div><div><div class="wssleek__kicker">Samo 5 minuta</div><h2 class="wssleek__h2">Samo 5 minuta i <em>spremni ste za izlazak</em></h2><p class="wssleek__p">Kao da ste upravo izašli iz frizerskog salona. Recite zbogom lošim danima za kosu – NORIKS SleekBrush je bežična, kompaktna četka koja vam za samo 5 minuta daje rezultat kao iz salona, gdje god bili.</p><p class="wssleek__p">Savršena je za putovanja, ured ili brzi popravak frizure. Stane u torbicu, pa vam je glatka i uredna kosa uvijek nadohvat ruke – kad god zatreba, bez traženja utičnice.</p><p class="wssleek__p">Uživajte u besprijekornoj frizuri u pokretu i zaboravite na staru peglu s kabelom koja vas veže uz zid kupaonice.</p><div class="wssleek__dvaik"><div><span class="wssleek__fi"><?php echo $sb_svg( $sb_ik['kosa'] ); ?></span><strong>Za sve tipove kose</strong></div><div><span class="wssleek__fi"><?php echo $sb_svg( $sb_ik['sjaj'] ); ?></span><strong>Sjajna i zdrava kosa</strong></div></div><p class="wssleek__zak">Glatka kosa za 5 minuta – bilo gdje, bilo kad.</p></div></div></section>
<section class="wssleek__s wssleek__s--bg"><div class="wssleek__v"><div class="wssleek__kicker wssleek__c">Usporedba</div><h2 class="wssleek__h2 wssleek__c">Zašto smo <em>bolji od konkurencije</em></h2><p class="wssleek__p wssleek__c">Sigurni smo da ćete NORIKS SleekBrush zavoljeti – zato imate 30 dana za povrat novca. Isprobajte koliko je praktično oblikovati kosu u pokretu, a ako niste potpuno zadovoljni, jednostavno je vratite.</p><div class="wssleek__tw"><table class="wssleek__tab"><thead><tr><th></th><th class="wssleek__mi">NORIKS SleekBrush</th><th>Ostali</th></tr></thead><tbody><?php foreach ( $sb_tablica as $r ) : ?><tr><td><?php echo esc_html( $r ); ?></td><td class="wssleek__mi"><span class="wssleek__da"><?php echo $sb_svg( $sb_ik['kvacica'], 16 ); ?></span></td><td><span class="wssleek__ne"><?php echo $sb_svg( $sb_ik['iks'], 16 ); ?></span></td></tr><?php endforeach; ?></tbody></table></div><p class="wssleek__zak wssleek__zak--c">Oblikujte kosu bez brige – uz NORIKS je vaše zadovoljstvo zajamčeno.</p></div></section>
<section class="wssleek__s"><div class="wssleek__v"><div class="wssleek__kicker wssleek__c">Više od 120.000 zadovoljnih kupaca</div><h2 class="wssleek__h2 wssleek__c">Rezultati <em>govore sami za sebe</em></h2><div class="wssleek__grid wssleek__g3"><?php foreach ( $sb_mnenja as $m ) : ?><div class="wssleek__k"><div class="wssleek__km"><img src="<?php echo esc_url( $sb_u . $m[0] . '.webp' ); ?>" alt="<?php echo esc_attr( 'Kupac s NORIKS SleekBrush četkom – ' . $m[1] ); ?>" loading="eager" decoding="async"></div><div class="wssleek__kt"><span class="wssleek__zv">★★★★★</span><strong class="wssleek__nm"><?php echo esc_html( $m[1] ); ?></strong><p>„<?php echo esc_html( $m[2] ); ?>"</p><span class="wssleek__ime"><?php echo esc_html( $m[3] ); ?> · provjereni kupac</span></div></div><?php endforeach; ?></div></div></section>
<section class="wssleek__s wssleek__s--bg"><div class="wssleek__v"><div class="wssleek__kicker wssleek__c">Dokazani rezultati</div><h2 class="wssleek__h2 wssleek__c">Dokazane prednosti, <em>dokazani rezultati</em></h2><div class="wssleek__grid wssleek__g3"><?php foreach ( $sb_postotci as $p ) : ?><div class="wssleek__pk"><span class="wssleek__ki"><?php echo $sb_svg( $sb_ik[ $p[0] ], 26 ); ?></span><strong class="wssleek__broj"><?php echo esc_html( $p[1] ); ?></strong><p><?php echo esc_html( $p[2] ); ?></p><span class="wssleek__fn">*Na temelju 4-tjednog neovisnog panela korisnika</span></div><?php endforeach; ?></div></div></section>
<section class="wssleek__s"><div class="wssleek__v"><div class="wssleek__kicker wssleek__c">Prije / poslije</div><h2 class="wssleek__h2 wssleek__c">Postignite ovaj efekt <em>u pokretu</em></h2><p class="wssleek__p wssleek__c">i uživajte u zdravoj, sjajnoj kosi gdje god bili. Povucite klizač i usporedite.</p><div class="wssleek__ba" style="--sb-poz:50%"><img src="<?php echo esc_url( $sb_u . 'noriks-sleekbrush-poslije.webp' ); ?>" alt="Kosa nakon NORIKS SleekBrush četke – glatka i sjajna" loading="eager" decoding="async"><div class="wssleek__ba-pr"><img src="<?php echo esc_url( $sb_u . 'noriks-sleekbrush-prije.webp' ); ?>" alt="Kosa prije – nakostriješena i neuredna" loading="eager" decoding="async"></div><span class="wssleek__ba-l">Prije</span><span class="wssleek__ba-d">Poslije</span><span class="wssleek__ba-crta"><span><?php echo $sb_svg( $sb_ik['lijevo'], 16 ) . $sb_svg( $sb_ik['desno'], 16 ); ?></span></span><input type="range" min="0" max="100" value="50" aria-label="Usporedba prije i poslije" oninput="this.parentNode.style.setProperty('--sb-poz',this.value+'%')"></div></div></section>
<section class="wssleek__s wssleek__s--bg"><div class="wssleek__v wssleek__dva wssleek__dva--rev"><div class="wssleek__media wssleek__media--kv"><img src="<?php echo esc_url( $sb_u . 'noriks-sleekbrush-30-dana.webp' ); ?>" alt="Žena s NORIKS SleekBrush četkom – 30 dana za povrat novca" loading="eager" decoding="async"></div><div><div class="wssleek__kicker">Bez rizika</div><h2 class="wssleek__h2">Isprobajte bez rizika <em>30 dana</em></h2><p class="wssleek__p">Isprobajte prijenosnu četku za oblikovanje NORIKS SleekBrush bez brige. Imate 30 dana da vidite razliku na svojoj kosi – kod kuće, na poslu ili na putu.</p><p class="wssleek__p">Ako niste zadovoljni, jednostavno je vratite i dobivate povrat novca. Otkrijte jednostavno oblikovanje i rezultat kao iz salona već danas.</p><div class="wssleek__dvaik"><div><span class="wssleek__fi"><?php echo $sb_svg( $sb_ik['baterija'] ); ?></span><strong>Do 30 minuta rada po punjenju</strong></div><div><span class="wssleek__fi"><?php echo $sb_svg( $sb_ik['plamen'] ); ?></span><strong>Bez oštećenja od topline</strong></div></div><p class="wssleek__zak">30 dana za povrat novca – plaćate tek kad paket stigne.</p></div></div></section>
<section class="wssleek__s"><div class="wssleek__v"><div class="wssleek__kicker wssleek__c">Pridružite se 120.000+ kupaca</div><h2 class="wssleek__h2 wssleek__c">NORIKS SleekBrush je <em>za svakoga</em></h2><div class="wssleek__kar"><button type="button" class="wssleek__str wssleek__str--l" aria-label="Prethodno" onclick="this.parentNode.querySelector('.wssleek__traka').scrollBy({left:-this.parentNode.querySelector('.wssleek__sl').offsetWidth-20,behavior:'smooth'})"><?php echo $sb_svg( $sb_ik['lijevo'], 20 ); ?></button><div class="wssleek__traka"><?php for ( $i = 1; $i <= 7; $i++ ) : ?><div class="wssleek__sl"><img src="<?php echo esc_url( $sb_u . 'noriks-sleekbrush-prije-poslije-' . $i . '.webp' ); ?>" alt="<?php echo esc_attr( 'Prije i poslije NORIKS SleekBrush četke – kupac ' . $i ); ?>" loading="eager" decoding="async"></div><?php endfor; ?></div><button type="button" class="wssleek__str wssleek__str--d" aria-label="Sljedeće" onclick="this.parentNode.querySelector('.wssleek__traka').scrollBy({left:this.parentNode.querySelector('.wssleek__sl').offsetWidth+20,behavior:'smooth'})"><?php echo $sb_svg( $sb_ik['desno'], 20 ); ?></button></div></div></section>
<section class="wssleek__s wssleek__s--bg npg-s"><?php $npg = array( 'izdelek' => 'NORIKS SleekBrush', 'barva' => '#6b3fa0' ); include __DIR__ . '/noriks-pogoji.php'; ?></section>
</div>
<style>
.wssleek{color:#1c1c1c;font-family:inherit}
.wssleek__s{padding:72px 0;background:#fff}.wssleek__s--bg{background:#f3eefa}
.wssleek__v{width:100%;max-width:1240px;margin:0 auto;padding:0 24px;box-sizing:border-box}
.wssleek__c{text-align:center}
.wssleek__kicker{display:inline-flex;align-items:center;gap:10px;font-size:13px;letter-spacing:1.4px;text-transform:uppercase;color:#5a2f8c;margin:0 0 10px;font-weight:800}
.wssleek__kicker::before{content:"";width:26px;height:2px;background:#6b3fa0;border-radius:2px}
.wssleek__kicker.wssleek__c{display:flex;justify-content:center}
.wssleek__h2{font-size:clamp(26px,3vw,36px);font-weight:800;line-height:1.2;margin:0 0 18px;color:#1c1c1c}.wssleek__h2 em{font-style:italic;color:#5a2f8c}
.wssleek__p{font-size:16px;line-height:1.65;color:#333;margin:0 0 14px}
.wssleek__zak{font-size:16.5px;font-weight:800;line-height:1.5;margin:20px 0 0;padding-left:14px;border-left:3px solid #6b3fa0}
.wssleek__zak--c{text-align:center;border-left:0;padding-left:0;margin-top:24px}
.wssleek__trak{display:grid;grid-template-columns:repeat(4,1fr);gap:20px}
.wssleek__tk{display:flex;align-items:center;gap:16px;background:#fff;border-radius:16px;padding:26px 22px;box-shadow:0 8px 24px rgba(90,47,140,.10);transition:transform .2s,box-shadow .2s}
.wssleek__tk:hover{transform:translateY(-3px);box-shadow:0 14px 30px rgba(90,47,140,.16)}
.wssleek__tk strong{display:block;font-size:16.5px;font-weight:800;line-height:1.3;margin:0 0 3px}.wssleek__tk span{font-size:14px;color:#555;line-height:1.4}
.wssleek__ti{flex:0 0 58px;width:58px;height:58px;border-radius:50%;background:linear-gradient(135deg,#7b4bb5,#5a2f8c);color:#fff;display:flex!important;align-items:center;justify-content:center}
.wssleek__dva{display:grid;grid-template-columns:1fr 1fr;gap:56px;align-items:center}
.wssleek__dva--rev>div:first-child{order:2}
.wssleek__media{position:relative;border-radius:18px;overflow:hidden;box-shadow:0 14px 36px rgba(90,47,140,.16);aspect-ratio:4/5;background:#fff}
.wssleek__media img,.wssleek__media video{width:100%;height:100%;object-fit:cover;display:block}
.wssleek__media--kv{aspect-ratio:1/1}
.wssleek__znacka{position:absolute;left:16px;top:16px;background:#6b3fa0;color:#fff;font-size:12.5px;font-weight:800;letter-spacing:1px;text-transform:uppercase;padding:7px 12px;border-radius:20px;box-shadow:0 4px 12px rgba(0,0,0,.18)}
.wssleek__dvaik{display:grid;grid-template-columns:1fr 1fr;gap:12px;margin:8px 0 0}
.wssleek__dvaik>div{display:flex;align-items:center;gap:12px;background:#fff;border-radius:14px;padding:12px 14px;box-shadow:0 6px 20px rgba(90,47,140,.08)}
.wssleek__s--bg .wssleek__dvaik>div{background:#fff}
.wssleek__dvaik strong{font-size:15px;font-weight:800;line-height:1.3}
.wssleek__fi{flex:0 0 46px;width:46px;height:46px;border-radius:50%;background:#e4d8f3;color:#5a2f8c;display:flex;align-items:center;justify-content:center}
.wssleek__tw{margin-top:26px;overflow-x:auto;border-radius:16px;box-shadow:0 8px 24px rgba(90,47,140,.10)}
.wssleek__tab{width:100%;border-collapse:collapse;background:#fff;font-size:16px}
.wssleek__tab th,.wssleek__tab td{padding:16px 20px;text-align:center;border-bottom:1px solid #eee6f6}
.wssleek__tab th{font-weight:800;font-size:15px;background:#fff}
.wssleek__tab td:first-child,.wssleek__tab th:first-child{text-align:left;font-weight:700}
.wssleek__tab tr:last-child td{border-bottom:0}
.wssleek__tab .wssleek__mi{background:#f8f4fc;color:#5a2f8c}
.wssleek__tab th.wssleek__mi{background:#6b3fa0;color:#fff}
.wssleek__da,.wssleek__ne{display:inline-flex;width:30px;height:30px;border-radius:50%;align-items:center;justify-content:center}
.wssleek__da{background:#6b3fa0;color:#fff}.wssleek__ne{background:#f1e3e3;color:#b04545}
.wssleek__grid{display:grid;gap:22px;margin-top:26px;align-items:stretch}
.wssleek__g3{grid-template-columns:repeat(3,1fr)}
.wssleek__k{background:#fff;border-radius:16px;overflow:hidden;display:flex;flex-direction:column;box-shadow:0 8px 24px rgba(90,47,140,.10);transition:transform .2s,box-shadow .2s}
.wssleek__k:hover,.wssleek__pk:hover{transform:translateY(-3px);box-shadow:0 14px 30px rgba(90,47,140,.16)}
.wssleek__km img{width:100%;aspect-ratio:4/5;object-fit:cover;display:block}
.wssleek__kt{padding:20px 22px 24px;flex:1;display:flex;flex-direction:column}
.wssleek__zv{color:#f5b301;font-size:16px;letter-spacing:2px;margin:0 0 6px}
.wssleek__nm{display:block;font-size:17px;font-weight:800;line-height:1.35;margin:0 0 8px}
.wssleek__kt p{margin:0 0 14px;font-size:15px;line-height:1.55;color:#444;flex:1}
.wssleek__ime{font-size:13.5px;font-weight:700;color:#5a2f8c}
.wssleek__pk{background:#fff;border-radius:16px;padding:30px 26px;text-align:center;box-shadow:0 8px 24px rgba(90,47,140,.10);transition:transform .2s,box-shadow .2s;display:flex;flex-direction:column;align-items:center}
.wssleek__ki{width:56px;height:56px;border-radius:50%;background:#e4d8f3;color:#5a2f8c;display:flex;align-items:center;justify-content:center;margin:0 0 12px;box-shadow:inset 0 0 0 1.5px #6b3fa0}
.wssleek__broj{display:block;font-size:48px;font-weight:900;color:#5a2f8c;line-height:1;margin:0 0 10px}
.wssleek__pk p{margin:0 0 12px;font-size:16px;line-height:1.5;color:#333;font-weight:600;flex:1}
.wssleek__fn{font-size:12.5px;color:#888}
.wssleek__ba{position:relative;margin:26px 0 0;border-radius:18px;overflow:hidden;box-shadow:0 14px 36px rgba(90,47,140,.16);aspect-ratio:16/10;user-select:none}
.wssleek__ba>img,.wssleek__ba-pr img{position:absolute;inset:0;width:100%;height:100%;object-fit:cover;display:block}
.wssleek__ba-pr{position:absolute;inset:0;clip-path:inset(0 calc(100% - var(--sb-poz)) 0 0)}
.wssleek__ba-l,.wssleek__ba-d{position:absolute;top:16px;background:#6b3fa0;color:#fff;font-size:13px;font-weight:800;letter-spacing:1px;text-transform:uppercase;padding:7px 14px;border-radius:20px;z-index:2}
.wssleek__ba-l{left:16px}.wssleek__ba-d{right:16px}
.wssleek__ba-crta{position:absolute;top:0;bottom:0;left:var(--sb-poz);width:3px;background:#fff;transform:translateX(-50%);z-index:2;pointer-events:none}
.wssleek__ba-crta>span{position:absolute;top:50%;left:50%;transform:translate(-50%,-50%);width:48px;height:48px;border-radius:50%;background:#fff;color:#5a2f8c;display:flex;align-items:center;justify-content:center;box-shadow:0 4px 14px rgba(0,0,0,.2)}
.wssleek__ba input{position:absolute;inset:0;width:100%;height:100%;opacity:0;cursor:ew-resize;margin:0;z-index:3}
.wssleek__kar{position:relative;margin-top:26px}
.wssleek__traka{display:grid;grid-auto-flow:column;grid-auto-columns:calc((100% - 60px)/4);gap:20px;overflow-x:auto;scroll-snap-type:x mandatory;scrollbar-width:none;padding:4px 0 14px}
.wssleek__traka::-webkit-scrollbar{display:none}
.wssleek__sl{scroll-snap-align:start;border-radius:16px;overflow:hidden;box-shadow:0 8px 24px rgba(90,47,140,.12)}
.wssleek__sl img{width:100%;aspect-ratio:1/1;object-fit:cover;display:block}
.wssleek__str{position:absolute;top:calc(50% - 7px);transform:translateY(-50%);z-index:2;width:46px;height:46px;border-radius:50%;border:0;background:#fff;color:#5a2f8c;box-shadow:0 6px 18px rgba(0,0,0,.16);display:flex;align-items:center;justify-content:center;cursor:pointer;padding:0}
.wssleek__str--l{left:-10px}.wssleek__str--d{right:-10px}
@media (max-width:1024px){.wssleek__trak{grid-template-columns:repeat(2,1fr)}.wssleek__traka{grid-auto-columns:calc((100% - 40px)/3)}}
@media (max-width:860px){
.wssleek__s{padding:48px 0}
.wssleek__dva{grid-template-columns:1fr;gap:26px}.wssleek__dva--rev>div:first-child{order:0}
.wssleek__g3{grid-template-columns:1fr}
.wssleek__traka{grid-auto-columns:78%}
.wssleek__ba{aspect-ratio:4/3}
}
@media (max-width:767px){.wssleek__v{padding:0 16px}.wssleek__str--l{left:4px}.wssleek__str--d{right:4px}}
@media (max-width:560px){.wssleek__h2{font-size:25px}.wssleek__trak{gap:12px}.wssleek__tk{flex-direction:column;text-align:center;padding:20px 14px;gap:10px}.wssleek__dvaik{grid-template-columns:1fr}.wssleek__tab th,.wssleek__tab td{padding:12px 10px;font-size:14px}.wssleek__broj{font-size:42px}}
</style>
