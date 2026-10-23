<?php
/**
 * Tablica velicina za NORIKS TravelBag (orto-travelbag) — putna torba za rucnu prtljagu s odvojivim kotacicima.
 * Izvor tabele: noriks_travelbag_sizes() v functions/product-type.php (ista kot v harmoniki).
 * 1:1 z originala (luhxe.com, okno »Which one is for me?« Classic / Roller Edition + »other details«:
 * 20" x 9" x 12.5" = 51 x 23 x 32 cm, 1,1 kg). Velicina = model torbe (Classic / Roller).
 *
 * VAZNO: id #custom-size-chart-modal i klasa .show su ugovor koji ocekuje vticnik
 * (orto-product.php). Modal je JEDAN prekrivni sloj, bez zasebnog backdropa.
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
?>
<div id="custom-size-chart-modal" class="kwsc" role="dialog" aria-modal="true" aria-labelledby="kwsc-title">
  <div class="kwsc-box">
  <div class="kwsc-bar">
    <h2 id="kwsc-title">Koji model je za mene?</h2>
    <span id="close-size-chart-x" role="button" tabindex="0" aria-label="Zatvori">&times;</span>
  </div>

  <div class="kwsc-body">
    <img class="kwsc-img" src="<?php echo esc_url( get_template_directory_uri() . '/img/travelbag/ntb-g02-modeli-hr.webp' ); ?>" alt="NORIKS TravelBag – model Classic s ravnim dnom i model Roller s kotačićima" loading="lazy">
    <p class="kwsc-lead"><strong>Obje torbe iste su veličine: 51 × 23 × 32 cm</strong> (dimenzije ručne prtljage), težina 1,1 kg. Razlikuju se samo po dnu: <strong>Classic</strong> ima ravno dno, a <strong>Roller</strong> dno s utorom i odvojivu ručku s kotačićima.</p>

    <div class="kwsc-scroll">
      <table class="kwsc-table">
        <thead>
          <tr><th scope="col">Model</th><th scope="col">Dimenzije</th><th scope="col">Nošenje</th><th scope="col">Za koga</th></tr>
        </thead>
        <tbody>
          <?php foreach ( noriks_travelbag_sizes() as $r ) : ?>
          <tr><th scope="row"><?php echo esc_html( $r[0] ); ?></th>
              <td class="kwsc-nw"><?php echo esc_html( $r[1] ); ?></td>
              <td><?php echo esc_html( $r[2] ); ?></td>
              <td><?php echo esc_html( $r[3] ); ?></td></tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>

    <div class="kwsc-how">
      <h3>Classic</h3>
      <ol>
        <li>Savršena za kratka putovanja i putnike u pokretu.</li>
        <li>Lagana i elegantna – lako se nosi.</li>
        <li>Za one koji prtljagu radije nose u ruci ili preko ramena.</li>
        <li>Bez muke stane u pretinac za prtljagu iznad sjedala.</li>
      </ol>
      <h3 style="margin-top:14px;">Roller</h3>
      <ol>
        <li>Odvojiva ručka i kotačići skidaju se u nekoliko sekundi – torba na kotačićima kad vam treba, putna torba kad ne treba.</li>
        <li>Spaja prenosivost s praktičnošću prtljage na kotačićima.</li>
        <li>Za one koji žele lako upravljanje bez odricanja od prostora.</li>
        <li>Bez napora kroz zračne luke, kolodvore i prometne ulice.</li>
      </ol>
    </div>

    <p class="kwsc-note">Pravila za ručnu prtljagu razlikuju se od zrakoplovne kompanije do kompanije – prije leta provjerite dopuštene dimenzije svoje kompanije. Ako vam model ne odgovara, imate pravo na povrat ili zamjenu u roku od 30 dana.</p>
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
