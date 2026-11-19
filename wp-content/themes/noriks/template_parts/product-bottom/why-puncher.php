<?php
/**
 * NORIKS PunchPro (orto-puncher) - rucni busac rupa sa 6 nastavaka - why sekcije po natancni strukturi originala
 * (leathosco.com/products/leathos-hole-puncher-kit-general).
 *
 * STRUKTURA ORIGINALA:
   1. "30,845+ Happy Customers" - karusel 8 medijev kupcev (4 fotografije + 4 videi) - pri nas karusel 8 medijev v istem vrstnem redu (scroll-snap), stevilka kupcev -> 120.000
   2. "Stop Punching Holes With an Awl and Crop-A-Dile!" - samo naslov - pri nas naslov na vrhu naslednje sekcije (brez tuje znamke)
   3. "How Does the Spring Spin Cut Mechanism Works" - animacija (GIF) levo, tekst desno - pri nas video levo, tekst desno
   4. "Multiple Sizes" - slika nastavkov z merami + tekst - pri nas slika desno, tekst levo + 6 velikosti
   5. "Solid Build, Made to Last" - slika + tekst - pri nas slika levo, tekst desno
   6. "Real People. Real Results." - 3 kroga s postotki (92 / 87 / 82 %) - pri nas 3 kartice s postotkom in ikono v mrezi (grid)
   7. "Smart Waste Channel" - slika + tekst - pri nas slika desno, tekst levo
   8. Facebook mnenja - 3 objave (ime, besedilo, vsecki) - pri nas 3 kartice mnenj v mrezi (grid)
   9. "Faster, Easier ... or Your Money Back" - slika + tekst o 30 dneh - pri nas slika levo, tekst desno (30 dana za povrat)
   Zakljucek: NORIKS pogoji. Bonus e-knjige, Black Friday trak in igra s popustom izpusceni (ponudbe ni pri nas).
 * SLIKE: /img/puncher/noriks-puncher-kupac-1.webp ... kupac-4.webp, noriks-puncher-galerija-03.webp, noriks-puncher-izdrzljiv.webp, noriks-puncher-kanal.webp, noriks-puncher-povrat.webp
 * VIDEI: /img/puncher/noriks-puncher-mehanizam.mp4 /img/puncher/noriks-puncher-video-1.mp4 ... video-4.mp4 (+ poster .jpg); v videih 1 in 3 napis tuje znamke na skatlah, rocaju in puloverju zamenjan z NORIKS v vseh kadrih - karusel ima 8 medijev kot original
 * BARVA ORIGINALA: #d9c2af (bez/les - ozadja sekcij in barva lesenega rocaja na originalu); svetel ton za --bg #f6efe8, akcent #8a6a4f
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
$pu_u = get_template_directory_uri() . '/img/puncher/';
$pu_ik = array(
	'ruka'   => '<path d="M7 11V6.5a1.5 1.5 0 0 1 3 0V11M10 10V5a1.5 1.5 0 0 1 3 0v5M13 10V6a1.5 1.5 0 0 1 3 0v6"/><path d="M16 12v-1.5a1.5 1.5 0 0 1 3 0V14a7 7 0 0 1-7 7h-1a6 6 0 0 1-5-2.7L4 15.5a1.5 1.5 0 0 1 2.5-1.7L7 14.5"/>',
	'meta'   => '<circle cx="12" cy="12" r="8"/><circle cx="12" cy="12" r="4"/><circle cx="12" cy="12" r="1"/>',
	'brzo'   => '<path d="M13 3L5 14h6l-1 7 8-11h-6z"/>',
	'stit'   => '<path d="M12 3l7.5 3v5.5c0 4.6-3.2 8.2-7.5 9.5-4.3-1.3-7.5-4.9-7.5-9.5V6z"/><path d="M8.6 12.2l2.4 2.4 4.4-4.6"/>',
	'kvacica'=> '<path d="M5 12.5l4.5 4.5L19 7.5"/>',
	'srce'   => '<path d="M12 20s-7.5-4.6-7.5-10A4.3 4.3 0 0 1 12 7.5 4.3 4.3 0 0 1 19.5 10c0 5.4-7.5 10-7.5 10z"/>',
);
$pu_svg = function ( $d, $s = 24 ) {
	return '<svg viewBox="0 0 24 24" width="' . (int) $s . '" height="' . (int) $s . '" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">' . $d . '</svg>';
};
$pu_li = function ( $items ) use ( $pu_svg, $pu_ik ) {
	$o = '<ul class="wspu__al">';
	foreach ( $items as $t ) { $o .= '<li><span class="wspu__tk">' . $pu_svg( $pu_ik['kvacica'], 16 ) . '</span><span>' . esc_html( $t ) . '</span></li>'; }
	return $o . '</ul>';
};
?>
<div class="wspu">

<section class="wspu__s wspu__s--bg"><div class="wspu__v">
	<div class="wspu__kicker wspu__c">Iskustva kupaca</div>
	<h2 class="wspu__h2 wspu__c"><em>120.000+</em> zadovoljnih kupaca</h2>
	<p class="wspu__p wspu__c">Pogledajte kako kupci buše rupe za uvez, ukrasne zakovice i kožu – jednom rukom, bez stiskanja.</p>
	<div class="wspu__kar">
		<?php
		$pu_m = array(
			array( 'img', 'noriks-puncher-kupac-1.webp', 'Kupac buši rupe u kartonu za uvez bilježnice' ),
			array( 'vid', 'noriks-puncher-video-1.mp4?v=3', 'noriks-puncher-video-1.jpg?v=3', 'Kupac otvara NORIKS kutiju s bušačem i nastavcima' ),
			array( 'vid', 'noriks-puncher-video-2.mp4', 'noriks-puncher-video-2.jpg', 'Bušenje rupa u kartonu na podlozi za rezanje' ),
			array( 'img', 'noriks-puncher-kupac-2.webp', 'Kupac buši rupe za uvez na radnom stolu' ),
			array( 'img', 'noriks-puncher-kupac-3.webp', 'Kartica iz NORIKS kompleta bušača' ),
			array( 'vid', 'noriks-puncher-video-3.mp4', 'noriks-puncher-video-3.jpg', 'Zadovoljna kupkinja drži otvorenu NORIKS kutiju s bušačem' ),
			array( 'vid', 'noriks-puncher-video-4.mp4?v=3', 'noriks-puncher-video-4.jpg?v=3', 'Kupac buši rupe za uvez na podlozi za rezanje' ),
			array( 'img', 'noriks-puncher-kupac-4.webp', 'Kupac drži bušač i nastavke na dlanu' ),
		);
		foreach ( $pu_m as $m ) {
			if ( 'img' === $m[0] ) {
				echo '<div class="wspu__km"><img src="' . esc_url( $pu_u . $m[1] ) . '" alt="' . esc_attr( $m[2] ) . '" decoding="async"></div>';
			} else {
				echo '<div class="wspu__km"><video autoplay muted loop playsinline webkit-playsinline preload="metadata" poster="' . esc_url( $pu_u . $m[2] ) . '" aria-label="' . esc_attr( $m[3] ) . '"><source src="' . esc_url( $pu_u . $m[1] ) . '" type="video/mp4"></video></div>';
			}
		}
		?>
	</div>
</div></section>

<section class="wspu__s"><div class="wspu__v">
	<h2 class="wspu__h2 wspu__c wspu__vel">Prestanite bušiti rupe <em>šilom i kliještima!</em></h2>
	<div class="wspu__dva">
		<div class="wspu__media"><video autoplay muted loop playsinline webkit-playsinline preload="metadata" poster="<?php echo esc_url( $pu_u . 'noriks-puncher-mehanizam.jpg' ); ?>" aria-label="Mehanizam opruge koji okreće nastavak dok pritišćete"><source src="<?php echo esc_url( $pu_u . 'noriks-puncher-mehanizam.mp4' ); ?>" type="video/mp4"></video></div>
		<div>
			<div class="wspu__kicker">Mehanizam opruga – okret – rez</div>
			<h3 class="wspu__h3">Kako radi mehanizam koji <em>okreće i reže</em></h3>
			<p class="wspu__p">Bez pravog alata svaka nova rupa znači improvizaciju. Šilo koje gurate rukom klizi i ostavlja krivu, poderanu rupu koja se sa svakim šavom još više širi. Klasična kliješta za rupe dosežu tek oko 2,5 cm od ruba, traže snažno stiskanje od kojega boli ruka i usput mogu napuknuti ili ulubiti nježne zakovice.</p>
			<p class="wspu__p">NORIKS PunchPro koristi pravi mehanizam. Pritisnite ga jednom rukom: opruga okreće nastavak dok se spušta i izrezuje čistu, okruglu rupu. Zatim se sam vrati gore – spreman za sljedeću.</p>
			<p class="wspu__z">Jedan lagani pritisak. Čista rupa. Bez stiskanja.</p>
		</div>
	</div>
</div></section>

<section class="wspu__s wspu__s--bg"><div class="wspu__v wspu__dva wspu__dva--rev">
	<div class="wspu__media"><img src="<?php echo esc_url( $pu_u . 'noriks-puncher-galerija-03.webp' ); ?>" alt="Šest nastavaka bušača od 1,5 do 4 mm" decoding="async"></div>
	<div>
		<div class="wspu__kicker">6 veličina nastavaka</div>
		<h2 class="wspu__h2">Više veličina – od uveza do <em>većih ukrasnih rupa</em></h2>
		<p class="wspu__p">U kompletu su nastavci od 1,5 mm, 2 mm, 2,5 mm, 3 mm, 3,5 mm i 4 mm. Najmanji su za rupe za uvez, a veći za zakovice, ukrasne čavliće i veće ukrasne rupe.</p>
		<p class="wspu__p">Lako prolazi kroz svaku debljinu i materijal za koji je namijenjen – nastavci su kaljeni i oštri za čiste, precizne rupe koje ostaju pouzdane iz uporabe u uporabu.</p>
		<div class="wspu__vl"><span>1,5 mm</span><span>2 mm</span><span>2,5 mm</span><span>3 mm</span><span>3,5 mm</span><span>4 mm</span></div>
	</div>
</div></section>

<section class="wspu__s"><div class="wspu__v wspu__dva">
	<div class="wspu__media"><img src="<?php echo esc_url( $pu_u . 'noriks-puncher-izdrzljiv.webp' ); ?>" alt="Bušač rupa s drvenom drškom pri bušenju rupa za uvez" decoding="async"></div>
	<div>
		<div class="wspu__kicker">Čvrsta izrada</div>
		<h2 class="wspu__h2">Čvrsto izrađen, <em>za dugo trajanje</em></h2>
		<p class="wspu__p">Čvrsti metal, glatko tvrdo drvo i oblik koji se gura dlanom pa ne opterećuje ruku. Napravljen je da traje godinama: nastavci se mogu naoštriti da ostanu precizni, a ako se neki nakon velike uporabe ipak istroši, jednostavno zamijenite samo taj nastavak umjesto cijelog alata.</p>
		<p class="wspu__p">Dolazi u kompaktnoj, lijepoj kutiji u koju stanu alat i svi nastavci, pa ga možete spremiti bilo gdje i uvijek znate gdje je.</p>
		<?php echo $pu_li( array( 'Metal i tvrdo drvo', 'Nastavci se mogu naoštriti', 'Kutija za alat i sve nastavke' ) ); ?>
	</div>
</div></section>

<section class="wspu__s wspu__s--bg"><div class="wspu__v">
	<div class="wspu__kicker wspu__c">Stvarni ljudi, stvarni rezultati</div>
	<h2 class="wspu__h2 wspu__c">Što kupci najčešće ističu <em>nakon prelaska</em></h2>
	<p class="wspu__p wspu__c">Prednosti koje kupci najčešće spominju nakon što su šilo ili kliješta za rupe zamijenili ovim alatom.</p>
	<div class="wspu__grid wspu__g3">
		<?php
		foreach ( array( array( 'ruka', '92', 'kaže da su im ruke pod puno manjim opterećenjem i manje ih boli' ), array( 'meta', '87', 'obožava koliko su rupe čišće i bolje poravnate' ), array( 'brzo', '82', 'vidi veliki napredak u svojim projektima – brže i lakše' ) ) as $r ) {
			echo '<div class="wspu__k"><span class="wspu__ki">' . $pu_svg( $pu_ik[ $r[0] ], 26 ) . '</span><strong class="wspu__pc">' . esc_html( $r[1] ) . ' %</strong><p>' . esc_html( $r[2] ) . '</p></div>';
		}
		?>
	</div>
</div></section>

<section class="wspu__s"><div class="wspu__v wspu__dva wspu__dva--rev">
	<div class="wspu__media"><img src="<?php echo esc_url( $pu_u . 'noriks-puncher-kanal.webp' ); ?>" alt="Bušač rupa s uvećanim prikazom kanala za otpad" decoding="async"></div>
	<div>
		<div class="wspu__kicker">Pametan kanal za otpad</div>
		<h2 class="wspu__h2">Vrh ostaje <em>uvijek čist</em></h2>
		<p class="wspu__p">Ugrađeni kanal sam izbacuje izrezane komadiće kako se nastavak puni, pa vrh ostaje čist dok radite.</p>
		<p class="wspu__p">Izbušite sljedeću rupu, pa još jednu – alat drži korak s vama, bez zastoja i bez čačkanja nastavka.</p>
		<p class="wspu__z">Bez zastoja, rupa za rupom.</p>
	</div>
</div></section>

<section class="wspu__s wspu__s--bg"><div class="wspu__v">
	<div class="wspu__kicker wspu__c">Mnenja kupaca</div>
	<h2 class="wspu__h2 wspu__c">Što pišu <em>naši kupci</em></h2>
	<p class="wspu__p wspu__c">Ocjena 4,8 od 1.081 recenzije kupaca.</p>
	<div class="wspu__grid wspu__g3">
		<?php
		$pu_r = array(
			array( 'Goran C.', 'prije 4 tjedna', 'Odlično radi. Ne mogu vam reći koliko sam se mučio stiskajući i petljajući s postavkama na kliještima za rupe. Najbolje potrošen novac za moj stol za rukotvorine, vrijedi svakog centa!', '32' ),
			array( 'Aleksandar M.', 'prije 11 tjedana', 'Ovaj alat je divan. Supruga ga je kupila i pokazala prijateljici, a prijateljica je odmah morala imati svoj. To dovoljno govori o alatu.', '89' ),
			array( 'Romana C.', 'prije 5 dana', 'Ovo mi je već uštedjelo poprilično vremena.', '3' ),
		);
		foreach ( $pu_r as $r ) {
			echo '<div class="wspu__rk"><div class="wspu__rh"><i class="wspu__av">' . esc_html( mb_substr( $r[0], 0, 1 ) ) . '</i><div><strong>' . esc_html( $r[0] ) . '</strong><small>' . esc_html( $r[1] ) . '</small></div></div><p>' . esc_html( $r[2] ) . '</p><span class="wspu__lk">' . $pu_svg( $pu_ik['srce'], 16 ) . ' ' . esc_html( $r[3] ) . '</span></div>';
		}
		?>
	</div>
</div></section>

<section class="wspu__s"><div class="wspu__v wspu__dva">
	<div class="wspu__media"><img src="<?php echo esc_url( $pu_u . 'noriks-puncher-povrat.webp' ); ?>" alt="NORIKS PunchPro bušač rupa s nastavcima" decoding="async"></div>
	<div>
		<div class="wspu__kicker">Bez rizika</div>
		<h2 class="wspu__h2">Brži, lakši i profesionalniji projekti – <em>ili vraćamo novac</em></h2>
		<p class="wspu__p">Isprobajte ga na svojim projektima 30 dana. Rizik je na nama, ne na vama – ako niste zadovoljni, vratite ga i dobit ćete povrat novca.</p>
		<?php echo $pu_li( array( '30 dana za povrat novca', 'Plaćanje pouzećem', 'Besplatna dostava iznad 70 €' ) ); ?>
	</div>
</div></section>

<section class="wspu__s wspu__s--bg npg-s"><?php $npg = array( 'izdelek' => 'NORIKS PunchPro', 'barva' => '#8a6a4f' ); include __DIR__ . '/noriks-pogoji.php'; ?></section>

</div>
<style>
.wspu{color:#1c1c1c;font-family:inherit}
.wspu__s{padding:72px 0;background:#fff}.wspu__s.wspu__s--bg{background:#f6efe8}
.wspu__v{width:100%;max-width:1240px;margin:0 auto;padding:0 24px;box-sizing:border-box}
.wspu__c{text-align:center}
.wspu__kicker{display:inline-flex;align-items:center;gap:10px;font-size:13px;letter-spacing:1.4px;text-transform:uppercase;color:#8a6a4f;margin:0 0 10px;font-weight:800}
.wspu__kicker::before{content:"";width:26px;height:2px;background:#d9c2af;border-radius:2px}
.wspu__kicker.wspu__c{display:flex;justify-content:center}
.wspu__h2{font-size:clamp(26px,3vw,36px);font-weight:800;line-height:1.2;margin:0 0 16px;color:#2b2522}.wspu__h2 em,.wspu__h3 em{font-style:italic;color:#8a6a4f}
.wspu__vel{margin-bottom:40px}
.wspu__h3{font-size:clamp(22px,2.4vw,28px);font-weight:800;line-height:1.25;margin:0 0 14px;color:#2b2522}
.wspu__p{font-size:16px;line-height:1.65;color:#3d3632;margin:0 0 14px}
.wspu__z{font-weight:800;font-size:17px;color:#2b2522;margin:16px 0 0;padding-left:14px;border-left:3px solid #d9c2af}
.wspu__kar{display:grid;grid-auto-flow:column;grid-auto-columns:calc((100% - 66px)/4);gap:22px;overflow-x:auto;scroll-snap-type:x mandatory;scrollbar-width:none;margin-top:26px;padding-bottom:6px}
.wspu__kar::-webkit-scrollbar{display:none}
.wspu__km{scroll-snap-align:start;border-radius:16px;overflow:hidden;box-shadow:0 8px 24px rgba(90,60,30,.12);aspect-ratio:9/16;background:#e9ded3}
.wspu__km img,.wspu__km video{width:100%;height:100%;object-fit:cover;display:block}
.wspu__dva{display:grid;grid-template-columns:1fr 1fr;gap:56px;align-items:center}.wspu__dva>div{min-width:0}
.wspu__dva--rev>.wspu__media{order:2}
.wspu__media{border-radius:18px;overflow:hidden;box-shadow:0 14px 36px rgba(90,60,30,.14);aspect-ratio:4/5;background:#efe6dc}
.wspu__media img,.wspu__media video{width:100%;height:100%;object-fit:cover;display:block}
.wspu__al{list-style:none;margin:10px 0 0;padding:0;display:flex;flex-direction:column;gap:10px}
.wspu__al li{display:flex;gap:10px;align-items:center;font-size:15.5px;font-weight:700;color:#2b2522;margin:0;list-style:none}
.wspu__tk{flex:0 0 28px;width:28px;height:28px;border-radius:50%;background:#efe2d4;color:#8a6a4f;display:inline-flex;align-items:center;justify-content:center}
.wspu__vl{display:grid;grid-template-columns:repeat(3,1fr);gap:10px;margin-top:18px}
.wspu__vl span{background:#fff;border-radius:12px;padding:12px 8px;text-align:center;font-weight:800;color:#2b2522;box-shadow:0 4px 14px rgba(90,60,30,.08)}
.wspu__grid{display:grid;gap:22px;margin-top:26px}.wspu__g3{grid-template-columns:repeat(3,1fr)}
.wspu__k{background:#fff;border-radius:16px;padding:30px 26px;text-align:center;box-shadow:0 8px 24px rgba(90,60,30,.10);transition:transform .2s,box-shadow .2s}
.wspu__k:hover{transform:translateY(-3px);box-shadow:0 14px 30px rgba(90,60,30,.16)}
.wspu__ki{width:56px;height:56px;border-radius:50%;background:#efe2d4;border:1.5px solid #d9c2af;color:#8a6a4f;display:inline-flex;align-items:center;justify-content:center;box-sizing:border-box;margin:0 0 12px}
.wspu__pc{display:block;font-size:44px;font-weight:900;color:#8a6a4f;line-height:1;margin:0 0 10px}
.wspu__k p{margin:0;font-size:15.5px;line-height:1.55;color:#3d3632}
.wspu__rk{background:#fff;border-radius:16px;padding:24px 26px;box-shadow:0 8px 24px rgba(90,60,30,.10);display:flex;flex-direction:column}
.wspu__rh{display:flex;align-items:center;gap:12px;margin:0 0 12px}
.wspu__rh strong{display:block;font-size:15.5px;color:#2b2522}.wspu__rh small{font-size:13px;color:#888}
.wspu__av{display:inline-flex;align-items:center;justify-content:center;width:40px;height:40px;border-radius:50%;background:#efe2d4;color:#8a6a4f;font-style:normal;font-weight:800}
.wspu__rk p{font-size:15.5px;line-height:1.6;color:#333;margin:0 0 14px;flex:1}
.wspu__lk{display:inline-flex;align-items:center;gap:6px;color:#8a6a4f;font-weight:700;font-size:14px}
@media (max-width:1024px){.wspu__kar{grid-auto-columns:calc((100% - 44px)/3)}}
@media (max-width:860px){
.wspu__s{padding:48px 0}
.wspu__dva{grid-template-columns:minmax(0,1fr);gap:26px}.wspu__dva--rev>.wspu__media{order:0}
.wspu__g3{grid-template-columns:1fr}
.wspu__kar{grid-auto-columns:62%}
}
@media (max-width:767px){.wspu__v{padding:0 16px}}
@media (max-width:560px){.wspu__h2{font-size:25px}.wspu__vel{margin-bottom:24px}}
</style>
