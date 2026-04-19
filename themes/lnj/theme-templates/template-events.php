<?php
/*
*Template Name: Template Events 
*/
?>
<?php get_header(); ?>
<?php global $post; ?>
<?php $page = get_post($post->ID); ?>
<?php $img  = wp_get_attachment_image_src(get_post_thumbnail_id($page->ID), 'full'); ?>

<!-- ****** Inner Page Banner Start ******-->
<section class="inner-banner-block-section">
	<div class="container">
		<div class="row">
			<div class="col span_12">
				<div class="left-banner-text">
					<?php if (! isMobile()) { ?>
						<img src="<?php echo $img[0] ?>" alt="">
					<?php } ?>
					<?php if (isMobile()) { ?>
						<img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/event-mobile-img.jpg" alt="">
					<?php } ?>
					<div class="banner-right-text">
						<div class="banner-right-text-tabel">
							<div class="banner-right-text-tabelcell">
								<h1 class="wow fadeIn">EVENTS </h1>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- ****** Inner Page Banner End ******-->

<section class="sustain-block-section technology-para">
	<div class="container">
		<div class="row">
			<div class="col span_12">
				<div class="main-head withsubhead withsubheadtext ">
					<h1><span>Upcoming Events</span></h1>
					<h5> visit us @ following exhibitions & fairs</h5>
				</div>
			</div>
		</div>

	</div>
</section>

<!-- ****** Events News Block Start ******-->

<style>
	.upcoming-events {
		background-color: #ebebeb;
		padding: 35px 25px;
		margin: 0 7px 15px 7px;

	}

	.upcoming-events h2 {
		font-size: 1.4rem;
		font-family: 'ChunkFive Ex';
	}

	.upcoming-events h4 {
		font-size: 1.2rem;
		font-family: 'GothamLight-Regular';

	}

	.upcoming-events h6 {
		font-size: 1rem;

	}
</style>
<?php
// Query arguments for upcoming events query
$args = array(
	'meta_query' => array(
		array(
			'key' => 'wpcf-end-date',
			'value' => strtotime(date("Y-m-d")), // Uses current server timestamp now
			'compare' => '>=',
			'type' => 'NUMERIC' // I think you will need to use numeric here, instead of datestamp
		)
	),
	'orderby' => 'meta_value_num', // Edit: Changed this so its sorted after numeric value
	'meta_key' => 'wpcf-start-date', // Sort after 'start_date'
	'post_type' => 'events', // Change this value to your own 'post_type_name'
	'posts_per_page' => -1,
	'order' => 'ASC',
);

$events = new WP_Query($args);
?>



<?php //$events = _get_posts( 'events' ); 
?>
<?php $count  = 0; ?>
<?php $flag = 0; ?>
<section class="eventsnew-section" id="event<?php echo $count ?>-link">
	<div class="container">
		<div class="row">


			<?php while ($events->have_posts()) {
				$events->the_post(); ?>
				<?php $flag++; ?>
				<?php $count++; ?>
				<?php $img   = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'full'); ?>
				<?php $sdate = get_post_meta(get_the_ID(), 'wpcf-start-date', true); ?>
				<?php $edate = get_post_meta(get_the_ID(), 'wpcf-end-date', true); ?>
				<?php $logo  = get_post_meta(get_the_ID(), 'wpcf-logo', true); ?>
				<?php $location  = get_post_meta(get_the_ID(), 'wpcf-location', true); ?>
				<?php $stall = get_post_meta(get_the_ID(), 'wpcf-visit-us', true); ?>
				<?php $video  = get_post_meta(get_the_ID(), 'wpcf-video', true); ?>
				<div class="col span_6">
					<div class="upcoming-events" style="">
						<h2><?php echo get_the_title(get_the_ID()); ?></h2>
						<?php if ($sdate != '' && $edate == '') { ?>
							<h4><?php echo date('M', $sdate) ?>, <?php echo date('Y', $sdate) ?></h4>
						<?php } elseif (date('M', $sdate) == date('M', $edate)) { ?>
							<h4><?php echo date('M d', $sdate) ?>-<?php echo date('d', $edate) ?>,
								<?php echo date('Y', $edate) ?></h4>
						<?php } else { ?>
							<h4><?php echo date('M d', $sdate) ?> - <?php echo date('M d', $edate) ?>,
								<?php echo date('Y', $edate) ?></h4>
						<?php } ?>
						<h6><?php echo $location ?></h6>
					</div>
				</div>




			<?php } ?>
			<?php wp_reset_query(); ?>
		</div>
	</div>
</section>






<section class="sustain-block-section technology-para">
	<div class="container">
		<div class="row">
			<div class="col span_12">
				<div class="main-head withsubhead withsubheadtext ">
					<h1><span>Past Events</span></h1>
				</div>
			</div>
		</div>

	</div>
</section>

<!-- ****** Events News Block Start ******-->

