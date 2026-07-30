<?php
/**
 * product-bottom: NORIKS ControlPro — trener dna zdjelice (orto-controlpro).
 * Sekcije i redoslijed preslikani s referentne stranice, tekst na HR,
 * slike su NORIKS kreative iz img/controlpro/. Slika/tekst se izmjenjuju.
 *   1. Vratite kontrolu mjehura                slika lijevo   07-kontrola
 *   2. Osjetiti stisak nije isto kao ojačati   slika desno    08-vjezba-1 (gif)
 *   3. 3 serije od 10 stiskova dnevno          slika lijevo   09-vjezba-2 (gif)
 *   4. Zašto djeluje kad drugo nije            usporedba      01-usporedba
 *   5. Više od 112.000 muškaraca               slika desno    05-muskarci
 *   6. Što muškarci najčešće javljaju          slika lijevo   03-sazetak
 *   7. Muškarci poput vas već vide rezultate   3 kartice      02-recenzije
 *   8. Jamstvo povrata novca u 30 dana         slika desno    06-jamstvo
 *   9. Napomena (disclaimer)
 * FAQ i recenzije renderira zajednički reviews.php (ne ovdje).
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
$cp      = get_template_directory_uri() . '/img/controlpro/';
$cp_path = get_template_directory() . '/img/controlpro/';

/* Ako slika nije na serveru, prikaže se neutralni sivi placeholder. */
$cp_img = function( $file, $alt ) use ( $cp, $cp_path ) {
  if ( file_exists( $cp_path . $file ) ) {
    return '<img src="'.esc_url($cp.$file).'" alt="'.esc_attr($alt).'" loading="lazy">';
  }
  return '<div class="cpr-ph" role="img" aria-label="'.esc_attr($alt).'"><span>'.esc_html($alt).'</span></div>';
};
?>

<!-- ============ 1) Vratite kontrolu mjehura ============ -->
<section class="cpr-sec">
  <div class="cpr-wrap cpr-row2">
    <div class="cpr-media"><?php echo $cp_img('07-kontrola.jpg','NORIKS ControlPro trener dna zdjelice'); ?></div>
    <div class="cpr-copy">
      <h2 class="cpr-h2">Vratite kontrolu mjehura kad Kegelove vježbe nisu pomogle</h2>
      <p>Curenje pri ustajanju. Pri kašljanju, kihanju ili smijehu. Nakon operacije prostate. Uložak koji morate provjeravati prije svakog izlaska iz kuće.</p>
      <p>Ako ste Kegelove vježbe radili tjednima i ništa se nije promijenilo, problem najvjerojatnije nije u vašoj volji — nego u tome što mišić nema protiv čega raditi.</p>
      <p class="cpr-strong">NORIKS ControlPro daje dnu zdjelice pravi otpor — isti princip po kojem jača svaki drugi mišić u tijelu.</p>
    </div>
  </div>
</section>

<!-- ============ 2) Osjetiti stisak nije isto kao ojačati ============ -->
<section class="cpr-sec cpr-alt">
  <div class="cpr-wrap cpr-row2">
    <div class="cpr-copy">
      <h2 class="cpr-h2">Zašto osjetiti stisak i stvarno ojačati dno zdjelice nije isto</h2>
      <p>Liječnik vam je rekao da radite Kegelove vježbe. Stiskali ste i osjetili napetost — pa ste nastavili. Tjednima, možda mjesecima. A curenje nije prestalo.</p>
      <p>Razlog je jednostavan: <strong>osjetiti stisak i izgraditi snagu nisu ista stvar.</strong> Bez otpora mišić samo aktivirate, ali ga ne trenirate. Stišćete u prazno, a nijedan mišić u tijelu tako nikada nije postao snažniji.</p>
      <p>ControlPro to mijenja. Daje dnu zdjelice nešto protiv čega može pritisnuti — stvaran fizički otpor koji opterećuje upravo one mišiće koji kontroliraju mjehur. Svaki stisak gradi funkcionalnu snagu, a ne samo napetost koju osjećate.</p>
    </div>
    <div class="cpr-media"><?php echo $cp_img('08-vjezba-1.webp','Prikaz vježbe s NORIKS ControlPro trenerom'); ?></div>
  </div>
</section>

