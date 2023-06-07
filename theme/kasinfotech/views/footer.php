<!--Footer Alanı-->
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-lg-4">
                <div class="logo "> <img src="<?php echo $site_theme; ?>wp-content/uploads/2022/05/logo-datax.png" alt="Image"> </div>
                <!-- end logo -->
                <div class="footer-info ">
                    <p><i class="flaticon-pin iconpfooter1 "></i><?php echo config_item('site_address') ?>

                    </p>
                    <p class="fic"><i class="flaticon-call iconpfooter2 "></i>&nbsp;&nbsp;&nbsp;<?php echo config_item('site_contact') ?></p><br>
                    <p><i class="flaticon-email iconpfooter3 "></i>&nbsp;&nbsp;&nbsp;<?php echo config_item('site_email') ?></p><br>
                </div>
                <!-- end footer-info -->
                <ul class="footer-social ">
                    <li><a href="#"><i class="flaticon-facebook-1 iconsociaf"></i></a></li>

                    <li><a href="#"><i class="flaticon-instagram-1 iconsociaf"></i></a></li>

                    <li><a href="#"><i class="flaticon-twitter-1 iconsociaf"></i></a></li>

                </ul>
            </div>
            <!-- end col-3 -->
            <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.6s">
                <h6 class="widget-title">Join Our Newsletter</h6>
                <p class="footerp">
                    Be informed about our services and products. </p>
                <div class="bosluk333"></div>
                <div role="form" class="wpcf7" id="wpcf7-f766-o4" lang="en-US" dir="ltr">
                    <div class="screen-reader-response">
                        <p role="status" aria-live="polite" aria-atomic="true"></p>
                        <ul></ul>
                    </div>
                    <form method="post">

                        <div class="form__grup wow fadeInLeft" data-wow-delay="0.7s">
                            <span class="wpcf7-form-control-wrap" data-name="email-217"><input type="email" name="email-217" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email form-popup__input" aria-required="true" aria-invalid="false" placeholder="Your Email Address"></span>
                        </div>
                        <div class="form__grup wow fadeInUp" data-wow-delay="0.9s">
                            <input type="submit" value="Subscribe →" class="wpcf7-form-control has-spinner wpcf7-submit custom-buttonw1">
                        </div>
                        <div class="wpcf7-response-output" aria-hidden="true"></div>
                    </form>
                </div>
            </div>
            <!-- end col-4 -->
            <div class="col-lg-2 offset-xl-1 col-sm-6">
                <h6 class="widget-title">Services</h6>

                <div class="footer-menu">
                    <div class="menu-services-container">
                        <ul id="menu-services" class="menu">
                            <?php
                            if (!empty($aServices) && is_array($aServices)) {
                                foreach ($aServices as $row) {
                                    $url = base_url() . 'service/' . $row->slug;
                            ?>
                                    <li><a href="<?php echo $url; ?>"><?php echo $title; ?></a></li>
                            <?php
                                }
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- end col-2 -->
            <div class="col-lg-2 col-sm-6">
                <h6 class="widget-title">Quick Links</h6>
                <div class="footer-menu">
                    <div class="menu-quick-links-container">
                        <ul id="menu-quick-links" class="menu">
                            <li><a href="about-us/index.htm">About Us</a></li>
                            <li><a href="projects/index.htm">Projects</a></li>
                            <li><a href="packages/index.htm">Packages</a></li>
                            <li><a href="clients/index.htm">Clients</a></li>
                            <li><a href="blog/index.htm">Blog</a></li>
                            <li><a href="contact/index.htm">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->
    </div>
    <!-- Copyright -->
    <div class="container">
        <div class="row">
            <div class="col-12">
                <p class="copyright"><?php echo config_item('copyright_text') ?></p>
            </div>
        </div>
    </div>
    <div id="top" style="cursor: pointer;">
        <i class="flaticon-chevron icontops"></i>
        <div class="bosluk3"></div>
    </div>
</footer>
<script src='<?php echo $site_theme; ?>wp-includes/js/dist/vendor/wp-polyfill-inert.min.js?ver=3.1.2' id='wp-polyfill-inert-js'></script>
<script src='<?php echo $site_theme; ?>wp-includes/js/dist/vendor/regenerator-runtime.min.js?ver=0.13.11' id='regenerator-runtime-js'></script>
<script src='<?php echo $site_theme; ?>wp-includes/js/dist/vendor/wp-polyfill.min.js?ver=3.15.0' id='wp-polyfill-js'></script>

<script src='<?php echo $site_theme; ?>wp-content/themes/datax/js/team.js?ver=1' id='team-js'></script>
<script src='<?php echo $site_theme; ?>wp-content/themes/datax/js/jquery.min.js?ver=1' id='jquery-js'></script>
<script src='<?php echo $site_theme; ?>wp-content/themes/datax/js/fancybox.min.js?ver=1' id='fancybox-js'></script>
<script src='<?php echo $site_theme; ?>wp-content/themes/datax/js/swiper.min.js?ver=1' id='swiper-js'></script>
<script src='<?php echo $site_theme; ?>wp-content/themes/datax/js/odometer.min.js?ver=1' id='odometer-js'></script>
<script src='<?php echo $site_theme; ?>wp-content/themes/datax/js/wow.min.js?ver=1' id='wow-js'></script>
<script src='<?php echo $site_theme; ?>wp-content/themes/datax/js/scripts.js?ver=1' id='scripts-js'></script>
<script src='<?php echo $site_theme; ?>wp-content/themes/datax/js/3d.jquery.js?ver=1' id='3d-js'></script>
<!-- <script src='<?php echo $site_theme; ?>wp-content/themes/datax/js/pointer.js?ver=1' id='pointer-js'></script> -->
<script src='<?php echo $site_theme; ?>wp-content/themes/datax/js/yukari-cik.js?ver=1' id='yukari-cik-js'></script>
<script src='<?php echo $site_theme; ?>wp-content/themes/datax/js/tabs.js?ver=1' id='tabs-js'></script>
<script src='<?php echo $site_theme; ?>wp-content/themes/datax/custom.js?ver=1' id='custom-js'></script>

</body>

</html>