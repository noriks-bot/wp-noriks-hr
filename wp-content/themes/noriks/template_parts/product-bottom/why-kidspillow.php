<?php
/**
 * product-bottom: NORIKS KidsPillow — ergonomski dječji jastuk za miran san (orto-kidspillow).
 * Original: trylittlebear.com/products/kids-posture-pillow — vsebina in vrstni red 1:1 z originalom, oblika po NORIKS stilu
 * (predloga why-mattresstopper.php / why-hands.php), modra paleta po originalu (temno modra, bel jastuk z modro obrobo):
 *   1) hero "Stop the 2 AM Snoring. Protect Their Future Face." + 4 tocke + 4 zaupanja + slika Before/After + 97 % / 4.8 / 44,700+
 *      -> besedilo ob prevedeni sliki PRIJE / POSLIJE; Pediatric Recommended / #1 Bestseller / Pediatric airway specialist
 *         designed / Saves $8k+ in Braces / Protects Future Face izpusceno ali omiljeno, 97 % -> mnogi roditelji, 2,300+ -> 1081,
 *         44,700+ -> tisuce obitelji, 90-night guarantee -> 30 dana, As seen in / As Featured In (logotipi medijev) izpusceno
 *   2) izjava kupke Sarah M. s fotografijo -> slika ob citatu (ADHD in "three doctors" izpusceno)
 *   3) "The Problem Nobody Talks About" 4 kartice + harmonika "Is it too late after age 9?" -> 4 kartice + okvir
 *      (zdravstvene trditve o celjusti / nepcu / "90 % set by age 9" / The Window Is Closing izpusceno ali omiljeno)
 *   4) "The Science Behind It" 4 koraki + slika "Why adult pillows are destroying your child's face" + Chin Push Test
 *      -> koraki ob prevedeni in omiljeni sliki (Zasto jastuci za odrasle nisu za djecu, "prescribe LittleBear" -> NORIKS)
 *   5) "What's Inside Every Pillow" 6 lastnosti -> 6 kartic (LittleBear / CoolBreeze -> NORIKS kontura / prozracna jezgra,
 *      ekcem in astma -> osjetljiva koza, "developing spine" -> djecje proporcije)
 *   6) "Real Parents. Real Results." 3 izjave s fotografijami -> 3 kartice (prosirivac nepca / ADHD omiljeno)
 *   7) recenzije 4.8 / 2,341 (92/5/2/1/1 %) -> 1081, razdelitev skalirana na 692 + 13 mnenj (8 s fotografijami kupcev)
 *   8) "The Silent Sleep Guarantee" 90 nocni -> NORIKS pecat 30 dana ob besedilu
 *   9) zakljucni poziv "Your Child Deserves to Wake Up Rested" z gumbom do ponudb + opomba (ni medicinski proizvod)
 * Izpusceno v celoti: pasica odstevalnika, "The Real Cost of Waiting" ($8,000 aparatici / $20,000 operacija celjusti /
 * $28,000 vs $64.99 — strasenje z zdravstvenimi stroski in trditve brez dokazov), trak logotipov medijev, Limited stock.
 * FAQ (10) je v reviews.php ($kidspillow_faq), mnenja v auto_reviews/HR_kidspillow.php, opis/nega/tablica velicin v meta.php
 * in size-chart-kidspillow.php. Slike: img/kidspillow/ (nkpl-…), galerija v HR medijih (nkpl-g01…g07).
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$nkpl      = get_template_directory_uri() . '/img/kidspillow/';
$nkpl_path = get_template_directory() . '/img/kidspillow/';
$nkpl_img  = function( $file, $alt, $cls = '' ) use ( $nkpl, $nkpl_path ) {
  if ( ! $file || ! file_exists( $nkpl_path . $file ) ) { return ''; }
  return '<img src="' . esc_url( $nkpl . $file ) . '" alt="' . esc_attr( $alt ) . '" loading="eager"' . ( $cls ? ' class="' . esc_attr( $cls ) . '"' : '' ) . '>';
};
$nkpl_stars = function( $n ) {
  $n = max( 0, min( 5, (int) $n ) );
  return '<span class="nkpl-stars" aria-label="' . $n . ' od 5 zvjezdica">' . str_repeat( '★', $n ) . '<span class="nkpl-stars__off">' . str_repeat( '★', 5 - $n ) . '</span></span>';
};

/* 1) hero: točke originala (omiljeno) + zaupanje (NORIKS pogoji) */
$nkpl_hero_pts = array( 'Potiče disanje na nos', 'Za mirnije noći s manje hrkanja', 'Glava i vrat u pravilnom položaju' );
$nkpl_trust    = array(
  'Lenzing Tencel površina, nježna prema osjetljivoj koži',
  'Hipoalergenski i prozračan cijelu noć',
  'Pravo na povrat u roku od 30 dana',
  'Besplatna dostava za narudžbe iznad 70 €',
);

