<?php
/**
 * Tablica velicina za NORIKS SmartJacket (orto-smartjacket) — reflektirajuca vodootporna zenska jakna 3 u 1.
 * Izvor tabele: noriks_smartjacket_sizes() v functions/product-type.php (ista kot v akordeonu in v FAQ).
 * Stevilke 1:1 z originala (valkental.com, slika "Normale bis lockere Passform": A/B/C/D + DE konfekcija).
 *
 * VAZNO: id #custom-size-chart-modal i klasa .show su ugovor koji ocekuje vticnik
 * (orto-product.php). Modal je JEDAN prekrivni sloj, bez zasebnog backdropa.
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
?>
<div id="custom-size-chart-modal" class="kwsc" role="dialog" aria-modal="true" aria-labelledby="kwsc-title">
  <div class="kwsc-box">
  <div class="kwsc-bar">
    <h2 id="kwsc-title">Tablica veličina</h2>
    <span id="close-size-chart-x" role="button" tabindex="0" aria-label="Zatvori">&times;</span>
  </div>

  <div class="kwsc-body">
    <p class="kwsc-lead"><strong>Normalan do opušten kroj.</strong> Odaberite veličinu koju inače nosite. Sve mjere su u cm.</p>
    <div class="kwsc-scroll">
      <table class="kwsc-table">
        <thead>
          <tr><th scope="col">Veličina</th><th scope="col">(A) Opseg prsa</th><th scope="col">(B) Opseg trbuha</th><th scope="col">(C) Duljina</th><th scope="col">(D) Rukav</th><th scope="col">Konf. broj (DE)</th></tr>
        </thead>
        <tbody>
          <?php foreach ( noriks_smartjacket_sizes() as $r ) : ?>
          <tr><th scope="row"><?php echo esc_html( $r[0] ); ?></th>
              <td><?php echo esc_html( $r[1] ); ?></td>
              <td><?php echo esc_html( $r[2] ); ?></td>
              <td><?php echo esc_html( $r[3] ); ?></td>
              <td><?php echo esc_html( $r[4] ); ?></td>
              <td><?php echo esc_html( $r[5] ); ?></td></tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
    <div class="kwsc-how">
      <h3>Dvoumite se između dvije veličine?</h3>
      <p class="kwsc-lead">Prema podacima o zamjenama naših kupaca preporučujemo: <strong>od XS do L uzmite manju veličinu</strong>, a <strong>od XL uzmite veću veličinu</strong>.</p>
    </div>
    <p class="kwsc-lead"><strong>Primjer:</strong> Jana je visoka 1,79 m, teži 61 kg i nosi veličinu S.</p>
    <p class="kwsc-note">Pogrešna veličina? Imate pravo na povrat u roku od 30 dana.</p>
  </div>
  </div>
</div>

<style>
#custom-size-chart-modal.kwsc {
  display: none; position: fixed; inset: 0; z-index: 9999999;
  background: rgba(46,36,32,.7); align-items: center; justify-content: center; padding: 20px;
  font-family: 'Poppins', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Arial, sans-serif; color: #1c1617;
}
#custom-size-chart-modal.kwsc.show { display: flex; }
#custom-size-chart-modal.kwsc * { box-sizing: border-box; }
.kwsc-box { background: #fff; border-radius: 14px; width: 100%; max-width: 640px;
  max-height: min(720px, 86vh); display: flex; flex-direction: column; overflow: hidden;
  box-shadow: 0 24px 60px rgba(0,0,0,.32); }
.kwsc-bar { display: flex; align-items: center; justify-content: space-between; padding: 15px 22px; border-bottom: 1px solid #e4ddd3; flex: 0 0 auto; }
.kwsc-bar h2 { margin: 0; font-size: 19px; font-weight: 700; color: #1c1617; }
#close-size-chart-x { font-size: 27px; line-height: 1; font-weight: 700; cursor: pointer; color: #8f8384; padding: 0 4px; }
#close-size-chart-x:hover { color: #1c1617; }
.kwsc-body { padding: 20px 22px 26px; overflow-y: auto; flex: 1 1 auto; }
.kwsc-lead { font-size: 14.5px; line-height: 1.6; color: #5f5355; margin: 0 0 16px; }
.kwsc-scroll { overflow-x: auto; -webkit-overflow-scrolling: touch; margin-bottom: 20px; }
.kwsc-table { width: 100%; border-collapse: collapse; font-size: 15px; }
.kwsc-table th[scope="col"] { background: #f4f0eb !important; color: #1c1617 !important; font-weight: 700; text-align: left; padding: 12px 14px; white-space: nowrap; border-bottom: 2px solid #2E2420; }
.kwsc-table th[scope="col"]:first-child { border-top-left-radius: 8px; }
.kwsc-table th[scope="col"]:last-child { border-top-right-radius: 8px; }
.kwsc-table th[scope="row"] { text-align: left; font-weight: 700; padding: 12px 14px; white-space: nowrap; }
.kwsc-table td { padding: 12px 14px; color: #5f5355; white-space: nowrap; }
.kwsc-table tbody tr { border-bottom: 1px solid #e4ddd3; }
.kwsc-table tbody tr:nth-child(odd) { background: #faf8f5; }
.kwsc-how--img { display: flex; gap: 16px; align-items: flex-start; margin: 0 0 6px; }
.kwsc-how--img img { flex: 0 0 120px; width: 120px; height: auto; border-radius: 8px; border: 1px solid #e4ddd3; }
.kwsc-how h3 { font-size: 16px; font-weight: 700; margin: 0 0 10px; }
.kwsc-how ol { margin: 0; padding-left: 20px; }
.kwsc-how li { font-size: 14.5px; line-height: 1.6; color: #5f5355; margin-bottom: 7px; }
.kwsc-note { font-size: 13px; color: #8f8384; font-style: italic; margin: 12px 0 0; }
@media (max-width: 560px) {
  #custom-size-chart-modal.kwsc { padding: 12px; }
  .kwsc-box { max-height: 88vh; }
  .kwsc-body { padding: 16px 16px 22px; }
  .kwsc-table { font-size: 14px; }
  .kwsc-table th[scope="col"], .kwsc-table th[scope="row"], .kwsc-table td { padding: 10px 10px; }
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
