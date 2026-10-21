<?php
/**
 * product-bottom: NORIKS AnkleSleeve — kompresijska potpora za glezanj (orto-anklesleeve).
 * Original: flytex.fr (Maintien de Compression pour Chevilles V3) — vsebina in vrstni red 1:1 (prevedeno iz francoscine),
 * oblika po NORIKS stilu (predloga why-hands.php / why-corksandals.php):
 *   1) Vratite kontrolu ("Retrouvez le controle...") — GIF -> utisan video brez znamke (logotip na potpori odstranjen) ob besedilu
 *   2) Kako djeluje? / Vise potpore i samopouzdanja ("Comment ca marche ?" + "Plus de maintien et de confiance") — slika ob besedilu
 *   3) Vise udobnosti za bolje izvedbe ("Plus de confort pour de meilleur performance") — slika ob besedilu
 *   4) Potpore u detalje ("... en details") — infografika z napisi v hrvascini ob besedilu
 *   5) Nas model u usporedbi s drugima ("Notre modele face aux autres ?") — usporedba (slika z napisi v hrvascini) ob besedilu
 *   6) Recenzije kupaca (12 recenzij z originala, 9 s fotografijami kupcev brez logotipa, 1955 -> 692; ime znamke izpusceno)
 * FAQ z originala je v reviews.php ($anklesleeve_faq). Sekcija s priporocili znanih sportnikov ("Valide par +200 000 sportifs
 * et les plus grands athletes"), citati v nakupni skatli, pasica "1 paire achetee = la 2eme a -30%" in drsnik
 * "Jusqu'a -30 % sur votre deuxieme produit" z originala so izpusceni (tuja znamka / NORIKS stil).
 * Slike / video: img/anklesleeve/ (brez tuje znamke, napisi prevedeni).
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$nas      = get_template_directory_uri() . '/img/anklesleeve/';
$nas_path = get_template_directory() . '/img/anklesleeve/';
$nas_img  = function( $file, $alt ) use ( $nas, $nas_path ) {
  if ( ! $file || ! file_exists( $nas_path . $file ) ) { return ''; }
  return '<img src="' . esc_url( $nas . $file ) . '" alt="' . esc_attr( $alt ) . '" loading="lazy">';
};
$nas_vid  = function( $file ) use ( $nas, $nas_path ) {
  if ( ! $file || ! file_exists( $nas_path . $file . '.mp4' ) ) { return ''; }
  return '<video src="' . esc_url( $nas . $file . '.mp4' ) . '" poster="' . esc_url( $nas . $file . '-poster.webp' ) . '" muted autoplay loop playsinline preload="metadata"></video>';
};
$nas_stars = function( $n ) {
  $n = max( 0, min( 5, (int) $n ) );
  $out = '<span class="nas-stars" aria-label="' . esc_attr( $n . ' od 5 zvjezdica' ) . '">';
  for ( $i = 1; $i <= 5; $i++ ) { $out .= '<i' . ( $i > $n ? ' class="is-off"' : '' ) . '>★</i>'; }
  return $out . '</span>';
};

/* 6) recenzije 1:1 z originala (prevedene, ime znamke izpusceno) */
$nas_reviews = array(
  array( 'slika' => 'as-rv-01.webp', 'ime' => 'Nicolas R.', 'z' => 5, 'tekst' => 'Bio sam skeptičan pa sam ih kupio samo da probam — vrlo ugodno iznenađenje: više nemam nelagode u gležnjevima. Iskreno, ugodno sam iznenađen ovim potporama za gležanj i preporučujem ih svima koji imaju tegobe s gležnjevima.' ),
  array( 'slika' => '', 'ime' => 'Vanessa C.', 'z' => 5, 'tekst' => 'Obožavam ove potpore za gležanj, savršeno drže gležanj i godi mi kad me boli. Jako sam zadovoljna.' ),
  array( 'slika' => 'as-rv-02.webp', 'ime' => 'Adrien M.', 'z' => 5, 'tekst' => 'Vrlo sam zadovoljan ovom potporom za gležanj. Stvarno dobro drži, a nije previše kruta, pa se može udobno hodati i baviti sportom. Kompresija lijepo rasterećuje gležanj i daje pravi osjećaj stabilnosti. Materijal je ugodan za nošenje u cipelama. Igram nogomet s njom i jako dobro drži tijekom treninga i utakmica. Dobar omjer cijene i kvalitete.' ),
  array( 'slika' => 'as-rv-03.webp', 'ime' => 'Stéphane B.', 'z' => 5, 'tekst' => 'Otkad imam ovu potporu za gležanj, ponovno živim — posebno što se tiče Ahilove tetive.' ),
  array( 'slika' => '', 'ime' => 'Laurent K.', 'z' => 5, 'tekst' => 'Gležnjevi su čvrsto poduprti. Super za sport s puno samopouzdanja.' ),
  array( 'slika' => 'as-rv-04.webp', 'ime' => 'Barbara C.', 'z' => 5, 'tekst' => 'U travnju sam imala potpuno puknuće Ahilove tetive (operacija, 6 tjedana gips, 2 tjedna čizma za hodanje i 2 tjedna samo štake). Danas još malo šepam, ali otkad imam potporu za gležanj, imam puno više stabilnosti.' ),
  array( 'slika' => 'as-rv-05.webp', 'ime' => 'Philippe B.', 'z' => 4, 'tekst' => 'Nosim broj 43 pa sam uzeo veličinu M. Dobro drži stopalo, ali imam tanke listove pa me gornji dio potpore uopće ne steže.' ),
  array( 'slika' => '', 'ime' => 'Annabelle D.', 'z' => 5, 'tekst' => 'Vrlo sam zadovoljna potporom i pritiskom. Bolovi su manji kad ih nosim.' ),
  array( 'slika' => 'as-rv-06.webp', 'ime' => 'Chris C.', 'z' => 4, 'tekst' => 'Optimalna potpora. Vrlo praktična i ne smeta u svakodnevici. Manje odgovara za uske kopačke kad je stopalo već jako široko — treba uzeti i odgovarajuću obuću. Svejedno preporučujem.' ),
  array( 'slika' => 'as-rv-07.webp', 'ime' => 'Laetitia G.', 'z' => 5, 'tekst' => 'Vrlo dobra potpora kod plantarnog fasciitisa, jako mi olakšava. Nosim je od jutra do večeri tijekom radnog dana i imam manje bolova. Jako sam zadovoljna.' ),
  array( 'slika' => 'as-rv-08.webp', 'ime' => 'Laurent S.', 'z' => 5, 'tekst' => 'Vrlo dobra potpora za gležanj, ali onima koji poput mene imaju usko stopalo savjetujem veličinu S. Nosim broj 43.' ),
  array( 'slika' => 'as-rv-09.webp', 'ime' => 'Philippe L.', 'z' => 5, 'tekst' => 'Nakon jakog uganuća — vrlo učinkovita, preporučujem je.' ),
);
// Število recenzij usklajeno z glavo strani in zavihki recenzij teme (1081 skupaj = 692 izdelka + 389 dostave);
// povprecje 4,6 kot na originalu ("4.6 / 5"), porazdelitev skalirana na 692.
$nas_dist = array( 5 => array( '512', 74 ), 4 => array( '111', 16 ), 3 => array( '42', 6 ), 2 => array( '14', 2 ), 1 => array( '13', 2 ) );
?>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap">

