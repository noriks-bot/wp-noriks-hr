<?php
/**
 * product-bottom: NORIKS SeatCover — vodootporna presvlaka za autosjedalo od frotira (orto-seatcover).
 * Original: thetufftowel.com.au (Waterproof Car Towel Seat Cover) — vsebina in vrstni red 1:1,
 * oblika po NORIKS stilu (predloga why-hands.php / why-harness.php):
 *   1) Zastita koja stvarno djeluje ("Protection That Actually Works") — slika ob besedilu
 *   2) Spremna za prave avanture ("Ready for Real Adventures") — slika ob besedilu
 *   3) Izdrzljiva i izgleda odlicno ("Built Tuff, Looks Bloody Good") — slika ob besedilu
 *   4) Odusevit ce i vase ljubimce ("Your Pets Will Love It Too") — slika ob besedilu
 *   5) Prije / poslije (drsnik "Before / After" -> dve sliki ob besedilu, brez drsnika)
 *   6) Mi protiv starog nacina — primerjalna tabela (2.500 recenzij -> 1081 kot v temi)
 *   7) Statistika ankete (99 % / 94 % / 96 %)
 *   8) Recenzije kupaca (6 s fotografijami + ostale v mrezi, brez imena znamke)
 *   9) Video (drsnik 5 videov -> 1 video brez znamke, utisan) ob besedilu
 *  10) Prednosti (4 ikone; "Australia Owned" -> besplatna dostava iznad 70 €, garancija -> 30 dana za povrat)
 * FAQ z originala je v reviews.php ($seatcover_faq). Sledilnik zalog (pre-order, "sold out") in tekoci trakovi
 * z originala so izpusceni (NORIKS stil). Slike / video: img/seatcover/ (brez tuje znamke, napisi prevedeni).
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$nsc      = get_template_directory_uri() . '/img/seatcover/';
$nsc_path = get_template_directory() . '/img/seatcover/';
$nsc_img  = function( $file, $alt ) use ( $nsc, $nsc_path ) {
  if ( ! $file || ! file_exists( $nsc_path . $file ) ) { return ''; }
  return '<img src="' . esc_url( $nsc . $file ) . '" alt="' . esc_attr( $alt ) . '" loading="lazy">';
};
$nsc_vid  = function( $file ) use ( $nsc, $nsc_path ) {
  if ( ! $file || ! file_exists( $nsc_path . $file . '.mp4' ) ) { return ''; }
  return '<video src="' . esc_url( $nsc . $file . '.mp4' ) . '" poster="' . esc_url( $nsc . $file . '-poster.webp' ) . '" muted autoplay loop playsinline preload="metadata"></video>';
};
$nsc_stars = function( $n ) {
  $n = max( 0, min( 5, (int) $n ) );
  $out = '<span class="nsc-stars" aria-label="' . esc_attr( $n . ' od 5 zvjezdica' ) . '">';
  for ( $i = 1; $i <= 5; $i++ ) { $out .= '<i' . ( $i > $n ? ' class="is-off"' : '' ) . '>★</i>'; }
  return $out . '</span>';
};

/* 6) usporedba (stupci: NORIKS SeatCover, klasicne presvlake) */
$nsc_compare = array(
  array( 'Pristaje na svako sjedalo', true, false ),
  array( 'Postavlja se u nekoliko sekundi', true, false ),
  array( 'Trostruka vodootporna zaštita', true, false ),
  array( 'Pere se u perilici rublja', true, false ),
  array( 'Lako je prebacite u drugi auto', true, false ),
  array( '1081 recenzija s 5 zvjezdica', true, false ),
);

/* 7) anketa */
$nsc_stats = array(
  array( '99', 'kupaca kaže da su im sjedala nakon upotrebe ostala potpuno suha.' ),
  array( '94', 'smatra da je brža i jednostavnija od klasičnih presvlaka.' ),
  array( '96', 'kupaca preporučilo bi je prijatelju.' ),
);

