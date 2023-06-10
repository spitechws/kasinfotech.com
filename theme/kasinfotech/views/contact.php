<?php require_once('header.php') ?>
<?php require_once('menu.php') ?>

<section class="contact" style="margin-top: 20px; margin-bottom:20px">
    <div class="container aos-init aos-animate" data-aos="fade-up">
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
                    <?php get_google_map();?>                    
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