<?php
/**
 * NORIKS AutoLock - sigurnosna sajla za volan i pojas (orto-defender) - why sekcije po natancni strukturi originala
 * (antiapex.com/products/defender).
 *
 * STRUKTURA ORIGINALA:
   1. glavni del pod nakupom: OPIS (3 odstavki) + "What's included" (lokot + 3 rezervna kljuca s sliko) - pri nas slika LEVO (lokot, znamka -> NORIKS s Higgsfieldom), besedilo DESNO z opisom in "sto je u paketu" z ikonami
   2. trak ocen platform (tuji logotipi platform za mnenja) - pri nas trak zaupanja s 4 ikonami (ocena 4,8, 120.000 kupcev, 30 dana, placanje pouzecem)
   3. "Why 97% of customers recommend it": drsnik 4 kartic mnenj (fotografija, ocena, naslov, citat, ime) - pri nas karusel 4 kartic z istimi fotografijami, hrvaska imena
   4. "Total Lock Down In Three Simple Steps": 3 koraki v vrsti (slika zgoraj, KORAK n, besedilo) - pri nas mreza 3 kartic s stevilkami korakov (znamka na lokotu -> NORIKS)
   5. "Layers Of Protection Thieves Can't Beat": 3 kartice v vrsti (naslov, besedilo, kljukica, slika) - pri nas mreza 3 kartic s slikami (sajla, navlaka, lokot)
   6. trak ocen platform (ponovitev) - pri nas trak 4 lastnosti z ikonami
   7. FAQ (8 vprasanj) - pri nas v FAQ Informacije o proizvodu pod mnenji (auto_reviews/FAQ_HR_defender.php), brez tujih jamstev (90 dni) in tujih stevilk prodaje
   8. "The Numbers Don't Lie": stevilke v mrezi (97 %, policija, pod 5 s, 250K+, 86 % s slikami) - pri nas 4 kartice s stevilkami in slikami (86 % lopovov, pod 5 s, celik 5 mm, 3 kljuci); tuja stevilka prodaje in neprevedljiv policijski znak izpuscena
   9. "Driveway Defender VS Traditional Locks": primerjava 3 stolpcev (nasa sajla / lokot za kolo / sipka za volan) s kljukicami in krizci + 3 kljukice spodaj - pri nas primerjalna tabela z glavo s slikami + 3 alineje
   10. trak ocen platform (ponovitev) - pri nas trak 4 prednosti z ikonami
   11. "Why we built it": slika (ukradeni avto) DESNO, zgodba LEVO - pri nas slika desno, besedilo levo (zgodba brez tujih ustanoviteljev in znamke)
   12. "Protection, promised": jamstvo (90 dni) s sliko lokota - pri nas slika LEVO, besedilo DESNO z NORIKS pogoji (30 dana)
   13. Customer Reviews - pri nas mnenja pod why (auto_reviews/HR_defender.php)
   14. NORIKS pogoji (skupni del noriks-pogoji.php)
 * BARVA ORIGINALA: #f26522 (oranzna barva sajle, oznak in gumbov originala); svetel ton za --bg #fdf0e7
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
$df_u = get_template_directory_uri() . '/img/defender/';
$df_svg = function ( $d, $s = 24 ) {
	return '<svg viewBox="0 0 24 24" width="' . $s . '" height="' . $s . '" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">' . $d . '</svg>';
};
$df_ik = array(
	'lokot'   => '<rect x="5" y="11" width="14" height="10" rx="2"/><path d="M8 11V7a4 4 0 0 1 8 0v4"/><circle cx="12" cy="16" r="1.4"/>',
	'kljuc'   => '<circle cx="7.5" cy="15.5" r="3.5"/><path d="M10 13l9-9"/><path d="M16 7l2 2M14 9l2 2"/>',
	'zvijezda'=> '<path d="M12 3l2.7 5.6 6.1.9-4.4 4.3 1 6.1L12 17l-5.4 2.9 1-6.1L3.2 9.5l6.1-.9L12 3z"/>',
	'ljudi'   => '<circle cx="9" cy="8" r="3"/><path d="M3 20c0-3.3 2.7-6 6-6s6 2.7 6 6"/><circle cx="17" cy="9" r="2.4"/><path d="M16 14.2c2.8.4 5 2.8 5 5.8"/>',
	'povrat'  => '<path d="M4 12a8 8 0 1 0 2.4-5.7"/><path d="M4 4v4.5h4.5"/><path d="M12 8v4l2.6 2"/>',
	'novac'   => '<rect x="2.5" y="6.5" width="19" height="11" rx="2"/><circle cx="12" cy="12" r="2.6"/><path d="M6 9.5v5M18 9.5v5"/>',
	'sat'     => '<circle cx="12" cy="13" r="8"/><path d="M12 9v4l2.5 2"/><path d="M9 2h6"/>',
	'celik'   => '<path d="M4 7c4-3 12-3 16 0"/><path d="M4 12c4-3 12-3 16 0"/><path d="M4 17c4-3 12-3 16 0"/>',
	'volan'   => '<circle cx="12" cy="12" r="8.5"/><circle cx="12" cy="12" r="2"/><path d="M3.8 10.5h6.4M13.8 10.5h6.4M12 14v6.5"/>',
	'auto'    => '<path d="M3 16v-3l2-5h14l2 5v3"/><path d="M3 16h18v2H3z"/><circle cx="7" cy="18.5" r="1.6"/><circle cx="17" cy="18.5" r="1.6"/><path d="M5.5 12h13"/>',
	'oko'     => '<path d="M2 12s3.6-7 10-7 10 7 10 7-3.6 7-10 7S2 12 2 12z"/><circle cx="12" cy="12" r="3"/>',
	'stit'    => '<path d="M12 3l7 3v5.5c0 4.4-3 8-7 9.5-4-1.5-7-5.1-7-9.5V6l7-3z"/><path d="M9 12l2 2 4-4"/>',
	'kvacica' => '<path d="M5 12.5l4.5 4.5L19 7.5"/>',
);
$df_li = function ( $ik, $naslov, $tekst ) use ( $df_svg, $df_ik ) {
	return '<li><span class="wsdefender__fi">' . $df_svg( $df_ik[ $ik ] ) . '</span><div><strong>' . esc_html( $naslov ) . '</strong><p>' . esc_html( $tekst ) . '</p></div></li>';
};
$df_trak = function ( $celice ) use ( $df_svg, $df_ik ) {
	$o = '<div class="wsdefender__trak">';
	foreach ( $celice as $c ) { $o .= '<div class="wsdefender__tc"><span class="wsdefender__ti">' . $df_svg( $df_ik[ $c[0] ], 22 ) . '</span><div><strong>' . esc_html( $c[1] ) . '</strong><span>' . esc_html( $c[2] ) . '</span></div></div>'; }
	return $o . '</div>';
};
$df_mnenja = array(
	array( 'noriks-defender-mnenje-1.webp', '5,0', 'Napokon mirno spavam', 'Svaku večer prije spavanja provjeravao sam auto ispred kuće. Ovo je prvo što je stvarno pomoglo. Stavim ga za par sekundi i više ne razmišljam o tome. Spavam puno bolje.', 'Josip C.' ),
	array( 'noriks-defender-mnenje-2.webp', '4,8', 'Auto su mi ukrali dvaput', 'Nakon drugog puta više nisam mogla. Policija je rekla da ne može ništa. Kupila sam ovaj lokot i već šest mjeseci nema problema. Napokon mogu parkirati na ulici bez panike.', 'Renata P.' ),
	array( 'noriks-defender-mnenje-3.webp', '5,0', 'Kupio sam ga za kćer', 'Studira i parkira ispred stana u nesigurnom kvartu. Kao tata stalno sam brinuo da joj ne ukradu auto. Koristi ga svaku večer i to mi je jedino važno.', 'Damir M.' ),
	array( 'noriks-defender-mnenje-4.webp', '4,9', 'Lopov ga je vidio i otišao', 'Susjedova kamera snimila je nekoga kako u 2 ujutro provjerava vrata auta u našoj ulici. Došao je do mog, posvijetlio baterijom unutra, vidio narančasti lokot na volanu i samo otišao do sljedećeg.', 'Tomislav K.' ),
);
$df_koraki = array(
	array( 'noriks-defender-korak-1.webp', 'Kabel kroz volan', 'Provucite sajlu kroz volan – ide oko bilo kojeg standardnog volana.' ),
	array( 'noriks-defender-korak-2.webp', 'Uklopite u kopču pojasa', 'Utaknite lokot u kopču sigurnosnog pojasa dok ne klikne, pa zategnite sajlu.' ),
	array( 'noriks-defender-korak-3.webp', 'Zaključajte i odite', 'Jedan okret ključa i gotovo. Volan se ne može okrenuti dovoljno da auto napusti prilaz.' ),
);
$df_zastita = array(
	array( 'noriks-defender-zastita-sajla.webp', 'Ne mogu je prerezati', 'Pletena čelična sajla od 5 mm vojne kvalitete izdržala je svaki alat koji smo testirali.', 'Otporna na kliješta i poluge' ),
	array( 'noriks-defender-zastita-navlaka.webp', 'Ne grebe volan', 'Bez okrhnuća i ogrebotina. Sigurna za kožu i sve vrste volana.', 'Nula oštećenja unutrašnjosti' ),
	array( 'noriks-defender-zastita-lokot.webp', 'Zaključava u sekundi', 'Petlja kroz volan, klik u pojas, zategnite, okret ključa – gotovo.', 'Dovoljno brzo za svaki dan' ),
);
$df_brojke = array(
	array( 'noriks-defender-brojka-86.webp', '86 %', 'lopova', 'vidi lokot kroz prozor i odabere drugi auto.' ),
	array( 'noriks-defender-brojka-5s.webp', '< 5 s', 'postavljanje', 'Zaštita koju ćete stvarno koristiti svaki put kad parkirate.' ),
	array( 'noriks-defender-brojka-celik.webp', '5 mm', 'čelična sajla', 'Pletena sajla vojne kvalitete u zaštitnoj navlaci.' ),
	array( 'noriks-defender-brojka-kljucevi.webp', '3', 'ključa', 'u svakom paketu – jedan za svaki dan, dva rezervna.' ),
);
?>
<div class="wsdefender">
<section class="wsdefender__s wsdefender__s--bg"><div class="wsdefender__v wsdefender__dva"><div class="wsdefender__media"><img src="<?php echo esc_url( $df_u . 'noriks-defender-lokot.webp' ); ?>" alt="NORIKS AutoLock lokot s pletenom čeličnom sajlom i narančastim prstenovima" loading="eager" decoding="async"></div><div><div class="wsdefender__kicker">Zaustavite lopove prije nego pokušaju</div><h2 class="wsdefender__h2">Volan vezan za pojas – <em>auto ostaje na prilazu</em></h2><p class="wsdefender__p">NORIKS AutoLock za manje od 15 sekundi zaključa volan za kopču sigurnosnog pojasa. Čak i ako kloniraju ključ i upale motor, volan ne mogu okrenuti dovoljno da odvezu auto s prilaza.</p><p class="wsdefender__p">To je vidljiva zaštita: lopov kroz prozor odmah vidi narančastu sajlu i odlazi. Njegov posao od 60 sekundi postaje 15 minuta buke i rizika – i ide dalje. Postavljanje 15 sekundi, skidanje 5. Koristite ga svaku večer.</p><ul class="wsdefender__feat"><?php echo $df_li( 'lokot', 'NORIKS AutoLock', 'Pristaje u gotovo svako vozilo – sajla 70 cm.' ); echo $df_li( 'kljuc', 'Tri ključa u paketu', 'Nikad se nećete zaključati – uvijek imate rezervni.' ); ?></ul><p class="wsdefender__zak">Postavite za 15 sekundi. Skinite za 5.</p></div></div></section>
<section class="wsdefender__s wsdefender__s--traka"><div class="wsdefender__v"><?php echo $df_trak( array( array( 'zvijezda', 'Ocjena 4,8 / 5', '1.081 recenzija' ), array( 'ljudi', '120.000 kupaca', 'vjeruje NORIKS-u' ), array( 'povrat', '30 dana', 'za povrat novca' ), array( 'novac', 'Plaćanje pouzećem', 'platite kad paket stigne' ) ) ); ?></div></section>
<section class="wsdefender__s wsdefender__s--bg"><div class="wsdefender__v"><div class="wsdefender__kicker wsdefender__c">Prvo pitanje koje postave</div><h2 class="wsdefender__h2 wsdefender__c">Zašto ga kupci <em>preporučuju dalje</em></h2><p class="wsdefender__p wsdefender__c">Ocjena 4,8 od 5 – što kažu vozači koji ga stave svake večeri.</p><div class="wsdefender__grid wsdefender__kar"><?php foreach ( $df_mnenja as $m ) : ?><div class="wsdefender__k"><div class="wsdefender__km wsdefender__km--l"><img src="<?php echo esc_url( $df_u . $m[0] ); ?>" alt="<?php echo esc_attr( 'NORIKS AutoLock u autu kupca – ' . $m[4] ); ?>" loading="eager" decoding="async"></div><div class="wsdefender__kt"><span class="wsdefender__oc"><span class="wsdefender__zv" role="img" aria-label="5 zvjezdica"><svg viewBox="0 0 24 24" width="16" height="16" fill="#e0a33c" aria-hidden="true"><path d="M12 2.8l2.8 5.8 6.3.9-4.6 4.4 1.1 6.3L12 17.2l-5.6 3 1.1-6.3L2.9 9.5l6.3-.9L12 2.8z"/></svg><svg viewBox="0 0 24 24" width="16" height="16" fill="#e0a33c" aria-hidden="true"><path d="M12 2.8l2.8 5.8 6.3.9-4.6 4.4 1.1 6.3L12 17.2l-5.6 3 1.1-6.3L2.9 9.5l6.3-.9L12 2.8z"/></svg><svg viewBox="0 0 24 24" width="16" height="16" fill="#e0a33c" aria-hidden="true"><path d="M12 2.8l2.8 5.8 6.3.9-4.6 4.4 1.1 6.3L12 17.2l-5.6 3 1.1-6.3L2.9 9.5l6.3-.9L12 2.8z"/></svg><svg viewBox="0 0 24 24" width="16" height="16" fill="#e0a33c" aria-hidden="true"><path d="M12 2.8l2.8 5.8 6.3.9-4.6 4.4 1.1 6.3L12 17.2l-5.6 3 1.1-6.3L2.9 9.5l6.3-.9L12 2.8z"/></svg><svg viewBox="0 0 24 24" width="16" height="16" fill="#e0a33c" aria-hidden="true"><path d="M12 2.8l2.8 5.8 6.3.9-4.6 4.4 1.1 6.3L12 17.2l-5.6 3 1.1-6.3L2.9 9.5l6.3-.9L12 2.8z"/></svg></span> <b><?php echo esc_html( $m[1] ); ?></b></span><strong class="wsdefender__nm"><?php echo esc_html( $m[2] ); ?></strong><p>„<?php echo esc_html( $m[3] ); ?>“</p><span class="wsdefender__ime"><i class="wsdefender__av" aria-hidden="true"><?php echo esc_html( mb_substr( $m[4], 0, 1 ) ); ?></i><?php echo esc_html( $m[4] ); ?> <small>· Provjereni kupac</small></span></div></div><?php endforeach; ?></div></div></section>
<section class="wsdefender__s"><div class="wsdefender__v"><div class="wsdefender__kicker wsdefender__c">Kako se koristi</div><h2 class="wsdefender__h2 wsdefender__c">Potpuna blokada u <em>tri jednostavna koraka</em></h2><p class="wsdefender__p wsdefender__c">Bez uputa i bez alata – sajla, kopča pojasa i jedan okret ključa.</p><div class="wsdefender__grid wsdefender__g3"><?php foreach ( $df_koraki as $n => $k ) : ?><div class="wsdefender__k"><div class="wsdefender__km wsdefender__km--l"><img src="<?php echo esc_url( $df_u . $k[0] ); ?>" alt="<?php echo esc_attr( 'Korak ' . ( $n + 1 ) . ': ' . $k[1] ); ?>" loading="eager" decoding="async"><span class="wsdefender__st"><?php echo (int) ( $n + 1 ); ?></span></div><div class="wsdefender__kt"><span class="wsdefender__kor">Korak <?php echo (int) ( $n + 1 ); ?></span><strong class="wsdefender__nm"><?php echo esc_html( $k[1] ); ?></strong><p><?php echo esc_html( $k[2] ); ?></p></div></div><?php endforeach; ?></div></div></section>
<section class="wsdefender__s wsdefender__s--bg"><div class="wsdefender__v"><div class="wsdefender__kicker wsdefender__c">Napravljen da zaustavi lopove</div><h2 class="wsdefender__h2 wsdefender__c">Slojevi zaštite koje <em>lopovi ne mogu svladati</em></h2><p class="wsdefender__p wsdefender__c">Čelik, navlaka i lokot – svaki dio ima svoj posao.</p><div class="wsdefender__grid wsdefender__g3"><?php foreach ( $df_zastita as $z ) : ?><div class="wsdefender__k wsdefender__k--z"><div class="wsdefender__kz"><img src="<?php echo esc_url( $df_u . $z[0] ); ?>" alt="<?php echo esc_attr( 'NORIKS AutoLock – ' . $z[1] ); ?>" loading="eager" decoding="async"></div><div class="wsdefender__kt"><strong class="wsdefender__nm"><?php echo esc_html( $z[1] ); ?></strong><p><?php echo esc_html( $z[2] ); ?></p><span class="wsdefender__ok"><i><?php echo $df_svg( $df_ik['kvacica'], 14 ); ?></i><?php echo esc_html( $z[3] ); ?></span></div></div><?php endforeach; ?></div></div></section>
<section class="wsdefender__s wsdefender__s--traka"><div class="wsdefender__v"><?php echo $df_trak( array( array( 'sat', 'Ispod 5 sekundi', 'postavljanje i skidanje' ), array( 'celik', 'Čelik 5 mm', 'pletena sajla' ), array( 'kljuc', '3 ključa', 'u svakom paketu' ), array( 'auto', 'Sajla 70 cm', 'za gotovo svako vozilo' ) ) ); ?></div></section>
<section class="wsdefender__s wsdefender__s--bg"><div class="wsdefender__v"><div class="wsdefender__kicker wsdefender__c">Brojke govore</div><h2 class="wsdefender__h2 wsdefender__c">Brojke ne lažu. <em>Lopovi ne pokušavaju.</em></h2><p class="wsdefender__p wsdefender__c">Vidljiv lokot na volanu mijenja računicu lopova – i to u par sekundi.</p><div class="wsdefender__grid wsdefender__g4"><?php foreach ( $df_brojke as $b ) : ?><div class="wsdefender__k wsdefender__k--b"><div class="wsdefender__kb"><img src="<?php echo esc_url( $df_u . $b[0] ); ?>" alt="<?php echo esc_attr( 'NORIKS AutoLock – ' . $b[1] . ' ' . $b[2] ); ?>" loading="eager" decoding="async"></div><div class="wsdefender__kt"><span class="wsdefender__br"><?php echo esc_html( $b[1] ); ?></span><strong class="wsdefender__nm"><?php echo esc_html( $b[2] ); ?></strong><p><?php echo esc_html( $b[3] ); ?></p></div></div><?php endforeach; ?></div></div></section>
<section class="wsdefender__s"><div class="wsdefender__v wsdefender__dva wsdefender__dva--tab"><div><div class="wsdefender__kicker">Usporedba</div><h2 class="wsdefender__h2">NORIKS AutoLock <em>protiv klasičnih lokota</em></h2><p class="wsdefender__p">NORIKS AutoLock nadmašuje klasične lokote. Pristupačna zaštita od skupe štete – dovoljno brza za svaki dan.</p><ul class="wsdefender__kv"><li>Nula oštećenja unutrašnjosti</li><li>Lopovi ga vide i odlaze</li><li>Dovoljno brz za svakodnevnu upotrebu</li></ul><p class="wsdefender__zak">Volan i pojas zajedno – ne samo kotač.</p></div><div><div class="wsdefender__tw"><table class="wsdefender__tab"><thead><tr><th></th><th class="wsdefender__nas"><img src="<?php echo esc_url( $df_u . 'noriks-defender-usporedba-sajla.webp' ); ?>" alt="NORIKS AutoLock sajla" loading="eager"><span>NORIKS AutoLock</span></th><th><img src="<?php echo esc_url( $df_u . 'noriks-defender-usporedba-kotac.webp' ); ?>" alt="Lokot za kotač" loading="eager"><span>Lokot za kotač</span></th><th><img src="<?php echo esc_url( $df_u . 'noriks-defender-usporedba-sipka.webp' ); ?>" alt="Šipka za volan" loading="eager"><span>Šipka za volan</span></th></tr></thead><tbody>
<?php
$df_x = '<span class="wsdefender__ne">✕</span>'; $df_d = '<span class="wsdefender__da">✓</span>';
foreach ( array(
	array( 'Postavljanje', 'u sekundi', '4+ min muke', '60 sekundi' ),
	array( 'Spremanje', 'kompaktan, lako se spremi', '4 kg teškog metala', 'glomazna šipka' ),
	array( 'Materijal', 'vojni čelik 5 mm', 'čelično kućište', 'jedno mjesto reza' ),
	array( 'Volan', 'ne oštećuje', 'ostavlja tragove', 'grebe volan' ),
	array( 'Zaštita', 'volan + pojas', 'samo kotač', 'samo volan' ),
) as $r ) {
	echo '<tr><td>' . esc_html( $r[0] ) . '</td><td class="wsdefender__nas">' . $df_d . esc_html( $r[1] ) . '</td><td>' . $df_x . esc_html( $r[2] ) . '</td><td>' . $df_x . esc_html( $r[3] ) . '</td></tr>';
}
?>
</tbody></table></div></div></div></section>
<section class="wsdefender__s wsdefender__s--bg wsdefender__s--traka"><div class="wsdefender__v"><?php echo $df_trak( array( array( 'oko', 'Vidljivo odvraćanje', 'narančasta sajla kroz prozor' ), array( 'volan', 'Ne grebe volan', 'PVC zaštitna navlaka' ), array( 'stit', 'Volan + pojas', 'dvije točke blokade' ), array( 'zvijezda', 'Ocjena 4,8', '120.000 kupaca' ) ) ); ?></div></section>
<section class="wsdefender__s"><div class="wsdefender__v wsdefender__dva wsdefender__dva--rev"><div class="wsdefender__media wsdefender__media--sir"><img src="<?php echo esc_url( $df_u . 'noriks-defender-ukradeni-auto.webp' ); ?>" alt="Obiteljski automobil parkiran na prilazu kuće" loading="eager" decoding="async"></div><div><div class="wsdefender__kicker">Zašto je to važno</div><h2 class="wsdefender__h2">Auto nestane s prilaza <em>prije izlaska sunca</em></h2><p class="wsdefender__p">Tako izgleda većina krađa: obiteljski auto za koji se godinama štedjelo nestane s prilaza dok svi spavaju. Lopovi su gotovi prije zore, a često ih nitko nikad ne pronađe.</p><p class="wsdefender__p">Osiguranje na kraju isplati – nakon franšize, najma zamjenskog auta, izgubljenog vremena i stresa. Ali auta više nema, a nema ni onog osjećaja da će to netko riješiti umjesto vas.</p><p class="wsdefender__p">Zato NORIKS AutoLock: zaštita koju ćete stvarno koristiti svake večeri, jer traje pet sekundi – i koja vaš auto čini težom metom od onog do njega.</p><p class="wsdefender__zak">Nije riječ o strahu – nego o tome da vaš auto bude teža meta.</p></div></div></section>
<section class="wsdefender__s wsdefender__s--bg"><div class="wsdefender__v wsdefender__dva"><div class="wsdefender__media"><img src="<?php echo esc_url( $df_u . 'noriks-defender-zastita-obecana.webp' ); ?>" alt="NORIKS AutoLock lokot s čeličnom sajlom" loading="eager" decoding="async"><span class="wsdefender__bad">30 dana</span></div><div><div class="wsdefender__kicker">Zaštita, obećana</div><h2 class="wsdefender__h2">Isprobajte ga <em>30 dana bez rizika</em></h2><p class="wsdefender__p">Stavite ga u auto i koristite ga svake večeri. Ako vam iz bilo kojeg razloga ne odgovara, javite nam se unutar 30 dana i vraćamo vam novac – bez kompliciranja.</p><ul class="wsdefender__feat"><?php echo $df_li( 'povrat', '30 dana za povrat', 'Rok teče od dana kad paket stigne.' ); echo $df_li( 'novac', 'Plaćanje pouzećem', 'Platite tek kad paket stigne.' ); echo $df_li( 'auto', 'Besplatna dostava', 'Za narudžbe iznad 70 €.' ); echo $df_li( 'kljuc', '3 ključa u paketu', 'Jedan za svaki dan, dva rezervna.' ); ?></ul><p class="wsdefender__zak">Vi odlučujete – kod kuće, u svom autu.</p></div></div></section>
<section class="wsdefender__s npg-s"><?php $npg = array( 'izdelek' => 'NORIKS AutoLock', 'barva' => '#f26522' ); include __DIR__ . '/noriks-pogoji.php'; ?></section>
</div>
<style>
.wsdefender{color:#1c1c1c;font-family:inherit}
.wsdefender__s{padding:72px 0;background:#fff}.wsdefender__s--bg{background:#fdf0e7}
.wsdefender__s--traka{padding:30px 0}
.wsdefender__v{width:100%;max-width:1240px;margin:0 auto;padding:0 24px;box-sizing:border-box}
.wsdefender__c{text-align:center}
.wsdefender__kicker{display:inline-flex;align-items:center;gap:10px;font-size:13px;letter-spacing:1.4px;text-transform:uppercase;color:#c94e12;margin:0 0 10px;font-weight:800}
.wsdefender__kicker::before{content:"";width:26px;height:2px;background:#f26522;border-radius:2px}
.wsdefender__kicker.wsdefender__c{display:flex;justify-content:center}
.wsdefender__h2{font-size:clamp(26px,3vw,36px);font-weight:800;line-height:1.2;margin:0 0 18px;color:#1c1c1c}.wsdefender__h2 em{font-style:italic;color:#c94e12}
.wsdefender__p{font-size:16px;line-height:1.65;color:#333;margin:0 0 14px}
.wsdefender__zak{font-size:16.5px;font-weight:800;line-height:1.5;margin:20px 0 0;padding-left:14px;border-left:3px solid #f26522}
.wsdefender__dva{display:grid;grid-template-columns:1fr 1fr;gap:56px;align-items:center}
.wsdefender__dva>div{min-width:0}
.wsdefender__dva--rev>div:first-child{order:2}
.wsdefender__dva--tab{grid-template-columns:5fr 7fr}
.wsdefender__media{position:relative;border-radius:18px;overflow:hidden;box-shadow:0 14px 36px rgba(140,60,10,.16);aspect-ratio:4/5;background:#fff}
.wsdefender__media img{width:100%;height:100%;object-fit:cover;display:block}
.wsdefender__media--sir{aspect-ratio:4/3}
.wsdefender__bad{position:absolute;left:16px;top:16px;background:#f26522;color:#fff;font-weight:800;font-size:13px;letter-spacing:.8px;text-transform:uppercase;padding:7px 13px;border-radius:30px;box-shadow:0 4px 14px rgba(0,0,0,.12)}
.wsdefender__feat{list-style:none;margin:8px 0 0;padding:0;display:grid;grid-template-columns:1fr 1fr;gap:14px}
.wsdefender__feat li{display:flex;gap:14px;align-items:flex-start;background:#fff;border-radius:16px;padding:16px;box-shadow:0 6px 20px rgba(140,60,10,.09);list-style:none;margin:0;transition:transform .2s,box-shadow .2s}
.wsdefender__feat li:hover{transform:translateY(-2px);box-shadow:0 12px 26px rgba(140,60,10,.14)}
.wsdefender__feat strong{display:block;font-size:15.5px;font-weight:800;margin:0 0 3px}.wsdefender__feat p{margin:0;font-size:14.5px;line-height:1.5;color:#555}
.wsdefender__fi{flex:0 0 46px;width:46px;height:46px;border-radius:50%;background:#fde0cc;color:#c94e12;display:flex;align-items:center;justify-content:center}
.wsdefender__trak{display:grid;grid-template-columns:repeat(4,1fr);gap:0}
.wsdefender__tc{display:flex;align-items:center;justify-content:center;gap:12px;padding:6px 14px;border-left:1px solid rgba(0,0,0,.08)}
.wsdefender__tc:first-child{border-left:0}
.wsdefender__tc strong{display:block;font-size:15.5px;font-weight:800;line-height:1.2}.wsdefender__tc span{font-size:13.5px;color:#666}
.wsdefender__ti{flex:0 0 44px;width:44px;height:44px;border-radius:50%;background:#fde0cc;color:#c94e12;display:flex;align-items:center;justify-content:center}
.wsdefender__grid{display:grid;gap:22px;margin-top:26px}
.wsdefender__g3{grid-template-columns:repeat(3,1fr)}.wsdefender__g4{grid-template-columns:repeat(4,1fr)}
.wsdefender__k{background:#fff;border-radius:16px;overflow:hidden;display:flex;flex-direction:column;box-shadow:0 8px 24px rgba(140,60,10,.10);transition:transform .2s,box-shadow .2s}
.wsdefender__k:hover{transform:translateY(-3px);box-shadow:0 14px 30px rgba(140,60,10,.16)}
.wsdefender__km{position:relative}
.wsdefender__km img{width:100%;aspect-ratio:4/3;object-fit:cover;display:block}
.wsdefender__st{position:absolute;left:14px;top:14px;width:38px;height:38px;border-radius:50%;background:#f26522;color:#fff;font-weight:800;font-size:17px;display:flex;align-items:center;justify-content:center;box-shadow:0 4px 12px rgba(0,0,0,.2)}
.wsdefender__kz,.wsdefender__kb{background:#f4f4f4;display:flex;align-items:center;justify-content:center;height:240px}
.wsdefender__kz img,.wsdefender__kb img{max-width:80%;max-height:210px;width:auto;height:auto;object-fit:contain;display:block}
.wsdefender__kt{padding:20px 22px 24px;flex:1;display:flex;flex-direction:column}
.wsdefender__nm{font-size:17px;font-weight:800;margin:0 0 8px;display:block}
.wsdefender__kt p{margin:0 0 14px;font-size:15.5px;line-height:1.55;color:#333;flex:1}
.wsdefender__oc{display:flex;align-items:center;gap:6px;margin:0 0 8px;font-size:14px}.wsdefender__oc b{color:#c94e12}
.wsdefender__zv{display:inline-flex;gap:2px}
.wsdefender__kor{font-size:13.5px;font-weight:800;letter-spacing:1.2px;text-transform:uppercase;color:#c94e12;margin:0 0 4px}
.wsdefender__ok{display:flex;align-items:center;gap:8px;font-weight:700;font-size:14.5px;color:#1c1c1c}
.wsdefender__ok i{width:24px;height:24px;border-radius:50%;background:#fde0cc;color:#c94e12;display:inline-flex;align-items:center;justify-content:center}
.wsdefender__br{font-size:36px;font-weight:900;color:#f26522;line-height:1;margin:0 0 6px}
.wsdefender__ime{display:flex;align-items:center;flex-wrap:wrap;font-weight:800;font-size:14.5px}.wsdefender__ime small{font-weight:600;color:#777;margin-left:6px;font-size:13px}
.wsdefender__av{display:inline-flex;align-items:center;justify-content:center;width:30px;height:30px;border-radius:50%;background:#fde0cc;color:#c94e12;font-style:normal;font-weight:800;font-size:13px;margin-right:9px}
.wsdefender__kv{list-style:none;margin:6px 0 0;padding:0}
.wsdefender__kv li{position:relative;padding:0 0 0 32px;margin:0 0 12px;font-size:15.5px;line-height:1.55;color:#333;list-style:none;font-weight:600}
.wsdefender__kv li::before{content:"✓";position:absolute;left:0;top:0;width:22px;height:22px;border-radius:50%;background:#fde0cc;color:#c94e12;font-weight:800;font-size:13px;display:flex;align-items:center;justify-content:center}
.wsdefender__tw{overflow-x:auto;border-radius:16px;box-shadow:0 8px 24px rgba(140,60,10,.10);background:#fff}
.wsdefender__tab{width:100%;border-collapse:collapse;font-size:14.5px;margin:0;min-width:520px}
.wsdefender__tab th{background:#1c1c1c!important;color:#fff!important;font-weight:800;padding:14px 10px;text-align:center;border:0;vertical-align:bottom}
.wsdefender__tab th img{display:block;margin:0 auto 8px;height:46px;width:auto;max-width:90px;object-fit:contain;background:#fff;border-radius:8px;padding:4px}
.wsdefender__tab th.wsdefender__nas{background:#f26522!important}
.wsdefender__tab td{padding:12px 10px;text-align:center;border:0;border-bottom:1px solid #f3e1d4;color:#333}
.wsdefender__tab td:first-child{text-align:left;font-weight:800;padding-left:16px}
.wsdefender__tab td.wsdefender__nas{background:#fff6f0;font-weight:700}
.wsdefender__tab tbody tr:last-child td{border-bottom:0}
.wsdefender__da,.wsdefender__ne{display:inline-flex;width:22px;height:22px;border-radius:50%;align-items:center;justify-content:center;font-size:13.5px;font-weight:800;margin-right:6px;vertical-align:-4px}
.wsdefender__da{background:#f26522;color:#fff}.wsdefender__ne{background:#eee;color:#999}
.wsdefender__karw{position:relative}
.wsdefender__kar{grid-auto-flow:column;grid-auto-columns:calc((100% - 44px)/3);overflow-x:auto;scroll-snap-type:x mandatory;scrollbar-width:none}
.wsdefender__kar::-webkit-scrollbar{display:none}.wsdefender__kar>*{scroll-snap-align:start}
.wsdefender__pus{position:absolute;top:30%;transform:translateY(-50%);width:44px;height:44px;border-radius:50%;border:0;background:#fff;box-shadow:0 4px 14px rgba(0,0,0,.18);font-size:24px;line-height:44px;cursor:pointer;z-index:2;color:#c94e12;padding:0}
.wsdefender__pus--l{left:-14px}.wsdefender__pus--d{right:-14px}
@media (max-width:1024px){.wsdefender__g4{grid-template-columns:repeat(2,1fr)}.wsdefender__trak{grid-template-columns:repeat(2,1fr);row-gap:16px}.wsdefender__tc:nth-child(3){border-left:0}}
@media (max-width:860px){
.wsdefender__s{padding:48px 0}.wsdefender__s--traka{padding:26px 0}
.wsdefender__dva,.wsdefender__dva--tab{grid-template-columns:minmax(0,1fr);gap:26px}.wsdefender__dva--rev>div:first-child{order:0}
.wsdefender__g3{grid-template-columns:1fr}
.wsdefender__kar{grid-auto-columns:82%}.wsdefender__pus--l{left:4px}.wsdefender__pus--d{right:4px}
}
@media (max-width:767px){.wsdefender__v{padding:0 16px}}
@media (max-width:560px){.wsdefender__feat{grid-template-columns:1fr}.wsdefender__h2{font-size:25px}.wsdefender__g4{grid-template-columns:1fr 1fr;gap:12px}.wsdefender__kb{height:150px}.wsdefender__kb img{max-height:130px}.wsdefender__br{font-size:28px}.wsdefender__k--b .wsdefender__kt{padding:14px}.wsdefender__k--b .wsdefender__kt p{font-size:14px}.wsdefender__tc{flex-direction:column;text-align:center;gap:6px;padding:4px 6px}}
</style>
<script>
(function(){document.querySelectorAll('.wsdefender__kar').forEach(function(k){
  var w=document.createElement('div');w.className='wsdefender__karw';k.parentNode.insertBefore(w,k);w.appendChild(k);
  ['l','d'].forEach(function(s){var b=document.createElement('button');b.type='button';b.className='wsdefender__pus wsdefender__pus--'+s;b.setAttribute('aria-label',s==='l'?'Prethodno':'Sljedeće');b.innerHTML=s==='l'?'&#8249;':'&#8250;';
    b.addEventListener('click',function(){var x=k.firstElementChild;var d=x?x.getBoundingClientRect().width+22:300;k.scrollBy({left:s==='l'?-d:d,behavior:'smooth'});});w.appendChild(b);});
});})();
</script>