<!-- ============ 3) 3 serije od 10 stiskova dnevno ============ -->
<section class="cpr-sec">
  <div class="cpr-wrap cpr-row2">
    <div class="cpr-media"><?php echo $cp_img('09-vjezba-2.webp','Vježba između koljena — 3 serije od 10 ponavljanja'); ?></div>
    <div class="cpr-copy">
      <h2 class="cpr-h2">3 serije od 10 stiskova dnevno. To je sve.</h2>
      <p>Sjednite na stolicu i postavite ControlPro između koljena. Stišćite protiv otpora — 3 serije od 10 ponavljanja dnevno.</p>
      <ul class="cpr-check">
        <li>Bez sondi i umetanja</li>
        <li>Bez žica, aplikacija i postavljanja</li>
        <li>Bez gela i baterija</li>
        <li>Ugrađeni brojač ponavljanja</li>
      </ul>
      <p>Izgleda kao sprava za vježbanje jer to i jest. Radite ga uz vijesti ili za radnim stolom — nitko ne mora znati.</p>
      <a class="cpr-cta" href="#bundle-selector">Vratite kontrolu danas →</a>
    </div>
  </div>
</section>

<!-- ============ 4) Zašto ovo djeluje kad ništa drugo nije ============ -->
<section class="cpr-sec cpr-alt">
  <div class="cpr-wrap">
    <h2 class="cpr-h2 cpr-center">Zašto ovo djeluje kad ništa drugo nije</h2>
    <p class="cpr-sub cpr-center">Vaše dno zdjelice nije pokvareno. Samo je nedovoljno trenirano.</p>
    <div class="cpr-full"><?php echo $cp_img('01-usporedba.jpg','Usporedba: ulošci, EMS uređaji, samo Kegelove vježbe i NORIKS ControlPro'); ?></div>
    <div class="cpr-cols">
      <div>
        <p><strong>Ulošci i zaštite</strong> ublažavaju simptom. Kupovat ćete ih svaki mjesec, zauvijek, a ništa ne postaje snažnije.</p>
        <p><strong>EMS uređaji (175–350 €)</strong> stežu mišić <em>umjesto vas</em> — kao da netko drugi radi vaše sklekove. Veza mozak–mišić se ne razvija, a mnogi zahtijevaju unutrašnje sonde.</p>
      </div>
      <div>
        <p><strong>Same Kegelove vježbe</strong> dobra su ideja, ali bez otpora i bez povratne informacije većina muškaraca trenira naslijepo i odustane nakon nekoliko tjedana.</p>
        <p><strong>NORIKS ControlPro</strong> plaćate jednom. Rad obavljate vi, protiv pravog otpora, uz progresivno povećanje — isti princip koji jača svaki drugi mišić u tijelu.</p>
      </div>
    </div>
  </div>
</section>

<!-- ============ 5) Više od 112.000 muškaraca ============ -->
<section class="cpr-sec">
  <div class="cpr-wrap cpr-row2">
    <div class="cpr-copy">
      <h2 class="cpr-h2">Koristilo ga je više od 112.000 muškaraca</h2>
      <p>Muškarci nakon operacije prostate, muškarci s curenjem pri naporu i oni koji su Kegelove vježbe godinama radili bez rezultata — ControlPro koriste jer je jednostavan i jer se napredak vidi na brojaču.</p>
      <ul class="cpr-check">
        <li>5 minuta dnevno, kod kuće, u vlastitom ritmu</li>
        <li>Progresivno povećanje otpora kako mišić jača</li>
        <li>Diskretna dostava u neutralnoj kutiji bez oznaka</li>
      </ul>
    </div>
    <div class="cpr-media"><?php echo $cp_img('05-muskarci.jpg','Više od 112.000 muškaraca koristi NORIKS ControlPro'); ?></div>
  </div>
</section>

<!-- ============ 6) Što muškarci najčešće javljaju ============ -->
<section class="cpr-sec cpr-alt">
  <div class="cpr-wrap cpr-row2">
    <div class="cpr-media"><?php echo $cp_img('03-sazetak.jpg','Što muškarci najčešće javljaju o NORIKS ControlPro'); ?></div>
    <div class="cpr-copy">
      <h2 class="cpr-h2">Što muškarci najčešće javljaju</h2>
      <ul class="cpr-check">
        <li><strong>Manje curenja već nakon 2 mjeseca</strong> — najčešća povratna informacija muškaraca nakon operacije prostate</li>
        <li><strong>Jednostavno za korištenje</strong> — bez sondi, bez aplikacije, bez postavljanja: uzmeš i vježbaš</li>
        <li><strong>Dobro izrađeno i dobro leži u ruci</strong> — čvrsta konstrukcija s mjerljivim otporom i brojačem ponavljanja</li>
      </ul>
      <p class="cpr-note">Sažetak povratnih informacija kupaca.</p>
    </div>
  </div>
