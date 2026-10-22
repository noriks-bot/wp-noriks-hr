<?php
/**
 * product-bottom: NORIKS Doggo — sigurnosni autokrevet za pse s ISOFIX kopčama (orto-doggo).
 * Original: waggingrightsusa.com/products/doggo-dock — vsebina in vrstni red 1:1 z originalom, oblika po NORIKS stilu
 * (kot why-hands.php: slika/video vedno ob besedilu, strani se izmenjujeta, brez pasic, drsnikov, valov in animacij).
 *   1) Video: Max v skladiscu (video levo, besedilo iz videa desno)
 *   2) Kartice mnenj s fotografijami (preprosta mreza, brez drsnika)
 *   3) Video: XL krevet za dva psa (besedilo levo, video desno)
 *   4) 6 videov kupcev (mreza, predvajanje ob kliku)
 *   5) Video: Doggo v prtljazniku (video levo, besedilo desno)
 *   6) Zašto Doggo? (besedilo levo, velika slika z originala desno)
 *   7) 6 prednosti s slikami (kartice: slika ob besedilu)
 *   8) Ikone: besplatna dostava iznad 70 € / 30 dana za povrat / povjerenje tisuća kupaca
 *   9) Video izdelka: otkopča se u krevet (video levo, besedilo z originala desno; brez samodejnega predvajanja)
 *  11) Recenzije kupaca (4.8 / 919, sažetak, mreža 40 mnenj s fotografijami, "Prikaži više")
 * Nakupna skatla: samo standardni NORIKS bloki — opis, velicine in pasmine ter "Sigurnost psa u vožnji" so v meta.php
 * (Detalji o proizvodu) in v tablici velicin (size-chart-doggo.php / noriks_doggo_sizes()).
 * FAQ je v reviews.php ($doggo_faq), kratka mnenja v auto_reviews/HR_doggo.php.
 * Izpusceno: glava trgovine, drugi izdelki, "Extra 20% off 2nd Dog Dock", "Wagging Gives Back!", "Lifetime Warranty",
 * "Free DHL Express", brezplacna zdjelica, promo pasica z odstevanjem, tekoci trak, "Just restocked" (NORIKS stil in pogoji).
 * Slike: img/doggo/ (logotip konkurenta na slikah prednosti odstranjen, napisi prevedeni v hrvascino).
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$ndg      = get_template_directory_uri() . '/img/doggo/';
$ndg_path = get_template_directory() . '/img/doggo/';
$ndg_img  = function( $file, $alt, $extra = '' ) use ( $ndg, $ndg_path ) {
  if ( ! file_exists( $ndg_path . $file ) ) { return ''; }
  return '<img src="' . esc_url( $ndg . $file ) . '" alt="' . esc_attr( $alt ) . '" loading="lazy"' . $extra . '>';
};
/* video s posterjem in gumbom (nalozi in predvaja se sele ob kliku) — brez zvoka */
$ndg_video = function( $file, $label, $ratio ) use ( $ndg, $ndg_path ) {
  if ( ! file_exists( $ndg_path . $file ) ) { return ''; }
  $poster = str_replace( '.mp4', '-poster.webp', $file );
  return '<div class="ndg-vid" style="aspect-ratio:' . esc_attr( $ratio ) . '">'
    . '<video src="' . esc_url( $ndg . $file ) . '"' . ( file_exists( $ndg_path . $poster ) ? ' poster="' . esc_url( $ndg . $poster ) . '"' : '' )
    . ' autoplay loop muted playsinline preload="metadata" disablepictureinpicture aria-label="' . esc_attr( $label ) . '"></video>'
    . '</div>';
};
$ndg_star  = '<svg viewBox="0 0 24 24" aria-hidden="true"><path fill="currentColor" d="M12 2.8l2.8 6 6.5.6-4.9 4.4 1.4 6.4L12 16.9l-5.8 3.3 1.4-6.4-4.9-4.4 6.5-.6z"/></svg>';
$ndg_stars = function( $n = 5 ) use ( $ndg_star ) {
  $o = '<span class="ndg-stars" aria-label="' . (int) $n . ' od 5 zvjezdica">';
  for ( $i = 1; $i <= 5; $i++ ) { $o .= '<i class="' . ( $i <= $n ? 'on' : 'off' ) . '">' . $ndg_star . '</i>'; }
  return $o . '</span>';
};
$ndg_ver = '<svg class="ndg-ver" viewBox="0 0 24 24" aria-hidden="true"><circle cx="12" cy="12" r="11" fill="currentColor"/><path d="M7 12.5l3.2 3.2L17 8.8" fill="none" stroke="#fff" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"/></svg>';

/* 7) prednosti — 1:1 z originala */
$ndg_hl = array(
  array( 'dg-hl-1.webp', 'Praktičan bočni džep', 'Sve potrebno imate pri ruci — od povodca i poslastica do igračaka za put. Siguran džep znači da na putovanju sa psom ne morate nositi više torbi.' ),
  array( 'dg-hl-4.webp', 'Podesivi remeni za sjedalo', 'Pričvrstite krevet na bilo koje autosjedalo podesivim remenima. Osmišljeni su za stabilnost — drže krevet na mjestu i štite ljubimca pri naglom kočenju ili skretanju.' ),
  array( 'dg-hl-2.webp', 'Protuklizno sigurnosno dno', 'Čvrsto protuklizno dno drži krevet stabilnim na autosjedalu ili glatkom podu, sprječava opasno klizanje tijekom vožnje i daje ljubimcu stabilno mjesto za odmor.' ),
  array( 'dg-hl-5.webp', 'Metalne ISOFIX kopče', 'Metalne ISOFIX kopče kopčaju se izravno u ISOFIX točke vašeg automobila, pa Doggo ostaje čvrsto pričvršćen, a pomicanje tijekom vožnje je manje.' ),
  array( 'dg-hl-3.webp', 'Uklonjiva, mekana unutarnja podloga', 'Neka vašem psu bude toplo i udobno uz mekanu, uklonjivu podlogu. Lako se pere i mijenja, pa pas uvijek ima higijenski i siguran kutak za odmor — kod kuće ili na putu. S jedne strane je i vodootporna.' ),
  array( 'dg-hl-6-hr.webp', 'Ugrađena sigurnosna kopča', 'Zakopčajte ormu svog psa na ugrađenu sigurnosnu kopču i putujte bez brige. Sprječava iskakanje i nagle pokrete, pa je vaš krzneni prijatelj siguran i zaštićen.' ),
);

