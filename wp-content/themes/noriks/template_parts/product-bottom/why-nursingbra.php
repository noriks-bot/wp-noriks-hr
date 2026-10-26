<?php
/**
 * product-bottom: NORIKS NursingBra — grudnjak za dojenje bez šavova, mekan kao druga koža (orto-nursingbra).
 * Original: maternique.com/products/bliss-second-skin-silky-nursing-bra-drop-down-cups — vsebina in vrstni red 1:1
 * z originalom, oblika po NORIKS stilu (predloga why-minimizerbra.php / why-hands.php), privzeta topla rjava paleta
 * NORIKS (#a9683f):
 *   1) "Loved by 60,000+ Moms Through Pregnancy, Nursing and Beyond" (6 videov) -> Vole ga tisuće mama: besedilo +
 *      6 utišanih videov s hrvaškimi napisi (angleški vžgani napisi prekriti z zamegljenim pasom; ime znamke izpuščeno)
 *   2) Trustpilot "Rated 4.7 / 5 … Showing 5-star reviews" (12 mnenj) -> Što kažu mame: 12 mnenj (1081 po NORIKS,
 *      brez imena Trustpilot / znamke konkurenta)
 *   3) "BLISSING COMFORT"      -> Udobnost cijeli dan: slika ob besedilu
 *   4) "SECOND-SKIN SOFT"      -> Mekan kao druga koža: slika ob besedilu
 *   5) "ONE-HANDED OPENING"    -> Otvaranje jednom rukom: slika ob besedilu
 *   6) "SEAMLESS DESIGN"       -> Dizajn bez šavova: slika ob besedilu
 *   7) "FOR MATERNITY"         -> Za trudnoću i dojenje: slika ob besedilu
 *   8) "Customer Reviews"      -> Recenzije kupaca: 4,7 / 1081 z razdelitvijo 82/10/6/1/1 % skalirano na 692 + 5 mnenj
 * Izpusceno: pasica PRIME BIG DEAL / Free Shipping / 30-Day Returns / Trustpilot, »As seen in VOGUE«, odstevalnik
 * BUY 2 GET 1 FREE, Final sale, Authenticity Guarantee / Counterfeit, Low Stock, darilo (e-knjiga), dodatek Racerback,
 * drsnik s priporocilom svetovalke (poimensko priporocilo strokovnjakinje), noga trgovine.
 * FAQ (original ga nima) je v reviews.php ($nursingbra_faq, po NORIKS pogojih), mnenja v auto_reviews/HR_nursingbra.php,
 * opis / nega / tablica velicin v standardnih harmonikah (meta.php) in modalu (size-chart-nursingbra.php).
 * Slike in videi: img/nursingbra/ (nnb-…).
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$nnb      = get_template_directory_uri() . '/img/nursingbra/';
$nnb_path = get_template_directory() . '/img/nursingbra/';
$nnb_img  = function( $file, $alt, $cls = '' ) use ( $nnb, $nnb_path ) {
  if ( ! $file || ! file_exists( $nnb_path . $file ) ) { return ''; }
  return '<img src="' . esc_url( $nnb . $file ) . '" alt="' . esc_attr( $alt ) . '" loading="eager"' . ( $cls ? ' class="' . esc_attr( $cls ) . '"' : '' ) . '>';
};
$nnb_video = function( $file, $label ) use ( $nnb, $nnb_path ) {
  if ( ! file_exists( $nnb_path . $file ) ) { return ''; }
  $poster = str_replace( '-hr.mp4', '.webp', $file );
  return '<video src="' . esc_url( $nnb . $file ) . '"' . ( file_exists( $nnb_path . $poster ) ? ' poster="' . esc_url( $nnb . $poster ) . '"' : '' )
    . ' muted autoplay loop playsinline preload="metadata" aria-label="' . esc_attr( $label ) . '"></video>';
};
$nnb_stars = function( $n ) {
  $n = max( 0, min( 5, (int) $n ) );
  return '<span class="nnb-stars" aria-label="' . $n . ' od 5 zvjezdica">' . str_repeat( '★', $n ) . '<span class="nnb-stars__off">' . str_repeat( '★', 5 - $n ) . '</span></span>';
};

/* 1) Vole ga tisuće mama — 6 videov originala (utišani, hrvaški napisi) */
$nnb_vids = array(
  array( 'nnb-v1-materijal-hr.mp4',       'Mama pokazuje mekani materijal i kopčice za dojenje' ),
  array( 'nnb-v2-trudnoca-hr.mp4',        'Mama u trudnoći o grudnjaku bez žice' ),
  array( 'nnb-v3-osjetljive-hr.mp4',      'Mama o osjetljivim grudima u trudnoći' ),
  array( 'nnb-v4-cijela-trudnoca-hr.mp4', 'Mama koja grudnjak nosi cijelu trudnoću' ),
  array( 'nnb-v5-kopcice-hr.mp4',         'Mama pokazuje kopčice i produžetak trake' ),
  array( 'nnb-v6-jednom-rukom-hr.mp4',    'Mama otvara košaricu jednom rukom' ),
);

