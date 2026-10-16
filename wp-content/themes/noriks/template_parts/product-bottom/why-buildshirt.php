<?php
/**
 * product-bottom: NORIKS BuildShirt — majica s ugradenim grudnjakom (orto-buildshirt).
 * Original: getsummet.com/products/sculpt-tank-with-built-in-bra — struktura je 1:1 z originalom
 * (isto stevilo sekcij, isti vrstni red, isti dizajn), besedila prevedena in prilagojena.
 *   1) Trak s prednostima           7) Vecina majica je losa (3 stvari)
 *   2) Odabir velicine              8) Kopije (original vs kopija)
 *   3) Obucite je u sedam (video)   9) Zasto nista drugo nije djelovalo (matrica)
 *   4) Sto nosi tezinu             10) 30 dana testa
 *   5) Zasto nista nije djelovalo  11) Zakljucak + CTA
 *   6) Sto zene zaista kazu (UGC)
 * Slike: img/buildshirt/ (Dropbox SPLETNA STRAN + namizje NORIKS-BUILDSHIRT + original).
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$nbs      = get_template_directory_uri() . '/img/buildshirt/';
$nbs_path = get_template_directory() . '/img/buildshirt/';
$nbs_img  = function( $file, $alt ) use ( $nbs, $nbs_path ) {
  if ( ! file_exists( $nbs_path . $file ) ) { return ''; }
  return '<img src="' . esc_url( $nbs . $file ) . '" alt="' . esc_attr( $alt ) . '" loading="lazy">';
};
?>

<!-- 1) TRAK S PREDNOSTIMA -->
<section class="nbs-ticker" aria-hidden="true">
  <div class="nbs-ticker__track"><div class="nbs-ticker__row"><span>Bez žice</span><span>Bez kopči</span><span>Ništa za otkopčati u 17 h</span><span>Veličine XS–6XL</span><span>Besplatna zamjena veličine</span><span>Besplatna dostava</span><span>30 dana testa</span></div><div class="nbs-ticker__row"><span>Bez žice</span><span>Bez kopči</span><span>Ništa za otkopčati u 17 h</span><span>Veličine XS–6XL</span><span>Besplatna zamjena veličine</span><span>Besplatna dostava</span><span>30 dana testa</span></div></div>
</section>

<!-- 2) ODABIR VELIČINE -->
<section class="nbs-sec nbs-tint">
  <div class="nbs-wrap">
    <div class="nbs-finder">
      <p class="nbs-kicker" style="text-align:center">Odabir veličine</p>
      <h2 class="nbs-h2" style="text-align:center">Recite nam veličinu grudnjaka, <em>mi vam kažemo veličinu majice</em></h2>
      <p class="nbs-finder__lead">Pletivo se rasteže u sva četiri smjera — mjere u tablici su <strong>mjere tijela</strong> koje svaka veličina pokriva, a ne mjere majice položene na stol.</p>
      <a class="nbs-cta js-open-size-chart" href="#custom-size-chart-modal">Pronađi svoju veličinu</a>
      <p class="nbs-finder__note">Točna veličina — naručite onu koju inače nosite. Ako promašite, zamjena je besplatna.</p>
    </div>
  </div>
</section>

<!-- 3) OBUCITE JE U SEDAM -->
<section class="nbs-sec">
  <div class="nbs-wrap nbs-row2">
    <div class="nbs-copy">
      <h2 class="nbs-h2">Obucite je u sedam. <em>Zaboravite je do spavanja.</em></h2>
      <p>Bez žice. Bez kopči. Ništa preko leđa. Jedan sloj koji radi posao za koji su prije trebala tri.</p>
      <div class="nbs-points">
        <div class="nbs-point"><h3>Ništa za odbrojavanje</h3><p>Odbrojavanje do pet popodne postoji zato što četiri uska trakа pritišću od doručka. Ovdje nema ni jedne.</p></div>
        <div class="nbs-point"><h3>Nevidljivo ispod bluze</h3><p>Nema naramica preko leđa — nema linija ni kopči koje se ocrtavaju. Dvostruki sloj drži oblik bez ruba koji se utiskuje.</p></div>
        <div class="nbs-point"><h3>Vaš oblik, ne spljoštena verzija</h3><p>Raspodijeliti težinu je suprotno od stiskanja. Drži i oblikuje bez spljoštenja koje daje mekani bralette.</p></div>
        <div class="nbs-point"><h3>Jedan komad umjesto tri</h3><p>Grudnjak, potkošulja, majica. Sada je to jedan mekani sloj — što je u toploj sobi cijela poanta.</p></div>
      </div>
    </div>
    <div class="nbs-media"><?php echo $nbs_img( 'bs-vid-1.webp', 'NORIKS BuildShirt na tijelu — jedan sloj umjesto tri' ); ?></div>
  </div>
</section>

<!-- 4) ŠTO ZAPRAVO NOSI TEŽINU -->
<section class="nbs-sec nbs-tint">
  <div class="nbs-wrap">
    <h2 class="nbs-h2" style="text-align:center;max-width:900px;margin:0 auto 14px">Uzmite bilo koji grudnjak <em>i pogledajte što zapravo nosi težinu</em></h2>
    <p class="nbs-lead">Dvije naramice. Jedna traka koja najjače steže sa strane. Četiri uska komada tkanine, svaki oko dva i pol centimetra širok. To je cijela konstrukcija — i svaki gram potpore koji vaše tijelo treba sabijen je u te četiri točke.</p>
    <div class="nbs-cmp2">
      <div class="nbs-cmp2__card">
        <span class="nbs-cmp2__tag">Klasični grudnjak</span>
        <div class="nbs-torso">
          <svg viewBox="0 0 160 220" role="img" aria-label="Klasični grudnjak — četiri uske točke pritiska">
            <path d="M40 20 Q80 6 120 20 L132 78 Q136 140 120 206 L40 206 Q24 140 28 78 Z" fill="#efe6df" stroke="#d9c8bc" stroke-width="2"/>
            <circle cx="52" cy="40" r="11" fill="#d05353"/><text x="52" y="45" font-size="13" text-anchor="middle" fill="#fff">1</text>
            <circle cx="108" cy="40" r="11" fill="#d05353"/><text x="108" y="45" font-size="13" text-anchor="middle" fill="#fff">2</text>
            <circle cx="34" cy="96" r="11" fill="#d05353"/><text x="34" y="101" font-size="13" text-anchor="middle" fill="#fff">3</text>
            <circle cx="126" cy="96" r="11" fill="#d05353"/><text x="126" y="101" font-size="13" text-anchor="middle" fill="#fff">4</text>
          </svg>
        </div>
        <h3>Sva težina. Četiri uske točke.</h3>
        <p>Dva ramena i dvije strane nose cijeli teret. Točno ondje nastaju brazde, crvene linije i urezivanje — jer sve ide onamo.</p>
      </div>
      <div class="nbs-cmp2__card nbs-cmp2__card--us">
        <span class="nbs-cmp2__tag nbs-cmp2__tag--us">NORIKS BuildShirt</span>
        <div class="nbs-torso">
          <svg viewBox="0 0 160 220" role="img" aria-label="NORIKS BuildShirt — težina raspodijeljena po cijelom trupu">
            <defs><linearGradient id="nbsSpread" x1="0" y1="0" x2="0" y2="1">
              <stop offset="0%" stop-color="#cBa392" stop-opacity=".85"/><stop offset="100%" stop-color="#a8705a" stop-opacity=".25"/>
            </linearGradient></defs>
            <path d="M40 20 Q80 6 120 20 L132 78 Q136 140 120 206 L40 206 Q24 140 28 78 Z" fill="url(#nbsSpread)" stroke="#a8705a" stroke-width="2"/>
          </svg>
        </div>
        <h3>Ista težina. Raspodijeljena po cijeloj vama.</h3>
        <p>Ramena, rebra, bokovi i struk dijele teret po stotinama kvadratnih centimetara umjesto po četiri uska. Nijedna točka ne nosi sve, pa se nema što urezati.</p>
      </div>
    </div>
    <p class="nbs-lead" style="margin-top:22px"><strong>Četiri točke, svaka oko dva i pol centimetra — protiv cijelog trupa.</strong> Ista težina, nigdje da se skupi. Ništa za otkopčati u pet, jer ništa nije pritiskalo od devet.</p>
  </div>
</section>

<!-- 5) ZAŠTO NIŠTA NIJE DJELOVALO -->
<section class="nbs-sec">
  <div class="nbs-wrap">
    <h2 class="nbs-h2" style="text-align:center">Zašto ništa što ste probali <em>nije djelovalo</em></h2>
    <p class="nbs-lead">Pogledajte uobičajena rješenja kroz tu prizmu.</p>
    <div class="nbs-fixes">
        <div class="nbs-fix"><h3>Uzmite veći obujam</h3><p>Labavija traka, manje urezivanja — otprilike tjedan dana.</p><span class="nbs-fix__tag">I DALJE ČETIRI TOČKE</span></div>
        <div class="nbs-fix"><h3>Kupite mekani bralette</h3><p>Udobno tri sata, onda je sve spljošteno.</p><span class="nbs-fix__tag">I DALJE ČETIRI TOČKE</span></div>
        <div class="nbs-fix"><h3>Kupite skuplji grudnjak</h3><p>Bolja tkanina, ljepša izrada, prodavačica koja zna svoj posao.</p><span class="nbs-fix__tag">I DALJE ČETIRI TOČKE</span></div>
        <div class="nbs-fix"><h3>Odustanite od grudnjaka</h3><p>Stvarno udobno — dok ne zazvoni zvono na vratima.</p><span class="nbs-fix__tag">BEZ IKAKVE POTPORE</span></div>
    </div>
    <p class="nbs-lead" style="margin-top:20px"><strong>Svako od njih mijenja materijal. Nijedno ne mijenja konstrukciju.</strong></p>
  </div>
</section>

<!-- 6) ŠTO ŽENE ZAISTA KAŽU -->
<section class="nbs-sec nbs-tint">
  <div class="nbs-wrap">
    <p class="nbs-kicker" style="text-align:center">Potvrđene recenzije</p>
    <h2 class="nbs-h2" style="text-align:center">Što žene <em>zaista kažu</em></h2>
    <div class="nbs-ugc">
        <figure class="nbs-ugc__card"><?php echo $nbs_img( 'bs-ugc-1.webp', 'Kupka u NORIKS BuildShirt majici' ); ?></figure>
        <figure class="nbs-ugc__card"><?php echo $nbs_img( 'bs-ugc-2.webp', 'Kupka u NORIKS BuildShirt majici' ); ?></figure>
        <figure class="nbs-ugc__card"><?php echo $nbs_img( 'bs-ugc-3.webp', 'Kupka u NORIKS BuildShirt majici' ); ?></figure>
        <figure class="nbs-ugc__card"><?php echo $nbs_img( 'bs-ugc-4.webp', 'Kupka u NORIKS BuildShirt majici' ); ?></figure>
        <figure class="nbs-ugc__card"><?php echo $nbs_img( 'bs-ugc-5.webp', 'Kupka u NORIKS BuildShirt majici' ); ?></figure>
        <figure class="nbs-ugc__card"><?php echo $nbs_img( 'bs-ugc-6.webp', 'Kupka u NORIKS BuildShirt majici' ); ?></figure>
      <figure class="nbs-ugc__card nbs-ugc__card--vid"><?php echo $nbs_img( 'bs-vid-2.webp', 'Kupka pokazuje NORIKS BuildShirt' ); ?></figure>
    </div>
    <div class="nbs-quotes">
        <blockquote class="nbs-quote"><span class="nbs-quote__stars">★★★★★</span><p>Rekla sam mužu da je to još jedno internetsko obećanje i da ću je vratiti. Ove godine sam vratila devet stvari. Ova ne ide nikamo. Nosila sam je na desetodnevnom putovanju, ispod ljetnih haljina i ispod sakoa na večeri — i izašla je iz kofera kao nova. Držala me cijelo vrijeme, bez urezivanja i bez namještanja za stolom.</p><cite>Dubravka W., 63 — potvrđena kupnja</cite></blockquote>
        <blockquote class="nbs-quote"><span class="nbs-quote__stars">★★★★★</span><p>Imam punije grudi i godinama sam se mirila s lošim rješenjima. Ovo nije jedno od njih. Drži sve gore gdje treba, a da me ništa ne steže preko leđa.</p><cite>Katica S., 77 — potvrđena kupnja</cite></blockquote>
    </div>
  </div>
</section>

<!-- 7) VEĆINA MAJICA JE LOŠA -->
<section class="nbs-sec">
  <div class="nbs-wrap">
    <h2 class="nbs-h2" style="text-align:center;max-width:860px;margin:0 auto 14px">Većina majica s ugrađenim grudnjakom je loša. <em>Radije ćete to čuti od nas.</em></h2>
    <p class="nbs-lead">Trgovine su ih pune za osam ili deset eura i većina je neupotrebljiva — jedan tanki sloj jerseya prišiven preko prsa, „shelf grudnjak" samo po imenu. Žena kupi jednu, shvati da ispod i dalje treba grudnjak i razumno zaključi da cijela ideja ne radi. Ideja radi. Tanka tkanina ne. Tri stvari razlikuju pravu od one za deset eura:</p>
    <div class="nbs-nums">
        <div class="nbs-num"><span>1</span><h3>Pravi dvostruki sloj</h3><p>Dva puna sloja tkanine preko grudi — ne traka podstave prišivena sprijeda. To je dio koji zapravo drži.</p></div>
        <div class="nbs-num"><span>2</span><h3>Ulošci koji su ušiveni</h3><p>Djelomično pričvršćeni za majicu, pa se ne mogu okrenuti, nabrati na rubovima ili nestati u pranju.</p></div>
        <div class="nbs-num"><span>3</span><h3>Dužina i bočno sidrenje</h3><p>Krojena preko bokova, s potporom usidrenom sa strane umjesto preko leđa — zato se rub ne podvija dok hodate.</p></div>
    </div>
    <p class="nbs-lead" style="margin-top:20px">NORIKS BuildShirt je građen oko te tri stvari: 66 % poliamid, 34 % elastan, rastezanje u četiri smjera, bez žice, bez kopči i bez ikakvog zatvaranja na leđima.</p>
  </div>
</section>

<!-- 8) KOPIJE -->
<section class="nbs-sec nbs-tint">
  <div class="nbs-wrap">
    <span class="nbs-alert">Upozorenje na kopije</span>
    <h2 class="nbs-h2" style="text-align:center">Postoje kopije ove majice. <em>Ovo je ona koju su kopirali.</em></h2>
    <p class="nbs-lead">Mi smo napravili BuildShirt — vlastiti kroj, vlastita tvornica, vlastita specifikacija tkanine. Radilo je, pa su je klonirali. Kopije koriste naše fotografije i jeftinu generičku majicu koju nitko nije testirao.</p>
    <div class="nbs-chips">
      <span><strong>Original</strong>Mi smo bili prvi.</span>
      <span><strong>Vlastiti kroj</strong>Naš kroj, naša tvornica.</span>
      <span><strong>OEKO-TEX 100</strong>Certificirana tkanina.</span>
      <span><strong>Točna veličina</strong>Naručite svoju uobičajenu.</span>
    </div>
    <div class="nbs-cmptbl">
      <table>
        <tbody>
          <tr><td class="nbs-orig"><strong>Original</strong><span>Dva puna sloja preko grudi, po kroju koji je naš.</span></td><td class="nbs-kop"><strong>Kopija</strong><span>Jedan tanki sloj jerseya iz kataloga.</span></td></tr>
          <tr><td class="nbs-orig"><strong>Original</strong><span>OEKO-TEX Standard 100: 66 % poliamid, 34 % elastan.</span></td><td class="nbs-kop"><strong>Kopija</strong><span>Bez certifikata i bez specifikacije tkanine.</span></td></tr>
          <tr><td class="nbs-orig"><strong>Original</strong><span>Točna veličina, XS do 6XL, ponovno gradirano.</span></td><td class="nbs-kop"><strong>Kopija</strong><span>Tablica veličina prepisana s veleprodajne stranice.</span></td></tr>
          <tr><td class="nbs-orig"><strong>Original</strong><span>4,8/5 od tisuća žena, 30 dana jamstva, besplatna zamjena.</span></td><td class="nbs-kop"><strong>Kopija</strong><span>Posuđene fotografije i bez adrese za povrat.</span></td></tr>
        </tbody>
      </table>
    </div>
  </div>
</section>

<!-- 9) ZAŠTO NIŠTA DRUGO NIJE DJELOVALO -->
<section class="nbs-sec">
  <div class="nbs-wrap">
    <h2 class="nbs-h2" style="text-align:center">Zašto ništa drugo <em>nije djelovalo</em></h2>
    <p class="nbs-lead">Svaka alternativa u ovoj kategoriji mijenja materijal. Samo jedna mijenja konstrukciju.</p>
    <div class="nbs-mx">
      <table>
        <thead><tr><td></td><th>Grudnjak</th><th>Sportski</th><th>Shelf majica</th><th>Bralette</th><th>Bez grudnjaka</th><th class="nbs-mx__us">NORIKS</th></tr></thead>
        <tbody>
          <tr><th scope="row">Raspodjeljuje težinu umjesto da je koncentrira</th><td class="nbs-mx__no">✕</td><td class="nbs-mx__no">✕</td><td class="nbs-mx__no">✕</td><td class="nbs-mx__no">✕</td><td class="nbs-mx__no">✕</td><td class="nbs-mx__yes nbs-mx__us">✓</td></tr>
          <tr><th scope="row">Ništa za otkopčati ili tražiti iza leđa</th><td class="nbs-mx__no">✕</td><td class="nbs-mx__no">✕</td><td class="nbs-mx__yes">✓</td><td class="nbs-mx__yes">✓</td><td class="nbs-mx__yes">✓</td><td class="nbs-mx__yes nbs-mx__us">✓</td></tr>
          <tr><th scope="row">Prava potpora, ne traka elastike</th><td class="nbs-mx__yes">✓</td><td class="nbs-mx__yes">✓</td><td class="nbs-mx__no">✕</td><td class="nbs-mx__no">✕</td><td class="nbs-mx__no">✕</td><td class="nbs-mx__yes nbs-mx__us">✓</td></tr>
          <tr><th scope="row">Nevidljivo ispod bijele bluze</th><td class="nbs-mx__no">✕</td><td class="nbs-mx__no">✕</td><td class="nbs-mx__yes">✓</td><td class="nbs-mx__yes">✓</td><td class="nbs-mx__yes">✓</td><td class="nbs-mx__yes nbs-mx__us">✓</td></tr>
          <tr><th scope="row">Dvostruki sloj preko grudi</th><td class="nbs-mx__no">✕</td><td class="nbs-mx__no">✕</td><td class="nbs-mx__no">✕</td><td class="nbs-mx__no">✕</td><td class="nbs-mx__no">✕</td><td class="nbs-mx__yes nbs-mx__us">✓</td></tr>
          <tr><th scope="row">Ulošci ostaju na mjestu nakon pranja</th><td class="nbs-mx__no">✕</td><td class="nbs-mx__no">✕</td><td class="nbs-mx__no">✕</td><td class="nbs-mx__no">✕</td><td class="nbs-mx__no">✕</td><td class="nbs-mx__yes nbs-mx__us">✓</td></tr>
          <tr><th scope="row">Krojeno preko bokova, pa ostaje dolje</th><td class="nbs-mx__no">✕</td><td class="nbs-mx__no">✕</td><td class="nbs-mx__no">✕</td><td class="nbs-mx__no">✕</td><td class="nbs-mx__no">✕</td><td class="nbs-mx__yes nbs-mx__us">✓</td></tr>
          <tr><th scope="row">Udobno dvanaest sati, ne jedan</th><td class="nbs-mx__no">✕</td><td class="nbs-mx__no">✕</td><td class="nbs-mx__no">✕</td><td class="nbs-mx__no">✕</td><td class="nbs-mx__yes">✓</td><td class="nbs-mx__yes nbs-mx__us">✓</td></tr>
        </tbody>
      </table>
    </div>
  </div>
</section>

<!-- 10) 30 DANA TESTA -->
<section class="nbs-sec nbs-tint">
  <div class="nbs-wrap">
    <div class="nbs-guar">
      <h2 class="nbs-h2">30 dana <em>testa skidanja</em></h2>
      <p>Nosite je trideset dana. Ako se i dalje budete žurili da je skinete na kraju dana, pošaljite nam je natrag i vraćamo svaki cent. A ako veličina nije prava, šaljemo pravu besplatno — original ne morate vraćati, dovoljan je e-mail unutar 30 dana od dostave.</p>
      <a class="nbs-cta" href="#bundle-selector">Naruči NORIKS BuildShirt</a>
      <p class="nbs-guar__note">Povrat novca 30 dana · Besplatna dostava · Besplatna zamjena veličine</p>
    </div>
  </div>
</section>

<!-- 11) ZAKLJUČAK -->
<section class="nbs-sec">
  <div class="nbs-wrap nbs-row2">
    <div class="nbs-copy">
      <h2 class="nbs-h2">Vaši grudnjaci nisu prestali raditi <em>zato što je s vama nešto krenulo po zlu.</em></h2>
      <p>Prestali su raditi zato što cijelu vas drže na ista četiri uska mjesta kao i uvijek. Raspodijelite težinu umjesto da je koncentrirate i odbrojavanje do pet popodne jednostavno prestane.</p>
      <ul class="nbs-check">
        <li>Ništa za otkopčati čim uđete kroz vrata</li>
        <li>Ništa za namještanje usred razgovora</li>
        <li>Ništa što se ocrtava kroz leđa bluze</li>
      </ul>
      <a class="nbs-cta" href="#bundle-selector">Naruči NORIKS BuildShirt</a>
      <p class="nbs-guar__note" style="text-align:left">Besplatna dostava · 30 dana testa skidanja · Besplatna zamjena veličine · Plaćanje pouzećem</p>
    </div>
    <div class="nbs-media"><?php echo $nbs_img( 'bs-13-prednosti.webp', 'Prednosti NORIKS BuildShirt majice' ); ?></div>
  </div>
</section>

<style>
.nbs-sec { padding: 60px 0; background: #fff; font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Arial, sans-serif; color: #2a2320; }
.nbs-sec * { box-sizing: border-box; }
.nbs-tint { background: #f7f1ec; }
.nbs-wrap { width: 100%; max-width: 1240px; margin: 0 auto; padding: 0 24px; }
.nbs-row2 { display: grid; grid-template-columns: 1fr 1fr; gap: 56px; align-items: center; }
.nbs-media img { display: block; width: 100%; height: auto; border-radius: 14px;
  box-shadow: 0 2px 4px rgba(40,25,20,.05), 0 14px 40px rgba(40,25,20,.10); }
.nbs-kicker { font-size: 12.5px; font-weight: 800; letter-spacing: .14em; text-transform: uppercase; color: #a8705a; margin: 0 0 10px; }
.nbs-h2 { font-size: clamp(25px, 3.1vw, 36px); font-weight: 800; line-height: 1.18; letter-spacing: -.01em; margin: 0 0 16px; color: #2a2320; }
.nbs-h2 em { font-style: italic; font-weight: 800; color: #a8705a; }
.nbs-copy p, .nbs-lead { font-size: 16px; line-height: 1.7; color: #5d4f48; margin: 0 0 14px; }
.nbs-lead { max-width: 880px; margin-left: auto; margin-right: auto; text-align: center; }
.nbs-check { list-style: none; padding: 0; margin: 4px 0 0; display: flex; flex-direction: column; gap: 11px; }
.nbs-check li { position: relative; padding-left: 28px; font-size: 15.5px; line-height: 1.5; }
.nbs-check li::before { content: "\2713"; position: absolute; left: 0; top: 0; width: 20px; height: 20px; border-radius: 50%;
  background: #2f9e5f; color: #fff; font-size: 11px; font-weight: 800; display: flex; align-items: center; justify-content: center; }
.nbs-cta { display: inline-block; margin-top: 20px; background: #a8705a; color: #fff !important; font-size: 15px; font-weight: 700;
  padding: 15px 30px; border-radius: 8px; text-decoration: none; }
.nbs-cta:hover { background: #8d5a46; color: #fff !important; }

/* 1) ticker */
.nbs-ticker { background: #171310; overflow: hidden; }
.nbs-ticker__track { display: flex; width: max-content; animation: nbsTick 42s linear infinite; }
.nbs-ticker__row { display: flex; align-items: center; gap: 44px; padding: 14px 22px; }
.nbs-ticker__row span { color: #fff; font-size: 13.5px; font-weight: 800; letter-spacing: .1em; text-transform: uppercase; white-space: nowrap; }
.nbs-ticker__row span::before { content: "\2713"; margin-right: 10px; color: #c89b84; }
@keyframes nbsTick { from { transform: translateX(0); } to { transform: translateX(-50%); } }
@media (prefers-reduced-motion: reduce) { .nbs-ticker__track { animation: none; } }

/* 2) size finder */
.nbs-finder { max-width: 760px; margin: 0 auto; background: #fff; border: 1px solid #ecdfd7; border-radius: 18px; padding: 34px 28px; text-align: center;
  box-shadow: 0 2px 4px rgba(40,25,20,.04), 0 16px 40px rgba(40,25,20,.07); }
.nbs-finder__lead, .nbs-finder__note { font-size: 15px; line-height: 1.65; color: #5d4f48; margin: 0 auto 6px; max-width: 620px; }
.nbs-finder__note { font-size: 13.5px; color: #8a7a72; margin-top: 14px; }

/* 3) tocke */
.nbs-points { display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-top: 10px; }
.nbs-point h3 { font-size: 16.5px; font-weight: 800; margin: 0 0 6px; color: #a8705a; }
.nbs-point p { font-size: 15px; line-height: 1.6; color: #5d4f48; margin: 0; }

/* 4) usporedba tezine */
.nbs-cmp2 { display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-top: 24px; }
.nbs-cmp2__card { background: #fff; border: 1px solid #ecdfd7; border-radius: 16px; padding: 24px; text-align: center; }
.nbs-cmp2__card--us { border-color: #a8705a; }
.nbs-cmp2__tag { display: inline-block; font-size: 11.5px; font-weight: 800; letter-spacing: .1em; text-transform: uppercase;
  background: #f1e5dd; color: #6b5a52; padding: 5px 12px; border-radius: 999px; }
.nbs-cmp2__tag--us { background: #a8705a; color: #fff; }
.nbs-torso { margin: 16px auto 10px; max-width: 190px; }
.nbs-torso svg { width: 100%; height: auto; display: block; }
.nbs-cmp2__card h3 { font-size: 17px; font-weight: 800; margin: 0 0 6px; }
.nbs-cmp2__card p { font-size: 14.5px; line-height: 1.6; color: #5d4f48; margin: 0; }

/* 5) kartice resitev */
.nbs-fixes { display: grid; grid-template-columns: repeat(4, minmax(0,1fr)); gap: 16px; margin-top: 22px; }
.nbs-fix { background: #fff; border: 1px solid #ecdfd7; border-radius: 14px; padding: 20px; }
.nbs-fix h3 { font-size: 16px; font-weight: 800; margin: 0 0 6px; }
.nbs-fix p { font-size: 14.5px; line-height: 1.6; color: #5d4f48; margin: 0 0 12px; }
.nbs-fix__tag { display: inline-block; font-size: 11px; font-weight: 800; letter-spacing: .08em; background: #fbeaea; color: #b2403f;
  padding: 5px 10px; border-radius: 999px; }

/* 6) UGC */
.nbs-ugc { display: grid; grid-template-columns: repeat(4, minmax(0,1fr)); gap: 14px; margin: 22px 0 24px; }
.nbs-ugc__card { margin: 0; border-radius: 14px; overflow: hidden; background: #fff; }
.nbs-ugc__card img { display: block; width: 100%; height: 100%; aspect-ratio: 1 / 1; object-fit: cover; }
.nbs-ugc__card--vid img { aspect-ratio: 9 / 16; }
.nbs-quotes { display: grid; grid-template-columns: 1fr 1fr; gap: 20px; }
.nbs-quote { margin: 0; background: #fff; border: 1px solid #ecdfd7; border-radius: 14px; padding: 22px; }
.nbs-quote__stars { color: #e0a33c; letter-spacing: 2px; font-size: 15px; }
.nbs-quote p { font-size: 15px; line-height: 1.65; color: #3c332e; margin: 10px 0 12px; }
.nbs-quote cite { font-style: normal; font-size: 13.5px; font-weight: 700; color: #8a7a72; }

/* 7) tri stvari */
.nbs-nums { display: grid; grid-template-columns: repeat(3, minmax(0,1fr)); gap: 18px; margin-top: 22px; }
.nbs-num { background: #fff; border: 1px solid #ecdfd7; border-radius: 14px; padding: 22px; }
.nbs-num span { display: flex; width: 34px; height: 34px; border-radius: 50%; background: #a8705a; color: #fff; font-weight: 800;
  align-items: center; justify-content: center; margin-bottom: 12px; }
.nbs-num h3 { font-size: 16.5px; font-weight: 800; margin: 0 0 6px; }
.nbs-num p { font-size: 14.5px; line-height: 1.6; color: #5d4f48; margin: 0; }

/* 8) kopije */
.nbs-alert { display: block; width: fit-content; margin: 0 auto 14px; font-size: 11.5px; font-weight: 800; letter-spacing: .1em;
  text-transform: uppercase; background: #fbeaea; color: #b2403f; padding: 6px 14px; border-radius: 999px; }
.nbs-chips { display: grid; grid-template-columns: repeat(4, minmax(0,1fr)); gap: 14px; margin: 22px 0; }
.nbs-chips span { display: block; background: #fff; border: 1px solid #ecdfd7; border-radius: 12px; padding: 16px; font-size: 14px; color: #5d4f48; }
.nbs-chips strong { display: block; font-size: 15px; color: #2a2320; margin-bottom: 4px; }
.nbs-cmptbl { background: #fff; border: 1px solid #ecdfd7; border-radius: 16px; overflow: hidden; }
.nbs-cmptbl table { width: 100%; border-collapse: collapse; margin: 0 !important; }
.nbs-cmptbl td { width: 50%; padding: 16px 18px; border-bottom: 1px solid #f2e7e0; vertical-align: top; font-size: 14.5px; line-height: 1.55; color: #5d4f48; }
.nbs-cmptbl tr:last-child td { border-bottom: 0; }
.nbs-cmptbl strong { display: block; font-size: 12px; font-weight: 800; letter-spacing: .08em; text-transform: uppercase; margin-bottom: 6px; }
.nbs-orig strong { color: #2f8f5f; }
.nbs-kop { background: #fdf7f6; }
.nbs-kop strong { color: #b2403f; }

/* 9) matrica */
.nbs-mx { margin-top: 22px; background: #fff; border: 1px solid #ecdfd7; border-radius: 16px; overflow-x: auto; }
.nbs-mx table { width: 100%; min-width: 760px; border-collapse: collapse; margin: 0 !important; }
.nbs-mx th, .nbs-mx td { padding: 12px 10px; text-align: center; border-bottom: 1px solid #f2e7e0; font-size: 14px; }
.nbs-mx thead th { font-size: 12.5px; font-weight: 800; letter-spacing: .05em; text-transform: uppercase; color: #6b5a52; }
.nbs-mx th[scope="row"] { text-align: left; font-weight: 700; color: #2a2320; width: 32%; }
.nbs-mx__us { background: #f7f1ec; }
.nbs-mx thead .nbs-mx__us { color: #a8705a; }
.nbs-mx__yes { color: #2f9e5f; font-weight: 800; }
.nbs-mx__no { color: #c9bdb6; font-weight: 800; }

/* 10) jamstvo */
.nbs-guar { max-width: 820px; margin: 0 auto; background: #fff; border: 1px solid #ecdfd7; border-radius: 18px; padding: 34px 28px; text-align: center; }
.nbs-guar p { font-size: 16px; line-height: 1.7; color: #5d4f48; margin: 0 0 6px; }
.nbs-guar__note { font-size: 13.5px !important; color: #8a7a72 !important; margin-top: 14px !important; text-align: center; }

@media (max-width: 980px) {
  .nbs-row2 { grid-template-columns: 1fr; gap: 28px; }
  .nbs-points, .nbs-cmp2, .nbs-quotes { grid-template-columns: 1fr; }
  .nbs-fixes, .nbs-chips { grid-template-columns: 1fr 1fr; }
  .nbs-ugc { grid-template-columns: 1fr 1fr 1fr; }
  .nbs-nums { grid-template-columns: 1fr; }
}
@media (max-width: 560px) {
  .nbs-sec { padding: 42px 0; }
  .nbs-wrap { padding: 0 16px; }
  .nbs-fixes, .nbs-chips, .nbs-ugc { grid-template-columns: 1fr 1fr; }
  .nbs-cta { width: 100%; text-align: center; }
  .nbs-ticker__row { gap: 28px; padding: 12px 14px; }
  .nbs-ticker__row span { font-size: 12px; }
}
</style>
