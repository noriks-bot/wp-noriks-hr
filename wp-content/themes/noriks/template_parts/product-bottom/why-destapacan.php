<?php
/**
 * product-bottom: NORIKS Destapacaño — prah za čišćenje odvoda (orto-destapacano).
 * 5 sekcij: 1) Kako djeluje 2) Prednosti 3) Uporaba u 3 koraka 4) Sigurno i učinkovito 5) NORIKS uvjeti
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

// Slike uporabljamo iz WP uploads (že naložene v galerijo)
$dst = 'https://devhr.noriks.com/wp-content/uploads/2026/10/';
?>

<style>
.dst-sec { padding: 60px 24px; }
.dst-wrap { max-width: 1240px; margin: 0 auto; }
.dst-grey { background: #f7f7f7; }
.dst-white { background: #fff; }
.dst-h2 { font-family: Inter, sans-serif; font-size: 32px; font-weight: 700; line-height: 1.2; color: #000; margin: 0 0 16px; }
.dst-tagline { font-size: 17px; line-height: 1.6; color: #555; margin: 0 0 48px; max-width: 700px; margin-left: auto; margin-right: auto; }
.dst-center { text-align: center; }
.dst-row { display: grid; grid-template-columns: 1fr 1fr; gap: 60px; align-items: center; margin-bottom: 60px; }
.dst-row:last-child { margin-bottom: 0; }
.dst-row.dst-rev { grid-template-columns: 1fr 1fr; }
.dst-row.dst-rev > *:first-child { order: 2; }
.dst-media { position: relative; aspect-ratio: 4/5; overflow: hidden; border-radius: 12px; box-shadow: 0 8px 24px rgba(0,0,0,0.12); }
.dst-media img, .dst-media video { width: 100%; height: 100%; object-fit: cover; }
.dst-copy h3 { font-family: Inter, sans-serif; font-size: 26px; font-weight: 700; line-height: 1.25; color: #000; margin: 0 0 16px; }
.dst-copy p { font-size: 16px; line-height: 1.7; color: #333; margin: 0 0 14px; }
.dst-copy p:last-child { margin-bottom: 0; }
.dst-copy strong { font-weight: 600; color: #000; }
.dst-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 32px; margin-top: 48px; }
.dst-card { background: #fff; border-radius: 12px; padding: 32px; box-shadow: 0 4px 12px rgba(0,0,0,0.08); text-align: center; }
.dst-card-ico { width: 64px; height: 64px; margin: 0 auto 20px; background: #f0f0f0; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 32px; }
.dst-card h4 { font-family: Inter, sans-serif; font-size: 18px; font-weight: 700; margin: 0 0 12px; color: #000; }
.dst-card p { font-size: 15px; line-height: 1.6; color: #555; margin: 0; }
.dst-steps { display: grid; grid-template-columns: repeat(3, 1fr); gap: 40px; margin-top: 48px; }
.dst-step { text-align: center; }
.dst-step-num { font-family: Inter, sans-serif; font-size: 48px; font-weight: 800; color: #d32f2f; line-height: 1; margin: 0 0 16px; }
.dst-step h4 { font-family: Inter, sans-serif; font-size: 19px; font-weight: 700; margin: 0 0 12px; color: #000; }
.dst-step p { font-size: 15px; line-height: 1.6; color: #555; margin: 0; }
.dst-step-img { aspect-ratio: 1; border-radius: 12px; overflow: hidden; margin-bottom: 20px; box-shadow: 0 4px 12px rgba(0,0,0,0.1); }
.dst-step-img img { width: 100%; height: 100%; object-fit: cover; }
.dst-final { background: #f7f7f7; border-radius: 16px; padding: 40px; text-align: center; margin-top: 48px; }
.dst-final h3 { font-family: Inter, sans-serif; font-size: 24px; font-weight: 700; margin: 0 0 20px; color: #000; }
.dst-final ul { list-style: none; padding: 0; margin: 0; display: inline-block; text-align: left; }
.dst-final li { font-size: 16px; line-height: 2; color: #333; position: relative; padding-left: 28px; }
.dst-final li:before { content: '✓'; position: absolute; left: 0; color: #2e7d32; font-weight: 700; font-size: 18px; }

@media (max-width: 768px) {
  .dst-sec { padding: 40px 24px; }
  .dst-h2 { font-size: 26px; margin-bottom: 12px; }
  .dst-tagline { font-size: 16px; margin-bottom: 32px; }
  .dst-row { grid-template-columns: 1fr; gap: 32px; margin-bottom: 48px; }
  .dst-row.dst-rev > *:first-child { order: 0; }
  .dst-grid { grid-template-columns: 1fr; gap: 24px; }
  .dst-steps { grid-template-columns: 1fr; gap: 32px; }
  .dst-copy h3 { font-size: 22px; }
}
</style>

<!-- 1) Kako djeluje -->
<section class="dst-sec dst-white">
  <div class="dst-wrap">
    <h2 class="dst-h2 dst-center">Prah koji reagira s vodom i otpušuje odvod za 15 minuta</h2>
    <p class="dst-tagline dst-center">NORIKS Destapacaño reagira s toplom vodom i stvara aktivnu pjenu koja prodire duboko u cijevi, otapa mast, kosu i ostatke te čisti odvod bez alata i bez raščlanjivanja sifona.</p>

    <div class="dst-row">
      <div class="dst-media">
        <img src="<?php echo esc_url( $dst . 'noriks-destapacan-pjena.webp' ); ?>" alt="Prah Destapacaño stvara aktivnu pjenu" loading="lazy">
      </div>
      <div class="dst-copy">
        <h3>Aktivna formula koja doseže i čisti začepljenja</h3>
        <p>Kada se prah dodade u odtok i polije vrućom vodom, <strong>nastaje pjena koja se širi kroz cijevi</strong> i otapa nakupine koje začepe odvod.</p>
        <p>Pjena se <strong>lijepi uz zidove cijevi</strong> i rastapa mast, kosu, sapunske ostatke i druge organske tvari koje su uzrok začepljenja i neugodnih mirisa.</p>
        <p>Ne trebaju vam ni posebni alati ni poznavanje vodoinstalatera — prah radi umjesto vas.</p>
      </div>
    </div>
  </div>
</section>

<!-- 2) Prednosti -->
<section class="dst-sec dst-grey">
  <div class="dst-wrap">
    <h2 class="dst-h2 dst-center">Zašto NORIKS Destapacaño</h2>
    <p class="dst-tagline dst-center">Tri stvari koje korisnici najčešće spominju nakon prvog korištenja.</p>

    <div class="dst-grid">
      <div class="dst-card">
        <div class="dst-card-ico">⚙️</div>
        <h4>Otpušuje za 15 minuta</h4>
        <p>Dodajte prah, polijte vodom i pričekajte 10–15 minuta. Pjena otapa čep i čisti cijevi bez dodatnog rada.</p>
      </div>
      <div class="dst-card">
        <div class="dst-card-ico">🛡️</div>
        <h4>Sigurno za cijevi</h4>
        <p>Djeluje bez oštećivanja PVC, metala ili drugih materijala cijevi. Sigurna formula za sve vrste kućnih instalacija.</p>
      </div>
      <div class="dst-card">
        <div class="dst-card-ico">🌿</div>
        <h4>Uklanja neugodne mirise</h4>
        <p>Ne samo da otpušuje odvod, već čisti i bakterije koje uzrokuju neugodan miris iznutra cijevi.</p>
      </div>
    </div>
  </div>
</section>

<!-- 3) Uporaba u 3 koraka -->
<section class="dst-sec dst-white">
  <div class="dst-wrap">
    <h2 class="dst-h2 dst-center">Uporaba u 3 jednostavna koraka</h2>
    <p class="dst-tagline dst-center">Bez alata, bez raščlanjivanja, bez poziva vodoinstalatera.</p>

    <div class="dst-steps">
      <div class="dst-step">
        <div class="dst-step-num">1</div>
        <div class="dst-step-img">
          <img src="<?php echo esc_url( $dst . 'noriks-destapacan-koraci.webp' ); ?>" alt="Dodajte prah u odvod" loading="lazy">
        </div>
        <h4>Dodajte prah</h4>
        <p>Ulijte mjerenu količinu praha direktno u odtok umivaonika, tuša ili kuhinje.</p>
      </div>

      <div class="dst-step">
        <div class="dst-step-num">2</div>
        <div class="dst-step-img">
          <img src="<?php echo esc_url( $dst . 'noriks-destapacan-djelovanje.webp' ); ?>" alt="Polijte vrućom vodom" loading="lazy">
        </div>
        <h4>Polijte vrućom vodom</h4>
        <p>Dodajte vruću vodu (ne kipuću). Prah reagira i stvara pjenu koja prodire u cijevi.</p>
      </div>

      <div class="dst-step">
        <div class="dst-step-num">3</div>
        <div class="dst-step-img">
          <img src="<?php echo esc_url( $dst . 'noriks-destapacan-primjene.webp' ); ?>" alt="Pričekajte 15 minuta" loading="lazy">
        </div>
        <h4>Pričekajte 10–15 minuta</h4>
        <p>Pjena otapa začepljenje. Nakon toga isperite običnom vodom — gotovo.</p>
      </div>
    </div>
  </div>
</section>

<!-- 4) Sigurno i učinkovito -->
<section class="dst-sec dst-grey">
  <div class="dst-wrap">
    <div class="dst-row dst-rev">
      <div class="dst-copy">
        <h3>Sigurno za sve vrste cijevi i redovito korištenje</h3>
        <p>NORIKS Destapacaño je <strong>formuliran da bude siguran za PVC, metal i druge materijale cijevi</strong> u kućanstvu.</p>
        <p>Za održavanje preporučuje se <strong>jednom tjedno</strong> — tako sprječavate začepljenja i neugodne mirise prije nego se pojave, i uštedite na popravcima i pozivima vodoinstalaterima.</p>
        <p>Bez agresivnih kemikalija koje oštećuju cijevi ili stvaraju opasne pare. Djeluje djelotvorno, ali bez rizika.</p>
      </div>
      <div class="dst-media">
        <img src="<?php echo esc_url( $dst . 'noriks-destapacan-hero.webp' ); ?>" alt="Siguran za sve vrste cijevi" loading="lazy">
      </div>
    </div>
  </div>
</section>

<!-- 5) NORIKS uvjeti -->
<section class="dst-sec dst-white">
  <div class="dst-wrap">
    <div class="dst-final">
      <h3>NORIKS jamči najbolju kupovinu</h3>
      <ul>
        <li>30 dana za povrat novca — isprobajte bez rizika</li>
        <li>Besplatna dostava iznad 70 €</li>
        <li>Plaćanje pouzećem dostupno</li>
        <li>120.000 zadovoljnih kupaca diljem Europe</li>
        <li>Ocjena 4,8 na temelju 1.081 recenzije</li>
      </ul>
    </div>
  </div>
</section>
