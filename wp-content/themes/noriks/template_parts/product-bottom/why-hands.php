<?php
/**
 * product-bottom: NORIKS Hands — stabilizator palca (orto-hands).
 * Original: handhearth.com/products/the-thumb-stabilizer-1 — struktura 1:1 z originalom
 * (isto stevilo sekcij, isti vrstni red, ista vsebina), besedila prevedena.
 *   1) Kako radi (CMC zglob)          5) Pravi kupci (7 recenzija)
 *   2) Pronadite svoju velicinu       6) Vole ih 20.000+ kupaca (foto mreza)
 *   3) Sto mozete ocekivati           7) Usporedba: nas vs drugi stezníci
 *   4) Materijali i odrzavanje        8) Isprobajte bez rizika (60 dana)
 * Slike: img/hands/ (Dropbox NORIKS-HANDS/KREATIVA + originalna stran).
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$nhd      = get_template_directory_uri() . '/img/hands/';
$nhd_path = get_template_directory() . '/img/hands/';
$nhd_img  = function( $file, $alt ) use ( $nhd, $nhd_path ) {
  if ( ! file_exists( $nhd_path . $file ) ) { return ''; }
  return '<img src="' . esc_url( $nhd . $file ) . '" alt="' . esc_attr( $alt ) . '" loading="lazy">';
};
?>

<!-- 1) KAKO RADI — slika lijevo -->
<section class="nhd-sec nhd-tint">
  <div class="nhd-wrap nhd-row2">
    <div class="nhd-media"><?php echo $nhd_img( 'hn-03-ciljana-potpora.webp', 'Ciljana potpora za bolne palčeve — NORIKS Hands i CMC zglob' ); ?></div>
    <div class="nhd-copy">
      <p class="nhd-kicker">Kako radi</p>
      <h2 class="nhd-h2">Jedno malo mjesto <em>radi najviše posla.</em></h2>
      <p>Vrećice iz trgovine. Poklopac na staklenci. Nož na dasci. Kanta za zalijevanje. Igle za pletenje. Vrat gitare.</p>
      <p>Različiti poslovi, a opterećenje svaki put ide kroz isto mjesto — <strong>bazu palca, ondje gdje se spaja sa zapešćem</strong>. To je CMC zglob.</p>
      <p>NORIKS Hands daje dodatnu potporu točno toj bazi. Unutar pletiva je jastučić koji amortizira CMC zglob, pa ponavljajući pokreti palca više ne idu kroz goli zglob.</p>
      <p class="nhd-big">Dlan ostaje otvoren. Prsti ostaju slobodni.</p>
    </div>
  </div>
</section>

<!-- 2) PRONAĐITE SVOJU VELIČINU — slika desno -->
<section class="nhd-sec">
  <div class="nhd-wrap nhd-row2 nhd-row2--rev">
    <div class="nhd-copy">
      <p class="nhd-kicker">Veličina</p>
      <h2 class="nhd-h2">Pronađite svoju veličinu. <em>Mjeri se jednom.</em></h2>
      <ol class="nhd-steps">
        <li><span class="nhd-num">1</span><div><strong>Izmjerite.</strong> Omotajte krojački metar oko dlana na najširem mjestu, odmah ispod zglobova prstiju, s palcem opušteno sa strane. Nemate metar? Poslužit će traka papira ili uzica — omotajte, označite spoj i prislonite uz ravnalo.</div></li>
        <li><span class="nhd-num">2</span><div><strong>Očitajte.</strong> Neka naliježe pripijeno, ali ne stegnuto, i zapišite mjeru.</div></li>
        <li><span class="nhd-num">3</span><div><strong>Uskladite.</strong> Pronađite svoj broj u tablici ispod.</div></li>
      </ol>
      <table class="nhd-size">
        <thead><tr><th>Veličina</th><th>Opseg dlana</th></tr></thead>
        <tbody>
          <tr><td>S</td><td>17,8 – 19,1 cm</td></tr>
          <tr><td>M</td><td>19,1 – 21,6 cm</td></tr>
          <tr><td>L</td><td>21,6 – 22,9 cm</td></tr>
        </tbody>
      </table>
      <p class="nhd-big">Između dvije veličine? Uzmite manju.</p>
      <p>Pripijena baza palca daje najbolju potporu, a pletivo malo popusti kad se razgazi. Mjerite dominantnu ruku ili onu koja je šira — u svakom pakiranju je <strong>par</strong>, lijevi i desni, pa jedna veličina pokriva obje ruke.</p>
    </div>
    <div class="nhd-media"><?php echo $nhd_img( 'hn-04-velicine.webp', 'Pronađite svoju veličinu — opseg dlana za NORIKS Hands' ); ?></div>
  </div>
</section>

<!-- 3) ŠTO MOŽETE OČEKIVATI -->
<section class="nhd-sec nhd-tint">
  <div class="nhd-wrap">
    <p class="nhd-kicker nhd-kicker--c">Rezultati</p>
    <h2 class="nhd-h2 nhd-h2--c">Važna je <em>dosljednost</em></h2>
    <p class="nhd-sub">Stabilizator radi s vremenom, pa rezultate gradi redovito svakodnevno nošenje. Evo što javljaju naši kupci:</p>
    <div class="nhd-time">
      <article class="nhd-time__card">
        <p class="nhd-time__t">1. – 2. dan</p>
        <p>Male promjene. Pokret je malo lakši, na kraju rada manje stezanja. Ništa dramatično.</p>
      </article>
      <article class="nhd-time__card">
        <p class="nhd-time__t">2. – 3. tjedan</p>
        <p>Manje ukočenosti, bolji opseg pokreta i ona tupa bol u bazi palca napokon popušta.</p>
      </article>
      <article class="nhd-time__card">
        <p class="nhd-time__t">4. – 6. tjedan</p>
        <p>Većina ovdje dođe do svog ritma. Stalna potpora CMC zgloba vidi se po tome kako palac radi <em>i nakon</em> dugog rada, ne samo dok ga nosite.</p>
      </article>
      <article class="nhd-time__card">
        <p class="nhd-time__t">Dalje</p>
        <p>Nastavak nošenja održava rezultat. Ako prestanete, cijelo opterećenje opet ide kroz zglob i staro stezanje se kroz nekoliko tjedana vraća.</p>
      </article>
    </div>
    <p class="nhd-note nhd-note--box"><strong>Napomena:</strong> NORIKS Hands je nosiva potpora, a ne medicinski uređaj niti liječenje artritisa. Ako vam je dijagnosticirana bolest zgloba ili se oporavljate od ozljede, posavjetujte se s liječnikom prije uporabe.</p>
  </div>
</section>

<!-- 4) MATERIJALI I ODRŽAVANJE — slika lijevo -->
<section class="nhd-sec">
  <div class="nhd-wrap nhd-row2">
    <div class="nhd-media"><?php echo $nhd_img( 'hn-05-pakiranje.webp', 'NORIKS Hands u četiri boje — bež, ljubičasta, crna i siva' ); ?></div>
    <div class="nhd-copy">
      <p class="nhd-kicker">Materijali i održavanje</p>
      <h2 class="nhd-h2">Od čega je <em>i kako se pere</em></h2>
      <p><strong>Od čega je izrađen?</strong><br>Od mješavine sintetičkih materijala: poliesterskog vlakna, najlona i elastana, s pjenastim umetkom.</p>
      <p><strong>Alergije i osjetljiva koža</strong><br>Bez lateksa. Ne sadrži lateks.</p>
      <p><strong>Kako se održava?</strong><br>Nježno ručno pranje u hladnoj vodi s blagim deterdžentom, zatim sušenje na ravnome u hladu, izvan izravnog sunca.</p>
      <p class="nhd-big">Ne prodaje se na Amazonu.</p>
      <p>Naš stabilizator nećete naći na Amazonu ni na drugim tržnicama. Prodajemo izravno, pa znate da ste dobili original.</p>
    </div>
  </div>
</section>

<!-- 5) PRAVI KUPCI -->
<section class="nhd-sec nhd-tint">
  <div class="nhd-wrap">
    <h2 class="nhd-h2 nhd-h2--c">Pravi kupci koji su riješili <em>bol u palcu</em></h2>
    <p class="nhd-rate"><span class="nhd-rate__stars">★★★★★</span> <strong>4,7</strong> · 246 recenzija</p>
    <div class="nhd-rev">
      <article class="nhd-rev__card">
        <h3>Liječnica mi je rekla da prestanem. Nisam.</h3>
        <p>„Heklati sam naučila sa šesnaest godina, od bake, i otad nisam prestala. Prije šest godina liječnica je čula škljocanje u desnom palcu i rekla mi da bih si učinila uslugu ako prestanem. Umalo jesam. Onda sam naletjela na ovaj stabilizator. Danas sam svaku večer na kauču s iglicom u ruci. Škljocanja u bazi palca više nema, a bol se javi tek povremeno."</p>
        <div class="nhd-rev__who"><?php echo $nhd_img( 'hd-r1.webp', 'Emilija K.' ); ?><div><cite>Emilija K., Zagreb</cite><span>Potvrđena kupnja · 10. lipnja 2026.</span></div></div>
      </article>
      <article class="nhd-rev__card">
        <h3>Napokon steznik s kojim ruka radi</h3>
        <p>„Trideset godina vikendom sviram u bendu i prošlog proljeća mi je palac na vratu gitare rekao dosta. Prvo sam uzeo krutu ortozu iz ljekarne — pretvorila mi je cijelu šaku u blok, nisam mogao odsvirati ni barre akord. Onda sam kupio skupi kruti CMC steznik; plastični rub mi se urezao u dlan tako da sam tjedan dana imao crveni trag. Ovo je prvi koji stvarno pusti ruku da svira."</p>
        <div class="nhd-rev__who"><?php echo $nhd_img( 'hd-r2.webp', 'Robert F.' ); ?><div><cite>Robert F., Split</cite><span>Potvrđena kupnja · 14. svibnja 2026.</span></div></div>
      </article>
      <article class="nhd-rev__card">
        <h3>Onog osjećaja igle u zglobu više nema</h3>
        <p>„Fizioterapeutkinja mi ga je predložila kad sam joj opisao kako me palac nakon sat vremena počne bosti kao iglom. Rekla je da većina kliničkih ortoza nije rađena za sitne ponavljajuće udarce tipkanja — rađene su da ozlijeđeni zglob miruje, a ne da radi. Tri tjedna nošenja kroz radni dan i taj osjećaj igle se više ne javlja, čak ni u najgušćim danima."</p>
        <div class="nhd-rev__who"><?php echo $nhd_img( 'hd-r3.webp', 'Bruno C.' ); ?><div><cite>Bruno C., Osijek</cite><span>Potvrđena kupnja · 24. svibnja 2026.</span></div></div>
      </article>
      <article class="nhd-rev__card">
        <h3>Nadživio je svaki jeftini steznik koji sam probala</h3>
        <p>„Tri mjeseca svakodnevnog nošenja i ništa nije popustilo — jastučić je i dalje čvrst, a elastika se vraća u oblik. Dva jeftina steznika prije ovoga potrošila su se za manje od mjesec dana."</p>
        <div class="nhd-rev__who"><?php echo $nhd_img( 'hd-r4.webp', 'Helena M.' ); ?><div><cite>Helena M., Rijeka</cite><span>Potvrđena kupnja · 1. lipnja 2026.</span></div></div>
      </article>
      <article class="nhd-rev__card">
        <h3>Naručio krivu veličinu, zamijenili su je u par dana</h3>
        <p>„Prvo sam naručio krivu veličinu: toliko mi je stezala palac da je nisam mogao nositi duže od sat vremena. Javio sam se u ponedjeljak ujutro i očekivao uobičajeno natezanje. Isto popodne su poslali povratnu etiketu i potvrdili da L šalju sutradan. Zamjena je stigla u srijedu i stoji kako treba."</p>
        <div class="nhd-rev__who"><?php echo $nhd_img( 'hd-r5.webp', 'Marko S.' ); ?><div><cite>Marko S., Zadar</cite><span>Potvrđena kupnja · 11. svibnja 2026.</span></div></div>
      </article>
      <article class="nhd-rev__card">
        <h3>Stigao brže od ostalih narudžbi</h3>
        <p>„Naručio u utorak navečer i očekivao uobičajenih sedam do deset radnih dana. Potvrda je stigla istu večer, obavijest o slanju u srijedu ujutro, a paket je bio pred vratima u petak."</p>
        <div class="nhd-rev__who"><span class="nhd-rev__ini">DH</span><div><cite>Danijel H., Varaždin</cite><span>Potvrđena kupnja · 7. svibnja 2026.</span></div></div>
      </article>
      <article class="nhd-rev__card">
        <h3>Bolji od jeftinih s interneta</h3>
        <p>„Nosim ga gotovo svaki dan već dva mjeseca i ništa nije popustilo. Onaj jeftini koji sam kupio prije ovoga potrošio se za dva tjedna."</p>
        <div class="nhd-rev__who"><span class="nhd-rev__ini">IK</span><div><cite>Ivan K., Pula</cite><span>Potvrđena kupnja · 31. svibnja 2026.</span></div></div>
      </article>
    </div>
  </div>
</section>

<!-- 6) VOLE IH 20.000+ KUPACA -->
<section class="nhd-sec">
  <div class="nhd-wrap">
    <h2 class="nhd-h2 nhd-h2--c">Vole ih <em>20.000+ zadovoljnih kupaca</em></h2>
    <p class="nhd-sub">Preko <strong>0,6 M</strong> pregleda na Facebooku</p>
    <div class="nhd-grid">
      <?php
      echo $nhd_img( 'hn-p3-trgovina.webp',   'Nošenje vrećica iz trgovine uz NORIKS Hands stabilizator' );
      echo $nhd_img( 'hn-p2-setnja.webp',      'Šetnja sa psom uz NORIKS Hands stabilizator u crnoj boji' );
      echo $nhd_img( 'hn-p6-tipkanje.webp',    'Tipkanje na prijenosnom računalu uz NORIKS Hands' );
      echo $nhd_img( 'hn-p4-rublje.webp',      'Slaganje rublja uz NORIKS Hands stabilizator' );
      echo $nhd_img( 'hn-p5-ljubicasta.webp',  'NORIKS Hands stabilizator u ljubičastoj boji' );
      echo $nhd_img( 'hn-p1-bez.webp',         'NORIKS Hands stabilizator u bež boji' );
      ?>
    </div>
  </div>
</section>

<!-- 7) USPOREDBA -->
<section class="nhd-sec nhd-tint">
  <div class="nhd-wrap">
    <h2 class="nhd-h2 nhd-h2--c">Napokon potpora za palac <em>kako treba.</em></h2>
    <div class="nhd-cmp">
      <table class="nhd-cmp__table">
        <thead>
          <tr>
            <th class="nhd-cmp__feat"></th>
            <th class="nhd-cmp__us">NORIKS Hands<span>Izrađen da traje</span></th>
            <th class="nhd-cmp__them">Drugi stezníci za palac<span>Popuste za par dana</span></th>
          </tr>
        </thead>
        <tbody>
          <tr><td>Stabilizira zglob bez zaključavanja palca — ruku i dalje možete koristiti</td><td class="nhd-y">✓</td><td class="nhd-n">✕</td></tr>
          <tr><td>Vrhovi prstiju i vrh palca ostaju potpuno slobodni za prirodan hvat</td><td class="nhd-y">✓</td><td class="nhd-n">✕</td></tr>
          <tr><td>Tanak i plosnat — nosi se diskretno, i ispod rukava</td><td class="nhd-y">✓</td><td class="nhd-n">✕</td></tr>
          <tr><td>Navlači se jednom rukom</td><td class="nhd-y">✓</td><td class="nhd-n">✕</td></tr>
          <tr><td>Drži zglob čvrsto od jutra do večeri</td><td class="nhd-y">✓</td><td class="nhd-n">✕</td></tr>
        </tbody>
      </table>
    </div>
  </div>
</section>

<!-- 8) ISPROBAJTE BEZ RIZIKA — slika desno -->
<section class="nhd-sec">
  <div class="nhd-wrap nhd-row2 nhd-row2--rev">
    <div class="nhd-copy">
      <p class="nhd-kicker">Bez rizika</p>
      <h2 class="nhd-h2">Isprobajte ih <em>bez rizika</em></h2>
      <p>60 dana. Ako ih želite vratiti, vraćamo cijeli iznos. Bez pitanja.</p>
      <ul class="nhd-check">
        <li><strong>Par u svakom pakiranju</strong> — lijevi i desni</li>
        <li><strong>Zamjena veličine</strong> je besplatna</li>
        <li><strong>60 dana</strong> za povrat novca</li>
        <li><strong>Četiri boje</strong> — bež, ljubičasta, crna i siva</li>
      </ul>
      <a class="nhd-cta" href="#bundle-selector">Naruči NORIKS Hands</a>
      <p class="nhd-note">Brza dostava na kućnu adresu · Plaćanje pouzećem pri preuzimanju</p>
    </div>
    <div class="nhd-media"><?php echo $nhd_img( 'hn-06-rukavica.webp', 'NORIKS Hands — olakšanje bez ukočenosti, 60 dana jamstva' ); ?></div>
  </div>
</section>

<style>
.nhd-sec { padding: 60px 0; background: #fff; font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Arial, sans-serif; color: #231d19; }
.nhd-sec * { box-sizing: border-box; }
.nhd-tint { background: #f7f2ec; }
.nhd-wrap { width: 100%; max-width: 1240px; margin: 0 auto; padding: 0 24px; }
.nhd-row2 { display: grid; grid-template-columns: 1fr 1fr; gap: 56px; align-items: center; }
.nhd-media img { display: block; width: 100%; height: auto; border-radius: 0;
  box-shadow: 0 2px 4px rgba(40,25,15,.05), 0 14px 40px rgba(40,25,15,.10); }
.nhd-kicker { font-size: 12.5px; font-weight: 800; letter-spacing: .14em; text-transform: uppercase; color: #a9683f; margin: 0 0 10px; }
.nhd-kicker--c { text-align: center; }
.nhd-h2 { font-size: clamp(25px, 3.1vw, 36px); font-weight: 800; line-height: 1.18; letter-spacing: -.01em; margin: 0 0 16px; }
.nhd-h2--c { text-align: center; }
.nhd-h2 em { font-style: italic; font-weight: 800; color: #a9683f; }
.nhd-copy p { font-size: 16px; line-height: 1.7; color: #574c44; margin: 0 0 14px; }
.nhd-big { font-size: 19px !important; font-weight: 800; color: #231d19 !important; }
.nhd-sub { text-align: center; font-size: 15.5px; line-height: 1.6; color: #6b5e55; max-width: 760px; margin: 0 auto 26px; }
.nhd-check { list-style: none; padding: 0; margin: 6px 0 0; display: flex; flex-direction: column; gap: 11px; }
.nhd-check li { position: relative; padding-left: 28px; font-size: 15.5px; line-height: 1.5; color: #231d19; }
.nhd-check li::before { content: "\2713"; position: absolute; left: 0; top: 0; width: 20px; height: 20px; border-radius: 50%;
  background: #2f9e5f; color: #fff; font-size: 11px; font-weight: 800; display: flex; align-items: center; justify-content: center; }
.nhd-cta { display: inline-block; margin-top: 20px; background: #a9683f; color: #fff !important; font-size: 15px; font-weight: 700;
  padding: 15px 30px; border-radius: 8px; text-decoration: none; }
.nhd-cta:hover { background: #8d5431; color: #fff !important; }
.nhd-note { font-size: 13.5px !important; color: #8a7a6e !important; margin-top: 12px !important; }
.nhd-note--box { max-width: 900px; margin: 26px auto 0 !important; background: #fff; border-left: 3px solid #a9683f;
  padding: 16px 20px; font-size: 14.5px !important; line-height: 1.65; color: #6b5e55 !important; }

/* 2) koraki + tablica velicin */
.nhd-steps { list-style: none; padding: 0; margin: 4px 0 22px; display: flex; flex-direction: column; gap: 14px; }
.nhd-steps li { display: flex; gap: 14px; font-size: 15.5px; line-height: 1.62; color: #574c44; }
.nhd-steps strong { color: #231d19; }
.nhd-num { flex: 0 0 28px; width: 28px; height: 28px; border-radius: 50%; background: #a9683f; color: #fff;
  font-size: 13.5px; font-weight: 800; display: flex; align-items: center; justify-content: center; }
.nhd-size { width: 100%; border-collapse: collapse; font-size: 15px; margin: 0 0 18px; background: #fff; }
.nhd-size th { background: #a9683f; color: #fff; text-align: left; padding: 10px 14px; font-weight: 800; }
.nhd-size td { padding: 10px 14px; border-bottom: 1px solid #ece3da; color: #231d19; }
.nhd-size tbody tr:nth-child(odd) td { background: #faf6f1; }
.nhd-size td:first-child { font-weight: 800; }

/* 3) timeline */
.nhd-time { display: grid; grid-template-columns: repeat(4, 1fr); gap: 18px; }
.nhd-time__card { background: #fff; border: 1px solid #ece3da; padding: 22px 20px; }
.nhd-time__t { font-size: 13px; font-weight: 800; letter-spacing: .1em; text-transform: uppercase; color: #a9683f; margin: 0 0 10px; }
.nhd-time__card p { font-size: 14.8px; line-height: 1.62; color: #574c44; margin: 0; }

/* 5) recenzije */
.nhd-rate { text-align: center; font-size: 15px; color: #6b5e55; margin: 0 0 24px; }
.nhd-rate__stars { color: #e0a33c; letter-spacing: 1px; }
.nhd-rev { display: grid; grid-auto-flow: column; grid-auto-columns: minmax(330px, 1fr); gap: 18px;
  overflow-x: auto; scroll-snap-type: x mandatory; -webkit-overflow-scrolling: touch; padding-bottom: 8px; }
.nhd-rev__card { background: #fff; border: 1px solid #ece3da; padding: 24px 22px; scroll-snap-align: center;
  display: flex; flex-direction: column; box-shadow: 0 1px 2px rgba(40,25,15,.04), 0 10px 26px rgba(40,25,15,.06); }
.nhd-rev__card h3 { font-size: 17.5px; font-weight: 800; line-height: 1.3; margin: 0 0 12px; color: #231d19; }
.nhd-rev__card p { font-size: 14.6px; line-height: 1.65; color: #574c44; margin: 0 0 18px; flex: 1 1 auto; }
.nhd-rev__who { display: flex; align-items: center; gap: 12px; }
.nhd-rev__who img { width: 46px; height: 46px; border-radius: 50%; object-fit: cover; display: block; }
.nhd-rev__ini { width: 46px; height: 46px; border-radius: 50%; background: #efe4d8; color: #a9683f;
  font-size: 15px; font-weight: 800; display: flex; align-items: center; justify-content: center; flex: 0 0 46px; }
.nhd-rev__who cite { display: block; font-style: normal; font-size: 14.5px; font-weight: 800; color: #231d19; }
.nhd-rev__who span { font-size: 12.5px; color: #8a7a6e; }

/* 6) foto mreza */
.nhd-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 14px; }
.nhd-grid img { display: block; width: 100%; aspect-ratio: 1 / 1; object-fit: cover; }

/* 7) usporedba */
.nhd-cmp { background: #fff; border: 1px solid #ece3da; overflow: hidden; }
.nhd-cmp__table { width: 100%; border-collapse: collapse; font-size: 15px; margin: 0 !important; }
.nhd-cmp__table th, .nhd-cmp__table td { padding: 16px 18px; border-bottom: 1px solid #ece3da; vertical-align: middle; }
.nhd-cmp__feat { width: 54%; }
.nhd-cmp__us, .nhd-cmp__them { width: 23%; text-align: center; font-size: 15.5px; font-weight: 800; line-height: 1.3; }
.nhd-cmp__us { background: #a9683f; color: #fff; }
.nhd-cmp__them { background: #f1ebe4; color: #6b5e55; }
.nhd-cmp__us span, .nhd-cmp__them span { display: block; font-size: 12.5px; font-weight: 600; opacity: .85; margin-top: 4px; }
.nhd-cmp__table td { color: #574c44; line-height: 1.55; }
.nhd-cmp__table td.nhd-y, .nhd-cmp__table td.nhd-n { text-align: center; font-size: 20px; font-weight: 800; }
.nhd-y { color: #2f9e5f; }
.nhd-n { color: #c0392b; }
.nhd-cmp__table tbody tr:last-child td { border-bottom: 0; }

/* kratek opis izdelka: zelene kljukice namesto pik */
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
.woocommerce-product-details__short-description .nhd-tick {
  position: absolute !important; left: 0 !important; top: 1px !important;
  width: 21px; height: 21px; border-radius: 50%;
  background: #2f9e5f !important; color: #fff !important;
  font-size: 12px !important; font-weight: 800 !important; line-height: 21px !important;
  text-align: center !important; display: inline-block !important; }
.woocommerce-product-details__short-description p:first-of-type { font-size: 16px; line-height: 1.55; }

@media (max-width: 980px) {
  .nhd-row2 { grid-template-columns: 1fr; gap: 28px; }
  .nhd-row2--rev .nhd-media { order: -1; }
  .nhd-time { grid-template-columns: repeat(2, 1fr); }
  .nhd-rev { grid-auto-columns: 78%; }
  .nhd-cmp__feat { width: 46%; }
  .nhd-cmp__us, .nhd-cmp__them { width: 27%; }
}
@media (max-width: 560px) {
  .nhd-sec { padding: 42px 0; }
  .nhd-wrap { padding: 0 16px; }
  .nhd-cta { width: 100%; text-align: center; }
  .nhd-time { grid-template-columns: 1fr; }
  .nhd-rev { grid-auto-columns: 86%; }
  .nhd-grid { grid-template-columns: repeat(2, 1fr); gap: 10px; }
  .nhd-cmp__table th, .nhd-cmp__table td { padding: 12px 10px; font-size: 13.5px; }
}
</style>
