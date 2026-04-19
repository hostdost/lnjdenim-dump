<?php
get_header();
?>


<style>
    .third-banner-box {
        background: #202214a1;
        opacity: 0.9;
    }
</style>
<!-- ******  Banner Block Content  Start ******-->


<!-- ******  Video Block Content  Start ******-->

<div class="lnj-video-section" style="margin-top:0px;margin-bottom:50px;">
    <div class="container">
        <div class="row">
            <div class="col span_12 youTubeVideo">
                <!-- Make sure ?enablejsapi=1 is on URL -->
                <div class="customcoverImage" id="play-button"
                    style="background: url('<?php echo esc_url(get_template_directory_uri()); ?>/img/lnj-video-bg.jpg'); background-size: cover; background-position: center center; opacity: 1; transition: opacity 1s ease-in-out;">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/play-video-icon.svg" alt=""
                        class="icon-play" />
                </div>
                <!-- <iframe style="width: 100%;" id="video" src="https://www.youtube.com/embed/qhjpV9U03tI?enablejsapi=1&html5=1&rel=0" frameborder="0" allowfullscreen></iframe> -->
                <iframe style="width: 100%;" id="video"
                    src="https://www.youtube.com/embed/QnJGI5wK5gI?enablejsapi=1&html5=1&rel=0" frameborder="0"
                    allowfullscreen></iframe>
            </div>
        </div>
    </div>

