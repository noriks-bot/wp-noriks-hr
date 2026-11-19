<?php
/**
 * NORIKS RoadPillow (orto-roadpillow) - jastuk za suvozacko sjedalo - why sekcije po natancni strukturi originala
 * (the-snuggles.com/products/road-trip-pillow). Original skrije vse sekcije predloge razen opisa, "Made for every kind of ride" in mnenj.
 *
 * STRUKTURA ORIGINALA:
   1. opis pod nakupom: video (pokoncen) + naslov "Turn the passenger seat into your cozy corner" + besedilo + 3 alineje (Hug it / Soft grey velvet / Compact and light) - pri nas video levo, besedilo + 3 alineje z ikonami desno
   2. opis: tabela Size (Length 51 in, Width 27.5 in, Weight 3.1 lb) - pri nas tabela mer v cm/kg (130 cm, 70 cm, 1,4 kg) z glavno sliko izdelka desno
   3. "Made for every kind of ride" - 4 slikovne kartice z napisi v vrsti - pri nas 4 slikovne kartice z napisi
   4. "Over 20,000 satisfied customers" - karusel 5 mnenj s fotografijami (zvezdice, besedilo, ime) - pri nas karusel 5 mnenj s fotografijami, brez tuje stevilke kupcev
   5. pri nas NORIKS pogoji (original nima jamstvene sekcije; tuje vracilo 365 dni ne prenasamo)
   FAQ originala (Questions) -> auto_reviews/FAQ_HR_roadpillow.php; mnenja -> auto_reviews/HR_roadpillow.php. Black Friday trak izpuscen.
 * VIDEO: /img/roadpillow/noriks-roadpillow-video.mp4
 * SLIKE: /img/roadpillow/noriks-roadpillow-uporaba-1.webp /img/roadpillow/noriks-roadpillow-uporaba-2.webp /img/roadpillow/noriks-roadpillow-uporaba-3.webp /img/roadpillow/noriks-roadpillow-uporaba-4.webp
 * SLIKE: /img/roadpillow/noriks-roadpillow-mnenje-1.webp /img/roadpillow/noriks-roadpillow-mnenje-2.webp /img/roadpillow/noriks-roadpillow-mnenje-3.webp /img/roadpillow/noriks-roadpillow-mnenje-4.webp /img/roadpillow/noriks-roadpillow-mnenje-5.webp
 * BARVA ORIGINALA: #4f8f86 (mentolno-zelena barva okvirjev, oznak in ozadja videa #e6f1ef na originalu); svetel ton za --bg #e9f3f1, akcent #2f6f66
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
$rp_u = get_template_directory_uri() . '/img/roadpillow/';
$rp_ik = array(
	'srce'   => '<path d="M12 20s-7.5-4.6-7.5-10A4.3 4.3 0 0 1 12 7.5 4.3 4.3 0 0 1 19.5 10c0 5.4-7.5 10-7.5 10z"/>',
	'oblak'  => '<path d="M7 18h10a4 4 0 0 0 .6-8 6 6 0 0 0-11.5 1.6A3.3 3.3 0 0 0 7 18z"/>',
	'pero'   => '<path d="M20 4C10 4 5 9 4 20"/><path d="M20 4c0 8-5 12-12 12"/>',
	'stit'   => '<path d="M12 3l7.5 3v5.5c0 4.6-3.2 8.2-7.5 9.5-4.3-1.3-7.5-4.9-7.5-9.5V6z"/><path d="M8.6 12.2l2.4 2.4 4.4-4.6"/>',
	'ravnalo'=> '<rect x="2.5" y="8" width="19" height="8" rx="1.5"/><path d="M6 8v3M9.5 8v4M13 8v3M16.5 8v4"/>',
	'tezina' => '<path d="M6.5 9h11l2 11h-15z"/><circle cx="12" cy="6" r="2.2"/>',
);
$rp_svg = function ( $d, $s = 24 ) {
	return '<svg viewBox="0 0 24 24" width="' . (int) $s . '" height="' . (int) $s . '" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">' . $d . '</svg>';
};
?>
<div class="wsrp">

<section class="wsrp__s wsrp__s--bg"><div class="wsrp__v wsrp__dva">
	<div class="wsrp__media"><video src="<?php echo esc_url( $rp_u . 'noriks-roadpillow-video.mp4' ); ?>" poster="<?php echo esc_url( $rp_u . 'noriks-roadpillow-video.jpg' ); ?>" autoplay muted loop playsinline preload="metadata"></video></div>
	<div>
		<div class="wsrp__kicker">Za suvozače</div>
		<h2 class="wsrp__h2">Suvozačko sjedalo pretvorite u <em>svoj udobni kutak</em></h2>
		<p class="wsrp__p">Pred vama je duga vožnja? Udobno se smjestite, sklupčajte se uz NORIKS RoadPillow i stvarno se odmorite dok netko drugi vozi.</p>
		<p class="wsrp__p">Jastuk u obliku slova U obuhvati vas s obje strane: glava se odmara na mekanom zavoju iza vrata, a dugi krakovi su tu da ih zagrlite ili se na njih naslonite.</p>
		<ul class="wsrp__al">
			<li><span class="wsrp__ki"><?php echo $rp_svg( $rp_ik['srce'] ); ?></span><div><strong>Zagrlite ga, sklupčajte se.</strong><span>Glavu naslonite na mekani zavoj, a duge krakove obavijte oko sebe.</span></div></li>
			<li><span class="wsrp__ki"><?php echo $rp_svg( $rp_ik['oblak'] ); ?></span><div><strong>Mekani sivi baršun.</strong><span>Pliš koji ostaje udoban satima na cesti.</span></div></li>
			<li><span class="wsrp__ki"><?php echo $rp_svg( $rp_ik['pero'] ); ?></span><div><strong>Kompaktan i lagan.</strong><span>Samo 1,4 kg i 130 cm duljine.</span></div></li>
		</ul>
		<p class="wsrp__zak">Napravljen za suvozačko sjedalo automobila, SUV-a ili kombija.</p>
	</div>
</div></section>

<section class="wsrp__s"><div class="wsrp__v wsrp__dva wsrp__dva--rev">
	<div class="wsrp__media wsrp__media--sv"><img src="<?php echo esc_url( $rp_u . 'noriks-roadpillow-galerija-08.webp' ); ?>" alt="NORIKS RoadPillow jastuk u obliku slova U od sivog baršuna" decoding="async"></div>
	<div>
		<div class="wsrp__kicker">Veličina</div>
		<h2 class="wsrp__h2">Mjere <em>jastuka</em></h2>
		<p class="wsrp__p">Dovoljno dug da vas obuhvati od glave do koljena, a opet dovoljno lagan da ga nakon vožnje jednostavno prebacite na stražnje sjedalo ili u prtljažnik.</p>
		<div class="wsrp__tw"><table class="wsrp__tab">
			<thead><tr><th>Mjera</th><th>Vrijednost</th></tr></thead>
			<tbody>
				<tr><td><span class="wsrp__ti"><?php echo $rp_svg( $rp_ik['ravnalo'], 18 ); ?></span>Duljina</td><td><strong>130 cm</strong></td></tr>
				<tr><td><span class="wsrp__ti"><?php echo $rp_svg( $rp_ik['ravnalo'], 18 ); ?></span>Širina</td><td><strong>70 cm</strong></td></tr>
				<tr><td><span class="wsrp__ti"><?php echo $rp_svg( $rp_ik['tezina'], 18 ); ?></span>Težina</td><td><strong>1,4 kg</strong></td></tr>
				<tr><td><span class="wsrp__ti"><?php echo $rp_svg( $rp_ik['stit'], 18 ); ?></span>Oblik i materijal</td><td><strong>U-oblik, sivi baršun</strong></td></tr>
			</tbody>
		</table></div>
		<p class="wsrp__zak">Odgovara suvozačkom sjedalu automobila, SUV-a i kombija – nije namijenjen vozaču.</p>
	</div>
</div></section>

<section class="wsrp__s wsrp__s--bg"><div class="wsrp__v">
	<div class="wsrp__kicker wsrp__c">Za svaku vožnju</div>
	<h2 class="wsrp__h2 wsrp__c">Napravljen za <em>svaku vrstu putovanja</em></h2>
	<p class="wsrp__p wsrp__c">Od kratkog odmora na parkiralištu do cijelog vikenda na cesti.</p>
	<div class="wsrp__grid wsrp__g4">
		<?php
		$rp_k = array(
			array( 'uporaba-1', 'Opuštanje i odmor', 'Pokrivač, naslon unatrag i jastuk koji vas drži.' ),
			array( 'uporaba-2', 'Kratki drijemež', 'Sklupčajte se i ugrijte dok čekate.' ),
			array( 'uporaba-3', 'Nakon duge vožnje', 'Udobno putovanje kući nakon napornog dana.' ),
			array( 'uporaba-4', 'Vikend putovanja', 'Sati na cesti, bez ukočenog vrata.' ),
		);
		foreach ( $rp_k as $k ) {
			echo '<div class="wsrp__k"><div class="wsrp__km"><img src="' . esc_url( $rp_u . 'noriks-roadpillow-' . $k[0] . '.webp' ) . '" alt="' . esc_attr( $k[1] . ' s NORIKS RoadPillow jastukom' ) . '" decoding="async"></div><div class="wsrp__kt"><strong>' . esc_html( $k[1] ) . '</strong><p>' . esc_html( $k[2] ) . '</p></div></div>';
		}
		?>
	</div>
</div></section>

<section class="wsrp__s"><div class="wsrp__v">
	<div class="wsrp__kicker wsrp__c">Ocjena 4,8 / 5</div>
	<h2 class="wsrp__h2 wsrp__c">Tisuće <em>zadovoljnih suvozača</em></h2>
	<p class="wsrp__p wsrp__c">Što kažu kupci nakon prvih putovanja s jastukom.</p>
	<div class="wsrp__grid wsrp__kar3">
		<?php
		$rp_m = array(
			array( 'mnenje-1', 'Od svakodnevne vožnje na posao do vikend putovanja – ovaj jastuk je napravio veliku razliku. Vrat i ruke imaju potporu i više ne izlazim iz auta ukočena. Bez njega više ne putujem!', 'Ema P.' ),
			array( 'mnenje-2', 'Kupila sam ga sestri prije nego što se preselila na drugi kraj zemlje i oduševljena je. Kaže da su joj duge ure na suvozačkom sjedalu puno udobnije. Tako promišljen i koristan poklon!', 'Jelena M.' ),
			array( 'mnenje-3', 'Nakon dugog dana ili cijelog dana putovanja obično sam iscrpljena kad sjednem u auto. S ovim jastukom je vožnja kući puno opuštenija. Kao mekani, topli zagrljaj oko vrata i ramena!', 'Ana B.' ),
			array( 'mnenje-4', 'Kupio sam ga supruzi jer joj na dugim vožnjama nikad nije udobno. Bila je presretna kad ga je otvorila! Sad ga nosi sa sobom svaki put kad negdje idemo.', 'Mihael R.' ),
			array( 'mnenje-5', 'Supruga obično zaspi na suvozačkom sjedalu, ali nikad joj nije udobno. Iznenadio sam je ovim jastukom i obožava ga – koristi ga na putovanjima i na kraćim vožnjama.', 'Jakov T.' ),
		);
		foreach ( $rp_m as $m ) {
			echo '<div class="wsrp__rk"><div class="wsrp__rkm"><img src="' . esc_url( $rp_u . 'noriks-roadpillow-' . $m[0] . '.webp' ) . '" alt="' . esc_attr( 'Kupac s NORIKS RoadPillow jastukom - ' . $m[2] ) . '" decoding="async"></div><div class="wsrp__rkt"><span class="wsrp__zv" aria-label="5 zvjezdica">★★★★★</span><p>' . esc_html( $m[1] ) . '</p><span class="wsrp__ime"><i class="wsrp__av">' . esc_html( mb_substr( $m[2], 0, 1 ) ) . '</i>' . esc_html( $m[2] ) . ' <small>' . $rp_svg( $rp_ik['stit'], 14 ) . ' Provjereni kupac</small></span></div></div>';
		}
		?>
	</div>
</div></section>

<section class="wsrp__s wsrp__s--bg npg-s"><?php $npg = array( 'izdelek' => 'NORIKS RoadPillow', 'barva' => '#4f8f86' ); include __DIR__ . '/noriks-pogoji.php'; ?></section>

</div>
<style>
.wsrp{color:#1c1c1c;font-family:inherit}
.wsrp__s{padding:72px 0;background:#fff}.wsrp__s.wsrp__s--bg{background:#e9f3f1}
.wsrp__v{width:100%;max-width:1240px;margin:0 auto;padding:0 24px;box-sizing:border-box}
.wsrp__c{text-align:center}
.wsrp__kicker{display:inline-flex;align-items:center;gap:10px;font-size:13px;letter-spacing:1.4px;text-transform:uppercase;color:#2f6f66;margin:0 0 10px;font-weight:800}
.wsrp__kicker::before{content:"";width:26px;height:2px;background:#4f8f86;border-radius:2px}
.wsrp__kicker.wsrp__c{display:flex;justify-content:center}
.wsrp__h2{font-size:clamp(26px,3vw,36px);font-weight:800;line-height:1.2;margin:0 0 16px;color:#1f2a2a}.wsrp__h2 em{font-style:italic;color:#2f6f66}
.wsrp__p{font-size:16px;line-height:1.65;color:#333;margin:0 0 14px}
.wsrp__zak{font-size:16.5px;font-weight:800;line-height:1.5;margin:20px 0 0;padding-left:14px;border-left:3px solid #4f8f86}
.wsrp__dva{display:grid;grid-template-columns:1fr 1fr;gap:56px;align-items:center}.wsrp__dva>div{min-width:0}
.wsrp__dva--rev>div:first-child{order:2}
.wsrp__media{position:relative;border-radius:18px;overflow:hidden;box-shadow:0 14px 36px rgba(30,80,70,.16);aspect-ratio:4/5;background:#e6f1ef}
.wsrp__media img,.wsrp__media video{width:100%;height:100%;object-fit:cover;display:block}
.wsrp__media--sv{background:#f6f3ef}.wsrp__media--sv img{object-fit:contain}
.wsrp__al{list-style:none;margin:8px 0 0;padding:0;display:flex;flex-direction:column;gap:14px}
.wsrp__al li{display:flex;gap:14px;align-items:flex-start;list-style:none;margin:0}
.wsrp__al strong{display:block;font-size:16px;font-weight:800;color:#1f2a2a;margin:0 0 2px}.wsrp__al span{font-size:15px;line-height:1.5;color:#444}
.wsrp__ki{flex:0 0 44px;width:44px;height:44px;border-radius:50%;background:#d3e8e4;color:#2f6f66!important;display:flex;align-items:center;justify-content:center}
.wsrp__tw{overflow-x:auto;border-radius:16px;box-shadow:0 8px 24px rgba(30,80,70,.10);background:#fff;margin-top:20px}
.wsrp__tab{width:100%;border-collapse:collapse;font-size:15.5px;margin:0}
.wsrp__tab th{background:#1f2a2a!important;color:#fff!important;font-weight:800;padding:14px 18px;text-align:left;border:0}
.wsrp__tab td{padding:14px 18px;border:0;border-bottom:1px solid #e3efec;color:#333;vertical-align:middle}
.wsrp__tab tbody tr:last-child td{border-bottom:0}.wsrp__tab td strong{color:#1f2a2a}
.wsrp__ti{display:inline-flex;width:32px;height:32px;border-radius:50%;background:#d3e8e4;color:#2f6f66;align-items:center;justify-content:center;margin-right:12px;vertical-align:middle}
.wsrp__grid{display:grid;gap:22px;margin-top:26px}
.wsrp__g4{grid-template-columns:repeat(4,1fr)}
.wsrp__k{background:#fff;border-radius:16px;overflow:hidden;display:flex;flex-direction:column;box-shadow:0 8px 24px rgba(30,80,70,.10);transition:transform .2s,box-shadow .2s}
.wsrp__k:hover{transform:translateY(-3px);box-shadow:0 14px 30px rgba(30,80,70,.16)}
.wsrp__km img{width:100%;aspect-ratio:4/5;object-fit:cover;display:block}
.wsrp__kt{padding:18px 20px 22px}.wsrp__kt strong{display:block;font-size:17px;font-weight:800;color:#1f2a2a;margin:0 0 6px}.wsrp__kt p{margin:0;font-size:15px;line-height:1.5;color:#444}
.wsrp__rk{background:#fff;border-radius:16px;overflow:hidden;box-shadow:0 8px 24px rgba(30,80,70,.10);display:flex;flex-direction:column}
.wsrp__rkm img{width:100%;aspect-ratio:1/1;object-fit:cover;display:block}
.wsrp__rkt{padding:22px 24px;display:flex;flex-direction:column;flex:1}
.wsrp__rkt p{font-size:15.5px;line-height:1.6;color:#333;margin:0 0 16px;flex:1}
.wsrp__zv{color:#f5a623;letter-spacing:2px;font-size:16px;display:block;margin:0 0 10px}
.wsrp__ime{display:flex;align-items:center;flex-wrap:wrap;gap:8px;font-weight:800;font-size:14.5px;color:#1f2a2a}
.wsrp__ime small{display:inline-flex;align-items:center;gap:4px;font-weight:700;color:#2f6f66;font-size:13px}
.wsrp__av{display:inline-flex;align-items:center;justify-content:center;width:34px;height:34px;border-radius:50%;background:#d3e8e4;color:#2f6f66;font-style:normal;font-weight:800}
.wsrp__karw{position:relative}
.wsrp__kar3{grid-auto-flow:column;grid-template-columns:none;grid-auto-columns:calc((100% - 44px)/3);overflow-x:auto;scroll-snap-type:x mandatory;scrollbar-width:none}
.wsrp__kar3::-webkit-scrollbar{display:none}.wsrp__kar3>*{scroll-snap-align:start}
.wsrp__pus{position:absolute;top:50%;transform:translateY(-50%);width:44px;height:44px;border-radius:50%;border:0;background:#fff;box-shadow:0 4px 14px rgba(0,0,0,.18);font-size:24px;line-height:1;color:#1f2a2a;cursor:pointer;z-index:2}
.wsrp__pus--l{left:-22px}.wsrp__pus--d{right:-22px}
@media (max-width:1024px){.wsrp__g4{grid-template-columns:repeat(2,1fr)}}
@media (max-width:860px){
.wsrp__s{padding:48px 0}
.wsrp__dva{grid-template-columns:minmax(0,1fr);gap:26px}.wsrp__dva--rev>div:first-child{order:0}
.wsrp__kar3{grid-auto-columns:84%}.wsrp__pus{display:none}
}
@media (max-width:767px){.wsrp__v{padding:0 16px}}
@media (max-width:560px){.wsrp__h2{font-size:25px}.wsrp__g4{gap:14px}.wsrp__kt{padding:14px}.wsrp__kt strong{font-size:15.5px}.wsrp__kt p{font-size:14px}}
</style>
<script>
(function(){document.querySelectorAll('.wsrp__kar3').forEach(function(k){
  var w=document.createElement('div');w.className='wsrp__karw';k.parentNode.insertBefore(w,k);w.appendChild(k);
  ['l','d'].forEach(function(s){var b=document.createElement('button');b.type='button';b.className='wsrp__pus wsrp__pus--'+s;b.setAttribute('aria-label',s==='l'?'Prethodno':'Sljedeće');b.textContent=s==='l'?'‹':'›';
    b.addEventListener('click',function(){var c=k.firstElementChild;var d=c?c.getBoundingClientRect().width+22:300;k.scrollBy({left:s==='l'?-d:d,behavior:'smooth'});});w.appendChild(b);});
});})();
</script>
