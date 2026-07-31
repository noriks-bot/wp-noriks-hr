<?php
/**
 * product-bottom: NORIKS Cards — zvučni uređaj s karticama za učenje engleskog (noriks-cards).
 * Gdje slika nosi tekst, koristi se LOKALIZIRANA hrvatska kreativa (*-hr.jpg);
 * gdje teksta nema, koriste se fotografije proizvoda. Slika i tekst se izmjenjuju.
 *   1. Kad učenje engleskog postane igra   slika lijevo   01-igra
 *   2. Kako radi — u 3 koraka              slika desno    02-uporaba
 *   3. Vrhunski uređaj za izgovor          slika lijevo   09-prednosti-hr
 *   4. Do 510 riječi i 20+ kategorija      slika desno    03-kartice
 *   5. Gradi rječnik i samopouzdanje       slika lijevo   10-rjecnik-hr
 *   6. Kartice koje izdrže dječje ruke     slika desno    05-trpezne
 *   7. Razlika se čuje i vidi              slika lijevo   11-prije-poslije-hr
 *   8. Poslušali smo roditelje             slika desno    12-roditelji-hr
 *   9. Pogledajte na djelu                 4 videa (HR titlovi)
 *  10. Učenje bez ekrana                   slika lijevo   06-brez-ekrana
 *  11. Što kažu roditelji                  3 kartice recenzija
 * FAQ i recenzije renderira zajednički reviews.php (ne ovdje).
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
$nk      = get_template_directory_uri() . '/img/noriks-cards/';
$nk_path = get_template_directory() . '/img/noriks-cards/';
$nkv     = $nk . 'videos/';
$nkv_path = $nk_path . 'videos/';

/* Ako slika nije na serveru, prikaže se neutralni sivi placeholder. */
$nk_img = function( $file, $alt ) use ( $nk, $nk_path ) {
  if ( file_exists( $nk_path . $file ) ) {
    return '<img src="'.esc_url($nk.$file).'" alt="'.esc_attr($alt).'" loading="lazy">';
  }
  return '<div class="nvk-ph" role="img" aria-label="'.esc_attr($alt).'"><span>'.esc_html($alt).'</span></div>';
};
?>

<!-- ============ 1) Kad učenje engleskog postane igra ============ -->
<section class="nvk-sec">
  <div class="nvk-wrap nvk-row2">
    <div class="nvk-media"><?php echo $nk_img('01-igra.jpg','Dijete se igra s NORIKS Cards karticama'); ?></div>
    <div class="nvk-copy">
      <h2 class="nvk-h2">Kad učenje engleskog postane igra</h2>
      <p class="nvk-lead">Djeca ne uče riječi tako da ih ponavljaju iz knjige. Uče ih kad nešto vide, čuju i sami ponove.</p>
      <p>NORIKS Cards spaja upravo to: svaka kartica ima jasnu sliku, a uređaj naglas izgovori riječ na engleskom. Dijete pritisne gumb, čuje izgovor i ponovi ga — bez pomoći odrasle osobe.</p>
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
        <li><strong>Pritisnite gumb.</strong> Uređaj naglas izgovori riječ — jasno i razgovijetno.</li>
        <li><strong>Dijete ponovi.</strong> Vidi sliku, čuje riječ i izgovori je — tako riječ i ostane.</li>
      </ol>
      <p>Bez aplikacija, bez postavljanja i bez interneta. Uređaj je dovoljno jednostavan da ga dijete koristi samo.</p>
      <a class="nvk-cta" href="#bundle-selector">Naruči NORIKS Cards →</a>
    </div>
    <div class="nvk-media"><?php echo $nk_img('02-uporaba.jpg','Umetanje kartice u NORIKS Cards uređaj'); ?></div>
  </div>
</section>

