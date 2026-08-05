<?php
/**
 * product-bottom: NORIKSHERS Cool Curl Pencil — stiler za ravnanje i kovrčanje (orto-norikshersbrush).
 * Sekcije po referentnoj stranici, tekst na HR, slike su NORIKS kreative iz img/norikshersbrush/.
 * Slika i tekst se izmjenjuju lijevo/desno; ozadja bijelo/sivo naizmjence.
 *   1. Precizno oblikovanje            slika lijevo   01
 *   2. Dva stila jednim uređajem       slika desno    02
 *   3. Podizanje korijena hladnim zrakom slika lijevo 03
 *   4. 360° hladni protok zraka        slika desno    04
 *   5. 5 temperaturnih postavki        slika lijevo   05
 *   6. Manje topline, više sjaja       slika desno    06
 *   7. Izravnajte i ukovrčajte         slika lijevo   07
 *   8. Kako uključiti                  slika desno    08
 *   9. Što je u pakiranju              slika lijevo   09
 *  10. Što kažu kupci                  3 kartice recenzija
 * FAQ i recenzije renderira zajednički reviews.php (ne ovdje).
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
$nb      = get_template_directory_uri() . '/img/norikshersbrush/';
$nb_path = get_template_directory() . '/img/norikshersbrush/';

/* Slika prati odabranu boju: ako je u galeriji/atributu crna, prikaže se crna varijanta. */
$nb_img = function( $file, $alt ) use ( $nb, $nb_path ) {
  if ( file_exists( $nb_path . $file ) ) {
    return '<img src="'.esc_url($nb.$file).'" alt="'.esc_attr($alt).'" loading="lazy">';
  }
  return '<div class="nhb-ph" role="img" aria-label="'.esc_attr($alt).'"><span>'.esc_html($alt).'</span></div>';
};
?>

<!-- ============ 1) Precizno oblikovanje ============ -->
<section class="nhb-sec">
  <div class="nhb-wrap nhb-row2">
    <div class="nhb-media"><?php echo $nb_img('01_precizno-oblikovanje_pink.jpg','Precizno oblikovanje kratke kose'); ?></div>
    <div class="nhb-copy">
      <h2 class="nhb-h2">Precizno oblikovanje</h2>
      <p class="nhb-lead">Uska ploča od <strong>1,7 cm</strong> ulazi točno tamo gdje velike pegle ne mogu.</p>
      <p>Šiške, rubne vlasi, pixie rez ili bob — mali uređaj daje kontrolu kakvu široke ploče nemaju. Radite pramen po pramen, bez povlačenja i bez prelaska preko iste kose više puta.</p>
      <ul class="nhb-check">
        <li>Pixie rez</li>
        <li>Rubne vlasi i šiške</li>
        <li>Bob i kratke frizure</li>
      </ul>
    </div>
  </div>
</section>

<!-- ============ 2) Dva stila jednim uređajem ============ -->
<section class="nhb-sec nhb-alt">
  <div class="nhb-wrap nhb-row2">
    <div class="nhb-copy">
      <h2 class="nhb-h2">Dva stila jednim uređajem</h2>
      <p>Ravno ili kovrčavo — isti uređaj, bez mijenjanja nastavaka. Zaobljeni rub omogućuje da kosu jednim potezom izravnate, a okretom zapešća oblikujete kovrču.</p>
      <p>Umjesto pegle, uvijača i četke u torbici nosite jedan uređaj.</p>
      <a class="nhb-cta" href="#bundle-selector">Odaberi svoju boju →</a>
    </div>
    <div class="nhb-media"><?php echo $nb_img('02_dva-stila_pink.jpg','Ravno i kovrčavo istim uređajem'); ?></div>
  </div>
</section>

<!-- ============ 3) Podizanje korijena hladnim zrakom ============ -->
<section class="nhb-sec">
  <div class="nhb-wrap nhb-row2">
    <div class="nhb-media"><?php echo $nb_img('03_podizanje-korijena_pink.jpg','Podizanje korijena hladnim zrakom'); ?></div>
    <div class="nhb-copy">
      <h2 class="nhb-h2">Podizanje korijena hladnim zrakom</h2>
      <p>Volumen najčešće nestane do podneva jer se kosa oblikuje toplinom, a onda se pod vlastitom težinom spusti. Hladni protok zraka fiksira oblik <strong>dok je kosa još u ploči</strong> — zato volumen ostaje.</p>
      <p>Uska ploča prilazi korijenu bez opasnosti za vlasište, pa podignete točno ono što treba, bez napora.</p>
    </div>
  </div>
