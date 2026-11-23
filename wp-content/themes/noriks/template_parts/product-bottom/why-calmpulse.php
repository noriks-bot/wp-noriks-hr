<?php
/**
 * NORIKS CalmPulse (orto-calmpulse) - TENS uredaj s grijanjem za menstrualne bolove - why sekcije po natancni strukturi originala
 * (myoovi.co.uk/products/myoovi-period-pain-relief-device-2-0).
 *
 * STRUKTURA ORIGINALA:
   0. "As Seen In" - trak logotipov medijev - tuje znamke, pri nas izpusceno
   1. harmonika "How it works" + "Features & Benefits" (6 alinej) + "What's in the box" - pri nas slika levo, tekst desno (kako djeluje, 6 prednosti z ikonami, sadrzaj paketa)
   2. trak 3 prednosti (Free Tracked Delivery / 60 Day Risk-Free Trial / One Year Warranty) - pri nas 3 kartice z ikono: besplatna dostava iznad 70 €, 30 dana za povrat, placanje pouzecem
   3. tekst levo + video desno ("For women who need instant pain relief") - pri nas isto, video lokaliziran (HR napisi, NORIKS namesto znamke)
   4. "Backed by science, loved by you" - drsnik 6 mnenj kupcev - pri nas 6 kartic mnenj v mrezi 3 v vrsti (mobil karusel)
   5. "Get the sensation" - slika levo + 3 tezave (Painkillers / Bed-bound cramps / Cancelling plans) - pri nas slika levo, 3 tezave z ikonami desno
   6. "Meet your discreet kit" - uredaj na sredini, 6 lastnosti okoli (3 levo, 3 desno) - pri nas mreza: 3 lastnosti | uredaj | 3 lastnosti
   7. "How does it work?" - 4 koraki z ilustracijami - pri nas 4 kartice s stevilko koraka in ilustracijo
   8. "How will it feel?" - slika + tekst - pri nas slika desno, tekst levo
   9. "Customer Reviews" + "FAQ" - pri nas mnenja v reviews.php (auto_reviews/HR_calmpulse.php) in FAQ v zavihku Informacije o proizvodu (FAQ_HR_calmpulse.php)
  10. "Unite with 1000's of women" - mreza 10 fotografij kupk - pri nas mreza 10 fotografij (5 v vrsti, mobil 2)
  11. "As Seen In" (ponovno) - izpusceno
   Zakljucek: NORIKS pogoji. Black Friday trak, koda za popust, 60-dnevno jamstvo in enoletna garancija izpusceni (pri nas NORIKS pogoji).
 * SLIKE: /img/calmpulse/noriks-calmpulse-galerija-05.webp, -olaksanje.webp, -uredaj.webp, -osjecaj.webp, -korak-1..4.webp, -kupke-01..10.webp (napisi/znamke urejeni s Higgsfieldom)
 * VIDEI: /img/calmpulse/noriks-calmpulse-video-1.mp4 (+ poster .jpg) - napisi prevedeni v HR (ffmpeg overlay), znamka -> NORIKS
 * BARVA ORIGINALA: #9fd8dc (svetlo turkizna - barva uredaja in embalaze na originalu); svetel ton za --bg #edf7f7, akcent #2b8a90
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
$cp_u  = get_template_directory_uri() . '/img/calmpulse/';
$cp_ik = array(
	'val'     => '<path d="M2 12h3l2-5 3 10 3-12 3 9 2-2h4"/>',
	'toplina' => '<path d="M8 4c-1.5 2 1.5 3.5 0 6M12 4c-1.5 2 1.5 3.5 0 6M16 4c-1.5 2 1.5 3.5 0 6"/><path d="M4 14h16v2a4 4 0 0 1-4 4H8a4 4 0 0 1-4-4z"/>',
	'list'    => '<path d="M7 20c-2-3-2-9 3-13 3-2.5 8-3 10-3 0 2-.5 7-3 10-4 5-10 5-13 3"/><path d="M5 19c3-4 6-7 10-10"/>',
	'bezica'  => '<path d="M5 12.5a10 10 0 0 1 14 0"/><path d="M8 15.5a6 6 0 0 1 8 0"/><circle cx="12" cy="19" r="1.2"/>',
	'baterija'=> '<rect x="3" y="7" width="16" height="10" rx="2.5"/><path d="M21 10.5v3"/><path d="M6.5 10v4M9.5 10v4M12.5 10v4"/>',
	'stit'    => '<path d="M12 3l7 3v5c0 4.5-3 8-7 10-4-2-7-5.5-7-10V6z"/><path d="M9 12l2 2 4-4"/>',
	'kamion'  => '<path d="M3 6h11v9H3z"/><path d="M14 9h4l3 3v3h-7z"/><circle cx="7" cy="17.5" r="1.8"/><circle cx="17" cy="17.5" r="1.8"/>',
	'povrat'  => '<path d="M4 12a8 8 0 1 0 2.4-5.7"/><path d="M4 4v4.5h4.5"/><path d="M12 8v4l2.6 2"/>',
	'novac'   => '<rect x="2.5" y="6" width="19" height="12" rx="2"/><circle cx="12" cy="12" r="2.6"/><path d="M6 9.5v5M18 9.5v5"/>',
	'tableta' => '<rect x="3" y="8.5" width="18" height="7" rx="3.5" transform="rotate(-35 12 12)"/><path d="M9.5 8.5l5 7"/>',
	'krevet'  => '<path d="M3 18V7"/><path d="M3 14h18v4"/><path d="M21 14v-2a3 3 0 0 0-3-3h-7v5"/><circle cx="7" cy="11" r="1.8"/>',
	'kalendar'=> '<rect x="3.5" y="5" width="17" height="15" rx="2.5"/><path d="M3.5 10h17M8 3v4M16 3v4"/><path d="M9.5 13.5l5 4M14.5 13.5l-5 4"/>',
	'list2'   => '<path d="M12 21c-5-3-8-6.5-8-11a4.5 4.5 0 0 1 8-2.8A4.5 4.5 0 0 1 20 10c0 4.5-3 8-8 11z"/>',
	'udobno'  => '<path d="M12 3c2 3 6 4 6 9a6 6 0 0 1-12 0c0-5 4-6 6-9z"/>',
	'skala'   => '<path d="M4 20V14M9 20V10M14 20V7M19 20V4"/>',
	'munja'   => '<path d="M13 3L5 14h6l-1 7 8-11h-6z"/>',
	'oko'     => '<path d="M2 12s3.5-7 10-7 10 7 10 7-3.5 7-10 7S2 12 2 12z"/><circle cx="12" cy="12" r="3"/><path d="M4 4l16 16"/>',
	'kutija'  => '<path d="M3.5 7.5L12 3l8.5 4.5v9L12 21l-8.5-4.5z"/><path d="M3.5 7.5L12 12l8.5-4.5M12 12v9"/>',
	'da'      => '<path d="M5 12.5l4.5 4.5L19 7.5"/>',
);
$cp_svg = function ( $d, $s = 24 ) {
	return '<svg viewBox="0 0 24 24" width="' . (int) $s . '" height="' . (int) $s . '" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">' . $d . '</svg>';
};
?>
<div class="wscp">

<section class="wscp__s wscp__s--bg"><div class="wscp__v wscp__dva">
	<div class="wscp__media"><img src="<?php echo esc_url( $cp_u . 'noriks-calmpulse-galerija-05.webp' ); ?>" alt="NORIKS CalmPulse uređaj na donjem dijelu leđa" decoding="async"></div>
	<div>
		<div class="wscp__kicker">Kako djeluje</div>
		<h2 class="wscp__h2">Impulsi i toplina – <em>dvostruko olakšanje</em> menstrualnih grčeva</h2>
		<p class="wscp__p">NORIKS CalmPulse napravljen je da brzo zaustavi menstrualne grčeve. Spaja provjerenu <strong>TENS tehnologiju</strong> s nježnom <strong>terapijom toplinom</strong> – mišići se opuštaju, a signali boli blokiraju se prije nego što stignu do mozga.</p>
		<p class="wscp__p">Zamislite živce kao vrata za bol: uređaj šalje sitne impulse koji ta vrata zatvaraju i smanjuju signale boli koje mozak prima. Dodatna toplina još više smiruje grčeve i donosi brzo, ugodno olakšanje u nekoliko minuta.</p>
		<ul class="wscp__ft">
			<?php
			foreach ( array(
				array( 'val', 'Dvostruka terapija', 'TENS + toplina za brže i dublje olakšanje.' ),
				array( 'munja', 'Brzi rezultati', 'Primjetno olakšanje već za nekoliko trenutaka.' ),
				array( 'list', '100 % bez lijekova', 'Bez lijekova i bez kemikalija.' ),
				array( 'bezica', 'Bežičan i prenosiv', 'Nosite ga bilo gdje – nitko neće primijetiti.' ),
				array( 'baterija', 'Dugotrajna baterija', 'Do 10 sati olakšanja na jedno punjenje.' ),
				array( 'stit', 'Provjerena tehnologija', 'TENS se godinama koristi za ublažavanje boli.' ),
			) as $f ) {
				echo '<li><span class="wscp__fi">' . $cp_svg( $cp_ik[ $f[0] ], 20 ) . '</span><span><strong>' . esc_html( $f[1] ) . '</strong> ' . esc_html( $f[2] ) . '</span></li>';
			}
			?>
		</ul>
		<div class="wscp__box">
			<span class="wscp__fi"><?php echo $cp_svg( $cp_ik['kutija'], 20 ); ?></span>
			<div><strong>Što je u paketu?</strong> NORIKS CalmPulse uređaj · 2 jastučića u obliku leptira · USB-C kabel za punjenje · vrećica za spremanje · upute</div>
		</div>
	</div>
</div></section>

<section class="wscp__s"><div class="wscp__v">
	<div class="wscp__kicker wscp__c">Kupujte bez brige</div>
	<h2 class="wscp__h2 wscp__c">Isprobajte ga <em>bez rizika</em></h2>
	<div class="wscp__grid wscp__g3">
		<?php
		foreach ( array(
			array( 'kamion', 'Besplatna dostava', 'Za sve narudžbe iznad 70 € – brzo i sigurno do vaših vrata.' ),
			array( 'povrat', '30 dana za povrat', 'Isprobajte uređaj kroz svoj ciklus. Ako vam ne odgovara, vratite ga.' ),
			array( 'novac', 'Plaćanje pouzećem', 'Platite tek kad paket stigne – bez kartice i bez unaprijed plaćanja.' ),
		) as $k ) {
			echo '<div class="wscp__k"><span class="wscp__ki">' . $cp_svg( $cp_ik[ $k[0] ], 26 ) . '</span><h3>' . esc_html( $k[1] ) . '</h3><p>' . esc_html( $k[2] ) . '</p></div>';
		}
		?>
	</div>
</div></section>

<section class="wscp__s wscp__s--bg"><div class="wscp__v wscp__dva wscp__dva--rev">
	<div class="wscp__media wscp__media--sq"><video autoplay muted loop playsinline webkit-playsinline preload="metadata" poster="<?php echo esc_url( $cp_u . 'noriks-calmpulse-video-1.jpg' ); ?>" aria-label="NORIKS CalmPulse – bežičan uređaj s funkcijom grijanja"><source src="<?php echo esc_url( $cp_u . 'noriks-calmpulse-video-1.mp4' ); ?>" type="video/mp4"></video></div>
	<div>
		<div class="wscp__kicker">Za žene kojima treba brzo olakšanje</div>
		<h2 class="wscp__h2">Zbogom tablete, grčevi i <em>otkazani planovi</em></h2>
		<p class="wscp__p">Dobrodošli u NORIKS CalmPulse – naš najnapredniji uređaj dosad. Spaja provjerenu TENS tehnologiju s nježnom terapijom toplinom i donosi brzo olakšanje menstrualne boli bez lijekova.</p>
		<p class="wscp__p">Impulsi blokiraju signale boli, a toplina opušta mišiće. Uređaj je bežičan i diskretan, pa ga možete nositi ispod odjeće – kod kuće, na poslu ili dok ste s prijateljicama.</p>
		<p class="wscp__z">Opušteno, ugodno – i pod kontrolom.</p>
	</div>
</div></section>

<section class="wscp__s"><div class="wscp__v">
	<div class="wscp__kicker wscp__c">Iskustva kupaca</div>
	<h2 class="wscp__h2 wscp__c">Ocjena <em>4,8 / 5</em> – voljen od tisuća žena</h2>
	<p class="wscp__p wscp__c">Više od 120.000 kupaca vjeruje NORIKS-u. Evo što kažu one koje koriste CalmPulse.</p>
	<div class="wscp__rv">
		<?php
		foreach ( array(
			array( 'Klara E.', 'Mali i praktičan uređaj', 'Neke mjesece imam bolove zbog kojih ne mogu ustati iz kreveta. S ovim uređajem mogu nastaviti sa svojim danom. Odlična usluga.' ),
			array( 'Josip H.', 'Iznenađen sam', 'Kupio sam ga za suprugu i jako sam zadovoljan olakšanjem koje joj daje. Preporučit ću ga svima koje znam.' ),
			array( 'Marija J.', 'Mijenja život!', 'Odličan proizvod i odlična korisnička podrška. Oduševljena sam, hvala vam.' ),
			array( 'Sara V.', 'Odlično!', 'Menstrualni bolovi su mi jako jaki, a ovo mi pomaže da normalno odradim dan na poslu. Obožavam ga.' ),
			array( 'Nataša B.', 'Učinkovit proizvod', 'Jako mi pomaže kod bolova, a toliko je diskretan da ga nosim i na poslu ispod odjeće.' ),
			array( 'Sofija K.', 'Spas!', 'Bolovi su mi gotovo nestali otkad ga koristim. Sigurno ću naručiti još jastučića!' ),
		) as $r ) {
			echo '<div class="wscp__r"><div class="wscp__rh"><span class="wscp__av">' . esc_html( mb_substr( $r[0], 0, 1 ) ) . '</span><div><strong>' . esc_html( $r[0] ) . '</strong><span class="wscp__ver">' . $cp_svg( $cp_ik['da'], 12 ) . ' Provjereni kupac</span></div><span class="wscp__zv">★★★★★</span></div><h3>' . esc_html( $r[1] ) . '</h3><p>' . esc_html( $r[2] ) . '</p></div>';
		}
		?>
	</div>
</div></section>

<section class="wscp__s wscp__s--bg"><div class="wscp__v wscp__dva">
	<div class="wscp__media"><img src="<?php echo esc_url( $cp_u . 'noriks-calmpulse-olaksanje.webp' ); ?>" alt="Žena u kuhinji nosi NORIKS CalmPulse na trbuhu" decoding="async"></div>
	<div>
		<div class="wscp__kicker">Osjetite razliku</div>
		<h2 class="wscp__h2">Do 90 % žena ima <em>menstrualne bolove</em></h2>
		<p class="wscp__p">Isprobajte NORIKS CalmPulse i osjetite razliku dvostruke terapije – impulsa i topline – u istom malom uređaju.</p>
		<div class="wscp__pr">
			<?php
			foreach ( array(
				array( 'tableta', 'Tablete vas iscrpljuju?', 'Zaslužujete više od čekanja da tableta počne djelovati. CalmPulse donosi brzo olakšanje bez lijekova, uz TENS i toplinu – provjereno i prirodno.' ),
				array( 'krevet', 'Grčevi vas prikuju za krevet?', 'Mislite da mjesečnom ciklusu boli nema kraja – ali ima. Jastučići pokrivaju veću površinu, opuštaju mišiće i blokiraju signale boli. Olakšanje osjetite za nekoliko minuta.' ),
				array( 'kalendar', 'Opet otkazujete planove?', 'Otkazivanje planova ili uzimanje slobodnog dana nije rješenje. CalmPulse je bežičan, diskretan i stane ispod odjeće – slobodni ste živjeti, kretati se i osjećati se najbolje.' ),
			) as $p ) {
				echo '<div class="wscp__pi"><span class="wscp__fi">' . $cp_svg( $cp_ik[ $p[0] ], 20 ) . '</span><div><h3>' . esc_html( $p[1] ) . '</h3><p>' . esc_html( $p[2] ) . '</p></div></div>';
			}
			?>
		</div>
	</div>
</div></section>

<section class="wscp__s"><div class="wscp__v">
	<div class="wscp__kicker wscp__c">Upoznajte svoj komplet</div>
	<h2 class="wscp__h2 wscp__c">Diskretan NORIKS CalmPulse – <em>zaustavite menstrualnu bol</em></h2>
	<div class="wscp__kit">
		<?php
		$cp_kit = array(
			array( 'list2', '100 % bez lijekova', 'Bez tableta, bez nuspojava, potpuno prirodno.' ),
			array( 'udobno', 'Ugodan za nošenje', 'Maksimalan dodir s kožom za maksimalno olakšanje.' ),
			array( 'skala', '30 razina jačine', 'Od nježnog do snažnog olakšanja.' ),
			array( 'munja', 'Brzo olakšanje', 'TENS tehnologija za brzo djelovanje.' ),
			array( 'toplina', 'Nova funkcija grijanja', 'Umirujuća toplina dodatno smanjuje nelagodu.' ),
			array( 'oko', 'Diskretan i prenosiv', 'Bez žica i bez muke.' ),
		);
		$cp_kol = function ( $items ) use ( $cp_svg, $cp_ik ) {
			$o = '<div class="wscp__kc">';
			foreach ( $items as $f ) { $o .= '<div class="wscp__kf"><span class="wscp__ki">' . $cp_svg( $cp_ik[ $f[0] ], 24 ) . '</span><div><h3>' . esc_html( $f[1] ) . '</h3><p>' . esc_html( $f[2] ) . '</p></div></div>'; }
			return $o . '</div>';
		};
		echo $cp_kol( array_slice( $cp_kit, 0, 3 ) );
		echo '<div class="wscp__kimg"><img src="' . esc_url( $cp_u . 'noriks-calmpulse-uredaj.webp' ) . '" alt="NORIKS CalmPulse uređaj s jastučićem u obliku leptira" decoding="async"></div>';
		echo $cp_kol( array_slice( $cp_kit, 3, 3 ) );
		?>
	</div>
</div></section>

<section class="wscp__s wscp__s--bg"><div class="wscp__v">
	<div class="wscp__kicker wscp__c">Korak po korak</div>
	<h2 class="wscp__h2 wscp__c">Kako djeluje <em>NORIKS CalmPulse?</em></h2>
	<div class="wscp__grid wscp__g4">
		<?php
		foreach ( array(
			array( 1, 'Signali boli', 'Mozak prima signale iz maternice koji javljaju jaku bol.' ),
			array( 2, 'Postavite uređaj', 'Stavite CalmPulse na trbuh (ili na mjesto boli). Kroz jastučić šalje nježne impulse i umirujuću toplinu.' ),
			array( 3, 'Blokirajte signale', 'Sitni impulsi sprječavaju da signali boli stignu do mozga, a toplina opušta mišiće.' ),
			array( 4, 'Olakšanje', 'Bol popušta – osjećate se opušteno, ugodno i pod kontrolom.' ),
		) as $k ) {
			echo '<div class="wscp__k wscp__st"><span class="wscp__num">' . (int) $k[0] . '</span><img src="' . esc_url( $cp_u . 'noriks-calmpulse-korak-' . (int) $k[0] . '.webp' ) . '" alt="' . esc_attr( 'Korak ' . $k[0] . ': ' . $k[1] ) . '" decoding="async"><h3>' . esc_html( $k[1] ) . '</h3><p>' . esc_html( $k[2] ) . '</p></div>';
		}
		?>
	</div>
</div></section>

<section class="wscp__s"><div class="wscp__v wscp__dva wscp__dva--rev">
	<div class="wscp__media wscp__media--sq"><img src="<?php echo esc_url( $cp_u . 'noriks-calmpulse-osjecaj.webp' ); ?>" alt="Dvije prijateljice se smiju i nose NORIKS CalmPulse" decoding="async"></div>
	<div>
		<div class="wscp__kicker">Kakav je osjećaj?</div>
		<h2 class="wscp__h2">Kao <em>nježna masaža</em> ispod odjeće</h2>
		<p class="wscp__p">CalmPulse koristi nježne vibracije i umirujuću toplinu koje se osjećaju kao pulsirajuća masaža ispod odjeće.</p>
		<p class="wscp__p">Kad menstrualna bol nestane, možete nastaviti sa svojim danom – naći se s prijateljicama, otići na posao i raditi ono što najviše volite.</p>
		<p class="wscp__p">Bežični, diskretni dizajn znači da nema zapetljanih žica i nema muke – nosite ga bilo gdje, a nećete ni primijetiti da je tu.</p>
		<p class="wscp__z">Vi birate jačinu – od nježne do snažne, u 30 razina.</p>
	</div>
</div></section>

<section class="wscp__s wscp__s--bg"><div class="wscp__v">
	<div class="wscp__kicker wscp__c">Zajednica</div>
	<h2 class="wscp__h2 wscp__c">Pridružite se <em>tisućama žena</em></h2>
	<p class="wscp__p wscp__c">Jedna misija: manje menstrualnih grčeva – prirodno.</p>
	<div class="wscp__ugc">
		<?php
		for ( $i = 1; $i <= 10; $i++ ) {
			echo '<figure><img src="' . esc_url( $cp_u . sprintf( 'noriks-calmpulse-kupke-%02d.webp', $i ) ) . '" alt="Kupac nosi NORIKS CalmPulse uređaj" decoding="async"></figure>';
		}
		?>
	</div>
</div></section>

<section class="wscp__s npg-s"><?php $npg = array( 'izdelek' => 'NORIKS CalmPulse', 'barva' => '#2b8a90' ); include __DIR__ . '/noriks-pogoji.php'; ?></section>

</div>
<style>
.wscp{color:#13282a;font-family:inherit}
.wscp__s{padding:72px 0;background:#fff}.wscp__s.wscp__s--bg{background:#edf7f7}
.wscp__v{width:100%;max-width:1240px;margin:0 auto;padding:0 24px;box-sizing:border-box}
.wscp__c{text-align:center}
.wscp__kicker{display:inline-flex;align-items:center;gap:10px;font-size:13px;letter-spacing:1.4px;text-transform:uppercase;color:#2b8a90;margin:0 0 10px;font-weight:800}
.wscp__kicker::before{content:"";width:26px;height:2px;background:#9fd8dc;border-radius:2px}
.wscp__kicker.wscp__c{display:flex;justify-content:center}
.wscp__h2{font-size:clamp(26px,3vw,36px);font-weight:800;line-height:1.2;margin:0 0 16px;color:#0f2a2c}.wscp__h2 em{font-style:italic;color:#2b8a90}
.wscp__p{font-size:16px;line-height:1.65;color:#3a5052;margin:0 0 14px}
.wscp__z{font-weight:800;font-size:17px;color:#0f2a2c;margin:16px 0 0;padding-left:14px;border-left:3px solid #9fd8dc}
.wscp__dva{display:grid;grid-template-columns:1fr 1fr;gap:56px;align-items:center}.wscp__dva>div{min-width:0}
.wscp__dva--rev>.wscp__media{order:2}
.wscp__media{border-radius:18px;overflow:hidden;box-shadow:0 14px 36px rgba(20,80,85,.14);aspect-ratio:4/5;background:#dcefef;position:relative}
.wscp__media img,.wscp__media video{width:100%;height:100%;object-fit:cover;display:block}
.wscp__media.wscp__media--sq{aspect-ratio:1/1}
.wscp__fi{flex:0 0 38px;width:38px;height:38px;border-radius:50%;background:#dcf0f1;color:#2b8a90;display:inline-flex;align-items:center;justify-content:center}
.wscp__ft{list-style:none;margin:18px 0 0;padding:0;display:grid;grid-template-columns:1fr 1fr;gap:14px 18px}
.wscp__ft li{display:flex;gap:12px;align-items:flex-start;font-size:15px;line-height:1.5;color:#3a5052}
.wscp__ft strong{display:block;color:#0f2a2c;font-size:15.5px}
.wscp__box{display:flex;gap:12px;align-items:flex-start;background:#fff;border-radius:14px;padding:16px 18px;margin-top:20px;font-size:15px;line-height:1.55;color:#3a5052;box-shadow:0 6px 18px rgba(20,80,85,.08)}
.wscp__box strong{color:#0f2a2c}
.wscp__grid{display:grid;gap:22px;margin-top:26px}.wscp__g3{grid-template-columns:repeat(3,1fr)}.wscp__g4{grid-template-columns:repeat(4,1fr)}
.wscp__k{background:#fff;border-radius:16px;padding:30px 26px;text-align:center;box-shadow:0 8px 24px rgba(20,80,85,.10);transition:transform .2s,box-shadow .2s;position:relative}
.wscp__k:hover{transform:translateY(-3px);box-shadow:0 14px 30px rgba(20,80,85,.16)}
.wscp__ki{width:56px;height:56px;border-radius:50%;background:#dcf0f1;border:1.5px solid #9fd8dc;color:#2b8a90;display:inline-flex;align-items:center;justify-content:center;box-sizing:border-box;margin:0 0 12px;flex:0 0 56px}
.wscp__k h3{font-size:18px;font-weight:800;margin:0 0 8px;color:#0f2a2c}
.wscp__k p{margin:0;font-size:15.5px;line-height:1.55;color:#3a5052}
.wscp__st img{width:auto;height:110px;max-width:100%;object-fit:contain;display:block;margin:8px auto 16px}
.wscp__num{position:absolute;top:16px;left:16px;width:34px;height:34px;border-radius:50%;background:#2b8a90;color:#fff;font-weight:800;font-size:15px;display:flex;align-items:center;justify-content:center}
.wscp__rv{display:grid;grid-template-columns:repeat(3,1fr);gap:22px;margin-top:26px;align-items:stretch}
.wscp__r{background:#fff;border-radius:16px;padding:24px;box-shadow:0 8px 24px rgba(20,80,85,.10);min-width:0}
.wscp__rh{display:flex;align-items:center;gap:12px;margin:0 0 12px}
.wscp__rh>div{flex:1;min-width:0}
.wscp__rh strong{display:block;font-size:16px;color:#0f2a2c}
.wscp__av{width:44px;height:44px;border-radius:50%;background:#dcf0f1;color:#2b8a90;font-weight:800;font-size:18px;display:flex;align-items:center;justify-content:center;flex:0 0 44px}
.wscp__ver{display:inline-flex;align-items:center;gap:4px;font-size:12.5px;font-weight:700;color:#2b8a90}
.wscp__ver svg{background:#2b8a90;color:#fff;border-radius:50%;padding:2px}
.wscp__zv{color:#f5b301;letter-spacing:1px;font-size:15px}
.wscp__r h3{font-size:17px;font-weight:800;margin:0 0 6px;color:#0f2a2c}
.wscp__r p{margin:0;font-size:15.5px;line-height:1.55;color:#3a5052}
.wscp__pr{display:flex;flex-direction:column;gap:14px;margin-top:18px}
.wscp__pi{display:flex;gap:14px;align-items:flex-start;background:#fff;border-radius:14px;padding:18px 20px;box-shadow:0 6px 18px rgba(20,80,85,.08)}
.wscp__pi h3{font-size:16.5px;font-weight:800;margin:0 0 4px;color:#0f2a2c}
.wscp__pi p{margin:0;font-size:15px;line-height:1.55;color:#3a5052}
.wscp__kit{display:grid;grid-template-columns:1fr 1.1fr 1fr;gap:32px;align-items:center;margin-top:30px}
.wscp__kc{display:flex;flex-direction:column;gap:18px}
.wscp__kf{display:flex;gap:14px;align-items:center;background:#edf7f7;border-radius:16px;padding:18px 20px}
.wscp__kf .wscp__ki{margin:0;background:#fff}
.wscp__kf h3{font-size:16.5px;font-weight:800;margin:0 0 3px;color:#0f2a2c}
.wscp__kf p{margin:0;font-size:14.5px;line-height:1.5;color:#3a5052}
.wscp__kimg{background:radial-gradient(circle at 50% 50%,#dcf0f1 0,#edf7f7 55%,#fff 72%);border-radius:50%;aspect-ratio:1/1;display:flex;align-items:center;justify-content:center}
.wscp__kimg img{width:86%;height:auto;display:block}
.wscp__ugc{display:grid;grid-template-columns:repeat(5,1fr);gap:14px;margin-top:26px}
.wscp__ugc figure{margin:0;border-radius:14px;overflow:hidden;aspect-ratio:1/1;box-shadow:0 6px 18px rgba(20,80,85,.10);background:#dcefef}
.wscp__ugc img{width:100%;height:100%;object-fit:cover;display:block}
@media (max-width:1024px){.wscp__g4{grid-template-columns:repeat(2,1fr)}.wscp__kit{grid-template-columns:1fr 1fr}.wscp__kimg{grid-column:1/-1;grid-row:1;max-width:360px;margin:0 auto;width:100%}}
@media (max-width:860px){
.wscp__s{padding:48px 0}
.wscp__dva{grid-template-columns:minmax(0,1fr);gap:26px}.wscp__dva--rev>.wscp__media{order:0}
.wscp__g3{grid-template-columns:1fr}
.wscp__rv{grid-auto-flow:column;grid-template-columns:none;grid-auto-columns:84%;overflow-x:auto;scroll-snap-type:x mandatory;scrollbar-width:none;padding-bottom:6px}
.wscp__rv::-webkit-scrollbar{display:none}.wscp__r{scroll-snap-align:start}
.wscp__ugc{grid-template-columns:repeat(2,1fr);gap:10px}
}
@media (max-width:767px){.wscp__v{padding:0 16px}}
@media (max-width:600px){.wscp__ft{grid-template-columns:1fr}.wscp__kit{grid-template-columns:1fr}.wscp__g4{grid-template-columns:1fr}.wscp__h2{font-size:25px}}
</style>
