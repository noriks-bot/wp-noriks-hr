<?php
/**
 * NORIKS Destapacaño — prah za odpiranje odtokov
 * SKU: NORIKS-DESTAPACAN
 */

if ( ! defined( 'ABSPATH' ) ) exit;
$nf = get_template_directory_uri() . '/img/destapacan/';
?>

<style>
/* ========== DESTAPACAÑO ========== */

.nss-destapacan {
  --bg-light: #f8f9fb;
  --bg-img: #e8ecf2;
  --border-soft: rgba(45,65,95,0.08);
  --text: #1a2332;
  --accent: #1a5ccc;
  --shadow: rgba(20,35,60,0.06);
}

.nss-band {
  position: relative;
  padding: 60px 24px;
  background: #fff;
}
.nss-band--rev { background: var(--bg-light); }
.nss-container {
  max-width: 1240px;
  margin: 0 auto;
}

/* === Sekcija === */
.nss-flex {
  display: grid;
  grid-template-columns: 1fr;
  gap: 40px;
  align-items: center;
}

@media(min-width:900px){
  .nss-flex { grid-template-columns: 1fr 1fr; gap: 56px; }
  .nss-band:nth-child(odd) .nss-flex { direction: ltr; }
  .nss-band:nth-child(even) .nss-flex { direction: rtl; }
}

.nss-media {
  position: relative;
  width: 100%;
  aspect-ratio: 4/5;
  background: var(--bg-img);
  border-radius: 20px;
  overflow: hidden;
  box-shadow: 0 6px 24px var(--shadow);
}
.nss-media img,
.nss-media video {
  width: 100%;
  height: 100%;
  object-fit: cover;
  display: block;
}

.nss-body {
  max-width: 540px;
}
.nss-kicker {
  font-size: 13px;
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 1.2px;
  color: var(--accent);
  margin: 0 0 10px;
  display: block;
}
.nss-h2 {
  font-size: clamp(26px, 4vw, 36px);
  font-weight: 800;
  line-height: 1.15;
  color: var(--text);
  margin: 0 0 20px;
}
.nss-h2 em {
  font-style: italic;
  font-weight: inherit;
  color: var(--accent);
}
.nss-body p {
  font-size: 17px;
  line-height: 1.65;
  color: #3e4a5d;
  margin: 0 0 16px;
}
.nss-body p:last-child { margin-bottom: 0; }
.nss-body strong {
  font-weight: 700;
  color: var(--text);
}

/* === Koraki (timeline sekcija) === */
.nss-steps {
  display: grid;
  gap: 36px;
  margin: 40px 0 0;
}
.nss-step {
  display: grid;
  grid-template-columns: auto 1fr;
  gap: 20px;
  align-items: start;
}
.nss-step-num {
  width: 46px;
  height: 46px;
  background: var(--accent);
  color: #fff;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 22px;
  font-weight: 800;
  flex-shrink: 0;
}
.nss-step-body h3 {
  font-size: 20px;
  font-weight: 700;
  line-height: 1.3;
  color: var(--text);
  margin: 0 0 8px;
}
.nss-step-body p {
  font-size: 16px;
  line-height: 1.6;
  color: #3e4a5d;
  margin: 0;
}

/* === Lista (espuma sekcija) === */
.nss-list {
  display: grid;
  gap: 24px;
  margin: 32px 0 0;
  list-style: none;
  padding: 0;
}
.nss-list-item {
  display: grid;
  grid-template-columns: auto 1fr;
  gap: 16px;
  align-items: start;
  padding: 20px;
  background: #fff;
  border: 1px solid var(--border-soft);
  border-radius: 12px;
}
.nss-band--rev .nss-list-item { background: var(--bg-light); border-color: transparent; }
.nss-list-num {
  width: 38px;
  height: 38px;
  background: var(--accent);
  color: #fff;
  border-radius: 8px;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 18px;
  font-weight: 800;
  flex-shrink: 0;
}
.nss-list-item strong {
  font-size: 17px;
  font-weight: 700;
  color: var(--text);
  display: block;
  margin: 0 0 6px;
}
.nss-list-item p {
  font-size: 15px;
  line-height: 1.6;
  color: #3e4a5d;
  margin: 0;
}

/* === Zadnja sekcija (pogoji) === */
.nss-final {
  padding: 50px 32px;
  background: #f4f7fc;
  border-radius: 16px;
  text-align: center;
}
.nss-final h3 {
  font-size: clamp(22px, 4vw, 28px);
  font-weight: 800;
  line-height: 1.3;
  color: var(--text);
  margin: 0 0 24px;
}
.nss-final-grid {
  display: grid;
  gap: 16px;
  max-width: 800px;
  margin: 0 auto;
}
.nss-final-row {
  padding: 16px;
  background: #fff;
  border-radius: 10px;
  font-size: 16px;
  font-weight: 600;
  color: var(--text);
}

@media(max-width:899px){
  .nss-band { padding: 48px 20px; }
  .nss-flex { gap: 32px; }
  .nss-media { border-radius: 16px; }
  .nss-steps { gap: 28px; }
}
</style>

