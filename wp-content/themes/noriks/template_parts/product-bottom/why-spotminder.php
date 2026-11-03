<?php
/**
 * NORIKS kartica za praćenje (tanka kao bankovna kartica, Apple Find My) — why sekcije po strukturi originala
 * (spotminders.com/products/spotminders-tracking-cards; vrstica v TOVARNI kaze na /products/spotminders-circle,
 * ki je prazna narocniska stran brez slik in opisa, zato je vsebina z glavne strani izdelka Tracking Card).
 *
 * STRUKTURA ORIGINALA:
   1. Ideal for: zavihki z ikonami (Wallet, Luggage, Car, Backpack, Gift + more) in fotografijo za vsak zavihek - pri nas naslov + 5 kartic s fotografijo (novcanik, prtljaga, auto, ruksak, poklon)
   2. Compare Standard vs Pro (tabela z drugim izdelkom Pro) - IZPUSCENO, ker Pro kartice ne prodajamo
   3. Details & Size: specifikacije (85 x 54 x 1,8 mm, baterija do 8 mjeseci, Find My, zvuk, privatnost, bez pretplate) + sadrzaj paketa - pri nas slika levo + specifikacije z ikonami desno (Shipping & Returns, 100-day, Lifetime Guarantee IZPUSCENO - tuji pogoji, namesto tega NORIKS pogoji)
   4. Loved by thousands: 6 video mnenj v vrsti (karusel) - pri nas 3 video mnenja s HR napisi (ostali 3 so ploski posnetek ulice, navodila z znamko in kopija) v vrsti
   5. Color coded, your way: naslov + 4 kartice (slika zgoraj, ime barve + besedilo spodaj) - pri nas enako, 4 kartice
   6. 2.3 Billion Apple Devices: naslov + 3 koraki s telefoni (Detects / Updates / Find it) - pri nas 3 kartice s slikami telefonov in ikonami
   7. A Better View of Your Bag's Journey: primerjava 2 stolpca (Airline updates proti Apple Find My) s slikama telefonov in 3 tockami - pri nas enako, 2 stolpca
   8. Built For The Things You Carry: 3 kartice z ikonami (novcanik, baterija, putovanja) - pri nas 3 kartice z ikonami
   9. Animated features: 4 zavihki s slikami (Track everything, How to connect, Battery life, Ultra thin) - pri nas 4 kartice s slikami
  10. Set it up in under 45 seconds: 3 koraki s slikami (Connect, Store, Track & Ring - animacija) - pri nas 3 stevilcni koraki, tretji kot video
  11. Why Choose: primerjalna tabela (Spotminders proti okroglemu trackerju) - pri nas tabela NORIKS proti okroglemu trackerju (brez tuje znamke)
  12. Your Essentials, Always Within Reach: 4 kartice (Wallet, Luggage, Car, Backpack) - pri nas 4 kartice s slikami
  13. How to setup: karusel 6 korakov s posnetki zaslona - pri nas karusel 6 korakov s puscicami
  14. Why 1,000,000+ cards are sold (Trustpilot) - IZPUSCENO (tuja stevilka in tuja ocena)
  15. Frequently Asked Questions - pri nas v FAQ spodaj (auto_reviews/FAQ_HR_spotminder.php)
  16. Customer Reviews - pri nas mnenja spodaj (auto_reviews/HR_spotminder.php)
 * BARVA ORIGINALA: #1b4f86 (temno modra naslovov in gumbov na originalu, modri stolpec primerjave); svetel ton za --bg #eef3f9
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
$wsp_img = get_template_directory_uri() . '/img/spotminder/';
$wsp_svg = '<svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">';
$wsp_i   = function ( $f ) use ( $wsp_img ) { return esc_url( $wsp_img . $f ); };
?>
<div class="wsp">

<section class="wsp__s wsp__s--bg"><div class="wsp__v">
  <div class="wsp__kicker wsp__c">Idealno za</div>
  <h2 class="wsp__h2 wsp__c">Jedna kartica – <em>za sve što ne smijete izgubiti</em></h2>
  <p class="wsp__p wsp__c">Tanka je kao bankovna kartica, pa stane tamo gdje okrugli tracker ne može: u novčanik, u džep kofera, u torbu ili u auto.</p>
  <div class="wsp__grid wsp__grid--5 wsp__klizi">
    <div class="wsp__k"><div class="wsp__km wsp__km--siroka"><img src="<?php echo $wsp_i( 'noriks-spotminder-idealno-wallet.webp' ); ?>" alt="NORIKS kartica za praćenje u kožnom novčaniku" loading="eager" decoding="async"></div><div class="wsp__kt"><span class="wsp__oz">Tanka · neprimjetna</span><strong>Novčanik</strong><p>Leži ravno u novčaniku, bez dodatne debljine – diskretno, a uvijek znate gdje je.</p></div></div>
    <div class="wsp__k"><div class="wsp__km wsp__km--siroka"><img src="<?php echo $wsp_i( 'noriks-spotminder-idealno-luggage.webp' ); ?>" alt="NORIKS kartica za praćenje u džepu kofera" loading="eager" decoding="async"></div><div class="wsp__kt"><span class="wsp__oz">Spremna za put</span><strong>Prtljaga</strong><p>Stavite je u kofer ili podstavu i pratite prtljagu gdje god putujete.</p></div></div>
    <div class="wsp__k"><div class="wsp__km wsp__km--siroka"><img src="<?php echo $wsp_i( 'noriks-spotminder-idealno-car.webp' ); ?>" alt="NORIKS kartica za praćenje u štitniku za sunce u autu" loading="eager" decoding="async"></div><div class="wsp__kt"><span class="wsp__oz">Ostaje unutra</span><strong>Auto</strong><p>Ostavite je u autu i uvijek znajte gdje je – parkiran ili u pokretu.</p></div></div>
    <div class="wsp__k"><div class="wsp__km wsp__km--siroka"><img src="<?php echo $wsp_i( 'noriks-spotminder-idealno-backpack.webp' ); ?>" alt="NORIKS kartica za praćenje ulazi u kožnu torbu" loading="eager" decoding="async"></div><div class="wsp__kt"><span class="wsp__oz">Za svaki dan</span><strong>Ruksak i torba</strong><p>Ubacite je u ruksak ili torbu – za posao, školu ili putovanje.</p></div></div>
    <div class="wsp__k"><div class="wsp__km wsp__km--siroka"><img src="<?php echo $wsp_i( 'noriks-spotminder-idealno-gift.webp' ); ?>" alt="Crna i ružičasta NORIKS kartica za praćenje uz poklon" loading="eager" decoding="async"></div><div class="wsp__kt"><span class="wsp__oz">Korisna svaki dan</span><strong>Poklon</strong><p>Poklon koji se stvarno koristi – pomaže voljenima pratiti ono što im je važno.</p></div></div>
  </div>
  <p class="wsp__zak">Aktovka, torba za golf, kutija za gitaru, motor – kartica ide svuda.</p>
</div></section>

<section class="wsp__s"><div class="wsp__v wsp__dva">
  <div class="wsp__media"><img src="<?php echo $wsp_i( 'noriks-spotminder-ultra-tanka.webp' ); ?>" alt="NORIKS kartica za praćenje debljine 1,8 mm uz bok mobitela" loading="eager" decoding="async"><span class="wsp__znacka">samo 1,8 mm</span></div>
  <div>
    <div class="wsp__kicker">Detalji i veličina</div>
    <h2 class="wsp__h2">Veličine bankovne kartice – <em>radi s Apple Find My</em></h2>
    <p class="wsp__p">NORIKS kartica za praćenje povezuje se izravno s aplikacijom Find My na iPhoneu. Ako zagubite novčanik, torbu ili kofer, njegovu lokaciju vidite na karti ili pustite zvuk da ga brzo pronađete.</p>
    <div class="wsp__podaci">
      <div><span class="wsp__pi"><?php echo $wsp_svg; ?><rect x="3" y="6" width="18" height="12" rx="2"/><path d="M3 10h18"/></svg></span><strong>85 x 54 x 1,8 mm</strong><small>veličina bankovne kartice</small></div>
      <div><span class="wsp__pi"><?php echo $wsp_svg; ?><rect x="2" y="7" width="17" height="10" rx="2"/><path d="M22 11v2"/><path d="M6 10v4M9 10v4M12 10v4"/></svg></span><strong>Do 8 mjeseci</strong><small>po jednom punjenju</small></div>
      <div><span class="wsp__pi"><?php echo $wsp_svg; ?><path d="M11 5 6 9H3v6h3l5 4z"/><path d="M15.5 8.5a5 5 0 0 1 0 7"/><path d="M18.5 6a8.5 8.5 0 0 1 0 12"/></svg></span><strong>Zvučni signal</strong><small>pronađite je u blizini</small></div>
      <div><span class="wsp__pi"><?php echo $wsp_svg; ?><rect x="5" y="11" width="14" height="10" rx="2"/><path d="M8 11V7a4 4 0 0 1 8 0v4"/></svg></span><strong>Privatnost</strong><small>bez spremljene povijesti lokacija</small></div>
      <div><span class="wsp__pi"><?php echo $wsp_svg; ?><circle cx="12" cy="12" r="9"/><path d="M8 12h8"/></svg></span><strong>Bez pretplate</strong><small>bez mjesečnih troškova</small></div>
      <div><span class="wsp__pi"><?php echo $wsp_svg; ?><path d="M21 8 12 3 3 8v8l9 5 9-5z"/><path d="M3 8l9 5 9-5"/><path d="M12 13v8"/></svg></span><strong>U paketu</strong><small>kartica + kratke upute</small></div>
    </div>
    <p class="wsp__zak">Punjiva, vodootporna i tanka – plaćate jednom i to je sve.</p>
  </div>
</div></section>

<section class="wsp__s wsp__s--bg"><div class="wsp__v">
  <div class="wsp__kicker wsp__c">Kupci je vole</div>
  <h2 class="wsp__h2 wsp__c">Pogledajte zašto su <em>prešli na karticu</em></h2>
  <p class="wsp__p wsp__c"><span class="wsp__ocj"><strong>4,8</strong> <span class="wsp__zv">★★★★★</span> na temelju 1.081 recenzije</span></p>
  <div class="wsp__grid wsp__grid--3 wsp__vidovi">
    <div class="wsp__vid"><video src="<?php echo esc_url( get_template_directory_uri() . '/img/spotminder/noriks-spotminder-video-1.mp4?v=3' ); ?>" poster="<?php echo $wsp_i( 'noriks-spotminder-video-1.jpg?v=3' ); ?>" autoplay muted loop playsinline webkit-playsinline preload="metadata"></video><span class="wsp__vz">Najpametniji tracker?</span></div>
    <div class="wsp__vid"><video src="<?php echo esc_url( get_template_directory_uri() . '/img/spotminder/noriks-spotminder-video-2.mp4?v=2' ); ?>" poster="<?php echo $wsp_i( 'noriks-spotminder-video-2.jpg?v=2' ); ?>" autoplay muted loop playsinline webkit-playsinline preload="metadata"></video><span class="wsp__vz">Izgleda kao prava kartica</span></div>
    <div class="wsp__vid"><video src="<?php echo esc_url( get_template_directory_uri() . '/img/spotminder/noriks-spotminder-video-3.mp4?v=2' ); ?>" poster="<?php echo $wsp_i( 'noriks-spotminder-video-3.jpg?v=2' ); ?>" autoplay muted loop playsinline webkit-playsinline preload="metadata"></video><span class="wsp__vz">Okrugli tracker? 6/10</span></div>
  </div>
</div></section>

<section class="wsp__s"><div class="wsp__v">
  <div class="wsp__kicker wsp__c">Boja po namjeni</div>
  <h2 class="wsp__h2 wsp__c">Svaka boja <em>ima svoj posao</em></h2>
  <p class="wsp__p wsp__c">Ladica puna istih crnih trackera je pogađanje. Četiri boje pretvaraju je u komplet koji se sam slaže.</p>
  <div class="wsp__grid wsp__grid--4">
    <div class="wsp__k"><div class="wsp__km"><img src="<?php echo $wsp_i( 'noriks-spotminder-boja-2.webp' ); ?>" alt="Crna NORIKS kartica za praćenje ulazi u kožnu torbu za laptop" loading="eager" decoding="async"></div><div class="wsp__kt"><span class="wsp__tocka" style="background:#1c1c1e"></span><strong>Vi – crna</strong><p>Torba za posao, navlaka za laptop. Ona koja je uvijek s vama i nikad ne izlazi iz svakodnevice.</p></div></div>
    <div class="wsp__k"><div class="wsp__km"><img src="<?php echo $wsp_i( 'noriks-spotminder-boja-3.webp?v=3' ); ?>" alt="Tamnoplava NORIKS kartica za praćenje iznad novčanika" loading="eager" decoding="async"></div><div class="wsp__kt"><span class="wsp__tocka" style="background:#23365c"></span><strong>Putovanja – tamnoplava</strong><p>Putna mapa, karta za ukrcaj, dokumenti. Sve što je najvažnije kad ste daleko od kuće.</p></div></div>
    <div class="wsp__k"><div class="wsp__km"><img src="<?php echo $wsp_i( 'noriks-spotminder-boja-4.webp' ); ?>" alt="Narančasta NORIKS kartica za praćenje na ručki kofera" loading="eager" decoding="async"></div><div class="wsp__kt"><span class="wsp__tocka" style="background:#f07a2b"></span><strong>Prtljaga – narančasta</strong><p>Predana prtljaga i torba u kabini. Boja koju na traci za prtljagu ugledate prije svih.</p></div></div>
    <div class="wsp__k"><div class="wsp__km"><img src="<?php echo $wsp_i( 'noriks-spotminder-boja-5.webp' ); ?>" alt="Ružičasta NORIKS kartica za praćenje ulazi u novčanik" loading="eager" decoding="async"></div><div class="wsp__kt"><span class="wsp__tocka" style="background:#d9939d"></span><strong>Obitelj – ružičasta</strong><p>Poklon, zajednička torba, stvari o kojima se cijela kuća brine. I o ovoj se brine.</p></div></div>
  </div>
</div></section>

<section class="wsp__s wsp__s--bg"><div class="wsp__v">
  <div class="wsp__kicker wsp__c">Mreža Find My</div>
  <h2 class="wsp__h2 wsp__c">2,3 milijarde Apple uređaja <em>pomaže pronaći vaše stvari</em></h2>
  <p class="wsp__p wsp__c">Kad je kartica blizu bilo kojeg Apple uređaja, njena lokacija se osvježava u aplikaciji Find My – anonimno i šifrirano.</p>
  <div class="wsp__grid wsp__grid--3">
    <div class="wsp__k"><div class="wsp__km wsp__km--tel"><img src="<?php echo $wsp_i( 'noriks-spotminder-mreza-1.webp?v=3' ); ?>" alt="iPhone u blizini prepoznaje izgubljenu stvar" loading="eager" decoding="async"></div><div class="wsp__kt wsp__kt--c"><span class="wsp__st">1</span><strong>Prepoznaje izgubljeno</strong><p>Obližnji iPhone neprimjetno prepozna vašu karticu.</p></div></div>
    <div class="wsp__k"><div class="wsp__km wsp__km--tel"><img src="<?php echo $wsp_i( 'noriks-spotminder-mreza-2.webp?v=2' ); ?>" alt="Lokacija stvari osvježava se na karti" loading="eager" decoding="async"></div><div class="wsp__kt wsp__kt--c"><span class="wsp__st">2</span><strong>Osvježava lokaciju</strong><p>Lokacija se šalje u mrežu – samo vi je vidite.</p></div></div>
    <div class="wsp__k"><div class="wsp__km wsp__km--tel"><img src="<?php echo $wsp_i( 'noriks-spotminder-mreza-3.webp?v=2' ); ?>" alt="Novčanik prikazan u aplikaciji Find My" loading="eager" decoding="async"></div><div class="wsp__kt wsp__kt--c"><span class="wsp__st">3</span><strong>Pronađite u Find My</strong><p>Otvorite aplikaciju i vaša stvar je na karti.</p></div></div>
  </div>
</div></section>

<section class="wsp__s"><div class="wsp__v">
  <div class="wsp__kicker wsp__c">Na putovanju</div>
  <h2 class="wsp__h2 wsp__c">Bolji pregled <em>puta vaše prtljage</em></h2>
  <p class="wsp__p wsp__c">Zrakoplovna tvrtka javlja status prtljage. Find My pokazuje gdje je vaša kartica.</p>
  <div class="wsp__usp">
    <div class="wsp__usk">
      <div class="wsp__ustel"><img src="<?php echo $wsp_i( 'noriks-spotminder-zrakoplovna.webp?v=2' ); ?>" alt="Obavijesti zrakoplovne tvrtke o statusu prtljage" loading="eager" decoding="async"></div>
      <div><span class="wsp__oz wsp__oz--siva">Obavijesti zrakoplovne tvrtke</span><h3 class="wsp__h3">Prijava, utovar i dostava</h3>
        <ul class="wsp__lista wsp__lista--ne"><li><strong>Samo kod skeniranja</strong> – praznine između obavijesti, bez stvarne lokacije.</li><li><strong>Ne vidite torbu</strong> – samo status, ne i mjesto.</li><li><strong>Ovisi o prijevozniku</strong> – obavijesti mogu kasniti.</li></ul></div>
    </div>
    <div class="wsp__usk wsp__usk--nasa">
      <div class="wsp__ustel"><img src="<?php echo $wsp_i( 'noriks-spotminder-find-my-prtljaga.webp?v=2' ); ?>" alt="Prtljaga s NORIKS karticom prikazana na karti zračne luke u Find My" loading="eager" decoding="async"></div>
      <div><span class="wsp__oz">NORIKS kartica + Find My</span><h3 class="wsp__h3">Lokacija, vrijeme i zvuk</h3>
        <ul class="wsp__lista"><li><strong>Zadnja poznata lokacija</strong> – vidite je na karti.</li><li><strong>Mreža Find My</strong> – osvježavaju je obližnji Apple uređaji.</li><li><strong>Zvučni signal</strong> – pronađite je kad ste blizu.</li></ul></div>
    </div>
  </div>
</div></section>

<section class="wsp__s wsp__s--bg"><div class="wsp__v">
  <div class="wsp__kicker wsp__c">Svaki dan</div>
  <h2 class="wsp__h2 wsp__c">Stvorena za stvari <em>koje nosite svaki dan</em></h2>
  <p class="wsp__p wsp__c">Od novčanika do prtljage – najvažnije stvari uvijek su vam nadohvat ruke.</p>
  <div class="wsp__grid wsp__grid--3">
    <div class="wsp__k wsp__k--ik"><span class="wsp__ikona"><?php echo $wsp_svg; ?><rect x="3" y="6" width="18" height="13" rx="2"/><path d="M16 12h5"/><circle cx="16.5" cy="12.5" r=".6"/></svg></span><span class="wsp__oz">Za novčanik</span><strong>Toliko tanka da nestane</strong><p>Stane u moderne novčanike i držače kartica bez dodatne debljine.</p></div>
    <div class="wsp__k wsp__k--ik"><span class="wsp__ikona"><?php echo $wsp_svg; ?><rect x="2" y="7" width="17" height="10" rx="2"/><path d="M22 11v2"/><path d="M10 9l-2 3h4l-2 3"/></svg></span><span class="wsp__oz">Za svaki dan</span><strong>Baterija do 8 mjeseci</strong><p>Napunite je jednom i mjesecima ne mislite na bateriju.</p></div>
    <div class="wsp__k wsp__k--ik"><span class="wsp__ikona"><?php echo $wsp_svg; ?><rect x="6" y="7" width="12" height="13" rx="2"/><path d="M9 7V4h6v3"/><path d="M9 20v1M15 20v1"/></svg></span><span class="wsp__oz">Za putovanja</span><strong>Znajte gdje je prtljaga</strong><p>Pratite kofer, ruksak ili vrijedne stvari kroz Find My, kamo god putujete.</p></div>
  </div>
</div></section>

<section class="wsp__s"><div class="wsp__v">
  <div class="wsp__kicker wsp__c">Mogućnosti</div>
  <h2 class="wsp__h2 wsp__c">Sve što trebate – <em>u 1,8 mm</em></h2>
  <div class="wsp__grid wsp__grid--4">
    <div class="wsp__k"><div class="wsp__km wsp__km--kv"><img src="<?php echo $wsp_i( 'noriks-spotminder-prati-sve.webp?v=2' ); ?>" alt="Aplikacija Find My prikazuje stvari na karti" loading="eager" decoding="async"></div><div class="wsp__kt"><strong>Pratite sve</strong><p>Novčanik, ruksak, kofer i više – sve iz aplikacije Find My koju već imate.</p></div></div>
    <div class="wsp__k"><div class="wsp__km wsp__km--kv"><img src="<?php echo $wsp_i( 'noriks-spotminder-spajanje.webp?v=2' ); ?>" alt="Novčanik povezan u aplikaciji Find My" loading="eager" decoding="async"></div><div class="wsp__kt"><strong>Spajanje u sekundi</strong><p>Bez dodatnih aplikacija i postavki – dodirnite, povežite i pratite.</p></div></div>
    <div class="wsp__k"><div class="wsp__km wsp__km--kv"><img src="<?php echo $wsp_i( 'noriks-spotminder-baterija.webp' ); ?>" alt="NORIKS kartica za praćenje na bežičnom punjaču" loading="eager" decoding="async"></div><div class="wsp__kt"><strong>Baterija do 8 mjeseci</strong><p>Punjiva i napravljena da traje – bez mijenjanja baterija.</p></div></div>
    <div class="wsp__k"><div class="wsp__km wsp__km--kv"><img src="<?php echo $wsp_i( 'noriks-spotminder-02.webp' ); ?>" alt="Obični tracker debljine 8 mm i NORIKS kartica debljine 1,8 mm u novčaniku" loading="eager" decoding="async"></div><div class="wsp__kt"><strong>Ultra tanka</strong><p>1,8 mm prema oko 9,9 mm boka mobitela – novčanik ostaje ravan.</p></div></div>
  </div>
</div></section>

<section class="wsp__s wsp__s--bg"><div class="wsp__v">
  <div class="wsp__kicker wsp__c">Brzo postavljanje</div>
  <h2 class="wsp__h2 wsp__c">Postavite je <em>za manje od 45 sekundi</em></h2>
  <p class="wsp__p wsp__c">Većina kupaca je poveže i počne pratiti za manje od minute. Evo kako:</p>
  <div class="wsp__grid wsp__grid--3">
    <div class="wsp__k"><div class="wsp__km wsp__km--kv"><img src="<?php echo $wsp_i( 'noriks-spotminder-povezi.webp?v=3' ); ?>" alt="NORIKS kartica uz iPhone s aplikacijom Find My" loading="eager" decoding="async"></div><div class="wsp__kt"><span class="wsp__st">1</span><strong>Povežite s Find My</strong><p>Približite je iPhoneu i dodirnite jednom. Bez aplikacija, bez muke – kartica je spremna za nekoliko sekundi.</p></div></div>
    <div class="wsp__k"><div class="wsp__km wsp__km--kv"><img src="<?php echo $wsp_i( 'noriks-spotminder-spremi.webp' ); ?>" alt="NORIKS kartica ulazi u novčanik" loading="eager" decoding="async"></div><div class="wsp__kt"><span class="wsp__st">2</span><strong>Spremite je</strong><p>Stavite je u novčanik, torbu ili putovnicu. Tanka je, sigurna i ostaje skrivena dok vam ne zatreba.</p></div></div>
    <div class="wsp__k"><div class="wsp__km wsp__km--kv"><video src="<?php echo esc_url( get_template_directory_uri() . '/img/spotminder/noriks-spotminder-video-postavljanje.mp4?v=2' ); ?>" poster="<?php echo $wsp_i( 'noriks-spotminder-video-postavljanje.jpg?v=2' ); ?>" autoplay muted loop playsinline webkit-playsinline preload="metadata"></video></div><div class="wsp__kt"><span class="wsp__st">3</span><strong>Pratite, zvonite, pronađite</strong><p>U Find My vidite lokaciju. Kad je blizu, dodirnite Pusti zvuk i čut ćete je i kroz torbu ili jastuke.</p></div></div>
  </div>
</div></section>

<section class="wsp__s"><div class="wsp__v">
  <div class="wsp__kicker wsp__c">Usporedba</div>
  <h2 class="wsp__h2 wsp__c">Zašto <em>NORIKS kartica</em></h2>
  <p class="wsp__p wsp__c">NORIKS kartica ima Apple MFi certifikat i radi s aplikacijom Find My.</p>
  <div class="wsp__tw"><table class="wsp__tab">
    <thead><tr><th></th><th class="wsp__tnasa">NORIKS kartica</th><th>Okrugli tracker</th></tr></thead>
    <tbody>
      <tr><td>Radi s Apple Find My</td><td class="wsp__da">✓</td><td class="wsp__da">✓</td></tr>
      <tr><td>Tanka, stane u novčanik (1,8 mm)</td><td class="wsp__da">✓</td><td class="wsp__ne">✕</td></tr>
      <tr><td>Bežično punjenje, bez mijenjanja baterije</td><td class="wsp__da">✓</td><td class="wsp__ne">✕</td></tr>
      <tr><td>Za putovanja i prtljagu</td><td class="wsp__da">✓</td><td class="wsp__da">✓</td></tr>
      <tr><td>Novčanik, torbe i prtljaga</td><td class="wsp__da">✓</td><td class="wsp__ne">✕</td></tr>
    </tbody>
  </table></div>
</div></section>

<section class="wsp__s wsp__s--bg"><div class="wsp__v">
  <div class="wsp__kicker wsp__c">Uvijek s vama</div>
  <h2 class="wsp__h2 wsp__c">Vaše stvari – <em>uvijek nadohvat ruke</em></h2>
  <div class="wsp__grid wsp__grid--4">
    <div class="wsp__k"><div class="wsp__km wsp__km--kv"><img src="<?php echo $wsp_i( 'noriks-spotminder-nadohvat-novcanik.webp?v=2' ); ?>" alt="Lokacija novčanika s NORIKS karticom na iPhoneu" loading="eager" decoding="async"></div><div class="wsp__kt"><strong>Novčanik</strong><p>Provjerite lokaciju ili primite obavijest da ste ga zaboravili.</p></div></div>
    <div class="wsp__k"><div class="wsp__km wsp__km--kv"><img src="<?php echo $wsp_i( 'noriks-spotminder-nadohvat-prtljaga.webp?v=2' ); ?>" alt="NORIKS kartica u koferu i lokacija prtljage na iPhoneu" loading="eager" decoding="async"></div><div class="wsp__kt"><strong>Prtljaga</strong><p>Vidite gdje je prtljaga tijekom cijelog puta.</p></div></div>
    <div class="wsp__k"><div class="wsp__km wsp__km--kv"><img src="<?php echo $wsp_i( 'noriks-spotminder-nadohvat-auto.webp?v=2' ); ?>" alt="Lokacija parkiranog auta u aplikaciji Find My" loading="eager" decoding="async"></div><div class="wsp__kt"><strong>Auto</strong><p>Provjerite zadnju poznatu lokaciju auta u Find My.</p></div></div>
    <div class="wsp__k"><div class="wsp__km wsp__km--kv"><img src="<?php echo $wsp_i( 'noriks-spotminder-nadohvat-ruksak.webp?v=2' ); ?>" alt="NORIKS kartica ulazi u ruksak" loading="eager" decoding="async"></div><div class="wsp__kt"><strong>Ruksak</strong><p>Pustite zvuk kad je ruksak negdje u blizini.</p></div></div>
  </div>
</div></section>

<section class="wsp__s"><div class="wsp__v">
  <div class="wsp__kicker wsp__c">Upute</div>
  <h2 class="wsp__h2 wsp__c">Kako je postaviti – <em>korak po korak</em></h2>
  <p class="wsp__p wsp__c">Slijedite ovih šest jednostavnih koraka i povežite NORIKS karticu za praćenje.</p>
  <div class="wsp__karw">
    <div class="wsp__kar">
      <?php
      $wsp_koraci = array( 'Otvorite aplikaciju „Find My”', 'Dodirnite „Dodaj stvar”', 'Uključite karticu – pritisnite NORIKS ikonu', 'Odaberite „Ostali podržani predmet”', 'Stvar se povezuje s vašim Apple ID-om', 'Gotovo – kartica je na karti!' );
      foreach ( $wsp_koraci as $wsp_n => $wsp_t ) : ?>
      <div class="wsp__kk"><div class="wsp__kkm"><img src="<?php echo $wsp_i( 'noriks-spotminder-korak-' . ( $wsp_n + 1 ) . '.webp?v=2' ); ?>" alt="<?php echo esc_attr( 'Korak ' . ( $wsp_n + 1 ) . ': ' . $wsp_t ); ?>" loading="eager" decoding="async"></div><div class="wsp__kkt"><span class="wsp__st"><?php echo (int) ( $wsp_n + 1 ); ?></span><strong><?php echo esc_html( $wsp_t ); ?></strong></div></div>
      <?php endforeach; ?>
    </div>
    <button type="button" class="wsp__pus wsp__pus--l" aria-label="Prethodno">&#8249;</button>
    <button type="button" class="wsp__pus wsp__pus--d" aria-label="Sljedeće">&#8250;</button>
  </div>
</div></section>

<section class="wsp__s wsp__s--bg npg-s"><?php $npg = array( 'izdelek' => 'NORIKS karticu za praćenje', 'barva' => '#1b4f86' ); include __DIR__ . '/noriks-pogoji.php'; ?></section>
</div>
<style>
.wsp{color:#14213a;font-family:inherit}
.wsp__s{padding:72px 0;background:#fff}.wsp__s.wsp__s--bg{background:#eef3f9}
.wsp__v{width:100%;max-width:1240px;margin:0 auto;padding:0 24px;box-sizing:border-box}
.wsp__c{text-align:center}
.wsp__kicker{font-size:13px;letter-spacing:1.8px;text-transform:uppercase;color:#1b4f86;margin:0 0 8px;font-weight:700}
.wsp__kicker::before{content:"";display:inline-block;width:22px;height:2px;background:#1b4f86;vertical-align:middle;margin:-2px 10px 0 0;border-radius:2px}
.wsp__h2{font-size:clamp(24px,3vw,34px);font-weight:800;line-height:1.2;margin:0 0 16px;color:#14213a}.wsp__h2 em{font-style:italic;color:#1b4f86}
.wsp__h3{font-size:19px;font-weight:800;margin:6px 0 12px;color:#14213a}
.wsp__p{font-size:15.5px;line-height:1.65;color:#3a4458;margin:0 0 14px}
.wsp__zak{font-size:16px;font-weight:800;line-height:1.5;margin:22px 0 0}
.wsp__v>.wsp__zak{text-align:center}
.wsp__dva .wsp__zak{border-left:3px solid #1b4f86;padding-left:14px}
.wsp__dva{display:grid;grid-template-columns:1fr 1fr;gap:56px;align-items:center}
.wsp__media{position:relative;border-radius:16px;overflow:hidden;box-shadow:0 14px 34px rgba(20,40,80,.16);aspect-ratio:4/5;background:#0d0d0d}
.wsp__media img{width:100%;height:100%;object-fit:cover;display:block}
.wsp__znacka{position:absolute;left:16px;top:16px;background:#fff;color:#1b4f86;font-size:13px;font-weight:800;letter-spacing:1px;text-transform:uppercase;padding:7px 12px;border-radius:20px;box-shadow:0 4px 12px rgba(0,0,0,.15)}
.wsp__pi{flex:0 0 46px;width:46px;height:46px;border-radius:50%;background:#e1eaf5;color:#1b4f86;display:flex;align-items:center;justify-content:center}
.wsp__podaci{display:grid;grid-template-columns:repeat(3,1fr);gap:12px;margin:10px 0 4px}
.wsp__podaci>div{background:#eef3f9;border-radius:14px;padding:16px 10px;text-align:center;display:flex;flex-direction:column;align-items:center;gap:4px}
.wsp__podaci strong{font-size:15px}.wsp__podaci small{font-size:13px;color:#56607a;line-height:1.35}
.wsp__grid{display:grid;gap:22px;margin-top:26px;align-items:stretch}
.wsp__grid--5{grid-template-columns:repeat(5,1fr);gap:18px}.wsp__grid--4{grid-template-columns:repeat(4,1fr)}.wsp__grid--3{grid-template-columns:repeat(3,1fr)}
.wsp__k{background:#fff;border-radius:16px;overflow:hidden;box-shadow:0 8px 24px rgba(20,40,80,.10);transition:transform .2s,box-shadow .2s;display:flex;flex-direction:column}
.wsp__k:hover{transform:translateY(-3px);box-shadow:0 14px 30px rgba(20,40,80,.16)}
.wsp__km img,.wsp__km video{width:100%;aspect-ratio:1/1;object-fit:cover;display:block}
.wsp__km--siroka img{aspect-ratio:43/25}
.wsp__km--tel{background:#f6f8fb;padding:18px 18px 0}.wsp__km--tel img{aspect-ratio:858/1100;object-fit:contain}
.wsp__kt{padding:16px 18px 20px}.wsp__kt strong{display:block;font-size:16.5px;margin-bottom:6px}.wsp__kt p{margin:0;font-size:14.5px;line-height:1.55;color:#3a4458}
.wsp__kt--c{text-align:center}.wsp__kt--c .wsp__st{margin:0 auto 10px}
.wsp__oz{display:inline-block;font-size:13px;font-weight:700;letter-spacing:.6px;text-transform:uppercase;color:#1b4f86;margin-bottom:6px}
.wsp__oz--siva{color:#6b7385}
.wsp__tocka{display:inline-block;width:16px;height:16px;border-radius:50%;margin-bottom:8px;box-shadow:0 0 0 3px #fff,0 0 0 4px #d5deea}
.wsp__st{display:flex;width:34px;height:34px;border-radius:50%;background:#1b4f86;color:#fff;font-weight:800;font-size:15px;align-items:center;justify-content:center;margin-bottom:10px}
.wsp__k--ik{padding:28px 26px;text-align:center;align-items:center}.wsp__k--ik strong{font-size:17px;margin:0 0 6px}.wsp__k--ik p{margin:0;font-size:14.5px;line-height:1.55;color:#3a4458}
.wsp__ikona{width:60px;height:60px;border-radius:50%;background:#e1eaf5;color:#1b4f86;display:flex;align-items:center;justify-content:center;margin-bottom:14px;border:1px solid #1b4f86}
.wsp__vid{position:relative;border-radius:16px;overflow:hidden;box-shadow:0 10px 28px rgba(20,40,80,.14);aspect-ratio:9/16;background:#0d0d0d}
.wsp__vid video{width:100%;height:100%;object-fit:cover;display:block}
.wsp__vz{position:absolute;left:12px;bottom:12px;background:rgba(255,255,255,.94);color:#14213a;font-size:13px;font-weight:700;padding:6px 12px;border-radius:20px}
.wsp__ocj{display:inline-flex;align-items:center;gap:8px;background:#fff;border-radius:30px;padding:8px 18px;font-size:14.5px;box-shadow:0 4px 14px rgba(20,40,80,.08)}
.wsp__ocj strong{font-size:22px;color:#1b4f86}.wsp__zv{color:#e0a33c;letter-spacing:2px;font-size:15px}
.wsp__usp{display:grid;grid-template-columns:1fr 1fr;gap:24px;margin-top:26px}
.wsp__usk{display:grid;grid-template-columns:150px 1fr;gap:24px;align-items:center;background:#f6f8fb;border-radius:18px;padding:26px}
.wsp__usk--nasa{background:#1b4f86;color:#fff}.wsp__usk--nasa .wsp__h3,.wsp__usk--nasa .wsp__oz{color:#fff}.wsp__usk--nasa .wsp__lista li{color:#e7eef8}
.wsp__ustel img{width:100%;height:auto;display:block;border-radius:14px}
.wsp__lista{list-style:none;margin:0;padding:0;display:grid;gap:10px}
.wsp__lista li{position:relative;padding-left:30px;font-size:14.5px;line-height:1.5;list-style:none;color:#3a4458}
.wsp__lista li::before{content:"\2713";position:absolute;left:0;top:1px;width:20px;height:20px;border-radius:50%;background:#fff;color:#1b4f86;font-size:12px;font-weight:800;display:flex;align-items:center;justify-content:center}
.wsp__lista--ne li::before{content:"\2715";background:#e4e7ee;color:#8a91a2}
.wsp__tw{overflow-x:auto;margin-top:22px}
.wsp__tab{width:100%;border-collapse:separate;border-spacing:0;background:#fff;border-radius:16px;overflow:hidden;font-size:15.5px;box-shadow:0 8px 24px rgba(20,40,80,.10)}
.wsp__tab th,.wsp__tab td{padding:16px 18px;border-bottom:1px solid #edf1f6;text-align:center}
.wsp__tab th{background:#14213a!important;color:#fff!important;font-weight:700}.wsp__tab th.wsp__tnasa{background:#1b4f86!important}
.wsp__tab td:first-child,.wsp__tab th:first-child{text-align:left;font-weight:600}
.wsp__tab tr:last-child td{border-bottom:0}
.wsp__da{color:#1f8a4c;font-weight:800;font-size:18px}.wsp__ne{color:#c0392b;font-weight:800;font-size:18px}
.wsp__karw{position:relative;margin-top:24px}
.wsp__kar{display:grid;grid-auto-flow:column;grid-auto-columns:calc((100% - 66px)/4);gap:22px;overflow-x:auto;scroll-snap-type:x mandatory;scrollbar-width:none;padding:4px 2px 10px}
.wsp__kar::-webkit-scrollbar{display:none}
.wsp__kk{scroll-snap-align:start;background:#fff;border-radius:16px;box-shadow:0 8px 24px rgba(20,40,80,.10);overflow:hidden;display:flex;flex-direction:column}
.wsp__kkm{background:#f6f8fb;padding:18px 24px 0}.wsp__kkm img{width:100%;aspect-ratio:1080/1858;object-fit:contain;display:block}
.wsp__kkt{padding:14px 18px 18px;display:flex;gap:12px;align-items:center}.wsp__kkt .wsp__st{flex:0 0 34px;margin:0}.wsp__kkt strong{font-size:15px;line-height:1.35}
.wsp__pus{position:absolute;top:42%;transform:translateY(-50%);width:42px;height:42px;border-radius:50%;border:0;background:#fff;box-shadow:0 4px 14px rgba(0,0,0,.18);font-size:24px;line-height:42px;cursor:pointer;z-index:2;color:#1b4f86;padding:0}
.wsp__pus--l{left:-14px}.wsp__pus--d{right:-14px}
@media (max-width:1100px){.wsp__grid--5{grid-template-columns:repeat(3,1fr)}.wsp__usk{grid-template-columns:110px 1fr}}
@media (max-width:991px){.wsp__grid--4{grid-template-columns:1fr 1fr}.wsp__kar{grid-auto-columns:calc((100% - 44px)/3)}.wsp__usp{grid-template-columns:1fr}}
@media (max-width:767px){
  .wsp__s{padding:48px 0}.wsp__v{padding:0 16px}
  .wsp__dva{grid-template-columns:1fr;gap:26px}
  .wsp__klizi{display:flex;overflow-x:auto;scroll-snap-type:x mandatory;gap:14px;padding-bottom:8px;scrollbar-width:none}.wsp__klizi::-webkit-scrollbar{display:none}
  .wsp__klizi>.wsp__k{flex:0 0 78%;scroll-snap-align:center}
  .wsp__grid--3{grid-template-columns:1fr}.wsp__km--tel img{max-height:300px;margin:0 auto}.wsp__usk .wsp__ustel{max-width:90px}.wsp__grid--4{gap:12px}.wsp__kt{padding:12px 12px 14px}.wsp__kt strong{font-size:15px}.wsp__kt p{font-size:13.5px}
  .wsp__vidovi{display:flex;overflow-x:auto;scroll-snap-type:x mandatory;gap:14px;padding-bottom:6px}.wsp__vidovi>.wsp__vid{flex:0 0 70%;scroll-snap-align:center}
  .wsp__podaci{grid-template-columns:1fr 1fr;gap:8px}.wsp__podaci>div{padding:12px 6px}.wsp__podaci strong{font-size:14px}
  .wsp__usk{grid-template-columns:90px 1fr;gap:16px;padding:18px}
  .wsp__tab{font-size:14px}.wsp__tab th,.wsp__tab td{padding:12px 10px}
  .wsp__kar{grid-auto-columns:72%;gap:14px}.wsp__pus--l{left:4px}.wsp__pus--d{right:4px}
}
</style>
<script>
(function(){document.querySelectorAll('.wsp__karw').forEach(function(w){var k=w.querySelector('.wsp__kar');
  w.querySelectorAll('.wsp__pus').forEach(function(b){b.addEventListener('click',function(){var x=k.firstElementChild;var d=x?x.getBoundingClientRect().width+22:300;k.scrollBy({left:b.classList.contains('wsp__pus--l')?-d:d,behavior:'smooth'});});});
});})();
</script>
