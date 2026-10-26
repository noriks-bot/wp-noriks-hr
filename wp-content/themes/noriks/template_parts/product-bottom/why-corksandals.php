<?php
/**
 * product-bottom: NORIKS CorkSandals — ljetne sandale od pluta s uloskom od antilopa (orto-corksandals).
 * Original: qomfortco.com (Summer Cork Sandals) — vsebina in vrstni red 1:1,
 * oblika po NORIKS stilu (predloga why-hands.php / why-seatcover.php):
 *   1) Pridruzite se tisucama drugih ("Join 350,000+ Others") — drsnik 5 videov -> 1 video brez znamke
 *      (izrezan uvodni kader z napisom znamke, napisi prevedeni in vzgani, utisan) ob besedilu
 *   2) Svaki detalj osmisljen za udobnost: potpora za svod stopala ("Arch Support") — slika ob besedilu
 *   3) Duboko leziste pete ("Deep Heel") — slika ob besedilu
 *   4) 100 % prirodni govedi antilop ("100% Premium Cow Suede") — slika ob besedilu
 *   5) Bez dizajnerske marze ("No Designer Markup") — obicne sandale / NORIKS (dve sliki brez drsnika) ob besedilu
 *   6) Ne placate porez na logo + postene place ("logo tax", "Fair wages, fair work") — usporedba
 *   7) Jednostavan povrat ("Return with Impact" -> NORIKS pogoji: 30 dana za povrat ili zamjenu) — slika ob besedilu
 *   8) Recenzije kupaca (10 recenzij z originala, 8 s fotografijami kupcev, brez imena znamke)
 * FAQ z originala je v reviews.php ($corksandals_faq). Odstevalnik ("Sale ends tonight"), pasica akcije,
 * pojavno okno z razcleniteljem cene in "skrivnostno darilo" z originala so izpusceni (NORIKS stil).
 * Slike / video: img/corksandals/ (brez tuje znamke, napisi prevedeni).
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$ncs      = get_template_directory_uri() . '/img/corksandals/';
$ncs_path = get_template_directory() . '/img/corksandals/';
$ncs_img  = function( $file, $alt ) use ( $ncs, $ncs_path ) {
  if ( ! $file || ! file_exists( $ncs_path . $file ) ) { return ''; }
  return '<img src="' . esc_url( $ncs . $file ) . '" alt="' . esc_attr( $alt ) . '" loading="eager">';
};
$ncs_vid  = function( $file ) use ( $ncs, $ncs_path ) {
  if ( ! $file || ! file_exists( $ncs_path . $file . '.mp4' ) ) { return ''; }
  return '<video src="' . esc_url( $ncs . $file . '.mp4' ) . '" poster="' . esc_url( $ncs . $file . '-poster.webp' ) . '" muted autoplay loop playsinline preload="metadata"></video>';
};
$ncs_stars = function( $n ) {
  $n = max( 0, min( 5, (int) $n ) );
  $out = '<span class="ncs-stars" aria-label="' . esc_attr( $n . ' od 5 zvjezdica' ) . '">';
  for ( $i = 1; $i <= 5; $i++ ) { $out .= '<i' . ( $i > $n ? ' class="is-off"' : '' ) . '>★</i>'; }
  return $out . '</span>';
};

/* 6) usporedba (stupci: NORIKS CorkSandals, druge marke) — 1:1 z "No Designer Markup" originala */
$ncs_compare = array(
  array( 'Cijena', '€', '€€€' ),
  array( 'Plaćate materijale i udobnost, a ne ime', true, false ),
  array( 'Poštene plaće', true, false ),
  array( 'Sigurni uvjeti rada', true, false ),
  array( 'Humani uvjeti rada', true, false ),
);

