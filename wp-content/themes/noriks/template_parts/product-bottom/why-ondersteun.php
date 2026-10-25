<?php
/**
 * product-bottom: NORIKS ONDERSTEUN — grudnjak koji podupire grudi i leda (orto-ondersteun).
 *
 * Sekcije (7):
 *   1. Prekrizena potpora za leda — bolje drzanje
 *   2. Prirodna potpora bez zica
 *   3. Siroke naramenice — bez pritiska
 *   4. Praktican prednji zatvarac
 *   5. Stil koji radi s tobom
 *   6. Detalji — siroki pojas, 3-razinska podesivost
 *   7. NORIKS jamstva
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
$nf = get_template_directory_uri() . '/img/ondersteun/';
?>

<style>
.nos-sec { position:relative; padding:60px 24px; overflow:hidden; }
.nos-alt { background:#faf8f6; }
.nos-wrap { max-width:1240px; margin:0 auto; }
.nos-row2 { display:grid; grid-template-columns:1fr 1fr; gap:48px; align-items:center; }
.nos-media { position:relative; aspect-ratio:4/5; border-radius:12px; overflow:hidden; box-shadow:0 8px 24px rgba(0,0,0,0.08); }
.nos-media img { width:100%; height:100%; object-fit:cover; }
.nos-copy { padding:0 12px; }
.nos-h2 { font:700 32px/1.15 'Anton',sans-serif; margin:0 0 16px; text-transform:uppercase; letter-spacing:-.5px; }
.nos-h2 em { font-style:italic; color:#d4a574; }
.nos-copy p { font:400 17px/1.5 'Inter',sans-serif; color:#333; margin:0 0 14px; }
.nos-copy p:last-child { margin-bottom:0; }

.nos-grid4 { display:grid; grid-template-columns:repeat(2,1fr); gap:28px; margin-top:32px; }
.nos-card { background:#fff; border-radius:8px; padding:24px; box-shadow:0 2px 8px rgba(0,0,0,0.05); }
.nos-card h3 { font:600 18px/1.3 'Inter',sans-serif; margin:0 0 10px; color:#222; }
.nos-card p { font:400 15px/1.4 'Inter',sans-serif; color:#555; margin:0; }

.nos-final { background:#faf8f6; padding:48px 24px; text-align:center; }
.nos-final h2 { font:700 28px/1.2 'Anton',sans-serif; margin:0 0 24px; text-transform:uppercase; }
.nos-final ul { list-style:none; margin:0; padding:0; display:inline-block; text-align:left; }
.nos-final li { font:400 16px/1.6 'Inter',sans-serif; color:#333; margin:0 0 10px; padding-left:28px; position:relative; }
.nos-final li:before { content:'✓'; position:absolute; left:0; color:#7a5aa3; font-weight:700; }

@media (max-width:768px) {
  .nos-row2 { grid-template-columns:1fr; gap:32px; }
  .nos-sec { padding:40px 24px; }
  .nos-h2 { font-size:26px; }
  .nos-grid4 { grid-template-columns:1fr; gap:20px; }
  .nos-row2.nos-rev-mob > :first-child { order:1; }
}
</style>

<!-- ============ 1) Prekrizena potpora za leda ============ -->
<section class="nos-sec nos-alt">
  <div class="nos-wrap nos-row2">
    <div class="nos-media">
      <img src="<?php echo esc_url($nf.'noriks-ondersteun-hero-pos1.webp'); ?>" alt="Prekrižena potpora za leđa — NORIKS ONDERSTEUN" loading="lazy">
    </div>
    <div class="nos-copy">
      <h2 class="nos-h2"><em>Prekrižena</em> potpora za leđa</h2>
      <p>Široki prekriženi panel na leđima nježno poravnava ramena i povlači ih unatrag. Tijekom cijelog radnog dana sjedi uspravnije, bez osjećaja stezanja ili nelagode.</p>
      <p>Više od 120.000 žena već nosi NORIKS grudnjake — podrška koja se osjeti od prvog minuta.</p>
    </div>
  </div>
</section>

<!-- ============ 2) Prirodna potpora bez zica ============ -->
<section class="nos-sec">
  <div class="nos-wrap nos-row2 nos-rev-mob">
    <div class="nos-copy">
      <h2 class="nos-h2">Prirodna potpora <em>bez žica</em></h2>
      <p>Čvrsta traka ispod grudi i potporno prednje platno daju postojano, nježno podizanje koje naglašava prirodnu liniju. Dobar lift za veću košaricu — bez metalnih dijelova koji se zabijaju ili pomiču.</p>
      <p>Idealan za yoga, pilates i svakodnevno nošenje.</p>
    </div>
    <div class="nos-media">
      <img src="<?php echo esc_url($nf.'noriks-ondersteun-worn-black.webp'); ?>" alt="Prirodna potpora bez žica" loading="lazy">
    </div>
  </div>
</section>

<!-- ============ 3) Siroke naramenice — bez pritiska ============ -->
<section class="nos-sec nos-alt">
  <div class="nos-wrap nos-row2">
    <div class="nos-media">
      <img src="<?php echo esc_url($nf.'noriks-ondersteun-ghost-black.webp'); ?>" alt="Široke naramenice — bez pritiska" loading="lazy">
    </div>
    <div class="nos-copy">
      <h2 class="nos-h2">Široke naramenice — <em>bez pritiska</em></h2>
      <p>Široke meke naramenice ravnomjerno raspoređuju težinu preko ramena. Nema više usjecanja, klizanja ili stalnog prilagođavanja tijekom dana.</p>
      <p>Nakon tjedan dana primjećujete: ramena manje umorna, vrat opušteniji.</p>
    </div>
  </div>
</section>

<!-- ============ 4) Praktican prednji zatvarac ============ -->
<section class="nos-sec">
  <div class="nos-wrap nos-row2 nos-rev-mob">
    <div class="nos-copy">
      <h2 class="nos-h2">Praktičan <em>prednji zatvarač</em></h2>
      <p>Zatvarač je na prednjoj strani — lako ga vidiš i dosežeš. Tri reda kopči omogućavaju fino podešavanje prema obujmu grudi i željenoj razini podrške.</p>
      <p>Savršeno se uklapa ispod svakodnevnih majica i bluza.</p>
    </div>
    <div class="nos-media">
      <img src="<?php echo esc_url($nf.'noriks-ondersteun-worn-leopard.webp'); ?>" alt="Prednji zatvarač" loading="lazy">
    </div>
  </div>
</section>

<!-- ============ 5) Stil koji radi s tobom ============ -->
<section class="nos-sec">
  <div class="nos-wrap nos-row2">
    <div class="nos-media">
      <img src="<?php echo esc_url($nf.'noriks-ondersteun-worn-pinkleopard.webp'); ?>" alt="Stil koji radi s tobom" loading="lazy">
    </div>
    <div class="nos-copy">
      <h2 class="nos-h2">Stil koji <em>radi s tobom</em></h2>
      <p>Elegantni izgled koji funkcionira — neutralne i živopisne opcije pružaju klasiku za svaki dan ili nešto veselo ispod bijele košulje.</p>
      <p>Bez obzira na izbor, dobit ćeš istu razinu podrške i udobnosti na koju se možeš osloniti.</p>
    </div>
  </div>
</section>

<!-- ============ 6) Detalji — široki pojas, podesivost, kvaliteta ============ -->
<section class="nos-sec nos-alt">
  <div class="nos-wrap">
    <h2 class="nos-h2" style="text-align:center; margin-bottom:8px;">Svaki detalj <em>osmišljen za tebe</em></h2>
    <p style="text-align:center; max-width:720px; margin:0 auto 32px; font:400 17px/1.5 'Inter',sans-serif; color:#555;">NORIKS ONDERSTEUN nije slučajno dizajniran — svaki element ima svrhu.</p>
    <div class="nos-grid4">
      <div class="nos-card">
        <h3>Široki pojas ispod grudi</h3>
        <p>Ravnomjerno raspoređuje težinu, drži grudnjak na mjestu i sprječava uvijanje ili penjanje tijekom dana.</p>
      </div>
      <div class="nos-card">
        <h3>3-razinska podešavanja</h3>
        <p>Tri reda kopči pružaju fleksibilnost — prilagodi zatezanje kako ti odgovara, ili s vremenom kad se materijal prilagodi tijelu.</p>
      </div>
      <div class="nos-card">
        <h3>Mekan, prozračan materijal</h3>
        <p>Lagana tkanina koja propušta zrak, omogućava cijeli dan nošenja bez znojenja ili iritacije kože.</p>
      </div>
      <div class="nos-card">
        <h3>Jednostavno održavanje</h3>
        <p>Peri se na 30 °C u programu za osjetljivo rublje, suši na zraku. Zadržava oblik i elastičnost nakon deseci pranja.</p>
      </div>
    </div>
  </div>
</section>

<!-- ============ 7) NORIKS jamstva ============ -->
<section class="nos-final">
  <div class="nos-wrap">
    <h2>NORIKS jamstva za tebe</h2>
    <ul>
      <li>30 dana za povrat novca — bez dodatnih pitanja</li>
      <li>Besplatna dostava iznad 70 €</li>
      <li>Plaćanje pouzećem</li>
      <li>Ocjena 4,8 od 1.081 korisnika</li>
      <li>Preko 120.000 zadovoljnih kupaca u 11 zemalja</li>
    </ul>
  </div>
</section>
