<?php
/**
 * product-bottom: NORIKS Doggo — sigurnosni autokrevet za pse s ISOFIX kopčama (orto-doggo).
 * Original: waggingrightsusa.com/products/doggo-dock — struktura je 1:1 z originalom
 * (isto stevilo sekcij, isti vrstni red, ista ozadja in valoviti razdelilniki, slike in videi na istih mestih), besedila v hrvascini.
 *   1) Video (svetlo modra #d2e6f2): Max v skladiscu — HR podnapisi, brez zvoka, ~78 % sirine originala
 *   2) Drsnik kartic mnenj s fotografijami (temno modra #276d91)
 *   3) Video (svetlo modra): XL krevet za dva psa — HR podnapisi, brez zvoka, ~78 %
 *   4) 6 videov kupcev (#276d91, 3 stolpci; mobilno vodoravni drsnik)
 *   5) Video (#276d91): Doggo v prtljazniku — HR podnapisi, brez zvoka, ~78 %
 *   6) Zašto Doggo? (svetlo modra, sredinsko besedilo)
 *   7) 6 prednosti s slikami + velika slika na sredini (bela)
 *   8) Ikone: besplatna dostava / 30 dana za povrat / povjerenje tisuća kupaca (svetlo modra)
 *   9) Animiran video izdelka (#276d91, kvadrat, samodejno predvajanje brez zvoka)
 *  10) Tko je NORIKS? (#276d91)
 *  11) Recenzije kupaca (4.8 / 919, sažetak, mreža 40 mnenj s fotografijami 1:1, "Prikaži više")
 * Nad izdelkom kot na originalu: pasica "50 % POPUSTA — AKCIJA ZAVRŠAVA U SRIJEDU" z odstevanjem, tekoci trak prednosti
 * in "PONOVNO NA ZALIHI U 🇭🇷". V nakupni skatli: ocena pod naslovom, "Na zalihi", 3 harmonike in opis z "Pročitaj više".
 * FAQ originala ("Bark & we answer!", 8 vprasanj) je v reviews.php ($doggo_faq), kratka mnenja v auto_reviews/HR_doggo.php.
 * Izpusceno: glava trgovine, "Leads & Harness" (drugi izdelki), ponudba povodca in orme v nakupni skatli (drugi izdelki),
 * "Extra 20% off 2nd Dog Dock" (NORIKS tega popusta nima), sekcija "Wagging Gives Back!" (donacije zavetiscu Battersea —
 * NORIKS jih ne daje), "Lifetime Warranty", "Free DHL Express" in brezplacna zdjelica (NORIKS pogoji: 30 dni za povrat, dostava nad 70 €), noga.
 * Videi z Maxom: zvok odstranjen, angleski vgrajeni podnapisi zakriti in zamenjani s hrvaskimi (prevodi v izdelki/NORIKS-DOGGO/prevodi.md).
 * Slike: img/doggo/ (logotip konkurenta na slikah prednosti odstranjen, napisi prevedeni v hrvascino).
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$ndg      = get_template_directory_uri() . '/img/doggo/';
$ndg_path = get_template_directory() . '/img/doggo/';
$ndg_img  = function( $file, $alt, $extra = '' ) use ( $ndg, $ndg_path ) {
  if ( ! file_exists( $ndg_path . $file ) ) { return ''; }
  return '<img src="' . esc_url( $ndg . $file ) . '" alt="' . esc_attr( $alt ) . '" loading="lazy"' . $extra . '>';
};
/* video z gumbom za predvajanje (kot na originalu: poster + gumb, ob kliku predvajanje) — brez zvoka */
$ndg_video = function( $file, $label, $ratio ) use ( $ndg, $ndg_path ) {
  if ( ! file_exists( $ndg_path . $file ) ) { return ''; }
  $poster = str_replace( '.mp4', '-poster.webp', $file );
  return '<div class="ndg-vid" style="aspect-ratio:' . esc_attr( $ratio ) . '">'
    . '<video data-src="' . esc_url( $ndg . $file ) . '"' . ( file_exists( $ndg_path . $poster ) ? ' poster="' . esc_url( $ndg . $poster ) . '"' : '' )
    . ' muted playsinline preload="none" aria-label="' . esc_attr( $label ) . '"></video>'
    . '<button type="button" class="ndg-vid__btn" aria-label="Pokreni video"><span><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M8 5.5v13l10.5-6.5z" fill="currentColor"/></svg></span></button>'
    . '</div>';
};
/* valovit razdelilnik: $top = barva zgornje sekcije (val), $bottom = ozadje spodnje sekcije */
$ndg_wave = function( $top, $bottom, $flip = false ) {
  return '<div class="ndg-wave' . ( $flip ? ' ndg-wave--flip' : '' ) . '" style="background:' . esc_attr( $bottom ) . ';color:' . esc_attr( $top ) . '" aria-hidden="true">'
    . '<svg viewBox="0 0 1440 100" preserveAspectRatio="none"><path fill="currentColor" d="M0,0H1440V38C1320,70 1200,86 1080,74C960,62 840,22 720,22C600,22 480,62 360,74C240,86 120,70 0,46Z"/></svg></div>';
};
$ndg_star  = '<svg viewBox="0 0 24 24" aria-hidden="true"><path fill="currentColor" d="M12 2.8l2.8 6 6.5.6-4.9 4.4 1.4 6.4L12 16.9l-5.8 3.3 1.4-6.4-4.9-4.4 6.5-.6z"/></svg>';
$ndg_stars = function( $n = 5 ) use ( $ndg_star ) {
  $o = '<span class="ndg-stars" aria-label="' . (int) $n . ' od 5 zvjezdica">';
  for ( $i = 1; $i <= 5; $i++ ) { $o .= '<i class="' . ( $i <= $n ? 'on' : 'off' ) . '">' . $ndg_star . '</i>'; }
  return $o . '</span>';
};
$ndg_ver = '<svg class="ndg-ver" viewBox="0 0 24 24" aria-hidden="true"><circle cx="12" cy="12" r="11" fill="currentColor"/><path d="M7 12.5l3.2 3.2L17 8.8" fill="none" stroke="#fff" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"/></svg>';

