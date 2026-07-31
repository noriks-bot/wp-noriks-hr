<?php
/**
 * product-bottom: NORIKS SmartPlay — zvučni uređaj s karticama za učenje riječi (orto-smartplay).
 * Sekcije preslikane s referentne stranice, tekst na HR, slike iz img/smartplay/.
 * Slika i tekst se izmjenjuju lijevo/desno.
 *   1. Učenje riječi koje postane igra     slika lijevo   01-igra
 *   2. Kako radi — u 3 koraka              slika desno    02-uporaba
 *   3. Do 510 riječi, 20+ kategorija       slika lijevo   03-kartice
 *   4. Jasan glas i točan izgovor          slika desno    04-zvok
 *   5. Kartice koje izdrže dječje ruke     slika lijevo   05-trpezne
 *   6. Učenje bez ekrana                   slika desno    06-brez-ekrana
 *   7. Zašto roditelji biraju Nuviva Kids  usporedna tablica
 *   8. Što kažu roditelji                  3 kartice recenzija
 * FAQ i recenzije renderira zajednički reviews.php (ne ovdje).
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
$nk      = get_template_directory_uri() . '/img/smartplay/';
$nk_path = get_template_directory() . '/img/smartplay/';

/* Ako slika nije na serveru, prikaže se neutralni sivi placeholder. */
$nk_img = function( $file, $alt ) use ( $nk, $nk_path ) {
  if ( file_exists( $nk_path . $file ) ) {
    return '<img src="'.esc_url($nk.$file).'" alt="'.esc_attr($alt).'" loading="lazy">';
  }
  return '<div class="nvk-ph" role="img" aria-label="'.esc_attr($alt).'"><span>'.esc_html($alt).'</span></div>';
};
?>

<!-- ============ 1) Učenje riječi koje postane igra ============ -->
<section class="nvk-sec">
  <div class="nvk-wrap nvk-row2">
    <div class="nvk-media"><?php echo $nk_img('01-igra.jpg','Dijete se igra s NORIKS SmartPlay karticama'); ?></div>
    <div class="nvk-copy">
      <h2 class="nvk-h2">Kad učenje riječi postane igra</h2>
      <p class="nvk-lead">Djeca ne uče riječi tako da ih ponavljaju iz knjige. Uče ih kad nešto vide, čuju i sami ponove.</p>
      <p>NORIKS SmartPlay spaja upravo to: svaka kartica ima jasnu sliku, a uređaj naglas izgovori riječ. Dijete pritisne gumb, čuje riječ i ponovi je — bez pomoći odrasle osobe.</p>
      <p>Zato se igra nastavlja i onda kad vi kuhate ručak ili vozite auto. A dijete cijelo vrijeme gradi rječnik.</p>
    </div>
  </div>
</section>

<!-- ============ 2) Kako radi — u 3 koraka ============ -->
<section class="nvk-sec nvk-alt">
  <div class="nvk-wrap nvk-row2">
    <div class="nvk-copy">
      <h2 class="nvk-h2">Kako radi — u 3 koraka</h2>
      <ol class="nvk-steps">
        <li><strong>Umetnite karticu.</strong> Kartica jednostavno klizne u utor na uređaju.</li>
        <li><strong>Pritisnite gumb.</strong> Uređaj naglas izgovori riječ, jasno i razgovijetno.</li>
        <li><strong>Dijete ponovi.</strong> Vidi sliku, čuje riječ i izgovori je — tako riječ i ostane.</li>
      </ol>
      <p>Bez aplikacija, bez postavljanja i bez interneta. Uređaj je dovoljno jednostavan da ga dijete koristi samo.</p>
      <a class="nvk-cta" href="#bundle-selector">Odaberi paket →</a>
    </div>
    <div class="nvk-media"><?php echo $nk_img('02-uporaba.jpg','Umetanje kartice u NORIKS SmartPlay uređaj'); ?></div>
  </div>
</section>

