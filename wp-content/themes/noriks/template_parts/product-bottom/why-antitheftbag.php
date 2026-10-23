<?php
/**
 * product-bottom: NORIKS AntiTheftBag — luksuzna hobo torba sa zaštitom od krađe (orto-antitheftbag).
 * Original: libracases.com/products/luxury-hobo-handbag-special-gift-1 — vsebina in vrstni red 1:1 z originalom,
 * oblika po NORIKS stilu (predloga why-bottlesling.php / why-hands.php), privzeta topla rjava paleta NORIKS (#a9683f):
 *   uvodni naslov "Here are 5 reasons why you should try out … Anti-Theft Handbag" -> 5 razloga … (v 1. sekciji)
 *   1) "The Libra Difference / SMALL BATCH PRODUCTION"  -> NORIKS razlika / Proizvodnja u malim serijama
 *        (slika ob besedilu; napis AS SEEN IN + logotipi VOGUE / marie claire / GRAZIA s stene retuširani)
 *   2) "Security & Style in Every Stitch"               -> Sigurnost i stil u svakom šavu (slika ob besedilu)
 *   3) "Beauty That Lasts"                              -> Ljepota koja traje (GIF -> utišan video; vžgana napisa
 *        "Convenient side pockets" / "Large Capacity" -> "Praktični bočni džepovi" / "Veliki kapacitet")
 *   4) "Wear It Your Way"                               -> Nosite je na svoj način (slika ob besedilu)
 *   5) "Everyday Durability, Elevated Look"             -> Svakodnevna izdržljivost, profinjen izgled (slika ob besedilu)
 *   6) "RISK-FREE MONEY-BACK GUARANTEE" + 4 reasons     -> Jamstvo povrata novca bez rizika (HTML pečat, NORIKS pogoji)
 *   7) "See Why 258,437+ customers trust …" + Customer Reviews (4.9 / 5, 4569) -> 1081 recenzija po NORIKS, 9 mnenj s fotografijami
 * FAQ (original ga nima; 7 vprašanj iz vsebine originala, po NORIKS pogojih) je v reviews.php ($antitheftbag_faq),
 * mnenja v auto_reviews/HR_antitheftbag.php, opis in nega v standardnih harmonikah (meta.php).
 * Izpusceno: glava, pasica Free U.S. shipping / 1-year warranty / Easy Returns, SALE ENDS TONIGHT, AS SEEN IN (logotipi
 * medijev), Trustpilot znacka, 1-Year Warranty & 30-Day Money-Back okvir v nakupni skatli, darila (FREE Pouch Wallet,
 * nakit / kozmeticna torbica v paketih), odgovori trgovine pod mnenji, noga.
 * Slike: img/antitheftbag/ (natb-…).
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$natb      = get_template_directory_uri() . '/img/antitheftbag/';
$natb_path = get_template_directory() . '/img/antitheftbag/';
$natb_img  = function( $file, $alt ) use ( $natb, $natb_path ) {
  if ( ! $file || ! file_exists( $natb_path . $file ) ) { return ''; }
  return '<img src="' . esc_url( $natb . $file ) . '" alt="' . esc_attr( $alt ) . '" loading="lazy">';
};
$natb_video = function( $file, $poster, $label ) use ( $natb, $natb_path ) {
  if ( ! $file || ! file_exists( $natb_path . $file ) ) { return ''; }
  return '<video src="' . esc_url( $natb . $file ) . '" poster="' . esc_url( $natb . $poster ) . '"'
    . ' muted autoplay loop playsinline preload="metadata" aria-label="' . esc_attr( $label ) . '"></video>';
};
$natb_stars = function( $n ) {
  $n = max( 0, min( 5, (int) $n ) );
  return '<span class="natb-stars" aria-label="' . $n . ' od 5 zvjezdica">' . str_repeat( '★', $n ) . '<span class="natb-stars__off">' . str_repeat( '★', 5 - $n ) . '</span></span>';
};

/* 7) mnenja s fotografijami (prevedeno; znamka trgovine -> NORIKS, odgovori trgovine izpusceni) */
$natb_rv = array(
  array( 'ime' => 'Danielle F.', 'slika' => 'natb-rv-01.webp', 'tekst' => 'Dobro, službeno sam opsjednuta. Hobo torba je uživo još ljepša. Ima taj mekani, opušteni izgled koji obožavam. Kupila sam jednu za sebe, a sada je želi i moja sestra.' ),
  array( 'ime' => 'Amanda C.',   'slika' => 'natb-rv-02.webp', 'tekst' => 'Moja nova omiljena torba! U nju stane sve, a ne izgleda glomazno, i obožavam njezin mekani, opušteni oblik. Stigla je prije nego što sam očekivala i u savršenom stanju.' ),
  array( 'ime' => 'Jessica M.',  'slika' => 'natb-rv-03.webp', 'tekst' => 'Ova hobo torba izgleda kao da je iz luksuznog dućana. Boja je bogata, materijal se čini vrhunskim, a unutrašnjost je vrlo praktična. Ovo mi je druga torba i sigurno ne posljednja.' ),
  array( 'ime' => 'Natalie C.',  'slika' => 'natb-rv-04.webp', 'tekst' => 'Kvaliteta me oduševila. Koristim je svaki dan otkad je imam i još uvijek izgleda kao nova. NORIKS je upravo dobio vjernu kupkinju.' ),
  array( 'ime' => 'S. K.',       'slika' => 'natb-rv-05.webp', 'tekst' => 'Kupila sam ovu torbu za vikend putovanje i pokazala se kao savršena suputnica. Dovoljno je velika za sve što mi treba, a i dalje elegantna. Već sam je preporučila nekolicini prijateljica!' ),
  array( 'ime' => 'Monica P.',   'slika' => 'natb-rv-06.webp', 'tekst' => 'Kvaliteta je ujednačena, a izrada prekrasna. Hobo torba je lagana, a ipak izdržljiva – savršena za svakodnevnu upotrebu. I pakiranje je uvijek uredno i profesionalno.' ),
  array( 'ime' => 'Emily V.',    'slika' => 'natb-rv-07.webp', 'tekst' => 'Jako sam impresionirana svojom hobo torbom. Mekana je, a drži oblik i pristaje uz svaku odjeću koju imam. Za dizajnerske torbe koje nisu ni upola tako lijepe platila sam dvostruko više. Uskoro naručujem još jednu boju.' ),
  array( 'ime' => 'Adele',       'slika' => 'natb-rv-08.webp', 'tekst' => 'Obično ne ostavljam recenzije, ali za ovu torbu morala sam. TAKO je lijepa! Kvaliteta je izvrsna, a naramenica udobna. Ovo mi je već treća kupnja jer sam opsjednuta.' ),
  array( 'ime' => 'Jan B.',      'slika' => 'natb-rv-09.webp', 'tekst' => 'WOW!!! Toliko volim svoju smeđu hobo torbu da sam naručila još jednu u bordo boji. Kvaliteta je fantastična, a materijal divan i mekan. Ne razmišljajte – uzmite svoju.' ),
);

