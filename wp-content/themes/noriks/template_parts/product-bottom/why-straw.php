<?php
/**
 * NORIKS AquaStraw — filtar-slamka za vodu za hitne slucajeve: why sekcije po strukturi originala
 * (shoppureflow.net/products/pureflow-emergency-water-filter-straw-system).
 *
 * (opis pod gumbom, od vrha navzdol)
 * STRUKTURA ORIGINALA:
   1. "Trusted By Families" - naslov + karusel 5 UGC videov - pri nas naslov + 5 videov v vrsti/karusel (napisi prevedeni v HR, overlay)
   2. "Built To Work When It Matters Most" - 4 kartice faz filtracije + video razstavljanja + trak 4 stevilk (99,99 % / 0,01 µ / 1.800 gal / bez roka) - pri nas video levo (brez angleskih oznak), 4 kartice faz desno, trak stevilk spodaj (galoni v litre)
   3. ponovljen naslov + CTA gumb - pri nas izpusceno (brez CTA blokov)
   4. "Every Straw Inspected" - uvod + 4 kartice z ikonami (materiali, 99,99 % laboratorij, pod tlakom, nikad ne istjece) + slika - pri nas uvod, 4 kartice z ikonami in slika (NORIKS na slamkah)
   5. "Real Survival Gear VS Drawer Filler" - primerjalna tabela 9 vrstic (naš / drugi) - pri nas <table> z istimi vrsticami
   6. "See Why Families Are Switching" + CTA - pri nas izpusceno (brez CTA blokov)
   7. "What Our Customers Say" (widget z mnenji) - pri nas ocena + 3 kartice mnenj (prevedena z originala)
   8. "Our 30-Day Guarantee" - ikona + besedilo - pri nas ikona + besedilo o 30 dneh za povrat
   9. "Real Families. Real Peace of Mind." + CTA - pri nas izpusceno (brez CTA blokov)
  10. FAQ - pri nas v FAQ spodaj (auto_reviews/FAQ_HR_straw.php)
  11. 3 mnenja s fotografijo (Robert T, Lori N, Karen A) - pri nas 3 kartice s fotografijo, hrvaska imena
  12. "One Less Thing to Worry About" + CTA - pri nas zakljucni stavek v pogojih
  13. pogoji trgovine - pri nas skupna sekcija NORIKS pogoji
 * BARVA ORIGINALA: #bf4101 (oranzna slamke in gumbov originala); svetel ton za --bg #fbf1ea
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
$wst_t   = get_template_directory_uri() . '/img/straw/';
$wst_i   = function ( $f ) use ( $wst_t ) { return esc_url( $wst_t . $f ); };
$wst_vid = function ( $f, $alt ) use ( $wst_t ) {
	return '<video src="' . esc_url( $wst_t . $f . '.mp4' ) . '" poster="' . esc_url( $wst_t . $f . '.jpg' ) . '" autoplay muted loop playsinline webkit-playsinline preload="metadata" aria-label="' . esc_attr( $alt ) . '"></video>';
};
$wst_svg = '<svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">';
$wst_da  = '<span class="wst__da" aria-label="da"><svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="currentColor" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round"><polyline points="4 12 9.5 17.5 20 7"/></svg></span>';
$wst_ne  = '<span class="wst__ne" aria-label="ne"><svg viewBox="0 0 24 24" width="12" height="12" fill="none" stroke="currentColor" stroke-width="2.6" stroke-linecap="round"><path d="M6.5 6.5l11 11M17.5 6.5l-11 11"/></svg></span>';
$wst_tab = array(
	array( 'Što je u paketu', 'Slamka + komplet za filtraciju', 'vrećica, crijevo i šprica za ispiranje', 'Samo slamka', 'većina nema ništa za punjenje lonca' ),
	array( 'Preciznost filtracije', '0,01 mikrona', 'blokira 99,99 % bakterija i protozoa', '0,2 mikrona', '20× veće pore' ),
	array( 'Kapacitet filtra', 'do 6.800 litara', 'pet godina dnevne pitke vode', 'oko 3.800 litara', 'otprilike pola vijeka trajanja' ),
	array( 'Rok trajanja', 'bez roka trajanja', 'spremite suhu i zaboravite', '3 do 5 godina', 'većina istekne u ladici' ),
	array( 'Sigurnost materijala', 'materijali za kontakt s hranom, bez BPA', '', 'materijali često nisu navedeni', 'ne zna se što je u plastici' ),
	array( 'Kako radi', 'potpuno mehanički', 'bez baterija, kemikalija i pokretnih dijelova', 'često kemijski ili s ugljenom', 's vremenom se troši' ),
	array( 'Kad uspori', 'šprica za ispiranje u paketu', 'istisnete prljavštinu i nastavite', 'često ga nije moguće očistiti', 'protok samo slabi' ),
	array( 'Provjera kvalitete', 'testirano u neovisnom laboratoriju', 'i pod tlakom: membrana, brtve i nepropusnost', 'testiranje ovisi o proizvođaču', 'ne objavljuju svi postupak' ),
	array( 'Namijenjeno za', 'izvanredne situacije', 'pripremljenost obitelji, prave katastrofe', 'vikend izlete', 'za stazu, ne za oluju' ),
);
?>
<div class="wst">

<section class="wst__s wst__s--bg"><div class="wst__v">
  <div class="wst__kicker wst__c">Iskustva kupaca</div>
  <h2 class="wst__h2 wst__c">Obitelji mu vjeruju – <em>pogledajte sami</em></h2>
  <p class="wst__p wst__c">Mutna lokva, potok, šalica vode iz dvorišta – kupci su je isprobali na vodi koju inače nikad ne biste pili. Evo što se dogodilo.</p>
  <div class="wst__ugc">
    <div class="wst__uk"><?php echo $wst_vid( 'noriks-straw-video-potok', 'Kupac pije vodu iz potoka kroz NORIKS AquaStraw' ); ?></div>
    <div class="wst__uk"><?php echo $wst_vid( 'noriks-straw-video-blato', 'Kupkinja pije iz šalice s blatnom vodom kroz NORIKS AquaStraw' ); ?></div>
    <div class="wst__uk"><?php echo $wst_vid( 'noriks-straw-video-rijeka', 'Kupkinja pije iz rijeke kroz NORIKS AquaStraw' ); ?></div>
    <div class="wst__uk"><?php echo $wst_vid( 'noriks-straw-video-salica', 'Muškarac pije prljavu vodu iz dvorišta kroz NORIKS AquaStraw' ); ?></div>
    <div class="wst__uk"><?php echo $wst_vid( 'noriks-straw-video-lokva', 'Kupac pije iz lokve kroz NORIKS AquaStraw' ); ?></div>
  </div>
</div></section>

<section class="wst__s"><div class="wst__v">
  <div class="wst__dva">
    <div class="wst__media wst__media--kv"><?php echo $wst_vid( 'noriks-straw-video-filtar', 'Unutrašnjost NORIKS AquaStraw filtra – četiri faze filtracije' ); ?><span class="wst__znacka">4 faze</span></div>
    <div>
      <div class="wst__kicker">Kako radi</div>
      <h2 class="wst__h2">Napravljena da radi <em>kad je najvažnije</em></h2>
      <p class="wst__p"><strong>Četiri faze mehaničke filtracije</strong>, do 6.800 litara vode i komplet za filtraciju u svakoj kutiji.</p>
      <div class="wst__faze">
        <div class="wst__fk"><span class="wst__fn">1</span><div><strong>Gruba mrežica</strong><p>Zadržava pijesak, blato i prljavštinu prije nego što stignu do membrane.</p></div></div>
        <div class="wst__fk"><span class="wst__fn">2</span><div><strong>Sloj za stabilizaciju protoka</strong><p>Ujednačuje tlak preko membrane pa se lako i ravnomjerno pije.</p></div></div>
        <div class="wst__fk"><span class="wst__fn">3</span><div><strong>Medicinski PP pamuk</strong><p>Ovdje se zadržavaju sitni talog i mikročestice.</p></div></div>
        <div class="wst__fk"><span class="wst__fn">4</span><div><strong>Šuplja vlakna od 0,01 mikrona</strong><p>Tisuće sićušnih vlakana fizički blokiraju bakterije, protozoe i mikroplastiku.</p></div></div>
      </div>
    </div>
  </div>
  <div class="wst__brojke">
    <div><strong>99,99 %</strong><span>uklonjenih bakterija</span></div>
    <div><strong>0,01 µ</strong><span>preciznost membrane</span></div>
    <div><strong>6.800 l</strong><span>po jednoj slamci</span></div>
    <div><strong>∞</strong><span>bez roka trajanja</span></div>
  </div>
</div></section>

<section class="wst__s wst__s--bg"><div class="wst__v">
  <div class="wst__dva wst__dva--rev">
    <div class="wst__media"><img src="<?php echo $wst_i( 'noriks-straw-provjereno-u-laboratoriju.webp' ); ?>" alt="Dvije NORIKS AquaStraw filtar-slamke" loading="eager" decoding="async"><span class="wst__znacka">Provjereno</span></div>
    <div>
      <div class="wst__kicker">Nije jeftina kopija</div>
      <h2 class="wst__h2">Svaka slamka pregledana. <em>Svaka tvrdnja provjerena.</em></h2>
      <p class="wst__p">Većina „slamki za preživljavanje” su netestirani tvornički dijelovi koji iz skladišta idu ravno do vas. Naše prolaze <strong>provjeru u četiri koraka</strong> prije nego što dođu do vode vaše obitelji.</p>
      <div class="wst__kar">
        <div class="wst__kk"><span class="wst__ik"><?php echo $wst_svg; ?><path d="M8 3h8l-1 4v3l3 9a2 2 0 0 1-2 2H8a2 2 0 0 1-2-2l3-9V7z"/><path d="M7.5 14h9"/></svg></span><strong>Materijali kroz koje možete piti</strong><p>Polipropilen bez BPA, prikladan za kontakt s hranom – isti standard kao u IV filtrima i priboru za hranjenje beba. Bez nepoznate plastike.</p></div>
        <div class="wst__kk"><span class="wst__ik"><?php echo $wst_svg; ?><path d="M9 3v6L4 19a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2l-5-10V3"/><path d="M8 3h8"/><path d="M7 15h10"/></svg></span><strong>99,99 % – provjereno izvan kuće</strong><p>Neovisni laboratoriji potvrđuju da svaka serija uklanja 99,99 % bakterija, protozoa i mikroplastike.</p></div>
        <div class="wst__kk"><span class="wst__ik"><?php echo $wst_svg; ?><circle cx="12" cy="13" r="7"/><path d="M12 13l3-3"/><path d="M9 3h6"/></svg></span><strong>Testirano pod tlakom</strong><p>Neovisno ispitivanje cjelovitosti membrane, čvrstoće brtvi i nepropusnosti.</p></div>
        <div class="wst__kk"><span class="wst__ik"><?php echo $wst_svg; ?><path d="M18.2 8.5a5 5 0 1 1 0 7c-2.3-2.3-4-7-6.2-7s-3.9 4.7-6.2 7a5 5 0 1 1 0-7"/></svg></span><strong>Nikad ne istječe</strong><p>Mnogi filtri istječu za 3 do 5 godina. Naš nema rok trajanja kad je spremljen suh i zaštićen od smrzavanja.</p></div>
      </div>
    </div>
  </div>
</div></section>

<section class="wst__s"><div class="wst__v">
  <div class="wst__kicker wst__c">Usporedba</div>
  <h2 class="wst__h2 wst__c">Prava oprema za izvanredne situacije <em>ili samo još jedna stvar u ladici</em></h2>
  <p class="wst__p wst__c">Većina slamki za preživljavanje je oprema za planinarenje, napravljena za subotnje popodne na stazi – ne za dan kad iz slavine prestane teći voda.</p>
  <div class="wst__tw">
    <table class="wst__tab">
      <thead><tr><th></th><th class="wst__mi">NORIKS AquaStraw</th><th>Druge slamke</th></tr></thead>
      <tbody>
      <?php foreach ( $wst_tab as $r ) : ?>
        <tr><td><?php echo esc_html( $r[0] ); ?></td>
          <td class="wst__mi"><div class="wst__cel"><?php echo $wst_da; ?><span><strong><?php echo esc_html( $r[1] ); ?></strong><?php echo $r[2] ? '<small>' . esc_html( $r[2] ) . '</small>' : ''; ?></span></div></td>
          <td><div class="wst__cel"><?php echo $wst_ne; ?><span><strong><?php echo esc_html( $r[3] ); ?></strong><small><?php echo esc_html( $r[4] ); ?></small></span></div></td></tr>
      <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</div></section>

<section class="wst__s wst__s--bg"><div class="wst__v">
  <div class="wst__kicker wst__c">Iz recenzija</div>
  <h2 class="wst__h2 wst__c">Što kažu <em>naši kupci</em></h2>
  <p class="wst__c"><span class="wst__ocj"><strong>4,8</strong> <span class="wst__zv">★★★★★</span> 1.081 recenzija obitelji koje ne čekaju sljedeću krizu</span></p>
  <div class="wst__mn">
    <div class="wst__mk"><span class="wst__nav">“</span><p>Ovo mi je druga narudžba, sad ih imam deset. Dovoljno da podijelim s obitelji i prijateljima ako ikad zatreba.</p><div class="wst__mh"><span class="wst__av">T</span><div><strong>Tomislav P.</strong><span>provjereni kupac</span></div><span class="wst__zv">★★★★★</span></div></div>
    <div class="wst__mk"><span class="wst__nav">“</span><p>Isprobao sam prvu seriju i radi odlično. Naručio sam drugu, za svaki slučaj.</p><div class="wst__mh"><span class="wst__av">G</span><div><strong>Goran B.</strong><span>provjereni kupac</span></div><span class="wst__zv">★★★★★</span></div></div>
    <div class="wst__mk"><span class="wst__nav">“</span><p>Stiglo je brzo, a proizvod izgleda kvalitetno napravljen. Još ga nisam morao koristiti – i nadam se da neću.</p><div class="wst__mh"><span class="wst__av">J</span><div><strong>Josip R.</strong><span>provjereni kupac</span></div><span class="wst__zv">★★★★★</span></div></div>
  </div>
</div></section>

<section class="wst__s"><div class="wst__v">
  <div class="wst__jam">
    <div class="wst__jz"><span>30</span><small>DANA</small></div>
    <div>
      <div class="wst__kicker">Naše jamstvo</div>
      <h2 class="wst__h2">30 dana <em>bez rizika</em></h2>
      <p class="wst__p">Ako NORIKS AquaStraw stigne oštećen, ne filtrira onako kako kažemo ili dobijete pogrešan proizvod – popravit ćemo, zamijeniti ili vratiti novac u roku od 30 dana od dostave.</p>
      <ul class="wst__kv"><li>30 dana za povrat novca</li><li>Plaćanje pouzećem – platite kad paket stigne</li><li>Besplatna dostava iznad 70 €</li></ul>
    </div>
  </div>
</div></section>

<section class="wst__s wst__s--bg"><div class="wst__v">
  <div class="wst__kicker wst__c">Prave obitelji</div>
  <h2 class="wst__h2 wst__c">Pravi mir <em>za cijelu obitelj</em></h2>
  <div class="wst__fm">
    <div class="wst__fk2"><div class="wst__ff"><img src="<?php echo $wst_i( 'noriks-straw-kupac-robert.webp' ); ?>" alt="Kupac Robert drži NORIKS AquaStraw" loading="eager" decoding="async"></div><div class="wst__ft"><span class="wst__zv">★★★★★</span><strong>Rade savršeno</strong><p>Slamke su točno onakve kako su opisane. Jako jednostavne za korištenje. Sad se osjećam pripremljeno za izvanredne situacije jer znam da mogu piti čistu vodu.</p><span class="wst__ime">Robert T., Osijek</span></div></div>
    <div class="wst__fk2"><div class="wst__ff"><img src="<?php echo $wst_i( 'noriks-straw-kupac-lorena.webp' ); ?>" alt="Zapakirane NORIKS AquaStraw slamke" loading="eager" decoding="async"></div><div class="wst__ft"><span class="wst__zv">★★★★★</span><strong>Kupila sam za cijelu obitelj</strong><p>Stigle su u dobrom stanju, dobro zapakirane. Nekoliko sam dala sestri, nekoliko kćeri za nju i oca o kojem brine, a imam i za sina kad dođe u posjet.</p><span class="wst__ime">Lorena N., Split</span></div></div>
    <div class="wst__fk2"><div class="wst__ff"><img src="<?php echo $wst_i( 'noriks-straw-kupac-karmen.webp' ); ?>" alt="Muškarac pije iz potoka kroz NORIKS AquaStraw" loading="eager" decoding="async"></div><div class="wst__ft"><span class="wst__zv">★★★★★</span><strong>Sin ju je isprobao</strong><p>Upravo je padala kiša pa je sin otišao do lokve, zagrabio vode i popio – kaže da radi odlično! Imam 75 godina pa ću mu vjerovati na riječ.</p><span class="wst__ime">Karmen A., Varaždin</span></div></div>
  </div>
</div></section>

<section class="wst__s npg-s"><?php $npg = array( 'izdelek' => 'NORIKS AquaStraw', 'barva' => '#bf4101' ); include __DIR__ . '/noriks-pogoji.php'; ?></section>
</div>
<style>
.wst{color:#231a14;font-family:inherit}
.wst__s{padding:72px 0;background:#fff}.wst__s.wst__s--bg{background:#fbf1ea}
.wst__v{width:100%;max-width:1240px;margin:0 auto;padding:0 24px;box-sizing:border-box}
.wst__c{text-align:center}
.wst__kicker{font-size:13px;letter-spacing:1.8px;text-transform:uppercase;color:#a63a03;margin:0 0 8px;font-weight:700}
.wst__kicker::before{content:"";display:inline-block;width:22px;height:2px;background:#bf4101;vertical-align:middle;margin:-2px 10px 0 0;border-radius:2px}
.wst__h2{font-size:clamp(24px,3vw,34px);font-weight:800;line-height:1.2;margin:0 0 16px;color:#231a14}.wst__h2 em{font-style:italic;color:#bf4101}
.wst__p{font-size:15.5px;line-height:1.65;color:#4a3d34;margin:0 0 14px}
.wst__ik{width:50px;height:50px;border-radius:50%;background:#f8dfcf;color:#a63a03;display:flex;align-items:center;justify-content:center;flex:0 0 50px}
.wst__ugc{display:grid;grid-template-columns:repeat(5,1fr);gap:16px;margin-top:24px}
.wst__uk{border-radius:16px;overflow:hidden;aspect-ratio:9/16;background:#2a201a;box-shadow:0 10px 26px rgba(90,40,10,.16)}
.wst__uk video,.wst__media video{width:100%;height:100%;object-fit:cover;display:block}
.wst__dva{display:grid;grid-template-columns:1fr 1fr;gap:56px;align-items:center}.wst__dva--rev>div:first-child{order:2}
.wst__media{position:relative;border-radius:16px;overflow:hidden;box-shadow:0 14px 34px rgba(60,30,10,.16);aspect-ratio:4/5;background:#f3e6dc}
.wst__media--kv{aspect-ratio:1/1;background:#fff}
.wst__media img{width:100%;height:100%;object-fit:cover;display:block}
.wst__znacka{position:absolute;left:16px;top:16px;background:#bf4101;color:#fff;font-size:13px;font-weight:800;letter-spacing:1px;text-transform:uppercase;padding:7px 12px;border-radius:20px;box-shadow:0 4px 12px rgba(0,0,0,.15)}
.wst__faze{display:grid;grid-template-columns:1fr 1fr;gap:12px;margin-top:6px}
.wst__fk{display:flex;gap:12px;background:#fbf1ea;border-radius:14px;padding:16px}
.wst__fk strong{display:block;font-size:15px;margin-bottom:4px}.wst__fk p{margin:0;font-size:14px;line-height:1.5;color:#55473d}
.wst__fn{width:32px;height:32px;border-radius:50%;background:#bf4101;color:#fff;font-weight:800;display:flex;align-items:center;justify-content:center;flex:0 0 32px}
.wst__brojke{display:grid;grid-template-columns:repeat(4,1fr);gap:16px;margin-top:40px}
.wst__brojke>div{background:#fff;border-radius:16px;padding:22px 12px;text-align:center;box-shadow:0 8px 22px rgba(90,40,10,.10)}
.wst__brojke strong{display:block;font-size:34px;font-weight:800;color:#bf4101;line-height:1.1}.wst__brojke span{font-size:14px;color:#55473d}
.wst__kar{display:grid;grid-template-columns:1fr 1fr;gap:14px;margin-top:8px}
.wst__kk{background:#fff;border-radius:16px;padding:20px;box-shadow:0 8px 22px rgba(90,40,10,.09);transition:transform .2s,box-shadow .2s}
.wst__kk:hover,.wst__mk:hover,.wst__fk2:hover{transform:translateY(-3px);box-shadow:0 14px 30px rgba(90,40,10,.15)}
.wst__kk strong{display:block;font-size:15.5px;margin:12px 0 6px}.wst__kk p{margin:0;font-size:14px;line-height:1.55;color:#55473d}
.wst__tw{overflow-x:auto;-webkit-overflow-scrolling:touch;margin-top:20px;border-radius:16px;box-shadow:0 8px 24px rgba(90,40,10,.10)}
.wst__tab{width:100%;border-collapse:collapse;background:#fff;min-width:620px}
.wst__tab th,.wst__tab td{padding:14px 16px;text-align:left;font-size:14.5px;border-bottom:1px solid #f1e3d8;vertical-align:middle}
.wst__tab th{font-weight:800;background:#fdf7f2}.wst__tab th.wst__mi{background:#bf4101;color:#fff}
.wst__tab td:first-child{font-weight:800;width:22%}
.wst__tab td.wst__mi{background:#fdf0e7}
.wst__tab tr:last-child td{border-bottom:0}
.wst__cel{display:flex;gap:10px;align-items:flex-start}.wst__cel strong{display:block;font-size:14.5px}.wst__cel small{display:block;font-size:13px;color:#6b5d53;margin-top:2px}
.wst__da,.wst__ne{display:inline-flex;align-items:center;justify-content:center;width:24px;height:24px;border-radius:50%;flex:0 0 24px}
.wst__da{background:#bf4101;color:#fff}.wst__ne{background:#ece4de;color:#8a7b70}
.wst__ocj{display:inline-flex;align-items:center;gap:8px;background:#fff;border-radius:30px;padding:8px 18px;font-size:14.5px;box-shadow:0 4px 14px rgba(90,40,10,.08)}
.wst__ocj strong{font-size:22px}.wst__zv{color:#e0a33c;letter-spacing:2px;font-size:15px}
.wst__mn,.wst__fm{display:grid;grid-template-columns:repeat(3,1fr);gap:24px;margin-top:26px;align-items:stretch}
.wst__mk{background:#fff;border-radius:16px;padding:30px 26px 22px;box-shadow:0 8px 24px rgba(90,40,10,.10);display:flex;flex-direction:column;transition:transform .2s,box-shadow .2s}
.wst__nav{font-size:56px;line-height:.6;color:#e8c3aa;font-weight:800;font-family:Georgia,serif}
.wst__mk p{margin:10px 0 18px;font-size:16px;line-height:1.6;color:#2f251e;flex:1}
.wst__mh{display:flex;align-items:center;gap:12px}
.wst__av{width:44px;height:44px;border-radius:50%;background:#bf4101;color:#fff;font-weight:800;display:flex;align-items:center;justify-content:center;flex:0 0 44px}
.wst__mh strong{display:block;font-size:15px}.wst__mh span{font-size:13px;color:#6b5d53}.wst__mh .wst__zv{margin-left:auto;font-size:13px}
.wst__jam{display:grid;grid-template-columns:320px 1fr;gap:56px;align-items:center}
.wst__jz{width:280px;height:280px;border-radius:50%;background:radial-gradient(circle at 35% 30%,#e0651f,#a63a03);color:#fff;display:flex;flex-direction:column;align-items:center;justify-content:center;box-shadow:0 18px 40px rgba(166,58,3,.30),inset 0 0 0 10px rgba(255,255,255,.18);margin:0 auto}
.wst__jz span{font-size:110px;font-weight:800;line-height:1}.wst__jz small{font-size:24px;font-weight:800;letter-spacing:6px}
.wst__kv{list-style:none;margin:4px 0 0;padding:0}.wst__kv li{position:relative;padding-left:30px;margin:0 0 10px;font-size:15px;line-height:1.5;list-style:none}
.wst__kv li::before{content:"\2713";position:absolute;left:0;top:1px;width:20px;height:20px;border-radius:50%;background:#bf4101;color:#fff;font-size:12px;display:flex;align-items:center;justify-content:center}
.wst__fk2{background:#fff;border-radius:16px;overflow:hidden;box-shadow:0 8px 24px rgba(90,40,10,.10);display:flex;flex-direction:column;transition:transform .2s,box-shadow .2s}
.wst__ff{aspect-ratio:4/3;overflow:hidden}.wst__ff img{width:100%;height:100%;object-fit:cover;display:block}
.wst__ft{padding:20px 22px 22px;display:flex;flex-direction:column;flex:1}
.wst__ft strong{font-size:17px;margin:6px 0 6px}.wst__ft p{margin:0 0 14px;font-size:15px;line-height:1.55;color:#3d3129;flex:1}
.wst__ime{font-size:13.5px;font-weight:700;color:#7a685b}
@media (max-width:1024px){.wst__ugc{grid-template-columns:repeat(3,1fr)}}
@media (max-width:767px){
  .wst__s{padding:48px 0}.wst__v{padding:0 16px}
  .wst__ugc{display:flex;overflow-x:auto;scroll-snap-type:x mandatory;gap:12px;padding-bottom:8px;-webkit-overflow-scrolling:touch}
  .wst__uk{flex:0 0 62%;scroll-snap-align:start}
  .wst__dva,.wst__jam{grid-template-columns:1fr;gap:26px}.wst__dva--rev>div:first-child{order:0}
  .wst__faze,.wst__kar{grid-template-columns:1fr}
  .wst__brojke{grid-template-columns:repeat(2,1fr);gap:10px;margin-top:28px}.wst__brojke strong{font-size:28px}
  .wst__mn,.wst__fm{grid-template-columns:1fr;gap:14px}
  .wst__jz{width:200px;height:200px}.wst__jz span{font-size:78px}.wst__jz small{font-size:18px}
}
</style>
