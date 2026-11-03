<?php
/**
 * NORIKS Supreme Ionic XL — susilo s difuzorom za valovitu, kovrcavu i afro kosu: why sekcije po strukturi originala
 * (bellissimahairtools.com/products/diffon-supreme-usca; link v TOVARNI -aunz vrne 404).
 *
 * (opis pod gumbom, od vrha navzdol)
 * STRUKTURA ORIGINALA:
   1. "A Closer Look" - 4 okrogle video zgodbe kupk s kratkimi napisi (Define Curls, Defined Bouncy ...) - pri nas 4 kartice v vrsti (video z originala z NORIKS namesto tuje znamke + 3 slike)
   2. "Benefits of the ..." - 3 kartice v vrsti (slika zgoraj, naslov + besedilo spodaj) na svetli podlagi: XL zdjela, ionska tehnologija, digitalna kontrola temperature
   3. "Our Secret's Out!" - ocena + mnenja kupcev (widget) - pri nas ocena NORIKS + 4 kartice mnenj (prevedena z originala)
   4. primerjalna tabela (tip, duljina, gustoca, stanje kose + lastnosti) - pri nas tabela za koga je izdelek + specifikacije z originala (brez tujih modelov), slika levo
   5. "Curly Hair Dryer Questions" - naslov levo, harmonika vprasanj desno - pri nas najpogostejsa vprasanja levo, slika desno
   6. 3 ikone pogojev trgovine (dostava, 90 dni, 2 leti garancije) - pri nas skupna sekcija NORIKS pogoji
 * BARVA ORIGINALA: #a33e7e (sliva/magenta gumbov in naslovov originala); svetel ton za --bg #f8eef4
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
$wsu_t   = get_template_directory_uri();
$wsu_i   = function ( $f ) use ( $wsu_t ) { return esc_url( $wsu_t . '/img/supreme/' . $f ); };
$wsu_svg = '<svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">';
?>
<div class="wsu">

<section class="wsu__s wsu__s--bg"><div class="wsu__v">
  <div class="wsu__kicker wsu__c">Pogled izbliza</div>
  <h2 class="wsu__h2 wsu__c">Kovrče koje <em>izgledaju kao iz salona</em> – kod kuće</h2>
  <p class="wsu__p wsu__c wsu__uv">Sušilo i difuzor u jednom aparatu, napravljen samo za valovitu, kovrčavu i afro kosu. Bez nastavka koji treba montirati, skidati ili koji pada usred sušenja.</p>
  <div class="wsu__zg">
    <figure class="wsu__zk"><div class="wsu__zm"><img src="<?php echo $wsu_i( 'noriks-supreme-02-prije-poslije.webp' ); ?>" alt="Kovrčava kosa prije i poslije sušenja s NORIKS Supreme" loading="eager" decoding="async"><span class="wsu__znacka">Prije / poslije</span></div><figcaption><strong>Definirane kovrče</strong><span>bez frizza, s jasnim uvojcima</span></figcaption></figure>
    <figure class="wsu__zk"><div class="wsu__zm"><video src="<?php echo esc_url( $wsu_t . '/img/supreme/noriks-supreme-video-susenje.mp4?v=s0311b' ); ?>" poster="<?php echo esc_url( $wsu_t . '/img/supreme/noriks-supreme-video-susenje.jpg?v=s0311b' ); ?>" autoplay muted loop playsinline webkit-playsinline preload="metadata" aria-label="Sušenje valovite kose s NORIKS Supreme sušilom s difuzorom"></video><span class="wsu__znacka">Video</span></div><figcaption><strong>Kovrče s volumenom</strong><span>difuzor nosi kosu od vrhova do korijena</span></figcaption></figure>
    <figure class="wsu__zk"><div class="wsu__zm"><img src="<?php echo $wsu_i( 'noriks-supreme-05-definirane-kovrce.webp' ); ?>" alt="Žena s gustim kovrčama drži NORIKS Supreme sušilo" loading="eager" decoding="async"></div><figcaption><strong>Kovrče koje odskaču</strong><span>mekane, sjajne i elastične</span></figcaption></figure>
    <figure class="wsu__zk"><div class="wsu__zm"><img src="<?php echo $wsu_i( 'noriks-supreme-04-u-ruci.webp' ); ?>" alt="NORIKS Supreme sušilo s XL difuzorom u ruci" loading="eager" decoding="async"></div><figcaption><strong>Sve u jednoj ruci</strong><span>sušilo i XL difuzor kao jedan aparat</span></figcaption></figure>
  </div>
</div></section>

<section class="wsu__s"><div class="wsu__v">
  <div class="wsu__kicker wsu__c">Prednosti</div>
  <h2 class="wsu__h2 wsu__c">Zašto NORIKS Supreme Ionic XL <em>čuva vaše kovrče</em></h2>
  <p class="wsu__p wsu__c wsu__uv">Tri tehnologije rade zajedno: velika zdjela difuzora, ioni protiv frizza i digitalni nadzor topline. Rezultat su brže osušene, mekše i sjajnije kovrče.</p>
  <div class="wsu__pg">
    <div class="wsu__pk"><div class="wsu__pm"><img src="<?php echo $wsu_i( 'noriks-supreme-xl-zdjela.webp' ); ?>" alt="XL zdjela difuzora NORIKS Supreme s prstima za kosu" loading="eager" decoding="async"><span class="wsu__ik"><?php echo $wsu_svg; ?><path d="M4 10h16l-2 7a3 3 0 0 1-3 2H9a3 3 0 0 1-3-2z"/><path d="M8 6v4M12 4v6M16 6v4"/></svg></span></div><div class="wsu__pt"><strong>XL zdjela difuzora</strong><p>Brže sušenje duge i guste valovite kose, kovrča i afro uvojaka – u zdjelu stane više kose odjednom. Nježna infracrvena toplina keramičkog grijača s arganovim uljem daje kosi vlagu i sjaj i pritom čuva njeno zdravlje.</p></div></div>
    <div class="wsu__pk"><div class="wsu__pm"><img src="<?php echo $wsu_i( 'noriks-supreme-ionska-tehnologija.webp' ); ?>" alt="Presjek NORIKS Supreme – dvostruka ionska tehnologija" loading="eager" decoding="async"><span class="wsu__ik"><?php echo $wsu_svg; ?><circle cx="8" cy="8" r="3"/><circle cx="16" cy="16" r="3"/><path d="M7 8h2M15 16h2M16 15v2"/></svg></span></div><div class="wsu__pt"><strong>Ionska njega</strong><p>Dodatak negativnih i pozitivnih iona smanjuje frizz i statiku te kosi daje mekoću i sjaj. Dvostruka ionska tehnologija radi tijekom cijelog sušenja.</p></div></div>
    <div class="wsu__pk"><div class="wsu__pm"><img src="<?php echo $wsu_i( 'noriks-supreme-digitalna-temperatura.webp' ); ?>" alt="Upravljačka ploča NORIKS Supreme s tipkama za temperaturu, brzinu i hladni zrak" loading="eager" decoding="async"><span class="wsu__ik"><?php echo $wsu_svg; ?><path d="M10 14.5V5a2 2 0 0 1 4 0v9.5a4 4 0 1 1-4 0z"/><path d="M12 11v6"/></svg></span></div><div class="wsu__pt"><strong>Digitalna kontrola temperature</strong><p>Sustav mjeri temperaturu 50 puta u sekundi i sprječava oštećenja od prevelike topline. Uz to imate 3 razine topline za sušenje po vašoj mjeri.</p></div></div>
  </div>
  <p class="wsu__zak wsu__c">Keramika + arganovo ulje + ioni – <em>kovrče ostaju svoje</em>, samo mekše i sjajnije.</p>
</div></section>

<section class="wsu__s wsu__s--bg"><div class="wsu__v">
  <div class="wsu__kicker wsu__c">Naša tajna je otkrivena</div>
  <h2 class="wsu__h2 wsu__c">Pogledajte što kupci kažu o <em>NORIKS Supreme</em></h2>
  <p class="wsu__c"><span class="wsu__ocj"><strong>4,8</strong> <span class="wsu__zv">★★★★★</span> na temelju 1.081 recenzije</span></p>
  <div class="wsu__mn">
    <div class="wsu__mk"><span class="wsu__nav">“</span><strong class="wsu__mn-n">Promijenilo mi je život</strong><p>Nisam bila sigurna hoću li toliko dati za sušilo, ali promijenilo mi je život. Kovrče su puno definiranije i odskaču, a frizza nema. Imam tanku, ali gustu i poroznu kosu – sad doma dobijem kovrče kakve sam prije imala samo nakon frizera.</p><div class="wsu__mh"><span class="wsu__av">F</span><div><strong>Filipa C.</strong><span>provjereni kupac</span></div><span class="wsu__zv">★★★★★</span></div></div>
    <div class="wsu__mk"><span class="wsu__nav">“</span><strong class="wsu__mn-n">Najbolje sušilo do sada</strong><p>Ovo je najbolje sušilo koje sam ikad imala! Kovrče su mekane i odskaču, a vrijeme sušenja se prepolovilo. Kupite ga – nećete se razočarati.</p><div class="wsu__mh"><span class="wsu__av">B</span><div><strong>Bojana B.</strong><span>provjereni kupac</span></div><span class="wsu__zv">★★★★★</span></div></div>
    <div class="wsu__mk"><span class="wsu__nav">“</span><strong class="wsu__mn-n">Kovrče drže od pranja do pranja</strong><p>Fantastičan difuzor! Moju dugu kovrčavu kosu osuši jako brzo, a kovrče se stvarno drže od jednog pranja do drugog.</p><div class="wsu__mh"><span class="wsu__av">A</span><div><strong>Ana F.</strong><span>provjereni kupac</span></div><span class="wsu__zv">★★★★★</span></div></div>
    <div class="wsu__mk"><span class="wsu__nav">“</span><strong class="wsu__mn-n">Više volumena, manje frizza</strong><p>Napravio je ogromnu razliku na mojim prirodnim kovrčama. Jako sam impresionirana – kosa ima više volumena i manje frizza.</p><div class="wsu__mh"><span class="wsu__av">M</span><div><strong>Mirela B.</strong><span>provjereni kupac</span></div><span class="wsu__zv">★★★★★</span></div></div>
  </div>
</div></section>

<section class="wsu__s"><div class="wsu__v wsu__dva">
  <div class="wsu__media"><img src="<?php echo $wsu_i( 'noriks-supreme-07-proizvod.webp' ); ?>" alt="NORIKS Supreme Ionic XL sušilo s integriranim XL difuzorom" loading="eager" decoding="async"><span class="wsu__znacka wsu__znacka--m">XL difuzor</span></div>
  <div>
    <div class="wsu__kicker">Za koga je</div>
    <h2 class="wsu__h2">Za dugu, gustu i <em>zahtjevnu kosu</em></h2>
    <p class="wsu__p">NORIKS Supreme Ionic XL posebno odgovara dužim, gušćim i na frizz sklonim valovima, kovrčama i afro uvojcima. Možete ga koristiti i na kraćoj ili tanjoj kosi – samo počnite s nižom toplinom i protokom zraka.</p>
    <div class="wsu__tw"><table class="wsu__tab">
      <thead><tr><th>Pogodno za</th><th>NORIKS Supreme Ionic XL</th></tr></thead>
      <tbody>
        <tr><td>Tip kose</td><td>valovita, kovrčava i afro</td></tr>
        <tr><td>Duljina</td><td>kratka, srednja i duga</td></tr>
        <tr><td>Gustoća</td><td>tanka, srednja i gusta</td></tr>
        <tr><td>Stanje</td><td>oštećena i zdrava</td></tr>
        <tr><td>Postavke</td><td>3 topline + 2 brzine + tipka za hladni zrak</td></tr>
        <tr><td>Snaga</td><td>700 W</td></tr>
        <tr><td>Dimenzije</td><td>15 × 19 × 15 cm</td></tr>
        <tr><td>Težina</td><td>0,69 kg</td></tr>
        <tr><td>Duljina kabela</td><td>2,5 m</td></tr>
      </tbody>
    </table></div>
  </div>
</div></section>

<section class="wsu__s wsu__s--bg"><div class="wsu__v wsu__dva wsu__dva--rev">
  <div class="wsu__media"><img src="<?php echo $wsu_i( 'noriks-supreme-01-susilo-difuzor.webp' ); ?>" alt="NORIKS Supreme Ionic XL – sušilo i difuzor u jednom" loading="eager" decoding="async"></div>
  <div>
    <div class="wsu__kicker">Pitanja o sušilu za kovrče</div>
    <h2 class="wsu__h2">Što ga razlikuje od <em>običnog sušila</em>?</h2>
    <ol class="wsu__tocke">
      <li><span class="wsu__st">01</span><div><strong>Sušilo i difuzor u jednom</strong><p>Nije obično sušilo s odvojenim nastavkom. Integrirana XL zdjela, kontrolirani protok zraka, keramika s arganovim uljem, ioni i digitalna kontrola temperature zajedno suše kovrče i čuvaju njihov prirodni oblik.</p></div></li>
      <li><span class="wsu__st">02</span><div><strong>Koje postavke odabrati?</strong><p>Tanke i osjetljive kovrče: niža toplina i protok. Srednje guste: srednja toplina. Guste kovrče: više topline i zraka na početku sušenja. Završite tipkom za hladni zrak.</p></div></li>
      <li><span class="wsu__st">03</span><div><strong>Obojena, trajna ili suha kosa?</strong><p>Da – počnite s nižom toplinom i protokom ili tipkom za hladni zrak i prilagodite prema tome kako kosa reagira.</p></div></li>
      <li><span class="wsu__st">04</span><div><strong>Kako se koristi?</strong><p>Kosu nakon pranja umotajte u ručnik od mikrovlakana, raščešljajte, nanesite kremu za kovrče i sušite prvo vrhove, a zatim korijen za volumen.</p></div></li>
    </ol>
  </div>
</div></section>

<section class="wsu__s npg-s"><?php $npg = array( 'izdelek' => 'NORIKS Supreme Ionic XL', 'barva' => '#a33e7e' ); include __DIR__ . '/noriks-pogoji.php'; ?></section>
</div>
<style>
.wsu{color:#2a1a24;font-family:inherit}
.wsu__s{padding:72px 0;background:#fff}.wsu__s.wsu__s--bg{background:#f8eef4}
.wsu__v{width:100%;max-width:1240px;margin:0 auto;padding:0 24px;box-sizing:border-box}
.wsu__c{text-align:center}
.wsu__uv{max-width:none}
.wsu__kicker{font-size:13px;letter-spacing:1.8px;text-transform:uppercase;color:#a33e7e;margin:0 0 8px;font-weight:700}
.wsu__kicker::before{content:"";display:inline-block;width:22px;height:2px;background:#a33e7e;vertical-align:middle;margin:-2px 10px 0 0;border-radius:2px}
.wsu__h2{font-size:clamp(24px,3vw,34px);font-weight:800;line-height:1.2;margin:0 0 16px;color:#2a1a24}.wsu__h2 em{font-style:italic;color:#a33e7e}
.wsu__p{font-size:15.5px;line-height:1.65;color:#4d3a46;margin:0 0 14px}
.wsu__zak{font-size:16.5px;font-weight:800;line-height:1.5;margin:28px 0 0}.wsu__zak em{color:#a33e7e}
.wsu__zg{display:grid;grid-template-columns:repeat(4,1fr);gap:20px;margin:26px 0 0}
.wsu__zk{margin:0;background:#fff;border-radius:16px;overflow:hidden;box-shadow:0 8px 22px rgba(120,40,90,.10);transition:transform .2s,box-shadow .2s;display:flex;flex-direction:column}
.wsu__zk:hover,.wsu__pk:hover,.wsu__mk:hover{transform:translateY(-3px);box-shadow:0 14px 30px rgba(120,40,90,.16)}
.wsu__zm{position:relative;aspect-ratio:4/5}.wsu__zm img,.wsu__zm video{width:100%;height:100%;object-fit:cover;display:block}
.wsu__zk figcaption{padding:16px 18px 18px}.wsu__zk figcaption strong{display:block;font-size:16px;margin-bottom:4px}.wsu__zk figcaption span{font-size:14px;color:#6b5763;line-height:1.5}
.wsu__znacka{position:absolute;left:14px;top:14px;background:#fff;color:#2a1a24;font-size:12px;font-weight:800;letter-spacing:1px;text-transform:uppercase;padding:6px 11px;border-radius:20px;box-shadow:0 4px 12px rgba(0,0,0,.15)}
.wsu__znacka--m{background:#a33e7e;color:#fff}
.wsu__pg{display:grid;grid-template-columns:repeat(3,1fr);gap:24px;margin-top:26px;align-items:stretch}
.wsu__pk{background:#fff;border-radius:16px;overflow:hidden;box-shadow:0 8px 24px rgba(120,40,90,.10);display:flex;flex-direction:column;transition:transform .2s,box-shadow .2s}
.wsu__pm{position:relative;aspect-ratio:4/3;background:#1a1410}.wsu__pm img{width:100%;height:100%;object-fit:cover;display:block}
.wsu__ik{width:52px;height:52px;border-radius:50%;background:#f3dceb;color:#8a2f69;display:flex;align-items:center;justify-content:center}
.wsu__pm .wsu__ik{position:absolute;left:22px;bottom:-26px;box-shadow:0 6px 16px rgba(120,40,90,.18)}
.wsu__pt{padding:40px 24px 26px}.wsu__pt strong{display:block;font-size:17.5px;margin:0 0 8px}.wsu__pt p{margin:0;font-size:15px;line-height:1.6;color:#4d3a46}
.wsu__ocj{display:inline-flex;align-items:center;gap:8px;background:#fff;border-radius:30px;padding:8px 18px;font-size:14.5px;box-shadow:0 4px 14px rgba(120,40,90,.08)}
.wsu__ocj strong{font-size:22px}.wsu__zv{color:#e0a33c;letter-spacing:2px;font-size:15px}
.wsu__mn{display:grid;grid-template-columns:repeat(2,1fr);gap:24px;margin-top:26px;align-items:stretch}
.wsu__mk{background:#fff;border-radius:16px;padding:28px 26px 22px;box-shadow:0 8px 24px rgba(120,40,90,.10);display:flex;flex-direction:column;transition:transform .2s,box-shadow .2s}
.wsu__nav{font-size:56px;line-height:.6;color:#e2bcd4;font-weight:800;font-family:Georgia,serif}
.wsu__mn-n{font-size:17px;margin-top:10px}
.wsu__mk p{margin:8px 0 18px;font-size:16px;line-height:1.6;color:#3a2a34;flex:1}
.wsu__mh{display:flex;align-items:center;gap:12px}
.wsu__mh strong{display:block;font-size:15px;color:#2a1a24}.wsu__mh span{font-size:13px;color:#7a6672}.wsu__mh .wsu__zv{margin-left:auto;font-size:13px;color:#e0a33c}
.wsu__mh .wsu__av{width:44px;height:44px;border-radius:50%;background:#a33e7e;color:#fff;font-weight:800;font-size:17px;display:flex;align-items:center;justify-content:center;flex:0 0 44px}
.wsu__dva{display:grid;grid-template-columns:1fr 1fr;gap:56px;align-items:center}
.wsu__dva--rev>div:first-child{order:2}
.wsu__media{position:relative;border-radius:16px;overflow:hidden;box-shadow:0 14px 34px rgba(42,26,36,.16);aspect-ratio:4/5;background:#000}
.wsu__media img{width:100%;height:100%;object-fit:cover;display:block}
.wsu__tw{overflow-x:auto;margin-top:8px;border-radius:14px;box-shadow:0 8px 22px rgba(120,40,90,.08)}
.wsu__tab{width:100%;border-collapse:collapse;background:#fff;font-size:15px}
.wsu__tab th,.wsu__tab td{padding:12px 16px;border-bottom:1px solid #f1e3ec;text-align:left}
.wsu__tab th{background:#a33e7e!important;color:#fff!important;font-weight:700}
.wsu__tab td:first-child{font-weight:700;color:#2a1a24;width:38%}.wsu__tab tr:last-child td{border-bottom:0}
.wsu__tocke{list-style:none;margin:6px 0 0;padding:0;display:flex;flex-direction:column;gap:18px}
.wsu__tocke li{display:flex;gap:16px;align-items:flex-start;list-style:none}
.wsu__st{flex:0 0 42px;height:42px;border-radius:50%;background:#a33e7e;color:#fff;font-weight:800;display:flex;align-items:center;justify-content:center;font-size:14px}
.wsu__tocke strong{display:block;font-size:16.5px;margin-top:2px}.wsu__tocke p{margin:4px 0 0;font-size:15px;line-height:1.6;color:#4d3a46}
@media (max-width:1024px){.wsu__zg{grid-template-columns:repeat(2,1fr)}}
@media (max-width:767px){
  .wsu__s{padding:48px 0}.wsu__v{padding:0 16px}
  .wsu__zg{gap:12px}.wsu__zk figcaption{padding:12px}.wsu__zk figcaption strong{font-size:14.5px}.wsu__zk figcaption span{font-size:13px}
  .wsu__pg{grid-template-columns:1fr;gap:18px}
  .wsu__mn{grid-template-columns:1fr;gap:14px}
  .wsu__dva{grid-template-columns:1fr;gap:26px}.wsu__dva--rev>div:first-child{order:0}
  .wsu__tab{font-size:14px}.wsu__tab th,.wsu__tab td{padding:10px 12px}
}
</style>