$natb_n = 0; // števec sekcij za izmenična ozadja
$natb_cls = function() use ( &$natb_n ) { $natb_n++; return ( $natb_n % 2 ) ? ' natb-tint' : ''; };
?>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap">

<!-- 1) 5 RAZLOGA + NORIKS RAZLIKA / PROIZVODNJA U MALIM SERIJAMA ("The Libra Difference / SMALL BATCH PRODUCTION") — slika ob besedilu -->
<section class="natb-sec<?php echo $natb_cls(); ?>">
  <div class="natb-wrap">
    <p class="natb-kicker natb-c">Zašto NORIKS AntiTheftBag</p>
    <h2 class="natb-h2 natb-c natb-intro">Evo <em>5 razloga</em> zašto biste trebali isprobati NORIKS torbu sa zaštitom od krađe</h2>
    <div class="natb-row2">
      <div class="natb-media"><?php echo $natb_img( 'natb-s01-mala-serija.webp', 'Smeđa hobo torba NORIKS AntiTheftBag na drvenoj komodi' ); ?></div>
      <div class="natb-copy">
        <p class="natb-kicker"><span class="natb-num">1</span> NORIKS razlika</p>
        <h2 class="natb-h3">Proizvodnja u <em>malim serijama</em></h2>
        <p>Izrađujemo torbe i modne dodatke s <strong>dozom luksuza i osobnim stilom</strong>.</p>
        <p>Naše svakodnevne torbe spajaju <strong>iznimnu kvalitetu materijala</strong> s praktičnim, svestranim dizajnom za jednostavnu svakodnevnu upotrebu.</p>
        <p class="natb-big">Luksuzan izgled. Svakodnevna praktičnost.</p>
      </div>
    </div>
  </div>
