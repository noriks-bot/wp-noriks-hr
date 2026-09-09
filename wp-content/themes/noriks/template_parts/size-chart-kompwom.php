<?php
/**
 * Tablica velicina za NORIKS FIT Woman (orto-kompwom).
 * Zenska tablica po opsegu grudi i struka — preslikana s reference (leonieandco).
 * Muska tablica po visini i tezini ovdje nema smisla.
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
?>
<div id="custom-size-chart-modal" class="kwsc-modal" style="display:none;">
  <div class="kwsc-backdrop"></div>
  <div class="kwsc-box" role="dialog" aria-modal="true" aria-label="Tablica veličina">
    <button type="button" class="kwsc-close" aria-label="Zatvori">&times;</button>
    <h3 class="kwsc-title">Tablica veličina</h3>
    <p class="kwsc-lead">Veličinu birajte prema <strong>opsegu grudi</strong> — on određuje kako majica sjeda na prsa i ramena. Ako ste između dvije veličine, uzmite <strong>veću</strong>.</p>

    <div class="kwsc-scroll">
      <table class="kwsc-table">
        <thead>
          <tr><th>Veličina</th><th>Opseg grudi</th><th>Opseg struka</th></tr>
        </thead>
        <tbody>
          <tr><td class="kwsc-sz">S</td><td>78 – 83 cm</td><td>65 – 71 cm</td></tr>
          <tr><td class="kwsc-sz">M</td><td>83 – 89 cm</td><td>71 – 77 cm</td></tr>
          <tr><td class="kwsc-sz">L</td><td>89 – 95 cm</td><td>77 – 83 cm</td></tr>
          <tr><td class="kwsc-sz">XL</td><td>95 – 102 cm</td><td>83 – 88 cm</td></tr>
          <tr><td class="kwsc-sz">2XL</td><td>102 – 108 cm</td><td>88 – 94 cm</td></tr>
          <tr><td class="kwsc-sz">3XL</td><td>108 – 115 cm</td><td>94 – 100 cm</td></tr>
        </tbody>
      </table>
    </div>

    <div class="kwsc-how">
      <h4>Kako izmjeriti</h4>
      <div class="kwsc-steps">
        <div><span>1</span><p><strong>Grudi</strong> — izmjerite preko najšireg dijela grudi, s trakom vodoravno oko tijela.</p></div>
        <div><span>2</span><p><strong>Struk</strong> — izmjerite najuži dio struka, obično malo iznad pupka.</p></div>
        <div><span>3</span><p><strong>Odaberite red</strong> u kojem su oba broja — ako padaju u dva reda, uzmite veću veličinu.</p></div>
      </div>
      <p class="kwsc-note">Mjerite preko donjeg rublja, ne preko odjeće. Traka neka bude pripijena, ali ne stegnuta.</p>
    </div>
  </div>
</div>

<style>
.kwsc-modal { position: fixed; inset: 0; z-index: 100000; display: none; align-items: center; justify-content: center; padding: 20px; }
.kwsc-modal.is-open { display: flex; }
.kwsc-backdrop { position: absolute; inset: 0; background: rgba(20,14,18,.55); }
.kwsc-box { position: relative; background: #fff; border-radius: 14px; width: 100%; max-width: 620px;
  max-height: 88vh; overflow-y: auto; padding: 26px 28px 30px; box-shadow: 0 24px 60px rgba(0,0,0,.28);
  font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Arial, sans-serif; color: #241c22; }
.kwsc-close { position: absolute; top: 14px; right: 16px; width: 34px; height: 34px; border: 0; border-radius: 8px;
  background: #f3eef0; color: #241c22; font-size: 22px; line-height: 1; cursor: pointer; }
.kwsc-close:hover { background: #e7dde1; }
.kwsc-title { font-size: 21px; font-weight: 800; margin: 0 0 8px; }
.kwsc-lead { font-size: 14.5px; line-height: 1.6; color: #6b5f66; margin: 0 0 18px; }
.kwsc-scroll { overflow-x: auto; -webkit-overflow-scrolling: touch; }
.kwsc-table { width: 100%; border-collapse: collapse; font-size: 15px; }
.kwsc-table th { background: #a8536b; color: #fff; font-weight: 700; text-align: left; padding: 12px 14px; white-space: nowrap; }
.kwsc-table th:first-child { border-top-left-radius: 8px; }
.kwsc-table th:last-child { border-top-right-radius: 8px; }
.kwsc-table td { padding: 12px 14px; border-bottom: 1px solid #efe6e9; white-space: nowrap; }
.kwsc-table tr:last-child td { border-bottom: 0; }
.kwsc-table tbody tr:nth-child(odd) { background: #fbf5f7; }
.kwsc-sz { font-weight: 800; color: #a8536b; }
.kwsc-how { margin-top: 24px; }
.kwsc-how h4 { font-size: 16px; font-weight: 800; margin: 0 0 12px; }
.kwsc-steps { display: flex; flex-direction: column; gap: 12px; }
.kwsc-steps > div { display: flex; align-items: flex-start; gap: 11px; }
.kwsc-steps span { flex: none; width: 24px; height: 24px; border-radius: 50%; background: #a8536b; color: #fff;
  font-size: 12.5px; font-weight: 800; display: flex; align-items: center; justify-content: center; margin-top: 1px; }
.kwsc-steps p { font-size: 14.5px; line-height: 1.55; color: #56494f; margin: 0; }
.kwsc-note { font-size: 13px; color: #8b7b83; font-style: italic; margin: 14px 0 0; }
@media (max-width: 560px) {
  .kwsc-box { padding: 22px 18px 24px; border-radius: 12px; }
  .kwsc-table { font-size: 14px; }
  .kwsc-table th, .kwsc-table td { padding: 10px 11px; }
}
</style>

<script>
(function(){
  var modal = document.getElementById('custom-size-chart-modal');
  if (!modal) { return; }
  function open(e){ if(e){ e.preventDefault(); } modal.classList.add('is-open'); document.body.style.overflow='hidden'; }
  function close(){ modal.classList.remove('is-open'); document.body.style.overflow=''; }
  document.addEventListener('click', function(e){
    var t = e.target.closest('a[href="#size-chart"], #open-size-chartCustom, .gck-size-link, .size-chart-link');
    if (t) { open(e); return; }
    if (e.target.closest('.kwsc-close') || e.target.classList.contains('kwsc-backdrop')) { close(); }
  });
  document.addEventListener('keydown', function(e){ if (e.key === 'Escape') { close(); } });
})();
</script>