/* 2) Što kažu mame — 12 mnenj originala (ocjene 5 zvjezdica) */
$nnb_testimonials = array(
  array( 'Najbolji za osjetljive bradavice!', 'Nikolina F.', 'O tome se ne govori, ali bradavice su tijekom dojenja jako bolne i osjetljive, čak i kad sve ide glatko. Boljele su me i noću u mekanoj pidžami. Počela sam ovaj grudnjak nositi i noću i danju – potpuno je promijenio stvar. Materijal je tako mekan i udoban, štiti bradavice 24 sata i hvata noćna curenja. Probala sam 3 druge marke i nijedna mu nije ni blizu. Upravo sam naručila još 4.' ),
  array( 'Najbolji grudnjak koji sam ikad nosila', 'Jana B.', 'Bez sumnje najbolji grudnjak koji sam ikad nosila. Imam dva i upravo sam naručila još 3. Toliko je bešavan da se osjeća kao druga koža. Tkanina je tako mekana da je oblačenje kao udah svježeg zraka – udobnost je na drugoj razini. Veličina točno odgovara ako se držite tablice, a i korisnička podrška bila je sjajna. Da mogu, dala bih 10 zvjezdica.' ),
  array( 'Zlatni standard grudnjaka za trudnice!', 'Ema V.', 'Prijateljica mi ga je preporučila nakon što mi se kći rodila prije pet mjeseci. Presretna sam kupnjom – grudnjaci jako lijepo stoje, a na koži su mekani kao maslac. Dojenje je s njima tako jednostavno, a daju potporu i kad su grudi od mlijeka jako teške. Otada sam opet naručila više komada jer sam nakon trudnoće smanjila veličinu, a podrška mi je pomogla odabrati pravu. Ne mogu ih dovoljno preporučiti!' ),
  array( 'Napokon prava potpora', 'Katarina D.', 'Kratko prije nego što sam saznala da sam trudna imala sam implantate i isprobala sam toliko grudnjaka s potporom i kopčicama za dojenje. Na kraju sam ostala uz ovaj – super je udoban i daje mi puno potpore!' ),
  array( 'Toplo preporučujem', 'Iva M.', 'Korisnička podrška doista je jedna od najboljih koje sam ikad doživjela. Teško sam odabrala pravu veličinu, a tim se potrudio i više nego što je trebalo. Poruke su im bile pune brige i korisnih informacija – takva pažnja zaista je rijetka.' ),
  array( 'Obožavam svoj grudnjak', 'Sanja H.', 'Obožavam ga! Kroz cijelu trudnoću bio mi je nevjerojatno udoban i pružao potporu. Tkanina je mekana, rastezljiva i nježna prema osjetljivoj koži, a cijeli dan daje odličnu potporu. Posebno cijenim koliko je praktičan i jednostavan za dojenje, bez odricanja od udobnosti i stila. Vidi se da je osmišljen za mame. Toplo ga preporučujem svakoj trudnici i novoj mami!' ),
  array( 'Fantastičan grudnjak za dojenje', 'Ana C.', 'Naručila sam drugi put jer mi se prva narudžba toliko svidjela! Grudnjak je mekan kao maslac na bolnim bradavicama dok prolazite kroz početnu nelagodu dojenja. Kopčica se lako koristi, a košarice su glatke i nevidljive ispod odjeće. Nisam ni pomislila na drugi model jer mi se ovaj jako sviđa!' ),
  array( 'Moj omiljeni nakon poroda', 'Gracija J.', 'Nakon poroda isprobala sam nekoliko grudnjaka za dojenje i ovaj mi je postao omiljeni. Nevjerojatno je udoban za cijeli dan, daje potporu bez stezanja, a kopčice se lako otvaraju jednom rukom – što je velika razlika kad u rukama držite bebu. Toliko sam bila oduševljena da sam kupila još. Rijetko se nađe grudnjak za dojenje koji je i praktičan i stvarno udoban.' ),
  array( 'Brzi i susretljivi', 'Petra V.', 'Jedan artikl iz moje prve narudžbe u odabranoj boji nije bio na zalihi, a vrlo brzo su mi javili i ponudili drugu boju ili čekanje. Grudnjaci su mi u trudnoći odlični i veselim se što ću ih nositi i kad beba stigne.' ),
  array( 'Sretna, udobna i zahvalna mama', 'Zrinka D.', 'Nisam očekivala da grudnjak za trudnice može ovako lijepo izgledati i biti ovako ugodan. Prekrasan je, udoban, mekan i jako lijepo stoji. Tablica veličina bila je točna, a sviđa mi se i izbor boja. Prvo sam kupila tri i toliko su mi se svidjeli da sam odmah kupila još jedan. Najbolji grudnjaci za trudnice na koje sam naišla.' ),
  array( 'Jedini u kojima mogu spavati', 'Dana H.', 'Nakon prva tri bila sam toliko oduševljena da sam odmah naručila još tri. Nevjerojatno su udobni, daju potporu bez stezanja i pristaju za svaku priliku – kod kuće, vani ili dok dojim. Najveća prednost je što su to jedini grudnjaci u kojima mogu udobno spavati, a to mi je nakon poroda promijenilo sve.' ),
  array( 'Obožavam ove grudnjake za dojenje', 'Ela J.', 'Bilo me malo strah kupiti ih, ali potpora i dizajn izgledali su jako dobro pa sam ih ipak probala – i drago mi je što jesam. Kupila sam paket od tri zajedno s grudnjacima drugih marki i nakon nekoliko dana kupila sam još tri. Spavam u njima radije nego u grudnjacima koje sam kupila baš za spavanje. Sada sam tri tjedna nakon poroda i ovo su praktički jedini grudnjaci koje nosim.' ),
);

