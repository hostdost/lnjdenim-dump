<?php
/*
*Template Name: AW 25 - Eco Cycle
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
        z-index: 2 !important;
    }

    .error {
        color: red !important;
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
                        <img src="<?php echo site_url(); ?>/assets/aw-25-echo-cycle-banner.png" alt="">
                    <?php } ?>
                    <?php if (isMobile()) { ?>
                        <img src="<?php echo site_url(); ?>/assets/aw-25-echo-cycle-banner.png" alt="">
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
                <div class="customcoverImage" id="play-button" style="height:500px; background: url('<?php echo site_url(); ?>/assets/aw24-fi-banner.png'); background-size: cover; background-position: center center; opacity: 1; transition: opacity 1s ease-in-out; height:500px;">
                    <img src="<?php echo esc_url(get_template_directory_uri());
                                ?>/img/play-video-icon.svg" alt="" class="icon-play" />
                </div>
                <iframe style="width: 100%;" id="video" src="" frameborder="0" allowfullscreen></iframe>
                <!-- https://www.youtube.com/embed/qhjpV9U03tI?enablejsapi=1&html5=1&rel=0 -->

            </div>
        </div>
    </div>

</div>
<!-- ******  Video Block Content  End ******-->
<section class="banner-block-section" style="display: none;">
    <div class="container">
        <div class="row banner-block-box banner-block-box-first">

            <!-- <div class="col span_4 overhidden-box">
                <div class="first-banner-box"
                    style="background:url(<?php echo esc_url(get_template_directory_uri()); ?>/img/img1.jpg);background-size: cover;background-repeat: no-repeat;">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/img1.jpg" alt="">
                </div>
            </div> -->


        </div>


    </div>
</section>
<!-- ******  Banner Block Content  End ******-->

<section class="sping-summer-section winter-2019">
    <div class="container">
        <div class="row">
            <div class="main-head pl-3">
                <h1><span><a href="<?php echo get_the_permalink(1190) ?>">AW 25 ECHO</a></span> > <span><?php echo the_title(); ?></span></h1>
            </div>
        </div>
        <div class="row">
            <?php
            $entries = get_post_meta(1207, 'wiki_test_repeat_group', true);
            //print_r($entries);
            foreach ((array) $entries as $key => $entry) { ?>
                <div class="col-6 col-md-2 col-lg-2 span_2 item wow fadeIn">
                    <div class="sping-summer-wrap">
                        <div class="summer-sping-img" style="background: #bebdc129;">
                            <a target="_blank" href="<?php echo get_the_permalink(1204);?>?cat=1194&article=1207&index=<?php echo $key;?>">
                            

                                <?php if (isset($entry['thumb_collection'])) {
                                    $thumb = esc_html($entry['thumb_collection']);
                                }
                                if (empty($entry['thumb_collection'])) {
                                    $thumb = site_url('/assets/no-img-thumbnail.png');
                                } ?>
                                <img src="<?php echo $thumb; ?>" alt=""></a>

                            <div class="summer-sping-caption">

                                <p>
                                    <a target="_blank" href="<?php echo get_the_permalink(1204);?>?cat=1194&article=1207&index=<?php echo $key;?>">
                                        <?php if (isset($entry['title'])) {
                                            echo $title = esc_html($entry['title']);
                                        } ?>

                                    </a>
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>

<?php get_footer('sw'); ?>