<?php
/**
 * product-bottom: NORIKS DogBed — premium ortopedski krevet za pse (orto-dogbed).
 * Original: doulia-store.com/products/lit-orthopedique-pack-duo (FR) — vsebina in vrstni red 1:1 z originalom, oblika po
 * NORIKS stilu (predloga why-slingbag.php / why-hands.php), privzeta topla rjava paleta NORIKS (#a9683f):
 *   1) 3 prednosti pod nakupno škatlo (Soutien orthopédique / Confort moelleux / Entretien pratique) + mnenje kupca
 *                                                                  -> Ortopedska potpora, mekana udobnost, praktično održavanje (slika ob besedilu)
 *   2) image with text "Matériaux de Haute Qualité" (animacija)    -> Materijali visoke kvalitete (animacija ob besedilu)
 *   3) image with text "Confort avec Appui-Tête Surélevé" (animacija) -> Udobnost s povišenim naslonom za glavu (animacija ob besedilu)
 *   4) comparison table "Pourquoi choisir Lit canapé orthopédique…" -> Zašto odabrati ortopedski krevet-sofu (tabela NORIKS / ostali ob sliki)
 *   5) "Avis clients vérifiés" 4.9 | 1774 avis, 5 mnenj s fotografijami -> Provjerene recenzije kupaca: 1081, ocena 4,9 + 5 mnenj
 *      (fotografije obrezane brez etiket znamke konkurenta)
 *   6) "Plus de 2 500 clients conquis" (6 objav)                    -> Više od 2500 oduševljenih kupaca (6 objav)
 *   7) "Experts en service client" (30 jours)                       -> Stručnjaci za korisničku podršku (slika ob besedilu, po NORIKS pogojih)
 * Izpusceno: pasica "Livraison rapide OFFERTE", okvir "OFFRE PACK DUO" z odstevalnikom (ponudbi 1x/2x sta v nakupni skatli),
 * "30 nuits d'essai / Livraison offerte / Garantie 30 jours" (velja NORIKS: 30 dana za povrat, besplatna dostava iznad 70 €),
 * "ILS EN PARLENT" (logotipi medijev), e-posta in delovni cas podpore konkurenta, noga trgovine.
 * FAQ (5) je v reviews.php ($dogbed_faq), mnenja v auto_reviews/HR_dogbed.php, opis/nega/tablica velicin v standardnih
 * harmonikah (meta.php) in modalu (size-chart-dogbed.php). Slike: img/dogbed/ (ndb-…).
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$ndb      = get_template_directory_uri() . '/img/dogbed/';
$ndb_path = get_template_directory() . '/img/dogbed/';
$ndb_img  = function( $file, $alt, $cls = '' ) use ( $ndb, $ndb_path ) {
  if ( ! $file || ! file_exists( $ndb_path . $file ) ) { return ''; }
  return '<img src="' . esc_url( $ndb . $file ) . '" alt="' . esc_attr( $alt ) . '" loading="eager"' . ( $cls ? ' class="' . esc_attr( $cls ) . '"' : '' ) . '>';
};
$ndb_stars = function( $n ) {
  $n = max( 0, min( 5, (int) $n ) );
  return '<span class="ndb-stars" aria-label="' . $n . ' od 5 zvjezdica">' . str_repeat( '★', $n ) . '<span class="ndb-stars__off">' . str_repeat( '★', 5 - $n ) . '</span></span>';
};

/* 4) usporedba (stupci originala: znamka / Autres -> NORIKS / ostali) */
$ndb_cmp = array(
  'Potpora zglobovima',
  'Mekana udobnost',
  'Navlaka koja se pere',
  'Povišeni naslon za glavu',
  'Otporna tkanina',
  'Umirujući odmor',
);