/* 3–7) sekcije slika ob besedilu (section_double originala) */
$nnb_double = array(
  array( 'img' => 'nnb-s1-udobnost.webp', 'alt' => 'NORIKS NursingBra – sivo-smeđi grudnjak za dojenje na modelu',
         'kicker' => 'Udobnost cijeli dan', 'h2' => 'Udobnost koja <em>prati vaše tijelo</em>',
         'p' => array( 'Naš grudnjak za dojenje pruža <strong>udobnost cijeli dan, čak i za najosjetljiviju kožu</strong>. Zahvaljujući jedinstvenom rastezljivom dizajnu prilagođava se promjenjivoj veličini i obliku vašeg tijela tijekom trudnoće i dojenja.' ),
         'big' => 'Jedan grudnjak za trudnoću, dojenje i sve između.' ),
  array( 'img' => 'nnb-s2-meko.webp', 'alt' => 'NORIKS NursingBra – mekana, glatka tkanina bez šavova (zelena)',
         'kicker' => 'Mekan kao druga koža', 'h2' => 'Tkanina mekana <em>poput pera</em>',
         'p' => array( 'Doživite <strong>jedinstvenu tkaninu mekanu poput pera</strong> od koje ćete se naježiti. Izrađena je od <strong>glatkog, prozračnog materijala</strong> koji je nježan prema koži, prsima i rebrima.', 'Mekana, glatka tkanina nježno se rasteže i prianja uz vaše obline, <strong>bez šavova koji mogu pritiskati kožu ili ostavljati ružne tragove</strong>.' ),
         'big' => 'Glatko, prozračno i nježno prema koži.' ),
  array( 'img' => 'nnb-s3-jednom-rukom.webp', 'alt' => 'NORIKS NursingBra – kopčica za dojenje otvara se jednom rukom',
         'kicker' => 'Otvaranje jednom rukom', 'h2' => 'Dojenje <em>jednim klikom</em>',
         'p' => array( 'Uživajte u <strong>jednostavnom dojenju</strong> uz kopčice koje se otvaraju jednom rukom. <strong>Brzo otvorite i zatvorite jednim klikom</strong> – bez presvlačenja između grudnjaka za dojenje i običnog grudnjaka.', 'Savršeno rješenje »sve u jednom«, praktično ne samo za vas nego i za vašu bebu.' ),
         'big' => 'Jedna ruka za kopčicu, druga za bebu.' ),
  array( 'img' => 'nnb-s4-bez-savova.webp', 'alt' => 'NORIKS NursingBra – glatka košarica bez šavova',
         'kicker' => 'Dizajn bez šavova', 'h2' => 'Nevidljiv <em>ispod odjeće</em>',
         'p' => array( '<strong>Naglašava prirodan oblik grudi</strong>, a ispod odjeće je <strong>nevidljiv</strong>. Bilo da nosite pripijenu haljinu ili ležernu majicu, osjećat ćete se samopouzdano i udobno jer se grudnjak ne primjećuje.' ),
         'big' => 'Bez žice, bez šavova – samo gladak i prirodan kroj.' ),
  array( 'img' => 'nnb-s5-trudnoca.webp', 'alt' => 'NORIKS NursingBra – široke podesive naramenice i čvrste kopče na leđima',
         'kicker' => 'Za trudnoću i dojenje', 'h2' => 'Raste <em>zajedno s vama</em>',
         'p' => array( 'Uz <strong>podesive široke naramenice za udoban kroj</strong> tijekom cijelog vašeg puta, naši grudnjaci osmišljeni su tako da prate rast grudi. <strong>Svaka košarica pokriva do 3 veće veličine</strong>, pa možete biti sigurni da će vam svaki grudnjak pomagati u svakoj fazi trudnoće i dojenja.', '<strong>Čvrste kopče na leđima pružit će vam potporu koja vam treba</strong>, bez obzira na to imate li veće ili manje grudi.' ),
         'big' => 'Svaka košarica pokriva do 3 veće veličine.' ),
);

