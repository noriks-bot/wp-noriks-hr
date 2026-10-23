<?php
/**
 * product-bottom: NORIKS LeatherBoots — muske udobne kozne cizme (orto-leatherboots).
 * Original: movaracare.com/products/premium-leather-work-boots (»Men's Comfort Leather Boots«) — vsebina in vrstni red 1:1
 * z originalom, oblika po NORIKS stilu (predloga why-thermoboots.php / why-hands.php), privzeta topla rjava paleta (#a9683f):
 *   1) »Customer Love Our Boots!« (11 fotografij kupcev v nakupni skatli)  -> Kupci vole naše čizme!
 *   2) »Your Boots Are The Reason Your Feet Are Done By The Afternoon«   -> Vaše čizme su razlog… (slika ob besedilu)
 *   3) »Comfort You Can Feel With Every Step« (3 zavihki)                -> Udobnost koju osjetite u svakom koraku
 *      (zavihek 1: utisan video testa z vodo, skrajsan pred kadri z logotipom; zavihek 2: kader testa z zeblji, logotip
 *       retusiran — video ima logotip v skoraj vseh kadrih; zavihek 3: fotografija kupca namesto videa hoje z logotipom)
 *   4) »Why Your Feet Feel Better In Movara™« (3 kartice)                -> Zašto se vaša stopala osjećaju bolje
 *   5) »Why These Work When The Last Four Pairs Didn't« (4 fotografije)  -> Zašto ove čizme djeluju…
 *   6) primerjalna tabela (NORIKS / 3 vrste čizama)                       -> Usporedba
 *   7) »See The Comfort In Action« (3 videa kupcev z govorom, vzganimi angleskimi napisi, imenom druge znamke in
 *      logotipom na cizmi v vseh kadrih — ni jih bilo mogoce cisto predelati) -> slika ob besedilu z napisi iz videov
 *   8) »30,000+ Men Are Never Going Back« (4 izjave)                      -> Tisuće muškaraca… (brez stevila konkurenta)
 *   9) »No Risk. All Reward. 30-Day Money-Back Guarantee«                 -> Bez rizika (NORIKS pogoji)
 *  10) »Hear From The Men Wearing These Every Day« (4.7 + 8 mnenj)        -> Recenzije (stevilo po NORIKS = 1081 / 692)
 *  11) »Stop Settling For Boots That Leave Your Feet Exhausted« (CTA)     -> Prestanite se zadovoljavati…
 * Izpusceno: glava, pasica Halloween Special Sale, odstevalnik, »people viewing«, WARNING Low Stock Notice, darila v paketu
 * (ulozki, Mystery Reward), harmoniki Shipping / Try It For 30 Days (vsebina v standardnih harmonikah), Judge.me pripomocek
 * (nadomesti ga tema), FAQ (v reviews.php kot $leatherboots_faq, po NORIKS pogojih), mnenja v auto_reviews/HR_leatherboots.php.
 * Slike: img/leatherboots/ (nlb-…).
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$nlb      = get_template_directory_uri() . '/img/leatherboots/';
$nlb_path = get_template_directory() . '/img/leatherboots/';
$nlb_img  = function( $file, $alt ) use ( $nlb, $nlb_path ) {
  if ( ! $file || ! file_exists( $nlb_path . $file ) ) { return ''; }
  return '<img src="' . esc_url( $nlb . $file ) . '" alt="' . esc_attr( $alt ) . '" loading="lazy">';
};
$nlb_vid = function( $file, $poster, $label ) use ( $nlb, $nlb_path ) {
  if ( ! file_exists( $nlb_path . $file ) ) { return ''; }
  $p = ( $poster && file_exists( $nlb_path . $poster ) ) ? ' poster="' . esc_url( $nlb . $poster ) . '"' : '';
  return '<video src="' . esc_url( $nlb . $file ) . '"' . $p . ' muted autoplay loop playsinline preload="metadata" aria-label="' . esc_attr( $label ) . '"></video>';
};
$nlb_stars = function( $n ) {
  return '<span class="nlb-stars" aria-label="' . (int) $n . ' od 5 zvjezdica">' . str_repeat( '★', (int) $n ) . '<span class="nlb-stars__off">' . str_repeat( '★', 5 - (int) $n ) . '</span></span>';
};

/* 1) fotografije kupcev */
$nlb_kupci = array( 'nlb-k01.webp', 'nlb-k02.webp', 'nlb-k03.webp', 'nlb-k04.webp', 'nlb-k05.webp', 'nlb-k06.webp',
                    'nlb-k07.webp', 'nlb-k08.webp', 'nlb-k09.webp', 'nlb-k10.webp', 'nlb-k11.webp' );

/* 4) zakaj se stopala pocutijo bolje */
$nlb_feat = array(
  array( 'nlb-g09-obicne-nase.webp',      'Više prostora – manje pritiska', 'Prirodan prostor u kojem se prsti mogu opustiti. Bez pritiska i žuljanja.' ),
  array( 'nlb-g08-ulozak.webp',           'Jastučić koji upija udarce',      'Mekana potpora koja smanjuje pritisak pri svakom koraku.' ),
  array( 'nlb-g07-problemi-stopala.webp', 'Uravnotežena potpora',            'Pomaže da držanje ostane stabilno i udobno.' ),
);

