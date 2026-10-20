<?php
/**
 * product-bottom: NORIKS Tuck — oblikujuce kratke hlacice visokog struka (orto-tuck).
 * Original: bellashapewear.com/products/tuck-n-lift-seamless-slip-short — struktura je 1:1 z originalom
 * (isto stevilo sekcij, isti vrstni red, ista ozadja, iste slike), besedila prevedena v hrvascino.
 *   1) Dosad ste morali birati (bela, 2 kartici + temna pasica)
 *   2) Super Stay™ tehnologija (#F4F0EB, slika z oznakami/hotspoti, primerjava, savjet, citat, ikone)
 *   3) Za veliki dan i za svaki dan (2 sliki, statistika, 3 mnenja, datum dostave)
 *   4) Odjenite haljinu koju ste dosad izbjegavali (4 kartice s slikami)
 *   5) Pronadite svoju velicinu za 10 sekundi (tablica, merilnik kompresije)
 *   6) Kratke hlacice ili tange? (2 kartici)
 *   7) Nije svako oblikujuce rublje jednako izradeno (primerjalna tabela)
 *   8) Vecina zena uzme 2+ (temna sekcija s ponudo 2x kom)
 *   9) Sto zene kazu o Super Stay™ pojasu (30 mnenj z originala, ocene 1:1, "Ucitaj vise")
 *  10) Brza dostava / Recenzije s 5 zvjezdica (2 ikoni)
 * FAQ originala (med 7 in 8) je v reviews.php ($tuck_faq), kratka mnenja v auto_reviews/HR_tuck.php.
 * Promo pasica originala (vrstica na vrhu, 4 izmenjujoca se sporocila) je na istem mestu — cisto na vrhu strani.
 * Glava trgovine, nadgradnje (grudnjak, tange), "YOUR PACK UNLOCKS" in noga so izpusceni (trgovinski moduli).
 * Slike: img/tuck/ (napisi na slikah galerije prevedeni v hrvascino).
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$ntk = get_template_directory_uri() . '/img/tuck/';

/* 9) mnenja z originala: ime, datum, ocena, besedilo */
$ntk_reviews = array(
  array( 'Nancy F.', 'listopad 2026.', 5, 'Ovo je PRVO oblikujuće rublje u kojem stvarno mogu disati, nositi ga cijeli dan, ne smota se ni gore NI dolje I lijepo me zagladilo. Toplo preporučujem!' ),
  array( 'Josephine M.', 'listopad 2026.', 4, 'Stvarno je ostalo na mjestu cijeli dan. Tako je mekano i udobno. Mislila sam da ću osjećati stezanje, ali nisam, a ipak je savršeno zagladilo i učvrstilo. Sigurno ću kupiti još. Toplo preporučujem.' ),
  array( 'Elizabeth A.', 'listopad 2026.', 5, 'Kupila sam ih za sinoćnje vjenčanje i nisu se smotale, jako sam zadovoljna! Obožavam ih, vrlo su udobne. Staro oblikujuće rublje sam bacila, tako mi je drago da sam pronašla ove!' ),
  array( 'Liz R.', 'listopad 2026.', 5, 'Apsolutno najbolje oblikujuće rublje koje sam ikad imala! Ne mogu ih se dovoljno nahvaliti! Mekan, tanak materijal, pojas se uopće ne smota. Vrlo udobne! Toplo preporučujem kupnju!' ),
  array( 'Amanda C.', 'listopad 2026.', 3, 'Odlične su i lijepo me oblikuju, ali nogavice su mi preduge pa ih ne mogu nositi uz kraće haljine. Voljela bih da postoji verzija s kraćim nogavicama.' ),
  array( 'Cherry L.', 'rujan 2026.', 5, 'Potpora uz udobnost. Ostaju na mjestu i nitko ne zna da ih nosite!' ),
  array( 'Allyson A.', 'rujan 2026.', 5, 'Vrlo udobne, a protuklizni pojas je nevjerojatan!' ),
  array( 'Donna H.', 'rujan 2026.', 5, 'Dobro pristaju i udobne su' ),
  array( 'Isabeth C.', 'kolovoz 2026.', 5, 'Odlična potpora, super udobne i lagane. Ne osjeti se da ih nosim, čak ni ispod hlača.' ),
  array( 'Sara T.', 'kolovoz 2026.', 4, 'Obožavam ih. Prve koje stvarno ostaju na mjestu i ne smotaju se. Oblikuju vitkiju liniju, a nisu toliko uske da bi prekidale cirkulaciju.' ),
  array( 'Myla L.', 'kolovoz 2026.', 5, 'Ove su nevjerojatne. Lakše se oblače i ne spljošte stražnjicu. Tako zaglađen izgled. Obožavam ih.' ),
  array( 'Kim H.', 'srpanj 2026.', 5, 'Udobne, kvalitetne i najbolje oblikujuće rublje. Obožavam ih ispod ljetnih haljina. Stvarno podižu samopouzdanje. Trbuh mi je ravan!' ),
  array( 'Julie B.', 'srpanj 2026.', 4, 'Dobro pristaju, lijepo zaglađuju. Nogavice se ne smotaju.' ),
  array( 'Shayne B.', 'srpanj 2026.', 5, 'Moj najdraži komad oblikujućeg rublja! Uopće se ne podiže, vrlo udobno. Mogla bih ih nositi svaki dan!' ),
  array( 'Dana K.', 'lipanj 2026.', 4, 'Najudobnije oblikujuće rublje koje sam ikad nosila!' ),
  array( 'Meryl G.', 'lipanj 2026.', 5, 'Bila sam skeptična prema tom malom izumu koji uvlači i zateže, a iznenadilo me da je radio cijeli dan!' ),
  array( 'Angie L.', 'lipanj 2026.', 5, 'Obožavam koliko su udobne. Osjećam se kao da ništa ne nosim, a ipak zaglađuju tijelo.' ),
  array( 'Rebecca L.', 'lipanj 2026.', 5, 'Visoka sam 180 cm i nosim EU 36/38. Savršeno pristaju! Jedva čekam nositi ih ispod suknji i haljina za potporu i oblikovanje!' ),
  array( 'Kara T.', 'svibanj 2026.', 4, 'Kad ih jednom obučete, vrlo su udobne i ostaju na mjestu. Ali obući ih pravi je izazov. Gumirani protuklizni dio na struku ne rasteže se dovoljno i lijepi se za kožu dok ih navlačite. Pamučni umetak u međunožju bio bi lijep dodatak.' ),
  array( 'Ruth A.', 'svibanj 2026.', 5, 'Obožavam kako udobno pristaju.' ),
  array( 'Melanie B.', 'svibanj 2026.', 5, 'Obožavam ih, lijepo zatežu trbuh i ističu stražnjicu, udobno pokrivaju bokove i bedra. Nogavice se ne smotaju! Savršene za haljine.' ),
  array( 'Jacqueline S.', 'travanj 2026.', 5, 'Obožavam ih. Uzela sam jednu veličinu veću i odlično pristaju.' ),
  array( 'Debra L.', 'travanj 2026.', 3, 'Dobra kvaliteta. Malo su manjeg kroja.' ),
  array( 'Michele H.', 'travanj 2026.', 5, 'Ovo su najbolje koje sam ikad vidjela, tako udobne i stvarno rade ono što obećavaju. Ostaju na mjestu! Obavezno ih nabavite.' ),
  array( 'Debbra G.', 'travanj 2026.', 5, 'Odličan proizvod' ),
  array( 'Mary D.', 'travanj 2026.', 5, 'Iako čvrsto pristaju i malo ih je teže obući, izgledaju i osjećaju se odlično! Rade točno kako je obećano!' ),
  array( 'Stacy C.', 'ožujak 2026.', 4, 'Voljela bih da postoji i veličina XS' ),
  array( 'Nicole S.', 'ožujak 2026.', 5, 'Obožavam ihhh😍🥰' ),
  array( 'Jill A.', 'ožujak 2026.', 5, 'Napokon sam ih nosila prošli vikend i iskreno, bile su tako udobne i savršeno su radile. Sve je ostalo na mjestu i jedva sam primijetila da ih nosim. Sigurno ću uzeti još nekoliko.' ),
  array( 'Paula B.', 'veljača 2026.', 5, 'Isprobala sam toliko toga i iskreno, ove su sve promijenile. Stvarno uvlače trbuščić, a toliko su udobne da sam zaboravila da ih uopće nosim.' ),
);
$ntk_rv_first = 6; // kot na originalu: 6 mnenj, nato "Učitaj više"
?>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700;800&family=Lato:wght@400;700;900&display=swap">

<div class="ntk">

<!-- problem -->
<section class="bpr" id="ntk-problem" style="padding-top:40px;padding-bottom:40px">
  <div class="bpr__in"><h2 class="bpr__h">Dosad ste morali <b>birati</b></h2><p class="bpr__lead">Ili zaglađen trbuh, ili udobnost cijeli dan. Obično oblikujuće rublje nikad nije uspjelo oboje.</p><div class="bpr__grid"><div class="bpr__card"><svg class="bpr__ic" viewBox="0 0 44 44" aria-hidden="true"><path d="M9 14h26l-1 6c-1 6-5 11-9 14h-6c-4-3-8-8-9-14z" fill="#2E2420"></path><path d="M8 9.5h28v4.5H8z" fill="#C6BAAA"></path><path d="M8 14c5 2.4 23 2.4 28 0" stroke="#9B2C1F" stroke-width="2" fill="none"></path><path d="M38 6.5v6m-2.2-2.2L38 12.5l2.2-2.2" stroke="#9B2C1F" stroke-width="1.8" fill="none"></path></svg><h3 class="bpr__t">Obično oblikujuće rublje</h3><p class="bpr__good">Zaglađuje trbuh.</p><p class="bpr__bad"><b>Kvaka</b>Smota se čim sjednete, pa ga cijeli dan povlačite gore.</p></div><div class="bpr__card"><svg class="bpr__ic" viewBox="0 0 44 44" aria-hidden="true"><path d="M14 6h7.5l-1 32H14zM22.5 6H30l1 32h-6.5z" fill="#2E2420"></path><path d="M17.5 23l3.5-1.5M17.5 28l3.5-1.5M26.5 23L23 21.5M26.5 28L23 26.5" stroke="#9B2C1F" stroke-width="1.8"></path></svg><h3 class="bpr__t">Bez ičega</h3><p class="bpr__good">Udobno.</p><p class="bpr__bad"><b>Kvaka</b>Ništa nije zaglađeno, a bedra se trljaju ispod haljine.</p></div></div><div class="bpr__band">
        <div class="bpr__band-txt"><p>NORIKS Tuck radi <strong>oboje</strong>: zaglađuje trbuh, ostaje na mjestu cijeli dan i nema trljanja bedara.</p></div>
        <svg viewBox="0 0 28 28" fill="none" stroke="#fff" stroke-width="2.4" aria-hidden="true"><path d="M14 5v17M7 15l7 7 7-7"></path></svg>
      </div></div>
</section>

