<?php require_once('header.php') ?>
<?php require_once('menu.php') ?>

<section id="contact" class="contact" style="margin-top: 20px; margin-bottom:20px">
    <div class="container aos-init aos-animate" data-aos="fade-up">
        <div class="row">
            <section class="hizmetlerr-bolumu">
                <div class="h-yazi-ozel h-yazi-margin-ozel">
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="sidebar-service wow fadeInLeft" data-wow-delay="0.8s" style="visibility: visible; animation-delay: 0.8s; animation-name: fadeInLeft;">

                                <?php
                                if (!empty($aService) && is_array($aService)) {
                                    foreach ($aService as $row) {
                                        $url = base_url() . 'service/' . $row->slug;
                                ?>
                                        <span class="menu-service menuactive" onclick="location.href='<?php echo $url; ?>';"><a href="<?php echo $url; ?>"><i class="flaticon-right-chevron"></i><?php echo $row->name; ?></a></span>

                                <?php
                                    }
                                }
                                ?>
                            </div>
                            <div class="bosluk3"></div>
                            <div role="form" class="wpcf7" id="wpcf7-f809-o1" lang="en-US" dir="ltr">
                                <div class="screen-reader-response">
                                    <p role="status" aria-live="polite" aria-atomic="true"></p>
                                    <ul></ul>
                                </div>
                                <form id="form1" method="post">
                                    <input type="hidden" name="service_id" value="<?php echo $aContentInfo->id ?>">
                                    <div class="callbackform">
                                        <div style="text-align:center;">
                                            <?php show_message(); ?>
                                        </div>
                                        <h2 class="h2-baslik-popup h-yazi-margin-kucuk">
                                            Leave Your Number<br>
                                        </h2>
                                        <p class="paragraf-popup">
                                            Let's Call You Back
                                        </p>
                                        <div class="form-popup">
                                            <div class="form-popup__grup">
                                                <span><input type="text" name="name" id="name" size="40" class="form-popup__input" placeholder="Full Name"></span><br>
                                                <label for="name" class="form-popup__label"></label>
                                            </div>
                                            <div class="form-popup__grup">
                                                <span data-name="email">
                                                    <input type="email" name="email" id="email" size="40" class="form-popup__input" placeholder="Email Address"></span><br>
                                                <label for="email" class="form-popup__label"></label>
                                            </div>
                                            <div class="form-popup__grup">
                                                <span>
                                                    <input type="text" name="mobile" id="mobile" size="40" class="form-popup__input" placeholder="Phone Number"></span><br>
                                                <label for="text-661" class="form-popup__label"></label>
                                            </div>
                                            <div class="form-popup__grup">
                                                <div class="or">
                                                    <input type="submit" name="submit" value="Submit Form →" class="has-spinner custom-button12">
                                                </div>
                                            </div>
                                            <p><br>
                                            </p>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-8 service">
                            <div class="galeri" style="visibility: visible; animation-delay: 0.7s; animation-name: fadeInRight;">
                                <?php show_image($aContentInfo->image, ['class' => 'galeri__gorsel galeri__gorsel--3'], 'service'); ?>

                            </div>
                            <div class="details">
                                <?php echo $aContentInfo->description; ?>
                                <p><b>Demo URL</b>: <a style="color:blue;" target="_blank" href="<?php echo $aContentInfo->demo_url?>">Click Here</a> </p>
                                <p><b>Username</b>: <?php echo $aContentInfo->username?> </p>
                                <p><b>Password</b>: <?php echo $aContentInfo->password?> </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</section>
<?php require_once('footer.php') ?>