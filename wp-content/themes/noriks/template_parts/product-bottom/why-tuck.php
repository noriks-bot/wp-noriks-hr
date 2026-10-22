<?php
/**
 * product-bottom: NORIKS Tuck — oblikujuce kratke hlacice visokog struka (orto-tuck).
 * Original: bellashapewear.com/products/tuck-n-lift-seamless-slip-short — vsebina 1:1 z originalom
 * (isto stevilo sekcij, isti vrstni red, ista besedila in slike), oblika po NORIKS stilu (predloga why-hands.php):
 * sekcije s sliko so vedno v dveh stolpcih (slika / besedilo, strani se izmenjujeta), ozadja se izmenjujejo.
 *   1) Dosad ste morali birati (samo besedilo, 2 kartici)
 *   2) Super Stay™ tehnologija (slika z oznakami lijevo | besedilo, primerjava, savjet, citat, ikone)
 *   3) Za veliki dan i za svaki dan (besedilo, statistika, 3 mnenja | 2 sliki desno)
 *   4) Odjenite haljinu koju ste dosad izbjegavali (4 slike lijevo | 4 prednosti)
 *   5) Pronadite svoju velicinu za 10 sekundi (samo besedilo: tablica iz noriks_tuck_sizes(), kompresija)
 *   6) Kratke hlacice ili tange? (besedilo | 2 sliki desno)
 *   7) Nije svako oblikujuce rublje jednako izradeno (primerjalna tabela)
 *   8) Vecina zena uzme 2+ (slika paketa lijevo | ponuda 2x kom)
 *   9) Sto zene kazu o Super Stay™ pojasu (6 mnenj s fotografijami + 30 mnenj z originala, "Ucitaj vise")
 *  10) Brza dostava / Recenzije s 5 zvjezdica (2 ikoni)
 * FAQ originala je v reviews.php ($tuck_faq), kratka mnenja v auto_reviews/HR_tuck.php, opis v meta.php.
 * Promo pasica originala je izpuscena (NORIKS stil: samo standardna pasica teme).
 * Slike: img/tuck/.
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$ntk     = get_template_directory_uri() . '/img/tuck/';
$ntk_img = function( $file, $alt, $w, $h ) use ( $ntk ) {
  return '<img src="' . esc_url( $ntk . $file ) . '" alt="' . esc_attr( $alt ) . '" width="' . (int) $w . '" height="' . (int) $h . '" loading="lazy">';
};
$ntk_sizes = function_exists( 'noriks_tuck_sizes' ) ? noriks_tuck_sizes() : array();
$ntk_star  = '<svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.826 1.608 8.144L12 18.896l-7.544 4.38 1.608-8.144L.587 9.306l8.332-1.151z"></path></svg>';

/* 9) mnenja z originala: ime, datum, ocena, besedilo */
$ntk_reviews = array(
  array( 'Nancy F.', 'listopad 2026.', 5, 'Ovo je PRVO oblikujuće rublje u kojem stvarno mogu disati, nositi ga cijeli dan, ne smota se ni gore NI dolje I lijepo me zagladilo. Toplo preporučujem!' ),
  array( 'Josephine M.', 'listopad 2026.', 4, 'Stvarno je ostalo na mjestu cijeli dan. Tako je mekano i udobno. Mislila sam da ću osjećati stezanje, ali nisam, a ipak je savršeno zagladilo i učvrstilo. Sigurno ću kupiti još. Toplo preporučujem.' ),
  array( 'Elizabeth A.', 'listopad 2026.', 5, 'Kupila sam ih za sinoćnje vjenčanje i nisu se smotale, jako sam zadovoljna! Obožavam ih, vrlo su udobne. Staro oblikujuće rublje sam bacila, tako mi je drago da sam pronašla ove!' ),
  array( 'Liz R.', 'listopad 2026.', 5, 'Apsolutno najbolje oblikujuće rublje koje sam ikad imala! Ne mogu ih se dovoljno nahvaliti! Mekan, tanak materijal, pojas se uopće ne smota. Vrlo udobne! Toplo preporučujem kupnju!' ),
  array( 'Amanda C.', 'listopad 2026.', 3, 'Odlične su i lijepo me oblikuju, ali nogavice su mi preduge pa ih ne mogu nositi uz kraće haljine. Voljela bih da postoji verzija s kraćim nogavicama.' ),
  array( 'Cherry L.', 'rujan 2026.', 5, 'Potpora uz udobnost. Ostaju na mjestu i nitko ne zna da ih nosite!' ),
  array( 'Allyson A.', 'rujan 2026.', 5, 'Vrlo udobne, a protuklizni pojas je nevjerojatan!' ),
  array( 'Donna H.', 'rujan 2026.', 5, 'Dobro pristaju i udobne su' ),
  array( 'Isabeth C.', 'kolovoz 2026.', 5, 'Odlična potpora, super udobne i lagane. Ne osjeti se da ih nosim, čak ni ispod hlača.' ),
  array( 'Sara T.', 'kolovoz 2026.', 4, 'Obožavam ih. Prve koje stvarno ostaju na mjestu i ne smotaju se. Oblikuju vitkiju liniju, a nisu toliko uske da bi prekidale cirkulaciju.' ),
  array( 'Myla L.', 'kolovoz 2026.', 5, 'Ove su nevjerojatne. Lakše se oblače i ne spljošte stražnjicu. Tako zaglađen izgled. Obožavam ih.' ),
  array( 'Kim H.', 'srpanj 2026.', 5, 'Udobne, kvalitetne i najbolje oblikujuće rublje. Obožavam ih ispod ljetnih haljina. Stvarno podižu samopouzdanje. Trbuh mi je ravan!' ),
  array( 'Julie B.', 'srpanj 2026.', 4, 'Dobro pristaju, lijepo zaglađuju. Nogavice se ne smotaju.' ),
  array( 'Shayne B.', 'srpanj 2026.', 5, 'Moj najdraži komad oblikujućeg rublja! Uopće se ne podiže, vrlo udobno. Mogla bih ih nositi svaki dan!' ),
  array( 'Dana K.', 'lipanj 2026.', 4, 'Najudobnije oblikujuće rublje koje sam ikad nosila!' ),
  array( 'Meryl G.', 'lipanj 2026.', 5, 'Bila sam skeptična prema tom malom izumu koji uvlači i zateže, a iznenadilo me da je radio cijeli dan!' ),
  array( 'Angie L.', 'lipanj 2026.', 5, 'Obožavam koliko su udobne. Osjećam se kao da ništa ne nosim, a ipak zaglađuju tijelo.' ),
  array( 'Rebecca L.', 'lipanj 2026.', 5, 'Visoka sam 180 cm i nosim EU 36/38. Savršeno pristaju! Jedva čekam nositi ih ispod suknji i haljina za potporu i oblikovanje!' ),
  array( 'Kara T.', 'svibanj 2026.', 4, 'Kad ih jednom obučete, vrlo su udobne i ostaju na mjestu. Ali obući ih pravi je izazov. Gumirani protuklizni dio na struku ne rasteže se dovoljno i lijepi se za kožu dok ih navlačite. Pamučni umetak u međunožju bio bi lijep dodatak.' ),
  array( 'Ruth A.', 'svibanj 2026.', 5, 'Obožavam kako udobno pristaju.' ),
  array( 'Melanie B.', 'svibanj 2026.', 5, 'Obožavam ih, lijepo zatežu trbuh i ističu stražnjicu, udobno pokrivaju bokove i bedra. Nogavice se ne smotaju! Savršene za haljine.' ),
  array( 'Jacqueline S.', 'travanj 2026.', 5, 'Obožavam ih. Uzela sam jednu veličinu veću i odlično pristaju.' ),
  array( 'Debra L.', 'travanj 2026.', 3, 'Dobra kvaliteta. Malo su manjeg kroja.' ),
  array( 'Michele H.', 'travanj 2026.', 5, 'Ovo su najbolje koje sam ikad vidjela, tako udobne i stvarno rade ono što obećavaju. Ostaju na mjestu! Obavezno ih nabavite.' ),
  array( 'Debbra G.', 'travanj 2026.', 5, 'Odličan proizvod' ),
  array( 'Mary D.', 'travanj 2026.', 5, 'Iako čvrsto pristaju i malo ih je teže obući, izgledaju i osjećaju se odlično! Rade točno kako je obećano!' ),
  array( 'Stacy C.', 'ožujak 2026.', 4, 'Voljela bih da postoji i veličina XS' ),
  array( 'Nicole S.', 'ožujak 2026.', 5, 'Obožavam ihhh😍🥰' ),
  array( 'Jill A.', 'ožujak 2026.', 5, 'Napokon sam ih nosila prošli vikend i iskreno, bile su tako udobne i savršeno su radile. Sve je ostalo na mjestu i jedva sam primijetila da ih nosim. Sigurno ću uzeti još nekoliko.' ),
  array( 'Paula B.', 'veljača 2026.', 5, 'Isprobala sam toliko toga i iskreno, ove su sve promijenile. Stvarno uvlače trbuščić, a toliko su udobne da sam zaboravila da ih uopće nosim.' ),
);
$ntk_rv_first = 6; // kot na originalu: 6 mnenj, nato "Učitaj više"