/* 2) + 11) mnenja — 1:1 z originala (ista imena, ocene, datumi in fotografije; prevedeno) */
$ndg_rv = array(
  array( 'Mr I.', 5, '19. 10. 2026.', 'Presretni smo s novim autokrevetom 🩷🐾 Nairobi mu je dala svoju šapu odobravanja! 🩷🐾 Čim je ušla, osjećala se kao kod kuće. Izgleda kao mala princeza na svom sjedalu prve klase! 👑 Krevet je prekrasno dizajniran, odlično izgleda u autu i ugodan je i mekan. Savršen je za naše male avanture — Nairobi ima svoj udobni kutak za odmor i promatranje svijeta. Kao što vidite na fotografijama, svoj novi putni tron baš je zavoljela. Jedan vrlo sretan pomsky i jedan vrlo sretan kupac. Svakako preporučujem 🩷🐾' ),
  array( 'Elizabeth C.', 5, '18. 10. 2026.', 'Bertie obožava svoje novo autosjedalo i jedva ga izvučemo van kad stignemo na odredište 🤣 Jednostavno za korištenje i odlične kvalitete.' ),
  array( 'Rachael A.', 5, '17. 10. 2026.', 'Stvarno kvalitetan krevet, a čini se da ga moja kujica obožava. Prilično je mekan, što je super, ali mana je što joj na stražnjem sjedalu nije bilo baš udobno. Kupila sam i podložak za prostor za noge kako bi imala dodatnu potporu. Otkad smo ga stavili, obožava ga.' ),
  array( 'Andrea S.', 5, '17. 10. 2026.', 'Fantastična kvaliteta tkanine, stvarno čvrsto sjedalo za moju malu suvozačicu. Moja Luna mrzi auto, ali mislim da je to djelomično zato što se u starom sjedalu nikad nije osjećala sigurno i ono je malo klizalo po stražnjem sjedalu. Ovo se čvrsto kopča u ISOFIX i nije se nimalo pomaknulo. Vrlo jednostavno za sastaviti, trebalo mi je manje od pet minuta. 100 % preporučujem — ovo je NAJSIGURNIJE sjedalo koje sam ikad kupila. Neću reći da ga obožava, ali definitivno se manje boji vožnje.' ),
  array( 'Mrs S.', 5, '16. 10. 2026.', 'Maple obožava krevet gdje god bio — kad u njemu ne leže dva jack russella. Savršen krevet za svaku namjenu, posebno za auto.' ),
  array( 'Nicola G.', 5, '15. 10. 2026.', 'Psi ga koriste kao pravi krevet.' ),
  array( 'Amelia W.', 5, '15. 10. 2026.', 'Presladak, savršeno stane u moj Mini, psi ga obožavaju!' ),
  array( 'Ruby A.', 4, '15. 10. 2026.', 'Moj pas obožava ovaj krevet... čini se vrlo sigurnim, iako mislim da bi kopče mogle biti malo veće radi veće čvrstoće.' ),
  array( 'Joanne F.', 5, '14. 10. 2026.', 'Naša kujica boji se putovanja i inače se trese tijekom vožnje. Ne mogu vam opisati koliko smo bili oduševljeni kad je, čim smo sastavili krevet u kući, odmah ušla u njega, a sada je udobno odradila petosatno putovanje, 2 i pol sata u svakom smjeru, kao prvi test svog novog luksuznog PUTNOG sjedala. Veći dio puta je spavala, a kad nije spavala, glavu je naslonila na rub i gledala prema nama. Iskreno, ne mogu biti zadovoljnija. I usput, kvaliteta je fantastična.' ),
  array( 'C. Alan G.', 4, '14. 10. 2026.', 'Jednostavno za sastaviti. Izgleda vrlo udobno za naše pse. Naši će ga koristiti u prtljažniku tijekom putovanja.' ),
  array( 'Michael D.', 5, '14. 10. 2026.', 'Vožnja autom nije Buckyjeva omiljena stvar. Ima displaziju lakta, a sportska sjedala u našem autu pretvrda su i previše nagnuta za duga putovanja... Sada mu je puno udobnije zahvaljujući jastucima i kopčama koje drže krevet vodoravno. Malo mahne repom kad uskoči. Jako sam zadovoljan.' ),
  array( 'Lowri J.', 5, '14. 10. 2026.', 'Apsolutno ga obožava! Murphyju je tako udobno u njemu tijekom vožnje! Vrlo zadovoljna.' ),
  array( 'Michaela J.', 5, '14. 10. 2026.', 'Izvrstan proizvod po izvrsnoj cijeni. Molly ga obožava.' ),
  array( 'Cleo A.', 5, '13. 10. 2026.', 'Stvarno mekan, Lexi ga je obožavala!' ),
  array( 'Kevin F.', 5, '13. 10. 2026.', 'Obožava ga i čini se da mu je pomogao s mučninom u vožnji, izgleda preslatko ušuškan. Jedina mala zamjerka je što je prevelik da bi lijepo sjeo na moje stražnje sjedalo, a imam Volvo XC90, pa sam morao staviti podložak ispod.' ),
  array( 'Wendy H.', 5, '13. 10. 2026.', 'Oduševljeni smo putnim krevetom, stvarno je mekan, a znati da je siguran je odlično. Naše štene još ne voli putovanja, ali sigurna sam da će joj u ovome biti dobro. Dostava je trajala nešto više od tjedan dana, duže nego što sam očekivala. Ali bih li ga zamijenila... ne! Odličan proizvod!' ),
  array( 'Nick B.', 4, '12. 10. 2026.', 'Plus je što se čini dobro izrađen i udoban, iako ima i nekoliko minusa. Dostava je trajala 11 dana, očekivao sam brže. Remen koji se kopča oko donjeg dijela još je labav, mogao bi biti kraći. ISOFIX kopče teško se kopčaju i otkopčavaju, mogle bi biti fleksibilnije. Ostale kopče su plastične i mislim da bi bile čvršće da su metalne. Vrijeme će pokazati koliko će trajati. Nadam se da će ove napomene pomoći u budućim poboljšanjima.' ),
  array( 'Megan S.', 5, '10. 10. 2026.', 'Nevjerojatan krevet za auto! Siguran je, stabilan i super udoban. Preporučujem!' ),
  array( 'Ruth G.', 5, '10. 10. 2026.', 'Ovaj krevet je nevjerojatan i naš labrador ga obožava — toliko da mu je sada glavni krevet, a u auto ga samo prenesemo kad treba. Duga putovanja prije su mu bila jako stresna. Sada putujem mirno jer znam da više ne dahće cijelo vrijeme.' ),
  array( 'Lisa M.', 5, '7. 10. 2026.', 'Reggie obožava svoj novi putni krevet. Sretan je što može nasloniti bradu i gledati preko ruba ili se ušuškati unutra kad mu dosadi brbljanje tijekom vožnje. Drago mi je što smo ga pronašli, toplo preporučujem!!!' ),
  array( 'Lucy D.', 3, '6. 10. 2026.', 'Lijep krevet, ali trebao bi imati remene da se može pričvrstiti i za prednje sjedalo. Strana uz prednje sjedalo se spušta, pa je moj pas pao i zaglavio se između sjedala. Osim toga izgleda i djeluje lijepo. Čini se dobro izrađen.' ),
  array( 'Matt', 5, '29. 9. 2026.', 'Kupili smo ga za kad naše štene naraste. Htjeli smo ga isprobati već sada na kratkoj vožnji i obožava ga! Čvrsto je pričvršćen za stražnja sjedala ISOFIX kopčama, a s kopčom za ormu znamo da će biti siguran dok putuje s nama u autu. Odlična investicija da naše štene putuje sa stilom!' ),
  array( 'Keyna B.', 5, '29. 9. 2026.', 'Clemmie ga obožava!' ),
  array( 'Sharon E.', 5, '29. 9. 2026.', 'Vrlo jednostavno za postaviti, a iskreno, Gus nije ni htio izaći iz auta, toliko mu je bilo udobno 😁😁😁' ),
  array( 'Fiona N.', 5, '28. 9. 2026.', 'Naručila sam ovaj krevet za svog westija Archieja za naš novi kamper. Idealan je jer je pričvršćen na podu iza prednjih sjedala. Obožavao ga je. Toplo preporučujem.' ),
  array( 'Nicola W.', 4, '28. 9. 2026.', 'Narudžbu sam dobila na vrijeme, u neočekivano maloj kutiji. Malo me iznenadilo što ga moram sama sastaviti — iskreno, ni ne znam što sam očekivala. Javila sam se za upute i brzo dobila odgovor s uputama koje je lako pratiti. Sastavljanje je bilo dovoljno jednostavno i kvaliteta je dobra. Ručke olakšavaju prenošenje između mjesta i automobila, a kopčanje u ISOFIX je također jako jednostavno. Morala sam pogledati upute kamo idu 2 remena, ali bilo je dovoljno jasno i sigurno je. Ovisno o dubini stražnjih sjedala (ja imam XL) možda će vam biti lakše izvaditi stražnji jastuk. Kao što vidite po mojoj fantastičnoj pomoćnici na fotografiji, ušuškana je i sigurna! 💕🐾 Preporučujem ga jer je daleko bolji od svega što sam prije isprobala.' ),
  array( 'Emily M.', 5, '26. 9. 2026.', 'Oduševljena sam ovim proizvodom i sjajnom korisničkom podrškom... Na pitanje su mi odgovorili unutar 12 sati, još prije narudžbe! Naručite brzo prije nego što ga opet ponestane! Naše štene napokon rado putuje autom!' ),
  array( 'Yojana R.', 5, '26. 9. 2026.', 'Nakon dugog traženja dobrog autosjedala za psa napokon sam pronašla ovo i iskreno, vrijedi svakog centa! Moj mali ga obožava i mirno spava na dugim putovanjima. Mirna sam jer znam da je potpuno osiguran, a ima dovoljno mjesta da se ispruži. Toplo preporučujem ovo autosjedalo.' ),
  array( 'Nae', 4, '23. 9. 2026.', 'Tim je odlično komunicirao jer nisam dobila broj za praćenje pošiljke da vidim gdje mi je narudžba. Srećom, rado su je provjerili i javili mi e-mailom. Imam velikog mužjaka njemačkog ovčara i naručila sam XL. Može udobno ležati, ali radije sjedi... Vjerojatno ću izvaditi stražnji jastuk uz naslon jer ima naviku sjediti na njemu. Zasad je prilično udobno. Više bi mi odgovarali širi remeni koji se kopčaju na njegovu ormu jer su mi ovi preuski za njegovu veličinu. Sve u svemu, vrlo zadovoljna 😊' ),
  array( 'Kieran C.', 5, '30. 7. 2026.', 'Naručio sam dva kreveta za dodatnu sigurnost i udobnost u kamperu. Psi sada putuju s 5 zvjezdica.' ),
  array( 'Cara L.', 5, '29. 7. 2026.', '„Dostava je potrajala duže nego što sam očekivala, što je bilo frustrirajuće. No sam krevet je izvrstan. Moj stari pas ima artritis i usporava, pa mi puno znači imati nešto udobno i prenosivo što mogu nositi između kuće i auta. Savršen je i za putovanja — lijepo stane u hotelsku sobu ili ispod stola u kafiću. Moj pas ga apsolutno obožava.“' ),
  array( 'Hebe Q.', 5, '29. 7. 2026.', 'OBOŽAVAMO ovaj krevet za naše štene! Otkad ga imamo, uopće nije nervozna u autu i spavala je na svakom putovanju. Super je siguran, lako se čisti i stvarno dobro pristaje u auto — ako razmišljate o kupnji, vjerujte mi, nećete požaliti, a vaš pas će ga obožavati!!' ),
  array( 'Lorna D.', 5, '28. 7. 2026.', 'Ona ga obožava, a boja odgovara našem kamperu, pa ga i ja obožavam.' ),
  array( 'Sandra G.', 4, '28. 7. 2026.', 'Dobro izrađen proizvod od dobre tkanine. Nezgodno mi je kritizirati, ali donji jastuk trebao je biti veći da ispuni cijelo dno. Iste je veličine kao bočni jastuci i stvarno nije dovoljan. Planiramo staviti nešto veće da ispuni dno jer bi štenetu noge mogle skliznuti sa strane i mogao bi se ozlijediti. Sve u svemu, preporučila bih ga prijateljima, ali bih spomenula taj donji jastuk.' ),
  array( 'Caroline S.', 5, '28. 7. 2026.', 'Odličan krevet. Ima mjesta za 2 psa koji su sigurni u prtljažniku. Možda bi mi više odgovarale malo dulje ISOFIX trake, a zasad moram „utabati“ sredinu da ga pravilno koristim za dva psa. Ali sve u svemu, zadovoljna sam.' ),
  array( 'Julia F.', 5, '28. 7. 2026.', 'Vrhunski! Prvo sam kupila jeftiniju verziju ovakvog sjedala za psa, no materijal je bio kao plastika i opasno se zagrijavao po toplom vremenu. Sjedalo se nije činilo sigurnim. Ovo autosjedalo je potpuno drugačije. Izrađeno je od mekanog materijala i nije se zagrijalo ni po ovom toplom vremenu. Pričvršćeno je ISOFIX kopčama i remenima oko sjedala. Jastuk je podstavljen i luksuzan, a možete birati između mekane i druge strane. U bočne džepove mogu staviti zdjelicu za vodu. Obožavam što ima ručke i što se stranice otkopčaju pa postaje krevet za psa. Kad idemo na put, više mi ne trebaju i krevet i autosjedalo — imam oboje u jednom. Toliko volim ovo autosjedalo da sam upravo kupila još jedno za drugog psa.' ),
  array( 'Joanne B.', 5, '27. 7. 2026.', 'Lucy obožava svoj novi krevet. Nije bio u boji koju smo željeli, ali sva komunikacija oko zalihe i slanja bila je pravovremena i jasna. Imamo Mini Clubman i XL krevet na stražnjem sjedalu stane tijesno, ali možemo spustiti sjedala ili ga staviti u prtljažnik. Ima mnogo kopči za pričvršćivanje u različitim položajima. Obožavamo i to što služi i kao putni krevet, pa imamo manje stvari za pakiranje kad putujemo s njom. Dobro izrađen i super udoban. Hvala!' ),
  array( 'Diane H.', 5, '24. 7. 2026.', 'Maggie je bila noćna mora u autu i mrzi vožnju. Sada je s novim krevetom svaki put sve bolje. Nadam se da će vožnja postati užitak i da ćemo se obje opustiti.' ),
  array( 'Vicki S.', 4, '24. 7. 2026.', 'Odličan proizvod i čini se da mu se sviđa.' ),
  array( 'Juliette T.', 5, '22. 7. 2026.', 'Prvo sam naručila M krevet za jednog psa, a dok sam čekala dostavu, udomili smo drugog psa. Javila sam se i narudžbu su mi promijenili u XL. Psima je udobno i sigurni su. Koristim ISOFIX za pričvršćivanje. Odlična komunikacija s timom.' ),
);
$ndg_short = function( $t, $n = 100 ) {
  return ( mb_strlen( $t ) > $n ) ? rtrim( mb_substr( $t, 0, $n ) ) . '…' : $t;
};

