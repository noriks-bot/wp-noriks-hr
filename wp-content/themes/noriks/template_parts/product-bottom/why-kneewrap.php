<?php
/**
 * NORIKS KneeWrap — steznik za koljeno s dvostrukim trakama i gel jastucicem: why sekcije po strukturi originala
 * (anacondafightwear.co/products/anaconda-knee-brace-pair; ta stran je testna - 1 slika in "Testing description here",
 * zato je vsebina z glavne strani istega izdelka /products/anaconda-knee-brace).
 *
 * STRUKTURA ORIGINALA (opis pod gumbom, od vrha navzdol):
   1. naslov "Helping 500,000+ Athletes Train With Confidence" + podnaslov + pasica s 4 okroglimi slikami (Double straps, Gel padding, Full flexibility, Eases discomfort) + uvodno besedilo - pri nas naslov + podnaslov + lokalizirana pasica + uvodno besedilo (brez tuje stevilke kupcev)
   2. slika + "Straps Support Your Knee Without Reducing Mobility" - pri nas slika levo, besedilo desno
   3. slika + "Gel Padding Helps Absorb Impact" - pri nas slika desno, besedilo levo
   4. slika + "Never Slips Off During Training" - pri nas slika levo, besedilo desno
   5. "Compression Supports Recovery" (brez slike na originalu) - pri nas besedilo levo, slika bocnega stabilizatorja desno (vsaka sekcija svoj vizual)
   6. Review highlights: 3 citati kupcev + ocena - pri nas 3 kartice z mnenji v vrsti
   7. mnenja kupcev (4182 reviews) - pri nas mnenja spodaj (auto_reviews/HR_kneewrap.php, brez tuje stevilke)
   8. pogoji trgovine - pri nas skupna sekcija NORIKS pogoji
 * BARVA ORIGINALA: #3c3c3c (crna in grafitno siva steznika ter crno-bela stran originala); svetel ton za --bg #f1f1f1
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
$wkw_img = get_template_directory_uri() . '/img/kneewrap/';
$wkw_i   = function ( $f ) use ( $wkw_img ) { return esc_url( $wkw_img . $f ); };
$wkw_svg = '<svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">';
?>
<div class="wkw">

<section class="wkw__s wkw__s--bg"><div class="wkw__v">
  <div class="wkw__kicker wkw__c">Trenirajte s povjerenjem</div>
  <h2 class="wkw__h2 wkw__c">Dodatna potpora koljenu <em>koja ostaje na mjestu</em></h2>
  <div class="wkw__pasica"><img src="<?php echo $wkw_i( 'noriks-kneewrap-prednosti.webp' ); ?>" alt="NORIKS KneeWrap: dvostruke trake, gel jastučić, puna pokretljivost, manje nelagode" loading="eager" decoding="async"></div>
  <div class="wkw__stolpca">
    <p class="wkw__p">Ako ne štitite koljena dok trenirate, žalit ćete godinama. Bezbroj sportaša svakodnevno mora pauzirati jer im nešto „pukne” na treningu i ozlijede se.</p>
    <p class="wkw__p">Zato tisuće sportaša danas koristi NORIKS KneeWrap – da treniraju samouvjereno, a da ih problemi s koljenom ne koče.</p>
  </div>
</div></section>

<section class="wkw__s"><div class="wkw__v wkw__dva">
  <div class="wkw__media"><img src="<?php echo $wkw_i( 'noriks-kneewrap-trake.webp' ); ?>" alt="Zatezanje trake NORIKS KneeWrap steznika ispod i iznad koljena" loading="eager" decoding="async"><span class="wkw__znacka">Dvostruke trake</span></div>
  <div>
    <div class="wkw__kicker">Stabilnost</div>
    <h2 class="wkw__h2">Trake podupiru koljeno <em>bez gubitka pokretljivosti</em></h2>
    <p class="wkw__p">Tajna NORIKS KneeWrap steznika je u tome što se obavija <strong>ispod, oko i iznad koljena</strong> – za dodatnu zaštitu iz svakog kuta, a da pritom ne gubite ništa od pokretljivosti.</p>
    <p class="wkw__p">Ta stabilnost pomaže spriječiti da se koljeno „uvrne prema unutra” ili naglo preuzme preveliki pritisak – što je jedan od glavnih uzroka ozljeda.</p>
    <p class="wkw__zak">Potpora iz svakog kuta – i puna pokretljivost.</p>
  </div>
</div></section>

<section class="wkw__s wkw__s--bg"><div class="wkw__v wkw__dva wkw__dva--rev">
  <div class="wkw__media"><img src="<?php echo $wkw_i( 'noriks-kneewrap-gel.webp' ); ?>" alt="Hrvanje na podu u NORIKS KneeWrap steznicima s gel jastučićem" loading="eager" decoding="async"><span class="wkw__znacka">Gel jastučić</span></div>
  <div>
    <div class="wkw__kicker">Zaštita od udaraca</div>
    <h2 class="wkw__h2">Gel jastučić <em>upija udarce</em></h2>
    <p class="wkw__p">Ako ste ikad udarili osjetljivim koljenom o pod ili vam je netko pao na njega, znate koliko taj zastoj frustrira dok se oporavljate.</p>
    <p class="wkw__p">Zato NORIKS KneeWrap ima <strong>gel jastučić koji upija udarce</strong> kad se valjate po podu ili ulazite u rušenje – a i dalje možete potpuno kleknuti na pete. Manje brinete da će neočekivani udarac ili nagli pritisak nešto izbaciti iz mjesta.</p>
    <p class="wkw__zak">Klečite, valjajte se i rušite – koljeno je zaštićeno.</p>
  </div>
</div></section>

<section class="wkw__s"><div class="wkw__v wkw__dva">
  <div class="wkw__media"><img src="<?php echo $wkw_i( 'noriks-kneewrap-ne-klizi.webp' ); ?>" alt="Muškarac u NORIKS KneeWrap steznicima na oba koljena" loading="eager" decoding="async"></div>
  <div>
    <div class="wkw__kicker">Ostaje na mjestu</div>
    <h2 class="wkw__h2">Nikad ne sklizne <em>tijekom treninga</em></h2>
    <p class="wkw__p">Većina steznika za koljeno usred treninga sklizne ili potpuno spadne. NORIKS KneeWrap ima <strong>gumeni rub s unutarnje strane</strong> i čvrste trake koje ga drže uz nogu.</p>
    <p class="wkw__p">Neće stalno kliziti kao drugi steznici i neće vas ometati na treningu jer ga morate popravljati.</p>
    <ul class="wkw__kv"><li>Gumeni rub protiv klizanja</li><li>Dvostruke trake za čvrst stisak</li><li>Stoji i kod skokova, udaraca i hrvanja</li></ul>
  </div>
</div></section>

<section class="wkw__s wkw__s--bg"><div class="wkw__v wkw__dva wkw__dva--rev">
  <div class="wkw__media"><img src="<?php echo $wkw_i( 'noriks-kneewrap-09-bocni-stabilizator.webp' ); ?>" alt="NORIKS KneeWrap steznik s bočnim stabilizatorom (opruga)" loading="eager" decoding="async"><span class="wkw__znacka">Kompresija</span></div>
  <div>
    <div class="wkw__kicker">Oporavak</div>
    <h2 class="wkw__h2">Kompresija <em>podupire oporavak</em></h2>
    <p class="wkw__p">Nelagoda koja dolazi s ozlijeđenim koljenom može vas danima nakon treninga držati ukočenima. NORIKS KneeWrap komprimira zglob i tako podupire zdravlje zgloba.</p>
    <p class="wkw__p">To pomaže smanjiti nelagodu u koljenu – zato mnogi sportaši nakon treninga osjete manje problema i manju ukočenost. Po želji ga uzmite s <strong>bočnim stabilizatorom</strong> za dodatnu stabilnost sa strane.</p>
    <div class="wkw__podaci">
      <div><span class="wkw__pi"><?php echo $wkw_svg; ?><path d="M8 4h8M8 20h8M9 4c-2 5-2 11 0 16M15 4c2 5 2 11 0 16"/></svg></span><strong>Kompresija</strong><small>čvrsto oko zgloba</small></div>
      <div><span class="wkw__pi"><?php echo $wkw_svg; ?><path d="M12 3v18M8 6c2 1 6 1 8 0M8 12c2 1 6 1 8 0M8 18c2 1 6 1 8 0"/></svg></span><strong>Stabilizator</strong><small>opcija s bočnom oprugom</small></div>
      <div><span class="wkw__pi"><?php echo $wkw_svg; ?><path d="M3 12h4l3-8 4 16 3-8h4"/></svg></span><strong>XS do XXXL</strong><small>prema opsegu bedra</small></div>
    </div>
  </div>
</div></section>

<section class="wkw__s"><div class="wkw__v">
  <div class="wkw__kicker wkw__c">Iz recenzija</div>
  <h2 class="wkw__h2 wkw__c">Što kažu <em>sportaši koji ga nose</em></h2>
  <p class="wkw__p wkw__c"><span class="wkw__ocj"><strong>4,8</strong> <span class="wkw__zv">★★★★★</span> na temelju 1.081 recenzije</span></p>
  <div class="wkw__mn">
    <div class="wkw__mk"><span class="wkw__nav">“</span><p>Koljeno se osjeća ponovno mladim, odlična potpora. I služba za korisnike je super. Jako sam zadovoljan.</p><div class="wkw__mh"><span class="wkw__av">G</span><div><strong>Goran M.</strong><span>provjereni kupac</span></div><span class="wkw__zv">★★★★★</span></div></div>
    <div class="wkw__mk"><span class="wkw__nav">“</span><p>Steznici su fantastični, jastučić za čašicu je dodatna zaštita – posebno meni kao težem, starijem hrvaču.</p><div class="wkw__mh"><span class="wkw__av">K</span><div><strong>Kristijan J.</strong><span>provjereni kupac</span></div><span class="wkw__zv">★★★★★</span></div></div>
    <div class="wkw__mk"><span class="wkw__nav">“</span><p>Koljena se u njima definitivno osjećaju sigurno, kvaliteta je izvrsna, a dostava je bila brza.</p><div class="wkw__mh"><span class="wkw__av">S</span><div><strong>Saša L.</strong><span>provjereni kupac</span></div><span class="wkw__zv">★★★★★</span></div></div>
  </div>
</div></section>

<section class="wkw__s wkw__s--bg npg-s"><?php $npg = array( 'izdelek' => 'NORIKS KneeWrap', 'barva' => '#3c3c3c' ); include __DIR__ . '/noriks-pogoji.php'; ?></section>
</div>
<style>
.wkw{color:#1b1b1b;font-family:inherit}
.wkw__s{padding:72px 0;background:#fff}.wkw__s.wkw__s--bg{background:#f1f1f1}
.wkw__v{width:100%;max-width:1240px;margin:0 auto;padding:0 24px;box-sizing:border-box}
.wkw__c{text-align:center}
.wkw__kicker{font-size:13px;letter-spacing:1.8px;text-transform:uppercase;color:#3c3c3c;margin:0 0 8px;font-weight:700}
.wkw__kicker::before{content:"";display:inline-block;width:22px;height:2px;background:#3c3c3c;vertical-align:middle;margin:-2px 10px 0 0;border-radius:2px}
.wkw__h2{font-size:clamp(24px,3vw,34px);font-weight:800;line-height:1.2;margin:0 0 18px;color:#1b1b1b}.wkw__h2 em{font-style:italic;color:#5a5a5a}
.wkw__p{font-size:15.5px;line-height:1.65;color:#3a3a3a;margin:0 0 14px}
.wkw__zak{font-size:16px;font-weight:800;line-height:1.5;margin:18px 0 0;border-left:3px solid #3c3c3c;padding-left:14px}
.wkw__pasica{margin:8px auto 26px;max-width:880px}.wkw__pasica img{width:100%;height:auto;display:block}
.wkw__stolpca{display:grid;grid-template-columns:1fr 1fr;gap:32px}
.wkw__dva{display:grid;grid-template-columns:1fr 1fr;gap:56px;align-items:center}.wkw__dva--rev>div:first-child{order:2}
.wkw__media{position:relative;border-radius:16px;overflow:hidden;box-shadow:0 14px 34px rgba(0,0,0,.16);aspect-ratio:4/5;background:#e3e3e3}
.wkw__media img{width:100%;height:100%;object-fit:cover;display:block}
.wkw__znacka{position:absolute;left:16px;top:16px;background:#fff;color:#1b1b1b;font-size:13px;font-weight:800;letter-spacing:1px;text-transform:uppercase;padding:7px 12px;border-radius:20px;box-shadow:0 4px 12px rgba(0,0,0,.15)}
.wkw__kv{list-style:none;margin:4px 0 0;padding:0}.wkw__kv li{position:relative;padding-left:30px;margin:0 0 10px;font-size:15px;line-height:1.5;list-style:none}
.wkw__kv li::before{content:"\2713";position:absolute;left:0;top:1px;width:20px;height:20px;border-radius:50%;background:#3c3c3c;color:#fff;font-size:12px;display:flex;align-items:center;justify-content:center}
.wkw__pi{width:44px;height:44px;border-radius:50%;background:#e4e4e4;color:#2b2b2b;display:flex;align-items:center;justify-content:center}
.wkw__podaci{display:grid;grid-template-columns:repeat(3,1fr);gap:12px;margin:8px 0 4px}
.wkw__podaci>div{background:#fff;border-radius:14px;padding:16px 10px;text-align:center;display:flex;flex-direction:column;align-items:center;gap:4px;box-shadow:0 4px 14px rgba(0,0,0,.07)}
.wkw__podaci strong{font-size:15px}.wkw__podaci small{font-size:13px;color:#5d5d5d}
.wkw__ocj{display:inline-flex;align-items:center;gap:8px;background:#fff;border-radius:30px;padding:8px 18px;font-size:14.5px;box-shadow:0 4px 14px rgba(0,0,0,.08)}
.wkw__ocj strong{font-size:22px;color:#1b1b1b}.wkw__zv{color:#e0a33c;letter-spacing:2px;font-size:15px}
.wkw__mn{display:grid;grid-template-columns:repeat(3,1fr);gap:24px;margin-top:24px;align-items:stretch}
.wkw__mk{position:relative;background:#f7f7f7;border-radius:16px;padding:30px 26px 22px;box-shadow:0 8px 24px rgba(0,0,0,.08);display:flex;flex-direction:column;transition:transform .2s,box-shadow .2s}
.wkw__mk:hover{transform:translateY(-3px);box-shadow:0 14px 30px rgba(0,0,0,.13)}
.wkw__nav{font-size:56px;line-height:.6;color:#bdbdbd;font-weight:800;font-family:Georgia,serif}
.wkw__mk p{margin:10px 0 18px;font-size:16px;line-height:1.6;color:#2b2b2b;flex:1}
.wkw__mh{display:flex;align-items:center;gap:12px}
.wkw__av{width:44px;height:44px;border-radius:50%;background:#2b2b2b;color:#fff;font-weight:800;display:flex;align-items:center;justify-content:center;flex:0 0 44px}
.wkw__mh strong{display:block;font-size:15px}.wkw__mh span{font-size:13px;color:#6b6b6b}.wkw__mh .wkw__zv{margin-left:auto;font-size:13px;color:#e0a33c}
@media (max-width:767px){
  .wkw__s{padding:48px 0}.wkw__v{padding:0 16px}
  .wkw__stolpca{grid-template-columns:1fr;gap:0}
  .wkw__dva{grid-template-columns:1fr;gap:26px}.wkw__dva--rev>div:first-child{order:0}
  .wkw__podaci{gap:8px}.wkw__podaci>div{padding:12px 6px}.wkw__podaci strong{font-size:14px}
  .wkw__mn{grid-template-columns:1fr;gap:14px}
}
</style>
