<?php
/**
 * Tablica velicina za NORIKS KidsPillow (orto-kidspillow) — ergonomski djecji jastuk.
 * Izvor tabele: noriks_kidspillow_sizes() v functions/product-type.php (ista kot v harmoniki).
 * 1:1 z originala (trylittlebear.com, FAQ »What are the sizes?« + slika »Sizes«, inci -> cm): Ages 1-3 48 x 29 cm,
 * visina 2-4 cm; Ages 3-8 50 x 30 cm, 4-6 cm; Ages 8-18 53 x 32 cm, 6-9 cm. Nasvet originala: med velikostma izberite vecjo.
 *
 * VAZNO: id #custom-size-chart-modal i klasa .show su ugovor koji ocekuje vticnik
 * (orto-product.php). Modal je JEDAN prekrivni sloj, bez zasebnog backdropa.
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
?>
<div id="custom-size-chart-modal" class="nkplsc" role="dialog" aria-modal="true" aria-labelledby="nkplsc-title">
  <div class="nkplsc-box">
  <div class="nkplsc-bar">
    <h2 id="nkplsc-title">Tablica veličina</h2>
    <span id="close-size-chart-x" role="button" tabindex="0" aria-label="Zatvori">&times;</span>
  </div>

  <div class="nkplsc-body">
    <p class="nkplsc-lead">Tri veličine prema <strong>dobi djeteta</strong> – svaka s visinom i konturom prilagođenom dječjim proporcijama.</p>

    <div class="nkplsc-scroll">
      <table class="nkplsc-table">
        <thead>
          <tr><th scope="col">Dob djeteta</th><th scope="col">Dimenzije (d × š)</th><th scope="col">Visina</th></tr>
        </thead>
        <tbody>
          <?php foreach ( noriks_kidspillow_sizes() as $r ) : ?>
          <tr><th scope="row"><?php echo esc_html( $r[1] ); ?></th>
              <td class="nkplsc-nw"><?php echo esc_html( $r[2] ); ?></td>
              <td class="nkplsc-nw"><?php echo esc_html( $r[3] ); ?></td></tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>

    <div class="nkplsc-how">
      <h3>Kako odabrati veličinu</h3>
      <ol>
        <li>Odaberite veličinu prema <strong>dobi djeteta</strong> – visina jastuka prilagođena je njegovim proporcijama.</li>
        <li>Dobne skupine dodiruju se na 3. i 8. godini. Ako je dijete točno na granici ili je krupnije od vršnjaka, odaberite <strong>veću veličinu</strong> – u nju može urasti, a jastuk iz kojeg je izraslo više ne pruža pravu potporu.</li>
        <li>Standardna jastučnica 50 × 70 cm odgovara svim veličinama.</li>
      </ol>
    </div>

    <p class="nkplsc-note">Niste sigurni koju veličinu odabrati? Javite nam se i pomoći ćemo vam. Ako vam veličina ne odgovara, imate pravo na povrat ili zamjenu u roku od 30 dana.</p>
  </div>
  </div>
</div>

<style>
#custom-size-chart-modal.nkplsc {
  display: none; position: fixed; inset: 0; z-index: 9999999;
  background: rgba(16,30,48,.7); align-items: center; justify-content: center; padding: 20px;
  font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Arial, sans-serif; color: #17263a;
}
#custom-size-chart-modal.nkplsc.show { display: flex; }
#custom-size-chart-modal.nkplsc * { box-sizing: border-box; }
.nkplsc-box { background: #fff; border-radius: 14px; width: 100%; max-width: 680px;
  max-height: min(800px, 88vh); display: flex; flex-direction: column; overflow: hidden;
  box-shadow: 0 24px 60px rgba(0,0,0,.32); }
.nkplsc-bar { display: flex; align-items: center; justify-content: space-between; padding: 15px 22px; border-bottom: 1px solid #d6e2ef; flex: 0 0 auto; }
.nkplsc-bar h2 { margin: 0; font-size: 19px; font-weight: 700; color: #17263a; }
#close-size-chart-x { font-size: 27px; line-height: 1; font-weight: 700; cursor: pointer; color: #6b7c90; padding: 0 4px; }
#close-size-chart-x:hover { color: #17263a; }
.nkplsc-body { padding: 20px 22px 26px; overflow-y: auto; flex: 1 1 auto; }
.nkplsc-lead { font-size: 14.5px; line-height: 1.6; color: #3a4a5c; margin: 0 0 16px; }
.nkplsc-scroll { overflow-x: auto; -webkit-overflow-scrolling: touch; margin-bottom: 20px; }
.nkplsc-table { width: 100%; border-collapse: collapse; font-size: 14px; }
.nkplsc-table th[scope="col"] { background: #dce8f5 !important; color: #17263a !important; font-weight: 700; text-align: left; padding: 12px 12px; white-space: nowrap; border-bottom: 2px solid #1f568e; }
.nkplsc-table th[scope="col"]:first-child { border-top-left-radius: 8px; }
.nkplsc-table th[scope="col"]:last-child { border-top-right-radius: 8px; }
.nkplsc-table th[scope="row"] { text-align: left; font-weight: 700; padding: 11px 12px; white-space: nowrap; vertical-align: top; }
.nkplsc-table td { padding: 11px 12px; color: #3a4a5c; vertical-align: top; line-height: 1.5; }
.nkplsc-table td.nkplsc-nw { white-space: nowrap; font-weight: 600; color: #17263a; }
.nkplsc-table tbody tr { border-bottom: 1px solid #d6e2ef; }
.nkplsc-table tbody tr:nth-child(odd) { background: #f4f8fc; }
.nkplsc-how h3 { font-size: 16px; font-weight: 700; margin: 0 0 10px; }
.nkplsc-how ol { margin: 0; padding-left: 20px; }
.nkplsc-how li { font-size: 14.5px; line-height: 1.6; color: #3a4a5c; margin-bottom: 7px; }
.nkplsc-note { font-size: 13px; color: #6b7c90; font-style: italic; margin: 12px 0 0; }
@media (max-width: 560px) {
  #custom-size-chart-modal.nkplsc { padding: 12px; }
  .nkplsc-box { max-height: 88vh; }
  .nkplsc-body { padding: 16px 16px 22px; }
  .nkplsc-table { font-size: 13px; }
  .nkplsc-table th[scope="col"], .nkplsc-table th[scope="row"], .nkplsc-table td { padding: 9px 8px; }
}
</style>

<script>
document.addEventListener("DOMContentLoaded", function () {
  var modal = document.getElementById("custom-size-chart-modal");
  if (!modal) return;

  function open(e) { if (e) e.preventDefault(); modal.classList.add("show"); document.body.style.overflow = "hidden"; }
  function close() { modal.classList.remove("show"); document.body.style.overflow = ""; }

  document.addEventListener("click", function (e) {
    if (e.target.closest("#open-size-chartCustom, #open-size-chart, #open-size-chart-secondary, .js-open-size-chart, .gck-size-link")) { open(e); return; }
    if (e.target.closest("#close-size-chart-x")) { close(); }
  });
  modal.addEventListener("click", function (e) { if (e.target === modal) close(); });
  document.addEventListener("keydown", function (e) { if (e.key === "Escape") close(); });

});
</script>
