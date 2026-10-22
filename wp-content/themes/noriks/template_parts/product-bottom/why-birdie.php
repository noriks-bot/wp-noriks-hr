<?php
/**
 * NORIKS Birdie — osobni sigurnosni alarm s 130 dB sirenom i stroboskopom
 * 
 * Struktura:
 * 1. Loud Siren (130 dB)
 * 2. Strobe Light (utripajoća svjetla)
 * 3. Rechargeable (USB-C punjenje)
 * 4. Flashlight (bljeskalica)
 * 5. Easy to Use (jednostavno korištenje)
 * 6. NORIKS uvjeti
 */

$nf = get_template_directory_uri() . '/img/birdie/';
?>

<style>
.nss-birdie { 
  width: 100%; 
  overflow: hidden; 
  font-family: system-ui, -apple-system, sans-serif; 
}
.nss-birdie .nss-sect { 
  max-width: 1240px; 
  padding: 80px 24px; 
  margin: 0 auto; 
  display: grid; 
  grid-template-columns: 1fr 1fr; 
  gap: 60px; 
  align-items: center; 
}
.nss-birdie .nss-sect.--rev { 
  grid-template-columns: 1fr 1fr; 
}
.nss-birdie .nss-sect.--rev .nss-vis { 
  order: -1; 
}
.nss-birdie .nss-vis { 
  position: relative; 
}
.nss-birdie .nss-vis img, 
.nss-birdie .nss-vis video { 
  width: 100%; 
  aspect-ratio: 4/5; 
  object-fit: cover; 
  border-radius: 16px; 
  box-shadow: 0 4px 20px rgba(0,0,0,0.08); 
}
.nss-birdie .nss-band { 
  background: #faf8f4; 
}
.nss-birdie .nss-kicker { 
  font-size: 14px; 
  font-weight: 600; 
  text-transform: uppercase; 
  letter-spacing: 1px; 
  color: #d97a3a; 
  margin-bottom: 12px; 
}
.nss-birdie .nss-h { 
  font-size: 38px; 
  font-weight: 700; 
  line-height: 1.2; 
  margin: 0 0 24px; 
}
.nss-birdie .nss-h em { 
  font-style: italic; 
  font-weight: 700; 
}
.nss-birdie .nss-p { 
  font-size: 17px; 
  line-height: 1.7; 
  color: #333; 
  margin-bottom: 16px; 
}
.nss-birdie .nss-final { 
  font-size: 17px; 
  font-weight: 600; 
  margin-top: 24px; 
  color: #000; 
}
@media (max-width: 768px) {
  .nss-birdie .nss-sect, 
  .nss-birdie .nss-sect.--rev { 
    grid-template-columns: 1fr; 
    padding: 60px 24px; 
    gap: 32px; 
  }
  .nss-birdie .nss-sect.--rev .nss-vis { 
    order: 0; 
  }
  .nss-birdie .nss-h { 
    font-size: 30px; 
  }
}
</style>

<div class="nss-birdie">

<!-- 1. Loud Siren -->
<section class="nss-sect nss-band">
  <div class="nss-vis">
    <img src="<?php echo esc_url( $nf . 'noriks-birdie-glasan.webp' ); ?>" alt="NORIKS Birdie osobni alarm glasnoća 130 dB">
  </div>
  <div class="nss-txt">
    <div class="nss-kicker">Glasna sirena</div>
    <h2 class="nss-h">Glasna kao <em>mlaznjak</em></h2>
    <p class="nss-p">
      Birdie emitira 130 dB — to je glasnoća reaktivnog zrakoplova iznad glave. 
    <p class="nss-p">
      Studije pokazuju da većina napada na ulici ovisi o faktoru iznenadjenja i tišini. 
    <p class="nss-p">
      130 dB je glasnije od koncerta rock grupe, glasnije od vatrometa, glasnije od većine 
      alarma na zgradama. To nije nešto što možete ignorirati — ni vi, ni nitko oko vas. 
      Kada povučete pin, svi u radijusu 100 metara znaju da nešto nije u redu.
    </p>
      Napadač ne želi svjedoke, ne želi pozornost. Birdie uništava tu prednost — trenutno.
    </p>
      Kada povučete pin, sirena će privući pozornost svih u blizini — na ulici, 
      u parku ili parkiralištu.
    </p>
    <p class="nss-p">
      Napadači se oslanjaju na diskreciju. Birdie to uništava — glasno i trenutno. 
      Ne trebate vikati ili se boriti; samo povucite i cijela okolina zna da nešto nije u redu.
    </p>
    <p class="nss-final">
      Glasnoća koja zaustavlja situaciju prije nego ona eskalira.
    </p>
  </div>