/* 9) mnenja kupcev s fotografijami (na originalu v nakupni skatli — premaknjeno v sekcijo mnenj, besedila 1:1) */
$ntk_ugc = array(
  array( 'tk-ugc-1.webp', 'Nancy F.', 'Ovo je PRVO oblikujuće rublje u kojem stvarno mogu disati, nositi ga cijeli dan, ne smota se ni gore NI dolje I lijepo me zagladilo.' ),
  array( 'tk-ugc-2.webp', 'Elizabeth A.', 'Kupila sam ih za sinoćnje vjenčanje i nisu se smotale. Staro oblikujuće rublje sam bacila, tako mi je drago da sam pronašla ove!' ),
  array( 'tk-ugc-3.webp', 'Ashli K.', 'Nosila sam ih cijeli dan na svom vjenčanju! NISU se pomaknule ni milimetar i bile su udobne!' ),
  array( 'tk-ugc-4.webp', 'Dominique R.', 'Najbolje oblikujuće rublje ikad. Ostale su na mjestu i bile su toliko udobne da sam zaboravila da ih nosim.' ),
  array( 'tk-ugc-5.webp', 'Amy N.', 'Tako su udobne, ne smotaju se na struku niti se podižu oko bedara.' ),
  array( 'tk-ugc-6.webp', 'Shari S.', 'NIKAD prije nisam nosila oblikujuće rublje jer je obično tako neudobno, a ovo je tako udobno!' ),
);
?>

<div class="ntk">

<!-- 1) DOSAD STE MORALI BIRATI — samo besedilo -->
<section class="ntk-sec ntk-tint" id="ntk-problem">
  <div class="ntk-wrap">
    <p class="ntk-kicker ntk-c">Problem</p>
    <h2 class="ntk-h2 ntk-c">Dosad ste morali <em>birati</em></h2>
    <p class="ntk-sub">Ili zaglađen trbuh, ili udobnost cijeli dan. Obično oblikujuće rublje nikad nije uspjelo oboje.</p>
    <div class="ntk-pr">
      <div class="ntk-pr__card">
        <svg viewBox="0 0 44 44" aria-hidden="true"><path d="M9 14h26l-1 6c-1 6-5 11-9 14h-6c-4-3-8-8-9-14z" fill="#2E2420"></path><path d="M8 9.5h28v4.5H8z" fill="#C6BAAA"></path><path d="M8 14c5 2.4 23 2.4 28 0" stroke="#9B2C1F" stroke-width="2" fill="none"></path><path d="M38 6.5v6m-2.2-2.2L38 12.5l2.2-2.2" stroke="#9B2C1F" stroke-width="1.8" fill="none"></path></svg>
        <h3>Obično oblikujuće rublje</h3>
        <p>Zaglađuje trbuh.</p>
        <p class="ntk-pr__bad"><b>Kvaka</b>Smota se čim sjednete, pa ga cijeli dan povlačite gore.</p>
      </div>
      <div class="ntk-pr__card">
        <svg viewBox="0 0 44 44" aria-hidden="true"><path d="M14 6h7.5l-1 32H14zM22.5 6H30l1 32h-6.5z" fill="#2E2420"></path><path d="M17.5 23l3.5-1.5M17.5 28l3.5-1.5M26.5 23L23 21.5M26.5 28L23 26.5" stroke="#9B2C1F" stroke-width="1.8"></path></svg>
        <h3>Bez ičega</h3>
        <p>Udobno.</p>
        <p class="ntk-pr__bad"><b>Kvaka</b>Ništa nije zaglađeno, a bedra se trljaju ispod haljine.</p>
      </div>
    </div>
    <p class="ntk-big ntk-c">NORIKS Tuck radi oboje: zaglađuje trbuh, ostaje na mjestu cijeli dan i nema trljanja bedara.</p>
  </div>
</section>

