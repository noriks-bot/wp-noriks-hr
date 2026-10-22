<?php
/**
 * product-bottom: NORIKS Bracelet — narukvica od hematita (orto-bracelet).
 * Original: myhematix.com/products/hematix-strength-band — vsebina in vrstni red 1:1 z originalom,
 * oblika po NORIKS stilu (predloga why-hands.php): slika ali video vedno ob besedilu, strani se izmenjujeta,
 * ozadja se izmenjujejo, brez pasic, drsnikov, animacij in odstevalnikov.
 *   1) Hematit: tajna ratnika — Probudite svoju iskonsku oštrinu (slika levo)
 *   2) Kako djeluje? (slika desno)
 *   3) 4.9 od 5 — Vjeruju joj muškarci koji je nose svaki dan (mreža 3 recenzij)
 *   4) Muškost je na udaru (samo besedilo)
 *   5) Ostanite usredotočeni u kaotičnom svijetu (slika levo)
 *   6) Vaša snaga nikad nije nestala. Čeka. (slika desno)
 *   7) Snaga hematita (4 fotografije originala levo — namesto tekočega traku, besedilo iz harmonike originala desno)
 *   8) Stvarni rezultati (statistika, brez animacije)
 *   9) NORIKS narukvice vs obične narukvice (primerjalna tabela)
 * FAQ je v reviews.php ($bracelet_faq), mnenja v auto_reviews/HR_bracelet.php, dolg opis v meta.php.
 * Pod nakupno škatlo samo standardni NORIKS bloki; oznake originala so v kratkem opisu (kljukice .nbr-tick).
 * Slike: img/bracelet/ (logotip konkurenta odstranjen, napisi prevedeni v hrvaščino; animirani sliki -> statični *-s.webp).
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$nbr      = get_template_directory_uri() . '/img/bracelet/';
$nbr_path = get_template_directory() . '/img/bracelet/';
$nbr_img  = function( $file, $alt ) use ( $nbr, $nbr_path ) {
  if ( ! file_exists( $nbr_path . $file ) ) { return ''; }
  return '<img src="' . esc_url( $nbr . $file ) . '" alt="' . esc_attr( $alt ) . '" loading="lazy">';
};

$nbr_star  = '<svg viewBox="0 0 24 24" aria-hidden="true"><rect width="24" height="24" fill="#00b779"/><path fill="#fff" d="M12 4.2l2.2 5.1 5.5.4-4.2 3.6 1.3 5.4L12 15.8l-4.8 2.9 1.3-5.4-4.2-3.6 5.5-.4z"/></svg>';
$nbr_stars = '<span class="nbr-tp" aria-label="5 od 5 zvjezdica">' . str_repeat( $nbr_star, 5 ) . '</span>';

/* 2) Kako djeluje — 1:1 z originala */
$nbr_how = array(
  array( 'Osjetite promjenu već za nekoliko dana', 'Jasnije razmišljanje, stabilna energija i jači osjećaj kontrole — od jutra do večeri.' ),
  array( 'Probijte se kroz moderni šum', 'Ekrani i stres raspršuju vaš fokus. NORIKS narukvica drži vas usredotočenima, prizemljenima i koncentriranima.' ),
  array( 'Stvorena za mušku izvedbu', 'Vrhunski hematit koji podržava vaš fokus, disciplinu i motivaciju na poslu, treningu i u životu.' ),
  array( 'Prizemljena svakodnevna ravnoteža', 'Jednostavan ritual koji vašem danu donosi mir, stabilnost i mentalnu jasnoću.' ),
);