<!-- ====== 1. Uvod (hero) ====== -->
<div class="nss-band">
  <div class="nss-container">
    <div class="nss-flex">
      <div class="nss-media">
        <img src="<?php echo esc_url( $nf . 'noriks-destapacan-hero.webp' ); ?>" alt="NORIKS Destapacaño — prah za čišćenje odvoda">
      </div>
      <div class="nss-body">
        <span class="nss-kicker">Otpušite odvod za 15 minuta</span>
        <h2 class="nss-h2">Odvod zapušen? <em>Otvori ga bez vodoinstalatera.</em></h2>
        <p>NORIKS Destapacaño je prah koji reagira s toplom vodom i stvara pjenu — ona se širi, lijepi uz zidove cijevi i dolazi tamo gdje tekućine istječu. Bez alata, bez raščlanjivanja, bez plombar računa.</p>
        <p>Dovoljno je jedna čepasta posuda praha po upotrebi — pakovanje nosi nekoliko upotreba. Za 15 minuta otapa mast, ostatke hrane i kosu.</p>
        <p><strong>Upotrebite kada vam voda stoji u sudoperu ili u tušu, ili preventivno jednom mjesečno — odvod će ostati čist.</strong></p>
      </div>
    </div>
  </div>
</div>

<!-- ====== 2. Kako se koristi (koraci) ====== -->
<div class="nss-band nss-band--rev">
  <div class="nss-container">
    <div class="nss-flex">
      <div class="nss-media">
        <img src="<?php echo esc_url( $nf . 'noriks-destapacan-koraci.webp' ); ?>" alt="3 koraka do čistog odvoda">
      </div>
      <div class="nss-body">
        <span class="nss-kicker">Postupak</span>
        <h2 class="nss-h2">Tri koraka do <em>slobodnog odvoda</em></h2>
        <p>Ne morate dodati ništa drugo. Ne morate razvoditi. Prah djeluje odmah pri kontaktu s vodom — vi samo čekate.</p>
        <div class="nss-steps">
          <div class="nss-step">
            <div class="nss-step-num">1</div>
            <div class="nss-step-body">
              <h3>Stavite čepašku poklopac praha u odvod</h3>
              <p>Bez prethodne vode, bez miješanja. Prah ulazi u maksimalnoj koncentraciji od prvog dodira i ide pravo u začepljenje.</p>
            </div>
          </div>
          <div class="nss-step">
            <div class="nss-step-num">2</div>
            <div class="nss-step-body">
              <h3>Zalijte vrelom vodom i pričekajte 15 minuta</h3>
              <p>Čim topla voda dodirne prah, reagira i diže gustu pjenu koja se lijepi uz zidove cijevi. Pjena dolazi tamo gdje tekućine istječu — otapa mast, ostatke i kosu. Vi ne dirate ništa.</p>
            </div>
          </div>
          <div class="nss-step">
            <div class="nss-step-num">3</div>
            <div class="nss-step-body">
              <h3>Isperite kantom vode</h3>
              <p>Nakon 15 minuta bacite kantu vode — cijev ponovno teče kao prvog dana. Bez alata, bez raščlanjivanja, bez plaćanja vodoinstalatera.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- ====== 3. Zašto pjena (mehanizam) ====== -->
<div class="nss-band">
  <div class="nss-container">
    <div class="nss-flex">
      <div class="nss-media">
        <img src="<?php echo esc_url( $nf . 'noriks-destapacan-pjena.webp' ); ?>" alt="Pjena doseže gdje tekućine ne dosežu">
      </div>
      <div class="nss-body">
        <span class="nss-kicker">Mehanizam</span>
        <h2 class="nss-h2">Pjena doseže tamo gdje <em>tekućine istječu</em></h2>
        <p>Destapacaño nije još jedna tekućina. To je formula koja se pretvara unutar cijevi i ostaje upravo tamo gdje je problem.</p>
        <ul class="nss-list">
          <li class="nss-list-item">
            <div class="nss-list-num">1</div>
            <div>
              <strong>Diže se i širi</strong>
              <p>Pri dodiru s toplom vodom, prah reagira i raste u gustu pjenu unutar cijevi.</p>
            </div>
          </li>
          <li class="nss-list-item">
            <div class="nss-list-num">2</div>
            <div>
              <strong>Lijepi se uz zidove</strong>
              <p>Za razliku od tekućine koja pada i istječe u sekundama, pjena ostaje priljubljena upravo gdje je začepljenje.</p>
            </div>
          </li>
          <li class="nss-list-item">
            <div class="nss-list-num">3</div>
            <div>
              <strong>Djeluje sama, 15 minuta</strong>
              <p>Radi na masti, ostacima i kosi dok vi radite drugo. Zatim, kanta vode i gotovo.</p>
            </div>
          </li>
        </ul>
        <p style="margin-top:28px;"><strong>Bacite bocu tekućine i za nekoliko sekundi više je nema. Pjena Destapacaño ostaje — zato doseže tamo gdje tekućina ne doseže.</strong></p>
      </div>
    </div>
  </div>
