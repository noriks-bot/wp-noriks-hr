<?php
/**
 * NORIKS CozyMat (orto-cozymat) - samogrijuca podloga za ljubimce - why sekcije po natancni strukturi originala
 * (vermeira.com/products/self-warming-pet-mat).
 *
 * STRUKTURA ORIGINALA:
   1. 3 mnenja kupcev s fotografijo (Kayla H., Samantha L., Lucia D.) v vrsti - pri nas 3 kartice mnenj s fotografijo (mobil karusel)
   2. trak 3 prednosti (Money-Back Guarantee / Vet-Approved / Loved by 30,000+ Pets) - pri nas 3 kartice z ikono: 30 dana za povrat, placanje pouzecem, 120.000 kupaca
   3. harmonike "#1 Vet-Approved Solution" + "How Does it Work?" (3 koraki) + "What Can it Help With?" (5) + "Size Chart" - pri nas slika levo (4 koraki), tekst desno s 3 koraki, 5 alinejami in 4 velikostmi
   4. trak logotipov (ticker) - tekoci trak, pri nas izpusceno
   5. video + tekst "Keep Your Pets Safe, Warm, and Cozy" - pri nas video desno, tekst levo
   6. video + tekst "Relieve Arthritis & Reduce Joint Pain" + kljukica - pri nas video levo, tekst desno
   7. animacija (gif) + tekst "Protect Your Pet: The Warmth That Calms" - pri nas video (gif -> mp4) desno, tekst levo
   8. "See Why Both Parents & Pets Love It!" - karusel 4 videov kupcev - pri nas mreza 3 videov z HR napisi (4. video ima tujo znamko na nasivki - izpuscen)
   9. video + tekst "Cozy Comfort, All Season Long" - pri nas video levo, tekst desno
  10. "Free E-Guide With Every Order" - darilo, ki ga NORIKS ne nudi - izpusceno
  11. "Loved By 30,000+ Happy Pawrents" - 4 mnenja s fotografijo ljubimca - pri nas 4 kartice v mrezi (120.000 kupcev)
  12. trak "natural warmth / black friday" (ticker) - izpusceno
  13. "What You Can Expect" - 4 statistike v % (anketa kupcev) - pri nas 4 kartice s stevilkami
  14. "Beware of Cheap Replicas" - primerjalna tabela znamka vs. drugi - pri nas tabela NORIKS vs. obicne podloge
  15. FAQ (7 vprasanj) - pri nas FAQ v zavihku Informacije o proizvodu (auto_reviews/FAQ_HR_cozymat.php)
   Zakljucek: NORIKS pogoji. Tuja znamka, 60-dnevno jamstvo, e-vodic in Black Friday odstevalnik izpusceni.
 * SLIKE: /img/cozymat/noriks-cozymat-galerija-06.webp, -kupac-1..3.webp, -macka-1..4.webp (galerija lokalizirana s Higgsfieldom)
 * VIDEI: /img/cozymat/noriks-cozymat-toplina, -zglobovi, -mirno, -sezona, -ugc-1..3 (.mp4 + poster .jpg); napisi v UGC prevedeni v HR (ffmpeg)
 * BARVA ORIGINALA: #8a5a3b (toplo rjava - ozadja slik, gumbi in podloga na originalu); svetel ton za --bg #f6efe8, akcent #8a5a3b
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
$cz_u  = get_template_directory_uri() . '/img/cozymat/';
$cz_ik = array(
	'povrat'  => '<path d="M4 12a8 8 0 1 0 2.4-5.7"/><path d="M4 4v4.5h4.5"/><path d="M12 8v4l2.6 2"/>',
	'novac'   => '<rect x="2.5" y="6" width="19" height="12" rx="2"/><circle cx="12" cy="12" r="2.6"/><path d="M6 9.5v5M18 9.5v5"/>',
	'ljudi'   => '<circle cx="9" cy="8" r="3"/><path d="M3.5 19a5.5 5.5 0 0 1 11 0"/><circle cx="17" cy="9" r="2.4"/><path d="M15.5 14.2A4.5 4.5 0 0 1 21 18.5"/>',
	'sapa'    => '<circle cx="7" cy="8" r="1.8"/><circle cx="12" cy="6" r="1.8"/><circle cx="17" cy="8" r="1.8"/><path d="M12 11c-3.5 0-6 3.5-6 6a2.5 2.5 0 0 0 3 2.3c1-.2 2-.6 3-.6s2 .4 3 .6a2.5 2.5 0 0 0 3-2.3c0-2.5-2.5-6-6-6z"/>',
	'toplina' => '<path d="M14 14.8V5a2 2 0 0 0-4 0v9.8a4 4 0 1 0 4 0z"/><path d="M12 9v7"/>',
	'srce'    => '<path d="M12 20s-7-4.4-7-10a4 4 0 0 1 7-2.6A4 4 0 0 1 19 10c0 5.6-7 10-7 10z"/>',
	'zglob'   => '<path d="M6 4c0 4 3 5 6 5s6 1 6 5"/><circle cx="12" cy="9" r="2"/><path d="M6 20c0-3 2-4 4-4M18 20c0-3-2-4-4-4"/>',
	'snijeg'  => '<path d="M12 3v18M4.2 7.5l15.6 9M4.2 16.5l15.6-9"/><path d="M9.5 4.5L12 6l2.5-1.5M9.5 19.5L12 18l2.5 1.5"/>',
	'mjesec'  => '<path d="M20 14.5A8 8 0 1 1 9.5 4a6.5 6.5 0 0 0 10.5 10.5z"/>',
	'perilica'=> '<rect x="4" y="3" width="16" height="18" rx="2.5"/><circle cx="12" cy="13" r="4.5"/><path d="M7 6.5h2M14 6.5h3"/>',
	'utikac'  => '<path d="M9 3v5M15 3v5"/><path d="M7 8h10v3a5 5 0 0 1-10 0z"/><path d="M12 16v5"/><path d="M4 4l16 16"/>',
	'da'      => '<path d="M5 12.5l4.5 4.5L19 7.5"/>',
	'ne'      => '<path d="M6 6l12 12M18 6L6 18"/>',
);
$cz_svg = function ( $d, $s = 24 ) {
	return '<svg viewBox="0 0 24 24" width="' . (int) $s . '" height="' . (int) $s . '" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">' . $d . '</svg>';
};
$cz_vid = function ( $f, $alt ) use ( $cz_u ) {
	return '<video autoplay muted loop playsinline webkit-playsinline preload="metadata" poster="' . esc_url( $cz_u . $f . '.jpg' ) . '" aria-label="' . esc_attr( $alt ) . '"><source src="' . esc_url( $cz_u . $f . '.mp4' ) . '" type="video/mp4"></video>';
};
?>
<div class="wscz">

<section class="wscz__s wscz__s--bg"><div class="wscz__v">
	<div class="wscz__kicker wscz__c">Iskustva vlasnika</div>
	<h2 class="wscz__h2 wscz__c">Napokon <em>mirni</em> kad ljubimac ostane sam</h2>
	<div class="wscz__rv">
		<?php
		foreach ( array(
			array( 'kupac-1', 'Kristina H.', 'Grozno sam se osjećala kad sam mačku ostavljala u hladnom stanu, ali ova podloga je sve promijenila. Sada je cijeli dan topla i mirna, a ja napokon imam mir.' ),
			array( 'kupac-2', 'Sara L.', 'Moja kujica je stalno ležala na tvrdim radijatorskim rešetkama, pa sam joj kupila ovu podlogu – i OPSJEDNUTA je njome! Savršeno rješenje za zimu.' ),
			array( 'kupac-3', 'Lucija D.', 'Pas mi je drhtao na hladnom podu koliko god mu deka dala. Otkad ima ovu podlogu, sklupča se na njoj čim izađem i udobno mu je dok se ne vratim.' ),
		) as $r ) {
			echo '<div class="wscz__r"><p>„' . esc_html( $r[2] ) . '"</p><div class="wscz__rh"><img src="' . esc_url( $cz_u . 'noriks-cozymat-' . $r[0] . '.webp' ) . '" alt="' . esc_attr( 'Kupac ' . $r[1] ) . '" decoding="async"><div><strong>' . esc_html( $r[1] ) . '</strong><span class="wscz__ver">' . $cz_svg( $cz_ik['da'], 12 ) . ' Provjereni kupac</span></div><span class="wscz__zv">★★★★★</span></div></div>';
		}
		?>
	</div>
</div></section>

<section class="wscz__s"><div class="wscz__v">
	<div class="wscz__grid wscz__g3">
		<?php
		foreach ( array(
			array( 'povrat', '30 dana za povrat', 'Isprobajte podlogu kod kuće. Ako ljubimac nije oduševljen, vratite je.' ),
			array( 'novac', 'Plaćanje pouzećem', 'Platite tek kad paket stigne – bez kartice i bez unaprijed plaćanja.' ),
			array( 'ljudi', '120.000+ kupaca', 'Ocjena 4,8 / 5 – kupci kojima je stalo do udobnosti cijele obitelji.' ),
		) as $k ) {
			echo '<div class="wscz__k"><span class="wscz__ki">' . $cz_svg( $cz_ik[ $k[0] ], 26 ) . '</span><h3>' . esc_html( $k[1] ) . '</h3><p>' . esc_html( $k[2] ) . '</p></div>';
		}
		?>
	</div>
</div></section>

<section class="wscz__s wscz__s--bg"><div class="wscz__v wscz__dva">
	<div class="wscz__media wscz__media--sq"><img src="<?php echo esc_url( $cz_u . 'noriks-cozymat-galerija-06.webp' ); ?>" alt="Četiri koraka: položite podlogu, ljubimac legne, toplina se vraća" decoding="async"></div>
	<div>
		<div class="wscz__kicker">Rješenje broj 1</div>
		<h2 class="wscz__h2">Toplina, mir i sigurnost – <em>bez struje</em></h2>
		<p class="wscz__p">Razvijena s mišlju na dobrobit ljubimaca, NORIKS CozyMat koristi toplinsku tehnologiju kojoj vjeruju veterinari kako bi ljubimci bili topli, mirni i sigurni – bez struje i bez pregrijavanja.</p>
		<p class="wscz__p">Nježna refleksija topline održava ugodnu temperaturu za odmor, ublažava ukočenost i nemir te potiče dublji, mirniji san.</p>
		<ol class="wscz__steps">
			<li><span>1</span><div><strong>Položite podlogu na pod, krevet ili u kavez</strong> Izolacijska jezgra hvata tjelesnu toplinu ljubimca i odmah se počinje grijati.</div></li>
			<li><span>2</span><div><strong>Toplina se vraća ljubimcu</strong> Reflektirajuća unutarnja podstava zadržava toplinu umjesto da je pusti u hladan pod.</div></li>
			<li><span>3</span><div><strong>Ugodno za nekoliko minuta</strong> Mekani vanjski sloj drži toplinu, pa ljubimac ostaje opušten i spava dulje.</div></li>
		</ol>
		<div class="wscz__help">
			<?php
			foreach ( array( 'Toplina u hladnim jesenskim i zimskim danima', 'Manje nemira kad ostane sam kod kuće', 'Ublažava ukočene zglobove starijih ljubimaca', 'Nema drhtanja na hladnim podovima i pločicama', 'Dublji i dulji san' ) as $h ) {
				echo '<span><i>' . $cz_svg( $cz_ik['da'], 14 ) . '</i>' . esc_html( $h ) . '</span>';
			}
			?>
		</div>
		<p class="wscz__z">Veličine: S 61 × 46 cm (do 11 kg) · M 76 × 51 cm (do 18 kg) · L 89 × 58 cm (do 29 kg) · XL 104 × 74 cm (do 41 kg)</p>
	</div>
</div></section>

<section class="wscz__s"><div class="wscz__v wscz__dva wscz__dva--rev">
	<div class="wscz__media wscz__media--sq"><?php echo $cz_vid( 'noriks-cozymat-toplina', 'Pas spava na NORIKS samogrijućoj podlozi' ); ?></div>
	<div>
		<div class="wscz__kicker">5 slojeva topline</div>
		<h2 class="wscz__h2">Sigurni, topli i ušuškani <em>kroz hladne zimske dane</em></h2>
		<p class="wscz__p">Izrađena od pet slojeva mekanog flisa koji reflektira toplinu, samogrijuća podloga hvata tjelesnu toplinu vašeg ljubimca i vraća mu je natrag – tako nastaje val ugodne topline koji ostaje, <strong>bez ikakve struje</strong>.</p>
		<p class="wscz__p">Idealna je za opušten, topao i miran san tijekom dugih zimskih drijemanja – na kauču, u krevetu, u kavezu ili na podu.</p>
		<ul class="wscz__chk">
			<li><span class="wscz__fi"><?php echo $cz_svg( $cz_ik['utikac'], 18 ); ?></span> Bez kabela i bez utičnice</li>
			<li><span class="wscz__fi"><?php echo $cz_svg( $cz_ik['toplina'], 18 ); ?></span> Toplina koja ostaje dok ljubimac leži</li>
		</ul>
		<p class="wscz__z">Samo toplina vašeg ljubimca – vraćena njemu.</p>
	</div>
</div></section>

<section class="wscz__s wscz__s--bg"><div class="wscz__v wscz__dva">
	<div class="wscz__media wscz__media--sq"><?php echo $cz_vid( 'noriks-cozymat-zglobovi', 'Mačke odmaraju na mekanoj podlozi' ); ?></div>
	<div>
		<div class="wscz__kicker">Zglobovi i mišići</div>
		<h2 class="wscz__h2">Manje ukočenosti, <em>više udobnosti</em> za zglobove</h2>
		<p class="wscz__p">Spavanje na hladnom, tvrdom podu povezuje se s nelagodom u zglobovima, a kod nekih ljubimaca i s ozbiljnijim tegobama poput artritisa.</p>
		<p class="wscz__p">NORIKS CozyMat ne samo da grije vaše četveronožne prijatelje – ispunjena je ergonomskim, iznimno mekanim punjenjem koje <strong>ublažava pritisak na zglobove</strong> i štiti ih od hladne podloge.</p>
		<ul class="wscz__chk">
			<li><span class="wscz__fi"><?php echo $cz_svg( $cz_ik['zglob'], 18 ); ?></span> Položite podlogu na pod, krevet ili u kavez</li>
			<li><span class="wscz__fi"><?php echo $cz_svg( $cz_ik['srce'], 18 ); ?></span> Mekano punjenje rasterećuje zglobove</li>
		</ul>
		<p class="wscz__z">Posebno je vole stariji psi i mačke.</p>
	</div>
</div></section>

<section class="wscz__s"><div class="wscz__v wscz__dva wscz__dva--rev">
	<div class="wscz__media wscz__media--sq"><?php echo $cz_vid( 'noriks-cozymat-mirno', 'Dvije mačke spavaju na sivoj podlozi na kauču' ); ?></div>
	<div>
		<div class="wscz__kicker">Toplina koja smiruje</div>
		<h2 class="wscz__h2">Njihov krevet – <em>vaš mirniji san</em></h2>
		<p class="wscz__p">Volimo ljubimce imati blizu, ali ponekad nam treba malo više mjesta u vlastitom krevetu (i malo manje dlaka).</p>
		<p class="wscz__p">Poklonite svom krznenom ljubimcu njegov vlastiti topli kutak – tako ćete oboje mirno spavati i probuditi se odmorni.</p>
		<p class="wscz__p">Toplina i mekoća pružaju osjećaj sigurnosti, pa se ljubimac brže smiri i radije ostaje na svom mjestu.</p>
		<p class="wscz__z">Topao kutak samo za njih.</p>
	</div>
</div></section>

<section class="wscz__s wscz__s--bg"><div class="wscz__v">
	<div class="wscz__kicker wscz__c">Videi kupaca</div>
	<h2 class="wscz__h2 wscz__c">Pogledajte zašto je vole <em>i vlasnici i ljubimci</em></h2>
	<div class="wscz__ugc">
		<?php
		foreach ( array( array( 'noriks-cozymat-ugc-1', 'Mačka na smeđoj podlozi na krevetu' ), array( 'noriks-cozymat-ugc-2', 'Mačka se igra na sivoj podlozi na kauču' ), array( 'noriks-cozymat-ugc-3', 'Pas leži na sivoj podlozi na krevetu' ) ) as $u ) {
			echo '<figure class="wscz__uv">' . $cz_vid( $u[0], $u[1] ) . '</figure>';
		}
		?>
	</div>
</div></section>

<section class="wscz__s"><div class="wscz__v wscz__dva">
	<div class="wscz__media wscz__media--sq"><?php echo $cz_vid( 'noriks-cozymat-sezona', 'Mačke na sivoj i bijeloj podlozi' ); ?></div>
	<div>
		<div class="wscz__kicker">Cijele sezone</div>
		<h2 class="wscz__h2">Udobnost <em>cijele sezone</em></h2>
		<p class="wscz__p">Kad zahladi, vaš krzneni prijatelj ne bi se trebao sklupčati na hladnom podu.</p>
		<p class="wscz__p">Samogrijuća podloga reflektira njegovu prirodnu tjelesnu toplinu – i drži ga toplim kroz svježe jesenske dane i hladne zimske noći.</p>
		<ul class="wscz__chk">
			<li><span class="wscz__fi"><?php echo $cz_svg( $cz_ik['snijeg'], 18 ); ?></span> Za hladne jesenske i zimske dane</li>
			<li><span class="wscz__fi"><?php echo $cz_svg( $cz_ik['mjesec'], 18 ); ?></span> Ugodno toplo i kroz cijelu noć</li>
		</ul>
		<p class="wscz__z">Bez kabela. Bez rizika. Samo čista udobnost.</p>
	</div>
</div></section>

<section class="wscz__s wscz__s--bg"><div class="wscz__v">
	<div class="wscz__kicker wscz__c">Ocjena 4,8 / 5</div>
	<h2 class="wscz__h2 wscz__c">Vjeruje nam <em>120.000+ kupaca</em></h2>
	<p class="wscz__p wscz__c">Na temelju tisuća ocjena s pet zvjezdica.</p>
	<div class="wscz__rv wscz__rv4">
		<?php
		foreach ( array(
			array( 'macka-1', 'Jasmina V.', 'Čim sam je prvi put stavila, mačka je legla i od tada ne silazi. Prije je stalno drhtala za hladnijih dana, a sada je cijeli dan na podlozi. Bez struje, a mogu je i oprati.' ),
			array( 'macka-2', 'Jasna D.', 'Mačka je konačno prestala spavati na tipkovnici mog laptopa jer joj je na podlozi toplije. Ne kliže se po parketu i ne šuška.' ),
			array( 'macka-3', 'Sanja E.', 'Mačke su je odmah prihvatile. Jako je mekana i pahuljasta, a nakon pranja se nije spljoštila ni izgubila mekoću.' ),
			array( 'macka-4', 'Paula T.', 'Navečer se puno brže smiri. Toplina joj daje osjećaj sigurnosti i više ne tuži pred vratima spavaće sobe. I lako se opere.' ),
		) as $r ) {
			echo '<div class="wscz__r wscz__r--img"><img class="wscz__rimg" src="' . esc_url( $cz_u . 'noriks-cozymat-' . $r[0] . '.webp' ) . '" alt="' . esc_attr( 'Ljubimac kupca ' . $r[1] . ' na podlozi' ) . '" decoding="async"><div class="wscz__rb"><span class="wscz__zv">★★★★★</span><p>„' . esc_html( $r[2] ) . '"</p><strong>' . esc_html( $r[1] ) . '</strong></div></div>';
		}
		?>
	</div>
</div></section>

<section class="wscz__s"><div class="wscz__v">
	<div class="wscz__kicker wscz__c">Rezultati</div>
	<h2 class="wscz__h2 wscz__c">Što možete <em>očekivati</em></h2>
	<div class="wscz__grid wscz__g4">
		<?php
		foreach ( array(
			array( '97 %', 'mjesec', 'vlasnika kaže da napokon bolje spava jer zna da je ljubimcu toplo i sigurno' ),
			array( '94 %', 'srce', 'primijetilo je da je ljubimac tijekom dana mirniji i zadovoljniji' ),
			array( '96 %', 'sapa', 'kaže da je ljubimac podlogu odmah zavolio i prisvojio' ),
			array( '98 %', 'perilica', 'oduševljeno je koliko se lako čisti i ostaje svježa' ),
		) as $s ) {
			echo '<div class="wscz__k wscz__stat"><span class="wscz__ki">' . $cz_svg( $cz_ik[ $s[1] ], 24 ) . '</span><b>' . esc_html( $s[0] ) . '</b><p>' . esc_html( $s[2] ) . '</p></div>';
		}
		?>
	</div>
	<p class="wscz__note wscz__c">*Na temelju ankete kupaca.</p>
</div></section>

<section class="wscz__s wscz__s--bg"><div class="wscz__v">
	<div class="wscz__kicker wscz__c">Usporedba</div>
	<h2 class="wscz__h2 wscz__c">Čuvajte se <em>jeftinih kopija</em></h2>
	<p class="wscz__p wscz__c">Jeftine podloge izgledaju slično, ali razlika je u slojevima i materijalima.</p>
	<div class="wscz__tw"><table class="wscz__tab">
		<thead><tr><th></th><th class="wscz__tn">NORIKS</th><th>Ostali</th></tr></thead>
		<tbody>
			<?php
			foreach ( array(
				array( 'Mekani flis i ergonomsko punjenje', 0 ),
				array( 'Štiti zglobove od hladne podloge', 0 ),
				array( 'Pranje u perilici', 1 ),
				array( 'Ljubimci je odmah zavole', 0 ),
				array( 'Bez kabela i sigurna', 1 ),
				array( '5 slojeva s reflektirajućim slojem', 0 ),
				array( 'Mekani rebrasti flis na vrhu', 0 ),
			) as $t ) {
				echo '<tr><td>' . esc_html( $t[0] ) . '</td><td class="wscz__tn"><i class="wscz__da">' . $cz_svg( $cz_ik['da'], 16 ) . '</i></td><td>' . ( $t[1] ? '<i class="wscz__da wscz__da--siv">' . $cz_svg( $cz_ik['da'], 16 ) . '</i>' : '<i class="wscz__ne">' . $cz_svg( $cz_ik['ne'], 14 ) . '</i>' ) . '</td></tr>';
			}
			?>
		</tbody>
	</table></div>
</div></section>

<section class="wscz__s npg-s"><?php $npg = array( 'izdelek' => 'NORIKS CozyMat', 'barva' => '#8a5a3b' ); include __DIR__ . '/noriks-pogoji.php'; ?></section>

</div>
<style>
.wscz{color:#2b1d14;font-family:inherit}
.wscz__s{padding:72px 0;background:#fff}.wscz__s.wscz__s--bg{background:#f6efe8}
.wscz__v{width:100%;max-width:1240px;margin:0 auto;padding:0 24px;box-sizing:border-box}
.wscz__c{text-align:center}
.wscz__kicker{display:inline-flex;align-items:center;gap:10px;font-size:13px;letter-spacing:1.4px;text-transform:uppercase;color:#8a5a3b;margin:0 0 10px;font-weight:800}
.wscz__kicker::before{content:"";width:26px;height:2px;background:#d7b99f;border-radius:2px}
.wscz__kicker.wscz__c{display:flex;justify-content:center}
.wscz__h2{font-size:clamp(26px,3vw,36px);font-weight:800;line-height:1.2;margin:0 0 16px;color:#2b1d14}.wscz__h2 em{font-style:italic;color:#8a5a3b}
.wscz__p{font-size:16px;line-height:1.65;color:#5a4a3f;margin:0 0 14px}
.wscz__z{font-weight:800;font-size:16.5px;color:#2b1d14;margin:16px 0 0;padding-left:14px;border-left:3px solid #d7b99f}
.wscz__note{font-size:13px;color:#8b7b6f;margin:16px 0 0}
.wscz__dva{display:grid;grid-template-columns:1fr 1fr;gap:56px;align-items:center}.wscz__dva>div{min-width:0}
.wscz__dva--rev>.wscz__media{order:2}
.wscz__media{border-radius:18px;overflow:hidden;box-shadow:0 14px 36px rgba(90,55,30,.14);aspect-ratio:4/5;background:#efe3d7;position:relative}
.wscz__media img,.wscz__media video{width:100%;height:100%;object-fit:cover;display:block}
.wscz__media.wscz__media--sq{aspect-ratio:1/1}
.wscz__fi{flex:0 0 36px;width:36px;height:36px;border-radius:50%;background:#efe3d7;color:#8a5a3b;display:inline-flex;align-items:center;justify-content:center}
.wscz__ki{width:54px;height:54px;border-radius:50%;background:#efe3d7;border:1.5px solid #d7b99f;color:#8a5a3b;display:inline-flex;align-items:center;justify-content:center;box-sizing:border-box;margin:0 0 12px;flex:0 0 54px}
.wscz__chk{list-style:none;margin:16px 0 0;padding:0;display:flex;flex-direction:column;gap:12px}
.wscz__chk li{display:flex;gap:12px;align-items:center;font-size:15.5px;font-weight:600;color:#2b1d14}
.wscz__grid{display:grid;gap:22px;margin-top:26px}.wscz__g3{grid-template-columns:repeat(3,1fr)}.wscz__g4{grid-template-columns:repeat(4,1fr)}
.wscz__k{background:#fff;border-radius:16px;padding:28px 24px;text-align:center;box-shadow:0 8px 24px rgba(90,55,30,.10);transition:transform .2s,box-shadow .2s}
.wscz__k:hover{transform:translateY(-3px);box-shadow:0 14px 30px rgba(90,55,30,.16)}
.wscz__k h3{font-size:18px;font-weight:800;margin:0 0 8px;color:#2b1d14}
.wscz__k p{margin:0;font-size:15px;line-height:1.55;color:#5a4a3f}
.wscz__s:not(.wscz__s--bg) .wscz__k{background:#f6efe8;box-shadow:none}
.wscz__stat b{display:block;font-size:38px;font-weight:800;color:#8a5a3b;line-height:1;margin:0 0 10px}
.wscz__rv{display:grid;grid-template-columns:repeat(3,1fr);gap:22px;margin-top:26px;align-items:stretch}
.wscz__rv4{grid-template-columns:repeat(4,1fr)}
.wscz__r{background:#fff;border-radius:16px;padding:24px;box-shadow:0 8px 24px rgba(90,55,30,.10);display:flex;flex-direction:column;justify-content:space-between;gap:16px;min-width:0}
.wscz__r p{margin:0;font-size:15.5px;line-height:1.55;color:#3f3128;font-style:italic}
.wscz__rh{display:flex;align-items:center;gap:12px}
.wscz__rh img{width:48px;height:48px;border-radius:50%;object-fit:cover;flex:0 0 48px}
.wscz__rh>div{flex:1;min-width:0}.wscz__rh strong{display:block;font-size:16px;color:#2b1d14}
.wscz__ver{display:inline-flex;align-items:center;gap:4px;font-size:12.5px;font-weight:700;color:#8a5a3b}
.wscz__ver svg{background:#8a5a3b;color:#fff;border-radius:50%;padding:2px}
.wscz__zv{color:#f5b301;letter-spacing:1px;font-size:15px}
.wscz__r--img{padding:0;overflow:hidden;justify-content:flex-start;gap:0}
.wscz__rimg{width:100%;aspect-ratio:1/1;object-fit:cover;display:block}
.wscz__rb{padding:18px 20px 22px;display:flex;flex-direction:column;gap:10px}
.wscz__rb strong{font-size:15px;color:#2b1d14}
.wscz__steps{list-style:none;margin:16px 0 0;padding:0;display:flex;flex-direction:column;gap:12px}
.wscz__steps li{display:flex;gap:14px;align-items:flex-start;background:#fff;border-radius:14px;padding:14px 16px;box-shadow:0 6px 18px rgba(90,55,30,.08);font-size:15px;line-height:1.5;color:#5a4a3f}
.wscz__steps li>span{flex:0 0 30px;width:30px;height:30px;border-radius:50%;background:#8a5a3b;color:#fff;font-weight:800;display:inline-flex;align-items:center;justify-content:center}
.wscz__steps strong{display:block;color:#2b1d14;margin-bottom:2px}
.wscz__help{display:flex;flex-wrap:wrap;gap:8px;margin-top:16px}
.wscz__help span{display:inline-flex;align-items:center;gap:6px;background:#fff;border-radius:999px;padding:7px 12px;font-size:14px;font-weight:600;color:#2b1d14}
.wscz__help i{display:inline-flex;width:20px;height:20px;border-radius:50%;background:#8a5a3b;color:#fff;align-items:center;justify-content:center}
.wscz__ugc{display:grid;grid-template-columns:repeat(3,1fr);gap:22px;margin-top:26px}
.wscz__uv{margin:0;border-radius:18px;overflow:hidden;aspect-ratio:9/16;box-shadow:0 12px 30px rgba(90,55,30,.14);background:#efe3d7}
.wscz__uv video{width:100%;height:100%;object-fit:cover;display:block}
.wscz__tw{margin-top:26px;overflow-x:auto}
.wscz__tab{width:100%;border-collapse:separate;border-spacing:0;background:#fff;border-radius:16px;overflow:hidden;box-shadow:0 8px 24px rgba(90,55,30,.10)}
.wscz__tab th,.wscz__tab td{padding:16px 20px;text-align:center;font-size:15.5px;border-bottom:1px solid #f0e6dc}
.wscz__tab td:first-child,.wscz__tab th:first-child{text-align:left;color:#2b1d14;font-weight:600}
.wscz__tab thead th{font-size:15px;font-weight:800;color:#5a4a3f}
.wscz__tab tr:last-child td{border-bottom:0}
.wscz__tab .wscz__tn{background:#8a5a3b;color:#fff;width:22%}
.wscz__tab thead .wscz__tn{font-size:17px;letter-spacing:1px}
.wscz__da,.wscz__ne{display:inline-flex;width:28px;height:28px;border-radius:50%;align-items:center;justify-content:center}
.wscz__da{background:#fff;color:#8a5a3b}.wscz__da--siv{background:#efe3d7}
.wscz__ne{background:#f3ece6;color:#b0a091}
@media (max-width:1024px){.wscz__g4,.wscz__rv4{grid-template-columns:repeat(2,1fr)}}
@media (max-width:860px){
.wscz__s{padding:48px 0}
.wscz__dva{grid-template-columns:minmax(0,1fr);gap:26px}.wscz__dva--rev>.wscz__media{order:0}
.wscz__g3{grid-template-columns:1fr}
.wscz__rv:not(.wscz__rv4),.wscz__ugc{grid-auto-flow:column;grid-template-columns:none;grid-auto-columns:82%;overflow-x:auto;scroll-snap-type:x mandatory;scrollbar-width:none;padding-bottom:6px;gap:14px}
.wscz__ugc{grid-auto-columns:70%}
.wscz__rv::-webkit-scrollbar,.wscz__ugc::-webkit-scrollbar{display:none}.wscz__r,.wscz__uv{scroll-snap-align:start}
.wscz__tab th,.wscz__tab td{padding:12px 10px;font-size:14px}
}
@media (max-width:767px){.wscz__v{padding:0 16px}}
@media (max-width:480px){.wscz__g4,.wscz__rv4{grid-template-columns:1fr}.wscz__h2{font-size:25px}}
</style>
