<?php require_once('header.php') ?>
<?php require_once('menu.php') ?>
<header class="page-header">
    <div class="container">
        <h2><?php echo $title;?></h2>
        <div class="bosluk3"></div>
        <p><a href="<?php echo base_url('/')?>" class="headerbreadcrumb">Home</a> <i class="flaticon-right-chevron"></i>Contact Us</p>
    </div>
</header>

</div>
<section class="contact" style="margin-top: 20px; margin-bottom:20px">
    <div class="container aos-init aos-animate" data-aos="fade-up">
        <div class="row">
            <div class="col-lg-6 d-flex align-items-stretch">
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
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Share your requrements with us</h5>
                        <form class="row g-3" method="post" id="form1">
                            <div class="col-12">
                                <label for="name" class="form-label">Full Name <span class="required">*</span></label>
                                <input type="text" class="form-control" id="name" name="name">
                            </div>
                            <div class="col-12">
                                <label for="email" class="form-label">Email <span class="required">*</span></label>
                                <input type="email" class="form-control" id="email" name="email">
                            </div>
                            <div class="col-12">
                                <label for="mobile" class="form-label">Mobile <span class="required">*</span></label>
                                <input type="text" class="form-control" id="mobile">
                            </div>
                            <div class="col-12">
                                <label for="message" class="form-label">Message <span class="required">*</span></label>
                                <textarea class="form-control" rows="5" id="message" name="message"></textarea>
                            </div>
                            <div class="text-center mt-4">
                                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 mt-5 d-flex align-items-stretch" style="height: 400px;">
                <?php get_google_map(); ?>
            </div>
        </div>
    </div>
</section>

<?php include_once('footer.php') ?>