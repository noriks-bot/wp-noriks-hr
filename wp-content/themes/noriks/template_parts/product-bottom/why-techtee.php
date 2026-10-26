<?php
/**
 * product-bottom: NORIKS TechTee — ikonična muška majica s okruglim izrezom (orto-techtee).
 * Original: fincutmen.com/products/t-shirt-tech (»Le t-shirt Iconique«, FR) — vsebina in vrstni red 1:1 z originalom,
 * oblika po NORIKS stilu (predloga why-widetoeshoes.php / why-hands.php), privzeta topla rjava paleta (#a9683f):
 *   1) "Avant / Après" + "Votre morphologie : Fin / Moyen / Large" ob "Trouvez votre taille parfaite"
 *        -> Prije / poslije (3 građe, preklop brez drsnika, samo CSS) ob »Pronađite savršenu veličinu«
 *   2) "Tailleur de tous les corps pour tous les moments" + ocene (Trustpilot)
 *        -> Krojeno za svako tijelo (video usporedbe iz galerije originala: utišan, napisi prevedeni, znamka zamijenjena) + 8 mnenj
 *   3) "Il vous accompagne" (Au bureau / À la salle / À la maison / Au quotidien) -> Prati vas kroz cijeli dan (4 slike ob besedilu)
 *   4) "Avis clients" (mnenja s fotografijami)  -> Recenzije kupaca (8 mnenj s fotografijami; število po NORIKS = 1081)
 * Izpusceno: glava, pasice, »Grand Jeu« (nagradna igra), »Fincut Express«, »Packbuilder+«, »SIZETECH+« (kalkulator konkurenta,
 * gumb odpre našo tablico veličin), noga. Opis, materiali in nega so v standardnih harmonikah (meta.php),
 * FAQ v reviews.php ($techtee_faq), mnenja v auto_reviews/HR_techtee.php. Slike/video: img/techtee/ (ntt-…),
 * napis znamke na notranji strani ovratnika retuširan, logotip v videu zamenjan z »NORIKS«.
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$ntt      = get_template_directory_uri() . '/img/techtee/';
$ntt_path = get_template_directory() . '/img/techtee/';
$ntt_img  = function( $file, $alt ) use ( $ntt, $ntt_path ) {
  if ( ! $file || ! file_exists( $ntt_path . $file ) ) { return ''; }
  return '<img src="' . esc_url( $ntt . $file ) . '" alt="' . esc_attr( $alt ) . '" loading="eager">';
};
$ntt_stars = function( $n ) {
  $n = max( 0, min( 5, (int) $n ) );
  return '<span class="ntt-stars" aria-label="' . $n . ' od 5 zvjezdica">' . str_repeat( '★', $n ) . '<span class="ntt-stars__off">' . str_repeat( '★', 5 - $n ) . '</span></span>';
};

/* 1) prije / poslije po građi (Fin / Moyen / Large) */
$ntt_gradje = array(
  array( 'vitka',   'Vitka' ),
  array( 'srednja', 'Srednja' ),
  array( 'siroka',  'Široka' ),
);

/* 2) mnenja z originala (Trustpilot, prevedena; ime znamke zamenjano z NORIKS) */
$ntt_tp = array(
  array( 'ime' => 'Goran M.', 'naslov' => 'Jednostavan, ali vrlo pomno izrađen', 'tekst' => 'Jednostavan proizvod, ali vrlo pomno izrađen. Elegantna gradska majica koju preporučujem svima.' ),
  array( 'ime' => 'Emil M.',     'naslov' => 'Kvaliteta je zaista na visini',       'tekst' => 'Kvaliteta je zaista na visini. Kroj lijepo ističe tijelo, a pad je besprijekoran. Iskreno, nemam nijedne zamjerke — jako sam zadovoljan!' ),
  array( 'ime' => 'Damir C.',    'naslov' => 'Ne nosim ništa drugo',                'tekst' => 'Otkad znam za NORIKS, ne kupujem druge majice i nosim samo njih. Materijal i kako stoje na tijelu su savršeni. Obožavam ih.' ),
  array( 'ime' => 'Robert D.',    'naslov' => 'Jako sam zadovoljan majicama',        'tekst' => 'Kroj je odličan, tkanina je ugodna za nošenje, a kvaliteta je na visini. Preporučujem bez razmišljanja!' ),
  array( 'ime' => 'Martina S.',    'naslov' => 'Super majice za mog muža',            'tekst' => 'Kupila sam ih mužu — kroj ga jako lijepo ističe, a služba za korisnike je vrhunska!' ),
  array( 'ime' => 'Tomislav E.',       'naslov' => 'Druga narudžba, i dalje oduševljen',  'tekst' => 'Savršeno, druga narudžba i jednako sam zadovoljan. Imam već 10 majica ove marke.' ),
  array( 'ime' => 'Boris K.',      'naslov' => 'Kvaliteta je na visini',              'tekst' => 'Kvaliteta je na visini! Udobne su i, iskreno, nemaju veze s jeftinom konfekcijom.' ),
  array( 'ime' => 'Bruno M.',     'naslov' => 'Kvalitetne majice',                   'tekst' => 'Kvalitetna majica. Ne treba je glačati i odlično stoji. Brza i pažljivo zapakirana dostava. Uzmite svoju uobičajenu veličinu.' ),
);

