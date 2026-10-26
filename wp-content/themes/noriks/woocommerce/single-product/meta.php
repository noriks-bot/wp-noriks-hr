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
    const second = addBusinessDays(today, 5);

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

// Novi izdelki brez lastne veje: Detalji o proizvodu = opis izdelka iz WooCommerce,
// savjeti za pranje za majice se ne prikazejo (prej je bilo tu besedilo za majice 70 % pamuk).
$noriks_opis_iz_wc = false;
foreach ( array( 'sculptleg', 'vinocool', 'mamafit', 'odorpro', 'gelsit', 'struja', 'calm', 'shapetank', 'classics', 'flops', 'destapacan', 'tacpro', 'ondersteun', 'insoles', 'glasspro', 'calendar', 'viinia', 'birdie', 'acryliques', 'midnight', 'gordura', 'womens', 'draps', 'retrobox', 'devotions', 'ritual', 'corrector', 'salon', 'faith', 'travel' ) as $noriks_t ) {
    if ( noriks_is_type( $noriks_t, $current_product_id ) ) { $noriks_opis_iz_wc = true; break; }
}

?>



<?php // NORIKS Cards i HairMagic: bez tri ikone (majica/pristajanje) — nisu relevantne za te proizvode.
if( !$is_boxers && !$is_carape && ! noriks_is_type( 'cloath', $current_product_id ) && ! noriks_is_type( 'cloud', $current_product_id ) && ! noriks_is_type( 'snore', $current_product_id ) && ! noriks_is_type( 'bra', $current_product_id ) && ! noriks_is_type( 'hyd', $current_product_id ) && ! noriks_is_type( 'noriks-cards', $current_product_id ) && ! noriks_is_type( 'hairmagic', $current_product_id ) && ! noriks_is_type( 'dental', $current_product_id ) && ! noriks_is_type( 'seal', $current_product_id ) ): ?>


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
        <p>KidsNest u veličini <strong>9–14 godina</strong> izrađen je za stariju glavu, vrat i ramena. Drugačija kontura, druga visina, druga potpora. Isti temeljni mehanizam: pravilno poravnanje glave, vrata i čeljusti, cijelu noć, na tijelu koje još raste.</p>
        <p>Što roditelji primjećuju: hrkanje se smiruje u 7 do 30 noći, vraća se prava jutarnja energija, glavobolje blijede, fokus se vraća.</p>
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

         <?php if( $noriks_opis_iz_wc ): ?>

                <?php global $product; $noriks_p = ( $product instanceof WC_Product ) ? $product : wc_get_product( get_the_ID() ); echo $noriks_p ? wp_kses_post( wpautop( $noriks_p->get_description() ) ) : ''; ?>

         <?php elseif( noriks_is_type( 'destapacan', $current_product_id ) ): ?>

                NORIKS DrainPro je prah za čišćenje odvoda koji reagira s toplom vodom i stvara aktivnu pjenu. Ta pjena prodire duboko kroz cijevi, otapa nakupine masti, kose, sapunskih ostataka i organskih tvari, te čisti začepljenja za 10 do 15 minuta — bez raščlanjivanja sifona i bez posebnih alata.<br><br>Formula je sigurna za sve vrste kućnih instalacija — PVC, metal i druge materijale — i ne oštećuje cijevi. Istovremeno uklanja neugodne mirise iznutra cijevi i sprječava razvoj bakterija.<br><br>Preporučuje se redovito korištenje jednom tjedno kao preventiva — tako održavate odvode slobodne, bez nakupina i neugodnih mirisa, i izbjegavate skupe popravke i pozive vodoinstalatera.<br><br>Jedan paket traje dugo uz preventivno korištenje. NORIKS nudi 30 dana za povrat novca, besplatnu dostavu iznad 70 € i mogućnost plaćanja pouzećem. Već 120.000 kupaca diljem Europe koristi NORIKS proizvode.

         <?php elseif( noriks_is_type( 'kidsnest', $current_product_id ) ): ?>

                NORIKS KidsNest izrađen je od hipoalergenske, OEKO-TEX® certificirane memorijske pjene — bez formaldehida, teških metala i BPA — s prozračnom pletenom navlakom.<br><br>Njegova 3-zonska ergonomska struktura nježno prihvaća glavu, podupire vrat i pomaže održati kralježnicu u prirodnom poravnanju — čak i kad se dijete tijekom noći puno okreće. Tako potiče disanje kroz nos i mirniji, dublji san.<br><br>Dostupan u tri veličine (1–3, 3–9 i 9–14 godina), raste s vašim djetetom i pruža pravu visinu potpore u svakoj fazi razvoja.

         <?php elseif( noriks_is_type( 'nosilka', $current_product_id ) ): ?>

                NORIKS BabyGo nosiljka izrađena je od mekane, prozračne i izdržljive tkanine s pojačanim šavovima, koja ravnomjerno raspoređuje težinu djeteta preko ramena i leđa — umjesto da sve nosi vaša ruka.<br><br>Ergonomski kroj drži mališana sigurno priljubljenog uz vaše tijelo u prirodnom položaju, dok široki, podstavljeni dio preko ramena sprječava urezivanje i pritisak čak i pri duljem nošenju.<br><br>Ono što BabyGo čini posebnom jest jednostavnost: navuče se u nekoliko sekundi, bez kompliciranih kopči i podešavanja, a dovoljno je lagana i kompaktna da uvijek bude uz vas u torbi. Periva u perilici — spremna za svaku svakodnevicu.

         <?php elseif( noriks_is_type( 'bunion', $current_product_id ) ): ?>

                NORIKS korektor čukljeva koristi patentirani zglobni mehanizam koji nježno vraća nožni palac u njegov prirodan položaj i primjenjuje ciljanu, podesivu kompresiju. Time se rasterećuje bolno izbočenje, smanjuje upala i ublažava nelagoda pri hodu, stajanju i tijekom mirovanja.<br><br>Mekana unutarnja podloga štiti kožu i osigurava udobnost pri duljem nošenju, a intenzitet istezanja jednostavno se prilagođava elastičnim trakama.<br><br>Neinvazivan je i prilagodljiv — nema strana, jednako odgovara lijevom i desnom stopalu te svim veličinama stopala, od dječjih do najvećih odraslih. Dovoljno je od 30 minuta do nekoliko sati dnevne uporabe za postupno, prirodno poravnanje.

         <?php elseif( noriks_is_type( 'ortopas', $current_product_id ) ): ?>

                NORIKS ortopedski pojas za leđa koristi dvije ciljane kompresijske zone koje stabiliziraju područje L5 kralježnice, pravilno poravnavaju zdjelicu i rasterećuju SI-zglob. Time se smanjuje pritisak na išijasni živac te se ublažavaju bolovi u donjem dijelu leđa i išijas.<br><br>Kompresija se jednostavno podešava elastičnim zateznim trakama, pa potporu prilagođavate vlastitim potrebama. Tanak i prozračan dizajn omogućuje da se pojas neprimjetno nosi ispod odjeće – na poslu, u vožnji ili kod kuće.<br><br>Dostupan u dvije veličine (S/M: opseg bokova 75–110 cm i L/XL: opseg bokova 110–140 cm) te prikladan za svakoga, neovisno o dobi, spolu ili tjelesnoj građi.

         <?php elseif( noriks_is_type( 'dental', $current_product_id ) ): ?>

                NORIKS ProSonic je ultrazvučni čistač s UV-C sterilizacijom za sva odvojiva zubna pomagala — prozirne folije i Invisalign, retainere, proteze, noćne udlage i štitnike te glave električnih četkica.<br><br>Ultrazvuk frekvencije <strong>43.000 Hz</strong> stvara milijune mikroskopskih mjehurića koji uklanjaju naslage i mrlje i s mjesta do kojih četkica ne dolazi — bez struganja koje ogrebe folije. Istovremeno <strong>UV-C svjetlo (200–280 nm)</strong> uklanja do 99,9 % bakterija, virusa i gljivica; učinkovitost je laboratorijski potvrđena na E. coli, Staphylococcus aureusu i Candidi albicans.<br><br>Upotreba je jednostavna: spremnik (165 ml) napunite hladnom vodom, stavite pomagalo unutra i odaberite ciklus od 3 ili 5 minuta. Tablete i kemikalije nisu potrebne. Uređaj radi tiho (≤ 65 dB), upravlja se na dodir i dimenzija je 122 × 122 × 100 mm, pa stane na svaku policu u kupaonici.<br><br>U pakiranju: uređaj NORIKS ProSonic, adapter za napajanje i upute. Uz proizvod idu <strong>1 godina jamstva</strong> i <strong>30 dana povrata novca</strong>.

         <?php elseif( noriks_is_type( 'hairmagic', $current_product_id ) ): ?>

                NORIKS HERS HairMagic+ Hairline Powder je kompaktni puder koji u manje od dvije minute prekrije sijede, popuni prorijeđena mjesta na razdjeljku i sakrije izrast. Prilagodljivi pigmenti stapaju se s vašom bojom kose, pa rezultat izgleda prirodno — bez naslaga, bez tvrdog ruba i bez efekta "nacrtane" kose.<br><br>Formula je obogaćena <strong>arganovim uljem, panthenolom i vitaminom E</strong>, pa uz prekrivanje njeguje i vlasište. Tekstura je lagana i nadogradiva: nanesete malo za diskretan rezultat ili slojevito za punije prekrivanje. Prikladno je i za osjetljivo vlasište.<br><br>Otporan je na vodu i prijenos — drži cijeli dan, ne razmazuje se i ne prlja ovratnik ni jastučnicu, a skida se običnim pranjem kose. Djeluje i na obrvama.<br><br>Dostupno je u <strong>8 nijansi</strong>: srednje smeđa, tamno smeđa, prirodno plava, čokoladno smeđa, grafitno smeđa, bakrena, platinasto plava i svijetlo siva. Ako ste između dvije nijanse, odaberite svjetliju — tamniji ton uvijek možete nadograditi.<br><br>U poklopcu su ogledalce i precizni kist, pa je nanošenje jednostavno i izvan kuće. Jedno pakiranje traje 2 do 4 mjeseca uz svakodnevnu upotrebu.

         <?php elseif( noriks_is_type( 'norikshersbrush', $current_product_id ) ): ?>

                NORIKSHERS Cool Curl Pencil je mini stiler s uskom pločom od 1,7 cm koja ulazi tamo gdje široke pegle ne mogu — u šiške, rubne vlasi, kratke frizure i uz sam korijen. Istim uređajem kosu izravnate ili ukovrčate: zaobljeni rub omogućuje glatko klizanje, a 3D plutajuća keramička ploča se prilagođava debljini pramena, pa nema zapinjanja ni pregiba.<br><br>Ključna je tehnologija <strong>360° hladnog protoka zraka</strong>: 104 otvora oko ploče puštaju hladan zrak koji fiksira oblik dok je kosa još u uređaju. Kovrča se učvrsti u dvije sekunde, a stil drži do 48 sati — uz manje topline i manje oštećenja.<br><br>Pet temperaturnih postavki (140, 160, 180, 200 i 220 °C) pokriva sve tipove kose, od tanke do grube i teksturirane. Uređaj se zagrije u nekoliko sekundi, radi na 100–240 V (prikladan za putovanja), ima sigurnosnu bravu i automatsko isključivanje nakon 60 minuta. Kabel je dug 2 m, snaga 46 W.<br><br>U pakiranju: stiler, rukavica otporna na toplinu i vodič za izradu kovrča. Dostupno u crnoj i roza boji.

         <?php elseif( noriks_is_type( 'noriks-cards', $current_product_id ) ): ?>

                NORIKS Cards je zvučni uređaj s karticama koji djetetu naglas izgovori riječ s kartice. Dijete umetne karticu, pritisne gumb, čuje jasno izgovorenu riječ i ponovi je — bez ekrana, bez aplikacije i bez pomoći odrasle osobe.<br><br>Kartice pokrivaju više od 20 kategorija: životinje, hranu, boje, brojeve, emocije, zanimanja, prirodu i svakodnevne predmete. Uređaj dolazi s kompletom kartica i prati dijete kroz nekoliko godina — od prvog imenovanja do povezivanja i opisivanja.<br><br>Zvuk je glasan i čist, s mirnim tempom koji djetetu daje vremena da ponovi riječ. Glasnoća se podešava.<br><br>Kartice su tiskane na ojačanom materijalu otpornom na trganje, a uređaj je lagan, zaobljen i bez oštrih rubova — prilagođen dječjim rukama i svakodnevnoj upotrebi.

         <?php elseif( noriks_is_type( 'controlpro', $current_product_id ) ): ?>

                NORIKS ControlPro je mehanički trener dna zdjelice s pravim fizičkim otporom. Umjesto da mišić samo stisnete u prazno, dobivate nešto protiv čega možete pritisnuti — isti princip progresivnog opterećenja po kojem jača svaki drugi mišić u tijelu.<br><br>Koristi se sjedeći: uređaj postavite između koljena i stišćete protiv otpora — 3 serije od 10 ponavljanja dnevno, oko pet minuta. Bez sondi i umetanja, bez žica, gela, baterija i aplikacija. Ugrađeni brojač ponavljanja pokazuje koliko ste odradili, pa napredak ne procjenjujete naslijepo.<br><br>Konstrukcija je čvrsta, s mekanim oblogama na osloncima koje ne pritišću kožu ni nakon više serija. Otpor se progresivno povećava kako mišići jačaju.<br><br>Namijenjen je muškarcima koji žele vratiti kontrolu nad mjehurom — nakon operacije prostate, kod curenja pri naporu ili nakon dugih mjeseci Kegelovih vježbi bez rezultata. Dostava je diskretna, u neutralnoj kutiji bez oznaka.

         <?php elseif( noriks_is_type( 'snore', $current_product_id ) ): ?>

                <strong>NORIKS udlaga protiv hrkanja</strong> djeluje na sam uzrok hrkanja: tijekom sna mišići grla se opuste, jezik i meko nepce padnu prema natrag i suze dišni put, zrak prolazi kroz uski otvor i tkivo počne vibrirati.<br><br>Udlaga nježno pomiče donju čeljust prema naprijed i otvara dišni put, pa vibracija prestaje. Zato djeluje i ondje gdje sprejevi i trakice za nos ne pomognu — oni ne diraju uzrok.<br><br>Prilagodi se vašim ustima: uronite je u vruću vodu, ugrizite i poprimit će oblik vaših zubi. Uz nju dolazi pet zamjenjivih traka (#1–#5); svaka sljedeća pomiče čeljust 1,5 mm više, pa sami odredite koliko pomaka trebate.<br><br>Okvir je fleksibilan, čeljust ostaje pokretna — možete piti vodu i govoriti dok je nosite. Bez BPA, ftalata i lateksa. Dimenzije 4,1 × 6 × 2,5 cm, dubina ugriza 1,3 cm.

         <?php elseif( noriks_is_type( 'cloud', $current_product_id ) ): ?>

                <strong>NORIKS Cloud</strong> je ortopedski jastuk za koljena namijenjen spavanju na boku. Postavlja se između koljena i drži kukove, zdjelicu i kralježnicu u prirodnoj liniji — bez uvijanja donjeg dijela leđa i bez pritiska koljena o koljeno.<br><br>Za razliku od običnog jastuka koji se tijekom noći splošti i ispadne, NORIKS Cloud ima podesivu traku s drukerima. Traka ide oko noge i drži jastuk točno na mjestu — i kad se okrenete na drugu stranu. Traka se skida, pa jastuk možete koristiti i pod gležnjeve ili pod vrat.<br><br>Jezgra je od memorijske pjene medicinske kvalitete s ugrađenim perforacijama: dovoljno čvrsta da drži razmak nogu, dovoljno mekana da se prilagodi tijelu i prozračna, pa se ne pregrijava. Zadržava oblik godinama.<br><br>Navlaka se skida i pere u stroju na 40 °C. Materijali su certificirani po OEKO-TEX® STANDARD 100 i CertiPUR-EU, a dizajn je rađen prema švicarskim standardima kvalitete.

         <?php elseif( noriks_is_type( 'cloath', $current_product_id ) ): ?>

                <strong>Polar NORIKS Cloth XXL</strong> je krpa od guste mikrovlaknaste tkanine formata 60 × 40 cm koja staklo, pločice i slavine očisti samo vodom — bez sprejeva i bez kemikalija.<br><br>Dvostrani dizajn radi dva posla odjednom: čupava strana skuplja prljavštinu, kamenac i vodu, a mrežasta strana polira do sjaja. Zato nema mutnog filma koji ostavljaju obične krpe.<br><br>Tkanina upija do 600 ml vode odjednom, pa nakon nekoliko poteza tuš-kabina, pločice i slavine ostaju suhi — bez kapljica i bez čekanja.<br><br>Krpa ne pušta vlakna, ne blijedi i ne para se. Perite je u stroju na 40 °C i spremna je za sljedeću upotrebu — izdrži stotine ciklusa.

         <?php elseif( noriks_is_type( 'bra', $current_product_id ) ): ?>

                <strong>NORIKS BRA</strong> je bešavni grudnjak bez žice koji istovremeno rješava dvije stvari: potporu grudi i položaj ramena. Prekriženi dizajn na leđima nježno povlači ramena unatrag i odvraća od pogrbljenog držanja, a šire naramenice raspoređuju težinu po većoj površini, pa nema urezivanja.<br><br>Prednje zakopčavanje s dvije kopče i 8 razina zategnutosti znači da ga obučete i skinete u sekundi, bez izvijanja ruku iza leđa. Zategnutost mijenjate tijekom dana — čvršće ujutro, opuštenije navečer.<br><br>Bešavne oblikovane košarice podižu grudi prirodno, bez žice koja pritišće rebra. Visoka bočna pokrivenost skuplja i izglađuje liniju ispod pazuha, pa silueta ostaje glatka i u pripijenoj odjeći.<br><br>Tkanina je lagana, elastična i prozračna. Dostupno u nijansama bež, crna i leopard, u veličinama od S do 4XL.

         <?php elseif( noriks_is_type( 'hyd', $current_product_id ) ): ?>

                <strong>NORIKS HYD</strong> je prijenosna boca koja običnu vodu pretvara u vodikovu vodu. Elektrolizom na naprednoj protonskoj membrani (PEM/SPE) u vodu se otapa molekularni vodik — do 3.000 ppb — bez klora i bez nusprodukata u napitku.<br><br>Odaberite ciklus prema potrebi: 3 minute za brzo osvježenje (oko 1.600 ppb) ili 10 minuta za maksimalnu koncentraciju. Automatsko odzračivanje izbacuje preostale plinove (O₃, Cl₂, H₂O₂), pa u boci ostaje samo voda obogaćena vodikom.<br><br>Boca je od borosilikatnog stakla s bazom od nehrđajućeg čelika — voda nikada ne dodiruje plastiku, pa nema stranog okusa. Generator ima trajni filter: nema potrošnog materijala ni zamjena.<br><br>Kapacitet je 450 mL, a USB punjenje traje 30–60 minuta i dovoljno je za više ciklusa. Radi s bilo kojom pitkom vodom, uključujući filtriranu i destiliranu.

         <?php elseif( noriks_is_type( 'hug', $current_product_id ) ): ?>

                <strong>NORIKS Hugger</strong> je nosivi termofor: mekana navlaka s krakovima na čičak drži termofor čvrsto uz tijelo, pa toplina ide točno ondje gdje treba — na trbuh, križa ili leđa. Ruke ostaju slobodne, pa možete raditi, hodati po kući ili zaspati s njim.<br><br>Dvostruki sloj izolacije drži ugodnu temperaturu satima, bez naglog skoka od prevruće do mlake. Toplina se zadržava između navlake i tijela, pa traje osjetno duže nego kod klasičnog termofora ispod deke.<br><br>U pakiranju su nosiva navlaka i termofor od 500 ml izrađen od 100 % prirodne gume, bez lateksa. Odgovara opsegu struka 70 – 93 cm, a uz produžetak veličine i do 110 cm.<br><br>Navlaka je od super mekanog krzna i pere se na 30 °C, na programu za osjetljivo rublje. Dostupna je u nijansama bež i taupe.

         <?php elseif( noriks_is_type( 'pre', $current_product_id ) ): ?>

                <strong>NORIKS Pre</strong> je jastuk za trudnice oblikovan za spavanje na boku. Dva krila obuhvate trbuščić sprijeda i leđa straga, pa tijelo ostaje na strani cijelu noć — bez okretanja na leđa i bez slaganja utvrde od pet običnih jastuka.<br><br>Duljina se prilagođava, pa jastuk prati rast trbuščića kroz cijelu trudnoću. Uz njega dolazi manji jastučić koji stavljate pod trbuh, iza leđa ili među koljena — tri položaja potpore iz istog pakiranja.<br><br>Za razliku od velikih C i U jastuka, NORIKS Pre je kompaktan: partner ostaje u krevetu, okretanje na drugu stranu ide bez preslagivanja, a jastuk stane i u kofer.<br><br>Navlaka je od mješavine bambusa i poliestera — prozračna, mekana i periva u perilici. Punjenje od mikrovlakana zadržava oblik i ne stvara grude.

         <?php elseif( noriks_is_type( 'kneeheat', $current_product_id ) ): ?>

                <strong>NORIKS KneeHeat</strong> je omotač za koljeno koji u jednoj seansi spaja tri terapije: toplinu do 42 °C, zračnu kompresiju i vibracijsku masažu od 60 Hz. Toplina širi krvne žile i olakšava dotok krvi u dublje tkivo, ritmična kompresija potiskuje nakupljenu tekućinu, a vibracija otpušta ukočenost oko zgloba.<br><br>Seansa traje 12 minuta i pokreće se jednim gumbom — bez aplikacije, bez namještanja i bez kabela. Na raspolaganju su 3 stupnja topline i 3 načina vibracije, pa intenzitet prilagodite danu i tegobama.<br><br>Omotač je ergonomski oblikovan i drži se podesivim trakama; odgovara lijevom i desnom koljenu, a u pakiranju je i produžna traka za veće opsege. Tkanina uz kožu je mekana i prozračna.<br><br>Uređaj se puni preko priloženog USB-C kabela i jedno punjenje traje više seansi. Uz njega dobivate 2 godine jamstva na zamjenu.

         <?php elseif( noriks_is_type( 'lift', $current_product_id ) ): ?>

                <strong>NORIKS FaceLift</strong> je kolagenska traka za oblikovanje lica koja spaja dvije stvari koje kreme same ne mogu: ciljanu kompresiju donjeg dijela lica i tkaninu s kolagenom molekularne mase 300 daltona. Kompresija podupire liniju čeljusti prema gore i potiče odvod tekućine, a kolagen dovoljno male molekule prolazi površinski sloj kože.<br><br>Nosi se 20 do 30 minuta dnevno — navečer, dok gledate TV ili završavate njegu lica. Serum ili kremu nanesite prije stavljanja: traka pomaže da se sastojci bolje upiju.<br><br>Čičak-trake na tjemenu i zatiljku prilagode traku svakom obliku glave, a otvori za uši je drže na mjestu. Tkanina je mekana, prozračna i elastična — 81 % poliamid i 19 % elastan.<br><br>Traka je periva i višekratna: jedna traka izdrži do 15 uporaba pune učinkovitosti, što je više od dva tjedna svakodnevnog oblikovanja. Jedna univerzalna veličina.

         <?php elseif( noriks_is_type( 'snug', $current_product_id ) ): ?>

                <strong>NORIKS Snug</strong> je jastuk za cijelo tijelo oblikovan u obliku slova S. Većina jastuka za tijelo je ravna — vaše tijelo nije. Zato Snug prati liniju tijela i podupire ramena, kukove i koljena u isto vrijeme.<br><br>Kad spavate na boku bez potpore, rame nosi cijelu težinu, kuk propada, a kralježnica se uvija. Tri točke potpore raspoređuju težinu, pa nijedno mjesto ne nosi cijelo opterećenje.<br><br>Dimenzije su 105 cm duljine i 30 cm širine — dovoljno da vas podupre od ramena do koljena, a da ne zauzme cijeli krevet. Punjenje je od tisuća finih, elastičnih vlakana koja se vraćaju u oblik i ne sliježu se ni nakon mjeseci upotrebe.<br><br>Rashladna navlaka se skida i pere u perilici na 40 °C, a tkanina propušta zrak cijelu noć. Dostupan je u šest boja: plava, roza, siva, zelena, ljubičasta i tamnoplava.

         <?php elseif( noriks_is_type( 'kompwom', $current_product_id ) ): ?>

                <strong>NORIKS FIT Woman</strong> je oblikujuća majica u kojoj je reljef upleten u samu tkaninu, a ne tiskan na nju. Široki pojas prelazi preko trbuha i bokova, a drugi ide preko leđa.<br><br>Kompresija je raspoređena po širini, a ne stisnuta u jednu točku, pa ništa ne ureza. Trbuh ostaje zaglađen, struk suženiji, a leđa dobivaju potporu koja pomaže da stojite uspravnije.<br><br>Pletivo je bešavno, tanko i mat — nestane ispod košulje, sakoa ili pripijene haljine. Ne rola se tijekom dana i ne ocrtava se ispod odjeće.<br><br>Perite u stroju na 30 °C, bez izbjeljivača, glačanja i sušilice. Dostupna je u tri boje (crna, tamnosiva, roza) i veličinama od S do 3XL. Ako ste između dvije veličine, uzmite veću.

         <?php elseif( noriks_is_type( 'pal', $current_product_id ) ): ?>

                <strong>NORIKS Pal</strong> je štap za hodanje osmišljen oko jednog problema: ustajanja. Uz gornju ručku ima i drugu ručku niže, za koju se primite kad ustajete iz fotelje, s kreveta ili s niske stolice — bez naginjanja naprijed i bez tuđe pomoći.<br><br>Četiri gumene nožice drže štap uspravno kad ga pustite. Ne pada na pod, pa se ne morate saginjati da biste ga podigli. Baza je protuklizna i ostaje stabilna na pločicama, parketu i na neravnom terenu.<br><br>U ručku je ugrađena svjetiljka koja osvjetljava put pred vama — za odlazak do kupaonice noću ili šetnju u sumrak. Uz nju je i zvučni alarm koji upozori ukućane ako padnete ili vam zatreba pomoć.<br><br>Štap je sklopiv i stane u torbu ili pretinac u autu, a visina se podešava u nekoliko sekundi, bez alata, za sve visine korisnika.

         <?php elseif( noriks_is_type( 'slim', $current_product_id ) ): ?>

                <strong>NORIKS Slim</strong> su oblikujuće gaćice visokog struka. Široki pojas prelazi ukriženo preko trbuha i nastavlja se na bokove i leđa, pa je kompresija raspoređena oko cijelog struka, a ne stisnuta u jednu liniju.<br><br>Trbuh je zaglađen, struk izgleda uži, a odjeća pada ravnije — bez nabora iznad hlača i bez ruba koji se ocrtava ispod haljine.<br><br>Pletivo je tanko, mekano i prozračno, s elastičnim mrežastim umecima i pamučnim ulošcem. Gaćice se ne rolaju prema dolje i ne klize tijekom dana, pa ih obučete ujutro i zaboravite do večeri.<br><br>Dostupne su u šest boja (crna, boja kože, tamnoplava, lila, fuksija i šljiva) i veličinama od XS do 5XL. Veličinu birajte prema opsegu struka; ako ste između dvije veličine, uzmite veću.

         <?php elseif( noriks_is_type( 'bowl', $current_product_id ) ): ?>

                <strong>NORIKS Bowl</strong> je povišena zdjelica za hranu i vodu namijenjena malim psima. Zdjela stoji na čeličnom postolju visine 11 cm i nagnuta je za 15°, pa pas jede stojeći, s glavom u prirodnijem položaju umjesto da vrat savija sve do poda.<br><br>Zdjela je plitka (5 cm), pa brkovi ne udaraju o rub, a hrana se ne gura prema van. Promjer je 15 cm, a zapremina oko 430 ml — dovoljno za obrok ili vodu malog psa.<br><br>I zdjela i postolje izrađeni su od nehrđajućeg čelika. Glatka površina ne upija mirise i ne zadržava ostatke hrane kao plastika; dovoljno je isprati je toplom vodom sa sredstvom za pranje posuđa.<br><br>Prikladna je za male pasmine kao što su jazavčar, francuski buldog, šnaucer, mops i maltezer.

         <?php elseif( noriks_is_type( 'relief', $current_product_id ) ): ?>

                <strong>NORIKS Relief</strong> je bambusov steznik za koljeno namijenjen bolnim, ukočenim i natečenim koljenima. Pletivo je gušće oko čašice i s obje strane zgloba, pa je pritisak ravnomjerno raspoređen umjesto da steže u jednoj liniji.<br><br>Blaga, medicinska kompresija potiče protok krvi, smiruje upalu i pomaže da oteklina splasne. Koljeno je stabilnije pri hodanju, čučnju i penjanju stepenicama, a mnogi olakšanje osjete već pri prvom nošenju.<br><br>Nema šarki, remena ni plastike — steznik se jednostavno navuče, prati oblik koljena i ne klizi niz nogu. Tanak je koliko treba da stane ispod hlača i tajica, pa ga možete nositi na poslu, u šetnji, tijekom vježbanja i preko noći. Isti komad odgovara lijevom i desnom koljenu.<br><br>Pletivo od bambusovog vlakna upija vlagu, diše i prirodno sprječava neugodne mirise, bez lateksa. Dostupno je sedam veličina (S do 4XL) — izmjerite opseg noge 10 cm iznad koljenske čašice, a ako ste između dvije veličine, uzmite veću.<br><br>Prikladan je kod artroze, upale patelarne tetive, reumatoidnog artritisa, burzitisa, trkačkog koljena, oticanja i ukočenosti.

         <?php elseif( noriks_is_type( 'doggo', $current_product_id ) ): ?>

                <strong>NORIKS Doggo</strong> je sigurnosni putni krevet za pse koji se pričvršćuje izravno na autosjedalo metalnim ISOFIX kopčama (2 na veličini M, 4 na XL) i s dva podesiva remena oko naslona sjedala. Unutra su sigurnosne kopče za ormu, pa pas ostaje na svom mjestu i ne može iskočiti ili se naglo pomaknuti tijekom vožnje.<br><br>Izrađen je od mekane, vodootporne veganske kože koja se lako čisti. Uklonjiva unutarnja podloga je mekana, s jedne strane vodootporna, i pere se u perilici. Protuklizno dno drži krevet stabilnim na sjedalu ili podu, a bočni džep čuva povodac, poslastice i igračke.<br><br>Prednji dio se otkopča, pa Doggo postaje ravni krevet za kod kuće, a dvije ručke olakšavaju nošenje.<br><br>Ovaj sustav pričvršćivanja u više točaka pomaže smanjiti pomicanje pri kočenju, skretanju i na dugim vožnjama — i stvara jasno određen prostor u kojem se vaš pas može prirodno smiriti. Svake godine tisuće pasa ozlijede se u autu jer nisu dobro osigurani. Doggo je osmišljen da to promijeni — za sigurnije i kontroliranije putovanje i bezbrižnost jer znate da je vaš pas siguran na svakom putu.<br><br><strong>Veličine i pasmine:</strong><br>M — 53 cm (D) × 47 cm (Š) × 44 cm (V), 2 ISOFIX kopče<br>XL — 100 cm (D) × 52 cm (Š) × 44 cm (V), 4 ISOFIX kopče<br><br>Veličina M idealna je za manje pasmine poput jazavčara, border terijera, cockapooa i koker španijela — pse koji tijekom putovanja vole tijesan, siguran kutak. Veličina XL namijenjena je većim pasminama poput border kolija, labradora i njemačkih ovčara te pruža više prostora za ispružanje uz zadržanu stabilnost i udobnost. Savršena je i za kućanstva s dva manja psa koji udobno stanu jedan uz drugoga, a ima i dva zasebna unutarnja povodca — po jedan za svakog psa, ili oba za jednog psa radi dodatne sigurnosti.<br><br><strong>Sigurnost psa u vožnji:</strong> prometna pravila nalažu da životinje u vozilu moraju biti prevožene tako da ne ometaju vozača i ne ugrožavaju sigurnost vožnje. Nepropisno osiguran pas može značiti kaznu i, što je najvažnije, ozbiljne ozljede vašeg psa u slučaju nesreće. NORIKS Doggo osmišljen je da vam pruži:<br><strong>Sigurnost:</strong> vaš ljubimac je siguran i udoban na svakom putovanju.<br><strong>Usklađenost s propisima:</strong> pas je tijekom vožnje propisno osiguran.<br><strong>Bezbrižnost:</strong> putujte opušteno, znajući da je vaš krzneni prijatelj siguran.<br><br>To nije samo proizvod — to je obveza prema sigurnosti vašeg psa. Odaberite Doggo za putovanja bez brige!

         <?php elseif( noriks_is_type( 'tuck', $current_product_id ) ): ?>

                <strong>NORIKS Tuck</strong> su oblikujuće kratke hlačice visokog struka s posebnim protukliznim materijalom s unutarnje strane pojasa koji prianja uz kožu, pa se ne smotaju prema dolje kao obično oblikujuće rublje.<br><br>Mekana, rastezljiva tkanina nježno zaglađuje trbuh i bedra, a ne steže previše. Rubovi su laserski rezani, pa nema izbočenih šavova koji bi se vidjeli kroz odjeću. Hlačice sežu visoko na struk i do sredine bedra, pa pokrivaju sva područja koja želite zagladiti — i sprječavaju trljanje bedara.<br><br>Obučete ih jednom i zaboravite na njih cijeli dan — bez povlačenja i namještanja. Odjeća lijepo pada, a vi se osjećate samopouzdano.<br><br><strong>Sastav:</strong> 55 % najlon, 45 % elastan. Bez lateksa i bez silikona. Dostupne su u smeđoj i crnoj boji, u veličinama od S do XXL.

         <?php elseif( noriks_is_type( 'fleecetights', $current_product_id ) ): ?>

                <strong>NORIKS FleeceTights</strong> su tople hulahopke podstavljene flisom koje izgledaju kao gola koža ispod tankih prozirnih hulahopki — a griju kao debele tajice. Idealne su za haljine, suknje i kratke hlače na jesen i zimu.<br><br><strong>Kompresijski pojas koji oblikuje struk:</strong> visoki pojas nježno steže i zaglađuje trbuh i bokove<br><strong>Prozirni izgled u 4 nijanse:</strong> Vanilija (svijetla), Latte (preplanula), Karamela (brončana) i Espresso (tamna) — za svaku nijansu kože<br><strong>Ultra mekan, debeo flis:</strong> toplo vani, a bez pregrijavanja u zatvorenom; flis ne stvara kuglice<br><strong>Samo jedan šav:</strong> glatka silueta, bez urezivanja i neugodnih linija<br><strong>Izrazito rastezljive (4-way stretch):</strong> ne trgaju se i ne paraju, prianjaju uz gležanj i ne nabiru se na koljenima<br><strong>Za visoke i niske:</strong> odgovaraju unutarnjoj duljini noge od 61 do 102 cm<br><br>Izgledaju prozirno, ali su potpuno neprozirne — ništa se ne vidi ni kad čučnete ili se sagnete. Dovoljno su tanke da ih nosite i ispod traperica.<br><br><strong>Sastav:</strong> 38,9 % najlon, 14,9 % elastan, 46,2 % poliester.<br><br><strong>Veličine:</strong> XXS/XS, XS/S, M/L, L/XL, 2XL/3XL i 4XL/5XL. Ako ste između dvije veličine, uzmite manju za čvršće oblikovanje ili veću za opušteniji osjećaj.

         <?php elseif( noriks_is_type( 'catfountain', $current_product_id ) ): ?>

                <strong>NORIKS CatFountain</strong> je fontana za mačke od nehrđajućeg čelika s mlazom u obliku slavine koji budi prirodni nagon vaše mačke da pije više vode — <strong>i do 3x više</strong>. Bolja hidracija pomaže smanjiti rizik od problema s bubrezima i urinarnih infekcija.<br><br><strong>Nehrđajući čelik 304:</strong> bez BPA, siguran za mačke; zaustavlja 99 % bakterija i sprječava sluz, mirise i mačje akne koje uzrokuju plastične zdjelice<br><strong>Mlaz u obliku slavine:</strong> oponaša slavinu iz koje mačke ionako vole piti<br><strong>Ultra tiha pumpa (&lt; 20 dB):</strong> može raditi cijelu noć bez ometanja sna<br><strong>Filtriranje u 3 sloja:</strong> filtar s aktivnim ugljenom i spužva za predfiltriranje zadržavaju dlake, ostatke, mirise i nečistoće<br><strong>Kapacitet 2,2 L:</strong> dovoljno vode za 8–10 dana, s pokazivačem razine vode<br><strong>Čišćenje za manje od 5 minuta:</strong> dijelovi od nehrđajućeg čelika mogu se prati u perilici posuđa<br><strong>Široka i plitka posuda:</strong> bez zamora brkova, prikladna i za više mačaka<br><br><strong>U kutiji:</strong> 1x NORIKS CatFountain fontana 2,2 L, 1x filtri za 2 mjeseca, 1x adapter za napajanje, 1x upute za upotrebu.<br><br><strong>Specifikacije:</strong> fontana s kabelom (napajanje preko adaptera, mora biti priključena na struju); filtre mijenjajte svaka 2–4 tjedna; dimenzije (D × Š × V): 17,5 × 17,5 × 17,5 cm.

         <?php elseif( noriks_is_type( 'dishsheets', $current_product_id ) ): ?>

                <strong>NORIKS DishSheets</strong> su listići za pranje posuđa — nova alternativa agresivnim, toksičnim deterdžentima za posuđe. Biljnog su podrijetla, biorazgradivi i bez plastičnog otpada.<br><br>Svaki listić je točno odmjeren: <strong>1 listić = 1 puno pranje</strong>. Dovoljno su svestrani za perilicu posuđa, pranje u sudoperu, namakanje tvrdokornih lonaca i tava ili za četku za posuđe.<br><br>Sadrže samo nužne sastojke — <strong>bez izbjeljivača, fosfata, bojila</strong> i drugih nepotrebnih agresivnih kemikalija. Uz to dolaze u <strong>ambalaži bez plastike</strong>.<br><br><strong>Točno odmjereni:</strong> svaki listić je prava količina za jedno puno pranje<br><strong>Višenamjenski:</strong> za perilicu posuđa, pranje na ruke, namakanje lonaca ili četku za posuđe<br><strong>Prikladni za štedljive perilice:</strong> kompatibilni s visokoučinkovitim (HE) perilicama posuđa za optimalan rezultat<br><strong>Bez štetnih tvari:</strong> bez plastične ambalaže i bez agresivnih kemikalija — čistoća u koju možete imati povjerenja<br><strong>Snažni i nježni:</strong> uklanjaju masnoću, prljavštinu i zapečenu hranu<br><br><strong>Pakiranje:</strong> 1 paket = 80 listića (80 pranja), 3 paketa = 240 listića, 6 paketa = 480 listića. Miris: svježi limun.<br><br><strong>Sastojci:</strong> natrijev kokosulfat, polivinil alkohol, lauril glukozid, glicerin, saponini, natrijev citrat, natrijev bikarbonat, miris, enzimi.

         <?php elseif( noriks_is_type( 'dograincoat', $current_product_id ) ): ?>

                Recite zbogom zagušljivim kabanicama koje ne propuštaju zrak. <strong>NORIKS DogRaincoat</strong> prva je prozračna kabanica za pse na svijetu. Izrađena je od naprednih materijala koji propuštaju zrak, a istodobno ostaju vodootporni — vaš pas ostaje udoban i suh.<br><br>&bull; Vodootporan, vjetrootporan, lagan i izdržljiv materijal<br>&bull; Bolja regulacija temperature: višak topline i vlage izlazi van — veća udobnost<br>&bull; Podesivi ovratnik čuva vrat i lice psa suhima, a ne zaklanja mu pogled<br>&bull; Podesive vezice kod stražnjih nogu za lako obavljanje nužde<br>&bull; Kroj koji ne sputava kretanje — pas se kreće slobodno<br>&bull; Lako se oblači i skida, s kopčama sa strane<br>&bull; Unutarnja mrežasta podstava za dodatnu udobnost, ne lijepi se za dlaku<br>&bull; Reflektirajuće trake sa strane kabanice za sigurnost<br>&bull; Otvor za povodac sa zaštitnim preklopom koji ne propušta kišu

         <?php elseif( noriks_is_type( 'maternityleggings', $current_product_id ) ): ?>

                <strong>NORIKS MaternityLeggings</strong> — vaše se tijelo mijenja. Naše tajice rastu s njim.<br><br>Ove tajice za trudnice prilagođavaju se vama – a ne obrnuto. <strong>Podupiru trbuh, rasterećuju leđa</strong> i daju vam osjećaj sigurne potpore, bez stezanja.<br><br>Mekan, prozračan materijal pruža ugodan osjećaj pri nošenju, a u hladnijem dijelu godine ugodno vas grije.<br><br>I jer vaše tijelo čini nešto veliko, zaslužuje odjeću koja ga u tome podupire.<br><br><strong>Rasterećuju trbuh i leđa:</strong> posebna mrežasta tkanina nježno podupire trbuščić i tako rasterećuje donji dio leđa.<br><strong>100 % neprozirne:</strong> zahvaljujući kvalitetnim vlaknima tkanina ostaje potpuno neprozirna i pri intenzivnom kretanju – o tome ne morate brinuti.<br><strong>Ne spuštaju se:</strong> ekstra visok, mekan pojas priljubljuje se uz trbuh bez pritiska – i bez stalnog spuštanja. Na poslu, u šetnji ili na kauču: tajice uvijek stoje točno ondje gdje trebaju.<br><strong>Rastu s vašim trbuhom:</strong> mekan pojas prilagođava se trbuščiću – bilo da ste u 10. ili 35. tjednu trudnoće. Bez pritiska, bez spuštanja, jednostavno udobno od početka do kraja.<br><strong>Oblikuju noge i stražnjicu:</strong> oblikuju bez stezanja – za stražnjicu i noge koje ćete rado pokazati.<br><br><strong>Materijal:</strong> 94 % poliamid, 6 % elastan. Ovaj sastav odabran je namjerno – za ugodnu kompresiju nogu i potporu trbuhu i donjem dijelu leđa. Materijal istodobno pruža ugodnu toplinu, a da se ne oznojite. Rezultat: <strong>100 % neprozirne, elastične, tople, prozračne</strong> – i jednostavno super udobne.<br><br><strong>Zašto su NORIKS tajice za trudnice najbolji izbor</strong><br><strong>Visok, elastičan pojas</strong> – nježno podupire trbuh, bez stezanja<br><strong>Dizajn koji čuva leđa</strong> – podupire i rasterećuje donji dio leđa<br><strong>Udobne za svaku priliku</strong> – savršene za svakodnevicu, slobodno vrijeme ili laganu tjelovježbu<br><strong>Prozračne i mekane</strong> – sprječavaju znojenje i ostaju ugodno prozračne<br><strong>Jednostavno održavanje i dugotrajnost</strong> – zadržavaju oblik i nakon mnogo pranja<br><strong>Jednostavan dizajn</strong> – lako se kombiniraju s majicom, haljinom ili puloverom<br><br>Tajice sjede visoko preko trbuha, pružaju nježnu potporu i istodobno rasterećuju donji dio leđa. Bez spuštanja, bez štipanja, bez stezanja – umjesto toga osjećate se slobodno i poduprto pri svakom pokretu. Mnoge žene potvrđuju: „Napokon tajice koje podupiru trbuh i osjetno rasterećuju leđa.”<br><br><strong>Zaključak – vaše nove omiljene tajice:</strong> NORIKS tajice za trudnice spajaju udobnost, potporu trbuhu i rasterećenje leđa. Za trudnoću, babinje ili jednostavno kao udobne tajice za svaki dan – uz njih ste cijeli dan opušteni.<br><br><strong>Boje:</strong> crna, tamnosiva i svijetlosmeđa.<br><strong>Veličine:</strong> S (36) – XXL (48–50). Odaberite svoju uobičajenu veličinu prije trudnoće (pogledajte tablicu veličina).

         <?php elseif( noriks_is_type( 'vacuumsealer', $current_product_id ) ): ?>

                <strong>NORIKS VacuumSealer</strong> — bežični ručni vakuumski aparat za hranu. Vakuumira hranu <strong>za manje od 5 sekundi</strong> i dulje je čuva svježom: smanjuje bacanje hrane i štedi novac, brz je, kompaktan i jednostavan za upotrebu te se isplati već nakon nekoliko upotreba.<br><br>Ovaj kompaktni vakuumski aparat osmišljen je za praktičnu svakodnevnu upotrebu – snažan, a ipak prijenosan. Ima punjivu bateriju od <strong>1200 mAh</strong> i puni se preko <strong>USB priključka (5 V)</strong>, pa ga koristite jednostavno, bez glomazne opreme. S dimenzijama <strong>20,5 × 4,7 cm</strong> i težinom od samo <strong>237 g</strong> lagan je, jednostavan za rukovanje i lako ga je spremiti u bilo koji kutak kuhinje.<br><br><strong>Punjiva baterija:</strong> jednim punjenjem vakuumirate 500–1000 vrećica.<br><strong>Pametno automatsko isključivanje:</strong> pritisnite tipku za početak, a uređaj se sam isključi kada završi.<br><strong>Kompaktan i lagan:</strong> stane u svaku ladicu i možete ga ponijeti i na put.<br><strong>Vakuumske vrećice:</strong> sigurne za zamrzivač, mikrovalnu i perilicu posuđa, bez mirisa i curenja, izdržljive i višekratne.<br><br><strong>Kako se koristi:</strong> 1. napunite vrećicu hranom; 2. zatvorite vrećicu; 3. prislonite aparat na ventil i pritisnite tipku; 4. aparat se sam isključi kada završi.<br><br><strong>U paketu:</strong> NORIKS VacuumSealer vakuumski aparat, kabel za punjenje, kopča za jednostavno zatvaranje vrećice, korisnički priručnik i vakuumske vrećice (10, 20 ili 30 – po izboru). Polovica vrećica ima zapreminu od oko 1 litre, a druga polovica oko 2 litre.<br><br>Uz NORIKS kupujete bez brige: <strong>pravo na povrat u roku od 30 dana</strong> i <strong>besplatna dostava za narudžbe iznad 70 €</strong>.

         <?php elseif( noriks_is_type( 'dualpillow', $current_product_id ) ): ?>

                <strong>NORIKS DualPillow</strong> — jastuk 2 u 1: dva jastuka u jednom, <strong>mekan poput oblaka izvana</strong> i <strong>potporan iznutra</strong>. Osmišljen za savršen omjer mekoće i potpore te učinkovito olakšanje za vrat.<br><br><strong>Kako djeluje:</strong> prilagodljiva potporna jezgra nalazi se unutar mekanog vanjskog sloja – potpora i udobnost u jednom jastuku, umjesto da birate između njih. Potpora u dvije visine i ergonomske zone drže vrat u pravilnom položaju cijelu noć, bez pomicanja i grudanja.<br><br><strong>Za koga je:</strong> idealan za sve koji se noću prevrću i bude se s bolovima u vratu ili leđima – bez obzira spavate li na boku, leđima ili trbuhu.<br><br><strong>Prednosti:</strong> potpora koju su osmislili osteopati, zadržava oblik i punoću, prozračna i rashlađujuća izrada za svježiji san, jedinstveni dizajn 2 u 1 s vanjskim slojem koji se skida i pere.<br><br><strong>Pravo na povrat u roku od 30 dana</strong> · Besplatna dostava za narudžbe iznad 70 €.

         <?php elseif( noriks_is_type( 'airtravel', $current_product_id ) ): ?>

                <strong>NORIKS AirTravel</strong> — putni ruksak s ugrađenim vakuumskim sustavom za putnike koji cijene praktičnost, učinkovitost i sigurnost. <strong>Preskočite red za predaju prtljage i čekanje na traci</strong> – ruksak ima dimenzije ručne prtljage i stane ispod sjedala u avionu, a kompresija udvostručuje prostor, pa stane odjeće za do 10 dana.<br><br>Spakirajte odjeću kao u bilo koji ruksak, pritisnite ventil i istisnite zrak. Prostrani pretinci mogu se proširiti, vodoodbojan i izdržljiv materijal štiti vaše stvari, a podstavljene naramenice olakšavaju nošenje. Tu su i poseban pretinac za cipele, podstavljeni pretinac za laptop, skriveni džepovi za putovnicu i novac, traka za pričvršćivanje na kovčeg i ugrađeni TSA lokot.<br><br><strong>Zapremina:</strong> 22–48 litara (prilagodljivo kompresijom)<br><strong>Dimenzije:</strong> 49/43 × 32 × 15–20 cm<br><strong>Težina:</strong> 1,6–1,8 kg<br><strong>Materijal:</strong> 100 % reciklirani najlon 900D (GRS certifikat, bez PFC-a), podstava i mrežica od poliestera<br><br>Imate <strong>pravo na povrat u roku od 30 dana</strong>, a za narudžbe iznad 70 € dostava je besplatna.

         <?php elseif( noriks_is_type( 'pethairglove', $current_product_id ) ): ?>

                <strong>NORIKS PetHairGlove</strong> — prestanite bacati novac na valjke za dlačice koji odustanu nakon tri prolaza. Rukavica <strong>podiže ugrađene dlake ljubimaca s bilo koje površine</strong> – višekratna, periva i bez dopuna.<br><br><strong>Elektrostatska mrežica od 5 mm:</strong> poništava statički naboj koji drži dlake u tkanini i izvlači ih iz korijena jednim potezom – i fine, gotovo nevidljive dlake.<br><strong>Dvosmjerna vlakna:</strong> djeluju u oba smjera i skupljaju dlake u jednu grudicu koju lako skinete.<br><strong>Za svaku vrstu dlake:</strong> kratka, gruba, fina ili duga – za sve pasmine pasa, mačke, zečeve i druge ljubimce.<br><strong>Od kauča do auta:</strong> kauč, tepih, sjedalo i tepisi u autu, posteljina, odjeća i krevet za ljubimca – bez mijenjanja alata i bez oštećivanja tkanine (baršun, mikrovlakna, traper, presvlake).<br><strong>Bez nereda:</strong> skupljene dlake ostaju na mrežici i ne padaju natrag.<br><br><strong>Upotreba:</strong> 1) navucite rukavicu, 2) prijeđite preko površine i skupite dlake, 3) skinite grudicu dlaka i rukavicu isperite pod tekućom vodom.<br><br><strong>Veličina:</strong> jedna veličina, pristaje svakoj ruci (za ljevake i dešnjake).<br><strong>Materijal:</strong> elektrostatska tkanina s dvosmjernim vlaknima, vodootporan materijal i ojačani šavovi.<br><br>Uz NORIKS kupujete bez brige: <strong>pravo na povrat u roku od 30 dana</strong> i <strong>besplatna dostava za narudžbe iznad 70 €</strong>.

         <?php elseif( noriks_is_type( 'seatcushion', $current_product_id ) ): ?>

                <strong>NORIKS SeatCushion</strong> — ortopedski jastuk za sjedenje s potporom za donja leđa. <strong>Izrez za trticu</strong> uklanja izravan pritisak s trtice, a oblikovana površina podupire kralježnicu i vraća zdravo držanje. Memorijska pjena visoke gustoće ravnomjerno raspoređuje težinu na kukove i bedra, pa noge ne utrnu.<br><br><strong>Vanjska navlaka:</strong> prozračna pletena tkanina, skidljiva i periva, hipoalergena.<br><strong>Jezgra:</strong> prilagodljiva ortopedska memorijska pjena – netoksična, s certifikatom OEKO-TEX®, osmišljena za ublažavanje pritiska i pravilno držanje.<br><strong>Dimenzije:</strong> 44 × 42 cm, visina naslona 32 cm.<br><br><strong>Za svako sjedalo:</strong> protuklizna podloga drži ga na mjestu na autosjedalima, uredskim i blagovaonskim stolicama te invalidskim kolicima.
         <?php elseif( noriks_is_type( 'breadbag', $current_product_id ) ): ?>

                <strong>NORIKS BreadBag</strong> — vrećica za kruh od pamuka i <strong>pravog pčelinjeg voska</strong>. Vosak je utrljan duboko u tkaninu, pa vrećica diše taman koliko treba: vlaga izlazi polako, <strong>korica ostaje hrskava, a sredina mekana</strong> – kruh ostaje <strong>do 3× dulje svjež</strong>. Bez plastike, bez hladnjaka, jednostavno na radnoj ploči.<br><br>
                <strong>Materijal:</strong> pamuk s pravim pčelinjim voskom (ručno utrljan), bez plastike.<br>
                <strong>Veličina:</strong> 33 × 43 cm – stane velika pogača iz lijevanog lonca ili dva manja kruha jedan uz drugi.<br>
                <strong>Zatvaranje:</strong> rolanjem, s kopčama na obje strane.<br>
                <strong>Prikladno za:</strong> kruh, kruh od kiselog tijesta, baguette, pecivo.<br>
                <strong>Upotreba:</strong> kruh ostavite da se ohladi, stavite ga u vrećicu reznom stranom prema dolje, gornji rub zarolajte 2 – 3 puta i zakopčajte. Vrećicu držite na sobnoj temperaturi, ne na izravnom suncu i ne u hladnjaku.<br>
                <strong>U paketu:</strong> 2, 4 ili 6 vrećica, ovisno o odabranom kompletu.<br><br>
                Pravo na povrat u roku od 30 dana · Besplatna dostava za narudžbe iznad 70 €

         <?php elseif( noriks_is_type( 'travelkit', $current_product_id ) ): ?>

                <strong>NORIKS TravelKit</strong> — vakuumska putna vrećica za odjeću s <strong>električnom pumpom na USB punjenje</strong>. Spakirajte odjeću kao u kofer, zatvorite hermetički patentni zatvarač, priključite pumpu i pritisnite tipku – za nekoliko sekundi vrećica se smanji na otprilike pola. Tako u <strong>istu torbu stane do 60 % više</strong>, a 10 – 15 komada odjeće (majice, traperice, haljine, džemperi) stane u ručnu prtljagu.<br><br>
                <strong>Mjere vrećice:</strong> 45 × 30 × 20 cm (zapremina 27 l) – stane u kofer za ručnu prtljagu, ruksak, putnu torbu ili predanu prtljagu. Pravila za ručnu prtljagu razlikuju se od kompanije do kompanije, zato prije leta provjerite dopuštene dimenzije i težinu kod svoje zrakoplovne kompanije.<br>
                <strong>Materijal:</strong> izdržljiv najlon s TPU zaštitom, otporan na trganje i vodootporan; nepropusni patentni zatvarač koji zadržava i neugodne mirise. Težina vrećice samo 0,24 kg.<br>
                <strong>Električna pumpa:</strong> kompaktna 8,5 × 3,5 cm, USB-C punjenje, do 20 kompresija po punjenju. Vrećicu možete komprimirati i ručno – smotajte je i istisnite zrak kroz ventil.<br>
                <strong>U paketu (1 kom):</strong> vakuumska putna vrećica + električna pumpa (punjenje USB-C).<br><br>
                Pravo na povrat u roku od 30 dana · Besplatna dostava za narudžbe iznad 70 €


         <?php elseif( noriks_is_type( 'kneelight', $current_product_id ) ): ?>

                <strong>NORIKS KneeLight</strong> — bežični uređaj za koljeno koji u jednom omotaču spaja <strong>toplinu, vibracijsku masažu i crveno svjetlo</strong> (630 + 850 nm). Pričvrstite ga na koljeno, odaberite postavke i pritisnite start – za ugodnu toplinu i opuštanje kod kuće, na kauču ili u krevetu.<br><br><strong>Upravljanje:</strong> tri tipke i LED zaslon.<br><strong>Toplina:</strong> 3 razine – 41 °C, 49 °C i 60 °C.<br><strong>Vibracija:</strong> niska, visoka ili automatska.<br><strong>Baterija i punjenje:</strong> bežično, punjenje USB-C kabelom (u paketu) za 2 – 5 sati, do 8 – 10 tretmana po punjenju; za punjenje koristite USB punjač s EU utikačem.<br><strong>Težina:</strong> 0,86 kg – lagan i prenosiv.<br><strong>Veličina:</strong> jedna veličina s potpuno podesivim remenima.<br><strong>Sigurnost:</strong> automatsko isključivanje nakon 10 minuta.<br><br><em>Napomena: NORIKS KneeLight nije medicinski proizvod i ne zamjenjuje pregled ni savjet liječnika. Ako imate zdravstvenih tegoba, ozljedu, implantate ili elektrostimulator srca ili ste trudni, prije upotrebe se posavjetujte s liječnikom. Ne koristite ga kod djece.</em>

         <?php elseif( noriks_is_type( 'upholsterycleaner', $current_product_id ) ): ?>

                <strong>NORIKS UpholsteryCleaner</strong> — prenosni usisavač za mokro čišćenje presvlaka, kauča, tepiha, madraca i autosjedala. Ima <strong>dva odvojena spremnika</strong>: jedan za čistu vodu i jedan za usisanu prljavu vodu. Ciljano prska svježu vodu na presvlaku, otapa duboko ukorijenjenu prljavštinu, a zatim prljavu vodu ponovno usisava. Uklanja grinje, mrlje od znoja i neugodne mirise, a presvlake se brzo suše (manje od 20 minuta).<br><br><strong>Dimenzije:</strong> 49 × 24 × 30 cm.<br><strong>Težina:</strong> 6 kg.<br><strong>Snaga:</strong> 600 W (maksimalno).<br><strong>Usisna snaga:</strong> više od 15.000 Pa.<br><strong>Duljina kabela:</strong> 5 m. <strong>Duljina crijeva:</strong> 1,7 m.<br><strong>Spremnik za čistu vodu:</strong> 3 L. <strong>Spremnik za prljavu vodu:</strong> 1,5 L.<br><strong>Utikač:</strong> EU. CE oznaka kvalitete.<br><br><strong>U paketu:</strong> 1x NORIKS UpholsteryCleaner usisavač za mokro čišćenje, 3x nastavka, 1x četka za čišćenje, 1x kabel za napajanje, 1x upute za uporabu.<br><br><strong>Prikladan za:</strong> kauče i presvlake (mikrovlakna, velur, uobičajene tkanine za presvlake), tepihe i tepisone, madrace i autosjedala. Nije prikladan za tanke zavjese i pravo krzno.<br><br>Uz NORIKS kupujete bez brige: <strong>pravo na povrat u roku od 30 dana</strong> i <strong>besplatna dostava za narudžbe iznad 70 €</strong>.

         <?php elseif( noriks_is_type( 'neckmassager', $current_product_id ) ): ?>

                <strong>NORIKS NeckMassager</strong> — bežični masažer za vrat i ramena s ritmičnim valjcima koji oponašaju masažu pravim rukama. Prilagođava se vratu, ramenima, leđima i drugim dijelovima tijela, pa ugodnu masažu možete uživati kod kuće ili na putu. Duboka gnječeća masaža i umirujuća toplina potiču cirkulaciju, opuštaju napete mišiće i potiču limfnu drenažu oko vrata i ramena.<br><br><strong>Intenzitet:</strong> nježno, umjereno, intenzivno.<br><strong>Toplina:</strong> blaga, topla (infracrveno grijanje).<br><strong>Način rada:</strong> u smjeru kazaljke na satu, suprotno od kazaljke na satu, masaža dubokog tkiva.<br><strong>Izvedba:</strong> bežični dizajn, 4 masažna čvora, remeni za prilagodbu pritiska.<br><strong>U paketu:</strong> masažer i punjač. CE certifikat.<br>

         <?php elseif( noriks_is_type( 'groundingmat', $current_product_id ) ): ?>

                <strong>NORIKS GroundingMat</strong> — podloga za uzemljenje koja vaše tijelo povezuje sa zemljom, kao kad bosi stojite na travi. Priključuje se u <strong>priključak za uzemljenje utičnice</strong>, kroz koji ne teče struja, a kad koža dotakne vodljivu površinu podloge, električni naboj koji se na tijelu nakuplja od uređaja oko nas odvodi se u zemlju.<br><br><strong>Vodljiva ugljična vlakna:</strong> netoksičan vodljivi materijal koji prenosi elektrone zemlje na kožu.<br><strong>Poliuretanski sloj:</strong> ugodan za kožu, vodootporan, izdržljiv i iznimno udoban.<br><strong>Polimerna pjena visoke gustoće:</strong> ne kliže i ne ostavlja tragove ni na jednoj površini.<br><strong>Sigurno uzemljenje:</strong> kabel s ugrađenim otpornikom od 50 kΩ.<br><strong>Dimenzije:</strong> podloga 60 × 40 cm, kabel za uzemljenje 4,5 m.<br><strong>U paketu:</strong> 1 × podloga NORIKS GroundingMat, 1 × kabel za uzemljenje, 1 × adapter za uzemljenje (EU utičnica), 1 × upute za uporabu.<br><br><strong>Upotreba:</strong> 1) kabel pričvrstite na spojni klin podloge, 2) drugi kraj uključite u priključak za uzemljenje utičnice, 3) podlogu dodirnite bilo kojim dijelom tijela – pod stopalima za radnim stolom, ispred fotelje ili na krevetu. Izravan dodir s kožom je najbolji, no djeluje i kroz tanak sloj odjeće.<br><br>Podloga nije medicinski proizvod i ne zamjenjuje savjet liječnika.<br><br>Uz NORIKS kupujete bez brige: <strong>pravo na povrat u roku od 30 dana</strong> i <strong>besplatna dostava za narudžbe iznad 70 €</strong>.

         <?php elseif( noriks_is_type( 'grillbasket', $current_product_id ) ): ?>

                <strong>NORIKS GrillBasket</strong> — valjkasta košara za roštilj za povrće i sitnu hranu. <strong>Hrana se nikad ne lijepi:</strong> peče se ravnomjerno i ostaje na mjestu. Izrađena je za visoke temperature – izdrži <strong>do 500 °C</strong> na svim vrstama roštilja – i sigurna je za perilicu posuđa.<br><br>Napunite je povrćem, škampima, ribom ili drugom sitnom hranom, stavite je na plinski roštilj, roštilj na drveni ugljen ili na pelete i okrećite za savršeno zapečenu hranu. Otvoreni dizajn propušta plamen, toplinu i dim, pa hrana dobiva pravi dimljeni okus roštilja.<br><br><strong>Detalji o proizvodu:</strong><br>• Izrada od nehrđajućeg čelika s mrežom otpornom na hrđu<br>• Drška za jednostavno rukovanje<br>• Kukica u paketu<br>• Veličina: 9 × 30 cm<br>• Izrađena da traje sezonu za sezonom<br><br><strong>Materijal:</strong> nehrđajući čelik 304, metalna mreža od 0,8 mm, drvene drške koje se odvijaju rukom (za roštiljanje sa zatvorenim poklopcem).<br><strong>U paketu:</strong> košara za roštilj s drškom i kukica za otvaranje poklopca.<br><br>Uz NORIKS kupujete bez brige: <strong>pravo na povrat u roku od 30 dana</strong> i <strong>besplatna dostava za narudžbe iznad 70 €</strong>.

         <?php elseif( noriks_is_type( 'therapillow', $current_product_id ) ): ?>

                <strong>NORIKS TheraPillow</strong> — terapijski jastuk za vrat 3 u 1. Spaja <strong>toplinu, vibraciju i cervikalnu trakciju</strong>: samo 15 minuta dnevno ublažava ukočenost, stres i nakupljenu napetost zbog pognutog držanja glave.<br><br><strong>Cervikalna trakcija:</strong> sustav na zračni pogon nježno podiže i isteže vrat pod kutom od 26° i podupire njegovu prirodnu zakrivljenost.<br><strong>Terapija vibracijom:</strong> 4 uzorka vibracije za opuštanje napetih mišića i čvorova.<br><strong>Terapija toplinom:</strong> grijaći jastučići zagrijavaju se na 44 °C.<br><strong>Bežični i punjivi:</strong> baterija od 2500 mAh, 4 sesije od 30 minuta po punjenju, automatski isklop nakon 30 minuta.<br><br><strong>Specifikacije:</strong> veličina 39,4 × 27 × 15,9 cm · težina 0,88 kg · 100 % poliuretanska memorijska pjena · 3 načina rada (zračna trakcija, toplina, vibracijska masaža) · punjenje USB-C kabelom (90 minuta do punog) · ulazna snaga 10 W · automatski isklop svakih 30 min i regulacija temperature (do 44 °C).<br><br><strong>U paketu:</strong> 1 x NORIKS TheraPillow, 1 x USB-C kabel za punjenje, korisnički priručnik, vrećica s vezicom za pohranu.

         <?php elseif( noriks_is_type( 'calmingcollar', $current_product_id ) ): ?>

                <strong>NORIKS CalmingCollar</strong> — umirujuća ovratnica s feromonima za mačke (pakiranje s 2 ovratnice). Pomaže ublažiti stres vaše mačke i ponašanja koja on izaziva – mokrenje izvan posude, označavanje, grebanje, skrivanje ili sukobe s drugim mačkama – na prirodan način, bez lijekova. Feromoni se oslobađaju 24 sata dnevno i pomažu mački da se osjeća sigurno i opušteno kod kuće, na putovanju ili kod veterinara.<br><br><strong>Manje ponašanja zbog stresa:</strong> pomaže kod prskanja, grebanja, skrivanja i svađa s drugim mačkama.<br><strong>Pomaže pri korištenju posude:</strong> ublažava tjeskobu zbog koje mačke ponekad mokre izvan posude.<br><strong>Za kućanstva s više mačaka:</strong> pomaže smanjiti napetost i agresivnost.<br><strong>Bez lavande i kamilice:</strong> bez eteričnih ulja koja nisu preporučljiva za mačke.<br><strong>Sigurnosno otpuštanje:</strong> ovratnica se sama otpusti ako zapne za neki predmet.<br><strong>Dugotrajno djelovanje:</strong> svaka ovratnica djeluje do 30 dana – pakiranje s 2 ovratnice do 60 dana.<br><br><strong>Kako djeluje:</strong> ovratnica oponaša prirodne umirujuće signale mačaka (feromone lica i umirujuće feromone majke) uz dodatak valerijane. Tako pomaže mački da se osjeća sigurno – bez lijekova i bez uspavljivanja.<br><br><strong>Idealna za:</strong> mačke pod stresom ili tjeskobne mačke kod kuće; mačke koje se svađaju, prskaju ili označavaju teritorij; nervozne mačke tijekom vožnje ili posjeta veterinaru; kućanstva s više mačaka.<br><br><strong>Upute:</strong> ovratnicu stavite oko vrata mačke tako da ostane oko 0,6 cm prostora. Odrežite višak, ali ostavite 2,5–5 cm za podešavanje. Kod mačića koji rastu redovito provjeravajte da ovratnica nije pretijesna, a kod svih mačaka svaki dan provjerite da dobro pristaje. Ako mačka nikada nije nosila ovratnicu, prvih 10 minuta stavite je labavo i nadzirite mačku; zatim je podesite tako da ispod nje stanu dva prsta i nadzirite još 30 minuta. Prije prve upotrebe zarežite označene dijelove kako biste aktivirali sigurnosno otpuštanje. Nakon rukovanja operite ruke.<br><br><strong>Duljina:</strong> 38 cm (skraćuje se po potrebi). <strong>Širina:</strong> 1 cm. <strong>Materijal:</strong> izdržljiva, vodootporna i fleksibilna plastika.<br><strong>U pakiranju:</strong> 2 umirujuće ovratnice s feromonima za mačke.<br><br>Ovratnica ne zamjenjuje veterinarski pregled – ako je promjena u ponašanju mačke nagla ili je prati bol, posavjetujte se s veterinarom.<br><br>Uz NORIKS kupujete bez brige: <strong>pravo na povrat u roku od 30 dana</strong> i <strong>besplatna dostava za narudžbe iznad 70 €</strong>.

         <?php elseif( noriks_is_type( 'petdental', $current_product_id ) ): ?>

                <strong>NORIKS PetDental</strong> — zdraviji pas počinje ovdje. Nije riječ samo o dahu: riječ je o udobnosti, zdravlju usne šupljine i napokon nečemu što djeluje – <strong>bez četkanja zubi</strong>. Sprej za svakodnevnu njegu zubi pasa i mačaka jednostavno poprskate <strong>izravno na zube ili na hranu</strong>.<br><br><strong>Svježi poljupci:</strong> pomaže ukloniti uzrok lošeg zadaha, umjesto da ga samo prikrije.<br><strong>Bez borbe s četkicom:</strong> nanosi se u nekoliko sekundi, bez stresa i bez otpora.<br><strong>Njega desni:</strong> neven i alge pomažu njegovati desni i smanjiti nakupljanje plaka i kamenca.<br><strong>Samo malo ljubavi svaki dan:</strong> okus govedine – ljubimci ga ni ne primijete.<br><br><strong>Upute za uporabu (dnevno):</strong><br>XS (do 5 kg): 2–3 prskanja – bočica traje otprilike 1,5 mjesec<br>S (5–10 kg): 3–4 prskanja – otprilike 6 tjedana<br>M (10–20 kg): 4–6 prskanja – otprilike 5 tjedana<br>L (20 kg i više): 6–8 prskanja – otprilike 1 mjesec<br>Ako ljubimac ne voli da ga dirate oko usta, poprskajte hranu, poslasticu ili igračku za žvakanje.<br><br><strong>Sastav:</strong> voda, glicerin, Lactobacillus ferment (probiotici), bakrov kompleks klorofilina, ekstrakt alge Chlorella vulgaris, ekstrakt smeđe alge Ascophyllum nodosum, ekstrakt lista zelenog čaja (Camellia sinensis), ekstrakt nevena (Calendula officinalis), kalijev sorbat, aroma govedine.<br><br><strong>Rezultati:</strong> mnogi vlasnici svježiji dah primijete u prvih 1–2 tjedna, a vidljivije promjene na zubima nakon nekoliko tjedana redovite svakodnevne upotrebe. Proizvod ne zamjenjuje veterinarski pregled – ako vaš ljubimac ima zdravstvenih problema, posavjetujte se s veterinarom.<br><br>Uz NORIKS kupujete bez brige: <strong>pravo na povrat u roku od 30 dana</strong> i <strong>besplatna dostava za narudžbe iznad 70 €</strong>.

         <?php elseif( noriks_is_type( 'showertowel', $current_product_id ) ): ?>

                <strong>NORIKS ShowerTowel</strong> — jedan ručnik, pet minuta, koža koja se stvarno osjeća drugačije. Antibakterijski ručnik za piling tijela dugačak <strong>122 cm</strong> lako dohvaća leđa, stopala i ruke – bez ičije pomoći.<br><br><strong>Tehnologija uravnoteženog pilinga:</strong> jedinstveno šesterokutno tkanje spaja dvije razine pilinga u jednom ručniku – mekšu stranu za svakodnevnu upotrebu i teksturiranu stranu za dublji piling. Nježno uklanja odumrle stanice, potiče cirkulaciju i stvaranje kolagena, bez oštećenja zaštitne barijere kože.<br><br><strong>Dizajn za brzo sušenje:</strong> tkanina se suši za otprilike 15 minuta, pa ručnik ostaje svjež i higijenski čist.<br><strong>Antibakterijska srebrna nit:</strong> ioni srebra (99,9 %) sprječavaju neugodne mirise prije nego što nastanu.<br><strong>Vlakna bambusovog ugljena:</strong> prirodno uravnotežuju lučenje sebuma, čiste začepljene pore i poboljšavaju upijanje njege – bez agresivnih kemikalija.<br><strong>Fizički piling bez kiselina:</strong> nježan i za suhu, zrelu i osjetljivu kožu.<br><br><strong>Kako koristiti:</strong> 1) uđite pod tuš i navlažite ručnik, 2) dodajte omiljeni gel za tuširanje i napravite bogatu pjenu, 3) prođite ručnikom preko leđa, zatim ga presavijte i operite ostatak tijela, 4) temeljito isperite i objesite da se osuši.<br><br><strong>Duljina:</strong> 122 cm (48 inča).<br><strong>Materijal:</strong> šesterokutno tkanje s vlaknima bambusovog ugljena i ionima srebra, dvije teksture u jednom ručniku.<br><strong>Boje:</strong> crna, roza, plava i bijela.<br><br>Uz NORIKS kupujete bez brige: <strong>pravo na povrat u roku od 30 dana</strong> i <strong>besplatna dostava za narudžbe iznad 70 €</strong>.

         <?php elseif( noriks_is_type( 'antitheftbag', $current_product_id ) ): ?>

                <strong>NORIKS AntiTheftBag</strong> — ostanite organizirani i elegantni uz pametne pretince i <strong>skriveni džep za zaštitu od krađe</strong>. Izrađena je od mekane <strong>veganske kože otporne na vodu i ogrebotine</strong> koja traje godinama. Dolazi s <strong>dvije podesive naramenice</strong> – nosite je kao ručnu torbu, torbu za rame ili preko tijela. Izgleda dizajnerski, nosi se bez napora, a uz nju dobivate i <strong>odgovarajuću malu torbicu-novčanik</strong>.<br><br><strong>Sigurnost i stil u svakom šavu:</strong> sigurni gornji patentni zatvarač, elegantne rese i skriveni stražnji džep – od iPada do sjajila za usne, sve je na svom mjestu i na sigurnom.<br><strong>Ljepota koja traje:</strong> mekana veganska koža s luksuznim metalnim okovom, otporna na ogrebotine i vodu – sezonu za sezonom.<br><strong>Jedna torba, tri izgleda:</strong> podesiva naramenica u nekoliko sekundi pretvara ručnu torbu u torbu za rame ili torbu preko tijela.<br><strong>Svakodnevna izdržljivost:</strong> testirana na udarce i otporna na habanje – od ureda do izlaska nakon posla.<br><br><strong>Što stane unutra:</strong> iPad, časopis A4, kozmetika, boca za vodu, kišobran, iPhone i laptop od 13,3".<br><strong>U paketu:</strong> hobo torba, 2 podesive naramenice, mala torbica-novčanik u istoj boji.<br><strong>Težina:</strong> oko 450 g.<br><strong>Materijal:</strong> veganska koža, metalni okov.<br><strong>Boje:</strong> smeđa, crna, plava, siva, bordo i crvena.<br><br>Uz NORIKS kupujete bez brige: <strong>pravo na povrat u roku od 30 dana</strong> i <strong>besplatna dostava za narudžbe iznad 70 €</strong>.

         <?php elseif( noriks_is_type( 'ultrasoniccleaner', $current_product_id ) ): ?>

                <strong>NORIKS UltrasonicCleaner</strong> — ultrazvučni i UV-C čistač za svakodnevno čišćenje dentalnih pomagala: alignera, retainera, noćnih štitnika i štitnika za zube, proteza, udlaga za izbjeljivanje te glava četkica za zube. Snažne ultrazvučne vibracije od <strong>43.000 Hz</strong> stvaraju milijune mikroskopskih mjehurića koji odvajaju plak, naslage i nečistoće i s teško dostupnih mjesta, a <strong>ugrađeno UV-C svjetlo</strong> tijekom ciklusa obasjava spremnik i pomaže smanjiti bakterije na pomagalu (do 99,9 % prema laboratorijskom testiranju). Bez četkanja, ribanja i namakanja – rezultat je čisto pomagalo bez neugodnih mirisa, spremno za nošenje.<br><br><strong>Upotreba:</strong> napunite spremnik hladnom vodom do oznake, stavite pomagalo, zatvorite poklopac i dodirom pokrenite ciklus od 3 ili 5 minuta; zatim pomagalo po potrebi kratko isperite. Radi samo s vodom – tablete za čišćenje nisu potrebne.<br><strong>Nazivna snaga:</strong> 20 W · <strong>napon / struja:</strong> DC 12 V / 2 A · <strong>ultrazvuk:</strong> 43 kHz · <strong>UV-C svjetlo:</strong> 200–280 nm · <strong>buka:</strong> &lt; 65 dB(A).<br><strong>Mjerač vremena:</strong> 3 min / 5 min · <strong>upravljanje:</strong> na dodir.<br><strong>Spremnik:</strong> nehrđajući čelik, 80 × 45 mm, do 165 ml · <strong>kućište:</strong> ABS + nehrđajući čelik 304.<br><strong>Boje:</strong> biserno bijela, oniks crna · <strong>utikač:</strong> EU.<br><br>Uz NORIKS kupujete bez brige: <strong>pravo na povrat u roku od 30 dana</strong> i <strong>besplatna dostava za narudžbe iznad 70 €</strong>.

         <?php elseif( noriks_is_type( 'pillorganizer', $current_product_id ) ): ?>

                <strong>NORIKS PillOrganizer</strong> — jedna kompaktna torbica umjesto hrpe bočica. Lijekovi na recept, vitamini i tablete protiv bolova za svaki slučaj – sve na jednom mjestu, <strong>bez zveckanja bočica</strong> na dnu torbe. Otvara se poput malog registratora: unutra je mehanizam s prstenovima koji drži <strong>14 prozirnih vrećica sa zatvaračem</strong>.<br><br><strong>Naljepnice za pisanje:</strong> na svakoj vrećici upišite ime, AM / PM (jutro / večer) i dan.<br><strong>Ponesite samo što trebate:</strong> vrećice se jednostavno skidaju s prstenova – jedna vrećica stane u džep za taj dan.<br><strong>Dvostruki zatvarač:</strong> svaka vrećica se zatvara, a zatim i cijela torbica.<br><strong>2 mrežasta bočna džepa</strong> za flastere, maramice i sitnice.<br><strong>Otporna na prskanje</strong> – obrišete je u nekoliko sekundi.<br><br><strong>U paketu:</strong> torbica-organizator i 14 vrećica sa zatvaračem koje se skidaju.<br><strong>Veličina:</strong> 16 × 12 × 6 cm; vrećica 11,4 × 8,9 cm.<br><strong>Težina:</strong> 160 g sa svih 14 vrećica.<br><strong>Materijali:</strong> vanjski sloj od PU materijala, vrećice od EVA materijala sa zatvaračem.<br><strong>Natpisi:</strong> pišite samo trajnim markerom (na uljnoj bazi).<br><br>Uz NORIKS kupujete bez brige: <strong>pravo na povrat u roku od 30 dana</strong> i <strong>besplatna dostava za narudžbe iznad 70 €</strong>.

         <?php elseif( noriks_is_type( 'bottlesling', $current_product_id ) ): ?>

                <strong>NORIKS BottleSling</strong> — vaša termo čaša i 4 džepa, a ruke slobodne. Prestanite žonglirati termo čašom, mobitelom i ključevima: torbica u sebe prima vašu omiljenu <strong>termo čašu od 0,9–1,2 l (30–40 oz) s ručkom</strong>, dva prednja džepa sa zatvaračem čuvaju mobitel i kartice, a odvojiva naramenica i kratka ručka na vrhu omogućuju nošenje preko tijela ili u ruci.<br><br><strong>Dodatni sloj hladnoće:</strong> vanjski sloj od vodoodbojnog keper poliestera i izolacijska podstava od aluminijske folije dodaju još jedan izolacijski sloj oko čaše – piće dulje ostaje hladno, a kondenzacija ostaje u torbici, ne na vašoj odjeći.<br><br><strong>Četiri džepa, nula kaosa:</strong> dva prednja pretinca sa zatvaračem, dva elastična bočna džepa i unutarnja kukica za ključeve – sve ima svoje mjesto.<br><br><strong>Značajke:</strong><br>– pristaje izoliranim termo čašama od 0,9–1,2 l (30–40 oz) s ručkom<br>– dvoslojna izolacija (keper poliester + podstava od aluminijske folije)<br>– 4 džepa za organizaciju<br>– unutarnja kukica za ključeve<br>– odvojiva naramenica (do 95 cm) + kratka ručka na vrhu<br>– zatvaranje na čičak na vrhu<br><br><strong>U paketu:</strong> torbica, 1 × odvojiva naramenica (do 95 cm), 1 × odvojiva ručka na vrhu.<br><strong>Težina i dimenzije:</strong> 270 g; torbica 25 × 8 × 7,5 cm.<br><strong>Materijal:</strong> keper poliester + izolacijska aluminijska folija.<br><strong>Boje:</strong> karirana zelena, karirana kaki, karirana bež, karirana sivo-crna, karirana crna, crna, smeđa, maslinasta, mint, bež, nježno roza, žarko roza, svijetloljubičasta, leopard pastelni i leopard oniks.<br><br>Uz NORIKS kupujete bez brige: <strong>pravo na povrat u roku od 30 dana</strong> i <strong>besplatna dostava za narudžbe iznad 70 €</strong>.

         <?php elseif( noriks_is_type( 'fleeceshawl', $current_product_id ) ): ?>

                <strong>NORIKS FleeceShawl</strong> — obavijte se laganom toplinom i elegancijom. Izrađen od raskošno mekanog, <strong>vrhunskog flisa</strong>, ovaj svestrani komad prekrasno pada preko ramena za profinjen, a opušten izgled. Lagana, <strong>prozračna tkanina grije bez pregrijavanja</strong> – savršeno za slojevito odijevanje u uredu, elegantna putovanja ili dotjeran večernji izgled.<br><br>Bezvremenski dizajn laska svakom tipu tijela i lako se kombinira sa svime, od traperica do haljina. Bilo da obavljate obveze ili idete na večeru, ovaj šal pruža dotjeranu udobnost koja se bez napora prilagođava svakoj prilici. Dovoljno je lagan da ga lako spakirate, a dovoljno topao za hladne dane – omiljeni dodatak svima koji cijene profinjenu svakodnevnu eleganciju.<br><br><strong>Značajke:</strong><br><strong>Super mekan</strong> – raskošno mekan flis ugodan na koži<br><strong>Elegantan</strong> – prirodno pada preko ramena, uredan i dotjeran izgled<br><strong>Jedna veličina za sve</strong> – kroj koji laska svakom tipu tijela<br><strong>Prozračan</strong> – grije bez pregrijavanja<br><br><strong>Dimenzije:</strong> duljina 158 cm (62,2 inča), širina 110 cm (43,3 inča) – jedna veličina za sve.<br><strong>Održavanje:</strong> može se prati u perilici.<br><strong>Boje:</strong> svijetlosiva, bež, karamel, kaki, tamnosiva, bordo, tamnozelena i crna te u ograničenom izdanju ljubičasta, tamnoplava i bijela.<br><br>Uz NORIKS kupujete bez brige: <strong>pravo na povrat u roku od 30 dana</strong> i <strong>besplatna dostava za narudžbe iznad 70 €</strong>.

         <?php elseif( noriks_is_type( 'kidspillow', $current_product_id ) ): ?>

                <strong>NORIKS KidsPillow</strong> — ergonomski jastuk oblikovan za dječju glavu. Nježna kontura drži <strong>glavu i vrat u neutralnom položaju</strong>, pa mnogoj djeci lakše ostaju zatvorena usta i dišu na nos cijelu noć. Mnogi roditelji primijete <strong>mirnije disanje i manje hrkanja</strong> već u prvih 7 noći.<br><br><strong>Značajke:</strong><br><strong>NORIKS kontura</strong> – nježno udubljenje koje potiče disanje na nos, bez neugodnog pritiska na vrat<br><strong>Prozračna jezgra</strong> – TPE saće i 3D mreža propuštaju zrak kroz jastuk, bez znojenja i nemirnih noći<br><strong>Hipoalergenska Tencel površina</strong> – otporna na grinje, nježna prema osjetljivoj koži<br><strong>Dimenzije za djecu</strong> – nije smanjeni jastuk za odrasle, nego jastuk osmišljen prema dječjim proporcijama<br><strong>Za spavanje na leđima i na boku</strong> – glava i vrat u pravilnom položaju u oba položaja<br><br><strong>Materijali:</strong> vanjska tkanina od pletiva sa slojem zraka, Lenzing Tencela u tkanju „ptičje oko” i 3D mreže; unutrašnjost od mekanih TPE cjevčica u obliku saća, antibakterijskog pamuka Invista i bisernog pamuka.<br><strong>Veličine (dob djeteta):</strong> 1–3 godine (48 × 29 cm, visina 2–4 cm), 3–8 godina (50 × 30 cm, visina 4–6 cm), 8–18 godina (53 × 32 cm, visina 6–9 cm) – pogledajte tablicu veličina. Između dvije veličine odaberite veću.<br><strong>Održavanje:</strong> mrlje očistite vlažnom krpom i blagim sapunom te ostavite da se potpuno osuši na zraku.<br><br><em>NORIKS KidsPillow nije medicinski proizvod i ne zamjenjuje savjet pedijatra ili stomatologa. Za djecu mlađu od 18 mjeseci prije upotrebe se posavjetujte s pedijatrom.</em><br><br>Uz NORIKS kupujete bez brige: <strong>pravo na povrat u roku od 30 dana</strong> i <strong>besplatna dostava za narudžbe iznad 70 €</strong>.

         <?php elseif( noriks_is_type( 'mattresstopper', $current_product_id ) ): ?>

                <strong>NORIKS MattressTopper</strong> — umorni ste od buđenja s bolovima ili osjećaja umora? Pridružite se tisućama zadovoljnih kupaca i <strong>nadogradite svoj madrac u nekoliko minuta</strong> uz luksuzni, ekstra debeli nadmadrac od <strong>10 cm</strong>.<br><br>Jednostavno ga stavite na svoj madrac i <strong>poboljšajte san, ublažite bolove</strong> te se svako jutro budite <strong>odmorni i puni energije</strong>. Zašto mijenjati madrac kada možete nadograditi svoj san?<br><br><strong>Zašto ćete ga voljeti:</strong><br><strong>Udobnost kao na oblaku</strong> – osjećaj kao da spavate u hotelu s 5 zvjezdica<br><strong>Ublažava bolove</strong> – podupire i ublažava pritisak na leđa, vrat i kukove<br><strong>Dugotrajan</strong> – može se prati u perilici, a punjenje dugo zadržava oblik<br><strong>Tisuće zadovoljnih kupaca</strong> – vole ga ljudi diljem Europe<br><br><strong>Značajke:</strong><br>– ultra mekana udobnost<br>– luksuzno punjenje debljine 10 cm<br>– prozračna tkanina<br>– duboke elastične trake na uglovima drže nadmadrac na mjestu<br><br><strong>Visina:</strong> 10 cm.<br><strong>Veličine:</strong> 90 × 190, 120 × 190, 137 × 190, 152 × 203 i 198 × 203 cm (pogledajte tablicu veličina).<br><strong>Održavanje:</strong> može se prati u perilici.<br><br>Uz NORIKS kupujete bez brige: <strong>pravo na povrat u roku od 30 dana</strong> i <strong>besplatna dostava za narudžbe iznad 70 €</strong>.

         <?php elseif( noriks_is_type( 'silkboxers', $current_product_id ) ): ?>

                <strong>NORIKS SilkBoxers</strong> — svakodnevni luksuz: <strong>gladak osjećaj svile</strong> uz izdržljivost i potporu potrebne za svakodnevno nošenje. Izrađene od kvalitetne <strong>mješavine svile, najlona, viskoze i elastana</strong>, pružaju iznimnu udobnost, prozračnost i dugotrajnu izdržljivost.<br><br><strong>Ključne značajke:</strong><br><strong>Vrhunska tkanina od svilene mješavine</strong> – iznimno glatka, prozračna i nježna prema osjetljivoj koži<br><strong>Udobnost koja regulira temperaturu</strong> – pomaže da ostanete svježi i suhi cijeli dan<br><strong>Anatomski oblikovan prednji dio</strong> – za prirodan položaj i potporu<br><strong>Konstrukcija protiv trljanja</strong> – manje trenja za udobnost cijeli dan, i pri dugom nošenju<br><strong>Pojas koji se ne uvija</strong> – ostaje ravan i siguran ispod svake odjeće<br><strong>Svakodnevna izdržljivost</strong> – zadržavaju oblik, mekoću i kroj<br><strong>Jednostavno održavanje</strong> – pranje u perilici na nježnom programu (preporučujemo mrežastu vrećicu za rublje)<br><br><strong>Materijal:</strong> vrhunska svilena mješavina, svila gustoće 23 momme, u kombinaciji s viskozom, najlonom i malo elastana za kroj, rastezljivost i strukturu. Prirodno prozračna, regulira temperaturu i sprječava neugodne mirise.<br><br><strong>Kroj:</strong> krojene za muško tijelo – za udobnost cijeli dan.<br>→ Pojas bez šavova: bez pritiska, bez tragova, bez umora.<br>→ Suženi dio za bedra: bez trenja i bez žuljanja pri svakom koraku.<br>→ Anatomski oblikovan prednji dio: ističe i podupire bez stezanja.<br>→ Oblikovan stražnji dio: drži oblik, a ne sputava.<br>→ Antibakterijska unutarnja podstava: mekana na dodir, za kožu kojoj treba najviše pažnje.<br><br>Savršene za poslovne ljude, česte putnike, aktivan način života i muškarce koji traže vrhunsku udobnost bez kompromisa.<br><br><strong>Boja:</strong> tamnoplava.<br><strong>Veličine:</strong> M–3XL (pogledajte tablicu veličina).<br><strong>Proizvedeno:</strong> u Kini, u tvornici vrhunske kvalitete, iz etičnih izvora.

         <?php elseif( noriks_is_type( 'modalsweatshirt', $current_product_id ) ): ?>

                <strong>NORIKS ModalSweatshirt</strong> dizajnirana je za uzdignutu svakodnevnu udobnost: spaja mekan, gladak osjećaj s urednim, profinjenim izgledom. Izrađena je od visokotehnološke tkanine s <strong>LENZING™ modalom</strong> koja sadrži prirodna celulozna vlakna, pa je ugodna na koži i pomaže regulirati tjelesnu temperaturu u promjenjivim uvjetima.<br><br>Klasični <strong>okrugli izrez</strong> daje bezvremenski, svestran izgled, a <strong>rastezljivost u 4 smjera</strong> omogućuje prirodne pokrete bez osjećaja sputanosti. Glatka, strukturirana silueta spaja svakodnevnu udobnost s dotjeranim izgledom, pa se lako kombinira s ležernim hlačama, trapericama ili krojenim hlačama.<br><br>Stvorena za dugotrajnu udobnost i svestranost: tkanina je <strong>otporna na pilanje</strong> i zadržava glatki izgled i nakon mnogo nošenja. Diskretan sjaj daje profinjen dodir, pa je ova dukserica praktičan izbor za posao, putovanja, vikende i opušteno svakodnevno nošenje.<br><br><strong>Značajke:</strong><br><strong>Tkanina s modalom:</strong> mekan, gladak osjećaj na koži<br><strong>Prirodna celulozna vlakna:</strong> pomažu regulirati tjelesnu temperaturu za svakodnevnu udobnost<br><strong>Rastezljivost u 4 smjera:</strong> fleksibilni pokreti bez ograničenja<br><strong>Klasični okrugli izrez:</strong> uredna, bezvremenska silueta<br><strong>Tkanina otporna na pilanje:</strong> zadržava glatki izgled i nakon mnogo nošenja<br><strong>Diskretan sjaj tkanine:</strong> profinjena, dotjerana završna obrada<br><strong>Strukturirana silueta:</strong> spaja svakodnevnu udobnost s urednim izgledom<br><strong>Svestran svakodnevni stil:</strong> lako se kombinira s trapericama, ležernim ili krojenim hlačama<br><br><strong>Kroj:</strong> udoban regularni kroj s prirodnim prostorom u prsima, ramenima i rukama. Omogućuje slobodne pokrete, a zadržava urednu, strukturiranu siluetu za svakodnevno nošenje.<br><br><strong>Sastav:</strong> 42 % LENZING™ modal, 49 % poliester, 9 % elastan<br><strong>Boje:</strong> sivoplava, bijela, crna i tamnoplava.<br><strong>Veličine:</strong> S–3XL (pogledajte tablicu veličina).

         <?php elseif( noriks_is_type( 'techtee', $current_product_id ) ): ?>

                <strong>NORIKS TechTee</strong> — ikonična majica, usavršena. <strong>Pripijen kroj</strong>, savršeno izbalansiran: pada točno kako treba, oblikuje siluetu i prirodno se prilagođava svakoj građi.<br><br>Nudi izvanrednu <strong>mekoću</strong>, besprijekorno drži oblik i dugo traje. <strong>Tiskana unutarnja etiketa</strong> zamjenjuje klasične ušivene etikete — za udobnost bez imalo iritacije.<br><br>Apsolutni osnovni komad. Bezvremenski. Neizostavan.<br><br><strong>Materijal i izrada:</strong> drugačiji dodir — namjerno. Tkanina spaja češljani pamuk i Sorona®, poliester biljnog podrijetla (od kukuruznog škroba) koji je razvio DuPont, pažljivo doziran kako bi majica besprijekorno držala oblik kroz vrijeme. Na tijelu je drukčija: mekša, fluidnija, s diskretnim sjajem koji tkanini daje blago satensku završnu obradu — daleko od običnog mat pamuka. Besprijekoran pad koji traje. Ako očekujete klasični pamuk, iznenadit će vas. Ako joj date priliku, nećete je htjeti skinuti.<br><br><strong>Sastav:</strong> 72 % češljani pamuk, 28 % Sorona®<br><strong>Kroj:</strong> okrugli izrez, pripijen kroj<br><br><strong>Boje:</strong> crna, bijela, tamnoplava, kaki, siva, nebeskoplava, lososova i tirkizna.<br><strong>Veličine:</strong> S–4XL. Uzmite svoju uobičajenu veličinu (pogledajte tablicu veličina).

         <?php elseif( noriks_is_type( 'widetoeshoes', $current_product_id ) ): ?>

                <strong>NORIKS WideToeShoes</strong> su prozračne tenisice sa širokim prednjim dijelom i debljim potplatom — vaš prvi korak prema slobodi hodanja kao bosonogi. Prostran prednji dio omogućuje prstima da se prirodno rašire i smanjuje pritisak na stopala tijekom dugog hodanja, a lagana izrada smanjuje umor i ostaje izdržljiva.<br><br>Kvalitetni materijali propuštaju zrak, pa stopala ostaju suha i udobna. Potplat pouzdano prianja i na kamenitim i neravnim podlogama, a ojačani prednji dio štiti prste od udaraca. Bilo da hodate planinskim stazama, gradom ili istražujete prirodu, ove tenisice spajaju udobnost i svakodnevnu nosivost.<br><br><strong>Gornji dio:</strong> sintetička koža + tkanina<br><strong>Podstava:</strong> mrežasta tkanina<br><strong>Potplat:</strong> guma<br><strong>Debljina potplata:</strong> debeli gumeni potplat za fleksibilnost i otpornost na klizanje<br><strong>Vodootpornost:</strong> nisu vodootporne, ali se brzo suše<br><strong>Zatvaranje:</strong> vezice<br><br><strong>Boje:</strong> bijelo-siva, smeđa, bež-zelena, bež-crvena, crno-bijela, bež-siva, kaki i tamnosmeđa.<br><strong>Veličine:</strong> EU 37–47. Tenisice mogu biti malo manje — veličinu odaberite prema tablici veličina (duljina uloška = duljina stopala + 1–1,5 cm).

         <?php elseif( noriks_is_type( 'thermoboots', $current_product_id ) ): ?>

                <strong>NORIKS ThermoBoots</strong> su vodootporne zimske čizme s toplom podstavom od flisa, izrađene za pravu toplinu, zaštitu i svakodnevnu udobnost. Potpuno zatvorena izrada drži stopala suhima na kiši, snijegu i bljuzgavici, a debela, mekana podstava od flisa grije cijeli dan — čak i bez čarapa. Lagane su, bez glomaznosti, a neklizajući potplat pouzdano prianja na mokrim i zaleđenim površinama.<br><br>Bočni patentni zatvarač omogućuje obuvanje za 3 sekunde — bez saginjanja i vezica. Čizme sežu iznad gležnja za dodatnu potporu i stabilnost na neravnom terenu, a unisex dizajn odgovara i muškarcima i ženama — za posao, šetnje sa psom i vikende.<br><br><strong>Značajke:</strong><br>• <strong>100 % vodootporne:</strong> potpuno zatvorena izrada, suha stopala na kiši, snijegu i u lokvama<br>• <strong>Topla podstava od flisa:</strong> debela i mekana iznutra, ugodna i bez čarapa<br>• <strong>Lagane i neklizajuće:</strong> za cjelodnevno nošenje, potplat prianja na mokrim i zaleđenim površinama<br>• <strong>Bočni patentni zatvarač:</strong> obuvanje za 3 sekunde, bez vezica<br>• <strong>Potpora gležnju:</strong> visina iznad gležnja za stabilnost na neravnom terenu<br>• <strong>Unisex dizajn:</strong> za muškarce i žene<br><br><strong>Materijali:</strong> topla termo podstava od flisa, 100 % vodootporan vodoodbojni tekstilni gornji dio koji se lako čisti, robustan potplat za sve terene.<br><strong>Boje:</strong> crna, siva i svijetlosmeđa.<br><strong>Veličine:</strong> EU 37–48 (unisex) — odgovaraju uobičajenoj veličini, pogledajte tablicu veličina.

         <?php elseif( noriks_is_type( 'leatherboots', $current_product_id ) ): ?>

                <strong>NORIKS LeatherBoots</strong> su muške udobne kožne čizme koje spajaju udobnost za cijeli dan i čist izgled kože — u čizmama koje ćete obuvati iznova i iznova. Uložak oblikovan prema svodu stopala i mekano jastučenje upijaju udarce svakog koraka, pa stopala, koljena i leđa ostaju manje opterećeni i nakon dugog dana na nogama. Širok prednji dio daje prstima prostor umjesto da ih stišće, a izgledaju kao obične kožne čizme, ne kao glomazna ortopedska obuća.<br><br>Neklizajući gumeni potplat pouzdano prianja na mokrim i sklizavim površinama, gornji dio otporan na vodu odbija laganu kišu i prskanje, a lagana i fleksibilna izrada nema mrtve težine teških čizama. Svaki par izrađen je s naglaskom na izdržljivost, udobnost i pouzdanost u svakodnevnom nošenju — na poslu, u šetnji i vikendom. Dostupne u pet boja (smeđa, svijetlosmeđa, crna, plava i zelena) i veličinama od EU 37 do EU 48.

         <?php elseif( noriks_is_type( 'wafflelongsleeve', $current_product_id ) ): ?>

                <strong>NORIKS WaffleLongSleeve</strong> je vafel majica dugih rukava koja nikad dugo ne ostaje u ladici. Umirujuće je mekana — izrađena od udobne <strong>pamučne vafel tkanine</strong> koja lijepo pada i izgleda promišljeno, a od prvog nošenja osjeća se kao da ste je već dugo nosili.<br><br><strong>Značajke:</strong><br>• <strong>Mekano pamučno vafel pletivo:</strong> ugodno od prvog nošenja<br>• <strong>Spuštena ramena:</strong> ravan kroj od ramena do struka, seže do bokova ili malo ispod<br>• <strong>Rebrasti završeci:</strong> suptilna obrada koja daje strukturu bez krutosti<br>• <strong>Predskupljena tkanina:</strong> nakon pranja i sušenja ostaje iste veličine<br>• <strong>Ne gužva se:</strong> iz sušilice izlazi jednako uredna kao što je ušla<br><br><strong>Kroj:</strong> opušten — malo više prostora od uobičajene veličine u prsima i ramenima, bez viška materijala kao kod oversized modela.<br><strong>Materijal:</strong> 60 % pamuk, 40 % poliester.<br><strong>Boje:</strong> kadulja zelena, sivoplava, tirkizna, bordo, lososova, sivosmeđa, crna, starinska roza, svijetloplava, plava, svijetložuta, bijela, jarko ružičasta, svijetloružičasta, mentol zelena, krem i lila.<br><strong>Veličine:</strong> XS–3XL (unisex) — pogledajte tablicu veličina.

         <?php elseif( noriks_is_type( 'sleepset', $current_product_id ) ): ?>

                <strong>NORIKS SleepSet</strong> je pamučna pidžama u kojoj ćete poželjeti živjeti. Osmišljena je u <strong>opuštenom kroju s dugim rukavima i kratkim hlačicama</strong> i izrađena od laganog pamuka koji se na koži osjeća kao druga koža. Mekana, prozračna i jednostavna za nošenje, prirodno pada niz tijelo za udobnost danju i noću. Nježni rubovi s volančićima daju joj suptilan, ženstven završetak, a ne oduzimaju ništa od njezine jednostavnosti.<br><br>Stvorena je za spora jutra, rane večeri i sve između – bezvremenski pogled na udobnost: nenametljiva, laskava i prekrasno jednostavna. Dovoljno udobna za krevet, dovoljno slatka za opuštanje.<br><br><strong>Materijal:</strong> 92 % pamuk, 8 % elastan – mekana, prirodno prozračna mješavina s blagom rastezljivošću, glatka na dodir, za opušten kroj i udobnost cijeli dan.<br><strong>Kroj:</strong> modelica je visoka 173 cm i nosi veličinu S. Niste sigurni u veličinu? Uzmite jednu veličinu veću.<br><strong>Boje:</strong> bijela sa srcima, smeđa sa srcima, svijetloplava, ružičasta, crna, siva, bjelokosna i maslinasta.<br><strong>Veličine:</strong> XS–XL — pogledajte tablicu veličina.

         <?php elseif( noriks_is_type( 'plushblanket', $current_product_id ) ): ?>

                <strong>NORIKS PlushBlanket</strong> je super mekana, oversized plišana deka nalik oblaku – baršunasta s obje strane, ugodno rastezljiva u četiri smjera, a mekoća joj ostaje i nakon brojnih pranja. Deka koju je teško opisati riječima – i još teže odložiti.<br><br><strong>Značajke:</strong><br>• <strong>Super mekan pliš:</strong> bez grubih rubova, svaki položaj jednako je ugodan<br>• <strong>Rastezljivost u četiri smjera:</strong> prilagođava se tijelu, a ne gubi oblik<br>• <strong>Četiri veličine:</strong> od osobnog pokrivača do pokrivenosti velikog bračnog kreveta<br>• <strong>17 boja i uzoraka:</strong> lako za poklon, lako se uklapa u svaki prostor<br>• <strong>Pere se u perilici i ostaje mekana:</strong> hladno pranje, sušenje na zraku<br><br><strong>Savršena za:</strong> pretvaranje svakog kreveta ili kauča u najmekše mjesto u prostoriji i kao poklon nakon kojeg se ljudi pitaju kako su ikad živjeli bez nje.<br><strong>Materijal:</strong> 95 % poliester, 5 % elastan – plišana i baršunasta s unutarnje i vanjske strane.<br><strong>Boje:</strong> tamnoplava, svijetlosiva, ružičasti vrtlog, ljubičasti tigar, sivi tigar, bjelokosni tigar, plavi tigar, maslinasti tigar, bengalski tigar, jarko ružičasta, plavi val, lavanda, ružičasti kvarc, plava, bordo, mentol i ciklama.<br><strong>Veličine:</strong> Srednja 127 x 152 cm, Velika 152 x 203 cm, XL 229 x 229 cm, Mega 254 x 274 cm – pogledajte tablicu veličina.

         <?php elseif( noriks_is_type( 'compressionsocks', $current_product_id ) ): ?>

                <strong>NORIKS CompressionSocks</strong> su bambusove kompresijske čarape do koljena, <strong>posebno osmišljene za široke listove</strong>. Prava <strong>postupna kompresija (15–20 mmHg)</strong> podržava cirkulaciju i pomaže ublažiti oticanje i osjećaj teških, umornih nogu — a pritom ne steže i ne usijeca se u kožu.<br><br>Izrađene su od mekane mješavine <strong>60 % bambusa, 25 % poliestera i 15 % elastana</strong>: nježne su prema osjetljivoj koži, prozračne i odvode vlagu, a zahvaljujući <strong>rastezljivosti u 4 smjera</strong> lakše se oblače i skidaju od klasičnih kompresijskih čarapa. Manžeta ne ostavlja crvene tragove, a čarape zadržavaju oblik i nakon mnogo pranja.<br><br>Nosite ih cijeli dan (obično 8–12 sati) — na poslu, kod kuće, na putovanjima i dugim letovima. Veličine M–3XL za listove opsega do 71 cm, u 10 boja i uzoraka. Čarape nisu lijek ni zamjena za terapiju; kod zdravstvenih tegoba posavjetujte se s liječnikom.

         <?php elseif( noriks_is_type( 'cloudclogs', $current_product_id ) ): ?>

                <strong>NORIKS CloudClogs</strong> su 3D klompe napravljene za ljude koji su <strong>cijeli dan na nogama</strong> — izdržljive, a na nogama mekane kao oblak. Debeo, mekan potplat ublažava svaki korak, a <strong>protuklizni potplat</strong> daje sigurnost i u dugim radnim smjenama.<br><br>Otvori na gornjem dijelu čine ih <strong>prozračnima</strong> i udobnima i za šira stopala, a <strong>vodootporan</strong> materijal ostaje suh i po kišnim danima. Nosite ih <strong>kao papuče ili natikače</strong> — od jutarnjih obaveza do druženja u dvorištu — ili kao cipele vani; <strong>podesivi remen</strong> omogućuje pristajanje po vašoj mjeri.<br><br>Unisex veličine EU 39–46 (i polovične veličine), u pet boja: crna, bijela, plava, roza i siva.

         <?php elseif( noriks_is_type( 'snugboot', $current_product_id ) ): ?>

                <strong>NORIKS SnugBoot</strong> su tople zimske barefoot čizme s mekanom krznenom podstavom — unisex, za žene i muškarce. Obične zimske cipele stežu stopala i već nakon nekoliko sati izazivaju bol; NORIKS SnugBoot su drugačije. <strong>Širok prostor za prste</strong> omogućuje prstima da se prirodno rašire, a <strong>tanak, mekan i fleksibilan potplat</strong> prilagođava se obliku stopala i daje pravi barefoot osjećaj i prirodan hod.<br><br><strong>Udobna krznena podstava</strong> grije stopala po svakom vremenu, a pritom im omogućuje da dišu. Neklizajući potplat pomaže spriječiti slučajna klizanja i padove na snijegu i skliskim površinama. Dizajn osmišljen prema ortopedskim načelima rasterećuje stopala i zglobove i podupire uspravno držanje. Mekane i lagane, savršene su za svakodnevno zimsko nošenje — u zatvorenom i na otvorenom.<br><br><strong>Boje:</strong> smeđa, crna, svijetlosiva, kava, krem. <strong>Veličine:</strong> EU 36–46 (unisex).

         <?php elseif( noriks_is_type( 'minimizerbra', $current_product_id ) ): ?>

                <strong>NORIKS MinimizerBra</strong> je rashlađujući minimizer grudnjak s punim pokrićem, izgrađen oko <strong>krutog središnjeg panela za razdvajanje</strong>. Gotovo svaki minimizer radi na principu kompresije: gura tkivo zajedno i prema naprijed, pa se ono nagomila u sredini prsa i stvara »policu« zbog koje se pripijene majice napuhnu, a košulje razmiču među gumbima. NORIKS MinimizerBra umjesto toga razdvaja — kruti panel oslanja se na prsnu kost i drži svaku stranu punijih grudi u njezinu prostoru tijekom cijelog dana kretanja. Nema mase, nema police, nema efekta šatora.<br><br><strong>Kako je izrađen:</strong><br>• Kruti panel za razdvajanje — oslanja se na prsnu kost i ne urušava se do podneva<br>• Potpuno bez podstave — bez dodatnog volumena<br>• Košarica s punim pokrićem — drži oblik punijih grudi umjesto da ih spljošti<br>• Debele podstavljene naramenice i široka traka — težina se raspoređuje preko leđa<br>• Rashlađujuća, prozračna tkanina — bez nakupljanja topline ispod grudi<br>• Žica koja ne bode — oblikuje košaricu bez urezivanja<br><br><strong>Boje:</strong> bež, crna, bijela i boja kave.<br><strong>Veličine:</strong> trake 70 – 115 i košarice B – I (74 veličine) — svoju veličinu pronađite u tablici veličina; ako ste između dvije veličine, uzmite veću. U paketu za svaki komad zasebno birate boju i veličinu.
         <?php elseif( noriks_is_type( 'cashmeresweater', $current_product_id ) ): ?>

                <strong>NORIKS CashmereSweater</strong> je pulover s okruglim izrezom izrađen od <strong>mješavine kašmira i svile</strong> – nevjerojatno mekan, prirodnog i lepršavog pada. Dizajniran je sa <strong>spuštenim ramenima i opuštenim krojem</strong>, pa odiše jednostavnom, nenametljivom elegancijom. Svestran je i savršeno ide uz hlače ili suknje – od radnog dana do vikenda.<br><br><strong>Sastav:</strong> 74,7 % kašmir, 25,3 % mulberry svila (osim rebrastih rubova)<br><strong>Njega:</strong> preporučujemo profesionalno kemijsko čišćenje<br><strong>Kroj:</strong> opušteni kroj sa spuštenim ramenima, okrugli izrez<br><br><strong>Boje:</strong> sivosmeđa, čokoladno smeđa, bijela, svijetlosiva, tamnosiva, crna, nježno ružičasta, ljubičasto crvena, ljubičasta, plava, sivoplava, borovo zelena, crvena i bordo.<br><strong>Veličina:</strong> jedna veličina – M (US 6–10). Duljina 54 cm, duljina rukava 45 cm, širina ramena 73 cm, opseg prsa 144 cm.

         <?php elseif( noriks_is_type( 'nursingbra', $current_product_id ) ): ?>

                <strong>NORIKS NursingBra</strong> je grudnjak za dojenje bez šavova »sve u jednom« – za dojenje, spavanje i svakodnevno nošenje. Pruža <strong>udobnost cijeli dan, čak i za najosjetljiviju kožu</strong>, a zahvaljujući rastezljivom dizajnu prilagođava se promjenjivoj veličini i obliku tijela tijekom trudnoće i dojenja. Jedinstvena tkanina mekana poput pera izrađena je od glatkog, prozračnog materijala koji je nježan prema koži, prsima i rebrima i prianja uz obline bez šavova koji pritišću kožu ili ostavljaju tragove. Ispod odjeće je nevidljiv.<br><br><strong>Značajke:</strong><br>• Vrhunska udobnost – bez žice, bez šavova<br>• Otporan na curenje – upijajuća podstava, vodootporan<br>• Svilenkasto mekan – prozračna tkanina poput druge kože<br>• Savršeno pristaje – daje potporu, podesiv<br>• Košarice koje se otvaraju jednom rukom – kopčice za dojenje jednim klikom<br>• Jastučići koji se ne vade<br>• Široke podesive naramenice i čvrste kopče na leđima<br>• Svaka košarica pokriva do 3 veće veličine<br>• Uz svaki grudnjak besplatni produžetak trake u istoj boji (5 cm)<br><br><strong>Boje:</strong> crna, bež, zelena, sivo-smeđa, ružičasta, bijela i bež čipka.<br><strong>Veličine:</strong> S – 4XL (bež čipka S – 2XL) — veličinu pronađite u tablici veličina prema košarici i opsegu ispod grudi. U paketu za svaki komad zasebno birate boju i veličinu.
         <?php elseif( noriks_is_type( 'dogbed', $current_product_id ) ): ?>

                <strong>NORIKS DogBed</strong> je premium ortopedski krevet za pse u obliku sofe. Prilagođen je kralježnici psa i pomaže <strong>smanjiti pritisak na zglobove</strong> za udobniji odmor. Izrađen je od <strong>debele i izdržljive tkanine od umjetne janjeće vune</strong> koja je otporna na stvaranje kuglica – idealno za pse koji vole grebati ili se sklupčati. <strong>Dva naslona za ruke i jastuk</strong> podupiru vrat vašeg psa dok leži na boku ispruženih šapa, a <strong>navlaka se skida i pere u perilici</strong>, pa ležaj jednostavno održavate čistim, dan za danom.<br><br><strong>Značajke:</strong><br>• Nježna potpora zglobovima<br>• Navlaka koja se skida i pere u perilici<br>• Povišeni naslon za glavu<br>• Mekana udobnost koja traje<br><br><strong>Boje:</strong> bež, tamnosiva, bijela, ružičasta, plava, tamnozelena, tamnosmeđa i smeđa.<br><strong>Veličine:</strong> M (60 × 45 × 30 cm), L (80 × 57 × 33 cm), XL (100 × 67 × 40 cm) i 2XL (120 × 75 × 40 cm) — veličinu odaberite prema duljini i težini psa u tablici veličina; ako ste u dvojbi, odaberite veću veličinu. U paketu za svaki krevet zasebno birate boju i veličinu.

         <?php elseif( noriks_is_type( 'slingbag', $current_product_id ) ): ?>

                <strong>NORIKS SlingBag 2.0</strong> je putna torbica preko ramena za sigurno i praktično nošenje bez ruku, kamo god išli. Izrađena je od <strong>500D najlonske tkanine</strong> – istog materijala kao u vrhunskoj opremi za prirodu – pa je čvršća, otpornija na vremenske uvjete i izrađena da traje godinama. Remen ima <strong>unutarnju čeličnu sajlu</strong> otpornu na rezanje, a <strong>sustav zaključavanja s 3 točke</strong> zamjenjuje staru plastičnu kopču. Uz tijelo je <strong>skriveni stražnji džep</strong> za gotovinu i kartice, posvuda su <strong>YKK® patentni zatvarači</strong>, podstava od tkanine koja <strong>blokira RFID</strong> štiti kartice i putovnicu, a unutra je kopča za ključeve.<br><br><strong>Specifikacije:</strong><br>• <strong>Mini:</strong> 19 × 14 × 4 cm – mobitel, ključevi, putovnica, kabeli i prijenosna baterija<br>• <strong>Regular:</strong> 22 × 15 × 4 cm – plus grickalice, sunčane naočale, punjač i mali tablet<br>• <strong>Max:</strong> 28 × 19,5 × 6 cm – plus knjiga, slušalice preko ušiju ili tablet do 11"<br>• <strong>Remen:</strong> podesivi, najviše 130 cm – jedna veličina za sve<br>• <strong>Materijal:</strong> 500D najlon, YKK® patentni zatvarači, RFID tkanina (0,022 – 0,047 Ω, 75 g/m²)<br>• Sve veličine uklapaju se u ograničenja za osobni predmet u zrakoplovu (Ryanair, easyJet, United, American Airlines).


         <?php elseif( noriks_is_type( 'bathmat', $current_product_id ) ): ?>

                <strong>NORIKS BathMat</strong> je upijajući protuklizni tepih za kupaonicu. Nema više natopljenih tepiha, nema više mokrog poda: <strong>trenutačno upija vodu</strong>, brzo se suši i čvrsto prianja uz pod pa nikad ne kliže. Otporan je na neugodne mirise i plijesan – kupaonica svaki dan ostaje čista, sigurna i svježa.<br><br><strong>Zašto su tisuće kućanstava prešle na njega:</strong><br>• Trenutačno upija vodu<br>• Brzo se suši i ostaje svjež<br>• Ne kliže – siguran za djecu i starije osobe<br>• Otporan na neugodne mirise i plijesan<br><br><strong>4 sloja:</strong><br>• <strong>Brzosušeća površina</strong> – upija vlagu u nekoliko sekundi<br>• <strong>Jezgra otvorenih ćelija</strong> – odvodi vodu i ubrzava isparavanje<br>• <strong>Sloj za kontrolu vlage</strong> – sprječava natapanje i plijesan<br>• <strong>Protuklizna baza</strong> – čvrsto drži tepih na pločicama, drvu, vinilu i drugim podlogama<br><br><strong>Veličine:</strong> Mala 40 × 60 cm i Standardna 50 × 80 cm, debljina manje od 5 mm (stane ispod većine vrata).<br><strong>Boje:</strong> antracit, svijetloplava, svijetlosiva, šumsko zelena i bež. U paketu za svaki tepih zasebno birate boju i veličinu.<br><strong>Gdje ga koristiti:</strong> svugdje gdje voda dolazi na pod – ispred tuša i kade, ispred umivaonika, u kuhinji, na ulazu, na terasi ili ispod zdjelice za kućnog ljubimca.

         <?php elseif( noriks_is_type( 'travelbag', $current_product_id ) ): ?>

                <strong>NORIKS TravelBag</strong> je putna torba za ručnu prtljagu s kojom pakirate pametnije, putujete lakše i izbjegavate naknade za prtljagu – sa stilom. Stane <strong>više od 38 komada odjeće i do 5 pari cipela</strong>, ugrađena vješalica i podstava otporna na gužvanje čuvaju odjeću urednom, a model <strong>Roller</strong> ima odvojivu teleskopsku ručku i kotačiće koji se pričvršćuju i skidaju u nekoliko sekundi.<br><br><strong>Što je čini posebnom:</strong><br>• Prostor za svaku kombinaciju i još malo više<br>• Mogućnost odvojivih kotačića (model Roller)<br>• Više džepova za šminku i sitnice<br>• Sustav pakiranja bez gužvanja s ugrađenom vješalicom<br>• Poseban pretinac za cipele<br>• Dimenzije ručne prtljage<br><br><strong>U paketu:</strong><br>• 1x podstavljena naramenica<br>• 1x torbica za kozmetiku / cipele<br><br><strong>Ostali detalji:</strong><br>• <strong>Dimenzije:</strong> 51 × 23 × 32 cm (dimenzije ručne prtljage)<br>• <strong>Materijal:</strong> kvalitetna, ekološki prihvatljiva PU koža<br>• <strong>Vodoodbojni premaz:</strong> štiti od prolivenih tekućina i slabe kiše<br>• <strong>Težina:</strong> 1,1 kg<br>• Patentni zatvarači koji ne zapinju<br><br><strong>Boje:</strong> ružičasta, crna i bijela.<br><strong>Model:</strong> Classic (ravno dno, nosi se u ruci ili preko ramena) ili Roller (dno s utorom, odvojiva ručka i kotačići). U paketu za svaku torbu zasebno birate boju i model.

         <?php elseif( noriks_is_type( 'comfortjeans', $current_product_id ) ): ?>

                <strong>NORIKS ComfortJeans</strong> spajaju klasičan izgled trapera s udobnošću nevjerojatne rastezljivosti. Ove traperice visokog struka, opuštenog kroja i širokih ravnih nogavica izrađene su od posebne mješavine trapera koja je vrlo rastezljiva, a ipak zadržava osjećaj pravog, klasičnog trapera. Svestrane su i savršene za svakodnevno nošenje — komad koji mora imati svaka osnovna garderoba.<br><br>• Opušten kroj nogavica<br>• Rastezljiv pravi traper<br>• Visoki struk<br>• Metalni patentni zatvarač YKK®<br>• Dva stražnja i dva prednja džepa<br>• Kožna etiketa na stražnjem dijelu struka<br><br><strong>Kroj:</strong> prianjaju u struku, a od donjeg dijela bedara padaju opušteno i poluširoko ravno. Možete ih nositi duge (ispod gležnja, iznad poda u cipelama) ili skraćene (do gležnja).<br><strong>Tkanina:</strong> rastezljivi traper od 12 oz, tkan s elastičnom potkom za udobnost i s izgledom pravog krutog trapera — klasična tekstura i moderna sloboda pokreta.<br><strong>Sastav:</strong> pamuk / poliester / elastan<br><br><strong>Boje:</strong> tamnoplava, srednje plava, vintage plava, crna, svijetloplava, isprana crna i prljavobijela.<br><strong>Veličine:</strong> XXS (22/23) – XXL (34/35), EU 32 – 50.<br><strong>Duljine:</strong> L26 (66 cm), L28 (71 cm), L30 (76 cm), L32 (81 cm), L34 (86 cm) i L36 (91 cm) — duljinu odaberite prema svojoj visini (tablica veličina).

         <?php elseif( noriks_is_type( 'hoodiedress', $current_product_id ) ): ?>

                <strong>NORIKS HoodieDress</strong> je više od hudice — to je vaš novi omiljeni komad za udoban i opušten stil bez puno truda. Dizajnirana je s prozračnim <strong>oversized krojem</strong> koji laska svakoj figuri, a izrađena od pamučne tkanine: <strong>vanjski sloj od 100 % pamuka</strong> i plišana unutrašnjost mekana poput deke. Savršena za lagana jutra, užurbane dane ili dotjerani izgled bez odricanja od udobnosti.<br><br><strong>Kroj i materijal:</strong> odgovara uobičajenoj veličini — uzmite veličinu hudice koju inače nosite. 100 % pamuk izvana, mekani flis poput deke iznutra.<br><br><strong>Udobnost u svakom detalju:</strong><br>• Iznutra mekana poput deke<br>• Vanjski sloj od 100 % pamuka<br>• Produžena duljina za bolju pokrivenost<br>• Kroj koji laska figuri<br><br><strong>Boje:</strong> crna, zelena, tamnoplava, kadulja zelena, crvena, ljubičasta, svijetloplava, krem, ružičasta, tamnosiva, smeđa, siva i tamnoljubičasta s leptir rukavima.<br><strong>Veličine:</strong> S – 3XL. U paketu za svaki komad zasebno birate boju i veličinu.

         <?php elseif( noriks_is_type( 'hikingshoes', $current_product_id ) ): ?>

                <strong>NORIKS HikingShoes</strong> su vodoodbojne pohodne cipele od brušene kože, osmišljene za avanture u prirodi u stilu hodanja bosonogi. Prostran prednji dio i fleksibilna izrada omogućuju stopalima da se prirodno kreću, a ravan, neklizajući potplat poboljšava ravnotežu na stazama i neravnom terenu. Završna obrada od brušene kože izgleda jednako dobro u gradu kao i na stazi — za sve koji žele prirodan osjećaj tla pod nogama bez kompromisa u stilu i izvedbi.<br><br><strong>Specifikacije:</strong><br>• <strong>Namjena:</strong> planinarenje, trekking, trail trčanje, višednevne ture, istraživanje prirode<br>• <strong>Značajke:</strong> barefoot oblik, tanak i fleksibilan potplat, vodoodbojnost, neklizajući potplat i na mokrom, stabilizator pete, potpuno zatvoreni jezik, vezanje cijelom duljinom<br>• <strong>Materijali:</strong> gornji dio od brušene kože, gumeni potplat, uložak od prirodnog pluta<br>• <strong>Potplat:</strong> baza 4 mm, kramponi 4 mm, ukupno 8 mm (zero drop)<br>• <strong>Težina:</strong> muške oko 750 g, ženske oko 600 g (par)<br>• <strong>Sezona:</strong> cijela godina<br><br><strong>Boje:</strong> žuta, svijetlosiva, terakota, petrolej plava, crna i maslinasto zelena.

         <?php elseif( noriks_is_type( 'orthomules', $current_product_id ) ): ?>

                <strong>NORIKS OrthoMules</strong> su ortopedske pletene natikače s remenom: <strong>ortopedski uložak</strong> ispod stopala, <strong>prozračan pleteni gornji dio</strong> i remen u stilu Mary Jane koji zaista drži cipelu na nozi — lijep izgled više ne znači bol.<br><br><strong>Istaknuto:</strong><br>• <strong>Ortopedska potpora</strong> — uložak koji podupire stopalo<br>• <strong>Prozračni pleteni gornji dio</strong> — stopalo diše<br>• <strong>Remen koji drži cijeli dan</strong> — cipela ostaje na nozi u svakom koraku<br><br><strong>Boje:</strong> zlatna, bijela, srebrna, crna, svijetlosmeđa i smeđa.<br><strong>Veličine:</strong> EU 35–43 (pogledajte tablicu veličina).

         <?php elseif( noriks_is_type( 'travelpillow', $current_product_id ) ): ?>

                <strong>NORIKS TravelPillow</strong> je putni jastuk za vrat od memorijske pjene — uvijek stignite opušteni i odmorni na odredište. Bilo da vas čeka dugi let ili samo vožnja na posao, jastuk drži vaše tijelo uspravnim i sprječava bol, ukočenost, napetost i bolove u vratu.<br><br><strong>Putovanje bez stresa:</strong><br>• Sprječava bol u vratu, napetost i bolove<br>• Pruža savršenu potporu za vrat, glavu i bradu<br>• Održava uspravno držanje<br>• Bez jet laga<br>• Uvijek stignite opušteni i odmorni na odredište<br>• Puno brže ćete zaspati<br>• Dulje ćete spavati<br>• Glava vam ne pada na rame suputnika<br>• Iznimno kompaktan i lagan za nošenje<br>• Mekan, ugodan i udoban<br><br><strong>Po čemu je poseban?</strong><br>• Putni jastuk koji potpuno podupire i glavu i vrat za najveću udobnost<br>• Tehnologija koja stabilizira vrat prilagođava se svakom obliku vrata, čeljusti i ramena<br>• Bez boli, ukočenosti i bolova u vratu — probudite se odmorni nakon dugog leta i ublažite jet lag<br>• Rasterećuje kralježnicu i mišiće, pa ostajete opušteni i na duljim putovanjima<br>• Udobna potpora za ramena dobro prianja, a glava se odmara u prirodnijem položaju — spavate dublje i dulje, bez klimanja glavom<br>• Iznimno lagan i jednostavan za nošenje, pakiranje ili omatanje oko remena torbe<br>• Bolji od običnih jastuka u obliku slova U<br><br><strong>Materijal:</strong> memorijska pjena visoke kvalitete (isti materijal kao u najskupljim madracima) i mekana pamučna navlaka koja se skida.<br><strong>Pristajanje:</strong> podesivi čičak-remen za savršeno pristajanje.<br><strong>U paketu:</strong> jastuk i torbica za nošenje.<br><br><strong>Boje:</strong> crna, narančasta, ružičasta, zelena, crvena, plava i siva.<br><strong>Veličina:</strong> jedna veličina koja odgovara svima (preporučeno od 14 godina).

         <?php elseif( noriks_is_type( 'sleepearplugs', $current_product_id ) ): ?>

                <strong>NORIKS SleepEarplugs</strong> su ultra udobni čepići za uši za spavanje — za mirne noći s manje bučnih ometanja, bilo da spavate na boku, prigušujete hrkanje partnera ili oboje.<br><br><strong>Udobni za spavanje na boku:</strong> nizak profil i naš najmekši silikon smanjuju pritisak na uho za udobnost cijelu noć<br><strong>Dvije vrste nastavaka:</strong> unaprijed postavljeni ovalni nastavci od pjene i silikona prate prirodan oblik uha, a dvostruki nastavci omogućuju još bolju prilagodbu<br><strong>Smanjenje buke 27 dB (SNR):</strong> prigušuje hrkanje partnera, gradsku buku i druga noćna ometanja<br><strong>Sigurno pristajanje:</strong> stvoreni da ostanu u ušima dok spavate na boku i krećete se tijekom noći<br><strong>Prilagodljivo pristajanje:</strong> četiri veličine nastavaka (XS, S, M, L), i za manje uši<br><strong>Višekratni i lako se čiste:</strong> izrađeni od izdržljivog silikona<br><strong>Kutijica za nošenje:</strong> s neklizajućim dnom i prostranim pretincem, uvijek nadohvat ruke uz krevet<br><br><strong>Građa čepića:</strong> vanjski silikonski vrh, memorijska pjena iznutra, čvrsta silikonska jezgra i mekano silikonsko tijelo.<br><br><strong>U paketu:</strong> 1x par NORIKS SleepEarplugs čepića, 1x kutijica za noćni ormarić, 4 para nastavaka od pjene i silikona (XS + S + M + L) i 4 para dvostrukih nastavaka (XS + S + M + L).<br><br><strong>Što znači 27 dB?</strong> Tihi zvukovi (disanje, hladnjak, perilica posuđa) najvjerojatnije se neće čuti, srednje glasni (televizor u drugoj sobi, udaljeni promet) svest će se na tihi šum, a glasni (sirene, lajanje psa, vatromet) i dalje će se čuti, ali puno tiše. Čepići buku smanjuju, ali je ne uklanjaju potpuno.

         <?php elseif( noriks_is_type( 'litterbox', $current_product_id ) ): ?>

                <strong>NORIKS LitterBox</strong> je automatska samočisteća posuda za mačji pijesak — dođite kući u čist dom, bez razmišljanja o tome. Zamislite da uđete u svoj dom i ne osjetite nikakav miris: bez podsjetnika da pijesak treba očistiti i bez grižnje savjesti zbog čišćenja za kasnije. NORIKS LitterBox to radi umjesto vas — tiho, dosljedno i sigurno.<br><br>Kad mačka priđe, posuda to primijeti. Kad mačka ode, posuda pričeka. A kad čisti, radi kontroliranim pokretima i s ugrađenom zaštitom.<br><br><strong>6 parova infracrvenih senzora</strong> nadzire ulaz<br><strong>4 Hallova senzora</strong> prate točan položaj bubnja<br><strong>Mehanički graničnik od 30°</strong> sprječava nesigurno zatvaranje<br><strong>Aktivna zaštita od priklještenja</strong> zaustavlja rad čim se mačka previše približi<br><br><strong>Bez Wi-Fija, bez aplikacija, bez pretplate:</strong> samo je uključite i postat će tihi dio vaše svakodnevice.<br><strong>Zatvorena ladica za otpad</strong> zadržava mirise, a <strong>četvrtasta komora</strong> osigurava stabilno okretanje. Prikladna za do 3 mačke.<br><br>Ovo nije spravica koju isprobate tjedan dana — ovo je trenutak kad svakodnevno čišćenje pijeska prestaje biti dio vašeg života. Jer vaš dom treba biti čist — bez truda.<br><br><strong>U paketu:</strong> glavna jedinica, spremnik za otpad, 4 noge, adapter za napajanje (12 V DC, 2 A), 1 rola vrećica (20 kom), prednja stepenica za ulaz, upute za upotrebu i vodič za brzi početak.<br><br><strong>Dimenzije:</strong> visina 55,5 cm, širina 53,5 cm, dubina 40 cm, visina ulaza 31,5 cm.<br><br><strong>Pijesak:</strong> koristite sitnozrnati grudajući mineralni ili bentonitni pijesak (ne kristalni, ne negrudajući i ne dugi tofu pijesak). Automatski način namijenjen je mačkama težim od 1,4 kg i starijim od 6 mjeseci.

         <?php elseif( noriks_is_type( 'hoodie', $current_product_id ) ): ?>

                <strong>NORIKS Hoodie</strong> je vrhunska nosiva deka s kapuljačom, stvorena za potpunu udobnost i opuštanje. <strong>Lagano je otežan (oko 1,8 kg)</strong> i stvara nježan, umirujući pritisak koji pomaže opuštanju, smanjuje stres i ublažava tjeskobu.<br><br>Ima <strong>prozračne otvore</strong> i <strong>senzorno ugodnu podstavu od umjetnog krzna</strong> koja stvara umirujući, topao osjećaj — idealno za opuštanje nakon dugog dana ili za udobnost na putovanju.<br><br>Napravljen je za svakoga: otvoren kroj udobno pristaje veličinama <strong>od XS do 6XL</strong>. Bilo kod kuće ili u pokretu, NORIKS Hoodie pruža udobnost, toplinu i osjećaj sigurnosti gdje god se nalazili.<br><br><strong>Lagano otežan:</strong> oko 1,8 kg<br><strong>Senzorno ugodno umjetno krzno</strong><br><strong>Unisex:</strong> napravljen za svakoga<br><strong>Pažljivo izrađen</strong><br><strong>Pomaže smanjiti stres i tjeskobu</strong><br><br><strong>Vanjski materijal:</strong> 100 % pamuk<br><strong>Podstava od krzna:</strong> 100 % poliester (senzorno ugodna, netoksična, bez štetnih kemikalija)<br><strong>Boja krzna:</strong> kod nekih boja prljavo bijela, kod ostalih u boji vanjskog materijala.<br><br><strong>Veličine:</strong> prema visini — do 157 cm, 160–168 cm, 170–185 cm, 188–196 cm i od 198 cm. Savjet: za još više udobnosti odaberite veću veličinu.

         <?php elseif( noriks_is_type( 'utilitypants', $current_product_id ) ): ?>

                <strong>NORIKS UtilityPants</strong> su radne hlače za <strong>sva 4 godišnja doba</strong> koje spajaju izdržljivost i potpunu udobnost. Tkanina koja se <strong>rasteže u 4 smjera</strong> kreće se s vama i drži vas udobnima kroz duge dane na gradilištu ili na otvorenom. Dizajnirane su posebno za majstore i radnike na otvorenom, s <strong>ojačanim mjestima naprezanja i tkaninom otpornom na paranje</strong> koja izdrži teške uvjete bez pucanja.<br><br>S <strong>10 funkcionalnih džepova</strong> i modernim, profesionalnim krojem ovo su jedine radne hlače koje će vam trebati ove sezone.<br><br><strong>10 džepova:</strong><br>2 duboka gornja prednja džepa<br>2 sigurna bočna džepa na bedrima s patentnim zatvaračem<br>2 džepa za metar s čičkom<br>2 stražnja džepa<br>2 džepa za odvijač ili škare<br><br><strong>Dodatno:</strong> ojačana koljena i kopča za alat na petlji remena.<br><strong>Vodootporne:</strong> softshell ne upija vodu — voda se odbija od tkanine.<br><strong>Prozračne:</strong> sloj koji odvodi vlagu sprječava zadržavanje znoja.<br><br><strong>Kroj:</strong> normalan do uzak — prije kupnje pogledajte tablicu veličina. <strong>Preporučujemo da naručite veličinu veću</strong> ako ste između dvije.<br><br><strong>Boje:</strong> siva, crna, kaki i maslinasta. <strong>Veličine:</strong> od S do 3XL.

         <?php elseif( noriks_is_type( 'smartjacket', $current_product_id ) ): ?>

                <strong>NORIKS SmartJacket</strong> je fleksibilno rješenje za svako vrijeme: <strong>topla flis jakna + reflektirajuća kišna jakna = vodootporna zimska jakna</strong>. Vodootporni vanjski materijal pouzdano štiti od kiše, a odvojivi flis brzo izjednačuje promjene temperature. Idealna je za put na posao, vožnju biciklom i aktivnosti na otvorenom.<br><br>Reflektirajuća tehnologija vanjske površine u mraku vas čini <strong>do 5x ranije uočljivima</strong>, a danju izgleda kao jednostavna, elegantna jakna. Zahvaljujući promišljenim detaljima i podesivim krajevima jakna je praktična i udobna za svaki dan, a promišljen kroj lijepo prati žensku liniju.<br><br><strong>Vodeni stupac 10.000 mm</strong> (vodootporna)<br><strong>Prozračnost:</strong> 10.000 MVTR<br><strong>Materijal:</strong> reflektirajuća membrana, poliester 150D, flis<br><strong>Skriveni prsni džep</strong> s patentnim zatvaračem<br><strong>Džepovi za ruke</strong> s patentnim zatvaračem i flis podstavom (na obje jakne)<br><strong>Kapuljača</strong> se sprema u ovratnik<br><strong>Dvosmjerni prednji patentni zatvarač</strong><br><strong>Podesivi</strong> rukavi, struk i kapuljača<br><strong>Težina</strong> osnovne veličine: 920 g<br><strong>Kroj:</strong> normalan<br><br><strong>Boje:</strong> crvena, tamnoplava, crna i bež. <strong>Veličine:</strong> od XS do 4XL — odaberite veličinu koju inače nosite; ako ste između dvije, od XS do L uzmite manju, a od XL veću.

         <?php elseif( noriks_is_type( 'sculptbrief', $current_product_id ) ): ?>

                <strong>NORIKS SculptBrief</strong> su oblikujuće gaćice visokog struka s patentiranim <strong>360° križnim pojasom</strong> koji obuhvaća trbuh sprijeda, sa strane i straga. Trbuh i struk dobivaju nježnu, ciljanu kompresiju, pa izgledaju ravnije i glađe čim ih obučete — bez stezanja, štipanja i nelagode.<br><br><strong>Smanjuju struk do 5 cm</strong> već za nekoliko dana nošenja<br><strong>Zatvaraju razmak koji je ostavila trudnoća</strong> (dijastaza) — 360° križni pojas drži cijelu trbušnu stijenku<br><strong>Nevidljive ispod odjeće:</strong> bešavni rubovi, bez linija i tragova, ne smotavaju se prema dolje<br><strong>Ostaju na mjestu od jutra do večeri:</strong> integrirani silikonski držač i rebrasti pojas protiv smotavanja<br><strong>Prikladne za dojenje, nakon carskog reza i u menopauzi</strong><br><strong>Za svaku mamu:</strong> nose ih žene od nekoliko dana nakon poroda do više od 40 godina nakon poroda — nikad nije kasno<br><br>Inspirirane malezijskim <strong>bengkungom</strong> — stoljetnom tehnikom omatanja koja nakon poroda pridržava i podupire trbušnu stijenku. Uz svakodnevno nošenje većina žena osjeti čvršći trbuh za 2 do 3 tjedna.<br><br><strong>Sastav:</strong> 83 % poliamid (najlon), 17 % elastan, prozračni mrežasti umetci i pamučni umetak u međunožju. Bez lateksa, bez tvrdih žica i bez plastičnih rubova.<br><br><strong>Boje:</strong> crna, bež, tamnoplava, lila, šljiva i fuksija. <strong>Veličine:</strong> od XS do 5XL — ravnajte se prema opsegu struka; ako ste između dvije veličine, uzmite veću.

         <?php elseif( noriks_is_type( 'supportsocks', $current_product_id ) ): ?>

                <strong>NORIKS SupportSocks</strong> su potporne čarape sa stupnjevanom kompresijom, napravljene za duge dane na nogama i za duga sjedenja. Pritisak je najjači oko gležnja i postupno popušta prema listu, pa noge ostaju lakše i na kraju dana. Oblače se lakše od klasičnih kompresijskih čarapa i udobne su za cjelodnevno nošenje.<br><br><strong>12–15 mmHg stupnjevana kompresija:</strong> može ublažiti umor i oticanje nogu<br><strong>Lako se oblače:</strong> ne morate se mučiti s njima<br><strong>Mekani rub:</strong> ne usijeca se i ne ostavlja tragove na koži<br><strong>Vrh bez šavova:</strong> ne žulja<br><strong>Prozračan materijal:</strong> mješavina s bambusom koja održava stopala suhima<br><strong>Savršene za:</strong> svakodnevno nošenje, posao, putovanja i još mnogo toga<br><br><strong>Materijal:</strong> 60 % poliester, 18 % bambus, 15 % lycra, 7 % pamuk<br><br><strong>Veličine:</strong> M (36–39), L (40–43) i XL (44–46), u 17 boja i uzoraka<br><br><strong>Upute za pranje:</strong><br>Čarape perite izvrnute naopako<br>Strojno pranje na najviše 30 °C<br>Ne koristite izbjeljivač<br>Sušite na zraku — ne u sušilici

         <?php elseif( noriks_is_type( 'bracelet', $current_product_id ) ): ?>

                <strong>NORIKS Bracelet</strong> je narukvica od prirodnog magnetskog hematita — kamena koji su kroz povijest nosili ratnici kao simbol snage, stabilnosti i prisutnosti. Hematit sadrži gotovo 70 % željeza, a nosi se izravno na koži, uz puls. Bez tableta, bez rutina, bez truda.<br><br><strong>Jedna veličina za sve muškarce:</strong> elastična narukvica prilagođava se zapešćima od 19 do 21,5 cm (7,5"–8,5")<br><strong>100 % autentični hematit:</strong> ručno odabrano kamenje AAA kvalitete, bez punila i imitacija<br><strong>Osjetna težina:</strong> 30 g, perle od 8 mm<br><strong>Besprijekorna izrada:</strong> visokosjajna polirana površina, otporna na svakodnevno nošenje i ogrebotine<br><strong>Nosite je posvuda:</strong> zaobljena unutarnja strana, bez iritacije od jutra do ponoći — otporna na vodu, možete je nositi pod tušem, na treningu i tijekom spavanja<br><br>Minimalistički, muški dizajn koji se uklapa uz poslovno odijelo, trening i svakodnevni stil.<br><br><strong>Mi smo original:</strong> jedina službena NORIKS narukvica od hematita — vrhunska kvaliteta bez kompromisa. Čuvajte se Amazona i drugih stranica koje prodaju jeftine kopije koje izgledaju slično, ali ne djeluju.

         <?php elseif( noriks_is_type( 'winecooler', $current_product_id ) ): ?>

                <strong>NORIKS WineCooler</strong> je štapić za hlađenje vina od nehrđajućeg čelika s ugrađenim izljevom. Štapić stavite u zamrzivač na najmanje 1 sat, zatim ga umetnete u bocu — za 10–15 minuta vino dosegne idealnu temperaturu posluživanja i ostaje hladno do 3 sata, od prvog točenja do zadnjeg gutljaja.<br><br>Izrađen je od visokokvalitetnog nehrđajućeg čelika prikladnog za hranu. Za razliku od kockica leda vino ne razvodnjava, a za razliku od posude s ledom boca ostaje suha na stolu.<br><br>Izljev točenje čini ravnomjernim i bez kapanja, pa vino i stolnjak ostaju čisti. Ugrađeno prozračivanje pomaže da se arome vina potpuno razviju za bogatiji okus.<br><br>Izljev se skida, a štapić se može prati u perilici posuđa ili temeljito oprati toplom vodom. Odgovara većini standardnih boca vina — idealan za bijelo vino, rosé i pjenušce, za večere, druženja na balkonu i kao poklon ljubiteljima vina.

         <?php elseif( noriks_is_type( 'phonestrap', $current_product_id ) ): ?>

                <strong>NORIKS PhoneStrap</strong> je držač za mobitel protiv ispadanja: tanki podložak umetnete između mobitela i maske, a kolut sa sajlom zakačite na hlače, jaknu, remen ili ruksak. Mobitel vam tako više ne može pasti, a uvijek je nadohvat ruke.<br><br>Kad vam treba, mobitel jednostavno povučete — sajla se izvuče iz koluta, a kad ga pustite, sama se uvuče natrag. Telefonirate, fotografirate i snimate posve normalno, mobitel je cijelo vrijeme osiguran.<br><br>Podložak je tanak i izdržljiv, stane između mobitela i maske i ne oštećuje ih. Postavljanje traje <strong>oko 8 sekundi</strong>, bez alata. Odgovara svim pametnim telefonima sa standardnom maskom.<br><br>Idealan je za skijanje i žičaru, planinarenje, bicikl, pecanje, putovanja, koncerte i rad na terenu — svugdje gdje bi jedan nespretan pokret mogao značiti razbijen ili izgubljen mobitel.

         <?php elseif( noriks_is_type( 'gelseat', $current_product_id ) ): ?>

                <strong>NORIKS GelSeat</strong> je jastuk za sjedenje od 100 % gela u saćastoj strukturi. Pod težinom tijela saće se razmakne i raspodijeli pritisak po cijeloj površini, umjesto da se sva težina skupi na trtičnu kost i sjedne kosti.<br><br>Zato je sjedenje ugodnije kod bolova u trtici, donjem dijelu leđa i kukovima, kod išijasa te kad noge nakon pola sata sjedenja utrnu.<br><br>Saće je otvoreno, pa zrak struji kroz jastuk i toplina se ne nakuplja — po tome se najviše razlikuje od jastuka od memorijske pjene. Gel se nakon svakog ustajanja vraća u prvobitni oblik i ne ostaje spljošten.<br><br>Dimenzije su oko 42 × 37 cm, pa jastuk leži na uredskoj stolici, autosjedalu, invalidskim kolicima i kuhinjskoj stolici. Navlaka ima protukliznu donju stranu, otkopča se i pere u perilici na 30 °C.

         <?php elseif( noriks_is_type( 'kneetape', $current_product_id ) ): ?>

                <strong>NORIKS KneeTape</strong> je kineziološka traka za koljeno koja je <strong>već izrezana</strong> u pravi oblik. Skinete zaštitnu foliju, zalijepite bazu ispod koljena i prekrižite krakove oko čašice — bez mjerenja, rezanja i odlaska fizioterapeutu.<br><br>Traka ne blokira zglob kao kruta ortoza. Rasteže se do 140 % i prati pokret koljena, a istodobno daje osjećaj oslonca i vođenja pri hodu, čučnju i penjanju stepenicama.<br><br>Uz pravilno nanošenje drži 3 do 5 dana, i kad se tuširate ili vježbate. Materijal je 100 % bez lateksa, na pamučnoj podlozi prilagođenoj osjetljivoj koži.<br><br>U pakiranju je 10 već izrezanih traka, a uz narudžbu dobivate i 10 biljnih grijaćih traka na poklon. Dostupne su četiri boje — plava, crna, boja kože i roza; boja ne utječe na učinak ni trajnost.

         <?php elseif( noriks_is_type( 'kneebrace', $current_product_id ) ): ?>

                <strong>NORIKS KneeBrace</strong> je patelarni steznik koji se nosi <strong>dva prsta ispod koljenske čašice</strong>, točno na patelarnoj tetivi. Ne stišće cijeli zglob kao ortoza ili kompresijski rukav — pritisne jednu točku i <strong>preusmjeri silu</strong> s upaljenog mjesta.<br><br>Svaki korak, stuba ili ustajanje sa stolca šalju veliku silu kroz tu jednu malenu točku ispod čašice. Rukavi je razmažu po cijelom koljenu, zato se bol vrati čim ih skinete. Ciljani pritisak radi suprotno: silu odvede i zglob rastereti.<br><br>Silikonski jastučić hvata se izravno za kožu, pa steznik ne klizi — ni pri trčanju, ni pri iskoracima, ni nakon nekoliko sati hoda. Traka je od prozračnog pletiva otvorene strukture, pa se noga ne znoji ni u desetosatnoj smjeni.<br><br>Jedna veličina odgovara svima: podesiva čičak traka prianja uz vitku, atletsku ili jaču nogu, bez mjerenja i bez tablice veličina. Nevidljiv je ispod hlača, tajica i čarapa.<br><br>Prikladan je kod boli u patelarnoj tetivi (trkačko i skakačko koljeno), artritisa, oporavka nakon operacije, ozljeda i opće nestabilnosti koljena.

         <?php elseif( noriks_is_type( 'hands', $current_product_id ) ): ?>

                <strong>NORIKS Hands</strong> je stabilizator palca koji drži <strong>bazu palca</strong>, ondje gdje se palac spaja sa zapešćem (CMC zglob). Unutar pletiva je jastučić koji amortizira taj zglob, pa ponavljajući pokreti palca — otvaranje staklenke, rezanje, pletenje, tipkanje, sviranje — ne idu više kroz goli zglob.<br><br>Za razliku od krutih ortoza, stabilizator <strong>ne zaključava palac</strong>. Mekan je i tanak, drži zglob da ne „piskače“, a dlan ostaje otvoren. Vrhovi prstiju i vrh palca ostaju potpuno slobodni, pa hvat i osjet ostaju prirodni i možete nastaviti raditi.<br><br>Navlači se jednom rukom, tanak je i plosnat, pa se nosi diskretno i ispod rukava, od jutra do večeri. U <strong>svakom pakiranju je par</strong> — jedan za lijevu i jedan za desnu ruku.<br><br>Izrađen je od mješavine poliesterskog vlakna, najlona i elastana s pjenastim umetkom, <strong>bez lateksa</strong>. Pere se ručno u hladnoj vodi s blagim deterdžentom i suši na ravnome u hladu.<br><br>Dostupan je u četiri boje — bež, ljubičasta, crna i siva — i u tri veličine (S, M, L) prema opsegu dlana. Ako ste između dvije veličine, uzmite manju.

         <?php elseif( noriks_is_type( 'buildshirt', $current_product_id ) ): ?>

                <strong>NORIKS BuildShirt</strong> je majica s <strong>ugrađenim grudnjakom</strong> — nije još jedan pokušaj boljeg grudnjaka, nego jedan sloj koji zamjenjuje dva. Široke plosnate naramice, četvrtasti izrez i glatko pletivo do bokova; ništa se ne kopča i ništa se ne ureza.<br><br>Mekane košarice podižu i oblikuju bez žica, a široki dio ispod grudi preuzima težinu umjesto naramica. Ulošci su odvojivi: ostavite ih za oblik i pokrivenost ili ih izvadite za prirodan izgled — ostaju na mjestu i tijekom pranja.<br><br>Pletivo je bešavno, prozračno i rasteže se u svim smjerovima, pa se ispod majice, haljine ili košulje ne vide linije ni tragovi naramica. Nosi se od jutra do večeri, a mnoge je nose i za spavanje.<br><br>Dostupno je deset veličina, od XS do 6XL, i deset boja — crna, bijela, siva, boja kože, kava, maslinasta, tirkizna, stara roza, vinsko crvena i svijetloplava. Veličinu birajte prema visini i težini; ako ste između dvije, uzmite veću.<br><br>Pere se u hladnoj vodi, bez omekšivača i sušilice. Zamjena veličine je besplatna, a imate i 30 dana za povrat novca.

         <?php elseif( noriks_is_type( 'buildshirt', $current_product_id ) ): ?>

          <div class="noriks-size">
            <p style="margin:0 0 14px;line-height:1.6;">Mjere u tablici su <strong>mjere tijela</strong> koje svaka veličina pokriva, ne mjere majice položene na stol. Ako ste između dvije veličine, uzmite <strong>veću</strong>.</p>
            <table style="width:100%;border-collapse:collapse;font-size:14px;">
              <thead>
                <tr style="background:#a8705a;color:#fff;">
                  <th style="padding:9px 10px;text-align:left;">Veličina</th>
                  <th style="padding:9px 10px;text-align:left;">Opseg grudi</th>
                  <th style="padding:9px 10px;text-align:left;">Opseg struka</th>
                  <th style="padding:9px 10px;text-align:left;">Dužina</th>
                </tr>
              </thead>
              <tbody>
                <?php
                foreach ( noriks_buildshirt_sizes() as $i => $r ) :
                  $bg = ( $i % 2 ) ? '#f7f1ec' : '#fff'; ?>
                  <tr style="background:<?php echo $bg; ?>;border-bottom:1px solid #eee;">
                    <td style="padding:9px 10px;font-weight:700;"><?php echo esc_html( $r[0] ); ?></td>
                    <td style="padding:9px 10px;"><?php echo esc_html( $r[1] ); ?></td>
                    <td style="padding:9px 10px;"><?php echo esc_html( $r[2] ); ?></td>
                    <td style="padding:9px 10px;"><?php echo esc_html( $r[3] ); ?></td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
            <p style="margin:14px 0 0;line-height:1.6;"><strong>Savjet:</strong> pletivo se rasteže, ali ne smije stezati — ako ste između dvije veličine, veća će bolje stajati. Zamjena veličine je besplatna.</p>
          </div>
        <?php elseif( noriks_is_type( 'celleg', $current_product_id ) ): ?>

                <strong>NORIKS CelLeg</strong> su 3D kompresijske tajice namijenjene oblikovanju nogu i stražnjice. Linije utkane u pletivo ciljaju područja na kojima se celulit najčešće vidi i ondje stišću jače, a na ostatku noge blaže.<br><br>Takva ciljana kompresija potiče mikrocirkulaciju i limfni protok, pa koža izgleda zaglađenije, a noge čvršće. Uz to mišići nogu i stražnjice ostaju blago aktivni tijekom dana, što znači veću potrošnju kalorija pri istom broju koraka.<br><br>Pletivo je bešavno, od 70 % poliamida i 30 % elastana — rastezljivo u svim smjerovima, prozračno i neprozirno i pri čučnju. Visoki pojas drži trbuh i ne rola se prema dolje.<br><br>Dostupne su u devet boja i veličinama od XS do 5XL. Veličinu birajte prema opsegu struka i bokova iz tablice, a ne prema broju traperica.

         <?php elseif( noriks_is_type( 'stepcloud', $current_product_id ) ): ?>

                <strong>NORIKS StepCloud</strong> su ulošci s biomehaničkom potporom svoda stopala. Uložak obuhvaća sredinu stopala i prirodno raspoređuje pritisak, pa je svaki korak stabilniji i mekši, uz manje umora na kraju dana.<br><br>Ispod prednjeg dijela stopala i pete su ciljani masažni čvorići koji pri svakom koraku nježno stimuliraju stopalo. Debela petna čašica ublažava udarac pete, a prozračni otvori smanjuju znojenje.<br><br>Koriste se kod umora i bolova u stopalima nakon dugog stajanja, kod bolova u peti i svodu te kod osjećaja težine u nogama. Uz svakodnevno nošenje zadržavaju oblik oko dva mjeseca.<br><br>Umeću se umjesto tvorničkog uloška, nikada preko njega. Ako su predugi, skratite ih škarama po oznaci na vrhu. Dostupni su u narančastoj, crnoj i sivoj boji, za brojeve obuće od EU 35 do EU 50.

         <?php elseif( noriks_is_type( 'slabproof', $current_product_id ) ): ?>

                <strong>NORIKS SlabProof</strong> su radne čarape napravljene za ljude koji cijeli dan stoje na betonu. Radne čizme štite stopalo, ali ga ne ublažavaju — beton ne vraća ništa, pa svaki korak ide u pete, koljena i leđa. Jedino što taj udarac može ublažiti je čarapa.<br><br>Zato imaju <strong>zonsko jastučenje</strong>: gusti jastučići ispod pete i prednjeg dijela stopala, točno ondje gdje beton udara, a tanko pletivo svugdje drugdje, pa čizma ne postane pretijesna. Peta i prsti ojačani su dvostruko pletenim najlonom, na dva mjesta gdje čarape prve popuste.<br><br>Prozračna mrežica preko gornjeg dijela stopala i pletivo koje odvodi znoj drže stopala suhima kroz cijelu smjenu. Mješavina je bez vune, pa ništa ne grebe i noga se ne pregrijava.<br><br>Široki rebrasti rub drži čarapu gore bez stezanja lista, duboki džep za petu s jezičcem ne da joj da puže u čizmu, a traka oko svoda drži stopalo da ne klizi.<br><br>Dostupne su u crnoj boji, u veličinama M (EU 39–42), L (EU 43–45) i XL (EU 46–49). Vrijedi <strong>30 dana za povrat novca</strong>, a dostava je besplatna za narudžbe iznad 70 €.

         <?php elseif( noriks_is_type( 'brassiere', $current_product_id ) ): ?>

                <strong>NORIKS Brassiere</strong> je grudnjak bez žica koji grudi drži i prirodno podiže, bez push-upa i bez stezanja. Rastezljiva, oblikujuća tkanina nježno podiže grudi, a široka donja potporna traka stabilizira ih bez pritiska i ne smota se ispod grudi.<br><br>Nevidljiva unutarnja struktura ravnomjerno raspoređuje težinu grudi, pa grudnjak drži kao model sa žicama, ali bez bolova, tragova i stalnog namještanja. Zato odgovara i za veće grudi. Široke i podesive naramenice ne urezuju se u ramena.<br><br>Kroj prati prirodan oblik grudi: ne spljošti ih kao klasični sportski top i ne ostavlja prazan prostor. Bešavna tkanina i ravni šavovi ne vide se ni ispod uske odjeće.<br><br>Sastav: 90 % poliamid, 10 % elastan. Dostupan je u crnoj, tamnoplavoj, sivoj, petrolej, ružičastoj i bež boji, u veličinama od XS do 5XL.

         <?php elseif( noriks_is_type( 'blanket', $current_product_id ) ): ?>

                <strong>NORIKS Blanket</strong> je prozračna kompresijska vreća za spavanje koja tijelo obavija nježnim stiskom nalik zagrljaju — za mirnije večeri i lakše uspavljivanje. Djeluje na principu terapije dubokim pritiskom (DTP): ravnomjeran pritisak sa svih strana šalje tijelu signal sigurnosti, opušta mišiće i smiruje živčani sustav.<br><br>To je mekana, rastezljiva cijev u koju se jednostavno uvučete — bez zatvarača, kopči, utega i kompliciranog zakopčavanja. Nema ničeg tvrdog ili grebljivog što bi moglo štipati ili zapinjati, pa je sigurna i za nemirne spavače i ruke koje se stalno vrpolje. Dno je otvoreno: stopala mogu ostati pokrivena ili izviriti van. Na vrhu je kapuljača koju po želji navučete preko glave ili ostavite spuštenu, a ruke mogu ostati unutra za kompresiju cijelog tijela ili izaći iznad ramena da imate slobodne ruke.<br><br>Tkanina se rasteže s vama, pa i dalje možete sjesti, ustati i hodati bez osjećaja da ste zarobljeni. Za razliku od utežnog pokrivača, NORIKS Blanket je lagan i ne zadržava toplinu.<br><br>Sastav: 95 % poliester, 5 % elastan — mekano, prozračno i rastezljivo. Dostupan je u plavoj, sivoj, ružičastoj i ljubičastoj boji te u četiri veličine: Djeca S, Djeca L, Odrasli S i Odrasli L. Veličinu birajte prema kompresiji, a ne prema duljini — za čvršći zagrljaj uzmite jednu veličinu manje.

         <?php elseif( noriks_is_type( 'bratank', $current_product_id ) ): ?>

                <strong>NORIKS BraTank</strong> je naša prva majica na naramenice s pravom potporom ugrađenog grudnjaka. Bez žica, bez dodatnih slojeva, bez linija koje se vide kroz odjeću. Jedan komad koji radi sve.<br><br>Ima uklonjive jastučiće za prilagodljivu pokrivenost i kroj koji zaglađuje i oblikuje figuru bez stezanja. Odgovara za sve — od opuštanja kod kuće i obaveza u gradu do ureda. Toliko je udobna da ćete zaboraviti da je nosite.<br><br>Dostupna je u bež, crnoj, bijeloj, paunovo plavoj, staroj ruži, sivoj, vinsko crvenoj i boji kave, u veličinama od S do 4XL.<br><br><strong>Sastav:</strong> mješavina mliječne svile, modala i elastana — mekana na dodir, rasteže se u svim smjerovima i diše na toplim danima.<br><strong>Jastučići:</strong> djelomično su ušiveni, pa ostaju na mjestu i tijekom nošenja i u pranju — ne morate ih vaditi ni namještati.<br><strong>Njega:</strong> perite na 30 °C na programu za osjetljivo rublje, bez omekšivača i izbjeljivača, sušite na zraku.<br><br>Vrijedi <strong>30 dana za povrat novca</strong>, a dostava je besplatna za narudžbe iznad 70 €.

         <?php elseif( noriks_is_type( 'polo', $current_product_id ) ): ?>

                <strong>NORIKS Polo</strong> je najudobnija majica koju ćete ikad nositi. Klasična polo majica krojena od rastezljive tkanine, modernog kroja i nenametljivo profinjenog izgleda. Lijepo se slaže uz chino hlače, kratke hlače i traperice.<br><br><strong>Istaknuto:</strong><br>• Prozračna rastezljiva pletenina<br>• Mekana završna obrada otporna na gužvanje, za udobnost cijeli dan<br>• Krojeni atletski kroj koji se kreće s vama<br>• Izrazito mekana unutrašnjost otporna na habanje<br>• Obrađena posebnom mješavinom za dugotrajnu mekoću i zadržavanje oblika<br>• Sprječava znojenje i neugodne mirise<br>• Izrađena od izdržljivog pletiva visoke gustoće od 100 % PET-a, za uredan i strukturiran pad<br><br>Dostupna je u devet boja (crna, tamnosiva, plava, tamnoplava, zelena, bordo, srebrnosiva, šljiva i camel) i u veličinama od S do 5XL. Kroj je malo uži — ako volite opušteniji kroj, uzmite broj veći.

         <?php elseif( noriks_is_type( 'titaniumpan', $current_product_id ) ): ?>

                <strong>NORIKS TitaniumPan</strong> je posljednja tava koja vam ikad treba. Izrađena je da bude neuništiva i da traje cijeli život. Kovana površina daje profesionalnu raspodjelu topline i izvedbu dostojnu vrhunskih kuhara. Bez premaza. Bez toksina. Bez kompromisa.<br><br><strong>Netoksični materijali</strong> — izrađena bez: PFAS-a („vječnih kemikalija”), PTFE-a (teflona), PFOA-e, olova i kadmija, nanočestica i teških metala.<br><br><strong>Detalji:</strong><br>• Promjer: 28 cm (11″), visina: 6,3 cm (dostupna i u 26 cm i 30 cm)<br>• Za sve vrste ploča, uključujući indukciju<br><br><strong>Konstrukcija:</strong><br>• Potpuno troslojna izvedba<br>• Donji sloj: 0,6 mm nehrđajućeg čelika (430) – za indukciju<br>• Jezgra: 1 mm aluminija – brza i ravnomjerna raspodjela topline<br>• Površina za kuhanje: 0,5 mm čistog titanija s kovanim uzorkom – prirodno neljepljiva, bez toksina i iznimno izdržljiva<br><br><strong>U paketu:</strong><br>• Titanijska kovana tava, sigurno zapakirana u posebnu zaštitnu kutiju<br>• 5 osnovnih vodiča – savjeti za njegu, prvo pripremanje tave i profesionalne tehnike kuhanja<br><br><strong>Njega i upotreba:</strong><br>• Otporna na temperaturu do 548 °C<br>• Može se prati u perilici posuđa<br>• Sigurna za metalni pribor<br>• Neljepljivost aktivirajte s 1 žličicom ulja s visokom točkom dimljenja prije kuhanja<br>• Titanijsku površinu lako očistite s malo deterdženta i spužvom.

         <?php elseif( noriks_is_type( 'slippers', $current_product_id ) ): ?>

                <strong>NORIKS Slippers</strong> su tople, mekane papuče s <strong>debelim, ojačanim potplatom</strong> — za jutra kod kuće i za brze izlaske van. Amortizacija je <strong>3x deblja od običnih papuča</strong>, pa stopala dobivaju potporu koja im treba, bez gubitka mekanog, ugodnog osjećaja.<br><br><strong>Zašto ćete ih voljeti:</strong><br>• <strong>Potplat mekan kao oblak</strong> — debela amortizacija za svaki korak<br>• <strong>Iznimno mekana podstava od flisa</strong> — toplo i ugodno, a ne prevruće<br>• <strong>Pranje u perilici</strong> — na nježnom programu u hladnoj vodi<br>• <strong>Za unutra i za van</strong> — protuklizni, vodootporni potplat za kratke izlaske<br>• <strong>Izdržljiva izrada</strong> — čvrsti šavovi i izdržljive tkanine zadržavaju oblik i udobnost<br><br><strong>Veličina i pristajanje:</strong> papuče su unisex i odgovaraju standardnim veličinama; u početku se mogu činiti malo uske, ali se materijal brzo prilagodi stopalu. Za najveću udobnost preporučujemo da odaberete <strong>jedan broj veći</strong> — papuče su najudobnije s malo više mjesta. Dostupne su u jedanaest boja (zelena, plava, smeđa, siva, ljubičasta, crvena, crna, roza, narančasta, crveni karo i zeleni karo) i u veličinama od EU 34–35 do EU 48–49.

         <?php elseif( noriks_is_type( 'anklesleeve', $current_product_id ) ): ?>

                <strong>NORIKS AnkleSleeve</strong> je kompresijska potpora za gležanj za sport i svakodnevno kretanje. Prianja uz oblik stopala poput druge kože i pruža <strong>ciljanu potporu</strong>, a pritom čuva vašu slobodu pokreta — krećite se s više samopouzdanja i udobnosti.<br><br><strong>Istaknuto:</strong><br>• <strong>Ciljana kompresija</strong> za veću udobnost<br>• <strong>Više kontrole</strong> tijekom napora — prati vaše oslonce<br>• <strong>Udobni i prozračni materijali</strong> — tanki, lagani i otporni<br>• <strong>Tanki šav</strong> koji ne smeta u cipeli — ergonomski dizajn<br>• Pomaže i nakon treninga, uz osjećaj lakoće<br><br>Za razliku od klasičnih modela, NORIKS AnkleSleeve posebno je osmišljena da prati vaše pokrete tijekom napora — za trčanje, trail, nogomet, rukomet, košarku, dvoranske sportove ili cijeli radni dan na nogama. Možete je nositi samo kada želite dodatnu potporu i udobnost.<br><br><strong>Veličine</strong> (po broju cipele, EU): S (35–40), M (41–43), L (44–47). Ako ste između dvije veličine, uzmite veću. Prodaje se po komadu — za oba gležnja odaberite ponudu 2x (par) ili 4x (dva para).<br><br>Boja: crna.

         <?php elseif( noriks_is_type( 'corksandals', $current_product_id ) ): ?>

                <strong>NORIKS CorkSandals</strong> su ljetne sandale s plutenim potplatom i uloškom od <strong>pravog goveđeg antilopa</strong>, s mekanim remenima od PU materijala i čvrstom, potpuno podesivom kopčom. Svaki par pažljivo je izrađen kako bismo postigli najvišu kvalitetu — europski antilop, izrada u malim serijama.<br><br><strong>Svaki detalj osmišljen za udobnost:</strong><br>• <strong>Potpora za svod stopala</strong> — smanjuje napetost i drži vas udobnima cijeli dan<br>• <strong>Duboko ležište pete</strong> — obuhvaća petu za bolju stabilnost i manji pritisak pri svakom koraku<br>• <strong>100 % prirodni goveđi antilop</strong> — mekan, prozračan uložak, profinjen na dodir<br>• Čvrst, a savitljiv potplat za cjelodnevno nošenje<br>• Dvije podesive kopče — pristaju i širem stopalu<br><br><strong>Bez dizajnerske marže:</strong> plaćate materijale i udobnost, a ne logotip. Najveći dio cijene ide na materijale i plaće, ne na marku i troškove maloprodaje.<br><br>Unisex model, dostupan u pet boja (smeđa, sivosmeđa, bež, crna i bijela) i u veličinama od EU 36 do EU 46. Sandale odgovaraju standardnim veličinama — ako ste između dva broja, uzmite veći.

         <?php elseif( noriks_is_type( 'seatcover', $current_product_id ) ): ?>

                <strong>NORIKS SeatCover</strong> je vodootporna presvlaka za autosjedalo od frotira. Zbogom mokrim i zaprljanim sjedalima — vrhunska zaštita za majstore, ljubitelje teretane i plaže i sve koji ponekad žive malo grublje.<br><br><strong>Istaknuto:</strong><br>• 100 % vodootporna podloga — znoj, voda i prljavština ne dolaze do sjedala<br>• Brzo se stavlja, lako se pere — bez petljanja s trakama, samo prebacite i krenite<br>• Univerzalni kroj — pristaje na većinu sjedala u osobnim automobilima, SUV-ovima, kamionetima i terencima<br>• Izdržljiva i udobna — mekani frotir s gornje strane i izdržljiva podloga koja ne upija neugodne mirise<br>• Za dane kad se zaprljate — teretana, plaža, gradilište ili ribolov<br><br>Izrađena da traje, NORIKS SeatCover štiti unutrašnjost vašeg automobila bez glomaznih i kompliciranih klasičnih presvlaka. Bilo da je riječ o znoju nakon treninga ili pijesku nakon surfanja — ova presvlaka vam doslovno čuva leđa.<br><br><strong>Dimenzije:</strong> 145 × 65 cm. Pristaje na gotovo sva sjedala — osobni automobili, SUV-ovi, kamioneti i terenci. Teži manje od 500 g, a smotana je otprilike veličine boce za vodu, pa je možete držati u prtljažniku ili pretincu na vratima.<br><br><strong>Njega:</strong> pranje u perilici na hladnom programu, sušenje na zraku ili na niskoj temperaturi, bez omekšivača.<br><br>Dostupna u osam boja: crna, plava, pješčana, koraljna, zelena, svijetloplava, ružičasta i maskirna.

         <?php elseif( noriks_is_type( 'harness', $current_product_id ) ): ?>

                <strong>NORIKS Harness</strong> je oprsnica za pse protiv povlačenja s prednjom i stražnjom kopčom. Prednji D-prsten preusmjerava zamah psa u stranu i prekida povlačenje prema naprijed — bez trzanja i bez gušenja. Isto načelo koje preporučuju veterinari i treneri, ugrađeno u oprsnicu.<br><br><strong>Istaknuto:</strong><br>• Podesive trake za savršeno pristajanje<br>• Prozračni, mekani materijali za udobnost cijeli dan<br>• Jednostavna kopča na klik za brzo stavljanje i skidanje<br>• Čvrsta ručka za dodatnu kontrolu<br>• Izdržljivi D-prsteni sprijeda i straga za sigurno pričvršćivanje povodca<br>• Čičak površina za oznaku s imenom<br><br><strong>Dva načina:</strong> prednja kopča za dresuru i kontrolu, stražnja kopča za opuštene šetnje kad pas već lijepo hoda na labavom povodcu.<br><br><strong>Materijal i njega:</strong> lagani, prozračni najlon. Kad se zablati, isperite je pod mlazom tople vode, obrišite i ostavite da se osuši na zraku — pranje u perilici nije potrebno.<br><br>Dostupna je u devet boja (crna, narančasta, siva, crvena, bež, maslinasta, tirkizna, nebeskoplava i ružičasta) i u pet veličina od XS do XL. Veličinu birajte prema opsegu prsa psa.

         <?php elseif( noriks_is_type( 'raincoat', $current_product_id ) ): ?>

                <strong>NORIKS Raincoat</strong> je kratka oversized kišna jakna osmišljena za udobnost i samopouzdanje po nepredvidivom vremenu. Široki kroj daje zaštitnu siluetu koju je lako slojevito kombinirati, a ekstra velik preklopivi obod kapuljače štiti lice, kosu i šminku od kiše. Elastični nabrani rub daje suptilan oblik — za gradske ulice i svakodnevne avanture.<br><br><strong>Istaknuto:</strong><br>• Vodootporna do 12.000 mm, otporna na mrlje i vjetar<br>• Kapuljača sa širokim obodom<br>• Podesive manžete s čičkom<br>• Mekana podstava rukava<br>• Bočni džepovi<br>• Nabrani „bubble” rub<br>• Ventilacijski otvori ispod pazuha, opušten kroj<br>• Klasična verzija za temperature od 15 °C do 25 °C<br><br><strong>Materijal:</strong> 100 % poliester. Samo ručno pranje do 30 °C.<br><br>Jedna veličina (EU 36–50), dostupna u devet boja: crna, bordo, tamnocrvena, smeđa, sivosmeđa, biserna, svijetloružičasta, tamnoplava i svijetložuta.

         <?php elseif( noriks_is_type( 'floatsuit', $current_product_id ) ): ?>

                <strong>ZABAVA KOJA PLUTA</strong><br><br><strong>NORIKS FloatSuit</strong> je praktično rješenje „sve u jednom” koje djeci pomaže da ostanu na površini dok uče plivati. Pruža uravnoteženu potporu i mališanima daje stabilnost koja im u vodi treba, a da ih pritom ne sputava u kretanju.<br><br><video src="<?php echo esc_url( get_template_directory_uri() . '/img/floatsuit/fs-video-opis.mp4' ); ?>" autoplay loop muted playsinline preload="metadata" style="display:block;width:400px;max-width:100%;border-radius:8px;margin:0 auto;"></video><br>Za razliku od glomaznih plutača ili rukavića za plivanje, <strong>NORIKS FloatSuit</strong> potiče pravilan položaj tijela i ravnomjeran uzgon. Pomaže djeci da ostanu uspravna, a pritom slobodno mašu nogama i rukama — tako stvarno razvijaju plivanje dok uče plutati, kliziti i plivati sa samopouzdanjem.<br><br><strong>Veličine:</strong> 12–18 mjeseci, 2–3 godine, 3–4 godine i 5–6 godina, u šest kombinacija boja te s kratkim ili dugim rukavima.<br><strong>Zaštita od sunca:</strong> tkanina s <strong>UPF 50+</strong> zaštitom za igru na otvorenom.<br><strong>Plovci:</strong> ugrađeni i podesivi — vade se iz unutarnjih džepova, pa ih vadite jedan po jedan kako dijete napreduje.<br><strong>Njega:</strong> prije pranja izvadite plovke, nakon svakog kupanja isperite hladnom vodom i sušite u hladu.<br><br><strong>30 dana za povrat</strong><br>Niste zadovoljni narudžbom? Bez brige! Imate pravo na povrat u roku od 30 dana. Besplatna dostava za narudžbe iznad 70 €.

         <?php elseif( noriks_is_type( 'red', $current_product_id ) ): ?>

                <strong>NORIKS RedRelief</strong> je omotač za zapešće koji spaja dvije najistraženije valne duljine u terapiji crvenim svjetlom: 660 nm crveno svjetlo smiruje površinsku upalu, a 850 nm infracrveno dopire dublje, do tkiva oko srednjeg živca.<br><br>Svjetlo se u tkivu pretvara u staničnu energiju (ATP) i potiče lokalni protok krvi — dva procesa koja su dio prirodnog oporavka tijela. Zato se koristi kod karpalnog tunela, tendinitisa, artritisa te bolova u šaci i zapešću.<br><br>U omotač je ugrađeno 48 dvostrukih LED dioda raspoređenih po cijeloj unutarnjoj strani, pa svjetlo pokriva cijelo zapešće, a ne samo jednu točku. Na raspolaganju su 4 načina rada i 3 razine snage.<br><br>Uređaj je bežičan i puni se preko USB-C kabela — jedno punjenje dovoljno je za do 4 tretmana. Težak je svega 126 g, ima otvor za palac i podesivu traku, pa odgovara i lijevoj i desnoj ruci. Preporučena je jedna seansa od 15 minuta dnevno; uređaj se sam isključi na kraju seanse.

         <?php elseif( noriks_is_type( 'home', $current_product_id ) ): ?>

                <strong>NORIKS HOME PowerHook</strong> su vakuumske kuke s patentiranom Twist &amp; Lock tehnologijom. Okretanjem gumba aktivira se višestruka kompresija koja se prilagodi površini i stvori čvrsto brtvljenje, a vakuum ga dodatno pojača.<br><br>Postavljaju se u nekoliko sekundi na staklo, pločice, ogledala, mramor, akril, glatki metal i laminat — bez bušenja, bez vijaka i bez ljepila. Skidaju se jednako lako i ne ostavljaju trag, pa su prikladne i za iznajmljeni stan.<br><br>Svaka kuka nosi do 7 kg, dovoljno za mokri ručnik, kupaći ogrtač ili torbu. U pakiranju su četiri kuke.<br><br>Kućište je od izdržljivog polimera otpornog na hrđu i vlagu. Promjer je 6,1 cm, dubina 4 cm. Dostupno u pet nijansi: crna, krom, bijela, zlatna i siva.

         <?php elseif( noriks_is_type( 'seal', $current_product_id ) ): ?>

                <strong>NORIKS ChefSeal</strong> je ručni vakuumski aparat koji iz vrećice ili posude izvuče zrak u nekoliko sekundi. Bez zraka nema oksidacije, pa meso, riba, sir, povrće i orašasti plodovi ostaju svježi znatno dulje nego u običnoj vrećici ili posudi s poklopcem.<br><br>Rad je jednostavan: uređaj prislonite na ventil, pritisnete gumb i on se sam isključi kad je vrećica prazna. Nema postavki, nema rezanja vrećica i nema čekanja da se aparat zagrije.<br><br>Uređaj je dug 20,5 cm, širok 4,7 cm i težak 237 g, pa stane u ladicu za pribor. Radi na punjivu bateriju od 1200 mAh koja se puni preko USB-C kabela, što znači da ga možete ponijeti na vikendicu, u kamp ili na ribolov.<br><br>U kompletu su uređaj, kabel za punjenje, klipsa za zatvaranje vrećica, upute i vakuumske vrećice — polovica manjih (1 l) i polovica većih (2 l). Vrećice se peru i koriste iznova, sigurne su za zamrzivač, mikrovalnu i perilicu posuđa.

         <?php elseif( noriks_is_type( 'sr', $current_product_id ) ): ?>

                <strong>NORIKS FlexShirt</strong> je košulja od tkanine koja se rasteže u sva četiri smjera. Prati rame i lakat u svakom pokretu, ne zateže se pri sjedenju i odmah se vraća u svoj oblik — kroj ostaje uredan i nakon cijelog dana.<br><br>Tkanina je mješavina poliestera i elastana s 12 % elastana: lagana, mekana i prozračna. Odvodi toplinu i vlagu s kože, a obrađena je tako da zadržava svježinu i nakon dugog dana.<br><br>Struktura materijala sprječava gužvanje. Košulja izgleda uredno i kad je izvadite iz torbe, pa joj glačalo nije potrebno — ni prije ureda, ni prije večere.<br><br>Kroj je pripijen, s klasičnim raširenim ovratnikom koji drži oblik, zakopčavanjem sprijeda i bez džepa na prsima. Dostupna je u 8 boja, u izvedbi s kratkim i dugim rukavom te u veličinama od S do 3XL.

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

    <?php // NORIKS Dental: zasebni akordeon s ključnim prednostima (drugo mjesto).
    if ( noriks_is_type( 'dental', $current_product_id ) ) : ?>
    <div class="accordion-item">
      <div class="accordion-header" onclick="toggleAccordion(this)">
        <h3>Ključne prednosti</h3>
        <div class="toggle">+</div>
      </div>
      <div class="accordion-content">
        <ul style="margin:6px 0 4px 18px; padding:0; line-height:1.7;">
          <li>Čišćenje kliničke razine iz udobnosti doma</li>
          <li>Ultrazvučna tehnologija (43.000 Hz) za dubinsko čišćenje bez truda</li>
          <li>UV-C sterilizacija koja neutralizira bakterije i neugodne mirise</li>
          <li>Sigurno za folije, retainere, proteze, noćne udlage i ostala oralna pomagala</li>
          <li>Blistavo čisto u samo 3 minute</li>
          <li>Uz 1 godinu jamstva i 30 dana povrata novca</li>
        </ul>
      </div>
    </div>
    <?php endif; ?>
    
    
    
     
     <?php endif; /* end skrivanje detalja na ortopasu */ ?>

     <?php if ( ( ! function_exists( 'noriks_ima_velicine' ) || noriks_ima_velicine( $current_product_id ) ) && ! noriks_is_type( 'cloath', $current_product_id ) && ! noriks_is_type( 'cloud', $current_product_id ) && ! noriks_is_type( 'snore', $current_product_id ) && ! noriks_is_type( 'hyd', $current_product_id ) && ! noriks_is_type( 'bunion', $current_product_id ) && ! noriks_is_type( 'fisiorest', $current_product_id ) && ! noriks_is_type( 'norikshers', $current_product_id ) && ! noriks_is_type( 'ortopedski-jastuk', $current_product_id ) && ! noriks_is_type( 'nosilka', $current_product_id ) && ! noriks_is_type( 'kneefix', $current_product_id ) && ! noriks_is_type( 'controlpro', $current_product_id ) && ! noriks_is_type( 'noriks-cards', $current_product_id ) && ! noriks_is_type( 'norikshersbrush', $current_product_id ) && ! noriks_is_type( 'hairmagic', $current_product_id ) && ! noriks_is_type( 'dental', $current_product_id ) && ! noriks_is_type( 'lift', $current_product_id ) && ! noriks_is_type( 'kneeheat', $current_product_id ) && ! noriks_is_type( 'pre', $current_product_id ) && ! noriks_is_type( 'hug', $current_product_id ) && ! noriks_is_type( 'seal', $current_product_id ) && ! noriks_is_type( 'home', $current_product_id ) && ! noriks_is_type( 'red', $current_product_id ) && ! noriks_is_type( 'snug', $current_product_id ) && ! noriks_is_type( 'pal', $current_product_id ) && ! noriks_is_type( 'bowl', $current_product_id ) && ! noriks_is_type( 'gelseat', $current_product_id ) && ! noriks_is_type( 'kneetape', $current_product_id ) && ! noriks_is_type( 'phonestrap', $current_product_id ) && ! noriks_is_type( 'winecooler', $current_product_id ) && ! noriks_is_type( 'bracelet', $current_product_id ) && ! noriks_is_type( 'catfountain', $current_product_id ) && ! noriks_is_type( 'dishsheets', $current_product_id ) && ! noriks_is_type( 'vacuumsealer', $current_product_id ) && ! noriks_is_type( 'airtravel', $current_product_id ) ) : // hide size accordion on bunion + fisiorest + norikshers + ortopedski jastuk + nosiljka + kneefix + controlpro ?>
     <!-- 2 - slika tablica velicina -->
     <div class="accordion-item">
      <div class="accordion-header" onclick="toggleAccordion(this)">
        <h3>Tablica veličina</h3>
        <div class="toggle">+</div>
      </div>
      <div class="accordion-content">

           <?php if( noriks_is_type( 'sr', $current_product_id ) ): ?>

          <div class="sr-size">
            <p style="margin:0 0 12px;line-height:1.6;">Košulja je vjerna veličinama. Najlakše je usporediti se s modelima s fotografija — svi nose svoju uobičajenu veličinu.</p>
            <table style="width:100%;border-collapse:collapse;font-size:14px;">
              <thead>
                <tr>
                  <th style="text-align:left;padding:8px 6px;border-bottom:1px solid #ddd;">Visina</th>
                  <th style="text-align:left;padding:8px 6px;border-bottom:1px solid #ddd;">Težina</th>
                  <th style="text-align:left;padding:8px 6px;border-bottom:1px solid #ddd;">Veličina</th>
                </tr>
              </thead>
              <tbody>
                <tr><td style="padding:8px 6px;border-bottom:1px solid #eee;">178 cm</td><td style="padding:8px 6px;border-bottom:1px solid #eee;">75 kg</td><td style="padding:8px 6px;border-bottom:1px solid #eee;">M</td></tr>
                <tr><td style="padding:8px 6px;border-bottom:1px solid #eee;">183 cm</td><td style="padding:8px 6px;border-bottom:1px solid #eee;">73 kg</td><td style="padding:8px 6px;border-bottom:1px solid #eee;">M</td></tr>
                <tr><td style="padding:8px 6px;border-bottom:1px solid #eee;">180 cm</td><td style="padding:8px 6px;border-bottom:1px solid #eee;">82 kg</td><td style="padding:8px 6px;border-bottom:1px solid #eee;">L</td></tr>
                <tr><td style="padding:8px 6px;border-bottom:1px solid #eee;">185 cm</td><td style="padding:8px 6px;border-bottom:1px solid #eee;">88 kg</td><td style="padding:8px 6px;border-bottom:1px solid #eee;">L – XL</td></tr>
                <tr><td style="padding:8px 6px;border-bottom:1px solid #eee;">188 cm</td><td style="padding:8px 6px;border-bottom:1px solid #eee;">104 kg</td><td style="padding:8px 6px;border-bottom:1px solid #eee;">XL</td></tr>
                <tr><td style="padding:8px 6px;border-bottom:1px solid #eee;">183 cm</td><td style="padding:8px 6px;border-bottom:1px solid #eee;">125 kg</td><td style="padding:8px 6px;border-bottom:1px solid #eee;">3XL</td></tr>
                <tr><td style="padding:8px 6px;">185 cm</td><td style="padding:8px 6px;">129 kg</td><td style="padding:8px 6px;">3XL</td></tr>
              </tbody>
            </table>
            <p style="margin:12px 0 0;line-height:1.6;"><strong>Između dvije veličine?</strong> Uzmite veću za opušteniji kroj, manju za pripijeniji.</p>
          </div>

        <?php elseif( noriks_is_type( 'kompwom', $current_product_id ) ): ?>

          <div class="kwm-size">
            <p style="margin:0 0 14px;line-height:1.6;">Veličinu birajte prema <strong>opsegu grudi</strong> — on određuje kako majica sjeda na prsa i ramena. Ako ste između dvije veličine, uzmite <strong>veću</strong>.</p>
            <table style="width:100%;border-collapse:collapse;font-size:14px;">
              <thead>
                <tr style="background:#a8536b;color:#fff;">
                  <th style="padding:9px 10px;text-align:left;">Veličina</th>
                  <th style="padding:9px 10px;text-align:left;">Opseg grudi</th>
                  <th style="padding:9px 10px;text-align:left;">Opseg struka</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $kwm_sizes = array(
                  array( 'S',   'US 0–4',   '78 – 83 cm',  '65 – 71 cm' ),
                  array( 'M',   'US 6–8',   '83 – 89 cm',  '71 – 77 cm' ),
                  array( 'L',   'US 10–12', '89 – 95 cm',  '77 – 83 cm' ),
                  array( 'XL',  'US 14',     '95 – 102 cm', '83 – 88 cm' ),
                  array( '2XL', 'US 16–18', '102 – 108 cm','88 – 94 cm' ),
                  array( '3XL', 'US 20',     '108 – 115 cm','94 – 100 cm' ),
                );
                foreach ( $kwm_sizes as $i => $r ) :
                  $bg = ( $i % 2 ) ? '#fbf7f8' : '#fff'; ?>
                  <tr style="background:<?php echo $bg; ?>;border-bottom:1px solid #f0e6ea;">
                    <td style="padding:9px 10px;font-weight:700;"><?php echo esc_html( $r[0] ); ?>
                      <span style="display:block;font-size:11.5px;font-weight:600;color:#a08d95;"><?php echo esc_html( $r[1] ); ?></span></td>
                    <td style="padding:9px 10px;"><?php echo esc_html( $r[2] ); ?></td>
                    <td style="padding:9px 10px;"><?php echo esc_html( $r[3] ); ?></td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
            <p style="margin:14px 0 0;line-height:1.6;"><strong>Kako izmjeriti:</strong> grudi preko najšireg dijela, struk na najužem mjestu. Mjerite preko donjeg rublja, traka pripijena ali ne stegnuta.</p>
          </div>

        <?php elseif( noriks_is_type( 'slim', $current_product_id ) ): ?>

          <div class="slm-size">
            <p style="margin:0 0 14px;line-height:1.6;">Veličinu birajte prema <strong>opsegu struka</strong>, ne prema uobičajenoj veličini odjeće. Ako ste između dvije veličine, uzmite <strong>veću</strong>.</p>
            <table style="width:100%;border-collapse:collapse;font-size:14px;">
              <thead>
                <tr style="background:#a3336b;color:#fff;">
                  <th style="padding:9px 10px;text-align:left;">Veličina</th>
                  <th style="padding:9px 10px;text-align:left;">EU veličina</th>
                  <th style="padding:9px 10px;text-align:left;">Opseg struka</th>
                </tr>
              </thead>
              <tbody>
                <?php
                foreach ( noriks_slim_sizes() as $i => $r ) :
                  $bg = ( $i % 2 ) ? '#fbf2f6' : '#fff'; ?>
                  <tr style="background:<?php echo $bg; ?>;border-bottom:1px solid #f1e3ea;">
                    <td style="padding:9px 10px;font-weight:700;"><?php echo esc_html( $r[0] ); ?></td>
                    <td style="padding:9px 10px;"><?php echo esc_html( $r[1] ); ?></td>
                    <td style="padding:9px 10px;"><?php echo esc_html( $r[2] ); ?></td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
            <p style="margin:14px 0 0;line-height:1.6;"><strong>Kako izmjeriti:</strong> centimetarsku traku obavijte oko najužeg dijela trupa, malo iznad pupka. Traka neka bude vodoravna i pripijena, ali ne stegnuta.</p>
          </div>

        <?php elseif( noriks_is_type( 'hands', $current_product_id ) ): ?>

          <div class="noriks-size">
            <p style="margin:0 0 14px;line-height:1.6;">Veličina se bira po <strong>opsegu dlana</strong> — omotajte metar oko dlana na najširem mjestu, odmah ispod zglobova prstiju, s palcem opušteno sa strane. Ako ste između dvije veličine, uzmite <strong>manju</strong>.</p>
            <table style="width:100%;border-collapse:collapse;font-size:14px;">
              <thead>
                <tr style="background:#a9683f;color:#fff;">
                  <th style="padding:9px 10px;text-align:left;">Veličina</th>
                  <th style="padding:9px 10px;text-align:left;">Opseg dlana</th>
                </tr>
              </thead>
              <tbody>
                <?php
                foreach ( noriks_hands_sizes() as $i => $r ) :
                  $bg = ( $i % 2 ) ? '#faf3ed' : '#fff'; ?>
                  <tr style="background:<?php echo $bg; ?>;border-bottom:1px solid #eee;">
                    <td style="padding:9px 10px;font-weight:700;"><?php echo esc_html( $r[0] ); ?></td>
                    <td style="padding:9px 10px;"><?php echo esc_html( $r[1] ); ?></td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
            <p style="margin:14px 0 0;line-height:1.6;"><strong>Savjet:</strong> mjerite dominantnu ruku ili onu koja je šira — u svakom pakiranju je par, lijevi i desni, pa jedna veličina pokriva obje ruke.</p>
          </div>
        <?php elseif( noriks_is_type( 'relief', $current_product_id ) ): ?>

          <div class="noriks-size">
            <p style="margin:0 0 14px;line-height:1.6;">Izmjerite <strong>opseg noge 10 cm iznad koljenske čašice</strong>. Ako ste između dvije veličine, uzmite <strong>veću</strong> — steznik treba prianjati, a ne stezati.</p>
            <table style="width:100%;border-collapse:collapse;font-size:14px;">
              <thead>
                <tr style="background:#2f8f7d;color:#fff;">
                  <th style="padding:9px 10px;text-align:left;">Veličina</th>
                  <th style="padding:9px 10px;text-align:left;">Opseg noge (10 cm iznad koljena)</th>
                </tr>
              </thead>
              <tbody>
                <?php
                foreach ( noriks_relief_sizes() as $i => $r ) :
                  $bg = ( $i % 2 ) ? '#eef6f4' : '#fff'; ?>
                  <tr style="background:<?php echo $bg; ?>;border-bottom:1px solid #eee;">
                    <td style="padding:9px 10px;font-weight:700;"><?php echo esc_html( $r[0] ); ?></td>
                    <td style="padding:9px 10px;"><?php echo esc_html( $r[1] ); ?></td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
            <p style="margin:14px 0 0;line-height:1.6;"><strong>Kako izmjeriti:</strong> stanite uspravno s ispruženim koljenom i krojačkim metrom izmjerite opseg noge 10 cm iznad koljenske čašice.</p>
          </div>
        <?php elseif( noriks_is_type( 'celleg', $current_product_id ) ): ?>

          <div class="noriks-size">
            <p style="margin:0 0 14px;line-height:1.6;">Veličinu birajte prema <strong>opsegu struka i bokova</strong>, ne prema broju traperica. Manja veličina daje jaču kompresiju, veća blaži osjećaj.</p>
            <table style="width:100%;border-collapse:collapse;font-size:14px;">
              <thead>
                <tr style="background:#a4557f;color:#fff;">
                  <th style="padding:9px 10px;text-align:left;">Veličina</th>
                  <th style="padding:9px 10px;text-align:left;">Opseg struka</th>
                  <th style="padding:9px 10px;text-align:left;">Opseg bokova</th>
                </tr>
              </thead>
              <tbody>
                <?php
                foreach ( noriks_celleg_sizes() as $i => $r ) :
                  $bg = ( $i % 2 ) ? '#fbf1f6' : '#fff'; ?>
                  <tr style="background:<?php echo $bg; ?>;border-bottom:1px solid #eee;">
                    <td style="padding:9px 10px;font-weight:700;"><?php echo esc_html( $r[0] ); ?></td>
                    <td style="padding:9px 10px;"><?php echo esc_html( $r[1] ); ?></td>
                    <td style="padding:9px 10px;"><?php echo esc_html( $r[2] ); ?></td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
            <p style="margin:14px 0 0;line-height:1.6;"><strong>Kako izmjeriti:</strong> struk izmjerite na najužem dijelu trupa, bokove preko najšireg dijela. Traka neka bude vodoravna i pripijena, ali ne stegnuta.</p>
          </div>
        <?php elseif( noriks_is_type( 'stepcloud', $current_product_id ) ): ?>

          <div class="noriks-size">
            <p style="margin:0 0 14px;line-height:1.6;">Odaberite <strong>svoj Broj obuće</strong>. Ako je uložak predug, skratite ga škarama po oznaci na vrhu — zato jedan par odgovara i međuveličinama.</p>
            <table style="width:100%;border-collapse:collapse;font-size:14px;">
              <thead>
                <tr style="background:#f0581a;color:#fff;">
                  <th style="padding:9px 10px;text-align:left;">Broj obuće</th>
                  <th style="padding:9px 10px;text-align:left;">Duljina uloška</th>
                </tr>
              </thead>
              <tbody>
                <?php
                foreach ( noriks_stepcloud_sizes() as $i => $r ) :
                  $bg = ( $i % 2 ) ? '#fff2ea' : '#fff'; ?>
                  <tr style="background:<?php echo $bg; ?>;border-bottom:1px solid #eee;">
                    <td style="padding:9px 10px;font-weight:700;"><?php echo esc_html( $r[0] ); ?></td>
                    <td style="padding:9px 10px;"><?php echo esc_html( $r[1] ); ?></td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
            <p style="margin:14px 0 0;line-height:1.6;"><strong>Kako izmjeriti:</strong> izvadite tvornički uložak iz cipele i usporedite ga s duljinom iz tablice; NORIKS uložak po potrebi skratite po toj liniji.</p>
          </div>

        <?php elseif( noriks_is_type( 'slabproof', $current_product_id ) ): ?>

          <div class="noriks-size">
            <p style="margin:0 0 14px;line-height:1.6;">Naručite <strong>svoj uobičajeni broj obuće</strong>. Pletivo se rasteže, pa svaka veličina pokriva nekoliko brojeva.</p>
            <table style="width:100%;border-collapse:collapse;font-size:14px;">
              <thead>
                <tr style="background:#d2632e;color:#fff;">
                  <th style="padding:9px 10px;text-align:left;">Veličina</th>
                  <th style="padding:9px 10px;text-align:left;">EU broj obuće</th>
                  <th style="padding:9px 10px;text-align:left;">US broj (muški)</th>
                </tr>
              </thead>
              <tbody>
                <?php
                foreach ( noriks_slabproof_sizes() as $i => $r ) :
                  $bg = ( $i % 2 ) ? '#faf7f0' : '#fff'; ?>
                  <tr style="background:<?php echo $bg; ?>;border-bottom:1px solid #eee;">
                    <td style="padding:9px 10px;font-weight:700;"><?php echo esc_html( $r[0] ); ?></td>
                    <td style="padding:9px 10px;"><?php echo esc_html( $r[1] ); ?></td>
                    <td style="padding:9px 10px;"><?php echo esc_html( $r[2] ); ?></td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
            <p style="margin:14px 0 0;line-height:1.6;"><strong>Između dvije veličine?</strong> Uzmite veću — jastučić pete i traka oko svoda sjednu na mjesto samo kad čarapa nije premala.</p>
          </div>

        <?php elseif( noriks_is_type( 'brassiere', $current_product_id ) ): ?>

          <div class="noriks-size">
            <p style="margin:0 0 14px;line-height:1.6;">Sve veličine od <strong>XS do 5XL</strong>. Mjere su u centimetrima (cm).</p>
            <table style="width:100%;border-collapse:collapse;font-size:14px;">
              <thead>
                <tr style="background:#a65a5d;color:#fff;">
                  <th style="padding:9px 10px;text-align:left;">Veličina</th>
                  <th style="padding:9px 10px;text-align:left;">Širina trake</th>
                  <th style="padding:9px 10px;text-align:left;">Opseg grudi</th>
                  <th style="padding:9px 10px;text-align:left;">Klasični ekv.</th>
                </tr>
              </thead>
              <tbody>
                <?php
                foreach ( noriks_brassiere_sizes() as $i => $r ) :
                  $bg = ( $i % 2 ) ? '#f7efee' : '#fff'; ?>
                  <tr style="background:<?php echo $bg; ?>;border-bottom:1px solid #eee;">
                    <td style="padding:9px 10px;font-weight:700;"><?php echo esc_html( $r[0] ); ?></td>
                    <td style="padding:9px 10px;"><?php echo esc_html( $r[1] ); ?></td>
                    <td style="padding:9px 10px;"><?php echo esc_html( $r[2] ); ?></td>
                    <td style="padding:9px 10px;"><?php echo esc_html( $r[3] ); ?></td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
            <p style="margin:14px 0 0;line-height:1.6;"><strong>Kako izmjeriti:</strong> širinu trake položeno, od ruba do ruba, ispod grudi; opseg grudi oko najistaknutijeg dijela grudi. Bešavni rastezljivi materijal: ako niste sigurni, uzmite svoju uobičajenu veličinu.</p>
          </div>

        <?php elseif( noriks_is_type( 'blanket', $current_product_id ) ): ?>

          <div class="noriks-size">
            <p style="margin:0 0 14px;line-height:1.6;">Četiri veličine, od <strong>Djeca S do Odrasli L</strong>. Mjere su za nenošenu vreću položenu ravno, u centimetrima (cm).</p>
            <div style="overflow-x:auto;-webkit-overflow-scrolling:touch;">
            <table style="width:100%;border-collapse:collapse;font-size:14px;">
              <thead>
                <tr style="background:#9217ff;color:#fff;">
                  <th style="padding:9px 10px;text-align:left;white-space:nowrap;">Veličina</th>
                  <th style="padding:9px 10px;text-align:left;white-space:nowrap;">Duljina</th>
                  <th style="padding:9px 10px;text-align:left;white-space:nowrap;">Širina</th>
                  <th style="padding:9px 10px;text-align:left;white-space:nowrap;">Za visinu</th>
                  <th style="padding:9px 10px;text-align:left;white-space:nowrap;">Veličina odjeće</th>
                </tr>
              </thead>
              <tbody>
                <?php
                foreach ( noriks_blanket_sizes() as $i => $r ) :
                  $bg = ( $i % 2 ) ? '#f1ecf8' : '#fff'; ?>
                  <tr style="background:<?php echo $bg; ?>;border-bottom:1px solid #eee;">
                    <td style="padding:9px 10px;font-weight:700;white-space:nowrap;"><?php echo esc_html( $r[0] ); ?></td>
                    <td style="padding:9px 10px;white-space:nowrap;"><?php echo esc_html( $r[1] ); ?></td>
                    <td style="padding:9px 10px;white-space:nowrap;"><?php echo esc_html( $r[2] ); ?></td>
                    <td style="padding:9px 10px;white-space:nowrap;"><?php echo esc_html( $r[6] ); ?></td>
                    <td style="padding:9px 10px;"><?php echo esc_html( $r[5] ); ?></td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
            </div>
            <p style="margin:14px 0 0;line-height:1.6;"><strong>Kako odabrati:</strong> veličinu birajte prema kompresiji, a ne prema duljini. Za čvršći zagrljaj uzmite jednu veličinu manje.</p>
          </div>

        <?php elseif( noriks_is_type( 'bratank', $current_product_id ) ): ?>

          <div class="noriks-size">
            <p style="margin:0 0 14px;line-height:1.6;">Ako ne znate opseg grudi, jednostavno naručite <strong>svoju uobičajenu veličinu majice</strong>. Mjere su u centimetrima (cm).</p>
            <table style="width:100%;border-collapse:collapse;font-size:14px;">
              <thead>
                <tr style="background:#b57e7e;color:#fff;">
                  <th style="padding:9px 10px;text-align:left;">Veličina</th>
                  <th style="padding:9px 10px;text-align:left;">Opseg grudi</th>
                  <th style="padding:9px 10px;text-align:left;">Košarica</th>
                </tr>
              </thead>
              <tbody>
                <?php
                foreach ( noriks_bratank_sizes() as $i => $r ) :
                  $bg = ( $i % 2 ) ? '#f6f2ec' : '#fff'; ?>
                  <tr style="background:<?php echo $bg; ?>;border-bottom:1px solid #eee;">
                    <td style="padding:9px 10px;font-weight:700;"><?php echo esc_html( $r[0] ); ?></td>
                    <td style="padding:9px 10px;"><?php echo esc_html( $r[1] ); ?></td>
                    <td style="padding:9px 10px;"><?php echo esc_html( $r[2] ); ?></td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
            <p style="margin:14px 0 0;line-height:1.6;"><strong>Odgovara veličini:</strong> 95 % naših kupaca pogodi pravu veličinu iz prvog puta.</p>
          </div>

        <?php elseif( noriks_is_type( 'polo', $current_product_id ) ): ?>

          <div class="noriks-size">
            <p style="margin:0 0 14px;line-height:1.6;">Sve veličine od <strong>S do 5XL</strong>. Veličinu odaberite prema visini i tjelesnoj težini. Kroj je malo uži — ako volite opušteniji kroj, uzmite broj veći.</p>
            <div style="overflow-x:auto;-webkit-overflow-scrolling:touch;">
            <table style="width:100%;border-collapse:collapse;font-size:14px;">
              <thead>
                <tr style="background:#a9683f;color:#fff;">
                  <th style="padding:9px 8px;text-align:left;">Veličina</th>
                  <th style="padding:9px 8px;text-align:left;">ITM</th>
                  <th style="padding:9px 8px;text-align:left;">170 cm</th>
                  <th style="padding:9px 8px;text-align:left;">180 cm</th>
                  <th style="padding:9px 8px;text-align:left;">190 cm</th>
                </tr>
              </thead>
              <tbody>
                <?php
                foreach ( noriks_polo_sizes() as $i => $r ) :
                  $bg = ( $i % 2 ) ? '#f7f2ec' : '#fff'; ?>
                  <tr style="background:<?php echo $bg; ?>;border-bottom:1px solid #eee;">
                    <td style="padding:9px 8px;font-weight:700;"><?php echo esc_html( $r[0] ); ?></td>
                    <td style="padding:9px 8px;white-space:nowrap;"><?php echo esc_html( $r[1] ); ?></td>
                    <td style="padding:9px 8px;white-space:nowrap;"><?php echo esc_html( $r[2] ); ?></td>
                    <td style="padding:9px 8px;white-space:nowrap;"><?php echo esc_html( $r[3] ); ?></td>
                    <td style="padding:9px 8px;white-space:nowrap;"><?php echo esc_html( $r[4] ); ?></td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
            </div>
            <p style="margin:14px 0 0;line-height:1.6;"><strong>Kako odabrati:</strong> pronađite svoju težinu u stupcu najbližem vašoj visini. Vitka građa — računajte oko 5 kg manje, krupnija građa — oko 5 kg više. Niži od 165 cm uzmite broj manji, viši od 190 cm broj veći. 168 kupaca potvrdilo je da je majica malo manja; ako trebate drugu veličinu, imate 30 dana za povrat ili zamjenu.</p>
          </div>

        <?php elseif( noriks_is_type( 'titaniumpan', $current_product_id ) ): ?>

          <div class="noriks-size">
            <p style="margin:0 0 14px;line-height:1.6;"><strong>Niste sigurni koju veličinu odabrati?</strong> Većina kupaca uz ovaj vodič pogodi već prvi put.</p>
            <div style="overflow-x:auto;-webkit-overflow-scrolling:touch;">
            <table style="width:100%;border-collapse:collapse;font-size:14px;">
              <thead>
                <tr style="background:#a9683f;color:#fff;">
                  <th style="padding:9px 8px;text-align:left;">Veličina</th>
                  <th style="padding:9px 8px;text-align:left;">Promjer</th>
                  <th style="padding:9px 8px;text-align:left;">Porcije</th>
                  <th style="padding:9px 8px;text-align:left;">Jaja</th>
                  <th style="padding:9px 8px;text-align:left;">Za koga</th>
                </tr>
              </thead>
              <tbody>
                <?php
                foreach ( noriks_titaniumpan_sizes() as $i => $r ) :
                  $bg = ( $i % 2 ) ? '#f7f2ec' : '#fff'; ?>
                  <tr style="background:<?php echo $bg; ?>;border-bottom:1px solid #eee;">
                    <td style="padding:9px 8px;font-weight:700;white-space:nowrap;"><?php echo esc_html( $r[0] ); ?></td>
                    <?php for ( $c = 1; $c <= 4; $c++ ) : ?><td style="padding:9px 8px;white-space:nowrap;"><?php echo esc_html( $r[ $c ] ); ?></td><?php endfor; ?>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
            </div>
            <p style="margin:14px 0 0;line-height:1.6;"><strong>26 cm</strong> — svakodnevna tava za odrezak, jaja i brzo prženje. <strong>28 cm</strong> — naša najprodavanija, za većinu obroka za dvoje. <strong>30 cm</strong> — obiteljski obroci, priprema unaprijed i gosti. Ako vam veličina ne odgovara, imate 30 dana za povrat ili zamjenu.</p>
          </div>

        <?php elseif( noriks_is_type( 'slippers', $current_product_id ) ): ?>

          <div class="noriks-size">
            <p style="margin:0 0 14px;line-height:1.6;">Papuče su <strong>unisex</strong> i odgovaraju standardnim veličinama. Za najveću udobnost preporučujemo da odaberete <strong>jedan broj veći</strong> — papuče su najudobnije s malo više mjesta.</p>
            <div style="overflow-x:auto;-webkit-overflow-scrolling:touch;">
            <table style="width:100%;border-collapse:collapse;font-size:14px;">
              <thead>
                <tr style="background:#5f7f57;color:#fff;">
                  <th style="padding:9px 8px;text-align:left;">EU</th>
                  <th style="padding:9px 8px;text-align:left;">Duljina stopala</th>
                  <th style="padding:9px 8px;text-align:left;">UK</th>
                  <th style="padding:9px 8px;text-align:left;">US žene</th>
                  <th style="padding:9px 8px;text-align:left;">US muškarci</th>
                </tr>
              </thead>
              <tbody>
                <?php
                foreach ( noriks_slippers_sizes() as $i => $r ) :
                  $bg = ( $i % 2 ) ? '#f1f5ee' : '#fff'; ?>
                  <tr style="background:<?php echo $bg; ?>;border-bottom:1px solid #eee;">
                    <td style="padding:9px 8px;font-weight:700;white-space:nowrap;"><?php echo esc_html( $r[0] ); ?></td>
                    <td style="padding:9px 8px;white-space:nowrap;"><?php echo esc_html( $r[1] ); ?></td>
                    <td style="padding:9px 8px;white-space:nowrap;"><?php echo esc_html( $r[2] ); ?></td>
                    <td style="padding:9px 8px;white-space:nowrap;"><?php echo esc_html( $r[3] ); ?></td>
                    <td style="padding:9px 8px;white-space:nowrap;"><?php echo esc_html( $r[4] ); ?></td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
            </div>
            <p style="margin:14px 0 0;line-height:1.6;"><strong>Kako izmjeriti stopalo:</strong> stanite na list papira, označite petu i najduži prst te izmjerite razmak između oznaka. Ako ste između dva broja, uzmite veći. Ako vam veličina ne odgovara, imate 30 dana za povrat ili zamjenu.</p>
          </div>

        <?php elseif( noriks_is_type( 'anklesleeve', $current_product_id ) ): ?>

          <div class="noriks-size">
            <p style="margin:0 0 14px;line-height:1.6;">Veličinu odaberite prema svom <strong>broju cipele (EU)</strong>. Potpora se prodaje po komadu — za oba gležnja odaberite ponudu 2x (par).</p>
            <div style="overflow-x:auto;-webkit-overflow-scrolling:touch;">
            <table style="width:100%;border-collapse:collapse;font-size:14px;">
              <thead>
                <tr style="background:#24476b;color:#fff;">
                  <th style="padding:9px 8px;text-align:left;">Veličina</th>
                  <th style="padding:9px 8px;text-align:left;">Broj cipele (EU)</th>
                </tr>
              </thead>
              <tbody>
                <?php
                foreach ( noriks_anklesleeve_sizes() as $i => $r ) :
                  $bg = ( $i % 2 ) ? '#eef3f8' : '#fff'; ?>
                  <tr style="background:<?php echo $bg; ?>;border-bottom:1px solid #eee;">
                    <td style="padding:9px 8px;font-weight:700;white-space:nowrap;"><?php echo esc_html( $r[0] ); ?></td>
                    <td style="padding:9px 8px;white-space:nowrap;"><?php echo esc_html( $r[1] ); ?></td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
            </div>
            <p style="margin:14px 0 0;line-height:1.6;"><strong>Savjet:</strong> ako ste između dvije veličine, preporučujemo veću veličinu za veću udobnost. Ako vam veličina ne odgovara, imate 30 dana za povrat ili zamjenu.</p>
          </div>

        <?php elseif( noriks_is_type( 'corksandals', $current_product_id ) ): ?>

          <div class="noriks-size">
            <p style="margin:0 0 14px;line-height:1.6;">Sandale su <strong>unisex</strong> i odgovaraju standardnim veličinama — naručite svoj uobičajeni broj. Veličine od <strong>EU 36 do EU 46</strong>.</p>
            <div style="overflow-x:auto;-webkit-overflow-scrolling:touch;">
            <table style="width:100%;border-collapse:collapse;font-size:14px;">
              <thead>
                <tr style="background:#9e7446;color:#fff;">
                  <th style="padding:9px 8px;text-align:left;">EU</th>
                  <th style="padding:9px 8px;text-align:left;">Unutarnja duljina</th>
                  <th style="padding:9px 8px;text-align:left;">US žene</th>
                  <th style="padding:9px 8px;text-align:left;">US muškarci</th>
                </tr>
              </thead>
              <tbody>
                <?php
                foreach ( noriks_corksandals_sizes() as $i => $r ) :
                  $bg = ( $i % 2 ) ? '#f7efe5' : '#fff'; ?>
                  <tr style="background:<?php echo $bg; ?>;border-bottom:1px solid #eee;">
                    <td style="padding:9px 8px;font-weight:700;white-space:nowrap;"><?php echo esc_html( $r[0] ); ?></td>
                    <td style="padding:9px 8px;white-space:nowrap;"><?php echo esc_html( $r[1] ); ?></td>
                    <td style="padding:9px 8px;white-space:nowrap;"><?php echo esc_html( $r[2] ); ?></td>
                    <td style="padding:9px 8px;white-space:nowrap;"><?php echo esc_html( $r[3] ); ?></td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
            </div>
            <p style="margin:14px 0 0;line-height:1.6;"><strong>Savjet:</strong> ako ste između dva broja ili imate široko stopalo, uzmite veći broj. Dvije podesive kopče omogućuju precizno pristajanje. Ako vam veličina ne odgovara, imate 30 dana za povrat ili zamjenu.</p>
          </div>

        <?php elseif( noriks_is_type( 'seatcover', $current_product_id ) ): ?>

          <div class="noriks-size">
            <p style="margin:0 0 14px;line-height:1.6;">NORIKS SeatCover dolazi u <strong>jednoj univerzalnoj veličini</strong> koja pristaje na gotovo sva prednja i stražnja pojedinačna sjedala.</p>
            <table style="width:100%;border-collapse:collapse;font-size:14px;">
              <tbody>
                <tr style="background:#b5532c;color:#fff;"><th style="padding:9px 8px;text-align:left;">Mjera</th><th style="padding:9px 8px;text-align:left;">Vrijednost</th></tr>
                <tr style="background:#fff;border-bottom:1px solid #eee;"><td style="padding:9px 8px;font-weight:700;">Dužina</td><td style="padding:9px 8px;">145 cm</td></tr>
                <tr style="background:#f9efe9;border-bottom:1px solid #eee;"><td style="padding:9px 8px;font-weight:700;">Širina</td><td style="padding:9px 8px;">65 cm</td></tr>
                <tr style="background:#fff;border-bottom:1px solid #eee;"><td style="padding:9px 8px;font-weight:700;">Težina</td><td style="padding:9px 8px;">manje od 500 g</td></tr>
                <tr style="background:#f9efe9;border-bottom:1px solid #eee;"><td style="padding:9px 8px;font-weight:700;">Smotana</td><td style="padding:9px 8px;">otprilike veličine boce za vodu</td></tr>
              </tbody>
            </table>
            <p style="margin:14px 0 0;line-height:1.6;">Pristaje na sjedala u osobnim automobilima, SUV-ovima, kamionetima i terencima — jednostavno je prebacite preko naslona za glavu. Ako vam ne odgovara, imate 30 dana za povrat ili zamjenu.</p>
          </div>

        <?php elseif( noriks_is_type( 'dograincoat', $current_product_id ) ): ?>

          <div class="noriks-size">
            <p style="margin:0 0 14px;line-height:1.6;">Izmjerite <strong>opseg prsa</strong> (najširi dio odmah iza prednjih nogu) i <strong>duljinu leđa</strong> (od početka vrata do početka repa). <strong>Ako je pas između dviju veličina, odaberite veću.</strong></p>
            <div style="overflow-x:auto;-webkit-overflow-scrolling:touch;">
            <table style="width:100%;border-collapse:collapse;font-size:14px;">
              <thead>
                <tr style="background:#a87508;color:#fff;">
                  <th style="padding:9px 8px;text-align:left;">Veličina</th>
                  <th style="padding:9px 8px;text-align:left;">Opseg prsa</th>
                  <th style="padding:9px 8px;text-align:left;">Duljina leđa</th>
                  <th style="padding:9px 8px;text-align:left;">Težina psa</th>
                </tr>
              </thead>
              <tbody>
                <?php
                foreach ( noriks_dograincoat_sizes() as $i => $r ) :
                  $bg = ( $i % 2 ) ? '#fdf3d9' : '#fff'; ?>
                  <tr style="background:<?php echo $bg; ?>;border-bottom:1px solid #eee;">
                    <td style="padding:9px 8px;font-weight:700;white-space:nowrap;"><?php echo esc_html( $r[0] ); ?></td>
                    <td style="padding:9px 8px;white-space:nowrap;"><?php echo esc_html( $r[1] ); ?></td>
                    <td style="padding:9px 8px;white-space:nowrap;"><?php echo esc_html( $r[2] ); ?></td>
                    <td style="padding:9px 8px;white-space:nowrap;"><?php echo esc_html( $r[3] ); ?></td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
            </div>
            <p style="margin:14px 0 0;line-height:1.6;">Veličinu prema pasmini pronaći ćete u tablici veličina uz ponude. Ako vam veličina ne odgovara, imate 30 dana za povrat ili zamjenu.</p>
          </div>

        <?php elseif( noriks_is_type( 'maternityleggings', $current_product_id ) ): ?>

          <div class="noriks-size">
            <p style="margin:0 0 14px;line-height:1.6;"><strong>Odaberite svoju uobičajenu veličinu prije trudnoće.</strong> Ako ste između dvije veličine, preporučujemo da radije odaberete <strong>manju</strong>. Tajice su rastezljive i savršeno se prilagođavaju trbuhu koji raste.</p>
            <div style="overflow-x:auto;-webkit-overflow-scrolling:touch;">
            <table style="width:100%;border-collapse:collapse;font-size:14px;">
              <thead>
                <tr style="background:#c9606a;color:#fff;">
                  <th style="padding:9px 8px;text-align:left;">Veličina</th>
                  <th style="padding:9px 8px;text-align:left;">Konf. broj</th>
                  <th style="padding:9px 8px;text-align:left;">Opseg bokova</th>
                  <th style="padding:9px 8px;text-align:left;">Duljina nogavice</th>
                </tr>
              </thead>
              <tbody>
                <?php
                foreach ( noriks_maternityleggings_sizes() as $i => $r ) :
                  $bg = ( $i % 2 ) ? '#fbeeee' : '#fff'; ?>
                  <tr style="background:<?php echo $bg; ?>;border-bottom:1px solid #eee;">
                    <td style="padding:9px 8px;font-weight:700;white-space:nowrap;"><?php echo esc_html( $r[0] ); ?></td>
                    <td style="padding:9px 8px;white-space:nowrap;"><?php echo esc_html( $r[1] ); ?></td>
                    <td style="padding:9px 8px;white-space:nowrap;"><?php echo esc_html( $r[2] ); ?></td>
                    <td style="padding:9px 8px;white-space:nowrap;"><?php echo esc_html( $r[3] ); ?></td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
            </div>
            <p style="margin:14px 0 0;line-height:1.6;">Primjer: Marta je visoka 170 cm i nosi veličinu M. Ako vam veličina ne odgovara, imate 30 dana za povrat ili zamjenu.</p>
          </div>

        <?php elseif( noriks_is_type( 'kidspillow', $current_product_id ) ): ?>

          <div class="noriks-size">
            <p style="margin:0 0 14px;line-height:1.6;">Tri veličine prema <strong>dobi djeteta</strong> – svaka s visinom i konturom prilagođenom dječjim proporcijama.</p>
            <div style="overflow-x:auto;-webkit-overflow-scrolling:touch;">
            <table style="width:100%;border-collapse:collapse;font-size:14px;">
              <thead>
                <tr style="background:#1f568e;color:#fff;">
                  <th style="padding:9px 8px;text-align:left;">Dob djeteta</th>
                  <th style="padding:9px 8px;text-align:left;">Dimenzije (d × š)</th>
                  <th style="padding:9px 8px;text-align:left;">Visina</th>
                </tr>
              </thead>
              <tbody>
                <?php
                foreach ( noriks_kidspillow_sizes() as $i => $r ) :
                  $bg = ( $i % 2 ) ? '#f4f8fc' : '#fff'; ?>
                  <tr style="background:<?php echo $bg; ?>;border-bottom:1px solid #eee;">
                    <td style="padding:9px 8px;font-weight:700;white-space:nowrap;"><?php echo esc_html( $r[1] ); ?></td>
                    <td style="padding:9px 8px;white-space:nowrap;"><?php echo esc_html( $r[2] ); ?></td>
                    <td style="padding:9px 8px;white-space:nowrap;"><?php echo esc_html( $r[3] ); ?></td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
            </div>
            <p style="margin:12px 0 0;line-height:1.6;">Dijete je točno na granici (3 ili 8 godina) ili je krupnije od vršnjaka? Odaberite <strong>veću veličinu</strong> – u nju može urasti.</p>
            <p style="margin:14px 0 0;line-height:1.6;">Ako vam veličina ne odgovara, imate 30 dana za povrat ili zamjenu.</p>
          </div>

        <?php elseif( noriks_is_type( 'mattresstopper', $current_product_id ) ): ?>

          <div class="noriks-size">
            <p style="margin:0 0 14px;line-height:1.6;">Pet veličina za <strong>svaki krevet</strong> – sve s luksuznom udobnošću od <strong>10 cm</strong>. Odaberite veličinu prema dimenzijama svojeg madraca.</p>
            <div style="overflow-x:auto;-webkit-overflow-scrolling:touch;">
            <table style="width:100%;border-collapse:collapse;font-size:14px;">
              <thead>
                <tr style="background:#a9683f;color:#fff;">
                  <th style="padding:9px 8px;text-align:left;">Veličina</th>
                  <th style="padding:9px 8px;text-align:left;">Krevet</th>
                  <th style="padding:9px 8px;text-align:left;">Dimenzije (š × d × v)</th>
                </tr>
              </thead>
              <tbody>
                <?php
                foreach ( noriks_mattresstopper_sizes() as $i => $r ) :
                  $bg = ( $i % 2 ) ? '#fdf8f5' : '#fff'; ?>
                  <tr style="background:<?php echo $bg; ?>;border-bottom:1px solid #eee;">
                    <td style="padding:9px 8px;font-weight:700;white-space:nowrap;"><?php echo esc_html( $r[0] ); ?></td>
                    <td style="padding:9px 8px;"><?php echo esc_html( $r[1] ); ?></td>
                    <td style="padding:9px 8px;white-space:nowrap;"><?php echo esc_html( $r[2] ); ?></td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
            </div>
            <p style="margin:12px 0 0;line-height:1.6;">Izmjerite širinu i duljinu svojeg madraca i odaberite odgovarajuću veličinu – elastične trake na uglovima drže nadmadrac na mjestu.</p>
            <p style="margin:14px 0 0;line-height:1.6;">Ako vam veličina ne odgovara, imate 30 dana za povrat ili zamjenu.</p>
          </div>

        <?php elseif( noriks_is_type( 'silkboxers', $current_product_id ) ): ?>

          <div class="noriks-size">
            <p style="margin:0 0 14px;line-height:1.6;">Veličine od <strong>M do 3XL</strong> prema <strong>opsegu struka</strong>. Bokserice su krojene za muško tijelo i priljubljuju se bez pritiska.</p>
            <div style="overflow-x:auto;-webkit-overflow-scrolling:touch;">
            <table style="width:100%;border-collapse:collapse;font-size:14px;">
              <thead>
                <tr style="background:#1f568e;color:#fff;">
                  <th style="padding:9px 8px;text-align:left;">Veličina</th>
                  <th style="padding:9px 8px;text-align:left;">Opseg struka (cm)</th>
                  <th style="padding:9px 8px;text-align:left;">Opseg struka (inči)</th>
                </tr>
              </thead>
              <tbody>
                <?php
                foreach ( noriks_silkboxers_sizes() as $i => $r ) :
                  $bg = ( $i % 2 ) ? '#f1f5fa' : '#fff'; ?>
                  <tr style="background:<?php echo $bg; ?>;border-bottom:1px solid #eee;">
                    <td style="padding:9px 8px;font-weight:700;white-space:nowrap;"><?php echo esc_html( $r[0] ); ?></td>
                    <td style="padding:9px 8px;white-space:nowrap;"><?php echo esc_html( $r[1] ); ?></td>
                    <td style="padding:9px 8px;white-space:nowrap;"><?php echo esc_html( $r[2] ); ?></td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
            </div>
            <p style="margin:12px 0 0;line-height:1.6;"><strong>Između dvije veličine?</strong> Odaberite veću za udobnost.</p>
            <p style="margin:14px 0 0;line-height:1.6;">Ako vam veličina ne odgovara, imate 30 dana za povrat ili zamjenu.</p>
          </div>

        <?php elseif( noriks_is_type( 'modalsweatshirt', $current_product_id ) ): ?>

          <div class="noriks-size">
            <p style="margin:0 0 14px;line-height:1.6;">Veličine od <strong>S do 3XL</strong> — mjere proizvoda u centimetrima. Udoban <strong>regularni kroj</strong>: u prosjeku odgovara uobičajenoj veličini.</p>
            <div style="overflow-x:auto;-webkit-overflow-scrolling:touch;">
            <table style="width:100%;border-collapse:collapse;font-size:14px;">
              <thead>
                <tr style="background:#1f568e;color:#fff;">
                  <th style="padding:9px 8px;text-align:left;">Veličina</th>
                  <th style="padding:9px 8px;text-align:left;">Duljina leđa</th>
                  <th style="padding:9px 8px;text-align:left;">Opseg prsa</th>
                  <th style="padding:9px 8px;text-align:left;">Opseg struka</th>
                  <th style="padding:9px 8px;text-align:left;">Duljina rukava</th>
                </tr>
              </thead>
              <tbody>
                <?php
                foreach ( noriks_modalsweatshirt_sizes() as $i => $r ) :
                  $bg = ( $i % 2 ) ? '#f1f5fa' : '#fff'; ?>
                  <tr style="background:<?php echo $bg; ?>;border-bottom:1px solid #eee;">
                    <td style="padding:9px 8px;font-weight:700;white-space:nowrap;"><?php echo esc_html( $r[0] ); ?></td>
                    <td style="padding:9px 8px;white-space:nowrap;"><?php echo esc_html( $r[1] ); ?></td>
                    <td style="padding:9px 8px;white-space:nowrap;"><?php echo esc_html( $r[2] ); ?></td>
                    <td style="padding:9px 8px;white-space:nowrap;"><?php echo esc_html( $r[3] ); ?></td>
                    <td style="padding:9px 8px;white-space:nowrap;"><?php echo esc_html( $r[4] ); ?></td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
            </div>
            <p style="margin:12px 0 0;line-height:1.6;font-size:13px;">*Zbog prirodne elastičnosti tkanine moguće je odstupanje mjera do 2 %.</p>
            <p style="margin:14px 0 0;line-height:1.6;">Ako vam veličina ne odgovara, imate 30 dana za povrat ili zamjenu.</p>
          </div>

        <?php elseif( noriks_is_type( 'techtee', $current_product_id ) ): ?>

          <div class="noriks-size">
            <p style="margin:0 0 14px;line-height:1.6;">Veličine od <strong>S do 4XL</strong>. Majica ima <strong>pripijen kroj</strong> — <strong>uzmite svoju uobičajenu veličinu</strong>. Ako ste između dvije veličine ili volite malo opušteniji kroj, odaberite veću.</p>
            <div style="overflow-x:auto;-webkit-overflow-scrolling:touch;">
            <table style="width:100%;border-collapse:collapse;font-size:14px;">
              <thead>
                <tr style="background:#a9683f;color:#fff;">
                  <th style="padding:9px 8px;text-align:left;">Veličina</th>
                  <th style="padding:9px 8px;text-align:left;">Opseg prsa</th>
                  <th style="padding:9px 8px;text-align:left;">Visina</th>
                  <th style="padding:9px 8px;text-align:left;">Težina</th>
                </tr>
              </thead>
              <tbody>
                <?php
                foreach ( noriks_techtee_sizes() as $i => $r ) :
                  $bg = ( $i % 2 ) ? '#f7f2ec' : '#fff'; ?>
                  <tr style="background:<?php echo $bg; ?>;border-bottom:1px solid #eee;">
                    <td style="padding:9px 8px;font-weight:700;white-space:nowrap;"><?php echo esc_html( $r[0] ); ?></td>
                    <td style="padding:9px 8px;white-space:nowrap;"><?php echo esc_html( $r[1] ); ?></td>
                    <td style="padding:9px 8px;white-space:nowrap;"><?php echo esc_html( $r[2] ); ?></td>
                    <td style="padding:9px 8px;white-space:nowrap;"><?php echo esc_html( $r[3] ); ?></td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
            </div>
            <p style="margin:14px 0 0;line-height:1.6;">Ako vam veličina ne odgovara, imate 30 dana za povrat ili zamjenu.</p>
          </div>

        <?php elseif( noriks_is_type( 'widetoeshoes', $current_product_id ) ): ?>

          <div class="noriks-size">
            <p style="margin:0 0 14px;line-height:1.6;">Veličine od <strong>EU 37 do EU 47</strong>. Tenisice mogu biti malo manje, zato veličinu odaberite prema duljini stopala. <strong>Duljina uloška = duljina stopala + 1–1,5 cm.</strong></p>
            <div style="overflow-x:auto;-webkit-overflow-scrolling:touch;">
            <table style="width:100%;border-collapse:collapse;font-size:14px;">
              <thead>
                <tr style="background:#a9683f;color:#fff;">
                  <th style="padding:9px 8px;text-align:left;">EU</th>
                  <th style="padding:9px 8px;text-align:left;">Uložak</th>
                  <th style="padding:9px 8px;text-align:left;">Širina</th>
                  <th style="padding:9px 8px;text-align:left;">UK</th>
                  <th style="padding:9px 8px;text-align:left;">US M</th>
                  <th style="padding:9px 8px;text-align:left;">US Ž</th>
                </tr>
              </thead>
              <tbody>
                <?php
                foreach ( noriks_widetoeshoes_sizes() as $i => $r ) :
                  $bg = ( $i % 2 ) ? '#f7f2ec' : '#fff'; ?>
                  <tr style="background:<?php echo $bg; ?>;border-bottom:1px solid #eee;">
                    <td style="padding:9px 8px;font-weight:700;white-space:nowrap;"><?php echo esc_html( $r[0] ); ?></td>
                    <td style="padding:9px 8px;white-space:nowrap;"><?php echo esc_html( $r[1] ); ?></td>
                    <td style="padding:9px 8px;white-space:nowrap;"><?php echo esc_html( $r[2] ); ?></td>
                    <td style="padding:9px 8px;white-space:nowrap;"><?php echo esc_html( $r[3] ); ?></td>
                    <td style="padding:9px 8px;white-space:nowrap;"><?php echo esc_html( $r[4] ); ?></td>
                    <td style="padding:9px 8px;white-space:nowrap;"><?php echo esc_html( $r[5] ); ?></td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
            </div>
            <p style="margin:14px 0 0;line-height:1.6;">Ako vam veličina ne odgovara, imate 30 dana za povrat ili zamjenu.</p>
          </div>

        <?php elseif( noriks_is_type( 'thermoboots', $current_product_id ) ): ?>

          <div class="noriks-size">
            <p style="margin:0 0 14px;line-height:1.6;">Veličine od <strong>EU 37 do EU 48</strong>, unisex. Čizme odgovaraju uobičajenoj veličini — <strong>odaberite svoju uobičajenu veličinu obuće</strong> ili je provjerite prema duljini stopala.</p>
            <div style="overflow-x:auto;-webkit-overflow-scrolling:touch;">
            <table style="width:100%;border-collapse:collapse;font-size:14px;">
              <thead>
                <tr style="background:#a9683f;color:#fff;">
                  <th style="padding:9px 8px;text-align:left;">EU</th>
                  <th style="padding:9px 8px;text-align:left;">UK</th>
                  <th style="padding:9px 8px;text-align:left;">Duljina stopala</th>
                  <th style="padding:9px 8px;text-align:left;">Unutarnja duljina</th>
                </tr>
              </thead>
              <tbody>
                <?php
                foreach ( noriks_thermoboots_sizes() as $i => $r ) :
                  $bg = ( $i % 2 ) ? '#f7f2ec' : '#fff'; ?>
                  <tr style="background:<?php echo $bg; ?>;border-bottom:1px solid #eee;">
                    <td style="padding:9px 8px;font-weight:700;white-space:nowrap;"><?php echo esc_html( $r[0] ); ?></td>
                    <td style="padding:9px 8px;white-space:nowrap;"><?php echo esc_html( $r[1] ); ?></td>
                    <td style="padding:9px 8px;white-space:nowrap;"><?php echo esc_html( $r[2] ); ?></td>
                    <td style="padding:9px 8px;white-space:nowrap;"><?php echo esc_html( $r[3] ); ?></td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
            </div>
            <p style="margin:14px 0 0;line-height:1.6;">Ako vam veličina ne odgovara, imate 30 dana za povrat ili zamjenu.</p>
          </div>

        <?php elseif( noriks_is_type( 'leatherboots', $current_product_id ) ): ?>

          <div class="noriks-size">
            <p style="margin:0 0 14px;line-height:1.6;">Muške veličine od <strong>EU 37 do EU 48</strong>. Čizme odgovaraju uobičajenoj veličini — <strong>odaberite svoju uobičajenu veličinu obuće</strong>, a ako ste između dvije veličine, odaberite veću.</p>
            <div style="overflow-x:auto;-webkit-overflow-scrolling:touch;">
            <table style="width:100%;border-collapse:collapse;font-size:14px;">
              <thead>
                <tr style="background:#a9683f;color:#fff;">
                  <th style="padding:9px 8px;text-align:left;">EU</th>
                  <th style="padding:9px 8px;text-align:left;">US (muške)</th>
                  <th style="padding:9px 8px;text-align:left;">Duljina stopala</th>
                </tr>
              </thead>
              <tbody>
                <?php
                foreach ( noriks_leatherboots_sizes() as $i => $r ) :
                  $bg = ( $i % 2 ) ? '#f7f2ec' : '#fff'; ?>
                  <tr style="background:<?php echo $bg; ?>;border-bottom:1px solid #eee;">
                    <td style="padding:9px 8px;font-weight:700;white-space:nowrap;"><?php echo esc_html( $r[0] ); ?></td>
                    <td style="padding:9px 8px;white-space:nowrap;"><?php echo esc_html( $r[1] ); ?></td>
                    <td style="padding:9px 8px;white-space:nowrap;"><?php echo esc_html( $r[2] ); ?></td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
            </div>
            <p style="margin:14px 0 0;line-height:1.6;">Ako vam veličina ne odgovara, imate 30 dana za povrat ili zamjenu.</p>
          </div>

        <?php elseif( noriks_is_type( 'wafflelongsleeve', $current_product_id ) ): ?>

          <div class="noriks-size">
            <p style="margin:0 0 14px;line-height:1.6;">Unisex veličine od <strong>XS do 3XL</strong>, <strong>opušten kroj</strong> — malo više prostora u prsima i ramenima. Veličine odgovaraju sljedećim <strong>mjerama tijela</strong> (cm):</p>
            <div style="overflow-x:auto;-webkit-overflow-scrolling:touch;">
            <table style="width:100%;border-collapse:collapse;font-size:14px;">
              <thead>
                <tr style="background:#4d7a5a;color:#fff;">
                  <th style="padding:9px 8px;text-align:left;">Veličina</th>
                  <th style="padding:9px 8px;text-align:left;">Opseg prsa</th>
                  <th style="padding:9px 8px;text-align:left;">Opseg struka</th>
                  <th style="padding:9px 8px;text-align:left;">Opseg bokova</th>
                </tr>
              </thead>
              <tbody>
                <?php
                foreach ( noriks_wafflelongsleeve_sizes() as $i => $r ) :
                  $bg = ( $i % 2 ) ? '#f1f6f1' : '#fff'; ?>
                  <tr style="background:<?php echo $bg; ?>;border-bottom:1px solid #eee;">
                    <td style="padding:9px 8px;font-weight:700;white-space:nowrap;"><?php echo esc_html( $r[0] ); ?></td>
                    <td style="padding:9px 8px;white-space:nowrap;"><?php echo esc_html( $r[1] ); ?></td>
                    <td style="padding:9px 8px;white-space:nowrap;"><?php echo esc_html( $r[2] ); ?></td>
                    <td style="padding:9px 8px;white-space:nowrap;"><?php echo esc_html( $r[3] ); ?></td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
            </div>
            <p style="margin:16px 0 10px;line-height:1.6;"><strong>Mjere majice</strong> (stvarne dimenzije proizvoda, cm):</p>
            <div style="overflow-x:auto;-webkit-overflow-scrolling:touch;">
            <table style="width:100%;border-collapse:collapse;font-size:14px;">
              <thead>
                <tr style="background:#4d7a5a;color:#fff;">
                  <th style="padding:9px 8px;text-align:left;">Veličina</th>
                  <th style="padding:9px 8px;text-align:left;">Opseg prsa</th>
                  <th style="padding:9px 8px;text-align:left;">Opseg struka</th>
                  <th style="padding:9px 8px;text-align:left;">Duljina</th>
                </tr>
              </thead>
              <tbody>
                <?php
                foreach ( noriks_wafflelongsleeve_sizes() as $i => $r ) :
                  $bg = ( $i % 2 ) ? '#f1f6f1' : '#fff'; ?>
                  <tr style="background:<?php echo $bg; ?>;border-bottom:1px solid #eee;">
                    <td style="padding:9px 8px;font-weight:700;white-space:nowrap;"><?php echo esc_html( $r[0] ); ?></td>
                    <td style="padding:9px 8px;white-space:nowrap;"><?php echo esc_html( $r[4] ); ?></td>
                    <td style="padding:9px 8px;white-space:nowrap;"><?php echo esc_html( $r[5] ); ?></td>
                    <td style="padding:9px 8px;white-space:nowrap;"><?php echo esc_html( $r[6] ); ?></td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
            </div>
            <p style="margin:14px 0 0;line-height:1.6;">Opseg prsa izmjerite oko najšireg dijela prsa, odmah ispod pazuha; struk u visini pupka; bokove oko najšireg dijela. Ako vam veličina ne odgovara, imate 30 dana za povrat ili zamjenu.</p>
          </div>

        <?php elseif( noriks_is_type( 'sleepset', $current_product_id ) ): ?>

          <div class="noriks-size">
            <p style="margin:0 0 14px;line-height:1.6;">Veličine od <strong>XS do XL</strong>, <strong>opušten kroj</strong>. Mjere su <strong>stvarne dimenzije pidžame</strong> (cm):</p>
            <div style="overflow-x:auto;-webkit-overflow-scrolling:touch;">
            <table style="width:100%;border-collapse:collapse;font-size:14px;">
              <thead>
                <tr style="background:#a8323e;color:#fff;">
                  <th style="padding:9px 8px;text-align:left;">Veličina</th>
                  <th style="padding:9px 8px;text-align:left;">Duljina majice</th>
                  <th style="padding:9px 8px;text-align:left;">Opseg prsa</th>
                  <th style="padding:9px 8px;text-align:left;">Opseg struka</th>
                  <th style="padding:9px 8px;text-align:left;">Duljina rukava</th>
                  <th style="padding:9px 8px;text-align:left;">Duljina nogavice</th>
                </tr>
              </thead>
              <tbody>
                <?php
                foreach ( noriks_sleepset_sizes() as $i => $r ) :
                  $bg = ( $i % 2 ) ? '#fbf0f1' : '#fff'; ?>
                  <tr style="background:<?php echo $bg; ?>;border-bottom:1px solid #eee;">
                    <td style="padding:9px 8px;font-weight:700;white-space:nowrap;"><?php echo esc_html( $r[0] ); ?></td>
                    <td style="padding:9px 8px;white-space:nowrap;"><?php echo esc_html( $r[1] ); ?></td>
                    <td style="padding:9px 8px;white-space:nowrap;"><?php echo esc_html( $r[2] ); ?></td>
                    <td style="padding:9px 8px;white-space:nowrap;"><?php echo esc_html( $r[3] ); ?></td>
                    <td style="padding:9px 8px;white-space:nowrap;"><?php echo esc_html( $r[4] ); ?></td>
                    <td style="padding:9px 8px;white-space:nowrap;"><?php echo esc_html( $r[5] ); ?></td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
            </div>
            <p style="margin:14px 0 0;line-height:1.6;">Modelica je visoka 173 cm i nosi veličinu S. Niste sigurni u veličinu? Uzmite jednu veličinu veću. Ako vam veličina ne odgovara, imate 30 dana za povrat ili zamjenu.</p>
          </div>

        <?php elseif( noriks_is_type( 'plushblanket', $current_product_id ) ): ?>

          <div class="noriks-size">
            <p style="margin:0 0 14px;line-height:1.6;">Četiri veličine – od osobnog pokrivača za kauč do deke za <strong>veliki bračni krevet</strong>. Mjere su približne i mogu malo odstupati zbog mekane i rastezljive tkanine.</p>
            <div style="overflow-x:auto;-webkit-overflow-scrolling:touch;">
            <table style="width:100%;border-collapse:collapse;font-size:14px;">
              <thead>
                <tr style="background:#1f568e;color:#fff;">
                  <th style="padding:9px 8px;text-align:left;">Veličina</th>
                  <th style="padding:9px 8px;text-align:left;">Dimenzije</th>
                  <th style="padding:9px 8px;text-align:left;">Težina</th>
                  <th style="padding:9px 8px;text-align:left;">Idealna za</th>
                </tr>
              </thead>
              <tbody>
                <?php
                foreach ( noriks_plushblanket_sizes() as $i => $r ) :
                  $bg = ( $i % 2 ) ? '#f1f6fb' : '#fff'; ?>
                  <tr style="background:<?php echo $bg; ?>;border-bottom:1px solid #eee;">
                    <td style="padding:9px 8px;font-weight:700;white-space:nowrap;"><?php echo esc_html( $r[0] ); ?></td>
                    <td style="padding:9px 8px;white-space:nowrap;"><?php echo esc_html( $r[1] ); ?></td>
                    <td style="padding:9px 8px;white-space:nowrap;"><?php echo esc_html( $r[3] ); ?></td>
                    <td style="padding:9px 8px;"><?php echo esc_html( $r[4] ); ?></td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
            </div>
            <p style="margin:14px 0 0;line-height:1.6;">Ako vam veličina ne odgovara, imate 30 dana za povrat ili zamjenu.</p>
          </div>

        <?php elseif( noriks_is_type( 'compressionsocks', $current_product_id ) ): ?>

          <div class="noriks-size">
            <p style="margin:0 0 14px;line-height:1.6;">Veličinu odaberite prema <strong>opsegu lista</strong>: izmjerite najširi dio lista i pronađite svoju mjeru u tablici. <strong>Opseg lista ima prednost pred težinom.</strong></p>
            <div style="overflow-x:auto;-webkit-overflow-scrolling:touch;">
            <table style="width:100%;border-collapse:collapse;font-size:14px;">
              <thead>
                <tr style="background:#b8264f;color:#fff;">
                  <th style="padding:9px 8px;text-align:left;">Veličina</th>
                  <th style="padding:9px 8px;text-align:left;">Opseg lista</th>
                  <th style="padding:9px 8px;text-align:left;">Težina*</th>
                </tr>
              </thead>
              <tbody>
                <?php
                foreach ( noriks_compressionsocks_sizes() as $i => $r ) :
                  $bg = ( $i % 2 ) ? '#fcf0f3' : '#fff'; ?>
                  <tr style="background:<?php echo $bg; ?>;border-bottom:1px solid #eee;">
                    <td style="padding:9px 8px;font-weight:700;white-space:nowrap;"><?php echo esc_html( $r[0] ); ?></td>
                    <td style="padding:9px 8px;white-space:nowrap;"><?php echo esc_html( $r[1] ); ?></td>
                    <td style="padding:9px 8px;white-space:nowrap;"><?php echo esc_html( $r[2] ); ?></td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
            </div>
            <p style="margin:14px 0 0;line-height:1.6;">*Opseg lista ima prednost pred težinom. S većom veličinom veći je i dio za stopalo. Ako vam veličina ne odgovara, imate 30 dana za povrat ili zamjenu.</p>
          </div>

        <?php elseif( noriks_is_type( 'cloudclogs', $current_product_id ) ): ?>

          <div class="noriks-size">
            <p style="margin:0 0 14px;line-height:1.6;">Unisex veličine od <strong>EU 39 do EU 46</strong> (i polovične veličine). Izmjerite duljinu stopala od pete do najduljeg prsta i odaberite veličinu čija <strong>duljina stopala</strong> odgovara vašoj mjeri.</p>
            <div style="overflow-x:auto;-webkit-overflow-scrolling:touch;">
            <table style="width:100%;border-collapse:collapse;font-size:14px;">
              <thead>
                <tr style="background:#1f568e;color:#fff;">
                  <th style="padding:9px 8px;text-align:left;">EU</th>
                  <th style="padding:9px 8px;text-align:left;">US (muške / ženske)</th>
                  <th style="padding:9px 8px;text-align:left;">UK</th>
                  <th style="padding:9px 8px;text-align:left;">Duljina stopala</th>
                </tr>
              </thead>
              <tbody>
                <?php
                foreach ( noriks_cloudclogs_sizes() as $i => $r ) :
                  $bg = ( $i % 2 ) ? '#f2f6fb' : '#fff'; ?>
                  <tr style="background:<?php echo $bg; ?>;border-bottom:1px solid #eee;">
                    <td style="padding:9px 8px;font-weight:700;white-space:nowrap;"><?php echo esc_html( $r[0] ); ?></td>
                    <td style="padding:9px 8px;white-space:nowrap;"><?php echo esc_html( $r[1] ); ?></td>
                    <td style="padding:9px 8px;white-space:nowrap;"><?php echo esc_html( $r[2] ); ?></td>
                    <td style="padding:9px 8px;white-space:nowrap;"><?php echo esc_html( $r[3] ); ?></td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
            </div>
            <p style="margin:14px 0 0;line-height:1.6;">Ako vam veličina ne odgovara, imate 30 dana za povrat ili zamjenu.</p>
          </div>

        <?php elseif( noriks_is_type( 'snugboot', $current_product_id ) ): ?>

          <div class="noriks-size">
            <p style="margin:0 0 14px;line-height:1.6;">Unisex veličine od <strong>EU 36 do EU 46</strong>. Zbog mekane, debele krznene podstave čizme mogu u početku biti <strong>tijesne, osobito oko hrpta stopala</strong>; nošenjem se podstava prirodno slegne i pristajanje postaje udobnije. Za čvršće pristajanje odaberite <strong>svoju uobičajenu veličinu</strong>, a ako imate visok hrbat stopala, volite više prostora ili nosite deblje čarape, odaberite <strong>jednu veličinu veću</strong>.</p>
            <div style="overflow-x:auto;-webkit-overflow-scrolling:touch;">
            <table style="width:100%;border-collapse:collapse;font-size:14px;">
              <thead>
                <tr style="background:#a9683f;color:#fff;">
                  <th style="padding:9px 8px;text-align:left;">EU</th>
                  <th style="padding:9px 8px;text-align:left;">US (ženske)</th>
                  <th style="padding:9px 8px;text-align:left;">US (muške)</th>
                  <th style="padding:9px 8px;text-align:left;">Duljina stopala</th>
                  <th style="padding:9px 8px;text-align:left;">Širina stopala</th>
                </tr>
              </thead>
              <tbody>
                <?php
                foreach ( noriks_snugboot_sizes() as $i => $r ) :
                  $bg = ( $i % 2 ) ? '#f7f2ec' : '#fff'; ?>
                  <tr style="background:<?php echo $bg; ?>;border-bottom:1px solid #eee;">
                    <td style="padding:9px 8px;font-weight:700;white-space:nowrap;"><?php echo esc_html( $r[0] ); ?></td>
                    <td style="padding:9px 8px;white-space:nowrap;"><?php echo esc_html( $r[1] ); ?></td>
                    <td style="padding:9px 8px;white-space:nowrap;"><?php echo esc_html( $r[2] ); ?></td>
                    <td style="padding:9px 8px;white-space:nowrap;"><?php echo esc_html( $r[3] ); ?></td>
                    <td style="padding:9px 8px;white-space:nowrap;"><?php echo esc_html( $r[4] ); ?></td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
            </div>
            <p style="margin:14px 0 0;line-height:1.6;">Ako vam veličina ne odgovara, imate 30 dana za povrat ili zamjenu.</p>
          </div>

        <?php elseif( noriks_is_type( 'minimizerbra', $current_product_id ) ): ?>

          <div class="noriks-size">
            <p style="margin:0 0 14px;line-height:1.6;">Veličina ima dva dijela: <strong>broj trake</strong> (70 – 115) prema <strong>opsegu ispod grudi</strong> i <strong>slovo košarice</strong> (B – I) prema <strong>opsegu grudi</strong>. Sve mjere su u cm; ako ste između dvije veličine, uzmite veću.</p>
            <div style="overflow-x:auto;-webkit-overflow-scrolling:touch;">
            <table style="width:100%;border-collapse:collapse;font-size:13px;">
              <thead>
                <tr style="background:#a9683f;color:#fff;">
                  <th style="padding:8px 6px;text-align:left;white-space:nowrap;">Traka</th>
                  <th style="padding:8px 6px;text-align:left;white-space:nowrap;">US</th>
                  <th style="padding:8px 6px;text-align:left;white-space:nowrap;">Ispod grudi</th>
                  <?php foreach ( array( 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I' ) as $nmb_c ) : ?>
                  <th style="padding:8px 6px;text-align:left;"><?php echo esc_html( $nmb_c ); ?></th>
                  <?php endforeach; ?>
                </tr>
              </thead>
              <tbody>
                <?php
                foreach ( noriks_minimizerbra_sizes() as $i => $r ) :
                  $bg = ( $i % 2 ) ? '#f7ece2' : '#fff'; ?>
                  <tr style="background:<?php echo $bg; ?>;border-bottom:1px solid #eee;">
                    <td style="padding:8px 6px;font-weight:700;white-space:nowrap;"><?php echo esc_html( $r[0] ); ?></td>
                    <td style="padding:8px 6px;white-space:nowrap;"><?php echo esc_html( $r[1] ); ?></td>
                    <td style="padding:8px 6px;white-space:nowrap;"><?php echo esc_html( $r[2] ); ?></td>
                    <?php foreach ( $r[3] as $v ) : ?>
                    <td style="padding:8px 6px;white-space:nowrap;"><?php echo $v === '' ? '–' : esc_html( $v ); ?></td>
                    <?php endforeach; ?>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
            </div>
            <p style="margin:14px 0 0;line-height:1.6;">Košarica E odgovara američkoj DD, a F američkoj DDD; »–« znači da se veličina ne izrađuje. Ako vam veličina ne odgovara, imate 30 dana za povrat ili zamjenu.</p>
          </div>
        <?php elseif( noriks_is_type( 'cashmeresweater', $current_product_id ) ): ?>

          <div class="noriks-size">
            <p style="margin:0 0 14px;line-height:1.6;"><strong>Jedna veličina – M</strong> (US 6–10). Opušteni kroj sa spuštenim ramenima.</p>
            <div style="overflow-x:auto;-webkit-overflow-scrolling:touch;">
            <table style="width:100%;border-collapse:collapse;font-size:14px;">
              <thead>
                <tr style="background:#a9683f;color:#fff;">
                  <th style="padding:9px 8px;text-align:left;">Veličina</th>
                  <th style="padding:9px 8px;text-align:left;">US</th>
                  <th style="padding:9px 8px;text-align:left;">Duljina</th>
                  <th style="padding:9px 8px;text-align:left;">Duljina rukava</th>
                  <th style="padding:9px 8px;text-align:left;">Širina ramena</th>
                  <th style="padding:9px 8px;text-align:left;">Opseg prsa</th>
                </tr>
              </thead>
              <tbody>
                <?php
                foreach ( noriks_cashmeresweater_sizes() as $i => $r ) :
                  $bg = ( $i % 2 ) ? '#f7ece2' : '#fff'; ?>
                  <tr style="background:<?php echo $bg; ?>;border-bottom:1px solid #eee;">
                    <td style="padding:9px 8px;font-weight:700;white-space:nowrap;"><?php echo esc_html( $r[0] ); ?></td>
                    <td style="padding:9px 8px;white-space:nowrap;"><?php echo esc_html( $r[1] ); ?></td>
                    <td style="padding:9px 8px;white-space:nowrap;"><?php echo esc_html( $r[3] ); ?></td>
                    <td style="padding:9px 8px;white-space:nowrap;"><?php echo esc_html( $r[4] ); ?></td>
                    <td style="padding:9px 8px;white-space:nowrap;"><?php echo esc_html( $r[5] ); ?></td>
                    <td style="padding:9px 8px;white-space:nowrap;"><?php echo esc_html( $r[6] ); ?></td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
            </div>
            <p style="margin:14px 0 0;line-height:1.6;">Mjere proizvoda (cm). Mjere tijela: opseg prsa 130 – 134 cm. Sve mjere uzete su ručno, moguće je odstupanje od 2–3 cm. Ako vam ne odgovara, imate 30 dana za povrat ili zamjenu.</p>
          </div>

        <?php elseif( noriks_is_type( 'nursingbra', $current_product_id ) ): ?>

          <div class="noriks-size">
            <p style="margin:0 0 14px;line-height:1.6;">Veličinu (S – 4XL) pronađite na sjecištu svoje <strong>košarice</strong> (redak) i <strong>trake</strong> prema opsegu ispod grudi (stupac, EU / UK).</p>
            <div style="overflow-x:auto;-webkit-overflow-scrolling:touch;">
            <table style="width:100%;border-collapse:collapse;font-size:13px;">
              <thead>
                <tr style="background:#a9683f;color:#fff;">
                  <th style="padding:8px 6px;text-align:left;white-space:nowrap;">Košarica</th>
                  <th style="padding:8px 6px;text-align:left;white-space:nowrap;">UK</th>
                  <?php foreach ( noriks_nursingbra_bands() as $nnb_b ) : ?>
                  <th style="padding:8px 6px;text-align:center;white-space:nowrap;"><?php echo esc_html( $nnb_b[0] ); ?><br><span style="font-weight:400;font-size:11px;">UK <?php echo esc_html( $nnb_b[1] ); ?></span></th>
                  <?php endforeach; ?>
                </tr>
              </thead>
              <tbody>
                <?php
                foreach ( noriks_nursingbra_sizes() as $i => $r ) :
                  $bg = ( $i % 2 ) ? '#f7ece2' : '#fff'; ?>
                  <tr style="background:<?php echo $bg; ?>;border-bottom:1px solid #eee;">
                    <td style="padding:8px 6px;font-weight:700;white-space:nowrap;"><?php echo esc_html( $r[0] ); ?></td>
                    <td style="padding:8px 6px;white-space:nowrap;"><?php echo esc_html( $r[1] ); ?></td>
                    <?php foreach ( $r[2] as $v ) : ?>
                    <td style="padding:8px 6px;white-space:nowrap;text-align:center;"><?php echo $v === '' ? '–' : esc_html( $v ); ?></td>
                    <?php endforeach; ?>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
            </div>
            <p style="margin:14px 0 0;line-height:1.6;">97 % kupaca kaže da veličina točno odgovara; »–« znači da veličine nema. Uz svaki grudnjak dobivate produžetak trake (5 cm). Ako vam veličina ne odgovara, imate 30 dana za povrat ili zamjenu.</p>
          </div>
        <?php elseif( noriks_is_type( 'dogbed', $current_product_id ) ): ?>

          <div class="noriks-size">
            <p style="margin:0 0 14px;line-height:1.6;">Veličinu odaberite prema <strong>duljini</strong> i <strong>težini</strong> svog psa. <strong>Ako ste u dvojbi, odaberite veću veličinu.</strong></p>
            <div style="overflow-x:auto;-webkit-overflow-scrolling:touch;">
            <table style="width:100%;border-collapse:collapse;font-size:14px;">
              <thead>
                <tr style="background:#a9683f;color:#fff;">
                  <th style="padding:9px 8px;text-align:left;">Veličina</th>
                  <th style="padding:9px 8px;text-align:left;">D × Š × V</th>
                  <th style="padding:9px 8px;text-align:left;">Prostor za ležanje</th>
                  <th style="padding:9px 8px;text-align:left;">Duljina psa</th>
                  <th style="padding:9px 8px;text-align:left;">Težina psa</th>
                  <th style="padding:9px 8px;text-align:left;">Primjeri pasmina</th>
                </tr>
              </thead>
              <tbody>
                <?php
                foreach ( noriks_dogbed_sizes() as $i => $r ) :
                  $bg = ( $i % 2 ) ? '#f7ece2' : '#fff'; ?>
                  <tr style="background:<?php echo $bg; ?>;border-bottom:1px solid #eee;">
                    <td style="padding:9px 8px;font-weight:700;white-space:nowrap;"><?php echo esc_html( $r[0] ); ?></td>
                    <td style="padding:9px 8px;white-space:nowrap;"><?php echo esc_html( $r[1] ); ?></td>
                    <td style="padding:9px 8px;white-space:nowrap;"><?php echo esc_html( $r[2] ); ?></td>
                    <td style="padding:9px 8px;white-space:nowrap;"><?php echo esc_html( $r[3] ); ?></td>
                    <td style="padding:9px 8px;white-space:nowrap;"><?php echo esc_html( $r[4] ); ?></td>
                    <td style="padding:9px 8px;"><?php echo esc_html( $r[5] ); ?></td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
            </div>
            <p style="margin:14px 0 0;line-height:1.6;">D × Š × V su vanjske mjere kreveta; prostor za ležanje je unutarnja površina između naslona. Ako vam veličina ne odgovara, imate 30 dana za povrat ili zamjenu.</p>
          </div>

        <?php elseif( noriks_is_type( 'slingbag', $current_product_id ) ): ?>

          <div class="noriks-size">
            <p style="margin:0 0 14px;line-height:1.6;"><strong>Jedna veličina za sve.</strong> Podesivi remen dug je najviše <strong>130 cm</strong> i pristaje svakoj građi. Odaberite kapacitet: <strong>Mini</strong>, <strong>Regular</strong> (najprodavanija) ili <strong>Max</strong>.</p>
            <div style="overflow-x:auto;-webkit-overflow-scrolling:touch;">
            <table style="width:100%;border-collapse:collapse;font-size:14px;">
              <thead>
                <tr style="background:#a9683f;color:#fff;">
                  <th style="padding:9px 8px;text-align:left;">Veličina</th>
                  <th style="padding:9px 8px;text-align:left;">V × Š × D</th>
                  <th style="padding:9px 8px;text-align:left;">Remen</th>
                  <th style="padding:9px 8px;text-align:left;">Što stane</th>
                </tr>
              </thead>
              <tbody>
                <?php
                foreach ( noriks_slingbag_sizes() as $i => $r ) :
                  $bg = ( $i % 2 ) ? '#f7ece2' : '#fff'; ?>
                  <tr style="background:<?php echo $bg; ?>;border-bottom:1px solid #eee;">
                    <td style="padding:9px 8px;font-weight:700;white-space:nowrap;"><?php echo esc_html( $r[0] ); ?></td>
                    <td style="padding:9px 8px;white-space:nowrap;"><?php echo esc_html( $r[1] ); ?></td>
                    <td style="padding:9px 8px;white-space:nowrap;"><?php echo esc_html( $r[2] ); ?></td>
                    <td style="padding:9px 8px;"><?php echo esc_html( $r[3] ); ?></td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
            </div>
            <p style="margin:14px 0 0;line-height:1.6;">Sve tri veličine uklapaju se u ograničenja za osobni predmet u zrakoplovu. Ako vam veličina ne odgovara, imate 30 dana za povrat ili zamjenu.</p>
          </div>


        <?php elseif( noriks_is_type( 'bathmat', $current_product_id ) ): ?>

          <div class="noriks-size">
            <p style="margin:0 0 14px;line-height:1.6;"><strong>Dvije veličine: Mala 40 × 60 cm i Standardna 50 × 80 cm</strong>, debljina manje od 5 mm – stane ispod većine vrata i ne smeta robotskim usisavačima.</p>
            <div style="overflow-x:auto;-webkit-overflow-scrolling:touch;">
            <table style="width:100%;border-collapse:collapse;font-size:14px;">
              <thead>
                <tr style="background:#1f568e;color:#fff;">
                  <th style="padding:9px 8px;text-align:left;">Veličina</th>
                  <th style="padding:9px 8px;text-align:left;">Dimenzije</th>
                  <th style="padding:9px 8px;text-align:left;">Debljina</th>
                  <th style="padding:9px 8px;text-align:left;">Idealan za</th>
                </tr>
              </thead>
              <tbody>
                <?php
                foreach ( noriks_bathmat_sizes() as $i => $r ) :
                  $bg = ( $i % 2 ) ? '#ebf2f9' : '#fff'; ?>
                  <tr style="background:<?php echo $bg; ?>;border-bottom:1px solid #eee;">
                    <td style="padding:9px 8px;font-weight:700;white-space:nowrap;"><?php echo esc_html( $r[0] ); ?></td>
                    <td style="padding:9px 8px;white-space:nowrap;"><?php echo esc_html( $r[1] ); ?></td>
                    <td style="padding:9px 8px;white-space:nowrap;"><?php echo esc_html( $r[2] ); ?></td>
                    <td style="padding:9px 8px;"><?php echo esc_html( $r[3] ); ?></td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
            </div>
            <p style="margin:14px 0 0;line-height:1.6;">Većina kupaca uzme dva po kupaonici – jedan ispred tuša ili kade i drugi ispred umivaonika. Ako vam veličina ne odgovara, imate 30 dana za povrat ili zamjenu.</p>
          </div>

        <?php elseif( noriks_is_type( 'travelbag', $current_product_id ) ): ?>

          <div class="noriks-size">
            <p style="margin:0 0 14px;line-height:1.6;"><strong>Oba modela iste su veličine: 51 × 23 × 32 cm</strong> (dimenzije ručne prtljage), težina 1,1 kg. <strong>Classic</strong> ima ravno dno, a <strong>Roller</strong> dno s utorom i odvojivu ručku s kotačićima.</p>
            <div style="overflow-x:auto;-webkit-overflow-scrolling:touch;">
            <table style="width:100%;border-collapse:collapse;font-size:14px;">
              <thead>
                <tr style="background:#a9683f;color:#fff;">
                  <th style="padding:9px 8px;text-align:left;">Model</th>
                  <th style="padding:9px 8px;text-align:left;">Dimenzije</th>
                  <th style="padding:9px 8px;text-align:left;">Nošenje</th>
                  <th style="padding:9px 8px;text-align:left;">Za koga</th>
                </tr>
              </thead>
              <tbody>
                <?php
                foreach ( noriks_travelbag_sizes() as $i => $r ) :
                  $bg = ( $i % 2 ) ? '#f7ece2' : '#fff'; ?>
                  <tr style="background:<?php echo $bg; ?>;border-bottom:1px solid #eee;">
                    <td style="padding:9px 8px;font-weight:700;white-space:nowrap;"><?php echo esc_html( $r[0] ); ?></td>
                    <td style="padding:9px 8px;white-space:nowrap;"><?php echo esc_html( $r[1] ); ?></td>
                    <td style="padding:9px 8px;"><?php echo esc_html( $r[2] ); ?></td>
                    <td style="padding:9px 8px;"><?php echo esc_html( $r[3] ); ?></td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
            </div>
            <p style="margin:14px 0 0;line-height:1.6;">Pravila za ručnu prtljagu razlikuju se od kompanije do kompanije – prije leta provjerite dopuštene dimenzije. Ako vam model ne odgovara, imate 30 dana za povrat ili zamjenu.</p>
          </div>

        <?php elseif( noriks_is_type( 'comfortjeans', $current_product_id ) ): ?>

          <div class="noriks-size">
            <p style="margin:0 0 14px;line-height:1.6;"><strong>Opušten kroj</strong> koji prianja u struku i pada poluširoko ravno. Veličine od <strong>XXS do XXL</strong> (EU 32 – 50), duljine od <strong>L26 do L36</strong> (66 – 91 cm).</p>
            <div style="overflow-x:auto;-webkit-overflow-scrolling:touch;">
            <table style="width:100%;border-collapse:collapse;font-size:14px;">
              <thead>
                <tr style="background:#1f568e;color:#fff;">
                  <th style="padding:9px 8px;text-align:left;">Veličina</th>
                  <th style="padding:9px 8px;text-align:left;">EU</th>
                  <th style="padding:9px 8px;text-align:left;">Opseg struka</th>
                  <th style="padding:9px 8px;text-align:left;">Opseg bokova</th>
                </tr>
              </thead>
              <tbody>
                <?php
                foreach ( noriks_comfortjeans_sizes() as $i => $r ) :
                  $bg = ( $i % 2 ) ? '#ebf2f9' : '#fff'; ?>
                  <tr style="background:<?php echo $bg; ?>;border-bottom:1px solid #eee;">
                    <td style="padding:9px 8px;font-weight:700;white-space:nowrap;"><?php echo esc_html( $r[0] ); ?></td>
                    <td style="padding:9px 8px;white-space:nowrap;"><?php echo esc_html( $r[1] ); ?></td>
                    <td style="padding:9px 8px;white-space:nowrap;"><?php echo esc_html( $r[2] ); ?></td>
                    <td style="padding:9px 8px;white-space:nowrap;"><?php echo esc_html( $r[3] ); ?></td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
            </div>
            <p style="margin:18px 0 10px;line-height:1.6;"><strong>Koju duljinu odabrati?</strong> Uz ravne cipele ili tenisice hlače završavaju tik iznad poda.</p>
            <div style="overflow-x:auto;-webkit-overflow-scrolling:touch;">
            <table style="width:100%;border-collapse:collapse;font-size:14px;">
              <thead>
                <tr style="background:#1f568e;color:#fff;">
                  <th style="padding:9px 8px;text-align:left;">Duljina</th>
                  <th style="padding:9px 8px;text-align:left;">Preporučena visina</th>
                  <th style="padding:9px 8px;text-align:left;">Unutarnji šav bosonogo</th>
                </tr>
              </thead>
              <tbody>
                <?php
                foreach ( noriks_comfortjeans_lengths() as $i => $r ) :
                  $bg = ( $i % 2 ) ? '#ebf2f9' : '#fff'; ?>
                  <tr style="background:<?php echo $bg; ?>;border-bottom:1px solid #eee;">
                    <td style="padding:9px 8px;font-weight:700;white-space:nowrap;"><?php echo esc_html( $r[0] ); ?></td>
                    <td style="padding:9px 8px;white-space:nowrap;"><?php echo esc_html( $r[1] ); ?></td>
                    <td style="padding:9px 8px;white-space:nowrap;"><?php echo esc_html( $r[2] ); ?></td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
            </div>
            <p style="margin:14px 0 0;line-height:1.6;">Ako uglavnom nosite potpetice ili čizme, uzmite jednu duljinu više. Ako vam veličina ne odgovara, imate 30 dana za povrat ili zamjenu.</p>
          </div>

        <?php elseif( noriks_is_type( 'hoodiedress', $current_product_id ) ): ?>

          <div class="noriks-size">
            <p style="margin:0 0 14px;line-height:1.6;"><strong>Uzmite veličinu hudice koju inače nosite.</strong> Veličine od <strong>S do 3XL</strong>, prozračan oversized kroj s produženom duljinom.</p>
            <div style="overflow-x:auto;-webkit-overflow-scrolling:touch;">
            <table style="width:100%;border-collapse:collapse;font-size:14px;">
              <thead>
                <tr style="background:#a9683f;color:#fff;">
                  <th style="padding:9px 8px;text-align:left;">Veličina</th>
                  <th style="padding:9px 8px;text-align:left;">EU</th>
                  <th style="padding:9px 8px;text-align:left;">Opseg struka</th>
                  <th style="padding:9px 8px;text-align:left;">Opseg prsa</th>
                </tr>
              </thead>
              <tbody>
                <?php
                foreach ( noriks_hoodiedress_sizes() as $i => $r ) :
                  $bg = ( $i % 2 ) ? '#f7ece2' : '#fff'; ?>
                  <tr style="background:<?php echo $bg; ?>;border-bottom:1px solid #eee;">
                    <td style="padding:9px 8px;font-weight:700;white-space:nowrap;"><?php echo esc_html( $r[0] ); ?></td>
                    <td style="padding:9px 8px;white-space:nowrap;"><?php echo esc_html( $r[1] ); ?></td>
                    <td style="padding:9px 8px;white-space:nowrap;"><?php echo esc_html( $r[2] ); ?></td>
                    <td style="padding:9px 8px;white-space:nowrap;"><?php echo esc_html( $r[3] ); ?></td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
            </div>
            <p style="margin:14px 0 0;line-height:1.6;">Opseg prsa je mjera haljine (oversized kroj), opseg struka odgovara mjeri tijela. Ako vam veličina ne odgovara, imate 30 dana za povrat ili zamjenu.</p>
          </div>

        <?php elseif( noriks_is_type( 'hikingshoes', $current_product_id ) ): ?>

          <div class="noriks-size">
            <p style="margin:0 0 14px;line-height:1.6;">Veličine od <strong>EU 36 do EU 46</strong>. Veličinu odaberite prema <strong>duljini stopala od pete do vrha prstiju</strong> — raspon već uključuje potreban prostor u cipeli. <strong>Ako ste između dvije veličine, odaberite manju.</strong></p>
            <div style="overflow-x:auto;-webkit-overflow-scrolling:touch;">
            <table style="width:100%;border-collapse:collapse;font-size:14px;">
              <thead>
                <tr style="background:#3f6b45;color:#fff;">
                  <th style="padding:9px 8px;text-align:left;">EU</th>
                  <th style="padding:9px 8px;text-align:left;">Stopalo</th>
                  <th style="padding:9px 8px;text-align:left;">UK</th>
                  <th style="padding:9px 8px;text-align:left;">US Ž</th>
                  <th style="padding:9px 8px;text-align:left;">US M</th>
                </tr>
              </thead>
              <tbody>
                <?php
                foreach ( noriks_hikingshoes_sizes() as $i => $r ) :
                  $bg = ( $i % 2 ) ? '#edf3ea' : '#fff'; ?>
                  <tr style="background:<?php echo $bg; ?>;border-bottom:1px solid #eee;">
                    <td style="padding:9px 8px;font-weight:700;white-space:nowrap;"><?php echo esc_html( $r[0] ); ?></td>
                    <td style="padding:9px 8px;white-space:nowrap;"><?php echo esc_html( $r[1] ); ?></td>
                    <td style="padding:9px 8px;white-space:nowrap;"><?php echo esc_html( $r[2] ); ?></td>
                    <td style="padding:9px 8px;white-space:nowrap;"><?php echo esc_html( $r[3] ); ?></td>
                    <td style="padding:9px 8px;white-space:nowrap;"><?php echo esc_html( $r[4] ); ?></td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
            </div>
            <p style="margin:14px 0 0;line-height:1.6;">Cipele odgovaraju stopalima srednjeg volumena; za vrlo široka stopala odaberite veću veličinu. Za planinarenje preporučujemo deblje čarape. Ako vam veličina ne odgovara, imate 30 dana za povrat ili zamjenu.</p>
          </div>

        <?php elseif( noriks_is_type( 'orthomules', $current_product_id ) ): ?>

          <div class="noriks-size">
            <p style="margin:0 0 14px;line-height:1.6;">NORIKS OrthoMules odgovaraju standardnim ženskim veličinama — naručite svoj uobičajeni broj. Veličine od <strong>EU 35 do EU 43</strong>.</p>
            <div style="overflow-x:auto;-webkit-overflow-scrolling:touch;">
            <table style="width:100%;border-collapse:collapse;font-size:14px;">
              <thead>
                <tr style="background:#a9683f;color:#fff;">
                  <th style="padding:9px 8px;text-align:left;">EU</th>
                  <th style="padding:9px 8px;text-align:left;">US</th>
                  <th style="padding:9px 8px;text-align:left;">UK</th>
                </tr>
              </thead>
              <tbody>
                <?php
                foreach ( noriks_orthomules_sizes() as $i => $r ) :
                  $bg = ( $i % 2 ) ? '#f7f2ec' : '#fff'; ?>
                  <tr style="background:<?php echo $bg; ?>;border-bottom:1px solid #eee;">
                    <td style="padding:9px 8px;font-weight:700;white-space:nowrap;"><?php echo esc_html( $r[0] ); ?></td>
                    <td style="padding:9px 8px;white-space:nowrap;"><?php echo esc_html( $r[1] ); ?></td>
                    <td style="padding:9px 8px;white-space:nowrap;"><?php echo esc_html( $r[2] ); ?></td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
            </div>
            <p style="margin:14px 0 0;line-height:1.6;">Ako vam veličina ne odgovara, imate 30 dana za povrat ili zamjenu.</p>
          </div>

        <?php elseif( noriks_is_type( 'travelpillow', $current_product_id ) ): ?>

          <div class="noriks-size">
            <p style="margin:0 0 14px;line-height:1.6;">NORIKS TravelPillow dolazi u <strong>jednoj veličini</strong> — izrađen je tako da odgovara različitim oblicima i veličinama i podupire vaš vrat za bolji san na putovanju. Podesivim čičak-remenom jastuk zategnete ili olabavite po želji.</p>
            <table style="width:100%;border-collapse:collapse;font-size:14px;">
              <tbody>
                <tr style="background:#a9683f;color:#fff;"><th style="padding:9px 8px;text-align:left;">Veličina</th><th style="padding:9px 8px;text-align:left;">Preporuka</th></tr>
                <tr style="background:#fff;border-bottom:1px solid #eee;"><td style="padding:9px 8px;font-weight:700;">Jedna veličina</td><td style="padding:9px 8px;">od 14 godina (prosječna visina od oko 160 cm)</td></tr>
                <tr style="background:#f7f2ec;border-bottom:1px solid #eee;"><td style="padding:9px 8px;font-weight:700;">Pristajanje</td><td style="padding:9px 8px;">čvršće za ravniji vrat ili malo labavije za više slobode</td></tr>
              </tbody>
            </table>
            <p style="margin:14px 0 0;line-height:1.6;">Ako ne možete pronaći pravi položaj, okrenite jastuk naopako i pokušajte ponovno. Ako vam ne odgovara, imate 30 dana za povrat ili zamjenu.</p>
          </div>

        <?php elseif( noriks_is_type( 'sleepearplugs', $current_product_id ) ): ?>

          <div class="noriks-size">
            <p style="margin:0 0 14px;line-height:1.6;">NORIKS SleepEarplugs dolaze u <strong>jednoj veličini</strong> — u paketu su nastavci u četiri veličine, pa pristajanje prilagođavate svom uhu. Veličina se može razlikovati od jednog uha do drugog.</p>
            <table style="width:100%;border-collapse:collapse;font-size:14px;">
              <tbody>
                <tr style="background:#a9683f;color:#fff;"><th style="padding:9px 8px;text-align:left;">Nastavci</th><th style="padding:9px 8px;text-align:left;">Veličine u paketu</th></tr>
                <tr style="background:#fff;border-bottom:1px solid #eee;"><td style="padding:9px 8px;font-weight:700;">Nastavci od pjene i silikona</td><td style="padding:9px 8px;">XS, S, M, L (4 para)</td></tr>
                <tr style="background:#f7f2ec;border-bottom:1px solid #eee;"><td style="padding:9px 8px;font-weight:700;">Dvostruki nastavci</td><td style="padding:9px 8px;">XS, S, M, L (4 para)</td></tr>
              </tbody>
            </table>
            <p style="margin:14px 0 0;line-height:1.6;">Pravilno pristajanje je udobno i primjetno smanjuje okolnu buku. Isprobajte različite veličine i obje vrste nastavaka dok ne pronađete onu koja najbolje brtvi. Ako vam ne odgovaraju, imate 30 dana za povrat ili zamjenu.</p>
          </div>

        <?php elseif( noriks_is_type( 'litterbox', $current_product_id ) ): ?>

          <div class="noriks-size">
            <p style="margin:0 0 14px;line-height:1.6;">NORIKS LitterBox dolazi u <strong>jednoj veličini</strong>, prikladnoj za do 3 mačke. Automatski način namijenjen je mačkama težim od 1,4 kg i starijim od 6 mjeseci.</p>
            <table style="width:100%;border-collapse:collapse;font-size:14px;">
              <tbody>
                <tr style="background:#a9683f;color:#fff;"><th style="padding:9px 8px;text-align:left;">Mjera</th><th style="padding:9px 8px;text-align:left;">Vrijednost</th></tr>
                <tr style="background:#fff;border-bottom:1px solid #eee;"><td style="padding:9px 8px;font-weight:700;">Visina</td><td style="padding:9px 8px;">55,5 cm</td></tr>
                <tr style="background:#f7f2ec;border-bottom:1px solid #eee;"><td style="padding:9px 8px;font-weight:700;">Širina</td><td style="padding:9px 8px;">53,5 cm</td></tr>
                <tr style="background:#fff;border-bottom:1px solid #eee;"><td style="padding:9px 8px;font-weight:700;">Dubina</td><td style="padding:9px 8px;">40 cm</td></tr>
                <tr style="background:#f7f2ec;border-bottom:1px solid #eee;"><td style="padding:9px 8px;font-weight:700;">Visina bočne strane</td><td style="padding:9px 8px;">31,5 cm</td></tr>
                <tr style="background:#fff;border-bottom:1px solid #eee;"><td style="padding:9px 8px;font-weight:700;">Dubina bočne strane</td><td style="padding:9px 8px;">38,5 cm</td></tr>
                <tr style="background:#f7f2ec;border-bottom:1px solid #eee;"><td style="padding:9px 8px;font-weight:700;">Visina ulaza</td><td style="padding:9px 8px;">31,5 cm</td></tr>
              </tbody>
            </table>
            <p style="margin:14px 0 0;line-height:1.6;">Postavite je na ravnu, čvrstu podlogu u zatvorenom prostoru, s dovoljno mjesta za ulaz i vađenje ladice. Ako vam ne odgovara, imate 30 dana za povrat ili zamjenu.</p>
          </div>

        <?php elseif( noriks_is_type( 'harness', $current_product_id ) ): ?>

          <div class="noriks-size">
            <p style="margin:0 0 14px;line-height:1.6;">Izmjerite <strong>opseg prsa</strong> svog psa — najširi dio prsnog koša, odmah iza prednjih nogu. Veličine od <strong>XS do XL</strong>.</p>
            <div style="overflow-x:auto;-webkit-overflow-scrolling:touch;">
            <table style="width:100%;border-collapse:collapse;font-size:14px;">
              <thead>
                <tr style="background:#2b7a6f;color:#fff;">
                  <th style="padding:9px 8px;text-align:left;">Veličina</th>
                  <th style="padding:9px 8px;text-align:left;">Opseg prsa</th>
                  <th style="padding:9px 8px;text-align:left;">Pasmine</th>
                </tr>
              </thead>
              <tbody>
                <?php
                foreach ( noriks_harness_sizes() as $i => $r ) :
                  $bg = ( $i % 2 ) ? '#eef5f3' : '#fff'; ?>
                  <tr style="background:<?php echo $bg; ?>;border-bottom:1px solid #eee;">
                    <td style="padding:9px 8px;font-weight:700;white-space:nowrap;vertical-align:top;"><?php echo esc_html( $r[0] ); ?></td>
                    <td style="padding:9px 8px;white-space:nowrap;vertical-align:top;"><?php echo esc_html( $r[1] ); ?></td>
                    <td style="padding:9px 8px;line-height:1.5;"><?php echo esc_html( $r[2] ); ?></td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
            </div>
            <p style="margin:14px 0 0;line-height:1.6;"><strong>Savjet:</strong> ako je pas na gornjoj granici raspona ili ima vrlo gustu dlaku, preporučujemo veću veličinu. Četiri podesive trake omogućuju precizno pristajanje. Ako vam veličina ne odgovara, imate 30 dana za povrat ili zamjenu.</p>
          </div>

        <?php elseif( noriks_is_type( 'raincoat', $current_product_id ) ): ?>

          <div class="noriks-size">
            <p style="margin:0 0 14px;line-height:1.6;"><strong>Oversized kroj</strong> — namjerno širok, moderne i upečatljive siluete. Jedna veličina odgovara veličinama <strong>EU 36–50</strong> (UK 8–22 / US 4–18).</p>
            <div style="overflow-x:auto;-webkit-overflow-scrolling:touch;">
            <table style="width:100%;border-collapse:collapse;font-size:14px;">
              <thead>
                <tr style="background:#a9683f;color:#fff;">
                  <th style="padding:9px 8px;text-align:left;">Veličina</th>
                  <th style="padding:9px 8px;text-align:left;">EU</th>
                  <th style="padding:9px 8px;text-align:left;">UK</th>
                  <th style="padding:9px 8px;text-align:left;">US</th>
                  <th style="padding:9px 8px;text-align:left;">Duljina</th>
                  <th style="padding:9px 8px;text-align:left;">Opseg grudi</th>
                  <th style="padding:9px 8px;text-align:left;">Duljina rukava</th>
                </tr>
              </thead>
              <tbody>
                <?php
                foreach ( noriks_raincoat_sizes() as $i => $r ) :
                  $bg = ( $i % 2 ) ? '#f7f2ec' : '#fff'; ?>
                  <tr style="background:<?php echo $bg; ?>;border-bottom:1px solid #eee;">
                    <td style="padding:9px 8px;font-weight:700;white-space:nowrap;"><?php echo esc_html( $r[0] ); ?></td>
                    <?php for ( $c = 1; $c <= 6; $c++ ) : ?><td style="padding:9px 8px;white-space:nowrap;"><?php echo esc_html( $r[ $c ] ); ?></td><?php endfor; ?>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
            </div>
            <p style="margin:14px 0 0;line-height:1.6;"><strong>Mjere modela:</strong> visina 175 cm; grudi 81–89 cm, struk 66–69 cm, bokovi 86–96 cm. Jakna je kratka i namjerno široka — ako vam ne odgovara, imate 30 dana za povrat ili zamjenu.</p>
          </div>

        <?php elseif( noriks_is_type( 'doggo', $current_product_id ) ): ?>

          <div class="noriks-size">
            <p style="margin:0 0 14px;line-height:1.6;">Odaberite veličinu prema veličini psa. Veličina <strong>XL</strong> odgovara i za dva manja psa (ima dva unutarnja povodca).</p>
            <div style="overflow-x:auto;">
            <table style="width:100%;border-collapse:collapse;font-size:14px;">
              <thead>
                <tr style="background:#1c3b4b;color:#fff;">
                  <th style="padding:9px 8px;text-align:left;">Veličina</th>
                  <th style="padding:9px 8px;text-align:left;">Mjere (D × Š × V)</th>
                  <th style="padding:9px 8px;text-align:left;">ISOFIX</th>
                  <th style="padding:9px 8px;text-align:left;">Za pse</th>
                </tr>
              </thead>
              <tbody>
                <?php
                foreach ( noriks_doggo_sizes() as $i => $r ) :
                  $bg = ( $i % 2 ) ? '#eef5fa' : '#fff'; ?>
                  <tr style="background:<?php echo $bg; ?>;border-bottom:1px solid #eee;">
                    <td style="padding:9px 8px;font-weight:700;"><?php echo esc_html( $r[0] ); ?></td>
                    <td style="padding:9px 8px;white-space:nowrap;"><?php echo esc_html( $r[1] . ' × ' . $r[2] . ' × ' . $r[3] ); ?> cm</td>
                    <td style="padding:9px 8px;"><?php echo esc_html( $r[4] ); ?></td>
                    <td style="padding:9px 8px;"><?php echo esc_html( $r[5] ); ?></td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
            </div>
          </div>

        <?php elseif( noriks_is_type( 'tuck', $current_product_id ) ): ?>

          <div class="noriks-size">
            <p style="margin:0 0 14px;line-height:1.6;">Pronađite svoju uobičajenu veličinu hlača. Ako ste između dvije veličine ili su vam struk i bokovi u različitim veličinama, <strong>uzmite jednu veličinu veću</strong>.</p>
            <div style="overflow-x:auto;">
            <table style="width:100%;border-collapse:collapse;font-size:14px;">
              <thead>
                <tr style="background:#2E2420;color:#fff;">
                  <th style="padding:9px 8px;text-align:left;">Veličina</th>
                  <th style="padding:9px 8px;text-align:left;">EU</th>
                  <th style="padding:9px 8px;text-align:left;">Struk (cm)</th>
                  <th style="padding:9px 8px;text-align:left;">Bokovi (cm)</th>
                </tr>
              </thead>
              <tbody>
                <?php
                foreach ( noriks_tuck_sizes() as $i => $r ) :
                  $bg = ( $i % 2 ) ? '#f4f0eb' : '#fff'; ?>
                  <tr style="background:<?php echo $bg; ?>;border-bottom:1px solid #eee;">
                    <td style="padding:9px 8px;font-weight:700;"><?php echo esc_html( $r[0] ); ?></td>
                    <td style="padding:9px 8px;"><?php echo esc_html( $r[1] ); ?></td>
                    <td style="padding:9px 8px;"><?php echo esc_html( $r[3] ); ?></td>
                    <td style="padding:9px 8px;"><?php echo esc_html( $r[4] ); ?></td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
            </div>
            <p style="margin:14px 0 0;line-height:1.6;"><strong>Struk:</strong> izmjerite opseg struka. <strong>Bokovi:</strong> izmjerite opseg na najširem dijelu bokova. Ako se ne možete izmjeriti, odaberite slovnu veličinu prema EU veličini hlača.</p>
          </div>


        <?php elseif( noriks_is_type( 'fleecetights', $current_product_id ) ): ?>

          <div class="noriks-size">
            <p style="margin:0 0 14px;line-height:1.6;">Uzmite svoju uobičajenu veličinu i provjerite opseg struka i bokova. Ako ste između dvije veličine, <strong>uzmite manju</strong> za čvršće oblikovanje ili veću za opušteniji osjećaj.</p>
            <div style="overflow-x:auto;">
            <table style="width:100%;border-collapse:collapse;font-size:14px;">
              <thead>
                <tr style="background:#2E2420;color:#fff;">
                  <th style="padding:9px 8px;text-align:left;">Veličina</th>
                  <th style="padding:9px 8px;text-align:left;">Struk (cm)</th>
                  <th style="padding:9px 8px;text-align:left;">Bokovi (cm)</th>
                  <th style="padding:9px 8px;text-align:left;">Duljina noge (cm)</th>
                </tr>
              </thead>
              <tbody>
                <?php
                foreach ( noriks_fleecetights_sizes() as $i => $r ) :
                  $bg = ( $i % 2 ) ? '#f4f0eb' : '#fff'; ?>
                  <tr style="background:<?php echo $bg; ?>;border-bottom:1px solid #eee;">
                    <td style="padding:9px 8px;font-weight:700;"><?php echo esc_html( $r[0] ); ?></td>
                    <td style="padding:9px 8px;"><?php echo esc_html( $r[2] ); ?></td>
                    <td style="padding:9px 8px;"><?php echo esc_html( $r[3] ); ?></td>
                    <td style="padding:9px 8px;"><?php echo esc_html( $r[4] ); ?></td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
            </div>
            <p style="margin:14px 0 0;line-height:1.6;">Hulahopke su <strong>izrazito rastezljive</strong> i odgovaraju unutarnjoj duljini noge do 102 cm.</p>
          </div>


        <?php elseif( noriks_is_type( 'hoodie', $current_product_id ) ): ?>

          <div class="noriks-size">
            <p style="margin:0 0 14px;line-height:1.6;">Veličinu birate prema <strong>svojoj visini</strong>. Savjet: za još više udobnosti <strong>odaberite veću veličinu</strong>. Mjere su u cm i odnose se na proizvod, ne na tijelo.</p>
            <div style="overflow-x:auto;">
            <table style="width:100%;border-collapse:collapse;font-size:14px;">
              <thead>
                <tr style="background:#2E2420;color:#fff;">
                  <th style="padding:9px 8px;text-align:left;">Vaša visina</th>
                  <th style="padding:9px 8px;text-align:left;">A. Duljina</th>
                  <th style="padding:9px 8px;text-align:left;">B. 1/2 prsa</th>
                  <th style="padding:9px 8px;text-align:left;">C. Duljina rukava</th>
                  <th style="padding:9px 8px;text-align:left;">D. Visina rukava</th>
                  <th style="padding:9px 8px;text-align:left;">E. Donji rub</th>
                </tr>
              </thead>
              <tbody>
                <?php
                foreach ( noriks_hoodie_sizes() as $i => $r ) :
                  $bg = ( $i % 2 ) ? '#f4f0eb' : '#fff'; ?>
                  <tr style="background:<?php echo $bg; ?>;border-bottom:1px solid #eee;">
                    <td style="padding:9px 8px;font-weight:700;"><?php echo esc_html( $r[0] ); ?></td>
                    <td style="padding:9px 8px;"><?php echo esc_html( $r[1] ); ?></td>
                    <td style="padding:9px 8px;"><?php echo esc_html( $r[2] ); ?></td>
                    <td style="padding:9px 8px;"><?php echo esc_html( $r[3] ); ?></td>
                    <td style="padding:9px 8px;"><?php echo esc_html( $r[4] ); ?></td>
                    <td style="padding:9px 8px;"><?php echo esc_html( $r[5] ); ?></td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
            </div>
            <p style="margin:14px 0 0;line-height:1.6;"><strong>A.</strong> duljina tijela, <strong>B.</strong> pola širine u prsima, <strong>C.</strong> duljina rukava, <strong>D.</strong> visina rukava, <strong>E.</strong> širina donjeg ruba.</p>
          </div>


        <?php elseif( noriks_is_type( 'utilitypants', $current_product_id ) ): ?>

          <div class="noriks-size">
            <p style="margin:0 0 14px;line-height:1.6;"><strong>Kroj: normalan do uzak.</strong> Ako ste između dvije veličine, <strong>preporučujemo da naručite veću veličinu</strong>. Mjere su u cm (struk UK/US u inčima).</p>
            <div style="overflow-x:auto;">
            <table style="width:100%;border-collapse:collapse;font-size:14px;">
              <thead>
                <tr style="background:#2E2420;color:#fff;">
                  <th style="padding:9px 8px;text-align:left;">Veličina</th>
                  <th style="padding:9px 8px;text-align:left;">UK/US (inča)</th>
                  <th style="padding:9px 8px;text-align:left;">Struk</th>
                  <th style="padding:9px 8px;text-align:left;">Bokovi</th>
                  <th style="padding:9px 8px;text-align:left;">Visina</th>
                  <th style="padding:9px 8px;text-align:left;">Duljina</th>
                  <th style="padding:9px 8px;text-align:left;">Unutarnja duljina nogavice</th>
                </tr>
              </thead>
              <tbody>
                <?php
                foreach ( noriks_utilitypants_sizes() as $i => $r ) :
                  $bg = ( $i % 2 ) ? '#f4f0eb' : '#fff'; ?>
                  <tr style="background:<?php echo $bg; ?>;border-bottom:1px solid #eee;">
                    <td style="padding:9px 8px;font-weight:700;"><?php echo esc_html( $r[0] ); ?></td>
                    <td style="padding:9px 8px;"><?php echo esc_html( $r[1] ); ?></td>
                    <td style="padding:9px 8px;"><?php echo esc_html( $r[2] ); ?></td>
                    <td style="padding:9px 8px;"><?php echo esc_html( $r[3] ); ?></td>
                    <td style="padding:9px 8px;"><?php echo esc_html( $r[4] ); ?></td>
                    <td style="padding:9px 8px;"><?php echo esc_html( $r[5] ); ?></td>
                    <td style="padding:9px 8px;"><?php echo esc_html( $r[6] ); ?></td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
            </div>
            <p style="margin:14px 0 0;line-height:1.6;"><strong>Struk:</strong> opseg na pola puta između vrha zdjelične kosti i dna rebara. <strong>Bokovi:</strong> preko najšireg dijela, oko 4 cm ispod patentnog zatvarača. <strong>Unutarnja duljina nogavice:</strong> od međunožja do gležnja (mjera hlača, ne tijela).</p>
          </div>


        <?php elseif( noriks_is_type( 'smartjacket', $current_product_id ) ): ?>

          <div class="noriks-size">
            <p style="margin:0 0 14px;line-height:1.6;"><strong>Normalan do opušten kroj</strong> — odaberite veličinu koju inače nosite. Ako ste između dvije veličine: od XS do L uzmite <strong>manju</strong>, a od XL <strong>veću</strong> veličinu. Sve mjere su u cm.</p>
            <div style="overflow-x:auto;">
            <table style="width:100%;border-collapse:collapse;font-size:14px;">
              <thead>
                <tr style="background:#2E2420;color:#fff;">
                  <th style="padding:9px 8px;text-align:left;">Veličina</th>
                  <th style="padding:9px 8px;text-align:left;">(A) Opseg prsa</th>
                  <th style="padding:9px 8px;text-align:left;">(B) Opseg trbuha</th>
                  <th style="padding:9px 8px;text-align:left;">(C) Duljina</th>
                  <th style="padding:9px 8px;text-align:left;">(D) Rukav</th>
                  <th style="padding:9px 8px;text-align:left;">Konf. broj (DE)</th>
                </tr>
              </thead>
              <tbody>
                <?php
                foreach ( noriks_smartjacket_sizes() as $i => $r ) :
                  $bg = ( $i % 2 ) ? '#f4f0eb' : '#fff'; ?>
                  <tr style="background:<?php echo $bg; ?>;border-bottom:1px solid #eee;">
                    <td style="padding:9px 8px;font-weight:700;"><?php echo esc_html( $r[0] ); ?></td>
                    <td style="padding:9px 8px;"><?php echo esc_html( $r[1] ); ?></td>
                    <td style="padding:9px 8px;"><?php echo esc_html( $r[2] ); ?></td>
                    <td style="padding:9px 8px;"><?php echo esc_html( $r[3] ); ?></td>
                    <td style="padding:9px 8px;"><?php echo esc_html( $r[4] ); ?></td>
                    <td style="padding:9px 8px;"><?php echo esc_html( $r[5] ); ?></td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
            </div>
            <p style="margin:14px 0 0;line-height:1.6;">Jana je visoka 1,79 m, teži 61 kg i nosi veličinu <strong>S</strong>.</p>
          </div>


        <?php elseif( noriks_is_type( 'sculptbrief', $current_product_id ) ): ?>

          <div class="noriks-size">
            <p style="margin:0 0 14px;line-height:1.6;">Ravnajte se prema <strong>opsegu struka</strong>, a ne prema uobičajenoj veličini odjeće. Izmjerite najuži dio torza, nekoliko centimetara iznad pupka (nakon poroda mjerite iznad najpunijeg dijela trbuha). Ako ste između dvije veličine, <strong>uzmite veću</strong>.</p>
            <div style="overflow-x:auto;">
            <table style="width:100%;border-collapse:collapse;font-size:14px;">
              <thead>
                <tr style="background:#2E2420;color:#fff;">
                  <th style="padding:9px 8px;text-align:left;">Veličina</th>
                  <th style="padding:9px 8px;text-align:left;">US veličina</th>
                  <th style="padding:9px 8px;text-align:left;">Opseg struka (cm)</th>
                </tr>
              </thead>
              <tbody>
                <?php
                foreach ( noriks_sculptbrief_sizes() as $i => $r ) :
                  $bg = ( $i % 2 ) ? '#f4f0eb' : '#fff'; ?>
                  <tr style="background:<?php echo $bg; ?>;border-bottom:1px solid #eee;">
                    <td style="padding:9px 8px;font-weight:700;"><?php echo esc_html( $r[0] ); ?></td>
                    <td style="padding:9px 8px;"><?php echo esc_html( $r[1] ); ?></td>
                    <td style="padding:9px 8px;"><?php echo esc_html( $r[2] ); ?></td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
            </div>
            <p style="margin:14px 0 0;line-height:1.6;">Gaćice namjerno <strong>čvrsto prianjaju</strong>. Između dvije veličine? Uzmite jednu veću za najudobnije pristajanje.</p>
          </div>


        <?php elseif( noriks_is_type( 'supportsocks', $current_product_id ) ): ?>

          <div class="noriks-size">
            <p style="margin:0 0 14px;line-height:1.6;">Veličinu odaberite prema svom uobičajenom <strong>broju cipela</strong>.</p>
            <table style="width:100%;border-collapse:collapse;font-size:14px;">
              <thead>
                <tr style="background:#002e49;color:#fff;">
                  <th style="padding:9px 8px;text-align:left;">Veličina</th>
                  <th style="padding:9px 8px;text-align:left;">Broj cipela</th>
                </tr>
              </thead>
              <tbody>
                <?php
                foreach ( noriks_supportsocks_sizes() as $i => $r ) :
                  $bg = ( $i % 2 ) ? '#f3f6f7' : '#fff'; ?>
                  <tr style="background:<?php echo $bg; ?>;border-bottom:1px solid #eee;">
                    <td style="padding:9px 8px;font-weight:700;"><?php echo esc_html( $r[0] ); ?></td>
                    <td style="padding:9px 8px;"><?php echo esc_html( $r[1] ); ?></td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
            <p style="margin:14px 0 0;line-height:1.6;">Ako ste između dvije veličine, preporučujemo da odaberete manju.</p>
          </div>

        <?php elseif( noriks_is_type( 'floatsuit', $current_product_id ) ): ?>

          <div class="noriks-size">
            <p style="margin:0 0 14px;line-height:1.6;">Veličinu odaberite prema <strong>dobi djeteta</strong>. Mjere su u centimetrima (cm).</p>
            <table style="width:100%;border-collapse:collapse;font-size:14px;">
              <thead>
                <tr style="background:#0a97d5;color:#fff;">
                  <th style="padding:9px 8px;text-align:left;">Dob</th>
                  <th style="padding:9px 8px;text-align:left;">Veličina</th>
                  <th style="padding:9px 8px;text-align:left;">Duljina</th>
                  <th style="padding:9px 8px;text-align:left;">Prsa</th>
                  <th style="padding:9px 8px;text-align:left;">Bokovi</th>
                </tr>
              </thead>
              <tbody>
                <?php
                foreach ( noriks_floatsuit_sizes() as $i => $r ) :
                  $bg = ( $i % 2 ) ? '#eef7fc' : '#fff'; ?>
                  <tr style="background:<?php echo $bg; ?>;border-bottom:1px solid #eee;">
                    <td style="padding:9px 8px;font-weight:700;"><?php echo esc_html( $r[0] ); ?></td>
                    <td style="padding:9px 8px;"><?php echo esc_html( $r[1] ); ?></td>
                    <td style="padding:9px 8px;"><?php echo esc_html( $r[2] ); ?></td>
                    <td style="padding:9px 8px;"><?php echo esc_html( $r[3] ); ?></td>
                    <td style="padding:9px 8px;"><?php echo esc_html( $r[4] ); ?></td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>

        <?php elseif( noriks_is_type( 'bra', $current_product_id ) ): ?>

          <div class="bra-size">
            <img src="<?php echo get_template_directory_uri(); ?>/img/bra/bra-09-tablica-velicina.webp" alt="NORIKS BRA tablica veličina" style="width:100%;height:auto;border-radius:12px;display:block;margin:0 0 14px;">
            <p style="margin:0;line-height:1.6;"><strong>Kako odabrati?</strong> Izmjerite opseg ispod grudi i pronađite ga u tablici zajedno sa svojom košaricom. Ako ste između dvije veličine, odaberite veću.</p>
          </div>

        <?php elseif( noriks_is_type( 'kidsnest', $current_product_id ) ): ?>

          <div class="kn-size">
            <img src="<?php echo get_template_directory_uri(); ?>/img/kidsnest/tablica-velicine-hr.webp" alt="KidsNest veličine po dobi" style="width:100%;height:auto;border-radius:10px;display:block;margin:0 0 12px;" loading="lazy">
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

        <?php elseif( function_exists( 'noriks_size_tabela' ) && ( $noriks_st = noriks_size_tabela( $current_product_id ) ) ): ?>

          <div class="noriks-size">
            <p style="margin:0 0 14px;line-height:1.6;"><?php echo wp_kses_post( $noriks_st['uvod'] ); ?></p>
            <div style="overflow-x:auto;-webkit-overflow-scrolling:touch;">
            <table style="width:100%;border-collapse:collapse;font-size:14px;">
              <thead>
                <tr style="background:#a9683f;color:#fff;">
                  <?php foreach ( $noriks_st['glava'] as $h ) : ?>
                  <th style="padding:9px 8px;text-align:left;"><?php echo esc_html( $h ); ?></th>
                  <?php endforeach; ?>
                </tr>
              </thead>
              <tbody>
                <?php foreach ( $noriks_st['vrstice'] as $i => $r ) :
                  $bg = ( $i % 2 ) ? '#fdf8f5' : '#fff'; ?>
                  <tr style="background:<?php echo $bg; ?>;border-bottom:1px solid #eee;">
                    <?php foreach ( array_slice( array_values( $r ), 0, count( $noriks_st['glava'] ) ) as $j => $c ) : ?>
                    <td style="padding:9px 8px;<?php echo $j ? '' : 'font-weight:700;white-space:nowrap;'; ?>"><?php echo esc_html( $c ); ?></td>
                    <?php endforeach; ?>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
            </div>
            <?php if ( $noriks_st['opomba'] ) : ?><p style="margin:12px 0 0;line-height:1.6;"><?php echo esc_html( $noriks_st['opomba'] ); ?></p><?php endif; ?>
            <p style="margin:14px 0 0;line-height:1.6;">Ako vam veličina ne odgovara, imate 30 dana za povrat ili zamjenu.</p>
          </div>

        <?php elseif( noriks_is_type( 'shapetank', $current_product_id ) ): ?>

          <div class="noriks-size">
            <p style="margin:0 0 14px;line-height:1.6;">Veličinu birajte <strong>prema svojoj tjelesnoj težini</strong>. Ne morate naručiti manju veličinu da biste dobili učinak kompresije.</p>
            <table style="width:100%;border-collapse:collapse;font-size:14px;">
              <thead>
                <tr style="background:#1c1c1c;color:#fff;">
                  <th style="padding:9px 10px;text-align:left;">Veličina</th>
                  <th style="padding:9px 10px;text-align:left;">Tjelesna težina</th>
                </tr>
              </thead>
              <tbody>
                <?php
                foreach ( noriks_shapetank_sizes() as $i => $r ) :
                  $bg = ( $i % 2 ) ? '#f4f3ef' : '#fff'; ?>
                  <tr style="background:<?php echo $bg; ?>;border-bottom:1px solid #eee;">
                    <td style="padding:9px 10px;font-weight:700;"><?php echo esc_html( $r[0] ); ?></td>
                    <td style="padding:9px 10px;"><?php echo esc_html( $r[1] ); ?></td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
            <p style="margin:14px 0 0;line-height:1.6;"><strong>Između dvije veličine?</strong> Veća za više udobnosti cijeli dan, manja za čvršći osjećaj.</p>
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
    <?php if ( ! noriks_is_type( 'cloath', $current_product_id ) && ! noriks_is_type( 'hyd', $current_product_id ) && ! noriks_is_type( 'ortopas', $current_product_id ) && ! noriks_is_type( 'bunion', $current_product_id ) && ! noriks_is_type( 'fisiorest', $current_product_id ) && ! noriks_is_type( 'norikshers', $current_product_id ) && ! noriks_is_type( 'ortopedski-jastuk', $current_product_id ) && ! noriks_is_type( 'kidsnest', $current_product_id ) && ! noriks_is_type( 'kneefix', $current_product_id ) && ! noriks_is_type( 'controlpro', $current_product_id ) && ! noriks_is_type( 'noriks-cards', $current_product_id ) && ! noriks_is_type( 'norikshersbrush', $current_product_id ) && ! noriks_is_type( 'hairmagic', $current_product_id ) && ! noriks_is_type( 'dental', $current_product_id ) && ! noriks_is_type( 'lift', $current_product_id ) && ! noriks_is_type( 'kneeheat', $current_product_id ) && ! noriks_is_type( 'pre', $current_product_id ) && ! noriks_is_type( 'hug', $current_product_id ) && ! noriks_is_type( 'seal', $current_product_id ) && ! noriks_is_type( 'home', $current_product_id ) && ! noriks_is_type( 'red', $current_product_id ) && ! noriks_is_type( 'snug', $current_product_id ) && ! noriks_is_type( 'pal', $current_product_id ) && ! noriks_is_type( 'bowl', $current_product_id ) && ! noriks_is_type( 'gelseat', $current_product_id ) && ! noriks_is_type( 'kneetape', $current_product_id ) && ! noriks_is_type( 'phonestrap', $current_product_id ) && ! noriks_is_type( 'winecooler', $current_product_id ) && ! noriks_is_type( 'bracelet', $current_product_id ) && ! $noriks_opis_iz_wc ) : ?>
    <div class="accordion-item">
      <div class="accordion-header" onclick="toggleAccordion(this)">
        <h3><?php echo get_field("singlepp_acc_h_2","options"); ?></h3>
        <div class="toggle">+</div>
      </div>
      <div class="accordion-content">
             <?php if( noriks_is_type( 'sr', $current_product_id ) ): ?>

                Perite u perilici na programu za osjetljivo rublje, na 30 °C. Sušite na niskoj temperaturi ili na zraku — tako tkanina zadrži elastičnost i ne skuplja se. Glačanje nije potrebno.

         <?php elseif( noriks_is_type( 'titaniumpan', $current_product_id ) ): ?>

                Prije prve upotrebe tavu operite toplom vodom i deterdžentom. Titanijsku površinu lako očistite s malo deterdženta i spužvom; tava se može prati i u perilici posuđa, a kratko ručno pranje dulje čuva sjaj. Sigurna je za metalni pribor. Za prirodnu neljepljivost tavu zagrijte 2–3 minute na srednjoj vatri i dodajte 1 žličicu ulja s visokom točkom dimljenja.

         <?php elseif( noriks_is_type( 'slippers', $current_product_id ) ): ?>

                Papuče perite <strong>u perilici na nježnom programu u hladnoj vodi</strong>, po mogućnosti u mrežastoj vrećici za rublje. Sušite ih <strong>isključivo na zraku</strong> — ne stavljajte ih u sušilicu, kako bi flis ostao mekan, a potplat neoštećen. Ne izbjeljivati, ne glačati i ne čistiti kemijski.

         <?php elseif( noriks_is_type( 'anklesleeve', $current_product_id ) ): ?>

                Kako bi kompresija zadržala svu elastičnost, preporučujemo <strong>ručno pranje u hladnoj vodi</strong>. Možete je prati i u perilici. Za sušenje je položite na ravnu površinu i ostavite da se osuši na zraku kako bi zadržala elastičnost. Ne glačati. Ne izbjeljivati. Ne čistiti kemijski.

         <?php elseif( noriks_is_type( 'corksandals', $current_product_id ) ): ?>

                Uložak od antilopa čistite suhom, mekanom četkicom ili blago vlažnom krpom; mrlje uklonite gumicom za antilop. Remene obrišite vlažnom krpom. Sandale ne perite u perilici i ne namačite ih u vodi. Ako se smoče, ostavite ih da se polako osuše na zraku, daleko od radijatora i izravnog sunca.

         <?php elseif( noriks_is_type( 'seatcover', $current_product_id ) ): ?>

                Perite u perilici na hladnom programu. Sušite na zraku ili u sušilici na niskoj temperaturi. Ne koristite omekšivač. Vodootporna podloga zadržava tekućinu, a gornji sloj od frotira ostaje svjež nakon svakog pranja — izrađena je da izdrži i najveći nered.

         <?php elseif( noriks_is_type( 'harness', $current_product_id ) ): ?>

                Kad se oprsnica zablati, isperite je pod mlazom tople vode, obrišite i ostavite da se osuši na zraku. Pranje u perilici nije potrebno — spremna je za sljedeću šetnju čim i vaš pas bude spreman.

         <?php elseif( noriks_is_type( 'raincoat', $current_product_id ) ): ?>

                Samo ručno pranje do 30 °C, s blagim deterdžentom. Ne prati u perilici, ne čistiti kemijski i ne sušiti u sušilici. Bez izbjeljivača i sredstava za posvjetljivanje; ne glačati iznad 110 °C. Za svakodnevnu svježinu jaknu prozračite i nježno očetkajte mekom krpom.

             <?php elseif( noriks_is_type( 'snore', $current_product_id ) ): ?>

                Isperite udlagu mlakom vodom nakon svake upotrebe i po potrebi je očistite mekom četkicom, bez zubne paste. Ostavite je da se osuši na zraku i čuvajte u priloženoj kutijici. Ne koristite vrelu vodu, perilicu posuđa ni sredstva za izbjeljivanje — visoka temperatura promijenila bi joj oblik.

             <?php elseif( noriks_is_type( 'cloud', $current_product_id ) ): ?>

                Navlaku skinite i perite u stroju na 40 °C, s deterdžentom bez omekšivača i bez izbjeljivača. Ne sušite u sušilici — sušite na zraku. Memorijsku pjenu ne perite u stroju i ne potapajte: po potrebi je obrišite vlažnom krpom i ostavite da se potpuno osuši prije sljedeće upotrebe.

             <?php elseif( noriks_is_type( 'bra', $current_product_id ) ): ?>

                Ručno pranje ili strojno na 30 °C u vrećici za rublje, na programu za osjetljivo rublje. Bez omekšivača i izbjeljivača. Ne sušiti u sušilici i ne peglati — sušite na zraku, položeno. Tako tkanina i kopča zadržavaju elastičnost.

             <?php elseif( noriks_is_type( 'leakboxers', $current_product_id ) ): ?>

                Perite na 30–40 °C, na programu za osjetljivo rublje. Bez omekšivača i izbjeljivača. Sušite na zraku. Zadržavaju upijajuću moć kroz stotine pranja.

             <?php elseif( noriks_is_type( 'slabproof', $current_product_id ) ): ?>

                Strojno pranje na hladnom, zajedno s radnom odjećom. Sušenje u sušilici na niskoj temperaturi. Bez ručnog pranja, sušenja na konopu i posebnog deterdženta.

             <?php elseif( noriks_is_type( 'brassiere', $current_product_id ) ): ?>

                Perite na 30 °C, na programu za osjetljivo rublje, kako bi tkanina zadržala elastičnost.

             <?php elseif( noriks_is_type( 'blanket', $current_product_id ) ): ?>

                Strojno pranje na hladnom, na nježnom programu. Sušite na zraku ili u sušilici na niskoj temperaturi. Kompresija se zadržava i nakon pranja.

             <?php elseif( noriks_is_type( 'doggo', $current_product_id ) ): ?>

                Izvadite jastuke, a unutarnju navlaku operite u perilici na hladnom, na nježnom programu, i osušite na zraku. Vanjsku stranu od veganske kože obrišite vlažnom krpom.

             <?php elseif( noriks_is_type( 'tuck', $current_product_id ) ): ?>

                Perite na hladnom, na nježnom programu, bez omekšivača i izbjeljivača, i sušite na zraku. Tako rastezljivost i protuklizni pojas ostaju kao novi.

             <?php elseif( noriks_is_type( 'fleecetights', $current_product_id ) ): ?>

                Prije pranja izvrnite ih naopako. Perite ručno ili na nježnom programu, u hladnoj ili mlakoj vodi (nikad vrućoj). Sušite na zraku ili u sušilici na najnižoj temperaturi. Bez izbjeljivača i omekšivača — tako ostaju mekane, tople i glatke.

             <?php elseif( noriks_is_type( 'catfountain', $current_product_id ) ): ?>

                Prije čišćenja fontanu isključite iz struje. Rastavite je na glavne dijelove — nema sitnih dijelova ni teško dostupnih kutova. Dijelove od nehrđajućeg čelika operite u sudoperu ili ih stavite u <strong>perilicu posuđa</strong>; čišćenje traje <strong>manje od 5 minuta</strong>. Filtre mijenjajte svaka 2–4 tjedna (češće ako imate više mačaka) kako bi voda ostala čista i svježa.

             <?php elseif( noriks_is_type( 'dishsheets', $current_product_id ) ): ?>

                Jedan listić stavite izravno u pretinac za deterdžent u perilici posuđa i odaberite željeni program. Za manja pranja ili namakanje dovoljna je <strong>polovica listića</strong>. Za pranje na ruke listić otopite u vodi u sudoperu — nastat će lagana pjena — i perite posuđe kao i inače.

             <?php elseif( noriks_is_type( 'dograincoat', $current_product_id ) ): ?>

                Nakon kišne šetnje kabanicu otresite i ostavite da se <strong>osuši na zraku</strong>. Prljavštinu obrišite vlažnom krpom ili isperite mlakom vodom; po potrebi kabanicu operite <strong>ručno u mlakoj vodi</strong> s blagim sredstvom. Ne koristite izbjeljivač ni omekšivač, <strong>ne sušite u sušilici</strong> i ne glačajte — tako će materijal dugo ostati vodootporan i prozračan.

             <?php elseif( noriks_is_type( 'maternityleggings', $current_product_id ) ): ?>

                Perite na <strong>najviše 30 °C</strong>. Ne koristite <strong>omekšivač ni izbjeljivač</strong>. Perite odvojeno po bojama. <strong>Ne sušite u sušilici</strong> — tajice osušite na zraku, tako će dugo zadržati oblik i elastičnost.

             <?php elseif( noriks_is_type( 'vacuumsealer', $current_product_id ) ): ?>

                Aparat <strong>ne uranjajte u vodu</strong> – kućište obrišite mekanom, blago navlaženom krpom i osušite. Prije čišćenja odspojite kabel za punjenje. Vakuumske vrećice smiju se prati u <strong>perilici posuđa</strong> ili ručno toplom vodom; prije ponovne upotrebe neka se potpuno osuše. U vrećicu ne stavljajte tekućinu do ventila – vakuum bi je mogao izvući. Aparat punite priloženim kabelom i čuvajte ga na suhom mjestu.

             <?php elseif( noriks_is_type( 'dualpillow', $current_product_id ) ): ?>

                U perilici perite <strong>samo vanjski sloj</strong> jastuka – tako punjenje dulje ostaje pahuljasto i ne gruda se. Vanjski sloj skinite i perite na <strong>nježnom programu s blagim deterdžentom</strong>, uz dodatno ispiranje. Sušite u sušilici na <strong>niskoj temperaturi</strong> s lopticama za sušenje; bez sušilice ga objesite da se osuši na zraku (traje malo dulje – brže će se osušiti uz radijator ili na prozračnom mjestu). Unutarnju potpornu jezgru ne perite u perilici.

             <?php elseif( noriks_is_type( 'airtravel', $current_product_id ) ): ?>

                Ruksak <strong>ne perite u perilici</strong>. Prljavštinu obrišite vlažnom krpom i blagim sapunom, a zatim ga ostavite da se <strong>osuši na zraku</strong>, otvorenih pretinaca. Prije vakuumiranja provjerite je li ventil čist i dobro zatvoren. Kad ga ne koristite, čuvajte ga na suhom mjestu.

             <?php elseif( noriks_is_type( 'pethairglove', $current_product_id ) ): ?>

                Nakon upotrebe skinite skupljene dlake, a rukavicu po potrebi <strong>isperite pod tekućom vodom</strong> i ostavite da se <strong>osuši na zraku</strong>. Ako želite, možete je oprati i <strong>u perilici rublja</strong> na niskoj temperaturi. Ne sušite je u sušilici i ne glačajte.

             <?php elseif( noriks_is_type( 'seatcushion', $current_product_id ) ): ?>

                Navlaka je <strong>skidljiva i može se prati u perilici</strong> – otvorite patentni zatvarač, izvadite jezgru i navlaku operite na <strong>nježnom programu s blagim deterdžentom</strong>. Sušite je na zraku. Jezgru od memorijske pjene <strong>ne perite u perilici</strong> i ne namačite – po potrebi je obrišite vlažnom krpom i pustite da se potpuno osuši prije nego vratite navlaku.

             <?php elseif( noriks_is_type( 'breadbag', $current_product_id ) ): ?>

                Vrećicu okrenite, <strong>istresite mrvice</strong> i iznutra je obrišite <strong>vlažnom spužvom, hladnom vodom</strong> i s malo blagog sapuna, zatim je ostavite da se <strong>osuši na zraku</strong>. Ne perite je u <strong>perilici rublja ni perilici posuđa</strong> i ne koristite <strong>vruću vodu</strong> – vosak bi se otopio. U početku vrećica lagano miriše na med; to brzo nestane.

             <?php elseif( noriks_is_type( 'travelkit', $current_product_id ) ): ?>

                Vrećicu očistite <strong>mekom, lagano vlažnom krpom</strong> i blagim sredstvom za pranje, zatim je ostavite otvorenu da se <strong>potpuno osuši</strong> prije sljedećeg pakiranja. Ne perite je u perilici i ne sušite u sušilici, a patentni zatvarač držite čistim od pijeska i mrvica kako bi ostao nepropusan. Pumpu <strong>ne uranjajte u vodu</strong> – obrišite je suhom krpom i punite isključivo USB-C kabelom.


             <?php elseif( noriks_is_type( 'kneelight', $current_product_id ) ): ?>

                Prije čišćenja uređaj <strong>isključite i odspojite kabel za punjenje</strong>. Površinu i unutarnju stranu obrišite <strong>mekom, lagano vlažnom krpom</strong> i ostavite da se potpuno osuši. Uređaj <strong>ne uranjajte u vodu</strong> i ne perite ga u perilici. Ne koristite ga na oštećenoj ili nadraženoj koži. Čuvajte ga na suhom i hladnom mjestu, podalje od izravne sunčeve svjetlosti.

             <?php elseif( noriks_is_type( 'upholsterycleaner', $current_product_id ) ): ?>

                Prije čišćenja uređaj <strong>isključite iz struje</strong>. Nakon svake upotrebe <strong>ispraznite spremnik za prljavu vodu</strong> i isperite ga čistom vodom, a nastavke isperite pod tekućom vodom i ostavite da se <strong>osuše na zraku</strong>. Kućište obrišite mekom, lagano vlažnom krpom. Uređaj <strong>ne uranjajte u vodu</strong> i čuvajte ga na suhom mjestu.

             <?php elseif( noriks_is_type( 'neckmassager', $current_product_id ) ): ?>

                Masažer <strong>ne perite u vodi</strong> i ne uranjajte ga. Prije čišćenja ga isključite i odspojite punjač, a zatim površinu obrišite <strong>mekom, lagano vlažnom krpom</strong> i ostavite da se potpuno osuši. Čuvajte ga na suhom mjestu, podalje od izravne sunčeve svjetlosti i izvora topline.

             <?php elseif( noriks_is_type( 'groundingmat', $current_product_id ) ): ?>

                Podlogu čuvajte <strong>podalje od izravne sunčeve svjetlosti</strong>. Po potrebi je očistite <strong>vlažnim maramicama bez alkohola</strong>. Prije čišćenja kabel izvucite iz utičnice.

             <?php elseif( noriks_is_type( 'grillbasket', $current_product_id ) ): ?>

                Košara je <strong>sigurna za perilicu posuđa</strong> – nakon roštiljanja samo je stavite u perilicu, bez ribanja i namakanja. Može i brzo pranje rukom pod <strong>toplom vodom</strong>. Nehrđajući čelik 304 ne hrđa, ne mijenja boju i ne zadržava mirise. Bez pripreme i bez posebnog spremanja – spremna je za sljedeći put čim se osuši.

             <?php elseif( noriks_is_type( 'therapillow', $current_product_id ) ): ?>

                Navlaka se <strong>ne pere</strong>. Tkanina je otporna na ulje i prašinu – nakon upotrebe jastuk jednostavno <strong>obrišite dezinfekcijskom maramicom</strong>. Prije čišćenja jastuk isključite i odspojite kabel za punjenje. Ne uranjajte ga u vodu i ne sušite na radijatoru. Punite samo priloženim <strong>USB-C kabelom</strong>, a jastuk čuvajte na suhom mjestu, po mogućnosti u priloženoj vrećici.

             <?php elseif( noriks_is_type( 'calmingcollar', $current_product_id ) ): ?>

                Ako se ovratnica smoči, skinite je i <strong>obrišite na suho</strong>, zatim je vratite na mačku – djelovanje se ne gubi. Nakon rukovanja ovratnicom <strong>operite ruke</strong> sapunom i vodom. Ovratnica nije igračka: čuvajte je <strong>izvan dohvata djece</strong>, a neotvorena pakiranja na suhom i hladnom mjestu. Svaki dan provjerite pristaje li ovratnica dobro, a nakon otprilike <strong>30 dana</strong> zamijenite je novom.

             <?php elseif( noriks_is_type( 'petdental', $current_product_id ) ): ?>

                Čuvajte na <strong>suhom i hladnom mjestu</strong>, zaštićeno od izravnog sunca, i <strong>izvan dohvata djece</strong>. Nakon upotrebe dobro zatvorite bočicu. Sprej je namijenjen <strong>svakodnevnoj upotrebi</strong> – najbolje rezultate daje kad ga koristite redovito, svaki dan.

             <?php elseif( noriks_is_type( 'showertowel', $current_product_id ) ): ?>

                Ručnik se <strong>može prati u perilici</strong>. Nakon svakog tuširanja <strong>temeljito ga isperite</strong> i objesite da se osuši – suši se za otprilike 15 minuta. Za optimalnu svježinu preporučujemo zamjenu <strong>svakih 6 mjeseci</strong>.

             <?php elseif( noriks_is_type( 'antitheftbag', $current_product_id ) ): ?>

                Torbu od <strong>veganske kože</strong> očistite <strong>mekanom, vlažnom krpom</strong> i ostavite da se <strong>osuši na zraku</strong>. Ne perite je u perilici i ne izlažite je dugo izravnom suncu ili izvoru topline.

             <?php elseif( noriks_is_type( 'ultrasoniccleaner', $current_product_id ) ): ?>

                Prije čišćenja uređaj <strong>isključite i odspojite iz struje</strong>. Kućište <strong>ne uranjajte u vodu</strong> i ne perite ga pod mlazom – obrišite ga <strong>mekom, lagano vlažnom krpom</strong>. Nakon svake upotrebe vodu iz spremnika izlijte, spremnik isperite i ostavite otvoren da se <strong>osuši na zraku</strong>. U spremnik ulijevajte samo <strong>hladnu vodu</strong> do oznake. Pridržavajte se i uputa proizvođača vašeg dentalnog pomagala.

             <?php elseif( noriks_is_type( 'pillorganizer', $current_product_id ) ): ?>

                Torbica je <strong>otporna na prskanje</strong> – vanjski sloj od PU materijala očistite <strong>vlažnom krpom</strong> u nekoliko sekundi i ostavite da se <strong>osuši na zraku</strong>. Ne perite je u perilici. Na naljepnice vrećica pišite samo <strong>trajnim markerom (na uljnoj bazi)</strong> – obična tinta kemijske olovke se ne zadržava.

             <?php elseif( noriks_is_type( 'bottlesling', $current_product_id ) ): ?>

                Vanjski sloj od <strong>vodoodbojnog keper poliestera</strong> očistite <strong>vlažnom krpom</strong> u nekoliko sekundi. Ako se čaša orosi, kondenzacija ostaje u izoliranom dijelu – nakon upotrebe torbicu ostavite otvorenu da se unutrašnjost <strong>osuši na zraku</strong>.

             <?php elseif( noriks_is_type( 'fleeceshawl', $current_product_id ) ): ?>

                Perite u perilici <strong>na hladno</strong>, sušite u sušilici na <strong>niskoj temperaturi</strong> te izbjegavajte <strong>glačanje i omekšivače</strong> – tako će vaš NORIKS FleeceShawl godinama zadržati mekoću i udobnost.

             <?php elseif( noriks_is_type( 'kidspillow', $current_product_id ) ): ?>

                NORIKS KidsPillow <strong>čistite lokalno</strong>: mrlje očistite vlažnom krpom i blagim sapunom, a zatim ostavite da se jastuk <strong>potpuno osuši na zraku</strong> prije nego što ga vratite u krevet. Za svakodnevnu upotrebu stavite jastučnicu (standardna 50 × 70 cm odgovara svim veličinama) i perite je zajedno s posteljinom.

             <?php elseif( noriks_is_type( 'mattresstopper', $current_product_id ) ): ?>

                NORIKS MattressTopper <strong>može se prati u perilici</strong>. Pridržavajte se uputa za njegu na etiketi proizvoda – tako će nadmadrac dugo zadržati mekoću i debljinu od 10 cm.

             <?php elseif( noriks_is_type( 'silkboxers', $current_product_id ) ): ?>

                Za razliku od čiste svile, ova svilena mješavina <strong>može se prati u perilici</strong>. Perite na hladno (<strong>najviše 30 °C</strong>) na nježnom programu, idealno u mrežastoj vrećici za rublje. Sušite ih položene na ravnoj podlozi – <strong>bez sušilice, izbjeljivača, glačanja i omekšivača</strong>.<br><br>Uz pravilnu njegu bokserice zadržavaju svilenkast osjećaj i nakon više od 100 pranja.

             <?php elseif( noriks_is_type( 'modalsweatshirt', $current_product_id ) ): ?>

                Perite u perilici <strong>na hladno</strong>, na nježnom programu sa sličnim bojama (ne perite s grubim ili hrapavim tkaninama kako biste spriječili pilanje ili oštećenja). Sušite u sušilici na <strong>niskoj temperaturi</strong>, glačajte na niskoj temperaturi. <strong>Ne izbjeljujte.</strong><br><br>U uobičajenom pranju i sušenju dukserica se može malo skupiti (1 % ili manje — praktički ništa). Da bi dugo izgledala kao nova, sušite je položenu na ravnoj podlozi ili u sušilici na niskoj temperaturi.

             <?php elseif( noriks_is_type( 'techtee', $current_product_id ) ): ?>

                Preporučujemo <strong>pranje na hladno</strong> i sušenje na ravnoj podlozi ili u sušilici na niskoj temperaturi. Pri sušenju u sušilici majica se može malo skupiti (otprilike <strong>5 %</strong>). Majicu ne treba glačati.

             <?php elseif( noriks_is_type( 'widetoeshoes', $current_product_id ) ): ?>

                Tenisice čistite mekanom, blago vlažnom krpom ili četkicom i malo blagog sapuna; prljavštinu s gumenog potplata isperite mlakom vodom. Ne perite ih u perilici rublja i ne namačite ih. Nisu vodootporne, ali se brzo suše — ostavite ih da se osuše na zraku, daleko od radijatora i izravnog sunca. Uloške po potrebi izvadite i osušite zasebno.

             <?php elseif( noriks_is_type( 'thermoboots', $current_product_id ) ): ?>

                Za najbolje rezultate čizme čistite <strong>blago vlažnom krpom</strong>. Tvrdokorne mrlje nježno očistite mekanom četkicom s malo blagog sapuna i vode, a zatim ih ostavite da se osuše na zraku, daleko od radijatora i izravnog sunca. <strong>Ne perite ih u perilici rublja</strong> — tako vodootporna izrada i podstava od flisa dugo ostaju kao nove.

             <?php elseif( noriks_is_type( 'leatherboots', $current_product_id ) ): ?>

                Nakon nošenja čizme obrišite <strong>blago vlažnom krpom</strong>. Za najbolje rezultate ostavite ih da se <strong>prirodno osuše na zraku</strong> i izbjegavajte izravnu toplinu (radijator, sušilo, izravno sunce). Ne perite ih u perilici rublja i ne namačite ih. Redovito čišćenje čuva njihov izgled i produljuje im vijek trajanja.

             <?php elseif( noriks_is_type( 'wafflelongsleeve', $current_product_id ) ): ?>

                Majicu <strong>perite u hladnoj vodi</strong>, <strong>zajedno sa sličnim bojama</strong>. Sušite je u sušilici na <strong>niskoj temperaturi</strong>. <strong>Ne glačajte</strong> — tkanina je predskupljena i ne gužva se, pa i nakon pranja ostaje iste veličine i uredna. Sastav: 60 % pamuk, 40 % poliester.

             <?php elseif( noriks_is_type( 'sleepset', $current_product_id ) ): ?>

                Pidžamu perite na <strong>nježnom programu na najviše 30 °C</strong>, <strong>okrenutu naopako</strong> i <strong>sa sličnim bojama</strong>. <strong>Ne sušite u sušilici</strong>, ne izbjeljujte i ne čistite kemijski. <strong>Sušite vješanjem</strong>, a po potrebi glačajte na srednjoj temperaturi. Sastav: 92 % pamuk, 8 % elastan.

             <?php elseif( noriks_is_type( 'plushblanket', $current_product_id ) ): ?>

                Deku <strong>perite u perilici na hladno, zasebno</strong>; tamne boje perite odvojeno. <strong>Ne koristite omekšivač</strong> i ne izbjeljujte. <strong>Sušite je na zraku</strong> ili položenu ravno. Ne glačajte i ne čistite kemijski. Tako će ostati jednako mekana pranje za pranjem. Sastav: 95 % poliester, 5 % elastan.

             <?php elseif( noriks_is_type( 'compressionsocks', $current_product_id ) ): ?>

                Čarape perite na <strong>niskoj temperaturi (ispod 40 °C)</strong> na nježnom programu, <strong>okrenute naopako</strong>, s blagim deterdžentom. <strong>Ne koristite izbjeljivač, omekšivač ni sredstva s aktivnim kisikom</strong> — tako bambusova vlakna ostaju mekana i svježa. Sušite ih <strong>položeno na zraku</strong>, ne u sušilici — tako dugo zadržavaju oblik i kompresiju.

             <?php elseif( noriks_is_type( 'cloudclogs', $current_product_id ) ): ?>

                Klompe jednostavno <strong>isperite mlakom vodom</strong>, a tvrdokornu prljavštinu uklonite mekanom četkicom i malo blagog sapuna. Ostavite ih da se <strong>prirodno osuše na zraku</strong>, daleko od radijatora, sušila i izravnog sunca. <strong>Ne perite ih u perilici rublja</strong> i ne sušite u sušilici — tako dugo zadržavaju oblik i mekoću.

             <?php elseif( noriks_is_type( 'snugboot', $current_product_id ) ): ?>

                Čizme čistite <strong>mekanom četkicom ili blago vlažnom krpom</strong>; tvrdokorne mrlje nježno očistite s malo blagog sapuna i vode. Ostavite ih da se <strong>prirodno osuše na zraku</strong>, daleko od radijatora i izravnog sunca. <strong>Ne perite ih u perilici rublja</strong> i ne namačite ih — tako gornji dio i krznena podstava dugo ostaju kao novi.

             <?php elseif( noriks_is_type( 'minimizerbra', $current_product_id ) ): ?>

                Perite <strong>ručno u hladnoj vodi</strong> blagim deterdžentom i objesite da se osuši na zraku. Ne izbjeljujte. Ne glačajte. Ne čistite kemijski. Ne sušite u sušilici i ne cijedite uvijanjem — tako žica, panel i rashlađujuća tkanina dugo zadržavaju oblik, a grudnjak ostaje kao nov.
             <?php elseif( noriks_is_type( 'cashmeresweater', $current_product_id ) ): ?>

                Preporučujemo <strong>profesionalno kemijsko čišćenje</strong>.

             <?php elseif( noriks_is_type( 'nursingbra', $current_product_id ) ): ?>

                Perite <strong>ručno u hladnoj vodi</strong> blagim deterdžentom ili u perilici na programu za osjetljivo rublje u vrećici za rublje, s kopčama zakopčanima. Ne izbjeljujte, ne glačajte, ne čistite kemijski i ne sušite u sušilici — grudnjak osušite na zraku, polegnut, kako bi mekana tkanina bez šavova i jastučići dugo zadržali oblik.
             <?php elseif( noriks_is_type( 'dogbed', $current_product_id ) ): ?>

                Navlaka se <strong>skida i pere u perilici</strong> – perite je na nižoj temperaturi na programu za osjetljivo rublje, s blagim deterdžentom. Prije pranja dlake uklonite četkom ili valjkom za odjeću. Ne izbjeljujte, ne glačajte i ne sušite u sušilici; navlaku osušite na zraku i vratite na krevet tek kad je potpuno suha, kako bi tkanina od umjetne janjeće vune ostala mekana i pahuljasta.

             <?php elseif( noriks_is_type( 'slingbag', $current_product_id ) ): ?>

                Torbicu čistite <strong>blago vlažnom krpom</strong> i malo blagog sapuna, a mrlje nježno istrljajte mekanom četkicom. Ne perite je u perilici rublja, ne izbjeljujte i ne glačajte. Prije čišćenja ispraznite sve džepove, a nakon čišćenja ostavite je otvorenu da se osuši na zraku, daleko od radijatora i izravnog sunca.


             <?php elseif( noriks_is_type( 'bathmat', $current_product_id ) ): ?>

                Za površinsko čišćenje tepih samo obrišite <strong>vlažnom spužvom</strong> (neabrazivnom stranom) ili mekom krpom. Za temeljito čišćenje upotrijebite <strong>blagi sprej za čišćenje ili sapun</strong> i obrišite tepih, zatim ga isperite toplom vodom i objesite da se osuši.

             <?php elseif( noriks_is_type( 'travelbag', $current_product_id ) ): ?>

                Torbu od PU kože čistite <strong>blago vlažnom krpom</strong> i malo blagog sapuna, a zatim je obrišite suhom krpom. Ne perite je u perilici rublja, ne izbjeljujte i ne glačajte. Prije čišćenja ispraznite sve džepove i skinite kotačiće (model Roller), a nakon čišćenja ostavite torbu otvorenu da se osuši na zraku, daleko od radijatora i izravnog sunca. Torbu za odjeću i podstavu po potrebi samo prozračite ili obrišite vlažnom krpom.

             <?php elseif( noriks_is_type( 'comfortjeans', $current_product_id ) ): ?>

                Perite u perilici u <strong>hladnoj vodi do 30 °C</strong>, okrenuto naopako, sa sličnim tkaninama i bojama. Sušite na zraku (na užetu) — <strong>nikada u sušilici</strong> i izbjegavajte toplinu. Ne izbjeljujte, ne glačajte i ne čistite kemijski. Tako traper dulje zadržava rastezljivost, oblik i boju.

             <?php elseif( noriks_is_type( 'hoodiedress', $current_product_id ) ): ?>

                Perite na <strong>30 °C</strong>, okrenuto naopako, sa sličnim bojama. Ne izbjeljujte. Sušite na zraku ili u sušilici na niskoj temperaturi kako bi unutarnji flis ostao mekan i pahuljast. Ne glačajte izravno, ne kemijski čistite i ne koristite omekšivač u velikim količinama — tako tkanina dulje zadržava mekoću i boju.

             <?php elseif( noriks_is_type( 'hikingshoes', $current_product_id ) ): ?>

                Cipele od brušene kože čistite mekanom četkicom kada su suhe, a mrlje uklonite blago vlažnom krpom. Prljavštinu s gumenog potplata isperite mlakom vodom. Ne perite ih u perilici rublja i ne namačite ih. Ako se smoče, napunite ih papirom i ostavite da se osuše na zraku, daleko od radijatora i izravnog sunca. Za dulju zaštitu od vode i prljavštine povremeno ih zaštitite sprejem za impregnaciju brušene kože.

             <?php elseif( noriks_is_type( 'orthomules', $current_product_id ) ): ?>

                Natikače čistite mekanom, blago vlažnom krpom, a prašinu iz pletenog dijela uklonite mekanom četkicom. Ne perite ih u perilici i ne namačite u vodi. Ako se smoče, ostavite ih da se polako osuše na zraku, daleko od radijatora i izravnog sunca. Metalik završnu obradu (zlatna i srebrna) ne trljajte grubim sredstvima.

             <?php elseif( noriks_is_type( 'travelpillow', $current_product_id ) ): ?>

                Skinite pamučnu navlaku i <strong>operite je ručno</strong>. NORIKS TravelPillow nije prikladan za pranje u perilici rublja. Navlaku osušite na zraku prije nego što je ponovno navučete na jastuk od memorijske pjene.

             <?php elseif( noriks_is_type( 'sleepearplugs', $current_product_id ) ): ?>

                Čepiće redovito čistite kako bi ostali udobni i higijenski: nastavke skinite i operite mlakom vodom s malo blagog sapuna, isperite i ostavite da se potpuno osuše na zraku prije ponovne upotrebe. Silikonsko tijelo obrišite vlažnom krpom. Ne koristite alkohol, agresivna sredstva ni abrazivne alate. Kad nastavci izgube oblik ili se istroše, zamijenite ih. Čepiće između upotreba držite u kutijici.

             <?php elseif( noriks_is_type( 'litterbox', $current_product_id ) ): ?>

                Prije čišćenja posudu isključite iz struje. Spremnik za otpad praznite <strong>svakih 5 dana, a najkasnije nakon 7 dana</strong> (u kućanstvima s više mačaka češće), a perite ga otprilike svakih 15 dana. Jednom mjesečno potpuno zamijenite pijesak i operite komoru: komora za pijesak i podloga mogu se isprati vodom i očistiti mekanom četkom; prije sastavljanja neka se potpuno osuše. Vanjski dio i infracrvene senzore obrišite mekom, vlažnom krpom. Osnovu s elektronikom, adapter i priključke nikad ne ispirite vodom i ne koristite agresivna sredstva.

             <?php elseif( noriks_is_type( 'hoodie', $current_product_id ) ): ?>

                Perite i sušite <strong>samo na programu za osjetljivo rublje</strong>: pranje u hladnoj vodi i sušenje na niskoj temperaturi. Perite ga zasebno, bez druge odjeće. Ako je nakon sušenja još vlažan, ostavite ga da se osuši na zraku — tako sprječavate skupljanje, paranje i sljepljivanje krzna.

             <?php elseif( noriks_is_type( 'utilitypants', $current_product_id ) ): ?>

                Prije pranja hlače izvrnite naopako, ispraznite džepove i zatvorite patentne zatvarače. Perite na najviše 30 °C na nježnom programu, bez omekšivača i izbjeljivača. Sušite na zraku — tako softshell dulje ostaje vodootporan i rastezljiv.

             <?php elseif( noriks_is_type( 'smartjacket', $current_product_id ) ): ?>

                Prije pranja jaknu izvrnite naopako i zatvorite sve patentne zatvarače. Perite na najviše 30 °C na nježnom programu. Tako reflektirajući i vodootporni sloj traju što dulje.

             <?php elseif( noriks_is_type( 'sculptbrief', $current_product_id ) ): ?>

                Perite strojno na hladnom, na nježnom programu, u mrežici za rublje, ili ručno, i sušite na zraku. Bez sušilice, omekšivača i izbjeljivača — tako elastan ostaje čvrst, a 360° pojas drži kao prvi dan.

             <?php elseif( noriks_is_type( 'bratank', $current_product_id ) ): ?>

                Strojno pranje na hladnom, na nježnom programu. Koristite vrećicu za pranje rublja kako biste zaštitili majicu. Sušite isključivo na zraku. Ne izbjeljivati, ne glačati i ne čistiti kemijski.

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
        <h3><?php echo function_exists('noriks_strip_free') ? noriks_strip_free( get_field("singlepp_acc_h_3","options") ) : get_field("singlepp_acc_h_3","options"); ?></h3>
        <div class="toggle">+</div>
      </div>
      <div class="accordion-content">
       <p></p>
       Toliko vjerujemo da će ti se NORIKS svidjeti da imaš <b data-stringify-type="bold">30 dana</b> za povrat ili zamjenu.
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
    
    
        <!-- 6 - navodila za uporabo (PDF) -->
    <?php
    $noriks_manuals = array(
        'seal' => array( 'noriks-chefseal-v2.pdf', 'NORIKS ChefSeal — ručni vakuumski aparat za hranu' ),
        'kidsnest' => array( 'noriks-kidsnest.pdf', 'NORIKS KidsNest — dječji ortopedski jastuk' ),
        'kneefix' => array( 'noriks-kneefix.pdf', 'NORIKS KneeFix — ortopedska steznica za koljeno' ),
        'ortopedski-jastuk' => array( 'noriks-ergosit.pdf', 'NORIKS ErgoSit — ortopedski jastuk za sjedenje' ),
        'fisiorest' => array( 'noriks-fisiorest.pdf', 'NORIKS FisioRest — uređaj za vrat' ),
        'bunion' => array( 'noriks-bunion-fix.pdf', 'NORIKS Bunion Fix — korektor čukljeva' ),
        'ortopas' => array( 'noriks-ortopas.pdf', 'NORIKS ortopedski pojas za leđa' ),
    );
    $noriks_manual = null;
    if ( function_exists('noriks_is_type') ) {
        foreach ( $noriks_manuals as $noriks_t => $noriks_m ) {
            if ( noriks_is_type( $noriks_t, $current_product_id ) ) { $noriks_manual = $noriks_m; break; }
        }
    }
    if ( $noriks_manual && file_exists( get_template_directory() . '/manuals/' . $noriks_manual[0] ) ) : ?>
    <div class="accordion-item noriks-manual-acc">
      <div class="accordion-header" onclick="toggleAccordion(this)">
        <h3>Upute za uporabu</h3>
        <div class="toggle">+</div>
      </div>
      <div class="accordion-content">
        <a class="noriks-manual-link" href="<?php echo esc_url( get_template_directory_uri() . '/manuals/' . $noriks_manual[0] ); ?>" target="_blank" rel="noopener">
          <span class="noriks-manual-ico" aria-hidden="true">
            <svg viewBox="0 0 24 24" width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M14 2H7a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V7l-5-5z" fill="#e53935"/>
              <path d="M14 2v5h5" fill="#b71c1c"/>
              <text x="12" y="17" text-anchor="middle" font-family="Arial, sans-serif" font-size="6.5" font-weight="700" fill="#fff">PDF</text>
            </svg>
          </span>
          <span class="noriks-manual-txt">
            <strong><?php echo esc_html( $noriks_manual[1] ); ?></strong>
            <small>PDF · otvara se u novoj kartici</small>
          </span>
          <span class="noriks-manual-dl" aria-hidden="true">
            <svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/>
            </svg>
          </span>
        </a>
        <style>
        .noriks-manual-acc { border-bottom: none !important; }
        .noriks-manual-acc .accordion-content { padding-bottom: 0 !important; }
        .noriks-manual-link { display:flex; align-items:center; gap:12px; padding:10px 12px; margin:0 0 2px;
          border:1px solid #e5e7eb; border-radius:8px; text-decoration:none; background:#fafafa; color:#12233b;
          cursor:pointer; transition:background .15s ease, border-color .15s ease, transform .15s ease; }
        .noriks-manual-link:hover { background:#eef2f7; border-color:#c2cddd; transform:translateY(-1px); }
        .noriks-manual-link:active { transform:none; }
        .noriks-manual-ico { flex:0 0 auto; display:flex; }
        .noriks-manual-txt { display:flex; flex-direction:column; gap:1px; min-width:0; }
        .noriks-manual-txt strong { font-size:14px; line-height:1.25; font-weight:600; }
        .noriks-manual-txt small { color:#6b7280; font-size:12px; }
        .noriks-manual-dl { margin-left:auto; flex:0 0 auto; display:flex; color:#6b7280; transition:color .15s ease; }
        .noriks-manual-link:hover .noriks-manual-dl { color:#12233b; }
        </style>
      </div>
    </div>
    <?php endif; ?>

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
