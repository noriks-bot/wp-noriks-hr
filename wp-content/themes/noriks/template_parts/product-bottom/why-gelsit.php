<?php
/**
 * NORIKS GelSit — why sekcije v vrstnem redu originala: za koga + stevilke, zgodbe kupcev (3 objave),
 * stalni pritisak (problem), gel sace + izrez za trticno kost (resitev), usporedba troskova, usporedba s pjenom
 * in obicnim gelom, mnenja kupcev, cesta pitanja, NORIKS pogoji (namesto 90 dni vracila in 1 leta garancije originala).
 *
 * STRUKTURA ORIGINALA: (westlyn.co/products/gel-cushion)
   1. recommended + press — strokovnjaki in mediji (izpusceno: tuja imena in mediji) -> pri nas za koga + stevilke
   2. social — 3 objave kupcev v mrezi (avatar, ime, datum, besedilo, reakcije)
   3. feature_pressure — slika + besedilo (problem stalnega pritiska; statistike izpuscene)
   4. feature_activeflow — slika + besedilo (gel sace + izrez)
   5. feature_cost — slika + seznam stroskov (tabela)
   6. comparison — primerjalna tabela (mi / pjena in obicni gel)
   7. guarantee — 90 dni (pri nas NORIKS pogoji na koncu, 30 dana)
   8. reviews — vodoravni drsnik 11 kartic mnenj z avatarjem in oznako situacije (pri nas 6, karusel)
   9. FAQ — harmonika
 * Izpusceno: zdravstvene trditve originala (preleznine, celjenje, statistike), imena strokovnjakov, mediji.
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
$wdir = get_template_directory_uri() . '/img/gelsit/';
?>
<div class="wgsit">

  <section class="wgsit__s wgsit__s--bg">
    <div class="wgsit__v">
      <div class="wgsit__media"><img src="<?php echo esc_url( $wdir . 'noriks-gelsit-uredski-stolac.webp?v=1' ); ?>" alt="Stariji muškarac radi za stolom i sjedi na gel jastuku NORIKS GelSit na uredskom stolcu" loading="lazy" decoding="async"></div>
      <div class="wgsit__tekst">
        <div class="wgsit__kicker">ZA ONE KOJI DUGO SJEDE · I ZA ONE KOJI BRINU O NJIMA</div>
        <h2 class="wgsit__h2">Jastuk koji biraju <em>obitelji i njegovatelji</em></h2>
        <p class="wgsit__p">NORIKS GelSit napravljen je za sve koji velik dio dana provode sjedeći – u fotelji, invalidskim kolicima, za radnim stolom ili u autu. Najčešće ga kupuju djeca za svoje roditelje, njegovatelji za ljude o kojima brinu i svi kojima je dosadilo stalno namještanje na tvrdoj stolici.</p>
        <p class="wgsit__p">Umjesto pjene koja se s vremenom spljošti, jastuk ima <strong>saće od gela u dva sloja</strong> i <strong>izrez na mjestu trtične kosti</strong>. Težina se raspoređuje po cijeloj površini sjedala, a najosjetljivije mjesto ostaje bez dodira s podlogom.</p>
        <div class="wgsit__brojke">
          <div><strong>4,8/5</strong><span>prosječna ocjena</span></div>
          <div><strong>120.000</strong><span>kupaca NORIKS</span></div>
          <div><strong>30 dana</strong><span>za povrat novca</span></div>
        </div>
        <p class="wgsit__zak">Jedan jastuk – i svaki stolac postaje udobniji.</p>
      </div>
    </div>
  </section>

  <section class="wgsit__s">
    <div class="wgsit__v wgsit__v--polna">
      <div class="wgsit__tekst wgsit__tekst--sredina">
        <div class="wgsit__kicker">ZAŠTO GA KUPCI VOLE</div>
        <h2 class="wgsit__h2">Priče onih koji su ga kupili <em>za svoje najdraže</em></h2>
        <p class="wgsit__p">Prave objave djece i njegovatelja koji su jastuk kupili za ljude koje vole.</p>
      </div>
      <div class="wgsit__g3">
        <div class="wgsit__obj"><div class="wgsit__objh"><img src="<?php echo esc_url( $wdir . 'noriks-gelsit-objava-1.webp' ); ?>" alt="" loading="lazy" decoding="async"><div><strong>Paula F.</strong><span>14. veljače · javno</span></div></div><p>Tata ima 78 godina i posljednjih je godina sve rjeđe dolazio na nedjeljni ručak. Kad sam ga napokon pitala, rekao je da mu je sjedenje postalo neugodno – nakon dvadesetak minuta na bilo kojoj stolici. Kupila sam mu jedan jastuk za fotelju i jedan za auto. Prošli mjesec odsjedio je cijelu nogometnu utakmicu mog sina i nijednom nije tražio da idemo. Na putu kući rekao je: „Zaboravio sam kako je kad samo sjedneš i ne razmišljaš o tome.”</p><div class="wgsit__objf">👍 ❤️ · Sviđa mi se · Komentiraj · Podijeli</div></div>
        <div class="wgsit__obj"><div class="wgsit__objh"><img src="<?php echo esc_url( $wdir . 'noriks-gelsit-objava-2.webp' ); ?>" alt="" loading="lazy" decoding="async"><div><strong>Snježana B.</strong><span>jučer · javno</span></div></div><p>Mama ima 79 godina i satima sjedi u fotelji. Tek sam kasno shvatila da se pjenasti jastuk na kojem je sjedila potpuno spljoštio – praktički je sjedila na tvrdoj podlozi. Patronažna sestra savjetovala nam je gel jastuk s izrezom za trtičnu kost. Prošla su četiri mjeseca, a gel se i dalje vraća u oblik svaki put kad ga pritisnem – isti kao prvog dana.</p><div class="wgsit__objf">👍 ❤️ · Sviđa mi se · Komentiraj · Podijeli</div></div>
        <div class="wgsit__obj"><div class="wgsit__objh"><img src="<?php echo esc_url( $wdir . 'noriks-gelsit-objava-3.webp' ); ?>" alt="" loading="lazy" decoding="async"><div><strong>Mirela M.</strong><span>2. siječnja · javno</span></div></div><p>Mama je u invalidskim kolicima tri godine i promijenili smo hrpu jastuka – pjenasti su se brzo spljoštili, drugi nisu bili ono što su obećavali. Ovo je prvi koji je izdržao. Šest mjeseci kasnije gel je isti kao kad smo ga dobili, ništa se nije stisnulo.</p><div class="wgsit__objf">👍 ❤️ · Sviđa mi se · Komentiraj · Podijeli</div></div>
      </div>
      <p class="wgsit__zak" style="text-align:center">Ako vaš roditelj tiho preskače druženja – možda je vrijeme da ga pitate zašto.</p>
    </div>
  </section>

  <section class="wgsit__s wgsit__s--bg">
    <div class="wgsit__v">
      <div class="wgsit__media"><img src="<?php echo esc_url( $wdir . 'noriks-gelsit-sa-i-bez.webp?v=1' ); ?>" alt="Ilustracija: starija gospođa na stolcu s gel jastukom i bez jastuka" loading="lazy" decoding="async"></div>
      <div class="wgsit__tekst">
        <div class="wgsit__kicker">SKRIVENI PROBLEM DUGOG SJEDENJA</div>
        <h2 class="wgsit__h2">Problem nije stolac – <em>problem je stalni pritisak</em></h2>
        <p class="wgsit__p">Kad dugo sjedimo, težina tijela nosi se na istim nekoliko točaka – trtičnoj kosti, kukovima i stražnjici. Što dulje sjedite, to se pritisak na tim mjestima više osjeti, a koža ispod se zagrijava jer zrak ne može cirkulirati.</p>
        <p class="wgsit__p">Obični jastuci pritisak samo malo ublaže, ali ga ne uklone. Na ravnoj podlozi – čak i mekanoj – vrijedi isto:</p>
        <ul class="wgsit__lista">
          <li><strong>težina se skuplja</strong> na najizbočenijim točkama tijela,</li>
          <li><strong>toplina se zadržava</strong> između kože i podloge,</li>
          <li><strong>pjena se s vremenom spljošti</strong> i na kraju sjedite na gotovo tvrdoj površini.</li>
        </ul>
        <p class="wgsit__zak">Pritisak nije dovoljno ublažiti – treba ga rasporediti i maknuti s najosjetljivijeg mjesta.</p>
      </div>
    </div>
  </section>

  <section class="wgsit__s">
    <div class="wgsit__v wgsit__v--rev">
      <div class="wgsit__media"><img src="<?php echo esc_url( $wdir . 'noriks-gelsit-gel-sace.webp?v=1' ); ?>" alt="Plavi gel jastuk NORIKS GelSit sa strukturom saća i izrezom za trtičnu kost" loading="lazy" decoding="async"></div>
      <div class="wgsit__tekst">
        <div class="wgsit__kicker">KAKO DJELUJE</div>
        <h2 class="wgsit__h2">Gel koji se prilagođava <em>svakom pokretu</em></h2>
        <p class="wgsit__p">Jezgra jastuka izrađena je od elastičnog gela u obliku saća. Kad sjednete, ćelije se pomiču i mijenjaju oblik zajedno s vama – kod svakog udaha i svakog malog pomaka – pa se težina neprestano raspoređuje i nijedno mjesto ne nosi sav teret predugo.</p>
        <p class="wgsit__p">Za razliku od drugih gel jastuka, NORIKS GelSit ima <strong>ugrađeni izrez za trtičnu kost</strong>: na mjestu gdje je pritisak najjači podloge jednostavno nema. Otvoreni kanali saća propuštaju zrak, pa jastuk ostaje svjež i suh i nakon više sati sjedenja.</p>
        <div class="wgsit__kart">
          <div><strong>Saće od gela</strong><span>raspoređuje težinu po cijelom sjedalu</span></div>
          <div><strong>Izrez za trtičnu kost</strong><span>bez dodira na najosjetljivijem mjestu</span></div>
          <div><strong>Otvoreni kanali</strong><span>zrak cirkulira, jastuk ostaje svjež</span></div>
        </div>
        <p class="wgsit__zak">Svjež, suh i udoban – cijeli dan.</p>
      </div>
    </div>
  </section>

  <section class="wgsit__s wgsit__s--bg">
    <div class="wgsit__v">
      <div class="wgsit__media"><img src="<?php echo esc_url( $wdir . 'noriks-gelsit-fotelja.webp?v=1' ); ?>" alt="Stariji muškarac opušteno sjedi u kožnoj fotelji na gel jastuku NORIKS GelSit" loading="lazy" decoding="async"></div>
      <div class="wgsit__tekst">
        <div class="wgsit__kicker">PAMETNA KUPNJA</div>
        <h2 class="wgsit__h2">Ne treba vam skupa oprema – <em>treba vam pravi jastuk</em></h2>
        <p class="wgsit__p">Kad sjedenje postane problem, mnoge obitelji misle da je jedino rješenje skupa oprema:</p>
        <div class="wgsit__scroll">
          <table class="wgsit__tab">
            <tr><td>Bolnički krevet s izmjeničnim pritiskom</td><td>od 2.200 €</td></tr>
            <tr><td>Električna fotelja s podizanjem</td><td>1.300 – 2.700 €</td></tr>
            <tr><td>Pjenasti jastuci koji se spljošte</td><td>180 € i više (stalno nanovo)</td></tr>
            <tr><td><strong>NORIKS GelSit</strong></td><td><strong>jedna kupnja</strong></td></tr>
          </table>
        </div>
        <p class="wgsit__p">Jeftini pjenasti jastuci i tanki gel podlošci izgledaju kao rješenje, ali većina se spljošti u nekoliko tjedana. NORIKS GelSit je od početka zamišljen tako da pritisak rasporedi, a ne samo ublaži – i da oblik zadrži godinama. Jedna kupnja pretvara svaki stolac na kojem sjedite u udobno mjesto, u udobnosti vlastitog doma.</p>
        <p class="wgsit__zak">Jedna kupnja umjesto stalnih zamjena.</p>
      </div>
    </div>
  </section>

  <section class="wgsit__s">
    <div class="wgsit__v wgsit__v--rev">
      <div class="wgsit__media"><img src="<?php echo esc_url( $wdir . 'noriks-gelsit-svugdje.webp?v=1' ); ?>" alt="Devet fotografija gel jastuka NORIKS GelSit na klupi, fotelji, invalidskim kolicima, uredskom i blagovaonskom stolcu" loading="lazy" decoding="async"></div>
      <div class="wgsit__tekst">
        <div class="wgsit__kicker">USPOREDBA</div>
        <h2 class="wgsit__h2">Zašto je bolji od <em>običnih jastuka</em></h2>
        <p class="wgsit__p">Pjena i obični gel podlošci pritisak samo ublažavaju. NORIKS GelSit ga raspoređuje – i to radi godinama.</p>
        <div class="wgsit__scroll">
          <table class="wgsit__tab wgsit__tab--usp">
            <tr><th></th><th>NORIKS GelSit</th><th>Pjena i obični gel</th></tr>
            <tr><td>Rasterećuje trtičnu kost, kukove i donji dio leđa</td><td>✓</td><td>✗</td></tr>
            <tr><td>Izrez – trtična kost bez dodira s podlogom</td><td>✓</td><td>✗</td></tr>
            <tr><td>Ne spljošti se – zadržava oblik do 10 godina</td><td>✓</td><td>✗</td></tr>
            <tr><td>Saće od gela ostaje svježe i prozračno</td><td>✓</td><td>✗</td></tr>
            <tr><td>Ravnomjerno raspoređuje težinu po cijelom sjedalu</td><td>✓</td><td>✗</td></tr>
            <tr><td>Za fotelje, invalidska kolica, autosjedala i više</td><td>✓</td><td>✗</td></tr>
          </table>
        </div>
        <p class="wgsit__p">Dimenzije 41 × 33 × 5 cm odgovaraju većini standardnih sjedala, a protuklizna podloga drži jastuk na mjestu – na klupi, u fotelji, kolicima, uredskom ili vrtnom stolcu.</p>
        <p class="wgsit__zak">Jedan jastuk – za svaki stolac u kući i u autu.</p>
      </div>
    </div>
  </section>

  <section class="wgsit__s wgsit__s--bg">
    <div class="wgsit__v wgsit__v--polna">
      <div class="wgsit__tekst wgsit__tekst--sredina">
        <div class="wgsit__kicker">PROVJERENA MIŠLJENJA KUPACA</div>
        <h2 class="wgsit__h2">Njihovim <em>riječima</em></h2>
        <p class="wgsit__p">Prosječna ocjena 4,8 od 5. Bilo da sjedite u fotelji, kolicima, uredu ili autu – netko je već isprobao jastuk baš u vašoj situaciji.</p>
      </div>
      <div class="wgsit__kar">
        <div class="wgsit__rev"><div class="wgsit__objh"><img src="<?php echo esc_url( $wdir . 'noriks-gelsit-kupac-1.webp' ); ?>" alt="" loading="lazy" decoding="async"><div><strong>Suzana G.</strong><span>kći i njegovateljica</span></div></div><span class="wgsit__tag">Za mamu</span><p class="wgsit__zv">★★★★★</p><p>„Ne spljošti se kao pjenasti jastuci koje smo prije imali. Mama u fotelji sjedi mirno, bez stalnog namještanja.”</p><span class="wgsit__ver">✓ provjereni kupac</span></div>
        <div class="wgsit__rev"><div class="wgsit__objh"><img src="<?php echo esc_url( $wdir . 'noriks-gelsit-kupac-2.webp' ); ?>" alt="" loading="lazy" decoding="async"><div><strong>Margareta H.</strong><span>provjereni kupac</span></div></div><span class="wgsit__tag">Bol u trtici</span><p class="wgsit__zv">★★★★★</p><p>„Ovo je prvi jastuk na kojem na trtičnoj kosti ne osjećam ništa. Napokon mogu odgledati cijeli film.”</p><span class="wgsit__ver">✓ provjereni kupac</span></div>
        <div class="wgsit__rev"><div class="wgsit__objh"><img src="<?php echo esc_url( $wdir . 'noriks-gelsit-kupac-3.webp' ); ?>" alt="" loading="lazy" decoding="async"><div><strong>Josip R.</strong><span>brine o ocu</span></div></div><span class="wgsit__tag">Invalidska kolica</span><p class="wgsit__zv">★★★★★</p><p>„Tata opet s nama sjedi za večerom. Jastuk ostaje na mjestu i ne treba ga stalno namještati.”</p><span class="wgsit__ver">✓ provjereni kupac</span></div>
        <div class="wgsit__rev"><div class="wgsit__objh"><img src="<?php echo esc_url( $wdir . 'noriks-gelsit-kupac-4.webp' ); ?>" alt="" loading="lazy" decoding="async"><div><strong>Antun P.</strong><span>provjereni kupac</span></div></div><span class="wgsit__tag">Ured</span><p class="wgsit__zv">★★★★★</p><p>„Svaki drugi jastuk bio je spljošten do ručka. Ovaj je čvrst i svjež od jutarnjeg sastanka do zadnjeg maila.”</p><span class="wgsit__ver">✓ provjereni kupac</span></div>
        <div class="wgsit__rev"><div class="wgsit__objh"><img src="<?php echo esc_url( $wdir . 'noriks-gelsit-kupac-5.webp' ); ?>" alt="" loading="lazy" decoding="async"><div><strong>Robert</strong><span>provjereni kupac</span></div></div><span class="wgsit__tag">Vožnja</span><p class="wgsit__zv">★★★★★</p><p>„Prvi je mužu toliko promijenio dan da smo naručili još jedan za auto. Nakon nekoliko mjeseci i dalje je kao prvi dan.”</p><span class="wgsit__ver">✓ provjereni kupac</span></div>
        <div class="wgsit__rev"><div class="wgsit__objh"><img src="<?php echo esc_url( $wdir . 'noriks-gelsit-kupac-6.webp' ); ?>" alt="" loading="lazy" decoding="async"><div><strong>Patricija M.</strong><span>nakon operacije</span></div></div><span class="wgsit__tag">Nakon operacije</span><p class="wgsit__zv">★★★★★</p><p>„Prvih tjedana kod kuće sjedenje mi je bilo naporno. Izrez i mekani gel učinili su ga podnošljivim – koristila sam ga svaki dan.”</p><span class="wgsit__ver">✓ provjereni kupac</span></div>
      </div>
    </div>
  </section>

  <section class="wgsit__s">
    <div class="wgsit__v wgsit__v--rev">
      <div class="wgsit__media"><img src="<?php echo esc_url( $wdir . 'noriks-gelsit-pitanja.webp?v=1' ); ?>" alt="Stariji muškarac satima udobno sjedi u fotelji na gel jastuku NORIKS GelSit" loading="lazy" decoding="async"></div>
      <div class="wgsit__tekst">
        <div class="wgsit__kicker">IMATE JOŠ PITANJA?</div>
        <h2 class="wgsit__h2">Česta <em>pitanja</em></h2>
        <p class="wgsit__p"><strong>Kada ću osjetiti razliku?</strong> Većina kupaca razliku osjeti čim prvi put sjedne. Izrez odmah rastereti trtičnu kost, a saće od gela ravnomjerno raspoređuje težinu, pa možete dulje sjediti bez namještanja.</p>
        <p class="wgsit__p"><strong>Probao/la sam druge jastuke – po čemu je ovaj drugačiji?</strong> Pjena i obični gel podlošci pritisak samo ublažavaju, a većina se spljošti u nekoliko tjedana. NORIKS GelSit ima gel koji se pomiče s vama i izrez na mjestu gdje je pritisak najjači.</p>
        <p class="wgsit__p"><strong>Hoće li se spljoštiti?</strong> Ne. Za razliku od pjene, gel se svaki put vraća u oblik – i nakon šest mjeseci svakodnevnog korištenja jastuk je kao prvog dana.</p>
        <p class="wgsit__p"><strong>Mogu li ga koristiti u invalidskim kolicima?</strong> Da. S dimenzijama 41 × 33 × 5 cm odgovara većini standardnih sjedala – kolicima, foteljama, blagovaonskim i uredskim stolcima te autosjedalima.</p>
        <p class="wgsit__p"><strong>Kako se čisti?</strong> Gel obrišete vlažnom krpom za nekoliko sekundi – i jastuk je ponovno čist i svjež.</p>
        <p class="wgsit__zak">Lagan je i lako se nosi – od auta do fotelje i natrag.</p>
      </div>
    </div>
  </section>

  <section class="wgsit__s wgsit__s--bg">
    <div class="wgsit__v">
      <div class="wgsit__media wgsit__media--pecat">
        <div class="wgsit__pecat" role="img" aria-label="30 dana za povrat">
          <div class="wgsit__pecat-in">
            <span class="wgsit__pecat-top">Pravo na povrat</span>
            <span class="wgsit__pecat-num">30</span>
            <span class="wgsit__pecat-dani">DANA</span>
            <span class="wgsit__pecat-bot">Bez rizika</span>
          </div>
        </div>
      </div>
      <div class="wgsit__tekst">
        <div class="wgsit__kicker">KUPUJTE BEZ BRIGE</div>
        <h2 class="wgsit__h2">Uz NORIKS kupujete <em>bez rizika</em></h2>
        <p class="wgsit__p">Isprobajte NORIKS GelSit kod kuće – u fotelji, za stolom ili u autu. Ako niste zadovoljni, imate 30 dana za povrat novca, bez kompliciranja i bez pitanja. Pridružite se zajednici od 120.000 zadovoljnih kupaca.</p>
        <div class="wgsit__pogoji">
          <div class="wgsit__pog"><strong>30 dana</strong><span>za povrat novca</span></div>
          <div class="wgsit__pog"><strong>Besplatna dostava</strong><span>iznad 70 €</span></div>
          <div class="wgsit__pog"><strong>Plaćanje pouzećem</strong><span>platite kad paket stigne</span></div>
          <div class="wgsit__pog"><strong>120.000 kupaca</strong><span>prosječna ocjena 4,8</span></div>
        </div>
        <p class="wgsit__zak">Udobno sjedenje – ili povrat novca.</p>
      </div>
    </div>
  </section>
</div>
<style>
.wgsit{color:#1c1c1c;font-family:inherit}
.wgsit__s{padding:56px 0;background:#fff}
.wgsit__s--bg{background:#f4f3ef}
.wgsit__v{max-width:1240px;margin:0 auto;padding:0 24px;box-sizing:border-box;display:grid;grid-template-columns:1fr 1fr;gap:48px;align-items:center}
.wgsit__v--rev .wgsit__media{order:2}
.wgsit__v--rev .wgsit__tekst{order:1}
.wgsit__media{border-radius:16px;overflow:hidden;box-shadow:0 10px 30px rgba(0,0,0,.10);aspect-ratio:4/5;background:#eee}
.wgsit__media img,.wgsit__media video{width:100%;height:100%;object-fit:cover;display:block}
.wgsit__tekst{min-width:0}
.wgsit__kicker{font-size:13px;letter-spacing:1px;text-transform:uppercase;color:#555;margin:0 0 8px;font-weight:700}
.wgsit__h2{font-size:clamp(24px,3vw,34px);font-weight:800;line-height:1.2;margin:0 0 18px;color:#1c1c1c}
.wgsit__h2 em{font-style:italic}
.wgsit__p{font-size:15.5px;line-height:1.65;color:#333;margin:0 0 14px}
.wgsit__lista{font-size:15.5px;line-height:1.65;color:#333;margin:0 0 14px;padding-left:22px}
.wgsit__lista li{margin:0 0 6px}
.wgsit__brojke,.wgsit__kart{display:grid;grid-template-columns:repeat(3,1fr);gap:10px;margin:0 0 16px}
.wgsit__brojke div,.wgsit__kart div{background:#fff;border-radius:12px;box-shadow:0 4px 14px rgba(0,0,0,.06);padding:12px 14px}
.wgsit__s:not(.wgsit__s--bg) .wgsit__kart div{background:#f4f3ef}
.wgsit__brojke div{text-align:center}
.wgsit__brojke strong{display:block;font-size:22px;font-weight:800;margin:0 0 2px}
.wgsit__kart strong{display:block;font-size:15px;font-weight:800;margin:0 0 4px}
.wgsit__brojke span,.wgsit__kart span{font-size:13.5px;line-height:1.5;color:#333}
.wgsit__scroll{overflow-x:auto;-webkit-overflow-scrolling:touch;margin:0 0 14px}
.wgsit__tab{width:100%;border-collapse:collapse;font-size:14.5px;background:#fff;border-radius:12px;overflow:hidden}
.wgsit__s:not(.wgsit__s--bg) .wgsit__tab{background:#f4f3ef}
.wgsit__tab th,.wgsit__tab td{padding:9px 12px;border-bottom:1px solid rgba(0,0,0,.07);text-align:left;vertical-align:top}
.wgsit__tab th{font-weight:800}
.wgsit__tab--usp th:not(:first-child),.wgsit__tab--usp td:not(:first-child){text-align:center;white-space:nowrap}
.wgsit__tab--usp td:nth-child(2){color:#1f8a4c;font-weight:800}
.wgsit__tab--usp td:nth-child(3){color:#c0392b;font-weight:800}
.wgsit__citati{display:grid;gap:10px;margin:0 0 16px}
.wgsit__citati blockquote{margin:0;background:#fff;border-radius:12px;box-shadow:0 4px 14px rgba(0,0,0,.06);padding:14px 16px}
.wgsit__s:not(.wgsit__s--bg) .wgsit__citati blockquote{background:#f4f3ef}
.wgsit__citati p{font-size:14.5px;line-height:1.55;color:#333;margin:0 0 6px;font-style:italic}
.wgsit__citati cite{font-size:13px;font-style:normal;font-weight:700;color:#555}
.wgsit__zak{font-size:16px;font-weight:800;line-height:1.5;color:#1c1c1c;margin:6px 0 0}
.wgsit__pogoji{display:grid;grid-template-columns:1fr 1fr;gap:14px;margin:0 0 16px}
.wgsit__pog{background:#fff;border-radius:14px;box-shadow:0 6px 20px rgba(0,0,0,.07);padding:18px 14px;text-align:center}
.wgsit__pog strong{display:block;font-size:16px;font-weight:800;margin:0 0 6px}
.wgsit__pog span{font-size:14px;color:#444}
/* zadnja sekcija: pecat 30 dana kot vizual ob NORIKS pogojih */
.wgsit__media--pecat{display:flex;align-items:center;justify-content:center;background:#fff}
.wgsit__pecat{width:280px;height:280px;border-radius:50%;display:flex;align-items:center;justify-content:center;text-align:center;background:radial-gradient(circle at 35% 30%,#4a4a4a 0%,#2a2a2a 55%,#111 100%);box-shadow:0 0 0 10px #e9e6df,0 0 0 14px #2a2a2a,0 18px 40px rgba(0,0,0,.16)}
.wgsit__pecat-in{width:206px;height:206px;border-radius:50%;background:#fff;color:#1c1c1c;display:flex;flex-direction:column;align-items:center;justify-content:center}
.wgsit__pecat-top,.wgsit__pecat-bot{font-size:11px;font-weight:700;letter-spacing:.12em;text-transform:uppercase;max-width:150px;line-height:1.3;color:#666}
.wgsit__pecat-num{font-size:78px;font-weight:800;line-height:1;margin:4px 0 0;color:#1c1c1c}
.wgsit__pecat-dani{font-size:22px;font-weight:700;letter-spacing:.12em;margin:0 0 6px}
@media (max-width:860px){
  .wgsit__s{padding:38px 0}
  .wgsit__v{grid-template-columns:1fr;gap:22px}
  .wgsit__v--rev .wgsit__media,.wgsit__media{order:0}
  .wgsit__v--rev .wgsit__tekst,.wgsit__tekst{order:1}
  .wgsit__brojke,.wgsit__kart{grid-template-columns:1fr}
  .wgsit__pecat{width:230px;height:230px}
  .wgsit__pecat-in{width:170px;height:170px}
  .wgsit__pecat-num{font-size:64px}
  .wgsit__pecat-top,.wgsit__pecat-bot{font-size:10px;max-width:118px}
}
.wgsit__g3{display:grid;grid-template-columns:repeat(3,1fr);gap:20px;margin-top:10px}
.wgsit__obj,.wgsit__rev{background:#fff;border:1px solid #e4e6eb;border-radius:12px;padding:16px 18px;text-align:left}
.wgsit__objh{display:flex;gap:10px;align-items:center;margin-bottom:10px}.wgsit__objh img{width:44px;height:44px;border-radius:50%;object-fit:cover}
.wgsit__objh strong{display:block;font-size:15px}.wgsit__objh span{font-size:12.5px;color:#65676b}
.wgsit__obj p,.wgsit__rev p{font-size:14.5px;line-height:1.6;color:#1c1e21;margin:0 0 10px}
.wgsit__objf{border-top:1px solid #e4e6eb;padding-top:8px;font-size:13px;color:#65676b}
.wgsit__kar{display:grid;grid-auto-flow:column;grid-auto-columns:calc((100% - 40px)/3);gap:20px;overflow-x:auto;scroll-snap-type:x mandatory;padding-bottom:8px;margin-top:10px}
.wgsit__kar>*{scroll-snap-align:start}
.wgsit__tag{display:inline-block;background:#eef3f8;color:#1d2b4f;border-radius:20px;padding:3px 10px;font-size:12px;font-weight:700;margin-bottom:6px}
.wgsit__zv{color:#e0a33c!important;letter-spacing:2px;margin:0 0 4px!important}.wgsit__ver{font-size:12.5px;color:#1f8a4c;font-weight:700}
@media (max-width:860px){.wgsit__g3{grid-template-columns:1fr}.wgsit__kar{grid-auto-columns:82%}}
</style>
