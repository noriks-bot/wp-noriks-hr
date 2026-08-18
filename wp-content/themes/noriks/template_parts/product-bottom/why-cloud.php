<?php
/**
 * product-bottom: NORIKS Cloud — ortopedski jastuk za koljena (orto-cloud).
 *
 * Redoslijed prati referentnu stranicu (Cellsius), tekst na HR, mediji su NORIKS
 * kreative iz img/cloud/. Tamna shema jer su i kreative tamne.
 *   1. Vratite jutra za koja ste mislili da su izgubljena   11_jutra
 *   2. Bez Noriksa / S Noriksom                              01
 *   3. Poravnanje koje se vidi (prije/poslije)               02
 *   4. Osmisljeno za ono sto vas sprjecava da spavate        06
 *   5. Ostaje na mjestu. Cijelu noc.                         12
 *   6. Stvoreno da dise                                      09
 *   7. Nisu svi jastuci za koljena isti                      05
 *   8. Izradeno prema strogim standardima                    04
 *   9. Preporucuju ga strucnjaci                             hf_
 *  10. 60 noci isprobavanja                                  07
 * Recenzije i FAQ renderira zajednicki reviews.php (ne ovdje).
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
$cd      = get_template_directory_uri() . '/img/cloud/';
$cd_path = get_template_directory() . '/img/cloud/';

$cd_img = function( $file, $alt ) use ( $cd, $cd_path ) {
  if ( file_exists( $cd_path . $file ) ) {
    return '<img src="'.esc_url($cd.$file).'" alt="'.esc_attr($alt).'" loading="lazy">';
  }
  return '<div class="ncd-ph" role="img" aria-label="'.esc_attr($alt).'"><span>'.esc_html($alt).'</span></div>';
};
?>

<!-- ============ 2) Bez Noriksa / S Noriksom ============ -->
<section class="ncd-sec">
  <div class="ncd-wrap ncd-row2">
    <div class="ncd-media"><?php echo $cd_img('cld-bez-s-noriksom.webp','Spavanje bez jastuka i s NORIKS Cloud jastukom'); ?></div>
    <div class="ncd-copy">
      <h2 class="ncd-h2">Razlika koja se vidi već prvu noć</h2>
      <p><strong>Bez jastuka:</strong> gornja noga pada preko donje, zdjelica se uvija, a pritisak ide u donji dio leđa i u koljena.</p>
      <p><strong>S NORIKS Cloudom:</strong> noge ostaju u liniji s kukovima, težina se raspoređuje, a pritisne točke nestanu.</p>
      <ul class="ncd-check">
        <li>Kukovi i koljena u prirodnoj liniji</li>
        <li>Manje pritiska na donji dio leđa</li>
        <li>Manje okretanja tijekom noći</li>
      </ul>
    </div>
  </div>
</section>

<!-- ============ A) Recenzije kupaca — vrtuljak (kao prva sekcija na referenci) ============ -->
<?php
$cd_revs = array(
  array( 5, 'Konačno spavam kroz noć',      'Spavam na boku cijeli život i uvijek sam se budila s ukočenim leđima. Prvo jutro nakon jastuka — ništa. Nisam vjerovala da je tako jednostavno.', 'Marina T.' ),
  array( 5, 'Traka je ono što ga razlikuje', 'Prije mi je obični jastuk ispadao nakon pola sata. Ovaj ostaje između koljena do jutra, i kad se okrenem na drugu stranu.', 'Davor K.' ),
  array( 5, 'Spas u trudnoći',               'Kupila sam ga u sedmom mjesecu. Konačno mogu ležati na lijevoj strani bez pritiska u kuku i bez vrpoljenja pola noći.', 'Ivana P.' ),
  array( 5, 'Kukovi me više ne bole ujutro', 'Bila sam skeptična jer je to ipak samo jastuk. Razlika je stvarna — ustajem bez one ukočenosti u zdjelici.', 'Lucija H.' ),
  array( 5, 'Nakon operacije koljena',       'Fizioterapeut mi je rekao da stavljam jastuk između nogu. Ovaj drži razmak i ne pomiče se, za razliku od običnog.', 'Goran V.' ),
  array( 5, 'Ni nakon dva mjeseca se ne sploštava', 'Pjena je čvrsta koliko treba i vraća se u oblik. Navlaku sam prala nekoliko puta i izgleda kao nova.', 'Stjepan M.' ),
);
?>
<section class="ncd-sec ncd-dark">
  <div class="ncd-wrap ncd-center">
    <h2 class="ncd-h2">Zašto se bude drukčije s NORIKS Cloudom</h2>
    <p class="ncd-sub ncd-rate"><span class="ncd-stars">★★★★★</span> Ocjena <strong>4,8/5</strong> tisuća zadovoljnih kupaca</p>
  </div>
  <div class="ncd-wrap">
    <div class="ncd-revs" id="ncd-revs">
      <?php foreach ( $cd_revs as $r ) : ?>
        <article class="ncd-rev">
          <div class="ncd-rev-stars"><?php echo str_repeat( '★', (int) $r[0] ); ?></div>
          <h3 class="ncd-rev-t"><?php echo esc_html( $r[1] ); ?></h3>
          <p class="ncd-rev-p"><?php echo esc_html( $r[2] ); ?></p>
          <div class="ncd-rev-a">
            <strong><?php echo esc_html( $r[3] ); ?></strong>
            <span class="ncd-rev-v">
              <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="#2f6fd0" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg>
              Provjereni kupac
            </span>
          </div>
        </article>
      <?php endforeach; ?>
    </div>
    <div class="ncd-revs-nav">
      <button type="button" class="ncd-arw" data-dir="-1" aria-label="Prethodne recenzije">&#8592;</button>
      <div class="ncd-revs-bar"><span></span></div>
      <button type="button" class="ncd-arw" data-dir="1" aria-label="Sljedeće recenzije">&#8594;</button>
    </div>
  </div>
</section>

<!-- ============ B) Koraci — pocnite bolje spavati vec veceras ============ -->
<?php
$cd_steps = array(
  array( 'cld-korak1.webp', 'Otkopčajte traku i postavite jastuk', 'Pritisnite druker da oslobodite traku i stavite jastuk između koljena.' ),
  array( 'cld-korak2.webp', 'Prilagodite traku svojoj nozi',       'Zategnite traku oko noge u jedan od dva položaja — čvrsto, ali bez pritiska.' ),
  array( 'cld-korak3.webp', 'Spavajte s pravilnim poravnanjem',    'Jastuk drži razmak nogu, kralježnica ostaje poravnata, a pritisak popušta.' ),
  array( 'cld-korak4.webp', 'Probudite se bez ukočenosti',         'Bez okretanja pola noći i bez traženja položaja koji ne boli.' ),
);
?>
<section class="ncd-sec">
  <div class="ncd-wrap ncd-center">
    <h2 class="ncd-h2">Počnite bolje spavati već večeras</h2>
    <p class="ncd-sub">Jednostavno za korištenje. <strong>Bolji san</strong> od prve noći.</p>
  </div>
  <div class="ncd-wrap">
    <div class="ncd-steps4">
      <?php foreach ( $cd_steps as $i => $st ) : ?>
        <div class="ncd-step4">
          <div class="ncd-step4-ic">
            <?php echo $cd_img( $st[0], $st[1] ); ?>
            <span class="ncd-step4-b">Korak <?php echo (int) $i + 1; ?></span>
          </div>
          <h3 class="ncd-step4-t"><?php echo esc_html( $st[1] ); ?></h3>
          <p class="ncd-step4-p"><?php echo esc_html( $st[2] ); ?></p>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ============ 1) Vratite jutra ============ -->
<section class="ncd-sec ncd-dark">
  <div class="ncd-wrap ncd-row2">
    <div class="ncd-copy">
      <p class="ncd-eyebrow">Spavanje na boku</p>
      <h2 class="ncd-h2">Vratite jutra za koja ste mislili da su izgubljena</h2>
      <p>Znate taj osjećaj: probudite se ukočeni, cijelu noć tražite položaj koji ne boli ili se budite nekoliko puta bez pravog razloga.</p>
      <p>Problem niste vi. Kad spavate na boku bez oslonca između koljena, kukovi se uvijaju, donji dio leđa ostaje napet, a mišići cijelu noć rade da vas stabiliziraju.</p>
      <p class="ncd-strong">NORIKS Cloud drži noge razmaknute točno koliko treba — kralježnica ostaje poravnata, a tijelo se konačno opusti.</p>
    </div>
    <div class="ncd-media"><?php echo $cd_img('cld-jutra.webp','Jutro bez bolova u leđima'); ?></div>
  </div>
</section>

<!-- ============ 3) Poravnanje ============ -->
<section class="ncd-sec">
  <div class="ncd-wrap ncd-row2">
    <div class="ncd-copy">
      <h2 class="ncd-h2">Poravnanje koje osjetite ujutro</h2>
      <p>Kad je razmak nogu pravilan, kralježnica prestaje biti iskrivljena, zdjelica se poravna, a koljena se više ne stišću jedno o drugo.</p>
      <ul class="ncd-check">
        <li>Poravnata kralježnica umjesto iskrivljene</li>
        <li>Poravnata zdjelica bez uvijanja</li>
        <li>Koljena razdvojena, bez pritiska</li>
      </ul>
    </div>
    <div class="ncd-media"><?php echo $cd_img('cld-prije-poslije.webp','Prije i poslije — poravnanje kralježnice'); ?></div>
  </div>
</section>

<!-- ============ 4) Za koga je — krugovi s naslovom i tekstom (kao na referenci) ============ -->
<?php
$cd_cases = array(
  array( 'cld-case-bok.webp',       'Spavanje na boku', 'Prilagođeno vašem prirodnom položaju.' ),
  array( 'cld-case-ledja.webp',     'Bol u leđima',     'Sprječava uvijanje donjeg dijela leđa noću.' ),
  array( 'cld-case-kukovi.webp',    'Bol u kukovima',   'Drži kukove poravnate umjesto iskrivljene.' ),
  array( 'cld-case-koljena.webp',   'Bol u koljenima',  'Kraj pritisku koljena o koljeno.' ),
  array( 'cld-case-trudnoca.webp',  'Trudnoća',         'Podupire kukove i trbuh tijekom trudnoće.' ),
  array( 'cld-case-operacija.webp', 'Nakon operacije',  'Štedi kuk i koljeno tijekom oporavka.' ),
);
?>
<section class="ncd-sec ncd-dark">
  <div class="ncd-wrap ncd-center">
    <h2 class="ncd-h2">Osmišljeno za ono što vas sprječava da spavate</h2>
    <p class="ncd-sub">Šest situacija u kojima jastuk za koljena napravi najveću razliku.</p>
  </div>
  <div class="ncd-wrap">
    <div class="ncd-cases">
      <?php foreach ( $cd_cases as $c ) : ?>
        <div class="ncd-case">
          <div class="ncd-case-ic"><?php echo $cd_img( $c[0], $c[1] ); ?></div>
          <h3 class="ncd-case-t"><?php echo esc_html( $c[1] ); ?></h3>
          <p class="ncd-case-p"><?php echo esc_html( $c[2] ); ?></p>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ============ 6) Stvoreno da dise ============ -->
<section class="ncd-sec">
  <div class="ncd-wrap ncd-row2">
    <div class="ncd-copy">
      <h2 class="ncd-h2">Stvoreno da diše</h2>
      <p>Memorijska pjena medicinske kvalitete s ugrađenim perforacijama — dovoljno čvrsta da drži razmak, dovoljno mekana da se prilagodi tijelu.</p>
      <ul class="ncd-check">
        <li><strong>Periva navlaka</strong> — prozračna tkanina, nježna prema koži</li>
        <li><strong>Perforacije</strong> održavaju pjenu svježom cijelu noć</li>
        <li><strong>Zadržava oblik</strong> godinama, ne splošti se</li>
      </ul>
    </div>
    <div class="ncd-media"><?php echo $cd_img('cld-pjena.webp','Prozračna memorijska pjena s perforacijama'); ?></div>
  </div>
</section>

<!-- ============ 7) Usporedba ============ -->
<section class="ncd-sec ncd-dark">
  <div class="ncd-wrap ncd-row2">
    <div class="ncd-media"><?php echo $cd_img('cld-usporedba.webp','NORIKS Cloud u usporedbi s običnim jastucima'); ?></div>
    <div class="ncd-copy">
      <h2 class="ncd-h2">Nisu svi jastuci za koljena isti</h2>
      <ul class="ncd-vs">
        <li class="is-no"><strong>Bez trake</strong><span>ispadne čim se okrenete</span></li>
        <li class="is-no"><strong>Središnja rupa</strong><span>ometa cirkulaciju</span></li>
        <li class="is-no"><strong>Splošti se</strong><span>za nekoliko tjedana</span></li>
        <li class="is-yes"><strong>Podesiva traka</strong><span>ostaje točno gdje treba</span></li>
        <li class="is-yes"><strong>Pun, ergonomski oblik</strong><span>bez rupa i praznina</span></li>
        <li class="is-yes"><strong>Pjena medicinske kvalitete</strong><span>zadržava oblik godinama</span></li>
      </ul>
    </div>
  </div>
</section>

<!-- ============ 8) Standardi ============ -->
<section class="ncd-sec">
  <div class="ncd-wrap ncd-row2">
    <div class="ncd-copy">
      <h2 class="ncd-h2">Izrađeno prema strogim standardima</h2>
      <p>Materijali su testirani na štetne tvari, a pjena je certificirana. Dizajn je rađen prema švicarskim standardima kvalitete.</p>
      <ul class="ncd-check">
        <li><strong>OEKO-TEX® STANDARD 100</strong> — bez štetnih tvari</li>
        <li><strong>CertiPUR-EU</strong> — certificirana memorijska pjena</li>
        <li><strong>Dizajnirano u Švicarskoj</strong>, proizvedeno po europskim standardima</li>
      </ul>
    </div>
    <div class="ncd-media"><?php echo $cd_img('cld-certifikati.webp','OEKO-TEX i CertiPUR-EU certifikati'); ?></div>
  </div>
</section>

<!-- ============ 10) 60 noci ============ -->
<section class="ncd-sec ncd-dark">
  <div class="ncd-wrap ncd-row2">
    <div class="ncd-copy">
      <p class="ncd-eyebrow">Bez rizika</p>
      <h2 class="ncd-h2">60 noći isprobavanja</h2>
      <p>Isprobajte ga sami. Ako NORIKS Cloud nije pravi za vas, vraćamo vam cijeli iznos — bez uvjeta i bez papirologije.</p>
      <a class="ncd-cta" href="#bundle-selector">Naruči NORIKS Cloud</a>
    </div>
    <div class="ncd-media"><?php echo $cd_img('cld-60-noci.webp','60 noći isprobavanja'); ?></div>
  </div>
</section>

<style>
  .ncd-sec { padding: 46px 0; background: #fff; }
  .ncd-dark { background: #0e1a33; }
  .ncd-wrap { max-width: 1180px; margin: 0 auto; padding: 0 18px; }
  .ncd-row2 { display: grid; grid-template-columns: 1fr 1fr; gap: 48px; align-items: center; }
  .ncd-h2 { font-size: clamp(24px,3.1vw,34px); font-weight: 800; color: #0e1a33; line-height: 1.2; margin: 0 0 16px; }
  .ncd-eyebrow { font-size: 12.5px; font-weight: 800; letter-spacing: .12em; text-transform: uppercase; color: #6a86b8; margin: 0 0 8px; }
  .ncd-center { text-align: center; }
  .ncd-copy p, .ncd-sub { font-size: 16px; line-height: 1.7; color: #3a3a3a; margin: 0 0 14px; }
  .ncd-sub { max-width: 820px; margin: 0 auto 24px; }
  .ncd-strong { font-weight: 700; color: #0e1a33 !important; }
  .ncd-note { font-size: 14px !important; color: #6b6b6b !important; }
  .ncd-media img { width: 100%; height: auto; display: block; border-radius: 16px; }

  /* tamne sekcije */
  .ncd-dark .ncd-h2, .ncd-dark .ncd-strong { color: #fff !important; }
  .ncd-dark .ncd-copy p, .ncd-dark .ncd-sub { color: #c6d2e6; }
  .ncd-dark .ncd-note { color: #8fa2c2 !important; }
  .ncd-dark .ncd-check li { color: #eaf0fb; }
  .ncd-dark .ncd-steps li { color: #c6d2e6; }
  .ncd-dark .ncd-vs strong { color: #fff; }
  .ncd-dark .ncd-vs span { color: #a9bad6; }
  .ncd-dark .ncd-vs li { border-bottom-color: #23324f; }

  .ncd-ph { width: 100%; aspect-ratio: 1/1; background: #e8edf6; border: 1px dashed #c9d4e6; border-radius: 16px;
            display: flex; align-items: center; justify-content: center; padding: 18px; box-sizing: border-box; }
  .ncd-ph span { font-size: 13px; line-height: 1.45; color: #8ba0c0; text-align: center; }

  /* recenzije — vrtuljak (referenca) */
  .ncd-rate { display: flex; align-items: center; justify-content: center; gap: 7px; font-size: 14.5px; }
  .ncd-stars { color: #f5a623; letter-spacing: 1px; }
  .ncd-revs { display: grid; grid-auto-flow: column; grid-auto-columns: calc((100% - 3 * 20px) / 4);
              gap: 20px; overflow-x: auto; scroll-snap-type: x mandatory; scroll-behavior: smooth;
              scrollbar-width: none; padding-bottom: 4px; margin-top: 26px; }
  .ncd-revs::-webkit-scrollbar { display: none; }
  .ncd-rev { scroll-snap-align: start; border: 1px solid #e6e6e6; border-radius: 12px; padding: 18px 18px 16px;
             background: #fff; display: flex; flex-direction: column; }
  .ncd-rev-stars { color: #f5a623; font-size: 15px; letter-spacing: 1px; margin-bottom: 8px; }
  .ncd-rev-t { font-size: 15.5px; font-weight: 800; color: #0e1a33; margin: 0 0 7px; line-height: 1.3; }
  .ncd-rev-p { font-size: 14.5px; line-height: 1.6; color: #4a4a4a; margin: 0 0 14px; flex: 1 1 auto; }
  .ncd-rev-a { display: flex; align-items: center; gap: 10px; flex-wrap: wrap; font-size: 13.5px; color: #0e1a33; }
  .ncd-rev-v { display: inline-flex; align-items: center; gap: 4px; color: #5c6b7f; }
  .ncd-revs-nav { display: flex; align-items: center; gap: 14px; margin-top: 18px; }
  .ncd-arw { flex: 0 0 auto; width: 38px; height: 34px; border: 1px solid #d7d7d7; background: #fff;
             color: #0e1a33; font-size: 16px; line-height: 1; cursor: pointer; border-radius: 4px; }
  .ncd-arw:hover { background: #0e1a33; color: #fff; border-color: #0e1a33; }
  .ncd-revs-bar { flex: 1 1 auto; height: 3px; background: #e4e4e4; border-radius: 3px; overflow: hidden; }
  .ncd-revs-bar span { display: block; height: 100%; width: 25%; background: #0e1a33; border-radius: 3px; }

  /* koraci — krugovi s oznakom (referenca) */
  .ncd-steps4 { display: grid; grid-template-columns: repeat(4, 1fr); gap: 30px 24px; margin-top: 30px; }
  .ncd-step4 { text-align: center; }
  .ncd-step4-ic { position: relative; width: 100%; max-width: 190px; margin: 0 auto 26px; aspect-ratio: 1 / 1;
                  border-radius: 50%; overflow: visible; }
  .ncd-step4-ic img { width: 100%; height: 100%; object-fit: cover; display: block; border-radius: 50%; }
  .ncd-step4-b { position: absolute; left: 50%; bottom: -12px; transform: translateX(-50%);
                 background: #2f6fd0; color: #fff; font-size: 12px; font-weight: 700; letter-spacing: .01em;
                 padding: 3px 12px; border-radius: 999px; white-space: nowrap; }
  .ncd-step4-t { font-size: clamp(15px, 1.4vw, 17px); font-weight: 800; color: #fff; margin: 0 0 6px; line-height: 1.3; }
  .ncd-step4-p { font-size: 14px; line-height: 1.55; color: #a9bad6; margin: 0; }

  /* krugovi sa slucajevima — po uzoru na referentnu stranicu */
  .ncd-cases { display: grid; grid-template-columns: repeat(3, 1fr); gap: 34px 24px; margin-top: 30px; }
  .ncd-case { text-align: center; }
  .ncd-case-ic { width: 100%; max-width: 190px; margin: 0 auto 16px; aspect-ratio: 1 / 1;
                 border-radius: 50%; overflow: hidden; }
  .ncd-case-ic img { width: 100%; height: 100%; object-fit: cover; display: block; border-radius: 50%; }
  .ncd-case-t { font-size: clamp(16px, 1.5vw, 19px); font-weight: 800; color: #fff; margin: 0 0 6px; line-height: 1.25; }
  .ncd-case-p { font-size: 14.5px; line-height: 1.55; color: #a9bad6; margin: 0; }

  .ncd-check { list-style: none; margin: 0 0 16px; padding: 0; }
  .ncd-check li { position: relative; padding: 0 0 11px 30px; font-size: 15.5px; color: #0e1a33; line-height: 1.5; }
  .ncd-check li:before { content: "✓"; position: absolute; left: 0; top: 0; width: 20px; height: 20px; background: #2f6fd0; color: #fff; border-radius: 50%; font-size: 12px; text-align: center; line-height: 20px; }

  .ncd-steps { list-style: none; counter-reset: ncd; margin: 0 0 16px; padding: 0; }
  .ncd-steps li { counter-increment: ncd; position: relative; padding: 0 0 14px 40px; font-size: 15.5px; line-height: 1.55; color: #3a3a3a; }
  .ncd-steps li:before { content: counter(ncd); position: absolute; left: 0; top: 0; width: 26px; height: 26px; background: #2f6fd0; color: #fff; border-radius: 50%; font-size: 13px; font-weight: 700; text-align: center; line-height: 26px; }

  .ncd-vs { list-style: none; margin: 0; padding: 0; }
  .ncd-vs li { position: relative; padding: 11px 0 11px 34px; border-bottom: 1px solid #e2e8f2; }
  .ncd-vs li:last-child { border-bottom: 0; }
  .ncd-vs li:before { position: absolute; left: 0; top: 12px; width: 22px; height: 22px; border-radius: 50%; font-size: 12px; text-align: center; line-height: 22px; color: #fff; }
  .ncd-vs li.is-yes:before { content: "✓"; background: #2f6fd0; }
  .ncd-vs li.is-no:before  { content: "✕"; background: #93a3bd; }
  .ncd-vs strong { display: block; font-size: 15.5px; color: #0e1a33; }
  .ncd-vs span { display: block; font-size: 14px; color: #5a5a5a; }

  .ncd-stat { margin-top: 8px; }
  .ncd-stat strong { display: block; font-size: clamp(30px,4vw,44px); font-weight: 800; color: #fff; line-height: 1.05; }
  .ncd-stat span { display: block; font-size: 14.5px; line-height: 1.55; color: #a9bad6; margin-top: 4px; }

  .ncd-cta { display: inline-block; margin-top: 8px; background: #0e1a33; color: #fff; font-weight: 700; font-size: 16px; padding: 14px 30px; border-radius: 10px; text-decoration: none; }
  .ncd-cta:hover { background: #2f6fd0; color: #fff; }
  .ncd-dark .ncd-cta { background: #fff; color: #0e1a33; }
  .ncd-dark .ncd-cta:hover { background: #2f6fd0; color: #fff; }

  @media (max-width: 820px) {
    .ncd-revs { grid-auto-columns: 78%; gap: 12px; margin-top: 18px; }
    .ncd-steps4 { grid-template-columns: repeat(2, 1fr); gap: 26px 16px; margin-top: 20px; }
    .ncd-step4-ic { max-width: 140px; margin-bottom: 22px; }
    .ncd-step4-p { font-size: 13.5px; }
    .ncd-cases { grid-template-columns: repeat(2, 1fr); gap: 26px 16px; margin-top: 20px; }
    .ncd-case-ic { max-width: 140px; margin-bottom: 12px; }
    .ncd-case-p { font-size: 13.5px; }
    .ncd-sec { padding: 30px 0; }
    .ncd-row2 { grid-template-columns: 1fr; gap: 20px; }
    .ncd-row2 .ncd-media { order: -1; }
    .ncd-h2 { font-size: 1.75rem; }
    .ncd-wrap { padding: 0 9px; }
  }

  /* jastuk nema velicina */
  .noriks-global-sizechart, .gck-size-link, .gck-size-link-wrap,
  #open-size-chart, #open-size-chartCustom { display: none !important; }

  .woocommerce-product-details__short-description ul { list-style: none; margin: 8px 0 14px; padding-left: 0; }
  .woocommerce-product-details__short-description .ncd-tick { display: inline-block; width: 17px; text-indent: 0; color: #2f6fd0; font-weight: 800; }
  .woocommerce-product-details__short-description ul li { list-style: none; padding-left: 17px; text-indent: -17px; margin-left: 0; line-height: 1.55; margin-bottom: 7px; }
  .woocommerce-product-details__short-description p:has(+ ul) { margin-top: 20px; margin-bottom: 4px; }
</style>

<script>
(function(){
  /* Vrtuljak recenzija: strelice pomicu za jednu "stranicu", traka prati polozaj. */
  var box = document.getElementById('ncd-revs');
  if (box) {
    var bar = document.querySelector('.ncd-revs-bar span');
    function sync(){
      if (!bar) { return; }
      var max = box.scrollWidth - box.clientWidth;
      var ratio = box.clientWidth / box.scrollWidth;
      var track = box.parentNode.querySelector('.ncd-revs-bar').clientWidth;
      var w = Math.max(30, track * ratio);
      bar.style.width = w + 'px';
      bar.style.transform = 'translateX(' + (max > 0 ? (box.scrollLeft / max) * (track - w) : 0) + 'px)';
    }
    document.querySelectorAll('.ncd-arw').forEach(function(b){
      b.addEventListener('click', function(){
        box.scrollLeft += parseInt(b.getAttribute('data-dir'), 10) * box.clientWidth;
      });
    });
    box.addEventListener('scroll', sync, { passive: true });
    window.addEventListener('resize', sync);
    if (document.readyState === 'loading') { document.addEventListener('DOMContentLoaded', sync); } else { sync(); }
    window.addEventListener('load', sync);
  }

  document.querySelectorAll('a.ncd-cta[href="#bundle-selector"]').forEach(function(a){
    a.addEventListener('click', function(e){
      e.preventDefault();
      var t = document.getElementById('bundle-selector') || document.querySelector('.single_add_to_cart_button');
      if (t) t.scrollIntoView({ behavior: 'smooth', block: 'center' });
    });
  });
})();
</script>
