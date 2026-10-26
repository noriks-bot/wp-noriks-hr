<?php
/**
 * product-bottom: NORIKS Brassiere — grudnjak bez zica s prirodnim podizanjem (orto-brassiere).
 * Original: luveon.com/products/brassiere-luveon — vsebina in vrstni red 1:1 z originalom,
 * oblika po NORIKS stilu (predloga why-hands.php / why-bratank.php):
 *   1) Recenzije (preprosta mreza kartic, brez drsnika)
 *   2) Kako osigurava savrsenu potporu? (3 kartice originala -> 3 vrstice slika ob besedilu, strani in ozadja se izmenjujejo)
 *   3) Pronadite svoju velicinu (originalov "Trouvez votre taille en 5 secondes" — koraki + tablica XS-5XL 1:1)
 *   4) Sastav i njega (originalov akordeon "Composition et conseils d'entretien": 90 % poliamid / 10 % elastan, 30 °C)
 *   5) NORIKS pogoji (30 dana za povrat, besplatna dostava iznad 70 EUR)
 * "Nous avons ete vu dans" (logotipi medija) je izpuscen — trgovinski modul.
 * FAQ originala je v reviews.php ($brassiere_faq), mnenja v auto_reviews/HR_brassiere.php.
 * Slike: img/brassiere/ (original, brez napisov in logotipa).
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$nbs      = get_template_directory_uri() . '/img/brassiere/';
$nbs_path = get_template_directory() . '/img/brassiere/';
$nbs_img  = function( $file, $alt, $cls = '' ) use ( $nbs, $nbs_path ) {
  if ( ! file_exists( $nbs_path . $file ) ) { return ''; }
  return '<img src="' . esc_url( $nbs . $file ) . '" alt="' . esc_attr( $alt ) . '"' . ( $cls ? ' class="' . esc_attr( $cls ) . '"' : '' ) . ' loading="eager">';
};

/* Mnenja 1:1 z originala (ime, leta, kraj ostanejo kot na originalu). */
$nbs_reviews = array(
  array( 'foto' => 'bs-rv-1.webp', 'ime' => 'Louise, 32 godine, Limoges',
    'naslov' => 'Apsolutna udobnost',
    'tekst'  => 'Nisam mislila da grudnjak bez žice može ovako dobro držati. Savršeno prianja uz grudi i leđa me više uopće ne bole.' ),
  array( 'foto' => 'bs-rv-2.webp', 'ime' => 'Claire, 42 godine, Perpignan',
    'naslov' => 'Jako zadovoljna',
    'tekst'  => 'Super ugodan za nošenje, ne ostavlja tragove, nosim ga cijeli dan bez ikakve nelagode. Tkanina je jako mekana, preporučujem 100 %.' ),
  array( 'foto' => 'bs-rv-3.webp', 'ime' => 'Marion, 34 godine, Nice',
    'naslov' => 'Dobra potpora i lijep izgled',
    'tekst'  => 'Potpora je odlična čak i za velike grudi. Ne pomiče se, ni nakon pranja. Uzela sam još jedan!' ),
  array( 'foto' => 'bs-rv-4.webp', 'ime' => 'Laurence, 43 godine, Pariz',
    'naslov' => 'Tako udoban!',
    'tekst'  => 'Kad ga obučeš, potpuno zaboraviš na njega. Naramenice ne padaju i ništa ne smeta. Postao mi je najdraži.' ),
  array( 'foto' => '', 'ime' => 'Nathalie, 32 godine, Poitiers',
    'naslov' => 'Napokon potpora koja ne steže',
    'tekst'  => 'Teško podnosim žice, a ovaj je savršen. Potpora bez boli, osjećaj lagan i prirodan.' ),
  array( 'foto' => '', 'ime' => 'Solène, 43 godine, Rennes',
    'naslov' => 'Savršen za svaki dan',
    'tekst'  => 'Nosim ga i na poslu i kod kuće. Tkanina diše i ostaje na mjestu čak i ispod uske majice.' ),
  array( 'foto' => '', 'ime' => 'Laure, 39 godina, Dijon',
    'naslov' => 'Ugodno iznenađenje',
    'tekst'  => 'Sumnjala sam prije nego što sam ga probala, ali rezultat je odličan. Grudi su dobro poduprte, čvršće, bez ikakve boli.' ),
  array( 'foto' => '', 'ime' => 'Pauline, 56 godina, Strasbourg',
    'naslov' => 'Dobar omjer cijene i kvalitete',
    'tekst'  => 'Iskreno, za ovu cijenu to nisam očekivala. Odlična potpora, ugodan materijal, brza dostava.' ),
  array( 'foto' => '', 'ime' => 'Cathy, 32 godine, Marseille',
    'naslov' => 'Dobar proizvod',
    'tekst'  => 'Vrlo ugodan za nošenje, osjeti se kvaliteta tkanine. Samo bih voljela malo više potpore sa strane, ali inače savršeno.' ),
);

