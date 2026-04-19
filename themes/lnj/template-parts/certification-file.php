<div class="certificate-slider-wrap">
	 <div class="logoslider">
		<?php $awards = _get_posts( 'certification' ); ?>
		<?php while( $awards->have_posts() ) { $awards->the_post(); ?>
		<?php $img  = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'full' ); ?>
		<?php $date = get_post_meta( get_the_ID(), 'wpcf-date', true ); ?>
		<div class="item wow fadeIn" data-wow-delay="0.3s">
		   <div class="certify-logo-img">					  
			  <img src="<?php echo $img[0] ?>" alt="<?php echo get_the_title(); ?>">
		   </div>
		   <div class="certify-logo-caption">
			  <h5><?php echo get_the_title(); ?></h5>
			  <p><?php echo date('j F, Y', $date) ?></p>
		   </div>
		</div>				
		<?php } ?>
		<?php wp_reset_query(); ?>
  </div>
</div>