</section>

<!-- ============ 7) Muškarci poput vas već vide rezultate ============ -->
<section class="cpr-sec cpr-revs">
  <div class="cpr-wrap">
    <h2 class="cpr-h2 cpr-center">Muškarci poput vas već vide rezultate</h2>
    <div class="cpr-rev-grid">
      <?php foreach ( array(
        array( 'Od 4 uloška dnevno na 0', 'Nakon operacije prostate radio sam Kegelove vježbe više od godinu dana bez ikakvog napretka. Bio sam skeptičan, ali koristim ga oko 5 tjedana i sa 4 uloška dnevno sam pao na nula. Vrlo sam zadovoljan rezultatom.', 'Lovro R.' ),
        array( 'Bio sam skeptičan', 'Curilo mi je dvije godine i Kegelove vježbe nisu donijele nikakvu promjenu. Bio sam skeptičan prema ovom uređaju, ali odmah se osjeti razlika kad mišići dna zdjelice imaju otpor. Sada mi više ne curi.', 'Goran P.' ),
        array( 'Jednostavno i dobro izrađeno', 'Jednostavan i dobro izrađen uređaj. Stišćete i otpuštate, a s vremenom stvarno dobijete puno više kontrole. Izbjegavajte jeftine kopije koje izgledaju slično — nemaju isti otpor.', 'Ante T.' ),
      ) as $rv ) : ?>
        <article class="cpr-rev">
          <div class="cpr-stars" aria-label="Ocjena 5 od 5">★★★★★</div>
          <p class="cpr-rev-title"><?php echo esc_html( $rv[0] ); ?></p>
          <p class="cpr-rev-text"><?php echo esc_html( $rv[1] ); ?></p>
          <p class="cpr-rev-name"><?php echo esc_html( $rv[2] ); ?></p>
        </article>
      <?php endforeach; ?>
    </div>
    <div class="cpr-narrow"><?php echo $cp_img('02-recenzije.jpg','Provjerene kupnje — recenzije kupaca NORIKS ControlPro'); ?></div>
  </div>
</section>

<!-- ============ 8) Jamstvo povrata novca u 30 dana ============ -->
<section class="cpr-sec cpr-alt">
  <div class="cpr-wrap cpr-row2">
    <div class="cpr-copy">
      <h2 class="cpr-h2">Jamstvo povrata novca u 30 dana</h2>
      <p>Ako u 30 dana ne osjetite manje curenja, vraćamo vam novac u cijelosti. Trener zadržavate.</p>
      <ul class="cpr-check">
        <li>Plaćate jednom — bez pretplata i mjesečnih troškova</li>
        <li>Diskretna, neutralna dostava bez oznaka na kutiji</li>
        <li>Korisnička podrška na hrvatskom</li>
      </ul>
      <a class="cpr-cta" href="#bundle-selector">Naruči bez rizika</a>
    </div>
    <div class="cpr-media"><?php echo $cp_img('06-jamstvo.jpg','Jamstvo povrata novca u 30 dana'); ?></div>
  </div>
</section>

<!-- ============ 9) Napomena ============ -->
<section class="cpr-sec cpr-disc">
  <div class="cpr-wrap-narrow">
    <h3 class="cpr-h3">Napomena</h3>
    <p class="cpr-small">NORIKS ControlPro namijenjen je jačanju mišića dna zdjelice. Mnogi korisnici prijavljuju osjetno bolju kontrolu mjehura, no rezultati se razlikuju od osobe do osobe. Proizvod nije namijenjen dijagnostici, liječenju ni sprječavanju bolesti. Prije početka bilo kojeg novog programa vježbanja posavjetujte se sa svojim liječnikom.</p>
  </div>
</section>

