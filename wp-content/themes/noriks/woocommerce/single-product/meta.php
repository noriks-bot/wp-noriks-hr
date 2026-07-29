<?php
/**
 * Single Product Meta
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/meta.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     9.7.0
 */

use Automattic\WooCommerce\Enums\ProductType;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

global $product;
?>

<style>

      .features2 {
    margin-top: 12px;
    margin-bottom: 12px;
      }

      .features__row {
        display: flex;
        justify-content: space-between;
        gap: 28px;
      }

      .feature {
        flex: 1 1 0;
        text-align: center;
      }

      .feature__icon {
 
        margin: 0 auto 0px;
        display: block;
        margin-bottom: 0 !important;
      }

      .feature__text {
        margin: 0;
        line-height: 1.1;
    font-size: 14px;
    margin: 0;
        font-family: 'Barlow', sans-serif;
      }

      /* Responsive: stack nicely on small screens */
      @media (max-width: 640px) {
        .features__row {
     
        }
      }
    </style>


 <section class=" features2" aria-label="Prednosti">
      <div class="features__row">
        <!-- 1) Truck -->
        
        
          <div class="feature">
          
  <img src="<?php echo get_template_directory_uri(); ?>/img/cod_icon_.png" alt="Customer Support Icon" class="feature__icon info-icon">
          <p class="feature__text">Plaćanje i pouzećem</p>
        </div>
        
        
        <div class="feature">
      <img src="https://noriks.com/hr/wp-content/uploads/2025/07/footer_icon1-1.png" alt="Shirt Icon" class="feature__icon info-icon">
          <p class="feature__text">Isprobajte 30 dana, bez rizika</p>
        </div>
        
        

        <!-- 2) Smiley -->
        <div class="feature">
     
       
        <img src="https://noriks.com/hr/wp-content/uploads/2025/07/footer_icon3-1.png" alt="Shipping Icon" class="feature__icon info-icon">
          <p class="feature__text">Besplatna dostava za narudžbe iznad 70 €</p>
        </div>

    
    
      </div>
    </section>

    <?php if ( noriks_is_type( 'ortopas' ) ) : ?>
    <!-- Ortopas: kartica "Provjereno od strane liječnika" (slika) -->
    <div class="ortopas-doctor-card" style="margin:14px 0;">
      <img src="https://noriks.com/hr/wp-content/uploads/2026/07/ortopas-hr-11.png"
           alt="Provjereno od strane liječnika — NORIKS ortopedski pojas"
           style="width:100%; height:auto; display:block; border-radius:10px;"
           loading="lazy" decoding="async">
    </div>
    <?php endif; ?>


<!-- date and countdown section -->

<div class="shipping-box">
  <h2 id="shipping-window" class="shipping-title"></h2>
  <p class="shipping-sub">
    Naručite u sljedećih <span id="midnight-countdown" class="countdown"></span>
  </p>
</div>

