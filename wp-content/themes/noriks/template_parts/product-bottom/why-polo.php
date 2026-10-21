<?php
/**
 * product-bottom: NORIKS Polo — udobna muska polo majica od rastezljivog pletiva (orto-polo).
 * Original: wearbreeze.co/products/capri-ax — vsebina in vrstni red 1:1 z originalom,
 * oblika po NORIKS stilu (predloga why-hands.php / why-brassiere.php):
 *   1) Neprolazna udobnost koja traje cijeli dan (slika ob besedilu)
 *   2) Vrhunski materijali koji odolijevaju vremenu (slika ob besedilu, obrnjeno)
 *   3) Nosite je u svakoj prilici (slika ob besedilu)
 *   4) Mnenje Nate H. (fotografija ob citatu, obrnjeno)
 *   5) "Vise od 300.000 zadovoljnih kupaca!" + recenzije kupcev (preprosta mreza, brez drsnika;
 *      citat John A. iz nakupne skatle in "Nose je Joe, Nate i jos 16.914 drugih" sta premaknjena sem)
 *   6) Dostava / 30 dana / jednostavni povrati (po NORIKS pogojih)
 * "You may also like" je izpuscen (trgovinski modul); FAQ originala je v reviews.php ($polo_faq),
 * mnenja tudi v auto_reviews/HR_polo.php. Slike: img/polo/ (original, brez tuje znamke).
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$npo      = get_template_directory_uri() . '/img/polo/';
$npo_path = get_template_directory() . '/img/polo/';
$npo_img  = function( $file, $alt, $cls = '' ) use ( $npo, $npo_path ) {
  if ( ! $file || ! file_exists( $npo_path . $file ) ) { return ''; }
  return '<img src="' . esc_url( $npo . $file ) . '" alt="' . esc_attr( $alt ) . '"' . ( $cls ? ' class="' . esc_attr( $cls ) . '"' : '' ) . ' loading="lazy">';
};
$npo_stars = function( $n ) {
  $n = max( 0, min( 5, (int) $n ) );
  $out = '<span class="npo-stars" aria-label="' . esc_attr( $n . ' od 5 zvjezdica' ) . '">';
  for ( $i = 1; $i <= 5; $i++ ) { $out .= '<i' . ( $i > $n ? ' class="is-off"' : '' ) . '>★</i>'; }
  return $out . '</span>';
};
$npo_allowed = array( 'strong' => array(), 'em' => array() );

/* 1–3) tri vrstice slika ob besedilu (besedilo 1:1 z originala, "Capri" -> NORIKS Polo) */
$npo_rows = array(
  array( 'slika' => 'po-w1-vjesalice.webp', 'oznaka' => 'Udobnost cijeli dan',
    'naslov' => 'Neprolazna udobnost <em>koja traje cijeli dan</em>',
    'tekst'  => array(
      'NORIKS Polo majice <strong>osmišljene su posebno za muškarce</strong>.',
      'Zahvaljujući <strong>krojenom atletskom kroju</strong> i <strong>izrazito rastezljivoj tkanini</strong> pružaju udobnost cijeli dan, a ne lijepe se uz tijelo.',
      'Tisuće muškaraca kažu da je to <strong>najudobnija majica</strong> koju su ikad nosili. 🏆' ),
    'big'    => 'Rastezljivost koja oblikuje tijelo, prozračno pletivo i kroj koji se kreće s vama — udobnost kao da je šivana po mjeri.' ),
  array( 'slika' => 'po-03-crna-rukav.webp', 'oznaka' => 'Materijali',
    'naslov' => 'Vrhunski materijali <em>koji odolijevaju vremenu</em>',
    'tekst'  => array(
      'Uživajte u <strong>vrhunskoj, prozračnoj rastezljivoj pletenini od 100 % PET-a</strong> i profinjenom kroju treće generacije.',
      'Lagana, a <strong>izrađena da traje</strong> — ova se majica kreće s vama i <strong>nadživjet će trendove</strong>.',
      '<strong>Odiše nenametljivim stilom</strong> i <strong>prirodnim samopouzdanjem</strong> koje je samo njezino.' ),
    'big'    => 'Izrađena od prozračnog pletiva, čistog atletskog kroja za svakodnevnu okretnost.' ),
  array( 'slika' => 'po-w3-ulica.webp', 'oznaka' => 'Za svaku priliku',
    'naslov' => 'Nosite je <em>u svakoj prilici</em>',
    'tekst'  => array(
      'NORIKS Polo <strong>omogućuje vam sve.</strong>',
      'Od jutarnjih sastanaka do planova za vikend <strong>uvijek ćete izgledati dotjerano.</strong> Zašto? Zato što pristaje svakoj prilici.',
      'Neće vas iznevjeriti kao krute, kockaste majice. <strong>U njoj izgledate dobro.</strong> A <strong>kad dobro izgledate, osjećate se odlično.</strong> A kad se osjećate odlično, možete <strong>postići sve</strong>.' ),
    'big'    => 'Najbolje izgleda uz chino hlače, kratke hlače, traperice i gotovo sve ostalo.' ),
);

