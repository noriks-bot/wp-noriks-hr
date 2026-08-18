<?php
/**
 * product-bottom: NORIKS Cloud — ortopedski jastuk za koljena (orto-cloud).
 *
 * Redoslijed prati referentnu stranicu (Cellsius), tekst na HR, mediji su NORIKS
 * kreative iz img/cloud/. Tamna shema jer su i kreative tamne.
 *   1. Vratite jutra za koja ste mislili da su izgubljena   11_jutra
 *   2. Bez Noriksa / S Noriksom                              01
 *   3. Poravnanje koje se vidi (prije/poslije)               02
 *   4. Osmisljeno za ono sto vas sprjecava da spavate        06
 *   5. Ostaje na mjestu. Cijelu noc.                         12
 *   6. Stvoreno da dise                                      09
 *   7. Nisu svi jastuci za koljena isti                      05
 *   8. Izradeno prema strogim standardima                    04
 *   9. Preporucuju ga strucnjaci                             hf_
 *  10. 60 noci isprobavanja                                  07
 * Recenzije i FAQ renderira zajednicki reviews.php (ne ovdje).
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
$cd      = get_template_directory_uri() . '/img/cloud/';
$cd_path = get_template_directory() . '/img/cloud/';

$cd_img = function( $file, $alt ) use ( $cd, $cd_path ) {
  if ( file_exists( $cd_path . $file ) ) {
    return '<img src="'.esc_url($cd.$file).'" alt="'.esc_attr($alt).'" loading="lazy">';
  }
  return '<div class="ncd-ph" role="img" aria-label="'.esc_attr($alt).'"><span>'.esc_html($alt).'</span></div>';
};
?>

<!-- ============ 1) Vratite jutra ============ -->
<section class="ncd-sec ncd-dark">
  <div class="ncd-wrap ncd-row2">
    <div class="ncd-copy">
      <p class="ncd-eyebrow">Spavanje na boku</p>
      <h2 class="ncd-h2">Vratite jutra za koja ste mislili da su izgubljena</h2>
      <p>Znate taj osjećaj: probudite se ukočeni, cijelu noć tražite položaj koji ne boli ili se budite nekoliko puta bez pravog razloga.</p>
      <p>Problem niste vi. Kad spavate na boku bez oslonca između koljena, kukovi se uvijaju, donji dio leđa ostaje napet, a mišići cijelu noć rade da vas stabiliziraju.</p>
      <p class="ncd-strong">NORIKS Cloud drži noge razmaknute točno koliko treba — kralježnica ostaje poravnata, a tijelo se konačno opusti.</p>
    </div>
    <div class="ncd-media"><?php echo $cd_img('cld-jutra.webp','Jutro bez bolova u leđima'); ?></div>
  </div>
</section>

<!-- ============ 2) Bez Noriksa / S Noriksom ============ -->
<section class="ncd-sec">
  <div class="ncd-wrap ncd-row2">
    <div class="ncd-media"><?php echo $cd_img('cld-bez-s-noriksom.webp','Spavanje bez jastuka i s NORIKS Cloud jastukom'); ?></div>
    <div class="ncd-copy">
      <h2 class="ncd-h2">Razlika koja se vidi već prvu noć</h2>
      <p><strong>Bez jastuka:</strong> gornja noga pada preko donje, zdjelica se uvija, a pritisak ide u donji dio leđa i u koljena.</p>
      <p><strong>S NORIKS Cloudom:</strong> noge ostaju u liniji s kukovima, težina se raspoređuje, a pritisne točke nestanu.</p>
      <ul class="ncd-check">
        <li>Kukovi i koljena u prirodnoj liniji</li>
        <li>Manje pritiska na donji dio leđa</li>
        <li>Manje okretanja tijekom noći</li>
      </ul>
    </div>
  </div>
</section>

<!-- ============ 3) Poravnanje ============ -->
<section class="ncd-sec ncd-dark">
  <div class="ncd-wrap ncd-row2">
    <div class="ncd-copy">
      <h2 class="ncd-h2">Poravnanje koje osjetite ujutro</h2>
      <p>Kad je razmak nogu pravilan, kralježnica prestaje biti iskrivljena, zdjelica se poravna, a koljena se više ne stišću jedno o drugo.</p>
      <ul class="ncd-check">
        <li>Poravnata kralježnica umjesto iskrivljene</li>
        <li>Poravnata zdjelica bez uvijanja</li>
        <li>Koljena razdvojena, bez pritiska</li>
      </ul>
    </div>
    <div class="ncd-media"><?php echo $cd_img('cld-prije-poslije.webp','Prije i poslije — poravnanje kralježnice'); ?></div>
  </div>
</section>

<!-- ============ 4) Za koga je ============ -->
<section class="ncd-sec">
  <div class="ncd-wrap ncd-center">
    <h2 class="ncd-h2">Osmišljeno za ono što vas sprječava da spavate</h2>
    <p class="ncd-sub">Šest situacija u kojima jastuk za koljena napravi najveću razliku.</p>
  </div>
  <div class="ncd-wrap"><div class="ncd-media"><?php echo $cd_img('cld-za-koga.webp','Za koga je NORIKS Cloud jastuk'); ?></div></div>
</section>

<!-- ============ 5) Ostaje na mjestu ============ -->
<section class="ncd-sec ncd-dark">
  <div class="ncd-wrap ncd-row2">
    <div class="ncd-media"><?php echo $cd_img('cld-traka.webp','Podesiva traka drži jastuk na mjestu'); ?></div>
    <div class="ncd-copy">
      <h2 class="ncd-h2">Ostaje na mjestu. Cijelu noć.</h2>
      <p>Obični jastuk ispadne čim se okrenete. NORIKS Cloud ima <strong>podesivu traku s drukerima</strong> koja ide oko noge.</p>
      <ul class="ncd-steps">
        <li>Otkopčajte druker i stavite jastuk između koljena.</li>
        <li>Traku zategnite u jedan od dva položaja, prema svojoj nozi.</li>
        <li>Jastuk ostaje na mjestu i kad se okrenete na drugu stranu.</li>
      </ul>
      <p class="ncd-note">Traka se skida — jastuk možete koristiti i pod gležnjeve ili pod vrat.</p>
    </div>
  </div>
</section>

<!-- ============ 6) Stvoreno da dise ============ -->
<section class="ncd-sec">
  <div class="ncd-wrap ncd-row2">
    <div class="ncd-copy">
      <h2 class="ncd-h2">Stvoreno da diše</h2>
      <p>Memorijska pjena medicinske kvalitete s ugrađenim perforacijama — dovoljno čvrsta da drži razmak, dovoljno mekana da se prilagodi tijelu.</p>
      <ul class="ncd-check">
        <li><strong>Periva navlaka</strong> — prozračna tkanina, nježna prema koži</li>
        <li><strong>Perforacije</strong> održavaju pjenu svježom cijelu noć</li>
        <li><strong>Zadržava oblik</strong> godinama, ne splošti se</li>
      </ul>
    </div>
    <div class="ncd-media"><?php echo $cd_img('cld-pjena.webp','Prozračna memorijska pjena s perforacijama'); ?></div>
  </div>
</section>

<!-- ============ 7) Usporedba ============ -->
<section class="ncd-sec ncd-dark">
  <div class="ncd-wrap ncd-row2">
    <div class="ncd-media"><?php echo $cd_img('cld-usporedba.webp','NORIKS Cloud u usporedbi s običnim jastucima'); ?></div>
    <div class="ncd-copy">
      <h2 class="ncd-h2">Nisu svi jastuci za koljena isti</h2>
      <ul class="ncd-vs">
        <li class="is-no"><strong>Bez trake</strong><span>ispadne čim se okrenete</span></li>
        <li class="is-no"><strong>Središnja rupa</strong><span>ometa cirkulaciju</span></li>
        <li class="is-no"><strong>Splošti se</strong><span>za nekoliko tjedana</span></li>
        <li class="is-yes"><strong>Podesiva traka</strong><span>ostaje točno gdje treba</span></li>
        <li class="is-yes"><strong>Pun, ergonomski oblik</strong><span>bez rupa i praznina</span></li>
        <li class="is-yes"><strong>Pjena medicinske kvalitete</strong><span>zadržava oblik godinama</span></li>
      </ul>
    </div>
  </div>
</section>

<!-- ============ 8) Standardi ============ -->
<section class="ncd-sec">
  <div class="ncd-wrap ncd-row2">
    <div class="ncd-copy">
      <h2 class="ncd-h2">Izrađeno prema strogim standardima</h2>
      <p>Materijali su testirani na štetne tvari, a pjena je certificirana. Dizajn je rađen prema švicarskim standardima kvalitete.</p>
      <ul class="ncd-check">
        <li><strong>OEKO-TEX® STANDARD 100</strong> — bez štetnih tvari</li>
        <li><strong>CertiPUR-EU</strong> — certificirana memorijska pjena</li>
        <li><strong>Dizajnirano u Švicarskoj</strong>, proizvedeno po europskim standardima</li>
      </ul>
    </div>
    <div class="ncd-media"><?php echo $cd_img('cld-certifikati.webp','OEKO-TEX i CertiPUR-EU certifikati'); ?></div>
  </div>
</section>

<!-- ============ 9) Strucnjaci ============ -->
<section class="ncd-sec ncd-dark">
  <div class="ncd-wrap ncd-row2">
    <div class="ncd-media"><?php echo $cd_img('cld-strucnjaci.webp','Preporuka fizioterapeuta i recenzije kupaca'); ?></div>
    <div class="ncd-copy">
      <p class="ncd-eyebrow">Preporuka struke</p>
      <h2 class="ncd-h2">Preporučuju ga stručnjaci, obožavaju ga njihovi pacijenti</h2>
      <p>Fizioterapeuti ga preporučuju onima koji spavaju na boku, a kupci ga najčešće opisuju istim riječima: konačno spavaju kroz noć i ujutro ustaju bez ukočenosti.</p>
      <div class="ncd-stat"><strong>96 %</strong><span>zadovoljnih korisnika — manje bolova, bolji san, bolje držanje tijela</span></div>
    </div>
  </div>
</section>

<!-- ============ 10) 60 noci ============ -->
<section class="ncd-sec">
  <div class="ncd-wrap ncd-row2">
    <div class="ncd-copy">
      <p class="ncd-eyebrow">Bez rizika</p>
      <h2 class="ncd-h2">60 noći isprobavanja</h2>
      <p>Isprobajte ga sami. Ako NORIKS Cloud nije pravi za vas, vraćamo vam cijeli iznos — bez uvjeta i bez papirologije.</p>
      <a class="ncd-cta" href="#bundle-selector">Naruči NORIKS Cloud</a>
    </div>
    <div class="ncd-media"><?php echo $cd_img('cld-60-noci.webp','60 noći isprobavanja'); ?></div>
  </div>
</section>

<style>
  .ncd-sec { padding: 46px 0; background: #fff; }
  .ncd-dark { background: #0e1a33; }
  .ncd-wrap { max-width: 1180px; margin: 0 auto; padding: 0 18px; }
  .ncd-row2 { display: grid; grid-template-columns: 1fr 1fr; gap: 48px; align-items: center; }
  .ncd-h2 { font-size: clamp(24px,3.1vw,34px); font-weight: 800; color: #0e1a33; line-height: 1.2; margin: 0 0 16px; }
  .ncd-eyebrow { font-size: 12.5px; font-weight: 800; letter-spacing: .12em; text-transform: uppercase; color: #6a86b8; margin: 0 0 8px; }
  .ncd-center { text-align: center; }
  .ncd-copy p, .ncd-sub { font-size: 16px; line-height: 1.7; color: #3a3a3a; margin: 0 0 14px; }
  .ncd-sub { max-width: 820px; margin: 0 auto 24px; }
  .ncd-strong { font-weight: 700; color: #0e1a33 !important; }
  .ncd-note { font-size: 14px !important; color: #6b6b6b !important; }
  .ncd-media img { width: 100%; height: auto; display: block; border-radius: 16px; }

  /* tamne sekcije */
  .ncd-dark .ncd-h2, .ncd-dark .ncd-strong { color: #fff !important; }
  .ncd-dark .ncd-copy p, .ncd-dark .ncd-sub { color: #c6d2e6; }
  .ncd-dark .ncd-note { color: #8fa2c2 !important; }
  .ncd-dark .ncd-check li { color: #eaf0fb; }
  .ncd-dark .ncd-steps li { color: #c6d2e6; }
  .ncd-dark .ncd-vs strong { color: #fff; }
  .ncd-dark .ncd-vs span { color: #a9bad6; }
  .ncd-dark .ncd-vs li { border-bottom-color: #23324f; }

  .ncd-ph { width: 100%; aspect-ratio: 1/1; background: #e8edf6; border: 1px dashed #c9d4e6; border-radius: 16px;
            display: flex; align-items: center; justify-content: center; padding: 18px; box-sizing: border-box; }
  .ncd-ph span { font-size: 13px; line-height: 1.45; color: #8ba0c0; text-align: center; }

  .ncd-check { list-style: none; margin: 0 0 16px; padding: 0; }
  .ncd-check li { position: relative; padding: 0 0 11px 30px; font-size: 15.5px; color: #0e1a33; line-height: 1.5; }
  .ncd-check li:before { content: "✓"; position: absolute; left: 0; top: 0; width: 20px; height: 20px; background: #2f6fd0; color: #fff; border-radius: 50%; font-size: 12px; text-align: center; line-height: 20px; }

  .ncd-steps { list-style: none; counter-reset: ncd; margin: 0 0 16px; padding: 0; }
  .ncd-steps li { counter-increment: ncd; position: relative; padding: 0 0 14px 40px; font-size: 15.5px; line-height: 1.55; color: #3a3a3a; }
  .ncd-steps li:before { content: counter(ncd); position: absolute; left: 0; top: 0; width: 26px; height: 26px; background: #2f6fd0; color: #fff; border-radius: 50%; font-size: 13px; font-weight: 700; text-align: center; line-height: 26px; }

  .ncd-vs { list-style: none; margin: 0; padding: 0; }
  .ncd-vs li { position: relative; padding: 11px 0 11px 34px; border-bottom: 1px solid #e2e8f2; }
  .ncd-vs li:last-child { border-bottom: 0; }
  .ncd-vs li:before { position: absolute; left: 0; top: 12px; width: 22px; height: 22px; border-radius: 50%; font-size: 12px; text-align: center; line-height: 22px; color: #fff; }
  .ncd-vs li.is-yes:before { content: "✓"; background: #2f6fd0; }
  .ncd-vs li.is-no:before  { content: "✕"; background: #93a3bd; }
  .ncd-vs strong { display: block; font-size: 15.5px; color: #0e1a33; }
  .ncd-vs span { display: block; font-size: 14px; color: #5a5a5a; }

  .ncd-stat { margin-top: 8px; }
  .ncd-stat strong { display: block; font-size: clamp(30px,4vw,44px); font-weight: 800; color: #fff; line-height: 1.05; }
  .ncd-stat span { display: block; font-size: 14.5px; line-height: 1.55; color: #a9bad6; margin-top: 4px; }

  .ncd-cta { display: inline-block; margin-top: 8px; background: #0e1a33; color: #fff; font-weight: 700; font-size: 16px; padding: 14px 30px; border-radius: 10px; text-decoration: none; }
  .ncd-cta:hover { background: #2f6fd0; color: #fff; }
  .ncd-dark .ncd-cta { background: #fff; color: #0e1a33; }
  .ncd-dark .ncd-cta:hover { background: #2f6fd0; color: #fff; }

  @media (max-width: 820px) {
    .ncd-sec { padding: 30px 0; }
    .ncd-row2 { grid-template-columns: 1fr; gap: 20px; }
    .ncd-row2 .ncd-media { order: -1; }
    .ncd-h2 { font-size: 1.75rem; }
    .ncd-wrap { padding: 0 9px; }
  }

  /* jastuk nema velicina */
  .noriks-global-sizechart, .gck-size-link, .gck-size-link-wrap,
  #open-size-chart, #open-size-chartCustom { display: none !important; }

  .woocommerce-product-details__short-description ul { list-style: none; margin: 8px 0 14px; padding-left: 0; }
  .woocommerce-product-details__short-description .ncd-tick { display: inline-block; width: 17px; text-indent: 0; color: #3f8b57; font-weight: 800; }
  .woocommerce-product-details__short-description ul li { list-style: none; padding-left: 17px; text-indent: -17px; margin-left: 0; line-height: 1.55; margin-bottom: 7px; }
  .woocommerce-product-details__short-description p:has(+ ul) { margin-top: 20px; margin-bottom: 4px; }
</style>

<script>
(function(){
  document.querySelectorAll('a.ncd-cta[href="#bundle-selector"]').forEach(function(a){
    a.addEventListener('click', function(e){
      e.preventDefault();
      var t = document.getElementById('bundle-selector') || document.querySelector('.single_add_to_cart_button');
      if (t) t.scrollIntoView({ behavior: 'smooth', block: 'center' });
    });
  });
})();
</script>
