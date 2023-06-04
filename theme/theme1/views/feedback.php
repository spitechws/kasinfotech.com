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
                                    Feedback
                                </h6>
                            </div>
                            <div class="card-body">
                                <?php show_message(); ?>
                                <form method="POST" name="form12" enctype="multipart/form-data" id="form12">
                                    <div class="form-group mb-3">
                                        <label for="name" class="mb-2">Name :</label>
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
                                        <label for="name" class="mb-2">Email :</label>
                                        <?php
                                        $email = "";
                                        if (isset($_POST['email'])) {
                                            $email = $_POST['email'];
                                        }
                                        ?>
                                        <input type="email" class="form-control" id="email" name="email" validate="Required|Email"   required value="<?php echo $email; ?>">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="name" class="mb-2">Phone :</label>
                                        <?php
                                        $contact = "";
                                        if (isset($_POST['contact'])) {
                                            $contact = $_POST['contact'];
                                        }
                                        ?>
                                        <input type="text" class="form-control" data-error="Mobile Number is required." id="contact" name="contact" validate="Required" required value="<?php echo $contact; ?>">
                                    </div>
                                    <div class="form-group message mb-3">
                                        <label for="message" class="mb-2">Message :</label>
                                        <textarea class="form-control" name="message" id="message" placeholder="Enter your message here..." rows="4" spellcheck="false" required validate="Required"></textarea>
                                    </div>
                                    <div class="d-grid gap-2">
                                        <input type="hidden" name="submitform" id="submitform" value="submit">
                                        <input type="button" class="btn btn-primary" value="Submit" onclick="formValidate('form12')" />
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