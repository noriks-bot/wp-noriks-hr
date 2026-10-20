<?php
/**
 * product-bottom: NORIKS Bracelet — narukvica od hematita (orto-bracelet).
 * Original: myhematix.com/products/hematix-strength-band — struktura je 1:1 z originalom
 * (isto stevilo sekcij, isti vrstni red, ista ozadja, iste slike), besedila prevedena v hrvascino.
 *   1) Valovit razdelilnik (bela -> #f6f6f6)
 *   2) HEMATIT: TAJNA RATNIKA (naslov)
 *   3) Probudite svoju iskonsku oštrinu (#f6f6f6, animirana slika 35 % levo, besedilo 65 %, 2 oznaki z ikonama)
 *   4) Kako djeluje? (temno modri radialni preliv, animirana slika levo, 4 ikone z besedilom desno)
 *   5) Valovit razdelilnik (obrnjen)
 *   6) 4.9 od 5 (10.000+ recenzija) — Vjeruju joj muškarci koji je nose svaki dan
 *   7) Drsnik 3 mnenj s slikami (napisi na slikah prevedeni)
 *   8) Muškost je na udaru (#f6f6f6, naslov + 3 kartice)
 *   9) Ostanite usredotočeni u kaotičnom svijetu (slika levo, besedilo desno)
 *  10) Vaša snaga nikad nije nestala. Čeka. (besedilo levo, slika desno)
 *  11) Tekoci trak 4 fotografij
 *  12) Stvarni rezultati (temno modri okvir, 4 kartice z obroci 90/87/82/93 %)
 *  13) NORIKS narukvice vs obične narukvice (primerjalna tabela)
 * FAQ originala (za 13) je v reviews.php ($bracelet_faq), mnenja v auto_reviews/HR_bracelet.php.
 * Promo pasica originala (vrstica na vrhu: "Halloween Sale — BUY 1 GET 1 FREE — 50% off · Today only" + odstevanje) je na istem mestu — cisto na vrhu.
 * Nakupna skatla kot na originalu: nad naslovom "#1 Bestseller 2026" + ocena 4.9 + "najnizja cena leta"; pod naslovom 4 oznake z ikonami in "93 % prodano";
 * pod ponudami datum dostave; pod gumbom opozorilo o zalogi, 30 dni za povrat, 3 harmonike (Moc hematita / Velicina i specifikacije /
 * Dostava i povrat), "Mi smo original" in mnenje Mark S.
 * Izpusceno: glava trgovine, trak logotipov "As seen in" (CNN, CBS ...), darilo "Supercar Driving Experience" (NORIKS ga nima), noga.
 * Slike: img/bracelet/ (logotip konkurenta odstranjen, napisi prevedeni v hrvascino).
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$nbr      = get_template_directory_uri() . '/img/bracelet/';
$nbr_path = get_template_directory() . '/img/bracelet/';
$nbr_img  = function( $file, $alt, $extra = '' ) use ( $nbr, $nbr_path ) {
  if ( ! file_exists( $nbr_path . $file ) ) { return ''; }
  return '<img src="' . esc_url( $nbr . $file ) . '" alt="' . esc_attr( $alt ) . '" loading="lazy"' . $extra . '>';
};
$nbr_ms = function( $name ) { return '<span class="nbr-ms" aria-hidden="true">' . esc_html( $name ) . '</span>'; };

$nbr_wave = '<svg viewBox="0 24 150 28" preserveAspectRatio="none" aria-hidden="true"><defs><path id="nbr-gw" d="M-160 44c30 0 58-18 88-18s58 18 88 18 58-18 88-18 58 18 88 18v44h-352z"/></defs>'
  . '<g class="nbr-px1"><use href="#nbr-gw" x="50" y="3" fill="currentColor" opacity=".7"/></g><g class="nbr-px2"><use href="#nbr-gw" x="50" y="0" fill="currentColor" opacity=".5"/></g>'
  . '<g class="nbr-px3"><use href="#nbr-gw" x="50" y="9" fill="currentColor" opacity=".3"/></g><g class="nbr-px4"><use href="#nbr-gw" x="50" y="6" fill="currentColor"/></g></svg>';

$nbr_star  = '<svg viewBox="0 0 24 24" aria-hidden="true"><rect width="24" height="24" fill="#00b779"/><path fill="#fff" d="M12 4.2l2.2 5.1 5.5.4-4.2 3.6 1.3 5.4L12 15.8l-4.8 2.9 1.3-5.4-4.2-3.6 5.5-.4z"/></svg>';
$nbr_stars = '<span class="nbr-tp" aria-label="5 od 5 zvjezdica">' . str_repeat( $nbr_star, 5 ) . '</span>';
$nbr_ok = '<svg viewBox="0 0 24 24" aria-hidden="true"><circle cx="12" cy="12" r="12" fill="#0bc169"/><path d="M7 12.4l3.2 3.2L17.2 8.6" fill="none" stroke="#fff" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round"/></svg>';
$nbr_no = '<svg viewBox="0 0 24 24" aria-hidden="true"><circle cx="12" cy="12" r="12" fill="#ff3a3a"/><path d="M8 8l8 8M16 8l-8 8" fill="none" stroke="#fff" stroke-width="2.6" stroke-linecap="round"/></svg>';

/* 4) Kako djeluje — 1:1 z originala */
$nbr_how = array(
  array( 'bolt', 'Osjetite promjenu već za nekoliko dana', 'Jasnije razmišljanje, stabilna energija i jači osjećaj kontrole — od jutra do večeri.' ),
  array( 'pill', 'Probijte se kroz moderni šum', 'Ekrani i stres raspršuju vaš fokus. NORIKS narukvica drži vas usredotočenima, prizemljenima i koncentriranima.' ),
  array( 'pill', 'Stvorena za mušku izvedbu', 'Vrhunski hematit koji podržava vaš fokus, disciplinu i motivaciju na poslu, treningu i u životu.' ),
  array( 'exercise', 'Prizemljena svakodnevna ravnoteža', 'Jednostavan ritual koji vašem danu donosi mir, stabilnost i mentalnu jasnoću.' ),
);

/* 7) drsnik mnenj — 1:1 z originala */
$nbr_testi = array(
  array( 'br-rv-1-hr.webp', '„Svaki dan mi izoštrava fokus.“', 'Nisam bio siguran da narukvica može nešto promijeniti, ali hematit me razuvjerio. Na poslu sam usredotočeniji i puno manje rastresen. I kvaliteta je odlična.', 'Ethan M.' ),
  array( 'br-rv-2-hr.webp', '„Upravo poticaj koji mi je trebao.“', 'Energija i jasnoća bile su mi posvuda. S hematitom imam više kontrole i opet se osjećam kao svoj. Jednostavno, udobno i stvarno korisno.', 'Marcus D.' ),
  array( 'br-rv-3-hr.webp', '„Uravnoteženiji, samouvjereniji.“', 'Počeo sam je nositi svaki dan i primijetio pravu promjenu. Smireniji sam, prizemljeniji i raspoloženje mi je stabilnije tijekom dana. Izgleda odlično i djeluje vrhunski.', 'Logan P.' ),
);

/* 8) Muškost je na udaru */
$nbr_pain = array(
  array( 'Malo energije, bez motivacije', 'Iscrpljeni do 14 sati. Kava više ne djeluje kao nekad. Energija koju ste imali s 25? Daleka uspomena.' ),
  array( 'Slabe odluke', 'Misli su vam svugdje osim tamo gdje trebaju biti. Odluke postaju teže. Fokus se čini nemogućim.' ),
  array( 'Samopouzdanje blijedi', 'Manje samopouzdanja. Manje oštrine. Manje <em>vas</em>. I duboko u sebi znate da nešto nije u redu.' ),
);

