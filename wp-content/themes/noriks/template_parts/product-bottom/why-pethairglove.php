<?php
/**
 * product-bottom: NORIKS PetHairGlove — rukavica za uklanjanje dlaka kućnih ljubimaca (orto-pethairglove).
 * Original: purepathshop.co/products/purepath-glove — vsebina in vrstni red 1:1 z originalom, oblika po NORIKS stilu
 * (predloga why-grillbasket.php / why-hands.php), poudarek po paleti originala (modra #1f568e, svetlo modro ozadje #eef4fa):
 *   1) 4 ikone pod nakupno škatlo (60-Day Risk-Free Guarantee / Clean Home / Fast Shipping / Safe on all fabrics)
 *      -> 4 kartice po NORIKS pogojih (30 dana za povrat, besplatna dostava iznad 70 €)
 *   2) "Built to Remove Hair - Not Just Move It Around" (4 kartice s krožnimi slikami) -> 4 kartice
 *   3) "One Swipe Is Enough" (video)                        -> utišan video ob besedilu
 *   4) "It Holds Everything Until You're Ready" (video)     -> utišan video ob besedilu (logotip YOMI PET na traku retuširan)
 *   5) "One Glove. Every Surface." (video)                  -> utišan video ob besedilu
 *   6) "Designed for Everyday Use" (video)                  -> utišan video ob besedilu
 *   7) "Cheap Gloves Cost You More in the Long Run" (tabela) -> NORIKS / Jeftine rukavice
 *   8) "See it in action" (5 videov)                         -> besedilo + 5 utišanih videov (v 5. videu vžgan napis
 *      "PurePath Glove!" prekrit -> "NORIKS rukavica!")
 *   9) "Trusted by 40k+ pet parents" (17 mnenj s fotografijami) -> Tisuće zadovoljnih vlasnika ljubimaca (1081 recenzija,
 *      ocena 4,7; 17 mnenj, 15 s fotografijo; fotografiji z vrečko z logotipom in z logotipom na embalaži nista preneseni)
 *  10) "See the difference instantly" (Before / After)        -> Prije / Poslije ob besedilu
 *  11) "Simple 3-Step Way To Use" (3 kartice)                 -> Jednostavna upotreba u 3 koraka
 *  12) "About PurePath™"                                      -> O rukavici NORIKS PetHairGlove (slika ob besedilu)
 * Na vseh slikah in videih je logotip znamke na rumenem traku rokavice retuširan.
 * Izpusceno: "Rated 4.7/5 By 40,000+", "2026 Top Rated Item", "Current batch is 85% sold out!", "Free shipping, tax included",
 * "60-day guarantee", darila v paketih (Flea Comb, Groomer Brush, Gift Bag), upsell "60 FREE Laundry Sheets",
 * gumbi "Get Your PurePath™ Glove Now", logotip in noga trgovine.
 * FAQ (7) je v reviews.php ($pethairglove_faq), mnenja v auto_reviews/HR_pethairglove.php, opis + nega v meta.php.
 * Slike in videi: img/pethairglove/ (nphg-…).
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$nphg      = get_template_directory_uri() . '/img/pethairglove/';
$nphg_path = get_template_directory() . '/img/pethairglove/';
$nphg_img  = function( $file, $alt, $cls = '' ) use ( $nphg, $nphg_path ) {
  if ( ! $file || ! file_exists( $nphg_path . $file ) ) { return ''; }
  return '<img src="' . esc_url( $nphg . $file ) . '" alt="' . esc_attr( $alt ) . '" loading="lazy"' . ( $cls ? ' class="' . esc_attr( $cls ) . '"' : '' ) . '>';
};
$nphg_video = function( $file, $label ) use ( $nphg, $nphg_path ) {
  if ( ! file_exists( $nphg_path . $file ) ) { return ''; }
  $poster = preg_replace( '/\.mp4$/', '-poster.webp', $file );
  return '<video src="' . esc_url( $nphg . $file ) . '"' . ( file_exists( $nphg_path . $poster ) ? ' poster="' . esc_url( $nphg . $poster ) . '"' : '' )
    . ' muted autoplay loop playsinline preload="metadata" aria-label="' . esc_attr( $label ) . '"></video>';
};
$nphg_stars = function( $n ) {
  $n = max( 0, min( 5, (int) $n ) );
  return '<span class="nphg-stars" aria-label="' . $n . ' od 5 zvjezdica">' . str_repeat( '★', $n ) . '<span class="nphg-stars__off">' . str_repeat( '★', 5 - $n ) . '</span></span>';
};

/* 1) ikone (po NORIKS pogojih) */
$nphg_icons = array(
  array( 'shield', '30 dana bez rizika', 'Isprobajte je na namještaju, u autu i na odjeći. Ako ne nadmaši svaki drugi alat za dlake koji ste dosad koristili, imate <strong>pravo na povrat u roku od 30 dana</strong>.' ),
  array( 'leaf', 'Čist dom. Manje otpada.', 'Ekološka zamjena za jednokratne proizvode. Samo je isperite pod slavinom, ostavite da se osuši na zraku i koristite ponovno – svaki put jednako učinkovito.' ),
  array( 'truck', 'Dostava s praćenjem', '<strong>Besplatna dostava za narudžbe iznad 70 €</strong>. Broj za praćenje pošiljke dobivate e-poštom, pa narudžbu pratite od slanja do svojih vrata.' ),
  array( 'fabric', 'Sigurna za sve tkanine', 'Baršun, mikrovlakna, traper, presvlake u autu – rukavica podiže dlake bez zapinjanja, izvlačenja niti i bez ostataka.' ),
);
$nphg_icon = function( $k ) {
  $p = array(
    'shield' => '<path d="M12 3l7 3v5c0 4.6-3 8.4-7 10-4-1.6-7-5.4-7-10V6l7-3z"/><path d="M8.5 12.2l2.4 2.4 4.6-4.8"/>',
    'leaf'   => '<path d="M5 19c0-8 5-13 14-14-1 9-6 14-14 14z"/><path d="M5 19l7-7"/>',
    'truck'  => '<path d="M3 6h11v9H3z"/><path d="M14 9h4l3 3v3h-7"/><circle cx="7" cy="17.5" r="1.8"/><circle cx="17" cy="17.5" r="1.8"/>',
    'fabric' => '<path d="M4 7c2.7-2 5.3-2 8 0s5.3 2 8 0"/><path d="M4 12c2.7-2 5.3-2 8 0s5.3 2 8 0"/><path d="M4 17c2.7-2 5.3-2 8 0s5.3 2 8 0"/>',
  );
  return '<svg viewBox="0 0 24 24" width="30" height="30" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">' . $p[ $k ] . '</svg>';
};