/* 3 kartice originala; naslov kartice = naslov vrstice, besedilo iz opisa izdelka (meta.php) in FAQ. */
$nbs_rows = array(
  array( 'slika' => 'bs-k1-tkanina.webp', 'ikona' => 'bs-k1-ikona.webp', 'oznaka' => 'Tkanina',
    'naslov' => 'Rastezljiva tkanina <em>koja oblikuje i nježno podiže.</em>',
    'tekst'  => array( 'Rastezljiva, oblikujuća tkanina nježno podiže grudi, bez push-upa i bez stezanja.',
                       'Kroj prati prirodan oblik grudi: ne spljošti ih kao klasični sportski top i ne ostavlja prazan prostor.' ),
    'big'    => 'Bešavna tkanina ne vidi se ni ispod uske odjeće.' ),
  array( 'slika' => 'bs-k2-traka.webp', 'ikona' => 'bs-k2-ikona.webp', 'oznaka' => 'Donja traka',
    'naslov' => 'Donja potporna traka <em>koja stabilizira bez stezanja.</em>',
    'tekst'  => array( 'Široka donja potporna traka stabilizira grudi bez pritiska i ne smota se ispod grudi.',
                       'Za razliku od modela koji se podižu ili smotaju, osigurava stabilnu potporu bez nelagode i bez stalnog namještanja.' ),
    'big'    => 'Ostaje na mjestu cijeli dan.' ),
  array( 'slika' => 'bs-k3-struktura.webp', 'ikona' => 'bs-k3-ikona.webp', 'oznaka' => 'Struktura',
    'naslov' => 'Nevidljiva struktura <em>koja raspoređuje težinu</em> bez žica i push-upa.',
    'tekst'  => array( 'Nevidljiva unutarnja struktura ravnomjerno raspoređuje težinu grudi, pa grudnjak drži kao model sa žicama, ali bez bolova, tragova i stalnog namještanja.',
                       'Široke i podesive naramenice ne urezuju se u ramena.' ),
    'big'    => 'Zato odgovara i za veće grudi.' ),
);

$nbs_stars = '<span class="nbs-stars" aria-label="5 od 5 zvjezdica">' . str_repeat( '<i>★</i>', 5 ) . '</span>';
?>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap">

<!-- 1) RECENZIJE — preprosta mreza -->
<section class="nbs-sec nbs-sec--reviews">
  <div class="nbs-wrap">
    <p class="nbs-kicker nbs-c">Recenzije kupaca</p>
    <h2 class="nbs-h2 nbs-c">Recenzije naših <em>NORIKS grudnjaka</em></h2>
    <div class="nbs-revs">
      <?php foreach ( $nbs_reviews as $r ) : ?>
      <article class="nbs-rv">
        <?php echo $nbs_stars; ?>
        <p class="nbs-rv__txt"><strong><?php echo esc_html( $r['naslov'] ); ?></strong><br><?php echo esc_html( $r['tekst'] ); ?></p>
        <div class="nbs-rv__bottom">
          <?php if ( $r['foto'] ) : ?><span class="nbs-rv__photo"><?php echo $nbs_img( $r['foto'], 'Fotografija kupca — ' . $r['ime'] ); ?></span><?php endif; ?>
          <span class="nbs-rv__name"><?php echo esc_html( $r['ime'] ); ?></span>
        </div>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- 2) KAKO OSIGURAVA SAVRŠENU POTPORU? — slika ob besedilu, strani in ozadja se izmenjujejo -->
