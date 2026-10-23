<?php
/**
 * product-bottom: NORIKS MinimizerBra — rashlađujući minimizer grudnjak s punim pokrićem (orto-minimizerbra).
 * Original: sculptdclothing.com/products/sculptd-bra-plus-size-cooling-full-coverage-minimizer-bra — vsebina in vrstni
 * red 1:1 z originalom, oblika po NORIKS stilu (predloga why-hoodiedress.php / why-hands.php), privzeta topla rjava
 * paleta NORIKS (#a9683f):
 *   1) zavihek "Description" (nakupna škatla)                 -> Jedini minimizer s krutim panelom: slika ob besedilu
 *   2) zavihek "Description" – "Why Every Other Minimizer Failed?" -> Zašto su drugi minimizeri zakazali: slika ob besedilu
 *   3) "Over 500,000 Women Have Switched" (3 mnenja s fotografijami) -> Što žene kažu (3 kartice; število konkurenta izpuščeno)
 *   4) "Before & After Comparison"                            -> Razdvajanje, a ne stiskanje: slika ob besedilu (Prije / Poslije)
 *   5) "The Rigid Separation Panel – How It Works"            -> Kruti panel za razdvajanje: Problem / Fizika / Rješenje ob sliki
 *   6) "How It Is Built" (6 točk)                              -> Kako je izrađen: besedilo + 6 oštevilčenih točk ob sliki
 *   7) "Customer Reviews" (16 mnenj)                           -> Recenzije kupaca: 1081 recenzija, ocena 4,9 + 16 mnenj
 *      (13 s fotografijami kupcev; fotografije z logotipom konkurenta na vrečki izrezane ali izpuščene)
 * Izpusceno: glava, »Rated 4.9 • Over 1m Sold«, ikone trgovine (90-Day Comfort Guarantee, Fast Shipping), zavihek »Do You
 * Offer a Guarantee?« (velja NORIKS: pravo na povrat u roku od 30 dana, besplatna dostava iznad 70 €), noga trgovine.
 * FAQ (sekcija »Before You Try It« + zavihek »Most Common Questions«) je v reviews.php ($minimizerbra_faq), mnenja v
 * auto_reviews/HR_minimizerbra.php, opis / nega / tablica velicin v standardnih harmonikah (meta.php) in modalu
 * (size-chart-minimizerbra.php). Slike: img/minimizerbra/ (nmb-…).
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$nmb      = get_template_directory_uri() . '/img/minimizerbra/';
$nmb_path = get_template_directory() . '/img/minimizerbra/';
$nmb_img  = function( $file, $alt, $cls = '' ) use ( $nmb, $nmb_path ) {
  if ( ! $file || ! file_exists( $nmb_path . $file ) ) { return ''; }
  return '<img src="' . esc_url( $nmb . $file ) . '" alt="' . esc_attr( $alt ) . '" loading="lazy"' . ( $cls ? ' class="' . esc_attr( $cls ) . '"' : '' ) . '>';
};
$nmb_stars = function( $n ) {
  $n = max( 0, min( 5, (int) $n ) );
  return '<span class="nmb-stars" aria-label="' . $n . ' od 5 zvjezdica">' . str_repeat( '★', $n ) . '<span class="nmb-stars__off">' . str_repeat( '★', 5 - $n ) . '</span></span>';
};

/* 3) Što žene kažu ("What women say after trying") — 3 mnenja originala s fotografijami */
$nmb_testimonials = array(
  array( 'img' => 'nmb-t1.webp', 'naslov' => 'Majice padaju ravno', 'ime' => 'Sanja, 56',
         'tekst' => 'Prestala sam nositi pripijene majice prije dvije godine jer se sve u sredini napuhavalo kao šator. Mislila sam da moje tijelo sada jednostavno tako izgleda. Već prvo jutro u ovom grudnjaku obukla sam košulju koja je mjesecima stajala u ormaru. Pala je ravno. Bez razmicanja. Bez police. Kruti središnji panel drži sve razdvojeno umjesto da se nagomila zajedno, i to mijenja kako vam stoji svaka majica.' ),
  array( 'img' => 'nmb-t2.webp', 'naslov' => 'Drži i u podne', 'ime' => 'Anđela, 52',
         'tekst' => 'Moja stara rutina: obučem ga, namještam ga do deset, popravljam ga za ručak i skinem ga čim uđem u kuću. Nisam puno očekivala. Do drugog tjedna shvatila sam da ga nisam namjestila nijednom. Panel se oslanja na prsnu kost i ne pomiče se. Došla sam kući u šest, pogledala dolje i sve je bilo točno ondje gdje je bilo ujutro. To mi se nikad prije nije dogodilo.' ),
  array( 'img' => 'nmb-t3.webp', 'naslov' => 'Manje tereta na ramenima', 'ime' => 'Pavica, 58',
         'tekst' => 'Svake večeri imala sam udubljenja na ramenima. Duboka. Mislila sam da je to normalno kad nosite toliku težinu. Pokazalo se da su sav posao radile dvije tanke naramenice. Široka traka i debele podstavljene naramenice ovog grudnjaka raspoređuju težinu preko leđa. Nakon tri tjedna udubljenja nestaju. Kći je to primijetila prije mene.' ),
);

