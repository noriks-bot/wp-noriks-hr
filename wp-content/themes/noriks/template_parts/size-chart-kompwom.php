<?php
/**
 * Tablica velicina za NORIKS FIT Woman (orto-kompwom).
 * Preslikana s originala (leonieandco): preklopnik Inci/cm, stupci Velicina / Grudi / Struk,
 * uz velicinu i US broj kao na originalu.
 *
 * VAZNO: id #custom-size-chart-modal i klasa .show su ugovor koji ocekuje vticnik
 * (orto-product.php: openBtn -> modal.classList.add("show"), zatvaranje na
 * #close-size-chart-x, na Escape i na klik kad je e.target === modal).
 * Zato je modal JEDAN prekrivni sloj (bez zasebnog backdropa) — klik na tamnu
 * pozadinu zadene sam modal, pa ga zatvore oba handlera.
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
    <p class="kwsc-lead">Veličinu birajte prema <strong>opsegu grudi</strong> — on određuje kako majica sjeda na prsa i ramena. Ako ste između dvije veličine, uzmite <strong>veću</strong>.</p>

    <div class="kwsc-units" role="group" aria-label="Mjerne jedinice">
      <button type="button" class="kwsc-unit is-active" data-unit="cm">cm</button>
      <button type="button" class="kwsc-unit" data-unit="in">inči</button>
    </div>

    <div class="kwsc-scroll">
      <table class="kwsc-table">
        <thead>
          <tr><th scope="col">Veličina</th><th scope="col">Opseg grudi</th><th scope="col">Opseg struka</th></tr>
        </thead>
        <tbody>
          <tr><th scope="row">S <span class="kwsc-us">US 0–4</span></th>
              <td><span class="kwsc-cm">78 – 83 cm</span><span class="kwsc-in">31 – 33 in</span></td>
              <td><span class="kwsc-cm">65 – 71 cm</span><span class="kwsc-in">26 – 28 in</span></td></tr>
          <tr><th scope="row">M <span class="kwsc-us">US 6–8</span></th>
              <td><span class="kwsc-cm">83 – 89 cm</span><span class="kwsc-in">33 – 35 in</span></td>
              <td><span class="kwsc-cm">71 – 77 cm</span><span class="kwsc-in">28 – 30 in</span></td></tr>
          <tr><th scope="row">L <span class="kwsc-us">US 10–12</span></th>
              <td><span class="kwsc-cm">89 – 95 cm</span><span class="kwsc-in">35 – 37 in</span></td>
              <td><span class="kwsc-cm">77 – 83 cm</span><span class="kwsc-in">30 – 33 in</span></td></tr>
          <tr><th scope="row">XL <span class="kwsc-us">US 14</span></th>
              <td><span class="kwsc-cm">95 – 102 cm</span><span class="kwsc-in">37 – 40 in</span></td>
              <td><span class="kwsc-cm">83 – 88 cm</span><span class="kwsc-in">33 – 35 in</span></td></tr>
          <tr><th scope="row">2XL <span class="kwsc-us">US 16–18</span></th>
              <td><span class="kwsc-cm">102 – 108 cm</span><span class="kwsc-in">40 – 43 in</span></td>
              <td><span class="kwsc-cm">88 – 94 cm</span><span class="kwsc-in">35 – 37 in</span></td></tr>
          <tr><th scope="row">3XL <span class="kwsc-us">US 20</span></th>
              <td><span class="kwsc-cm">108 – 115 cm</span><span class="kwsc-in">43 – 45 in</span></td>
              <td><span class="kwsc-cm">94 – 100 cm</span><span class="kwsc-in">37 – 39 in</span></td></tr>
        </tbody>
      </table>
    </div>

    <div class="kwsc-how">
      <h3>Kako izmjeriti</h3>
      <ol>
        <li><strong>Grudi</strong> — preko najšireg dijela grudi, s trakom vodoravno oko tijela.</li>
        <li><strong>Struk</strong> — najuži dio struka, obično malo iznad pupka.</li>
        <li><strong>Odaberite red</strong> u kojem su oba broja; ako padaju u dva reda, uzmite veću veličinu.</li>
      </ol>
      <p class="kwsc-note">Mjerite preko donjeg rublja, ne preko odjeće. Traka neka bude pripijena, ali ne stegnuta.</p>
    </div>
  </div>
  </div>
</div>

<style>
#custom-size-chart-modal.kwsc {
  display: none; position: fixed; inset: 0; z-index: 9999999;
  background: rgba(20,14,18,.7); align-items: center; justify-content: center; padding: 20px;
  font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Arial, sans-serif; color: #241c22;
}
#custom-size-chart-modal.kwsc.show { display: flex; }
#custom-size-chart-modal.kwsc * { box-sizing: border-box; }
.kwsc-box { background: #fff; border-radius: 14px; width: 100%; max-width: 640px;
  max-height: min(720px, 86vh); display: flex; flex-direction: column; overflow: hidden;
  box-shadow: 0 24px 60px rgba(0,0,0,.32); }
.kwsc-bar { display: flex; align-items: center; justify-content: space-between; padding: 15px 22px; border-bottom: 1px solid #efe4e8; flex: 0 0 auto; }
.kwsc-bar h2 { margin: 0; font-size: 19px; font-weight: 800; color: #241c22; }
#close-size-chart-x { font-size: 27px; line-height: 1; font-weight: 700; cursor: pointer; color: #8b7b83; padding: 0 4px; }
#close-size-chart-x:hover { color: #241c22; }
.kwsc-body { padding: 20px 22px 26px; overflow-y: auto; flex: 1 1 auto; }
.kwsc-lead { font-size: 14.5px; line-height: 1.6; color: #6b5f66; margin: 0 0 16px; }
.kwsc-units { display: inline-flex; border: 1px solid #e5d7dc; border-radius: 100px; padding: 3px; margin: 0 0 14px; background: #fbf3f4; }
.kwsc-unit { border: 0; background: transparent; border-radius: 100px; padding: 7px 18px; font: inherit; font-size: 13.5px; font-weight: 700; color: #8b7b83; cursor: pointer; }
.kwsc-unit.is-active { background: #a8536b; color: #fff; }
.kwsc-scroll { overflow-x: auto; -webkit-overflow-scrolling: touch; }
.kwsc-table { width: 100%; border-collapse: collapse; font-size: 15px; }
.kwsc-table th[scope="col"] { background: #a8536b; color: #fff; font-weight: 700; text-align: left; padding: 12px 14px; white-space: nowrap; }
.kwsc-table th[scope="col"]:first-child { border-top-left-radius: 8px; }
.kwsc-table th[scope="col"]:last-child { border-top-right-radius: 8px; }
.kwsc-table th[scope="row"] { text-align: left; font-weight: 800; padding: 12px 14px; white-space: nowrap; }
.kwsc-table td { padding: 12px 14px; color: #46393f; white-space: nowrap; }
.kwsc-table tbody tr { border-bottom: 1px solid #f0e6ea; }
.kwsc-table tbody tr:nth-child(odd) { background: #fbf7f8; }
.kwsc-us { display: block; font-size: 11.5px; font-weight: 600; color: #a08d95; letter-spacing: .02em; }
.kwsc-in { display: none; }
#custom-size-chart-modal.kwsc.is-in .kwsc-cm { display: none; }
#custom-size-chart-modal.kwsc.is-in .kwsc-in { display: inline; }
.kwsc-how { margin-top: 22px; border-top: 1px solid #f0e6ea; padding-top: 18px; }
.kwsc-how h3 { font-size: 16px; font-weight: 800; margin: 0 0 10px; }
.kwsc-how ol { margin: 0; padding-left: 20px; }
.kwsc-how li { font-size: 14.5px; line-height: 1.6; color: #56494f; margin-bottom: 7px; }
.kwsc-note { font-size: 13px; color: #8b7b83; font-style: italic; margin: 12px 0 0; }
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

  modal.querySelectorAll(".kwsc-unit").forEach(function (b) {
    b.addEventListener("click", function () {
      modal.querySelectorAll(".kwsc-unit").forEach(function (x) { x.classList.remove("is-active"); });
      b.classList.add("is-active");
      modal.classList.toggle("is-in", b.dataset.unit === "in");
    });
  });
});
</script>