/* 3) recenzije — 1:1 z originala */
$nbr_testi = array(
  array( 'br-rv-1-hr.webp', '„Svaki dan mi izoštrava fokus.“', 'Nisam bio siguran da narukvica može nešto promijeniti, ali hematit me razuvjerio. Na poslu sam usredotočeniji i puno manje rastresen. I kvaliteta je odlična.', 'Ethan M.' ),
  array( 'br-rv-2-hr.webp', '„Upravo poticaj koji mi je trebao.“', 'Energija i jasnoća bile su mi posvuda. S hematitom imam više kontrole i opet se osjećam kao svoj. Jednostavno, udobno i stvarno korisno.', 'Marcus D.' ),
  array( 'br-rv-3-hr.webp', '„Uravnoteženiji, samouvjereniji.“', 'Počeo sam je nositi svaki dan i primijetio pravu promjenu. Smireniji sam, prizemljeniji i raspoloženje mi je stabilnije tijekom dana. Izgleda odlično i djeluje vrhunski.', 'Logan P.' ),
);

/* 4) Muškost je na udaru */
$nbr_pain = array(
  array( 'Malo energije, bez motivacije', 'Iscrpljeni do 14 sati. Kava više ne djeluje kao nekad. Energija koju ste imali s 25? Daleka uspomena.' ),
  array( 'Slabe odluke', 'Misli su vam svugdje osim tamo gdje trebaju biti. Odluke postaju teže. Fokus se čini nemogućim.' ),
  array( 'Samopouzdanje blijedi', 'Manje samopouzdanja. Manje oštrine. Manje <em>vas</em>. I duboko u sebi znate da nešto nije u redu.' ),
);

/* 8) statistika */
$nbr_stats = array(
  array( 90, 'Osjećaju se prizemljenije', 'Većina muškaraca navodi jači osjećaj smirenosti i usredotočenosti tijekom dana.' ),
  array( 87, 'Oštriji fokus', 'Korisnici kažu da jasnije razmišljaju i da su mentalno prisutniji.' ),
  array( 82, 'Više svakodnevne energije', 'Muškarci navode da se od jutra do večeri osjećaju stabilnije i uravnoteženije.' ),
  array( 93, 'Obnovljeno samopouzdanje', 'Korisnici se osjećaju usklađenije, imaju više kontrole i opet se osjećaju kao svoji.' ),
);

/* 9) primerjava (true = kljukica, false = krizec) */
$nbr_cmp = array(
  array( 'Osmišljena za udobnost cijeli dan', true, false ),
  array( 'Vrhunski hematit bogat željezom', true, false ),
  array( 'Vodootporna i izdržljiva', true, false ),
  array( 'Minimalistički muški dizajn', true, false ),
  array( 'Skupa', false, true ),
);
$nbr_circ = 2 * M_PI * 52;
?>

<!-- 1) HEMATIT: TAJNA RATNIKA — slika lijevo -->
<section class="nbr-sec nbr-tint">
  <div class="nbr-wrap nbr-row2">
    <div class="nbr-media"><?php echo $nbr_img( 'br-kamen-s.webp', 'Ruka s NORIKS narukvicom drži sirovi hematit' ); ?></div>
    <div class="nbr-copy">
      <p class="nbr-kicker">Hematit: tajna ratnika</p>
      <h2 class="nbr-h2">Probudite svoju <em>iskonsku oštrinu</em></h2>
      <p><strong>Spartanski ratnici</strong> nikad je nisu skidali. <strong>Samurajski gospodari rata</strong> s njom su bili pokopani. <strong>Egipatski kraljevi</strong> tražili su je u svojim grobnicama.</p>
      <p>Znali su ono što su moderni muškarci zaboravili.</p>
      <p><strong>NORIKS narukvica</strong> donosi <strong>čisti magnetski hematit</strong> — drevni kamen <strong>jasnoće, dominacije i snažne prisutnosti</strong>. Bez tableta. Samo <strong>30 g hematita s magnetima</strong> koja tiho djeluje na vašoj koži — <strong>osjetite je čim dotakne vaše zapešće</strong>.</p>
      <p class="nbr-big">Ovo nije nakit. Ovo je nepoštena prednost.</p>
      <p><em>„Drugi tjedan: oštriji fokus, bolji san i motivacija mi je kao u dvadesetima. Djevojka misli da nešto uzimam.“</em><br>— <strong>Ryan M., 38</strong></p>
      <ul class="nbr-check">
        <li><strong>Prirodni hematit s magnetima</strong></li>
        <li><strong>Težina koja se osjeti na zapešću</strong></li>
      </ul>
    </div>
  </div>
