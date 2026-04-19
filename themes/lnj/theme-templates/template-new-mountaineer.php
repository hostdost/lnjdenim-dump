<?php
/*
*Template Name: Template New Mountaineer
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
			 <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/collection-banner.jpg" alt="">
                <?php } ?>
                <?php if( isMobile() ) { ?>
             				<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/mobile-moutainer.jpg" alt="">
              <?php } ?>
		  </div>
	   </div>
	</div>
 </div>
</section>
<!-- ****** Inner Page Banner End ******-->
<!-- ******  About Block Content  Start ******-->
<section class="about-block-section">
 <div class="container">
	<div class="row">
	   <div class="col span_12">
		  <div class="main-head">
			 <h1><span>NEW MOUNTAINEER </span></h1>
		  </div>
	   </div>
	</div>
	<div class="row">
	   <div class="col span_12">
		  <p>
			 Autumn inspires our use of tweed constructions, brushed fabrics and wool. Colours found outdoors<br>
			 are a substantial influence as we experiment with woven structures that protect from the elements. 
		  </p>
	   </div>
	</div>
 </div>
</section>
<!-- ******  About Block Content  End ******-->
<!-- ****** Quilted Look Block Start 
<section class="quiltedlook-block-section">
 <div class="container">
	<div class="row">
	   <div class="col span_4">
		  <div class="banner-left-sec inner-banner-same-height" style="background:url('<?php echo esc_url( get_template_directory_uri() ); ?>/img/left-collection-banner.jpg'); background-size:cover;">
			 <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/left-collection-banner.jpg" alt="">
		  </div>
	   </div>
	   <div class="col span_8">
		  <div class="banner-right-sec inner-banner-same-height" style="background:#33345c url('<?php echo esc_url( get_template_directory_uri() ); ?>/img/right-collection-banner.jpg')">
			 <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/right-collection-banner.jpg" style="opacity:0" alt="">
			 <div class="banner-right-text">
				<div class="banner-right-text-tabel">
				   <div class="banner-right-text-tabelcell">
					  <h1 class="wow fadeIn" data-wow-delay="0.3s"> QUILTED LOOKS  </h1>
					  <h4 class="wow fadeIn" data-wow-delay="0.6s">DF5857 • 8.5oz • J/Q-T055<br>
						 100% Cotton<br>
						 Indigo + Lacquer  
					  </h4>
				   </div>
				</div>
			 </div>
		  </div>
	   </div>
	</div>
 </div>
</section>
Inner Page Banner End ******-->
<!-- ****** Collection Bottom Three Bucket Start ******-->
<section class="collection-bottom-three-buckt">
 <div class="container">
	<div class="row">
	   <div class="col span_12">
		  <div class="col span_4">
			 <div class="collection-bucket-wrap wow fadeInLeft" >
				<div class="collection-bucket-img">
				   <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/collection-buket-img1.jpg" alt="">
				   <div class="buket-first-text">
					 
					  <div class="buket-first-text-hover">
                           <h4>COZY COMFORT </h4>
						 <p>DF5092 • 10.75oz • 3/1 RHT<br>
							59% Cotton / 41% Wool TBL<br>
							Charcoal + Brushing Rev Side
						 </p>
					  </div>
				   </div>
				   <div class="buket-sec-text">
					  
					  <div class="buket-sec-text-hover">
                          <h4>SELVEDGE / RIGID  </h4>
						 <p>X02401 • 14.75oz • 3/1 RHT<br>
							100% Cotton /<br>
							Dk Charcoal Blue + Preshrunk
						 </p>
					  </div>
				   </div>
				</div>
			 </div>
		  </div>
		  <div class="col span_4">
			 <div class="collection-bucket-wrap wow fadeInDown" >
				<div class="collection-bucket-img">
				   <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/collection-buket-img2.jpg" alt="">
                     <div class="buket-third-text">
					  <h4>QUILTED LOOKS </h4>
					  <p>DF5857 • 8.5oz • J/Q-T055<br>
100% Cotton<br>
Indigo + Lacquer </p>
				   </div>
				</div>
			 </div>
		  </div>
		  <div class="col span_4">
			 <div class="collection-bucket-wrap bucket-right wow fadeInRight">
				<div class="collection-bucket-img">
				   <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/collection-buket-img3.jpg" alt="">
				   <div class="banner-right-text">
                       <div class="buket-first-text">
					  <div class="buket-first-text-hover">
                           <h4>SUSTAINABILITY </h4>
						 <p>DF2731 • 12.5oz • 3/1 RHT<br>
							94.4% Cotton (20% PCW) /<br>
							4.5% Poly / 1.1% Elastane<br>
                             Charcoal Blue + Flat Finish<br>
                             26% Stretch
						 </p>
					  </div>
				   </div>
					  <div class="buket-sec-text">
					  
					  <div class="buket-sec-text-hover">
                          <h4>PRONOUNCED TWILL LOOKS </h4>
						 <p>609103 • 110z • Dobby(D-143) <br>
							77.5% Cotton / 20% Poly /<br>
							2.5% Elastane<br>
                            DK Charcoal Blue + Flat Finish<br>
                             17% Stretch
						 </p>
					  </div>
				   </div>
				   </div>
				</div>
			 </div>
		  </div>
	   </div>
	</div>
 </div>
</section>
<!-- ******  Collection Bottom Three Bucket End ******-->
<!-- ****** Collection Fabric Section Start ******-->
<?php if( ! isMobile() ) { ?>
<section class="collection-fabric-section desktop-visible">
 <div class="container">
	<div class="row">
	   <div class="col span_12">
		  <div class="collection-fabric-wrap">
			 <div class="fabric-bg-img">
				<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/fabric-collection.jpg" alt="">
				<div class="aw-collection-text fabric-text-first wow fadeInLeft" data-wow-delay="0.4s">
				   <p>DF5453 • 5oz • Camouflage<br>
					  100% Cotton<br>
					  Dark Indigo + Watermark Finish 
				   </p>
				</div>
				<div class="aw-collection-text fabric-text-sec wow fadeInLeft" data-wow-delay="0.8s">
				   <p>624955 • 8.25oz • J/Q-70<br>
					  98% Cotton / 2% Elastane<br>
					  Dark Indigo + Flat Finish<br>
					  26% Stretch 
				   </p>
				</div>
				<div class="aw-collection-text fabric-text-third wow fadeInLeft" data-wow-delay="1.2s">
				   <p>524970 • 9oz • Camouflage<br>
					  98.5% Cotton / 1.5% Elastane<br>
					  Dark Indigo + Lumina Soft D<br>
					  18% Stretch 
				   </p>
				</div>
				<div class="aw-collection-text fabric-text-fourth wow fadeInLeft" data-wow-delay="1.6s">
                    <p>704927 • 8.75oz • Knit Look (D-207)<br>
					  98% Cotton / 2% Elastane<br>
					  Dark Charcoal Blue + Malabar Finish<br>
					  26% Stretch 
				   </p>
                    
				   
				</div>
				<div class="aw-collection-text fabric-text-fifth wow fadeInRight" data-wow-delay="0.2s">
				   <h5>COATED </h5>
				   <p>DF5257 • 11.75oz • 3/1 RHT<br>
					  98% Cotton / 2% Elastane<br>
					  Charcoal + Black Leather Finish<br>
					  25% Stretch 
				   </p>
				</div>
				<div class="aw-collection-text fabric-text-sixth wow fadeInRight" data-wow-delay="0.6s">
				   <h5>TWEED LOOKS  </h5>
				   <p>DF5956 • 9.75oz • Fancy (D-203) <br> 88% Cotton
					  / 7.5% Poly / 3% Viscose <br>
					  / 1.5% Elastane<br> Dark Indigo + Millwash<br> 23% Stretch  
				   </p>
				</div>
				<div class="aw-collection-text fabric-text-seven wow fadeInRight" data-wow-delay="1s">
				   <p>DF5597 • 9.25oz • Fancy (D-112)<br>
					  98.5% Cotton / 1.5% Elastane<br>
					  Red Cast Deep Indigo + Dux D<br>
					  17% Stretch   
				   </p>
				</div>
				<div class="aw-collection-text fabric-text-eight wow fadeInRight" data-wow-delay="1.4s">
				   
                    <h5>COZY COMFORT </h5>
				   <p>DF6230 • 11.25oz • Knit Look<br>
					  77% Cotton / 21% Poly / 2% Elastane<br>
					  Dark Charcoal Blue + Brushing Rev Side<br>
					  23% Stretch 
				   </p>
                    
                    
                    
                    
				</div>
			 </div>
		  </div>
	   </div>
	</div>
 </div>
</section>
<!-- ****** Collection Fabric Section End ******-->
<?php } ?>

<!-- ****** Mobile Collection Fabric Section Start ******-->
<?php if( isMobile() ) { ?>
<section class="mobilecollection-fabric-section mobile-visible">
 <div class="container">
	<div class="row">
	   <div class="col span_12">
		  <div class="collection-fabric-wrap">
			 <div class="fabric-bg-img">
				<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/fabric-collection.jpg" alt="">
				<div class="mobile-fabric-text mobile-fabric-text-first">
				<div class="info-btn-icon">
					   </div>
				   <div class="mobile-fabric-textactive ">
				   <p>DF5453 • 5oz • Camouflage<br>
					  100% Cotton<br>
					  Dark Indigo + Watermark Finish 
				   </p>
					</div>
					
				</div>
				<div class="mobile-fabric-text mobile-fabric-text-sec" >
				 <div class="info-btn-icon">
					   </div>
					<div class="mobile-fabric-textactive ">
				   <p>624955 • 8.25oz • J/Q-70<br>
					  98% Cotton / 2% Elastane<br>
					  Dark Indigo + Flat Finish<br>
					  26% Stretch 
				   </p>
					</div>
				</div>
				<div class="mobile-fabric-text mobile-fabric-text-third">
					  <div class="info-btn-icon">
					   </div>
					 <div class="mobile-fabric-textactive ">
				   <p>524970 • 9oz • Camouflage<br>
					  98.5% Cotton / 1.5% Elastane<br>
					  Dark Indigo + Lumina Soft D<br>
					  18% Stretch 
				   </p>
					</div>
				</div>
				<div class="mobile-fabric-text mobile-fabric-text-fourth">
					<div class="info-btn-icon">
					   </div>
					 <div class="mobile-fabric-textactive ">
				   <h5>COZY COMFORT </h5>
				   <p>DF6230 • 11.25oz • Knit Look<br>
					  77% Cotton / 21% Poly / 2% Elastane<br>
					  Dark Charcoal Blue + Brushing Rev Side<br>
					  23% Stretch 
				   </p>
					</div>
				</div>
				<div class="mobile-fabric-text mobile-fabric-text-fifth">
				 <div class="info-btn-icon">
					   </div>
					 <div class="mobile-fabric-textactive ">
				   <h5>COATED </h5>
				   <p>DF5257 • 11.75oz • 3/1 RHT<br>
					  98% Cotton / 2% Elastane<br>
					  Charcoal + Black Leather Finish<br>
					  25% Stretch 
				   </p>
					</div>
				</div>
				<div class="mobile-fabric-text mobile-fabric-text-sixth">
					<div class="info-btn-icon">
					   </div>
					 <div class="mobile-fabric-textactive ">
				   <h5>TWEED LOOKS  </h5>
				   <p>DF5956 • 9.75oz • Fancy (D-203)  88% Cotton<br>
					  / 7.5% Poly / 3% Viscose <br>
					  / 1.5% Elastane Dark Indigo + Millwash 23% Stretch  
				   </p>
					</div>
				</div>
				<div class="mobile-fabric-text mobile-fabric-text-seven">
					 <div class="info-btn-icon">
					   </div>
					 <div class="mobile-fabric-textactive ">
				   <p>DF5597 • 9.25oz • Fancy (D-112)<br>
					  98.5% Cotton / 1.5% Elastane<br>
					  Red Cast Deep Indigo + Dux D<br>
					  17% Stretch   
				   </p>
					</div>
				</div>
				<div class="mobile-fabric-text mobile-fabric-text-eight">
					  
					   <div class="info-btn-icon">
					   </div>
				   
					 <div class="mobile-fabric-textactive ">
				   <p>704927 • 8.75oz • Knit Look (D-207)<br>
					  98% Cotton / 2% Elastane<br>
					  Dark Charcoal Blue + Malabar Finish<br>
					  26% Stretch 
				   </p>
					</div>
				</div>
			 </div>
		  </div>
	   </div>
	</div>
 </div>
</section>
<?php } ?>
<!-- ****** Mobile Collection Fabric Section End ******-->
<?php get_footer(); ?>
