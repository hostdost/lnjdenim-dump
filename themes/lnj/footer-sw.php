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
                            <a href="https://www.facebook.com/lnj.denim.7" target="_blank"><img src="<?php echo site_url(); ?>/wp-content/themes/lnj/img/facebook.png" alt="Facebook"> </a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/lnj.denim/" target="_blank"><img src="<?php echo site_url(); ?>/wp-content/themes/lnj/img/instagram.png" alt="Instagram"></a>
                        </li>
                        <li>
                            <a href="https://www.linkedin.com/company/lnj-denim/mycompany/" target="_blank"><img src="<?php echo site_url(); ?>/wp-content/themes/lnj/img/linkedin.png" alt="Linked.in"></a>
                        </li>
                    </ul>
                </div>

                <div class="footer-copright">
                    <p> Copyright 2023, LNJ DENIM, All Rights Reserved
                        <small><a href="https://hostdost.in/" target="_blank">HOSTDOST</a></small>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <style>


    </style>

</footer>
</div>
<!-- ******  Footer  Section End ******-->
<!--include all java script file before closing body tag-->
<script type="text/javascript" src="<?php echo esc_url(get_template_directory_uri()); ?>/js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="<?php echo esc_url(get_template_directory_uri()); ?>/js/jquery-migrate-1.2.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>
<script type="text/javascript" src="<?php echo esc_url(get_template_directory_uri()); ?>/js/youtube.js"></script>
<script type="text/javascript" src="<?php echo esc_url(get_template_directory_uri()); ?>/js/wow.js"></script>
<script type="text/javascript" src="<?php echo esc_url(get_template_directory_uri()); ?>/js/fancybox/jquery.fancybox.pack.js"></script>
<script type="text/javascript" src="<?php echo esc_url(get_template_directory_uri()); ?>/js/slick-js/slick.js"></script>
<script type="text/javascript" src="<?php echo esc_url(get_template_directory_uri()); ?>/js/custom.js?ver=2"></script>
<script type="text/javascript" src="<?php echo esc_url(get_template_directory_uri()); ?>/js/SmoothScroll.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
<!--included all java script file before closing body tag-->
<a href="javascript:;" id="scrollToTop"> </a>
<?php wp_footer(); ?>
</body>

</html>