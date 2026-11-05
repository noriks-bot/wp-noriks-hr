<?php
/**
 * NORIKS CloudStep - 3D klompe mekane kao oblak, unisex (orto-perfclogs) - why sekcije po natancni strukturi originala
 * (varaletti.com/products/3d-performance-cloud-clogs).
 *
 * STRUKTURA ORIGINALA:
   1. "Durable Yet Comfortable": video LEVO (klompa se savija v rokah, potplat od blizu), besedilo DESNO - pri nas video levo (img/perfclogs/noriks-cloudstep-izdrzljive.mp4, z originala), besedilo desno s 4 lastnostmi z ikonami (5 alinej z originala: bez bolova u ledima i stopalima, prozracne za siroka stopala, protuklizne za duge smjene, suhe po kisi, papuca ili cipela)
   2. "Perfect For This Summer": medij DESNO, besedilo LEVO - na originalu video z napisom tuje oznake na traku (FASHION) v gibanju, zato pri nas slika plave klompe (galerija, Higgsfield: HR oznake + NORIKS na traku) desno, besedilo levo
   3. "Viral On Social Media": karusel 5 navpicnih videov kupcev - pri nas naslov + besedilo levo, 2 navpicna videa desno (img/perfclogs/noriks-cloudstep-viral-1.mp4, -viral-2.mp4); 3 videi originala izpusceni, ker imajo na traku klompe in v ozadju berljive tuje napise (FASHION, napisi na knjigah)
   4. "Try It Risk Free Today": naslov + besedilo + gumb sredinsko (30 dni) - pri nas sredinsko: ikona v krogu, naslov, besedilo, 3 tocke (NORIKS 30 dana za povrat), brez gumba
   5. "Customers Love It": 3 kartice v vrsti (fotografija kupca, naslov, besedilo, ime, preverjen kupec) - pri nas 3 kartice z istimi fotografijami (FASHION na traku -> NORIKS, Higgsfield; liki iz risank odstranjeni), hrvaska imena; primerjava s tujo znamko izpuscena
   6. NORIKS pogoji (skupni del noriks-pogoji.php)
 * BARVA ORIGINALA: #0060b8 (modra akcentna barva originala - gumbi, ozadje pasice in --color-base-accent-1); svetel ton za --bg #eaf2fb
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
$cs_u = get_template_directory_uri() . '/img/perfclogs/';
$cs_svg = function ( $d, $s = 24 ) {
	return '<svg viewBox="0 0 24 24" width="' . $s . '" height="' . $s . '" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">' . $d . '</svg>';
};
$cs_ik = array(
	'oblak'    => '<path d="M7 18h10a4 4 0 0 0 .6-7.95A6 6 0 0 0 6.2 9.2 4.5 4.5 0 0 0 7 18z"/>',
	'zrak'     => '<path d="M3 9h11a3 3 0 1 0-3-3"/><path d="M3 14h15a3 3 0 1 1-3 3"/><path d="M3 19h6"/>',
	'potplat'  => '<path d="M4 16h16"/><path d="M5 19h14"/><path d="M7 13l2-2 2 2 2-2 2 2 2-2"/>',
	'kapljica' => '<path d="M12 3c3.5 4.2 6 7.4 6 10.5a6 6 0 0 1-12 0C6 10.4 8.5 7.2 12 3z"/><path d="M9.5 14.5a2.6 2.6 0 0 0 2.5 2.4"/>',
	'kuca'     => '<path d="M3 11l9-7 9 7"/><path d="M5 10v10h14V10"/><path d="M10 20v-6h4v6"/>',
	'sunce'    => '<circle cx="12" cy="12" r="4"/><path d="M12 2v2M12 20v2M4.9 4.9l1.4 1.4M17.7 17.7l1.4 1.4M2 12h2M20 12h2M4.9 19.1l1.4-1.4M17.7 6.3l1.4-1.4"/>',
	'kopca'    => '<rect x="3" y="9" width="18" height="6" rx="3"/><path d="M14 9v6M17 9v6"/>',
	'pero'     => '<path d="M20 4C10 4 5 10 5 19"/><path d="M5 19c6 0 12-4 14-12"/><path d="M9 15h5"/>',
	'srce'     => '<path d="M12 20s-7-4.4-9-9a4.6 4.6 0 0 1 9-2 4.6 4.6 0 0 1 9 2c-2 4.6-9 9-9 9z"/>',
	'play'     => '<rect x="3" y="4" width="18" height="16" rx="3"/><path d="M10 9l5 3-5 3z"/>',
	'stit'     => '<path d="M12 3l7 3v5.5c0 4.4-3 8-7 9.5-4-1.5-7-5.1-7-9.5V6l7-3z"/><path d="M9 12l2 2 4-4"/>',
	'povrat'   => '<path d="M4 12a8 8 0 1 0 2.4-5.7"/><path d="M4 4v4.5h4.5"/><path d="M12 8v4l2.6 2"/>',
	'zamjena'  => '<path d="M4 8h13l-3-3"/><path d="M20 16H7l3 3"/>',
	'novac'    => '<rect x="2.5" y="6.5" width="19" height="11" rx="2"/><circle cx="12" cy="12" r="2.6"/><path d="M6 9.5v5M18 9.5v5"/>',
);
$cs_li = function ( $ik, $naslov, $tekst ) use ( $cs_svg, $cs_ik ) {
	return '<li><span class="wscs__fi">' . $cs_svg( $cs_ik[ $ik ] ) . '</span><div><strong>' . esc_html( $naslov ) . '</strong><p>' . esc_html( $tekst ) . '</p></div></li>';
};
$cs_mnenja = array(
	array( 'noriks-cloudstep-mnenje-1.webp', 'Kao da hodam po oblacima', 'Kupio sam ih očekujući pristojnu udobnost. Stvarno je osjećaj kao da hodam po oblacima – uhvatio sam se kako ih nosim po kući iako imam i druge cipele. Debeli potplat čini pravu razliku. Vrijede puno više od cijene.', 'Goran', 'Bijela' ),
	array( 'noriks-cloudstep-mnenje-2.webp', 'Cijela obitelj ih obožava', 'Kupila sam par za tatu koji se stalno žali na stopala. Nosi ih svaki dan otkad su stigle – na bazen, u dućan, po kući. Kaže da su to najudobnije cipele koje je ikad imao. Već sam naručila par i za sebe.', 'Lidija', 'Crna' ),
	array( 'noriks-cloudstep-mnenje-3.webp', 'Udobnije od svega što sam nosila', 'Godinama na poslu nosim klompe. Ove su puno udobnije, izdržljivije, a protuklizni potplat stvarno bolje drži. Uz to mi se stopala ne znoje. Ne vraćam se na stare.', 'Jelena', 'Plava' ),
);
?>
<div class="wscs">
<section class="wscs__s wscs__s--bg"><div class="wscs__v wscs__dva"><div class="wscs__media wscs__media--kv"><video src="<?php echo esc_url( $cs_u . 'noriks-cloudstep-izdrzljive.mp4' ); ?>" poster="<?php echo esc_url( $cs_u . 'noriks-cloudstep-izdrzljive.jpg' ); ?>" autoplay muted loop playsinline webkit-playsinline preload="metadata" aria-label="Bijela NORIKS CloudStep klompa se savija u rukama – mekani, a izdržljivi potplat"></video><span class="wscs__bad">Savitljive i čvrste</span></div><div><div class="wscs__kicker">Izdržljive, a udobne</div><h2 class="wscs__h2">Za ljude koji su <em>cijeli dan na nogama</em></h2><p class="wscs__p">Smjena u skladištu, kuhinja u restoranu, bolnički hodnik ili jednostavno dan pun obaveza – stopala to osjete prva. NORIKS CloudStep klompe napravljene su za ljude koji satima stoje i hodaju: izdržljive, protuklizne, prozračne i mekane kao oblak.</p><p class="wscs__p">Debeli 3D potplat s ugrađenim zračnim komorama upija svaki korak, a gornji dio se savija s nogom umjesto da je steže. Klompa se u rukama savije gotovo napola, a opet se vrati u isti oblik – i nakon stotina kilometara.</p><ul class="wscs__feat"><?php echo $cs_li( 'oblak', 'Hod bez boli', 'Mekani potplat rasterećuje stopala, koljena i leđa.' ); echo $cs_li( 'zrak', 'Prozračne i za široka stopala', 'Otvori na gornjem dijelu i prostran kroj prstiju.' ); echo $cs_li( 'potplat', 'Protuklizne za duge smjene', 'Đon drži na mokrim i masnim podovima.' ); echo $cs_li( 'kapljica', 'Suhe i po kiši', 'Vodootporan materijal – obrišete i gotovo.' ); ?></ul><p class="wscs__zak">Udobnost koja izdrži cijelu smjenu – i još pokoju.</p></div></div></section>
<section class="wscs__s"><div class="wscs__v wscs__dva wscs__dva--rev"><div class="wscs__media wscs__media--kv"><img src="<?php echo esc_url( $cs_u . 'noriks-cloudstep-plava.webp' ); ?>" alt="Bijelo-plava NORIKS CloudStep klompa s oznakama: prozračne, podesivo pristajanje, vodootporne, mekane kao oblak, protuklizni potplat" loading="eager" decoding="async"><span class="wscs__bad">Ljetni favorit</span></div><div><div class="wscs__kicker">Savršene za ovo ljeto</div><h2 class="wscs__h2">Papuča ili cipela – <em>vi birate</em></h2><p class="wscs__p">Od jutarnjih obaveza do roštilja u dvorištu: s remenom preko pete CloudStep sjedi kao cipela, a s remenom podignutim naprijed obuvate ih kao papuču. Jedan par za kuću, vrt, plažu, bazen i grad.</p><p class="wscs__p">Vodootporne su i prozračne, pa ljeti stopala ne kuhaju, a nakon mora ili bazena samo ih isperete vodom. Lagane su, ne upijaju vlagu i brzo se suše – idealne za dane kad ste stalno u pokretu.</p><ul class="wscs__feat"><?php echo $cs_li( 'kopca', 'Podesivi remen s kopčom', 'Preko pete za siguran korak ili naprijed kao papuča.' ); echo $cs_li( 'sunce', 'Ljeto bez znojenja', 'Zrak prolazi kroz otvore na gornjem dijelu.' ); echo $cs_li( 'kuca', 'Kuća, vrt i plaža', 'Jedan par za sve što vam donese dan.' ); echo $cs_li( 'pero', 'Lagane', 'Ne umaraju noge ni nakon cijelog dana.' ); ?></ul><p class="wscs__zak">Obujete ih ujutro i zaboravite da ih nosite.</p></div></div></section>
<section class="wscs__s wscs__s--bg"><div class="wscs__v wscs__dva wscs__dva--vid"><div><div class="wscs__kicker">Viralne na društvenim mrežama</div><h2 class="wscs__h2">Klompe o kojima <em>svi pričaju</em></h2><p class="wscs__p">Kad ljudi jednom osjete koliko je potplat mekan, snime to i podijele. U videima kupaca vidi se ono najvažnije: kako se klompa savija u ruci, kako izgleda debeli 3D potplat sa zračnim komorama i kako sjedi na nozi – sa čarapama ili bez njih.</p><p class="wscs__p">Bijela, crna, plava, ružičasta i siva – kupci ih nose na posao, u auto, po kući i na ljetovanju. Mnogi nakon prvog para naruče još jedan za partnera ili roditelje.</p><ul class="wscs__kv"><li>Mekan potplat koji se vidi već na prvi pogled.</li><li>Kopča i remen za siguran korak.</li><li>Izgled koji ide i uz trenirku i uz traperice.</li></ul><p class="wscs__zak">Pogledajte zašto ih kupci ne žele izuti.</p></div><div class="wscs__vg"><div class="wscs__vk"><video src="<?php echo esc_url( $cs_u . 'noriks-cloudstep-viral-1.mp4' ); ?>" poster="<?php echo esc_url( $cs_u . 'noriks-cloudstep-viral-1.jpg' ); ?>" autoplay muted loop playsinline webkit-playsinline preload="metadata" aria-label="Kupac u bijelim NORIKS CloudStep klompama ulazi u auto"></video></div><div class="wscs__vk"><video src="<?php echo esc_url( $cs_u . 'noriks-cloudstep-viral-2.mp4' ); ?>" poster="<?php echo esc_url( $cs_u . 'noriks-cloudstep-viral-2.jpg' ); ?>" autoplay muted loop playsinline webkit-playsinline preload="metadata" aria-label="Kupac pokazuje mekani potplat NORIKS CloudStep klompe"></video></div></div></div></section>
<section class="wscs__s"><div class="wscs__v wscs__30"><span class="wscs__30i"><?php echo $cs_svg( $cs_ik['stit'], 40 ); ?><b>30</b></span><div class="wscs__kicker wscs__c">Isprobajte bez rizika</div><h2 class="wscs__h2 wscs__c">30 dana da ih <em>isprobate</em></h2><p class="wscs__p wscs__c">Svaki par dolazi s 30 dana za povrat novca. Ako vam se ne svide, javite nam se unutar 30 dana i vratit ćemo vam novac – bez kompliciranja. Nemate što izgubiti.</p><ul class="wscs__feat wscs__feat--3"><?php echo $cs_li( 'povrat', '30 dana za povrat', 'Rok teče od dana kad paket stigne.' ); echo $cs_li( 'zamjena', 'Zamjena veličine', 'Krivi broj zamijenite unutar 30 dana.' ); echo $cs_li( 'novac', 'Plaćanje pouzećem', 'Platite tek kad paket stigne.' ); ?></ul></div></section>
<section class="wscs__s wscs__s--bg"><div class="wscs__v"><div class="wscs__kicker wscs__c">Kupci ih vole</div><h2 class="wscs__h2 wscs__c">Što kažu oni koji ih <em>već nose</em></h2><p class="wscs__p wscs__c">Ocjena 4,8 od 5 – 120.000 kupaca vjeruje NORIKS-u.</p><div class="wscs__grid wscs__kar"><?php foreach ( $cs_mnenja as $m ) : ?><div class="wscs__k"><div class="wscs__km"><img src="<?php echo esc_url( $cs_u . $m[0] ); ?>" alt="<?php echo esc_attr( 'Kupac u NORIKS CloudStep klompama, boja ' . $m[4] . ' – ' . $m[3] ); ?>" loading="eager" decoding="async"></div><div class="wscs__kt"><span class="wscs__zv">★★★★★</span><strong class="wscs__nm"><?php echo esc_html( $m[1] ); ?></strong><p><?php echo esc_html( $m[2] ); ?></p><span class="wscs__ime"><i class="wscs__av" aria-hidden="true"><?php echo esc_html( mb_substr( $m[3], 0, 1 ) ); ?></i><?php echo esc_html( $m[3] ); ?> <small>· Provjereni kupac · <?php echo esc_html( $m[4] ); ?></small></span></div></div><?php endforeach; ?></div><p class="wscs__zak wscs__zak--c">Mekano od prvog koraka – ili novac natrag.</p></div></section>
<section class="wscs__s npg-s"><?php $npg = array( 'izdelek' => 'NORIKS CloudStep', 'barva' => '#0060b8' ); include __DIR__ . '/noriks-pogoji.php'; ?></section>
</div>
<style>
.wscs{color:#1c1c1c;font-family:inherit}
.wscs__s{padding:72px 0;background:#fff}.wscs__s--bg{background:#eaf2fb}
.wscs__v{width:100%;max-width:1240px;margin:0 auto;padding:0 24px;box-sizing:border-box}
.wscs__c{text-align:center}
.wscs__kicker{display:inline-flex;align-items:center;gap:10px;font-size:13px;letter-spacing:1.4px;text-transform:uppercase;color:#004f99;margin:0 0 10px;font-weight:800}
.wscs__kicker::before{content:"";width:26px;height:2px;background:#0060b8;border-radius:2px}
.wscs__kicker.wscs__c{display:flex;justify-content:center}
.wscs__h2{font-size:clamp(26px,3vw,36px);font-weight:800;line-height:1.2;margin:0 0 18px;color:#1c1c1c}.wscs__h2 em{font-style:italic;color:#004f99}
.wscs__p{font-size:16px;line-height:1.65;color:#333;margin:0 0 14px}
.wscs__p.wscs__c{max-width:none}
.wscs__p2{margin-top:16px!important;color:#555!important;font-size:14.5px!important}
.wscs__zak{font-size:16.5px;font-weight:800;line-height:1.5;margin:20px 0 0;padding-left:14px;border-left:3px solid #0060b8}
.wscs__zak--c{text-align:center;border-left:0;padding-left:0;margin-top:28px}
.wscs__dva{display:grid;grid-template-columns:1fr 1fr;gap:56px;align-items:center}
.wscs__dva--tab{grid-template-columns:5fr 6fr;align-items:start}
.wscs__media{position:relative;border-radius:18px;overflow:hidden;box-shadow:0 14px 36px rgba(0,60,120,.16);aspect-ratio:4/5;background:#fff}
.wscs__media--kv{aspect-ratio:1/1}
.wscs__media img{width:100%;height:100%;object-fit:cover;display:block}
.wscs__bad{position:absolute;left:16px;top:16px;background:#fff;color:#004f99;font-weight:800;font-size:13px;letter-spacing:.8px;text-transform:uppercase;padding:7px 13px;border-radius:30px;box-shadow:0 4px 14px rgba(0,0,0,.12)}
.wscs__feat{list-style:none;margin:8px 0 0;padding:0;display:grid;grid-template-columns:1fr 1fr;gap:14px}
.wscs__feat--3{grid-template-columns:repeat(3,1fr);margin-top:26px;text-align:left}
.wscs__feat li{display:flex;gap:14px;align-items:flex-start;background:#fff;border-radius:16px;padding:16px;box-shadow:0 6px 20px rgba(0,60,120,.09);list-style:none;margin:0;transition:transform .2s,box-shadow .2s}
.wscs__s:not(.wscs__s--bg) .wscs__feat li{background:#f4f8fd}
.wscs__feat li:hover{transform:translateY(-2px);box-shadow:0 12px 26px rgba(0,60,120,.14)}
.wscs__feat strong{display:block;font-size:15.5px;font-weight:800;margin:0 0 3px}.wscs__feat p{margin:0;font-size:14.5px;line-height:1.5;color:#555}
.wscs__fi{flex:0 0 46px;width:46px;height:46px;border-radius:50%;background:#d6e6f7;color:#004f99;display:flex;align-items:center;justify-content:center}
.wscs__kv{list-style:none;margin:6px 0 0;padding:0}
.wscs__kv li{position:relative;padding:0 0 0 32px;margin:0 0 12px;font-size:15.5px;line-height:1.55;color:#333;list-style:none}
.wscs__kv li::before{content:"✓";position:absolute;left:0;top:0;width:22px;height:22px;border-radius:50%;background:#d6e6f7;color:#004f99;font-weight:800;font-size:13px;display:flex;align-items:center;justify-content:center}
.wscs__tw{overflow-x:auto;border-radius:16px;box-shadow:0 8px 24px rgba(0,60,120,.10);background:#fff}
.wscs__tab{width:100%;border-collapse:collapse;font-size:15px;margin:0}
.wscs__tab th{background:#1c1c1c!important;color:#fff!important;font-weight:800;padding:14px 16px;text-align:center;border:0}
.wscs__tab td{padding:11px 16px;text-align:center;border:0;border-bottom:1px solid #dde8f4;color:#333}
.wscs__tab tbody tr:nth-child(even) td{background:#f4f8fd}
.wscs__tab tbody tr:last-child td{border-bottom:0}
.wscs__grid{display:grid;gap:22px;margin-top:26px}
.wscs__g4{grid-template-columns:repeat(4,1fr)}
.wscs__k{background:#fff;border-radius:16px;overflow:hidden;display:flex;flex-direction:column;box-shadow:0 8px 24px rgba(0,60,120,.10);transition:transform .2s,box-shadow .2s}
.wscs__k:hover{transform:translateY(-3px);box-shadow:0 14px 30px rgba(0,60,120,.16)}
.wscs__k--ik{padding:28px 24px;text-align:center;align-items:center}
.wscs__k--ik strong{display:block;font-size:17px;font-weight:800;margin:0 0 8px;text-transform:uppercase;letter-spacing:.4px}
.wscs__k--ik p{margin:0;font-size:15px;line-height:1.55;color:#555}
.wscs__ki{width:64px;height:64px;border-radius:50%;background:#d6e6f7;color:#004f99;display:flex;align-items:center;justify-content:center;margin:0 0 16px;box-shadow:inset 0 0 0 1.5px #0060b8}
.wscs__30{text-align:center}
.wscs__30i{position:relative;display:inline-flex;align-items:center;justify-content:center;width:92px;height:92px;border-radius:50%;background:#d6e6f7;color:#004f99;margin:0 0 18px}
.wscs__30i b{position:absolute;right:-6px;bottom:-4px;background:#0060b8;color:#fff;font-size:15px;font-weight:800;border-radius:20px;padding:3px 9px}
.wscs__km img{width:100%;aspect-ratio:4/5;object-fit:cover;display:block}
.wscs__kt{padding:20px 22px 24px;flex:1;display:flex;flex-direction:column}
.wscs__nm{font-size:17px;font-weight:800;margin:0 0 8px}
.wscs__kt p{margin:0 0 14px;font-size:15.5px;line-height:1.55;color:#333;flex:1}
.wscs__zv{color:#e0a33c;letter-spacing:2px;display:block;margin-bottom:8px}
.wscs__ime{display:flex;align-items:center;flex-wrap:wrap;font-weight:800;font-size:14.5px}.wscs__ime small{font-weight:600;color:#777;margin-left:6px;font-size:13px}
.wscs__av{display:inline-flex;align-items:center;justify-content:center;width:30px;height:30px;border-radius:50%;background:#d6e6f7;color:#004f99;font-style:normal;font-weight:800;font-size:13px;margin-right:9px}
.wscs__karw{position:relative}
.wscs__kar{grid-auto-flow:column;grid-auto-columns:calc((100% - 44px)/3);overflow-x:auto;scroll-snap-type:x mandatory;scrollbar-width:none}
.wscs__kar::-webkit-scrollbar{display:none}.wscs__kar>*{scroll-snap-align:start}
.wscs__pus{position:absolute;top:42%;transform:translateY(-50%);width:44px;height:44px;border-radius:50%;border:0;background:#fff;box-shadow:0 4px 14px rgba(0,0,0,.18);font-size:24px;line-height:44px;cursor:pointer;z-index:2;color:#004f99;padding:0;display:none}
.wscs__pus--l{left:-14px}.wscs__pus--d{right:-14px}
.wscs__media video{width:100%;height:100%;object-fit:cover;display:block}
.wscs__dva--rev>.wscs__media{order:2}
.wscs__dva--vid{grid-template-columns:1fr 1fr}
.wscs__vg{display:grid;grid-template-columns:1fr 1fr;gap:20px}
.wscs__vk{border-radius:18px;overflow:hidden;box-shadow:0 14px 36px rgba(0,60,120,.16);aspect-ratio:9/16;background:#dfe9f5}
.wscs__vk video{width:100%;height:100%;object-fit:cover;display:block}
@media (max-width:1024px){.wscs__g4{grid-template-columns:repeat(2,1fr)}}
@media (max-width:860px){
.wscs__s{padding:48px 0}
.wscs__dva,.wscs__dva--tab,.wscs__dva--vid{grid-template-columns:1fr;gap:26px}
.wscs__dva--rev>.wscs__media{order:0}
.wscs__vg{gap:12px}
.wscs__kar{grid-auto-columns:82%}.wscs__pus{display:block}.wscs__pus--l{left:4px}.wscs__pus--d{right:4px}
.wscs__feat--3{grid-template-columns:1fr}
}
@media (max-width:767px){.wscs__v{padding:0 16px}}
@media (max-width:560px){.wscs__feat{grid-template-columns:1fr}.wscs__h2{font-size:25px}.wscs__g4{grid-template-columns:1fr}.wscs__tab{font-size:14px}.wscs__tab th,.wscs__tab td{padding:10px 8px}}
</style>
<script>
(function(){document.querySelectorAll('.wscs__kar').forEach(function(k){
  var w=document.createElement('div');w.className='wscs__karw';k.parentNode.insertBefore(w,k);w.appendChild(k);
  ['l','d'].forEach(function(s){var b=document.createElement('button');b.type='button';b.className='wscs__pus wscs__pus--'+s;b.setAttribute('aria-label',s==='l'?'Prethodno':'Sljedeće');b.innerHTML=s==='l'?'&#8249;':'&#8250;';
    b.addEventListener('click',function(){var x=k.firstElementChild;var d=x?x.getBoundingClientRect().width+22:300;k.scrollBy({left:s==='l'?-d:d,behavior:'smooth'});});w.appendChild(b);});
});})();
</script>