/* 6) primerjalna tabela */
$nlb_cmp_cols = array( 'Obične kožne čizme', 'Ležerne elegantne čizme', 'Jeftine modne čizme' );
$nlb_cmp = array(
  array( 'Udobnost cijeli dan',                          'Ne, bole već popodne', 'Ne, stil ispred udobnosti', 'Ne, brzo se spljošte' ),
  array( 'Širok prednji dio',                            'Ne, uzak kalup',       'Ne, tijesne',               'Ne, žuljaju' ),
  array( 'Manje boli u stopalima, koljenima i leđima',   'Ne',                   'Ne',                        'Ne' ),
  array( 'Mekan uložak s potporom',                      'Ovisi',                'Ne',                        'Ne' ),
  array( 'Lagane i fleksibilne',                         'Ovisi',                'Ne, krute',                 'Da' ),
  array( 'Neklizajući potplat',                          'Ovisi',                'Ne',                        'Ne' ),
  array( 'Otporne na vodu',                              'Ovisi',                'Ovisi',                     'Ne' ),
  array( 'Pristaju uz sve',                              'Da',                   'Da',                        'Ovisi' ),
  array( 'Cijena',                                       '80 – 135 €',           '115 – 225 €+',              '35 – 55 €' ),
  array( 'Pravo na povrat u roku od 30 dana',            'Ne',                   'Ne',                        'Ne' ),
);
$nlb_cmp_ours = array( 'Da', 'Da', 'Da', 'Da', 'Da', 'Da', 'Da', 'Da', '62,99 €', 'Da' );

/* 8) izjave kupcev */
$nlb_tst = array(
  array( 'ime' => 'Sanja',     'img' => 'nlb-t1-sanja.webp',   'tekst' => 'Kupila sam ih suprugu i sada ih nosi svaki dan. Kaže da su udobne, stabilne i da mu stopala ostaju suha. To je sve što sam trebala čuti.' ),
  array( 'ime' => 'Danijel V.', 'img' => 'nlb-t2-danijel.webp', 'tekst' => 'Uzeo sam smeđe. Kvaliteta kože je bolja nego što sam očekivao za tu cijenu. Nosim ih na posao i vikendom. Lijepo izgledaju i dobro se drže.' ),
  array( 'ime' => 'Davor R.',  'img' => 'nlb-t3-davor.webp',   'tekst' => 'Nosim ih otprilike 3 tjedna. Prije su me stopala ubijala već do popodneva, a sada mi je udobno cijeli dan, bez one stare boli.' ),
  array( 'ime' => 'Robert H.', 'img' => 'nlb-t4-robert.webp',  'tekst' => 'Ugazio sam u lokvu, a stopala su mi ostala potpuno suha. Nisam to očekivao za ovu cijenu.' ),
);

/* 10) mnenja z originala (prevedena) */
$nlb_reviews = array(
  array( 'ime' => 'Branko C.', 'img' => 'nlb-rv-1.webp', 'naslov' => 'Dobre čizme za poštenu cijenu',          'tekst' => 'Dobra kvaliteta, udobno pristajanje i siguran potplat. Teško je naći ovako udobne radne čizme za ovu cijenu. Nosim ih oko 2 tjedna i zasad nemam nijednu zamjerku.' ),
  array( 'ime' => 'Josip R.',  'img' => 'nlb-rv-3.webp', 'naslov' => 'Nema više bolnih stopala na kraju dana', 'tekst' => 'Prije sam došao kući i odmah izuo čizme jer su me stopala toliko boljela. Sada na to gotovo i ne mislim. Primjetna je razlika u tome kako se stopala osjećaju nakon duge smjene.' ),
  array( 'ime' => 'Pavao N.',  'img' => 'nlb-rv-4.webp', 'naslov' => 'Sada su mi glavne radne čizme',         'tekst' => 'Radim u skladištu, 8 sati dnevno na betonu. Sada su mi to glavne čizme. Jastučenje drži cijeli dan, a neklizajući potplat daje mi sigurnost na podu. Već sam ih preporučio dvojici kolega.' ),
  array( 'ime' => 'Franjo T.', 'img' => '',              'naslov' => 'Dobro podnose mokre uvjete',            'tekst' => 'Puno radim vani, a imali smo nekoliko kišnih tjedana. Dobro su to podnijele — stopala su mi ostala ugodna i kad sam hodao kroz lokve i mokru travu. Jako sam zadovoljan kupnjom.' ),
  array( 'ime' => 'Sanja L.',  'img' => '',              'naslov' => 'Kupila sam ih suprugu i oduševljen je', 'tekst' => 'Kupila sam ih na poklon suprugu koji radi na gradilištu. Kaže da su to najudobnije čizme koje je ikad imao. Sada ih nosi svaki dan. Sigurno naručujem još jedan par.' ),
  array( 'ime' => 'Marko D.',  'img' => '',              'naslov' => 'Najbolje radne čizme koje sam imao',     'tekst' => 'Tijekom godina isprobao sam puno radnih čizama. Ove su daleko najudobnije. Potpora svoda stvarno čini razliku kad ste gotovo cijeli dan na nogama.' ),
  array( 'ime' => 'Damir P.',  'img' => '',              'naslov' => 'Udobne od prvog dana',                  'tekst' => 'Super udobne od prvog dana. Stopala su mi zahvalna nakon svake smjene. Uzeo sam smeđe i izgledaju odlično. Puno komplimenata od kolega.' ),
  array( 'ime' => 'Jakov K.',  'img' => '',              'naslov' => 'Potplat stvarno drži',                  'tekst' => 'Radim kao dostavljač. Hodam po mokrim prilazima, travi i pločicama — ove ne kližu. Prije sam imao čizme u kojima sam se poskliznuo na mokrom trijemu. S ovima se to ne događa. Prianjanje potplata je odlično.' ),
);
/* razdelitev ocen originala (38 / 21 / 9 / 7 / 4) skalirana na 692 mnenj o izdelku */
$nlb_dist = array( 5 => 333, 4 => 184, 3 => 79, 2 => 61, 1 => 35 );