</section>

<!-- 2) KAKO DJELUJE — slika desno -->
<section class="nbr-sec">
  <div class="nbr-wrap nbr-row2 nbr-row2--rev">
    <div class="nbr-copy">
      <p class="nbr-kicker">Kako djeluje</p>
      <h2 class="nbr-h2">Kako <em>djeluje?</em></h2>
      <p><strong>NORIKS narukvica</strong> prenosi <strong>drevnu snagu hematita</strong> — magnetskog kamena bogatog željezom koji su ratnici nekoć štovali zbog njegovog <strong>prizemljujućeg</strong> i <strong>okrepljujućeg</strong> djelovanja.</p>
      <ol class="nbr-steps">
        <?php foreach ( $nbr_how as $i => $h ) : ?>
        <li><span class="nbr-num"><?php echo (int) $i + 1; ?></span><div><strong><?php echo esc_html( $h[0] ); ?></strong><br><?php echo esc_html( $h[1] ); ?></div></li>
        <?php endforeach; ?>
      </ol>
    </div>
    <div class="nbr-media"><?php echo $nbr_img( 'br-valovi-s.webp', 'NORIKS narukvica od hematita na zapešću' ); ?></div>
  </div>
</section>

<!-- 3) RECENZIJE — jednostavna mreža -->
<section class="nbr-sec nbr-tint">
  <div class="nbr-wrap">
    <p class="nbr-rating"><?php echo $nbr_stars; ?>&nbsp;<strong>4.9</strong>&nbsp;od 5 <em>(10.000+ recenzija)</em></p>
    <h2 class="nbr-h2 nbr-h2--c">Vjeruju joj muškarci koji je <em>nose svaki dan</em></h2>
    <div class="nbr-rev">
      <?php foreach ( $nbr_testi as $t ) : ?>
      <article class="nbr-rev__card">
        <?php echo $nbr_img( $t[0], 'NORIKS narukvica — iskustvo kupca ' . $t[3] ); ?>
        <div class="nbr-rev__body">
          <div class="nbr-rev__stars"><?php echo $nbr_stars; ?></div>
          <h3><?php echo esc_html( $t[1] ); ?></h3>
          <p><?php echo esc_html( $t[2] ); ?></p>
          <cite>— <?php echo esc_html( $t[3] ); ?></cite>
        </div>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- 4) MUŠKOST JE NA UDARU — samo besedilo -->
<section class="nbr-sec">
  <div class="nbr-wrap">
    <h2 class="nbr-h2 nbr-h2--c">Muškost je <em>na udaru</em></h2>
    <div class="nbr-pain">
      <?php foreach ( $nbr_pain as $pn ) : ?>
      <article class="nbr-pain__card">
        <h3><?php echo esc_html( $pn[0] ); ?></h3>
        <p><?php echo wp_kses( $pn[1], array( 'em' => array() ) ); ?></p>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- 5) OSTANITE USREDOTOČENI — slika lijevo -->
<section class="nbr-sec nbr-tint">
  <div class="nbr-wrap nbr-row2">
    <div class="nbr-media"><?php echo $nbr_img( 'br-g-6.webp', 'Stisnuta šaka s NORIKS narukvicom od hematita' ); ?></div>
    <div class="nbr-copy">
      <p class="nbr-kicker">Fokus</p>
      <h2 class="nbr-h2">Ostanite usredotočeni <em>u kaotičnom svijetu</em></h2>
      <p>Obavijesti. Rokovi. Beskrajna buka. Osjećate se raspršeno, iscrpljeno, manje kao muškarac za kojeg znate da jeste. Taj oštri fokus? Blijedi. Ta stabilna energija? Nestane do podneva.</p>
      <p>Ne treba vam još jedan dodatak prehrani. Još jedan „biohack“. Još jedna stvar koju morate zapamtiti.</p>
      <p class="nbr-big">Treba vam sidro.</p>
    </div>
  </div>
