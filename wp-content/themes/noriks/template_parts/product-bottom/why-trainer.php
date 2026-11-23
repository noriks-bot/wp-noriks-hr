<?php
/**
 * NORIKS IronGrip (orto-trainer) - trenazer podlaktice i stiska - why sekcije po natancni strukturi originala
 * (tryendolab.com/products/irond-forearm-trainer).
 *
 * STRUKTURA ORIGINALA:
   1. trak 3 prednosti z ikonami (Built for Daily Use / Free Shipping / Compact & Portable) - pri nas 3 kartice z ikono v mrezi (grid), dostava -> besplatna iznad 70 €
   2. "47,000+ Happy Customers" - karusel 8 videov kupcev (4 videi, ponovljeni) + mnenje kupca z avatarjem - pri nas karusel 8 videov v istem vrstnem redu (scroll-snap) + kartica mnenja, stevilka kupcev -> 120.000
   3. "Description" - opis izdelka (harmonika) - pri nas slika levo (glavna slika izdelka), tekst desno
   4. "Before & After Results" - 3 pari prije/poslije (30 / 45 / 65 dni) - pri nas 3 pari v mrezi 3 v vrsti z oznakama PRIJE / NAKON X DANA
   5. "The 10-week transformation" - velika slika, ki se menja (tjedan 1 / 4 / 10) + 3 sličice s puscicami - pri nas slika desno (menja se, gumbi Tjedan 1 / 4 / 10), tekst levo
   6. "IROND vs the rest" - primerjalna tabela (6 vrstic, izdelek vs drugi trenazeri) - pri nas <table> NORIKS vs drugi trenazeri, brez tuje znamke
   7. "Your Progress Timeline" - 3 koraki (Week 1 / 4 / 6) - pri nas 3 kartice s stevilko tedna in ikono v mrezi
   8. "FAQ" - 4 vprasanja - pri nas v zavihku Informacije o proizvodu (auto_reviews/FAQ_HR_trainer.php, 7 vprasanj)
   Zakljucek: NORIKS pogoji. Odstevalnik "biggest sale", e-posta trgovine, novice in rok dostave 10-14 dni izpusceni (pri nas NORIKS pogoji).
 * SLIKE: /img/trainer/noriks-trainer-galerija-01.webp (napisi lokalizirani s Higgsfieldom), noriks-trainer-before-1..3.webp, noriks-trainer-after-1..3.webp, noriks-trainer-progress-w1/w4/w10.webp, noriks-trainer-avatar.webp
 * VIDEI: /img/trainer/noriks-trainer-video-1.mp4 ... video-4.mp4 (+ poster .jpg) - brez napisov in znamk, karusel ima 8 medijev kot original
 * BARVA ORIGINALA: #1e6bff (modra - akcentna barva strani, gumbi in oznake tednov na originalu); svetel ton za --bg #eef3ff, akcent #1d4fc4
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
$tr_u  = get_template_directory_uri() . '/img/trainer/';
$tr_ik = array(
	'misic'  => '<path d="M6.5 6.5l11 11"/><path d="M21 21l-1-1"/><path d="M3 3l1 1"/><path d="M18 22l4-4"/><path d="M2 6l4-4"/><path d="M3 10l7-7"/><path d="M14 21l7-7"/>',
	'kamion' => '<path d="M3 6h11v9H3z"/><path d="M14 9h4l3 3v3h-7z"/><circle cx="7" cy="17.5" r="1.8"/><circle cx="17" cy="17.5" r="1.8"/>',
	'dzep'   => '<rect x="5" y="3" width="14" height="18" rx="3"/><path d="M9 7h6"/><circle cx="12" cy="14" r="3"/>',
	'munja'  => '<path d="M13 3L5 14h6l-1 7 8-11h-6z"/>',
	'oko'    => '<path d="M2 12s3.5-7 10-7 10 7 10 7-3.5 7-10 7S2 12 2 12z"/><circle cx="12" cy="12" r="3"/>',
	'trofej' => '<path d="M8 4h8v5a4 4 0 0 1-8 0z"/><path d="M8 6H5a3 3 0 0 0 3 4M16 6h3a3 3 0 0 1-3 4"/><path d="M12 13v4M8.5 21h7M10 17h4v4h-4z"/>',
	'da'     => '<path d="M5 12.5l4.5 4.5L19 7.5"/>',
	'ne'     => '<path d="M7 7l10 10M17 7L7 17"/>',
	'sat'    => '<circle cx="12" cy="12" r="8.5"/><path d="M12 7.5V12l3 2"/>',
);
$tr_svg = function ( $d, $s = 24 ) {
	return '<svg viewBox="0 0 24 24" width="' . (int) $s . '" height="' . (int) $s . '" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">' . $d . '</svg>';
};
$tr_li = function ( $items ) use ( $tr_svg, $tr_ik ) {
	$o = '<ul class="wstr__al">';
	foreach ( $items as $t ) { $o .= '<li><span class="wstr__tk">' . $tr_svg( $tr_ik['da'], 16 ) . '</span><span>' . esc_html( $t ) . '</span></li>'; }
	return $o . '</ul>';
};
?>
<div class="wstr">

<section class="wstr__s wstr__s--bg"><div class="wstr__v">
	<div class="wstr__kicker wstr__c">Zašto baš ovaj trenažer</div>
	<h2 class="wstr__h2 wstr__c">Napravljen za <em>svakodnevni trening</em></h2>
	<div class="wstr__grid wstr__g3">
		<?php
		foreach ( array(
			array( 'misic', 'Za svakodnevnu uporabu', 'Izdržljiva izrada koja traje – trenirajte svaki dan, mjesecima.' ),
			array( 'kamion', 'Besplatna dostava', 'Za sve narudžbe iznad 70 €, plaćanje pouzećem.' ),
			array( 'dzep', 'Kompaktan i prenosiv', 'Trenirajte bilo gdje i bilo kada – stane u džep ili torbu.' ),
		) as $k ) {
			echo '<div class="wstr__k"><span class="wstr__ki">' . $tr_svg( $tr_ik[ $k[0] ], 26 ) . '</span><h3>' . esc_html( $k[1] ) . '</h3><p>' . esc_html( $k[2] ) . '</p></div>';
		}
		?>
	</div>
</div></section>

<section class="wstr__s"><div class="wstr__v">
	<div class="wstr__kicker wstr__c">Iskustva kupaca</div>
	<h2 class="wstr__h2 wstr__c"><em>120.000+</em> zadovoljnih kupaca</h2>
	<p class="wstr__p wstr__c">Pogledajte kako kupci treniraju podlaktice – kod kuće, na stepenicama, u autu i u teretani.</p>
	<div class="wstr__kar">
		<?php
		$tr_m = array(
			array( 'noriks-trainer-video-1', 'Kupac stišće trenažer i pokazuje podlakticu' ),
			array( 'noriks-trainer-video-2', 'Trening stiska trenažerom na stepenicama' ),
			array( 'noriks-trainer-video-3', 'Kupac trenira podlakticu trenažerom kod kuće' ),
			array( 'noriks-trainer-video-4', 'Trening podlaktice trenažerom na otvorenom' ),
			array( 'noriks-trainer-video-1', 'Kupac stišće trenažer i pokazuje podlakticu' ),
			array( 'noriks-trainer-video-2', 'Trening stiska trenažerom na stepenicama' ),
			array( 'noriks-trainer-video-3', 'Kupac trenira podlakticu trenažerom kod kuće' ),
			array( 'noriks-trainer-video-4', 'Trening podlaktice trenažerom na otvorenom' ),
		);
		foreach ( $tr_m as $m ) {
			echo '<div class="wstr__km"><video autoplay muted loop playsinline webkit-playsinline preload="metadata" poster="' . esc_url( $tr_u . $m[0] . '.jpg' ) . '" aria-label="' . esc_attr( $m[1] ) . '"><source src="' . esc_url( $tr_u . $m[0] . '.mp4' ) . '" type="video/mp4"></video></div>';
		}
		?>
	</div>
	<div class="wstr__tst">
		<img src="<?php echo esc_url( $tr_u . 'noriks-trainer-avatar.webp' ); ?>" alt="Hrvoje L., kupac" width="52" height="52" decoding="async">
		<div>
			<div class="wstr__tsth"><strong>Hrvoje L.</strong><span class="wstr__ver"><?php echo $tr_svg( $tr_ik['da'], 12 ); ?> Provjereni kupac</span><span class="wstr__zv">★★★★★</span></div>
			<p>Stisak mi je definitivno jači, a podlaktice počinju izgledati definiranije. Sviđa mi se što ga mogu koristiti gotovo bilo gdje, ne samo u teretani.</p>
		</div>
	</div>
</div></section>

<section class="wstr__s wstr__s--bg"><div class="wstr__v wstr__dva">
	<div class="wstr__media wstr__media--sq"><img src="<?php echo esc_url( $tr_u . 'noriks-trainer-galerija-01.webp' ); ?>" alt="NORIKS trenažer podlaktice u ruci, uz kutiju" decoding="async"></div>
	<div>
		<div class="wstr__kicker">O proizvodu</div>
		<h2 class="wstr__h2">Prava veličina i snaga podlaktice – <em>5 minuta dnevno</em></h2>
		<p class="wstr__p">NORIKS IronGrip je dinamična loptica za trening podlaktica, napravljena da gradi stvarnu veličinu, snagu i izdržljivost podlaktice – u samo 5 minuta dnevno, gdje god se nalazite.</p>
		<p class="wstr__p">Za razliku od klasičnih stiskalica s oprugom ili loptica za stiskanje, angažira cijeli kompleks podlaktice kroz otpor u više smjerova i cilja mišiće koje osnovne vježbe s utezima i standardni trening zaobilaze.</p>
		<p class="wstr__p">Jednostavno ga držite u dlanu i ponavljano stišćite, okrećući ruku kroz različite položaje kako biste pogodili svaki kut. Koristite ga za stolom, u autu ili dok gledate TV.</p>
		<p class="wstr__z">Teretana nije potrebna.</p>
	</div>
</div></section>

<section class="wstr__s"><div class="wstr__v">
	<div class="wstr__kicker wstr__c">Prije i poslije</div>
	<h2 class="wstr__h2 wstr__c">Rezultati <em>prije i poslije</em></h2>
	<p class="wstr__p wstr__c">Stvarni kupci, stvarni napredak podlaktica – samo 5 minuta dnevno.</p>
	<div class="wstr__grid wstr__g3">
		<?php
		foreach ( array( array( 1, '45' ), array( 2, '65' ), array( 3, '30' ) ) as $b ) {
			echo '<div class="wstr__ba"><figure><span class="wstr__tag">Prije</span><img src="' . esc_url( $tr_u . 'noriks-trainer-before-' . $b[0] . '.webp' ) . '" alt="Podlaktica kupca prije treninga" decoding="async"></figure><figure><span class="wstr__tag wstr__tag--po">Nakon ' . esc_html( $b[1] ) . ' dana</span><img src="' . esc_url( $tr_u . 'noriks-trainer-after-' . $b[0] . '.webp' ) . '" alt="Podlaktica kupca nakon ' . esc_attr( $b[1] ) . ' dana treninga" decoding="async"></figure></div>';
		}
		?>
	</div>
</div></section>

<section class="wstr__s wstr__s--bg"><div class="wstr__v wstr__dva wstr__dva--rev">
	<div class="wstr__media wstr__stage" data-wstr-stage>
		<img src="<?php echo esc_url( $tr_u . 'noriks-trainer-progress-w1.webp' ); ?>" alt="Napredak podlaktice, 1. tjedan" class="is-on" decoding="async">
		<img src="<?php echo esc_url( $tr_u . 'noriks-trainer-progress-w4.webp' ); ?>" alt="Napredak podlaktice, 4. tjedan" decoding="async">
		<img src="<?php echo esc_url( $tr_u . 'noriks-trainer-progress-w10.webp' ); ?>" alt="Napredak podlaktice, 10. tjedan" decoding="async">
		<span class="wstr__stag" data-wstr-tag>Tjedan 1</span>
	</div>
	<div>
		<div class="wstr__kicker">Transformacija u 10 tjedana</div>
		<h2 class="wstr__h2">Isti čovjek. Isti kauč. <em>10 tjedana treninga.</em></h2>
		<p class="wstr__p">5 minuta dnevno uz televizor. Ovako izgleda redovit trening – bez teretane i bez posebnog plana.</p>
		<div class="wstr__steps">
			<button type="button" class="wstr__step is-on" data-wstr-step="0"><b>Tjedan 1</b><strong>Osjetite da radi</strong><span>Normalne podlaktice. Već na prvim treninzima osjetite napetost i pečenje.</span></button>
			<button type="button" class="wstr__step" data-wstr-step="1"><b>Tjedan 4</b><strong>Vidite promjenu</strong><span>Deblje, čvršće podlaktice i primjetno jači stisak. Pojavljuju se prve vene.</span></button>
			<button type="button" class="wstr__step" data-wstr-step="2"><b>Tjedan 10</b><strong>Pravi rezultati</strong><span>Veće, prokrvljenije podlaktice koje napokon pašu uz ostatak tijela.</span></button>
		</div>
	</div>
</div></section>

<section class="wstr__s"><div class="wstr__v">
	<div class="wstr__kicker wstr__c">NORIKS protiv ostalih</div>
	<h2 class="wstr__h2 wstr__c">Zašto kupci biraju <em>NORIKS trenažer</em></h2>
	<p class="wstr__p wstr__c">Pravi stisak i veličina podlaktice, bilo gdje, s jednim jednostavnim alatom.</p>
	<div class="wstr__tw">
		<table class="wstr__tab">
			<thead><tr><th></th><th class="wstr__us">NORIKS</th><th>Drugi trenažeri</th></tr></thead>
			<tbody>
				<?php
				foreach ( array( 'Džepna veličina, lako se nosi', 'Trening bilo gdje, bez pripreme', 'Stisak i veličina podlaktice zajedno', 'Bez glomazne opreme', 'Ujednačen, kontinuiran otpor', 'Za početnike i napredne' ) as $red ) {
					echo '<tr><td>' . esc_html( $red ) . '</td><td class="wstr__us"><span class="wstr__da">' . $tr_svg( $tr_ik['da'], 16 ) . '</span></td><td><span class="wstr__ne">' . $tr_svg( $tr_ik['ne'], 16 ) . '</span></td></tr>';
				}
				?>
			</tbody>
		</table>
	</div>
	<p class="wstr__nap"><?php echo $tr_svg( $tr_ik['munja'], 18 ); ?> Samo 5 minuta dnevno, bilo gdje</p>
</div></section>

<section class="wstr__s wstr__s--bg"><div class="wstr__v">
	<div class="wstr__kicker wstr__c">Vaš napredak</div>
	<h2 class="wstr__h2 wstr__c">Vremenska crta <em>vašeg napretka</em></h2>
	<div class="wstr__grid wstr__g3">
		<?php
		foreach ( array(
			array( 'munja', 'Tjedan 1', 'Osjetite da radi', 'Odmah osjetite napetost i aktivaciju mišića – već od prvog dana.' ),
			array( 'oko', 'Tjedan 4', 'Vidite promjenu', 'Više volumena, više definicije i jači stisak.' ),
			array( 'trofej', 'Tjedan 6', 'Pravi rezultati', 'Primjetno veće podlaktice i snaga koja se osjeti i u ostalom treningu.' ),
		) as $k ) {
			echo '<div class="wstr__k"><span class="wstr__ki">' . $tr_svg( $tr_ik[ $k[0] ], 26 ) . '</span><span class="wstr__pill">' . esc_html( $k[1] ) . '</span><h3>' . esc_html( $k[2] ) . '</h3><p>' . esc_html( $k[3] ) . '</p></div>';
		}
		?>
	</div>
</div></section>

<section class="wstr__s npg-s"><?php $npg = array( 'izdelek' => 'NORIKS IronGrip', 'barva' => '#1e6bff' ); include __DIR__ . '/noriks-pogoji.php'; ?></section>

</div>
<script>
(function () {
	var root = document.querySelector('[data-wstr-stage]');
	if (!root || root.dataset.ready) return; root.dataset.ready = '1';
	var imgs = root.querySelectorAll('img'), tag = root.querySelector('[data-wstr-tag]');
	var steps = document.querySelectorAll('[data-wstr-step]'), cur = 0, timer = null;
	var naz = ['Tjedan 1', 'Tjedan 4', 'Tjedan 10'];
	function show(i) {
		cur = (i + 3) % 3;
		imgs.forEach(function (im, k) { im.classList.toggle('is-on', k === cur); });
		steps.forEach(function (s, k) { s.classList.toggle('is-on', k === cur); });
		tag.textContent = naz[cur];
	}
	function auto() { timer = setInterval(function () { show(cur + 1); }, 3000); }
	steps.forEach(function (s, k) { s.addEventListener('click', function () { clearInterval(timer); show(k); }); });
	auto();
})();
</script>
<style>
.wstr{color:#141a26;font-family:inherit}
.wstr__s{padding:72px 0;background:#fff}.wstr__s.wstr__s--bg{background:#eef3ff}
.wstr__v{width:100%;max-width:1240px;margin:0 auto;padding:0 24px;box-sizing:border-box}
.wstr__c{text-align:center}
.wstr__kicker{display:inline-flex;align-items:center;gap:10px;font-size:13px;letter-spacing:1.4px;text-transform:uppercase;color:#1d4fc4;margin:0 0 10px;font-weight:800}
.wstr__kicker::before{content:"";width:26px;height:2px;background:#9dbbff;border-radius:2px}
.wstr__kicker.wstr__c{display:flex;justify-content:center}
.wstr__h2{font-size:clamp(26px,3vw,36px);font-weight:800;line-height:1.2;margin:0 0 16px;color:#0f1a33}.wstr__h2 em{font-style:italic;color:#1d4fc4}
.wstr__p{font-size:16px;line-height:1.65;color:#36405a;margin:0 0 14px}
.wstr__z{font-weight:800;font-size:17px;color:#0f1a33;margin:16px 0 0;padding-left:14px;border-left:3px solid #9dbbff}
.wstr__grid{display:grid;gap:22px;margin-top:26px}.wstr__g3{grid-template-columns:repeat(3,1fr)}
.wstr__k{background:#fff;border-radius:16px;padding:30px 26px;text-align:center;box-shadow:0 8px 24px rgba(20,50,120,.10);transition:transform .2s,box-shadow .2s}
.wstr__k:hover{transform:translateY(-3px);box-shadow:0 14px 30px rgba(20,50,120,.16)}
.wstr__ki{width:56px;height:56px;border-radius:50%;background:#dfe9ff;border:1.5px solid #9dbbff;color:#1d4fc4;display:inline-flex;align-items:center;justify-content:center;box-sizing:border-box;margin:0 0 12px}
.wstr__k h3{font-size:18px;font-weight:800;margin:0 0 8px;color:#0f1a33}
.wstr__k p{margin:0;font-size:15.5px;line-height:1.55;color:#36405a}
.wstr__pill{display:table;margin-left:auto!important;margin-right:auto!important;background:#1e6bff;color:#fff;font-size:12.5px;font-weight:800;letter-spacing:.6px;text-transform:uppercase;border-radius:999px;padding:5px 12px;margin:0 0 10px}
.wstr__kar{display:grid;grid-auto-flow:column;grid-auto-columns:calc((100% - 66px)/4);gap:22px;overflow-x:auto;scroll-snap-type:x mandatory;scrollbar-width:none;margin-top:26px;padding-bottom:6px}
.wstr__kar::-webkit-scrollbar{display:none}
.wstr__km{scroll-snap-align:start;border-radius:16px;overflow:hidden;box-shadow:0 8px 24px rgba(20,50,120,.12);aspect-ratio:9/16;background:#dfe6f3}
.wstr__km video{width:100%;height:100%;object-fit:cover;display:block}
.wstr__tst{display:flex;gap:16px;align-items:flex-start;background:#eef3ff;border-radius:16px;padding:22px 24px;margin-top:24px}
.wstr__tst img{width:52px;height:52px;border-radius:50%;object-fit:cover;flex:0 0 52px}
.wstr__tsth{display:flex;flex-wrap:wrap;align-items:center;gap:8px 12px;margin:0 0 6px}
.wstr__tsth strong{font-size:16px;color:#0f1a33}
.wstr__ver{display:inline-flex;align-items:center;gap:4px;font-size:12.5px;font-weight:700;color:#1d4fc4}
.wstr__ver svg{background:#1e6bff;color:#fff;border-radius:50%;padding:2px}
.wstr__zv{color:#f5b301;letter-spacing:1px}
.wstr__tst p{margin:0;font-size:15.5px;line-height:1.6;color:#36405a}
.wstr__dva{display:grid;grid-template-columns:1fr 1fr;gap:56px;align-items:center}.wstr__dva>div{min-width:0}
.wstr__dva--rev>.wstr__media{order:2}
.wstr__media--sq{aspect-ratio:1/1}
.wstr__media{border-radius:18px;overflow:hidden;box-shadow:0 14px 36px rgba(20,50,120,.14);aspect-ratio:4/5;background:#e3eaf7;position:relative}
.wstr__media img{width:100%;height:100%;object-fit:cover;display:block}
.wstr__stage img{position:absolute;inset:0;opacity:0;transition:opacity .55s ease}.wstr__stage img.is-on{opacity:1}
.wstr__stag{position:absolute;top:18px;left:18px;z-index:2;background:#1e6bff;color:#fff;font-size:15px;font-weight:800;letter-spacing:.8px;text-transform:uppercase;border-radius:10px;padding:7px 14px;box-shadow:0 6px 18px rgba(30,107,255,.4)}
.wstr__steps{display:flex;flex-direction:column;gap:12px;margin-top:18px}
.wstr__step{display:grid;grid-template-columns:92px 1fr;grid-template-rows:auto auto;column-gap:14px;text-align:left;background:#fff;border:0;border-radius:14px;padding:14px 18px;cursor:pointer;font:inherit;box-shadow:0 6px 18px rgba(20,50,120,.08);transition:box-shadow .2s,transform .2s}
.wstr__step b{grid-row:1/3;align-self:center;display:inline-flex;justify-content:center;background:#dfe9ff;color:#1d4fc4;border-radius:10px;padding:8px 0;font-size:13px;font-weight:800;text-transform:uppercase}
.wstr__step strong{font-size:16px;color:#0f1a33}
.wstr__step span{font-size:14.5px;line-height:1.5;color:#36405a}
.wstr__step.is-on{box-shadow:0 0 0 2px #1e6bff,0 10px 24px rgba(30,107,255,.18)}
.wstr__step.is-on b{background:#1e6bff;color:#fff}
.wstr__ba{display:grid;grid-template-columns:1fr 1fr;gap:10px}
.wstr__ba figure{position:relative;margin:0;border-radius:14px;overflow:hidden;box-shadow:0 8px 22px rgba(20,50,120,.12);aspect-ratio:3/4;background:#e3eaf7}
.wstr__ba img{width:100%;height:100%;object-fit:cover;display:block}
.wstr__tag{position:absolute;left:8px;bottom:8px;background:#fff;color:#0f1a33;font-size:12px;font-weight:800;text-transform:uppercase;letter-spacing:.5px;border-radius:8px;padding:5px 9px}
.wstr__tag--po{background:#1e6bff;color:#fff}
.wstr__tw{margin-top:26px;border-radius:18px;overflow:hidden;box-shadow:0 10px 30px rgba(20,50,120,.10)}
.wstr__tab{width:100%;border-collapse:collapse;background:#fff;font-size:16px}
.wstr__tab th,.wstr__tab td{padding:16px 20px;border-bottom:1px solid #e6ecf7;text-align:center}
.wstr__tab td:first-child,.wstr__tab th:first-child{text-align:left;font-weight:700;color:#0f1a33}
.wstr__tab thead th{background:#0f1a33;color:#fff;font-weight:800;font-size:15px}
.wstr__tab thead th.wstr__us{background:#1e6bff}
.wstr__tab thead th img{width:34px;height:34px;border-radius:50%;object-fit:cover;vertical-align:middle;margin-right:6px}
.wstr__tab td.wstr__us{background:#eef3ff}
.wstr__tab tbody tr:last-child td{border-bottom:0}
.wstr__da,.wstr__ne{display:inline-flex;align-items:center;justify-content:center;width:30px;height:30px;border-radius:50%}
.wstr__da{background:#1e6bff;color:#fff}.wstr__ne{background:#fde4e4;color:#d93636}
.wstr__nap{display:flex;align-items:center;justify-content:center;gap:8px;margin:20px 0 0;font-weight:800;font-size:16px;color:#1d4fc4}
@media (max-width:1024px){.wstr__kar{grid-auto-columns:calc((100% - 44px)/3)}}
@media (max-width:860px){
.wstr__s{padding:48px 0}
.wstr__dva{grid-template-columns:minmax(0,1fr);gap:26px}.wstr__dva--rev>.wstr__media{order:0}
.wstr__g3{grid-template-columns:1fr}
.wstr__kar{grid-auto-columns:62%}
.wstr__tab th,.wstr__tab td{padding:12px 10px;font-size:14px}
.wstr__tab thead th img{display:none}
}
@media (max-width:767px){.wstr__v{padding:0 16px}}
@media (max-width:560px){.wstr__h2{font-size:25px}.wstr__step{grid-template-columns:78px 1fr;padding:12px 14px}}
</style>