/* 2) kartice s krožnimi slikami */
$nphg_cards = array(
  array( 'nphg-s02-1-vuce.webp', 'Elektrostatska mrežica rukavice NORIKS PetHairGlove', 'Vuče, ne gura.', 'Elektrostatska mrežica od 5 mm poništava statički naboj koji drži dlake u tkanini i izvlači ih iz korijena – jednim potezom.' ),
  array( 'nphg-s02-2-dlake.webp', 'Dlake kućnih ljubimaca u tkanini', 'Za svaku vrstu dlake', 'Kratka, gruba, fina ili duga – elektrostatska mrežica hvata sve. Za sve pasmine pasa, ali i za mačke, zečeve i druge ljubimce.' ),
  array( 'nphg-s02-3-auto.webp', 'Rukavica s dlakama skupljenim sa sjedala u autu', 'Od kauča do auta.', 'Kauč, tepih, sjedalo u autu, posteljina, odjeća, krevet za ljubimca – djeluje na svemu, bez mijenjanja alata, prilagođavanja tehnike ili oštećivanja tkanine.' ),
  array( 'nphg-s02-4-rezultati.webp', 'Tepih u autu prije i poslije čišćenja rukavicom', 'Bez napora. Samo rezultati.', 'Većina sredstava za dlake ljubimaca skupi samo ono što je na površini. NORIKS PetHairGlove izvlači dlake koje su utkane u vlakna.' ),
);

/* 3–6) sekcije z videi */
$nphg_vsec = array(
  array( 'nphg-s03-jedan-potez.mp4', 'Jedan potez rukavicom NORIKS PetHairGlove po kauču', 'Jednim potezom', 'Dovoljan je <em>jedan potez.</em>',
    'Većina sredstava za dlake samo gura dlake uokolo. <strong>NORIKS PetHairGlove hvata dlake zaglavljene duboko u tkanini</strong> i izvlači ih.',
    array( 'Hvata <strong>duboko ugrađene dlake</strong> u jednom prolazu, bez ponavljanja poteza', 'Bez ribanja, <strong>bez povlačenja naprijed-natrag</strong>, bez umora ruke', 'Djeluje čak i na finim, <strong>gotovo nevidljivim dlakama</strong> koje se vide tek na sunčevoj svjetlosti' ) ),
  array( 'nphg-s04-drzi-dlake.mp4', 'Skupljene dlake ostaju na mrežici rukavice', 'Ništa ne pada natrag', 'Drži sve <em>dok niste spremni.</em>',
    'Drugi alati pokupe dlake i ispuste ih negdje drugdje na istoj površini. NORIKS PetHairGlove <strong>zadržava skupljene dlake na mrežici</strong> – ništa ne pada natrag, ništa ne ostaje za vama. Kad završite, samo ih skinite.',
    array( 'Dlake ostaju <strong>na rukavici</strong>, a ne raznose se po sobi', '<strong>Skupljenu grudicu</strong> skinete čisto, u jednom potezu', '<strong>Pokriva veću površinu</strong> po potezu, pa ste <strong>brže gotovi</strong>' ) ),
  array( 'nphg-s05-svaka-povrsina.mp4', 'Čišćenje tepiha i kauča rukavicom NORIKS PetHairGlove', 'Za cijeli dom i auto', 'Jedna rukavica. <em>Svaka površina.</em>',
    'Mnogi je kupe za auto. Onda prestanu kupovati valjke za dlačice, a usisavač ostaje u ormaru.',
    array( '<strong>Zamjenjuje</strong> valjke za dlačice, usisavače i strugalice', 'Djeluje na <strong>kaučima, odjeći, tepisima, krevetima i sjedalima u autu</strong>', '<strong>Bez dopuna, bez baterija</strong> – samo je isperite i koristite ponovno', 'Dovoljno je mala da stane u auto ili u torbicu' ) ),
  array( 'nphg-s06-svakodnevno.mp4', 'Brzo čišćenje dlaka s fotelje', 'Uvijek pri ruci', 'Osmišljena za <em>svakodnevnu upotrebu.</em>',
    'Najbolji alat za čišćenje je onaj za kojim stvarno posegnete. Dovoljno je lagana da stoji na pultu i dovoljno brza da je zgrabite između obaveza.',
    array( '<strong>Pristaje svakoj veličini ruke</strong>, za ljevake i dešnjake', 'Skupljene dlake skinete u <strong>jednoj čistoj grudici</strong>', '<strong>Bez nereda</strong>, bez dlaka koje padaju natrag', '<strong>Spremite je bilo gdje</strong>, i u pretinac za rukavice u autu' ) ),
);

