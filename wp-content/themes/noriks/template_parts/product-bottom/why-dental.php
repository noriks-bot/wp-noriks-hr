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
<section class="ndn-sec ndn-soft" style="background:#f1f3f5;">
  <div class="ndn-wrap ndn-row2">
    <div class="ndn-copy">
      <p class="ndn-eyebrow">Ultrazvuk + UV-C</p>
      <h2 class="ndn-h2">Čisto do dubine — u 3 minute, bez četkanja</h2>
      <p class="ndn-lead">Ultrazvučni valovi frekvencije <strong>43.000 Hz</strong> stvaraju milijune mikroskopskih mjehurića koji uklanjaju naslage i mrlje i s onih mjesta do kojih četkica nikada ne dođe — bez struganja koje ogrebe prozirne folije.</p>
      <ul class="ndn-check">
        <li><strong>43.000 Hz</strong> ultrazvuka za dubinsko čišćenje</li>
        <li><strong>UV-C svjetlo 200–280 nm</strong> uklanja 99,9 % bakterija, virusa i gljivica</li>
        <li><strong>Bez kemikalija</strong> — dovoljna je obična hladna voda</li>
        <li><strong>2 ciklusa</strong>: 3 minute (svakodnevno) i 5 minuta (dubinsko)</li>
      </ul>
    </div>
    <div class="ndn-media"><?php echo $nd_img( 'nd_05_znacilnosti.webp', 'NORIKS Pro — ultrazvuk 43.000 Hz i UV-C svjetlo' ); ?></div>
  </div>
</section>

