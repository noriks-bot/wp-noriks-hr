<?php
/**
 * NORIKS One Moment With God For Kids — 365 Daily Devotions — why sekcije (1:1 z originalom)
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
$slika = function ( $dat, $alt ) {
    $url = get_template_directory_uri() . '/img/devotions/' . $dat;
    return '<img src="' . esc_url( $url ) . '" alt="' . esc_attr( $alt ) . '" loading="lazy" decoding="async">';
};
?>
<div class="ndevotions">

  <section class="ndevotions__sekcija">
    <div class="ndevotions__v">
      <div class="ndevotions__tekst">
        <h2 class="ndevotions__h2">Jedna knjiga. Jedna minuta. Jača osnova.</h2>
        <p class="ndevotions__p">S 365 kratkih molitava prije spavanja, ova knjiga čini jednostavnim pomoći vašem djetetu da uči o Bogu, stranicu po stranicu.</p>
        <p class="ndevotions__p">Svaka večer donosi značajnu lekciju, Pismo i molitvu koje mogu razumjeti i nositi sa sobom.</p>
      </div>
      <div class="ndevotions__media"><?php echo $slika( 'devotions-01.webp', 'Jedna knjiga. Jedna minuta. Jača osnova.' ); ?></div>
    </div>
  </section>

  <section class="ndevotions__sekcija ndevotions__sekcija--bg">
    <div class="ndevotions__v">
      <div class="ndevotions__tekst">
        <h2 class="ndevotions__h2">Pomozite im da rastu bliže Bogu, večer po večer.</h2>
        <p class="ndevotions__p">Izgradnja vjere vašeg djeteta ne mora značiti duge biblijske studije ili lekcije koje teško razumiju.</p>
        <p class="ndevotions__p">Ova molitva prije spavanja pretvara nekoliko tihih minuta zajedno u priliku da razgovarate o Bogu, molite se zajedno i izgradite naviku koju mogu nositi dok rastu.</p>
      </div>
      <div class="ndevotions__media"><?php echo $slika( 'devotions-02.webp', 'Pomozite im da rastu bliže Bogu' ); ?></div>
    </div>
  </section>

  <section class="ndevotions__sekcija">
    <div class="ndevotions__v">
      <div class="ndevotions__tekst">
        <h2 class="ndevotions__h2">Zašto roditelji vole ovu molitvu</h2>
        <p class="ndevotions__p"><strong>Kratko i jednostavno</strong><br/>Molitve lako za pratiti, dizajnirane da zadrže pozornost mladih umova.</p>
        <p class="ndevotions__p"><strong>Napravljeno za vrijeme spavanja</strong><br/>Jednostavna noćna rutina koju roditelji i djeca mogu uživati zajedno.</p>
        <p class="ndevotions__p"><strong>Vjera koju mogu razumjeti</strong><br/>365 lekcija dizajniranih da pomognu djeci da rastu u vjeri, karakteru i njihovom odnosu s Bogom.</p>
      </div>
      <div class="ndevotions__media"><?php echo $slika( 'devotions-03.webp', 'Zašto roditelji vole ovu molitvu' ); ?></div>
    </div>
  </section>

  <section class="ndevotions__sekcija ndevotions__sekcija--bg">
    <div class="ndevotions__v">
      <div class="ndevotions__tekst">
        <h2 class="ndevotions__h2">Zašto NORIKS?</h2>
        <p class="ndevotions__p"><strong>30 dana za povrat novca.</strong> Ako proizvod nije za vas, možete ga vratiti unutar 30 dana i dobiti puni povrat.</p>
        <p class="ndevotions__p"><strong>Besplatna dostava iznad 70 €.</strong> Bez skrivenih troškova — što vidite, to je to.</p>
        <p class="ndevotions__p"><strong>Plaćanje pouzećem.</strong> Platite kod preuzimanja — sigurno i jednostavno.</p>
        <p class="ndevotions__p"><strong>Preko 120.000 zadovoljnih kupaca</strong> povjerilo nam je svoje narudžbe. Pridružite se tisućama koji su već otkrili razliku.</p>
      </div>
    </div>
  </section>

</div>
<style>
.ndevotions{font-family:inherit;color:#121030}
.ndevotions__sekcija{padding:46px 0}
.ndevotions__sekcija--bg{background:#f6f5f2}
.ndevotions__v{max-width:1180px;margin:0 auto;padding:0 18px;display:grid;grid-template-columns:1fr 1fr;gap:34px;align-items:center}
.ndevotions__sekcija:nth-child(even) .ndevotions__v{direction:rtl}
.ndevotions__sekcija:nth-child(even) .ndevotions__tekst,.ndevotions__sekcija:nth-child(even) .ndevotions__media{direction:ltr}
.ndevotions__h2{font-size:30px;line-height:1.15;margin:0 0 12px}
.ndevotions__p{font-size:16px;line-height:1.6;margin:0 0 14px}
.ndevotions__p:last-child{margin-bottom:0}
.ndevotions__p strong{font-weight:600}
.ndevotions__media img{width:100%;height:auto;display:block;border-radius:12px;aspect-ratio:4/5;object-fit:cover}
@media(max-width:860px){.ndevotions__v{grid-template-columns:1fr}.ndevotions__sekcija:nth-child(even) .ndevotions__v{direction:ltr}.ndevotions__h2{font-size:24px}}
</style>