<!-- 2) SUPER STAY™ TEHNOLOGIJA — slika lijevo -->
<section class="ntk-sec" id="ntk-superstay">
  <div class="ntk-wrap ntk-row2">
    <div class="ntk-media">
      <div class="ntk-hs">
        <?php echo $ntk_img( 'tk-superstay.webp', 'NORIKS Tuck — Super Stay™ protuklizni pojas', 1200, 1500 ); ?>
        <i class="ntk-hs__dot" data-c="1" style="left:68%;top:26%"></i>
        <span class="ntk-hs__lab" data-c="1" style="left:10px;top:21%">Protuklizna podstava naliježe na kožu</span>
        <i class="ntk-hs__dot" data-c="2" style="left:32%;top:40%"></i>
        <span class="ntk-hs__lab" data-c="2" style="right:10px;top:35%">Drži se prianjanjem, a ne uskom gumicom</span>
        <i class="ntk-hs__dot" data-c="3" style="left:35%;top:88%"></i>
        <span class="ntk-hs__lab" data-c="3" style="left:10px;top:66%">Laserski rezan rub nogavice, bez usijecanja</span>
        <svg class="ntk-hs__lines" aria-hidden="true"></svg>
      </div>
    </div>
    <div class="ntk-copy">
      <p class="ntk-kicker">Kako radi</p>
      <h2 class="ntk-h2">Super Stay™ <em>tehnologija</em></h2>
      <p>Prianja uz kožu umjesto da je steže. Zato se ne smota prema dolje.</p>
      <div class="ntk-vs">
        <div><b>Obično oblikujuće rublje</b>Uska gumica pritišće struk, pa se pojas smota čim sjednete.</div>
        <div><b>Super Stay™</b>Protuklizna podstava drži pojas na mjestu, pa ostaje tamo gdje ste ga namjestili.</div>
      </div>
      <div class="ntk-tip">
        <?php echo $ntk_img( 'tk-superstay-detalj.webp', 'Protuklizna podstava pojasa', 300, 300 ); ?>
        <p><span>Savjet za nošenje</span><strong>Povucite pojas visoko,</strong> iznad prirodnog struka. Protuklizna podstava ga drži ondje.</p>
      </div>
      <blockquote class="ntk-quote">„Mogla sam ih namjestiti više i ostale su na mjestu cijeli dan. Čak i uz plesanje cijelu noć.“<cite>Karen M., kupac NORIKS-a, preko naše korisničke podrške</cite></blockquote>
      <ul class="ntk-moves">
        <li><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M9 2.5a2 2 0 110 4 2 2 0 010-4zM7.5 8h3l1 5h5v2h-6.6L9.6 11 9 15h2.5l1.5 6.5h-2.2L9.6 17H6.8l.7-9z"></path><rect x="13" y="16" width="7" height="1.6"></rect><rect x="18.4" y="16" width="1.6" height="5.5"></rect></svg>Sjedenje</li>
        <li><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M5 6a2 2 0 104 0 2 2 0 00-4 0zM8 9l6 4 4-2 1 2-5 3-3-2-2 7H6l2-8z"></path></svg>Saginjanje</li>
        <li><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 2a2 2 0 110 4 2 2 0 010-4zM10 7h4l2 6-2 1-1-3-1 4 3 7h-3l-2-5-2 5H5l3-7 1-5-2 3-2-1z"></path></svg>Hodanje</li>
        <li class="ok"><svg viewBox="0 0 24 24" aria-hidden="true"><circle cx="12" cy="12" r="11"></circle><path d="M7 12.5l3.2 3.2L17 9" stroke="#fff" stroke-width="2.6" fill="none"></path></svg>Ostaje na mjestu</li>
      </ul>
      <p class="ntk-big">Ako se smota, obično je veličina premala. <a href="#ntk-fit">Provjerite veličinu</a></p>
    </div>
  </div>
</section>

<!-- 3) ZA VELIKI DAN I ZA SVAKI DAN — slike desno -->
<section class="ntk-sec ntk-tint" id="ntk-bigday">
  <div class="ntk-wrap ntk-row2 ntk-row2--rev">
    <div class="ntk-copy">
      <p class="ntk-kicker">Za svaku priliku</p>
      <h2 class="ntk-h2">Za veliki dan <em>i za svaki dan</em></h2>
      <p>Toliko udobne da zaboravite da ih nosite – bilo da je vjenčanje ili običan utorak.</p>
      <div class="ntk-stats">
        <div><b>240 000+</b>prodanih komada</div>
        <div><b>4 od 10</b>kupilo ih je za vjenčanje</div>
        <div><b>1 od 4</b>kupilo ih je samo za svakodnevnu udobnost i samopouzdanje</div>
      </div>
      <blockquote class="ntk-quote"><span class="ntk-stars">★★★★★</span>„Kupila sam ih da ih nosim ispod svečane haljine na sinovom vjenčanju. Ne samo da su me vitkije oblikovale i nisu se vidjeli nikakvi rubovi, nego su bile i jako udobne! Zaboravila sam da ih uopće nosim!“<cite>Denise H. · Provjereni kupac · vjenčanje</cite></blockquote>
      <blockquote class="ntk-quote"><span class="ntk-stars">★★★★★</span>„Odlične za svakodnevno nošenje“<cite>Helen W. · Provjereni kupac · svaki dan</cite></blockquote>
      <blockquote class="ntk-quote"><span class="ntk-stars">★★★★★</span>„Nevjerojatno oblikujuće rublje, materijal prianja uz tijelo i ne smota se, toliko je udobno i lagano da stvarno zaboravite da ga nosite.“<cite>Vicky I. · Provjereni kupac · svaki dan</cite></blockquote>
      <p class="ntk-note">Komadi: podaci trgovine, broj prodanih kratkih hlačica. Postoci: anketa nakon kupnje, 15 000+ kupaca.</p>
    </div>
    <div class="ntk-media">
      <div class="ntk-duo">
        <figure><?php echo $ntk_img( 'tk-veliki-dan.webp', 'NORIKS Tuck za veliki dan', 800, 1000 ); ?><figcaption>Veliki dan</figcaption></figure>
        <figure><?php echo $ntk_img( 'tk-svaki-dan.webp', 'NORIKS Tuck za svaki dan', 800, 1000 ); ?><figcaption>Svaki dan</figcaption></figure>
      </div>
    </div>
  </div>
</section>

<!-- 4) ODJENITE HALJINU KOJU STE DOSAD IZBJEGAVALI — slike lijevo -->
<section class="ntk-sec" id="ntk-benefits">
  <div class="ntk-wrap ntk-row2">
    <div class="ntk-media">
      <div class="ntk-quad">
        <figure><?php echo $ntk_img( 'tk-trbuh.webp', 'Zaglađuje trbuh', 700, 875 ); ?><figcaption>Zaglađuje trbuh</figcaption></figure>
        <figure><?php echo $ntk_img( 'tk-bedra.webp', 'Bez trljanja bedara', 700, 875 ); ?><figcaption>Bez trljanja bedara</figcaption></figure>
        <figure><?php echo $ntk_img( 'tk-podizanje.webp', 'Podiže, ne spljošti', 700, 875 ); ?><figcaption>Podiže, ne spljošti</figcaption></figure>
        <figure><?php echo $ntk_img( 'tk-celulit.webp', 'Celulit se ne vidi', 700, 875 ); ?><figcaption>Celulit se ne vidi</figcaption></figure>
      </div>
    </div>
    <div class="ntk-copy">
      <p class="ntk-kicker">Prednosti</p>
      <h2 class="ntk-h2">Odjenite haljinu <em>koju ste dosad izbjegavali</em></h2>
      <p>Uske haljine, suknje, poslovne hlače. Jedan komad zaglađuje, ostaje na mjestu i sprječava trljanje bedara.</p>
      <ul class="ntk-check">
        <li><strong>Zaglađuje trbuh</strong> — umjerena kompresija izravnava trbuh i struk, a ne steže.</li>
        <li><strong>Bez trljanja bedara</strong> — nogavice do sredine bedra pokrivaju mjesto gdje se bedra dodiruju, pa je u haljini udobno.</li>
        <li><strong>Podiže, ne spljošti</strong> — nabori na stražnjoj strani oblikuju stražnjicu umjesto da je spljošte.</li>
        <li><strong>Celulit se ne vidi</strong> — zaglađuje bokove i bedra, pa se udubine ne vide kroz odjeću.</li>
      </ul>
    </div>
  </div>
