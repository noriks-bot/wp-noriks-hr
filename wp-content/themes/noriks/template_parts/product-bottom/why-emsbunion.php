<?php
/**
 * NORIKS EMS Bunion — EMS korektor cuklja z aluminijsko sipko: why sekcije po strukturi originala
 * (blayen.com/products/blayen-ems-bunion-corrector).
 *
 * STRUKTURA ORIGINALA:
   1. tekoci trak prednosti (aluminijska sipka, EMS, 29 razin, 60-dnevno jamstvo, dostava) - pri nas trak 5 prednosti z ikonami (namesto tujega jamstva 30 dana za povrat)
   2. Will it fit my foot?: naslov + velika slika cez sirino (ena velikost, 3 stopala, ikone) - pri nas naslov + velika slika (napisi lokalizirani, US stevilke pretvorjene v EU)
   3. The bump is what you see: slika levo (bolecina ponoci in na sprehodu) + besedilo desno s seznamom 4 tezav - pri nas enako
   4. How does it work?: besedilo levo (2 koraka: sipka drzi, EMS aktivira) + slika desno (rentgen stopala) - pri nas enako
   5. 7 reasons you'll actually keep it on: seznam s kljukicami levo + infografika desno - pri nas infografika levo (cik-cak) + seznam desno, infografika lokalizirana
   6. Get your evenings back: kolaz 4 fotografij levo + besedilo desno - pri nas besedilo levo + kolaz desno (cik-cak)
   7. What to expect: naslov + 3 kartice v vrsti + opomba - pri nas naslov + 3 kartice z ikonami + opomba
   8. Why others stop at holding: primerjalna tabela (naprava vs razdvajaci in udlage) - pri nas tabela
   9. Push surgery years away: slika levo (operacija vs doma) + besedilo desno - pri nas enako, cene operacije v EUR
   10. Try risk-free: slika levo + seznam + gumb - pri nas slika desno (cik-cak) + seznam NORIKS pogojev, BREZ gumba (CTA)
   11. Built on what clinics already do: slika levo + besedilo + kljukice - pri nas enako
   12. FAQ (11 vprasanj) - pri nas v FAQ spodaj (auto_reviews/FAQ_HR_emsbunion.php)
   13. Who should NOT use: okvir z opozorilom - pri nas okvir z opozorilom cez celo sirino
   14. 60-day guarantee / Free US shipping / Real support - pri nas skupna sekcija NORIKS pogoji (brez tujega jamstva)
   15. mnenja kupcev (4,8 / 226) - pri nas v mnenjih spodaj (auto_reviews/HR_emsbunion.php)
 * BARVA ORIGINALA: #1d9484 (turkizna zelena akcentna barva strani in svetla meta podlaga sekcij #e8f5f0 na originalu); svetel ton za --bg #eaf6f2, temnejsi akcent za besedilo #157a6d
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
$wem_img = get_template_directory_uri() . '/img/emsbunion/';
$wem_svg = '<svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">';
$wem_slika = function ( $f, $alt ) use ( $wem_img ) {
	return '<img src="' . esc_url( $wem_img . $f ) . '" alt="' . esc_attr( $alt ) . '" loading="eager" decoding="async">';
};
?>
<div class="wem">

<section class="wem__s wem__s--bg wem__s--trak"><div class="wem__v">
  <div class="wem__trak">
    <div><span class="wem__ti"><?php echo $wem_svg; ?><rect x="9" y="3" width="6" height="18" rx="3"/></svg></span><strong>Čvrsta aluminijska šipka</strong></div>
    <div><span class="wem__ti"><?php echo $wem_svg; ?><path d="M13 2L4 14h7l-1 8 9-12h-7z"/></svg></span><strong>EMS aktivacija mišića</strong></div>
    <div><span class="wem__ti"><?php echo $wem_svg; ?><path d="M4 18V6"/><path d="M9 18v-8"/><path d="M14 18v-5"/><path d="M19 18V3"/></svg></span><strong>29 razina jačine</strong></div>
    <div><span class="wem__ti"><?php echo $wem_svg; ?><path d="M4 12a8 8 0 1 0 2.4-5.7"/><path d="M4 4v4.5h4.5"/></svg></span><strong>30 dana za povrat</strong></div>
    <div><span class="wem__ti"><?php echo $wem_svg; ?><path d="M3 7h11v9H3z"/><path d="M14 10h4l3 3v3h-7"/><circle cx="7" cy="17.5" r="1.6"/><circle cx="17" cy="17.5" r="1.6"/></svg></span><strong>Besplatna dostava iznad 70 €</strong></div>
  </div>
</div></section>

<section class="wem__s"><div class="wem__v">
  <div class="wem__kicker wem__c">Veličina</div>
  <h2 class="wem__h2 wem__c">Hoće li mi <em>odgovarati?</em></h2>
  <p class="wem__p wem__c">Jedan podesivi uređaj – nema tablice veličina u kojoj biste mogli pogriješiti. Isti uređaj za lijevo ili desno stopalo, podesivi remeni i za šira stopala.</p>
  <div class="wem__polna"><?php echo $wem_slika( 'noriks-emsbunion-03-jedna-velicina.webp', 'NORIKS EMS korektor čukljeva na tri različita stopala – jedna veličina za svako stopalo' ); ?></div>
  <p class="wem__zak">Odgovara EU veličinama 39–47 (muški) i 35–43 (ženski).</p>
</div></section>

<section class="wem__s wem__s--bg"><div class="wem__v wem__dva">
  <div class="wem__media"><?php echo $wem_slika( 'noriks-emsbunion-bol-nocu-i-u-setnji.webp', 'Žena s bolnim čukljem budna noću i u šetnji' ); ?></div>
  <div>
    <div class="wem__kicker">Problem</div>
    <h2 class="wem__h2">Kvrgu vidite. <em>Bol vam određuje dan.</em></h2>
    <p class="wem__p">Godine hodanja, uske cipele i neravnoteža mišića polako izvlače nožni palac iz linije. Zglob se pomiče, kvrga raste, a svaki korak pada na <strong>nadraženo, upaljeno mjesto</strong>.</p>
    <ul class="wem__ne">
      <li><strong>Pulsirajuća bol</strong> pri svakom koraku – najgora na kraju dana</li>
      <li><strong>Crven, otečen zglob</strong> koji je vruć i kad pokušavate zaspati</li>
      <li><strong>Ukočenost i pritisak</strong> u svakom paru cipela</li>
      <li><strong>Cipele koje volite</strong> stoje nenošene u ormaru</li>
    </ul>
    <p class="wem__p">Ono što gotovo svi previde: nije riječ samo o kosti. Riječ je o <strong>mišiću uz unutarnju stranu stopala</strong> – onom koji drži nožni palac ravno. Kako se palac pomiče, taj mišić postaje <strong>mlitav, slab i neaktivan</strong> – pa palac klizi dalje.</p>
    <p class="wem__zak">Zato samo držanje palca nikad nije bilo dovoljno.</p>
  </div>
</div></section>

<section class="wem__s"><div class="wem__v wem__dva wem__dva--rev">
  <div class="wem__media"><?php echo $wem_slika( 'noriks-emsbunion-ems-zglob.webp', 'Prikaz kostiju stopala s upaljenim zglobom nožnog palca' ); ?></div>
  <div>
    <div class="wem__kicker">Kako djeluje</div>
    <h2 class="wem__h2">Šipka drži. <em>EMS aktivira.</em></h2>
    <ol class="wem__koraci">
      <li><span class="wem__st">1</span><div><strong>Aluminijska šipka drži.</strong><p>Čvrsta šipka u steznici drži nožni palac u prirodnoj liniji cijelo vrijeme. Mekani silikonski razdvajači savijaju se i klize s mjesta – <strong>aluminij ne popušta</strong>.</p></div></li>
      <li><span class="wem__st">2</span><div><strong>EMS se uključuje.</strong><p>Dok šipka drži, EMS mikrostruje potiču cirkulaciju točno ondje gdje boli, pa crvenilo, oteklina i duboka bol <strong>počinju popuštati</strong>. Istodobno impulsi aktiviraju <em>abductor hallucis</em> – mišić koji bi trebao držati palac ravno, a koji sami ne možete uključiti. To je ista tehnologija aktivacije mišića koju fizioterapeuti koriste desetljećima.</p></div></li>
    </ol>
    <p class="wem__p">Osjetite lagano trnce – nikad udar. <strong>10 načina rada i 29 razina jačine</strong>: počnite nježno, pa pojačavajte.</p>
    <p class="wem__zak">Šipka drži palac. EMS budi mišić koji bi ga trebao držati.</p>
  </div>
</div></section>

<section class="wem__s wem__s--bg"><div class="wem__v wem__dva">
  <div class="wem__media wem__media--kv"><?php echo $wem_slika( 'noriks-emsbunion-zasto-drukciji.webp', 'Infografika: čvrsta aluminijska šipka, EMS mikrostruja, 10 načina rada, 29 razina, remen za petu i podesivo pristajanje' ); ?></div>
  <div>
    <div class="wem__kicker">7 razloga</div>
    <h2 class="wem__h2">Zašto ćete ga <em>stvarno nositi</em></h2>
    <ul class="wem__kv">
      <li><strong>Drži i trenira</strong> – aluminijska šipka podupire, a EMS aktivira mišić</li>
      <li><strong>Smanjuje oteklinu</strong> potičući cirkulaciju oko zgloba</li>
      <li><strong>Osjeća se kao masaža</strong>, a ne kao stezaljka – 10 načina rada kojima ćete se radovati</li>
      <li><strong>29 razina jačine</strong> – počnite nježno, pa pojačavajte</li>
      <li><strong>Odgovara većini odraslih stopala</strong> – podesivi remeni, bez tablice veličina</li>
      <li><strong>Ostaje na mjestu</strong> – omča oko pete sprječava klizanje tijekom korištenja</li>
      <li><strong>30 dana za povrat novca</strong> – bez kompliciranja</li>
    </ul>
  </div>
</div></section>

<section class="wem__s"><div class="wem__v wem__dva wem__dva--rev">
  <div class="wem__media wem__media--kv"><?php echo $wem_slika( 'noriks-emsbunion-vecernje-setnje.webp', 'Žena u večernjoj šetnji, s unukom, u kuhinji i u trgovini' ); ?></div>
  <div>
    <div class="wem__kicker">Svakodnevica</div>
    <h2 class="wem__h2">Vratite si <em>večeri</em></h2>
    <p class="wem__p">Za dva tjedna je utorak navečer. I prvi put nakon dugo vremena <strong>stopala nisu tema razgovora.</strong></p>
    <p class="wem__p">Cijela večernja šetnja, a ne prečac kući. Stajanje do kraja recepta. Držanje koraka s unucima. I ono malo što nije malo: <strong>obuti cipele koje stvarno volite.</strong></p>
    <p class="wem__zak">Nije obećanje čuda. Samo ono što se dogodi kad vam stopala prestanu krojiti raspored.</p>
  </div>
</div></section>

<section class="wem__s wem__s--bg"><div class="wem__v">
  <div class="wem__kicker wem__c">Što očekivati</div>
  <h2 class="wem__h2 wem__c">Što možete <em>očekivati</em></h2>
  <p class="wem__p wem__c">Rezultati se razlikuju od osobe do osobe. Ovako to obično ide uz redovitu svakodnevnu upotrebu.</p>
  <div class="wem__grid">
    <div class="wem__k"><span class="wem__ki"><?php echo $wem_svg; ?><circle cx="12" cy="12" r="8.5"/><path d="M12 8v4l2.5 2"/></svg></span><span class="wem__oz">Prvih nekoliko korištenja</span><p>Pronađete svoje pristajanje i omiljeni način rada. Mnogi primijete da je zglob nakon korištenja mirniji.</p></div>
    <div class="wem__k"><span class="wem__ki"><?php echo $wem_svg; ?><rect x="4" y="5" width="16" height="15" rx="2"/><path d="M4 10h16"/><path d="M9 3v4"/><path d="M15 3v4"/></svg></span><span class="wem__oz">Prvih nekoliko tjedana</span><p>Uz 15 minuta dnevno osjetljivost i oteklina na kraju dana mogu postupno popuštati.</p></div>
    <div class="wem__k"><span class="wem__ki"><?php echo $wem_svg; ?><path d="M4 12a8 8 0 0 1 14-5.3"/><path d="M20 12a8 8 0 0 1-14 5.3"/><path d="M18 3v4h-4"/><path d="M6 21v-4h4"/></svg></span><span class="wem__oz">Dugoročno</span><p>Neka bude dio rutine. Redovitost je važnija od jačine. Niste sigurni? Imate 30 dana za povrat.</p></div>
  </div>
  <p class="wem__opomba">Čukalj je promjena u strukturi kosti – nijedan nosivi uređaj ga ne poništava. NORIKS EMS Bunion je namijenjen potpori ispravnog položaja te ublažavanju boli i upale.</p>
</div></section>

<section class="wem__s"><div class="wem__v">
  <div class="wem__kicker wem__c">Usporedba</div>
  <h2 class="wem__h2 wem__c">Zašto drugi staju na <em>držanju</em></h2>
  <p class="wem__p wem__c">Razdvajači, udlage i čarape za prste rade samo jedno: drže. To djeluje – dok ih ne skinete. <strong>Tu prazninu popunjava EMS.</strong></p>
  <div class="wem__tabwrap"><table class="wem__tab">
    <thead><tr><th>Značajka</th><th class="wem__nas">NORIKS EMS Bunion</th><th>Razdvajači i udlage</th></tr></thead>
    <tbody>
      <tr><td>Potpora ispravnom položaju</td><td class="wem__nas"><span class="wem__da">✓</span></td><td><span class="wem__da wem__da--siv">✓</span></td></tr>
      <tr><td>Korištenje dok se opuštate kod kuće</td><td class="wem__nas"><span class="wem__da">✓</span></td><td><span class="wem__da wem__da--siv">✓</span></td></tr>
      <tr><td>Čvrsta šipka koja drži kut</td><td class="wem__nas"><span class="wem__da">✓</span></td><td><span class="wem__x">✕</span></td></tr>
      <tr><td>EMS stimulacija mišića</td><td class="wem__nas"><span class="wem__da">✓</span></td><td><span class="wem__x">✕</span></td></tr>
      <tr><td>Djeluje na oteklinu i cirkulaciju</td><td class="wem__nas"><span class="wem__da">✓</span></td><td><span class="wem__x">✕</span></td></tr>
      <tr><td>Trenira mišić, ne samo palac</td><td class="wem__nas"><span class="wem__da">✓</span></td><td><span class="wem__x">✕</span></td></tr>
      <tr><td>Podesiva jačina (29 razina)</td><td class="wem__nas"><span class="wem__da">✓</span></td><td><span class="wem__x">✕</span></td></tr>
      <tr><td>15 minuta, pa se isključi</td><td class="wem__nas"><span class="wem__da">✓</span></td><td><span class="wem__x">✕</span></td></tr>
    </tbody>
  </table></div>
</div></section>

<section class="wem__s wem__s--bg"><div class="wem__v wem__dva">
  <div class="wem__media wem__media--kv"><?php echo $wem_slika( 'noriks-emsbunion-operacija-ili-kuca.webp', 'Oporavak nakon operacije u ortopedskoj čizmi naspram opuštanja kod kuće' ); ?></div>
  <div>
    <div class="wem__kicker">Prije operacije</div>
    <h2 class="wem__h2">Odgodite operaciju <em>za godine</em></h2>
    <p class="wem__p"><strong>Operacija čukljeva: oko 3.500–5.300 €.</strong> Šest tjedana u ortopedskoj čizmi. Bez vožnje. Bez dugih šetnji. Mjeseci dok stopalo ponovno ne osjetite kao svoje.</p>
    <p class="wem__p">Zato većina liječnika savjetuje da najprije iscrpite neinvazivni put. NORIKS EMS Bunion je <strong>više od 10 puta jeftiniji</strong> – bez skalpela, bez čizme, bez bolovanja.</p>
    <p class="wem__zak">Ako vam pomogne, odgodili ste operacijsku salu. Ako ne, imate 30 dana za povrat novca.</p>
  </div>
</div></section>

<section class="wem__s"><div class="wem__v wem__dva wem__dva--rev">
  <div class="wem__media wem__media--kv"><?php echo $wem_slika( 'noriks-emsbunion-bez-rizika.webp', 'Dva NORIKS EMS korektora čukljeva za lijevo i desno stopalo' ); ?></div>
  <div>
    <div class="wem__kicker">Bez rizika</div>
    <h2 class="wem__h2">Isprobajte ga <em>bez rizika</em></h2>
    <p class="wem__p">Kad naručite danas, dobivate:</p>
    <ul class="wem__kv">
      <li><strong>Najveću uštedu</strong> uz paket za oba stopala</li>
      <li><strong>Besplatnu dostavu</strong> za narudžbe iznad 70 €</li>
      <li><strong>30 dana za povrat novca</strong> – bez kompliciranja i bez pitanja</li>
      <li><strong>Plaćanje pouzećem</strong> – platite kad paket stigne</li>
    </ul>
    <p class="wem__zak">Isprobajte ga kod kuće – rizik je na nama.</p>
  </div>
</div></section>

<section class="wem__s wem__s--bg"><div class="wem__v wem__dva">
  <div class="wem__media wem__media--kv"><?php echo $wem_slika( 'noriks-emsbunion-klinicki-pregled.webp', 'Liječnik pregledava stopalo pacijentice s haluksom valgusom' ); ?></div>
  <div>
    <div class="wem__kicker">Kako rade klinike</div>
    <h2 class="wem__h2">Temeljeno na onome što <em>klinike već rade</em></h2>
    <p class="wem__p">Standardni pristup bez operacije svodi se na dvije stvari: <strong>rasterećenje zgloba</strong> i <strong>ponovno aktiviranje mišića oko njega</strong>. NORIKS EMS Bunion spaja oboje u jednom uređaju koji koristite kod kuće.</p>
    <ul class="wem__kv">
      <li>Bez odlaska u kliniku</li>
      <li>Bez uputnice i bez liste čekanja</li>
      <li>Samo 15 mirnih minuta dnevno</li>
    </ul>
  </div>
</div></section>

<section class="wem__s"><div class="wem__v">
  <div class="wem__upoz">
    <span class="wem__ki wem__ki--upoz"><?php echo $wem_svg; ?><path d="M12 3l10 18H2z"/><path d="M12 10v5"/><path d="M12 18h.01"/></svg></span>
    <div>
      <h2 class="wem__h3">Tko NE smije koristiti NORIKS EMS Bunion</h2>
      <p class="wem__p">Osobe s <strong>elektrostimulatorom srca ili drugim ugrađenim elektroničkim uređajem</strong>, <strong>trudnice</strong> te osobe s <strong>otvorenim ranama, aktivnom infekcijom ili smanjenim osjetom u stopalima</strong> (uključujući dijabetičku neuropatiju). Ako imate dijagnosticirano stanje stopala, najprije se posavjetujte s liječnikom.</p>
    </div>
  </div>
</div></section>

<section class="wem__s wem__s--bg npg-s"><?php $npg = array( 'izdelek' => 'NORIKS EMS Bunion', 'barva' => '#1d9484' ); include __DIR__ . '/noriks-pogoji.php'; ?></section>
</div>
<style>
.wem{color:#13222f;font-family:inherit}
.wem__s{padding:72px 0;background:#fff}.wem__s.wem__s--bg{background:#eaf6f2}
.wem__s--trak{padding:28px 0}
.wem__v{width:100%;max-width:1240px;margin:0 auto;padding:0 24px;box-sizing:border-box}
.wem__c{text-align:center}
.wem__kicker{font-size:12.5px;letter-spacing:1.8px;text-transform:uppercase;color:#157a6d;margin:0 0 8px;font-weight:700}
.wem__kicker::before{content:"";display:inline-block;width:22px;height:2px;background:#1d9484;vertical-align:middle;margin:-2px 10px 0 0;border-radius:2px}
.wem__h2{font-size:clamp(24px,3vw,34px);font-weight:800;line-height:1.2;margin:0 0 18px;color:#0f2a44}.wem__h2 em{font-style:italic;color:#157a6d}
.wem__h3{font-size:20px;font-weight:800;margin:0 0 8px;color:#0f2a44}
.wem__p{font-size:15.5px;line-height:1.65;color:#2f3d48;margin:0 0 14px}
.wem__zak{font-size:16px;font-weight:800;line-height:1.5;margin:18px 0 0}
.wem__v>.wem__zak{text-align:center}
.wem__dva .wem__zak{border-left:3px solid #1d9484;padding-left:14px}
.wem__trak{display:grid;grid-template-columns:repeat(5,1fr);gap:14px}
.wem__trak>div{display:flex;align-items:center;gap:12px;background:#fff;border-radius:14px;padding:14px 16px;box-shadow:0 4px 14px rgba(15,60,55,.07)}
.wem__trak strong{font-size:14.5px;line-height:1.3}
.wem__ti,.wem__ki{flex:0 0 46px;width:46px;height:46px;border-radius:50%;background:#d6efe8;color:#157a6d;display:flex;align-items:center;justify-content:center}
.wem__dva{display:grid;grid-template-columns:1fr 1fr;gap:56px;align-items:center}.wem__dva--rev>div:first-child{order:2}
.wem__media{position:relative;border-radius:16px;overflow:hidden;box-shadow:0 14px 34px rgba(15,60,55,.15);aspect-ratio:4/5;background:#e3f1ec}
.wem__media img{width:100%;height:100%;object-fit:cover;display:block}
.wem__media--kv{aspect-ratio:1/1}
.wem__polna{max-width:760px;margin:22px auto 0;border-radius:16px;overflow:hidden;box-shadow:0 14px 34px rgba(15,60,55,.15)}
.wem__polna img{width:100%;height:auto;display:block}
.wem__ne{list-style:none;margin:4px 0 14px;padding:0;display:grid;gap:8px}
.wem__ne li{list-style:none;position:relative;padding:10px 14px 10px 44px;background:#fff;border-radius:12px;font-size:15px;line-height:1.45;box-shadow:0 3px 10px rgba(15,60,55,.06)}
.wem__ne li::before{content:"\2715";position:absolute;left:12px;top:50%;transform:translateY(-50%);width:22px;height:22px;border-radius:50%;background:#fde3e1;color:#d0453a;font-size:12px;font-weight:800;display:flex;align-items:center;justify-content:center}
.wem__koraci{list-style:none;margin:0 0 12px;padding:0;display:grid;gap:14px}
.wem__koraci li{list-style:none;display:flex;gap:14px;align-items:flex-start}
.wem__st{flex:0 0 40px;height:40px;border-radius:50%;background:#1d9484;color:#fff;font-weight:800;display:flex;align-items:center;justify-content:center;font-size:16px}
.wem__koraci strong{font-size:16.5px}.wem__koraci p{margin:4px 0 0;font-size:15px;line-height:1.6;color:#2f3d48}
.wem__kv{list-style:none;margin:4px 0 6px;padding:0}.wem__kv li{position:relative;padding-left:32px;margin:0 0 12px;font-size:15.5px;line-height:1.55;list-style:none}
.wem__kv li::before{content:"\2713";position:absolute;left:0;top:1px;width:21px;height:21px;border-radius:50%;background:#1d9484;color:#fff;font-size:12px;display:flex;align-items:center;justify-content:center}
.wem__grid{display:grid;grid-template-columns:repeat(3,1fr);gap:22px;margin-top:26px;align-items:stretch}
.wem__k{background:#fff;border-radius:16px;padding:28px 26px 24px;text-align:center;box-shadow:0 8px 24px rgba(15,60,55,.09);transition:transform .2s,box-shadow .2s;display:flex;flex-direction:column;align-items:center}
.wem__k:hover{transform:translateY(-3px);box-shadow:0 14px 30px rgba(15,60,55,.15)}
.wem__k .wem__ki{width:56px;height:56px;margin:0 auto 12px;border:1px solid #a9dccf}
.wem__oz{font-size:12.5px;letter-spacing:1.4px;text-transform:uppercase;font-weight:800;color:#157a6d;margin:0 0 8px}
.wem__k p{font-size:15px;line-height:1.55;color:#3a4853;margin:0}
.wem__opomba{font-size:13px;color:#5d6a74;text-align:center;margin:20px 0 0;line-height:1.5}
.wem__tabwrap{width:100%;overflow-x:auto;margin-top:22px;border-radius:16px;box-shadow:0 8px 24px rgba(15,60,55,.10);background:#fff}
.wem__tab{width:100%;border-collapse:collapse;font-size:15px}
.wem__tab th,.wem__tab td{padding:14px 18px;text-align:center;border-bottom:1px solid #e3efeb;color:#2f3d48}
.wem__tab td:first-child,.wem__tab th:first-child{text-align:left}
.wem__tab td:first-child{font-weight:600;color:#13222f}
.wem__tab thead th{background:#0f2a44!important;color:#fff!important;font-weight:800}
.wem__tab thead th.wem__nas{background:#1d9484!important}
.wem__tab td.wem__nas{background:#f2faf7}
.wem__tab tr:last-child td{border-bottom:0}
.wem__da{display:inline-flex;width:24px;height:24px;border-radius:50%;background:#1d9484;color:#fff;align-items:center;justify-content:center;font-size:13px}
.wem__da--siv{background:#9fb5b0}
.wem__x{display:inline-flex;width:24px;height:24px;border-radius:50%;background:#fde3e1;color:#d0453a;align-items:center;justify-content:center;font-size:12px;font-weight:800}
.wem__upoz{display:flex;gap:18px;align-items:flex-start;background:#f6f8f9;border-left:4px solid #0f2a44;border-radius:14px;padding:24px 28px}
.wem__ki--upoz{background:#e6ebef;color:#0f2a44}
.wem__upoz .wem__p{margin:0}
@media (max-width:991px){.wem__trak{grid-template-columns:repeat(3,1fr)}}
@media (max-width:767px){
  .wem__s{padding:48px 0}.wem__s--trak{padding:20px 0}.wem__v{padding:0 16px}
  .wem__trak{grid-template-columns:1fr 1fr;gap:10px}.wem__trak>div{padding:12px}.wem__trak>div:last-child{grid-column:1/-1}
  .wem__dva{grid-template-columns:1fr;gap:26px}.wem__dva--rev>div:first-child{order:0}
  .wem__grid{grid-template-columns:1fr;gap:14px}
  .wem__tab{font-size:13px}.wem__tab th,.wem__tab td{padding:11px 8px}
  .wem__upoz{flex-direction:column;padding:20px}
}
</style>