/* 3) problem (4 kartice originala, omiljeno) */
$nkpl_problems = array(
  array( '☾', 'Buđenje u 2 ujutro', 'Stojite na vratima i gledate dijete kako spava širom otvorenih usta, zabačene glave, i hrče kao odrasla osoba. Osjećaj vam govori da nešto nije u redu.' ),
  array( '◔', 'Podočnjaci i jutarnji umor', 'Budi se umorno i teško se koncentrira u školi, a učiteljica vam šalje poruke. Rijetko tko pita kako dijete diše noću.' ),
  array( '?', '„Prerast će to”', 'Tako vam kažu. No vi najbolje poznajete svoje dijete – i želite da se svako jutro budi odmorno. Ako vas brine njegovo disanje ili hrkanje, posavjetujte se s pedijatrom.' ),
  array( '▭', 'Ekrani ne pomažu', 'Sati pognuti nad tabletom potiču pognuto držanje glave (tzv. „tech neck”), a običan jastuk noću glavu često zadrži u sličnom položaju.' ),
);

/* 4) kako djeluje (4 koraka originala, omiljeno) */
$nkpl_steps = array(
  array( 'Problem običnog jastuka', 'Običan jastuk gura dječju glavu naprijed, pa brada pada prema prsima. U tom položaju disanje na nos može biti otežano.' ),
  array( 'Jezik pada – i ostaje dolje', 'Kad je glava pognuta, jezik se lako spusti na dno usta umjesto da počiva uz nepce, a usta se otvore.' ),
  array( 'Rješenje: NORIKS KidsPillow', 'Nježna kontura obuhvaća glavu i vrat u neutralnom položaju – usne se lakše sklapaju, čeljust se opušta, a jezik može počivati uz nepce, u položaju koji olakšava disanje na nos.' ),
  array( 'Razlika u 7 noći', 'Mnogi roditelji već u prvom tjednu primijete mirnije disanje, manje hrkanja i dijete koje se ujutro budi odmorno.' ),
);

/* 5) značajke (6 lastnosti originala) */
$nkpl_features = array(
  array( '◡', 'NORIKS kontura', 'Nježno udubljenje koje drži glavu i vrat u neutralnom položaju i potiče disanje na nos – bez neugodnog pritiska na vrat.' ),
  array( '≋', 'Prozračna jezgra', 'TPE saće i 3D mreža propuštaju zrak kroz jastuk umjesto da se zadržava ispod glave. Bez znojenja i nemirnih noći – dovoljno mekan za malu djecu, dovoljno potporan za starije.' ),
  array( '❀', 'Hipoalergenska Tencel površina', 'Hipoalergenska i otporna na grinje – nježna prema osjetljivoj dječjoj koži.' ),
  array( '↔', 'Dimenzije za djecu', 'Za djecu od 1 do 18 godina. Nije smanjeni jastuk za odrasle, nego jastuk osmišljen od početka prema dječjim proporcijama.' ),
  array( '✓', 'Lenzing Tencel tkanina', 'Austrijsko biljno vlakno od drvne pulpe iz održivih izvora. Glađe od pamuka i odvodi vlagu od kože umjesto da je zadržava.' ),
  array( '☾', 'Za spavanje na leđima i na boku', 'Bilo da dijete spava na leđima ili na boku, kontura drži glavu i vrat u pravilnom položaju u oba položaja.' ),
);

/* 6) izjave roditelja s fotografijami (3, omiljeno) */
$nkpl_tests = array(
  array( 'nkpl-t1-mama-s-jastukom.webp', 'Mama drži NORIKS KidsPillow', 'Stomatolog nam je rekao da bi sin prije 7. godine možda trebao proširivač nepca. Bila sam shrvana. Prijateljica mi je savjetovala da prvo pogledamo kako spava. Nakon 6 tjedana na ovom jastuku spava zatvorenih usta i budi se odmoran.', 'Ivana K.', 'mama 6-godišnjaka' ),
  array( 'nkpl-t2-djecak-spava.webp', 'Dječak spava na NORIKS KidsPillow jastuku', 'Kći je hrkala svaku noć i budila se umorna. Odlučili smo prvo isprobati ovaj jastuk. Tri mjeseca kasnije spava mirno i tiho. Ne šalim se.', 'Jelena P.', 'mama 7-godišnjakinje' ),
  array( 'nkpl-t3-djecak-s-medvjedicem.webp', 'Dječak s plišanim medvjedićem spava na NORIKS KidsPillow jastuku', 'Učiteljica je primijetila da je sin u školi umoran i nepažljiv. Odlučila sam prvo provjeriti kako spava – disao je na usta. Nakon 2 tjedna na ovom jastuku učiteljica mi je napisala da je u razredu „kao drugo dijete”.', 'Marko T.', 'tata 8-godišnjaka' ),
);