</section>

<!-- ============ 4) 360° hladni protok zraka ============ -->
<section class="nhb-sec nhb-alt">
  <div class="nhb-wrap nhb-row2">
    <div class="nhb-copy">
      <h2 class="nhb-h2">360° hladni protok zraka</h2>
      <p>104 otvora po cijelom obodu ploče puštaju hladan zrak oko pramena, u svim smjerovima.</p>
      <ul class="nhb-check">
        <li><strong>2 sekunde</strong> za fiksiranje kovrče</li>
        <li><strong>48 sati</strong> trajanja stila</li>
        <li>Zrak se uključuje tek kad uređaj dosegne zadanu temperaturu</li>
      </ul>
    </div>
    <div class="nhb-media"><?php echo $nb_img('04_hladni-protok_pink.jpg','360 stupnjeva hladni protok zraka'); ?></div>
  </div>
</section>

<!-- ============ 5) 5 temperaturnih postavki ============ -->
<section class="nhb-sec">
  <div class="nhb-wrap nhb-row2">
    <div class="nhb-media"><?php echo $nb_img('05_temperature_pink.jpg','Pet temperaturnih postavki'); ?></div>
    <div class="nhb-copy">
      <h2 class="nhb-h2">5 temperaturnih postavki</h2>
      <p>Svaka kosa traži svoju temperaturu — zato nema jedne univerzalne postavke:</p>
      <ul class="nhb-temp">
        <li><span>220 °C</span> gruba kosa</li>
        <li><span>200 °C</span> gusta kosa</li>
        <li><span>180 °C</span> kovrčava kosa</li>
        <li><span>160 °C</span> fina kosa</li>
        <li><span>140 °C</span> tanka kosa</li>
      </ul>
      <p>Djeluje i na teksturiranoj kosi. Počnite nižom postavkom i podignite je samo ako je potrebno.</p>
    </div>
  </div>
</section>

<!-- ============ 6) Manje topline, više sjaja ============ -->
<section class="nhb-sec nhb-alt">
  <div class="nhb-wrap nhb-row2">
    <div class="nhb-copy">
      <h2 class="nhb-h2">Manje topline, više sjaja</h2>
      <p>Tehnologija hladnog protoka zraka nježno oblikuje kosu, zadržava vlagu i čuva njezinu prirodnu snagu. Kosa nakon oblikovanja ostaje glatka i sjajna umjesto isušena.</p>
      <p>Razlika se vidi i pod mikroskopom: s hladnim protokom zraka vlas ostaje zatvorena, bez hladnog protoka se ljuskice podižu.</p>
    </div>
    <div class="nhb-media"><?php echo $nb_img('06_manje-topline_pink.jpg','Manje topline, više sjaja'); ?></div>
  </div>
</section>

<!-- ============ 7) Izravnajte i ukovrčajte ============ -->
<section class="nhb-sec">
  <div class="nhb-wrap nhb-row2">
    <div class="nhb-media"><?php echo $nb_img('07_izravnaj-ukovrcaj_pink.jpg','Zaobljeni rub i 3D plutajuća ploča'); ?></div>
    <div class="nhb-copy">
      <h2 class="nhb-h2">Izravnajte i ukovrčajte</h2>
      <ul class="nhb-check">
        <li><strong>Zaobljeni rub</strong> — glatko klizanje, bez pregiba na kosi</li>
        <li><strong>3D plutajuća keramička ploča</strong> — oblikovanje bez zapinjanja i čupanja</li>
        <li><strong>Sigurnosna brava</strong> — spriječi slučajno uključivanje u torbici</li>
      </ul>
      <p>Ploča se prilagođava debljini pramena, pa je pritisak ravnomjeran po cijeloj dužini.</p>
    </div>
  </div>
</section>

<!-- ============ 8) Kako uključiti ============ -->
<section class="nhb-sec nhb-alt">
  <div class="nhb-wrap nhb-row2">
    <div class="nhb-copy">
      <h2 class="nhb-h2">Kako uključiti</h2>
      <ol class="nhb-steps">
        <li><strong>Uključite u struju.</strong> Uređaj radi na 100–240 V, pa putuje s vama.</li>
        <li><strong>Pritisnite i držite tipku 2 sekunde.</strong> Kratki pritisak neće ga upaliti — to je zaštita.</li>
        <li><strong>Svjetlo upaljeno = spreman.</strong> Odaberite temperaturu i počnite oblikovati.</li>
      </ol>
      <p>Automatsko isključivanje nakon 60 minuta — ako zaboravite, uređaj se sam ugasi.</p>
    </div>
    <div class="nhb-media"><?php echo $nb_img('08_kako-ukljuciti_pink.jpg','Kako uključiti uređaj'); ?></div>
  </div>
