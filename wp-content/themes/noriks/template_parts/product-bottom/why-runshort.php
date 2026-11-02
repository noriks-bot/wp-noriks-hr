<?php
/**
 * NORIKS RunShort — muske kratke hlace za trcanje 2-u-1: why sekcije po strukturi originala
 * (runnractive.com/products/2-in-1-running-short).
 *
 * STRUKTURA ORIGINALA:
   1. promo pasica Halloween Sale (45 % popusta) - IZPUSCENO (promo pasica z akcijo, prepovedano)
   2. opis: Built for speed, distance, and everything in between - 3 odstavki (2-u-1, prozracen vanjski sloj, kompresijske unutarnje hlacice, pojas z vezico) - pri nas slika levo (detalj 2-u-1 z glavne slike originala) + besedilo desno
   3. Highlights: seznam 6 lastnosti (2-u-1 konstrukcija, brzo susenje, rastezanje u 4 smjera, elasticni pojas z vezico, manje trljanja, logotip) - pri nas mreza 6 kartic z ikonami (3 v vrsti)
   4. Specs: seznam specifikacij (materijal, boja, velicine, kroj, konstrukcija, njega) - pri nas slika desno (trkac spreda z originala) + tabela specifikacij levo
   5. harmonika Built for Runners Designed for Movement: zgodba znamke + Care Instructions (pranje 30 °C, susenje na zraku, bez izbjeljivaca, bez susilice, bez kemijskog ciscenja) - pri nas slika levo (trkac straga z originala) + besedilo in seznam njege desno
   6. harmonika Shipping & Returns - IZPUSCENO (tuji pogoji dostave), namesto tega NORIKS pogoji na koncu
   7. dodatni izdelki (upsell 3 izdelki) - IZPUSCENO (tuji izdelki)
   8. Why Runners Trust: naslov + 3 odstavki + 3 kartice z ikonami v krogu (Zero-Distraction Fit, Real Storage Solutions, Fair Pricing) na sivi podlagi - pri nas naslov + besedilo + 3 kartice z ikonami (brez tuje stevilke tekacev, nase 120.000 kupcev)
   9. karusel Complete Your Run (drugi izdelki) - IZPUSCENO (tuji izdelki)
   10. FAQ (6 vprasanj) - pri nas v FAQ spodaj (auto_reviews/FAQ_HR_runshort.php)
   11. mnenja kupcev (Loox) s fotografijami tekacev - pri nas naslov + 3 kartice s fotografijami kupcev z originala (3 v vrsti) + ocena 4,8
   12. trak 4 ikon (Inspired by Movement, No Excuses Guarantee, Worldwide Shipping, Safe Payment) - pri nas skupna sekcija NORIKS pogoji
 * BARVA ORIGINALA: #d4f53c (limeta zelena - gumb Add to cart in krogi ikon na originalu); svetel ton za --bg #f7fbe4, temnejsi akcent za besedilo #5b6e00
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
$wrs_img = get_template_directory_uri() . '/img/runshort/';
$wrs_svg = '<svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">';
$wrs_zv  = '<span class="wrs__zv" aria-label="5 od 5">★★★★★</span>';
?>
<div class="wrs">

<section class="wrs__s wrs__s--bg"><div class="wrs__v wrs__dva">
  <div class="wrs__media"><img src="<?php echo esc_url( $wrs_img . 'noriks-runshort-04-detalj-pojas.webp' ); ?>" alt="NORIKS RunShort kratke hlače za trčanje 2-u-1 – lagani vanjski sloj i crne kompresijske hlačice ispod" loading="eager" decoding="async"><span class="wrs__znacka">2-u-1</span></div>
  <div>
    <div class="wrs__kicker">Kratke hlače za trčanje</div>
    <h2 class="wrs__h2">Napravljene za brzinu, udaljenost – <em>i sve između</em></h2>
    <p class="wrs__p">NORIKS RunShort spajaju lagan pokret i ugrađenu potporu u jednim kratkim hlačama za trčanje – napravljenima za naporne treninge, duga trčanja i dan utrke.</p>
    <p class="wrs__p">Prozračan vanjski sloj slobodno prati svaki korak, a ugrađene kompresijske hlačice ispod smanjuju trljanje i drže kroj sigurno na mjestu. Elastični pojas s unutarnjom vezicom drži sve čvrsto i onda kada ubrzate.</p>
    <p class="wrs__p">Čist, jednostavan izgled s diskretnim NORIKS logotipom – osnovni komad opreme sagrađen oko jedne ideje: nastaviti dalje.</p>
    <p class="wrs__zak">Jedne hlače za trening, dugo trčanje i utrku.</p>
  </div>
</div></section>

<section class="wrs__s"><div class="wrs__v">
  <div class="wrs__kicker wrs__c">Glavne prednosti</div>
  <h2 class="wrs__h2 wrs__c">Sve što trkaču treba – <em>u jednim hlačama</em></h2>
  <p class="wrs__p wrs__c">Šest stvari zbog kojih ih obučete prije svakog treninga.</p>
  <div class="wrs__grid">
    <div class="wrs__k"><span class="wrs__ki"><?php echo $wrs_svg; ?><rect x="4" y="4" width="16" height="9" rx="2"/><path d="M6 13v6h5v-6"/><path d="M13 13v6h5v-6"/></svg></span><h3>Konstrukcija 2-u-1</h3><p>Lagane vanjske kratke hlače i potporne unutarnje hlačice u jednom komadu.</p></div>
    <div class="wrs__k"><span class="wrs__ki"><?php echo $wrs_svg; ?><path d="M12 3c3 3.5 5 6.2 5 9a5 5 0 0 1-10 0c0-2.8 2-5.5 5-9z"/><path d="M9.5 13.5a2.5 2.5 0 0 0 2.5 2.5"/></svg></span><h3>Brzo se suše</h3><p>Tkanina koja odvodi znoj i brzo se suši – i na najtoplijem treningu.</p></div>
    <div class="wrs__k"><span class="wrs__ki"><?php echo $wrs_svg; ?><path d="M12 3v18"/><path d="M3 12h18"/><path d="M9 6l3-3 3 3"/><path d="M9 18l3 3 3-3"/><path d="M6 9l-3 3 3 3"/><path d="M18 9l3 3-3 3"/></svg></span><h3>Rastezanje u 4 smjera</h3><p>Materijal se rasteže u svim smjerovima i ne ograničava pokret.</p></div>
    <div class="wrs__k"><span class="wrs__ki"><?php echo $wrs_svg; ?><path d="M3 8h18"/><path d="M3 12h18"/><path d="M12 12c-1.5 2-3.5 3-5 3"/><path d="M12 12c1.5 2 3.5 3 5 3"/></svg></span><h3>Pojas s vezicom</h3><p>Elastični pojas s unutarnjom vezicom – podesite ga točno po sebi.</p></div>
    <div class="wrs__k"><span class="wrs__ki"><?php echo $wrs_svg; ?><path d="M12 3l7 3v5c0 4.5-3 8-7 10-4-2-7-5.5-7-10V6z"/><path d="M9 12l2 2 4-4"/></svg></span><h3>Manje trljanja</h3><p>Unutarnje hlačice smanjuju trljanje i tijekom dužih treninga.</p></div>
    <div class="wrs__k"><span class="wrs__ki"><?php echo $wrs_svg; ?><path d="M4 7h16"/><path d="M4 12h10"/><path d="M4 17h7"/><circle cx="18" cy="16" r="3"/></svg></span><h3>Diskretan logotip</h3><p>NORIKS logotip otisnut toplinskim prijenosom – bez šivanih etiketa koje žuljaju.</p></div>
  </div>
  <p class="wrs__zak">Lagane izvana, potporne iznutra.</p>
</div></section>

<section class="wrs__s wrs__s--bg"><div class="wrs__v wrs__dva wrs__dva--rev">
  <div class="wrs__media"><img src="<?php echo esc_url( $wrs_img . 'noriks-runshort-02-trkac-spreda.webp' ); ?>" alt="Muškarac u bijeloj majici i crnim NORIKS RunShort kratkim hlačama za trčanje" loading="eager" decoding="async"></div>
  <div>
    <div class="wrs__kicker">Specifikacije</div>
    <h2 class="wrs__h2">Što točno <em>dobivate</em></h2>
    <p class="wrs__p">Sve podatke o materijalu, kroju i njezi na jednom mjestu – kako biste znali što kupujete prije nego što kliknete.</p>
    <div class="wrs__tabwrap"><table class="wrs__spec">
      <tr><th>Materijal</th><td>85 % najlon / 15 % elastan</td></tr>
      <tr><th>Boja</th><td>Crna</td></tr>
      <tr><th>Veličine</th><td>S, M, L, XL, 2XL</td></tr>
      <tr><th>Kroj</th><td>Sportski kroj za trčanje</td></tr>
      <tr><th>Konstrukcija</th><td>2-u-1: vanjske kratke hlače + kompresijske unutarnje hlačice</td></tr>
      <tr><th>Njega</th><td>Prati u hladnoj vodi, sušiti na zraku, ne glačati izravno preko otiska</td></tr>
    </table></div>
    <p class="wrs__zak">Jedna boja, pet veličina, nula kompromisa.</p>
  </div>
</div></section>

<section class="wrs__s"><div class="wrs__v wrs__dva">
  <div class="wrs__media"><img src="<?php echo esc_url( $wrs_img . 'noriks-runshort-03-trkac-straga.webp' ); ?>" alt="Pogled straga na NORIKS RunShort kratke hlače s kompresijskim hlačicama ispod" loading="eager" decoding="async"></div>
  <div>
    <div class="wrs__kicker">Napravljene za trkače</div>
    <h2 class="wrs__h2">Stvorene <em>za pokret</em></h2>
    <p class="wrs__p">Sportsku odjeću radimo za ljude koji ne staju – ni u 5 ujutro, ni na zadnjem ponavljanju, ni kad pada kiša. Svaki komad izrađen je od izdržljivih materijala koji traju dulje od vaših ciljeva i spremni su za sljedeći trening.</p>
    <p class="wrs__p">Bez prečaca u tkanini i bez prečaca u kroju. Cilj je jednostavan: da trčanje bude lako, a jedino o čemu razmišljate bude kako biti bolji nego jučer.</p>
    <h3 class="wrs__h3">Upute za njegu</h3>
    <ul class="wrs__njega">
      <li class="wrs__njega--da">Pranje u perilici na 30 °C, nježni program, naopako</li>
      <li class="wrs__njega--da">Sušenje samo na zraku – objesite ili položite</li>
      <li class="wrs__njega--ne">Bez izbjeljivača</li>
      <li class="wrs__njega--ne">Bez sušilice</li>
      <li class="wrs__njega--ne">Bez kemijskog čišćenja</li>
    </ul>
    <p class="wrs__p wrs__p--mali">Operite ih nakon svakog treninga da sačuvaju sposobnost odvođenja znoja. Izbjegavajte omekšivače – začepljuju vlakna koja vas drže suhima.</p>
  </div>
</div></section>

<section class="wrs__s wrs__s--bg"><div class="wrs__v">
  <div class="wrs__kicker wrs__c">Zašto trkači biraju NORIKS</div>
  <h2 class="wrs__h2 wrs__c">Oprema koja vam <em>ne smeta</em> dok trčite</h2>
  <div class="wrs__uvod">
    <p class="wrs__p">Svaki komad napravljen je s jednim ciljem: da trčanje bude što udobnije i bez ometanja.</p>
    <p class="wrs__p">Bez pretjeranih cijena i bez napuhanih „tehnologija” – samo pouzdana oprema koja rješava stvarne probleme trkača: vrućinu, znoj, poskakivanje, trljanje i spremanje sitnica.</p>
  </div>
  <div class="wrs__grid wrs__grid--3">
    <div class="wrs__k wrs__k--bijela"><span class="wrs__ki"><?php echo $wrs_svg; ?><circle cx="12" cy="12" r="8.5"/><path d="M8.5 12.5l2.5 2.5 4.5-5"/></svg></span><h3>Pristajanje bez ometanja</h3><p>Sve je napravljeno da ostane na mjestu – bez poskakivanja, bez trljanja, bez iritacije.</p></div>
    <div class="wrs__k wrs__k--bijela"><span class="wrs__ki"><?php echo $wrs_svg; ?><rect x="5" y="7" width="14" height="13" rx="2"/><path d="M9 7V5a3 3 0 0 1 6 0v2"/><path d="M5 12h14"/></svg></span><h3>Džepovi koji rade</h3><p>Mjesto za mobitel, ključeve i gelove – da ih ne nosite u ruci tijekom trčanja.</p></div>
    <div class="wrs__k wrs__k--bijela"><span class="wrs__ki"><?php echo $wrs_svg; ?><path d="M12 3v18"/><path d="M16.5 7.5c-.8-1.3-2.4-2-4.5-2-2.5 0-4 1.2-4 3s1.5 2.6 4 3.2 4 1.4 4 3.3-1.6 3-4 3c-2.2 0-3.9-.8-4.6-2.2"/></svg></span><h3>Poštena cijena</h3><p>Vrhunska izvedba bez dodatka koji plaćate samo za ime velike marke.</p></div>
  </div>
  <p class="wrs__zak">Zato nam vjeruje više od 120.000 kupaca.</p>
</div></section>

<section class="wrs__s"><div class="wrs__v">
  <div class="wrs__kicker wrs__c">Recenzije kupaca</div>
  <h2 class="wrs__h2 wrs__c">Isprobane na utrkama – <em>od 10 km do 100 milja</em></h2>
  <p class="wrs__p wrs__c"><span class="wrs__ocj"><strong>4,8</strong> <?php echo $wrs_zv; ?> na temelju 1.081 recenzije</span></p>
  <div class="wrs__grid wrs__grid--3">
    <div class="wrs__k wrs__k--foto"><div class="wrs__km"><img src="<?php echo esc_url( $wrs_img . 'noriks-runshort-kupac-utrka.webp' ); ?>" alt="Trkač u crnim NORIKS RunShort kratkim hlačama na cestovnoj utrci" loading="eager" decoding="async"></div><div class="wrs__kt"><?php echo $wrs_zv; ?><p>„Uzeo sam XL jer sam krupnije građe i savršeno pristaju. Trčao sam u njima cestovnu utrku i oduševljen sam – gel mi je cijelu utrku ostao na mjestu!”</p><span class="wrs__ime">Petar M.</span></div></div>
    <div class="wrs__k wrs__k--foto"><div class="wrs__km"><img src="<?php echo esc_url( $wrs_img . 'noriks-runshort-kupac-jezero.webp' ); ?>" alt="Kupac u NORIKS RunShort kratkim hlačama odmara se uz jezero nakon trčanja" loading="eager" decoding="async"></div><div class="wrs__kt"><?php echo $wrs_zv; ?><p>„Sjede baš dobro. Materijal je jako ugodan i brzo se suši – upravo ono što sam tražio za ljetne kilometre.”</p><span class="wrs__ime">Luka S.</span></div></div>
    <div class="wrs__k wrs__k--foto"><div class="wrs__km"><img src="<?php echo esc_url( $wrs_img . 'noriks-runshort-kupac-cilj.webp' ); ?>" alt="Trkač u NORIKS RunShort kratkim hlačama na cilju noćne ultra utrke" loading="eager" decoding="async"></div><div class="wrs__kt"><?php echo $wrs_zv; ?><p>„Nosio sam ih na svojoj prvoj utrci od 100 milja. Bile su vrlo udobne cijelim putem i ništa me nije žuljalo.”</p><span class="wrs__ime">Grgur V.</span></div></div>
  </div>
  <p class="wrs__zak">Od prvih 5 km do maratona – iste hlače.</p>
</div></section>

<section class="wrs__s wrs__s--bg npg-s"><?php $npg = array( 'izdelek' => 'NORIKS RunShort', 'barva' => '#d4f53c' ); include __DIR__ . '/noriks-pogoji.php'; ?></section>
</div>
<style>
.wrs{color:#1d2016;font-family:inherit}
.wrs__s{padding:72px 0;background:#fff}.wrs__s.wrs__s--bg{background:#f7fbe4}
.wrs__v{width:100%;max-width:1240px;margin:0 auto;padding:0 24px;box-sizing:border-box}
.wrs__c{text-align:center}
.wrs__kicker{font-size:12.5px;letter-spacing:1.8px;text-transform:uppercase;color:#5b6e00;margin:0 0 8px;font-weight:700}
.wrs__kicker::before{content:"";display:inline-block;width:22px;height:2px;background:#a8c41a;vertical-align:middle;margin:-2px 10px 0 0;border-radius:2px}
.wrs__h2{font-size:clamp(24px,3vw,34px);font-weight:800;line-height:1.2;margin:0 0 18px;color:#1d2016}.wrs__h2 em{font-style:italic;color:#5b6e00}
.wrs__h3{font-size:17px;font-weight:800;margin:18px 0 10px;color:#1d2016}
.wrs__p{font-size:15.5px;line-height:1.65;color:#373b2e;margin:0 0 14px}
.wrs__p--mali{font-size:14px;color:#585c4e;margin-top:6px}
.wrs__zak{font-size:16px;font-weight:800;line-height:1.5;margin:18px 0 0}
.wrs__v>.wrs__zak{text-align:center}
.wrs__dva .wrs__zak{border-left:3px solid #a8c41a;padding-left:14px}
.wrs__uvod{display:grid;grid-template-columns:1fr 1fr;gap:28px;margin:4px 0 0}
/* slika + besedilo (cik-cak) */
.wrs__dva{display:grid;grid-template-columns:1fr 1fr;gap:56px;align-items:center}.wrs__dva--rev>div:first-child{order:2}
.wrs__media{position:relative;border-radius:16px;overflow:hidden;box-shadow:0 14px 34px rgba(40,50,10,.16);aspect-ratio:4/5;background:#eef0e8}
.wrs__media img{width:100%;height:100%;object-fit:cover;display:block}
.wrs__znacka{position:absolute;left:16px;top:16px;background:#d4f53c;color:#1d2016;font-size:12px;font-weight:800;letter-spacing:1px;text-transform:uppercase;padding:7px 12px;border-radius:20px;box-shadow:0 4px 12px rgba(0,0,0,.15)}
.wrs__zv{color:#d4a52b;letter-spacing:2px;font-size:15px;display:inline-block}
/* kartice */
.wrs__grid{display:grid;grid-template-columns:repeat(3,1fr);gap:22px;margin-top:26px;align-items:stretch}
.wrs__k{background:#fff;border-radius:16px;padding:28px 26px 24px;text-align:center;box-shadow:0 8px 24px rgba(40,50,10,.09);transition:transform .2s,box-shadow .2s;display:flex;flex-direction:column;align-items:center}
.wrs__s:not(.wrs__s--bg) .wrs__k{background:#fbfdf3}
.wrs__s .wrs__k.wrs__k--bijela{background:#fff}
.wrs__k:hover{transform:translateY(-3px);box-shadow:0 14px 30px rgba(40,50,10,.15)}
.wrs__ki{width:56px;height:56px;border-radius:50%;background:#eef8c4;color:#4d5d00;border:1px solid #c9e05a;display:flex;align-items:center;justify-content:center;margin:0 auto 12px}
.wrs__k h3{font-size:17px;font-weight:800;margin:4px 0 8px;color:#1d2016;line-height:1.3}
.wrs__k p{font-size:15px;line-height:1.55;color:#454938;margin:0}
/* recenzije s fotografijo */
.wrs__k--foto{padding:0;overflow:hidden;text-align:left;align-items:stretch;background:#fff!important}
.wrs__km img{width:100%;aspect-ratio:4/5;object-fit:cover;display:block}
.wrs__kt{padding:18px 22px 22px;display:flex;flex-direction:column;flex:1}
.wrs__kt p{margin:8px 0 12px;flex:1;font-size:15.5px}
.wrs__ime{font-weight:700;font-size:14px;color:#5b6e00}
.wrs__ocj{display:inline-flex;align-items:center;gap:8px;background:#f7fbe4;border-radius:30px;padding:8px 18px;font-size:14.5px}
.wrs__ocj strong{font-size:22px;color:#5b6e00}
/* specifikacije */
.wrs__tabwrap{width:100%;overflow-x:auto;border-radius:16px;box-shadow:0 8px 24px rgba(40,50,10,.09);background:#fff}
.wrs__spec{width:100%;border-collapse:collapse;font-size:14.5px}
.wrs__spec th,.wrs__spec td{padding:12px 16px;text-align:left;border-bottom:1px solid #edf0e2;line-height:1.45}
.wrs__spec th{width:36%;font-weight:700;color:#5b6e00;background:#fafcf0}
.wrs__spec td{color:#373b2e}.wrs__spec tr:last-child th,.wrs__spec tr:last-child td{border-bottom:0}
/* njega */
.wrs__njega{list-style:none;margin:0 0 6px;padding:0;display:grid;grid-template-columns:1fr 1fr;gap:10px}
.wrs__njega li{list-style:none;position:relative;padding:10px 12px 10px 44px;background:#fafcf0;border-radius:12px;font-size:14.5px;line-height:1.45}
.wrs__njega li::before{position:absolute;left:12px;top:50%;transform:translateY(-50%);width:22px;height:22px;border-radius:50%;display:flex;align-items:center;justify-content:center;font-size:12px;font-weight:800}
.wrs__njega--da::before{content:"\2713";background:#d4f53c;color:#1d2016}
.wrs__njega--ne::before{content:"\2715";background:#ececec;color:#8a8a8a}
@media (max-width:991px){.wrs__grid{grid-template-columns:1fr 1fr}}
@media (max-width:767px){
  .wrs__s{padding:48px 0}.wrs__v{padding:0 16px}
  .wrs__dva{grid-template-columns:1fr;gap:26px}.wrs__dva--rev>div:first-child{order:0}
  .wrs__uvod{grid-template-columns:1fr;gap:0}
  .wrs__grid{grid-template-columns:1fr 1fr;gap:12px}
  .wrs__k{padding:20px 14px 18px}.wrs__k h3{font-size:15.5px}.wrs__k p{font-size:14px}
  .wrs__ki{width:48px;height:48px}
  .wrs__grid--3{display:flex;overflow-x:auto;scroll-snap-type:x mandatory;gap:14px;padding-bottom:8px;-webkit-overflow-scrolling:touch}
  .wrs__grid--3>.wrs__k{flex:0 0 84%;scroll-snap-align:center}
  .wrs__njega{grid-template-columns:1fr}
  .wrs__spec th{width:40%}.wrs__spec th,.wrs__spec td{padding:10px 12px;font-size:14px}
}
</style>