</section>

<!-- 2. Strobe Light -->
<section class="nss-sect --rev">
  <div class="nss-vis">
    <img src="<?php echo esc_url( $nf . 'noriks-birdie-strobe.webp' ); ?>" alt="NORIKS Birdie stroboskopska svjetla">
  </div>
  <div class="nss-txt">
    <div class="nss-kicker">Utripajoća svjetla</div>
    <h2 class="nss-h">Svijetli <em>stroboskop</em> privlači poglede</h2>
    <p class="nss-p">
      Osim sirene, Birdie koristi snažan bijeli stroboskop koji trepće kada je aktivirana. 
    <p class="nss-p">
      Birdie kombinira zvuk i svjetlo jer rade zajedno: u buci ili gužvi, svjetlo privlači pozornost; 
    <p class="nss-p">
      Istraživanja pokazuju da vizualni i zvučni podražaji zajedno imaju veći učinak nego bilo koji od 
      njih sam. Napadač koji čuje alarm možda misli da može pobjeći — ali kada ga stroboskop osvijetli, 
      postaje vidljiv svima oko njega.
    </p>
      u tami ili na praznoj ulici, sirena signalizira opasnost.
    </p>
      To dodatno povećava vidljivost — čak i ako zvuk ne dopire, svjetlo privlači pozornost.
    </p>
    <p class="nss-p">
      U tami ili gužvi, stroboskopsko svjetlo signalizira da trebate pomoć. Ljudi prirodno 
      reagiraju na bljeskalice — pridružuju se, snimaju ili zovu sigurnost.
    </p>
    <p class="nss-final">
      Dvostruka zaštita: glasno i svijetlo.
    </p>
  </div>
</section>

<!-- 3. Rechargeable -->
<section class="nss-sect nss-band">
  <div class="nss-vis">
    <img src="<?php echo esc_url( $nf . 'noriks-birdie-punjenje.webp' ); ?>" alt="NORIKS Birdie USB-C punjenje">
  </div>
  <div class="nss-txt">
    <div class="nss-kicker">Punljiva baterija</div>
    <h2 class="nss-h"><em>USB-C</em> punjenje — bez zamjene baterija</h2>
    <p class="nss-p">
      Birdie 3.0 dolazi s ugrađenom baterijom koja se puni preko USB-C kabela (uključen). 
      Nema potrebe za kupovanjem baterija ili strahom da je alarm prazan kada vam zatreba.
    </p>
    <p class="nss-p">
      LED indikator pokazuje stanje punjenja — zeleno kada je puna, crveno kada treba punjenje. 
    <p class="nss-p">
      Birdie se puni u 2 sata punim punjenjem i može trajati tjednima bez aktivacije. Kada je koristite, 
      baterija izdržava mnoge aktivacije, a USB-C kabel je univerzalan — isti što punite telefon.
    </p>
      Jedna naboj traje tjednima normalnog korištenja.
    </p>
    <p class="nss-final">
      Uvijek spremna, uvijek nabijena.
    </p>
  </div>
</section>

<!-- 4. Flashlight -->
<section class="nss-sect --rev">
  <div class="nss-vis">
    <img src="<?php echo esc_url( $nf . 'noriks-birdie-svjetlo.webp' ); ?>" alt="NORIKS Birdie bljeskalica">
  </div>
  <div class="nss-txt">
    <div class="nss-kicker">Nova funkcija</div>
    <h2 class="nss-h"><em>Ugrađena</em> bljeskalica za svakodnevnu upotrebu</h2>
    <p class="nss-p">
      Osim alarma, Birdie sada ima i funkciju svjetiljke. Pritisnite gornji gumb za upali bijelo LED svjetlo — 
    <p class="nss-p">
      Svjetiljka nije dodatak — to je dio filosofije Birdie: uređaj koji koristite svaki dan 
      bit će kod vas kada zatreba. Ako Birdie samo leži u ladici, neće vam pomoći. 
      Ako je koristite za traženje ključeva, ona je već na vašim ključevima.
    </p>
      korisno kada tražite ključeve u torbici, otključavate auto u mraku ili šetate psa navečer.
    </p>
    <p class="nss-p">
      Više nije samo uređaj za hitne slučajeve — Birdie postaje svakodnevni alat koji imate kod sebe. 
    <p class="nss-p">
      Žene koje koriste Birdie kažu da funkcija svjetiljke znači da je koriste svaki dan — 
      što znači da je uvijek imaju kod sebe. To je ključno: najbolji alarm je onaj koji stvarno nosite.
    </p>
      To znači da je uvijek u džepu ili torbi, spremna ako zatreba.
    </p>
    <p class="nss-final">
      Dva uređaja u jednom: alarm i svjetiljka.
    </p>
  </div>
