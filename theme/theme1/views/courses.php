<?php include_once('header.php'); ?>
    <main>
        <section class="main-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-12">
                        <?php include_once('quicklinks.php'); ?>
                    </div>
                    <div class="col-md-9 col-sm-12">
                        <div class="card custom-card mt-4 mb-3">
                            <div class="card-header bg-white">
                                <h6 class="card-title mb-1 mt-1">
                                    <i class="fas fa-info-circle me-3"></i>
                                    Courses
                                </h6>
                                <p class="card-text ms-5">
                                    Sonkar College Offers Various Graduate Courses As Well
                                    As Post Graduate Courses.
                                </p>
                            </div>
                            <div class="card-body p-0">
                                <nav class="courses-nav">
                                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                        <button class="nav-link active" id="ug-tab" data-bs-toggle="tab"
                                                data-bs-target="#ug" type="button" role="tab"
                                                aria-controls="ug" aria-selected="true">
                                            Bachelor Program (UG)
                                        </button>
                                        <button class="nav-link" id="pg-tab" data-bs-toggle="tab"
                                                data-bs-target="#pg" type="button" role="tab"
                                                aria-controls="pg" aria-selected="false">
                                            Masters Program (PG)
                                        </button>
                                        <button class="nav-link" id="degree-tab" data-bs-toggle="tab"
                                                data-bs-target="#degree" type="button" role="tab"
                                                aria-controls="degree" aria-selected="false">
                                            Degree
                                        </button>
                                    </div>
                                </nav>
                                <div class="tab-content p-3" id="nav-tabContent">
                                    <div class="tab-pane fade show active courses-tab-pane" id="ug" role="tabpanel"
                                         aria-labelledby="ug-tab">
                                        <?php if(isset($aCourse) && is_array($aCourse) && !empty($aCourse)) {
                                        foreach($aCourse as $row) {  
                                        if($row->level == 'Under Graduation (UG)') { ?>
                                        <div class="card">
                                            <div class="row g-0">
                                                <div class="col-md-4">
                                                    <?php $attribute = array("class" => "img-fluid rounded-start", "alt" => $row->caption);
                                                    show_image($row->image, $attribute, 'course'); ?>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="card-body">
                                                        <h5 class="card-title">
                                                            <?php echo $row->caption; ?>
                                                        </h5>
                                                        <p class="card-text duration mb-2">Duration : <span><?php echo $row->duration; ?></span>
                                                        </p>
                                                        <p class="card-text level mb-1">Course Level :  <?php echo $row->level; ?></p>
                                                        <p class="card-text">Sonkar College, Bilaspur is offering
                                                            <?php echo $row->caption; ?>.</p>
                                                        <a class="courses-btn me-2" href="<?php echo $site_url; ?>contact/" role="button">For Details</a>
                                                        <a class="whatsapp-btn" href="https://api.whatsapp.com/send?phone=+919754676700&text=Hi" target="_blank"  role="button">
                                                            <i class="fab fa-whatsapp"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } } } else { ?>
                                        <div class="card">
                                            <div class="row g-0">
                                                <div class="col-md-12">
                                                    <div class="card-body">
                                                        <h5 class="card-title text-center">
                                                            No Entries yet.
                                                        </h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
                                    </div>
                                    <div class="tab-pane fade courses-tab-pane" id="pg" role="tabpanel"
                                         aria-labelledby="pg-tab">
                                        <?php if(isset($aCourse) && is_array($aCourse) && !empty($aCourse)) {
                                        foreach($aCourse as $row) {  
                                        if($row->level == 'Post Graduation (PG)') { ?>
                                        <div class="card">
                                            <div class="row g-0">
                                                <div class="col-md-4">
                                                    <?php $attribute = array("class" => "img-fluid rounded-start", "alt" => $row->caption);
                                                    show_image($row->image, $attribute, 'course'); ?>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="card-body">
                                                        <h5 class="card-title">
                                                            <?php echo $row->caption; ?>
                                                        </h5>
                                                        <p class="card-text duration mb-2">Duration : <span><?php echo $row->duration; ?></span>
                                                        </p>
                                                        <p class="card-text level mb-1">Course Level :  <?php echo $row->level; ?></p>
                                                        <p class="card-text">Sonkar College, Bilaspur is offering
                                                            <?php echo $row->caption; ?>.</p>
                                                        <a class="courses-btn me-2" href="<?php echo $site_url; ?>contact/" role="button">For Details</a>
                                                        <a class="whatsapp-btn" href="https://api.whatsapp.com/send?phone=+919754676700&text=Hi" target="_blank"  role="button">
                                                            <i class="fab fa-whatsapp"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } } } else { ?>
                                        <div class="card">
                                            <div class="row g-0">
                                                <div class="col-md-12">
                                                    <div class="card-body">
                                                        <h5 class="card-title text-center">
                                                            No Entries yet.
                                                        </h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
                                    </div>
                                    <div class="tab-pane fade courses-tab-pane" id="degree" role="tabpanel"
                                         aria-labelledby="degree-tab">
                                        <?php if(isset($aCourse) && is_array($aCourse) && !empty($aCourse)) {
                                        foreach($aCourse as $row) {  
                                        if($row->level == 'Degree') { ?>
                                        <div class="card">
                                            <div class="row g-0">
                                                <div class="col-md-4">
                                                    <?php $attribute = array("class" => "img-fluid rounded-start", "alt" => $row->caption);
                                                    show_image($row->image, $attribute, 'course'); ?>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="card-body">
                                                        <h5 class="card-title">
                                                            <?php echo $row->caption; ?>
                                                        </h5>
                                                        <p class="card-text duration mb-2">Duration : <span><?php echo $row->duration; ?></span>
                                                        </p>
                                                        <p class="card-text level mb-1">Course Level :  <?php echo $row->level; ?></p>
                                                        <p class="card-text">Sonkar College, Bilaspur is offering
                                                            <?php echo $row->caption; ?>.</p>
                                                        <a class="courses-btn me-2" href="<?php echo $site_url; ?>contact/" role="button">For Details</a>
                                                        <a class="whatsapp-btn" href="https://api.whatsapp.com/send?phone=+919754676700&text=Hi" target="_blank"  role="button">
                                                            <i class="fab fa-whatsapp"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } } } else { ?>
                                        <div class="card">
                                            <div class="row g-0">
                                                <div class="col-md-12">
                                                    <div class="card-body">
                                                        <h5 class="card-title text-center">
                                                            No Entries yet.
                                                        </h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
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