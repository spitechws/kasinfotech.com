<!-- <div class="preloader">
    <figure> <img src="<?php echo $site_theme; ?>wp-content/uploads/2022/05/loader-datax.png" alt="Image"> </figure>
</div> -->
<div class="page-transition"></div>
<aside class="side-widget">
    <div class="inner">
        <!-- Logo Menu Mobile -->
        <div class="logo"> <a href="<?php echo $site_url; ?>">
                <img src="<?php echo $site_theme; ?>images/logo.png"></a>
        </div>
        <div class="hide-mobile">
            <div class="or">
                <h2 class="h2-baslik-hizmetler-21"> Contact Information </h2>
            </div>
            <div class="bosluksv"></div>
            <div class="iconsv"><i class="flaticon-headphones"></i></div>
            <address class="address">


                <?php echo config_item('site_contact') ?>

                <div class="bosluksv"></div>


                <div class="iconsv"><i class="flaticon-email"></i></div>


                <?php echo config_item('site_email') ?>

                <div class="bosluksv"></div>
                <div class="iconsv"><i class="flaticon-location"></i></div>


                <?php echo config_item('site_address') ?>

                <div class="bosluksv"></div>
                <div class="or">

                    <a href="#"><i class="flaticon-facebook-1 iconsocia"></i></a>


                    <a href="#"><i class="flaticon-instagram-1 iconsociai"></i></a>


                    <a href="#"><i class="flaticon-twitter-1 iconsocia"></i></a>


                </div>
            </address>
        </div>
        <div class="show-mobile">
            <div class="site-menu">
                <div class="menu">
                    <div id="bs-example-navbar-collapse-1" class="collapse navbar-collapse">
                        <ul id="menu-mobil-menu" class="nav navbar-nav" itemscope="" itemtype="http://www.schema.org/SiteNavigationElement">
                            <li id="menu-item-1149" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-5 current_page_item active menu-item-1149 nav-item"><a itemprop="url" href="<?php echo $site_url; ?>" class="nav-link" aria-current="page"><span itemprop="name">Home</span></a></li>
                            <li id="menu-item-1150" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1150 nav-item"><a itemprop="url" href="<?php echo $site_url; ?>about-us" class="nav-link"><span itemprop="name">About Us</span></a></li>
                            <li id="menu-item-1151" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children dropdown menu-item-1151 nav-item"><a href="<?php echo $site_url; ?>services" data-toggle="dropdown" aria-expanded="false" class="dropdown-toggle nav-link" id="menu-item-dropdown-1151"><span itemprop="name">Services</span></a>
                                <ul class="dropdown-menu" aria-labelledby="menu-item-dropdown-1151">
                                    <li id="menu-item-1213" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1213 nav-item"><a itemprop="url" href="<?php echo $site_url; ?>data-strategy" class="dropdown-item"><span itemprop="name">Data Strategy</span></a></li>
                                    <li id="menu-item-1212" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1212 nav-item"><a itemprop="url" href="<?php echo $site_url; ?>machine-learning" class="dropdown-item"><span itemprop="name">Machine Learning</span></a></li>
                                    <li id="menu-item-1211" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1211 nav-item"><a itemprop="url" href="<?php echo $site_url; ?>software-solutions" class="dropdown-item"><span itemprop="name">Software Solutions</span></a></li>
                                    <li id="menu-item-1210" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1210 nav-item"><a itemprop="url" href="<?php echo $site_url; ?>business-mind" class="dropdown-item"><span itemprop="name">Business Mind</span></a></li>
                                    <li id="menu-item-1209" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1209 nav-item"><a itemprop="url" href="<?php echo $site_url; ?>financial-services" class="dropdown-item"><span itemprop="name">Financial Services</span></a></li>
                                    <li id="menu-item-1208" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1208 nav-item"><a itemprop="url" href="<?php echo $site_url; ?>data-security" class="dropdown-item"><span itemprop="name">Data Security</span></a></li>
                                    <li id="menu-item-1215" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1215 nav-item"><a itemprop="url" href="<?php echo $site_url; ?>all-services" class="dropdown-item"><span itemprop="name">All Services</span></a></li>
                                </ul>
                            </li>
                            <li id="menu-item-1220" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1220 nav-item"><a itemprop="url" href="<?php echo $site_url; ?>projects" class="nav-link"><span itemprop="name">Projects</span></a></li>
                            <li id="menu-item-1159" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1159 nav-item"><a itemprop="url" href="<?php echo $site_url; ?>Packages" class="nav-link"><span itemprop="name">Packages</span></a></li>
                            <li id="menu-item-1160" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1160 nav-item"><a itemprop="url" href="<?php echo $site_url; ?>clients" class="nav-link"><span itemprop="name">Clients</span></a></li>
                            <li id="menu-item-1161" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1161 nav-item"><a itemprop="url" href="<?php echo $site_url; ?>blog" class="nav-link"><span itemprop="name">Blog</span></a></li>
                            <li id="menu-item-1162" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1162 nav-item"><a itemprop="url" href="<?php echo $site_url; ?>contact" class="nav-link"><span itemprop="name">Contact</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <small>
            <?php echo config_item('copyright_text') ?>
        </small>
    </div>
