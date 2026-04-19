<?php
/*
*Template Name: Template Urban Blue
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
			 <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/urban-banner.jpg" alt="">
                <?php } ?>
                <?php if( isMobile() ) { ?>
             				<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/mobile-urban_blues.jpg" alt="">
              <?php } ?>
			  <!--div class="banner-right-text">
				<div class="banner-right-text-tabel">
				   <div class="banner-right-text-tabelcell">
					  <h1 class="wow fadeIn">AUTUMN/WINTER
<br>2017–18 COLLECTION  </h1>
					  
				   </div>
				</div>
			 </div--->
              
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
        <h1><span>URBAN BLUES </span></h1>
        <p>Denims with a difference that are not just for jeans but for fashion in romantic indigo. The<br/> shades are of the deepest hue, the patterns and finishes achieve fashion requirements
 </p>
        </div>
    
    </div>
    
    </div>

</section>



<!-- ****** autumn winter ACTIVE URBANITE block Start ******-->
<section class="aw-section float-section urban-sec">
   <div class="container">
   <div class="row">
	   <div class="col span_6">
	   <div class="aw-left-section  wow fadeIn">
             <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/urban-img-2.jpg">
			<div class="absolute-aw-wrap">
			<div class="absolute-aw-wrap-tabel">
			 <div class="absolute-aw-wrap-tabelcell">
				 <h2><a href="javascript:void(0);">Warm   </a> </h2>
		   <p>Soft, cuddly, brushed and warm on the inside keeping the indigo clean and fresh on the outside.   Brushing breaks down the denim surface making it softer and easier to accept laundry techniques  
   </p>
			
				</div>
				</div>
		   </div>
	   </div>
		   
	   </div>
	   <div class="col span_6">
		<div class="aw-right-section wow fadeInLeft">
		      <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/urban-img.jpg">
		</div>
	   </div>
	   </div>
   </div>
</section>
<!-- ****** autumn winter ACTIVE URBANITE block End ******-->

  
<!-- ****** autumn winter BOHEMIAN RHAPSODIST block Start ******-->
<section class="aw-section urban-sec">
   <div class="container">
   <div class="row">
	   <div class="col span_6">
	   <div class="aw-left-section wow fadeIn">
           <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/urban-img-3.jpg">
			<div class="absolute-aw-wrap">
			<div class="absolute-aw-wrap-tabel">
			 <div class="absolute-aw-wrap-tabelcell">
				 <h2><a href="javascript:void(0);">Tailoring   </a></h2>
		   <p>Light and mid-weight clean faced  diverse denims with just a little stretch enable us to adapt denim to tailored shapes and urban styles. 
   </p>
				</div>
				</div>
		   </div>
	   </div>
	   </div>
	   <div class="col span_6">
		<div class="aw-right-section wow fadeInRight">
			  <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/urban-img-4.jpg">
        
		</div>
	   
	   </div>
	   </div>
   </div>

</section>











<!-- ****** autumn winter BOHEMIAN RHAPSODIST block End ******-->
<?php get_footer(); ?>
