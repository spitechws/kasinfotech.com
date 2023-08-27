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
                        <div class="col-lg-12 service">
                            <div class="galeri" style="visibility: visible; animation-delay: 0.7s; animation-name: fadeInRight;">
                                <?php show_image($aContentInfo->image, ['class' => 'galeri__gorsel galeri__gorsel--3'], 'service'); ?>

                            </div>
                            <div class="details">
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