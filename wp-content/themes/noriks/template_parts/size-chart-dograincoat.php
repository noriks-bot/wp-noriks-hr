<?php
/**
 * Tablica velicina za NORIKS DogRaincoat (orto-dograincoat) — prozracna kabanica za pse.
 * Izvor tabele: noriks_dograincoat_sizes() + noriks_dograincoat_breeds() v functions/product-type.php
 * (ista kot v akordeonu, why sekciji in FAQ).
 * 1:1 z »Dog Apparel Size Guide« originala (sparkpaws.com): »Size by Measurements« (opseg prsa + duljina leda, CM),
 * »Size by Breed« (kg) in »How to Measure Your Dog«; slika »Find your dog's size« prevedena v HR
 * (img/dograincoat/ndr-velicine-hr.webp). Savjet originala: ako je pas izmedu dvije velicine, odaberite vecu.
 * Pogoji po NORIKS (30 dana za povrat ili zamjenu), ne po originalu.
 *
 * VAZNO: id #custom-size-chart-modal i klasa .show su ugovor koji ocekuje vticnik
 * (orto-product.php). Modal je JEDAN prekrivni sloj, bez zasebnog backdropa.
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
$ndr_sz_img = get_template_directory_uri() . '/img/dograincoat/ndr-velicine-hr.webp';
?>
<div id="custom-size-chart-modal" class="kwsc" role="dialog" aria-modal="true" aria-labelledby="kwsc-title">
  <div class="kwsc-box">
  <div class="kwsc-bar">
    <h2 id="kwsc-title">Tablica veličina</h2>
    <span id="close-size-chart-x" role="button" tabindex="0" aria-label="Zatvori">&times;</span>
  </div>

  <div class="kwsc-body">
    <img class="kwsc-img" src="<?php echo esc_url( $ndr_sz_img ); ?>" alt="Tablica veličina NORIKS kabanice za pse: težina i opseg prsa za veličine S – 4XL" loading="lazy">

    <h3 class="kwsc-h3">Veličina prema mjerama</h3>
    <p class="kwsc-lead">Izmjerite <strong>opseg prsa</strong> i <strong>duljinu leđa</strong> svog psa i usporedite ih s tablicom. <strong>Ako je pas između dviju veličina, odaberite veću.</strong></p>
    <div class="kwsc-scroll">
      <table class="kwsc-table">
        <thead>
          <tr><th scope="col">Veličina</th><th scope="col">Opseg prsa</th><th scope="col">Duljina leđa</th><th scope="col">Težina psa</th></tr>
        </thead>
        <tbody>
          <?php foreach ( noriks_dograincoat_sizes() as $r ) : ?>
          <tr><th scope="row"><?php echo esc_html( $r[0] ); ?></th>
              <td class="kwsc-nw"><?php echo esc_html( $r[1] ); ?></td>
              <td class="kwsc-nw"><?php echo esc_html( $r[2] ); ?></td>
              <td class="kwsc-nw"><?php echo esc_html( $r[3] ); ?></td></tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>

    <div class="kwsc-how">
      <h3>Kako izmjeriti psa</h3>
      <ol>
        <li>Pripremite poslastice i uzmite <strong>krojački metar</strong> — ako ga nemate, poslužite se vezicom ili USB kabelom pa ih poslije izmjerite.</li>
        <li><strong>Opseg prsa:</strong> izmjerite najširi dio prsa, odmah iza prednjih nogu.</li>
        <li><strong>Duljina leđa:</strong> mjerite od početka vrata do mjesta gdje počinje rep.</li>
        <li>Ako je pas između dviju veličina, <strong>odaberite veću</strong>.</li>
      </ol>
    </div>

    <h3 class="kwsc-h3">Veličina prema pasmini</h3>
    <p class="kwsc-lead">Pronađite pasminu koja je najsličnija vašem psu. Okvirne veličine prema težini psa:</p>
    <div class="kwsc-scroll kwsc-breeds">
      <table class="kwsc-table">
        <thead>
          <tr><th scope="col">Pasmina</th><th scope="col">Veličina (težina psa)</th></tr>
        </thead>
        <tbody>
          <?php foreach ( noriks_dograincoat_breeds() as $pasmina => $vel ) :
            $parts = array();
            foreach ( $vel as $v ) { $parts[] = '<strong>' . esc_html( $v[0] ) . '</strong> (' . esc_html( $v[1] ) . ' kg)'; } ?>
          <tr><th scope="row"><?php echo esc_html( $pasmina ); ?></th>
              <td><?php echo implode( ' · ', $parts ); // phpcs:ignore -- escaped above ?></td></tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>

    <p class="kwsc-note">Jamstvo savršenog pristajanja: ako veličina ne odgovara, imate pravo na povrat ili zamjenu u roku od 30 dana.</p>
  </div>
  </div>
</div>

<style>
#custom-size-chart-modal.kwsc {
  display: none; position: fixed; inset: 0; z-index: 9999999;
  background: rgba(40,30,10,.7); align-items: center; justify-content: center; padding: 20px;
  font-family: 'Poppins', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Arial, sans-serif; color: #2b2414;
}
#custom-size-chart-modal.kwsc.show { display: flex; }
#custom-size-chart-modal.kwsc * { box-sizing: border-box; }
.kwsc-box { background: #fff; border-radius: 14px; width: 100%; max-width: 720px;
  max-height: min(800px, 88vh); display: flex; flex-direction: column; overflow: hidden;
  box-shadow: 0 24px 60px rgba(0,0,0,.32); }
.kwsc-bar { display: flex; align-items: center; justify-content: space-between; padding: 15px 22px; border-bottom: 1px solid #ecd9a6; flex: 0 0 auto; }
.kwsc-bar h2 { margin: 0; font-size: 19px; font-weight: 700; color: #2b2414; }
#close-size-chart-x { font-size: 27px; line-height: 1; font-weight: 700; cursor: pointer; color: #7a6b4e; padding: 0 4px; }
#close-size-chart-x:hover { color: #2b2414; }
.kwsc-body { padding: 20px 22px 26px; overflow-y: auto; flex: 1 1 auto; }
.kwsc-img { display: block; width: 100%; max-width: 460px; height: auto; margin: 0 auto 18px; border-radius: 8px; }
.kwsc-h3 { font-size: 16px; font-weight: 700; margin: 6px 0 8px; color: #2b2414; }
.kwsc-lead { font-size: 14.5px; line-height: 1.6; color: #54493a; margin: 0 0 14px; }
.kwsc-scroll { overflow-x: auto; -webkit-overflow-scrolling: touch; margin-bottom: 20px; }
.kwsc-breeds { max-height: 340px; overflow-y: auto; border: 1px solid #ecd9a6; border-radius: 8px; }
.kwsc-table { width: 100%; border-collapse: collapse; font-size: 14px; }
.kwsc-table th[scope="col"] { background: #fbf0d2 !important; color: #2b2414 !important; font-weight: 700; text-align: left; padding: 12px 12px; white-space: nowrap; border-bottom: 2px solid #a87508; position: sticky; top: 0; }
.kwsc-table th[scope="col"]:first-child { border-top-left-radius: 8px; }
.kwsc-table th[scope="col"]:last-child { border-top-right-radius: 8px; }
.kwsc-table th[scope="row"] { text-align: left; font-weight: 700; padding: 10px 12px; vertical-align: top; }
.kwsc-table td { padding: 10px 12px; color: #54493a; vertical-align: top; line-height: 1.5; }
.kwsc-table td.kwsc-nw { white-space: nowrap; font-weight: 600; color: #2b2414; }
.kwsc-table td strong { color: #2b2414; }
.kwsc-table tbody tr { border-bottom: 1px solid #f1e3bd; }
.kwsc-table tbody tr:nth-child(odd) { background: #fffaf0; }
.kwsc-how { margin-bottom: 18px; }
.kwsc-how h3 { font-size: 16px; font-weight: 700; margin: 0 0 10px; }
.kwsc-how ol { margin: 0; padding-left: 20px; }
.kwsc-how li { font-size: 14.5px; line-height: 1.6; color: #54493a; margin-bottom: 7px; }
.kwsc-note { font-size: 13px; color: #7a6b4e; font-style: italic; margin: 12px 0 0; }
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
    if (e.target.closest("#open-size-chartCustom, #open-size-chart, #open-size-chart-secondary, .js-open-size-chart, .gck-size-link, .ndr-open-size")) { open(e); return; }
    if (e.target.closest("#close-size-chart-x")) { close(); }
  });
  modal.addEventListener("click", function (e) { if (e.target === modal) close(); });
  document.addEventListener("keydown", function (e) { if (e.key === "Escape") close(); });

});
</script>
