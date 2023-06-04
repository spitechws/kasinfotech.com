<?php include_once('header.php'); ?>
    <main>
        <section class="main-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-12">
                        <?php include_once('quicklinks.php'); ?>
                    </div>
                    <div class="col-md-9 col-sm-12">
                        <div class="card gallery-card mt-4 mb-4">
                            <div class="card-header bg-white">
                                <h6 class="card-title mb-1 mt-1">
                                    <i class="fas fa-images me-3"></i>
                                    Our Gallery
                                </h6>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4 col-sm-12 mb-3">
                                        <div class="about-img">
                                            <a href="<?php echo $site_theme; ?>images/dummy.jpg" title="Dummy Name" class="venobox"
                                               data-gall="myGallery">
                                                <img src="<?php echo $site_theme; ?>images/dummy.jpg" class="img-fluid image mb-2"
                                                     alt="college images">
                                                <div class="middle">
                                                    <i class="fas fa-search"></i>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-12 mb-3">
                                        <div class="about-img">
                                            <a href="<?php echo $site_theme; ?>images/college-img.jpg" title="Dummy Name" class="venobox"
                                               data-gall="myGallery">
                                                <img src="<?php echo $site_theme; ?>images/college-img.jpg" class="img-fluid image mb-2"
                                                     alt="college images">
                                                <div class="middle">
                                                    <i class="fas fa-search"></i>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-12 mb-3">
                                        <div class="about-img">
                                            <a href="<?php echo $site_theme; ?>images/slider/banner-1.jpg" title="Dummy Name"
                                               class="venobox"
                                               data-gall="myGallery">
                                                <img src="<?php echo $site_theme; ?>images/slider/banner-1.jpg"
                                                     class="img-fluid image mb-2"
                                                     alt="college images">
                                                <div class="middle">
                                                    <i class="fas fa-search"></i>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-12 mb-3">
                                        <div class="about-img">
                                            <a href="<?php echo $site_theme; ?>images/slider/banner-2.jpg" title="Dummy Name"
                                               class="venobox"
                                               data-gall="myGallery">
                                                <img src="<?php echo $site_theme; ?>images/slider/banner-2.jpg"
                                                     class="img-fluid image mb-2"
                                                     alt="college images">
                                                <div class="middle">
                                                    <i class="fas fa-search"></i>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
<?php include_once('footer.php'); ?>