/* 6) Kako je izrađen ("How It Is Built") — 6 točk originala */
$nmb_izrada = array(
  array( 'Kruti panel za razdvajanje', 'Oslanja se na prsnu kost, drži svaku stranu u njezinu prostoru i ne urušava se do podneva.' ),
  array( 'Potpuno bez podstave', 'Ne dodaje volumen upravo onim prsima koja želite smanjiti.' ),
  array( 'Košarica s punim pokrićem', 'Drži oblik punijih grudi umjesto da ih spljošti.' ),
  array( 'Debele podstavljene naramenice i široka traka', 'Težina se raspoređuje preko leđa umjesto da visi s ramena.' ),
  array( 'Rashlađujuća tkanina', 'Sprječava nakupljanje topline ispod grudi, pa ga nećete skidati čim uđete na vrata.' ),
  array( 'Žica koja ne bode', 'Oblikuje košaricu bez urezivanja. Panel i traka obavljaju držanje.' ),
);

/* 7) Recenzije kupaca ("Customer Reviews") — 16 mnenj originala, 13 s fotografijami kupcev */
$nmb_reviews = array(
  array( 'ime' => 'Sanja M.',     'img' => 'nmb-rv-01.webp', 'tekst' => 'Napokon grudnjak u kojem mi je stvarno svježe! Prozračna tkanina mi spašava putovanje na posao. Nema više namještanja tijekom dana — ostaje na mjestu i ne vidi se ispod poslovne odjeće.' ),
  array( 'ime' => 'Jelena T.',    'img' => '',               'tekst' => 'Bila sam skeptična oko žice koja »ne bode«, ali WOW! Doslovno zaboravim da nosim grudnjak sa žicom. Potpora je nevjerojatna, bez urezivanja i štipanja. Najbolja kupnja grudnjaka ikad!' ),
  array( 'ime' => 'Ana C.',       'img' => 'nmb-rv-02.webp', 'tekst' => 'Ovaj grudnjak mi je promijenio život! S mojom veličinom 90F bilo je nemoguće pronaći nešto što smanjuje, a ne steže. Puno pokriće je savršeno i obožavam kako glatko izgleda ispod pripijenih majica.' ),
  array( 'ime' => 'Renata V.',    'img' => '',               'tekst' => 'Rashlađivanje je STVARNO. Živim u toplom kraju i u ovom grudnjaku mi je ugodno cijeli dan. A skrivena potpora daje odlično podizanje bez imalo glomaznosti. Oduševljena sam!' ),
  array( 'ime' => 'Marija R.',    'img' => 'nmb-rv-03.webp', 'tekst' => 'Godinama imam bolove u ramenima zbog grudnjaka. Ovaj savršeno raspoređuje težinu! Konstrukcija potpore je genijalna — mogu ga nositi i više od 12 sati bez ikakve nelagode. Naručujem još tri!' ),
  array( 'ime' => 'Tea A.',       'img' => 'nmb-rv-04.webp', 'tekst' => 'Napokon minimizer koji stvarno djeluje! Odjeća mi bolje stoji i osjećam se puno samopouzdanije. Tkanina je nevjerojatno mekana, a veličina odgovara. Vrijedi svakog centa!' ),
  array( 'ime' => 'Lucija P.',    'img' => 'nmb-rv-05.webp', 'tekst' => 'Najbolji grudnjak za vruće ljetne dane! Prozračna mrežica me drži svježom i suhom. Sviđa mi se što je bez podstave, a ipak daje odličan oblik. Žica je tako glatka da je uopće ne primjećujem.' ),
  array( 'ime' => 'Andrea F.',    'img' => 'nmb-rv-06.webp', 'tekst' => 'Sad mi je ovo grudnjak za svaki dan! Nosila sam ga na letu od 10 sati i bio je udoban i kad sam sletjela. Puno pokriće znači da ništa ne viri, a efekt smanjivanja je suptilan, ali primjetan. Obožavam ga!' ),
  array( 'ime' => 'Branka L.',    'img' => 'nmb-rv-07.webp', 'tekst' => 'Ne mogu vjerovati koliko grudnjak sa žicom može biti udoban! Potpora je fenomenalna i grudi stvarno izgledaju manje, a da se ne osjećam stisnuto. Rashlađivanje je pravo otkriće i za vježbanje.' ),
  array( 'ime' => 'Mirela J.',    'img' => 'nmb-rv-08.webp', 'tekst' => 'Napokon sam našla PRAVI grudnjak! Unutarnja potpora je čarobna — daje podizanje koje mi treba bez ikakvog bockanja. Nosim ga svaki dan otkad je stigao. Što prije kupujem još boja!' ),
  array( 'ime' => 'Nikolina G.',  'img' => '',               'tekst' => 'Ovaj grudnjak nadmašio je sva moja očekivanja! Puno pokriće savršeno je za moje veće grudi, a žica stvarno ostaje na mjestu cijeli dan. Bez crvenih tragova, bez urezivanja — samo čista udobnost i potpora.' ),
  array( 'ime' => 'Snježana B.',  'img' => 'nmb-rv-09.webp', 'tekst' => 'Obožavam kako smanjuje profil! Napokon mogu nositi košulje na kopčanje bez razmicanja. Rashlađujuća tkanina je nevjerojatna, a kroj je savršen. Upravo ovo sam tražila!' ),
  array( 'ime' => 'Katarina V.',  'img' => 'nmb-rv-10.webp', 'tekst' => 'Kvaliteta je izvrsna! Nakon nekoliko pranja i dalje izgleda i osjeća se kao nov. Potpora se nimalo nije promijenila. Ovaj grudnjak je napravljen da traje i vrijedi svakog ulaganja!' ),
  array( 'ime' => 'Romana K.',    'img' => 'nmb-rv-11.webp', 'tekst' => 'Oduševljena sam! Glatki dizajn znači da se ispod odjeće ne vide nikakvi rubovi. Žica je savršeno postavljena i uopće ne bode. A to što mi je svježe cijeli dan veliki je plus. Pet zvjezdica!' ),
  array( 'ime' => 'Olga T.',      'img' => 'nmb-rv-12.webp', 'tekst' => 'Najbolji minimizer ikad! Daje mi elegantnu siluetu bez osjećaja stezanja ili nelagode. Prozračna tkanina savršena je za cjelodnevno nošenje, a potpora je upravo ono što trebam za svoju veličinu.' ),
  array( 'ime' => 'Kristina M.',  'img' => 'nmb-rv-13.webp', 'tekst' => 'Ovaj grudnjak mijenja život! Kombinacija punog pokrića, odlične potpore i rashlađujuće udobnosti je nepobjediva. Svako jutro se veselim što ću ga obući — nikad nisam mislila da ću to reći za grudnjak!' ),
);

