<div class="certificate-slider-wrap">
 <div class="clientlogoslider">
	<?php $clients = _get_posts( 'client' ); ?>
	<?php while( $clients->have_posts() ) { $clients->the_post(); ?>
	<?php $img = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'full' ); ?>
	<?php $url = get_post_meta( get_the_ID(), 'wpcf-url', true ); ?>
	<?php if($img[0]){ ?>
	<div class="item">
	   <div class="certify-logo-img">
		  <a href="<?php echo trim($url) != "" ? trim($url) : 'javascript:void(0)' ?>" target="_blank"><img src="<?php echo $img[0] ?>" alt="<?php echo get_the_title(); ?>"></a>
	   </div>
	</div>
	<?php } ?>
	<?php } ?>
	<?php wp_reset_query(); ?>
 </div>
</div>
