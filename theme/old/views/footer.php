<!--Footer Alanı-->
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-lg-4">
                <div class="logo ">
                    <img style="border: 2px solid white;" src="<?php echo $site_theme; ?>images/logo.png">
                </div>
                <!-- end logo -->
                <div class="footer-info ">
                    <div class="location">
                        <div class="row">
                            <div class="col-md-1">
                                <!-- <i class="flaticon-pin iconpfooter1 "></i> -->
                            </div>
                            <div class="col-md-11">

                                <p style="margin-right: 10px;"><?php echo config_item('site_address') ?>
                            </div>
                        </div>

                    </div>

                    </p>
                    <p class="fic"><i class="flaticon-call iconpfooter2 "></i> <a style="color: white; margin-left: 10px; text-decoration: none;" href="tel:<?php echo config_item('site_contact') ?>"> <?php echo config_item('site_contact') ?></a></p><br>
                    <p><i class="flaticon-email iconpfooter3 "></i> <a style="color: white;margin-left: 10px; text-decoration: none;" href=" mailto:<?php echo config_item('site_email') ?>"><?php echo config_item('site_email') ?></a></p><br>
                </div>
                <!-- end footer-info -->
                <ul class="footer-social " style="    margin-top: -20px;">
                    <li><a target="_blank" href="<?php echo config_item('facebook'); ?>"><i class="flaticon-facebook-1 iconsociaf"></i></a></li>
                    <li><a target="_blank" href="<?php echo config_item('instagram'); ?>"><i class="flaticon-instagram-1 iconsociaf"></i></a></li>
                    <li><a target="_blank" href="<?php echo config_item('twitter'); ?>"><i class="flaticon-twitter-1 iconsociaf"></i></a></li>
                </ul>
            </div>
            <!-- end col-3 -->
            <div class="col-lg-3  col-sm-6">
                <h6 class="widget-title">Services</h6>
                <div class="footer-menu">
                    <div class="menu-services-container">
                        <ul id="menu-services" class="menu">
                            <?php
                            if (!empty($aService) && is_array($aService)) {
                                foreach ($aService as $row) {
                                    $url = base_url() . 'service/' . $row->slug;
                            ?>
                                    <li><a href="<?php echo $url ?>"><?php echo $row->name ?></a></li>
                            <?php
                                }
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- end col-4 -->
            <div class="col-lg-3  col-sm-6">
                <h6 class="widget-title">Products</h6>
                <div class="footer-menu">
                    <div class="menu-services-container">
                        <ul id="menu-services" class="menu">
                            <?php
                            if (!empty($aProductList) && is_array($aProductList)) {
                                foreach ($aProductList as $row) {
                                    $url = base_url() . 'products/' . $row->slug;
                            ?>
                                    <li><a href="<?php echo $url ?>"><?php echo $row->name ?></a></li>
                            <?php
                                }
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- end col-2 -->
            <div class="col-lg-3 col-sm-6">
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
<script src='<?php echo $site_theme; ?>wp-includes/js/dist/vendor/wp-polyfill-inert.min.js'></script>
<script src='<?php echo $site_theme; ?>wp-includes/js/dist/vendor/regenerator-runtime.min.js'></script>
<script src='<?php echo $site_theme; ?>wp-includes/js/dist/vendor/wp-polyfill.min.js'></script>

<script src='<?php echo $site_theme; ?>wp-content/themes/datax/js/team.js'></script>
<script src='<?php echo $site_theme; ?>wp-content/themes/datax/js/jquery.min.js'></script>
<script src='<?php echo $site_theme; ?>wp-content/themes/datax/js/fancybox.min.js'></script>
<script src='<?php echo $site_theme; ?>wp-content/themes/datax/js/swiper.min.js'></script>
<script src='<?php echo $site_theme; ?>wp-content/themes/datax/js/odometer.min.js'></script>
<script src='<?php echo $site_theme; ?>wp-content/themes/datax/js/wow.min.js'></script>
<script src='<?php echo $site_theme; ?>wp-content/themes/datax/js/scripts.js'></script>
<script src='<?php echo $site_theme; ?>wp-content/themes/datax/js/3d.jquery.js'></script>
<script src='<?php echo $site_theme; ?>wp-content/themes/datax/js/yukari-cik.js'></script>
<script src='<?php echo $site_theme; ?>wp-content/themes/datax/js/tabs.js'></script>
<script src='<?php echo $site_theme; ?>wp-content/themes/datax/custom.js'></script>
<script src='<?php echo $site_theme; ?>bootstrap-4.5.3/js/bootstrap.bundle.js'></script>

<script>
    var url = 'https://wati-integration-service.clare.ai/ShopifyWidget/shopifyWidget.js?95951';
    var s = document.createElement('script');
    s.type = 'text/javascript';
    s.async = true;
    s.src = url;
    var options = {
        "enabled": true,
        "chatButtonSetting": {
            "backgroundColor": "#4dc247",
            "ctaText": "",
            "borderRadius": "25",
            "marginLeft": "0",
            "marginBottom": "20",
            "marginRight": "20",
            "position": "left"
        },
        "brandSetting": {
            "brandName": "KAS INFO TECH",
            "brandSubTitle": "Typically replies within a day",
            "brandImg": "view-source:",
            "welcomeText": "Hi there!\nHow can I help you?",
            "messageText": "Hello, I have a question about",
            "backgroundColor": " #502900",
            "ctaText": "Start Chat",
            "borderRadius": "25",
            "autoShow": false,
            "phoneNumber": "+916300873412"
        },

    };
    s.onload = function() {
        CreateWhatsappChatWidget(options);
    };
    var x = document.getElementsByTagName('script')[0];
    x.parentNode.insertBefore(s, x);
</script>
<script>
    $('.product-carousel').carousel({
        //interval: 2000
    })
</script>
</body>

</html>