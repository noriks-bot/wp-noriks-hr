<?php
/**
 * NORIKS KneeSleeve — kompresijski rukavi za koljena i noge: why sekcije po strukturi originala (reabtec.com/products/knitec-compression-supports-for-knees-and-legs).
 *
 * STRUKTURA ORIGINALA:
   1. trak logotipov medijev (Runner's World, Men's Health) - pri nas trak 4 prednosti z ikonami (tujih medijev in znamk ne kazemo)
   2. Our Athletes Trust: karusel fotografij sportnikov z imeni in opisi - pri nas mreza 3 fotografij sportnikov (3 v vrsti) z opisom sporta; imena tujih sportnikov, klubov in znamk izpuscena, logotipi na oblacilih odstranjeni
   3. video levo, besedilo desno: Regain control of your performance and mobility - pri nas video z originala (kader brez tuje znamke) + besedilo
   4. besedilo levo, animacija desno: Relieve pain and protect your knees - pri nas animacija z originala (mp4) + besedilo o oporu in stabilnosti (brez zdravstvenih trditev)
   5. promo trak BUY 2 GET 1 FREE - IZPUSCENO (tekoci promo trak, ponudbe ne nudimo)
   6. slika levo, besedilo desno: Reducing inflammation and swelling - pri nas slika z originala + besedilo o udobju kompresije (brez zdravstvenih trditev)
   7. besedilo levo, slika desno: One Solution. Multiple Conditions (seznam stanj) - pri nas slika z lokaliziranim seznamom aktivnosti (diagnoze zamenjane z aktivnostmi) + besedilo, nosenje v paru
   8. mnenja Trustpilot (kartice z mnenji) - pri nas 3 kartice mnenj z zvezdicami; Trustpilot in tuja ocena izpuscena, zdravstvene trditve izpuscene
   9. mreza 3 slik + besedilo: KniTec V2 is here - Lighter. Cooler. Stronger. - pri nas naslov + besedilo, pod tem mreza 3 slik (lokalizirane infografike)
   10. slika (tablica velikosti) + besedilo: New sizing - pri nas slika tablice (HR, samo EU cm) + tabela velikosti
   11. Beware of imitations + Over 46,000 athletes (samo besedilo) - IZPUSCENO: tuja znamka in tuje stevilo kupcev (nase stevilo v NORIKS pogojih)
   12. Customer Reviews s fotografijami - pri nas 3 kartice mnenj s fotografijami kupcev
   13. FAQ - pri nas FAQ v sekciji mnenj (Informacije o proizvodu)
   14. Featured collections, blog, Need help - IZPUSCENO (drugi izdelki tuje trgovine)
   15. Instagram galerija: Real people. Real results. - pri nas karusel 5 fotografij (napisi na majicah lokalizirani v NORIKS)
 * BARVA ORIGINALA: #d8dc1e (neonsko rumena barva znamke na slikah in vodnih zigih originala, crni izdelki); svetel ton za --bg #f6f7dc, akcent #5c5e0c
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
$wsk_img = get_template_directory_uri() . '/img/kneesleeve/';
$wsk_svg = '<svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">';
?>
<div class="wsknee">

<section class="wsknee__s wsknee__s--bg wsknee__traka"><div class="wsknee__v wsknee__tmreza">
  <div class="wsknee__tk"><span class="wsknee__ti"><?php echo $wsk_svg; ?><path d="M12 3c3 3.5 5 6.3 5 9a5 5 0 0 1-10 0c0-2.7 2-5.5 5-9z"/></svg></span><div class="wsknee__tt"><strong>Lagani i prozračni</strong><span>Pletivo koje diše i na dugim treninzima</span></div></div>
  <div class="wsknee__tk"><span class="wsknee__ti"><?php echo $wsk_svg; ?><rect x="4" y="5" width="16" height="5" rx="2.5"/><path d="M7 7.5h.01M10 7.5h.01M13 7.5h.01M16 7.5h.01"/><path d="M8 10v9M16 10v9"/></svg></span><div class="wsknee__tt"><strong>Silikon protiv klizanja</strong><span>Ostaju na mjestu i na dugim stazama</span></div></div>
  <div class="wsknee__tk"><span class="wsknee__ti"><?php echo $wsk_svg; ?><circle cx="12" cy="12" r="8.5"/><circle cx="12" cy="12" r="4.5"/><circle cx="12" cy="12" r="1"/></svg></span><div class="wsknee__tt"><strong>Ciljana kompresija</strong><span>Obuhvaća koljeno, list i bedro</span></div></div>
  <div class="wsknee__tk"><span class="wsknee__ti"><?php echo $wsk_svg; ?><circle cx="14" cy="4.5" r="2"/><path d="M8 21l3-6 3 2v4M6 12l3-3 4 1 3 3 3 1"/></svg></span><div class="wsknee__tt"><strong>Za svaki sport</strong><span>Trčanje, teretana, nogomet, Hyrox</span></div></div>
</div></section>

<section class="wsknee__s"><div class="wsknee__v">
  <div class="wsknee__kicker wsknee__c">Nose ih oni koji treniraju</div>
  <h2 class="wsknee__h2 wsknee__c">Sportaši im vjeruju – <em>na stazi, terenu i u teretani</em></h2>
  <p class="wsknee__p wsknee__c">Treneri, trkači i natjecatelji nose ih tamo gdje koljena i noge najviše rade: na atletskoj stazi, u teretani i na natjecanjima. Kompresija prati svaki pokret, a rukavi ostaju na mjestu od prvog do zadnjeg ponavljanja.</p>
  <div class="wsknee__grid wsknee__g3">
    <div class="wsknee__k"><div class="wsknee__km"><img src="<?php echo esc_url( $wsk_img . 'noriks-kneesleeve-sportas-1.webp' ); ?>" alt="Sportaš na atletskoj stazi s kompresijskim rukavima na nogama" loading="eager" decoding="async"></div><div class="wsknee__kt"><span class="wsknee__oz">Atletika</span><strong>Trener sportske izvedbe</strong><p>Na stazi svaki dan: brzina, snaga i pravilan pokret – uz kompresiju koja ne smeta.</p></div></div>
    <div class="wsknee__k"><div class="wsknee__km"><img src="<?php echo esc_url( $wsk_img . 'noriks-kneesleeve-sportasica-2.webp' ); ?>" alt="Sportašica odmara na atletskoj stazi u kompresijskim rukavima" loading="eager" decoding="async"></div><div class="wsknee__kt"><span class="wsknee__oz">Trčanje</span><strong>Trkačica na duge staze</strong><p>Kilometri na stazi i cesti – rukavi se ne spuštaju i ne žuljaju ni na dugim treninzima.</p></div></div>
    <div class="wsknee__k"><div class="wsknee__km"><img src="<?php echo esc_url( $wsk_img . 'noriks-kneesleeve-sportas-3.webp' ); ?>" alt="Natjecatelj Hyrox s vrećom na ramenima i kompresijskim rukavom na koljenu" loading="eager" decoding="async"></div><div class="wsknee__kt"><span class="wsknee__oz">Hyrox</span><strong>Natjecatelj i trener</strong><p>Iskoraci, čučnjevi i nošenje tereta – stabilan osjećaj u koljenu kroz cijelu utrku.</p></div></div>
  </div>
  <p class="wsknee__zak">Od prvog treninga do natjecanja – rukavi koji rade s vama.</p>
</div></section>

<section class="wsknee__s wsknee__s--bg"><div class="wsknee__v wsknee__dva">
  <div class="wsknee__media"><video src="<?php echo esc_url( get_template_directory_uri() . '/img/kneesleeve/noriks-kneesleeve-pokret-video.mp4' ); ?>" poster="<?php echo esc_url( get_template_directory_uri() . '/img/kneesleeve/noriks-kneesleeve-pokret-video.jpg' ); ?>" autoplay muted loop playsinline webkit-playsinline preload="auto"></video><span class="wsknee__znacka">Nova generacija</span></div>
  <div>
    <div class="wsknee__kicker">Pokretljivost i izvedba</div>
    <h2 class="wsknee__h2">Vratite kontrolu nad <em>svojim pokretom</em></h2>
    <p class="wsknee__p">Više <em>udobnosti</em>, više <em>potpore</em> i bolji <em>osjećaj u pokretu</em> – to je obećanje novog modela. Kad vas koljena opterećuju nakon dugog dana ili teškog treninga, svaki korak može biti izazov.</p>
    <p class="wsknee__p">Zato su rukavi NORIKS KneeSleeve napravljeni s ciljanim ojačanjem oko koljena i duž cijele noge – da se krećete slobodnije, trenirate sigurnije i živite bez ograničenja. Kompresijsko pletivo obuhvaća koljeno, list i bedro i prati svaki pokret.</p>
    <ul class="wsknee__kv">
      <li><em>Ciljana kompresija</em> – potpora oko koljena i duž noge</li>
      <li><em>Pletivo koje prati pokret</em> – bez ograničavanja</li>
      <li><em>Silikonski rub</em> – rukav ostaje na mjestu</li>
    </ul>
    <p class="wsknee__zak">Krećite se slobodnije – korak po korak.</p>
  </div>
</div></section>

<section class="wsknee__s"><div class="wsknee__v wsknee__dva wsknee__dva--rev">
  <div class="wsknee__media"><video src="<?php echo esc_url( get_template_directory_uri() . '/img/kneesleeve/noriks-kneesleeve-koljeno-video.mp4' ); ?>" poster="<?php echo esc_url( get_template_directory_uri() . '/img/kneesleeve/noriks-kneesleeve-koljeno-video.jpg' ); ?>" autoplay muted loop playsinline webkit-playsinline preload="auto"></video></div>
  <div>
    <div class="wsknee__kicker">Potpora koljenu</div>
    <h2 class="wsknee__h2">Stabilnost i zaštita <em>za vaša koljena</em></h2>
    <p class="wsknee__p">Rukavi obavijaju koljena poput druge kože i daju precizan, ravnomjeran oslonac oko zgloba. Ne stežu na jednom mjestu, nego raspoređuju pritisak po cijeloj površini – pa ih jedva osjetite.</p>
    <p class="wsknee__p">Prate vas tijekom dugog ili intenzivnog napora i daju <em>veću stabilnost</em> i <em>trajnu udobnost</em> – od zagrijavanja do zadnjeg kilometra. Mnogi ih nose i na dugim šetnjama ili kad cijeli dan provode na nogama.</p>
    <ul class="wsknee__kv">
      <li><em>Druga koža</em> – tanko pletivo od samo 2 mm</li>
      <li><em>Ravnomjeran oslonac</em> – bez točaka pritiska</li>
      <li><em>Za dug napor</em> – udobni i nakon više sati</li>
    </ul>
    <p class="wsknee__zak">Više sigurnosti u svakom koraku.</p>
  </div>
</div></section>

<section class="wsknee__s wsknee__s--bg"><div class="wsknee__v wsknee__dva">
  <div class="wsknee__media"><img src="<?php echo esc_url( $wsk_img . 'noriks-kneesleeve-kompresija.webp' ); ?>" alt="Kompresijski rukavi obuhvaćaju koljeno i list" loading="eager" decoding="async"></div>
  <div>
    <div class="wsknee__kicker">Tijekom i nakon treninga</div>
    <h2 class="wsknee__h2">Ugodna kompresija <em>i lakše noge</em></h2>
    <p class="wsknee__p">Rukavi su napravljeni da ih nosite tijekom treninga i nakon njega. Ravnomjerna kompresija obuhvaća mišiće bedra i lista, pa noge manje „lebde" u pokretu, a umor se lakše podnosi.</p>
    <p class="wsknee__p">Zato ih mnogi ostave na nogama i nakon sportske aktivnosti – za ugodniji osjećaj dok se odmarate, putujete kući ili radite istezanje. Pletivo diše, pa ni nakon dužeg nošenja ne postaje vruće i ljepljivo.</p>
    <ul class="wsknee__kv">
      <li><em>Za vrijeme treninga</em> – osjećaj stabilnosti i kontrole</li>
      <li><em>Nakon treninga</em> – ugodna kompresija dok se odmarate</li>
      <li><em>Prozračno pletivo</em> – suho i ugodno</li>
    </ul>
    <p class="wsknee__zak">Od zagrijavanja do istezanja – u istom paru.</p>
  </div>
</div></section>

<section class="wsknee__s"><div class="wsknee__v wsknee__dva wsknee__dva--rev">
  <div class="wsknee__media"><img src="<?php echo esc_url( $wsk_img . 'noriks-kneesleeve-za-sve-aktivnosti.webp' ); ?>" alt="Kompresijski rukavi za trčanje, teretanu, nogomet, planinarenje i dugo stajanje" loading="eager" decoding="async"></div>
  <div>
    <div class="wsknee__kicker">Jedan proizvod, puno situacija</div>
    <h2 class="wsknee__h2">Jedno rješenje <em>za sve što radite</em></h2>
    <p class="wsknee__p">Od trčanja i teretane do nogometa, planinarenja ili posla na kojem cijeli dan stojite – kompresijski rukavi prilagođavaju se vašim potrebama i daju pouzdanu udobnost, stabilnost i zaštitu u svakom koraku.</p>
    <p class="wsknee__p">Za ravnomjeran oslonac preporučujemo nošenje u <em>paru</em> – jer kad se jedno koljeno muči, drugo preuzima teret. Zato rukavi dolaze kao par, za lijevu i desnu nogu.</p>
    <div class="wsknee__red3">
      <div><span class="wsknee__pi"><?php echo $wsk_svg; ?><circle cx="14" cy="4.5" r="2"/><path d="M8 21l3-6 3 2v4M6 12l3-3 4 1 3 3 3 1"/></svg></span><strong>Trčanje</strong><span>ceste i staze</span></div>
      <div><span class="wsknee__pi"><?php echo $wsk_svg; ?><path d="M4 9v6M7 7v10M17 7v10M20 9v6M7 12h10"/></svg></span><strong>Teretana</strong><span>čučnjevi, iskoraci</span></div>
      <div><span class="wsknee__pi"><?php echo $wsk_svg; ?><path d="M3 20l6-10 4 6 3-4 5 8z"/></svg></span><strong>Planine</strong><span>uspon i spust</span></div>
    </div>
    <p class="wsknee__zak">Nosite ih u paru – za ravnotežu obje noge.</p>
  </div>
</div></section>

<section class="wsknee__s wsknee__s--bg"><div class="wsknee__v">
  <div class="wsknee__kicker wsknee__c">Iskustva kupaca</div>
  <h2 class="wsknee__h2 wsknee__c">Što kažu oni koji <em>s njima treniraju</em></h2>
  <div class="wsknee__grid wsknee__g3">
    <div class="wsknee__k wsknee__k--tekst"><div class="wsknee__kt"><span class="wsknee__zv">★★★★★</span><strong>Opet treniram bez straha</strong><p>Godinama sam se mučio s koljenima, a ovi rukavi su napravili pravu razliku. Opet mogu trenirati bez stalnog straha od svakog pokreta.</p><span class="wsknee__ime"><i class="wsknee__av" aria-hidden="true">D</i>Dario K.</span></div></div>
    <div class="wsknee__k wsknee__k--tekst"><div class="wsknee__kt"><span class="wsknee__zv">★★★★★</span><strong>Velika razlika na treningu</strong><p>Čim sam ih počeo nositi na treninzima, primijetio sam veliku razliku – više stabilnosti i puno više samopouzdanja u pokretu.</p><span class="wsknee__ime"><i class="wsknee__av" aria-hidden="true">G</i>Goran P.</span></div></div>
    <div class="wsknee__k wsknee__k--tekst"><div class="wsknee__kt"><span class="wsknee__zv">★★★★★</span><strong>Bez trljanja i žuljanja</strong><p>Kupio sam ih pred ultramaraton i stigli su dan prije. Prešao sam više od 100.000 koraka bez ikakvog trljanja i žuljanja. Preporuka svakom tko trči duge staze.</p><span class="wsknee__ime"><i class="wsknee__av" aria-hidden="true">N</i>Nikola A.</span></div></div>
  </div>
  <p class="wsknee__zak">Stabilnost, udobnost i samopouzdanje – u svakom treningu.</p>
</div></section>

<section class="wsknee__s"><div class="wsknee__v">
  <div class="wsknee__kicker wsknee__c">Nova generacija</div>
  <h2 class="wsknee__h2 wsknee__c">Lakši. Prozračniji. <em>Jači.</em></h2>
  <div class="wsknee__dvastolpca">
    <p class="wsknee__p">Nova generacija kompresijskih rukava napravljena je da pruži optimalnu potporu i prati vašu izvedbu dugoročno. Zahvaljujući elastičnosti i <em>ciljanoj kompresiji</em> prilagođavaju se vašim pokretima – za fluidnu pokretljivost i najveću udobnost.</p>
    <p class="wsknee__p">Njihov <em>lagan i otporan</em> dizajn odgovara zahtjevima sportaša i sportašica, a pritom čuva <em>slobodu pokreta</em> tijekom vježbanja. U usporedbi sa starijim modelom pletivo je tanje, glatkije i bez debelih šavova.</p>
  </div>
  <div class="wsknee__grid wsknee__g3 wsknee__galerija3">
    <div class="wsknee__gm"><img src="<?php echo esc_url( $wsk_img . 'noriks-kneesleeve-trcanje-park.webp' ); ?>" alt="Trkač u kompresijskim rukavima na mostu" loading="eager" decoding="async"></div>
    <div class="wsknee__gm"><img src="<?php echo esc_url( $wsk_img . 'noriks-kneesleeve-v2-detalji.webp' ); ?>" alt="Detalji rukava: silikon protiv klizanja, potpora zglobu, kompresija lista" loading="eager" decoding="async"></div>
    <div class="wsknee__gm"><img src="<?php echo esc_url( $wsk_img . 'noriks-kneesleeve-usporedba.webp' ); ?>" alt="Usporedba nove i stare verzije rukava" loading="eager" decoding="async"></div>
  </div>
  <p class="wsknee__zak">Tanje pletivo, ista potpora – i potpuna sloboda pokreta.</p>
</div></section>

<section class="wsknee__s wsknee__s--bg"><div class="wsknee__v wsknee__dva">
  <div class="wsknee__media wsknee__media--cela"><img src="<?php echo esc_url( $wsk_img . 'noriks-kneesleeve-tablica-velicina.webp' ); ?>" alt="Tablica veličina prema opsegu bedra" loading="eager" decoding="async"></div>
  <div>
    <div class="wsknee__kicker">Veličine</div>
    <h2 class="wsknee__h2">Nove veličine za <em>još bolje pristajanje</em></h2>
    <p class="wsknee__p">Tablica veličina prilagođena je širem rasponu građe tijela – da rukavi pristaju čvrsto, a ne stežu. Za pravu veličinu izmjerite opseg bedra na najširem dijelu i pogledajte tablicu.</p>
    <div class="wsknee__tw"><table class="wsknee__tab"><thead><tr><th>Veličina</th><th>Opseg bedra</th></tr></thead><tbody>
      <tr><td>S - 35 do 45 cm</td><td>35 do 45 cm</td></tr>
      <tr><td>M - 46 do 50 cm</td><td>46 do 50 cm</td></tr>
      <tr><td>L - 51 do 57 cm</td><td>51 do 57 cm</td></tr>
      <tr><td>XL - 58 do 63 cm</td><td>58 do 63 cm</td></tr>
      <tr><td>2XL - 64 do 69 cm</td><td>64 do 69 cm</td></tr>
      <tr><td>3XL - 70 do 75 cm</td><td>70 do 75 cm</td></tr>
    </tbody></table></div>
    <p class="wsknee__zak">Između dvije veličine? Uzmite manju.</p>
  </div>
</div></section>

<section class="wsknee__s"><div class="wsknee__v">
  <div class="wsknee__kicker wsknee__c">Recenzije kupaca</div>
  <h2 class="wsknee__h2 wsknee__c">Fotografije kupaca – <em>u stvarnom treningu</em></h2>
  <p class="wsknee__p wsknee__c">Kupci ih nose na travi, na podlozi za vježbanje i na cesti – evo kako izgledaju na njima.</p>
  <div class="wsknee__grid wsknee__g3">
    <div class="wsknee__k"><div class="wsknee__km"><img src="<?php echo esc_url( $wsk_img . 'noriks-kneesleeve-kupac-1.webp' ); ?>" alt="Kupac nosi crni kompresijski rukav na travi" loading="eager" decoding="async"></div><div class="wsknee__kt"><span class="wsknee__zv">★★★★★</span><p>Zasad odlično – vrlo su udobni i mogu ih nositi cijeli dan.</p><span class="wsknee__ime"><i class="wsknee__av" aria-hidden="true">S</i>Snježana D.</span></div></div>
    <div class="wsknee__k"><div class="wsknee__km"><img src="<?php echo esc_url( $wsk_img . 'noriks-kneesleeve-kupac-2.webp' ); ?>" alt="Kupac u kompresijskim rukavima na podlozi za vježbanje" loading="eager" decoding="async"></div><div class="wsknee__kt"><span class="wsknee__zv">★★★★★</span><p>Jako mi se sviđa potpora koju daju – trčim s više samopouzdanja. Lakše ih je navući od kompresijskih tajica.</p><span class="wsknee__ime"><i class="wsknee__av" aria-hidden="true">S</i>Sanja D.</span></div></div>
    <div class="wsknee__k"><div class="wsknee__km"><img src="<?php echo esc_url( $wsk_img . 'noriks-kneesleeve-kupac-3.webp' ); ?>" alt="Kupac u kompresijskim rukavima i tenisicama na cesti" loading="eager" decoding="async"></div><div class="wsknee__kt"><span class="wsknee__zv">★★★★★</span><p>Odlična kvaliteta! Nosio sam ih na dugim trčanjima i u teretani – odlična potpora koljenima. Toplo preporučujem.</p><span class="wsknee__ime"><i class="wsknee__av" aria-hidden="true">M</i>Mihael L.</span></div></div>
  </div>
  <p class="wsknee__zak">Pristaju, ostaju na mjestu i izgledaju dobro.</p>
</div></section>

<section class="wsknee__s wsknee__s--bg"><div class="wsknee__v">
  <div class="wsknee__kicker wsknee__c">Stvarni ljudi, stvarni treninzi</div>
  <h2 class="wsknee__h2 wsknee__c">Pogledajte ih <em>u pokretu</em></h2>
  <p class="wsknee__p wsknee__c">Trčanje, istezanje, skokovi i duge šetnje – rukavi koji mijenjaju način na koji se krećete, korak po korak.</p>
  <div class="wsknee__kar">
    <div class="wsknee__km2"><img src="<?php echo esc_url( $wsk_img . 'noriks-kneesleeve-ugc-1.webp' ); ?>" alt="Trkač u kompresijskim rukavima na mostu" loading="eager" decoding="async"></div>
    <div class="wsknee__km2"><img src="<?php echo esc_url( $wsk_img . 'noriks-kneesleeve-ugc-2.webp' ); ?>" alt="Sportaš navlači kompresijski rukav" loading="eager" decoding="async"></div>
    <div class="wsknee__km2"><img src="<?php echo esc_url( $wsk_img . 'noriks-kneesleeve-ugc-3.webp' ); ?>" alt="Trčanje u parku s kompresijskim rukavima" loading="eager" decoding="async"></div>
    <div class="wsknee__km2"><img src="<?php echo esc_url( $wsk_img . 'noriks-kneesleeve-ugc-4.webp' ); ?>" alt="Skok na stazi u kompresijskim rukavima" loading="eager" decoding="async"></div>
    <div class="wsknee__km2"><img src="<?php echo esc_url( $wsk_img . 'noriks-kneesleeve-ugc-5.webp' ); ?>" alt="Sportaš u kompresijskim rukavima pri zalasku sunca" loading="eager" decoding="async"></div>
  </div>
  <p class="wsknee__zak">Isprobajte i osjetite razliku u pokretu.</p>
</div></section>

<section class="wsknee__s npg-s"><?php $npg = array( 'izdelek' => 'NORIKS KneeSleeve', 'barva' => '#d8dc1e' ); include __DIR__ . '/noriks-pogoji.php'; ?></section>
</div>
<style>
.wsknee{color:#1c1c1c;font-family:inherit}
.wsknee__s{padding:72px 0;background:#fff}.wsknee__s.wsknee__s--bg{background:#f6f7dc}
.wsknee__v{width:100%;max-width:1240px;margin:0 auto;padding:0 24px;box-sizing:border-box}
.wsknee__c{text-align:center}
.wsknee__kicker{font-size:12.5px;letter-spacing:1.8px;text-transform:uppercase;color:#5c5e0c;margin:0 0 8px;font-weight:700}
.wsknee__kicker::before{content:"";display:inline-block;width:22px;height:2px;background:#d8dc1e;vertical-align:middle;margin:-2px 10px 0 0;border-radius:2px;box-shadow:0 0 0 1px rgba(92,94,12,.25)}
.wsknee__h2{font-size:clamp(24px,3vw,34px);font-weight:800;line-height:1.2;margin:0 0 18px;color:#1c1c1c}.wsknee__h2 em{font-style:italic;color:#5c5e0c}
.wsknee__p{font-size:15.5px;line-height:1.65;color:#333;margin:0 0 14px}.wsknee__p em{font-style:normal;font-weight:700;color:#1c1c1c}
.wsknee__zak{font-size:16px;font-weight:800;line-height:1.5;margin:18px 0 0}
.wsknee__v>.wsknee__zak{text-align:center}
.wsknee__dva .wsknee__zak{border-left:3px solid #d8dc1e;padding-left:14px}
/* trak */
.wsknee__s.wsknee__traka{padding:40px 0}
.wsknee__tmreza{display:grid;grid-template-columns:repeat(4,1fr);gap:18px}
.wsknee__tk{display:flex;align-items:center;gap:14px;background:#fff;border-radius:16px;padding:22px 18px;box-shadow:0 8px 24px rgba(92,94,12,.12)}
.wsknee__ti{flex:0 0 52px;width:52px;height:52px;border-radius:50%;background:linear-gradient(135deg,#1c1c1c,#3a3a3a);color:#d8dc1e;display:flex;align-items:center;justify-content:center;box-shadow:0 6px 14px rgba(0,0,0,.22)}
.wsknee__tt strong{display:block;font-size:16.5px;font-weight:800;line-height:1.25}.wsknee__tt span{display:block;font-size:13.5px;line-height:1.4;color:#5a5f6b;margin-top:3px}
/* slika + besedilo */
.wsknee__dva{display:grid;grid-template-columns:1fr 1fr;gap:56px;align-items:center}.wsknee__dva--rev>div:first-child{order:2}
.wsknee__media{position:relative;border-radius:16px;overflow:hidden;box-shadow:0 14px 34px rgba(0,0,0,.14);aspect-ratio:4/5;background:#e9e9e9}
.wsknee__media img,.wsknee__media video{width:100%;height:100%;object-fit:cover;display:block}
.wsknee__media--cela{aspect-ratio:auto;background:#fff}.wsknee__media--cela img{height:auto;object-fit:contain}
.wsknee__znacka{position:absolute;left:16px;top:16px;background:#d8dc1e;color:#1c1c1c;font-size:12px;font-weight:800;letter-spacing:1px;text-transform:uppercase;padding:7px 12px;border-radius:20px;box-shadow:0 4px 12px rgba(0,0,0,.15)}
.wsknee__kv{list-style:none;margin:4px 0 6px;padding:0}.wsknee__kv li{position:relative;padding-left:32px;margin:0 0 12px;font-size:15.5px;line-height:1.55;list-style:none}
.wsknee__kv li::before{content:"\2713";position:absolute;left:0;top:1px;width:21px;height:21px;border-radius:50%;background:#1c1c1c;color:#d8dc1e;font-size:12px;display:flex;align-items:center;justify-content:center}
.wsknee__kv em{font-style:normal;font-weight:800}
.wsknee__red3{display:grid;grid-template-columns:repeat(3,1fr);gap:12px;margin:8px 0 6px}
.wsknee__red3>div{background:#fff;border-radius:14px;padding:16px 10px;text-align:center;box-shadow:0 6px 18px rgba(0,0,0,.06)}
.wsknee__red3 strong{display:block;font-size:15px}.wsknee__red3>div>span:not(.wsknee__pi){font-size:13px;color:#555}
.wsknee__pi{width:44px;height:44px;border-radius:50%;background:#eef0b4;color:#5c5e0c;display:flex;align-items:center;justify-content:center;margin:0 auto 8px}.wsknee__pi svg{width:22px;height:22px}
/* kartice */
.wsknee__grid{display:grid;gap:22px;margin-top:24px;align-items:stretch}.wsknee__g3{grid-template-columns:repeat(3,1fr)}
.wsknee__k{background:#fff;border-radius:16px;overflow:hidden;display:flex;flex-direction:column;box-shadow:0 8px 22px rgba(0,0,0,.08);transition:transform .2s,box-shadow .2s}
.wsknee__k:hover{transform:translateY(-3px);box-shadow:0 14px 30px rgba(92,94,12,.18)}
.wsknee__km img{width:100%;aspect-ratio:4/5;object-fit:cover;display:block}
.wsknee__kt{padding:20px 22px 22px;flex:1;display:flex;flex-direction:column}.wsknee__kt strong{display:block;font-size:17px;margin:0 0 6px}.wsknee__kt p{margin:0 0 12px;font-size:15.5px;line-height:1.55;color:#333;flex:1}
.wsknee__k--tekst .wsknee__kt{padding:28px 26px}
.wsknee__oz{display:inline-block;align-self:flex-start;background:#d8dc1e;color:#1c1c1c;font-size:11.5px;font-weight:800;letter-spacing:1px;text-transform:uppercase;padding:5px 10px;border-radius:20px;margin-bottom:10px}
.wsknee__zv{color:#e0a33c;letter-spacing:2px;display:block;margin-bottom:8px}
.wsknee__ime{display:flex;align-items:center;gap:10px;font-weight:700;font-size:14px}
.wsknee__av{flex:0 0 34px;width:34px;height:34px;border-radius:50%;background:#eef0b4;color:#5c5e0c;font-style:normal;font-weight:800;font-size:14px;display:inline-flex;align-items:center;justify-content:center}
/* nova generacija */
.wsknee__dvastolpca{display:grid;grid-template-columns:1fr 1fr;gap:32px;margin-top:6px}
.wsknee__gm{border-radius:16px;overflow:hidden;box-shadow:0 10px 28px rgba(0,0,0,.10)}.wsknee__gm img{width:100%;aspect-ratio:1/1;object-fit:cover;display:block}
/* tabela */
.wsknee__tw{overflow-x:auto;margin:6px 0 4px}.wsknee__tab{width:100%;border-collapse:collapse;background:#fff;border-radius:14px;overflow:hidden;font-size:15px}
.wsknee__tab th,.wsknee__tab td{padding:11px 14px;border-bottom:1px solid #eee;text-align:left}.wsknee__tab th{background:#111!important;color:#fff!important;font-weight:700}
.wsknee__tab tr:nth-child(even) td{background:#fafaf0}
/* karusel */
.wsknee__kar{display:grid;grid-auto-flow:column;grid-auto-columns:calc((100% - 66px)/4);gap:22px;margin-top:24px;overflow-x:auto;scroll-snap-type:x mandatory;scrollbar-width:thin;padding-bottom:8px}
.wsknee__kar>*{scroll-snap-align:start}
.wsknee__km2{border-radius:16px;overflow:hidden;box-shadow:0 10px 26px rgba(0,0,0,.12)}.wsknee__km2 img{width:100%;aspect-ratio:3/4;object-fit:cover;display:block}
@media (max-width:860px){.wsknee__s{padding:46px 0}.wsknee__s.wsknee__traka{padding:30px 0}
.wsknee__dva{grid-template-columns:1fr;gap:24px}.wsknee__dva--rev>div:first-child{order:0}
.wsknee__tmreza{grid-template-columns:1fr 1fr;gap:12px}.wsknee__tk{flex-direction:column;text-align:center;padding:18px 12px;gap:10px}.wsknee__tt strong{font-size:15px}
.wsknee__g3{grid-auto-flow:column;grid-auto-columns:82%;grid-template-columns:none;overflow-x:auto;scroll-snap-type:x mandatory;padding-bottom:6px}.wsknee__g3>*{scroll-snap-align:start}
.wsknee__dvastolpca{grid-template-columns:1fr;gap:0}.wsknee__kar{grid-auto-columns:72%}}
@media (max-width:767px){.wsknee__v{padding:0 16px}}
@media (max-width:420px){.wsknee__red3{grid-template-columns:1fr 1fr 1fr;gap:8px}.wsknee__red3>div{padding:12px 4px}.wsknee__red3 strong{font-size:13.5px}}
</style>
