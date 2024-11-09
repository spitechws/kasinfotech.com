<header class="header-wrapper section-wrapper">
    <div class="header-main dark">
        <nav class="navbar navbar-expand-xl navbar-dark header-navbar text-uppercase text-white">
            <div class="container-fluid px-0">
                <style>
                    #collapse-mobile-siderbar .position-absolute {
                        position: absolute
                    }

                    #collapse-mobile-siderbar .left-0 {
                        left: 0
                    }

                    #collapse-mobile-siderbar figure.w-25 {
                        width: 25% !important
                    }
                </style>
                <a class="navbar-brand" href="<?php echo base_url(); ?>">
                    <img src="<?php echo asset('images/logo-black.png'); ?>" alt="KAS Pvt Ltd " title="KAS Pvt Ltd " class="logo-img logo-black">
                    <img src="<?php echo asset('images/logo-white.png'); ?>" alt="KAS Pvt Ltd " title="KAS Pvt Ltd " class="logo-img logo-white">
                </a>
                <div class="collapse navbar-collapse collapse-sidebar" id="collapse-mobile-siderbar">
                    <ul class="navbar-nav mr-auto navbar-nav-destop">
                        <li class="nav-item">
                            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">about us</a>
                            <ul class="dropdown-menu submenu">
                                <div class="container-fluid submenu-inner">
                                    <div class="row">
                                        <div class="col-lg-2">
                                            <p class="dropdown-item nav-link font-semibold">Culture</p>
                                            <a class="dropdown-item nav-link p text-secondary" href="<?php echo base_url('agile-mindset') ?>">Agile Mindset</a>
                                            <a class="dropdown-item nav-link p text-secondary" href="<?php echo base_url('kas-pvt-ltd-values') ?>">KAS Pvt Ltd Values</a>
                                            <a class="dropdown-item nav-link p text-secondary" href="<?php echo base_url('kas-pvt-ltd-culture') ?>">KAS Pvt Ltd Culture</a>
                                        </div>
                                        <div class="col-lg-2">
                                            <p class="dropdown-item nav-link font-semibold">About Company</p>
                                            <a class="dropdown-item nav-link p text-secondary" href="<?php echo base_url('about-us') ?>">About Us</a>


                                        </div>
                                        <div class="col-lg-2">
                                            <p class="dropdown-item nav-link font-semibold"></p>

                                            <a class="dropdown-item nav-link p text-secondary" href="<?php echo base_url('locations') ?>">Our Locations</a>
                                            <a class="dropdown-item nav-link p text-secondary" href="<?php echo base_url('partnership') ?>">Partnership</a>

                                        </div>
                                        <div class=" col-lg-3 col-xl d-none d-xl-block">
                                            <div class="img-text position-relative banner-post h-100 d-flex align-items-end">
                                                <a href="<?php echo base_url('great-place-to-work') ?>">
                                                    <figure class="banner-post-img">
                                                        <picture>
                                                            <source srcset="<?php echo asset('images/cs-img.webp'); ?>" type="image/webp">
                                                            <source srcset="<?php echo asset('images/cs-img.jpg'); ?>" type="image/jpeg"><img data-src="https://kasinfotech.com/main-boot-5/images/header/xcs-img.jpg.pagespeed.ic.rnWRlRSD0j.webp" src="images/xcs-img.jpg.pagespeed.ic.rnWRlRSD0j.webp" alt="KAS Pvt Ltd " title="KAS Pvt Ltd ">
                                                        </picture>
                                                    </figure>
                                                    <div class="img-text-inner img-text-trans-none w-100 d-flex justify-content-between align-items-center">
                                                        <div>
                                                            <p class="font-bold h5">WE ARE</p>
                                                            <p class="text-dark img-text-heading font-bold">GREAT PLACE TO WORK<sup class="text-18"></sup></p>
                                                            <p class="text-18">Building and sustaining High-Trust, High-Performance Culture<sup class="text-sm">TM</sup></p>
                                                        </div>
                                                        <picture>
                                                            <source srcset="<?php echo asset('images/gptw(5).png'); ?>" type="image/webp">
                                                            <source srcset="images/gptw(5).png" type="image/jpeg">
                                                            <img data-src="<?php echo asset('images/header/xgptw.png,qv-3.pagespeed.ic._V8cEQRcAj.png')?>" src="<?php echo asset('images/xgptw.png%2Cqv-3.pagespeed.ic._V8cEQRcAj.png')?>" alt="KAS Pvt Ltd  " title="KAS Pvt Ltd  ">
                                                        </picture>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php require('menu_contact_info.php'); ?>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">Services</a>
                            <ul class="dropdown-menu submenu">
                                <div class="container-fluid submenu-inner">
                                    <div class="row">
                                        <div class="col-lg-2">
                                            <?php foreach ($aServiceList->data as $row) : ?>
                                                <a class="dropdown-item nav-link p text-secondary" href="<?php echo base_url('service/' . $row->slug); ?>">
                                                    <?php echo $row->service_name; ?></a>
                                            <?php endforeach; ?>
                                        </div>
                                    </div>
                                </div>
                                <?php require('menu_contact_info.php'); ?>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">Products</a>
                            <ul class="dropdown-menu submenu">
                                <div class="container-fluid submenu-inner">
                                    <div class="row">
                                        <div class="col-lg-2">
                                            <p class="dropdown-item nav-link font-semibold">Our Star Products</p>
                                            <?php foreach ($aProductList->data as $product) : ?>
                                                <a class="dropdown-item nav-link p text-secondary" href="<?php echo base_url('product/' . $product->slug); ?>"><?php echo $product->product_name; ?></a>
                                            <?php endforeach; ?>
                                        </div>
                                    </div>
                                    <?php require('menu_contact_info.php'); ?>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">who we work with</a>
                            <ul class="dropdown-menu submenu">
                                <div class="container-fluid submenu-inner">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <p class="dropdown-item nav-link font-semibold">Industries</p>
                                            <a class="dropdown-item nav-link p text-secondary" href="<?php echo base_url('banking-finance-insurance-software-development') ?>">Banking Financial services & Insurance</a>
                                            <a class="dropdown-item nav-link p text-secondary" href="<?php echo base_url('minimum-viable-product-development-service') ?>">Startups</a>
                                            <a class="dropdown-item nav-link p text-secondary" href="<?php echo base_url('oil-and-gas-enterprise-mobility-solution') ?>">Oil & Gas</a>
                                        </div>
                                        <div class="col-lg-3">
                                            <p class="dropdown-item nav-link opacity-0">not list</p>
                                            <a class="dropdown-item nav-link p text-secondary" href="<?php echo base_url('healthcare-application-software-development') ?>">Healthcare Life Science</a>
                                            <a class="dropdown-item nav-link p text-secondary" href="<?php echo base_url('real-estate-software-development') ?>">Real Estate & Construction </a>
                                            <a class="dropdown-item nav-link p text-secondary" href="<?php echo base_url('logistics-mobile-application-development') ?>">Logistics </a>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="img-text position-relative">
                                                <picture>
                                                    <source srcset="<?php echo asset('images/www-img.webp'); ?>" type="image/webp">
                                                    <source srcset="images/www-img.jpg" type="image/jpeg"><img data-src="https://kasinfotech.com/main-boot-5/images/header/xwww-img.jpg.pagespeed.ic.-yjcivKMWc.webp" src="images/xwww-img.jpg.pagespeed.ic.-yjcivKMWc.webp" alt="KAS Pvt Ltd " title="KAS Pvt Ltd ">
                                                </picture>
                                                <div class="img-text-inner">
                                                    <p class="text-dark img-text-heading font-bold">Let’s grow together <b class="d-lg-block">Partner with us</b></p>
                                                    <a href="<?php echo base_url('get-quote') ?>" class="text-uppercase text-primary">Get Quote<span class="long-arrow-icon-css icon-item right mt-0"></span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php require('menu_contact_info.php'); ?>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Technology</a>
                            <ul class="dropdown-menu submenu">
                                <div class="container-fluid submenu-inner">
                                    <div class="row">
                                        <div class="col-lg-3 col-xl">
                                            <a class="dropdown-item nav-link p text-secondary" href="<?php echo base_url('hire-reactjs-developer') ?>">Reactjs</a>
                                            <a class="dropdown-item nav-link p text-secondary" href="<?php echo base_url('hire-node-developer') ?>">Node.js</a>
                                            <a class="dropdown-item nav-link p text-secondary" href="<?php echo base_url('hire-php-developer') ?>">PHP</a>
                                            <a class="dropdown-item nav-link p text-secondary" href="<?php echo base_url('hire-laravel-developer') ?>">Laravel</a>
                                            <a class="dropdown-item nav-link p text-secondary" href="<?php echo base_url('hire-dot-net-developer') ?>">.NET</a>
                                            <a class="dropdown-item nav-link p text-secondary" href="<?php echo base_url('hire-spring-boot-developer') ?>">Java </a>
                                            <a class="dropdown-item nav-link p text-secondary" href="<?php echo base_url('hire-python-developer') ?>">Python</a>
                                            <a class="dropdown-item nav-link p text-secondary" href="<?php echo base_url('android-application-development') ?>">Android</a>
                                            <a class="dropdown-item nav-link p text-secondary" href="<?php echo base_url('automation-testing-services') ?>">Automation Testing</a>
                                        </div>
                                        <div class="col-lg-3 col-xl-5 d-none d-xl-block">
                                            <div class="img-text position-relative banner-post h-100 d-flex align-items-end">
                                                <figure class="banner-post-img">
                                                    <picture>
                                                        <source srcset="<?php echo asset('images/banner.webp'); ?>" type="image/webp">
                                                        <source srcset="<?php echo asset('images/banner.jpg') ?>" type="image/jpeg">
                                                        <img data-src="<?php echo asset('images/header/xbanner.jpg.pagespeed.ic.TStxzDJ7vj.webp') ?>"
                                                            src="<?php echo asset('images/xbanner.jpg.pagespeed.ic.TStxzDJ7vj.webp') ?>" alt="KAS Pvt Ltd " title="KAS Pvt Ltd ">
                                                    </picture>
                                                </figure>
                                                <div class="img-text-inner img-text-trans-none">
                                                    <p class="text-dark img-text-heading font-bold">World-class expertise,<b class="d-lg-block">Delivered</b></p>
                                                    <a href="<?php echo base_url('get-quote') ?>" class="text-uppercase text-primary">get quote<span class="long-arrow-icon-css icon-item right mt-0"></span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 text-center mt-lg">
                                            <a href="<?php echo base_url('technologies') ?>" class="btn btn-primary text-uppercase ls-xs">Explore All</a>
                                        </div>
                                    </div>
                                </div>
                                <?php require('menu_contact_info.php'); ?>
                            </ul>
                        </li>

                    </ul>
                </div>
                <div class="sidebar-backdrop"></div>
                <div class="right-nav-elements ">

                    <div class="align-items-center d-flex hire-us">
                        <a href="<?php echo base_url('get-quote') ?>" class="btn btn-primary px-3 py-2  text-capitalize text-nowrap d-none d-md-inline-block" id="hire-developer-b-cta">hire developers <span class="long-arrow-icon-css icon-item right mt-0 ml-2"></span></a>
                    </div>
                    <div class="menu-icon-block" onclick="if (!window.__cfRLUnblockHandlers) return false; openNav()" data-cf-modified-591e8dac46237a91d428b1a4->
                        <span class="btn hamburger-icon">
                            <span class="bars"></span>
                            <span class="bars"></span>
                            <span class="bars"></span>
                        </span>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>
<?php include_once('side-nav.php'); ?>