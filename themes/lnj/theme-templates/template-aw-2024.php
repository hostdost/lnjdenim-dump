<?php
/*
*Template Name: Template AW 2024
*/
?>
<?php
get_header();
?>


<style>
    .third-banner-box {
        background: #5BB35A;
        opacity: 0.9;
    }
</style>
<!-- ******  Banner Block Content  Start ******-->
<!-- ****** Inner Page Banner Start ******-->
<section class="inner-banner-block-section" style="margin-bottom: 50px;">
    <div class="container">
        <div class="row" style="">
            <div class="col span_12">
                <div class="">
                    <?php if (!isMobile()) { ?>
                        <img src="<?php echo site_url(); ?>/assets/aw24-banner.png" alt="">
                    <?php } ?>
                    <?php if (isMobile()) { ?>
                        <img src="<?php echo site_url(); ?>/assets/aw24-banner.png" alt="">
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ****** Inner Page Banner End ******-->

<!-- ******  Video Block Content  Start ******-->

<div class="lnj-video-section" style="margin-top:0px;margin-bottom:50px; display:none;">
    <div class="container">
        <div class="row">
            <div class="col span_12 youTubeVideo">
                <!-- Make sure ?enablejsapi=1 is on URL -->
                <div class="customcoverImage" id="play-button" style="height:500px; background: url('<?php echo site_url(); ?>/assets/aw24-banner.png'); background-size: cover; background-position: center center; opacity: 1; transition: opacity 1s ease-in-out; height:500px;">
                    <img src="<?php echo esc_url(get_template_directory_uri());
                                ?>/img/play-video-icon.svg" alt="" class="icon-play" />
                </div>
                <iframe style="width: 100%;" id="video" src="" frameborder="0" enablejsapi="1" origin="http://lnjdenim.in" allowfullscreen></iframe>
                <!-- https://www.youtube.com/embed/qhjpV9U03tI?enablejsapi=1&html5=1&rel=0 -->

            </div>
        </div>
    </div>

</div>
<!-- ******  Video Block Content  End ******-->
<section class="banner-block-section">
    <div class="container">
        <div class="row banner-block-box banner-block-box-first">

            <!-- <div class="col span_4 overhidden-box">
                <div class="first-banner-box"
                    style="background:url(<?php echo esc_url(get_template_directory_uri()); ?>/img/img1.jpg);background-size: cover;background-repeat: no-repeat;">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/img1.jpg" alt="">
                </div>
            </div> -->

            <div class="col span_4">
                <div class="sec-banner-wrap">
                    <div class="sec-banner-box" style="background:url(<?php echo site_url() ?>/assets/1.png);background-size: cover;background-repeat: no-repeat;">
                        <a href="<?php echo get_permalink(647) ?>"><img src="<?php echo site_url() ?>/assets/1.png" alt=""></a>
                    </div>
                </div>

                <div class="third-banner-box" style="background-color: #505e5f;">
                    <div class="third-text-box  box-tabel">
                        <div class="box-tabel-cell">
                            <h2 class="wow fadeIn" data-wow-duration="0.3s" data-wow-delay="0.6s">
                                <a href="<?php echo get_permalink(647) ?>">Frenzy Irregularity</a>
                            </h2>
                            <h3 class="wow fadeIn" data-wow-duration="0.4s" data-wow-delay="0.8s"><a href="<?php echo get_permalink(647)
                                                                                                            ?>">FW 2024
                                </a>
                            </h3>
                            <div class="arrow-box-icon wow fadeIn" data-wow-duration="0.5s" data-wow-delay="1s">
                                <a href="<?php echo get_permalink(647) ?>">
                                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/white-right-arrow.png" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>


            <div class="col span_4">
                <div class="sec-banner-wrap">
                    <div class="sec-banner-box" style="background:url(<?php echo site_url() ?>/assets/2.png);background-size: cover;background-repeat: no-repeat;">
                        <a href="<?php echo get_permalink(658) ?>"><img src="<?php echo site_url() ?>/assets/2.png" alt=""></a>
                    </div>
                    <div class="third-banner-box" style="background-color: #b05a7a;">
                        <div class="third-text-box  box-tabel">
                            <div class="box-tabel-cell">
                                <h2 class="wow fadeIn" data-wow-duration="0.3s" data-wow-delay="0.6s">
                                    <a href="<?php echo get_permalink(658) ?>">Classic Cluster</a>
                                </h2>
                                <h3 class="wow fadeIn" data-wow-duration="0.4s" data-wow-delay="0.8s"><a href="<?php echo get_permalink(658)
                                                                                                                ?>"> FW
                                        2024 </a>
                                </h3>
                                <div class="arrow-box-icon wow fadeIn" data-wow-duration="0.5s" data-wow-delay="1s">
                                    <a href="<?php echo get_permalink(658) ?>">
                                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/white-right-arrow.png" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col span_4">
                <div class="sec-banner-wrap">
                    <div class="sec-banner-box" style="background:url(<?php echo site_url() ?>/assets/3.png);background-size: cover;background-repeat: no-repeat;">
                        <a href="<?php echo get_permalink(662) ?>"><img src="<?php echo site_url() ?>/assets/3.png" alt=""></a>
                    </div>
                    <div class="third-banner-box" style="background-color: #f67f62;">
                        <div class="third-text-box  box-tabel">
                            <div class="box-tabel-cell">
                                <h2 class="wow fadeIn" data-wow-duration="0.3s" data-wow-delay="0.6s">
                                    <a href="<?php echo get_permalink(662) ?>">Concious Fibres</a>
                                </h2>
                                <h3 class="wow fadeIn" data-wow-duration="0.4s" data-wow-delay="0.8s"><a href="<?php echo get_permalink(662)
                                                                                                                ?>"> FW
                                        2024 </a>
                                </h3>
                                <div class="arrow-box-icon wow fadeIn" data-wow-duration="0.5s" data-wow-delay="1s">
                                    <a href="<?php echo get_permalink(662) ?>">
                                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/white-right-arrow.png" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>



            <div class="col span_4">
                <div class="sec-banner-wrap">
                    <div class="sec-banner-box" style="background:url(<?php echo site_url() ?>/assets/4.png);background-size: cover;background-repeat: no-repeat;">
                        <a href="<?php echo get_permalink(664) ?>"><img src="<?php echo site_url() ?>/assets/4.png" alt=""></a>
                    </div>
                    <div class="third-banner-box" style="background-color: #1363df;">
                        <div class="third-text-box  box-tabel">
                            <div class="box-tabel-cell">
                                <h2 class="wow fadeIn" data-wow-duration="0.3s" data-wow-delay="0.6s">
                                    <a href="<?php echo get_permalink(664) ?>">Nomadic Loop</a>
                                </h2>
                                <h3 class="wow fadeIn" data-wow-duration="0.4s" data-wow-delay="0.8s"><a href="<?php echo get_permalink(664)
                                                                                                                ?>"> FW
                                        2024 </a>
                                </h3>
                                <div class="arrow-box-icon wow fadeIn" data-wow-duration="0.5s" data-wow-delay="1s">
                                    <a href="<?php echo get_permalink(664) ?>">
                                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/white-right-arrow.png" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col span_4">
                <div class="sec-banner-wrap">
                    <div class="sec-banner-box" style="background:url(<?php echo site_url() ?>/assets/5.png);background-size: cover;background-repeat: no-repeat;">
                        <a href="<?php echo get_permalink(659) ?>"><img src="<?php echo site_url() ?>/assets/5.png" alt=""></a>
                    </div>
                    <div class="third-banner-box" style="background-color: #c69749;">
                        <div class="third-text-box  box-tabel">
                            <div class="box-tabel-cell">
                                <h2 class="wow fadeIn" data-wow-duration="0.3s" data-wow-delay="0.6s">
                                    <a href="<?php echo get_permalink(659) ?>">Misty Shadows</a>
                                </h2>
                                <h3 class="wow fadeIn" data-wow-duration="0.4s" data-wow-delay="0.8s"><a href="<?php echo get_permalink(659)
                                                                                                                ?>"> FW
                                        2024 </a>
                                </h3>
                                <div class="arrow-box-icon wow fadeIn" data-wow-duration="0.5s" data-wow-delay="1s">
                                    <a href="<?php echo get_permalink(659) ?>">
                                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/white-right-arrow.png" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>



        </div>
    </div>
</section>
<!-- ******  Banner Block Content  End ******-->
<?php get_footer(); ?>