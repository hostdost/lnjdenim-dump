<?php
/*
*Template Name: Template About 
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
			<div class="col span_8">
				<div class="banner-left-sec inner-banner-same-height" style="background:url(<?php echo $img[0] ?>); background-size:cover;">
					<img src="<?php echo $img[0] ?>" alt="<?php echo $page->post_content; ?>">
				</div>
			</div>
			<div class="col span_4">
				<div class="banner-right-sec inner-banner-same-height" style="background:#33345c url('<?php echo esc_url(get_template_directory_uri()); ?>/img/about-page-banner-right.jpg')">
					<img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/about-page-banner-right.jpg" style="opacity:0" alt="">
					<div class="banner-right-text">
						<div class="banner-right-text-tabel">
							<div class="banner-right-text-tabelcell">

								<h1 class="wow fadeIn" data-wow-delay="0.3s"> ABOUT LNJ DENIM </h1>
								<h4 class="wow fadeIn" data-wow-delay="0.6s"><?php echo $page->post_content; ?></h4>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- ****** Inner Page Banner End ******-->
<!-- ******  About Block Content  Start ******-->
<section class="about-block-section" id="fromfibreto">
	<div class="container">
		<div class="row">
			<?php $fibre = get_post(71); // page From Fibre to Finishing 
			?>
			<div class="col span_12">
				<div class="main-head withsubhead">
					<h1><span>LNJ DENIM </span></h1>
					<!--  <h5><?php echo $fibre->post_title; ?></h5>  -->
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col span_12">
				<style>
					p {
						margin-bottom: 20px;
					}
				</style>
				<p><?php echo $fibre->post_content; ?></p>
			</div>
		</div>
	</div>
</section>
<!-- ******  About Block Content  End ******-->
<!-- ******  About bucket Content  Start ******-->
<section class="about-bucket-section">
	<div class="container">
		<div class="row">
			<div class="col span_8 same-height-box">
				<div class="denim-first-left  wow fadeIn" id="piqtheory-box">
					<div class="bucket-arrow-icon">
						<img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/bucket-img-arrow-icon.png" alt="">
					</div>
					<div class="bucket-piq-content">
						<h3> PIQ THEORY </h3>
						<p> The LNJ Denim philosophy is built on three pillars: Precision, Innovation and Quality, or as we call it, The PIQ Theory. </p>
						<div class="boxlinks-eight">
							<h4> PRECISION </h4>
							<h4>INNOVATION</h4>
							<h4> QUALITY </h4>
						</div>
					</div>
				</div>
				<div class="denim-first-right wow fadeIn">
					<div class="denimcenter-content">
						<h4>PRECISION </h4>
						<p>Our mission is to be the premier denim supplier in the world. We seek out and select the best when it comes to our people and our resources. </p>
					</div>
					<div class="denimcenter-content">
						<h4>INNOVATION </h4>
						<p>We are dedicated to being ahead of the curve when it comes to fashion. We research the market extensively and search the world to bring you the latest, most innovative denim designs. </p>
					</div>
					<div class="denimcenter-content">
						<h4>QUALITY </h4>
						<p>We are steadfast in our mission to produce superior quality textiles and hold ourselves to a high standard of achievement. We take pride in being the resource our customers turn to for their textile needs and we always provide the best possible service. </p>
					</div>
				</div>
			</div>
			<div class="col span_4">
				<div class="denim-second same-height-box wow fadeIn">
					<div class="seventh-banner-box">
						<div class="seventh-banner-text">
							<div class="seventh-icon-box">
								<a href="<?php echo site_url('technology-innovation'); ?>">
									<img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/seventh-box-icon.png" alt="">
								</a>
							</div>
							<div class="seventh-content-box inner-same-height" onclick="location.href='http://lnjdenim.in/technology-innovation/'">
								<h5>TO EMBARK ON A CONTINUOUS
								</h5>
								<h6>ENDEAVOUR TOWARDS </h6>
								<h1>INNOVATION </h1>
								<p>&amp; exploring infinite varieties in textile </p>
							</div>
							<div class="readmore-withicon">
								<a href="<?php echo site_url('technology-innovation'); ?>"> READ MORE </a>
							</div>
						</div>
						<div class="bottom-seventh-text wow fadeInUp" data-wow-delay="0.6s">
							<p> PROUD TO BE INDIAN. PRIVILEGED TO BE GLOBAL </p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- ******  About bucket Content  End ******-->
<!-- ******  Certification  Section Start ******-->
<section id="certification"></section>
<section class="certification-section">
	<div class="container">
		<div class="row">
			<div class="main-head">
				<h1><span>CERTIFICATIONS </span></h1>
			</div>
		</div>
		<div class="row">
			<div class="col span_12">
				<?php get_template_part('template-parts/certification', 'file'); ?>
			</div>
		</div>
	</div>
</section>
<!-- ******  Certification Section End ******-->
<!-- ******  Certification  Section Start ******-->
<section id="clients"></section>
<section class="client-section">
	<div class="container">
		<div class="row">
			<div class="main-head">
				<h1><span><a href="<?php echo site_url('about'); ?>#clients">CLIENTS</a></span></h1>
			</div>
		</div>
		<div class="row">
			<div class="col span_12">
				<?php get_template_part('template-parts/clients', 'file'); ?>
			</div>
		</div>
	</div>
</section>
<!-- ******  Certification Section End ******-->
<!-- ******  Bhilwara Group Section Start ******-->
<section class="bilwara-group-section" style="margin-bottom: 50px;">
	<div class="container">
		<div class="bilwara-content-wrap wow fadeIn">
			<div class="row">
				<?php $bhilwara = get_post(74); // page LNJ BHILWARA GROUP 
				?>
				<div class="col span_2">
					<div class="left-logo-sec wow fadeIn" data-wow-delay="0.7s">
						<img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/lnj-stump.png" alt="">
						<p>PROUD TO BE INDIAN<br>PRIVILEGED TO BE GLOBAL</p>
					</div>
				</div>
				<div class="col span_10">
					<div class="right-logo-sec">
						<h4><?php echo $bhilwara->post_title ?></h4>
						<p><?php echo $bhilwara->post_content ?></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- ******  Bhilwara Group Section End ******-->
<!-- All Seasons and All Reasons -->
<section class="seasons-reasons-section" style="margin-bottom: 40px;">
	<div class="container">
		<div class="seasons-reasons-wrap wow fadeIn">
			<div class="row">
				<div class="col span_8">
					<iframe width="100%" height="390" src="https://www.youtube.com/embed/QnJGI5wK5gI?si=UYj7m3q5QmzuWDvD" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
				</div>
				<div class="col span_4">
					<div class="left-logo-sec wow fadeIn" data-wow-delay="0.7s">
						<img style="width: 100%;" src="<?php echo site_url(); ?>/assets/img/resons-seasons-pic.jpg" alt="LNJ Denim | For All Reasons, For All Seasons">
					</div>
				</div>

			</div>
		</div>
	</div>
</section>
<!-- All Seasons and All Reasons -->
<!-- ******  Historic Section Start ******-->
<section class="historic-block-section">
	<div class="container">
		<div class="row">
			<div class="col span_12">
				<div class="main-head">
					<h1><span>HISTORIC HIGHLIGHTS </span></h1>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col span_12">
				<div class="historic-timeline">
					<div class="group-story-text milestone-slider-wrapper">
						<div class="row">
							<div class="prestigious-date-main">
								<ul class="historic-slider-nav prestigious-date">
									<?php $highlights = _get_posts('historic-highlights'); ?>
									<?php $count = 0; ?>
									<?php while ($highlights->have_posts()) {
										$highlights->the_post(); ?>
										<?php $imgUrl = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'full'); ?>
										<?php $count++; ?>
										<li class="item wow fadeIn" data-wow-delay="0.3s">

											<span><?php echo get_the_title($highlights->ID); ?></span>
											<div class="prestigious-historyYear-<?php echo number_to_string($count) ?> years">
												<h4><?php echo get_the_excerpt($highlights->ID); ?></h4>
											</div>
											<span class="wow fadeIn yearImage years_<?php echo number_to_string($count) ?>">

												<?php if ($imgUrl[0] != "") { ?>
													<img src="<?php echo $imgUrl[0] ?>" alt="">
												<?php } ?>

											</span>
										</li>
									<?php } ?>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section>
	<div class="container">
		<div class="historic-slider-nav-wrapper">
			<div class="row">
				<div class="col span_12">
					<?php $highlightsfull = _get_posts('historic-highlights'); ?>
					<ul class="historic-timeline-slider">
						<?php while ($highlightsfull->have_posts()) {
							$highlightsfull->the_post(); ?>
							<li class="item">
								<div class="historic-nav-item">
									<h4><?php echo get_the_title($highlightsfull->ID); ?></h4>
									<p><?php echo get_the_content($highlightsfull->ID); ?></p>
								</div>
							</li>
						<?php } ?>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- ******  Historic Section End ******-->
<!-- ******  Bottom Three Bucket Start ******-->
<section class="bottom-three-buckt">
	<div class="container">
		<div class="row">
			<div class="col span_12">

				<div class="col span_8">
					<div class="autumn-winter-wrap about-two-bucket wow fadeInDown">
						<div class="autumn-winter-img">
							<img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/about-infa.jpg" alt="">
							<div class="autumn-winter-box">
								<div class="autumn-winter-tabel" onclick="location.href='<?php echo site_url('technology-innovation'); ?>'">
									<div class="autumn-winter-tabelcell">
										<h2>PLANT</h2>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
				<div class="col span_4">
					<div class="autumn-winter-wrap wow fadeInRight">
						<div class="autumn-winter-img">
							<img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/three-buket-img3.jpg" alt="">
							<div class="autumn-winter-box">
								<div class="autumn-winter-tabel" onclick="location.href='http://lnjdenim.in/sustainability/'">
									<div class="autumn-winter-tabelcell">
										<h2>SUSTAINABILITY </h2>
									</div>
								</div>
							</div>
							<!--  <div class="autumn-winter-box-hover">
					  <p><a href="<?php echo site_url('sustainability'); ?>">READ MORE </a> </p>
				   </div> -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- ******  Bottom Three Bucket End ******-->
<?php get_footer(); ?>