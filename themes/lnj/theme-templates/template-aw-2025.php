<?php
/*
*Template Name: Template AW 2025
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
                        <img src="<?php echo site_url(); ?>/assets/aw25-banner.png" alt="">
                    <?php } ?>
                    <?php if (isMobile()) { ?>
                        <img src="<?php echo site_url(); ?>/assets/aw25-banner.png" alt="">
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
                <div class="customcoverImage" id="play-button" style="height:500px; background: url('<?php echo site_url(); ?>/assets/aw25-banner.png'); background-size: cover; background-position: center center; opacity: 1; transition: opacity 1s ease-in-out; height:500px;">
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
                    <div class="sec-banner-box" style="background:url(<?php echo site_url() ?>/assets/aw25-azure-depths-thumb.png);background-size: cover;background-repeat: no-repeat;">
                        <a href="<?php echo get_permalink(1192) ?>"><img src="<?php echo site_url() ?>/assets/aw25-azure-depths-thumb.png" alt=""></a>
                    </div>
                </div>

                <div class="third-banner-box" style="background-color: #505e5f;">
                    <div class="third-text-box  box-tabel">
                        <div class="box-tabel-cell">
                            <h2 class="wow fadeIn" data-wow-duration="0.3s" data-wow-delay="0.6s">
                                <a href="<?php echo get_permalink(1192) ?>">Azure Depths</a>
                            </h2>
                            <h3 class="wow fadeIn" data-wow-duration="0.4s" data-wow-delay="0.8s"><a href="<?php echo get_permalink(1192)
                                                                                                            ?>">AW 2025
                                </a>
                            </h3>
                            <div class="arrow-box-icon wow fadeIn" data-wow-duration="0.5s" data-wow-delay="1s">
                                <a href="<?php echo get_permalink(1192) ?>">
                                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/white-right-arrow.png" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>


            <div class="col span_4">
                <div class="sec-banner-wrap">
                    <div class="sec-banner-box" style="background:url(<?php echo site_url() ?>/assets/aw-25-echo-cycle-thumb.png);background-size: cover;background-repeat: no-repeat;">
                        <a href="<?php echo get_permalink(1194) ?>"><img src="<?php echo site_url() ?>/assets/aw-25-echo-cycle-thumb.png" alt=""></a>
                    </div>
                    <div class="third-banner-box" style="background-color: #b05a7a;">
                        <div class="third-text-box  box-tabel">
                            <div class="box-tabel-cell">
                                <h2 class="wow fadeIn" data-wow-duration="0.3s" data-wow-delay="0.6s">
                                    <a href="<?php echo get_permalink(1194) ?>">Eco Cycle</a>
                                </h2>
                                <h3 class="wow fadeIn" data-wow-duration="0.4s" data-wow-delay="0.8s"><a href="<?php echo get_permalink(1194)
                                                                                                                ?>"> AW
                                        2025 </a>
                                </h3>
                                <div class="arrow-box-icon wow fadeIn" data-wow-duration="0.5s" data-wow-delay="1s">
                                    <a href="<?php echo get_permalink(1194) ?>">
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
                    <div class="sec-banner-box" style="background:url(<?php echo site_url() ?>/assets/aw25-essential-echoes-thumb.png);background-size: cover;background-repeat: no-repeat;">
                        <a href="<?php echo get_permalink(1198) ?>"><img src="<?php echo site_url() ?>/assets/aw25-essential-echoes-thumb.png" alt=""></a>
                    </div>
                    <div class="third-banner-box" style="background-color: #f67f62;">
                        <div class="third-text-box  box-tabel">
                            <div class="box-tabel-cell">
                                <h2 class="wow fadeIn" data-wow-duration="0.3s" data-wow-delay="0.6s">
                                    <a href="<?php echo get_permalink(1198) ?>">Essential Echoes</a>
                                </h2>
                                <h3 class="wow fadeIn" data-wow-duration="0.4s" data-wow-delay="0.8s"><a href="<?php echo get_permalink(1198)
                                                                                                                ?>"> AW
                                        2025 </a>
                                </h3>
                                <div class="arrow-box-icon wow fadeIn" data-wow-duration="0.5s" data-wow-delay="1s">
                                    <a href="<?php echo get_permalink(1198) ?>">
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
                    <div class="sec-banner-box" style="background:url(<?php echo site_url() ?>/assets/aw25-resonant-gear-thumb.png);background-size: cover;background-repeat: no-repeat;">
                        <a href="<?php echo get_permalink(1200) ?>"><img src="<?php echo site_url() ?>/assets/aw25-resonant-gear-thumb.png" alt=""></a>
                    </div>
                    <div class="third-banner-box" style="background-color: #1363df;">
                        <div class="third-text-box  box-tabel">
                            <div class="box-tabel-cell">
                                <h2 class="wow fadeIn" data-wow-duration="0.3s" data-wow-delay="0.6s">
                                    <a href="<?php echo get_permalink(1200) ?>">Resonant Gear</a>
                                </h2>
                                <h3 class="wow fadeIn" data-wow-duration="0.4s" data-wow-delay="0.8s"><a href="<?php echo get_permalink(1200)
                                                                                                                ?>"> AW
                                        2025 </a>
                                </h3>
                                <div class="arrow-box-icon wow fadeIn" data-wow-duration="0.5s" data-wow-delay="1s">
                                    <a href="<?php echo get_permalink(1200) ?>">
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
                    <div class="sec-banner-box" style="background:url(<?php echo site_url() ?>/assets/aw25-whisper-touch-thumb.png);background-size: cover;background-repeat: no-repeat;">
                        <a href="<?php echo get_permalink(1202) ?>"><img src="<?php echo site_url() ?>/assets/aw25-whisper-touch-thumb.png" alt=""></a>
                    </div>
                    <div class="third-banner-box" style="background-color: #c69749;">
                        <div class="third-text-box  box-tabel">
                            <div class="box-tabel-cell">
                                <h2 class="wow fadeIn" data-wow-duration="0.3s" data-wow-delay="0.6s">
                                    <a href="<?php echo get_permalink(1202) ?>">Whisper Touch</a>
                                </h2>
                                <h3 class="wow fadeIn" data-wow-duration="0.4s" data-wow-delay="0.8s"><a href="<?php echo get_permalink(1202)
                                                                                                                ?>"> AW
                                        2025 </a>
                                </h3>
                                <div class="arrow-box-icon wow fadeIn" data-wow-duration="0.5s" data-wow-delay="1s">
                                    <a href="<?php echo get_permalink(1202) ?>">
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