/* 8) recenzije 1:1 z originala (prevedene, ime znamke izpusceno) — prvih 6 s fotografijo */
$nsc_reviews = array(
  array( 'slika' => 'sc-rv-01.webp', 'ime' => 'Kerry H.', 'tekst' => 'Obožavam ih. Ne pomiču se. Sigurno ću ih kupiti za cijelu obitelj.' ),
  array( 'slika' => 'sc-rv-02.webp', 'ime' => 'Rebekah P.', 'tekst' => 'Obožavam!!!!' ),
  array( 'slika' => 'sc-rv-03.webp', 'ime' => 'Andria I.', 'tekst' => 'Savršeno pristaje, već sam naručila presvlake i za stražnja sjedala.' ),
  array( 'slika' => 'sc-rv-04.webp', 'ime' => 'Kyla S.', 'tekst' => 'Ludo ih volim!!!! Imamo ih u kamionetu i koristimo ih svaki dan jer živimo na otoku!!! HVALA!!!! 🌞🙌🏻🌊🙌🏻' ),
  array( 'slika' => 'sc-rv-05.webp', 'ime' => 'Paul M.', 'tekst' => 'Stigle su na vrijeme, kvalitetne su i dobro pristaju.' ),
  array( 'slika' => 'sc-rv-06.webp', 'ime' => 'Carole F.', 'tekst' => 'Divne su za naš kombi i štite sjedala od smeđih pasa, pijeska te mokrih ljudi i pasa. Lako se postavljaju, lako čiste, a još i dobro izgledaju. Geo i GJ ih obožavaju 🐕🤎🙏' ),
  array( 'slika' => '', 'ime' => 'Jackson B.', 'tekst' => 'Obožavam ove presvlake — koristit ću ih u svakom autu koji budem imao.' ),
  array( 'slika' => '', 'ime' => 'Sam M.', 'tekst' => 'Odlične su i tako ih je lako skinuti i oprati. Definitivno dobar dodatak za svako vozilo.' ),
  array( 'slika' => '', 'ime' => 'Daton W.', 'tekst' => 'Presretan sam. Stalno sjedam u auto prljav nakon posla i vikenda vani, a ove presvlake savršeno štite sjedala. Dobro pristaju, ne pomiču se, a maskirna boja uživo izgleda još bolje. Jako ih je lako skinuti i oprati. Definitivno preporučujem.' ),
  array( 'slika' => '', 'ime' => 'Rahul N.', 'tekst' => 'Odlična ponuda! Vrhunska kvaliteta! Brza dostava i lijepo pristaju na sjedala :)' ),
  array( 'slika' => '', 'ime' => 'Bader A.', 'tekst' => 'Ne može bolje.' ),
  array( 'slika' => '', 'ime' => 'Koichi F.', 'tekst' => 'Lako se postavlja, izgleda odlično i štiti mi sjedalo nakon ribolova i kampiranja!!' ),
  array( 'slika' => '', 'ime' => 'Tim C.', 'tekst' => 'Odlična stvar da kamionet ostane uredan.' ),
  array( 'slika' => '', 'ime' => 'Samantha M.', 'tekst' => 'Brzo i savršen proizvod.' ),
  array( 'slika' => '', 'ime' => 'Shane T.', 'tekst' => 'Nedavno sam kupio cijeli komplet i oduševljen sam — izgledaju odlično, ugodno se sjedi na njima i jako ih je jednostavno koristiti i prati! Toplo preporučujem, bilo za kratke izlete na plažu ili za težak posao.' ),
  array( 'slika' => '', 'ime' => 'Janette W.', 'tekst' => 'Odličan način da zaštitimo sjedala našeg Isuzu dvokabinca iz 2022. kad ga koristimo za ribolov i kampiranje. Sad ćemo uzeti presvlaku i za stražnju klupu.' ),
  array( 'slika' => '', 'ime' => 'Matthew H.', 'tekst' => 'Jako dobro pristaju na sjedala i lijepo se uklapaju u auto.' ),
  array( 'slika' => '', 'ime' => 'Panayiotis K.', 'tekst' => 'Super je, obožavam je.' ),
  array( 'slika' => '', 'ime' => 'Helen H.', 'tekst' => 'Obožavam novu presvlaku — savršena je odmah nakon saune ili crossfita.' ),
  array( 'slika' => '', 'ime' => 'Tasha P.', 'tekst' => 'Kupila sam presvlaku za partnera, a sad se čini da je on ostao bez svog terenca — svakodnevno ga vozim ja.' ),
  array( 'slika' => '', 'ime' => 'Amanda V.', 'tekst' => 'Obožavam je.' ),
  array( 'slika' => '', 'ime' => 'Shaggar B.', 'tekst' => 'Apsolutno fenomenalno. Sad ću naručiti jednu i za stražnje sjedalo. Bravo!' ),
  array( 'slika' => '', 'ime' => 'Simon H.', 'tekst' => 'Jednostavno odličan proizvod — lagan, lako se čisti i udoban 🤟 Lijep pozdrav, Simon' ),
  array( 'slika' => '', 'ime' => 'Louise D.', 'tekst' => 'Apsolutno nevjerojatno, jedva čekam kupiti još. Odlično pristaje i odlično izgleda.' ),
  array( 'slika' => '', 'ime' => 'Mercedes N.', 'tekst' => 'Vožnja Jeepom po terenu bila je puno manje prljava… barem unutar auta!' ),
  array( 'slika' => '', 'ime' => 'Ben M.', 'tekst' => 'Odlična zaštita od prljave radne odjeće u mom novom kamionetu. Lako se stavlja i skida!' ),
  array( 'slika' => '', 'ime' => '仁志 住.', 'tekst' => 'Koristio sam je dok sam postavljao foliju na panoramski stakleni krov i radila je izvrsno! Odlična kvaliteta i vrlo praktična i za profesionalnu upotrebu. Oduševljen sam!' ),
  array( 'slika' => '', 'ime' => 'Steven N.', 'tekst' => 'Stavio sam ih u svoj kiper — savršeno pristaju, a kabina je dobila malo stila!' ),
  array( 'slika' => '', 'ime' => 'Alyssa H.', 'tekst' => 'Imam maskirni komplet preko kožnih sjedala u svom D-Maxu — odlične su na vrućini i izgledaju super 😊 obožavam ih' ),
  array( 'slika' => '', 'ime' => 'Michael N.', 'tekst' => 'Uopće nije loše.' ),
  array( 'slika' => '', 'ime' => 'Vanessa M.', 'tekst' => 'Kao što sam spomenula za stražnja sjedala — lako se stavljaju i skidaju, dobre su kvalitete i sviđa mi se tekstura.' ),
  array( 'slika' => '', 'ime' => 'Scott B.', 'tekst' => 'Obožavam ih — lako se stavljaju, skidaju i peru.' ),
  array( 'slika' => '', 'ime' => 'Chris B.', 'tekst' => 'Izgledaju odlično! I lijepo pristaju na sjedala u Ramu.' ),
  array( 'slika' => '', 'ime' => 'Michael M.', 'tekst' => 'Odlične presvlake. Brza i jednostavna dostava 👍🏻👍🏻' ),
  array( 'slika' => '', 'ime' => 'Nicola M.', 'tekst' => 'Ponekad moram brzo skoknuti u grad obiteljskim autom još u prljavoj radnoj odjeći, pa je super što presvlaku mogu brzo prebaciti preko sjedala i sačuvati kožu čistom!! Odlična je!!' ),
  array( 'slika' => '', 'ime' => 'Shannan F.', 'tekst' => 'Fantastična zaštita za kožna sjedala, pogotovo nakon treninga ili kupanja. Lako se skida kad zatreba. Obožavam ih!' ),
  array( 'slika' => '', 'ime' => 'Emily G.', 'tekst' => 'Kupili smo ih za moj i muževljev auto i oduševljeni smo — savršene su za naše potrebe, a lako se operu ili samo istresu i vrate na mjesto!' ),
  array( 'slika' => '', 'ime' => 'Boyd S.', 'tekst' => 'Odlične su za zaštitu kože u mom Tasmanu kad idemo na kratke izlete na plažu. Nema više pijeska u sjedalima, a tako ih je lako staviti i skinuti kad zatreba.' ),
  array( 'slika' => '', 'ime' => 'Michelle P.', 'tekst' => 'Brza i jednostavna kupnja i dostava. Obožavam maskirni uzorak, izgleda baš lijepo. Sjedala ostaju čista i uredna, i kad se muž vrati s posla i kad su djeca cijeli dan na plaži 💚🤎' ),
  array( 'slika' => '', 'ime' => 'Neville B.', 'tekst' => 'Savršeno pristaje, pokriva cijelo sjedalo i odlična je i kad idete na posao.' ),
);
// Število recenzij usklajeno z glavo strani in zavihki recenzij teme (1081 skupaj = 692 izdelka + 389 dostave)
$nsc_dist = array( 5 => array( '574', 83 ), 4 => array( '104', 15 ), 3 => array( '11', 2 ), 2 => array( '2', 0 ), 1 => array( '1', 0 ) );

