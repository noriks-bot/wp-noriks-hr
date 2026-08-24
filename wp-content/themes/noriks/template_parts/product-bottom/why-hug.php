<?php
/**
 * product-bottom: NORIKS Hugger — nosivi termofor (orto-hug).
 *
 * Sve sekcije su LIJEVO/DESNO (slika + tekst), po referentnoj stranici
 * (huggercomfort.com / Hot Hugger). Nikad slika na sredini.
 * Recenzije i FAQ renderira zajednicki reviews.php.
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$hg      = get_template_directory_uri() . '/img/hug/';
$hg_path = get_template_directory() . '/img/hug/';

$hg_img = function( $file, $alt ) use ( $hg, $hg_path ) {
  if ( file_exists( $hg_path . $file ) ) {
    return '<img src="' . esc_url( $hg . $file ) . '" alt="' . esc_attr( $alt ) . '" loading="lazy">';
  }
  return '<div class="nhg-ph" role="img" aria-label="' . esc_attr( $alt ) . '"><span>' . esc_html( $alt ) . '</span></div>';
};
?>

<!-- 1) Toplina koja ostaje na mjestu — slika lijevo -->
<section class="nhg-sec nhg-warm">
  <div class="nhg-wrap nhg-row">
    <div class="nhg-media"><?php echo $hg_img( 'hug-05-na-tijelu.jpg', 'Nosivi termofor na trbuhu' ); ?></div>
    <div class="nhg-copy">
      <p class="nhg-eyebrow">Zagrljaj koji ide s vama</p>
      <h2 class="nhg-h2">Toplina koja ostaje točno gdje treba</h2>
      <p>Klasičan termofor sklizne čim ustanete, a grijaći jastuk vas veže za utičnicu. NORIKS Hugger se pričvrsti oko struka i ostaje na mjestu — na trbuhu, križima ili leđima.</p>
      <p class="nhg-strong">Ruke ostaju slobodne: možete kuhati, raditi za stolom, gledati seriju ili zaspati s njim.</p>
      <ul class="nhg-ticks">
        <li>Prirodno i trenutno olakšanje kod grčeva i bolova</li>
        <li>Bez kabela, baterije i utičnice</li>
        <li>Opseg struka 70 – 93 cm, s produžetkom do 110 cm</li>
      </ul>
    </div>
  </div>
</section>

<!-- 2) Kako je napravljen — slika desno -->
<section class="nhg-sec nhg-white">
  <div class="nhg-wrap nhg-row">
    <div class="nhg-copy">
      <h2 class="nhg-h2">Kako se koristi</h2>
      <ol class="nhg-steps">
        <li><span>1</span><div><strong>Napunite termofor.</strong> Vrućom, ali ne kipućom vodom, do otprilike dvije trećine i istisnite zrak prije zatvaranja.</div></li>
        <li><span>2</span><div><strong>Umetnite ga u navlaku.</strong> Boca ide u džep na stražnjoj strani — navlaka je između boce i kože.</div></li>
        <li><span>3</span><div><strong>Zategnite krakove na čičak.</strong> Namjestite oko struka do ugodne napetosti i nastavite s onim što ste radili.</div></li>
      </ol>
      <p class="nhg-note">Prednja strana je mekano krzno, stražnja ima džep za bocu i čičak na krakovima.</p>
    </div>
    <div class="nhg-media"><?php echo $hg_img( 'hug-09-strane.jpg', 'Prednja i stražnja strana navlake' ); ?></div>
  </div>
</section>

<!-- 3) Dvostruka izolacija — slika lijevo -->
<section class="nhg-sec nhg-warm">
  <div class="nhg-wrap nhg-row">
    <div class="nhg-media"><?php echo $hg_img( 'hug-01-sofa.jpg', 'Nosivi termofor na kauču' ); ?></div>
    <div class="nhg-copy">
      <h2 class="nhg-h2">Zašto grije duže od običnog termofora</h2>
      <p>Navlaka ima <strong>dvostruki sloj izolacije</strong>, pa temperatura ostaje ugodna satima — bez skoka od prevruće do mlake nakon deset minuta.</p>
      <p class="nhg-strong">Krakovi drže bocu uz tijelo, pa se toplina zadržava između navlake i vas, a ne bježi u sobu.</p>
    </div>
  </div>
</section>

<!-- 4) Prednosti — slika desno -->
<section class="nhg-sec nhg-white">
  <div class="nhg-wrap nhg-row">
    <div class="nhg-copy">
      <h2 class="nhg-h2">Kad se najčešće poseže za njim</h2>
      <p>Prvi dan ciklusa, dok grčevi ne popuste. Poslije duge vožnje ili smjene na nogama, kad se križa jave. U prohladnom uredu, gdje grijanje nikad nije taman.</p>
      <p>Za razliku od grijaćeg jastuka ne veže vas za utičnicu, a za razliku od gel-obloga ne treba mikrovalna — dovoljan je čajnik.</p>
      <p class="nhg-strong">Zato često završi kao poklon: dolazi u urednom pakiranju i ne treba mu ništa dodatno kupovati.</p>
    </div>
    <div class="nhg-media"><?php echo $hg_img( 'hug-07-prednosti.jpg', 'Prednosti nosivog termofora' ); ?></div>
  </div>
</section>

<!-- 5) Boca i sigurnost — slika lijevo -->
<section class="nhg-sec nhg-warm">
  <div class="nhg-wrap nhg-row">
    <div class="nhg-media"><?php echo $hg_img( 'hug-08-boce.jpg', 'Termofor od prirodne gume' ); ?></div>
    <div class="nhg-copy">
      <h2 class="nhg-h2">Boca koja dolazi u kompletu</h2>
      <p>U pakiranju je termofor od <strong>500 ml</strong> izrađen od <strong>100 % prirodne gume</strong>, bez lateksa — ne trebate ništa dokupljivati.</p>
      <ul class="nhg-ticks">
        <li>Punite vrućom, ali ne kipućom vodom</li>
        <li>Istisnite zrak i dobro zavrnite čep prije uporabe</li>
        <li>Ne stavljajte termofor izravno na golu kožu na dulje vrijeme</li>
        <li>Zamijenite bocu ako primijetite pukotine ili zamor gume</li>
      </ul>
    </div>
  </div>
</section>

<!-- 6) Dodaci — slika desno -->
<section class="nhg-sec nhg-white">
  <div class="nhg-wrap nhg-row">
    <div class="nhg-copy">
      <h2 class="nhg-h2">Dodaci koji dopunjuju komplet</h2>
      <p>Produžetak veličine povećava opseg do 110 cm, putna vrećica čuva navlaku u torbi, a rezervna boca i klasična navlaka produžuju vijek kompleta.</p>
      <p class="nhg-strong">Sve je iz iste linije, u istim nijansama — bež i taupe.</p>
      <div class="nhg-mini">
        <figure><?php echo $hg_img( 'hug-02-extender-bez.jpg', 'Produžetak veličine, bež' ); ?></figure>
        <figure><?php echo $hg_img( 'hug-03-extender-taupe.jpg', 'Produžetak veličine, taupe' ); ?></figure>
        <figure><?php echo $hg_img( 'hug-13-vrecica.jpg', 'Putna vrećica' ); ?></figure>
        <figure><?php echo $hg_img( 'hug-14-vrecica-boca.jpg', 'Putna vrećica s termoforom' ); ?></figure>
      </div>
    </div>
    <div class="nhg-media"><?php echo $hg_img( 'hug-12-dodaci.jpg', 'Dodaci uz NORIKS Hugger' ); ?></div>
  </div>
</section>

<!-- 7) Materijal i pranje — slika lijevo -->
<section class="nhg-sec nhg-warm">
  <div class="nhg-wrap nhg-row">
    <div class="nhg-media"><?php echo $hg_img( 'hug-04-navlaka.jpg', 'Mekana navlaka od krzna' ); ?></div>
    <div class="nhg-copy">
      <h2 class="nhg-h2">Materijal i održavanje</h2>
      <ul class="nhg-ticks">
        <li>Vanjski sloj od super mekanog krzna, ugodan uz kožu</li>
        <li>Mrlje obrišite vlažnom krpom</li>
        <li>Strojno pranje na najviše 30 °C, program za osjetljivo, blagi deterdžent</li>
        <li>Ne bijeliti, ne peglati, ne sušiti u sušilici i ne prati s drugim bojama</li>
      </ul>
      <p class="nhg-note">Za najduži vijek navlake preporučujemo ručno pranje u hladnoj vodi.</p>
    </div>
  </div>
</section>

<!-- 8) Recenzije korisnica — slika desno -->
<section class="nhg-sec nhg-white">
  <div class="nhg-wrap nhg-row">
    <div class="nhg-copy">
      <p class="nhg-stars">★★★★★</p>
      <h2 class="nhg-h2">Ono što kupci najčešće kažu</h2>
      <p>Da im je toplina konačno ostala na mjestu dok rade i hodaju po kući, da je krzno ugodnije nego što su očekivali i da je ispao odličan poklon.</p>
      <p class="nhg-strong">Najčešća rečenica: „Trebala sam ga kupiti prije godinu dana.”</p>
      <div class="nhg-mini">
        <figure><?php echo $hg_img( 'hug-10-helena.jpg', 'Recenzija korisnice Helene' ); ?></figure>
        <figure><?php echo $hg_img( 'hug-11-ivana.jpg', 'Recenzija korisnice Ivane' ); ?></figure>
      </div>
    </div>
    <div class="nhg-media"><?php echo $hg_img( 'hug-06-kupci.jpg', 'Zadovoljni kupci' ); ?></div>
  </div>
</section>

<!-- 9) Jamstvo — slika lijevo -->
<section class="nhg-sec nhg-warm">
  <div class="nhg-wrap nhg-row">
    <div class="nhg-media"><?php echo $hg_img( 'hug-16-pas.jpg', 'NORIKS Hugger oko struka' ); ?></div>
    <div class="nhg-copy">
      <h2 class="nhg-h2">30 dana za povrat</h2>
      <p>Isprobajte ga kod kuće. Ako vam ne odgovara, javite nam se unutar 30 dana i vraćamo cijeli iznos — bez obrazaca i bez neugodnih pitanja.</p>
      <p class="nhg-strong">Dostava kreće u roku od 24 sata od narudžbe.</p>
    </div>
  </div>
</section>

<style>
.nhg-sec { padding: 40px 0; }
.nhg-warm  { background: #fdf2ec; color: #3a2620; }
.nhg-white { background: #fff;    color: #3a2620; }
.nhg-wrap { max-width: 1080px; margin: 0 auto; padding: 0 18px; }
.nhg-row { display: grid; grid-template-columns: 1fr 1fr; gap: 34px; align-items: center; }
.nhg-media img { width: 100%; height: auto; max-height: 430px; object-fit: contain; display: block; border-radius: 12px; }
.nhg-eyebrow { text-transform: uppercase; letter-spacing: .14em; font-size: 12px; font-weight: 700; color: #d24a2a; margin: 0 0 8px; }
.nhg-h2 { font-size: 27px; line-height: 1.22; margin: 0 0 12px; font-weight: 700; }
.nhg-sec p { font-size: 15.5px; line-height: 1.62; margin: 0 0 12px; }
.nhg-strong { font-weight: 600; }
.nhg-note { font-size: 14.5px; opacity: .82; margin: 4px 0 0; }
.nhg-stars { color: #d8a94b; letter-spacing: 3px; margin: 0 0 6px; font-size: 17px; }
.nhg-ticks { list-style: none; padding: 0; margin: 14px 0 0; }
.nhg-ticks li { position: relative; padding-left: 24px; margin-bottom: 7px; font-size: 15px; }
.nhg-ticks li:before { content: ""; position: absolute; left: 0; top: 6px; width: 12px; height: 12px; border-radius: 50%; background: #d24a2a; }
.nhg-steps { list-style: none; padding: 0; margin: 14px 0 0; }
.nhg-steps li { display: flex; gap: 12px; margin-bottom: 12px; font-size: 15px; line-height: 1.55; }
.nhg-steps span { flex: 0 0 auto; width: 28px; height: 28px; border-radius: 50%; background: #d24a2a; color: #fff;
                  font-weight: 800; display: flex; align-items: center; justify-content: center; font-size: 14px; }
.nhg-mini { display: grid; grid-template-columns: 1fr 1fr; gap: 12px; margin-top: 14px; }
.nhg-mini figure { margin: 0; }
.nhg-mini img { width: 100%; height: auto; border-radius: 10px; display: block; }
.nhg-ph { display: flex; align-items: center; justify-content: center; min-height: 200px; background: #f6e2d8; border-radius: 12px; color: #a86a55; font-size: 14px; text-align: center; padding: 12px; }
@media (max-width: 860px) {
  .nhg-sec { padding: 28px 0; }
  .nhg-h2 { font-size: 22px; }
  .nhg-row { grid-template-columns: 1fr; gap: 18px; }
  .nhg-row .nhg-media { order: -1; }
  .nhg-media img { max-height: 340px; }
}
</style>
