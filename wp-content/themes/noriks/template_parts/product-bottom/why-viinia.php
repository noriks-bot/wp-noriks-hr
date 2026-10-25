<?php
/**
 * NORIKS Viinia – viinijäähdytin
 * Product bottom section — why sekcije
 */
defined('ABSPATH') || exit;

$nf = get_template_directory_uri() . '/img/viinia/';
?>
<!-- DEBUG: is_viinia_page=<?php echo function_exists('noriks_is_type') ? (noriks_is_type('viinia') ? 'TRUE' : 'FALSE') : 'FUNC_NOT_EXISTS'; ?> -->

<style>
.nss-viinia {
  --viinia-pr: #7a5aa3;
  --viinia-bg: #f7f3fb;
  --br: 16px;
  font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, sans-serif;
}
.nss-viinia__hero {
  background: var(--viinia-bg);
  padding: 60px 0;
}
.nss-viinia__wrap {
  max-width: 1240px;
  margin: 0 auto;
  padding: 0 24px;
}
.nss-viinia__section {
  padding: 48px 0;
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 48px;
  align-items: center;
}
.nss-viinia__section--rev {
  direction: rtl;
}
.nss-viinia__section--rev > * {
  direction: ltr;
}
.nss-viinia__section--bg {
  background: var(--viinia-bg);
}
.nss-viinia__media {
  aspect-ratio: 4/5;
  object-fit: cover;
  border-radius: var(--br);
  box-shadow: 0 8px 24px rgba(0,0,0,0.08);
  width: 100%;
}
.nss-viinia__kicker {
  color: var(--viinia-pr);
  font-weight: 600;
  font-size: 14px;
  text-transform: uppercase;
  letter-spacing: 0.8px;
  margin-bottom: 12px;
}
.nss-viinia__h2 {
  font-size: 32px;
  font-weight: 700;
  line-height: 1.2;
  margin-bottom: 20px;
  color: #000;
}
.nss-viinia__h2 em {
  font-style: italic;
  color: var(--viinia-pr);
}
.nss-viinia__p {
  font-size: 16px;
  line-height: 1.7;
  color: #333;
  margin-bottom: 16px;
}
.nss-viinia__strong {
  font-weight: 700;
  color: #000;
  display: block;
  margin-top: 20px;
  font-size: 17px;
}
.nss-viinia__final {
  background: var(--viinia-bg);
  padding: 60px 0;
  text-align: center;
}
.nss-viinia__final h2 {
  font-size: 36px;
  font-weight: 700;
  margin-bottom: 24px;
  color: #000;
}
.nss-viinia__final-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
  gap: 24px;
  margin-top: 40px;
}
.nss-viinia__final-item {
  padding: 24px;
}
.nss-viinia__final-item strong {
  display: block;
  font-size: 18px;
  color: var(--viinia-pr);
  margin-bottom: 8px;
}
.nss-viinia__final-item p {
  color: #555;
  font-size: 15px;
  line-height: 1.6;
}
@media (max-width: 768px) {
  .nss-viinia__section {
    grid-template-columns: 1fr;
    gap: 32px;
    padding: 32px 0;
  }
  .nss-viinia__section--rev {
    direction: ltr;
  }
  .nss-viinia__h2 {
    font-size: 26px;
  }
  .nss-viinia__hero, .nss-viinia__final {
    padding: 40px 0;
  }
}
</style>

<div class="nss-viinia">