/* 10) prednosti */
$nsc_badges = array(
  array( 'sc-ic-voda.webp', '100 % vodootporna podloga' ),
  array( 'sc-ic-teren.webp', 'Izrađena za teške uvjete' ),
  array( 'sc-ic-povrat.webp', '30 dana za povrat' ),
  array( 'sc-ic-dostava.webp', 'Besplatna dostava za narudžbe iznad 70 €' ),
);
?>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap">

<!-- 1) ZASTITA KOJA STVARNO DJELUJE — slika ob besedilu -->
<section class="nsc-sec nsc-tint">
  <div class="nsc-wrap">
    <div class="nsc-row2">
      <div class="nsc-media"><?php echo $nsc_img( 'sc-s1-zastita.webp', 'Voda se prolijeva po presvlaci NORIKS SeatCover, sjedalo ostaje suho' ); ?></div>
      <div class="nsc-copy">
        <p class="nsc-kicker">NORIKS SeatCover</p>
        <h2 class="nsc-h3">Zaštita koja <em>stvarno djeluje</em></h2>
        <p>Bilo da dolazite ravno s gradilišta, s plaže ili s izleta u prirodu — ova presvlaka vam čuva leđa. <strong>Prebacite je u sekundi</strong>, ostaje na mjestu i štiti sjedalo od svega što donesete sa sobom.</p>
        <p class="nsc-big">Prljavština, znoj, prolivena pića, pijesak i još mnogo toga.</p>
      </div>
    </div>
  </div>
