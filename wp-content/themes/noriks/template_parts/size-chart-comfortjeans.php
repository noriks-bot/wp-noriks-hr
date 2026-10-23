<?php
/**
 * Tablica velicina za NORIKS ComfortJeans (orto-comfortjeans) — opuštene traperice širokih nogavica.
 * Izvor tabela: noriks_comfortjeans_sizes() + noriks_comfortjeans_lengths() v functions/product-type.php (iste kot v harmoniki).
 * 1:1 s »Size guide« originala (ninepine): »Which length (inseam) should I choose?«, »Size suggestions« (mjere tijela,
 * EU velicine) in »Measurements of the pants« (A duljina, B struk, C sirina nogavice; skica brez znamke).
 * US/UK/AU velicine izpuscene (za HR kupce nepotrebne), modeli originala izpusceni (prav tako).
 *
 * VAZNO: id #custom-size-chart-modal i klasa .show su ugovor koji ocekuje vticnik
 * (orto-product.php). Modal je JEDAN prekrivni sloj, bez zasebnog backdropa.
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
$ncj_sc_img = get_template_directory_uri() . '/img/comfortjeans/ncj-mjere.webp';
?>
<div id="custom-size-chart-modal" class="kwsc" role="dialog" aria-modal="true" aria-labelledby="kwsc-title">
  <div class="kwsc-box">
  <div class="kwsc-bar">
    <h2 id="kwsc-title">Tablica veličina</h2>
    <span id="close-size-chart-x" role="button" tabindex="0" aria-label="Zatvori">&times;</span>
  </div>

  <div class="kwsc-body">
    <p class="kwsc-lead">Opušten kroj koji <strong>prianja u struku</strong>, a od donjeg dijela bedara pada <strong>poluširoko i ravno</strong>. Možete ih nositi duge (ispod gležnja, iznad poda u cipelama) ili skraćene (do gležnja).</p>

    <h3 class="kwsc-h3">Koju duljinu odabrati?</h3>
    <p class="kwsc-lead">Hlače su krojene tako da uz <strong>ravne cipele ili tenisice</strong> završavaju tik iznad poda.</p>
    <div class="kwsc-scroll">
      <table class="kwsc-table">
        <thead>
          <tr><th scope="col">Duljina</th><th scope="col">Preporučena visina</th><th scope="col">Unutarnji šav bosonogo</th></tr>
        </thead>
        <tbody>
          <?php foreach ( noriks_comfortjeans_lengths() as $r ) : ?>
          <tr><th scope="row"><?php echo esc_html( $r[0] ); ?></th>
              <td class="kwsc-nw"><?php echo esc_html( $r[1] ); ?></td>
              <td class="kwsc-nw"><?php echo esc_html( $r[2] ); ?></td></tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
    <p class="kwsc-note" style="margin:-8px 0 18px;">*Ako uglavnom nosite potpetice ili čizme, uzmite jednu duljinu više. Visina je samo jedan od pokazatelja duljine nogu — najtočnije je izmjeriti unutarnju stranu noge od međunožja do željenog kraja hlača.</p>

    <h3 class="kwsc-h3">Veličina prema mjerama tijela</h3>
    <div class="kwsc-scroll">
      <table class="kwsc-table">
        <thead>
          <tr><th scope="col">Veličina</th><th scope="col">EU</th><th scope="col">Opseg struka</th><th scope="col">Opseg bokova</th></tr>
        </thead>
        <tbody>
          <?php foreach ( noriks_comfortjeans_sizes() as $r ) : ?>
          <tr><th scope="row"><?php echo esc_html( $r[0] ); ?></th>
              <td class="kwsc-nw"><?php echo esc_html( $r[1] ); ?></td>
              <td class="kwsc-nw"><?php echo esc_html( $r[2] ); ?></td>
              <td class="kwsc-nw"><?php echo esc_html( $r[3] ); ?></td></tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
    <p class="kwsc-note" style="margin:-8px 0 18px;">*Struk: izmjerite opseg najužeg dijela struka. Bokovi: izmjerite opseg najširega dijela bokova.</p>

    <h3 class="kwsc-h3">Mjere hlača</h3>
    <div class="kwsc-pants">
      <img class="kwsc-skica" src="<?php echo esc_url( $ncj_sc_img ); ?>" alt="Skica mjera traperica: A duljina unutarnjeg šava, B širina struka, C širina nogavice" loading="lazy">
      <div class="kwsc-scroll">
        <table class="kwsc-table">
          <thead>
            <tr><th scope="col">Veličina</th><th scope="col">B – struk</th><th scope="col">Bokovi</th><th scope="col">C – nogavica</th></tr>
          </thead>
          <tbody>
            <?php foreach ( noriks_comfortjeans_sizes() as $r ) : ?>
            <tr><th scope="row"><?php echo esc_html( $r[0] ); ?></th>
                <td class="kwsc-nw"><?php echo esc_html( $r[4] ); ?></td>
                <td class="kwsc-nw"><?php echo esc_html( $r[5] ); ?></td>
                <td class="kwsc-nw"><?php echo esc_html( $r[6] ); ?></td></tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
    <p class="kwsc-note" style="margin:-8px 0 18px;">*Mjere hlača su nerastegnute (puna širina) — struk se rasteže. A – duljina unutarnjeg šava jednaka je odabranoj duljini (66 / 71 / 76 / 81 / 86 / 91 cm, ± 2 cm) za sve veličine.</p>

    <p class="kwsc-note">Niste sigurni koju veličinu odabrati? Javite nam se i pomoći ćemo vam. Ako vam veličina ne odgovara, imate pravo na povrat ili zamjenu u roku od 30 dana.</p>
  </div>
  </div>
</div>

<style>
#custom-size-chart-modal.kwsc {
  display: none; position: fixed; inset: 0; z-index: 9999999;
  background: rgba(16,28,44,.7); align-items: center; justify-content: center; padding: 20px;
  font-family: 'Poppins', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Arial, sans-serif; color: #1c2430;
}
#custom-size-chart-modal.kwsc.show { display: flex; }
#custom-size-chart-modal.kwsc * { box-sizing: border-box; }
.kwsc-box { background: #fff; border-radius: 14px; width: 100%; max-width: 760px;
  max-height: min(820px, 88vh); display: flex; flex-direction: column; overflow: hidden;
  box-shadow: 0 24px 60px rgba(0,0,0,.32); }
.kwsc-bar { display: flex; align-items: center; justify-content: space-between; padding: 15px 22px; border-bottom: 1px solid #c9d8ea; flex: 0 0 auto; }
.kwsc-bar h2 { margin: 0; font-size: 19px; font-weight: 700; color: #1c2430; }
#close-size-chart-x { font-size: 27px; line-height: 1; font-weight: 700; cursor: pointer; color: #5a6676; padding: 0 4px; }
#close-size-chart-x:hover { color: #1c2430; }
.kwsc-body { padding: 20px 22px 26px; overflow-y: auto; flex: 1 1 auto; }
.kwsc-h3 { font-size: 16px; font-weight: 700; margin: 4px 0 10px; color: #1f568e; text-transform: none; letter-spacing: 0; }
.kwsc-lead { font-size: 14.5px; line-height: 1.6; color: #3c4654; margin: 0 0 16px; }
.kwsc-scroll { overflow-x: auto; -webkit-overflow-scrolling: touch; margin-bottom: 20px; }
.kwsc-table { width: 100%; border-collapse: collapse; font-size: 14px; }
.kwsc-table th[scope="col"] { background: #ebf2f9 !important; color: #1c2430 !important; font-weight: 700; text-align: left; padding: 12px 12px; white-space: nowrap; border-bottom: 2px solid #1f568e; }
.kwsc-table th[scope="col"]:first-child { border-top-left-radius: 8px; }
.kwsc-table th[scope="col"]:last-child { border-top-right-radius: 8px; }
.kwsc-table th[scope="row"] { text-align: left; font-weight: 700; padding: 11px 12px; white-space: nowrap; vertical-align: top; }
.kwsc-table td { padding: 11px 12px; color: #3c4654; vertical-align: top; line-height: 1.5; }
.kwsc-table td.kwsc-nw { white-space: nowrap; font-weight: 600; color: #1c2430; }
.kwsc-table tbody tr { border-bottom: 1px solid #d6e2ef; }
.kwsc-table tbody tr:nth-child(odd) { background: #f5f9fd; }
.kwsc-pants { display: grid; grid-template-columns: 120px 1fr; gap: 18px; align-items: start; }
.kwsc-skica { display: block; width: 100%; height: auto; }
.kwsc-note { font-size: 13px; color: #5a6676; font-style: italic; margin: 12px 0 0; }
@media (max-width: 560px) {
  #custom-size-chart-modal.kwsc { padding: 12px; }
  .kwsc-box { max-height: 88vh; }
  .kwsc-body { padding: 16px 16px 22px; }
  .kwsc-table { font-size: 13px; }
  .kwsc-table th[scope="col"], .kwsc-table th[scope="row"], .kwsc-table td { padding: 9px 8px; }
  .kwsc-pants { grid-template-columns: 1fr; }
  .kwsc-skica { max-width: 110px; margin: 0 auto; }
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