/* 4) videi kupcev (ugc) */
$ndg_ugc = array( 'dg-ugc-1.mp4', 'dg-ugc-2.mp4', 'dg-ugc-3.mp4', 'dg-ugc-4.mp4', 'dg-ugc-5.mp4', 'dg-ugc-6.mp4' );
?>

<div class="ndg">

<!-- 1) UPOZNAJTE DOGGO — video lijevo -->
<section class="ndg-sec ndg-tint">
  <div class="ndg-wrap ndg-row2">
    <div class="ndg-media"><?php echo $ndg_video( 'dg-video-skladiste.mp4', 'NORIKS Doggo — predstavljanje u skladištu', '4 / 5' ); ?></div>
    <div class="ndg-copy">
      <p class="ndg-kicker">Upoznajte Doggo</p>
      <h2 class="ndg-h2">Psi zaslužuju <em>sigurnu vožnju.</em></h2>
      <p>Ljudi psa često samo ubace na stražnje sjedalo ili ga vežu običnim povodcem. To nije sigurno i protivno je propisima. Svi volimo izlete sa svojim psima i vožnju do omiljene šetnje — a Doggo je osmišljen da vožnja bude puno sigurnija.</p>
      <p>Psa u autu osigurava na više načina: <strong>metalne ISOFIX kopče</strong>, iste kao na dječjim autosjedalicama, kopčaju se izravno u ISOFIX točke na sjedalu. Dva remena idu oko gornjeg i donjeg dijela naslona, a unutar kreveta je povodac koji se kopča izravno na psa — preporučujemo ormu, a ne ogrlicu, da bude pričvršćen za tijelo, a ne za vrat.</p>
      <p>Doggo nije samo za vožnju: ima dvije ručke pa ga možete nositi sa sobom. Izrađen je od vrlo mekane, izdržljive veganske kože, a nakon blatnjave šetnje samo izvadite jastuke i navlaku ubacite u perilicu — izađe kao nova.</p>
      <p class="ndg-big">Vaš pas zaslužuje bolje.</p>
    </div>
  </div>