</section>

<!-- 2) SPREMNA ZA PRAVE AVANTURE — slika ob besedilu -->
<section class="nsc-sec">
  <div class="nsc-wrap">
    <div class="nsc-row2 nsc-row2--rev">
      <div class="nsc-media"><?php echo $nsc_img( 'sc-s2-avanture.webp', 'Terenac s presvlakom NORIKS SeatCover na sjedalu' ); ?></div>
      <div class="nsc-copy">
        <p class="nsc-kicker">Za svaki dan</p>
        <h2 class="nsc-h3">Spremna za <em>prave avanture</em></h2>
        <p>Život je neuredan, ali vaš auto ne mora biti. Mokri psi, blatnjava radna odjeća, znojni povratci iz teretane ili kava prolivena u zavoju — <strong>NORIKS SeatCover brzo prekrije sjedalo</strong> i unutrašnjost ostaje besprijekorna.</p>
        <p class="nsc-big">Izdržljiva, brzo se stavlja i spremna je za sve što vam dan donese.</p>
      </div>
    </div>
  </div>
</section>

<!-- 3) IZDRZLJIVA I IZGLEDA ODLICNO — slika ob besedilu -->
<section class="nsc-sec nsc-tint">
  <div class="nsc-wrap">
    <div class="nsc-row2">
      <div class="nsc-media"><?php echo $nsc_img( 'sc-s3-boje.webp', 'Crna presvlaka NORIKS SeatCover na sjedalu terenca' ); ?></div>
      <div class="nsc-copy">
        <p class="nsc-kicker">Osam boja</p>
        <h2 class="nsc-h3">Izdržljiva — <em>i izgleda odlično</em></h2>
        <p>NORIKS SeatCover ne samo da vrijedno radi, nego pritom i dobro izgleda. Uz izbor čistih, modernih boja postoji presvlaka za svaki stil, svako vozilo i svaku osobnost.</p>
        <p class="nsc-big">Bilo da volite klasičnu crnu ili nešto upečatljivije u boji — imamo pravu za vas.</p>
      </div>
    </div>
  </div>
</section>

