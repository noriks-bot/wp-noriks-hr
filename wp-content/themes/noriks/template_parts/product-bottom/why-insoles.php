<?php
/**
 * product-bottom: NORIKS Insoles — ortopedski ulosci za potporu stopala (orto-insoles).
 * Original: orthoflexx.com/products/max-arch-support-insoles
 * Sekcije slijede original (collapsed arch, first step, high arches, bunion, flat feet, NORIKS pogoji).
 * Slike: img/insoles/
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$nif = get_template_directory_uri() . '/img/insoles/';
?>

<style>
.nif-sec { padding: 56px 24px; max-width: 1240px; margin: 0 auto; }
.nif-sec.nif-tint { background: #f7f6f2; }
.nif-row2 { display: grid; grid-template-columns: 1fr 1fr; gap: 48px; align-items: center; }
.nif-row2--rev { direction: rtl; } .nif-row2--rev > * { direction: ltr; }
.nif-copy { }
.nif-kicker { font-size: 13px; text-transform: uppercase; letter-spacing: 1px; font-weight: 700; color: #666; margin-bottom: 8px; }
.nif-h2 { font-size: 32px; line-height: 1.15; font-weight: 800; margin: 0 0 20px; }
.nif-h2 em { font-style: italic; font-weight: 700; }
.nif-copy > p { margin: 0 0 16px; font-size: 16px; line-height: 1.6; }
.nif-copy > p:last-child { margin-bottom: 0; }
.nif-copy strong { font-weight: 700; color: #222; }
.nif-media { aspect-ratio: 4/5; overflow: hidden; border-radius: 12px; box-shadow: 0 4px 20px rgba(0,0,0,0.08); }
.nif-media img, .nif-media video { width: 100%; height: 100%; object-fit: cover; display: block; }

.nif-facts { display: grid; grid-template-columns: repeat(2, 1fr); gap: 20px; margin-top: 24px; }
.nif-facts > div { }
.nif-facts h3 { font-size: 16px; font-weight: 700; margin: 0 0 6px; }
.nif-facts p { font-size: 14px; line-height: 1.5; margin: 0; color: #555; }

.nif-points { display: grid; grid-template-columns: 1fr 1fr; gap: 24px; margin: 24px 0; }
.nif-point { background: #fff; border: 1px solid #ddd; border-radius: 8px; padding: 20px; }
.nif-point h3 { font-size: 16px; font-weight: 700; margin: 0 0 10px; }
.nif-point p { margin: 0; font-size: 15px; line-height: 1.5; }

.nif-pogoji { background: #222; color: #fff; padding: 56px 24px; }
.nif-pogoji-wrap { max-width: 1000px; margin: 0 auto; text-align: center; }
.nif-pogoji h2 { font-size: 28px; margin: 0 0 32px; }
.nif-pogoji-grid { display: grid; grid-template-columns: repeat(4, 1fr); gap: 24px; }
.nif-pogoji-item { }
.nif-pogoji-item .ico { font-size: 40px; margin-bottom: 12px; }
.nif-pogoji-item strong { display: block; font-size: 16px; margin-bottom: 6px; }
.nif-pogoji-item p { font-size: 14px; color: #ccc; margin: 0; line-height: 1.4; }

@media (max-width: 768px) {
  .nif-sec { padding: 40px 20px; }
  .nif-row2 { grid-template-columns: 1fr; gap: 32px; }
  .nif-row2--rev { direction: ltr; }
  .nif-h2 { font-size: 26px; }
  .nif-media { max-width: 100%; }
  .nif-facts { grid-template-columns: 1fr; gap: 16px; }
  .nif-points { grid-template-columns: 1fr; gap: 16px; }
  .nif-pogoji-grid { grid-template-columns: 1fr 1fr; gap: 20px; }
}
</style>

<!-- 1) STOPALA BOLE VEC PRIJEPODNE — slika lijevo -->
<section class="nif-sec nif-tint">
  <div class="nif-row2">
    <div class="nif-media">
      <img src="<?php echo esc_url( $nif . 'noriks-insoles-hero.webp' ); ?>" alt="NORIKS Insoles ortopedski ulošci za potporu stopala" loading="lazy">
    </div>
    <div class="nif-copy">
      <p class="nif-kicker">Stopala bole već prijepodne</p>
      <h2 class="nif-h2">Vaš svod <em>se urušava</em></h2>
      <p>Urušeni svod stopala gura stopalo prema unutra pri svakom koraku. Naprezanje se prenosi prema gore: gležanj, koljeno, kuk, donji dio leđa.</p>
      <p>Zvuči poznato? Usred smjene sav teret pada na pete.</p>
      <p><strong>NORIKS Insoles podupiru svod</strong> čak i pod punom tjelesnom težinom, održavaju stopalo u pravilnom položaju i smanjuju opterećenje na pete, koljena i donji dio leđa.</p>
    </div>
  </div>
</section>

<!-- 2) PRVI KORAK IZ KREVETA NAJGORI — slika desno -->
<section class="nif-sec">
  <div class="nif-row2 nif-row2--rev">
    <div class="nif-media">
      <img src="<?php echo esc_url( $nif . 'noriks-insoles-before-after.webp' ); ?>" alt="Prije i poslije NORIKS Insoles — poravnanje stopala" loading="lazy">
    </div>
    <div class="nif-copy">
      <p class="nif-kicker">Prvi korak iz kreveta najgori</p>
      <h2 class="nif-h2">Počinje u <em>svodu stopala</em></h2>
      <p>Traka ispod stopala drži svod poput tetive luka. Kada se svod spusti, povlači na peti. Cijeli dan. Preko noći se steže, a prvi korak ponovno povlači.</p>
      <p>Poznato? Ruka na zidu na putu do kupaonice.</p>
      <p><strong>NORIKS Insoles sa čvrstom bazom svoda i dubokom petnom košaricom</strong> uzimaju teret s plantarne fascije. Većina ljudi s plantarnim fasciitisom osjeća razliku nakon 1 do 2 tjedna.</p>
    </div>
  </div>
</section>

<!-- 3) VISOKI SVOD — slika lijevo -->
<section class="nif-sec nif-tint">
  <div class="nif-row2">
    <div class="nif-media">
      <img src="<?php echo esc_url( $nif . 'noriks-insoles-detail1.webp' ); ?>" alt="Detalj potpore visokog svoda NORIKS Insoles" loading="lazy">
    </div>
    <div class="nif-copy">
      <p class="nif-kicker">Visoki svod stopala</p>
      <h2 class="nif-h2">Peta i prednji dio <em>nose sve</em></h2>
      <p>Većina uložaka napravljena je za prosječan svod. Ispod visokog svoda ostaje praznina, pa dvije male točke nose svu težinu.</p>
      <p>„Potpora svodu" nikad ne dodiruje vaš svod.</p>
      <p><strong>NORIKS Insoles s visokim, čvrstim svodom (3,5 cm)</strong> pune prazninu i raspodijele pritisak ravnomjerno po cijelom stopalu. Potpora koja stvarno podupire.</p>
    </div>
  </div>
</section>

<!-- 4) BUNION — slika desno -->
<section class="nif-sec">
  <div class="nif-row2 nif-row2--rev">
    <div class="nif-media">
      <img src="<?php echo esc_url( $nif . 'noriks-insoles-detail2.webp' ); ?>" alt="Rasterećenje palca i buniona sa NORIKS Insoles" loading="lazy">
    </div>
    <div class="nif-copy">
      <p class="nif-kicker">Bunion boli do navečer</p>
      <h2 class="nif-h2">Veliki prst <em>prima svaki potisak</em></h2>
      <p>Kada se svod spusti, stopalo se preklopi prema unutra. Odgurnete se sa strane zgloba velikog prsta, tisuće puta dnevno.</p>
      <p>Zglob boli i otekne do kraja dana.</p>
      <p><strong>NORIKS Insoles vraćaju stopalo u pravilnu liniju</strong>, smanjuju pritisak na bunion i ublažavaju bol. Osjeća se razlika već nakon prvog tjedna.</p>
    </div>
  </div>
</section>

<!-- 5) RAVNA STOPALA — slika lijevo -->
<section class="nif-sec nif-tint">
  <div class="nif-row2">
    <div class="nif-media">
      <img src="<?php echo esc_url( $nif . 'noriks-insoles-detail3.webp' ); ?>" alt="Biomehani čka potpora za ravna stopala — NORIKS Insoles" loading="lazy">
    </div>
    <div class="nif-copy">
      <p class="nif-kicker">Ravna stopala</p>
      <h2 class="nif-h2">Zato <em>bole koljena, kukovi i leđa</em></h2>
      <p>Svod se spušta, gležanj se prevrće prema unutra, koljeno slijedi, kuk se nagne. Donji dio leđa plaća za sve to.</p>
      <p>Puno hodanja ili stajanja, pa kukovi i leđa počnu boljeti.</p>
      <p><strong>NORIKS Insoles drže svod podignutim</strong> pod punom težinom (do 150 kg). Ravna stopala trebaju potporu koja zadržava oblik — to je ono za što je Max napravljen.</p>
    </div>
  </div>
</section>

<!-- 6) NORIKS POGOJI -->
<section class="nif-pogoji">
  <div class="nif-pogoji-wrap">
    <h2>S NORIKS-om kupujete sigurno</h2>
    <div class="nif-pogoji-grid">
      <div class="nif-pogoji-item">
        <div class="ico">✓</div>
        <strong>30 dana za povrat</strong>
        <p>Bez pitanja. Čak i izrezani i nošeni ulošci se mogu vratiti.</p>
      </div>
      <div class="nif-pogoji-item">
        <div class="ico">📦</div>
        <strong>Besplatna dostava</strong>
        <p>Iznad 70 € na svaku narudžbu</p>
      </div>
      <div class="nif-pogoji-item">
        <div class="ico">😊</div>
        <strong>120.000 kupaca</strong>
        <p>Ocjena 4,8 na temelju 1.081 recenzija</p>
      </div>
      <div class="nif-pogoji-item">
        <div class="ico">💳</div>
        <strong>Plaćanje pouzećem</strong>
        <p>Plaćate tek po preuzimanju</p>
      </div>
    </div>
  </div>
</section>