</section>

<!-- 2) kartice mnenj s fotografijami — preprosta mreza -->
<section class="ndg-sec">
  <div class="ndg-wrap">
    <div class="ndg-cards">
      <?php foreach ( array_slice( $ndg_rv, 0, 8 ) as $i => $r ) : ?>
      <article class="ndg-cc">
        <div class="ndg-cc__img"><?php echo $ndg_img( sprintf( 'dg-rv-%02d.webp', $i + 1 ), 'Fotografija kupca — ' . $r[0] ); ?></div>
        <div class="ndg-cc__body">
          <?php echo $ndg_stars( $r[1] ); ?>
          <p class="ndg-cc__name"><?php echo esc_html( $r[0] ); ?> <?php echo $ndg_ver; ?></p>
          <p class="ndg-cc__txt"><?php echo esc_html( $ndg_short( $r[3] ) ); ?></p>
        </div>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- 3) XL ZA DVA PSA — video desno -->
<section class="ndg-sec ndg-tint">
  <div class="ndg-wrap ndg-row2 ndg-row2--rev">
    <div class="ndg-copy">
      <p class="ndg-kicker">XL za dva psa</p>
      <h2 class="ndg-h2">Dva psa, <em>jedan siguran prostor.</em></h2>
      <p>Ovo su Clem i Charlie. XL krevet savršen je za dva psa jer ima <strong>dva sigurnosna povodca</strong> koji se kopčaju izravno na orme.</p>
      <p>Uvijek preporučujemo kopčanje na ormu umjesto na ogrlicu — da bude na tijelu, a ne na vratu. Tako psi dobiju siguran prostor da putuju zajedno, pogotovo ako su prijatelji kao Clem i Charlie.</p>
      <p>Isprobajte bez brige: <strong>besplatna dostava za narudžbe iznad 70 €</strong> i <strong>30 dana za povrat</strong>.</p>
      <p class="ndg-big">Nabavite Doggo već danas.</p>
    </div>
    <div class="ndg-media"><?php echo $ndg_video( 'dg-video-dva-psa.mp4', 'NORIKS Doggo XL — dva psa na putu', '766 / 1080' ); ?></div>
  </div>
