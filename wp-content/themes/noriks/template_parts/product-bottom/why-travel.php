<?php
/**
 * Why sekcije — NORIKS Travel Dog Bed
 * Posteljica za pse v avtomobilu
 */

defined( 'ABSPATH' ) || exit;
?>

<style>
.nss-travel {
  --clr-bg-tonirana: #f7f4ef;
  --clr-txt: #1a1a1a;
  --clr-accent: #2d5a3d;
  --gap: clamp(48px, 8vw, 96px);
  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
}

.nss-travel__sekcija {
  padding: var(--gap) 0;
  display: grid;
  gap: 32px;
}

.nss-travel__sekcija:nth-child(odd) {
  background: var(--clr-bg-tonirana);
}

.nss-travel__sekcija:nth-child(even) {
  background: #fff;
}

.nss-travel__inner {
  max-width: 1240px;
  margin: 0 auto;
  padding: 0 24px;
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 48px;
  align-items: center;
}

.nss-travel__sekcija.--rev .nss-travel__inner {
  direction: rtl;
}

.nss-travel__sekcija.--rev .nss-travel__text,
.nss-travel__sekcija.--rev .nss-travel__media {
  direction: ltr;
}

.nss-travel__kicker {
  display: block;
  font-size: 0.875rem;
  font-weight: 600;
  text-transform: uppercase;
  letter-spacing: 0.08em;
  color: var(--clr-accent);
  margin-bottom: 8px;
}

.nss-travel__h2 {
  font-size: clamp(1.75rem, 4vw, 2.5rem);
  font-weight: 700;
  line-height: 1.2;
  margin: 0 0 20px;
  color: var(--clr-txt);
}

.nss-travel__h2 em {
  font-style: italic;
  font-weight: inherit;
}

.nss-travel__text p {
  font-size: 1.0625rem;
  line-height: 1.65;
  color: #4a4a4a;
  margin: 0 0 16px;
}

.nss-travel__text p:last-child {
  margin-bottom: 0;
}

.nss-travel__text strong {
  font-weight: 700;
  color: var(--clr-txt);
  display: block;
  margin-top: 24px;
}

.nss-travel__media img,
.nss-travel__media video {
  width: 100%;
  height: auto;
  aspect-ratio: 4/5;
  object-fit: cover;
  border-radius: 12px;
  box-shadow: 0 8px 24px rgba(0, 0, 0, 0.08);
}

.nss-travel__cta-wrap {
  text-align: center;
  padding: 64px 24px;
  background: #fff;
}

.nss-travel__cta-inner {
  max-width: 800px;
  margin: 0 auto;
}

.nss-travel__cta-h2 {
  font-size: clamp(1.5rem, 3.5vw, 2.25rem);
  font-weight: 700;
  margin-bottom: 24px;
  color: var(--clr-txt);
}

.nss-travel__ul {
  list-style: none;
  padding: 0;
  margin: 0 auto;
  max-width: 600px;
  text-align: left;
}

.nss-travel__ul li {
  padding: 10px 0 10px 32px;
  position: relative;
  font-size: 1.0625rem;
  line-height: 1.5;
  color: #4a4a4a;
}

.nss-travel__ul li::before {
  content: "✓";
  position: absolute;
  left: 0;
  color: var(--clr-accent);
  font-weight: 700;
  font-size: 1.25rem;
}

@media (max-width: 768px) {
  .nss-travel__inner {
    grid-template-columns: 1fr;
    gap: 32px;
  }

  .nss-travel__sekcija.--rev .nss-travel__inner {
    direction: ltr;
  }

  .nss-travel__media {
    order: -1;
  }

  .nss-travel__h2 {
    font-size: 1.75rem;
  }

  .nss-travel__text p {
    font-size: 1rem;
  }
}
</style>

