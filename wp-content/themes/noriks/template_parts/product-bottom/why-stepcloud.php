<?php
/**
 * product-bottom: NORIKS StepCloud — masazni ulosci s biomehanickom potporom svoda (orto-stepcloud).
 * Original: stepprs.com (Massage Insoles) — vrstni red sekcij sledi originalu. Slike: img/stepcloud/ (kreative z namizja + ciste fotografije z originalne strani).
 * Pravilo: svaka sekcija ima TOCNO JEDNU sliku, naizmjenicno lijevo/desno, nikada na sredini;
 * slike su omedene na max-height 430px.
 *   1) HODAJTE BEZ BOLI — slika lijevo
 *   2) CRNI TRAK
 *   3) NORIKS RAZLIKA — slika desno
 *   4) ČETIRI RAZLOGA — slika lijevo
 *   5) ZA SVE NAMJENE — karusel situacija
 *   6) ISKUSTVA — slika lijevo
 *   7) REZULTATI — slika desno
 *   8) USPOREDBA — tablica
 *   9) STRUČNO MIŠLJENJE — slika desno
 *  10) KAKO KORISTITI — slika lijevo
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
    <div class="nsc-media nsc-media--video">
      <video src="<?php echo esc_url( $nsc . 'sc-vid-1.mp4' ); ?>" poster="<?php echo esc_url( $nsc . 'sc-vid-1.jpg' ); ?>"
             muted autoplay loop playsinline preload="metadata"
             aria-label="NORIKS StepCloud ulošci u pokretu"></video>
    </div>
    <div class="nsc-copy">
      <p class="nsc-kicker">Hodajte bez boli</p>
      <h2 class="nsc-h2">Ponovno otkrijte radost <em>stajanja i hodanja</em></h2>
      <p>Upoznajte NORIKS StepCloud uloške — udobnost za vaša stopala od prvog koraka. Bez boli u stopalima, bez umora na kraju smjene, bez mijenjanja cipela i navika.</p>
      <a class="nsc-cta" href="#bundle-selector">Naruči NORIKS StepCloud</a>
    </div>
  </div>
</section>

<!-- 2) CRNI TRAK -->
<section class="nsc-ticker" aria-hidden="true">
  <div class="nsc-ticker__track">
    <div class="nsc-ticker__row"><span>🛡️ 30 dana jamstva na povrat novca</span><span>🚚 Brza dostava s praćenjem</span><span>😊 Više od 1.000.000 zadovoljnih kupaca</span><span>👣 Jedan par za sve cipele</span></div>
    <div class="nsc-ticker__row"><span>🛡️ 30 dana jamstva na povrat novca</span><span>🚚 Brza dostava s praćenjem</span><span>😊 Više od 1.000.000 zadovoljnih kupaca</span><span>👣 Jedan par za sve cipele</span></div>
  </div>
</section>

<!-- 3) NORIKS RAZLIKA — slika desno -->
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

<!-- 4) ČETIRI RAZLOGA — slika lijevo -->
<section class="nsc-sec nsc-tint">
  <div class="nsc-wrap nsc-row2">
    <div class="nsc-media"><?php echo $nsc_img( 'sc-04-znacajke.jpg', 'Značajke NORIKS StepCloud uloška' ); ?></div>
    <div class="nsc-copy">
      <p class="nsc-kicker">Četiri razloga</p>
      <h2 class="nsc-h2">Što uložak <em>mijenja svaki dan</em></h2>
      <div class="nsc-facts">
        <div><span class="nsc-ico" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M12 21V8"/><path d="m7 13 5-5 5 5"/><path d="M5 21h14"/></svg></span><h3>Bolje držanje</h3><p>Prava potpora svodu potiče bolju poravnatost kralježnice.</p></div>
        <div><span class="nsc-ico" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M13 2 4.5 13.5H11l-1 8.5L19.5 10H13l0-8Z"/></svg></span><h3>Više energije</h3><p>Svakom koraku dodaje odskok — hodanje i trčanje su lakši.</p></div>
        <div><span class="nsc-ico" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><circle cx="6" cy="6" r="2.6"/><circle cx="6" cy="18" r="2.6"/><path d="M20 4 8.6 16.2"/><path d="M20 20 8.6 7.8"/></svg></span><h3>Prilagodljiva veličina</h3><p>Jednostavno škarama režete po iscrtanoj liniji.</p></div>
        <div><span class="nsc-ico" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M12 3s6 6.4 6 10.4A6 6 0 0 1 6 13.4C6 9.4 12 3 12 3Z"/></svg></span><h3>Lako se pere</h3><p>Ručno, s malo sapuna i vode, pa osušiti na zraku.</p></div>
      </div>
    </div>
  </div>
</section>

<!-- 5) ZA SVE NAMJENE — karusel situacija -->
<section class="nsc-sec nsc-use">
  <div class="nsc-wrap">
    <div class="nsc-use__head">
      <h2 class="nsc-h2">Stvoreni <em>za sve namjene</em></h2>
      <p class="nsc-use__lead">Ne mijenjate ih po aktivnosti — prebacite ih iz tenisica u radne čizme i nastavite dalje. Isti par podnosi asfalt, beton, teretanu i osmosatnu smjenu.</p>
    </div>
  </div>
  <div class="nsc-use__strip">
        <figure class="nsc-use__card">
          <?php echo $nsc_img( 'sc-u6-gradiliste.jpg', 'Gradilište — NORIKS StepCloud ulošci' ); ?>
          <figcaption>Gradilište</figcaption>
        </figure>
        <figure class="nsc-use__card">
          <?php echo $nsc_img( 'sc-u7-zdravstvo.jpg', 'Zdravstvo — NORIKS StepCloud ulošci' ); ?>
          <figcaption>Zdravstvo</figcaption>
        </figure>
        <figure class="nsc-use__card">
          <?php echo $nsc_img( 'sc-u1-planinarenje.jpg', 'Avantura — NORIKS StepCloud ulošci' ); ?>
          <figcaption>Avantura</figcaption>
        </figure>
        <figure class="nsc-use__card">
          <?php echo $nsc_img( 'sc-u2-trcanje.jpg', 'Sportaš — NORIKS StepCloud ulošci' ); ?>
          <figcaption>Sportaš</figcaption>
        </figure>
        <figure class="nsc-use__card">
          <?php echo $nsc_img( 'sc-u3-smjena.jpg', 'Duge smjene — NORIKS StepCloud ulošci' ); ?>
          <figcaption>Duge smjene</figcaption>
        </figure>
        <figure class="nsc-use__card">
          <?php echo $nsc_img( 'sc-u4-setnja.jpg', 'Svakodnevica — NORIKS StepCloud ulošci' ); ?>
          <figcaption>Svakodnevica</figcaption>
        </figure>
        <figure class="nsc-use__card">
          <?php echo $nsc_img( 'sc-u5-izlasci.jpg', 'Rekreacija — NORIKS StepCloud ulošci' ); ?>
          <figcaption>Rekreacija</figcaption>
        </figure>
  </div>
  <div class="nsc-wrap">
    <ul class="nsc-use__list">
      <li>Ublažava bol u peti, tabanu i listovima</li>
      <li>Potpora svodu i ciljani masažni čvorići</li>
      <li>Prozračni otvori drže stopalo suhim</li>
      <li>Sprječava neugodne mirise</li>
    </ul>
  </div>
</section>

<!-- 6) ISKUSTVA — slika lijevo -->
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

<!-- 7) REZULTATI — slika desno -->
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

<!-- 8) USPOREDBA — tablica -->
<section class="nsc-sec nsc-tint">
  <div class="nsc-wrap nsc-row2 nsc-cmp">
    <div class="nsc-copy">
      <p class="nsc-kicker">Usporedba</p>
      <h2 class="nsc-h2">Po čemu je NORIKS StepCloud <em>drukčiji</em></h2>
      <p>Obični ulošci samo popune cipelu. StepCloud radi tri stvari koje jeftini ulošci ne rade: drži svod, upija udarac pete i masira taban pri svakom koraku — a pritom ostaje prozračan.</p>
    </div>
    <div class="nsc-cmp__box">
      <table class="nsc-cmp__table">
        <thead>
          <tr><td>&nbsp;</td><th scope="col">NORIKS<br>StepCloud</th><th scope="col">Obični<br>ulošci</th></tr>
        </thead>
        <tbody>
          <tr><th scope="row">Jastučenje</th><td class="yes">✓</td><td class="no">✕</td></tr>
          <tr><th scope="row">Prozračnost</th><td class="yes">✓</td><td class="no">✕</td></tr>
          <tr><th scope="row">Trenutno olakšanje</th><td class="yes">✓</td><td class="no">✕</td></tr>
          <tr><th scope="row">Potpora svodu</th><td class="yes">✓</td><td class="no">✕</td></tr>
          <tr><th scope="row">Upijanje udaraca</th><td class="yes">✓</td><td class="no">✕</td></tr>
          <tr><th scope="row">Uklanjanje neugodnih mirisa</th><td class="yes">✓</td><td class="no">✕</td></tr>
          <tr><th scope="row">Visoka cijena</th><td class="no">✕</td><td class="yes">✓</td></tr>
        </tbody>
      </table>
    </div>
  </div>
</section>

<!-- 9) STRUČNO MIŠLJENJE — slika lijevo -->
<section class="nsc-sec">
  <div class="nsc-wrap nsc-row2">
    <div class="nsc-media"><?php echo $nsc_img( 'sc-03-sivi.jpg', 'NORIKS StepCloud ulošci u sivoj boji' ); ?></div>
    <div class="nsc-copy">
      <p class="nsc-kicker">Stručno mišljenje</p>
      <h2 class="nsc-h2">Ciljano olakšanje <em>ondje gdje nastaje bol</em></h2>
      <div class="nsc-quote">
        <p>„Kao podijatar godinama liječim pacijente sa spuštenim svodom i plantarnim fasciitisom. Ulošci ovog tipa daju ciljanu potporu svodu, ravnomjerno raspoređuju pritisak i smanjuju napetost plantarne fascije. Uz redovito nošenje pacijenti primjećuju osjetno poboljšanje."</p>
        <cite>Dr. Thomas Schneider — podijatar</cite>
      </div>
      <p>Zato se ulošci najčešće preporučuju uz dug boravak na nogama, kod boli u peti i svodu te tijekom oporavka.</p>
    </div>
  </div>
</section>

<!-- 10) KAKO KORISTITI — slika desno -->
<section class="nsc-sec nsc-tint">
  <div class="nsc-wrap nsc-row2 nsc-row2--rev">
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
    <div class="nsc-media"><?php echo $nsc_img( 'sc-08-kako-koristiti.jpg', 'Umetanje NORIKS StepCloud uloška u tenisicu' ); ?></div>
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
.nsc-facts { display: grid; grid-template-columns: 1fr 1fr; gap: 14px; margin-top: 10px; }
.nsc-facts > div { background: #fff; border: 1px solid #f6ddd0; border-radius: 14px; padding: 18px 18px 18px;
  box-shadow: 0 1px 2px rgba(60,30,15,.05), 0 8px 22px rgba(60,30,15,.06); }
.nsc-ico { display: flex; align-items: center; justify-content: center; width: 46px; height: 46px; margin-bottom: 11px;
  border-radius: 13px; background: #fff0e7; color: #f0581a; }
.nsc-ico svg { width: 26px; height: 26px; display: block; }
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

.nsc-use__head { max-width: 760px; }
.nsc-use__lead { font-size: 16px; line-height: 1.7; color: #5d4a3d; margin: 0; }
.nsc-use__strip { display: grid; grid-template-columns: repeat(3, minmax(0,1fr)); gap: 18px; margin: 24px 0 22px; }
.nsc-use__card { margin: 0; background: #fff; border: 1px solid #f6ddd0; border-radius: 14px; overflow: hidden;
  box-shadow: 0 1px 2px rgba(60,30,15,.05), 0 10px 26px rgba(60,30,15,.07); }
.nsc-use__card img { width: 100%; max-width: none; max-height: none; aspect-ratio: 4 / 3; object-fit: cover;
  border-radius: 0; box-shadow: none; display: block; }
.nsc-use__card figcaption { padding: 14px 16px 17px; display: block; }
.nsc-use__tag { display: inline-block; background: #fff0e7; color: #f0581a; font-size: 11.5px; font-weight: 800;
  letter-spacing: .08em; text-transform: uppercase; padding: 3px 9px; border-radius: 999px; margin-bottom: 8px; }
.nsc-use__card figcaption strong { display: block; font-size: 16px; font-weight: 800; color: #2b1a10; margin-bottom: 4px; }
.nsc-use__card figcaption span:last-child { display: block; font-size: 14px; line-height: 1.55; color: #5d4a3d; }
.nsc-use__list { list-style: none; padding: 0; margin: 0; display: grid; grid-template-columns: repeat(4, minmax(0,1fr)); gap: 10px 18px; }
.nsc-use__list li { position: relative; padding-left: 28px; font-size: 15px; line-height: 1.5; color: #2b1a10; }
.nsc-use__list li::before { content: "\2713"; position: absolute; left: 0; top: 0; width: 20px; height: 20px; border-radius: 50%;
  background: #2f9e5f; color: #fff; font-size: 11px; font-weight: 800; display: flex; align-items: center; justify-content: center; }

.nsc-media--video { text-align: left; }
.nsc-media--video video { display: block; width: 100%; max-width: 100%; max-height: none; aspect-ratio: 1 / 1;
  object-fit: cover; border-radius: 14px; margin: 0;
  box-shadow: 0 2px 4px rgba(60,30,15,.05), 0 14px 40px rgba(60,30,15,.12); }
.nsc-ticker { background: #0f0f10; overflow: hidden; padding: 0; }
.nsc-ticker__track { display: flex; width: max-content; animation: nscTicker 38s linear infinite; }
.nsc-ticker__row { display: flex; align-items: center; gap: 46px; padding: 14px 23px; }
.nsc-ticker__row span { color: #fff; font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Arial, sans-serif;
  font-size: 14px; font-weight: 800; letter-spacing: .09em; text-transform: uppercase; white-space: nowrap; }
@keyframes nscTicker { from { transform: translateX(0); } to { transform: translateX(-50%); } }
@media (prefers-reduced-motion: reduce) { .nsc-ticker__track { animation: none; } }

.nsc-use__head { max-width: 780px; }
.nsc-use__lead { font-size: 16px; line-height: 1.7; color: #5d4a3d; margin: 0; }
.nsc-use__strip { display: flex; gap: 16px; overflow-x: auto; scroll-snap-type: x mandatory;
  -webkit-overflow-scrolling: touch; padding: 24px 24px 10px; margin: 0 0 22px; }
.nsc-use__card { flex: 0 0 272px; position: relative; margin: 0; border-radius: 14px; overflow: hidden; scroll-snap-align: center;
  box-shadow: 0 2px 4px rgba(60,30,15,.06), 0 14px 32px rgba(60,30,15,.12); }
.nsc-use__card img { width: 100%; max-width: none; max-height: none; aspect-ratio: 4 / 5; object-fit: cover;
  border-radius: 0; box-shadow: none; display: block; }
.nsc-use__card figcaption { position: absolute; left: 0; right: 0; bottom: 0; background: #0f0f10; color: #fff;
  text-align: center; font-size: 15px; font-weight: 800; letter-spacing: .01em; padding: 11px 12px; }
.nsc-use__list { list-style: none; padding: 0; margin: 0; display: grid; grid-template-columns: repeat(4, minmax(0,1fr)); gap: 10px 18px; }
.nsc-use__list li { position: relative; padding-left: 28px; font-size: 15px; line-height: 1.5; color: #2b1a10; }
.nsc-use__list li::before { content: "\2713"; position: absolute; left: 0; top: 0; width: 20px; height: 20px; border-radius: 50%;
  background: #2f9e5f; color: #fff; font-size: 11px; font-weight: 800; display: flex; align-items: center; justify-content: center; }
.nsc-cmp__box { background: #fff; border-radius: 16px; overflow: hidden; box-shadow: 0 2px 4px rgba(60,30,15,.05), 0 16px 40px rgba(60,30,15,.12); }
.nsc-cmp__table { width: 100%; border-collapse: collapse; border-spacing: 0; margin: 0 !important; border: 0 !important; }
.nsc-cmp__table tr, .nsc-cmp__table thead, .nsc-cmp__table tbody { background: transparent !important; border: 0 !important; }
.nsc-cmp__table thead th { background: #fff; color: #2b1a10; font-size: 13.5px; font-weight: 800; line-height: 1.25;
  text-align: center; padding: 14px 10px; border-bottom: 1px solid #f1e0d6; }
.nsc-cmp__table thead td { background: #f0581a; }
.nsc-cmp__table th[scope="row"] { background: #f0581a; color: #fff; font-size: 15.5px; font-weight: 800;
  text-align: center; padding: 15px 16px; border-bottom: 1px solid rgba(255,255,255,.22); }
.nsc-cmp__table tbody tr:last-child th[scope="row"] { border-bottom: 0; }
.nsc-cmp__table td { width: 19%; text-align: center; font-size: 21px; font-weight: 800; padding: 15px 10px;
  border-bottom: 1px solid #f4e6dd; }
.nsc-cmp__table tbody tr:last-child td { border-bottom: 0; }
.nsc-cmp__table td.yes { color: #2f9e5f; }
.nsc-cmp__table td.no { color: #2b1a10; }

@media (max-width: 980px) {
  .nsc-use__list { grid-template-columns: 1fr 1fr; }
  .nsc-use__strip { grid-template-columns: 1fr 1fr; }
  .nsc-use__list { grid-template-columns: 1fr 1fr; }
  .nsc-row2 { grid-template-columns: 1fr; gap: 28px; }
  .nsc-row2--rev .nsc-media { order: -1; }
}
@media (max-width: 560px) {
  .nsc-use__strip { padding: 20px 16px 8px; }
  .nsc-use__card { flex-basis: 74%; }
  .nsc-use__list { grid-template-columns: 1fr; }
  .nsc-cmp__table th[scope="row"] { font-size: 14px; padding: 13px 10px; }
  .nsc-cmp__table td { font-size: 19px; }
  .nsc-ticker__row { gap: 30px; padding: 12px 15px; }
  .nsc-ticker__row span { font-size: 12.5px; }
  .nsc-use__strip { grid-template-columns: 1fr; }
  .nsc-use__list { grid-template-columns: 1fr; }
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