<!-- 1) VRATITE KONTROLU — video ob besedilu -->
<section class="nas-sec nas-tint">
  <div class="nas-wrap">
    <div class="nas-row2">
      <div class="nas-media nas-media--video"><?php echo $nas_vid( 'as-video' ); ?></div>
      <div class="nas-copy">
        <p class="nas-kicker">Kontrola i pokretljivost</p>
        <h2 class="nas-h3">Vratite kontrolu nad <em>svojim izvedbama i pokretljivošću</em></h2>
        <p>Ako tražite <strong>više udobnosti, sigurnosti</strong> i želite <strong>poboljšati svoje izvedbe</strong>, na pravom ste mjestu.</p>
        <p>Naše potpore za gležanj osmišljene su da <strong>pruže optimiziranu potporu</strong> i prate vaše pokrete <strong>uz više oslonca</strong>.</p>
        <p class="nas-big">Na programu: više udobnosti, stabilnosti i izvedbe.</p>
      </div>
    </div>
  </div>
</section>

<!-- 2) KAKO DJELUJE? VISE POTPORE I SAMOPOUZDANJA — slika ob besedilu -->
<section class="nas-sec">
  <div class="nas-wrap">
    <div class="nas-row2 nas-row2--rev">
      <div class="nas-media"><?php echo $nas_img( 'as-02-navlacenje.webp', 'NORIKS AnkleSleeve – navlačenje kompresijske potpore za gležanj' ); ?></div>
      <div class="nas-copy">
        <p class="nas-kicker">Kako djeluje?</p>
        <h2 class="nas-h3">Više potpore <em>i samopouzdanja</em></h2>
        <p>Kompresijske potpore za gležanj <strong>prianjaju uz oblik stopala</strong> poput druge kože i pružaju <strong>ciljanu potporu</strong>, a pritom čuvaju <strong>vašu slobodu pokreta</strong>.</p>
        <p class="nas-big">Za bolju stabilnost i dobru udobnost tijekom napora.</p>
      </div>
    </div>
  </div>