/* 5) recenzije 1:1 z originala (imena, ocene in fotografije kot na originalu; 3x podvojeno mnenje Roselani S. le enkrat) */
$npo_reviews = array(
  array( 'ime' => 'John A. (SAD)', 'ocjena' => 5, 'foto' => 'po-rv-john.webp', 'prov' => false,
    'tekst' => 'Moja omiljena majica. Prošla je 20 pranja i još je kao nova. Paket od 6 komada je odličan izbor.' ),
  array( 'ime' => 'Oliver C.', 'ocjena' => 5, 'foto' => 'po-rv-01.webp',
    'tekst' => 'S 58 godina teško je naći majicu u kojoj ne izgledam kao vreća krumpira. Ova točno pristaje u prsima i rukama, a preko trbuha samo lagano pada. I ugodna je na koži.' ),
  array( 'ime' => 'Noah F.', 'ocjena' => 5, 'foto' => 'po-rv-02.webp',
    'tekst' => 'Iskreno, nisam puno očekivao. Ali majica je nevjerojatno glatka, odlično sjedi na ramenima i ne ističe trbuh. Već sam kupio još dvije.' ),
  array( 'ime' => 'James D.', 'ocjena' => 5, 'foto' => 'po-rv-03.webp',
    'tekst' => 'Imam 62 godine, 188 cm i 109 kg i nikad mi gotova majica nije ovako dobro pristajala. Ne lijepi se uz trbuh, a žena kaže da izgledam kao da redovito idem u teretanu (ne idem).' ),
  array( 'ime' => 'Bruce B.', 'ocjena' => 2, 'foto' => 'po-rv-04.webp', 'prov' => false,
    'tekst' => 'Majice pristaju dobro, ne baš kako je obećano, ali u granicama. Međutim, čim sam prvi put obukao majicu, konci oko gumba i na šavovima oko rupica za gumbe počeli su se parati, a još je nisam ni nosio.' ),
  array( 'ime' => 'Logan B.', 'ocjena' => 5, 'foto' => 'po-rv-05.webp',
    'tekst' => 'Ovo mi je već četvrta. Nosim ih gotovo svaki dan.' ),
  array( 'ime' => 'Aaron M.', 'ocjena' => 5, 'foto' => 'po-rv-06.webp',
    'tekst' => 'Imam 190 cm i 113 kg i savršeno mi pristaje. Skriva trbuh, a nije široka.' ),
  array( 'ime' => 'David S.', 'ocjena' => 5, 'foto' => 'po-rv-07.webp',
    'tekst' => 'Nisam mislio da će mi se svidjeti, ali čovječe, kako je udobna. U rukama sjedi taman — nije pretijesna, ali dovoljno da se vidi da još ponekad odem u teretanu.' ),
  array( 'ime' => 'Adam M.', 'ocjena' => 5, 'foto' => 'po-rv-08.webp',
    'tekst' => 'Majica je stigla složena i puna nabora. Ubacio sam je na 10 minuta u sušilicu s mokrim ručnikom i izašla je kao nova. Kroj je odličan, a žena kaže da »izgledam kao da sam smršavio«. Nisam, to je samo majica.' ),
  array( 'ime' => 'Samuel T.', 'ocjena' => 5, 'foto' => 'po-rv-09.webp',
    'tekst' => 'Nemam puno za reći — skriva trbuh i ramena izgledaju dobro. Materijal je lagan i ne lijepi se kad se znojiš. Prošla je 4 pranja i nije se skupila.' ),
  array( 'ime' => 'Gary H.', 'ocjena' => 5, 'foto' => 'po-rv-10.webp',
    'tekst' => 'Inače nosim jeftine polo majice iz supermarketa, ali ova je puno bolja. Lagana i svježa čak i po sparnom vremenu. Izgleda dotjerano uz traperice ili kratke hlače. Opet ću kupiti.' ),
  array( 'ime' => 'Christopher F.', 'ocjena' => 5, 'foto' => 'po-rv-11.webp',
    'tekst' => 'Boja je super. Žena kaže da izgledam »sređeno«, što god to značilo.' ),
  array( 'ime' => 'Kenneth M.', 'ocjena' => 5, 'foto' => 'po-rv-12.webp',
    'tekst' => 'Dobro pristaje. Rukavi su malo uži, ali na dobar način. I na suncu je ugodno svježa. Ne lijepi se uz trbuh, što je dobro jer ga imam.' ),
  array( 'ime' => 'Lawrence P.', 'ocjena' => 5, 'foto' => 'po-rv-13.webp',
    'tekst' => 'Kupio sam jednu samo da vidim kako pristaje. Nakon prvog nošenja naručio sam još tri.' ),
  array( 'ime' => 'Terry W.', 'ocjena' => 5, 'foto' => 'po-rv-14.webp',
    'tekst' => 'Imam dvije, sivu i crnu. Obje savršeno pristaju, prilično dobro skrivaju trbuh, a ramena i dalje lijepo obgrle. Radim u prodaji pa se puno krećem, a ova majica ostaje uvučena i ne gužva se.' ),
  array( 'ime' => 'Christian G.', 'ocjena' => 4, 'foto' => 'po-rv-15.webp',
    'tekst' => 'Pristaje stvarno dobro. Rukavi su uski, ali ne stežu — prije bih rekao da mi ruke izgledaju bolje. Nosio sam je na roštilju prošlog vikenda, bio je vruć dan, a nisam se osjećao znojno ni ljepljivo kao u starim polo majicama. Materijal je lagan, ali ne djeluje jeftino. Duljina je taman do struka, ni prekratka ni preduga. Imao sam majice koje se podignu svaki put kad se sagnem, ali ova ostaje na mjestu. Razmišljam da sljedeću uzmem tamnoplavu.' ),
  array( 'ime' => 'Roy H.', 'ocjena' => 5, 'foto' => 'po-rv-16.webp',
    'tekst' => 'Kupio sam jednu da vidim kako pristaje i bio sam iznenađen. Ramena su savršena, a struk malo opušteniji, što mi odgovara jer imam mali trbuh. Tkanina se lijepo rasteže pa nije kruta kao većina polo majica. Nosio sam je na proslavi 4. srpnja i na kraju večeri još je izgledala svježe. Nakon prvog pranja nije se skupila ni izvitoperila. Na kraju sam naručio još tri boje.' ),
  array( 'ime' => 'Scott L.', 'ocjena' => 5, 'foto' => 'po-rv-17.webp',
    'tekst' => 'Vrijedi svakog centa.' ),
  array( 'ime' => 'Eugene S.', 'ocjena' => 5, 'foto' => 'po-rv-18.webp',
    'tekst' => 'Odigrao sam u njoj 18 rupa golfa po vrućem i sparnom danu i cijelo je vrijeme ostala lagana i suha. Nije se lijepila za mene, a ovratnik je i nakon toga izgledao uredno.' ),
  array( 'ime' => 'Harold K.', 'ocjena' => 5, 'foto' => 'po-rv-19.webp',
    'tekst' => 'Na poslu me drži svježim, a većinu dana provodim u vrućem skladištu. Jako se znojim, pa to nešto govori. Ne zadržava miris kao neke majice. Lagana je, a opet djeluje čvrsto. I ima taman dovoljno rastezljivosti da se možeš ispružiti ili sagnuti, a da ne osjetiš kako te vuče preko ramena.' ),
  array( 'ime' => 'Louis M.', 'ocjena' => 5, 'foto' => 'po-rv-20.webp',
    'tekst' => 'Mislio sam da će biti još jedna tanka polo majica koja nakon pranja izgubi oblik. Nije. Osjeti se kvaliteta. Prozračna, mekana, pristaje uz ruke, a ne steže. Ne podiže se kad sjednem ili se ispružim.' ),
  array( 'ime' => 'Roger S.', 'ocjena' => 5, 'foto' => 'po-rv-21.webp',
    'tekst' => 'Rukavi su uski na laskav način. Struk nije širok. Tkanina je glatka i lagana.' ),
  array( 'ime' => 'Bruce W.', 'ocjena' => 5, 'foto' => 'po-rv-22.webp',
    'tekst' => 'Vrijedi svog novca. Dobro pristaje, svježa je i lijepo izgleda.' ),
  array( 'ime' => 'Jose M.', 'ocjena' => 5, 'foto' => 'po-rv-23.webp',
    'tekst' => 'Mogu je nositi u ured petkom, na večeru ili samo kad izađem. U svakoj prilici izgleda dobro.' ),
  array( 'ime' => 'Elijah M.', 'ocjena' => 5, 'foto' => 'po-rv-24.webp',
    'tekst' => 'Kći mi je rekla da u njoj izgledam »elegantno«. To dugo nisam čuo. Meni je to dovoljno.' ),
  array( 'ime' => 'James E.', 'ocjena' => 5, 'foto' => 'po-rv-25.webp',
    'tekst' => 'Imam krupnu građu i široka ramena, a ova majica pristaje i jednom i drugom, a da nije ni tijesna ni kockasta. Nosio sam je na golfu, a zatim ravno na večeru.' ),
  array( 'ime' => 'William V.', 'ocjena' => 5, 'foto' => 'po-rv-26.webp',
    'tekst' => 'Kupio sam jednu. Žena mi je rekla da kupim još tri. Navodno izgledam 5 kila lakše. Ne bunim se.' ),
  array( 'ime' => 'Benjamin X.', 'ocjena' => 5, 'foto' => 'po-rv-27.webp',
    'tekst' => 'Nisam očekivao da će majica od dvadesetak eura postati moja omiljena, ali evo. Pristaje kao nešto duplo skuplje.' ),
  array( 'ime' => 'Lucas S.', 'ocjena' => 5, 'foto' => 'po-rv-28.webp',
    'tekst' => 'Imam dug trup i većina majica na meni izgleda kratko. Ova izgleda uredno i uvučena i izvan hlača. Veliki plus.' ),
  array( 'ime' => 'Henry V.', 'ocjena' => 5, 'foto' => 'po-rv-29.webp',
    'tekst' => 'Najmekša majica koju sam nosio godinama. Osjećaj je kao kućna odjeća, a izgleda dovoljno dotjerano za izlazak. Nosim je na nedjeljni brunch i osjećam se prokleto dobro.' ),
  array( 'ime' => 'Theodore W.', 'ocjena' => 5, 'foto' => 'po-rv-30.webp',
    'tekst' => 'Kvalitetna majica, toplo preporučujem.' ),
  array( 'ime' => 'Jack E.', 'ocjena' => 5, 'foto' => 'po-rv-31.webp',
    'tekst' => 'U njoj se ne osjećaš nesigurno. To je rijetkost.' ),
  array( 'ime' => 'Levi K.', 'ocjena' => 5, 'foto' => 'po-rv-32.webp',
    'tekst' => 'Dobra majica, brzo je stigla. Zadovoljan sam.' ),
  array( 'ime' => 'Alexander D.', 'ocjena' => 5, 'foto' => 'po-rv-33.webp',
    'tekst' => 'Bit ću iskren. Nisam puno očekivao od majice od dvadesetak eura, ali pristaje mi bolje od onih od 80. Ne steže na trbuhu. Odlično.' ),
  array( 'ime' => 'Jennie D.', 'ocjena' => 5, 'foto' => '',
    'tekst' => 'Jako lijepa.' ),
  array( 'ime' => 'Carolyn K.', 'ocjena' => 4, 'foto' => '',
    'tekst' => 'Boje ne odgovaraju fotografijama. Plava je vrlo svijetla, a ne srebrnoplava kao na slici. Šljiva nije tamna bordo nego ljubičasta. Nisam bila zadovoljna bojama, ali korisnička podrška bila je vrlo susretljiva i ponudila zamjenu, pa je iskustvo na kraju bilo pozitivno.' ),
  array( 'ime' => 'Roger B.', 'ocjena' => 5, 'foto' => '',
    'tekst' => 'Obožavam ove majice. Udobne su, dobro pristaju, održavaju idealnu tjelesnu temperaturu, lijepo izgledaju, a tkanina je ugodna. Nosim ih na posao svaki dan.' ),
  array( 'ime' => 'Edmund A.', 'ocjena' => 4, 'foto' => '',
    'tekst' => 'Lijepe boje. Sviđa mi se kroj.' ),
  array( 'ime' => 'Roselani S.', 'ocjena' => 5, 'foto' => '',
    'tekst' => 'Tanje su nego što sam očekivala, ali suprugu se očito sviđaju! Dobro se rastežu i u njima ne izgleda neuredno. Inače nosi 4XL, ali u recenzijama piše da su za broj manje. Iako mu udobno pristaju, broj veći bi možda bio bolji. Bilo bi lijepo i da postoje veličine za visoke. Hvala!' ),
);