</div>
<!-- ******  Video Block Content  End ******-->
<section class="banner-block-section">
    <div class="container">
        <div class="row banner-block-box banner-block-box-first">

            <div class="col span_4 overhidden-box">
                <div class="first-banner-box"
                    style="background:url(<?php echo esc_url(get_template_directory_uri()); ?>/img/img1.jpg);background-size: cover;background-repeat: no-repeat;">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/img1.jpg" alt="">
                </div>
            </div>
            <div class="col span_4">
                <div class="sec-banner-wrap">
                    <div class="sec-banner-box"
                        style="background:url(<?php echo site_url() ?>/assets/img/homepage/lumen-homepage-img.jpg);background-size: cover;background-repeat: no-repeat;">
                        <a href="<?php echo get_permalink(1535) ?>"><img
                                src="<?php echo site_url() ?>/assets/img/homepage/lumen-homepage-img.jpg" alt=""></a>
                    </div>
                    <div class="third-banner-box">
                        <div class="third-text-box  box-tabel">
                            <div class="box-tabel-cell">
                                <h2 class="wow fadeIn" data-wow-duration="0.3s" data-wow-delay="0.6s">
                                    <a href="<?php echo get_permalink(1535) ?>">SS 27 LUMEN</a>
                                </h2>
                                <div class="arrow-box-icon wow fadeIn" data-wow-duration="0.5s" data-wow-delay="1s">
                                    <a href="<?php echo get_permalink(1535) ?>">
                                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/white-right-arrow.png"
                                            alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col span_4">
                <div class="sec-banner-wrap">
                    <div class="sec-banner-box"
                        style="background:url(<?php echo site_url() ?>/assets/img/homepage/aw-26-home-thumb.jpg);background-size: cover;background-repeat: no-repeat;">
                        <a href="<?php echo get_permalink(1520); ?>"><img
                                src="<?php echo site_url() ?>/assets/img/homepage/aw-26-home-thumb.jpg" alt=""></a>
                    </div>
                </div>

                <div class="third-banner-box">
                    <div class="third-text-box  box-tabel">
                        <div class="box-tabel-cell">
                            <h2 class="wow fadeIn" data-wow-duration="0.3s" data-wow-delay="0.6s">
                                <a href="<?php echo get_permalink(1520); ?>">AW 26 GLIDE</a>
                            </h2>
                            <!-- <h3 class="wow fadeIn" data-wow-duration="0.4s" data-wow-delay="0.8s"><a
									href="<?php //echo get_permalink(434) 
                                            ?>">2021 </a>
							</h3> -->
                            <div class="arrow-box-icon wow fadeIn" data-wow-duration="0.5s" data-wow-delay="1s">
                                <a href="<?php echo get_permalink(1520); ?>">
                                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/white-right-arrow.png"
                                        alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>


            <div class="col span_4" style="display: none;">
                <div class="sec-banner-wrap">
                    <div class="sec-banner-box"
                        style="background:url(<?php echo site_url() ?>/assets/img/homepage/echo-homepage-img.jpg);background-size: cover;background-repeat: no-repeat;">
                        <a href="<?php echo get_permalink(1190) ?>"><img
                                src="<?php echo site_url() ?>/assets/img/homepage/echo-homepage-img.jpg" alt=""></a>
                    </div>
                    <div class="third-banner-box">
                        <div class="third-text-box  box-tabel">
                            <div class="box-tabel-cell">
                                <h2 class="wow fadeIn" data-wow-duration="0.3s" data-wow-delay="0.6s">
                                    <a href="<?php echo get_permalink(1190) ?>">AW 25 ECHO</a>
                                </h2>
                                <!-- <h3 class="wow fadeIn" data-wow-duration="0.4s" data-wow-delay="0.8s" ><a href="<?php //echo get_permalink(615) 
                                                                                                                        ?>"> 2023 </a>
				   </h3> -->
                                <div class="arrow-box-icon wow fadeIn" data-wow-duration="0.5s" data-wow-delay="1s">
                                    <a href="<?php echo get_permalink(1190) ?>">
                                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/white-right-arrow.png"
                                            alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col span_4" style="display: none!important;">
                <div class="sec-banner-wrap">
                    <div class="sec-banner-box"
                        style="background:url(<?php echo site_url() ?>/assets/img/homepage/elganza-homepage-img.jpg);background-size: cover;background-repeat: no-repeat;">
                        <a href="<?php echo get_permalink(906) ?>"><img
                                src="<?php echo site_url() ?>/assets/img/homepage/elganza-homepage-img.jpg" alt=""></a>
                    </div>
                    <div class="third-banner-box">
                        <div class="third-text-box  box-tabel">
                            <div class="box-tabel-cell">
                                <h2 class="wow fadeIn" data-wow-duration="0.3s" data-wow-delay="0.6s">
                                    <a href="<?php echo get_permalink(906) ?>">SS 25 ELGANZA</a>
                                </h2>
                                <!-- <h3 class="wow fadeIn" data-wow-duration="0.4s" data-wow-delay="0.8s" ><a href="<?php //echo get_permalink(615) 
                                                                                                                        ?>"> 2023 </a>
				   </h3> -->
                                <div class="arrow-box-icon wow fadeIn" data-wow-duration="0.5s" data-wow-delay="1s">
                                    <a href="<?php echo get_permalink(906) ?>">
                                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/white-right-arrow.png"
                                            alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col span_4" style="display: none;">
                <div class="forth-banner-box">

                    <div class="forth-banner-box-img" onclick="location.href='<?php echo get_permalink(615) ?>'">
                        <img src="<?php echo site_url() ?>/wp-content/uploads/2023/02/switch_thumb_1.png" alt=""
                            class="homeaw-img">
                        <div class="triangle">
                        </div>

                        <h1 class="wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.9s"
                            style="background: rgba(42, 42, 70, 0.8); opacity: 1;"><strong style="font-weight:700;">
                                SWITCH SPRING SUMMER 2024</strong>
                            <span>
                                <a href="<?php echo get_permalink(615) ?>">
                                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/white-right-arrow.png"
                                        alt="">
                                </a>
                            </span>
                        </h1>
                    </div>
                </div>
            </div>
            <div class="col span_4" style="display: none;">
                <div class="sec-banner-wrap">
                    <div class="sec-banner-box"
                        style="background:url(<?php echo site_url() ?>/wp-content/uploads/2022/05/denimic-aw23-1.png);background-size: cover;background-repeat: no-repeat;">
                        <a href="<?php echo get_permalink(571) ?>"><img
                                src="<?php echo site_url() ?>/wp-content/uploads/2022/05/denimic-aw23-1.png" alt=""></a>
                    </div>
                    <div class="third-banner-box">
                        <div class="third-text-box  box-tabel">
                            <div class="box-tabel-cell">
                                <h2 class="wow fadeIn" data-wow-duration="0.3s" data-wow-delay="0.6s">
                                    <a href="<?php echo get_permalink(571) ?>">DENIMIC AUTUMN WINTER 2023</a>
                                </h2>
                                <!-- <h3 class="wow fadeIn" data-wow-duration="0.4s" data-wow-delay="0.8s" ><a href="<?php //echo get_permalink(615) 
                                                                                                                        ?>"> 2023 </a>
				   </h3> -->
                                <div class="arrow-box-icon wow fadeIn" data-wow-duration="0.5s" data-wow-delay="1s">
                                    <a href="<?php echo get_permalink(571) ?>">
                                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/white-right-arrow.png"
                                            alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>




        </div>

        <div class="row banner-block-box">

            <div class="col span_4">
                <div class="sixth-banner-box same-height-box wow fadeIn">
                    <div class="sixth-banner-text">
                        <div class="six-content-box">
                            <h5><a href="<?php the_permalink(); ?>/about/"> ABOUT LNJ DENIM</a></h5>

                            <p>
                                LNJ Denim, a denim-manufacturing facility established in 2007 under RSWM Limited

                                (the flagship company of LNJ Bhilwara Group), has a manufacturing capacity of 32

                                million metres annually. LNJ Denim has earned an excellent reputation amongst

                                international and domestic brands as an innovator and a quality supplier of denim

                                fabric.
                            </p>
                            <div class="readmore-withicon">
                                <a href="<?php the_permalink(); ?>/about/"> READ MORE </a>
                            </div>
                        </div>

                        <div class="bottom-seventh-text bottom-sixth-text wow fadeInUp">
                            <p>Weaving into the New Millennium </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col span_4">
                <div class="seventh-banner-box same-height-box wow fadeIn">
                    <div class="seventh-banner-text">
                        <div class="seventh-icon-box">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/seventh-box-icon.png"
                                alt="">
                        </div>
                        <div class="seventh-content-box inner-same-height"
                            onclick="location.href='<?php the_permalink(); ?>/technology-innovation/'">
                            <h5>TO EMBARK ON A CONTINUOUS</h5>
                            <h6>ENDEAVOUR TOWARDS </h6>
                            <h1>INNOVATION </h1>
                            <p>& exploring infinite varieties in textile </p>
                        </div>
                        <div class="readmore-withicon">
                            <a href="<?php echo site_url('technology-innovation') ?>"> READ MORE </a>
                        </div>
                    </div>
                    <div class="bottom-seventh-text wow fadeInUp" data-wow-delay="0.6s">
                        <p> PROUD TO BE INDIAN. PRIVILEGED TO BE GLOBAL .</p>
                    </div>
                </div>
            </div>
            <div class="col span_4 ">
                <div class="eight-banner-box same-height-box wow fadeIn">
                    <div class="eight-banner-text ">
                        <div class="eight-icon-box">
                            <h3> PIQ THEORY </h3>
                        </div>
                        <div class="eight-content-box inner-same-height">
                            <p>The LNJ Denim philosophy is built on
                                three pillars: Precision, Innovation and Quality, or as we call it, The PIQ Theory.
                            </p>
                            <div class="boxlinks-eight">
                                <h4> PRECISION </h4>
                                <h4>INNOVATION</h4>
                                <h4> QUALITY </h4>
                            </div>
                        </div>
                        <div class="readmore-withicon">
                            <a href="<?php echo site_url('about') ?>#piqtheory-box"> READ MORE </a>
                        </div>
                    </div>
                    <div class="bottom-eight-text wow fadeInUp" data-wow-delay="0.6s">
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- ******  Banner Block Content  End ******-->
<section class="sping-summer-section winter-2019" style="display: none;">
    <div class="container">
        <div class="row">
            <div class="main-head">

                <h1><span><a href="<?php echo get_the_permalink(615) ?>">SWITCH SPRING SUMMER 2024</a></span></h1>
            </div>
        </div>
        <div class="row">
            <div class="spring-summer-wrapper home-autumn-slider">
                <div class="col span_3 item wow fadeIn">
                    <div class="sping-summer-wrap">
                        <div class="summer-sping-img">
                            <a href="<?php echo get_the_permalink(615) ?>#urbanite"><img
                                    src="<?php echo site_url() ?>/wp-content/uploads/2023/03/urbanite.jpg" alt=""></a>
                            <div class="summer-sping-caption">
                                <p><a href="<?php echo get_the_permalink(615) ?>#urbanite">Urbanite</a></p>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col span_3 item  wow fadeIn">
                    <div class="sping-summer-wrap">
                        <div class="summer-sping-img">
                            <a href="<?php echo get_the_permalink(615) ?>#ecpicurean"><img
                                    src="<?php echo esc_url(site_url()); ?>/wp-content/uploads/2023/03/epicurean.jpg"
                                    alt=""></a>
                            <div class="summer-sping-caption">
                                <p><a href="<?php echo get_the_permalink(615) ?>#ecpicurean">Ecpicurean</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col span_3 item  wow fadeIn">
                    <div class="sping-summer-wrap">
                        <div class="summer-sping-img">
                            <a href="<?php echo get_the_permalink(615) ?>#vagabond"><img
                                    src="<?php echo esc_url(site_url()); ?>/wp-content/uploads/2023/03/vagabond.jpg"
                                    alt=""></a>

                            <div class="summer-sping-caption">
                                <p><a href="<?php echo get_the_permalink(615) ?>#vagabond">Vagabond</a></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col span_3 item wow fadeIn">
                    <div class="sping-summer-wrap">
                        <div class="summer-sping-img">
                            <a href="<?php echo get_the_permalink(615) ?>#preserver"><img
                                    src="<?php echo esc_url(site_url()); ?>/wp-content/uploads/2023/03/preserver.jpg"
                                    alt=""></a>
                            <div class="summer-sping-caption">
                                <p><a href="<?php echo get_the_permalink(615) ?>#preserver">Preserver</a></p>
                            </div>
                        </div>
                    </div>
                </div>



                <!-- <div class="col span_3 item wow fadeIn">
			 <div class="sping-summer-wrap">
				<div class="summer-sping-img">
				   <a href="<?php echo get_the_permalink(615) ?>"><img src="<?php echo esc_url(site_url()); ?>/wp-content/uploads/2021/01/005.jpg" alt=""></a>
				   <div class="summer-sping-caption">
					  <p><a href="<?php echo get_the_permalink(615) ?>">Batteries</a></p>
				   </div>
				</div>
			 </div>
		  </div> -->
            </div>
        </div>
    </div>