/* 5) provjerene recenzije s fotografijama (1774 -> po NORIKS 1081, ocena 4,9 kot na originalu); imena lokalizirana */
$ndb_rv = array(
  array( 'ndb-rv-1.webp', 'Lana R.', 'Dobra kvaliteta, udoban i jako lijep. Moja ga je kujica odmah prihvatila i više ga ne napušta!' ),
  array( 'ndb-rv-2.webp', 'Olivera G.', 'Stigao je brzo i u skladu s mojim očekivanjima. Moj ga je pas prihvatio već prvog dana.' ),
  array( 'ndb-rv-3.webp', 'Gordana T.', 'Vrlo dobra kvaliteta, udoban je i lako se čisti. Moj se pas obožava odmarati na njemu svaki dan.' ),
  array( 'ndb-rv-4.webp', 'Tea T.', 'Vrlo dobra kvaliteta i besprijekorna usluga. Pouzdan i udoban proizvod za mog psa.' ),
  array( 'ndb-rv-5.webp', 'Katarina T.', 'Vrlo mekan i udoban. Moj pas obožava svoju novu sofu, odlična kupnja.' ),
);

/* 6) objave kupaca (6, kot na originalu) */
$ndb_fb = array(
  array( 'ndb-fb-1.webp', 'Sofija Marić', 'Prije 3 sata', 'Vrlo mekan i udoban, moj pas više ne silazi sa svog kreveta. Navlaka koja se pere stvarno je praktična u svakodnevici.', '1,2 tis.', '34 komentara' ),
  array( 'ndb-fb-2.webp', 'Luka Bernardić', 'Prije 5 sati', 'Super kvaliteta i baš mekan. Moj pas spava puno bolje otkad ga ima.', '987', '21 komentar' ),
  array( 'ndb-fb-3.webp', 'Kamila Lovrić', 'Prije 7 sati', 'Savršen za zglobove, vidi se da je opušteniji. Tkanina je čvrsta i ugodna.', '1 tis.', '19 komentara' ),
  array( 'ndb-fb-4.webp', 'Julija Golub', 'Prije 9 sati', 'Lako se čisti i vrlo je udoban. Prihvatio ga je već prvog dana.', '842', '14 komentara' ),
  array( 'ndb-fb-5.webp', 'Tomislav Dujmović', 'Prije 11 sati', 'Vrlo dobra potpora i dobro punjenje. Idealan za duga popodnevna drijemanja.', '913', '17 komentara' ),
  array( 'ndb-fb-6.webp', 'Lora Petrić', 'Prije 13 sati', 'Lijepa završna obrada i stvarno ugodan. Moj se pas obožava sklupčati na njemu cijeli dan.', '1,1 tis.', '28 komentara' ),
);

$ndb_n = 0; // števec sekcij za izmenična ozadja
$ndb_cls = function() use ( &$ndb_n ) { $ndb_n++; return ( $ndb_n % 2 ) ? ' ndb-tint' : ''; };
?>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap">

<!-- 1) ORTOPEDSKA POTPORA / MEKANA UDOBNOST / PRAKTIČNO ODRŽAVANJE (3 prednosti pod nakupno škatlo) — slika ob besedilu -->
<section class="ndb-sec<?php echo $ndb_cls(); ?>">
  <div class="ndb-wrap">
    <div class="ndb-row2">
      <div class="ndb-media"><?php echo $ndb_img( 'ndb-g03-bez.webp', 'Pas spava na bež ortopedskom krevetu NORIKS DogBed u dnevnoj sobi' ); ?></div>
      <div class="ndb-copy">
        <p class="ndb-kicker">NORIKS DogBed</p>
        <h2 class="ndb-h2">Premium ortopedski krevet za pse <em>s navlakom koja se pere</em></h2>
        <ul class="ndb-ticks">
          <li><strong>Ortopedska potpora</strong><span>Prilagođen kralježnici psa, ovaj krevet pomaže smanjiti pritisak na zglobove za udobniji odmor.</span></li>
          <li><strong>Mekana udobnost</strong><span>Debela i mekana tkanina od umjetne janjeće vune stvara umirujući kutak, savršen za pse koji se vole sklupčati.</span></li>
          <li><strong>Praktično održavanje</strong><span>Navlaka koja se skida i pere u perilici omogućuje da ležaj jednostavno održavate čistim, dan za danom.</span></li>
        </ul>
        <div class="ndb-quote">
          <p class="ndb-quote__txt">„Vrlo mekan i stvarno udoban za mog psa. Navlaka koja se pere pravi je plus u svakodnevici.”</p>
          <p class="ndb-quote__name">Franjo M. <span class="ndb-ok">✓ Potvrđeni kupac</span></p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- 2) MATERIJALI VISOKE KVALITETE ("Matériaux de Haute Qualité") — animacija ob besedilu -->