/* 6) NORIKS pogoji namesto "Worldwide Shipping / 30-Day Trial / Easy Returns" */
$npo_trust = array(
  array( 'ikona' => 'po-ik-dostava.webp', 'naslov' => 'Besplatna dostava', 'tekst' => 'Besplatna dostava za narudžbe iznad 70 €.' ),
  array( 'ikona' => 'po-ik-30-dana.webp', 'naslov' => '30 dana za povrat', 'tekst' => 'Pravo na povrat u roku od 30 dana.' ),
  array( 'ikona' => 'po-ik-povrat.webp',  'naslov' => 'Jednostavni povrati', 'tekst' => 'Jednostavna pravila povrata za vaš mir.' ),
);
?>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap">

<!-- 1–3) SLIKA OB BESEDILU — strani in ozadja se izmenjujejo -->
<?php foreach ( $npo_rows as $i => $row ) : ?>
<section class="npo-sec<?php echo ( 0 === $i % 2 ) ? ' npo-tint' : ''; ?>">
  <div class="npo-wrap">
    <div class="npo-row2<?php echo ( 1 === $i % 2 ) ? ' npo-row2--rev' : ''; ?>">
      <div class="npo-media"><?php echo $npo_img( $row['slika'], wp_strip_all_tags( $row['naslov'] ) ); ?></div>
      <div class="npo-copy">
        <p class="npo-kicker"><?php echo esc_html( $row['oznaka'] ); ?></p>
        <h2 class="npo-h3"><?php echo wp_kses( $row['naslov'], $npo_allowed ); ?></h2>
        <?php foreach ( $row['tekst'] as $p ) : ?><p><?php echo wp_kses( $p, $npo_allowed ); ?></p><?php endforeach; ?>
        <p class="npo-big"><?php echo esc_html( $row['big'] ); ?></p>
      </div>
    </div>
  </div>
