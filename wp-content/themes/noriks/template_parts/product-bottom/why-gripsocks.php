<?php
/**
 * NORIKS GripSocks — nedrsece sportske carape do gleznja: why sekcije po strukturi originala
 * (stepzz.co/products/stepzz-ankle-grip-socks-1x-pair-of-stepzz-grips).
 *
 * (opis pod gumbom, od vrha navzdol)
 * STRUKTURA ORIGINALA:
   1. 4 prednosti v vrsti z ikono kljukice (Anti-Slip Technology, Increased Performance, Premium Comfort, Goodbye Blisters) - pri nas mreza 4 kartic z ikonami
   2. tekoci trak "Pros Choose ..." (ime tuje znamke) - pri nas staticen trak prednosti z ikonami (tekoci trakovi in tuja znamka prepovedani)
   3. drsnik (karusel) 4 profesionalnih igralcev ragbija s fotografijo in klubom - pri nas 4 kartice s sliko po sportih (namizje mreza, mobilno karusel s scroll-snap) (brez imen in fotografij tujih sportasev - to bi bila izmisljena priporocila)
   4. video levo + besedilo desno ("It's Time to Upgrade", 9 barv, velikosti) - pri nas video (napisi prevedeni) levo, besedilo desno
   5. Customer Reviews (widget z mnenji) - pri nas ocena + 4 kartice mnenj (prevedena z originala)
   6. pogoji trgovine - pri nas skupna sekcija NORIKS pogoji
 * BARVA ORIGINALA: #2f6fd6 (modro ozadje videa in oznak originala); svetel ton za --bg #edf3fc
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
$wgs_t   = get_template_directory_uri();
$wgs_i   = function ( $f ) use ( $wgs_t ) { return esc_url( $wgs_t . '/img/gripsocks/' . $f ); };
$wgs_svg = '<svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">';
?>
<div class="wgs">

<section class="wgs__s wgs__s--bg"><div class="wgs__v">
  <div class="wgs__kicker wgs__c">Zašto NORIKS GripSocks</div>
  <h2 class="wgs__h2 wgs__c">Stopalo ostaje u tenisici – <em>vi ostajete u igri</em></h2>
  <p class="wgs__p wgs__c">Kad noga klizi u tenisici, gubite brzinu, ravnotežu i snagu – a dobivate žuljeve. Četiri razloga zašto sportaši prelaze na čarape s nedrsećim potplatom.</p>
  <div class="wgs__kar">
    <div class="wgs__kk"><span class="wgs__ik"><?php echo $wgs_svg; ?><circle cx="7" cy="9" r="1.6"/><circle cx="12" cy="9" r="1.6"/><circle cx="17" cy="9" r="1.6"/><circle cx="9.5" cy="14" r="1.6"/><circle cx="14.5" cy="14" r="1.6"/><path d="M4 19h16"/></svg></span><strong>Tehnologija protiv klizanja</strong><p>Napredni uzorak gumenih točkica daje stabilnost i sprječava klizanje – za sigurnost i kontrolu u svakoj aktivnosti.</p></div>
    <div class="wgs__kk"><span class="wgs__ik"><?php echo $wgs_svg; ?><path d="M4 20h4v-6H4zM10 20h4V9h-4zM16 20h4V4h-4z"/></svg></span><strong>Bolja izvedba</strong><p>Čvrst kroj i vrhunsko prianjanje poboljšavaju kontrolu i brzinu reakcije – na terenu i u teretani.</p></div>
    <div class="wgs__kk"><span class="wgs__ik"><?php echo $wgs_svg; ?><path d="M3 15c3-4 6-4 9 0s6 4 9 0"/><path d="M3 9c3-4 6-4 9 0s6 4 9 0"/></svg></span><strong>Vrhunska udobnost</strong><p>Prozračan materijal s jastučićima drži stopala svježima i udobnima i smanjuje umor tijekom dana.</p></div>
    <div class="wgs__kk"><span class="wgs__ik"><?php echo $wgs_svg; ?><path d="M12 3l7 3v6c0 4.5-3 7.5-7 9-4-1.5-7-4.5-7-9V6z"/><path d="M9 12l2 2 4-4"/></svg></span><strong>Zbogom žuljevi</strong><p>Dizajn bez šavova i jastučići sprječavaju žuljeve – udobnost bez iritacije i kod dugih aktivnosti.</p></div>
  </div>
</div></section>

<section class="wgs__s wgs__s--traka"><div class="wgs__v">
  <div class="wgs__traka">
    <div><span class="wgs__ik wgs__ik--s"><?php echo $wgs_svg; ?><path d="M12 3a9 9 0 1 0 0 18 9 9 0 0 0 0-18z"/><path d="M12 7l3 2-1 4h-4l-1-4z"/></svg></span><strong>Za utakmicu i trening</strong></div>
    <div><span class="wgs__ik wgs__ik--s"><?php echo $wgs_svg; ?><path d="M3 12h18"/><path d="M12 3c3 3 3 15 0 18M12 3c-3 3-3 15 0 18"/></svg></span><strong>10 boja</strong></div>
    <div><span class="wgs__ik wgs__ik--s"><?php echo $wgs_svg; ?><path d="M4 18c1-4 4-6 8-6h3l5 2v4z"/><path d="M8 12V6h4v6"/></svg></span><strong>EU 35 do 49</strong></div>
    <div><span class="wgs__ik wgs__ik--s"><?php echo $wgs_svg; ?><path d="M12 2.5c3 3.5 6 6.5 6 10a6 6 0 0 1-12 0c0-3.5 3-6.5 6-10z"/></svg></span><strong>Odvodi znoj</strong></div>
  </div>
</div></section>

<section class="wgs__s wgs__s--bg"><div class="wgs__v">
  <div class="wgs__kicker wgs__c">Za svaki sport</div>
  <h2 class="wgs__h2 wgs__c">Sportaši koji ne smiju <em>izgubiti oslonac</em></h2>
  <p class="wgs__p wgs__c">Napravljene za kontaktne sportove poput ragbija – a kupci ih nose i na kriketu, košarci, golfu i u šetnji sa psom. Gdje god vam stopalo mora ostati na mjestu.</p>
  <div class="wgs__sport">
    <div class="wgs__sk"><div class="wgs__sm"><img src="<?php echo $wgs_i( 'noriks-gripsocks-04-plava.webp' ); ?>" alt="NORIKS GripSocks s plavim nedrsećim točkicama" loading="eager" decoding="async"></div><div class="wgs__st"><strong>Ragbi i nogomet</strong><p>Nagli startovi, promjene smjera i duel – stopalo ne klizi u kopački.</p></div></div>
    <div class="wgs__sk"><div class="wgs__sm"><img src="<?php echo $wgs_i( 'noriks-gripsocks-07-narancasta.webp' ); ?>" alt="NORIKS GripSocks s narančastim nedrsećim točkicama" loading="eager" decoding="async"></div><div class="wgs__st"><strong>Košarka</strong><p>Skokovi i doskoci bez proklizavanja u tenisici.</p></div></div>
    <div class="wgs__sk"><div class="wgs__sm"><img src="<?php echo $wgs_i( 'noriks-gripsocks-10-zelena.webp' ); ?>" alt="NORIKS GripSocks sa zelenim nedrsećim točkicama" loading="eager" decoding="async"></div><div class="wgs__st"><strong>Kriket i golf</strong><p>Stabilan zalet i siguran stav pri udarcu.</p></div></div>
    <div class="wgs__sk"><div class="wgs__sm"><img src="<?php echo $wgs_i( 'noriks-gripsocks-05-crvena.webp' ); ?>" alt="NORIKS GripSocks s crvenim nedrsećim točkicama" loading="eager" decoding="async"></div><div class="wgs__st"><strong>Teretana i svaki dan</strong><p>Čučanj, iskorak ili šetnja – udobno cijeli dan.</p></div></div>
  </div>
</div></section>

<section class="wgs__s"><div class="wgs__v wgs__dva">
  <div class="wgs__media"><video src="<?php echo esc_url( $wgs_t . '/img/gripsocks/noriks-gripsocks-video-prednosti.mp4' ); ?>" poster="<?php echo esc_url( $wgs_t . '/img/gripsocks/noriks-gripsocks-video-prednosti.jpg' ); ?>" autoplay muted loop playsinline webkit-playsinline preload="metadata" aria-label="NORIKS GripSocks u različitim bojama – udobnost, protiv klizanja, bolja izvedba"></video><span class="wgs__znacka">10 boja</span></div>
  <div>
    <div class="wgs__kicker">Vrijeme je za nadogradnju</div>
    <h2 class="wgs__h2">Bacite stare čarape – <em>i podignite razinu</em></h2>
    <p class="wgs__p">Obične pamučne čarape u tenisici kližu, skupljaju se i natapaju znojem. NORIKS GripSocks drže stopalo na mjestu, odvode vlagu i štite od žuljeva – od zagrijavanja do zadnje minute.</p>
    <p class="wgs__p">Birate između <strong>10 boja</strong> – za klupske boje ili za svaki dan u tjednu – i četiri veličine za pravo pristajanje.</p>
    <div class="wgs__vel">
      <div><strong>XS</strong><span>EU 35 do 38</span></div>
      <div><strong>S</strong><span>EU 38,5 do 43</span></div>
      <div><strong>M</strong><span>EU 44 do 47</span></div>
      <div><strong>L</strong><span>EU 47,5 do 49</span></div>
    </div>
    <ul class="wgs__kv"><li>Gumene točkice na cijelom potplatu</li><li>Prozračan materijal koji odvodi znoj</li><li>Jastučići i dizajn bez šavova protiv žuljeva</li></ul>
  </div>
</div></section>

<section class="wgs__s wgs__s--bg"><div class="wgs__v">
  <div class="wgs__kicker wgs__c">Iz recenzija</div>
  <h2 class="wgs__h2 wgs__c">Što kažu <em>naši kupci</em></h2>
  <p class="wgs__c"><span class="wgs__ocj"><strong>4,8</strong> <span class="wgs__zv">★★★★★</span> na temelju 1.081 recenzije</span></p>
  <div class="wgs__mn">
    <div class="wgs__mk"><span class="wgs__nav">“</span><strong class="wgs__mn-n">Savršene za kriket</strong><p>Kao bacač obožavam ove čarape za kriket. Tako su udobne i nježne za stopala. Odlične i za obično vježbanje. Toplo preporučujem!</p><div class="wgs__mh"><span class="wgs__av">S</span><div><strong>Sanja K.</strong><span>provjereni kupac</span></div><span class="wgs__zv">★★★★★</span></div></div>
    <div class="wgs__mk"><span class="wgs__nav">“</span><strong class="wgs__mn-n">Unuk ih obožava</strong><p>Unuk ih je odmah zavolio, a uzela sam i za dvije unuke koje igraju košarku.</p><div class="wgs__mh"><span class="wgs__av">B</span><div><strong>Branka M.</strong><span>provjereni kupac</span></div><span class="wgs__zv">★★★★★</span></div></div>
    <div class="wgs__mk"><span class="wgs__nav">“</span><strong class="wgs__mn-n">Potpuna udobnost</strong><p>Potpuno su mi udobne, bilo da igram golf ili samo šećem psa. Obožavam ih.</p><div class="wgs__mh"><span class="wgs__av">J</span><div><strong>Jakov T.</strong><span>provjereni kupac</span></div><span class="wgs__zv">★★★★★</span></div></div>
    <div class="wgs__mk"><span class="wgs__nav">“</span><strong class="wgs__mn-n">Jedine za dan utakmice</strong><p>Jedine čarape koje nosim na dan utakmice. Drže me na vrhuncu forme. Iskreno najbolje čarape s gumicama koje sam imao.</p><div class="wgs__mh"><span class="wgs__av">D</span><div><strong>Dino L.</strong><span>provjereni kupac</span></div><span class="wgs__zv">★★★★★</span></div></div>
  </div>
</div></section>

<section class="wgs__s npg-s"><?php $npg = array( 'izdelek' => 'NORIKS GripSocks', 'barva' => '#2f6fd6' ); include __DIR__ . '/noriks-pogoji.php'; ?></section>
</div>
<style>
.wgs{color:#14203a;font-family:inherit}
.wgs__s{padding:72px 0;background:#fff}.wgs__s.wgs__s--bg{background:#edf3fc}
.wgs__s.wgs__s--traka{padding:36px 0}
.wgs__v{width:100%;max-width:1240px;margin:0 auto;padding:0 24px;box-sizing:border-box}
.wgs__c{text-align:center}
.wgs__kicker{font-size:13px;letter-spacing:1.8px;text-transform:uppercase;color:#2f6fd6;margin:0 0 8px;font-weight:700}
.wgs__kicker::before{content:"";display:inline-block;width:22px;height:2px;background:#2f6fd6;vertical-align:middle;margin:-2px 10px 0 0;border-radius:2px}
.wgs__h2{font-size:clamp(24px,3vw,34px);font-weight:800;line-height:1.2;margin:0 0 16px;color:#14203a}.wgs__h2 em{font-style:italic;color:#2f6fd6}
.wgs__p{font-size:15.5px;line-height:1.65;color:#3a465e;margin:0 0 14px}
.wgs__ik{width:52px;height:52px;border-radius:50%;background:#dbe7fa;color:#1f56b0;display:flex;align-items:center;justify-content:center;flex:0 0 52px}
.wgs__ik--s{width:42px;height:42px;flex-basis:42px}.wgs__ik--s svg{width:21px;height:21px}
.wgs__kar{display:grid;grid-template-columns:repeat(4,1fr);gap:20px;margin-top:24px}
.wgs__kk{background:#fff;border-radius:16px;padding:26px 22px;box-shadow:0 8px 22px rgba(31,86,176,.09);transition:transform .2s,box-shadow .2s}
.wgs__kk:hover,.wgs__sk:hover,.wgs__mk:hover{transform:translateY(-3px);box-shadow:0 14px 30px rgba(31,86,176,.15)}
.wgs__kk strong{display:block;font-size:16.5px;margin:14px 0 8px}.wgs__kk p{margin:0;font-size:14.5px;line-height:1.6;color:#4a5670}
.wgs__traka{display:grid;grid-template-columns:repeat(4,1fr)}
.wgs__traka>div{display:flex;align-items:center;justify-content:center;gap:12px;padding:6px 10px}
.wgs__traka>div+div{border-left:1px solid #dfe7f4}.wgs__traka strong{font-size:15.5px}
.wgs__sport{display:grid;grid-template-columns:repeat(4,1fr);gap:20px;margin-top:24px}
.wgs__sk{background:#fff;border-radius:16px;overflow:hidden;box-shadow:0 8px 22px rgba(31,86,176,.09);display:flex;flex-direction:column;transition:transform .2s,box-shadow .2s}
.wgs__sm{aspect-ratio:1/1;background:linear-gradient(160deg,#f4f8fe,#dfeafb)}.wgs__sm img{width:100%;height:100%;object-fit:contain;display:block}
.wgs__st{padding:18px 20px 20px}.wgs__st strong{font-size:16.5px}.wgs__st p{margin:6px 0 0;font-size:14.5px;line-height:1.55;color:#4a5670}
.wgs__dva{display:grid;grid-template-columns:1fr 1fr;gap:56px;align-items:center}
.wgs__media{position:relative;border-radius:16px;overflow:hidden;box-shadow:0 14px 34px rgba(20,32,58,.18);aspect-ratio:1/1;background:#2f6fd6}
.wgs__media video{width:100%;height:100%;object-fit:cover;display:block}
.wgs__znacka{position:absolute;left:16px;top:16px;background:#fff;color:#14203a;font-size:13px;font-weight:800;letter-spacing:1px;text-transform:uppercase;padding:7px 12px;border-radius:20px;box-shadow:0 4px 12px rgba(0,0,0,.15)}
.wgs__vel{display:grid;grid-template-columns:repeat(4,1fr);gap:10px;margin:6px 0 18px}
.wgs__vel>div{background:#edf3fc;border-radius:14px;padding:12px 6px;text-align:center}.wgs__vel strong{display:block;font-size:20px;color:#1f56b0}.wgs__vel span{font-size:13px;color:#4a5670}
.wgs__kv{list-style:none;margin:4px 0 0;padding:0}.wgs__kv li{position:relative;padding-left:30px;margin:0 0 10px;font-size:15px;line-height:1.5;list-style:none}
.wgs__kv li::before{content:"\2713";position:absolute;left:0;top:1px;width:20px;height:20px;border-radius:50%;background:#2f6fd6;color:#fff;font-size:12px;display:flex;align-items:center;justify-content:center}
.wgs__ocj{display:inline-flex;align-items:center;gap:8px;background:#fff;border-radius:30px;padding:8px 18px;font-size:14.5px;box-shadow:0 4px 14px rgba(31,86,176,.08)}
.wgs__ocj strong{font-size:22px}.wgs__zv{color:#e0a33c;letter-spacing:2px;font-size:15px}
.wgs__mn{display:grid;grid-template-columns:repeat(2,1fr);gap:24px;margin-top:26px;align-items:stretch}
.wgs__mk{background:#fff;border-radius:16px;padding:28px 26px 22px;box-shadow:0 8px 24px rgba(31,86,176,.10);display:flex;flex-direction:column;transition:transform .2s,box-shadow .2s}
.wgs__nav{font-size:56px;line-height:.6;color:#bcd0f2;font-weight:800;font-family:Georgia,serif}
.wgs__mn-n{font-size:17px;margin-top:10px}
.wgs__mk p{margin:8px 0 18px;font-size:16px;line-height:1.6;color:#2a344a;flex:1}
.wgs__mh{display:flex;align-items:center;gap:12px}
.wgs__mh strong{display:block;font-size:15px}.wgs__mh span{font-size:13px;color:#66718a}.wgs__mh .wgs__zv{margin-left:auto;font-size:13px}
.wgs__mh .wgs__av{width:44px;height:44px;border-radius:50%;background:#2f6fd6;color:#fff;font-weight:800;font-size:17px;display:flex;align-items:center;justify-content:center;flex:0 0 44px}
@media (max-width:1024px){.wgs__kar,.wgs__sport{grid-template-columns:repeat(2,1fr)}}
@media (max-width:767px){
  .wgs__s{padding:48px 0}.wgs__s.wgs__s--traka{padding:24px 0}.wgs__v{padding:0 16px}
  .wgs__kar{grid-template-columns:1fr;gap:12px}
  .wgs__traka{grid-template-columns:repeat(2,1fr);row-gap:12px}.wgs__traka>div{justify-content:flex-start}.wgs__traka>div+div{border-left:0}.wgs__traka strong{font-size:14px}
  .wgs__sport{display:flex;overflow-x:auto;scroll-snap-type:x mandatory;gap:12px;padding-bottom:8px;-webkit-overflow-scrolling:touch}.wgs__sk{flex:0 0 72%;scroll-snap-align:start}.wgs__st{padding:14px}.wgs__st strong{font-size:15px}.wgs__st p{font-size:13.5px}
  .wgs__dva{grid-template-columns:1fr;gap:26px}
  .wgs__vel{grid-template-columns:repeat(2,1fr)}
  .wgs__mn{grid-template-columns:1fr;gap:14px}
}
</style>
