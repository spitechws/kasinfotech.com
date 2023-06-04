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
                                    Alumni Registration
                                </h6>
                            </div>
                            <div class="card-body">
                                <?php show_message(); ?>
                                <form method="POST" name="form1" enctype="multipart/form-data" id="form1">
                                    <div class="form-group mb-3">
                                        <label for="name" class="mb-2">Full Name * :</label>
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
                                        <label for="class" class="mb-2">Class * :</label>
                                        <?php
                                        $class = "";
                                        if (isset($_POST['class'])) {
                                            $class = $_POST['class'];
                                        }
                                        ?>
                                        <input type="text" id="class" name="class" validate="Required"   required value="<?php echo $class; ?>" class="form-control" placeholder="eg. Btech CSE" required
                                       data-error="Your class is required.">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="pass" class="mb-2">Year of passing * :</label>
                                        <?php
                                        $year_of_passing = "";
                                        if (isset($_POST['year_of_passing'])) {
                                            $year_of_passing = $_POST['year_of_passing'];
                                        }
                                        ?>
                                        <input class="form-control" id="year_of_passing" name="year_of_passing" type="text" validate="Required"   required value="<?php echo $year_of_passing; ?>" class="form-control"  required
                                       data-error="Year of Passing is required.">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="dob" class="mb-2">Date of Birth * :</label>
                                        <?php
                                        $dob = "";
                                        if (isset($_POST['dob'])) {
                                            $dob = $_POST['dob'];
                                        }
                                        ?>
                                        <input class="form-control" id="dob" name="dob" type="date" validate="Required"   required value="<?php echo $dob; ?>" class="form-control"  required
                                       data-error="Date of Birth is required.">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="phone" class="mb-2">Mobile * :</label>
                                        <?php
                                        $contact = "";
                                        if (isset($_POST['contact'])) {
                                            $contact = $_POST['contact'];
                                        }
                                        ?>
                                        <input type="text" class="form-control" data-error="Mobile Number is required." id="contact" name="contact" validate="Required" required value="<?php echo $contact; ?>">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="email" class="mb-2">Email * :</label>
                                        <?php
                                        $email = "";
                                        if (isset($_POST['email'])) {
                                            $email = $_POST['email'];
                                        }
                                        ?>
                                        <input type="email" class="form-control" id="email" name="email" validate="Required|Email"   required value="<?php echo $email; ?>">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="organization" class="mb-2">Current Organization :</label>
                                        <input class="form-control" id="current_organization" name="current_organization" type="text" value="<?php echo $current_organization; ?>" class="form-control">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="designation" class="mb-2">Current Designation :</label>
                                        <input class="form-control" id="current_designation" name="current_designation" type="text"  value="<?php echo $current_designation; ?>" class="form-control">
                                    </div>

                                    <div class="form-group message mb-3">
                                        <label for="address" class="mb-2">Postal Address :</label>
                                        <textarea class="form-control" cols="120" name="address" id="address" rows="4" spellcheck="false"></textarea>
                                    </div>
                                    <div class="d-grid gap-2">
                                        <input type="hidden" name="submitform" id="submitform" value="submit">
                                        <input type="button" class="btn btn-primary" value="Register" onclick="formValidate('form1')" />
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