/* 8) recenzije 1:1 z originala (prevedene, ime znamke izpusceno) */
$ncs_reviews = array(
  array( 'slika' => 'cs-rv-01.webp', 'ime' => 'Harriet T.', 'z' => 5, 'tekst' => 'NORIKS CorkSandals = NAJBOLJE ljetne sandale IKAD! Uložak je nevjerojatno udoban i bez problema ih mogu nositi cijeli dan.' ),
  array( 'slika' => 'cs-rv-02.webp', 'ime' => 'Isla N.', 'z' => 5, 'tekst' => 'Dodatni plus za zamjenu bez ikakvih komplikacija! Hvala!' ),
  array( 'slika' => 'cs-rv-03.webp', 'ime' => 'Katie S.', 'z' => 5, 'tekst' => 'Ovo su moje prve sandale od vas — kupila sam ih i obožavam ih. Veličina točno odgovara, udobne su i dobivam komplimente. Djeluju kvalitetno izrađeno i sigurna sam da će mi dugo trajati.' ),
  array( 'slika' => '', 'ime' => 'Joey D.', 'z' => 5, 'tekst' => 'Stvarno su mi super ove sandale! Kupio sam ih preko Instagrama i jako sam zadovoljan.' ),
  array( 'slika' => '', 'ime' => 'Ella D.', 'z' => 5, 'tekst' => 'Stvarno su mi super ove sandale! Kupila sam ih preko Instagrama i jako mi se sviđaju.' ),
  array( 'slika' => 'cs-rv-04.webp', 'ime' => 'Grace P.', 'z' => 5, 'tekst' => 'Nakon malo istraživanja kupila sam ove i preporučujem ih 100 %. Za ovu cijenu stvarno se isplate i nisu nimalo krhke. Udobne su i savršene da ih brzo obujem kad idem obaviti nešto po gradu ili kad samo želim udobniju obuću.' ),
  array( 'slika' => 'cs-rv-05.webp', 'ime' => 'Imogen D.', 'z' => 5, 'tekst' => 'Postale su neizostavan dio moje garderobe! Materijal je mekan i podatan, a kroj je baš kako treba. Odlična kvaliteta za ovu cijenu.' ),
  array( 'slika' => 'cs-rv-06.webp', 'ime' => 'Sarah G.', 'z' => 5, 'tekst' => 'Greškom sam naručila krivu boju, a tim mi je sve riješio super jednostavno — jako sam zahvalna! Obožavam ih.' ),
  array( 'slika' => 'cs-rv-07.webp', 'ime' => 'Hannah U.', 'z' => 5, 'tekst' => 'Super brza dostava, iskreno sam se iznenadila jer danas nikad ne znaš. Kvaliteta je savršena. Hvala!' ),
  array( 'slika' => 'cs-rv-08.webp', 'ime' => 'Eva A.', 'z' => 4, 'tekst' => 'Vidjela sam ih u oglasu na Instagramu i odlučila riskirati — NIMALO ne žalim. Najbolja kupnja preko Instagram oglasa ikad!' ),
);
// Število recenzij usklajeno z glavo strani in zavihki recenzij teme (1081 skupaj = 692 izdelka + 389 dostave);
// razmerje 75 % / 25 % (5 / 4 zvjezdice) kot na originalu, skalirano na 692.
$ncs_dist = array( 5 => array( '519', 75 ), 4 => array( '173', 25 ), 3 => array( '0', 0 ), 2 => array( '0', 0 ), 1 => array( '0', 0 ) );
?>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap">

<!-- 1) PRIDRUZITE SE TISUCAMA DRUGIH — video ob besedilu -->
<section class="ncs-sec ncs-tint">
  <div class="ncs-wrap">
    <div class="ncs-row2">
      <div class="ncs-media ncs-media--video"><?php echo $ncs_vid( 'cs-video-hr' ); ?></div>
      <div class="ncs-copy">
        <p class="ncs-kicker">Kupci ih nose</p>
        <h2 class="ncs-h3">Pridružite se <em>tisućama drugih</em></h2>
        <p>Obaveze po gradu, kava s prijateljicom, šoping i ručak u dvoje — <strong>NORIKS CorkSandals</strong> pristaju uz svaki ljetni plan i uz svaku kombinaciju, od kratkih hlača do lanenih hlača i duge suknje.</p>
        <p>Udobne su od prvog koraka, a izgledaju jednako dobro uz opuštenu i uz elegantniju odjeću.</p>
        <p class="ncs-big">Jedne sandale — za cijeli ljetni dan.</p>
      </div>
    </div>
  </div>
</section>

