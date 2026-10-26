<?php
/**
 * product-bottom: NORIKS GrillBasket — valjkasta košara za roštilj (orto-grillbasket).
 * Original: bryngrill.com/products/rolling-basket — vsebina in vrstni red 1:1 z originalom, oblika po NORIKS stilu
 * (predloga why-therapillow.php / why-hands.php), poudarek po paleti originala (bordo #a33428, krem ozadje #f9f1e6):
 *   1) nakupna škatla: harmonika "How do I close the grill lid?"           -> Kako zatvoriti poklopac roštilja (slika ob besedilu;
 *      slika iz FAQ originala, ker FAQ teme nima slike)
 *   2) tekoči trak "Direct contact with the flame / Never lose food again …" -> statičen trak s 4 prednostmi (brez animacije)
 *   3) "Three steps to perfect grilling." (STEP 01–03)                       -> Tri koraka do savršenog roštiljanja (3 kartice)
 *   4) "Every detail is thoughtfully designed." (01–04 + oznake)              -> slika z oštevilčenimi deli ob besedilu
 *   5) "Done grilling. Done cleaning." (Dishwasher Safe / Ready For Next Time) -> slika ob besedilu
 *   6) "Over 50,000 happy grillers" (4 mnenja s fotografijami)               -> Tisuće zadovoljnih ljubitelja roštilja (3 fotografije;
 *      fotografija 3. mnenja s škatlami z logotipom ni prenesena, škatla na 1. fotografiji retuširana)
 *   7) "Why BRYN wins" (primerjalna tabela Brand / Foil / Grill Mat)          -> Zašto NORIKS (NORIKS / Folija / Podloga za roštilj)
 * Izpusceno: pasici "Free shipping / Lifetime Grill Guarantee" in "HALLOWEEN SALE … FREE GIFTS" z odštevalnikom, darila v paketih
 * (kuharica, sprej, skrivno darilo, Free Shipping), značke "Trusted by 50,000+ / Easy returns / Lifetime guarantee", harmoniki
 * Lifetime Guarantee in Shipping & Returns (velja NORIKS), gumbi "Shop Rolling Basket", "Still not sure? Contact us",
 * "Why buy from BRYN" (Swedish brand) in noga trgovine.
 * FAQ (8) je v reviews.php ($grillbasket_faq), mnenja v auto_reviews/HR_grillbasket.php, opis + nega v meta.php.
 * Slike: img/grillbasket/ (ngb-…).
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$ngb      = get_template_directory_uri() . '/img/grillbasket/';
$ngb_path = get_template_directory() . '/img/grillbasket/';
$ngb_img  = function( $file, $alt, $cls = '' ) use ( $ngb, $ngb_path ) {
  if ( ! $file || ! file_exists( $ngb_path . $file ) ) { return ''; }
  return '<img src="' . esc_url( $ngb . $file ) . '" alt="' . esc_attr( $alt ) . '" loading="eager"' . ( $cls ? ' class="' . esc_attr( $cls ) . '"' : '' ) . '>';
};
$ngb_stars = function( $n ) {
  $n = max( 0, min( 5, (int) $n ) );
  return '<span class="ngb-stars" aria-label="' . $n . ' od 5 zvjezdica">' . str_repeat( '★', $n ) . '<span class="ngb-stars__off">' . str_repeat( '★', 5 - $n ) . '</span></span>';
};

/* 2) trak prednosti (tekoči trak originala, tu statičen) */
$ngb_strip = array( 'Izravan kontakt s plamenom', 'Hrana nikad ne propada', 'Sigurna za perilicu posuđa', 'Nije potrebno iskustvo' );

/* 3) tri koraka */
$ngb_steps = array(
  array( 'ngb-s03-korak-1-punjenje.webp', 'Punjenje košare za roštilj svježim namirnicama', '1. korak', 'Napunite je', 'Dodajte povrće, škampe, ribu ili što god pečete. Bez pripreme, bez ulja. Samo je napunite i zatvorite poklopac.' ),
  array( 'ngb-s03-korak-2-rolanje.webp', 'Stavljanje košare za roštilj na roštilj', '2. korak', 'Stavite i okrećite', 'Stavite je na bilo koji roštilj – plinski, na drveni ugljen ili na pelete. Izravan plamen i dim obavljaju posao. Okrećite košaru za savršeno zapečenu hranu.' ),
  array( 'ngb-s03-korak-3-posluzivanje.webp', 'Posluživanje pečenog povrća iz košare', '3. korak', 'Protresite i poslužite', 'Priloženom kukicom na poklopcu otvorite košaru i lagano je protresite. Poslužite izravno iz košare.' ),
);