/* 7) prednosti — 1:1 z originala (levi stolpec 0/2/4, desni 1/3/5) */
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
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Poppins:wght@600;700;800&display=swap">

<div class="ndg">

<?php echo $ndg_wave( '#ffffff', '#d2e6f2' ); ?>

<!-- 1) video: Max v skladiscu -->
<section class="ndg-sec ndg-sec--light ndg-sec--video">
  <div class="ndg-wrap"><?php echo $ndg_video( 'dg-video-skladiste.mp4', 'NORIKS Doggo — predstavljanje u skladištu', '4 / 5' ); ?></div>
</section>

<?php echo $ndg_wave( '#d2e6f2', '#276d91' ); ?>

<!-- 2) drsnik kartic mnenj -->
<section class="ndg-sec ndg-sec--dark ndg-sec--carousel">
  <div class="ndg-wrap ndg-car">
    <button type="button" class="ndg-car__nav ndg-car__nav--prev" aria-label="Prethodne recenzije"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M15 5l-7 7 7 7" fill="none" stroke="currentColor" stroke-width="2"/></svg></button>
    <div class="ndg-car__track" data-ndg-car>
      <?php foreach ( array_slice( $ndg_rv, 0, 16 ) as $i => $r ) : ?>
      <article class="ndg-cc">
        <div class="ndg-cc__img"><?php echo $ndg_img( sprintf( 'dg-rv-%02d.webp', $i + 1 ), 'Fotografija kupca — ' . $r[0] ); ?><span class="ndg-cc__st"><?php echo $ndg_stars( $r[1] ); ?></span></div>
        <div class="ndg-cc__body">
          <p class="ndg-cc__name"><?php echo esc_html( $r[0] ); ?> <?php echo $ndg_ver; ?></p>
          <p class="ndg-cc__txt"><?php echo esc_html( $ndg_short( $r[3] ) ); ?></p>
        </div>
      </article>
      <?php endforeach; ?>
    </div>
    <button type="button" class="ndg-car__nav ndg-car__nav--next" aria-label="Sljedeće recenzije"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M9 5l7 7-7 7" fill="none" stroke="currentColor" stroke-width="2"/></svg></button>
  </div>
</section>

<?php echo $ndg_wave( '#276d91', '#d2e6f2' ); ?>

<!-- 3) video: XL krevet za dva psa -->
<section class="ndg-sec ndg-sec--light ndg-sec--video">
  <div class="ndg-wrap"><?php echo $ndg_video( 'dg-video-dva-psa.mp4', 'NORIKS Doggo XL — dva psa na putu', '766 / 1080' ); ?></div>
</section>

<?php echo $ndg_wave( '#d2e6f2', '#276d91' ); ?>

<!-- 4) videi kupcev -->
<section class="ndg-sec ndg-sec--dark ndg-sec--ugc">
  <div class="ndg-ugc">
    <?php foreach ( $ndg_ugc as $k => $u ) : if ( ! file_exists( $ndg_path . $u ) ) { continue; } $up = str_replace( '.mp4', '-poster.webp', $u ); ?>
    <div class="ndg-ugc__it"><video data-src="<?php echo esc_url( $ndg . $u ); ?>"<?php echo file_exists( $ndg_path . $up ) ? ' poster="' . esc_url( $ndg . $up ) . '"' : ''; ?> muted loop playsinline autoplay preload="none" aria-label="Video kupca <?php echo (int) $k + 1; ?> — NORIKS Doggo"></video></div>
    <?php endforeach; ?>
  </div>
</section>

<!-- 5) video: Doggo v prtljazniku -->
<section class="ndg-sec ndg-sec--dark ndg-sec--video">
  <div class="ndg-wrap"><?php echo $ndg_video( 'dg-video-prtljaznik.mp4', 'NORIKS Doggo u prtljažniku', '4 / 3' ); ?></div>
</section>

<?php echo $ndg_wave( '#276d91', '#d2e6f2' ); ?>

<!-- 6) Zašto Doggo? -->
<section class="ndg-sec ndg-sec--light">
  <div class="ndg-wrap ndg-rich">
    <h2 class="ndg-h2">Zašto Doggo?</h2>
    <p>Doggo je sigurnosni putni krevet osmišljen kako bi vaš pas tijekom vožnje imao svoj vlastiti prostor. Zahvaljujući ISOFIX pričvršćivanju, ojačanim sigurnosnim remenima i ugrađenoj kopči za ormu čvrsto stoji na sjedalu — i pomaže smanjiti pomicanje, ometanje i nemir tijekom putovanja.</p>
  </div>
</section>

<?php echo $ndg_wave( '#d2e6f2', '#ffffff' ); ?>