<section class="ndb-sec<?php echo $ndb_cls(); ?>">
  <div class="ndb-wrap">
    <div class="ndb-row2 ndb-row2--rev">
      <div class="ndb-media"><?php echo $ndb_img( 'ndb-s02-materijal.webp', 'Ruka pritišće mekanu tkaninu od umjetne janjeće vune kreveta NORIKS DogBed', 'ndb-img--anim' ); ?></div>
      <div class="ndb-copy">
        <p class="ndb-kicker">Materijal</p>
        <h2 class="ndb-h2">Materijali <em>visoke kvalitete</em></h2>
        <p>Izrađen od <strong>debele i izdržljive tkanine od umjetne janjeće vune</strong>, ovaj krevet u obliku sofe pruža izvanrednu udobnost i otporan je na stvaranje kuglica – idealan za pse koji vole grebati ili se sklupčati.</p>
        <p class="ndb-big">Mekana udobnost koja traje.</p>
      </div>
    </div>
  </div>
</section>

<!-- 3) UDOBNOST S POVIŠENIM NASLONOM ZA GLAVU ("Confort avec Appui-Tête Surélevé") — animacija ob besedilu -->
<section class="ndb-sec<?php echo $ndb_cls(); ?>">
  <div class="ndb-wrap">
    <div class="ndb-row2">
      <div class="ndb-media"><?php echo $ndb_img( 'ndb-s03-naslon.webp', 'Pas se penje na krevet NORIKS DogBed i liježe glavom na povišeni naslon', 'ndb-img--anim' ); ?></div>
      <div class="ndb-copy">
        <p class="ndb-kicker">Povišeni naslon za glavu</p>
        <h2 class="ndb-h2">Udobnost s <em>povišenim naslonom za glavu</em></h2>
        <p>Opremljen s <strong>dva naslona za ruke i jastukom</strong>, ovaj je krevet osmišljen da podupire vrat vašeg psa dok leži na boku ispruženih šapa, kako bi se mogao potpuno opustiti.</p>
        <p class="ndb-big">Nježna potpora zglobovima.</p>
      </div>
    </div>
  </div>
</section>

<!-- 4) ZAŠTO ODABRATI ORTOPEDSKI KREVET-SOFU (comparison table) — tabela ob sliki -->
<section class="ndb-sec<?php echo $ndb_cls(); ?>">
  <div class="ndb-wrap">
    <div class="ndb-row2 ndb-row2--rev">
      <div class="ndb-media"><?php echo $ndb_img( 'ndb-g01-tamnosiva.webp', 'Pas se odmara na tamnosivom ortopedskom krevetu-sofi NORIKS DogBed' ); ?></div>
      <div class="ndb-copy">
        <p class="ndb-kicker">Usporedba</p>
        <h2 class="ndb-h2">Zašto odabrati <em>ortopedski krevet-sofu za pse</em></h2>
        <div class="ndb-cmp" role="table" aria-label="Usporedba NORIKS DogBed i drugih kreveta za pse">
          <div class="ndb-cmp__row ndb-cmp__head" role="row">
            <span role="columnheader">&nbsp;</span>
            <span role="columnheader" class="ndb-cmp__us">NORIKS</span>
            <span role="columnheader">Ostali</span>
          </div>
          <?php foreach ( $ndb_cmp as $r ) : ?>
          <div class="ndb-cmp__row" role="row">
            <span role="cell" class="ndb-cmp__lbl"><?php echo esc_html( $r ); ?></span>
            <span role="cell" class="ndb-cmp__us"><span class="ndb-yes" aria-label="da">✓</span></span>
            <span role="cell"><span class="ndb-no" aria-label="ne">✕</span></span>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- 5) PROVJERENE RECENZIJE KUPACA ("Avis clients vérifiés" 1774 -> 1081 po NORIKS, ocena 4,9) — 5 mnenj s fotografijami -->