<?php foreach ( $nbs_rows as $i => $row ) : ?>
<section class="nbs-sec<?php echo ( 0 === $i % 2 ) ? ' nbs-tint' : ''; ?>">
  <div class="nbs-wrap">
    <?php if ( 0 === $i ) : ?><h2 class="nbs-h2 nbs-c nbs-h2--top">Kako osigurava <em>savršenu potporu?</em></h2><?php endif; ?>
    <div class="nbs-row2<?php echo ( 1 === $i % 2 ) ? ' nbs-row2--rev' : ''; ?>">
      <div class="nbs-media"><?php echo $nbs_img( $row['slika'], wp_strip_all_tags( $row['naslov'] ) ); ?></div>
      <div class="nbs-copy">
        <p class="nbs-kicker"><span class="nbs-ico"><?php echo $nbs_img( $row['ikona'], '' ); ?></span><?php echo esc_html( $row['oznaka'] ); ?></p>
        <h3 class="nbs-h3"><?php echo wp_kses( $row['naslov'], array( 'em' => array() ) ); ?></h3>
        <?php foreach ( $row['tekst'] as $p ) : ?><p><?php echo esc_html( $p ); ?></p><?php endforeach; ?>
        <p class="nbs-big"><?php echo esc_html( $row['big'] ); ?></p>
      </div>
    </div>
  </div>
</section>
<?php endforeach; ?>

<!-- 3) PRONAĐITE SVOJU VELIČINU — kot na originalu ("Trouvez votre taille"), tablica 1:1 -->
<section class="nbs-sec">
  <div class="nbs-wrap">
    <div class="nbs-row2 nbs-row2--rev">
      <div class="nbs-copy">
        <p class="nbs-kicker">Veličina</p>
        <h2 class="nbs-h2">Pronađite svoju veličinu <em>u pet sekundi.</em></h2>
        <ol class="nbs-steps">
          <li><span class="nbs-num">1</span><div><strong>Izmjerite širinu trake.</strong> Krojačkim metrom obuhvatite trup odmah ispod grudi, položeno i pripijeno uz tijelo.</div></li>
          <li><span class="nbs-num">2</span><div><strong>Izmjerite opseg grudi.</strong> Metar vodite preko najistaknutijeg dijela grudi, bez stezanja.</div></li>
          <li><span class="nbs-num">3</span><div><strong>Pronađite svoj red u tablici.</strong> Zadnji stupac pokazuje klasičnu oznaku grudnjaka, pa možete usporediti s onim što već nosite.</div></li>
        </ol>
        <div class="nbs-table-wrap">
          <table class="nbs-size">
            <thead><tr><th scope="col">Veličina</th><th scope="col">Širina trake</th><th scope="col">Opseg grudi</th><th scope="col">Klasični ekv.</th></tr></thead>
            <tbody>
              <?php foreach ( ( function_exists( 'noriks_brassiere_sizes' ) ? noriks_brassiere_sizes() : array() ) as $nbs_r ) : ?>
              <tr><th scope="row"><?php echo esc_html( $nbs_r[0] ); ?></th>
                  <td><?php echo esc_html( $nbs_r[1] ); ?></td>
                  <td><?php echo esc_html( $nbs_r[2] ); ?></td>
                  <td><?php echo esc_html( $nbs_r[3] ); ?></td></tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
        <p class="nbs-big">Niste sigurni? Uzmite svoju uobičajenu veličinu.</p>
        <p>Bešavni materijal se rasteže i prilagođava, pa radi i kad ste između dvije veličine. Dostupne su sve veličine od XS do 5XL.</p>
      </div>
      <div class="nbs-media"><?php echo $nbs_img( 'bs-04-crna-bok.webp', 'Veličine NORIKS Brassiere — od XS do 5XL' ); ?></div>
    </div>
  </div>
</section>

<!-- 4) SASTAV I NJEGA — akordeon originala ("Composition et conseils d'entretien") kot sekcija -->
<section class="nbs-sec nbs-tint">
  <div class="nbs-wrap">
    <div class="nbs-row2">
      <div class="nbs-media"><?php echo $nbs_img( 'bs-03-crna-detalj.webp', 'Bešavna tkanina NORIKS Brassiere izbliza' ); ?></div>
      <div class="nbs-copy">
        <p class="nbs-kicker">Sastav i njega</p>
        <h2 class="nbs-h2">Tkanina koja <em>zadrži oblik.</em></h2>
        <p><strong>90 % poliamid, 10 % elastan.</strong> Mješavina koja se rasteže u svim smjerovima, diše na toplim danima i vraća se u oblik nakon nošenja.</p>
        <ul class="nbs-care">
          <li>Perite na <strong>30 °C</strong>, na programu za osjetljivo rublje.</li>
          <li>Bez omekšivača i bez izbjeljivača — oni razgrađuju elastan.</li>
          <li>Sušite na zraku, ne u sušilici i ne na radijatoru.</li>
          <li>Ne glačajte i ne čistite kemijski.</li>
        </ul>
        <p class="nbs-big">Tako elastičnost ostaje ista i nakon desetaka pranja.</p>
      </div>
    </div>
  </div>
</section>

