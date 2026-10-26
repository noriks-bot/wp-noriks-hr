<?php
/**
 * Tablica velicina za NORIKS CashmereSweater (orto-cashmeresweater) — pulover od kašmira i svile opuštenog kroja.
 * Izvor tabele: noriks_cashmeresweater_sizes() v functions/product-type.php (ista kot v harmoniki).
 * 1:1 s »SIZE GUIDE« originala (meilleur-moment.com): jedna velicina M = US 6–10; Body Measurement (opseg prsa
 * 130–134 cm) in Product Measurement (duljina 54, duljina rukava 45, sirina ramena 73, opseg prsa 144 cm);
 * »How to Measure« (prsa / struk / bokovi) in opomba o odstopanju 2–3 cm.
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
    <p class="kwsc-lead"><strong>Jedna veličina – M</strong> (EU 36–40). Opušteni kroj sa spuštenim ramenima.</p>

    <h3 class="kwsc-h3">Mjere proizvoda</h3>
    <div class="kwsc-scroll">
      <table class="kwsc-table">
        <thead>
          <tr><th scope="col">Veličina</th><th scope="col">Duljina</th><th scope="col">Duljina rukava</th><th scope="col">Širina ramena</th><th scope="col">Opseg prsa</th></tr>
        </thead>
        <tbody>
          <?php foreach ( noriks_cashmeresweater_sizes() as $r ) : ?>
          <tr><th scope="row"><?php echo esc_html( $r[0] ); ?></th>
              <td class="kwsc-nw"><?php echo esc_html( $r[3] ); ?></td>
              <td class="kwsc-nw"><?php echo esc_html( $r[4] ); ?></td>
              <td class="kwsc-nw"><?php echo esc_html( $r[5] ); ?></td>
              <td class="kwsc-nw"><?php echo esc_html( $r[6] ); ?></td></tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
    <p class="kwsc-note" style="margin:-8px 0 18px;">Mjere se mogu razlikovati od modela do modela zbog dizajna i siluete. Za najbolji pristanak usporedite ih sa sličnim komadom odjeće koji već imate – položite ga ravno i izmjerite s vanjske strane.</p>

    <h3 class="kwsc-h3">Mjere tijela</h3>
    <div class="kwsc-scroll">
      <table class="kwsc-table">
        <thead>
          <tr><th scope="col">Veličina</th><th scope="col">Opseg prsa</th></tr>
        </thead>
        <tbody>
          <?php foreach ( noriks_cashmeresweater_sizes() as $r ) : ?>
          <tr><th scope="row"><?php echo esc_html( $r[0] ); ?></th>
              <td class="kwsc-nw"><?php echo esc_html( $r[2] ); ?></td></tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>

    <div class="kwsc-how">
      <h3>Kako izmjeriti</h3>
      <ol>
        <li><strong>Prsa</strong> — izmjerite opušteno oko najšireg dijela prsa.</li>
        <li><strong>Struk</strong> — izmjerite oko najužeg dijela struka.</li>
        <li><strong>Bokovi</strong> — izmjerite oko najšireg dijela bokova.</li>
      </ol>
    </div>

    <p class="kwsc-note">Sve mjere uzete su ručno, moguće je odstupanje od 2–3 cm. Niste sigurni? Javite nam se i pomoći ćemo vam. Ako vam ne odgovara, imate pravo na povrat ili zamjenu u roku od 30 dana.</p>
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
.kwsc-box { background: #fff; border-radius: 14px; width: 100%; max-width: 720px;
  max-height: min(800px, 88vh); display: flex; flex-direction: column; overflow: hidden;
  box-shadow: 0 24px 60px rgba(0,0,0,.32); }
.kwsc-bar { display: flex; align-items: center; justify-content: space-between; padding: 15px 22px; border-bottom: 1px solid #ead9c9; flex: 0 0 auto; }
.kwsc-bar h2 { margin: 0; font-size: 19px; font-weight: 700; color: #231d19; }
#close-size-chart-x { font-size: 27px; line-height: 1; font-weight: 700; cursor: pointer; color: #6b5f56; padding: 0 4px; }
#close-size-chart-x:hover { color: #231d19; }
.kwsc-body { padding: 20px 22px 26px; overflow-y: auto; flex: 1 1 auto; }
.kwsc-img { display: block; width: 100%; max-width: 420px; height: auto; margin: 0 auto 14px; border-radius: 8px; }
.kwsc-lead { font-size: 14.5px; line-height: 1.6; color: #4a403a; margin: 0 0 16px; }
.kwsc-scroll { overflow-x: auto; -webkit-overflow-scrolling: touch; margin-bottom: 20px; }
.kwsc-table { width: 100%; border-collapse: collapse; font-size: 14px; }
.kwsc-table th[scope="col"] { background: #f7ece2 !important; color: #231d19 !important; font-weight: 700; text-align: left; padding: 12px 12px; white-space: nowrap; border-bottom: 2px solid #a9683f; }
.kwsc-table th[scope="col"]:first-child { border-top-left-radius: 8px; }
.kwsc-table th[scope="col"]:last-child { border-top-right-radius: 8px; }
.kwsc-table th[scope="row"] { text-align: left; font-weight: 700; padding: 11px 12px; white-space: nowrap; vertical-align: top; }
.kwsc-table td { padding: 11px 12px; color: #4a403a; vertical-align: top; line-height: 1.5; }
.kwsc-table td.kwsc-nw { white-space: nowrap; font-weight: 600; color: #231d19; }
.kwsc-table tbody tr { border-bottom: 1px solid #ead9c9; }
.kwsc-table tbody tr:nth-child(odd) { background: #fbf6f1; }
.kwsc-h3 { font-size: 15.5px; font-weight: 700; margin: 0 0 10px; color: #231d19; }
.kwsc-how h3 { font-size: 16px; font-weight: 700; margin: 0 0 10px; }
.kwsc-how ol { margin: 0; padding-left: 20px; }
.kwsc-how li { font-size: 14.5px; line-height: 1.6; color: #4a403a; margin-bottom: 7px; }
.kwsc-note { font-size: 13px; color: #6b5f56; font-style: italic; margin: 12px 0 0; }
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