<!-- 4) ODUSEVIT CE I VASE LJUBIMCE — slika ob besedilu -->
<section class="nsc-sec">
  <div class="nsc-wrap">
    <div class="nsc-row2 nsc-row2--rev">
      <div class="nsc-media"><?php echo $nsc_img( 'sc-12-pas.webp', 'Pas sjedi na ružičastoj presvlaci NORIKS SeatCover' ); ?></div>
      <div class="nsc-copy">
        <p class="nsc-kicker">Za vlasnike ljubimaca</p>
        <h2 class="nsc-h3">Oduševit će i <em>vaše ljubimce</em></h2>
        <p>NORIKS SeatCover nije samo za vas — prava je promjena za <strong>sve vlasnike ljubimaca</strong>.</p>
        <p>Blatnjave šape, pijesak u krznu ili otresanje nakon kupanja — naša vodootporna presvlaka savršena je barijera između vašeg psa i čistih sjedala.</p>
        <p class="nsc-big">Dovoljno mekana da na njoj udobno leži, dovoljno izdržljiva za sav nered i lako se pere nakon svake vožnje.</p>
      </div>
    </div>
  </div>
</section>

<!-- 5) PRIJE / POSLIJE — dve sliki ob besedilu (brez drsnika) -->
<section class="nsc-sec nsc-tint">
  <div class="nsc-wrap">
    <div class="nsc-row2">
      <div class="nsc-media nsc-ba">
        <figure class="nsc-ba__item"><?php echo $nsc_img( 'sc-s5-prije.webp', 'Prije: kožno sjedalo bez zaštite' ); ?><figcaption>Prije</figcaption></figure>
        <figure class="nsc-ba__item"><?php echo $nsc_img( 'sc-s5-poslije.webp', 'Poslije: sjedalo zaštićeno presvlakom NORIKS SeatCover' ); ?><figcaption>Poslije</figcaption></figure>
      </div>
      <div class="nsc-copy">
        <p class="nsc-kicker">Prije / poslije</p>
        <h2 class="nsc-h3">Isto sjedalo — <em>potpuno zaštićeno</em></h2>
        <p>Lijevo je sjedalo bez zaštite, desno s presvlakom NORIKS SeatCover. Presvlaka prekriva <strong>cijelo sjedalo, od naslona za glavu do ruba sjedišta</strong>, a skida se za nekoliko sekundi.</p>
        <p class="nsc-big">Kožu i tkaninu čuva od znoja, vode i prljavštine.</p>
      </div>
    </div>
  </div>
</section>

<!-- 6) MI PROTIV STAROG NACINA — usporedba -->
<section class="nsc-sec">
  <div class="nsc-wrap nsc-wrap--narrow">
    <p class="nsc-kicker nsc-c">Usporedba</p>
    <h2 class="nsc-h2 nsc-c">Mi protiv <em>starog načina</em></h2>
    <p class="nsc-lead nsc-c">Hvala klasičnim presvlakama na trudu. Od sada preuzimamo mi.</p>
    <table class="nsc-cmp">
      <thead>
        <tr>
          <th></th>
          <th class="is-ours">NORIKS SeatCover</th>
          <th>Klasične presvlake</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ( $nsc_compare as $c ) : ?>
        <tr>
          <td><?php echo esc_html( $c[0] ); ?></td>
          <td class="is-ours <?php echo $c[1] ? 'is-yes' : 'is-no'; ?>"><span><?php echo $c[1] ? '✓' : '✕'; ?></span></td>
          <td class="<?php echo $c[2] ? 'is-yes' : 'is-no'; ?>"><span><?php echo $c[2] ? '✓' : '✕'; ?></span></td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</section>

<!-- 7) ANKETA — statistika -->
<section class="nsc-sec nsc-tint">
  <div class="nsc-wrap nsc-wrap--narrow">
    <p class="nsc-kicker nsc-c">Iskustva kupaca</p>
    <h2 class="nsc-h2 nsc-c">Brojke <em>govore same</em></h2>
    <div class="nsc-stats">
      <?php foreach ( $nsc_stats as $st ) : ?>
      <div class="nsc-stat"><strong><?php echo esc_html( $st[0] ); ?> %</strong><p><?php echo esc_html( $st[1] ); ?></p></div>
      <?php endforeach; ?>
    </div>
    <p class="nsc-note nsc-c">*Na temelju ankete među više od 500 kupaca.</p>
  </div>