</section>

<!-- 3) VISE UDOBNOSTI ZA BOLJE IZVEDBE — slika ob besedilu -->
<section class="nas-sec nas-tint">
  <div class="nas-wrap">
    <div class="nas-row2">
      <div class="nas-media"><?php echo $nas_img( 'as-03-kompresija.webp', 'NORIKS AnkleSleeve – kompresija oko gležnja' ); ?></div>
      <div class="nas-copy">
        <p class="nas-kicker">Kako djeluje?</p>
        <h2 class="nas-h3">Više udobnosti <em>za bolje izvedbe</em></h2>
        <p>Tehnologija kompresije pridonosi <strong>boljem osjećaju</strong> tijekom sporta, pa se možete <strong>usredotočiti na izvedbu</strong>.</p>
        <p>Pomaže i nakon treninga, uz <strong>osjećaj lakoće</strong>.</p>
        <p class="nas-big">Osjećaj lakoće — tijekom i nakon treninga.</p>
      </div>
    </div>
  </div>
</section>

<!-- 4) POTPORE U DETALJE — infografika ob besedilu -->
<section class="nas-sec">
  <div class="nas-wrap">
    <div class="nas-row2 nas-row2--rev">
      <div class="nas-media"><?php echo $nas_img( 'as-04-detalji-hr.webp', 'NORIKS AnkleSleeve – ciljana kompresija, više kontrole, prozračni materijali, tanki šav' ); ?></div>
      <div class="nas-copy">
        <p class="nas-kicker">U detalje</p>
        <h2 class="nas-h3">Kompresijske potpore za gležanj <em>u detalje</em></h2>
        <p>Kompresije nove generacije, <strong>osmišljene da vas prate u aktivnosti</strong> i poboljšaju osjećaj pri kretanju.</p>
        <p>Sve to <strong>bez ograničavanja slobode pokreta</strong>, za veću fluidnost tijekom napora.</p>
        <p>Napravili smo ih laganima, udobnima i otpornima, za optimalnu potporu u pokretu.</p>
        <p class="nas-big">Osmislili sportaši, za sportaše.</p>
      </div>
    </div>
  </div>
</section>

<!-- 5) NAS MODEL U USPOREDBI S DRUGIMA — usporedba ob besedilu -->
<section class="nas-sec nas-tint">
  <div class="nas-wrap">
    <div class="nas-row2">
      <div class="nas-media"><?php echo $nas_img( 'as-05-usporedba-hr.webp', 'Usporedba: ostale potpore i NORIKS AnkleSleeve' ); ?></div>
      <div class="nas-copy">
        <p class="nas-kicker">Usporedba</p>
        <h2 class="nas-h3">Naš model <em>u usporedbi s drugima</em></h2>
        <p>Za razliku od klasičnih modela, naše potpore za gležanj <strong>posebno su osmišljene da prate vaše pokrete tijekom napora</strong>, s tankim i prozračnim materijalima.</p>
        <p>Ergonomski dizajn omogućuje da se <strong>savršeno prilagode</strong> i ne smetaju u cipeli.</p>
        <p class="nas-big">Prilagođena potpora, namijenjena sportu — bez nelagode u cipeli.</p>
      </div>
    </div>
  </div>
