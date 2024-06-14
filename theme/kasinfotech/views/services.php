<?php require_once('header.php'); ?>

<header class="header-wrapper section-wrapper">
    <div class="header-main dark">
        <?php require_once('menu.php'); ?>
    </div>
</header>
<?php require_once('side-nav.php'); ?>

<section class="header-spacing section-padding banner-post banner-main">
    <figure class="banner-post-img">
        <picture>
            <source srcset="<?php echo asset(); ?>images/partnership/banner.webp" type="image/webp" />
            <source srcset="<?php echo asset(); ?>images/partnership/banner.jpg?v-2" type="image/jpeg" />
            <img data-src="<?php echo asset(); ?>images/partnership/xbanner.jpg,qv-2.pagespeed.ic.-yRtKqGB-Q.webp" src="<?php echo asset(); ?>images/partnership/xbanner.jpg,qv-2.pagespeed.ic.-yRtKqGB-Q.webp" alt="KAS Pvt LtdPartner" title="KAS Pvt LtdPartner" data-pagespeed-url-hash="1027017593" onload="pagespeed.CriticalImages.checkImageForCriticality(this);" />
        </picture>
    </figure>
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-xl-8">
                <div class="section-title-and-desc text-white-all section-paragraph mb-0">
                    <div class="section-title-block">
                        <h1 class="section-title-text h1-xl lh-normal">Our Services</h1>
                        <h2 class="mb-lg">Hand in Hand, We Will Sail Through The Storm And Explore The Waters Beyond</h2>
                        <p>Take a Look at our Catalouge of Services -> </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="container">
    <div class="row mt-5">
        <div class="col-md-6 text-center mt-5">
            <?php
            $total_services = count($aService->data);
            $half_services = ceil($total_services / 2);


            for ($i = 0; $i < $half_services; $i++) {
                $service = $aService->data[$i];
            ?>
                <h3 class="services-name"><?php echo $service->service_name; ?></h3>
            <?php } ?>
        </div>
        <div class="col-md-6 text-center mt-5">
            <?php

            for ($i = $half_services; $i < $total_services; $i++) {
                $service = $aService->data[$i];
            ?>
                <h3 class="services-name"><?php echo $service->service_name; ?></h3>
            <?php } ?>
        </div>
    </div>
</div>




<section class="section-padding" id="footer-form-id">
    <div class="container">
        <form action="" class="inquiry-form-block form--square" id="contactForm" data-success="Thanks for your enquiry, we'll be in touch soon" data-error="Please fill all required fields" novalidate="novalidate">
            <div class="row align-items-lg-baseline">
                <div class="col-lg-3">
                    <h2 class="h1 font-semibold form-group mb-lg-0">How Can We Help?</h2>
                </div>
                <div class="col-lg-9">
                    <div class="m-0">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <input type="text" class="form-control validate-required" name="contactName" placeholder="Full Name" />
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <input type="text" class="form-control validate-required" placeholder="Email" name="contactEmail" />
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <input type="text" class="form-control validate-required" placeholder="Phone Number" name="contactPhone" nkeypress="return isNumberKey(event)" />
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <textarea class="form-control validate-required" rows="3" placeholder="Describe Your Requirements" name="contactMessage"></textarea>
                                </div>
                            </div>
                            <div class="col-12 text-right">
                                <button class="btn btn-outline-primary text-uppercase ls-xs" name="contactBtn">inquire now</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>

<?php include_once('footer.php') ?>