<style>
  .shipping-box { font-family: system-ui, -apple-system, Segoe UI, Roboto, Arial, sans-serif; color:#222; margin-top: 13px;
    margin-bottom: 13px; 
      
    background: #f4f4f4;
    padding: 8px 6px 8px 12px;
    border-radius: 5px;
          text-align: center;
      
      
      
  }
  .shipping-title { font-family: 'Roboto', sans-serif;
    font-size: 14px !important;
    font-weight: 700 !important;
    line-height: 1.4 !important; margin-bottom: 0px;
    color: #222 !important; }
  .shipping-sub { font-size: 14px; margin: 0; }
  .countdown { color: #22a155; font-weight: 700; }
</style>

<script>
  (function () {
    const weekdays = ['nedjelja','ponedjeljak','utorak','srijeda','četvrtak','petak','subota'];

    // Helper to add business days (skip Saturday/Sunday)
    function addBusinessDays(date, days) {
      let result = new Date(date);
      let added = 0;
      while (added < days) {
        result.setDate(result.getDate() + 1);
        const day = result.getDay();
        if (day !== 0 && day !== 6) { // skip Sunday(0) + Saturday(6)
          added++;
        }
      }
      return result;
    }

    // Get shipping days: today +2 business days, today +3 business days
    const today = new Date();
    const first  = addBusinessDays(today, 2);
    const second = addBusinessDays(today, 3);

    function formatDayMonth(d) {
      return `${d.getDate()}.${d.getMonth()+1}.`; // e.g. 21.8.
    }

    const windowEl = document.getElementById('shipping-window');
    windowEl.textContent = `Dostava od ${weekdays[first.getDay()]}  ${formatDayMonth(first)} do ${weekdays[second.getDay()]}, ${formatDayMonth(second)}`;

    // Countdown to midnight
    const cdEl = document.getElementById('midnight-countdown');

    function nextMidnight(now) {
      const n = new Date(now);
      n.setHours(24, 0, 0, 0);
      return n;
    }

    function updateCountdown() {
      const now = new Date();
      const end = nextMidnight(now);
      let diff = Math.max(0, end - now);

      const h = Math.floor(diff / 3_600_000); diff -= h * 3_600_000;
      const m = Math.floor(diff / 60_000);    diff -= m * 60_000;
      const s = Math.floor(diff / 1000);

      cdEl.textContent = `${h}h ${m}min ${s}s`;
    }

    updateCountdown();
    setInterval(updateCountdown, 1000);
  })();
</script>


<!-- date and countdown section -->





<?php 

$is_singles_boxers = noriks_is_type( 'singles-boxers', $current_product_id );

$is_boxers = noriks_is_type( 'bokserice', $current_product_id ) && ! noriks_is_black_friday( $current_product_id );

$is_carape = noriks_is_type( 'carape', $current_product_id );

$is_mixed_bundle = noriks_is_mixed_bundle( $current_product_id );

?>



<?php if( !$is_boxers && !$is_carape ): ?>


<!-- my thre icons content -->


<div class="features">
    <div class="feature-card">
      <img src="<?php echo get_field("singlepp_icon_img1","option"); ?>" alt="Perfect Fit">
      <p><?php echo get_field("singlepp_icon_t1","option"); ?></p>
    </div>
    <div class="feature-card">
      <img src="<?php echo get_field("singlepp_icon_img2","option"); ?>" alt="Hides Dad Bod">
      <p><?php echo get_field("singlepp_icon_t2","option"); ?></p>
    </div>
    <div class="feature-card">
      <img src="<?php echo get_field("singlepp_icon_img3","option"); ?>" alt="Breathes">
       <p><?php echo get_field("singlepp_icon_t3","option"); ?></p>
    </div>
  </div>


<style>


    .features {
      display: flex;
    justify-content: space-between;
    gap: 16px;
    margin-top: 15px;
    margin-bottom: 15px;
    }

    .feature-card {
    display: flex
;
    flex-direction: column;
    align-items: center;
    flex: 1;
    gap: 8px;
    border-radius: 5px;
    background: #F4F4F4;
    padding: 16px;
    font-size: 14px;
    font-weight: 400;
    color: #111213;
    line-height: 1.2;
    text-align: center;
    }

    .feature-card img {
      width: 32px;
      height: 32px;
      margin-bottom: 0px;
    }

    .feature-card p {
      margin: 0;
      font-weight: 500;
      font-size: 14px;
      color: #222;
       letter-spacing: -0.5px !important;
    }
  </style>
  
 <?php endif; ?>


<!--
<div style="margin-bottom: 15px;" class="woocommerce-product-details__short-description">
    
    
	<?php echo apply_filters( 'the_content', $product->get_description() );  ?>
	
	
</div>
-->



 <!-- icons -->
 
 <!--
 <div class="info-section">

    <div class="info-box">
     
     
     
      

     <img src="<?php echo get_field("singlepp_bottomicons_img1","options"); ?>" alt="" width="25" height="25">
     <?php echo get_field("singlepp_bottomicons_t1","options"); ?>

    
     
     
    </div>
    
    
    
     <div class="info-box">
    
         <a href="tel:+38517776471" style="
    color: #7b8a9b;
    font-weight: 500;
    font-size: 14px;
    font-family: 'Roboto', sans-serif; display: flex; align-items: center; text-decoration: none; ">
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" style="margin-right: 6px;    width: 17px;
    height: 17px;" viewBox="0 0 16 16">
    <path d="M3.654 1.328a.678.678 0 0 1 .737-.07l2.547 1.272a.678.678 0 0 1 .291.901L6.29 5.72a.678.678 0 0 0 .145.776l2.457 2.457a.678.678 0 0 0 .776.145l2.29-1.24a.678.678 0 0 1 .901.291l1.272 2.547a.678.678 0 0 1-.07.737l-1.175 1.769c-.46.692-1.232 1.043-2.036.964-2.322-.238-4.96-2.223-6.856-4.12C1.77 7.667-.214 5.03.024 2.707c.079-.804.272-1.577.964-2.036L3.654 1.33z"/>
  </svg>
  01 777 64 71
</a>

<a href="mailto:info@noriks.com" style="
    color: #7b8a9b;
    font-weight: 500;
    font-size: 14px;
    font-family: 'Roboto', sans-serif; display: flex; align-items: center; text-decoration: none;">
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" style="margin-right: 6px;    width: 17px;
    height: 17px;" viewBox="0 0 16 16">
    <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v.217L8 8.083 0 4.217V4zm0 1.383v6.234l5.803-3.122L0 5.383zM6.761 8.83 0 12.383V12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-.383l-6.761-3.553L8 9.917l-1.239-.653zM16 5.383l-5.803 3.112L16 11.617V5.383z"/>
  </svg>
  info@noriks.com
</a>
         
   
     </div>
     

    <div class="info-grid">
      
      
      
      
      <div class="info-box">
       <img src="<?php echo get_field("singlepp_bottomicons_img2","options"); ?>" alt=""  width="25" height="25">
        <?php echo get_field("singlepp_bottomicons_t2","options"); ?>
      </div>
      <div class="info-box">
  
<img src="<?php echo get_field("singlepp_bottomicons_img3","options"); ?>" alt=""  width="25" height="25">
<?php echo get_field("singlepp_bottomicons_t3","options"); ?>
      </div>
    </div>

  </div>
  -->
  
  <style>


    .info-section {
      display: flex;
      flex-direction: column;
      gap: 7px;
      max-width: 800px;
      margin: auto;
      margin-bottom: 25px;
    }
    
    .info-section img {
      width: 25px;
    }


    .info-box {
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 8px;
      background-color: #f5f6f8;
      border-radius: 3px;
      padding: 16px;
      color: #7b8a9b;
      font-weight: 500;
      font-size: 14px;
          font-family: 'Roboto', sans-serif; 
      text-align: center;
    }

    .info-grid {
      display: flex;
      gap: 7px;
    }

    .info-grid .info-box {
      flex: 1;
    }

    .info-box svg {
      width: 24px;
      height: 24px;
      fill: #7b8a9b;
    }
  </style>









 <!-- icons -->


 <div class="accordion">


    <!-- KidsNest: prva dva accordion mjesta (dugi sadrzaj iz summary-ja) -->
    <?php if ( noriks_is_type( 'kidsnest', $current_product_id ) ) : ?>
    <div class="accordion-item">
      <div class="accordion-header" onclick="toggleAccordion(this)">
        <h3>Lice vašeg djeteta oblikuje se upravo sada — a vrijeme imate do 9. godine</h3>
        <div class="toggle">+</div>
      </div>
      <div class="accordion-content">
        <p>Istraživači dišnih putova i pedijatrijski stomatolozi godinama upozoravaju na isti obrazac — a većina roditelja za njega nikad nije čula. Zove se <strong>sindrom izduženog lica</strong> (adenoidno lice).</p>
        <p>Svake noći kada dijete spava otvorenih usta na pogrešnom jastuku, događaju se četiri stvari odjednom: jezik pada unatrag, čeljust se povlači, nepce se sužava u visoki luk, a lice počinje rasti vertikalno umjesto horizontalno. Nakon tisuća takvih noći između 3. i 9. godine, promjene se učvršćuju.</p>
        <p>Zato se 9-godišnjaci danas pojavljuju kod ortodonta s povučenom bradom, podočnjacima, zbijenim zubima — i skupim računom za aparatić. Način na koji dijete diše između 3. i 9. godine snažno utječe na lice koje će nositi cijeli život.</p>
        <p>NORIKS <strong>KidsNest</strong> dizajniran je da djeluje na temeljni uzrok — pogrešan položaj glave i čeljusti tijekom 9 sati sna — s <strong>3-zonskom ergonomskom strukturom</strong> koja glavu, vrat i čeljust drži u pravilnom poravnanju od prve noći.</p>
        <p><strong>Što ćete vidjeti kod svog djeteta:</strong></p>
        <ul style="margin:6px 0 12px;padding-left:18px;">
          <li style="margin:0 0 7px;"><strong>Manje disanja na usta:</strong> usnice zatvorene tijekom noći, povratak disanja kroz nos, kraj suhih usta ujutro.</li>
          <li style="margin:0 0 7px;"><strong>Tiše noći:</strong> hrkanje se kod većine djece smiruje unutar 1–2 tjedna.</li>
          <li style="margin:0 0 7px;"><strong>Podrška čeljusti u razvoju:</strong> pravilan položaj noć za noći, u godinama kada je to najvažnije.</li>
          <li style="margin:0 0 7px;"><strong>Pametna preventiva:</strong> jedan jastuk danas — umjesto skupih korekcija sutra.</li>
        </ul>
        <p><strong>Jedan jastuk večeras. Ili tisuće kasnije.</strong></p>
      </div>
    </div>
    <div class="accordion-item">
      <div class="accordion-header" onclick="toggleAccordion(this)">
        <h3>Starije od 9? Prozor se sužava. Šteta ne staje.</h3>
        <div class="toggle">+</div>
      </div>
      <div class="accordion-content">
        <p>Savjet koji ste čuli samo je napola točan. Da, gornje nepce se učvrsti oko 9. godine. Ali lice se razvija do 20., donja čeljust raste do 17., a dišni putovi se stalno prilagođavaju.</p>
        <p>Zato svaka noć disanja na usta nakon 9. godine slaže novu štetu na staru: škrgutanje zubima, glavobolje, san koji ne odmara, pad koncentracije — i umor koji svi zamjenjuju s lijenošću. Vaš tinejdžer nije lijen. On jedva diše šest sati svake noći.</p>
        <p>KidsNest u veličini <strong>9–18 godina</strong> izrađen je za stariju glavu, vrat i ramena. Drugačija kontura, druga visina, druga potpora. Isti temeljni mehanizam: pravilno poravnanje glave, vrata i čeljusti, cijelu noć, na tijelu koje još raste.</p>
        <p>Što roditelji primjećuju: hrkanje se smiruje u 7 do 14 noći, vraća se prava jutarnja energija, glavobolje blijede, fokus se vraća.</p>
        <p>Najbolji prozor i dalje je od 3. do 9. godine. Snažan prozor je od 8. do 18. Nijedan nije potpuno zatvoren — ali svaka noć čekanja dodaje pritisak tijelu koje se pokušava oporaviti.</p>
        <p><strong>Jučer je prošlo. Večeras je još uvijek vaše.</strong></p>
      </div>
    </div>
    <?php endif; ?>


    <!-- ErgoSit ortopedski jastuk: prva dva accordion mjesta (kopija originala, HR) -->
    <?php if ( noriks_is_type( 'ortopedski-jastuk', $current_product_id ) ) : ?>
    <div class="accordion-item">
      <div class="accordion-header" onclick="toggleAccordion(this)">
        <h3>Specifikacije proizvoda</h3>
        <div class="toggle">+</div>
      </div>
      <div class="accordion-content">
        <ul style="margin:8px 0 12px; padding-left:18px;">
          <li style="margin:0 0 8px;"><strong>Vanjska navlaka:</strong> Prozračna pletenina, skida se i pere u perilici, hipoalergena</li>
          <li style="margin:0 0 8px;"><strong>Jezgra:</strong> OrthoFlex™ adaptivna pjena | Netoksična, OEKO-TEX® certificirana | Dizajnirana za rasterećenje pritiska + poravnanje držanja</li>
        </ul>
      </div>
    </div>
    <div class="accordion-item">
      <div class="accordion-header" onclick="toggleAccordion(this)">
        <h3>Po čemu je tako poseban?</h3>
        <div class="toggle">+</div>
      </div>
      <div class="accordion-content">
        <ul style="margin:8px 0 12px; padding-left:18px;">
          <li style="margin:0 0 10px;"><strong>OrthoFlex™ memorijska pjena:</strong> Pjena visoke gustoće koja rasterećuje pritisak i prilagođava se bez splošnjavanja — podupire trticu, kukove i kralježnicu za cjelodnevnu udobnost.</li>
          <li style="margin:0 0 10px;"><strong>BreatheEase™ navlaka:</strong> Mekana, prozračna i nježna prema koži. Skida se i pere u perilici da jastuk uvijek ostane svjež.</li>
          <li style="margin:0 0 10px;"><strong>Uravnotežena potpora:</strong> Ni premekano, ni prekruto. Dizajnirano da poravna držanje i ublaži bolne točke od dugih sati sjedenja.</li>
        </ul>
      </div>
    </div>
    <?php endif; ?>


    <!-- 1 - detajli --> <!-- skriveno na ortopas pojasu + fisiorest + norikshers + ortopedski jastuk -->
    <?php if ( ! noriks_is_type( 'ortopas', $current_product_id ) && ! noriks_is_type( 'fisiorest', $current_product_id ) && ! noriks_is_type( 'norikshers', $current_product_id ) && ! noriks_is_type( 'ortopedski-jastuk', $current_product_id ) ) : ?>
    <div class="accordion-item">
      <div class="accordion-header" onclick="toggleAccordion(this)">
        <h3><?php echo get_field("singlepp_acc_h_1","options"); ?></h3>
        <div class="toggle">+</div>
      </div>
      <div class="accordion-content">
          
         <?php if( noriks_is_type( 'kidsnest', $current_product_id ) ): ?>

                NORIKS KidsNest izrađen je od hipoalergenske, OEKO-TEX® certificirane memorijske pjene — bez formaldehida, teških metala i BPA — s prozračnom, perivom navlakom koja se jednostavno skida.<br><br>Njegova 3-zonska ergonomska struktura nježno prihvaća glavu, podupire vrat i pomaže održati kralježnicu u prirodnom poravnanju — čak i kad se dijete tijekom noći puno okreće. Tako potiče disanje kroz nos i mirniji, dublji san.<br><br>Dostupan u tri veličine (1–3, 3–9 i 9–18 godina), raste s vašim djetetom i pruža pravu visinu potpore u svakoj fazi razvoja.

         <?php elseif( noriks_is_type( 'nosilka', $current_product_id ) ): ?>

                NORIKS BabyGo nosiljka izrađena je od mekane, prozračne i izdržljive tkanine s pojačanim šavovima, koja ravnomjerno raspoređuje težinu djeteta preko ramena i leđa — umjesto da sve nosi vaša ruka.<br><br>Ergonomski kroj drži mališana sigurno priljubljenog uz vaše tijelo u prirodnom položaju, dok široki, podstavljeni dio preko ramena sprječava urezivanje i pritisak čak i pri duljem nošenju.<br><br>Ono što BabyGo čini posebnom jest jednostavnost: navuče se u nekoliko sekundi, bez kompliciranih kopči i podešavanja, a dovoljno je lagana i kompaktna da uvijek bude uz vas u torbi. Periva u perilici — spremna za svaku svakodnevicu.

         <?php elseif( noriks_is_type( 'bunion', $current_product_id ) ): ?>

                NORIKS korektor čukljeva koristi patentirani zglobni mehanizam koji nježno vraća nožni palac u njegov prirodan položaj i primjenjuje ciljanu, podesivu kompresiju. Time se rasterećuje bolno izbočenje, smanjuje upala i ublažava nelagoda pri hodu, stajanju i tijekom mirovanja.<br><br>Mekana unutarnja podloga štiti kožu i osigurava udobnost pri duljem nošenju, a intenzitet istezanja jednostavno se prilagođava elastičnim trakama.<br><br>Neinvazivan je i prilagodljiv — nema strana, jednako odgovara lijevom i desnom stopalu te svim veličinama stopala, od dječjih do najvećih odraslih. Dovoljno je od 30 minuta do nekoliko sati dnevne uporabe za postupno, prirodno poravnanje.

         <?php elseif( noriks_is_type( 'ortopas', $current_product_id ) ): ?>

                NORIKS ortopedski pojas za leđa koristi dvije ciljane kompresijske zone koje stabiliziraju područje L5 kralježnice, pravilno poravnavaju zdjelicu i rasterećuju SI-zglob. Time se smanjuje pritisak na išijasni živac te se ublažavaju bolovi u donjem dijelu leđa i išijas.<br><br>Kompresija se jednostavno podešava elastičnim zateznim trakama, pa potporu prilagođavate vlastitim potrebama. Tanak i prozračan dizajn omogućuje da se pojas neprimjetno nosi ispod odjeće – na poslu, u vožnji ili kod kuće.<br><br>Dostupan u dvije veličine (S/M: opseg bokova 75–110 cm i L/XL: opseg bokova 110–140 cm) te prikladan za svakoga, neovisno o dobi, spolu ili tjelesnoj građi.

         <?php elseif( noriks_is_type( 'kneefix', $current_product_id ) ): ?>

                NORIKS KneeFix je fleksibilna steznica za koljeno koja spaja četiri funkcije u jednom sustavu potpore: podesivu kompresiju putem preciznog kotačića, dvostruke bočne stabilizatore, gel jastučić koji rasterećuje čašicu te silikonski protuklizni rub koji drži steznicu na mjestu.<br><br>Za razliku od krutih ortoza, KneeFix ne ukočuje koljeno — podupire ga tijekom prirodnog pokreta. Kompresiju podesite u sekundi: ujutro čvršće, popodne opuštenije, ovisno o tome koliko ste na nogama. Time koljeno dobiva stabilnost pri ustajanju, na stepenicama, u šetnji i pri duljem stajanju.<br><br>Tkanina je lagana, prozračna i odvodi vlagu, pa se steznica može nositi satima bez znojenja i bez urezivanja. Tanka je i diskretna — ispod hlača se gotovo ne primijeti.<br><br>Dostupna je u veličinama od S do 2XL prema tjelesnoj težini te u izvedbi za lijevo i desno koljeno, pa pristajanje ostaje precizno.

         <?php elseif( noriks_is_type( 'leakboxers', $current_product_id ) ): ?>

                NORIKS inkontinencijske bokserice izrađene su od mekanog antibakterijskog bambusovog vlakna s vodoodbojnim vanjskim slojem. U središtu je 7-slojna PureDry™ jezgra koja trenutno upija i zaključava do 300 ml tekućine, pa koža ostaje suha, a curenje ostaje unutra.<br><br>Kroj je tanak i diskretan — izgleda i osjeća se kao obično rublje, bez glomaznosti i bez osjećaja „pelene“. Zaštita uz noge sprječava bočno curenje, a kontrola mirisa održava svježinu tijekom cijelog dana.<br><br>Perive su i za višekratnu uporabu — zadržavaju upijajuću moć kroz stotine pranja, kao ekološka i isplativa alternativa jednokratnim ulošcima i pelenama.

         <?php elseif( noriks_is_type( 'kompresijske-majice', $current_product_id ) ): ?>

                NORIKS FIT izrađen je od napredne ionske kompresijske tkanine koja pruža pripijen, potporni kroj. Ciljana kompresija ravnomjerno steže trbuh i bokove, izglađuje siluetu i podupire uspravno držanje — bez stezanja koje ograničava disanje ili pokret.<br><br>Mikro-tkana vlakna potiču cirkulaciju i pomažu vam da tijekom dana stojite uspravnije i osjećate se sigurnije. Tkanina je lagana, prozračna i odvodi vlagu, pa ostajete suhi i ugodno.<br><br>Tanak i diskretan kroj čini ga nevidljivim ispod bilo koje košulje, a ujedno može poslužiti i kao sportska majica. Rezultat: oštriji izgled, bolje držanje i samopouzdanje — čim ga obučete.

         <?php elseif( !$is_boxers &&  !$is_carape &&   !$is_mixed_bundle ): ?>



        <?php echo get_field("singlepp_acc_t_1","options"); ?>


        <?php elseif(  noriks_is_type( 'starter', $current_product_id )  ): ?>
        
        
        
                Naše premium majice izrađene su od vrhunske mješavine 60% prstenasto predenog pamuka i 40% poliestera, što osigurava izuzetno mekanu tkaninu otpornu na gužvanje.  <br><br>NORIKS bokserice izrađene su od vrhunske mješavine 95% modala i 5% elastana, što osigurava izuzetno mekanu i elastičnu tkaninu koja se savršeno prilagođava tijelu. Elastičan pojas dizajniran je za optimalno pristajanje, pružajući udobnost bez stezanja i savršen izgled ispod odjeć   <br>

        <?php elseif( noriks_is_type( 'kompresijske-nogavice', $current_product_id ) ): ?>

                S graduiranom kompresijom od 15–20 mmHg, NORIKS kompresijske čarape pomažu poboljšati cirkulaciju, smanjiti oticanje i ublažiti napetost u umornim ili teškim nogama. Bočni patentni zatvarač čini ih jednostavnima za obuvanje i izuvanje – idealno za osobe smanjene pokretljivosti ili s artritisom. Meka unutarnja podstava štiti kožu od zatvarača i osigurava udobnost bez nadražaja.

        <?php else: ?>
        
        
        
            <?php echo get_field("__overwrite_sekcije_bellow_1"); ?>
            
            
        <?php endif; ?>
        
        
        
      </div>
    </div>
    
    
    
     
     <?php endif; /* end skrivanje detalja na ortopasu */ ?>

     <?php if ( ! noriks_is_type( 'bunion', $current_product_id ) && ! noriks_is_type( 'fisiorest', $current_product_id ) && ! noriks_is_type( 'norikshers', $current_product_id ) && ! noriks_is_type( 'ortopedski-jastuk', $current_product_id ) && ! noriks_is_type( 'nosilka', $current_product_id ) && ! noriks_is_type( 'kneefix', $current_product_id ) ) : // hide size accordion on bunion + fisiorest + norikshers + ortopedski jastuk + nosiljka + kneefix ?>
     <!-- 2 - slika tablica velicina -->
     <div class="accordion-item">
      <div class="accordion-header" onclick="toggleAccordion(this)">
        <h3>Tablica veličina</h3>
        <div class="toggle">+</div>
      </div>
      <div class="accordion-content">

           <?php if( noriks_is_type( 'kidsnest', $current_product_id ) ): ?>

          <div class="kn-size">
            <img src="<?php echo get_template_directory_uri(); ?>/img/kidsnest/tablica-velicine.webp" alt="KidsNest veličine po dobi" style="width:100%;height:auto;border-radius:10px;display:block;margin:0 0 12px;" loading="lazy">
            <p style="margin:0;line-height:1.6;"><strong>Dijete je između dvije veličine?</strong> Uvijek odaberite veću. Jastuk je dizajniran da podupire zdravo poravnanje dok dijete raste — veća veličina daje više prostora i dulje razdoblje korištenja.</p>
          </div>

        <?php elseif( noriks_is_type( 'leakboxers', $current_product_id ) ): ?>

          <div class="lbx-size">
            <p style="margin:0 0 6px;font-weight:700;">Kako izmjeriti bokove</p>
            <p style="margin:0 0 14px;line-height:1.6;">Omotajte mjernu traku oko najšireg dijela bokova (preko stražnjice), bez zatezanja. Stojte opušteno i uspravno te zabilježite mjeru u centimetrima.</p>
            <table style="width:100%;border-collapse:collapse;font-size:14px;">
              <thead>
                <tr style="background:#12233b;color:#fff;">
                  <th style="padding:8px 10px;text-align:left;background:#e9e9e9 !important;color:#111 !important;">Veličina</th>
                  <th style="padding:8px 10px;text-align:left;background:#e9e9e9 !important;color:#111 !important;">Bokovi (cm)</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $lbx_sizes = array(
                  array('S','do 76 cm','do 30"'),
                  array('M','77 – 85 cm','30 – 33"'),
                  array('L','86 – 94 cm','34 – 37"'),
                  array('XL','95 – 102 cm','37 – 40"'),
                  array('2XL','103 – 114 cm','41 – 45"'),
                  array('3XL','115 – 121 cm','45 – 48"'),
                  array('4XL','122 – 129 cm','48 – 51"'),
                  array('5XL','130 – 137 cm','51 – 54"'),
                  array('6XL','138 – 145 cm','54 – 57"'),
                  array('7XL','146 – 153 cm','57 – 60"'),
                  array('8XL','154 cm i više','61" i više'),
                );
                foreach ( $lbx_sizes as $i => $r ) :
                  $bg = ( $i % 2 ) ? '#f7fafb' : '#fff'; ?>
                  <tr style="background:<?php echo $bg; ?>;border-bottom:1px solid #eee;">
                    <td style="padding:8px 10px;font-weight:700;"><?php echo esc_html($r[0]); ?></td>
                    <td style="padding:8px 10px;"><?php echo esc_html($r[1]); ?></td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
            <p style="margin:14px 0 0;line-height:1.6;"><strong>Između dvije veličine?</strong> Uvijek preporučujemo veći broj za optimalnu udobnost i maksimalno upijanje.</p>
          </div>

        <?php elseif( noriks_is_type( 'kompresijske-majice', $current_product_id ) ): ?>

          <div class="kmf-size">
            <table style="width:100%;border-collapse:collapse;font-size:15px;">
              <thead>
                <tr style="background:#111;color:#fff;">
                  <th style="padding:9px 12px;text-align:left;background:#e9e9e9 !important;color:#111 !important;">Veličina</th>
                  <th style="padding:9px 12px;text-align:left;background:#e9e9e9 !important;color:#111 !important;">Odgovarajuća težina</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $kmf_sizes = array(
                  array('S','50 – 70 kg'), array('M','70 – 90 kg'), array('L','90 – 110 kg'), array('XL','110 – 130 kg'),
                  array('2XL','130 – 150 kg'), array('3XL','150 – 170 kg'), array('4XL','170 – 190 kg'), array('5XL','190 – 210 kg'),
                );
                foreach ( $kmf_sizes as $i => $r ) :
                  $bg = ( $i % 2 ) ? '#f4f4f4' : '#fff'; ?>
                  <tr style="background:<?php echo $bg; ?>;border-bottom:1px solid #eaeaea;">
                    <td style="padding:9px 12px;font-weight:800;"><?php echo esc_html($r[0]); ?></td>
                    <td style="padding:9px 12px;font-weight:700;"><?php echo esc_html($r[1]); ?></td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
            <p style="margin:12px 0 0;line-height:1.6;">Odaberite veličinu prema svojoj težini. Između dvije veličine? Za jaču kompresiju odaberite manji broj.</p>
          </div>

        <?php elseif( noriks_is_type( 'ortopas', $current_product_id ) ): ?>

          <div style="line-height:1.9;">
            <strong>S/M</strong> : opseg bokova 75–110 cm<br>
            <strong>L/XL</strong> : opseg bokova 110–140 cm<br><br>
            Molimo izmjerite opseg bokova na najširem mjestu kako biste pronašli svoju veličinu.
          </div>

        <?php elseif( $is_boxers ): ?>


          <img class="js-open-size-chart" style="cursor:pointer;" src="/hr/wp-content/uploads/2025/12/boxers_size.jpg">




        <?php elseif( noriks_is_type( 'kompresijske-nogavice', $current_product_id ) ): ?>

          <div style="line-height:1.9;">
            <strong>S/M</strong> : broj obuće 36–40 / opseg lista : 23–36 cm<br>
            <strong>L/XL</strong> : broj obuće 40–44 / opseg lista : 36–45 cm<br>
            <strong>2XL</strong> : broj obuće 44–48 / opseg lista : 45–56 cm<br><br>
            Molimo izmjerite opseg lista na najširem mjestu kako biste pronašli svoju veličinu.<br><br>
            Preporučujemo da veličinu odaberete prema opsegu lista, a ne prema uobičajenom broju obuće.
          </div>

        <?php elseif(  $is_carape ): ?>
        
        
                  <img class="js-open-size-chart" style="cursor:pointer;" src="/hr/wp-content/uploads/2025/11/Nogavice_tabela_velikosti.jpg">
                  
    <?php elseif(  $is_mixed_bundle ): ?>
    
     <img class="js-open-size-chart" style="cursor:pointer;" src="<?php echo get_template_directory_uri(); ?>/img/tabela-velikosti-majice.jpg">
<img class="js-open-size-chart" style="cursor:pointer;" src="/hr/wp-content/uploads/2025/12/boxers_size.jpg">
        
          <?php else: ?>
      
      
       <img class="js-open-size-chart" style="cursor:pointer;" src="<?php echo get_template_directory_uri(); ?>/img/tabela-velikosti-majice.jpg">
        
            
        <?php endif; ?>
      </div>
    </div>


    <?php endif; // /hide size accordion on bunion ?>

    <!-- 3 - savjeti za pranje--> <!-- skriveno na ortopas pojasu + bunion + fisiorest + ortopedski jastuk + kidsnest + kneefix -->
    <?php if ( ! noriks_is_type( 'ortopas', $current_product_id ) && ! noriks_is_type( 'bunion', $current_product_id ) && ! noriks_is_type( 'fisiorest', $current_product_id ) && ! noriks_is_type( 'norikshers', $current_product_id ) && ! noriks_is_type( 'ortopedski-jastuk', $current_product_id ) && ! noriks_is_type( 'kidsnest', $current_product_id ) && ! noriks_is_type( 'kneefix', $current_product_id ) ) : ?>
    <div class="accordion-item">
      <div class="accordion-header" onclick="toggleAccordion(this)">
        <h3><?php echo get_field("singlepp_acc_h_2","options"); ?></h3>
        <div class="toggle">+</div>
      </div>
      <div class="accordion-content">
             <?php if( noriks_is_type( 'leakboxers', $current_product_id ) ): ?>

                Perite na 30–40 °C, na programu za osjetljivo rublje. Bez omekšivača i izbjeljivača. Sušite na zraku. Zadržavaju upijajuću moć kroz stotine pranja.

             <?php elseif( noriks_is_type( 'kompresijske-majice', $current_product_id ) ): ?>

                Strojno pranje na hladnom, nježnom programu. Bez izbjeljivača i omekšivača. Ne sušiti u sušilici — sušite na zraku kako bi se očuvala kompresija i oblik.

             <?php elseif( !$is_boxers &&  !$is_carape &&   !$is_mixed_bundle ): ?>
        <?php echo get_field("singlepp_acc_t_2","options"); ?>


        <?php elseif(  noriks_is_type( 'starter', $current_product_id )  ): ?>
        
        
        
                         Perite boje s bojama.  Program za nježno pranje na hladnoj vodi.  Sušite ravno položeno ili u sušilici na niskoj temperaturi.  Ne izbjeljivati

        <?php elseif( noriks_is_type( 'kompresijske-nogavice', $current_product_id ) ): ?>

                Ručno pranje u hladnoj vodi ili strojno pranje na programu za osjetljivo rublje. Ne koristiti izbjeljivač.<br><br>Sušiti isključivo na zraku – ne koristiti sušilicu, kako bi se očuvala elastičnost i učinkovitost kompresije.

          <?php else: ?>
            <?php echo get_field("__overwrite_sekcije_bellow_3"); ?>
        <?php endif; ?>
      </div>
    </div>



    <?php endif; /* end skrivanje savjeta za pranje na ortopasu */ ?>

    <!-- 4 povrati in menjave -->
    <div class="accordion-item">
      <div class="accordion-header" onclick="toggleAccordion(this)">
        <h3><?php echo get_field("singlepp_acc_h_3","options"); ?></h3>
        <div class="toggle">+</div>
      </div>
      <div class="accordion-content">
       <p></p>
       Toliko vjerujemo da će ti se NORIKS svidjeti da imaš <b data-stringify-type="bold">30 dana</b> za povrat ili besplatnu zamjenu.
Bez papirologije, bez stresa – riješimo u par klikova. </p>

<p>
    



  <a href="mailto:info@noriks.com" style="display: flex; align-items: center; text-decoration: none; color: #333;">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#333" style="margin-right: 6px;" viewBox="0 0 16 16">
      <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v.217L8 8.083 0 4.217V4zm0 1.383v6.234l5.803-3.122L0 5.383zM6.761 8.83 0 12.383V12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-.383l-6.761-3.553L8 9.917l-1.239-.653zM16 5.383l-5.803 3.112L16 11.617V5.383z"/>
    </svg>
    info@noriks.com
  </a>
</p>
<p>Samo nam napiši mail da želiš zamjenu i <b data-stringify-type="bold">odmah ćemo sve srediti.</b></p>
       
       
      </div>
    </div>



    <!-- 5 - infomraicje o dostavi -->
    <div class="accordion-item">
      <div class="accordion-header" onclick="toggleAccordion(this)">
        <h3><?php echo get_field("singlepp_acc_h_4","options"); ?></h3>
        <div class="toggle">+</div>
      </div>
      <div class="accordion-content">
        <?php echo get_field("singlepp_acc_t_4","options"); ?>
      </div>
    </div>
    
    
    <!-- konec 5 acrodinov -->

  </div>

  <script>
    function toggleAccordion(header) {
      const item = header.parentElement;
      const isOpen = item.classList.contains('open');
      document.querySelectorAll('.accordion-item').forEach(el => el.classList.remove('open'));
      if (!isOpen) item.classList.add('open');
    }
  </script>
  
  
  <style>
      
       .accordion {
      border-top: 1px solid #ddd;
    }

    .accordion-item {
      border-bottom: 1px solid #ddd;
    }

    .accordion-header {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 16px 5px 5px 0px;
      cursor: pointer;
    }

    .accordion-header h3 {
      display: flex;
      align-items: center;
      font-weight: 500;
      font-size: 16px;
      margin: 0;
      gap: 2px;
      font-family: 'Roboto', sans-serif;  
    }

    .accordion-content {
      padding: 0 0 0 0;
      display: none;
      font-size: 14px;
      font-family: 'Roboto', sans-serif;  
      line-height: 1.6;
      color: black;
    }

    .accordion-item.open .accordion-content {
      display: block;
    }

    .icon {
      width: 24px;
      height: 24px;
      display: inline-block;
      background-size: contain;
      background-repeat: no-repeat;

    }
    
    .icon-details {
   
      margin: 0 0px 0 10px !important;
    }
    
    .icon-size {
   
      margin: 0 0px 0 10px !important;
    }

    /* Placeholder icons using emojis 
    
    .icon.details::before { content: "📝"; }
     .icon.size::before { content: "👕"; }
    .icon.laundry::before { content: "🧺"; }
    .icon.returns::before { content: "↩️"; }
    .icon.shipping::before { content: "📦"; }
*/
    .toggle {
      font-size: 24px;
      transition: transform 0.3s ease;
    }

    .accordion-item.open .toggle {
      transform: rotate(45deg);
    }
  </style>








<div class="product_meta">

	<?php do_action( 'woocommerce_product_meta_start' ); ?>

	<?php if ( wc_product_sku_enabled() && ( $product->get_sku() || $product->is_type( ProductType::VARIABLE ) ) ) : ?>

		<span class="sku_wrapper"><?php esc_html_e( 'SKU:', 'woocommerce' ); ?> <span class="sku"><?php echo ( $sku = $product->get_sku() ) ? $sku : esc_html__( 'N/A', 'woocommerce' ); ?></span></span>

	<?php endif; ?>

	<?php echo wc_get_product_category_list( $product->get_id(), ', ', '<span class="posted_in">' . _n( 'Category:', 'Categories:', count( $product->get_category_ids() ), 'woocommerce' ) . ' ', '</span>' ); ?>

	<?php echo wc_get_product_tag_list( $product->get_id(), ', ', '<span class="tagged_as">' . _n( 'Tag:', 'Tags:', count( $product->get_tag_ids() ), 'woocommerce' ) . ' ', '</span>' ); ?>

	<?php do_action( 'woocommerce_product_meta_end' ); ?>

</div>
