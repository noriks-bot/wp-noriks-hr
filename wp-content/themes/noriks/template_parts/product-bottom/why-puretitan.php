<?php
/**
 * NORIKS PureTitan — tava od 100 % cistog titana bez premaza: why sekcije po strukturi originala
 * (titanoxufficiale.com/products/padella-100-titanio-puro-titanox-it).
 *
 * STRUKTURA ORIGINALA:
   1. "IN AZIONE": naslov + vodoravni karusel 5 pokoncnih videov kuhanja - pri nas enako (5 videov originala, karusel s puscicami)
   2. "Hanno ritrovato il piacere di cucinare" + ocena + karusel kartic kupcev (fotografija ali video zgoraj, citat, ime, preverjen kupec) - pri nas enako, 6 kartic (videi in fotografije originala; znamka na etiketi in vrecki zamenjana z NORIKS, fotografije z vidno tujo znamko izpuscene); tuja ocena/stevilo mnenj zamenjana z nasim (4,8 / 1.081)
   3. trak logotipov medijev (ticker) - IZPUSCENO: tuje znamke medijev
   4. "7 MOTIVI": naslov + 7 ostevilcenih vrstic slika/video ob besedilu - pri nas 7 vrstic cik-cak z mediji originala (4 videi, 3 slike); "dozivljenjsko jamstvo" zamenjano z izdrzljivostjo, zdravstvene trditve izpuscene
   5. gumb CTA - IZPUSCENO (brez CTA blokov)
   6. "IL PROBLEMA": naslov + 3 kartice s sliko v vrsti (lijepljenje, premaz v hrani, nova tava vsake 2 godine) - pri nas enako, 3 kartice z ikonami in slikami originala
   7. slideshow brez vsebine - IZPUSCENO
   8. "RECENSIONI DEI CLIENTI": karusel tekstnih mnenj z zvezdicami, naslovom in imenom - pri nas mreza 6 kartic mnenj (3 v vrsti) + nasa ocena
   9. promo slika ustanovitelja s tujo znamko in akcijo - IZPUSCENO (tuja znamka, akcija)
  10. ponovljena nakupna skatla - IZPUSCENO (je ze zgoraj)
  11. FAQ - pri nas FAQ v sekciji mnenj (Informacije o proizvodu)
  12. "OFFERTA LIMITATA" z odstevalnikom - IZPUSCENO (promo)
  13. 4 ikone (brezplacna dostava, podpora, 30 dni, varno placilo) - pri nas skupna sekcija NORIKS pogoji na koncu
 * BARVA ORIGINALA: #273b84 (temno modre oznake in gumbi na infografikah originala); svetel ton za --bg #eef1f8, akcent #273b84
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
$wspt_img = get_template_directory_uri() . '/img/puretitan/';
$wspt_svg = '<svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">';
$wspt_vid = function ( $ime ) use ( $wspt_img ) {
	return '<video src="' . esc_url( $wspt_img . $ime . '.mp4' ) . '" poster="' . esc_url( $wspt_img . $ime . '.jpg' ) . '" autoplay muted loop playsinline webkit-playsinline preload="metadata"></video>';
};
$wspt_razlogi = array(
	array( 'video' => 'noriks-puretitan-razlog-1', 'znacka' => 'Bez premaza', 'naslov' => 'Površina na kojoj se <em>ništa ne lijepi</em>',
		'p' => array( 'Čisti titan prirodno slabo prianja uz hranu, a kovana površina tave stvara tisuće sitnih izbočina koje smanjuju dodir hrane s dnom. Upravo ta kombinacija čini da se jaja, riba i meso odvajaju sami – bez ikakvog premaza.',
			'Ne trebate posebne trikove ni dugo predgrijavanje kao kod obične inox tave. Kuhate normalno, okrenete lopaticom i hrana klizi.' ),
		'zak' => 'Jaje klizne s tave – i bez premaza.' ),
	array( 'slika' => 'noriks-puretitan-razlog-2', 'alt' => 'Klasična tava s oštećenim premazom i tava od čistog titana na plinskom štednjaku', 'znacka' => 'Bez PFAS', 'naslov' => 'Bez premaza – <em>bez PFAS, PTFE i PFOA</em>',
		'p' => array( 'Kod klasične tave premaz se s vremenom troši, a sitni komadići premaza završavaju u jelu. NORIKS PureTitan nema premaza koji bi se mogao ljuštiti – kuhate izravno na površini od čistog titana.',
			'Nema kemijskog sloja, nema impregnacije i nema skrivenih dodataka. U tavi je samo ono što ste u nju stavili: vaša hrana.' ),
		'zak' => 'Samo titan i vaša hrana – ništa između.' ),
	array( 'slika' => 'noriks-puretitan-razlog-3', 'alt' => 'Losos s tjesteninom u tavi od čistog titana', 'znacka' => 'Ravnomjerno', 'naslov' => 'Titan za <em>puniji okus</em>',
		'p' => array( 'Tava se brzo zagrije, a toplina se raspoređuje po cijelom dnu ravnomjerno – bez hladnih rubova i zagorjele sredine. Meso dobije lijepu koricu, povrće se zapeče, a sokovi ostaju u jelu.',
			'Ravnomjerno pečenje znači manje miješanja i manje nagađanja: jelo je pečeno jednako od ruba do sredine i ima puniji okus.' ),
		'zak' => 'Jednako pečeno od ruba do sredine.' ),
	array( 'slika' => 'noriks-puretitan-razlog-4', 'alt' => 'Jaje pečeno na klasičnoj tavi s puno ulja i na tavi od titana s malo ulja', 'znacka' => '3× manje ulja', 'naslov' => '<em>3 puta manje</em> ulja',
		'p' => array( 'Više ne morate utapati hranu u ulju da biste uspjeli s jelom. Kovana površina traži samo kap masnoće za isti rezultat – jaje, palačinka ili odrezak ne zalijepe se ni s malo ulja.',
			'Manje ulja u tavi znači lakše jelo na tanjuru i manje masnih mrlja po štednjaku.' ),
		'zak' => 'Kap ulja je dovoljna.' ),
	array( 'video' => 'noriks-puretitan-razlog-5', 'znacka' => 'Sve ploče', 'naslov' => 'Za <em>sve vrste ploča</em>',
		'p' => array( 'Indukcija, plin, električna ploča, staklokeramika ili pećnica – tava radi na svim vrstama ploča i bez muke se uklapa u vašu kuhinju.',
			'Dno tave napravljeno je za indukciju, a u pećnici izdrži do 260 °C. Meso zapečete na ploči, a završite u pećnici – u istoj tavi.' ),
		'zak' => 'Jedna tava za ploču i pećnicu.' ),
	array( 'video' => 'noriks-puretitan-razlog-6', 'znacka' => 'Perilica posuđa', 'naslov' => 'Čisti se <em>u par sekundi</em>',
		'p' => array( 'Topla voda, malo deterdženta i jedan potez spužvom – i tava je kao nova. Budući da se hrana ne lijepi i ne zagori, nema ribanja ni namakanja preko noći.',
			'Tava je prikladna i za perilicu posuđa, ali vjerojatno vam neće ni trebati.' ),
		'zak' => 'Spužva, voda – i gotovo.' ),
	array( 'video' => 'noriks-puretitan-razlog-7', 'znacka' => 'Iz metala', 'naslov' => 'Izrađena od metala, <em>napravljena da traje</em>',
		'p' => array( 'Ovo nije tava za jednokratnu upotrebu s premazom koji samo izgleda kao titan. Izrađena je od metala, otporna je i napravljena da godinama ostane u vašoj kuhinji.',
			'Metalne lopatice, pjenjače i hvataljke smijete koristiti bez straha – nema premaza koji bi se izgrebao ili ogulio.' ),
		'zak' => 'Kupite jednom – kuhajte godinama.' ),
);
$wspt_kupci = array(
	array( 'video' => 'noriks-puretitan-kupac-1', 'ime' => 'Vesna S.', 't' => 'Snimila sam svoj prvi recept na ovoj tavi. Dosta mi je bilo kuhanja na tavi s koje se ljušti premaz. Sad kuham opušteno i ništa se ne lijepi. Preporučujem 100 %!' ),
	array( 'slika' => 'noriks-puretitan-kupac-2', 'alt' => 'Pečena piletina s krumpirom u tavi od čistog titana', 'ime' => 'Katarina M.', 't' => 'Prva piletina u novoj tavi. Malo sam se bojala da će se bez premaza zalijepiti, ali nimalo. I pranje mi je trajalo samo dvije minute. Zadovoljna sam kupnjom.' ),
	array( 'video' => 'noriks-puretitan-kupac-3', 'ime' => 'Petra V.', 't' => 'Uzela sam je da se riješim stare tave s premazom, a na kraju me najviše oduševila kvaliteta pečenja. Jela mi uvijek uspiju bez puno truda.' ),
	array( 'slika' => 'noriks-puretitan-kupac-4', 'alt' => 'Kupac drži tavu od čistog titana na vrtnom roštilju', 'ime' => 'Ante D.', 't' => 'Kuham gotovo svaki dan i na tavi još nema ni ogrebotine. Jasno – najbolja investicija koju sam mogao napraviti za svoju kuhinju.' ),
	array( 'video' => 'noriks-puretitan-kupac-5', 'ime' => 'Elena R.', 't' => 'Moj specijalitet su polpete. Na staroj tavi su se lijepile, raspadale i stalno sam morala strugati. Sad same kližu, a pečenje je puno ujednačenije.' ),
	array( 'slika' => 'noriks-puretitan-kupac-6', 'alt' => 'Majka s djecom u kuhinji drži tavu od čistog titana', 'ime' => 'Elizabeta B.', 't' => 'Htjela sam tavu bez premaza na kojoj mirno kuham za cijelu obitelj. Djeca jedu svoja omiljena jela, a ja ne razmišljam o tome što se ljušti s tave.' ),
);
$wspt_recenzije = array(
	array( 'Kuham opuštenije', 'Prije nisam razmišljala o površini na kojoj kuham… sad pazim na to. Postalo je automatski i iskreno, promijenilo je cijeli moj pogled na kuhanje. Hvala!', 'Natalija P.' ),
	array( 'Jedina tava koja drži obećanje', 'Probala sam sve – lijevano željezo, inox, keramiku. Ništa nije dugo trajalo. Ovu imam 8 mjeseci: nula ogrebotina, ništa se ne lijepi. Losos se odvoji sam.', 'Marko B.' ),
	array( 'Manje brige', 'Kuham na brzinu kad dođem s posla i smetalo mi je kad bi se hrana zalijepila ili zagorjela. Sad je sve čišće, brže i jednostavnije. Uštedjela sam vrijeme.', 'Sara T.' ),
	array( 'Jednostavno, brzo, bez stresa', 'Iskreno, vratila mi je užitak u kuhanju. Lako se koristi, gotovo se ništa ne lijepi i ne moram razmišljati o svakom pokretu.', 'Kamila F.' ),
	array( 'Osjeti se razlika', 'Probala sam dosta tava i ova je stvarno drugačija. Pečenje je ravnomjernije, čišće i imam više kontrole. Nema usporedbe s tavama s premazom.', 'Eliza G.' ),
	array( 'Bez komplikacija', 'Nisam kuharica, samo želim kuhati bez komplikacija. Ova tava radi upravo to. I nema više premaza koji se ljušti u jelo. To je sve što mi je trebalo.', 'Amalija L.' ),
);
?>
<div class="wspt">

<section class="wspt__s wspt__s--bg"><div class="wspt__v">
  <div class="wspt__kicker wspt__c">Na djelu</div>
  <h2 class="wspt__h2 wspt__c">NORIKS PureTitan <em>u stvarnoj kuhinji</em></h2>
  <p class="wspt__p wspt__c">Jaja, odresci, riba i povrće – pogledajte kako se hrana na kovanoj površini od čistog titana peče i odvaja bez premaza i bez puno ulja.</p>
  <div class="wspt__kar wspt__kar--vid" data-wspt-kar>
    <?php for ( $i = 1; $i <= 5; $i++ ) : ?>
    <div class="wspt__vk"><?php echo $wspt_vid( 'noriks-puretitan-na-djelu-' . $i ); ?></div>
    <?php endfor; ?>
  </div>
  <p class="wspt__zak">Kuhate normalno – a hrana se odvaja sama.</p>
</div></section>

<section class="wspt__s"><div class="wspt__v">
  <div class="wspt__kicker wspt__c">Kupci kuhaju</div>
  <h2 class="wspt__h2 wspt__c">Ponovno uživaju u kuhanju <em>bez premaza</em></h2>
  <div class="wspt__ocena"><span class="wspt__zv">★★★★★</span><strong>Odlično 4,8 / 5</strong><span>na temelju 1.081 recenzije</span></div>
  <div class="wspt__kar wspt__kar--kup" data-wspt-kar>
    <?php foreach ( $wspt_kupci as $k ) : ?>
    <div class="wspt__kk">
      <div class="wspt__kkm"><?php echo isset( $k['video'] ) ? $wspt_vid( $k['video'] ) : '<img src="' . esc_url( $wspt_img . $k['slika'] . '.webp' ) . '" alt="' . esc_attr( $k['alt'] ) . '" loading="eager" decoding="async">'; ?></div>
      <div class="wspt__kkt">
        <span class="wspt__prov"><?php echo $wspt_svg; ?><circle cx="12" cy="12" r="9"/><path d="M7.8 12.3l2.8 2.8 5.6-5.8"/></svg>Provjereni kupac</span>
        <p>„<?php echo esc_html( $k['t'] ); ?>“</p>
        <strong><?php echo esc_html( $k['ime'] ); ?></strong>
      </div>
    </div>
    <?php endforeach; ?>
  </div>
  <p class="wspt__zak">Od prvog jaja do nedjeljnog ručka – tava koju uzimaju svaki dan.</p>
</div></section>

<section class="wspt__s wspt__s--bg"><div class="wspt__v">
  <div class="wspt__kicker wspt__c">7 razloga</div>
  <h2 class="wspt__h2 wspt__c">Zašto će NORIKS PureTitan biti <em>posljednja tava koju kupite</em></h2>
  <p class="wspt__p wspt__c">Tava od čistog titana koja zamjenjuje sve ostale.</p>
  <div class="wspt__razlogi">
    <?php foreach ( $wspt_razlogi as $n => $r ) : ?>
    <div class="wspt__dva<?php echo $n % 2 ? ' wspt__dva--rev' : ''; ?>">
      <div class="wspt__media"><?php echo isset( $r['video'] ) ? $wspt_vid( $r['video'] ) : '<img src="' . esc_url( $wspt_img . $r['slika'] . '.webp' ) . '" alt="' . esc_attr( $r['alt'] ) . '" loading="eager" decoding="async">'; ?><span class="wspt__znacka"><?php echo esc_html( $r['znacka'] ); ?></span></div>
      <div>
        <span class="wspt__st"><?php echo (int) $n + 1; ?></span>
        <h3 class="wspt__h3"><?php echo wp_kses( $r['naslov'], array( 'em' => array() ) ); ?></h3>
        <?php foreach ( $r['p'] as $p ) : ?><p class="wspt__p"><?php echo esc_html( $p ); ?></p><?php endforeach; ?>
        <p class="wspt__zak"><?php echo esc_html( $r['zak'] ); ?></p>
      </div>
    </div>
    <?php endforeach; ?>
  </div>
</div></section>

<section class="wspt__s"><div class="wspt__v">
  <div class="wspt__kicker wspt__c">Problem</div>
  <h2 class="wspt__h2 wspt__c">Klasične tave <em>ne drže obećanja</em></h2>
  <p class="wspt__p wspt__c">Iza lijepih obećanja krije se tava koja se troši, ljušti i koju svakih nekoliko godina morate kupiti ponovno.</p>
  <div class="wspt__grid">
    <div class="wspt__k"><div class="wspt__km"><img src="<?php echo esc_url( $wspt_img . 'noriks-puretitan-problem-1.webp' ); ?>" alt="Jaje zalijepljeno na oštećenoj tavi s premazom" loading="eager" decoding="async"><span class="wspt__kst">1</span></div><div class="wspt__kt"><span class="wspt__ik"><?php echo $wspt_svg; ?><circle cx="12" cy="12" r="8.5"/><path d="M8 15c1-1.2 2.4-1.8 4-1.8s3 .6 4 1.8"/><path d="M9 9.5h.01M15 9.5h.01"/></svg></span><strong>Na kraju se sve zalijepi</strong><p>Premaz se troši pri svakom kuhanju. Hrana se lijepi, treba sve više masnoće, a jelo svejedno ne uspije.</p></div></div>
    <div class="wspt__k"><div class="wspt__km"><img src="<?php echo esc_url( $wspt_img . 'noriks-puretitan-problem-2.webp' ); ?>" alt="Odrezak i mahune na tanjuru s oznakom upozorenja" loading="eager" decoding="async"><span class="wspt__kst">2</span></div><div class="wspt__kt"><span class="wspt__ik"><?php echo $wspt_svg; ?><path d="M12 3l9 16H3z"/><path d="M12 10v4M12 17h.01"/></svg></span><strong>Premaz završava u tanjuru</strong><p>Pri svakom kuhanju premaz se troši i ljušti. Sitni komadići premaza završavaju u jelu cijele obitelji.</p></div></div>
    <div class="wspt__k"><div class="wspt__km"><img src="<?php echo esc_url( $wspt_img . 'noriks-puretitan-problem-3.webp' ); ?>" alt="Stare oštećene tave u kanti za smeće" loading="eager" decoding="async"><span class="wspt__kst">3</span></div><div class="wspt__kt"><span class="wspt__ik"><?php echo $wspt_svg; ?><path d="M4 7h16M9 7V4h6v3M6 7l1 13h10l1-13"/><path d="M10 11v6M14 11v6"/></svg></span><strong>Nova tava svake 2 godine</strong><p>Premaz se istroši i tava završi u smeću. Jeftine pri kupnji, a u 10 godina vas stoje gotovo 1.000 €.</p></div></div>
  </div>
  <p class="wspt__zak">Zato smo napravili tavu bez premaza – od čistog titana.</p>
</div></section>

<section class="wspt__s wspt__s--bg"><div class="wspt__v">
  <div class="wspt__kicker wspt__c">Recenzije kupaca</div>
  <h2 class="wspt__h2 wspt__c">Što kažu oni koji <em>već kuhaju</em> na njoj</h2>
  <div class="wspt__grid wspt__grid--rec">
    <?php foreach ( $wspt_recenzije as $r ) : ?>
    <div class="wspt__rk">
      <span class="wspt__zv">★★★★★</span>
      <strong class="wspt__rn"><?php echo esc_html( $r[0] ); ?></strong>
      <p><?php echo esc_html( $r[1] ); ?></p>
      <div class="wspt__ri"><span class="wspt__av"><?php echo esc_html( mb_substr( $r[2], 0, 1 ) ); ?></span><span><strong><?php echo esc_html( $r[2] ); ?></strong> · Provjerena recenzija</span></div>
    </div>
    <?php endforeach; ?>
  </div>
  <p class="wspt__zak"><span class="wspt__vel">4,8 / 5</span> na temelju 1.081 recenzije i više od 120.000 kupaca.</p>
</div></section>

<section class="wspt__s npg-s"><?php $npg = array( 'izdelek' => 'NORIKS PureTitan', 'barva' => '#273b84' ); include __DIR__ . '/noriks-pogoji.php'; ?></section>
</div>
<style>
.wspt{color:#1c1c1c;font-family:inherit}
.wspt__s{padding:72px 0;background:#fff}.wspt__s.wspt__s--bg{background:#eef1f8}
.wspt__v{width:100%;max-width:1240px;margin:0 auto;padding:0 24px;box-sizing:border-box}
.wspt__c{text-align:center}
.wspt__kicker{font-size:12.5px;letter-spacing:1.8px;text-transform:uppercase;color:#273b84;margin:0 0 8px;font-weight:700}
.wspt__kicker::before{content:"";display:inline-block;width:22px;height:2px;background:#273b84;vertical-align:middle;margin:-2px 10px 0 0;border-radius:2px}
.wspt__h2{font-size:clamp(24px,3vw,34px);font-weight:800;line-height:1.2;margin:0 0 18px;color:#1c1c1c}.wspt__h2 em,.wspt__h3 em{font-style:italic;color:#273b84}
.wspt__h3{font-size:clamp(21px,2.4vw,27px);font-weight:800;line-height:1.25;margin:0 0 14px;color:#1c1c1c}
.wspt__p{font-size:15.5px;line-height:1.65;color:#333;margin:0 0 14px}
.wspt__zak{font-size:16px;font-weight:800;line-height:1.5;margin:22px 0 0}
.wspt__v>.wspt__zak{text-align:center}
.wspt__dva .wspt__zak{border-left:3px solid #273b84;padding-left:14px;margin-top:16px}
/* karusel */
.wspt__karw{position:relative;margin-top:26px}
.wspt__kar{display:grid;grid-auto-flow:column;gap:20px;overflow-x:auto;scroll-snap-type:x mandatory;scrollbar-width:none;padding:4px 2px 14px}
.wspt__kar::-webkit-scrollbar{display:none}
.wspt__kar>*{scroll-snap-align:start}
.wspt__kar--vid{grid-auto-columns:calc((100% - 80px) / 5)}
.wspt__kar--kup{grid-auto-columns:calc((100% - 40px) / 3)}
.wspt__pus{position:absolute;top:50%;transform:translateY(-50%);width:44px;height:44px;border-radius:50%;border:0;background:#fff;box-shadow:0 4px 14px rgba(39,59,132,.25);font-size:24px;line-height:44px;cursor:pointer;z-index:2;color:#273b84;padding:0}
.wspt__pus--l{left:-16px}.wspt__pus--d{right:-16px}
.wspt__vk{border-radius:16px;overflow:hidden;aspect-ratio:9/16;background:#1c1c1c;box-shadow:0 10px 26px rgba(39,59,132,.18)}
.wspt__vk video{width:100%;height:100%;object-fit:cover;display:block}
/* kupci */
.wspt__ocena{display:flex;align-items:center;justify-content:center;gap:10px;flex-wrap:wrap;font-size:15px;color:#444;margin:-4px 0 0}
.wspt__ocena strong{font-size:17px;color:#1c1c1c}
.wspt__zv{color:#e0a33c;letter-spacing:2px;font-size:17px}
.wspt__kk{background:#fff;border-radius:16px;overflow:hidden;display:flex;flex-direction:column;box-shadow:0 8px 24px rgba(39,59,132,.12)}
.wspt__kkm{aspect-ratio:1/1;background:#1c1c1c}.wspt__kkm img,.wspt__kkm video{width:100%;height:100%;object-fit:cover;display:block}
.wspt__kkt{padding:20px 22px 22px;flex:1;display:flex;flex-direction:column}
.wspt__kkt p{margin:10px 0 14px;font-size:15.5px;line-height:1.55;color:#333;flex:1}
.wspt__kkt strong{font-size:15px}
.wspt__prov{display:inline-flex;align-items:center;gap:6px;font-size:12.5px;font-weight:700;letter-spacing:.6px;text-transform:uppercase;color:#1f8a4c}
.wspt__prov svg{width:18px;height:18px}
/* 7 razloga */
.wspt__razlogi{display:flex;flex-direction:column;gap:56px;margin-top:34px}
.wspt__dva{display:grid;grid-template-columns:1fr 1fr;gap:56px;align-items:center}.wspt__dva--rev>div:first-child{order:2}
.wspt__media{position:relative;border-radius:16px;overflow:hidden;box-shadow:0 14px 34px rgba(39,59,132,.20);aspect-ratio:4/5;background:#1c1c1c}
.wspt__media img,.wspt__media video{width:100%;height:100%;object-fit:cover;display:block}
.wspt__znacka{position:absolute;left:16px;top:16px;background:#fff;color:#273b84;font-size:12px;font-weight:800;letter-spacing:1px;text-transform:uppercase;padding:7px 12px;border-radius:20px;box-shadow:0 4px 12px rgba(0,0,0,.15)}
.wspt__st{display:inline-flex;align-items:center;justify-content:center;width:46px;height:46px;border-radius:50%;background:#273b84;color:#fff;font-size:20px;font-weight:800;margin:0 0 14px;box-shadow:0 6px 14px rgba(39,59,132,.30)}
/* problem */
.wspt__grid{display:grid;grid-template-columns:repeat(3,1fr);gap:22px;margin-top:26px;align-items:stretch}
.wspt__k{background:#fff;border-radius:16px;overflow:hidden;display:flex;flex-direction:column;box-shadow:0 8px 24px rgba(39,59,132,.12);transition:transform .2s,box-shadow .2s}
.wspt__k:hover,.wspt__rk:hover{transform:translateY(-3px);box-shadow:0 14px 30px rgba(39,59,132,.20)}
.wspt__km{position:relative}.wspt__km img{width:100%;aspect-ratio:4/3;object-fit:cover;display:block}
.wspt__kst{position:absolute;left:14px;top:14px;width:36px;height:36px;border-radius:50%;background:#c62828;color:#fff;font-weight:800;display:flex;align-items:center;justify-content:center}
.wspt__kt{padding:22px 24px 24px;text-align:center;flex:1}
.wspt__kt strong{display:block;font-size:18px;font-weight:800;margin:0 0 8px}.wspt__kt p{margin:0;font-size:15px;line-height:1.6;color:#444}
.wspt__ik{width:54px;height:54px;border-radius:50%;background:#dfe5f3;color:#273b84;border:1px solid #273b84;display:flex;align-items:center;justify-content:center;margin:-50px auto 12px;position:relative;box-shadow:0 0 0 5px #fff}
/* recenzije */
.wspt__rk{background:#fff;border-radius:16px;padding:26px 24px;display:flex;flex-direction:column;box-shadow:0 8px 24px rgba(39,59,132,.10);transition:transform .2s,box-shadow .2s}
.wspt__rn{display:block;font-size:17px;font-weight:800;margin:8px 0 8px}
.wspt__rk p{margin:0 0 16px;font-size:15.5px;line-height:1.55;color:#333;flex:1}
.wspt__ri{display:flex;align-items:center;gap:10px;font-size:14px;color:#555}
.wspt__av{width:38px;height:38px;border-radius:50%;background:#dfe5f3;color:#273b84;font-weight:800;display:flex;align-items:center;justify-content:center;flex:0 0 38px}
.wspt__vel{font-size:22px;color:#273b84}
@media (max-width:860px){
  .wspt__s{padding:48px 0}
  .wspt__v{padding:0 16px}
  .wspt__dva{grid-template-columns:1fr;gap:22px}.wspt__dva--rev>div:first-child{order:0}
  .wspt__razlogi{gap:44px}
  .wspt__kar--vid{grid-auto-columns:46%}
  .wspt__kar--kup{grid-auto-columns:84%}
  .wspt__pus--l{left:4px}.wspt__pus--d{right:4px}
  .wspt__grid{grid-template-columns:1fr;gap:30px}
}
@media (min-width:561px) and (max-width:860px){.wspt__grid--rec{grid-template-columns:1fr 1fr;gap:20px}}
</style>
<script>
(function(){document.querySelectorAll('[data-wspt-kar]').forEach(function(k){
  var w=document.createElement('div');w.className='wspt__karw';k.parentNode.insertBefore(w,k);w.appendChild(k);
  ['l','d'].forEach(function(s){var b=document.createElement('button');b.type='button';b.className='wspt__pus wspt__pus--'+s;b.setAttribute('aria-label',s==='l'?'Prethodno':'Sljedeće');b.innerHTML=s==='l'?'&#8249;':'&#8250;';
    b.addEventListener('click',function(){var x=k.firstElementChild;var d=x?x.getBoundingClientRect().width+20:300;k.scrollBy({left:s==='l'?-d:d,behavior:'smooth'});});w.appendChild(b);});
});})();
</script>