</section>

<!-- 4) videi kupcev — mreza, predvajanje ob kliku -->
<section class="ndg-sec">
  <div class="ndg-wrap">
    <div class="ndg-ugc">
      <?php foreach ( $ndg_ugc as $k => $u ) : ?>
      <div class="ndg-ugc__it"><?php echo $ndg_video( $u, 'Video kupca ' . ( (int) $k + 1 ) . ' — NORIKS Doggo', '606 / 1080' ); ?></div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- 5) U PRTLJAŽNIKU — video lijevo -->
<section class="ndg-sec ndg-tint">
  <div class="ndg-wrap ndg-row2">
    <div class="ndg-media"><?php echo $ndg_video( 'dg-video-prtljaznik.mp4', 'NORIKS Doggo u prtljažniku', '4 / 3' ); ?></div>
    <div class="ndg-copy">
      <p class="ndg-kicker">U prtljažniku</p>
      <h2 class="ndg-h2">Može li Doggo <em>u prtljažnik?</em></h2>
      <p>Često nas to pitate. Odgovor je: <strong>da, može!</strong></p>
      <p>Pepper obožava vožnju u prtljažniku — tamo mu je udobno. Može i s veličinom M, ali najbolje je s XL.</p>
      <p class="ndg-big">Najbolje u veličini XL.</p>
    </div>
  </div>
</section>

<!-- 6) ZAŠTO DOGGO? — slika desno -->
<section class="ndg-sec">
  <div class="ndg-wrap ndg-row2 ndg-row2--rev">
    <div class="ndg-copy">
      <p class="ndg-kicker">Zašto Doggo</p>
      <h2 class="ndg-h2">Zašto <em>Doggo?</em></h2>
      <p>Doggo je sigurnosni putni krevet osmišljen kako bi vaš pas tijekom vožnje imao svoj vlastiti prostor.</p>
      <p>Zahvaljujući <strong>ISOFIX pričvršćivanju, ojačanim sigurnosnim remenima i ugrađenoj kopči za ormu</strong> čvrsto stoji na sjedalu — i pomaže smanjiti pomicanje, ometanje i nemir tijekom putovanja.</p>
    </div>
    <div class="ndg-media"><?php echo $ndg_img( 'dg-hl-main.webp', 'Labrador u NORIKS Doggo autokrevetu' ); ?></div>
  </div>
</section>

<!-- 7) prednosti — kartice: slika ob besedilu -->
<section class="ndg-sec ndg-tint">
  <div class="ndg-wrap">
    <div class="ndg-hl">
      <?php foreach ( $ndg_hl as $h ) : ?>
      <article class="ndg-hl__card">
        <div class="ndg-hl__img"><?php echo $ndg_img( $h[0], 'NORIKS Doggo — ' . $h[1] ); ?></div>
        <div class="ndg-hl__txt"><h3><?php echo esc_html( $h[1] ); ?></h3><p><?php echo esc_html( $h[2] ); ?></p></div>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- 8) recenzije kupaca -->
