<?php
/**
 * NORIKS Ritual | Biljne kapi za svakodnevni ritual — why sekcije (1:1 z originalom). Generirano z postavi.js.
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
$slika = function ( $dat, $alt ) {
    $url = get_template_directory_uri() . '/img/ritual/' . $dat;
    return '<img src="' . esc_url( $url ) . '" alt="' . esc_attr( $alt ) . '" loading="lazy" decoding="async">';
};
?>
<div class="nritual">

  <section class="nritual__sekcija">
    <div class="nritual__v">
      <div class="nritual__tekst">
        <div class="nritual__kicker">Nikad nisi bila ti</div>
        <h2 class="nritual__h2">Nije stvar u disciplini.</h2>
        <p class="nritual__p">Mnoge žene jedu dobro i brinu o sebi, a ipak traže jednostavnu dnevnu rutinu koju će zaista držati. Gotovo nikad nije riječ o nedostatku discipline, nego o rutini koja je previše komplicirana. NORIKS Ritual je svakodnevni ritual u kapima s biljnom formulom.</p>
      </div>
      <div class="nritual__media"><?php echo $slika( 'ritual-01.jpg', 'Nije stvar u disciplini.' ); ?></div>
    </div>
  </section>

  <section class="nritual__sekcija nritual__sekcija--bg">
    <div class="nritual__v">
      <div class="nritual__tekst">
        <div class="nritual__kicker">Zašto kapi</div>
        <h2 class="nritual__h2">Tekuće kapi, svako jutro.</h2>
        <p class="nritual__p">NORIKS Ritual dolazi u tekućem obliku, kao kapi. Za razliku od kapsula, kapi se uzimaju jednostavno i brzo, kao dio jutarnje rutine. Daj ritualu puna tri mjeseca – ključ je dosljednost.</p>
      </div>
      <div class="nritual__media"><?php echo $slika( 'ritual-02.jpg', 'Tekuće kapi, svako jutro.' ); ?></div>
    </div>
  </section>

  <section class="nritual__sekcija">
    <div class="nritual__v">
      <div class="nritual__tekst">
        <div class="nritual__kicker">Tvoj put korak po korak</div>
        <h2 class="nritual__h2">Ključ je dosljednost.</h2>
        <p class="nritual__p">Prvi tjedan: rutina počinje i tijelo se navikava na svakodnevne kapi. Prvi mjesec: kapi postaju navika, kao jutarnja kava. Tri mjeseca: puni ritual od tri mjeseca. Šest mjeseci: uz svakodnevnu upotrebu rutina postaje dio života. Iskustva se razlikuju od osobe do osobe.</p>
      </div>
      <div class="nritual__media"><?php echo $slika( 'ritual-03.jpg', 'Ključ je dosljednost.' ); ?></div>
    </div>
  </section>

  <section class="nritual__sekcija nritual__sekcija--bg">
    <div class="nritual__v">
      <div class="nritual__tekst">
        <div class="nritual__kicker">Što je unutra</div>
        <h2 class="nritual__h2">Korijen make i ashwagandha.</h2>
        <p class="nritual__p">Formula je biljnog podrijetla. Andska maka je tradicionalni adaptogen koji se stoljećima koristi u prehrani. Ashwagandha je biljka iz tradicionalne prakse, poznata kao adaptogen. Obje su osnova formule NORIKS Ritual kapi.</p>
      </div>
      <div class="nritual__media"><?php echo $slika( 'ritual-04.jpg', 'Korijen make i ashwagandha.' ); ?></div>
    </div>
  </section>

  <section class="nritual__sekcija">
    <div class="nritual__v">
      <div class="nritual__tekst">
        <div class="nritual__kicker">Što je još unutra</div>
        <h2 class="nritual__h2">Cikla, piskavica i L-arginin.</h2>
        <p class="nritual__p">Cikla je bogata prirodnim nitratima. Piskavica se tradicionalno koristi u ženskoj rutini njege i prehrani. L-arginin je aminokiselina koja zaokružuje formulu. Pet sastojaka, jedna biljna formula, svako jutro u nekoliko kapi.</p>
      </div>
      <div class="nritual__media"><?php echo $slika( 'ritual-05.jpg', 'Cikla, piskavica i L-arginin.' ); ?></div>
    </div>
  </section>

  <section class="nritual__sekcija nritual__sekcija--bg">
    <div class="nritual__v">
      <div class="nritual__tekst">
        <div class="nritual__kicker">Usporedba</div>
        <h2 class="nritual__h2">NORIKS Ritual u odnosu na kreme, gelove i tablete.</h2>
        <p class="nritual__p">Koncentrirane kapi koje se jednostavno uzimaju – da. Čista biljna formula – da. Jednostavna svakodnevna rutina – da. Napravljeno za žene – da. Kod uobičajenih krema, gelova i tableta to najčešće nije tako.</p>
      </div>
      <div class="nritual__media"><?php echo $slika( 'ritual-06.jpg', 'NORIKS Ritual u odnosu na kreme, gelove i tablete.' ); ?></div>
    </div>
  </section>

  <section class="nritual__sekcija">
    <div class="nritual__v">
      <div class="nritual__tekst">
        <div class="nritual__kicker">Bez rizika</div>
        <h2 class="nritual__h2">Sve za dobiti, ništa za izgubiti.</h2>
        <p class="nritual__p">Isprobaj NORIKS Ritual kapi bez brige: imaš 30 dana za povrat novca. Besplatna dostava iznad 70 € i plaćanje pouzećem. Više od 120.000 zadovoljnih kupaca i prosječna ocjena 4,8.</p>
      </div>
      <div class="nritual__media"><?php echo $slika( 'ritual-07.jpg', 'Sve za dobiti, ništa za izgubiti.' ); ?></div>
    </div>
  </section>
</div>
<style>
.nritual{font-family:inherit;color:#121030}
.nritual__sekcija{padding:46px 0}
.nritual__sekcija--bg{background:#f6f5f2}
.nritual__v{max-width:1180px;margin:0 auto;padding:0 18px;display:grid;grid-template-columns:1fr 1fr;gap:34px;align-items:center}
.nritual__sekcija:nth-child(even) .nritual__v{direction:rtl}
.nritual__sekcija:nth-child(even) .nritual__tekst,.nritual__sekcija:nth-child(even) .nritual__media{direction:ltr}
.nritual__kicker{font-size:12px;letter-spacing:.14em;text-transform:uppercase;color:#8a8781;margin-bottom:8px}
.nritual__h2{font-size:30px;line-height:1.15;margin:0 0 12px}
.nritual__p{font-size:16px;line-height:1.6;margin:0}
.nritual__media img{width:100%;height:auto;display:block;border-radius:12px}
@media(max-width:860px){.nritual__v{grid-template-columns:1fr}.nritual__h2{font-size:24px}}
</style>