/* 4) dijelovi (01–04 na sliki originala) */
$ngb_parts = array(
  array( '01', 'Poklopac koji se sigurno zaključava', 'Poklopac se lako i sigurno zatvara, pa hrana ostaje u košari dok je okrećete po roštilju. Bez stezaljki, bez alata. Samo otvorite, napunite i zaključajte.', 'Sigurno i jednostavno' ),
  array( '02', 'Metalna mreža od 0,8 mm', 'Dovoljno sitna da zadrži škampe, cherry rajčice i šparoge. Dovoljno otvorena da dim i plamen prolaze sa svih strana.', 'Mreža od 360°' ),
  array( '03', 'Pametni dodaci', 'Odvojiva drška olakšava okretanje košare tijekom roštiljanja za ravnomjerno pečenje. Kad je hrana gotova, priloženom kukicom skinite poklopac s valjka i sigurno otvorite košaru – bez dodatnog alata.', 'U paketu' ),
  array( '04', 'Nehrđajući čelik 304', 'Ista kvaliteta koja se koristi u profesionalnoj kuhinjskoj opremi. Izdrži temperature do 500 °C bez savijanja, hrđanja ili propadanja. Izrađena da traje stotinama večeri uz roštilj.', 'Čelik siguran za hranu' ),
);

/* 6) mnenja s fotografijami (imena lokalizirana) */
$ngb_rv = array(
  array( 'ngb-rv-1.webp', 'Bolje nego što sam očekivao', 'Kad je stigla, kutija je djelovala stvarno vrhunski, više kao poklon nego kao oprema za roštilj. S folije sam prešao jer sam pročitao da pri visokim temperaturama može otpuštati tvari u hranu – a hrana sada ima okus pečenog na roštilju, a ne kuhanog na pari. Drago mi je da sam promijenio.', 'Goran V.' ),
  array( 'ngb-rv-2.webp', 'Bolje od moje tave od lijevanog željeza', 'Prije sam na roštilj stavljao tavu od lijevanog željeza, ali hrana je imala isti okus kao da sam je pripremao unutra na štednjaku, pa nisam vidio smisao paliti roštilj. Ova košara propušta dim, pa hrana ima pravi okus roštilja. Tava sada ostaje u kuhinji.', 'Hrvoje T.' ),
  array( '', 'Suprug je stvarno koristi', 'Kupila sam je suprugu koji već ima svaki mogući dodatak za roštilj i to je jedina stvar koju stvarno koristi, svaki vikend, umjesto da završi u ormaru. Baš sam zadovoljna.', 'Dubravka V.' ),
  array( 'ngb-rv-4.webp', 'Puno bolje od podloge', 'Prije sam pekao na podlogama za roštilj, što je bilo beskorisno – samo guše dim. Ova košara stoji izravno iznad plamena i radi upravo suprotno. Velika razlika.', 'Nenad F.' ),
);

/* 7) usporedba (stupci originala: Brand / Foil / Grill Mat) */
$ngb_cmp = array(
  array( 'Pravi dimljeni okus roštilja', 'y', 'n', 'n' ),
  array( 'Za svaku vrstu roštilja', 'y', 'y', 'y' ),
  array( 'Ravnomjerna raspodjela topline', 'y', 'n', 'n' ),
  array( 'Jednostavno čišćenje', 'y', 'y', 'n' ),
  array( 'Višekratna i ekološka', 'y', 'n', 'y' ),
);

$ngb_n = 0; // števec sekcij za izmenična ozadja
$ngb_cls = function() use ( &$ngb_n ) { $ngb_n++; return ( $ngb_n % 2 ) ? ' ngb-tint' : ''; };
$ngb_mark = function( $v ) {
  if ( 'y' === $v ) { return '<span class="ngb-yes" aria-label="da">✓</span>'; }
  return '<span class="ngb-no" aria-label="ne">✕</span>';
};
?>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap">