<style >
  #ntk-problem{background:#FFFFFF;color:#222}
  #ntk-problem .bpr__in{max-width:560px;margin:0 auto;padding:0 16px}
  #ntk-problem .bpr__h{font-family:'Lato',sans-serif;font-weight:400;font-size:28px;line-height:1.15;letter-spacing:-.01em;margin:0 0 8px;color:#222;text-transform:none;text-wrap:balance}
  #ntk-problem .bpr__h strong,#ntk-problem .bpr__h b{font-weight:900}
  #ntk-problem .bpr__lead{font-family:'DM Sans',sans-serif;font-size:15.5px;line-height:1.45;color:#3a3a3a;margin:0 0 18px}
  #ntk-problem .bpr__grid{display:grid;grid-template-columns:1fr 1fr;gap:10px}
  #ntk-problem .bpr__card{border:1.5px solid #E4DDD3;padding:14px 12px;display:flex;flex-direction:column;gap:8px;border-radius:0}
  #ntk-problem .bpr__ic{width:44px;height:44px;display:block}
  #ntk-problem .bpr__t{font-family:'Lato',sans-serif;font-weight:900;font-size:16px;line-height:1.2;margin:0;color:#222;text-transform:none;letter-spacing:0;text-wrap:balance}
  #ntk-problem .bpr__good,#ntk-problem .bpr__bad{font-family:'DM Sans',sans-serif;font-size:13px;line-height:1.35;margin:0;color:#3a3a3a}
  #ntk-problem .bpr__good{color:#222}
  #ntk-problem .bpr__bad b{display:block;color:#9B2C1F;font-weight:800;font-size:11px;letter-spacing:.06em;text-transform:uppercase;margin-bottom:2px}
  #ntk-problem .bpr__band{margin-top:10px;background:#2E2420;color:#fff;padding:16px 14px 16px 16px;display:grid;grid-template-columns:1fr 28px;gap:16px;align-items:center}
  #ntk-problem .bpr__band-txt,#ntk-problem .bpr__band-txt p{font-family:'DM Sans',sans-serif;font-size:15px;line-height:1.4;margin:0;color:#fff}
  #ntk-problem .bpr__band-txt strong,#ntk-problem .bpr__band-txt b{font-weight:800}
  #ntk-problem .bpr__band svg{width:28px;height:28px}
  /* desktop (Hermes) */
  @media screen and (min-width: 990px){
    #ntk-problem{padding-top:80px !important;padding-bottom:80px !important}
    #ntk-problem .bpr__in{max-width:1200px;padding:0 48px}
    #ntk-problem .bpr__h{font-size:40px;line-height:1.1;margin-bottom:12px}
    #ntk-problem .bpr__lead{font-size:17px;max-width:520px}
    #ntk-problem .bpr__in{display:grid;grid-template-columns:5fr 7fr;grid-template-rows:1fr auto auto auto 1fr;column-gap:72px}
    #ntk-problem .bpr__h{grid-column:1;grid-row:2}
    #ntk-problem .bpr__lead{grid-column:1;grid-row:3}
    #ntk-problem .bpr__band{grid-column:1;grid-row:4}
    #ntk-problem .bpr__grid{grid-column:2;grid-row:1 / -1;gap:20px;align-self:center}
    #ntk-problem .bpr__card{padding:28px 24px;gap:12px}
    #ntk-problem .bpr__ic{width:56px;height:56px}
    #ntk-problem .bpr__t{font-size:20px}
    #ntk-problem .bpr__bad{font-size:15px}
    #ntk-problem .bpr__band{margin-top:24px;padding:22px 22px 22px 24px;align-self:start}
    #ntk-problem .bpr__band-txt p{font-size:16.5px}
  }
</style>

<!-- superstay -->
<section class="bss" id="ntk-superstay" style="padding-top:40px;padding-bottom:40px">
  <div class="bss__in">
    <h2 class="bss__h"><b>Super Stay™</b> tehnologija</h2><p class="bss__lead">Prianja uz kožu umjesto da je steže. Zato se ne smota prema dolje.</p><div class="bss__fig bss__fig--lines"><img alt="" src="<?php echo esc_url( $ntk . 'tk-superstay.webp' ); ?>" width="1200" height="1500" loading="lazy" class="bss__img">
<i class="bss__dot" data-c="1" style="left:68%;top:26%"></i>
        <span class="bss__lab is-r" data-c="1" style="left:10px;top:21%">Protuklizna podstava naliježe na kožu</span><i class="bss__dot" data-c="2" style="left:32%;top:40%"></i>
        <span class="bss__lab" data-c="2" style="right:10px;top:35%">Drži se prianjanjem, a ne uskom gumicom</span><i class="bss__dot" data-c="3" style="left:35%;top:88%"></i>
        <span class="bss__lab is-r" data-c="3" style="left:10px;top:66%">Laserski rezan rub nogavice, bez usijecanja</span><svg class="bss__lines" aria-hidden="true" viewBox="0 0 528 660"><polyline points="359.0,171.6 138.0,171.6" fill="none" stroke-linejoin="miter" class="sh"></polyline><polyline points="359.0,171.6 138.0,171.6" fill="none" stroke-linejoin="miter"></polyline><polyline points="169.0,264.0 390.0,264.0" fill="none" stroke-linejoin="miter" class="sh"></polyline><polyline points="169.0,264.0 390.0,264.0" fill="none" stroke-linejoin="miter"></polyline><polyline points="184.8,580.8 184.8,533.4 138.0,486.6" fill="none" stroke-linejoin="miter" class="sh"></polyline><polyline points="184.8,580.8 184.8,533.4 138.0,486.6" fill="none" stroke-linejoin="miter"></polyline></svg></div>

    <div class="bss__vs">
      <div><b>Obično oblikujuće rublje</b>Uska gumica pritišće struk, pa se pojas smota čim sjednete.</div>
      <div><b>Super Stay™</b>Protuklizna podstava drži pojas na mjestu, pa ostaje tamo gdje ste ga namjestili.</div>
    </div><div class="bss__inset"><img alt="" src="<?php echo esc_url( $ntk . 'tk-superstay-detalj.webp' ); ?>" width="300" height="300" loading="lazy" class="bss__inset-img">
<div class="bss__inset-txt"><span class="lab">Savjet za nošenje</span><p><strong>Povucite pojas visoko,</strong> iznad prirodnog struka. Protuklizna podstava ga drži ondje.</p></div>
      </div><figure class="bss__tq">
        <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M4 18v-5.5C4 8.4 6.2 6 10 5.5v2.6C8 8.6 7.2 9.8 7 12h3v6zm10 0v-5.5c0-4.1 2.2-6.5 6-7v2.6c-2 .5-2.8 1.7-3 3.9h3v6z"></path></svg>
        <blockquote>Mogla sam ih namjestiti više i ostale su na mjestu cijeli dan. Čak i uz plesanje cijelu noć.</blockquote><figcaption>Karen M., kupac NORIKS-a, preko naše korisničke podrške</figcaption></figure><div class="bss__after"><p>Ako se smota, obično je veličina premala. <a href="#ntk-fit">Provjerite veličinu</a></p></div><div class="bss__moves">
        <div><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M9 2.5a2 2 0 110 4 2 2 0 010-4zM7.5 8h3l1 5h5v2h-6.6L9.6 11 9 15h2.5l1.5 6.5h-2.2L9.6 17H6.8l.7-9z"></path><rect x="13" y="16" width="7" height="1.6"></rect><rect x="18.4" y="16" width="1.6" height="5.5"></rect></svg><span>Sjedenje</span></div>
        <div><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M5 6a2 2 0 104 0 2 2 0 00-4 0zM8 9l6 4 4-2 1 2-5 3-3-2-2 7H6l2-8z"></path></svg><span>Saginjanje</span></div>
        <div><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 2a2 2 0 110 4 2 2 0 010-4zM10 7h4l2 6-2 1-1-3-1 4 3 7h-3l-2-5-2 5H5l3-7 1-5-2 3-2-1z"></path></svg><span>Hodanje</span></div>
        <div class="ok"><svg viewBox="0 0 24 24" aria-hidden="true"><circle cx="12" cy="12" r="11"></circle><path d="M7 12.5l3.2 3.2L17 9" stroke="#fff" stroke-width="2.6" fill="none"></path></svg><span>Ostaje na mjestu</span></div>
      </div></div>
</section>