</section>

<section class="sping-summer-section winter-2019" style="display: none;">
    <div class="container">
        <div class="row">
            <div class="main-head">

                <h1><span><a href="<?php echo get_the_permalink(571) ?>">DENIMIC AUTUMN WINTER 2023</a></span></h1>
            </div>
        </div>
        <div class="row">
            <div class="spring-summer-wrapper home-autumn-slider">
                <div class="col span_3 item wow fadeIn">
                    <div class="sping-summer-wrap">
                        <div class="summer-sping-img">
                            <a href="<?php echo get_the_permalink(571) ?>#arrow"><img
                                    src="<?php echo site_url() ?>/wp-content/uploads/2022/05/Arrow-1.png" alt=""></a>

                            <div class="summer-sping-caption">

                                <p><a href="<?php echo get_the_permalink(571) ?>#arrow">Arrow</a></p>

                            </div>
                        </div>
                    </div>
                </div>


                <div class="col span_3 item  wow fadeIn">
                    <div class="sping-summer-wrap">
                        <div class="summer-sping-img">

                            <a href="<?php echo get_the_permalink(571) ?>#club"><img
                                    src="<?php echo esc_url(site_url()); ?>/wp-content/uploads/2022/05/club.jpeg"
                                    alt=""></a>

                            <div class="summer-sping-caption">

                                <p><a href="<?php echo get_the_permalink(571) ?>#club">Club</a></p>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col span_3 item  wow fadeIn">
                    <div class="sping-summer-wrap">
                        <div class="summer-sping-img">
                            <a href="<?php echo get_the_permalink(571) ?>#googly"><img
                                    src="<?php echo esc_url(site_url()); ?>/wp-content/uploads/2022/05/Googly-1.png"
                                    alt=""></a>

                            <div class="summer-sping-caption">

                                <p><a href="<?php echo get_the_permalink(571) ?>#googly">Googly</a></p>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col span_3 item wow fadeIn">
                    <div class="sping-summer-wrap">
                        <div class="summer-sping-img">
                            <a href="<?php echo get_the_permalink(571) ?>#shaft"><img
                                    src="<?php echo esc_url(site_url()); ?>/wp-content/uploads/2022/05/SHAFT-1.png"
                                    alt=""></a>

                            <div class="summer-sping-caption">

                                <p><a href="<?php echo get_the_permalink(571) ?>#shaft">Shaft</a></p>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col span_3 item wow fadeIn">
                    <div class="sping-summer-wrap">
                        <div class="summer-sping-img">
                            <a href="<?php echo get_the_permalink(571) ?>#somersault"><img
                                    src="<?php echo esc_url(site_url()); ?>/wp-content/uploads/2022/05/somersault-1.png"
                                    alt=""></a>

                            <div class="summer-sping-caption">

                                <p><a href="<?php echo get_the_permalink(571) ?>#somersault">Somersault</a></p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>













