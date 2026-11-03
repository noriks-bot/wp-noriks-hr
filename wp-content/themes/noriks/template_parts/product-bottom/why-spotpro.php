<?php
/**
 * NORIKS kartica za praćenje PRO (izgleda kao bankovna kartica, Apple Find My) — why sekcije po strukturi originala
 * (spotminders.com/products/spotminders-tracking-card-pro).
 *
 * STRUKTURA ORIGINALA:
   1. 2.3 Billion Apple Devices: naslov + 3 telefona v vrsti (Detects Lost Items / Updates Location / Find It In Find My) - pri nas naslov + 3 kartice s telefoni (HR zasloni), ikona in besedilo
   2. PRO vs Regular Tracking Card: slika PRO in Regular kartice + 3 tocke z ikonami (Disguised as a Credit Card, Improved Battery Life, Same Smart Tracking) - pri nas enako: 2 kartici (PRO / Standardna) + 3 tocke z ikonami
   3. Built For The Things You Carry Every Day: 3 kartice s sliko in besedilom (Fits Anywhere, 1 Charge Lasts 8 Months, Track It On The Map) - pri nas 3 kartice s sliko
   4. Animated features: 4 zavihki s slikami (Track everything, How to connect, Battery life, Ultra thin) - pri nas 4 kartice s slikami
   5. Premium Apple-Certified Technology: slika (razstavljena kartica MFi) + 2 tocki (Find My Integration, Precision Engineering) - pri nas slika levo + besedilo desno
   6. Set it up in under 45 seconds: 3 koraki s slikami (Connect Card, Add to Wallet, Track & Ring - animacija) - pri nas 3 stevilcni koraki, tretji kot video z originala (del z angleskim zaslonom izpuscen)
   7. Looks Like a Credit Card, Not a Tracker: naslov + besedilo na ozadju s fotografijo kartice - pri nas besedilo levo + fotografija desno
   8. Why Choose: primerjalna tabela (znamka proti okroglemu trackerju, 5 vrstic) - pri nas tabela NORIKS PRO proti okroglemu trackerju
   9. How to setup: karusel 6 korakov s posnetki zaslona - pri nas karusel 6 korakov (HR zasloni) s puscicami
  10. Why 1,000,000+ cards are sold (Trustpilot) - IZPUSCENO (tuja stevilka in tuja ocena)
  11. Frequently Asked Questions (z videom) - pri nas v FAQ spodaj (auto_reviews/FAQ_HR_spotpro.php)
  12. Customer Reviews - pri nas mnenja spodaj (auto_reviews/HR_spotpro.php)
 * BARVA ORIGINALA: #00467c (temno modra kljukic, gumbov in naslovov na originalu); svetel ton za --bg #eef3f9
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
$wsq_img = get_template_directory_uri() . '/img/spotpro/';
$wsq_i   = function ( $f ) use ( $wsq_img ) { return esc_url( $wsq_img . $f ); };
$wsq_svg = '<svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">';
$wsq_ik  = array(
	'radar'   => '<circle cx="12" cy="12" r="2"/><path d="M16.2 7.8a6 6 0 0 1 0 8.4"/><path d="M7.8 16.2a6 6 0 0 1 0-8.4"/><path d="M19 5a10 10 0 0 1 0 14"/><path d="M5 19A10 10 0 0 1 5 5"/>',
	'pin'     => '<path d="M12 21s-7-6.2-7-11.5A7 7 0 0 1 19 9.5C19 14.8 12 21 12 21z"/><circle cx="12" cy="9.5" r="2.5"/>',
	'search'  => '<circle cx="11" cy="11" r="7"/><path d="m20 20-3.5-3.5"/>',
	'card'    => '<rect x="2.5" y="5" width="19" height="14" rx="2.5"/><path d="M2.5 10h19"/><path d="M6 15h4"/>',
	'battery' => '<rect x="2" y="7" width="17" height="10" rx="2"/><path d="M22 11v2"/><path d="M6 10v4M9.5 10v4M13 10v4"/>',
	'shield'  => '<path d="M12 3 4.5 6v5.5c0 4.6 3.2 8.4 7.5 9.5 4.3-1.1 7.5-4.9 7.5-9.5V6z"/><path d="m9 12 2 2 4-4"/>',
	'chip'    => '<rect x="7" y="7" width="10" height="10" rx="1.5"/><path d="M9.5 3v4M14.5 3v4M9.5 17v4M14.5 17v4M3 9.5h4M3 14.5h4M17 9.5h4M17 14.5h4"/>',
	'apple'   => '<path d="M12 7.5c0-2 1.4-3.6 3.2-4"/><path d="M12 8c-1.2-1-2.6-1.4-4-1.2C5.3 7.2 4 9.6 4 12.4 4 16.6 6.8 21 9.2 21c1 0 1.6-.6 2.8-.6s1.8.6 2.8.6c2.4 0 5.2-4.4 5.2-8.6 0-2.8-1.3-5.2-4-5.6-1.4-.2-2.8.2-4 1.2z"/>',
);
$wsq_ikona = function ( $k ) use ( $wsq_svg, $wsq_ik ) { return $wsq_svg . $wsq_ik[ $k ] . '</svg>'; };
?>
<div class="wsq">

<section class="wsq__s wsq__s--bg"><div class="wsq__v">
  <div class="wsq__kicker wsq__c">Mreža Find My</div>
  <h2 class="wsq__h2 wsq__c">Milijuni Apple uređaja <em>pomažu vam pronaći stvari</em></h2>
  <p class="wsq__p wsq__c">Kad je kartica blizu bilo kojeg Apple uređaja, njezina se lokacija anonimno osvježava u aplikaciji Find My – i kad ste vi kilometrima daleko.</p>
  <div class="wsq__grid wsq__grid--3">
    <div class="wsq__k"><div class="wsq__km wsq__km--tel"><img src="<?php echo $wsq_i( 'noriks-spotpro-mreza-1.webp' ); ?>" alt="Obavijest na iPhoneu: ostavljen je novčanik s NORIKS PRO karticom" loading="eager" decoding="async"></div><div class="wsq__kt wsq__kt--c"><span class="wsq__ikmala"><?php echo $wsq_ikona( 'radar' ); ?></span><strong>Otkriva zaboravljene stvari</strong><p>Ako novčanik ostane iza vas, iPhone vas odmah upozori da ga više nema u blizini.</p></div></div>
    <div class="wsq__k"><div class="wsq__km wsq__km--tel"><img src="<?php echo $wsq_i( 'noriks-spotpro-mreza-2.webp' ); ?>" alt="Popis uređaja u aplikaciji Find My s novčanikom" loading="eager" decoding="async"></div><div class="wsq__kt wsq__kt--c"><span class="wsq__ikmala"><?php echo $wsq_ikona( 'pin' ); ?></span><strong>Osvježava lokaciju</strong><p>Svaki obližnji Apple uređaj šifrirano javi gdje se kartica nalazi – vi to vidite na karti.</p></div></div>
    <div class="wsq__k"><div class="wsq__km wsq__km--tel"><img src="<?php echo $wsq_i( 'noriks-spotpro-mreza-3.webp' ); ?>" alt="Lokacija novčanika i tipka za zvuk u aplikaciji Find My" loading="eager" decoding="async"></div><div class="wsq__kt wsq__kt--c"><span class="wsq__ikmala"><?php echo $wsq_ikona( 'search' ); ?></span><strong>Pronađite je u Find My</strong><p>Otvorite Find My, pogledajte lokaciju, zatražite upute ili pustite zvuk kad ste blizu.</p></div></div>
  </div>
  <p class="wsq__zak">Bez dodatne aplikacije i bez pretplate – sve radi preko Find My koji već imate na iPhoneu.</p>
</div></section>

<section class="wsq__s"><div class="wsq__v">
  <div class="wsq__kicker wsq__c">PRO ili standardna</div>
  <h2 class="wsq__h2 wsq__c">PRO kartica – <em>izgleda kao prava bankovna kartica</em></h2>
  <div class="wsq__vs">
    <div class="wsq__vsk wsq__vsk--pro"><span class="wsq__vsz">PRO</span><img src="<?php echo $wsq_i( 'noriks-spotpro-pro-kartica.webp' ); ?>" alt="NORIKS kartica za praćenje PRO – crna kartica s čipom" loading="eager" decoding="async"></div>
    <div class="wsq__vsk"><span class="wsq__vsz wsq__vsz--siva">Standardna</span><img src="<?php echo $wsq_i( 'noriks-spotpro-standardna.webp' ); ?>" alt="Standardna NORIKS kartica za praćenje" loading="eager" decoding="async"></div>
  </div>
  <div class="wsq__grid wsq__grid--3 wsq__tocke">
    <div class="wsq__k wsq__k--ik"><span class="wsq__ikona"><?php echo $wsq_ikona( 'card' ); ?></span><strong>Prerušena u bankovnu karticu</strong><p>Isti profil, rubovi i završna obrada kao prava kreditna kartica. PRO leži skriveno u novčaniku, pa je lopov neće primijetiti.</p></div>
    <div class="wsq__k wsq__k--ik"><span class="wsq__ikona"><?php echo $wsq_ikona( 'battery' ); ?></span><strong>Dulje trajanje baterije</strong><p>Poboljšana punjiva baterija traje do 8 mjeseci na jedno punjenje.</p></div>
    <div class="wsq__k wsq__k--ik"><span class="wsq__ikona"><?php echo $wsq_ikona( 'pin' ); ?></span><strong>Isto pametno praćenje</strong><p>Precizna lokacija i zvučni signal ostaju isti – PRO donosi samo izdržljiviji i diskretniji dizajn.</p></div>
  </div>
</div></section>

<section class="wsq__s wsq__s--bg"><div class="wsq__v">
  <div class="wsq__kicker wsq__c">Za svaki dan</div>
  <h2 class="wsq__h2 wsq__c">Napravljena za stvari <em>koje nosite svaki dan</em></h2>
  <p class="wsq__p wsq__c">Pravi izgled bankovne kartice. Bez logotipa, bez debljine – samo čista mat površina koja nestane u novčaniku.</p>
  <div class="wsq__grid wsq__grid--3">
    <div class="wsq__k"><div class="wsq__km"><img src="<?php echo $wsq_i( 'noriks-spotpro-novcanik.webp' ); ?>" alt="NORIKS PRO kartica ulazi u kožni novčanik" loading="eager" decoding="async"></div><div class="wsq__kt"><span class="wsq__oz">Stane svugdje</span><strong>Uklopi se bilo gdje</strong><p>Punjiva kartica za praćenje izgleda kao bankovna – klizne u svaki novčanik ili držač kartica i diskretno čuva vaše stvari.</p></div></div>
    <div class="wsq__k"><div class="wsq__km"><img src="<?php echo $wsq_i( 'noriks-spotpro-punjenje.webp' ); ?>" alt="NORIKS PRO kartica na bežičnom punjaču" loading="eager" decoding="async"></div><div class="wsq__kt"><span class="wsq__oz">Mir u glavi</span><strong>Jedno punjenje traje 8 mjeseci</strong><p>Kompatibilna s Qi i MagSafe punjačima. Brzo punjenje od 2 sata napaja karticu do 8 mjeseci.</p></div></div>
    <div class="wsq__k"><div class="wsq__km"><img src="<?php echo $wsq_i( 'noriks-spotpro-prati-karta.webp' ); ?>" alt="Muškarac prati novčanik na karti u aplikaciji Find My" loading="eager" decoding="async"></div><div class="wsq__kt"><span class="wsq__oz">Prati s bilo kojeg mjesta</span><strong>Pratite je na karti</strong><p>Bili kod kuće ili na drugom kraju svijeta – Apple Find My pokazuje točno gdje je, a kartica ostaje nevidljiva u novčaniku.</p></div></div>
  </div>
</div></section>

<section class="wsq__s"><div class="wsq__v">
  <div class="wsq__kicker wsq__c">Mogućnosti</div>
  <h2 class="wsq__h2 wsq__c">Sve što trebate – <em>u kartici od 1,8 mm</em></h2>
  <div class="wsq__grid wsq__grid--4">
    <div class="wsq__k"><div class="wsq__km wsq__km--crna"><img src="<?php echo $wsq_i( 'noriks-spotpro-prati-sve.webp' ); ?>" alt="Predmeti na karti u aplikaciji Find My" loading="eager" decoding="async"></div><div class="wsq__kt"><span class="wsq__oz">Pratite sve</span><p>Novčanik, ruksak, kofer i drugo – sve na jednom mjestu u aplikaciji Find My koju već koristite.</p></div></div>
    <div class="wsq__k"><div class="wsq__km wsq__km--crna"><img src="<?php echo $wsq_i( 'noriks-spotpro-spajanje.webp' ); ?>" alt="Novčanik povezan u aplikaciji Find My" loading="eager" decoding="async"></div><div class="wsq__kt"><span class="wsq__oz">Kako je povezati</span><p>Uparite karticu u nekoliko sekundi preko Apple Find My. Bez dodatnih aplikacija – dodirnete, povežete i pratite.</p></div></div>
    <div class="wsq__k"><div class="wsq__km wsq__km--crna"><img src="<?php echo $wsq_i( 'noriks-spotpro-baterija.webp' ); ?>" alt="NORIKS PRO kartica na bežičnom punjaču" loading="eager" decoding="async"></div><div class="wsq__kt"><span class="wsq__oz">Trajanje baterije</span><p>Do 8 mjeseci na jedno punjenje – punjiva i napravljena da traje.</p></div></div>
    <div class="wsq__k"><div class="wsq__km wsq__km--crna"><img src="<?php echo $wsq_i( 'noriks-spotpro-ultra-tanka.webp' ); ?>" alt="NORIKS PRO kartica debljine 1,8 mm uz bok iPhonea" loading="eager" decoding="async"></div><div class="wsq__kt"><span class="wsq__oz">Ultra tanka</span><p>Samo 1,8 mm u usporedbi s oko 9,9 mm bočnog profila iPhonea – klizne u novčanik bez dodatne debljine.</p></div></div>
  </div>
</div></section>

<section class="wsq__s wsq__s--bg"><div class="wsq__v wsq__dva">
  <div class="wsq__media wsq__media--siroka"><img src="<?php echo $wsq_i( 'noriks-spotpro-mfi.webp' ); ?>" alt="Unutrašnjost NORIKS PRO kartice: PVC, baterija, zvučnik i čipset" loading="eager" decoding="async"></div>
  <div>
    <div class="wsq__kicker">Apple certificirana tehnologija</div>
    <h2 class="wsq__h2">Pametna iznutra, <em>pouzdana izvana</em></h2>
    <p class="wsq__p">Unutar kartice tanke 1,8 mm nalaze se baterija, zvučnik i čipset s Apple MFi certifikatom. Vanjski sloj je izdržljivi kompozit otporan na savijanje, s premazom koji štiti od ogrebotina.</p>
    <ul class="wsq__stavke">
      <li><span class="wsq__pi"><?php echo $wsq_ikona( 'apple' ); ?></span><div><strong>Integracija s Find My</strong><p>Pratite svoje stvari izravno u Apple aplikaciji Find My – bez preuzimanja i bez komplikacija.</p></div></li>
      <li><span class="wsq__pi"><?php echo $wsq_ikona( 'chip' ); ?></span><div><strong>Precizna izrada</strong><p>Izrađena s Apple certificiranim komponentama za izdržljivost, pouzdan rad i svakodnevnu upotrebu.</p></div></li>
    </ul>
    <p class="wsq__zak">Radi i u novčaniku s RFID zaštitom – ne smeta zaštiti vaših bankovnih kartica.</p>
  </div>
</div></section>

<section class="wsq__s"><div class="wsq__v">
  <div class="wsq__kicker wsq__c">Postavljanje</div>
  <h2 class="wsq__h2 wsq__c">Postavite je <em>za manje od 45 sekundi</em></h2>
  <p class="wsq__p wsq__c">Većina kupaca je poveže i počne pratiti za manje od minute. Evo kako:</p>
  <div class="wsq__grid wsq__grid--3">
    <div class="wsq__k"><div class="wsq__km"><img src="<?php echo $wsq_i( 'noriks-spotpro-povezi.webp' ); ?>" alt="Povezivanje NORIKS PRO kartice s iPhoneom" loading="eager" decoding="async"></div><div class="wsq__kt"><span class="wsq__st">1</span><strong>Povežite s Apple Find My</strong><p>Približite karticu iPhoneu i dodirnite jednom. Bez aplikacija i bez stresa – kartica je spremna za nekoliko sekundi.</p></div></div>
    <div class="wsq__k"><div class="wsq__km"><img src="<?php echo $wsq_i( 'noriks-spotpro-spremi.webp' ); ?>" alt="NORIKS PRO kartica se sprema u novčanik" loading="eager" decoding="async"></div><div class="wsq__kt"><span class="wsq__st">2</span><strong>Spremite je na sigurno</strong><p>Stavite je u novčanik, torbu ili putovnicu. Tanka je, sigurna i ostaje skrivena dok vam ne zatreba.</p></div></div>
    <div class="wsq__k"><div class="wsq__km"><video src="<?php echo esc_url( get_template_directory_uri() . '/img/spotpro/noriks-spotpro-pronadi.mp4' ); ?>" poster="<?php echo esc_url( get_template_directory_uri() . '/img/spotpro/noriks-spotpro-pronadi.jpg' ); ?>" autoplay muted loop playsinline webkit-playsinline preload="metadata" aria-label="Muškarac pronalazi novčanik pomoću aplikacije Find My"></video></div><div class="wsq__kt"><span class="wsq__st">3</span><strong>Pratite, zazvonite, pronađite</strong><p>U Find My provjerite lokaciju. Ako je u blizini, dodirnite Pusti zvuk i čujete je jasno, čak i kroz torbu ili jastuke.</p></div></div>
  </div>
</div></section>

<section class="wsq__s wsq__s--bg"><div class="wsq__v wsq__dva wsq__dva--rev">
  <div class="wsq__media wsq__media--siroka wsq__media--tamna"><img src="<?php echo $wsq_i( 'noriks-spotpro-kao-kartica.webp' ); ?>" alt="Crna NORIKS PRO kartica izgleda kao bankovna kartica" loading="eager" decoding="async"></div>
  <div>
    <div class="wsq__kicker">Neprimjetna</div>
    <h2 class="wsq__h2">Izgleda kao bankovna kartica, <em>a ne kao tracker</em></h2>
    <p class="wsq__p">Isti ravni profil, rubovi i završna obrada kao standardna bankovna kartica. U utoru za kartice jednostavno nestane i prođe svaki brzi pogled lopova.</p>
    <p class="wsq__p">Dimenzije odgovaraju standardu ISO/IEC 7810 ID-1, a kartica je ultra tanka da stane i u uske pretince. Mat površina na dodir je kao obična bankovna kartica.</p>
    <p class="wsq__zak">Lopov vidi još jednu karticu – vi vidite gdje je vaš novčanik.</p>
  </div>
</div></section>

<section class="wsq__s"><div class="wsq__v">
  <div class="wsq__kicker wsq__c">Usporedba</div>
  <h2 class="wsq__h2 wsq__c">Zašto <em>NORIKS kartica PRO</em></h2>
  <p class="wsq__p wsq__c">Okrugli tracker je debeo i vidljiv u novčaniku. PRO kartica je tanka i ponaša se kao još jedna kartica.</p>
  <div class="wsq__tw"><table class="wsq__tab">
    <thead><tr><th></th><th class="wsq__tnasa">NORIKS PRO</th><th>Okrugli tracker</th></tr></thead>
    <tbody>
      <tr><td>Radi s Apple Find My</td><td class="wsq__da">✓</td><td class="wsq__da">✓</td></tr>
      <tr><td>Dizajn kao bankovna kartica</td><td class="wsq__da">✓</td><td class="wsq__ne">✕</td></tr>
      <tr><td>Bežično punjenje</td><td class="wsq__da">✓</td><td class="wsq__ne">✕</td></tr>
      <tr><td>Savršena za putovanja</td><td class="wsq__da">✓</td><td class="wsq__ne">✕</td></tr>
      <tr><td>Novčanik, torbe i prtljaga</td><td class="wsq__da">✓</td><td class="wsq__ne">✕</td></tr>
    </tbody>
  </table></div>
</div></section>

<section class="wsq__s wsq__s--bg"><div class="wsq__v">
  <div class="wsq__kicker wsq__c">Upute</div>
  <h2 class="wsq__h2 wsq__c">Kako je postaviti – <em>korak po korak</em></h2>
  <p class="wsq__p wsq__c">Slijedite ovih šest jednostavnih koraka i povežite NORIKS karticu za praćenje PRO.</p>
  <div class="wsq__karw">
    <div class="wsq__kar">
      <?php
      $wsq_koraci = array( 'Otvorite aplikaciju „Find My”', 'Dodirnite „Dodaj predmet”', 'Uključite karticu', 'Odaberite „Drugi podržani predmet”', 'Predmet se povezuje s vašim Apple ID-om', 'Gotovo – kartica je na karti!' );
      foreach ( $wsq_koraci as $wsq_n => $wsq_t ) : ?>
      <div class="wsq__kk"><div class="wsq__kkm"><img src="<?php echo $wsq_i( 'noriks-spotpro-korak-' . ( $wsq_n + 1 ) . '.webp' ); ?>" alt="<?php echo esc_attr( 'Korak ' . ( $wsq_n + 1 ) . ': ' . $wsq_t ); ?>" loading="eager" decoding="async"></div><div class="wsq__kkt"><span class="wsq__st"><?php echo (int) ( $wsq_n + 1 ); ?></span><strong><?php echo esc_html( $wsq_t ); ?></strong></div></div>
      <?php endforeach; ?>
    </div>
    <button type="button" class="wsq__pus wsq__pus--l" aria-label="Prethodno">&#8249;</button>
    <button type="button" class="wsq__pus wsq__pus--d" aria-label="Sljedeće">&#8250;</button>
  </div>
</div></section>

<section class="wsq__s npg-s"><?php $npg = array( 'izdelek' => 'NORIKS karticu za praćenje PRO', 'barva' => '#00467c' ); include __DIR__ . '/noriks-pogoji.php'; ?></section>
</div>
<style>
.wsq{color:#14213a;font-family:inherit}
.wsq__s{padding:72px 0;background:#fff}.wsq__s.wsq__s--bg{background:#eef3f9}
.wsq__v{width:100%;max-width:1240px;margin:0 auto;padding:0 24px;box-sizing:border-box}
.wsq__c{text-align:center}
.wsq__kicker{font-size:13px;letter-spacing:1.8px;text-transform:uppercase;color:#00467c;margin:0 0 8px;font-weight:700}
.wsq__kicker::before{content:"";display:inline-block;width:22px;height:2px;background:#00467c;vertical-align:middle;margin:-2px 10px 0 0;border-radius:2px}
.wsq__h2{font-size:clamp(24px,3vw,34px);font-weight:800;line-height:1.2;margin:0 0 16px;color:#14213a}.wsq__h2 em{font-style:italic;color:#00467c}
.wsq__p{font-size:15.5px;line-height:1.65;color:#3a4458;margin:0 0 14px}
.wsq__zak{font-size:16px;font-weight:800;line-height:1.5;margin:24px 0 0}
.wsq__v>.wsq__zak{text-align:center}
.wsq__dva .wsq__zak{border-left:3px solid #00467c;padding-left:14px}
.wsq__dva{display:grid;grid-template-columns:1fr 1fr;gap:56px;align-items:center}
.wsq__dva--rev>.wsq__media{order:2}
.wsq__media{position:relative;border-radius:16px;overflow:hidden;box-shadow:0 14px 34px rgba(20,40,80,.16);aspect-ratio:4/5;background:#fff}
.wsq__media img{width:100%;height:100%;object-fit:cover;display:block}
.wsq__media--siroka{aspect-ratio:auto}.wsq__media--siroka img{height:auto;aspect-ratio:5/3}
.wsq__media--tamna{background:#0d0d0d}.wsq__media--tamna img{object-fit:cover;aspect-ratio:1600/777}
.wsq__grid{display:grid;gap:22px;margin-top:26px;align-items:stretch}
.wsq__grid--4{grid-template-columns:repeat(4,1fr)}.wsq__grid--3{grid-template-columns:repeat(3,1fr)}
.wsq__k{background:#fff;border-radius:16px;overflow:hidden;box-shadow:0 8px 24px rgba(20,40,80,.10);transition:transform .2s,box-shadow .2s;display:flex;flex-direction:column}
.wsq__k:hover{transform:translateY(-3px);box-shadow:0 14px 30px rgba(20,40,80,.16)}
.wsq__km img,.wsq__km video{width:100%;aspect-ratio:1/1;object-fit:cover;display:block}
.wsq__km--tel{background:#0b0b0d}.wsq__km--tel img{aspect-ratio:780/1000;object-fit:cover}
.wsq__km--crna{background:#000}
.wsq__kt{padding:18px 20px 22px}.wsq__kt strong{display:block;font-size:16.5px;margin-bottom:6px}.wsq__kt p{margin:0;font-size:14.5px;line-height:1.55;color:#3a4458}
.wsq__kt--c{text-align:center;display:flex;flex-direction:column;align-items:center}
.wsq__ikmala{width:48px;height:48px;border-radius:50%;background:#e0eaf4;color:#00467c;display:flex;align-items:center;justify-content:center;margin:-42px 0 10px;border:3px solid #fff;box-shadow:0 4px 12px rgba(20,40,80,.12)}
.wsq__oz{display:inline-block;font-size:13px;font-weight:700;letter-spacing:.6px;text-transform:uppercase;color:#00467c;margin-bottom:6px}
.wsq__st{display:flex;width:34px;height:34px;border-radius:50%;background:#00467c;color:#fff;font-weight:800;font-size:15px;align-items:center;justify-content:center;margin-bottom:10px}
.wsq__k--ik{padding:28px 26px;text-align:center;align-items:center}.wsq__k--ik strong{font-size:17px;margin:0 0 6px}.wsq__k--ik p{margin:0;font-size:14.5px;line-height:1.55;color:#3a4458}
.wsq__ikona{width:60px;height:60px;border-radius:50%;background:#e0eaf4;color:#00467c;display:flex;align-items:center;justify-content:center;margin-bottom:14px;border:1px solid #00467c}
.wsq__vs{display:grid;grid-template-columns:1fr 1fr;gap:28px;margin-top:26px}
.wsq__vsk{background:linear-gradient(160deg,#1d2c44,#0b1422);border-radius:18px;padding:34px 34px 30px;display:flex;flex-direction:column;align-items:center;gap:18px;box-shadow:0 14px 34px rgba(20,40,80,.18)}
.wsq__vsk img{width:100%;max-width:420px;height:auto;display:block}
.wsq__vsk:not(.wsq__vsk--pro){background:linear-gradient(160deg,#5b6577,#353d4b)}
.wsq__vsz{display:inline-block;background:#000;color:#fff;font-weight:800;letter-spacing:2px;font-size:20px;padding:8px 22px;border-radius:30px;box-shadow:inset 0 0 0 1px rgba(255,255,255,.25)}
.wsq__vsz--siva{background:transparent;box-shadow:none;letter-spacing:.5px;font-weight:600;font-size:22px}
.wsq__tocke{margin-top:28px}
.wsq__stavke{list-style:none;margin:6px 0 0;padding:0;display:grid;gap:16px}
.wsq__stavke li{display:flex;gap:16px;align-items:flex-start;list-style:none;background:#fff;border-radius:14px;padding:18px 20px;box-shadow:0 6px 18px rgba(20,40,80,.08)}
.wsq__stavke strong{display:block;font-size:16px;margin-bottom:4px}.wsq__stavke p{margin:0;font-size:14.5px;line-height:1.55;color:#3a4458}
.wsq__pi{flex:0 0 46px;width:46px;height:46px;border-radius:50%;background:#e0eaf4;color:#00467c;display:flex;align-items:center;justify-content:center}
.wsq__tw{overflow-x:auto;margin-top:22px}
.wsq__tab{width:100%;border-collapse:separate;border-spacing:0;background:#fff;border-radius:16px;overflow:hidden;font-size:15.5px;box-shadow:0 8px 24px rgba(20,40,80,.10)}
.wsq__tab th,.wsq__tab td{padding:16px 18px;border-bottom:1px solid #edf1f6;text-align:center}
.wsq__tab th{background:#14213a!important;color:#fff!important;font-weight:700}.wsq__tab th.wsq__tnasa{background:#00467c!important}
.wsq__tab td:first-child,.wsq__tab th:first-child{text-align:left;font-weight:600}
.wsq__tab tr:last-child td{border-bottom:0}
.wsq__da{color:#1f8a4c;font-weight:800;font-size:18px}.wsq__ne{color:#c0392b;font-weight:800;font-size:18px}
.wsq__karw{position:relative;margin-top:24px}
.wsq__kar{display:grid;grid-auto-flow:column;grid-auto-columns:calc((100% - 66px)/4);gap:22px;overflow-x:auto;scroll-snap-type:x mandatory;scrollbar-width:none;padding:4px 2px 10px}
.wsq__kar::-webkit-scrollbar{display:none}
.wsq__kk{scroll-snap-align:start;background:#fff;border-radius:16px;box-shadow:0 8px 24px rgba(20,40,80,.10);overflow:hidden;display:flex;flex-direction:column}
.wsq__kkm{background:#f6f8fb;padding:18px 24px 0}.wsq__kkm img{width:100%;aspect-ratio:900/1548;object-fit:contain;display:block}
.wsq__kkt{padding:14px 18px 18px;display:flex;gap:12px;align-items:center}.wsq__kkt .wsq__st{flex:0 0 34px;margin:0}.wsq__kkt strong{font-size:15px;line-height:1.35}
.wsq__pus{position:absolute;top:42%;transform:translateY(-50%);width:42px;height:42px;border-radius:50%;border:0;background:#fff;box-shadow:0 4px 14px rgba(0,0,0,.18);font-size:24px;line-height:42px;cursor:pointer;z-index:2;color:#00467c;padding:0}
.wsq__pus--l{left:-14px}.wsq__pus--d{right:-14px}
@media (max-width:991px){.wsq__grid--4{grid-template-columns:1fr 1fr}.wsq__kar{grid-auto-columns:calc((100% - 44px)/3)}}
@media (max-width:767px){
  .wsq__s{padding:48px 0}.wsq__v{padding:0 16px}
  .wsq__dva{grid-template-columns:1fr;gap:26px}.wsq__dva--rev>.wsq__media{order:0}
  .wsq__grid--3{grid-template-columns:1fr}.wsq__grid--4{gap:12px}.wsq__kt{padding:14px 14px 16px}.wsq__kt strong{font-size:15px}.wsq__kt p{font-size:13.5px}
  .wsq__km--tel img{max-height:360px;object-fit:contain;margin:0 auto}
  .wsq__vs{grid-template-columns:1fr 1fr;gap:12px}.wsq__vsk{padding:18px 14px;gap:12px}.wsq__vsz{font-size:15px;padding:6px 14px}.wsq__vsz--siva{font-size:16px}
  .wsq__tab{font-size:14px}.wsq__tab th,.wsq__tab td{padding:12px 10px}
  .wsq__kar{grid-auto-columns:72%;gap:14px}.wsq__pus--l{left:4px}.wsq__pus--d{right:4px}
}
</style>
<script>
(function(){document.querySelectorAll('.wsq__karw').forEach(function(w){var k=w.querySelector('.wsq__kar');
  w.querySelectorAll('.wsq__pus').forEach(function(b){b.addEventListener('click',function(){var x=k.firstElementChild;var d=x?x.getBoundingClientRect().width+22:300;k.scrollBy({left:b.classList.contains('wsq__pus--l')?-d:d,behavior:'smooth'});});});
});})();
</script>
