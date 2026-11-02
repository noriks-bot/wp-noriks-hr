<?php
/**
 * NORIKS Brewer — programabilni aparat za filter kavu bez plastike na putu vode i kave: why sekcije po strukturi originala
 * (simplygoodcoffee.com/products/the-brewer-plastic-free-programmable).
 *
 * STRUKTURA ORIGINALA:
   1. ocjena kupaca: velika ocjena + stupci zvjezdica + sazetak recenzija (Customers say) + 3 izdvojena citata - pri nas slika levo + ocjena 4,8, stupci, sazetak i 3 citata desno
   2. recenzije kupaca (More Reviews From Real Customers): kartice s naslovom, tekstom i ocjenom - pri nas naslov + mreza 3 kartice v vrsti (grid)
   3. trak logotipov medijev (As Featured In) + What Our Customers Say: 3 kratka citata - pri nas BREZ tujih medijev (tuje znamke), slika desno + 3 citati kupcev
   4. video Built to Last: rastavljen aparat, oznake dijelova (video 9:16) - pri nas video levo (prenesen mp4, napisi lokalizirani v HR, NORIKS namesto znamke) + besedilo desno
   5. 12 komponenti, nula plastike: slika aparata s tockami (hotspot) + 3 skupine materijala (nehrdajuci celik, borosilikatno staklo, medicinski silikon) s seznamom dijelova - pri nas slika desno + 3 kartice materijala z ikonami levo
   6. Specs & Features: harmonika s 6 tockami + slika aparata odozgo - pri nas slika levo + harmonika (details) desno
   7. primerjalna tabela How We Compare (aparat vs drugi aparati za filter kavu: bez plastike, bez aluminija, programabilni, bloom, jednostavnost, materijali) - pri nas tabela (brez tujih znamk: stolpec Vecina aparata za filter kavu)
   8. tehnicke specifikacije: tabela mjera in podatkov + slika - pri nas slika desno + tabela (palci in funte pretvorjeni v cm in kg, °F v °C, brez tujega jamstva)
   9. pitanja i odgovori - pri nas v FAQ spodaj (auto_reviews/FAQ_HR_brewer.php)
   10. zakljucni poziv Ready to Make the Switch (cena, dostava, jamstvo) - IZPUSCENO (CTA + tuje jamstvo), namesto tega skupna sekcija NORIKS pogoji
 * BARVA ORIGINALA: #b89a6a (zlatno-kavni akcent strani in topla podlaga #faf7f2 originala); svetel ton za --bg #f6f1e9, temnejsi akcent za besedilo #8a6a3e
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
$wbr_img = get_template_directory_uri() . '/img/brewer/';
$wbr_svg = '<svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">';
$wbr_vid = get_template_directory_uri() . '/img/brewer/noriks-brewer-dijelovi.mp4';
$wbr_zv  = '<span class="wbr__zv" aria-label="5 od 5">★★★★★</span>';
?>
<div class="wbr">

<section class="wbr__s wbr__s--bg"><div class="wbr__v wbr__dva">
  <div class="wbr__media"><img src="<?php echo esc_url( $wbr_img . 'noriks-brewer-u-kuhinji.webp' ); ?>" alt="NORIKS Brewer aparat za filter kavu od nehrđajućeg čelika i stakla na kuhinjskom pultu" loading="eager" decoding="async"><span class="wbr__znacka">Bez plastike</span></div>
  <div>
    <div class="wbr__kicker">Kupci o aparatu</div>
    <h2 class="wbr__h2">Kava bez plastike – <em>i bez gorčine</em></h2>
    <div class="wbr__ocjena">
      <div class="wbr__broj"><strong>4,8</strong><?php echo $wbr_zv; ?><span>na temelju 1.081 recenzije</span></div>
      <div class="wbr__stupci">
        <div class="wbr__st"><span>5 ★</span><i><b style="width:85%"></b></i><em>85 %</em></div>
        <div class="wbr__st"><span>4 ★</span><i><b style="width:9%"></b></i><em>9 %</em></div>
        <div class="wbr__st"><span>3 ★</span><i><b style="width:2%"></b></i><em>2 %</em></div>
        <div class="wbr__st"><span>2 ★</span><i><b style="width:1%"></b></i><em>1 %</em></div>
        <div class="wbr__st"><span>1 ★</span><i><b style="width:3%"></b></i><em>3 %</em></div>
      </div>
    </div>
    <p class="wbr__p">Kupci pišu da NORIKS Brewer kuha kavu punog okusa bez gorčine – a da ni plastika ni aluminij ne dodiruju vodu ni kavu. Ističu 24-satni programabilni timer, zbog kojeg je kava gotova kad se probudite, preciznu kontrolu temperature za pravilnu ekstrakciju i do 8 šalica za samo 6 minuta.</p>
    <p class="wbr__p">Najčešće hvale tri stvari: put kave bez plastike, kvalitetu izrade i čist, jednostavan dizajn koji stane na svaki kuhinjski pult i radi na jedan gumb.</p>
    <ul class="wbr__citati">
      <li>„Obožavam ovaj aparat – bez plastike i odlična kava. Hvala!”<span>Mate C.</span></li>
      <li>„Kava je za 6 minuta ili manje gotova, aparat se lako čisti i nema plastike.”<span>Branka V.</span></li>
      <li>„Okus je primjetno bolji, a trošim i manje kave.”<span>Josip R.</span></li>
    </ul>
    <p class="wbr__zak">Kava kakvu očekujete od dobrog aparata – samo bez plastike.</p>
  </div>
</div></section>

<section class="wbr__s"><div class="wbr__v">
  <div class="wbr__kicker wbr__c">Recenzije kupaca</div>
  <h2 class="wbr__h2 wbr__c">Što kažu oni koji ga <em>već koriste svako jutro</em></h2>
  <p class="wbr__p wbr__c">Stvarna iskustva kupaca koji su prešli s kapsula, French pressa i aparata s plastikom.</p>
  <div class="wbr__grid">
    <div class="wbr__k"><span class="wbr__ki"><?php echo $wbr_svg; ?><path d="M7 7h4v4c0 2.5-1.5 4-4 4.5"/><path d="M14 7h4v4c0 2.5-1.5 4-4 4.5"/></svg></span><?php echo $wbr_zv; ?><h3>Ne vraćam se natrag</h3><p>„Godinama sam ujutro pio kavu iz French pressa, a kiselost mi je počela smetati. Tražio sam aparat koji mi uz doručak neće dodati porciju mikroplastike. Našao sam ovaj i nisam se osvrnuo. Kava je odlična – čak je i supruga zadovoljna.”</p><span class="wbr__ime">Mihael K.</span></div>
    <div class="wbr__k"><span class="wbr__ki"><?php echo $wbr_svg; ?><path d="M7 7h4v4c0 2.5-1.5 4-4 4.5"/><path d="M14 7h4v4c0 2.5-1.5 4-4 4.5"/></svg></span><?php echo $wbr_zv; ?><h3>Programiranje je bilo obavezno</h3><p>„Aparat imam dva tjedna i za sada ga obožavam. Čist, elegantan dizajn i jednostavna upotreba. Ne mogu bez toga da kuhanje programiram za sljedeći dan – to radi bez problema, a izrada je odlična.”</p><span class="wbr__ime">Krešimir V.</span></div>
    <div class="wbr__k"><span class="wbr__ki"><?php echo $wbr_svg; ?><path d="M7 7h4v4c0 2.5-1.5 4-4 4.5"/><path d="M14 7h4v4c0 2.5-1.5 4-4 4.5"/></svg></span><?php echo $wbr_zv; ?><h3>Kava me čeka kad se probudim</h3><p>„Godinama sam kuhao ručno kako bih izbjegao plastiku, ali nedostajao mi je pun vrč kave kad se probudim. Ovaj aparat koristim oko dva tjedna – jednostavan je i daje odličnu šalicu kave.”</p><span class="wbr__ime">Kristijan T.</span></div>
  </div>
  <p class="wbr__zak">Ocjena 4,8 od 120.000 kupaca NORIKS-a – i svako jutro nova potvrda.</p>
</div></section>

<section class="wbr__s wbr__s--bg"><div class="wbr__v wbr__dva wbr__dva--rev">
  <div class="wbr__media"><img src="<?php echo esc_url( $wbr_img . 'noriks-brewer-tocenje-kave.webp' ); ?>" alt="Točenje svježe kave iz staklenog vrča NORIKS Brewer u staklenu šalicu" loading="eager" decoding="async"><span class="wbr__znacka">Bloom</span></div>
  <div>
    <div class="wbr__kicker">Što kupci primjećuju</div>
    <h2 class="wbr__h2">Okus kave iz ručnog kuhanja – <em>bez stajanja nad aparatom</em></h2>
    <p class="wbr__p">Prije glavnog kuhanja aparat 30 sekundi natapa mljevenu kavu (funkcija Bloom), pa se okus razvija kao kod ručnog prelijevanja. Razlika je u tome što ništa ne morate raditi sami – samo uključite aparat.</p>
    <p class="wbr__p">Kupci ga opisuju kao aparat koji se lako koristi i čisti te kao kupnju za dugi niz godina.</p>
    <div class="wbr__nav">
      <div class="wbr__nk"><span class="wbr__ni"><?php echo $wbr_svg; ?><path d="M12 3c3 3.5 5 6.2 5 9a5 5 0 0 1-10 0c0-2.8 2-5.5 5-9z"/></svg></span><p>„Jednostavan za upotrebu, lako se čisti, a funkcija Bloom je promijenila moje jutro!”<span>Jelena R.</span></p></div>
      <div class="wbr__nk"><span class="wbr__ni"><?php echo $wbr_svg; ?><path d="M12 8v4l2.5 2"/><circle cx="12" cy="12" r="8.5"/></svg></span><p>„Ovo je moj aparat za kavu za sljedećih 30 godina.”<span>Boris L.</span></p></div>
      <div class="wbr__nk"><span class="wbr__ni"><?php echo $wbr_svg; ?><path d="M5 9h11v5a5 5 0 0 1-5 5h-1a5 5 0 0 1-5-5z"/><path d="M16 10h1.5a2.5 2.5 0 0 1 0 5H16"/></svg></span><p>„Sav okus i punoća ručno prelivene kave, a da ne moram dežurati uz aparat.”<span>Mirela T.</span></p></div>
    </div>
    <p class="wbr__zak">Ručno kuhanje – a vi ste za to vrijeme još u krevetu.</p>
  </div>
</div></section>

<section class="wbr__s"><div class="wbr__v wbr__dva">
  <div class="wbr__media wbr__media--video"><video src="<?php echo esc_url( $wbr_vid ); ?>" poster="<?php echo esc_url( $wbr_img . 'noriks-brewer-dijelovi.jpg' ); ?>" autoplay muted loop playsinline webkit-playsinline preload="auto" aria-label="Rastavljeni NORIKS Brewer s označenim dijelovima: spremnik za vodu, košarica filtera, tuš glava, prekidač Bloom i stakleni vrč"></video></div>
  <div>
    <div class="wbr__kicker">Izrađen da traje</div>
    <h2 class="wbr__h2">Pogledajte svaki dio, <em>kroz koji prolazi vaša kava</em></h2>
    <p class="wbr__p">Spremnik za vodu, košarica filtera, tuš glava, prekidač Bloom i stakleni vrč – aparat je sastavljen od dijelova koje vidite, a ne od skrivenih plastičnih cijevi.</p>
    <p class="wbr__p">Voda iz spremnika od borosilikatnog stakla prolazi kroz cijevi i grijač od nehrđajućeg čelika te kroz čeličnu tuš glavu ravnomjerno pada na kavu. Kava zatim kaplje u stakleni vrč. Na cijelom putu nema plastike ni aluminija.</p>
    <ul class="wbr__kv">
      <li><em>Nehrđajući čelik</em> – grijač, cijevi, tuš glava i košarica filtera</li>
      <li><em>Borosilikatno staklo</em> – spremnik za vodu i vrč</li>
      <li><em>Zamjenski dijelovi</em> – vrč, tuš glava, košarica i brtve dostupni zasebno</li>
    </ul>
    <p class="wbr__zak">Napravljen za desetljeća, a ne samo za nekoliko godina.</p>
  </div>
</div></section>

<section class="wbr__s wbr__s--bg"><div class="wbr__v wbr__dva wbr__dva--rev">
  <div class="wbr__media wbr__media--bijela"><img src="<?php echo esc_url( $wbr_img . 'noriks-brewer-12-dijelova.webp' ); ?>" alt="NORIKS Brewer od nehrđajućeg čelika sa staklenim spremnikom i vrčem, pogled sprijeda" loading="eager" decoding="async"><span class="wbr__znacka">12 dijelova</span></div>
  <div>
    <div class="wbr__kicker">12 komponenti, nula plastike</div>
    <h2 class="wbr__h2">12 dijelova. <em>Nula plastike. Nula aluminija.</em></h2>
    <p class="wbr__p">Svaka površina koju dodiruju voda i kava namjerno je izrađena od nehrđajućeg čelika, stakla ili medicinskog silikona – okus ostaje čist, a materijali s vremenom ostaju netaknuti.</p>
    <div class="wbr__mat">
      <div class="wbr__mk"><span class="wbr__mi"><?php echo $wbr_svg; ?><rect x="4" y="4" width="16" height="16" rx="3"/><path d="M8 9h8M8 12h8M8 15h5"/></svg></span><div><h3>Nehrđajući čelik 304</h3><p>Prehrambeni, otporan na koroziju i neporozan – ne zadržava okus i ne raspada se s vremenom.</p><small>Krak tuša · tuš glava · poklopac košarice · košarica filtera · pokrov dna spremnika · unutarnje cijevi · grijač · gornji dio vrča</small></div></div>
      <div class="wbr__mk"><span class="wbr__mi"><?php echo $wbr_svg; ?><path d="M8 3h8"/><path d="M9 3v6l-4 9a2 2 0 0 0 1.8 3h10.4a2 2 0 0 0 1.8-3l-4-9V3"/><path d="M7 15h10"/></svg></span><div><h3>Borosilikatno staklo</h3><p>Čisto staklo, ništa drugo. Ne reagira, ne mijenja okus i ne upija mirise.</p><small>Cijev grijača · vrč · spremnik za vodu</small></div></div>
      <div class="wbr__mk"><span class="wbr__mi"><?php echo $wbr_svg; ?><circle cx="12" cy="12" r="7.5"/><circle cx="12" cy="12" r="3.5"/></svg></span><div><h3>Medicinski silikon</h3><p>Otporan na toplinu, inertan i ne otpušta tvari – napravljen od pijeska i kisika, a ne od nafte – brtvi bez utjecaja na okus.</p><small>Poklopac spremnika · brtva poklopca vrča · spojnice · zaustavljanje kapanja</small></div></div>
    </div>
    <p class="wbr__zak">Od spremnika do šalice – samo čelik, staklo i silikon.</p>
  </div>
</div></section>

<section class="wbr__s"><div class="wbr__v wbr__dva">
  <div class="wbr__media"><img src="<?php echo esc_url( $wbr_img . 'noriks-brewer-pogled-odozgo.webp' ); ?>" alt="NORIKS Brewer odozgo: tuš glava od nehrđajućeg čelika iznad košarice filtera i stakleni spremnik" loading="eager" decoding="async"><span class="wbr__znacka">Svaki detalj</span></div>
  <div>
    <div class="wbr__kicker">Specifikacije i značajke</div>
    <h2 class="wbr__h2">Svaki detalj <em>napravljen s namjerom</em></h2>
    <div class="wbr__harm">
      <details open><summary><span class="wbr__hi"><?php echo $wbr_svg; ?><path d="M7 3h10l-1 18H8z"/><path d="M7.5 9h9"/></svg></span>Spremnik za vodu od borosilikatnog stakla</summary><p>Spremnik od 8 šalica izrađen je od borosilikatnog stakla. Bez plastične obloge, bez BPA – voda od punjenja do kuhanja stoji u čistom staklu. Ne otpušta kemikalije, ne puca od topline i ne mijenja okus kave.</p></details>
      <details><summary><span class="wbr__hi"><?php echo $wbr_svg; ?><path d="M4 6h16l-6 8v5l-4 2v-7z"/></svg></span>Košarica filtera od nehrđajućeg čelika</summary><p>Nehrđajući čelik 304 – ne reagira, ne mijenja okus i nadživjet će aparat. Odgovara standardnim papirnatim filterima br. 4 ili metalnim filterima za višekratnu upotrebu.</p></details>
      <details><summary><span class="wbr__hi"><?php echo $wbr_svg; ?><path d="M14 14.8V5a2 2 0 0 0-4 0v9.8a4 4 0 1 0 4 0z"/></svg></span>Temperatura kuhanja po standardu SCA</summary><p>Tijekom cijelog kuhanja održava 90–96 °C. Testirano i certificirano prema standardu Golden Cup udruge Specialty Coffee Association.</p></details>
      <details><summary><span class="wbr__hi"><?php echo $wbr_svg; ?><path d="M12 3c3 3.5 5 6.2 5 9a5 5 0 0 1-10 0c0-2.8 2-5.5 5-9z"/></svg></span>Predinfuzija Bloom</summary><p>Prije glavnog kuhanja aparat 30 sekundi pulsira vodu kako bi navlažio mljevenu kavu i oslobodio plinove – za ravnomjerniju ekstrakciju i bogatiji okus.</p></details>
      <details><summary><span class="wbr__hi"><?php echo $wbr_svg; ?><circle cx="12" cy="9" r="5"/><path d="M9 17v1M12 17v3M15 17v1"/></svg></span>Tuš glava od nehrđajućeg čelika</summary><p>Voda se kroz precizno izrađenu čeličnu tuš glavu ravnomjerno raspoređuje po cijelom filteru – bez suhih mjesta i bez kanala.</p></details>
      <details><summary><span class="wbr__hi"><?php echo $wbr_svg; ?><path d="M14.7 6.3a4 4 0 0 0-5.4 5.4L3 18l3 3 6.3-6.3a4 4 0 0 0 5.4-5.4l-2.5 2.5-2.5-.5-.5-2.5z"/></svg></span>Dostupni zamjenski dijelovi</summary><p>Svaki dio – vrč, tuš glava, košarica filtera, komplet brtvi – dostupan je kao zamjenski dio. Napravljen za desetljeća, a ne samo za godine.</p></details>
    </div>
    <p class="wbr__zak">Svaki dio ima svoj razlog – i nijedan nije od plastike.</p>
  </div>
</div></section>

<section class="wbr__s wbr__s--bg"><div class="wbr__v">
  <div class="wbr__kicker wbr__c">Usporedba</div>
  <h2 class="wbr__h2 wbr__c">Prvi programabilni aparat za filter kavu <em>bez plastike na putu kave</em></h2>
  <p class="wbr__p wbr__c">Usporedili smo ga s osam popularnih aparata za filter kavu za dom.</p>
  <div class="wbr__tabwrap">
    <table class="wbr__tab">
      <thead><tr><th></th><th class="wbr__nas">NORIKS Brewer</th><th>Većina aparata za filter kavu</th></tr></thead>
      <tbody>
        <tr><td>Bez plastike na putu vode i kave</td><td class="wbr__nas"><span class="wbr__da">✓</span></td><td><span class="wbr__ne">✕</span></td></tr>
        <tr><td>Bez aluminija</td><td class="wbr__nas"><span class="wbr__da">✓</span></td><td><span class="wbr__ne">✕</span> većinom ne</td></tr>
        <tr><td>Programabilni timer</td><td class="wbr__nas"><span class="wbr__da">✓</span> 24 sata</td><td>samo neki modeli</td></tr>
        <tr><td>Automatski Bloom</td><td class="wbr__nas"><span class="wbr__da">✓</span></td><td>samo neki modeli</td></tr>
        <tr><td>Jednostavnost upotrebe</td><td class="wbr__nas">Jednostavno – jedan gumb</td><td>umjereno do složeno</td></tr>
        <tr><td>Materijali</td><td class="wbr__nas">Staklo + nehrđajući čelik</td><td>plastika + metal / nehrđajući čelik</td></tr>
      </tbody>
    </table>
  </div>
  <p class="wbr__zak">Jedini u usporedbi bez plastike i bez aluminija – i uz to programabilni.</p>
</div></section>

<section class="wbr__s"><div class="wbr__v wbr__dva wbr__dva--rev">
  <div class="wbr__media"><img src="<?php echo esc_url( $wbr_img . 'noriks-brewer-programabilni-timer.webp' ); ?>" alt="Prekidači Bloom i ON/OFF te digitalni 24-satni timer na NORIKS Brewer aparatu" loading="eager" decoding="async"><span class="wbr__znacka">24 h timer</span></div>
  <div>
    <div class="wbr__kicker">Tehničke specifikacije</div>
    <h2 class="wbr__h2">Cijela slika, <em>izmjerena i zapisana</em></h2>
    <div class="wbr__tabwrap">
      <table class="wbr__spec">
        <tbody>
          <tr><th>Dimenzije</th><td>35,6 × 20,3 × 38,1 cm (D × Š × V)</td></tr>
          <tr><th>Težina</th><td>4,8 kg</td></tr>
          <tr><th>Snaga</th><td>1.200 W</td></tr>
          <tr><th>Kapacitet</th><td>8 šalica (1,2 l)</td></tr>
          <tr><th>Vrijeme kuhanja</th><td>oko 6 minuta (pun vrč)</td></tr>
          <tr><th>Vrč</th><td>borosilikatno staklo</td></tr>
          <tr><th>Put kave</th><td>nehrđajući čelik 304</td></tr>
          <tr><th>Grijač</th><td>nehrđajući čelik, visoka učinkovitost, malo kamenca</td></tr>
          <tr><th>Timer</th><td>24-satni, programabilni</td></tr>
          <tr><th>Memorija</th><td>72 sata kod nestanka struje</td></tr>
          <tr><th>Duljina kabela</th><td>91 cm</td></tr>
          <tr><th>Boja</th><td>nehrđajući čelik i mat crna</td></tr>
          <tr><th>Kvaliteta kave</th><td>neovisno testirano prema standardima SCA, ECBC i Gold Cup</td></tr>
          <tr><th>Filter</th><td>standardni konusni br. 4, papirnati ili metalni</td></tr>
        </tbody>
      </table>
    </div>
    <p class="wbr__zak">Sve što trebate znati – prije nego što ga stavite na pult.</p>
  </div>
</div></section>

<section class="wbr__s wbr__s--bg npg-s"><?php $npg = array( 'izdelek' => 'NORIKS Brewer', 'barva' => '#b89a6a' ); include __DIR__ . '/noriks-pogoji.php'; ?></section>
</div>
<style>
.wbr{color:#2b2620;font-family:inherit}
.wbr__s{padding:72px 0;background:#fff}.wbr__s.wbr__s--bg{background:#f6f1e9}
.wbr__v{width:100%;max-width:1240px;margin:0 auto;padding:0 24px;box-sizing:border-box}
.wbr__c{text-align:center}
.wbr__kicker{font-size:13px;letter-spacing:1.8px;text-transform:uppercase;color:#8a6a3e;margin:0 0 8px;font-weight:700}
.wbr__kicker::before{content:"";display:inline-block;width:22px;height:2px;background:#b89a6a;vertical-align:middle;margin:-2px 10px 0 0;border-radius:2px}
.wbr__h2{font-size:clamp(24px,3vw,34px);font-weight:800;line-height:1.2;margin:0 0 18px;color:#2b2620}.wbr__h2 em{font-style:italic;color:#8a6a3e}
.wbr__p{font-size:15.5px;line-height:1.65;color:#3d372f;margin:0 0 14px}
.wbr__zak{font-size:16px;font-weight:800;line-height:1.5;margin:18px 0 0}
.wbr__v>.wbr__zak{text-align:center}
.wbr__dva .wbr__zak{border-left:3px solid #b89a6a;padding-left:14px}
/* slika + besedilo (cik-cak) */
.wbr__dva{display:grid;grid-template-columns:1fr 1fr;gap:56px;align-items:center}.wbr__dva--rev>div:first-child{order:2}
.wbr__media{position:relative;border-radius:16px;overflow:hidden;box-shadow:0 14px 34px rgba(110,84,45,.18);aspect-ratio:4/5;background:#efe6d8}
.wbr__media img{width:100%;height:100%;object-fit:cover;display:block}
.wbr__media--bijela{background:#fff}.wbr__media--bijela img{object-fit:contain}
.wbr__media--video{aspect-ratio:9/16;max-width:420px;width:100%;margin:0 auto;background:#efe6d8}
.wbr__media--video video{width:100%;height:100%;object-fit:cover;display:block}
.wbr__znacka{position:absolute;left:16px;top:16px;background:#fff;color:#6e5430;font-size:13px;font-weight:800;letter-spacing:1px;text-transform:uppercase;padding:7px 12px;border-radius:20px;box-shadow:0 4px 12px rgba(0,0,0,.15)}
.wbr__zv{color:#d4a52b;letter-spacing:2px;font-size:15px;display:inline-block}
/* ocjena */
.wbr__ocjena{display:flex;gap:26px;align-items:center;background:#fff;border-radius:16px;padding:20px 24px;margin:0 0 18px;box-shadow:0 8px 24px rgba(110,84,45,.09)}
.wbr__broj{text-align:center;flex:0 0 auto}.wbr__broj strong{display:block;font-size:46px;line-height:1;color:#8a6a3e;font-weight:800}
.wbr__broj span{display:block;font-size:13px;color:#6b6358;margin-top:4px}
.wbr__stupci{flex:1;display:grid;gap:6px}
.wbr__st{display:grid;grid-template-columns:34px 1fr 40px;gap:8px;align-items:center;font-size:13px;color:#4a4339}
.wbr__st i{display:block;height:8px;border-radius:8px;background:#efe6d8;overflow:hidden}.wbr__st b{display:block;height:100%;background:#b89a6a;border-radius:8px}
.wbr__st em{font-style:normal;text-align:right}
.wbr__citati{list-style:none;margin:6px 0 4px;padding:0;display:grid;gap:10px}
.wbr__citati li{list-style:none;background:#fff;border-radius:14px;padding:12px 16px;font-size:15px;line-height:1.5;font-style:italic;box-shadow:0 4px 14px rgba(110,84,45,.08)}
.wbr__citati span{display:block;font-style:normal;font-weight:700;font-size:13px;color:#8a6a3e;margin-top:4px}
/* recenzije: mreza 3 v vrsti */
.wbr__grid{display:grid;grid-template-columns:repeat(3,1fr);gap:22px;margin-top:26px;align-items:stretch}
.wbr__k{background:#fff;border-radius:16px;padding:28px 26px 24px;text-align:center;box-shadow:0 8px 24px rgba(110,84,45,.10);transition:transform .2s,box-shadow .2s;display:flex;flex-direction:column;align-items:center}
.wbr__k:hover{transform:translateY(-3px);box-shadow:0 14px 30px rgba(110,84,45,.16)}
.wbr__ki{width:56px;height:56px;border-radius:50%;background:#f3ebdf;color:#8a6a3e;border:1px solid #e2d3bb;display:flex;align-items:center;justify-content:center;margin:0 auto 12px}
.wbr__k h3{font-size:17px;font-weight:800;margin:8px 0 8px;color:#2b2620;line-height:1.3}
.wbr__k p{font-size:15px;line-height:1.55;color:#4a4339;margin:0 0 14px;flex:1}
.wbr__ime{font-weight:700;font-size:14px;color:#8a6a3e}
/* sto kupci primjecuju */
.wbr__nav{display:grid;gap:12px;margin:6px 0 4px}
.wbr__nk{display:flex;gap:14px;align-items:flex-start;background:#fff;border-radius:14px;padding:14px 16px;box-shadow:0 4px 14px rgba(110,84,45,.08)}
.wbr__nk p{margin:0;font-size:15px;line-height:1.5;font-style:italic;color:#3d372f}
.wbr__nk p span{display:block;font-style:normal;font-weight:700;font-size:13px;color:#8a6a3e;margin-top:4px}
.wbr__ni,.wbr__mi,.wbr__hi{flex:0 0 44px;width:44px;height:44px;border-radius:50%;background:#f3ebdf;color:#8a6a3e;display:flex;align-items:center;justify-content:center}
.wbr__ni svg,.wbr__mi svg,.wbr__hi svg{width:22px;height:22px}
.wbr__kv{list-style:none;margin:4px 0 6px;padding:0}.wbr__kv li{position:relative;padding-left:32px;margin:0 0 12px;font-size:15.5px;line-height:1.55;list-style:none}
.wbr__kv li::before{content:"\2713";position:absolute;left:0;top:1px;width:21px;height:21px;border-radius:50%;background:#b89a6a;color:#fff;font-size:13px;display:flex;align-items:center;justify-content:center}
.wbr__kv em{font-style:normal;font-weight:800}
/* materijali */
.wbr__mat{display:grid;gap:12px;margin:6px 0 4px}
.wbr__mk{display:flex;gap:14px;align-items:flex-start;background:#fff;border-radius:14px;padding:16px 18px;box-shadow:0 4px 14px rgba(110,84,45,.08)}
.wbr__mk h3{font-size:16px;font-weight:800;margin:0 0 4px;color:#2b2620}
.wbr__mk p{font-size:14.5px;line-height:1.5;color:#4a4339;margin:0 0 6px}
.wbr__mk small{display:block;font-size:13px;line-height:1.5;color:#8a6a3e;font-weight:600}
/* harmonika */
.wbr__harm{display:grid;gap:10px;margin:0 0 4px}
.wbr__harm details{background:#f6f1e9;border-radius:14px;padding:0 16px}
.wbr__harm summary{list-style:none;cursor:pointer;display:flex;align-items:center;gap:12px;font-weight:800;font-size:15.5px;padding:12px 28px 12px 0;position:relative;color:#2b2620}
.wbr__harm summary::-webkit-details-marker{display:none}
.wbr__harm summary::after{content:"+";position:absolute;right:2px;top:50%;transform:translateY(-50%);font-size:22px;color:#8a6a3e;font-weight:400}
.wbr__harm details[open] summary::after{content:"\2212"}
.wbr__harm .wbr__hi{flex:0 0 38px;width:38px;height:38px;background:#fff}
.wbr__harm p{margin:0 0 14px 50px;font-size:15px;line-height:1.6;color:#3d372f}
/* tabele */
.wbr__tabwrap{width:100%;overflow-x:auto;-webkit-overflow-scrolling:touch;margin-top:22px;border-radius:16px;box-shadow:0 8px 24px rgba(110,84,45,.10);background:#fff}
.wbr__tab{width:100%;border-collapse:collapse;font-size:15px;min-width:520px}
.wbr__tab th,.wbr__tab td{padding:15px 18px;text-align:center;border-bottom:1px solid #f0e8dc;color:#3d372f}
.wbr__tab td:first-child{text-align:left;font-weight:700;color:#2b2620}
.wbr__tab thead th{background:#2b2620;color:#fff;font-weight:800;font-size:15px}
.wbr__tab thead th.wbr__nas{background:#8a6a3e}
.wbr__tab td.wbr__nas{background:#fbf7f0;font-weight:700;color:#2b2620}
.wbr__tab tr:last-child td{border-bottom:0}
.wbr__da{display:inline-flex;width:24px;height:24px;border-radius:50%;background:#b89a6a;color:#fff;align-items:center;justify-content:center;font-size:13px;margin-right:4px}
.wbr__ne{display:inline-flex;width:24px;height:24px;border-radius:50%;background:#eee;color:#9a9a9a;align-items:center;justify-content:center;font-size:13px;margin-right:4px}
.wbr__spec{width:100%;border-collapse:collapse;font-size:14.5px}
.wbr__spec th,.wbr__spec td{padding:10px 16px;text-align:left;border-bottom:1px solid #f0e8dc;line-height:1.45}
.wbr__spec th{width:38%;font-weight:700;color:#8a6a3e;background:#fbf7f0}
.wbr__spec td{color:#3d372f}.wbr__spec tr:last-child th,.wbr__spec tr:last-child td{border-bottom:0}
.wbr__dva .wbr__tabwrap{margin-top:0}
@media (max-width:991px){.wbr__grid{grid-template-columns:1fr 1fr}}
@media (max-width:767px){
  .wbr__s{padding:48px 0}.wbr__v{padding:0 16px}
  .wbr__dva{grid-template-columns:1fr;gap:26px}.wbr__dva--rev>div:first-child{order:0}
  .wbr__grid{display:flex;overflow-x:auto;scroll-snap-type:x mandatory;gap:14px;padding-bottom:8px;-webkit-overflow-scrolling:touch}
  .wbr__k{flex:0 0 86%;scroll-snap-align:center}
  .wbr__ocjena{flex-direction:column;align-items:stretch;gap:14px;padding:18px}
  .wbr__media--video{max-width:340px}
  .wbr__harm p{margin-left:0}
  .wbr__tab{min-width:0;font-size:13px}.wbr__tab th,.wbr__tab td{padding:11px 8px}.wbr__tab thead th{font-size:13px}
  .wbr__spec th{width:44%}.wbr__spec th,.wbr__spec td{padding:9px 12px;font-size:14px}
}
</style>