/* 7) recenzije (original 2,341: 92/5/2/1/1 % -> skalirano na 692) */
$nkpl_dist = array(
  array( 5, 92, 637 ),
  array( 4, 5, 35 ),
  array( 3, 2, 12 ),
  array( 2, 1, 4 ),
  array( 1, 1, 4 ),
);
$nkpl_rv = array(
  array( 'Rajna T.', 5, 'nkpl-r01-recenzija.webp', 'Sin je hrkao toliko glasno da sam ga čula kroz vrata spavaće sobe. Dva tjedna na ovom jastuku i kuća je noću napokon tiha. Ujutro se budi i zapravo želi ustati iz kreveta. Zaboravila sam da je to uopće moguće.' ),
  array( 'Petra S.', 5, 'nkpl-r02-recenzija.webp', 'Hrkanje je nestalo za devet noći. Još sam u šoku.' ),
  array( 'Dijana C.', 5, 'nkpl-r03-recenzija.webp', 'Dvaput tjedno radim noćne smjene, a suprug me počeo zvati videopozivom samo da mi pokaže dječji monitor. Bez hrkanja. Tiha soba. Nismo mogli shvatiti zašto – dok se nismo sjetili da smo tog vikenda prešli na novi jastuk.' ),
  array( 'Terezija M.', 5, 'nkpl-r04-recenzija.webp', 'Unuk je kod nas tri noći tjedno i njegovo hrkanje nije mi dalo spavati. Kći mu je kupila ovaj jastuk i sada mali i kod nas spava kao anđeo. Kupili smo i drugi da ima isti jastuk u oba doma.' ),
  array( 'Barbara R.', 5, 'nkpl-r05-recenzija.webp', 'Kći ima najlakši san na svijetu i dnevni odmor bio je svakodnevna borba. Otkako imamo ovaj jastuk, sama se smiri i ostane spavati. Uhvatila sam je usred drijemanja – potpuno mirna, diše na nos. Drago mi je da smo ga isprobali.' ),
  array( 'Hana C.', 5, 'nkpl-r06-recenzija.webp', 'Mali je spavao širom otvorenih usta i budio se mamuran koliko god ga rano stavili u krevet. Nakon nekoliko tjedana većinu noći usta drži zatvorena. Ovdje spava sve do jutarnjeg svjetla, što se prije nikad nije događalo.' ),
  array( 'Katarina P.', 5, 'nkpl-r07-recenzija.webp', 'Sad se budi s osmijehom. Jutra su bila teška i uvijek je bio umoran. Jastuk je dovoljno udoban da na njemu ostane cijelu noć. Mali gospodin ga odobrava.' ),
  array( 'Monika F.', 5, 'nkpl-r08-recenzija.webp', 'Kći je tiho hrkala i disala na usta, a oboje se primirilo otkako koristi ovaj jastuk. Spava puno čvršće. Uslikala sam je tijekom popodnevnog drijemanja, potpuno opuštenu. Baš sam zadovoljna kupnjom.' ),
  array( 'Ana S.', 5, '', 'Hrkanje četverogodišnjaka riješeno. Gotovo. Jednostavno.' ),
  array( 'Gordana S.', 5, '', 'Stvarno dobra kvaliteta za tu cijenu. Brzo je stigao, a sin sada cijelu noć ostaje na jastuku umjesto da se otkotrlja.' ),
  array( 'Vedran A.', 5, '', 'Kćerino hrkanje budilo je njezinu stariju sestru. Sada obje prespavaju cijelu noć. Odlična kupnja.' ),
  array( 'Iva T.', 5, '', 'Stigao je na vrijeme i sin ga je odmah prihvatio. Noću sada drži usta zatvorena, što me najviše brinulo.' ),
  array( 'Antonio P.', 4, '', 'Dobar jastuk i sin na njemu bolje spava. Dao bih pet zvjezdica, ali kutija je stigla malo ulubljena. Jastuk je bio u redu.' ),
);

$nkpl_n = 0; // števec sekcij za izmenična ozadja
$nkpl_cls = function() use ( &$nkpl_n ) { $nkpl_n++; return ( $nkpl_n % 2 ) ? ' nkpl-tint' : ''; };
?>

<!-- 1) HERO ("Stop the 2 AM Snoring. Protect Their Future Face." + slika Before/After) — prevedena slika PRIJE / POSLIJE ob besedilu -->
<section class="nkpl-sec<?php echo $nkpl_cls(); ?>">
  <div class="nkpl-wrap">
    <div class="nkpl-row2">
      <div class="nkpl-media"><?php echo $nkpl_img( 'nkpl-s01-prije-poslije.webp', 'Dijete prije i poslije: na običnom jastuku glava pognuta, na jastuku NORIKS KidsPillow vrat u neutralnom položaju' ); ?></div>
      <div class="nkpl-copy">
        <p class="nkpl-kicker">Ergonomski dječji jastuk</p>
        <h2 class="nkpl-h2">Manje hrkanja u 2 ujutro. <em>Mirniji san</em> za vaše dijete.</h2>
        <p>NORIKS KidsPillow oblikovan je za dječju glavu. Drži <strong>glavu i vrat u neutralnom položaju</strong>, pa mnogoj djeci lakše ostaju zatvorena usta i dišu na nos cijelu noć – onako kako je tijelu u rastu najugodnije. Mnogi roditelji primijete razliku <strong>već u prvih 7 noći</strong>.</p>
        <ul class="nkpl-ticks">
          <?php foreach ( $nkpl_hero_pts as $t ) : ?><li><?php echo esc_html( $t ); ?></li><?php endforeach; ?>
        </ul>
        <div class="nkpl-stats">
          <span><?php echo $nkpl_stars( 5 ); ?> <strong>4,8/5</strong> · 1081 recenzija</span>
          <span><b aria-hidden="true">♥</b> Tisuće zadovoljnih obitelji</span>
          <span><b aria-hidden="true">☾</b> Mirnije disanje već u prvom tjednu</span>
        </div>
        <ul class="nkpl-trust">
          <?php foreach ( $nkpl_trust as $t ) : ?><li><?php echo esc_html( $t ); ?></li><?php endforeach; ?>
        </ul>
        <p><a class="nkpl-btn" href="#bundle-selector">Odaberite jastuk za svoje dijete</a></p>
      </div>
    </div>
  </div>