</section>

<!-- 5) PRONAĐITE SVOJU VELIČINU — samo besedilo -->
<section class="ntk-sec ntk-tint" id="ntk-fit">
  <div class="ntk-wrap ntk-row2 ntk-row2--top">
    <div class="ntk-copy">
      <p class="ntk-kicker">Veličina</p>
      <h2 class="ntk-h2">Pronađite svoju veličinu <em>za 10 sekundi</em></h2>
      <p>Pronađite svoju uobičajenu veličinu hlača. Ako ste između dvije veličine ili su vam struk i bokovi u različitim veličinama, uzmite jednu veličinu veću.</p>
      <p class="ntk-big">Ako niste sigurni, uzmite veću.</p>
      <p>Većina zamjena je za veću veličinu, a premale hlačice glavni su razlog zašto se oblikujuće rublje smota.</p>
    </div>
    <div class="ntk-copy">
      <div class="ntk-scroll">
        <table class="ntk-size">
          <thead><tr><th>Veličina</th><th>EU veličina</th><th>UK / AU</th><th>Struk (cm)</th><th>Bokovi (cm)</th><th>Duljina nogavice</th></tr></thead>
          <tbody>
            <?php foreach ( $ntk_sizes as $r ) : ?>
            <tr><td><?php echo esc_html( $r[0] ); ?></td><td><?php echo esc_html( $r[1] ); ?></td><td><?php echo esc_html( $r[2] ); ?></td><td><?php echo esc_html( $r[3] ); ?></td><td><?php echo esc_html( $r[4] ); ?></td><td><?php echo esc_html( $r[5] ); ?></td></tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
      <div class="ntk-meter">
        <p class="ntk-kicker">Kompresija</p>
        <div class="ntk-meter__bar"><i></i><i class="on"></i><i></i></div>
        <div class="ntk-meter__lb"><span>Lagana</span><span class="on">Umjerena</span><span>Jaka</span></div>
        <p>Zaglađuje trbuh i bedra, a i dalje možete sjediti, jesti i disati.</p>
      </div>
      <div class="ntk-tiles">
        <div><b>Naša manekenka</b>Visoka 175 cm, nosi veličinu M. Duljina = od vrha pojasa do ruba nogavice.</div>
        <div><b>Pogrešna veličina?</b>Pravo na povrat ili zamjenu u roku od 30 dana.</div>
      </div>
    </div>
  </div>
</section>

<!-- 6) KRATKE HLAČICE ILI TANGE? — slike desno -->
<section class="ntk-sec" id="ntk-chooser">
  <div class="ntk-wrap ntk-row2 ntk-row2--rev">
    <div class="ntk-copy">
      <p class="ntk-kicker">Odaberite model</p>
      <h2 class="ntk-h2">Kratke hlačice <em>ili tange?</em></h2>
      <p>Isti pojas, isto zaglađivanje. Odaberite ono što odgovara odjeći koju nosite.</p>
      <div class="ntk-opt">
        <div class="ntk-opt__i is-hl">
          <h3>Kratke hlačice <span>Ovdje ste</span></h3>
          <p class="ntk-opt__for">Za haljine i suknje</p>
          <ul class="ntk-check"><li>Sprječavaju trljanje bedara</li><li>Zaglađuju trbuh i bedra</li></ul>
        </div>
        <div class="ntk-opt__i">
          <h3>Tange visokog struka <span class="soon">Uskoro dostupno</span></h3>
          <p class="ntk-opt__for">Za tajice i uske haljine</p>
          <ul class="ntk-check"><li>Bez vidljivih rubova, ni sprijeda ni straga</li><li>Upijajući umetak, osjećaj svježine</li></ul>
        </div>
      </div>
      <p class="ntk-big">Oboje ima:</p>
      <ul class="ntk-check">
        <li>Super Stay™ protuklizni pojas</li>
        <li>Umjerenu kompresiju trbuha</li>
        <li>Laserski rezane rubove, bez tragova</li>
      </ul>
      <a class="ntk-cta" href="#bundle-selector">Odaberite paket</a>
    </div>
    <div class="ntk-media">
      <div class="ntk-duo">
        <figure><?php echo $ntk_img( 'tk-kratke.webp', 'Kratke hlačice', 800, 1000 ); ?><figcaption>Kratke hlačice</figcaption></figure>
        <figure><?php echo $ntk_img( 'tk-tange.webp', 'Tange visokog struka', 800, 1000 ); ?><figcaption>Tange visokog struka</figcaption></figure>
      </div>
    </div>
  </div>
</section>

<!-- 7) USPOREDBA — samo besedilo -->
<section class="ntk-sec ntk-tint" id="ntk-compare">
  <div class="ntk-wrap ntk-narrow">
    <h2 class="ntk-h2 ntk-c">Nije svako oblikujuće rublje <em>jednako izrađeno</em></h2>
    <div class="ntk-cmp">
      <table>
        <thead><tr><th></th><th class="us">NORIKS</th><th class="them">Tipično premium oblikujuće rublje</th></tr></thead>
        <tbody>
          <tr><td>Pojas</td><td class="us"><i class="y">✓</i>S protukliznom podstavom, ostaje na mjestu</td><td class="them"><i class="n">✕</i>Samo gumica, smota se</td></tr>
          <tr><td>Rubovi nogavica</td><td class="us"><i class="y">✓</i>Laserski rezani</td><td class="them"><i class="n">✕</i>Tanki prošiveni šavovi</td></tr>
          <tr><td>Stražnji dio</td><td class="us"><i class="y">✓</i>S naborima, podiže</td><td class="them"><i class="n">✕</i>Ravan, spljošti</td></tr>
          <tr><td>Stezanje</td><td class="us"><i class="y">✓</i>Umjereno, cijeli dan</td><td class="them"><i class="n">✕</i>Preslabo ili prečvrsto</td></tr>
          <tr><td>Duljina</td><td class="us"><i class="y">✓</i>Do sredine bedra, bez trljanja</td><td class="them"><i class="n">✕</i>Često prekratko</td></tr>
          <tr><td>Cijena</td><td class="us"><i class="y">✓</i>40,95 €</td><td class="them"><i class="n">✕</i>60,99–69,99 €</td></tr>
        </tbody>
      </table>
    </div>
  </div>
</section>

