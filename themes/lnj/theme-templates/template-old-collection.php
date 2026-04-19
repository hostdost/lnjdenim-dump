<?php
/*
*Template Name: Template old Collection depricated
*/
?>
<?php get_header('collection'); ?>
<!-- ****** Inner Page Banner Start ******-->
<section class="inner-banner-block-section">
    <div class="container">
        <div class="row" style="">
            <div class="col span_12">
                <div class="">
                    <?php if (!isMobile()) { ?>
                        <img src="<?php echo site_url(); ?>/assets/aw24-fi-banner.png" alt="">
                    <?php } ?>
                    <?php if (isMobile()) { ?>
                        <img src="<?php echo site_url(); ?>/assets/aw24-fi-banner.png" alt="">
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ****** Inner Page Banner End ******-->
<!-- ******  About Block Content  Start ******-->
<section class="about-block-section">
    <div class="container">
        <div class="row">
            <div class="col span_12">
                <div class="main-head">
                    <h1><span>Frenzy Irregularity </span></h1>
                </div>
            </div>
        </div>
    </div>
    <div class="container collection-showcase-bg">

        <div class="row" style="margin: 0;">
            <!-- <img src="http://lnjdenim.in/wp-content/uploads/2023/03/MICS-JULIE-RHYTHM-2-1.png" id="zoom_01" style="display:none"> -->
            <?php if (wp_is_mobile()) { ?>
                <div class="col-12 col-md-6 col-lg-6 col-sm-12 col span_6" style="padding:0 25px 10px 25px; text-align:right;">

                    <img id="zoom_03" class="zoom img-fluid" src="<?php echo site_url('/'); ?>assets/frenzy-irregularity/cora/small/image1.png" data-magnify-src="<?php echo site_url('/'); ?>assets/frenzy-irregularity/cora/large/image1.png" />

                    <div class="row" id="gallery_01" style="border:1px solid #ccc">
                        <div class="col-4" style="border-right:1px solid #ccc">
                            <a id="aimg_1" href="#" data-image="<?php echo site_url('/'); ?>assets/frenzy-irregularity/cora/small/image1.png" data-zoom-image="<?php echo site_url('/'); ?>iassets/frenzy-irregularity/cora/large/image1.png">
                                <img id="img_01" class="img-fluid" src="<?php echo site_url('/'); ?>assets/frenzy-irregularity/cora/thumb/image1.png" />
                            </a>
                        </div>
                        <div class="col-4">
                            <a id="aimg_2" href="#" data-image="<?php echo site_url('/'); ?>assets/frenzy-irregularity/cora/small/image2.png" data-zoom-image="<?php echo site_url('/'); ?>assets/frenzy-irregularity/cora/large/image2.png">
                                <img id="img_02" class="img-fluid" src="<?php echo site_url('/'); ?>assets/frenzy-irregularity/cora/thumb/image2.png" />
                            </a>
                        </div>
                        <div class="col-4" style="border-left:1px solid #ccc">
                            <a id="aimg_3" href="#" data-image="<?php echo site_url('/'); ?>assets/frenzy-irregularity/cora/small/image3.png" data-zoom-image="<?php echo site_url('/'); ?>assets/frenzy-irregularity/cora/large/image3.png">
                                <img id="img_03" class="img-fluid" src="<?php echo site_url('/');
                                                                        ?>assets/frenzy-irregularity/cora/thumb/image3.png" />
                            </a>
                        </div>

                    </div>
                    <script>
                        jQuery(document).ready(function() {
                            $('#aimg_1').on({
                                'click': function() {
                                    $('#zoom_03').attr('src', '<?php echo site_url('/'); ?>assets/frenzy-irregularity/cora/small/image1.png');
                                    $('#zoom_03').attr('data-magnify-src', '<?php echo site_url('/'); ?>assets/frenzy-irregularity/cora/large/image1.png');
                                    $('.zoom').magnify();

                                }
                            });
                            $('#aimg_2').on({
                                'click': function() {
                                    $('#zoom_03').attr('src', '<?php echo site_url('/'); ?>assets/frenzy-irregularity/cora/small/image2.png');
                                    $('#zoom_03').attr('data-magnify-src', '<?php echo site_url('/'); ?>assets/frenzy-irregularity/cora/large/image2.png');
                                    $('.zoom').magnify();

                                }
                            });
                            $('#aimg_3').on({
                                'click': function() {
                                    $('#zoom_03').attr('src', '<?php echo site_url('/'); ?>assets/frenzy-irregularity/cora/small/image3.png');
                                    $('#zoom_03').attr('data-magnify-src', '<?php echo site_url('/'); ?>assets/frenzy-irregularity/cora/large/image3.png');
                                    $('.zoom').magnify();

                                }
                            });
                        });
                    </script>



                    <script>
                        jQuery(document).ready(function() {
                            // Initiate magnification powers
                            $('.zoom').magnify({
                                afterLoad: function() {
                                    console.log('Magnification powers activated!');
                                }
                            });
                        });
                    </script>

                </div>
            <?php } else { ?>
                <div class="col-12 col-md-6 col-lg-6 col-sm-12 col span_6" style="padding:0 25px 75px 25px; text-align:right;">

                    <img id="zoom_03" class="img-fluid" src="<?php echo site_url('/'); ?>assets/frenzy-irregularity/cora/small/image1.png" data-zoom-image=" <?php echo site_url('/'); ?>assets/frenzy-irregularity/cora/large/image1.png" />

                    <div class="row" id="gallery_01" style="border:1px solid #ccc">
                        <div class="col-4" style="border-right:1px solid #ccc">
                            <a href="#" data-image="<?php echo site_url('/'); ?>assets/frenzy-irregularity/cora/small/image1.png"> <img id="img_01" class="img-fluid" src="<?php echo site_url('/'); ?>assets/frenzy-irregularity/cora/thumb/image1.png" />
                            </a>
                        </div>
                        <div class="col-4"><a href="#" data-image="<?php echo site_url('/'); ?>assets/frenzy-irregularity/cora/small/image2.png"><img id="img_01" class="img-fluid" src="<?php echo site_url('/'); ?>assets/frenzy-irregularity/cora/thumb/image2.png" />
                            </a></div>
                        <div class="col-4" style="border-left:1px solid #ccc">
                            <a href="#" data-image="<?php echo site_url('/'); ?>assets/frenzy-irregularity/cora/small/image3.png" data-zoom-image="<?php echo site_url('/'); ?>assets/frenzy-irregularity/cora/large/image3.png">
                                <img id="img_01" class="img-fluid" src="<?php echo site_url('/');
                                                                        ?>assets/frenzy-irregularity/cora/thumb/image3.png" />
                            </a>
                        </div>

                    </div>

                    <script type="text/javascript">
                        jQuery(document).ready(function() {
                            $("#zoom_03").ezPlus({
                                gallery: 'gallery_01',
                                cursor: 'pointer',
                                galleryActiveClass: "active",
                                imageCrossfade: true,
                                loadingIcon: "<?php echo site_url('/'); ?>images/spinner.gif"
                            });

                            /*$("#zoom_03").bind("click", function(e) {
                                var ez = $('#zoom_03').data('ezPlus');
                                ez.closeAll(); //NEW: This function force hides the lens, tint and window
                                $.fancybox(ez.getGalleryList());
                                return false;
                            });*/

                        });
                    </script>

                </div>
            <?php } ?>
            <div class="col-12 col-md-6 col-lg-6 col-sm-12 col span_6" id="proInfo" style="min-height:300px; padding: 75px 50px 75px 0">
                <!-- border-left:1px solid #333;"> -->
                <h1 class="collection-big-heading <?php if (wp_is_mobile()) {
                                                        echo 'text-navy-blue';
                                                    } ?>">CORA</h1>
                <h2 class="collection-property-heading">A dark blue product for high-street clothing with noticeable
                    injection slub in the. warp
                </h2>
                <table class="collection-attrib-table">
                    <tbody>
                        <tr>
                            <td>Weight / Width</td>
                            <td>:</td>
                            <td>12.00 Oz / 56"</td>
                        </tr>
                        <tr>
                            <td>Weave</td>
                            <td>:</td>
                            <td>3/1 RHT</td>
                        </tr>
                        <tr>
                            <td>Shade</td>
                            <td>:</td>
                            <td>Dark Indigo</td>
                        </tr>
                        <tr>
                            <td>Stretch</td>
                            <td>:</td>
                            <td>22%</td>
                        </tr>
                        <tr>
                            <td>Finish</td>
                            <td>:</td>
                            <td>Millwash</td>
                        </tr>
                        <tr>
                            <td>Shrinkage</td>
                            <td>:</td>
                            <td>-8.0 to -12.0</td>
                        </tr>
                        <tr>
                            <td>Composition</td>
                            <td>:</td>
                            <td>66% Cotton + 22% Feel Fresh <br>+ 10% Viscose + 2% Lycra</td>
                        </tr>
                    </tbody>
                </table>
                <!-- <p>
                    Autumn inspires our use of tweed constructions, brushed fabrics and wool. Colours found outdoors<br>
                    are a substantial influence as we experiment with woven structures that protect from the elements.
                </p> -->
            </div>
        </div>
    </div>
</section>
<?php get_footer('collection'); ?>