/* 12) statistika */
$nbr_stats = array(
  array( 90, 'Osjećaju se prizemljenije', 'Većina muškaraca navodi jači osjećaj smirenosti i usredotočenosti tijekom dana.' ),
  array( 87, 'Oštriji fokus', 'Korisnici kažu da jasnije razmišljaju i da su mentalno prisutniji.' ),
  array( 82, 'Više svakodnevne energije', 'Muškarci navode da se od jutra do večeri osjećaju stabilnije i uravnoteženije.' ),
  array( 93, 'Obnovljeno samopouzdanje', 'Korisnici se osjećaju usklađenije, imaju više kontrole i opet se osjećaju kao svoji.' ),
);

/* 13) primerjava (true = kljukica, false = krizec) */
$nbr_cmp = array(
  array( 'Osmišljena za udobnost cijeli dan', true, false ),
  array( 'Vrhunski hematit bogat željezom', true, false ),
  array( 'Vodootporna i izdržljiva', true, false ),
  array( 'Minimalistički muški dizajn', true, false ),
  array( 'Skupa', false, true ),
);
?>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Fjalla+One&family=Plus+Jakarta+Sans:ital,wght@0,400;0,600;0,700;0,800;1,400;1,700&display=swap">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=arrow_forward,bolt,exercise,mindfulness,pill&display=block">

<div class="nbr">

<!-- 1) valovit razdelilnik -->
<section class="nbr-sec nbr-wave" aria-hidden="true"><?php echo $nbr_wave; ?></section>

<!-- 2) HEMATIT: TAJNA RATNIKA -->
<section class="nbr-sec nbr-sec--title">
  <div class="nbr-wrap nbr-center"><h2 class="nbr-h1">HEMATIT: TAJNA RATNIKA</h2></div>
</section>

<!-- 3) Probudite svoju iskonsku oštrinu -->
<section class="nbr-sec nbr-sec--grey">
  <div class="nbr-wrap nbr-iwt nbr-iwt--35">
    <div class="nbr-iwt__media"><?php echo $nbr_img( 'br-kamen.webp', 'Ruka s NORIKS narukvicom drži sirovi hematit' ); ?></div>
    <div class="nbr-iwt__txt">
      <h2 class="nbr-h2"><em>Probudite svoju iskonsku oštrinu</em></h2>
      <p><strong>Spartanski ratnici</strong> nikad je nisu skidali. <strong>Samurajski gospodari rata</strong> s njom su bili pokopani. <strong>Egipatski kraljevi</strong> tražili su je u svojim grobnicama.</p>
      <p>Znali su ono što su moderni muškarci zaboravili.</p>
      <p><strong>NORIKS narukvica</strong> donosi <strong>čisti magnetski hematit</strong> — drevni kamen <strong>jasnoće, dominacije i snažne prisutnosti</strong>. Bez tableta. Bez nuspojava. Samo <strong>30 g magnetske snage</strong> koja tiho djeluje na vašoj koži — <strong>osjetite je čim dotakne vaše zapešće</strong>.</p>
      <p>Ovo nije nakit. <strong>Ovo je nepoštena prednost.</strong></p>
      <p><em>„Drugi tjedan: oštriji fokus, bolji san i motivacija mi je kao u dvadesetima. Djevojka misli da nešto uzimam.“</em><br>— <strong>Ryan M., 38</strong></p>
      <div class="nbr-chips">
        <p class="nbr-chip"><?php echo $nbr_ms( 'bolt' ); ?><span><strong>Prirodno potiče testosteron</strong></span></p>
        <p class="nbr-chip"><?php echo $nbr_ms( 'mindfulness' ); ?><span><strong>Vraća samopouzdanje</strong></span></p>
      </div>
    </div>
  </div>
</section>

<!-- 4) Kako djeluje? -->
<section class="nbr-sec nbr-sec--blue">
  <div class="nbr-wrap">
    <div class="nbr-center nbr-how__head">
      <h2 class="nbr-h2 nbr-h2--light">Kako djeluje?</h2>
      <p><strong>NORIKS narukvica</strong> prenosi <strong>drevnu snagu hematita</strong> — magnetskog kamena bogatog željezom koji su ratnici nekoć štovali zbog njegovog <strong>prizemljujućeg</strong> i <strong>okrepljujućeg</strong> djelovanja.</p>
    </div>
    <div class="nbr-how">
      <div class="nbr-how__media"><?php echo $nbr_img( 'br-valovi.webp', 'NORIKS narukvica od hematita na zapešću' ); ?></div>
      <div class="nbr-how__list">
        <?php foreach ( $nbr_how as $h ) : ?>
        <div class="nbr-how__item">
          <h3><span class="nbr-how__ic"><?php echo $nbr_ms( $h[0] ); ?></span><span><?php echo esc_html( $h[1] ); ?></span></h3>
          <p><?php echo esc_html( $h[2] ); ?></p>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>

<!-- 5) valovit razdelilnik (obrnjen) -->
<section class="nbr-sec nbr-wave nbr-wave--flip" aria-hidden="true"><?php echo $nbr_wave; ?></section>

<!-- 6) ocena -->
<section class="nbr-sec nbr-sec--rating">
  <div class="nbr-wrap nbr-center">
    <p class="nbr-rating"><?php echo $nbr_stars; ?>&nbsp;<strong>4.9</strong>&nbsp;od 5 <em>(10.000+ recenzija)</em></p>
    <h2 class="nbr-h2">Vjeruju joj muškarci koji je nose svaki dan</h2>
  </div>
</section>

<!-- 7) drsnik mnenj -->
<section class="nbr-sec nbr-sec--testi">
  <div class="nbr-wrap">
    <div class="nbr-slider" data-nbr-slider>
      <?php foreach ( $nbr_testi as $t ) : ?>
      <article class="nbr-tcard">
        <div class="nbr-tcard__img"><?php echo $nbr_img( $t[0], 'NORIKS narukvica — iskustvo kupca ' . $t[3] ); ?></div>
        <div class="nbr-tcard__stars"><?php echo $nbr_stars; ?></div>
        <div class="nbr-tcard__txt"><p><strong><?php echo esc_html( $t[1] ); ?></strong></p><p><?php echo esc_html( $t[2] ); ?></p></div>
        <span class="nbr-tcard__au">– <?php echo esc_html( $t[3] ); ?></span>
      </article>
      <?php endforeach; ?>
    </div>
    <div class="nbr-dots" data-nbr-dots><?php foreach ( $nbr_testi as $i => $t ) : ?><button type="button" aria-label="Recenzija <?php echo (int) $i + 1; ?>"<?php echo $i ? '' : ' class="is-on"'; ?>></button><?php endforeach; ?></div>
  </div>
</section>

<!-- 8) Muškost je na udaru -->
<section class="nbr-sec nbr-sec--grey">
  <div class="nbr-wrap nbr-pain">
    <div class="nbr-pain__head"><h2 class="nbr-h2"><em>Muškost je na udaru</em></h2></div>
    <?php foreach ( $nbr_pain as $pn ) : ?>
    <div class="nbr-pain__card">
      <h3><?php echo $nbr_ms( 'arrow_forward' ); ?><span><?php echo esc_html( $pn[0] ); ?></span></h3>
      <p><?php echo wp_kses( $pn[1], array( 'em' => array() ) ); ?></p>
    </div>
    <?php endforeach; ?>
  </div>