<section class="ndg-sec" id="ndg-recenzije">
  <div class="ndg-wrap">
    <h2 class="ndg-h2 ndg-h2--c">Recenzije <em>kupaca</em></h2>
    <p class="ndg-rv__head"><?php echo $ndg_stars( 5 ); ?> <strong>4,8 / 5</strong> · 1.081 recenzija</p>
    <div class="ndg-rv__sum">
      <h3>Sažetak recenzija</h3>
      <p>Kupci hvale Doggo zbog izvrsne kvalitete, sigurnog ISOFIX pričvršćivanja i udobnosti. Iako je nekima dostava potrajala, većina se slaže da se isplati čekati jer ga njihovi psi obožavaju.</p>
    </div>
    <div class="ndg-rv__grid">
      <?php foreach ( $ndg_rv as $i => $r ) : ?>
      <article class="ndg-rc<?php echo $i >= 20 ? ' is-hidden' : ''; ?>">
        <?php echo $ndg_img( sprintf( 'dg-rv-%02d.webp', $i + 1 ), 'Fotografija kupca — ' . $r[0] ); ?>
        <div class="ndg-rc__b">
          <p class="ndg-rc__n"><strong><?php echo esc_html( $r[0] ); ?></strong> <?php echo $ndg_ver; ?> <span>Provjereni kupac</span></p>
          <p class="ndg-rc__d"><?php echo esc_html( $r[2] ); ?></p>
          <?php echo $ndg_stars( $r[1] ); ?>
          <p class="ndg-rc__t"><?php echo esc_html( $r[3] ); ?></p>
        </div>
      </article>
      <?php endforeach; ?>
    </div>
    <p class="ndg-rv__more-w"><button type="button" class="ndg-rv__more">Prikaži više recenzija</button></p>
  </div>
</section>

</div>

<script>
(function(){
  /* galerija: na mestih videov originala (6.–8. mesto) predvajaj videe (brez zvoka, predvajanje ob kliku) */
  function gallery(){
    var map = { 'dg-g-v1': 'dg-gv-1.mp4', 'dg-g-v2': 'dg-gv-2.mp4', 'dg-g-v3': 'dg-gv-3.mp4' };
    var base = <?php echo wp_json_encode( $ndg ); ?>;
    document.querySelectorAll('.woocommerce-product-gallery__image').forEach(function(sl){
      if (sl.querySelector('video')) return;
      var img = sl.querySelector('img'); if (!img) return;
      var src = (img.getAttribute('data-large_image') || '') + ' ' + (img.getAttribute('src') || '');
      for (var k in map) {
        if (src.indexOf(k) === -1) continue;
        var a = sl.querySelector('a'); if (a) { a.style.display = 'none'; }
        var w = document.createElement('div'); w.className = 'ndg-gv';
        w.innerHTML = '<video src="' + base + map[k] + '" poster="' + (img.getAttribute('src') || '') + '" muted loop playsinline controls preload="metadata"></video>';
        sl.appendChild(w);
        break;
      }
    });
  }
  if (document.readyState === 'loading') { document.addEventListener('DOMContentLoaded', gallery); } else { gallery(); }
  window.addEventListener('load', gallery);

  /* videi z gumbom (nalozijo se sele ob kliku) */
  document.querySelectorAll('.ndg-vid').forEach(function(w){
    var v = w.querySelector('video'), b = w.querySelector('.ndg-vid__btn');
    b.addEventListener('click', function(){
      if (!v.getAttribute('src')) { v.src = v.getAttribute('data-src'); }
      v.controls = true; w.classList.add('is-playing'); var p = v.play(); if (p && p.catch) p.catch(function(){});
    });
  });

  /* recenzije: "Prikaži više" (po 20, kot na originalu) */
  var rmore = document.querySelector('.ndg-rv__more');
  if (rmore) {
    rmore.addEventListener('click', function(){
      var h = document.querySelectorAll('.ndg-rc.is-hidden');
      for (var k = 0; k < h.length && k < 20; k++) { h[k].classList.remove('is-hidden'); }
      if (!document.querySelector('.ndg-rc.is-hidden')) { rmore.parentNode.style.display = 'none'; }
    });
  }
})();
</script>

<!-- 9) ikone -->
<section class="ndg-sec ndg-tint">
  <ul class="ndg-icons">
    <li><span class="ndg-icons__c"><svg viewBox="0 0 48 48" aria-hidden="true"><path d="M6 14h22v16H6zM28 20h7l5 5v5H28z" fill="none" stroke="currentColor" stroke-width="2" stroke-linejoin="round"/><circle cx="13" cy="32" r="3.2" fill="#fff" stroke="currentColor" stroke-width="2"/><circle cx="34" cy="32" r="3.2" fill="#fff" stroke="currentColor" stroke-width="2"/></svg></span><h3>Besplatna dostava za narudžbe iznad 70&nbsp;€</h3></li>
    <li><span class="ndg-icons__c"><svg viewBox="0 0 48 48" aria-hidden="true"><path d="M36 26a12 12 0 1 1-4-9" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"/><path d="M33 10v7h-7" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></span><h3>30 dana za povrat</h3></li>
    <li><span class="ndg-icons__c"><svg viewBox="0 0 48 48" aria-hidden="true"><path d="M24 36s-11-6.6-11-14.2A6 6 0 0 1 24 18a6 6 0 0 1 11 3.8C35 29.4 24 36 24 36z" fill="none" stroke="currentColor" stroke-width="2" stroke-linejoin="round"/></svg></span><h3>Povjerenje tisuća kupaca</h3></li>
  </ul>
</section>

