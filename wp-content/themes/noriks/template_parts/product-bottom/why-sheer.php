<?php
/**
 * NORIKS Sheer — prozirne hulahop carape bez savova (skracena duljina): why sekcije po strukturi originala
 * (getnoosh.com/products/play-sheer-petite).
 *
 * (opis pod gumbom, od vrha navzdol)
 * STRUKTURA ORIGINALA:
   1. trak (marquee) s kratkimi napisi - pri nas staticen trak prednosti s 4 ikonami (vsebina iz "Main benefits" originala: skracena duljina, pojas bez savova, otporne na paranje, mekane i svilenkaste; tekoci trakovi so prepovedani)
   2. "You'll love these too" (priporocila drugih izdelkov trgovine) - pri nas izpusceno (drugi izdelki)
   3. Reviews (widget z mnenji) - pri nas naslov + ocena + 3 kartice z mnenji v vrsti
   4. 4 kartice v vrsti: slika zgoraj, stevilka + naslov (1. seamless sheer finish, 2. crafted for 5'4 & under, 3. run-resistant yarns, 4. body hugging support) - pri nas mreza 4 kartic s sliko, stevilko, naslovom in besedilom
   5. slika cez celo sirino (tri modela v carapah; mobilno posebna pokoncna slika) - pri nas sirok banner (mobilno pokoncna slika) z napisom
   6. slika cez celo sirino (model na stopnicah; mobilno posebna pokoncna slika) - pri nas sirok banner (mobilno pokoncna slika) z napisom + sestava in nega
   7. pogoji trgovine - pri nas skupna sekcija NORIKS pogoji
 * BARVA ORIGINALA: #8a7f76 (topla taupe/bez paleta strani originala - tablica velicin in ozadja, crne carape); svetel ton za --bg #f4f0eb
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
$wsh_img = get_template_directory_uri() . '/img/sheer/';
$wsh_i   = function ( $f ) use ( $wsh_img ) { return esc_url( $wsh_img . $f ); };
$wsh_svg = '<svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">';
?>
<div class="wsh">

<section class="wsh__s wsh__s--bg"><div class="wsh__v">
  <div class="wsh__trak">
    <div class="wsh__ti"><span class="wsh__ik"><?php echo $wsh_svg; ?><path d="M12 3v18"/><path d="M8 7l4-4 4 4"/><path d="M8 17l4 4 4-4"/></svg></span><div><strong>Skraćena duljina</strong><small>za visinu od 150 do 163 cm</small></div></div>
    <div class="wsh__ti"><span class="wsh__ik"><?php echo $wsh_svg; ?><path d="M4 7c3-2 13-2 16 0"/><path d="M4 7v4c3 2 13 2 16 0V7"/><path d="M7 13v7M17 13v7"/></svg></span><div><strong>Pojas bez šavova</strong><small>prijanja uz tijelo, ne reže</small></div></div>
    <div class="wsh__ti"><span class="wsh__ik"><?php echo $wsh_svg; ?><path d="M12 3l7 3v6c0 4.5-3 7.5-7 9-4-1.5-7-4.5-7-9V6z"/><path d="M9 12l2 2 4-4"/></svg></span><div><strong>Otporne na paranje</strong><small>pređa koja dulje traje</small></div></div>
    <div class="wsh__ti"><span class="wsh__ik"><?php echo $wsh_svg; ?><path d="M3 15c3-4 6-4 9 0s6 4 9 0"/><path d="M3 9c3-4 6-4 9 0s6 4 9 0"/></svg></span><div><strong>Mekane i svilenkaste</strong><small>lagane, gotovo bez težine</small></div></div>
  </div>
</div></section>

<section class="wsh__s"><div class="wsh__v">
  <div class="wsh__kicker wsh__c">Iz recenzija</div>
  <h2 class="wsh__h2 wsh__c">Što kažu žene <em>koje ih već nose</em></h2>
  <p class="wsh__p wsh__c wsh__uvod">Najudobnije prozirne hulahop čarape koje ste ikad nosili – sada u skraćenoj duljini, napravljene za niže žene. Evo što kupci najčešće ističu nakon prvih nekoliko nošenja.</p>
  <p class="wsh__c"><span class="wsh__ocj"><strong>4,8</strong> <span class="wsh__zv">★★★★★</span> na temelju 1.081 recenzije</span></p>
  <div class="wsh__mn">
    <div class="wsh__mk"><span class="wsh__nav">“</span><p>Napokon hulahop čarape koje mi ne vise na koljenima i ne nabiru se na gležnjevima. Visoka sam 156 cm i ove mi sjede kao salivene, od pojasa do prstiju.</p><div class="wsh__mh"><span class="wsh__av">I</span><div><strong>Ivana K.</strong><span>provjereni kupac</span></div><span class="wsh__zv">★★★★★</span></div></div>
    <div class="wsh__mk"><span class="wsh__nav">“</span><p>Pojas uopće ne reže u struk, a cijeli dan ostaje na mjestu. Nosila sam ih devet sati u uredu i navečer sam zaboravila da ih imam na sebi.</p><div class="wsh__mh"><span class="wsh__av">M</span><div><strong>Martina P.</strong><span>provjereni kupac</span></div><span class="wsh__zv">★★★★★</span></div></div>
    <div class="wsh__mk"><span class="wsh__nav">“</span><p>Noge izgledaju glatko i ujednačeno, kao retuširane. Već sam ih oprala nekoliko puta na ruke i još nema ni jedne povučene niti.</p><div class="wsh__mh"><span class="wsh__av">A</span><div><strong>Ana Š.</strong><span>provjereni kupac</span></div><span class="wsh__zv">★★★★★</span></div></div>
  </div>
</div></section>

<section class="wsh__s wsh__s--bg"><div class="wsh__v">
  <div class="wsh__kicker wsh__c">Zašto baš NORIKS Sheer</div>
  <h2 class="wsh__h2 wsh__c">Četiri stvari koje <em>osjetite od prvog nošenja</em></h2>
  <p class="wsh__p wsh__c wsh__uvod">Lagane i prozračne, toliko da zaboravite da ih nosite. Čarape se kreću s vama i prianjaju kao prirodni nastavak tijela – za ured, za kauč i za večernji izlazak.</p>
  <div class="wsh__kartice">
    <div class="wsh__k">
      <div class="wsh__km"><img src="<?php echo $wsh_i( 'noriks-sheer-prednost-1-bez-savova.webp' ); ?>" alt="Stražnji pogled na crne prozirne NORIKS Sheer hulahop čarape bez šavova" loading="eager" decoding="async"><span class="wsh__st">1</span></div>
      <div class="wsh__kt">
        <h3>Prozirni završetak bez šavova – od bedra do prstiju</h3>
        <p>Nema vidljivih šavova ni prijelaza koji se ocrtavaju ispod suknje ili haljine. Čarape su jednako prozirne cijelom dužinom noge, a pojas prelazi u nogavicu bez ruba.</p>
        <p class="wsh__kz">Glatka linija ispod svake odjeće.</p>
      </div>
    </div>
    <div class="wsh__k">
      <div class="wsh__km"><img src="<?php echo $wsh_i( 'noriks-sheer-prednost-2-skracena-duljina.webp' ); ?>" alt="Prednji pogled na NORIKS Sheer hulahop čarape skraćene duljine s visokim pojasom" loading="eager" decoding="async"><span class="wsh__st">2</span></div>
      <div class="wsh__kt">
        <h3>Napravljene za niže žene – do 163 cm</h3>
        <p>Kraća unutarnja duljina noge i pomaknuti položaj koljena. Čarapa se ne nabire na gležnjevima i ne „visi” na koljenima, nego leži točno tamo gdje treba.</p>
        <p class="wsh__kz">Pristajanje po mjeri nižih nogu.</p>
      </div>
    </div>
    <div class="wsh__k">
      <div class="wsh__km"><img src="<?php echo $wsh_i( 'noriks-sheer-prednost-3-otporne-na-paranje.webp' ); ?>" alt="Žena povlači visoki pojas NORIKS Sheer čarapa koji se rasteže bez paranja" loading="eager" decoding="async"><span class="wsh__st">3</span></div>
      <div class="wsh__kt">
        <h3>Pređa otporna na paranje</h3>
        <p>Poliamid s visokim udjelom elastana (39 %) rasteže se bez pucanja niti. Prsti su dodatno ojačani – upravo ondje gdje obične čarape najprije popuste.</p>
        <p class="wsh__kz">Manje bačenih pari, više nošenja.</p>
      </div>
    </div>
    <div class="wsh__k">
      <div class="wsh__km"><img src="<?php echo $wsh_i( 'noriks-sheer-prednost-4-pojas-koji-drzi.webp' ); ?>" alt="Bočni pogled na visoki pojas NORIKS Sheer čarapa koji prianja uz tijelo" loading="eager" decoding="async"><span class="wsh__st">4</span></div>
      <div class="wsh__kt">
        <h3>Potpora koja prianja uz tijelo</h3>
        <p>Visoki pojas bez šavova nježno obuhvaća struk i drži čarape na mjestu cijeli dan – ne reže, ne stvara „kobasicu” i ne klizi prema dolje dok hodate ili sjedite.</p>
        <p class="wsh__kz">Sjedi na mjestu od jutra do večeri.</p>
      </div>
    </div>
  </div>
</div></section>

<section class="wsh__s"><div class="wsh__v">
  <div class="wsh__banner">
    <picture>
      <source media="(max-width:767px)" srcset="<?php echo $wsh_i( 'noriks-sheer-banner-1-mobil.webp' ); ?>">
      <img src="<?php echo $wsh_i( 'noriks-sheer-sirok-banner-1.webp' ); ?>" alt="Tri žene u prozirnim tamnim NORIKS Sheer hulahop čarapama" loading="eager" decoding="async">
    </picture>
    <div class="wsh__bt">
      <div class="wsh__kicker">Iskušano u uredu</div>
      <h2 class="wsh__h2">Ured, kauč, izlazak – <em>u istom paru</em></h2>
      <p class="wsh__p">Toliko lagane i prozračne da zaboravite da ih nosite. NORIKS Sheer se kreće s vama i oblikuje se kao prirodni nastavak tijela – od jutarnjeg sastanka do večere vani.</p>
      <ul class="wsh__kv"><li>Prozračne i gotovo bez težine</li><li>Prate svaki pokret, ne stežu</li><li>Za suknju, haljinu i kratke hlače</li></ul>
    </div>
  </div>
</div></section>

<section class="wsh__s wsh__s--bg"><div class="wsh__v">
  <div class="wsh__banner wsh__banner--rev">
    <picture>
      <source media="(max-width:767px)" srcset="<?php echo $wsh_i( 'noriks-sheer-banner-2-mobil.webp' ); ?>">
      <img src="<?php echo $wsh_i( 'noriks-sheer-sirok-banner-2.webp' ); ?>" alt="Žena u sakou i prozirnim NORIKS Sheer čarapama sjedi na kamenim stepenicama" loading="eager" decoding="async">
    </picture>
    <div class="wsh__bt">
      <div class="wsh__kicker">Sastav i njega</div>
      <h2 class="wsh__h2">Glatke noge, <em>kao retuširane</em></h2>
      <p class="wsh__p">Za dane kad želite da vam noge izgledaju glatko i ujednačeno. Fini prozirni sloj prekrije sitne nepravilnosti, a i dalje izgleda prirodno.</p>
      <div class="wsh__podaci">
        <div><span class="wsh__pi"><?php echo $wsh_svg; ?><path d="M4 18c4-8 12-8 16 0"/><path d="M4 12c4-8 12-8 16 0"/></svg></span><strong>Čarapa</strong><small>61 % poliamid, 39 % elastan</small></div>
        <div><span class="wsh__pi"><?php echo $wsh_svg; ?><path d="M4 7c3-2 13-2 16 0v4c-3 2-13 2-16 0z"/></svg></span><strong>Pojas</strong><small>85 % poliamid, 15 % elastan</small></div>
        <div><span class="wsh__pi"><?php echo $wsh_svg; ?><path d="M7 4v8a5 5 0 0 0 10 0V4"/><path d="M7 16h10"/></svg></span><strong>Prsti</strong><small>ojačani</small></div>
        <div><span class="wsh__pi"><?php echo $wsh_svg; ?><path d="M3 8h18l-2 11H5z"/><path d="M7 8c0-3 10-3 10 0"/></svg></span><strong>Pranje</strong><small>ručno, u hladnoj vodi</small></div>
      </div>
      <p class="wsh__zak">Ne glačati, ne izbjeljivati, ne kemijski čistiti – sušiti položeno.</p>
    </div>
  </div>
</div></section>

<section class="wsh__s npg-s"><?php $npg = array( 'izdelek' => 'NORIKS Sheer', 'barva' => '#8a7f76' ); include __DIR__ . '/noriks-pogoji.php'; ?></section>
</div>
<style>
.wsh{color:#1f1b18;font-family:inherit}
.wsh__s{padding:72px 0;background:#fff}.wsh__s.wsh__s--bg{background:#f4f0eb}
.wsh__v{width:100%;max-width:1240px;margin:0 auto;padding:0 24px;box-sizing:border-box}
.wsh__c{text-align:center}
.wsh__kicker{font-size:13px;letter-spacing:1.8px;text-transform:uppercase;color:#6f645b;margin:0 0 8px;font-weight:700}
.wsh__kicker::before{content:"";display:inline-block;width:22px;height:2px;background:#8a7f76;vertical-align:middle;margin:-2px 10px 0 0;border-radius:2px}
.wsh__h2{font-size:clamp(24px,3vw,34px);font-weight:800;line-height:1.2;margin:0 0 16px;color:#1f1b18}.wsh__h2 em{font-style:italic;color:#7a6c61}
.wsh__p{font-size:15.5px;line-height:1.65;color:#3d3833;margin:0 0 14px}
.wsh__uvod{max-width:none;margin:0 auto 18px}
.wsh__zak{font-size:15.5px;font-weight:800;line-height:1.5;margin:18px 0 0;border-left:3px solid #8a7f76;padding-left:14px}
.wsh__trak{display:grid;grid-template-columns:repeat(4,1fr);gap:20px}
.wsh__ti{display:flex;align-items:center;gap:14px;background:#fff;border-radius:16px;padding:22px 20px;box-shadow:0 6px 18px rgba(80,62,48,.08);transition:transform .2s,box-shadow .2s}
.wsh__ti:hover{transform:translateY(-3px);box-shadow:0 12px 26px rgba(80,62,48,.13)}
.wsh__ti strong{display:block;font-size:16px;line-height:1.3}.wsh__ti small{display:block;font-size:13.5px;color:#6d655e;margin-top:3px}
.wsh__ik,.wsh__pi{width:48px;height:48px;border-radius:50%;background:#ebe4dc;color:#5f544b;display:flex;align-items:center;justify-content:center;flex:0 0 48px}
.wsh__ocj{display:inline-flex;align-items:center;gap:8px;background:#f4f0eb;border-radius:30px;padding:8px 18px;font-size:14.5px}
.wsh__ocj strong{font-size:22px}.wsh__zv{color:#e0a33c;letter-spacing:2px;font-size:15px}
.wsh__mn{display:grid;grid-template-columns:repeat(3,1fr);gap:24px;margin-top:26px;align-items:stretch}
.wsh__mk{background:#fff;border-radius:16px;padding:30px 26px 22px;box-shadow:0 8px 24px rgba(80,62,48,.10);display:flex;flex-direction:column;transition:transform .2s,box-shadow .2s}
.wsh__mk:hover{transform:translateY(-3px);box-shadow:0 14px 30px rgba(80,62,48,.15)}
.wsh__nav{font-size:56px;line-height:.6;color:#cbbfb4;font-weight:800;font-family:Georgia,serif}
.wsh__mk p{margin:10px 0 18px;font-size:16px;line-height:1.6;color:#2d2925;flex:1}
.wsh__mh{display:flex;align-items:center;gap:12px}
.wsh__av{width:44px;height:44px;border-radius:50%;background:#8a7f76;color:#fff;font-weight:800;display:flex;align-items:center;justify-content:center;flex:0 0 44px}
.wsh__mh strong{display:block;font-size:15px}.wsh__mh span{font-size:13px;color:#6d655e}.wsh__mh .wsh__zv{margin-left:auto;font-size:13px;color:#e0a33c}
.wsh__kartice{display:grid;grid-template-columns:repeat(4,1fr);gap:22px;margin-top:26px;align-items:stretch}
.wsh__k{background:#fff;border-radius:16px;overflow:hidden;box-shadow:0 8px 24px rgba(80,62,48,.09);display:flex;flex-direction:column;transition:transform .2s,box-shadow .2s}
.wsh__k:hover{transform:translateY(-3px);box-shadow:0 14px 30px rgba(80,62,48,.15)}
.wsh__km{position:relative;aspect-ratio:4/5;background:#e9e4de}.wsh__km img{width:100%;height:100%;object-fit:cover;display:block}
.wsh__st{position:absolute;left:14px;top:14px;width:38px;height:38px;border-radius:50%;background:#fff;color:#1f1b18;font-weight:800;font-size:17px;display:flex;align-items:center;justify-content:center;box-shadow:0 4px 12px rgba(0,0,0,.15)}
.wsh__kt{padding:20px 20px 22px;display:flex;flex-direction:column;flex:1}
.wsh__kt h3{font-size:17px;line-height:1.3;margin:0 0 10px;font-weight:800}
.wsh__kt p{font-size:14.5px;line-height:1.6;color:#4a443e;margin:0 0 10px}
.wsh__kt .wsh__kz{margin:auto 0 0;font-weight:700;color:#6f645b;font-size:14px}
.wsh__banner{position:relative;border-radius:18px;overflow:hidden;box-shadow:0 14px 34px rgba(60,45,35,.16);background:#e9e4de}
.wsh__banner picture,.wsh__banner img{display:block;width:100%}
.wsh__banner img{height:auto;min-height:480px;object-fit:cover}
.wsh__bt{position:absolute;top:50%;right:32px;transform:translateY(-50%);width:42%;background:rgba(255,255,255,.95);border-radius:16px;padding:30px 30px 26px;box-shadow:0 10px 30px rgba(0,0,0,.12);box-sizing:border-box}
.wsh__banner--rev .wsh__bt{right:auto;left:32px}
.wsh__kv{list-style:none;margin:4px 0 0;padding:0}.wsh__kv li{position:relative;padding-left:30px;margin:0 0 10px;font-size:15px;line-height:1.5;list-style:none}
.wsh__kv li::before{content:"\2713";position:absolute;left:0;top:1px;width:20px;height:20px;border-radius:50%;background:#8a7f76;color:#fff;font-size:12px;display:flex;align-items:center;justify-content:center}
.wsh__podaci{display:grid;grid-template-columns:repeat(2,1fr);gap:10px;margin:6px 0 0}
.wsh__podaci>div{display:flex;flex-direction:column;align-items:flex-start;gap:4px;background:#f7f4f0;border-radius:14px;padding:12px 14px}
.wsh__podaci .wsh__pi{width:40px;height:40px;flex-basis:40px}
.wsh__podaci strong{font-size:14.5px}.wsh__podaci small{font-size:13px;color:#6d655e}
@media (max-width:1024px){
  .wsh__trak{grid-template-columns:repeat(2,1fr)}.wsh__kartice{grid-template-columns:repeat(2,1fr)}
  .wsh__bt{width:52%}
}
@media (max-width:767px){
  .wsh__s{padding:48px 0}.wsh__v{padding:0 16px}
  .wsh__trak{grid-template-columns:repeat(2,1fr);gap:10px}
  .wsh__ti{flex-direction:column;align-items:flex-start;gap:10px;padding:16px 14px}.wsh__ti strong{font-size:15px}
  .wsh__mn{grid-template-columns:1fr;gap:14px}
  .wsh__kartice{grid-template-columns:1fr;gap:16px}
  .wsh__banner{border-radius:16px}.wsh__banner img{min-height:0;aspect-ratio:4/5;object-fit:cover}
  .wsh__bt,.wsh__banner--rev .wsh__bt{position:static;transform:none;width:100%;border-radius:0;box-shadow:none;padding:22px 18px 20px;background:#fff}
}
</style>