<!-- 1) KAKO ZATVORITI POKLOPAC ROŠTILJA (harmonika nakupne škatle "How do I close the grill lid?") — slika ob besedilu -->
<section class="ngb-sec<?php echo $ngb_cls(); ?>">
  <div class="ngb-wrap">
    <div class="ngb-row2">
      <div class="ngb-media"><?php echo $ngb_img( 'ngb-s01-kosare-na-rostilju.webp', 'Četiri košare NORIKS GrillBasket s povrćem i škampima na plinskom roštilju', 'ngb-img--free' ); ?></div>
      <div class="ngb-copy">
        <p class="ngb-kicker">Za povrće i sitnu hranu</p>
        <h2 class="ngb-h3">Kako zatvoriti <em>poklopac roštilja?</em></h2>
        <p>Drvene drške odvijaju se rukom za oko <strong>10 sekundi</strong>, bez alata. Skinite ih, zatvorite poklopac i pecite ili dimite kao i inače.</p>
        <p>Košara od nehrđajućeg čelika izdrži toplinu do <strong>500 °C</strong> i pod zatvorenim poklopcem. Priloženom kukicom podignite košaru s roštilja, a zatim ponovno navijte drške za posluživanje.</p>
        <p class="ngb-big">Drške su otporne na toplinu – kod roštiljanja s otvorenim poklopcem možete ih ostaviti.</p>
      </div>
    </div>
  </div>
</section>

<!-- 2) TRAK PREDNOSTI (tekoči trak originala, statičen) -->
<section class="ngb-strip" aria-label="Prednosti NORIKS GrillBasket">
  <div class="ngb-wrap">
    <ul class="ngb-strip__list">
      <?php foreach ( $ngb_strip as $s ) : ?><li><?php echo esc_html( $s ); ?></li><?php endforeach; ?>
    </ul>
  </div>
</section>

<!-- 3) TRI KORAKA DO SAVRŠENOG ROŠTILJANJA ("Three steps to perfect grilling.") — 3 kartice -->
<section class="ngb-sec<?php echo $ngb_cls(); ?>">
  <div class="ngb-wrap">
    <p class="ngb-kicker ngb-c">Savršeno osmišljeno</p>
    <h2 class="ngb-h2 ngb-c">Tri koraka do <em>savršenog roštiljanja.</em></h2>
    <p class="ngb-lead ngb-c">Bez tehnike, bez iskustva, bez nagađanja. Košare NORIKS GrillBasket osmišljene su tako da <strong>svatko može peći kao profesionalac</strong>.</p>
    <div class="ngb-steps">
      <?php foreach ( $ngb_steps as $s ) : ?>
      <article class="ngb-step">
        <div class="ngb-step__img"><?php echo $ngb_img( $s[0], $s[1] ); ?></div>
        <div class="ngb-step__body">
          <p class="ngb-step__tag"><?php echo esc_html( $s[2] ); ?></p>
          <h3><?php echo esc_html( $s[3] ); ?></h3>
          <p><?php echo esc_html( $s[4] ); ?></p>
        </div>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- 4) SVAKI DETALJ POMNO JE OSMIŠLJEN ("Every detail is thoughtfully designed.") — slika ob besedilu -->
<section class="ngb-sec<?php echo $ngb_cls(); ?>">
  <div class="ngb-wrap">
    <div class="ngb-row2 ngb-row2--rev ngb-row2--top">
      <div class="ngb-media"><?php echo $ngb_img( 'ngb-s04-dijelovi.webp', 'Košara NORIKS GrillBasket s povrćem i kukicom – označeni dijelovi 01 do 04', 'ngb-img--free' ); ?></div>
      <div class="ngb-copy">
        <p class="ngb-kicker">Izrađena da traje</p>
        <h2 class="ngb-h3">Svaki detalj <em>pomno je osmišljen.</em></h2>
        <p>Svaka specifikacija ima svoj razlog – a uz NORIKS imate i <strong>pravo na povrat u roku od 30 dana</strong>.</p>
        <ol class="ngb-parts">
          <?php foreach ( $ngb_parts as $p ) : ?>
          <li>
            <span class="ngb-parts__no"><?php echo esc_html( $p[0] ); ?></span>
            <div>
              <h3><?php echo esc_html( $p[1] ); ?></h3>
              <p><?php echo esc_html( $p[2] ); ?></p>
              <span class="ngb-parts__tag"><?php echo esc_html( $p[3] ); ?></span>
            </div>
          </li>
          <?php endforeach; ?>
        </ol>
      </div>
    </div>
  </div>