</section>
<?php endforeach; ?>

<!-- 4) MNENJE NATE H. — fotografija ob citatu -->
<section class="npo-sec">
  <div class="npo-wrap">
    <div class="npo-row2 npo-row2--rev">
      <div class="npo-media npo-media--quote"><?php echo $npo_img( 'po-rv-nate.webp', 'Nate H., kupac' ); ?></div>
      <div class="npo-copy">
        <p class="npo-kicker">Iskustvo kupca</p>
        <?php echo $npo_stars( 5 ); ?>
        <h2 class="npo-h3 npo-quote">„Oduševljen sam. Udobna, izdržljiva i lagana. <em>Savršena majica za posao.</em> Toplo preporučujem.”</h2>
        <p class="npo-big">— Nate H. (London, UK)</p>
      </div>
    </div>
  </div>
</section>

<!-- 5) RECENZIJE — preprosta mreza -->
<section class="npo-sec npo-tint npo-sec--reviews">
  <div class="npo-wrap">
    <p class="npo-kicker npo-c">Recenzije kupaca</p>
    <h2 class="npo-h2 npo-c">Više od <em>300.000 zadovoljnih kupaca!</em></h2>
    <div class="npo-summary">
      <span class="npo-summary__avatars"><?php echo $npo_img( 'po-nose-ga.webp', 'Kupci u NORIKS Polo majici' ); ?></span>
      <span class="npo-summary__txt">Nose je Joe, Nate i još <strong>16.914</strong> drugih<br><?php echo $npo_stars( 4 ); ?> <strong>4,3 / 5</strong> na temelju 3977 recenzija</span>
    </div>
    <div class="npo-revs">
      <?php foreach ( $npo_reviews as $r ) : ?>
      <article class="npo-rv">
        <?php if ( $r['foto'] ) : ?><div class="npo-rv__photo"><?php echo $npo_img( $r['foto'], 'Fotografija kupca — ' . $r['ime'] ); ?></div><?php endif; ?>
        <div class="npo-rv__body">
          <?php echo $npo_stars( $r['ocjena'] ); ?>
          <p class="npo-rv__txt"><?php echo esc_html( $r['tekst'] ); ?></p>
          <p class="npo-rv__name"><?php echo esc_html( $r['ime'] ); ?><?php if ( ! isset( $r['prov'] ) || $r['prov'] ) : ?> <span>· Provjereni kupac</span><?php endif; ?></p>
        </div>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- 6) NORIKS POGOJI -->
