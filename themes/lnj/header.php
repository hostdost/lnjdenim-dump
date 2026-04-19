<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="initial-scale=1.0, width=device-width, user-scalable=no">

    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <link rel="shortcut icon" href="<?php echo esc_url(get_template_directory_uri()); ?>/img/favicon.png">
    <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/css/animate.css" type="text/css">
    <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/js/fancybox/jquery.fancybox.css"
        type="text/css">
    <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/js/slick-js/slick.css"
        type="text/css">
    <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/js/slick-js/slick-theme.css"
        type="text/css">
    <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/css/style.css" type="text/css">
    <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/css/custom.css" type="text/css">
    <!--[if lte IE 9]>
	    <script type="text/javascript" src="<?php echo esc_url(get_template_directory_uri()); ?>/js/respond.min.js"></script>
	    <script type="text/javascript" src="<?php echo esc_url(get_template_directory_uri()); ?>/js/selectivizr.js"></script>
	    <![endif]-->
    <script>
        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-92292860-1', 'auto');
        ga('send', 'pageview');
    </script>
    <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>
    <button id="myFloatingButton" class="floating-button">
        <a href="https://lnjdenim.in/assets/brochure/LNJ_Denim-Booklet_Design_070724.pdf" target="_blank"
            title="Download Brochure">
            <img src="https://lnjdenim.in/assets/brochure/pdf-icon.png" alt="Brochure Icon"
                style="width: 80px; height: 80px;">
            <!-- <span style="display: none;">Download Brochure</span> -->
        </a>
    </button>
    <div class="open-pop" style="display:none">
        <div class="inner-pop">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/VIP-cards3.jpg" alt="">
        </div>
    </div>
    <div class="mobileMenu">
    </div>
    <div class="wrapper">
        <!-- ******  Navigation  Start ******-->
        <nav class="wow fadeInDown">
            <div class="container">
                <div class="row">
                    <div class="col span_1">
                        <div class="nav-center-logo">
                            <div class="nav-logo-text wow fadeInDown" data-wow-delay="0.3s">
                                <a href="<?php echo site_url() ?>"><img
                                        src="<?php echo esc_url(get_template_directory_uri()); ?>/img/logo.png"
                                        alt=""></a>
                            </div>
                        </div>
                    </div>
                    <div class="col span_11 desktop">
                        <div class="top-headSocialicon">
                            <div class="social-footer">
                                <ul>
                                    <li>
                                        <a href="https://www.facebook.com/lnj.denim.7" target="_blank"><img
                                                src="<?php echo site_url(); ?>/wp-content/themes/lnj/img/facebook.png"
                                                alt="Facebook"> </a>
                                    </li>
                                    <li>
                                        <a href="https://www.instagram.com/lnj.denim/" target="_blank"><img
                                                src="<?php echo site_url(); ?>/wp-content/themes/lnj/img/instagram.png"
                                                alt="Instagram"></a>
                                    </li>
                                    <li>
                                        <a href="https://www.linkedin.com/company/lnj-denim/mycompany/"
                                            target="_blank"><img
                                                src="<?php echo site_url(); ?>/wp-content/themes/lnj/img/linkedin.png"
                                                alt="Linked.in"></a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                        <div id="nav-box">
                            <?php
                            wp_nav_menu(array('theme_location' => 'header-menu'));
                            ?>
                        </div>
                    </div>
                </div>

                <div class="mobile">
                    <div id="nav-icon3" class="">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>
        </nav>
        <!-- ******  Navigation  End ******-->


        <style>
            .top-headSocialicon {
                padding-right: 16px;
            }

            .top-headSocialicon .social-footer,
            .top-headSocialicon .social-footer ul {
                text-align: right;
                padding: 0;
                margin: 0;
            }

            .top-headSocialicon .social-footer ul li a {
                display: block;
                padding: 0;
                margin: 0;
            }

            .top-headSocialicon .social-footer ul li a img {
                width: 15px;
                opacity: 1;
                -webkit-filter: unset;
                filter: unset;
                transition: unset;
            }

            .top-headSocialicon .social-footer ul li {
                padding: 6px 2px 0px;
            }

            nav ul li a {
                padding-top: 5px;
            }

            .top-headSocialicon .social-footer ul li a img:hover {
                opacity: 0.8;
            }

            @media only screen and (max-width: 1024px) {
                nav .col.span_11.desktop {
                    display: block;
                    position: relative;
                }

                .top-headSocialicon {
                    position: absolute;
                    right: 41px;
                    top: 12px;
                }

            }

            @media only screen and (max-width: 600px) {
                .top-headSocialicon {
                    position: absolute;
                    right: 41px;
                    top: 2px;
                }

            }
        </style>