</section>

<!-- 9) Ostanite usredotočeni u kaotičnom svijetu -->
<section class="nbr-sec">
  <div class="nbr-wrap nbr-iwt">
    <div class="nbr-iwt__media"><?php echo $nbr_img( 'br-g-6.webp', 'Stisnuta šaka s NORIKS narukvicom od hematita' ); ?></div>
    <div class="nbr-iwt__txt">
      <h2 class="nbr-h2">Ostanite usredotočeni u kaotičnom svijetu</h2>
      <p>Obavijesti. Rokovi. Beskrajna buka. Osjećate se raspršeno, iscrpljeno, manje kao muškarac za kojeg znate da jeste. Taj oštri fokus? Blijedi. Ta stabilna energija? Nestane do podneva.<br><br>Ne treba vam još jedan dodatak prehrani. Još jedan „biohack“. Još jedna stvar koju morate zapamtiti.</p>
      <p><em>Treba vam sidro.</em></p>
    </div>
  </div>
</section>

<!-- 10) Vaša snaga nikad nije nestala. Čeka. -->
<section class="nbr-sec">
  <div class="nbr-wrap nbr-iwt nbr-iwt--rev">
    <div class="nbr-iwt__media"><?php echo $nbr_img( 'br-g-3.webp', 'Muškarac u bijeloj košulji s NORIKS narukvicom' ); ?></div>
    <div class="nbr-iwt__txt">
      <h2 class="nbr-h2">Vaša snaga nikad nije nestala. Čeka.</h2>
      <p>Prava snaga je tiha.</p>
      <p>To je postojani mir kad drugi paničare. Fokus koji se ne pokoleba.</p>
      <p>Hematit su generacijama nosili muškarci koji su razumjeli: prava snaga počinje iznutra. Ovo je vaše sidro.</p>
    </div>
  </div>
</section>

<!-- 11) tekoci trak fotografij -->
<section class="nbr-sec nbr-ticker" aria-label="Fotografije NORIKS narukvice">
  <div class="nbr-ticker__track">
    <?php for ( $r = 0; $r < 4; $r++ ) : for ( $i = 1; $i <= 4; $i++ ) : ?>
    <div class="nbr-ticker__it"<?php echo $r ? ' aria-hidden="true"' : ''; ?>><?php echo $nbr_img( 'br-t-' . $i . '.webp', $r ? '' : 'NORIKS narukvica od hematita — fotografija ' . $i ); ?></div>
    <?php endfor; endfor; ?>
  </div>
</section>

<!-- 12) Stvarni rezultati -->
<section class="nbr-sec nbr-sec--stats">
  <div class="nbr-wrap">
    <div class="nbr-stats">
      <div class="nbr-center">
        <h2 class="nbr-stats__h">Stvarni rezultati koje navode korisnici hematita</h2>
        <p class="nbr-stats__sub">Više od deset tisuća muškaraca uvrstilo je hematit u svoju svakodnevnu rutinu. Evo što primjećuju nakon redovitog nošenja.</p>
      </div>
      <div class="nbr-stats__grid">
        <?php foreach ( $nbr_stats as $st ) : ?>
        <div class="nbr-stat">
          <div class="nbr-stat__ring" data-nbr-pct="<?php echo (int) $st[0]; ?>">
            <svg viewBox="0 0 120 120" aria-hidden="true"><circle cx="60" cy="60" r="52" class="nbr-stat__bg"/><circle cx="60" cy="60" r="52" class="nbr-stat__fg"/></svg>
            <span class="nbr-stat__num">0%</span>
          </div>
          <h3><?php echo esc_html( $st[1] ); ?></h3>
          <p><?php echo esc_html( $st[2] ); ?></p>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>

<!-- 13) primerjalna tabela -->
<section class="nbr-sec nbr-sec--cmp">
  <div class="nbr-wrap nbr-cmp">
    <div class="nbr-cmp__content">
      <h2 class="nbr-cmp__h"><strong>NORIKS </strong><em><strong>narukvice</strong></em> <em>vs obične narukvice</em></h2>
      <p class="nbr-cmp__txt">Tražite nešto što stvarno podržava vašu energiju, fokus i samopouzdanje?<br><br>NORIKS koristi vrhunski magnetski hematit — gotovo 70 % čistog željeza, koji se nosi izravno na koži — kako biste se od trenutka kad ga stavite osjećali prizemljenije, usredotočenije i s više kontrole. Bez tableta, bez rutina, bez truda.</p>
    </div>
    <div class="nbr-cmp__table" role="table" aria-label="Usporedba NORIKS narukvice i običnih narukvica">
      <div class="nbr-cmp__row nbr-cmp__row--head" role="row"><div role="columnheader"></div><div class="is-active" role="columnheader"><h3>NORIKS</h3></div><div role="columnheader"><h3>Ostale</h3></div></div>
      <?php foreach ( $nbr_cmp as $c ) : ?>
      <div class="nbr-cmp__row" role="row">
        <div role="rowheader"><h3><?php echo esc_html( $c[0] ); ?></h3></div>
        <div class="is-active" role="cell"><?php echo $c[1] ? $nbr_ok : $nbr_no; ?><span class="screen-reader-text"><?php echo $c[1] ? 'Da' : 'Ne'; ?></span></div>
        <div role="cell"><?php echo $c[2] ? $nbr_ok : $nbr_no; ?><span class="screen-reader-text"><?php echo $c[2] ? 'Da' : 'Ne'; ?></span></div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

</div>

<!-- nakupna skatla: vsebina originala, premaknjena na isto mesto z JS -->
<template id="nbr-tpl-top">
  <div class="nbr-bb-top">
    <div class="nbr-best"><div class="nbr-best__badge">#1</div><div><p class="nbr-best__t">Najprodavanija u 2026.</p><p class="nbr-best__s">Najsnažnija narukvica od hematita na tržištu</p></div></div>
    <div class="nbr-tpr"><?php echo $nbr_star; ?><span class="nbr-tpr__ex">Odlično</span><span class="nbr-tpr__sc">4.9 od 5</span></div>
    <div class="nbr-lowp"><span class="nbr-lowp__dot"></span><p>NAJNIŽA CIJENA GODINE | NISKE ZALIHE</p></div>
  </div>
</template>
<template id="nbr-tpl-chips">
  <div class="nbr-bb-chips">
    <p><?php echo $nbr_img( 'br-ic-1.webp', '' ); ?><span>Izoštrava um</span></p>
    <p><?php echo $nbr_img( 'br-ic-2.webp', '' ); ?><span>Prirodno potiče testosteron</span></p>
    <p><?php echo $nbr_img( 'br-ic-3.webp', '' ); ?><span>Vraća samopouzdanje i libido</span></p>
    <p><?php echo $nbr_img( 'br-ic-4.webp', '' ); ?><span>Podržava zdrav metabolizam</span></p>
  </div>
  <div class="nbr-sold" data-nbr-sold="93"><div class="nbr-sold__track" aria-hidden="true"><span class="nbr-sold__fill"></span></div><span class="nbr-sold__l"><b>0</b>% prodano</span></div>
</template>
<template id="nbr-tpl-ship">
  <div class="nbr-ship"><span class="nbr-ship__dot"></span><span>Ubrzana dostava <b class="nbr-ship__date"></b></span></div>