/* 8) Recenzije kupaca — 5 mnenj originala, 2 s fotografijama kupaca */
$nnb_reviews = array(
  array( 'ime' => 'Anonimno', 'img' => 'nnb-rv-1.webp', 'naslov' => 'Nevjerojatno udoban i odlično pristaje',
         'tekst' => 'Grudnjak je nevjerojatno udoban i odlično pristaje. Veličina je bila točna kad sam se držala tablice, pa je bilo lako pronaći pravu. Ima puno kopči, a dolazi i s dodatnim produžetkom trake koji daje fleksibilnost i produljuje vijek trajanja grudnjaka kako se vaše mjere mijenjaju. Sve u svemu, dobro osmišljen i udoban grudnjak koji pruža i potporu i prilagodljivost. Preporučujem!' ),
  array( 'ime' => 'Jelena C.', 'img' => '', 'naslov' => 'Najudobniji grudnjak nakon toliko isprobanih',
         'tekst' => 'Ovaj grudnjak je odgovor koji sam tražila. Išla sam na mjerenja i u trudnoći isprobala TOLIKO grudnjaka – i napokon, ovaj je pobjednik. Pomogao mi je s bolovima u gornjem dijelu leđa koje sam imala s drugim grudnjacima, a kroj je savršen. Tim mi je jako pomogao pronaći pravu veličinu, jer je za grudi koje u trudnoći rastu teško pogoditi kroj. Jako mi je drago što sam ga kupila.' ),
  array( 'ime' => 'Ela D.', 'img' => '', 'naslov' => 'Najbolji grudnjak za osjetljivu kožu',
         'tekst' => 'Jako sam se mučila pronaći grudnjak za trudnice koji ne mrzim. Inače ne nosim klasične grudnjake, nego mekane bešavne bralette. Isprobala sam brojne marke i ovo je jedini koji je gotovo bez šavova, ne urezuje se i daje potporu. Nema kopči koje grebu, a košarice stvarno drže grudi na mjestu. Leđa su udobna i široka – gore i dolje ima tanku traku koja je malo čvršća, ali ne stvara nabor. Tkanina je jako mekana i ne iritira. Opseg grudi mi je 104 cm, uzela sam L i imam mjesta za rast. Imam puno senzornih osjetljivosti i preporučila bih ga svakoj kojoj smetaju materijali ili nešto što se urezuje.' ),
  array( 'ime' => 'Tamara J.', 'img' => 'nnb-rv-2.webp', 'naslov' => 'Udoban, s potporom, odlična kvaliteta',
         'tekst' => 'Ovaj grudnjak me stvarno oduševio. Materijal je tako udoban, prozračan i jako mekan, a grudnjak je vrlo jednostavan za korištenje. Sigurno ću kupiti još jedan.' ),
  array( 'ime' => 'Monika C.', 'img' => '', 'naslov' => 'Mama po prvi put',
         'tekst' => 'Kao mama po prvi put nisam bila sigurna koje veličine i stvari trebam, ali korisnička podrška se stvarno istaknula. Javili su mi se e-poštom s korisnim savjetima, mogla sam pitati sve o veličinama i proizvodima, a odgovarali su brzo. Trebala sam promijeniti narudžbu jer sam greškom odabrala krivu veličinu i sve je bilo vrlo jednostavno. I dostava je bila brza – ne mogu biti zadovoljnija.' ),
);
/* razdelitev ocen originala 82 / 10 / 6 / 1 / 1 % skalirana na 692 recenzij (NORIKS) */
$nnb_dist = array( 5 => 567, 4 => 69, 3 => 42, 2 => 7, 1 => 7 );

