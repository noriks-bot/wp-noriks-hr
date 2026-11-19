<?php
/**
 * NORIKS NightVision (orto-nvision) - polarizirane naocale za nocnu voznju - why sekcije po natancni strukturi originala
 * (nightvisionpro.store/products/nvp-deal).
 *
 * STRUKTURA ORIGINALA:
   1. "See It In Action" - karusel 4 UGC videov (pod galerijo) - pri nas 4 videi v vrsti z originala (brez zvoka, skrajsani), mobil karusel
   2. "Real People, Real Situations" - karusel 7 fotografij kupcev - pri nas karusel 6 fotografij s puscicami (fotografija z vrecko tuje trgovine izpuscena), brez tuje stevilke kupcev
   3. The Problem - video levo, besedilo desno + 3 alineje s kljukicami - pri nas video levo, besedilo + 3 alineje desno
   4. How it works - 3 koraki v vrsti (ikona, stevilka, naslov, besedilo) - pri nas 3 kartice z ikonami originala in stevilkami
   5. Why - 6 prednosti z ikonami: 3 levo, slika/video na sredini, 3 desno - pri nas enako (video bljeska na sredini)
   6. Real Drivers - karusel 5 mnenj (zvezdice, besedilo, ime, Verified buyer) - pri nas karusel 5 mnenj s puscicami
   7. See the Difference - drsnik prej/potem (2 sliki) - pri nas drsnik Bez naocala / S naocalama
   8. primerjalna tabela Night Vision Pro VS. Cheap Alternatives (2 sliki v glavi, 6 vrstic) - pri nas tabela NORIKS / jeftine alternative (vrstica s tujim jamstvom 60 dni -> 30 dana za povrat)
   9. 60 dni jamstvo - pri nas NORIKS pogoji (30 dana)
   FAQ originala -> auto_reviews/FAQ_HR_nvision.php; mnenja -> auto_reviews/HR_nvision.php. CTA gumbi izpusceni.
 * VIDEO: /img/nvision/noriks-nvision-kupac-1.mp4 /img/nvision/noriks-nvision-kupac-2.mp4 /img/nvision/noriks-nvision-kupac-3.mp4 /img/nvision/noriks-nvision-kupac-4.mp4
 * VIDEO: /img/nvision/noriks-nvision-problem.mp4 /img/nvision/noriks-nvision-bljesak.mp4
 * BARVA ORIGINALA: #d4922a (jantarna barva ikon, leč in poudarkov originala, temno nocno ozadje #141823); svetel ton za --bg #fbf3e6, akcent #a8701a
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
$nv_u = get_template_directory_uri() . '/img/nvision/';
$nv_ik = array(
	'stit'  => '<path d="M12 3l7.5 3v5.5c0 4.6-3.2 8.2-7.5 9.5-4.3-1.3-7.5-4.9-7.5-9.5V6z"/><path d="M8.6 12.2l2.4 2.4 4.4-4.6"/>',
	'oko'   => '<path d="M2 12s3.6-7 10-7 10 7 10 7-3.6 7-10 7S2 12 2 12z"/><circle cx="12" cy="12" r="3"/>',
	'sunce' => '<circle cx="12" cy="12" r="4"/><path d="M12 2v2M12 20v2M4.9 4.9l1.4 1.4M17.7 17.7l1.4 1.4M2 12h2M20 12h2M4.9 19.1l1.4-1.4M17.7 6.3l1.4-1.4"/>',
	'nao'   => '<circle cx="6.5" cy="14" r="3.5"/><circle cx="17.5" cy="14" r="3.5"/><path d="M10 14h4M3 14l1-6M21 14l-1-6"/>',
	'kisa'  => '<path d="M12 3s6 6.6 6 11a6 6 0 0 1-12 0c0-4.4 6-11 6-11z"/>',
	'pero'  => '<path d="M20 4C10 4 5 9 4 20"/><path d="M20 4c0 8-5 12-12 12"/>',
);
$nv_svg = function ( $d, $s = 24 ) {
	return '<svg viewBox="0 0 24 24" width="' . (int) $s . '" height="' . (int) $s . '" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">' . $d . '</svg>';
};
$nv_vid = function ( $ime ) use ( $nv_u ) {
	return '<video src="' . esc_url( $nv_u . $ime . '.mp4' ) . '" poster="' . esc_url( $nv_u . $ime . '.jpg' ) . '" autoplay muted loop playsinline preload="metadata"></video>';
};
$nv_zv = '<span class="wsnv__zv" aria-label="5 zvjezdica">' . str_repeat( '<svg viewBox="0 0 20 20" width="17" height="17" fill="currentColor" aria-hidden="true" style="display:inline-block;margin-right:2px"><path d="M10 1.5l2.6 5.3 5.9.9-4.3 4.1 1 5.8L10 14.9l-5.2 2.7 1-5.8L1.5 7.7l5.9-.9z"/></svg>', 5 ) . '</span>';
?>
<div class="wsnv">

<section class="wsnv__s wsnv__s--bg"><div class="wsnv__v">
	<div class="wsnv__kicker wsnv__c">Pogledajte kako radi</div>
	<h2 class="wsnv__h2 wsnv__c">Noćna vožnja <em>bez zasljepljivanja</em></h2>
	<p class="wsnv__p wsnv__c">Kupci snimljeni u autu – kako naočale stoje preko dioptrije i kako izgleda cesta kroz jantarne leće.</p>
	<div class="wsnv__grid wsnv__g4 wsnv__vk">
		<?php foreach ( array( 1, 2, 3, 4 ) as $n ) : ?>
			<div class="wsnv__vm"><?php echo $nv_vid( 'noriks-nvision-kupac-' . $n ); ?></div>
		<?php endforeach; ?>
	</div>
	<p class="wsnv__zak wsnv__zak--c">Nose se preko vaših naočala – bez kupovanja novih dioptrijskih.</p>
</div></section>

<section class="wsnv__s"><div class="wsnv__v">
	<div class="wsnv__kicker wsnv__c">Stvarni ljudi, stvarne situacije</div>
	<h2 class="wsnv__h2 wsnv__c">Tisuće vozača ponovno <em>mirno vozi noću</em></h2>
	<p class="wsnv__p wsnv__c">Fotografije kupaca – na putu kući, na kiši, u gradskoj gužvi i na seoskim cestama.</p>
	<div class="wsnv__grid wsnv__kar4">
		<?php foreach ( array( 1, 2, 3, 4, 5, 6 ) as $n ) : ?>
			<div class="wsnv__fk"><img src="<?php echo esc_url( $nv_u . 'noriks-nvision-kupac-foto-' . $n . '.webp' ); ?>" alt="Kupac NORIKS NightVision naočala u autu, fotografija <?php echo (int) $n; ?>" decoding="async"></div>
		<?php endforeach; ?>
	</div>
</div></section>

<section class="wsnv__s wsnv__s--bg"><div class="wsnv__v wsnv__dva">
	<div class="wsnv__media wsnv__media--kv"><?php echo $nv_vid( 'noriks-nvision-problem' ); ?><span class="wsnv__bad">Problem</span></div>
	<div>
		<div class="wsnv__kicker">Problem</div>
		<h2 class="wsnv__h2">Nisu krive vaše oči. <em>Krivi su njihovi farovi.</em></h2>
		<p class="wsnv__p">Moderni LED i HID farovi i do 6 puta su jači od halogenih žarulja na koje su vaše oči navikle. Zjenice se ne mogu dovoljno brzo prilagoditi, pa nakon svakog automobila iz suprotnog smjera ostajete na trenutak zaslijepljeni – i to do 9 sekundi.</p>
		<p class="wsnv__p">Upravo tih nekoliko sekundi na mračnoj cesti čini noćnu vožnju napornom: ne vidite rub ceste, crte ni pješaka, a svaki novi par farova ponovi isto.</p>
		<ul class="wsnv__kv">
			<li>LED farovi i do 6x su jači od halogenih</li>
			<li>Starijim očima treba i do 9 sekundi da se oporave od bljeska</li>
			<li>6 od 10 vozača kaže da im smetaju farovi iz suprotnog smjera</li>
		</ul>
		<p class="wsnv__zak">Rješenje nije izbjegavati noćnu vožnju – nego smanjiti bljesak prije nego dođe do očiju.</p>
	</div>
</div></section>

<section class="wsnv__s"><div class="wsnv__v">
	<div class="wsnv__kicker wsnv__c">Tehnologija protiv bljeska</div>
	<h2 class="wsnv__h2 wsnv__c">Kako rade <em>NORIKS NightVision</em> naočale</h2>
	<p class="wsnv__p wsnv__c">Tri sloja zaštite rade zajedno – od prvog para farova do zadnjeg kilometra.</p>
	<div class="wsnv__grid wsnv__g3">
		<?php
		$nv_kor = array(
			array( 'Polarizirani filtar', 'TAC polarizirani sloj blokira raspršenu i odbijenu svjetlost farova iz suprotnog smjera prije nego dođe do vaših očiju.' ),
			array( 'Jači kontrast', 'Jantarna nijansa pojačava kontrast i dojam dubine – rubovi ceste, crte i prepreke postaju oštriji.' ),
			array( 'Zaštita sa strane', 'Okvir koji obuhvaća lice blokira bljesak sa strane, iz retrovizora i od vozila u prolazu. UV400 zaštita.' ),
		);
		foreach ( $nv_kor as $i => $k ) {
			echo '<div class="wsnv__k wsnv__k--ik"><div class="wsnv__ikb"><img src="' . esc_url( $nv_u . 'noriks-nvision-ikona-' . ( $i + 1 ) . '.svg' ) . '" alt="' . esc_attr( $k[0] ) . '" width="64" height="64"><span class="wsnv__st">' . ( $i + 1 ) . '</span></div><strong class="wsnv__nm">' . esc_html( $k[0] ) . '</strong><p>' . esc_html( $k[1] ) . '</p></div>';
		}
		?>
	</div>
	<p class="wsnv__zak wsnv__zak--c">Ne zatamnjuju cestu – izoštravaju je.</p>
</div></section>

<section class="wsnv__s wsnv__s--bg"><div class="wsnv__v">
	<div class="wsnv__kicker wsnv__c">Zašto NORIKS NightVision</div>
	<h2 class="wsnv__h2 wsnv__c">Napravljene za <em>sigurnu noćnu vožnju</em></h2>
	<div class="wsnv__sred">
		<div class="wsnv__sc">
			<div class="wsnv__sf"><span class="wsnv__ki"><?php echo $nv_svg( $nv_ik['oko'] ); ?></span><div><strong>Manje bljeska</strong><p>TAC polarizacija smanjuje oštre odsjaje farova i mokre ceste.</p></div></div>
			<div class="wsnv__sf"><span class="wsnv__ki"><?php echo $nv_svg( $nv_ik['sunce'] ); ?></span><div><strong>Oštriji kontrast</strong><p>Jantarna leća pojačava dojam dubine, a ne zatamnjuje pogled.</p></div></div>
			<div class="wsnv__sf"><span class="wsnv__ki"><?php echo $nv_svg( $nv_ik['stit'] ); ?></span><div><strong>UV400 zaštita</strong><p>Potpuna UV zaštita, danju i noću.</p></div></div>
		</div>
		<div class="wsnv__sm"><?php echo $nv_vid( 'noriks-nvision-bljesak' ); ?></div>
		<div class="wsnv__sc">
			<div class="wsnv__sf"><span class="wsnv__ki"><?php echo $nv_svg( $nv_ik['nao'] ); ?></span><div><strong>Stanu preko dioptrije</strong><p>Udobno sjede preko bifokalnih i progresivnih naočala.</p></div></div>
			<div class="wsnv__sf"><span class="wsnv__ki"><?php echo $nv_svg( $nv_ik['kisa'] ); ?></span><div><strong>Za svako vrijeme</strong><p>Rade po kiši, magli, snijegu i oblačnom danu.</p></div></div>
			<div class="wsnv__sf"><span class="wsnv__ki"><?php echo $nv_svg( $nv_ik['pero'] ); ?></span><div><strong>Lagane</strong><p>Samo 28 g – jedva se osjete, čak i preko naočala.</p></div></div>
		</div>
	</div>
</div></section>

<section class="wsnv__s"><div class="wsnv__v">
	<div class="wsnv__kicker wsnv__c">Stvarni vozači, stvarno olakšanje</div>
	<h2 class="wsnv__h2 wsnv__c">Ponovno <em>voze noću</em></h2>
	<p class="wsnv__p wsnv__c">Priče vozača kojima se vratilo samopouzdanje za volanom.</p>
	<div class="wsnv__grid wsnv__kar3">
		<?php
		$nv_m = array(
			array( 'Konačno mogu voziti noću, a da me ne hvata strah od auta iz suprotnog smjera. Razlika je kao noć i dan.', 'Robert K.' ),
			array( 'Seoske ceste noću bile su mi noćna mora. Sad vidim jasno i držim se svoje trake.', 'Lidija M.' ),
			array( 'Vid mi je slabiji i skoro sam odustala od vožnje po mraku. Ove naočale mi jako pomažu.', 'Dora P.' ),
			array( 'Kupio sam ih roditeljima. Tata kaže da se noću za volanom osjeća 20 godina mlađe.', 'Jakov T.' ),
			array( 'Noću vozim taksi. Bljesak farova je praktički nestao. Vrijede svaki cent.', 'Marko H.' ),
		);
		foreach ( $nv_m as $m ) {
			echo '<div class="wsnv__rk">' . $nv_zv . '<p>' . esc_html( $m[0] ) . '</p><span class="wsnv__ime"><i class="wsnv__av">' . esc_html( mb_substr( $m[1], 0, 1 ) ) . '</i>' . esc_html( $m[1] ) . ' <small>' . $nv_svg( $nv_ik['stit'], 14 ) . ' Provjereni kupac</small></span></div>';
		}
		?>
	</div>
</div></section>

<section class="wsnv__s wsnv__s--bg"><div class="wsnv__v">
	<div class="wsnv__kicker wsnv__c">Pogledajte razliku</div>
	<h2 class="wsnv__h2 wsnv__c">Cesta <em>kroz leće</em></h2>
	<p class="wsnv__p wsnv__c">Povucite klizač: lijevo bez naočala, desno s NORIKS NightVision.</p>
	<div class="wsnv__ba" data-pos="50">
		<img class="wsnv__ba-po" src="<?php echo esc_url( $nv_u . 'noriks-nvision-s-naocalama.webp' ); ?>" alt="Noćna cesta kroz NORIKS NightVision jantarne leće" decoding="async">
		<div class="wsnv__ba-pr"><img src="<?php echo esc_url( $nv_u . 'noriks-nvision-bez-naocala.webp' ); ?>" alt="Noćna cesta s bljeskom farova bez naočala" decoding="async"></div>
		<span class="wsnv__oz wsnv__oz--ne">Prije</span><span class="wsnv__oz wsnv__oz--da">Poslije</span>
		<span class="wsnv__ba-l"><i>‹ ›</i></span>
		<input class="wsnv__ba-r" type="range" min="0" max="100" value="50" aria-label="Usporedba prije i poslije">
	</div>
	<p class="wsnv__nap">* Simulirana usporedba. Dojam ovisi o uvjetima vožnje i vidu.</p>
</div></section>

<section class="wsnv__s"><div class="wsnv__v">
	<div class="wsnv__kicker wsnv__c">Po čemu se razlikuju</div>
	<h2 class="wsnv__h2 wsnv__c">NORIKS NightVision <em>ili jeftine alternative?</em></h2>
	<div class="wsnv__tw"><table class="wsnv__tab">
		<thead><tr><th>Usporedba</th><th class="wsnv__nas"><img src="<?php echo esc_url( $nv_u . 'noriks-nvision-nase-naocale.webp' ); ?>" alt="NORIKS NightVision naočale"><span>NORIKS NightVision</span></th><th><img src="<?php echo esc_url( $nv_u . 'noriks-nvision-jeftine-naocale.webp' ); ?>" alt="Jeftine žute naočale"><span>Jeftine alternative</span></th></tr></thead>
		<tbody>
			<?php
			$nv_t = array(
				array( 'Polarizirani filtar bljeska', 'Obična zatamnjena plastika' ),
				array( 'Stanu preko dioptrijskih naočala', 'Morate skinuti svoje naočale' ),
				array( 'Zaštita sa strane', 'Otvorene strane puštaju bljesak' ),
				array( 'UV400 zaštita', 'Bez oznake zaštite' ),
				array( 'Tvrda kutija i krpica u paketu', 'U plastičnoj vrećici' ),
				array( '30 dana za povrat novca', 'Bez povrata i podrške' ),
			);
			foreach ( $nv_t as $r ) {
				echo '<tr><td class="wsnv__nas"><span class="wsnv__da">✓</span>' . esc_html( $r[0] ) . '</td><td class="wsnv__nas wsnv__c"><span class="wsnv__da">✓</span></td><td><span class="wsnv__ne">✕</span>' . esc_html( $r[1] ) . '</td></tr>';
			}
			?>
		</tbody>
	</table></div>
	<p class="wsnv__nap">* Prema specifikacijama proizvoda i javno dostupnim recenzijama.</p>
</div></section>

<section class="wsnv__s wsnv__s--bg npg-s"><?php $npg = array( 'izdelek' => 'NORIKS NightVision', 'barva' => '#d4922a' ); include __DIR__ . '/noriks-pogoji.php'; ?></section>

</div>
<style>
.wsnv{color:#1c1c1c;font-family:inherit}
.wsnv__s{padding:72px 0;background:#fff}.wsnv__s.wsnv__s--bg{background:#fbf3e6}
.wsnv__v{width:100%;max-width:1240px;margin:0 auto;padding:0 24px;box-sizing:border-box}
.wsnv__c{text-align:center}
.wsnv__kicker{display:inline-flex;align-items:center;gap:10px;font-size:13px;letter-spacing:1.4px;text-transform:uppercase;color:#a8701a;margin:0 0 10px;font-weight:800}
.wsnv__kicker::before{content:"";width:26px;height:2px;background:#d4922a;border-radius:2px}
.wsnv__kicker.wsnv__c{display:flex;justify-content:center}
.wsnv__h2{font-size:clamp(26px,3vw,36px);font-weight:800;line-height:1.2;margin:0 0 16px;color:#141823}.wsnv__h2 em{font-style:italic;color:#a8701a}
.wsnv__p{font-size:16px;line-height:1.65;color:#333;margin:0 0 14px}
.wsnv__zak{font-size:16.5px;font-weight:800;line-height:1.5;margin:20px 0 0;padding-left:14px;border-left:3px solid #d4922a}
.wsnv__zak--c{border-left:0;padding-left:0;text-align:center;margin-top:26px}
.wsnv__nap{font-size:13px;color:#777;text-align:center;margin:16px 0 0}
.wsnv__dva{display:grid;grid-template-columns:1fr 1fr;gap:56px;align-items:center}.wsnv__dva>div{min-width:0}
.wsnv__media{position:relative;border-radius:18px;overflow:hidden;box-shadow:0 14px 36px rgba(120,80,20,.18);aspect-ratio:4/5;background:#141823}
.wsnv__media img,.wsnv__media video{width:100%;height:100%;object-fit:cover;display:block}.wsnv__media--kv{aspect-ratio:1/1}
.wsnv__bad{position:absolute;left:16px;top:16px;background:#d4922a;color:#fff;font-weight:800;font-size:13px;letter-spacing:.8px;text-transform:uppercase;padding:7px 13px;border-radius:30px}
.wsnv__grid{display:grid;gap:22px;margin-top:26px}
.wsnv__g3{grid-template-columns:repeat(3,1fr)}.wsnv__g4{grid-template-columns:repeat(4,1fr)}
.wsnv__vm{border-radius:16px;overflow:hidden;box-shadow:0 10px 26px rgba(120,80,20,.16);background:#000}
.wsnv__vm video{width:100%;aspect-ratio:9/16;object-fit:cover;display:block}
.wsnv__fk{border-radius:16px;overflow:hidden;box-shadow:0 10px 26px rgba(120,80,20,.14)}
.wsnv__fk img{width:100%;aspect-ratio:4/5;object-fit:cover;display:block}
.wsnv__k{background:#fff;border-radius:16px;padding:30px 26px;text-align:center;box-shadow:0 8px 24px rgba(120,80,20,.10);transition:transform .2s,box-shadow .2s}
.wsnv__k:hover{transform:translateY(-3px);box-shadow:0 14px 30px rgba(120,80,20,.16)}
.wsnv__ikb{position:relative;width:96px;height:96px;margin:0 auto 16px;border-radius:50%;background:#f8e7c9;border:1.5px solid #d4922a;display:flex;align-items:center;justify-content:center}
.wsnv__ikb img{width:64px;height:64px;display:block}
.wsnv__st{position:absolute;right:-6px;top:-6px;width:32px;height:32px;border-radius:50%;background:#d4922a;color:#fff;font-weight:800;font-size:15px;display:flex;align-items:center;justify-content:center;box-shadow:0 4px 12px rgba(0,0,0,.18)}
.wsnv__nm{font-size:18px;font-weight:800;margin:0 0 8px;display:block;color:#141823}
.wsnv__k p{margin:0;font-size:15.5px;line-height:1.55;color:#333}
.wsnv__sred{display:grid;grid-template-columns:1fr minmax(0,1.1fr) 1fr;gap:36px;align-items:center;margin-top:30px}
.wsnv__sc{display:flex;flex-direction:column;gap:18px}
.wsnv__sf{display:flex;gap:14px;align-items:flex-start;background:#fff;border-radius:16px;padding:20px;box-shadow:0 8px 24px rgba(120,80,20,.10)}
.wsnv__sf strong{display:block;font-size:16.5px;font-weight:800;color:#141823;margin:0 0 4px}.wsnv__sf p{margin:0;font-size:15px;line-height:1.5;color:#444}
.wsnv__ki{flex:0 0 46px;width:46px;height:46px;border-radius:50%;background:#f8e7c9;color:#a8701a;display:flex;align-items:center;justify-content:center}
.wsnv__sm{border-radius:18px;overflow:hidden;box-shadow:0 14px 36px rgba(120,80,20,.18);background:#000}
.wsnv__sm video{width:100%;aspect-ratio:1/1;object-fit:cover;display:block}
.wsnv__zv{color:#f5a623;letter-spacing:2px;font-size:16px;display:block;margin:0 0 10px}
.wsnv__rk{background:#fff;border-radius:16px;padding:24px;box-shadow:0 8px 24px rgba(120,80,20,.10);display:flex;flex-direction:column}
.wsnv__rk p{font-size:15.5px;line-height:1.6;color:#333;margin:0 0 16px;flex:1}
.wsnv__ime{display:flex;align-items:center;flex-wrap:wrap;gap:8px;font-weight:800;font-size:14.5px;color:#141823}
.wsnv__ime small{display:inline-flex;align-items:center;gap:4px;font-weight:700;color:#a8701a;font-size:13px}
.wsnv__av{display:inline-flex;align-items:center;justify-content:center;width:34px;height:34px;border-radius:50%;background:#f8e7c9;color:#a8701a;font-style:normal;font-weight:800}
.wsnv__kv{list-style:none;margin:6px 0 0;padding:0}
.wsnv__kv li{position:relative;padding:0 0 0 32px;margin:0 0 12px;font-size:15.5px;line-height:1.55;color:#333;list-style:none;font-weight:600}
.wsnv__kv li::before{content:"✓";position:absolute;left:0;top:0;width:22px;height:22px;border-radius:50%;background:#f8e7c9;color:#a8701a;font-weight:800;font-size:13px;display:flex;align-items:center;justify-content:center}
.wsnv__ba{position:relative;margin-top:26px;border-radius:18px;overflow:hidden;box-shadow:0 14px 36px rgba(120,80,20,.18);aspect-ratio:1200/896;--p:50%}
.wsnv__ba img{position:absolute;inset:0;width:100%;height:100%;object-fit:cover;display:block}
.wsnv__ba-pr{position:absolute;inset:0;clip-path:inset(0 calc(100% - var(--p)) 0 0)}
.wsnv__ba-l{position:absolute;top:0;bottom:0;left:var(--p);width:3px;margin-left:-1.5px;background:#fff;pointer-events:none}
.wsnv__ba-l i{position:absolute;top:50%;left:50%;transform:translate(-50%,-50%);width:46px;height:46px;border-radius:50%;background:#fff;color:#141823;font-style:normal;font-weight:800;font-size:18px;display:flex;align-items:center;justify-content:center;box-shadow:0 4px 14px rgba(0,0,0,.25)}
.wsnv__ba-r{position:absolute;inset:0;width:100%;height:100%;opacity:0;cursor:ew-resize;margin:0}
.wsnv__oz{position:absolute;top:16px;font-weight:800;font-size:13px;letter-spacing:.8px;text-transform:uppercase;padding:7px 13px;border-radius:30px;color:#fff;pointer-events:none}
.wsnv__oz--ne{left:16px;background:rgba(20,24,35,.85)}.wsnv__oz--da{right:16px;background:#d4922a}
.wsnv__tw{overflow-x:auto;border-radius:16px;box-shadow:0 8px 24px rgba(120,80,20,.10);background:#fff;margin-top:26px}
.wsnv__tab{width:100%;border-collapse:collapse;font-size:15px;margin:0;min-width:560px;table-layout:fixed}
.wsnv__tab th{background:#141823!important;color:#fff!important;font-weight:800;padding:16px 10px;text-align:center;border:0;vertical-align:bottom}
.wsnv__tab th img{display:block;margin:0 auto 10px;height:96px;width:auto;max-width:130px;object-fit:cover;border-radius:10px}
.wsnv__tab th.wsnv__nas{background:#d4922a!important}
.wsnv__tab td{padding:14px 14px;text-align:left;border:0;border-bottom:1px solid #f1e3cc;color:#333}
.wsnv__tab td.wsnv__nas{background:#fffaf1;font-weight:700;color:#141823}.wsnv__tab td.wsnv__c{text-align:center}
.wsnv__tab tbody tr:last-child td{border-bottom:0}
.wsnv__da,.wsnv__ne{display:inline-flex;width:22px;height:22px;border-radius:50%;align-items:center;justify-content:center;font-size:13px;font-weight:800;margin-right:8px;vertical-align:middle}
.wsnv__da{background:#d4922a;color:#fff}.wsnv__ne{background:#eee;color:#999}
.wsnv__karw{position:relative;padding:0 60px}
.wsnv__kar3,.wsnv__kar4{grid-auto-flow:column;grid-template-columns:none;overflow-x:auto;scroll-snap-type:x mandatory;scrollbar-width:none}
.wsnv__kar3{grid-auto-columns:calc((100% - 44px)/3)}.wsnv__kar4{grid-auto-columns:calc((100% - 66px)/4)}
.wsnv__kar3::-webkit-scrollbar,.wsnv__kar4::-webkit-scrollbar{display:none}.wsnv__kar3>*,.wsnv__kar4>*{scroll-snap-align:start}
.wsnv__pus{position:absolute;top:50%;transform:translateY(-50%);width:44px;height:44px;border-radius:50%;border:0;background:#fff;box-shadow:0 4px 14px rgba(0,0,0,.18);font-size:24px;line-height:1;color:#141823;cursor:pointer;z-index:2}
.wsnv__pus--l{left:0}.wsnv__pus--d{right:0}
.wsnv__rk{padding:24px 30px}
@media (max-width:1024px){.wsnv__sred{grid-template-columns:1fr 1fr}.wsnv__sm{grid-column:1/-1;grid-row:1;max-width:460px;width:100%;margin:0 auto}.wsnv__kar4{grid-auto-columns:calc((100% - 44px)/3)}}
@media (max-width:860px){
.wsnv__s{padding:48px 0}
.wsnv__dva{grid-template-columns:minmax(0,1fr);gap:26px}
.wsnv__g3{grid-template-columns:1fr}
.wsnv__sred{grid-template-columns:1fr}
.wsnv__kar3{grid-auto-columns:84%}.wsnv__kar4{grid-auto-columns:72%}.wsnv__pus{display:none}.wsnv__karw{padding:0}
.wsnv__rk{padding:22px}
.wsnv__vk{grid-template-columns:none;grid-auto-flow:column;grid-auto-columns:62%;overflow-x:auto;scroll-snap-type:x mandatory;scrollbar-width:none;padding-bottom:6px}
.wsnv__vk::-webkit-scrollbar{display:none}.wsnv__vk>*{scroll-snap-align:start}
}
@media (max-width:767px){.wsnv__v{padding:0 16px}}
@media (max-width:560px){.wsnv__h2{font-size:25px}.wsnv__ba{aspect-ratio:4/5}
.wsnv__kicker.wsnv__c{flex-direction:column;gap:8px;text-align:center}
.wsnv__tab{min-width:0;font-size:13.5px}.wsnv__tab th,.wsnv__tab td{padding:10px 7px}
.wsnv__tab th:nth-child(1){width:37%}.wsnv__tab th:nth-child(2){width:26%}.wsnv__tab th:nth-child(3){width:37%}
.wsnv__tab th{font-size:13px;line-height:1.3}.wsnv__tab th img{height:52px;max-width:100%;margin-bottom:6px}
.wsnv__da,.wsnv__ne{width:18px;height:18px;font-size:11px;margin-right:5px}
.wsnv__tab td:not(.wsnv__c){hyphens:auto;-webkit-hyphens:auto}}
</style>
<script>
(function(){
document.querySelectorAll('.wsnv__kar3,.wsnv__kar4').forEach(function(k){
  var w=document.createElement('div');w.className='wsnv__karw';k.parentNode.insertBefore(w,k);w.appendChild(k);
  ['l','d'].forEach(function(s){var b=document.createElement('button');b.type='button';b.className='wsnv__pus wsnv__pus--'+s;b.setAttribute('aria-label',s==='l'?'Prethodno':'Sljedeće');b.textContent=s==='l'?'‹':'›';
    b.addEventListener('click',function(){var c=k.firstElementChild;var d=c?c.getBoundingClientRect().width+22:300;k.scrollBy({left:s==='l'?-d:d,behavior:'smooth'});});w.appendChild(b);});
});
document.querySelectorAll('.wsnv__ba').forEach(function(b){var r=b.querySelector('.wsnv__ba-r');
  var f=function(){b.style.setProperty('--p',r.value+'%');};r.addEventListener('input',f);f();});
})();
</script>
