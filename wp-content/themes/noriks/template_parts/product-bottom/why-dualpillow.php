<?php
/**
 * product-bottom: NORIKS DualPillow — jastuk 2 u 1 (mekani vanjski sloj + potporna jezgra) (orto-dualpillow).
 * Original: aeyla.co.uk/products/the-dual-pillow — vsebina in vrstni red 1:1 z originalom, oblika po NORIKS stilu
 * (predloga why-therapillow.php / why-hands.php), poudarek po paleti originala (mornarsko modra #283455):
 *   1) "Loved by 143,177+ Customers Worldwide" (3 videi kupcev z izjavami)   -> Vole ga tisuće kupaca (3 kartice: video odpiranja
 *      zadrge izrezan pred kadri z logotipom na notranjem sloju (naprej + nazaj), video stiskanja izrezan / obrezan brez nalepke
 *      z logotipom, 3. video (škatle z logotipom) zamenjan s fotografijo spanca iz galerije originala) + izjava "Julie H." iz nakupne škatle
 *   2) "The pillow 99% of sleepers credit for pain-free, best-ever sleep"   -> slika primerjave ob besedilu + 4 prednosti z ikonami
 *      (napisa "Regular Pillows" / logotip -> "Obični jastuci" / "NORIKS")
 *   3) "Not all pillows are made equal." (primerjalna kartica Your Pillow / Dual Pillow) -> HTML primerjava ob besedilu
 *      (30-night money-back guarantee -> pravo na povrat u roku od 30 dana; 100,000+ sleepers -> tisuće spavača)
 *   4) "Trusted by thousands of happy sleepers" (95 / 87 / 93 %)            -> 3 kartice s postotki
 *   5) "Sleep On It For 30 Nights"                                          -> slika ob besedilu po NORIKS pogojih (30 dana za povrat)
 *   6) Junip "4.8 / 1161 verified reviews"                                  -> Recenzije kupaca: 1081 + 8 mnenj
 * Izpusceno: Black Friday / Prime Time pasice z odstevalnikom, okno "30 night money back guarantee", In High Demand /
 * "32 people have this in their carts", "As Seen In" (logotipi medijev), ikone placil, gumbi "Shop dual pillow / 30-Night Home Trial".
 * FAQ (5 + dostava) je v reviews.php ($dualpillow_faq), mnenja v auto_reviews/HR_dualpillow.php, opis + nega v meta.php.
 * Slike/videi: img/dualpillow/ (ndp-…), videi utisani (brez govora in brez vzganih napisov).
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$ndp      = get_template_directory_uri() . '/img/dualpillow/';
$ndp_path = get_template_directory() . '/img/dualpillow/';
$ndp_img  = function( $file, $alt, $cls = '' ) use ( $ndp, $ndp_path ) {
  if ( ! $file || ! file_exists( $ndp_path . $file ) ) { return ''; }
  return '<img src="' . esc_url( $ndp . $file ) . '" alt="' . esc_attr( $alt ) . '" loading="eager"' . ( $cls ? ' class="' . esc_attr( $cls ) . '"' : '' ) . '>';
};
$ndp_video = function( $file, $label, $cls = '' ) use ( $ndp, $ndp_path ) {
  if ( ! file_exists( $ndp_path . $file ) ) { return ''; }
  $poster = preg_replace( '/\.mp4$/', '-poster.webp', $file );
  return '<div class="ndp-vid ' . esc_attr( $cls ) . '"><video src="' . esc_url( $ndp . $file ) . '" poster="' . esc_url( $ndp . $poster ) . '"'
    . ' muted autoplay loop playsinline preload="metadata" aria-label="' . esc_attr( $label ) . '"></video></div>';
};
$ndp_stars = function( $n ) {
  $n = max( 0, min( 5, (int) $n ) );
  return '<span class="ndp-stars" aria-label="' . $n . ' od 5 zvjezdica">' . str_repeat( '★', $n ) . '<span class="ndp-stars__off">' . str_repeat( '★', 5 - $n ) . '</span></span>';
};

/* 1) vole ga tisuće kupaca (3 videi kupcev z izjavami; 3. video zamenjan s fotografijo) */
$ndp_ugc = array(
  array( 'video', 'ndp-s01-zatvarac.mp4', 'Kod bolova u vratu', 'Ovaj jastuk napravio je ogromnu razliku za moju bol u vratu i leđima. Tako sam zahvalna.' ),
  array( 'video', 'ndp-s01-mekoca.mp4', '', 'Odmah mi je postao omiljen. Sviđa mi se koliko je mekan i potporan – cijelu noć.' ),
  array( 'img', 'ndp-s01-san.webp', '', 'Još jedna noć blaženog sna.' ),
);