/* 7) usporedba */
$nphg_cmp = array(
  'Elektrostatska mrežica od 5 mm',
  'Originalni dizajn rukavice',
  'Izvlači ugrađene dlake',
  'Sve površine i tkanine',
  'Ojačani šavovi – ne ljušte se i ne trgaju',
  'Vodootporan materijal',
  'Jednokratna kupnja – bez dopuna',
);

/* 8) videi "na djelu" */
$nphg_vids = array(
  array( 'nphg-s08-akcija-1.mp4', 'Čišćenje tepiha u kamionetu' ),
  array( 'nphg-s08-akcija-2.mp4', 'Čišćenje mačjih dlaka s prekrivača' ),
  array( 'nphg-s08-akcija-3.mp4', 'Čišćenje dlaka s tepiha u dnevnom boravku' ),
  array( 'nphg-s08-akcija-4.mp4', 'Čišćenje dlaka s kauča' ),
  array( 'nphg-s08-akcija-5-hr.mp4', 'Rukavica NORIKS skuplja dlake s tepiha' ),
);

/* 9) mnenja (imena lokalizirana) */
$nphg_rv = array(
  array( 'nphg-rv-01.webp', 'Moj zlatni retriver previše se linja! Ova rukavica stvara statički naboj koji dlake s kauča i sjedala u autu odmah smota. Pravi spas.', 'Aleksandar B.' ),
  array( 'nphg-rv-02.webp', 'Nevjerojatna za duboko ugrađene pseće dlake! Bez napora izvuče svaku dlaku, a materijal je odlične kvalitete!', 'Nikolina A.' ),
  array( 'nphg-rv-03.webp', 'Napokon jednostavan način da uklonim mačje dlake s namještaja bez nereda. Brza je i radi kao čarolija!', 'Emina S.' ),
  array( 'nphg-rv-04.webp', 'Jako sam impresionirana! Materijal je kvalitetan i izdržljiv, a pseće dlake uklanja puno bolje nego što sam očekivala. Kauč mi opet izgleda kao nov!', 'Lana G.' ),
  array( 'nphg-rv-05.webp', 'Nositi crno bilo je nemoguće dok nisam pronašla ovu rukavicu. Jedan brzi potez ukloni svaku bijelu dlaku s mojih crnih traperica i dukserica. Napokon izlazim iz kuće, a da ne izgledam kao da sam se valjala po tepihu.', 'Sara J.' ),
  array( 'nphg-rv-06.webp', 'Dosadne dlake mog haskija zabiju se posvuda po autu. Ova rukavica je jedini alat za dlake koji ih je stvarno izvukao. Više mi ne treba godišnje dubinsko čišćenje auta!', 'Katarina C.' ),
  array( 'nphg-rv-07.webp', 'Potpuno sam prestao kupovati jednokratne valjke. Ova jedna višekratna rukavica rješava sve – od auta do kauča – i isplati se za tjedan dana.', 'Robert K.' ),
  array( 'nphg-rv-08.webp', 'Putovanja s mojom čivavom uništila su unutrašnjost auta dok nisam kupila ovu rukavicu. Držim je u središnjoj konzoli, a sjedala izgledaju kao nova!', 'Snježana H.' ),
  array( 'nphg-rv-09.webp', 'Materijal rukavice je vrhunske kvalitete i odmah se vidi da je izdržljiva. Definitivno se isplati!', 'Krešimir D.' ),
  array( 'nphg-rv-10.webp', 'Volim svog rat terijera, ali njegova kratka, gruba dlaka zabija se u sjedala u autu kao sitne iglice. Ova rukavica jedina stvarno izvlači te ugrađene dlake!', 'Maja O.' ),
  array( '', 'Jako sam zadovoljna rukavicom. Izrađena je od odličnog materijala i djeluje vrhunski, a ne jeftino kao druge koje sam probala.', 'Martina D.' ),
  array( 'nphg-rv-12.webp', 'Čudesno djeluje na kauču i stolicama! Mačje dlake pokupi u nekoliko sekundi i vrlo se lako čisti.', 'Ana H.' ),
  array( '', 'Kupio sam je na poklon sestri koja ima dva zeca i oduševljena je. Sigurno kupujem još.', 'Edin D.' ),
  array( 'nphg-rv-14.webp', 'Čivave se linjaju više nego što mislite! Ova rukavica mi je spas za tajice prije izlaska iz kuće – sitne dlake pokupi odmah.', 'Lidija P.' ),
  array( 'nphg-rv-15.webp', 'Savršeno skuplja fine, lepršave dlake mog zeca i dugodlake mačke. Statički naboj skida ih s baršunastih jastuka bez oštećenja.', 'Jadranka C.' ),
  array( 'nphg-rv-16.webp', 'Nevjerojatna za čišćenje ugrađenih psećih dlaka! Podiže dlake bez ikakvog oštećenja tkanine. Obožavam je!', 'Eva D.' ),
  array( 'nphg-rv-17.webp', 'Koristio sam je na tepisima u autu i iskreno sam se iznenadio – izvukla je puno više psećih dlaka nego moj usisavač. Vrlo jednostavna za upotrebu i djeluje u nekoliko sekundi. Definitivno se isplati!', 'Hrvoje P.' ),
);