/* 4) mnenja s fotografijami z originala (prevedena) */
$ntt_rv = array(
  array( 'ime' => 'Josip V.',    'img' => 'ntt-rv-1.webp', 'z' => 5, 'tekst' => 'Sve je besprijekorno! Materijal, kroj, lagana je i prozračna! Oduševljen sam!' ),
  array( 'ime' => 'Stjepan M.', 'img' => 'ntt-rv-2.webp', 'z' => 5, 'tekst' => 'Super materijal i lijepo stoji oko ruku i trbuha — savršeno za moju novu figuru nakon 40 izgubljenih kilograma ovog ljeta. Opet ću naručiti, ali broj veću 😁' ),
  array( 'ime' => 'Jasna F.', 'img' => 'ntt-rv-3.webp', 'z' => 5, 'tekst' => 'Obožavam vaše majice — i za sport i za izlazak.' ),
  array( 'ime' => 'Luka L.',    'img' => 'ntt-rv-4.webp', 'z' => 4, 'tekst' => 'Dobro pristaje oko ruku i trbuha, a u ramenima ostavlja malo prostora. Donji rub je mrvicu uži, pa se na trbuhu stvara pokoji nabor.' ),
  array( 'ime' => 'Hrvoje L.',     'img' => 'ntt-rv-5.webp', 'z' => 5, 'tekst' => 'Izvrsna kvaliteta i savršen kroj 😁' ),
  array( 'ime' => 'Ante I.',      'img' => 'ntt-rv-6.webp', 'z' => 5, 'tekst' => 'Upravo sam ponovno naručio paket od 3 majice — kvaliteta je i dalje vrhunska. Toplo preporučujem NORIKS majice 💯' ),
  array( 'ime' => 'Mario A.',    'img' => 'ntt-rv-7.webp', 'z' => 5, 'tekst' => 'Vrhunski.' ),
  array( 'ime' => 'Filip Z.',  'img' => 'ntt-rv-8.webp', 'z' => 5, 'tekst' => 'Isprva sam se dvoumio oko narudžbe, ali kad sam se odlučio, nisam se razočarao: dostava je bila vrlo brza, a kvaliteta je točno kao u reklami. Oduševljen sam kupnjom.' ),
);

$ntt_n = 0; // števec sekcij za izmenična ozadja
$ntt_cls = function() use ( &$ntt_n ) { $ntt_n++; return ( $ntt_n % 2 ) ? ' ntt-tint' : ''; };
$ntt_side = 0; // izmenične strani slika/besedilo
$ntt_rev = function() use ( &$ntt_side ) { $ntt_side++; return ( $ntt_side % 2 ) ? '' : ' ntt-row2--rev'; };
?>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap">