<style >
  #ntk-superstay{background:#F4F0EB;color:#222}
  #ntk-superstay .bss__in{max-width:560px;margin:0 auto;padding:0 16px}
  #ntk-superstay .bss__h{font-family:'Lato',sans-serif;font-weight:400;font-size:28px;line-height:1.15;letter-spacing:-.01em;margin:0 0 8px;color:#222;text-transform:none}
  #ntk-superstay .bss__h b{font-weight:900}
  #ntk-superstay .bss__lead{font-family:'DM Sans',sans-serif;font-size:15.5px;line-height:1.45;color:#3a3a3a;margin:0 0 18px}
  #ntk-superstay .bss__fig{position:relative}
  #ntk-superstay .bss__img{width:100%;height:auto;display:block;aspect-ratio:4/5;object-fit:cover;border-radius:0}
  #ntk-superstay .bss__dot{position:absolute;width:12px;height:12px;margin:-6px 0 0 -6px;background:#2E2420;border:2px solid #fff;border-radius:50%;box-shadow:0 0 0 3px rgba(46,36,32,.25)}
  #ntk-superstay .bss__lab{position:absolute;background:#fff;font-family:'DM Sans',sans-serif;font-size:12px;font-weight:700;line-height:1.25;padding:7px 9px;max-width:156px;color:#222}
  #ntk-superstay .bss__lines{position:absolute;inset:0;width:100%;height:100%;pointer-events:none;overflow:visible}
  #ntk-superstay .bss__lines polyline{stroke:#2E2420;stroke-width:1.5}
  #ntk-superstay .bss__lines .sh{stroke:rgba(255,255,255,.85);stroke-width:4}
  #ntk-superstay .bss__fig--lines .bss__dot{z-index:2}#ntk-superstay .bss__lab{max-width:128px}#ntk-superstay .bss__fig--lines .bss__lab{z-index:2;border-left:3px solid #2E2420}
  #ntk-superstay .bss__fig--lines .bss__lab.is-r{border-left:0;border-right:3px solid #2E2420}
  #ntk-superstay .bss__fig--lines .bss__lab.is-v{border-left:0;border-right:0;border-bottom:3px solid #2E2420}
  #ntk-superstay .bss__vs{display:grid;grid-template-columns:1fr 1fr;margin-top:16px;border:1.5px solid #2E2420;background:#fff}
  #ntk-superstay .bss__vs div{padding:12px 12px 13px;font-family:'DM Sans',sans-serif;font-size:13px;line-height:1.35}
  #ntk-superstay .bss__vs div+div{border-left:1.5px solid #2E2420;background:#2E2420;color:#fff}
  #ntk-superstay .bss__vs b{display:block;font-size:12px;letter-spacing:.06em;margin-bottom:4px;font-weight:800;text-transform:uppercase}
  #ntk-superstay .bss__inset{display:grid;grid-template-columns:96px 1fr;gap:12px;align-items:center;margin-top:16px}
  #ntk-superstay .bss__inset-img{width:96px;height:96px;object-fit:cover;display:block}
  #ntk-superstay .bss__inset-txt,#ntk-superstay .bss__inset-txt p{font-family:'DM Sans',sans-serif;font-size:13.5px;line-height:1.4;margin:0}
  #ntk-superstay .bss__inset-txt b,#ntk-superstay .bss__inset-txt strong{font-weight:800}
  #ntk-superstay .bss__inset-txt .lab{display:block;font-size:10.5px;font-weight:800;letter-spacing:.08em;text-transform:uppercase;color:#7a6e64;margin-bottom:3px}
  #ntk-superstay .bss__tq{margin:12px 0 0;background:#fff;border-left:3px solid #2E2420;padding:12px 14px 12px 44px;position:relative}
  #ntk-superstay .bss__tq svg{position:absolute;left:12px;top:12px;width:22px;height:22px;fill:#C6BAAA}
  #ntk-superstay .bss__tq blockquote{margin:0;padding:0;border:0;font-family:'DM Sans',sans-serif;font-size:14.5px;line-height:1.45;font-weight:600;font-style:normal;color:#222}
  #ntk-superstay .bss__tq figcaption{font-family:'DM Sans',sans-serif;font-size:12px;color:#7a6e64;margin-top:6px}
  #ntk-superstay .bss__after,#ntk-superstay .bss__after p{font-family:'DM Sans',sans-serif;font-size:13px;line-height:1.4;margin:12px 0 0;text-align:center}
  #ntk-superstay .bss__after a{color:#222;font-weight:700}
  #ntk-superstay .bss__moves{display:grid;grid-template-columns:repeat(4,1fr);gap:6px;margin-top:16px;text-align:center}
  #ntk-superstay .bss__moves svg{width:26px;height:26px;fill:#2E2420;display:block;margin:0 auto}
  #ntk-superstay .bss__moves .ok svg{fill:#3F5A4A}
  #ntk-superstay .bss__moves span{display:block;font-family:'DM Sans',sans-serif;font-size:12px;font-weight:700;margin-top:4px}
  #ntk-superstay .bss__moves .ok span{color:#3F5A4A}
  /* desktop (Hermes) */
  @media screen and (min-width: 990px){
    #ntk-superstay{padding-top:80px !important;padding-bottom:80px !important}
    #ntk-superstay .bss__in{max-width:1200px;padding:0 48px}
    #ntk-superstay .bss__h{font-size:40px;line-height:1.1;margin-bottom:12px}
    #ntk-superstay .bss__lead{font-size:17px;max-width:520px}
    #ntk-superstay .bss__in{display:grid;grid-template-columns:1fr 1fr;column-gap:80px;grid-template-areas:"fig ." "fig h" "fig lead" "fig vs" "fig inset" "fig tq" "fig moves" "fig after" "fig .";grid-template-rows:1fr auto auto auto auto auto auto auto 1fr}
    #ntk-superstay .bss__tq{grid-area:tq}
    #ntk-superstay .bss__after{grid-area:after;text-align:left}
    #ntk-superstay .bss__fig{grid-area:fig}
    #ntk-superstay .bss__h{grid-area:h}
    #ntk-superstay .bss__lead{grid-area:lead;margin-bottom:28px}
    #ntk-superstay .bss__vs{grid-area:vs;margin-top:0}
    #ntk-superstay .bss__inset{grid-area:inset;margin-top:24px}
    #ntk-superstay .bss__moves{grid-area:moves;margin-top:28px;justify-items:start;text-align:left}
    #ntk-superstay .bss__moves svg{margin:0}
    #ntk-superstay .bss__vs div{padding:18px 18px 20px;font-size:15px}
    #ntk-superstay .bss__vs b{font-size:12.5px}
    #ntk-superstay .bss__inset-txt,#ntk-superstay .bss__inset-txt p{font-size:15px}
    #ntk-superstay .bss__lab{font-size:13.5px;padding:9px 12px;max-width:210px}
    #ntk-superstay .bss__moves span{font-size:13.5px}
  }
</style>
<script>
  (function () {
    var fig = document.querySelector('#ntk-superstay .bss__fig--lines');
    if (!fig || fig.dataset.ready) return; fig.dataset.ready = '1';
    var svg = fig.querySelector('.bss__lines'), NS = 'http://www.w3.org/2000/svg';
    function draw() {
      var f = fig.getBoundingClientRect(); if (!f.width) return;
      svg.setAttribute('viewBox', '0 0 ' + f.width + ' ' + f.height);
      svg.innerHTML = '';
      fig.querySelectorAll('.bss__dot').forEach(function (d) {
        var l = fig.querySelector('.bss__lab[data-c="' + d.dataset.c + '"]'); if (!l) return;
        var dr = d.getBoundingClientRect(), lr = l.getBoundingClientRect();
        var x1 = dr.left + dr.width / 2 - f.left, y1 = dr.top + dr.height / 2 - f.top;
        // Routing (Deniz): only horizontal, vertical or 45-degree segments, never a free angle.
        var L = lr.left - f.left, R = lr.right - f.left, T = lr.top - f.top, B = lr.bottom - f.top, pts;
        var right = L > x1; l.classList.toggle('is-r', !right);
        if (y1 >= T + 4 && y1 <= B - 4) {                       // dot level with the label: one flat line
          pts = [[x1, y1], [right ? L : R, y1]];
        } else if (x1 >= L + 6 && x1 <= R - 6) {                // dot directly above/below: one vertical line
          pts = [[x1, y1], [x1, y1 < T ? T : B]];
        } else {                                                 // elbow: 45 degrees, then flat into the label side
          var x2 = right ? L : R, y2 = y1 < T ? T + 8 : B - 8, dx = x2 - x1, dy = y2 - y1;
          var sx = dx > 0 ? 1 : -1, sy = dy > 0 ? 1 : -1;
          if (Math.abs(dy) <= Math.abs(dx)) pts = [[x1, y1], [x1 + sx * Math.abs(dy), y2], [x2, y2]];
          else pts = [[x1, y1], [x1, y2 - sy * Math.abs(dx)], [x2, y2]];
        }
        l.classList.toggle('is-r', !right); l.classList.toggle('is-v', x1 >= L + 6 && x1 <= R - 6 && !(y1 >= T + 4 && y1 <= B - 4));
        pts = pts.map(function (q) { return q[0].toFixed(1) + ',' + q[1].toFixed(1); }).join(' ');
        [['sh'], ['']].forEach(function (c) {
          var pl = document.createElementNS(NS, 'polyline');
          pl.setAttribute('points', pts); pl.setAttribute('fill', 'none');
          pl.setAttribute('stroke-linejoin', 'miter');
          if (c[0]) pl.setAttribute('class', c[0]); svg.appendChild(pl);
        });
      });
    }
    draw();
    var img = fig.querySelector('img'); if (img && !img.complete) img.addEventListener('load', draw);
    window.addEventListener('resize', draw);
    if (window.ResizeObserver) new ResizeObserver(draw).observe(fig);
  })();
</script>

<!-- bigday -->
<section class="bpf" id="ntk-bigday" style="padding-top:40px;padding-bottom:40px">
  <div class="bpf__in">
    <div class="bpf__head"><h2 class="bpf__h">Za veliki dan <b>i za svaki dan</b></h2><p class="bpf__lead">Toliko udobne da zaboravite da ih nosite – bilo da je vjenčanje ili običan utorak.</p><div class="bpf__split">
          <figure><img alt="" src="<?php echo esc_url( $ntk . 'tk-veliki-dan.webp' ); ?>" width="800" height="1000" loading="lazy"><figcaption>Veliki dan</figcaption></figure>
          <figure><img alt="" src="<?php echo esc_url( $ntk . 'tk-svaki-dan.webp' ); ?>" width="800" height="1000" loading="lazy"><figcaption>Svaki dan</figcaption></figure>
        </div></div>
    <div class="bpf__body"><div class="bpf__stats"><div class="bpf__stat"><b>240 000+</b><span>prodanih komada</span></div><div class="bpf__stat"><b>4 od 10</b><span>kupilo ih je za vjenčanje</span></div><div class="bpf__stat"><b>1 od 4</b><span>kupilo ih je samo za svakodnevnu udobnost i samopouzdanje</span></div></div><figure class="bpf__q">
          <span class="bpf__stars" aria-label="5 zvjezdica"><svg viewBox="0 0 20 20" aria-hidden="true"><path d="M10 1.5l2.6 5.4 5.9.8-4.3 4.1 1 5.8L10 14.8l-5.2 2.8 1-5.8L1.5 7.7l5.9-.8z" fill="#F2B53C"></path></svg><svg viewBox="0 0 20 20" aria-hidden="true"><path d="M10 1.5l2.6 5.4 5.9.8-4.3 4.1 1 5.8L10 14.8l-5.2 2.8 1-5.8L1.5 7.7l5.9-.8z" fill="#F2B53C"></path></svg><svg viewBox="0 0 20 20" aria-hidden="true"><path d="M10 1.5l2.6 5.4 5.9.8-4.3 4.1 1 5.8L10 14.8l-5.2 2.8 1-5.8L1.5 7.7l5.9-.8z" fill="#F2B53C"></path></svg><svg viewBox="0 0 20 20" aria-hidden="true"><path d="M10 1.5l2.6 5.4 5.9.8-4.3 4.1 1 5.8L10 14.8l-5.2 2.8 1-5.8L1.5 7.7l5.9-.8z" fill="#F2B53C"></path></svg><svg viewBox="0 0 20 20" aria-hidden="true"><path d="M10 1.5l2.6 5.4 5.9.8-4.3 4.1 1 5.8L10 14.8l-5.2 2.8 1-5.8L1.5 7.7l5.9-.8z" fill="#F2B53C"></path></svg></span>
          <blockquote>Kupila sam ih da ih nosim ispod svečane haljine na sinovom vjenčanju. Ne samo da su me vitkije oblikovale i nisu se vidjeli nikakvi rubovi, nego su bile i jako udobne! Zaboravila sam da ih uopće nosim!</blockquote>
          <figcaption>Denise H. · Provjereni kupac · vjenčanje</figcaption>
        </figure><figure class="bpf__q">
          <span class="bpf__stars" aria-label="5 zvjezdica"><svg viewBox="0 0 20 20" aria-hidden="true"><path d="M10 1.5l2.6 5.4 5.9.8-4.3 4.1 1 5.8L10 14.8l-5.2 2.8 1-5.8L1.5 7.7l5.9-.8z" fill="#F2B53C"></path></svg><svg viewBox="0 0 20 20" aria-hidden="true"><path d="M10 1.5l2.6 5.4 5.9.8-4.3 4.1 1 5.8L10 14.8l-5.2 2.8 1-5.8L1.5 7.7l5.9-.8z" fill="#F2B53C"></path></svg><svg viewBox="0 0 20 20" aria-hidden="true"><path d="M10 1.5l2.6 5.4 5.9.8-4.3 4.1 1 5.8L10 14.8l-5.2 2.8 1-5.8L1.5 7.7l5.9-.8z" fill="#F2B53C"></path></svg><svg viewBox="0 0 20 20" aria-hidden="true"><path d="M10 1.5l2.6 5.4 5.9.8-4.3 4.1 1 5.8L10 14.8l-5.2 2.8 1-5.8L1.5 7.7l5.9-.8z" fill="#F2B53C"></path></svg><svg viewBox="0 0 20 20" aria-hidden="true"><path d="M10 1.5l2.6 5.4 5.9.8-4.3 4.1 1 5.8L10 14.8l-5.2 2.8 1-5.8L1.5 7.7l5.9-.8z" fill="#F2B53C"></path></svg></span>
          <blockquote>Odlične za svakodnevno nošenje</blockquote>
          <figcaption>Helen W. · Provjereni kupac · svaki dan</figcaption>
        </figure><figure class="bpf__q">
          <span class="bpf__stars" aria-label="5 zvjezdica"><svg viewBox="0 0 20 20" aria-hidden="true"><path d="M10 1.5l2.6 5.4 5.9.8-4.3 4.1 1 5.8L10 14.8l-5.2 2.8 1-5.8L1.5 7.7l5.9-.8z" fill="#F2B53C"></path></svg><svg viewBox="0 0 20 20" aria-hidden="true"><path d="M10 1.5l2.6 5.4 5.9.8-4.3 4.1 1 5.8L10 14.8l-5.2 2.8 1-5.8L1.5 7.7l5.9-.8z" fill="#F2B53C"></path></svg><svg viewBox="0 0 20 20" aria-hidden="true"><path d="M10 1.5l2.6 5.4 5.9.8-4.3 4.1 1 5.8L10 14.8l-5.2 2.8 1-5.8L1.5 7.7l5.9-.8z" fill="#F2B53C"></path></svg><svg viewBox="0 0 20 20" aria-hidden="true"><path d="M10 1.5l2.6 5.4 5.9.8-4.3 4.1 1 5.8L10 14.8l-5.2 2.8 1-5.8L1.5 7.7l5.9-.8z" fill="#F2B53C"></path></svg><svg viewBox="0 0 20 20" aria-hidden="true"><path d="M10 1.5l2.6 5.4 5.9.8-4.3 4.1 1 5.8L10 14.8l-5.2 2.8 1-5.8L1.5 7.7l5.9-.8z" fill="#F2B53C"></path></svg></span>
          <blockquote>Nevjerojatno oblikujuće rublje, materijal prianja uz tijelo i ne smota se, toliko je udobno i lagano da stvarno zaboravite da ga nosite.</blockquote>
          <figcaption>Vicky I. · Provjereni kupac · svaki dan</figcaption>
        </figure><div class="bpf__date" data-bpf-date="" data-ship-days="1" data-days="5">
          <svg viewBox="0 0 28 22" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><path d="M2 4h14v11H2zM16 8h5l4 4v3h-9"></path><circle cx="7" cy="17" r="2.2"></circle><circle cx="20" cy="17" r="2.2"></circle></svg>
          <span data-l="">Naručite sada i stiže do [DATE]</span>
        </div><p class="bpf__foot">Komadi: podaci trgovine, broj prodanih kratkih hlačica. Postoci: anketa nakon kupnje, 15 000+ kupaca.</p></div>
  </div>