$nlb_n = 0; // števec sekcij za izmenična ozadja
$nlb_cls = function() use ( &$nlb_n ) { $nlb_n++; return ( $nlb_n % 2 ) ? ' nlb-tint' : ''; };
$nlb_side = 0; // izmenične strani slika/besedilo
$nlb_rev = function() use ( &$nlb_side ) { $nlb_side++; return ( $nlb_side % 2 ) ? '' : ' nlb-row2--rev'; };
?>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap">

<!-- 1) KUPCI VOLE NAŠE ČIZME — fotografije kupaca (Customer Love Our Boots!) -->
<section class="nlb-sec<?php echo $nlb_cls(); ?>">
  <div class="nlb-wrap">
    <p class="nlb-kicker nlb-c">Iskustva kupaca</p>
    <h2 class="nlb-h2 nlb-c">Kupci <em>vole</em> naše čizme!</h2>
    <ul class="nlb-photos">
      <?php foreach ( $nlb_kupci as $i => $k ) : ?>
      <li><?php echo $nlb_img( $k, 'Kupac u NORIKS LeatherBoots čizmama ' . ( $i + 1 ) ); ?></li>
      <?php endforeach; ?>
    </ul>
  </div>
</section>

<!-- 2) VAŠE ČIZME SU RAZLOG — problem (Your Boots Are The Reason…) -->
<section class="nlb-sec<?php echo $nlb_cls(); ?>">
  <div class="nlb-wrap">
    <div class="nlb-row2<?php echo $nlb_rev(); ?>">
      <div class="nlb-media nlb-media--sq"><?php echo $nlb_img( 'nlb-g06-bez-boli.webp', 'NORIKS LeatherBoots — završite dan bez boli u stopalima' ); ?></div>
      <div class="nlb-copy">
        <p class="nlb-kicker">Poznato vam je?</p>
        <h2 class="nlb-h3">Vaše čizme su razlog zašto vas stopala bole <em>već popodne</em></h2>
        <p>Osjetili ste kako vas stopala počnu boljeti već usred dana.</p>
        <p>Ona duboka bol koja se do povratka kući uvuče u koljena i donji dio leđa.</p>
        <p>Sjednete i prvo što napravite je da izujete čizme i protrljate stopala.</p>
        <p>Većina čizama na početku je <strong>tvrda kao beton</strong> ili se za nekoliko mjeseci <strong>spljošti kao spužva</strong>. U oba slučaja stopala ostaju bez potpore, stisnuta i iscrpljena do kraja dana.</p>
        <p class="nlb-big">Vrijeme je za čizme koje rade za vaša stopala.</p>
      </div>
    </div>
  </div>
</section>

<!-- 3) UDOBNOST KOJU OSJETITE U SVAKOM KORAKU — 3 zavihka originala (Comfort You Can Feel With Every Step) -->
<section class="nlb-sec<?php echo $nlb_cls(); ?>">
  <div class="nlb-wrap">
    <p class="nlb-kicker nlb-c">Zaštita · prianjanje · udobnost</p>
    <h2 class="nlb-h2 nlb-c">Udobnost koju osjetite <em>u svakom koraku</em></h2>
    <p class="nlb-lead nlb-c">Pogledajte kako NORIKS LeatherBoots štite, podupiru i odmaraju vaša stopala cijeli dan.</p>

    <div class="nlb-row2 nlb-row2--gap<?php echo $nlb_rev(); ?>">
      <div class="nlb-media nlb-media--sq"><?php echo $nlb_vid( 'nlb-v1-voda-hr.mp4', 'nlb-v1-voda.webp', 'Voda se slijeva niz NORIKS LeatherBoots čizmu' ); ?></div>
      <div class="nlb-copy">
        <p class="nlb-kicker">Zaštita od vode</p>
        <h3 class="nlb-h3">Odbijaju vodu, pa <em>stopala ostaju ugodna</em></h3>
        <p>Kožni gornji dio prirodno odbija laganu kišu i prskanje — stopala ostaju suha i ugodna u svakodnevnim mokrim uvjetima.</p>
        <p>Bilo da prelazite mokri pločnik, hodate po laganoj kiši ili se krećete vlažnim gradilištem, NORIKS LeatherBoots to podnose bez problema.</p>
        <p class="nlb-big">Nisu zamjena za potpuno vodootporne čizme — ali dovoljno su izdržljive za pravo svakodnevno nošenje.</p>
      </div>
    </div>

    <div class="nlb-row2 nlb-row2--gap<?php echo $nlb_rev(); ?>">
      <div class="nlb-media nlb-media--sq"><?php echo $nlb_img( 'nlb-s03-cavli.webp', 'NORIKS LeatherBoots na podlozi s čavlima — potplat koji upija udarce' ); ?></div>
      <div class="nlb-copy">
        <p class="nlb-kicker">Neklizajući potplat</p>
        <h3 class="nlb-h3">Neklizajući potplat koji <em>upija udarce</em></h3>
        <p>Robustan gumeni potplat pouzdano prianja na mokrim, neravnim i sklizavim površinama.</p>
        <p>U kombinaciji s mekanim međupotplatom pomaže upiti udarce i čini svaki korak stabilnim i sigurnim.</p>
      </div>
    </div>

    <div class="nlb-row2 nlb-row2--gap<?php echo $nlb_rev(); ?>">
      <div class="nlb-media nlb-media--sq"><?php echo $nlb_img( 'nlb-k05.webp', 'Kupac nosi NORIKS LeatherBoots cijeli dan' ); ?></div>
      <div class="nlb-copy">
        <p class="nlb-kicker">Udobnost cijeli dan</p>
        <h3 class="nlb-h3">Mekana potpora za <em>duge sate na nogama</em></h3>
        <p>Uz ergonomsku potporu svoda i prostran prednji dio, NORIKS LeatherBoots pomažu ravnomjerno rasporediti pritisak po cijelom stopalu.</p>
        <p>To smanjuje umor i čuva udobnost — bilo da radite, hodate ili stojite cijeli dan.</p>
      </div>
    </div>
  </div>