</template>
<template id="nbr-tpl-after">
  <div class="nbr-bb-after">
    <div class="nbr-warn"><div class="nbr-warn__ic"><span>i</span></div><p><strong>UPOZORENJE: niske zalihe</strong> — ovaj je proizvod prošle godine bio rasprodan <strong>12 puta</strong>. Iskoristite <strong>ograničenu akciju</strong> i kupite sada. Narudžbom sada izbjeći ćete buduće nestašice.</p></div>
    <div class="nbr-guar">
      <div class="nbr-guar__ic"><svg viewBox="0 0 48 48" aria-hidden="true"><path d="M24 4l16 6v12c0 10-7 18.5-16 22C15 40.5 8 32 8 22V10z" fill="#105a85"/><path d="M16.5 24.5l5 5 10-11" fill="none" stroke="#fff" stroke-width="3.4" stroke-linecap="round" stroke-linejoin="round"/></svg></div>
      <div><h3>30 dana za povrat</h3><p>Isprobajte je 30 dana i vidite kako se osjećate. Ako niste zadovoljni, imate pravo na povrat u roku od 30 dana. Bez komplikacija.</p></div>
    </div>
    <div class="nbr-faq">
      <details class="nbr-faq__it">
        <summary><span>Snaga hematita</span><i>+</i></summary>
        <div class="nbr-faq__a">
          <p><strong>Kamen koji je stvarao carstva</strong></p>
          <p>Spartanski ratnici stavljali su hematit oko zapešća prije polaska u bitku. Samurajski gospodari rata nosili su ga kao talisman nepobjedivosti. Keltski poglavice prenosili su ga s koljena na koljeno kao svetu obiteljsku dragocjenost.</p>
          <p>Ti su muškarci razumjeli istinu koju je vrijeme zakopalo.</p>
          <p>Hematit — od grčke riječi <em>haima</em>, što znači krv — sadrži najveću koncentraciju željeza od svih prirodnih kamena. Gotovo 70 % kamena čini čisto željezo — isti element koji teče vašom krvlju. Ova gusta mineralna jezgra stvara suptilno magnetsko polje za koje su drevne civilizacije vjerovale da usklađuje tijelo sa sirovom snagom Zemlje. Ratnici su ga zvali „kamenom nepobjedivosti“ jer su se oni koji su ga nosili činili nedodirljivima.</p>
          <p><strong>Ono što ratnici oduvijek znaju:</strong></p>
          <ul>
            <li><strong>Nepokolebljiv temelj:</strong> dubok osjećaj stabilnosti kad se sve oko vas mijenja</li>
            <li><strong>Britak um:</strong> mentalna preciznost koja utišava ometanja</li>
            <li><strong>Neumorna motivacija:</strong> stabilna, čista energija bez padova</li>
            <li><strong>Tihi autoritet:</strong> prisutnost zbog koje vas drugi slušaju i prije nego što progovorite</li>
          </ul>
          <p>Osjetite je čim dotakne vaše zapešće — hladnu težinu čvrstog željeza koja koža uz kožu naliježe na vaš puls. Ništa za gutanje, ništa za pamćenje. Današnja istraživanja odjekuju drevnom mudrošću — magnetski minerali djeluju s našim bioelektričnim poljem na načine koje tek počinjemo mjeriti. Isti kamen koji je smirivao ruke prije borbi mačevima danas smiruje živce prije važnih trenutaka.</p>
          <p><strong>Drevna snaga. Moderna prednost.</strong></p>
        </div>
      </details>
      <details class="nbr-faq__it">
        <summary><span>Veličina i specifikacije</span><i>+</i></summary>
        <div class="nbr-faq__a">
          <ul>
            <li><strong>Jedna veličina za sve muškarce:</strong> prilagodljiva od 19 do 21,5 cm (7,5"–8,5") | Osmišljena da pristaje gotovo svakom zapešću</li>
            <li><strong>100 % autentični hematit:</strong> ručno odabrano magnetsko kamenje AAA kvalitete, gotovo 70 % čistog željeza | Bez punila, bez imitacija</li>
            <li><strong>Osjetna težina:</strong> 30 g čvrste prisutnosti | Perle od 8 mm koje privlače pažnju</li>
            <li><strong>Besprijekorna izrada:</strong> visokosjajna polirana površina | Otporna na svakodnevno nošenje i ogrebotine</li>
            <li><strong>Nosite je posvuda:</strong> zaobljena unutarnja strana | Bez iritacije od jutra do ponoći</li>
          </ul>
        </div>
      </details>
      <details class="nbr-faq__it">
        <summary><span>Dostava i povrat</span><i>+</i></summary>
        <div class="nbr-faq__a">
          <p>Svaku narudžbu šaljemo u roku od 24 sata iz našeg skladišta.</p>
          <ul>
            <li><strong>Besplatna dostava</strong> za narudžbe iznad 70 €</li>
            <li><strong>Pravo na povrat</strong> u roku od 30 dana</li>
          </ul>
        </div>
      </details>
    </div>
    <div class="nbr-orig">
      <div class="nbr-orig__badge"><span>🔒</span>Ekskluzivno u NORIKS trgovini</div>
      <h3>Mi smo original</h3>
      <p class="nbr-orig__d">Jedina <strong>službena NORIKS</strong> narukvica od hematita — <strong>vrhunska kvaliteta</strong> bez kompromisa.</p>
      <p class="nbr-orig__w">Čuvajte se Amazona i drugih stranica koje prodaju jeftine kopije koje izgledaju slično, ali ne djeluju.</p>
    </div>
    <div class="nbr-cr">
      <div class="nbr-cr__av"><?php echo $nbr_img( 'br-mark.webp', 'Mark S.' ); ?></div>
      <div>
        <div class="nbr-cr__head"><span class="nbr-cr__name">Mark S.</span><span class="nbr-cr__stars" aria-label="5 od 5 zvjezdica">★★★★★</span></div>
        <p>„Imam 42 godine i energija mi je već neko vrijeme padala. Prije otprilike 3 tjedna počeo sam nositi svoju NORIKS narukvicu i iskreno? Osjećam se kao da sam vratio 5 godina. Više motivacije tijekom dana, puno manje popodnevnih padova. A recimo samo da je i supruga primijetila razliku noću. Nisam očekivao taj bonus, ali ne žalim se.“</p>
      </div>
    </div>
  </div>
</template>