<!-- 1) PRIJE / POSLIJE po građi + PRONAĐITE SAVRŠENU VELIČINU ("Avant / Après" + "Trouvez votre taille parfaite") -->
<section class="ntt-sec<?php echo $ntt_cls(); ?>">
  <div class="ntt-wrap">
    <div class="ntt-row2<?php echo $ntt_rev(); ?>">
      <div class="ntt-media">
        <div class="ntt-pp">
          <?php foreach ( $ntt_gradje as $i => $g ) : ?>
          <input type="radio" name="ntt-gradja" id="ntt-g-<?php echo esc_attr( $g[0] ); ?>" class="ntt-pp__radio"<?php echo ( 1 === $i ) ? ' checked' : ''; ?>>
          <?php endforeach; ?>
          <div class="ntt-pp__pairs">
            <?php foreach ( $ntt_gradje as $g ) : ?>
            <div class="ntt-pp__pair ntt-pp__pair--<?php echo esc_attr( $g[0] ); ?>">
              <figure><?php echo $ntt_img( 'ntt-pp-' . $g[0] . '-prije.webp', 'Prije — obična majica, ' . strtolower( $g[1] ) . ' građa' ); ?><figcaption>Prije</figcaption></figure>
              <figure><?php echo $ntt_img( 'ntt-pp-' . $g[0] . '-poslije.webp', 'Poslije — NORIKS TechTee, ' . strtolower( $g[1] ) . ' građa' ); ?><figcaption>Poslije</figcaption></figure>
            </div>
            <?php endforeach; ?>
          </div>
          <div class="ntt-pp__bar">
            <span class="ntt-pp__lbl">Vaša građa:</span>
            <?php foreach ( $ntt_gradje as $g ) : ?>
            <label for="ntt-g-<?php echo esc_attr( $g[0] ); ?>" class="ntt-pp__btn ntt-pp__btn--<?php echo esc_attr( $g[0] ); ?>"><?php echo esc_html( $g[1] ); ?></label>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
      <div class="ntt-copy">
        <p class="ntt-kicker">Savršena veličina</p>
        <h2 class="ntt-h3">Pronađite svoju <em>savršenu veličinu</em></h2>
        <p>Vaša idealna veličina u nekoliko klikova. Majica pripijenog kroja prilagođava se <strong>vitkoj, srednjoj i široj građi</strong> — pogledajte razliku prije i poslije.</p>
        <p>U tablici veličina za svaku veličinu pronaći ćete <strong>opseg prsa, visinu i težinu</strong>.</p>
        <p><a href="#" class="ntt-btn js-open-size-chart">Pronađi moju veličinu</a></p>
        <p class="ntt-big">Uzmite svoju uobičajenu veličinu.</p>
      </div>
    </div>
  </div>
</section>

<!-- 2) KROJENO ZA SVAKO TIJELO ("Tailleur de tous les corps pour tous les moments") + video usporedbe + ocjene -->
<section class="ntt-sec<?php echo $ntt_cls(); ?>">
  <div class="ntt-wrap">
    <div class="ntt-row2<?php echo $ntt_rev(); ?>">
      <div class="ntt-media">
        <?php if ( file_exists( $ntt_path . 'ntt-video-usporedba-hr.mp4' ) ) : ?>
        <video class="ntt-video" src="<?php echo esc_url( $ntt . 'ntt-video-usporedba-hr.mp4' ); ?>" poster="<?php echo esc_url( $ntt . 'ntt-video-usporedba-poster.webp' ); ?>" muted autoplay loop playsinline preload="metadata" aria-label="Usporedba: druga majica i NORIKS TechTee na tri različite građe"></video>
        <?php endif; ?>
      </div>
      <div class="ntt-copy">
        <p class="ntt-kicker">Za svako tijelo</p>
        <h2 class="ntt-h3">Krojeno za svako tijelo, <em>za svaki trenutak</em></h2>
        <p>Pridružite se tisućama muškaraca koji su odabrali NORIKS za svaki dan — za <strong>uredan stil</strong> i <strong>neusporedivu udobnost</strong>, bez obzira na građu.</p>
        <p>Veličina S, XL ili 2XL: usporedite kako obična majica i NORIKS TechTee stoje na tri različite građe.</p>
        <div class="ntt-score ntt-score--left">
          <span class="ntt-score__num">4,5 / 5</span>
          <?php echo $ntt_stars( 5 ); ?>
          <span class="ntt-score__txt">Na temelju 1081 recenzije</span>
        </div>
        <p class="ntt-big">Majica koja vas ističe.</p>
      </div>
    </div>
    <div class="ntt-tp">
      <?php foreach ( $ntt_tp as $r ) : ?>
      <article class="ntt-tp__card">
        <?php echo $ntt_stars( 5 ); ?>
        <h3 class="ntt-tp__title"><?php echo esc_html( $r['naslov'] ); ?></h3>
        <p class="ntt-tp__txt"><?php echo esc_html( $r['tekst'] ); ?></p>
        <p class="ntt-tp__name"><?php echo esc_html( $r['ime'] ); ?></p>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- 3) PRATI VAS ("Il vous accompagne": u uredu, u teretani, kod kuće, svaki dan) -->
