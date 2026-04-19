<?php
/*
*Template Name: Template SS 2025
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
                        <img src="<?php echo site_url(); ?>/assets/ss25-banner.png" alt="">
                    <?php } ?>
                    <?php if (isMobile()) { ?>
                        <img src="<?php echo site_url(); ?>/assets/ss25-banner.png" alt="">
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
                <div class="customcoverImage" id="play-button" style="height:500px; background: url('<?php echo site_url(); ?>/assets/ss25-banner.png'); background-size: cover; background-position: center center; opacity: 1; transition: opacity 1s ease-in-out; height:500px;">
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
                    <div class="sec-banner-box" style="background:url(<?php echo site_url() ?>/assets/ss-25-essentials.png);background-size: cover;background-repeat: no-repeat;">
                        <a href="<?php echo get_permalink(908) ?>"><img src="<?php echo site_url() ?>/assets/ss-25-essentials.png" alt=""></a>
                    </div>
                </div>

                <div class="third-banner-box" style="background-color: #505e5f;">
                    <div class="third-text-box  box-tabel">
                        <div class="box-tabel-cell">
                            <h2 class="wow fadeIn" data-wow-duration="0.3s" data-wow-delay="0.6s">
                                <a href="<?php echo get_permalink(908) ?>">Essentials</a>
                            </h2>
                            <h3 class="wow fadeIn" data-wow-duration="0.4s" data-wow-delay="0.8s"><a href="<?php echo get_permalink(908)
                                                                                                            ?>">SS 25
                                </a>
                            </h3>
                            <div class="arrow-box-icon wow fadeIn" data-wow-duration="0.5s" data-wow-delay="1s">
                                <a href="<?php echo get_permalink(908) ?>">
                                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/white-right-arrow.png" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>


            <div class="col span_4">
                <div class="sec-banner-wrap">
                    <div class="sec-banner-box" style="background:url(<?php echo site_url() ?>/assets/ss-25-graceful.png);background-size: cover;background-repeat: no-repeat;">
                        <a href="<?php echo get_permalink(910) ?>"><img src="<?php echo site_url() ?>/assets/ss-25-graceful.png" alt=""></a>
                    </div>
                    <div class="third-banner-box" style="background-color: #b05a7a;">
                        <div class="third-text-box  box-tabel">
                            <div class="box-tabel-cell">
                                <h2 class="wow fadeIn" data-wow-duration="0.3s" data-wow-delay="0.6s">
                                    <a href="<?php echo get_permalink(910) ?>">Graceful Hues</a>
                                </h2>
                                <h3 class="wow fadeIn" data-wow-duration="0.4s" data-wow-delay="0.8s"><a href="<?php echo get_permalink(910)
                                                                                                                ?>"> SS
                                        2025 </a>
                                </h3>
                                <div class="arrow-box-icon wow fadeIn" data-wow-duration="0.5s" data-wow-delay="1s">
                                    <a href="<?php echo get_permalink(910) ?>">
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
                    <div class="sec-banner-box" style="background:url(<?php echo site_url() ?>/assets/ss-25-kamicia.png);background-size: cover;background-repeat: no-repeat;">
                        <a href="<?php echo get_permalink(916) ?>"><img src="<?php echo site_url() ?>/assets/ss-25-kamicia.png" alt=""></a>
                    </div>
                    <div class="third-banner-box" style="background-color: #f67f62;">
                        <div class="third-text-box  box-tabel">
                            <div class="box-tabel-cell">
                                <h2 class="wow fadeIn" data-wow-duration="0.3s" data-wow-delay="0.6s">
                                    <a href="<?php echo get_permalink(916) ?>">Kamicia</a>
                                </h2>
                                <h3 class="wow fadeIn" data-wow-duration="0.4s" data-wow-delay="0.8s"><a href="<?php echo get_permalink(916)
                                                                                                                ?>"> SS
                                        2025 </a>
                                </h3>
                                <div class="arrow-box-icon wow fadeIn" data-wow-duration="0.5s" data-wow-delay="1s">
                                    <a href="<?php echo get_permalink(916) ?>">
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
                    <div class="sec-banner-box" style="background:url(<?php echo site_url() ?>/assets/ss-25-novel.png);background-size: cover;background-repeat: no-repeat;">
                        <a href="<?php echo get_permalink(912) ?>"><img src="<?php echo site_url() ?>/assets/ss-25-novel.png" alt=""></a>
                    </div>
                    <div class="third-banner-box" style="background-color: #1363df;">
                        <div class="third-text-box  box-tabel">
                            <div class="box-tabel-cell">
                                <h2 class="wow fadeIn" data-wow-duration="0.3s" data-wow-delay="0.6s">
                                    <a href="<?php echo get_permalink(912) ?>">Novel Shift</a>
                                </h2>
                                <h3 class="wow fadeIn" data-wow-duration="0.4s" data-wow-delay="0.8s"><a href="<?php echo get_permalink(912)
                                                                                                                ?>"> SS
                                        2025 </a>
                                </h3>
                                <div class="arrow-box-icon wow fadeIn" data-wow-duration="0.5s" data-wow-delay="1s">
                                    <a href="<?php echo get_permalink(912) ?>">
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
                    <div class="sec-banner-box" style="background:url(<?php echo site_url() ?>/assets/ss-25-travel.png);background-size: cover;background-repeat: no-repeat;">
                        <a href="<?php echo get_permalink(914) ?>"><img src="<?php echo site_url() ?>/assets/ss-25-travel.png" alt=""></a>
                    </div>
                    <div class="third-banner-box" style="background-color: #c69749;">
                        <div class="third-text-box  box-tabel">
                            <div class="box-tabel-cell">
                                <h2 class="wow fadeIn" data-wow-duration="0.3s" data-wow-delay="0.6s">
                                    <a href="<?php echo get_permalink(914) ?>">Timeless Elegance</a>
                                </h2>
                                <h3 class="wow fadeIn" data-wow-duration="0.4s" data-wow-delay="0.8s"><a href="<?php echo get_permalink(914)
                                                                                                                ?>"> SS
                                        2025 </a>
                                </h3>
                                <div class="arrow-box-icon wow fadeIn" data-wow-duration="0.5s" data-wow-delay="1s">
                                    <a href="<?php echo get_permalink(914) ?>">
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