/* 2) četiri prednosti (ikone originala) */
$ndp_feat = array(
  array( 'ndp-s02-ikona-1.png', 'Udobnost 2 u 1', 'mekani vanjski sloj obavija potpornu jezgru' ),
  array( 'ndp-s02-ikona-2.png', 'Potpora koju su osmislili osteopati', 'drži vrat u pravilnom položaju cijelu noć' ),
  array( 'ndp-s02-ikona-3.png', 'Svježiji san', 'zahvaljujući rashlađujućoj, prozračnoj izradi' ),
  array( 'ndp-s02-ikona-4.png', 'Potpora u svakom položaju', 'za spavanje na boku, leđima i trbuhu' ),
);

/* 3) usporedba: vaš jastuk / NORIKS DualPillow (kartica originala kot HTML) */
$ndp_cmp_old_tags = array( 'Gubi oblik', 'Slaba potpora za vrat' );
$ndp_cmp_old      = array( 'Bez jamstva', 'Nedokazan', 'Grije tijekom spavanja', 'Bol u vratu ne prolazi', 'Treba ga stalno protresati' );
$ndp_cmp_new_tags = array( 'Potpora koju su odobrili osteopati', 'Zadržava oblik' );
$ndp_cmp_new      = array( 'Učinkovito ublažava bol u vratu', 'Regulira temperaturu', 'Vjeruju mu tisuće spavača', 'Jedinstveni dizajn 2 u 1', 'Pravo na povrat u roku od 30 dana' );

/* 4) postotki (data-count-to originala 95 / 87 / 93) */
$ndp_stats = array(
  array( '95 %', 'naših kupaca spava na idealnoj temperaturi' ),
  array( '87 %', 'kaže da bolje spava otkako koristi naš jastuk' ),
  array( '93 %', 'osjeća manje bolova, ukočenosti, glavobolja, jutarnje omamljenosti i umora' ),
);

/* 6) recenzije kupaca (Junip 1161 -> po NORIKS 1081); imena lokalizirana */
$ndp_rv = array(
  array( 'Snježana V.', 5, 'Dugo sam se dvoumila zbog cijene, ali drago mi je da sam ga naručila. Kad sam ga izvadila iz kutije, činio mi se prilično plosnat – no pravi test bio je spavanje na njemu. Imala sam tri najbolje noći sna nakon dugo vremena.' ),
  array( 'Dragana M.', 5, 'Spavam na boku i potrošila sam brdo novca na jastuke svih marki – svi su bili loši. Ovaj je čista desetka i nakon mjesec dana i dalje je pun. Najbolji jastuk koji sam ikad kupila!' ),
  array( 'Mirjana K.', 5, 'Imam ga tri tjedna, divan je i mekan. Suprug je gunđao zbog cijene, ali otkako ga imam, ne budim se s glavoboljom ni bolovima u vratu. Definitivno bih kupila još!' ),
  array( 'Ljubica T.', 5, 'Imam artritis u vratu i noću me zbog toga boli glava. Otkako koristim ove jastuke, to mi se dogodilo samo jednom. Kao da spavam na oblaku, a zadržavaju oblik.' ),
  array( 'Zdenka P.', 5, 'Nakon dvije godine bolova u leđima i vratu napokon sam prespavala cijelu noć – i tako već dvije noći zaredom – i probudila se bez ikakve boli. Zaspim čim glavom dotaknem jastuk.' ),
  array( 'Robert H.', 5, 'Mislio sam da je premekan da bi pomogao – puno mekši od mog prijašnjeg jastuka od memorijske pjene. Ali koristim ga više od tjedan dana i stvarno djeluje.' ),
  array( 'Marica B.', 5, 'Kupila sam ih dva. Ne znam točno zašto, ali dugo nisam ovako dobro spavala. Potporniji su nego što izgledaju, a vanjski sloj je divno mekan. Vrijede novca!' ),
  array( 'Nevenka Š.', 5, 'Godinama tražim idealan jastuk i mislim da sam ga napokon pronašla. Bol u vratu i ramenima pri buđenju znatno je manja – nije potpuno nestala, ali je puno bolje.' ),
);

