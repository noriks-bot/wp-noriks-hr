<?php
/**
 * product-bottom: NORIKS KneeTape — vec izrezana kinezioloska traka za koljeno (orto-kneetape).
 * Original: tryapris.com (APRIS Knee Support — Pre-Cut Kinesiology Tape). Slike: img/kneetape/ (kreative z namizja + ciste fotografije z originalne strani).
 * Pravilo: svaka sekcija ima TOCNO JEDNU sliku, naizmjenicno lijevo/desno, nikada na sredini;
 * slike su omedene na max-height 430px.
 *   1) Opet problemi s koljenom? (lijevo)
 *   2) Zašto boli (desno)
 *   3) Nova traka (lijevo)
 *   4) Primjena (desno)
 *   5) Što dobivate (lijevo)
 *   6) Svakodnevica (desno)
 *   7) Sigurno za kožu (lijevo)
 *   8) Usporedba (desno)
 *   9) Boje i poklon (lijevo)
 *   10) NORIKS KneeTape (desno)
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$nkt      = get_template_directory_uri() . '/img/kneetape/';
$nkt_path = get_template_directory() . '/img/kneetape/';
$nkt_img  = function( $file, $alt ) use ( $nkt, $nkt_path ) {
  if ( ! file_exists( $nkt_path . $file ) ) { return ''; }
  return '<img src="' . esc_url( $nkt . $file ) . '" alt="' . esc_attr( $alt ) . '" loading="lazy">';
};
?>

<!-- 1) OPET PROBLEMI S KOLJENOM? — slika lijevo -->
<section class="nkt-sec nkt-tint">
  <div class="nkt-wrap nkt-row2">
    <div class="nkt-media"><?php echo $nkt_img( 'kt-03-problemi.jpg', 'NORIKS KneeTape traka na koljenu' ); ?></div>
    <div class="nkt-copy">
      <p class="nkt-kicker">Opet problemi s koljenom?</p>
      <h2 class="nkt-h2">Koljeno koje <em>više ne djeluje pouzdano</em></h2>
      <p>Stepenice, čučanj, duga šetnja — svaki pokret se najprije provjeri, pa tek onda napravi. NORIKS traka vraća osjećaj oslonca.</p>
      <ul class="nkt-tags">
        <li>Kronična bol u koljenu</li>
        <li>Nesigurnost i nestabilnost</li>
        <li>Bol pri sportu i radu</li>
        <li>Artroza i druge dijagnoze</li>
        <li>Ozljede i nakon operacija</li>
        <li>Oteklina nakon stajanja</li>
      </ul>
      <a class="nkt-cta" href="#bundle-selector">Naruči NORIKS KneeTape</a>
    </div>
  </div>
</section>

<!-- 2) ZAŠTO BOLI — slika desno -->
<section class="nkt-sec">
  <div class="nkt-wrap nkt-row2 nkt-row2--rev">
    <div class="nkt-copy">
      <p class="nkt-kicker">Zašto boli</p>
      <h2 class="nkt-h2">Zglobu često treba <em>samo malo vođenja</em></h2>
      <p>Mnogi misle da ih koljeno boli jer je preopterećeno ili „staro”. No zglobu obično treba malo više stabilnosti i vođenja pri pokretu.</p>
      <p>Kinezioloska traka ne blokira zglob kao kruta ortoza. Ona lagano podiže kožu iznad tkiva, daje mozgu povratnu informaciju o položaju koljena i tako smiruje nesiguran pokret.</p>
      <ul class="nkt-check">
        <li>Podupire, a <strong>ne steže</strong></li>
        <li>Prati pokret umjesto da ga zaustavlja</li>
        <li>Ne ograničava cirkulaciju</li>
      </ul>
    </div>
    <div class="nkt-media"><?php echo $nkt_img( 'kt-11-savjet.jpg', 'Fizioterapeut pregledava koljeno' ); ?></div>
  </div>
</section>

<!-- 3) NOVA TRAKA — slika lijevo -->
<section class="nkt-sec nkt-tint">
  <div class="nkt-wrap nkt-row2">
    <div class="nkt-media"><?php echo $nkt_img( 'kt-05-nova-traka.jpg', 'Nova NORIKS traka u usporedbi sa starom' ); ?></div>
    <div class="nkt-copy">
      <p class="nkt-kicker">Nova traka</p>
      <h2 class="nkt-h2">Šire trake <em>i jače ljepilo</em></h2>
      <p>Nova generacija trake šira je i deblja od prijašnje, s ljepilom koje drži i kad se znojite ili tuširate.</p>
      <ul class="nkt-check">
        <li><strong>Bolja potpora i stabilnost</strong> — šire trake i deblji materijal</li>
        <li><strong>Pouzdano drži pri kretanju i sportu</strong> — kvalitetno i jako ljepilo</li>
        <li><strong>Prikladno i za osjetljivu kožu</strong> — 100 % bez lateksa</li>
      </ul>
    </div>
  </div>
</section>

<!-- 4) PRAVE PRIČE — fotografije kupaca -->
<section class="nkt-sec nkt-rev">
  <div class="nkt-wrap">
    <p class="nkt-kicker" style="text-align:center">Prave priče</p>
    <h2 class="nkt-h2" style="text-align:center">Kupci <em>i njihova koljena</em></h2>
    <div class="nkt-rev__strip">
        <figure class="nkt-rev__card">
          <?php echo $nkt_img( 'kt-r1-barbara.jpg', 'Barbara S., 58' ); ?>
          <figcaption>
            <span class="nkt-rev__stars">★★★★★</span>
            <span class="nkt-rev__who">Barbara S., 58</span>
            <p>„Koljeno mi je popuštalo svaki dan. Traku sam stavila u utorak ujutro, ne očekujući puno. Do popodneva je bol već bila manja."</p>
          </figcaption>
        </figure>
                <figure class="nkt-rev__card">
          <?php echo $nkt_img( 'kt-r3-traka.jpg', 'Vesna M., 63' ); ?>
          <figcaption>
            <span class="nkt-rev__stars">★★★★★</span>
            <span class="nkt-rev__who">Vesna M., 63</span>
            <p>„Prije ovoga sam probala tri ortoze i traku iz role. Sve se skliznulo do podneva. Ovo je prvo što ostane točno ondje gdje sam stavila."</p>
          </figcaption>
        </figure>
        <figure class="nkt-rev__card">
          <?php echo $nkt_img( 'kt-r4-sharon.jpg', 'Sanja K., 61' ); ?>
          <figcaption>
            <span class="nkt-rev__stars">★★★★★</span>
            <span class="nkt-rev__who">Sanja K., 61</span>
            <p>„Svaka ortoza koju sam imala stezala mi je nogu do crvenih tragova. Ova drži koljeno bez gušenja — to je razlika."</p>
          </figcaption>
        </figure>
    </div>
  </div>
</section>

<!-- 5) PRIMJENA — slika desno -->
<section class="nkt-sec nkt-tint">
  <div class="nkt-wrap nkt-row2 nkt-row2--rev">
    <div class="nkt-copy">
      <p class="nkt-kicker">Primjena</p>
      <h2 class="nkt-h2">Nanesete je <em>sami, u manje od minute</em></h2>
      <p>Traka je već izrezana u oblik za koljeno. Nema mjerenja, rezanja ni odlaska fizioterapeutu.</p>
      <ol class="nkt-steps">
        <li>Skinite zaštitnu foliju</li>
        <li>Zalijepite bazu ispod koljena</li>
        <li>Prekrižite krakove oko čašice</li>
        <li>Protrljajte dlanom — gotovo!</li>
      </ol>
      <p class="nkt-note">Koža mora biti čista i suha, bez kreme i ulja.</p>
    </div>
    <div class="nkt-media"><?php echo $nkt_img( 'kt-04-primjena.jpg', 'Četiri koraka nanošenja NORIKS trake' ); ?></div>
  </div>
</section>

<!-- 6) ŠTO DOBIVATE — slika lijevo -->
<section class="nkt-sec">
  <div class="nkt-wrap nkt-row2">
    <div class="nkt-media"><?php echo $nkt_img( 'kt-06-prednosti.jpg', 'Prednosti NORIKS trake za koljeno' ); ?></div>
    <div class="nkt-copy">
      <p class="nkt-kicker">Što dobivate</p>
      <h2 class="nkt-h2">Četiri stvari koje <em>odmah primijetite</em></h2>
      <div class="nkt-points">
        <div class="nkt-point"><h3>Brzo olakšanje boli</h3><p>Potpora se osjeti čim se traka zalijepi i koljeno dobije oslonac.</p></div>
        <div class="nkt-point"><h3>Veća pokretljivost</h3><p>Traka se rasteže do 140 % i prati pokret umjesto da ga blokira.</p></div>
        <div class="nkt-point"><h3>Potiče zacjeljivanje</h3><p>Blago podizanje kože rasterećuje tkivo oko zgloba.</p></div>
        <div class="nkt-point"><h3>Brži oporavak</h3><p>Nakon treninga ili ozljede koljeno se lakše vraća u normalan ritam.</p></div>
      </div>
    </div>
  </div>
</section>

<!-- 7) SVAKODNEVICA — slika desno -->
<section class="nkt-sec nkt-tint">
  <div class="nkt-wrap nkt-row2 nkt-row2--rev">
    <div class="nkt-copy">
      <p class="nkt-kicker">Svakodnevica</p>
      <h2 class="nkt-h2">Što se mijenja <em>u običnom danu</em></h2>
      <ul class="nkt-check">
        <li>Hoda, vrtlari i saginje se — <strong>bez straha</strong></li>
        <li>Penje se stubama <strong>bez držanja za rukohvat</strong></li>
        <li>Prati pokret koljena <strong>bez ograničenja</strong></li>
        <li>Drži <strong>3 do 5 dana</strong> — bez popravljanja</li>
      </ul>
      <p>Traka ostaje na mjestu pod hlačama i tajicama, pa je nosite i na poslu.</p>
    </div>
    <div class="nkt-media"><?php echo $nkt_img( 'kt-07-svakodnevica.jpg', 'Žena hoda s NORIKS trakom na koljenu' ); ?></div>
  </div>
</section>

<!-- 8) SIGURNO ZA KOŽU — slika lijevo -->
<section class="nkt-sec">
  <div class="nkt-wrap nkt-row2">
    <div class="nkt-media"><?php echo $nkt_img( 'kt-08-koza.jpg', 'Detalj materijala NORIKS trake' ); ?></div>
    <div class="nkt-copy">
      <p class="nkt-kicker">Sigurno za kožu</p>
      <h2 class="nkt-h2">Vodootporna, <em>a nježna prema koži</em></h2>
      <div class="nkt-facts">
        <div><span class="nkt-num">140 %</span><h3>Rastezljivost</h3><p>Prati pokret koljena u svim smjerovima.</p></div>
        <div><span class="nkt-num">3–5</span><h3>Dana nošenja</h3><p>Jedna traka izdrži nekoliko dana, i pod tušem.</p></div>
        <div><span class="nkt-num">100 %</span><h3>Bez lateksa</h3><p>Pamučna podloga za osjetljivu kožu.</p></div>
        <div><span class="nkt-num">10</span><h3>Traka u pakiranju</h3><p>Dovoljno za oko mjesec dana nošenja.</p></div>
      </div>
    </div>
  </div>
</section>

<!-- 9) USPOREDBA — slika desno -->
<section class="nkt-sec nkt-tint">
  <div class="nkt-wrap nkt-row2 nkt-row2--rev">
    <div class="nkt-copy">
      <p class="nkt-kicker">Usporedba</p>
      <h2 class="nkt-h2">Izrezana traka <em>umjesto role</em></h2>
      <ul class="nkt-vs">
        <li class="is-yes">Već izrezana za koljeno</li>
        <li class="is-yes">Primjena bez greške, i bez iskustva</li>
        <li class="is-yes">Razvijeno i testirano s fizioterapeutima</li>
        <li class="is-no">Rola: dugotrajno rezanje i mjerenje</li>
        <li class="is-no">Složena primjena, uglavnom za stručnjake</li>
        <li class="is-no">Zahtijeva skupe termine i tretmane</li>
      </ul>
    </div>
    <div class="nkt-media"><?php echo $nkt_img( 'kt-09-usporedba.jpg', 'Usporedba NORIKS trake i trake u roli' ); ?></div>
  </div>
</section>

<!-- 10) NORIKS KNEETAPE — slika lijevo -->
<section class="nkt-sec">
  <div class="nkt-wrap nkt-row2">
    <div class="nkt-media"><?php echo $nkt_img( 'kt-10-fizioterapeut.jpg', 'Fizioterapeut drži pakiranje NORIKS trake' ); ?></div>
    <div class="nkt-copy">
      <p class="nkt-kicker">NORIKS KneeTape</p>
      <h2 class="nkt-h2">Isprobajte je <em>30 dana bez rizika</em></h2>
      <p>Zalijepite prvu traku i provedite s njom običan tjedan — posao, stepenice, šetnju. Ako ne osjetite razliku, vratit ćemo vam novac.</p>
      <ul class="nkt-check">
        <li><strong>30 dana</strong> za povrat novca</li>
        <li>Brza dostava na kućnu adresu</li>
        <li>Plaćanje pouzećem pri preuzimanju</li>
      </ul>
      <a class="nkt-cta" href="#bundle-selector">Naruči NORIKS KneeTape</a>
    </div>
  </div>
</section>

<style>
.nkt-sec { padding: 60px 0; background: #fff; font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Arial, sans-serif; color: #15243d; }
.nkt-sec * { box-sizing: border-box; }
.nkt-tint { background: #eef4fd; }
.nkt-wrap { width: 100%; max-width: 1240px; margin: 0 auto; padding: 0 24px; }
.nkt-kicker { font-size: 12.5px; font-weight: 800; letter-spacing: .14em; text-transform: uppercase; color: #1f6fd0; margin: 0 0 10px; }
.nkt-h2 { font-size: clamp(25px, 3.1vw, 36px); font-weight: 800; line-height: 1.18; letter-spacing: -.01em; margin: 0 0 16px; color: #15243d; }
.nkt-h2 em { font-style: italic; font-weight: 800; color: #1f6fd0; }
.nkt-copy p { font-size: 16px; line-height: 1.7; color: #4c5a71; margin: 0 0 14px; }
.nkt-row2 { display: grid; grid-template-columns: 1fr 1fr; gap: 56px; align-items: center; }
.nkt-media { text-align: left; }
.nkt-row2--rev .nkt-media { text-align: right; }
.nkt-media img { display: inline-block; width: auto; max-width: 100%; max-height: 560px; object-fit: contain; border-radius: 14px;
  box-shadow: 0 2px 4px rgba(20,25,40,.05), 0 14px 40px rgba(20,25,40,.10); }
.nkt-check { list-style: none; padding: 0; margin: 4px 0 22px; display: flex; flex-direction: column; gap: 11px; }
.nkt-check li { position: relative; padding-left: 28px; font-size: 15.5px; line-height: 1.5; color: #15243d; }
.nkt-check li::before { content: "\2713"; position: absolute; left: 0; top: 0; width: 20px; height: 20px; border-radius: 50%; background: #2f9e5f; color: #fff; font-size: 11px; font-weight: 800; display: flex; align-items: center; justify-content: center; }
.nkt-cross { list-style: none; padding: 0; margin: 4px 0 22px; display: flex; flex-direction: column; gap: 11px; }
.nkt-cross li { position: relative; padding-left: 28px; font-size: 15.5px; line-height: 1.5; color: #15243d; }
.nkt-cross li::before { content: "\2715"; position: absolute; left: 0; top: 0; width: 20px; height: 20px; border-radius: 50%; background: #e04a4a; color: #fff; font-size: 11px; font-weight: 800; display: flex; align-items: center; justify-content: center; }
.nkt-vs { list-style: none; padding: 0; margin: 4px 0 0; display: flex; flex-direction: column; gap: 10px; }
.nkt-vs li { position: relative; padding-left: 28px; font-size: 15px; line-height: 1.5; color: #15243d; }
.nkt-vs li::before { position: absolute; left: 0; top: 0; width: 20px; height: 20px; border-radius: 50%; font-size: 11px; font-weight: 800; display: flex; align-items: center; justify-content: center; }
.nkt-vs .is-yes::before { content: "\2713"; background: #2f9e5f; color: #fff; }
.nkt-vs .is-no { color: #7d8898; }
.nkt-vs .is-no::before { content: "\2715"; background: #e6e9ef; color: #8f9bab; }
.nkt-points { display: flex; flex-direction: column; gap: 20px; }
.nkt-point h3 { font-size: 17.5px; font-weight: 800; margin: 0 0 6px; color: #1f6fd0; }
.nkt-point p { font-size: 15.5px; color: #4c5a71; line-height: 1.6; margin: 0; }
.nkt-facts { display: grid; grid-template-columns: 1fr 1fr; gap: 16px; margin-top: 6px; }
.nkt-facts > div { background: #eef4fd; border-radius: 12px; padding: 16px 18px; }
.nkt-num { display: block; font-size: 26px; font-weight: 800; color: #1f6fd0; line-height: 1.1; margin-bottom: 6px; }
.nkt-facts h3 { font-size: 15.5px; font-weight: 800; margin: 0 0 4px; color: #15243d; }
.nkt-facts p { font-size: 14px !important; color: #4c5a71 !important; line-height: 1.5 !important; margin: 0 !important; }
.nkt-steps { list-style: none; counter-reset: st; padding: 0; margin: 6px 0 20px; display: flex; flex-direction: column; gap: 14px; }
.nkt-steps li { counter-increment: st; position: relative; padding-left: 44px; font-size: 15.5px; line-height: 1.55; color: #15243d; }
.nkt-steps li::before { content: counter(st); position: absolute; left: 0; top: -2px; width: 30px; height: 30px; border-radius: 50%; background: #1f6fd0; color: #fff; font-size: 14px; font-weight: 800; display: flex; align-items: center; justify-content: center; }
.nkt-tags { list-style: none; padding: 0; margin: 6px 0 18px; display: grid; grid-template-columns: repeat(2, minmax(0, 1fr)); gap: 10px 16px; }
.nkt-tags li { position: relative; padding-left: 24px; font-size: 15.5px; font-weight: 600; color: #15243d; }
.nkt-tags li::before { content: ""; position: absolute; left: 0; top: 6px; width: 12px; height: 12px; border-radius: 50%; background: #1f6fd0; }
.nkt-note { font-size: 13.5px !important; color: #7d8898 !important; font-style: italic; margin: 6px 0 0 !important; }
.nkt-cta { display: inline-block; background: #1f6fd0; color: #fff !important; font-size: 15px; font-weight: 700; padding: 15px 30px; border-radius: 8px; text-decoration: none; }
.nkt-cta:hover { background: #1854a1; color: #fff !important; }

.nkt-rev .nkt-wrap { max-width: 1240px; }
.nkt-rev__strip { display: grid; grid-template-columns: repeat(3, minmax(0,1fr)); gap: 20px; margin-top: 22px; }
.nkt-rev__card { margin: 0; background: #fff; border-radius: 14px; overflow: hidden;
  box-shadow: 0 2px 4px rgba(20,25,40,.05), 0 14px 34px rgba(20,25,40,.10); display: flex; flex-direction: column; }
.nkt-rev__card img { width: 100%; max-width: none; max-height: none; height: 300px; object-fit: cover; border-radius: 0; box-shadow: none; display: block; }
.nkt-rev__card figcaption { padding: 14px 16px 18px; }
.nkt-rev__stars { color: #f5a623; font-size: 15px; letter-spacing: 2px; }
.nkt-rev__who { display: inline-block; margin-left: 8px; background: #eef4fd; color: #1f6fd0; font-size: 12.5px; font-weight: 800; padding: 3px 10px; border-radius: 999px; }
.nkt-rev__card p { font-size: 14.5px !important; line-height: 1.6 !important; color: #4c5a71 !important; margin: 10px 0 0 !important; }
@media (max-width: 980px) {
  .nkt-rev__strip { grid-template-columns: 1fr 1fr; }
}
@media (max-width: 560px) {
  .nkt-rev__strip { grid-auto-flow: column; grid-auto-columns: 78%; grid-template-columns: none;
    overflow-x: auto; scroll-snap-type: x mandatory; -webkit-overflow-scrolling: touch; padding-bottom: 6px; }
  .nkt-rev__card { scroll-snap-align: center; }
  .nkt-rev__card img { height: 260px; }
}

@media (max-width: 980px) {
  .nkt-row2 { grid-template-columns: 1fr; gap: 28px; }
  .nkt-row2--rev .nkt-media { order: -1; }
}
@media (max-width: 560px) {
  .nkt-sec { padding: 42px 0; }
  .nkt-wrap { padding: 0 16px; }
  .nkt-cta { width: 100%; text-align: center; }
  .nkt-media img { max-height: 440px; }
  .nkt-num { font-size: 23px; }
  .nkt-tags { grid-template-columns: 1fr; }
}

/* kratek opis izdelka: kljukice namesto pik (REST pobrise inline slog) */
.woocommerce div.product .woocommerce-product-details__short-description ul,
.woocommerce-product-details__short-description ul {
  list-style: none !important; margin: 10px 0 14px !important; padding-left: 0 !important; }
.woocommerce div.product .woocommerce-product-details__short-description ul li,
.woocommerce-product-details__short-description ul li {
  list-style: none !important; text-indent: 0 !important; margin: 0 0 7px !important;
  line-height: 1.45 !important; font-size: 15.5px !important;
  display: block !important; position: relative !important; padding-left: 31px !important; }
.woocommerce-product-details__short-description ul li::marker { content: "" !important; }
.woocommerce-product-details__short-description ul li::before { content: none !important; }
.woocommerce-product-details__short-description .nkt-tick {
  position: absolute !important; left: 0 !important; top: 1px !important;
  width: 21px; height: 21px; border-radius: 50%;
  background: #1f6fd0 !important; color: #fff !important;
  font-size: 12px !important; font-weight: 800 !important; line-height: 21px !important;
  text-align: center !important; display: inline-block !important; }
.woocommerce-product-details__short-description p:first-of-type { font-size: 16px; line-height: 1.55; }
</style>
