<?php
/*
*Template Name: Template Winter Collection 
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
			 <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/01-ss21-banner.jpg" alt="">
                <?php } ?>
                <?php if( isMobile() ) { ?>
             				<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/mobileautum-winter.jpg" alt="">
              <?php } ?>
			  <div class="banner-right-text">
				<div class="banner-right-text-tabel">
				   <div class="banner-right-text-tabelcell">
					  <h1 class="wow fadeIn">AUTUMN/WINTER
<br>2018 COLLECTION </h1>
					  
				   </div>
				</div>
			 </div>
		  </div>
	   </div>
	</div>
 </div>
</section>
<!-- ****** Inner Page Banner End ******-->

<!-- ****** autumn winter NEW MOUNTAINEER block Start ******-->
<section class="aw-section">
   <div class="container">
   <div class="row">
	   <div class="col span_6">
	   <div class="aw-left-section  wow fadeIn">
           <a href="<?php echo get_the_permalink(147) ?>"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/aw-1.jpg"></a>
		   <div class="absolute-aw-wrap">
			<div class="absolute-aw-wrap-tabel">
			 <div class="absolute-aw-wrap-tabelcell">
		   <h2><a href="<?php echo get_the_permalink(147) ?>">NEW MOUNTAINEER</a></h2>
		   <p>Autumn inspires our use of tweed constructions,
brushed fabrics and wool. Colours found outdoors
are a substantial influence ... </p>
				 <div class="awread-more">
				 <a href="<?php echo get_the_permalink(147) ?>"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/lnjaw-arrow.png"> </a>
				 </div>
			   </div>
			   </div>
		   </div>
	   </div>
	   </div>
	   <div class="col span_6">
		<div class="aw-right-section wow fadeInRight">
			<a href="<?php echo get_the_permalink(147) ?>"> <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/aw-2.jpg">
            </a>
		</div>
	   </div>
	   </div>
   </div>

</section>
<!-- ****** autumn winter NEW MOUNTAINEER block End ******-->

<!-- ****** autumn winter ACTIVE URBANITE block Start ******-->
<section class="aw-section float-section">
   <div class="container">
   <div class="row">
	   <div class="col span_6">
	   <div class="aw-left-section  wow fadeIn">
           <a href="<?php echo get_the_permalink(149) ?>">  <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/aw-4.jpg"></a>
			<div class="absolute-aw-wrap">
			<div class="absolute-aw-wrap-tabel">
			 <div class="absolute-aw-wrap-tabelcell">
				 <h2><a href="<?php echo get_the_permalink(149) ?>">ACTIVE URBANITE</a> </h2>
		   <p>A balance of city life and active exploration calls for innovative blending of textiles that perform. Dark tonalpatterns as well as synthetic... </p>
			<div class="awread-more">
				 <a href="<?php echo get_the_permalink(149) ?>"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/lnjaw-arrow.png"> </a>
				 </div>
				</div>
				</div>
		   </div>
	   </div>
		   
	   </div>
	   <div class="col span_6">
		<div class="aw-right-section wow fadeInLeft">
		     <a href="<?php echo get_the_permalink(149) ?>"> <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/aw-3.jpg">
            </a>
		</div>
	   </div>
	   </div>
   </div>
</section>
<!-- ****** autumn winter ACTIVE URBANITE block End ******-->

  
<!-- ****** autumn winter BOHEMIAN RHAPSODIST block Start ******-->
<section class="aw-section">
   <div class="container">
   <div class="row">
	   <div class="col span_6">
	   <div class="aw-left-section wow fadeIn">
           <a href="<?php echo get_the_permalink(152) ?>"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/aw-5.jpg"></a>
			<div class="absolute-aw-wrap">
			<div class="absolute-aw-wrap-tabel">
			 <div class="absolute-aw-wrap-tabelcell">
				 <h2><a href="<?php echo get_the_permalink(152) ?>">BOHEMIAN RHAPSODIST </a></h2>
		   <p>For styles that truly stand apart, light denim blues and soft pink shades complement romantic
patterns.  </p>
				  <div class="awread-more">
				 <a href="<?php echo get_the_permalink(152) ?>"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/lnjaw-arrow.png"> </a>
				 </div>
		  
				</div>
				</div>
		   </div>
	   </div>
	   </div>
	   <div class="col span_6">
		<div class="aw-right-section wow fadeInRight">
			  <a href="<?php echo get_the_permalink(152) ?>"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/aw-6.jpg">
            </a>
		</div>
	   
	   </div>
	   </div>
   </div>

</section>
<!-- ****** autumn winter BOHEMIAN RHAPSODIST block End ******-->
<?php get_footer(); ?>
