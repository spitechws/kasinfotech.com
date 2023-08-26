<?php require_once('header.php') ?>
<?php require_once('menu.php') ?>
<header class="page-header">
    <div class="container">
        <h2>KAS INFO TECH</h2>
        <div class="bosluk3"></div>
        <p><a href="http://localhost/spitech_project/static_project/kasinfotech.com/" class="headerbreadcrumb">Home</a> <i class="flaticon-right-chevron"></i>KAS INFO TECH</p>
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
                        <h5 class="card-title">Enquiry heare</h5>

                        <!-- Vertical Form -->
                        <form class="row g-3">
                            <div class="col-12">
                                <label for="name" class="form-label">Your Name</label>
                                <input style="height: 40px;" type="text" class="form-control" id="name">
                            </div>
                            <div class="col-12">
                                <label for="mobile" class="form-label">Email</label>
                                <input style="height: 40px;" type="email" class="form-control" id="mobile">
                            </div>
                            <div class="col-12">
                                <label for="mobile" class="form-label">Mobile</label>
                                <input style="height: 40px;" type="text" class="form-control" id="mobile">
                            </div>
                            <div class="col-12">
                                <label for="message" class="form-label">Message</label>
                                <input style="height: 100px;" type="text" class="form-control" id="message">
                            </div>
                            <div class="text-center mt-4">
                                <button type="submit" class="btn btn-primary">Submit</button>

                            </div>
                        </form><!-- Vertical Form -->

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