</section>

<!-- 5) GOTOVO S ROŠTILJEM. GOTOVO S ČIŠĆENJEM. ("Done grilling. Done cleaning.") — slika ob besedilu -->
<section class="ngb-sec<?php echo $ngb_cls(); ?>">
  <div class="ngb-wrap">
    <div class="ngb-row2">
      <div class="ngb-media"><?php echo $ngb_img( 'ngb-s05-perilica.webp', 'Košara za roštilj stavlja se u perilicu posuđa', 'ngb-img--free' ); ?></div>
      <div class="ngb-copy">
        <p class="ngb-kicker">Jednostavno čišćenje</p>
        <h2 class="ngb-h3">Gotovo s roštiljem. <em>Gotovo s čišćenjem.</em></h2>
        <p>Izrada od <strong>nehrđajućeg čelika 304</strong>. Sigurna za perilicu posuđa. Bez ribanja, bez namakanja, bez održavanja.</p>
        <div class="ngb-feat">
          <h3>Sigurna za perilicu posuđa</h3>
          <p>Stavite je u perilicu posuđa ili je brzo operite ručno toplom vodom. Nehrđajući čelik 304 ne hrđa, ne mijenja boju i ne zadržava mirise.</p>
        </div>
        <div class="ngb-feat">
          <h3>Spremna za sljedeći put</h3>
          <p>Bez pripreme, bez ribanja, bez posebnog spremanja. Spremna je za sljedeću večer uz roštilj čim se osuši.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- 6) TISUĆE ZADOVOLJNIH LJUBITELJA ROŠTILJA ("Over 50,000 happy grillers") — 4 mnenja -->
<section class="ngb-sec<?php echo $ngb_cls(); ?>">
  <div class="ngb-wrap">
    <p class="ngb-kicker ngb-c"><?php echo $ngb_stars( 5 ); ?> Tisuće zadovoljnih ljubitelja roštilja</p>
    <h2 class="ngb-h2 ngb-c">Osjećajte se kao <em>majstor roštilja</em> svaki put.</h2>
    <div class="ngb-rv">
      <?php foreach ( $ngb_rv as $r ) : ?>
      <article class="ngb-card<?php echo $r[0] ? '' : ' ngb-card--txt'; ?>">
        <?php if ( $r[0] ) : ?><div class="ngb-card__img"><?php echo $ngb_img( $r[0], 'Košara NORIKS GrillBasket – fotografija kupca' ); ?></div><?php endif; ?>
        <div class="ngb-card__body">
          <?php if ( ! $r[0] ) : ?><span class="ngb-q" aria-hidden="true">“</span><?php endif; ?>
          <?php echo $ngb_stars( 5 ); ?>
          <h3 class="ngb-card__title"><?php echo esc_html( $r[1] ); ?></h3>
          <p class="ngb-card__txt">„<?php echo esc_html( $r[2] ); ?>”</p>
          <p class="ngb-card__name">– <?php echo esc_html( $r[3] ); ?> <span class="ngb-ok">✓ Potvrđena kupnja</span></p>
        </div>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- 7) ZAŠTO NORIKS ("Why BRYN wins" — primerjalna tabela) -->