$ndp_n = 0; // števec sekcij za izmenična ozadja
$ndp_cls = function() use ( &$ndp_n ) { $ndp_n++; return ( $ndp_n % 2 ) ? ' ndp-tint' : ''; };
?>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap">

<!-- 1) VOLE GA TISUĆE KUPACA ("Loved by 143,177+ Customers Worldwide") — 3 kartice z videi / fotografijo -->
<section class="ndp-sec<?php echo $ndp_cls(); ?>">
  <div class="ndp-wrap">
    <p class="ndp-kicker ndp-c"><?php echo $ndp_stars( 5 ); ?> Ocjena 4,8 · 1081 recenzija</p>
    <h2 class="ndp-h2 ndp-c">Vole ga <em>tisuće kupaca</em> diljem svijeta</h2>
    <p class="ndp-lead ndp-c">„Koristim ga nekoliko tjedana i nisam se probudila s bolovima u vratu ni glavoboljom – ne mogu vjerovati.” <strong>– Julija H.</strong></p>
    <div class="ndp-ugc">
      <?php foreach ( $ndp_ugc as $u ) : ?>
      <article class="ndp-ugc__card">
        <?php
        if ( 'video' === $u[0] ) {
          echo $ndp_video( $u[1], 'Kupac s jastukom NORIKS DualPillow', 'ndp-vid--sq' );
        } else {
          echo '<div class="ndp-ugc__img">' . $ndp_img( $u[1], 'Muškarac mirno spava na jastuku NORIKS DualPillow' ) . '</div>';
        }
        ?>
        <div class="ndp-ugc__body">
          <?php if ( $u[2] ) : ?><p class="ndp-ugc__tag"><?php echo esc_html( $u[2] ); ?></p><?php endif; ?>
          <?php echo $ndp_stars( 5 ); ?>
          <p class="ndp-ugc__txt">„<?php echo esc_html( $u[3] ); ?>”</p>
          <p class="ndp-ugc__ok">✓ Potvrđena kupnja</p>
        </div>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- 2) JASTUK KOJEM 99 % SPAVAČA PRIPISUJE SAN BEZ BOLOVA ("The pillow 99% of sleepers credit…") — slika ob besedilu -->
<section class="ndp-sec<?php echo $ndp_cls(); ?>">
  <div class="ndp-wrap">
    <div class="ndp-row2">
      <div class="ndp-media"><?php echo $ndp_img( 'ndp-s02-usporedba-hr.webp', 'Položaj vrata na običnom jastuku i na jastuku NORIKS DualPillow', 'ndp-img--free' ); ?></div>
      <div class="ndp-copy">
        <p class="ndp-kicker">Jastuk 2 u 1</p>
        <h2 class="ndp-h3">Jastuk kojem 99 % spavača pripisuje <em>san bez bolova – najbolji dosad</em></h2>
        <p>Zaboravite spljoštene jastuke, nezgodne kutove i oblike „jedan za sve”. Dizajn NORIKS DualPillow pruža vam <strong>potporu u dvije visine, ergonomske zone i udobnost po vašoj mjeri</strong>. Bez pomicanja, grudanja i premišljanja.</p>
        <ul class="ndp-feat">
          <?php foreach ( $ndp_feat as $f ) : ?>
          <li>
            <span class="ndp-feat__ic"><?php echo $ndp_img( $f[0], '' ); ?></span>
            <span><strong><?php echo esc_html( $f[1] ); ?></strong> <?php echo esc_html( $f[2] ); ?></span>
          </li>
          <?php endforeach; ?>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- 3) NISU SVI JASTUCI JEDNAKI ("Not all pillows are made equal.") — primerjava ob besedilu -->
