<?php
/**
 * NORIKS Defender (orto-lockd) - sigurnosna brava za volan i pojas - why sekcije po natancni strukturi originala
 * (rigminder.com.au/products/lockd-car-defender).
 *
 * STRUKTURA ORIGINALA:
   1. karusel 4 kratkih mnenj (zvezdice, besedilo, Verified buyer, puscici) + ocena - pri nas karusel 4 mnenj s puscicami, ocena 4,8
   2. trak logotipov medijev "As seen in" - tuje znamke medijev ne prenasamo, pri nas trak 4 prednosti z ikonami na istem mestu
   3. "15,000+ Aussies Already Park With One" + 4 UGC videi v vrsti - pri nas naslov brez tuje stevilke + 4 videi z originala (deli s skatlo tuje znamke izrezani)
   4. How it works - 3 kartice v vrsti (video zgoraj, 01/02/03, naslov, besedilo) - pri nas 3 kartice z videi originala (napis znamke na bravi zamenjan z NORIKS)
   5. Put It On Tonight - Without it / With it (2 sliki) + tuja statistika krade avtov (izpuscena, avstralski podatki) + On in 5 seconds 97 % + 3 koraki z videi - pri nas Bez nje / S njom + 97 % + 3 koraki (korak 2: slika iz galerije, ker ima video velik napis tuje znamke)
   6. The Numbers - 4 krogi s stevilkami - pri nas 4 krogi (88 %, 98 %, 96 %, 120.000 kupcev namesto tuje stevilke)
   7. trak 4 mnenj s fotografijami kupcev - pri nas 4 kartice s fotografijami z originala
   8. Sleep Easy. Every Night. - 4 slikovne kartice z napisi - pri nas 4 slikovne kartice
   9. mehanik: slika levo, citat desno - pri nas slika levo, citat desno
   10. primerjalna tabela 3 stolpci s slikami (nasa / brava na volan / sipka) + 3 kljukice - pri nas tabela + 3 kljukice (vrstica s tujim jamstvom izpuscena)
   11. Why we built it - zgodba s sliko - pri nas slika desno, besedilo levo (brez imen tujih ustanoviteljev)
   12. 120 dni jamstvo - pri nas NORIKS pogoji (30 dana)
   FAQ originala -> auto_reviews/FAQ_HR_lockd.php; mnenja -> auto_reviews/HR_lockd.php. Odstevalnik Black Friday in CTA gumbi izpusceni.
 * VIDEO: /img/lockd/noriks-lockd-kupac-1.mp4 /img/lockd/noriks-lockd-kupac-2.mp4 /img/lockd/noriks-lockd-kupac-3.mp4 /img/lockd/noriks-lockd-kupac-4.mp4
 * VIDEO: /img/lockd/noriks-lockd-razlog-1.mp4 /img/lockd/noriks-lockd-razlog-2.mp4 /img/lockd/noriks-lockd-razlog-3.mp4 /img/lockd/noriks-lockd-korak-1.mp4 /img/lockd/noriks-lockd-korak-3.mp4
 * BARVA ORIGINALA: #f26b1d (oranzna akcentna barva stevilk, gumbov in infografik originala, temno modra #0f1d3a); svetel ton za --bg #fdf1e8, akcent #c9530f
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
$lk_u = get_template_directory_uri() . '/img/lockd/';
$lk_ik = array(
	'oko'    => '<path d="M2 12s3.6-7 10-7 10 7 10 7-3.6 7-10 7S2 12 2 12z"/><circle cx="12" cy="12" r="3"/>',
	'sat'    => '<circle cx="12" cy="13" r="8"/><path d="M12 9v4l2.5 2"/><path d="M9.5 2.5h5"/>',
	'kljuc'  => '<circle cx="7.5" cy="15.5" r="4"/><path d="M10.4 12.6 20 3"/><path d="M16 7l3 3"/><path d="M14 9l2 2"/>',
	'auto'   => '<path d="M3 16v-3.5l2-5.2A2 2 0 0 1 6.9 6h10.2a2 2 0 0 1 1.9 1.3l2 5.2V16"/><path d="M3 16h18v2.5H3z"/><circle cx="7" cy="16" r="1.6"/><circle cx="17" cy="16" r="1.6"/><path d="M5 12.5h14"/>',
	'stit'   => '<path d="M12 3l7.5 3v5.5c0 4.6-3.2 8.2-7.5 9.5-4.3-1.3-7.5-4.9-7.5-9.5V6z"/><path d="M8.6 12.2l2.4 2.4 4.4-4.6"/>',
	'volan'  => '<circle cx="12" cy="12" r="9"/><circle cx="12" cy="12" r="2.2"/><path d="M3.5 10.5l6.4 1M20.5 10.5l-6.4 1M12 14.2V21"/>',
	'brava'  => '<rect x="5" y="10.5" width="14" height="10" rx="2"/><path d="M8 10.5V7.5a4 4 0 0 1 8 0v3"/><circle cx="12" cy="15.5" r="1.4"/>',
	'mjesec' => '<path d="M20 14.5A8 8 0 1 1 9.5 4a6.5 6.5 0 0 0 10.5 10.5z"/>',
);
$lk_svg = function ( $d, $s = 24 ) {
	return '<svg viewBox="0 0 24 24" width="' . (int) $s . '" height="' . (int) $s . '" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">' . $d . '</svg>';
};
$lk_zv = '<span class="wslk__zv" aria-label="5 zvjezdica">' . str_repeat( '<svg viewBox="0 0 20 20" width="17" height="17" fill="currentColor" aria-hidden="true" style="display:inline-block;margin-right:2px"><path d="M10 1.5l2.6 5.3 5.9.9-4.3 4.1 1 5.8L10 14.9l-5.2 2.7 1-5.8L1.5 7.7l5.9-.9z"/></svg>', 5 ) . '</span>';
$lk_vid = function ( $ime ) use ( $lk_u ) {
	return '<video src="' . esc_url( $lk_u . $ime . '.mp4?v=5' ) . '" poster="' . esc_url( $lk_u . $ime . '.jpg?v=5' ) . '" autoplay muted loop playsinline preload="metadata"></video>';
};
$lk_ok = '<span class="wslk__da">✓</span>';
$lk_ne = '<span class="wslk__ne">✕</span>';
?>
<div class="wslk">

<section class="wslk__s wslk__s--bg"><div class="wslk__v">
	<div class="wslk__kicker wslk__c">Ocjena 4,8 / 5</div>
	<h2 class="wslk__h2 wslk__c">Vozači koji ga koriste <em>svaki dan</em></h2>
	<p class="wslk__p wslk__c">Kratko i jasno – što kažu kupci nakon prvih tjedana s bravom na volanu.</p>
	<div class="wslk__grid wslk__kar wslk__kar3">
		<?php
		$lk_m1 = array(
			array( 'Lako se stavlja i skida', 'i daje mir da će auto biti tamo gdje ste ga ostavili kad se vratite.' ),
			array( 'Jednostavna za stavljanje i skidanje', 'Čak i kad samo skoknem do dućana, stavim je – toliko je jednostavna.' ),
			array( 'Lopovu prava muka', 'Lako se koristi, a svakome tko bi je pokušao skinuti bila bi prava gnjavaža. Odličan dizajn!' ),
			array( 'Vidljivo odvraćanje', 'Jednostavna za korištenje i jasno se vidi kroz staklo. Puno lakša od starih šipki za volan.' ),
		);
		foreach ( $lk_m1 as $m ) {
			echo '<div class="wslk__rk">' . $lk_zv . '<strong>' . esc_html( $m[0] ) . '</strong><p>' . esc_html( $m[1] ) . '</p><span class="wslk__ver">' . $lk_svg( $lk_ik['stit'], 16 ) . ' Provjereni kupac</span></div>';
		}
		?>
	</div>
	<p class="wslk__zak wslk__zak--c">Ocjena 4,8 od 1.081 recenzije kupaca.</p>
</div></section>

<section class="wslk__s wslk__s--traka"><div class="wslk__v"><div class="wslk__trak">
	<?php
	foreach ( array( array( 'oko', 'Vidljiva s 20 metara', 'i kroz zatamnjeno staklo' ), array( 'sat', 'Na mjestu za 5 sekundi', 'kabel, klik, ključ' ), array( 'kljuc', '3 vlastita ključa', 'u svakom paketu' ), array( 'auto', 'Odgovara 99 % vozila', 'auti, SUV-ovi, kamioneti' ) ) as $c ) {
		echo '<div class="wslk__tc"><span class="wslk__ti">' . $lk_svg( $lk_ik[ $c[0] ], 22 ) . '</span><div><strong>' . esc_html( $c[1] ) . '</strong><span>' . esc_html( $c[2] ) . '</span></div></div>';
	}
	?>
</div></div></section>

<section class="wslk__s wslk__s--bg"><div class="wslk__v">
	<div class="wslk__kicker wslk__c">Iskustva vozača</div>
	<h2 class="wslk__h2 wslk__c">Vozači već <em>parkiraju s njim</em></h2>
	<p class="wslk__p wslk__c">Pogledajte kako ga koriste oni koji su ga već stavili na svoj volan – bez glume, ravno iz auta.</p>
	<div class="wslk__grid wslk__g4 wslk__vk">
		<div class="wslk__vm"><?php echo $lk_vid( 'noriks-lockd-kupac-1' ); ?></div>
		<div class="wslk__vm"><?php echo $lk_vid( 'noriks-lockd-kupac-2' ); ?></div>
		<div class="wslk__vm"><?php echo $lk_vid( 'noriks-lockd-kupac-3' ); ?></div>
		<div class="wslk__vm"><?php echo $lk_vid( 'noriks-lockd-kupac-4' ); ?></div>
	</div>
</div></section>

<section class="wslk__s"><div class="wslk__v">
	<div class="wslk__kicker wslk__c">Kako radi</div>
	<h2 class="wslk__h2 wslk__c">3 razloga zašto lopov <em>zaobiđe vaš auto</em></h2>
	<p class="wslk__p wslk__c">Lopovi ne traže izazov. Hodaju ulicom i biraju najlakši auto – ova brava čini da vaš to nije.</p>
	<div class="wslk__grid wslk__g3">
		<?php
		$lk_r = array(
			array( 'noriks-lockd-razlog-1', '01', 'Vidi je s 20 metara.', 'Vidi se kroz zatamnjeno staklo, čak i noću – prije nego što uopće dotakne vrata.' ),
			array( 'noriks-lockd-razlog-2', '02', 'Ako ne može upravljati, ne može ga odvesti.', 'Pletena čelična sajla od 5 mm prolazi kroz volan i zaključava se u kopču sigurnosnog pojasa.' ),
			array( 'noriks-lockd-razlog-3', '03', 'Ne može je samo otkopčati.', 'Glava brave prekriva tipku za otpuštanje kopče pa je nitko ne može pritisnuti. Van je vadi samo ključ.' ),
		);
		foreach ( $lk_r as $r ) {
			echo '<div class="wslk__k"><div class="wslk__km wslk__km--vid">' . $lk_vid( $r[0] ) . '<span class="wslk__st">' . esc_html( $r[1] ) . '</span></div><div class="wslk__kt"><strong class="wslk__nm">' . esc_html( $r[2] ) . '</strong><p>' . esc_html( $r[3] ) . '</p></div></div>';
		}
		?>
	</div>
</div></section>

<section class="wslk__s wslk__s--bg"><div class="wslk__v">
	<div class="wslk__kicker wslk__c">Svaku večer</div>
	<h2 class="wslk__h2 wslk__c">Stavite je večeras. <em>Probudite se uz svoj auto.</em></h2>
	<p class="wslk__p wslk__c">Jutro kojeg se svi boje: staklo na cesti i prazno mjesto gdje je stajao auto.</p>
	<div class="wslk__grid wslk__g2">
		<div class="wslk__bs"><img src="<?php echo esc_url( $lk_u . 'noriks-lockd-bez.webp' ); ?>" alt="Bez brave: vlasnik ujutro ispred praznog prilaza i razbijenog stakla" loading="eager" decoding="async"><span class="wslk__oz wslk__oz--ne">Bez nje</span></div>
		<div class="wslk__bs"><img src="<?php echo esc_url( $lk_u . 'noriks-lockd-sa.webp' ); ?>" alt="S bravom: vlasnik ujutro uz svoj auto s bravom za volan" loading="eager" decoding="async"><span class="wslk__oz wslk__oz--da">S njom</span></div>
	</div>
	<div class="wslk__brz"><span class="wslk__ti"><?php echo $lk_svg( $lk_ik['sat'], 22 ); ?></span><div><strong>Na mjestu za 5 sekundi</strong><span><b>97 %</b> kupaca kaže da je brža nego što su očekivali.</span></div></div>
	<div class="wslk__grid wslk__g3">
		<div class="wslk__k"><div class="wslk__km wslk__km--vid"><?php echo $lk_vid( 'noriks-lockd-korak-1' ); ?><span class="wslk__st">1</span></div><div class="wslk__kt"><strong class="wslk__nm">Provucite je oko volana.</strong><p>Sajla ide kroz bilo koji standardni volan, bez skidanja i bez alata.</p></div></div>
		<div class="wslk__k"><div class="wslk__km wslk__km--vid"><img src="<?php echo esc_url( $lk_u . 'noriks-lockd-korak-2.webp' ); ?>" alt="Brava se utakne u kopču sigurnosnog pojasa" loading="eager" decoding="async"><span class="wslk__st">2</span></div><div class="wslk__kt"><strong class="wslk__nm">Kliknite je u kopču pojasa.</strong><p>Utaknite bravu u kopču sigurnosnog pojasa dok ne klikne – glava prekrije tipku za otpuštanje.</p></div></div>
		<div class="wslk__k"><div class="wslk__km wslk__km--vid"><?php echo $lk_vid( 'noriks-lockd-korak-3' ); ?><span class="wslk__st">3</span></div><div class="wslk__kt"><strong class="wslk__nm">Ne može upravljati, ne može voziti.</strong><p>Okret ključa i gotovo. Volan se ne može okrenuti dovoljno da bi itko odvezao auto.</p></div></div>
	</div>
</div></section>

<section class="wslk__s"><div class="wslk__v">
	<div class="wslk__kicker wslk__c">Brojke</div>
	<h2 class="wslk__h2 wslk__c">Lopovi je vide, vlasnici je koriste: <em>brojke</em></h2>
	<p class="wslk__p wslk__c">Što vozači javljaju nakon što su je počeli stavljati na volan.</p>
	<div class="wslk__grid wslk__g4 wslk__kr">
		<?php
		foreach ( array( array( 88, '88 %', 'lopova zaobiđe auto na kojem je postavljena' ), array( 98, '98 %', 'kupaca je koristi svaki put kad parkira' ), array( 96, '96 %', 'kupaca bi je preporučilo drugom vozaču' ), array( 100, '120.000', 'kupaca NORIKS-a, prosječna ocjena 4,8' ) ) as $b ) {
			$off = round( 276.5 * ( 1 - $b[0] / 100 ), 1 );
			echo '<div class="wslk__krk"><div class="wslk__ring' . ( strlen( $b[1] ) > 5 ? ' wslk__ring--dug' : '' ) . '"><svg viewBox="0 0 100 100" aria-hidden="true"><circle cx="50" cy="50" r="44" class="wslk__rb"/><circle cx="50" cy="50" r="44" class="wslk__rf" style="stroke-dashoffset:' . esc_attr( $off ) . '"/></svg><b>' . esc_html( $b[1] ) . '</b></div><p>' . esc_html( $b[2] ) . '</p></div>';
		}
		?>
	</div>
</div></section>

<section class="wslk__s wslk__s--bg"><div class="wslk__v">
	<div class="wslk__kicker wslk__c">Ocjena 4,8 / 5</div>
	<h2 class="wslk__h2 wslk__c">Kupci i njihovi auti – <em>svako jutro na mjestu</em></h2>
	<p class="wslk__p wslk__c">Fotografije koje su nam poslali kupci, s bravom na vlastitom volanu.</p>
	<div class="wslk__grid wslk__g4 wslk__kar">
		<?php
		$lk_m2 = array(
			array( 'noriks-lockd-mnenje-1.webp', 'Kupio sam je nakon provale', 'Kupio sam je nakon što su nam prošli auto obili. Sad je stavljam baš svaki put i nikad nije bilo problema.', 'Marko T., Velika Gorica' ),
			array( 'noriks-lockd-mnenje-2.webp', 'Svake večeri bez iznimke', 'Dvije ulice dalje ukrali su auto pa sam je kupio. Stavi se za par sekundi, a preko dana stoji u pretincu.', 'Ivan M., Sesvete' ),
			array( 'noriks-lockd-mnenje-3.webp', 'Stavljam je svaki put', 'Jako praktična, i kad samo skoknem do dućana ili na stanicu. Nijednom se nije zaglavila, a spavam puno mirnije.', 'Petra K., Dubrava' ),
			array( 'noriks-lockd-mnenje-4.webp', 'Auto je ujutro bio tu', 'Živimo u mirnoj ulici, ali jedne noći provalili su u auto malo niže. Od kad stavljam bravu, nemam više brige.', 'Sanja M., Samobor' ),
		);
		foreach ( $lk_m2 as $m ) {
			echo '<div class="wslk__k"><div class="wslk__km"><img src="' . esc_url( $lk_u . $m[0] ) . '" alt="Fotografija kupca: brava za volan u autu" loading="eager" decoding="async"></div><div class="wslk__kt">' . $lk_zv . '<strong class="wslk__nm">„' . esc_html( $m[1] ) . '“</strong><p>' . esc_html( $m[2] ) . '</p><span class="wslk__ime">' . esc_html( $m[3] ) . ' <small>· ✓ Provjereni kupac</small></span></div></div>';
		}
		?>
	</div>
</div></section>

<section class="wslk__s"><div class="wslk__v">
	<div class="wslk__kicker wslk__c">Mirna glava</div>
	<h2 class="wslk__h2 wslk__c">Spavajte mirno. <em>Svake noći.</em></h2>
	<p class="wslk__p wslk__c">Mala navika od pet sekundi koja mijenja kako se osjećate kad ugasite svjetlo, skoknete u trgovinu ili ujutro otvorite vrata.</p>
	<div class="wslk__grid wslk__g4">
		<?php
		foreach ( array( array( 'noriks-lockd-san.webp', 'mjesec', 'Prespavajte cijelu noć', 'Bez buđenja na svaki zvuk s ulice i bez provjeravanja kroz prozor.' ), array( 'noriks-lockd-kratko-stajanje.webp', 'sat', 'Kratko stajanje, bez brige', 'I za pet minuta u dućanu – stavi se brže nego što zaključate vrata.' ), array( 'noriks-lockd-kljuc.webp', 'kljuc', 'Kopiran ključ? I dalje ne može upravljati', 'Čak i ako netko otključa i upali auto, volan ostaje vezan za pojas.' ), array( 'noriks-lockd-jutro.webp', 'auto', 'Svako jutro na svom mjestu', 'Otvorite vrata i auto vas čeka točno gdje ste ga ostavili.' ) ) as $b ) {
			echo '<div class="wslk__k"><div class="wslk__km wslk__km--vis"><img src="' . esc_url( $lk_u . $b[0] ) . '" alt="' . esc_attr( $b[2] ) . '" loading="eager" decoding="async"></div><div class="wslk__kt"><span class="wslk__ki">' . $lk_svg( $lk_ik[ $b[1] ], 20 ) . '</span><strong class="wslk__nm">' . esc_html( $b[2] ) . '</strong><p>' . esc_html( $b[3] ) . '</p></div></div>';
		}
		?>
	</div>
</div></section>

<section class="wslk__s wslk__s--bg"><div class="wslk__v wslk__dva">
	<div class="wslk__media"><img src="<?php echo esc_url( $lk_u . 'noriks-lockd-mehanicar.webp' ); ?>" alt="Automehaničar u svojoj radionici" loading="eager" decoding="async"><span class="wslk__bad">Iz radionice</span></div>
	<div>
		<div class="wslk__kicker">Mišljenje stručnjaka</div>
		<h2 class="wslk__h2">Popravio je više od 300 ukradenih auta. <em>Ovu bravu preporučuje.</em></h2>
		<div class="wslk__cit">
			<p>„Bit ću iskren: nijedna brava ne zaustavi lopova koji ima cijelu noć. Većina onih koje vidim završi u prtljažniku, jer ih ljudi prestanu stavljati.</p>
			<p>Ovu sam stavio na svoj pick-up. Stavi se za par sekundi pa se koristi svaki put. Lopovi ne traže izazov – hodaju ulicom i traže najlakši auto, a ovo čini da vaš to nije.“</p>
		</div>
		<span class="wslk__ime"><i class="wslk__av">G</i>Goran H. <small>· ✓ automehaničar i vlasnik radionice, Zagreb</small></span>
		<p class="wslk__zak">Zaštita vrijedi samo ako je koristite – a ovu ćete koristiti.</p>
	</div>
</div></section>

<section class="wslk__s"><div class="wslk__v">
	<div class="wslk__kicker wslk__c">Usporedba</div>
	<h2 class="wslk__h2 wslk__c">NORIKS Defender <em>naspram drugih brava za volan</em></h2>
	<p class="wslk__p wslk__c">Klasične brave rade – ali samo ako ih stavite. Ovu ćete stavljati jer je brza, lagana i ne smeta.</p>
	<div class="wslk__tw"><table class="wslk__tab">
		<thead><tr>
			<th class="wslk__nas"><img src="<?php echo esc_url( $lk_u . 'noriks-lockd-nas.webp' ); ?>" alt="NORIKS Defender" loading="eager" decoding="async">NORIKS Defender</th>
			<th><img src="<?php echo esc_url( $lk_u . 'noriks-lockd-kolut.webp' ); ?>" alt="Brava preko cijelog volana" loading="eager" decoding="async">Brave preko volana</th>
			<th><img src="<?php echo esc_url( $lk_u . 'noriks-lockd-sipka.webp' ); ?>" alt="Klasična šipka za volan" loading="eager" decoding="async">Šipke za volan</th>
		</tr></thead>
		<tbody>
			<?php
			foreach ( array(
				array( 'Postavlja se za par sekundi', '4+ minute natezanja', 'Postavljanje 60 sekundi' ),
				array( 'Mala, lako se spremi', 'Teška 4 kg metala', 'Glomazna šipka na stražnjem sjedalu' ),
				array( 'Pletena čelična sajla 5 mm', 'Čvrst čelični oklop', 'Jedno mjesto za rezanje' ),
				array( 'Ne oštećuje volan', 'Ostavlja tragove', 'Grebe obruč volana' ),
				array( 'Zaključava volan i kopču pojasa', 'Pokriva samo volan', 'Stezaljka samo na volanu' ),
			) as $r ) {
				echo '<tr><td class="wslk__nas">' . $lk_ok . esc_html( $r[0] ) . '</td><td>' . $lk_ne . esc_html( $r[1] ) . '</td><td>' . $lk_ne . esc_html( $r[2] ) . '</td></tr>';
			}
			?>
		</tbody>
	</table></div>
	<div class="wslk__trak wslk__trak--kv">
		<?php
		foreach ( array( array( 'volan', 'Nula oštećenja unutrašnjosti' ), array( 'oko', 'Lopovi je vide i odu dalje' ), array( 'sat', 'Dovoljno brza za svaki dan' ) ) as $c ) {
			echo '<div class="wslk__tc"><span class="wslk__ti">' . $lk_svg( $lk_ik[ $c[0] ], 22 ) . '</span><div><strong>' . esc_html( $c[1] ) . '</strong></div></div>';
		}
		?>
	</div>
</div></section>

<section class="wslk__s wslk__s--bg"><div class="wslk__v wslk__dva wslk__dva--rev">
	<div class="wslk__media wslk__media--sir"><img src="<?php echo esc_url( $lk_u . 'noriks-lockd-zasto.webp' ); ?>" alt="Pick-up parkiran ispred kuće" loading="eager" decoding="async"></div>
	<div>
		<div class="wslk__kicker">Zašto smo je napravili</div>
		<h2 class="wslk__h2">Nismo našli bravu koju bismo stavili <em>na vlastiti auto</em></h2>
		<p class="wslk__p">Sve je počelo s našim pick-upom. Htjeli smo bravu za volan, a ništa što smo našli nije bilo kako treba – preteško, preglomazno ili toliko komplicirano da bi nakon tjedan dana završilo u prtljažniku.</p>
		<p class="wslk__p">Zato smo napravili onu koju smo htjeli. Jarke je boje, da je lopov vidi kroz prozor. Stavi se za 5 sekundi i stane u pretinac. I svaka se brava testira prije nego što krene k vama.</p>
		<ul class="wslk__kv">
			<li>Jarka navlaka koja se vidi kroz staklo</li>
			<li>Na mjestu za 5 sekundi, u pretincu preko dana</li>
			<li>Svaka brava testirana prije slanja, 3 vlastita ključa</li>
		</ul>
		<p class="wslk__zak">Brava koju ćete stvarno stavljati – svaku večer.</p>
	</div>
</div></section>

<section class="wslk__s npg-s"><?php $npg = array( 'izdelek' => 'NORIKS Defender', 'barva' => '#f26b1d' ); include __DIR__ . '/noriks-pogoji.php'; ?></section>

</div>
<style>
.wslk{color:#1c1c1c;font-family:inherit}
.wslk__s{padding:72px 0;background:#fff}.wslk__s.wslk__s--bg{background:#fdf1e8}
.wslk__s--traka{padding:32px 0}
.wslk__v{width:100%;max-width:1240px;margin:0 auto;padding:0 24px;box-sizing:border-box}
.wslk__c{text-align:center}
.wslk__kicker{display:inline-flex;align-items:center;gap:10px;font-size:13px;letter-spacing:1.4px;text-transform:uppercase;color:#c9530f;margin:0 0 10px;font-weight:800}
.wslk__kicker::before{content:"";width:26px;height:2px;background:#f26b1d;border-radius:2px}
.wslk__kicker.wslk__c{display:flex;justify-content:center}
.wslk__h2{font-size:clamp(26px,3vw,36px);font-weight:800;line-height:1.2;margin:0 0 16px;color:#0f1d3a}.wslk__h2 em{font-style:italic;color:#c9530f}
.wslk__p{font-size:16px;line-height:1.65;color:#333;margin:0 0 14px}
.wslk__zak{font-size:16.5px;font-weight:800;line-height:1.5;margin:20px 0 0;padding-left:14px;border-left:3px solid #f26b1d}
.wslk__zak--c{border-left:0;padding-left:0;text-align:center;margin-top:26px}
.wslk__dva{display:grid;grid-template-columns:1fr 1fr;gap:56px;align-items:center}.wslk__dva>div{min-width:0}
.wslk__dva--rev>div:first-child{order:2}
.wslk__media{position:relative;border-radius:18px;overflow:hidden;box-shadow:0 14px 36px rgba(140,60,10,.16);aspect-ratio:4/5;background:#fff}
.wslk__media img{width:100%;height:100%;object-fit:cover;display:block}.wslk__media--sir{aspect-ratio:4/3}
.wslk__bad{position:absolute;left:16px;top:16px;background:#f26b1d;color:#fff;font-weight:800;font-size:13px;letter-spacing:.8px;text-transform:uppercase;padding:7px 13px;border-radius:30px}
.wslk__grid{display:grid;gap:22px;margin-top:26px}
.wslk__g2{grid-template-columns:repeat(2,1fr)}.wslk__g3{grid-template-columns:repeat(3,1fr)}.wslk__g4{grid-template-columns:repeat(4,1fr)}
.wslk__k{background:#fff;border-radius:16px;overflow:hidden;display:flex;flex-direction:column;box-shadow:0 8px 24px rgba(140,60,10,.10);transition:transform .2s,box-shadow .2s}
.wslk__k:hover{transform:translateY(-3px);box-shadow:0 14px 30px rgba(140,60,10,.16)}
.wslk__km{position:relative}.wslk__km img,.wslk__km video{width:100%;aspect-ratio:4/3;object-fit:cover;display:block;background:#eee}
.wslk__km--vid img,.wslk__km--vid video{aspect-ratio:4/5}
.wslk__km--vis img{aspect-ratio:4/5}
.wslk__st{position:absolute;left:14px;top:14px;min-width:38px;height:38px;padding:0 8px;box-sizing:border-box;border-radius:20px;background:#f26b1d;color:#fff;font-weight:800;font-size:16px;display:flex;align-items:center;justify-content:center;box-shadow:0 4px 12px rgba(0,0,0,.2)}
.wslk__kt{padding:20px 22px 24px;flex:1;display:flex;flex-direction:column}
.wslk__nm{font-size:17px;font-weight:800;margin:0 0 8px;display:block;color:#0f1d3a}
.wslk__kt p{margin:0 0 12px;font-size:15.5px;line-height:1.55;color:#333;flex:1}
.wslk__ki{width:40px;height:40px;border-radius:50%;background:#fde0cc;color:#c9530f;display:flex;align-items:center;justify-content:center;margin:0 0 12px}
.wslk__zv{color:#f5a623;letter-spacing:2px;font-size:16px;display:block;margin:0 0 8px}
.wslk__rk{background:#fff;border-radius:16px;padding:24px;box-shadow:0 8px 24px rgba(140,60,10,.10);display:flex;flex-direction:column}
.wslk__rk strong{font-size:17px;font-weight:800;color:#0f1d3a;margin:0 0 6px}.wslk__rk p{font-size:15.5px;line-height:1.55;color:#333;margin:0 0 14px;flex:1}
.wslk__ver{display:inline-flex;align-items:center;gap:6px;font-size:13.5px;font-weight:700;color:#c9530f}
.wslk__trak{display:grid;grid-template-columns:repeat(4,1fr);gap:0}
.wslk__trak--kv{grid-template-columns:repeat(3,1fr);margin-top:28px}
.wslk__tc{display:flex;align-items:center;justify-content:center;gap:12px;padding:6px 14px;border-left:1px solid rgba(0,0,0,.08)}.wslk__tc:first-child{border-left:0}
.wslk__tc strong{display:block;font-size:15.5px;font-weight:800;line-height:1.25;color:#0f1d3a}.wslk__tc span{font-size:13.5px;color:#666}
.wslk__ti{flex:0 0 44px;width:44px;height:44px;border-radius:50%;background:#fde0cc;color:#c9530f;display:flex;align-items:center;justify-content:center}
.wslk__vm{border-radius:16px;overflow:hidden;box-shadow:0 10px 26px rgba(140,60,10,.14);background:#000}
.wslk__vm video{width:100%;aspect-ratio:9/16;object-fit:cover;display:block}
.wslk__bs{position:relative;border-radius:16px;overflow:hidden;box-shadow:0 10px 26px rgba(140,60,10,.14)}
.wslk__bs img{width:100%;aspect-ratio:3/2;object-fit:cover;display:block}
.wslk__oz{position:absolute;left:14px;top:14px;font-weight:800;font-size:13px;letter-spacing:.8px;text-transform:uppercase;padding:7px 13px;border-radius:30px;color:#fff}
.wslk__oz--ne{background:rgba(15,29,58,.85)}.wslk__oz--da{background:#f26b1d}
.wslk__brz{display:flex;align-items:center;justify-content:center;gap:14px;margin:30px auto 0;text-align:left}
.wslk__brz strong{display:block;font-size:18px;font-weight:800;color:#0f1d3a}.wslk__brz span{font-size:15px;color:#444}.wslk__brz b{color:#c9530f}
.wslk__krk{background:#fff;border-radius:16px;box-shadow:0 8px 24px rgba(140,60,10,.10);padding:28px 22px;text-align:center}
.wslk__ring{position:relative;width:132px;height:132px;margin:0 auto 14px}
.wslk__ring svg{width:100%;height:100%;transform:rotate(-90deg)}
.wslk__rb{fill:none;stroke:#fde0cc;stroke-width:8}.wslk__rf{fill:none;stroke:#f26b1d;stroke-width:8;stroke-linecap:round;stroke-dasharray:276.5}
.wslk__ring b{position:absolute;inset:0;display:flex;align-items:center;justify-content:center;font-size:26px;font-weight:900;color:#0f1d3a}.wslk__ring--dug b{font-size:20px;letter-spacing:-.2px}
.wslk__krk p{margin:0;font-size:15px;line-height:1.5;color:#333}
.wslk__ime{display:flex;align-items:center;flex-wrap:wrap;gap:8px;font-weight:800;font-size:14.5px;color:#0f1d3a}.wslk__ime small{font-weight:600;color:#777;font-size:13px}
.wslk__av{display:inline-flex;align-items:center;justify-content:center;width:34px;height:34px;border-radius:50%;background:#fde0cc;color:#c9530f;font-style:normal;font-weight:800}
.wslk__cit{background:#fff;border-radius:16px;padding:22px 24px;box-shadow:0 8px 24px rgba(140,60,10,.10);margin:0 0 16px}
.wslk__cit p{margin:0 0 10px;font-size:16px;line-height:1.65;color:#333;font-style:italic}.wslk__cit p:last-child{margin:0}
.wslk__kv{list-style:none;margin:6px 0 0;padding:0}
.wslk__kv li{position:relative;padding:0 0 0 32px;margin:0 0 12px;font-size:15.5px;line-height:1.55;color:#333;list-style:none;font-weight:600}
.wslk__kv li::before{content:"✓";position:absolute;left:0;top:0;width:22px;height:22px;border-radius:50%;background:#fde0cc;color:#c9530f;font-weight:800;font-size:13px;display:flex;align-items:center;justify-content:center}
.wslk__tw{overflow-x:auto;border-radius:16px;box-shadow:0 8px 24px rgba(140,60,10,.10);background:#fff;margin-top:26px}
.wslk__tab{width:100%;border-collapse:collapse;font-size:15px;margin:0;min-width:560px;table-layout:fixed}
.wslk__tab th{background:#0f1d3a!important;color:#fff!important;font-weight:800;padding:16px 10px;text-align:center;border:0;vertical-align:bottom}
.wslk__tab th img{display:block;margin:0 auto 10px;height:96px;width:auto;max-width:130px;object-fit:contain;background:#fff;border-radius:10px;padding:6px}
.wslk__tab th.wslk__nas{background:#f26b1d!important}
.wslk__tab td{padding:14px 14px;text-align:left;border:0;border-bottom:1px solid #f3e1d4;color:#333}
.wslk__tab td.wslk__nas{background:#fff6f0;font-weight:700;color:#0f1d3a}
.wslk__tab tbody tr:last-child td{border-bottom:0}
.wslk__da,.wslk__ne{display:inline-flex;width:22px;height:22px;border-radius:50%;align-items:center;justify-content:center;font-size:13px;font-weight:800;margin-right:8px;vertical-align:middle}
.wslk__da{background:#f26b1d;color:#fff}.wslk__ne{background:#eee;color:#999}
.wslk__karw{position:relative;padding:0 60px}
.wslk__kar3{grid-auto-flow:column;grid-template-columns:none;grid-auto-columns:calc((100% - 44px)/3);overflow-x:auto;scroll-snap-type:x mandatory;scrollbar-width:none}
.wslk__kar3::-webkit-scrollbar{display:none}.wslk__kar3>*{scroll-snap-align:start}
.wslk__pus{position:absolute;top:50%;transform:translateY(-50%);width:44px;height:44px;border-radius:50%;border:0;background:#fff;box-shadow:0 4px 14px rgba(0,0,0,.18);font-size:24px;line-height:1;color:#0f1d3a;cursor:pointer;z-index:2}
.wslk__pus--l{left:0}.wslk__pus--d{right:0}
@media (max-width:1024px){.wslk__g4{grid-template-columns:repeat(2,1fr)}.wslk__trak{grid-template-columns:repeat(2,1fr);row-gap:16px}.wslk__tc:nth-child(3){border-left:0}.wslk__trak--kv{grid-template-columns:1fr}.wslk__trak--kv .wslk__tc{border-left:0;justify-content:flex-start}}
@media (max-width:860px){
.wslk__s{padding:48px 0}.wslk__s--traka{padding:26px 0}
.wslk__dva{grid-template-columns:minmax(0,1fr);gap:26px}.wslk__dva--rev>div:first-child{order:0}
.wslk__g3,.wslk__g2{grid-template-columns:1fr}
.wslk__kar3{grid-auto-columns:84%;flex:0 0 100%;width:100%}.wslk__karw{padding:0;display:flex;flex-wrap:wrap;justify-content:center;gap:0 14px}.wslk__pus{position:static;transform:none;margin-top:16px}
.wslk__kar,.wslk__vk{grid-template-columns:none;grid-auto-flow:column;grid-auto-columns:78%;overflow-x:auto;scroll-snap-type:x mandatory;scrollbar-width:none;padding-bottom:6px}
.wslk__kar::-webkit-scrollbar,.wslk__vk::-webkit-scrollbar{display:none}.wslk__kar>*,.wslk__vk>*{scroll-snap-align:start}
.wslk__vk{grid-auto-columns:62%}
}
@media (max-width:767px){.wslk__v{padding:0 16px}}
@media (max-width:560px){.wslk__h2{font-size:25px}.wslk__kr{grid-template-columns:1fr 1fr;gap:12px}.wslk__krk{padding:20px 12px}.wslk__ring{width:100px;height:100px}.wslk__ring b{font-size:21px}.wslk__ring--dug b{font-size:15px}.wslk__krk p{font-size:13.5px}.wslk__trak{grid-template-columns:1fr 1fr}.wslk__tc{flex-direction:column;text-align:center;padding:6px 8px}.wslk__trak--kv{grid-template-columns:1fr}.wslk__trak--kv .wslk__tc{flex-direction:row;text-align:left}.wslk__brz{align-items:flex-start}}
</style>
<script>
(function(){document.querySelectorAll('.wslk__kar3').forEach(function(k){
  var w=document.createElement('div');w.className='wslk__karw';k.parentNode.insertBefore(w,k);w.appendChild(k);
  ['l','d'].forEach(function(s){var b=document.createElement('button');b.type='button';b.className='wslk__pus wslk__pus--'+s;b.setAttribute('aria-label',s==='l'?'Prethodno':'Sljedeće');b.textContent=s==='l'?'‹':'›';
    b.addEventListener('click',function(){var c=k.firstElementChild;var d=c?c.getBoundingClientRect().width+22:300;k.scrollBy({left:s==='l'?-d:d,behavior:'smooth'});});w.appendChild(b);});
});})();
</script>
