<?php include_once('header.php') ?>
<?php include_once('menu.php') ?>

<header class="page-header wow fadeInUp" data-wow-delay="0.5s" data-background="https://garantiwebtasarim.com/wordpress/datax/wp-content/uploads/2022/05/page-header-datax.jpg" style="background: url(&quot;https://garantiwebtasarim.com/wordpress/datax/wp-content/uploads/2022/05/page-header-datax.jpg&quot;); visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
    <div class="container">
        <h2>Contact</h2>
        <div class="bosluk3"></div>
        <p><a href="<?php echo $site_url; ?>" class="headerbreadcrumb">Home</a> <i class="flaticon-right-chevron"></i>Contact</p>
    </div>
    <!-- end container -->
</header>
<section id="contact" class="contact" style="margin-top: 20px; margin-bottom:20px">
    <div class="container aos-init aos-animate" data-aos="fade-up">

        <!-- <div class="section-title" style="text-align: center;padding-top: 47px;">
            <h3>Get In Touch !</h3>

        </div> -->

        <div class="row">

            <div class="col-lg-5 d-flex align-items-stretch">
                <div class="info">
                    <div class="address">
                        <i class="flaticon-pin iconpfooter1 "></i>
                        <h4>Location:</h4>
                        <p><?php echo config_item('site_address') ?></p>
                    </div>

                    <div class="email">
                        <i class="flaticon-email iconpfooter3 "></i>
                        <h4>Email:</h4>
                        <p><?php echo config_item('site_email') ?></p>
                    </div>

                    <div class="phone">
                        <i class="flaticon-call iconpfooter2 "></i>
                        <h4>Call:</h4>
                        <p><?php echo config_item('site_contact') ?></p>
                    </div>

                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3805.346083770503!2d78.40633097483264!3d17.490985183413898!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb91bfb1036ea9%3A0x73b0aa90a342dd18!2s3%2F5%2F43%2F2%2C%20Vivekananda%20Nagar%2C%20Kukatpally%2C%20Hyderabad%2C%20Telangana%20500072!5e0!3m2!1sen!2sin!4v1686304453425!5m2!1sen!2sin" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

            </div>

            <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="name">Your Name</label>
                            <input type="text" name="name" class="form-control" id="name" required="">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">Your Email</label>
                            <input type="mail" class="form-control" name="mail" id="mail" required="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name">Subject</label>
                        <input type="text" class="form-control" name="subject" id="subject" required="">
                    </div>
                    <div class="form-group">
                        <label for="name">Message</label>
                        <textarea class="form-control" name="message" rows="10" required=""></textarea>
                    </div>
                    <div class="my-3">
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Your message has been sent. Thank you!</div>
                    </div>
                    <div class="text-center"><button type="submit">Send Message</button></div>
                </form>
            </div>

        </div>

    </div>
</section>

<?php include_once('footer.php') ?>