$nnb_n = 0; // števec sekcij za izmenična ozadja
$nnb_cls = function() use ( &$nnb_n ) { $nnb_n++; return ( $nnb_n % 2 ) ? ' nnb-tint' : ''; };
?>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap">

<!-- 1) VOLE GA TISUĆE MAMA ("Loved by 60,000+ Moms …") — besedilo + 6 utišanih videov s hrvaškimi napisi -->
<section class="nnb-sec<?php echo $nnb_cls(); ?>">
  <div class="nnb-wrap">
    <div class="nnb-row2 nnb-row2--vids">
      <div class="nnb-copy">
        <p class="nnb-kicker">Vole ga tisuće mama</p>
        <h2 class="nnb-h2">Tisuće zadovoljnih mama – <em>u trudnoći, tijekom dojenja i nakon toga</em></h2>
        <p>Grudnjak za dojenje bez šavova »sve u jednom« – <strong>za dojenje, spavanje i svakodnevno nošenje</strong>. Pogledajte što kažu mame koje ga nose svaki dan.</p>
        <p class="nnb-big">Mekan, bez žice i s kopčicama koje se otvaraju jednom rukom.</p>
      </div>
      <div class="nnb-vids">
        <?php foreach ( $nnb_vids as $v ) : $html = $nnb_video( $v[0], $v[1] ); if ( ! $html ) { continue; } ?>
        <div class="nnb-vids__item"><?php echo $html; ?></div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>

