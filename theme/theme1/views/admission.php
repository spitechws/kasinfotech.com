<?php include_once('header.php'); ?>
    <main>
        <section class="contact-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-12">
                        <?php include_once('quicklinks.php'); ?>
                    </div>
                    <div class="col-md-8 col-sm-12">
                        <div class="card custom-card mt-4 mb-3">
                            <div class="card-header bg-white">
                                <h6 class="card-title mb-1 mt-1">
                                    <i class="fas fa-info-circle me-3"></i>
                                    Online Admission
                                </h6>
                            </div>
                            <div class="card-body">
                                <?php show_message(); ?>
                                <form method="POST" name="form4" enctype="multipart/form-data" id="form4">
                                    <div class="form-group mb-3">
                                        <label for="name" class="mb-2">Full Name :</label>
                                        <?php
                                        $name = "";
                                        if (isset($_POST['name'])) {
                                            $name = $_POST['name'];
                                        }
                                        ?>
                                        <input type="text" id="name" name="name" validate="Required"   required value="<?php echo $name; ?>" class="form-control" required
                                       data-error="Your Name is required.">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="course" class="mb-2">Course :</label>
                                        <select name="course" id="course" class="form-control" validate="Required" required data-error="Course is required.">
                                        <option>Select Your Course *</option>
                                        <?php
                                        if (isset($aCourse) && is_array($aCourse) && !empty($aCourse)) {
                                            foreach ($aCourse as $course) {
                                                ?>
                                                <option value="<?php echo $course->course_id; ?>"><?php echo $course->caption; ?></option>
                                            <?php }
                                        }
                                        ?>
                                    </select>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="phone" class="mb-2">Mobile :</label>
                                        <?php
                                        $mobile = "";
                                        if (isset($_POST['mobile'])) {
                                            $mobile = $_POST['mobile'];
                                        }
                                        ?>
                                        <input type="text" class="form-control" data-error="Mobile Number is required." id="mobile" name="mobile" validate="Required" required value="<?php echo $mobile; ?>">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="email" class="mb-2">Email :</label>
                                        <?php
                                        $email = "";
                                        if (isset($_POST['email'])) {
                                            $email = $_POST['email'];
                                        }
                                        ?>
                                        <input type="email" class="form-control" id="email" name="email" validate="Required|Email"   required value="<?php echo $email; ?>">
                                    </div>
                                    <div class="d-grid gap-2">
                                        <input type="hidden" name="submitform" id="submitform" value="submit">
                                        <input type="button" class="btn btn-primary" value="Submit" onclick="formValidate('form4')" />
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
<?php include_once('footer.php'); ?>