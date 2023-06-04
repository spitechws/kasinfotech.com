<?php include_once('header.php'); ?>
    <main>
        <section class="main-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-12">
                        <?php include_once('quicklinks.php'); ?>
                    </div>
                    <div class="col-md-9 col-sm-12">
                        <div class="card facilities-card mt-4 mb-4">
                            <div class="card-header bg-white">
                                <h6 class="card-title mb-1 mt-1">
                                    <i class="fas fa-images me-3"></i>
                                    Our Facilities
                                </h6>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <?php if(isset($aFacility) && is_array($aFacility) && !empty($aFacility)) { 
                                    foreach($aFacility as $row) { ?>
                                    <div class="col-md-4 col-sm-12 mb-3">
                                        <div class="facilities-img">
                                            <?php $attribute = array("class" => "img-fluid", "alt" => $row->title);
                                                show_image($row->image, $attribute, 'facility'); ?>
                                            <div class="overlay">
                                                <h2><?php echo $row->title; ?></h2>
                                            </div>
                                        </div>
                                    </div>
                                    <?php } } else { ?>
                                    <div class="col-md-12 col-sm-12 mb-3">
                                        <div class="text-center">
                                            <h3>No entries yet.</h3>
                                        </div>
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
<?php include_once('footer.php'); ?>