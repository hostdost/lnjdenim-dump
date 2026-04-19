<?php
/*
*Template Name: Template Zero Gravity AW22
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
          <img src="<?php echo site_url() ?>/wp-content/uploads/2021/01/SUB004_1180-1.jpg" alt="">
        <?php } ?>
        <?php if( isMobile() ) { ?>
            <img src="<?php echo site_url() ?>/wp-content/uploads/2021/01/SUB004_1180-1.jpg" alt="">
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
          <h1><span>ZERO GRAVITY</span></h1>
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
            <h2><a href="javascript:void(0);">BLENDS & PERFORMANCE</a></h2>
            <div class="text-with-number">
              <p><span class="numbering">01</span>COTTON LINEN</p>
              <p><span class="numbering">02</span>COTTON TENCEL</p>
              <p><span class="numbering">03</span>FEEL FRESH & ULTRAFRESH</p>
              <p><span class="numbering">04</span>KOOLTEX</p>
              <p><span class="numbering">05</span>ANTIVIRAL FINISH <span style="font-size: 12px;">(VIROGUARD BY HEALTHGUARD)</span></p>
            </div>
          </div>
          </div>
        </div>
     </div>
     </div>
     <div class="col span_6">
    <div class="aw-right-section wow fadeInLeft">
        <img src="<?php echo site_url(); ?>/wp-content/uploads/2021/01/590X460_10.jpg">
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
               <img src="http://lnjdenim.in/wp-content/themes/lnj/img/aw21/preserve_3_2.jpg">
          <div class="absolute-aw-wrap">
          <div class="absolute-aw-wrap-tabel">
           <div class="absolute-aw-wrap-tabelcell">
              <h2><a href="javascript:void(0);">STRUCTURES</a></h2>
              <div class="text-with-number">
                <p><span class="numbering">01</span>KNIT LOOK</p>
                <p><span class="numbering">02</span>DOBBY</p>
              </div>
            </div>
            </div>
           </div>
         </div>
       </div>
       <div class="col span_6">
        <div class="aw-right-section wow fadeInRight">
          <img src="<?php echo site_url(); ?>/wp-content/uploads/2021/01/590X460_11.jpg">
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
    line-height: 50px !important;
  }
 
  .absolute-aw-wrap h2, .absolute-aw-wrap h2 a {
	    text-align: left;
	    line-height: 36px;
    font-size: 33px !important;
}
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