<section class="npo-sec npo-sec--trust">
  <div class="npo-wrap">
    <div class="npo-trust">
      <?php foreach ( $npo_trust as $t ) : ?>
      <div class="npo-trust__item">
        <span class="npo-trust__ico"><?php echo $npo_img( $t['ikona'], '' ); ?></span>
        <h3><?php echo esc_html( $t['naslov'] ); ?></h3>
        <p><?php echo esc_html( $t['tekst'] ); ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<style>
/* NORIKS stil (predloga why-hands.php): oznaka + naslov z lezecim poudarkom, slika ob besedilu, izmenjujoca ozadja.
   Privzeta topla rjava paleta NORIKS (kot Hands, #a9683f). */
.npo-sec { padding: 60px 0; font-family: 'Poppins', system-ui, -apple-system, 'Segoe UI', Roboto, Arial, sans-serif; color: #231d19; background: #fff; }
.npo-sec * { box-sizing: border-box; }
.npo-tint { background: #f7f2ec; }
.npo-wrap { width: 100%; max-width: 1200px; margin: 0 auto; padding: 0 24px; }
.npo-c { text-align: center; }
.npo-sec h2, .npo-sec h3 { font-family: inherit; text-transform: none; letter-spacing: 0; }
.npo-kicker, .npo-copy p.npo-kicker { font-size: 12.5px; line-height: 1.4; font-weight: 700; letter-spacing: .14em; text-transform: uppercase; color: #a9683f; margin: 0 0 10px; }
.npo-h2 { font-weight: 700; font-size: clamp(25px, 3.1vw, 36px); line-height: 1.2; margin: 0 0 22px; color: #231d19; }
.npo-h2 em, .npo-h3 em { font-style: italic; color: #a9683f; }
.npo-h3 { font-weight: 700; font-size: clamp(22px, 2.6vw, 30px); line-height: 1.25; margin: 0 0 16px; color: #231d19; }
.npo-sec img { display: block; width: 100%; height: auto; }

/* slika ob besedilu */
.npo-row2 { display: grid; grid-template-columns: 1fr 1fr; gap: 56px; align-items: center; }
.npo-row2--rev .npo-media { order: 2; }
.npo-media img { aspect-ratio: 1 / 1; object-fit: cover; border-radius: 4px; box-shadow: 0 2px 4px rgba(40,25,15,.05), 0 14px 40px rgba(40,25,15,.10); }
.npo-media--quote { max-width: 440px; justify-self: center; width: 100%; }
.npo-copy p { font-size: 16px; line-height: 1.7; color: #4f443d; margin: 0 0 14px; }
.npo-copy p strong { color: #231d19; font-weight: 600; }
.npo-copy p.npo-big { font-size: 19px; font-weight: 700; color: #231d19; line-height: 1.45; margin-top: 6px; }
.npo-quote { font-size: clamp(22px, 2.4vw, 28px); }

/* zvjezdice */
.npo-stars { display: inline-flex; gap: 3px; margin: 0 0 12px; vertical-align: middle; }
.npo-stars i { font-style: normal; width: 22px; height: 22px; background: #00b67a; color: #fff; font-size: 15px; line-height: 22px; text-align: center; }
.npo-stars i.is-off { background: #dcdce6; }

/* recenzije — mreza */
.npo-summary { display: flex; align-items: center; justify-content: center; gap: 16px; margin: 0 0 32px; flex-wrap: wrap; text-align: left; }
.npo-summary__avatars { flex: 0 0 150px; width: 150px; }
.npo-summary__txt { font-size: 15px; line-height: 1.6; color: #4f443d; }
.npo-summary__txt .npo-stars { margin: 4px 6px 0 0; }
.npo-summary__txt .npo-stars i { width: 18px; height: 18px; font-size: 12px; line-height: 18px; }
.npo-revs { display: grid; grid-template-columns: repeat(4, minmax(0, 1fr)); gap: 18px; align-items: start; }
.npo-rv { background: #fff; border: 1px solid #ecdfd3; border-radius: 10px; overflow: hidden; }
.npo-rv__photo img { aspect-ratio: 1 / 1; object-fit: cover; }
.npo-rv__body { padding: 16px 18px 14px; }
.npo-rv .npo-stars { margin-bottom: 10px; }
.npo-rv .npo-stars i { width: 19px; height: 19px; font-size: 13px; line-height: 19px; }
.npo-rv__txt { font-size: 14.5px; line-height: 1.6; color: #3a302a; margin: 0 0 12px; }
.npo-rv__name { font-size: 13.5px; font-weight: 600; color: #231d19; margin: 0; border-top: 1px solid #ecdfd3; padding-top: 12px; }
.npo-rv__name span { font-weight: 400; color: #2e7d32; }

/* NORIKS pogoji */
.npo-sec--trust { padding: 48px 0; }
.npo-trust { display: grid; grid-template-columns: repeat(3, minmax(0, 1fr)); gap: 24px; text-align: center; }
.npo-trust__ico { display: block; width: 64px; height: 64px; margin: 0 auto 12px; }
.npo-trust h3 { font-size: 17px; font-weight: 700; margin: 0 0 6px; color: #231d19; }
.npo-trust p { font-size: 14.5px; line-height: 1.55; color: #4f443d; margin: 0; }

@media (max-width: 989px) {
  .npo-revs { grid-template-columns: repeat(2, minmax(0, 1fr)); }
  .npo-row2 { gap: 32px; }
}
@media (max-width: 749px) {
  .npo-sec { padding: 42px 0; }
  .npo-wrap { padding: 0 16px; }
  .npo-revs { grid-template-columns: 1fr; gap: 14px; }
  .npo-row2 { grid-template-columns: 1fr; gap: 24px; }
  .npo-row2--rev .npo-media { order: 0; }
  .npo-trust { grid-template-columns: 1fr; gap: 22px; }
}

/* galerija izdelka: sličice največ v 2 vrstah (5 na vrsto), ostale slike so dosegljive z drsenjem glavne slike */
.product_cat-orto-polo .flex-control-thumbs li:nth-child(n+11) { display: none !important; }

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
.woocommerce-product-details__short-description .npo-tick {
  position: absolute !important; left: 0 !important; top: 1px !important;
  width: 21px; height: 21px; border-radius: 50%;
  background: #2f9e5f !important; color: #fff !important;
  font-size: 12px !important; font-weight: 800 !important; line-height: 21px !important;
  text-align: center !important; display: inline-block !important; }
.woocommerce-product-details__short-description p:first-of-type { font-size: 16px; line-height: 1.55; }
</style>
