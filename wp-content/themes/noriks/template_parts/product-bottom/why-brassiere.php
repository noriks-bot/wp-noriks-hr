<?php
/**
 * product-bottom: NORIKS Brassiere — grudnjak bez zica s prirodnim podizanjem (orto-brassiere).
 * Original: luveon.com/products/brassiere-luveon — struktura je 1:1 z originalom
 * (isto stevilo sekcij, isti vrstni red, isti dizajn), besedila prevedena.
 *   1) Recenzije (karusel kartic: fotografija, zvjezdice, citat, ime, gumb)
 *   2) Kako osigurava savrsenu potporu? (3 kartice: slika, ikona, naslov)
 * "Nous avons ete vu dans" (logotipi medija) je izpuscen — trgovinski modul.
 * FAQ originala je v reviews.php ($brassiere_faq), mnenja v auto_reviews/HR_brassiere.php.
 * Slike: img/brassiere/ (original, brez napisov in logotipa).
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$nbs      = get_template_directory_uri() . '/img/brassiere/';
$nbs_path = get_template_directory() . '/img/brassiere/';
$nbs_img  = function( $file, $alt, $cls = '' ) use ( $nbs, $nbs_path ) {
  if ( ! file_exists( $nbs_path . $file ) ) { return ''; }
  return '<img src="' . esc_url( $nbs . $file ) . '" alt="' . esc_attr( $alt ) . '"' . ( $cls ? ' class="' . esc_attr( $cls ) . '"' : '' ) . ' loading="lazy">';
};

/* Mnenja 1:1 z originala (ime, leta, kraj ostanejo kot na originalu). */
$nbs_reviews = array(
  array( 'foto' => 'bs-rv-1.webp', 'ime' => 'Louise, 32 godine, Limoges',
    'naslov' => 'Apsolutna udobnost',
    'tekst'  => 'Nisam mislila da grudnjak bez žice može ovako dobro držati. Savršeno prianja uz grudi i leđa me više uopće ne bole.' ),
  array( 'foto' => 'bs-rv-2.webp', 'ime' => 'Claire, 42 godine, Perpignan',
    'naslov' => 'Jako zadovoljna',
    'tekst'  => 'Super ugodan za nošenje, ne ostavlja tragove, nosim ga cijeli dan bez ikakve nelagode. Tkanina je jako mekana, preporučujem 100 %.' ),
  array( 'foto' => 'bs-rv-3.webp', 'ime' => 'Marion, 34 godine, Nice',
    'naslov' => 'Dobra potpora i lijep izgled',
    'tekst'  => 'Potpora je odlična čak i za velike grudi. Ne pomiče se, ni nakon pranja. Uzela sam još jedan!' ),
  array( 'foto' => 'bs-rv-4.webp', 'ime' => 'Laurence, 43 godine, Pariz',
    'naslov' => 'Tako udoban!',
    'tekst'  => 'Kad ga obučeš, potpuno zaboraviš na njega. Naramenice ne padaju i ništa ne smeta. Postao mi je najdraži.' ),
  array( 'foto' => '', 'ime' => 'Nathalie, 32 godine, Poitiers',
    'naslov' => 'Napokon potpora koja ne steže',
    'tekst'  => 'Teško podnosim žice, a ovaj je savršen. Potpora bez boli, osjećaj lagan i prirodan.' ),
  array( 'foto' => '', 'ime' => 'Solène, 43 godine, Rennes',
    'naslov' => 'Savršen za svaki dan',
    'tekst'  => 'Nosim ga i na poslu i kod kuće. Tkanina diše i ostaje na mjestu čak i ispod uske majice.' ),
  array( 'foto' => '', 'ime' => 'Laure, 39 godina, Dijon',
    'naslov' => 'Ugodno iznenađenje',
    'tekst'  => 'Sumnjala sam prije nego što sam ga probala, ali rezultat je odličan. Grudi su dobro poduprte, čvršće, bez ikakve boli.' ),
  array( 'foto' => '', 'ime' => 'Pauline, 56 godina, Strasbourg',
    'naslov' => 'Dobar omjer cijene i kvalitete',
    'tekst'  => 'Iskreno, za ovu cijenu to nisam očekivala. Odlična potpora, ugodan materijal, brza dostava.' ),
  array( 'foto' => '', 'ime' => 'Cathy, 32 godine, Marseille',
    'naslov' => 'Dobar proizvod',
    'tekst'  => 'Vrlo ugodan za nošenje, osjeti se kvaliteta tkanine. Samo bih voljela malo više potpore sa strane, ali inače savršeno.' ),
);

$nbs_cards = array(
  array( 'slika' => 'bs-k1-tkanina.webp',   'ikona' => 'bs-k1-ikona.webp', 'naslov' => 'Rastezljiva tkanina koja oblikuje i nježno podiže.' ),
  array( 'slika' => 'bs-k2-traka.webp',     'ikona' => 'bs-k2-ikona.webp', 'naslov' => 'Donja potporna traka koja stabilizira bez stezanja.' ),
  array( 'slika' => 'bs-k3-struktura.webp', 'ikona' => 'bs-k3-ikona.webp', 'naslov' => 'Nevidljiva struktura koja raspoređuje težinu bez žica i push-upa.' ),
);

