<?php
/**
 * NORIKS AutoLock — kozni remen bez rupa s automatskom kopcom: why sekcije po strukturi originala (vittelo.com/products/vittelo-belt).
 *
 * STRUKTURA ORIGINALA:
   1. naslov + podnaslov sredinsko, pod tem 2 prednosti z ikono levo, drsnik primerjave star remen / nov remen (oval) na sredini, 2 prednosti z ikono desno - pri nas enako (drsnik primerjave z istima slikama originala); prednost "10 Year warranty" zamenjana z izdrzljivostjo (tuje jamstvo)
   2. besedilo levo (crna podlaga), animacija desno: Easy on. Easy off. Perfect fit every time (samozaporna kopca, hitro sproscanje) - pri nas slika+besedilo z videom originala (gif -> mp4); stran po pravilu cik-cak
   3. animacija levo (poklon skatla, roke v rokavicah), besedilo desno: Give the gift he'll actually use - pri nas slika+besedilo z videom originala, znamka na skatli zamenjana z NORIKS
   4. trak 4 ikon v vrsti (Premium Leather, Perfect Fit, Easy Sizing, No Stretched Holes) - pri nas trak 4 prednosti z ikonami
   5. Customer Reviews: mreza mnenj s fotografijami kupcev - pri nas 3 kartice mnenj s fotografijami kupcev; tuja ocena / stevilo mnenj, negativna mnenja in omembe tuje znamke izpuscene
   6. Related products (You may also like) - IZPUSCENO: drugi izdelki tuje trgovine
   7. FAQ 6 vprasanj - pri nas FAQ v sekciji mnenj (Informacije o proizvodu)
   8. 4 ikone (Free shipping, Easy to Return, Fast support, Premium Quality Guarantee) - pri nas skupna sekcija NORIKS pogoji na koncu
 * BARVA ORIGINALA: #6b4a2f (rjava naravne koze - varianta Brown in topli toni fotografij; original sicer crno-bel); svetel ton za --bg #f1ebe5, akcent #6b4a2f
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
$wsr_img = get_template_directory_uri() . '/img/ratchet/';
$wsr_svg = '<svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">';
?>
<div class="wsratchet">

<section class="wsratchet__s wsratchet__s--bg"><div class="wsratchet__v">
  <div class="wsratchet__kicker wsratchet__c">Bez rupa · prava koža</div>
  <h2 class="wsratchet__h2 wsratchet__c">Posljednji remen koji će vam <em>ikada trebati</em></h2>
  <p class="wsratchet__p wsratchet__c wsratchet__uvod">Zaboravite izlizane remene i razvučene rupe. NORIKS AutoLock je remen od prave kože bez ijedne rupe – s automatskom kopčom koja se zaključa točno na vašoj mjeri. Izdržljiv, uredan i napravljen za muškarca koji ga nosi svaki dan.</p>
  <div class="wsratchet__sred">
    <div class="wsratchet__sc">
      <div class="wsratchet__sf"><span class="wsratchet__ik"><?php echo $wsr_svg; ?><path d="M12 3l7.5 3v5.5c0 4.6-3.2 8.2-7.5 9.5-4.3-1.3-7.5-4.9-7.5-9.5V6z"/><path d="M8.6 12.2l2.4 2.4 4.4-4.6"/></svg></span><strong>Napravljen da traje</strong><p>Stari remen se s vremenom izliže, a rupe se razvuku i popucaju. Ovaj nema rupa koje bi se trošile – koža ostaje lijepa i uz svakodnevno nošenje, a s vremenom dobiva samo još ljepši izgled.</p></div>
      <div class="wsratchet__sf"><span class="wsratchet__ik"><?php echo $wsr_svg; ?><circle cx="12" cy="12" r="8.5"/><path d="M12 7.5V12l3 2"/></svg></span><strong>Spreman za svaki dan</strong><p>Od radnog dana do vikenda: remen sigurno drži, udoban je cijeli dan i uredno izgleda – dodatak koji ćete uzimati svako jutro.</p></div>
    </div>
    <div class="wsratchet__sm">
      <div class="wsratchet__cmp" style="--poz:50%">
        <img class="wsratchet__cmp-a" src="<?php echo esc_url( $wsr_img . 'noriks-ratchet-novi-remen.webp' ); ?>" alt="Novi remen bez rupa s automatskom kopčom" loading="eager" decoding="async">
        <div class="wsratchet__cmp-b"><img src="<?php echo esc_url( $wsr_img . 'noriks-ratchet-stari-remen.webp' ); ?>" alt="Stari kožni remen s razvučenim rupama" loading="eager" decoding="async"></div>
        <span class="wsratchet__cmp-l" aria-hidden="true"></span>
        <span class="wsratchet__cmp-r" aria-hidden="true">&#8249; &#8250;</span>
        <span class="wsratchet__cmp-z wsratchet__cmp-z--l">Prije</span><span class="wsratchet__cmp-z wsratchet__cmp-z--d">Poslije</span>
        <input class="wsratchet__cmp-i" type="range" min="0" max="100" value="50" aria-label="Usporedba starog i novog remena">
      </div>
    </div>
    <div class="wsratchet__sc">
      <div class="wsratchet__sf"><span class="wsratchet__ik"><?php echo $wsr_svg; ?><path d="M3 9h18v6H3z"/><path d="M7 9v3M11 9v3M15 9v3M19 9v3"/></svg></span><strong>Savršeno pristajanje</strong><p>Podesiv i promišljeno napravljen: remen pristaje točno na vašu mjeru, udoban je cijeli dan, a pritom sigurno drži i izgleda uredno.</p></div>
      <div class="wsratchet__sf"><span class="wsratchet__ik"><?php echo $wsr_svg; ?><path d="M12 3l2.6 5.3 5.9.9-4.2 4.1 1 5.8L12 16.4l-5.3 2.7 1-5.8-4.2-4.1 5.9-.9z"/></svg></span><strong>Elegantan uz sve</strong><p>Od poslovnog sastanka do opuštenog vikenda – remen sigurno drži i podiže cijeli izgled klasičnim, bezvremenskim šarmom.</p></div>
    </div>
  </div>
  <p class="wsratchet__zak">Povucite klizač: s lijeve strane stari remen s rupama, s desne NORIKS AutoLock.</p>
</div></section>

<section class="wsratchet__s"><div class="wsratchet__v wsratchet__dva">
  <div class="wsratchet__media"><video src="<?php echo esc_url( $wsr_img . 'noriks-ratchet-nosenje-video.mp4' ); ?>" poster="<?php echo esc_url( $wsr_img . 'noriks-ratchet-nosenje-video.jpg' ); ?>" autoplay muted loop playsinline webkit-playsinline preload="auto"></video><span class="wsratchet__znacka">Klik – i pristaje</span></div>
  <div>
    <div class="wsratchet__kicker">Samozaporna kopča</div>
    <h2 class="wsratchet__h2">Lako se stavlja. Lako se skida. <em>Svaki put točna mjera.</em></h2>
    <p class="wsratchet__p">Uživajte u jednostavnosti samozapornog remena: provucite remen kroz kopču, povucite – i on se uz tihi klik zaključa točno tamo gdje vam odgovara. Bez traženja prave rupe, bez remena koji je ili prelabav ili pretijesan.</p>
    <p class="wsratchet__p">Mehanizam se podešava u sitnim koracima, pa remen možete zategnuti ili otpustiti i za nekoliko milimetara. Kad sjedite, nakon obilnog obroka ili na kraju dugog dana – mjeru prilagodite u sekundi.</p>
    <ul class="wsratchet__kv">
      <li><em>Glatko podešavanje</em> – remen klikne i zaključa se na mjestu</li>
      <li><em>Brzo otpuštanje</em> – samo podignite polugu na kopči</li>
      <li><em>Jednom rukom</em> – bez petljanja s iglom i rupama</li>
    </ul>
    <p class="wsratchet__zak">Povucite, klik – i remen sjedi točno kako treba.</p>
  </div>
</div></section>

<section class="wsratchet__s wsratchet__s--bg"><div class="wsratchet__v wsratchet__dva wsratchet__dva--rev">
  <div class="wsratchet__media"><video src="<?php echo esc_url( $wsr_img . 'noriks-ratchet-poklon-video.mp4' ); ?>" poster="<?php echo esc_url( $wsr_img . 'noriks-ratchet-poklon-video.jpg' ); ?>" autoplay muted loop playsinline webkit-playsinline preload="auto"></video><span class="wsratchet__znacka">U poklon kutiji</span></div>
  <div>
    <div class="wsratchet__kicker">Poklon koji se nosi</div>
    <h2 class="wsratchet__h2">Poklonite nešto što će <em>stvarno nositi</em></h2>
    <p class="wsratchet__p">Remen stiže u elegantnoj poklon kutiji, pa je poklon odmah spreman – za rođendan, godišnjicu, Božić ili jednostavno zato što je stari remen odavno za bacanje. U kutiji su i upute za skraćivanje na pravu mjeru.</p>
    <p class="wsratchet__p">Svakom muškarcu dobro dođe novi remen. Kombinirajte boje i uštedite: uzmite crni za posao i smeđi za traperice – ili jedan za sebe, a drugi za oca, brata ili prijatelja.</p>
    <ul class="wsratchet__kv">
      <li><em>Elegantna poklon kutija</em> – spremno za darivanje</li>
      <li><em>Crna ili smeđa</em> – uz odijelo, chinos ili traperice</li>
      <li><em>Jedna veličina za sve</em> – skrati se točno na mjeru</li>
    </ul>
    <p class="wsratchet__zak">Poklon koji se ne spremi u ladicu – nego nosi svaki dan.</p>
  </div>
</div></section>

<section class="wsratchet__s wsratchet__traka"><div class="wsratchet__v wsratchet__tmreza">
  <div class="wsratchet__tk"><span class="wsratchet__ti"><?php echo $wsr_svg; ?><path d="M7 3c1.5 1 3.2 1.5 5 1.5S15.5 4 17 3l2.5 3.5c-.9 1-1.5 2.3-1.5 3.8 0 3.6 1.5 5.2 1.5 8.2L17 21c-1.5-.7-3.2-1-5-1s-3.5.3-5 1l-2.5-2.5c0-3 1.5-4.6 1.5-8.2 0-1.5-.6-2.8-1.5-3.8z"/></svg></span><div class="wsratchet__tt"><strong>Prava koža</strong><span>Goveđa koža za dug vijek trajanja</span></div></div>
  <div class="wsratchet__tk"><span class="wsratchet__ti"><?php echo $wsr_svg; ?><rect x="3" y="8" width="18" height="8" rx="2"/><rect x="8" y="10" width="6" height="4" rx="1"/><path d="M14 12h4"/></svg></span><div class="wsratchet__tt"><strong>Savršeno pristajanje</strong><span>Fino podešavanje bez rupa</span></div></div>
  <div class="wsratchet__tk"><span class="wsratchet__ti"><?php echo $wsr_svg; ?><path d="M3 9h18v6H3z"/><path d="M7 9v2.5M11 9v3.5M15 9v2.5M19 9v3.5"/></svg></span><div class="wsratchet__tt"><strong>Lako skraćivanje</strong><span>Na svoju mjeru za 2 minute</span></div></div>
  <div class="wsratchet__tk"><span class="wsratchet__ti"><?php echo $wsr_svg; ?><circle cx="12" cy="12" r="9"/><path d="M7.8 12.3l2.8 2.8 5.6-5.8"/></svg></span><div class="wsratchet__tt"><strong>Bez razvučenih rupa</strong><span>Remen ostaje uredan godinama</span></div></div>
</div></section>

<section class="wsratchet__s wsratchet__s--bg"><div class="wsratchet__v">
  <div class="wsratchet__kicker wsratchet__c">Recenzije kupaca</div>
  <h2 class="wsratchet__h2 wsratchet__c">Što kažu oni koji ga <em>već nose</em></h2>
  <p class="wsratchet__p wsratchet__c">Fotografije kupaca koji remen nose na poslu, uz traperice i svaki dan.</p>
  <div class="wsratchet__grid">
    <div class="wsratchet__k"><div class="wsratchet__km"><img src="<?php echo esc_url( $wsr_img . 'noriks-ratchet-kupac-1.webp' ); ?>" alt="Kupac nosi crni kožni remen bez rupa uz sive hlače" loading="eager" decoding="async"></div><div class="wsratchet__kt"><span class="wsratchet__zv">★★★★★</span><p>Napokon se ne moram boriti s rupom! Kvaliteta, izgled i udobnost – sve je na mjestu. Nosim ga svaki dan.</p><span class="wsratchet__ime"><i class="wsratchet__av" aria-hidden="true">B</i>Branimir C.</span></div></div>
    <div class="wsratchet__k"><div class="wsratchet__km"><img src="<?php echo esc_url( $wsr_img . 'noriks-ratchet-kupac-2.webp' ); ?>" alt="Kupac pokazuje novi kožni remen s automatskom kopčom" loading="eager" decoding="async"></div><div class="wsratchet__kt"><span class="wsratchet__zv">★★★★★</span><p>Trebao mi je remen za poslovna putovanja i ovaj odlično služi. Mjeru prilagodim kad sjedim ili jedem – puno udobnije od mojih starih remena.</p><span class="wsratchet__ime"><i class="wsratchet__av" aria-hidden="true">I</i>Ivan D.</span></div></div>
    <div class="wsratchet__k"><div class="wsratchet__km"><img src="<?php echo esc_url( $wsr_img . 'noriks-ratchet-kupac-3.webp' ); ?>" alt="Crni kožni remen bez rupa na radnom stolu" loading="eager" decoding="async"></div><div class="wsratchet__kt"><span class="wsratchet__zv">★★★★★</span><p>Nosim ga zadnjih nekoliko mjeseci i drži se odlično – bez trošenja i oštećenja. Sad nosim samo njega. Dobra investicija na duge staze.</p><span class="wsratchet__ime"><i class="wsratchet__av" aria-hidden="true">R</i>Robert F.</span></div></div>
  </div>
  <p class="wsratchet__zak">Jedan remen, točna mjera – i nikad više traženja prave rupe.</p>
</div></section>

<section class="wsratchet__s npg-s"><?php $npg = array( 'izdelek' => 'NORIKS AutoLock', 'barva' => '#6b4a2f' ); include __DIR__ . '/noriks-pogoji.php'; ?></section>
</div>
<style>
.wsratchet{color:#1c1c1c;font-family:inherit}
.wsratchet__s{padding:72px 0;background:#fff}.wsratchet__s.wsratchet__s--bg{background:#f1ebe5}
.wsratchet__v{width:100%;max-width:1240px;margin:0 auto;padding:0 24px;box-sizing:border-box}
.wsratchet__c{text-align:center}
.wsratchet__kicker{font-size:12.5px;letter-spacing:1.8px;text-transform:uppercase;color:#6b4a2f;margin:0 0 8px;font-weight:700}
.wsratchet__kicker::before{content:"";display:inline-block;width:22px;height:2px;background:#6b4a2f;vertical-align:middle;margin:-2px 10px 0 0;border-radius:2px}
.wsratchet__h2{font-size:clamp(24px,3vw,34px);font-weight:800;line-height:1.2;margin:0 0 18px;color:#1c1c1c}.wsratchet__h2 em{font-style:italic;color:#6b4a2f}
.wsratchet__p{font-size:15.5px;line-height:1.65;color:#333;margin:0 0 14px}
.wsratchet__uvod{max-width:none}
.wsratchet__zak{font-size:16px;font-weight:800;line-height:1.5;margin:18px 0 0}
.wsratchet__v>.wsratchet__zak{text-align:center}
.wsratchet__dva .wsratchet__zak{border-left:3px solid #6b4a2f;padding-left:14px}
/* 1: prednosti + primerjava */
.wsratchet__sred{display:grid;grid-template-columns:1fr minmax(320px,520px) 1fr;gap:40px;align-items:center;margin-top:26px}
.wsratchet__sc{display:flex;flex-direction:column;gap:22px}
.wsratchet__sf{background:#fff;border-radius:16px;padding:24px 22px;box-shadow:0 8px 24px rgba(107,74,47,.10);text-align:center;transition:transform .2s,box-shadow .2s}
.wsratchet__sf:hover{transform:translateY(-3px);box-shadow:0 14px 30px rgba(107,74,47,.18)}
.wsratchet__sf strong{display:block;font-size:18px;font-weight:800;margin:0 0 6px}.wsratchet__sf p{margin:0;font-size:14.5px;line-height:1.6;color:#444}
.wsratchet__ik{width:54px;height:54px;border-radius:50%;background:#e4d9cf;color:#6b4a2f;display:flex;align-items:center;justify-content:center;margin:0 auto 12px}
.wsratchet__cmp{position:relative;aspect-ratio:4/3;border-radius:50%;overflow:hidden;background:#000;box-shadow:0 18px 40px rgba(0,0,0,.25);user-select:none}
.wsratchet__cmp img{position:absolute;inset:0;width:100%;height:100%;object-fit:cover;display:block;max-width:none}
.wsratchet__cmp-b{position:absolute;inset:0;clip-path:inset(0 calc(100% - var(--poz)) 0 0)}
.wsratchet__cmp-l{position:absolute;top:0;bottom:0;left:var(--poz);width:2px;margin-left:-1px;background:#fff;pointer-events:none}
.wsratchet__cmp-r{position:absolute;top:50%;left:var(--poz);width:46px;height:46px;margin:-23px 0 0 -23px;border-radius:50%;background:#fff;color:#1c1c1c;font-size:20px;font-weight:700;display:flex;align-items:center;justify-content:center;box-shadow:0 4px 14px rgba(0,0,0,.3);pointer-events:none}
.wsratchet__cmp-z{position:absolute;bottom:16%;font-size:12px;font-weight:800;letter-spacing:1.2px;text-transform:uppercase;color:#fff;background:rgba(0,0,0,.45);padding:5px 10px;border-radius:20px;pointer-events:none}
.wsratchet__cmp-z--l{left:18%}.wsratchet__cmp-z--d{right:18%}
.wsratchet__cmp-i{position:absolute;inset:0;width:100%;height:100%;opacity:0;cursor:ew-resize;margin:0;-webkit-appearance:none;appearance:none}
/* 2-3: slika + besedilo */
.wsratchet__dva{display:grid;grid-template-columns:1fr 1fr;gap:56px;align-items:center}.wsratchet__dva--rev>div:first-child{order:2}
.wsratchet__media{position:relative;border-radius:16px;overflow:hidden;box-shadow:0 14px 34px rgba(107,74,47,.22);aspect-ratio:4/5;background:#1c1c1c}
.wsratchet__media img,.wsratchet__media video{width:100%;height:100%;object-fit:cover;display:block}
.wsratchet__znacka{position:absolute;left:16px;top:16px;background:#fff;color:#6b4a2f;font-size:12px;font-weight:800;letter-spacing:1px;text-transform:uppercase;padding:7px 12px;border-radius:20px;box-shadow:0 4px 12px rgba(0,0,0,.15)}
.wsratchet__kv{list-style:none;margin:4px 0 6px;padding:0}.wsratchet__kv li{position:relative;padding-left:32px;margin:0 0 12px;font-size:15.5px;line-height:1.55;list-style:none}
.wsratchet__kv li::before{content:"\2713";position:absolute;left:0;top:1px;width:21px;height:21px;border-radius:50%;background:#6b4a2f;color:#fff;font-size:12px;display:flex;align-items:center;justify-content:center}
.wsratchet__kv em{font-style:normal;font-weight:800}
/* 4: trak */
.wsratchet__s.wsratchet__traka{padding:44px 0}
.wsratchet__tmreza{display:grid;grid-template-columns:repeat(4,1fr);gap:18px}
.wsratchet__tk{display:flex;align-items:center;gap:14px;background:#fff;border-radius:16px;padding:22px 18px;box-shadow:0 8px 24px rgba(107,74,47,.12)}
.wsratchet__ti{flex:0 0 52px;width:52px;height:52px;border-radius:50%;background:linear-gradient(135deg,#6b4a2f,#8d6a4b);color:#fff;display:flex;align-items:center;justify-content:center;box-shadow:0 6px 14px rgba(107,74,47,.30)}
.wsratchet__tt strong{display:block;font-size:16.5px;font-weight:800;line-height:1.25;color:#1c1c1c}.wsratchet__tt span{display:block;font-size:13.5px;line-height:1.4;color:#5a5f6b;margin-top:3px}
/* 5: mnenja */
.wsratchet__grid{display:grid;grid-template-columns:repeat(3,1fr);gap:22px;margin-top:24px;align-items:stretch}
.wsratchet__k{background:#fff;border-radius:16px;overflow:hidden;display:flex;flex-direction:column;box-shadow:0 8px 22px rgba(107,74,47,.12);transition:transform .2s,box-shadow .2s}
.wsratchet__k:hover{transform:translateY(-3px);box-shadow:0 14px 30px rgba(107,74,47,.20)}
.wsratchet__km img{width:100%;aspect-ratio:4/5;object-fit:cover;display:block}
.wsratchet__kt{padding:20px 22px 22px;flex:1;display:flex;flex-direction:column}.wsratchet__kt p{margin:0 0 12px;font-size:15.5px;line-height:1.55;color:#333;flex:1}
.wsratchet__zv{color:#e0a33c;letter-spacing:2px;display:block;margin-bottom:8px}
.wsratchet__ime{display:flex;align-items:center;gap:10px;font-weight:700;font-size:14px}
.wsratchet__av{flex:0 0 34px;width:34px;height:34px;border-radius:50%;background:#e4d9cf;color:#6b4a2f;font-style:normal;font-weight:800;font-size:14px;display:inline-flex;align-items:center;justify-content:center}
@media (max-width:1000px){.wsratchet__sred{grid-template-columns:1fr 1fr;gap:20px}.wsratchet__sm{grid-column:1/-1;order:-1;max-width:520px;width:100%;margin:0 auto}}
@media (max-width:860px){.wsratchet__s{padding:46px 0}.wsratchet__s.wsratchet__traka{padding:30px 0}
.wsratchet__dva{grid-template-columns:1fr;gap:24px}.wsratchet__dva--rev>div:first-child{order:0}
.wsratchet__tmreza{grid-template-columns:1fr 1fr;gap:12px}.wsratchet__tk{flex-direction:column;text-align:center;padding:18px 12px;gap:10px}.wsratchet__tt strong{font-size:15px}
.wsratchet__grid{grid-auto-flow:column;grid-auto-columns:82%;grid-template-columns:none;overflow-x:auto;scroll-snap-type:x mandatory;padding-bottom:6px}.wsratchet__grid>*{scroll-snap-align:start}}
@media (max-width:767px){.wsratchet__v{padding:0 16px}}
@media (max-width:560px){.wsratchet__sred{grid-template-columns:1fr}.wsratchet__sf{padding:20px 18px}}
</style>
<script>
(function(){document.querySelectorAll('.wsratchet__cmp').forEach(function(c){var i=c.querySelector('.wsratchet__cmp-i');if(!i)return;var f=function(){c.style.setProperty('--poz',i.value+'%');};i.addEventListener('input',f);f();});})();
</script>
