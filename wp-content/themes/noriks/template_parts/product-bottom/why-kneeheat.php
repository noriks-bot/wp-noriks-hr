<?php
/**
 * product-bottom: NORIKS KneeHeat — grijac, kompresija i masaza koljena (orto-kneeheat).
 *
 * Sve sekcije su LIJEVO/DESNO (slika + tekst), po referentnoj stranici
 * (getmendable.com / Knee Triple Therapy Recovery System). Nikad slika na sredini.
 * Recenzije i FAQ renderira zajednicki reviews.php.
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$kh      = get_template_directory_uri() . '/img/kneeheat/';
$kh_path = get_template_directory() . '/img/kneeheat/';

$kh_vid = function( $file, $poster, $alt ) use ( $kh, $kh_path ) {
  if ( ! file_exists( $kh_path . $file ) ) { return ''; }
  return '<video class="nkh-video" autoplay muted loop playsinline preload="metadata" '
       . 'poster="' . esc_url( $kh . $poster ) . '" aria-label="' . esc_attr( $alt ) . '">'
       . '<source src="' . esc_url( $kh . $file ) . '" type="video/mp4"></video>';
};

$kh_img = function( $file, $alt ) use ( $kh, $kh_path ) {
  if ( file_exists( $kh_path . $file ) ) {
    return '<img src="' . esc_url( $kh . $file ) . '" alt="' . esc_attr( $alt ) . '" loading="lazy">';
  }
  return '<div class="nkh-ph" role="img" aria-label="' . esc_attr( $alt ) . '"><span>' . esc_html( $alt ) . '</span></div>';
};
?>

<!-- 1) Tri koraka — videi -->
<section class="nkh-sec nkh-light">
  <div class="nkh-wrap">
    <p class="nkh-eyebrow nkh-center">Kako djeluje</p>
    <h2 class="nkh-h2 nkh-center">Olakšanje u 3 jednostavna koraka</h2>
    <p class="nkh-lead nkh-center">Bez postavljanja, bez aplikacije, bez komplicirane rutine. Namjestite, pritisnite gumb i nastavite s danom.</p>
    <div class="nkh-steps3">
      <div class="nkh-step3">
        <?php echo $kh_vid( 'kh-step-1.mp4', 'kh-step-1.jpg', 'Namještanje omotača oko koljena' ); ?>
        <div class="nkh-step3-txt">
          <p class="nkh-step3-h"><span>1</span> Namjestite omotač</p>
          <p>Postavite ga oko koljena i zategnite trake. Traje 20 sekundi i radi na obje noge.</p>
        </div>
      </div>
      <div class="nkh-step3">
        <?php echo $kh_vid( 'kh-step-2.mp4', 'kh-step-2.jpg', 'Pokretanje seanse jednim gumbom' ); ?>
        <div class="nkh-step3-txt">
          <p class="nkh-step3-h"><span>2</span> Pritisnite gumb</p>
          <p>Jedan gumb pokreće sve tri terapije — toplinu, kompresiju i vibraciju — točno 12 minuta.</p>
        </div>
      </div>
      <div class="nkh-step3">
        <?php echo $kh_vid( 'kh-step-3.mp4', 'kh-step-3.jpg', 'Uređaj radi sam dok se odmarate' ); ?>
        <div class="nkh-step3-txt">
          <p class="nkh-step3-h"><span>3</span> Nastavite s danom</p>
          <p>Pogledajte vijesti, popijte kavu. Uređaj radi sam i staje kad seansa završi.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- 2) Zacaran krug — video -->
<section class="nkh-sec nkh-white">
  <div class="nkh-wrap nkh-row">
    <div class="nkh-media"><?php echo $kh_vid( 'kh-vid-bol.mp4', 'kh-vid-bol.jpg', 'Bol i ukočenost u koljenu' ); ?></div>
    <div class="nkh-copy">
      <h2 class="nkh-h2">Prekinite začarani krug. Koljeno je spremno za pravo olakšanje.</h2>
      <p>Ona tupa bol, ukočenost pri ustajanju, oprezan korak prije silaska niz stepenice — to su znakovi tkiva koje godinama tiho gladuje. Odgovor nije još jedna tableta, nego vraćanje protoka krvi u zglob.</p>
      <ul class="nkh-tri">
        <li><strong>12 minuta dnevno:</strong> vraćanje protoka i otpuštanje napetosti, bez tableta.</li>
        <li><strong>Obnova i oporavak:</strong> toplina širi žile, kompresija ispire oteklinu, vibracija otpušta ukočenost — sve u jednoj seansi.</li>
        <li><strong>Kretanje bez računice:</strong> stepenice bez planiranja, čučanj u vrtu, unuk u naručju.</li>
      </ul>
    </div>
  </div>
</section>

<!-- Osjetite razliku — video desno -->
<section class="nkh-sec nkh-light">
  <div class="nkh-wrap nkh-row">
    <div class="nkh-copy">
      <h2 class="nkh-h2">Osjetite razliku: trajno olakšanje počinje danas</h2>
      <p>Ne kratkotrajan mir, nego promjena koju primijetite. <strong>Većina korisnika osjeti pravu razliku unutar prvih 7 do 14 dana</strong> redovite uporabe. Jutarnja ukočenost popušta, silazak niz stepenice prestaje biti računica.</p>
      <ul class="nkh-tri">
        <li><strong>Manje ukočenosti i pritiska:</strong> smanjuje napetost i oteklinu koje održavaju tegobe.</li>
        <li><strong>Bolja cirkulacija:</strong> vraća protok u dublje tkivo koljena — ondje gdje problem zapravo nastaje.</li>
        <li><strong>Sve kod kuće:</strong> bez odlazaka na terapije i bez čekanja termina.</li>
      </ul>
    </div>
    <div class="nkh-media"><?php echo $kh_vid( 'kh-vid-zglob.mp4', 'kh-vid-zglob.jpg', 'Prikaz koljenskog zgloba' ); ?></div>
  </div>
</section>

<!-- Pametna tehnologija — video lijevo -->
<section class="nkh-sec nkh-white">
  <div class="nkh-wrap nkh-row">
    <div class="nkh-media"><?php echo $kh_vid( 'kh-vid-led.mp4', 'kh-vid-led.jpg', 'Grijaći elementi u omotaču' ); ?></div>
        <div class="nkh-copy">
      <h2 class="nkh-h2">Pametna tehnologija za dublje tkivo</h2>
      <p>NORIKS KneeHeat prilagodite svom koljenu: <strong>3 stupnja topline</strong>, <strong>3 načina vibracije</strong> i <strong>cikličnu kompresiju</strong>. Bez kabela, jedan gumb, dvanaest minuta.</p>
      <ul class="nkh-tri">
        <li><strong>Uvijek spreman:</strong> bežičan rad i punjenje preko USB-C kabela.</li>
        <li><strong>Prijenosan:</strong> lagan je i stane u torbu — koristite ga gdje god ste.</li>
        <li><strong>Jednostavno upravljanje:</strong> jedan gumb, bez aplikacije i bez postavljanja.</li>
      </ul>
    </div>
  </div>
</section>


<!-- 2) Trostruka metoda — slika desno -->
<section class="nkh-sec nkh-light">
  <div class="nkh-wrap nkh-row">
    <div class="nkh-copy">
      <h2 class="nkh-h2">Tri terapije u jednoj seansi</h2>
      <p>Grijač, kompresija i vibracija ne rade jedno za drugim, nego istovremeno — zato jedna seansa traje samo 12 minuta.</p>
      <ul class="nkh-tri">
        <li><strong>Toplina do 42 °C</strong> širi krvne žile i omekšava ukočeno tkivo oko zgloba.</li>
        <li><strong>Zračna kompresija</strong> ritmično stišće i otpušta, potiskuje nakupljenu tekućinu i vraća svježu krv.</li>
        <li><strong>Vibracijska masaža 60 Hz</strong> otpušta napetost i ukočenost koja drži koljeno „zaključanim".</li>
      </ul>
      <p class="nkh-note">Za razliku od TENS uređaja koji samo prekrivaju signal boli, KneeHeat djeluje na dublje tkivo.</p>
    </div>
    <div class="nkh-media nkh-graf"><?php echo $kh_img( 'kh-04-metoda.jpg', 'Trostruka metoda: toplina, kompresija i vibracija' ); ?></div>
  </div>
</section>


<!-- 4) Značajke uređaja — slika desno -->
<section class="nkh-sec nkh-white">
  <div class="nkh-wrap nkh-row">
    <div class="nkh-media nkh-graf"><?php echo $kh_img( 'kh-11-znacajke.jpg', 'Značajke uređaja NORIKS KneeHeat' ); ?></div>
    <div class="nkh-copy">
      <h2 class="nkh-h2">Napravljen da se nosi, ne da stoji u ladici</h2>
      <p>Upravljačka ploča je na vanjskoj strani, nadohvat ruke: <strong>jedan dodir mijenja stupanj topline</strong>, drugi način vibracije. Nema izbornika ni aplikacije koju treba tražiti u mraku.</p>
      <p>Omotač se zatvara preko dvije trake, pa čvrstoću birate sami — labavije dok sjedite, čvršće dok hodate po kući. Uređaj tada ostaje na mjestu i ne rotira oko noge.</p>
      <p class="nkh-strong">Bežičan je i puni se USB-C kabelom; jedno punjenje traje više seansi, pa ide s vama na posao ili na put.</p>
    </div>
  </div>
</section>

<!-- 5) Što je u paketu — slika lijevo -->
<section class="nkh-sec nkh-light">
  <div class="nkh-wrap nkh-row">
    <div class="nkh-copy">
      <h2 class="nkh-h2">Što dobivate u pakiranju</h2>
      <ul class="nkh-pack">
        <li><strong>Uređaj NORIKS KneeHeat</strong> — omotač s grijačem, kompresijom i vibracijom</li>
        <li><strong>Pleteni USB-C kabel</strong> za punjenje</li>
        <li><strong>Produžna traka</strong> za veće opsege noge</li>
        <li><strong>2 godine jamstva na zamjenu</strong></li>
      </ul>
    </div>
    <div class="nkh-media nkh-graf"><?php echo $kh_img( 'kh-07-unboxing-h.jpg', 'Sadržaj pakiranja NORIKS KneeHeat' ); ?></div>
  </div>
</section>


<!-- 7) Liječnik — slika desno -->
<section class="nkh-sec nkh-white">
  <div class="nkh-wrap nkh-row">
    <div class="nkh-media nkh-graf"><?php echo $kh_img( 'kh-02-lijecnik.jpg', 'Preporuka ortopeda' ); ?></div>
    <div class="nkh-copy">
      <h2 class="nkh-h2">Stvoreno za svakodnevnu udobnost i pokret</h2>
      <p class="nkh-quote">„Kod kroničnih tegoba s koljenom nakon 45. godine najviše se isplati ono što ljudi mogu raditi svaki dan kod kuće. Toplina, kompresija i vibracija zajedno vraćaju protok u tkivo — a to je temelj na kojem sve ostalo radi.”</p>
      <p class="nkh-sign">Dr. Marko Kovačević, ortoped</p>
    </div>
  </div>
</section>

<!-- 8) Dodaci i jamstvo — slika lijevo -->
<!-- 9) Jamstvo — slika desno -->
<style>
.nkh-sec { padding: 46px 0; }
.nkh-light { background: #f3f0ea; color: #1f2a37; }
.nkh-white { background: #fff;    color: #1f2a37; }
.nkh-dark  { background: #12233b; color: #eef3f9; }
.nkh-dark h2, .nkh-dark h3, .nkh-dark p, .nkh-dark li, .nkh-dark strong { color: #eef3f9; }
.nkh-wrap { max-width: 1440px; margin: 0 auto; padding: 0 22px; }
.nkh-row { display: grid; grid-template-columns: 1fr 1fr; gap: 48px; align-items: center; }
.nkh-media img { width: 100%; height: auto; display: block; border-radius: 14px; }
.nkh-eyebrow { text-transform: uppercase; letter-spacing: .14em; font-size: 12px; font-weight: 700; color: #c1601f; margin: 0 0 8px; }
.nkh-h2 { font-size: 27px; line-height: 1.22; margin: 0 0 12px; font-weight: 700; }
.nkh-sec p { font-size: 15.5px; line-height: 1.62; margin: 0 0 12px; }
.nkh-strong { font-weight: 600; }
.nkh-note { font-size: 14.5px; opacity: .85; margin: 4px 0 0; }
.nkh-quote { font-style: italic; font-size: 16.5px; }
.nkh-sign { font-size: 14px; opacity: .75; margin: 0; }
.nkh-ticks, .nkh-tri, .nkh-pack { list-style: none; padding: 0; margin: 14px 0 0; }
.nkh-ticks li { position: relative; padding-left: 24px; margin-bottom: 7px; font-size: 15px; }
.nkh-ticks li:before { content: ""; position: absolute; left: 0; top: 6px; width: 12px; height: 12px; border-radius: 50%; background: #c1601f; }
.nkh-tri li { border-left: 3px solid #c1601f; padding: 2px 0 2px 14px; margin-bottom: 12px; font-size: 15px; line-height: 1.55; }
.nkh-pack li { position: relative; padding-left: 22px; margin-bottom: 8px; font-size: 15px; line-height: 1.5; }
.nkh-pack li:before { content: "✓"; position: absolute; left: 0; top: 0; color: #1e8f4e; font-weight: 800; }
.nkh-steps { list-style: none; padding: 0; margin: 14px 0 0; }
.nkh-steps li { display: flex; gap: 12px; margin-bottom: 12px; font-size: 15px; line-height: 1.55; }
.nkh-steps span { flex: 0 0 auto; width: 28px; height: 28px; border-radius: 50%; background: #c1601f; color: #fff;
                  font-weight: 800; display: flex; align-items: center; justify-content: center; font-size: 14px; }

.nkh-three { display: grid; grid-template-columns: repeat(3, 1fr); gap: 16px; align-items: start; }
.nkh-three figure { margin: 0; }
.nkh-three img { width: 100%; height: auto; display: block; border-radius: 10px; }
.nkh-three figcaption { text-align: center; font-size: 13px; margin-top: 7px; opacity: .72; }
.nkh-mini { display: grid; grid-template-columns: 1fr 1fr; gap: 12px; margin-top: 14px; }
.nkh-mini figure { margin: 0; }
.nkh-mini img { width: 100%; height: auto; display: block; border-radius: 10px; }
.nkh-ph { display: flex; align-items: center; justify-content: center; min-height: 200px; background: #e3ded4; border-radius: 12px; color: #7a6a55; font-size: 14px; text-align: center; padding: 12px; }
@media (max-width: 820px) {
  .nkh-sec { padding: 22px 0; }
  .nkh-wrap { padding-left: 0; padding-right: 0; }
  .nkh-h2 { font-size: 22px; }
  .nkh-row { grid-template-columns: 1fr; gap: 18px; }
  .nkh-steps3 { grid-template-columns: 1fr; gap: 18px; }
  .nkh-three { grid-template-columns: 1fr; gap: 14px; }
  .nkh-row .nkh-media { order: -1; }
}

/* kratek opis izdelka: kljukice namesto pikic (kot pri udlagi proti hrkanju) */
.woocommerce-product-details__short-description ul,
.woocommerce div.product .woocommerce-product-details__short-description ul {
  list-style: none !important; margin: 8px 0 14px !important; padding-left: 0 !important; }