$nmb_n = 0; // števec sekcij za izmenična ozadja
$nmb_cls = function() use ( &$nmb_n ) { $nmb_n++; return ( $nmb_n % 2 ) ? ' nmb-tint' : ''; };
?>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap">

<!-- 1) JEDINI MINIMIZER S KRUTIM PANELOM (zavihek "Description") — slika ob besedilu -->
<section class="nmb-sec<?php echo $nmb_cls(); ?>">
  <div class="nmb-wrap">
    <div class="nmb-row2">
      <div class="nmb-media"><?php echo $nmb_img( 'nmb-s1-opis.webp', 'NORIKS MinimizerBra – minimizer grudnjak s punim pokrićem, boja kave' ); ?></div>
      <div class="nmb-copy">
        <p class="nmb-kicker">Minimizer koji razdvaja</p>
        <h2 class="nmb-h2">Jedini minimizer izgrađen oko <em>krutog panela za razdvajanje</em></h2>
        <p>Gotovo svaki minimizer radi na principu <strong>kompresije</strong>. Sve gura zajedno i prema naprijed, tkivo se nagomila u jednu gustu masu u sredini prsa, a jedini preostali smjer je ravno van. To je ta »polica«. Zato se pripijene majice napuhnu kao šator, a košulje se razmiču među gumbima. Grudnjak koji ste kupili da biste izgledali manje gradi upravo oblik kojeg ste se htjeli riješiti.</p>
        <p><strong>NORIKS MinimizerBra umjesto toga razdvaja.</strong> Kruti središnji panel oslanja se na prsnu kost i drži svaku stranu punijih grudi u njezinu prostoru — tijekom cijelog dana kretanja. Ne samo prvi sat. Cijeli dan.</p>
        <p>Kad se tkivo ne može nagomilati u sredini, masa se nikad ne stvori. Nema mase, nema police. Nema police, nema efekta šatora.</p>
        <p class="nmb-big">Razdvajanje, a ne stiskanje.</p>
      </div>
    </div>
  </div>