<!-- Sekcija 1: Savršeno hlađenje bez kanti s ledom -->
<section class="nss-viinia__section nss-viinia__section--bg">
  <div class="nss-viinia__wrap">
    <div>
      <img src="<?php echo esc_url($nf . 'noriks-viinia-1.webp'); ?>" alt="NORIKS Viinia viinijäähdytin u čaši vina" class="nss-viinia__media">
    </div>
    <div>
      <div class="nss-viinia__kicker">Bez odvraćanja pažnje</div>
      <h2 class="nss-viinia__h2">Savršeno hlađenje bez <em>kanti s ledom</em></h2>
      <p class="nss-viinia__p">
        Bila sam skeptična na početku, ali štapić za hlađenje vina premašio je sva moja očekivanja.
        Čak i vrućim ljetnim danima vino ostaje savršeno hladno satima.
      </p>
      <p class="nss-viinia__p">
        Više ne morate nositi velike kante s ledom na terasu ili piknik.
        Jednostavno stavite Viinia štapić u zamrzivač, a kad dođe vrijeme za čašu vina, on je spreman.
      </p>
      <strong class="nss-viinia__strong">Vaše vino ostaje hladne temperature bez kanti, bez nereda.</strong>
    </div>
  </div>
</section>

<!-- Sekcija 2: Savršeno za ljetna bijela vina -->
<section class="nss-viinia__section">
  <div class="nss-viinia__wrap">
    <div>
      <img src="<?php echo esc_url($nf . 'noriks-viinia-2.webp'); ?>" alt="Bijelo vino s NORIKS Viinia" class="nss-viinia__media">
    </div>
    <div>
      <div class="nss-viinia__kicker">Idealna temperatura</div>
      <h2 class="nss-viinia__h2">Savršeno za <em>ljetna bijela vina</em></h2>
      <p class="nss-viinia__p">
        Bila sam na početku malo skeptična, ali ovaj hladnjak za vino premašio je sva očekivanja.
        Održava vino hladnim bez razrjeđivanja, a još i izgleda elegantno u boci.
      </p>
      <p class="nss-viinia__p">
        Bijela vina zahtijevaju točnu temperaturu – previše toplo i gube svježinu, previše hladno i gube aromu.
        Viinia štapić omogućuje vam da održavate tu ravnotežu sate nakon što otvorite bocu.
      </p>
      <strong class="nss-viinia__strong">Absolutna kupnja za sve ljubitelje vina.</strong>
    </div>
  </div>
</section>

<!-- Sekcija 3: Kvalitetan, praktičan i vrijedan svakog eura -->
<section class="nss-viinia__section nss-viinia__section--rev nss-viinia__section--bg">
  <div class="nss-viinia__wrap">
    <div>
      <img src="<?php echo esc_url($nf . 'noriks-viinia-3.webp'); ?>" alt="NORIKS Viinia u rukama" class="nss-viinia__media">
    </div>
    <div>
      <div class="nss-viinia__kicker">Траjan kvalitet</div>
      <h2 class="nss-viinia__h2">Kvalitetan, praktičan i <em>vrijedan svakog eura</em></h2>
      <p class="nss-viinia__p">
        Kakav genijalan izum! I kvaliteta materijala i praktična funkcija čine ovaj štapić za hlađenje vina vrijednim svakog eura.
        Već sam kupila nekoliko za poklon – jednostavno je savršen!
      </p>
      <p class="nss-viinia__p">
        Izrađen od nerđajućeg čelika i neoprena, Viinia štapić izdržava godine upotrebe.
        Ne treba baterije, ne troši struju – samo ga držite u zamrzivaču i spreman je za korištenje.
      </p>
      <strong class="nss-viinia__strong">Investicija koja se isplati svakim korištenjem.</strong>
    </div>
  </div>
</section>

<!-- Sekcija 4: Praktično i jednostavno za korištenje -->
<section class="nss-viinia__section">
  <div class="nss-viinia__wrap">
    <div>
      <img src="<?php echo esc_url($nf . 'noriks-viinia-4.webp'); ?>" alt="Jednostavno korištenje NORIKS Viinia" class="nss-viinia__media">
    </div>
    <div>
      <div class="nss-viinia__kicker">Bez pripreme</div>
      <h2 class="nss-viinia__h2">Praktično i <em>jednostavno za korištenje</em></h2>
      <p class="nss-viinia__p">
        Koristila sam ovaj hladnjak za vino nekoliko puta i bio je stvarno zgodan.
        Čuvam ga u zamrzivaču, a kad dođu gosti ili poželim čašu, mogu ga odmah upotrijebiti.
      </p>
      <p class="nss-viinia__p">
        Vino ostaje ugodno hladno bez potrebe da se boca hladi u hladnjaku unaprijed.
        Bez planiranja, bez čekanja – jednostavno izvadite štapić, ubacite u bocu i uživajte.
      </p>
      <strong class="nss-viinia__strong">Apsolutno preporučujem ako volite uživati u vinu bez dodatnog posla.</strong>
    </div>
  </div>
