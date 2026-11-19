<?php
/**
 * NORIKS WarmBelt (orto-periodbelt) - grijaci pojas s masazom za menstrualne bolove - why sekcije po natancni strukturi originala
 * (mellorelief.com/products/mello-heat-massage-belt-drug-free-period-pain-relief).
 *
 * STRUKTURA ORIGINALA:
   1. tekoci trak prednosti (100-day guarantee / free tracked delivery / wearable heat + gentle massage) - pri nas staticen trak 3 prednosti z ikonami (NORIKS pogoji namesto tujega jamstva)
   2. "Real relief. Real period stories." - karusel 4 mnenj s fotografijami (ime, starost, besedilo) - pri nas 4 kartice s fotografijami v vrsti (mobil karusel), brez tuje stevilke ocen
   3. "How Mello works" - 3 koraki v vrsti (stevilka, naslov, besedilo) - pri nas 3 kartice s stevilko in ikono
   4. "Why heat? The UK advice." - 3 kartice z viri (NHS, NHS Inform, Endometriosis UK) + opozorilo - pri nas 3 kartice z ikonami + opozorilo
   5. "What heat actually does." - 4 ostevilcene kartice (toplina, misice, prekrvavitev, masaza) + opozorilo - pri nas 4 kartice
   6. "Her worst days, made easier." - slika + 4 tocke - pri nas slika levo, 4 tocke z ikonami desno
   7. "Still deciding? Read theirs." - karusel 5 mnenj (naslov, besedilo, ime) - pri nas karusel 5 mnenj s puscicami
   8. primerjava Mello Device / Other Period Pain Relief (6 vrstic) - pri nas tabela NORIKS / drugi pripomocki (vrstica s tujim jamstvom 100 dni -> 30 dana za povrat)
   9. 100 Day Money-Back Guarantee - pri nas NORIKS pogoji (30 dana)
   FAQ originala -> auto_reviews/FAQ_HR_periodbelt.php; mnenja -> auto_reviews/HR_periodbelt.php. Odstevalnik Black Friday in CTA gumbi izpusceni.
 * SLIKE: /img/periodbelt/noriks-periodbelt-mnenje-1.webp /img/periodbelt/noriks-periodbelt-mnenje-2.webp /img/periodbelt/noriks-periodbelt-mnenje-3.webp /img/periodbelt/noriks-periodbelt-mnenje-4.webp
 * BARVA ORIGINALA: #e07a7a (koralno-roza poudarki, crte in pojas na originalu, temno modra #1f2340 v infografikah); svetel ton za --bg #fbefee, akcent #b54c56
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
$pb_u = get_template_directory_uri() . '/img/periodbelt/';
$pb_ik = array(
	'toplina' => '<path d="M8 4c-1.5 2 1.5 3 0 5M12 4c-1.5 2 1.5 3 0 5M16 4c-1.5 2 1.5 3 0 5"/><rect x="4" y="12" width="16" height="7" rx="3.5"/>',
	'kamion'  => '<path d="M3 6h11v9H3z"/><path d="M14 9h4l3 3v3h-7"/><circle cx="7" cy="17" r="1.8"/><circle cx="17" cy="17" r="1.8"/>',
	'povrat'  => '<path d="M4 12a8 8 0 1 0 2.4-5.7"/><path d="M4 4v4.5h4.5"/>',
	'baterija'=> '<rect x="3" y="7" width="16" height="10" rx="2"/><path d="M21 10.5v3"/><path d="M10.5 9l-2 3.5h4l-2 3.5"/>',
	'pojas'   => '<path d="M3 12c3-2 15-2 18 0"/><rect x="8" y="9" width="8" height="6" rx="2"/>',
	'regul'   => '<path d="M4 7h10M18 7h2M4 17h4M12 17h8"/><circle cx="16" cy="7" r="2"/><circle cx="10" cy="17" r="2"/>',
	'srce'    => '<path d="M12 20s-7.5-4.6-7.5-10A4.3 4.3 0 0 1 12 7.5 4.3 4.3 0 0 1 19.5 10c0 5.4-7.5 10-7.5 10z"/>',
	'list'    => '<path d="M20 4C10 4 5 9 4 20"/><path d="M20 4c0 8-5 12-12 12"/>',
	'torba'   => '<rect x="4" y="8" width="16" height="12" rx="2"/><path d="M9 8V6a3 3 0 0 1 6 0v2"/>',
	'ruka'    => '<path d="M7 11V6.5a1.5 1.5 0 0 1 3 0V11M10 10V5a1.5 1.5 0 0 1 3 0v5M13 10V6a1.5 1.5 0 0 1 3 0v6"/><path d="M16 12v-1.5a1.5 1.5 0 0 1 3 0V14a7 7 0 0 1-7 7h-1a6 6 0 0 1-5-2.7L4 15.5a1.5 1.5 0 0 1 2.5-1.7L7 14.5"/>',
	'stit'    => '<path d="M12 3l7.5 3v5.5c0 4.6-3.2 8.2-7.5 9.5-4.3-1.3-7.5-4.9-7.5-9.5V6z"/><path d="M8.6 12.2l2.4 2.4 4.4-4.6"/>',
	'knjiga'  => '<path d="M4 5.5A2.5 2.5 0 0 1 6.5 3H20v15H6.5A2.5 2.5 0 0 0 4 20.5z"/><path d="M4 20.5A2.5 2.5 0 0 1 6.5 18H20"/>',
	'misic'   => '<path d="M5 15c0-5 4-9 9-9 2 0 4 1 5 3"/><path d="M5 15c2 2 6 3 9 1s5-3 5-7"/>',
	'krv'     => '<path d="M12 3s6 6.6 6 11a6 6 0 0 1-12 0c0-4.4 6-11 6-11z"/>',
	'val'     => '<path d="M3 12c2-3 4-3 6 0s4 3 6 0 4-3 6 0"/>',
);
$pb_svg = function ( $d, $s = 24 ) {
	return '<svg viewBox="0 0 24 24" width="' . (int) $s . '" height="' . (int) $s . '" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">' . $d . '</svg>';
};
$pb_zv = '<span class="wspb__zv" aria-label="5 zvjezdica">' . str_repeat( '<svg viewBox="0 0 20 20" width="17" height="17" fill="currentColor" aria-hidden="true" style="display:inline-block;margin-right:2px"><path d="M10 1.5l2.6 5.3 5.9.9-4.3 4.1 1 5.8L10 14.9l-5.2 2.7 1-5.8L1.5 7.7l5.9-.9z"/></svg>', 5 ) . '</span>';
?>
<div class="wspb">

<section class="wspb__s wspb__s--bg wspb__s--traka"><div class="wspb__v"><div class="wspb__trak">
	<div class="wspb__tc"><span class="wspb__ti"><?php echo $pb_svg( $pb_ik['toplina'] ); ?></span><div><strong>Nosiva toplina + nježna masaža</strong><span>bežično, ispod odjeće</span></div></div>
	<div class="wspb__tc"><span class="wspb__ti"><?php echo $pb_svg( $pb_ik['kamion'] ); ?></span><div><strong>Besplatna dostava</strong><span>iznad 70 €</span></div></div>
	<div class="wspb__tc"><span class="wspb__ti"><?php echo $pb_svg( $pb_ik['povrat'] ); ?></span><div><strong>30 dana za povrat</strong><span>isprobajte kroz ciklus</span></div></div>
</div></div></section>

<section class="wspb__s"><div class="wspb__v">
	<div class="wspb__kicker wspb__c">Ocjena 4,8 / 5</div>
	<h2 class="wspb__h2 wspb__c">Stvarno olakšanje. <em>Stvarne priče.</em></h2>
	<p class="wspb__p wspb__c">Pogledajte kako žene koriste NORIKS WarmBelt svaki mjesec.</p>
	<div class="wspb__grid wspb__g4 wspb__kar">
		<?php
		$pb_m1 = array(
			array( 'mnenje-1', 'Gabrijela, 35', 'Nosila sam ga na poslu ispod veste i nitko nije ništa primijetio. Prvi put sam izdržala cijelu smjenu bez da moram sjesti.' ),
			array( 'mnenje-2', 'Sara, 28', 'Probala sam TENS uređaj, termofor, sve. Ovo je prvo što me nije štipalo, udaralo strujom ni se ohladilo usred dana.' ),
			array( 'mnenje-3', 'Aron, 26', 'Kupio sam ga djevojci nakon što sam gledao kako svakih pola sata puni termofor. Nije to očekivala – a sad ne prođe mjesec bez njega.' ),
			array( 'mnenje-4', 'Jasna, 42', 'Bila sam skeptična, ali sam ga naručila jer nisam imala što izgubiti. Nakon tri ciklusa još nisam posegnula za tabletom.' ),
		);
		foreach ( $pb_m1 as $m ) {
			echo '<div class="wspb__rf"><div class="wspb__rfm"><img src="' . esc_url( $pb_u . 'noriks-periodbelt-' . $m[0] . '.webp' ) . '" alt="' . esc_attr( 'Kupac s NORIKS WarmBelt pojasom - ' . $m[1] ) . '" decoding="async"></div><div class="wspb__rft">' . $pb_zv . '<p>' . esc_html( $m[2] ) . '</p><span class="wspb__ime"><i class="wspb__av">' . esc_html( mb_substr( $m[1], 0, 1 ) ) . '</i>' . esc_html( $m[1] ) . ' <small>' . $pb_svg( $pb_ik['stit'], 14 ) . ' Provjereni kupac</small></span></div></div>';
		}
		?>
	</div>
</div></section>

<section class="wspb__s wspb__s--bg"><div class="wspb__v">
	<div class="wspb__kicker wspb__c">Kako radi</div>
	<h2 class="wspb__h2 wspb__c">Tri koraka do <em>ugodne topline</em></h2>
	<p class="wspb__p wspb__c">Bez kuhala, bez punjenja vode i bez utičnice – pojas ide s vama.</p>
	<div class="wspb__grid wspb__g3">
		<?php
		$pb_k = array(
			array( 'baterija', 'Napunite ga', 'Uključite USB-C kabel. Puna baterija traje do otprilike 8 sati.' ),
			array( 'pojas', 'Omotajte ga', 'Zakopčajte mekani, rastezljivi pojas oko donjeg dijela trbuha ili donjeg dijela leđa.' ),
			array( 'regul', 'Odaberite postavke', 'Izaberite razinu topline i način masaže – i nastavite sa svojim danom.' ),
		);
		foreach ( $pb_k as $i => $k ) {
			echo '<div class="wspb__k"><div class="wspb__kh"><span class="wspb__ki">' . $pb_svg( $pb_ik[ $k[0] ], 26 ) . '</span><span class="wspb__st">' . ( $i + 1 ) . '</span></div><strong class="wspb__nm">' . esc_html( $k[1] ) . '</strong><p>' . esc_html( $k[2] ) . '</p></div>';
		}
		?>
	</div>
</div></section>

<section class="wspb__s"><div class="wspb__v">
	<div class="wspb__kicker wspb__c">Zašto toplina?</div>
	<h2 class="wspb__h2 wspb__c">Što kažu <em>zdravstvene smjernice</em></h2>
	<p class="wspb__p wspb__c">Toplina je jedna od najjednostavnijih stvari koje britanske zdravstvene smjernice predlažu kod menstrualnih bolova. NORIKS WarmBelt je samo čini nosivom.</p>
	<div class="wspb__grid wspb__g3">
		<?php
		$pb_r = array(
			array( 'toplina', 'NHS predlaže toplinu', 'Savjeti britanske zdravstvene službe (NHS) za menstrualne bolove uključuju grijaći jastučić ili termofor na trbuhu.', 'Izvor: NHS, menstrualni bolovi' ),
			array( 'knjiga', 'Dio brige kod endometrioze', 'NHS Inform u smjernicama za ublažavanje simptoma endometrioze navodi toplinu i udobnost.', 'Izvor: NHS Inform, endometrioza' ),
			array( 'baterija', 'Bežični grijaći jastučići', 'Endometriosis UK navodi da toplina može pomoći kod bolova i spominje električne, bežične grijaće jastučiće kao ugodnu opciju.', 'Izvor: Endometriosis UK' ),
		);
		foreach ( $pb_r as $r ) {
			echo '<div class="wspb__k wspb__k--l"><span class="wspb__ki">' . $pb_svg( $pb_ik[ $r[0] ], 26 ) . '</span><strong class="wspb__nm">' . esc_html( $r[1] ) . '</strong><p>' . esc_html( $r[2] ) . '</p><span class="wspb__izv">' . esc_html( $r[3] ) . '</span></div>';
		}
		?>
	</div>
	<p class="wspb__nap">NORIKS WarmBelt je uređaj za udobnost, a ne medicinski tretman. Ako je bol jaka ili se mijenja, javite se svom liječniku.</p>
</div></section>

<section class="wspb__s wspb__s--bg"><div class="wspb__v">
	<div class="wspb__kicker wspb__c">Što toplina zapravo radi</div>
	<h2 class="wspb__h2 wspb__c">Toplina i masaža, <em>korak po korak</em></h2>
	<p class="wspb__p wspb__c">Toplina je prvi izbor kod grčeva s razlogom. Evo što toplina radi u tijelu i zašto je NORIKS WarmBelt spaja s nježnom masažom.</p>
	<div class="wspb__grid wspb__g4">
		<?php
		$pb_t = array(
			array( 'toplina', 'Ugodna toplina', 'Toplina ide duboko', 'Pojas grije donji dio trbuha ili leđa kroz 5 razina topline do 65 °C i drži toplinu satima.' ),
			array( 'misic', 'Napeti mišići', 'Mišići se opuštaju', 'Toplina pomaže da se napeti, stegnuti mišići opuste – kao termofor, ali bez hlađenja.' ),
			array( 'krv', 'Cirkulacija', 'Protok krvi raste', 'Toplina širi male krvne žile blizu površine, pa više tople krvi dolazi u to područje. Otud onaj ugodan, smiren osjećaj.' ),
			array( 'val', 'Nježna masaža', 'Masaža povrh topline', 'Odaberite način masaže za umirujući, ritmičan osjećaj povrh topline – nešto što termofor ne može.' ),
		);
		foreach ( $pb_t as $i => $t ) {
			echo '<div class="wspb__k wspb__k--l"><div class="wspb__kh"><span class="wspb__ki">' . $pb_svg( $pb_ik[ $t[0] ], 26 ) . '</span><span class="wspb__st">' . ( $i + 1 ) . '</span></div><span class="wspb__oz">' . esc_html( $t[1] ) . '</span><strong class="wspb__nm">' . esc_html( $t[2] ) . '</strong><p>' . esc_html( $t[3] ) . '</p></div>';
		}
		?>
	</div>
	<p class="wspb__nap">Svako tijelo je drugačije. NORIKS WarmBelt je uređaj za udobnost, a ne medicinski tretman.</p>
</div></section>

<section class="wspb__s"><div class="wspb__v wspb__dva">
	<div class="wspb__media"><img src="<?php echo esc_url( $pb_u . 'noriks-periodbelt-tesko-dani.webp' ); ?>" alt="Žena se opušta na kauču s NORIKS WarmBelt grijaćim pojasom" decoding="async"></div>
	<div>
		<div class="wspb__kicker">Za najteže dane</div>
		<h2 class="wspb__h2">Njezini najteži dani, <em>malo lakši.</em></h2>
		<p class="wspb__p">Ugodna toplina i nježna masaža u jednom bežičnom pojasu – da loš dan ne mora biti izgubljen dan.</p>
		<ul class="wspb__al">
			<li><span class="wspb__ki wspb__ki--s"><?php echo $pb_svg( $pb_ik['toplina'] ); ?></span><div><strong>Dosta vam je termofora?</strong><span>Pojas ostaje topao satima – bez kuhala, bez punjenja i bez hlađenja nakon 20 minuta.</span></div></li>
			<li><span class="wspb__ki wspb__ki--s"><?php echo $pb_svg( $pb_ik['list'] ); ?></span><div><strong>Želite nešto osim tableta?</strong><span>Udobnost bez lijekova – ugodna toplina i nježna masaža kad god zatreba.</span></div></li>
			<li><span class="wspb__ki wspb__ki--s"><?php echo $pb_svg( $pb_ik['torba'] ); ?></span><div><strong>Ne možete uzeti slobodan dan?</strong><span>Bežičan i dovoljno tanak da se nosi ispod odjeće na poslu, u školi ili s prijateljicama.</span></div></li>
			<li><span class="wspb__ki wspb__ki--s"><?php echo $pb_svg( $pb_ik['srce'] ); ?></span><div><strong>Teško vam je gledati je kako pati?</strong><span>Bol ne možete ukloniti, ali joj možete dati nešto što te dane čini lakšima.</span></div></li>
		</ul>
	</div>
</div></section>

<section class="wspb__s wspb__s--bg"><div class="wspb__v">
	<div class="wspb__kicker wspb__c">Još razmišljate?</div>
	<h2 class="wspb__h2 wspb__c">Pročitajte <em>njihova iskustva</em></h2>
	<p class="wspb__p wspb__c">Ocjena 4,8 od 1.081 recenzije kupaca.</p>
	<div class="wspb__grid wspb__kar3">
		<?php
		$pb_m2 = array(
			array( 'Kći kaže da je fantastičan', 'Ni sam nisam bio siguran – ali kći kaže da je fantastičan. Hvala!', 'Danijel' ),
			array( 'Bila sam skeptična, ali stvarno je dobar!', 'Bila sam jako skeptična, ali iskreno sam vrlo zadovoljna. Uzela sam set od 2 jer imam bolove u leđima i endometriozu. Toplina je opuštajuća i umirujuća, brzo se zagrije, a mekana tkanina na dijelu uz kožu je lijep detalj. Zaobljenje uređaja savršeno pokriva područje.', 'Freja' ),
			array( 'Opet se osjećam kao čovjek', 'Odličan proizvod. Imam endometriozu i ovi grijaći pojasevi pomogli su mi da se opet osjećam kao čovjek. Nevjerojatno je kako brzo donose olakšanje i umiruju cijelo područje zdjelice.', 'Klara' ),
			array( 'Djevojci je puno bolje', 'Jako dobar, djevojka se osjeća puno bolje kad ga koristi i sretna je s njim.', 'Tomislav' ),
			array( 'Šteta što ga nisam kupila ranije', 'Bolne menstruacije imam od tinejdžerskih dana i mislila sam da je ovo samo još jedna sprava. Nakon nekoliko ciklusa ne mogu zamisliti da se vratim na tablete i termofor svaki mjesec.', 'Hana' ),
		);
		foreach ( $pb_m2 as $m ) {
			echo '<div class="wspb__rk">' . $pb_zv . '<strong>' . esc_html( $m[0] ) . '</strong><p>' . esc_html( $m[1] ) . '</p><span class="wspb__ime"><i class="wspb__av">' . esc_html( mb_substr( $m[2], 0, 1 ) ) . '</i>' . esc_html( $m[2] ) . ' <small>' . $pb_svg( $pb_ik['stit'], 14 ) . ' Provjereni kupac</small></span></div>';
		}
		?>
	</div>
</div></section>

<section class="wspb__s"><div class="wspb__v">
	<div class="wspb__kicker wspb__c">Usporedba</div>
	<h2 class="wspb__h2 wspb__c">Zašto odabrati <em>NORIKS WarmBelt</em></h2>
	<p class="wspb__p wspb__c">Nije svako ublažavanje menstrualnih bolova isto. Evo po čemu se razlikuje.</p>
	<div class="wspb__tw"><table class="wspb__tab">
		<thead><tr><th>Usporedba</th><th class="wspb__nas">NORIKS WarmBelt</th><th>Drugi pripomoći</th></tr></thead>
		<tbody>
			<?php
			foreach ( array( 'Udobnost bez lijekova', 'Ciljana toplina do 65 °C', 'Više načina masaže', 'Bez ljepljivih gel jastučića za zamjenu', 'Bez električnih impulsa i udara', '30 dana za povrat novca' ) as $r ) {
				echo '<tr><td class="wspb__nas">' . esc_html( $r ) . '</td><td class="wspb__nas wspb__c"><span class="wspb__da">✓</span></td><td class="wspb__c"><span class="wspb__ne">✕</span></td></tr>';
			}
			?>
		</tbody>
	</table></div>
</div></section>

<section class="wspb__s wspb__s--bg npg-s"><?php $npg = array( 'izdelek' => 'NORIKS WarmBelt', 'barva' => '#e07a7a' ); include __DIR__ . '/noriks-pogoji.php'; ?></section>

</div>
<style>
.wspb{color:#1c1c1c;font-family:inherit}
.wspb__s{padding:72px 0;background:#fff}.wspb__s.wspb__s--bg{background:#fbefee}
.wspb__s--traka{padding:30px 0}
.wspb__v{width:100%;max-width:1240px;margin:0 auto;padding:0 24px;box-sizing:border-box}
.wspb__c{text-align:center}
.wspb__kicker{display:inline-flex;align-items:center;gap:10px;font-size:13px;letter-spacing:1.4px;text-transform:uppercase;color:#b54c56;margin:0 0 10px;font-weight:800}
.wspb__kicker::before{content:"";width:26px;height:2px;background:#e07a7a;border-radius:2px}
.wspb__kicker.wspb__c{display:flex;justify-content:center}
.wspb__h2{font-size:clamp(26px,3vw,36px);font-weight:800;line-height:1.2;margin:0 0 16px;color:#1f2340}.wspb__h2 em{font-style:italic;color:#b54c56}
.wspb__p{font-size:16px;line-height:1.65;color:#333;margin:0 0 14px}
.wspb__p.wspb__c{max-width:none}
.wspb__nap{font-size:13.5px;color:#777;text-align:center;margin:22px 0 0}
.wspb__trak{display:grid;grid-template-columns:repeat(3,1fr)}
.wspb__tc{display:flex;align-items:center;justify-content:center;gap:12px;padding:6px 14px;border-left:1px solid rgba(0,0,0,.08)}.wspb__tc:first-child{border-left:0}
.wspb__tc strong{display:block;font-size:15.5px;font-weight:800;color:#1f2340;line-height:1.25}.wspb__tc span{font-size:13.5px;color:#666}
.wspb__ti{flex:0 0 46px;width:46px;height:46px;border-radius:50%;background:#f6d6d6;color:#b54c56!important;display:flex;align-items:center;justify-content:center}
.wspb__grid{display:grid;gap:22px;margin-top:26px}
.wspb__g3{grid-template-columns:repeat(3,1fr)}.wspb__g4{grid-template-columns:repeat(4,1fr)}
.wspb__k{background:#fff;border-radius:16px;padding:28px 26px;text-align:center;box-shadow:0 8px 24px rgba(150,60,70,.10);transition:transform .2s,box-shadow .2s}
.wspb__k:hover{transform:translateY(-3px);box-shadow:0 14px 30px rgba(150,60,70,.16)}
.wspb__k--l{text-align:left}
.wspb__kh{position:relative;display:inline-block;margin:0 0 14px}
.wspb__ki{width:56px;height:56px;border-radius:50%;background:#f6d6d6;border:1.5px solid #e07a7a;color:#b54c56;display:inline-flex;align-items:center;justify-content:center;box-sizing:border-box}
.wspb__k--l>.wspb__ki{margin:0 0 14px}
.wspb__ki--s{flex:0 0 46px;width:46px;height:46px}
.wspb__st{position:absolute;right:-10px;top:-6px;width:28px;height:28px;border-radius:50%;background:#e07a7a;color:#fff;font-weight:800;font-size:14px;display:flex;align-items:center;justify-content:center;box-shadow:0 4px 10px rgba(0,0,0,.15)}
.wspb__oz{display:block;font-size:13px;letter-spacing:1px;text-transform:uppercase;font-weight:800;color:#b54c56;margin:0 0 4px}
.wspb__nm{font-size:18px;font-weight:800;margin:0 0 8px;display:block;color:#1f2340}
.wspb__k p{margin:0;font-size:15.5px;line-height:1.55;color:#333}
.wspb__izv{display:block;margin-top:14px;font-size:13px;color:#888;font-style:italic}
.wspb__rf{background:#fff;border-radius:16px;overflow:hidden;box-shadow:0 8px 24px rgba(150,60,70,.10);display:flex;flex-direction:column}
.wspb__rfm img{width:100%;aspect-ratio:1/1;object-fit:cover;display:block}
.wspb__rft{padding:20px 22px;display:flex;flex-direction:column;flex:1}
.wspb__rft p{font-size:15px;line-height:1.6;color:#333;margin:0 0 14px;flex:1}
.wspb__zv{color:#f5a623;letter-spacing:2px;font-size:16px;display:block;margin:0 0 10px}
.wspb__ime{display:flex;align-items:center;flex-wrap:wrap;gap:8px;font-weight:800;font-size:14.5px;color:#1f2340}
.wspb__ime small{display:inline-flex;align-items:center;gap:4px;font-weight:700;color:#b54c56;font-size:13px}
.wspb__av{display:inline-flex;align-items:center;justify-content:center;width:34px;height:34px;border-radius:50%;background:#f6d6d6;color:#b54c56;font-style:normal;font-weight:800}
.wspb__rk{background:#fff;border-radius:16px;padding:24px 30px;box-shadow:0 8px 24px rgba(150,60,70,.10);display:flex;flex-direction:column}
.wspb__rk strong{font-size:17px;font-weight:800;color:#1f2340;margin:0 0 6px}.wspb__rk p{font-size:15.5px;line-height:1.6;color:#333;margin:0 0 16px;flex:1}
.wspb__dva{display:grid;grid-template-columns:1fr 1fr;gap:56px;align-items:center}.wspb__dva>div{min-width:0}
.wspb__media{border-radius:18px;overflow:hidden;box-shadow:0 14px 36px rgba(150,60,70,.16);aspect-ratio:4/5}
.wspb__media img{width:100%;height:100%;object-fit:cover;display:block}
.wspb__al{list-style:none;margin:8px 0 0;padding:0;display:flex;flex-direction:column;gap:16px}
.wspb__al li{display:flex;gap:14px;align-items:flex-start;list-style:none;margin:0}
.wspb__al strong{display:block;font-size:16.5px;font-weight:800;color:#1f2340;margin:0 0 3px}.wspb__al span{font-size:15px;line-height:1.5;color:#444}
.wspb__tw{overflow-x:auto;border-radius:16px;box-shadow:0 8px 24px rgba(150,60,70,.10);background:#fff;margin-top:26px}
.wspb__tab{width:100%;border-collapse:collapse;font-size:15.5px;margin:0;min-width:520px}
.wspb__tab th{background:#1f2340!important;color:#fff!important;font-weight:800;padding:16px 14px;text-align:center;border:0}
.wspb__tab th:first-child{text-align:left}
.wspb__tab th.wspb__nas{background:#e07a7a!important}
.wspb__tab td{padding:14px 16px;border:0;border-bottom:1px solid #f4dede;color:#333}
.wspb__tab td.wspb__nas{background:#fff8f7;font-weight:700;color:#1f2340}.wspb__tab td.wspb__c{text-align:center}
.wspb__tab tbody tr:last-child td{border-bottom:0}
.wspb__da,.wspb__ne{display:inline-flex;width:26px;height:26px;border-radius:50%;align-items:center;justify-content:center;font-size:14px;font-weight:800}
.wspb__da{background:#e07a7a;color:#fff}.wspb__ne{background:#eee;color:#999}
.wspb__karw{position:relative;padding:0 60px}
.wspb__kar3{grid-auto-flow:column;grid-template-columns:none;grid-auto-columns:calc((100% - 44px)/3);overflow-x:auto;scroll-snap-type:x mandatory;scrollbar-width:none}
.wspb__kar3::-webkit-scrollbar{display:none}.wspb__kar3>*{scroll-snap-align:start}
.wspb__pus{position:absolute;top:50%;transform:translateY(-50%);width:44px;height:44px;border-radius:50%;border:0;background:#fff;box-shadow:0 4px 14px rgba(0,0,0,.18);font-size:24px;line-height:1;color:#1f2340;cursor:pointer;z-index:2}
.wspb__pus--l{left:0}.wspb__pus--d{right:0}
@media (max-width:1024px){.wspb__g4:not(.wspb__kar){grid-template-columns:repeat(2,1fr)}.wspb__kar{grid-template-columns:repeat(2,1fr)}}
@media (max-width:860px){
.wspb__s{padding:48px 0}.wspb__s--traka{padding:24px 0}
.wspb__trak{grid-template-columns:1fr;gap:14px}.wspb__tc{border-left:0;justify-content:flex-start}
.wspb__dva{grid-template-columns:minmax(0,1fr);gap:26px}
.wspb__g3{grid-template-columns:1fr}
.wspb__kar3{grid-auto-columns:84%;align-items:start}.wspb__pus{display:none}.wspb__karw{padding:0}.wspb__kar3 .wspb__rk p{flex:none}
.wspb__kar{grid-template-columns:none;grid-auto-flow:column;grid-auto-columns:80%;overflow-x:auto;scroll-snap-type:x mandatory;scrollbar-width:none;padding-bottom:6px}
.wspb__kar::-webkit-scrollbar{display:none}.wspb__kar>*{scroll-snap-align:start}
}
@media (max-width:767px){.wspb__v{padding:0 16px}}
@media (max-width:560px){.wspb__h2{font-size:25px}.wspb__g4:not(.wspb__kar){grid-template-columns:1fr}
.wspb__tab{min-width:0;font-size:13.5px;table-layout:fixed}.wspb__tab th,.wspb__tab td{padding:11px 8px}
.wspb__tab th:nth-child(1){width:46%}.wspb__tab th:nth-child(2){width:28%}.wspb__tab th:nth-child(3){width:26%}
.wspb__tab th{font-size:13px;line-height:1.3}.wspb__da,.wspb__ne{width:22px;height:22px;font-size:12px}}
</style>
<script>
(function(){document.querySelectorAll('.wspb__kar3').forEach(function(k){
  var w=document.createElement('div');w.className='wspb__karw';k.parentNode.insertBefore(w,k);w.appendChild(k);
  ['l','d'].forEach(function(s){var b=document.createElement('button');b.type='button';b.className='wspb__pus wspb__pus--'+s;b.setAttribute('aria-label',s==='l'?'Prethodno':'Sljedeće');b.textContent=s==='l'?'‹':'›';
    b.addEventListener('click',function(){var c=k.firstElementChild;var d=c?c.getBoundingClientRect().width+22:300;k.scrollBy({left:s==='l'?-d:d,behavior:'smooth'});});w.appendChild(b);});
});})();
</script>