</section>

<!-- 2) ZAŠTO SU DRUGI MINIMIZERI ZAKAZALI (zavihek "Description") — slika ob besedilu, strani zamenjani -->
<section class="nmb-sec<?php echo $nmb_cls(); ?>">
  <div class="nmb-wrap">
    <div class="nmb-row2 nmb-row2--rev">
      <div class="nmb-media"><?php echo $nmb_img( 'nmb-s2-zasto.webp', 'NORIKS MinimizerBra – crna, kruti središnji panel između košarica' ); ?></div>
      <div class="nmb-copy">
        <p class="nmb-kicker">Zašto drugi ne uspijevaju</p>
        <h2 class="nmb-h2">Zašto su svi drugi minimizeri <em>zakazali?</em></h2>
        <p>Kompresijski minimizeri. Minimizeri bez žice. Sportski grudnjaci. Minimizeri s podstavom. Svi do jednog zakažu iz istog razloga: <strong>nijedan ne razdvaja.</strong></p>
        <p>Gotovo svaki grudnjak tehnički ima panel u sredini. No kod gotovo svih to je <strong>mekana traka tkanine</strong>. Ona pluta. Savije se prema unutra već u prvom satu. Tkivo sklizne preko nje i polica se vrati do podneva. Pa okrivite grudnjak, kupite sljedeći, a on učini potpuno isto.</p>
        <p>Kruti panel koji stvarno drži mora biti oblikovan i konstruiran za svaki raspon veličina. Mekana traka nikome ne pristaje točno, pa jedan jeftin dizajn pokrije sve veličine na polici. Na fotografiji izgledaju identično — zato se iz sezone u sezonu prodaje onaj mekani, a vi zaključite da je problem u vašem tijelu.</p>
        <p class="nmb-big">Prebrojite minimizere u svojoj ladici. Nikad nije bilo do vašeg tijela. Bilo je do grudnjaka.</p>
      </div>
    </div>
  </div>