</section>

<!-- 4) ZAŠTO SE VAŠA STOPALA OSJEĆAJU BOLJE — 3 kartice (Why Your Feet Feel Better) -->
<section class="nlb-sec<?php echo $nlb_cls(); ?>">
  <div class="nlb-wrap">
    <p class="nlb-kicker nlb-c">Osmišljene za stopala</p>
    <h2 class="nlb-h2 nlb-c">Zašto se vaša stopala osjećaju bolje <em>u NORIKS čizmama</em></h2>
    <ul class="nlb-feat3">
      <?php foreach ( $nlb_feat as $f ) : ?>
      <li><div class="nlb-feat3__img"><?php echo $nlb_img( $f[0], $f[1] ); ?></div><h3><?php echo esc_html( $f[1] ); ?></h3><p><?php echo esc_html( $f[2] ); ?></p></li>
      <?php endforeach; ?>
    </ul>
  </div>
</section>

<!-- 5) ZAŠTO OVE ČIZME DJELUJU — 4 fotografije izrade ob besedilu (Why These Work When The Last Four Pairs Didn't) -->
<section class="nlb-sec<?php echo $nlb_cls(); ?>">
  <div class="nlb-wrap">
    <div class="nlb-row2<?php echo $nlb_rev(); ?>">
      <div class="nlb-media">
        <div class="nlb-grid4">
          <?php for ( $i = 1; $i <= 4; $i++ ) { echo $nlb_img( 'nlb-s05-izrada-' . $i . '.webp', 'Ručna izrada kožnih čizama ' . $i ); } ?>
        </div>
      </div>
      <div class="nlb-copy">
        <p class="nlb-kicker">Razlika je u temelju</p>
        <h2 class="nlb-h3">Zašto ove čizme djeluju kad <em>prethodna četiri para nisu</em></h2>
        <p>Većina čizama izrađena je na <strong>ravnoj, krutoj podlozi</strong>. Vaše stopalo ima svod. Čizma ga nema.</p>
        <p>Zato se stopalo cijeli dan bori da zadrži oblik na površini koja mu ništa ne daje — dok svod ne popusti, stopalo se ne spljošti, a bol se ne popne u koljena i leđa.</p>
        <p>Nikad nije bilo stvar toga koliko dugo ste na nogama. Bilo je stvar onoga na čemu stojite.</p>
        <ul class="nlb-points">
          <li><span class="nlb-dot" aria-hidden="true">✓</span><span><strong>Uložak oblikovan prema svodu</strong> drži ga na mjestu, pa do spljoštenja nikad ne dođe — i bol nikad ne počne.</span></li>
          <li><span class="nlb-dot" aria-hidden="true">✓</span><span><strong>Jastučenje upija udarac</strong> svakog koraka prije nego što stigne do koljena.</span></li>
          <li><span class="nlb-dot" aria-hidden="true">✓</span><span><strong>Širok prednji dio</strong> daje prstima prostor umjesto da ih stišće u špic.</span></li>
          <li><span class="nlb-dot" aria-hidden="true">✓</span><span><strong>Potplat prianja na mokrim podovima</strong>, koža zadržava vodu vani, a cijela čizma ostaje lagana.</span></li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- 6) USPOREDBA — tabela NORIKS / 3 vrste čizama -->
<section class="nlb-sec<?php echo $nlb_cls(); ?>">
  <div class="nlb-wrap">
    <p class="nlb-kicker nlb-c">Usporedba</p>
    <h2 class="nlb-h2 nlb-c">NORIKS LeatherBoots <em>u usporedbi s drugima</em></h2>
    <div class="nlb-cmp-scroll">
      <table class="nlb-cmp">
        <thead>
          <tr>
            <td class="nlb-cmp__empty"></td>
            <th scope="col" class="nlb-cmp__ours">NORIKS</th>
            <?php foreach ( $nlb_cmp_cols as $c ) : ?><th scope="col"><?php echo esc_html( $c ); ?></th><?php endforeach; ?>
          </tr>
        </thead>
        <tbody>
          <?php foreach ( $nlb_cmp as $i => $row ) : ?>
          <tr>
            <th scope="row"><?php echo esc_html( $row[0] ); ?></th>
            <td class="nlb-cmp__ours"><?php echo ( 'Da' === $nlb_cmp_ours[ $i ] ) ? '<span class="nlb-yes" aria-hidden="true">✓</span> Da' : '<strong>' . esc_html( $nlb_cmp_ours[ $i ] ) . '</strong>'; ?></td>
            <?php for ( $j = 1; $j <= 3; $j++ ) :
              $v = $row[ $j ];
              $cls = ( 0 === strpos( $v, 'Ne' ) ) ? 'nlb-no' : ( ( 'Da' === $v ) ? 'nlb-ok2' : '' ); ?>
            <td class="<?php echo esc_attr( $cls ); ?>"><?php echo esc_html( $v ); ?></td>
            <?php endfor; ?>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</section>

