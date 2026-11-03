<?php
/**
 * NORIKS CarPlay Air — bezicni adapter za CarPlay i Android Auto: why sekcije po strukturi originala
 * (shopevotech.com/products/wireless-carplay-air).
 *
 * (opis pod gumbom, od vrha navzdol)
 * STRUKTURA ORIGINALA:
   1. trak dokazov: 3 stevilke v vrsti (ocena 4.8/5, stevilo kupcev, 30 dni za preizkus) - pri nas 3 kartice z ikonami (4,8 / 1.081 recenzij, 120.000 kupaca, 30 dana) - brez tujih stevilk
   2. Compatibility: slika levo, tekst desno (naslov, test v 10 sekundah, 3 kljukice) - pri nas slika levo (lokalizirana), besedilo desno
   3. Reviews "What drivers say after a month": 5 kartic s fotografijo, citatom, imenom in avtom - pri nas 5 kartic (3 + 2 sredinsko, mobilno karusel), prevedeni citati, hrvaska imena
   4. Features: 3 bloki slika + besedilo (plug in once / plug and play / fits almost any car) - pri nas 3 vrstice cik-cak (slika levo, desno, levo)
   5. Stats: naslov + 3 velike odstotne stevilke (anketa kupcev 30 dni po nakupu) - pri nas 3 kartice z ikonami in velikimi stevilkami (brez tuje stevilke anketiranih)
   6. Compare your options: primerjalna tabela 4 stolpci x 9 vrstic - pri nas <table> z istimi vrsticami in kljukicami
   7. Questions (7 vprasanj) - pri nas v FAQ spodaj (auto_reviews/FAQ_HR_adapter.php)
   8. pogoji trgovine - pri nas skupna sekcija NORIKS pogoji
 * BARVA ORIGINALA: #1d3a7a (temno modra iz galerije in kartic originala); svetel ton za --bg #eef2fa
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
$wad_img = get_template_directory_uri() . '/img/adapter/';
$wad_i   = function ( $f ) use ( $wad_img ) { return esc_url( $wad_img . $f ); };
$wad_svg = '<svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">';
$wad_da  = '<span class="wad__da" aria-label="da"><svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round"><polyline points="4 12 9.5 17.5 20 7"/></svg></span>';
$wad_ne  = '<span class="wad__ne" aria-label="ne"><svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="currentColor" stroke-width="2.6" stroke-linecap="round"><path d="M6.5 6.5l11 11M17.5 6.5l-11 11"/></svg></span>';
$wad_mn  = array(
	array( 'noriks-adapter-kupac-1.webp', 'Zimi bih ujutro sjedio u autu i skidao rukavicu samo da bih u mobitel nagurao smrznuti kabel. Sad mobitel uopće ne vadim iz jakne. Karta i moja glazba su upaljeni prije nego što zakopčam pojas.', 'Robert D.', 'pick-up, 2019.' ),
	array( 'noriks-adapter-kupac-2.webp', 'Imam 68 godina i nisam neki ljubitelj tehnike. Noću bez naočala nikad nisam mogao naći onaj mali priključak. Sin mi ga je postavio za dvije minute i sad samo sjednem u auto, a sve je već na zaslonu. Takvu tehniku volim.', 'Vlado M.', 'limuzina, 2022.' ),
	array( 'noriks-adapter-kupac-3.webp', 'Za kratke vožnje nikad se nisam gnjavio s kabelom, pa pola vremena nisam imao ni glazbu ni kartu. Sad se spoji na svakoj vožnji, i na šest minuta do škole. Iskreno, najbolje potrošen novac za ovaj auto.', 'Luka S.', 'SUV, 2021.' ),
	array( 'noriks-adapter-kupac-4.webp', 'Vozim ručni mjenjač i kabel mi je stalno bio zapetljan oko ručice. Ne jednom mi je povukao mobitel sa sjedala. Utaknuo sam ovo, sakrio i zaboravio da postoji. Manji je od ključa od auta.', 'Tomislav H.', 'sportski auto, 2017.' ),
	array( 'noriks-adapter-kupac-5.webp', 'Kabel mi je bio prekratak pa mi je pri svakom kočenju mobitel kliznuo u procjep pokraj sjedala. Pecanje na semaforu postajalo je opasno. Otkad imam ovo, nijednom mi nije tamo upao.', 'Dario R.', 'limuzina, 2018.' ),
);
$wad_tab = array(
	array( 'Bežični CarPlay', 1, 0, 1, 1 ),
	array( 'Spaja se svaki put', 1, 0, 0, 0 ),
	array( 'Bez kašnjenja', 1, 1, 0, 0 ),
	array( 'Puna kvaliteta zvuka', 1, 1, 0, 0 ),
	array( 'Postavljanje u sekundi', 1, 1, 0, 0 ),
	array( 'Bez aplikacije', 1, 1, 0, 0 ),
	array( 'iPhone i Android', 1, 1, 0, 1 ),
	array( 'USB-C adapter u paketu', 1, 0, 0, 0 ),
	array( 'Za 800+ modela auta', 1, 1, 0, 0 ),
);
?>
<div class="wad">

<section class="wad__s wad__s--bg"><div class="wad__v">
  <div class="wad__dok">
    <div class="wad__dk"><span class="wad__ik"><?php echo $wad_svg; ?><path d="M12 3l2.7 5.6 6.1.9-4.4 4.3 1 6.1L12 17l-5.4 2.9 1-6.1L3.2 9.5l6.1-.9z"/></svg></span><div><strong class="wad__br">4,8 / 5</strong><span>prosječna ocjena iz 1.081 recenzije</span></div></div>
    <div class="wad__dk"><span class="wad__ik"><?php echo $wad_svg; ?><circle cx="9" cy="8" r="3.2"/><path d="M3 20c0-3.3 2.7-6 6-6s6 2.7 6 6"/><circle cx="17" cy="9" r="2.6"/><path d="M15.5 14.2c3 .2 5.5 2.6 5.5 5.8"/></svg></span><div><strong class="wad__br">120.000+</strong><span>zadovoljnih NORIKS kupaca</span></div></div>
    <div class="wad__dk"><span class="wad__ik"><?php echo $wad_svg; ?><rect x="3" y="5" width="18" height="16" rx="2"/><path d="M3 10h18M8 3v4M16 3v4"/><path d="M9 15l2 2 4-4"/></svg></span><div><strong class="wad__br">30 dana</strong><span>da ga isprobate u svom autu</span></div></div>
  </div>
</div></section>

<section class="wad__s"><div class="wad__v wad__dva">
  <div class="wad__media wad__media--sv"><img src="<?php echo $wad_i( 'noriks-adapter-kompatibilnost.webp' ); ?>" alt="NORIKS CarPlay Air je kompatibilan s tvorničkim CarPlayem i Android Autom s kabelom" loading="eager" decoding="async"></div>
  <div>
    <div class="wad__kicker">Kompatibilnost</div>
    <h2 class="wad__h2">Hoće li raditi <em>u vašem autu?</em></h2>
    <p class="wad__p">Ako vaš auto ima CarPlay ili Android Auto <strong>s kabelom</strong>, odgovor je da. NORIKS CarPlay Air ga pretvara u bežični – bez novog radija, bez ugradnje i bez aplikacije.</p>
    <div class="wad__test">
      <span class="wad__ik wad__ik--m"><?php echo $wad_svg; ?><circle cx="12" cy="13" r="8"/><path d="M12 9v4l2.5 2"/><path d="M10 2h4"/></svg></span>
      <div><strong>Test od 10 sekundi</strong><p>Spojite mobitel kabelom. Ako se pojavi CarPlay ili Android Auto, NORIKS CarPlay Air radi u vašem autu.</p></div>
    </div>
    <ul class="wad__kv"><li>Auti s tvorničkim CarPlayem ili Android Autom</li><li>Svaki iPhone i Android mobitel</li><li>Utaknite, uparite jednom – gotovo</li></ul>
  </div>
</div></section>

<section class="wad__s wad__s--bg"><div class="wad__v">
  <div class="wad__kicker wad__c">Iz recenzija</div>
  <h2 class="wad__h2 wad__c">Što vozači kažu <em>nakon mjesec dana</em></h2>
  <p class="wad__c"><span class="wad__ocj"><strong>4,8</strong> <span class="wad__zv">★★★★★</span> od 1.081 provjerenog kupca</span></p>
  <div class="wad__mn">
    <?php foreach ( $wad_mn as $m ) : ?>
    <div class="wad__mk">
      <div class="wad__mf"><img src="<?php echo $wad_i( $m[0] ); ?>" alt="<?php echo esc_attr( 'Kupac ' . $m[2] . ' u autu' ); ?>" loading="eager" decoding="async"></div>
      <div class="wad__mt">
        <span class="wad__zv">★★★★★</span>
        <p>„<?php echo esc_html( $m[1] ); ?>”</p>
        <div class="wad__mh"><strong><?php echo esc_html( $m[2] ); ?></strong><span><?php echo esc_html( $m[3] ); ?></span><span class="wad__pr"><?php echo $wad_da; ?> provjereno</span></div>
      </div>
    </div>
    <?php endforeach; ?>
  </div>
</div></section>

<section class="wad__s"><div class="wad__v">
  <div class="wad__dva wad__red">
    <div class="wad__media"><img src="<?php echo $wad_i( 'noriks-adapter-u-autu-nocu.webp' ); ?>" alt="NORIKS CarPlay Air utaknut u USB priključak u autu" loading="eager" decoding="async"><span class="wad__znacka">Jednom utaknete</span></div>
    <div>
      <div class="wad__kicker">Utaknite jednom</div>
      <h2 class="wad__h2">Više nikad <em>ne dirate kabel</em></h2>
      <p class="wad__p">Utaknite ga u USB priključak koji koristite za CarPlay i u Bluetooth popisu na mobitelu dodirnite <strong>SmartBox</strong>. Od tada se spaja čim sjednete u auto – kao da vas auto prepoznaje.</p>
      <p class="wad__p">Mobitel ostaje u džepu ili torbi, a karta, glazba i pozivi su na zaslonu prije nego što krenete.</p>
      <ul class="wad__kv"><li>Spaja se svaki put kad uđete u auto</li><li>Nema više kabela po autu</li><li>Mobitel ostaje u džepu</li></ul>
    </div>
  </div>
  <div class="wad__dva wad__dva--rev wad__red">
    <div class="wad__media"><img src="<?php echo $wad_i( 'noriks-adapter-pozivi-karta-glazba.webp' ); ?>" alt="Pozivi, navigacija i glazba bežično na zaslonu auta s NORIKS CarPlay Air" loading="eager" decoding="async"><span class="wad__znacka">Bez kašnjenja</span></div>
    <div>
      <div class="wad__kicker">Utakni i vozi</div>
      <h2 class="wad__h2">Bežično <em>u nekoliko sekundi</em></h2>
      <p class="wad__p">Bez aplikacije i bez izbornika za postavljanje. Glazba, karte, pozivi, poruke i WhatsApp rade bežično i bez kašnjenja – na iPhoneu i na Androidu.</p>
      <p class="wad__p">Zvuk je jednako dobar kao preko kabela, a sve upravljate i dalje dodirom zaslona ili tipkama na upravljaču.</p>
      <div class="wad__cip">
        <div><span class="wad__ik wad__ik--s"><?php echo $wad_svg; ?><path d="M13 2L4 14h7l-1 8 9-12h-7z"/></svg></span><strong>Bez kašnjenja</strong></div>
        <div><span class="wad__ik wad__ik--s"><?php echo $wad_svg; ?><path d="M9 18V6l11-2v12"/><circle cx="6" cy="18" r="3"/><circle cx="17" cy="16" r="3"/></svg></span><strong>Puni zvuk</strong></div>
        <div><span class="wad__ik wad__ik--s"><?php echo $wad_svg; ?><rect x="6" y="2" width="12" height="20" rx="2.5"/><path d="M11 18h2"/></svg></span><strong>iPhone i Android</strong></div>
      </div>
    </div>
  </div>
  <div class="wad__dva wad__red">
    <div class="wad__media"><img src="<?php echo $wad_i( 'noriks-adapter-bez-kabela.webp' ); ?>" alt="Usporedba: NORIKS CarPlay Air bez kabela i zapetljani kabeli" loading="eager" decoding="async"><span class="wad__znacka">USB-A + USB-C</span></div>
    <div>
      <div class="wad__kicker">Za gotovo svaki auto</div>
      <h2 class="wad__h2">USB-C adapter <em>u paketu</em></h2>
      <p class="wad__p">Tanki adapter debljine 10 mm za USB-A priključak, a u paketu je i USB-C adapter za novije aute. Radi u više od 800 modela automobila.</p>
      <p class="wad__p">Dimenzije su samo 40 × 27 × 10 mm – manji je od ključa od auta, pa ga utaknete, sakrijete i zaboravite da postoji.</p>
      <p class="wad__zak">U paketu: CarPlay Air adapter, USB-C adapter i kratke upute.</p>
    </div>
  </div>
</div></section>

<section class="wad__s wad__s--bg"><div class="wad__v">
  <div class="wad__kicker wad__c">Ankete kupaca</div>
  <h2 class="wad__h2 wad__c">Nadogradnja koju <em>vozači stvarno primijete</em></h2>
  <p class="wad__p wad__c">Pitali smo vozače koji su s kabela prešli na bežični adapter što se zapravo promijenilo – trideset dana nakon kupnje.</p>
  <div class="wad__stat">
    <div class="wad__sk"><span class="wad__ik"><?php echo $wad_svg; ?><path d="M4 12h6M14 12h6"/><path d="M10 9v6M14 9v6"/><path d="M3 5l18 14"/></svg></span><strong>94 %</strong><span>trajno se riješilo CarPlay kabela</span></div>
    <div class="wad__sk"><span class="wad__ik"><?php echo $wad_svg; ?><path d="M5 12.5a10 10 0 0 1 14 0"/><path d="M8.5 16a5 5 0 0 1 7 0"/><circle cx="12" cy="19.5" r="1"/><path d="M2 9a14.5 14.5 0 0 1 20 0"/></svg></span><strong>96 %</strong><span>kaže da se spoji svaki put kad uđu u auto</span></div>
    <div class="wad__sk"><span class="wad__ik"><?php echo $wad_svg; ?><path d="M7 11v9H4v-9z"/><path d="M7 11l4-8c1.7 0 2.7 1.2 2.4 2.8L13 9h5.5a2 2 0 0 1 2 2.4l-1.4 7A2 2 0 0 1 17.1 20H7"/></svg></span><strong>97 %</strong><span>kupilo bi ga ponovno</span></div>
  </div>
</div></section>

<section class="wad__s"><div class="wad__v">
  <div class="wad__kicker wad__c">Usporedba</div>
  <h2 class="wad__h2 wad__c">Usporedite <em>svoje mogućnosti</em></h2>
  <div class="wad__tw">
    <table class="wad__tab">
      <thead><tr><th></th><th class="wad__mi">NORIKS CarPlay Air</th><th>Kabel</th><th>Jeftini adapter</th><th>Streaming kutija</th></tr></thead>
      <tbody>
      <?php foreach ( $wad_tab as $r ) : ?>
        <tr><td><?php echo esc_html( $r[0] ); ?></td><?php for ( $c = 1; $c <= 4; $c++ ) : ?><td class="<?php echo 1 === $c ? 'wad__mi' : ''; ?>"><?php echo $r[ $c ] ? $wad_da : $wad_ne; ?></td><?php endfor; ?></tr>
      <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</div></section>

<section class="wad__s wad__s--bg npg-s"><?php $npg = array( 'izdelek' => 'NORIKS CarPlay Air', 'barva' => '#1d3a7a' ); include __DIR__ . '/noriks-pogoji.php'; ?></section>
</div>
<style>
.wad{color:#14203a;font-family:inherit}
.wad__s{padding:72px 0;background:#fff}.wad__s.wad__s--bg{background:#eef2fa}
.wad__v{width:100%;max-width:1240px;margin:0 auto;padding:0 24px;box-sizing:border-box}
.wad__c{text-align:center}
.wad__kicker{font-size:13px;letter-spacing:1.8px;text-transform:uppercase;color:#1d3a7a;margin:0 0 8px;font-weight:700}
.wad__kicker::before{content:"";display:inline-block;width:22px;height:2px;background:#1d3a7a;vertical-align:middle;margin:-2px 10px 0 0;border-radius:2px}
.wad__h2{font-size:clamp(24px,3vw,34px);font-weight:800;line-height:1.2;margin:0 0 16px;color:#14203a}.wad__h2 em{font-style:italic;color:#2f56a8}
.wad__p{font-size:15.5px;line-height:1.65;color:#36425c;margin:0 0 14px}
.wad__zak{font-size:15.5px;font-weight:800;line-height:1.5;margin:16px 0 0;border-left:3px solid #1d3a7a;padding-left:14px}
.wad__ik{width:52px;height:52px;border-radius:50%;background:#dbe4f5;color:#1d3a7a;display:flex;align-items:center;justify-content:center;flex:0 0 52px}
.wad__ik--m{width:46px;height:46px;flex-basis:46px}.wad__ik--s{width:40px;height:40px;flex-basis:40px}.wad__ik--s svg{width:20px;height:20px}
.wad__dok{display:grid;grid-template-columns:repeat(3,1fr);gap:22px}
.wad__dk{display:flex;align-items:center;gap:16px;background:#fff;border-radius:16px;padding:24px 26px;box-shadow:0 8px 22px rgba(29,58,122,.09);transition:transform .2s,box-shadow .2s}
.wad__dk:hover,.wad__sk:hover,.wad__mk:hover{transform:translateY(-3px);box-shadow:0 14px 30px rgba(29,58,122,.15)}
.wad__br{display:block;font-size:26px;font-weight:800;color:#1d3a7a;line-height:1.1}.wad__dk span:not(.wad__ik){font-size:14px;color:#56627a}
.wad__dva{display:grid;grid-template-columns:1fr 1fr;gap:56px;align-items:center}.wad__dva--rev>div:first-child{order:2}
.wad__red+.wad__red{margin-top:64px}
.wad__media{position:relative;border-radius:16px;overflow:hidden;box-shadow:0 14px 34px rgba(20,32,58,.16);aspect-ratio:4/5;background:#dfe6f3}
.wad__media img{width:100%;height:100%;object-fit:cover;display:block}
.wad__media--sv{aspect-ratio:auto;background:#f1f4f9}.wad__media--sv img{height:auto;object-fit:contain}
.wad__znacka{position:absolute;left:16px;top:16px;background:#fff;color:#14203a;font-size:13px;font-weight:800;letter-spacing:1px;text-transform:uppercase;padding:7px 12px;border-radius:20px;box-shadow:0 4px 12px rgba(0,0,0,.15)}
.wad__test{display:flex;gap:14px;align-items:flex-start;background:#eef2fa;border-radius:14px;padding:16px 18px;margin:4px 0 18px}
.wad__test strong{font-size:15.5px}.wad__test p{margin:4px 0 0;font-size:14.5px;line-height:1.55;color:#36425c}
.wad__kv{list-style:none;margin:4px 0 0;padding:0}.wad__kv li{position:relative;padding-left:30px;margin:0 0 10px;font-size:15px;line-height:1.5;list-style:none}
.wad__kv li::before{content:"\2713";position:absolute;left:0;top:1px;width:20px;height:20px;border-radius:50%;background:#1d3a7a;color:#fff;font-size:12px;display:flex;align-items:center;justify-content:center}
.wad__cip{display:grid;grid-template-columns:repeat(3,1fr);gap:10px;margin-top:6px}
.wad__cip>div{display:flex;flex-direction:column;align-items:center;gap:6px;text-align:center;background:#eef2fa;border-radius:14px;padding:14px 8px}.wad__cip strong{font-size:14px}
.wad__ocj{display:inline-flex;align-items:center;gap:8px;background:#fff;border-radius:30px;padding:8px 18px;font-size:14.5px;box-shadow:0 4px 14px rgba(29,58,122,.08)}
.wad__ocj strong{font-size:22px}.wad__zv{color:#e0a33c;letter-spacing:2px;font-size:15px}
.wad__mn{display:flex;flex-wrap:wrap;justify-content:center;gap:24px;margin-top:26px}
.wad__mk{flex:0 1 calc((100% - 48px)/3);min-width:300px;background:#fff;border-radius:16px;overflow:hidden;box-shadow:0 8px 24px rgba(29,58,122,.10);display:flex;flex-direction:column;transition:transform .2s,box-shadow .2s;box-sizing:border-box}
.wad__mf{aspect-ratio:4/3;overflow:hidden}.wad__mf img{width:100%;height:100%;object-fit:cover;display:block}
.wad__mt{padding:20px 22px 22px;display:flex;flex-direction:column;flex:1}
.wad__mt p{margin:8px 0 16px;font-size:15.5px;line-height:1.55;color:#2a344a;flex:1}
.wad__mh{display:flex;flex-wrap:wrap;align-items:center;gap:4px 10px}.wad__mh strong{font-size:15px}.wad__mh span{font-size:13px;color:#66718a}
.wad__pr{margin-left:auto;display:inline-flex;align-items:center;gap:5px;color:#1f7a4a!important;font-weight:700}
.wad__stat{display:grid;grid-template-columns:repeat(3,1fr);gap:22px;margin-top:22px}
.wad__sk{background:#fff;border-radius:16px;padding:28px 24px;text-align:center;display:flex;flex-direction:column;align-items:center;gap:8px;box-shadow:0 8px 22px rgba(29,58,122,.09);transition:transform .2s,box-shadow .2s}
.wad__sk strong{font-size:44px;line-height:1;color:#1d3a7a;font-weight:800}.wad__sk span:not(.wad__ik){font-size:15px;color:#3d4963}
.wad__tw{overflow-x:auto;-webkit-overflow-scrolling:touch;margin-top:20px;border-radius:16px;box-shadow:0 8px 24px rgba(29,58,122,.10)}
.wad__tab{width:100%;border-collapse:collapse;background:#fff;min-width:640px}
.wad__tab th,.wad__tab td{padding:14px 12px;text-align:center;font-size:15px;border-bottom:1px solid #e6ebf4}
.wad__tab th{font-size:14px;font-weight:800;color:#14203a;background:#f5f7fc}
.wad__tab td:first-child,.wad__tab th:first-child{text-align:left;font-weight:700;padding-left:22px}
.wad__tab .wad__mi{background:#e3eaf8}.wad__tab th.wad__mi{background:#1d3a7a;color:#fff}
.wad__tab tr:last-child td{border-bottom:0}
.wad__da,.wad__ne{display:inline-flex;align-items:center;justify-content:center;width:26px;height:26px;border-radius:50%}
.wad__da{background:#1d3a7a;color:#fff}.wad__ne{background:#f1d9d9;color:#b23b3b}
.wad__pr .wad__da{width:18px;height:18px;background:#1f7a4a}.wad__pr .wad__da svg{width:11px;height:11px}
@media (max-width:1024px){.wad__mk{flex-basis:calc((100% - 24px)/2)}}
@media (max-width:767px){
  .wad__s{padding:48px 0}.wad__v{padding:0 16px}
  .wad__dok,.wad__stat{grid-template-columns:1fr;gap:12px}
  .wad__dva{grid-template-columns:1fr;gap:26px}.wad__dva--rev>div:first-child{order:0}.wad__red+.wad__red{margin-top:48px}
  .wad__mn{flex-wrap:nowrap;justify-content:flex-start;overflow-x:auto;scroll-snap-type:x mandatory;gap:14px;padding-bottom:10px;-webkit-overflow-scrolling:touch}
  .wad__mk{flex:0 0 86%;min-width:0;scroll-snap-align:start}
  .wad__cip{gap:8px}.wad__cip strong{font-size:13px}
  .wad__sk strong{font-size:38px}
}
</style>
