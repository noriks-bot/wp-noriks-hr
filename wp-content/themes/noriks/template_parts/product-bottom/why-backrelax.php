<?php
/**
 * NORIKS BackRelax - 3-u-1 masazer za leda s istezanjem, vibracijom i toplinom (orto-backrelax) - why sekcije po natancni strukturi originala
 * (shoporthevia.com/products/orthevia-orthovital-pro-3-in-1-ruckenmassagegerat).
 *
 * STRUKTURA ORIGINALA:
   1. "Einmal ausprobiert. Nie wieder hergegeben. Tausende sind begeistert." - naslov + kolaz fotografij kupcev cez celo sirino - pri nas enako (kolaz cez celo sirino vsebnika)
   2. "Stellen Sie sich vor, Ihr Rucken entspannt sich" - naslov + 3 stolpci (video zgoraj, SCHRITT 1/2/3 spodaj) - pri nas mreza 3 kartic z videi in stevilkami korakov
   3. rich text + video: "Echte Linderung beginnt dort, wo Ruckenschmerzen entstehen" (3 odstavki) - pri nas video LEVO, besedilo DESNO
   4. rich text + video: "Spende deinen Bandscheiben neue Feuchtigkeit" (3 kljukice + zakljucek) - pri nas video DESNO, besedilo LEVO
   5. rich text: "Das Massagegerat mit TriFlex Restore System" (uvod v 3 funkcije) - original brez medija; pri nas video izdelka iz galerije originala LEVO, besedilo DESNO
   6. 3 stolpci z videi: aktivno istezanje, duboka masaza, toplina - pri nas mreza 3 kartic z videi in ikonami
   7. primerjalna tabela "OrthoVital vs Andere" (5 vrstic) - pri nas <table> NORIKS BackRelax vs ostali (brez "patentirano" in "preporucuju strucnjaci")
   8. FAQ -> FAQ_HR_backrelax.php; mnenja kupcev -> HR_backrelax.php
   9. NORIKS pogoji (skupni del noriks-pogoji.php); tuja jamstva in tuje stevilke kupcev izpuscene
 * VIDEO: lokalni posnetki /img/backrelax/noriks-backrelax-*.mp4 (originalni videi, vodni zig tuje znamke prekrit z NORIKS s ffmpeg) s posterji .jpg
 * BARVA ORIGINALA: #1e6fb8 (modra ozadja slik galerije in akcentna barva strani originala); svetel ton za --bg #eaf2fb
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
$br_u = get_template_directory_uri() . '/img/backrelax/';
$br_svg = function ( $d, $s = 24 ) {
	return '<svg viewBox="0 0 24 24" width="' . $s . '" height="' . $s . '" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">' . $d . '</svg>';
};
$br_ik = array(
	'istezanje' => '<path d="M12 3v18"/><path d="M8 7l4-4 4 4"/><path d="M8 17l4 4 4-4"/><path d="M5 12h14"/>',
	'masaza'    => '<circle cx="7" cy="12" r="2.5"/><circle cx="17" cy="12" r="2.5"/><path d="M3 6c2 1 2 3 0 4M21 6c-2 1-2 3 0 4M3 14c2 1 2 3 0 4M21 14c-2 1-2 3 0 4"/>',
	'toplina'   => '<path d="M12 3c2.5 3 4 5.5 4 8.5a4 4 0 0 1-8 0c0-1.6.6-3 1.6-4.3.3 1.3 1 2.1 2 2.4C11 7.5 11.3 5.3 12 3z"/><path d="M6 20h12"/>',
	'kvacica'   => '<path d="M5 12.5l4.5 4.5L19 7.5"/>',
	'iks'       => '<path d="M7 7l10 10M17 7L7 17"/>',
);
$br_koraci = array(
	array( 'noriks-backrelax-korak-1', 'Spojite uređaj', 'Spojite masažer USB kabelom i adapterom. Tipke zasvijetle i pokažu da je NORIKS BackRelax spreman. Položite ga na ravnu podlogu – pod, krevet ili kauč.' ),
	array( 'noriks-backrelax-korak-2', 'Pokrenite program', 'Držite tipku za uključivanje. NORIKS BackRelax automatski pokreće puni ciklus – masažu, istezanje i toplinu – sve u jednoj sesiji.' ),
	array( 'noriks-backrelax-korak-3', 'Opustite se 15 minuta', 'Legnite, opustite se i uživajte 15 minuta dok uređaj ciljano opušta napetosti u donjem dijelu leđa i rasterećuje kralježnicu.' ),
);
$br_funkcije = array(
	array( 'noriks-backrelax-video-istezanje', 'istezanje', 'Aktivno rasterećenje kralježnice', 'Nježno, ritmično podizanje leđa koje pažljivo razmiče kralješke, smanjuje pritisak i cijeloj kralježnici daje osjetno više lakoće.' ),
	array( 'noriks-backrelax-video-masaza', 'masaza', 'Duboka masaža mišića', 'Ciljani impulsi opuštaju napete mišiće, popuštaju tvrdokorne čvorove i vraćaju više pokretljivosti u leđa i kukove – za opuštanje koje se osjeti odmah.' ),
	array( 'noriks-backrelax-video-toplina', 'toplina', 'Toplina za bolju regeneraciju', 'Ugodna dubinska toplina potiče cirkulaciju u donjem dijelu leđa, pomaže oporavku i brže smiruje napeta područja.' ),
);
$br_tablica = array(
	'Olakšanje bez tableta',
	'Brz i osjetan učinak',
	'3 funkcije u jednom uređaju',
	'Dugotrajna upotreba',
	'Jednostavno kod kuće',
);
?>
<div class="wsbackrelax">
<section class="wsbackrelax__s wsbackrelax__s--bg"><div class="wsbackrelax__v"><div class="wsbackrelax__kicker wsbackrelax__c">Kupci ga vole</div><h2 class="wsbackrelax__h2 wsbackrelax__c">Jednom isprobaš. <em>Više ga ne daš.</em></h2><p class="wsbackrelax__p wsbackrelax__c wsbackrelax__uv">Tisuće kupaca već opušta leđa uz NORIKS BackRelax – na kauču, u krevetu, na podu ili u uredskoj stolici. Jednostavan uređaj koji postane dio svakodnevne rutine.</p><div class="wsbackrelax__kolaz"><img src="<?php echo esc_url( $br_u . 'noriks-backrelax-kupci-kolaz.webp' ); ?>" alt="Kolaž kupaca koji drže NORIKS BackRelax masažer za leđa" loading="eager" decoding="async"></div><div class="wsbackrelax__stat"><div><strong>120.000</strong><span>zadovoljnih kupaca NORIKS</span></div><div><strong>4,8 / 5</strong><span>prosječna ocjena</span></div><div><strong>15 min</strong><span>dnevno je dovoljno</span></div></div></div></section>
<section class="wsbackrelax__s"><div class="wsbackrelax__v"><div class="wsbackrelax__kicker wsbackrelax__c">Kako se koristi</div><h2 class="wsbackrelax__h2 wsbackrelax__c">Zamislite da vam se leđa opuštaju – <em>a vi samo legnete</em></h2><p class="wsbackrelax__p wsbackrelax__c wsbackrelax__uv">Bez termina, bez putovanja i bez čekanja. Tri jednostavna koraka i 15 minuta dnevno – kod kuće, kad vama odgovara.</p><div class="wsbackrelax__grid wsbackrelax__g3"><?php foreach ( $br_koraci as $n => $k ) : ?><div class="wsbackrelax__k"><div class="wsbackrelax__km"><video src="<?php echo esc_url( $br_u . $k[0] . '.mp4' ); ?>" poster="<?php echo esc_url( $br_u . $k[0] . '.jpg' ); ?>" autoplay muted loop playsinline preload="metadata"></video><span class="wsbackrelax__st">0<?php echo (int) ( $n + 1 ); ?></span></div><div class="wsbackrelax__kt"><span class="wsbackrelax__kor">Korak 0<?php echo (int) ( $n + 1 ); ?></span><strong class="wsbackrelax__nm"><?php echo esc_html( $k[1] ); ?></strong><p><?php echo esc_html( $k[2] ); ?></p></div></div><?php endforeach; ?></div></div></section>
<section class="wsbackrelax__s wsbackrelax__s--bg"><div class="wsbackrelax__v wsbackrelax__dva"><div class="wsbackrelax__media wsbackrelax__media--kv"><video src="<?php echo esc_url( $br_u . 'noriks-backrelax-video-bol.mp4' ); ?>" poster="<?php echo esc_url( $br_u . 'noriks-backrelax-video-bol.jpg' ); ?>" autoplay muted loop playsinline preload="metadata"></video></div><div><div class="wsbackrelax__kicker">Gdje nastaje napetost</div><h2 class="wsbackrelax__h2">Pravo olakšanje počinje tamo, <em>gdje nastaje bol u leđima</em></h2><p class="wsbackrelax__p">Kralježnica se sastoji od mnogo pokretnih dijelova – diskova, malih zglobova, živaca i dubokih mišića. Kad ti dijelovi više ne rade skladno, nastaju pritisak, trenje i napetosti koje se mogu širiti sve do noge.</p><p class="wsbackrelax__p">Posebno dugo sjedenje, premalo kretanja ili jednostrano opterećenje dovode do toga da se fine strukture oko kralježaka ukoče i postanu osjetljive. Leđa postanu kruta, svaki pokret je teži – a i mali loš položaj tijela dovoljan je da se pojavi bol.</p><p class="wsbackrelax__p">Da bi leđa osjetila pravo rasterećenje, ta područja treba ponovno pokrenuti, opustiti i bolje prokrviti. Tek tada leđa mogu raditi slobodnije, a vi korak po korak osjetite kako tegobe popuštaju.</p><p class="wsbackrelax__zak">Ukočenost ne nestaje sama od sebe – leđima treba pokret, opuštanje i toplina.</p></div></div></section>
<section class="wsbackrelax__s"><div class="wsbackrelax__v wsbackrelax__dva wsbackrelax__dva--rev"><div class="wsbackrelax__media wsbackrelax__media--kv"><video src="<?php echo esc_url( $br_u . 'noriks-backrelax-video-rasterecenje.mp4' ); ?>" poster="<?php echo esc_url( $br_u . 'noriks-backrelax-video-rasterecenje.jpg' ); ?>" autoplay muted loop playsinline preload="metadata"></video></div><div><div class="wsbackrelax__kicker">Rasterećenje kralježnice</div><h2 class="wsbackrelax__h2">Rasteretite donji dio leđa i <em>opustite napete živce</em></h2><p class="wsbackrelax__p">Upravo tu djeluje NORIKS BackRelax sa svojim 3-u-1 sustavom. Dok ležite na njemu, uređaj nježno podiže i isteže donji dio leđa, a masaža i toplina istodobno opuštaju okolne mišiće.</p><ul class="wsbackrelax__lista"><li><span class="wsbackrelax__li"><?php echo $br_svg( $br_ik['kvacica'], 15 ); ?></span>nježno rasterećuje kralježnicu i diskove,</li><li><span class="wsbackrelax__li"><?php echo $br_svg( $br_ik['kvacica'], 15 ); ?></span>smanjuje pritisak na živce u donjem dijelu leđa,</li><li><span class="wsbackrelax__li"><?php echo $br_svg( $br_ik['kvacica'], 15 ); ?></span>ciljano ublažava napetosti u leđima i ukočenost.</li></ul><p class="wsbackrelax__p">Bez redovitog opuštanja napetost i ukočenost se stalno vraćaju. Tek kad leđa dobiju priliku za odmor i rasterećenje, osjetite da se možete kretati slobodnije.</p><p class="wsbackrelax__zak">15 minuta dnevno – i leđa dobivaju zasluženi odmor.</p></div></div></section>
<section class="wsbackrelax__s wsbackrelax__s--bg"><div class="wsbackrelax__v wsbackrelax__dva"><div class="wsbackrelax__media wsbackrelax__media--kv"><video src="<?php echo esc_url( $br_u . 'noriks-backrelax-video-sustav.mp4' ); ?>" poster="<?php echo esc_url( $br_u . 'noriks-backrelax-video-sustav.jpg' ); ?>" autoplay muted loop playsinline preload="metadata"></video></div><div><div class="wsbackrelax__kicker">3-u-1 sustav</div><h2 class="wsbackrelax__h2">Masažer NORIKS BackRelax <em>s 3-u-1 sustavom</em></h2><p class="wsbackrelax__p">NORIKS BackRelax spaja tri učinkovite funkcije u jednom uređaju: dinamično istezanje, ciljanu duboku masažu i ugodnu toplinu. Zajedno pomažu ublažiti pritisak na živce, napetosti i bol u leđima i nogama.</p><p class="wsbackrelax__p">Čim legnete na NORIKS BackRelax, osjetite kako dinamično istezanje, točkasta duboka masaža i topla dubinska relaksacija djeluju zajedno. Automatski program prolazi kroz sve funkcije sam, a ručno možete birati tri razine.</p><div class="wsbackrelax__spec"><?php foreach ( $br_funkcije as $f ) : ?><div><span class="wsbackrelax__fi"><?php echo $br_svg( $br_ik[ $f[1] ] ); ?></span><strong><?php echo esc_html( $f[2] ); ?></strong></div><?php endforeach; ?></div><p class="wsbackrelax__zak">Tri funkcije, jedna tipka, 15 minuta.</p></div></div></section>
<section class="wsbackrelax__s"><div class="wsbackrelax__v"><div class="wsbackrelax__kicker wsbackrelax__c">Tri funkcije</div><h2 class="wsbackrelax__h2 wsbackrelax__c">Istezanje, masaža i toplina – <em>u jednoj sesiji</em></h2><p class="wsbackrelax__p wsbackrelax__c wsbackrelax__uv">Svaka funkcija djeluje na drugi uzrok napetosti – zajedno daju osjećaj potpunog opuštanja leđa.</p><div class="wsbackrelax__grid wsbackrelax__g3"><?php foreach ( $br_funkcije as $f ) : ?><div class="wsbackrelax__k"><div class="wsbackrelax__km"><video src="<?php echo esc_url( $br_u . $f[0] . '.mp4' ); ?>" poster="<?php echo esc_url( $br_u . $f[0] . '.jpg' ); ?>" autoplay muted loop playsinline preload="metadata"></video></div><div class="wsbackrelax__kt"><span class="wsbackrelax__ki"><?php echo $br_svg( $br_ik[ $f[1] ], 26 ); ?></span><strong class="wsbackrelax__nm"><?php echo esc_html( $f[2] ); ?></strong><p><?php echo esc_html( $f[3] ); ?></p></div></div><?php endforeach; ?></div></div></section>
<section class="wsbackrelax__s wsbackrelax__s--bg"><div class="wsbackrelax__v"><div class="wsbackrelax__kicker wsbackrelax__c">Usporedba</div><h2 class="wsbackrelax__h2 wsbackrelax__c">NORIKS BackRelax: <em>siguran i jednostavan izbor</em></h2><p class="wsbackrelax__p wsbackrelax__c wsbackrelax__uv">Usporedite NORIKS BackRelax s običnim jastucima i masažerima za leđa.</p><div class="wsbackrelax__tw"><table class="wsbackrelax__tab"><thead><tr><th></th><th class="wsbackrelax__mi">NORIKS BackRelax</th><th>Ostali</th></tr></thead><tbody><?php foreach ( $br_tablica as $r ) : ?><tr><td><?php echo esc_html( $r ); ?></td><td class="wsbackrelax__mi"><span class="wsbackrelax__da"><?php echo $br_svg( $br_ik['kvacica'], 16 ); ?></span></td><td><span class="wsbackrelax__ne"><?php echo $br_svg( $br_ik['iks'], 16 ); ?></span></td></tr><?php endforeach; ?></tbody></table></div></div></section>
<section class="wsbackrelax__s npg-s"><?php $npg = array( 'izdelek' => 'NORIKS BackRelax', 'barva' => '#1e6fb8' ); include __DIR__ . '/noriks-pogoji.php'; ?></section>
</div>
<style>
.wsbackrelax{color:#1c1c1c;font-family:inherit}
.wsbackrelax__s{padding:72px 0;background:#fff}.wsbackrelax__s--bg{background:#eaf2fb}
.wsbackrelax__v{width:100%;max-width:1240px;margin:0 auto;padding:0 24px;box-sizing:border-box}
.wsbackrelax__c{text-align:center}
.wsbackrelax__uv{max-width:none}
.wsbackrelax__kicker{display:inline-flex;align-items:center;gap:10px;font-size:13px;letter-spacing:1.4px;text-transform:uppercase;color:#17589a;margin:0 0 10px;font-weight:800}
.wsbackrelax__kicker::before{content:"";width:26px;height:2px;background:#1e6fb8;border-radius:2px}
.wsbackrelax__kicker.wsbackrelax__c{display:flex;justify-content:center}
.wsbackrelax__h2{font-size:clamp(26px,3vw,36px);font-weight:800;line-height:1.2;margin:0 0 18px;color:#1c1c1c}.wsbackrelax__h2 em{font-style:italic;color:#17589a}
.wsbackrelax__p{font-size:16px;line-height:1.65;color:#333;margin:0 0 14px}
.wsbackrelax__zak{font-size:16.5px;font-weight:800;line-height:1.5;margin:20px 0 0;padding-left:14px;border-left:3px solid #1e6fb8}
.wsbackrelax__dva{display:grid;grid-template-columns:1fr 1fr;gap:56px;align-items:center}
.wsbackrelax__dva--rev>div:first-child{order:2}
.wsbackrelax__media{position:relative;border-radius:18px;overflow:hidden;box-shadow:0 14px 36px rgba(20,70,130,.16);aspect-ratio:4/5;background:#fff}
.wsbackrelax__media img,.wsbackrelax__media video{width:100%;height:100%;object-fit:cover;display:block}
.wsbackrelax__media--kv{aspect-ratio:1/1}
.wsbackrelax__kolaz{margin:26px 0 0;border-radius:18px;overflow:hidden;box-shadow:0 14px 36px rgba(20,70,130,.14)}
.wsbackrelax__kolaz img{width:100%;height:auto;display:block}
.wsbackrelax__stat{display:grid;grid-template-columns:repeat(3,1fr);gap:22px;margin:26px 0 0}
.wsbackrelax__stat>div{background:#fff;border-radius:16px;padding:20px 22px;text-align:center;box-shadow:0 8px 24px rgba(20,70,130,.10)}
.wsbackrelax__stat strong{display:block;font-size:30px;font-weight:800;color:#17589a;line-height:1.1}.wsbackrelax__stat span{font-size:14px;color:#555}
.wsbackrelax__lista{list-style:none;margin:6px 0 16px;padding:0}
.wsbackrelax__lista li{display:flex;align-items:center;gap:10px;margin:0 0 10px;font-size:16px;font-weight:700;list-style:none}
.wsbackrelax__li{flex:0 0 26px;width:26px;height:26px;border-radius:50%;background:#d4e4f5;color:#17589a;display:flex;align-items:center;justify-content:center}
.wsbackrelax__spec{display:grid;grid-template-columns:1fr;gap:10px;margin:8px 0 0}
.wsbackrelax__spec>div{display:flex;align-items:center;gap:14px;background:#fff;border-radius:14px;padding:12px 14px;box-shadow:0 6px 20px rgba(20,70,130,.08)}
.wsbackrelax__spec strong{font-size:15.5px;font-weight:800;line-height:1.3}
.wsbackrelax__fi{flex:0 0 46px;width:46px;height:46px;border-radius:50%;background:#d4e4f5;color:#17589a;display:flex;align-items:center;justify-content:center}
.wsbackrelax__grid{display:grid;gap:22px;margin-top:26px}
.wsbackrelax__g3{grid-template-columns:repeat(3,1fr)}
.wsbackrelax__k{background:#fff;border-radius:16px;overflow:hidden;display:flex;flex-direction:column;box-shadow:0 8px 24px rgba(20,70,130,.10);transition:transform .2s,box-shadow .2s}
.wsbackrelax__k:hover{transform:translateY(-3px);box-shadow:0 14px 30px rgba(20,70,130,.16)}
.wsbackrelax__km{position:relative}.wsbackrelax__km video{width:100%;aspect-ratio:1/1;object-fit:cover;display:block}
.wsbackrelax__st{position:absolute;left:14px;top:14px;min-width:40px;height:40px;border-radius:20px;background:#1e6fb8;color:#fff;font-weight:800;font-size:16px;display:flex;align-items:center;justify-content:center;padding:0 8px;box-shadow:0 4px 12px rgba(0,0,0,.2)}
.wsbackrelax__kt{padding:20px 22px 24px;flex:1;display:flex;flex-direction:column}
.wsbackrelax__kor{font-size:12.5px;font-weight:800;letter-spacing:1.2px;text-transform:uppercase;color:#17589a;margin:0 0 4px}
.wsbackrelax__nm{display:block;font-size:17px;font-weight:800;line-height:1.35;margin:0 0 8px}
.wsbackrelax__kt p{margin:0;font-size:15px;line-height:1.55;color:#444}
.wsbackrelax__ki{width:52px;height:52px;border-radius:50%;background:#d4e4f5;color:#17589a;display:flex;align-items:center;justify-content:center;margin:0 0 12px;box-shadow:inset 0 0 0 1.5px #1e6fb8}
.wsbackrelax__tw{margin-top:26px;overflow-x:auto;border-radius:16px;box-shadow:0 8px 24px rgba(20,70,130,.10)}
.wsbackrelax__tab{width:100%;border-collapse:collapse;background:#fff;font-size:16px}
.wsbackrelax__tab th,.wsbackrelax__tab td{padding:16px 20px;text-align:center;border-bottom:1px solid #e6eef7}
.wsbackrelax__tab th{font-weight:800;font-size:15px;background:#fff}
.wsbackrelax__tab td:first-child,.wsbackrelax__tab th:first-child{text-align:left;font-weight:700}
.wsbackrelax__tab tr:last-child td{border-bottom:0}
.wsbackrelax__tab .wsbackrelax__mi{background:#f3f8fd;color:#17589a}
.wsbackrelax__tab th.wsbackrelax__mi{background:#1e6fb8;color:#fff}
.wsbackrelax__da,.wsbackrelax__ne{display:inline-flex;width:30px;height:30px;border-radius:50%;align-items:center;justify-content:center}
.wsbackrelax__da{background:#1e6fb8;color:#fff}.wsbackrelax__ne{background:#f1e3e3;color:#b04545}
@media (max-width:860px){
.wsbackrelax__s{padding:48px 0}
.wsbackrelax__dva{grid-template-columns:1fr;gap:26px}.wsbackrelax__dva--rev>div:first-child{order:0}
.wsbackrelax__g3{grid-template-columns:1fr}
.wsbackrelax__stat{grid-template-columns:1fr 1fr 1fr;gap:10px}.wsbackrelax__stat>div{padding:14px 8px}.wsbackrelax__stat strong{font-size:22px}.wsbackrelax__stat span{font-size:12.5px}
}
@media (max-width:767px){.wsbackrelax__v{padding:0 16px}}
@media (max-width:560px){.wsbackrelax__h2{font-size:25px}.wsbackrelax__tab th,.wsbackrelax__tab td{padding:12px 10px;font-size:14px}}
</style>