<!-- 7) prednosti -->
<section class="ndg-sec ndg-sec--white">
  <div class="ndg-wrap ndg-hl">
    <div class="ndg-hl__col">
      <?php foreach ( array( 0, 2, 4 ) as $k ) : $h = $ndg_hl[ $k ]; ?>
      <div class="ndg-hl__card"><div class="ndg-hl__img"><?php echo $ndg_img( $h[0], 'NORIKS Doggo — ' . $h[1] ); ?></div><h3><?php echo esc_html( $h[1] ); ?></h3><p><?php echo esc_html( $h[2] ); ?></p></div>
      <?php endforeach; ?>
    </div>
    <div class="ndg-hl__main"><?php echo $ndg_img( 'dg-hl-main.webp', 'Labrador u NORIKS Doggo autokrevetu' ); ?></div>
    <div class="ndg-hl__col">
      <?php foreach ( array( 1, 3, 5 ) as $k ) : $h = $ndg_hl[ $k ]; ?>
      <div class="ndg-hl__card"><div class="ndg-hl__img"><?php echo $ndg_img( $h[0], 'NORIKS Doggo — ' . $h[1] ); ?></div><h3><?php echo esc_html( $h[1] ); ?></h3><p><?php echo esc_html( $h[2] ); ?></p></div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<?php echo $ndg_wave( '#ffffff', '#d2e6f2' ); ?>

<!-- 8) ikone -->
<section class="ndg-sec ndg-sec--light ndg-sec--icons">
  <ul class="ndg-icons">
    <li><span class="ndg-icons__c"><svg viewBox="0 0 48 48" aria-hidden="true"><path d="M6 14h22v16H6zM28 20h7l5 5v5H28z" fill="none" stroke="currentColor" stroke-width="2" stroke-linejoin="round"/><circle cx="13" cy="32" r="3.2" fill="#fff" stroke="currentColor" stroke-width="2"/><circle cx="34" cy="32" r="3.2" fill="#fff" stroke="currentColor" stroke-width="2"/></svg></span><h3>Besplatna dostava za narudžbe iznad 70&nbsp;€</h3></li>
    <li><span class="ndg-icons__c"><svg viewBox="0 0 48 48" aria-hidden="true"><path d="M36 26a12 12 0 1 1-4-9" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"/><path d="M33 10v7h-7" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></span><h3>30 dana za povrat</h3></li>
    <li><span class="ndg-icons__c"><svg viewBox="0 0 48 48" aria-hidden="true"><path d="M24 36s-11-6.6-11-14.2A6 6 0 0 1 24 18a6 6 0 0 1 11 3.8C35 29.4 24 36 24 36z" fill="none" stroke="currentColor" stroke-width="2" stroke-linejoin="round"/></svg></span><h3>Povjerenje tisuća kupaca</h3></li>
  </ul>
</section>

<?php echo $ndg_wave( '#d2e6f2', '#276d91' ); ?>

<!-- 9) animiran video izdelka -->
<section class="ndg-sec ndg-sec--dark ndg-sec--anim">
  <div class="ndg-wrap"><?php if ( file_exists( $ndg_path . 'dg-animacija.mp4' ) ) : ?><video class="ndg-anim" data-src="<?php echo esc_url( $ndg . 'dg-animacija.mp4' ); ?>" poster="<?php echo esc_url( $ndg . 'dg-animacija-poster.webp' ); ?>" muted loop playsinline autoplay preload="none" aria-label="NORIKS Doggo — sklapanje i rasklapanje kreveta"></video><?php endif; ?></div>
</section>

<!-- 10) Tko je NORIKS? -->
<section class="ndg-sec ndg-sec--dark">
  <div class="ndg-wrap ndg-rich ndg-rich--light">
    <h2 class="ndg-h2">Tko je NORIKS?</h2>
    <p>Mi smo brend koji stvara proizvode sa strašću i pažnjom. Naša misija je jednostavna: <strong>zaštititi pse i učiniti stvarnu razliku</strong>.</p>
    <p>Doggo nije samo proizvod — to je naše obećanje psima i njihovim vlasnicima.</p>
  </div>
</section>

<?php echo $ndg_wave( '#276d91', '#ffffff' ); ?>

<!-- 11) recenzije kupaca -->
<section class="ndg-sec ndg-sec--white ndg-sec--rv" id="ndg-recenzije">
  <div class="ndg-wrap">
    <div class="ndg-rv__head"><?php echo $ndg_stars( 5 ); ?> <strong>919 recenzija</strong> <span class="ndg-rv__avg">4.8 / 5</span></div>
    <div class="ndg-rv__sum">
      <h3>Sažetak recenzija</h3>
      <p>Kupci hvale Doggo zbog izvrsne kvalitete, sigurnog ISOFIX pričvršćivanja i udobnosti. Iako je nekima dostava potrajala, većina se slaže da se isplati čekati jer ga njihovi psi obožavaju.</p>
    </div>
    <div class="ndg-rv__grid" data-ndg-masonry>
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

<!-- nakupna skatla: predloge (vstavi jih JS kot na originalu) -->
<template id="ndg-tpl-rating">
  <a class="ndg-bb-rating" href="#ndg-recenzije"><?php echo $ndg_stars( 5 ); ?><span>(919)</span></a>
</template>
<template id="ndg-tpl-stock">
  <p class="ndg-stock"><span class="ndg-stock__dot" aria-hidden="true"></span>Na zalihi</p>