<!-- 8) VEĆINA ŽENA UZME 2+ — slika lijevo -->
<section class="ntk-sec" id="ntk-offer">
  <div class="ntk-wrap ntk-row2">
    <div class="ntk-media ntk-media--sm"><?php echo $ntk_img( 'tk-paket-2-480.webp', 'NORIKS Tuck 2x kom — crna i smeđa', 480, 480 ); ?></div>
    <div class="ntk-copy">
      <p class="ntk-kicker">Paket</p>
      <h2 class="ntk-h2">Većina žena uzme <em>2+</em></h2>
      <p>Jedne nosite, druge su u pranju. Kombinirajte boje.</p>
      <div class="ntk-price">
        <strong>2x kom</strong>
        <span>29,00 € po komadu</span>
        <p>58,00 € <s>82,00 €</s> <i>UŠTEDA 29 %</i></p>
      </div>
      <a class="ntk-cta" href="#bundle-selector" data-tier="2">Odaberite paket</a>
      <p class="ntk-note">Pravo na povrat u roku od 30 dana</p>
    </div>
  </div>
</section>

<!-- 9) ŠTO ŽENE KAŽU — mnenja (preprosta mreža) -->
<section class="ntk-sec ntk-tint" id="ntk-reviews">
  <div class="ntk-wrap">
    <h2 class="ntk-h2 ntk-c">Što žene kažu o <em>Super Stay™ pojasu</em></h2>
    <p class="ntk-rate"><span class="ntk-stars">★★★★★</span> <strong>4,8</strong> · Na temelju 1.081 recenzije</p>
    <div class="ntk-ugc">
      <?php foreach ( $ntk_ugc as $u ) : ?>
      <article class="ntk-ugc__c">
        <?php echo $ntk_img( $u[0], $u[1], 480, 600 ); ?>
        <div>
          <p class="ntk-ugc__st"><span class="ntk-stars">★★★★★</span><em>✓ Provjereno</em></p>
          <p>„<?php echo esc_html( $u[2] ); ?>“</p>
          <cite><?php echo esc_html( $u[1] ); ?></cite>
        </div>
      </article>
      <?php endforeach; ?>
    </div>
    <ul class="ntk-rv">
      <?php foreach ( $ntk_reviews as $i => $r ) : ?>
      <li class="ntk-rv__item<?php echo $i >= $ntk_rv_first ? ' is-hidden' : ''; ?>">
        <div class="ntk-rv__head"><cite><?php echo esc_html( $r[0] ); ?></cite><span><?php echo esc_html( $r[1] ); ?></span></div>
        <div class="ntk-rv__stars" aria-label="<?php echo (int) $r[2]; ?> od 5 zvjezdica"><?php for ( $s = 0; $s < 5; $s++ ) : ?><span class="<?php echo $s < $r[2] ? '' : 'is-empty'; ?>"><?php echo $ntk_star; ?></span><?php endfor; ?></div>
        <p class="ntk-rv__ver">✓ Provjereni kupac</p>
        <p><?php echo esc_html( $r[3] ); ?></p>
      </li>
      <?php endforeach; ?>
    </ul>
    <p class="ntk-c"><button type="button" class="ntk-more">Učitaj više</button></p>
  </div>
</section>

<!-- 10) ZAŠTO NORIKS — samo besedilo -->
<section class="ntk-sec ntk-sec--sm" id="ntk-trust" aria-label="Zašto NORIKS">
  <div class="ntk-wrap ntk-trust">
    <div>
      <svg width="42" height="42" viewBox="0 0 32 32" aria-hidden="true"><path fill="#2E2420" d="M29.871 6.026l-13.871-5.1-14.394 5.283v19.642l14.394 5.222 14.394-5.222v-19.634l-0.524-0.192zM15.467 29.746l-12.795-4.642v-17.747l12.795 4.642v17.747zM16 11.058l-12.326-4.472 12.326-4.524 12.315 4.528-12.315 4.468zM29.328 25.104l-12.795 4.642v-17.747l12.795-4.623v17.728z"></path></svg>
      <p><strong>Brza dostava</strong></p>
      <p class="s">Dostava s praćenjem pošiljke</p>
    </div>
    <div>
      <svg width="42" height="42" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path stroke="#2E2420" stroke-linejoin="round" stroke-linecap="round" d="M14.65 8.93274L12.4852 4.30901C12.2923 3.89699 11.7077 3.897 11.5148 4.30902L9.35002 8.93274L4.25424 9.50158C3.80919 9.55126 3.6278 10.0941 3.95532 10.3997L7.77426 13.9632L6.75374 18.9805C6.66534 19.4151 7.13158 19.7546 7.51754 19.5357L12 16.9935L16.4825 19.5357C16.8684 19.7546 17.3347 19.4151 17.2463 18.9805L16.2257 13.9632L20.0447 10.3997C20.3722 10.0941 20.1908 9.55126 19.7458 9.50158L14.65 8.93274Z"></path></svg>
      <p><strong>Recenzije s 5 zvjezdica</strong></p>
      <p class="s">Zadovoljstvo kupaca nam je na prvom mjestu</p>
    </div>
  </div>
</section>

</div>