<section class="ntt-sec<?php echo $ntt_cls(); ?>">
  <div class="ntt-wrap">
    <div class="ntt-row2<?php echo $ntt_rev(); ?>">
      <div class="ntt-media">
        <ul class="ntt-grid4">
          <li><?php echo $ntt_img( 'ntt-s-ured.webp', 'NORIKS TechTee u uredu' ); ?><span>U uredu</span></li>
          <li><?php echo $ntt_img( 'ntt-s-teretana.webp', 'NORIKS TechTee u teretani' ); ?><span>U teretani</span></li>
          <li><?php echo $ntt_img( 'ntt-s-dom.webp', 'NORIKS TechTee kod kuće' ); ?><span>Kod kuće</span></li>
          <li><?php echo $ntt_img( 'ntt-s-svakodnevno.webp', 'NORIKS TechTee svaki dan' ); ?><span>Svaki dan</span></li>
        </ul>
      </div>
      <div class="ntt-copy">
        <p class="ntt-kicker">Prati vas</p>
        <h2 class="ntt-h3">Uz vas <em>kroz cijeli dan</em></h2>
        <p><strong>U uredu</strong>, <strong>u teretani</strong>, <strong>kod kuće</strong> ili <strong>svaki dan</strong> — NORIKS TechTee pada točno kako treba, oblikuje siluetu i besprijekorno drži oblik.</p>
        <p>Mekana tkanina i tiskana unutarnja etiketa znače udobnost bez imalo iritacije, od jutra do večeri.</p>
        <p class="ntt-big">Apsolutni osnovni komad. Bezvremenski. Neizostavan.</p>
      </div>
    </div>
  </div>
</section>

<!-- 4) RECENZIJE KUPACA ("Avis clients") — mnenja s fotografijami, število po NORIKS (1081) -->
<section class="ntt-sec<?php echo $ntt_cls(); ?>">
  <div class="ntt-wrap">
    <p class="ntt-kicker ntt-c">Recenzije kupaca</p>
    <h2 class="ntt-h2 ntt-c">Kupci <em>obožavaju</em> svoje NORIKS majice</h2>
    <div class="ntt-score">
      <span class="ntt-score__num">4,7 / 5</span>
      <?php echo $ntt_stars( 5 ); ?>
      <span class="ntt-score__txt">1081 recenzija</span>
    </div>
    <div class="ntt-reviews">
      <?php foreach ( $ntt_rv as $r ) : ?>
      <article class="ntt-card">
        <div class="ntt-card__img"><?php echo $ntt_img( $r['img'], 'Fotografija kupca: ' . $r['ime'] ); ?></div>
        <div class="ntt-card__body">
          <?php echo $ntt_stars( $r['z'] ); ?>
          <p class="ntt-card__txt">„<?php echo esc_html( $r['tekst'] ); ?>”</p>
          <p class="ntt-card__name"><?php echo esc_html( $r['ime'] ); ?> <span class="ntt-ok">✓ Potvrđena kupnja</span></p>
        </div>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<style>
/* NORIKS stil (predloga why-widetoeshoes.php / why-hands.php): oznaka + naslov z ležečim poudarkom, slika ob
   besedilu, izmenjujoča ozadja in strani. Privzeta topla rjava paleta NORIKS (#a9683f). */