$nbs_stars = '<span class="nbs-stars" aria-label="5 od 5 zvjezdica">' . str_repeat( '<i>★</i>', 5 ) . '</span>';
?>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap">

<!-- 1) RECENZIJE -->
<section class="nbs-sec nbs-sec--reviews">
  <div class="nbs-wrap">
    <h2 class="nbs-h2">Recenzije naših NORIKS grudnjaka</h2>
    <div class="nbs-slider" data-nbs-slider tabindex="0" role="group" aria-label="Recenzije kupaca">
      <div class="nbs-track">
        <?php foreach ( $nbs_reviews as $r ) : ?>
        <article class="nbs-rv">
          <?php if ( $r['foto'] ) : ?><div class="nbs-rv__photo"><?php echo $nbs_img( $r['foto'], 'Fotografija kupca — ' . $r['ime'] ); ?></div><?php endif; ?>
          <?php echo $nbs_stars; ?>
          <p class="nbs-rv__txt">"<strong><?php echo esc_html( $r['naslov'] ); ?></strong><br><?php echo esc_html( $r['tekst'] ); ?>"</p>
          <div class="nbs-rv__div"></div>
          <div class="nbs-rv__bottom"><span class="nbs-rv__name"><?php echo esc_html( $r['ime'] ); ?></span></div>
          <a class="nbs-btn" href="#bundle-selector">Kupi odmah</a>
        </article>
        <?php endforeach; ?>
      </div>
    </div>
    <div class="nbs-nav">
      <button type="button" class="nbs-arrow" data-nbs-prev aria-label="Prethodna recenzija"><svg viewBox="0 0 20 20" aria-hidden="true"><path d="M12.5 4 6.5 10l6 6" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg></button>
      <button type="button" class="nbs-arrow" data-nbs-next aria-label="Sljedeća recenzija"><svg viewBox="0 0 20 20" aria-hidden="true"><path d="M7.5 4l6 6-6 6" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg></button>
    </div>
  </div>
</section>

<!-- 2) KAKO OSIGURAVA SAVRŠENU POTPORU? -->
<section class="nbs-sec nbs-sec--cards">
  <div class="nbs-wrap">
    <h2 class="nbs-h2">Kako osigurava savršenu potporu?</h2>
    <div class="nbs-cards">
      <?php foreach ( $nbs_cards as $c ) : ?>
      <article class="nbs-card">
        <?php echo $nbs_img( $c['slika'], $c['naslov'], 'nbs-card__img' ); ?>
        <span class="nbs-card__grad" aria-hidden="true"></span>
        <span class="nbs-card__ico"><?php echo $nbs_img( $c['ikona'], '' ); ?></span>
        <h3 class="nbs-card__ttl"><?php echo esc_html( $c['naslov'] ); ?></h3>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<script>
(function(){
  var s = document.querySelector('[data-nbs-slider]');
  if (!s) return;
  var prev = document.querySelector('[data-nbs-prev]'), next = document.querySelector('[data-nbs-next]');
  function step(){ var c = s.querySelector('.nbs-rv'); return c ? c.getBoundingClientRect().width + 16 : 300; }
  function upd(){ prev.disabled = s.scrollLeft <= 2; next.disabled = s.scrollLeft + s.clientWidth >= s.scrollWidth - 2; }
  prev.addEventListener('click', function(){ s.scrollBy({ left: -step(), behavior: 'smooth' }); });
  next.addEventListener('click', function(){ s.scrollBy({ left: step(), behavior: 'smooth' }); });
  s.addEventListener('scroll', upd, { passive: true });
  window.addEventListener('resize', upd);
  upd();
})();
</script>