<section class="ndp-sec<?php echo $ndp_cls(); ?>">
  <div class="ndp-wrap">
    <div class="ndp-row2 ndp-row2--rev">
      <div class="ndp-media">
        <div class="ndp-vs" role="group" aria-label="Usporedba običnog jastuka i jastuka NORIKS DualPillow">
          <div class="ndp-vs__card">
            <div class="ndp-vs__head"><span class="ndp-vs__name">Vaš jastuk</span><span class="ndp-vs__mark ndp-vs__mark--no" aria-hidden="true">✕</span></div>
            <div class="ndp-vs__tags"><?php foreach ( $ndp_cmp_old_tags as $t ) : ?><span><?php echo esc_html( $t ); ?></span><?php endforeach; ?></div>
            <div class="ndp-vs__img"><?php echo $ndp_img( 'ndp-s03-obicni-jastuk.webp', 'Spljošteni obični jastuk' ); ?></div>
            <ul class="ndp-vs__list"><?php foreach ( $ndp_cmp_old as $t ) : ?><li><?php echo esc_html( $t ); ?></li><?php endforeach; ?></ul>
          </div>
          <div class="ndp-vs__card ndp-vs__card--us">
            <div class="ndp-vs__head"><span class="ndp-vs__name"><small>NORIKS</small>DualPillow</span><span class="ndp-vs__mark" aria-hidden="true">✓</span></div>
            <div class="ndp-vs__tags"><?php foreach ( $ndp_cmp_new_tags as $t ) : ?><span><?php echo esc_html( $t ); ?></span><?php endforeach; ?></div>
            <div class="ndp-vs__img"><?php echo $ndp_img( 'ndp-s03-noriks-jastuk.webp', 'Jastuk NORIKS DualPillow' ); ?></div>
            <ul class="ndp-vs__list"><?php foreach ( $ndp_cmp_new as $t ) : ?><li><?php echo esc_html( $t ); ?></li><?php endforeach; ?></ul>
          </div>
        </div>
      </div>
      <div class="ndp-copy">
        <p class="ndp-kicker">Usporedba</p>
        <h2 class="ndp-h3">Nisu svi jastuci <em>jednaki.</em></h2>
        <p>Vaš stari jastuk spljošti se već do trećeg mjeseca – slaba potpora za vrat, vrućina tijekom spavanja, beskrajno protresanje i nikakvo jamstvo da će biti bolje.</p>
        <p>NORIKS DualPillow je drugačiji: <strong>potpora koju su odobrili osteopati</strong> i koja zadržava oblik, udobnost koja regulira temperaturu i jedinstveni <strong>dizajn 2 u 1</strong> kojem vjeruju tisuće spavača.</p>
        <p class="ndp-big">Pravo na povrat u roku od 30 dana.</p>
      </div>
    </div>
  </div>
</section>

<!-- 4) POVJERENJE TISUĆA ZADOVOLJNIH SPAVAČA ("Trusted by thousands of happy sleepers") — 3 kartice s postotki -->
<section class="ndp-sec<?php echo $ndp_cls(); ?>">
  <div class="ndp-wrap">
    <p class="ndp-kicker ndp-c">Rezultati</p>
    <h2 class="ndp-h2 ndp-c">Povjerenje tisuća <em>zadovoljnih spavača</em></h2>
    <p class="ndp-lead ndp-c">Stvarni ljudi spavaju dublje, svježije i udobnije uz NORIKS DualPillow.</p>
    <div class="ndp-stats">
      <?php foreach ( $ndp_stats as $s ) : ?>
      <div class="ndp-stat">
        <p class="ndp-stat__n"><?php echo esc_html( $s[0] ); ?></p>
        <p class="ndp-stat__t"><?php echo esc_html( $s[1] ); ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- 5) SPAVAJTE NA NJEMU 30 NOĆI ("Sleep On It For 30 Nights") — slika ob besedilu, NORIKS pogoji -->
<section class="ndp-sec<?php echo $ndp_cls(); ?>">
  <div class="ndp-wrap">
    <div class="ndp-row2">
      <div class="ndp-media"><?php echo $ndp_img( 'ndp-s05-30-noci.webp', 'Žena mirno spava noću na jastuku NORIKS DualPillow', 'ndp-img--free' ); ?></div>
      <div class="ndp-copy">
        <p class="ndp-kicker">30 dana bez rizika</p>
        <h2 class="ndp-h3">Spavajte na njemu <em>30 noći</em></h2>
        <p>Jedini pravi test jastuka je mjesec dana u vlastitom krevetu. Zato uz svaki NORIKS DualPillow imate <strong>pravo na povrat u roku od 30 dana</strong> – dajte si punih 30 noći da se naviknete, a ako vam ipak ne odgovara, jednostavno ga vratite.</p>
        <p class="ndp-big">Besplatna dostava za narudžbe iznad 70 €.</p>
      </div>
    </div>
  </div>
