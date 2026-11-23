<?php
/**
 * NORIKS WarmNest (orto-warming) - samogrijuca podloga za ljubimce - why sekcije po natancni strukturi originala
 * (senairy.com/products/self-warming-pet-mat).
 *
 * STRUKTURA ORIGINALA:
   1. "See Why Pet Parents Love It" - 3 videi kupcev v vrsti (UGC) - pri nas mreza 3 videov (mobil karusel), napisi v videih prevedeni v HR
   2. slika levo (termokamera, "Clinically Tested"), tekst desno "Up to 4.5°F Warmer" - pri nas isto (do 2,5 °C toplije)
   3. slika (5 slojev) + tekst "Warmth Made Safe for Pets" s seznamom 5 slojev - pri nas slika desno, tekst levo s 5 sloji z ikonami
   4. video (pes na kavcu) + tekst "Warm Up Their Favorite Spot" + zakljucna misel - pri nas video levo, tekst desno
   5. slika + tekst "Room to Curl Up & Stretch Out" s seznamom 4 velikosti (S-XL) - pri nas slika desno, tekst levo + 4 kartice velikosti
   6. slika + tekst "One Mat. Any Spot." - pri nas slika levo, tekst desno
   7. slika + tekst "Made for Real Pet Life" - pri nas slika desno, tekst levo
   8. "Frequently Asked" (7 vprasanj) - pri nas FAQ v zavihku Informacije o proizvodu (auto_reviews/FAQ_HR_warming.php)
   Zakljucek: NORIKS pogoji. Black Friday odstevalnik in tuja znamka izpusceni.
 * SLIKE: /img/warming/noriks-warming-toplina.webp, -slojevi.webp, -prostor.webp, -svako-mjesto.webp, -stvaran-zivot.webp (napisi lokalizirani s Higgsfieldom)
 * VIDEI: /img/warming/noriks-warming-video-1..3.mp4 + noriks-warming-video-sofa.mp4 (+ posterji .jpg) - napisi prevedeni v HR (ffmpeg)
 * BARVA ORIGINALA: #cfe6fa (svetlo nebesno modra - ozadje vseh slik in sekcij na originalu); svetel ton za --bg #eef6fd, akcent #2f6fb0
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
$wm_u  = get_template_directory_uri() . '/img/warming/';
$wm_ik = array(
	'mekano'   => '<path d="M3 15c3-3 6 3 9 0s6 3 9 0"/><path d="M3 10c3-3 6 3 9 0s6 3 9 0"/>',
	'pamuk'    => '<path d="M7 18a4 4 0 0 1-.6-8A5 5 0 0 1 16 8.5a4 4 0 0 1 1 9.5z"/>',
	'grafen'   => '<path d="M12 3l4 2.3v4.6L12 12 8 9.9V5.3z"/><path d="M8 9.9v4.6L12 17l4-2.5V9.9"/><path d="M12 17v4"/>',
	'izolacija'=> '<path d="M3 20h18"/><path d="M5 16h14"/><path d="M12 3v9M9 6l3-3 3 3"/>',
	'protuklizno' => '<rect x="3" y="7" width="18" height="10" rx="2.5"/><circle cx="7.5" cy="12" r=".8"/><circle cx="12" cy="12" r=".8"/><circle cx="16.5" cy="12" r=".8"/>',
	'toplina'  => '<path d="M14 14.8V5a2 2 0 0 0-4 0v9.8a4 4 0 1 0 4 0z"/><path d="M12 9v7"/>',
	'utikac'   => '<path d="M9 3v5M15 3v5"/><path d="M7 8h10v3a5 5 0 0 1-10 0z"/><path d="M12 16v5"/><path d="M4 4l16 16"/>',
	'kauc'     => '<path d="M4 11V8a3 3 0 0 1 3-3h10a3 3 0 0 1 3 3v3"/><path d="M2 13a2 2 0 0 1 4 0v2h12v-2a2 2 0 0 1 4 0v5H2z"/><path d="M5 18v2M19 18v2"/>',
	'krevet'   => '<path d="M3 18V7"/><path d="M3 14h18v4"/><path d="M21 14v-2a3 3 0 0 0-3-3h-7v5"/><circle cx="7" cy="11" r="1.8"/>',
	'kavez'    => '<rect x="3" y="5" width="18" height="15" rx="2"/><path d="M8 5v15M12 5v15M16 5v15"/>',
	'auto'     => '<path d="M5 16V11l2-5h10l2 5v5"/><path d="M3 16h18v3H3z"/><circle cx="7.5" cy="13" r="1"/><circle cx="16.5" cy="13" r="1"/>',
	'pero'     => '<path d="M20 4c-8 0-14 5-15 15"/><path d="M20 4c0 8-5 12-11 12"/><path d="M5 19l4-4"/>',
	'sklopivo' => '<path d="M4 6l5-2 6 2 5-2v14l-5 2-6-2-5 2z"/><path d="M9 4v14M15 6v14"/>',
	'perilica' => '<rect x="4" y="3" width="16" height="18" rx="2.5"/><circle cx="12" cy="13" r="4.5"/><path d="M7 6.5h2M14 6.5h3"/>',
	'dlaka'    => '<circle cx="7" cy="8" r="1.8"/><circle cx="12" cy="6" r="1.8"/><circle cx="17" cy="8" r="1.8"/><path d="M12 11c-3.5 0-6 3.5-6 6a2.5 2.5 0 0 0 3 2.3c1-.2 2-.6 3-.6s2 .4 3 .6a2.5 2.5 0 0 0 3-2.3c0-2.5-2.5-6-6-6z"/>',
	'cisto'    => '<path d="M12 3l1.6 4.4L18 9l-4.4 1.6L12 15l-1.6-4.4L6 9l4.4-1.6z"/><path d="M18 15l.8 2.2L21 18l-2.2.8L18 21l-.8-2.2L15 18l2.2-.8z"/>',
	'vaga'     => '<path d="M5 20h14l-2-12H7z"/><circle cx="12" cy="5" r="2"/><path d="M10 13h4"/>',
);
$wm_svg = function ( $d, $s = 24 ) {
	return '<svg viewBox="0 0 24 24" width="' . (int) $s . '" height="' . (int) $s . '" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">' . $d . '</svg>';
};
?>
<div class="wswm">

<section class="wswm__s wswm__s--bg"><div class="wswm__v">
	<div class="wswm__kicker wswm__c">Iskustva vlasnika ljubimaca</div>
	<h2 class="wswm__h2 wswm__c">Pogledajte zašto je <em>ljubimci obožavaju</em></h2>
	<p class="wswm__p wswm__c">Stvarni ljubimci, stvarni domovi – podloga na kauču, na podu i u krevetu. Čim legnu, ne žele ustati.</p>
	<div class="wswm__ugc">
		<?php
		foreach ( array(
			array( 'noriks-warming-video-1', 'Pas leži na samogrijućoj podlozi na kauču' ),
			array( 'noriks-warming-video-2', 'Mačka spava na bijeloj samogrijućoj podlozi' ),
			array( 'noriks-warming-video-3', 'Mačka se isteže na samogrijućoj podlozi na krevetu' ),
		) as $v ) {
			echo '<figure class="wswm__uv"><video autoplay muted loop playsinline webkit-playsinline preload="metadata" poster="' . esc_url( $wm_u . $v[0] . '.jpg' ) . '" aria-label="' . esc_attr( $v[1] ) . '"><source src="' . esc_url( $wm_u . $v[0] . '.mp4' ) . '" type="video/mp4"></video></figure>';
		}
		?>
	</div>
	<p class="wswm__z wswm__zc">Ocjena 4,8 / 5 – više od 120.000 kupaca vjeruje NORIKS-u.</p>
</div></section>

<section class="wswm__s"><div class="wswm__v wswm__dva">
	<div class="wswm__media"><img src="<?php echo esc_url( $wm_u . 'noriks-warming-toplina.webp' ); ?>" alt="Termokamera: mačka bez podloge i na NORIKS samogrijućoj podlozi" decoding="async"></div>
	<div>
		<div class="wswm__kicker">Toplina bez struje</div>
		<h2 class="wswm__h2">Do <em>2,5 °C toplije</em> – samo od topline vašeg ljubimca</h2>
		<p class="wswm__p">NORIKS WarmNest grije se tjelesnom toplinom vašeg ljubimca – <strong>bez utičnice, bez žica i bez struje</strong>. Nema kabela koji bi pas mogao izgristi, nema grijača koji bi se pregrijao i nema računa za struju.</p>
		<p class="wswm__p">Slojevi koji reflektiraju toplinu hvataju toplinu koju ljubimac sam stvara i vraćaju je prema njemu. Tako njegovo omiljeno mjesto ostaje ugodno toplo, čak i kad je u stanu hladnije.</p>
		<p class="wswm__p">Termalna usporedba pokazala je do 2,5 °C više topline nego kad ljubimac leži bez samogrijuće podloge.</p>
		<ul class="wswm__chk">
			<li><span class="wswm__fi"><?php echo $wm_svg( $wm_ik['utikac'], 18 ); ?></span> Bez struje i bez žica – potpuno sigurno</li>
			<li><span class="wswm__fi"><?php echo $wm_svg( $wm_ik['toplina'], 18 ); ?></span> Do +2,5 °C toplije na istom mjestu</li>
			<li><span class="wswm__fi"><?php echo $wm_svg( $wm_ik['perilica'], 18 ); ?></span> Može se prati u perilici</li>
		</ul>
		<p class="wswm__z">Toplina dolazi od ljubimca – podloga je samo zadrži.</p>
	</div>
</div></section>

<section class="wswm__s wswm__s--bg"><div class="wswm__v wswm__dva wswm__dva--rev">
	<div class="wswm__media wswm__media--sq"><img src="<?php echo esc_url( $wm_u . 'noriks-warming-slojevi.webp' ); ?>" alt="Pet slojeva NORIKS samogrijuće podloge za ljubimce" decoding="async"></div>
	<div>
		<div class="wswm__kicker">5 slojeva</div>
		<h2 class="wswm__h2">Toplina koja je <em>sigurna za ljubimce</em></h2>
		<p class="wswm__p">Pet slojeva radi zajedno kako bi vaš ljubimac dobio toplije i udobnije mjesto za odmor. Svaki sloj ima svoj zadatak – od mekane površine do baze koja se ne kliže.</p>
		<ul class="wswm__ly">
			<?php
			$wm_n = 0;
			foreach ( array(
				array( 'mekano', 'Mekani gornji sloj', 'ljubimcu daje mekše i udobnije mjesto za odmor.' ),
				array( 'pamuk', 'Pamučni sloj koji zadržava toplinu', 'pomaže zadržati toplinu.' ),
				array( 'grafen', 'Grafenski reflektirajući sloj', 'vraća tjelesnu toplinu natrag prema ljubimcu.' ),
				array( 'izolacija', 'Izolacijski sloj', 'pomaže blokirati hladnoću koja dolazi s poda.' ),
				array( 'protuklizno', 'Protuklizna baza', 'drži podlogu stabilnom i na mjestu.' ),
			) as $l ) {
				$wm_n++;
				echo '<li><span class="wswm__lyn">' . (int) $wm_n . '</span><span class="wswm__fi">' . $wm_svg( $wm_ik[ $l[0] ], 18 ) . '</span><span><strong>' . esc_html( $l[1] ) . '</strong> – ' . esc_html( $l[2] ) . '</span></li>';
			}
			?>
		</ul>
		<p class="wswm__z">Pet tankih slojeva – jedna topla, mekana podloga.</p>
	</div>
</div></section>

<section class="wswm__s"><div class="wswm__v wswm__dva">
	<div class="wswm__media wswm__media--sq"><video autoplay muted loop playsinline webkit-playsinline preload="metadata" poster="<?php echo esc_url( $wm_u . 'noriks-warming-video-sofa.jpg' ); ?>" aria-label="Ljubimci odmaraju na NORIKS samogrijućoj podlozi"><source src="<?php echo esc_url( $wm_u . 'noriks-warming-video-sofa.mp4' ); ?>" type="video/mp4"></video></div>
	<div>
		<div class="wswm__kicker">Omiljeno mjesto</div>
		<h2 class="wswm__h2">Ugrijte njihovo <em>omiljeno mjesto</em></h2>
		<p class="wswm__p">Vašem ljubimcu ne treba novo mjesto za spavanje – treba mu samo <strong>toplija verzija mjesta koje već voli</strong>.</p>
		<p class="wswm__p">Položite NORIKS WarmNest na kauč, krevet, u kavez ili na bilo koje mjesto gdje ljubimac voli drijemati. Njegova jezgra koja reflektira toplinu hvata i vraća ljubimčevu tjelesnu toplinu prema njemu i stvara ugodnu toplinu bez utičnice i bez struje.</p>
		<div class="wswm__spots">
			<?php
			foreach ( array( array( 'kauc', 'Kauč' ), array( 'krevet', 'Krevet' ), array( 'kavez', 'Kavez' ), array( 'auto', 'Auto' ) ) as $s ) {
				echo '<span class="wswm__spot"><span class="wswm__fi">' . $wm_svg( $wm_ik[ $s[0] ], 18 ) . '</span>' . esc_html( $s[1] ) . '</span>';
			}
			?>
		</div>
		<p class="wswm__z">Isto omiljeno mjesto. Više topline. Više udobnosti.</p>
	</div>
</div></section>

<section class="wswm__s wswm__s--bg"><div class="wswm__v wswm__dva wswm__dva--rev">
	<div class="wswm__media"><img src="<?php echo esc_url( $wm_u . 'noriks-warming-prostor.webp' ); ?>" alt="Mačke se protežu na ravnoj NORIKS samogrijućoj podlozi" decoding="async"></div>
	<div>
		<div class="wswm__kicker">Prostor za odmor</div>
		<h2 class="wswm__h2">Prostora za klupko – <em>i za istezanje</em></h2>
		<p class="wswm__p">Ravan, otvoren dizajn omogućuje ljubimcima da se sklupčaju, prevrnu ili udobno ispruže – bez glomaznih podignutih rubova.</p>
		<p class="wswm__p">Dostupna je u <strong>4 veličine (S–XL)</strong> za mačke i pse do 41 kg.</p>
		<div class="wswm__sz">
			<?php
			foreach ( array(
				array( 'S', '61 × 46 cm', 'do 11 kg' ),
				array( 'M', '76 × 51 cm', '11 do 18 kg' ),
				array( 'L', '89 × 58 cm', '18 do 29 kg' ),
				array( 'XL', '104 × 74 cm', '29 do 41 kg' ),
			) as $z ) {
				echo '<div class="wswm__szk"><span class="wswm__szl">' . esc_html( $z[0] ) . '</span><div><strong>' . esc_html( $z[1] ) . '</strong><span>' . $wm_svg( $wm_ik['vaga'], 14 ) . ' ' . esc_html( $z[2] ) . '</span></div></div>';
			}
			?>
		</div>
		<p class="wswm__z">Između dvije veličine? Uzmite veću za dodatnu udobnost.</p>
	</div>
</div></section>

<section class="wswm__s"><div class="wswm__v wswm__dva">
	<div class="wswm__media"><img src="<?php echo esc_url( $wm_u . 'noriks-warming-svako-mjesto.webp' ); ?>" alt="NORIKS samogrijuća podloga na kauču, krevetu, u kavezu, autu i na podu" decoding="async"></div>
	<div>
		<div class="wswm__kicker">Lagana i sklopiva</div>
		<h2 class="wswm__h2">Jedna podloga. <em>Bilo koje mjesto.</em></h2>
		<p class="wswm__p">Klasični kreveti za ljubimce često su glomazni i stoje uvijek na istom mjestu. NORIKS WarmNest je ravan, lagan i lako ga premjestite gdje god vaš ljubimac voli odmarati.</p>
		<p class="wswm__p">Koristite je na kauču, krevetu, u kavezu, na podu ili na sjedalu automobila – a kad je treba premjestiti ili spremiti, jednostavno je složite.</p>
		<ul class="wswm__chk">
			<li><span class="wswm__fi"><?php echo $wm_svg( $wm_ik['pero'], 18 ); ?></span> Lagana – nosite je jednom rukom</li>
			<li><span class="wswm__fi"><?php echo $wm_svg( $wm_ik['sklopivo'], 18 ); ?></span> Sklopiva – stane u ormar ili prtljažnik</li>
			<li><span class="wswm__fi"><?php echo $wm_svg( $wm_ik['auto'], 18 ); ?></span> Za kuću, putovanja i auto</li>
		</ul>
		<p class="wswm__z">Toplina ide tamo gdje ide i vaš ljubimac.</p>
	</div>
</div></section>

<section class="wswm__s wswm__s--bg"><div class="wswm__v wswm__dva wswm__dva--rev">
	<div class="wswm__media"><img src="<?php echo esc_url( $wm_u . 'noriks-warming-stvaran-zivot.webp' ); ?>" alt="Pas i mačka na sivoj NORIKS podlozi na kauču" decoding="async"></div>
	<div>
		<div class="wswm__kicker">Za svaki dan</div>
		<h2 class="wswm__h2">Za <em>stvaran život</em> s ljubimcem</h2>
		<p class="wswm__p">Dlake, prljave šape i svakodnevni nered jednostavno se događaju.</p>
		<p class="wswm__p">NORIKS WarmNest lako podignete, istresete i <strong>operete u perilici</strong>, a protuklizna baza pomaže da podloga ostane stabilna na glatkim površinama.</p>
		<p class="wswm__p">Na kauču i krevetu služi kao periv sloj koji drži dlake i nered na jednom mjestu – lakše za čišćenje, a namještaj ostaje čist.</p>
		<div class="wswm__ic4">
			<?php
			foreach ( array(
				array( 'perilica', 'Perivo u perilici' ),
				array( 'cisto', 'Lako čišćenje' ),
				array( 'protuklizno', 'Protuklizna baza' ),
				array( 'dlaka', 'Zadržava dlake' ),
			) as $c ) {
				echo '<div class="wswm__ic"><span class="wswm__ki">' . $wm_svg( $wm_ik[ $c[0] ], 22 ) . '</span><strong>' . esc_html( $c[1] ) . '</strong></div>';
			}
			?>
		</div>
		<p class="wswm__z">Pranje na hladno ispod 30 °C · ne izbjeljivati · ne glačati.</p>
	</div>
</div></section>

<section class="wswm__s npg-s"><?php $npg = array( 'izdelek' => 'NORIKS WarmNest', 'barva' => '#2f6fb0' ); include __DIR__ . '/noriks-pogoji.php'; ?></section>

</div>
<style>
.wswm{color:#10233d;font-family:inherit}
.wswm__s{padding:72px 0;background:#fff}.wswm__s.wswm__s--bg{background:#eef6fd}
.wswm__v{width:100%;max-width:1240px;margin:0 auto;padding:0 24px;box-sizing:border-box}
.wswm__c{text-align:center}
.wswm__kicker{display:inline-flex;align-items:center;gap:10px;font-size:13px;letter-spacing:1.4px;text-transform:uppercase;color:#2f6fb0;margin:0 0 10px;font-weight:800}
.wswm__kicker::before{content:"";width:26px;height:2px;background:#9fc8ef;border-radius:2px}
.wswm__kicker.wswm__c{display:flex;justify-content:center}
.wswm__h2{font-size:clamp(26px,3vw,36px);font-weight:800;line-height:1.2;margin:0 0 16px;color:#0c2149}.wswm__h2 em{font-style:italic;color:#2f6fb0}
.wswm__p{font-size:16px;line-height:1.65;color:#3b4d66;margin:0 0 14px}
.wswm__z{font-weight:800;font-size:17px;color:#0c2149;margin:16px 0 0;padding-left:14px;border-left:3px solid #9fc8ef}
.wswm__z.wswm__zc{text-align:center;border-left:0;padding-left:0;margin-top:26px}
.wswm__dva{display:grid;grid-template-columns:1fr 1fr;gap:56px;align-items:center}.wswm__dva>div{min-width:0}
.wswm__dva--rev>.wswm__media{order:2}
.wswm__media{border-radius:18px;overflow:hidden;box-shadow:0 14px 36px rgba(30,80,140,.14);aspect-ratio:4/5;background:#cfe6fa;position:relative}
.wswm__media img,.wswm__media video{width:100%;height:100%;object-fit:cover;display:block}
.wswm__media.wswm__media--sq{aspect-ratio:1/1}
.wswm__fi{flex:0 0 36px;width:36px;height:36px;border-radius:50%;background:#cfe6fa;color:#2f6fb0;display:inline-flex;align-items:center;justify-content:center}
.wswm__ki{width:52px;height:52px;border-radius:50%;background:#cfe6fa;border:1.5px solid #9fc8ef;color:#2f6fb0;display:inline-flex;align-items:center;justify-content:center;box-sizing:border-box;flex:0 0 52px}
.wswm__chk{list-style:none;margin:16px 0 0;padding:0;display:flex;flex-direction:column;gap:12px}
.wswm__chk li{display:flex;gap:12px;align-items:center;font-size:15.5px;line-height:1.45;color:#10233d;font-weight:600}
.wswm__ugc{display:grid;grid-template-columns:repeat(3,1fr);gap:22px;margin-top:26px}
.wswm__uv{margin:0;border-radius:18px;overflow:hidden;aspect-ratio:9/16;box-shadow:0 12px 30px rgba(30,80,140,.14);background:#cfe6fa}
.wswm__uv video{width:100%;height:100%;object-fit:cover;display:block}
.wswm__ly{list-style:none;margin:16px 0 0;padding:0;display:flex;flex-direction:column;gap:12px}
.wswm__ly li{display:flex;gap:12px;align-items:center;background:#fff;border-radius:14px;padding:14px 16px;box-shadow:0 6px 18px rgba(30,80,140,.08);font-size:15px;line-height:1.5;color:#3b4d66}
.wswm__ly strong{color:#0c2149}
.wswm__lyn{flex:0 0 26px;width:26px;height:26px;border-radius:50%;background:#2f6fb0;color:#fff;font-weight:800;font-size:13px;display:inline-flex;align-items:center;justify-content:center}
.wswm__spots{display:flex;flex-wrap:wrap;gap:10px;margin:6px 0 0}
.wswm__spot{display:inline-flex;align-items:center;gap:8px;background:#eef6fd;border-radius:999px;padding:6px 14px 6px 6px;font-weight:700;font-size:15px;color:#0c2149}
.wswm__spot .wswm__fi{flex-basis:30px;width:30px;height:30px;background:#fff}
.wswm__sz{display:grid;grid-template-columns:1fr 1fr;gap:12px;margin-top:6px}
.wswm__szk{display:flex;gap:12px;align-items:center;background:#fff;border-radius:14px;padding:14px 16px;box-shadow:0 6px 18px rgba(30,80,140,.08);transition:transform .2s,box-shadow .2s}
.wswm__szk:hover{transform:translateY(-2px);box-shadow:0 12px 26px rgba(30,80,140,.14)}
.wswm__szl{flex:0 0 44px;width:44px;height:44px;border-radius:50%;background:#2f6fb0;color:#fff;font-weight:800;font-size:16px;display:inline-flex;align-items:center;justify-content:center}
.wswm__szk strong{display:block;font-size:16px;color:#0c2149}
.wswm__szk span:not(.wswm__szl){display:inline-flex;align-items:center;gap:4px;font-size:14px;color:#3b4d66}
.wswm__ic4{display:grid;grid-template-columns:repeat(4,1fr);gap:12px;margin-top:8px}
.wswm__ic{background:#fff;border-radius:14px;padding:16px 10px;text-align:center;box-shadow:0 6px 18px rgba(30,80,140,.08);display:flex;flex-direction:column;align-items:center;gap:10px}
.wswm__ic strong{font-size:14px;line-height:1.3;color:#0c2149}
@media (max-width:860px){
.wswm__s{padding:48px 0}
.wswm__dva{grid-template-columns:minmax(0,1fr);gap:26px}.wswm__dva--rev>.wswm__media{order:0}
.wswm__ugc{grid-auto-flow:column;grid-template-columns:none;grid-auto-columns:72%;overflow-x:auto;scroll-snap-type:x mandatory;scrollbar-width:none;padding-bottom:6px;gap:14px}
.wswm__ugc::-webkit-scrollbar{display:none}.wswm__uv{scroll-snap-align:start}
.wswm__ic4{grid-template-columns:repeat(2,1fr)}
}
@media (max-width:767px){.wswm__v{padding:0 16px}}
@media (max-width:420px){.wswm__sz{grid-template-columns:1fr}.wswm__h2{font-size:25px}}
</style>
