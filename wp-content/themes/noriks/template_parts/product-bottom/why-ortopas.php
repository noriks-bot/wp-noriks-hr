<?php
/**
 * product-bottom: ORTOPEDSKI POJAS ZA LEĐA (ortopas)
 *
 * Dedicated bottom-nicer for the NORIKS orthopedic back belt.
 * Shown via single-product-bottom-nicer.php when noriks_is_type('ortopas').
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

// Main product image (swap / extend via ACF or the theme's img folder later).
$opz_hero_img = 'https://devhr.noriks.com/wp-content/uploads/2026/07/ortopas-hr-10-1.png';
?>

<!-- ============ Zašto NORIKS ortopedski pojas ============ -->
<section class="opz-why">
  <div class="opz-wrap opz-why-grid">
    <div class="opz-why-media">
      <img loading="lazy" decoding="async" src="<?php echo esc_url( $opz_hero_img ); ?>" alt="NORIKS ortopedski pojas za leđa" />
    </div>
    <div class="opz-why-copy">
      <h2 class="opz-title">Podrška za leđa koja se osjeti od prvog dana</h2>
      <p class="opz-sub">NORIKS ortopedski pojas rasterećuje donji dio leđa, stabilizira kralježnicu i pomaže održati pravilno držanje — na poslu, pri dizanju tereta i tijekom dugog sjedenja ili stajanja.</p>
      <ul class="opz-benefits">
        <li><strong>Ciljana lumbalna podrška</strong> — rasterećuje donji dio leđa i smanjuje pritisak na kralježnicu.</li>
        <li><strong>Podesiva kompresija</strong> — čičak trakama sami određujete čvrstoću i pristajanje.</li>
        <li><strong>Bolje držanje</strong> — nježno vas podsjeća da se ne pogrbite i drži leđa uspravno.</li>
        <li><strong>Prozračan materijal</strong> — udobno se nosi cijeli dan, bez znojenja i stezanja.</li>
        <li><strong>Ne viri ispod odjeće</strong> — tanak, anatomski kroj koji ostaje na mjestu.</li>
      </ul>
    </div>
  </div>
</section>

<!-- ============ Za koga je idealan ============ -->
<section class="opz-for">
  <div class="opz-wrap">
    <h2 class="opz-for-title">Idealan za svakodnevno rasterećenje</h2>
    <div class="opz-for-grid">
      <div class="opz-for-item"><span>💪</span><p>Fizički rad i dizanje tereta</p></div>
      <div class="opz-for-item"><span>💺</span><p>Dugo sjedenje za stolom ili u vožnji</p></div>
      <div class="opz-for-item"><span>🧍</span><p>Dugo stajanje tijekom radnog dana</p></div>
      <div class="opz-for-item"><span>🏋️</span><p>Trening i oporavak nakon napora</p></div>
    </div>
  </div>
</section>

<!-- ============ NORIKS vs ostali ============ -->
<section class="opz-compare-section">
  <div class="opz-compare-wrap">
    <h2 class="opz-compare-title">NORIKS vs ostali</h2>
    <div class="opz-table-scroll">
      <table class="opz-table">
        <thead>
          <tr>
            <th class="opz-feat"></th>
            <th class="opz-comp">Obični pojas<span>(iz trgovine)</span></th>
            <th class="opz-comp">Bez pojasa</th>
            <th class="opz-us">NORIKS<em class="opz-badge">Br. 1</em></th>
          </tr>
        </thead>
        <tbody>
          <tr><td>Ciljana lumbalna podrška</td><td class="mid">~</td><td class="no">✕</td><td class="us ok">✓</td></tr>
          <tr><td>Podesiva čvrstoća (čičak)</td><td class="ok">✓</td><td class="no">✕</td><td class="us ok">✓</td></tr>
          <tr><td>Anatomski kroj koji ne klizi</td><td class="no">✕</td><td class="no">✕</td><td class="us ok">✓</td></tr>
          <tr><td>Prozračan, udoban cijeli dan</td><td class="mid">~</td><td class="mid">—</td><td class="us ok">✓</td></tr>
          <tr><td>Ne viri ispod odjeće</td><td class="no">✕</td><td class="mid">—</td><td class="us ok">✓</td></tr>
          <tr><td>Jamstvo povrata novca 60 dana</td><td class="no">✕</td><td class="no">✕</td><td class="us ok">✓</td></tr>
        </tbody>
      </table>
    </div>
  </div>
</section>

<style>
  .opz-wrap { max-width: 1100px; margin: 0 auto; padding: 0 16px; }

  /* why */
  .opz-why { background: #f7f7f7; padding: 40px 0; }
  .opz-why-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 34px; align-items: center; }
  .opz-why-media img { width: 100%; height: auto; border-radius: 10px; display: block; }
  .opz-title { font-size: clamp(24px,3vw,34px); font-weight: 800; color: #111; margin: 0 0 12px; }
  .opz-sub { font-size: 16px; line-height: 1.6; color: #333; margin: 0 0 18px; }
  .opz-benefits { list-style: none; margin: 0; padding: 0; }
  .opz-benefits li { position: relative; padding: 0 0 10px 26px; font-size: 15px; line-height: 1.55; color: #222; }
  .opz-benefits li::before { content: "✔"; position: absolute; left: 0; top: 0; color: #1a9e5f; font-weight: 700; }

  /* for whom */
  .opz-for { background: #fff; padding: 34px 0 6px; }
  .opz-for-title { text-align: center; font-size: clamp(22px,3vw,30px); font-weight: 700; color: #111; margin: 0 0 24px; }
  .opz-for-grid { display: grid; grid-template-columns: repeat(4,1fr); gap: 16px; }
  .opz-for-item { text-align: center; background: #f7f7f7; border-radius: 10px; padding: 20px 12px; }
  .opz-for-item span { font-size: 30px; display: block; margin-bottom: 8px; }
  .opz-for-item p { margin: 0; font-size: 14px; color: #333; line-height: 1.4; }

  /* comparison table */
  .opz-compare-section { background: #fff; padding: 30px 0 44px; }
  .opz-compare-wrap { max-width: 940px; margin: 0 auto; padding: 0 16px; }
  .opz-compare-title { text-align: center; font-size: clamp(24px,3vw,34px); font-weight: 700; color: #111; margin: 0 0 24px; }
  .opz-table-scroll { border-radius: 16px; overflow: hidden; box-shadow: 0 12px 34px rgba(18,48,90,.12); border: 1px solid #edf0f4; }
  .opz-table { width: 100%; border-collapse: collapse; table-layout: fixed; margin: 0 !important; }
  .opz-table th, .opz-table td { padding: 15px 12px; text-align: center; font-size: 15px; }
  .opz-table thead th { color: #fff; font-weight: 700; vertical-align: middle; font-size: 14px; }
  .opz-table thead th:first-child { width: 34%; background: #fff; }
  .opz-table .opz-comp { background: #767676; }
  .opz-table .opz-comp span { display: block; font-weight: 400; font-size: 11.5px; opacity: .8; margin-top: 3px; }
  .opz-table .opz-us { background: #111; }
  .opz-badge { display: inline-block; margin-left: 6px; background: #fff; color: #111; font-style: normal; font-weight: 700; font-size: 10.5px; padding: 2px 8px; border-radius: 999px; vertical-align: middle; }
  .opz-table tbody td:first-child { text-align: left; font-weight: 600; color: #111; font-size: 14px; line-height: 1.3; padding-left: 18px; }
  .opz-table tbody tr { border-bottom: 1px solid #eef0f4; }
  .opz-table tbody tr:nth-child(even) { background: #fafbfc; }
  .opz-table td.ok { color: #1a9e5f; font-size: 19px; font-weight: 700; }
  .opz-table td.no { color: #cdd2da; font-size: 18px; }
  .opz-table td.mid { color: #e0a52e; font-size: 18px; font-weight: 700; }
  .opz-table td.us { background: #f3f3f3 !important; }
  .opz-table td.us.ok { color: #1a9e5f; }

  @media (max-width: 768px) {
    .opz-why-grid { grid-template-columns: 1fr; gap: 20px; }
    .opz-for-grid { grid-template-columns: repeat(2,1fr); }
  }
  @media (max-width: 640px) {
    .opz-table th, .opz-table td { padding: 12px 6px; font-size: 13px; }
    .opz-table thead th { font-size: 12px; }
    .opz-table thead th:first-child { width: 40%; }
    .opz-table tbody td:first-child { font-size: 12px; padding-left: 10px; }
    .opz-badge { display: block; margin: 4px auto 0; width: max-content; }
  }
</style>