</section>

<!-- 6) VAŠA SNAGA — slika desno -->
<section class="nbr-sec">
  <div class="nbr-wrap nbr-row2 nbr-row2--rev">
    <div class="nbr-copy">
      <p class="nbr-kicker">Unutarnja snaga</p>
      <h2 class="nbr-h2">Vaša snaga nikad nije nestala. <em>Čeka.</em></h2>
      <p>Prava snaga je tiha.</p>
      <p>To je postojani mir kad drugi paničare. Fokus koji se ne pokoleba.</p>
      <p>Hematit su generacijama nosili muškarci koji su razumjeli: prava snaga počinje iznutra.</p>
      <p class="nbr-big">Ovo je vaše sidro.</p>
    </div>
    <div class="nbr-media"><?php echo $nbr_img( 'br-g-3.webp', 'Muškarac u bijeloj košulji s NORIKS narukvicom' ); ?></div>
  </div>
</section>

<!-- 7) SNAGA HEMATITA — fotografije lijevo -->
<section class="nbr-sec nbr-tint">
  <div class="nbr-wrap nbr-row2">
    <div class="nbr-media nbr-media--grid">
      <?php for ( $i = 1; $i <= 4; $i++ ) { echo $nbr_img( 'br-t-' . $i . '.webp', 'NORIKS narukvica od hematita — fotografija ' . $i ); } ?>
    </div>
    <div class="nbr-copy">
      <p class="nbr-kicker">Snaga hematita</p>
      <h2 class="nbr-h2">Kamen koji je <em>stvarao carstva</em></h2>
      <p>Spartanski ratnici stavljali su hematit oko zapešća prije polaska u bitku. Samurajski gospodari rata nosili su ga kao talisman nepobjedivosti. Keltski poglavice prenosili su ga s koljena na koljeno kao svetu obiteljsku dragocjenost.</p>
      <p>Ti su muškarci razumjeli istinu koju je vrijeme zakopalo.</p>
      <p>Hematit — od grčke riječi <em>haima</em>, što znači krv — sadrži najveću koncentraciju željeza od svih prirodnih kamena. Gotovo 70 % kamena čini čisto željezo — isti element koji teče vašom krvlju. Ova gusta mineralna jezgra stvara suptilno magnetsko polje za koje su drevne civilizacije vjerovale da usklađuje tijelo sa sirovom snagom Zemlje. Ratnici su ga zvali „kamenom nepobjedivosti“ jer su se oni koji su ga nosili činili nedodirljivima.</p>
      <p><strong>Ono što ratnici oduvijek znaju:</strong></p>
      <ul class="nbr-check">
        <li><strong>Nepokolebljiv temelj:</strong> dubok osjećaj stabilnosti kad se sve oko vas mijenja</li>
        <li><strong>Britak um:</strong> mentalna preciznost koja utišava ometanja</li>
        <li><strong>Neumorna motivacija:</strong> stabilna, čista energija bez padova</li>
        <li><strong>Tihi autoritet:</strong> prisutnost zbog koje vas drugi slušaju i prije nego što progovorite</li>
      </ul>
      <p>Osjetite je čim dotakne vaše zapešće — hladnu težinu čvrstog željeza koja koža uz kožu naliježe na vaš puls. Ništa za gutanje, ništa za pamćenje. Današnja istraživanja odjekuju drevnom mudrošću — magnetski minerali djeluju s našim bioelektričnim poljem na načine koje tek počinjemo mjeriti. Isti kamen koji je smirivao ruke prije borbi mačevima danas smiruje živce prije važnih trenutaka.</p>
      <p class="nbr-big">Drevna snaga. Moderna prednost.</p>
    </div>
  </div>