<!-- ============ 2) Što NORIKS Pro može čistiti (jedna crna sekcija) ============ -->
<section class="ndn-clean">
  <div class="ndn-wrap ndn-wrap-mid">
    <h2 class="ndn-clean-h">Što <strong>NORIKS Pro</strong> može čistiti?</h2>
    <p class="ndn-clean-sub">Ako se stavlja u usta, NORIKS Pro će to očistiti — postupak je uvijek isti i traje 3 minute.</p>
    <div class="ndn-clean-row">
      <?php
      $ndn_ico = array(
        'aligner'  => '<svg viewBox="0 0 64 64" width="46" height="46" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 46c-3-12-2-24 4-30 5-5 27-5 32 0 6 6 7 18 4 30" stroke-linecap="round"/><path d="M19 45c-2-10-1-20 3-24 4-4 16-4 20 0 4 4 5 14 3 24" stroke-linecap="round"/></svg>',
        'retainer' => '<svg viewBox="0 0 64 64" width="46" height="46" fill="none" stroke="currentColor" stroke-width="2"><path d="M32 16v14M14 44c-2-12 0-22 6-25 5-3 9 1 12 6 3-5 7-9 12-6 6 3 8 13 6 25" stroke-linecap="round"/><path d="M9 46a5 5 0 1 0 8-4M55 46a5 5 0 1 1-8-4" stroke-linecap="round"/></svg>',
        'denture'  => '<svg viewBox="0 0 64 64" width="46" height="46" fill="none" stroke="currentColor" stroke-width="2"><path d="M10 24c4-6 40-6 44 0 2 3-2 8-6 8H16c-4 0-8-5-6-8Z" stroke-linejoin="round"/><path d="M10 42c4-6 40-6 44 0 2 3-2 8-6 8H16c-4 0-8-5-6-8Z" stroke-linejoin="round"/><path d="M20 24v8M28 24v8M36 24v8M44 24v8M20 42v8M28 42v8M36 42v8M44 42v8"/></svg>',
        'guard'    => '<svg viewBox="0 0 64 64" width="46" height="46" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 44c-3-12-2-22 4-27 5-4 23-4 28 0 6 5 7 15 4 27" stroke-linecap="round"/><path d="M18 46c-2-10-1-18 3-22 4-3 18-3 22 0 4 4 5 12 3 22" stroke-linecap="round"/><path d="M14 44c2 4 8 6 18 6s16-2 18-6" stroke-linecap="round"/></svg>',
        'whiten'   => '<svg viewBox="0 0 64 64" width="46" height="46" fill="none" stroke="currentColor" stroke-width="2"><path d="M16 42c-2-11-1-20 4-24 5-4 23-4 28 0 5 4 6 13 4 24" stroke-linecap="round"/><path d="M24 20l2 5 5 2-5 2-2 5-2-5-5-2 5-2 2-5Z" stroke-linejoin="round"/></svg>',
        'brush'    => '<svg viewBox="0 0 64 64" width="46" height="46" fill="none" stroke="currentColor" stroke-width="2"><rect x="12" y="14" width="16" height="16" rx="8"/><path d="M26 22h10c3 0 5 2 5 5v20c0 3-2 5-5 5h-2c-3 0-5-2-5-5V27" stroke-linejoin="round"/></svg>',
      );
      foreach ( array(
        array( 'aligner',  'Invisalign / folije',      'bez mliječnih naslaga' ),
        array( 'retainer', 'Retaineri',                'žičani i prozirni' ),
        array( 'denture',  'Proteze',                  'djelomične i potpune' ),
        array( 'guard',    'Noćne udlage / štitnici',  'za škrgutanje i sport' ),
        array( 'whiten',   'Izbjeljivačke folije',     'bez ostataka gela' ),
        array( 'brush',    'Glave četkica',            'najviše bakterija' ),
      ) as $c ) : ?>
        <div class="ndn-clean-item">
          <span class="ndn-clean-ico"><?php echo $ndn_ico[ $c[0] ]; ?></span>
          <p class="ndn-clean-t"><?php echo esc_html( $c[1] ); ?></p>
          <p class="ndn-clean-d"><?php echo esc_html( $c[2] ); ?></p>
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
        array( 'Napunite spremnik hladnom vodom',
               '<svg viewBox="0 0 48 48" width="34" height="34" fill="none" stroke="currentColor" stroke-width="2"><path d="M24 6s12 13 12 21a12 12 0 1 1-24 0c0-8 12-21 12-21Z" stroke-linejoin="round"/></svg>' ),
        array( 'Stavite zubno pomagalo u uređaj',
               '<svg viewBox="0 0 48 48" width="34" height="34" fill="none" stroke="currentColor" stroke-width="2"><path d="M10 20c0-5 6-8 14-8s14 3 14 8" stroke-linecap="round"/><path d="M8 22h32l-3 16a4 4 0 0 1-4 3H15a4 4 0 0 1-4-3L8 22Z" stroke-linejoin="round"/></svg>' ),
        array( 'Uključite ciklus od 3 ili 5 minuta',
               '<svg viewBox="0 0 48 48" width="34" height="34" fill="none" stroke="currentColor" stroke-width="2"><circle cx="24" cy="26" r="14"/><path d="M24 18v8l6 4M19 6h10" stroke-linecap="round"/></svg>' ),
        array( 'Isperite pomagalo pod mlazom vode',
               '<svg viewBox="0 0 48 48" width="34" height="34" fill="none" stroke="currentColor" stroke-width="2"><path d="M8 12h14a6 6 0 0 1 6 6v4M28 22h10" stroke-linecap="round"/><path d="M33 28v3M28 32v3M38 32v3M33 36v4" stroke-linecap="round"/></svg>' ),
        array( 'Uživajte u blistavo čistom pomagalu',
               '<svg viewBox="0 0 48 48" width="34" height="34" fill="none" stroke="currentColor" stroke-width="2"><path d="M24 8l3.2 7.6L35 18l-7.8 2.4L24 28l-3.2-7.6L13 18l7.8-2.4L24 8Z" stroke-linejoin="round"/><path d="M36 30l1.6 3.8L41 35l-3.4 1.2L36 40l-1.6-3.8L31 35l3.4-1.2L36 30Z" stroke-linejoin="round"/></svg>' ),
      );
      foreach ( $ndn_steps as $k => $st ) : $txt = $st[0]; ?>
        <div class="ndn-how-step">
          <span class="ndn-how-num"><?php echo (int) ( $k + 1 ); ?></span>
          <span class="ndn-how-dot" aria-hidden="true"><?php echo $st[1]; ?></span>
          <p class="ndn-how-txt"><?php echo esc_html( $txt ); ?></p>
        </div>
        <?php if ( $k < count( $ndn_steps ) - 1 ) : ?><span class="ndn-how-arrow" aria-hidden="true">›</span><?php endif; ?>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="ndn-sec">
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
    </div>
  </div>
