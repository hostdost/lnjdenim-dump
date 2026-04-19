<!-- ******  Footer  Section Start ******-->
<footer class="wow fadeInUp">
    <div class="container">
        <div class="row">
            <div class="col span_12">
                <div class="footer-links">
                    <?php
					$arg = array('theme_loaction' => 'secondary-menu');
					wp_nav_menu($arg);
					?>
                </div>
                <div class="social-footer">
                    <p>Follow Us</p>
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
                            <a href="https://www.linkedin.com/company/lnj-denim/mycompany/" target="_blank"><img
                                    src="<?php echo site_url(); ?>/wp-content/themes/lnj/img/linkedin.png"
                                    alt="Linked.in"></a>
                        </li>
                    </ul>
                </div>

                <div class="footer-copright">
                    <p> Copyright 2025, LNJ DENIM, All Rights Reserved
                        <small><a href="https://hostdost.in/" target="_blank">HOSTDOST</a></small>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <style>
    .floating-button {
        position: fixed;
        border: none !important;
        top: 200px;
        /* Adjust as needed */
        left: 20px;
        /* Adjust as needed */
        /* background-color: #007bff; */
        background: transparent;
        /* Example color */
        color: white;
        /* border-radius: 50%; */
        /* For a circular button */
        /* width: 60px;
			height: 60px; */
        display: flex;
        justify-content: center;
        align-items: center;
        /* box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3); */
        z-index: 1000;
        /* Ensure it's above other elements */
        cursor: pointer;


    }

    .floating-button:hover {
        transform: scale(1.1);
        /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
    }
    </style>

    <script>
    window.addEventListener('scroll', function() {
        var button = document.getElementById('myFloatingButton');
        // if (window.pageYOffset > 0) { // Show after scrolling 200px
        // 	button.style.display = 'flex'; // Or 'block'
        // } else {
        // 	button.style.display = 'flex'; // Or 'block'
        // }
    });
    </script>
</footer>
</div>
<!-- ******  Footer  Section End ******-->
<!--include all java script file before closing body tag-->
<script type="text/javascript" src="<?php echo esc_url(get_template_directory_uri()); ?>/js/jquery-2.1.4.min.js">
</script>
<script type="text/javascript"
    src="<?php echo esc_url(get_template_directory_uri()); ?>/js/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="<?php echo esc_url(get_template_directory_uri()); ?>/js/youtube.js"></script>
<script type="text/javascript" src="<?php echo esc_url(get_template_directory_uri()); ?>/js/wow.js"></script>
<script type="text/javascript"
    src="<?php echo esc_url(get_template_directory_uri()); ?>/js/fancybox/jquery.fancybox.pack.js"></script>
<script type="text/javascript" src="<?php echo esc_url(get_template_directory_uri()); ?>/js/slick-js/slick.js"></script>
<script type="text/javascript" src="<?php echo esc_url(get_template_directory_uri()); ?>/js/custom.js?ver=2"></script>
<script type="text/javascript" src="<?php echo esc_url(get_template_directory_uri()); ?>/js/SmoothScroll.js"></script>
<!--included all java script file before closing body tag-->
<a href="javascript:;" id="scrollToTop"> </a>
<?php wp_footer(); ?>
</body>

</html>