<!-- 2) ŠTO KAŽU MAME (ocjene 5 zvjezdica originala) — 12 mnenj -->
<section class="nnb-sec<?php echo $nnb_cls(); ?>">
  <div class="nnb-wrap">
    <p class="nnb-kicker nnb-c">Što kažu mame</p>
    <h2 class="nnb-h2 nnb-c">Mame ga nose <em>danju i noću</em></h2>
    <p class="nnb-rating nnb-c"><?php echo $nnb_stars( 5 ); ?> <strong>4,7 / 5</strong> · 1081 recenzija · prikazujemo recenzije s 5 zvjezdica</p>
    <div class="nnb-rv">
      <?php foreach ( $nnb_testimonials as $t ) : ?>
      <article class="nnb-card nnb-card--t">
        <div class="nnb-card__body">
          <?php echo $nnb_stars( 5 ); ?>
          <h3 class="nnb-card__title"><?php echo esc_html( $t[0] ); ?></h3>
          <p class="nnb-card__txt">„<?php echo esc_html( $t[2] ); ?>”</p>
          <p class="nnb-card__name"><?php echo esc_html( $t[1] ); ?> <span class="nnb-ok">✓ Potvrđena kupnja</span></p>
        </div>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<?php foreach ( $nnb_double as $i => $s ) : ?>
<!-- <?php echo (int) ( $i + 3 ); ?>) <?php echo esc_html( $s['kicker'] ); ?> — slika ob besedilu -->
<section class="nnb-sec<?php echo $nnb_cls(); ?>">
  <div class="nnb-wrap">
    <div class="nnb-row2<?php echo ( $i % 2 ) ? ' nnb-row2--rev' : ''; ?>">
      <div class="nnb-media"><?php echo $nnb_img( $s['img'], $s['alt'] ); ?></div>
      <div class="nnb-copy">
        <p class="nnb-kicker"><?php echo esc_html( $s['kicker'] ); ?></p>
        <h2 class="nnb-h2"><?php echo wp_kses( $s['h2'], array( 'em' => array() ) ); ?></h2>
        <?php foreach ( $s['p'] as $p ) : ?><p><?php echo wp_kses( $p, array( 'strong' => array() ) ); ?></p><?php endforeach; ?>
        <p class="nnb-big"><?php echo esc_html( $s['big'] ); ?></p>
      </div>
    </div>
  </div>
</section>
<?php endforeach; ?>

<!-- 8) RECENZIJE KUPACA ("Customer Reviews") — 1081 po NORIKS + 5 mnenj originala -->
<section class="nnb-sec<?php echo $nnb_cls(); ?>">
  <div class="nnb-wrap">
    <p class="nnb-kicker nnb-c">Recenzije kupaca</p>
    <h2 class="nnb-h2 nnb-c">Što kažu mame <em>koje ga nose</em></h2>
    <div class="nnb-score">
      <div class="nnb-score__left">
        <span class="nnb-score__num">4,7</span>
        <?php echo $nnb_stars( 5 ); ?>
        <span class="nnb-score__txt">Na temelju 1081 recenzije</span>
      </div>
      <div class="nnb-dist">
        <?php foreach ( $nnb_dist as $z => $c ) : ?>
        <div class="nnb-dist__row"><span><?php echo (int) $z; ?> ★</span><span class="nnb-dist__bar"><i style="width:<?php echo round( $c / 692 * 100, 1 ); ?>%"></i></span><span><?php echo (int) $c; ?></span></div>
        <?php endforeach; ?>
      </div>
    </div>
    <div class="nnb-reviews">
      <?php foreach ( $nnb_reviews as $r ) : ?>
      <article class="nnb-card<?php echo $r['img'] ? ' nnb-card--img' : ' nnb-card--txt'; ?>">
        <?php if ( $r['img'] ) : ?><div class="nnb-card__img"><?php echo $nnb_img( $r['img'], 'Fotografija kupca: ' . $r['ime'] ); ?></div><?php endif; ?>
        <div class="nnb-card__body">
          <?php echo $nnb_stars( 5 ); ?>
          <h3 class="nnb-card__title"><?php echo esc_html( $r['naslov'] ); ?></h3>
          <p class="nnb-card__txt">„<?php echo esc_html( $r['tekst'] ); ?>”</p>
          <p class="nnb-card__name"><?php echo esc_html( $r['ime'] ); ?> <span class="nnb-ok">✓ Potvrđena kupnja</span></p>
        </div>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<style>
