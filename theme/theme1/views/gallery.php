<?php include_once('header.php'); ?>
    <main>
        <section class="main-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-12">
                        <?php include_once('quicklinks.php'); ?>
                    </div>
                    <div class="col-md-9 col-sm-12">
                        <?php if (isset($aGallery) && !empty($aGallery)) {
                        foreach ($aGallery as $row) { ?>
                        <div class="card gallery-card mt-4 mb-4">
                            <div class="card-header bg-white">
                                <h6 class="card-title mb-1 mt-1">
                                    <i class="fas fa-images me-3"></i>
                                    <?php echo $row->title; ?>
                                </h6>
                            </div>
                            <div class="card-body">
                                <?php $aImage = $row->aImage;
                                if (isset($aImage) && !empty($aImage)) { ?>
                                <div class="row">
                                    <?php foreach ($aImage as $image) {
                                    $image_url = media_url($image->image, 'gallery'); ?>
                                    <div class="col-md-4 col-sm-12 mb-3">
                                        <div class="about-img">
                                            <a href="<?php echo $image_url; ?>" title="<?php echo $image->title; ?>" class="venobox"
                                               data-gall="myGallery">
                                                <?php $attribute = array("class" => "img-fluid image mb-2", "alt" => $image->title);
                                                show_image($image->image, $attribute, 'gallery'); ?>
                                                <div class="middle">
                                                    <i class="fas fa-search"></i>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <?php } ?>
                                </div>
                            <?php } ?>
                            </div>
                        </div>
                    <?php } } else { ?>
                        <div class="card gallery-card mt-4 mb-4">
                            <div class="card-header bg-white">
                                <h6 class="card-title mb-1 mt-1">
                                    <i class="fas fa-images me-3"></i>
                                   No entries yet.
                                </h6>
                            </div>
                        </div>
                    <?php } ?>
                    </div>
                </div>
            </div>
        </section>
    </main>
<?php include_once('footer.php'); ?>