<!-- ============ 3) Do 510 riječi i više od 20 kategorija ============ -->
<section class="nvk-sec">
  <div class="nvk-wrap nvk-row2">
    <div class="nvk-media"><?php echo $nk_img('03-kartice.jpg','Kartice NORIKS SmartPlay po kategorijama'); ?></div>
    <div class="nvk-copy">
      <h2 class="nvk-h2">Do 510 riječi i više od 20 kategorija</h2>
      <p>Životinje, hrana, boje, brojevi, emocije, zanimanja, priroda, svakodnevni predmeti — kategorije prate ono što dijete zaista susreće.</p>
      <ul class="nvk-check">
        <li>Početni paket: 224 kartice</li>
        <li>Prošireni paket: 510 kartica</li>
        <li>Kartice su označene brojem i kategorijom, pa je slaganje jednostavno</li>
      </ul>
      <p>Zato jedan uređaj traje godinama: dijete najprije uči imenovati, kasnije povezivati i opisivati.</p>
    </div>
  </div>
</section>

<!-- ============ 4) Jasan glas i točan izgovor ============ -->
<section class="nvk-sec nvk-alt">
  <div class="nvk-wrap nvk-row2">
    <div class="nvk-copy">
      <h2 class="nvk-h2">Jasan glas i točan izgovor</h2>
      <p>Zvuk je dovoljno glasan za dječju sobu i dovoljno čist da se svaki glas razabere. To je važnije nego što se čini — dijete ponavlja točno ono što čuje.</p>
      <ul class="nvk-check">
        <li>Glasan, čist zvuk bez šuma</li>
        <li>Mirno tempirana riječ — dijete stigne ponoviti</li>
        <li>Podesiva glasnoća za tiše prostore</li>
      </ul>
    </div>
    <div class="nvk-media"><?php echo $nk_img('04-zvok.jpg','NORIKS SmartPlay uređaj s karticama'); ?></div>
  </div>
</section>

<!-- ============ 5) Kartice koje izdrže dječje ruke ============ -->
<section class="nvk-sec">
  <div class="nvk-wrap nvk-row2">
    <div class="nvk-media"><?php echo $nk_img('05-trpezne.jpg','Čvrste kartice NORIKS SmartPlay'); ?></div>
    <div class="nvk-copy">
      <h2 class="nvk-h2">Kartice koje izdrže dječje ruke</h2>
      <p>Kartice su tiskane na debljem, ojačanom materijalu — ne gužvaju se i ne trgaju pri svakodnevnoj upotrebi. Uređaj je zaobljen, lagan i bez oštrih rubova, pa ga dijete lako drži i nosi sa sobom.</p>
      <ul class="kvk-hidden nvk-check">
        <li>Ojačane kartice otporne na trganje</li>
        <li>Lagan uređaj s mekim, zaobljenim rubovima</li>
        <li>Površina koja se lako obriše</li>
      </ul>
    </div>
  </div>
</section>

<!-- ============ 6) Učenje bez ekrana ============ -->
<section class="nvk-sec nvk-alt">
  <div class="nvk-wrap nvk-row2">
    <div class="nvk-copy">
      <h2 class="nvk-h2">Učenje bez ekrana</h2>
      <p>Sve više roditelja želi smanjiti vrijeme pred ekranom, ali bez da dijete izgubi poticaj za učenje. NORIKS SmartPlay radi upravo tako: nema zaslona, nema obavijesti i nema aplikacija koje odvlače pažnju.</p>
      <p>Ostaje samo ono bitno — slika, riječ i djetetov glas.</p>
      <a class="nvk-cta" href="#bundle-selector">Naruči NORIKS SmartPlay</a>
    </div>
    <div class="nvk-media"><?php echo $nk_img('06-brez-ekrana.jpg','Dijete uči bez ekrana s NORIKS SmartPlay'); ?></div>
  </div>
</section>