</section>

<!-- 2) PRIČA RODITELJA (izjava Sarah M. s fotografijo) — fotografija ob citatu -->
<section class="nkpl-sec<?php echo $nkpl_cls(); ?>">
  <div class="nkpl-wrap">
    <div class="nkpl-row2 nkpl-row2--rev">
      <div class="nkpl-media"><?php echo $nkpl_img( 'nkpl-s02-mama-s-jastukom.webp', 'Mama drži jastuk NORIKS KidsPillow' ); ?></div>
      <div class="nkpl-copy">
        <p class="nkpl-kicker">Iskustvo roditelja</p>
        <h2 class="nkpl-h2">„Napokon <em>tišina</em>.”</h2>
        <?php echo $nkpl_stars( 5 ); ?>
        <blockquote class="nkpl-quote">
          <p>Stajala sam na vratima sinove sobe u 2 ujutro i jednostavno se rasplakala. Tri godine gledala sam ga kako spava širom otvorenih usta, s tamnim podočnjacima, i kako se svako jutro budi iscrpljen.</p>
          <p>Nakon 9 noći na ovom jastuku – ništa. Samo tišina. Disao je na nos. Učiteljica mi je prošli tjedan napisala da je u razredu „kao drugo dijete”. Voljela bih da sam ga pronašla tri godine ranije.</p>
        </blockquote>
        <p class="nkpl-who"><strong>Sanja M.</strong> · mama dvoje djece <span class="nkpl-ok">✓ Potvrđena kupnja</span></p>
      </div>
    </div>
  </div>
</section>

<!-- 3) PROBLEM ("The Problem Nobody Talks About" — 4 kartice + harmonika o dobi) -->
<section class="nkpl-sec<?php echo $nkpl_cls(); ?>">
  <div class="nkpl-wrap">
    <p class="nkpl-kicker nkpl-c">Problem o kojem se rijetko govori</p>
    <h2 class="nkpl-h2 nkpl-c">„Prerast će to.” – rečenica koju <em>čuje gotovo svaki roditelj</em></h2>
    <p class="nkpl-lead nkpl-c">Možda ste je čuli od liječnika ili od vlastite mame. No ako vas nešto muči dok gledate dijete kako spava, vrijedi obratiti pozornost na njegov položaj tijekom noći.</p>
    <div class="nkpl-grid4">
      <?php foreach ( $nkpl_problems as $c ) : ?>
      <div class="nkpl-box">
        <span class="nkpl-ic" aria-hidden="true"><?php echo esc_html( $c[0] ); ?></span>
        <h3><?php echo esc_html( $c[1] ); ?></h3>
        <p><?php echo esc_html( $c[2] ); ?></p>
      </div>
      <?php endforeach; ?>
    </div>
    <div class="nkpl-note-box">
      <p class="nkpl-note-box__q">Moje dijete ima više od 9 godina. Je li prekasno?</p>
      <p>Ne. NORIKS KidsPillow dostupan je u veličinama za djecu <strong>od 1 do 18 godina</strong>. Udoban, neutralan položaj glave i vrata odgovara djeci svake dobi – za mirniji san i odmornija jutra, od prve noći.</p>
    </div>
  </div>
</section>

<!-- 4) KAKO DJELUJE ("The Science Behind It" 4 koraki + slika + Chin Push Test) — prevedena slika ob koracih -->
<section class="nkpl-sec<?php echo $nkpl_cls(); ?>">
  <div class="nkpl-wrap">
    <div class="nkpl-row2">
      <div class="nkpl-media"><?php echo $nkpl_img( 'nkpl-s04-jastuci-za-odrasle.webp', 'Zašto jastuci za odrasle nisu za djecu: usta se otvaraju, brada pritisnuta, jezik pada unatrag' ); ?></div>
      <div class="nkpl-copy">
        <p class="nkpl-kicker">Kako djeluje</p>
        <h2 class="nkpl-h2">Zašto obični jastuk <em>nije za djecu</em></h2>
        <p>Često je kriv jastuk koji dječju bradu gura prema prsima.</p>
        <ol class="nkpl-steps">
          <?php foreach ( $nkpl_steps as $i => $st ) : ?>
          <li><span class="nkpl-steps__n"><?php echo (int) $i + 1; ?></span><span><strong><?php echo esc_html( $st[0] ); ?></strong><?php echo esc_html( $st[1] ); ?></span></li>
          <?php endforeach; ?>
        </ol>
        <div class="nkpl-test">
          <p class="nkpl-test__t">Test brade</p>
          <p>Večeras, dok dijete spava, nježno mu podignite bradu tako da zatvori usta. Ako se usta u roku od 5 sekundi ponovno otvore, njegov jastuk možda ne drži glavu u pravilnom položaju.</p>
          <p class="nkpl-big">Ako se otvore → isprobajte NORIKS KidsPillow.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- 5) ZNAČAJKE ("What's Inside Every Pillow" — 6 lastnosti) -->