</section>

<!-- 3) ŠTO ŽENE KAŽU ("What women say after trying") — 3 mnenja s fotografijami -->
<section class="nmb-sec<?php echo $nmb_cls(); ?>">
  <div class="nmb-wrap">
    <p class="nmb-kicker nmb-c">Tisuće žena već su se prebacile</p>
    <h2 class="nmb-h2 nmb-c">Što žene kažu <em>nakon što ga isprobaju</em></h2>
    <div class="nmb-hl">
      <?php foreach ( $nmb_testimonials as $r ) : ?>
      <article class="nmb-card nmb-card--hl">
        <div class="nmb-card__img nmb-card__img--t"><?php echo $nmb_img( $r['img'], 'Fotografija kupca: ' . $r['ime'] ); ?></div>
        <div class="nmb-card__body">
          <?php echo $nmb_stars( 5 ); ?>
          <h3 class="nmb-card__title"><?php echo esc_html( $r['naslov'] ); ?></h3>
          <p class="nmb-card__txt">„<?php echo esc_html( $r['tekst'] ); ?>”</p>
          <p class="nmb-card__name"><?php echo esc_html( $r['ime'] ); ?> <span class="nmb-ok">✓ Potvrđena kupnja</span></p>
        </div>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- 4) RAZDVAJANJE, A NE STISKANJE ("Before & After Comparison") — slika ob besedilu -->
<section class="nmb-sec<?php echo $nmb_cls(); ?>">
  <div class="nmb-wrap">
    <div class="nmb-row2">
      <div class="nmb-media nmb-media--free"><?php echo $nmb_img( 'nmb-s4-prije-poslije.webp', 'Prije i poslije: silueta u običnom grudnjaku i u NORIKS MinimizerBra' ); ?></div>
      <div class="nmb-copy">
        <p class="nmb-kicker">Usporedba prije i poslije</p>
        <h2 class="nmb-h2">Razdvajanje, <em>a ne stiskanje</em></h2>
        <p class="nmb-lbl">Prije:</p>
        <p>Bez prave potpore tkivo pada prema sredini i nagomilava se. To stvara policu ispod majice. Zato se pripijene majice u sredini napuhnu, a košulje razmiču na prsima. Grudnjak izgubi položaj do deset, a do podneva ga već popravljate. Na kraju dana skidate ga čim uđete na vrata.</p>
        <p class="nmb-lbl">Poslije:</p>
        <p>Kruti središnji panel oslanja se na prsnu kost i drži svaku stranu u njezinu prostoru. Tkivo ostaje ondje gdje pripada umjesto da pada prema sredini. <strong>Majice padaju ravno. Košulje se zakopčavaju.</strong> U šest navečer grudnjak je točno ondje gdje je bio u sedam ujutro.</p>
        <p class="nmb-big">Ništa za namještati, ništa za popravljati, ništa za skidati.</p>
      </div>
    </div>
  </div>
</section>