.ntt-sec { padding: 60px 0; font-family: 'Poppins', system-ui, -apple-system, 'Segoe UI', Roboto, Arial, sans-serif; color: #231d19; background: #fff; }
.ntt-sec * { box-sizing: border-box; }
.ntt-tint { background: #f7f2ec; }
.ntt-wrap { width: 100%; max-width: 1200px; margin: 0 auto; padding: 0 24px; }
.ntt-c { text-align: center; }
.ntt-sec h2, .ntt-sec h3 { font-family: inherit; text-transform: none; letter-spacing: 0; }
.ntt-kicker, .ntt-copy p.ntt-kicker { font-size: 12.5px; line-height: 1.4; font-weight: 700; letter-spacing: .14em; text-transform: uppercase; color: #a9683f; margin: 0 0 10px; }
.ntt-h2 { font-weight: 700; font-size: clamp(25px, 3.1vw, 36px); line-height: 1.2; margin: 0 0 14px; color: #231d19; }
.ntt-h2 em, .ntt-h3 em { font-style: italic; color: #a9683f; }
.ntt-h3 { font-weight: 700; font-size: clamp(22px, 2.6vw, 30px); line-height: 1.25; margin: 0 0 16px; color: #231d19; }
.ntt-sec img { display: block; width: 100%; height: auto; }

/* slika ob besedilu */
.ntt-row2 { display: grid; grid-template-columns: 1fr 1fr; gap: 56px; align-items: center; }
.ntt-row2--rev .ntt-media { order: 2; }
.ntt-media > img, .ntt-video { border-radius: 10px; box-shadow: 0 2px 4px rgba(40,25,15,.05), 0 14px 40px rgba(40,25,15,.10); max-width: 540px; margin: 0 auto; }
.ntt-video { display: block; width: 100%; aspect-ratio: 1 / 1; object-fit: cover; background: #e9e2da; }
.ntt-copy p { font-size: 16px; line-height: 1.7; color: #4f443d; margin: 0 0 14px; }
.ntt-copy p strong { color: #231d19; font-weight: 600; }
.ntt-copy p.ntt-big { font-size: 19px; font-weight: 700; color: #231d19; line-height: 1.45; margin-top: 6px; }
.ntt-btn { display: inline-block; background: #a9683f; color: #fff !important; font-weight: 700; font-size: 15px; letter-spacing: .02em;
  padding: 13px 26px; border-radius: 8px; text-decoration: none !important; box-shadow: 0 4px 14px rgba(169,104,63,.28); }
.ntt-btn:hover { background: #8f5733; }

/* prije / poslije: 3 građe, preklop z radijskimi gumbi (samo CSS, brez drsnika) */
.ntt-pp { max-width: 540px; margin: 0 auto; }
.ntt-pp__radio { position: absolute; opacity: 0; pointer-events: none; }
.ntt-pp__pair { display: none; grid-template-columns: 1fr 1fr; gap: 0; border-radius: 10px; overflow: hidden;
  box-shadow: 0 2px 4px rgba(40,25,15,.05), 0 14px 40px rgba(40,25,15,.10); }
#ntt-g-vitka:checked ~ .ntt-pp__pairs .ntt-pp__pair--vitka,
#ntt-g-srednja:checked ~ .ntt-pp__pairs .ntt-pp__pair--srednja,
#ntt-g-siroka:checked ~ .ntt-pp__pairs .ntt-pp__pair--siroka { display: grid; }
.ntt-pp__pair figure { position: relative; margin: 0; }
.ntt-pp__pair figure + figure { border-left: 3px solid #fff; }
.ntt-pp__pair img { aspect-ratio: 5 / 8; object-fit: cover; object-position: 50% 30%; }
.ntt-pp__pair figcaption { position: absolute; top: 12px; left: 12px; background: rgba(35,29,25,.72); color: #fff; font-size: 12.5px; font-weight: 700;
  letter-spacing: .08em; text-transform: uppercase; padding: 5px 10px; border-radius: 6px; }
.ntt-pp__pair figure + figure figcaption { left: auto; right: 12px; background: #a9683f; }
.ntt-pp__bar { display: flex; align-items: center; justify-content: center; gap: 8px; margin-top: 14px; flex-wrap: wrap; }
.ntt-pp__lbl { font-size: 14px; font-weight: 600; color: #4f443d; margin-right: 4px; }
.ntt-pp__btn { cursor: pointer; font-size: 14px; font-weight: 600; color: #231d19; background: #fff; border: 2px solid #dcc3ad; border-radius: 8px; padding: 8px 16px; }
#ntt-g-vitka:checked ~ .ntt-pp__bar .ntt-pp__btn--vitka,
#ntt-g-srednja:checked ~ .ntt-pp__bar .ntt-pp__btn--srednja,
#ntt-g-siroka:checked ~ .ntt-pp__bar .ntt-pp__btn--siroka { background: #a9683f; border-color: #a9683f; color: #fff; }

/* 4 slike: u uredu, u teretani, kod kuće, svaki dan */
.ntt-grid4 { list-style: none; margin: 0 auto; padding: 0; display: grid; grid-template-columns: 1fr 1fr; gap: 12px; max-width: 540px; }
.ntt-grid4 li { position: relative; border-radius: 10px; overflow: hidden; box-shadow: 0 2px 4px rgba(40,25,15,.05), 0 10px 26px rgba(40,25,15,.10); }
.ntt-grid4 img { aspect-ratio: 1 / 1; object-fit: cover; }
.ntt-grid4 span { position: absolute; left: 10px; bottom: 10px; background: rgba(255,255,255,.92); color: #231d19; font-size: 13px; font-weight: 700; padding: 5px 10px; border-radius: 6px; }

/* ocjene */
.ntt-stars { color: #f2a516; letter-spacing: 1px; font-size: 15px; }
.ntt-stars__off { color: #e6dbd2; }
.ntt-score { display: flex; justify-content: center; align-items: center; gap: 12px; margin: 0 0 28px; flex-wrap: wrap; }
.ntt-score--left { justify-content: flex-start; margin: 4px 0 16px; }
.ntt-score__num { font-size: 26px; font-weight: 700; color: #231d19; }
.ntt-score .ntt-stars { font-size: 20px; }
.ntt-score__txt { font-size: 14.5px; color: #6b625a; }

/* mnenja (tekst) */
.ntt-tp { display: grid; grid-template-columns: repeat(4, minmax(0, 1fr)); gap: 16px; margin-top: 40px; }
.ntt-tp__card { background: #fff; border: 1px solid #ecdfd3; border-radius: 10px; padding: 16px; }
.ntt-sec:not(.ntt-tint) .ntt-tp__card { background: #f7f2ec; }
.ntt-tp__title { font-size: 15px; font-weight: 700; color: #231d19; margin: 8px 0 6px; line-height: 1.35; }
.ntt-tp__txt { font-size: 14px; line-height: 1.6; color: #4f443d; margin: 0 0 10px; }
.ntt-tp__name { font-size: 13px; font-weight: 600; color: #6b625a; margin: 0; }

/* mnenja s fotografijami */
.ntt-reviews { display: grid; grid-template-columns: repeat(4, minmax(0, 1fr)); gap: 18px; align-items: stretch; }
.ntt-card { background: #fff; border: 1px solid #ecdfd3; border-radius: 10px; overflow: hidden; display: flex; flex-direction: column; }
.ntt-card__img img { aspect-ratio: 3 / 4; object-fit: cover; }
.ntt-card__body { padding: 16px; }
.ntt-card__txt { font-size: 14.5px; line-height: 1.6; color: #3a302a; margin: 8px 0 10px; font-style: italic; }
.ntt-card__name { font-size: 13.5px; font-weight: 600; color: #231d19; margin: 0; }
.ntt-ok { color: #2f9e5f; font-weight: 600; font-size: 12px; margin-left: 4px; font-style: normal; }

@media (max-width: 989px) {
  .ntt-row2 { gap: 32px; }
  .ntt-tp, .ntt-reviews { grid-template-columns: repeat(2, minmax(0, 1fr)); }
}
@media (max-width: 749px) {
  .ntt-sec { padding: 42px 0; }
  .ntt-wrap { padding: 0 16px; }
  .ntt-row2 { grid-template-columns: 1fr; gap: 24px; }
  .ntt-row2--rev .ntt-media { order: 0; }
  .ntt-tp { margin-top: 28px; gap: 12px; }
  .ntt-reviews { gap: 12px; }
  .ntt-card__body, .ntt-tp__card { padding: 12px; }
  .ntt-pp__btn { padding: 7px 12px; font-size: 13px; }
}
@media (max-width: 420px) {
  .ntt-tp { grid-template-columns: 1fr; }
}

/* galerija izdelka: sličice največ v 2 vrstah (5 na vrsto), ostale slike so dosegljive z drsenjem glavne slike */
.product_cat-orto-techtee .flex-control-thumbs li:nth-child(n+11) { display: none !important; }

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
.woocommerce-product-details__short-description .ntt-tick {
  position: absolute !important; left: 0 !important; top: 1px !important;
  width: 21px; height: 21px; border-radius: 50%;
  background: #2f9e5f !important; color: #fff !important;
  font-size: 12px !important; font-weight: 800 !important; line-height: 21px !important;
  text-align: center !important; display: inline-block !important; }
.woocommerce-product-details__short-description p:first-of-type { font-size: 16px; line-height: 1.55; }
</style>
