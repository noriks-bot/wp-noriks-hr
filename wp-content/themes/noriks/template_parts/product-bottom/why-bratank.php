<?php
/**
 * product-bottom: NORIKS BraTank — majica s ugradenim grudnjakom bez trake (orto-bratank).
 * Original: lunara-comfort.com/products/front-support-built-in-bra-tank — vsebina in vrstni red 1:1
 * z originalom, oblika po NORIKS stilu (kot why-hands.php: oznaka + naslov z lezecim poudarkom,
 * izmenicna ozadja, brez drsnikov, pasic in odstevalnikov).
 *   1) Pridruzite se 120.000+ zadovoljnih kupaca (NORIKS stevilka, original ima 20.000+) (6 mnenj, mreza)
 *   2) Sto smo promijenili + Kako djeluje — sloj po sloj (4 kartice)
 *   3) Vasa nova jutarnja rutina (3 koraki)
 *   4) Usporedba (tabela, stolpec NORIKS)
 *   5) NORIKS pogoji (zakljucna sekcija)
 *
 * STRUKTURA ORIGINALA: (lunara-comfort.com/products/front-support-built-in-bra-tank)
   1. trustpilot_reviews — 6 kartic mnenj BREZ fotografij (samo zvezdice, besedilo, ime); namizje mreza 3 v vrsti,
      mobilno karusel 1 kartica + puscici in pike (splide data-slides-mobile=1) — pri nas enako (.nbt-revs)
   2. What We Changed + How It Works — besedilo + 4 kartice slojev v mrezi 2 stolpca
   3. Your New Morning Routine — 3 stevilceni koraki navpicno (eden pod drugim)
   4. How It Compares — primerjalna tabela (klasicen / sportni / s polico / mi) z oceno 2/8–8/8
   5. FAQ — harmonika (pri nas v reviews.php)
   Original nima videov.
 * Original ima besedilne sekcije, slike pa samo v galeriji; po NORIKS standardu so fotografije
 * z originala vkljucene tudi v why sekcije (kupci, znacilnosti, prije/poslije, packshot).
 * FAQ originala je v reviews.php ($bratank_faq), mnenja za karusel teme v auto_reviews/HR_bratank.php.
 * Izpusceno (NORIKS stil): promo pasica »FALL SALE« z odstevalnikom, glava, noga, trgovinski moduli.
 * BARVA ORIGINALA: #b57e7e (rozni akcent originala, spremenljivka --rose na lunara-comfort.com); svetel ton za --bg #f6eded
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$nbt      = get_template_directory_uri() . '/img/bratank/';
$nbt_path = get_template_directory() . '/img/bratank/';
$nbt_img  = function( $file, $alt ) use ( $nbt, $nbt_path ) {
  if ( ! file_exists( $nbt_path . $file ) ) { return ''; }
  return '<img src="' . esc_url( $nbt . $file ) . '" alt="' . esc_attr( $alt ) . '" loading="eager">';
};

/* Mnenja 1:1 z originala (besedilo prevedeno, imena hrvaska, leta kot na originalu); jamstvo -> NORIKS pogoji (30 dana za povrat). */
$nbt_reviews = array(
  array( 'ime' => 'Vesna M., 66', 'tekst' => '»Svako jutro stajala sam pred komodom i pokušavala shvatiti koji grudnjak ide uz ono što nosim. Onaj s jastučićima, onaj bez žica, onaj koji se ne vidi ispod bijelog. Sada uzmem majicu i obučena sam. To je cijela odluka. Ladicu s grudnjacima nisam otvorila mjesecima i ni sekunde mi ne nedostaje.«' ),
  array( 'ime' => 'Branka K., 69', 'tekst' => '»Cijeli odrasli život prvo što bih napravila kad uđem u kuću bilo je da posegnem iza leđa i otkopčam grudnjak. Svaki dan. Ovu majicu nosim dva mjeseca i neku sam večer shvatila da legnem u krevet, a nemam što skinuti. Već mi je udobno. Nikad nisam mislila da ću to reći za nešto što nosim cijeli dan.«' ),
  array( 'ime' => 'Ljiljana P., 67', 'tekst' => '»Iskreno, sada živim u njoj. Obučem je odmah ujutro i nosim je cijeli dan po kući — dok kuham, čistim, idem do poštanskog sandučića, navečer na kauču. Prije bih se čim dođem kući presvukla u nešto mekano. Sada se nemam u što presvući ni što skinuti. Nosim je od trenutka kad ustanem do odlaska na spavanje. Kupila sam po jednu u svakoj boji da uvijek imam čistu u ladici.«' ),
  array( 'ime' => 'Mirjana T., 74', 'tekst' => '»Cijeli život mrzim grudnjake. Žice, uske trake, tragovi grudnjaka — s time se nosim desetljećima. Prijateljica mi je preporučila ovu majicu i iskreno, bila sam skeptična. Ali naručila sam tri jer imam 30 dana za povrat. Najbolja stvar koju sam kupila godinama.«' ),
  array( 'ime' => 'Dragica B., 78', 'tekst' => '»Najbolji dan s unucima 💕 Toliko je udobna da se mogu cijeli dan igrati na podu, a da me grudnjak ne ubija. Ove majice MIJENJAJU SVE! Imam 78 i napokon sam našla nešto što me stvarno podržava!«' ),
  array( 'ime' => 'Snježana R., 72', 'tekst' => '»Godinama sam probala sve i ništa nije pomoglo. Ovo je prva stvar koja zaista pristaje mom tijelu, a da me ne boli. Nosim je cijeli dan, u njoj odspavam, u njoj radim u vrtu. Nitko ne primijeti da ne nosim grudnjak.«' ),
);