/* 11) tri koraka */
$nphg_steps = array(
  array( 'nphg-s11-korak-1.webp', 'Rukavica navučena na ruku', '1. korak', 'Navucite je', 'Navlači se na ruku bilo koje veličine u nekoliko sekundi. Sigurno, udobno i spremno – bez namještanja i petljanja.' ),
  array( 'nphg-s11-korak-2.webp', 'Dlake skupljene na mrežici rukavice', '2. korak', 'Prijeđite i skupite', 'Prijeđite preko bilo koje površine. Dlake se podižu i zadržavaju na mrežici dok se krećete – gledajte kako se to događa pred vašim očima. Uživajte u zadovoljstvu čišćenja!' ),
  array( 'nphg-s11-korak-3.webp', 'Ispiranje rukavice pod tekućom vodom', '3. korak', 'Čišćenje traje nekoliko sekundi', 'Kad završite, držite rukavicu pod tekućom vodom i gledajte kako se dlake ispiru. Ako želite, operite je u perilici. U oba slučaja suha je i spremna prije nego što vam ponovno zatreba.' ),
);

$nphg_n = 0; // števec sekcij za izmenična ozadja
$nphg_cls = function() use ( &$nphg_n ) { $nphg_n++; return ( $nphg_n % 2 ) ? ' nphg-tint' : ''; };
$nphg_side = 0; // izmenjava strani slika / besedilo
?>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap">

<!-- 1) IKONE POD NAKUPNO ŠKATLO (po NORIKS pogojih) -->
<section class="nphg-sec<?php echo $nphg_cls(); ?>">
  <div class="nphg-wrap">
    <div class="nphg-icons">
      <?php foreach ( $nphg_icons as $ic ) : ?>
      <div class="nphg-icon">
        <span class="nphg-icon__ico"><?php echo $nphg_icon( $ic[0] ); ?></span>
        <h3><?php echo esc_html( $ic[1] ); ?></h3>
        <p><?php echo wp_kses_post( $ic[2] ); ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- 2) STVORENA DA UKLANJA DLAKE ("Built to Remove Hair - Not Just Move It Around") — 4 kartice -->
<section class="nphg-sec<?php echo $nphg_cls(); ?>">
  <div class="nphg-wrap">
    <p class="nphg-kicker nphg-c">Elektrostatska mrežica od 5 mm</p>
    <h2 class="nphg-h2 nphg-c">Stvorena da uklanja dlake – <em>a ne da ih samo premješta.</em></h2>
    <div class="nphg-cards">
      <?php foreach ( $nphg_cards as $c ) : ?>
      <article class="nphg-card">
        <div class="nphg-card__img"><?php echo $nphg_img( $c[0], $c[1] ); ?></div>
        <h3><?php echo esc_html( $c[2] ); ?></h3>
        <p><?php echo esc_html( $c[3] ); ?></p>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<?php foreach ( $nphg_vsec as $v ) : $nphg_side++; ?>
<!-- 3–6) <?php echo esc_html( wp_strip_all_tags( $v[3] ) ); ?> — utišan video ob besedilu -->
<section class="nphg-sec<?php echo $nphg_cls(); ?>">
  <div class="nphg-wrap">
    <div class="nphg-row2<?php echo ( $nphg_side % 2 ) ? '' : ' nphg-row2--rev'; ?>">
      <div class="nphg-media nphg-vid"><?php echo $nphg_video( $v[0], $v[1] ); ?></div>
      <div class="nphg-copy">
        <p class="nphg-kicker"><?php echo esc_html( $v[2] ); ?></p>
        <h2 class="nphg-h3"><?php echo wp_kses_post( $v[3] ); ?></h2>
        <p><?php echo wp_kses_post( $v[4] ); ?></p>
        <ul class="nphg-list">
          <?php foreach ( $v[5] as $li ) : ?><li><?php echo wp_kses_post( $li ); ?></li><?php endforeach; ?>
        </ul>
      </div>
    </div>
  </div>
</section>
<?php endforeach; ?>

