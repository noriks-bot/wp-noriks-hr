<?php
/**
 * Tablica velicina za NORIKS SleepSet (orto-sleepset) — zenska pamucna pidzama: majica dugih rukava + kratke hlacice.
 * Izvor tabele: noriks_sleepset_sizes() v functions/product-type.php (ista kot v harmoniki in FAQ).
 * Podatki 1:1 s tablice originala (doreandrose.com, Kiwi »Valentine Jersey«: mjere odjevnog predmeta v cm).
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
    <p class="kwsc-lead">NORIKS SleepSet ima <strong>opušten kroj</strong> koji prirodno pada niz tijelo. Veličine od <strong>XS do XL</strong>. <strong>Niste sigurni u veličinu? Uzmite jednu veličinu veću.</strong></p>

    <h3 class="kwsc-h3">Mjere pidžame (cm)</h3>
    <div class="kwsc-scroll">
      <table class="kwsc-table">
        <thead>
          <tr><th scope="col">Veličina</th><th scope="col">Duljina majice</th><th scope="col">Opseg prsa</th><th scope="col">Opseg struka</th><th scope="col">Duljina rukava</th><th scope="col">Duljina nogavice</th></tr>
        </thead>
        <tbody>
          <?php foreach ( noriks_sleepset_sizes() as $r ) : ?>
          <tr><th scope="row"><?php echo esc_html( $r[0] ); ?></th>
              <td class="kwsc-nw"><?php echo esc_html( $r[1] ); ?></td>
              <td class="kwsc-nw"><?php echo esc_html( $r[2] ); ?></td>
              <td class="kwsc-nw"><?php echo esc_html( $r[3] ); ?></td>
              <td class="kwsc-nw"><?php echo esc_html( $r[4] ); ?></td>
              <td class="kwsc-nw"><?php echo esc_html( $r[5] ); ?></td></tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>

    <div class="kwsc-how">
      <h3>Dobro je znati</h3>
      <ol>
        <li>Mjere su <strong>stvarne dimenzije pidžame</strong>, ne mjere tijela. Tkanina (92 % pamuk, 8 % elastan) se blago rasteže.</li>
        <li>Modelica je visoka <strong>173 cm</strong> i nosi veličinu <strong>S</strong>.</li>
        <li>Ako volite širi kroj ili ste između dviju veličina, odaberite <strong>jednu veličinu veću</strong>.</li>
      </ol>
    </div>

    <p class="kwsc-note">Ako vam veličina ne odgovara, imate pravo na povrat ili zamjenu u roku od 30 dana.</p>
  </div>
  </div>
</div>

<style>
#custom-size-chart-modal.kwsc {
  display: none; position: fixed; inset: 0; z-index: 9999999;
  background: rgba(40,20,24,.7); align-items: center; justify-content: center; padding: 20px;
  font-family: 'Poppins', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Arial, sans-serif; color: #2a1a1d;
}
#custom-size-chart-modal.kwsc.show { display: flex; }
#custom-size-chart-modal.kwsc * { box-sizing: border-box; }
.kwsc-box { background: #fff; border-radius: 14px; width: 100%; max-width: 720px;
  max-height: min(800px, 88vh); display: flex; flex-direction: column; overflow: hidden;
  box-shadow: 0 24px 60px rgba(0,0,0,.32); }
.kwsc-bar { display: flex; align-items: center; justify-content: space-between; padding: 15px 22px; border-bottom: 1px solid #e6bcc2; flex: 0 0 auto; }
.kwsc-bar h2 { margin: 0; font-size: 19px; font-weight: 700; color: #2a1a1d; }
#close-size-chart-x { font-size: 27px; line-height: 1; font-weight: 700; cursor: pointer; color: #6e5a5e; padding: 0 4px; }
#close-size-chart-x:hover { color: #2a1a1d; }
.kwsc-body { padding: 20px 22px 26px; overflow-y: auto; flex: 1 1 auto; }
.kwsc-lead { font-size: 14.5px; line-height: 1.6; color: #55444a; margin: 0 0 16px; }
.kwsc-scroll { overflow-x: auto; -webkit-overflow-scrolling: touch; margin-bottom: 20px; }
.kwsc-table { width: 100%; border-collapse: collapse; font-size: 14px; }
.kwsc-table th[scope="col"] { background: #f6dadd !important; color: #2a1a1d !important; font-weight: 700; text-align: left; padding: 12px 10px; white-space: nowrap; border-bottom: 2px solid #a8323e; }
.kwsc-table th[scope="col"]:first-child { border-top-left-radius: 8px; }
.kwsc-table th[scope="col"]:last-child { border-top-right-radius: 8px; }
.kwsc-table th[scope="row"] { text-align: left; font-weight: 700; padding: 11px 10px; white-space: nowrap; vertical-align: top; }
.kwsc-table td { padding: 11px 10px; color: #55444a; vertical-align: top; line-height: 1.5; }
.kwsc-table td.kwsc-nw { white-space: nowrap; font-weight: 600; color: #2a1a1d; }
.kwsc-table tbody tr { border-bottom: 1px solid #e6bcc2; }
.kwsc-table tbody tr:nth-child(odd) { background: #fbf0f1; }
.kwsc-h3 { font-size: 15px; font-weight: 700; margin: 4px 0 10px; color: #2a1a1d; }
.kwsc-how h3 { font-size: 16px; font-weight: 700; margin: 0 0 10px; }
.kwsc-how ol { margin: 0; padding-left: 20px; }
.kwsc-how li { font-size: 14.5px; line-height: 1.6; color: #55444a; margin-bottom: 7px; }
.kwsc-note { font-size: 13px; color: #6e5a5e; font-style: italic; margin: 12px 0 0; }
@media (max-width: 560px) {
  #custom-size-chart-modal.kwsc { padding: 12px; }
  .kwsc-box { max-height: 88vh; }
  .kwsc-body { padding: 16px 16px 22px; }
  .kwsc-table { font-size: 13px; }
  .kwsc-table th[scope="col"], .kwsc-table th[scope="row"], .kwsc-table td { padding: 9px 7px; }
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