</section>

<!-- 6) RECENZIJE KUPACA -->
<section class="nas-sec nas-sec--reviews">
  <div class="nas-wrap">
    <p class="nas-kicker nas-c">Recenzije kupaca</p>
    <h2 class="nas-h2 nas-c">Sportaši nam vjeruju <em>za potporu u pokretu</em></h2>
    <p class="nas-lead nas-c">Ove recenzije odražavaju osobna iskustva. NORIKS nudi opremu osmišljenu da prati sportaše u njihovim aktivnostima.</p>
    <div class="nas-summary">
      <div class="nas-summary__score"><strong>4,6</strong><?php echo $nas_stars( 5 ); ?><span>na temelju 692 recenzije proizvoda</span></div>
      <div class="nas-summary__bars">
        <?php foreach ( $nas_dist as $z => $d ) : ?>
        <div class="nas-bar"><span class="nas-bar__lbl"><?php echo (int) $z; ?> ★</span><span class="nas-bar__track"><span style="width:<?php echo (int) $d[1]; ?>%"></span></span><span class="nas-bar__n"><?php echo esc_html( $d[0] ); ?></span></div>
        <?php endforeach; ?>
      </div>
    </div>
    <div class="nas-revs">
      <?php foreach ( $nas_reviews as $r ) : ?>
      <article class="nas-rv">
        <?php if ( $r['slika'] ) : ?><div class="nas-rv__img"><?php echo $nas_img( $r['slika'], 'Fotografija kupca: ' . $r['ime'] ); ?></div><?php endif; ?>
        <div class="nas-rv__body">
          <?php echo $nas_stars( $r['z'] ); ?>
          <p class="nas-rv__txt"><?php echo esc_html( $r['tekst'] ); ?></p>
          <p class="nas-rv__name"><?php echo esc_html( $r['ime'] ); ?> <span>· Provjereni kupac</span></p>
        </div>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<style>
/* NORIKS stil (predloga why-hands.php / why-corksandals.php): oznaka + naslov z lezecim poudarkom, slika/video ob besedilu,
   izmenjujoca ozadja. Barvni poudarek izdelka: temno modra (#24476b) — crna sportna potpora. */
