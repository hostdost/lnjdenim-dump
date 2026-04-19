<?php
/*
*Template Name: Template Active Urbanite
*/ 
?>
<?php get_header(); ?>
<!-- ****** Inner Page Banner Start ******-->
<section class="inner-banner-block-section">
 <div class="container">
	<div class="row">
	   <div class="col span_12">
		  <div class="">
                  <?php if( ! isMobile() ) { ?>
			 <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/active-banner.jpeg" alt="">
                <?php } ?>
                <?php if( isMobile() ) { ?>
             				<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/mobile-active-img.jpg" alt="">
              <?php } ?>
		  </div>
	   </div>
	</div>
 </div>
</section>
<!-- ****** Inner Page Banner End ******-->
<!-- ******  Active Urbanite Block Content  Start ******-->
<section class="about-block-section">
 <div class="container">
	<div class="row">
	   <div class="col span_12">
		  <div class="main-head">
			 <h1><span>ACTIVE URBANITE</span></h1>
		  </div>
	   </div>
	</div>
	<div class="row">
	   <div class="col span_12">
		  <p>
			 A balance of city life and active exploration calls for
			 innovative blending of textiles that perform. Dark tonal<br>
			 patterns as well as synthetic and sustainable fabrics offer
			 unmistakable sophistication. 
		  </p>
	   </div>
	</div>
 </div>
</section>
<!-- ******  Active Urbanite Block Content  End ******-->
<!-- ******  Four side Fabric Block Content  Start ******-->
<?php if( ! isMobile() ) { ?>
<section class="about-block-section desktop-visible">
 <div class="container">
	<div class="row">
	   <div class="col span_12">
		  <div class="four-fabric-wrap">
			 <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/four-fab-img.jpg"> 
			 <div class="farictop-text wow fadeInDown">
				<h4>DARK TONAL PATTERN  </h4>
				<p>DF5929 • 8.75oz • J/Q-T059<br>
				   98% Cotton / 2% Elastane<br>
				   Dark Indigo + Malabar Finish<br>
				   28% Stretch 
				</p>
			 </div>
			 <div class="faricright-text  wow fadeInRight">
				<h4>LUSTRE </h4>
				<p>178215 • 12oz •3/1 RHT<br>
				   61% Cotton / 39% Poly<br>
				   Berry Blue + Preshrunk 
				</p>
			 </div>
			 <div class="faricleft-text  wow fadeInLeft">
				<h4>DARK TONAL PATTERN </h4>
				<p>DF5996 • 11.25oz • J/Q-104<br>
				   98.5% Cotton / 1.5% Elastane<br>
				   Dk Charcoal Blue + Malabar Finish<br>
				   32% Stretch 
				</p>
			 </div>
			 <div class="faricbottom-text  wow fadeInUp">
				<h4>DRAPE </h4>
				<p>609009 • 10oz • Dobby (D-201)<br>
				   90% Cotton / 9% Poly /<br>1% Elastane<br>
				   Dk Charcoal Blue + Flat Finish<br>
				   15% Stretch 
				</p>
			 </div>
		  </div>
	   </div>
	</div>
 </div>
 </div>
</section>
<?php } ?>
<!-- ******  Four side Fabric Block Content End ******-->