<!--  Rebounf A/W 2021 Section -->
<!-- <section class="sping-summer-section winter-2019" >
 <div class="container">
	<div class="row">
	   <div class="main-head">
		  <h1><span><a href="<?php echo get_the_permalink(434) ?>">REBOUND AUTUMN WINTER 2021 </a></span></h1>
	   </div>
	</div>
	<div class="row">
	   <div class="spring-summer-wrapper home-autumn-slider">
		  <div class="col span_3 item wow fadeIn">
			 <div class="sping-summer-wrap">
				<div class="summer-sping-img">
				   <a href="<?php echo get_the_permalink(434) ?>#preserve"><img src="<?php echo site_url() ?>/wp-content/uploads/2020/05/hp1.jpg" alt=""></a>
				   <div class="summer-sping-caption">
					  <p><a href="<?php echo get_the_permalink(434) ?>#preserve">Preserve</a></p>
				   </div>
				</div>
			 </div>
		  </div>
 

           		  <div class="col span_3 item  wow fadeIn">
			 <div class="sping-summer-wrap">
				<div class="summer-sping-img">
				   <a href="<?php echo get_the_permalink(434) ?>#perform"><img src="<?php echo esc_url(site_url()); ?>/wp-content/uploads/2020/05/hp2.jpg" alt=""></a>
				   <div class="summer-sping-caption">
					  <p><a href="<?php echo get_the_permalink(434) ?>#perform">Perform</a></p>
				   </div>
				</div>
			 </div>
		  </div>
           		  <div class="col span_3 item  wow fadeIn">
			 <div class="sping-summer-wrap">
				<div class="summer-sping-img">
				   <a href="<?php echo get_the_permalink(434) ?>#sense"><img src="<?php echo esc_url(site_url()); ?>/wp-content/uploads/2020/05/hp3.jpg" alt=""></a>
				   <div class="summer-sping-caption">
					  <p><a href="<?php echo get_the_permalink(434) ?>#sense">Sense</a></p>
				   </div>
				</div>
			 </div>
		  </div>
    
           		  <div class="col span_3 item wow fadeIn">
			 <div class="sping-summer-wrap">
				<div class="summer-sping-img">
				   <a href="<?php echo get_the_permalink(434) ?>#soul"><img src="<?php echo esc_url(site_url()); ?>/wp-content/uploads/2020/05/hp4.jpg" alt=""></a>
				   <div class="summer-sping-caption">
					  <p><a href="<?php echo get_the_permalink(434) ?>#soul">Soul</a></p>
				   </div>
				</div>
			 </div>
		  </div>
            <div class="col span_3 item wow fadeIn">
			 <div class="sping-summer-wrap">
				<div class="summer-sping-img">
				   <a href="<?php echo get_the_permalink(434) ?>#freedom"><img src="<?php echo esc_url(site_url()); ?>/wp-content/uploads/2020/05/hp5.jpg" alt=""></a>
				   <div class="summer-sping-caption">
					  <p><a href="<?php echo get_the_permalink(434) ?>#freedom">Freedom</a></p>
				   </div>
				</div>
			 </div>
		  </div>
        </div>
	</div>
 </div>