</section>

<style >
  #ntk-bigday{background:#FFFFFF;color:#222}
  #ntk-bigday.bpf--dark{color:#fff}
  #ntk-bigday .bpf__in{max-width:560px;margin:0 auto;padding:0 16px}
  #ntk-bigday .bpf__h{font-family:'Lato',sans-serif;font-weight:400;font-size:28px;line-height:1.15;letter-spacing:-.01em;margin:0 0 8px;color:inherit;text-transform:none;text-wrap:balance}
  #ntk-bigday .bpf__h strong,#ntk-bigday .bpf__h b{font-weight:900}
  #ntk-bigday .bpf__lead{font-family:'DM Sans',sans-serif;font-size:15.5px;line-height:1.45;color:#3a3a3a;margin:0 0 18px}
  #ntk-bigday.bpf--dark .bpf__lead{color:#E9E2DA}
  #ntk-bigday .bpf__img{width:100%;height:auto;aspect-ratio:4/3;object-fit:cover;object-position:50% 30%;display:block;margin:0 0 14px;border-radius:0}
  #ntk-bigday .bpf__split{display:grid;grid-template-columns:minmax(0,1fr) minmax(0,1fr);gap:6px;margin:0 0 14px}
  #ntk-bigday .bpf__split figure{margin:0;position:relative}
  #ntk-bigday .bpf__split img{width:100%;height:auto;aspect-ratio:4/5;object-fit:cover;display:block;border-radius:0}
  #ntk-bigday .bpf__split figcaption{position:absolute;left:8px;bottom:8px;background:#fff;color:#2E2420;font-family:'DM Sans',sans-serif;font-size:11px;font-weight:800;letter-spacing:.08em;text-transform:uppercase;padding:6px 9px;line-height:1}
  #ntk-bigday .bpf__stats{display:grid;grid-template-columns:minmax(0,1fr) minmax(0,1fr);gap:10px;margin:0 0 16px}
  #ntk-bigday .bpf__stat:first-child:nth-last-child(odd){grid-column:1/-1}
  #ntk-bigday .bpf__stat{border:1.5px solid #E4DDD3;padding:12px;font-family:'DM Sans',sans-serif;min-width:0;overflow-wrap:anywhere}
  #ntk-bigday .bpf__stat b{display:block;font-family:'Lato',sans-serif;font-weight:900;font-size:30px;line-height:1;color:#2E2420;margin-bottom:6px}
  #ntk-bigday .bpf__stat span{display:block;font-size:13px;line-height:1.3;color:#3a3a3a}
  #ntk-bigday.bpf--dark .bpf__stats{gap:1px;background:rgba(255,255,255,.18);border:1px solid rgba(255,255,255,.18)}
  #ntk-bigday.bpf--dark .bpf__stat{border:0;background:#FFFFFF;padding:16px 12px}
  #ntk-bigday.bpf--dark .bpf__stat b{color:#fff;font-size:clamp(24px,8vw,32px)}
  #ntk-bigday.bpf--dark .bpf__stat span{color:#E9E2DA}
  #ntk-bigday .bpf__q{margin:0 0 14px;border-left:3px solid #C6BAAA;padding:2px 0 2px 12px}
  #ntk-bigday .bpf__stars{display:flex;gap:2px;margin-bottom:4px}
  #ntk-bigday .bpf__stars svg{width:14px;height:14px}
  #ntk-bigday .bpf__q blockquote{margin:0;font-family:'DM Sans',sans-serif;font-size:14px;line-height:1.45;font-weight:500;color:inherit;padding:0;border:0;font-style:normal}
  #ntk-bigday .bpf__q figcaption{font-family:'DM Sans',sans-serif;font-size:12px;color:#7a6e64;margin-top:4px}
  #ntk-bigday.bpf--dark .bpf__q figcaption{color:#B9AEA4}
  #ntk-bigday .bpf__date{display:flex;gap:10px;align-items:center;justify-content:center;background:#F4F0EB;border:1.5px solid #D9CFC3;color:#2E2420;padding:11px 10px;font-family:'DM Sans',sans-serif;font-size:14.5px;line-height:1.3;text-align:center;margin-top:4px}
  #ntk-bigday .bpf__date svg{width:25px;height:19px;flex:none}
  #ntk-bigday .bpf__date b{font-weight:800}
  #ntk-bigday .bpf__foot{font-family:'DM Sans',sans-serif;font-size:11px;line-height:1.4;color:#7a6e64;margin:10px 0 0}
  #ntk-bigday.bpf--dark .bpf__foot{color:#B9AEA4}
  /* desktop (Hermes) */
  @media screen and (min-width: 990px){
    #ntk-bigday{padding-top:80px !important;padding-bottom:80px !important}
    #ntk-bigday .bpf__in{max-width:1200px;padding:0 48px;display:grid;grid-template-columns:5fr 7fr;column-gap:80px;align-items:center}
    #ntk-bigday .bpf__h{font-size:40px;line-height:1.1;margin-bottom:12px}
    #ntk-bigday .bpf__lead{font-size:17px;margin-bottom:24px}
    #ntk-bigday .bpf__img,#ntk-bigday .bpf__split{margin:0}
    #ntk-bigday .bpf__split figcaption{font-size:12px;left:12px;bottom:12px}
    #ntk-bigday .bpf__stat b{font-size:40px}
    #ntk-bigday .bpf__stat span{font-size:15px}
    #ntk-bigday .bpf__q blockquote{font-size:16px}
    #ntk-bigday.bpf--dark .bpf__stats{grid-template-columns:repeat(4,minmax(0,1fr))}
    #ntk-bigday.bpf--dark .bpf__in{grid-template-columns:4fr 8fr}
  }
</style>

<script>
  (function () {
    var el = document.querySelector('#ntk-bigday [data-bpf-date]');
    if (!el || el.dataset.ready) return;
    el.dataset.ready = '1';
    function wd(d, n) { while (n > 0) { d.setDate(d.getDate() + 1); var w = d.getDay(); if (w && w < 6) n--; } return d; }
    var arr = wd(wd(new Date(), +el.dataset.shipDays || 2), +el.dataset.days || 7);
    var t = el.querySelector('[data-l]');
    t.innerHTML = t.textContent.replace('[DATE]', '<b>' + arr.toLocaleDateString('hr-HR', { weekday: 'long', day: 'numeric', month: 'long' }) + '</b>');
  })();
</script>

<!-- benefits -->
<section class="bbc" id="ntk-benefits" style="padding-top:40px;padding-bottom:40px">
  <div class="bbc__in"><h2 class="bbc__h">Odjenite haljinu <b>koju ste dosad izbjegavali</b></h2><p class="bbc__lead">Uske haljine, suknje, poslovne hlače. Jedan komad zaglađuje, ostaje na mjestu i sprječava trljanje bedara.</p><div class="bbc__grid"><div class="bbc__card"><img src="<?php echo esc_url( $ntk . 'tk-trbuh.webp' ); ?>" alt="Zaglađuje trbuh" width="700" height="875" loading="lazy">
<h3 class="bbc__t">Zaglađuje trbuh</h3><p class="bbc__p">Umjerena kompresija izravnava trbuh i struk, a ne steže.</p></div><div class="bbc__card"><img src="<?php echo esc_url( $ntk . 'tk-bedra.webp' ); ?>" alt="Bez trljanja bedara" width="700" height="875" loading="lazy">
<h3 class="bbc__t">Bez trljanja bedara</h3><p class="bbc__p">Nogavice do sredine bedra pokrivaju mjesto gdje se bedra dodiruju, pa je u haljini udobno.</p></div><div class="bbc__card"><img src="<?php echo esc_url( $ntk . 'tk-podizanje.webp' ); ?>" alt="Podiže, ne spljošti" width="700" height="875" loading="lazy">
<h3 class="bbc__t">Podiže, ne spljošti</h3><p class="bbc__p">Nabori na stražnjoj strani oblikuju stražnjicu umjesto da je spljošte.</p></div><div class="bbc__card"><img src="<?php echo esc_url( $ntk . 'tk-celulit.webp' ); ?>" alt="Celulit se ne vidi" width="700" height="875" loading="lazy">
<h3 class="bbc__t">Celulit se ne vidi</h3><p class="bbc__p">Zaglađuje bokove i bedra, pa se udubine ne vide kroz odjeću.</p></div></div>
  </div>