<script>
(function () {
  /* 2) oznake na sliki: crte od tocke do oznake (samo vodoravno, navpicno ali pod 45°) */
  var fig = document.querySelector('#ntk-superstay .ntk-hs');
  if (fig && !fig.dataset.ready) {
    fig.dataset.ready = '1';
    var svg = fig.querySelector('.ntk-hs__lines'), NS = 'http://www.w3.org/2000/svg';
    var draw = function () {
      var f = fig.getBoundingClientRect(); if (!f.width) return;
      svg.setAttribute('viewBox', '0 0 ' + f.width + ' ' + f.height);
      svg.innerHTML = '';
      fig.querySelectorAll('.ntk-hs__dot').forEach(function (d) {
        var l = fig.querySelector('.ntk-hs__lab[data-c="' + d.dataset.c + '"]'); if (!l) return;
        var dr = d.getBoundingClientRect(), lr = l.getBoundingClientRect();
        var x1 = dr.left + dr.width / 2 - f.left, y1 = dr.top + dr.height / 2 - f.top;
        var L = lr.left - f.left, R = lr.right - f.left, T = lr.top - f.top, B = lr.bottom - f.top, pts;
        var right = L > x1;
        if (y1 >= T + 4 && y1 <= B - 4) {
          pts = [[x1, y1], [right ? L : R, y1]];
        } else if (x1 >= L + 6 && x1 <= R - 6) {
          pts = [[x1, y1], [x1, y1 < T ? T : B]];
        } else {
          var x2 = right ? L : R, y2 = y1 < T ? T + 8 : B - 8, dx = x2 - x1, dy = y2 - y1;
          var sx = dx > 0 ? 1 : -1, sy = dy > 0 ? 1 : -1;
          if (Math.abs(dy) <= Math.abs(dx)) pts = [[x1, y1], [x1 + sx * Math.abs(dy), y2], [x2, y2]];
          else pts = [[x1, y1], [x1, y2 - sy * Math.abs(dx)], [x2, y2]];
        }
        l.classList.toggle('is-r', !right);
        pts = pts.map(function (q) { return q[0].toFixed(1) + ',' + q[1].toFixed(1); }).join(' ');
        ['sh', ''].forEach(function (c) {
          var pl = document.createElementNS(NS, 'polyline');
          pl.setAttribute('points', pts); pl.setAttribute('fill', 'none');
          if (c) pl.setAttribute('class', c);
          svg.appendChild(pl);
        });
      });
    };
    draw();
    var img = fig.querySelector('img'); if (img && !img.complete) img.addEventListener('load', draw);
    window.addEventListener('resize', draw);
  }

  /* 8) "Odaberite paket" izbere ponudo 2x kom */
  var btn = document.querySelector('#ntk-offer .ntk-cta');
  if (btn) {
    btn.addEventListener('click', function (e) {
      var opts = document.querySelectorAll('#bundle-selector input[name="bundle_option"]');
      var o = opts[(+this.dataset.tier || 2) - 1];
      if (o && !o.checked) { (o.closest('label') || o).click(); }
      var box = document.getElementById('bundle-selector') || document.querySelector('form.cart');
      if (box) { e.preventDefault(); box.scrollIntoView({ block: 'start' }); }
    });
  }

  /* 9) mnenja: "Ucitaj vise" (po 6, kot na originalu) */
  var more = document.querySelector('#ntk-reviews .ntk-more');
  if (more) {
    more.addEventListener('click', function () {
      var hidden = document.querySelectorAll('#ntk-reviews .ntk-rv__item.is-hidden');
      for (var k = 0; k < hidden.length && k < 6; k++) { hidden[k].classList.remove('is-hidden'); }
      if (!document.querySelector('#ntk-reviews .ntk-rv__item.is-hidden')) { more.parentNode.style.display = 'none'; }
    });
  }
})();
</script>