<!-- ============ 3) Vrhunski uređaj za učenje engleskog izgovora ============ -->
<section class="nvk-sec">
  <div class="nvk-wrap nvk-row2">
    <div class="nvk-media"><?php echo $nk_img('09-prednosti-hr.jpg','Prednosti NORIKS Cards uređaja'); ?></div>
    <div class="nvk-copy">
      <h2 class="nvk-h2">Vrhunski uređaj za učenje engleskog izgovora</h2>
      <ul class="nvk-check">
        <li><strong>Pravi engleski izgovor, jasan glas</strong> — dijete čuje riječ onako kako se stvarno izgovara</li>
        <li><strong>Pametnije učenje, 20+ kategorija</strong> — od životinja i hrane do emocija i zanimanja</li>
        <li><strong>Čvrste kartice otporne na trganje</strong> — izdrže svakodnevnu upotrebu</li>
        <li><strong>Glasan, jasan zvuk za djecu</strong> — čuje se preko sobe, bez šuma</li>
      </ul>
    </div>
  </div>
</section>

<!-- ============ 4) Do 510 riječi i više od 20 kategorija ============ -->
<section class="nvk-sec nvk-alt">
  <div class="nvk-wrap nvk-row2">
    <div class="nvk-copy">
      <h2 class="nvk-h2">Do 510 riječi i više od 20 kategorija</h2>
      <p>Životinje, hrana, boje, brojevi, emocije, zanimanja, priroda, svakodnevni predmeti — kategorije prate ono što dijete zaista susreće.</p>
      <ul class="nvk-check">
        <li>Komplet kartica dolazi uz uređaj — ništa se ne dokupljuje</li>
        <li>Kartice su označene brojem i kategorijom, pa je slaganje jednostavno</li>
        <li>Ojačane kartice otporne na trganje</li>
      </ul>
      <p>Zato jedan uređaj traje godinama: dijete najprije uči imenovati, kasnije povezivati i opisivati.</p>
    </div>
    <div class="nvk-media"><?php echo $nk_img('03-kartice.jpg','Kartice NORIKS Cards po kategorijama'); ?></div>
  </div>
</section>

<!-- ============ 5) Gradi rječnik i samopouzdanje ============ -->
<section class="nvk-sec">
  <div class="nvk-wrap nvk-row2">
    <div class="nvk-media"><?php echo $nk_img('10-rjecnik-hr.jpg','NORIKS Cards gradi rječnik i samopouzdanje'); ?></div>
    <div class="nvk-copy">
      <h2 class="nvk-h2">Gradi rječnik i samopouzdanje</h2>
      <p>Kad dijete riječ izgovori naglas i čuje da zvuči kao na uređaju, dobiva potvrdu koja mu daje sigurnost. Zato se javlja češće — i u vrtiću i pred nepoznatim ljudima.</p>
      <ul class="nvk-check">
        <li>100% engleske riječi i izgovor</li>
        <li>Ponavljanje naglas umjesto pasivnog gledanja</li>
        <li>Napredak koji roditelj čuje već nakon nekoliko tjedana</li>
      </ul>
    </div>
  </div>
</section>

<!-- ============ 6) Kartice koje izdrže dječje ruke ============ -->
<section class="nvk-sec nvk-alt">
  <div class="nvk-wrap nvk-row2">
    <div class="nvk-copy">
      <h2 class="nvk-h2">Kartice koje izdrže dječje ruke</h2>
      <p>Kartice su tiskane na debljem, ojačanom materijalu — ne gužvaju se i ne trgaju pri svakodnevnoj upotrebi. Uređaj je zaobljen, lagan i bez oštrih rubova, pa ga dijete lako drži i nosi sa sobom.</p>
      <ul class="nvk-check">
        <li>Ojačane kartice otporne na trganje</li>
        <li>Lagan uređaj s mekim, zaobljenim rubovima</li>
        <li>Površina koja se lako obriše</li>
      </ul>
    </div>
    <div class="nvk-media"><?php echo $nk_img('05-trpezne.jpg','Čvrste kartice NORIKS Cards'); ?></div>
  </div>
