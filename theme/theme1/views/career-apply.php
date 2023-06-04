<?php include_once('header.php'); ?>
    <main>
        <section class="main-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-12">
                        <?php include_once('quicklinks.php'); ?>
                    </div>
                    <div class="col-md-9 col-sm-12">
                        <div class="card message-card mt-4 mb-3">
                            <div class="card-header bg-white">
                                <h6 class="card-title mb-1 mt-1">
                                    <i class="fas fa-info-circle me-3"></i>
                                    Recruitment
                                </h6>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="application">
                                            <h3><?php echo $aCareer->job_title; ?></h3>
                                            <div class="application-details">
                                                <?php if (isset($aCareer->posts) && !empty($aCareer->posts)) { ?>
                                                    <p class="application-post"><strong>No. of Post:</strong> <?php echo $aCareer->posts; ?></p>
                                                <?php } ?>
                                                <?php if (isset($aCareer->salary) && $aCareer->salary > 0) { ?>
                                                    <p class="application-salary"><strong>Salary:</strong> Rs. <?php echo salary()[$aCareer->salary]; ?></p>
                                                <?php } ?> 
                                                <?php if (isset($aCareer->job_description) && !empty($aCareer->job_description)) { ?>
                                                    <div class="application-description">
                                                        <p><strong>Job Details :</strong></p>
                                                        <p><?php echo $aCareer->job_description; ?></p>
                                                    </div>
                                                <?php } ?>
                                                <?php if (isset($aCareer->hr_contact) && !empty($aCareer->hr_contact)) { ?>
                                                    <p class="application-contact-hr"><strong>HR:</strong> <?php echo $aCareer->hr_contact;?></p>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="section-title">
                                            <h3>Share Your Details</h3>
                                            <p>Fields marked with asterisk (*) are mandatory</p>
                                            <form method="POST" name="form16" enctype="multipart/form-data" id="form16" class="xs-form">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <?php
                                                        $name = "";
                                                        if (isset($_POST['name'])) {
                                                            $name = $_POST['name'];
                                                        }
                                                        ?>
                                                        <input type="text" id="name" name="name" validate="Required"   required value="" class="form-control" placeholder="Enter your name *" required
                                                               data-error="Your Name is required.">
                                                    </div>
                                                    <br>
                                                    <div class="col-md-12">
                                                        <?php
                                                        $email = "";
                                                        if (isset($_POST['email'])) {
                                                            $email = $_POST['email'];
                                                        }
                                                        ?>
                                                        <input type="email" class="form-control invaild"
                                                               placeholder="Enter your email *" id="email" name="email" validate="Required|Email"   required value="<?php echo $email; ?>">
                                                    </div>
                                                    <br>
                                                    <div class="col-md-12">
                                                        <?php
                                                        $mobile = "";
                                                        if (isset($_POST['mobile'])) {
                                                            $mobile = $_POST['mobile'];
                                                        }
                                                        ?>
                                                        <input type="text" class="form-control" placeholder="Enter your mobile number *"
                                                               data-error="Mobile Number is required." id="mobile" name="mobile" validate="Required|Mobile" required value="<?php echo $mobile; ?>">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <label for="resume">Resume/CV(.pdf) * :</label>
                                                        <input type="file" name="resume" id="resume" class="form-control" accept=".pdf" validate="Required">
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="read-more">
                                                    <input type="hidden" name="submitform" id="submitform" value="submit">
                                                    <input type="hidden" name="career_id" id="career_id" value="<?php echo $aCareer->career_id; ?>"/>
                                                    <input type="button" class="btn btn-success py-3 px-5" value="Apply Now" onclick="formValidate('form16')" />
                                                </div>

                                            </form>
                                            <br>
                                            <?php show_message(); ?>
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