</section>

<style >
  #ntk-benefits{background:#F4F0EB;color:#222}
  #ntk-benefits .bbc__in{max-width:560px;margin:0 auto;padding:0 16px}
  #ntk-benefits .bbc__h{font-family:'Lato',sans-serif;font-weight:400;font-size:28px;line-height:1.15;letter-spacing:-.01em;margin:0 0 8px;color:#222;text-transform:none;text-wrap:balance}
  #ntk-benefits .bbc__h strong,#ntk-benefits .bbc__h b{font-weight:900}
  #ntk-benefits .bbc__lead{font-family:'DM Sans',sans-serif;font-size:15.5px;line-height:1.45;color:#3a3a3a;margin:0 0 18px}
  #ntk-benefits .bbc__grid{display:grid;grid-template-columns:1fr 1fr;gap:16px 10px}
  #ntk-benefits .bbc__card img,#ntk-benefits .bbc__card svg{width:100%;height:auto;aspect-ratio:4/5;object-fit:cover;display:block;margin:0 0 10px;border-radius:0}
  #ntk-benefits .bbc__t{font-family:'Lato',sans-serif;font-weight:900;font-size:16px;line-height:1.2;margin:0 0 4px;color:#222;text-transform:none;letter-spacing:0;text-wrap:balance}
  #ntk-benefits .bbc__p{font-family:'DM Sans',sans-serif;font-size:13px;line-height:1.4;color:#3a3a3a;margin:0}
  /* desktop (Hermes) */
  @media screen and (min-width: 990px){
    #ntk-benefits{padding-top:80px !important;padding-bottom:80px !important}
    #ntk-benefits .bbc__in{max-width:1200px;padding:0 48px}
    #ntk-benefits .bbc__h{font-size:40px;line-height:1.1;margin-bottom:12px}
    #ntk-benefits .bbc__lead{font-size:17px;max-width:520px}
    #ntk-benefits .bbc__lead{margin-bottom:36px}
    #ntk-benefits .bbc__grid{grid-template-columns:repeat(4,minmax(0,1fr));gap:24px}
    #ntk-benefits .bbc__card img,#ntk-benefits .bbc__card svg{margin-bottom:16px}
    #ntk-benefits .bbc__t{font-size:19px;margin-bottom:6px}
    #ntk-benefits .bbc__p{font-size:15px;line-height:1.5}
  }
</style>

<!-- fitfinder -->
<section class="bff" id="ntk-fit" style="padding-top:40px;padding-bottom:40px">
  <div class="bff__in" id="ntk-fitfinder">
    <div class="bff__head"><h2 class="bff__h">Pronađite svoju veličinu <b>za 10 sekundi</b></h2><p class="bff__lead">Pronađite svoju uobičajenu veličinu hlača. Ako ste između dvije veličine ili su vam struk i bokovi u različitim veličinama, uzmite jednu veličinu veću.</p><div class="bff__rule"><svg viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M10 16V4M5 9l5-5 5 5"></path></svg><div><p><strong>Ako niste sigurni, uzmite veću.</strong> Većina zamjena je za veću veličinu, a premale hlačice glavni su razlog zašto se oblikujuće rublje smota.</p></div></div></div>
    <div class="bff__body">
      <div class="bff__scroll"><table class="bff__tbl">
        <thead><tr><th>Veličina</th><th>EU veličina</th><th>UK / AU</th><th>Struk (cm)</th><th>Bokovi (cm)</th><th>Duljina nogavice</th></tr></thead>
        <tbody><tr><td>S</td><td>34–36</td><td>8–10</td><td>69–71</td><td>94–97</td><td>39 cm</td></tr><tr><td>M</td><td>38–40</td><td>12–14</td><td>72–77</td><td>98–102</td><td>41 cm</td></tr><tr><td>L</td><td>40–42</td><td>14–16</td><td>79–81</td><td>103–107</td><td>43 cm</td></tr><tr><td>XL</td><td>44–46</td><td>18–20</td><td>83–88</td><td>108–113</td><td>45 cm</td></tr><tr><td>XXL</td><td>46–48</td><td>20–22</td><td>89–94</td><td>114–119</td><td>47 cm</td></tr></tbody>
      </table></div>
      <div class="bff__meter">
        <span class="bff__lab">Kompresija</span>
        <div class="bff__tr"><i></i><i class="on"></i><i></i></div>
        <div class="bff__lb"><span>Lagana</span><span class="on">Umjerena</span><span>Jaka</span></div><p class="bff__txt">Zaglađuje trbuh i bedra, a i dalje možete sjediti, jesti i disati.</p></div>
      <div class="bff__tiles"><div><b>Naša manekenka</b>Visoka 175 cm, nosi veličinu M. Duljina = od vrha pojasa do ruba nogavice.</div><div><b>Pogrešna veličina?</b>Zamijenite je u roku od 30 dana. Poštarinu za povrat plaćate sami.</div></div>
    </div>
  </div>
</section>

<style >
  #ntk-fit{background:#FFFFFF;color:#222;scroll-margin-top:80px}
  #ntk-fitfinder{max-width:560px;margin:0 auto;padding:0 16px}
  #ntk-fitfinder .bff__h{font-family:'Lato',sans-serif;font-weight:400;font-size:28px;line-height:1.15;letter-spacing:-.01em;margin:0 0 8px;color:#222;text-transform:none;text-wrap:balance}
  #ntk-fitfinder .bff__h strong,#ntk-fitfinder .bff__h b{font-weight:900}
  #ntk-fitfinder .bff__lead{font-family:'DM Sans',sans-serif;font-size:15.5px;line-height:1.45;color:#3a3a3a;margin:0 0 16px}
  #ntk-fitfinder .bff__scroll{overflow-x:auto;-webkit-overflow-scrolling:touch;max-width:100%;min-width:0}
  #ntk-fitfinder .bff__body{min-width:0;max-width:100%}
  #ntk-fitfinder .bff__tbl{width:100%;border-collapse:collapse;table-layout:auto;font-family:'DM Sans',sans-serif;font-size:12.5px;text-align:center;font-variant-numeric:tabular-nums}
  #ntk-fitfinder .bff__tbl th{font-size:9.5px;letter-spacing:.04em;font-weight:800;color:#7a6e64;text-transform:uppercase;padding:7px 3px;border-bottom:1.5px solid #222;line-height:1.2;vertical-align:bottom}
    #ntk-fitfinder .bff__tbl td{padding:9px 3px;border-bottom:1px solid #E4DDD3;white-space:nowrap}
  #ntk-fitfinder .bff__tbl td:first-child{font-weight:800}
  #ntk-fitfinder .bff__rule{display:flex;gap:10px;background:#2E2420;color:#fff;padding:12px;margin:0 0 16px;font-family:'DM Sans',sans-serif;font-size:13.5px;line-height:1.4}
  #ntk-fitfinder .bff__rule svg{width:18px;height:18px;flex:none;margin-top:1px}
  #ntk-fitfinder .bff__rule p{margin:0}
  #ntk-fitfinder .bff__rule b,#ntk-fitfinder .bff__rule strong{font-weight:800}
  #ntk-fitfinder .bff__meter{margin-top:18px;font-family:'DM Sans',sans-serif}
  #ntk-fitfinder .bff__lab{font-size:11px;font-weight:800;letter-spacing:.06em;text-transform:uppercase;color:#7a6e64}
  #ntk-fitfinder .bff__tr{display:grid;grid-template-columns:repeat(3,1fr);gap:3px;margin:8px 0 6px}
  #ntk-fitfinder .bff__tr i{height:8px;background:#E4DDD3}
  #ntk-fitfinder .bff__tr i.on{background:#2E2420}
  #ntk-fitfinder .bff__lb{display:grid;grid-template-columns:repeat(3,1fr);font-size:11px;font-weight:700;color:#7a6e64;text-align:center}
  #ntk-fitfinder .bff__lb .on{color:#222}
  #ntk-fitfinder .bff__txt{font-size:13px;line-height:1.4;color:#3a3a3a;margin:8px 0 0}
  #ntk-fitfinder .bff__tiles{display:grid;grid-template-columns:1fr 1fr;gap:10px;margin-top:14px}
  #ntk-fitfinder .bff__tiles div{background:#F4F0EB;padding:10px;font-family:'DM Sans',sans-serif;font-size:12.5px;line-height:1.35}
  #ntk-fitfinder .bff__tiles b{display:block;font-size:10.5px;font-weight:800;letter-spacing:.08em;text-transform:uppercase;color:#7a6e64;margin-bottom:3px}
  /* desktop (Hermes) */
  @media screen and (min-width: 990px){
    #ntk-fit{padding-top:80px !important;padding-bottom:80px !important}
    #ntk-fitfinder{max-width:1200px;padding:0 48px;display:grid;grid-template-columns:5fr 7fr;column-gap:80px;align-items:center}
    #ntk-fitfinder .bff__h{font-size:40px;line-height:1.1;margin-bottom:12px}
    #ntk-fitfinder .bff__lead{font-size:17px}
    #ntk-fitfinder .bff__tbl{font-size:15px}
    #ntk-fitfinder .bff__tbl th{font-size:11px}
    #ntk-fitfinder .bff__tbl th:first-child,#ntk-fitfinder .bff__tbl td:first-child{width:64px}
    #ntk-fitfinder .bff__rule{font-size:15px;padding:16px}
    #ntk-fitfinder .bff__txt,#ntk-fitfinder .bff__tiles div{font-size:14.5px}
  }
</style>

<!-- chooser -->
<section class="bch" id="ntk-chooser" style="padding-top:40px;padding-bottom:40px">
  <div class="bch__in">
    <h2 class="bch__h"><b>Kratke hlačice</b> ili <b>tange?</b></h2><p class="bch__lead">Isti pojas, isto zaglađivanje. Odaberite ono što odgovara odjeći koju nosite.</p><div class="bch__grid"><div class="bch__card is-hl">
          <div class="bch__ph"><img src="<?php echo esc_url( $ntk . 'tk-kratke.webp' ); ?>" alt="Kratke hlačice" width="800" height="1000" loading="lazy">
<span class="bch__tag">Ovdje ste</span></div>
          <div class="bch__body">
            <h3 class="bch__t">Kratke hlačice</h3><div class="bch__for">Za haljine i suknje</div><ul class="bch__ul"><li>Sprječavaju trljanje bedara</li><li>Zaglađuju trbuh i bedra</li></ul><button type="button" class="bch__cta" onclick="var t=document.getElementById('bundle-selector')||document.querySelector('form.cart');if(t){t.scrollIntoView({behavior:matchMedia('(prefers-reduced-motion: reduce)').matches?'auto':'smooth',block:'start'});}">Odaberite paket</button></div>
        </div><div class="bch__card">
          <div class="bch__ph"><img src="<?php echo esc_url( $ntk . 'tk-tange.webp' ); ?>" alt="Tange visokog struka" width="800" height="1000" loading="lazy">