<style>
/* NORIKS stil (predloga why-hands.php): oznaka + naslov z lezecim poudarkom, slika ob besedilu, izmenjujoca ozadja */
.ntk-sec { padding: 60px 0; background: #fff; font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Arial, sans-serif; color: #231d19; }
.ntk-sec * { box-sizing: border-box; }
.ntk-sec--sm { padding: 36px 0; }
.ntk-tint { background: #f6f1eb; }
.ntk-wrap { width: 100%; max-width: 1240px; margin: 0 auto; padding: 0 24px; }
.ntk-narrow { max-width: 960px; }
.ntk-row2 { display: grid; grid-template-columns: 1fr 1fr; gap: 56px; align-items: center; }
.ntk-row2--top { align-items: start; }
.ntk-media img { display: block; width: 100%; height: auto; border-radius: 0; }
.ntk-media > img, .ntk-hs { box-shadow: 0 2px 4px rgba(40,25,15,.05), 0 14px 40px rgba(40,25,15,.10); }
.ntk-media--sm { text-align: center; }
.ntk-media--sm img { max-width: 480px; margin: 0 auto; }
.ntk-c { text-align: center; }
.ntk-kicker, .ntk-copy p.ntk-kicker { font-size: 12.5px; line-height: 1.4; font-weight: 800; letter-spacing: .14em; text-transform: uppercase; color: #8c5a43; margin: 0 0 10px; }
.ntk-h2 { font-size: clamp(25px, 3.1vw, 36px); font-weight: 800; line-height: 1.18; letter-spacing: -.01em; margin: 0 0 16px; color: #231d19; text-transform: none; }
.ntk-h2 em { font-style: italic; font-weight: 800; color: #8c5a43; }
.ntk-copy p { font-size: 16px; line-height: 1.7; color: #574c44; margin: 0 0 14px; }
.ntk-sub { text-align: center; font-size: 15.5px; line-height: 1.6; color: #6b5e55; max-width: 760px; margin: 0 auto 26px; }
.ntk-big, .ntk-copy p.ntk-big { font-size: 19px; font-weight: 800; color: #231d19; line-height: 1.45; }
.ntk-big a { color: #8c5a43; font-size: 16px; }
.ntk-note, .ntk-copy p.ntk-note { font-size: 13.5px; color: #8a7a6e; margin-top: 12px; }
.ntk-check { list-style: none; padding: 0; margin: 6px 0 16px; display: flex; flex-direction: column; gap: 10px; }
.ntk-check li { position: relative; padding-left: 28px; font-size: 15.5px; line-height: 1.5; color: #574c44; margin: 0; }
.ntk-check li strong { color: #231d19; }
.ntk-check li::before { content: "\2713"; position: absolute; left: 0; top: 1px; width: 20px; height: 20px; border-radius: 50%;
  background: #2E2420; color: #fff; font-size: 11px; font-weight: 800; display: flex; align-items: center; justify-content: center; }
.ntk-cta { display: inline-block; margin-top: 8px; background: #2E2420; color: #fff !important; font-size: 15px; font-weight: 700;
  padding: 15px 30px; border-radius: 8px; text-decoration: none; }
.ntk-cta:hover { background: #8c5a43; color: #fff !important; }
.ntk-stars { color: #e0a33c; letter-spacing: 1px; }
.ntk-quote { margin: 0 0 14px; padding: 2px 0 2px 14px; border-left: 3px solid #c6baaa; font-size: 15px; line-height: 1.6; color: #231d19; font-style: normal; }
.ntk-quote::before, .ntk-quote::after { content: none; }
.ntk-quote .ntk-stars { display: block; font-size: 13px; margin-bottom: 2px; }
.ntk-quote cite { display: block; font-style: normal; font-size: 12.5px; color: #8a7a6e; margin-top: 4px; }

/* 1) problem */
.ntk-pr { display: grid; grid-template-columns: 1fr 1fr; gap: 18px; max-width: 760px; margin: 0 auto 22px; }
.ntk-pr__card { background: #fff; border: 1px solid #ece3da; padding: 22px 20px; }
.ntk-pr__card svg { width: 48px; height: 48px; display: block; margin-bottom: 10px; }
.ntk-pr__card h3 { font-size: 17.5px; font-weight: 800; margin: 0 0 6px; color: #231d19; text-transform: none; letter-spacing: 0; }
.ntk-pr__card p { font-size: 14.8px; line-height: 1.55; color: #574c44; margin: 0 0 8px; }
.ntk-pr__bad b { display: block; color: #9B2C1F; font-weight: 800; font-size: 11px; letter-spacing: .08em; text-transform: uppercase; margin-bottom: 2px; }

/* 2) oznake na sliki + primerjava + savjet + gibi */
.ntk-hs { position: relative; }
.ntk-hs img { aspect-ratio: 4/5; object-fit: cover; }
.ntk-hs__dot { position: absolute; z-index: 2; width: 12px; height: 12px; margin: -6px 0 0 -6px; background: #2E2420; border: 2px solid #fff; border-radius: 50%; box-shadow: 0 0 0 3px rgba(46,36,32,.25); }
.ntk-hs__lab { position: absolute; z-index: 2; background: #fff; font-size: 13px; font-weight: 700; line-height: 1.25; padding: 8px 10px; max-width: 190px; color: #231d19; border-left: 3px solid #2E2420; }
.ntk-hs__lab.is-r { border-left: 0; border-right: 3px solid #2E2420; }
.ntk-hs__lines { position: absolute; inset: 0; width: 100%; height: 100%; pointer-events: none; overflow: visible; }
.ntk-hs__lines polyline { stroke: #2E2420; stroke-width: 1.5; }
.ntk-hs__lines .sh { stroke: rgba(255,255,255,.85); stroke-width: 4; }
.ntk-vs { display: grid; grid-template-columns: 1fr 1fr; border: 1.5px solid #2E2420; background: #fff; margin: 4px 0 18px; }
.ntk-vs div { padding: 14px; font-size: 14.5px; line-height: 1.45; color: #574c44; }
.ntk-vs div + div { background: #2E2420; color: #fff; }
.ntk-vs b { display: block; font-size: 12px; letter-spacing: .06em; font-weight: 800; text-transform: uppercase; margin-bottom: 4px; color: inherit; }
.ntk-vs div:first-child b { color: #231d19; }
.ntk-tip { display: grid; grid-template-columns: 88px 1fr; gap: 14px; align-items: center; margin: 0 0 18px; }
.ntk-tip img { width: 88px; height: 88px; object-fit: cover; display: block; }
.ntk-copy .ntk-tip p { margin: 0; font-size: 15px; line-height: 1.55; }
.ntk-tip span { display: block; font-size: 11px; font-weight: 800; letter-spacing: .1em; text-transform: uppercase; color: #8c5a43; margin-bottom: 2px; }
.ntk-moves { list-style: none; padding: 0; margin: 6px 0 18px; display: grid; grid-template-columns: repeat(4, 1fr); gap: 8px; }
.ntk-moves li { font-size: 13px; font-weight: 700; color: #231d19; margin: 0; }
.ntk-moves svg { width: 26px; height: 26px; fill: #2E2420; display: block; margin-bottom: 4px; }
.ntk-moves .ok, .ntk-moves .ok svg { color: #3F5A4A; fill: #3F5A4A; }

/* 3) statistika + 2 sliki */
.ntk-stats { display: grid; grid-template-columns: repeat(3, 1fr); gap: 10px; margin: 4px 0 20px; }
.ntk-stats div { background: #fff; border: 1px solid #ece3da; padding: 14px 12px; font-size: 13.5px; line-height: 1.35; color: #574c44; }
.ntk-stats b { display: block; font-size: 26px; font-weight: 800; line-height: 1.05; color: #2E2420; margin-bottom: 6px; }
.ntk-duo { display: grid; grid-template-columns: 1fr 1fr; gap: 10px; }
.ntk-quad { display: grid; grid-template-columns: 1fr 1fr; gap: 10px; }
.ntk-duo figure, .ntk-quad figure { margin: 0; position: relative; }
.ntk-duo img, .ntk-quad img { aspect-ratio: 4/5; object-fit: cover; }
.ntk-duo figcaption, .ntk-quad figcaption { position: absolute; left: 10px; bottom: 10px; background: #fff; color: #2E2420; font-size: 11.5px; font-weight: 800;
  letter-spacing: .08em; text-transform: uppercase; padding: 6px 9px; line-height: 1.1; }

/* 5) velicine */
.ntk-scroll { overflow-x: auto; -webkit-overflow-scrolling: touch; margin-bottom: 18px; }
.ntk-size { width: 100%; border-collapse: collapse; font-size: 15px; background: #fff; margin: 0 !important; text-align: center; }
.ntk-size th { background: #2E2420; color: #fff; padding: 10px 8px; font-size: 12px; font-weight: 800; line-height: 1.2; }
.ntk-size td { padding: 10px 8px; border-bottom: 1px solid #ece3da; color: #231d19; white-space: nowrap; }
.ntk-size tbody tr:nth-child(odd) td { background: #faf6f1; }
.ntk-size td:first-child { font-weight: 800; }
.ntk-meter { margin-bottom: 16px; }
.ntk-meter .ntk-kicker { margin-bottom: 8px; }
.ntk-meter__bar { display: grid; grid-template-columns: repeat(3, 1fr); gap: 3px; margin-bottom: 6px; }
.ntk-meter__bar i { height: 8px; background: #e4ddd3; }
.ntk-meter__bar i.on { background: #2E2420; }
.ntk-meter__lb { display: grid; grid-template-columns: repeat(3, 1fr); font-size: 12px; font-weight: 700; color: #8a7a6e; text-align: center; margin-bottom: 8px; }
.ntk-meter__lb .on { color: #231d19; }
.ntk-tiles { display: grid; grid-template-columns: 1fr 1fr; gap: 10px; }
.ntk-tiles div { background: #fff; border: 1px solid #ece3da; padding: 12px 14px; font-size: 14px; line-height: 1.45; color: #574c44; }
.ntk-tiles b { display: block; font-size: 11px; font-weight: 800; letter-spacing: .1em; text-transform: uppercase; color: #8c5a43; margin-bottom: 3px; }

/* 6) izbira modela */
.ntk-opt { display: grid; grid-template-columns: 1fr 1fr; gap: 12px; margin: 4px 0 16px; }
.ntk-opt__i { border: 1.5px solid #ece3da; padding: 14px 14px 4px; background: #fff; }
.ntk-opt__i.is-hl { border-color: #2E2420; }
.ntk-opt__i h3 { font-size: 16.5px; font-weight: 800; margin: 0 0 4px; color: #231d19; text-transform: none; letter-spacing: 0; line-height: 1.25; }
.ntk-opt__i h3 span { display: inline-block; vertical-align: middle; margin-left: 4px; background: #2E2420; color: #fff; font-size: 10.5px; font-weight: 700; padding: 3px 7px; letter-spacing: .02em; }
.ntk-opt__i h3 span.soon { background: #f1ebe4; color: #6b5e55; }
.ntk-copy .ntk-opt__for { font-size: 13px; font-weight: 700; color: #8a7a6e; margin: 0 0 8px; }
.ntk-opt .ntk-check li { font-size: 14px; }

/* 7) primerjava */
.ntk-cmp { background: #fff; border: 1px solid #ece3da; overflow-x: auto; }
.ntk-cmp table { width: 100%; border-collapse: collapse; font-size: 15px; margin: 0 !important; }
.ntk-cmp th, .ntk-cmp td { padding: 14px 16px; border-bottom: 1px solid #ece3da; vertical-align: middle; text-align: left; line-height: 1.45; }
.ntk-cmp tbody tr:last-child td { border-bottom: 0; }
.ntk-cmp th.us { background: #2E2420; color: #fff; font-weight: 800; }
.ntk-cmp th.them { background: #f1ebe4; color: #6b5e55; font-weight: 800; }
.ntk-cmp td:first-child { font-weight: 700; color: #6b5e55; font-size: 13.5px; white-space: nowrap; }
.ntk-cmp td.us { background: #faf6f1; color: #231d19; font-weight: 700; }
.ntk-cmp td.them { color: #6b5e55; }
.ntk-cmp i { font-style: normal; font-weight: 800; margin-right: 7px; }
.ntk-cmp i.y { color: #2f9e5f; }
.ntk-cmp i.n { color: #c0392b; }

/* 8) ponuda */
.ntk-price { background: #f6f1eb; border: 1px solid #ece3da; padding: 16px 18px; margin: 4px 0 14px; }
.ntk-price strong { display: block; font-size: 18px; font-weight: 800; color: #231d19; }
.ntk-price > span { display: block; font-size: 13.5px; color: #6b5e55; }
.ntk-copy .ntk-price p { margin: 6px 0 0; font-size: 20px; font-weight: 800; color: #231d19; }
.ntk-price s { font-size: 14px; color: #999; font-weight: 400; margin-left: 4px; }
.ntk-price i { display: inline-block; font-style: normal; font-size: 11.5px; font-weight: 800; color: #fff; background: #B5462F; padding: 2px 7px; margin-left: 6px; vertical-align: middle; }

/* 9) mnenja */
.ntk-rate { text-align: center; font-size: 15px; color: #6b5e55; margin: 0 0 26px; }
.ntk-ugc { display: grid; grid-template-columns: repeat(3, 1fr); gap: 16px; margin-bottom: 28px; }
.ntk-ugc__c { background: #fff; border: 1px solid #ece3da; display: grid; grid-template-columns: 120px 1fr; }
.ntk-ugc__c img { width: 120px; height: 100%; min-height: 150px; object-fit: cover; display: block; }
.ntk-ugc__c div { padding: 14px 16px; }
.ntk-ugc__c p { font-size: 14.5px; line-height: 1.55; color: #231d19; margin: 0 0 6px; }
.ntk-ugc__c p.ntk-ugc__st { display: flex; justify-content: space-between; font-size: 12.5px; margin-bottom: 6px; }
.ntk-ugc__st em { font-style: normal; color: #2f9e5f; font-weight: 700; }
.ntk-ugc__c cite { font-style: normal; font-size: 13px; font-weight: 800; color: #231d19; }
.ntk-rv { list-style: none; padding: 0; margin: 0; display: grid; grid-template-columns: repeat(3, 1fr); gap: 16px; }
.ntk-rv__item { background: #fff; border: 1px solid #ece3da; padding: 18px 20px; margin: 0; }
.ntk-rv__item.is-hidden { display: none; }
.ntk-rv__head { display: flex; justify-content: space-between; align-items: baseline; gap: 10px; margin-bottom: 6px; }
.ntk-rv__head cite { font-style: normal; font-size: 15.5px; font-weight: 800; color: #231d19; }
.ntk-rv__head span { font-size: 12px; color: #8a7a6e; white-space: nowrap; }
.ntk-rv__stars { display: flex; gap: 2px; margin-bottom: 6px; }
.ntk-rv__stars span { width: 14px; height: 14px; display: inline-block; }
.ntk-rv__stars svg { width: 100%; height: 100%; display: block; fill: #e0a33c; }
.ntk-rv__stars span.is-empty svg { fill: #e2e2e2; }
.ntk-rv__item p { font-size: 14.5px; line-height: 1.6; color: #574c44; margin: 0; }
.ntk-rv__item p.ntk-rv__ver { font-size: 12.5px; color: #2f9e5f; font-weight: 700; margin-bottom: 6px; }
.ntk-more { margin-top: 24px; cursor: pointer; border: 1.5px solid #2E2420; border-radius: 8px; background: #fff; color: #2E2420; font-size: 14px; font-weight: 700; padding: 13px 28px; }
.ntk-more:hover { background: #2E2420; color: #fff; }

/* 10) zaupanje */
.ntk-trust { display: flex; gap: 16px; justify-content: center; }
.ntk-trust > div { flex: 0 1 320px; display: flex; flex-direction: column; align-items: center; gap: 8px; text-align: center; }
.ntk-trust p { margin: 0; font-size: 15px; line-height: 1.4; color: #231d19; }
.ntk-trust p.s { font-size: 13px; color: #6b5e55; }

/* kratek opis izdelka: uvodna vrstica + kljukice (CSS je tu, ne v kratkem opisu) */
.woocommerce-product-details__short-description .ntk-sub { margin: 0 0 10px; font-size: 15.5px; line-height: 1.5; color: #3a3a3a; text-align: left; max-width: none; }
.woocommerce div.product .woocommerce-product-details__short-description ul.ntk-benefits,
.woocommerce-product-details__short-description ul.ntk-benefits { list-style: none !important; padding: 0 !important; margin: 8px 0 14px !important; }
.woocommerce div.product .woocommerce-product-details__short-description ul.ntk-benefits li,
.woocommerce-product-details__short-description ul.ntk-benefits li { list-style: none !important; display: flex !important; align-items: flex-start; gap: 9px;
  margin: 0 0 7px !important; padding-left: 0 !important; text-indent: 0 !important; font-size: 15px !important; line-height: 1.45 !important; }
.woocommerce-product-details__short-description ul.ntk-benefits li::marker { content: "" !important; }
.woocommerce-product-details__short-description ul.ntk-benefits li::before { content: none !important; }
.woocommerce-product-details__short-description .ntk-tick { flex: 0 0 20px; display: inline-flex; align-items: center; justify-content: center; width: 20px; height: 20px; margin-top: 1px;
  border-radius: 50%; background: #2E2420; color: #fff; font-size: 11px; font-weight: 800; line-height: 1; }

@media (max-width: 980px) {
  .ntk-row2 { grid-template-columns: 1fr; gap: 28px; }
  .ntk-row2--rev .ntk-media { order: -1; }
  .ntk-ugc, .ntk-rv { grid-template-columns: repeat(2, 1fr); }
}
@media (max-width: 560px) {
  .ntk-sec { padding: 42px 0; }
  .ntk-wrap { padding: 0 16px; }
  .ntk-pr, .ntk-opt, .ntk-tiles, .ntk-ugc, .ntk-rv { grid-template-columns: 1fr; }
  .ntk-stats b { font-size: 21px; }
  .ntk-stats div { font-size: 12.5px; padding: 12px 10px; }
  .ntk-moves li { font-size: 12px; }
  .ntk-hs__lab { font-size: 11.5px; max-width: 130px; padding: 6px 8px; }
  .ntk-cta { width: 100%; text-align: center; }
  .ntk-cmp th, .ntk-cmp td { padding: 11px 9px; font-size: 13.5px; }
  .ntk-cmp td:first-child { white-space: normal; }
  .ntk-trust { flex-wrap: wrap; }
}
</style>