<!-- 2) POTPORA ZA SVOD STOPALA — slika ob besedilu -->
<section class="ncs-sec">
  <div class="ncs-wrap">
    <div class="ncs-row2 ncs-row2--rev">
      <div class="ncs-media"><?php echo $ncs_img( 'cs-f1-svod.webp', 'NORIKS CorkSandals – potpora za svod stopala' ); ?></div>
      <div class="ncs-copy">
        <p class="ncs-kicker">Svaki detalj osmišljen za udobnost</p>
        <h2 class="ncs-h3">Potpora <em>za svod stopala</em></h2>
        <p>Anatomski oblikovan uložak <strong>podupire svod stopala</strong>, smanjuje napetost i drži vas udobnima cijeli dan.</p>
        <p class="ncs-big">Manje umora u stopalima — od jutra do večeri.</p>
      </div>
    </div>
  </div>
</section>

<!-- 3) DUBOKO LEZISTE PETE — slika ob besedilu -->
<section class="ncs-sec ncs-tint">
  <div class="ncs-wrap">
    <div class="ncs-row2">
      <div class="ncs-media"><?php echo $ncs_img( 'cs-f2-peta.webp', 'NORIKS CorkSandals – duboko ležište pete' ); ?></div>
      <div class="ncs-copy">
        <p class="ncs-kicker">Svaki detalj osmišljen za udobnost</p>
        <h2 class="ncs-h3">Duboko <em>ležište pete</em></h2>
        <p>Obuhvaća petu za <strong>bolju stabilnost</strong> i manji pritisak pri svakom koraku.</p>
        <p class="ncs-big">Stabilan i siguran korak, korak za korakom.</p>
      </div>
    </div>
  </div>
</section>

<!-- 4) 100 % PRIRODNI GOVEDI ANTILOP — slika ob besedilu -->
<section class="ncs-sec">
  <div class="ncs-wrap">
    <div class="ncs-row2 ncs-row2--rev">
      <div class="ncs-media"><?php echo $ncs_img( 'cs-f3-antilop.webp', 'NORIKS CorkSandals – uložak od prirodnog goveđeg antilopa' ); ?></div>
      <div class="ncs-copy">
        <p class="ncs-kicker">Svaki detalj osmišljen za udobnost</p>
        <h2 class="ncs-h3">100 % prirodni <em>goveđi antilop</em></h2>
        <p>Mekan, prozračan uložak od antilopa — <strong>profinjen na dodir</strong> i udoban cijeli dan.</p>
        <p class="ncs-big">Najveći dio cijene ide na materijale i plaće, a ne na logotipe i troškove maloprodaje.</p>
      </div>
    </div>
  </div>
</section>

<!-- 5) BEZ DIZAJNERSKE MARZE — dve sliki ob besedilu (brez drsnika) -->
<section class="ncs-sec ncs-tint">
  <div class="ncs-wrap">
    <div class="ncs-row2">
      <div class="ncs-media ncs-ba">
        <figure class="ncs-ba__item"><?php echo $ncs_img( 'cs-m-obicne.webp', 'Obične sandale: stopalo bez potpore, pritisak ispod svoda' ); ?><figcaption>Obične sandale</figcaption></figure>
        <figure class="ncs-ba__item"><?php echo $ncs_img( 'cs-m-noriks.webp', 'NORIKS CorkSandals: potpora za svod stopala' ); ?><figcaption>NORIKS</figcaption></figure>
      </div>
      <div class="ncs-copy">
        <p class="ncs-kicker">Bez dizajnerske marže</p>
        <h2 class="ncs-h3">Plaćate <em>materijale i udobnost</em></h2>
        <p>Velike marke naplaćuju ime. Mi ulažemo u <strong>udobnost, izdržljivost i transparentnost</strong>.</p>
        <p>Potporni uložak, izdržljiv potplat i kvalitetna izrada — ondje ide vaš novac.</p>
        <p class="ncs-big">Ne plaćate ime, plaćate udobnost.</p>
      </div>
    </div>
  </div>
</section>

