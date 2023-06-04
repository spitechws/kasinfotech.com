<footer class="footer-section">
    <div class="container">
        <footer class="pt-5">
            <div class="row">
                <div class="col-md-4">
                    <h5>About Us</h5>
                    <p class="footer-text">
                        <?php echo get_page_component('footer','footer_about'); ?>
                        <a href="<?php echo $site_url; ?>about/">Read more</a>
                    </p>
                </div>

                <div class="col-md-2">
                    <h5>Our Links</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2">
                            <a href="<?php echo $site_url; ?>" class="nav-link p-0 text-muted">Home</a>
                        </li>
                        <li class="nav-item mb-2">
                            <a href="<?php echo $site_url; ?>about/" class="nav-link p-0 text-muted">About</a>
                        </li>
                        <li class="nav-item mb-2">
                            <a href="<?php echo $site_url; ?>terms-conditions/" class="nav-link p-0 text-muted">Term & Condition</a>
                        </li>
                        <li class="nav-item mb-2">
                            <a href="<?php echo $site_url; ?>privacy-policy/" class="nav-link p-0 text-muted">Privacy Policy</a>
                        </li>
                    </ul>
                </div>

                <div class="col-md-3">
                    <h5>Contact Us</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-3">
                            <span>	<?php echo config_item('site_address'); ?></span>
                        </li>
                        <li class="nav-item mb-3">
                            <i class="fas fa-phone-alt me-2"></i>
                            <a href="tel:<?php echo config_item('site_contact'); ?>"><?php echo config_item('site_contact'); ?></a>
                        </li>
                        <li class="nav-item mb-3">
                            <i class="fas fa-envelope me-2"></i>
                            <a href="mailto:<?php echo config_item('site_email'); ?>"><?php echo config_item('site_email'); ?></a>
                        </li>
                    </ul>
                </div>

                <div class="col-md-3">
                    <form method="POST" name="form3" id="form3">
                        <h5>Subscribe to our newsletter</h5>
                        <p>Monthly digest of whats new and exciting from us.</p>
                        <?php show_message(); ?>
                        <div class="d-flex w-100 gap-2">
                            <label for="newsletter1" class="visually-hidden">Email address</label>
                            <?php
                            $email = "";
                            if (isset($_POST['email'])) {
                                $email = $_POST['email'];
                            }
                            ?>
                            <input id="newsletter1" type="text" class="form-control" placeholder="Email address" name="email" id="email" required value="<?php echo $mobile; ?>" data-error="Valid email is required." validate="Required|Email">
                            <!-- <button class="btn btn-primary" type="button">Subscribe</button> -->
                            <input type="button" id="submit" name="submit" class="btn btn-primary" value="Subscribe" onclick="saveSubscriber('form3')" />
                        </div>
                    </form>
                </div>
            </div>

            <div class="d-flex justify-content-between py-4 border-top">
                <p><?php echo config_item('copyright_text'); ?></p>
                <p>
                    <small>Developed by:</small>
                    <a href="https://spitech.in/"><?php site_developed_by(); ?></a>
                </p>
            </div>
        </footer>
    </div>
</footer>
<div id="contact-buttons-bar" class="slide-on-scroll" data-top="200px" style="left: 0px;">
    <?php if (config_item('facebook') != "") { ?>
    <a href="<?php echo config_item('facebook');?>" class="contact-button-link cb-ancor facebook" title="Follow on Facebook"
       target="_blank"><span class="fab fa-facebook-f"></span>
    </a>
    <?php } ?>
    <a href="https://api.whatsapp.com/send?phone=+919754676700&text=Hi"
       class="contact-button-link cb-ancor whatsapp" title="Message on Whatsapp" target="_blank">
        <span class="fab fa-whatsapp"></span>
    </a>
</div>
<button id="btnScrollToTop">
    <i class="fas fa-arrow-up"></i>
</button>
<script src="<?php echo $site_theme; ?>plugins/jquery/jquery-3.6.0.min.js"></script>
<script src="<?php echo $site_theme; ?>plugins/popper/popper.min.js"></script>
<script src="<?php echo $site_theme; ?>plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo $site_theme; ?>plugins/owlcarousel/owl.carousel.min.js"></script>
<script src="<?php echo $site_theme; ?>plugins/venobox/venobox.min.js"></script>
<script src="<?php echo $site_theme; ?>plugins/typed.js/typed.min.js"></script>
<script src="<?php echo $site_theme; ?>plugins/bootstrap-news-box/jquery.bootstrap.newsbox.min.js"></script>
<script src="<?php echo $site_theme; ?>plugins/social-media-buttons/social-media-buttons.js"></script>
<script src="<?php echo $site_theme; ?>plugins/social-media-buttons/social-media.js"></script>

<!-- Main JavaScript -->
<script src="<?php echo $site_theme; ?>js/main.js"></script>
<script src="<?php echo $site_theme; ?>js/validations.js"></script>
</body>
</html>