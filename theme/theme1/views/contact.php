<?php include_once('header.php'); ?>
    <main>
        <section class="contact-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-12">
                        <div class="card card-1 link-card mt-4 mb-3">
                            <div class="card-header">
                                <span>
                                    <i class="fas fa-info-circle me-2"></i>
                                    Contact info
                                </span>
                            </div>
                            <div class="card-body">
                                <ul class="nav flex-column p-3">
                                    <li class="nav-item mb-3">
                                        <span>	<?php echo config_item('site_address') ?></span>
                                    </li>
                                    <li class="nav-item mb-3">
                                        <i class="fas fa-phone-alt me-2 icon"></i>
                                        <a href="tel:<?php echo config_item('site_contact') ?>"><?php echo config_item('site_contact') ?></a>
                                    </li>
                                    <li class="nav-item mb-3">
                                        <i class="fas fa-envelope me-2 icon"></i>
                                        <a href="mailto:<?php echo config_item('site_email') ?>"><?php echo config_item('site_email') ?></a>
                                    </li>
                                </ul>
                                <div class="map">
                                    <?php get_google_map(); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-12">
                        <div class="card custom-card mt-4 mb-3">
                            <div class="card-header bg-white">
                                <h6 class="card-title mb-1 mt-1">
                                    <i class="fas fa-info-circle me-3"></i>
                                    Get in touch
                                </h6>
                            </div>
                            <div class="card-body">
                                <?php show_message(); ?>
                                <form method="POST" name="form2" id="form2">
                                    <div class="form-group mb-3">
                                        <label for="name" class="mb-2">Name :</label>
                                        <?php
                                        $name = "";
                                        if (isset($_POST['name'])) {
                                            $name = $_POST['name'];
                                        }
                                        ?>
                                        <input class="form-control" id="name" name="name" type="text"  required value="<?php echo $name; ?>" data-error="Your name is required." validate="Required">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="name" class="mb-2">Email :</label>
                                        <?php
                                        $email = "";
                                        if (isset($_POST['email'])) {
                                            $email = $_POST['email'];
                                        }
                                        ?>
                                        <input class="form-control" id="email" name="email" type="text" required value="<?php echo $email; ?>" data-error="Valid email is required." validate="Required|Email">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="name" class="mb-2">Phone :</label>
                                        <?php
                                        $mobile = "";
                                        if (isset($_POST['mobile'])) {
                                            $mobile = $_POST['mobile'];
                                        }
                                        ?>
                                        <input class="form-control" id="mobile" name="mobile" type="text" required value="<?php echo $mobile; ?>" data-error="Phone number is required." validate="Required|Mobile">
                                    </div>
                                    <div class="form-group message mb-3">
                                        <label for="message" class="mb-2">Message :</label>
                                        <textarea class="form-control" cols="120" name="message" id="message" rows="4" spellcheck="false"></textarea>
                                    </div>
                                    <div class="d-grid gap-2">
                                        <input type="button" id="submit" name="submit" class="btn btn-primary" value="Submit" onclick="saveEnquiry('form2')" />
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