</section>

<!-- 8) STVARNI REZULTATI -->
<section class="nbr-sec">
  <div class="nbr-wrap">
    <p class="nbr-kicker nbr-kicker--c">Rezultati</p>
    <h2 class="nbr-h2 nbr-h2--c">Stvarni rezultati koje navode <em>korisnici hematita</em></h2>
    <p class="nbr-sub">Više od deset tisuća muškaraca uvrstilo je hematit u svoju svakodnevnu rutinu. Evo što primjećuju nakon redovitog nošenja.</p>
    <div class="nbr-stats">
      <?php foreach ( $nbr_stats as $st ) : ?>
      <article class="nbr-stat">
        <div class="nbr-stat__ring">
          <svg viewBox="0 0 120 120" aria-hidden="true"><circle cx="60" cy="60" r="52" class="nbr-stat__bg"/><circle cx="60" cy="60" r="52" class="nbr-stat__fg" style="stroke-dasharray:<?php echo esc_attr( round( $nbr_circ, 2 ) ); ?>;stroke-dashoffset:<?php echo esc_attr( round( $nbr_circ * ( 1 - $st[0] / 100 ), 2 ) ); ?>"/></svg>
          <span class="nbr-stat__num"><?php echo (int) $st[0]; ?>%</span>
        </div>
        <h3><?php echo esc_html( $st[1] ); ?></h3>
        <p><?php echo esc_html( $st[2] ); ?></p>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- 9) USPOREDBA -->
<section class="nbr-sec nbr-tint">
  <div class="nbr-wrap nbr-row2">
    <div class="nbr-copy">
      <p class="nbr-kicker">Usporedba</p>
      <h2 class="nbr-h2">NORIKS narukvice <em>vs obične narukvice</em></h2>
      <p>Tražite nešto što stvarno podržava vašu energiju, fokus i samopouzdanje?</p>
      <p>NORIKS koristi vrhunski magnetski hematit — gotovo 70 % čistog željeza, koji se nosi izravno na koži — kako biste se od trenutka kad ga stavite osjećali prizemljenije, usredotočenije i s više kontrole.</p>
      <p class="nbr-big">Bez tableta, bez rutina, bez truda.</p>
    </div>
    <div class="nbr-cmp">
      <table class="nbr-cmp__table">
        <thead><tr><th class="nbr-cmp__feat"><span class="screen-reader-text">Značajka</span></th><th class="nbr-cmp__us">NORIKS</th><th class="nbr-cmp__them">Ostale</th></tr></thead>
        <tbody>
          <?php foreach ( $nbr_cmp as $c ) : ?>
          <tr>
            <td><?php echo esc_html( $c[0] ); ?></td>
            <td class="<?php echo $c[1] ? 'nbr-y' : 'nbr-n'; ?>"><?php echo $c[1] ? '✓' : '✕'; ?><span class="screen-reader-text"><?php echo $c[1] ? 'Da' : 'Ne'; ?></span></td>
            <td class="<?php echo $c[2] ? 'nbr-y' : 'nbr-n'; ?>"><?php echo $c[2] ? '✓' : '✕'; ?><span class="screen-reader-text"><?php echo $c[2] ? 'Da' : 'Ne'; ?></span></td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</section>