<!-- 10) OTKOPČA SE U KREVET — video lijevo -->
<section class="ndg-sec">
  <div class="ndg-wrap ndg-row2">
    <div class="ndg-media"><?php echo $ndg_video( 'dg-animacija.mp4', 'NORIKS Doggo — sklapanje i rasklapanje kreveta', '1 / 1' ); ?></div>
    <div class="ndg-copy">
      <p class="ndg-kicker">Iz auta u dom</p>
      <h2 class="ndg-h2">Otkopča se <em>u krevet za kod kuće.</em></h2>
      <p>Doggo nije samo za vožnju. Ima dvije ručke pa ga možete nositi sa sobom, a prednji dio se otkopča u ravni krevet za kod kuće.</p>
      <p>Srednji jastuk je obostran: jedna strana je mekana, a druga od kože za putovanja. Unutarnja navlaka pere se u perilici.</p>
      <p class="ndg-big">Autokrevet i krevet za kod kuće u jednom.</p>
    </div>
  </div>
</section>

<style>
/* NORIKS standard: slika/video zapolni svoj stolpec v razmerju 4/5, besedilo navpicno na sredini */
.ndg-row2 { align-items: center; }
.ndg-media > img, .ndg-media > video,
.ndg-media > a > img, .ndg-media picture > img {
  width: 100%; aspect-ratio: 4 / 5; object-fit: cover; border-radius: 12px;
  box-shadow: 0 2px 4px rgba(25,20,15,.05), 0 14px 40px rgba(25,20,15,.10); }
@media (max-width: 749px) {
  .ndg-media > img, .ndg-media > video { aspect-ratio: 1 / 1; }
}

