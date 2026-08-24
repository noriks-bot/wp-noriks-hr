<?php
/**
 * product-bottom: NORIKS FaceLift — kolagenska traka za oblikovanje lica (orto-lift).
 *
 * Sve sekcije su LIJEVO/DESNO (slika + tekst), kao na referentnoj stranici
 * (tryskult.com / Sculpting Face Wrap). Nema sekcija koje su samo jedna velika slika.
 * Recenzije i FAQ renderira zajednicki reviews.php.
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$lf      = get_template_directory_uri() . '/img/lift/';
$lf_path = get_template_directory() . '/img/lift/';

$lf_img = function( $file, $alt ) use ( $lf, $lf_path ) {
  if ( file_exists( $lf_path . $file ) ) {
    return '<img src="' . esc_url( $lf . $file ) . '" alt="' . esc_attr( $alt ) . '" loading="lazy">';
  }
  return '<div class="nlf-ph" role="img" aria-label="' . esc_attr( $alt ) . '"><span>' . esc_html( $alt ) . '</span></div>';
};
?>

<!-- 1) Prije i poslije — tri slike u nizu -->
<section class="nlf-sec nlf-cream">
  <div class="nlf-wrap">
    <div class="nlf-lead-copy">
      <h2 class="nlf-h2">Stvarne korisnice, stvarni tjedni</h2>
      <p>Fotografije su snimljene kod kuće, bez filtera i bez profesionalnog svjetla — isti kut, isto svjetlo, razmak od nekoliko tjedana.</p>
      <p>Ono što se prvo mijenja nije bora, nego <strong>obris</strong>: donji dio lica djeluje lakše, a linija čeljusti se jasnije odvaja od vrata.</p>
    </div>
    <div class="nlf-three">
      <figure><?php echo $lf_img( 'lift-03-pp7.jpg',  'Prije i nakon 7 tjedana' ); ?><figcaption>Nakon 7 tjedana</figcaption></figure>
      <figure><?php echo $lf_img( 'lift-04-pp10.jpg', 'Prije i nakon 10 tjedana' ); ?><figcaption>Nakon 10 tjedana</figcaption></figure>
      <figure><?php echo $lf_img( 'lift-05-pp11.jpg', 'Prije i nakon 11 tjedana' ); ?><figcaption>Nakon 11 tjedana</figcaption></figure>
    </div>
    <div class="nlf-stats nlf-stats-wide">
      <div><strong>96 %</strong><span>odmah je primijetilo manju oteklinu</span></div>
      <div><strong>92 %</strong><span>vidljivo podizanje nakon 4 tjedna</span></div>
      <div><strong>91 %</strong><span>sigurnije se osjeća na fotografijama</span></div>
    </div>
  </div>
</section>

<!-- 2) Problem — slika desno -->
<section class="nlf-sec nlf-white">
  <div class="nlf-wrap nlf-row">
    <div class="nlf-media"><?php echo $lf_img( 'lift-10-sjaj.jpg', 'NORIKS FaceLift traka na licu' ); ?></div>
    <div class="nlf-copy">
      <p class="nlf-eyebrow">Oštra linija čeljusti. Bez operacije.</p>
      <h2 class="nlf-h2">Opuštena koža je prvi znak starenja</h2>
      <p>Nakon 40. godine koža gubi kolagen brže nego što ga stvara. Linija čeljusti omekša, u donjem dijelu lica se zadržava tekućina, a lice djeluje teže nego što se osjećate.</p>
      <p class="nlf-strong">NORIKS FaceLift spaja dvoje: ciljanu kompresiju koja podiže i tkaninu s kolagenom od 300 daltona koja radi na strukturi kože.</p>
      <ul class="nlf-ticks">
        <li>20 – 30 minuta dnevno, dok gledate TV</li>
        <li>Bez igala, bez zahvata, bez oporavka</li>
        <li>Periva i višekratna — do 15 uporaba</li>
      </ul>
    </div>
  </div>
</section>

<!-- Tijek oblikovanja — vremenska crta -->
<section class="nlf-sec nlf-cream">
  <div class="nlf-wrap nlf-row">
    <div class="nlf-copy">
      <h2 class="nlf-h2">Vaš put do definirane čeljusti</h2>
      <p class="nlf-sub">Rutina koja traje 20 minuta — dok se vi odmarate.</p>
      <ol class="nlf-tl">
        <li>
          <span class="nlf-tl-badge">1. – 2. tjedan</span>
          <strong class="nlf-tl-h">Trenutačan efekt podizanja</strong>
          <p>Već u prva dva tjedna linija čeljusti djeluje definiranije i lakše. Kompresija pokreće limfnu drenažu, pa se smanjuju oteklina i zadržavanje tekućine.</p>
        </li>
        <li>
          <span class="nlf-tl-badge">3. – 6. tjedan</span>
          <strong class="nlf-tl-h">Zatezanje i podizanje</strong>
          <p>Počinje stimulacija kolagena. Kolagen od 300 daltona ulazi dublje, a kompresija istovremeno „uči" kožu da se drži prema gore.</p>
        </li>
        <li>
          <span class="nlf-tl-badge">8. – 12. tjedan</span>
          <strong class="nlf-tl-h">Definirana linija čeljusti</strong>
          <p>Kolagen se remodelira i koža se učvršćuje. Podbradak djeluje vidljivo manje, a čeljust oštrije — u ovoj fazi promjenu primijete i drugi.</p>
        </li>
        <li>
          <span class="nlf-tl-badge">I dalje</span>
          <strong class="nlf-tl-h">Dugoročna obnova</strong>
          <p>Uz redovitu uporabu struktura kože ostaje čvršća, a oblikovana linija čeljusti postaje ono što u ogledalu vidite svaki dan.</p>
        </li>
      </ol>
    </div>
    <div class="nlf-media nlf-graf"><?php echo $lf_img( 'lift-17-tijek.jpg', 'Tijek oblikovanja linije čeljusti kroz tjedne' ); ?></div>
  </div>
</section>

<!-- 3) Kako se koristi — slika lijevo -->
<section class="nlf-sec nlf-white">
  <div class="nlf-wrap nlf-row">
    <div class="nlf-media nlf-crop"><?php echo $lf_img( 'lift-13-ogrtac.jpg', 'Traka tijekom večernje rutine' ); ?></div>
    <div class="nlf-copy">
      <h2 class="nlf-h2">Tri koraka, svaku večer</h2>
      <p>Cijela rutina traje koliko i jedna epizoda serije.</p>
      <ol class="nlf-steps">
        <li><span>1</span><div><strong>Očistite i osušite lice.</strong> Koža bez teških ulja upija kolagen dublje. Serum ili kremu nanesite prije — traka pomaže da se upiju.</div></li>
        <li><span>2</span><div><strong>Namjestite traku.</strong> Čičak na tjemenu i zatiljku zategnite do ugodne napetosti; otvori za uši je drže na mjestu.</div></li>
        <li><span>3</span><div><strong>Opustite se 20 – 30 minuta.</strong> Kompresija podiže liniju čeljusti, kolagen radi na strukturi kože. Skinete traku i lice djeluje čvršće.</div></li>
      </ol>
      <p class="nlf-note">Dosljednost je ono što razdvaja „ništa ne djeluje" od „suprug je primijetio prije mene".</p>
    </div>
  </div>
</section>

<!-- Prkosite gravitaciji — brojke -->
<section class="nlf-sec nlf-cream">
  <div class="nlf-wrap nlf-row">
    <div class="nlf-copy nlf-stats-copy">
      <h2 class="nlf-h2">Prkosite gravitaciji.<br><em>Oblikujte liniju čeljusti.</em></h2>
      <p class="nlf-sub">Zašto su tisuće žena bolne filere zamijenile kompresijom s kolagenom od 300 daltona.</p>
      <ul class="nlf-figs">
        <li><span class="nlf-fig-ico">↑</span><span class="nlf-fig-num">96 %</span><span class="nlf-fig-txt">odmah je primijetilo manju oteklinu u donjem dijelu lica</span></li>
        <li><span class="nlf-fig-ico">↑</span><span class="nlf-fig-num">92 %</span><span class="nlf-fig-txt">prijavilo je vidljivo podizanje i definiciju nakon 4 tjedna</span></li>
        <li><span class="nlf-fig-ico">↑</span><span class="nlf-fig-num">91 %</span><span class="nlf-fig-txt">osjeća se sigurnije na fotografijama i pred ogledalom</span></li>
      </ul>
      <p class="nlf-note-sm">* Prema četverotjednoj anketi među korisnicama.</p>
    </div>
    <div class="nlf-media nlf-graf"><?php echo $lf_img( 'lift-02-dermatolog.jpg', 'Preporuka dermatologinje' ); ?></div>
  </div>
</section>

<!-- Usporedba -->
<section class="nlf-sec nlf-white">
  <div class="nlf-wrap">
    <div class="nlf-lead-copy">
      <h2 class="nlf-h2">NORIKS FaceLift naspram ostalih</h2>
      <p>Zašto kompresija s kolagenom radi ono što kreme i maske ne mogu.</p>
    </div>
    <table class="nlf-cmp">
      <thead>
        <tr><th></th><th class="nlf-cmp-us">NORIKS</th><th>Ostali</th></tr>
      </thead>
      <tbody>
        <tr><td>Tkanina s kolagenom od 300 daltona</td><td class="nlf-cmp-us"><span class="nlf-yes">✓</span></td><td><span class="nlf-no">✕</span></td></tr>
        <tr><td>Podržava vašu njegu lica</td><td class="nlf-cmp-us"><span class="nlf-yes">✓</span></td><td><span class="nlf-no">✕</span></td></tr>
        <tr><td>Ciljana kompresija donjeg dijela lica</td><td class="nlf-cmp-us"><span class="nlf-yes">✓</span></td><td><span class="nlf-no">✕</span></td></tr>
        <tr><td>Podesivo čičak zatvaranje</td><td class="nlf-cmp-us"><span class="nlf-yes">✓</span></td><td><span class="nlf-no">✕</span></td></tr>
        <tr><td>Bezbolno, bez igala</td><td class="nlf-cmp-us"><span class="nlf-yes">✓</span></td><td><span class="nlf-no">✕</span></td></tr>
        <tr><td>Prirodan rezultat</td><td class="nlf-cmp-us"><span class="nlf-yes">✓</span></td><td><span class="nlf-no">✕</span></td></tr>
        <tr><td>Dugoročna obnova strukture kože</td><td class="nlf-cmp-us"><span class="nlf-yes">✓</span></td><td><span class="nlf-no">✕</span></td></tr>
        <tr><td>Višekratno — do 15 uporaba</td><td class="nlf-cmp-us"><span class="nlf-yes">✓</span></td><td><span class="nlf-no">✕</span></td></tr>
      </tbody>
    </table>
  </div>
</section>


<!-- 6) Botoks vs kompresija — slika desno -->
<section class="nlf-sec nlf-cream">
  <div class="nlf-wrap nlf-row">
    <div class="nlf-media nlf-graf"><?php echo $lf_img( 'lift-18-vs.jpg', 'Usporedba: botoks i fileri naspram kompresije s kolagenom' ); ?></div>
    <div class="nlf-copy">
      <h2 class="nlf-h2">Zašto injekcije ne rješavaju opuštenu kožu</h2>
      <p>Fileri popunjavaju volumen, ali ne vraćaju strukturu — a rezultat traje tri do šest mjeseci i ponavlja se uz cijenu od 700 do 900 € po tretmanu.</p>
      <p class="nlf-strong">Kompresija s kolagenom radi na sloju u kojem struktura zapravo nastaje: bez igala, bez oporavka i za manje od 50 €.</p>
    </div>
  </div>
</section>

<!-- 7) Prednosti — slika lijevo -->
<section class="nlf-sec nlf-white">
  <div class="nlf-wrap nlf-row">
    <div class="nlf-copy">
      <h2 class="nlf-h2">Sitnice zbog kojih ju je lako nositi svaki dan</h2>
      <p>Tkanina je <strong>81 % poliamid i 19 % elastan</strong> — dovoljno elastična da prati oblik lica, a dovoljno tanka da se ispod nje ne znojite.</p>
      <p>Čičak na tjemenu i zatiljku znači da napetost birate sami: labavije prve večeri, čvršće kad se naviknete. Otvori za uši sprječavaju da traka klizi dok se okrećete.</p>
      <p class="nlf-strong">Perite je ručno u mlakoj vodi i sušite na zraku — tako zadržava oblik kroz svih 15 uporaba.</p>
    </div>
    <div class="nlf-media nlf-graf"><?php echo $lf_img( 'lift-15-prednosti.jpg', 'Prednosti trake za oblikovanje lica' ); ?></div>
  </div>
</section>

<!-- 8) Recenzija — slika lijevo -->
<section class="nlf-sec nlf-cream">
  <div class="nlf-wrap nlf-row">
    <div class="nlf-media nlf-graf"><?php echo $lf_img( 'lift-16-sanja.jpg', 'Recenzija korisnice' ); ?></div>
    <div class="nlf-copy">
      <p class="nlf-stars">★★★★★</p>
      <h2 class="nlf-h2">„Pet godina nisam podnosila svoj odraz”</h2>
      <p>Isprobala sam svaki serum, kremu i dodatak prehrani — ništa nije djelovalo. Umalo sam potrošila 800 € na botoks. Ova traka vratila mi je definiciju za tri tjedna. Suprug je primijetio prije mene.</p>
      <p class="nlf-sign">Sanja M., 56 godina</p>
      <div class="nlf-strip">
        <?php
        foreach ( array(
          'lift-07-kuhinja.jpg'    => 'Korisnica s NORIKS FaceLift trakom',
          'lift-08-crvenokosa.jpg' => 'Korisnica s NORIKS FaceLift trakom',
          'lift-12-kovrcava.jpg'   => 'Korisnica s NORIKS FaceLift trakom',
          'lift-14-kardigan.jpg'   => 'Korisnica s NORIKS FaceLift trakom',
          'lift-06-plava.jpg'      => 'Korisnica s NORIKS FaceLift trakom',
          'lift-01-selfie.jpg'     => 'Zadovoljne korisnice NORIKS FaceLift trake',
        ) as $f => $alt ) {
          echo '<figure>' . $lf_img( $f, $alt ) . '</figure>';
        }
        ?>
      </div>
    </div>
  </div>
</section>

<!-- 9) Jamstvo — slika lijevo -->
<section class="nlf-sec nlf-white">
  <div class="nlf-wrap nlf-row">
    <div class="nlf-copy">
      <h2 class="nlf-h2">Rezultati ili vam vraćamo novac</h2>
      <p>Znamo da ste se već opekli na proizvodima koji su obećavali sve, a nisu donijeli ništa. Zato nudimo <strong>jamstvo od 30 dana</strong> — isprobajte traku, vidite rezultate ili dobijete puni povrat novca.</p>
      <p class="nlf-strong">Bez rizika i bez papirologije: dovoljan je jedan e-mail.</p>
    </div>
    <div class="nlf-media nlf-graf"><?php echo $lf_img( 'lift-09-jamstvo.jpg', 'Jamstvo povrata novca 30 dana' ); ?></div>
  </div>
</section>

<style>
.nlf-sec { padding: 46px 0; }
.nlf-cream { background: #f7efe4; color: #3a2c20; }
.nlf-white { background: #fff;    color: #2a2118; }
.nlf-dark  { background: #3a2c20; color: #f7efe4; }
.nlf-dark h2, .nlf-dark h3, .nlf-dark p, .nlf-dark li, .nlf-dark strong { color: #f7efe4; }
.nlf-wrap { max-width: 1440px; margin: 0 auto; padding: 0 22px; }
.nlf-row { display: grid; grid-template-columns: 1fr 1fr; gap: 48px; align-items: center; }
.nlf-media img { width: 100%; height: auto; display: block; border-radius: 14px; }
.nlf-media.nlf-crop img { aspect-ratio: 1 / 1 !important; height: auto !important; object-fit: cover !important; object-position: center 22% !important; }
.nlf-eyebrow { text-transform: uppercase; letter-spacing: .14em; font-size: 12px; font-weight: 700; color: #a5825a; margin: 0 0 8px; }
.nlf-h2 { font-size: 27px; line-height: 1.22; margin: 0 0 12px; font-weight: 700; }
.nlf-sec p { font-size: 15.5px; line-height: 1.62; margin: 0 0 12px; }
.nlf-strong { font-weight: 600; }
.nlf-note { font-size: 14.5px; opacity: .85; margin: 4px 0 0; }
.nlf-quote { font-style: italic; font-size: 16.5px; }
.nlf-sign { font-size: 14px; opacity: .75; margin: 0; }
.nlf-stars { color: #d8a94b; letter-spacing: 3px; margin: 0 0 6px; font-size: 17px; }
.nlf-ticks { list-style: none; padding: 0; margin: 14px 0 0; }
.nlf-ticks li { position: relative; padding-left: 24px; margin-bottom: 7px; font-size: 15px; }
.nlf-ticks li:before { content: ""; position: absolute; left: 0; top: 6px; width: 12px; height: 12px; border-radius: 50%; background: #a5825a; }
.nlf-steps { list-style: none; padding: 0; margin: 14px 0 0; }
.nlf-steps li { display: flex; gap: 12px; margin-bottom: 12px; font-size: 15px; line-height: 1.55; }
.nlf-steps span { flex: 0 0 auto; width: 28px; height: 28px; border-radius: 50%; background: #8a6a45; color: #fff;
                  font-weight: 800; display: flex; align-items: center; justify-content: center; font-size: 14px; }
.nlf-weeks { list-style: none; padding: 0; margin: 10px 0 0; }
.nlf-weeks li { border-left: 3px solid #d8bd97; padding: 2px 0 2px 14px; margin-bottom: 12px; font-size: 15px; line-height: 1.55; }
.nlf-weeks strong { display: block; font-size: 13px; text-transform: uppercase; letter-spacing: .08em; color: #8a6a45; margin-bottom: 2px; }

.nlf-three { display: grid; grid-template-columns: repeat(3, 1fr); gap: 16px; margin: 0 0 18px; }
.nlf-three figure { margin: 0; }
.nlf-three img { width: 100%; height: auto; display: block; border-radius: 10px; }
.nlf-three figcaption { text-align: center; font-size: 13px; margin-top: 7px; opacity: .72; }
.nlf-stats-wide div { padding: 16px 12px; }
.nlf-stats-wide strong { font-size: 26px; }
.nlf-stats-wide span { font-size: 13.5px; }
.nlf-stats { display: grid; grid-template-columns: repeat(3, 1fr); gap: 10px; margin: 4px 0 14px; }
.nlf-stats div { background: rgba(165,130,90,.12); border-radius: 10px; padding: 12px 10px; text-align: center; }
.nlf-stats strong { display: block; font-size: 22px; color: #8a6a45; line-height: 1.1; }
.nlf-stats span { display: block; font-size: 12.5px; margin-top: 4px; }
.nlf-mini { display: grid; grid-template-columns: 1fr 1fr; gap: 12px; }
.nlf-mini figure { margin: 0; }
.nlf-mini img { width: 100%; height: auto; display: block; border-radius: 10px; }
.nlf-mini figcaption { font-size: 12.5px; opacity: .7; text-align: center; margin-top: 5px; }
.nlf-strip { display: flex; gap: 10px; overflow-x: auto; margin-top: 16px; padding-bottom: 4px; -webkit-overflow-scrolling: touch; }
.nlf-strip figure { flex: 0 0 118px; margin: 0; }
.nlf-strip img { width: 100%; height: auto; display: block; border-radius: 10px; }
.nlf-ph { display: flex; align-items: center; justify-content: center; min-height: 200px; background: #ece0cf; border-radius: 12px; color: #8a6a45; font-size: 14px; text-align: center; padding: 12px; }
@media (max-width: 820px) {
  .nlf-sec { padding: 22px 0; }
  .nlf-wrap { padding-left: 0; padding-right: 0; }
  .nlf-three { grid-template-columns: 1fr; gap: 14px; }
  .nlf-h2 { font-size: 22px; }
  .nlf-row { grid-template-columns: 1fr; gap: 18px; }
  .nlf-row .nlf-media { order: -1; }
  .nlf-stats { grid-template-columns: repeat(3, 1fr); }
}

/* kratek opis izdelka: kljukice namesto pikic (kot pri udlagi proti hrkanju) */
.woocommerce-product-details__short-description ul,
.woocommerce div.product .woocommerce-product-details__short-description ul {
  list-style: none !important; margin: 8px 0 14px !important; padding-left: 0 !important; }