<script>
(function(){
  function tpl(id){ var t = document.getElementById(id); return t ? t.content.cloneNode(true) : null; }

  /* promo pasica originala (na vrhu): "Halloween rasprodaja — KUPI 1, DOBIJ 1 GRATIS — 50 % popusta · samo danas" + odstevanje do polnoci */
  if (!document.querySelector('.nbr-annbar')) {
    var bar = document.createElement('div');
    bar.className = 'nbr-annbar'; bar.setAttribute('role', 'region'); bar.setAttribute('aria-label', 'Obavijest');
    bar.innerHTML = '<div class="nbr-annbar__in"><span class="nbr-annbar__main"><span class="nbr-annbar__badge">'
      + '<svg viewBox="0 0 24 24" aria-hidden="true"><path fill="currentColor" d="M13.5 1.5s1 3-1.5 6c-2 2.4-4.5 3.8-4.5 7.5a4.5 4.5 0 0 0 9 0c0-1.5-.6-2.6-1.2-3.4.2 1.5-.6 2.6-1.6 2.6 0 0 2.3-4.2-.2-12.7z"/></svg>Halloween rasprodaja</span>'
      + '<span class="nbr-annbar__offer"><b>KUPI 1, DOBIJ 1 <em>GRATIS</em></b><small>50 % popusta · samo danas</small></span></span>'
      + '<span class="nbr-annbar__clock" role="timer" aria-label="Završava za"><span class="nbr-annbar__ends">Završava za</span><span class="nbr-annbar__timer">'
      + '<span class="nbr-annbar__box"><span class="v" data-h>--</span><span class="l">SATI</span></span><span class="nbr-annbar__col">:</span>'
      + '<span class="nbr-annbar__box"><span class="v" data-m>--</span><span class="l">MIN</span></span><span class="nbr-annbar__col">:</span>'
      + '<span class="nbr-annbar__box"><span class="v" data-s>--</span><span class="l">SEK</span></span></span></span></div>';
    document.body.insertBefore(bar, document.body.firstChild);
    var H = bar.querySelector('[data-h]'), M = bar.querySelector('[data-m]'), S = bar.querySelector('[data-s]');
    var pad = function(n){ return (n < 10 ? '0' : '') + n; };
    var tick = function(){ var n = new Date(), e = new Date(n); e.setHours(24, 0, 0, 0); var d = Math.max(0, Math.floor((e - n) / 1000));
      H.textContent = pad(Math.floor(d / 3600)); M.textContent = pad(Math.floor(d % 3600 / 60)); S.textContent = pad(d % 60); };
    tick(); setInterval(tick, 1000);
  }

  function buybox(){
    if (document.querySelector('.nbr-bb-top')) return;
    var title = document.querySelector('.product_title');
    if (title) { var top = tpl('nbr-tpl-top'); if (top) title.parentNode.insertBefore(top, title); }
    var sd = document.querySelectorAll('.woocommerce-product-details__short-description');
    sd.forEach(function(el){ var c = tpl('nbr-tpl-chips'); if (c) el.appendChild(c); });
    var bs = document.getElementById('bundle-selector');
    if (bs) {
      var sh = tpl('nbr-tpl-ship'); bs.parentNode.insertBefore(sh, bs.nextSibling);
      var dd = new Date(); dd.setDate(dd.getDate() + 2);
      var mj = ['siječnja','veljače','ožujka','travnja','svibnja','lipnja','srpnja','kolovoza','rujna','listopada','studenoga','prosinca'];
      document.querySelectorAll('.nbr-ship__date').forEach(function(b){ b.textContent = dd.getDate() + '. ' + mj[dd.getMonth()]; });
    }
    var form = document.querySelector('form.cart');
    if (form) { var af = tpl('nbr-tpl-after'); form.parentNode.insertBefore(af, form.nextSibling); }
    /* "93 % prodano" — animiran trak kot na originalu */
    document.querySelectorAll('.nbr-sold').forEach(function(w){
      var t = parseInt(w.getAttribute('data-nbr-sold'), 10) || 0, f = w.querySelector('.nbr-sold__fill'), b = w.querySelector('b'), v = 0;
      setTimeout(function(){ f.style.width = t + '%'; }, 150);
      var iv = setInterval(function(){ v = Math.min(t, v + 3); b.textContent = v; if (v >= t) clearInterval(iv); }, 25);
    });
  }
  if (document.readyState === 'loading') { document.addEventListener('DOMContentLoaded', buybox); } else { buybox(); }

  /* drsnik mnenj (mobilno: vodoravni drsnik s pikami) */
  var sl = document.querySelector('[data-nbr-slider]'), dots = document.querySelectorAll('[data-nbr-dots] button');
  if (sl && dots.length) {
    dots.forEach(function(b, i){ b.addEventListener('click', function(){ var c = sl.children[i]; if (c) sl.scrollTo({ left: c.offsetLeft - sl.offsetLeft, behavior: 'smooth' }); }); });
    sl.addEventListener('scroll', function(){ var i = Math.round(sl.scrollLeft / Math.max(1, sl.children[0].offsetWidth)); dots.forEach(function(b, j){ b.classList.toggle('is-on', j === i); }); }, { passive: true });
  }

  /* statistika: obroci in stevilke se animirajo, ko pridejo v pogled */
  var rings = document.querySelectorAll('.nbr-stat__ring');
  var run = function(r){ if (r.dataset.done) return; r.dataset.done = 1; var p = parseInt(r.getAttribute('data-nbr-pct'), 10) || 0;
    var fg = r.querySelector('.nbr-stat__fg'), num = r.querySelector('.nbr-stat__num'), C = 2 * Math.PI * 52, v = 0;
    fg.style.strokeDashoffset = C * (1 - p / 100);
    var iv = setInterval(function(){ v = Math.min(p, v + 2); num.textContent = v + '%'; if (v >= p) clearInterval(iv); }, 22); };
  if ('IntersectionObserver' in window) {
    var io = new IntersectionObserver(function(es){ es.forEach(function(e){ if (e.isIntersecting) { run(e.target); io.unobserve(e.target); } }); }, { threshold: .3 });
    rings.forEach(function(r){ io.observe(r); });
  } else { rings.forEach(run); }
})();
</script>

<style>
.nbr { --nbr-ink: #151e27; --nbr-blue: #105a85; --nbr-hl: #6d388b;
  font-family: 'Plus Jakarta Sans', system-ui, -apple-system, 'Segoe UI', Roboto, Arial, sans-serif; color: var(--nbr-ink); overflow-x: hidden; }