<!-- 5) KRUTI PANEL ZA RAZDVAJANJE ("The Rigid Separation Panel – How It Works") — slika ob besedilu, strani zamenjani -->
<section class="nmb-sec<?php echo $nmb_cls(); ?>">
  <div class="nmb-wrap">
    <div class="nmb-row2 nmb-row2--rev">
      <div class="nmb-media nmb-media--free"><?php echo $nmb_img( 'nmb-s5-panel.webp', 'NORIKS MinimizerBra – kruti središnji panel za razdvajanje' ); ?></div>
      <div class="nmb-copy">
        <p class="nmb-kicker">Kako djeluje</p>
        <h2 class="nmb-h2">Kruti panel <em>za razdvajanje</em></h2>
        <div class="nmb-step"><h3 class="nmb-step__h">Problem</h3>
          <p>Svaki klasični grudnjak stišće. Gura tkivo zajedno prema sredini i stvara policu ispod majice koja je tijekom dana sve veća. Zato se majice napuhnu, košulje razmiču, a vi grudnjak popravljate već do deset sati.</p></div>
        <div class="nmb-step"><h3 class="nmb-step__h">Fizika</h3>
          <p>Nakon 40. godine tkivo grudi postaje mekše, a koža gubi elastičnost. Gravitacija sve vuče prema sredini. Grudnjak koji stišće ubrzava upravo ono što je trebao spriječiti. Polica nije znak da vaše tijelo popušta — to grudnjak radi točno ono što mu dizajn jamči.</p></div>
        <div class="nmb-step"><h3 class="nmb-step__h">Rješenje</h3>
          <p>Kruti središnji panel oslanja se na prsnu kost i drži svaku stranu u njezinu prostoru. Tkivo ne može pasti prema sredini jer je panel već ondje. Ne stišće. Ne pomiče se. Drži položaj od sedam ujutro dok u šest ne uđete na vrata.</p></div>
        <p class="nmb-big">Razdvajanje, a ne stiskanje. To je razlika između grudnjaka koji se bori s vašim tijelom i onog koji radi s njim.</p>
      </div>
    </div>
  </div>
</section>

<!-- 6) KAKO JE IZRAĐEN ("How It Is Built") — besedilo + 6 točk ob sliki -->
<section class="nmb-sec<?php echo $nmb_cls(); ?>">
  <div class="nmb-wrap">
    <div class="nmb-row2">
      <div class="nmb-media"><?php echo $nmb_img( 'nmb-s6-izrada.webp', 'NORIKS MinimizerBra – široka traka, debele naramenice i košarice s punim pokrićem' ); ?></div>
      <div class="nmb-copy">
        <p class="nmb-kicker">Kako je izrađen</p>
        <h2 class="nmb-h2">Kako je izrađen i <em>zašto se osjeća drugačije</em></h2>
        <p>Nismo napravili samo bolji grudnjak — konstruirali smo novi. Umjesto da se sva potpora prisili na dvije tanke naramenice i traku, izradili smo <strong>kruti središnji panel</strong> koji se oslanja na prsnu kost i drži svaku stranu u njezinu prostoru. Bez kompresije. Bez dijelova koji se urezuju u rebra. Bez konstrukcije koja se uruši do podneva.</p>
        <p>Ovo nije oblikovno rublje. Ovo nije kompresija. Ovo je razdvajanje — osjećaj da vas nešto drži na mjestu, a da se nijedan dio grudnjaka ne bori protiv vašeg tijela.</p>
        <ol class="nmb-list">
          <?php foreach ( $nmb_izrada as $i => $d ) : ?>
          <li><span class="nmb-list__n"><?php echo (int) ( $i + 1 ); ?></span><span><strong><?php echo esc_html( $d[0] ); ?></strong> <?php echo esc_html( $d[1] ); ?></span></li>
          <?php endforeach; ?>
        </ol>
      </div>
    </div>
  </div>
</section>