.woocommerce-product-details__short-description ul li,
.woocommerce div.product .woocommerce-product-details__short-description ul li {
  list-style: none !important; list-style-type: none !important; padding-left: 24px !important;
  text-indent: -24px !important; margin-left: 0 !important; line-height: 1.55 !important; margin-bottom: 8px !important; }
.woocommerce-product-details__short-description ul li::marker { content: "" !important; }
.woocommerce-product-details__short-description ul li::before { content: none !important; }
.woocommerce-product-details__short-description .nkh-tick {
  display: inline-block !important; width: 24px !important; text-indent: 0 !important;
  color: #c1601f !important; font-weight: 800 !important; }
/* slika naj bo poravnana na rob kontejnerja, ne na sredino stolpca */
.nkh-center { text-align: center; }

.nkh-steps3 { display: grid; grid-template-columns: repeat(3, 1fr); gap: 24px; }
.nkh-step3 { background: #fff; border-radius: 16px; overflow: hidden; box-shadow: 0 1px 3px rgba(0,0,0,.07); }
.nkh-step3 .nkh-video { width: 100%; height: auto; display: block; }
.nkh-step3-txt { padding: 16px 18px 20px; }
.nkh-step3-h { display: flex; align-items: center; gap: 10px; font-size: 17px; font-weight: 700; margin: 0 0 6px !important; }
.nkh-step3-h span { flex: 0 0 auto; width: 27px; height: 27px; border-radius: 50%; background: #c1601f; color: #fff;
                    font-size: 13px; font-weight: 800; display: flex; align-items: center; justify-content: center; }
.nkh-step3-txt p:last-child { font-size: 14.5px; margin: 0 !important; }
.nkh-media .nkh-video { width: 100%; height: auto; display: block; border-radius: 14px; }
.nkh-sec p.nkh-lead { max-width: 720px; margin: 0 auto 22px !important; opacity: .85; text-align: center; }
.nkh-sec .nkh-center { text-align: center; }
.nkh-sec .nkh-lead-copy { max-width: 820px; margin: 0 auto 22px !important; text-align: center; }
.nkh-sec .nkh-lead-copy p { margin-left: auto !important; margin-right: auto !important; }
.nkh-sec .nkh-lead-copy h2 { text-align: center; }
</style>