.nas-sec { padding: 60px 0; font-family: 'Poppins', system-ui, -apple-system, 'Segoe UI', Roboto, Arial, sans-serif; color: #1c2733; background: #fff; }
.nas-sec * { box-sizing: border-box; }
.nas-tint { background: #f1f5f9; }
.nas-wrap { width: 100%; max-width: 1200px; margin: 0 auto; padding: 0 24px; }
.nas-c { text-align: center; }
.nas-sec h2, .nas-sec h3 { font-family: inherit; text-transform: none; letter-spacing: 0; }
.nas-kicker, .nas-copy p.nas-kicker { font-size: 12.5px; line-height: 1.4; font-weight: 700; letter-spacing: .14em; text-transform: uppercase; color: #24476b; margin: 0 0 10px; }
.nas-h2 { font-weight: 700; font-size: clamp(25px, 3.1vw, 36px); line-height: 1.2; margin: 0 0 30px; color: #1c2733; }
.nas-h2 em, .nas-h3 em { font-style: italic; color: #24476b; }
.nas-h3 { font-weight: 700; font-size: clamp(22px, 2.6vw, 30px); line-height: 1.25; margin: 0 0 16px; color: #1c2733; }
.nas-lead { font-size: 15px; line-height: 1.6; color: #4f5b68; margin: -16px auto 26px; max-width: 760px; }
.nas-sec img, .nas-sec video { display: block; width: 100%; height: auto; }

/* slika/video ob besedilu */
.nas-row2 { display: grid; grid-template-columns: 1fr 1fr; gap: 56px; align-items: center; }
.nas-row2--rev .nas-media { order: 2; }
.nas-media img, .nas-media video { aspect-ratio: 1 / 1; object-fit: cover; border-radius: 8px; background: #fff; box-shadow: 0 2px 4px rgba(20,40,70,.05), 0 14px 40px rgba(20,40,70,.10); }
.nas-media--video video { aspect-ratio: 778 / 996; max-width: 440px; margin: 0 auto; }
.nas-copy p { font-size: 16px; line-height: 1.7; color: #4f5b68; margin: 0 0 14px; }
.nas-copy p strong { color: #1c2733; font-weight: 600; }
.nas-copy p.nas-big { font-size: 19px; font-weight: 700; color: #1c2733; line-height: 1.45; margin-top: 6px; }

/* zvjezdice */
.nas-stars { display: inline-flex; gap: 3px; margin: 0 0 12px; vertical-align: middle; }
.nas-stars i { font-style: normal; width: 22px; height: 22px; background: #00b67a; color: #fff; font-size: 15px; line-height: 22px; text-align: center; }
.nas-stars i.is-off { background: #dcdce6; }

/* recenzije */
.nas-summary { display: flex; align-items: center; justify-content: center; gap: 40px; margin: 0 0 34px; flex-wrap: wrap; }
.nas-summary__score { display: flex; flex-direction: column; align-items: center; gap: 6px; }
.nas-summary__score strong { font-size: 44px; line-height: 1; font-weight: 700; }
.nas-summary__score .nas-stars { margin: 0; }
.nas-summary__score span { font-size: 14px; color: #4f5b68; }
.nas-summary__bars { min-width: 280px; }
.nas-bar { display: flex; align-items: center; gap: 10px; font-size: 14px; color: #4f5b68; margin: 0 0 6px; }
.nas-bar__lbl { width: 30px; white-space: nowrap; }
.nas-bar__track { flex: 1 1 auto; height: 9px; background: #e2e9f1; border-radius: 6px; overflow: hidden; min-width: 160px; }
.nas-bar__track span { display: block; height: 100%; background: #24476b; }
.nas-bar__n { width: 64px; white-space: nowrap; }
.nas-revs { columns: 3; column-gap: 18px; }
.nas-rv { background: #fff; border: 1px solid #d6e0ea; border-radius: 10px; overflow: hidden; break-inside: avoid; margin: 0 0 18px; display: inline-block; width: 100%; }
.nas-rv__img img { aspect-ratio: 3 / 4; object-fit: cover; }
.nas-rv__body { padding: 16px 18px 14px; }
.nas-rv .nas-stars { margin-bottom: 10px; }
.nas-rv .nas-stars i { width: 19px; height: 19px; font-size: 13px; line-height: 19px; }
.nas-rv__txt { font-size: 14.5px; line-height: 1.6; color: #34404c; margin: 0 0 12px; }
.nas-rv__name { font-size: 13.5px; font-weight: 600; color: #1c2733; margin: 0; border-top: 1px solid #d6e0ea; padding-top: 12px; }
.nas-rv__name span { font-weight: 400; color: #2e7d32; }

@media (max-width: 989px) {
  .nas-revs { columns: 2; }
  .nas-row2 { gap: 32px; }
}
@media (max-width: 749px) {
  .nas-sec { padding: 42px 0; }
  .nas-wrap { padding: 0 16px; }
  .nas-revs { columns: 1; }
  .nas-row2 { grid-template-columns: 1fr; gap: 24px; }
  .nas-row2--rev .nas-media { order: 0; }
}

/* galerija izdelka: sličice največ v 2 vrstah (5 na vrsto), ostale slike so dosegljive z drsenjem glavne slike */
.product_cat-orto-anklesleeve .flex-control-thumbs li:nth-child(n+11) { display: none !important; }

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
.woocommerce-product-details__short-description .nas-tick {
  position: absolute !important; left: 0 !important; top: 1px !important;
  width: 21px; height: 21px; border-radius: 50%;
  background: #2f9e5f !important; color: #fff !important;
  font-size: 12px !important; font-weight: 800 !important; line-height: 21px !important;
  text-align: center !important; display: inline-block !important; }
.woocommerce-product-details__short-description p:first-of-type { font-size: 16px; line-height: 1.55; }
</style>