</div>
          <div class="bch__body">
            <h3 class="bch__t">Tange visokog struka</h3><div class="bch__for">Za tajice i uske haljine</div><ul class="bch__ul"><li>Bez vidljivih rubova, ni sprijeda ni straga</li><li>Upijajući umetak, osjećaj svježine</li></ul><button type="button" class="bch__cta bch__cta--soon" disabled="" aria-disabled="true">Uskoro dostupno</button></div>
        </div></div><div class="bch__both">
        <b>Oboje ima</b>
        <ul><li>Super Stay™ protuklizni pojas</li><li>Umjerenu kompresiju trbuha</li><li>Laserski rezane rubove, bez tragova</li></ul>
      </div></div>
</section>

<style >
  #ntk-chooser{background:#FFFFFF;color:#222}
  #ntk-chooser .bch__in{max-width:560px;margin:0 auto;padding:0 16px}
  #ntk-chooser .bch__h{font-family:'Lato',sans-serif;font-weight:400;font-size:28px;line-height:1.15;letter-spacing:-.01em;margin:0 0 8px;color:#222;text-transform:none}
  #ntk-chooser .bch__h strong,#ntk-chooser .bch__h b{font-weight:900}
  #ntk-chooser .bch__h p{margin:0;font:inherit}
  #ntk-chooser .bch__lead{font-family:'DM Sans',sans-serif;font-size:15.5px;line-height:1.45;color:#3a3a3a;margin:0 0 18px}
  #ntk-chooser .bch__grid{display:grid;grid-template-columns:1fr 1fr;gap:10px}
  #ntk-chooser .bch__card{border:1.5px solid #E4DDD3;background:#fff;display:flex;flex-direction:column;border-radius:0}
  #ntk-chooser .bch__card.is-hl{border-color:#2E2420}
  #ntk-chooser .bch__ph{position:relative}
  #ntk-chooser .bch__ph img,#ntk-chooser .bch__ph svg{width:100%;height:auto;aspect-ratio:4/5;object-fit:cover;display:block}
  #ntk-chooser .bch__tag{position:absolute;left:0;top:0;background:#2E2420;color:#fff;font-family:'DM Sans',sans-serif;font-size:11px;font-weight:700;padding:5px 8px;letter-spacing:.02em}
  #ntk-chooser .bch__body{padding:12px 10px;display:flex;flex-direction:column;gap:8px;flex:1}
  #ntk-chooser .bch__t{font-family:'Lato',sans-serif;font-weight:900;font-size:17px;line-height:1.15;margin:0;color:#222;text-wrap:balance;text-transform:none;letter-spacing:0}
  #ntk-chooser .bch__for{font-family:'DM Sans',sans-serif;font-size:12px;font-weight:700;color:#6b5d52}
  #ntk-chooser .bch__ul,#ntk-chooser .bch__both ul{list-style:none;margin:0 0 16px;padding:0;display:flex;flex-direction:column;gap:6px}
  #ntk-chooser .bch__ul li,#ntk-chooser .bch__both li{font-family:'DM Sans',sans-serif;font-size:13px;line-height:1.3;padding-left:16px;position:relative;text-wrap:pretty;margin:0}
  #ntk-chooser .bch__ul li:before,#ntk-chooser .bch__both li:before{content:"";position:absolute;left:0;top:5px;width:8px;height:8px;background:#2E2420}
  #ntk-chooser .bch__cta{margin-top:auto;display:block;width:100%;text-align:center;font-family:'DM Sans',sans-serif;font-size:13px;font-weight:700;line-height:1.2;padding:11px 6px;border:1.5px solid #2E2420;color:#2E2420;background:#fff;text-decoration:none;border-radius:0;cursor:pointer}
  #ntk-chooser .is-hl .bch__cta{background:#2E2420;color:#fff}
  #ntk-chooser .bch__cta--soon,#ntk-chooser .bch__cta--soon:hover{background:#F4F0EB;border-color:#D9CFC3;color:#7a6e64;cursor:default;pointer-events:none}
  #ntk-chooser .bch__tag--soon{background:#F4F0EB;color:#2E2420}
  #ntk-chooser .bch__both{margin-top:12px;background:#F4F0EB;padding:12px}
  #ntk-chooser .bch__both b{display:block;font-family:'DM Sans',sans-serif;font-size:13px;margin-bottom:6px}
  #ntk-chooser .bch__both ul{margin:0;gap:5px}
  /* desktop (Hermes) */
  @media screen and (min-width: 990px){
    #ntk-chooser{padding-top:80px !important;padding-bottom:80px !important}
    #ntk-chooser .bch__in{max-width:1200px;padding:0 48px}
    #ntk-chooser .bch__h{font-size:40px;line-height:1.1;margin-bottom:12px}
    #ntk-chooser .bch__lead{font-size:17px;max-width:520px}
    #ntk-chooser .bch__grid{gap:24px}
    #ntk-chooser .bch__card{flex-direction:row}
    #ntk-chooser .bch__ph{flex:0 0 44%}
    #ntk-chooser .bch__ph img,#ntk-chooser .bch__ph svg{height:100%;aspect-ratio:auto;min-height:320px}
    #ntk-chooser .bch__body{padding:24px 22px;gap:10px}
    #ntk-chooser .bch__t{font-size:22px}
    #ntk-chooser .bch__for{font-size:13.5px}
    #ntk-chooser .bch__ul li{font-size:15px}
    #ntk-chooser .bch__cta{font-size:14px;padding:14px 10px}
    #ntk-chooser .bch__both{margin-top:24px;padding:18px 24px;display:flex;align-items:center;gap:32px}
    #ntk-chooser .bch__both b{margin:0;font-size:14px;white-space:nowrap}
    #ntk-chooser .bch__both ul{flex-direction:row;flex-wrap:wrap;gap:8px 32px}
    #ntk-chooser .bch__both li{font-size:15px}
  }
</style>

<!-- compare -->
<section class="bcm" id="ntk-compare" style="padding-top:40px;padding-bottom:40px">
  <div class="bcm__in"><h2 class="bcm__h">Nije svako oblikujuće rublje <b>jednako izrađeno</b></h2><div class="bcm__tb" role="table">
      <div class="bcm__hd" role="row">
        <div role="columnheader"></div>
        <div class="u" role="columnheader">NORIKS</div>
        <div class="t" role="columnheader">Tipično premium oblikujuće rublje</div>
      </div><div class="bcm__r" role="row">
          <div class="l" role="cell">Pojas</div>
          <div class="u" role="cell"><svg viewBox="0 0 16 16" class="i" aria-hidden="true"><circle cx="8" cy="8" r="8" fill="#2E2420"></circle><path d="M4.5 8.3l2.2 2.2L11.5 5.7" stroke="#fff" stroke-width="1.8" fill="none"></path></svg><span>S protukliznom podstavom, ostaje na mjestu</span></div>
          <div class="t" role="cell"><svg viewBox="0 0 16 16" class="i" aria-hidden="true"><circle cx="8" cy="8" r="7.2" fill="none" stroke="#B9AFA4" stroke-width="1.4"></circle><path d="M5.5 5.5l5 5M10.5 5.5l-5 5" stroke="#B9AFA4" stroke-width="1.5"></path></svg><span>Samo gumica, smota se</span></div>
        </div><div class="bcm__r" role="row">
          <div class="l" role="cell">Rubovi nogavica</div>
          <div class="u" role="cell"><svg viewBox="0 0 16 16" class="i" aria-hidden="true"><circle cx="8" cy="8" r="8" fill="#2E2420"></circle><path d="M4.5 8.3l2.2 2.2L11.5 5.7" stroke="#fff" stroke-width="1.8" fill="none"></path></svg><span>Laserski rezani</span></div>
          <div class="t" role="cell"><svg viewBox="0 0 16 16" class="i" aria-hidden="true"><circle cx="8" cy="8" r="7.2" fill="none" stroke="#B9AFA4" stroke-width="1.4"></circle><path d="M5.5 5.5l5 5M10.5 5.5l-5 5" stroke="#B9AFA4" stroke-width="1.5"></path></svg><span>Tanki prošiveni šavovi</span></div>
        </div><div class="bcm__r" role="row">
          <div class="l" role="cell">Stražnji dio</div>
          <div class="u" role="cell"><svg viewBox="0 0 16 16" class="i" aria-hidden="true"><circle cx="8" cy="8" r="8" fill="#2E2420"></circle><path d="M4.5 8.3l2.2 2.2L11.5 5.7" stroke="#fff" stroke-width="1.8" fill="none"></path></svg><span>S naborima, podiže</span></div>
          <div class="t" role="cell"><svg viewBox="0 0 16 16" class="i" aria-hidden="true"><circle cx="8" cy="8" r="7.2" fill="none" stroke="#B9AFA4" stroke-width="1.4"></circle><path d="M5.5 5.5l5 5M10.5 5.5l-5 5" stroke="#B9AFA4" stroke-width="1.5"></path></svg><span>Ravan, spljošti</span></div>
        </div><div class="bcm__r" role="row">
          <div class="l" role="cell">Stezanje</div>
          <div class="u" role="cell"><svg viewBox="0 0 16 16" class="i" aria-hidden="true"><circle cx="8" cy="8" r="8" fill="#2E2420"></circle><path d="M4.5 8.3l2.2 2.2L11.5 5.7" stroke="#fff" stroke-width="1.8" fill="none"></path></svg><span>Umjereno, cijeli dan</span></div>
          <div class="t" role="cell"><svg viewBox="0 0 16 16" class="i" aria-hidden="true"><circle cx="8" cy="8" r="7.2" fill="none" stroke="#B9AFA4" stroke-width="1.4"></circle><path d="M5.5 5.5l5 5M10.5 5.5l-5 5" stroke="#B9AFA4" stroke-width="1.5"></path></svg><span>Preslabo ili prečvrsto</span></div>
        </div><div class="bcm__r" role="row">
          <div class="l" role="cell">Duljina</div>
          <div class="u" role="cell"><svg viewBox="0 0 16 16" class="i" aria-hidden="true"><circle cx="8" cy="8" r="8" fill="#2E2420"></circle><path d="M4.5 8.3l2.2 2.2L11.5 5.7" stroke="#fff" stroke-width="1.8" fill="none"></path></svg><span>Do sredine bedra, bez trljanja</span></div>
          <div class="t" role="cell"><svg viewBox="0 0 16 16" class="i" aria-hidden="true"><circle cx="8" cy="8" r="7.2" fill="none" stroke="#B9AFA4" stroke-width="1.4"></circle><path d="M5.5 5.5l5 5M10.5 5.5l-5 5" stroke="#B9AFA4" stroke-width="1.5"></path></svg><span>Često prekratko</span></div>
        </div><div class="bcm__r" role="row">
          <div class="l" role="cell">Cijena</div>
          <div class="u" role="cell"><svg viewBox="0 0 16 16" class="i" aria-hidden="true"><circle cx="8" cy="8" r="8" fill="#2E2420"></circle><path d="M4.5 8.3l2.2 2.2L11.5 5.7" stroke="#fff" stroke-width="1.8" fill="none"></path></svg><span>40,95 €</span></div>
          <div class="t" role="cell"><svg viewBox="0 0 16 16" class="i" aria-hidden="true"><circle cx="8" cy="8" r="7.2" fill="none" stroke="#B9AFA4" stroke-width="1.4"></circle><path d="M5.5 5.5l5 5M10.5 5.5l-5 5" stroke="#B9AFA4" stroke-width="1.5"></path></svg><span>60,99–69,99 €</span></div>
        </div></div>
  </div>