</section>

<!-- Sekcija 5: Ovo je brzo postalo dio svake vinarske večeri -->
<section class="nss-viinia__section nss-viinia__section--rev nss-viinia__section--bg">
  <div class="nss-viinia__wrap">
    <div>
      <img src="<?php echo esc_url($nf . 'noriks-viinia-5.webp'); ?>" alt="Večernja čaša vina s NORIKS Viinia" class="nss-viinia__media">
    </div>
    <div>
      <div class="nss-viinia__kicker">Nezamjenjivo</div>
      <h2 class="nss-viinia__h2">Ovo je brzo postalo dio <em>svake vinarske večeri</em></h2>
      <p class="nss-viinia__p">
        Nisam ni razmišljala da mi treba takav proizvod, ali sada se pitam kako sam živjela bez njega.
        Štapić za hlađenje vina jednostavan je za korištenje i radi upravo kao što obećava.
      </p>
      <p class="nss-viinia__p">
        Plus je i to što bocu ne treba otvoriti unaprijed – štapić ide direktno unutra i vino ostaje savršeno hladno.
        Bilo da pijete na terasi ili u dnevnoj sobi, iskustvo je uvijek jednako ugodno.
      </p>
      <strong class="nss-viinia__strong">Izvanredna kupnja!</strong>
    </div>
  </div>
</section>

<!-- Sekcija 6: Vino ostaje hladno i izgleda luksuzno -->
<section class="nss-viinia__section">
  <div class="nss-viinia__wrap">
    <div>
      <img src="<?php echo esc_url($nf . 'noriks-viinia-6.webp'); ?>" alt="Elegantni izgled NORIKS Viinia u boci vina" class="nss-viinia__media">
    </div>
    <div>
      <div class="nss-viinia__kicker">Elegancija i funkcija</div>
      <h2 class="nss-viinia__h2">Vino ostaje hladno i <em>izgleda luksuzno</em></h2>
      <p class="nss-viinia__p">
        Kao prava ljubiteljica vina, ovaj štapić za hlađenje napravio je veliku razliku za mene.
        Održava vino hladnim dugo vremena i izgleda stvarno elegantno.
      </p>
      <p class="nss-viinia__p">
        Ne samo da funkcionira savršeno, nego i dodaje dozu stila vašem vinarskom iskustvu.
        Kad ga izvučete iz zamrzivača i stavite u bocu, gosti će odmah primjetiti – i pitati gdje mogu nabaviti svoj.
      </p>
      <strong class="nss-viinia__strong">Apsolutno ga preporučujem svima koji žele bolje vinarsko iskustvo.</strong>
    </div>
  </div>
</section>

<!-- NORIKS pogoji -->
<section class="nss-viinia__final">
  <div class="nss-viinia__wrap">
    <h2>Kupnja bez brige</h2>
    <div class="nss-viinia__final-grid">
      <div class="nss-viinia__final-item">
        <strong>30 dana za povrat novca</strong>
        <p>Ako niste zadovoljni, vratite proizvod bez pitanja</p>
      </div>
      <div class="nss-viinia__final-item">
        <strong>Besplatna dostava iznad 70 €</strong>
        <p>Brza i pouzdana dostava diljem Hrvatske</p>
      </div>
      <div class="nss-viinia__final-item">
        <strong>Plaćanje pouzećem</strong>
        <p>Platite tek kad pregledate robu</p>
      </div>
      <div class="nss-viinia__final-item">
        <strong>Preko 120.000 kupaca</strong>
        <p>Ocjena 4,8 iz 1.081 recenzija</p>
      </div>
    </div>
  </div>
</section>

</div>