<section class="ngb-sec<?php echo $ngb_cls(); ?>">
  <div class="ngb-wrap ngb-wrap--narrow">
    <p class="ngb-kicker ngb-c">Zašto NORIKS GrillBasket</p>
    <h2 class="ngb-h2 ngb-c">Nismo iznova izmislili roštiljanje. <em>Samo smo popravili ono što nije valjalo.</em></h2>
    <div class="ngb-cmp" role="table" aria-label="Usporedba: NORIKS GrillBasket, folija i podloga za roštilj">
      <div class="ngb-cmp__row ngb-cmp__head" role="row">
        <span role="columnheader"></span>
        <span role="columnheader" class="ngb-cmp__us">NORIKS</span>
        <span role="columnheader">Folija</span>
        <span role="columnheader">Podloga za roštilj</span>
      </div>
      <?php foreach ( $ngb_cmp as $r ) : ?>
      <div class="ngb-cmp__row" role="row">
        <span role="cell" class="ngb-cmp__lbl"><?php echo esc_html( $r[0] ); ?></span>
        <span role="cell" class="ngb-cmp__us"><?php echo $ngb_mark( $r[1] ); ?></span>
        <span role="cell"><?php echo $ngb_mark( $r[2] ); ?></span>
        <span role="cell"><?php echo $ngb_mark( $r[3] ); ?></span>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<style>
/* NORIKS stil (predloga why-therapillow.php / why-hands.php): oznaka + naslov z ležečim poudarkom, slika ob
   besedilu, izmenjujoča ozadja in strani. Paleta originala: bordo #a33428, krem #f9f1e6, temno #231d19. */