</section>

<style >
  #ntk-compare{background:#FFFFFF;color:#222}
  #ntk-compare .bcm__in{max-width:560px;margin:0 auto;padding:0 16px}
  #ntk-compare .bcm__h{font-family:'Lato',sans-serif;font-weight:400;font-size:28px;line-height:1.15;letter-spacing:-.01em;margin:0 0 18px;color:#222;text-transform:none;text-wrap:balance}
  #ntk-compare .bcm__h strong,#ntk-compare .bcm__h b{font-weight:900}
  #ntk-compare .bcm__tb{display:grid;grid-template-columns:auto minmax(0,1fr) minmax(0,1fr)}
  #ntk-compare .bcm__hd,#ntk-compare .bcm__r{display:contents}
  #ntk-compare .bcm__hd>div{min-width:0;overflow-wrap:break-word;hyphens:auto;display:flex;align-items:flex-end;font-family:'Lato',sans-serif;font-weight:900;font-size:14px;padding:12px 10px;line-height:1.2}
  #ntk-compare .bcm__hd .u{background:#2E2420;color:#fff}
  #ntk-compare .bcm__hd .t{color:#6b5d52;font-weight:700}
  #ntk-compare .bcm__r>div{min-width:0;overflow-wrap:break-word;hyphens:auto;padding:12px 10px;font-family:'DM Sans',sans-serif;font-size:13px;line-height:1.3;border-top:1px solid #E4DDD3}
  #ntk-compare .bcm__r:last-child>div{border-bottom:1px solid #E4DDD3}
  #ntk-compare .bcm__r .l{font-size:12px;font-weight:700;color:#6b5d52;padding-left:0;white-space:nowrap;hyphens:none}
  #ntk-compare .bcm__r .u{background:#F4F0EB;font-weight:700;display:flex;gap:7px;align-items:flex-start;color:#222}
  #ntk-compare .bcm__r .t{color:#6b5d52;display:flex;gap:7px;align-items:flex-start}
  #ntk-compare .i{width:16px;height:16px;flex:none;margin-top:1px}
  /* Large text / zoomed phones: row label moves above its two cells so each value gets half the width. */
  #ntk-compare .bcm__in{container-type:inline-size}
  @container (max-width: 330px){
    #ntk-compare .bcm__tb{grid-template-columns:minmax(0,1fr) minmax(0,1fr)}
    #ntk-compare .bcm__hd>div:first-child{display:none}
    #ntk-compare .bcm__r .l{grid-column:1/-1;padding:10px 0 2px;border-bottom:0}
    #ntk-compare .bcm__r .l + div,#ntk-compare .bcm__r .l + div + div{border-top:0}
  }
  /* desktop (Hermes) */
  @media screen and (min-width: 990px){
    #ntk-compare{padding-top:80px !important;padding-bottom:80px !important}
    #ntk-compare .bcm__in{max-width:960px;padding:0 48px;container-type:normal}
    #ntk-compare .bcm__h{font-size:40px;line-height:1.1;margin:0 0 32px;text-align:center}
    #ntk-compare .bcm__hd>div{font-size:17px;padding:16px 18px}
    #ntk-compare .bcm__r>div{font-size:15.5px;padding:16px 18px}
    #ntk-compare .bcm__r .l{font-size:13.5px;padding-left:0;padding-right:24px}
    #ntk-compare .i{width:18px;height:18px}
  }
</style>

<!-- offer -->
<section class="bof" id="ntk-offer" style="padding-top:40px;padding-bottom:40px">
  <div class="bof__in">
    <div class="bof__head"><h2 class="bof__h">Većina žena uzme <b>2+</b></h2><p class="bof__lead">Jedne nosite, druge su u pranju. Kombinirajte boje.</p></div>
    <div class="bof__box">
      <div class="bof__card"><img src="<?php echo esc_url( $ntk . 'tk-paket-2.webp' ); ?>" alt="2x kom" width="240" height="240" loading="lazy" class="bof__img"><div>
          <strong>2x kom</strong>
          <small>29,00 € po komadu</small>
          <div class="bof__p">58,00 €<s>82,00 €</s><i>UŠTEDA 29 %</i></div>
        </div>
      </div>
      <button type="button" class="bof__btn" data-tier="2">Odaberite paket</button>
      <p class="bof__line" data-bof-date="" data-ship-days="1" data-days="5">Stiže do [DATE] · zamjena u roku od 30 dana</p>
    </div>
  </div>
</section>

<style >
  #ntk-offer{background:#2E2420;color:#fff}
  #ntk-offer .bof__in{max-width:560px;margin:0 auto;padding:0 16px}
  #ntk-offer .bof__h{font-family:'Lato',sans-serif;font-weight:400;font-size:28px;line-height:1.15;letter-spacing:-.01em;margin:0 0 8px;color:#fff;text-transform:none}
  #ntk-offer .bof__h strong,#ntk-offer .bof__h b{font-weight:900}
  #ntk-offer .bof__lead{font-family:'DM Sans',sans-serif;font-size:15.5px;line-height:1.45;color:#E9E2DA;margin:0 0 18px}
  #ntk-offer .bof__card{display:flex;gap:12px;align-items:center;background:#fff;color:#222;padding:12px;margin-bottom:12px;font-family:'DM Sans',sans-serif}
  #ntk-offer .bof__img{width:84px;height:84px;object-fit:cover;display:block;flex:none}
  #ntk-offer .bof__card strong{display:block;font-size:15.5px;font-weight:800;letter-spacing:-.01em}
  #ntk-offer .bof__card small{display:block;font-size:12.5px;color:#5b5b5b;margin-top:2px}
  #ntk-offer .bof__p{margin-top:6px;font-size:16px;font-weight:800}
  #ntk-offer .bof__p s{font-size:12px;color:#999;font-weight:400;margin-left:6px}
  #ntk-offer .bof__p i{display:inline-block;font-style:normal;font-size:11px;font-weight:800;color:#fff;background:#B5462F;padding:2px 6px;margin-left:6px;white-space:nowrap}
  #ntk-offer .bof__btn{display:block;width:100%;height:49px;border:0;border-radius:0;background:#C6BAAA;color:#fff;font-family:'DM Sans',sans-serif;font-size:12px;letter-spacing:2px;text-transform:uppercase;cursor:pointer}
  #ntk-offer .bof__line{font-family:'DM Sans',sans-serif;font-size:12.5px;text-align:center;color:#E9E2DA;margin:10px 0 0}
  #ntk-offer .bof__line b{color:#fff;font-weight:800}
  /* desktop (Hermes) */
  @media screen and (min-width: 990px){
    #ntk-offer{padding-top:80px !important;padding-bottom:80px !important}
    #ntk-offer .bof__in{max-width:1200px;padding:0 48px;display:grid;grid-template-columns:1fr 1fr;column-gap:80px;align-items:center}
    #ntk-offer .bof__h{font-size:40px;line-height:1.1;margin-bottom:12px}
    #ntk-offer .bof__lead{font-size:17px;margin:0}
    #ntk-offer .bof__card strong{font-size:18px}
    #ntk-offer .bof__line{font-size:14px}
  }
</style>

<script>
  (function () {
    var root = document.getElementById('ntk-offer');
    if (!root || root.dataset.ready) return;
    root.dataset.ready = '1';
    var line = root.querySelector('[data-bof-date]');
    function wd(d, n) { while (n > 0) { d.setDate(d.getDate() + 1); var w = d.getDay(); if (w && w < 6) n--; } return d; }
    var arr = wd(wd(new Date(), +line.dataset.shipDays || 2), +line.dataset.days || 7);
    line.innerHTML = line.textContent.replace('[DATE]', '<b>' + arr.toLocaleDateString('hr-HR', { weekday: 'long', day: 'numeric', month: 'long' }) + '</b>');
    root.querySelector('.bof__btn').addEventListener('click', function () {
      var opts = document.querySelectorAll('#bundle-selector input[name="bundle_option"]');
      var o = opts[(+this.dataset.tier || 2) - 1];
      if (o && !o.checked) { (o.closest('label') || o).click(); }
      var box = document.getElementById('bundle-selector') || document.querySelector('form.cart');
      if (box) box.scrollIntoView({ behavior: 'smooth', block: 'start' });
    });
  })();
</script>

<!-- reviews -->
<section class="ntk-rv" id="ntk-reviews">
  <div class="ntk-rv__in">
    <h2 class="ntk-rv__title">Što žene kažu o Super Stay™ pojasu</h2>
    <div class="ntk-rv__box">
      <p class="ntk-rv__avg">4,7</p>
      <div class="ntk-rv__stars ntk-rv__stars--top" aria-label="Ocjena 4,7 od 5"><?php for ( $i = 0; $i < 5; $i++ ) : ?><span class="<?php echo $i === 4 ? 'is-half' : ''; ?>"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.826 1.608 8.144L12 18.896l-7.544 4.38 1.608-8.144L.587 9.306l8.332-1.151z"></path></svg></span><?php endfor; ?></div>
      <p class="ntk-rv__based">Na temelju 1 539 recenzija</p>
    </div>
    <ul class="ntk-rv__list">
      <?php foreach ( $ntk_reviews as $i => $r ) : ?>
      <li class="ntk-rv__item<?php echo $i >= $ntk_rv_first ? ' is-hidden' : ''; ?>">
        <div class="ntk-rv__card">
          <div class="ntk-rv__head"><span class="ntk-rv__name"><?php echo esc_html( $r[0] ); ?></span><span class="ntk-rv__date"><?php echo esc_html( $r[1] ); ?></span></div>
          <div class="ntk-rv__stars" aria-label="<?php echo (int) $r[2]; ?> od 5 zvjezdica"><?php for ( $s = 0; $s < 5; $s++ ) : ?><span class="<?php echo $s < $r[2] ? '' : 'is-empty'; ?>"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.826 1.608 8.144L12 18.896l-7.544 4.38 1.608-8.144L.587 9.306l8.332-1.151z"></path></svg></span><?php endfor; ?></div>
          <div class="ntk-rv__ver"><svg viewBox="0 0 14 14" aria-hidden="true"><circle cx="7" cy="7" r="7"></circle><path d="M4 7.2l2 2 4-4.4" stroke="#fff" stroke-width="1.6" fill="none"></path></svg>Provjereni kupac</div>
          <p class="ntk-rv__txt"><?php echo esc_html( $r[3] ); ?></p>
        </div>
      </li>
      <?php endforeach; ?>
    </ul>
    <div class="ntk-rv__more-wrap"><button type="button" class="ntk-rv__more">Učitaj više</button></div>
  </div>