<!-- ******  Mobile Four side Fabric Block Content  Start ******-->
<?php if( isMobile() ) { ?>
<section class="mobileactive-block-section mobile-visible">
 <div class="container">
	<div class="row">
	   <div class="col span_12">
		  <div class="four-fabric-wrap">
			 <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/four-fab-img.jpg"> 
			 <div class="mobile-fabric-text mobilefarictop-text">
				 <div class="info-btn-icon">
				  </div>
				   <div class="mobile-fabric-textactive">
				<h4>DARK TONAL PATTERN  </h4>
				<p>DF5929 • 8.75oz • J/Q-T059<br>
				   98% Cotton / 2% Elastane<br>
				   Dark Indigo + Malabar Finish<br>
				   28% Stretch 
				</p>
				</div>
			 </div>
			 <div class="mobile-fabric-text mobilefaricright-text">
				  <div class="info-btn-icon">
					   </div>
				  <div class="mobile-fabric-textactive">
				<h4>LUSTRE </h4>
				<p>178215 • 12oz •3/1 RHT<br>
				   61% Cotton / 39% Poly<br>
				   Berry Blue + Preshrunk 
				</p>
				 </div>
			 </div>
			 <div class="mobile-fabric-text mobilefaricleft-text">
				  <div class="info-btn-icon">
					   </div>
				 <div class="mobile-fabric-textactive">
				 
				<h4>DARK TONAL PATTERN </h4>
				<p>DF5996 • 11.25oz • J/Q-104<br>
				   98.5% Cotton / 1.5% Elastane<br>
				   Dk Charcoal Blue + Malabar Finish<br>
				   32% Stretch 
				</p>
				 </div>
			 </div>
			 <div class="mobile-fabric-text mobilefaricbottom-text">
				  <div class="info-btn-icon">
					   </div>
				  <div class="mobile-fabric-textactive">
				<h4>DRAPE </h4>
				<p>609009 • 10oz • Dobby (D-201)<br>
				   90% Cotton / 9% Poly /<br>1% Elastane<br>
				   Dk Charcoal Blue + Flat Finish<br>
				   15% Stretch 
				</p>
				 </div>
			 </div>
		  </div>
	   </div>
	</div>
 </div>

</section>
<?php } ?>
<!-- ******  MobileFour side Fabric Block Content End ******-->


<!-- ******  Active Three Bucket Block Content  Start ******-->
<section class="active-three-section">
 <div class="container">
	<div class="row">
	   <div class="col span_4">
		  <div class="four-fabric-wrap activeu-img-single wow fadeInLeft">
			 <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/profomance-img1.jpg"> 
		  </div>
	   </div>
	   <div class="col span_4">
		  <div class="four-fabric-wrap  wow fadeIn">
			 <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/profomance-img2.jpg"> 
			 <div class="center-head-perform">
				<h3>PERFORMANCE BLEND </h3>
			 </div>
			 <div class="center-caption-perform">
				<p>DF5647 • 10oz • 3/1 RHT<br>
				   70% Cotton / 14% COOLMAX® <br>
				   14% THERMOLITE® 2% Elastane<br>
				   Saxon Grey + Millwash<br>
				   28% Stretch 
				</p>
			 </div>
		  </div>
	   </div>
	   <div class="col span_4">
		  <div class="four-fabric-wrap activeu-img-single wow fadeInRight">
			 <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/profomance-img3.jpg"> 
		  </div>
	   </div>
	</div>
 </div>
</section>
<!-- ******  Active Urbanite Block Content  End ******-->
<!-- ******  Active Two Bucket Block Content  Start ******-->
<?php if( ! isMobile() ) { ?>
<section class="active-twobucket-section desktop-visible">
 <div class="container">
	<div class="row">
	   <div class="col span_8">
		  <div class="four-fabric-wrap" style="background:url(<?php echo esc_url( get_template_directory_uri() ); ?>/img/fourside-img-left.jpg);background-size: cover;">
			 <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/fourside-img-left.jpg" style="opacity:0;"> 
			 <div class="left-four-first wow fadeInLeft">
				<p>DF6096 • 9.5oz • 3/1 RHT<br>
				   82.5% Cotton / 15% Poly /<br>
				   2.5% Elastane<br>
				   Pirate Blue + Flat Finish<br>
				   35% Stretch 
				</p>
			 </div>
			 <div class="left-four-sec  wow fadeInRight">
				<p>DF5595 • 9.75oz • 4/1 Satin RHT<br>
				   98.5% Cotton / 1.5% Elastane<br>
				   Indigo + Lacquer Soft<br>
				   19% Stretch  
				</p>
			 </div>
			 <div class="left-four-third  wow fadeInLeft">
				<p>504168 • 11oz • 3/1 RHT<br>
				   98% Cotton / 2% Elastane<br>
				   Dk Charcoal Blue + Lacquer<br>
				   21% Stretch  
				</p>
			 </div>
			 <div class="left-four-fourth wow fadeInRight">
				<p>DF4550 • 9.5oz • 3/1 RHT<br>
				   69% Cotton / 29% Recycled Poly<br>
				   2% Elastane /<br> Dark Indigo +
				   Millwash<br> 27% Stretch  
				</p>
			 </div>
		  </div>
	   </div>
	   <div class="col span_4">
		  <div class="four-fabric-wrap activeu-img wow fadeIn" style="background:url(<?php echo esc_url( get_template_directory_uri() ); ?>/img/fourside-img-right.jpg);background-size: cover;">
			 <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/fourside-img-right.jpg" style="opacity:0"> 
		  </div>
	   </div>
	</div>
 </div>
</section>
<?php } ?>
<!-- ******   Active Two Bucket Block Content  End ******-->


