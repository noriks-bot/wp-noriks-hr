<?php
/**
 * product-bottom: NORIKS SlabProof — radne carape s jastucenjem za beton (orto-slabproof).
 * Original: wootengear.com/products/slabproof-tech-sock — struktura je 1:1 z originalom
 * (isto stevilo sekcij, isti vrstni red, isti dizajn), besedila prevedena in prilagojena.
 *   1) Recenzije (zid kartic s fotografijami)   4) Ne spustaju se, ne stezu
 *   2) Jastucic tamo gdje beton udara (tamna)   5) Usporedba radnih carapa
 *   3) Nikad nisu bile cizme                    6) Tko stoji iza ovih carapa (tamna, brez imena)
 * Odstranjeni CTA bloki (naslov + gumb Naruci sada + vrstica jamstev) — na Dejanovo zeljo 22.10.
 * Izpusceno: originalova sekcija "Pick the height for your boots" (Knee High / Crew / Low Cut sta
 * loceni izdelek — mi prodajamo samo srednjo visino) in tuje jamstvo 1.000 smjen (NORIKS pogoji: 30 dana).
 * FAQ originala je v reviews.php ($slabproof_faq), mnenja v auto_reviews/HR_slabproof.php.
 * Slike: img/slabproof/ (original, logotip Timberland na sp-rv-foto-1 retusiran).
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$nsp      = get_template_directory_uri() . '/img/slabproof/';
$nsp_path = get_template_directory() . '/img/slabproof/';
$nsp_img  = function( $file, $alt ) use ( $nsp, $nsp_path ) {
  if ( ! file_exists( $nsp_path . $file ) ) { return ''; }
  return '<img src="' . esc_url( $nsp . $file ) . '" alt="' . esc_attr( $alt ) . '" loading="lazy">';
};

$nsp_reviews = array(
  array( 'lice' => 'sp-rv-lice-1.webp', 'foto' => 'sp-rv-foto-1.webp', 'ime' => 'Krešimir H.', 'posao' => 'Stolar · Osijek', 'zvjezdice' => 5,
    'naslov' => 'Prva radna čarapa koja je stvarno izdržala',
    'tekst'  => 'Čarape trošim brzo, obično za par mjeseci imam rupu na peti. Ove nosim pet-šest dana u tjednu skoro četiri mjeseca i izgledaju isto kao prvi dan. Ojačani dio stvarno drži. Naručujem još.' ),
  array( 'lice' => 'sp-rv-lice-2.webp', 'foto' => 'sp-rv-foto-2.webp', 'ime' => 'Marko T.', 'posao' => 'Zavarivač · Rijeka', 'zvjezdice' => 5,
    'naslov' => 'Ne spuštaju se i ne prekidaju cirkulaciju',
    'tekst'  => 'Imam jake listove i svaka čarapa mi se ili srola do marende ili ostavi duboki crveni trag na nozi. Ove stoje cijelu smjenu i nema traga. Trebalo mi je 15 godina da nađem čarapu koja radi oboje.' ),
  array( 'lice' => 'sp-rv-lice-3.webp', 'foto' => 'sp-rv-foto-3.webp', 'ime' => 'Dario R.', 'posao' => 'Krovopokrivač · Split', 'zvjezdice' => 5,
    'naslov' => 'Suha stopala na 40 stupnjeva',
    'tekst'  => 'Ljeta u Splitu su brutalna i stopala su mi bila mokra već sredinom jutra. Cijeli dan sam skidao stari krov u ovima i navečer su stopala bila suha. Ne znam kako to rade, ali radi.' ),
  array( 'lice' => 'sp-rv-lice-4.webp', 'foto' => 'sp-rv-foto-4.webp', 'ime' => 'Edin M.', 'posao' => 'Skladištar · Zagreb', 'zvjezdice' => 5,
    'naslov' => 'Jastučić ispod pete je prava stvar',
    'tekst'  => 'Smjene od 12 sati na betonskom podu i stopala su mi bila gotova do večere. Jastučić ispod pete stvarno se osjeti, to vidim na kraju noćne. Naručio sam još 4 para.' ),
  array( 'lice' => '', 'foto' => '', 'ime' => 'Vlado B.', 'posao' => 'Automehaničar · Varaždin', 'zvjezdice' => 5,
    'naslov' => 'Kupiš jednom i miran si',
    'tekst'  => 'Nisam htio dati toliko za čarape, žena me nagovorila. Drago mi je da je. Stare više nisam ni taknuo. Dobiješ ono što platiš.' ),
  array( 'lice' => '', 'foto' => 'sp-rv-foto-5.webp', 'ime' => 'Petar S.', 'posao' => 'Vodoinstalater · Zadar', 'zvjezdice' => 5,
    'naslov' => 'Nosim ih i nakon posla',
    'tekst'  => 'Kupio sam ih za posao, ali su toliko udobne da ih obujem i doma. Stopala me napokon ne bole kad navečer sjednem. Žena mi ih stalno krade, iskreno.' ),
  array( 'lice' => 'sp-rv-lice-5.webp', 'foto' => 'sp-rv-foto-6.webp', 'ime' => 'Tihomir V.', 'posao' => 'Električar · Pula', 'zvjezdice' => 5,
    'naslov' => 'Kvaliteta se osjeti',
    'tekst'  => 'Prvo što sam primijetio kad sam ih izvadio iz paketa: debele su i stvarno dobro napravljene. Jastučić na dnu nije šala. Mjesec dana puzanja po tavanima i drže se odlično.' ),
  array( 'lice' => '', 'foto' => 'sp-rv-foto-7.webp', 'ime' => 'Josip V.', 'posao' => 'Uređenje okoliša · Karlovac', 'zvjezdice' => 4,
    'naslov' => 'Skuplje, ali to zasluže',
    'tekst'  => 'Malo skuplje i trebalo je nekoliko nošenja da se razgaze. Ali ne kližu i stopala mi nisu uništena do pet popodne. Jedan par sam nosio cijeli tjedan pa naručio još tri, to vam govori dovoljno.' ),
  array( 'lice' => 'sp-rv-lice-6.webp', 'foto' => 'sp-rv-foto-8.webp', 'ime' => 'Branko K.', 'posao' => 'Zidar · Slavonski Brod', 'zvjezdice' => 5,
    'naslov' => 'Isti par, šest mjeseci, nijedna rupa',
    'tekst'  => 'Grub sam prema čarapama, zidanje cijeli dan ih uništi. Isti par nosim skoro šest mjeseci i još nijedne rupe. Počeo sam ih nositi i u lov vikendom. Najbolja radna čarapa koju sam kupio.' ),
);
?>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Oswald:wght@500;600;700&display=swap">

<!-- 1) RECENZIJE -->
<section class="nsp-sec nsp-cream">
  <div class="nsp-wrap">
    <div class="nsp-head">
      <h2 class="nsp-h2">Ne vjerujte nama na riječ. <em>Vjerujte njima.</em></h2>
      <p class="nsp-rating"><span class="nsp-stars">★★★★★</span> 4,7 od 5 — ocjene potvrđenih kupaca</p>
    </div>
    <div class="nsp-wall">
      <?php foreach ( $nsp_reviews as $r ) : ?>
      <article class="nsp-rv">
        <div class="nsp-rv__top">
          <?php if ( $r['lice'] ) : ?><span class="nsp-rv__ava"><?php echo $nsp_img( $r['lice'], $r['ime'] ); ?></span><?php endif; ?>
          <div class="nsp-rv__who">
            <span class="nsp-rv__name"><?php echo esc_html( $r['ime'] ); ?></span>
            <span class="nsp-rv__stars"><?php echo str_repeat( '★', $r['zvjezdice'] ); ?></span>
            <span class="nsp-rv__meta"><?php echo esc_html( $r['posao'] ); ?></span>
          </div>
        </div>
        <p class="nsp-rv__ttl"><?php echo esc_html( $r['naslov'] ); ?></p>
        <p class="nsp-rv__txt"><?php echo esc_html( $r['tekst'] ); ?></p>
        <span class="nsp-rv__ver">✓ Potvrđena kupnja</span>
        <?php if ( $r['foto'] ) : ?><div class="nsp-rv__ugc"><?php echo $nsp_img( $r['foto'], 'Fotografija kupca — ' . $r['ime'] ); ?></div><?php endif; ?>
      </article>
      <?php endforeach; ?>
    </div>
    <p class="nsp-more"><a class="nsp-btn nsp-btn--ghost" href="#reviews-section">Pročitaj više recenzija</a></p>
  </div>
</section>

<!-- 2) JASTUČIĆ TAMO GDJE BETON UDARA -->
<section class="nsp-sec nsp-dark">
  <div class="nsp-wrap">
    <div class="nsp-row2">
      <div class="nsp-row2__copy">
        <h2 class="nsp-h2">Jastučić smo stavili tamo <em>gdje beton najjače udara.</em></h2>
        <p class="nsp-sub">Nismo izmislili jastučenje. Napravili smo prvo koje je namijenjeno podu na kojem stojite cijeli dan: gusto ondje gdje udaraju peta i prednji dio stopala, tanko svugdje drugdje, pa vam čizma nikad ne postane pretijesna.</p>
      </div>
    <div class="nsp-viz">
      <?php echo $nsp_img( 'sp-04-zone-jastucenja.webp', 'NORIKS SlabProof — zone jastučenja, prozračna mrežica i ojačana peta i prsti' ); ?>
      <span class="nsp-cl nsp-cl--right" style="left:71%;top:65%"><i class="dot"></i><i class="line"></i><b class="lbl">Zonsko jastučenje</b></span>
      <span class="nsp-cl nsp-cl--left" style="left:46%;top:60%"><i class="dot"></i><i class="line"></i><b class="lbl">Prozračna mrežica</b></span>
      <span class="nsp-cl nsp-cl--down" style="left:24%;top:80%"><i class="dot"></i><i class="line"></i><b class="lbl">Ojačana peta i prsti</b></span>
    </div>
    </div>
    <div class="nsp-cards">
      <div class="nsp-card"><h3>Zonsko jastučenje</h3><p>Gusti jastučići ispod pete i prednjeg dijela stopala, točno ondje gdje beton udara. Svugdje drugdje tanko, pa ublažava udarce, a ne puni čizmu.</p></div>
      <div class="nsp-card"><h3>Ojačana peta i prsti</h3><p>Dvostruko pleteni najlon na dva mjesta gdje čarape prve popuste. Rupe su razlog broj 1 zašto čarapa završi u smeću, zato smo pletivo udvostručili točno ondje gdje nastaju.</p></div>
      <div class="nsp-card"><h3>Prozračne i suhe</h3><p>Mrežasti dijelovi odvode znoj, pa su stopala suha od prvog do dvanaestog sata. Mješavina bez vune, dakle ništa ne grebe i nema sparine u srpnju.</p></div>
    </div>
  </div>
</section>

<!-- 3) NIKAD NISU BILE ČIZME -->
<section class="nsp-sec nsp-cream">
  <div class="nsp-wrap">
    <div class="nsp-row2">
      <div class="nsp-test">
        <div class="nsp-test__labels"><span class="nsp-test__lbl nsp-test__lbl--bad">Obična čarapa</span><span class="nsp-test__vs">vs</span><span class="nsp-test__lbl nsp-test__lbl--good">NORIKS SlabProof</span></div>
        <div class="nsp-test__img"><?php echo $nsp_img( 'sp-03-test-cizme.webp', 'Obična čarapa i NORIKS SlabProof u istoj radnoj čizmi na betonu' ); ?></div>
        <p class="nsp-test__cap">Ista čizma, isti beton. Promijenila se samo čarapa.</p>
      </div>
      <div class="nsp-row2__copy">
        <h2 class="nsp-h2">Nikad nisu bile <em>krive čizme.</em></h2>
        <p class="nsp-sub">Radne čizme napravljene su da štite stopala, ne da ih ublažavaju. Krutost im je cijela poanta. Ali beton ne vraća ništa, a svaki korak negdje mora otići: u pete, u koljena, u leđa.</p>
        <p class="nsp-quote">Odrađujete smjene od 12 sati u kamionu bez amortizera.</p>
        <p class="nsp-bridge">Jedino što može ublažiti taj udarac je dva i pol centimetra čarape. <strong>Zato smo tih dva i pol centimetra napravili kako treba.</strong></p>
      </div>
    </div>
  </div>
</section>

<!-- 4) NE SPUŠTAJU SE, NE STEŽU -->
<section class="nsp-sec nsp-light">
  <div class="nsp-wrap">
    <div class="nsp-head">
      <h2 class="nsp-h2">Ne spuštaju se. <em>Ne stežu list.</em></h2>
      <p class="nsp-sub">Većina radnih čarapa tjera vas da birate: da se do podneva skliznu u čizmu ili da vam uska traka ureže crveni prsten u list. Rub smo napravili tako da nikad ne morate birati.</p>
    </div>
    <div class="nsp-fit">
      <figure class="nsp-fit__demo">
        <?php echo $nsp_img( 'sp-05-zone-drzanja.webp', 'NORIKS SlabProof — tri zone koje drže čarapu gore bez stezanja' ); ?>
        <figcaption>Tri točke je drže gore. Nijedna ne steže.</figcaption>
      </figure>
      <div class="nsp-chips">
        <div class="nsp-chip"><span class="nsp-chip__ico">1</span><div><h3>Široki rebrasti rub</h3><p>Drži širokom trakom, ne jednim uskim prstenom. Ostaje gore cijelu smjenu bez stezanja lista.</p></div></div>
        <div class="nsp-chip"><span class="nsp-chip__ico">2</span><div><h3>Džep za petu i jezičac</h3><p>Duboki džep za petu i jezičac straga zaključaju petu, pa čarapa ne može puzati prema dolje u čizmi.</p></div></div>
        <div class="nsp-chip"><span class="nsp-chip__ico">3</span><div><h3>Traka oko svoda</h3><p>Pripijena traka obuhvaća svod i drži stopalo da ne klizi — a potpora svoda znači manje umorna stopala na kraju duge smjene.</p></div></div>
      </div>
    </div>
  </div>
</section>

<!-- 5) USPOREDBA -->
<section class="nsp-sec nsp-cream nsp-sec--line">
  <div class="nsp-wrap nsp-narrow">
    <div class="nsp-head">
      <h2 class="nsp-h2">Nisu sve radne čarape <em>napravljene jednako.</em></h2>
      <p class="nsp-sub">Jeftino pakiranje, skupi vuneni par ili onaj napravljen za beton na kojem stvarno stojite. Evo kako se uspoređuju.</p>
    </div>
    <div class="nsp-cmp">
      <table>
        <thead><tr><td></td><th>Jeftino pakiranje</th><th>Skupa vuna</th><th class="nsp-cmp__us">NORIKS SlabProof</th></tr></thead>
        <tbody>
          <tr><th scope="row">Bez rupa nakon godinu dana na betonu</th><td class="nsp-no">✕</td><td class="nsp-yes">✓</td><td class="nsp-yes nsp-cmp__us">✓</td></tr>
          <tr><th scope="row">Jastučić ondje gdje beton udara</th><td class="nsp-no">✕</td><td class="nsp-no">✕</td><td class="nsp-yes nsp-cmp__us">✓</td></tr>
          <tr><th scope="row">Hladno i suho u zatvorenoj čizmi</th><td class="nsp-no">✕</td><td class="nsp-no">✕</td><td class="nsp-yes nsp-cmp__us">✓</td></tr>
          <tr><th scope="row">Ne grebe kao vuna, noga se ne pregrijava</th><td class="nsp-no">✕</td><td class="nsp-no">✕</td><td class="nsp-yes nsp-cmp__us">✓</td></tr>
          <tr><th scope="row">Ne spušta se, ne steže list</th><td class="nsp-no">✕</td><td class="nsp-mid">—</td><td class="nsp-yes nsp-cmp__us">✓</td></tr>
          <tr><th scope="row">30 dana za povrat novca</th><td class="nsp-no">✕</td><td class="nsp-mid">—</td><td class="nsp-yes nsp-cmp__us">✓</td></tr>
          <tr class="nsp-cmp__cost"><th scope="row">Koliko stvarno košta</th><td>Jeftino, pa opet kupuješ</td><td>Visoka cijena</td><td class="nsp-cmp__us">Kupiš jednom</td></tr>
        </tbody>
      </table>
    </div>
    <p class="nsp-cmp__foot">— znači da ovisi o proizvođaču</p>
    <p class="nsp-concede">Dobra vuna traje, to joj priznajemo. Ali ljeti grebe i grije u zatvorenoj čizmi. Mi smo svoje napravili za pod na kojem stojite, ne za planinarsku stazu.</p>
  </div>
</section>

<!-- 6) TKO STOJI IZA OVIH ČARAPA -->
<section class="nsp-sec nsp-dark">
  <div class="nsp-wrap nsp-fdr">
    <div class="nsp-fdr__media"><?php echo $nsp_img( 'sp-07-tko-ih-radi.webp', 'Majstor na gradilištu' ); ?></div>
    <div class="nsp-fdr__copy">
      <p class="nsp-kicker">Tko stoji iza ovih čarapa</p>
      <h2 class="nsp-h2">Nismo tvrtka za čarape. <em>Napravili smo ih za ljude kojima stopala bole od posla.</em></h2>
      <p class="nsp-sub">Napravljene za one koji cijeli dan stoje na betonu — na gradilištu, u skladištu, u radionici.</p>
      <div class="nsp-fdr__body">
        <p>Bolnice, skladišta, distribucijski centri, gradilišta. Betonski podovi i dvanaest sati na nogama. U dvadesetima to ne osjetite. U četrdeset i petoj stopala su vam gotova do ručka, a pakiranje čarapa potrošite za mjesec dana. Probušene pete. Mokro do podneva.</p>
        <p>Najviše smeta što su čarape koje svi znamo iz godine u godinu sve tanje. Sve kraće. Pune rupa za mjesec dana. Marke kojima su vjerovali naši očevi više ne drže, a nitko nije napravio čarapu za nekoga tko cijeli dan stoji na betonu.</p>
        <p>Zato smo je napravili. Ojačanu ondje gdje uvijek prvo popusti. Suhu. Da ostane na mjestu.</p>
      </div>
      <blockquote class="nsp-fdr__quote">Čarape kojima smo vjerovali svake su godine bile sve tanje. Nitko nije napravio onu koja izdrži. Zato smo je napravili mi.</blockquote>
      <p class="nsp-fdr__acct">Ako vas ikad iznevjere, to je naša odgovornost, ne vaša. Za to postoji jamstvo.</p>
    </div>
  </div>
</section>


<!-- 7) NORIKS pogoji -->
<section class="nsp-sec nsp-cream">
  <div class="nsp-wrap nsp-narrow" style="text-align:center">
    <h2 class="nsp-h2">Isprobajte ih <em>bez rizika.</em></h2>
    <p class="nsp-sub">Obujte ih na smjenu, operite ih, provjerite kako drže. Ako nisu za vas, imate <strong>30 dana za povrat novca</strong>.</p>
    <p class="nsp-trust"><span>30 dana za povrat</span><span>Besplatna dostava iznad 70 €</span><span>Plaćanje pouzećem</span></p>
  </div>
</section>

<style>
.nsp-trust { display: flex; flex-wrap: wrap; justify-content: center; gap: 10px 26px; margin: 18px 0 0; font-size: 14px; font-weight: 600; color: #6b625a; }
.nsp-trust span { position: relative; padding-left: 20px; }
.nsp-trust span::before { content: "\2713"; position: absolute; left: 0; color: #d2632e; }

.nsp-sec { padding: clamp(46px, 6vw, 88px) 0; font-family: 'Inter', system-ui, -apple-system, 'Segoe UI', Roboto, Arial, sans-serif; color: #15140f; overflow-x: hidden; }
.nsp-sec * { box-sizing: border-box; }
.nsp-cream { background: #f3ece1; }
.nsp-light { background: #ffffff; }
.nsp-dark  { background: #0e0e0c; color: #f4f0e7; }
.nsp-sec--line { border-top: 1px solid #e4decf; }
.nsp-wrap { width: 100%; max-width: 1180px; margin: 0 auto; padding: 0 24px; }
.nsp-narrow { max-width: 960px; }
.nsp-head { max-width: 780px; margin: 0 auto 30px; text-align: center; }
.nsp-h2 { font-family: 'Oswald', 'Inter', sans-serif; font-weight: 700; text-transform: uppercase; letter-spacing: .01em;
  font-size: clamp(28px, 4vw, 46px); line-height: 1.08; margin: 0 0 14px; color: inherit; }
.nsp-h2 em { font-style: normal; color: #d2632e; }
.nsp-sub { font-size: 16.5px; line-height: 1.65; color: #5c574c; margin: 0; }
.nsp-dark .nsp-sub { color: #b7b1a4; }
.nsp-kicker { font-family: 'Oswald', sans-serif; font-size: 13px; font-weight: 600; letter-spacing: .14em; text-transform: uppercase; color: #d2632e; margin: 0 0 10px; }
.nsp-sec img { display: block; width: 100%; height: auto; }
.nsp-btn { display: inline-block; background: #d2632e; color: #fff !important; font-family: 'Oswald', sans-serif; font-weight: 600;
  text-transform: uppercase; letter-spacing: .06em; font-size: 17px; padding: 15px 38px; border-radius: 4px; text-decoration: none; }
.nsp-btn:hover { background: #e2521d; color: #fff !important; }
.nsp-btn--ghost { background: transparent; color: #15140f !important; border: 2px solid #15140f; padding: 11px 26px; font-size: 15px; }
.nsp-btn--ghost:hover { background: #15140f; color: #f4f0e7 !important; }
.nsp-cta { text-align: center; margin-top: 38px; }
.nsp-cta__line { font-family: 'Oswald', sans-serif; font-weight: 600; text-transform: uppercase; font-size: clamp(19px, 2.4vw, 25px); margin: 0 0 16px; }
.nsp-trust { display: flex; justify-content: center; flex-wrap: wrap; gap: 8px 22px; margin: 14px 0 0; font-size: 13.5px; font-weight: 600; color: #5c574c; }
.nsp-dark .nsp-trust { color: #b7b1a4; }
.nsp-trust span::before { content: "\2713"; color: #d2632e; margin-right: 6px; font-weight: 800; }

/* 1) recenzije */
.nsp-rating { display: inline-flex; align-items: center; gap: 8px; margin: 0; font-size: 14.5px; font-weight: 600; color: #5c574c; }
.nsp-stars, .nsp-rv__stars { color: #d2632e; letter-spacing: 1px; }
.nsp-wall { column-count: 3; column-gap: 18px; }
.nsp-rv { break-inside: avoid; display: inline-block; width: 100%; margin: 0 0 18px; background: #fff; border: 1px solid #e4decf; border-radius: 10px; padding: 18px; }
.nsp-rv__top { display: flex; align-items: center; gap: 12px; margin-bottom: 12px; }
.nsp-rv__ava { flex: 0 0 46px; width: 46px; height: 46px; border-radius: 50%; overflow: hidden; }
.nsp-rv__ava img { width: 46px; height: 46px; object-fit: cover; }
.nsp-rv__who { display: flex; flex-direction: column; gap: 2px; }
.nsp-rv__name { font-weight: 800; font-size: 15px; }
.nsp-rv__stars { font-size: 13px; }
.nsp-rv__meta { font-size: 12.5px; color: #8a877f; }
.nsp-rv__ttl { font-weight: 800; font-size: 15.5px; margin: 0 0 6px; }
.nsp-rv__txt { font-size: 14.5px; line-height: 1.6; color: #2a2722; margin: 0 0 10px; }
.nsp-rv__ver { display: inline-block; font-size: 11.5px; font-weight: 700; color: #2f7d4f; background: #e8f3ec; border-radius: 999px; padding: 3px 9px; }
.nsp-rv__ugc { margin-top: 12px; border-radius: 8px; overflow: hidden; }
.nsp-more { text-align: center; margin: 10px 0 0; }

/* 2) mehanizam */

/* 2) temna sekcija: slika ob besedilu (NORIKS standard) */
.nsp-row2 { display: grid; grid-template-columns: 1fr 1fr; gap: 48px; align-items: center; margin: 0 0 34px; }
.nsp-row2__copy { text-align: left; }
.nsp-row2__copy .nsp-h2 { margin-bottom: 16px; }
.nsp-row2__copy .nsp-sub { margin: 0; }
.nsp-row2 .nsp-viz { margin: 0; max-width: none; }
@media (max-width: 899px) {
  .nsp-row2 { grid-template-columns: 1fr; gap: 24px; }
  .nsp-row2__copy { text-align: center; }
}
.nsp-viz { position: relative; max-width: 560px; margin: 0 auto 34px; border-radius: 12px; overflow: hidden; }
.nsp-cl { position: absolute; z-index: 3; width: 0; height: 0; pointer-events: none; }
.nsp-cl i, .nsp-cl b { position: absolute; display: block; }
.nsp-cl .dot { left: -6px; top: -6px; width: 12px; height: 12px; border-radius: 50%; background: #d2632e; box-shadow: 0 0 0 4px rgba(226,82,29,.28), 0 1px 4px rgba(0,0,0,.5); }
.nsp-cl .line { background: #d2632e; }
.nsp-cl .lbl { white-space: nowrap; background: #0e0e0c; color: #f4f0e7; border: 1px solid #d2632e; border-radius: 3px; padding: 6px 9px;
  font-family: 'Oswald', sans-serif; font-weight: 600; font-size: 12.5px; letter-spacing: .05em; text-transform: uppercase; }
.nsp-cl--right .line { left: 0; top: -1px; height: 2px; width: 30px; }
.nsp-cl--right .lbl { left: 30px; top: 0; transform: translateY(-50%); }
.nsp-cl--left .line { right: 0; top: -1px; height: 2px; width: 30px; }
.nsp-cl--left .lbl { right: 30px; top: 0; transform: translateY(-50%); }
.nsp-cl--down .line { left: -1px; top: 0; width: 2px; height: 26px; }
.nsp-cl--down .lbl { top: 26px; left: 0; transform: translateX(-50%); }
.nsp-cards { display: grid; grid-template-columns: repeat(3, minmax(0,1fr)); gap: 18px; }
.nsp-card { background: #1b1916; border: 1px solid #2a2722; border-top: 3px solid #d2632e; border-radius: 8px; padding: 22px; }
.nsp-card h3 { font-family: 'Oswald', sans-serif; font-weight: 600; text-transform: uppercase; font-size: 19px; letter-spacing: .03em; margin: 0 0 8px; color: #f4f0e7; }
.nsp-card p { font-size: 14.5px; line-height: 1.62; color: #b7b1a4; margin: 0; }

/* 3) reframe */
.nsp-quote { font-family: 'Oswald', sans-serif; font-weight: 600; text-transform: uppercase; text-align: center; font-size: clamp(19px, 2.6vw, 27px);
  line-height: 1.25; max-width: 720px; margin: 0 auto 28px; padding: 18px 0; border-top: 2px solid #d2632e; border-bottom: 2px solid #d2632e; }
.nsp-test { max-width: 760px; margin: 0 auto; }
.nsp-test__labels { display: grid; grid-template-columns: 1fr auto 1fr; align-items: center; gap: 12px; margin-bottom: 10px; }
.nsp-test__lbl { font-family: 'Oswald', sans-serif; font-weight: 600; text-transform: uppercase; letter-spacing: .05em; font-size: clamp(12px, 1.7vw, 15.5px); text-align: center; }
.nsp-test__lbl--bad { color: #5c574c; }
.nsp-test__lbl--good { color: #d2632e; }
.nsp-test__vs { font-family: 'Oswald', sans-serif; font-size: 13px; color: #8a877f; text-transform: uppercase; }
.nsp-test__img { border-radius: 10px; overflow: hidden; }
.nsp-test__cap { text-align: center; font-size: 14px; color: #5c574c; margin: 10px 0 0; font-style: italic; }
.nsp-bridge { text-align: center; font-size: 17px; line-height: 1.6; max-width: 680px; margin: 28px auto 0; }

/* 4) fit */
.nsp-fit { display: grid; grid-template-columns: 1.1fr 1fr; gap: 40px; align-items: center; }
.nsp-fit__demo { margin: 0; border-radius: 12px; overflow: hidden; background: #fff; }
.nsp-fit__demo figcaption { font-family: 'Oswald', sans-serif; font-weight: 600; text-transform: uppercase; letter-spacing: .04em; font-size: 15px;
  text-align: center; padding: 12px 14px; background: #15140f; color: #f4f0e7; }
.nsp-chips { display: flex; flex-direction: column; gap: 16px; }
.nsp-chip { display: flex; gap: 14px; background: #fff; border: 1px solid #e4decf; border-radius: 10px; padding: 18px; }
.nsp-chip__ico { flex: 0 0 34px; height: 34px; border-radius: 50%; background: #d2632e; color: #fff; font-family: 'Oswald', sans-serif; font-weight: 700;
  display: flex; align-items: center; justify-content: center; }
.nsp-chip h3 { font-family: 'Oswald', sans-serif; font-weight: 600; text-transform: uppercase; font-size: 17px; letter-spacing: .03em; margin: 2px 0 6px; }
.nsp-chip p { font-size: 14.5px; line-height: 1.6; color: #5c574c; margin: 0; }

/* 5) usporedba */
.nsp-cmp { background: #fff; border: 1px solid #e4decf; border-radius: 12px; overflow-x: auto; }
.nsp-cmp table { width: 100%; min-width: 560px; border-collapse: collapse; margin: 0 !important; }
.nsp-cmp th, .nsp-cmp td { padding: 14px 12px; text-align: center; border-bottom: 1px solid #efeadf; font-size: 14.5px; }
.nsp-cmp tr:last-child th, .nsp-cmp tr:last-child td { border-bottom: 0; }
.nsp-cmp thead th { font-family: 'Oswald', sans-serif; font-weight: 600; text-transform: uppercase; letter-spacing: .04em; font-size: 14px; color: #5c574c; }
.nsp-cmp th[scope="row"] { text-align: left; font-weight: 700; width: 40%; }
.nsp-cmp__us { background: #fbf1ea; }
.nsp-cmp thead .nsp-cmp__us { color: #d2632e; }
.nsp-yes { color: #d2632e; font-weight: 800; font-size: 17px !important; }
.nsp-no  { color: #b7b1a4; font-weight: 800; }
.nsp-mid { color: #8a877f; font-weight: 800; }
.nsp-cmp__cost td { font-size: 13.5px; font-weight: 600; color: #5c574c; }
.nsp-cmp__cost td.nsp-cmp__us { color: #d2632e; font-weight: 800; }
.nsp-cmp__foot { font-size: 12.5px; color: #8a877f; margin: 10px 0 0; text-align: right; }
.nsp-concede { text-align: center; font-size: 15.5px; line-height: 1.65; color: #5c574c; max-width: 680px; margin: 22px auto 0; font-style: italic; }

/* 6) tko stoji iza */
.nsp-fdr { display: grid; grid-template-columns: .85fr 1.15fr; gap: 52px; align-items: center; }
.nsp-fdr__media { border-radius: 12px; overflow: hidden; }
.nsp-fdr .nsp-h2 { text-align: left; font-size: clamp(26px, 3.4vw, 40px); }
.nsp-fdr .nsp-sub { margin-bottom: 20px; }
.nsp-fdr__body p { font-size: 15.5px; line-height: 1.7; color: #d9d4c8; margin: 0 0 14px; }
.nsp-fdr__quote { margin: 22px 0; padding: 4px 0 4px 18px; border-left: 3px solid #d2632e; font-family: 'Oswald', sans-serif; font-weight: 500;
  text-transform: uppercase; font-size: clamp(18px, 2.2vw, 22px); line-height: 1.3; color: #f4f0e7; }
.nsp-fdr__acct { font-size: 15.5px; font-weight: 700; color: #f4f0e7; margin: 0; }

@media (max-width: 980px) {
  .nsp-wall { column-count: 2; }
  .nsp-cards { grid-template-columns: 1fr; }
  .nsp-fit, .nsp-fdr { grid-template-columns: 1fr; gap: 28px; }
}
@media (max-width: 600px) {
  .nsp-wrap { padding: 0 16px; }
  .nsp-wall { column-count: 1; }
  .nsp-btn { display: block; width: 100%; text-align: center; }
  .nsp-cl .lbl { font-size: 10.5px; padding: 5px 7px; white-space: normal; width: 84px; line-height: 1.2; }
  .nsp-cl--right .line, .nsp-cl--left .line { width: 18px; }
  .nsp-cl--right .lbl { left: 18px; }
  .nsp-cl--left .lbl { right: 18px; }
  .nsp-cl--down .line { height: 16px; }
  .nsp-cl--down .lbl { top: 16px; }
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
.woocommerce-product-details__short-description .nsp-tick {
  position: absolute !important; left: 0 !important; top: 1px !important;
  width: 21px; height: 21px; border-radius: 50%;
  background: #2f9e5f !important; color: #fff !important;
  font-size: 12px !important; font-weight: 800 !important; line-height: 21px !important;
  text-align: center !important; display: inline-block !important; }
.woocommerce-product-details__short-description p:first-of-type { font-size: 16px; line-height: 1.55; }
</style>