</section> -->
<!--/  Rebounf A/W 2021 Section -->

<!-- ******  Technology Section Start ******-->
<section class="techo-infra-section">
    <div class="container">
        <div class="row">
            <div class="main-head">
                <h1><span><a href="<?php echo site_url('technology-innovation') ?>">Our Plant</a></span></h1>
            </div>
        </div>
        <div class="row">
            <div class="col span_12">
                <div class="techo-img-wrap">
                    <a href="<?php the_permalink(); ?>/technology-innovation/">
                        <?php if (!isMobile()) { ?>
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/infra-banner-img.jpg" alt="">
                        <?php } ?>

                        <?php if (isMobile()) { ?>
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/mobile-home-plant.jpg"
                                alt="">
                        <?php } ?>

                    </a>
                    <div class="techo-content-wrap  wow fadeInLeft">
                        <div class="techo-content-box">
                            <div class="techo-box-tabel">
                                <div class="techo-box-tabelcell"
                                    onclick="location.href='<?php the_permalink(); ?>/technology-innovation/'">
                                    <h4>EXCELLING IN</h4>
                                    <h2>TEXTILE ENGINEERING</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ******  Technology Section End ******-->
<!-- ******  Certification  Section Start ******-->
<section class="certification-section">
    <div class="container">
        <div class="row">
            <div class="main-head">
                <h1><span><a href="<?php echo site_url('about') ?>#certification">CERTIFICATIONS</a></span></h1>
            </div>
        </div>
        <div class="row">
            <div class="col span_12">
                <?php get_template_part('template-parts/certification', 'file'); ?>
            </div>
        </div>
</section>
<!-- ******  Certification Section End ******-->

<!-- ******  Certification  Section Start ******-->
<section class="client-section">
    <div class="container">
        <div class="row">
            <div class="main-head">
                <h1><span><a href="<?php echo site_url('about') ?>#clients">CLIENTS</a></span></h1>
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
<?php get_footer(); ?>