<?php
/*
*Template Name: Template Infotech AW22
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
          <img src="<?php echo site_url() ?>/wp-content/uploads/2021/01/SUB002_1180-1.jpg" alt="">
        <?php } ?>
        <?php if( isMobile() ) { ?>
            <img src="<?php echo site_url() ?>/wp-content/uploads/2021/01/SUB002_1180-1.jpg" alt="">
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
          <h1><span>INFOTECH</span></h1>
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
            <h2><a href="javascript:void(0);">YARN ENGINEERING</a></h2>
            <div class="text-with-number">
              <p><span class="numbering">01</span>KOOLTEX / KOOLTEX ALLCLIMA</p>
              <p><span class="numbering">02</span>S-CAFE</p>
              <p><span class="numbering">03</span>DUAL CORE</p>
              <p><span class="numbering">04</span>PENTA-BLEND</p>
              <p><span class="numbering">05</span>SIRO</p>
              <p><span class="numbering">06</span>AQUA-X</p>
              <p><span class="numbering">07</span>SORONA</p>
              <p><span class="numbering">08</span>BI-STRECH</p>
            </div>
          </div>
          </div>
        </div>
     </div>
     </div>
     <div class="col span_6">
    <div class="aw-right-section wow fadeInLeft">
          <img src="<?php echo site_url(); ?>/wp-content/uploads/2021/01/590X460_04.jpg">
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
         <h2><a href="javascript:void(0);">DYEING & FINISHES</a></h2>
         <div class="text-with-number">
              <p><span class="numbering">01</span>LASER READY FABRICS <span style="font-size: 12px;">(LRF)</span></p>
              <p><span class="numbering">02</span>ION FINISH</p>
              <p class="number-heading-text">FOR SATURATION AND SOFT HAND FEEL</p>
            </div>
        </div>
        </div>
       </div>
     </div>
     </div>
     <div class="col span_6">
    <div class="aw-right-section wow fadeInRight">
        <img src="<?php echo site_url(); ?>/wp-content/uploads/2021/01/590X460_05.jpg">
        
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
         <h2><a href="javascript:void(0);">WELLNESS</a> </h2>

         <h3 class="number-h3-heading">FIBRE</h3>
          <div class="text-with-number">
              <p><span class="numbering">01</span>SMART CELL</p>
              <p><span class="numbering">02</span>AMICOR</p>
              <p><span class="numbering">03</span>ANTIMICROBIAL VISCOSE</p>
              <p><span class="numbering">04</span>FEEL FRESH</p>
          </div>
          <h3 class="number-h3-heading mt-20">FINISHES</h3>
          <div class="text-with-number">
              <p><span class="numbering">01</span>VIRO GUARD</p>
              <p><span class="numbering">02</span>ANTIMICROBIAL FINISH</p>
          </div>

        </div>
        </div>
       </div>
     </div>
       
     </div>
     <div class="col span_6">
    <div class="aw-right-section wow fadeInLeft">
         <img src="<?php echo site_url(); ?>/wp-content/uploads/2021/01/590X460_06.jpg">
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
  .number-heading-text{
    font-size: 12px !important;
  }
  .text-with-number p {
    text-align: left;
    font-size: 20px;
    line-height: 32px !important;
  }
  
  .number-h3-heading{
    margin-bottom: 18px;
    font-size: 24px;
  }
  .mt-20{
    margin-top: 20px;
  }
  .absolute-aw-wrap h2, .absolute-aw-wrap h2 a {
	    text-align: left;
}
  @media only screen and (max-width: 600px) {
  .aw-section .aw-left-section img {
      height: max-content;
  }
  .number-h3-heading {
    margin-bottom: 0px; 

  }
  .absolute-aw-wrap h2, .absolute-aw-wrap h2 a {
    font-size: 25px !important;
  }
  .aw-section .row {
    display: flex;
    flex-direction: column-reverse;
  }
}
</style>
  
<?php get_footer(); ?>


