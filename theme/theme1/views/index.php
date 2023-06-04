<?php include_once('header.php'); ?>
    <main>
        <section class="main-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-12">
                        <?php include_once('latestnotification.php'); ?>
                        <?php include_once('quicklinks.php'); ?>
                    </div>

                    <div class="col-md-9 col-sm-12">
                        <?php if (isset($aBanner) && is_array($aBanner) && !empty($aBanner)) { ?>
                        <div class="card mt-4 mb-3">
                            <div class="owl-carousel banner-carousel">
                                <?php foreach ($aBanner as $row) {
                                $image = $site_url . 'media/banner/' . $row->image; ?>
                                <div class="banner-item">
                                    <figure class="banner-figure">
                                        <?php $attribute = array("class" => "img-fluid", "alt" => $row->caption);
                                        show_image($row->image, $attribute, 'banner'); ?>
                                        <figcaption class="banner-figcaption">
                                            <h6><?php echo $row->caption; ?></h6>
                                        </figcaption>
                                    </figure>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                        <?php } ?>
                        <div class="card about-card mt-4 mb-3">
                            <div class="card-header bg-white">
                                <h6 class="card-title mb-1 mt-1">
                                    <i class="fas fa-university me-3"></i>
                                    About <?php echo config_item('site_name'); ?>
                                </h6>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-5 col-sm-12">
                                        <div class="about-img">
                                            <img src="<?php echo $site_theme; ?>images/college-img.jpg" class="img-fluid mb-2"
                                                 alt="college images">
                                        </div>
                                    </div>
                                    <div class="col-md-7 col-sm-12">
                                        <?php echo $cms->page_content; ?>
                                        <a href="<?php echo $site_url; ?>about/" class="btn shadow-none">Read more..</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="card message-card mt-4 mb-3">
                            <div class="card-header bg-white">
                                <h6 class="card-title mb-1 mt-1">
                                    <i class="fas fa-user-tie me-3"></i>
                                    Chairman's Message
                                </h6>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-3 col-sm-12">
                                        <div class="about-img">
                                            <img src="<?php echo $site_theme; ?>images/dummy.jpg" class="img-fluid mb-2"
                                                 alt="college images">
                                        </div>
                                    </div>
                                    <div class="col-md-9 col-sm-12">
                                        <p class="card-text">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum illo illum
                                            mollitia repellendus voluptates. Corporis dolores explicabo facere fugit,
                                            hic incidunt ipsam laborum magni molestias, nihil quam rem reprehenderit
                                            voluptatibus?
                                        </p>
                                        <a href="about.php" class="btn shadow-none">Read more..</a>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <?php if (isset($aGalleryImages) && is_array($aGalleryImages) && !empty($aGalleryImages)) {?>
                        <div class="card gallery-card mt-4 mb-4">
                            <div class="card-header bg-white">
                                <h6 class="card-title mb-1 mt-1">
                                    <i class="fas fa-images me-3"></i>
                                    Our Gallery
                                </h6>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <?php foreach ($aGalleryImages as $data) { 
                                    $image = base_url() . 'media/gallery/' . $data->image; ?>
                                    <div class="col-md-4 col-sm-12 mb-3">
                                        <div class="about-img">
                                            <a href="<?php echo $image; ?>" title="<?php echo $data->title; ?>" class="venobox"
                                               data-gall="myGallery">
                                                <?php $attribute = array("class" => "img-fluid image mb-2", "alt" => $data->title);
                                                show_image($data->image, $attribute, 'gallery'); ?>
                                                <div class="middle">
                                                    <i class="fas fa-search"></i>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                <?php } ?>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                    </div>
                </div>
            </div>
        </section>
    </main>
<?php include_once('footer.php'); ?>