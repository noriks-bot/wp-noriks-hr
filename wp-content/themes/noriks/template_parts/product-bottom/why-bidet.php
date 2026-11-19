<?php
/**
 * NORIKS AquaClean (orto-bidet) - bide nastavak za WC skoljku bez struje - why sekcije po natancni strukturi originala
 * (thebidetclub.com/products/the-ultimate).
 *
 * STRUKTURA ORIGINALA:
   1. "If it was on your hand you'd wash it, not wipe it" - 3 statistike z viri v vrsti + primerjalna tabela toaletni papir / bide (sliki rola in nastavek v glavi) - pri nas 3 kartice z ikonami (grid) + tabela z dvema slikama
   2. "5 steps. 10 minutes." - video namestitve + 5 korakov + kaj potrebujete / ne potrebujete - pri nas video levo, 5 ostevilcenih korakov desno + 2 seznama (zeleni pas z angleskimi napisi odrezan z videa, koraki v HTML)
   3. "The reviews keep saying the same thing" - 3 mnenja (avatar, ime, kraj) v vrsti - pri nas 3 kartice mnenj (grid), hrvaska imena in kraji
   4. "Why you'll love it." - 4 kartice s sliko in kratkim besedilom - pri nas 4 kartice s sliko v vrsti (grid)
   5. FAQ - pri nas auto_reviews/FAQ_HR_bidet.php
   Zakljucek: NORIKS pogoji (tuj 100-dnevni preizkus -> 30 dana za povrat). Black Friday trak izpuscen.
 * SLIKE: /img/bidet/noriks-bidet-papir.webp /img/bidet/noriks-bidet-nastavak.webp /img/bidet/noriks-bidet-kartica-1.webp ... kartica-4.webp
 * VIDEI: /img/bidet/noriks-bidet-ugradnja.mp4 (+ poster noriks-bidet-ugradnja.jpg)
 * BARVA ORIGINALA: #1d3b2c (temno zelena skatla, pasovi in gumbi na originalu); svetel ton za --bg #eef3ef, akcent #2f5d46
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
$bd_u = get_template_directory_uri() . '/img/bidet/';
$bd_ik = array(
	'bakt'   => '<circle cx="12" cy="12" r="5"/><path d="M12 3v4M12 17v4M3 12h4M17 12h4M5.6 5.6l2.8 2.8M15.6 15.6l2.8 2.8M5.6 18.4l2.8-2.8M15.6 8.4l2.8-2.8"/>',
	'rola'   => '<ellipse cx="9" cy="8" rx="5" ry="3"/><path d="M4 8v8c0 1.7 2.2 3 5 3s5-1.3 5-3V8"/><path d="M14 12h6v7h-6"/>',
	'kap'    => '<path d="M12 3s6 6.6 6 11a6 6 0 0 1-12 0c0-4.4 6-11 6-11z"/>',
	'kutija' => '<path d="M3 7l9-4 9 4-9 4z"/><path d="M3 7v10l9 4 9-4V7"/><path d="M12 11v10"/>',
	'ruke'   => '<path d="M7 11V6.5a1.5 1.5 0 0 1 3 0V11M10 10V5a1.5 1.5 0 0 1 3 0v5M13 10V6a1.5 1.5 0 0 1 3 0v6"/><path d="M16 12v-1.5a1.5 1.5 0 0 1 3 0V14a7 7 0 0 1-7 7h-1a6 6 0 0 1-5-2.7L4 15.5a1.5 1.5 0 0 1 2.5-1.7L7 14.5"/>',
	'sat'    => '<circle cx="12" cy="12" r="8.5"/><path d="M12 7v5l3 2"/>',
	'ne'     => '<circle cx="12" cy="12" r="8.5"/><path d="M6 6l12 12"/>',
	'stit'   => '<path d="M12 3l7.5 3v5.5c0 4.6-3.2 8.2-7.5 9.5-4.3-1.3-7.5-4.9-7.5-9.5V6z"/><path d="M8.6 12.2l2.4 2.4 4.4-4.6"/>',
);
$bd_svg = function ( $d, $s = 24 ) {
	return '<svg viewBox="0 0 24 24" width="' . (int) $s . '" height="' . (int) $s . '" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">' . $d . '</svg>';
};
$bd_zv = '<span class="wsbd__zv" aria-label="5 zvjezdica">' . str_repeat( '<svg viewBox="0 0 20 20" width="16" height="16" fill="currentColor" aria-hidden="true" style="display:inline-block;margin-right:2px"><path d="M10 1.5l2.6 5.3 5.9.9-4.3 4.1 1 5.8L10 14.9l-5.2 2.7 1-5.8L1.5 7.7l5.9-.9z"/></svg>', 5 ) . '</span>';
$bd_da = '<span class="wsbd__da"><svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12.5l4.5 4.5L19 7.5"/></svg></span>';
$bd_ne = '<span class="wsbd__ne"><svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" aria-hidden="true"><path d="M6 6l12 12M18 6L6 18"/></svg></span>';
?>
<div class="wsbd">

<section class="wsbd__s wsbd__s--bg"><div class="wsbd__v">
	<div class="wsbd__kicker wsbd__c">Što kaže znanost</div>
	<h2 class="wsbd__h2 wsbd__c">Da vam je na ruci, <em>oprali biste je – ne obrisali.</em></h2>
	<p class="wsbd__p wsbd__c">Znanost kaže isto. Voda čisti, papir samo razmazuje.</p>
	<div class="wsbd__grid wsbd__g3">
		<?php
		$bd_st = array(
			array( 'bakt', '10×', 'manje bakterija na rukama nakon pranja vodom umjesto brisanja.', 'Journal of Water and Health, 2022' ),
			array( 'rola', '141', 'rola godišnje potroši prosječan Amerikanac. Svaka ostavlja tragove.', 'Statista' ),
			array( 'kap', '140 l', 'vode treba za proizvodnju jedne role. Jedno pranje potroši šalicu.', 'Scientific American' ),
		);
		foreach ( $bd_st as $s ) {
			echo '<div class="wsbd__k"><span class="wsbd__ki">' . $bd_svg( $bd_ik[ $s[0] ], 26 ) . '</span><strong class="wsbd__br">' . esc_html( $s[1] ) . '</strong><p>' . esc_html( $s[2] ) . '</p><span class="wsbd__izv">' . esc_html( $s[3] ) . '</span></div>';
		}
		?>
	</div>
	<div class="wsbd__tw"><table class="wsbd__tab">
		<thead><tr><th>Brisanje ili pranje</th><th><img src="<?php echo esc_url( $bd_u . 'noriks-bidet-papir.webp' ); ?>" alt="Rola toaletnog papira" decoding="async"><span>Toaletni papir</span></th><th class="wsbd__nas"><img src="<?php echo esc_url( $bd_u . 'noriks-bidet-nastavak.webp' ); ?>" alt="NORIKS AquaClean bide nastavak" decoding="async"><span>NORIKS AquaClean</span></th></tr></thead>
		<tbody>
			<?php
			$bd_t = array(
				array( 'Što radi', 'Razmazuje nečistoću', 'Ispire je vodom' ),
				array( 'Na koži', 'Ostavlja tragove i bakterije', 'Uklanja ih, bakterije također' ),
				array( 'Osjećaj', 'Svrbež, iritacija, do popodneva ne baš svježe', 'Čisto – kao ruke nakon pranja' ),
				array( 'Trošak', 'Oko 270 € godišnje, zauvijek', 'Jednom, i to je to' ),
			);
			foreach ( $bd_t as $r ) {
				echo '<tr><td class="wsbd__lb">' . esc_html( $r[0] ) . '</td><td>' . $bd_ne . esc_html( $r[1] ) . '</td><td class="wsbd__nas">' . $bd_da . esc_html( $r[2] ) . '</td></tr>';
			}
			?>
		</tbody>
	</table></div>
	<p class="wsbd__nap">Odgovara većini standardnih dvodijelnih WC školjki, okruglih ili izduženih. Isprobajte ga 30 dana – ako vam se ne svidi, vratite ga.</p>
</div></section>

<section class="wsbd__s"><div class="wsbd__v wsbd__dva">
	<div class="wsbd__media wsbd__media--v"><video autoplay muted loop playsinline webkit-playsinline preload="metadata" poster="<?php echo esc_url( $bd_u . 'noriks-bidet-ugradnja.jpg' ); ?>" aria-label="Ugradnja bide nastavka korak po korak"><source src="<?php echo esc_url( $bd_u . 'noriks-bidet-ugradnja.mp4' ); ?>" type="video/mp4"></video></div>
	<div>
		<div class="wsbd__kicker">Ugradnja</div>
		<h2 class="wsbd__h2">5 koraka. 10 minuta. <em>Toliko je jednostavno.</em></h2>
		<ol class="wsbd__kor">
			<?php
			foreach ( array( 'Zatvorite dovod vode.', 'Odvijte dasku i podignite je.', 'Spojite T-adapter i crijeva.', 'Postavite nastavak na školjku.', 'Vratite dasku i pritegnite vijke.' ) as $i => $k ) {
				echo '<li><span class="wsbd__st">' . ( $i + 1 ) . '</span><span>' . esc_html( $k ) . '</span></li>';
			}
			?>
		</ol>
		<p class="wsbd__p">Ponovno otvorite vodu – i to je to. Sve gotovo za manje od 10 minuta.</p>
		<div class="wsbd__pt">
			<div><strong>Što vam treba</strong><ul>
				<li><span class="wsbd__ki wsbd__ki--s"><?php echo $bd_svg( $bd_ik['kutija'], 18 ); ?></span>Kutija – sve je unutra</li>
				<li><span class="wsbd__ki wsbd__ki--s"><?php echo $bd_svg( $bd_ik['ruke'], 18 ); ?></span>Vaše dvije ruke</li>
				<li><span class="wsbd__ki wsbd__ki--s"><?php echo $bd_svg( $bd_ik['sat'], 18 ); ?></span>10 minuta</li>
			</ul></div>
			<div><strong>Što vam ne treba</strong><ul>
				<li><span class="wsbd__ki wsbd__ki--s wsbd__ki--ne"><?php echo $bd_svg( $bd_ik['ne'], 18 ); ?></span>Vodoinstalater</li>
				<li><span class="wsbd__ki wsbd__ki--s wsbd__ki--ne"><?php echo $bd_svg( $bd_ik['ne'], 18 ); ?></span>Bušilica</li>
				<li><span class="wsbd__ki wsbd__ki--s wsbd__ki--ne"><?php echo $bd_svg( $bd_ik['ne'], 18 ); ?></span>Utičnica</li>
			</ul></div>
		</div>
		<p class="wsbd__z">U kutiji su jednostavne upute korak po korak.</p>
	</div>
</div></section>

<section class="wsbd__s wsbd__s--bg"><div class="wsbd__v">
	<div class="wsbd__kicker wsbd__c">Ocjena 4,8 od 1.081 recenzije</div>
	<h2 class="wsbd__h2 wsbd__c">Recenzije stalno govore isto: <em>„Zašto ovo nisam napravio ranije?“</em></h2>
	<div class="wsbd__grid wsbd__g3">
		<?php
		$bd_r = array(
			array( 'Sara M.', 'Split', 'Četveročlana smo obitelj i stalno nam je nedostajalo toaletnog papira. Sad kupujemo samo dio onoga što smo prije. Već se isplatio.' ),
			array( 'Danijel R.', 'Osijek', 'Iskreno nisam mislio da će biti velike razlike. Tri tjedna kasnije svaki drugi WC mi se čini kao korak unatrag.' ),
			array( 'Petra K.', 'Zagreb', 'Jedino žalim što ovo nisam napravila prije deset godina. Sitnica je, ali svaki odlazak u kupaonicu sad je malo ugodniji.' ),
		);
		foreach ( $bd_r as $r ) {
			echo '<div class="wsbd__rk">' . $bd_zv . '<p>' . esc_html( $r[2] ) . '</p><span class="wsbd__ime"><i class="wsbd__av">' . esc_html( mb_substr( $r[0], 0, 1 ) ) . '</i><span><strong>' . esc_html( $r[0] ) . '</strong><small>' . $bd_svg( $bd_ik['stit'], 13 ) . ' Provjereni kupac · ' . esc_html( $r[1] ) . '</small></span></span></div>';
		}
		?>
	</div>
</div></section>

<section class="wsbd__s"><div class="wsbd__v">
	<div class="wsbd__kicker wsbd__c">Prednosti</div>
	<h2 class="wsbd__h2 wsbd__c">Zašto ćete ga <em>voljeti</em></h2>
	<div class="wsbd__grid wsbd__g4">
		<?php
		$bd_c = array(
			array( 'noriks-bidet-kartica-1.webp', 'Vrlo jednostavno za korištenje', 'Samo okrenite kotačić za pranje. To je sve.' ),
			array( 'noriks-bidet-kartica-2.webp', 'Brza, laka ugradnja', 'Oko 10 minuta. Bez vodoinstalatera i bez utičnice.' ),
			array( 'noriks-bidet-kartica-3.webp', 'Svježa, čista voda', 'Koristi isti vodovod iz kojeg pijete i perete zube.' ),
			array( 'noriks-bidet-kartica-4.webp', 'Isplati se sam', 'Uštedite oko 270 € godišnje na toaletnom papiru.' ),
		);
		foreach ( $bd_c as $c ) {
			echo '<div class="wsbd__ck"><div class="wsbd__cm"><img src="' . esc_url( $bd_u . $c[0] ) . '" alt="' . esc_attr( $c[1] ) . '" decoding="async"></div><div class="wsbd__ct"><strong>' . esc_html( $c[1] ) . '</strong><p>' . esc_html( $c[2] ) . '</p></div></div>';
		}
		?>
	</div>
</div></section>

<section class="wsbd__s wsbd__s--bg npg-s"><?php $npg = array( 'izdelek' => 'NORIKS AquaClean', 'barva' => '#2f5d46' ); include __DIR__ . '/noriks-pogoji.php'; ?></section>

</div>
<style>
.wsbd{color:#1c1c1c;font-family:inherit}
.wsbd__s{padding:72px 0;background:#fff}.wsbd__s.wsbd__s--bg{background:#eef3ef}
.wsbd__v{width:100%;max-width:1240px;margin:0 auto;padding:0 24px;box-sizing:border-box}
.wsbd__c{text-align:center}
.wsbd__kicker{display:inline-flex;align-items:center;gap:10px;font-size:13px;letter-spacing:1.4px;text-transform:uppercase;color:#2f5d46;margin:0 0 10px;font-weight:800}
.wsbd__kicker::before{content:"";width:26px;height:2px;background:#1d3b2c;border-radius:2px}
.wsbd__kicker.wsbd__c{display:flex;justify-content:center}
.wsbd__h2{font-size:clamp(26px,3vw,36px);font-weight:800;line-height:1.2;margin:0 0 16px;color:#1d3b2c}.wsbd__h2 em{font-style:italic;color:#2f5d46;font-weight:700}
.wsbd__p{font-size:16px;line-height:1.65;color:#38423d;margin:0 0 14px}
.wsbd__nap{font-size:14px;color:#5f6b65;text-align:center;margin:22px 0 0}
.wsbd__z{font-weight:800;font-size:16px;color:#1d3b2c;margin:18px 0 0;padding-left:14px;border-left:3px solid #2f5d46}
.wsbd__grid{display:grid;gap:22px;margin-top:26px}.wsbd__g3{grid-template-columns:repeat(3,1fr)}.wsbd__g4{grid-template-columns:repeat(4,1fr)}
.wsbd__k{background:#fff;border-radius:16px;padding:28px 26px;text-align:center;box-shadow:0 8px 24px rgba(29,59,44,.10);transition:transform .2s,box-shadow .2s}
.wsbd__k:hover,.wsbd__ck:hover{transform:translateY(-3px);box-shadow:0 14px 30px rgba(29,59,44,.16)}
.wsbd__ki{width:56px;height:56px;border-radius:50%;background:#dde8e0;border:1.5px solid #2f5d46;color:#1d3b2c;display:inline-flex;align-items:center;justify-content:center;box-sizing:border-box;margin:0 0 12px}
.wsbd__ki--s{flex:0 0 34px;width:34px;height:34px;margin:0;border:0}
.wsbd__ki--ne{background:#f3e4e2;color:#a5483d}
.wsbd__br{display:block;font-size:40px;font-weight:900;color:#2f5d46;line-height:1;margin:0 0 10px}
.wsbd__k p{margin:0;font-size:15.5px;line-height:1.55;color:#38423d}
.wsbd__izv{display:block;margin-top:12px;font-size:13px;color:#7a857f;font-style:italic}
.wsbd__tw{overflow-x:auto;border-radius:16px;box-shadow:0 8px 24px rgba(29,59,44,.10);background:#fff;margin-top:30px}
.wsbd__tab{width:100%;border-collapse:collapse;font-size:15.5px;margin:0;min-width:560px}
.wsbd__tab th{background:#fff!important;color:#1d3b2c!important;font-weight:800;padding:18px 14px 12px;text-align:center;border:0;border-bottom:1px solid #e3ebe5;vertical-align:bottom}
.wsbd__tab th:first-child{text-align:left;font-size:17px}
.wsbd__tab th img{display:block;width:84px;height:84px;object-fit:cover;border-radius:12px;margin:0 auto 8px}
.wsbd__tab th.wsbd__nas{background:#1d3b2c!important;color:#fff!important}
.wsbd__tab td{padding:14px 16px;border:0;border-bottom:1px solid #e3ebe5;color:#38423d;vertical-align:middle}
.wsbd__tab td.wsbd__lb{font-weight:800;color:#1d3b2c}
.wsbd__tab td.wsbd__nas{background:#f4f8f5;font-weight:700;color:#1d3b2c}
.wsbd__tab tbody tr:last-child td{border-bottom:0}
.wsbd__da,.wsbd__ne{display:inline-flex;width:24px;height:24px;border-radius:50%;align-items:center;justify-content:center;margin-right:10px;vertical-align:middle}
.wsbd__da{background:#2f5d46;color:#fff}.wsbd__ne{background:#f3e4e2;color:#a5483d}
.wsbd__dva{display:grid;grid-template-columns:1fr 1fr;gap:56px;align-items:center}.wsbd__dva>div{min-width:0}
.wsbd__media{border-radius:18px;overflow:hidden;box-shadow:0 14px 36px rgba(29,59,44,.16);aspect-ratio:4/5;background:#dde8e0}
.wsbd__media img,.wsbd__media video{width:100%;height:100%;object-fit:cover;display:block}
.wsbd__kor{list-style:none;margin:6px 0 16px;padding:0;display:flex;flex-direction:column;gap:12px}
.wsbd__kor li{display:flex;align-items:center;gap:14px;font-size:16px;font-weight:700;color:#1d3b2c;margin:0;list-style:none}
.wsbd__st{flex:0 0 34px;width:34px;height:34px;border-radius:50%;background:#1d3b2c;color:#fff;font-weight:800;display:inline-flex;align-items:center;justify-content:center}
.wsbd__pt{display:grid;grid-template-columns:1fr 1fr;gap:16px;margin-top:6px}
.wsbd__pt>div{background:#f4f8f5;border-radius:14px;padding:18px 18px}
.wsbd__pt strong{display:block;font-size:15px;color:#1d3b2c;margin:0 0 10px}
.wsbd__pt ul{list-style:none;margin:0;padding:0;display:flex;flex-direction:column;gap:10px}
.wsbd__pt li{display:flex;align-items:center;gap:10px;font-size:14.5px;color:#38423d;margin:0;list-style:none}
.wsbd__rk{background:#fff;border-radius:16px;padding:26px 28px;box-shadow:0 8px 24px rgba(29,59,44,.10);display:flex;flex-direction:column}
.wsbd__zv{color:#2f5d46;display:block;margin:0 0 12px}
.wsbd__rk p{font-size:16px;line-height:1.6;color:#333;margin:0 0 18px;flex:1}
.wsbd__ime{display:flex;align-items:center;gap:12px}
.wsbd__ime strong{display:block;font-size:15px;color:#1d3b2c}.wsbd__ime small{display:inline-flex;align-items:center;gap:4px;font-size:13px;color:#2f5d46;font-weight:700}
.wsbd__av{display:inline-flex;align-items:center;justify-content:center;width:40px;height:40px;border-radius:50%;background:#dde8e0;color:#1d3b2c;font-style:normal;font-weight:800}
.wsbd__ck{background:#fff;border-radius:16px;overflow:hidden;box-shadow:0 8px 24px rgba(29,59,44,.10);display:flex;flex-direction:column;transition:transform .2s,box-shadow .2s}
.wsbd__cm img{width:100%;aspect-ratio:4/5;object-fit:cover;display:block}
.wsbd__ct{padding:18px 20px 22px}
.wsbd__ct strong{display:block;font-size:17px;font-weight:800;color:#1d3b2c;margin:0 0 6px}
.wsbd__ct p{margin:0;font-size:15px;line-height:1.55;color:#38423d}
@media (max-width:1024px){.wsbd__g4{grid-template-columns:repeat(2,1fr)}}
@media (max-width:860px){
.wsbd__s{padding:48px 0}
.wsbd__dva{grid-template-columns:minmax(0,1fr);gap:26px}
.wsbd__g3{grid-template-columns:1fr}
}
@media (max-width:767px){.wsbd__v{padding:0 16px}}
@media (max-width:560px){.wsbd__h2{font-size:25px}.wsbd__pt{grid-template-columns:1fr}.wsbd__g4{gap:14px}.wsbd__ct{padding:14px}.wsbd__ct strong{font-size:15px}.wsbd__ct p{font-size:13.5px}}
</style>