<!-- 6) NE PLACATE POREZ NA LOGO — usporedba -->
<section class="ncs-sec">
  <div class="ncs-wrap ncs-wrap--narrow">
    <p class="ncs-kicker ncs-c">Bez dizajnerske marže</p>
    <h2 class="ncs-h2 ncs-c">Ne plaćate <em>porez na logo</em></h2>
    <p class="ncs-lead ncs-c">Manje „premije za marku”, više stvarne vrijednosti u samom proizvodu. Biramo tvornice koje pošteno plaćaju radnike i osiguravaju sigurne i humane uvjete rada.</p>
    <table class="ncs-cmp">
      <thead>
        <tr>
          <th></th>
          <th class="is-ours">NORIKS CorkSandals</th>
          <th>Druge marke</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ( $ncs_compare as $c ) : ?>
        <tr>
          <td><?php echo esc_html( $c[0] ); ?></td>
          <?php if ( is_string( $c[1] ) ) : ?>
          <td class="is-ours is-txt"><strong><?php echo esc_html( $c[1] ); ?></strong></td>
          <td class="is-txt"><strong><?php echo esc_html( $c[2] ); ?></strong></td>
          <?php else : ?>
          <td class="is-ours <?php echo $c[1] ? 'is-yes' : 'is-no'; ?>"><span><?php echo $c[1] ? '✓' : '✕'; ?></span></td>
          <td class="<?php echo $c[2] ? 'is-yes' : 'is-no'; ?>"><span><?php echo $c[2] ? '✓' : '✕'; ?></span></td>
          <?php endif; ?>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</section>

<!-- 7) JEDNOSTAVAN POVRAT — NORIKS pogoji, slika ob besedilu -->
<section class="ncs-sec ncs-tint">
  <div class="ncs-wrap">
    <div class="ncs-row2 ncs-row2--rev">
      <div class="ncs-media"><?php echo $ncs_img( 'cs-povrat.webp', 'Bijele sandale NORIKS CorkSandals' ); ?></div>
      <div class="ncs-copy">
        <p class="ncs-kicker">Bez brige</p>
        <h2 class="ncs-h3">Pogriješili ste <em>veličinu</em>?</h2>
        <p>Naš postupak povrata i zamjene čini odabir veličine jednostavnim. Ako vam sandale ne pristaju, imate <strong>pravo na povrat ili zamjenu u roku od 30 dana</strong> — javite nam se i poslat ćemo vam jednostavne upute.</p>
        <p>Besplatna dostava za narudžbe iznad 70 €.</p>
        <p class="ncs-big">30 dana za povrat — kupujte bez brige.</p>
      </div>
    </div>
  </div>
</section>

<!-- 8) RECENZIJE KUPACA -->
<section class="ncs-sec ncs-sec--reviews">
  <div class="ncs-wrap">
    <p class="ncs-kicker ncs-c">Recenzije kupaca</p>
    <h2 class="ncs-h2 ncs-c">Što kažu <em>naši kupci</em></h2>
    <div class="ncs-summary">
      <div class="ncs-summary__score"><strong>4,8</strong><?php echo $ncs_stars( 5 ); ?><span>na temelju 692 recenzije proizvoda</span></div>
      <div class="ncs-summary__bars">
        <?php foreach ( $ncs_dist as $z => $d ) : ?>
        <div class="ncs-bar"><span class="ncs-bar__lbl"><?php echo (int) $z; ?> ★</span><span class="ncs-bar__track"><span style="width:<?php echo (int) $d[1]; ?>%"></span></span><span class="ncs-bar__n"><?php echo esc_html( $d[0] ); ?></span></div>
        <?php endforeach; ?>
      </div>
    </div>
    <div class="ncs-revs">
      <?php foreach ( $ncs_reviews as $r ) : ?>
      <article class="ncs-rv">
        <?php if ( $r['slika'] ) : ?><div class="ncs-rv__img"><?php echo $ncs_img( $r['slika'], 'Fotografija kupca: ' . $r['ime'] ); ?></div><?php endif; ?>
        <div class="ncs-rv__body">
          <?php echo $ncs_stars( $r['z'] ); ?>
          <p class="ncs-rv__txt"><?php echo esc_html( $r['tekst'] ); ?></p>
          <p class="ncs-rv__name"><?php echo esc_html( $r['ime'] ); ?> <span>· Provjereni kupac</span></p>
        </div>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<style>