<!-- ******  Mobile Two Bucket Block Content  Start ******-->
<?php if( isMobile() ) { ?>
<section class="mobileactive-twobucket-section mobile-visible">
 <div class="container">
	<div class="row">
	   <div class="col span_8">
		  <div class="four-fabric-wrap" style="background:url(<?php echo esc_url( get_template_directory_uri() ); ?>/img/fourside-img-left.jpg);background-size: cover;">
			 <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/fourside-img-left.jpg" style="opacity:0;"> 
		   
			  
			  <div class="mobile-fabric-text left-four-first">
				  <div class="info-btn-icon">
					   </div>
				  <div class="mobile-fabric-textactive ">
				  
				<p>DF6096 • 9.5oz • 3/1 RHT
				   82.5% Cotton / 15% Poly /
				   2.5% Elastane
				   Pirate Blue + Flat Finish
				   35% Stretch 
				</p>
				  </div>
				  
			 </div>
			 <div class="mobile-fabric-text left-four-sec">
				   <div class="info-btn-icon">
					   </div>
				  <div class="mobile-fabric-textactive ">
				<p>DF5595 • 9.75oz • 4/1 Satin RHT<br>
				   98.5% Cotton / 1.5% Elastane<br>
				   Indigo + Lacquer Soft<br>
				   19% Stretch  
				</p>
				 </div>
				 
			 </div>
			 <div class="mobile-fabric-text left-four-third">
				   <div class="info-btn-icon">
					   </div>
				  <div class="mobile-fabric-textactive ">
				<p>504168 • 11oz • 3/1 RHT<br>
				   98% Cotton / 2% Elastane<br>
				   Dk Charcoal Blue + Lacquer<br>
				   21% Stretch  
				</p>
				 </div>
			 </div>
			 <div class="mobile-fabric-text left-four-fourth">
				   <div class="info-btn-icon">
					   </div>
				  <div class="mobile-fabric-textactive">
				<p>DF4550 • 9.5oz • 3/1 RHT<br>
				   69% Cotton / 29% Recycled Poly<br>
				   2% Elastane / Dark Indigo <br>
				   Millwash / 27% Stretch  
				</p>
				 </div>
			 </div>
		  </div>
	   </div>
	   <div class="col span_4">
		  <div class="four-fabric-wrap wow fadeIn" style="background:url(<?php echo esc_url( get_template_directory_uri() ); ?>/img/fourside-img-right.jpg);background-size: cover;">
			 <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/fourside-img-right.jpg" style="opacity:0"> 
		  </div>
	   </div>
	</div>
 </div>
</section>
<?php } ?>
<!-- ******   Mobile Two Bucket Block Content  End ******-->


