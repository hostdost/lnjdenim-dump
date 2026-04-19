<?php
/*
*Template Name: Template Sustainability 
*/ 
?>
<?php get_header(); ?>
<?php global $post; ?>
<?php $page = get_post($post->ID); ?>
<?php $img  = wp_get_attachment_image_src( get_post_thumbnail_id($page->ID), 'full' ); ?>

<!-- ****** Inner Page Banner Start ******-->
<section class="inner-banner-block-section sustain-banner">
 <div class="container">
	<div class="row">
	   <div class="col span_8">
		  <div class=" inner-banner-same-height" style="background:url('<?php echo esc_url( get_template_directory_uri() ); ?>/img/sustain-page-banner-left.jpg'); background-size:cover;">
			 <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/sustain-page-banner-left.jpg" alt="">
		  </div>
	   </div>
	   <div class="col span_4">
		  <div class="banner-right-sec inner-banner-same-height" style="background:#33345c url('<?php echo esc_url( get_template_directory_uri() ); ?>/img/about-page-banner-right.jpg')">
			 <img src="img/about-page-banner-right.jpg" style="opacity:0" alt="">
			 <div class="banner-right-text">
				<div class="banner-right-text-tabel">
				   <div class="banner-right-text-tabelcell">
					  <h4 class="wow fadeIn" data-wow-delay="0.3s">OUR COMMITMENT TO SUSTAINABLE  </h4>
					  <h1 class="wow fadeIn" data-wow-delay="0.6s"> GREEN ENVIRONMENT </h1>
				   </div>
				</div>
			 </div>
		  </div>
	   </div>
	</div>
 </div>
</section>
<!-- ****** Inner Page Banner End ******-->
<!-- ******  Sustain Block Content  Start ******-->
<section class="sustain-block-section">
 <div class="container">
	<div class="row">
	   <div class="col span_12">
		  <div class="main-head">
			 <h1><span>SUSTAINABILITY</span></h1>
		  </div>
	   </div>
	</div>
	<div class="row">
	   <div class="col span_12">
		  <p><?php echo $page->post_content; ?></p>
	   </div>
	</div>
 </div>
</section>
<!-- ******  Sustain Block Content  End ******-->
<!-- ******  Recycle Block Content  Start ******-->
<section class="lnj-recycle-section">
 <div class="container">
<?php $global = get_post(88); ?>
<?php $imgGlobal  = wp_get_attachment_image_src( get_post_thumbnail_id($global->ID), 'full' ); ?>
	<div class="row">
	   <div class="col span_12">
		  <div class="main-head">
			 <h1><span><?php echo $global->post_title; ?></span></h1>
		  </div>
	   </div>
	</div>
	<div class="row">
	   <div class="col span_3">
		  <div class="recycle-logo wow fadeInLeft" data-wow-delay="0.7s">
			 <img src="<?php echo $imgGlobal[0]; ?>" alt="<?php echo $global->post_title; ?>">
		  </div>
	   </div>
	   <div class="col span_9">
		  <p><?php echo $global->post_content; ?></p>
	   </div>
	</div>
 </div>
</section>
<!-- ******  Recycle Block Content  End ******-->
<!-- ******  weaving into Block Content  Start ******-->
<section class="sustain-three-buket-section">
 <div class="container">
	<div class="row">
	   <div class="col span_12">
		  <div class="main-head">
			 <h1><span>Weaving Into The New Millennium</span></h1>
		  </div>
	   </div>
	</div>
	<div class="row">
	   <div class="col span_4 wow fadeInLeft">
		  <div class="sustain-three-buket sustain-first-box">
			 <div class="sustain-buket-absoltue">
				<div class="sustain-buket-tabel">
				   <div class="sustain-buket-tabelcell">
					  <?php $recycling = get_post(94); ?>
					  <h2><?php echo $recycling->post_title; ?></h2>
					  <p><?php echo $recycling->post_content; ?></p>
				   </div>
				</div>
			 </div>
		  </div>
	   </div>
	   <div class="col span_4 wow fadeInDown">
		  <div class="sustain-three-buket sustain-buket-img " style="background:url(<?php echo esc_url( get_template_directory_uri() ); ?>/img/sustain-buketcenter-img.jpg); background-size:cover;">
			 <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/sustain-buketcenter-img.jpg" alt="">
		  </div>
	   </div>
	   <div class="col span_4 wow fadeInRight">
		  <div class="sustain-three-buket sustain-sec-box ">
			 <div class="sustain-buket-absoltue">
				<div class="sustain-buket-tabel">
				   <div class="sustain-buket-tabelcell">
				   <?php $waterm = get_post(96); ?>
					  <h2><?php echo $waterm->post_title; ?></h2>
					  <p><?php echo $waterm->post_content; ?></p>
				   </div>
				</div>
			 </div>
		  </div>
	   </div>
	</div>
 </div>
</section>
<!-- ******  weaving into Block Content  End ******-->
<!-- ******  Certification  Section Start ******-->
<section class="certification-section">
 <div class="container">
	<div class="row">
	   <div class="main-head">
		  <h1><span>CERTIFICATIONS  </span></h1>
	   </div>
	</div>
	<div class="row">
	   <div class="col span_12">
		  <?php get_template_part( 'template-parts/certification', 'file' ); ?>
	   </div>
	</div>
 </div>
</section>
<!-- ******  Certification Section End ******-->
<?php get_footer(); ?>