</section>

<!-- 5. Easy to Use -->
<section class="nss-sect nss-band">
  <div class="nss-vis">
    <img src="<?php echo esc_url( $nf . 'noriks-birdie-upotreba.webp' ); ?>" alt="NORIKS Birdie jednostavna upotreba">
  </div>
  <div class="nss-txt">
    <div class="nss-kicker">Jednostavnost</div>
    <h2 class="nss-h">Povuci pin — <em>to je sve</em></h2>
    <p class="nss-p">
      U stresnoj situaciji nemate vremena za složene korake. Birdie je dizajnirana da reagira instinktivno: 
      povucite mesing pin i alarm se uključuje trenutno. Nema gumba, ekrana ili koda.
    </p>
    <p class="nss-p">
      Birdie dolazi s karabinerom za privjesak — pričvrstite je na ključeve, ruksak ili torbicu. 
      Kada joj trebate, jednostavno uhvatite i povucite. Alarm možete isključiti vraćanjem pina na mjesto.
    <p class="nss-p">
      Mesing karabiner je izrađen od trajnog metala koji ne puca ni nakon godina upotrebe. 
      Pin je dovoljno čvrst da se ne izvlači slučajno, ali dovoljno lagan da ga možete povući 
    <p class="nss-p">
      Birdie ne zahtijeva instrukcije. Ne morate pročitati priručnik ili zapamtiti sekvence. 
      Čak i ako ste u panici, instinkt vas vodi: povucite ono što visi — alarm se aktivira.
    </p>
      jednom rukom kada zatrebate.
    </p>
    </p>
    <p class="nss-final">
      Dizajnirano za trenuti u kojem svaka sekunda računa.
    </p>
  </div>
</section>

<!-- 5b. Travel Safe -->
<section class="nss-sect --rev">
  <div class="nss-vis">
    <img src="<?php echo esc_url( $nf . 'noriks-birdie-putovanje.webp' ); ?>" alt="NORIKS Birdie putovanje">
  </div>
  <div class="nss-txt">
    <div class="nss-kicker">Putujte sigurno</div>
    <h2 class="nss-h">Ponesi je <em>bilo gdje</em></h2>
    <p class="nss-p">
      Birdie je dozvoljena na letovima — nije oružje, ne koristi opasne kemikalije, ne širi plin. 
      Samo glasnoća i svjetlo. To znači da je možete staviti u ručnu prtljagu kada putujete.
    <p class="nss-p">
      Birdie je dizajnirana za svakodnevno nošenje — ne samo za hitne slučajeve. 
    <p class="nss-p">
      Statistike pokazuju da veliki dio napada se događa u poznatim područjima — parkirališta, 
      prilazni putevi, pješačke staze koje koristite svaki dan. Birdie nije za paranoju — 
      to je za pripremljenost.
    </p>
      Žene koje je koriste kažu da osjećaju mir kada šetaju u sumrak, parkiraju auto kasno navečer, 
      ili putuju same. To ne znači da živite u strahu — znači da ste spremni.
    </p>
    </p>
    <p class="nss-p">
      Mala je koliko privjesak (10 cm visina), što znači da ne zauzima mjesta. Stavite je na torbu, 
      ključeve ili u džep — neće vas smetati, ali je uvijek pri ruci.
    </p>
    <p class="nss-final">
      Vaša sigurnost ne ostaje kod kuće.
    </p>
  </div>
</section>