<!-- 7) JEFTINE RUKAVICE NA KRAJU KOŠTAJU VIŠE ("Cheap Gloves Cost You More in the Long Run") — tabela -->
<section class="nphg-sec<?php echo $nphg_cls(); ?>">
  <div class="nphg-wrap nphg-wrap--narrow">
    <p class="nphg-kicker nphg-c">Usporedba</p>
    <h2 class="nphg-h2 nphg-c">Jeftine rukavice <em>na kraju koštaju više.</em></h2>
    <p class="nphg-lead nphg-c">Postoje i jeftinije opcije. Ovo su razlike koje su stvarno važne.</p>
    <div class="nphg-cmp" role="table" aria-label="Usporedba: NORIKS PetHairGlove i jeftine rukavice">
      <div class="nphg-cmp__row nphg-cmp__head" role="row">
        <span role="columnheader" class="nphg-cmp__lbl">Značajke</span>
        <span role="columnheader" class="nphg-cmp__us">NORIKS</span>
        <span role="columnheader">Jeftine rukavice</span>
      </div>
      <?php foreach ( $nphg_cmp as $r ) : ?>
      <div class="nphg-cmp__row" role="row">
        <span role="cell" class="nphg-cmp__lbl"><?php echo esc_html( $r ); ?></span>
        <span role="cell" class="nphg-cmp__us"><span class="nphg-yes" aria-label="da">✓</span></span>
        <span role="cell"><span class="nphg-no" aria-label="ne">✕</span></span>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- 8) POGLEDAJTE JE NA DJELU ("See it in action") — besedilo + 5 utišanih videov -->
<section class="nphg-sec<?php echo $nphg_cls(); ?>">
  <div class="nphg-wrap">
    <div class="nphg-row2 nphg-row2--vids">
      <div class="nphg-copy">
        <p class="nphg-kicker">Pogledajte je na djelu</p>
        <h2 class="nphg-h3">Pravi namještaj, pravi ljubimci – <em>u stvarnom vremenu.</em></h2>
        <p>Pogledajte kako NORIKS PetHairGlove uklanja dlake s pravog namještaja, tepiha i sjedala u autu – bez montaže i bez ubrzavanja snimke.</p>
        <p class="nphg-big">Jedan potez – i dlake su na rukavici.</p>
      </div>
      <div class="nphg-vids">
        <?php foreach ( $nphg_vids as $v ) : $html = $nphg_video( $v[0], $v[1] ); if ( ! $html ) { continue; } ?>
        <div class="nphg-vids__item"><?php echo $html; ?></div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>

<!-- 9) TISUĆE ZADOVOLJNIH VLASNIKA LJUBIMACA ("Trusted by 40k+ pet parents") — 17 mnenj -->
<section class="nphg-sec<?php echo $nphg_cls(); ?>">
  <div class="nphg-wrap">
    <p class="nphg-kicker nphg-c">Tisuće zadovoljnih vlasnika ljubimaca</p>
    <h2 class="nphg-h2 nphg-c">Vjeruju joj <em>tisuće vlasnika ljubimaca.</em></h2>
    <p class="nphg-rating nphg-c"><?php echo $nphg_stars( 5 ); ?> <strong>4,7 / 5</strong> · 1081 recenzija</p>
    <div class="nphg-rv" tabindex="0" aria-label="Mnenja kupaca">
      <?php foreach ( $nphg_rv as $r ) : ?>
      <article class="nphg-rcard<?php echo $r[0] ? '' : ' nphg-rcard--txt'; ?>">
        <?php if ( $r[0] ) : ?><div class="nphg-rcard__img"><?php echo $nphg_img( $r[0], 'NORIKS PetHairGlove – fotografija kupca' ); ?></div><?php endif; ?>
        <div class="nphg-rcard__body">
          <?php if ( ! $r[0] ) : ?><span class="nphg-q" aria-hidden="true">“</span><?php endif; ?>
          <?php echo $nphg_stars( 5 ); ?>
          <p class="nphg-rcard__txt">„<?php echo esc_html( $r[1] ); ?>”</p>
          <p class="nphg-rcard__name"><?php echo esc_html( $r[2] ); ?> <span class="nphg-ok">✓ Potvrđena kupnja</span></p>
        </div>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- 10) POGLEDAJTE RAZLIKU ODMAH ("See the difference instantly") — Prije / Poslije ob besedilu -->
<section class="nphg-sec<?php echo $nphg_cls(); ?>">
  <div class="nphg-wrap">
    <div class="nphg-row2">
      <div class="nphg-copy">
        <p class="nphg-kicker">Prije i poslije</p>
        <h2 class="nphg-h3">Pogledajte razliku <em>odmah.</em></h2>
        <p><strong>Prije:</strong> dlake su toliko duboko utkane da izgledaju kao dio tkanine.</p>
        <p><strong>Poslije:</strong> jedan potez, čista površina. Bez drugog pokušaja.</p>
      </div>
      <div class="nphg-ba">
        <figure><span class="nphg-ba__tag">Prije</span><?php echo $nphg_img( 'nphg-s10-prije.webp', 'Kauč prekriven mačjim dlakama prije čišćenja' ); ?></figure>
        <figure><span class="nphg-ba__tag nphg-ba__tag--on">Poslije</span><?php echo $nphg_img( 'nphg-s10-poslije.webp', 'Čist kauč poslije jednog poteza rukavicom NORIKS PetHairGlove' ); ?></figure>
      </div>
    </div>
  </div>
</section>

