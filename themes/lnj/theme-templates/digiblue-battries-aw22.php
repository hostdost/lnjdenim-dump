<?php
/*
*Template Name: Template Batteries aw22
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
          <img src="<?php echo site_url() ?>/wp-content/uploads/2021/01/SUB005_1180-1.jpg" alt="">
        <?php } ?>
        <?php if( isMobile() ) { ?>
            <img src="<?php echo site_url() ?>/wp-content/uploads/2021/01/SUB005_1180-1.jpg" alt="">
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
          <h1><span>BATTERIES</span></h1>
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
            <h2><a href="javascript:void(0);">WEAVES</a></h2>
            <div class="text-with-number">
              <p><span class="numbering">01</span>LEFT HAND TWILLS</p>
              <p><span class="numbering">02</span>BROKEN TWILLS</p>
              <p><span class="numbering">03</span>CROSS HATCHES</p>
            </div>
          </div>
          </div>
        </div>
     </div>
     </div>
     <div class="col span_6">
    <div class="aw-right-section wow fadeInLeft">
          <img src="<?php echo site_url(); ?>/wp-content/uploads/2021/01/590X460_12.jpg">
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
         <h2><a href="javascript:void(0);">TINT & SHADES</a></h2>
         <div class="text-with-number">
              <p><span class="numbering">01</span>NEW SUMMERY SHADES</p>
              <p><span class="numbering">02</span>GREEN CAST INDIGOS</p>
              <p><span class="numbering">03</span>JET BLACKS</p>
              <p><span class="numbering">04</span>OVER DYEDS</p>
          </div>
        </div>
        </div>
       </div>
     </div>
     </div>
     <div class="col span_6">
    <div class="aw-right-section wow fadeInRight">
        <img src="<?php echo site_url(); ?>/wp-content/uploads/2021/01/590X460_13.jpg">
        
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
         <h2><a href="javascript:void(0);">CORE LINE</a> </h2>
         <div class="text-with-number">
              <p><span class="numbering">01</span>SELVEDGES</p>
              <p><span class="numbering">02</span>SUPER STRETCHES</p>
              <p><span class="numbering">03</span>BASICS</p>
              <p><span class="numbering">04</span>SIRO</p>
          </div>
        </div>
        </div>
       </div>
     </div>
       
     </div>
     <div class="col span_6">
    <div class="aw-right-section wow fadeInLeft">
         <img src="<?php echo site_url(); ?>/wp-content/uploads/2021/01/590X460_14.jpg">
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

