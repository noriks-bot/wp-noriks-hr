<?php
/**
 * NORIKS AquaPro - prijenosna slamka za filtriranje vode (orto-straw2) - why sekcije po natancni strukturi originala
 * (standbysupplyco.com/products/clearx-pro-water-purifying-straw).
 *
 * STRUKTURA ORIGINALA:
   1. glavni del pod nakupom: zavihki "Product Description" + "Product Specifications" (opis, 4 faze filtracije, mere 3 x 21 cm, pod 60 g, 1.500 L, nega, omejitve) - pri nas slika LEVO (infografika iz galerije, znamka -> NORIKS s Higgsfieldom), besedilo DESNO + specifikacije v mrezi
   2. tekoci trak (14.000+ druzin, 1.500 litrov, rezerva vode, suha vlakna, 30 dni) - pri nas trak 4 prednosti z ikonami (120.000 kupcev NORIKS namesto tuje stevilke)
   3. "Most Families Aren't Ready. Now You Can Be" + animacija (umazana -> filtrirana voda) - pri nas video LEVO (GIF -> mp4), besedilo DESNO
   4. "How It Works" + "How to use" 3 koraki v vrsti (slika, Step 0n, naslov, besedilo) - pri nas mreza 3 kartic s stevilkami (znamka na slamici -> NORIKS)
   5. mreza 4 video mnenj (UGC, oseba drzi slamico s tujo znamko) - pri nas 4 kartice s kadrom iz istih videov (znamka -> NORIKS s Higgsfieldom); videi sami niso preneseni, ker tuja znamka na slamici v gibanju ostane v vsakem kadru
   6. "Here's what the ClearX Pro is designed to filter": 4 bloki (bakterije, paraziti, talog, omejitve) s 2 alinejama - pri nas mreza 4 kartic z ikonami in alinejami
   7. slika (druzina pakira torbo) + "Why Every Family Needs" - pri nas slika DESNO, besedilo LEVO
   8. "Read What Our Customers Have To Say": mreza 8 kartic mnenj (naslov, besedilo, ime, paket) - pri nas karusel 8 kartic, hrvaska imena
   9. NORIKS pogoji (skupni del noriks-pogoji.php); tuja dozivljenjska garancija izpuscena
 * BARVA ORIGINALA: #2f7fc1 (svetlo modra slamica in modri toni vode na slikah originala); svetel ton za --bg #eaf3fb
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
$sw_u = get_template_directory_uri() . '/img/straw2/';
$sw_svg = function ( $d, $s = 24 ) {
	return '<svg viewBox="0 0 24 24" width="' . $s . '" height="' . $s . '" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">' . $d . '</svg>';
};
$sw_ik = array(
	'kap'     => '<path d="M12 3c3.5 4.2 6 7.4 6 10.5a6 6 0 0 1-12 0C6 10.4 8.5 7.2 12 3z"/>',
	'ljudi'   => '<circle cx="9" cy="8" r="3"/><path d="M3 20c0-3.3 2.7-6 6-6s6 2.7 6 6"/><circle cx="17" cy="9" r="2.4"/><path d="M16 14.2c2.8.4 5 2.8 5 5.8"/>',
	'stit'    => '<path d="M12 3l7 3v5.5c0 4.4-3 8-7 9.5-4-1.5-7-5.1-7-9.5V6l7-3z"/><path d="M9 12l2 2 4-4"/>',
	'filter'  => '<path d="M4 5h16l-6 7v6l-4 2v-8L4 5z"/>',
	'povrat'  => '<path d="M4 12a8 8 0 1 0 2.4-5.7"/><path d="M4 4v4.5h4.5"/><path d="M12 8v4l2.6 2"/>',
	'bakt'    => '<circle cx="12" cy="12" r="5"/><path d="M12 3v4M12 17v4M3 12h4M17 12h4M5.6 5.6l2.8 2.8M15.6 15.6l2.8 2.8M5.6 18.4l2.8-2.8M15.6 8.4l2.8-2.8"/>',
	'parazit' => '<path d="M5 15c2-6 6-9 9-8s4 4 2 7-6 4-8 3"/><circle cx="15" cy="9" r="1"/>',
	'talog'   => '<path d="M4 18h16"/><circle cx="7" cy="14.5" r="1.5"/><circle cx="12" cy="13.5" r="2"/><circle cx="17" cy="15" r="1.3"/><path d="M6 6h12"/><path d="M8 9h8"/>',
	'pozor'   => '<path d="M12 3l9.5 17h-19L12 3z"/><path d="M12 10v4.5"/><circle cx="12" cy="17.3" r=".8"/>',
	'vaga'    => '<path d="M5 20h14l-2-11H7L5 20z"/><circle cx="12" cy="6" r="2.2"/>',
	'ravnalo' => '<rect x="2.5" y="8" width="19" height="8" rx="1.5"/><path d="M6.5 8v3M10 8v4M13.5 8v3M17 8v4"/>',
	'sat'     => '<circle cx="12" cy="13" r="8"/><path d="M12 9v4l2.5 2"/><path d="M9 2h6"/>',
	'list'    => '<path d="M5 19c0-8 5-14 14-14 0 9-6 14-14 14z"/><path d="M5 19l7-7"/>',
);
$sw_trak = array( array( 'ljudi', '120.000 kupaca', 'vjeruje NORIKS-u' ), array( 'kap', '1.500 litara', 'kapacitet filtracije' ), array( 'filter', 'Šuplja vlakna 0,1 µm', 'fizička barijera' ), array( 'povrat', '30 dana', 'za povrat novca' ) );
$sw_koraci = array(
	array( 'noriks-straw2-korak-1.webp', 'Uronite', 'Skinite poklopac i stavite donji dio slamke u izvor slatke vode – rijeku, potok ili spremljenu vodu.' ),
	array( 'noriks-straw2-korak-2.webp', 'Pijte', 'Povucite kroz slamku 3 do 5 puta da voda prođe kroz membranu. Filtrirana voda za par sekundi – bez kemikalija i bez čekanja.' ),
	array( 'noriks-straw2-korak-3.webp', 'Očistite', 'Nakon svake upotrebe puhnite natrag kroz usnik da membrana ostane čista i ne začepi se. Traje 5 sekundi.' ),
);
$sw_kadri = array(
	array( 'noriks-straw2-kupac-1.webp', 'Uvijek u torbi za hitne slučajeve', 'Dragan, Split' ),
	array( 'noriks-straw2-kupac-2.webp', 'Lakša od mobitela', 'Nikolina, Zagreb' ),
	array( 'noriks-straw2-kupac-3.webp', 'Jedna u kuhinjskoj ladici', 'Sandra, Osijek' ),
	array( 'noriks-straw2-kupac-4.webp', 'Ide sa mnom na kampiranje', 'Luka, Rijeka' ),
);
$sw_filtrira = array(
	array( 'bakt', 'Bakterije (uobičajene u vodi)', 'Bakterije iz neobrađene slatke vode veće su od mikroskopskih pora od 0,1 mikrona membrane od šupljih vlakana. Voda prolazi kroz tu fizičku barijeru.', array( 'Fizički zaustavlja 99,99 % bakterija iz rijeka, potoka i kišnice.', '100 % mehanička filtracija – bez tableta, bez okusa klora i bez struje.' ) ),
	array( 'parazit', 'Paraziti i protozoe', 'Paraziti iz slatke vode znatno su veći od pora od 0,1 mikrona. Stijenke membrane fizički ih sprječavaju da prođu u vodu za piće.', array( 'Čisto fizičko isključivanje po veličini, bez kemijskih dodataka.', 'Ispiranje priloženom štrcaljkom čisti zarobljene čestice i održava protok.' ) ),
	array( 'talog', 'Talog i organske tvari', 'Sustav u 4 faze spaja gusti PP pamučni predfiltar s aktivnim ugljenom – zadržava pijesak, mulj i mutnoću te poboljšava prirodni okus vode.', array( 'Mutnu slatku vodu ili kišnicu pretvara u bistru filtriranu vodu.', 'Jezgra od aktivnog ugljena smanjuje mirise.' ) ),
	array( 'pozor', 'Važna ograničenja', 'Kao i svi uređaji za fizičku mikrofiltraciju, slamka je napravljena isključivo za izvore slatke vode.', array( 'Samo slatka voda – ne desalinizira morsku vodu i ne uklanja otopljene kemikalije ni teške metale.', 'Birajte najčišći dostupan izvor; u izvanrednim situacijama slijedite upute lokalnih zdravstvenih službi.' ) ),
);
$sw_mnenja = array(
	array( 'Stoji u ladici, za svaki slučaj.', 'Još je nismo morali koristiti, ali stigla je dobro zapakirana i vidi se da je kvalitetna. Stoji u kuhinjskoj ladici. Nadamo se da nam neće trebati, ali obitelj se osjeća sigurnije.', 'Davor M.', '2 komada' ),
	array( 'Suprugu je laknulo.', 'Imamo je za hitne slučajeve u kućnom kompletu. Suprug je bio jako sretan što imamo pouzdan način da dođemo do vode ako nešto zakaže. Pravi mir u glavi.', 'Anđela T.', '3 komada' ),
	array( 'Kupila sam za cijelu obitelj.', 'Svaka je stigla posebno zapakirana i zatvorena da ostane svježa do upotrebe. Nešto što treba imati u kući, za svaki slučaj. Osjećam se puno spremnije.', 'Kristina B.', '3 komada' ),
	array( 'Odlična veličina i težina.', 'Oduševila me kompaktna veličina i težina – gotovo ne zauzima mjesto. Dobro je znati da smo pokriveni ako nema čiste vode iz slavine. Dobra vrijednost i brza dostava.', 'Roko P.', '2 komada' ),
	array( 'Jedna u kuhinji, jedna u autu.', 'Uz sve vijesti o nestancima struje i vode htjela sam jednostavan plan koji ne zauzima pola hodnika. Jednu sam stavila u kuhinjsku ladicu, drugu u prtljažnik. Jednostavno, čvrsto, bez baterija.', 'Sara M.', '2 komada' ),
	array( 'Isprobao protok na planinarenju.', 'Jednu sam isprobao na vikend izletu prije nego što sam ostale spremio za hitne slučajeve. Voda je lako tekla bez naprezanja, a okus je bio potpuno neutralan, bez mirisa plastike.', 'Marko T.', '3 komada' ),
	array( 'Pametnije od 50 boca vode.', 'Imali smo gajbe boca vode kojima je istjecao rok i koje su zauzimale cijelo dno ostave. Ovo je veličine flomastera i filtrira 1.500 litara. Jasna odluka za pripremu.', 'Darko R.', '2 komada' ),
	array( 'Brza dostava i solidna kvaliteta.', 'Stiglo za 4 dana. Izrada djeluje čvrsto. Svakom od odrasle djece dao sam po jednu za stan. Odličan osjećaj znati da su djeca pokrivena ako se nešto dogodi s vodovodom.', 'Josip K.', '3 komada' ),
);
?>
<div class="wsstraw2">
<section class="wsstraw2__s wsstraw2__s--bg"><div class="wsstraw2__v wsstraw2__dva"><div class="wsstraw2__media"><img src="<?php echo esc_url( $sw_u . 'noriks-straw2-02-infografika.webp' ); ?>" alt="NORIKS AquaPro slamka: filtracija u 4 faze, 1.500 litara, membrana 0,1 mikrona, ispod 60 g" loading="eager" decoding="async"></div><div><div class="wsstraw2__kicker">Opis proizvoda</div><h2 class="wsstraw2__h2">Praktična, trajna <em>rezerva vode</em> za vašu obitelj</h2><p class="wsstraw2__p">Bez hrane možete izdržati tri tjedna, a bez vode samo tri dana. Kad udari nevrijeme, pukne cijev ili se izda upozorenje o prokuhavanju vode, police s bocama u dućanu isprazne se u par minuta.</p><p class="wsstraw2__p">NORIKS AquaPro pretvara izvore slatke vode – rijeke, potoke i kišnicu – u filtriranu vodu za piće na zahtjev. Bez struje, bez baterija, bez kemijskih tableta. Mehanička filtracija u 4 faze spaja gusti PP pamuk, aktivni ugljen od kokosove ljuske i membranu od šupljih vlakana od 0,1 mikrona. Svi materijali su bez BPA i sigurni za kontakt s hranom.</p><div class="wsstraw2__spec"><?php foreach ( array( array( 'vaga', 'Ispod 60 g', 'lakša od mobitela' ), array( 'ravnalo', '3 x 21 cm', 'stane u ladicu i pretinac' ), array( 'kap', '1.500 litara', 'po slamci' ), array( 'sat', 'Do 5 godina', 'spremna u ladici' ) ) as $x ) : ?><div><span class="wsstraw2__fi"><?php echo $sw_svg( $sw_ik[ $x[0] ] ); ?></span><strong><?php echo esc_html( $x[1] ); ?></strong><small><?php echo esc_html( $x[2] ); ?></small></div><?php endforeach; ?></div><p class="wsstraw2__zak">Dvije minute da riješite plan B za vodu – i više ne brinete.</p></div></div></section>
<section class="wsstraw2__s wsstraw2__s--traka"><div class="wsstraw2__v"><div class="wsstraw2__trak"><?php foreach ( $sw_trak as $c ) : ?><div class="wsstraw2__tc"><span class="wsstraw2__ti"><?php echo $sw_svg( $sw_ik[ $c[0] ], 22 ); ?></span><div><strong><?php echo esc_html( $c[1] ); ?></strong><span><?php echo esc_html( $c[2] ); ?></span></div></div><?php endforeach; ?></div></div></section>
<section class="wsstraw2__s wsstraw2__s--bg"><div class="wsstraw2__v wsstraw2__dva"><div class="wsstraw2__media wsstraw2__media--kv"><video src="<?php echo esc_url( $sw_u . 'noriks-straw2-video-filtracija.mp4' ); ?>" poster="<?php echo esc_url( $sw_u . 'noriks-straw2-video-filtracija.jpg' ); ?>" autoplay muted loop playsinline preload="metadata"></video></div><div><div class="wsstraw2__kicker">Budite spremni</div><h2 class="wsstraw2__h2">Većina obitelji nije spremna. <em>Vi možete biti.</em></h2><p class="wsstraw2__p">Većina obitelji udaljena je jednu poplavu, jedan nestanak struje ili jedno upozorenje o zagađenju od toga da ostanu bez čiste vode. Ne zato što su nemarni – nego zato što im nitko nije rekao koliko brzo se to dogodi.</p><p class="wsstraw2__p">NORIKS AquaPro to mijenja. Kompaktna, jednostavna i uvijek spremna. Bez struje, bez postavljanja, bez roka trajanja u ladici.</p><p class="wsstraw2__zak">Mutna voda unutra – filtrirana voda van.</p></div></div></section>
<section class="wsstraw2__s"><div class="wsstraw2__v"><div class="wsstraw2__kicker wsstraw2__c">Kako radi</div><h2 class="wsstraw2__h2 wsstraw2__c">Filtrirana voda u <em>tri koraka</em></h2><p class="wsstraw2__p wsstraw2__c">Membrana od šupljih vlakana od 0,1 mikrona fizički zaustavlja bakterije, parazite i talog – a filtrirana voda prolazi. Bez postavljanja, bez čekanja.</p><div class="wsstraw2__grid wsstraw2__g3"><?php foreach ( $sw_koraci as $n => $k ) : ?><div class="wsstraw2__k"><div class="wsstraw2__km"><img src="<?php echo esc_url( $sw_u . $k[0] ); ?>" alt="<?php echo esc_attr( 'Korak ' . ( $n + 1 ) . ': ' . $k[1] ); ?>" loading="eager" decoding="async"><span class="wsstraw2__st">0<?php echo (int) ( $n + 1 ); ?></span></div><div class="wsstraw2__kt"><span class="wsstraw2__kor">Korak 0<?php echo (int) ( $n + 1 ); ?></span><strong class="wsstraw2__nm"><?php echo esc_html( $k[1] ); ?></strong><p><?php echo esc_html( $k[2] ); ?></p></div></div><?php endforeach; ?></div></div></section>
<section class="wsstraw2__s wsstraw2__s--bg"><div class="wsstraw2__v"><div class="wsstraw2__kicker wsstraw2__c">Kupci je nose sa sobom</div><h2 class="wsstraw2__h2 wsstraw2__c">Mala slamka, <em>velik mir u glavi</em></h2><p class="wsstraw2__p wsstraw2__c">U ruksaku, u autu, u ladici – NORIKS AquaPro uvijek je pri ruci.</p><div class="wsstraw2__grid wsstraw2__g4"><?php foreach ( $sw_kadri as $k ) : ?><div class="wsstraw2__k"><div class="wsstraw2__kv"><img src="<?php echo esc_url( $sw_u . $k[0] ); ?>" alt="<?php echo esc_attr( 'Kupac drži NORIKS AquaPro slamku – ' . $k[2] ); ?>" loading="eager" decoding="async"></div><div class="wsstraw2__kt wsstraw2__kt--s"><strong class="wsstraw2__nm">„<?php echo esc_html( $k[1] ); ?>“</strong><span class="wsstraw2__ime"><?php echo esc_html( $k[2] ); ?></span></div></div><?php endforeach; ?></div></div></section>
<section class="wsstraw2__s"><div class="wsstraw2__v"><div class="wsstraw2__kicker wsstraw2__c">Što filtrira</div><h2 class="wsstraw2__h2 wsstraw2__c">Za što je NORIKS AquaPro <em>napravljena</em></h2><p class="wsstraw2__p wsstraw2__c">Učinak se temelji na fizičkoj mehaničkoj filtraciji i može ovisiti o stanju izvora vode.</p><div class="wsstraw2__grid wsstraw2__g4"><?php foreach ( $sw_filtrira as $f ) : ?><div class="wsstraw2__k wsstraw2__k--f"><span class="wsstraw2__ki"><?php echo $sw_svg( $sw_ik[ $f[0] ], 28 ); ?></span><strong class="wsstraw2__nm"><?php echo esc_html( $f[1] ); ?></strong><p><?php echo esc_html( $f[2] ); ?></p><ul class="wsstraw2__kvl"><?php foreach ( $f[3] as $a ) : ?><li><?php echo esc_html( $a ); ?></li><?php endforeach; ?></ul></div><?php endforeach; ?></div></div></section>
<section class="wsstraw2__s wsstraw2__s--bg"><div class="wsstraw2__v wsstraw2__dva wsstraw2__dva--rev"><div class="wsstraw2__media"><img src="<?php echo esc_url( $sw_u . 'noriks-straw2-obitelj.webp' ); ?>" alt="Obitelj pakira torbu za hitne slučajeve s NORIKS AquaPro slamkom" loading="eager" decoding="async"></div><div><div class="wsstraw2__kicker">Za svaki dom</div><h2 class="wsstraw2__h2">Zašto svakoj obitelji <em>treba NORIKS AquaPro</em></h2><p class="wsstraw2__p">U nesigurnom svijetu uvijek je bolje biti spreman. Većina obitelji udaljena je jednu poplavu, jednu puknutu cijev ili jedan nestanak struje od toga da ostanu bez vode za piće.</p><p class="wsstraw2__p">Dogodi se brže nego što mislite – a kad se dogodi, dućani su prazni za par sati. NORIKS AquaPro vam daje trenutačnu, pouzdanu rezervu koja ne traži struju, postavljanje ni znanje. Samo filtrirajte i pijte.</p><p class="wsstraw2__zak">Jedna za kuhinju, jedna za auto, jedna za ruksak.</p></div></div></section>
<section class="wsstraw2__s"><div class="wsstraw2__v"><div class="wsstraw2__kicker wsstraw2__c">Ocjena 4,8 / 5</div><h2 class="wsstraw2__h2 wsstraw2__c">Što kažu naši <em>kupci</em></h2><p class="wsstraw2__p wsstraw2__c">Roditelji, vlasnici kuća i obitelji – nakon što su NORIKS AquaPro dodali u svoj plan B.</p><div class="wsstraw2__grid wsstraw2__kar"><?php foreach ( $sw_mnenja as $m ) : ?><div class="wsstraw2__k wsstraw2__k--m"><span class="wsstraw2__zv" role="img" aria-label="5 zvjezdica"><?php echo str_repeat( '<svg viewBox="0 0 24 24" width="15" height="15" fill="#e0a33c" aria-hidden="true"><path d="M12 2.8l2.8 5.8 6.3.9-4.6 4.4 1.1 6.3L12 17.2l-5.6 3 1.1-6.3L2.9 9.5l6.3-.9L12 2.8z"/></svg>', 5 ); ?></span><strong class="wsstraw2__nm">„<?php echo esc_html( $m[0] ); ?>“</strong><p><?php echo esc_html( $m[1] ); ?></p><span class="wsstraw2__ime"><i class="wsstraw2__av" aria-hidden="true"><?php echo esc_html( mb_substr( $m[2], 0, 1 ) ); ?></i><?php echo esc_html( $m[2] ); ?> <small>· Provjerena kupnja · <?php echo esc_html( $m[3] ); ?></small></span></div><?php endforeach; ?></div></div></section>
<section class="wsstraw2__s wsstraw2__s--bg npg-s"><?php $npg = array( 'izdelek' => 'NORIKS AquaPro', 'barva' => '#2f7fc1' ); include __DIR__ . '/noriks-pogoji.php'; ?></section>
</div>
<style>
.wsstraw2{color:#1c1c1c;font-family:inherit}
.wsstraw2__s{padding:72px 0;background:#fff}.wsstraw2__s--bg{background:#eaf3fb}
.wsstraw2__s--traka{padding:30px 0}
.wsstraw2__v{width:100%;max-width:1240px;margin:0 auto;padding:0 24px;box-sizing:border-box}
.wsstraw2__c{text-align:center}
.wsstraw2__kicker{display:inline-flex;align-items:center;gap:10px;font-size:13px;letter-spacing:1.4px;text-transform:uppercase;color:#1d5f96;margin:0 0 10px;font-weight:800}
.wsstraw2__kicker::before{content:"";width:26px;height:2px;background:#2f7fc1;border-radius:2px}
.wsstraw2__kicker.wsstraw2__c{display:flex;justify-content:center}
.wsstraw2__h2{font-size:clamp(26px,3vw,36px);font-weight:800;line-height:1.2;margin:0 0 18px;color:#1c1c1c}.wsstraw2__h2 em{font-style:italic;color:#1d5f96}
.wsstraw2__p{font-size:16px;line-height:1.65;color:#333;margin:0 0 14px}
.wsstraw2__zak{font-size:16.5px;font-weight:800;line-height:1.5;margin:20px 0 0;padding-left:14px;border-left:3px solid #2f7fc1}
.wsstraw2__dva{display:grid;grid-template-columns:1fr 1fr;gap:56px;align-items:center}
.wsstraw2__dva--rev>div:first-child{order:2}
.wsstraw2__media{position:relative;border-radius:18px;overflow:hidden;box-shadow:0 14px 36px rgba(20,70,120,.16);aspect-ratio:4/5;background:#fff}
.wsstraw2__media img,.wsstraw2__media video{width:100%;height:100%;object-fit:cover;display:block}
.wsstraw2__media--kv{aspect-ratio:1/1}
.wsstraw2__spec{display:grid;grid-template-columns:1fr 1fr;gap:12px;margin:8px 0 0}
.wsstraw2__spec>div{display:grid;grid-template-columns:46px 1fr;column-gap:12px;align-items:center;background:#fff;border-radius:14px;padding:12px 14px;box-shadow:0 6px 20px rgba(20,70,120,.08)}
.wsstraw2__spec .wsstraw2__fi{grid-row:span 2}
.wsstraw2__spec strong{font-size:15.5px;font-weight:800;line-height:1.2}.wsstraw2__spec small{font-size:13.5px;color:#666}
.wsstraw2__fi{flex:0 0 46px;width:46px;height:46px;border-radius:50%;background:#d6e7f6;color:#1d5f96;display:flex;align-items:center;justify-content:center}
.wsstraw2__trak{display:grid;grid-template-columns:repeat(4,1fr)}
.wsstraw2__tc{display:flex;align-items:center;justify-content:center;gap:12px;padding:6px 14px;border-left:1px solid rgba(0,0,0,.08)}
.wsstraw2__tc:first-child{border-left:0}
.wsstraw2__tc strong{display:block;font-size:15.5px;font-weight:800;line-height:1.2}.wsstraw2__tc span{font-size:13.5px;color:#666}
.wsstraw2__ti{flex:0 0 44px;width:44px;height:44px;border-radius:50%;background:#d6e7f6;color:#1d5f96;display:flex;align-items:center;justify-content:center}
.wsstraw2__grid{display:grid;gap:22px;margin-top:26px}
.wsstraw2__g3{grid-template-columns:repeat(3,1fr)}.wsstraw2__g4{grid-template-columns:repeat(4,1fr)}
.wsstraw2__k{background:#fff;border-radius:16px;overflow:hidden;display:flex;flex-direction:column;box-shadow:0 8px 24px rgba(20,70,120,.10);transition:transform .2s,box-shadow .2s}
.wsstraw2__k:hover{transform:translateY(-3px);box-shadow:0 14px 30px rgba(20,70,120,.16)}
.wsstraw2__km{position:relative}.wsstraw2__km img{width:100%;aspect-ratio:4/3;object-fit:cover;display:block}
.wsstraw2__kv img{width:100%;aspect-ratio:9/16;object-fit:cover;display:block}
.wsstraw2__st{position:absolute;left:14px;top:14px;min-width:40px;height:40px;border-radius:20px;background:#2f7fc1;color:#fff;font-weight:800;font-size:16px;display:flex;align-items:center;justify-content:center;padding:0 8px;box-shadow:0 4px 12px rgba(0,0,0,.2)}
.wsstraw2__kt{padding:20px 22px 24px;flex:1;display:flex;flex-direction:column}.wsstraw2__kt--s{padding:14px 16px 16px}
.wsstraw2__kor{font-size:12.5px;font-weight:800;letter-spacing:1.2px;text-transform:uppercase;color:#1d5f96;margin:0 0 4px}
.wsstraw2__nm{display:block;font-size:17px;font-weight:800;line-height:1.35;margin:0 0 8px}
.wsstraw2__kt p,.wsstraw2__k--f p,.wsstraw2__k--m p{margin:0 0 14px;font-size:15px;line-height:1.55;color:#444}
.wsstraw2__k--f,.wsstraw2__k--m{padding:24px 22px}
.wsstraw2__k--m p{flex:1}
.wsstraw2__ki{width:58px;height:58px;border-radius:50%;background:#d6e7f6;color:#1d5f96;display:flex;align-items:center;justify-content:center;margin:0 0 14px;box-shadow:inset 0 0 0 1.5px #2f7fc1}
.wsstraw2__kvl{list-style:none;margin:auto 0 0;padding:0}
.wsstraw2__kvl li{position:relative;padding:0 0 0 26px;margin:0 0 8px;font-size:14px;line-height:1.5;color:#333;list-style:none;font-weight:600}
.wsstraw2__kvl li::before{content:"✓";position:absolute;left:0;top:1px;width:18px;height:18px;border-radius:50%;background:#d6e7f6;color:#1d5f96;font-weight:800;font-size:11px;display:flex;align-items:center;justify-content:center}
.wsstraw2__zv{display:flex;gap:2px;margin:0 0 8px}
.wsstraw2__ime{display:flex;align-items:center;flex-wrap:wrap;font-weight:800;font-size:14.5px}.wsstraw2__ime small{font-weight:600;color:#777;margin-left:6px;font-size:13px}
.wsstraw2__av{display:inline-flex;align-items:center;justify-content:center;width:30px;height:30px;border-radius:50%;background:#d6e7f6;color:#1d5f96;font-style:normal;font-weight:800;font-size:13px;margin-right:9px}
.wsstraw2__karw{position:relative}
.wsstraw2__kar{grid-auto-flow:column;grid-auto-columns:calc((100% - 44px)/3);overflow-x:auto;scroll-snap-type:x mandatory;scrollbar-width:none}
.wsstraw2__kar::-webkit-scrollbar{display:none}.wsstraw2__kar>*{scroll-snap-align:start}
.wsstraw2__pus{position:absolute;top:50%;transform:translateY(-50%);width:44px;height:44px;border-radius:50%;border:0;background:#fff;box-shadow:0 4px 14px rgba(0,0,0,.18);font-size:24px;line-height:44px;cursor:pointer;z-index:2;color:#1d5f96;padding:0}
.wsstraw2__pus--l{left:-14px}.wsstraw2__pus--d{right:-14px}
@media (max-width:1024px){.wsstraw2__g4{grid-template-columns:repeat(2,1fr)}.wsstraw2__trak{grid-template-columns:repeat(2,1fr);row-gap:16px}.wsstraw2__tc:nth-child(3){border-left:0}}
@media (max-width:860px){
.wsstraw2__s{padding:48px 0}.wsstraw2__s--traka{padding:26px 0}
.wsstraw2__dva{grid-template-columns:1fr;gap:26px}.wsstraw2__dva--rev>div:first-child{order:0}
.wsstraw2__g3{grid-template-columns:1fr}
.wsstraw2__kar{grid-auto-columns:82%}.wsstraw2__pus--l{left:4px}.wsstraw2__pus--d{right:4px}
}
@media (max-width:767px){.wsstraw2__v{padding:0 16px}}
@media (max-width:560px){.wsstraw2__h2{font-size:25px}.wsstraw2__spec{grid-template-columns:1fr}.wsstraw2__g4{grid-template-columns:1fr 1fr;gap:12px}.wsstraw2__k--f{grid-column:span 2}.wsstraw2__kt--s{padding:10px 12px}.wsstraw2__kt--s .wsstraw2__nm{font-size:14.5px}.wsstraw2__tc{flex-direction:column;text-align:center;gap:6px;padding:4px 6px}}
</style>
<script>
(function(){document.querySelectorAll('.wsstraw2__kar').forEach(function(k){
  var w=document.createElement('div');w.className='wsstraw2__karw';k.parentNode.insertBefore(w,k);w.appendChild(k);
  ['l','d'].forEach(function(s){var b=document.createElement('button');b.type='button';b.className='wsstraw2__pus wsstraw2__pus--'+s;b.setAttribute('aria-label',s==='l'?'Prethodno':'Sljedeće');b.innerHTML=s==='l'?'&#8249;':'&#8250;';
    b.addEventListener('click',function(){var x=k.firstElementChild;var d=x?x.getBoundingClientRect().width+22:300;k.scrollBy({left:s==='l'?-d:d,behavior:'smooth'});});w.appendChild(b);});
});})();
</script>
