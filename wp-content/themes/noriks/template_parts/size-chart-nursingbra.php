<?php
/**
 * Tablica velicina za NORIKS NursingBra (orto-nursingbra) — grudnjak za dojenje bez šavova.
 * Izvor tabele: noriks_nursingbra_sizes() / noriks_nursingbra_bands() v functions/product-type.php (ista kot v harmoniki).
 * 1:1 s tablice originala (maternique.com, BlissSizeChart): kosarica AU/UK + US/CA x obseg ispod grudi (traka UK 28–48)
 * -> velicina S–4XL; traka EU 60–110 dodana kot ustreznik UK trake. »–« = ni velikosti.
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
    <p class="kwsc-lead">Veličinu (S – 4XL) pronađite na sjecištu svoje <strong>košarice</strong> (redak) i <strong>trake</strong> prema opsegu ispod grudi (stupac). Ako već nosite grudnjak, npr. 75D, potražite redak D i stupac 75.</p>

    <div class="kwsc-scroll">
      <table class="kwsc-table">
        <thead>
          <tr><th scope="col">Košarica EU</th>
            <?php foreach ( noriks_nursingbra_bands() as $b ) : ?><th scope="col"><?php echo esc_html( $b[0] ); ?></th><?php endforeach; ?></tr>
        </thead>
        <tbody>
          <?php foreach ( noriks_nursingbra_sizes() as $r ) : ?>
          <tr><th scope="row"><?php echo esc_html( $r[0] ); ?></th>
              <?php foreach ( $r[2] as $v ) : ?><td class="kwsc-nw<?php echo $v === '' ? ' kwsc-na' : ''; ?>"><?php echo $v === '' ? '–' : esc_html( $v ); ?></td><?php endforeach; ?></tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
    <p class="kwsc-note" style="margin:-8px 0 18px;">*97 % kupaca kaže da veličina točno odgovara. Uz svaki grudnjak dobivate besplatni produžetak trake u istoj boji (5 cm).</p>

    <div class="kwsc-how">
      <h3>Kako se izmjeriti</h3>
      <ol>
        <li><strong>Opseg ispod grudi (traka):</strong> omotajte metar oko prsnog koša neposredno ispod grudi, zategnite ga i očitajte mjeru.</li>
        <li><strong>Košarica:</strong> uzmite košaricu koju inače nosite – svaka košarica pokriva do 3 veće veličine, pa grudnjak prati rast grudi u trudnoći i tijekom dojenja.</li>
      </ol>
    </div>

    <p class="kwsc-note">Niste sigurni koju veličinu odabrati? Javite nam se i pomoći ćemo vam. Ako vam veličina ne odgovara, imate pravo na povrat ili zamjenu u roku od 30 dana.</p>
  </div>
  </div>
</div>

<style>
#custom-size-chart-modal.kwsc {
  display: none; position: fixed; inset: 0; z-index: 9999999;
  background: rgba(35,25,18,.7); align-items: center; justify-content: center; padding: 20px;
  font-family: 'Poppins', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Arial, sans-serif; color: #231d19;
}
#custom-size-chart-modal.kwsc.show { display: flex; }
#custom-size-chart-modal.kwsc * { box-sizing: border-box; }
.kwsc-box { background: #fff; border-radius: 14px; width: 100%; max-width: 920px;
  max-height: min(800px, 88vh); display: flex; flex-direction: column; overflow: hidden;
  box-shadow: 0 24px 60px rgba(0,0,0,.32); }
.kwsc-bar { display: flex; align-items: center; justify-content: space-between; padding: 15px 22px; border-bottom: 1px solid #ead9c9; flex: 0 0 auto; }
.kwsc-bar h2 { margin: 0; font-size: 19px; font-weight: 700; color: #231d19; }
#close-size-chart-x { font-size: 27px; line-height: 1; font-weight: 700; cursor: pointer; color: #6b5f56; padding: 0 4px; }
#close-size-chart-x:hover { color: #231d19; }
.kwsc-body { padding: 20px 22px 26px; overflow-y: auto; flex: 1 1 auto; }
.kwsc-lead { font-size: 14.5px; line-height: 1.6; color: #4a403a; margin: 0 0 16px; }
.kwsc-scroll { overflow-x: auto; -webkit-overflow-scrolling: touch; margin-bottom: 20px; }
.kwsc-table { width: 100%; border-collapse: collapse; font-size: 14px; }
.kwsc-table th[scope="col"] { background: #f7ece2 !important; color: #231d19 !important; font-weight: 700; text-align: center; padding: 10px 8px; white-space: nowrap; border-bottom: 2px solid #a9683f; }
.kwsc-table th[scope="col"]:first-child { border-top-left-radius: 8px; text-align: left; }
.kwsc-table th[scope="col"]:last-child { border-top-right-radius: 8px; }
.kwsc-sub { display: block; font-size: 11px; font-weight: 500; color: #8a7a6e; }
.kwsc-table th[scope="row"] { text-align: left; font-weight: 700; padding: 10px 8px; white-space: nowrap; }
.kwsc-table td { padding: 10px 8px; color: #4a403a; text-align: center; }
.kwsc-table td.kwsc-nw { white-space: nowrap; font-weight: 600; color: #231d19; }
.kwsc-table td.kwsc-na { color: #c9b8a8; font-weight: 400; }
.kwsc-table tbody tr { border-bottom: 1px solid #ead9c9; }
.kwsc-table tbody tr:nth-child(odd) { background: #fbf6f1; }
.kwsc-how h3 { font-size: 16px; font-weight: 700; margin: 0 0 10px; }
.kwsc-how ol { margin: 0; padding-left: 20px; }
.kwsc-how li { font-size: 14.5px; line-height: 1.6; color: #4a403a; margin-bottom: 7px; }
.kwsc-note { font-size: 13px; color: #6b5f56; font-style: italic; margin: 12px 0 0; }
@media (max-width: 560px) {
  #custom-size-chart-modal.kwsc { padding: 12px; }
  .kwsc-box { max-height: 88vh; }
  .kwsc-body { padding: 16px 16px 22px; }
  .kwsc-table { font-size: 13px; }
  .kwsc-table th[scope="col"], .kwsc-table th[scope="row"], .kwsc-table td { padding: 8px 6px; }
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
