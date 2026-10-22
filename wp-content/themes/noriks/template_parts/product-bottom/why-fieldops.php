<?php
/**
 * product-bottom: FIELDOPS (orto-fieldops)
 *
 * Dedicated bottom-nicer for the NORIKS FieldOps Pro product.
 * Shown via single-product-bottom-nicer.php when noriks_is_type('fieldops').
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$nfd      = get_template_directory_uri() . '/img/fieldops/';
$nfd_path = get_template_directory() . '/img/fieldops/';
$nfd_img  = function( $file, $alt ) use ( $nfd, $nfd_path ) {
  if ( ! $file || ! file_exists( $nfd_path . $file ) ) { return ''; }
  return '<img src="' . esc_url( $nfd . $file ) . '" alt="' . esc_attr( $alt ) . '" loading="lazy">';
};
?>

<style>
/* Osnovno */
.nfd-sec { padding: 64px 0; }
.nfd-wrap { max-width: 1240px; padding: 0 24px; margin: 0 auto; }
.nfd-alt { background: #f7f7f7; }

/* Tipografija */
.nfd-h2 { font-size: 38px; font-weight: 800; line-height: 1.15; margin: 0 0 24px; color: #000; }
.nfd-kicker { display: block; font-size: 14px; text-transform: uppercase; letter-spacing: 0.8px; color: #777; margin-bottom: 8px; }
.nfd-sec p { font-size: 16px; line-height: 1.6; color: #444; margin: 0 0 16px; }
.nfd-sec p strong { color: #000; font-weight: 700; }
.nfd-note { font-size: 14px; color: #777; font-style: italic; margin-top: 20px; }
.nfd-center { text-align: center; }

/* Dvostupčani raspored */
.nfd-row2 { display: grid; grid-template-columns: 1fr 1fr; gap: 48px; align-items: center; }
.nfd-row2.nfd--rev { direction: rtl; }
.nfd-row2.nfd--rev > * { direction: ltr; }

/* Mediji */
.nfd-media img, .nfd-media video { width: 100%; height: auto; aspect-ratio: 4/5; object-fit: cover; border-radius: 12px; box-shadow: 0 8px 24px rgba(0,0,0,0.12); }
.nfd-media-wide img, .nfd-media-wide video { aspect-ratio: 16/9; }

/* Kartice zaštite */
.nfd-protect-grid { display: grid; grid-template-columns: repeat(2,1fr); gap: 24px; margin-top: 32px; }
.nfd-protect-card { background: #fff; padding: 28px; border-radius: 8px; box-shadow: 0 2px 12px rgba(0,0,0,0.08); }
.nfd-protect-card h3 { font-size: 18px; font-weight: 700; margin: 0 0 12px; color: #000; }
.nfd-protect-card p { margin: 0; font-size: 15px; color: #555; }

/* Spec tablice */
.nfd-spec-list { list-style: none; padding: 0; margin: 24px 0 0; }
.nfd-spec-list li { display: grid; grid-template-columns: 160px 1fr; gap: 16px; padding: 12px 0; border-bottom: 1px solid #e0e0e0; }
.nfd-spec-list li strong { color: #000; }
.nfd-spec-list li span { color: #444; }

/* Načini rada */
.nfd-modes-grid { display: grid; grid-template-columns: repeat(3,1fr); gap: 24px; margin-top: 32px; }
.nfd-mode-card { background: #fff; padding: 24px; border-radius: 8px; text-align: center; }
.nfd-mode-card img { width: 72px; height: 72px; margin: 0 auto 16px; }
.nfd-mode-card h3 { font-size: 17px; font-weight: 700; margin: 0 0 10px; color: #000; }
.nfd-mode-card p { margin: 0; font-size: 14px; color: #555; }

/* Usporedba */
.nfd-comp { background: #fff; border-radius: 8px; overflow: hidden; margin-top: 32px; box-shadow: 0 4px 16px rgba(0,0,0,0.1); }
.nfd-comp-head { display: grid; grid-template-columns: 1fr 120px 120px; gap: 16px; background: #000; color: #fff; padding: 16px 24px; font-weight: 700; }
.nfd-comp-row { display: grid; grid-template-columns: 1fr 120px 120px; gap: 16px; padding: 14px 24px; border-bottom: 1px solid #e0e0e0; }
.nfd-comp-row:last-child { border-bottom: none; }
.nfd-comp-row .nfd-yes { color: #16a34a; font-weight: 700; text-align: center; }
.nfd-comp-row .nfd-no { color: #ccc; text-align: center; }

/* Garancija */
.nfd-guarantee { background: linear-gradient(135deg, #1e3a8a 0%, #3b82f6 100%); color: #fff; padding: 48px 32px; border-radius: 12px; text-align: center; margin-top: 48px; }
.nfd-guarantee h2 { color: #fff; margin-bottom: 16px; }
.nfd-guarantee p { color: #e0e7ff; max-width: 600px; margin: 0 auto 8px; }

@media (max-width: 768px) {
  .nfd-sec { padding: 48px 0; }
  .nfd-h2 { font-size: 28px; margin-bottom: 16px; }
  .nfd-row2, .nfd-protect-grid, .nfd-modes-grid, .nfd-comp-head, .nfd-comp-row { grid-template-columns: 1fr; gap: 24px; }
  .nfd-row2.nfd--rev { direction: ltr; }
  .nfd-spec-list li { grid-template-columns: 1fr; gap: 4px; }
  .nfd-comp-head, .nfd-comp-row { font-size: 14px; padding: 12px 16px; }
}
</style>

<!-- ============ 1) Zaštita sluha + pojačanje ============ -->
<section class="nfd-sec nfd-alt">
  <div class="nfd-wrap nfd-row2">
    <div class="nfd-copy">
      <span class="nfd-kicker">ČUJTE VIŠE, ŠTITITE BOLJE</span>
      <h2 class="nfd-h2">Taktička zaštita sluha s <em>inteligentnom</em> amplifikacijom</h2>
      <p>NORIKS FieldOps Pro taktične slušalice štite vaš sluh od štetnih zvukova iznad 82 dB i istovremeno pojačavaju tihe zvukove do 4× — čujete svaki korak i pokret u prirodi, dok pucnjevi postaju samo tihi prasak.</p>
      <p>Tehnologija s dvostrukom zaštitom <strong>blokira opasnu buku odmah u 0,01 sekunde</strong> — brže nego što pucanj može oštetiti vaš sluh.</p>
      <p>Savršene za lov, streljanu i taktički trening.</p>
    </div>
    <div class="nfd-media"><?php echo $nfd_img('nfd-01-zastita.webp','NORIKS FieldOps Pro taktične slušalice'); ?></div>
  </div>
</section>

<!-- ============ 2) Četiri razine zaštite ============ -->
<section class="nfd-sec">
  <div class="nfd-wrap">
    <h2 class="nfd-h2 nfd-center">Četiri razine zaštite po mjeri vaših potreba</h2>
    <div class="nfd-protect-grid">
      <div class="nfd-protect-card">
        <h3>Zaštita 27 dB (Standard)</h3>
        <p>Osnovna razina sigurne zaštite od štetnih zvukova — sprječava oštećenje sluha kod svih kalibara od .22 do .50 BMG.</p>
      </div>
      <div class="nfd-protect-card">
        <h3>Zaštita 31 dB (Pro)</h3>
        <p>Pojačana razina zaštite za dugotrajno izlaganje jakim zvukovima — idealna za profesionalne lovce i strelce.</p>
      </div>
      <div class="nfd-protect-card">
        <h3>Amplifikacija do 4×</h3>
        <p>U vanjskim uvjetima slušate prirodu bolje nego golim uhom — razgovor, zvukove životinja i udaljene korake.</p>
      </div>
      <div class="nfd-protect-card">
        <h3>Instant blokada 0,01 s</h3>
        <p>Inteligentni čipovi prepoznaju štetni zvuk i ga blokiraju brže nego što može oštetiti vaš sluh.</p>
      </div>
    </div>
  </div>
</section>

<!-- ============ 3) Tri načina rada ============ -->
<section class="nfd-sec nfd-alt">
  <div class="nfd-wrap nfd-row2 nfd--rev">
    <div class="nfd-copy">
      <span class="nfd-kicker">PRILAGODITE SE SVAKOJ SITUACIJI</span>
      <h2 class="nfd-h2">Tri načina rada — <em>jedan</em> klik</h2>
      <p>Prebacite se između načina rada jednim pritiskom gumba — bez kompliciranih izbornika ili postavki.</p>
      <p><strong>Vanjski način:</strong> pojačava zvukove prirode do 4× za bolje praćenje plena.<br>
      <strong>Unutarnji način:</strong> potpuna zaštita za zatvorene streljane.<br>
      <strong>Smanjenje buke:</strong> aktivno filtriranje vjetra i pozadinskih šumova.</p>
      <p>Jednostavna kontrola — uključite, odaberite način, idite u lov.</p>
    </div>
    <div class="nfd-media"><?php echo $nfd_img('nfd-03-nacini.webp','Tri načina rada NORIKS FieldOps'); ?></div>
  </div>
</section>

<!-- ============ 4) 40 sati baterije ============ -->
<section class="nfd-sec">
  <div class="nfd-wrap nfd-row2">
    <div class="nfd-copy">
      <span class="nfd-kicker">NIKAD NEMATE DOSTA</span>
      <h2 class="nfd-h2">40 sati baterije — lovite <em>tjednima</em> bez punjenja</h2>
      <p>Slušalice same nude do 8 sati korištenja, a čvrsta futrola za punjenje donosi ukupno <strong>40 sati zaštite sluha</strong> (Pro verzija 50 sati).</p>
      <p>USB-C brzo punjenje — potpuno napunjene za samo 2 sata. Nikada vam neće ponestati zaštite usred lova.</p>
      <p>Idealno za višednevne lovne izlete, treninге i dugotrajne smjene na streljani.</p>
    </div>
    <div class="nfd-media"><?php echo $nfd_img('nfd-04-baterija.webp','40 sati baterije u slučaju'); ?></div>
  </div>
</section>

<!-- ============ 5) IPX5 vodootporno + Bluetooth ============ -->
<section class="nfd-sec nfd-alt">
  <div class="nfd-wrap nfd-row2 nfd--rev">
    <div class="nfd-copy">
      <span class="nfd-kicker">IZGRAĐENO ZA NAJTEŽE UVJETE</span>
      <h2 class="nfd-h2">IPX5 vodootporno + Bluetooth povezivost</h2>
      <p>Kiša, snijeg, znoj ili vlaga ne zaustavljaju vašu zaštitu. <strong>IPX5 certifikat</strong> znači otpornost na sve vremenske uvjete tijekom lova.</p>
      <p>Bluetooth povezivost omogućava vam primanje poziva bez skidanja zaštite — ostajete povezani i sigurni.</p>
      <p>Lagane, udobne i gotovo neosjetne tijekom cijelog dana — zaboravite na glomazne slušalice.</p>
    </div>
    <div class="nfd-media"><?php echo $nfd_img('nfd-05-vodootporno.webp','IPX5 vodootporna zaštita'); ?></div>
  </div>
</section>

<!-- ============ 6) Usporedba: zašto smo #1 izbor ============ -->
<section class="nfd-sec">
  <div class="nfd-wrap">
    <h2 class="nfd-h2 nfd-center">Zašto smo #1 izbor lovaca i strelaca</h2>
    <div class="nfd-comp">
      <div class="nfd-comp-head">
        <div></div>
        <div style="text-align:center;">NORIKS FieldOps</div>
        <div style="text-align:center;">Drugi</div>
      </div>
      <div class="nfd-comp-row">
        <div>Zaštita sluha (dB)</div>
        <div class="nfd-yes">27–31 dB</div>
        <div class="nfd-no">20–25 dB</div>
      </div>
      <div class="nfd-comp-row">
        <div>Amplifikacija zvuka</div>
        <div class="nfd-yes">Do 4×</div>
        <div class="nfd-no">2×</div>
      </div>
      <div class="nfd-comp-row">
        <div>Vrijeme blokade buke</div>
        <div class="nfd-yes">0,01 s</div>
        <div class="nfd-no">0,5 s</div>
      </div>
      <div class="nfd-comp-row">
        <div>Trajanje baterije</div>
        <div class="nfd-yes">40–50 h</div>
        <div class="nfd-no">20 h</div>
      </div>
      <div class="nfd-comp-row">
        <div>Vodootpornost</div>
        <div class="nfd-yes">IPX5</div>
        <div class="nfd-no">—</div>
      </div>
      <div class="nfd-comp-row">
        <div>Bluetooth</div>
        <div class="nfd-yes">✓</div>
        <div class="nfd-no">—</div>
      </div>
      <div class="nfd-comp-row">
        <div>Jednostavnost korištenja</div>
        <div class="nfd-yes">1 gumb</div>
        <div class="nfd-no">Komplicirano</div>
      </div>
    </div>
  </div>
</section>

<!-- ============ 7) Tehnički podaci ============ -->
<section class="nfd-sec nfd-alt">
  <div class="nfd-wrap nfd-row2">
    <div class="nfd-copy">
      <span class="nfd-kicker">SPECIFIKACIJE</span>
      <h2 class="nfd-h2">Tehnički podaci</h2>
      <ul class="nfd-spec-list">
        <li><strong>Zaštita od buke:</strong> <span>27 dB (Standard), 31 dB (Pro)</span></li>
        <li><strong>Amplifikacija:</strong> <span>do 4× (vanjski način)</span></li>
        <li><strong>Vrijeme reakcije:</strong> <span>0,01 s</span></li>
        <li><strong>Baterija slušalica:</strong> <span>8 h</span></li>
        <li><strong>Ukupno s futrolom:</strong> <span>40 h (Standard), 50 h (Pro)</span></li>
        <li><strong>Punjenje:</strong> <span>USB-C brzo punjenje, 2 h</span></li>
        <li><strong>Vodootpornost:</strong> <span>IPX5</span></li>
        <li><strong>Bluetooth:</strong> <span>da, potpuna povezivost</span></li>
        <li><strong>Načini rada:</strong> <span>vanjski / unutarnji / smanjenje buke</span></li>
        <li><strong>Boje:</strong> <span>Carbon Black, Army Green</span></li>
        <li><strong>U paketu:</strong> <span>slušalice, punjač USB-C, 3 para naušnica (S/M/L), upute</span></li>
      </ul>
    </div>
    <div class="nfd-media"><?php echo $nfd_img('nfd-07-spec.webp','Tehnički podaci NORIKS FieldOps'); ?></div>
  </div>
</section>

<!-- ============ 8) NORIKS garancija ============ -->
<section class="nfd-sec">
  <div class="nfd-wrap">
    <div class="nfd-guarantee">
      <h2 class="nfd-h2">30 dana za povrat novca — bez rizika</h2>
      <p>Isprobajte NORIKS FieldOps Pro bez ikakve brige. Ako niste potpuno zadovoljni, vratite ih u roku od 30 dana za potpuni povrat novca.</p>
      <p>Besplatna dostava iznad 70 €. Plaćanje pouzećem. Preko 120.000 zadovoljnih kupaca.</p>
    </div>
  </div>
</section>