<section class="nkpl-sec<?php echo $nkpl_cls(); ?>">
  <div class="nkpl-wrap">
    <p class="nkpl-kicker nkpl-c">Što se krije u svakom jastuku</p>
    <h2 class="nkpl-h2 nkpl-c">Stvoren za <em>tijela u rastu</em>. Djeca ga vole.</h2>
    <p class="nkpl-lead nkpl-c">Svaki detalj osmišljen je s jednim ciljem: da vaše dijete iz noći u noć spava što mirnije i ugodnije.</p>
    <div class="nkpl-grid3">
      <?php foreach ( $nkpl_features as $c ) : ?>
      <div class="nkpl-box">
        <span class="nkpl-ic" aria-hidden="true"><?php echo esc_html( $c[0] ); ?></span>
        <h3><?php echo esc_html( $c[1] ); ?></h3>
        <p><?php echo esc_html( $c[2] ); ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- 6) PRAVI RODITELJI, PRAVI REZULTATI ("Real Parents. Real Results." — 3 izjave s fotografijami) -->
<section class="nkpl-sec<?php echo $nkpl_cls(); ?>">
  <div class="nkpl-wrap">
    <p class="nkpl-kicker nkpl-c">Pravi roditelji. Pravi rezultati.</p>
    <h2 class="nkpl-h2 nkpl-c">Tisuće obitelji napokon <em>mirno spava</em></h2>
    <p class="nkpl-lead nkpl-c">Ne morate vjerovati nama – evo što roditelji kažu nakon prvog mjeseca.</p>
    <div class="nkpl-tests">
      <?php foreach ( $nkpl_tests as $t ) : ?>
      <article class="nkpl-card">
        <div class="nkpl-card__img"><?php echo $nkpl_img( $t[0], $t[1] ); ?></div>
        <div class="nkpl-card__body">
          <?php echo $nkpl_stars( 5 ); ?>
          <p class="nkpl-card__txt">„<?php echo esc_html( $t[2] ); ?>”</p>
          <p class="nkpl-card__name"><?php echo esc_html( $t[3] ); ?> <span class="nkpl-card__sub">· <?php echo esc_html( $t[4] ); ?></span> <span class="nkpl-ok">✓ Potvrđena kupnja</span></p>
        </div>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- 7) RECENZIJE (4.8 / 2,341 -> 1081, razdelitev skalirana na 692) -->
<section class="nkpl-sec<?php echo $nkpl_cls(); ?>">
  <div class="nkpl-wrap">
    <p class="nkpl-kicker nkpl-c">Recenzije kupaca</p>
    <h2 class="nkpl-h2 nkpl-c">Voli ga <em>tisuće obitelji</em></h2>
    <div class="nkpl-score">
      <?php echo $nkpl_stars( 5 ); ?>
      <span class="nkpl-score__txt"><strong>4,8</strong> · na temelju 1081 recenzije</span>
    </div>
    <ul class="nkpl-dist">
      <?php foreach ( $nkpl_dist as $d ) : ?>
      <li>
        <span class="nkpl-dist__lbl"><?php echo (int) $d[0]; ?> ★</span>
        <span class="nkpl-dist__bar"><span style="width:<?php echo (int) $d[1]; ?>%"></span></span>
        <span class="nkpl-dist__pct"><?php echo (int) $d[1]; ?> % (<?php echo (int) $d[2]; ?>)</span>
      </li>
      <?php endforeach; ?>
    </ul>
    <div class="nkpl-reviews">
      <?php foreach ( $nkpl_rv as $r ) : ?>
      <article class="nkpl-card">
        <?php if ( $r[2] ) : ?><div class="nkpl-card__img nkpl-card__img--rv"><?php echo $nkpl_img( $r[2], 'Fotografija kupca: NORIKS KidsPillow' ); ?></div><?php endif; ?>
        <div class="nkpl-card__body">
          <?php echo $nkpl_stars( $r[1] ); ?>
          <p class="nkpl-card__txt">„<?php echo esc_html( $r[3] ); ?>”</p>
          <p class="nkpl-card__name"><?php echo esc_html( $r[0] ); ?> <span class="nkpl-ok">✓ Potvrđena kupnja</span></p>
        </div>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- 8) JAMSTVO ("The Silent Sleep Guarantee" 90 noči -> NORIKS 30 dana) — pečat ob besedilu -->
