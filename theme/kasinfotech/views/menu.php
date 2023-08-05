<div class="page-transition"></div>
<aside class="side-widget">
    <div class="inner">
        <!-- Logo Menu Mobile -->
        <div class="logo"> <a href="<?php echo $site_url; ?>">
                <img style=" border: 2px solid white;" src="<?php echo $site_theme; ?>images/logo.png"></a>
        </div>
        <div class="hide-mobile">
            <div class="or">
                <h2 class="h2-baslik-hizmetler-21"> Contact Information </h2>
            </div>
            <div class="bosluksv"></div>
            <div class="iconsv"><i class="flaticon-headphones"></i></div>
            <address class="address">
                <a style="color: white;" href="tel:<?php echo config_item('site_contact') ?>"> <?php echo config_item('site_contact') ?></a>
                <div class="bosluksv"></div>


                <div class="iconsv"><i class="flaticon-email"></i></div>


                <a style="color: white;" href="mailto:<?php echo config_item('site_email') ?>"><?php echo config_item('site_email') ?></a>

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
                        <ul id="menu-mobil-menu" class="nav navbar-nav">
                            <li class="nav-item"><a href="<?php echo $site_url; ?>" class="nav-link" aria-current="page"><span itemprop="name">Home</span></a></li>
                            <li class="nav-item"><a href="<?php echo $site_url; ?>page/about-us" class="nav-link"><span itemprop="name">About Us</span></a></li>
                            <li class="nav-item"><a data-toggle="dropdown" class="dropdown-toggle nav-link"><span itemprop="name">Services</span></a>
                                <ul class="dropdown-menu">

                                    <?php
                                    if (!empty($aService) && is_array($aService)) {
                                        foreach ($aService as $row) {
                                            $url = base_url() . 'service/' . $row->slug;
                                    ?>

                                            <li class="nav-item"><a href="<?php echo $url; ?>" class="dropdown-item"><span itemprop="name"><?php echo $row->title ?></span></a></li>
                                    <?php
                                        }
                                    }
                                    ?>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="#" data-toggle="dropdown" aria-expanded="false" class="dropdown-toggle nav-link"><span itemprop="name">Products<span class="border border-top"></span><span class="border border-right"></span><span class="border border-bottom"></span><span class="border border-left"></span></span></a>
                                <ul class="dropdown-menu" aria-labelledby="menu-item-dropdown-980">
                                    <?php
                                    if (!empty($aProductList) && is_array($aProductList)) {
                                        foreach ($aProductList as $row) {
                                            $url = base_url() . 'products/' . $row->slug;
                                    ?>

                                            <li><a href="<?php echo $url; ?>" class="dropdown-item"><span itemprop="name"><?php echo $row->name; ?><span class="border border-top"></span><span class="border border-right"></span><span class="border border-bottom"></span><span class="border border-left"></span></span></a></li>
                                    <?php
                                        }
                                    }
                                    ?>
                                </ul>
                            </li>                                                     
                            <li class="nav-item"><a href="<?php echo $site_url; ?>contact" class="nav-link"><span itemprop="name">Contact</span></a></li>
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
                <img style="    border: 2px solid white;" src="<?php echo $site_theme; ?>images/logo.png">

            </a>
        </div>

        <div class="site-menu">
            <div class="menu">
                <div id="bs-example-navbar-collapse-2" class="collapse navbar-collapse">
                    <ul id="menu-main-menu" class="nav navbar-nav">
                        <li><a href="<?php echo $site_url; ?>" class="nav-link" aria-current="page"><span itemprop="name">Home<span class="border border-top"></span><span class="border border-right"></span><span class="border border-bottom"></span><span class="border border-left"></span></span></a></li>
                        <li><a href="<?php echo $site_url; ?>page/about-us" class="nav-link"><span itemprop="name">About Us<span class="border border-top"></span><span class="border border-right"></span><span class="border border-bottom"></span><span class="border border-left"></span></span></a></li>
                        <li class="dropdown nav-item">
                            <a href="#" data-toggle="dropdown" aria-expanded="false" class="dropdown-toggle nav-link"><span itemprop="name">Services<span class="border border-top"></span><span class="border border-right"></span><span class="border border-bottom"></span><span class="border border-left"></span></span></a>
                            <ul class="dropdown-menu" aria-labelledby="menu-item-dropdown-980">
                                <?php
                                if (!empty($aService) && is_array($aService)) {
                                    foreach ($aService as $row) {
                                        $url = base_url() . 'service/' . $row->slug;
                                ?>

                                        <li><a href="<?php echo $url; ?>" class="dropdown-item"><span itemprop="name"><?php echo $row->title; ?><span class="border border-top"></span><span class="border border-right"></span><span class="border border-bottom"></span><span class="border border-left"></span></span></a></li>
                                <?php
                                    }
                                }
                                ?>
                            </ul>
                        </li>
                        <li class="dropdown nav-item">
                            <a href="#" data-toggle="dropdown" aria-expanded="false" class="dropdown-toggle nav-link"><span itemprop="name">Products<span class="border border-top"></span><span class="border border-right"></span><span class="border border-bottom"></span><span class="border border-left"></span></span></a>
                            <ul class="dropdown-menu" aria-labelledby="menu-item-dropdown-980">
                                <?php
                                if (!empty($aProductList) && is_array($aProductList)) {
                                    foreach ($aProductList as $row) {
                                        $url = base_url() . 'products/' . $row->slug;
                                ?>

                                        <li><a href="<?php echo $url; ?>" class="dropdown-item"><span itemprop="name"><?php echo $row->name; ?><span class="border border-top"></span><span class="border border-right"></span><span class="border border-bottom"></span><span class="border border-left"></span></span></a></li>
                                <?php
                                    }
                                }
                                ?>
                            </ul>
                        </li>                      
                        <li><a href="tel:<?php echo config_item('site_contact') ?>contact" class="nav-link"><span itemprop="name">Contact<span class="border border-top"></span><span class="border border-right"></span><span class="border border-bottom"></span><span class="border border-left"></span></span></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="hamburger-menu"> <span></span> <span></span> <span></span> </div>

        <div class="navbar-button">
            <div class="telh"><i class="flaticon-headphones iconp"></i><a href="tel:<?php echo config_item('site_contact') ?>"> <?php echo config_item('site_contact') ?></a></div>
        </div>
    </div>
</nav>

<?php require_once('page-header.php') ?>