/* NORIKS stil (predloga why-hands.php / why-seatcover.php): oznaka + naslov z lezecim poudarkom, slika/video ob besedilu,
   izmenjujoca ozadja. Barvni poudarek izdelka: toplo plutasta (#9e7446). */
.ncs-sec { padding: 60px 0; font-family: 'Poppins', system-ui, -apple-system, 'Segoe UI', Roboto, Arial, sans-serif; color: #2e241c; background: #fff; }
.ncs-sec * { box-sizing: border-box; }
.ncs-tint { background: #faf4ec; }
.ncs-wrap { width: 100%; max-width: 1200px; margin: 0 auto; padding: 0 24px; }
.ncs-wrap--narrow { max-width: 860px; }
.ncs-c { text-align: center; }
.ncs-sec h2, .ncs-sec h3 { font-family: inherit; text-transform: none; letter-spacing: 0; }
.ncs-kicker, .ncs-copy p.ncs-kicker { font-size: 12.5px; line-height: 1.4; font-weight: 700; letter-spacing: .14em; text-transform: uppercase; color: #9e7446; margin: 0 0 10px; }
.ncs-h2 { font-weight: 700; font-size: clamp(25px, 3.1vw, 36px); line-height: 1.2; margin: 0 0 30px; color: #2e241c; }
.ncs-h2 em, .ncs-h3 em { font-style: italic; color: #9e7446; }
.ncs-h3 { font-weight: 700; font-size: clamp(22px, 2.6vw, 30px); line-height: 1.25; margin: 0 0 16px; color: #2e241c; }
.ncs-lead { font-size: 16px; line-height: 1.6; color: #5b4f45; margin: -16px 0 26px; }
.ncs-sec img, .ncs-sec video { display: block; width: 100%; height: auto; }

/* slika/video ob besedilu */
.ncs-row2 { display: grid; grid-template-columns: 1fr 1fr; gap: 56px; align-items: center; }
.ncs-row2--rev .ncs-media { order: 2; }
.ncs-media img, .ncs-media video { aspect-ratio: 1 / 1; object-fit: cover; border-radius: 8px; background: #fff; box-shadow: 0 2px 4px rgba(60,40,20,.05), 0 14px 40px rgba(60,40,20,.10); }
.ncs-media--video video { aspect-ratio: 9 / 16; max-width: 400px; margin: 0 auto; }
.ncs-copy p { font-size: 16px; line-height: 1.7; color: #5b4f45; margin: 0 0 14px; }
.ncs-copy p strong { color: #2e241c; font-weight: 600; }
.ncs-copy p.ncs-big { font-size: 19px; font-weight: 700; color: #2e241c; line-height: 1.45; margin-top: 6px; }

/* obicne sandale / NORIKS */
.ncs-ba { display: grid; grid-template-columns: 1fr 1fr; gap: 12px; }
.ncs-ba__item { position: relative; margin: 0; }
.ncs-ba__item img { aspect-ratio: 513 / 660; }
.ncs-ba__item figcaption { position: absolute; left: 10px; top: 10px; background: #fff; color: #2e241c; font-size: 12.5px; font-weight: 700; letter-spacing: .08em; text-transform: uppercase; padding: 5px 10px; border-radius: 6px; }
.ncs-ba__item:last-child figcaption { background: #9e7446; color: #fff; }

/* usporedba */
.ncs-cmp { width: 100%; border-collapse: collapse; font-size: 15px; background: #fff; border: 1px solid #eadccb; border-radius: 10px; overflow: hidden; }
.ncs-cmp th, .ncs-cmp td { padding: 13px 10px; border-bottom: 1px solid #f1e7da; text-align: center; vertical-align: middle; }
.ncs-cmp th:first-child, .ncs-cmp td:first-child { text-align: left; font-weight: 600; color: #2e241c; }
.ncs-cmp thead th { font-size: 14px; font-weight: 700; color: #2e241c; background: #fff; }
.ncs-cmp .is-ours { background: #f7eee3; }
.ncs-cmp thead th.is-ours { background: #9e7446; color: #fff; }
.ncs-cmp td span { display: inline-block; width: 26px; height: 26px; border-radius: 50%; line-height: 26px; font-weight: 800; font-size: 14px; }
.ncs-cmp td.is-yes span { background: #2e9d5b; color: #fff; }
.ncs-cmp td.is-no span { background: #e8e0d8; color: #2e241c; }
.ncs-cmp td.is-txt strong { font-size: 17px; font-weight: 700; color: #2e241c; letter-spacing: .04em; }
.ncs-cmp td.is-ours.is-txt strong { color: #9e7446; }

/* zvjezdice */
.ncs-stars { display: inline-flex; gap: 3px; margin: 0 0 12px; vertical-align: middle; }
.ncs-stars i { font-style: normal; width: 22px; height: 22px; background: #00b67a; color: #fff; font-size: 15px; line-height: 22px; text-align: center; }
.ncs-stars i.is-off { background: #dcdce6; }

/* recenzije */
.ncs-summary { display: flex; align-items: center; justify-content: center; gap: 40px; margin: 0 0 34px; flex-wrap: wrap; }
.ncs-summary__score { display: flex; flex-direction: column; align-items: center; gap: 6px; }
.ncs-summary__score strong { font-size: 44px; line-height: 1; font-weight: 700; }
.ncs-summary__score .ncs-stars { margin: 0; }
.ncs-summary__score span { font-size: 14px; color: #5b4f45; }
.ncs-summary__bars { min-width: 280px; }
.ncs-bar { display: flex; align-items: center; gap: 10px; font-size: 14px; color: #5b4f45; margin: 0 0 6px; }
.ncs-bar__lbl { width: 30px; white-space: nowrap; }
.ncs-bar__track { flex: 1 1 auto; height: 9px; background: #efe4d6; border-radius: 6px; overflow: hidden; min-width: 160px; }
.ncs-bar__track span { display: block; height: 100%; background: #9e7446; }
.ncs-bar__n { width: 64px; white-space: nowrap; }
.ncs-revs { columns: 3; column-gap: 18px; }
.ncs-rv { background: #fff; border: 1px solid #eadccb; border-radius: 10px; overflow: hidden; break-inside: avoid; margin: 0 0 18px; display: inline-block; width: 100%; }
.ncs-rv__img img { aspect-ratio: 3 / 4; object-fit: cover; }
.ncs-rv__body { padding: 16px 18px 14px; }
.ncs-rv .ncs-stars { margin-bottom: 10px; }
.ncs-rv .ncs-stars i { width: 19px; height: 19px; font-size: 13px; line-height: 19px; }
.ncs-rv__txt { font-size: 14.5px; line-height: 1.6; color: #3f342c; margin: 0 0 12px; }
.ncs-rv__name { font-size: 13.5px; font-weight: 600; color: #2e241c; margin: 0; border-top: 1px solid #eadccb; padding-top: 12px; }
.ncs-rv__name span { font-weight: 400; color: #2e7d32; }

@media (max-width: 989px) {
  .ncs-revs { columns: 2; }
  .ncs-row2 { gap: 32px; }
}
@media (max-width: 749px) {
  .ncs-sec { padding: 42px 0; }
  .ncs-wrap { padding: 0 16px; }
  .ncs-revs { columns: 1; }
  .ncs-row2 { grid-template-columns: 1fr; gap: 24px; }
  .ncs-row2--rev .ncs-media { order: 0; }
  .ncs-cmp { font-size: 13px; }
  .ncs-cmp th, .ncs-cmp td { padding: 10px 6px; }
  .ncs-cmp thead th { font-size: 12px; }
}

/* galerija izdelka: sličice največ v 2 vrstah (5 na vrsto), ostale slike so dosegljive z drsenjem glavne slike */
.product_cat-orto-corksandals .flex-control-thumbs li:nth-child(n+11) { display: none !important; }

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
.woocommerce-product-details__short-description .ncs-tick {
  position: absolute !important; left: 0 !important; top: 1px !important;
  width: 21px; height: 21px; border-radius: 50%;
  background: #2f9e5f !important; color: #fff !important;
  font-size: 12px !important; font-weight: 800 !important; line-height: 21px !important;
  text-align: center !important; display: inline-block !important; }
.woocommerce-product-details__short-description p:first-of-type { font-size: 16px; line-height: 1.55; }
</style>