</section>

<!-- 2) SIGURNOST I STIL U SVAKOM ŠAVU ("Security & Style in Every Stitch") — slika ob besedilu -->
<section class="natb-sec<?php echo $natb_cls(); ?>">
  <div class="natb-wrap">
    <div class="natb-row2 natb-row2--rev">
      <div class="natb-media"><?php echo $natb_img( 'natb-s02-sigurnost.webp', 'Ručna izrada torbe NORIKS AntiTheftBag – krojenje materijala' ); ?></div>
      <div class="natb-copy">
        <p class="natb-kicker"><span class="natb-num">2</span> Zaštita od krađe</p>
        <h2 class="natb-h3">Sigurnost i stil <em>u svakom šavu</em></h2>
        <p>Budite organizirani bez napora uz <strong>pametne pretince</strong> i <strong>diskretne značajke zaštite od krađe</strong>.</p>
        <p>Sigurni <strong>gornji patentni zatvarač</strong>, elegantne rese i <strong>skriveni stražnji džep</strong> olakšavaju nošenje svega – od iPada do sjajila za usne – uz osjećaj sigurnosti i kontrole.</p>
        <p class="natb-big">Sve je na svom mjestu. I sve je sigurno.</p>
      </div>
    </div>
  </div>
</section>

<!-- 3) LJEPOTA KOJA TRAJE ("Beauty That Lasts") — utišan video z vžganimi hrvaškimi napisi ob besedilu -->
<section class="natb-sec<?php echo $natb_cls(); ?>">
  <div class="natb-wrap">
    <div class="natb-row2">
      <div class="natb-media natb-vid"><?php echo $natb_video( 'natb-s03-ljepota-hr.mp4', 'natb-s03-poster.webp', 'Praktični bočni džepovi i veliki kapacitet torbe NORIKS AntiTheftBag' ); ?></div>
      <div class="natb-copy">
        <p class="natb-kicker"><span class="natb-num">3</span> Kvaliteta</p>
        <h2 class="natb-h3">Ljepota <em>koja traje</em></h2>
        <p>Izrađena od <strong>mekane, visokokvalitetne veganske kože</strong> s luksuznim metalnim okovom, ova torba je <strong>otporna na ogrebotine i vodu</strong> – savršena za svakodnevni glamur.</p>
        <p>Nije samo lijepa – stvorena je da bude vaša omiljena torba, sezonu za sezonom.</p>
        <p class="natb-big">Praktični bočni džepovi. Veliki kapacitet.</p>
      </div>
    </div>
  </div>
</section>

<!-- 4) NOSITE JE NA SVOJ NAČIN ("Wear It Your Way") — slika ob besedilu -->
<section class="natb-sec<?php echo $natb_cls(); ?>">
  <div class="natb-wrap">
    <div class="natb-row2 natb-row2--rev">
      <div class="natb-media"><?php echo $natb_img( 'natb-s04-nosite.webp', 'Žena nosi smeđu torbu NORIKS AntiTheftBag na ramenu' ); ?></div>
      <div class="natb-copy">
        <p class="natb-kicker"><span class="natb-num">4</span> Svestranost</p>
        <h2 class="natb-h3">Nosite je <em>na svoj način</em></h2>
        <p><strong>Jedna torba, tri izgleda.</strong> Bilo da idete na brunch ili se ukrcavate na let, podesiva naramenica omogućuje da je u nekoliko sekundi pretvorite iz <strong>ručne torbe</strong> u <strong>torbu za rame</strong> ili <strong>torbu preko tijela</strong>.</p>
        <p>Udobnost i svestranost u najelegantnijem izdanju.</p>
        <p class="natb-big">Ručna torba. Torba za rame. Torba preko tijela.</p>
      </div>
    </div>
  </div>