$nbt_layers = array(
  array( 'Sloj za raspoređenu potporu', 'Unutarnji sloj daje nježno, ravnomjerno držanje preko cijelog trupa. Bez uskih traka koje koncentriraju pritisak.' ),
  array( 'Ušiveni jastučići koji ostaju na mjestu', 'Jastučići su ušiveni izravno u majicu. Ne pomiču se. Ne gužvaju se. I nakon 20 pranja su na istom mjestu.' ),
  array( 'Dizajn bez točaka pritiska', 'Bez žica. Bez kopči. Široka pokrivenost ramena ravnomjerno raspoređuje težinu pa se ništa ne urezuje u ramena.' ),
  array( 'Zaglađujući vanjski sloj', 'Vanjski sloj ravno prianja uz tijelo i stvara čistu siluetu ispod odjeće. Samo gladak, uredan izgled.' ),
);

$nbt_steps = array(
  array( 'Navucite je', 'Bez kopči. Bez kukica. Bez petljanja iza leđa. Samo je navucite preko glave kao svaku majicu na naramenice.' ),
  array( 'Izađite iz kuće', 'Sve je glatko. Pokrivene ste. Imate potporu. Uzmite ključeve i krenite.' ),
  array( 'Zaboravite da je nosite', 'Bez namještanja naramenica usred jutra. Bez povlačenja trake nakon ručka. Samo udobnost koja traje od jutarnje kave do večeri na kauču.' ),
);

/* Usporedba: 1 = kvacica, 0 = krizec (Klasicni grudnjak, Sportski grudnjak, Top s policom, NORIKS). */
$nbt_compare = array(
  array( 'Udobno cijeli dan',              0, 0, 0 ),
  array( 'Dovoljno potpore',               1, 1, 0 ),
  array( 'Glatko ispod odjeće',            0, 0, 1 ),
  array( 'Ostaje na mjestu cijeli dan',    0, 1, 0 ),
  array( 'Bez namještanja',                0, 1, 0 ),
  array( 'Jastučići ostaju nakon pranja',  1, 0, 0 ),
  array( 'Prozračno',                      0, 0, 1 ),
  array( 'Lako oblačenje i skidanje',      0, 0, 1 ),
);

$nbt_star = '<svg viewBox="0 0 20 20" aria-hidden="true"><path fill="currentColor" d="M10 1.5l2.6 5.3 5.9.9-4.3 4.1 1 5.8L10 14.8l-5.2 2.8 1-5.8L1.5 7.7l5.9-.9z"/></svg>';
?>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap">