.nbr * { box-sizing: border-box; }
.nbr img { display: block; max-width: 100%; height: auto; }
.nbr-sec { background: #fff; padding: 36px 0; }
.nbr-wrap { width: 100%; max-width: 1200px; margin: 0 auto; padding: 0 50px; }
.nbr-center { text-align: center; }
.nbr-h1, .nbr-h2 { font-family: 'Fjalla One', 'Arial Narrow', sans-serif; font-weight: 400; color: var(--nbr-ink); text-transform: none; letter-spacing: .01em; line-height: 1.2; }
.nbr-h1 { font-size: clamp(30px, 4vw, 48px); margin: 0; }
.nbr-h2 { font-size: clamp(26px, 3vw, 38px); margin: 0 0 18px; }
.nbr-h2 em { font-style: normal; color: var(--nbr-hl); }
.nbr-h2--light { color: #fff; }
.nbr p { margin: 0 0 14px; font-size: 16px; line-height: 1.65; }
.nbr-ms { font-family: 'Material Symbols Outlined'; font-weight: normal; font-style: normal; line-height: 1; letter-spacing: normal; text-transform: none; white-space: nowrap;
  direction: ltr; -webkit-font-smoothing: antialiased; font-feature-settings: 'liga'; display: inline-block; overflow: hidden; width: 1em; }

/* 1) + 5) valovi */
.nbr-wave { padding: 0; line-height: 0; color: #f6f6f6; background: #fff; }
.nbr-wave svg { display: block; width: 100%; height: 70px; }
.nbr-wave--flip svg { transform: scaleY(-1); }
.nbr-wave .nbr-px1 use, .nbr-wave .nbr-px2 use, .nbr-wave .nbr-px3 use, .nbr-wave .nbr-px4 use { animation: nbr-wave 25s cubic-bezier(.55,.5,.45,.5) infinite; }
.nbr-wave .nbr-px1 use { animation-delay: -2s; animation-duration: 7s; }
.nbr-wave .nbr-px2 use { animation-delay: -3s; animation-duration: 10s; }
.nbr-wave .nbr-px3 use { animation-delay: -4s; animation-duration: 13s; }
.nbr-wave .nbr-px4 use { animation-delay: -5s; animation-duration: 20s; }
@keyframes nbr-wave { 0% { transform: translate3d(-90px,0,0); } 100% { transform: translate3d(85px,0,0); } }
@media (prefers-reduced-motion: reduce) { .nbr-wave use { animation: none !important; } }

/* 2) naslov */
.nbr-sec--title { padding: 40px 0 52px; }

/* 3) + 9) + 10) slika + besedilo */
.nbr-sec--grey { background: #f6f6f6; }
.nbr-iwt { display: grid; grid-template-columns: 1fr 1fr; align-items: center; gap: 0; }
.nbr-iwt--35 { grid-template-columns: 35% 65%; }
.nbr-iwt__media img { width: 100%; }
.nbr-iwt__txt { padding: 40px 60px; }
.nbr-iwt--rev .nbr-iwt__media { order: 2; }
.nbr-chips { display: flex; flex-wrap: wrap; gap: .6em 1.5em; margin-top: 10px; }
.nbr-chip { display: inline-flex !important; align-items: center; gap: 10px; margin: 0 !important; background: #f3f3f3; border-radius: .4em; padding: .43em; font-size: 16px !important; }
.nbr-sec--grey .nbr-chip { background: #fff; }
.nbr-chip .nbr-ms { font-size: 32px; color: var(--nbr-blue); }

/* 4) Kako djeluje */
.nbr-sec--blue { background: radial-gradient(#041e29, #1574ac 100%); color: #fff; padding: 36px 0; }
.nbr-sec--blue p { color: #fff; }
.nbr-how__head { max-width: 900px; margin: 20px auto 30px; }
.nbr-how { display: grid; grid-template-columns: 1fr 1fr; gap: 40px; align-items: center; }
.nbr-how__media img { width: 100%; }
.nbr-how__list { display: flex; flex-direction: column; gap: 32px; }
.nbr-how__item h3 { display: flex; align-items: center; gap: 14px; margin: 0 0 8px; font-family: 'Plus Jakarta Sans', sans-serif; font-weight: 700; font-size: 19px; color: #fff; text-transform: none; letter-spacing: 0; }
.nbr-how__ic { flex: 0 0 52px; width: 52px; height: 52px; border-radius: 50%; background: #fff; color: var(--nbr-ink); display: inline-flex; align-items: center; justify-content: center; }
.nbr-how__ic .nbr-ms { font-size: 30px; }
.nbr-how__item p { margin: 0; padding-left: 66px; font-size: 15px; }

/* 6) ocena */
.nbr-sec--rating { padding: 40px 0 10px; }
.nbr-rating { display: flex; align-items: center; justify-content: center; flex-wrap: wrap; gap: 2px; font-size: 14px !important; margin: 0 0 14px !important; }
.nbr-rating em { font-style: italic; margin-left: 4px; }
.nbr-tp { display: inline-flex; gap: 2px; margin-right: 6px; }
.nbr-tp svg { width: 20px; height: 20px; display: block; }

/* 7) drsnik mnenj */
.nbr-sec--testi { padding: 0 0 36px; }
.nbr-slider { display: grid; grid-template-columns: repeat(3, 1fr); gap: 24px; padding: 30px 0 0; }
.nbr-tcard { background: #fff; border-radius: 12px; display: flex; flex-direction: column; }
.nbr-tcard__img { border-radius: 12px; overflow: hidden; }
.nbr-tcard__img img { width: 100%; aspect-ratio: 1; object-fit: cover; }
.nbr-tcard__stars { margin-top: 20px; }
.nbr-tcard__txt { margin-top: 12px; flex: 1; }
.nbr-tcard__txt p { font-size: 14px !important; line-height: 1.3 !important; margin: 0 0 6px !important; }
.nbr-tcard__au { display: block; margin-top: 6px; font-size: 16px; font-weight: 700; }
.nbr-dots { display: none; justify-content: center; gap: 6px; padding-top: 24px; }
.nbr-dots button { width: 12px; height: 12px; border-radius: 50%; border: 0; padding: 0; background: #142030; transform: scale(.7); cursor: pointer; transition: transform .25s; }
.nbr-dots button.is-on { transform: scale(1); }

/* 8) Muškost je na udaru */
.nbr-pain { display: grid; grid-template-columns: repeat(4, 1fr); gap: 40px; align-items: center; }
.nbr-pain__head .nbr-h2 { margin: 0; }
.nbr-pain__card h3 { display: flex; align-items: center; gap: 8px; margin: 0 0 10px; font-family: 'Plus Jakarta Sans', sans-serif; font-weight: 800; font-size: 18px; color: var(--nbr-ink); text-transform: none; letter-spacing: 0; }
.nbr-pain__card h3 .nbr-ms { color: var(--nbr-hl); font-size: 26px; }
.nbr-pain__card p { margin: 0; font-size: 15px; }

/* 11) trak fotografij */
.nbr-ticker { padding: 36px 0; overflow: hidden; }
.nbr-ticker__track { display: flex; gap: 16px; width: max-content; animation: nbr-tick 100s linear infinite; }
.nbr-ticker:hover .nbr-ticker__track { animation-play-state: paused; }
.nbr-ticker__it { flex: 0 0 400px; width: 400px; }
.nbr-ticker__it img { width: 100%; aspect-ratio: 1; object-fit: cover; border-radius: 8px; }
@keyframes nbr-tick { from { transform: translateX(0); } to { transform: translateX(calc(-25% - 4px)); } }

/* 12) statistika */
.nbr-sec--stats { padding: 60px 0; }
.nbr-stats { background: radial-gradient(#041e29, #1574ac 100%); border: 1px solid #2a8eca; border-radius: 12px; padding: 50px 40px; }
.nbr-stats__h { font-family: 'Fjalla One', sans-serif; font-weight: 400; font-size: 36px; line-height: 1.2; color: #f6f6f6; margin: 0 0 12px; text-transform: none; }
.nbr-stats__sub { color: #fff; font-size: 16px !important; max-width: 760px; margin: 0 auto 34px !important; }
.nbr-stats__grid { display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px; }
.nbr-stat { background: #fff; border-radius: 10px; padding: 26px 20px; text-align: center; }
.nbr-stat__ring { position: relative; width: 120px; height: 120px; margin: 0 auto 16px; }
.nbr-stat__ring svg { width: 100%; height: 100%; transform: rotate(-90deg); }
.nbr-stat__bg { fill: none; stroke: #e6eef3; stroke-width: 9; }
.nbr-stat__fg { fill: none; stroke: var(--nbr-blue); stroke-width: 9; stroke-linecap: round; stroke-dasharray: 326.73; stroke-dashoffset: 326.73; transition: stroke-dashoffset 1.6s ease; }
.nbr-stat__num { position: absolute; inset: 0; display: flex; align-items: center; justify-content: center; font-size: 26px; font-weight: 800; color: var(--nbr-blue); }
.nbr-stat h3 { margin: 0 0 8px; font-family: 'Plus Jakarta Sans', sans-serif; font-weight: 800; font-size: 18px; color: var(--nbr-ink); text-transform: none; letter-spacing: 0; }
.nbr-stat p { margin: 0; font-size: 14px; line-height: 1.5; }

/* 13) primerjava */
.nbr-sec--cmp { padding: 72px 0; }
.nbr-cmp { display: grid; grid-template-columns: 1fr 1fr; gap: 32px; align-items: center; }
.nbr-cmp__content { text-align: center; }
.nbr-cmp__h { font-family: 'Plus Jakarta Sans', sans-serif; font-weight: 400; font-size: 32px; line-height: 1.5; color: var(--nbr-ink); margin: 0; text-transform: none; letter-spacing: 0; }
.nbr-cmp__txt { font-size: 18px !important; line-height: 1.5 !important; margin: 3px 0 0 !important; }
.nbr-cmp__row { display: grid; grid-template-columns: 1fr 1fr 1fr; }
.nbr-cmp__row > div { display: flex; align-items: center; justify-content: center; padding: 16px 4px; border-top: 1px solid #d0dbde; border-left: 1px solid #d0dbde; }
.nbr-cmp__row > div:last-child { border-right: 1px solid #d0dbde; }
.nbr-cmp__row > div.is-active { background: #b7d7ec; border-top-color: #dfe9ec; }
.nbr-cmp__row:last-child > div { border-bottom: 1px solid #d0dbde; }
.nbr-cmp__row:last-child > div.is-active { border-bottom: 0; }
.nbr-cmp__row:last-child > div:first-child { border-bottom-left-radius: 16px; }
.nbr-cmp__row:last-child > div:last-child { border-bottom-right-radius: 16px; }
.nbr-cmp__row--head > div { padding: 18px 0; }
.nbr-cmp__row--head > div:first-child { border: 0 !important; }
.nbr-cmp__row--head > div:nth-child(2) { border: 0; border-top-left-radius: 16px; }
.nbr-cmp__row--head > div:last-child { border-top-right-radius: 16px; }
.nbr-cmp__row--head + .nbr-cmp__row > div:first-child { border-top-left-radius: 16px; }
.nbr-cmp__row h3 { margin: 0; font-family: 'Plus Jakarta Sans', sans-serif; font-weight: 700; font-size: 16px; line-height: 1; color: #000; text-transform: none; letter-spacing: 0; text-align: center; width: 100%; }
.nbr-cmp__row > div:first-child h3 { font-size: 12px; font-weight: 400; line-height: 1.2; text-align: left; color: var(--nbr-ink); padding-left: 12px; }
.nbr-cmp__row svg { width: 24px; height: 24px; display: block; }
.nbr .screen-reader-text { position: absolute !important; width: 1px; height: 1px; padding: 0; margin: -1px; overflow: hidden; clip: rect(0,0,0,0); white-space: nowrap; border: 0; }

/* promo pasica */
.nbr-annbar { position: relative; z-index: 2; overflow: hidden; color: #fff; padding: 9px 14px; border-bottom: 1px solid rgba(255,138,61,.35);
  background: radial-gradient(120% 220% at 0% 50%, #2a1608 0%, rgba(42,22,8,0) 55%), radial-gradient(120% 220% at 100% 50%, #24130a 0%, rgba(36,19,10,0) 55%), #0b0b0b;
  font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Inter, sans-serif; }
.nbr-annbar__in { display: flex; align-items: center; justify-content: center; gap: 14px; max-width: 1100px; margin: 0 auto; }
.nbr-annbar__main { display: flex; align-items: center; gap: 14px; min-width: 0; }
.nbr-annbar__badge { display: inline-flex; align-items: center; gap: 5px; flex: 0 0 auto; padding: 5px 10px 5px 8px; border-radius: 999px;
  background: linear-gradient(90deg, #ffb347, #ff5a1f); color: #111; font-weight: 900; font-size: 11.5px; letter-spacing: .08em; text-transform: uppercase; animation: nbr-pulse 2.4s ease-out infinite; }
.nbr-annbar__badge svg { width: 13px; height: 13px; }
@keyframes nbr-pulse { 0% { box-shadow: 0 0 0 0 rgba(255,90,31,.5); } 70% { box-shadow: 0 0 0 9px rgba(255,90,31,0); } 100% { box-shadow: 0 0 0 0 rgba(255,90,31,0); } }
.nbr-annbar__offer { display: flex; flex-direction: column; line-height: 1.05; }
.nbr-annbar__offer b { font-weight: 900; font-size: 19px; letter-spacing: .02em; text-transform: uppercase; white-space: nowrap; }
.nbr-annbar__offer b em { font-style: normal; color: #ff5a1f; text-shadow: 0 0 14px rgba(255,90,31,.45); }
.nbr-annbar__offer small { font-size: 10.5px; font-weight: 700; letter-spacing: .12em; text-transform: uppercase; color: rgba(255,255,255,.62); margin-top: 3px; white-space: nowrap; }
.nbr-annbar__clock { display: flex; align-items: center; gap: 8px; flex: 0 0 auto; }
.nbr-annbar__ends { font-size: 10px; font-weight: 800; letter-spacing: .14em; color: rgba(255,255,255,.7); text-transform: uppercase; }
.nbr-annbar__timer { display: flex; align-items: center; gap: 4px; }
.nbr-annbar__box { display: flex; flex-direction: column; align-items: center; min-width: 40px; padding: 4px 6px 3px; border-radius: 7px;
  background: linear-gradient(180deg, #1f1f1f, #141414); border: 1px solid rgba(255,255,255,.08); border-bottom: 2px solid #ff5a1f; }
.nbr-annbar__box .v { font-size: 17px; font-weight: 900; font-variant-numeric: tabular-nums; line-height: 1; }
.nbr-annbar__box .l { font-size: 7.5px; font-weight: 700; letter-spacing: .12em; color: rgba(255,255,255,.55); margin-top: 2px; }
.nbr-annbar__col { font-weight: 900; color: #ff5a1f; font-size: 15px; margin-top: -8px; }

/* nakupna skatla (kratek opis je na originalu prazen — namesto njega oznake z ikonami) */
.nbr-sd { display: none; }
.nbr-bb-top { display: flex; flex-direction: column; gap: 10px; margin: 0 0 12px; font-family: 'Plus Jakarta Sans', sans-serif; }
.nbr-best { display: flex; align-items: center; gap: 12px; padding: 10px 12px; border-radius: 10px; background: linear-gradient(90deg, #eaf4fa, #f7fbfe); border: 1px solid #cfe3f0; }
.nbr-best__badge { flex: 0 0 44px; width: 44px; height: 44px; border-radius: 50%; background: #105a85; color: #fff; font-weight: 800; font-size: 17px; display: flex; align-items: center; justify-content: center; }
.nbr-best__t { margin: 0 !important; font-weight: 800; font-size: 15px; color: #151e27; line-height: 1.25; }
.nbr-best__s { margin: 0 !important; font-size: 13px; color: #4a5560; line-height: 1.3; }
.nbr-tpr { display: flex; align-items: center; gap: 8px; font-size: 14px; color: #151e27; }
.nbr-tpr svg { width: 20px; height: 20px; }
.nbr-tpr__ex { font-weight: 800; }
.nbr-lowp { display: inline-flex; align-items: center; gap: 8px; align-self: flex-start; padding: 6px 12px; border-radius: 999px; background: #fff2f2; border: 1px solid #ffd2d2; }
.nbr-lowp p { margin: 0 !important; font-size: 12px; font-weight: 800; letter-spacing: .04em; color: #c62828; }
.nbr-lowp__dot { width: 9px; height: 9px; border-radius: 50%; background: #e53935; animation: nbr-blink 1.4s infinite; }
@keyframes nbr-blink { 0%, 100% { opacity: 1; } 50% { opacity: .35; } }
.nbr-bb-chips { display: grid; grid-template-columns: 1fr 1fr; gap: .6em 1.5em; margin: 15px 0; }
.nbr-bb-chips p { display: flex; align-items: center; gap: 8px; margin: 0 !important; padding: 6px; border-radius: .4em; background: #f3f3f3; font-size: 14px; font-weight: 600; color: #151e27; line-height: 1.25; }
.nbr-bb-chips img { width: 30px; height: 30px; flex: 0 0 30px; border-radius: 50%; }
.nbr-sold { display: flex; align-items: center; gap: 10px; margin: 0 0 15px; }
.nbr-sold__track { flex: 1; height: 8px; border-radius: 999px; background: #e6e6e6; overflow: hidden; }
.nbr-sold__fill { display: block; width: 0; height: 100%; border-radius: 999px; background: linear-gradient(90deg, #ff9a3c, #e53935); transition: width 1.6s ease; }
.nbr-sold__l { font-size: 13px; font-weight: 700; color: #c62828; white-space: nowrap; }
.nbr-ship { display: flex; align-items: center; justify-content: center; gap: 8px; margin: 12px 0 4px; padding: 8px 12px; border-radius: 8px; background: #eaf7ef; font-size: 14px; color: #151e27; }
.nbr-ship b { font-weight: 800; }
.nbr-ship__dot { width: 9px; height: 9px; border-radius: 50%; background: #22a35a; animation: nbr-blink 1.4s infinite; }
.nbr-bb-after { display: flex; flex-direction: column; gap: 14px; margin: 14px 0 6px; font-family: 'Plus Jakarta Sans', sans-serif; color: #151e27; }
.nbr-warn { display: flex; gap: 10px; align-items: flex-start; padding: 12px 14px; border-radius: 10px; background: #fff8e6; border: 1px solid #ffe0a3; }
.nbr-warn__ic { flex: 0 0 22px; width: 22px; height: 22px; border-radius: 50%; background: #f5a623; color: #fff; display: flex; align-items: center; justify-content: center; font-weight: 800; font-style: italic; font-family: Georgia, serif; }
.nbr-warn p { margin: 0 !important; font-size: 13px; line-height: 1.5; }
.nbr-guar { display: flex; gap: 12px; align-items: flex-start; padding: 14px; border-radius: 10px; background: #f3f8fb; border: 1px solid #cfe3f0; }
.nbr-guar__ic svg { width: 40px; height: 40px; }
.nbr-guar h3 { margin: 0 0 4px; font-family: 'Plus Jakarta Sans', sans-serif; font-size: 15px; font-weight: 800; color: #151e27; text-transform: none; letter-spacing: 0; }
.nbr-guar p { margin: 0 !important; font-size: 13px; line-height: 1.5; }
.nbr-faq { border-top: 1px solid #e3e3e3; }
.nbr-faq__it { border-bottom: 1px solid #e3e3e3; }
.nbr-faq__it summary { list-style: none; display: flex; justify-content: space-between; align-items: center; padding: 14px 2px; cursor: pointer; font-weight: 700; font-size: 15px; }
.nbr-faq__it summary::-webkit-details-marker { display: none; }
.nbr-faq__it summary i { font-style: normal; font-size: 20px; font-weight: 400; transition: transform .2s; }
.nbr-faq__it[open] summary i { transform: rotate(45deg); }
.nbr-faq__a { padding: 0 2px 14px; }
.nbr-faq__a p, .nbr-faq__a li { font-size: 14px; line-height: 1.6; }
.nbr-faq__a p { margin: 0 0 10px !important; }
.nbr-faq__a ul { margin: 0 0 10px; padding-left: 18px; }
.nbr-orig { padding: 16px; border-radius: 10px; background: #151e27; color: #fff; text-align: center; }
.nbr-orig__badge { display: inline-flex; align-items: center; gap: 6px; padding: 4px 10px; border-radius: 999px; background: rgba(255,255,255,.12); font-size: 12px; font-weight: 700; margin-bottom: 8px; }
.nbr-orig h3 { margin: 0 0 6px; font-family: 'Fjalla One', sans-serif; font-weight: 400; font-size: 22px; color: #fff; text-transform: none; letter-spacing: .01em; }
.nbr-orig p { margin: 0 0 6px !important; font-size: 13px; line-height: 1.5; color: #fff; }
.nbr-orig__w { color: #ffb3b3 !important; margin: 0 !important; }
.nbr-cr { display: flex; gap: 12px; align-items: flex-start; padding: 14px; border-radius: 10px; background: #f6f6f6; }
.nbr-cr__av { flex: 0 0 56px; width: 56px; height: 56px; border-radius: 50%; overflow: hidden; }
.nbr-cr__av img { width: 100%; height: 100%; object-fit: cover; }
.nbr-cr__head { display: flex; align-items: center; gap: 8px; margin-bottom: 4px; }
.nbr-cr__name { font-weight: 800; font-size: 14px; }
.nbr-cr__stars { color: #00b779; font-size: 14px; letter-spacing: 1px; }
.nbr-cr p { margin: 0 !important; font-size: 13px; line-height: 1.5; font-style: italic; }

@media (max-width: 989px) {
  .nbr-wrap { padding: 0 20px; }
  .nbr-iwt, .nbr-iwt--35, .nbr-how, .nbr-cmp { grid-template-columns: 1fr; }
  .nbr-iwt--rev .nbr-iwt__media { order: 0; }
  .nbr-iwt__txt { padding: 26px 0 10px; }
  .nbr-pain { grid-template-columns: 1fr; gap: 24px; }
  .nbr-stats__grid { grid-template-columns: 1fr 1fr; }
}
@media (max-width: 749px) {
  .nbr-sec--title { padding: 30px 0 39px; }
  .nbr-sec--grey > .nbr-iwt { padding: 0; }
  .nbr-sec--grey .nbr-iwt__txt { padding: 26px 20px 10px; }
  .nbr-wave svg { height: 40px; }
  .nbr-slider { display: flex; overflow-x: auto; scroll-snap-type: x mandatory; gap: 16px; scrollbar-width: none; }
  .nbr-slider::-webkit-scrollbar { display: none; }
  .nbr-tcard { flex: 0 0 100%; scroll-snap-align: start; }
  .nbr-dots { display: flex; }
  .nbr-how__item p { padding-left: 0; margin-top: 6px; }
  .nbr-ticker__it { flex-basis: 300px; width: 300px; }
  .nbr-stats { padding: 30px 16px; }
  .nbr-stats__h { font-size: 28px; }
  .nbr-stats__sub { font-size: 14px !important; }
  .nbr-stats__grid { grid-template-columns: 1fr; }
  .nbr-sec--stats { padding: 40px 0; }
  .nbr-sec--cmp { padding: 54px 0; }
  .nbr-cmp__h { font-size: 26px; }
  .nbr-cmp__txt { font-size: 16px !important; }
  .nbr-annbar { padding: 8px 10px; }
  .nbr-annbar__in { justify-content: space-between; gap: 9px; }
  .nbr-annbar__main { flex-direction: column; align-items: flex-start; gap: 4px; }
  .nbr-annbar__badge { padding: 2px 8px 2px 6px; font-size: 9.5px; animation: none; }
  .nbr-annbar__offer b { font-size: 15px; }
  .nbr-annbar__offer small, .nbr-annbar__ends { display: none; }
  .nbr-annbar__box { min-width: 31px; padding: 3px 4px 2px; }
  .nbr-annbar__box .v { font-size: 14px; }
  .nbr-annbar__box .l { font-size: 6.5px; }
  .nbr-bb-chips p { font-size: 12.5px; }
}
@media (prefers-reduced-motion: reduce) { .nbr-ticker__track, .nbr-annbar__badge, .nbr-lowp__dot, .nbr-ship__dot { animation: none !important; } }
</style>