</section>

<!-- ============ 9) Što je u pakiranju ============ -->
<section class="nhb-sec">
  <div class="nhb-wrap nhb-row2">
    <div class="nhb-media"><?php echo $nb_img('09_sadrzaj-pakiranja_pink.jpg','Sadržaj pakiranja'); ?></div>
    <div class="nhb-copy">
      <h2 class="nhb-h2">Što je u pakiranju</h2>
      <ul class="nhb-check">
        <li>NORIKSHERS Cool Curl Pencil stiler</li>
        <li>Rukavica otporna na toplinu</li>
        <li>Vodič za izradu kovrča</li>
      </ul>
      <p>Dostupno u <strong>crnoj</strong> i <strong>roza</strong> boji. Kabel dug 2 m, snaga 46 W.</p>
      <a class="nhb-cta" href="#bundle-selector">Naruči NORIKSHERS</a>
    </div>
  </div>
</section>

<!-- ============ 10) Što kažu kupci ============ -->
<section class="nhb-sec nhb-alt">
  <div class="nhb-wrap">
    <h2 class="nhb-h2 nhb-center">Što kažu kupci</h2>
    <div class="nhb-rev-grid">
      <?php foreach ( array(
        array( 'Konačno nešto za kratku kosu', 'Imam pixie i sve pegle su mi bile preširoke — nisam mogla do korijena ni do šiški. Ova uska ploča ulazi svugdje. Prvi put oblikujem kosu bez frustracije.', 'Petra M.' ),
        array( 'Volumen drži cijeli dan', 'Kosa mi je tanka i volumen je nestajao do podneva. Uz hladni zrak korijen ostaje podignut do večeri. To mi je bilo najveće iznenađenje.', 'Ivana K.' ),
        array( 'Manje oštećenja nego prije', 'Koristim 160 °C i kosa je vidno mekša nego s prijašnjom peglom na 200. Kovrče se fiksiraju u par sekundi i drže do sljedećeg pranja.', 'Marija T.' ),
      ) as $rv ) : ?>
        <article class="nhb-rev">
          <div class="nhb-stars" aria-label="Ocjena 5 od 5">★★★★★</div>
          <p class="nhb-rev-title"><?php echo esc_html( $rv[0] ); ?></p>
          <p class="nhb-rev-text">„<?php echo esc_html( $rv[1] ); ?>"</p>
          <p class="nhb-rev-name"><?php echo esc_html( $rv[2] ); ?></p>
        </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<style>
  .nhb-sec { padding: 46px 0; }
  .nhb-alt { background: #f6f4fa; }
  .nhb-wrap { max-width: 1180px; margin: 0 auto; padding: 0 18px; }
  .nhb-row2 { display: grid; grid-template-columns: 1fr 1fr; gap: 48px; align-items: center; }
  .nhb-h2 { font-size: clamp(24px,3.1vw,34px); font-weight: 800; color: #141414; line-height: 1.2; margin: 0 0 16px; }
  .nhb-center { text-align: center; }
  .nhb-copy p { font-size: 15.5px; line-height: 1.65; color: #3a3a3a; margin: 0 0 14px; }
  .nhb-lead { font-weight: 700; color: #141414; }
  .nhb-media img { width: 100%; height: auto; display: block; border-radius: 14px; }

  .nhb-ph { width: 100%; aspect-ratio: 1/1; background: #ededed; border: 1px dashed #d3d3d3; border-radius: 14px;
            display: flex; align-items: center; justify-content: center; padding: 18px; box-sizing: border-box; }
  .nhb-ph span { font-size: 13px; line-height: 1.45; color: #9a9a9a; text-align: center; }

  .nhb-check { list-style: none; margin: 0 0 16px; padding: 0; }
  .nhb-check li { position: relative; padding: 0 0 11px 30px; font-size: 15.5px; color: #141414; line-height: 1.5; }
  .nhb-check li:before { content: "✓"; position: absolute; left: 0; top: 0; width: 20px; height: 20px; background: #141414; color: #fff; border-radius: 50%; font-size: 12px; text-align: center; line-height: 20px; }
  .nhb-steps { list-style: none; counter-reset: nhbstep; margin: 0 0 16px; padding: 0; }
  .nhb-steps li { counter-increment: nhbstep; position: relative; padding: 0 0 14px 40px; font-size: 15.5px; line-height: 1.55; color: #3a3a3a; }
  .nhb-steps li:before { content: counter(nhbstep); position: absolute; left: 0; top: 0; width: 26px; height: 26px; background: #141414; color: #fff; border-radius: 50%; font-size: 13px; font-weight: 700; text-align: center; line-height: 26px; }
  .nhb-temp { list-style: none; margin: 0 0 16px; padding: 0; }
  .nhb-temp li { display: flex; align-items: center; gap: 12px; padding: 8px 0; border-bottom: 1px solid #eee; font-size: 15px; color: #3a3a3a; }
  .nhb-temp li span { min-width: 82px; font-weight: 800; color: #141414; }

  .nhb-cta { display: inline-block; margin-top: 6px; background: #141414; color: #fff; font-weight: 700; font-size: 15px; padding: 13px 26px; border-radius: 8px; text-decoration: none; }
  .nhb-cta:hover { background: #E8450E; color: #fff; }

  .nhb-rev-grid { display: grid; grid-template-columns: repeat(3,1fr); gap: 22px; margin-top: 26px; }
  .nhb-rev { background: #fff; border: 1px solid #e8e8e8; border-radius: 12px; padding: 22px 20px; text-align: center; }
  .nhb-stars { color: #f5b301; font-size: 16px; letter-spacing: 1px; }
  .nhb-rev-title { font-weight: 800; color: #141414; font-size: 15px; margin: 10px 0; }
  .nhb-rev-text { font-size: 14px; line-height: 1.6; color: #4a4a4a; margin: 0 0 14px; }
  .nhb-rev-name { font-size: 13px; font-style: italic; color: #6b6b6b; margin: 0; }

  @media (max-width: 820px) {
    .nhb-sec { padding: 9px 0; }
    .nhb-sec:first-of-type { padding-top: 0; }
    .nhb-wrap { padding-left: 0; padding-right: 0; }
    .nhb-row2 { grid-template-columns: 1fr; gap: 18px; }
    .nhb-row2 .nhb-media { order: -1; }
    .nhb-h2 { font-size: 1.9rem; margin-bottom: 12px; }
    .nhb-rev-grid { grid-template-columns: 1fr; gap: 18px; }
  }

  /* Nema "Tablica veličina" linka na uređaju (ni plugin ni globalni). */
  .noriks-global-sizechart, .gck-size-link, .gck-size-link-wrap,
  #open-size-chart, #open-size-chartCustom { display: none !important; }

  /* Kratki opis: skupljeni razmaci, viseći uvod kod ✓ redaka. */
  .woocommerce-product-details__short-description { margin-bottom: 10px !important; }
  .woocommerce-product-details__short-description ul { list-style: none; margin: 4px 0 8px; padding-left: 0; }
  /* Viseci uvod SAMO na ✓ retcima; obicni odstavci ostaju poravnani po lijevom rubu. */
  .woocommerce-product-details__short-description ul li { padding-left: 1.6em; text-indent: -1.6em; line-height: 1.45; margin: 0 0 6px; }
  .woocommerce-product-details__short-description p { padding-left: 0; text-indent: 0; line-height: 1.5; margin: 0 0 10px !important; }
</style>

<script>
(function(){
  document.querySelectorAll('a.nhb-cta[href="#bundle-selector"]').forEach(function(a){
    a.addEventListener('click', function(e){ e.preventDefault(); var t=document.getElementById('bundle-selector')||document.querySelector('.single_add_to_cart_button'); if(t) t.scrollIntoView({behavior:'smooth',block:'center'}); });
  });

  /* Slike u why-sekciji prate odabranu boju (crna / roza). */
  function nhbSetColour(c){
    document.querySelectorAll('.nhb-media img').forEach(function(img){
      var s=img.getAttribute('src');
      if (!s) { return; }
      var alt = s.replace(/_(black|pink)\.jpg$/, '_' + c + '.jpg');
      if (alt !== s) {
        var probe = new Image();
        probe.onload = function(){ img.src = alt; };
        probe.src = alt;                       // zamijeni samo ako varijanta postoji
      }
    });
  }
  document.addEventListener('change', function(e){
    var t=e.target;
    if (!t || !t.value) { return; }
    var v=String(t.value).toLowerCase();
    if (v.indexOf('crn')===0 || v==='black') { nhbSetColour('black'); }
    if (v.indexOf('roz')===0 || v==='pink')  { nhbSetColour('pink'); }
  });
})();
</script>
