<?php
/**
 * NORIKS HotHug (orto-hothug) - nosivi termofor - why sekcije po natancni strukturi originala
 * (huggercomfort.com/products/hot-hugger-wearable-hot-water-bottle).
 *
 * STRUKTURA ORIGINALA:
   1. "We're Making Relief.." - 4 videi v vrsti, pod vsakim kratek napis (Quick, Easy & Natural / Soft & Comfortable / Adaptable / On The Go) - pri nas 4 videi v vrsti z ikono in napisom (napisi v videu 3 lokalizirani v HR)
   2. tekoci trak "Try It Risk Free - 60 Day Money Back Guarantee" - pri nas staticen trak 3 prednosti z ikonami (NORIKS pogoji namesto tujega jamstva)
   3. "Feedback We've Had" - 3 mnenja s fotografijami (naslov, 5 zvezdic, besedilo) - pri nas 3 kartice s fotografijami v vrsti (mobil karusel); izdelki "Stocking Stuffers" izpusceni
   4. FAQ - pri nas auto_reviews/FAQ_HR_hothug.php (Informacije o proizvodu)
   5. Customer Reviews - pri nas auto_reviews/HR_hothug.php
   6. "Other Products" - izpusceno (drugi izdelki trgovine)
   Zakljucek: NORIKS pogoji (noriks-pogoji.php).
 * SLIKE: /img/hothug/noriks-hothug-mnenje-1.webp /img/hothug/noriks-hothug-mnenje-2.webp /img/hothug/noriks-hothug-mnenje-3.webp
 * VIDEI: /img/hothug/noriks-hothug-video-1..4.mp4 (+ poster .jpg)
 * BARVA ORIGINALA: #d73814 (oranzno-rdeci poudarki strani in zvezdice, barva termofora; rjavo besedilo #4a3326, ozadje #fffaf5); svetel ton za --bg #fdf1ea, akcent #b02e10
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
$hh_u = get_template_directory_uri() . '/img/hothug/';
$hh_ik = array(
	'kapljica' => '<path d="M12 3s6 6.6 6 11a6 6 0 0 1-12 0c0-4.4 6-11 6-11z"/>',
	'oblak'    => '<path d="M7 18a4 4 0 0 1-.6-8 5.5 5.5 0 0 1 10.6 1.5A3.3 3.3 0 0 1 17 18z"/>',
	'strelice' => '<path d="M4 12h16M8 8l-4 4 4 4M16 8l4 4-4 4"/>',
	'hod'      => '<circle cx="13" cy="4.5" r="1.8"/><path d="M10 21l2-6 3 3v3M8 12l3-4 3 2 3 1M11 8l-1 5"/>',
	'kamion'   => '<path d="M3 6h11v9H3z"/><path d="M14 9h4l3 3v3h-7"/><circle cx="7" cy="17" r="1.8"/><circle cx="17" cy="17" r="1.8"/>',
	'povrat'   => '<path d="M4 12a8 8 0 1 0 2.4-5.7"/><path d="M4 4v4.5h4.5"/>',
	'novac'    => '<rect x="3" y="6" width="18" height="12" rx="2"/><circle cx="12" cy="12" r="2.6"/><path d="M6.5 9.5v5M17.5 9.5v5"/>',
	'stit'     => '<path d="M12 3l7.5 3v5.5c0 4.6-3.2 8.2-7.5 9.5-4.3-1.3-7.5-4.9-7.5-9.5V6z"/><path d="M8.6 12.2l2.4 2.4 4.4-4.6"/>',
);
$hh_svg = function ( $d, $s = 24 ) {
	return '<svg viewBox="0 0 24 24" width="' . (int) $s . '" height="' . (int) $s . '" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">' . $d . '</svg>';
};
$hh_zv = '<span class="whh__zv" aria-label="5 zvjezdica">' . str_repeat( '<svg viewBox="0 0 20 20" width="17" height="17" fill="currentColor" aria-hidden="true" style="display:inline-block;margin-right:2px"><path d="M10 1.5l2.6 5.3 5.9.9-4.3 4.1 1 5.8L10 14.9l-5.2 2.7 1-5.8L1.5 7.7l5.9-.9z"/></svg>', 5 ) . ' <b>5/5</b></span>';
?>
<div class="whh">

<section class="whh__s whh__s--bg"><div class="whh__v">
	<div class="whh__kicker whh__c">Toplina bez truda</div>
	<h2 class="whh__h2 whh__c">Donosimo olakšanje <em>– jednostavno.</em></h2>
	<p class="whh__p whh__c">Napunite termofor, ubacite ga u mekanu navlaku, omotajte je oko struka – i nastavite sa svojim danom. Toplina ostaje uz tijelo, a ruke su slobodne.</p>
	<div class="whh__grid whh__g4 whh__kar">
		<?php
		$hh_v = array(
			array( 'kapljica', 'Brzo, jednostavno i prirodno', 'Malo vruće vode iz kuhala i spremni ste – bez struje i bez punjenja baterije.', 'Punjenje termofora vrućom vodom u kuhinji' ),
			array( 'oblak', 'Mekano i ugodno', 'Navlaka od mekanog plišanog krzna ugodna je na koži i lijepo se priljubi uz tijelo.', 'Mekana plišana navlaka nosivog termofora' ),
			array( 'strelice', 'Prilagodljivo', 'Nosite ga na donjem dijelu leđa, sprijeda na trbuhu ili na gornjem dijelu leđa – gdje vam treba.', 'Nosivi termofor na donjem dijelu leđa, sprijeda i na gornjem dijelu leđa' ),
			array( 'hod', 'Uvijek sa sobom', 'Ne vidi se ispod veste ili dukserice, pa ga možete nositi kod kuće, na poslu ili vani.', 'Nosivi termofor ispod dukserice' ),
		);
		foreach ( $hh_v as $i => $v ) {
			$n = $i + 1;
			echo '<div class="whh__vk"><div class="whh__vm"><video autoplay muted loop playsinline webkit-playsinline preload="metadata" poster="' . esc_url( $hh_u . 'noriks-hothug-video-' . $n . '.jpg' ) . '" aria-label="' . esc_attr( $v[3] ) . '"><source src="' . esc_url( $hh_u . 'noriks-hothug-video-' . $n . '.mp4' ) . '" type="video/mp4"></video></div><div class="whh__vt"><span class="whh__ki whh__ki--s">' . $hh_svg( $hh_ik[ $v[0] ], 22 ) . '</span><div><strong>' . esc_html( $v[1] ) . '</strong><p>' . esc_html( $v[2] ) . '</p></div></div></div>';
		}
		?>
	</div>
</div></section>

<section class="whh__s whh__s--traka"><div class="whh__v"><div class="whh__trak">
	<div class="whh__tc"><span class="whh__ti"><?php echo $hh_svg( $hh_ik['povrat'] ); ?></span><div><strong>Isprobajte bez rizika</strong><span>30 dana za povrat novca</span></div></div>
	<div class="whh__tc"><span class="whh__ti"><?php echo $hh_svg( $hh_ik['kamion'] ); ?></span><div><strong>Besplatna dostava</strong><span>iznad 70 €</span></div></div>
	<div class="whh__tc"><span class="whh__ti"><?php echo $hh_svg( $hh_ik['novac'] ); ?></span><div><strong>Plaćanje pouzećem</strong><span>platite kad paket stigne</span></div></div>
</div></div></section>

<section class="whh__s whh__s--bg"><div class="whh__v">
	<div class="whh__kicker whh__c">Iskustva kupaca</div>
	<h2 class="whh__h2 whh__c">Što nam kupci <em>poručuju</em></h2>
	<p class="whh__p whh__c">Tri poruke koje najbolje opisuju zašto se nosivi termofor više ne vraća u ladicu.</p>
	<div class="whh__grid whh__g3 whh__kar">
		<?php
		$hh_m = array(
			array( 'mnenje-1', 'Izum koji mijenja život', 'Iskreno, bila sam dirnuta kad sam ga prvi put koristila. Imam adenomiozu i endometriozu i dosta patim od grčeva kojima ne pomažu ni lijekovi protiv bolova – obično bih samo gurnula termofor u trenirku i nadala se najboljem. Ovaj termofor savršeno pogađa mjesto grčeva. Najviše volim to što se ne vidi ispod veste, pa mogu imati gotovo normalan dan u uredu. Obožavam ga, svim prijateljicama sam već dosadila pričajući o njemu, a mislim da sam dvije nagovorila da ga kupe!' ),
			array( 'mnenje-2', 'Nevjerojatan proizvod', 'Ovo je stvarno toliko dobro! Iznenadila me kvaliteta materijala – tako je ugodan i mekan. Nosim ga cijeli dan s malim termoforom sprijeda ili straga, ovisno o tome što mi tijelo traži.' ),
			array( 'mnenje-3', 'Oduševljena sam!', 'Nevjerojatan proizvod. Kupila sam ga prije otprilike tjedan dana i doslovno ga od tada nisam skinula! Tako je koristan, pogotovo kad morate obaviti stvari, a trebate nešto što smiruje bol i grčeve kod endometrioze. Toplo preporučujem!' ),
		);
		foreach ( $hh_m as $m ) {
			echo '<div class="whh__rf"><div class="whh__rfm"><img src="' . esc_url( $hh_u . 'noriks-hothug-' . $m[0] . '.webp' ) . '" alt="' . esc_attr( 'Kupac s NORIKS HotHug nosivim termoforom - ' . $m[1] ) . '" decoding="async"></div><div class="whh__rft"><strong class="whh__nm">' . esc_html( $m[1] ) . '</strong>' . $hh_zv . '<p>' . esc_html( $m[2] ) . '</p><span class="whh__ime"><i class="whh__av">' . $hh_svg( $hh_ik['stit'], 16 ) . '</i>Provjereni kupac</span></div></div>';
		}
		?>
	</div>
</div></section>

<section class="whh__s npg-s"><?php $npg = array( 'izdelek' => 'NORIKS HotHug', 'barva' => '#d73814' ); include __DIR__ . '/noriks-pogoji.php'; ?></section>

</div>
<style>
.whh{color:#1c1c1c;font-family:inherit}
.whh__s{padding:72px 0;background:#fff}.whh__s.whh__s--bg{background:#fdf1ea}
.whh__s--traka{padding:30px 0}
.whh__v{width:100%;max-width:1240px;margin:0 auto;padding:0 24px;box-sizing:border-box}
.whh__c{text-align:center}
.whh__kicker{display:inline-flex;align-items:center;gap:10px;font-size:13px;letter-spacing:1.4px;text-transform:uppercase;color:#b02e10;margin:0 0 10px;font-weight:800}
.whh__kicker::before{content:"";width:26px;height:2px;background:#d73814;border-radius:2px}
.whh__kicker.whh__c{display:flex;justify-content:center}
.whh__h2{font-size:clamp(26px,3vw,36px);font-weight:800;line-height:1.2;margin:0 0 16px;color:#4a3326}.whh__h2 em{font-style:italic;color:#d73814}
.whh__p{font-size:16px;line-height:1.65;color:#4f4744;margin:0 0 14px}
.whh__trak{display:grid;grid-template-columns:repeat(3,1fr)}
.whh__tc{display:flex;align-items:center;justify-content:center;gap:12px;padding:6px 14px;border-left:1px solid rgba(0,0,0,.08)}.whh__tc:first-child{border-left:0}
.whh__tc strong{display:block;font-size:15.5px;font-weight:800;color:#4a3326;line-height:1.25}.whh__tc span{font-size:13.5px;color:#6b625e}
.whh__ti{flex:0 0 46px;width:46px;height:46px;border-radius:50%;background:#fbdccf;color:#b02e10!important;display:flex;align-items:center;justify-content:center}
.whh__grid{display:grid;gap:22px;margin-top:26px}
.whh__g3{grid-template-columns:repeat(3,1fr)}.whh__g4{grid-template-columns:repeat(4,1fr)}
.whh__ki{width:56px;height:56px;border-radius:50%;background:#fbdccf;border:1.5px solid #d73814;color:#b02e10;display:inline-flex;align-items:center;justify-content:center;box-sizing:border-box}
.whh__ki--s{flex:0 0 44px;width:44px;height:44px}
.whh__vk{background:#fff;border-radius:16px;overflow:hidden;box-shadow:0 8px 24px rgba(160,60,20,.10);display:flex;flex-direction:column;transition:transform .2s,box-shadow .2s}
.whh__vk:hover{transform:translateY(-3px);box-shadow:0 14px 30px rgba(160,60,20,.16)}
.whh__vm{aspect-ratio:4/5;background:#efe6e0}
.whh__vm video{width:100%;height:100%;object-fit:cover;display:block}
.whh__vt{display:flex;gap:12px;align-items:flex-start;padding:18px 18px 20px;flex:1}
.whh__vt strong{display:block;font-size:16.5px;font-weight:800;color:#4a3326;margin:0 0 4px;line-height:1.3}
.whh__vt p{margin:0;font-size:14.5px;line-height:1.55;color:#4f4744}
.whh__nm{font-size:18px;font-weight:800;margin:0 0 6px;display:block;color:#4a3326}
.whh__rf{background:#fff;border-radius:16px;overflow:hidden;box-shadow:0 8px 24px rgba(160,60,20,.10);display:flex;flex-direction:column}
.whh__rfm img{width:100%;aspect-ratio:1/1;object-fit:cover;display:block}
.whh__rft{padding:22px 24px;display:flex;flex-direction:column;flex:1}
.whh__rft p{font-size:15.5px;line-height:1.6;color:#333;margin:0 0 16px;flex:1}
.whh__zv{color:#d73814;display:flex;align-items:center;margin:0 0 10px}.whh__zv b{margin-left:6px;font-size:14px;color:#4a3326}
.whh__ime{display:flex;align-items:center;gap:8px;font-weight:800;font-size:14.5px;color:#b02e10}
.whh__av{display:inline-flex;align-items:center;justify-content:center;width:32px;height:32px;border-radius:50%;background:#fbdccf;color:#b02e10;font-style:normal}
@media (max-width:1024px){.whh__g4{grid-template-columns:repeat(2,1fr)}}
@media (max-width:860px){
.whh__s{padding:48px 0}.whh__s--traka{padding:24px 0}
.whh__trak{grid-template-columns:1fr;gap:14px}.whh__tc{border-left:0;justify-content:flex-start}
.whh__g3.whh__kar{grid-template-columns:none;grid-auto-flow:column;grid-auto-columns:84%;overflow-x:auto;scroll-snap-type:x mandatory;scrollbar-width:none;padding-bottom:6px}
.whh__kar::-webkit-scrollbar{display:none}.whh__kar>*{scroll-snap-align:start}
}
@media (max-width:767px){.whh__v{padding:0 16px}}
@media (max-width:560px){.whh__h2{font-size:25px}.whh__g4{gap:14px}.whh__vt{flex-direction:column;padding:14px}.whh__vt strong{font-size:15px}.whh__vt p{font-size:13.5px}}
</style>