<style>
.nbr-sec { padding: 60px 0; background: #fff; font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Arial, sans-serif; color: #151e27; }
.nbr-sec * { box-sizing: border-box; }
.nbr-tint { background: #f1f5f8; }
.nbr-wrap { width: 100%; max-width: 1240px; margin: 0 auto; padding: 0 24px; }
.nbr-row2 { display: grid; grid-template-columns: 1fr 1fr; gap: 56px; align-items: center; }
.nbr-media img { display: block; width: 100%; height: auto; box-shadow: 0 2px 4px rgba(15,30,45,.05), 0 14px 40px rgba(15,30,45,.10); }
.nbr-media--grid { display: grid; grid-template-columns: 1fr 1fr; gap: 12px; }
.nbr-media--grid img { aspect-ratio: 1 / 1; object-fit: cover; }
.nbr-kicker, .nbr-copy .nbr-kicker { font-size: 12.5px; font-weight: 800; letter-spacing: .14em; text-transform: uppercase; color: #105a85; margin: 0 0 10px; }
.nbr-kicker--c { text-align: center; }
.nbr-h2 { font-size: clamp(25px, 3.1vw, 36px); font-weight: 800; line-height: 1.18; letter-spacing: -.01em; margin: 0 0 16px; color: #151e27; text-transform: none; }
.nbr-h2--c { text-align: center; }
.nbr-h2 em { font-style: italic; font-weight: 800; color: #105a85; }
.nbr-copy p { font-size: 16px; line-height: 1.7; color: #46525c; margin: 0 0 14px; }
.nbr-copy strong { color: #151e27; }
.nbr-big { font-size: 19px !important; font-weight: 800; color: #151e27 !important; }
.nbr-sub { text-align: center; font-size: 15.5px; line-height: 1.6; color: #5b6770; max-width: 760px; margin: 0 auto 26px; }
.nbr-check { list-style: none; padding: 0; margin: 6px 0 16px; display: flex; flex-direction: column; gap: 11px; }
.nbr-check li { position: relative; padding-left: 28px; font-size: 15.5px; line-height: 1.5; color: #46525c; }
.nbr-check li::before { content: "\2713"; position: absolute; left: 0; top: 0; width: 20px; height: 20px; border-radius: 50%;
  background: #105a85; color: #fff; font-size: 11px; font-weight: 800; display: flex; align-items: center; justify-content: center; }

/* 2) koraki */
.nbr-steps { list-style: none; padding: 0; margin: 6px 0 0; display: flex; flex-direction: column; gap: 16px; }
.nbr-steps li { display: flex; gap: 14px; font-size: 15.5px; line-height: 1.62; color: #46525c; }
.nbr-num { flex: 0 0 28px; width: 28px; height: 28px; border-radius: 50%; background: #105a85; color: #fff;
  font-size: 13.5px; font-weight: 800; display: flex; align-items: center; justify-content: center; }

/* 3) recenzije */
.nbr-rating { display: flex; align-items: center; justify-content: center; flex-wrap: wrap; gap: 2px; font-size: 14px; margin: 0 0 12px; color: #151e27; }
.nbr-rating em { font-style: italic; margin-left: 4px; }
.nbr-tp { display: inline-flex; gap: 2px; margin-right: 6px; }
.nbr-tp svg { width: 18px; height: 18px; display: block; }
.nbr-rev { display: grid; grid-template-columns: repeat(3, 1fr); gap: 18px; margin-top: 26px; }
.nbr-rev__card { background: #fff; border: 1px solid #e1e8ee; display: flex; flex-direction: column; }
.nbr-rev__card > img { display: block; width: 100%; aspect-ratio: 1 / 1; object-fit: cover; }
.nbr-rev__body { padding: 20px 20px 22px; display: flex; flex-direction: column; flex: 1; }
.nbr-rev__stars { margin-bottom: 10px; }
.nbr-rev__card h3 { font-size: 16.5px; font-weight: 800; line-height: 1.3; margin: 0 0 8px; color: #151e27; text-transform: none; letter-spacing: 0; }
.nbr-rev__card p { font-size: 14.6px; line-height: 1.6; color: #46525c; margin: 0 0 14px; flex: 1; }
.nbr-rev__card cite { font-style: normal; font-size: 14.5px; font-weight: 800; color: #151e27; }

/* 4) bolne tocke */
.nbr-pain { display: grid; grid-template-columns: repeat(3, 1fr); gap: 18px; margin-top: 10px; }
.nbr-pain__card { background: #f1f5f8; border-left: 3px solid #105a85; padding: 22px 20px; }
.nbr-pain__card h3 { font-size: 17px; font-weight: 800; margin: 0 0 8px; color: #151e27; text-transform: none; letter-spacing: 0; }
.nbr-pain__card p { font-size: 15px; line-height: 1.6; color: #46525c; margin: 0; }

/* 8) statistika */
.nbr-stats { display: grid; grid-template-columns: repeat(4, 1fr); gap: 18px; }
.nbr-stat { background: #fff; border: 1px solid #e1e8ee; padding: 26px 20px; text-align: center; }
.nbr-stat__ring { position: relative; width: 110px; height: 110px; margin: 0 auto 16px; }
.nbr-stat__ring svg { width: 100%; height: 100%; transform: rotate(-90deg); }
.nbr-stat__bg { fill: none; stroke: #e6eef3; stroke-width: 9; }
.nbr-stat__fg { fill: none; stroke: #105a85; stroke-width: 9; stroke-linecap: round; }
.nbr-stat__num { position: absolute; inset: 0; display: flex; align-items: center; justify-content: center; font-size: 24px; font-weight: 800; color: #105a85; }
.nbr-stat h3 { margin: 0 0 8px; font-size: 17px; font-weight: 800; color: #151e27; text-transform: none; letter-spacing: 0; }
.nbr-stat p { margin: 0; font-size: 14px; line-height: 1.55; color: #46525c; }

/* 9) usporedba */
.nbr-cmp { background: #fff; border: 1px solid #e1e8ee; overflow: hidden; }
.nbr-cmp__table { width: 100%; border-collapse: collapse; font-size: 15px; margin: 0 !important; }
.nbr-cmp__table th, .nbr-cmp__table td { padding: 15px 16px; border-bottom: 1px solid #e1e8ee; vertical-align: middle; }
.nbr-cmp__feat { width: 50%; }
.nbr-cmp__us, .nbr-cmp__them { width: 25%; text-align: center; font-size: 15.5px; font-weight: 800; }
.nbr-cmp__us { background: #105a85; color: #fff; }
.nbr-cmp__them { background: #e6eef3; color: #46525c; }
.nbr-cmp__table td { color: #46525c; line-height: 1.5; }
.nbr-cmp__table td.nbr-y, .nbr-cmp__table td.nbr-n { text-align: center; font-size: 20px; font-weight: 800; }
.nbr-cmp__table td.nbr-y { color: #2f9e5f; }
.nbr-cmp__table td.nbr-n { color: #c0392b; }
.nbr-cmp__table tbody tr:last-child td { border-bottom: 0; }
.nbr-sec .screen-reader-text { position: absolute !important; width: 1px; height: 1px; padding: 0; margin: -1px; overflow: hidden; clip: rect(0,0,0,0); white-space: nowrap; border: 0; }

/* kratek opis izdelka: zelene kljukice namesto pik */
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
.woocommerce-product-details__short-description .nbr-tick {
  position: absolute !important; left: 0 !important; top: 1px !important;
  width: 21px; height: 21px; border-radius: 50%;
  background: #2f9e5f !important; color: #fff !important;
  font-size: 12px !important; font-weight: 800 !important; line-height: 21px !important;
  text-align: center !important; display: inline-block !important; }
.woocommerce-product-details__short-description p:first-of-type { font-size: 16px; line-height: 1.55; }

@media (max-width: 980px) {
  .nbr-row2 { grid-template-columns: 1fr; gap: 28px; }
  .nbr-row2--rev .nbr-media { order: -1; }
  .nbr-rev, .nbr-pain { grid-template-columns: 1fr; }
  .nbr-stats { grid-template-columns: repeat(2, 1fr); }
}
@media (max-width: 560px) {
  .nbr-sec { padding: 42px 0; }
  .nbr-wrap { padding: 0 16px; }
  .nbr-stats { grid-template-columns: 1fr; }
  .nbr-cmp__table th, .nbr-cmp__table td { padding: 12px 10px; font-size: 13.5px; }
}
</style>
