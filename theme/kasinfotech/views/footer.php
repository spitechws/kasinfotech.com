<!--Footer Alanı-->
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-lg-4">
                <div class="logo ">
                    <img src="<?php echo $site_theme; ?>images/logo.png">
                </div>
                <!-- end logo -->
                <div class="footer-info ">
                    <p><i class="flaticon-pin iconpfooter1 "></i><?php echo config_item('site_address') ?>

                    </p>
                    <p class="fic"><i class="flaticon-call iconpfooter2 "></i>&nbsp;&nbsp;&nbsp;<?php echo config_item('site_contact') ?></p><br>
                    <p><i class="flaticon-email iconpfooter3 "></i>&nbsp;&nbsp;&nbsp;<?php echo config_item('site_email') ?></p><br>
                </div>
                <!-- end footer-info -->
                <ul class="footer-social ">
                    <li><a target="_blank" href="<?php echo config_item('facebook'); ?>"><i class="flaticon-facebook-1 iconsociaf"></i></a></li>

                    <li><a target="_blank" href="<?php echo config_item('instagram'); ?>"><i class="flaticon-instagram-1 iconsociaf"></i></a></li>

                    <li><a target="_blank" href="<?php echo config_item('twitter'); ?>"><i class="flaticon-twitter-1 iconsociaf"></i></a></li>

                </ul>
            </div>
            <!-- end col-3 -->
            <div class="col-lg-4">
                <h6 class="widget-title">Join Our Newsletter</h6>
                <p class="footerp">
                    Be informed about our services and products. </p>
                <div class="bosluk333"></div>
                <div role="form">
                    <div class="screen-reader-response">
                        <p role="status" aria-live="polite" aria-atomic="true"></p>
                        <ul></ul>
                    </div>
                    <form id="subscriber_now">

                        <div class="form__grup">
                            <span class="wpcf7-form-control-wrap">
                                <input type="email" name="email" size="40" class="form-popup__input" aria-required="true" aria-invalid="false" placeholder="Your Email Address"></span>
                        </div>
                        <div class="form__grup">
                            <input type="submit" value="Subscribe →" class="custom-buttonw1" onclick="subscriberNow()">
                        </div>
                        <div id="subscriber_now_message" aria-hidden="true"></div>
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
                            if (!empty($aService) && is_array($aService)) {
                                foreach ($aService as $row) {
                                    $url = base_url() . 'service/' . $row->slug;
                            ?>
                                    <li><a href="<?php echo $url ?>"><?php echo $row->title ?></a></li>
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
                            <li><a href="<?php echo base_url() ?>about-us">About Us</a></li>
                            <li><a href="<?php echo base_url() ?>contact-us">Contact</a></li>
                            <li><a href="<?php echo base_url() ?>privacy-policy">Privacy Policy</a></li>
                            <li><a href="<?php echo base_url() ?>terms-and-conidtions">Terms and Conditions</a></li>

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