<?php
// Query arguments for upcoming events query
$args = array(
	'meta_query' => array(
		array(
			'key' => 'wpcf-end-date',
			'value' => strtotime(date("Y-m-d")), // Uses current server timestamp now
			'compare' => '<=',
			'type' => 'NUMERIC' // I think you will need to use numeric here, instead of datestamp
		)
	),
	'orderby' => 'meta_value_num', // Edit: Changed this so its sorted after numeric value
	'meta_key' => 'wpcf-start-date', // Sort after 'start_date'
	'post_type' => 'events', // Change this value to your own 'post_type_name'
	'posts_per_page' => 4,
	'order' => 'DESC',
);

$events = new WP_Query($args);
?>

<?php //$events = _get_posts( 'events' ); 
?>
<?php $count  = 0; ?>
<?php while ($events->have_posts()) {
	$events->the_post(); ?>
	<?php $count++; ?>
	<?php $img   = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'full'); ?>
	<?php $sdate = get_post_meta(get_the_ID(), 'wpcf-start-date', true); ?>
	<?php $edate = get_post_meta(get_the_ID(), 'wpcf-end-date', true); ?>
	<?php $logo  = get_post_meta(get_the_ID(), 'wpcf-logo', true); ?>
	<?php $location  = get_post_meta(get_the_ID(), 'wpcf-location', true); ?>
	<?php $stall = get_post_meta(get_the_ID(), 'wpcf-visit-us', true); ?>
	<?php $video  = get_post_meta(get_the_ID(), 'wpcf-video', true); ?>
	<?php $img_gallery = get_post_meta(get_the_ID(), 'wpcf-has-image-gallery', true); ?>
	<section class="eventsnew-section" id="event<?php echo $count ?>-link">
		<div class="container">
			<div class="row">
				<div class="col span_6 <?php echo ($count % 2 == 0) ? 'float-right-section' : '' ?>">
					<?php if ($img_gallery) { ?>
						<?php $eventimagesbig = get_post_meta(get_the_ID(), 'wpcf-big-image-for-gallery', false); ?>
						<?php $eventimages = get_post_meta(get_the_ID(), 'wpcf-small-image-for-gallery', false); ?>
						<div class="event_slider right-section">

							<?php for ($i = 0; $i < count($eventimages); $i++) { ?>
								<div class="item">
									<div class="maine-overlay">
										<a class="fancypopup" href="<?php echo $eventimagesbig[$i]; ?>"
											rel="groups_<?php echo $count ?>"><img src="<?php echo $eventimages[$i]; ?>" alt="" />
											<!--div class="image-ovelay">
									<div class="inner-overlay">
									<span><img src="<?php echo get_template_directory_uri() ?>/img/search-event.png" alt=""/></span>
									</div>    
								</div-->
										</a>
									</div>
								</div>
							<?php } ?>
						</div>
					<?php  } elseif ($video) { ?>
						<iframe style="width: 100%; height: 326px;" src="<?php echo $video; ?>" frameborder="0" gesture="media"
							allow="encrypted-media" allowfullscreen></iframe>
					<?php } else { ?>
						<div class="event-left-box event-img-box wow fadeInLeft event-same-height"
							style="background:url(<?php echo $img[0] ?>); background-size:cover !important;background-repeat: no-repeat;">
							<img src="<?php echo $img[0] ?>">
						</div>
					<?php } ?>


				</div>
				<div class="col span_6">
					<div class="event-right-box event-content-box  wow fadeInRight event-same-height">
						<div class="logo-event-box">
							<?php if ($logo) { ?>
								<div class="logo-event-img-box wow fadeIn">
									<img src="<?php echo $logo; ?>">
								</div>
							<?php } ?>
							<div class="logo-event-text-box" <?php echo ($count == 2) ? "style='padding-left: 0px'" : "" ?>>
								<h2><?php echo get_the_title(get_the_ID()); ?></h2>
								<?php if ($sdate != '' && $edate == '') { ?>
									<h4><?php echo date('M', $sdate) ?>, <?php echo date('Y', $sdate) ?></h4>
								<?php } elseif (date('M', $sdate) == date('M', $edate)) { ?>
									<h4><?php echo date('M d', $sdate) ?>-<?php echo date('d', $edate) ?>,
										<?php echo date('Y', $edate) ?></h4>
								<?php } else { ?>
									<h4><?php echo date('M d', $sdate) ?> - <?php echo date('M d', $edate) ?>,
										<?php echo date('Y', $edate) ?></h4>
								<?php } ?>
								<h6><?php echo $location ?></h6>
							</div>
						</div>

						<div class="logo-event-box-content">
							<?php the_content(); ?>
						</div>
						<?php if ($stall != '') { ?>
							<div class="event-visitus-box">
								<p>Visit us@ <?php echo $stall; ?> </p>
							</div>
						<?php } ?>
					</div>

				</div>
			</div>
		</div>

	</section>
<?php } ?>
<?php wp_reset_query(); ?>

<!-- ****** Events News Block End ******-->


<?php get_footer(); ?>