<div class="nss-travel">

  <!-- SEKCIJA 1: Tlak ne smeta -->
  <div class="nss-travel__sekcija">
    <div class="nss-travel__inner">
      <div class="nss-travel__media">
        <img src="<?php echo get_template_directory_uri(); ?>/img/travel/noriks-travel-tlak.webp"
             alt="NORIKS Travel posteljica — 2 inča pjene koja ublažava pritisak na kukove i zglobove">
      </div>
      <div class="nss-travel__text">
        <span class="nss-travel__kicker">Za sve pse</span>
        <h2 class="nss-travel__h2">Tlak <em>ne smeta</em></h2>
        <p>Posteljica za auto opremljena s 5 cm rebound pjenom koja ublažava pritisak na kukove i zglobove — idealna za starije pse i aktivne štenad. Prošiveni Oxford 600D vrh mekši je od tkanine, ali dovoljno čvrst da se ne zgnječi nakon godine dana vožnji i drijemanja.</p>
        <p>Visoko-otporna pjena čuva oblik putovanje za putovanjem, tako da vaš pas leti kao u oblaku bez da se posteljica spljoští pod težinom.</p>
        <strong>Svako putovanje ugodnije — za velika i mala straža sjedala.</strong>
      </div>
    </div>
  </div>

  <!-- SEKCIJA 2: Čišćenje za 5 minuta -->
  <div class="nss-travel__sekcija --rev">
    <div class="nss-travel__inner">
      <div class="nss-travel__media">
        <img src="<?php echo get_template_directory_uri(); ?>/img/travel/noriks-travel-ciscenje.webp"
             alt="Skidiva navlaka na patent zatvarač — maši se na nježnom programu i suši na zraku">
      </div>
      <div class="nss-travel__text">
        <span class="nss-travel__kicker">Lako održavanje</span>
        <h2 class="nss-travel__h2">Čišćenje <em>za 5 minuta</em></h2>
        <p>Posteljica ima poklopac na patent zatvarač. Izvadite pjenu, operite navlaku u mašini na nježnom programu, zatim sušite na zraku. Poliuretanski premaz na Oxfordu blokira slinu i prolijevanja, dok ne-klizuća baza drži posteljicu na mjestu tako da nečistoća se ne širi.</p>
        <p>Jedna vožnja do jezera? Dvije blatnjave šape? Samo skinite navlaku i bacite u mašinu — gotovo u jednom ciklusu.</p>
        <strong>Nema trljanja, nema cijepanja — samo čisto sjedalo za sljedeći izlet.</strong>
      </div>
    </div>
  </div>

  <!-- SEKCIJA 3: Prostora za istezanje -->
  <div class="nss-travel__sekcija">
    <div class="nss-travel__inner">
      <div class="nss-travel__media">
        <img src="<?php echo get_template_directory_uri(); ?>/img/travel/noriks-travel-prostor.webp"
             alt="Dovoljno prostora za velike pasmine — ni skupljanja ni naboranja">
      </div>
      <div class="nss-travel__text">
        <span class="nss-travel__kicker">Velika mjesta</span>
        <h2 class="nss-travel__h2">Prostora <em>za istezanje</em></h2>
        <p>Posteljica daje većim pasminama prostor za rastezanje bez naboranja. Visoko-otporna pjena zadržava oblik putovanje za putovanjem, a rubovi leže ravno tako da šape ostanu ugodne bilo da vozite po gradu ili prelazite dugačke kilometre putovanja.</p>
        <p>Standardna veličina odgovara većini automobila i manjih pick-upova (130 cm × 61 cm). XL veličina za full-size teretna vozila (152 cm × 61 cm).</p>
        <strong>Dovoljan prostor za labradora, zlatnog retrivera ili dva manja psa.</strong>
      </div>
    </div>
  </div>

  <!-- SEKCIJA 4: Udobna kao dnevni boravak -->
  <div class="nss-travel__sekcija --rev">
    <div class="nss-travel__inner">
      <div class="nss-travel__media">
        <img src="<?php echo get_template_directory_uri(); ?>/img/travel/noriks-travel-udobnost.webp"
             alt="Mesh paneli za disanje, glatka površina koja ostaje hladna na dodir">
      </div>
      <div class="nss-travel__text">
        <span class="nss-travel__kicker">Poznato mjesto</span>
        <h2 class="nss-travel__h2">Udobna kao <em>dnevni boravak</em></h2>
        <p>Stvorite poznato mjesto za psa u automobilu. Glatka Oxford površina ostaje hladna na dodir, mesh bočni paneli omogućuju disanje, a hvatljiva donja strana sprječava klizanje — tako da se vaš kopilot može brzo smiriti i zaista se opustiti između zaustavljanja.</p>
        <p>Idealna i za dom — vežite posteljicu u dnevnom boravku ili hodniku kao poznato mjesto za odmor nakon avantura.</p>
        <strong>Poznato mjesto u autu, poznat miris — manje anksioznosti na putu.</strong>
      </div>
    </div>
  </div>

  <!-- SEKCIJA 5: Lagano za nove avanturiste -->
  <div class="nss-travel__sekcija">
    <div class="nss-travel__inner">
      <div class="nss-travel__media">
        <img src="<?php echo get_template_directory_uri(); ?>/img/travel/noriks-travel-mladi.webp"
             alt="Stabilna baza pomaže mladicima i malim psima da se osjećaju sigurno">
      </div>
      <div class="nss-travel__text">
        <span class="nss-travel__kicker">Za mlade pse</span>
        <h2 class="nss-travel__h2">Lagano za <em>nove avanturiste</em></h2>
        <p>Ova posteljica je otporna, podržavajuća i laka za održavanje čistoće. Skidiva navlaka podnosi trenažne greške, dok stabilna baza pomaže malim psima da se osjećaju sigurno — grade se pozitivne navike putovanja od prvog dana.</p>
        <p>Najmlađi pas zaslužuje udobnost koja raste s njim — bez straha od vožnje, samo uzbuđenje kad otvori vrata auta.</p>
        <strong>Od prvog putovanja do tisuće avantura — jedna posteljica sve podnosi.</strong>
      </div>
    </div>
  </div>

  <!-- SEKCIJA 6: Neklizuća sigurnosna baza -->
  <div class="nss-travel__sekcija --rev">
    <div class="nss-travel__inner">
      <div class="nss-travel__media">
        <img src="<?php echo get_template_directory_uri(); ?>/img/travel/noriks-travel-hvatanje.webp"
             alt="Silikonske točkice na donjoj strani sprječavaju klizanje na koži, tkanini i plastici">
      </div>
      <div class="nss-travel__text">
        <span class="nss-travel__kicker">Sigurnost</span>
        <h2 class="nss-travel__h2">Neklizuća <em>sigurnosna baza</em></h2>
        <p>Donja strana posteljice koristi hvatljive silikonske točke preko sloja za vuču kako bi držala posteljicu na mjestu na koži, tkanini ili Ruff Liners produžecima i pokrivačima. Nema klizanja na zavojima, nema naboranja pod šapama — stabilna udobnost za anksiozne pse i starije tijekom vožnji pa čak i kod kuće.</p>
        <p>Pas koji se osjeća sigurno u vožnji manje laje, manje se vrti — i čak i vi vozite smirenije.</p>
        <strong>Posteljica ostaje gdje ste je stavili, čak i pri naglom kočenju ili zavoju.</strong>
      </div>
    </div>
  </div>

  <!-- SEKCIJA 7: Izdržljivi materijali -->
  <div class="nss-travel__sekcija">
    <div class="nss-travel__inner">
      <div class="nss-travel__media">
        <img src="<?php echo get_template_directory_uri(); ?>/img/travel/noriks-travel-materijali.webp"
             alt="Oxford 600D s poliuretanskim premazom — vodootporan i čvrst">
      </div>
      <div class="nss-travel__text">
        <span class="nss-travel__kicker">Kvaliteta</span>
        <h2 class="nss-travel__h2">Izdržljivi <em>materijali</em></h2>
        <p>Vodootporni Oxford 600D (poliuretanski premaz) na vrhu, ne-klizuća poliestar baza, 25D rebound pjena. Skidiva navlaka se odvaja na patent zatvarač za mašinsko pranje; sušite na zraku.</p>
        <p>Debelina pjene 5 cm (2 inča) čuva oblik i potporu bez propadanja nakon mjeseci upotrebe. Šav prošiven dvostrukim koncem podnosi vuču, trljanje i skakanje.</p>
        <strong>Jedna posteljica. Tisuće vožnji. Ista udobnost prvog dana.</strong>
      </div>
    </div>
  </div>

  <!-- CTA sekcija — NORIKS pogoji -->
  <div class="nss-travel__cta-wrap">
    <div class="nss-travel__cta-inner">
      <h2 class="nss-travel__cta-h2">Zašto odabrati NORIKS Travel?</h2>
      <ul class="nss-travel__ul">
        <li>Vodootporna posteljica s 5 cm rebound pjene — kukovi i zglobovi hvala</li>
        <li>Skidiva navlaka na patent — maši se u jednom ciklusu, suši na zraku</li>
        <li>Standardna i XL veličina — za sve pasmine i sve automobile</li>
        <li>Neklizuća silikonska baza — ne pomakne se ni na zavojima</li>
        <li>30 dana za povrat novca — bez pitanja</li>
        <li>Besplatna dostava iznad 70 €</li>
        <li>Plaćanje pouzećem dostupno</li>
        <li>120.000 zadovoljnih kupaca — ocjena 4,8</li>
      </ul>
    </div>
  </div>

</div>