</section>

<!-- trust -->
<section class="ntk-trust" aria-label="Zašto NORIKS">
  <div class="ntk-trust__in">
    <div class="ntk-trust__i">
      <svg width="42" height="42" viewBox="0 0 32 32" aria-hidden="true"><path fill="#000" d="M29.871 6.026l-13.871-5.1-14.394 5.283v19.642l14.394 5.222 14.394-5.222v-19.634l-0.524-0.192zM15.467 29.746l-12.795-4.642v-17.747l12.795 4.642v17.747zM16 11.058l-12.326-4.472 12.326-4.524 12.315 4.528-12.315 4.468zM29.328 25.104l-12.795 4.642v-17.747l12.795-4.623v17.728z"></path></svg>
      <p><strong>Brza dostava</strong></p>
      <p class="s">Dostava s praćenjem pošiljke</p>
    </div>
    <div class="ntk-trust__i">
      <svg width="42" height="42" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path stroke="#000" stroke-linejoin="round" stroke-linecap="round" d="M14.65 8.93274L12.4852 4.30901C12.2923 3.89699 11.7077 3.897 11.5148 4.30902L9.35002 8.93274L4.25424 9.50158C3.80919 9.55126 3.6278 10.0941 3.95532 10.3997L7.77426 13.9632L6.75374 18.9805C6.66534 19.4151 7.13158 19.7546 7.51754 19.5357L12 16.9935L16.4825 19.5357C16.8684 19.7546 17.3347 19.4151 17.2463 18.9805L16.2257 13.9632L20.0447 10.3997C20.3722 10.0941 20.1908 9.55126 19.7458 9.50158L14.65 8.93274Z"></path></svg>
      <p><strong>Recenzije s 5 zvjezdica</strong></p>
      <p class="s">Zadovoljstvo kupaca nam je na prvom mjestu</p>
    </div>
  </div>
</section>

</div>

<script>
(function(){
  /* promo pasica originala (vrstica na vrhu, 4 sporocila se izmenjujejo) — na istem mestu: cisto na vrhu strani */
  if (!document.querySelector('.ntk-annbar')) {
    var msgs = ['Besplatna dostava za narudžbe iznad 50 €', 'Carine i porezi su uključeni', 'Brza dostava', 'Povrat u roku od 30 dana za sve narudžbe'];
    var bar = document.createElement('div');
    bar.className = 'ntk-annbar'; bar.setAttribute('role', 'region'); bar.setAttribute('aria-label', 'Obavijest');
    bar.innerHTML = '<div class="ntk-annbar__msg" aria-live="polite"></div>';
    document.body.insertBefore(bar, document.body.firstChild);
    var box = bar.querySelector('.ntk-annbar__msg'), i = 0;
    function show(){ box.classList.remove('is-in'); void box.offsetWidth; box.textContent = msgs[i]; box.classList.add('is-in'); }
    show(); setInterval(function(){ i = (i + 1) % msgs.length; show(); }, 4000);
  }

  /* mnenja: "Ucitaj vise" (po 6, kot na originalu) */
  var more = document.querySelector('.ntk-rv__more');
  if (more) {
    more.addEventListener('click', function(){
      var hidden = document.querySelectorAll('.ntk-rv__item.is-hidden');
      for (var k = 0; k < hidden.length && k < 6; k++) { hidden[k].classList.remove('is-hidden'); }
      if (!document.querySelector('.ntk-rv__item.is-hidden')) { more.parentNode.style.display = 'none'; }
    });
  }
})();
</script>

<style>
/* zascita pred globalnimi stili teme */
.ntk { overflow-x: hidden; color: #222; font-family: 'DM Sans', sans-serif; }
.ntk *, .ntk *::before, .ntk *::after { box-sizing: border-box; }
.ntk section { display: block; width: 100%; margin: 0; }
.ntk img { max-width: 100%; height: auto; }
.ntk h2, .ntk h3 { text-transform: none; }
.ntk ul { margin: 0; padding: 0; list-style: none; }
.ntk button { font-family: 'DM Sans', sans-serif; }
.ntk figure { margin: 0; }
.ntk blockquote::before, .ntk blockquote::after { content: none; }

/* 9) mnenja (kot na originalu: 3 stolpci, sive kartice, bez fotografij) */
.ntk-rv { background: #fff; padding: 27px 0; }
.ntk-rv__in { max-width: 1200px; margin: 0 auto; padding: 0 16px; }
.ntk-rv__title { font-family: 'Lato', sans-serif; font-weight: 400; font-size: 26px; line-height: 1.25; text-align: center; margin: 0 0 18px; color: #222; }
.ntk-rv__box { display: flex; flex-direction: column; align-items: center; gap: 10px; margin-bottom: 40px; }
.ntk-rv__avg { margin: 0; font-size: 40px; font-weight: 700; line-height: 1; color: #222; }
.ntk-rv__based { margin: 0; font-size: 14.4px; letter-spacing: .54px; text-align: center; }
.ntk-rv__stars { display: flex; gap: 3px; }
.ntk-rv__stars span { display: inline-block; width: 14px; height: 14px; }
.ntk-rv__stars--top span { width: 24px; height: 24px; }
.ntk-rv__stars svg { width: 100%; height: 100%; display: block; fill: #c6baaa; }
.ntk-rv__stars span.is-empty svg { fill: #e2e2e2; }
.ntk-rv__stars--top span.is-half { position: relative; }
.ntk-rv__stars--top span.is-half svg { fill: #e2e2e2; }
.ntk-rv__stars--top span.is-half::after { content: ''; position: absolute; inset: 0; width: 50%; overflow: hidden;
  background: no-repeat left center / 24px 24px url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'%3E%3Cpath fill='%23c6baaa' d='M12 .587l3.668 7.568 8.332 1.151-6.064 5.826 1.608 8.144L12 18.896l-7.544 4.38 1.608-8.144L.587 9.306l8.332-1.151z'/%3E%3C/svg%3E"); }
.ntk-rv__list { column-count: 3; column-gap: 15px; }
.ntk-rv__item { break-inside: avoid; margin: 0 0 15px; padding-bottom: 15px; }
.ntk-rv__item.is-hidden { display: none; }
.ntk-rv__card { background: #f9f9f9; padding: 20px; display: grid; gap: 14px; }
.ntk-rv__head { display: flex; align-items: center; justify-content: space-between; gap: 10px; }
.ntk-rv__name { font-family: 'Lato', sans-serif; font-size: 32px; line-height: 1.1; color: #222; }
.ntk-rv__date { font-size: 12px; color: #8c8a91; white-space: nowrap; line-height: 1; text-transform: uppercase; }
.ntk-rv__ver { display: flex; align-items: center; gap: 5px; color: #bf570a; font-size: 14px; line-height: 1; }
.ntk-rv__ver svg { width: 14px; height: 14px; fill: #bf570a; }
.ntk-rv__txt { font-size: 13px; line-height: 1.6; margin: 0 0 16px; color: #222; }
.ntk-rv__more-wrap { text-align: center; margin-top: 20px; }
.ntk-rv__more { display: inline-block; cursor: pointer; border: 0; border-radius: 0; background: #c6baaa; color: #fff; font-size: 14px; line-height: 16px;
  letter-spacing: 2px; text-transform: uppercase; padding: 16px 25px; }
.ntk-rv__more:hover { background: #b3a593; }

/* 10) ikone zaupanja */
.ntk-trust { background: #fff; }
.ntk-trust__in { max-width: 1200px; margin: 0 auto; padding: 30px 16px 20px; display: flex; gap: 16px; }
.ntk-trust__i { flex: 1 1 0; display: flex; flex-direction: column; align-items: center; gap: 8px; text-align: center; }
.ntk-trust__i p { margin: 0; font-size: 14px; line-height: 1.4; color: #222; }
.ntk-trust__i p.s { font-size: 12px; }

/* promo pasica na vrhu strani */
.ntk-annbar { position: relative; z-index: 2; display: flex; align-items: center; justify-content: center; background: #fff; color: #222; border-bottom: 1px solid #ece6de;
  font-family: 'DM Sans', sans-serif; font-size: 13px; font-weight: 500; min-height: 36px; padding: 0 16px; text-align: center; }
.ntk-annbar__msg { padding: 8px 6px; line-height: 1.2; }
.ntk-annbar__msg.is-in { animation: ntkFlip .45s ease; }
@keyframes ntkFlip { from { opacity: 0; transform: rotateX(70deg); } to { opacity: 1; transform: none; } }

/* nakupna skatla: kratek opis (podnaslov, prednosti, karusel mnenj kupcev s fotografijami — kot na originalu) */
.ntk-sub { margin: 0 0 10px; font-size: 15px; line-height: 1.45; color: #3a3a3a; }
.ntk-benefits { list-style: none !important; padding: 0 !important; margin: 6px 0 14px !important; }
.ntk-benefits li { display: flex; align-items: flex-start; gap: 8px; margin: 0 0 6px; list-style: none !important; font-size: 14.5px; line-height: 1.4; }
.ntk-tick { flex: 0 0 18px; display: inline-flex; align-items: center; justify-content: center; width: 18px; height: 18px; margin-top: 1px;
  border-radius: 50%; background: #2E2420; color: #fff; font-size: 11px; font-weight: 700; line-height: 1; }
.ntk-ugc { display: flex; gap: 10px; overflow-x: auto; scroll-snap-type: x mandatory; scrollbar-width: none; margin: 4px 0 14px; padding: 0; }
.ntk-ugc::-webkit-scrollbar { display: none; }
.ntk-ugc__c { flex: 0 0 88%; display: grid; grid-template-columns: 96px 1fr; gap: 12px; align-items: center; background: #2E2420; color: #fff; padding: 10px; scroll-snap-align: start; }
.ntk-ugc__c img { width: 96px; height: 96px; object-fit: cover; display: block; margin: 0; }
.ntk-ugc__c p { margin: 0; font-size: 14px; line-height: 1.35; font-weight: 600; color: #fff; }
.ntk-ugc__c small { display: block; margin-top: 4px; font-size: 12px; color: #c6baaa; font-weight: 400; }
.ntk-ugc__st { color: #F2B53C; font-size: 12px; letter-spacing: 1px; display: flex; justify-content: space-between; margin-bottom: 4px; }
.ntk-ugc__st em { font-style: normal; color: #fff; font-size: 11px; letter-spacing: 0; }

@media (max-width: 900px) { .ntk-rv__list { column-count: 2; } }
@media (max-width: 600px) {
  .ntk-rv__list { column-count: 1; }
  .ntk-rv__name { font-size: 26px; }
  .ntk-trust__in { flex-wrap: wrap; }
  .ntk-annbar { font-size: 12px; }
}
@media (min-width: 750px) { .ntk-rv { padding: 36px 0; } .ntk-rv__title { font-size: 32px; } }
@media (min-width: 990px) { .ntk-rv__title { font-size: 40px; line-height: 50px; } }
</style>