</section>

<!-- 5) SVAKODNEVNA IZDRŽLJIVOST, PROFINJEN IZGLED ("Everyday Durability, Elevated Look") — slika ob besedilu -->
<section class="natb-sec<?php echo $natb_cls(); ?>">
  <div class="natb-wrap">
    <div class="natb-row2">
      <div class="natb-media"><?php echo $natb_img( 'natb-s05-izdrzljivost.webp', 'Torba NORIKS AntiTheftBag nošena preko tijela' ); ?></div>
      <div class="natb-copy">
        <p class="natb-kicker"><span class="natb-num">5</span> Izdržljivost</p>
        <h2 class="natb-h3">Svakodnevna izdržljivost, <em>profinjen izgled</em></h2>
        <p>Ovo nije samo lijepa torba – <strong>napravljena je za život</strong>. Testirana na udarce, otporna na habanje i beskrajno šik, pristaje uz svaku odjeću i prati vas kroz najužurbanije dane.</p>
        <p>Od radnog vremena do izlaska nakon posla – vaš novi <strong>svakodnevni neizostavni dodatak</strong>.</p>
        <p class="natb-big">Za ured, za putovanja, za svaki dan.</p>
      </div>
    </div>
  </div>
</section>

<!-- 6) JAMSTVO POVRATA NOVCA BEZ RIZIKA ("RISK-FREE MONEY-BACK GUARANTEE", po NORIKS pogojih) — HTML pečat ob besedilu -->
<section class="natb-sec<?php echo $natb_cls(); ?>">
  <div class="natb-wrap">
    <div class="natb-row2 natb-row2--rev">
      <div class="natb-media natb-seal-wrap">
        <div class="natb-seal" role="img" aria-label="Pravo na povrat u roku od 30 dana">
          <div class="natb-seal__in">
            <span class="natb-seal__top">Pravo na povrat</span>
            <span class="natb-seal__num">30</span>
            <span class="natb-seal__days">DANA</span>
            <span class="natb-seal__bot">Bez rizika</span>
          </div>
        </div>
      </div>
      <div class="natb-copy">
        <p class="natb-kicker">Kupujte bez brige</p>
        <h2 class="natb-h3">Jamstvo povrata novca <em>bez rizika</em></h2>
        <p>U NORIKS-u vjerujemo u kvalitetu naših proizvoda i zato vam želimo omogućiti <strong>potpuno sigurnu kupnju</strong>. Ako se u roku od 30 dana odlučite da proizvod ne želite koristiti, možete nam ga vratiti, a mi ćemo vam vratiti puni iznos cijene proizvoda.</p>
        <p><strong>4 razloga za kupnju u NORIKS-u već danas:</strong></p>
        <ul class="natb-list">
          <li>Ljubazna i brza korisnička podrška</li>
          <li>Besplatna dostava za narudžbe iznad 70 €</li>
          <li>Pravo na povrat u roku od 30 dana</li>
          <li>Brzo i sigurno plaćanje – i pouzećem</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- 7) RECENZIJE ("See Why 258,437+ customers trust …" + Customer Reviews 4.9 / 5; število po NORIKS: 1081) — mnenja s fotografijami -->
<section class="natb-sec<?php echo $natb_cls(); ?>">
  <div class="natb-wrap">
    <p class="natb-kicker natb-c">Recenzije kupaca</p>
    <h2 class="natb-h2 natb-c">Pogledajte zašto nam vjeruju <em>tisuće kupaca</em></h2>
    <div class="natb-score">
      <span class="natb-score__num">4,9 / 5</span>
      <?php echo $natb_stars( 5 ); ?>
      <span class="natb-score__txt">Na temelju 1081 recenzije</span>
    </div>
    <div class="natb-reviews">
      <?php foreach ( $natb_rv as $r ) : ?>
      <article class="natb-card">
        <?php echo $natb_img( $r['slika'], 'Fotografija kupca: torba NORIKS AntiTheftBag' ); ?>
        <div class="natb-card__body">
          <?php echo $natb_stars( 5 ); ?>
          <p class="natb-card__txt">„<?php echo esc_html( $r['tekst'] ); ?>”</p>
          <p class="natb-card__name"><?php echo esc_html( $r['ime'] ); ?> <span class="natb-ok">✓ Potvrđena kupnja</span></p>
        </div>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<style>
