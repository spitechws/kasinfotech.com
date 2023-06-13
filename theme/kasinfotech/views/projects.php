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
                                       
                </div>

            </div>

            <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <?php get_google_map();?> 
            </div>

        </div>

    </div>
</section>

<?php include_once('footer.php') ?>