</section>

<!-- ============ 7) Razlika se čuje i vidi ============ -->
<section class="nvk-sec">
  <div class="nvk-wrap nvk-row2">
    <div class="nvk-media"><?php echo $nk_img('11-prije-poslije-hr.jpg','Usporedba: obični uređaji i NORIKS Cards'); ?></div>
    <div class="nvk-copy">
      <h2 class="nvk-h2">Razlika se čuje i vidi</h2>
      <p>Slični uređaji često imaju generički izgovor, manje kategorija i tanke kartice koje brzo stradaju. NORIKS Cards razvijen je upravo na tim točkama.</p>
      <ul class="nvk-check">
        <li>Pravi engleski izgovor umjesto generičkog</li>
        <li>Više kategorija učenja</li>
        <li>Bolja kvaliteta zvuka</li>
        <li>Čvršće kartice otporne na trganje</li>
      </ul>
      <a class="nvk-cta" href="#bundle-selector">Naruči NORIKS Cards</a>
    </div>
  </div>
</section>

<!-- ============ 8) Poslušali smo roditelje ============ -->
<section class="nvk-sec nvk-alt">
  <div class="nvk-wrap nvk-row2">
    <div class="nvk-copy">
      <h2 class="nvk-h2">Poslušali smo roditelje — i isporučili</h2>
      <p>Ono što su roditelji najčešće tražili, ugrađeno je u uređaj:</p>
      <ul class="nvk-check">
        <li>Bolja kvaliteta zvuka</li>
        <li>Kartice otporne na trganje — trajne</li>
        <li>Pametnije kategorije učenja</li>
        <li>100% engleske riječi i izgovor</li>
        <li>Osmišljeno za djecu — jednostavno i sigurno</li>
      </ul>
    </div>
    <div class="nvk-media"><?php echo $nk_img('12-roditelji-hr.jpg','Poslušali smo roditelje — NORIKS Cards'); ?></div>
  </div>
</section>

<!-- ============ 9) Pogledajte na djelu (video) ============ -->
<?php
$nvk_videos = array();
for ( $i = 1; $i <= 3; $i++ ) {   // cetrti video (Did You Know) se ne prikazuje
	if ( file_exists( $nkv_path . 'ugc-' . $i . '.mp4' ) ) {
		$nvk_videos[] = array(
			'src'    => $nkv . 'ugc-' . $i . '.mp4',
			'poster' => file_exists( $nkv_path . 'poster-' . $i . '.jpg' ) ? $nkv . 'poster-' . $i . '.jpg' : '',
		);
	}
}
if ( ! empty( $nvk_videos ) ) : ?>
<section class="nvk-sec">
  <div class="nvk-wrap">
    <h2 class="nvk-h2 nvk-center">Pogledajte Cards na djelu</h2>
    <p class="nvk-sub nvk-center">Kratki isječci pokazuju kako djeca sama koriste uređaj — kliknite za reprodukciju.</p>
    <div class="nvk-vid-grid">
      <?php foreach ( $nvk_videos as $src ) : ?>
        <div class="nvk-vid" data-src="<?php echo esc_url( $src['src'] ); ?>">
          <video class="nvk-vid-el" preload="none" playsinline muted controlslist="nodownload"
                 poster="<?php echo esc_url( $src['poster'] ); ?>"></video>
          <span class="nvk-vid-play" aria-label="Reproduciraj"></span>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<?php endif; ?>

<!-- ============ 10) Učenje bez ekrana ============ -->
<section class="nvk-sec nvk-alt">
  <div class="nvk-wrap nvk-row2">
    <div class="nvk-media"><?php echo $nk_img('06-brez-ekrana.jpg','Dijete uči bez ekrana s NORIKS Cards'); ?></div>
    <div class="nvk-copy">
      <h2 class="nvk-h2">Učenje bez ekrana</h2>
      <p>Sve više roditelja želi smanjiti vrijeme pred ekranom, ali bez da dijete izgubi poticaj za učenje. NORIKS Cards radi upravo tako: nema zaslona, nema obavijesti i nema aplikacija koje odvlače pažnju.</p>
      <p>Ostaje samo ono bitno — slika, riječ i djetetov glas.</p>
    </div>
  </div>
