<?php
/**
 * NORIKS DrySeam — why sekcije po natancni strukturi originala (loeah.nl/products/incontinentie-onderbroek-naadloze-100-lekvrij-1-1-gratis,
 * prej lunascycle.nl).
 *
 * STRUKTURA ORIGINALA:
   1. trak 'Alles met Luna moet eruit!' - IZPUSCENO: tuja znamka in razprodaja
   2. promo pasica 'Uitverkoop Sale 1+1 / 2+2 / 3+4 GRATIS' z modeloma v majicah s tujo znamko - IZPUSCENO: tuja znamka in ponudba, ki je na nasi strani ni
   3. naslov 'Nooit meer doorlekken' + 3 ikone v vrsti (10-12 ur zanesljive zascite, prijazne do koze, brez vonjav) - pri nas 3 kartice z istimi ikonami
   4. fotografija cez celo sirino: zenska na balkonu s 3 zelenimi oblacki (brez skrbi dan in noc, svobodno in udobno, trajnostni svet) - pri nas ista fotografija, oblacki prevedeni v HR (namizje siroka, mobil kvadratna razlicica originala)
   5. temno zelen pas z 2 ikonama (srce: prihranek 10.000+ vlozkov in enkratnih izdelkov; list: trajnost, pralno in vecrazno) - pri nas 2 kartici z ikonama srca in lista
   6. 'Nieuwe technologie - 4 lagen tegen lekken' + animacija 4 slojev s tockami (Meer informatie) - pri nas animacija levo, 4 ostevilceni sloji desno; 'preprecuje okuzbe' izpusceno (zdravstvena trditev)
   7. 'Hoe te wassen?' 3 ikone v vrsti (izpiranje, pralni stroj 30 °C, susenje na zraku) - pri nas 3 kartice z istimi ikonami
   8. 'Nog vragen?' harmonika 7 vprasanj - pri nas FAQ v sekciji mnenj (Informacije o proizvodu), kot pri vseh izdelkih
   9. mreza 8 izjav kupk + pripomocek mnenj - pri nas 6 prevedenih izjav v mrezi 3 v vrsti (izpusceni izjavi o zdravilih in operaciji)
  10. Klarna / 45.350+ kupcev 4,7 / brezplacna dostava - pri nas skupna sekcija NORIKS pogoji na koncu
 * BARVA ORIGINALA: #064628 (temno zelena trakov, oblackov in tablice velicin na originalu) + roza #f3bac5 (krogi ikon);
 *   svetel ton za --bg #eef5f1, krogi ikon #fbe9ed
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
$ndry_img = get_template_directory_uri() . '/img/dryseam/';
$ndry_svg = '<svg viewBox="0 0 24 24" width="28" height="28" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">';
?>
<div class="ndry">

<section class="ndry__s ndry__s--bg">
  <div class="ndry__v">
    <div class="ndry__kicker ndry__c">Bez curenja</div>
    <h2 class="ndry__h2 ndry__c">Nikad više <em>curenja</em></h2>
    <p class="ndry__p ndry__c ndry__uvod">Izgledaju i nose se kao obične gaćice, a upijajući dio drži vas suhima i svježima od jutra do večeri.</p>
    <div class="ndry__grid ndry__g3">
      <div class="ndry__k">
        <span class="ndry__ik ndry__ik--slika"><img src="<?php echo esc_url( $ndry_img . 'noriks-dryseam-ikona-zastita.webp' ); ?>" alt="10–12 sati zaštite" loading="eager" decoding="async"></span>
        <strong>10–12 sati pouzdane zaštite</strong>
        <p>Bez brige danju i noću – na poslu, u gradu ili dok spavate.</p>
      </div>
      <div class="ndry__k">
        <span class="ndry__ik ndry__ik--slika"><img src="<?php echo esc_url( $ndry_img . 'noriks-dryseam-ikona-netoksicno.webp' ); ?>" alt="Nježne prema koži" loading="eager" decoding="async"></span>
        <strong>Nježne prema koži</strong>
        <p>Mekan, prozračan materijal koji je ugodno nositi cijeli dan.</p>
      </div>
      <div class="ndry__k">
        <span class="ndry__ik ndry__ik--slika"><img src="<?php echo esc_url( $ndry_img . 'noriks-dryseam-ikona-svjezina.webp' ); ?>" alt="Bez neugodnih mirisa" loading="eager" decoding="async"></span>
        <strong>Bez neugodnih mirisa</strong>
        <p>Ostaju svježe zahvaljujući antibakterijskom sloju.</p>
      </div>
    </div>
  </div>
</section>

<section class="ndry__s">
  <div class="ndry__v">
    <div class="ndry__kicker ndry__c">Sloboda</div>
    <h2 class="ndry__h2 ndry__c">Opušteno, <em>bez brige</em></h2>
    <div class="ndry__dvotekst">
      <p class="ndry__p">NORIKS DrySeam su bešavne gaćice za umjereno propuštanje mokraće. Upijaju do 50 ml, a pod odjećom se ne vide – nema rubova, nema šuškanja, nema debelih uložaka koji se pomiču.</p>
      <p class="ndry__p">Možete sjediti na balkonu, otići u kupnju ili na posao i ne razmišljati o tome. Osjećate se slobodno, udobno i sigurno – a kad ih operete, spremne su za sljedeći dan.</p>
    </div>
    <div class="ndry__polna">
      <picture>
        <source media="(max-width:767px)" srcset="<?php echo esc_url( $ndry_img . 'noriks-dryseam-bez-brige.webp' ); ?>">
        <img src="<?php echo esc_url( $ndry_img . 'noriks-dryseam-bez-brige-siroka.webp' ); ?>" alt="Žena opušteno sjedi na balkonu u NORIKS DrySeam gaćicama – bez brige danju i noću" loading="eager" decoding="async">
      </picture>
    </div>
    <p class="ndry__zak ndry__c">Zaštita koju ne primijetite – samo osjećaj sigurnosti.</p>
  </div>
</section>

<section class="ndry__s ndry__s--bg">
  <div class="ndry__v">
    <div class="ndry__kicker ndry__c">Održivo</div>
    <h2 class="ndry__h2 ndry__c">Manje uložaka, <em>više slobode</em></h2>
    <p class="ndry__p ndry__c ndry__uvod">Jedne perive gaćice zamjenjuju gomilu jednokratnih proizvoda – za vaš novčanik i za okoliš.</p>
    <div class="ndry__grid ndry__g2">
      <div class="ndry__k ndry__k--red">
        <span class="ndry__ik"><?php echo $ndry_svg; ?><path d="M12 5.5C6.8-.9 1.4 3.6 1.3 8.5c0 7.2 8.7 13.2 10.7 13.2s10.7-5.9 10.7-13.2C22.6 3.6 17.2-.9 12 5.5Z"/></svg></span>
        <div><strong>Uštedite tisuće uložaka</strong>
        <p>Umjesto uložaka i jednokratnih proizvoda nosite gaćice koje operete i nosite ponovno. Manje kupovine, manje otpada i nikakvog straha da se uložak vidi.</p></div>
      </div>
      <div class="ndry__k ndry__k--red">
        <span class="ndry__ik"><?php echo $ndry_svg; ?><path d="M19.4 7.5c4.1 4.1 3.5 8.8 0 12.3-3.1 3.1-8.6 2.9-13.1-.8C.9 14.5.5 6.2 3.8 1.7 6.3 5 15.3 3.4 19.4 7.5Z"/><path d="M10.4 10.3c5 2.5 9.2 5.9 9.2 9.3"/></svg></span>
        <div><strong>Održivost u jednom izboru</strong>
        <p>Perivo donje rublje za višekratnu upotrebu – jedan jednostavan korak prema čišćoj budućnosti, bez odricanja od udobnosti.</p></div>
      </div>
    </div>
  </div>
</section>

<section class="ndry__s">
  <div class="ndry__v ndry__dva">
    <div class="ndry__media ndry__media--anim"><video poster="<?php echo esc_url( $ndry_img . 'noriks-dryseam-4-sloja.jpg' ); ?>" src="<?php echo esc_url( $ndry_img . 'noriks-dryseam-4-sloja.mp4' ); ?>" autoplay muted loop playsinline preload="metadata"></video></div>
    <div>
      <div class="ndry__kicker">Nova tehnologija</div>
      <h2 class="ndry__h2">Četiri sloja <em>protiv curenja</em></h2>
      <p class="ndry__p">Upijajući dio gaćica sastoji se od četiri sloja. Samo je taj dio malo deblji – ostatak je tanak kao obično rublje i ostaje prozračan.</p>
      <ol class="ndry__tocke">
        <li><span class="ndry__st">01</span><div><strong>Sloj za udobnost</strong><p>Unutarnji sloj je mekan i prozračan – ugodan osjećaj cijeli dan.</p></div></li>
        <li><span class="ndry__st">02</span><div><strong>Upijajući sloj</strong><p>Brzo se suši i ravnomjerno raspoređuje tekućinu, pa se osjećate svježe.</p></div></li>
        <li><span class="ndry__st">03</span><div><strong>Barijera za vlagu</strong><p>Zahvaljujući njoj curenje je prošlost, a neugodni mirisi se neutraliziraju.</p></div></li>
        <li><span class="ndry__st">04</span><div><strong>Antibakterijski sloj</strong><p>Vanjski sloj je vodootporan i antibakterijski – bez osjećaja vlage.</p></div></li>
      </ol>
      <p class="ndry__zak">Tanko kao rublje, sigurno kao uložak.</p>
    </div>
  </div>
</section>

<section class="ndry__s ndry__s--bg">
  <div class="ndry__v">
    <div class="ndry__kicker ndry__c">Održavanje</div>
    <h2 class="ndry__h2 ndry__c">Kako ih <em>prati?</em></h2>
    <p class="ndry__p ndry__c ndry__uvod">Tri jednostavna koraka – i gaćice su spremne za sljedeći dan.</p>
    <div class="ndry__grid ndry__g3">
      <div class="ndry__k">
        <span class="ndry__ik ndry__ik--slika"><img src="<?php echo esc_url( $ndry_img . 'noriks-dryseam-ikona-ispiranje.webp' ); ?>" alt="Isperite hladnom vodom" loading="eager" decoding="async"></span>
        <strong>1. Isperite</strong>
        <p>Gaćice isperite hladnom vodom.</p>
      </div>
      <div class="ndry__k">
        <span class="ndry__ik ndry__ik--slika"><img src="<?php echo esc_url( $ndry_img . 'noriks-dryseam-ikona-pranje.webp' ); ?>" alt="Perilica rublja na 30 °C" loading="eager" decoding="async"></span>
        <strong>2. U perilicu</strong>
        <p>Perite na 30 °C s blagim deterdžentom, najbolje u mrežici za rublje.</p>
      </div>
      <div class="ndry__k">
        <span class="ndry__ik ndry__ik--slika"><img src="<?php echo esc_url( $ndry_img . 'noriks-dryseam-ikona-susenje.webp' ); ?>" alt="Sušite na zraku" loading="eager" decoding="async"></span>
        <strong>3. Sušite na zraku</strong>
        <p>Izbjegavajte izbjeljivač i omekšivač.</p>
      </div>
    </div>
  </div>
</section>

<section class="ndry__s">
  <div class="ndry__v">
    <div class="ndry__kicker ndry__c">Iskustva kupaca</div>
    <h2 class="ndry__h2 ndry__c">Što kažu <em>žene koje ih nose</em></h2>
    <div class="ndry__grid ndry__g3 ndry__mn">
      <div class="ndry__k ndry__k--mn"><span class="ndry__zv">★★★★★</span><p>Napokon gaćice koje su lijepe, udobne i stvarno rade! Naručila sam još. Nema više troška za uloške i nema više brige da se uložak vidi.</p><span class="ndry__ime"><i class="ndry__av" aria-hidden="true">L</i>Lucija P.</span></div>
      <div class="ndry__k ndry__k--mn"><span class="ndry__zv">★★★★★</span><p>Ponekad mi malo pobjegne prije nego što stignem do toaleta. Nekoliko takvih trenutaka na poslu bilo je dovoljno da potražim ovakvo rublje. Ukratko – rade. Opet se osjećam sigurno.</p><span class="ndry__ime"><i class="ndry__av" aria-hidden="true">J</i>Jasna K.</span></div>
      <div class="ndry__k ndry__k--mn"><span class="ndry__zv">★★★★★</span><p>Nisam imala velika očekivanja, ali stvarno rade! Ako trebate dobre gaćice, ove su odlične. Nisu ružne, udobne su i – RADE!</p><span class="ndry__ime"><i class="ndry__av" aria-hidden="true">A</i>Anica T.</span></div>
      <div class="ndry__k ndry__k--mn"><span class="ndry__zv">★★★★★</span><p>S ovim gaćicama nema više nezgoda. I nakon više pranja izgledaju kao nove.</p><span class="ndry__ime"><i class="ndry__av" aria-hidden="true">V</i>Vesna C.</span></div>
      <div class="ndry__k ndry__k--mn"><span class="ndry__zv">★★★★★</span><p>Bilo me sram izaći iz kuće jer obični ulošci nisu dovoljno upijali. Ove gaćice upiju sve i nema mirisa – sad izlazim opuštena.</p><span class="ndry__ime"><i class="ndry__av" aria-hidden="true">H</i>Helena I.</span></div>
      <div class="ndry__k ndry__k--mn"><span class="ndry__zv">★★★★★</span><p>Udobne su i ulijevaju sigurnost. Ako ne stignem na vrijeme do toaleta, ništa ne procuri na odjeću. Pravi poticaj samopouzdanju.</p><span class="ndry__ime"><i class="ndry__av" aria-hidden="true">D</i>Dubravka R.</span></div>
    </div>
    <p class="ndry__zak ndry__c">Manje brige, više dana u kojima o tome uopće ne razmišljate.</p>
  </div>
</section>

<section class="ndry__s ndry__s--bg npg-s"><?php $npg = array( 'izdelek' => 'NORIKS DrySeam', 'barva' => '#064628' ); include __DIR__ . '/noriks-pogoji.php'; ?></section>

</div>
<style>
.ndry{color:#1c1c1c;font-family:inherit}
.ndry__s{padding:80px 0;background:#fff}.ndry__s.ndry__s--bg{background:#eef5f1}
.ndry__v{width:100%;max-width:1240px;margin:0 auto;padding:0 24px;box-sizing:border-box}
.ndry__c{text-align:center}
.ndry__kicker{font-size:12.5px;letter-spacing:1.8px;text-transform:uppercase;color:#064628;margin:0 0 10px;font-weight:700}
.ndry__kicker::before{content:"";display:inline-block;width:22px;height:2px;background:#e98ea1;vertical-align:middle;margin:-2px 10px 0 0;border-radius:2px}
.ndry__h2{font-size:clamp(25px,3vw,36px);font-weight:800;line-height:1.2;margin:0 0 16px;color:#1c1c1c}.ndry__h2 em{font-style:italic;color:#064628}
.ndry__p{font-size:16px;line-height:1.65;color:#333;margin:0 0 14px}
.ndry__uvod{max-width:none;margin-bottom:6px}
.ndry__zak{font-size:16.5px;font-weight:800;line-height:1.5;margin:22px 0 0;color:#064628}
.ndry__dva .ndry__zak{border-left:3px solid #e98ea1;padding-left:14px}
.ndry__grid{display:grid;gap:24px;margin-top:30px}.ndry__g2{grid-template-columns:repeat(2,1fr)}.ndry__g3{grid-template-columns:repeat(3,1fr)}
.ndry__k{background:#fff;border-radius:16px;box-shadow:0 8px 24px rgba(6,70,40,.08);padding:30px 26px;text-align:center;transition:transform .2s,box-shadow .2s;display:flex;flex-direction:column;align-items:center}
.ndry__k:hover{transform:translateY(-3px);box-shadow:0 16px 34px rgba(6,70,40,.13)}
.ndry__k strong{display:block;font-size:17px;font-weight:800;margin:0 0 8px;line-height:1.3}
.ndry__k p{margin:0;font-size:15px;line-height:1.6;color:#4a4f4c}
.ndry__ik{width:64px;height:64px;border-radius:50%;background:#fbe9ed;border:1px solid #e98ea1;color:#064628;display:flex;align-items:center;justify-content:center;margin:0 0 16px;flex:0 0 64px}
.ndry__ik--slika{width:76px;height:76px;flex-basis:76px;border:0;background:transparent}.ndry__ik--slika img{width:76px;height:76px;object-fit:contain;display:block}
.ndry__k--red{flex-direction:row;align-items:flex-start;text-align:left;gap:20px}.ndry__k--red .ndry__ik{margin:0}
.ndry__dvotekst{display:grid;grid-template-columns:1fr 1fr;gap:32px;margin:6px 0 26px}.ndry__dvotekst .ndry__p{margin:0}
.ndry__polna{border-radius:18px;overflow:hidden;box-shadow:0 14px 34px rgba(6,70,40,.14)}.ndry__polna img{width:100%;height:auto;display:block}
.ndry__dva{display:grid;grid-template-columns:1fr 1fr;gap:56px;align-items:center}
.ndry__media{border-radius:18px;overflow:hidden;box-shadow:0 14px 34px rgba(6,70,40,.14);aspect-ratio:4/5;background:#fff}
.ndry__media img,.ndry__media video{width:100%;height:100%;object-fit:cover;display:block}
.ndry__media--anim video{object-fit:contain;padding:28px;box-sizing:border-box}
.ndry__tocke{list-style:none;margin:8px 0 0;padding:0;display:flex;flex-direction:column;gap:16px}.ndry__tocke li{display:flex;gap:16px;align-items:flex-start;list-style:none}
.ndry__st{flex:0 0 42px;height:42px;border-radius:50%;background:#064628;color:#fff;font-weight:800;display:flex;align-items:center;justify-content:center;font-size:14px}
.ndry__tocke strong{font-size:16.5px}.ndry__tocke p{margin:4px 0 0;font-size:15px;line-height:1.6;color:#333}
.ndry__mn{align-items:stretch}.ndry__k--mn{text-align:left;align-items:flex-start;padding:26px 24px}
.ndry__k--mn p{font-size:15.5px;line-height:1.6;color:#333;flex:1 1 auto}
.ndry__zv{color:#e0a33c;letter-spacing:2px;display:block;margin-bottom:10px;font-size:16px}
.ndry__ime{display:flex;align-items:center;gap:10px;margin-top:16px;font-weight:700;font-size:14.5px}
.ndry__av{flex:0 0 36px;width:36px;height:36px;border-radius:50%;background:#fbe9ed;color:#064628;font-style:normal;font-weight:800;font-size:14px;display:inline-flex;align-items:center;justify-content:center}
@media (max-width:860px){
  .ndry__s{padding:52px 0}
  .ndry__dva{grid-template-columns:1fr;gap:26px}
  .ndry__dvotekst{grid-template-columns:1fr;gap:12px}
}
@media (max-width:767px){.ndry__v{padding:0 16px}}
@media (max-width:700px){
  .ndry__s{padding:44px 0}
  .ndry__g2,.ndry__g3{grid-template-columns:1fr}
  .ndry__k--red{flex-direction:column;align-items:center;text-align:center}
  .ndry__mn{grid-template-columns:none;grid-auto-flow:column;grid-auto-columns:86%;overflow-x:auto;scroll-snap-type:x mandatory;scrollbar-width:none;padding-bottom:6px}
  .ndry__mn::-webkit-scrollbar{display:none}.ndry__mn>*{scroll-snap-align:start}
}
</style>