<style>
  .cpr-sec { padding: 48px 0; }
  .cpr-alt { background: #f5f6f7; }
  .cpr-wrap { max-width: 1180px; margin: 0 auto; padding: 0 18px; }
  .cpr-wrap-narrow { max-width: 860px; margin: 0 auto; padding: 0 18px; }
  .cpr-row2 { display: grid; grid-template-columns: 1fr 1fr; gap: 48px; align-items: center; }
  .cpr-h2 { font-size: clamp(24px,3.1vw,36px); font-weight: 800; color: #141414; line-height: 1.15; margin: 0 0 16px; }
  .cpr-h3 { font-size: 16px; font-weight: 800; color: #141414; margin: 0 0 8px; }
  .cpr-center { text-align: center; }
  .cpr-copy p, .cpr-sub, .cpr-cols p { font-size: 16px; line-height: 1.65; color: #3a3a3a; margin: 0 0 14px; }
  .cpr-sub { max-width: 780px; margin: 0 auto 24px; }
  .cpr-strong { font-weight: 700; color: #141414; }
  .cpr-note { font-size: 13px; color: #8a8a8a; margin: 4px 0 0; }
  .cpr-small { font-size: 13px; line-height: 1.6; color: #7a7a7a; margin: 0; }
  .cpr-media img, .cpr-full img, .cpr-narrow img { width: 100%; height: auto; display: block; border-radius: 16px; }
  .cpr-narrow { max-width: 720px; margin: 26px auto 0; }
  .cpr-full { margin: 0 0 26px; }
  .cpr-cols { display: grid; grid-template-columns: 1fr 1fr; gap: 34px; }

  .cpr-ph { width: 100%; aspect-ratio: 1/1; background: #ededed; border: 1px dashed #d3d3d3; border-radius: 16px;
            display: flex; align-items: center; justify-content: center; padding: 18px; box-sizing: border-box; }
  .cpr-ph span { font-size: 13px; line-height: 1.45; color: #9a9a9a; text-align: center; }

  .cpr-check { list-style: none; margin: 0 0 16px; padding: 0; }
  .cpr-check li { position: relative; padding: 0 0 11px 30px; font-size: 15.5px; color: #141414; line-height: 1.5; }
  .cpr-check li:before { content: "✓"; position: absolute; left: 0; top: 0; width: 20px; height: 20px; background: #141414; color: #fff; border-radius: 50%; font-size: 12px; text-align: center; line-height: 20px; }

  .cpr-cta { display: inline-block; margin-top: 8px; background: #141414; color: #fff; font-weight: 700; font-size: 16px; padding: 14px 30px; border-radius: 10px; text-decoration: none; }
  .cpr-cta:hover { background: #E8450E; color: #fff; }

  .cpr-rev-grid { display: grid; grid-template-columns: repeat(3,1fr); gap: 22px; }
  .cpr-rev { background: #fff; border: 1px solid #e8e8e8; border-radius: 14px; padding: 22px 20px; text-align: center; }
  .cpr-stars { color: #f5a623; font-size: 16px; letter-spacing: 1px; }
  .cpr-rev-title { font-weight: 800; color: #141414; font-size: 15px; margin: 10px 0 10px; }
  .cpr-rev-text { font-size: 14px; line-height: 1.6; color: #4a4a4a; margin: 0 0 14px; }
  .cpr-rev-name { font-size: 13px; font-style: italic; font-weight: 700; color: #6b6b6b; margin: 0; padding-top: 12px; border-top: 1px solid #ededed; }

  @media (max-width: 820px) {
    .cpr-sec { padding: 30px 0; }
    .cpr-row2, .cpr-cols { grid-template-columns: 1fr; gap: 20px; }
    .cpr-row2 .cpr-media { order: -1; }
    .cpr-h2 { font-size: 2rem; }
    .cpr-rev-grid { grid-template-columns: 1fr; }
  }

  /* Nema "Tablica veličina" linka na ControlPro uređaju (ni plugin ni globalni). */
  .noriks-global-sizechart, .gck-size-link, .gck-size-link-wrap,
  #open-size-chart, #open-size-chartCustom { display: none !important; }

  /* Kratki opis: sakrij standardne točke (•), ostaje samo ✅ iz teksta. */
  .woocommerce-product-details__short-description ul { list-style: none; margin: 8px 0 26px; padding-left: 0; }
  .woocommerce-product-details__short-description ul li { list-style: none; padding-left: 0; margin-left: 0; line-height: 1.55; margin-bottom: 6px; }
  .woocommerce-product-details__short-description p:has(+ ul) { margin-top: 20px; margin-bottom: 4px; }
</style>

<script>
(function(){
  document.querySelectorAll('a.cpr-cta[href="#bundle-selector"]').forEach(function(a){
    a.addEventListener('click', function(e){ e.preventDefault(); var t=document.getElementById('bundle-selector')||document.querySelector('.single_add_to_cart_button'); if(t) t.scrollIntoView({behavior:'smooth',block:'center'}); });
  });
})();
</script>