<!-- 7) POGLEDAJTE UDOBNOST NA DJELU — napisi iz videa kupaca ob sliki (See The Comfort In Action) -->
<section class="nlb-sec<?php echo $nlb_cls(); ?>">
  <div class="nlb-wrap">
    <div class="nlb-row2<?php echo $nlb_rev(); ?>">
      <div class="nlb-media nlb-media--sq"><?php echo $nlb_img( 'nlb-g11-par.webp', 'Par NORIKS LeatherBoots čizama u smeđoj boji' ); ?></div>
      <div class="nlb-copy">
        <p class="nlb-kicker">U akciji</p>
        <h2 class="nlb-h3">Pogledajte <em>udobnost na djelu</em></h2>
        <p>Kupci ih nose na poslu, u šetnji i vikendom — i svi primijete isto.</p>
        <ul class="nlb-points">
          <li><span class="nlb-dot" aria-hidden="true">✓</span><span><strong>Bez umornih i bolnih stopala</strong> — udobne cijeli dan.</span></li>
          <li><span class="nlb-dot" aria-hidden="true">✓</span><span><strong>Velika nosivost</strong> — potplat koji upija pritisak i udarce.</span></li>
          <li><span class="nlb-dot" aria-hidden="true">✓</span><span><strong>Za sva godišnja doba</strong> i izrađene da traju.</span></li>
          <li><span class="nlb-dot" aria-hidden="true">✓</span><span><strong>Mekana podstava</strong> bez žuljanja, i kad su stopala natečena.</span></li>
          <li><span class="nlb-dot" aria-hidden="true">✓</span><span><strong>Nadograđeni ulošci</strong> za još bolju potporu.</span></li>
          <li><span class="nlb-dot" aria-hidden="true">✓</span><span><strong>Prianjanje kao da su zalijepljene</strong> za podlogu.</span></li>
        </ul>
        <p class="nlb-big">Pravo na povrat u roku od 30 dana — kupujte bez brige.</p>
      </div>
    </div>
  </div>
</section>

<!-- 8) TISUĆE MUŠKARACA — 4 izjave s fotografijama (30,000+ Men Are Never Going Back) -->
<section class="nlb-sec<?php echo $nlb_cls(); ?>">
  <div class="nlb-wrap">
    <p class="nlb-kicker nlb-c">Iskustva kupaca</p>
    <h2 class="nlb-h2 nlb-c">Tisuće muškaraca <em>ne vraća se starim čizmama</em></h2>
    <div class="nlb-tst">
      <?php foreach ( $nlb_tst as $t ) : ?>
      <article class="nlb-card nlb-card--img">
        <div class="nlb-card__img"><?php echo $nlb_img( $t['img'], 'Fotografija kupca: ' . $t['ime'] ); ?></div>
        <div class="nlb-card__body">
          <?php echo $nlb_stars( 5 ); ?>
          <p class="nlb-card__txt">„<?php echo esc_html( $t['tekst'] ); ?>”</p>
          <p class="nlb-card__name"><?php echo esc_html( $t['ime'] ); ?> <span class="nlb-ok">✓ Potvrđena kupnja</span></p>
        </div>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- 9) BEZ RIZIKA — 30 dana (No Risk. All Reward.), NORIKS pogoji -->
<section class="nlb-sec<?php echo $nlb_cls(); ?>">
  <div class="nlb-wrap">
    <div class="nlb-row2<?php echo $nlb_rev(); ?>">
      <div class="nlb-media nlb-media--wide"><?php echo $nlb_img( 'nlb-s09-kutija.webp', 'NORIKS LeatherBoots u kutiji' ); ?></div>
      <div class="nlb-copy">
        <p class="nlb-kicker">Bez rizika. Samo koristi.</p>
        <h2 class="nlb-h3">Pravo na povrat <em>u roku od 30 dana</em></h2>
        <p>Stojimo iza svakog vašeg koraka. Ako niste potpuno zadovoljni svojim NORIKS LeatherBoots čizmama, imate <strong>pravo na povrat u roku od 30 dana</strong> — javite nam se i pomoći ćemo vam s povratom ili zamjenom.</p>
        <ul class="nlb-badges">
          <li><span class="nlb-dot" aria-hidden="true">✓</span>30 dana za isprobavanje</li>
          <li><span class="nlb-dot" aria-hidden="true">✓</span>Jednostavan povrat</li>
          <li><span class="nlb-dot" aria-hidden="true">✓</span>Vaše povjerenje nam je važno</li>
          <li><span class="nlb-dot" aria-hidden="true">✓</span>Besplatna dostava za narudžbe iznad 70 €</li>
        </ul>
        <p class="nlb-big">Isprobajte ih bez rizika već danas.</p>
      </div>
    </div>
  </div>