<section class="ndb-sec<?php echo $ndb_cls(); ?>">
  <div class="ndb-wrap">
    <p class="ndb-kicker ndb-c">Recenzije kupaca</p>
    <h2 class="ndb-h2 ndb-c">Provjerene <em>recenzije kupaca</em></h2>
    <div class="ndb-score">
      <span class="ndb-score__num">4,9</span>
      <?php echo $ndb_stars( 5 ); ?>
      <span class="ndb-score__txt"><strong>1081</strong> recenzija • Zadovoljni kupci s fotografijama</span>
    </div>
    <div class="ndb-photos">
      <?php foreach ( $ndb_rv as $r ) : ?>
      <article class="ndb-pcard">
        <div class="ndb-pcard__img"><?php echo $ndb_img( $r[0], 'Fotografija kupca: pas na krevetu NORIKS DogBed' ); ?></div>
        <div class="ndb-pcard__body">
          <?php echo $ndb_stars( 5 ); ?>
          <p class="ndb-pcard__name"><?php echo esc_html( $r[1] ); ?> <span class="ndb-ok">✓ Potvrđeno</span></p>
          <p class="ndb-pcard__txt"><?php echo esc_html( $r[2] ); ?></p>
        </div>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- 6) VIŠE OD 2500 ODUŠEVLJENIH KUPACA ("Plus de 2 500 clients conquis") — 6 objav -->
<section class="ndb-sec<?php echo $ndb_cls(); ?>">
  <div class="ndb-wrap">
    <p class="ndb-kicker ndb-c">Iskustva kupaca</p>
    <h2 class="ndb-h2 ndb-c">Više od 2500 <em>oduševljenih kupaca</em> ❤️</h2>
    <div class="ndb-posts">
      <?php foreach ( $ndb_fb as $f ) : ?>
      <article class="ndb-post">
        <div class="ndb-post__head">
          <?php echo $ndb_img( $f[0], '', 'ndb-post__av' ); ?>
          <div><p class="ndb-post__name"><?php echo esc_html( $f[1] ); ?></p><p class="ndb-post__time"><?php echo esc_html( $f[2] ); ?></p></div>
        </div>
        <p class="ndb-post__txt"><?php echo esc_html( $f[3] ); ?></p>
        <p class="ndb-post__meta"><span>👍 ❤️ <?php echo esc_html( $f[4] ); ?></span><span><?php echo esc_html( $f[5] ); ?></span></p>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- 7) STRUČNJACI ZA KORISNIČKU PODRŠKU ("Experts en service client") — slika ob besedilu, po NORIKS pogojih -->
<section class="ndb-sec<?php echo $ndb_cls(); ?>">
  <div class="ndb-wrap">
    <div class="ndb-row2">
      <div class="ndb-media"><?php echo $ndb_img( 'ndb-g02-smeda.webp', 'Pas spava na smeđem krevetu NORIKS DogBed s jastukom' ); ?></div>
      <div class="ndb-copy">
        <p class="ndb-kicker">Korisnička podrška</p>
        <h2 class="ndb-h2">Stručnjaci za <em>korisničku podršku</em></h2>
        <p>Niste <strong>100 % zadovoljni</strong> svojom narudžbom? Učinit ćemo sve što možemo da riješimo problem.</p>
        <ul class="ndb-ticks ndb-ticks--plain">
          <li><strong>Pravo na povrat u roku od 30 dana</strong></li>
          <li><strong>Besplatna dostava za narudžbe iznad 70 €</strong></li>
        </ul>
        <p class="ndb-big">Iskoristite pravo na povrat u roku od 30 dana i isprobajte ga bez rizika.</p>
      </div>
    </div>
  </div>
</section>

<style>
/* NORIKS stil (predloga why-slingbag.php / why-hands.php): oznaka + naslov z ležečim poudarkom, slika ob besedilu,
   izmenjujoča ozadja in strani. Privzeta topla rjava paleta NORIKS (#a9683f). */
