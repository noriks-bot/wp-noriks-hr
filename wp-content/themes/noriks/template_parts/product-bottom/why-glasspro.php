<?php
/**
 * product-bottom: NORIKS GlassPro — krpa od mikrovlakana (orto-glasspro).
 * Original: glasspro.com/products/panno-glasspro (IT).
 * Sekcije 1:1 z originalom, isti vrstni red: kupci -> problem (mrlje se vrnejo) -> tri pokreta ->
 * po cem se razlikuje (600 g/m2) -> 3x gusca od krpe iz trgovine -> usporedba -> mnenja -> NORIKS pogoji
 * (namesto 100-dnevne garancije originala).
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$ngv      = get_template_directory_uri() . '/img/glasspro/';
$ngv_path = get_template_directory() . '/img/glasspro/';
$ngv_img  = function( $file, $alt ) use ( $ngv, $ngv_path ) {
  if ( ! $file || ! file_exists( $ngv_path . $file ) ) { return ''; }
  return '<img src="' . esc_url( $ngv . $file ) . '" alt="' . esc_attr( $alt ) . '" loading="eager" decoding="async">';
};

$ngv_usporedba = array(
  'Profesionalna gustoća 600 g/m²',
  'Uklanja mrlje bez sredstava za čišćenje',
  'Upija do 1 litre vode',
  'Jednostavna za korištenje',
  'Zadržava upijanje i nakon 300+ pranja',
);

$ngv_mnenja = array(
  array( 'noriks-glasspro-kupac-1.jpg', 'Ivana D.', 'Bila sam prilično skeptična… ali ove krpe upijaju apsolutno sve u trenu. Štedim puno vremena, a moja ogledala nikad nisu bila ovako čista!' ),
  array( 'noriks-glasspro-kupac-2.jpg', 'Petra K.', 'Samo jedan potez po stijenci tuša i već je bila suha. Nisam morala ponovno prelaziti. Nevjerojatno.' ),
  array( 'noriks-glasspro-kupac-3.jpg', 'Marina H.', 'Vrlo izdržljiva, nema znakova trošenja ni nakon više pranja. I dalje upija kao prvi dan.' ),
);
?>
<div class="ngv">

  <!-- 1) KUPCI -->
  <section class="ngv-s ngv-s--bg">
    <div class="ngv-v">
      <div class="ngv-media"><?php echo $ngv_img( 'noriks-glasspro-hero.jpg', 'NORIKS GlassPro krpa u stvarnoj kupaonici' ); ?></div>
      <div class="ngv-tekst">
        <div class="ngv-kicker">Pravi ljudi, prave kupaonice</div>
        <h2 class="ngv-h2">Kamenac, mrlje, bijeli veo. <em>Dovoljna je jedna krpa.</em></h2>
        <p class="ngv-p">Od stvarnih ljudi, u stvarnim kuhinjama i kupaonicama. Pogledajte što kažu nakon mjesec dana s NORIKS GlassPro krpom.</p>
        <p class="ngv-p">Stakla bez mrlja, čak i na jakom suncu. Krpa upija do 1 litre vode, a čisti bez spreja i bez kemijskih sredstava — samo voda i vlakno.</p>
        <p class="ngv-p">Muka s kamencem? Gotova. Gusta vlakna od 600 g/m² hvataju prljavštinu, a krpa se pere u perilici više od 300 puta.</p>
        <p class="ngv-p">„Prije narudžbe bila sam skeptična, jer kod reklama na društvenim mrežama nikad ne znaš. Ali rekla sam si: zašto ne probati? Moram reći da su jednostavno čarobne — upijaju apsolutno sve u trenu. Štedim puno vremena i olakšavaju mi život. Preporučujem!“ <span style="color:#666">— Gordana D.</span></p>
        <p class="ngv-zak">Ocjena 4,8 od 120.000 NORIKS kupaca.</p>
      </div>
    </div>
  </section>

  <!-- 2) PROBLEM -->
  <section class="ngv-s">
    <div class="ngv-v ngv-v--rev">
      <div class="ngv-media"><?php echo $ngv_img( 'noriks-glasspro-problem.gif', 'Mrlje od vode na slavini nakon brisanja' ); ?></div>
      <div class="ngv-tekst">
        <div class="ngv-kicker">Zašto se mrlje vraćaju</div>
        <h2 class="ngv-h2">Obrišete. Deset minuta kasnije <em>mrlje su se vratile.</em></h2>
        <p class="ngv-p">Bijeli veo na miješalici, mrlje na stijenci tuša, kolutovi na inoxu. To nije prljavština: <strong>to je voda koja se osušila na mjestu.</strong></p>
        <p class="ngv-p">Obična krpa zasiti se u tri poteza, počne razmazivati umjesto upijati, a kamenac se taloži točno tamo gdje ste upravo očistili.</p>
        <p class="ngv-p">NORIKS GlassPro upija do 1 litre vode prije nego što se zasiti. Površina je suha već nakon prvog poteza, ne ostaje ništa za brisanje, pa <strong>nema ničega što bi ostavilo mrlju.</strong></p>
        <p class="ngv-zak">Suho nakon prvog poteza — bez mrlja.</p>
      </div>
    </div>
  </section>

  <!-- 3) TRI POKRETA -->
  <section class="ngv-s ngv-s--bg">
    <div class="ngv-v">
      <div class="ngv-media"><?php echo $ngv_img( 'noriks-glasspro-tri-pokreta.gif', 'Navlažite, iscijedite i obrišite' ); ?></div>
      <div class="ngv-tekst">
        <div class="ngv-kicker">Kako se koristi</div>
        <h2 class="ngv-h2">Tri pokreta. <em>Bez sredstava.</em> To je sve.</h2>
        <p class="ngv-p">Navlažite krpu. Iscijedite je. I obrišite. <strong>Nema četvrtog koraka</strong>, nema spreja prije, nema ispiranja poslije. Voda i vlakno obave posao.</p>
        <p class="ngv-p">Gušća strana hvata kamenac i prljavštinu. Glatka strana polira i daje sjaj. Okrenete krpu, prijeđete jednom, i površina je suha, čista, bez mrlja.</p>
        <p class="ngv-p">Ogledalo, staklo, miješalica, pločice: <strong>isti pokret posvuda.</strong></p>
        <p class="ngv-p">Čisti stakla, ogledala, pločice i sjajne površine <strong>bez mrlja, i bez deterdženata</strong> — bez spreja protiv kamenca i bez kuhinjskog papira za sušenje.</p>
        <p class="ngv-zak">Navlažite, iscijedite, obrišite.</p>
      </div>
    </div>
  </section>

  <!-- 4) PO CEMU SE RAZLIKUJE -->
  <section class="ngv-s">
    <div class="ngv-v ngv-v--rev">
      <div class="ngv-media"><?php echo $ngv_img( 'noriks-glasspro-razlika.gif', 'NORIKS GlassPro upija vodu u jednom potezu' ); ?></div>
      <div class="ngv-tekst">
        <div class="ngv-kicker">Gustoća 600 g/m²</div>
        <h2 class="ngv-h2">Po čemu se NORIKS GlassPro <em>razlikuje</em></h2>
        <p class="ngv-p"><span class="ngv-tick" aria-hidden="true">✓</span> <strong>Kraj kamenca, kraj muke.</strong> Bijeli veo na staklima, kolutovi na inoxu, mrlje na ogledalu u kupaonici. S NORIKS GlassPro krpom <strong>dovoljan je jedan potez</strong>: površina je čista i takva ostaje dok se suši.</p>
        <p class="ngv-p"><span class="ngv-tick" aria-hidden="true">✓</span> <strong>Upija do 1 litre vode i zadržava je.</strong> Tamo gdje se klasična mikrovlakna zasite i počnu razmazivati, NORIKS GlassPro <strong>nastavlja upijati</strong>. Prijeđete jednom, površina je suha. Nema drugog poteza ni mrlje koja se vrati dok se suši.</p>
        <p class="ngv-p"><span class="ngv-tick" aria-hidden="true">✓</span> <strong>Napravljena da traje godinama.</strong> Pere se u perilici i zadržava moć upijanja pranje za pranjem. Jedna kupnja koja zamjenjuje desetke jednokratnih proizvoda.</p>
        <p class="ngv-p">Bijeli veo na staklima, kolutovi na inoxu, mrlje na ogledalu u kupaonici: s NORIKS GlassPro dovoljan je <strong>jedan potez</strong> — površina je čista i takva ostaje dok se suši.</p>
        <p class="ngv-zak">Gusta vlakna od 600 g/m² — jedan potez je dovoljan.</p>
      </div>
    </div>
  </section>

  <!-- 5) TRI PUTA GUSCA -->
  <section class="ngv-s ngv-s--bg">
    <div class="ngv-v">
      <div class="ngv-media"><?php echo $ngv_img( 'noriks-glasspro-gustoca.gif', 'NORIKS GlassPro je tri puta gušća od obične krpe' ); ?></div>
      <div class="ngv-tekst">
        <div class="ngv-kicker">Isplati se</div>
        <h2 class="ngv-h2">Skuplja od krpe iz trgovine. <em>Ali i tri puta gušća.</em></h2>
        <p class="ngv-p">Tri pakiranja mikrovlakana, sprej protiv kamenca, rolice kuhinjskog papira. I mrlje koje se svejedno vrate deset minuta kasnije. Nije skupa cijena krpe, <strong>skupo je sve što ponovno kupujete da popravite čišćenje.</strong></p>
        <p class="ngv-p"><strong>NORIKS GlassPro kupujete samo jednom.</strong> I prestajete kupovati sve ostalo.</p>
        <p class="ngv-p">Napravljena je da traje godinama: pere se u perilici i zadržava moć upijanja pranje za pranjem. Jednokratna kupnja koja zamjenjuje desetke potrošnih proizvoda za jednokratnu upotrebu.</p>
        <p class="ngv-p">Isprobajte je na površini koja vas najviše živcira. Razliku ćete vidjeti odmah.</p>
        <p class="ngv-zak">Jedna krpa umjesto sprejeva, papira i hrpe mikrovlakana.</p>
      </div>
    </div>
  </section>

  <!-- 6) USPOREDBA -->
  <section class="ngv-s">
    <div class="ngv-v ngv-v--rev">
      <div class="ngv-media"><?php echo $ngv_img( 'noriks-glasspro-packshot.webp', 'NORIKS GlassPro krpa od mikrovlakana' ); ?></div>
      <div class="ngv-tekst">
        <div class="ngv-kicker">Usporedba</div>
        <h2 class="ngv-h2">Zašto NORIKS GlassPro, a ne <em>mikrovlakna iz trgovine?</em></h2>
        <p class="ngv-p">NORIKS GlassPro ultra upijajuća krpa napravljena je posebno s ovim prednostima:</p>
        <table class="ngv-tab">
          <thead><tr><th scope="col"></th><th scope="col">NORIKS GlassPro</th><th scope="col">Ostale</th></tr></thead>
          <tbody>
            <?php foreach ( $ngv_usporedba as $ngv_r ) : ?>
            <tr><th scope="row"><?php echo esc_html( $ngv_r ); ?></th><td class="ngv-da">✓</td><td class="ngv-ne">✗</td></tr>
            <?php endforeach; ?>
          </tbody>
        </table>
        <p class="ngv-p ngv-p--mala">Dimenzije 40 × 40 cm. Materijal: mikrovlakna i pamuk. Za stakla, ogledala, pločice, slavine i sve sjajne površine. Pranje u perilici do 60 °C, bez omekšivača i bez sušilice.</p>
        <p class="ngv-p">Gdje se obična mikrovlakna nakon nekoliko poteza zasite i počnu razmazivati vodu, NORIKS GlassPro <strong>i dalje upija — do 1 litre vode</strong> i zadržava je. Prijeđete jednom i površina je suha: bez drugog prolaza i bez mrlja koje se ponovno pojave dok se suši.</p>
        <p class="ngv-p">Vlakna od 600 g/m² ostaju učinkovita i nakon <strong>više od 300 pranja</strong>. Da krpa sačuva sva svojstva upijanja, perite je u perilici do 60 °C, bez omekšivača i bez sušilice.</p>
        <p class="ngv-zak">Jedna krpa za stakla, ogledala, pločice i slavine — bez deterdženata.</p>
      </div>
    </div>
  </section>

  <!-- 7) MNENJA -->
  <section class="ngv-s ngv-s--bg">
    <div class="ngv-wrap">
      <div class="ngv-kicker ngv-c">Mišljenja</div>
      <h2 class="ngv-h2 ngv-c">Što kažu <em>naši kupci</em></h2>
      <div class="ngv-mnenja">
        <?php foreach ( $ngv_mnenja as $ngv_m ) : ?>
        <figure class="ngv-mn">
          <div class="ngv-media"><?php echo $ngv_img( $ngv_m[0], 'NORIKS GlassPro — iskustvo kupca ' . $ngv_m[1] ); ?></div>
          <figcaption><strong><?php echo esc_html( $ngv_m[1] ); ?></strong><span>★★★★★</span><p><?php echo esc_html( $ngv_m[2] ); ?></p></figcaption>
        </figure>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- 8) NORIKS POGOJI -->
  <section class="ngv-s">
    <div class="ngv-v ngv-v--rev">
      <div class="ngv-media ngv-media--pecat">
        <div class="ngv-pecat" role="img" aria-label="30 dana za povrat">
          <div class="ngv-pecat-in">
            <span class="ngv-pecat-top">Pravo na povrat</span>
            <span class="ngv-pecat-num">30</span>
            <span class="ngv-pecat-dani">DANA</span>
            <span class="ngv-pecat-bot">Bez rizika</span>
          </div>
        </div>
      </div>
      <div class="ngv-tekst">
      <div class="ngv-kicker">Kupujte bez brige</div>
      <h2 class="ngv-h2">Uz NORIKS kupujete <em>bez rizika</em></h2>
      <p class="ngv-p">Isprobajte NORIKS GlassPro na površini koja vas najviše živcira. Ako niste zadovoljni, imate 30 dana za povrat novca — bez kompliciranja.</p>
      <div class="ngv-pogoji ngv-pogoji--ob">
        <div class="ngv-pog"><strong>30 dana</strong><span>za povrat novca</span></div>
        <div class="ngv-pog"><strong>Besplatna dostava</strong><span>iznad 70 €</span></div>
        <div class="ngv-pog"><strong>Plaćanje pouzećem</strong><span>platite kad paket stigne</span></div>
        <div class="ngv-pog"><strong>120.000 kupaca</strong><span>prosječna ocjena 4,8</span></div>
      </div>
    </div>
  </div>
  </section>
</div>

<style>
/* NORIKS GlassPro — krpa od mikrovlakana */
.ngv{color:#1c1c1c;font-family:inherit}
.ngv-s{padding:56px 0;background:#fff}
.ngv-s--bg{background:#f4f3ef}
.ngv-wrap,.ngv-v{max-width:1240px;margin:0 auto;padding:0 24px;box-sizing:border-box}
.ngv-v{display:grid;grid-template-columns:1fr 1fr;gap:48px;align-items:center}
.ngv-v--rev .ngv-media{order:2}
.ngv-v--rev .ngv-tekst{order:1}
.ngv-media{border-radius:16px;overflow:hidden;box-shadow:0 10px 30px rgba(0,0,0,.10);aspect-ratio:4/5;background:#eee}
.ngv-media img{width:100%;height:100%;object-fit:cover;display:block}
.ngv-kicker{font-size:13px;letter-spacing:1px;text-transform:uppercase;color:#555;margin:0 0 8px;font-weight:700}
.ngv-h2{font-size:clamp(24px,3vw,34px);font-weight:800;line-height:1.2;margin:0 0 18px;color:#1c1c1c}
.ngv-h2 em{font-style:italic}
.ngv-p{font-size:16px;line-height:1.65;margin:0 0 14px;color:#333}
.ngv-p--mala{font-size:14px;color:#666;margin-top:16px}
.ngv-p--sredina{max-width:720px;margin-left:auto;margin-right:auto}
.ngv-zak{font-size:16px;font-weight:800;line-height:1.5;color:#1c1c1c;margin:6px 0 0}
.ngv-tick{display:inline-block;width:22px;height:22px;line-height:22px;text-align:center;border-radius:50%;background:#1c1c1c;color:#fff;font-size:13px;margin-right:4px}
.ngv-c{text-align:center}
.ngv-tab{width:100%;border-collapse:collapse;margin:8px 0 0;font-size:15px}
.ngv-tab th,.ngv-tab td{padding:11px 10px;border-bottom:1px solid #e6e3dc;text-align:center}
.ngv-tab th[scope="row"]{text-align:left;font-weight:600}
.ngv-tab thead th{font-weight:800;background:#f4f3ef}
.ngv-da{color:#2e7d32;font-weight:800;font-size:18px}
.ngv-ne{color:#b23b3b;font-weight:800;font-size:18px}
.ngv-mnenja{display:grid;grid-template-columns:repeat(3,1fr);gap:24px;margin-top:28px}
.ngv-mn{margin:0;background:#fff;border-radius:16px;overflow:hidden;box-shadow:0 6px 20px rgba(0,0,0,.06)}
.ngv-mn .ngv-media{border-radius:0;box-shadow:none}
.ngv-mn figcaption{padding:16px 18px 20px}
.ngv-mn figcaption strong{display:block;font-size:16px}
.ngv-mn figcaption span{color:#f5a623;font-size:14px}
.ngv-mn figcaption p{font-size:15px;line-height:1.6;margin:8px 0 0;color:#333}
.ngv-pogoji{display:grid;grid-template-columns:repeat(4,1fr);gap:16px;margin-top:24px}
.ngv-pog{background:#f4f3ef;border-radius:14px;padding:18px 12px}
.ngv-pog strong{display:block;font-size:17px;font-weight:800}
.ngv-pog span{font-size:14px;color:#555}
@media (max-width:768px){
  .ngv-s{padding:40px 0}
  .ngv-v{grid-template-columns:1fr;gap:22px}
  .ngv-v--rev .ngv-media,.ngv-media{order:0}
  .ngv-v--rev .ngv-tekst,.ngv-tekst{order:1}
  .ngv-mnenja{grid-template-columns:1fr}
  .ngv-pogoji{grid-template-columns:1fr 1fr}
  .ngv-tab{font-size:13px}
  .ngv-tab th,.ngv-tab td{padding:9px 6px}
}
/* zadnja sekcija: pecat 30 dana kot vizual ob NORIKS pogojih */
.ngv-media--pecat{display:flex;align-items:center;justify-content:center;background:#f4f3ef}
.ngv-s--bg .ngv-media--pecat{background:#fff}
.ngv-pogoji--ob{grid-template-columns:1fr 1fr;gap:14px;margin-top:18px}
.ngv-pecat{width:280px;height:280px;border-radius:50%;display:flex;align-items:center;justify-content:center;text-align:center;background:radial-gradient(circle at 35% 30%,#4a4a4a 0%,#2a2a2a 55%,#111 100%);box-shadow:0 0 0 10px #e9e6df,0 0 0 14px #2a2a2a,0 18px 40px rgba(0,0,0,.16)}
.ngv-pecat-in{width:206px;height:206px;border-radius:50%;background:#fff;color:#1c1c1c;display:flex;flex-direction:column;align-items:center;justify-content:center}
.ngv-pecat-top,.ngv-pecat-bot{font-size:11px;font-weight:700;letter-spacing:.12em;text-transform:uppercase;max-width:150px;line-height:1.3;color:#666}
.ngv-pecat-num{font-size:78px;font-weight:800;line-height:1;margin:4px 0 0;color:#1c1c1c}
.ngv-pecat-dani{font-size:22px;font-weight:700;letter-spacing:.12em;margin:0 0 6px}
@media (max-width:768px){
  .ngv-pecat{width:230px;height:230px}
  .ngv-pecat-in{width:170px;height:170px}
  .ngv-pecat-num{font-size:64px}
  .ngv-pecat-top,.ngv-pecat-bot{font-size:10px;max-width:118px}
}
</style>
