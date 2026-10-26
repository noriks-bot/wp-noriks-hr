<?php
/**
 * NORIKS MamaFit — why sekcije v vrstnem redu originala: uvod (9 mjeseci + 5 prednosti), tablica velicina,
 * cesta pitanja, prije/poslije (tisuce mama), tradicija bengkung, usporedba s klasicnim pojasom, mnenja kupaca (2 bloka),
 * NORIKS pogoji (namesto 90 dni vracila originala).
 * Izpusceno: zdravstvene trditve originala (zatvaranje trbusne stijenke, rezultati u 2-3 tjedna, -50 % nakon carskog reza,
 * odstotki ankete), Black Friday ponuda, osnivacice i znamka originala, mediji.
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
$wdir = get_template_directory_uri() . '/img/mamafit/';
?>
<div class="wmamf">

  <section class="wmamf__s wmamf__s--bg">
    <div class="wmamf__v">
      <div class="wmamf__media"><img src="<?php echo esc_url( $wdir . 'noriks-mamafit-potpora.webp?v=1' ); ?>" alt="Žena u crnim kompresijskim gaćicama NORIKS MamaFit visokog struka" loading="lazy" decoding="async"></div>
      <div class="wmamf__tekst">
        <div class="wmamf__kicker">KOMPRESIJA 360° · POSLIJE PORODA</div>
        <h2 class="wmamf__h2">Vaš trbuh je 9 mjeseci nosio život. <em>Zaslužuje potporu – ne stezanje.</em></h2>
        <p class="wmamf__p">NORIKS MamaFit su poslijeporođajne gaćice visokog struka s unakrsnom kompresijom 360°. Za razliku od klasičnih pojaseva koji stežu samo sprijeda, obuhvaćaju cijeli trbuh – sprijeda, sa strane i straga – i nose se kao obične gaćice.</p>
        <p class="wmamf__p">Odaberite svoju uobičajenu veličinu: tkanina se prilagođava tijelu, a gaćice možete nositi i godinama nakon poroda.</p>
        <ul class="wmamf__lista">
          <li><strong>Trbuh glađi i poduprt</strong> – ravnomjerna kompresija uokolo,</li>
          <li><strong>nevidljive</strong> ispod odjeće,</li>
          <li><strong>prikladne za dojenje</strong> – navlače se kao gaćice, ništa ne treba skidati,</li>
          <li><strong>visok kroj</strong> koji obuhvaća trbuh, bokove i leđa.</li>
        </ul>
        <p class="wmamf__zak">Potpora za tijelo koje je dalo sve.</p>
      </div>
    </div>
  </section>

  <section class="wmamf__s">
    <div class="wmamf__v wmamf__v--rev">
      <div class="wmamf__media"><img src="<?php echo esc_url( $wdir . 'noriks-mamafit-crna.webp?v=1' ); ?>" alt="Crne poslijeporođajne gaćice NORIKS MamaFit s unakrsnim kompresijskim trakama" loading="lazy" decoding="async"></div>
      <div class="wmamf__tekst">
        <div class="wmamf__kicker">TABLICA VELIČINA</div>
        <h2 class="wmamf__h2">Uzmite svoju <em>uobičajenu veličinu</em></h2>
        <p class="wmamf__p">Izmjerite opseg struka i pronađite svoju veličinu. Šest veličina – od S do 3XL.</p>
        <div class="wmamf__scroll">
          <table class="wmamf__tab">
            <tr><th>Veličina</th><th>Opseg struka</th><th>EU veličina</th></tr>
            <?php foreach ( noriks_mamafit_sizes() as $r ) : ?>
            <tr><td><?php echo esc_html( $r[0] ); ?></td><td><?php echo esc_html( $r[1] ); ?></td><td><?php echo esc_html( $r[2] ); ?></td></tr>
            <?php endforeach; ?>
          </table>
        </div>
        <p class="wmamf__p">Između dvije veličine? Za čvršću potporu uzmite manju – mrežasta tkanina nježno prianja uz tijelo. Za više udobnosti cijeli dan uzmite veću.</p>
        <p class="wmamf__zak">Navlače se za 10 sekundi – kao obične gaćice.</p>
      </div>
    </div>
  </section>

  <section class="wmamf__s wmamf__s--bg">
    <div class="wmamf__v">
      <div class="wmamf__media"><img src="<?php echo esc_url( $wdir . 'noriks-mamafit-boje.webp?v=1' ); ?>" alt="NORIKS MamaFit u četiri boje: crna, tamnoplava, boja kože i ružičasta" loading="lazy" decoding="async"></div>
      <div class="wmamf__tekst">
        <div class="wmamf__kicker">NAJČEŠĆA PITANJA</div>
        <h2 class="wmamf__h2">Što mame <em>najčešće pitaju</em></h2>
        <p class="wmamf__p"><strong>Rodila sam prije nekoliko godina – je li prekasno?</strong> Nije. Kružna kompresija 360° podupire trbuh bez obzira na to koliko je vremena prošlo od poroda – bilo da su to 3 mjeseca ili 10 godina.</p>
        <p class="wmamf__p"><strong>Kada ih mogu početi nositi?</strong> O tome je najbolje posavjetovati se s liječnikom ili primaljom. Visoki kroj raspoređuje kompresiju po cijelom trbuhu, bokovima i leđima.</p>
        <p class="wmamf__p"><strong>Vide li se ispod odjeće?</strong> Ne. Tkanina je vrlo tanka i bez vidljivih šavova – ispod haljine, traperica ili tajica ostaje neprimjetna od jutra do večeri.</p>
        <p class="wmamf__p"><strong>Kada ću osjetiti razliku?</strong> Potporu i učinak zaglađivanja osjetit ćete već prvi put kad ih odjenete.</p>
        <p class="wmamf__zak">Četiri boje – crna, tamnoplava, boja kože i ružičasta.</p>
      </div>
    </div>
  </section>

  <section class="wmamf__s">
    <div class="wmamf__v wmamf__v--rev">
      <div class="wmamf__media"><img src="<?php echo esc_url( $wdir . 'noriks-mamafit-prije-poslije.webp?v=1' ); ?>" alt="Ista žena u tamnoplavoj haljini bez gaćica i s gaćicama NORIKS MamaFit ispod haljine" loading="lazy" decoding="async"></div>
      <div class="wmamf__tekst">
        <div class="wmamf__kicker">PRIJE / POSLIJE</div>
        <h2 class="wmamf__h2">Tisuće mama već se ponovno <em>dobro osjeća u svojoj odjeći</em></h2>
        <p class="wmamf__p">Ista haljina, ista žena – jednom bez, jednom s gaćicama NORIKS MamaFit ispod haljine. Unakrsne trake zaglađuju trbuh i struk, a ispod odjeće se ne vide.</p>
        <p class="wmamf__p">Mame ih nose ispod uskih haljina, traperica i tajica – na posao, na proslave i u svakodnevici. Ne rolaju se, ne klize i ne žuljaju, pa ih nakon nekoliko minuta jednostavno zaboravite.</p>
        <p class="wmamf__zak">Odjeća vam opet pristaje.</p>
      </div>
    </div>
  </section>

  <section class="wmamf__s wmamf__s--bg">
    <div class="wmamf__v">
      <div class="wmamf__media"><img src="<?php echo esc_url( $wdir . 'noriks-mamafit-bengkung.webp?v=1' ); ?>" alt="Usporedba tradicionalnog bengkung omotača i gaćica NORIKS MamaFit" loading="lazy" decoding="async"></div>
      <div class="wmamf__tekst">
        <div class="wmamf__kicker">INSPIRIRANO TRADICIJOM</div>
        <h2 class="wmamf__h2">Drevno znanje – <em>u gaćicama</em></h2>
        <p class="wmamf__p">U Maleziji se stoljećima nakon poroda koristi <strong>bengkung</strong> – dugačka tkanina koja se rukom čvrsto omata oko trbuha. Tehnika unakrsne kružne kompresije djeluje, ali je omatanje svaki dan dugotrajno i teško izvedivo.</p>
        <p class="wmamf__p">NORIKS MamaFit preuzima isto načelo i stavlja ga u gaćice koje navučete za 10 sekundi. Bez traka, čičaka i ponovnog omatanja – unakrsna kompresija 360° kao kod bengkunga, svaki dan, bez muke.</p>
        <p class="wmamf__zak">Isto načelo. Za 10 sekundi.</p>
      </div>
    </div>
  </section>

  <section class="wmamf__s">
    <div class="wmamf__v wmamf__v--rev">
      <div class="wmamf__media"><img src="<?php echo esc_url( $wdir . 'noriks-mamafit-usporedba.webp?v=1' ); ?>" alt="Usporedba: klasični pojas za trbuh i gaćice NORIKS MamaFit s kompresijom 360°" loading="lazy" decoding="async"></div>
      <div class="wmamf__tekst">
        <div class="wmamf__kicker">ZAŠTO JE DRUGAČIJE</div>
        <h2 class="wmamf__h2">Drugi stežu sprijeda. <em>MamaFit obuhvaća uokolo.</em></h2>
        <div class="wmamf__scroll">
          <table class="wmamf__tab wmamf__tab--usp">
            <tr><th>Klasični pojas</th><th>NORIKS MamaFit</th></tr>
            <tr><td>✗ Steže samo prednji dio trbuha</td><td>✓ 360° – sprijeda, sa strane i straga</td></tr>
            <tr><td>✗ Nakon sat vremena se podigne i sklizne</td><td>✓ Navlači se za 10 sekundi kao donje rublje</td></tr>
            <tr><td>✗ Vidi se ispod odjeće</td><td>✓ Nestane ispod svake odjeće</td></tr>
            <tr><td>✗ Krut i zagušljiv</td><td>✓ Mekana, prozračna mrežasta tkanina</td></tr>
          </table>
        </div>
        <p class="wmamf__p">Inspirirano bengkungom – tehnikom unakrsne kompresije koja se u Maleziji stoljećima koristi nakon poroda.</p>
        <p class="wmamf__zak">Potpora uokolo, a ne samo sprijeda.</p>
      </div>
    </div>
  </section>

  <section class="wmamf__s wmamf__s--bg">
    <div class="wmamf__v">
      <div class="wmamf__media"><img src="<?php echo esc_url( $wdir . 'noriks-mamafit-kupci-1.webp?v=1' ); ?>" alt="Kupčica u trapericama i bijeloj majici s gaćicama NORIKS MamaFit ispod odjeće" loading="lazy" decoding="async"></div>
      <div class="wmamf__tekst">
        <div class="wmamf__kicker">ŠTO KAŽU KUPCI</div>
        <h2 class="wmamf__h2">Što o njima <em>misle mame</em></h2>
        <div class="wmamf__citati">
          <blockquote><p><strong>Zaboravim da ih nosim.</strong> „Rodila sam prije 4 mjeseca. Navučem ih kao obične gaćice i zaboravim na njih cijeli dan. Nakon dva tjedna muž me pitao: jesi li ti to ravnijeg trbuha?”</p><cite>Kristina B., 31 – Zagreb</cite></blockquote>
          <blockquote><p><strong>Nevidljive ispod haljine.</strong> „Bojala sam se da će se vidjeti ili rolati. Uopće ne. Nosim ih svaki dan ispod ljetnih haljina i nitko ne zna da ih imam – čak ni kad cijeli dan sjedim u uredu.”</p><cite>Sara M., 28 – Split</cite></blockquote>
          <blockquote><p><strong>Nakon carskog reza.</strong> „Primalja mi je savjetovala da pričekam 6 tjedana. Čim sam ih mogla odjenuti, osjetila sam potporu kakvu nisam imala ni s jednim pojasom. Drže cijeli trbuh, bokove i leđa.”</p><cite>Ines D., 34 – Rijeka</cite></blockquote>
          <blockquote><p><strong>Tri godine nakon poroda.</strong> „Mislila sam da je za mene prekasno. Sad opet nosim traperice koje sam bila spremila. Jedino mi je žao što ih nisam probala ranije.”</p><cite>Laura T., 37 – Osijek</cite></blockquote>
        </div>
        <p class="wmamf__zak">Prosječna ocjena 4,8 – više od 120.000 kupaca NORIKS.</p>
      </div>
    </div>
  </section>

  <section class="wmamf__s">
    <div class="wmamf__v wmamf__v--rev">
      <div class="wmamf__media"><img src="<?php echo esc_url( $wdir . 'noriks-mamafit-kupci-2.webp?v=1' ); ?>" alt="Kupčica u cvjetnoj haljini s gaćicama NORIKS MamaFit ispod haljine" loading="lazy" decoding="async"></div>
      <div class="wmamf__tekst">
        <div class="wmamf__kicker">JOŠ ISKUSTAVA</div>
        <h2 class="wmamf__h2">Bolje od svih pojaseva <em>koje sam kupila</em></h2>
        <div class="wmamf__citati">
          <blockquote><p><strong>Ostaju na mjestu.</strong> „Prije sam probala tri pojasa – s čičkom i cijevni. Sve je kliznulo i rolalo se. Ovo su prave gaćice i ostaju na mjestu cijeli dan. Kompresija je nježna, ali čvrsta, a dojim bez problema.”</p><cite>Anita R., 29 – Zadar</cite></blockquote>
          <blockquote><p><strong>Naručila sam i za sestru.</strong> „Kći ima 5 mjeseci. Već prvi dan osjetila sam da je trbuh poduprt, a leđa rasterećena. Nakon dva tjedna naručila sam još jedne za sestru koja rađa u rujnu.”</p><cite>Melani P., 33 – Varaždin</cite></blockquote>
          <blockquote><p><strong>Mekana tkanina, bez plastike.</strong> „Iznenadila me kvaliteta tkanine – prozračna i mekana, ne znojim se. Nosim ih i noću i više ih ni ne osjetim. Vratile su mi samopouzdanje.”</p><cite>Karla V., 26 – Pula</cite></blockquote>
          <blockquote><p><strong>Ispod haljine na vjenčanju.</strong> „Šest tjedana nakon poroda imala sam vjenčanje. Odjenula sam ih ispod haljine i cijelu večer osjećala se sjajno. Od tada ih nosim svaki dan.”</p><cite>Jasna L., 30 – Šibenik</cite></blockquote>
        </div>
        <p class="wmamf__zak">Sva mišljenja pronaći ćete ispod.</p>
      </div>
    </div>
  </section>

  <section class="wmamf__s wmamf__s--bg">
    <div class="wmamf__v">
      <div class="wmamf__media wmamf__media--pecat">
        <div class="wmamf__pecat" role="img" aria-label="30 dana za povrat">
          <div class="wmamf__pecat-in">
            <span class="wmamf__pecat-top">Pravo na povrat</span>
            <span class="wmamf__pecat-num">30</span>
            <span class="wmamf__pecat-dani">DANA</span>
            <span class="wmamf__pecat-bot">Bez rizika</span>
          </div>
        </div>
      </div>
      <div class="wmamf__tekst">
        <div class="wmamf__kicker">ISPROBAJTE BEZ RIZIKA</div>
        <h2 class="wmamf__h2">Uz NORIKS kupujete <em>bez rizika</em></h2>
        <p class="wmamf__p">Nosite NORIKS MamaFit svaki dan i procijenite sami. Ako niste zadovoljni, imate 30 dana za povrat novca – bez kompliciranja i bez pitanja.</p>
        <div class="wmamf__pogoji">
          <div class="wmamf__pog"><strong>30 dana</strong><span>za povrat novca</span></div>
          <div class="wmamf__pog"><strong>Besplatna dostava</strong><span>iznad 70 €</span></div>
          <div class="wmamf__pog"><strong>Plaćanje pouzećem</strong><span>platite kad paket stigne</span></div>
          <div class="wmamf__pog"><strong>120.000 kupaca</strong><span>prosječna ocjena 4,8</span></div>
        </div>
        <p class="wmamf__zak">Bez brige – samo udobnost.</p>
      </div>
    </div>
  </section>
</div>
<style>
.wmamf{color:#1c1c1c;font-family:inherit}
.wmamf__s{padding:56px 0;background:#fff}
.wmamf__s--bg{background:#f4f3ef}
.wmamf__v{max-width:1240px;margin:0 auto;padding:0 24px;box-sizing:border-box;display:grid;grid-template-columns:1fr 1fr;gap:48px;align-items:center}
.wmamf__v--rev .wmamf__media{order:2}
.wmamf__v--rev .wmamf__tekst{order:1}
.wmamf__media{border-radius:16px;overflow:hidden;box-shadow:0 10px 30px rgba(0,0,0,.10);aspect-ratio:4/5;background:#eee}
.wmamf__media img,.wmamf__media video{width:100%;height:100%;object-fit:cover;display:block}
.wmamf__tekst{min-width:0}
.wmamf__kicker{font-size:13px;letter-spacing:1px;text-transform:uppercase;color:#555;margin:0 0 8px;font-weight:700}
.wmamf__h2{font-size:clamp(24px,3vw,34px);font-weight:800;line-height:1.2;margin:0 0 18px;color:#1c1c1c}
.wmamf__h2 em{font-style:italic}
.wmamf__p{font-size:15.5px;line-height:1.65;color:#333;margin:0 0 14px}
.wmamf__lista{font-size:15.5px;line-height:1.65;color:#333;margin:0 0 14px;padding-left:22px}
.wmamf__lista li{margin:0 0 6px}
.wmamf__kart{display:grid;grid-template-columns:repeat(3,1fr);gap:10px;margin:0 0 16px}
.wmamf__kart div,.wmamf__koraci div{background:#fff;border-radius:12px;box-shadow:0 4px 14px rgba(0,0,0,.06);padding:12px 14px}
.wmamf__s:not(.wmamf__s--bg) .wmamf__kart div,.wmamf__s:not(.wmamf__s--bg) .wmamf__koraci div{background:#f4f3ef}
.wmamf__kart strong{display:block;font-size:15px;font-weight:800;margin:0 0 4px}
.wmamf__kart span,.wmamf__koraci span{font-size:14px;line-height:1.5;color:#333}
.wmamf__koraci{display:grid;gap:10px;margin:0 0 16px}
.wmamf__koraci div{display:flex;gap:12px;align-items:center}
.wmamf__koraci strong{flex:0 0 32px;height:32px;border-radius:50%;background:#1c1c1c;color:#fff;display:flex;align-items:center;justify-content:center;font-size:15px;font-weight:800}
.wmamf__scroll{overflow-x:auto;-webkit-overflow-scrolling:touch;margin:0 0 14px}
.wmamf__tab{width:100%;border-collapse:collapse;font-size:14.5px;background:#fff;border-radius:12px;overflow:hidden}
.wmamf__tab th,.wmamf__tab td{padding:9px 12px;border-bottom:1px solid rgba(0,0,0,.07);text-align:left}
.wmamf__tab th{font-weight:800}
.wmamf__tab th:not(:first-child),.wmamf__tab td:not(:first-child){text-align:center;white-space:nowrap}
.wmamf__tab--usp th,.wmamf__tab--usp td{width:50%;text-align:left !important;white-space:normal !important;vertical-align:top}
.wmamf__tab--usp td:first-child{color:#8a2d22}
.wmamf__tab--usp td:nth-child(2){color:#1f6e43;font-weight:700}
.wmamf__citati{display:grid;gap:10px;margin:0 0 16px}
.wmamf__citati blockquote{margin:0;background:#fff;border-radius:12px;box-shadow:0 4px 14px rgba(0,0,0,.06);padding:14px 16px}
.wmamf__s:not(.wmamf__s--bg) .wmamf__citati blockquote{background:#f4f3ef}
.wmamf__citati p{font-size:14.5px;line-height:1.55;color:#333;margin:0 0 6px;font-style:italic}
.wmamf__citati cite{font-size:13px;font-style:normal;font-weight:700;color:#555}
.wmamf__zak{font-size:16px;font-weight:800;line-height:1.5;color:#1c1c1c;margin:6px 0 0}
.wmamf__pogoji{display:grid;grid-template-columns:1fr 1fr;gap:14px;margin:0 0 16px}
.wmamf__pog{background:#fff;border-radius:14px;box-shadow:0 6px 20px rgba(0,0,0,.07);padding:18px 14px;text-align:center}
.wmamf__pog strong{display:block;font-size:16px;font-weight:800;margin:0 0 6px}
.wmamf__pog span{font-size:14px;color:#444}
/* zadnja sekcija: pecat 30 dana kot vizual ob NORIKS pogojih */
.wmamf__media--pecat{display:flex;align-items:center;justify-content:center;background:#fff}
.wmamf__pecat{width:280px;height:280px;border-radius:50%;display:flex;align-items:center;justify-content:center;text-align:center;background:radial-gradient(circle at 35% 30%,#4a4a4a 0%,#2a2a2a 55%,#111 100%);box-shadow:0 0 0 10px #e9e6df,0 0 0 14px #2a2a2a,0 18px 40px rgba(0,0,0,.16)}
.wmamf__pecat-in{width:206px;height:206px;border-radius:50%;background:#fff;color:#1c1c1c;display:flex;flex-direction:column;align-items:center;justify-content:center}
.wmamf__pecat-top,.wmamf__pecat-bot{font-size:11px;font-weight:700;letter-spacing:.12em;text-transform:uppercase;max-width:150px;line-height:1.3;color:#666}
.wmamf__pecat-num{font-size:78px;font-weight:800;line-height:1;margin:4px 0 0;color:#1c1c1c}
.wmamf__pecat-dani{font-size:22px;font-weight:700;letter-spacing:.12em;margin:0 0 6px}
@media (max-width:860px){
  .wmamf__s{padding:38px 0}
  .wmamf__v{grid-template-columns:1fr;gap:22px}
  .wmamf__v--rev .wmamf__media,.wmamf__media{order:0}
  .wmamf__v--rev .wmamf__tekst,.wmamf__tekst{order:1}
  .wmamf__kart{grid-template-columns:1fr}
  .wmamf__pecat{width:230px;height:230px}
  .wmamf__pecat-in{width:170px;height:170px}
  .wmamf__pecat-num{font-size:64px}
  .wmamf__pecat-top,.wmamf__pecat-bot{font-size:10px;max-width:118px}
}
</style>