</section>

<!-- 6) RECENZIJE KUPACA (Junip 4.8 / 1161 -> 1081 po NORIKS) -->
<section class="ndp-sec<?php echo $ndp_cls(); ?>">
  <div class="ndp-wrap">
    <p class="ndp-kicker ndp-c">Recenzije kupaca</p>
    <h2 class="ndp-h2 ndp-c">Recenzije <em>NORIKS DualPillow</em></h2>
    <div class="ndp-score">
      <?php echo $ndp_stars( 5 ); ?>
      <span class="ndp-score__txt"><strong>4,8</strong> · na temelju 1081 recenzije</span>
    </div>
    <div class="ndp-reviews">
      <?php foreach ( $ndp_rv as $r ) : ?>
      <article class="ndp-card">
        <div class="ndp-card__body">
          <?php echo $ndp_stars( $r[1] ); ?>
          <p class="ndp-card__txt">„<?php echo esc_html( $r[2] ); ?>”</p>
          <p class="ndp-card__name"><?php echo esc_html( $r[0] ); ?> <span class="ndp-ok">✓ Potvrđena kupnja</span></p>
        </div>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<style>
/* NORIKS stil (predloga why-therapillow.php / why-hands.php): oznaka + naslov z ležečim poudarkom, slika ob
   besedilu, izmenjujoča ozadja in strani. Paleta originala: mornarsko modra #283455, poudarek #2f5596, ozadje #eef2f8. */
