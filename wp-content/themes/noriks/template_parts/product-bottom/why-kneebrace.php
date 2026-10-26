<?php
/**
 * product-bottom: NORIKS KneeBrace — patelarni steznik za koljeno (orto-kneebrace).
 * Original: getstryde.co/products/stryde-precision-strap — struktura 1:1 z originalom
 * (isto stevilo sekcij, isti vrstni red, isti elementi), besedila prevedena.
 *   1) Problem je kuda ide sila      4) Nosite ga 10 sati
 *   2) Nije ortoza, manji je         5) Ciljana potpora (stanja)
 *   3) Ostaje gdje ga stavite        6) Potvrdjene recenzije (7 kartica)
 *                                    7) Jedna velicina + jamstvo
 * Slike: img/kneebrace/ (Dropbox NORIKS-KNEEBRACE/SPLETNA STRAN).
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$nkb      = get_template_directory_uri() . '/img/kneebrace/';
$nkb_path = get_template_directory() . '/img/kneebrace/';
$nkb_img  = function( $file, $alt ) use ( $nkb, $nkb_path ) {
  if ( ! file_exists( $nkb_path . $file ) ) { return ''; }
  return '<img src="' . esc_url( $nkb . $file ) . '" alt="' . esc_attr( $alt ) . '" loading="eager">';
};
?>

<!-- 1) GDJE IDE SILA — slika lijevo -->
<section class="nkb-sec nkb-tint">
  <div class="nkb-wrap nkb-row2">
    <div class="nkb-media"><?php echo $nkb_img( 'kb-12-anatomija.webp', 'Anatomija koljena — NORIKS KneeBrace preusmjerava silu s patelarne tetive' ); ?></div>
    <div class="nkb-copy">
      <p class="nkb-kicker">Gdje ide sila</p>
      <h2 class="nkb-h2">Vaše koljeno nije problem. <em>Problem je kuda ide sila.</em></h2>
      <p>Svaki put kad napravite korak, popnete se stubama ili se odgurnete sa stolca, tijelo pošalje ogromnu silu kroz jednu malenu točku ispod koljenske čašice.</p>
      <p class="nkb-big">Jedna točka. Veličine kovanice.</p>
      <p>Kompresijski rukavi omotaju <strong>cijeli</strong> zglob. Pritisak razmažu posvuda, što znači da ga ne usmjere nigdje.</p>
    </div>
  </div>
</section>

<!-- 2) NAMJERNO MANJI — slika desno -->
<section class="nkb-sec">
  <div class="nkb-wrap nkb-row2 nkb-row2--rev">
    <div class="nkb-copy">
      <p class="nkb-kicker">Namjerno manji</p>
      <h2 class="nkb-h2">Ovo nije ortoza za koljeno. <em>Manji je. Namjerno.</em></h2>
      <p>Ortoza omota cijeli zglob u neopren i nada se najboljem. Kao da stavite flaster preko cijele ruke kad ste porezali jedan prst.</p>
      <p>NORIKS KneeBrace radi jednu stvar: pritisne <strong>točno ono mjesto</strong> gdje se sila koncentrira i preusmjeri je.</p>
      <p>Zamislite vrata koja se zaglavljuju. Možete podmazati šarke, brusiti ih ili ih svaki put zalupiti. Ili možete izravnati okvir pa se otvaraju bez truda.</p>
      <p class="nkb-big">NORIKS izravnava okvir.</p>
    </div>
    <div class="nkb-media"><?php echo $nkb_img( 'kb-11-skalpel.webp', 'Skalpel, a ne malj — NORIKS KneeBrace protiv velike ortoze' ); ?></div>
  </div>
</section>

<!-- 3) NE KLIZI — slika lijevo -->
<section class="nkb-sec nkb-tint">
  <div class="nkb-wrap nkb-row2">
    <div class="nkb-media"><?php echo $nkb_img( 'kb-05-trcanje.webp', 'Trčanje s NORIKS KneeBrace stezníkom koji ne klizi' ); ?></div>
    <div class="nkb-copy">
      <p class="nkb-kicker">Ne klizi</p>
      <h2 class="nkb-h2">Ostaje točno ondje <em>gdje ga stavite.</em></h2>
      <p>Pritužba broj jedan na svaki steznik za koljeno na tržištu: <strong>klizi</strong>. Kod iskoraka. Kod trčanja. Kod obične šetnje do trgovine. Više vremena potrošite na namještanje nego na nošenje.</p>
      <p>Silikonski jastučić hvata se izravno za kožu i zaključa se u položaju. Kupci ga nose kroz cijeli desetkilometarski trening i četverodnevne planinarske ture po blatnjavim stazama.</p>
      <p class="nkb-big">Nije se pomaknuo.</p>
    </div>
  </div>
</section>

<!-- 4) CIJELI DAN — slika desno -->
<section class="nkb-sec">
  <div class="nkb-wrap nkb-row2 nkb-row2--rev">
    <div class="nkb-copy">
      <p class="nkb-kicker">Cijeli dan</p>
      <h2 class="nkb-h2">Nosite ga deset sati. <em>Zaboravite da je ondje.</em></h2>
      <p>Većina potpora za koljeno pretvori nogu u saunu u pola sata. „Kupila sam rukav i skinula ga jer mi je noga curila." Zvuči poznato?</p>
      <p>NORIKS koristi prozračno pletivo otvorene strukture koje propušta zrak. Bez znojenja. Bez svrbeža. Bez osipa.</p>
      <p>Nosite ga ispod radnih hlača. Ispod tajica. Ispod nogometnih čarapa. Nitko neće znati da je ondje — ali vaše koljeno hoće.</p>
    </div>
    <div class="nkb-media"><?php echo $nkb_img( 'kb-08-teretana.webp', 'NORIKS KneeBrace ispod tajica u teretani' ); ?></div>
  </div>
</section>

<!-- 5) CILJANA POTPORA — slika lijevo -->
<section class="nkb-sec nkb-tint">
  <div class="nkb-wrap nkb-row2">
    <div class="nkb-media"><?php echo $nkb_img( 'kb-13-ciljana-potpora.webp', 'Ciljana potpora NORIKS KneeBrace — meniskus, artritis, nakon operacije, ozljede' ); ?></div>
    <div class="nkb-copy">
      <p class="nkb-kicker">Ciljana potpora</p>
      <h2 class="nkb-h2">Ciljana potpora. <em>Potpuno olakšanje.</em></h2>
      <p>Isti biomehanički princip koji sportski ortopedi preporučuju kod boli u patelarnoj tetivi: silu odvedi s upaljene točke umjesto da stišćeš cijeli zglob.</p>
      <ul class="nkb-check">
        <li>Puknuće meniskusa</li>
        <li>Artritis i istrošena hrskavica</li>
        <li>Oporavak nakon operacije</li>
        <li>Ozljede koljena</li>
        <li>Preopterećenje — trkačko i skakačko koljeno</li>
        <li>Opća nestabilnost koljena</li>
      </ul>
    </div>
  </div>
</section>

<!-- 6) POTVRĐENE RECENZIJE -->
<section class="nkb-sec nkb-tint">
  <div class="nkb-wrap">
    <h2 class="nkb-h2" style="text-align:center">Što kažu <em>oni koji ga nose</em></h2>
    <p class="nkb-sub">Potvrđene kupnje</p>
    <div class="nkb-rev">
        <article class="nkb-rev__card">
          <div class="nkb-rev__img"><?php echo $nkb_img( 'kb-10-setnja.webp', 'Renata G. — NORIKS KneeBrace' ); ?></div>
          <div class="nkb-rev__body">
            <div class="nkb-rev__head"><span class="nkb-rev__stars">★★★★★</span><span class="nkb-rev__ver">✓ Potvrđena kupnja</span></div>
            <p>„Prošli vikend sam prohodala devet kilometara uz more, s po jednim stezníkom na svakom koljenu. Nisam osjetila baš ništa. Prije sam se morala vratiti nakon tri kilometra."</p>
            <cite>Renata G., Rijeka</cite>
          </div>
        </article>
        <article class="nkb-rev__card">
          <div class="nkb-rev__img"><?php echo $nkb_img( 'kb-07-vrt.webp', 'Janja V. — NORIKS KneeBrace' ); ?></div>
          <div class="nkb-rev__body">
            <div class="nkb-rev__head"><span class="nkb-rev__stars">★★★★★</span><span class="nkb-rev__ver">✓ Potvrđena kupnja</span></div>
            <p>„Odustala sam od svog vrta. Klečanje, saginjanje, kopanje — sve je boljelo. Stavila sam steznik i istog dana provela tri sata vani. Kći nije mogla vjerovati."</p>
            <cite>Janja V., Varaždin</cite>
          </div>
        </article>
        <article class="nkb-rev__card">
          <div class="nkb-rev__img"><?php echo $nkb_img( 'kb-08-teretana.webp', 'Emina H. — NORIKS KneeBrace' ); ?></div>
          <div class="nkb-rev__body">
            <div class="nkb-rev__head"><span class="nkb-rev__stars">★★★★★</span><span class="nkb-rev__ver">✓ Potvrđena kupnja</span></div>
            <p>„Četrdeset pet minuta na orbitreku svako jutro, a koljeno prije nije izdržalo ni dvadeset. S ovim stezníkom odradim cijeli trening svaki put. Udobno, prozračno i ne klizi."</p>
            <cite>Emina H., Zagreb</cite>
          </div>
        </article>
        <article class="nkb-rev__card">
          <div class="nkb-rev__img"><?php echo $nkb_img( 'kb-05-trcanje.webp', 'Klara M. — NORIKS KneeBrace' ); ?></div>
          <div class="nkb-rev__body">
            <div class="nkb-rev__head"><span class="nkb-rev__stars">★★★★★</span><span class="nkb-rev__ver">✓ Potvrđena kupnja</span></div>
            <p>„Odigrala sam dva seta tenisa, a da se nijednom nije pomaknuo. Prije pola godine nisam mogla završiti meč. Sada sam na terenu tri puta tjedno."</p>
            <cite>Klara M., Split</cite>
          </div>
        </article>
        <article class="nkb-rev__card">
          <div class="nkb-rev__img"><?php echo $nkb_img( 'kb-09-tajice.webp', 'Lana L. — NORIKS KneeBrace' ); ?></div>
          <div class="nkb-rev__body">
            <div class="nkb-rev__head"><span class="nkb-rev__stars">★★★★★</span><span class="nkb-rev__ver">✓ Potvrđena kupnja</span></div>
            <p>„Mislila sam da će izgledati smiješno ispod tajica. Ne vidi se uopće. Još važnije — vratila sam se na potisak nogama i iskorake bez onog oštrog probadanja."</p>
            <cite>Lana L., Osijek</cite>
          </div>
        </article>
        <article class="nkb-rev__card">
          <div class="nkb-rev__img"><?php echo $nkb_img( 'kb-06-dva-steznika.webp', 'Sanja T. — NORIKS KneeBrace' ); ?></div>
          <div class="nkb-rev__body">
            <div class="nkb-rev__head"><span class="nkb-rev__stars">★★★★★</span><span class="nkb-rev__ver">✓ Potvrđena kupnja</span></div>
            <p>„Fizioterapeut mi je rekao da probam patelarni steznik. Bila sam skeptična, ali nakon tjedan dana u teretani sam uvjerena. Čučnjevi, iskoraci, sve — bez bolova poslije."</p>
            <cite>Sanja T., Zadar</cite>
          </div>
        </article>
        <article class="nkb-rev__card">
          <div class="nkb-rev__img"><?php echo $nkb_img( 'kb-04-jedna-velicina.webp', 'Ivana R. — NORIKS KneeBrace' ); ?></div>
          <div class="nkb-rev__body">
            <div class="nkb-rev__head"><span class="nkb-rev__stars">★★★★★</span><span class="nkb-rev__ver">✓ Potvrđena kupnja</span></div>
            <p>„Koljeno me mjesecima držalo sa strane. Stane točno ispod nogometnih čarapa i ne pomiče se cijelih devedeset minuta. Opet treniram tri puta tjedno."</p>
            <cite>Ivana R., Karlovac</cite>
          </div>
        </article>
    </div>
  </div>
</section>

<!-- 7) JEDNA VELIČINA + JAMSTVO -->
<section class="nkb-sec">
  <div class="nkb-wrap nkb-row2 nkb-row2--rev">
    <div class="nkb-copy">
      <p class="nkb-kicker">Jedna veličina</p>
      <h2 class="nkb-h2">Jedna veličina <em>za sve</em></h2>
      <p>Bez tablice veličina i bez mjerenja. Podesiva čičak traka prianja uz svaki oblik noge — vitku, atletsku ili jaču. Omotajte, zategnite, gotovo.</p>
      <ul class="nkb-check">
        <li><strong>Silikonski jastučić</strong> koji se ne pomiče</li>
        <li><strong>Prozračna traka</strong> otvorenog pletiva</li>
        <li><strong>Nevidljiv</strong> ispod hlača i tajica</li>
        <li><strong>30 dana</strong> za povrat novca</li>
      </ul>
      <a class="nkb-cta" href="#bundle-selector">Naruči NORIKS KneeBrace</a>
      <p class="nkb-note">Brza dostava na kućnu adresu · Plaćanje pouzećem pri preuzimanju</p>
    </div>
    <div class="nkb-media"><?php echo $nkb_img( 'kb-04-jedna-velicina.webp', 'Jedna veličina za sve — NORIKS KneeBrace' ); ?></div>
  </div>
</section>

<style>
.nkb-sec { padding: 60px 0; background: #fff; font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Arial, sans-serif; color: #15181d; }
.nkb-sec * { box-sizing: border-box; }
.nkb-tint { background: #f2f4f7; }
.nkb-wrap { width: 100%; max-width: 1240px; margin: 0 auto; padding: 0 24px; }
.nkb-row2 { display: grid; grid-template-columns: 1fr 1fr; gap: 56px; align-items: center; }
.nkb-media img { display: block; width: 100%; height: auto; border-radius: 0;
  box-shadow: 0 2px 4px rgba(15,20,30,.05), 0 14px 40px rgba(15,20,30,.10); }
.nkb-kicker { font-size: 12.5px; font-weight: 800; letter-spacing: .14em; text-transform: uppercase; color: #2b6ef2; margin: 0 0 10px; }
.nkb-h2 { font-size: clamp(25px, 3.1vw, 36px); font-weight: 800; line-height: 1.18; letter-spacing: -.01em; margin: 0 0 16px; }
.nkb-h2 em { font-style: italic; font-weight: 800; color: #2b6ef2; }
.nkb-copy p { font-size: 16px; line-height: 1.7; color: #4d5663; margin: 0 0 14px; }
.nkb-big { font-size: 19px !important; font-weight: 800; color: #15181d !important; }
.nkb-check { list-style: none; padding: 0; margin: 6px 0 0; display: flex; flex-direction: column; gap: 11px; }
.nkb-check li { position: relative; padding-left: 28px; font-size: 15.5px; line-height: 1.5; color: #15181d; }
.nkb-check li::before { content: "\2713"; position: absolute; left: 0; top: 0; width: 20px; height: 20px; border-radius: 50%;
  background: #2f9e5f; color: #fff; font-size: 11px; font-weight: 800; display: flex; align-items: center; justify-content: center; }
.nkb-cta { display: inline-block; margin-top: 20px; background: #2b6ef2; color: #fff !important; font-size: 15px; font-weight: 700;
  padding: 15px 30px; border-radius: 8px; text-decoration: none; }
.nkb-cta:hover { background: #1f58c9; color: #fff !important; }
.nkb-note { font-size: 13.5px !important; color: #7a8290 !important; margin-top: 12px !important; }
.nkb-sub { text-align: center; font-size: 14px; color: #7a8290; margin: 0 0 22px; }
.nkb-rev { display: grid; grid-auto-flow: column; grid-auto-columns: minmax(290px, 1fr); gap: 18px;
  overflow-x: auto; scroll-snap-type: x mandatory; -webkit-overflow-scrolling: touch; padding-bottom: 8px; }
.nkb-rev__card { background: #fff; border: 1px solid #e3e8ef; border-radius: 0; overflow: hidden; scroll-snap-align: center;
  display: flex; flex-direction: column; box-shadow: 0 1px 2px rgba(15,20,30,.04), 0 10px 26px rgba(15,20,30,.06); }
.nkb-rev__img img { display: block; width: 100%; aspect-ratio: 1 / 1; object-fit: cover; }
.nkb-rev__body { padding: 16px 18px 20px; }
.nkb-rev__head { display: flex; align-items: center; gap: 10px; margin-bottom: 10px; }
.nkb-rev__stars { color: #e0a33c; font-size: 14px; letter-spacing: 1px; }
.nkb-rev__ver { font-size: 11.5px; font-weight: 700; color: #2f8f5f; background: #eaf6ee; border-radius: 999px; padding: 3px 9px; }
.nkb-rev__body p { font-size: 14.5px; line-height: 1.62; color: #3a424e; margin: 0 0 10px; }
.nkb-rev__body cite { font-style: normal; font-size: 13.5px; font-weight: 700; color: #7a8290; }

/* kratek opis izdelka: zelene kljukice namesto pik */
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
.woocommerce-product-details__short-description .nkb-tick {
  position: absolute !important; left: 0 !important; top: 1px !important;
  width: 21px; height: 21px; border-radius: 50%;
  background: #2f9e5f !important; color: #fff !important;
  font-size: 12px !important; font-weight: 800 !important; line-height: 21px !important;
  text-align: center !important; display: inline-block !important; }
.woocommerce-product-details__short-description p:first-of-type { font-size: 16px; line-height: 1.55; }

@media (max-width: 980px) {
  .nkb-row2 { grid-template-columns: 1fr; gap: 28px; }
  .nkb-row2--rev .nkb-media { order: -1; }
  .nkb-rev { grid-auto-columns: 78%; }
}
@media (max-width: 560px) {
  .nkb-sec { padding: 42px 0; }
  .nkb-wrap { padding: 0 16px; }
  .nkb-cta { width: 100%; text-align: center; }
  .nkb-rev { grid-auto-columns: 86%; }
}
</style>