.woocommerce-product-details__short-description ul li,
.woocommerce div.product .woocommerce-product-details__short-description ul li {
  list-style: none !important; list-style-type: none !important; padding-left: 24px !important;
  text-indent: -24px !important; margin-left: 0 !important; line-height: 1.55 !important; margin-bottom: 8px !important; }
.woocommerce-product-details__short-description ul li::marker { content: "" !important; }
.woocommerce-product-details__short-description ul li::before { content: none !important; }
.woocommerce-product-details__short-description .nlf-tick {
  display: inline-block !important; width: 24px !important; text-indent: 0 !important;
  color: #a5825a !important; font-weight: 800 !important; }
/* slika naj bo poravnana na rob kontejnerja, ne na sredino stolpca */
.nlf-sec .nlf-lead-copy { max-width: 820px; margin: 0 auto 22px !important; text-align: center; }
.nlf-sec .nlf-lead-copy p { margin-left: auto !important; margin-right: auto !important; }
.nlf-sec .nlf-lead-copy h2 { text-align: center; }
.nlf-sub { font-size: 15px; opacity: .8; margin: -4px 0 20px; }
.nlf-tl { list-style: none; margin: 0; padding: 0 0 0 26px; position: relative; }
.nlf-tl:before { content: ""; position: absolute; left: 5px; top: 8px; bottom: 8px; width: 2px; background: #e0cdb4; }
.nlf-tl li { position: relative; margin: 0 0 22px; }
.nlf-tl li:last-child { margin-bottom: 0; }
.nlf-tl li:before { content: ""; position: absolute; left: -26px; top: 7px; width: 12px; height: 12px;
  border-radius: 50%; background: #8a6a45; box-shadow: 0 0 0 4px #fff; }
.nlf-tl-badge { display: inline-block; background: #efe3d3; color: #6b5334; font-size: 12.5px; font-weight: 700;
  padding: 4px 10px; border-radius: 999px; margin-right: 10px; vertical-align: middle; }
.nlf-tl-h { font-size: 19px; font-weight: 700; vertical-align: middle; }
.nlf-tl li p { font-size: 14.8px; line-height: 1.6; margin: 8px 0 0 !important; opacity: .9; }
@media (max-width: 820px) { .nlf-tl-badge { display: block; margin: 0 0 6px; } }
.nlf-stats-copy, .nlf-stats-copy .nlf-h2, .nlf-stats-copy .nlf-sub,
.nlf-stats-copy .nlf-note-sm { text-align: left !important; }
.nlf-stats-copy .nlf-h2 em { font-style: italic; font-weight: 600; }
.nlf-figs { list-style: none; margin: 22px 0 12px; padding: 0; text-align: left; }
.nlf-figs li { display: flex; align-items: center; gap: 12px; padding: 14px 0; border-bottom: 1px solid #e8ddcd; }
.nlf-figs li:first-child { border-top: 1px solid #e8ddcd; }
.nlf-fig-ico { flex: 0 0 30px; width: 30px; height: 30px; border-radius: 50%; background: #2a2118; color: #fff;
  display: flex; align-items: center; justify-content: center; font-size: 15px; font-weight: 700; }
.nlf-fig-num { flex: 0 0 auto; font-size: 27px; font-weight: 800; letter-spacing: -.02em; }
.nlf-fig-txt { font-size: 14.6px; line-height: 1.45; }
.nlf-note-sm { font-size: 13px; opacity: .7; font-style: italic; margin: 0 !important; }
.nlf-cmp { width: 100%; border-collapse: separate; border-spacing: 0; max-width: 900px; margin: 0 auto;
  background: #fff; border-radius: 14px; overflow: hidden; box-shadow: 0 1px 3px rgba(0,0,0,.07); }
.nlf-cmp th, .nlf-cmp td { padding: 15px 18px; text-align: center; font-size: 15px; border-bottom: 1px solid #efe9e0; }
.nlf-cmp td:first-child, .nlf-cmp th:first-child { text-align: left; font-weight: 600; }
.nlf-cmp thead th { font-size: 13px; text-transform: uppercase; letter-spacing: .1em; color: #6b625c; background: #faf7f3; }
.nlf-cmp .nlf-cmp-us { background: #fbf5ec; }
.nlf-cmp thead th.nlf-cmp-us { color: #2a2118; font-weight: 800; font-size: 15px; letter-spacing: .04em; }
.nlf-cmp tbody tr:last-child td { border-bottom: 0; }
.nlf-yes { color: #1e8f4e; font-weight: 800; font-size: 18px; }
.nlf-no { color: #b9b2a9; font-weight: 700; font-size: 17px; }
@media (max-width: 820px) {
  .nlf-cmp th, .nlf-cmp td { padding: 12px 10px; font-size: 13.5px; }
  .nlf-fig-num { font-size: 22px; }
}
</style>
