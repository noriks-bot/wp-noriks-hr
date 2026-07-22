<?php
/**
 * product-bottom: NORIKS KOMPRESIJSKE MAJICE (orto-kompresijske-majice)
 * Muška kompresijska/oblikujuća majica.
 * Sekcije po uzoru na referentnu stranicu (North-Alpine / NorthPower), prijevod HR, brand NORIKS.
 * Slike: img/kompsfit/
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
$km = get_template_directory_uri() . '/img/kompsfit/';
?>

<section class="kmf">
  <div class="kmf-wrap">

    <!-- ============ 1) Vratite samopouzdanje i snagu ============ -->
    <div class="kmf-hero">
      <div class="kmf-hero-media">
        <img src="<?php echo esc_url( $km.'hero.webp' ); ?>" alt="NORIKS kompresijska majica ispod košulje — nevidljiva i diskretna" loading="lazy">
      </div>
      <div class="kmf-hero-copy">
        <h2 class="kmf-h2">Vratite samopouzdanje i snagu</h2>
        <p>Ako želite da vam odjeća bolje pristaje i da se cijeli dan osjećate podržano, <strong>NORIKS</strong> je stvoren za vas.</p>
        <p>Izrađen od <strong>ionske kompresijske tkanine</strong>, pruža pripijen, potporni kroj koji izglađuje siluetu i nudi cjelodnevnu udobnost. Rezultat: oštriji izgled, bolja svjesnost o držanju i samopouzdanje koje dolazi kad se osjećate dobro u onome što nosite.</p>
      </div>
    </div>

    <!-- ============ 2) Tajno oružje protiv pivskog trbuha ============ -->
    <div class="kmf-weapon">
      <h2 class="kmf-h2 kmf-center">Vaše novo tajno oružje protiv pivskog trbuha</h2>
      <div class="kmf-weapon-grid">
        <div class="kmf-feat-col">
          <div class="kmf-feat"><span class="kmf-feat-ic">✕</span><p>Zbogom „dad bod“.</p></div>
          <div class="kmf-feat"><span class="kmf-feat-ic">✕</span><p>Pivski trbuh? Nestao.</p></div>
          <div class="kmf-feat"><span class="kmf-feat-ic">✕</span><p>Slaninice? Zaključane.</p></div>
        </div>
        <div class="kmf-weapon-media">
          <img src="<?php echo esc_url( $km.'wear.webp' ); ?>" alt="NORIKS kompresijska majica izglađuje trbuh i oblikuje siluetu" loading="lazy">
        </div>
        <div class="kmf-feat-col">
          <div class="kmf-feat"><span class="kmf-feat-ic">✓</span><p>Prsa? Zaglađena.</p></div>
          <div class="kmf-feat"><span class="kmf-feat-ic">✓</span><p>Nevidljivo. Nezaustavljivo.</p></div>
          <div class="kmf-feat"><span class="kmf-feat-ic">✓</span><p>Košulja pristaje. Konačno.</p></div>
        </div>
      </div>
    </div>

    <!-- ============ 3) Zašto NORIKS? (usporedba) ============ -->
    <div class="kmf-compare">
      <h2 class="kmf-h2">Zašto NORIKS?</h2>
      <div class="kmf-table">
        <div class="kmf-t-head">
          <span class="kmf-t-feature"></span>
          <span class="kmf-t-col kmf-t-us">NORIKS</span>
          <span class="kmf-t-col kmf-t-them">Ostali</span>
        </div>
        <?php
        $kmf_rows = array(
          'Cjelodnevna udobnost kompresije',
          'Izdržljiv, visokokvalitetan materijal',
          'Nevidljiv ispod bilo koje košulje',
          'Ujedno i sportska majica',
          'Lagana tkanina koja odvodi vlagu',
        );
        foreach ( $kmf_rows as $row ) : ?>
          <div class="kmf-t-row">
            <span class="kmf-t-feature"><?php echo esc_html( $row ); ?></span>
            <span class="kmf-t-col kmf-t-us"><span class="kmf-yes">✓</span></span>
            <span class="kmf-t-col kmf-t-them"><span class="kmf-no">✕</span></span>
          </div>
        <?php endforeach; ?>
      </div>
      <div class="kmf-compare-media">
        <img src="<?php echo esc_url( $km.'compare.webp' ); ?>" alt="NORIKS kompresijska majica u odnosu na obične majice" loading="lazy">
      </div>
    </div>

    <!-- ============ 3b) FAQ ============ -->
    <div class="kmf-faq">
      <h2 class="kmf-h2 kmf-center">Često postavljana pitanja</h2>

      <details class="kmf-q" open>
        <summary>Za koga je NORIKS FIT namijenjen?</summary>
        <div class="kmf-a"><p>NORIKS FIT stvoren je za muškarce koji žele vitkiji izgled, vratiti samopouzdanje u vlastito tijelo, ispraviti držanje, osjećati se energičnije tijekom dana i izgledati vitkije ispod bilo koje odjeće.</p></div>
      </details>

      <details class="kmf-q">
        <summary>Kako NORIKS FIT majica zapravo djeluje?</summary>
        <div class="kmf-a"><p>NORIKS FIT koristi naprednu ionsku kompresijsku tkaninu koja aktivira prirodni odgovor tijela. Mikro-tkana vlakna potiču zdravu cirkulaciju i pomažu vam održati uspravno, budno držanje od jutra do večeri. Uz redovito nošenje daje vidljivo oblikovaniji torzo, bolju poravnatost kralježnice i osjećaj samopouzdanja u tome kako izgledate i kako se osjećate.</p></div>
      </details>

      <details class="kmf-q">
        <summary>Koliko brzo ću primijetiti rezultate?</summary>
        <div class="kmf-a"><p>Svako tijelo je različito, ali većina kupaca prijavljuje vidljivu promjenu unutar prvih 30 dana. Za najbolji učinak nosite NORIKS FIT svakodnevno i kombinirajte ga s uravnoteženom prehranom i redovitim kretanjem.</p></div>
      </details>

      <details class="kmf-q">
        <summary>Što ako mi veličina ne odgovara?</summary>
        <div class="kmf-a"><p>Nema problema. Kontaktirajte nas na <a href="mailto:info@noriks.com">info@noriks.com</a> i naš tim će odmah organizirati zamjenu.</p></div>
      </details>

      <details class="kmf-q">
        <summary>Koliko traje dostava?</summary>
        <div class="kmf-a"><p>Narudžbe obično stižu unutar 2–5 radnih dana iz našeg europskog skladišta.</p></div>
      </details>

      <details class="kmf-q">
        <summary>Mogu li majicu prati u perilici?</summary>
        <div class="kmf-a"><p>Apsolutno — koristite hladni, nježni program kako biste sačuvali kompresiju i produžili vijek trajanja tkanine.</p></div>
      </details>

      <details class="kmf-q">
        <summary>Od čega je NORIKS FIT izrađen?</summary>
        <div class="kmf-a"><p>80 % najlon, 20 % elastan.</p></div>
      </details>
    </div>

    <!-- ============ 4) Recenzije ============ -->
    <div class="kmf-reviews">
      <div class="kmf-rev-top">
        <span class="kmf-rev-stars">★★★★★</span>
        <span class="kmf-rev-head">Izvrsno — 4,8 od 5 zvjezdica</span>
      </div>
      <div class="kmf-rev-list">

        <div class="kmf-rev-card">
          <div class="kmf-rev-photo"><img src="<?php echo esc_url( $km.'wear.webp' ); ?>" alt="NORIKS recenzija kupca" loading="lazy"></div>
          <p class="kmf-rev-txt">„Bit ću iskren — bio sam skeptičan. Uvijek sam imao onaj trbuščić koji sam skrivao pod širokim majicama. Nakon 4 tjedna nošenja NORIKS-a 4 sata dnevno, skinuo sam nekoliko centimetara u struku i počeo stajati uspravno bez razmišljanja. Ramena su se otvorila, a djevojka je rekla da izgledam kao da 'blistam'. Ovo nije samo majica — to je dnevni podsjetnik na to tko želim postati.“</p>
          <div class="kmf-rev-foot"><span class="kmf-rev-badge">★★★★★ Provjeren</span><span class="kmf-rev-name">Ivan M. — 34 g.</span></div>
        </div>

        <div class="kmf-rev-card">
          <div class="kmf-rev-photo"><img src="<?php echo esc_url( $km.'persona.webp' ); ?>" alt="NORIKS recenzija kupca" loading="lazy"></div>
          <p class="kmf-rev-txt">„Cijeli dan sjedim za stolom. Pogrbljen, napuhnut, bez samopouzdanja. NORIKS me doslovno natjerao da sjedim uspravno bez ikakvog truda. Za 10 dana napetost u donjem dijelu leđa je nestala, a košulje su počele bolje pristajati. Sad ga nosim u ured — diskretan je, prozračan, i iskreno? Prestao sam se skrivati od kamera.“</p>
          <div class="kmf-rev-foot"><span class="kmf-rev-badge">★★★★★ Provjeren</span><span class="kmf-rev-name">Marko P. — 42 g.</span></div>
        </div>

        <div class="kmf-rev-card">
          <div class="kmf-rev-photo"><img src="<?php echo esc_url( $km.'hero.webp' ); ?>" alt="NORIKS recenzija kupca" loading="lazy"></div>
          <p class="kmf-rev-txt">„Tri godine sam odbijao izlaske jer sam mrzio ono što vidim u ogledalu dok se oblačim. Svaki događaj me stresirao tjedan dana unaprijed. NORIKS je prvi put da sam prestao ratovati s vlastitim odrazom. Jutros sam se obukao za 5 minuta. Bez namještanja. Bez izbjegavanja ogledala. To je to.“</p>
          <div class="kmf-rev-foot"><span class="kmf-rev-badge">★★★★★ Provjeren</span><span class="kmf-rev-name">Tomislav K. — 27 g.</span></div>
        </div>

      </div>
    </div>

  </div>
</section>

<style>
.kmf{background:#fff;color:#141414;}
.kmf-wrap{max-width:1100px;margin:0 auto;padding:28px 16px 52px;}
.kmf *{box-sizing:border-box;}
.kmf-h2{font-size:30px;line-height:1.15;font-weight:800;color:#141414;margin:0 0 16px;font-family:Georgia,'Times New Roman',serif;}
.kmf-center{text-align:center;}

/* 1) hero */
.kmf-hero{display:grid;grid-template-columns:1fr 1fr;gap:36px;align-items:center;margin-bottom:64px;}
.kmf-hero-media img{width:100%;height:auto;border-radius:16px;display:block;}
.kmf-hero-copy p{font-size:16px;line-height:1.65;color:#3a3a3a;margin:0 0 14px;}

/* 2) weapon */
.kmf-weapon{margin-bottom:64px;}
.kmf-weapon .kmf-h2{margin-bottom:28px;text-transform:uppercase;font-size:24px;letter-spacing:.01em;}
.kmf-weapon-grid{display:grid;grid-template-columns:1fr 1.1fr 1fr;gap:20px;align-items:center;}
.kmf-weapon-media img{width:100%;height:auto;border-radius:14px;display:block;}
.kmf-feat-col{display:flex;flex-direction:column;gap:34px;}
.kmf-feat{text-align:center;}
.kmf-feat-ic{display:inline-flex;align-items:center;justify-content:center;width:46px;height:46px;border:1.5px solid #141414;border-radius:50%;font-size:20px;margin-bottom:10px;}
.kmf-feat p{margin:0;font-weight:700;font-size:15px;text-transform:uppercase;letter-spacing:.02em;color:#141414;}

/* 3) compare */
.kmf-compare{display:grid;grid-template-columns:1.4fr .8fr;gap:32px;align-items:center;margin-bottom:64px;}
.kmf-table{border-radius:14px;overflow:hidden;border:1px solid #ececec;}
.kmf-t-head,.kmf-t-row{display:grid;grid-template-columns:1fr 90px 90px;align-items:center;}
.kmf-t-head{background:#141414;color:#fff;}
.kmf-t-head .kmf-t-col{color:#fff;font-weight:700;text-align:center;padding:12px 6px;font-size:14px;}
.kmf-t-feature{padding:14px 16px;font-size:14px;color:#141414;}
.kmf-t-head .kmf-t-feature{color:#fff;}
.kmf-t-row{border-top:1px solid #ececec;}
.kmf-t-row:nth-child(even){background:#fafafa;}
.kmf-t-col{text-align:center;font-size:16px;}
.kmf-yes{color:#2fae4e;font-weight:800;}
.kmf-no{color:#c9c9c9;font-weight:800;}
.kmf-compare-media img{width:100%;height:auto;border-radius:14px;display:block;}

/* 4) reviews */
.kmf-reviews{border-top:1px solid #ececec;padding-top:34px;}
.kmf-rev-top{display:flex;flex-direction:column;align-items:center;gap:4px;margin-bottom:24px;}
.kmf-rev-top .kmf-rev-stars{color:#00b67a;font-size:22px;letter-spacing:2px;}
.kmf-rev-head{font-weight:700;font-size:17px;color:#141414;}
.kmf-rev-list{display:grid;grid-template-columns:repeat(auto-fit,minmax(280px,1fr));gap:18px;}
.kmf-rev-card{border:1px solid #ececec;border-radius:14px;overflow:hidden;display:flex;flex-direction:column;}
.kmf-rev-photo img{width:100%;height:260px;object-fit:cover;display:block;}
.kmf-rev-txt{padding:16px 16px 8px;margin:0;font-size:14px;line-height:1.55;color:#333;flex:1;}
.kmf-rev-foot{padding:0 16px 16px;display:flex;flex-direction:column;gap:4px;}
.kmf-rev-badge{color:#00b67a;font-size:13px;font-weight:700;}
.kmf-rev-name{font-weight:700;font-size:14px;color:#141414;}

/* faq */
.kmf-faq{margin-bottom:56px;}
.kmf-faq .kmf-h2{margin-bottom:22px;}
.kmf-q{border:1px solid #ececec;border-radius:12px;margin-bottom:10px;overflow:hidden;background:#fff;}
.kmf-q summary{cursor:pointer;list-style:none;padding:16px 44px 16px 18px;font-weight:700;font-size:16px;position:relative;color:#141414;font-family:Georgia,'Times New Roman',serif;}
.kmf-q summary::-webkit-details-marker{display:none;}
.kmf-q summary::after{content:"+";position:absolute;right:18px;top:50%;transform:translateY(-50%);font-size:22px;color:#888;}
.kmf-q[open] summary::after{content:"–";}
.kmf-a{padding:0 18px 18px;font-size:15px;line-height:1.6;color:#3a3a3a;}
.kmf-a p{margin:0;}
.kmf-a a{color:#141414;font-weight:700;}

@media(max-width:860px){
  .kmf-hero{grid-template-columns:1fr;gap:20px;}
  .kmf-compare{grid-template-columns:1fr;gap:20px;}
  .kmf-h2{font-size:24px;}
}
@media(max-width:600px){
  .kmf-weapon-grid{grid-template-columns:1fr;gap:22px;}
  .kmf-weapon-media{order:-1;}
  .kmf-feat-col{flex-direction:row;justify-content:space-around;gap:12px;}
}
</style>
