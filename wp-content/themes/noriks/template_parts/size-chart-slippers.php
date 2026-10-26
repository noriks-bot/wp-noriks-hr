<?php
/**
 * Tablica velicina za NORIKS Slippers (orto-slippers) — tople papuce s debelim potplatom.
 * Izvor tabele: noriks_slippers_sizes() v functions/product-type.php (ista kot v akordeonu in FAQ).
 * Podatki 1:1 s tablic originala ("US Size Chart" + "UK & International Size Chart"): EU 34–35 do 48–49 (prikaz: XS - 34 do 35 ... 4XL - 48 do 49),
 * duljina stopala v cm, UK in US velikosti (tablica zgrajena v HTML, brez slike z znamko).
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
    <p class="kwsc-lead">Pronađite svoju veličinu. Za najveću udobnost obično preporučujemo da odaberete <strong>jedan broj veći</strong> — papuče su najudobnije kad imaju malo više mjesta.</p>

    <div class="kwsc-scroll">
      <table class="kwsc-table">
        <thead>
          <tr><th scope="col">Veličina (EU)</th><th scope="col">Duljina stopala</th></tr>
        </thead>
        <tbody>
          <?php foreach ( noriks_slippers_sizes() as $r ) : ?>
          <tr><th scope="row"><?php echo esc_html( $r[0] ); ?></th>
              <td class="kwsc-nw"><?php echo esc_html( $r[1] ); ?></td></tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>

    <div class="kwsc-how">
      <h3>Kako izmjeriti stopalo?</h3>
      <ol>
        <li>Stanite na list papira i označite petu i vrh najdužeg prsta.</li>
        <li>Izmjerite razmak između dviju oznaka i pronađite veličinu prema duljini stopala u tablici.</li>
        <li>Papuče se u početku mogu činiti malo uske, ali se materijal brzo prilagodi stopalu. Ako ste između dvije veličine, uzmite veću.</li>
      </ol>
      <p class="kwsc-note">Ako vam veličina ne odgovara, imate pravo na povrat ili zamjenu u roku od 30 dana.</p>
    </div>
  </div>
  </div>
</div>

<style>
#custom-size-chart-modal.kwsc {
  display: none; position: fixed; inset: 0; z-index: 9999999;
  background: rgba(20,28,18,.7); align-items: center; justify-content: center; padding: 20px;
  font-family: 'Poppins', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Arial, sans-serif; color: #26302a;
}
#custom-size-chart-modal.kwsc.show { display: flex; }
#custom-size-chart-modal.kwsc * { box-sizing: border-box; }
.kwsc-box { background: #fff; border-radius: 14px; width: 100%; max-width: 720px;
  max-height: min(800px, 88vh); display: flex; flex-direction: column; overflow: hidden;
  box-shadow: 0 24px 60px rgba(0,0,0,.32); }
.kwsc-bar { display: flex; align-items: center; justify-content: space-between; padding: 15px 22px; border-bottom: 1px solid #d6e2d0; flex: 0 0 auto; }
.kwsc-bar h2 { margin: 0; font-size: 19px; font-weight: 700; color: #26302a; }
#close-size-chart-x { font-size: 27px; line-height: 1; font-weight: 700; cursor: pointer; color: #66705f; padding: 0 4px; }
#close-size-chart-x:hover { color: #26302a; }
.kwsc-body { padding: 20px 22px 26px; overflow-y: auto; flex: 1 1 auto; }
.kwsc-img { display: block; width: 100%; max-width: 420px; height: auto; margin: 0 auto 14px; border-radius: 8px; }
.kwsc-lead { font-size: 14.5px; line-height: 1.6; color: #4d5a4f; margin: 0 0 16px; }
.kwsc-scroll { overflow-x: auto; -webkit-overflow-scrolling: touch; margin-bottom: 20px; }
.kwsc-table { width: 100%; border-collapse: collapse; font-size: 14px; }
.kwsc-table th[scope="col"] { background: #eef3ea !important; color: #26302a !important; font-weight: 700; text-align: left; padding: 12px 12px; white-space: nowrap; border-bottom: 2px solid #5f7f57; }
.kwsc-table th[scope="col"]:first-child { border-top-left-radius: 8px; }
.kwsc-table th[scope="col"]:last-child { border-top-right-radius: 8px; }
.kwsc-table th[scope="row"] { text-align: left; font-weight: 700; padding: 11px 12px; white-space: nowrap; vertical-align: top; }
.kwsc-table td { padding: 11px 12px; color: #4d5a4f; vertical-align: top; line-height: 1.5; }
.kwsc-table td.kwsc-nw { white-space: nowrap; font-weight: 600; color: #26302a; }
.kwsc-table tbody tr { border-bottom: 1px solid #d6e2d0; }
.kwsc-table tbody tr:nth-child(odd) { background: #f7faf5; }
.kwsc-how h3 { font-size: 16px; font-weight: 700; margin: 0 0 10px; }
.kwsc-how ol { margin: 0; padding-left: 20px; }
.kwsc-how li { font-size: 14.5px; line-height: 1.6; color: #4d5a4f; margin-bottom: 7px; }
.kwsc-note { font-size: 13px; color: #66705f; font-style: italic; margin: 12px 0 0; }
@media (max-width: 560px) {
  #custom-size-chart-modal.kwsc { padding: 12px; }
  .kwsc-box { max-height: 88vh; }
  .kwsc-body { padding: 16px 16px 22px; }
  .kwsc-table { font-size: 13px; }
  .kwsc-table th[scope="col"], .kwsc-table th[scope="row"], .kwsc-table td { padding: 9px 8px; }
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