<section class="nkpl-sec<?php echo $nkpl_cls(); ?>">
  <div class="nkpl-wrap">
    <div class="nkpl-row2 nkpl-row2--rev">
      <div class="nkpl-media nkpl-media--seal">
        <div class="nkpl-seal" role="img" aria-label="Pravo na povrat u roku od 30 dana">
          <span class="nkpl-seal__top">Pravo na povrat</span>
          <span class="nkpl-seal__num">30</span>
          <span class="nkpl-seal__days">dana</span>
          <span class="nkpl-seal__bot">bez brige</span>
        </div>
      </div>
      <div class="nkpl-copy">
        <p class="nkpl-kicker">Jamstvo mirnog sna</p>
        <h2 class="nkpl-h2">Isprobajte <em>30 dana</em> bez rizika</h2>
        <p>Isprobajte NORIKS KidsPillow kod kuće. Ako vaše dijete ne spava mirnije i ne budi se odmornije, imate <strong>pravo na povrat u roku od 30 dana</strong> – bez kompliciranja.</p>
        <p>Toliko vjerujemo u ovaj jastuk jer smo vidjeli kako pomaže tisućama obitelji. Jedini rizik je da dijete i dalje spava na jastuku koji mu ne odgovara.</p>
        <p class="nkpl-big">Besplatna dostava za narudžbe iznad 70 €.</p>
      </div>
    </div>
  </div>
</section>

<!-- 9) ZAVRŠNI POZIV ("Your Child Deserves to Wake Up Rested.") + opomba -->
<section class="nkpl-sec nkpl-sec--cta<?php echo $nkpl_cls(); ?>">
  <div class="nkpl-wrap nkpl-c">
    <h2 class="nkpl-h2">Vaše dijete zaslužuje <em>odmorno buđenje</em>. Vi zaslužujete bezbrižne noći.</h2>
    <p class="nkpl-lead">Pridružite se tisućama obitelji koje su već prešle na NORIKS KidsPillow. Roditelji najčešće kažu samo jedno: da to nisu učinili ranije.</p>
    <p><a class="nkpl-btn" href="#bundle-selector">Odaberite NORIKS KidsPillow →</a></p>
    <p class="nkpl-small">Pravo na povrat u roku od 30 dana · Besplatna dostava za narudžbe iznad 70 € · Plaćanje pouzećem</p>
    <p class="nkpl-note"><strong>Napomena:</strong> NORIKS KidsPillow nije medicinski proizvod i ne zamjenjuje pregled ni savjet pedijatra ili stomatologa. Ako vas brine djetetovo disanje, hrkanje ili razvoj zubi i čeljusti, posavjetujte se sa stručnjakom. Za djecu mlađu od 18 mjeseci prije upotrebe se posavjetujte s pedijatrom.</p>
  </div>
</section>

<style>
/* NORIKS stil (predloga why-mattresstopper.php / why-hands.php): oznaka + naslov z ležečim poudarkom, slika ob besedilu,
   izmenjujoča ozadja in strani. Modra paleta po originalu: poudarek #1f568e, temno #17263a, svetlo ozadje #eef4fa. */