<!-- 7) RECENZIJE KUPACA ("Customer Reviews") — 1081 po NORIKS + 16 mnenj originala -->
<section class="nmb-sec<?php echo $nmb_cls(); ?>">
  <div class="nmb-wrap">
    <p class="nmb-kicker nmb-c">Recenzije kupaca</p>
    <h2 class="nmb-h2 nmb-c">Što kažu žene <em>koje ga nose</em></h2>
    <div class="nmb-score">
      <span class="nmb-score__num">4,9 / 5</span>
      <?php echo $nmb_stars( 5 ); ?>
      <span class="nmb-score__txt">Na temelju 1081 recenzije · <span class="nmb-ok">✓ Potvrđene kupnje</span></span>
    </div>
    <div class="nmb-reviews">
      <?php foreach ( $nmb_reviews as $r ) : ?>
      <article class="nmb-card<?php echo $r['img'] ? ' nmb-card--img' : ' nmb-card--txt'; ?>">
        <?php if ( $r['img'] ) : ?><div class="nmb-card__img"><?php echo $nmb_img( $r['img'], 'Fotografija kupca: ' . $r['ime'] ); ?></div><?php endif; ?>
        <div class="nmb-card__body">
          <?php echo $nmb_stars( 5 ); ?>
          <p class="nmb-card__txt">„<?php echo esc_html( $r['tekst'] ); ?>”</p>
          <p class="nmb-card__name"><?php echo esc_html( $r['ime'] ); ?> <span class="nmb-ok">✓ Potvrđena kupnja</span></p>
        </div>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<style>
/* NORIKS stil (predloga why-hoodiedress.php / why-hands.php): oznaka + naslov z ležečim poudarkom, slika ob
   besedilu, izmenjujoča ozadja in strani. Privzeta topla rjava paleta NORIKS (#a9683f). */