<!-- 5) NORIKS pogoji -->
<section class="nbs-sec">
  <div class="nbs-wrap nbs-c">
    <h2 class="nbs-h2 nbs-c">Isprobajte ga <em>bez brige.</em></h2>
    <p class="nbs-promise">Nosite ga, operite ga, provjerite kako stoji ispod odjeće. Ako nije za vas, imate <strong>30 dana za povrat novca</strong>.</p>
    <p class="nbs-trust"><span>30 dana za povrat</span><span>Besplatna dostava iznad 70 €</span><span>Plaćanje pouzećem</span></p>
  </div>
</section>


<style>
/* NORIKS stil (predloga why-hands.php): oznaka + naslov z lezecim poudarkom, slika ob besedilu, izmenjujoca ozadja */
.nbs-sec { padding: 60px 0; font-family: 'Poppins', system-ui, -apple-system, 'Segoe UI', Roboto, Arial, sans-serif; color: #121212; background: #fff; }
.nbs-sec * { box-sizing: border-box; }
.nbs-sec--reviews { padding-top: 24px; }
.nbs-tint { background: #f7efee; }
.nbs-wrap { width: 100%; max-width: 1200px; margin: 0 auto; padding: 0 24px; }
.nbs-c { text-align: center; }
.nbs-sec h2, .nbs-sec h3 { font-family: inherit; text-transform: none; letter-spacing: 0; }
.nbs-kicker, .nbs-copy p.nbs-kicker { display: flex; align-items: center; gap: 10px; font-size: 12.5px; line-height: 1.4; font-weight: 700; letter-spacing: .14em; text-transform: uppercase; color: #a65a5d; margin: 0 0 10px; }
.nbs-kicker.nbs-c { justify-content: center; }
.nbs-h2 { font-weight: 700; font-size: clamp(25px, 3.1vw, 36px); line-height: 1.2; margin: 0 0 28px; color: #121212; }
.nbs-h2--top { margin-bottom: 40px; }
.nbs-h2 em, .nbs-h3 em { font-style: italic; color: #a65a5d; }
.nbs-h3 { font-weight: 700; font-size: clamp(22px, 2.6vw, 30px); line-height: 1.25; margin: 0 0 16px; color: #121212; }
.nbs-sec img { display: block; width: 100%; height: auto; }

/* 1) recenzije — mreza */
.nbs-revs { display: grid; grid-template-columns: repeat(3, minmax(0, 1fr)); gap: 20px; }
.nbs-rv { display: flex; flex-direction: column; background: #fff; border: 1px solid #eadcdb; border-radius: 10px; padding: 22px 22px 18px; }
.nbs-stars { display: inline-flex; gap: 3px; margin: 0 0 12px; }
.nbs-stars i { font-style: normal; width: 22px; height: 22px; background: #00b67a; color: #fff; font-size: 15px; line-height: 22px; text-align: center; }
.nbs-rv__txt { font-size: 15px; line-height: 1.65; color: #2b2526; margin: 0 0 16px; flex: 1 1 auto; }
.nbs-rv__txt strong { font-weight: 600; color: #121212; }
.nbs-rv__bottom { display: flex; align-items: center; gap: 12px; border-top: 1px solid #eadcdb; padding-top: 14px; }
.nbs-rv__photo { flex: 0 0 56px; width: 56px; height: 56px; border-radius: 8px; overflow: hidden; }
.nbs-sec .nbs-rv__photo img { width: 100%; height: 100%; object-fit: cover; }
.nbs-rv__name { font-size: 13.5px; font-weight: 500; color: #6b5f61; }

/* 2) slika ob besedilu */
.nbs-row2 { display: grid; grid-template-columns: 1fr 1fr; gap: 56px; align-items: center; }
.nbs-row2--rev .nbs-media { order: 2; }
.nbs-media img { aspect-ratio: 4 / 5; object-fit: cover; box-shadow: 0 2px 4px rgba(40,20,20,.05), 0 14px 40px rgba(40,20,20,.10); }
.nbs-ico { flex: 0 0 40px; width: 40px; height: 40px; border-radius: 10px; background: #fff; padding: 4px; box-shadow: 0 1px 4px rgba(0,0,0,.10); }
.nbs-sec .nbs-ico img { width: 100%; height: 100%; object-fit: contain; }
.nbs-copy p { font-size: 16px; line-height: 1.7; color: #4d4446; margin: 0 0 14px; }
.nbs-copy p.nbs-big { font-size: 19px; font-weight: 700; color: #121212; line-height: 1.45; margin-top: 6px; }

/* 3) velicine — koraki in tablica */
.nbs-steps { list-style: none; margin: 0 0 22px; padding: 0; }
.nbs-steps li { display: flex; gap: 14px; align-items: flex-start; margin: 0 0 14px; font-size: 16px; line-height: 1.65; color: #4d4446; }
.nbs-num { flex: 0 0 28px; width: 28px; height: 28px; border-radius: 50%; background: #a65a5d; color: #fff; font-size: 14px; font-weight: 700; line-height: 28px; text-align: center; }
.nbs-steps strong { color: #121212; font-weight: 600; }
.nbs-table-wrap { overflow-x: auto; margin: 0 0 18px; }
.nbs-size { width: 100%; border-collapse: collapse; font-size: 15px; background: #fff; border: 1px solid #eadcdb; border-radius: 10px; overflow: hidden; }
.nbs-size th, .nbs-size td { padding: 10px 12px; text-align: left; border-bottom: 1px solid #f1e6e5; white-space: nowrap; }
.nbs-size thead th { background: #f7efee; font-size: 12.5px; font-weight: 700; letter-spacing: .06em; text-transform: uppercase; color: #6b5f61; }
.nbs-size tbody th { font-weight: 700; color: #121212; }
.nbs-size tbody tr:last-child th, .nbs-size tbody tr:last-child td { border-bottom: 0; }

/* 4) njega */
.nbs-care { list-style: none; margin: 0 0 16px; padding: 0; }
.nbs-care li { position: relative; padding-left: 26px; margin: 0 0 10px; font-size: 16px; line-height: 1.65; color: #4d4446; }
.nbs-care li::before { content: "✓"; position: absolute; left: 0; top: 0; color: #a65a5d; font-weight: 700; }

/* 5) NORIKS pogoji */
.nbs-promise { max-width: 760px; margin: 0 auto 22px; font-size: 17px; line-height: 1.7; color: #4d4446; }
.nbs-trust { display: flex; flex-wrap: wrap; justify-content: center; gap: 10px 26px; margin: 0; font-size: 14px; font-weight: 600; color: #6b5f61; }
.nbs-trust span { position: relative; padding-left: 20px; }
.nbs-trust span::before { content: "✓"; position: absolute; left: 0; color: #a65a5d; }

@media (max-width: 989px) {
  .nbs-revs { grid-template-columns: repeat(2, minmax(0, 1fr)); }
  .nbs-row2 { gap: 32px; }
}
@media (max-width: 749px) {
  .nbs-sec { padding: 42px 0; }
  .nbs-sec--reviews { padding-top: 16px; }
  .nbs-wrap { padding: 0 16px; }
  .nbs-revs { grid-template-columns: 1fr; gap: 14px; }
  .nbs-row2 { grid-template-columns: 1fr; gap: 24px; }
  .nbs-row2--rev .nbs-media { order: 0; }
  .nbs-size { font-size: 13.5px; }
  .nbs-size th, .nbs-size td { padding: 8px 9px; }
  .nbs-h2--top { margin-bottom: 28px; }
}

/* galerija izdelka: sličice največ v 2 vrstah (5 na vrsto), ostale slike so dosegljive z drsenjem glavne slike */
.product_cat-orto-brassiere .flex-control-thumbs li:nth-child(n+11) { display: none !important; }

/* kratek opis izdelka: zelene kljukice namesto pik (REST pobrise inline slog) */
.woocommerce div.product .woocommerce-product-details__short-description ul,
.woocommerce-product-details__short-description ul {
  list-style: none !important; margin: 10px 0 14px !important; padding-left: 0 !important; }
.woocommerce div.product .woocommerce-product-details__short-description ul li,
.woocommerce-product-details__short-description ul li {
  list-style: none !important; text-indent: 0 !important; margin: 0 0 7px !important;
  line-height: 1.45 !important; font-size: 15.5px !important;
  display: block !important; position: relative !important; padding-left: 31px !important; }
.woocommerce-product-details__short-description ul li::marker { content: "" !important; }
.woocommerce-product-details__short-description ul li::before { content: none !important; }
.woocommerce-product-details__short-description .nbs-tick {
  position: absolute !important; left: 0 !important; top: 1px !important;
  width: 21px; height: 21px; border-radius: 50%;
  background: #2f9e5f !important; color: #fff !important;
  font-size: 12px !important; font-weight: 800 !important; line-height: 21px !important;
  text-align: center !important; display: inline-block !important; }
.woocommerce-product-details__short-description p:first-of-type { font-size: 16px; line-height: 1.55; }
</style>
