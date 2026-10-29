<?php
/**
 * NORIKS PopUp — sator za 2-3 osobe koji se postavlja u sekundama: why sekcije po strukturi originala
 * (reactiveoutdoor.com/products/large-sized-3-secs-tent-free-camping-tarp-up-to-3-person).
 *
 * STRUKTURA ORIGINALA:
   1. naslov sredinsko + animacija postavljanja (GIF) + 2 odstavka: jedna osoba, nekoliko sekundi - pri nas animacija levo (GIF -> mp4, logotip na satoru zamenjan z NORIKS), besedilo desno
   2. naslov + animacija rasklapanja iz torbe (GIF) + 3 odstavki: bez sastavljanja sipki - pri nas besedilo levo, animacija desno (odsek brez tujega logotipa)
   3. naslov + animacija kise na tkanini (GIF) + 3 odstavki: zastita i udobnost (3000 mm, vjetar, 210D) - pri nas animacija levo (odseki brez logotipa), besedilo s 3 karticami podatkov desno
   4. naslov + animacija mreznih prozora (GIF) + 4 odstavki + velicine - pri nas besedilo s tabelo mer desno, animacija levo po pravilu cik-cak; prodajamo samo veliki sator (2-3 osobe), mere v cm
   5. naslov + animacija odpiranja paketa (GIF, paket v celoti potiskan s tujo znamko) + besedilo o dostavi in 365-dnevnem jamstvu - pri nas fotografija satora (lokalizirana) ob besedilu; tuje jamstvo zamenjano z NORIKS pogoji, animacija izpuscena (tuja znamka na vsej embalazi)
   6. "What Our Customers Are Saying" + kolaz komentarjev kupcev (slika) - pri nas mreza 9 kartic komentarjev (3 v vrsti) z besedili s kolaza v hrvascini; tuja ocena zamenjana z nasim (4,8 / 1.081)
   7. "Features": seznam 13 prednosti s kljukicami - pri nas mreza 12 kartic z ikonami (4 v vrsti)
   8. "How does it work": video na YouTubu (navodila) - pri nas 3 koraki postavljanja in spremanja ob diagramu mer (videa z YouTuba s tujo znamko ni mogoce prenesti)
   9. "What people say": video mnenj na YouTubu - pri nas 3 kartice kupcev s fotografijami (logotip na satoru zamenjan z NORIKS)
  10. FAQ - pri nas FAQ v sekciji mnenj (Informacije o proizvodu)
  11. Loox mnenja (nalaga se z JS) - pri nas mnenja v sekciji mnenj spodaj
  12. 4 ikone (kvaliteta, brezplacna dostava, varno placilo, 30 dni) - pri nas skupna sekcija NORIKS pogoji na koncu
 * BARVA ORIGINALA: #2d544f (temno zeleni trakovi na infografikah in tkanina satora); svetel ton za --bg #eaf1ef, akcent #2d544f
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
$wspu_t   = get_template_directory_uri();
$wspu_svg = '<svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">';
$wspu_vid = function ( $pot ) use ( $wspu_t ) {
	return '<video src="' . esc_url( $wspu_t . $pot ) . '" poster="' . esc_url( $wspu_t . str_replace( '.mp4', '.jpg', $pot ) ) . '" autoplay muted loop playsinline webkit-playsinline preload="metadata"></video>';
};
$wspu_komentarji = array(
	array( 'Tomislav S.', 'Uzeo sam veliki i srednji šator. Puno vas pita za sklapanje – evo: šatori su stvarno kvalitetni, lako se postavljaju i jednako lako skidaju. Kćer od 12 godina pogledala je upute i iz prve ga postavila i vratila u torbu za manje od minute. Ni ona nije vjerovala.', '2 d' ),
	array( 'Branimir R.', 'Stigao mi je jučer – točno kao u reklami! Izuzetno se lako postavlja i skida.', '4 d' ),
	array( 'Oliver O.', 'Stigao prošli tjedan, postavio sam ga čim sam došao kući. Oduševljen sam koliko se jednostavno postavlja i spakira. Bit će odličan za motor.', '1 tj.' ),
	array( 'Robert B.', 'Prvi put sam ga koristio prošli vikend na moto okupljanju. Nisam mogao vjerovati koliko je lako i brzo za postaviti, a kamoli za spremiti. JAKO sam zadovoljan.', '8 tj.' ),
	array( 'Lana H.', 'Kupila sam šator koji mi je stalno iskakao na zidu. Stigao je i oduševljena sam: trebala mi je otprilike minuta za postavljanje i skidanje – i to od vađenja iz torbe do vraćanja u torbu.', '15 h' ),
	array( 'Petar G.', 'Odličan šator. Imam ga i savršen je za moje vožnje motorom.', '9 tj.' ),
	array( 'Krešimir D.', 'Imam ovaj šator! Doslovno se jednako brzo skida kao što se postavlja. Toplo ga preporučujem. Super!', '2 d' ),
	array( 'Tin M.', 'Postavio sam ga u petak ujutro u vrtu, za probu. Popodne je pljuštalo, spavao sam u njemu preko noći i ostao potpuno suh. Za dva tjedna idem s njim na maraton na jezero.', '5 tj.' ),
	array( 'Klaudija J.', 'Isprva sam se dvoumila oko narudžbe, ali drago mi je da sam ga uzela. Stvarno je dobro napravljen i vrlo se lako postavlja i skida. Jedva čekam kampiranje!', '2 d' ),
);
$wspu_prednosti = array(
	array( '<circle cx="12" cy="12" r="8.5"/><path d="M12 7.5V12l3 2"/>', 'Postavljanje u sekundama', 'I skidanje jednako brzo' ),
	array( '<path d="M12 3v2M5.6 5.6l1.4 1.4M3 12h2M18.4 5.6L17 7M21 12h-2"/><circle cx="12" cy="13" r="4"/><path d="M4 20h16"/>', 'Za više godišnjih doba', 'Ljeto, proljeće i jesen' ),
	array( '<path d="M6 8h12l-1 12H7z"/><path d="M9 8a3 3 0 0 1 6 0"/>', 'Lagano pakiranje', '4,2 kg u torbi 77 cm' ),
	array( '<path d="M4 7h16v11H4z"/><path d="M9 7V5h6v2"/>', 'Torba za nošenje', 'Uključena u paket' ),
	array( '<circle cx="8" cy="8" r="2.5"/><circle cx="16" cy="8" r="2.5"/><path d="M3.5 18c.6-3 2.4-4.5 4.5-4.5s3.9 1.5 4.5 4.5M11.5 18c.6-3 2.4-4.5 4.5-4.5s3.9 1.5 4.5 4.5"/>', '2–3 osobe', 'Udobno za obitelj' ),
	array( '<path d="M12 3c3 4 5.5 7 5.5 10a5.5 5.5 0 0 1-11 0C6.5 10 9 7 12 3z"/>', 'Vodootporan', 'S nadstrešnicom, 3000 mm' ),
	array( '<path d="M4 4h16v16H4z"/><path d="M4 9h16M4 14h16M9 4v16M14 4v16"/>', 'Čvrsta tkanina', '210D Oxford poliester' ),
	array( '<path d="M5 20L12 4l7 16"/><path d="M8 14h8"/>', 'Klinovi i užad', 'Za sigurno sidrenje' ),
	array( '<path d="M3 20V9l9-5 9 5v11"/><path d="M9 20v-6h6v6"/>', 'Dvoja vrata', 'Lak ulaz i prozračivanje' ),
	array( '<path d="M4 6h16v12H4z"/><path d="M4 10h16M4 14h16M9 6v12M15 6v12"/>', 'Mrežasti prozori', 'Zrak unutra, komarci van' ),
	array( '<path d="M4 11h16v9H4z"/><path d="M12 11v9M4 11l2-4h12l2 4"/><path d="M12 7c-1.5-3-4.5-3-4.5-1S10 7 12 7c1.5 0 4.5-.5 4.5-1S13.5 4 12 7z"/>', 'Poklon za obitelj', 'I za umirovljeničke izlete' ),
	array( '<circle cx="12" cy="12" r="8.5"/><path d="M8 12h8M12 8v8"/>', 'Za sve prilike', 'Kamp, plaža, vrt, pješačenje' ),
);
?>
<div class="wspu">

<section class="wspu__s wspu__s--bg"><div class="wspu__v wspu__dva">
  <div class="wspu__media"><?php echo $wspu_vid( '/img/popuptent/noriks-popuptent-postavljanje-sekunde.mp4' ); ?><span class="wspu__znacka">Jedna osoba</span></div>
  <div>
    <div class="wspu__kicker">Nekoliko sekundi</div>
    <h2 class="wspu__h2">Jedna osoba, nekoliko sekundi – <em>sve što trebate za šator</em></h2>
    <p class="wspu__p">Kampiranje nikad nije bilo jednostavnije. Napredni samozaključavajući mehanizam trenutačno rasklopi šator, pa ne gubite vrijeme ni snagu – a pogotovo ne trošite pola popodneva na upute dok se smračuje.</p>
    <p class="wspu__p">Za postavljanje je dovoljna jedna osoba i nekoliko sekundi. Tako vam ostaje više vremena za obitelj i prijatelje te za potpuno opušteno kampiranje.</p>
    <ul class="wspu__kv">
      <li><em>Samozaključavajući mehanizam</em> – šator se rasklopi sam</li>
      <li><em>Bez pomoćnika</em> – postavlja ga jedna osoba</li>
    </ul>
    <p class="wspu__zak">Izvadite, rasklopite – i šator stoji.</p>
  </div>
</div></section>

<section class="wspu__s"><div class="wspu__v wspu__dva wspu__dva--rev">
  <div class="wspu__media"><?php echo $wspu_vid( '/img/popuptent/noriks-popuptent-rasklapanje.mp4' ); ?><span class="wspu__znacka">Iz torbe</span></div>
  <div>
    <div class="wspu__kicker">Bez šipki</div>
    <h2 class="wspu__h2">Zbogom <em>kompliciranom sastavljanju šipki</em></h2>
    <p class="wspu__p">Šator je samostojeći. Dolazi u jednom komadu i spreman je za korištenje čim ga izvadite iz torbe – bez slaganja šipki kao kod drugih šatora. Postavljanje je brzo, bez muke i potpuno jednostavno.</p>
    <p class="wspu__p">Za postavljanje su dovoljna 3 jednostavna koraka, a za skidanje još 3. Više vremena za odmor i čistu glavu – zamislite koliko ćete vremena uštedjeti u godinama koje dolaze.</p>
    <p class="wspu__p">A kad se na kraju izleta pakirate za povratak? Kostur je već sastavljen, pa je pakiranje gotovo za tren i šator bez borbe stane natrag u torbu.</p>
    <p class="wspu__zak">3 koraka za postavljanje, 3 koraka za spremanje.</p>
  </div>
</div></section>

<section class="wspu__s wspu__s--bg"><div class="wspu__v wspu__dva">
  <div class="wspu__media"><?php echo $wspu_vid( '/img/popuptent/noriks-popuptent-kisa.mp4' ); ?><span class="wspu__znacka">3000 mm</span></div>
  <div>
    <div class="wspu__kicker">Zaštita i udobnost</div>
    <h2 class="wspu__h2">Suho, sigurno i udobno – <em>i kad pljušti</em></h2>
    <p class="wspu__p">Šator ima dvostruku stijenku s ugrađenom nadstrešnicom i vodootpornost od 3000 mm. Šavovi su zalijepljeni trakom, pa voda ne ulazi unutra – noću ostajete suhi.</p>
    <p class="wspu__p">Čvrst i stabilan kostur napravljen je da izdrži jak vjetar do 64 km/h, a dugotrajne šipke od stakloplastike daju dodatnu stabilnost. Tkanina je čvrsti 210D Oxford poliester, a dvosmjerni patentni zatvarači klize glatko i dugo traju.</p>
    <div class="wspu__red3">
      <div><span class="wspu__ik"><?php echo $wspu_svg; ?><path d="M12 3c3 4 5.5 7 5.5 10a5.5 5.5 0 0 1-11 0C6.5 10 9 7 12 3z"/></svg></span><strong>3000 mm</strong><span>vodootpornost</span></div>
      <div><span class="wspu__ik"><?php echo $wspu_svg; ?><path d="M3 8h11a3 3 0 1 0-3-3M3 12h15a3 3 0 1 1-3 3M3 16h8"/></svg></span><strong>64 km/h</strong><span>otpornost na vjetar</span></div>
      <div><span class="wspu__ik"><?php echo $wspu_svg; ?><path d="M4 4h16v16H4z"/><path d="M4 9h16M4 14h16M9 4v16M14 4v16"/></svg></span><strong>210D</strong><span>Oxford tkanina</span></div>
    </div>
    <p class="wspu__zak">Kiša vani, vi na suhom.</p>
  </div>
</div></section>

<section class="wspu__s"><div class="wspu__v wspu__dva wspu__dva--rev">
  <div class="wspu__media"><?php echo $wspu_vid( '/img/popuptent/noriks-popuptent-mreza.mp4' ); ?><span class="wspu__znacka">Mreža na 4 strane</span></div>
  <div>
    <div class="wspu__kicker">Svjež zrak</div>
    <h2 class="wspu__h2">Prozračno, <em>bez kukaca</em> i opušteno</h2>
    <p class="wspu__p">Šator ima mrežaste prozore na sve 4 strane – unutra je ugodno prozračno, a kukci ostaju vani. Dvoja vrata na suprotnim stranama omogućuju da svatko izađe na svoju stranu, bez penjanja preko drugih.</p>
    <p class="wspu__p">Zahvaljujući rasklopnom dizajnu šator je praktičan za svaki izlet – za kampiranje, plažu ili zabavu u dvorištu. Bez stresnog postavljanja, samo opušteni izlet.</p>
    <div class="wspu__tw"><table class="wspu__tab">
      <tbody>
        <tr><th>Veličina</th><td>211 × 178 × 145 cm</td></tr>
        <tr><th>Spakiran</th><td>77 × 15 × 15 cm</td></tr>
        <tr><th>Težina</th><td>4,2 kg</td></tr>
        <tr><th>Kapacitet</th><td>2 osobe s prostorom za opremu ili 3 osobe</td></tr>
        <tr><th>Ležajevi</th><td>bračni madrac na napuhavanje (152 × 203 cm) ili 3 vreće za spavanje</td></tr>
      </tbody>
    </table></div>
    <p class="wspu__zak">Mjesta za troje – zraka za sve.</p>
  </div>
</div></section>

<section class="wspu__s wspu__s--bg"><div class="wspu__v wspu__dva">
  <div class="wspu__media"><img src="<?php echo esc_url( $wspu_t . '/img/popuptent/noriks-popuptent-sator-suma.webp' ); ?>" alt="Postavljen šator na kampiralištu u šumi" loading="eager" decoding="async"><span class="wspu__znacka">Kupujete bez rizika</span></div>
  <div>
    <div class="wspu__kicker">Kvaliteta bez kompromisa</div>
    <h2 class="wspu__h2">Ne dajte se zavarati <em>jeftinim kopijama</em></h2>
    <p class="wspu__p">Kvaliteta, izdržljivost i jednostavnost ovog šatora vide se već pri prvom postavljanju: kostur je sastavljen, tkanina je čvrsta, a šator je spreman za kampiranje u nekoliko sekundi.</p>
    <p class="wspu__p">Uvjereni smo da ćete ga zavoljeti. Ako vam iz bilo kojeg razloga ne odgovara, imate 30 dana za povrat novca. Dostava je besplatna za narudžbe iznad 70 €, a plaćate pouzećem kad paket stigne.</p>
    <ul class="wspu__kv">
      <li><em>30 dana</em> za povrat novca</li>
      <li><em>Besplatna dostava</em> iznad 70 €</li>
      <li><em>Plaćanje pouzećem</em> – bez kartice</li>
    </ul>
    <p class="wspu__zak">Isprobajte ga na prvom izletu – bez rizika.</p>
  </div>
</div></section>

<section class="wspu__s"><div class="wspu__v">
  <div class="wspu__kicker wspu__c">Što kažu kupci</div>
  <h2 class="wspu__h2 wspu__c">Kamperi o šatoru <em>koji se postavlja sam</em></h2>
  <div class="wspu__ocena"><span class="wspu__zv">★★★★★</span><strong>Ocjena 4,8 / 5</strong><span>na temelju 1.081 recenzije</span></div>
  <div class="wspu__grid wspu__grid--kom">
    <?php foreach ( $wspu_komentarji as $k ) : ?>
    <div class="wspu__kom">
      <div class="wspu__komg"><span class="wspu__av"><?php echo esc_html( mb_substr( $k[0], 0, 1 ) ); ?></span><strong><?php echo esc_html( $k[0] ); ?></strong></div>
      <p><?php echo esc_html( $k[1] ); ?></p>
      <div class="wspu__komd"><span>Sviđa mi se</span><span>Odgovori</span><span><?php echo esc_html( $k[2] ); ?></span></div>
    </div>
    <?php endforeach; ?>
  </div>
  <p class="wspu__zak">Od dvorišta do višednevnog kampiranja – postavljen u sekundama.</p>
</div></section>

<section class="wspu__s wspu__s--bg"><div class="wspu__v">
  <div class="wspu__kicker wspu__c">Prednosti</div>
  <h2 class="wspu__h2 wspu__c">Sve što dobivate <em>u jednoj torbi</em></h2>
  <div class="wspu__grid wspu__grid--4">
    <?php foreach ( $wspu_prednosti as $p ) : ?>
    <div class="wspu__pk"><span class="wspu__ik"><?php echo $wspu_svg . $p[0]; ?></svg></span><strong><?php echo esc_html( $p[1] ); ?></strong><span><?php echo esc_html( $p[2] ); ?></span></div>
    <?php endforeach; ?>
  </div>
  <p class="wspu__zak">Šator, cerada, klinovi, užad i torba – spremno za prvi izlet.</p>
</div></section>

<section class="wspu__s"><div class="wspu__v wspu__dva wspu__dva--rev">
  <div class="wspu__media wspu__media--cela"><img src="<?php echo esc_url( $wspu_t . '/img/popuptent/noriks-popuptent-veci-sator-mjere.webp' ); ?>" alt="Diagram mjera šatora za 2–3 osobe u centimetrima" loading="eager" decoding="async"></div>
  <div>
    <div class="wspu__kicker">Kako radi</div>
    <h2 class="wspu__h2">3 koraka za postavljanje, <em>3 za spremanje</em></h2>
    <ol class="wspu__koraki">
      <li><span class="wspu__st">1</span><div><strong>Izvadite šator iz torbe</strong><p>Šator dolazi u jednom komadu, kostur je već sastavljen.</p></div></li>
      <li><span class="wspu__st">2</span><div><strong>Rasklopite ga na tlu</strong><p>Raširite šator na mjestu gdje želite spavati.</p></div></li>
      <li><span class="wspu__st">3</span><div><strong>Povucite vrh prema gore</strong><p>Mehanizam se zaključa sam i šator stoji – za učvršćivanje upotrijebite klinove i užad.</p></div></li>
    </ol>
    <p class="wspu__p">Spremanje ide obrnutim redom: otpustite mehanizam, sklopite šator i vratite ga u torbu – bez traženja šipki i dijelova.</p>
    <p class="wspu__zak">Bez uputa od deset stranica.</p>
  </div>
</div></section>

<section class="wspu__s wspu__s--bg"><div class="wspu__v">
  <div class="wspu__kicker wspu__c">Kupci na izletu</div>
  <h2 class="wspu__h2 wspu__c">Što kažu oni koji su ga <em>već postavili</em></h2>
  <div class="wspu__grid">
    <div class="wspu__k"><div class="wspu__km"><img src="<?php echo esc_url( $wspu_t . '/img/popuptent/noriks-popuptent-kupac-pas.webp' ); ?>" alt="Kupac sa psom ispred postavljenog šatora" loading="eager" decoding="async"></div><div class="wspu__kt"><span class="wspu__zv">★★★★★</span><p>Iskreno, odličan je. Čvrst, otporan na vodu, lako se postavlja i skida. Vjerujte mi, stanu tri osobe i stvarno sam oduševljen.</p><strong>Karlo F.</strong></div></div>
    <div class="wspu__k"><div class="wspu__km"><img src="<?php echo esc_url( $wspu_t . '/img/popuptent/noriks-popuptent-kupac-postavljanje.webp' ); ?>" alt="Kupkinja postavlja šator u šumi" loading="eager" decoding="async"></div><div class="wspu__kt"><span class="wspu__zv">★★★★★</span><p>Odlično nam je izdržao tijekom oluje u kojoj smo se našli. Toplo ga preporučujem.</p><strong>Tea A.</strong></div></div>
    <div class="wspu__k"><div class="wspu__km"><img src="<?php echo esc_url( $wspu_t . '/img/popuptent/noriks-popuptent-kupac-veliki-sator.webp' ); ?>" alt="Kupac pokazuje veliki postavljeni šator" loading="eager" decoding="async"></div><div class="wspu__kt"><span class="wspu__zv">★★★★★</span><p>U subotu je navečer pet sati jako padala kiša, a meni je bilo toplo i suho. Novi šator me stvarno oduševio.</p><strong>Boris S.</strong></div></div>
  </div>
  <p class="wspu__zak">Postavljen u sekundama – i suh do jutra.</p>
</div></section>

<section class="wspu__s npg-s"><?php $npg = array( 'izdelek' => 'NORIKS PopUp', 'barva' => '#2d544f' ); include __DIR__ . '/noriks-pogoji.php'; ?></section>
</div>
<style>
.wspu{color:#1c1c1c;font-family:inherit}
.wspu__s{padding:72px 0;background:#fff}.wspu__s.wspu__s--bg{background:#eaf1ef}
.wspu__v{width:100%;max-width:1240px;margin:0 auto;padding:0 24px;box-sizing:border-box}
.wspu__c{text-align:center}
.wspu__kicker{font-size:12.5px;letter-spacing:1.8px;text-transform:uppercase;color:#2d544f;margin:0 0 8px;font-weight:700}
.wspu__kicker::before{content:"";display:inline-block;width:22px;height:2px;background:#2d544f;vertical-align:middle;margin:-2px 10px 0 0;border-radius:2px}
.wspu__h2{font-size:clamp(24px,3vw,34px);font-weight:800;line-height:1.2;margin:0 0 18px;color:#1c1c1c}.wspu__h2 em{font-style:italic;color:#2d544f}
.wspu__p{font-size:15.5px;line-height:1.65;color:#333;margin:0 0 14px}
.wspu__zak{font-size:16px;font-weight:800;line-height:1.5;margin:20px 0 0}
.wspu__v>.wspu__zak{text-align:center}
.wspu__dva .wspu__zak{border-left:3px solid #2d544f;padding-left:14px}
.wspu__dva{display:grid;grid-template-columns:1fr 1fr;gap:56px;align-items:center}.wspu__dva--rev>div:first-child{order:2}
.wspu__media{position:relative;border-radius:16px;overflow:hidden;box-shadow:0 14px 34px rgba(45,84,79,.22);aspect-ratio:1/1;background:#1c1c1c}
.wspu__media img,.wspu__media video{width:100%;height:100%;object-fit:cover;display:block}
.wspu__media--cela{background:#fff}.wspu__media--cela img{object-fit:contain}
.wspu__znacka{position:absolute;left:16px;top:16px;background:#fff;color:#2d544f;font-size:12px;font-weight:800;letter-spacing:1px;text-transform:uppercase;padding:7px 12px;border-radius:20px;box-shadow:0 4px 12px rgba(0,0,0,.15)}
.wspu__kv{list-style:none;margin:4px 0 6px;padding:0}.wspu__kv li{position:relative;padding-left:32px;margin:0 0 12px;font-size:15.5px;line-height:1.55;list-style:none}
.wspu__kv li::before{content:"\2713";position:absolute;left:0;top:1px;width:21px;height:21px;border-radius:50%;background:#2d544f;color:#fff;font-size:12px;display:flex;align-items:center;justify-content:center}
.wspu__kv em{font-style:normal;font-weight:800}
.wspu__ik{width:52px;height:52px;border-radius:50%;background:#d5e3df;color:#2d544f;border:1px solid #2d544f;display:flex;align-items:center;justify-content:center;margin:0 auto 10px}
.wspu__red3{display:grid;grid-template-columns:repeat(3,1fr);gap:14px;margin:6px 0 4px;text-align:center}
.wspu__red3>div{background:#fff;border-radius:16px;padding:18px 10px;box-shadow:0 8px 22px rgba(45,84,79,.12)}
.wspu__red3 strong{display:block;font-size:20px;font-weight:800;color:#2d544f}.wspu__red3>div>span:last-child{font-size:13px;color:#555}
.wspu__tw{overflow-x:auto;margin:6px 0 4px}
.wspu__tab{width:100%;border-collapse:collapse;font-size:15px;background:#fff;border-radius:14px;overflow:hidden;box-shadow:0 8px 22px rgba(45,84,79,.10)}
.wspu__tab th,.wspu__tab td{padding:12px 16px;text-align:left;border-bottom:1px solid #e3ebe9;vertical-align:top}
.wspu__tab th{background:#2d544f;color:#fff;font-weight:700;width:34%}.wspu__tab tr:last-child th,.wspu__tab tr:last-child td{border-bottom:0}
.wspu__ocena{display:flex;align-items:center;justify-content:center;gap:10px;flex-wrap:wrap;font-size:15px;color:#444;margin:-4px 0 0}
.wspu__ocena strong{font-size:17px;color:#1c1c1c}
.wspu__zv{color:#e0a33c;letter-spacing:2px;font-size:17px}
.wspu__grid{display:grid;grid-template-columns:repeat(3,1fr);gap:22px;margin-top:26px;align-items:stretch}
.wspu__grid--4{grid-template-columns:repeat(4,1fr);gap:18px}
.wspu__kom{background:#f0f2f5;border-radius:18px;padding:18px 20px;display:flex;flex-direction:column;transition:transform .2s}
.wspu__kom:hover,.wspu__k:hover,.wspu__pk:hover{transform:translateY(-3px)}
.wspu__komg{display:flex;align-items:center;gap:10px;margin-bottom:8px}.wspu__komg strong{font-size:15px;color:#1c1c1c}
.wspu__av{width:36px;height:36px;border-radius:50%;background:#2d544f;color:#fff;font-weight:800;display:flex;align-items:center;justify-content:center;flex:0 0 36px}
.wspu__kom p{margin:0 0 12px;font-size:15px;line-height:1.55;color:#222;flex:1}
.wspu__komd{display:flex;gap:14px;font-size:12.5px;font-weight:700;color:#65676b}
.wspu__pk{background:#fff;border-radius:16px;padding:24px 16px;text-align:center;box-shadow:0 8px 22px rgba(45,84,79,.10);transition:transform .2s}
.wspu__pk strong{display:block;font-size:16px;font-weight:800;margin:0 0 4px}.wspu__pk>span:last-child{font-size:13.5px;color:#5a5f6b;line-height:1.4}
.wspu__koraki{list-style:none;margin:0 0 10px;padding:0}.wspu__koraki li{display:flex;gap:14px;align-items:flex-start;margin:0 0 16px;list-style:none}
.wspu__koraki strong{display:block;font-size:16.5px;margin:4px 0 2px}.wspu__koraki p{margin:0;font-size:15px;line-height:1.55;color:#444}
.wspu__st{flex:0 0 40px;width:40px;height:40px;border-radius:50%;background:#2d544f;color:#fff;font-weight:800;font-size:18px;display:flex;align-items:center;justify-content:center;box-shadow:0 6px 14px rgba(45,84,79,.30)}
.wspu__k{background:#fff;border-radius:16px;overflow:hidden;display:flex;flex-direction:column;box-shadow:0 8px 22px rgba(45,84,79,.12);transition:transform .2s}
.wspu__km img{width:100%;aspect-ratio:4/5;object-fit:cover;display:block}
.wspu__kt{padding:20px 22px 22px;flex:1;display:flex;flex-direction:column}.wspu__kt p{margin:8px 0 12px;font-size:15.5px;line-height:1.55;color:#333;flex:1}
@media (max-width:860px){
  .wspu__s{padding:48px 0}
  .wspu__v{padding:0 16px}
  .wspu__dva{grid-template-columns:1fr;gap:22px}.wspu__dva--rev>div:first-child{order:0}
  .wspu__grid{grid-template-columns:1fr;gap:18px}
  .wspu__grid--4{grid-template-columns:1fr 1fr;gap:14px}
  .wspu__red3{gap:10px}.wspu__red3 strong{font-size:17px}
  .wspu__tab th,.wspu__tab td{padding:10px 12px;font-size:14px}
}
@media (min-width:561px) and (max-width:860px){.wspu__grid--kom{grid-template-columns:1fr 1fr}}
</style>
