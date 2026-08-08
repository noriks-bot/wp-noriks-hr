<?php
/**
 * product-bottom: NORIKS Pro — ultrazvučni čistač zubnih pomagala (noriks-dental)
 *
 * Sekcije (redoslijed kao na originalu sonicdental.co):
 *   1. Ultrazvuk 43.000 Hz + UV-C            slika 05 (tamna)
 *   2. Što NORIKS Pro može čistiti           slika 06 + popis pomagala
 *   3. Kako se koristi — 4 koraka            slika 07 / 08
 *   4. Usporedna tablica                     NORIKS Pro vs. ostali
 *   5. Laboratorijski testirano i dokazano   izvještaj S. aureus (3 ponavljanja)
 *   6. Nagrada + The Telegraph               slike 02 i 04
 *   7. Tehnički podaci                       tablica specifikacija
 *   8. Jamstvo                               1 godina + 30 dana
 *
 * Slike: wp-content/themes/noriks/img/dental/
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$nd      = get_template_directory_uri() . '/img/dental/';
$nd_path = get_template_directory() . '/img/dental/';
$nd_img  = function( $file, $alt ) use ( $nd, $nd_path ) {
    if ( ! file_exists( $nd_path . $file ) ) { return ''; }
    return '<img src="' . esc_url( $nd . $file ) . '" alt="' . esc_attr( $alt ) . '" loading="lazy" decoding="async">';
};
?>

<!-- ============ 1) Ultrazvuk 43.000 Hz + UV-C ============ -->
<section class="ndn-sec ndn-dark">
  <div class="ndn-wrap ndn-row2">
    <div class="ndn-copy">
      <p class="ndn-eyebrow">Ultrazvuk + UV-C</p>
      <h2 class="ndn-h2 ndn-h2-light">Čisto do dubine — u 3 minute, bez četkanja</h2>
      <p class="ndn-lead-light">Ultrazvučni valovi frekvencije <strong>43.000 Hz</strong> stvaraju milijune mikroskopskih mjehurića koji uklanjaju naslage i mrlje i s onih mjesta do kojih četkica nikada ne dođe — bez struganja koje ogrebe prozirne folije.</p>
      <ul class="ndn-check ndn-check-light">
        <li><strong>43.000 Hz</strong> ultrazvuka za dubinsko čišćenje</li>
        <li><strong>UV-C svjetlo 200–280 nm</strong> uklanja 99,9 % bakterija, virusa i gljivica</li>
        <li><strong>Bez kemikalija</strong> — dovoljna je obična hladna voda</li>
        <li><strong>2 ciklusa</strong>: 3 minute (svakodnevno) i 5 minuta (dubinsko)</li>
      </ul>
    </div>
    <div class="ndn-media"><?php echo $nd_img( 'nd_05_znacilnosti.webp', 'NORIKS Pro — ultrazvuk 43.000 Hz i UV-C svjetlo' ); ?></div>
  </div>
</section>

<!-- ============ 2) Što NORIKS Pro može čistiti (crni pas, kao na originalu) ============ -->
<section class="ndn-band ndn-band-dark">
  <?php echo $nd_img( 'nd_06_sto-cisti.webp', 'Što NORIKS Pro može čistiti — Invisalign, retaineri, proteze, noćne udlage, glave četkica' ); ?>
</section>
<section class="ndn-sec">
  <div class="ndn-wrap">
    <h2 class="ndn-h2 ndn-center">Jedan uređaj za sva zubna pomagala</h2>
    <p class="ndn-lead ndn-center">Ako se stavlja u usta, NORIKS Pro će to očistiti — postupak je uvijek isti i traje 3 minute.</p>
    <div class="ndn-tiles ndn-tiles-3">
      <?php foreach ( array(
        array( 'Invisalign i prozirne folije', 'bez mliječnih naslaga i mrlja' ),
        array( 'Retaineri', 'i žičani i prozirni' ),
        array( 'Proteze', 'djelomične i potpune' ),
        array( 'Noćne udlage i štitnici', 'za škrgutanje i sport' ),
        array( 'Izbjeljivačke folije', 'bez ostataka gela' ),
        array( 'Glave električnih četkica', 'ondje gdje se skuplja najviše bakterija' ),
      ) as $t ) : ?>
        <div class="ndn-tile">
          <span class="ndn-tick" aria-hidden="true">✓</span>
          <div>
            <p class="ndn-tile-t"><?php echo esc_html( $t[0] ); ?></p>
            <p class="ndn-tile-d"><?php echo esc_html( $t[1] ); ?></p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ============ 3) Kako se koristi — ljubičasti pas s 5 koraka (kao na originalu) ============ -->
<section class="ndn-how">
  <div class="ndn-wrap">
    <h2 class="ndn-how-h">Kako se koristi</h2>
    <p class="ndn-how-sub">Ultrazvučni čistač zubnih pomagala s UV-C svjetlom</p>
    <div class="ndn-how-row">
      <?php $ndn_steps = array(
        'Napunite spremnik NORIKS Pro hladnom vodom',
        'Stavite zubno pomagalo u NORIKS Pro',
        'Uključite i pričekajte ciklus od 3 ili 5 minuta',
        'Isperite pomagalo pod mlazom vode i izlijte vodu iz spremnika',
        'Uživajte u blistavo čistom pomagalu bez mrlja',
      );
      foreach ( $ndn_steps as $k => $txt ) : ?>
        <div class="ndn-how-step">
          <span class="ndn-how-num"><?php echo (int) ( $k + 1 ); ?></span>
          <span class="ndn-how-dot" aria-hidden="true"></span>
          <p class="ndn-how-txt"><?php echo esc_html( $txt ); ?></p>
        </div>
        <?php if ( $k < count( $ndn_steps ) - 1 ) : ?><span class="ndn-how-arrow" aria-hidden="true">›</span><?php endif; ?>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="ndn-sec ndn-alt">
  <div class="ndn-wrap ndn-row2">
    <div class="ndn-media"><?php echo $nd_img( 'nd_07_koraci.webp', 'NORIKS Pro — koraci čišćenja' ); ?></div>
    <div class="ndn-copy">
      <h2 class="ndn-h2">Bez kemikalija, bez ribanja</h2>
      <p class="ndn-lead">Tablete nisu potrebne — uređaj radi sa samom hladnom vodom. Za tvrdokorne mrlje možete dodati tabletu, ali to nije uvjet za čist rezultat.</p>
      <ul class="ndn-check">
        <li>Ciklus od <strong>3 minute</strong> za svakodnevnu upotrebu</li>
        <li>Ciklus od <strong>5 minuta</strong> za dubinsko čišćenje i tvrdokorne naslage</li>
        <li>Spremnik od <strong>165 ml</strong> i tiho djelovanje (≤ 65 dB)</li>
        <li>Upravljanje <strong>na dodir</strong> — jedan gumb i gotovo</li>
      </ul>
      <div class="ndn-media ndn-media-wide"><?php echo $nd_img( 'nd_08_uporaba.webp', 'NORIKS Pro u svakodnevnoj upotrebi' ); ?></div>
    </div>
  </div>
</section>

<!-- ============ 4) Usporedna tablica ============ -->
<section class="ndn-sec">
  <div class="ndn-wrap">
    <h2 class="ndn-h2 ndn-center">Zašto NORIKS Pro, a ne nešto drugo?</h2>
    <p class="ndn-lead ndn-center">Isti test, četiri načina čišćenja zubnih pomagala.</p>
    <div class="ndn-cmp-scroll">
      <table class="ndn-cmp">
        <thead>
          <tr>
            <th class="ndn-cmp-empty"></th>
            <th class="ndn-cmp-us">NORIKS Pro</th>
            <th>Drugi ultrazvučni uređaji</th>
            <th>Četkica</th>
            <th>Tablete za sterilizaciju</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ( array(
            array( 'Dvostruka tehnologija čišćenja',                       1, 0, 0, 0 ),
            array( 'Ultrazvučni valovi visoke frekvencije 43.000 Hz',      1, 0, 0, 0 ),
            array( 'UV-C dezinfekcija (200–280 nm)',                       1, 0, 0, 0 ),
            array( 'Uništava 99,9 % bakterija, patogena i virusa',         1, 0, 0, 1 ),
            array( 'Razvijen posebno za zubna pomagala',                   1, 0, 0, 0 ),
            array( '2 načina rada: normalno i dubinsko čišćenje',          1, 0, 0, 0 ),
            array( 'Prijenosan — praktičan za putovanja',                  1, 1, 1, 0 ),
            array( 'Sterilizira zubna pomagala',                           1, 0, 0, 1 ),
            array( 'Laboratorijski dokazani rezultati sterilizacije',      1, 0, 0, 0 ),
            array( 'Bez kemikalija i bez trošenja na tablete',             1, 1, 1, 0 ),
          ) as $row ) : ?>
            <tr>
              <td class="ndn-cmp-label"><?php echo esc_html( $row[0] ); ?></td>
              <td class="ndn-cmp-us"><span class="ndn-yes ndn-yes-strong">✓</span></td>
              <td><?php echo $row[2] ? '<span class="ndn-yes">✓</span>' : '<span class="ndn-no">✕</span>'; ?></td>
              <td><?php echo $row[3] ? '<span class="ndn-yes">✓</span>' : '<span class="ndn-no">✕</span>'; ?></td>
              <td><?php echo $row[4] ? '<span class="ndn-yes">✓</span>' : '<span class="ndn-no">✕</span>'; ?></td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</section>

<!-- ============ 5) Laboratorijski testirano i dokazano ============ -->
<section class="ndn-sec ndn-alt">
  <div class="ndn-wrap">
    <div class="ndn-lab">
      <div class="ndn-lab-left">
        <h2 class="ndn-h2">Laboratorijski testirano i <strong>dokazano</strong></h2>
        <p class="ndn-lead">Uređaj je laboratorijski testiran na bakterijama i gljivicama — <em>E. coli</em>, <em>Staphylococcus aureus</em> i <em>Candida albicans</em> — i pokazalo se da uništava <strong>99,9 %</strong> njih.</p>
        <p class="ndn-note">Rezultati desno preuzeti su iz laboratorijskih izvještaja GZF22-022410-01 i GZF22-022410-02.</p>
      </div>
      <div class="ndn-lab-right">
        <p class="ndn-lab-title">Izvještaj o testiranju bakterija: <strong>Staphylococcus aureus ATCC 6538</strong></p>
        <p class="ndn-lab-sub">ID uzorka: GZF22-022410.001</p>
        <div class="ndn-cmp-scroll">
          <table class="ndn-lab-table">
            <thead>
              <tr><th>Testni organizam</th><th>Ponavljanje 1</th><th>Ponavljanje 2</th><th>Ponavljanje 3</th></tr>
            </thead>
            <tbody>
              <tr><td>Koncentracija bakterija (cfu/mL)</td><td>3,7×10⁹</td><td>3,8×10⁹</td><td>3,7×10⁹</td></tr>
              <tr><td>Preživjele bakterije — kontrolni uzorak (cfu/kom)</td><td>1,7×10⁶</td><td>1,7×10⁶</td><td>1,6×10⁶</td></tr>
              <tr><td>Preživjele bakterije — testni uzorak (cfu/kom)</td><td>&lt;5,0</td><td>&lt;5,0</td><td>&lt;5,0</td></tr>
              <tr><td>Log vrijednost uništenja</td><td>&gt;5,53</td><td>&gt;5,53</td><td>&gt;5,50</td></tr>
              <tr class="ndn-lab-hl"><td>Stopa uništenja (%)</td><td>&gt;99,9</td><td>&gt;99,9</td><td>&gt;99,9</td></tr>
            </tbody>
          </table>
        </div>
        <p class="ndn-lab-notes">
          1. Trajanje testa: 5 minuta<br>
          2. Sterilizacija je provedena prema uputama za uporabu<br>
          3. Formula za izračun stope uništenja: [(A−B)/A] × 100 %
        </p>
      </div>
    </div>
  </div>
</section>

<!-- ============ 6) Nagrada + The Telegraph ============ -->
<section class="ndn-sec">
  <div class="ndn-wrap">
    <h2 class="ndn-h2 ndn-center">Priznat tamo gdje se najviše koristi</h2>
    <div class="ndn-trust">
      <div class="ndn-trust-card">
        <?php echo $nd_img( 'nd_02_nagrada.webp', 'Finalist Dental Industry Awards 2024' ); ?>
        <p class="ndn-trust-t">Finalist Dental Industry Awards 2024</p>
        <p class="ndn-trust-d">U suradnji s Britanskim udruženjem privatne stomatologije (BPR).</p>
      </div>
      <div class="ndn-trust-card">
        <?php echo $nd_img( 'nd_04_telegraph.webp', 'The Telegraph preporučuje' ); ?>
        <p class="ndn-trust-t">„Najbolji uređaj za čišćenje zubnih pomagala 2024."</p>
        <p class="ndn-trust-d">Preporuka The Telegrapha.</p>
      </div>
      <div class="ndn-trust-card ndn-trust-stat">
        <p class="ndn-stat-num">250.000+</p>
        <p class="ndn-trust-t">prodanih uređaja</p>
        <p class="ndn-trust-d">i povjerenje više od 1.000 stomatoloških ordinacija.</p>
      </div>
    </div>
  </div>
</section>

<!-- ============ 7) Tehnički podaci ============ -->
<section class="ndn-sec ndn-alt">
  <div class="ndn-wrap ndn-row2">
    <div class="ndn-media"><?php echo $nd_img( 'nd_03_pakiranje.webp', 'NORIKS Pro — pakiranje i sadržaj' ); ?></div>
    <div class="ndn-copy">
      <h2 class="ndn-h2">Tehnički podaci</h2>
      <table class="ndn-spec">
        <?php foreach ( array(
          array( 'Model', 'NORIKS Pro' ),
          array( 'Snaga', '20 W' ),
          array( 'Napajanje', 'DC 12 V / 2 A' ),
          array( 'Ultrazvučna frekvencija', '43 kHz' ),
          array( 'UV-C svjetlo', '200–280 nm' ),
          array( 'Razina buke', '≤ 65 dB(A)' ),
          array( 'Ciklusi', '3 min / 5 min' ),
          array( 'Upravljanje', 'na dodir' ),
          array( 'Dimenzije', '122 × 122 × 100 mm' ),
          array( 'Spremnik', 'ø 80 × 45 mm, 165 ml' ),
          array( 'Materijal', 'ABS + nehrđajući čelik 304' ),
          array( 'Certifikati', 'CE, FCC, RoHS, C-Tick (EMC)' ),
        ) as $sp ) : ?>
          <tr><th><?php echo esc_html( $sp[0] ); ?></th><td><?php echo esc_html( $sp[1] ); ?></td></tr>
        <?php endforeach; ?>
      </table>
      <p class="ndn-note">U pakiranju: uređaj NORIKS Pro, adapter za napajanje i upute na hrvatskom.</p>
    </div>
  </div>
</section>

<!-- ============ 8) Jamstvo ============ -->
<section class="ndn-sec">
  <div class="ndn-wrap ndn-wrap-narrow ndn-center">
    <h2 class="ndn-h2">Bez rizika: 30 dana povrata novca</h2>
    <p class="ndn-lead">Isprobajte NORIKS Pro mjesec dana. Ako niste zadovoljni, vraćamo cijeli iznos — bez pitanja. Uz to dobivate <strong>godinu dana jamstva</strong> na uređaj.</p>
    <a class="ndn-cta" href="#bundle-selector">Naruči NORIKS Pro →</a>
  </div>
</section>

<style>
  .ndn-sec { padding: 54px 0; background: #fff; }
  .ndn-sec.ndn-alt { background: #f5f7f8; }
  .ndn-sec.ndn-dark { background: #12181d; }
  .ndn-wrap { max-width: 1440px; margin: 0 auto; padding: 0 24px; }
  .ndn-wrap-narrow { max-width: 820px; }
  .ndn-row2 { display: grid; grid-template-columns: 1fr 1fr; gap: 46px; align-items: center; }
  .ndn-center { text-align: center; }

  .ndn-eyebrow { font-size: 13px; font-weight: 700; letter-spacing: .12em; text-transform: uppercase; color: #4fd1c5; margin: 0 0 10px; }
  .ndn-h2 { font-size: clamp(23px, 2.6vw, 34px); font-weight: 800; line-height: 1.22; color: #12181d; margin: 0 0 14px; }
  .ndn-h2-light { color: #fff; }
  .ndn-lead { font-size: 16px; line-height: 1.65; color: #47525b; margin: 0 0 18px; }
  .ndn-lead-light { font-size: 16px; line-height: 1.65; color: rgba(255,255,255,.82); margin: 0 0 18px; }
  .ndn-note { font-size: 13.5px; line-height: 1.6; color: #7b858d; margin: 12px 0 0; }
  .ndn-media img { width: 100%; height: auto; display: block; border-radius: 16px; }
  .ndn-media-wide { margin-top: 26px; }

  .ndn-check, .ndn-check-light { list-style: none; margin: 0; padding: 0; }
  .ndn-check li, .ndn-check-light li { position: relative; padding: 0 0 11px 30px; font-size: 15.5px; line-height: 1.55; }
  .ndn-check li { color: #35414a; }
  .ndn-check-light li { color: rgba(255,255,255,.88); }
  .ndn-check li:before, .ndn-check-light li:before { content: "✓"; position: absolute; left: 0; top: 0; font-weight: 800; color: #16a34a; }
  .ndn-check-light li:before { color: #4fd1c5; }

  .ndn-tiles { display: grid; grid-template-columns: 1fr 1fr; gap: 12px; margin-top: 6px; }
  .ndn-tile { display: flex; gap: 10px; background: #fff; border: 1px solid #e7ebee; border-radius: 12px; padding: 13px 14px; }
  .ndn-tick { flex: 0 0 22px; width: 22px; height: 22px; border-radius: 50%; background: #16a34a; color: #fff; font-size: 12px; display: inline-flex; align-items: center; justify-content: center; }
  .ndn-tile-t { font-size: 14.5px; font-weight: 700; color: #12181d; margin: 0 0 3px; }
  .ndn-tile-d { font-size: 13px; line-height: 1.45; color: #6b757d; margin: 0; }

  .ndn-steps { list-style: none; counter-reset: ndnstep; margin: 0 0 6px; padding: 0; }
  .ndn-steps li { counter-increment: ndnstep; position: relative; padding: 0 0 16px 44px; font-size: 15.5px; line-height: 1.6; color: #35414a; }
  .ndn-steps li:before { content: counter(ndnstep); position: absolute; left: 0; top: -2px; width: 30px; height: 30px; border-radius: 50%; background: #12181d; color: #fff; font-size: 14px; font-weight: 800; text-align: center; line-height: 30px; }

  /* polni pasovi kot na originalu */
  .ndn-band { background: #000; line-height: 0; text-align: center; }
  /* slika je kvadratna (1400x1400) — brez omejitve bi zauzela pol zaslona */
  .ndn-band img { width: 100%; max-width: 620px; height: auto; display: inline-block; border-radius: 0; }
  .ndn-band-dark { background: #000; }

  /* ljubicasti "Kako se koristi" pas */
  .ndn-how { background: #3b1a78; padding: 46px 0 40px; }
  .ndn-how-h { font-size: clamp(24px,2.8vw,36px); font-weight: 800; color: #fff; margin: 0 0 6px; }
  .ndn-how-sub { font-size: 15px; color: rgba(255,255,255,.72); margin: 0 0 30px; }
  .ndn-how-row { display: flex; align-items: flex-start; gap: 6px; }
  .ndn-how-step { flex: 1 1 0; text-align: center; padding: 0 4px; }
  .ndn-how-num { display: block; font-size: 26px; font-weight: 700; color: #7fd4c8; margin-bottom: 10px; }
  .ndn-how-dot { display: block; width: 74px; height: 74px; margin: 0 auto 14px; border-radius: 50%; border: 1px solid rgba(255,255,255,.35); background: radial-gradient(circle at 50% 45%, rgba(127,212,200,.35), rgba(127,212,200,.06) 62%); }
  .ndn-how-txt { font-size: 13.5px; line-height: 1.5; color: rgba(255,255,255,.9); margin: 0; }
  .ndn-how-arrow { flex: 0 0 18px; color: rgba(255,255,255,.55); font-size: 26px; line-height: 1; margin-top: 62px; }
  .ndn-tiles-3 { grid-template-columns: repeat(3,1fr); margin-top: 22px; }

  .ndn-cmp-scroll { width: 100%; overflow-x: auto; }
  .ndn-cmp { width: 100%; border-collapse: collapse; margin-top: 26px; min-width: 720px; background: #fff; }
  .ndn-cmp th, .ndn-cmp td { padding: 14px 12px; text-align: center; border-bottom: 1px solid #eceff1; font-size: 14px; }
  .ndn-cmp thead th { font-size: 13.5px; font-weight: 700; color: #6b757d; border-bottom: 2px solid #12181d; vertical-align: bottom; }
  .ndn-cmp thead th.ndn-cmp-us { color: #12181d; font-size: 16px; font-weight: 800; }
  .ndn-cmp .ndn-cmp-label { text-align: left; color: #35414a; width: 34%; }
  .ndn-cmp td.ndn-cmp-us, .ndn-cmp th.ndn-cmp-us { background: #eefaf6; }
  .ndn-cmp tbody tr:last-child td { border-bottom: 0; }
  .ndn-yes { color: #16a34a; font-weight: 700; font-size: 17px; }
  .ndn-yes-strong { display: inline-flex; align-items: center; justify-content: center; width: 26px; height: 26px; border-radius: 50%; background: #16a34a; color: #fff; font-size: 14px; }
  .ndn-no { color: #ef4444; font-weight: 700; font-size: 17px; }

  .ndn-lab { display: grid; grid-template-columns: 0.85fr 1.15fr; gap: 40px; align-items: center; background: #fff; border: 1px solid #e7ebee; border-radius: 20px; padding: 34px; }
  .ndn-lab-title { font-size: 16px; font-weight: 800; color: #12181d; margin: 0 0 4px; }
  .ndn-lab-sub { font-size: 13.5px; color: #7b858d; margin: 0 0 14px; }
  .ndn-lab-table { width: 100%; border-collapse: collapse; min-width: 520px; }
  .ndn-lab-table th, .ndn-lab-table td { padding: 11px 10px; font-size: 13.5px; border-bottom: 1px solid #eceff1; text-align: center; }
  .ndn-lab-table thead th { font-size: 12.5px; font-weight: 700; color: #6b757d; }
  .ndn-lab-table th:first-child, .ndn-lab-table td:first-child { text-align: left; color: #35414a; }
  .ndn-lab-hl td { font-weight: 800; color: #12181d; background: #eefaf6; }
  .ndn-lab-notes { font-size: 12.5px; line-height: 1.6; color: #7b858d; margin: 14px 0 0; }

  .ndn-trust { display: grid; grid-template-columns: repeat(3,1fr); gap: 20px; margin-top: 26px; }
  .ndn-trust-card { background: #fff; border: 1px solid #e7ebee; border-radius: 16px; overflow: hidden; padding-bottom: 18px; text-align: center; }
  .ndn-trust-card img { width: 100%; height: auto; display: block; border-radius: 0; }
  .ndn-trust-t { font-size: 15px; font-weight: 800; color: #12181d; margin: 16px 18px 6px; }
  .ndn-trust-d { font-size: 13.5px; line-height: 1.5; color: #6b757d; margin: 0 18px; }
  .ndn-trust-stat { display: flex; flex-direction: column; align-items: center; justify-content: center; padding: 30px 18px; }
  .ndn-stat-num { font-size: 42px; font-weight: 800; color: #16a34a; margin: 0 0 6px; }

  .ndn-spec { width: 100%; border-collapse: collapse; }
  .ndn-spec th, .ndn-spec td { padding: 10px 4px; font-size: 14.5px; border-bottom: 1px solid #e7ebee; text-align: left; }
  .ndn-spec th { color: #6b757d; font-weight: 600; width: 46%; }
  .ndn-spec td { color: #12181d; font-weight: 600; }

  .ndn-cta { display: inline-block; margin-top: 8px; background: #12181d; color: #fff; font-weight: 700; font-size: 15.5px; padding: 14px 30px; border-radius: 10px; text-decoration: none; }
  .ndn-cta:hover { background: #000; color: #fff; }

  @media (max-width: 900px) {
    .ndn-sec { padding: 34px 0; }
    .ndn-wrap { padding: 0 16px; }
    .ndn-row2, .ndn-lab { grid-template-columns: 1fr; gap: 22px; }
    .ndn-lab { padding: 20px; }
    .ndn-trust { grid-template-columns: 1fr; }
    .ndn-tiles, .ndn-tiles-3 { grid-template-columns: 1fr; }
    .ndn-how { padding: 30px 0 26px; }
    .ndn-how-row { flex-wrap: wrap; gap: 16px 0; }
    .ndn-how-step { flex: 0 0 50%; }
    .ndn-how-arrow { display: none; }
    .ndn-how-dot { width: 56px; height: 56px; }
    .ndn-media img { border-radius: 12px; }
    .ndn-band img { max-width: 100%; }
  }
</style>

<script>
(function(){
  document.querySelectorAll('a.ndn-cta[href="#bundle-selector"]').forEach(function(a){
    a.addEventListener('click', function(e){
      e.preventDefault();
      var t = document.getElementById('bundle-selector') || document.querySelector('.single_add_to_cart_button');
      if (t) t.scrollIntoView({ behavior: 'smooth', block: 'center' });
    });
  });
})();
</script>