.ndb-sec { padding: 60px 0; font-family: 'Poppins', system-ui, -apple-system, 'Segoe UI', Roboto, Arial, sans-serif; color: #231d19; background: #fff; }
.ndb-sec * { box-sizing: border-box; }
.ndb-tint { background: #f7f0e8; }
.ndb-wrap { width: 100%; max-width: 1200px; margin: 0 auto; padding: 0 24px; }
.ndb-c { text-align: center; }
.ndb-sec h2, .ndb-sec h3 { font-family: inherit; text-transform: none; letter-spacing: 0; }
.ndb-kicker, .ndb-copy p.ndb-kicker { font-size: 12.5px; line-height: 1.4; font-weight: 700; letter-spacing: .14em; text-transform: uppercase; color: #a9683f; margin: 0 0 10px; }
.ndb-h2 { font-weight: 700; font-size: clamp(25px, 3.1vw, 36px); line-height: 1.2; margin: 0 0 16px; color: #231d19; }
.ndb-h2 em { font-style: italic; color: #a9683f; }
.ndb-sec img { display: block; width: 100%; height: auto; }

/* slika ob besedilu */
.ndb-row2 { display: grid; grid-template-columns: 1fr 1fr; gap: 56px; align-items: center; }
.ndb-row2--rev .ndb-media { order: 2; }
.ndb-media > img { border-radius: 10px; box-shadow: 0 2px 4px rgba(40,25,15,.05), 0 14px 40px rgba(40,25,15,.10); max-width: 560px; margin: 0 auto; aspect-ratio: 1 / 1; object-fit: cover; }
.ndb-media > img.ndb-img--anim { max-width: 460px; }
.ndb-copy p { font-size: 16px; line-height: 1.7; color: #4a403a; margin: 0 0 14px; }
.ndb-copy p strong { color: #231d19; font-weight: 600; }
.ndb-sec p.ndb-big { font-size: 19px; font-weight: 700; color: #231d19; line-height: 1.45; margin-top: 6px; }
.ndb-ticks { list-style: none; margin: 4px 0 18px; padding: 0; }
.ndb-ticks li { position: relative; padding-left: 34px; margin: 0 0 14px; font-size: 15.5px; line-height: 1.6; color: #4a403a; }
.ndb-ticks li strong { display: block; color: #231d19; font-weight: 700; font-size: 16.5px; margin-bottom: 2px; }
.ndb-ticks li span { display: block; }
.ndb-ticks--plain li { margin-bottom: 8px; }
.ndb-ticks--plain li strong { font-size: 15.5px; font-weight: 600; }
.ndb-ticks li::before { content: "✓"; position: absolute; left: 0; top: 2px; width: 22px; height: 22px; border-radius: 50%; background: #a9683f; color: #fff; font-size: 12px; font-weight: 800; line-height: 22px; text-align: center; }
.ndb-quote { background: #fff; border: 1px solid #ead9c9; border-left: 4px solid #a9683f; border-radius: 10px; padding: 16px 20px; box-shadow: 0 2px 10px rgba(40,25,15,.05); }
.ndb-tint .ndb-quote { background: #fff; }
.ndb-copy p.ndb-quote__txt { font-style: italic; color: #3b322c; margin: 0 0 8px; font-size: 15.5px; }
.ndb-copy p.ndb-quote__name { font-weight: 600; color: #231d19; margin: 0; font-size: 14px; }

/* usporedba */
.ndb-cmp { margin: 8px 0 0; border-radius: 10px; overflow: hidden; border: 1px solid #ead9c9; background: #fff; }
.ndb-cmp__row { display: grid; grid-template-columns: 2fr 1fr 1fr; align-items: center; border-top: 1px solid #f0e4d8; }
.ndb-cmp__row:first-child { border-top: 0; }
.ndb-cmp__row > span { padding: 13px 8px; text-align: center; font-size: 14.5px; color: #4a403a; align-self: stretch; display: flex; align-items: center; justify-content: center; }
.ndb-cmp__row > span.ndb-cmp__lbl { justify-content: flex-start; padding-left: 16px; font-weight: 600; color: #231d19; text-align: left; }
.ndb-cmp__head > span { font-size: 12.5px; font-weight: 700; text-transform: uppercase; letter-spacing: .06em; color: #6b5f56; }
.ndb-cmp__row > span.ndb-cmp__us { background: #a9683f; color: #fff; }
.ndb-yes, .ndb-no { display: inline-block; width: 22px; height: 22px; border-radius: 50%; font-size: 12px; font-weight: 800; line-height: 22px; text-align: center; }
.ndb-yes { background: #fff; color: #a9683f; }
.ndb-no { background: #eee4da; color: #9a8f86; }

/* ocjene i mnenja s fotografijami */
.ndb-stars { color: #f2a516; letter-spacing: 1px; font-size: 15px; }
.ndb-stars__off { color: #e6ddd4; }
.ndb-score { display: flex; justify-content: center; align-items: center; gap: 12px; margin: 0 0 26px; flex-wrap: wrap; }
.ndb-score__num { font-size: 28px; font-weight: 700; color: #231d19; }
.ndb-score .ndb-stars { font-size: 20px; }
.ndb-score__txt { font-size: 14.5px; color: #6b5f56; }
.ndb-score__txt strong { color: #231d19; }
.ndb-photos { display: grid; grid-template-columns: repeat(5, minmax(0, 1fr)); gap: 16px; }
.ndb-pcard { background: #fff; border: 1px solid #ead9c9; border-radius: 10px; overflow: hidden; box-shadow: 0 2px 10px rgba(40,25,15,.05); display: flex; flex-direction: column; }
.ndb-pcard__img img { aspect-ratio: 1 / 1; object-fit: cover; }
.ndb-pcard__body { padding: 14px 15px 16px; }
.ndb-sec p.ndb-pcard__name { font-size: 14px; font-weight: 700; color: #231d19; margin: 6px 0 6px; }
.ndb-pcard__txt { font-size: 14px; line-height: 1.55; color: #3b322c; margin: 0; }
.ndb-ok { color: #2f9e5f; font-weight: 600; font-size: 12px; margin-left: 4px; font-style: normal; }

/* objave kupcev */
.ndb-posts { display: grid; grid-template-columns: repeat(3, minmax(0, 1fr)); gap: 18px; }
.ndb-post { background: #fff; border: 1px solid #ead9c9; border-radius: 10px; padding: 16px 18px; box-shadow: 0 2px 10px rgba(40,25,15,.05); display: flex; flex-direction: column; }
.ndb-post__head { display: flex; align-items: center; gap: 12px; margin-bottom: 10px; }
.ndb-sec img.ndb-post__av { width: 46px; height: 46px; border-radius: 50%; object-fit: cover; flex: 0 0 46px; }
.ndb-sec p.ndb-post__name { font-size: 15px; font-weight: 700; color: #231d19; margin: 0; line-height: 1.3; }
.ndb-sec p.ndb-post__time { font-size: 12.5px; color: #8a7a6e; margin: 0; }
.ndb-post__txt { font-size: 15px; line-height: 1.6; color: #3b322c; margin: 0 0 12px; flex: 1 1 auto; }
.ndb-post__meta { display: flex; justify-content: space-between; gap: 10px; border-top: 1px solid #f0e4d8; padding-top: 10px; margin: 0; font-size: 13px; color: #6b5f56; }

@media (max-width: 989px) {
  .ndb-row2 { gap: 32px; }
  .ndb-photos { grid-template-columns: repeat(3, minmax(0, 1fr)); }
  .ndb-posts { grid-template-columns: repeat(2, minmax(0, 1fr)); }
}
@media (max-width: 749px) {
  .ndb-sec { padding: 42px 0; }
  .ndb-wrap { padding: 0 16px; }
  .ndb-row2 { grid-template-columns: 1fr; gap: 24px; }
  .ndb-row2--rev .ndb-media { order: 0; }
  .ndb-photos { grid-template-columns: repeat(2, minmax(0, 1fr)); gap: 12px; }
  .ndb-posts { grid-template-columns: 1fr; }
  .ndb-cmp__row > span { padding: 11px 4px; font-size: 13px; }
  .ndb-cmp__row > span.ndb-cmp__lbl { padding-left: 10px; }
}

/* galerija izdelka: sličice največ v 2 vrstah (5 na vrsto), ostale slike so dosegljive z drsenjem glavne slike */
.product_cat-orto-dogbed .flex-control-thumbs li:nth-child(n+11) { display: none !important; }

/* kratek opis izdelka: zelene kljukice namesto pik (REST pobriše inline slog) */
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
.woocommerce-product-details__short-description .ndb-tick {
  position: absolute !important; left: 0 !important; top: 1px !important;
  width: 21px; height: 21px; border-radius: 50%;
  background: #2f9e5f !important; color: #fff !important;
  font-size: 12px !important; font-weight: 800 !important; line-height: 21px !important;
  text-align: center !important; display: inline-block !important; }
.woocommerce-product-details__short-description p:first-of-type { font-size: 16px; line-height: 1.55; }
</style>