<!-- 1) PRIDRUZITE SE 120.000+ ZADOVOLJNIH KUPACA -->
<section class="nbt-sec nbt-tint nbt-sec--bg">
  <div class="nbt-wrap">
    <p class="nbt-kicker">Recenzije kupaca</p>
    <h2 class="nbt-h2">Pridružite se više od <em>120.000 zadovoljnih kupaca.</em></h2>
    <p class="nbt-score">Odlično <strong>4.8</strong> <strong>/ 5</strong>
      <span class="nbt-stars" aria-label="5 od 5 zvjezdica"><?php echo str_repeat( '<i>' . $nbt_star . '</i>', 5 ); ?></span></p>
    <div class="nbt-media nbt-media--wide"><?php echo $nbt_img( 'bt-04-kupci.webp', 'Kupci u NORIKS BraTank majicama' ); ?></div>
    <div class="nbt-revs">
      <?php foreach ( $nbt_reviews as $r ) : ?>
      <article class="nbt-rv">
        <span class="nbt-stars" aria-label="5 od 5 zvjezdica"><?php echo str_repeat( '<i>' . $nbt_star . '</i>', 5 ); ?></span>
        <p class="nbt-rv__txt"><?php echo esc_html( $r['tekst'] ); ?></p>
        <p class="nbt-rv__name"><i class="nbt-av" aria-hidden="true"><?php echo esc_html( mb_substr( $r['ime'], 0, 1 ) ); ?></i><strong><?php echo esc_html( $r['ime'] ); ?></strong></p>
      </article>
      <?php endforeach; ?>
    </div>
    <div class="nbt-kar"><button type="button" data-d="-1" aria-label="Prethodno">&#8249;</button><div class="nbt-dots"></div><button type="button" data-d="1" aria-label="Sljedeće">&#8250;</button></div>
  </div>
</section>

<!-- 2) STO SMO PROMIJENILI + KAKO DJELUJE — SLOJ PO SLOJ -->
<section class="nbt-sec">
  <div class="nbt-wrap">
    <p class="nbt-kicker">Što smo promijenili</p>
    <h2 class="nbt-h2">Što smo promijenili — <em>i zašto je osjećaj drukčiji</em></h2>
    <p class="nbt-sub">Nismo napravili bolji grudnjak. Potpuno smo prestali raditi grudnjake.</p>
    <div class="nbt-media nbt-media--wide"><?php echo $nbt_img( 'bt-02-lastnosti-hr.webp', 'Značajke NORIKS BraTank majice s ugrađenim grudnjakom' ); ?></div>
    <div class="nbt-callout">
      <p>Umjesto da potporu natjeramo u dvije naramenice i traku, raspodijelili smo je po cijeloj majici. Bez točaka koncentriranog pritiska. Bez kopči i žica. Bez konstrukcije koja se urezuje, štipa ili smota.</p>
      <p class="nbt-big">Ovo nije steznik. Ovo nije kompresija. Ovo je »taman dovoljno potpore« — osjećaj da vas nešto nježno drži i glatko pokriva, a da se nijedan dio majice ne bori protiv vašeg tijela.</p>
    </div>
    <h3 class="nbt-h3">Kako djeluje — sloj po sloj</h3>
    <div class="nbt-grid">
      <?php foreach ( $nbt_layers as $i => $l ) : ?>
      <div class="nbt-card">
        <span class="nbt-num"><?php echo (int) ( $i + 1 ); ?></span>
        <div>
          <h4><?php echo esc_html( $l[0] ); ?></h4>
          <p><?php echo esc_html( $l[1] ); ?></p>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- 3) VASA NOVA JUTARNJA RUTINA -->
<section class="nbt-sec nbt-tint nbt-sec--bg">
  <div class="nbt-wrap">
    <p class="nbt-kicker">Jutarnja rutina</p>
    <h2 class="nbt-h2">Vaša nova <em>jutarnja rutina</em></h2>
    <div class="nbt-media nbt-media--wide"><?php echo $nbt_img( 'bt-03-prije-poslije.webp', 'NORIKS BraTank — prije i poslije' ); ?></div>
    <ol class="nbt-steps">
      <?php foreach ( $nbt_steps as $i => $st ) : ?>
      <li>
        <span class="nbt-num"><?php echo (int) ( $i + 1 ); ?></span>
        <div>
          <h3><?php echo esc_html( $st[0] ); ?></h3>
          <p><?php echo esc_html( $st[1] ); ?></p>
        </div>
      </li>
      <?php endforeach; ?>
    </ol>
  </div>
</section>