<!-- ============ 7) Zašto roditelji biraju Nuviva Kids ============ -->
<section class="nvk-sec">
  <div class="nvk-wrap-narrow">
    <h2 class="nvk-h2 nvk-center">Zašto roditelji biraju NORIKS SmartPlay</h2>
    <div class="nvk-table">
      <div class="nvk-trow nvk-thead">
        <span></span>
        <span class="nvk-us">NORIKS SmartPlay</span>
        <span>Aplikacije i crtići</span>
      </div>
      <?php foreach ( array(
        array( 'Vrijeme pred ekranom', 'Bez ekrana', 'Sati pred zaslonom' ),
        array( 'Izgovor',              'Jasan, razgovijetan glas', 'Brz govor, često nerazumljiv' ),
        array( 'Dijete sudjeluje',     'Ponavlja naglas',          'Uglavnom pasivno gleda' ),
        array( 'Trošak',               'Jednokratno',              'Mjesečne pretplate' ),
        array( 'Samostalnost',         'Dijete koristi samo',      'Traži roditelja i uređaj' ),
      ) as $r ) : ?>
        <div class="nvk-trow">
          <span class="nvk-tlabel"><?php echo esc_html( $r[0] ); ?></span>
          <span class="nvk-tyes">✓ <?php echo esc_html( $r[1] ); ?></span>
          <span class="nvk-tno">✕ <?php echo esc_html( $r[2] ); ?></span>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ============ 8) Što kažu roditelji ============ -->
