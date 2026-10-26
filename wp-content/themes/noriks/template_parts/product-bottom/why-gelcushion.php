<?php
/**
 * NORIKS GelCushion — why sekcije po natancni strukturi originala (covexia.es/products/cojin-de-gel-covexia).
 *
 * STRUKTURA ORIGINALA:
   1. press — trak logotipov medijev v vrsti -> pri nas trak NORIKS zaupanja v vrsti (tujih medijev ne prenasamo)
   2. situaciones — naslov "Te pasa…?" + karusel 3 kartic s puscicama (slika zgoraj, tekst spodaj na modri podlagi)
   3. concerns — slika jastuka levo + desno stevilcen seznam 01–05 (kje boli, kako pomaga) + 3 podatki v vrsti (mere, brez montaze, gel)
   4. imgtext — infografika levo, desno naslov + 3 alineje s kljukico
   5. videos — karusel 3 video mnenj kupcev s puscicama (navpicni videi)
   6. fbreviews — karusel komentarjev kupcev s puscicama (fotografija, ime, besedilo)
   7. results — modri trak z jamstvom + 3 kartice v vrsti "kaj opazijo" (odstotki ankete izpusceni)
   8. faq — harmonika (pri nas FAQ v reviews.php)
   9. opiniones — mreza mnenj s fotografijo 3 v vrsti
   10. contact — kontakt (pri nas NORIKS pogoji na koncu)
   Primerjalne tabele ta original nima.
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
$wd = get_template_directory_uri() . '/img/gelcushion/';
$gc_sit = array(
  array( 'noriks-gelcushion-sit-1.webp', 'Sjednete, a nakon nekoliko minuta trtica počne smetati – sve više i više.' ),
  array( 'noriks-gelcushion-sit-2.webp', 'Križa vuku i peku, a nakon pola sata više ne možete mirno sjediti.' ),
  array( 'noriks-gelcushion-sit-3.webp', 'Noge vam trnu i svakih 20 minuta morate ustati sa stolice.' ),
);
$gc_tocke = array(
  array( 'Pritisak na trticu', 'Gel u obliku saća popusti točno ispod trtice i drži ostatak tijela. Trtica više ne nosi vašu težinu – ona se rasporedi po cijelom jastuku, pa možete duže sjediti.' ),
  array( 'Sjedenje u autu i za stolom', 'Kad propadnete u sjedalo, zdjelica se nagne. S jastukom kukovi ostaju u ravnini, a leđa uspravnija – za volanom, za stolom ili za ručkom koji se oduži.' ),
  array( 'Križa', 'Većina stolica ostavlja križa bez potpore i leđa se pogrbe. Debljina jastuka podigne vas taman toliko da kralježnica zadrži svoj prirodni oblik.' ),
  array( 'Bedra i noge', 'Ulegnuto sjedalo ili ravan jastuk pritišću bedra. Zaobljeni rubovi jastuka ne pritišću bedra, a gel ne zadržava toplinu – noge ostaju lagane i nakon sati sjedenja.' ),
  array( 'Osjetljiva mjesta', 'Kad nešto smeta, smeta i najmanji dodir. Jastuk je čvrst gdje treba, mekan na dodir i svjež – da se možete opustiti i sjediti duže.' ),
);
$gc_fb = array(
  array( 'noriks-gelcushion-fb-1.webp', 'Isabela R.', 'prije 3 tjedna', 'Odnedavno sam u invalidskim kolicima i cijeli dan sjedim. Jastuk koristim svaki dan i razlika je ogromna.' ),
  array( 'noriks-gelcushion-fb-4.webp', 'Albert M.', 'prije 12 h', 'Dobar jastuk, ne ulegne se i ne grije. Preporučujem.' ),
  array( 'noriks-gelcushion-fb-5.webp', 'Josipa G.', 'prije 6 h', 'Stigao je brzo. Koristim ga svaki dan na poslu: udoban je i osjeti se kad sjediš puno sati.' ),
  array( 'noriks-gelcushion-fb-3.webp', 'Marko D.', 'prije 2 tjedna', 'Imam ga od prošlog tjedna. Cijeli dan sjedim i na kraju dana leđa su mi bila u lošem stanju. S jastukom je sasvim druga priča.' ),
  array( 'noriks-gelcushion-fb-2.webp', 'Tomislav C.', 'prije 1 dan', 'Vozim kamion, puno sati za volanom. Otkad ga imam u kabini, puno lakše podnosim vožnju, a gel se ne zagrijava.' ),
  array( 'noriks-gelcushion-fb-6.webp', 'Karolina P.', 'prije 3 h', 'Radim od kuće četiri dana tjedno na prilično lošoj stolici. S jastukom je kao da imam novu stolicu. Više me ne muči 8 sati sjedenja.' ),
);
$gc_op = array(
  array( 'noriks-gelcushion-op-1.webp', 'Karmen S.', 'Puno sati sjedim zbog posla i osjećala sam velik pritisak na trtici. S jastukom izdržim radni dan bez stalnog ustajanja.' ),
  array( 'noriks-gelcushion-op-2.webp', 'Antonio R.', 'Koristim ga najviše u autu, vozim duge relacije. Razlika u križima osjeti se od prve vožnje.' ),
  array( 'noriks-gelcushion-op-3.webp', 'Mihael Á.', 'Dobra kvaliteta, gel se ne ulegne kao spužve koje sam prije probao. Lako se čisti i ne grije.' ),
  array( 'noriks-gelcushion-op-4.webp', 'Ružica M.', 'Kupila sam ga mami, koja puno vremena provodi sjedeći. Oduševljena je.' ),
  array( 'noriks-gelcushion-op-5.webp', 'Lucija F.', 'Isprva sam sumnjala zbog debljine, ali se jako dobro prilagodi mojoj uredskoj stolici. Jako je udoban i ne kliže.' ),
  array( 'noriks-gelcushion-op-6.webp', 'Javor T.', 'Stigao je prije roka. Ispunjava obećano, posebno ako ste puno sati u istom položaju.' ),
);
?>
<div class="wgc">

  <!-- 1) trak zaupanja (na originalu trak medijev) -->
  <section class="wgc__s wgc__traka"><div class="wgc__v wgc__tmreza"><div class="wgc__tk"><span class="wgc__ti"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="9" cy="8" r="3.2"/><path d="M3 20c0-3.3 2.7-6 6-6s6 2.7 6 6"/><circle cx="17" cy="9" r="2.6"/><path d="M16 14.2c2.9.3 5 2.8 5 5.8"/></svg></span><div class="wgc__tt"><strong>120.000+</strong><span>zadovoljnih kupaca</span></div></div><div class="wgc__tk"><span class="wgc__ti"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 3.5l2.6 5.3 5.9.9-4.3 4.1 1 5.8L12 16.9l-5.2 2.7 1-5.8L3.5 9.7l5.9-.9z"/></svg></span><div class="wgc__tt"><strong>4,8 / 5</strong><span>prosječna ocjena</span></div></div><div class="wgc__tk"><span class="wgc__ti"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 12a8 8 0 1 0 2.4-5.7"/><path d="M4 4v4.5h4.5"/><path d="M12 8v4l2.6 2"/></svg></span><div class="wgc__tt"><strong>30 dana</strong><span>za povrat novca</span></div></div><div class="wgc__tk"><span class="wgc__ti"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="2.5" y="6" width="19" height="12" rx="2"/><circle cx="12" cy="12" r="2.6"/><path d="M6 9.5v5M18 9.5v5"/></svg></span><div class="wgc__tt"><strong>Pouzećem</strong><span>platite kad paket stigne</span></div></div></div></section>

  <!-- 2) situacije: 3 kartice v vrsti -->
  <section class="wgc__s">
    <div class="wgc__v">
      <h2 class="wgc__h2 wgc__c">Događa li vam se <em>nešto od ovoga</em>?</h2>
      <div class="wgc__grid3 wgc__kar">
        <?php foreach ( $gc_sit as $s ) : ?>
        <div class="wgc__sit">
          <img src="<?php echo esc_url( $wd . $s[0] ); ?>" alt="<?php echo esc_attr( $s[1] ); ?>" loading="lazy" decoding="async">
          <p><?php echo esc_html( $s[1] ); ?></p>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- 3) kako pomaga: slika + stevilcen seznam 01-05 + 3 podatki -->
  <section class="wgc__s wgc__s--bg">
    <div class="wgc__v wgc__dva">
      <div class="wgc__media wgc__media--sq"><img src="<?php echo esc_url( $wd . 'noriks-gelcushion-jastuk.webp' ); ?>" alt="NORIKS GelCushion – gel u obliku saća" loading="lazy" decoding="async"></div>
      <div>
        <div class="wgc__kicker">NORIKS GelCushion · gel u obliku saća</div>
        <h2 class="wgc__h2">Kako vam pomaže, <em>ovisno o tome gdje smeta</em></h2>
        <p class="wgc__p">Nelagoda dolazi s različitih mjesta. Jastuk raspoređuje vašu težinu i rasterećuje ih sve odjednom.</p>
        <div class="wgc__red3">
          <div><strong>40 × 35 × 2,5 cm</strong><span>mjere</span></div>
          <div><strong>Bez montaže</strong><span>spreman za 2 sekunde</span></div>
          <div><strong>Gel</strong><span>ne spljošti se</span></div>
        </div>
        <ol class="wgc__tocke">
          <?php foreach ( $gc_tocke as $i => $t ) : ?>
          <li><span class="wgc__st"><?php echo esc_html( sprintf( '%02d', $i + 1 ) ); ?></span><div><strong><?php echo esc_html( $t[0] ); ?></strong><p><?php echo esc_html( $t[1] ); ?></p></div></li>
          <?php endforeach; ?>
        </ol>
        <p class="wgc__zak">Gel u obliku saća popusti ispod trtice i drži ostatak tijela – težinu nosi cijeli jastuk, a ne vaša trtica.</p>
      </div>
    </div>
  </section>

  <!-- 4) zakaj deluje: infografika + 3 alineje -->
  <section class="wgc__s">
    <div class="wgc__v wgc__dva wgc__dva--rev">
      <div class="wgc__media wgc__media--sq"><img src="<?php echo esc_url( $wd . 'noriks-gelcushion-kako-radi.webp' ); ?>" alt="Kako NORIKS GelCushion raspoređuje pritisak" loading="lazy" decoding="async"></div>
      <div>
        <div class="wgc__kicker">Zašto djeluje</div>
        <h2 class="wgc__h2">Razlika se osjeti <em>čim sjednete</em></h2>
        <p class="wgc__p">Težina vam se rasporedi, sjedalo ostaje stabilno i nakon mjeseci i nemate onaj osjećaj propadanja – čak ni nakon sati sjedenja.</p>
        <ul class="wgc__kv">
          <li><strong>Olakšanje od prvog trenutka</strong> – težina počiva na gelu, ne na kosti.</li>
          <li><strong>Postavljen za 2 sekunde</strong> – fotelja, auto, uredska stolica ili invalidska kolica.</li>
          <li><strong>Nikad se ne spljošti</strong> – gel visoke gustoće vraća oblik nakon svake upotrebe.</li>
        </ul>
      </div>
    </div>
  </section>

  <!-- 5) 3 video mnenja v vrsti -->
  <section class="wgc__s wgc__s--bg">
    <div class="wgc__v">
      <h2 class="wgc__h2 wgc__c">Ovako ga koriste <em>svaki dan</em></h2>
      <p class="wgc__p wgc__c">Pravi videi kupaca koji ga već imaju kod kuće.</p>
      <div class="wgc__grid3 wgc__videi wgc__kar">
        <?php foreach ( array( '/img/gelcushion/noriks-gelcushion-test-jajeta.mp4', '/img/gelcushion/noriks-gelcushion-video-2.mp4', '/img/gelcushion/noriks-gelcushion-video-3.mp4' ) as $v ) : ?>
        <div class="wgc__vid"><video src="<?php echo esc_url( get_template_directory_uri() . $v ); ?>" autoplay muted loop playsinline preload="metadata"></video></div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- 6) komentarji kupcev v mrezi -->
  <section class="wgc__s">
    <div class="wgc__v">
      <h2 class="wgc__h2 wgc__c">Što nam <em>pričaju</em> kupci</h2>
      <div class="wgc__grid3 wgc__kar">
        <?php foreach ( $gc_fb as $f ) : ?>
        <div class="wgc__fb">
          <div class="wgc__fbh"><img src="<?php echo esc_url( $wd . $f[0] ); ?>" alt="<?php echo esc_attr( $f[1] ); ?>" loading="lazy" decoding="async"><div><strong><?php echo esc_html( $f[1] ); ?></strong><span><?php echo esc_html( $f[2] ); ?></span></div></div>
          <p><?php echo esc_html( $f[3] ); ?></p>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- 7) trak z jamstvom + 3 kartice -->
  <section class="wgc__s wgc__s--bg">
    <div class="wgc__plavo">30 dana za povrat novca · isprobajte ga kod kuće, bez obveze</div>
    <div class="wgc__v">
      <h2 class="wgc__h2 wgc__c">Što kupci primjećuju <em>nakon nekoliko tjedana</em></h2>
      <div class="wgc__grid3">
        <div class="wgc__rez"><strong>Udobnije sjedenje</strong><p>Većina razliku osjeti već prvi put kad sjedne – težina se rasporedi, sjedalo ostaje stabilno.</p></div>
        <div class="wgc__rez"><strong>Ponovno udobno sjede</strong><p>Više nema stalnog premještanja i ustajanja sa stolice svakih dvadesetak minuta.</p></div>
        <div class="wgc__rez"><strong>Lakši dugi dani</strong><p>Duge dane za stolom ili za volanom podnose puno lakše.</p></div>
      </div>
    </div>
  </section>

  <!-- 9) mnenja s fotografijo -->
  <section class="wgc__s">
    <div class="wgc__v">
      <h2 class="wgc__h2 wgc__c">Provjerene recenzije – <em>što kažu oni koji ga koriste svaki dan</em></h2>
      <p class="wgc__p wgc__c">★★★★★ 4,8 · 1.081 recenzija</p>
      <div class="wgc__grid3">
        <?php foreach ( $gc_op as $o ) : ?>
        <div class="wgc__op">
          <img src="<?php echo esc_url( $wd . $o[0] ); ?>" alt="Fotografija kupca – <?php echo esc_attr( $o[1] ); ?>" loading="lazy" decoding="async">
          <div class="wgc__opt"><span class="wgc__zv">★★★★★</span><strong><?php echo esc_html( $o[1] ); ?> · provjereni kupac</strong><p><?php echo esc_html( $o[2] ); ?></p></div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- 10) NORIKS pogoji -->
  <section class="wgc__s wgc__s--bg">
    <div class="wgc__v">
      <div class="wgc__kicker wgc__c">KUPUJTE BEZ BRIGE</div>
      <h2 class="wgc__h2 wgc__c">Uz NORIKS kupujete <em>bez rizika</em></h2>
      <p class="wgc__p wgc__c">NORIKS GelCushion isprobajte kod kuće. Ako vam ne odgovara, imate 30 dana za povrat – bez kompliciranja i bez pitanja.</p>
      <div class="wgc__red4 wgc__pog">
        <div><strong>30 dana</strong><span>za povrat novca</span></div>
        <div><strong>Besplatna dostava</strong><span>iznad 70 €</span></div>
        <div><strong>Plaćanje pouzećem</strong><span>platite kad paket stigne</span></div>
        <div><strong>120.000 kupaca</strong><span>prosječna ocjena 4,8</span></div>
      </div>
    </div>
  </section>
</div>
<style>
.wgc__traka{padding:36px 0;background:linear-gradient(135deg,#eef1f7 0%,#f8f6f1 100%);color:#1c1c1c}.wgc__tmreza{display:grid;grid-template-columns:repeat(4,1fr);gap:18px}.wgc__tk{display:flex;align-items:center;gap:14px;background:#fff;border:1px solid rgba(29,43,79,.08);border-radius:16px;padding:20px 18px;box-shadow:0 8px 24px rgba(29,43,79,.08)}.wgc__ti{flex:0 0 52px;width:52px;height:52px;border-radius:50%;background:linear-gradient(135deg,#1d2b4f,#33477a);color:#fff;display:flex;align-items:center;justify-content:center;box-shadow:0 6px 14px rgba(29,43,79,.25)}.wgc__tt strong{display:block;font-size:16.5px;font-weight:800;line-height:1.25;color:#1c1c1c}.wgc__tt span{display:block;font-size:13.5px;line-height:1.4;color:#5a5f6b;margin-top:3px}@media (max-width:860px){.wgc__traka{padding:28px 0}.wgc__tmreza{grid-template-columns:1fr 1fr;gap:12px}.wgc__tk{flex-direction:column;text-align:center;padding:18px 12px;gap:10px}.wgc__tt strong{font-size:15px}}
.wgc{color:#1c1c1c;font-family:inherit}
.wgc__s{padding:56px 0;background:#fff}
.wgc__s--bg{background:#f4f3ef}
.wgc__v{max-width:1240px;margin:0 auto;padding:0 24px;box-sizing:border-box}
.wgc__c{text-align:center}
.wgc__kicker{font-size:13px;letter-spacing:1px;text-transform:uppercase;color:#555;margin:0 0 8px;font-weight:700}
.wgc__h2{font-size:clamp(24px,3vw,34px);font-weight:800;line-height:1.2;margin:0 0 18px;color:#1c1c1c}
.wgc__h2 em{font-style:italic}
.wgc__p{font-size:15.5px;line-height:1.65;color:#333;margin:0 0 14px}
.wgc__zak{font-size:16px;font-weight:800;line-height:1.5;margin:14px 0 0}

.wgc__red4{display:grid;grid-template-columns:repeat(4,1fr);gap:18px;text-align:center}
.wgc__red4 strong{display:block;font-size:18px;font-weight:800}
.wgc__red4 span{font-size:13.5px;opacity:.85}
.wgc__grid3{display:grid;grid-template-columns:repeat(3,1fr);gap:22px;margin-top:22px}
.wgc__sit{border-radius:16px;overflow:hidden;box-shadow:0 10px 30px rgba(0,0,0,.10);background:#1d2b4f}
.wgc__sit img{width:100%;aspect-ratio:4/5;object-fit:cover;display:block}
.wgc__sit p{color:#fff;font-size:16px;line-height:1.5;font-weight:600;margin:0;padding:18px 20px 22px}
.wgc__dva{display:grid;grid-template-columns:1fr 1fr;gap:48px;align-items:center}
.wgc__dva--rev > div:first-child{order:2}
.wgc__media{border-radius:16px;overflow:hidden;box-shadow:0 10px 30px rgba(0,0,0,.10);aspect-ratio:4/5;background:#fff}
.wgc__media img{width:100%;height:100%;object-fit:cover;display:block}
.wgc__media--sq img{object-fit:contain}
.wgc__red3{display:grid;grid-template-columns:repeat(3,1fr);gap:12px;margin:6px 0 18px}
.wgc__red3 div{background:#fff;border-radius:12px;padding:12px;text-align:center}
.wgc__red3 strong{display:block;font-size:15px}
.wgc__red3 span{font-size:13px;color:#555}
.wgc__tocke{list-style:none;margin:0;padding:0;display:flex;flex-direction:column;gap:14px}
.wgc__tocke li{display:flex;gap:14px;align-items:flex-start;list-style:none}
.wgc__st{flex:0 0 40px;height:40px;border-radius:50%;background:#1d2b4f;color:#fff;font-weight:800;display:flex;align-items:center;justify-content:center;font-size:14px}
.wgc__tocke strong{font-size:16px}
.wgc__tocke p{margin:4px 0 0;font-size:15px;line-height:1.6;color:#333}
.wgc__kv{list-style:none;margin:0;padding:0}
.wgc__kv li{position:relative;padding-left:30px;margin:0 0 12px;font-size:15.5px;line-height:1.55;list-style:none}
.wgc__kv li::before{content:"\2713";position:absolute;left:0;top:0;width:20px;height:20px;border-radius:50%;background:#1d2b4f;color:#fff;font-size:12px;display:flex;align-items:center;justify-content:center}
.wgc__vid{border-radius:16px;overflow:hidden;box-shadow:0 10px 30px rgba(0,0,0,.10);aspect-ratio:9/16;background:#000}
.wgc__vid video{width:100%;height:100%;object-fit:cover;display:block}
.wgc__fb{background:#fff;border:1px solid #e6e6e6;border-radius:14px;padding:16px 18px}
.wgc__fbh{display:flex;gap:12px;align-items:center;margin-bottom:10px}
.wgc__fbh img{width:44px;height:44px;border-radius:50%;object-fit:cover}
.wgc__fbh strong{display:block;font-size:15px}
.wgc__fbh span{font-size:12.5px;color:#777}
.wgc__fb p{margin:0;font-size:15px;line-height:1.6;color:#333}
.wgc__plavo{background:#1d2b4f;color:#fff;text-align:center;font-weight:700;padding:12px 16px;margin:-56px 0 40px;font-size:15px}
.wgc__rez{background:#fff;border-radius:14px;padding:22px;text-align:center;box-shadow:0 6px 20px rgba(0,0,0,.06)}
.wgc__rez strong{display:block;font-size:17px;margin-bottom:8px}
.wgc__rez p{margin:0;font-size:15px;line-height:1.6;color:#333}
.wgc__op{background:#fff;border:1px solid #e6e6e6;border-radius:14px;overflow:hidden}
.wgc__op img{width:100%;aspect-ratio:1/1;object-fit:cover;display:block}
.wgc__opt{padding:14px 16px 18px}
.wgc__zv{color:#e0a33c;letter-spacing:2px;display:block;margin-bottom:6px}
.wgc__opt strong{font-size:14px;display:block;margin-bottom:6px}
.wgc__opt p{margin:0;font-size:15px;line-height:1.6;color:#333}
.wgc__pog{margin-top:22px}
.wgc__pog > div{background:#fff;border-radius:14px;box-shadow:0 6px 20px rgba(0,0,0,.07);padding:22px 16px}
.wgc__pog span{color:#444;opacity:1}
@media (max-width:860px){
  .wgc__s{padding:38px 0}
  .wgc__dva{grid-template-columns:1fr;gap:22px}
  .wgc__dva--rev > div:first-child{order:0}
  .wgc__grid3{grid-template-columns:1fr}
  .wgc__videi{grid-template-columns:repeat(3,1fr);gap:8px}
  .wgc__red4{grid-template-columns:1fr 1fr}
  .wgc__plavo{margin-top:-38px}
}
/* karusel kot na originalu (puscici < >) */
.wgc__karw{position:relative}
.wgc__kar{display:grid;grid-auto-flow:column;grid-auto-columns:calc((100% - 44px)/3);grid-template-columns:none;overflow-x:auto;scroll-snap-type:x mandatory;scrollbar-width:none;-webkit-overflow-scrolling:touch}
.wgc__kar::-webkit-scrollbar{display:none}
.wgc__kar>*{scroll-snap-align:start}
.wgc__pus{position:absolute;top:50%;transform:translateY(-50%);width:42px;height:42px;border-radius:50%;border:0;background:#fff;box-shadow:0 4px 14px rgba(0,0,0,.18);font-size:22px;line-height:42px;cursor:pointer;z-index:2;color:#1d2b4f;padding:0}
.wgc__pus--l{left:-14px}.wgc__pus--d{right:-14px}
@media (max-width:860px){.wgc__kar{grid-auto-columns:82%}.wgc__videi.wgc__kar{grid-auto-columns:62%}.wgc__pus--l{left:4px}.wgc__pus--d{right:4px}}
</style>
<script>
(function(){document.querySelectorAll('.wgc__kar').forEach(function(k){
  var w=document.createElement('div');w.className='wgc__karw';k.parentNode.insertBefore(w,k);w.appendChild(k);
  ['l','d'].forEach(function(s){var b=document.createElement('button');b.type='button';b.className='wgc__pus wgc__pus--'+s;b.setAttribute('aria-label',s==='l'?'Prethodno':'Sljedeće');b.innerHTML=s==='l'?'&#8249;':'&#8250;';
    b.addEventListener('click',function(){var c=k.firstElementChild;var d=c?c.getBoundingClientRect().width+22:300;k.scrollBy({left:s==='l'?-d:d,behavior:'smooth'});});w.appendChild(b);});
});})();
</script>