<style>
.nbs-sec { padding: 56px 0; font-family: 'Poppins', system-ui, -apple-system, 'Segoe UI', Roboto, Arial, sans-serif; color: #121212; background: #fff; overflow-x: hidden; }
.nbs-sec * { box-sizing: border-box; }
.nbs-sec--reviews { padding-top: 20px; }
.nbs-sec--cards { background: #f7efee; }
.nbs-wrap { width: 100%; max-width: 1200px; margin: 0 auto; padding: 0 24px; }
.nbs-h2 { font-family: inherit; font-weight: 600; font-size: clamp(24px, 3vw, 34px); line-height: 1.25; text-align: center; margin: 0 0 28px; color: #121212; letter-spacing: 0; text-transform: none; }
.nbs-sec img { display: block; width: 100%; height: auto; }

/* 1) recenzije — karusel */
.nbs-slider { overflow-x: auto; scroll-snap-type: x mandatory; scroll-behavior: smooth; -webkit-overflow-scrolling: touch; scrollbar-width: none; outline: none; }
.nbs-slider::-webkit-scrollbar { display: none; }
.nbs-track { display: flex; gap: 16px; align-items: stretch; }
.nbs-rv { flex: 0 0 calc((100% - 48px) / 4); scroll-snap-align: start; display: flex; flex-direction: column; background: #fff; border: 1px solid #e8dedd; border-radius: 12px; padding: 16px; }
.nbs-rv__photo { margin: 0 0 14px; border-radius: 8px; overflow: hidden; aspect-ratio: 1 / 1; }
.nbs-rv__photo img { width: 100%; height: 100%; object-fit: cover; }
.nbs-stars { display: inline-flex; gap: 3px; margin: 0 0 12px; }
.nbs-stars i { font-style: normal; width: 22px; height: 22px; background: #00b67a; color: #fff; font-size: 15px; line-height: 22px; text-align: center; }
.nbs-rv__txt { font-size: 14.5px; line-height: 1.6; color: #2b2526; margin: 0 0 14px; }
.nbs-rv__txt strong { font-weight: 600; color: #121212; }
.nbs-rv__div { height: 1px; background: #e8dedd; margin: auto 0 12px; }
.nbs-rv__name { font-size: 13.5px; font-weight: 500; color: #6b5f61; }
.nbs-btn { display: block; width: 100%; margin-top: 16px; text-align: center; background: #121212; color: #fff !important; font-weight: 600; font-size: 15px;
  padding: 13px 16px; border-radius: 6px; text-decoration: none; }
.nbs-btn:hover { background: #a65a5d; color: #fff !important; }
.nbs-nav { display: flex; justify-content: center; gap: 12px; margin-top: 24px; }
.nbs-arrow { display: inline-flex; align-items: center; justify-content: center; width: 44px; height: 44px; padding: 0; border: 1px solid #b8b8b8; border-radius: 50%; background: #fff; color: #111; cursor: pointer; }
.nbs-arrow:hover:not(:disabled) { border-color: currentColor; background: #f5f5f5; }
.nbs-arrow:disabled { opacity: .35; cursor: default; }
.nbs-arrow svg { width: 20px; height: 20px; }

/* 2) kartice z ikonami */
.nbs-cards { display: grid; grid-template-columns: repeat(3, minmax(0, 1fr)); gap: 18px; }
.nbs-card { position: relative; border-radius: 14px; overflow: hidden; aspect-ratio: 4 / 5; background: #e9dfde; }
.nbs-card .nbs-card__img { position: absolute; inset: 0; width: 100%; height: 100%; object-fit: cover; }
.nbs-card__grad { position: absolute; inset: 0; background: linear-gradient(180deg, rgba(0,0,0,0) 45%, rgba(0,0,0,.72) 100%); }
.nbs-card__ico { position: absolute; top: 16px; left: 16px; width: 64px; height: 64px; border-radius: 12px; background: #fff; padding: 6px; box-shadow: 0 2px 8px rgba(0,0,0,.12); }
.nbs-card__ico img { width: 100%; height: 100%; object-fit: contain; }
.nbs-card__ttl { position: absolute; left: 20px; right: 20px; bottom: 20px; margin: 0; color: #fff; font-family: inherit; font-weight: 600; font-size: 18px; line-height: 1.35; text-transform: none; letter-spacing: 0; }

@media (max-width: 989px) {
  .nbs-rv { flex-basis: calc((100% - 16px) / 2); }
}
@media (max-width: 749px) {
  .nbs-sec { padding: 40px 0; }
  .nbs-sec--reviews { padding-top: 16px; }
  .nbs-wrap { padding: 0 16px; }
  .nbs-rv { flex-basis: 82%; }
  .nbs-cards { display: flex; overflow-x: auto; scroll-snap-type: x mandatory; gap: 12px; scrollbar-width: none; margin: 0 -16px; padding: 0 16px; }
  .nbs-cards::-webkit-scrollbar { display: none; }
  .nbs-card { flex: 0 0 78%; scroll-snap-align: start; }
  .nbs-card__ttl { font-size: 16px; }
}

/* kratek opis izdelka: zelene kljukice namesto pik (REST pobrise inline slog) */
.woocommerce div.product .woocommerce-product-details__short-description ul,
.woocommerce-product-details__short-description ul {
  list-style: none !important; margin: 10px 0 14px !important; padding-left: 0 !important; }
.woocommerce div.product .woocommerce-product-details__short-description ul li,
.woocommerce-product-details__short-description ul li {
  list-style: none !important; text-indent: 0 !important; margin: 0 0 7px !important;
  line-height: 1.45 !important; font-size: 15.5px !important;
  display: block !important; position: relative !important; padding-left: 31px !important; }
.woocommerce-product-details__short-description ul li::marker { content: "" !important; }
.woocommerce-product-details__short-description ul li::before { content: none !important; }
.woocommerce-product-details__short-description .nbs-tick {
  position: absolute !important; left: 0 !important; top: 1px !important;
  width: 21px; height: 21px; border-radius: 50%;
  background: #2f9e5f !important; color: #fff !important;
  font-size: 12px !important; font-weight: 800 !important; line-height: 21px !important;
  text-align: center !important; display: inline-block !important; }
.woocommerce-product-details__short-description p:first-of-type { font-size: 16px; line-height: 1.55; }
</style>
