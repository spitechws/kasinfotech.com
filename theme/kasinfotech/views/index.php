<?php require_once('header.php'); ?>
<style>
    header .hire-us .long-arrow-icon-css:before {
        background-color: #fff
    }

    header .hire-us .long-arrow-icon-css:after {
        border-color: #fff;
        top: 54%
    }
</style>

<?php include_once('menu.php'); ?>
<div class="main-wrapper section-wrapper">
    <section class="home-section home-bg header-spacing-padding">
        <div class="container-md mt-auto position-relative">
            <div class="home-content text-center">
                <div class="row">
                    <div class="col-lg-4 mx-auto">
                        <div class="small-text-block text-center">
                            <p class="text-sm text-uppercase d-inline-block d-lg-block  text-white small-text-item ls-lg">Dedicated to Innovation
                            </p>
                        </div>
                    </div>
                </div>
                <div class="home-section-title-block">
                    <h1 class="home-section-title text-white h1 text-uppercase font-weight-bold ls-sm">
                        <span class="font-weight-light ">A Leader in </span>
                        <span class="text-primary font-weight-light"> Agile </span> and
                        <span class="text-primary font-weight-light">Lean </span>
                        <span class="d-block">
                            <span class="position-relative d-block d-sm-inline">
                                <span class="text-primary " id="feature-text"></span><b class="input-cursor position-absolute top-0 bottom-0 m-auto"></b> 
                            </span> Development
                        </span>
                    </h1>
                </div>
            </div>
        </div>
        <div class="mt-auto w-100">
            <div class="home-right-panel">

                <ul class="social-icon-block mt-auto">
                    <li class="social-item">
                        <a href="<?php echo config_item('facebook') ?>" class="social-link" target="_blank">
                            <svg viewBox="0 0 100 100" class="svg-icon">
                                <use xlink:href="#facebook-svg" />
                            </svg>
                        </a>
                    </li>
                    <li class="social-item">
                        <a href="<?php echo config_item('linkedin') ?>" class="social-link" target="_blank">
                            <svg viewBox="0 0 100 100" class="svg-icon">
                                <use xlink:href="#linkedin-svg" />
                            </svg>
                        </a>
                    </li>
                    <li class="social-item">
                        <a href="<?php echo config_item('twitter') ?>" class="social-link" target="_blank">
                            <svg viewBox="0 0 100 100" class="svg-icon">
                                <use xlink:href="#twitter-svg" />
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="home-bottom-panel mt-md-auto">
                <ul class="text-link-block text-uppercase">
                    <li class="text-item text-white mx-2 text-item-link text-sm ls-sm mt-2 mt-md-0 text-center">Top 1% IT Talent
                    </li>
                    <li class="text-item text-white mx-2 text-item-link text-sm ls-sm mt-2 mt-md-0 text-center">time zone aligned
                    </li>
                    <li class="text-item text-white mx-2 text-item-link text-sm ls-sm mt-2 mt-md-0 text-center">Experienced team
                    </li>
                </ul>
                <div class="home-bottom-row">
                    <div class="left js-scroll-to-next-section" data-target=".js-scroll-section">
                        <button type="button" class="btn btn-icon-custom">
                            <span class="text text-uppercase text-white ls-xs text-sm text-nowrap">learn more</span>
                            <div class=" icon-block">
                                <svg viewBox="0 -30 100 100" class="svg-icon">
                                    <use xlink:href="#angle-down-svg" />
                                </svg>
                            </div>
                        </button>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <section class="section-padding js-scroll-section">
        <div class="container">
            <div class="section-title-and-desc">
                <div class="section-title-block text-center">
                    <h2 class="section-title-text h1">Our Products</h2>
                </div>
                <div class="row">
                    <div class="col-xl-9 mx-auto">
                        <p class="text-center text-secondary h3 section-short-desc">
                            Partner with us to work with on-demand Agile product team. We are always
                            committed to your growth.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row g-4">
                <?php foreach ($aProductList->data as $product) : ?>
                    <div class="col-md-6">
                        <div class="card-image-primary banner-post">
                            <figure class="banner-post-img">
                                <picture>
                                    <source srcset="https://placehold.co/500x200" type="image/webp">
                                    <source srcset="https://placehold.co/500x200" type="image/jpeg">
                                    <img data-src="https://placehold.co/500x200" src="https://placehold.co/500x200" alt="<?php echo $product->product_name; ?>" title="<?php echo $product->product_name; ?>" class="lazy">
                                </picture>
                            </figure>
                            <h3 class="card-title text-white h5-2"><?php echo $product->product_name; ?></h3>
                            <a href="<?php echo base_url('products/' . $product->slug); ?>" class="text-sm text-item-center long-arrow-hover">
                                <span class="text-primary text-uppercase ls-sm"><a class="text-danger" href="<?php echo base_url('product/' . $product->slug); ?>">View Details</a></span>
                                <span class="long-arrow-icon-css icon-item right arrow-white"></span>
                            </a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <section class="section-padding pt-0">
        <div class="container">
            <div class="section-title-and-desc">
                <div class="section-title-block text-center">
                    <h2 class="section-title-text h1">Our Services</h2>
                </div>
                <div class="row ">
                    <div class="col-xl-10 mx-auto">
                        <p class="text-center text-secondary h3 section-short-desc ">
                            Let us help you kick-start your digital transformation journey with human-centric
                            digital experiences
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid p-0">
            <div class="row digital-tranformation-row g-0 digital-transformation-bg-last bg-behind-section">
                <div class="digital-transformation-bg bg-behind-content"></div>
                <?php foreach ($aServiceList->data as $row) : ?>
                    <div class="col-lg-3 col-6 digital-tranformation-column long-arrow-hover">
                        <div class="card-image-primary card-home-four banner-post">
                            <figure class="banner-post-img">
                                <picture>
                                    <source srcset="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSxy9mMRav7oyV-axbP_W8V1cBPAepHnOeq3g&s" type="image/webp">
                                    <source srcset="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSxy9mMRav7oyV-axbP_W8V1cBPAepHnOeq3g&s" type="image/jpeg">
                                    <img data-src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSxy9mMRav7oyV-axbP_W8V1cBPAepHnOeq3g&s" src="https://placehold.co/500x200" alt="<?php echo $product->product_name; ?>" title="<?php echo $product->product_name; ?>" class="lazy">
                                </picture>
                                
                            </figure>
                            <h3 class="card-title text-white h3"><?php echo $row->service_name; ?></h3>
                            <a href="<?php echo base_url('service/' . $row->slug); ?>" class="text-sm text-item-center">
                                <span class="text-primary text-uppercase ls-sm">View Details</span>
                                <span class="long-arrow-icon-css icon-item right arrow-white"></span>
                            </a>
                        </div>
                    </div>
                <?php endforeach; ?>

            </div>
        </div>

    </section>
    <section class="section-padding section-padding-md pt-0">
        <div class="container">
            <div class="section-title-and-desc mb-0 mb-lg-3">
                <div class="section-title-block text-center">
                    <h2 class="section-title-text h1">About Us</h2>
                </div>
                <p class="text-center text-secondary h3 section-short-desc">
                    A global leader in next-generation digital services and consulting
                </p>
            </div>
            <div class="row counter-block-row justify-content-center g-4 section-padding mb-0">
                <div class="col-6 col-sm-4 col-md mt-md-0">
                    <div class="counter-block text-center">
                        <h3 class="counter-number h1">
                            7+ </h3>
                        <p class="counter-desc text-md">
                            Countries Where We Have Happy Customers
                        </p>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md mt-md-0">
                    <div class="counter-block text-center">
                        <h3 class="counter-number h1">
                            50+ </h3>
                        <p class="counter-desc text-md">
                            Agile Enabled Employees
                        </p>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md mt-md-0">
                    <div class="counter-block text-center">
                        <h3 class="counter-number h1">
                            04 </h3>
                        <p class="counter-desc text-md">
                            Worldwide Offices
                        </p>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md mt-md-0">
                    <div class="counter-block text-center">
                        <h3 class="counter-number h1">
                            05 </h3>
                        <p class="counter-desc text-md">
                            Agile Coaches </p>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md mt-md-0">
                    <div class="counter-block text-center">
                        <h3 class="counter-number h1">
                            14 </h3>
                        <p class="counter-desc text-md">
                            Certified Scrum Masters </p>
                    </div>
                </div>
            </div>
            <div class="row g-0 mt-lg-3">
                <div class="col-lg-6 col-md-8">
                    <div id="about-us-carousel" class="carousel slide carousel-fade" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <picture>
                                    <source srcset="<?php echo asset('images/gptw_1.png'); ?>" type="image/webp">
                                    <source srcset="<?php echo asset('images/gptw_1.png'); ?>" type="image/jpeg">
                                    <img data-src="<?php echo asset('images/gptw_1.png'); ?>" src="<?php echo asset('images/gptw_1.png'); ?>" alt="" title="" class="lazy d-block w-100">
                                </picture>
                            </div>
                            <div class="carousel-item ">
                                <img src="<?php echo asset('images/abt-1.webp'); ?>" />
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo asset('images/abt-3.webp'); ?>" />
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo asset('images/abt-3.webp'); ?>" />

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 align-self-center">
                    <div class="about-right-block section-paragraph">
                        <div class="slider-counter">
                            <div class="item">
                                <div class="progress-circle-block">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="-1 -1 34 34" class="progress-svg">
                                        <circle cx="16" cy="16" r="15.9155" class="progress-bar__background" />
                                        <circle cx="16" cy="16" r="15.9155" class="progress-bar__progress" />
                                    </svg>
                                </div>
                                <span class="current-item js-slider-current-item show">1</span>
                                <span class="total-item text-md js-slider-total-item">4</span>
                            </div>
                        </div>
                        <h2 class="h3 font-semibold title">
                            Agile, A Process Delivering Values &
                            Successful Products
                        </h2>
                        <h4 class="h4 semi-title">
                            Knowledge
                            <a href="https://www.smartinsights.com/managing-digital-marketing/growth-hacking/enhancing-your-marketing-with-an-agile-approach/" class="text-primary font-semibold" target="_blank">@Insights </a>
                            Success Magazine
                        </h4>
                        <p class="text-secondary  desc-margin">
                            KAS Pvt Ltd represents the connected world, offering innovative and
                            customer-centric information technology experiences, enabling Enterprises, Associates
                            and the Society to Rise™.
                        </p>
                        <a href="<?php echo base_url(); ?>about-us"><button class="btn btn-outline-primary  text-uppercase">Know More</button></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-padding position-relative section-paragraph">
        <div class="container position-relative">
            <div class="row">
                <div class="col-lg-7">
                    <div class="section-title-and-desc">
                        <div class="section-title-block text-left">
                            <h2 class="section-title-text h1 mt-0">The Convenience of Offshoring <br> is the Flexibility of Remote Agile.
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 mt-lg-2">
                    <p class="text-18">
                        Collaborate with a passionate team of designers, developers, and
                        strategists to stand-out from the crowd and shine brighter.
                    </p>
                </div>
            </div>
            <div class="row remote-agile-box-row justify-content-md-center ">
                <div class="col-lg-4 col-md-6">
                    <div class="remote-agile-box pr-lg-4 border-0 ">
                        <p class="text-md ls-sm text-uppercase text-primary font-semibold category-item">
                            Experiences</p>
                        <h3 class="h3 font-medium title-item margin-bottom">Agile Mindset</h3>
                        <p class="text-secondary text-md desc-item margin-bottom small-heading">
                            Agile is not a principal or a method, but it’s an integral part of being Agile that is
                            guided by principles, defined by values and manifested through various practices.
                        </p>
                        <a href="<?php echo base_url(); ?>agile-mindset" class="text-sm text-item-center long-arrow-hover">
                            <span class="text-primary text-uppercase ls-xs font-semibold">Discover </span>
                            <span class="long-arrow-icon-css icon-item right"></span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="remote-agile-box pr-lg-4">
                        <p class="text-md ls-sm text-uppercase text-primary font-semibold category-item">
                            importance</p>
                        <h3 class="h3 font-medium title-item margin-bottom">KAS Pvt Ltd Values</h3>
                        <p class="text-secondary text-md desc-item margin-bottom small-heading">
                            You add value to your customer when you deliver a product or service (and the associated
                            brand experience) that has been designed specifically to solve their problem.
                        </p>
                        <a href="<?php echo base_url(); ?>KAS Pvt Ltd -values" class="text-sm text-item-center long-arrow-hover">
                            <span class="text-primary text-uppercase ls-xs font-semibold">Discover </span>
                            <span class="long-arrow-icon-css icon-item right"></span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="remote-agile-box pr-lg-4 mb-0">
                        <p class="text-md ls-sm text-uppercase text-primary font-semibold category-item">
                            Mindset</p>
                        <h3 class="h3 font-medium title-item margin-bottom">KAS Pvt Ltd Cultures</h3>
                        <p class="text-secondary text-md desc-item margin-bottom small-heading">
                            Core Team will work as Scrum Team where Team will have quarterly goal to make sure that
                            we run financial, administrative and project management prospective.
                        </p>
                        <a href="<?php echo base_url(); ?>KAS Pvt Ltd -culture" class="text-sm text-item-center long-arrow-hover">
                            <span class="text-primary text-uppercase ls-xs font-semibold">Discover </span>
                            <span class="long-arrow-icon-css icon-item right"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section>
        <div class="container">
            <div class="section-title-and-desc mt-5">
                <div class="section-title-block text-center">
                    <h2 class="section-title-text h1">Insights by KAS Pvt Ltd </h2>
                </div>
                <div class="row">
                    <div class="col-xl-10 mx-auto">
                        <p class="text-center text-secondary h3 section-short-desc">
                            Stay updated with the latest happenings in the world of mobile, cloud, AI, ML, and
                            emerging technologies.
                        </p>
                    </div>
                </div>
            </div>


        </div>
    </section>

</div>

<?php require_once('footer.php'); ?>