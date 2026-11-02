<?php
/**
 * NORIKS CompTank — muska kompresijska potkosulja bez rukava: why sekcije po strukturi originala
 * (in-shape.co/products/inshape-beaters).
 *
 * STRUKTURA ORIGINALA:
   1. Feel good in your shirts again: naslov + 4 zgodbe kupcev (fotografija prije/poslije + ime + citat) - pri nas naslov + 4 kartice v ENI vrsti (fotografija zgoraj, ime, citat pod njo; mobil karusel)
   2. InShape vs cheap brands: 4 vrstice prednosti + primerjalna tabela (Ultra Comfortable, Rolls up, Doesn't Stretch Out, Discreet Fit, Back Support) + PS besedilo - pri nas seznam s kljukicami levo + tabela desno + PS kot zakljucek
   3. Real men. Real confidence: karusel 4 video mnenj (ime + 5 zvezdic) - pri nas 4 videi v vrsti (mobil karusel), vzgani EN podnapisi zamenjani s HR
   4. Over 10,000 men already got their confidence back 4.7/5: mreza mnenj kupcev (naslov + besedilo + ime) - pri nas 6 kartic mnenj z ikono navodnic (brez tuje stevilke kupcev, nase 120.000 in 4,8)
   5. 4 slike v vrsti z naslovom in besedilom pod sliko (1. primerjava z drugimi markami = Extended length, 2. tkanina = Premium fabric, 3. pod srajco/raztezanje = Lasting quality, 4. raztezanje majice = 4-way compression) - pri nas 4 kartice v istem vrstnem redu z istimi naslovi in besedili
   6. Confidence that you can wear: prije/poslije (Without InShape / With InShape) - pri nas dve sliki ob sebi z oznakama Bez / S NORIKS
   7. FAQ (6 vprasanj) - pri nas v FAQ spodaj (auto_reviews/FAQ_HR_comptank.php), brez tujega jamstva 60 dni
   8. Top Sellers (drugi izdelki) - IZPUSCENO (tuji izdelki)
   9. Message from the founder: fotografija cez celo sirino (visina 650 px, temna prosojna plast 70 %) z besedilom sredinsko na sliki - pri nas enako, sporocilo NORIKS tima (brez tujega imena, tuj napis na steni odstranjen)
   10. pogoji trgovine (60-day fit promise, free shipping over $95) - pri nas skupna sekcija NORIKS pogoji
 * BARVA ORIGINALA: #1a1a1a (crna tipografija in gumbi na originalu, fotografije na hladni svetlo sivi podlagi #e9ecf1); svetel ton za --bg #eef1f5, akcent #2c3e57
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
$wct_img = get_template_directory_uri() . '/img/comptank/';
$wct_svg = '<svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">';
$wct_zv  = '<span class="wct__zv" aria-label="5 od 5">★★★★★</span>';
$wct_nav = '<span class="wct__nav" aria-hidden="true"><svg viewBox="0 0 24 24" width="20" height="20" fill="currentColor"><path d="M9.5 6C6.5 7 5 9.4 5 12.5V18h5.5v-5.5H8c0-2 .8-3.4 2.5-4.2zm9 0C15.5 7 14 9.4 14 12.5V18h5.5v-5.5H17c0-2 .8-3.4 2.5-4.2z"/></svg></span>';
?>
<div class="wct">

<section class="wct__s wct__s--bg"><div class="wct__v">
  <div class="wct__kicker wct__c">Priče kupaca</div>
  <h2 class="wct__h2 wct__c">Ponovno se osjećajte <em>dobro u svojim majicama</em></h2>
  <p class="wct__p wct__c">Četiri muškarca, četiri razloga – i ista majica ispod odjeće.</p>
  <div class="wct__price">
    <div class="wct__pk"><div class="wct__pm"><img src="<?php echo esc_url( $wct_img . 'noriks-comptank-kupac-6.webp' ); ?>" alt="Kupac nakon velikog gubitka kilograma bez majice i u crnoj NORIKS CompTank kompresijskoj majici" loading="eager" decoding="async"><span class="wct__znacka">Prije / poslije</span></div>
      <div class="wct__pt"><?php echo $wct_nav; ?><p>„NORIKS mi daje osjećaj da izgledam bolje i samopouzdanije nakon svega što sam prošao da skinem više od 220 kg. STVARNO mi pomaže sa svom viškom kože.”</p><span class="wct__ime">Josip F.</span></div></div>
    <div class="wct__pk"><div class="wct__pm"><img src="<?php echo esc_url( $wct_img . 'noriks-comptank-kupac-7.webp' ); ?>" alt="Kupac s naočalama prije i u crnoj NORIKS CompTank majici bez rukava" loading="eager" decoding="async"><span class="wct__znacka">Prije / poslije</span></div>
      <div class="wct__pt"><?php echo $wct_nav; ?><p>„Radim u restoranu i stojim na nogama 16 sati dnevno. Majica mi daje dodatnu potporu za leđa i drži sve na mjestu. Ne mogu bez nje.”</p><span class="wct__ime">Branko L.</span></div></div>
    <div class="wct__pk"><div class="wct__pm"><img src="<?php echo esc_url( $wct_img . 'noriks-comptank-kupac-5.webp' ); ?>" alt="Kupac s brkovima bez majice i u crnoj NORIKS CompTank kompresijskoj majici" loading="eager" decoding="async"><span class="wct__znacka">Prije / poslije</span></div>
      <div class="wct__pt"><?php echo $wct_nav; ?><p>„Skinuo sam 59 kg i NORIKS potpuno uklanja izbočinu trbuha ispod odjeće. Stalno me pitaju kako se nosim s viškom kože – odgovor je NORIKS.”</p><span class="wct__ime">Ivan O.</span></div></div>
    <div class="wct__pk"><div class="wct__pm"><img src="<?php echo esc_url( $wct_img . 'noriks-comptank-kupac-8.webp' ); ?>" alt="Kupac bez majice i u crnoj NORIKS CompTank majici – pogled sa strane" loading="eager" decoding="async"><span class="wct__znacka">Prije / poslije</span></div>
      <div class="wct__pt"><?php echo $wct_nav; ?><p>„Imam povećana prsa, a nemam novca za operaciju. Ova majica stvarno drži prsa ravno i bradavice se više ne ističu kroz majicu.”</p><span class="wct__ime">Erik S.</span></div></div>
  </div>
  <p class="wct__zak">Ispod majice nitko ne vidi CompTank – vidi se samo ravniji, sigurniji vi.</p>
</div></section>

<section class="wct__s"><div class="wct__v wct__dva wct__dva--tab">
  <div>
    <div class="wct__kicker">Usporedba</div>
    <h2 class="wct__h2">NORIKS protiv <em>jeftinih marki</em></h2>
    <p class="wct__p">Kompresijskih potkošulja ima puno. Razlika se vidi tek kad ih nosite cijeli dan – i nakon prvih nekoliko pranja.</p>
    <ul class="wct__kv">
      <li>Mekana, prozračna i udobna cijeli dan.</li>
      <li>Nevidljiv obris ispod odjeće – i ostaje na mjestu.</li>
      <li>Ciljane zone kompresije za trup i držanje.</li>
      <li>Zadržava kompresiju i nakon mnogo pranja.</li>
    </ul>
  </div>
  <div>
    <div class="wct__tabwrap"><table class="wct__tab">
      <thead><tr><th></th><th>NORIKS</th><th>Jeftine marke</th></tr></thead>
      <tbody>
        <tr><td>Ultra udobna</td><td class="wct__da">✓</td><td class="wct__ne">✕</td></tr>
        <tr><td>Ne podiže se i ne zavrće</td><td class="wct__da">✓</td><td class="wct__ne">✕</td></tr>
        <tr><td>Ne razvlači se</td><td class="wct__da">✓</td><td class="wct__ne">✕</td></tr>
        <tr><td>Diskretan kroj</td><td class="wct__da">✓</td><td class="wct__ne">✕</td></tr>
        <tr><td>Potpora za leđa</td><td class="wct__da">✓</td><td class="wct__ne">✕</td></tr>
      </tbody>
    </table></div>
    <p class="wct__zak">P.S. Ako tražite „jeftino”, nismo za vas. Ako se želite stvarno osjećati sigurno u svojoj odjeći – na pravom ste mjestu.</p>
  </div>
</div></section>

<section class="wct__s wct__s--bg"><div class="wct__v">
  <div class="wct__kicker wct__c">Video recenzije</div>
  <h2 class="wct__h2 wct__c">Pravi muškarci. <em>Pravo samopouzdanje.</em></h2>
  <p class="wct__p wct__c">Kupci pokazuju majicu na sebi – bez filtera i bez glume.</p>
  <div class="wct__vid">
    <div class="wct__vk"><video src="<?php echo esc_url( get_template_directory_uri() . '/img/comptank/noriks-comptank-video-ivan.mp4' ); ?>" poster="<?php echo esc_url( $wct_img . 'noriks-comptank-video-ivan.jpg' ); ?>" autoplay muted loop playsinline webkit-playsinline preload="metadata"></video><div class="wct__vt"><span class="wct__ime">Ivan O.</span><?php echo $wct_zv; ?></div></div>
    <div class="wct__vk"><video src="<?php echo esc_url( get_template_directory_uri() . '/img/comptank/noriks-comptank-video-bruno.mp4' ); ?>" poster="<?php echo esc_url( $wct_img . 'noriks-comptank-video-bruno.jpg' ); ?>" autoplay muted loop playsinline webkit-playsinline preload="metadata"></video><div class="wct__vt"><span class="wct__ime">Bruno V.</span><?php echo $wct_zv; ?></div></div>
    <div class="wct__vk"><video src="<?php echo esc_url( get_template_directory_uri() . '/img/comptank/noriks-comptank-video-branko.mp4' ); ?>" poster="<?php echo esc_url( $wct_img . 'noriks-comptank-video-branko.jpg' ); ?>" autoplay muted loop playsinline webkit-playsinline preload="metadata"></video><div class="wct__vt"><span class="wct__ime">Branko L.</span><?php echo $wct_zv; ?></div></div>
    <div class="wct__vk"><video src="<?php echo esc_url( get_template_directory_uri() . '/img/comptank/noriks-comptank-video-antonio.mp4' ); ?>" poster="<?php echo esc_url( $wct_img . 'noriks-comptank-video-antonio.jpg' ); ?>" autoplay muted loop playsinline webkit-playsinline preload="metadata"></video><div class="wct__vt"><span class="wct__ime">Antonio B.</span><?php echo $wct_zv; ?></div></div>
  </div>
</div></section>

<section class="wct__s"><div class="wct__v">
  <div class="wct__kicker wct__c">Recenzije kupaca</div>
  <h2 class="wct__h2 wct__c">Više od 120.000 kupaca već je <em>vratilo samopouzdanje</em></h2>
  <p class="wct__p wct__c"><span class="wct__ocj"><strong>4,8</strong> <?php echo $wct_zv; ?> na temelju 1.081 recenzije</span></p>
  <div class="wct__grid wct__grid--3">
    <div class="wct__k wct__k--rec"><?php echo $wct_zv; ?><h3>Nakon 45 kg manje</h3><p>„U zadnjih godinu dana skinuo sam 45 kg i ove majice mi stvarno pomažu protiv gravitacije. Odjeća mi napokon lijepo sjedi. Nije samo za nabildane tipove!”</p><span class="wct__ime">Zoran O.</span></div>
    <div class="wct__k wct__k--rec"><?php echo $wct_zv; ?><h3>Napokon majica koja mi pristaje</h3><p>„Bio sam skeptičan jer imam 196 cm i nijedna kompresijska majica mi nije bila dovoljno duga. Ova je sasvim dovoljno duga i rastezljiva.”</p><span class="wct__ime">Ivan D.</span></div>
    <div class="wct__k wct__k--rec"><?php echo $wct_zv; ?><h3>Vratila mi je samopouzdanje</h3><p>„Ne mogu opisati koliko mi je ova majica vratila samopouzdanje. Savršeno pristaje i jako je udobna za svakodnevno nošenje.”</p><span class="wct__ime">Mario T.</span></div>
    <div class="wct__k wct__k--rec"><?php echo $wct_zv; ?><h3>Bolja od poznatih sportskih marki</h3><p>„Trener sam u dizanju utega i nosio sam puno kompresijskih majica poznatih sportskih marki – ova je daleko najbolja.”</p><span class="wct__ime">Hrvoje T.</span></div>
    <div class="wct__k wct__k--rec"><?php echo $wct_zv; ?><h3>Najbolja potkošulja koju imam</h3><p>„Prošla je prvo pranje i izašla savršeno, bez ikakvih problema. Daleko mi je najdraža potkošulja. Obožavam je.”</p><span class="wct__ime">Matej P.</span></div>
    <div class="wct__k wct__k--rec"><?php echo $wct_zv; ?><h3>Odlična za prsa</h3><p>„Kompresija na prsima radi odlično. Od svega što sam probao, ovo mi je najviše pomoglo da se prsa ne ističu ispod majice.”</p><span class="wct__ime">Davor S.</span></div>
  </div>
  <p class="wct__zak">Prosječna ocjena 4,8 od 5 – od teretane do ureda.</p>
</div></section>

<section class="wct__s wct__s--bg"><div class="wct__v">
  <div class="wct__kicker wct__c">Izbliza</div>
  <h2 class="wct__h2 wct__c">Napravljena da <em>drži oblik</em></h2>
  <p class="wct__p wct__c">Tkanina, kroj i rub – sve ono po čemu se dobra kompresijska majica razlikuje od obične.</p>
  <div class="wct__grid wct__grid--4">
    <div class="wct__k wct__k--slika"><div class="wct__km"><img src="<?php echo esc_url( $wct_img . 'noriks-comptank-kartica-11.webp' ); ?>" alt="Usporedba – bijela majica drugih marki i duža crna NORIKS CompTank" loading="eager" decoding="async"></div><div class="wct__kt"><span class="wct__ki"><?php echo $wct_svg; ?><path d="M12 3v18"/><path d="M5 8l-3 6h6z"/><path d="M19 8l-3 6h6z"/><path d="M5 8h14"/></svg></span><h3>Produljeni kroj</h3><p>Namjerno duža, da ostane uvučena i skrivena ispod svake majice ili košulje. Ne podiže se i ne gužva – samo diskretna udobnost cijeli dan.</p></div></div>
    <div class="wct__k wct__k--slika"><div class="wct__km"><img src="<?php echo esc_url( $wct_img . 'noriks-comptank-kartica-10.webp' ); ?>" alt="Izbliza rebrasta tkanina NORIKS CompTank u crnoj i bijeloj boji" loading="eager" decoding="async"></div><div class="wct__kt"><span class="wct__ki"><?php echo $wct_svg; ?><path d="M4 6c2.7 0 2.7 2 5.3 2s2.7-2 5.4-2 2.6 2 5.3 2"/><path d="M4 12c2.7 0 2.7 2 5.3 2s2.7-2 5.4-2 2.6 2 5.3 2"/><path d="M4 18c2.7 0 2.7 2 5.3 2s2.7-2 5.4-2 2.6 2 5.3 2"/></svg></span><h3>Premium tkanina</h3><p>90 % najlon, 10 % elastan, izrađena da traje – drži oblik, ne blijedi i daje jednaku kompresiju pranje za pranjem.</p></div></div>
    <div class="wct__k wct__k--slika"><div class="wct__km"><img src="<?php echo esc_url( $wct_img . 'noriks-comptank-kartica-12.webp' ); ?>" alt="NORIKS CompTank ispod otvorene košulje i rastezanje tkanine" loading="eager" decoding="async"></div><div class="wct__kt"><span class="wct__ki"><?php echo $wct_svg; ?><path d="M12 3l7 3v5c0 4.5-3 8-7 10-4-2-7-5.5-7-10V6z"/><path d="M9 12l2 2 4-4"/></svg></span><h3>Kvalitetna izrada</h3><p>Napravljena da zadrži oblik. Ne razvlači se, ne skuplja i ne blijedi – izgleda i radi kao nova, nošenje za nošenjem.</p></div></div>
    <div class="wct__k wct__k--slika"><div class="wct__km"><img src="<?php echo esc_url( $wct_img . 'noriks-comptank-kartica-13.webp?v=2' ); ?>" alt="Rastezanje crne NORIKS CompTank majice u dvije ruke" loading="eager" decoding="async"></div><div class="wct__kt"><span class="wct__ki"><?php echo $wct_svg; ?><path d="M12 3v18"/><path d="M3 12h18"/><path d="M9 6l3-3 3 3"/><path d="M9 18l3 3 3-3"/><path d="M6 9l-3 3 3 3"/><path d="M18 9l3 3-3 3"/></svg></span><h3>Pametna kompresija u 4 smjera</h3><p>Ciljana potpora gdje vam treba: spljošti prsa, zagladi trbuh, podupire leđa, a rubovi ostaju na mjestu – za samouvjeren, ravan obris.</p></div></div>
  </div>
  <p class="wct__zak">Materijal koji radi za vas cijeli dan.</p>
</div></section>

<section class="wct__s"><div class="wct__v">
  <div class="wct__kicker wct__c">Prije i poslije</div>
  <h2 class="wct__h2 wct__c">Samopouzdanje <em>koje nosite</em></h2>
  <p class="wct__p wct__c">Kako izgledate bez NORIKS CompTank – i s njom ispod majice.</p>
  <div class="wct__pp">
    <figure class="wct__ppk"><img src="<?php echo esc_url( $wct_img . 'noriks-comptank-bez-1.webp' ); ?>" alt="Muškarac bez majice s vidljivim trbuhom – bez NORIKS CompTank" loading="eager" decoding="async"><figcaption class="wct__ppl wct__ppl--bez">Bez NORIKS</figcaption></figure>
    <figure class="wct__ppk"><img src="<?php echo esc_url( $wct_img . 'noriks-comptank-sa-1.webp' ); ?>" alt="Isti muškarac u crnoj NORIKS CompTank kompresijskoj majici – ravniji trbuh i prsa" loading="eager" decoding="async"><figcaption class="wct__ppl wct__ppl--sa">S NORIKS</figcaption></figure>
  </div>
  <p class="wct__zak">Ista osoba, isti dan – samo druga majica.</p>
</div></section>

<section class="wct__s wct__s--bg"><div class="wct__v">
  <div class="wct__ov">
    <img src="<?php echo esc_url( $wct_img . 'noriks-comptank-poruka-2.webp' ); ?>" alt="Muškarac s bradom u crnoj NORIKS CompTank majici bez rukava" loading="eager" decoding="async">
    <div class="wct__ovt">
      <div class="wct__kicker">Poruka NORIKS tima</div>
      <p class="wct__ovp">Napravili smo NORIKS CompTank jer znamo kakav je osjećaj pogledati se u ogledalo i ne voljeti ono što vidite.</p>
      <p class="wct__ovp">Ova majica napravljena je da muškarcima pomogne da se osjećaju sigurnije i postanu najbolja verzija sebe.</p>
      <p class="wct__ovp">Tako jednostavno.</p>
      <p class="wct__ovpot">– NORIKS tim</p>
    </div>
  </div>
</div></section>

<section class="wct__s npg-s"><?php $npg = array( 'izdelek' => 'NORIKS CompTank', 'barva' => '#2c3e57' ); include __DIR__ . '/noriks-pogoji.php'; ?></section>
</div>
<style>
.wct{color:#1a1a1a;font-family:inherit}
.wct__s{padding:72px 0;background:#fff}.wct__s.wct__s--bg{background:#eef1f5}
.wct__v{width:100%;max-width:1240px;margin:0 auto;padding:0 24px;box-sizing:border-box}
.wct__c{text-align:center}
.wct__kicker{font-size:13px;letter-spacing:1.8px;text-transform:uppercase;color:#2c3e57;margin:0 0 8px;font-weight:700}
.wct__kicker::before{content:"";display:inline-block;width:22px;height:2px;background:#2c3e57;vertical-align:middle;margin:-2px 10px 0 0;border-radius:2px}
.wct__h2{font-size:clamp(24px,3vw,34px);font-weight:800;line-height:1.2;margin:0 0 18px;color:#1a1a1a}.wct__h2 em{font-style:italic;color:#2c3e57}
.wct__h3{font-size:17px;font-weight:800;margin:18px 0 10px}
.wct__p{font-size:15.5px;line-height:1.65;color:#363b42;margin:0 0 14px}
.wct__zak{font-size:16px;font-weight:800;line-height:1.5;margin:22px 0 0}
.wct__v>.wct__zak{text-align:center}
.wct__dva .wct__zak{border-left:3px solid #2c3e57;padding-left:14px}
.wct__zv{color:#d4a52b;letter-spacing:2px;font-size:15px;display:inline-block}
.wct__ime{font-weight:700;font-size:14px;color:#2c3e57}
.wct__znacka{position:absolute;left:12px;top:12px;background:#1a1a1a;color:#fff;font-size:13px;font-weight:800;letter-spacing:1px;text-transform:uppercase;padding:6px 10px;border-radius:20px}
/* 1: zgodbe kupcev */
.wct__price{display:grid;grid-template-columns:repeat(4,1fr);gap:20px;margin-top:26px;align-items:stretch}
.wct__pk{display:flex;flex-direction:column;background:#fff;border-radius:16px;overflow:hidden;box-shadow:0 8px 24px rgba(30,40,60,.09);transition:transform .2s,box-shadow .2s}
.wct__pk:hover{transform:translateY(-3px);box-shadow:0 14px 30px rgba(30,40,60,.15)}
.wct__pm{position:relative}.wct__pm img{width:100%;aspect-ratio:4/5;object-fit:cover;display:block}
.wct__pt{padding:20px 20px 22px;display:flex;flex-direction:column;flex:1}
.wct__pt p{font-size:15.5px;line-height:1.6;color:#363b42;margin:10px 0 14px}
.wct__nav{width:40px;height:40px;border-radius:50%;background:#e3e8ef;color:#2c3e57;display:flex;align-items:center;justify-content:center}
/* 2: tabela */
.wct__dva{display:grid;grid-template-columns:1fr 1fr;gap:56px;align-items:center}.wct__dva--tab{grid-template-columns:1fr 1.1fr}
.wct__kv{list-style:none;margin:6px 0 0;padding:0}
.wct__kv li{list-style:none;position:relative;padding-left:34px;margin:0 0 14px;font-size:15.5px;line-height:1.55}
.wct__kv li::before{content:"\2713";position:absolute;left:0;top:0;width:22px;height:22px;border-radius:50%;background:#2c3e57;color:#fff;font-size:12px;display:flex;align-items:center;justify-content:center}
.wct__tabwrap{width:100%;overflow-x:auto;border-radius:16px;box-shadow:0 8px 24px rgba(30,40,60,.09);background:#fff}
.wct__tab{width:100%;border-collapse:collapse;font-size:15.5px;margin:0}
.wct__tab th,.wct__tab td{padding:15px 18px;text-align:center;border-bottom:1px solid #edf0f4}
.wct__tab th{background:#1a1a1a!important;color:#fff!important;font-weight:800;font-size:14px;letter-spacing:.5px}
.wct__tab th:nth-child(2){background:#2c3e57!important}
.wct__tab td:first-child{text-align:left;font-weight:600}
.wct__tab tr:last-child td{border-bottom:0}
.wct__tab td:nth-child(2){background:#f4f7fb}
.wct__da{color:#1f8a4c;font-weight:800;font-size:18px}.wct__ne{color:#c0392b;font-weight:800;font-size:18px}
/* 3: videi */
.wct__vid{display:grid;grid-template-columns:repeat(4,1fr);gap:20px;margin-top:26px}
.wct__vk{background:#fff;border-radius:16px;overflow:hidden;box-shadow:0 8px 24px rgba(30,40,60,.10)}
.wct__vk video{width:100%;aspect-ratio:9/16;object-fit:cover;display:block;background:#dfe4ea}
.wct__vt{display:flex;align-items:center;justify-content:space-between;gap:8px;padding:12px 16px}
/* 4, 5: kartice */
.wct__grid{display:grid;gap:22px;margin-top:26px;align-items:stretch}.wct__grid--3{grid-template-columns:repeat(3,1fr)}.wct__grid--4{grid-template-columns:repeat(4,1fr)}
.wct__k{background:#fff;border-radius:16px;box-shadow:0 8px 24px rgba(30,40,60,.09);transition:transform .2s,box-shadow .2s;display:flex;flex-direction:column}
.wct__k:hover{transform:translateY(-3px);box-shadow:0 14px 30px rgba(30,40,60,.15)}
.wct__k--rec{padding:26px 26px 22px;background:#f7f9fb}
.wct__k--rec h3{font-size:17px;font-weight:800;margin:10px 0 8px;line-height:1.3}
.wct__k--rec p{font-size:15.5px;line-height:1.6;color:#363b42;margin:0 0 14px;flex:1}
.wct__ocj{display:inline-flex;align-items:center;gap:8px;background:#eef1f5;border-radius:30px;padding:8px 18px;font-size:14.5px}
.wct__ocj strong{font-size:22px;color:#2c3e57}
.wct__k--slika{overflow:hidden}
.wct__km img{width:100%;aspect-ratio:1080/626;object-fit:cover;display:block}
.wct__kt{padding:20px 20px 22px;text-align:center;display:flex;flex-direction:column;align-items:center;flex:1}
.wct__ki{width:52px;height:52px;border-radius:50%;background:#e3e8ef;color:#2c3e57;border:1px solid #b9c4d3;display:flex;align-items:center;justify-content:center;margin:-46px auto 10px;position:relative;box-shadow:0 0 0 4px #fff}
.wct__kt h3{font-size:16.5px;font-weight:800;margin:2px 0 6px;line-height:1.3}
.wct__kt p{font-size:14.5px;line-height:1.55;color:#454b54;margin:0}
/* 6: prije / poslije */
.wct__pp{display:grid;grid-template-columns:1fr 1fr;gap:22px;margin-top:26px}
.wct__ppk{position:relative;margin:0;border-radius:16px;overflow:hidden;box-shadow:0 10px 30px rgba(30,40,60,.12)}
.wct__ppk img{width:100%;aspect-ratio:1000/1148;object-fit:cover;display:block}
.wct__ppl{position:absolute;left:50%;bottom:18px;transform:translateX(-50%);padding:9px 20px;border-radius:30px;font-size:14px;font-weight:800;letter-spacing:1px;text-transform:uppercase;white-space:nowrap}
.wct__ppl--bez{background:#fff;color:#1a1a1a}.wct__ppl--sa{background:#1a1a1a;color:#fff}
/* 7: poruka - fotografija cez celo sirino z besedilom na sliki */
.wct__ov{position:relative;height:650px;border-radius:16px;overflow:hidden;box-shadow:0 14px 34px rgba(30,40,60,.16);display:flex;align-items:center;justify-content:center;text-align:center}
.wct__ov img{position:absolute;inset:0;width:100%;height:100%;object-fit:cover;object-position:50% 40%;display:block}
.wct__ov::after{content:"";position:absolute;inset:0;background:rgba(0,0,0,.7)}
.wct__ovt{position:relative;z-index:1;max-width:62%;padding:0 24px;color:#fff}
.wct__ovt .wct__kicker{color:#fff}.wct__ovt .wct__kicker::before{background:#fff}
.wct__ovp{font-size:19px;line-height:1.6;margin:0 0 16px;color:#fff}
.wct__ovpot{font-size:16px;font-weight:800;margin:8px 0 0;color:#fff}
/* 7: slika + besedilo */
.wct__media{position:relative;border-radius:16px;overflow:hidden;box-shadow:0 14px 34px rgba(30,40,60,.16);aspect-ratio:4/5;background:#e3e8ef}
.wct__media img{width:100%;height:100%;object-fit:cover;display:block}
@media (max-width:991px){.wct__price{grid-template-columns:1fr 1fr}.wct__vid{grid-template-columns:repeat(2,1fr)}.wct__grid--3,.wct__grid--4{grid-template-columns:1fr 1fr}}
@media (max-width:767px){
  .wct__s{padding:48px 0}.wct__v{padding:0 16px}
  .wct__dva,.wct__dva--tab{grid-template-columns:1fr;gap:26px}
  .wct__price,.wct__vid,.wct__grid--3{display:flex;overflow-x:auto;scroll-snap-type:x mandatory;gap:14px;padding-bottom:8px;-webkit-overflow-scrolling:touch}
  .wct__price>.wct__pk{flex:0 0 88%;scroll-snap-align:center;grid-template-columns:1fr}
  .wct__pm img{aspect-ratio:4/5;height:auto}
  .wct__vid>.wct__vk{flex:0 0 70%;scroll-snap-align:center}
  .wct__grid--3>.wct__k{flex:0 0 84%;scroll-snap-align:center}
  .wct__grid--4{gap:12px}
  .wct__kt{padding:16px 10px 16px}.wct__kt h3{font-size:14.5px}.wct__kt p{font-size:13px}
  .wct__ki{width:44px;height:44px;margin-top:-38px}
  .wct__ov{height:500px}.wct__ovt{max-width:100%}.wct__ovp{font-size:16px;margin-bottom:12px}.wct__ovt{padding:0 18px}
  .wct__pp{gap:10px}.wct__ppl{font-size:13px;padding:7px 12px;bottom:10px}
  .wct__tab th,.wct__tab td{padding:11px 8px;font-size:14px}
}
</style>