<section class="nvk-sec nvk-alt">
  <div class="nvk-wrap">
    <h2 class="nvk-h2 nvk-center">Što kažu roditelji</h2>
    <div class="nvk-rev-grid">
      <?php foreach ( array(
        array( 'Sin je progovorio više u mjesec dana', 'Sin ima tri godine i dugo je govorio jako malo. Uređaj mu je odmah bio zanimljiv jer sam pritišće gumb. U mjesec dana je počeo ponavljati riječi koje prije nije ni pokušavao.', 'Martina K.' ),
        array( 'Konačno nešto bez ekrana', 'Tražila sam igračku koja uči, a nije tablet. Ovo je točno to — kćer sjedi s karticama i ponavlja naglas. Zvuk je jasan, ne mora se pogađati koja je riječ.', 'Ivana P.' ),
        array( 'Kartice su preživjele sve', 'Mislio sam da će kartice stradati u tjedan dana. Nisu — savijaju se, ali ne trgaju. Uređaj je pao nekoliko puta i i dalje radi kao prvi dan.', 'Damir S.' ),
      ) as $rv ) : ?>
        <article class="nvk-rev">
          <div class="nvk-stars" aria-label="Ocjena 5 od 5">★★★★★</div>
          <p class="nvk-rev-title"><?php echo esc_html( $rv[0] ); ?></p>
          <p class="nvk-rev-text">„<?php echo esc_html( $rv[1] ); ?>"</p>
          <p class="nvk-rev-name"><?php echo esc_html( $rv[2] ); ?></p>
        </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<style>
  .nvk-sec { padding: 46px 0; }
  .nvk-alt { background: #f5f6f7; }
  .nvk-wrap { max-width: 1180px; margin: 0 auto; padding: 0 18px; }
  .nvk-wrap-narrow { max-width: 900px; margin: 0 auto; padding: 0 18px; }
  .nvk-row2 { display: grid; grid-template-columns: 1fr 1fr; gap: 48px; align-items: center; }
  .nvk-h2 { font-size: clamp(24px,3.1vw,34px); font-weight: 800; color: #141414; line-height: 1.2; margin: 0 0 16px; }
  .nvk-center { text-align: center; }
  .nvk-copy p { font-size: 15.5px; line-height: 1.65; color: #3a3a3a; margin: 0 0 14px; }
  .nvk-lead { font-weight: 700; color: #141414; }
  .nvk-media img { width: 100%; height: auto; display: block; border-radius: 14px; }

  .nvk-ph { width: 100%; aspect-ratio: 4/3; background: #ededed; border: 1px dashed #d3d3d3; border-radius: 14px;
            display: flex; align-items: center; justify-content: center; padding: 18px; box-sizing: border-box; }
  .nvk-ph span { font-size: 13px; line-height: 1.45; color: #9a9a9a; text-align: center; }

  .nvk-check { list-style: none; margin: 0 0 16px; padding: 0; }
  .nvk-check li { position: relative; padding: 0 0 11px 30px; font-size: 15.5px; color: #141414; line-height: 1.5; }
  .nvk-check li:before { content: "✓"; position: absolute; left: 0; top: 0; width: 20px; height: 20px; background: #141414; color: #fff; border-radius: 50%; font-size: 12px; text-align: center; line-height: 20px; }
  .nvk-steps { list-style: none; counter-reset: nvkstep; margin: 0 0 16px; padding: 0; }
  .nvk-steps li { counter-increment: nvkstep; position: relative; padding: 0 0 14px 40px; font-size: 15.5px; line-height: 1.55; color: #3a3a3a; }
  .nvk-steps li:before { content: counter(nvkstep); position: absolute; left: 0; top: 0; width: 26px; height: 26px; background: #141414; color: #fff; border-radius: 50%; font-size: 13px; font-weight: 700; text-align: center; line-height: 26px; }

  .nvk-cta { display: inline-block; margin-top: 6px; background: #141414; color: #fff; font-weight: 700; font-size: 15px; padding: 13px 26px; border-radius: 8px; text-decoration: none; }
  .nvk-cta:hover { background: #E8450E; color: #fff; }

  /* 7) usporedna tablica */
  .nvk-table { margin-top: 22px; border: 1px solid #e6e6e6; border-radius: 12px; overflow: hidden; background: #fff; }
  .nvk-trow { display: grid; grid-template-columns: 1.1fr 1fr 1fr; gap: 10px; padding: 12px 16px; border-top: 1px solid #eee; align-items: center; }
  .nvk-trow:first-child { border-top: 0; }
  .nvk-thead { background: #fafafa; font-weight: 800; color: #141414; font-size: 14px; }
  .nvk-us { color: #E8450E; }
  .nvk-tlabel { font-weight: 700; color: #141414; font-size: 14.5px; }
  .nvk-tyes { color: #1f7a3d; font-size: 14.5px; }
  .nvk-tno { color: #9a9a9a; font-size: 14.5px; }

  /* 8) kartice recenzija */
  .nvk-rev-grid { display: grid; grid-template-columns: repeat(3,1fr); gap: 22px; margin-top: 26px; }
  .nvk-rev { background: #fff; border: 1px solid #e8e8e8; border-radius: 12px; padding: 22px 20px; text-align: center; }
  .nvk-stars { color: #f5b301; font-size: 16px; letter-spacing: 1px; }
  .nvk-rev-title { font-weight: 800; color: #141414; font-size: 15px; margin: 10px 0; }
  .nvk-rev-text { font-size: 14px; line-height: 1.6; color: #4a4a4a; margin: 0 0 14px; }
  .nvk-rev-name { font-size: 13px; font-style: italic; color: #6b6b6b; margin: 0; }

  @media (max-width: 820px) {
    .nvk-sec { padding: 9px 0; }
    .nvk-sec:first-of-type { padding-top: 0; }
    .nvk-wrap { padding-left: 0; padding-right: 0; }
    .nvk-row2 { grid-template-columns: 1fr; gap: 18px; }
    .nvk-row2 .nvk-media { order: -1; }
    .nvk-h2 { font-size: 1.9rem; margin-bottom: 12px; }
    .nvk-rev-grid { grid-template-columns: 1fr; gap: 18px; }
    .nvk-trow { grid-template-columns: 1fr; gap: 4px; }
    .nvk-thead { display: none; }
  }

  /* Nema "Tablica veličina" linka na ovom proizvodu (ni plugin ni globalni). */
  .noriks-global-sizechart, .gck-size-link, .gck-size-link-wrap,
  #open-size-chart, #open-size-chartCustom { display: none !important; }

  /* Kratki opis: skupljeni razmaci, viseći uvod kod ✓ redaka. */
  .woocommerce-product-details__short-description { margin-bottom: 10px !important; }
  .woocommerce-product-details__short-description ul { list-style: none; margin: 4px 0 8px; padding-left: 0; }
  .woocommerce-product-details__short-description ul li,
  .woocommerce-product-details__short-description p { padding-left: 1.6em; text-indent: -1.6em; line-height: 1.4; margin: 0 0 5px !important; }
</style>

<script>
(function(){
  document.querySelectorAll('a.nvk-cta[href="#bundle-selector"]').forEach(function(a){
    a.addEventListener('click', function(e){ e.preventDefault(); var t=document.getElementById('bundle-selector')||document.querySelector('.single_add_to_cart_button'); if(t) t.scrollIntoView({behavior:'smooth',block:'center'}); });
  });
})();
</script>