<!-- 11) JEDNOSTAVNA UPOTREBA U 3 KORAKA ("Simple 3-Step Way To Use") — 3 kartice -->
<section class="nphg-sec<?php echo $nphg_cls(); ?>">
  <div class="nphg-wrap">
    <p class="nphg-kicker nphg-c">Kako se koristi</p>
    <h2 class="nphg-h2 nphg-c">Jednostavna upotreba <em>u 3 koraka.</em></h2>
    <div class="nphg-steps">
      <?php foreach ( $nphg_steps as $s ) : ?>
      <article class="nphg-step">
        <div class="nphg-step__img"><?php echo $nphg_img( $s[0], $s[1] ); ?></div>
        <div class="nphg-step__body">
          <p class="nphg-step__tag"><?php echo esc_html( $s[2] ); ?></p>
          <h3><?php echo esc_html( $s[3] ); ?></h3>
          <p><?php echo esc_html( $s[4] ); ?></p>
        </div>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- 12) O RUKAVICI NORIKS PETHAIRGLOVE ("About PurePath™") — slika ob besedilu -->
<section class="nphg-sec<?php echo $nphg_cls(); ?>">
  <div class="nphg-wrap">
    <div class="nphg-row2">
      <div class="nphg-media"><?php echo $nphg_img( 'nphg-s12-o-nama.webp', 'NORIKS PetHairGlove na majici pokraj srca od skupljenih dlaka', 'nphg-img--free' ); ?></div>
      <div class="nphg-copy">
        <p class="nphg-kicker">Naša priča</p>
        <h2 class="nphg-h3">Alati za ljubimce <em>koji stvarno djeluju.</em></h2>
        <p>NORIKS PetHairGlove nastala je oko jedne jednostavne ideje: <strong>vlasnici ljubimaca zaslužuju alate koji stvarno djeluju</strong> – alate čije održavanje ne košta bogatstvo, koji ne štete planetu i koji se ne raspadnu nakon nekoliko tjedana.</p>
        <p>Bilo nam je dosta istog frustrirajućeg kruga: kupite valjak za dlačice, potrošite listove, kupite novi – i tako ukrug. NORIKS PetHairGlove napravljena je da taj krug prekine zauvijek.</p>
        <p><strong>Svaki proizvod testiramo</strong> na izdržljivost, sigurnost i stvarnu učinkovitost – jer ih i sami koristimo kod kuće. <strong>Tisuće vlasnika ljubimaca</strong> već su se prebacile, a mi smo ponosni što izrađujemo alate koji im olakšavaju život.</p>
        <p class="nphg-big">Uz NORIKS imate pravo na povrat u roku od 30 dana.</p>
      </div>
    </div>
  </div>
</section>

<style>
/* NORIKS stil (predloga why-grillbasket.php / why-hands.php): oznaka + naslov z ležečim poudarkom, slika ali video ob
   besedilu, izmenjujoča ozadja in strani. Paleta originala: modra #1f568e, svetlo modra #eef4fa, temno #14233a. */