</template>
<template id="ndg-tpl-after">
  <div class="ndg-bb-after">
    <details class="ndg-bb-acc">
      <summary><svg viewBox="0 0 48 48" aria-hidden="true"><path d="M37 17.4l-12.6-5.5a1 1 0 0 0-.8 0L11 17.4v13.2l13 5.4 13-5.4z" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linejoin="round"/><path d="M11 17.4l13 5.6 13-5.6M24 23v13" fill="none" stroke="currentColor" stroke-width="1.6"/></svg><span>Veličine i pasmine</span><i aria-hidden="true"></i></summary>
      <div class="ndg-bb-acc__a">
        <p><strong>M:</strong> 53 cm (D) × 47 cm (Š) × 44 cm (V)<br><br><strong>XL:</strong> 100 cm (D) × 52 cm (Š) × 44 cm (V)</p>
        <p>Veličina M idealna je za manje pasmine poput jazavčara, border terijera, cockapooa i koker španijela — pse koji tijekom putovanja vole tijesan, siguran kutak. Veličina XL namijenjena je većim pasminama poput border kolija, labradora i njemačkih ovčara te pruža više prostora za ispružanje uz zadržanu stabilnost i udobnost. Savršena je i za kućanstva s dva manja psa koji udobno stanu jedan uz drugoga, a ima i dva zasebna unutarnja povodca — po jedan za svakog psa, ili oba za jednog psa radi dodatne sigurnosti.</p>
      </div>
    </details>
    <details class="ndg-bb-acc">
      <summary><svg viewBox="0 0 48 48" aria-hidden="true"><path d="M24 9l12 4.5v9c0 8-5.3 14.3-12 16.5-6.7-2.2-12-8.5-12-16.5v-9z" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linejoin="round"/><path d="M18.5 24l4 4 7-8" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg><span>30 dana za povrat</span><i aria-hidden="true"></i></summary>
      <div class="ndg-bb-acc__a">
        <p>Imate <strong>pravo na povrat u roku od 30 dana</strong>. Ako Doggo ne odgovara vama ili vašem psu, javite nam se u roku od 30 dana od primitka narudžbe.</p>
        <p><strong>Besplatna dostava za narudžbe iznad 70 €.</strong></p>
      </div>
    </details>
    <details class="ndg-bb-acc">
      <summary><svg viewBox="0 0 48 48" aria-hidden="true"><path d="M9 33h30M13 33v-6l3-8h16l3 8v6M13 27h22" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linejoin="round"/><circle cx="17" cy="33" r="3" fill="none" stroke="currentColor" stroke-width="1.6"/><circle cx="31" cy="33" r="3" fill="none" stroke="currentColor" stroke-width="1.6"/></svg><span>Sigurnost psa u vožnji ⚠️</span><i aria-hidden="true"></i></summary>
      <div class="ndg-bb-acc__a">
        <p>Prometna pravila nalažu da životinje u vozilu moraju biti prevožene tako da ne ometaju vozača i ne ugrožavaju sigurnost vožnje. Nepropisno osiguran pas može značiti kaznu i, što je najvažnije, ozbiljne ozljede vašeg psa u slučaju nesreće.</p>
        <p><strong>NORIKS Doggo</strong> osmišljen je da vam pruži:</p>
        <ul>
          <li><strong>Sigurnost:</strong> vaš ljubimac je siguran i udoban na svakom putovanju.</li>
          <li><strong>Usklađenost s propisima:</strong> pas je tijekom vožnje propisno osiguran.</li>
          <li><strong>Bezbrižnost:</strong> putujte opušteno, znajući da je vaš krzneni prijatelj siguran.</li>
        </ul>
        <p>To nije samo proizvod — to je obveza prema sigurnosti vašeg psa. Odaberite Doggo za putovanja bez brige!</p>
      </div>
    </details>
    <div class="ndg-bb-desc">
      <div class="ndg-bb-desc__in">
        <p>Doggo se pričvršćuje izravno na sjedalo <strong>ISOFIX kopčama (2 na M, 4 na XL)</strong> i s <strong>dva ojačana remena koja se omataju oko sjedala</strong> za dodatnu stabilnost. Unutra <strong>dva remena za ormu</strong> drže psa sigurno na mjestu, a ne ograničavaju mu udobnost.</p>
        <p>Ovaj sustav pričvršćivanja u više točaka pomaže smanjiti pomicanje pri kočenju, skretanju i na dugim vožnjama — i stvara jasno određen prostor u kojem se vaš pas može prirodno smiriti.</p>
        <p>Svake godine tisuće pasa ozlijede se u autu jer nisu dobro osigurani. Doggo je osmišljen da to promijeni — za sigurnije i kontroliranije putovanje i bezbrižnost jer znate da je vaš pas siguran na svakom putu.</p>
      </div>
      <button type="button" class="ndg-bb-desc__more">Pročitaj više</button>
    </div>
  </div>
</template>