</section>

<!-- 10) RECENZIJE — 4,7 / 5, razdelitev, 8 mnenj (Hear From The Men Wearing These Every Day); število po NORIKS (1081) -->
<section class="nlb-sec<?php echo $nlb_cls(); ?>">
  <div class="nlb-wrap">
    <p class="nlb-kicker nlb-c">Recenzije kupaca</p>
    <h2 class="nlb-h2 nlb-c">Poslušajte muškarce koji ih <em>nose svaki dan</em></h2>
    <div class="nlb-sum">
      <div class="nlb-sum__score">
        <span class="nlb-score__num">4,7 / 5</span>
        <?php echo $nlb_stars( 5 ); ?>
        <span class="nlb-score__txt">Na temelju 1081 recenzije · Tisuće zadovoljnih kupaca</span>
        <span class="nlb-sum__rec"><strong>97 %</strong> kupaca preporučilo bi ih prijatelju</span>
      </div>
      <div class="nlb-bars">
        <?php foreach ( $nlb_dist as $s => $c ) : ?>
        <div class="nlb-bar"><span class="nlb-bar__lbl"><?php echo (int) $s; ?> ★</span><span class="nlb-bar__track"><span style="width:<?php echo round( $c / 692 * 100, 1 ); ?>%"></span></span><span class="nlb-bar__n"><?php echo (int) $c; ?></span></div>
        <?php endforeach; ?>
      </div>
    </div>
    <div class="nlb-reviews">
      <?php foreach ( $nlb_reviews as $r ) : ?>
      <article class="nlb-card<?php echo $r['img'] ? ' nlb-card--img' : ''; ?>">
        <?php if ( $r['img'] ) : ?><div class="nlb-card__img"><?php echo $nlb_img( $r['img'], 'Fotografija kupca: ' . $r['ime'] ); ?></div><?php endif; ?>
        <div class="nlb-card__body">
          <?php echo $nlb_stars( 5 ); ?>
          <p class="nlb-card__title"><?php echo esc_html( $r['naslov'] ); ?></p>
          <p class="nlb-card__txt">„<?php echo esc_html( $r['tekst'] ); ?>”</p>
          <p class="nlb-card__name"><?php echo esc_html( $r['ime'] ); ?> <span class="nlb-ok">✓ Potvrđena kupnja</span></p>
        </div>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- 11) PRESTANITE SE ZADOVOLJAVATI — zaključni poziv (Stop Settling For Boots…) -->
<section class="nlb-sec<?php echo $nlb_cls(); ?>">
  <div class="nlb-wrap nlb-cta">
    <p class="nlb-kicker nlb-c">Vaša stopala zaslužuju više</p>
    <h2 class="nlb-h2 nlb-c">Prestanite se zadovoljavati čizmama zbog kojih su vam <em>stopala iscrpljena</em></h2>
    <p class="nlb-lead nlb-c">Pridružite se tisućama zadovoljnih kupaca koji su prešli na udobnost cijeli dan, pouzdano prianjanje i trajnu potporu.</p>
    <ul class="nlb-cta__list">
      <li><span class="nlb-dot" aria-hidden="true">✓</span>Besplatna dostava za narudžbe iznad 70 €</li>
      <li><span class="nlb-dot" aria-hidden="true">✓</span>Pravo na povrat u roku od 30 dana</li>
      <li><span class="nlb-dot" aria-hidden="true">✓</span>Ograničeni akcijski popust</li>
    </ul>
    <p class="nlb-c"><a class="nlb-btn" href="#bundle-selector">Uzmite svoj par po akcijskoj cijeni</a></p>
  </div>
</section>

<style>
/* NORIKS stil (predloga why-thermoboots.php / why-hands.php): oznaka + naslov z ležečim poudarkom, slika ob
   besedilu, izmenjujoča ozadja in strani. Privzeta topla rjava paleta NORIKS (#a9683f). */