<!-- ******  Active Two Bucket Block Content  Start ******-->
<?php if( ! isMobile() ) { ?>
<section class="active-twobucket-section desktop-visible">
 <div class="container">
	<div class="row">
	   <div class="col span_4">
		  <div class="four-fabric-wrap activeu-img wow fadeIn" style="background:url(<?php echo esc_url( get_template_directory_uri() ); ?>/img/fourside-img-left1.jpg);background-size: cover;">
			 <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/fourside-img-left1.jpg" style="opacity:0;"> 
		  </div>
	   </div>
	   <div class="col span_8">
		  <div class="four-fabric-wrap tworight-fabric-wrap" style="background:url(<?php echo esc_url( get_template_directory_uri() ); ?>/img/fourside-img-right2.jpg);background-size: cover;">
			 <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/fourside-img-right2.jpg" style="opacity:0;"> 
			 <div class="left-four-first wow fadeInLeft">
				<h4>LUSTRE </h4>
				<p>604926 • 8.75oz • 4/1 Satin RHT<br>
				   97% Cotton / 3% Elastane<br>
				   Dk Charcoal Blue + Flat Finish<br>
				   25% Stretch 
				</p>
			 </div>
			 <div class="left-four-sec  wow fadeInRight">
				<p>209008 • 10.25oz • 3/1 RHT<br>
				   72.5% Cotton / 26% Poly /<br>
				   1.5% Elastane<br>
				   Saxon Grey + Millwash<br>
				   24% Stretch 
				</p>
			 </div>
			 <div class="left-four-third  wow fadeInLeft">
                 <h4>KNIT LOOK</h4>
				<p>DF6033 • 9.75oz
				   • Knit Look (D-215)<br>
				   92% Cotton / 7% Poly / 1% Elastane<br>
				   Dk Charcoal Blue + Flat Finish<br>
				   22% Stretch  
				</p>
			 </div>
			 <div class="left-four-fourth  wow fadeInRight">
				<h4>PERFORMANCE BLEND </h4>
				<p>DF6001 • 11.75oz • 3/1 RHT<br>
				   95.5% Cotton / 3% Viscose/
				   1.5%<br> Elastane<br> Dk Charcoal Blue +
				   Flat Finish<br> 25% Stretch 
				</p>
			 </div>
		  </div>
	   </div>
	</div>
 </div>
</section>
<?php } ?>
<!-- ******   Active Two Bucket Block Content  End ******-->


<!-- ******  Mobile Active Two Bucket Block Content  Start ******-->
<?php if( isMobile() ) { ?>
<section class="mobileactive-twobucket-section mobile-visible">
 <div class="container">
	<div class="row">
	   <div class="col span_4">
		  <div class="four-fabric-wrap wow fadeIn" style="background:url(<?php echo esc_url( get_template_directory_uri() ); ?>/img/fourside-img-left1.jpg);background-size: cover;">
			 <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/fourside-img-left1.jpg" style="opacity:0;"> 
		  </div>
	   </div>
	   <div class="col span_8">
		  <div class="four-fabric-wrap tworight-fabric-wrap" style="background:url(<?php echo esc_url( get_template_directory_uri() ); ?>/img/fourside-img-right2.jpg);background-size: cover;">
			 <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/fourside-img-right2.jpg" style="opacity:0;"> 
		   
			  
			  
			  <div class="mobile-fabric-text left-four-first">
				  <div class="info-btn-icon">
					   </div>
				  <div class="mobile-fabric-textactive"> 
				<h4>LUSTRE </h4>
				<p>604926 • 8.75oz • 4/1 Satin RHT<br>
				   97% Cotton / 3% Elastane<br>
				   Dk Charcoal Blue + Flat Finish<br>
				   25% Stretch 
				</p>
				  </div>
				  
			 </div>
			  
			  
			 <div class="mobile-fabric-text left-four-sec">
				  <div class="info-btn-icon">
					   </div>
				  <div class="mobile-fabric-textactive">
				<p>209008 • 10.25oz • 3/1 RHT<br>
				   72.5% Cotton / 26% Poly /<br>
				   1.5% Elastane<br>
				   Saxon Grey + Millwash<br>
				   24% Stretch 
				</p>
				 </div>
			 </div>
			 <div class="mobile-fabric-text left-four-third">
				  <div class="info-btn-icon">
					   </div>
				  <div class="mobile-fabric-textactive">
				<p>DF6033 • 9.75oz <br>
				   • Knit Look (D-215)<br>
				   92% Cotton / 7% Poly<br>
				   1% Elastane<br>
				   Dk Charcoal Blue + Flat Finish<br>
				   22% Stretch  
				</p>
				 </div>
			 </div>
			  
			  
			 <div class="mobile-fabric-text left-four-fourth">
				  <div class="info-btn-icon">
					   </div>
				  <div class="mobile-fabric-textactive">
				<h4>PERFORMANCE BLEND </h4>
				<p>DF6001 • 11.75oz • 3/1 RHT<br>
				   95.5% Cotton / 3% Viscose<br>
				   1.5% Elastane, Dk Charcoal Blue<br>
				   Flat Finish, 25% Stretch 
				</p>
				 </div>
			 </div>
			  
			  
		  </div>
	   </div>
	</div>
 </div>
</section>
<?php } ?>
<!-- ******   Mobile Two Bucket Block Content  End ******-->
<?php get_footer(); ?>