<script>
(function(){
  function tpl(id){ var t = document.getElementById(id); return t ? t.content.cloneNode(true) : null; }

  /* 1) promo pasica originala (na vrhu): "50% OFF RESTOCK SALE ENDS WEDNESDAY" + odstevanje do srede 23:59 */
  if (!document.querySelector('.ndg-annbar')) {
    var bar = document.createElement('div');
    bar.className = 'ndg-annbar'; bar.setAttribute('role', 'region'); bar.setAttribute('aria-label', 'Obavijest');
    bar.innerHTML = '<div class="ndg-annbar__in"><span class="ndg-annbar__t">50 % POPUSTA — AKCIJA ZAVRŠAVA U SRIJEDU</span>'
      + '<span class="ndg-annbar__cd" role="timer"><span><b data-d>00</b><small>dana</small></span><em>:</em><span><b data-h>00</b><small>sati</small></span><em>:</em>'
      + '<span><b data-m>00</b><small>min</small></span><em>:</em><span><b data-s>00</b><small>sek</small></span></span></div>';
    /* 2) tekoci trak prednosti (kot na originalu pod glavo) */
    var items = ['Besplatna dostava za narudžbe iznad 70 €', '30 dana za povrat', 'Veganska koža'];
    var ic = '<svg viewBox="0 0 24 24" aria-hidden="true"><path d="M5 12.5l4.2 4.2L19 7" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>';
    var row = ''; for (var r = 0; r < 6; r++) { items.forEach(function(t){ row += '<span class="ndg-mq__i">' + ic + t + '</span>'; }); }
    var mq = document.createElement('div'); mq.className = 'ndg-mq'; mq.setAttribute('aria-label', 'Prednosti');
    mq.innerHTML = '<div class="ndg-mq__track">' + row + row + '</div>';
    document.body.insertBefore(mq, document.body.firstChild);
    document.body.insertBefore(bar, document.body.firstChild);
    var D = bar.querySelector('[data-d]'), H = bar.querySelector('[data-h]'), M = bar.querySelector('[data-m]'), S = bar.querySelector('[data-s]');
    var pad = function(n){ return (n < 10 ? '0' : '') + n; };
    var tick = function(){
      var n = new Date(), e = new Date(n); var add = (3 - n.getDay() + 7) % 7; e.setDate(n.getDate() + add); e.setHours(23, 59, 59, 999);
      var d = Math.max(0, Math.floor((e - n) / 1000));
      D.textContent = pad(Math.floor(d / 86400)); H.textContent = pad(Math.floor(d % 86400 / 3600)); M.textContent = pad(Math.floor(d % 3600 / 60)); S.textContent = pad(d % 60);
    };
    tick(); setInterval(tick, 1000);
  }

  function buybox(){
    if (document.querySelector('.ndg-bb-after')) return;
    /* 3) "Ponovno na zalihi" — kot na originalu nad izdelkom */
    var prod = document.querySelector('div.product.type-product') || document.querySelector('div.product');
    if (prod && !document.querySelector('.ndg-restock')) {
      var rs = document.createElement('section'); rs.className = 'ndg-restock';
      rs.innerHTML = '<h2>Ponovno na zalihi u <span class="ndg-flag" aria-label="Hrvatska">🇭🇷</span></h2>'
        + '<p>Nažalost, kao mala tvrtka još uvijek imamo ograničene zalihe. Zato ga uzmite dok ga ima!</p>'
        + '<p>Tijekom razdoblja nove zalihe imamo posebnu akciju od 5 dana!</p>'
        + '<p>Sljedeća nova zaliha stiže tek krajem studenoga.</p>';
      prod.parentNode.insertBefore(rs, prod);
    }
    var title = document.querySelector('.product_title');
    if (title) { var rt = tpl('ndg-tpl-rating'); if (rt) title.parentNode.insertBefore(rt, title.nextSibling); }
    var form = document.querySelector('form.cart');
    if (form) {
      var st = tpl('ndg-tpl-stock'); var bs = document.getElementById('bundle-selector');
      if (st) { (bs && bs.parentNode) ? bs.parentNode.insertBefore(st, bs.nextSibling) : form.insertBefore(st, form.firstChild); }
      var af = tpl('ndg-tpl-after'); form.parentNode.insertBefore(af, form.nextSibling);
    }
    var more = document.querySelector('.ndg-bb-desc__more');
    if (more) more.addEventListener('click', function(){ var w = more.parentNode; w.classList.toggle('is-open'); more.textContent = w.classList.contains('is-open') ? 'Prikaži manje' : 'Pročitaj više'; });
    gallery();
  }

  /* galerija: na mestih videov originala (6.–8. mesto) predvajaj videe (brez zvoka, ~78 % sirine) */
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
  if (document.readyState === 'loading') { document.addEventListener('DOMContentLoaded', buybox); } else { buybox(); }
  window.addEventListener('load', gallery);

  /* videi z gumbom (nalozijo se sele ob kliku) */
  document.querySelectorAll('.ndg-vid').forEach(function(w){
    var v = w.querySelector('video'), b = w.querySelector('.ndg-vid__btn');
    b.addEventListener('click', function(){
      if (!v.getAttribute('src')) { v.src = v.getAttribute('data-src'); }
      v.controls = true; w.classList.add('is-playing'); v.play();
    });
  });
  /* samodejni videi (kupci, animacija): nalozijo in predvajajo se, ko pridejo v pogled */
  var autos = document.querySelectorAll('.ndg-ugc video, .ndg-anim');
  var start = function(v){ if (!v.getAttribute('src')) { v.src = v.getAttribute('data-src'); } var p = v.play(); if (p && p.catch) p.catch(function(){}); };
  if ('IntersectionObserver' in window) {
    var io = new IntersectionObserver(function(es){ es.forEach(function(e){ if (e.isIntersecting) { start(e.target); } else if (!e.target.paused) { e.target.pause(); } }); }, { rootMargin: '200px' });
    autos.forEach(function(v){ io.observe(v); });
  } else { autos.forEach(start); }

  /* drsnik kartic mnenj */
  var tr = document.querySelector('[data-ndg-car]');
  if (tr) {
    var step = function(dir){ var c = tr.querySelector('.ndg-cc'); var w = c ? c.offsetWidth + 14 : 260; tr.scrollBy({ left: dir * w * (window.innerWidth < 750 ? 2 : 4), behavior: 'smooth' }); };
    document.querySelector('.ndg-car__nav--prev').addEventListener('click', function(){ step(-1); });
    document.querySelector('.ndg-car__nav--next').addEventListener('click', function(){ step(1); });
  }

  /* recenzije: "Prikazi vise" (po 20, kot na originalu) */
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

<style>
.ndg { --ndg-ink: #1c3b4b; --ndg-light: #d2e6f2; --ndg-dark: #276d91; --ndg-green: #1ca054;
  font-family: 'Inter', system-ui, -apple-system, 'Segoe UI', Roboto, Arial, sans-serif; color: var(--ndg-ink); overflow-x: hidden; }
.ndg *, .ndg *::before, .ndg *::after { box-sizing: border-box; }
.ndg img { display: block; max-width: 100%; height: auto; }
.ndg h2, .ndg h3 { text-transform: none; letter-spacing: 0; }
.ndg-sec { padding: 48px 0; margin: 0; }
.ndg-sec--light { background: var(--ndg-light); color: #163f59; }
.ndg-sec--dark { background: var(--ndg-dark); color: #fffef4; }
.ndg-sec--white { background: #fff; color: var(--ndg-ink); }
.ndg-wrap { width: 100%; max-width: 1280px; margin: 0 auto; padding: 0 20px; }
.ndg-h2 { font-family: 'Poppins', sans-serif; font-weight: 700; font-size: clamp(28px, 3.4vw, 40px); line-height: 1.15; margin: 0 0 18px; letter-spacing: -.02em; color: inherit; }

/* valovit razdelilnik */
.ndg-wave { line-height: 0; margin: 0; }
.ndg-wave svg { display: block; width: 100%; height: clamp(28px, 7vw, 90px); }
.ndg-wave--flip svg { transform: scaleX(-1); }

/* videi z Maxom — manjsi kot na originalu (~78 % sirine), na sredini */
.ndg-vid { position: relative; width: 78%; max-width: 970px; margin: 0 auto; border-radius: 6px; overflow: hidden; background: #0d2633; }
.ndg-vid video { position: absolute; inset: 0; width: 100%; height: 100%; object-fit: cover; display: block; }
.ndg-vid__btn { position: absolute; inset: 0; width: 100%; height: 100%; border: 0; padding: 0; margin: 0; background: transparent; cursor: pointer; display: grid; place-items: center; }
.ndg-vid__btn span { width: 72px; height: 72px; border-radius: 50%; background: rgba(255,255,255,.92); color: var(--ndg-dark); display: grid; place-items: center; box-shadow: 0 6px 20px rgba(0,0,0,.25); transition: transform .2s; }
.ndg-vid__btn:hover span { transform: scale(1.06); }
.ndg-vid__btn svg { width: 34px; height: 34px; margin-left: 4px; }
.ndg-vid.is-playing .ndg-vid__btn { display: none; }

/* drsnik kartic mnenj (Loox: 4 na pogled, mobilno 2) */
.ndg-car { position: relative; max-width: 1140px; display: flex; align-items: center; gap: 8px; }
.ndg-car__track { display: grid; grid-auto-flow: column; grid-auto-columns: calc((100% - 42px) / 4); gap: 14px; overflow-x: auto; scroll-snap-type: x mandatory; scrollbar-width: none; flex: 1 1 auto; padding: 4px 2px 10px; }
.ndg-car__track::-webkit-scrollbar { display: none; }
.ndg-cc { scroll-snap-align: start; background: #fff; color: #000; border-radius: 8px; overflow: hidden; box-shadow: 3px 3px 0 rgba(0,0,0,.25); display: flex; flex-direction: column; }
.ndg-cc__img { position: relative; aspect-ratio: 1 / .72; background: #e9eef1; }
.ndg-cc__img img { position: absolute; inset: 0; width: 100%; height: 100% !important; object-fit: cover; }
.ndg-cc__st { z-index: 1; position: absolute; left: 50%; bottom: -14px; transform: translateX(-50%); background: #fff; border-radius: 6px; padding: 4px 9px; box-shadow: 0 1px 4px rgba(0,0,0,.18); line-height: 0; }
.ndg-cc__body { padding: 24px 12px 14px; text-align: center; }
.ndg-cc__name { font-weight: 500; font-size: 15px; margin: 0 0 6px; display: inline-flex; align-items: center; gap: 4px; }
.ndg-cc__txt { font-size: 13px; line-height: 1.45; margin: 0; color: #222; }
.ndg-car__nav { flex: 0 0 auto; width: 38px; height: 38px; border-radius: 50%; border: 0; background: #fff; color: #9a9a9a; display: grid; place-items: center; cursor: pointer; padding: 0; box-shadow: 0 1px 4px rgba(0,0,0,.2); }
.ndg-car__nav svg { width: 20px; height: 20px; }
.ndg-stars { display: inline-flex; gap: 2px; vertical-align: middle; }
.ndg-stars i { display: inline-block; width: 16px; height: 16px; color: var(--ndg-green); }
.ndg-stars i.off { color: #d6d6d6; }
.ndg-stars svg { width: 100%; height: 100%; display: block; }
.ndg-ver { width: 14px; height: 14px; color: #222; flex: 0 0 auto; vertical-align: middle; }

/* videi kupcev */
.ndg-ugc { max-width: 1400px; margin: 0 auto; padding: 0 20px; display: grid; grid-template-columns: repeat(3, minmax(0, 1fr)); gap: 16px; }
.ndg-ugc__it { border-radius: 12px; overflow: hidden; aspect-ratio: 606 / 1080; background: #1d5876; }
.ndg-ugc__it video { width: 100%; height: 100%; object-fit: cover; display: block; }

/* besedilo na sredini */
.ndg-rich { max-width: 860px; text-align: center; }
.ndg-rich p { font-size: 16px; line-height: 1.55; margin: 0 0 14px; }
.ndg-rich--light .ndg-h2 { color: #fffef4; }

/* prednosti */
.ndg-hl { display: grid; grid-template-columns: 1fr 2fr 1fr; gap: 24px; align-items: center; max-width: 1280px; }
.ndg-hl__col { display: flex; flex-direction: column; gap: 24px; }
.ndg-hl__card { border: 1.5px solid #1c3b4b; border-radius: 18px; padding: 20px; text-align: center; }
.ndg-hl__img { max-width: 220px; margin: 0 auto 10px; }
.ndg-hl__card h3 { font-family: 'Poppins', sans-serif; font-weight: 700; font-size: 17px; margin: 0 0 8px; color: #1c3b4b; }
.ndg-hl__card p { font-size: 13.5px; line-height: 1.5; margin: 0; color: #2c4a5a; }
.ndg-hl__main { max-width: 840px; margin: 0 auto; }

/* ikone */
.ndg-icons { list-style: none; margin: 0 auto; padding: 0 20px; display: flex; justify-content: center; gap: 28px; max-width: 900px; }
.ndg-icons li { flex: 1 1 0; max-width: 160px; text-align: center; }
.ndg-icons__c { display: grid; place-items: center; width: 80px; height: 80px; margin: 0 auto 14px; border-radius: 50%; border: 2.4px solid currentColor; background: #fff; color: #163f59; }
.ndg-icons__c svg { width: 46px; height: 46px; }
.ndg-icons h3 { font-family: 'Inter', sans-serif; font-weight: 500; font-size: 13px; text-transform: uppercase; line-height: 1.35; margin: 0; color: #163f59; }

/* animacija */
.ndg-anim { display: block; width: 100%; max-width: 1240px; margin: 0 auto; aspect-ratio: 1 / 1; object-fit: cover; border-radius: 6px; background: #fff; }

/* recenzije */
.ndg-sec--rv .ndg-wrap { max-width: 1080px; }
.ndg-rv__head { display: flex; align-items: center; gap: 10px; flex-wrap: wrap; font-size: 18px; margin: 0 0 16px; }
.ndg-rv__head .ndg-stars i { width: 22px; height: 22px; }
.ndg-rv__avg { color: #555; font-size: 15px; }
.ndg-rv__sum { border: 1px solid #e3e3e3; border-radius: 10px; padding: 14px 16px; margin: 0 0 18px; }
.ndg-rv__sum h3 { font-size: 15px; font-weight: 700; margin: 0 0 6px; color: #111; font-family: 'Inter', sans-serif; }
.ndg-rv__sum p { font-size: 14px; line-height: 1.5; margin: 0; color: #333; }
.ndg-rv__grid { column-count: 4; column-gap: 12px; }
.ndg-rc { break-inside: avoid; display: inline-block; width: 100%; margin: 0 0 12px; border-radius: 8px; overflow: hidden; background: #fff; box-shadow: 0 1px 6px rgba(0,0,0,.12); }
.ndg-rc.is-hidden { display: none; }
.ndg-rc img { width: 100%; }
.ndg-rc__b { padding: 12px; }
.ndg-rc__n { margin: 0; font-size: 14px; color: #111; display: flex; align-items: center; gap: 5px; flex-wrap: wrap; }
.ndg-rc__n span { font-size: 12px; color: #555; }
.ndg-rc__d { margin: 2px 0 6px; font-size: 12px; color: #777; }
.ndg-rc__t { margin: 8px 0 0; font-size: 14px; line-height: 1.5; color: #222; }
.ndg-rv__more-w { text-align: center; margin: 18px 0 0; }
.ndg-rv__more { border: 1px solid #1c3b4b; background: #fff; color: #1c3b4b; border-radius: 999px; padding: 11px 26px; font-weight: 600; cursor: pointer; font-size: 14px; }

/* pasica na vrhu + tekoci trak */
.ndg-annbar { background: #1c3b4b; color: #fff; padding: 7px 12px; font-family: 'Poppins', 'Inter', sans-serif; position: relative; z-index: 3; }
.ndg-annbar__in { display: flex; align-items: center; justify-content: center; gap: 14px; flex-wrap: wrap; max-width: 1200px; margin: 0 auto; }
.ndg-annbar__t { font-weight: 700; font-size: 15px; letter-spacing: .01em; text-align: center; }
.ndg-annbar__cd { display: inline-flex; align-items: center; gap: 4px; }
.ndg-annbar__cd span { display: inline-flex; flex-direction: column; align-items: center; background: #fff; color: #1c3b4b; border-radius: 4px; min-width: 34px; padding: 2px 4px; line-height: 1; }
.ndg-annbar__cd b { font-size: 15px; font-weight: 700; }
.ndg-annbar__cd small { font-size: 8px; font-weight: 500; margin-top: 2px; }
.ndg-annbar__cd em { font-style: normal; font-weight: 700; }
.ndg-mq { background: #276d91; color: #fff; overflow: hidden; white-space: nowrap; padding: 9px 0; font-family: 'Inter', sans-serif; position: relative; z-index: 2; }
.ndg-mq__track { display: inline-flex; animation: ndg-mq 40s linear infinite; }
.ndg-mq__i { display: inline-flex; align-items: center; gap: 8px; font-size: 12px; font-weight: 500; text-transform: uppercase; letter-spacing: .04em; margin-right: 56px; }
.ndg-mq__i svg { width: 18px; height: 18px; border: 1.5px solid currentColor; border-radius: 50%; padding: 2px; }
@keyframes ndg-mq { from { transform: translateX(0); } to { transform: translateX(-50%); } }

/* ponovno na zalihi */
.ndg-restock { background: #fff; color: #233a4d; text-align: center; padding: 36px 16px 32px; font-family: 'Inter', sans-serif; }
.ndg-restock h2 { font-family: 'Poppins', sans-serif; font-weight: 800; font-size: clamp(30px, 5vw, 72px); line-height: 1.1; letter-spacing: -.04em; text-transform: uppercase; margin: 0 0 28px; color: inherit; }
.ndg-restock p { font-size: clamp(16px, 1.6vw, 20px); line-height: 1.5; margin: 0 auto 18px; max-width: 1100px; }
.ndg-restock p:last-child { margin-bottom: 0; }
.ndg-flag { font-family: "Apple Color Emoji", "Segoe UI Emoji", "Noto Color Emoji", sans-serif; letter-spacing: 0; }

/* nakupna skatla */
.ndg-bb-rating { display: inline-flex; align-items: center; gap: 6px; margin: 2px 0 10px; color: #333; font-size: 14px; text-decoration: none; }
.ndg-bb-rating .ndg-stars i { width: 16px; height: 16px; color: #1ca054; }
.ndg-stock { display: flex; align-items: center; gap: 8px; margin: 12px 0 6px; font-size: 14px; font-weight: 600; color: #1c3b4b; }
.ndg-stock__dot { width: 10px; height: 10px; border-radius: 50%; background: #1ca054; box-shadow: 0 0 0 4px rgba(28,160,84,.18); }
.ndg-bb-after { margin: 18px 0 8px; color: #1c3b4b; font-family: 'Inter', sans-serif; }
.ndg-bb-acc { border-bottom: 1px solid #1c3b4b; padding: 10px 0; }
.ndg-bb-acc summary { list-style: none; display: flex; align-items: center; gap: 8px; cursor: pointer; font-size: 15px; font-weight: 500; }
.ndg-bb-acc summary::-webkit-details-marker { display: none; }
.ndg-bb-acc summary svg { width: 32px; height: 32px; flex: 0 0 auto; }
.ndg-bb-acc summary span { flex: 1 1 auto; }
.ndg-bb-acc summary i { width: 10px; height: 10px; border-right: 2px solid currentColor; border-bottom: 2px solid currentColor; transform: rotate(45deg); transition: transform .2s; margin-right: 6px; }
.ndg-bb-acc[open] summary i { transform: rotate(-135deg); }
.ndg-bb-acc__a { padding: 12px 0 6px; font-size: 14px; line-height: 1.6; }
.ndg-bb-acc__a p { margin: 0 0 10px; }
.ndg-bb-acc__a ul { margin: 0 0 10px 18px; padding: 0; }
.ndg-bb-desc { margin: 18px 0 0; font-size: 14px; line-height: 1.6; }
.ndg-bb-desc__in { max-height: 4.8em; overflow: hidden; position: relative; }
.ndg-bb-desc__in p { margin: 0 0 10px; }
.ndg-bb-desc.is-open .ndg-bb-desc__in { max-height: none; }
.ndg-bb-desc__more { border: 0; background: none; padding: 4px 0; text-decoration: underline; cursor: pointer; color: #1c3b4b; font-size: 14px; }

/* videi v galeriji (manjsi kot na originalu, na sredini) */
.woocommerce-product-gallery__image .ndg-gv { display: flex; align-items: center; justify-content: center; background: #fff; aspect-ratio: 4 / 5; }
.woocommerce-product-gallery__image .ndg-gv video { width: 78%; max-height: 100%; display: block; object-fit: contain; }

@media (max-width: 999px) {
  .ndg-ugc { grid-template-columns: none; grid-auto-flow: column; grid-auto-columns: 73vw; gap: 20px; overflow-x: auto; scrollbar-width: none; }
  .ndg-ugc::-webkit-scrollbar { display: none; }
  .ndg-hl { grid-template-columns: 1fr 1fr; }
  .ndg-hl__main { grid-column: 1 / -1; order: -1; }
  .ndg-rv__grid { column-count: 3; }
}
@media (max-width: 749px) {
  .ndg-sec { padding: 36px 0; }
  .ndg-vid { width: 80%; }
  .ndg-car__track { grid-auto-columns: calc((100% - 14px) / 2); }
  .ndg-car__nav { display: none; }
  .ndg-hl { grid-template-columns: 1fr; }
  .ndg-hl__col { gap: 16px; }
  .ndg-icons { display: grid; grid-template-columns: 1fr 1fr; gap: 22px; }
  .ndg-icons li { max-width: none; }
  .ndg-icons li:last-child { grid-column: 1 / -1; }
  .ndg-rv__grid { column-count: 2; column-gap: 8px; }
  .ndg-annbar__t { font-size: 13px; }
}
</style>