.nlb-sec { padding: 60px 0; font-family: 'Poppins', system-ui, -apple-system, 'Segoe UI', Roboto, Arial, sans-serif; color: #231d19; background: #fff; }
.nlb-sec * { box-sizing: border-box; }
.nlb-tint { background: #f7f2ec; }
.nlb-wrap { width: 100%; max-width: 1200px; margin: 0 auto; padding: 0 24px; }
.nlb-c { text-align: center; }
.nlb-sec h2, .nlb-sec h3 { font-family: inherit; text-transform: none; letter-spacing: 0; }
.nlb-kicker, .nlb-copy p.nlb-kicker { font-size: 12.5px; line-height: 1.4; font-weight: 700; letter-spacing: .14em; text-transform: uppercase; color: #a9683f; margin: 0 0 10px; }
.nlb-h2 { font-weight: 700; font-size: clamp(25px, 3.1vw, 36px); line-height: 1.2; margin: 0 0 14px; color: #231d19; }
.nlb-h2 em, .nlb-h3 em { font-style: italic; color: #a9683f; }
.nlb-h3 { font-weight: 700; font-size: clamp(22px, 2.6vw, 30px); line-height: 1.25; margin: 0 0 16px; color: #231d19; }
.nlb-lead { font-size: 16px; line-height: 1.65; color: #4f443d; max-width: 760px; margin: 0 auto 30px; }
.nlb-sec img, .nlb-sec video { display: block; width: 100%; height: auto; }

/* slika ob besedilu */
.nlb-row2 { display: grid; grid-template-columns: 1fr 1fr; gap: 56px; align-items: center; }
.nlb-row2--gap + .nlb-row2--gap { margin-top: 48px; }
.nlb-row2--rev .nlb-media { order: 2; }
.nlb-media img, .nlb-media video { object-fit: cover; border-radius: 10px; box-shadow: 0 2px 4px rgba(40,25,15,.05), 0 14px 40px rgba(40,25,15,.10); max-width: 560px; margin: 0 auto; }
.nlb-media--sq img, .nlb-media--sq video { aspect-ratio: 1 / 1; max-width: 540px; }
.nlb-media--wide img { aspect-ratio: 4 / 3; }
.nlb-copy p { font-size: 16px; line-height: 1.7; color: #4f443d; margin: 0 0 14px; }
.nlb-copy p strong { color: #231d19; font-weight: 600; }
.nlb-copy p.nlb-big { font-size: 19px; font-weight: 700; color: #231d19; line-height: 1.45; margin-top: 6px; }
.nlb-points { list-style: none; margin: 0 0 16px; padding: 0; }
.nlb-points li { font-size: 16px; line-height: 1.6; color: #4f443d; margin: 0 0 12px; display: flex; gap: 12px; align-items: flex-start; }
.nlb-points li strong { color: #231d19; font-weight: 600; }
.nlb-dot { flex: 0 0 22px; width: 22px; height: 22px; border-radius: 50%; background: #a9683f; color: #fff; font-size: 12px; font-weight: 800; line-height: 22px; text-align: center; margin-top: 2px; display: inline-block; }

/* 1) fotografije kupcev */
.nlb-photos { list-style: none; margin: 26px 0 0; padding: 0; display: flex; flex-wrap: wrap; justify-content: center; gap: 14px; }
.nlb-photos li { flex: 0 0 calc((100% - 3 * 14px) / 4); border-radius: 10px; overflow: hidden; background: #fff; border: 1px solid #ecdfd3;
  box-shadow: 0 2px 4px rgba(40,25,15,.04), 0 10px 26px rgba(40,25,15,.07); }
.nlb-photos li img { aspect-ratio: 3 / 4; object-fit: cover; }

/* 4) tri kartice */
.nlb-feat3 { list-style: none; margin: 28px 0 0; padding: 0; display: grid; grid-template-columns: repeat(3, minmax(0, 1fr)); gap: 20px; }
.nlb-feat3 li { background: #fff; border: 1px solid #ecdfd3; border-radius: 10px; overflow: hidden; text-align: center; padding: 0 0 20px;
  box-shadow: 0 2px 4px rgba(40,25,15,.04), 0 10px 26px rgba(40,25,15,.07); }
.nlb-sec:not(.nlb-tint) .nlb-feat3 li { background: #f7f2ec; }
.nlb-feat3__img img { aspect-ratio: 1 / 1; object-fit: cover; }
.nlb-feat3 h3 { font-size: 14px; font-weight: 700; letter-spacing: .08em; text-transform: uppercase; color: #a9683f; margin: 18px 16px 8px; line-height: 1.35; }
.nlb-feat3 p { font-size: 15px; line-height: 1.6; color: #4f443d; margin: 0 18px; }

/* 5) 2x2 fotografije izdelave */
.nlb-grid4 { display: grid; grid-template-columns: 1fr 1fr; gap: 12px; max-width: 540px; margin: 0 auto; }
.nlb-grid4 img { aspect-ratio: 1 / 1; object-fit: cover; max-width: none; }

/* 6) primerjalna tabela */
.nlb-cmp-scroll { overflow-x: auto; -webkit-overflow-scrolling: touch; margin-top: 26px; border-radius: 10px;
  box-shadow: 0 2px 4px rgba(40,25,15,.05), 0 14px 40px rgba(40,25,15,.10); }
.nlb-cmp { width: 100%; min-width: 720px; border-collapse: collapse; background: #fff; font-size: 14.5px; }
.nlb-cmp th, .nlb-cmp td { padding: 13px 14px; border-bottom: 1px solid #ecdfd3; text-align: center; vertical-align: middle; line-height: 1.4; }
.nlb-cmp thead th, .nlb-cmp thead td { background: #f7f2ec; color: #231d19; font-weight: 700; font-size: 14px; }
.nlb-cmp thead th.nlb-cmp__ours { background: #a9683f; color: #fff; font-size: 16px; letter-spacing: .06em; }
.nlb-cmp tbody th { text-align: left; font-weight: 600; color: #231d19; width: 26%; }
.nlb-cmp td.nlb-cmp__ours { background: #f6ece2; color: #231d19; font-weight: 600; }
.nlb-cmp td { color: #6b625a; }
.nlb-cmp td.nlb-no { color: #a2463a; }
.nlb-yes { display: inline-block; width: 20px; height: 20px; border-radius: 50%; background: #2f9e5f; color: #fff; font-size: 11px; font-weight: 800; line-height: 20px; margin-right: 4px; }
.nlb-cmp tbody tr:last-child th, .nlb-cmp tbody tr:last-child td { border-bottom: 0; }

/* 9) znacke */
.nlb-badges { list-style: none; margin: 4px 0 16px; padding: 0; display: grid; grid-template-columns: 1fr 1fr; gap: 10px 16px; }
.nlb-badges li { font-size: 15px; font-weight: 600; color: #231d19; display: flex; gap: 10px; align-items: flex-start; line-height: 1.45; }

/* recenzije */
.nlb-stars { color: #f2a516; letter-spacing: 1px; font-size: 15px; }
.nlb-stars__off { color: #e6dbd2; }
.nlb-sum { display: grid; grid-template-columns: 1fr 1fr; gap: 36px; align-items: center; max-width: 860px; margin: 6px auto 30px; }
.nlb-sum__score { display: flex; flex-direction: column; align-items: center; gap: 6px; text-align: center; }
.nlb-score__num { font-size: 34px; font-weight: 700; color: #231d19; line-height: 1.1; }
.nlb-sum__score .nlb-stars { font-size: 22px; }
.nlb-score__txt { font-size: 14px; color: #6b625a; }
.nlb-sum__rec { font-size: 14.5px; color: #4f443d; margin-top: 4px; }
.nlb-sum__rec strong { color: #2f9e5f; }
.nlb-bars { display: grid; gap: 9px; }
.nlb-bar { display: grid; grid-template-columns: 38px 1fr 40px; gap: 10px; align-items: center; font-size: 14px; color: #4f443d; }
.nlb-bar__track { height: 10px; border-radius: 999px; background: #eadccf; overflow: hidden; }
.nlb-bar__track span { display: block; height: 100%; border-radius: 999px; background: #a9683f; }
.nlb-bar__n { text-align: right; color: #6b625a; }
.nlb-reviews { display: grid; grid-template-columns: repeat(4, minmax(0, 1fr)); gap: 18px; align-items: start; }
.nlb-card { background: #fff; border: 1px solid #ecdfd3; border-radius: 10px; overflow: hidden; display: flex; flex-direction: column; }
.nlb-sec:not(.nlb-tint) .nlb-card { background: #fdfaf7; }
.nlb-card__img img { aspect-ratio: 1 / 1; object-fit: cover; border-radius: 0; box-shadow: none; }
.nlb-card__body { padding: 16px; }
.nlb-card__title { font-size: 15.5px; font-weight: 700; color: #231d19; margin: 8px 0 0; line-height: 1.35; }
.nlb-card__txt { font-size: 14.5px; line-height: 1.6; color: #3a302a; margin: 8px 0 10px; font-style: italic; }
.nlb-card__name { font-size: 13.5px; font-weight: 600; color: #231d19; margin: 0; }
.nlb-ok { color: #2f9e5f; font-weight: 600; font-size: 12px; margin-left: 4px; font-style: normal; }
.nlb-tst { display: grid; grid-template-columns: repeat(4, minmax(0, 1fr)); gap: 18px; align-items: start; }
.nlb-tst .nlb-card__img img { aspect-ratio: 4 / 5; }

/* 11) zakljucni poziv */
.nlb-cta { max-width: 860px; }
.nlb-cta__list { list-style: none; margin: 0 auto 26px; padding: 0; display: flex; justify-content: center; flex-wrap: wrap; gap: 12px 26px; }
.nlb-cta__list li { font-size: 15.5px; font-weight: 600; color: #231d19; display: flex; gap: 10px; align-items: center; }
.nlb-btn { display: inline-block; background: #a9683f; color: #fff !important; font-weight: 700; font-size: 16px; padding: 15px 34px; border-radius: 10px;
  text-decoration: none !important; box-shadow: 0 8px 20px rgba(169,104,63,.28); }
.nlb-btn:hover { background: #8f5532; }

@media (max-width: 989px) {
  .nlb-row2 { gap: 32px; }
  .nlb-reviews, .nlb-tst { grid-template-columns: repeat(2, minmax(0, 1fr)); }
  .nlb-photos li { flex-basis: calc((100% - 2 * 14px) / 3); }
}
@media (max-width: 749px) {
  .nlb-sec { padding: 42px 0; }
  .nlb-wrap { padding: 0 16px; }
  .nlb-row2 { grid-template-columns: 1fr; gap: 24px; }
  .nlb-row2--rev .nlb-media { order: 0; }
  .nlb-row2--gap + .nlb-row2--gap { margin-top: 36px; }
  .nlb-photos { gap: 10px; }
  .nlb-photos li { flex-basis: calc((100% - 10px) / 2); }
  .nlb-feat3 { grid-template-columns: 1fr; gap: 14px; }
  .nlb-badges { grid-template-columns: 1fr; }
  .nlb-sum { grid-template-columns: 1fr; gap: 20px; }
  .nlb-reviews { gap: 12px; }
  .nlb-tst { grid-template-columns: 1fr; gap: 14px; }
  .nlb-card__body { padding: 12px; }
}

/* galerija izdelka: sličice največ v 2 vrstah (5 na vrsto), ostale slike so dosegljive z drsenjem glavne slike */
.product_cat-orto-leatherboots .flex-control-thumbs li:nth-child(n+11) { display: none !important; }

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
.woocommerce-product-details__short-description .nlb-tick {
  position: absolute !important; left: 0 !important; top: 1px !important;
  width: 21px; height: 21px; border-radius: 50%;
  background: #2f9e5f !important; color: #fff !important;
  font-size: 12px !important; font-weight: 800 !important; line-height: 21px !important;
  text-align: center !important; display: inline-block !important; }
.woocommerce-product-details__short-description p:first-of-type { font-size: 16px; line-height: 1.55; }
</style>
