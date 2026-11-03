<?php
/**
 * NORIKS SkinLift — uredaj za lifting lica z mikrotokom (roza): why sekcije po strukturi originala
 * (skindion.es/products/dispositivo-de-rejuvenecimiento-facial-skindion-rosa-con-suscripcion).
 *
 * (opis pod gumbom, od vrha navzdol; prazna sekcija Wistia videa na originalu nima vsebine)
 * STRUKTURA ORIGINALA:
   1. "Clinicamente testado" - naslov + podnaslov, slika levo, desno 3 velike odstotne stevilke (80 %, 21 %, 500 %) + opomba o viru
   2. "Preguntas frecuentes" - naslov + harmonika 3 vprasanj levo, slika desno - pri nas vprasanja s stevilkami levo, slika desno
   3. "Tu rutina de lifting facial en 5 min" - 4 kartice v vrsti (slika zgoraj, Paso 1-4, naslov + besedilo)
   4. "Mas de 300,000 mujeres confian" - karusel video mnenj (video + citat + ime, starost) - pri nas 6 videov s HR napisi, NORIKS namesto tuje znamke, 120.000 kupaca
   5. "Di adios al estres de" - 4 alineje z ikonami levo + zakljucni stavek, slika desno - pri nas cik-cak: slika levo
   6. "Experimenta el exito de tu piel" - naslov + 4 kartice v vrsti (slika + kratek opis)
   7. "Q&A" - naslov + harmonika 6 vprasanj, slika - pri nas slika desno (cik-cak), vprasanja s stevilkami
   8. pogoji trgovine - pri nas skupna sekcija NORIKS pogoji
 * BARVA ORIGINALA: #f36c8f (roza gumbov, oznak in naslovov originala); svetel ton za --bg #fdf0f3
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
$wsl_t   = get_template_directory_uri();
$wsl_i   = function ( $f ) use ( $wsl_t ) { return esc_url( $wsl_t . '/img/skinlift/' . $f ); };
$wsl_svg = '<svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">';
$wsl_mnenja = array(
	array( '/img/skinlift/noriks-skinlift-mnenje-1.mp4', 'Pilar, 45 godina', 'Lako sam ga uklopila, samo 5 minuta dnevno. Postupno sam primijetila da mi je koža glađa i blistavija.' ),
	array( '/img/skinlift/noriks-skinlift-mnenje-2.mp4', 'Sara, 42 godine', 'Koža mi se jako promijenila – primijetila sam da je puno čvršća i hidratiziranija.' ),
	array( '/img/skinlift/noriks-skinlift-mnenje-3.mp4', 'Rocio, 29 godina', 'Koristim ga 3 puta tjedno. Kad ga koristite, učinak osjetite odmah. Preporučila bih ga već od 29. godine.' ),
	array( '/img/skinlift/noriks-skinlift-mnenje-4.mp4', 'Lucia, 31 godina', 'Tijekom tretmana primijetila sam da mi koža više blista. Jako mi se sviđa kako me gel hidratizira. Preporučila bih ga, ako ga koristite redovito.' ),
	array( '/img/skinlift/noriks-skinlift-mnenje-5.mp4', 'Irene, 44 godine', 'Ono što sam zapravo primijetila je veća čvrstoća. Preporučila bih ga ženama mojih godina.' ),
	array( '/img/skinlift/noriks-skinlift-mnenje-6.mp4', 'Denisse, 43 godine', 'Već je dio moje rutine, već mi treba. Sviđa mi se jer je to vrijeme koje posvetim sebi i njezi kože.' ),
);
?>
<div class="wsl">

<section class="wsl__s wsl__s--bg"><div class="wsl__v wsl__dva">
  <div class="wsl__media"><img src="<?php echo $wsl_i( 'noriks-skinlift-klinicki-testirano.webp' ); ?>" alt="Žena koristi ružičasti NORIKS SkinLift uređaj na licu" loading="eager" decoding="async"><span class="wsl__znacka">Klinički testirano</span></div>
  <div>
    <div class="wsl__kicker">Klinički testirano</div>
    <h2 class="wsl__h2">Mikrostruja koja <em>jača osnovu lica</em></h2>
    <p class="wsl__p">Ispitivanja certificiranih laboratorija pokazuju da mikrostruja jača mišićnu osnovu lica – za toniranije i definiranije lice. Nježni valovi energije aktiviraju više od 40 mišića lica, kao trening u teretani, samo za lice.</p>
    <div class="wsl__br">
      <div class="wsl__bk"><strong>80 %</strong><span>primjećuje čvršće i definiranije lice</span></div>
      <div class="wsl__bk"><strong>21 %</strong><span>manje vidljivih bora</span></div>
      <div class="wsl__bk"><strong>500 %</strong><span>više snage mišića lica</span></div>
    </div>
    <p class="wsl__op">*Izvor: neovisna certificirana klinička studija (Journal of Life Science, 2012).</p>
  </div>
</div></section>

<section class="wsl__s"><div class="wsl__v wsl__dva wsl__dva--rev">
  <div class="wsl__media"><img src="<?php echo $wsl_i( 'noriks-skinlift-pitanja.webp' ); ?>" alt="Žena drži NORIKS SkinLift uz obraz" loading="eager" decoding="async"></div>
  <div>
    <div class="wsl__kicker">Česta pitanja</div>
    <h2 class="wsl__h2">Sve što trebate znati o <em>NORIKS SkinLift</em></h2>
    <ol class="wsl__tocke">
      <li><span class="wsl__st">01</span><div><strong>Što je mikrostruja?</strong><p>Jednostavno je: to je vaša „teretana za lice" od 5 minuta kod kuće. Nježni valovi energije vježbaju više od 40 mišića lica – bude ih, aktiviraju i jačaju. Neinvazivno je, a rad uređaja osjetite kao male kontrakcije. Rezultat je prirodni lifting i vidljivo toniranije lice.</p></div></li>
      <li><span class="wsl__st">02</span><div><strong>Za koliko ću vremena vidjeti rezultate?</strong><p>Uz svakodnevnu upotrebu mišići lica jačaju – zato 90 % korisnica vidi vidljivo čvršću i toniraniju kožu već za 2–3 tjedna. Kao u teretani, ključna je ustrajnost: 5 minuta dnevno, 5 dana u tjednu. Isprobajte bez rizika – imate 30 dana za povrat novca.</p></div></li>
      <li><span class="wsl__st">03</span><div><strong>Što dobivam u kompletu?</strong><p>NORIKS SkinLift uređaj, hidratantni gel za mikrostruju 50 g, USB punjač i upute za upotrebu.</p></div></li>
    </ol>
  </div>
</div></section>

<section class="wsl__s wsl__s--bg"><div class="wsl__v">
  <div class="wsl__kicker wsl__c">Korak po korak</div>
  <h2 class="wsl__h2 wsl__c">Vaša rutina liftinga lica <em>u 5 minuta</em></h2>
  <p class="wsl__p wsl__c">Četiri jednostavna koraka – ujutro ili navečer, kad vam najviše odgovara.</p>
  <div class="wsl__kg">
    <div class="wsl__kk"><div class="wsl__km"><img src="<?php echo $wsl_i( 'noriks-skinlift-korak-1-ciscenje.webp' ); ?>" alt="Čišćenje lica vatenim jastučićem" loading="eager" decoding="async"><span class="wsl__kn">1</span></div><div class="wsl__kt"><span class="wsl__ko">Korak 1</span><strong>Čišćenje</strong><p>Počnite sa 100 % čistim licem. Uklonite svu šminku, ulja i ostatke s kože.</p></div></div>
    <div class="wsl__kk"><div class="wsl__km"><img src="<?php echo $wsl_i( 'noriks-skinlift-korak-2-gel.webp' ); ?>" alt="NORIKS SkinLift uređaj u ruci" loading="eager" decoding="async"><span class="wsl__kn">2</span></div><div class="wsl__kt"><span class="wsl__ko">Korak 2</span><strong>Hidratantni gel</strong><p>Nanesite sloj gela za mikrostruju. To je KLJUČNO – tako mikrostruja putuje kroz kožu i dolazi do MIŠIĆA.</p></div></div>
    <div class="wsl__kk"><div class="wsl__km"><img src="<?php echo $wsl_i( 'noriks-skinlift-korak-3-intenzitet.webp' ); ?>" alt="Nanošenje gela kistom na lice" loading="eager" decoding="async"><span class="wsl__kn">3</span></div><div class="wsl__kt"><span class="wsl__ko">Korak 3</span><strong>Odaberite intenzitet</strong><p>Uvijek počnite na razini 1. Intenzitet (3 razine) povećavajte postupno, tek kad vam je ugodno.</p></div></div>
    <div class="wsl__kk"><div class="wsl__km"><img src="<?php echo $wsl_i( 'noriks-skinlift-korak-4-tonizacija.webp' ); ?>" alt="Klizanje NORIKS SkinLift uređajem prema gore po obrazu" loading="eager" decoding="async"><span class="wsl__kn">4</span></div><div class="wsl__kt"><span class="wsl__ko">Korak 4</span><strong>Tonizirajte i podignite</strong><p>Klizite prema gore i usredotočite se na čeljust, jagodice i čelo – tako „vježbate" i jačate te mišiće.</p></div></div>
  </div>
</div></section>

<section class="wsl__s"><div class="wsl__v">
  <div class="wsl__kicker wsl__c">Iskustva kupaca</div>
  <h2 class="wsl__h2 wsl__c">Više od 120.000 kupaca <em>vjeruje NORIKS-u</em></h2>
  <p class="wsl__c"><span class="wsl__ocj"><strong>4,8</strong> <span class="wsl__zv">★★★★★</span> na temelju 1.081 recenzije</span></p>
  <div class="wsl__karw">
    <div class="wsl__kar">
      <?php foreach ( $wsl_mnenja as $m ) : ?>
      <figure class="wsl__vk">
        <div class="wsl__vm"><video src="<?php echo esc_url( $wsl_t . $m[0] ); ?>" poster="<?php echo esc_url( $wsl_t . str_replace( '.mp4', '.jpg', $m[0] ) ); ?>" autoplay muted loop playsinline webkit-playsinline preload="metadata" aria-label="Video mnenje kupke – <?php echo esc_attr( $m[1] ); ?>"></video></div>
        <figcaption><span class="wsl__zv">★★★★★</span><p>„<?php echo esc_html( $m[2] ); ?>"</p><strong><?php echo esc_html( $m[1] ); ?></strong></figcaption>
      </figure>
      <?php endforeach; ?>
    </div>
    <button type="button" class="wsl__pus wsl__pus--l" aria-label="Prethodno">&#8249;</button>
    <button type="button" class="wsl__pus wsl__pus--d" aria-label="Sljedeće">&#8250;</button>
  </div>
</div></section>

<section class="wsl__s wsl__s--bg"><div class="wsl__v wsl__dva">
  <div class="wsl__media"><img src="<?php echo $wsl_i( 'noriks-skinlift-bez-stresa.webp' ); ?>" alt="Crni NORIKS SkinLift uređaj uz lice" loading="eager" decoding="async"></div>
  <div>
    <div class="wsl__kicker">Bez igala, bez salona</div>
    <h2 class="wsl__h2">Recite zbogom <em>stresu zbog</em>:</h2>
    <ul class="wsl__al">
      <li><span class="wsl__ik"><?php echo $wsl_svg; ?><path d="M14 4l6 6"/><path d="M17 7l-9 9-3 1 1-3 9-9"/><path d="M4 20l2-2"/><path d="M3 3l18 18"/></svg></span><div><strong>Invazivnih postupaka</strong><p>Bez igala i bolnih tretmana.</p></div></li>
      <li><span class="wsl__ik"><?php echo $wsl_svg; ?><rect x="3" y="6" width="18" height="12" rx="2"/><circle cx="12" cy="12" r="2.5"/><path d="M6 9v.01M18 15v.01"/></svg></span><div><strong>Nepotrebnih troškova</strong><p>Uštedite na skupim tretmanima u salonima ljepote i spa centrima.</p></div></li>
      <li><span class="wsl__ik"><?php echo $wsl_svg; ?><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/></svg></span><div><strong>Izgubljenog vremena</strong><p>Nema više izlazaka iz kuće i gubljenja vremena.</p></div></li>
      <li><span class="wsl__ik"><?php echo $wsl_svg; ?><circle cx="12" cy="12" r="9"/><path d="M8.5 15.5s1.2-1.5 3.5-1.5 3.5 1.5 3.5 1.5"/><path d="M9 9.5h.01M15 9.5h.01"/></svg></span><div><strong>Stalne nelagode</strong><p>Osjećaja nesigurnosti zbog opuštene kože, podbratka ili umornog lica.</p></div></li>
    </ul>
    <p class="wsl__zak">Zaslužujete učinkovito rješenje kojem možete vjerovati. <em>NORIKS SkinLift je najbolje ulaganje u sebe.</em></p>
  </div>
</div></section>

<section class="wsl__s"><div class="wsl__v">
  <div class="wsl__kicker wsl__c">Uspjeh vaše kože</div>
  <h2 class="wsl__h2 wsl__c">Doživite uspjeh svoje kože s <em>NORIKS SkinLift</em></h2>
  <div class="wsl__ig">
    <figure class="wsl__ik4"><div class="wsl__im"><img src="<?php echo $wsl_i( 'noriks-skinlift-lifting-prirodno.webp' ); ?>" alt="Žena zatvorenih očiju koristi NORIKS SkinLift na čeljusti" loading="eager" decoding="async"></div><figcaption><span class="wsl__ik"><?php echo $wsl_svg; ?><path d="M12 19V5"/><path d="M6 11l6-6 6 6"/></svg></span><p>Postignite prirodni lifting i vidljivo čvršću, toniraniju kožu.</p></figcaption></figure>
    <figure class="wsl__ik4"><div class="wsl__im"><img src="<?php echo $wsl_i( 'noriks-skinlift-razlika-misic.webp' ); ?>" alt="Crni NORIKS SkinLift uz lice žene s kovrčavom kosom" loading="eager" decoding="async"></div><figcaption><span class="wsl__ik"><?php echo $wsl_svg; ?><path d="M13 2L4 14h7l-1 8 9-12h-7z"/></svg></span><p>Osjetite razliku: lifting koji dolazi iz MIŠIĆA, a ne iz kreme.</p></figcaption></figure>
    <figure class="wsl__ik4"><div class="wsl__im"><img src="<?php echo $wsl_i( 'noriks-skinlift-rutina-5-minuta.webp' ); ?>" alt="NORIKS SkinLift, gel i svijeća na stolu – rutina od 5 minuta" loading="eager" decoding="async"></div><figcaption><span class="wsl__ik"><?php echo $wsl_svg; ?><path d="M3 12h4l3-7 4 14 3-7h4"/></svg></span><p>Vaša „teretana za lice" od 5 minuta. Profesionalni rezultati iz udobnosti doma.</p></figcaption></figure>
    <figure class="wsl__ik4"><div class="wsl__im"><img src="<?php echo $wsl_i( 'noriks-skinlift-cvrsto-lice.webp' ); ?>" alt="Nasmijana žena u ogrtaču koristi NORIKS SkinLift" loading="eager" decoding="async"></div><figcaption><span class="wsl__ik"><?php echo $wsl_svg; ?><path d="M20.8 4.6a5.5 5.5 0 0 0-7.8 0L12 5.7l-1-1.1a5.5 5.5 0 0 0-7.8 7.8L12 21l8.8-8.6a5.5 5.5 0 0 0 0-7.8z"/></svg></span><p>Od frustracije zbog opuštene kože i „umornog lica" do čvrstog, podignutog lica.</p></figcaption></figure>
  </div>
</div></section>

<section class="wsl__s wsl__s--bg"><div class="wsl__v wsl__dva wsl__dva--rev">
  <div class="wsl__media"><img src="<?php echo $wsl_i( 'noriks-skinlift-pitanja-odgovori.webp' ); ?>" alt="Ružičasti i crni NORIKS SkinLift uređaj u rukama" loading="eager" decoding="async"></div>
  <div>
    <div class="wsl__kicker">Pitanja i odgovori</div>
    <h2 class="wsl__h2">Detalji koje trebate <em>znati prije početka</em></h2>
    <ol class="wsl__tocke">
      <li><span class="wsl__st">01</span><div><strong>Koliko često ga koristiti?</strong><p>Kao kod svake rutine vježbanja, ustrajnost je sve. Preporučujemo 5 minuta dnevno, 5 dana u tjednu – to je sve što trebate da mišići ojačaju i koža postane čvršća i tonirana. Uređaj možete sigurno koristiti svaki dan.</p></div></li>
      <li><span class="wsl__st">02</span><div><strong>Je li mikrostruja sigurna?</strong><p>To je prirodan, neinvazivan tretman koji se desetljećima koristi u klinikama i spa centrima i ne oštećuje kožu. Nježni valovi energije „treniraju" mišić ispod kože – kao vježbanje: samo jačate svoju osnovu.</p></div></li>
      <li><span class="wsl__st">03</span><div><strong>Mogu li ga koristiti ako imam botoks?</strong><p>Botoks opušta mišić, a mikrostruja ga potiče i vježba – zato ih nije idealno kombinirati, jer bi uređaj mogao ranije „probuditi" mišić i skratiti učinak botoksa. Pričekajte da učinak botoksa oslabi (najmanje 3 mjeseca od tretmana).</p></div></li>
      <li><span class="wsl__st">04</span><div><strong>A ako imam filere?</strong><p>Nema kontraindikacija – uređaj može čak dodatno istaknuti rezultate i definirati konturu lica. Samo pričekajte 15 dana nakon tretmana filerima prije nego što započnete rutinu.</p></div></li>
      <li><span class="wsl__st">05</span><div><strong>Boli li mikrostruja?</strong><p>Ne! Nije bol, nego trening. Osjetit ćete blago peckanje i male kontrakcije mišića – to je normalno i znak da „teretana" radi. Ako ste početnica, počnite na razini 1 i nanesite tanak sloj gela.</p></div></li>
      <li><span class="wsl__st">06</span><div><strong>Kako mogu platiti?</strong><p>Plaćate pouzećem, kad paket stigne. Dostava je besplatna za narudžbe iznad 70 €.</p></div></li>
    </ol>
  </div>
</div></section>

<section class="wsl__s npg-s"><?php $npg = array( 'izdelek' => 'NORIKS SkinLift', 'barva' => '#f36c8f' ); include __DIR__ . '/noriks-pogoji.php'; ?></section>
</div>
<style>
.wsl{color:#2b1d22;font-family:inherit}
.wsl__s{padding:72px 0;background:#fff}.wsl__s.wsl__s--bg{background:#fdf0f3}
.wsl__v{width:100%;max-width:1240px;margin:0 auto;padding:0 24px;box-sizing:border-box}
.wsl__c{text-align:center}
.wsl__kicker{font-size:13px;letter-spacing:1.8px;text-transform:uppercase;color:#d24a72;margin:0 0 8px;font-weight:700}
.wsl__kicker::before{content:"";display:inline-block;width:22px;height:2px;background:#f36c8f;vertical-align:middle;margin:-2px 10px 0 0;border-radius:2px}
.wsl__h2{font-size:clamp(24px,3vw,34px);font-weight:800;line-height:1.2;margin:0 0 16px;color:#2b1d22}.wsl__h2 em{font-style:italic;color:#d24a72}
.wsl__p{font-size:15.5px;line-height:1.65;color:#55434a;margin:0 0 14px}
.wsl__zak{font-size:16.5px;font-weight:800;line-height:1.5;margin:24px 0 0}.wsl__zak em{color:#d24a72}
.wsl__dva{display:grid;grid-template-columns:1fr 1fr;gap:56px;align-items:center}
.wsl__dva--rev>div:first-child{order:2}
.wsl__media{position:relative;border-radius:16px;overflow:hidden;box-shadow:0 14px 34px rgba(43,29,34,.16);aspect-ratio:4/5;background:#f6e4e9}
.wsl__media img{width:100%;height:100%;object-fit:cover;display:block}
.wsl__znacka{position:absolute;left:16px;top:16px;background:#f36c8f;color:#fff;font-size:12px;font-weight:800;letter-spacing:1px;text-transform:uppercase;padding:7px 12px;border-radius:20px;box-shadow:0 4px 12px rgba(0,0,0,.15)}
.wsl__br{display:grid;grid-template-columns:repeat(3,1fr);gap:16px;margin:22px 0 8px}
.wsl__bk{background:#fff;border-radius:16px;padding:22px 16px;text-align:center;box-shadow:0 8px 22px rgba(210,74,114,.10)}
.wsl__bk strong{display:block;font-size:clamp(30px,3.4vw,42px);font-weight:800;color:#d24a72;line-height:1.1;margin-bottom:6px}
.wsl__bk span{font-size:14px;line-height:1.45;color:#55434a}
.wsl__op{font-size:12.5px;color:#8a767e;margin:12px 0 0;font-style:italic}
.wsl__tocke{list-style:none;margin:6px 0 0;padding:0;display:flex;flex-direction:column;gap:18px}
.wsl__tocke li{display:flex;gap:16px;align-items:flex-start;list-style:none}
.wsl__st{flex:0 0 42px;height:42px;border-radius:50%;background:#f36c8f;color:#fff;font-weight:800;display:flex;align-items:center;justify-content:center;font-size:14px}
.wsl__tocke strong{display:block;font-size:16.5px;margin-top:2px}.wsl__tocke p{margin:4px 0 0;font-size:15px;line-height:1.6;color:#55434a}
.wsl__kg{display:grid;grid-template-columns:repeat(4,1fr);gap:22px;margin-top:26px;align-items:stretch}
.wsl__kk{background:#fff;border-radius:16px;overflow:hidden;box-shadow:0 8px 24px rgba(210,74,114,.10);display:flex;flex-direction:column;transition:transform .2s,box-shadow .2s}
.wsl__kk:hover,.wsl__vk:hover,.wsl__ik4:hover{transform:translateY(-3px);box-shadow:0 14px 30px rgba(210,74,114,.18)}
.wsl__km{position:relative;aspect-ratio:1/1}.wsl__km img{width:100%;height:100%;object-fit:cover;display:block}
.wsl__kn{position:absolute;left:16px;bottom:-21px;width:42px;height:42px;border-radius:50%;background:#f36c8f;color:#fff;font-weight:800;font-size:17px;display:flex;align-items:center;justify-content:center;box-shadow:0 6px 16px rgba(210,74,114,.3)}
.wsl__kt{padding:32px 22px 24px}.wsl__ko{display:block;font-size:12px;letter-spacing:1.4px;text-transform:uppercase;color:#d24a72;font-weight:700;margin-bottom:4px}
.wsl__kt strong{display:block;font-size:17px;margin:0 0 8px}.wsl__kt p{margin:0;font-size:15px;line-height:1.6;color:#55434a}
.wsl__ocj{display:inline-flex;align-items:center;gap:8px;background:#fdf0f3;border-radius:30px;padding:8px 18px;font-size:14.5px}
.wsl__ocj strong{font-size:22px}.wsl__zv{color:#e0a33c;letter-spacing:2px;font-size:15px}
.wsl__karw{position:relative;margin-top:26px}
.wsl__kar{display:grid;grid-auto-flow:column;grid-auto-columns:calc((100% - 66px)/4);gap:22px;overflow-x:auto;scroll-snap-type:x mandatory;scrollbar-width:none;padding:4px 2px 14px}
.wsl__kar::-webkit-scrollbar{display:none}
.wsl__vk{margin:0;scroll-snap-align:start;background:#fff;border-radius:16px;overflow:hidden;box-shadow:0 8px 22px rgba(210,74,114,.12);display:flex;flex-direction:column;transition:transform .2s,box-shadow .2s}
.wsl__vm{aspect-ratio:9/16;background:#2b1d22}.wsl__vm video{width:100%;height:100%;object-fit:cover;display:block}
.wsl__vk figcaption{padding:16px 18px 20px;flex:1;display:flex;flex-direction:column}
.wsl__vk figcaption p{margin:6px 0 12px;font-size:15px;line-height:1.55;color:#3d2c33;flex:1}
.wsl__vk figcaption strong{font-size:14.5px;color:#d24a72}
.wsl__pus{position:absolute;top:38%;transform:translateY(-50%);width:44px;height:44px;border-radius:50%;border:0;background:#fff;box-shadow:0 4px 14px rgba(0,0,0,.18);font-size:24px;line-height:44px;cursor:pointer;z-index:2;color:#d24a72;padding:0}
.wsl__pus--l{left:-14px}.wsl__pus--d{right:-14px}
.wsl__al{list-style:none;margin:8px 0 0;padding:0;display:flex;flex-direction:column;gap:16px}
.wsl__al li{display:flex;gap:16px;align-items:flex-start;list-style:none;background:#fff;border-radius:14px;padding:16px 18px;box-shadow:0 6px 18px rgba(210,74,114,.08)}
.wsl__al strong{display:block;font-size:16.5px}.wsl__al p{margin:3px 0 0;font-size:15px;line-height:1.55;color:#55434a}
.wsl__ik{flex:0 0 48px;width:48px;height:48px;border-radius:50%;background:#fde2ea;color:#d24a72;display:flex;align-items:center;justify-content:center}
.wsl__ig{display:grid;grid-template-columns:repeat(4,1fr);gap:22px;margin-top:26px;align-items:stretch}
.wsl__ik4{margin:0;background:#fff;border-radius:16px;overflow:hidden;box-shadow:0 8px 24px rgba(210,74,114,.10);display:flex;flex-direction:column;transition:transform .2s,box-shadow .2s}
.wsl__im{aspect-ratio:4/5}.wsl__im img{width:100%;height:100%;object-fit:cover;display:block}
.wsl__ik4 figcaption{padding:0 20px 22px;display:flex;flex-direction:column;align-items:flex-start}
.wsl__ik4 figcaption .wsl__ik{margin-top:-24px;box-shadow:0 6px 16px rgba(210,74,114,.18);border:3px solid #fff}
.wsl__ik4 figcaption p{margin:12px 0 0;font-size:15px;line-height:1.6;color:#3d2c33;font-weight:600}
@media (max-width:1024px){.wsl__kg,.wsl__ig{grid-template-columns:repeat(2,1fr)}.wsl__kar{grid-auto-columns:calc((100% - 44px)/3)}}
@media (max-width:767px){
  .wsl__s{padding:48px 0}.wsl__v{padding:0 16px}
  .wsl__dva{grid-template-columns:1fr;gap:26px}.wsl__dva--rev>div:first-child{order:0}
  .wsl__br{grid-template-columns:1fr 1fr 1fr;gap:10px}.wsl__bk{padding:16px 8px}.wsl__bk strong{font-size:24px;white-space:nowrap}.wsl__bk span{font-size:12.5px}
  .wsl__kg{grid-template-columns:1fr;gap:18px}
  .wsl__ig{grid-template-columns:1fr 1fr;gap:12px}.wsl__ik4 figcaption{padding:0 12px 16px}.wsl__ik4 figcaption p{font-size:13.5px}
  .wsl__kar{grid-auto-columns:80%;gap:14px}.wsl__pus--l{left:4px}.wsl__pus--d{right:4px}
}
</style>
<script>
(function(){document.querySelectorAll('.wsl__karw').forEach(function(w){var k=w.querySelector('.wsl__kar');
  w.querySelectorAll('.wsl__pus').forEach(function(b){b.addEventListener('click',function(){var x=k.firstElementChild;var d=x?x.getBoundingClientRect().width+22:300;
    k.scrollBy({left:b.classList.contains('wsl__pus--l')?-d:d,behavior:'smooth'});});});});})();
</script>