</section>

<!-- 8) RECENZIJE KUPACA -->
<section class="nsc-sec nsc-sec--reviews">
  <div class="nsc-wrap">
    <p class="nsc-kicker nsc-c">Recenzije kupaca</p>
    <h2 class="nsc-h2 nsc-c">Što kažu <em>naši kupci</em></h2>
    <div class="nsc-summary">
      <div class="nsc-summary__score"><strong>4,8</strong><?php echo $nsc_stars( 5 ); ?><span>na temelju 692 recenzije proizvoda</span></div>
      <div class="nsc-summary__bars">
        <?php foreach ( $nsc_dist as $z => $d ) : ?>
        <div class="nsc-bar"><span class="nsc-bar__lbl"><?php echo (int) $z; ?> ★</span><span class="nsc-bar__track"><span style="width:<?php echo (int) $d[1]; ?>%"></span></span><span class="nsc-bar__n"><?php echo esc_html( $d[0] ); ?></span></div>
        <?php endforeach; ?>
      </div>
    </div>
    <div class="nsc-revs">
      <?php foreach ( $nsc_reviews as $r ) : ?>
      <article class="nsc-rv">
        <?php if ( $r['slika'] ) : ?><div class="nsc-rv__img"><?php echo $nsc_img( $r['slika'], 'Fotografija kupca: ' . $r['ime'] ); ?></div><?php endif; ?>
        <div class="nsc-rv__body">
          <?php echo $nsc_stars( 5 ); ?>
          <p class="nsc-rv__txt"><?php echo esc_html( $r['tekst'] ); ?></p>
          <p class="nsc-rv__name"><?php echo esc_html( $r['ime'] ); ?> <span>· Provjereni kupac</span></p>
        </div>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- 9) VIDEO — ob besedilu -->
<section class="nsc-sec nsc-tint">
  <div class="nsc-wrap">
    <div class="nsc-row2">
      <div class="nsc-media nsc-media--video"><?php echo $nsc_vid( 'sc-video' ); ?></div>
      <div class="nsc-copy">
        <p class="nsc-kicker">Na djelu</p>
        <h2 class="nsc-h3">Voda, lišće, blato — <em>sjedalo ostaje čisto</em></h2>
        <p>Prolijte vodu, istresite lišće i zemlju — NORIKS SeatCover sve zadrži na sebi. <strong>Vodootporna podloga</strong> ne propušta tekućinu do sjedala.</p>
        <p>Kad završite, presvlaku samo skinete, istresete i bacite u perilicu.</p>
        <p class="nsc-big">Sjedalo ispod ostaje suho i čisto.</p>
      </div>
    </div>
  </div>
</section>

<!-- 10) PREDNOSTI — NORIKS pogoji -->
<section class="nsc-sec">
  <div class="nsc-wrap">
    <div class="nsc-badges">
      <?php foreach ( $nsc_badges as $b ) : ?>
      <div class="nsc-badge"><?php echo $nsc_img( $b[0], $b[1] ); ?><p><?php echo esc_html( $b[1] ); ?></p></div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<style>
/* NORIKS stil (predloga why-hands.php / why-harness.php): oznaka + naslov z lezecim poudarkom, slika/video ob besedilu,
   izmenjujoca ozadja. Barvni poudarek izdelka: topla opecnata (#b5532c). */