.ndp-sec { padding: 60px 0; font-family: 'Poppins', system-ui, -apple-system, 'Segoe UI', Roboto, Arial, sans-serif; color: #1b2233; background: #fff; }
.ndp-sec * { box-sizing: border-box; }
.ndp-tint { background: #eef2f8; }
.ndp-wrap { width: 100%; max-width: 1200px; margin: 0 auto; padding: 0 24px; }
.ndp-c { text-align: center; }
.ndp-sec h2, .ndp-sec h3 { font-family: inherit; text-transform: none; letter-spacing: 0; }
.ndp-kicker, .ndp-copy p.ndp-kicker { font-size: 12.5px; line-height: 1.4; font-weight: 700; letter-spacing: .14em; text-transform: uppercase; color: #2f5596; margin: 0 0 10px; }
.ndp-kicker .ndp-stars { letter-spacing: 1px; margin-right: 6px; }
.ndp-h2 { font-weight: 700; font-size: clamp(25px, 3.1vw, 36px); line-height: 1.2; margin: 0 0 18px; color: #1b2233; }
.ndp-h2 em, .ndp-h3 em { font-style: italic; color: #2f5596; }
.ndp-h3 { font-weight: 700; font-size: clamp(22px, 2.6vw, 30px); line-height: 1.25; margin: 0 0 16px; color: #1b2233; }
.ndp-sec img { display: block; width: 100%; height: auto; }
.ndp-lead { max-width: 760px; margin: 0 auto 32px; font-size: 16.5px; line-height: 1.7; color: #3e4659; }
.ndp-lead strong { color: #1b2233; font-weight: 600; }

/* slika ob besedilu */
.ndp-row2 { display: grid; grid-template-columns: 1fr 1fr; gap: 56px; align-items: center; }
.ndp-row2--rev .ndp-media { order: 2; }
.ndp-media > img { border-radius: 10px; box-shadow: 0 2px 4px rgba(27,34,51,.05), 0 14px 40px rgba(27,34,51,.10); max-width: 560px; margin: 0 auto; aspect-ratio: 1 / 1; object-fit: cover; background: #fff; }
.ndp-media > img.ndp-img--free { aspect-ratio: auto; object-fit: contain; }
.ndp-copy p { font-size: 16px; line-height: 1.7; color: #3e4659; margin: 0 0 14px; }
.ndp-copy p strong { color: #1b2233; font-weight: 600; }
.ndp-sec p.ndp-big { font-size: 19px; font-weight: 700; color: #1b2233; line-height: 1.45; margin-top: 6px; }

/* videi / kartice kupcev */
.ndp-vid { position: relative; overflow: hidden; background: #283455; margin: 0 auto; }
.ndp-vid video { display: block; width: 100%; height: 100%; object-fit: cover; }
.ndp-vid--sq { aspect-ratio: 1 / 1; }
.ndp-ugc { display: grid; grid-template-columns: repeat(3, minmax(0, 1fr)); gap: 20px; }
.ndp-ugc__card { background: #fff; border: 1px solid #d6deeb; border-radius: 10px; overflow: hidden; box-shadow: 0 2px 10px rgba(27,34,51,.06); display: flex; flex-direction: column; }
.ndp-ugc__img img { aspect-ratio: 1 / 1; object-fit: cover; }
.ndp-ugc__body { padding: 16px 18px 18px; }
.ndp-ugc__body p.ndp-ugc__tag { display: inline-block; background: #283455; color: #fff; border-radius: 999px; padding: 4px 12px; font-size: 12.5px; font-weight: 600; margin: 0 0 8px; }
.ndp-ugc__card .ndp-ugc__tag + .ndp-stars { display: block; }
.ndp-ugc__txt { font-size: 15.5px; line-height: 1.6; color: #2a3143; margin: 8px 0 8px; font-style: italic; }
.ndp-ugc__ok { font-size: 12.5px; font-weight: 600; color: #2f9e5f; margin: 0; }

/* prednosti z ikonami */
.ndp-feat { list-style: none; margin: 8px 0 0; padding: 0; display: grid; gap: 14px; }
.ndp-feat li { display: flex; align-items: center; gap: 14px; font-size: 15.5px; line-height: 1.5; color: #3e4659; }
.ndp-feat li strong { color: #1b2233; font-weight: 600; }
.ndp-feat__ic { flex: 0 0 46px; width: 46px; height: 46px; border-radius: 50%; background: #fff; border: 1px solid #d6deeb; display: flex; align-items: center; justify-content: center; }
.ndp-tint .ndp-feat__ic { background: #fff; }
.ndp-sec .ndp-feat__ic img { width: 24px; height: 24px; object-fit: contain; }

/* usporedba vaš jastuk / NORIKS */
.ndp-vs { display: grid; grid-template-columns: 1fr 1fr; gap: 14px; max-width: 580px; margin: 0 auto; }
.ndp-vs__card { background: #fff; border: 1px solid #d6deeb; border-radius: 10px; padding: 16px; box-shadow: 0 2px 10px rgba(27,34,51,.06); display: flex; flex-direction: column; gap: 12px; }
.ndp-vs__card--us { background: #283455; border-color: #283455; color: #fff; }
.ndp-vs__head { display: flex; justify-content: space-between; align-items: flex-start; gap: 8px; }
.ndp-vs__name { font-family: Georgia, 'Times New Roman', serif; font-size: 19px; line-height: 1.2; color: #1b2233; }
.ndp-vs__name small { display: block; font-family: 'Poppins', Arial, sans-serif; font-size: 11px; font-weight: 700; letter-spacing: .12em; color: #c9d5ea; margin-bottom: 2px; }
.ndp-vs__card--us .ndp-vs__name { color: #fff; }
.ndp-vs__mark { flex: 0 0 26px; width: 26px; height: 26px; border-radius: 50%; border: 1.5px solid #fff; color: #fff; font-size: 13px; font-weight: 800; line-height: 23px; text-align: center; }
.ndp-vs__mark--no { border-color: #1b2233; color: #1b2233; }
.ndp-vs__tags { display: flex; flex-wrap: wrap; gap: 6px; }
.ndp-vs__tags span { font-size: 11.5px; line-height: 1.3; padding: 4px 9px; border-radius: 999px; border: 1px solid #d9534f; color: #b23a36; background: #fff; }
.ndp-vs__card--us .ndp-vs__tags span { border-color: #fff; color: #283455; background: #fff; }
.ndp-vs__img img { aspect-ratio: 4 / 3; object-fit: contain; background: #fff; border-radius: 8px; }
.ndp-vs__list { list-style: none; margin: 0; padding: 0; display: grid; gap: 6px; }
.ndp-vs__list li { position: relative; padding-left: 20px; font-size: 13px; line-height: 1.4; color: #6a7183; }
.ndp-vs__list li::before { content: "✕"; position: absolute; left: 0; top: 0; font-size: 11px; font-weight: 800; color: #b9bfcc; }
.ndp-vs__card--us .ndp-vs__list li { color: #fff; }
.ndp-vs__card--us .ndp-vs__list li::before { content: "✓"; color: #7fd6a2; }

/* postotki */
.ndp-stats { display: grid; grid-template-columns: repeat(3, minmax(0, 1fr)); gap: 20px; max-width: 980px; margin: 0 auto; }
.ndp-stat { background: #fff; border: 1px solid #d6deeb; border-radius: 10px; padding: 28px 22px; text-align: center; box-shadow: 0 2px 10px rgba(27,34,51,.05); }
.ndp-sec .ndp-stat p.ndp-stat__n { font-size: clamp(38px, 4.6vw, 52px); font-weight: 700; line-height: 1; color: #283455; margin: 0 0 12px; }
.ndp-sec .ndp-stat p.ndp-stat__t { font-size: 15px; line-height: 1.55; color: #3e4659; margin: 0; }

/* kartice mnenj */
.ndp-card { background: #fff; border: 1px solid #d6deeb; border-radius: 10px; overflow: hidden; display: flex; flex-direction: column; box-shadow: 0 2px 10px rgba(27,34,51,.05); }
.ndp-sec:not(.ndp-tint) .ndp-card { background: #f6f8fc; }
.ndp-card__body { padding: 16px; }
.ndp-card__txt { font-size: 14.5px; line-height: 1.6; color: #2a3143; margin: 8px 0 10px; font-style: italic; }
.ndp-card__name { font-size: 13.5px; font-weight: 600; color: #1b2233; margin: 0; }

/* ocjene */
.ndp-stars { color: #f2a516; letter-spacing: 1px; font-size: 15px; }
.ndp-stars__off { color: #d3d9e4; }
.ndp-ok { color: #2f9e5f; font-weight: 600; font-size: 12px; margin-left: 4px; font-style: normal; }
.ndp-score { display: flex; justify-content: center; align-items: center; gap: 12px; margin: -4px 0 26px; flex-wrap: wrap; }
.ndp-score .ndp-stars { font-size: 20px; }
.ndp-score__txt { font-size: 14.5px; color: #5a6275; }
.ndp-score__txt strong { color: #1b2233; }
.ndp-reviews { columns: 4; column-gap: 18px; }
.ndp-reviews > .ndp-card { break-inside: avoid; margin-bottom: 18px; }

@media (max-width: 989px) {
  .ndp-row2 { gap: 32px; }
  .ndp-ugc { gap: 14px; }
  .ndp-reviews { columns: 3; }
}
@media (max-width: 749px) {
  .ndp-sec { padding: 42px 0; }
  .ndp-wrap { padding: 0 16px; }
  .ndp-row2 { grid-template-columns: 1fr; gap: 24px; }
  .ndp-row2--rev .ndp-media { order: 0; }
  .ndp-ugc { grid-template-columns: 1fr; }
  .ndp-stats { grid-template-columns: 1fr; gap: 12px; }
  .ndp-vs { gap: 10px; }
  .ndp-vs__card { padding: 12px; }
  .ndp-vs__name { font-size: 16px; }
  .ndp-reviews { columns: 2; column-gap: 12px; }
  .ndp-reviews > .ndp-card { margin-bottom: 12px; }
  .ndp-card__body { padding: 12px; }
}
@media (max-width: 480px) {
  .ndp-reviews { columns: 1; }
}

/* galerija izdelka: sličice največ v 2 vrstah (5 na vrsto), ostale slike so dosegljive z drsenjem glavne slike */
.product_cat-orto-dualpillow .flex-control-thumbs li:nth-child(n+11) { display: none !important; }

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
.woocommerce-product-details__short-description .ndp-tick {
  position: absolute !important; left: 0 !important; top: 1px !important;
  width: 21px; height: 21px; border-radius: 50%;
  background: #2f9e5f !important; color: #fff !important;
  font-size: 12px !important; font-weight: 800 !important; line-height: 21px !important;
  text-align: center !important; display: inline-block !important; }
.woocommerce-product-details__short-description p:first-of-type { font-size: 16px; line-height: 1.55; }
</style>