.nphg-sec { padding: 60px 0; font-family: 'Poppins', system-ui, -apple-system, 'Segoe UI', Roboto, Arial, sans-serif; color: #14233a; background: #fff; }
.nphg-sec * { box-sizing: border-box; }
.nphg-tint { background: #eef4fa; }
.nphg-wrap { width: 100%; max-width: 1200px; margin: 0 auto; padding: 0 24px; }
.nphg-wrap--narrow { max-width: 900px; }
.nphg-c { text-align: center; }
.nphg-sec h2, .nphg-sec h3 { font-family: inherit; text-transform: none; letter-spacing: 0; }
.nphg-kicker, .nphg-copy p.nphg-kicker { font-size: 12.5px; line-height: 1.4; font-weight: 700; letter-spacing: .14em; text-transform: uppercase; color: #1f568e; margin: 0 0 10px; }
.nphg-h2 { font-weight: 700; font-size: clamp(25px, 3.1vw, 36px); line-height: 1.2; margin: 0 0 18px; color: #14233a; }
.nphg-h2 em, .nphg-h3 em { font-style: italic; color: #1f568e; }
.nphg-h3 { font-weight: 700; font-size: clamp(22px, 2.6vw, 30px); line-height: 1.25; margin: 0 0 16px; color: #14233a; }
.nphg-sec img { display: block; width: 100%; height: auto; }
.nphg-lead { max-width: 760px; margin: 0 auto 28px; font-size: 16.5px; line-height: 1.7; color: #45526a; }

/* 1) ikone */
.nphg-icons { display: grid; grid-template-columns: repeat(4, minmax(0, 1fr)); gap: 18px; }
.nphg-icon { background: #fff; border: 1px solid #cfdcec; border-radius: 10px; padding: 22px 18px; text-align: center; box-shadow: 0 2px 10px rgba(20,35,58,.05); }
.nphg-icon__ico { display: inline-flex; align-items: center; justify-content: center; width: 58px; height: 58px; border-radius: 50%; background: #1f568e; color: #fff; margin-bottom: 12px; }
.nphg-icon h3 { font-size: 16.5px; font-weight: 700; line-height: 1.35; color: #14233a; margin: 0 0 8px; }
.nphg-icon p { font-size: 14.5px; line-height: 1.6; color: #45526a; margin: 0; }
.nphg-icon p strong { color: #14233a; font-weight: 600; }

/* 2) kartice s krožnimi slikami */
.nphg-cards { display: grid; grid-template-columns: repeat(4, minmax(0, 1fr)); gap: 18px; margin-top: 10px; }
.nphg-card { background: #fff; border: 1px solid #cfdcec; border-radius: 10px; padding: 24px 18px 22px; text-align: center; box-shadow: 0 2px 10px rgba(20,35,58,.06); }
.nphg-card__img { width: 130px; height: 130px; margin: 0 auto 16px; border-radius: 50%; overflow: hidden; border: 3px solid #dce8f5; }
.nphg-card__img img { width: 100%; height: 100%; object-fit: cover; }
.nphg-card h3 { font-size: 17px; font-weight: 700; color: #14233a; margin: 0 0 8px; line-height: 1.35; }
.nphg-card p { font-size: 14.5px; line-height: 1.6; color: #45526a; margin: 0; }

/* slika / video ob besedilu */
.nphg-row2 { display: grid; grid-template-columns: 1fr 1fr; gap: 56px; align-items: center; }
.nphg-row2--rev .nphg-media { order: 2; }
.nphg-media > img, .nphg-vid video { border-radius: 10px; box-shadow: 0 2px 4px rgba(20,35,58,.05), 0 14px 40px rgba(20,35,58,.10); max-width: 540px; margin: 0 auto; aspect-ratio: 1 / 1; object-fit: cover; background: #fff; }
.nphg-media > img.nphg-img--free { aspect-ratio: auto; object-fit: contain; }
.nphg-vid video { display: block; width: 100%; height: auto; }
.nphg-copy p { font-size: 16px; line-height: 1.7; color: #45526a; margin: 0 0 14px; }
.nphg-copy p strong { color: #14233a; font-weight: 600; }
.nphg-sec p.nphg-big { font-size: 19px; font-weight: 700; color: #14233a; line-height: 1.45; margin-top: 6px; }
.nphg-list { list-style: none; margin: 4px 0 0; padding: 0; }
.nphg-list li { position: relative; padding-left: 32px; margin: 0 0 11px; font-size: 15.5px; line-height: 1.55; color: #45526a; }
.nphg-list li strong { color: #14233a; font-weight: 600; }
.nphg-list li::before { content: "✓"; position: absolute; left: 0; top: 1px; width: 21px; height: 21px; border-radius: 50%; background: #1f568e; color: #fff; font-size: 12px; font-weight: 800; line-height: 21px; text-align: center; }

/* 7) usporedba */
.nphg-cmp { margin: 8px auto 0; max-width: 720px; border-radius: 10px; overflow: hidden; border: 1px solid #cfdcec; background: #fff; }
.nphg-cmp__row { display: grid; grid-template-columns: 2fr 1fr 1fr; align-items: center; border-top: 1px solid #e3ebf5; }
.nphg-cmp__row:first-child { border-top: 0; }
.nphg-cmp__row > span { padding: 13px 8px; text-align: center; font-size: 14.5px; color: #45526a; }
.nphg-cmp__row > span.nphg-cmp__lbl { text-align: left; padding-left: 18px; font-weight: 600; color: #14233a; }
.nphg-cmp__head > span { font-size: 12.5px; font-weight: 700; text-transform: uppercase; letter-spacing: .06em; color: #5a6275; }
.nphg-cmp__row > span.nphg-cmp__us { background: #1f568e; color: #fff; }
.nphg-cmp__head > span.nphg-cmp__us { color: #fff; font-size: 14px; letter-spacing: .1em; }
.nphg-yes, .nphg-no { display: inline-block; width: 22px; height: 22px; border-radius: 50%; font-size: 12px; font-weight: 800; line-height: 22px; text-align: center; }
.nphg-cmp__us .nphg-yes { background: #fff; color: #1f568e; }
.nphg-no { background: #f6dcdc; color: #c0392b; }

/* 8) videi */
.nphg-row2--vids { grid-template-columns: 1fr 1.5fr; }
.nphg-vids { display: grid; grid-template-columns: repeat(3, minmax(0, 1fr)); gap: 10px; }
.nphg-vids__item { border-radius: 10px; overflow: hidden; background: #14233a; aspect-ratio: 9 / 16; box-shadow: 0 2px 10px rgba(20,35,58,.12); }
.nphg-vids__item video { display: block; width: 100%; height: 100%; object-fit: cover; }

/* 9) mnenja (vodoravni seznam, brez JS) */
.nphg-rating { font-size: 15px; color: #45526a; margin: -6px 0 24px; }
.nphg-rating strong { color: #14233a; }
.nphg-rv { display: grid; grid-auto-flow: column; grid-auto-columns: calc((100% - 54px) / 4); gap: 18px; overflow-x: auto; scroll-snap-type: x mandatory; padding: 4px 2px 14px; -webkit-overflow-scrolling: touch; }
.nphg-rcard { scroll-snap-align: start; background: #fff; border: 1px solid #cfdcec; border-radius: 10px; overflow: hidden; display: flex; flex-direction: column; box-shadow: 0 2px 10px rgba(20,35,58,.05); }
.nphg-rcard__img img { aspect-ratio: 1 / 1; object-fit: cover; }
.nphg-rcard__body { padding: 14px 16px 16px; }
.nphg-rcard__txt { font-size: 14.5px; line-height: 1.6; color: #2c3a52; margin: 8px 0 10px; font-style: italic; }
.nphg-rcard__name { font-size: 13.5px; font-weight: 600; color: #14233a; margin: 0; }
.nphg-rcard--txt { background: #1f568e; border-color: #1f568e; }
.nphg-rcard--txt .nphg-rcard__txt { color: #fff; font-size: 16px; font-style: normal; font-weight: 500; }
.nphg-rcard--txt .nphg-rcard__name { color: #eef4fa; }
.nphg-rcard--txt .nphg-ok { color: #cfe6ff; }
.nphg-rcard--txt .nphg-stars__off { color: rgba(255,255,255,.35); }
.nphg-q { display: block; font-family: Georgia, serif; font-size: 46px; line-height: .8; color: #9cc3ea; }

/* 10) prije / poslije */
.nphg-ba { display: grid; grid-template-columns: 1fr 1fr; gap: 12px; max-width: 560px; margin: 0 auto; background: #fff; border-radius: 12px; padding: 12px; box-shadow: 0 2px 4px rgba(20,35,58,.05), 0 14px 40px rgba(20,35,58,.10); }
.nphg-ba figure { position: relative; margin: 0; }
.nphg-ba img { border-radius: 8px; aspect-ratio: 564 / 618; object-fit: cover; }
.nphg-ba__tag { position: absolute; top: 10px; left: 50%; transform: translateX(-50%); background: #e3ebf5; color: #14233a; font-size: 12.5px; font-weight: 600; border-radius: 999px; padding: 3px 14px; z-index: 1; }
.nphg-ba__tag--on { background: #1f568e; color: #fff; }

/* 11) koraki */
.nphg-steps { display: grid; grid-template-columns: repeat(3, minmax(0, 1fr)); gap: 20px; }
.nphg-step { background: #fff; border: 1px solid #cfdcec; border-radius: 10px; overflow: hidden; box-shadow: 0 2px 10px rgba(20,35,58,.06); display: flex; flex-direction: column; }
.nphg-step__img img { aspect-ratio: 660 / 530; object-fit: cover; }
.nphg-step__body { padding: 18px 20px 20px; }
.nphg-step__body p.nphg-step__tag { display: inline-block; background: #1f568e; color: #fff; border-radius: 999px; padding: 4px 12px; font-size: 12.5px; font-weight: 600; text-transform: uppercase; letter-spacing: .06em; margin: 0 0 10px; }
.nphg-step__body h3 { font-size: 18px; font-weight: 700; line-height: 1.35; color: #14233a; margin: 0 0 8px; }
.nphg-step__body p { font-size: 15px; line-height: 1.65; color: #45526a; margin: 0; }

/* ocjene */
.nphg-stars { color: #f2a516; letter-spacing: 1px; font-size: 15px; }
.nphg-stars__off { color: #d3dae4; }
.nphg-ok { color: #2f9e5f; font-weight: 600; font-size: 12px; margin-left: 4px; font-style: normal; }

@media (max-width: 989px) {
  .nphg-row2 { gap: 32px; }
  .nphg-icons, .nphg-cards { grid-template-columns: 1fr 1fr; }
  .nphg-rv { grid-auto-columns: calc((100% - 18px) / 2); }
  .nphg-row2--vids { grid-template-columns: 1fr; }
}
@media (max-width: 749px) {
  .nphg-sec { padding: 42px 0; }
  .nphg-wrap { padding: 0 16px; }
  .nphg-row2 { grid-template-columns: 1fr; gap: 24px; }
  .nphg-row2--rev .nphg-media { order: 0; }
  .nphg-icons, .nphg-cards { gap: 12px; }
  .nphg-icon, .nphg-card { padding: 16px 12px; }
  .nphg-card__img { width: 100px; height: 100px; }
  .nphg-steps { grid-template-columns: 1fr; }
  .nphg-vids { grid-template-columns: repeat(2, minmax(0, 1fr)); }
  .nphg-rv { grid-auto-columns: 78%; gap: 12px; }
  .nphg-cmp__row > span { padding: 10px 4px; font-size: 13px; }
  .nphg-cmp__row > span.nphg-cmp__lbl { padding-left: 10px; }
  .nphg-cmp__head > span { font-size: 10.5px; letter-spacing: .02em; }
}
@media (max-width: 480px) {
  .nphg-icons, .nphg-cards { grid-template-columns: 1fr; }
}

/* galerija izdelka: sličice največ v 2 vrstah (5 na vrsto), ostale slike so dosegljive z drsenjem glavne slike */
.product_cat-orto-pethairglove .flex-control-thumbs li:nth-child(n+11) { display: none !important; }

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
.woocommerce-product-details__short-description .nphg-tick {
  position: absolute !important; left: 0 !important; top: 1px !important;
  width: 21px; height: 21px; border-radius: 50%;
  background: #2f9e5f !important; color: #fff !important;
  font-size: 12px !important; font-weight: 800 !important; line-height: 21px !important;
  text-align: center !important; display: inline-block !important; }
.woocommerce-product-details__short-description p:first-of-type { font-size: 16px; line-height: 1.55; }
</style>