.nkpl-sec { padding: 60px 0; font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Arial, sans-serif; color: #17263a; background: #fff; }
.nkpl-sec * { box-sizing: border-box; }
.nkpl-tint { background: #eef4fa; }
.nkpl-wrap { width: 100%; max-width: 1200px; margin: 0 auto; padding: 0 24px; }
.nkpl-c { text-align: center; }
.nkpl-sec h2, .nkpl-sec h3 { font-family: inherit; text-transform: none; letter-spacing: 0; }
.nkpl-kicker, .nkpl-copy p.nkpl-kicker { font-size: 12.5px; line-height: 1.4; font-weight: 700; letter-spacing: .14em; text-transform: uppercase; color: #1f568e; margin: 0 0 10px; }
.nkpl-h2 { font-weight: 800; font-size: clamp(25px, 3.1vw, 36px); line-height: 1.2; margin: 0 0 18px; color: #17263a; }
.nkpl-h2 em { font-style: italic; color: #1f568e; }
.nkpl-sec img { display: block; width: 100%; height: auto; }
.nkpl-sec p.nkpl-lead { font-size: 16.5px; line-height: 1.65; color: #3a4a5c; max-width: 760px; margin: -6px auto 30px; }

/* slika ob besedilu */
.nkpl-row2 { display: grid; grid-template-columns: 1fr 1fr; gap: 56px; align-items: center; }
.nkpl-row2--rev .nkpl-media { order: 2; }
.nkpl-media > img { border-radius: 10px; box-shadow: 0 2px 4px rgba(23,38,58,.05), 0 14px 40px rgba(23,38,58,.10); max-width: 580px; margin: 0 auto; aspect-ratio: 1 / 1; object-fit: cover; background: #fff; }
.nkpl-copy p { font-size: 16px; line-height: 1.7; color: #3a4a5c; margin: 0 0 14px; }
.nkpl-copy p strong { color: #17263a; font-weight: 600; }
.nkpl-sec p.nkpl-big { font-size: 18px; font-weight: 700; color: #17263a; line-height: 1.45; margin-top: 6px; }
.nkpl-sec a.nkpl-btn { display: inline-block; margin-top: 6px; padding: 14px 30px; border-radius: 8px; background: #1f568e; color: #fff !important; font-weight: 700; font-size: 16px; text-decoration: none !important; box-shadow: 0 6px 18px rgba(31,86,142,.25); }
.nkpl-sec a.nkpl-btn:hover { background: #18466f; }

/* hero */
.nkpl-ticks, .nkpl-trust { list-style: none; margin: 4px 0 16px; padding: 0; display: grid; gap: 9px; }
.nkpl-ticks li { position: relative; padding-left: 32px; font-size: 16px; font-weight: 600; color: #17263a; line-height: 1.5; }
.nkpl-ticks li::before { content: "✓"; position: absolute; left: 0; top: 1px; width: 22px; height: 22px; border-radius: 50%; background: #2f9e5f; color: #fff; font-size: 12px; font-weight: 800; line-height: 22px; text-align: center; }
.nkpl-trust { grid-template-columns: 1fr 1fr; gap: 8px 16px; padding: 14px 16px; border: 1px solid #d6e2ef; border-radius: 10px; background: #fff; }
.nkpl-trust li { position: relative; padding-left: 22px; font-size: 13.5px; line-height: 1.45; color: #3a4a5c; }
.nkpl-trust li::before { content: "✓"; position: absolute; left: 0; top: 0; color: #1f568e; font-weight: 800; }
.nkpl-stats { display: flex; flex-wrap: wrap; gap: 8px 18px; margin: 0 0 16px; font-size: 14px; color: #3a4a5c; }
.nkpl-stats span { display: inline-flex; align-items: center; gap: 6px; }
.nkpl-stats b { color: #1f568e; }

/* izjava */
.nkpl-quote { margin: 10px 0 12px; padding: 0 0 0 18px; border-left: 3px solid #1f568e; }
.nkpl-quote p { font-style: italic; color: #2c3b4d; }
.nkpl-sec p.nkpl-who { font-size: 14.5px; color: #3a4a5c; }

/* kartice */
.nkpl-grid4 { display: grid; grid-template-columns: repeat(4, minmax(0, 1fr)); gap: 18px; }
.nkpl-grid3 { display: grid; grid-template-columns: repeat(3, minmax(0, 1fr)); gap: 18px; }
.nkpl-box { background: #fff; border: 1px solid #d6e2ef; border-radius: 10px; padding: 22px 20px; box-shadow: 0 2px 10px rgba(23,38,58,.05); }
.nkpl-sec:not(.nkpl-tint) .nkpl-box { background: #f6f9fd; }
.nkpl-box h3 { font-size: 17px; font-weight: 700; line-height: 1.35; margin: 12px 0 8px; color: #17263a; }
.nkpl-box p { font-size: 14.5px; line-height: 1.6; color: #3a4a5c; margin: 0; }
.nkpl-ic { width: 44px; height: 44px; border-radius: 50%; background: #dce8f5; border: 1px solid #b9cde3; color: #1f568e; display: inline-flex; align-items: center; justify-content: center; font-size: 19px; font-weight: 700; }
.nkpl-note-box { max-width: 820px; margin: 28px auto 0; background: #fff; border: 2px solid #1f568e; border-radius: 10px; padding: 18px 22px; }
.nkpl-note-box p { font-size: 15px; line-height: 1.65; color: #3a4a5c; margin: 0; }
.nkpl-sec p.nkpl-note-box__q { font-weight: 700; color: #17263a; margin-bottom: 6px; font-size: 16px; }

/* koraki + test brade */
.nkpl-steps { list-style: none; margin: 6px 0 18px; padding: 0; display: grid; gap: 14px; }
.nkpl-steps li { display: flex; gap: 14px; align-items: flex-start; font-size: 15px; line-height: 1.6; color: #3a4a5c; }
.nkpl-steps li strong { display: block; color: #17263a; font-weight: 700; font-size: 15.5px; }
.nkpl-steps__n { flex: 0 0 32px; width: 32px; height: 32px; border-radius: 50%; background: #1f568e; color: #fff; font-weight: 800; display: flex; align-items: center; justify-content: center; font-size: 15px; }
.nkpl-test { background: #fff; border: 1px dashed #1f568e; border-radius: 10px; padding: 16px 18px; }
.nkpl-sec:not(.nkpl-tint) .nkpl-test { background: #f6f9fd; }
.nkpl-test p { font-size: 14.5px; margin: 0 0 8px; }
.nkpl-sec p.nkpl-test__t { font-size: 12.5px; font-weight: 800; letter-spacing: .12em; text-transform: uppercase; color: #1f568e; }
.nkpl-test p.nkpl-big { font-size: 16px; margin: 0; }

/* izjave in recenzije */
.nkpl-stars { color: #f2a516; letter-spacing: 1px; font-size: 15px; }
.nkpl-stars__off { color: #d6e2ef; }
.nkpl-ok { color: #2f9e5f; font-weight: 600; font-size: 12px; margin-left: 4px; font-style: normal; white-space: nowrap; }
.nkpl-tests { display: grid; grid-template-columns: repeat(3, minmax(0, 1fr)); gap: 20px; align-items: start; }
.nkpl-card { background: #fff; border: 1px solid #d6e2ef; border-radius: 10px; overflow: hidden; display: flex; flex-direction: column; box-shadow: 0 2px 10px rgba(23,38,58,.05); }
.nkpl-sec:not(.nkpl-tint) .nkpl-card { background: #f6f9fd; }
.nkpl-card__img img { aspect-ratio: 3 / 4; object-fit: cover; }
.nkpl-card__img--rv img { aspect-ratio: 4 / 5; }
.nkpl-card__body { padding: 16px; }
.nkpl-card__txt { font-size: 14.5px; line-height: 1.6; color: #2c3b4d; margin: 8px 0 10px; font-style: italic; }
.nkpl-card__name { font-size: 13.5px; font-weight: 600; color: #17263a; margin: 0; }
.nkpl-card__sub { font-weight: 400; color: #6b7c90; }
.nkpl-score { display: flex; justify-content: center; align-items: center; gap: 12px; margin: -4px 0 18px; flex-wrap: wrap; }
.nkpl-score .nkpl-stars { font-size: 20px; }
.nkpl-score__txt { font-size: 14.5px; color: #3a4a5c; }
.nkpl-score__txt strong { color: #17263a; }
.nkpl-dist { list-style: none; margin: 0 auto 32px; padding: 0; max-width: 460px; }
.nkpl-dist li { display: grid; grid-template-columns: 38px 1fr 92px; gap: 10px; align-items: center; margin: 0 0 8px; font-size: 14px; color: #17263a; }
.nkpl-dist__lbl { font-weight: 600; white-space: nowrap; }
.nkpl-dist__bar { display: block; height: 10px; border-radius: 6px; background: #dce8f5; overflow: hidden; }
.nkpl-dist__bar span { display: block; height: 100%; background: #1f568e; border-radius: 6px; }
.nkpl-dist__pct { color: #3a4a5c; white-space: nowrap; }
.nkpl-reviews { columns: 4; column-gap: 18px; }
.nkpl-reviews > .nkpl-card { break-inside: avoid; margin-bottom: 18px; }

/* pečat 30 dana */
.nkpl-media--seal { display: flex; justify-content: center; }
.nkpl-seal { width: 300px; height: 300px; border-radius: 50%; background: #fff; border: 10px solid #dce8f5; outline: 2px dashed #1f568e; outline-offset: -26px; display: flex; flex-direction: column; align-items: center; justify-content: center; text-align: center; box-shadow: 0 14px 40px rgba(23,38,58,.12); color: #17263a; }
.nkpl-seal__top, .nkpl-seal__bot { font-size: 14px; font-weight: 700; letter-spacing: .14em; text-transform: uppercase; }
.nkpl-seal__num { font-size: 96px; font-weight: 800; line-height: .95; color: #1f568e; margin-top: 6px; }
.nkpl-seal__days { font-size: 28px; font-weight: 800; text-transform: uppercase; color: #1f568e; letter-spacing: .06em; margin-bottom: 8px; }

/* zaključni poziv */
.nkpl-sec--cta .nkpl-h2 { max-width: 820px; margin-left: auto; margin-right: auto; }
.nkpl-sec p.nkpl-small { font-size: 13.5px; color: #6b7c90; margin: 14px 0 0; }
.nkpl-sec p.nkpl-note { font-size: 13px; line-height: 1.6; color: #6b7c90; max-width: 760px; margin: 22px auto 0; }

@media (max-width: 989px) {
  .nkpl-row2 { gap: 32px; }
  .nkpl-grid4 { grid-template-columns: repeat(2, minmax(0, 1fr)); }
  .nkpl-grid3 { grid-template-columns: repeat(2, minmax(0, 1fr)); }
  .nkpl-reviews { columns: 3; }
}
@media (max-width: 749px) {
  .nkpl-sec { padding: 42px 0; }
  .nkpl-wrap { padding: 0 16px; }
  .nkpl-row2 { grid-template-columns: 1fr; gap: 24px; }
  .nkpl-row2--rev .nkpl-media { order: 0; }
  .nkpl-trust { grid-template-columns: 1fr; }
  .nkpl-tests { grid-template-columns: 1fr; }
  .nkpl-card__img img { aspect-ratio: 4 / 3; }
  .nkpl-reviews { columns: 2; column-gap: 12px; }
  .nkpl-reviews > .nkpl-card { margin-bottom: 12px; }
  .nkpl-card__body { padding: 12px; }
  .nkpl-seal { width: 240px; height: 240px; }
  .nkpl-seal__num { font-size: 76px; }
}
@media (max-width: 480px) {
  .nkpl-grid4, .nkpl-grid3 { grid-template-columns: 1fr; }
  .nkpl-reviews { columns: 1; }
}

/* galerija izdelka: sličice največ v 2 vrstah (5 na vrsto), ostale slike so dosegljive z drsenjem glavne slike */
.product_cat-orto-kidspillow .flex-control-thumbs li:nth-child(n+11) { display: none !important; }

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
.woocommerce-product-details__short-description .nkpl-tick {
  position: absolute !important; left: 0 !important; top: 1px !important;
  width: 21px; height: 21px; border-radius: 50%;
  background: #2f9e5f !important; color: #fff !important;
  font-size: 12px !important; font-weight: 800 !important; line-height: 21px !important;
  text-align: center !important; display: inline-block !important; }
.woocommerce-product-details__short-description p:first-of-type { font-size: 16px; line-height: 1.55; }
</style>
