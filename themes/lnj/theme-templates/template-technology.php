<?php
/*
*Template Name: Template Technology 
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
		  <div class="banner-left-sec inner-banner-same-height" style="background:url(<?php echo $img[0] ?>); background-size:cover;">
			 <img src="<?php echo $img[0] ?>" alt="<?php echo get_the_title($page->ID); ?>">
		  </div>
	   </div>
	   <div class="col span_4">
		  <div class="banner-right-sec inner-banner-same-height" style="background:#33345c url('<?php echo esc_url( get_template_directory_uri() ); ?>/img/technology-right-banner.jpg');background-size: cover;">
			 <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/technology-right-banner.jpg" style="opacity:0" alt="">
			 <div class="banner-right-text">
				<div class="banner-right-text-tabel">
				   <div class="banner-right-text-tabelcell">
					  
					  <h4 class="wow fadeIn" data-wow-delay="0.3s">EXCELLING IN </h4>
					   <h1 class="wow fadeIn" data-wow-delay="0.6s"> TEXTILE ENGINEERING </h1>
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
<?php $page = get_page(7); ?>
<section class="sustain-block-section technology-para">
 <div class="container">
	<div class="row">
	   <div class="col span_12">
		  <div class="main-head">
			 <h1><span><?php echo $page->post_title; ?></span></h1>
		  </div>
	   </div>
	</div>
	<div class="row">
	   <div class="col span_12">
			<?php echo $page->post_content; ?>
	   </div>
	</div>
 </div>
</section>
<!-- ******  Sustain Block Content  End ******-->

<!-- ******  Technology Section  Start ******-->
<?php $theQuery =_get_posts( 'technology' ); ?>
<section class="tech-list-section">
   <div class="container">
   <div class="row">
   <?php if( $theQuery->have_posts() ) { ?>
   <?php while( $theQuery->have_posts() ) { $theQuery->the_post(); ?>
   <?php $techImg = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'full' ); ?>
   <?php if( $techImg[0] != '' ) { ?>
	   <div class="col span_3 wow fadeIn">
		   <div class="tech-list-box">
			   <img src="<?php echo $techImg[0]; ?>" alt="<?php echo get_the_title(); ?>">
			</div>
			<div class="tech-list-box-caption">
				<p><?php echo get_the_title(); ?></p>
		   </div>
	   </div>
   <?php } //end-if ?>
   <?php } //end-while ?>
   <?php } //end-if ?>
		
		
	</div>
   </div>
</section>
<!-- ******  Technology Section  End ******-->
<?php get_footer(); ?>