</section>

<!-- ============ Svakodnevna upotreba — tekst lijevo, slika desno ============ -->
<section class="ndn-sec ndn-alt">
  <div class="ndn-wrap ndn-row2">
    <div class="ndn-copy">
      <h2 class="ndn-h2">Dio jutarnje rutine, ne dodatni posao</h2>
      <p class="ndn-lead">Stavite pomagalo u uređaj dok se tuširate ili spremate — kad se vratite, čeka vas čisto i dezinficirano pomagalo. Bez namakanja preko noći, bez posudica po kupaonici i bez mirisa tableta.</p>
      <ul class="ndn-check">
        <li>Jedan gumb — <strong>bez postavki i bez učenja</strong></li>
        <li>Spremnik se prazni i ispire za nekoliko sekundi</li>
        <li>Kompaktan (122 × 122 × 100 mm) — stane i u putnu torbu</li>
        <li>Radi na 100–240 V, pa ga možete nositi na put</li>
      </ul>
    </div>
    <div class="ndn-media"><?php echo $nd_img( 'nd_08_uporaba.webp', 'NORIKS Pro u svakodnevnoj upotrebi' ); ?></div>
  </div>
</section>

<!-- ============ 4) Usporedna tablica ============ -->
<section class="ndn-sec">
  <div class="ndn-wrap">
    <h2 class="ndn-h2 ndn-center">Zašto NORIKS Pro, a ne nešto drugo?</h2>
    <p class="ndn-lead ndn-center">Isti test, četiri načina čišćenja zubnih pomagala.</p>
    <div class="ndn-cmp-scroll ndn-cmp-narrow">
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

<!-- ============ 7) Tehnički podaci ============ -->
<section class="ndn-sec">
  <div class="ndn-wrap ndn-wrap-mid">
    <h2 class="ndn-h2 ndn-center">Tehnički podaci</h2>
    <p class="ndn-lead ndn-center">Sve što uređaj zna, na jednom mjestu.</p>
    <div class="ndn-spec-card">
      <div class="ndn-spec-media"><?php echo $nd_img( 'nd_03_pakiranje.webp', 'NORIKS Pro — pakiranje i sadržaj' ); ?></div>
      <div class="ndn-spec-grid">
        <?php foreach ( array(
          array( 'Model', 'NORIKS Pro' ),
          array( 'Ultrazvučna frekvencija', '43 kHz' ),
          array( 'UV-C svjetlo', '200–280 nm' ),
          array( 'Ciklusi čišćenja', '3 min / 5 min' ),
          array( 'Snaga', '20 W' ),
          array( 'Napajanje', 'DC 12 V / 2 A' ),
          array( 'Razina buke', '≤ 65 dB(A)' ),
          array( 'Upravljanje', 'na dodir' ),
          array( 'Dimenzije', '122 × 122 × 100 mm' ),
          array( 'Spremnik', 'ø 80 × 45 mm · 165 ml' ),
          array( 'Materijal', 'ABS + nehrđajući čelik 304' ),
          array( 'Certifikati', 'CE · FCC · RoHS · C-Tick' ),
        ) as $sp ) : ?>
          <div class="ndn-spec-row">
            <span class="ndn-spec-k"><?php echo esc_html( $sp[0] ); ?></span>
            <span class="ndn-spec-v"><?php echo esc_html( $sp[1] ); ?></span>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
    <p class="ndn-note ndn-center">U pakiranju: uređaj NORIKS Pro, adapter za napajanje i upute na hrvatskom.</p>
  </div>