/* NORIKS stil (predloga why-minimizerbra.php / why-hands.php): oznaka + naslov z ležečim poudarkom, slika ali video ob
   besedilu, izmenjujoča ozadja in strani. Privzeta topla rjava paleta NORIKS (#a9683f). */
.nnb-sec { padding: 60px 0; font-family: 'Poppins', system-ui, -apple-system, 'Segoe UI', Roboto, Arial, sans-serif; color: #231d19; background: #fff; }
.nnb-sec * { box-sizing: border-box; }
.nnb-tint { background: #f7f2ec; }
.nnb-wrap { width: 100%; max-width: 1200px; margin: 0 auto; padding: 0 24px; }
.nnb-c { text-align: center; }
.nnb-sec h2, .nnb-sec h3 { font-family: inherit; text-transform: none; letter-spacing: 0; }
.nnb-kicker, .nnb-copy p.nnb-kicker { font-size: 12.5px; line-height: 1.4; font-weight: 700; letter-spacing: .14em; text-transform: uppercase; color: #a9683f; margin: 0 0 10px; }
.nnb-h2 { font-weight: 700; font-size: clamp(25px, 3.1vw, 36px); line-height: 1.2; margin: 0 0 14px; color: #231d19; }
.nnb-h2 em { font-style: italic; color: #a9683f; }
.nnb-sec img { display: block; width: 100%; height: auto; }

/* slika / video ob besedilu */
.nnb-row2 { display: grid; grid-template-columns: 1fr 1fr; gap: 56px; align-items: center; }
.nnb-row2--rev .nnb-media { order: 2; }
.nnb-media > img { border-radius: 10px; box-shadow: 0 2px 4px rgba(40,25,15,.05), 0 14px 40px rgba(40,25,15,.10); max-width: 560px; margin: 0 auto; aspect-ratio: 6 / 5; object-fit: cover; }
.nnb-copy p { font-size: 16px; line-height: 1.7; color: #4a403a; margin: 0 0 14px; }
.nnb-copy p strong { color: #231d19; font-weight: 600; }
.nnb-copy p.nnb-big { font-size: 19px; font-weight: 700; color: #231d19; line-height: 1.45; margin-top: 6px; }

/* 1) videi */
.nnb-row2--vids { grid-template-columns: 1fr 1.5fr; }
.nnb-vids { display: grid; grid-template-columns: repeat(3, minmax(0, 1fr)); gap: 10px; }
.nnb-vids__item { border-radius: 10px; overflow: hidden; background: #231d19; aspect-ratio: 606 / 1080; box-shadow: 0 2px 10px rgba(40,25,15,.12); }
.nnb-vids__item video { display: block; width: 100%; height: 100%; object-fit: cover; }

/* ocjene */
.nnb-stars { color: #f2a516; letter-spacing: 1px; font-size: 15px; }
.nnb-stars__off { color: #e6ddd4; }
.nnb-rating { font-size: 15px; color: #6b5f56; margin: -4px 0 24px; }
.nnb-rating strong { color: #231d19; }
.nnb-score { display: flex; justify-content: center; align-items: center; gap: 40px; margin: 6px 0 30px; flex-wrap: wrap; }
.nnb-score__left { display: flex; flex-direction: column; align-items: center; gap: 4px; }
.nnb-score__num { font-size: 40px; font-weight: 700; color: #231d19; line-height: 1; }
.nnb-score .nnb-stars { font-size: 20px; }
.nnb-score__txt { font-size: 14px; color: #6b5f56; }
.nnb-dist { min-width: 260px; }
.nnb-dist__row { display: grid; grid-template-columns: 34px 1fr 40px; gap: 10px; align-items: center; font-size: 13.5px; color: #4a403a; margin: 0 0 6px; }
.nnb-dist__bar { height: 9px; border-radius: 9px; background: #ead9c9; overflow: hidden; }
.nnb-dist__bar i { display: block; height: 100%; background: #a9683f; border-radius: 9px; }

/* 2) mnenja (vodoravni seznam, brez JS) */
.nnb-rv { display: grid; grid-auto-flow: column; grid-auto-columns: calc((100% - 54px) / 4); gap: 18px; overflow-x: auto; scroll-snap-type: x mandatory; padding: 4px 2px 14px; -webkit-overflow-scrolling: touch; }
.nnb-rv > .nnb-card { scroll-snap-align: start; }

/* 8) mnenja */
.nnb-reviews { columns: 3; column-gap: 18px; }
.nnb-reviews > .nnb-card { break-inside: avoid; margin-bottom: 18px; }
.nnb-card { background: #fff; border: 1px solid #ead9c9; border-radius: 10px; overflow: hidden; display: flex; flex-direction: column; }
.nnb-sec:not(.nnb-tint) .nnb-card { background: #f7f2ec; }
.nnb-card__img img { aspect-ratio: 4 / 5; object-fit: cover; }
.nnb-card__body { padding: 16px; }
.nnb-card__title { font-size: 15.5px; font-weight: 700; color: #231d19; margin: 8px 0 6px; line-height: 1.35; }
.nnb-card__txt { font-size: 14.5px; line-height: 1.6; color: #3b322c; margin: 8px 0 10px; font-style: italic; }
.nnb-card__name { font-size: 13.5px; font-weight: 600; color: #231d19; margin: 0; }
.nnb-ok { color: #2f9e5f; font-weight: 600; font-size: 12px; margin-left: 4px; font-style: normal; }

@media (max-width: 989px) {
  .nnb-row2 { gap: 32px; }
  .nnb-row2--vids { grid-template-columns: 1fr; }
  .nnb-rv { grid-auto-columns: calc((100% - 18px) / 2); }
  .nnb-reviews { columns: 2; }
}
@media (max-width: 749px) {
  .nnb-sec { padding: 42px 0; }
  .nnb-wrap { padding: 0 16px; }
  .nnb-row2 { grid-template-columns: 1fr; gap: 24px; }
  .nnb-row2--rev .nnb-media { order: 0; }
  .nnb-vids { grid-template-columns: repeat(2, minmax(0, 1fr)); }
  .nnb-rv { grid-auto-columns: 82%; gap: 12px; }
  .nnb-reviews { column-gap: 12px; }
  .nnb-reviews > .nnb-card { margin-bottom: 12px; }
  .nnb-card__body { padding: 12px; }
}
@media (max-width: 480px) {
  .nnb-reviews { columns: 1; }
}

/* galerija izdelka: sličice največ v 2 vrstah (5 na vrsto), ostale slike so dosegljive z drsenjem glavne slike */
.product_cat-orto-nursingbra .flex-control-thumbs li:nth-child(n+11) { display: none !important; }

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
.woocommerce-product-details__short-description .nnb-tick {
  position: absolute !important; left: 0 !important; top: 1px !important;
  width: 21px; height: 21px; border-radius: 50%;
  background: #2f9e5f !important; color: #fff !important;
  font-size: 12px !important; font-weight: 800 !important; line-height: 21px !important;
  text-align: center !important; display: inline-block !important; }
.woocommerce-product-details__short-description p:first-of-type { font-size: 16px; line-height: 1.55; }
</style>