.nmb-sec { padding: 60px 0; font-family: 'Poppins', system-ui, -apple-system, 'Segoe UI', Roboto, Arial, sans-serif; color: #231d19; background: #fff; }
.nmb-sec * { box-sizing: border-box; }
.nmb-tint { background: #f7f2ec; }
.nmb-wrap { width: 100%; max-width: 1200px; margin: 0 auto; padding: 0 24px; }
.nmb-c { text-align: center; }
.nmb-sec h2, .nmb-sec h3 { font-family: inherit; text-transform: none; letter-spacing: 0; }
.nmb-kicker, .nmb-copy p.nmb-kicker { font-size: 12.5px; line-height: 1.4; font-weight: 700; letter-spacing: .14em; text-transform: uppercase; color: #a9683f; margin: 0 0 10px; }
.nmb-h2 { font-weight: 700; font-size: clamp(25px, 3.1vw, 36px); line-height: 1.2; margin: 0 0 14px; color: #231d19; }
.nmb-h2 em { font-style: italic; color: #a9683f; }
.nmb-sec img { display: block; width: 100%; height: auto; }

/* slika ob besedilu */
.nmb-row2 { display: grid; grid-template-columns: 1fr 1fr; gap: 56px; align-items: center; }
.nmb-row2--rev .nmb-media { order: 2; }
.nmb-media > img { border-radius: 10px; box-shadow: 0 2px 4px rgba(40,25,15,.05), 0 14px 40px rgba(40,25,15,.10); max-width: 480px; margin: 0 auto; aspect-ratio: 4 / 5; object-fit: cover; object-position: center top; }
.nmb-media--free > img { aspect-ratio: auto; max-width: 560px; }
.nmb-copy p { font-size: 16px; line-height: 1.7; color: #4a403a; margin: 0 0 14px; }
.nmb-copy p strong { color: #231d19; font-weight: 600; }
.nmb-copy p.nmb-big { font-size: 19px; font-weight: 700; color: #231d19; line-height: 1.45; margin-top: 6px; }
.nmb-copy p.nmb-lbl { font-size: 14px; font-weight: 700; letter-spacing: .06em; text-transform: uppercase; color: #a9683f; margin: 4px 0 4px; }
.nmb-step { border-left: 3px solid #dcc3ad; padding: 2px 0 2px 16px; margin: 0 0 14px; }
.nmb-step__h { font-size: 16.5px; font-weight: 700; color: #a9683f; margin: 0 0 4px; }
.nmb-step p { margin: 0; }

/* oštevilčen seznam (Kako je izrađen) */
.nmb-list { list-style: none; margin: 6px 0 0; padding: 0; }
.nmb-list li { display: flex; gap: 12px; align-items: flex-start; font-size: 15.5px; line-height: 1.6; color: #4a403a; margin: 0 0 11px; }
.nmb-list li strong { color: #231d19; font-weight: 600; display: block; }
.nmb-list__n { flex: 0 0 28px; width: 28px; height: 28px; border-radius: 50%; background: #a9683f; color: #fff; font-weight: 700; font-size: 14px; line-height: 28px; text-align: center; margin-top: 1px; }

/* ocjene */
.nmb-stars { color: #f2a516; letter-spacing: 1px; font-size: 15px; }
.nmb-stars__off { color: #e6ddd4; }
.nmb-score { display: flex; justify-content: center; align-items: center; gap: 12px; margin: 0 0 28px; flex-wrap: wrap; }
.nmb-score__num { font-size: 28px; font-weight: 700; color: #231d19; }
.nmb-score .nmb-stars { font-size: 20px; }
.nmb-score__txt { font-size: 14.5px; color: #6b5f56; }

/* mnenja */
.nmb-hl { display: grid; grid-template-columns: repeat(3, 1fr); gap: 18px; margin-top: 30px; align-items: start; }
.nmb-reviews { columns: 4; column-gap: 18px; }
.nmb-reviews > .nmb-card { break-inside: avoid; margin-bottom: 18px; }
.nmb-card { background: #fff; border: 1px solid #ead9c9; border-radius: 10px; overflow: hidden; display: flex; flex-direction: column; }
.nmb-sec:not(.nmb-tint) .nmb-card { background: #f7f2ec; }
.nmb-card__img img { aspect-ratio: 1 / 1; object-fit: cover; }
.nmb-card__img--t img { aspect-ratio: 4 / 3; }
.nmb-card__body { padding: 16px; }
.nmb-card--hl .nmb-card__body { padding: 20px; }
.nmb-card__title { font-size: 16px; font-weight: 700; color: #231d19; margin: 8px 0 6px; line-height: 1.35; }
.nmb-card__txt { font-size: 14.5px; line-height: 1.6; color: #3b322c; margin: 8px 0 10px; font-style: italic; }
.nmb-card__name { font-size: 13.5px; font-weight: 600; color: #231d19; margin: 0; }
.nmb-ok { color: #2f9e5f; font-weight: 600; font-size: 12px; margin-left: 4px; font-style: normal; }

@media (max-width: 989px) {
  .nmb-row2 { gap: 32px; }
  .nmb-reviews { columns: 2; }
}
@media (max-width: 749px) {
  .nmb-sec { padding: 42px 0; }
  .nmb-wrap { padding: 0 16px; }
  .nmb-row2 { grid-template-columns: 1fr; gap: 24px; }
  .nmb-row2--rev .nmb-media { order: 0; }
  .nmb-hl { grid-template-columns: 1fr; gap: 12px; }
  .nmb-reviews { column-gap: 12px; }
  .nmb-reviews > .nmb-card { margin-bottom: 12px; }
  .nmb-card__body { padding: 12px; }
}
@media (max-width: 420px) {
  .nmb-reviews { columns: 1; }
}

/* galerija izdelka: sličice največ v 2 vrstah (5 na vrsto), ostale slike so dosegljive z drsenjem glavne slike */
.product_cat-orto-minimizerbra .flex-control-thumbs li:nth-child(n+11) { display: none !important; }

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
.woocommerce-product-details__short-description .nmb-tick {
  position: absolute !important; left: 0 !important; top: 1px !important;
  width: 21px; height: 21px; border-radius: 50%;
  background: #2f9e5f !important; color: #fff !important;
  font-size: 12px !important; font-weight: 800 !important; line-height: 21px !important;
  text-align: center !important; display: inline-block !important; }
.woocommerce-product-details__short-description p:first-of-type { font-size: 16px; line-height: 1.55; }
</style>
