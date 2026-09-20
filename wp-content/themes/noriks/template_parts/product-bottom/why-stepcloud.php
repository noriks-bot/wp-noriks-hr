<?php
/**
 * product-bottom: NORIKS StepCloud — masazni ulosci s biomehanickom potporom svoda (orto-stepcloud).
 * Original: stepprs.com (Massage Insoles) — vrstni red sekcij sledi originalu. Slike: img/stepcloud/ (kreative z namizja + ciste fotografije z originalne strani).
 * Pravilo: svaka sekcija ima TOCNO JEDNU sliku, naizmjenicno lijevo/desno, nikada na sredini;
 * slike su omedene na max-height 430px.
 *   1) Hodajte bez boli (lijevo)
 *   2) NORIKS razlika (desno)
 *   3) Četiri razloga (lijevo)
 *   4) Za sve namjene (desno)
 *   5) Iskustva (lijevo)
 *   6) Rezultati (desno)
 *   7) Usporedba (lijevo)
 *   8) Stručno mišljenje (desno)
 *   9) Kako koristiti (lijevo)
 *   10) Paketi i jamstvo (desno)
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$nsc      = get_template_directory_uri() . '/img/stepcloud/';
$nsc_path = get_template_directory() . '/img/stepcloud/';
$nsc_img  = function( $file, $alt ) use ( $nsc, $nsc_path ) {
  if ( ! file_exists( $nsc_path . $file ) ) { return ''; }
  return '<img src="' . esc_url( $nsc . $file ) . '" alt="' . esc_attr( $alt ) . '" loading="lazy">';
};
?>

<!-- 1) HODAJTE BEZ BOLI — slika lijevo -->
<section class="nsc-sec nsc-tint">
  <div class="nsc-wrap nsc-row2">
    <div class="nsc-media"><?php echo $nsc_img( 'sc-01-narancasti.jpg', 'NORIKS StepCloud ulošci u narančastoj boji' ); ?></div>
    <div class="nsc-copy">
      <p class="nsc-kicker">Hodajte bez boli</p>
      <h2 class="nsc-h2">Ponovno otkrijte radost <em>stajanja i hodanja</em></h2>
      <p>Upoznajte NORIKS StepCloud uloške — udobnost za vaša stopala od prvog koraka. Bez boli u stopalima, bez umora na kraju smjene, bez mijenjanja cipela i navika.</p>
      <ul class="nsc-strip">
        <li>🚚 Brza dostava s praćenjem</li>
        <li>😊 Više od 1.000.000 zadovoljnih kupaca</li>
        <li>🛡️ 30 dana jamstva na povrat novca</li>
      </ul>
      <a class="nsc-cta" href="#bundle-selector">Naruči NORIKS StepCloud</a>
    </div>
  </div>
</section>

<!-- 2) NORIKS RAZLIKA — slika desno -->
<section class="nsc-sec">
  <div class="nsc-wrap nsc-row2 nsc-row2--rev">
    <div class="nsc-copy">
      <p class="nsc-kicker">NORIKS razlika</p>
      <h2 class="nsc-h2">Prije <em>i poslije</em> u istoj cipeli</h2>
      <div class="nsc-points">
        <div class="nsc-point"><h3>Prije</h3><p>Tvornički uložak je ravan komad pjene. Pritisak pada na petu i prednji dio stopala, svod ostaje bez potpore, a navečer bole stopala, listovi i leđa.</p></div>
        <div class="nsc-point"><h3>Poslije</h3><p>Biomehanička potpora obuhvati sredinu stopala i rasporedi pritisak po cijeloj površini. Korak je stabilniji i mekši, a umor dolazi kasnije.</p></div>
      </div>
      <p>Iskusite razliku sami i zakoračite u dan bez boli.</p>
    </div>
    <div class="nsc-media"><?php echo $nsc_img( 'sc-06-tehnologija.jpg', 'Biomehanička tehnologija potpore svodu stopala' ); ?></div>
  </div>
</section>

<!-- 3) ČETIRI RAZLOGA — slika lijevo -->
<section class="nsc-sec nsc-tint">
  <div class="nsc-wrap nsc-row2">
    <div class="nsc-media"><?php echo $nsc_img( 'sc-04-znacajke.jpg', 'Značajke NORIKS StepCloud uloška' ); ?></div>
    <div class="nsc-copy">
      <p class="nsc-kicker">Četiri razloga</p>
      <h2 class="nsc-h2">Što uložak <em>mijenja svaki dan</em></h2>
      <div class="nsc-facts">
        <div><span class="nsc-num">⌁</span><h3>Bolje držanje</h3><p>Prava potpora svodu potiče bolju poravnatost kralježnice.</p></div>
        <div><span class="nsc-num">⚡</span><h3>Više energije</h3><p>Svakom koraku dodaje odskok — hodanje i trčanje su lakši.</p></div>
        <div><span class="nsc-num">✂</span><h3>Prilagodljiva veličina</h3><p>Jednostavno škarama režete po iscrtanoj liniji.</p></div>
        <div><span class="nsc-num">💧</span><h3>Lako se pere</h3><p>Ručno, s malo sapuna i vode, pa osušiti na zraku.</p></div>
      </div>
    </div>
  </div>
</section>

<!-- 4) ZA SVE NAMJENE — slika desno -->
<section class="nsc-sec">
  <div class="nsc-wrap nsc-row2 nsc-row2--rev">
    <div class="nsc-copy">
      <p class="nsc-kicker">Za sve namjene</p>
      <h2 class="nsc-h2">Jedan uložak <em>za sve što radite</em></h2>
      <ul class="nsc-tags">
        <li>Avantura</li>
        <li>Sport i trening</li>
        <li>Duge smjene</li>
        <li>Svakodnevica</li>
        <li>Izlasci</li>
        <li>Gradilište</li>
      </ul>
      <ul class="nsc-check">
        <li>Olakšanje kod boli, napetosti i nelagode</li>
        <li>Potpora svodu i ciljani masažni čvorići</li>
        <li>Regulacija temperature i prozračivanje</li>
        <li>Uklanja neugodne mirise</li>
      </ul>
    </div>
    <div class="nsc-media"><?php echo $nsc_img( 'sc-10-setnja.jpg', 'Šetnja u cipelama s NORIKS StepCloud ulošcima' ); ?></div>
  </div>
</section>

<!-- 5) ISKUSTVA — slika lijevo -->
<section class="nsc-sec nsc-tint">
  <div class="nsc-wrap nsc-row2">
    <div class="nsc-media"><?php echo $nsc_img( 'sc-05-prednosti.jpg', 'Prednosti svakodnevne uporabe NORIKS StepCloud uložaka' ); ?></div>
    <div class="nsc-copy">
      <p class="nsc-kicker">Iskustva</p>
      <h2 class="nsc-h2">Kako ih koriste <em>ljudi na nogama cijeli dan</em></h2>
      <ul class="nsc-jobs">
        <li><strong>Građevinski radnik</strong><span>„Dane provodim na betonu, u radnim cipelama s čeličnom kapicom. Ulošci upijaju udarce, pa su stopala i koljena na kraju dana mirnija."</span></li>
        <li><strong>Medicinska sestra</strong><span>„Na nogama sam cijelu smjenu. Razliku sam osjetila čim sam ih umetnula — potpora svodu je upravo ono što mi je nedostajalo."</span></li>
        <li><strong>Konobar</strong><span>„Dvanaest sati u smjeni i prvi put bez onog žarenja u petama. Nisam očekivao toliku razliku od jednog uloška."</span></li>
        <li><strong>Rekreativni trkač</strong><span>„Nakon trčanja stopala se brže oporave, a peta ne prima cijeli udarac kao prije."</span></li>
      </ul>
    </div>
  </div>
</section>

<!-- 6) REZULTATI — slika desno -->
<section class="nsc-sec">
  <div class="nsc-wrap nsc-row2 nsc-row2--rev">
    <div class="nsc-copy">
      <p class="nsc-kicker">Rezultati</p>
      <h2 class="nsc-h2">Budućnost je <em>bez boli u stopalima</em></h2>
      <div class="nsc-stats">
        <div><b>95 %</b><span>Manje boli u stopalima</span><p>Potpora svodu i jastučenje osjetno smanjuju bol.</p></div>
        <div><b>94 %</b><span>Veća udobnost</span><p>Udobnost u svakom koraku, uz manje umora.</p></div>
        <div><b>90 %</b><span>Manji rizik od ozljeda</span><p>Jastučenje i potpora smanjuju rizik od ozljeda stopala.</p></div>
      </div>
      <p class="nsc-note">* Prema kliničkim i potrošačkim istraživanjima proizvođača uložaka ovog tipa.</p>
    </div>
    <div class="nsc-media"><?php echo $nsc_img( 'sc-02-crni.jpg', 'NORIKS StepCloud ulošci u crnoj boji' ); ?></div>
  </div>
</section>

<!-- 7) USPOREDBA — slika lijevo -->
<section class="nsc-sec nsc-tint">
  <div class="nsc-wrap nsc-row2">
    <div class="nsc-media"><?php echo $nsc_img( 'sc-07-usporedba.jpg', 'Usporedba NORIKS uložaka s drogerijskim i običnim' ); ?></div>
    <div class="nsc-copy">
      <p class="nsc-kicker">Usporedba</p>
      <h2 class="nsc-h2">Po čemu je NORIKS <em>drukčiji</em></h2>
      <table class="nsc-table">
        <thead><tr><th>&nbsp;</th><th>NORIKS</th><th>Ostali</th></tr></thead>
        <tbody>
          <tr><td>Jastučenje</td><td class="yes">✓</td><td class="no">✕</td></tr>
          <tr><td>Prozračnost</td><td class="yes">✓</td><td class="no">✕</td></tr>
          <tr><td>Olakšanje od prvog nošenja</td><td class="yes">✓</td><td class="no">✕</td></tr>
          <tr><td>Potpora svodu stopala</td><td class="yes">✓</td><td class="no">✕</td></tr>
          <tr><td>Upijanje udaraca</td><td class="yes">✓</td><td class="no">✕</td></tr>
          <tr><td>Uklanjanje neugodnih mirisa</td><td class="yes">✓</td><td class="no">✕</td></tr>
        </tbody>
      </table>
    </div>
  </div>
</section>

<!-- 8) STRUČNO MIŠLJENJE — slika desno -->
<section class="nsc-sec">
  <div class="nsc-wrap nsc-row2 nsc-row2--rev">
    <div class="nsc-copy">
      <p class="nsc-kicker">Stručno mišljenje</p>
      <h2 class="nsc-h2">Ciljano olakšanje <em>ondje gdje nastaje bol</em></h2>
      <div class="nsc-quote">
        <p>„Kao podijatar godinama liječim pacijente sa spuštenim svodom i plantarnim fasciitisom. Ulošci ovog tipa daju ciljanu potporu svodu, ravnomjerno raspoređuju pritisak i smanjuju napetost plantarne fascije. Uz redovito nošenje pacijenti primjećuju osjetno poboljšanje."</p>
        <cite>Dr. Thomas Schneider — podijatar</cite>
      </div>
      <p>Zato se ulošci najčešće preporučuju uz dug boravak na nogama, kod boli u peti i svodu te tijekom oporavka.</p>
    </div>
    <div class="nsc-media"><?php echo $nsc_img( 'sc-03-sivi.jpg', 'NORIKS StepCloud ulošci u sivoj boji' ); ?></div>
  </div>
</section>

<!-- 9) KAKO KORISTITI — slika lijevo -->
<section class="nsc-sec nsc-tint">
  <div class="nsc-wrap nsc-row2">
    <div class="nsc-media"><?php echo $nsc_img( 'sc-08-kako-koristiti.jpg', 'Umetanje NORIKS StepCloud uloška u tenisicu' ); ?></div>
    <div class="nsc-copy">
      <p class="nsc-kicker">Kako koristiti</p>
      <h2 class="nsc-h2">U cipeli <em>za manje od minute</em></h2>
      <ol class="nsc-steps">
        <li>Izvadite stari uložak iz cipele i bacite ga</li>
        <li>Umetnite NORIKS u cipelu</li>
        <li>Ako je stopalu pretijesno, skratite uložak po oznaci</li>
        <li>Uživajte u udobnosti</li>
      </ol>
      <p class="nsc-note">Ulošci se stavljaju umjesto tvorničkog uloška, nikada preko njega.</p>
    </div>
  </div>
</section>

<!-- 10) PAKETI I JAMSTVO — slika desno -->
<section class="nsc-sec">
  <div class="nsc-wrap nsc-row2 nsc-row2--rev">
    <div class="nsc-copy">
      <p class="nsc-kicker">Paketi i jamstvo</p>
      <h2 class="nsc-h2">Pomozite svojim stopalima <em>već danas</em></h2>
      <p>Bilo da ste cijeli dan na nogama na poslu ili gurate granice na treningu — ulošci daju potporu ondje gdje je najpotrebnija. Uz svakodnevno nošenje zadržavaju oblik oko dva mjeseca, pa većina kupaca uzme više pari odjednom.</p>
      <ul class="nsc-check">
        <li><strong>2 para</strong> — niža cijena po paru</li>
        <li><strong>3 para</strong> — za cijelu obitelj</li>
        <li><strong>5 pari</strong> — najniža cijena po paru</li>
        <li><strong>30 dana</strong> za povrat novca</li>
      </ul>
      <a class="nsc-cta" href="#bundle-selector">Naruči NORIKS StepCloud</a>
    </div>
    <div class="nsc-media"><?php echo $nsc_img( 'sc-09-akcija.jpg', 'NORIKS StepCloud akcijska ponuda' ); ?></div>
  </div>
</section>

<style>
.nsc-sec { padding: 60px 0; background: #fff; font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Arial, sans-serif; color: #2b1a10; }
.nsc-sec * { box-sizing: border-box; }
.nsc-tint { background: #fff2ea; }
.nsc-wrap { width: 100%; max-width: 1440px; margin: 0 auto; padding: 0 24px; }
.nsc-kicker { font-size: 12.5px; font-weight: 800; letter-spacing: .14em; text-transform: uppercase; color: #f0581a; margin: 0 0 10px; }
.nsc-h2 { font-size: clamp(25px, 3.1vw, 36px); font-weight: 800; line-height: 1.18; letter-spacing: -.01em; margin: 0 0 16px; color: #2b1a10; }
.nsc-h2 em { font-style: italic; font-weight: 800; color: #f0581a; }
.nsc-copy p { font-size: 16px; line-height: 1.7; color: #5d4a3d; margin: 0 0 14px; }
.nsc-row2 { display: grid; grid-template-columns: 1fr 1fr; gap: 56px; align-items: center; }
.nsc-media { text-align: left; }
.nsc-row2--rev .nsc-media { text-align: right; }
.nsc-media img { display: inline-block; width: auto; max-width: 100%; max-height: 560px; object-fit: contain; border-radius: 14px;
  box-shadow: 0 2px 4px rgba(20,25,40,.05), 0 14px 40px rgba(20,25,40,.10); }
.nsc-check { list-style: none; padding: 0; margin: 4px 0 22px; display: flex; flex-direction: column; gap: 11px; }
.nsc-check li { position: relative; padding-left: 28px; font-size: 15.5px; line-height: 1.5; color: #2b1a10; }
.nsc-check li::before { content: "\2713"; position: absolute; left: 0; top: 0; width: 20px; height: 20px; border-radius: 50%; background: #2f9e5f; color: #fff; font-size: 11px; font-weight: 800; display: flex; align-items: center; justify-content: center; }
.nsc-cross { list-style: none; padding: 0; margin: 4px 0 22px; display: flex; flex-direction: column; gap: 11px; }
.nsc-cross li { position: relative; padding-left: 28px; font-size: 15.5px; line-height: 1.5; color: #2b1a10; }
.nsc-cross li::before { content: "\2715"; position: absolute; left: 0; top: 0; width: 20px; height: 20px; border-radius: 50%; background: #e04a4a; color: #fff; font-size: 11px; font-weight: 800; display: flex; align-items: center; justify-content: center; }
.nsc-vs { list-style: none; padding: 0; margin: 4px 0 0; display: flex; flex-direction: column; gap: 10px; }
.nsc-vs li { position: relative; padding-left: 28px; font-size: 15px; line-height: 1.5; color: #2b1a10; }
.nsc-vs li::before { position: absolute; left: 0; top: 0; width: 20px; height: 20px; border-radius: 50%; font-size: 11px; font-weight: 800; display: flex; align-items: center; justify-content: center; }
.nsc-vs .is-yes::before { content: "\2713"; background: #2f9e5f; color: #fff; }
.nsc-vs .is-no { color: #7d8898; }
.nsc-vs .is-no::before { content: "\2715"; background: #e6e9ef; color: #8f9bab; }
.nsc-points { display: flex; flex-direction: column; gap: 20px; }
.nsc-point h3 { font-size: 17.5px; font-weight: 800; margin: 0 0 6px; color: #f0581a; }
.nsc-point p { font-size: 15.5px; color: #5d4a3d; line-height: 1.6; margin: 0; }
.nsc-facts { display: grid; grid-template-columns: 1fr 1fr; gap: 16px; margin-top: 6px; }
.nsc-facts > div { background: #fff2ea; border-radius: 12px; padding: 16px 18px; }
.nsc-num { display: block; font-size: 26px; font-weight: 800; color: #f0581a; line-height: 1.1; margin-bottom: 6px; }
.nsc-facts h3 { font-size: 15.5px; font-weight: 800; margin: 0 0 4px; color: #2b1a10; }
.nsc-facts p { font-size: 14px !important; color: #5d4a3d !important; line-height: 1.5 !important; margin: 0 !important; }
.nsc-steps { list-style: none; counter-reset: st; padding: 0; margin: 6px 0 20px; display: flex; flex-direction: column; gap: 14px; }
.nsc-steps li { counter-increment: st; position: relative; padding-left: 44px; font-size: 15.5px; line-height: 1.55; color: #2b1a10; }
.nsc-steps li::before { content: counter(st); position: absolute; left: 0; top: -2px; width: 30px; height: 30px; border-radius: 50%; background: #f0581a; color: #fff; font-size: 14px; font-weight: 800; display: flex; align-items: center; justify-content: center; }
.nsc-tags { list-style: none; padding: 0; margin: 6px 0 18px; display: grid; grid-template-columns: repeat(2, minmax(0, 1fr)); gap: 10px 16px; }
.nsc-tags li { position: relative; padding-left: 24px; font-size: 15.5px; font-weight: 600; color: #2b1a10; }
.nsc-tags li::before { content: ""; position: absolute; left: 0; top: 6px; width: 12px; height: 12px; border-radius: 50%; background: #f0581a; }
.nsc-note { font-size: 13.5px !important; color: #7d8898 !important; font-style: italic; margin: 6px 0 0 !important; }
.nsc-cta { display: inline-block; background: #f0581a; color: #fff !important; font-size: 15px; font-weight: 700; padding: 15px 30px; border-radius: 8px; text-decoration: none; }
.nsc-cta:hover { background: #c5430c; color: #fff !important; }

@media (max-width: 980px) {
  .nsc-row2 { grid-template-columns: 1fr; gap: 28px; }
  .nsc-row2--rev .nsc-media { order: -1; }
}
@media (max-width: 560px) {
  .nsc-sec { padding: 42px 0; }
  .nsc-wrap { padding: 0 16px; }
  .nsc-cta { width: 100%; text-align: center; }
  .nsc-media img { max-height: 440px; }
  .nsc-num { font-size: 23px; }
  .nsc-tags { grid-template-columns: 1fr; }
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
.woocommerce-product-details__short-description .nsc-tick {
  position: absolute !important; left: 0 !important; top: 1px !important;
  width: 21px; height: 21px; border-radius: 50%;
  background: #f0581a !important; color: #fff !important;
  font-size: 12px !important; font-weight: 800 !important; line-height: 21px !important;
  text-align: center !important; display: inline-block !important; }
.woocommerce-product-details__short-description p:first-of-type { font-size: 16px; line-height: 1.55; }

.nsc-strip { display: flex; flex-wrap: wrap; gap: 10px 26px; margin: 4px 0 20px; padding: 0; list-style: none; }
.nsc-strip li { font-size: 14.5px; font-weight: 700; color: #f0581a; }
.nsc-stats { display: grid; grid-template-columns: repeat(3, minmax(0,1fr)); gap: 14px; margin: 6px 0 18px; }
.nsc-stats > div { background: #fff2ea; border-radius: 12px; padding: 16px 14px; text-align: center; }
.nsc-stats b { display: block; font-size: 30px; font-weight: 800; color: #f0581a; line-height: 1.05; }
.nsc-stats span { display: block; font-size: 13.5px; font-weight: 700; color: #2b1a10; margin: 6px 0 4px; }
.nsc-stats p { font-size: 13px !important; color: #5d4a3d !important; line-height: 1.45 !important; margin: 0 !important; }
.nsc-table { width: 100%; border-collapse: collapse; font-size: 15px; margin: 6px 0 18px; }
.nsc-table th { text-align: left; font-weight: 800; color: #2b1a10; padding: 10px 12px; border-bottom: 2px solid #fff2ea; }
.nsc-table th:nth-child(2), .nsc-table th:nth-child(3),
.nsc-table td:nth-child(2), .nsc-table td:nth-child(3) { text-align: center; width: 92px; }
.nsc-table td { padding: 10px 12px; border-bottom: 1px solid #fff2ea; color: #2b1a10; }
.nsc-table .yes { color: #2f9e5f; font-weight: 800; }
.nsc-table .no { color: #b9b9b9; font-weight: 800; }
.nsc-quote { background: #fff2ea; border-left: 4px solid #f0581a; border-radius: 0 12px 12px 0; padding: 18px 20px; margin: 4px 0 16px; }
.nsc-quote p { font-size: 15.5px !important; line-height: 1.65 !important; color: #2b1a10 !important; margin: 0 0 10px !important; font-style: italic; }
.nsc-quote cite { font-size: 13.5px; font-weight: 800; color: #f0581a; font-style: normal; }
.nsc-jobs { list-style: none; padding: 0; margin: 4px 0 18px; display: flex; flex-direction: column; gap: 14px; }
.nsc-jobs li { background: #fff2ea; border-radius: 12px; padding: 14px 16px; }
.nsc-jobs strong { display: block; font-size: 14.5px; color: #f0581a; margin-bottom: 4px; }
.nsc-jobs span { font-size: 15px; line-height: 1.6; color: #2b1a10; }
@media (max-width: 560px) {
  .nsc-stats { grid-template-columns: 1fr; }
  .nsc-table { font-size: 14px; }
}
</style>