</aside>
<nav class="navbar navbar-expand-md navbar-light bg-light">
    <div class="container">
        <!-- Logo Menu Desktop -->
        <div class="logo"> <a href="<?php echo $site_url; ?>">
                <img src="<?php echo $site_theme; ?>images/logo.png">

            </a>
        </div>

        <div class="site-menu">
            <div class="menu">
                <div id="bs-example-navbar-collapse-2" class="collapse navbar-collapse">
                    <ul id="menu-main-menu" class="nav navbar-nav" itemscope="" itemtype="http://www.schema.org/SiteNavigationElement">
                        <li id="menu-item-322" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-5 current_page_item active menu-item-322 nav-item"><a itemprop="url" href="<?php echo $site_url; ?>" class="nav-link" aria-current="page"><span itemprop="name">Home<span class="border border-top"></span><span class="border border-right"></span><span class="border border-bottom"></span><span class="border border-left"></span></span></a></li>
                        <li id="menu-item-329" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-329 nav-item"><a itemprop="url" href="<?php echo $site_url; ?>about-us" class="nav-link"><span itemprop="name">About Us<span class="border border-top"></span><span class="border border-right"></span><span class="border border-bottom"></span><span class="border border-left"></span></span></a></li>
                        <li id="menu-item-980" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children dropdown menu-item-980 nav-item"><a href="#" data-toggle="dropdown" aria-expanded="false" class="dropdown-toggle nav-link" id="menu-item-dropdown-980"><span itemprop="name">Services<span class="border border-top"></span><span class="border border-right"></span><span class="border border-bottom"></span><span class="border border-left"></span></span></a>
                            <ul class="dropdown-menu" aria-labelledby="menu-item-dropdown-980">
                                <li id="menu-item-1227" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1227 nav-item"><a itemprop="url" href="<?php echo $site_url; ?>data-strategy" class="dropdown-item"><span itemprop="name">Data Strategy<span class="border border-top"></span><span class="border border-right"></span><span class="border border-bottom"></span><span class="border border-left"></span></span></a></li>
                                <li id="menu-item-1226" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1226 nav-item"><a itemprop="url" href="<?php echo $site_url; ?>machine-learning" class="dropdown-item"><span itemprop="name">Machine Learning<span class="border border-top"></span><span class="border border-right"></span><span class="border border-bottom"></span><span class="border border-left"></span></span></a></li>
                                <li id="menu-item-1225" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1225 nav-item"><a itemprop="url" href="<?php echo $site_url; ?>software-solutions" class="dropdown-item"><span itemprop="name">Software Solutions<span class="border border-top"></span><span class="border border-right"></span><span class="border border-bottom"></span><span class="border border-left"></span></span></a></li>
                                <li id="menu-item-1224" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1224 nav-item"><a itemprop="url" href="<?php echo $site_url; ?>business-mind" class="dropdown-item"><span itemprop="name">Business Mind<span class="border border-top"></span><span class="border border-right"></span><span class="border border-bottom"></span><span class="border border-left"></span></span></a></li>
                                <li id="menu-item-1223" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1223 nav-item"><a itemprop="url" href="<?php echo $site_url; ?>financial-services" class="dropdown-item"><span itemprop="name">Financial Services<span class="border border-top"></span><span class="border border-right"></span><span class="border border-bottom"></span><span class="border border-left"></span></span></a></li>
                                <li id="menu-item-1222" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1222 nav-item"><a itemprop="url" href="<?php echo $site_url; ?>data-security" class="dropdown-item"><span itemprop="name">Data Security<span class="border border-top"></span><span class="border border-right"></span><span class="border border-bottom"></span><span class="border border-left"></span></span></a></li>
                                <li id="menu-item-1229" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1229 nav-item"><a itemprop="url" href="<?php echo $site_url; ?>all-services" class="dropdown-item"><span itemprop="name">All Services<span class="border border-top"></span><span class="border border-right"></span><span class="border border-bottom"></span><span class="border border-left"></span></span></a></li>
                            </ul>
                        </li>
                        <li id="menu-item-1221" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1221 nav-item"><a itemprop="url" href="<?php echo $site_url; ?>projects" class="nav-link"><span itemprop="name">Projects<span class="border border-top"></span><span class="border border-right"></span><span class="border border-bottom"></span><span class="border border-left"></span></span></a></li>
                        <li id="menu-item-356" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-356 nav-item"><a itemprop="url" href="<?php echo $site_url; ?>packages" class="nav-link"><span itemprop="name">Packages<span class="border border-top"></span><span class="border border-right"></span><span class="border border-bottom"></span><span class="border border-left"></span></span></a></li>
                        <li id="menu-item-355" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-355 nav-item"><a itemprop="url" href="<?php echo $site_url; ?>clients" class="nav-link"><span itemprop="name">Clients<span class="border border-top"></span><span class="border border-right"></span><span class="border border-bottom"></span><span class="border border-left"></span></span></a></li>
                        <li id="menu-item-354" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-354 nav-item"><a itemprop="url" href="<?php echo $site_url; ?>blog" class="nav-link"><span itemprop="name">Blog<span class="border border-top"></span><span class="border border-right"></span><span class="border border-bottom"></span><span class="border border-left"></span></span></a></li>
                        <li id="menu-item-353" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-353 nav-item"><a itemprop="url" href="<?php echo $site_url; ?>contact" class="nav-link"><span itemprop="name">Contact<span class="border border-top"></span><span class="border border-right"></span><span class="border border-bottom"></span><span class="border border-left"></span></span></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="hamburger-menu"> <span></span> <span></span> <span></span> </div>

        <div class="navbar-button">
            <div class="telh"><i class="flaticon-headphones iconp"></i>&nbsp;&nbsp;&nbsp;<?php echo config_item('site_contact') ?></div>
        </div>

    </div>
</nav>