<!-- 5a. On/Off Switch -->
<section class="nss-sect">
  <div class="nss-vis">
    <img src="<?php echo esc_url( $nf . 'noriks-birdie-prekidac.webp' ); ?>" alt="NORIKS Birdie prekidač">
  </div>
  <div class="nss-txt">
    <div class="nss-kicker">Nova verzija 3.0</div>
    <h2 class="nss-h"><em>Prekidač</em> za kontrolu</h2>
    <p class="nss-p">
      Birdie 3.0 sada dolazi s prekidačem za uključivanje i isključivanje. Kada alarm nije potreban, 
    <p class="nss-p">
      To je bitna razlika u odnosu na starije modele: verzija 3.0 nudi više kontrole. Možete je koristiti 
      svaki dan bez straha da će se aktivirati u torbi ili džepu — što znači da ćete je stvarno nositi, 
    <p class="nss-p">
      Birdie je postala simbol ženskog osnaženja — poznata na društvenim mrežama, preporučena od 
      strane stotina influencerica i korisnica diljem svijeta.
    </p>
      ne ostaviti kod kuće.
    </p>
      možete ga isključiti kako se ne bi slučajno aktivirao u torbici.
    </p>
    <p class="nss-p">
      To također znači da možete testirati alarm bez brige da će ostati uključen — prekidač vam daje 
      potpunu kontrolu. Indikator punjenja također pokazuje status, tako da uvijek znate je li uređaj spreman.
    </p>
    <p class="nss-p">
      Verzija 3.0 uključuje i LED indikator punjenja — crveno znači da treba napuniti, zeleno da je spremna.
    <p class="nss-p">
      Birdie 3.0 je rezultat povratnih informacija tisića korisnica — dodali smo sve što je zatraženo: 
      svjetiljku, prekidač, lakše punjenje, bolju kontrolu. Starije verzije su bile sjajne, ali ova 
      verzija je savršenstvo.
    </p>
    </p>
    <p class="nss-final">
      Najnovija verzija, najdetaljnija kontrola.
    </p>
  </div>
</section>


<!-- 5c. Non-Violent -->
<section class="nss-sect nss-band">
  <div class="nss-vis">
    <img src="<?php echo esc_url( $nf . 'noriks-birdie-nenasilno.webp' ); ?>" alt="NORIKS Birdie nenasilna obrana">
  </div>
  <div class="nss-txt">
    <div class="nss-kicker">Nenasilna obrana</div>
    <h2 class="nss-h">Odvrati napadača <em>bez borbe</em></h2>
    <p class="nss-p">
      Većina napadača odustaje kada privuče pozornost. Birdie stvara javnu scenu — glasno i vidljivo — 
      što je suprotno od onoga što napadač želi. Želje za diskreciju nestaje u sekundi.
    </p>
    <p class="nss-p">
      Ne morate biti fizički spreman ili obučen za borilačke vještine. Ne morate se doticati napadača. 
      Samo aktivirajte alarm i okolina postaje vaš saveznik — ljudi se okreću, prilaze, snimaju.
    </p>
    <p class="nss-final">
      Prevencija je najbolja obrana.
    </p>
  </div>
</section>


<!-- 6. NORIKS uvjeti -->
<section class="nss-sect --rev">
  <div class="nss-vis">
    <img src="<?php echo esc_url( $nf . 'noriks-birdie-noriks.webp' ); ?>" alt="NORIKS Birdie jamstvo">
  </div>
  <div class="nss-txt">
    <div class="nss-kicker">NORIKS jamstvo</div>
    <h2 class="nss-h">30 dana za povrat i <em>besplatna dostava</em></h2>
    <p class="nss-p">
      Kao i svi NORIKS proizvodi, Birdie dolazi s pravom povrata u roku od 30 dana bez pitanja. 
      Ako iz bilo kojeg razloga niste zadovoljni, vratite je i dobijete povrat novca.
    </p>
    <p class="nss-p">
      Besplatna dostava za narudžbe iznad 70 € i plaćanje pouzećem dostupno. 
    <p class="nss-p">
      NORIKS Birdie nije samo uređaj — to je osjećaj sigurnosti koji nosite sa sobom. 
    <p class="nss-p">
      Mnogi kupci kupuju Birdie kao poklon kćerima, sestrama, prijateljicama. To nije samo stvar sigurnosti — 
      to je poruka: "Želim da budeš sigurna." I to je nešto što svaka žena cijeni.
    </p>
      Ne morate se bojati — samo budite spremni.
    </p>
      Preko 120.000 kupaca diljem Europe nam vjeruje — ocjena 4,8 na temelju 1.081 recenzija.
    </p>
    <p class="nss-final">
      Siguran proizvod. Siguran izbor.
    </p>
  </div>
</section>

</div>