<!-- 4) USPOREDBA -->
<section class="nbt-sec">
  <div class="nbt-wrap">
    <p class="nbt-kicker">Usporedba</p>
    <h2 class="nbt-h2">Nije svaka potpora <em>jednaka.</em></h2>
    <div class="nbt-media nbt-media--sm"><?php echo $nbt_img( 'bt-06-crna.webp', 'NORIKS BraTank majica s ugrađenim grudnjakom u crnoj boji' ); ?></div>
    <table class="nbt-cmp">
      <thead>
        <tr>
          <th class="feat"></th>
          <th>Klasični grudnjak</th>
          <th>Sportski grudnjak</th>
          <th>Top s policom</th>
          <th class="win">NORIKS</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ( $nbt_compare as $row ) : ?>
        <tr>
          <td class="feat"><?php echo esc_html( $row[0] ); ?></td>
          <?php for ( $c = 1; $c <= 3; $c++ ) : ?>
            <?php if ( $row[ $c ] ) : ?><td class="check">&#10003;</td><?php else : ?><td class="cross">&#10005;</td><?php endif; ?>
          <?php endfor; ?>
          <td class="win check">&#10003;</td>
        </tr>
        <?php endforeach; ?>
        <tr class="score">
          <td class="feat">Ocjena</td>
          <td>2/8</td>
          <td>3/8</td>
          <td>3/8</td>
          <td class="win">8/8</td>
        </tr>
      </tbody>
    </table>
    <p class="nbt-big nbt-big--c">Jedan stupac sa svim kvačicama. To je onaj koji želite.</p>
  </div>
</section>


<!-- 5) NORIKS POGOJI -->
<section class="nbt-sec nbt-tint nbt-sec--bg npg-s"><?php $npg = array( 'izdelek' => 'NORIKS BraTank', 'barva' => '#b57e7e' ); include __DIR__ . '/noriks-pogoji.php'; ?></section>

<style>
/* slike v sekcijah (standard prejsnjih izdelkov) */
.nbt-sec img { display: block; width: 100%; height: auto; }
.nbt-media--wide { max-width: 820px; margin: 0 auto 26px; }
.nbt-media--wide img { border-radius: 12px; box-shadow: 0 2px 4px rgba(30,20,20,.05), 0 14px 40px rgba(30,20,20,.10); }
.nbt-media--sm { max-width: 400px; margin: 0 auto 26px; }
.nbt-media--sm img { border-radius: 12px; aspect-ratio: 4/5; object-fit: cover; box-shadow: 0 2px 4px rgba(30,20,20,.05), 0 14px 40px rgba(30,20,20,.10); }

