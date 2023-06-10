<?php require_once('header.php') ?>
<?php require_once('menu.php') ?>
<?php require_once('page-header.php') ?>
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
                                        <span class="menu-service menuactive" onclick="location.href='<?php echo $url; ?>';"><a href="<?php echo $url; ?>"><i class="flaticon-right-chevron"></i><?php echo $row->title; ?></a></span>

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
                                <form action="/wordpress/datax/data-strategy/#wpcf7-f809-o1" method="post" class="wpcf7-form init" novalidate="novalidate" data-status="init">
                                    <div style="display: none;">
                                        <input type="hidden" name="_wpcf7" value="809">
                                        <input type="hidden" name="_wpcf7_version" value="5.6">
                                        <input type="hidden" name="_wpcf7_locale" value="en_US">
                                        <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f809-o1">
                                        <input type="hidden" name="_wpcf7_container_post" value="0">
                                        <input type="hidden" name="_wpcf7_posted_data_hash" value="">
                                    </div>
                                    <div class="callbackform wow fadeInUp" data-wow-delay="0.7s" style="visibility: visible; animation-delay: 0.7s; animation-name: fadeInUp;">
                                        <h2 class="h2-baslik-popup h-yazi-margin-kucuk">
                                            Leave Your Number<br>
                                        </h2>
                                        <p class="paragraf-popup">
                                            Let's Call You Back
                                        </p>
                                        <div class="form-popup">
                                            <div class="form-popup__grup">
                                                <span class="wpcf7-form-control-wrap" data-name="text-667"><input type="text" name="text-667" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-popup__input" aria-required="true" aria-invalid="false" placeholder="Full Name"></span><br>
                                                <label for="text-667" class="form-popup__label"></label>
                                            </div>
                                            <div class="form-popup__grup">
                                                <span class="wpcf7-form-control-wrap" data-name="email-217"><input type="email" name="email-217" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email form-popup__input" aria-required="true" aria-invalid="false" placeholder="Email Address"></span><br>
                                                <label for="email-217" class="form-popup__label"></label>
                                            </div>
                                            <div class="form-popup__grup">
                                                <span class="wpcf7-form-control-wrap" data-name="text-661"><input type="text" name="text-661" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-popup__input" aria-required="true" aria-invalid="false" placeholder="Phone Number"></span><br>
                                                <label for="text-661" class="form-popup__label"></label>
                                            </div>
                                            <div class="form-popup__grup">
                                                <div class="or">
                                                    <input type="submit" value="Submit Form →" class="wpcf7-form-control has-spinner wpcf7-submit custom-button12"><span class="wpcf7-spinner"></span>
                                                </div>
                                            </div>
                                            <p><br>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="wpcf7-response-output" aria-hidden="true"></div>
                                </form>
                            </div>
                        </div>




                        <div class="col-lg-8">
                            <div class="bosluk333"></div>
                            <div class="galeri" style="visibility: visible; animation-delay: 0.7s; animation-name: fadeInRight;">
                                <?php show_image($aContentInfo->image, ['class' => 'galeri__gorsel galeri__gorsel--3'], 'service'); ?>

                            </div>
                            <div>
                                <?php echo $aContentInfo->description; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</section>
<?php require_once('footer.php') ?>