.ngb-sec { padding: 60px 0; font-family: 'Poppins', system-ui, -apple-system, 'Segoe UI', Roboto, Arial, sans-serif; color: #231d19; background: #fff; }
.ngb-sec *, .ngb-strip * { box-sizing: border-box; }
.ngb-tint { background: #f9f1e6; }
.ngb-wrap { width: 100%; max-width: 1200px; margin: 0 auto; padding: 0 24px; }
.ngb-wrap--narrow { max-width: 900px; }
.ngb-c { text-align: center; }
.ngb-sec h2, .ngb-sec h3 { font-family: inherit; text-transform: none; letter-spacing: 0; }
.ngb-kicker, .ngb-copy p.ngb-kicker { font-size: 12.5px; line-height: 1.4; font-weight: 700; letter-spacing: .14em; text-transform: uppercase; color: #a33428; margin: 0 0 10px; }
.ngb-kicker .ngb-stars { letter-spacing: 1px; margin-right: 6px; }
.ngb-h2 { font-weight: 700; font-size: clamp(25px, 3.1vw, 36px); line-height: 1.2; margin: 0 0 18px; color: #231d19; }
.ngb-h2 em, .ngb-h3 em { font-style: italic; color: #a33428; }
.ngb-h3 { font-weight: 700; font-size: clamp(22px, 2.6vw, 30px); line-height: 1.25; margin: 0 0 16px; color: #231d19; }
.ngb-sec img { display: block; width: 100%; height: auto; }
.ngb-lead { max-width: 760px; margin: 0 auto 32px; font-size: 16.5px; line-height: 1.7; color: #4a403a; }
.ngb-lead strong { color: #231d19; font-weight: 600; }

/* slika ob besedilu */
.ngb-row2 { display: grid; grid-template-columns: 1fr 1fr; gap: 56px; align-items: center; }
.ngb-row2--top { align-items: start; }
.ngb-row2--rev .ngb-media { order: 2; }
.ngb-media > img { border-radius: 10px; box-shadow: 0 2px 4px rgba(35,29,25,.05), 0 14px 40px rgba(35,29,25,.10); max-width: 560px; margin: 0 auto; aspect-ratio: 1 / 1; object-fit: cover; background: #fff; }
.ngb-media > img.ngb-img--free { aspect-ratio: auto; object-fit: contain; }
.ngb-copy p { font-size: 16px; line-height: 1.7; color: #4a403a; margin: 0 0 14px; }
.ngb-copy p strong { color: #231d19; font-weight: 600; }
.ngb-sec p.ngb-big { font-size: 19px; font-weight: 700; color: #231d19; line-height: 1.45; margin-top: 6px; }

/* trak prednosti */
.ngb-strip { background: #a33428; color: #fff; padding: 16px 0; font-family: 'Poppins', system-ui, -apple-system, 'Segoe UI', Roboto, Arial, sans-serif; }
.ngb-strip__list { list-style: none; margin: 0; padding: 0; display: flex; flex-wrap: wrap; justify-content: center; gap: 10px 34px; }
.ngb-strip__list li { position: relative; padding-left: 26px; font-size: 15px; font-weight: 600; letter-spacing: .02em; line-height: 1.5; margin: 0; }
.ngb-strip__list li::before { content: "✓"; position: absolute; left: 0; top: 2px; width: 18px; height: 18px; border-radius: 50%; background: #fff; color: #a33428; font-size: 11px; font-weight: 800; line-height: 18px; text-align: center; }

/* koraki */
.ngb-steps { display: grid; grid-template-columns: repeat(3, minmax(0, 1fr)); gap: 20px; }
.ngb-step { background: #fff; border: 1px solid #ead9c6; border-radius: 10px; overflow: hidden; box-shadow: 0 2px 10px rgba(35,29,25,.06); display: flex; flex-direction: column; }
.ngb-step__img img { aspect-ratio: 864 / 544; object-fit: cover; }
.ngb-step__body { padding: 18px 20px 20px; }
.ngb-step__body p.ngb-step__tag { display: inline-block; background: #a33428; color: #fff; border-radius: 999px; padding: 4px 12px; font-size: 12.5px; font-weight: 600; text-transform: uppercase; letter-spacing: .06em; margin: 0 0 10px; }
.ngb-step__body h3 { font-size: 18px; font-weight: 700; line-height: 1.35; color: #231d19; margin: 0 0 8px; }
.ngb-step__body p { font-size: 15px; line-height: 1.65; color: #4a403a; margin: 0; }

/* dijelovi */
.ngb-parts { list-style: none; margin: 6px 0 0; padding: 0; }
.ngb-parts li { display: grid; grid-template-columns: 40px 1fr; gap: 14px; padding: 14px 0; border-top: 1px solid #ead9c6; margin: 0; }
.ngb-parts li:first-child { border-top: 0; padding-top: 4px; }
.ngb-parts__no { width: 36px; height: 36px; border-radius: 50%; background: #a33428; color: #fff; font-size: 13px; font-weight: 700; line-height: 36px; text-align: center; }
.ngb-parts h3 { font-size: 17px; font-weight: 700; line-height: 1.35; color: #231d19; margin: 4px 0 6px; }
.ngb-copy .ngb-parts p { font-size: 15px; line-height: 1.65; margin: 0 0 8px; }
.ngb-parts__tag { display: inline-block; font-size: 11.5px; font-weight: 700; letter-spacing: .1em; text-transform: uppercase; color: #a33428; background: #f6e1dc; border-radius: 999px; padding: 3px 10px; }
.ngb-tint .ngb-parts__tag { background: #fff; }

/* čišćenje */
.ngb-feat { border-left: 3px solid #a33428; padding: 2px 0 2px 16px; margin: 18px 0 0; }
.ngb-feat h3 { font-size: 17px; font-weight: 700; color: #231d19; margin: 0 0 6px; line-height: 1.35; }
.ngb-copy .ngb-feat p { font-size: 15px; line-height: 1.65; margin: 0; }

/* mnenja */
.ngb-rv { display: grid; grid-template-columns: repeat(4, minmax(0, 1fr)); gap: 18px; align-items: start; }
.ngb-card { background: #fff; border: 1px solid #ead9c6; border-radius: 10px; overflow: hidden; display: flex; flex-direction: column; box-shadow: 0 2px 10px rgba(35,29,25,.05); }
.ngb-sec:not(.ngb-tint) .ngb-card { background: #fbf7f1; }
.ngb-card__img img { aspect-ratio: 3 / 4; object-fit: cover; }
.ngb-card__body { padding: 16px; }
.ngb-card__title { font-size: 16px; font-weight: 700; color: #231d19; margin: 8px 0 4px; line-height: 1.35; }
.ngb-card__txt { font-size: 14.5px; line-height: 1.6; color: #3a312b; margin: 6px 0 10px; font-style: italic; }
.ngb-card__name { font-size: 13.5px; font-weight: 600; color: #231d19; margin: 0; }
.ngb-card--txt { background: #a33428 !important; border-color: #a33428; }
.ngb-card--txt .ngb-card__title { color: #fff; font-size: 18px; }
.ngb-card--txt .ngb-card__txt { color: #fff; font-size: 16px; font-style: normal; font-weight: 500; }
.ngb-card--txt .ngb-card__name { color: #f9f1e6; }
.ngb-card--txt .ngb-ok { color: #ffe3c2; }
.ngb-card--txt .ngb-stars__off { color: rgba(255,255,255,.35); }
.ngb-q { display: block; font-family: Georgia, serif; font-size: 46px; line-height: .8; color: #ffcf8a; }

/* usporedba */
.ngb-cmp { margin: 8px auto 0; max-width: 760px; border-radius: 10px; overflow: hidden; border: 1px solid #ead9c6; background: #fff; }
.ngb-cmp__row { display: grid; grid-template-columns: 1.7fr 1fr 1fr 1fr; align-items: center; border-top: 1px solid #f0e4d6; }
.ngb-cmp__row:first-child { border-top: 0; }
.ngb-cmp__row > span { padding: 13px 8px; text-align: center; font-size: 14.5px; color: #4a403a; }
.ngb-cmp__row > span.ngb-cmp__lbl { text-align: left; padding-left: 18px; font-weight: 600; color: #231d19; }
.ngb-cmp__head > span { font-size: 12.5px; font-weight: 700; text-transform: uppercase; letter-spacing: .06em; color: #6b5f56; }
.ngb-cmp__row > span.ngb-cmp__us { background: #a33428; color: #fff; }
.ngb-cmp__head > span.ngb-cmp__us { color: #fff; font-size: 14px; letter-spacing: .1em; }
.ngb-yes, .ngb-no { display: inline-block; width: 22px; height: 22px; border-radius: 50%; font-size: 12px; font-weight: 800; line-height: 22px; text-align: center; }
.ngb-yes { background: #2f9e5f; color: #fff; }
.ngb-cmp__us .ngb-yes { background: #fff; color: #a33428; }
.ngb-no { background: #ece3d8; color: #8f857c; }

/* ocjene */
.ngb-stars { color: #f2a516; letter-spacing: 1px; font-size: 15px; }
.ngb-stars__off { color: #dcd3c6; }
.ngb-ok { color: #2f9e5f; font-weight: 600; font-size: 12px; margin-left: 4px; font-style: normal; }

@media (max-width: 989px) {
  .ngb-row2 { gap: 32px; }
  .ngb-steps { gap: 14px; }
  .ngb-rv { grid-template-columns: 1fr 1fr; }
}
@media (max-width: 749px) {
  .ngb-sec { padding: 42px 0; }
  .ngb-wrap { padding: 0 16px; }
  .ngb-row2 { grid-template-columns: 1fr; gap: 24px; }
  .ngb-row2--rev .ngb-media { order: 0; }
  .ngb-steps { grid-template-columns: 1fr; }
  .ngb-rv { gap: 12px; }
  .ngb-card__body { padding: 12px; }
  .ngb-strip__list { justify-content: flex-start; gap: 8px 22px; }
  .ngb-strip__list li { font-size: 14px; }
  .ngb-cmp__row { grid-template-columns: 1.4fr 1fr 1fr 1fr; }
  .ngb-cmp__row > span { padding: 10px 4px; font-size: 12.5px; }
  .ngb-cmp__row > span.ngb-cmp__lbl { padding-left: 10px; }
  .ngb-cmp__head > span { font-size: 10.5px; letter-spacing: .02em; }
}
@media (max-width: 480px) {
  .ngb-rv { grid-template-columns: 1fr; }
}

/* galerija izdelka: sličice največ v 2 vrstah (5 na vrsto), ostale slike so dosegljive z drsenjem glavne slike */
.product_cat-orto-grillbasket .flex-control-thumbs li:nth-child(n+11) { display: none !important; }

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
.woocommerce-product-details__short-description .ngb-tick {
  position: absolute !important; left: 0 !important; top: 1px !important;
  width: 21px; height: 21px; border-radius: 50%;
  background: #2f9e5f !important; color: #fff !important;
  font-size: 12px !important; font-weight: 800 !important; line-height: 21px !important;
  text-align: center !important; display: inline-block !important; }
.woocommerce-product-details__short-description p:first-of-type { font-size: 16px; line-height: 1.55; }
</style>
