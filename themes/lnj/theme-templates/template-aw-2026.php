<?php
/*
*Template Name: Template AW 2026
*/
?>
<?php
get_header('sw');
?>


<style>
    .third-banner-box {
        background: #5BB35A;
        opacity: 0.9;
    }

    .modal-backdrop {
        display: none !important;
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
                        <img src="<?php echo site_url(); ?>/assets/aw26-banner.jpg" alt="">
                    <?php } ?>
                    <?php if (isMobile()) { ?>
                        <img src="<?php echo site_url(); ?>/assets/aw26-banner.jpg" alt="">
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
                <div class="customcoverImage" id="play-button"
                    style="height:500px; background: url('<?php echo site_url(); ?>/assets/aw26-banner.png'); background-size: cover; background-position: center center; opacity: 1; transition: opacity 1s ease-in-out; height:500px;">
                    <img src="<?php echo esc_url(get_template_directory_uri());
                                ?>/img/play-video-icon.svg" alt="" class="icon-play" />
                </div>
                <iframe style="width: 100%;" id="video" src="" frameborder="0" enablejsapi="1"
                    origin="http://lnjdenim.in" allowfullscreen></iframe>
                <!-- https://www.youtube.com/embed/qhjpV9U03tI?enablejsapi=1&html5=1&rel=0 -->

            </div>
        </div>
    </div>

</div>
<!-- ******  Video Block Content  End ******-->
<section class="banner-block-section">
    <div class="container">
        <div class="row banner-block-box banner-block-box-first" style="background-color: #888888; padding:25px;">
            <div class="col-md-4 col-12" style="margin: 0 auto;">

                <div class="sec-banner-wrap">
                    <div class="sec-banner-box"
                        style="background:url(https://lnjdenim.in/assets/aw26-book-thumb.png);background-size: cover;background-repeat: no-repeat;">
                        <a href="#" data-toggle="modal" data-target="#modal-default"><img
                                src="https://lnjdenim.in/assets/aw26-book-thumb.png" alt=""></a>
                    </div>
                    <div class="third-banner-box" style="background-color: #243e42;">
                        <div class="third-text-box  box-tabel">
                            <div class="box-tabel-cell">
                                <h2 class="wow fadeIn" data-wow-duration="0.3s" data-wow-delay="0.6s"
                                    style="visibility: visible; animation-duration: 0.3s; animation-delay: 0.6s; animation-name: fadeIn;">
                                    <a href="#" data-toggle="modal" data-target="#modal-default">GLIDE AW26</a>
                                </h2>
                                <h3 class="wow fadeIn" data-wow-duration="0.4s" data-wow-delay="0.8s"
                                    style="visibility: visible; animation-duration: 0.4s; animation-delay: 0.8s; animation-name: fadeIn;">
                                    <a href="#" data-toggle="modal" data-target="#modal-default">
                                    </a>
                                </h3>
                                <div class="arrow-box-icon wow fadeIn" data-wow-duration="0.5s" data-wow-delay="1s"
                                    style="visibility: visible; animation-duration: 0.5s; animation-delay: 1s; animation-name: fadeIn;">
                                    <a href="#" data-toggle="modal" data-target="#modal-default">
                                        <img src="https://lnjdenim.in/wp-content/themes/lnj/img/white-right-arrow.png"
                                            alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
        <div class="row banner-block-box banner-block-box-first">

            <!-- <div class="col span_4 overhidden-box">
                <div class="first-banner-box"
                    style="background:url(<?php echo esc_url(get_template_directory_uri()); ?>/img/img1.jpg);background-size: cover;background-repeat: no-repeat;">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/img1.jpg" alt="">
                </div>
            </div> -->


            <!-- -->
            


        </div>
    </div>
</section>
<!-- ******  Banner Block Content  End ******-->
<?php get_footer('sw'); ?>