.nsc-sec { padding: 60px 0; font-family: 'Poppins', system-ui, -apple-system, 'Segoe UI', Roboto, Arial, sans-serif; color: #2b211c; background: #fff; }
.nsc-sec * { box-sizing: border-box; }
.nsc-tint { background: #f9f1ec; }
.nsc-wrap { width: 100%; max-width: 1200px; margin: 0 auto; padding: 0 24px; }
.nsc-wrap--narrow { max-width: 860px; }
.nsc-c { text-align: center; }
.nsc-sec h2, .nsc-sec h3 { font-family: inherit; text-transform: none; letter-spacing: 0; }
.nsc-kicker, .nsc-copy p.nsc-kicker { font-size: 12.5px; line-height: 1.4; font-weight: 700; letter-spacing: .14em; text-transform: uppercase; color: #b5532c; margin: 0 0 10px; }
.nsc-h2 { font-weight: 700; font-size: clamp(25px, 3.1vw, 36px); line-height: 1.2; margin: 0 0 30px; color: #2b211c; }
.nsc-h2 em, .nsc-h3 em { font-style: italic; color: #b5532c; }
.nsc-h3 { font-weight: 700; font-size: clamp(22px, 2.6vw, 30px); line-height: 1.25; margin: 0 0 16px; color: #2b211c; }
.nsc-lead { font-size: 16px; line-height: 1.6; color: #5a4c45; margin: -16px 0 26px; }
.nsc-sec img, .nsc-sec video { display: block; width: 100%; height: auto; }

/* slika/video ob besedilu */
.nsc-row2 { display: grid; grid-template-columns: 1fr 1fr; gap: 56px; align-items: center; }
.nsc-row2--rev .nsc-media { order: 2; }
.nsc-media img, .nsc-media video { aspect-ratio: 1 / 1; object-fit: cover; border-radius: 4px; box-shadow: 0 2px 4px rgba(60,30,15,.05), 0 14px 40px rgba(60,30,15,.10); }
.nsc-media--video video { aspect-ratio: 606 / 1080; max-width: 400px; margin: 0 auto; }
.nsc-copy p { font-size: 16px; line-height: 1.7; color: #5a4c45; margin: 0 0 14px; }
.nsc-copy p strong { color: #2b211c; font-weight: 600; }
.nsc-copy p.nsc-big { font-size: 19px; font-weight: 700; color: #2b211c; line-height: 1.45; margin-top: 6px; }

/* prije / poslije */
.nsc-ba { display: grid; grid-template-columns: 1fr 1fr; gap: 12px; }
.nsc-ba__item { position: relative; margin: 0; }
.nsc-ba__item img { aspect-ratio: 2 / 3; }
.nsc-ba__item figcaption { position: absolute; left: 10px; top: 10px; background: #fff; color: #2b211c; font-size: 12.5px; font-weight: 700; letter-spacing: .08em; text-transform: uppercase; padding: 5px 10px; border-radius: 6px; }
.nsc-ba__item:last-child figcaption { background: #b5532c; color: #fff; }

/* usporedba */
.nsc-cmp { width: 100%; border-collapse: collapse; font-size: 15px; background: #fff; border: 1px solid #ecd8cc; border-radius: 10px; overflow: hidden; }
.nsc-cmp th, .nsc-cmp td { padding: 13px 10px; border-bottom: 1px solid #f1e3da; text-align: center; vertical-align: middle; }
.nsc-cmp th:first-child, .nsc-cmp td:first-child { text-align: left; font-weight: 600; color: #2b211c; }
.nsc-cmp thead th { font-size: 14px; font-weight: 700; color: #2b211c; background: #fff; }
.nsc-cmp .is-ours { background: #f9ece5; }
.nsc-cmp thead th.is-ours { background: #b5532c; color: #fff; }
.nsc-cmp td span { display: inline-block; width: 26px; height: 26px; border-radius: 50%; line-height: 26px; font-weight: 800; font-size: 14px; }
.nsc-cmp td.is-yes span { background: #2e9d5b; color: #fff; }
.nsc-cmp td.is-no span { background: #e6dfdb; color: #2b211c; }

/* anketa */
.nsc-stats { display: grid; grid-template-columns: repeat(3, minmax(0, 1fr)); gap: 18px; }
.nsc-stat { background: #fff; border: 1px solid #ecd8cc; border-radius: 10px; padding: 24px 20px 20px; text-align: center; }
.nsc-stat strong { display: block; font-size: 44px; line-height: 1.1; font-weight: 700; color: #b5532c; margin: 0 0 10px; }
.nsc-stat p { font-size: 14.5px; line-height: 1.55; color: #5a4c45; margin: 0; }
.nsc-note { font-size: 12.5px; color: #7a6a62; margin: 18px 0 0; }

/* prednosti */
.nsc-badges { display: grid; grid-template-columns: repeat(4, minmax(0, 1fr)); gap: 18px; text-align: center; }
.nsc-badge img { width: 96px; height: 96px; object-fit: contain; margin: 0 auto 10px; }
.nsc-badge p { font-size: 15px; font-weight: 600; line-height: 1.4; color: #2b211c; margin: 0; }

/* zvjezdice */
.nsc-stars { display: inline-flex; gap: 3px; margin: 0 0 12px; vertical-align: middle; }
.nsc-stars i { font-style: normal; width: 22px; height: 22px; background: #00b67a; color: #fff; font-size: 15px; line-height: 22px; text-align: center; }
.nsc-stars i.is-off { background: #dcdce6; }

/* recenzije */
.nsc-summary { display: flex; align-items: center; justify-content: center; gap: 40px; margin: 0 0 34px; flex-wrap: wrap; }
.nsc-summary__score { display: flex; flex-direction: column; align-items: center; gap: 6px; }
.nsc-summary__score strong { font-size: 44px; line-height: 1; font-weight: 700; }
.nsc-summary__score .nsc-stars { margin: 0; }
.nsc-summary__score span { font-size: 14px; color: #5a4c45; }
.nsc-summary__bars { min-width: 280px; }
.nsc-bar { display: flex; align-items: center; gap: 10px; font-size: 14px; color: #5a4c45; margin: 0 0 6px; }
.nsc-bar__lbl { width: 30px; white-space: nowrap; }
.nsc-bar__track { flex: 1 1 auto; height: 9px; background: #efe1d8; border-radius: 6px; overflow: hidden; min-width: 160px; }
.nsc-bar__track span { display: block; height: 100%; background: #b5532c; }
.nsc-bar__n { width: 64px; white-space: nowrap; }
.nsc-revs { columns: 3; column-gap: 18px; }
.nsc-rv { background: #fff; border: 1px solid #ecd8cc; border-radius: 10px; overflow: hidden; break-inside: avoid; margin: 0 0 18px; display: inline-block; width: 100%; }
.nsc-rv__img img { aspect-ratio: 3 / 4; object-fit: cover; }
.nsc-rv__body { padding: 16px 18px 14px; }
.nsc-rv .nsc-stars { margin-bottom: 10px; }
.nsc-rv .nsc-stars i { width: 19px; height: 19px; font-size: 13px; line-height: 19px; }
.nsc-rv__txt { font-size: 14.5px; line-height: 1.6; color: #3d322c; margin: 0 0 12px; }
.nsc-rv__name { font-size: 13.5px; font-weight: 600; color: #2b211c; margin: 0; border-top: 1px solid #ecd8cc; padding-top: 12px; }
.nsc-rv__name span { font-weight: 400; color: #2e7d32; }

@media (max-width: 989px) {
  .nsc-revs { columns: 2; }
  .nsc-row2 { gap: 32px; }
  .nsc-badges { grid-template-columns: repeat(2, minmax(0, 1fr)); }
}
@media (max-width: 749px) {
  .nsc-sec { padding: 42px 0; }
  .nsc-wrap { padding: 0 16px; }
  .nsc-revs { columns: 1; }
  .nsc-row2 { grid-template-columns: 1fr; gap: 24px; }
  .nsc-row2--rev .nsc-media { order: 0; }
  .nsc-stats { grid-template-columns: 1fr; gap: 12px; }
  .nsc-cmp { font-size: 13px; }
  .nsc-cmp th, .nsc-cmp td { padding: 10px 6px; }
  .nsc-cmp thead th { font-size: 12px; }
  .nsc-badge img { width: 76px; height: 76px; }
  .nsc-badge p { font-size: 13.5px; }
}

/* galerija izdelka: sličice največ v 2 vrstah (5 na vrsto), ostale slike so dosegljive z drsenjem glavne slike */
.product_cat-orto-seatcover .flex-control-thumbs li:nth-child(n+11) { display: none !important; }

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
.woocommerce-product-details__short-description .nsc-tick {
  position: absolute !important; left: 0 !important; top: 1px !important;
  width: 21px; height: 21px; border-radius: 50%;
  background: #2f9e5f !important; color: #fff !important;
  font-size: 12px !important; font-weight: 800 !important; line-height: 21px !important;
  text-align: center !important; display: inline-block !important; }
.woocommerce-product-details__short-description p:first-of-type { font-size: 16px; line-height: 1.55; }
</style>