.nbt-sec { --nbt-rose: #b57e7e; --nbt-ink: #1f1b1a; --nbt-muted: #5b5350; --nbt-tint: #f6f2ec; --nbt-line: #e8ded6; --nbt-x: #cbc3bd;
  padding: 60px 0; background: #fff; font-family: 'Poppins', system-ui, -apple-system, 'Segoe UI', Roboto, Arial, sans-serif; color: var(--nbt-ink); }
.nbt-sec * { box-sizing: border-box; }
.nbt-tint { background: var(--nbt-tint); }
.nbt-wrap { width: 100%; max-width: 1240px; margin: 0 auto; padding: 0 24px; }
.nbt-sec h2, .nbt-sec h3, .nbt-sec h4 { font-family: inherit; text-transform: none; letter-spacing: 0; }
.nbt-kicker { margin: 0 0 8px; text-align: center; font-size: 12px; font-weight: 700; letter-spacing: .14em; text-transform: uppercase; color: var(--nbt-rose); }
.nbt-h2 { margin: 0 0 14px; text-align: center; font-size: clamp(26px, 3.4vw, 36px); line-height: 1.2; font-weight: 700; color: var(--nbt-ink); }
.nbt-h2 em { font-style: italic; color: var(--nbt-rose); }
.nbt-sub { text-align: center; color: var(--nbt-muted); font-size: 16px; line-height: 1.6; margin: 0 auto 28px; max-width: 62ch; }
.nbt-big { font-weight: 700; color: var(--nbt-ink); }
.nbt-big--c { text-align: center; margin: 24px auto 0; max-width: 520px; font-size: 16px; }
.nbt-num { flex: 0 0 34px; width: 34px; height: 34px; border-radius: 50%; background: var(--nbt-rose); color: #fff;
  font-size: 15px; font-weight: 700; display: inline-flex; align-items: center; justify-content: center; }

/* 1) mnenja */
.nbt-score { display: flex; align-items: center; justify-content: center; flex-wrap: wrap; gap: 6px; font-size: 18px; color: var(--nbt-ink); margin: 0 0 28px; }
.nbt-stars { display: inline-flex; gap: 2px; color: #00b67a; line-height: 1; }
.nbt-stars i { display: inline-flex; width: 20px; height: 20px; }
.nbt-stars svg { width: 100%; height: 100%; }
.nbt-revs { display: grid; grid-template-columns: repeat(3, minmax(0, 1fr)); gap: 20px; }
.nbt-rv { background: #fff; border: 1px solid var(--nbt-line); padding: 24px 22px; display: flex; flex-direction: column; }
.nbt-rv .nbt-stars { margin-bottom: 12px; }
.nbt-rv__txt { font-size: 15px; line-height: 1.65; color: #332e2c; margin: 0 0 14px; flex: 1 1 auto; }
.nbt-rv__name { font-size: 14px; margin: 0; color: var(--nbt-ink); }

/* 2) sto smo promijenili */
.nbt-callout { background: #fff; border-left: 3px solid var(--nbt-rose); padding: 22px 24px; margin: 0 0 36px; }
.nbt-callout p { font-size: 16px; line-height: 1.65; color: #332e2c; margin: 0; }
.nbt-callout p + p { margin-top: 14px; }
.nbt-h3 { font-size: 22px; font-weight: 700; color: var(--nbt-ink); margin: 0 0 16px; text-align: center; }
.nbt-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 16px; }
.nbt-card { display: flex; gap: 14px; align-items: flex-start; border: 1px solid var(--nbt-line); padding: 20px; background: #fff; }
.nbt-card h4 { font-size: 17px; font-weight: 700; color: var(--nbt-ink); margin: 4px 0 6px; }
.nbt-card p { font-size: 15px; line-height: 1.55; color: var(--nbt-muted); margin: 0; }

/* 3) jutarnja rutina */
.nbt-steps { list-style: none; margin: 10px 0 0; padding: 0; }
.nbt-steps li { display: flex; gap: 16px; align-items: flex-start; margin: 0 0 24px; }
.nbt-steps li:last-child { margin-bottom: 0; }
.nbt-steps h3 { font-size: 18px; font-weight: 700; color: var(--nbt-ink); margin: 4px 0 6px; }
.nbt-steps p { font-size: 16px; line-height: 1.6; color: var(--nbt-muted); margin: 0; }

/* 5) NORIKS pogoji */
.nbt-pogoji { display: grid; grid-template-columns: repeat(4, 1fr); gap: 18px; }
.nbt-pog { background: var(--nbt-tint); border-radius: 14px; padding: 22px 16px; text-align: center; }
.nbt-pog strong { display: block; font-size: 17px; font-weight: 800; margin: 0 0 6px; color: var(--nbt-ink); }
.nbt-pog span { font-size: 14px; color: var(--nbt-muted); }

/* 4) usporedba */
.nbt-cmp { width: 100%; border-collapse: collapse; table-layout: fixed; margin: 14px 0 0; border: 0; background: #fff; }
.nbt-cmp th, .nbt-cmp td { padding: 13px 8px; text-align: center; border: 0; border-bottom: 1px solid var(--nbt-line); vertical-align: middle; background: transparent; }
.nbt-cmp thead th { font-weight: 700; color: var(--nbt-ink); font-size: 14px; line-height: 1.2; }
.nbt-cmp .feat { text-align: left; width: 33%; color: var(--nbt-ink); font-weight: 500; font-size: 15px; line-height: 1.3; padding-left: 12px; }
.nbt-cmp .check { color: var(--nbt-rose); font-weight: 800; font-size: 18px; }
.nbt-cmp .cross { color: var(--nbt-x); font-weight: 700; font-size: 16px; }
.nbt-cmp .win { background: #faf3f3; }
.nbt-cmp thead .win { color: var(--nbt-rose); border-top: 3px solid var(--nbt-rose); }
.nbt-cmp .score td { font-weight: 800; border-bottom: none; font-size: 15px; }
.nbt-cmp .score .win { color: var(--nbt-rose); }

@media (max-width: 749px) {
  .nbt-sec { padding: 42px 0; }
  .nbt-revs { display: flex; gap: 14px; overflow-x: auto; scroll-snap-type: x mandatory; scrollbar-width: none; -webkit-overflow-scrolling: touch; }
  .nbt-revs::-webkit-scrollbar { display: none; }
  .nbt-revs .nbt-rv { flex: 0 0 100%; scroll-snap-align: center; box-sizing: border-box; }
  .nbt-grid { grid-template-columns: 1fr; }
  .nbt-pogoji { grid-template-columns: 1fr 1fr; }
  .nbt-cmp th, .nbt-cmp td { padding: 11px 3px; }
  .nbt-cmp thead th { font-size: 12px; }
  .nbt-cmp .feat { font-size: 13px; padding-left: 6px; }
  .nbt-cmp .check { font-size: 16px; }
  .nbt-cmp .cross { font-size: 14px; }
  .nbt-cmp .score td { font-size: 13px; }
}

/* 1) mnenja — mobilni karusel (puscici + pike), na namizju skrito */
.nbt-kar { display: none; }
@media (max-width: 749px) {
  .nbt-kar { display: flex; align-items: center; justify-content: center; gap: 14px; margin-top: 16px; }
  .nbt-kar button { width: 38px; height: 38px; border-radius: 50%; border: 1px solid var(--nbt-line); background: #fff; color: var(--nbt-ink); font-size: 20px; line-height: 1; padding: 0; cursor: pointer; }
  .nbt-dots { display: flex; gap: 7px; }
  .nbt-dots span { width: 8px; height: 8px; border-radius: 50%; background: var(--nbt-line); transition: background .2s; }
  .nbt-dots span.on { background: var(--nbt-rose); }
}

/* galerija izdelka: sličice največ v 2 vrstah (5 na vrsto), ostale slike so dosegljive z drsenjem glavne slike */
.product_cat-orto-bratank .flex-control-thumbs li:nth-child(n+11) { display: none !important; }
/* dizajn */
.nbt-sec{--nbt-tint:#f6eded;padding:72px 0}.nbt-sec.nbt-sec--bg{background:#f6eded}
.nbt-kicker::before{content:"";display:inline-block;width:22px;height:2px;background:#b57e7e;vertical-align:middle;margin:-2px 10px 0 0;border-radius:2px}
.nbt-rv,.nbt-card{border-radius:16px;border-color:rgba(181,126,126,.35);box-shadow:0 6px 18px rgba(0,0,0,.05);transition:transform .2s,box-shadow .2s}.nbt-rv:hover,.nbt-card:hover{transform:translateY(-3px);box-shadow:0 14px 30px rgba(181,126,126,.22)}
.nbt-callout{border-radius:0 16px 16px 0;box-shadow:0 6px 18px rgba(0,0,0,.05)}
.nbt-rv__name{display:flex;align-items:center;gap:10px;font-weight:700}.nbt-av{flex:0 0 34px;width:34px;height:34px;border-radius:50%;background:#ecdcdc;border:1px solid #b57e7e;color:#8f5656;font-style:normal;font-weight:800;font-size:14px;display:inline-flex;align-items:center;justify-content:center}
.nbt-pog{text-align:center;background:#fff;border:1px solid rgba(181,126,126,.35);border-radius:16px;padding:28px 18px;transition:transform .2s,box-shadow .2s}.nbt-pog:hover{transform:translateY(-3px);box-shadow:0 14px 30px rgba(181,126,126,.22)}
.nbt-pog strong,.nbt-pog span:not(.nbt-pi){display:block}span.nbt-pi{width:58px;height:58px;border-radius:50%;background:#ecdcdc;border:1px solid #b57e7e;color:#8f5656;display:flex;align-items:center;justify-content:center;margin:0 auto 14px}.nbt-pi svg{width:28px;height:28px}
@media (max-width:767px){.nbt-sec{padding:46px 0}.nbt-wrap{padding:0 16px}.nbt-pog{padding:22px 12px}}
/* /dizajn */
/* brez-obrob */ .nbt-av,.nbt-card,.nbt-rv,span.nbt-pi{border:0!important}
</style>
<script>
(function(){var k=document.querySelector('.nbt-revs'),n=document.querySelector('.nbt-kar');if(!k||!n)return;
var c=k.children,d=n.querySelector('.nbt-dots');for(var i=0;i<c.length;i++)d.appendChild(document.createElement('span'));
function idx(){return Math.round(k.scrollLeft/(k.clientWidth||1));}
function upd(){var j=idx();[].forEach.call(d.children,function(s,m){s.className=m===j?'on':'';});}
n.addEventListener('click',function(e){var b=e.target.closest('button');if(!b)return;var j=Math.max(0,Math.min(c.length-1,idx()+(+b.getAttribute('data-d'))));k.scrollTo({left:c[j].offsetLeft-k.offsetLeft,behavior:'smooth'});});
k.addEventListener('scroll',upd,{passive:true});upd();})();
</script>