</div>

<!-- ====== 4. Za što (primjene) ====== -->
<div class="nss-band nss-band--rev">
  <div class="nss-container">
    <div class="nss-flex">
      <div class="nss-media">
        <img src="<?php echo esc_url( $nf . 'noriks-destapacan-primjene.webp' ); ?>" alt="Sudoper, tuš, umivaonik — sve cijevi">
      </div>
      <div class="nss-body">
        <span class="nss-kicker">Primjene</span>
        <h2 class="nss-h2">Sudoper, tuš, umivaonik — <em>sve cijevi</em></h2>
        <p>Destapacaño radi svugdje gdje se odvod začepi — kuhinja, kupaonica, praonica rublja. Ne oštećuje cijevi, ni plastične ni metalne.</p>
        <p>Upotrijebite preventivno jednom mjesečno kako bi spriječili stvaranje začepljenja — jeftinije je od jednog poziva vodoinstalatera.</p>
        <p><strong>Pakovanje nosi nekoliko upotreba — jedna čepasta posuda po upotrebi.</strong> Zatvorite dobro nakon upotrebe i držite podalje od djece.</p>
      </div>
    </div>
  </div>
</div>

<!-- ====== 5. Što otapa (djelovanje) ====== -->
<div class="nss-band">
  <div class="nss-container">
    <div class="nss-flex">
      <div class="nss-media">
        <img src="<?php echo esc_url( $nf . 'noriks-destapacan-djelovanje.webp' ); ?>" alt="Otapa mast, kosu, ostatke hrane">
      </div>
      <div class="nss-body">
        <span class="nss-kicker">Djelovanje</span>
        <h2 class="nss-h2"><em>Otapa mast, kosu i ostatke</em> — bez mehaničkog rada</h2>
        <p>Aktivna formula napada slojeve masti koji se lijepiju uz cijevi, rastavlja nakupine kose iz tuša i sudopera te razbija ostatke hrane koji se nakupljaju u kuhinji.</p>
        <p>Pjena ostaje priljubljena uz problema 15 minuta — dovoljno da ga rastvori i otpusti odvod bez vašeg dodira.</p>
        <p><strong>Ne morate koristiti žicu ili rastaviti sifon. Formula radi umjesto vas.</strong></p>
      </div>
    </div>
  </div>
</div>

<!-- ====== 6. NORIKS garancije ====== -->
<div class="nss-band nss-band--rev">
  <div class="nss-container">
    <div class="nss-final">
      <h3>NORIKS — 120.000 kupaca, ocjena 4,8</h3>
      <div class="nss-final-grid">
        <div class="nss-final-row">✓ 30 dana za povrat novca</div>
        <div class="nss-final-row">✓ Besplatna dostava iznad 70 €</div>
        <div class="nss-final-row">✓ Plaćanje pouzećem</div>
        <div class="nss-final-row">✓ Siguran proizvod za sve vrste cijevi</div>
      </div>
    </div>
  </div>
</div>

<?php
// FAQ za Destapacaño
$destapacan_faq = array(
  array(
    'questioon' => 'Koliko praha staviti po upotrebi?',
    'answer'    => 'Jedna čepasta poklopac praha dovoljno je za jedan odvod. Pakovanje nosi nekoliko upotreba.',
  ),
  array(
    'questioon' => 'Djeluje li u potpuno začepljenoj cijevi?',
    'answer'    => 'Djeluje na većinu začepljenja uzrokovanih masnoćom, kosom i ostatcima hrane. Ako voda uopće ne prolazi, koristite dva puta zaredom ili kombinirajte s mehaničkim čišćenjem.',
  ),
  array(
    'questioon' => 'Koliko vruća voda mora biti?',
    'answer'    => 'Što toplija, to bolja reakcija — ali ne mora kipjeti. Voda iz slavine zagrijana na najvišu temperaturu (50–70 °C) već je dovoljna.',
  ),
  array(
    'questioon' => 'Je li sigurno za plastične cijevi?',
    'answer'    => 'Da. Formula ne oštećuje plastiku, ni metal. Samo pratite upute — jedno primjenjivanje, 15 minuta, ispiranje.',
  ),
  array(
    'questioon' => 'Može li se koristiti preventivno?',
    'answer'    => 'Da, preporučljivo je jednom mjesečno kako bi spriječili nakupljanje masti i ostataka. Jeftinije je od jednog poziva vodoinstalatera.',
  ),
  array(
    'questioon' => 'Koliko dugo traje jedno pakovanje?',
    'answer'    => 'Ovisi o broju odvoda i učestalosti — tipično pakovanje pokriva 4–6 upotreba.',
  ),
  array(
    'questioon' => 'Što ako nakon 15 minuta odvod još nije slobodan?',
    'answer'    => 'Isperite i ponovite postupak drugi put. Ponekad je začepljenje jako duboko ili jako debelo, pa treba dva kruga.',
  ),
);
?>
