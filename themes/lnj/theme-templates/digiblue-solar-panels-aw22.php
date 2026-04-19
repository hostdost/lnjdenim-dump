<?php
/*
*Template Name: Template Solar Panels AW22
 */ 
?>

<?php get_header(); ?>
<!-- ****** Inner Page Banner Start ******-->
<section class="inner-banner-block-section">
 <div class="container">
  <div class="row">
     <div class="col span_12">
      <div class="left-banner-text">
          <?php if( ! isMobile() ) { ?>
            <img src="<?php echo site_url() ?>/wp-content/uploads/2021/01/SUB001_1180-1.jpg" alt="">
          <?php } ?>
          <?php if( isMobile() ) { ?>
              <img src="<?php echo site_url() ?>/wp-content/uploads/2021/01/SUB001_1180-1.jpg" alt="">
          <?php } ?>
      </div>
     </div>
  </div>
 </div>
</section>
<!-- ****** Inner Page Banner End ******-->

<section class="vintage-about-us">
  <div class="container">
    <div class="row">
      <div class="col span_12">
        <h1><span>SOLAR PANELS</span></h1>
      </div>
    </div>
  </div>
</section>




<section class="aw-section float-section vintage-sec">
   <div class="container">
   <div class="row">
     <div class="col span_6">
     <div class="aw-left-section  wow fadeIn">
             <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/aw21/preserve_01_01.jpg">
      <div class="absolute-aw-wrap">
      <div class="absolute-aw-wrap-tabel">
       <div class="absolute-aw-wrap-tabelcell">
          <h2><a href="javascript:void(0);">WE CYCLE</a></h2>
          <div class="text-with-number">
              <p><span class="numbering">01</span>RECYCLE COTTON</p>
              <p><span class="numbering">02</span>RECYCLED POLYESTER <span style="font-size: 12px;">(FIBER GREEN, GREEN GOLD, REPREVE)</span></p>
          </div>
        </div>
        </div>
       </div>
     </div>
       
     </div>
     <div class="col span_6">
    <div class="aw-right-section wow fadeInLeft">
          <img src="<?php echo site_url(); ?>/wp-content/uploads/2021/01/590X460_01.jpg">
    </div>
     </div>
     </div>
   </div>
</section>

<section class="aw-section vintage-sec">
   <div class="container">
   <div class="row">
     <div class="col span_6">
     <div class="aw-left-section wow fadeIn">
        <img src="http://lnjdenim.in/wp-content/themes/lnj/img/aw21/preserve_2_2.jpg">
      <div class="absolute-aw-wrap">
      <div class="absolute-aw-wrap-tabel">
       <div class="absolute-aw-wrap-tabelcell">
         <h2><a href="javascript:void(0);">SUSTAINABLE INGREDIENTS</a></h2>
           <div class="text-with-number">
              <p><span class="numbering">01</span>BAMBOO</p>
              <p><span class="numbering">02</span>HEMP</p>
              <p><span class="numbering">03</span>ECOVERO</p>
              <p><span class="numbering">04</span>LIVA ECO</p>
              <p><span class="numbering">05</span>BIODEGRABLE POLYESTER</p>
              <p><span class="numbering">06</span>RE-FIBRA</p>
              <p><span class="numbering">07</span>GREEN GOLD-KOLLTEX</p>
              <p><span class="numbering">08</span>BIO-INDIGO</p>
            </div>
        </div>
        </div>
       </div>
     </div>
     </div>
     <div class="col span_6">
      <div class="aw-right-section wow fadeInRight">
          <img src="<?php echo site_url(); ?>/wp-content/uploads/2021/01/590X460_02.jpg">
      </div>
     </div>
     </div>
   </div>

</section>

<section class="aw-section float-section vintage-sec">
   <div class="container">
   <div class="row">
     <div class="col span_6">
     <div class="aw-left-section  wow fadeIn">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/aw21/preserve_3_2.jpg">
      <div class="absolute-aw-wrap">
      <div class="absolute-aw-wrap-tabel">
       <div class="absolute-aw-wrap-tabelcell">
         <h2><a href="javascript:void(0);">SUSTAINABLE PROCESS</a> </h2>
         <h3 class="number-h3-heading">DYEING</h3>
         <div class="text-with-number" id="text-with-number">
              <p><span class="numbering">01</span>CADIRA</p>
               <p class="number-heading-text">CADIRA IS A NEW MODULE IN DYSTAR’S RESOURCE EFFICIENCY PROGRAM. THE CADIRA CONCEPTS CONSIDERABLY REDUCE WATER, WASTE AND ENERGY CONSUMPTION. CADIRA WILL HELP BRANDS & RETAILERS AND THEIR PRODUCTION PARTNERS TO SAVE VALUABLE RESOURCES AND TO REDUCE THE CARBON FOOTPRINT OF THEIR TEXTILE GOODS</p>
              <p><span class="numbering">02</span>BREVIOL</p>
              <p class="number-heading-text">THE BREVIOL® DENIM TECHNOLOGY (BDT) IS USED IN THE INDIGO AND SULFUR DYEING PROCESSES, REDUCING THE AMOUNT OF WATER WHICH IS USED AFTER THE DYEING PROCESS TO REMOVE THE UNFIXED DYES WHICH WOULD NORMALLY GO TO THE WASTE WATER TREATMENT FACILITIES</p>
          </div>
          <h3 class="number-h3-heading mt-20">FINISHES</h3>
          <p style="text-align: left;"><span class="numbering">01</span>WATERLESS COATING</p>
        </div>
        </div>
       </div>
     </div>
       
     </div>
     <div class="col span_6">
    <div class="aw-right-section wow fadeInLeft">
         <img src="<?php echo site_url(); ?>/wp-content/uploads/2021/01/590X460_03.jpg">
    </div>
     </div>
     </div>
   </div>
</section>

<style>
  .vintage-sec .absolute-aw-wrap h3 a, .urban-sec .absolute-aw-wrap h3 a {
    font-size: 30px;
    margin-bottom: 35px;
    color: #fff;
  }
  span.numbering {
      margin-right: 10px;
      font-size: 30px;
  }
  span.bracket-text {
    text-transform: uppercase;
    position: relative;
  }
  ol{
    list-style: decimal;
  }

  .mb-55{
    margin-bottom: 55px;
  }
  
  .text-with-number p {
    text-align: left;
    font-size: 20px;
    line-height: 32px !important;
  }
  
  .number-heading-text {
    font-size: 10px !important;
  }
  .number-h3-heading{
    margin-bottom: 18px;
    font-size: 24px;
  }
  .mt-20{
    margin-top: 20px;
  }
  div#text-with-number p.number-heading-text {
    line-height: 14px !important;
}
.absolute-aw-wrap h2, .absolute-aw-wrap h2 a {
	    text-align: left;
	        line-height: 38px;
    font-size: 30px !important;
}
/*.absolute-aw-wrap h2, .absolute-aw-wrap h2 a {
    font-weight: bold;
    font-size: 28px !important;
  }*/
@media only screen and (max-width: 600px) {
  .aw-section .aw-left-section img{
      height: max-content;
  }
  .number-h3-heading {
    margin-bottom: 0px; 

  }
  .absolute-aw-wrap h2, .absolute-aw-wrap h2 a {
    font-size: 18px !important;
  }
  .aw-section .row {
    display: flex;
    flex-direction: column-reverse;
  }
}

</style>



<?php get_footer(); ?>