</section>

<style>
  .ndn-sec { padding: 54px 0; background: #fff; }
  .ndn-sec.ndn-alt { background: #f5f7f8; }
  .ndn-sec.ndn-dark { background: #12181d; }
  .ndn-sec.ndn-soft { background: #f1f3f5; }
  .ndn-wrap { max-width: 1440px; margin: 0 auto; padding: 0 24px; }
  .ndn-wrap-narrow { max-width: 820px; }
  .ndn-row2 { display: grid; grid-template-columns: 1fr 1fr; gap: 46px; align-items: center; }
  .ndn-center { text-align: center; }

  .ndn-eyebrow { font-size: 13px; font-weight: 700; letter-spacing: .12em; text-transform: uppercase; color: #0d9488; margin: 0 0 10px; }
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

  /* crni pas — 5 ikona u jednom redu */
  .ndn-clean { background: #0b0b0b; padding: 46px 0 40px; }
  .ndn-clean-h { font-size: clamp(22px,2.6vw,32px); font-weight: 500; color: rgba(255,255,255,.72); text-align: center; margin: 0 0 30px; }
  .ndn-clean-h strong { color: #fff; font-weight: 800; }
  .ndn-clean-row { display: flex; align-items: flex-start; justify-content: center; gap: 10px; }
  .ndn-clean-item { flex: 1 1 0; text-align: center; color: #fff; }
  .ndn-clean-ico { display: inline-flex; align-items: center; justify-content: center; width: 74px; height: 74px; color: #fff; }
  .ndn-clean-sub { text-align: center; font-size: 15px; line-height: 1.6; color: rgba(255,255,255,.62); max-width: 640px; margin: 0 auto 30px; }
  .ndn-clean-t { font-size: 14px; font-weight: 700; line-height: 1.35; color: #fff; margin: 8px 0 2px; }
  .ndn-clean-d { font-size: 12.5px; line-height: 1.4; color: rgba(255,255,255,.55); margin: 0; }
  .ndn-how-dot { display: flex; align-items: center; justify-content: center; color: #cdbdf2; }

  .ndn-cmp-scroll { width: 100%; overflow-x: auto; }
  .ndn-cmp-narrow { max-width: 1000px; margin: 0 auto; }
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

  /* Kratki opis iznad cijene — bez dvostrukih oznaka i bez uvučenih redaka. */
  .woocommerce-product-details__short-description { font-size: 15px; color: #35414a; }
  /* Slogan odmah ispod naslova proizvoda (kao na originalu). */
  .woocommerce-product-details__short-description p.ndn-tagline {
      font-size: 17px !important; font-weight: 700 !important; color: #12181d !important;
      margin: 0 0 10px !important; line-height: 1.35;
  }
  .woocommerce-product-details__short-description p { margin: 0 0 10px !important; line-height: 1.55; color: #35414a; }
  .woocommerce-product-details__short-description ul { list-style: none !important; margin: 0 0 6px !important; padding-left: 0 !important; }
  .woocommerce-product-details__short-description ul li {
      position: relative; list-style: none !important; padding: 0 0 0 26px !important;
      margin: 0 0 8px !important; text-indent: 0 !important; line-height: 1.5; color: #35414a;
  }
  .woocommerce-product-details__short-description ul li:before {
      content: "✓"; position: absolute; left: 0; top: 0; color: #16a34a; font-weight: 800; font-size: 15px;
  }

  .ndn-wrap-mid { max-width: 1080px; }

  /* tehnicki podaci — kartica sa slikom i dvostupcanom listom */
  .ndn-spec-card { display: grid; grid-template-columns: 0.8fr 1.2fr; gap: 30px; align-items: center;
                   background: #fff; border: 1px solid #e7ebee; border-radius: 20px; padding: 26px; margin-top: 24px; }
  .ndn-spec-media img { width: 100%; height: auto; display: block; border-radius: 14px; }
  .ndn-spec-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 0 26px; }
  .ndn-spec-row { display: flex; justify-content: space-between; gap: 10px; padding: 10px 0; border-bottom: 1px solid #eef1f3; }
  .ndn-spec-k { font-size: 13.5px; color: #6b757d; }
  .ndn-spec-v { font-size: 13.5px; font-weight: 700; color: #12181d; text-align: right; }

  /* jamstvo */
  .ndn-guarantee { background: #12181d; border-radius: 22px; padding: 38px 34px; color: #fff; }
  .ndn-guarantee-head { text-align: center; max-width: 640px; margin: 0 auto 26px; }
  .ndn-guarantee .ndn-h2 { color: #fff; }
  .ndn-guarantee .ndn-lead { color: rgba(255,255,255,.78); margin: 0; }
  .ndn-guarantee-grid { display: grid; grid-template-columns: repeat(3,1fr); gap: 16px; }
  .ndn-guarantee-card { background: rgba(255,255,255,.06); border: 1px solid rgba(255,255,255,.14); border-radius: 14px; padding: 20px; text-align: center; }
  .ndn-guarantee-num { font-size: 34px; font-weight: 800; color: #4fd1c5; margin: 0 0 2px; }
  .ndn-guarantee-t { font-size: 15px; font-weight: 700; color: #fff; margin: 0 0 6px; }
  .ndn-guarantee-d { font-size: 13px; line-height: 1.5; color: rgba(255,255,255,.68); margin: 0; }
  .ndn-guarantee-cta { text-align: center; margin-top: 26px; }
  .ndn-guarantee-cta .ndn-cta { background: #fff; color: #12181d; }
  .ndn-guarantee-cta .ndn-cta:hover { background: #e9edf0; color: #12181d; }
  .ndn-guarantee-pay { display: block; margin-top: 12px; font-size: 13px; color: rgba(255,255,255,.62); }

  .ndn-cta { display: inline-block; margin-top: 8px; background: #12181d; color: #fff; font-weight: 700; font-size: 15.5px; padding: 14px 30px; border-radius: 10px; text-decoration: none; }
  .ndn-cta:hover { background: #000; color: #fff; }

  @media (max-width: 900px) {
    .ndn-sec { padding: 34px 0; }
    .ndn-wrap { padding: 0 16px; }
    .ndn-row2, .ndn-lab { grid-template-columns: 1fr; gap: 22px; }
    .ndn-lab { padding: 20px; }
    .ndn-trust, .ndn-guarantee-grid { grid-template-columns: 1fr; }
    .ndn-spec-card { grid-template-columns: 1fr; padding: 18px; }
    .ndn-spec-grid { grid-template-columns: 1fr; }
    .ndn-guarantee { padding: 24px 18px; }
    .ndn-tiles, .ndn-tiles-3 { grid-template-columns: 1fr; }
    .ndn-how { padding: 30px 0 26px; }
    .ndn-how-row { flex-wrap: wrap; gap: 16px 0; }
    .ndn-how-step { flex: 0 0 50%; }
    .ndn-how-arrow { display: none; }
    .ndn-how-dot { width: 56px; height: 56px; }
    .ndn-clean { padding: 26px 0 22px; }
    .ndn-clean-row { flex-wrap: wrap; gap: 18px 0; }
    .ndn-clean-item { flex: 0 0 33.33%; }
    .ndn-clean-ico { width: 56px; height: 56px; }
    .ndn-clean-t { font-size: 12.5px; }
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
