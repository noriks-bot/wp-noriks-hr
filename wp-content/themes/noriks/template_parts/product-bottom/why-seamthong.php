<?php
/**
 * NORIKS SeamThong — nevidljive bešavne tange: why sekcije po strukturi originala (ambarwear.store/products/invisible-camel-toe-thong-low-rise).
 *
 * STRUKTURA ORIGINALA:
   1. 3 slike levo (galerija: crne tange izbliza, trening, polozene tange), besedilo desno: Seamless Comfort - Invisible Fit + mreza 12 prednosti z ikonami - pri nas slika levo (mreza 3 slik) + besedilo desno + mreza 12 prednosti z ikonami
   2. naslov + besedilo sredinsko, pod tem 2 sliki v vrsti (tajice z nasimi tangami / z obicnim rubljem): finally, a thong that ends camel toe - pri nas enako, 2 sliki z znackama
   3. besedilo levo (Tested. Proven. Loved. + 3 odstotki 96 % / 94 % / 92 %), desno karusel 2 slik - pri nas besedilo s 3 karticami odstotkov levo, karusel 2 slik desno
   4. slika levo, besedilo desno: Why We're Not Like the Rest + primerjalna tabela (mi / drugi, 5 vrstic) - pri nas slika levo + besedilo in tabela desno
   5. prazna sekcija (nalaga se z JS, brez vsebine) - IZPUSCENO
   6. FAQ - pri nas FAQ v sekciji mnenj (Informacije o proizvodu)
   7. 1000+ 5 Star reviews: karusel 5 mnenj s fotografijami kupk - pri nas karusel 5 kartic s fotografijami; tuje stevilo mnenj zamenjano z nasim (4,8 / 1.081), znamka na embalazi zamenjana z NORIKS
   8. Frequently Bought Together (drugi izdelki tuje trgovine) - IZPUSCENO
   9. zakljucek - NORIKS pogoji (skupni del noriks-pogoji.php)
 * BARVA ORIGINALA: #c4b3a3 (taupe barva gumbov na originalu, temni ton #3f2f1f ob prehodu; bez/kozni toni izdelka); svetel ton za --bg #f6f1ec, akcent #7a5f48
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
$wst_img = get_template_directory_uri() . '/img/seamthong/';
$wst_svg = '<svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">';
$wst_prednosti = array(
	array( 'Organski', '<path d="M5 19c0-8 5-13 14-14-1 9-6 14-14 14z"/><path d="M5 19l7-7"/>' ),
	array( 'Bez sulfata', '<circle cx="12" cy="12" r="8.5"/><path d="M6 6l12 12"/>' ),
	array( 'Bez parabena', '<path d="M12 3c3 3.5 5 6.3 5 9a5 5 0 0 1-10 0c0-2.7 2-5.5 5-9z"/><path d="M6 6l12 12"/>' ),
	array( '100 % veganski', '<path d="M4 6l8 13 8-13"/><path d="M9 6h6"/>' ),
	array( 'Bez okrutnosti', '<path d="M12 20s-7-4.4-7-10a4 4 0 0 1 7-2.6A4 4 0 0 1 19 10c0 5.6-7 10-7 10z"/>' ),
	array( 'Laboratorijski testirano', '<path d="M9 3h6M10 3v6l-5 9a2 2 0 0 0 1.8 3h10.4a2 2 0 0 0 1.8-3l-5-9V3"/><path d="M7.5 15h9"/>' ),
	array( 'Vrhunska tkanina', '<path d="M12 3l2.6 5.3 5.9.9-4.3 4.1 1 5.8L12 16.4 6.8 19.1l1-5.8L3.5 9.2l5.9-.9z"/>' ),
	array( 'Upija znoj', '<path d="M12 3c3 3.5 5 6.3 5 9a5 5 0 0 1-10 0c0-2.7 2-5.5 5-9z"/><path d="M10 13a2 2 0 0 0 2 2"/>' ),
	array( 'Bez vidljivih rubova', '<rect x="4" y="5" width="16" height="14" rx="3"/><path d="M8 12h8" stroke-dasharray="2 2"/>' ),
	array( 'Bez camel toe efekta', '<path d="M20 6L9 17l-5-5"/>' ),
	array( 'Široki umetak', '<path d="M4 7h16M4 17h16"/><path d="M8 7l-2 5 2 5M16 7l2 5-2 5"/>' ),
	array( 'Mekan dodir', '<path d="M3 15c2-2 4-2 6 0s4 2 6 0 4-2 6 0"/><path d="M3 10c2-2 4-2 6 0s4 2 6 0 4-2 6 0"/>' ),
);
$wst_mnenja = array(
	array( 'kupac-1', 'Jelena H.', 'Zagreb', 'Tako udobne! Nema više neugodnog camel toe efekta u teretani ni dok obavljam poslove po gradu. Silueta je glatka i osjećam se puno sigurnije.' ),
	array( 'kupac-2', 'Marija T.', 'Split', 'Bila sam skeptična, ali stvarno me iznenadilo. Ne vide se ni ispod mojih najužih tajica za jogu ni ispod bijelih kratkih hlača. Oprala sam ih više puta i izgledaju kao nove.' ),
	array( 'kupac-3', 'Ana J.', 'Rijeka', 'Napokon nešto što stvarno radi! Prije sam stalno popravljala tajice, a ove tange stoje na mjestu cijeli dan. Nema ni tragova znoja, jako su prozračne.' ),
	array( 'kupac-4', 'Ema K.', 'Osijek', 'Vrijede svaki cent. Nosim ih ispod haljina, traperica i odjeće za trening – rade u svakoj situaciji. Ne uvlače se, nema rubova, samo udobnost.' ),
	array( 'kupac-5', 'Sofija J.', 'Zadar', 'Prava promjena! Puno nosim tajice na poslu i na putovanjima, a ove tange uklanjaju camel toe i rubove rublja. Toliko su mekane da zaboravim da ih nosim.' ),
);
?>
<div class="wsth">

<section class="wsth__s wsth__s--bg"><div class="wsth__v wsth__dva">
  <div class="wsth__mozaik">
    <div class="wsth__media wsth__mv"><img src="<?php echo esc_url( $wst_img . 'noriks-seamthong-trening.webp' ); ?>" alt="Žena na treningu u tajicama i NORIKS bešavnim tangama" loading="eager" decoding="async"><span class="wsth__znacka">Bešavno</span></div>
    <div class="wsth__media wsth__mm"><img src="<?php echo esc_url( $wst_img . 'noriks-seamthong-crne-izbliza.webp' ); ?>" alt="Crne bešavne tange izbliza sa širokim pojasom" loading="eager" decoding="async"></div>
    <div class="wsth__media wsth__mm"><img src="<?php echo esc_url( $wst_img . 'noriks-seamthong-bez-polozene.webp' ); ?>" alt="Bež bešavne tange položene na podlogu" loading="eager" decoding="async"></div>
  </div>
  <div>
    <div class="wsth__kicker">Bešavna udobnost</div>
    <h2 class="wsth__h2">Bešavna udobnost – <em>nevidljivo pristajanje</em></h2>
    <p class="wsth__p">Napravljene za modernu ženu kojoj su važni <em>samopouzdanje</em> i <em>elegancija</em>. NORIKS SeamThong spaja promišljen kroj i kvalitetnu tkaninu, pa tange ostaju nevidljive i glatke ispod bilo koje odjeće – od tajica za trening do uske haljine.</p>
    <p class="wsth__p">Rubovi su bešavni i ravni, pojas ostaje na mjestu, a široki umetak sprijeda drži liniju glatkom. Tkanina je mekana poput druge kože, prozračna i odvodi vlagu – da se osjećate svježe od jutra do večeri.</p>
    <div class="wsth__pred">
      <?php foreach ( $wst_prednosti as $wst_p ) : ?>
        <div class="wsth__pk"><span class="wsth__pi"><?php echo $wst_svg . $wst_p[1]; ?></svg></span><span><?php echo esc_html( $wst_p[0] ); ?></span></div>
      <?php endforeach; ?>
    </div>
    <p class="wsth__zak">Udobnost koju ne vidite – a osjetite cijeli dan.</p>
  </div>
</div></section>

<section class="wsth__s"><div class="wsth__v">
  <div class="wsth__kicker wsth__c">Kraj popravljanja</div>
  <h2 class="wsth__h2 wsth__c">Napokon tange koje <em>rješavaju camel toe</em> i uvlačenje sprijeda</h2>
  <div class="wsth__uvod">
    <p class="wsth__p">Bez camel toe efekta, bez vidljivih rubova, bez nelagode – samo bešavna, prozračna udobnost koja ostaje nevidljiva ispod svega što obučete. Usporedite istu sivu tajicu: lijevo s NORIKS SeamThong tangama, desno s običnim rubljem.</p>
    <p class="wsth__p">Tajni sastojak je <em>široki podstavljeni umetak</em> sprijeda: on izravnava liniju i drži oblik, pa više ne morate stalno provjeravati odraz u izlogu ni popravljati tajice nakon svakog čučnja.</p>
  </div>
  <div class="wsth__usp">
    <figure class="wsth__uk"><div class="wsth__um"><img src="<?php echo esc_url( $wst_img . 'noriks-seamthong-s-noriks-gacicama.webp' ); ?>" alt="Siva tajica s NORIKS tangama – glatka linija sprijeda" loading="eager" decoding="async"><span class="wsth__znacka wsth__znacka--da">S NORIKS SeamThong</span></div><figcaption><span class="wsth__ok">✓</span> Glatka linija, bez nabora i uvlačenja</figcaption></figure>
    <figure class="wsth__uk"><div class="wsth__um"><img src="<?php echo esc_url( $wst_img . 'noriks-seamthong-obicno-rublje.webp' ); ?>" alt="Siva tajica s običnim rubljem – vidljiv camel toe efekt" loading="eager" decoding="async"><span class="wsth__znacka wsth__znacka--ne">Obično rublje</span></div><figcaption><span class="wsth__x">✕</span> Camel toe efekt i stalno popravljanje</figcaption></figure>
  </div>
  <p class="wsth__zak">Nisu krive tajice. Krivo je donje rublje.</p>
</div></section>

<section class="wsth__s wsth__s--bg"><div class="wsth__v wsth__dva wsth__dva--rev">
  <div class="wsth__media wsth__kar" aria-label="Galerija">
    <div class="wsth__karv"><img src="<?php echo esc_url( $wst_img . 'noriks-seamthong-cetiri-boje.webp' ); ?>" alt="NORIKS bešavne tange u četiri boje" loading="eager" decoding="async"><img src="<?php echo esc_url( $wst_img . 'noriks-seamthong-bez-model.webp' ); ?>" alt="Bež bešavne tange na modelu" loading="eager" decoding="async"></div>
    <span class="wsth__karpik"><i></i><i></i></span>
  </div>
  <div>
    <div class="wsth__kicker">Testirano. Dokazano. Omiljeno.</div>
    <h2 class="wsth__h2">Žene su ih isprobale – <em>i ne skidaju ih</em></h2>
    <p class="wsth__p">Tange smo dali na nošenje ženama koje svaki dan nose tajice, kratke hlače i usku odjeću – na treningu, na poslu i u izlasku. Rezultati govore sami za sebe:</p>
    <div class="wsth__stat">
      <div><strong>96 %</strong><span>osjećalo se sigurnije u tajicama i kratkim hlačama – od treninga do izlaska</span></div>
      <div><strong>94 %</strong><span>udobnost cijeli dan, bez potrebe za povlačenjem i popravljanjem</span></div>
      <div><strong>92 %</strong><span>primijetilo je glađu i laskaviju liniju ispod svake odjeće</span></div>
    </div>
    <p class="wsth__p">Pojas koji se ne podvija, rubovi koji se ne vide i tkanina koja diše – zato ih je teško skinuti kad ih jednom probate.</p>
    <p class="wsth__zak">Probajte jedne – i shvatit ćete zašto se vraćaju po još.</p>
  </div>
</div></section>

<section class="wsth__s"><div class="wsth__v wsth__dva">
  <div class="wsth__media"><img src="<?php echo esc_url( $wst_img . 'noriks-seamthong-tajice-crne.webp' ); ?>" alt="Žena u crnim tajicama s glatkom linijom zahvaljujući NORIKS tangama" loading="eager" decoding="async"><span class="wsth__znacka">Usporedba</span></div>
  <div>
    <div class="wsth__kicker">Zašto NORIKS</div>
    <h2 class="wsth__h2">Zašto nismo <em>kao ostali</em></h2>
    <p class="wsth__p">Popravili smo nedostatke koje drugi ignoriraju – da svaki put dobijete udobnost, samopouzdanje i nula camel toe efekta. Razlika je u detaljima koje ne vidite, ali ih osjetite od prvog nošenja.</p>
    <div class="wsth__tw"><table class="wsth__tab">
      <thead><tr><th>Usporedba</th><th>NORIKS SeamThong</th><th>Ostali</th></tr></thead>
      <tbody>
        <tr><td>Camel toe</td><td><span class="wsth__ok">✓</span> Bez camel toe efekta</td><td><span class="wsth__x">✕</span> Camel toe</td></tr>
        <tr><td>Umetak</td><td><span class="wsth__ok">✓</span> Široki umetak</td><td><span class="wsth__x">✕</span> Uski umetak</td></tr>
        <tr><td>Vlaga</td><td><span class="wsth__ok">✓</span> Upija vlagu</td><td><span class="wsth__x">✕</span> Ne upija</td></tr>
        <tr><td>Tkanina</td><td><span class="wsth__ok">✓</span> Kvalitetna tkanina</td><td><span class="wsth__x">✕</span> Slaba tkanina</td></tr>
        <tr><td>Rubovi</td><td><span class="wsth__ok">✓</span> Bez vidljivih rubova</td><td><span class="wsth__x">✕</span> Vidljivi rubovi</td></tr>
      </tbody>
    </table></div>
    <p class="wsth__zak">Otkrijte dizajn koji vas drži udobnom i sigurnom cijeli dan.</p>
  </div>
</div></section>

<section class="wsth__s wsth__s--bg"><div class="wsth__v">
  <div class="wsth__kicker wsth__c">Iskustva kupki</div>
  <h2 class="wsth__h2 wsth__c">Što kažu <em>naše kupke</em></h2>
  <p class="wsth__ocj wsth__c"><span class="wsth__zv">★★★★★</span> <strong>4,8</strong> / 5 · 1.081 recenzija</p>
  <div class="wsth__mkar">
    <?php foreach ( $wst_mnenja as $wst_m ) : ?>
      <div class="wsth__k">
        <div class="wsth__km"><img src="<?php echo esc_url( $wst_img . 'noriks-seamthong-' . $wst_m[0] . '.webp' ); ?>" alt="<?php echo esc_attr( 'Fotografija kupke ' . $wst_m[1] . ' – NORIKS bešavne tange' ); ?>" loading="eager" decoding="async"></div>
        <div class="wsth__kt">
          <span class="wsth__zv">★★★★★</span>
          <p>„<?php echo esc_html( $wst_m[3] ); ?>"</p>
          <div class="wsth__ime"><i class="wsth__av"><?php echo esc_html( mb_substr( $wst_m[1], 0, 1 ) ); ?></i><span><?php echo esc_html( $wst_m[1] ); ?><small><?php echo esc_html( $wst_m[2] ); ?> · provjerena kupnja</small></span></div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
  <p class="wsth__zak">Pridružite se tisućama žena koje su zaboravile na popravljanje tajica.</p>
</div></section>

<section class="wsth__s npg-s"><?php $npg = array( 'izdelek' => 'NORIKS SeamThong', 'barva' => '#7a5f48' ); include __DIR__ . '/noriks-pogoji.php'; ?></section>

</div>

<style>
.wsth{color:#2b211a;font-family:inherit}
.wsth__s{padding:72px 0;background:#fff}.wsth__s.wsth__s--bg{background:#f6f1ec}
.wsth__v{width:100%;max-width:1240px;margin:0 auto;padding:0 24px;box-sizing:border-box}
.wsth__c{text-align:center}
.wsth__kicker{font-size:12.5px;letter-spacing:1.8px;text-transform:uppercase;color:#7a5f48;margin:0 0 8px;font-weight:700}
.wsth__kicker::before{content:"";display:inline-block;width:22px;height:2px;background:#c4b3a3;vertical-align:middle;margin:-2px 10px 0 0;border-radius:2px}
.wsth__h2{font-size:clamp(24px,3vw,34px);font-weight:800;line-height:1.2;margin:0 0 18px;color:#2b211a}.wsth__h2 em{font-style:italic;color:#7a5f48}
.wsth__p{font-size:15.5px;line-height:1.65;color:#3d342d;margin:0 0 14px}.wsth__p em{font-style:normal;font-weight:700;color:#2b211a}
.wsth__zak{font-size:16px;font-weight:800;line-height:1.5;margin:18px 0 0}
.wsth__v>.wsth__zak{text-align:center}
.wsth__dva .wsth__zak{border-left:3px solid #c4b3a3;padding-left:14px}
/* slika + besedilo */
.wsth__dva{display:grid;grid-template-columns:1fr 1fr;gap:56px;align-items:center}.wsth__dva--rev>div:first-child{order:2}
.wsth__media{position:relative;border-radius:16px;overflow:hidden;box-shadow:0 14px 34px rgba(63,47,31,.14);aspect-ratio:4/5;background:#ece4dc}
.wsth__media img{width:100%;height:100%;object-fit:cover;display:block}
.wsth__znacka{position:absolute;left:16px;top:16px;background:#fff;color:#3f2f1f;font-size:12px;font-weight:800;letter-spacing:1px;text-transform:uppercase;padding:7px 12px;border-radius:20px;box-shadow:0 4px 12px rgba(0,0,0,.15)}
.wsth__znacka--da{background:#3f2f1f;color:#fff}.wsth__znacka--ne{background:#fff;color:#8a8a8a}
/* mozaik 3 slik */
.wsth__mozaik{display:grid;grid-template-columns:1fr 1fr;gap:14px}
.wsth__mozaik .wsth__mv{grid-column:1/3;aspect-ratio:4/3}.wsth__mozaik .wsth__mm{aspect-ratio:1/1}
/* prednosti */
.wsth__pred{display:grid;grid-template-columns:repeat(3,1fr);gap:10px;margin:8px 0 4px}
.wsth__pk{display:flex;align-items:center;gap:10px;background:#fff;border-radius:14px;padding:10px 12px;font-size:13.5px;font-weight:700;line-height:1.3;box-shadow:0 6px 16px rgba(63,47,31,.07)}
.wsth__pi{flex:0 0 36px;width:36px;height:36px;border-radius:50%;background:#ede3d8;color:#7a5f48;display:flex;align-items:center;justify-content:center}.wsth__pi svg{width:19px;height:19px}
/* usporedba */
.wsth__uvod{display:grid;grid-template-columns:1fr 1fr;gap:32px;margin:0 0 6px}
.wsth__usp{display:grid;grid-template-columns:1fr 1fr;gap:24px;margin-top:18px}
.wsth__uk{margin:0;background:#fff;border-radius:16px;overflow:hidden;box-shadow:0 10px 28px rgba(63,47,31,.10)}
.wsth__um{position:relative}.wsth__um img{width:100%;aspect-ratio:768/410;object-fit:cover;display:block}
.wsth__uk figcaption{padding:16px 20px;font-size:15.5px;font-weight:700;display:flex;align-items:center;gap:10px}
.wsth__ok,.wsth__x{flex:0 0 22px;width:22px;height:22px;border-radius:50%;display:inline-flex;align-items:center;justify-content:center;font-size:12px;font-weight:800;vertical-align:middle;margin-right:4px}
.wsth__ok{background:#3f2f1f;color:#fff}.wsth__x{background:#eee;color:#9a9a9a}
/* karusel 2 slik */
.wsth__kar{display:flex;flex-direction:column}
.wsth__karv{display:flex;overflow-x:auto;scroll-snap-type:x mandatory;height:100%;scrollbar-width:none}.wsth__karv::-webkit-scrollbar{display:none}
.wsth__karv img{flex:0 0 100%;scroll-snap-align:start}
.wsth__karpik{position:absolute;left:0;right:0;bottom:14px;display:flex;justify-content:center;gap:8px}.wsth__karpik i{width:8px;height:8px;border-radius:50%;background:rgba(255,255,255,.9);box-shadow:0 1px 4px rgba(0,0,0,.25)}
/* odstotki */
.wsth__stat{display:grid;grid-template-columns:repeat(3,1fr);gap:12px;margin:6px 0 16px}
.wsth__stat>div{background:#fff;border-radius:14px;padding:18px 14px;box-shadow:0 6px 18px rgba(63,47,31,.08)}
.wsth__stat strong{display:block;font-size:30px;font-weight:800;color:#7a5f48;line-height:1.1;margin-bottom:6px}.wsth__stat span{font-size:13.5px;line-height:1.45;color:#4a4038;display:block}
/* tabela */
.wsth__tw{overflow-x:auto;margin:6px 0 4px}.wsth__tab{width:100%;border-collapse:collapse;background:#fff;border-radius:14px;overflow:hidden;font-size:15px;box-shadow:0 6px 18px rgba(63,47,31,.07)}
.wsth__tab th,.wsth__tab td{padding:12px 14px;border-bottom:1px solid #f0ebe5;text-align:left}.wsth__tab th{background:#111!important;color:#fff!important;font-weight:700}
.wsth__tab td:nth-child(2){font-weight:700;background:#faf6f2}.wsth__tab td:nth-child(3){color:#8a8a8a}
/* mnenja */
.wsth__ocj{font-size:15.5px;margin:-6px 0 6px;color:#4a4038}.wsth__ocj strong{color:#7a5f48;font-size:18px}
.wsth__mkar{display:grid;grid-auto-flow:column;grid-auto-columns:calc((100% - 48px)/3);gap:24px;margin-top:24px;overflow-x:auto;scroll-snap-type:x mandatory;padding-bottom:10px;scrollbar-width:thin}
.wsth__mkar>*{scroll-snap-align:start}
.wsth__k{background:#fff;border-radius:16px;overflow:hidden;display:flex;flex-direction:column;box-shadow:0 8px 22px rgba(63,47,31,.08);transition:transform .2s,box-shadow .2s}
.wsth__k:hover{transform:translateY(-3px);box-shadow:0 14px 30px rgba(63,47,31,.16)}
.wsth__km img{width:100%;aspect-ratio:1/1;object-fit:cover;display:block}
.wsth__kt{padding:20px 22px 22px;flex:1;display:flex;flex-direction:column}.wsth__kt p{margin:8px 0 14px;font-size:15.5px;line-height:1.55;color:#3d342d;flex:1}
.wsth__zv{color:#e0a33c;letter-spacing:2px}
.wsth__ime{display:flex;align-items:center;gap:10px;font-weight:700;font-size:14px}.wsth__ime small{display:block;font-weight:500;color:#8a7f76;font-size:12.5px}
.wsth__av{flex:0 0 36px;width:36px;height:36px;border-radius:50%;background:#ede3d8;color:#7a5f48;font-style:normal;font-weight:800;font-size:14px;display:inline-flex;align-items:center;justify-content:center}
@media (max-width:860px){.wsth__s{padding:46px 0}
.wsth__dva{grid-template-columns:1fr;gap:24px}.wsth__dva--rev>div:first-child{order:0}
.wsth__pred{grid-template-columns:1fr 1fr}.wsth__uvod{grid-template-columns:1fr;gap:0}.wsth__usp{grid-template-columns:1fr;gap:16px}
.wsth__stat{grid-template-columns:1fr;gap:10px}.wsth__stat>div{display:flex;align-items:center;gap:14px;padding:14px 16px}.wsth__stat strong{margin:0;font-size:26px;flex:0 0 72px}
.wsth__mkar{grid-auto-columns:84%}}
@media (max-width:767px){.wsth__v{padding:0 16px}}
@media (max-width:380px){.wsth__pk{font-size:12.5px;padding:9px 10px;gap:8px}.wsth__pi{flex-basis:32px;width:32px;height:32px}}
</style>