</section>

<!-- ============ 11) Što kažu roditelji ============ -->
<section class="nvk-sec">
  <div class="nvk-wrap">
    <h2 class="nvk-h2 nvk-center">Što kažu roditelji</h2>
    <div class="nvk-rev-grid">
      <?php foreach ( array(
        array( 'Sin je progovorio više u mjesec dana', 'Sin ima tri godine i dugo je govorio jako malo. Uređaj mu je odmah bio zanimljiv jer sam pritišće gumb. U mjesec dana počeo je ponavljati riječi koje prije nije ni pokušavao.', 'Martina K.' ),
        array( 'Konačno nešto bez ekrana', 'Tražila sam igračku koja uči, a nije tablet. Ovo je točno to — kćer sjedi s karticama i ponavlja naglas. Izgovor je jasan, ne mora se pogađati koja je riječ.', 'Ivana P.' ),
        array( 'Kartice su preživjele sve', 'Mislio sam da će kartice stradati u tjedan dana. Nisu — savijaju se, ali se ne trgaju. Uređaj je pao nekoliko puta i i dalje radi kao prvi dan.', 'Damir S.' ),
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
  .nvk-row2 { display: grid; grid-template-columns: 1fr 1fr; gap: 48px; align-items: center; }
  .nvk-h2 { font-size: clamp(24px,3.1vw,34px); font-weight: 800; color: #141414; line-height: 1.2; margin: 0 0 16px; }
  .nvk-center { text-align: center; }
  .nvk-copy p, .nvk-sub { font-size: 15.5px; line-height: 1.65; color: #3a3a3a; margin: 0 0 14px; }
  .nvk-sub { max-width: 760px; margin: 0 auto 22px; }
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

  /* 9) video traka */
  .nvk-vid-grid { display: grid; grid-template-columns: repeat(3,1fr); gap: 18px; max-width: 900px; margin: 0 auto; }
  .nvk-vid { position: relative; border-radius: 14px; overflow: hidden; background: #000; aspect-ratio: 9/16; cursor: pointer; }
  .nvk-vid-el { width: 100%; height: 100%; object-fit: cover; display: block; }
  .nvk-vid-play { position: absolute; inset: 0; margin: auto; width: 54px; height: 54px; border-radius: 50%;
                  background: rgba(255,255,255,.9); pointer-events: none; transition: opacity .15s ease; }
  .nvk-vid-play:after { content: ""; position: absolute; top: 50%; left: 54%; transform: translate(-50%,-50%);
                        border-style: solid; border-width: 10px 0 10px 17px; border-color: transparent transparent transparent #141414; }
  .nvk-vid.is-playing .nvk-vid-play { opacity: 0; }

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
    .nvk-vid-grid { grid-template-columns: 1fr 1fr; gap: 10px; }
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

  /* Videi se ucitaju tek na klik (bez usporavanja stranice). */
  document.querySelectorAll('.nvk-vid').forEach(function(box){
    var v = box.querySelector('video');
    box.addEventListener('click', function(){
      if (!v.getAttribute('src')) { v.setAttribute('src', box.dataset.src); v.setAttribute('controls',''); }
      if (v.paused) {
        document.querySelectorAll('.nvk-vid video').forEach(function(o){ if (o !== v) { o.pause(); o.closest('.nvk-vid').classList.remove('is-playing'); } });
        v.muted = false; v.play(); box.classList.add('is-playing');
      } else {
        v.pause(); box.classList.remove('is-playing');
      }
    });
    v.addEventListener('ended', function(){ box.classList.remove('is-playing'); });
  });
})();
</script>