.ndg { --ndg-ink: #1c3b4b; --ndg-acc: #276d91; --ndg-tint: #eef5fa; --ndg-txt: #3d5664; --ndg-green: #1ca054; }
.ndg-sec { padding: 60px 0; margin: 0; background: #fff; font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Arial, sans-serif; color: var(--ndg-ink); }
.ndg-sec * { box-sizing: border-box; }
.ndg-tint { background: var(--ndg-tint); }
.ndg img { display: block; max-width: 100%; height: auto; }
.ndg h2, .ndg h3 { text-transform: none; }
.ndg-wrap { width: 100%; max-width: 1240px; margin: 0 auto; padding: 0 24px; }
.ndg-row2 { display: grid; grid-template-columns: 1fr 1fr; gap: 56px; align-items: center; }
.ndg-media img { width: 100%; box-shadow: 0 2px 4px rgba(20,40,55,.05), 0 14px 40px rgba(20,40,55,.10); }
.ndg-media .ndg-vid { max-width: 520px; margin: 0 auto; }
.ndg-kicker { font-size: 12.5px; font-weight: 800; letter-spacing: .14em; text-transform: uppercase; color: var(--ndg-acc); margin: 0 0 10px; }
.ndg-h2 { font-size: clamp(25px, 3.1vw, 36px); font-weight: 800; line-height: 1.18; letter-spacing: -.01em; margin: 0 0 16px; color: var(--ndg-ink); }
.ndg-h2--c { text-align: center; }
.ndg-h2 em { font-style: italic; font-weight: 800; color: var(--ndg-acc); }
.ndg-copy p, .ndg-center p { font-size: 16px; line-height: 1.7; color: var(--ndg-txt); margin: 0 0 14px; }
.ndg-big { font-size: 19px !important; font-weight: 800; color: var(--ndg-ink) !important; }
.ndg-center { max-width: 820px; text-align: center; }

/* video s posterjem in gumbom */
.ndg-vid { position: relative; width: 100%; overflow: hidden; background: #0d2633; }
.ndg-vid video { position: absolute; inset: 0; width: 100%; height: 100%; object-fit: cover; display: block; }
.ndg-vid__btn { position: absolute; inset: 0; width: 100%; height: 100%; border: 0; padding: 0; margin: 0; background: transparent; cursor: pointer; display: grid; place-items: center; }
.ndg-vid__btn span { width: 64px; height: 64px; border-radius: 50%; background: rgba(255,255,255,.92); color: var(--ndg-acc); display: grid; place-items: center; box-shadow: 0 6px 20px rgba(0,0,0,.25); }
.ndg-vid__btn svg { width: 30px; height: 30px; margin-left: 4px; }
.ndg-vid.is-playing .ndg-vid__btn { display: none; }

/* 2) kartice mnenj */
.ndg-cards { display: grid; grid-template-columns: repeat(4, minmax(0, 1fr)); gap: 16px; }
.ndg-cc { background: #fff; border: 1px solid #dde8ef; display: flex; flex-direction: column; }
.ndg-cc__img { position: relative; aspect-ratio: 1 / .75; background: #e9eef1; overflow: hidden; }
.ndg-cc__img img { position: absolute; inset: 0; width: 100%; height: 100% !important; object-fit: cover; }
.ndg-cc__body { padding: 14px 14px 16px; text-align: center; }
.ndg-cc__name { font-weight: 700; font-size: 15px; margin: 6px 0; display: inline-flex; align-items: center; gap: 4px; color: var(--ndg-ink); }
.ndg-cc__txt { font-size: 13.5px; line-height: 1.5; margin: 0; color: var(--ndg-txt); }
.ndg-stars { display: inline-flex; gap: 2px; vertical-align: middle; }
.ndg-stars i { display: inline-block; width: 16px; height: 16px; color: var(--ndg-green); }
.ndg-stars i.off { color: #d6d6d6; }
.ndg-stars svg { width: 100%; height: 100%; display: block; }
.ndg-ver { width: 14px; height: 14px; color: var(--ndg-ink); flex: 0 0 auto; vertical-align: middle; }

/* 4) videi kupcev */
.ndg-ugc { display: grid; grid-template-columns: repeat(3, minmax(0, 1fr)); gap: 16px; max-width: none; margin: 0; }

/* 7) prednosti */
.ndg-hl { display: grid; grid-template-columns: 1fr 1fr; gap: 20px; }
.ndg-hl__card { background: #fff; border: 1px solid #dde8ef; display: grid; grid-template-columns: 42% 1fr; gap: 20px; align-items: center; padding: 16px; }
.ndg-hl__img img { width: 100%; }
.ndg-hl__txt h3 { font-size: 18px; font-weight: 800; line-height: 1.3; margin: 0 0 8px; color: var(--ndg-ink); }
.ndg-hl__txt p { font-size: 14.8px; line-height: 1.62; margin: 0; color: var(--ndg-txt); }

/* 8) ikone */
.ndg-icons { list-style: none; margin: 0 auto; padding: 0 24px; display: flex; justify-content: center; gap: 28px; max-width: 900px; }
.ndg-icons li { flex: 1 1 0; max-width: 180px; text-align: center; }
.ndg-icons__c { display: grid; place-items: center; width: 80px; height: 80px; margin: 0 auto 14px; border-radius: 50%; border: 2px solid currentColor; background: #fff; color: var(--ndg-acc); }
.ndg-icons__c svg { width: 46px; height: 46px; }
.ndg-icons h3 { font-weight: 700; font-size: 13px; text-transform: uppercase; letter-spacing: .04em; line-height: 1.35; margin: 0; color: var(--ndg-ink); }

/* 11) recenzije */
.ndg-rv__head { display: flex; align-items: center; justify-content: center; gap: 8px; flex-wrap: wrap; font-size: 16px; margin: 0 0 18px; color: var(--ndg-txt); }
.ndg-rv__head .ndg-stars i { width: 20px; height: 20px; }
.ndg-rv__sum { background: #fff; border-left: 3px solid var(--ndg-acc); padding: 16px 20px; margin: 0 auto 24px; max-width: 900px; }
.ndg-rv__sum h3 { font-size: 15px; font-weight: 800; margin: 0 0 6px; color: var(--ndg-ink); }
.ndg-rv__sum p { font-size: 14.5px; line-height: 1.6; margin: 0; color: var(--ndg-txt); }
.ndg-rv__grid { column-count: 4; column-gap: 14px; }
.ndg-rc { break-inside: avoid; display: inline-block; width: 100%; margin: 0 0 14px; background: #fff; border: 1px solid #dde8ef; }
.ndg-rc.is-hidden { display: none; }
.ndg-rc img { width: 100%; }
.ndg-rc__b { padding: 12px 14px 14px; }
.ndg-rc__n { margin: 0; font-size: 14px; color: var(--ndg-ink); display: flex; align-items: center; gap: 5px; flex-wrap: wrap; }
.ndg-rc__n span { font-size: 12px; color: #6b7f8a; }
.ndg-rc__d { margin: 2px 0 6px; font-size: 12px; color: #6b7f8a; }
.ndg-rc__t { margin: 8px 0 0; font-size: 14px; line-height: 1.55; color: var(--ndg-txt); }
.ndg-rv__more-w { text-align: center; margin: 20px 0 0; }
.ndg-rv__more { border: 1px solid var(--ndg-ink); background: #fff; color: var(--ndg-ink); padding: 12px 26px; font-weight: 700; cursor: pointer; font-size: 14px; }

/* galerija: najvec 2 vrsti sličic (5 na vrsto); ostale slike dosegljive z drsenjem glavne slike */
.single-product div.product.product_cat-orto-doggo .woocommerce-product-gallery .flex-control-thumbs li:nth-child(n+11) { display: none !important; }
/* videi v galeriji */
.woocommerce-product-gallery__image .ndg-gv { display: flex; align-items: center; justify-content: center; background: #fff; aspect-ratio: 4 / 5; }
.woocommerce-product-gallery__image .ndg-gv video { width: 78%; max-height: 100%; display: block; object-fit: contain; }

/* kratek opis izdelka: zelene kljukice namesto pik */
.product_cat-orto-doggo .woocommerce-product-details__short-description ul {
  list-style: none !important; margin: 10px 0 14px !important; padding-left: 0 !important; }
.product_cat-orto-doggo .woocommerce-product-details__short-description ul li {
  list-style: none !important; text-indent: 0 !important; margin: 0 0 7px !important;
  line-height: 1.45 !important; font-size: 15.5px !important;
  display: block !important; position: relative !important; padding-left: 31px !important; }
.product_cat-orto-doggo .woocommerce-product-details__short-description ul li::marker { content: "" !important; }
.product_cat-orto-doggo .woocommerce-product-details__short-description ul li::before { content: none !important; }
.product_cat-orto-doggo .woocommerce-product-details__short-description .ndg-tick {
  position: absolute !important; left: 0 !important; top: 1px !important;
  width: 21px; height: 21px; border-radius: 50%;
  background: var(--ndg-green, #1ca054) !important; color: #fff !important;
  font-size: 12px !important; font-weight: 800 !important; line-height: 21px !important;
  text-align: center !important; display: inline-block !important; }

@media (max-width: 980px) {
  .ndg-row2 { grid-template-columns: 1fr; gap: 28px; }
  .ndg-row2--rev .ndg-media { order: -1; }
  .ndg-cards { grid-template-columns: repeat(2, minmax(0, 1fr)); }
  .ndg-hl { grid-template-columns: 1fr; }
  .ndg-rv__grid { column-count: 3; }
}
@media (max-width: 560px) {
  .ndg-sec { padding: 42px 0; }
  .ndg-wrap { padding: 0 16px; }
  .ndg-cards { gap: 10px; }
  .ndg-ugc { grid-template-columns: repeat(2, minmax(0, 1fr)); gap: 10px; }
  .ndg-hl__card { grid-template-columns: 38% 1fr; gap: 14px; padding: 12px; }
  .ndg-hl__txt h3 { font-size: 16px; }
  .ndg-hl__txt p { font-size: 14px; }
  .ndg-icons { display: grid; grid-template-columns: 1fr 1fr; gap: 22px; padding: 0 16px; }
  .ndg-icons li { max-width: none; }
  .ndg-icons li:last-child { grid-column: 1 / -1; }
  .ndg-rv__grid { column-count: 2; column-gap: 8px; }
}
</style>