/* NORIKS stil (predloga why-bottlesling.php / why-hands.php): oznaka + naslov z ležečim poudarkom, slika ob
   besedilu, izmenjujoča ozadja in strani. Privzeta topla rjava paleta NORIKS (#a9683f, konjak smeđa torba). */
.natb-sec { padding: 60px 0; font-family: 'Poppins', system-ui, -apple-system, 'Segoe UI', Roboto, Arial, sans-serif; color: #2a1f18; background: #fff; }
.natb-sec * { box-sizing: border-box; }
.natb-tint { background: #f7efe8; }
.natb-wrap { width: 100%; max-width: 1200px; margin: 0 auto; padding: 0 24px; }
.natb-c { text-align: center; }
.natb-sec h2, .natb-sec h3 { font-family: inherit; text-transform: none; letter-spacing: 0; }
.natb-kicker, .natb-copy p.natb-kicker { font-size: 12.5px; line-height: 1.4; font-weight: 700; letter-spacing: .14em; text-transform: uppercase; color: #a9683f; margin: 0 0 10px; }
.natb-num { display: inline-block; width: 22px; height: 22px; border-radius: 50%; background: #a9683f; color: #fff; text-align: center; line-height: 22px; font-size: 12px; letter-spacing: 0; margin-right: 6px; }
.natb-h2 { font-weight: 700; font-size: clamp(25px, 3.1vw, 36px); line-height: 1.2; margin: 0 0 14px; color: #2a1f18; }
.natb-h2 em, .natb-h3 em { font-style: italic; color: #a9683f; }
.natb-h3 { font-weight: 700; font-size: clamp(22px, 2.6vw, 30px); line-height: 1.25; margin: 0 0 16px; color: #2a1f18; }
.natb-intro { max-width: 820px; margin: 0 auto 40px; }
.natb-sec img { display: block; width: 100%; height: auto; }

/* slika ob besedilu */
.natb-row2 { display: grid; grid-template-columns: 1fr 1fr; gap: 56px; align-items: center; }
.natb-row2--rev .natb-media { order: 2; }
.natb-media > img, .natb-vid video { border-radius: 10px; box-shadow: 0 2px 4px rgba(40,25,15,.05), 0 14px 40px rgba(40,25,15,.10); max-width: 520px; margin: 0 auto; aspect-ratio: 1 / 1; object-fit: cover; background: #fff; }
.natb-vid video { display: block; width: 100%; height: auto; }
.natb-copy p { font-size: 16px; line-height: 1.7; color: #4d4038; margin: 0 0 14px; }
.natb-copy p strong { color: #2a1f18; font-weight: 600; }
.natb-copy p.natb-big { font-size: 19px; font-weight: 700; color: #2a1f18; line-height: 1.45; margin-top: 6px; }
.natb-list { list-style: none; margin: 0 0 16px; padding: 0; }
.natb-list li { position: relative; padding-left: 30px; margin: 0 0 9px; font-size: 15.5px; line-height: 1.55; color: #3b2f27; }
.natb-list li::before { content: "✓"; position: absolute; left: 0; top: 1px; width: 20px; height: 20px; border-radius: 50%; background: #a9683f; color: #fff; font-size: 11.5px; font-weight: 800; line-height: 20px; text-align: center; }

/* pečat 30 dana (HTML) */
.natb-seal-wrap { display: flex; align-items: center; justify-content: center; min-height: 300px; }
.natb-seal { width: 280px; height: 280px; border-radius: 50%; display: flex; align-items: center; justify-content: center;
  background: radial-gradient(circle at 35% 30%, #c98a5f 0%, #a9683f 50%, #7c4826 100%);
  box-shadow: 0 0 0 10px #eeddcd, 0 0 0 14px #a9683f, 0 18px 40px rgba(40,25,15,.18); text-align: center; }
.natb-seal__in { width: 206px; height: 206px; border-radius: 50%; background: #2a1f18; color: #fff;
  display: flex; flex-direction: column; align-items: center; justify-content: center; }
.natb-seal__top, .natb-seal__bot { font-size: 11px; font-weight: 700; letter-spacing: .12em; text-transform: uppercase; max-width: 150px; line-height: 1.3; color: #eeddcd; }
.natb-seal__num { font-size: 78px; font-weight: 800; line-height: 1; margin: 4px 0 0; color: #fff; }
.natb-seal__days { font-size: 22px; font-weight: 700; letter-spacing: .12em; margin: 0 0 6px; }

/* ocjene */
.natb-stars { color: #f2a516; letter-spacing: 1px; font-size: 15px; }
.natb-stars__off { color: #e6dcd3; }
.natb-score { display: flex; justify-content: center; align-items: center; gap: 12px; margin: 0 0 28px; flex-wrap: wrap; }
.natb-score__num { font-size: 26px; font-weight: 700; color: #2a1f18; }
.natb-score .natb-stars { font-size: 20px; }
.natb-score__txt { font-size: 14.5px; color: #6c5d53; }

/* mnenja s fotografijami */
.natb-reviews { columns: 3; column-gap: 18px; margin-top: 12px; } /* masonry: kartice razlicnih visin brez praznin */
.natb-reviews > .natb-card { break-inside: avoid; margin-bottom: 18px; }
.natb-card { background: #fff; border: 1px solid #e6d5c6; border-radius: 10px; overflow: hidden; display: flex; flex-direction: column; }
.natb-sec:not(.natb-tint) .natb-card { background: #f7efe8; }
.natb-card > img { aspect-ratio: 4 / 5; object-fit: cover; }
.natb-card__body { padding: 16px; }
.natb-card__txt { font-size: 14.5px; line-height: 1.6; color: #3b2f27; margin: 8px 0 10px; font-style: italic; }
.natb-card__name { font-size: 13.5px; font-weight: 600; color: #2a1f18; margin: 0; }
.natb-ok { color: #2f9e5f; font-weight: 600; font-size: 12px; margin-left: 4px; font-style: normal; }

@media (max-width: 989px) {
  .natb-row2 { gap: 32px; }
  .natb-reviews { columns: 2; }
}
@media (max-width: 749px) {
  .natb-sec { padding: 42px 0; }
  .natb-wrap { padding: 0 16px; }
  .natb-intro { margin-bottom: 26px; }
  .natb-row2 { grid-template-columns: 1fr; gap: 24px; }
  .natb-row2--rev .natb-media { order: 0; }
  .natb-seal-wrap { min-height: 0; }
  .natb-seal { width: 230px; height: 230px; }
  .natb-seal__in { width: 170px; height: 170px; }
  .natb-seal__num { font-size: 62px; }
  .natb-reviews { column-gap: 12px; }
  .natb-reviews > .natb-card { margin-bottom: 12px; }
  .natb-card__body { padding: 12px; }
}
@media (max-width: 420px) {
  .natb-reviews { columns: 1; }
}

/* galerija izdelka: sličice največ v 2 vrstah (5 na vrsto), ostale slike so dosegljive z drsenjem glavne slike */
.product_cat-orto-antitheftbag .flex-control-thumbs li:nth-child(n+11) { display: none !important; }

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
.woocommerce-product-details__short-description .natb-tick {
  position: absolute !important; left: 0 !important; top: 1px !important;
  width: 21px; height: 21px; border-radius: 50%;
  background: #2f9e5f !important; color: #fff !important;
  font-size: 12px !important; font-weight: 800 !important; line-height: 21px !important;
  text-align: center !important; display: inline-block !important; }
.woocommerce-product-details__short-description p:first-of-type { font-size: 16px; line-height: 1.55; }
.woocommerce-product-details__short-description p.natb-quote { font-size: 14.5px; line-height: 1.55; font-style: italic; color: #4d4038; }
</style>
