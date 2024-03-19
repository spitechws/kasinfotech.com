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
                    <h2 class="section-title-text h1">Connect, Collaborate and Create</h2>
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
            <div class="row home-card-row g-4">
                <div class="col-lg-6 col-12 card-column">
                    <div class="card-image-primary banner-post">
                        <figure class="banner-post-img">
                            <picture>
                                <source srcset="<?php echo asset('images/home-cards-one.webp'); ?>" type="image/webp">
                                <source srcset="<?php echo asset('images/home-cards-one.webp'); ?>" type="image/jpeg">
                                <img data-src="<?php echo asset('images/home-cards-one.webp'); ?>" src="<?php echo asset('images/home-cards-one.webp'); ?>" alt="KAS PVT LTDTech Agility " title="KAS PVT LTDTech Agility " class="lazy">
                            </picture>
                        </figure>
                        <h3 class="card-title text-white h5-2">KAS PVT LTDTech Agility – Q3, 2023</h3>
                        <a href="<?php echo base_url(); ?>KAS PVT LTD-tech-agility" class="text-sm text-item-center long-arrow-hover">
                            <span class="text-primary text-uppercase ls-sm">new edition out now </span>
                            <span class="long-arrow-icon-css icon-item right arrow-white"></span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-6 card-column">
                    <div class="card-image-primary banner-post">
                        <figure class="banner-post-img">
                            <picture>
                                <source srcset="<?php echo asset('images/home-cards-two.webp'); ?>" type="image/webp">
                                <source srcset="<?php echo asset('images/home-cards-two.webp'); ?>" type="image/jpeg">
                                <img data-src="<?php echo asset('images/home-cards-two.webp'); ?>" src="<?php echo asset('images/home-cards-two.webp'); ?>" alt="Company Fact Sheet" title="Company Fact Sheet" class="lazy">
                            </picture>
                        </figure>
                        <h3 class="card-title text-white h5-2">Company Fact Sheet</h3>
                        <a href="<?php echo base_url(); ?>main-boot-5/images/KAS PVT LTD_Technology_Brochure.pdf?v5" class="text-sm text-item-center long-arrow-hover" target="_blank">
                            <span class="text-primary text-uppercase ls-sm">visit now </span>
                            <span class="long-arrow-icon-css icon-item right arrow-white"></span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-6 card-column">
                    <div class="card-image-primary banner-post">
                        <figure class="banner-post-img">
                            <picture>
                                <source srcset="<?php echo asset('images/home-cards-three.webp'); ?>" type="image/webp">
                                <source srcset="<?php echo asset('images/home-cards-three.webp'); ?>" type="image/jpeg">
                                <img data-src="<?php echo asset('images/home-cards-three.webp'); ?>" src="<?php echo asset('images/home-cards-three.webp'); ?>" alt="We’re Hiring! Come Join Our Team!" title="We’re Hiring! Come Join Our Team!" class="lazy">
                            </picture>
                        </figure>
                        <h3 class="card-title text-white h5-2">We’re Hiring! Come Join Our Team!</h3>
                        <a href="<?php echo base_url(); ?>careers" class="text-sm text-item-center long-arrow-hover">
                            <span class="text-primary text-uppercase ls-sm">apply now </span>
                            <span class="long-arrow-icon-css icon-item right arrow-white"></span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-6 card-column">
                    <div class="card-image-primary banner-post">
                        <figure class="banner-post-img">
                            <picture>
                                <source srcset="<?php echo asset('images/home-cards-four.webp'); ?>" type="image/webp">
                                <source srcset="<?php echo asset('images/home-cards-four.webp'); ?>" type="image/jpeg"><img data-src="<?php echo asset('images/home-cards-four.webp'); ?>" src="images/xhome-cards-four.jpg%2Cqv-3.pagespeed.ic.r4jJC-e4pI.webp" alt="The Keys to Organizational Agility: From Agile to
                                Agility" title="The Keys to Organizational Agility: From Agile to
                                Agility" class="lazy">
                            </picture>
                        </figure>
                        <h3 class="card-title text-white h5-2">The Keys to Organizational Agility: From Agile to
                            Agility</h3>
                        <a href="javascript:void(0)" data-toggle="modal" data-target="#homepageVideoModal" data-video="https://player.vimeo.com/video/329760190?autoplay=1" class="text-sm text-item-center long-arrow-hover watch-video">
                            <span class="text-primary text-uppercase ls-sm">Watch our video </span>
                            <span class="long-arrow-icon-css icon-item right arrow-white"></span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-6 card-column">
                    <div class="card-image-primary banner-post">
                        <figure class="banner-post-img">
                            <picture>
                                <source srcset="<?php echo asset('images/home-cards-five.webp'); ?>" type="image/webp">
                                <source srcset="<?php echo asset('images/home-cards-five.webp'); ?>" type="image/jpeg">
                                <img data-src="<?php echo asset('images/home-cards-five.webp'); ?>" src="<?php echo asset('images/home-cards-five.webp'); ?>" alt="Outsourcing: The Good,The Bad and The Honest Truth" title="Outsourcing: The Good,The Bad and The Honest Truth" class="lazy">
                            </picture>
                        </figure>
                        <h4 class="card-title text-white h5-2">Outsourcing: The Good,The Bad and The Honest Truth</h4>
                        <a href="<?php echo base_url(); ?>blog/honesty-transparency-and-integritywhy-its-hard-to-find-from-offshore-development-vendors/" target="_blank">
                            <span class="text-primary text-uppercase ls-sm">Visit Now </span>
                            <span class="long-arrow-icon-css icon-item right arrow-white"></span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 col-12 card-column">
                    <div class="card-image-primary banner-post">
                        <figure class="banner-post-img">
                            <picture>
                                <source srcset="<?php echo asset('images/home-cards-six.webp'); ?>" type="image/webp">
                                <source srcset="<?php echo asset('images/home-cards-six.webp'); ?>" type="image/jpeg">
                                <img data-src="<?php echo asset('images/home-cards-six.webp'); ?>" src="<?php echo asset('images/home-cards-six.webp'); ?>" alt="New Agile Development Center, New Chapter" title="New Agile Development Center, New Chapter" class="lazy">
                            </picture>
                        </figure>
                        <h4 class="card-title text-white h5-2">New Agile Development Center, New Chapter</h4>
                        <a href="<?php echo base_url(); ?>development-center-KAS PVT LTD" class="text-sm text-item-center long-arrow-hover">
                            <span class="text-primary text-uppercase ls-sm">Let's connect </span>
                            <span class="long-arrow-icon-css icon-item right arrow-white"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-padding pt-0">
        <div class="container">
            <div class="section-title-and-desc">
                <div class="section-title-block text-center">
                    <h2 class="section-title-text h1">Digital Transformations</h2>
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
                <div class="digital-transformation-bg bg-behind-content" style="background-image:url(<?php echo asset('images/xdigital_transformation_bg_1.jpg')?>)"></div>
                <div class="col-lg-3 col-6 digital-tranformation-column long-arrow-hover">
                    <div class="card-image-primary card-home-four banner-post ">
                        <h3 class="card-title text-white h3">Digital Transformation & Product Development</h3>
                        <a href="<?php echo base_url(); ?>services#2" class="text-sm text-item-center">
                            <span class="text-primary text-uppercase ls-sm">Discover</span>
                            <span class="long-arrow-icon-css icon-item right arrow-white"></span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-6 digital-tranformation-column long-arrow-hover">
                    <div class="card-image-primary card-home-four banner-post ">
                        <h3 class="card-title text-white h3">Enterprise Application Management </h3>
                        <a href="<?php echo base_url(); ?>services#3" class="text-sm text-item-center">
                            <span class="text-primary text-uppercase ls-sm">Discover</span>
                            <span class="long-arrow-icon-css icon-item right arrow-white"></span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-6 digital-tranformation-column long-arrow-hover">
                    <div class="card-image-primary card-home-four ">
                        <h3 class="card-title text-white h3">Agile QA, Automation and DevOps </h3>
                        <a href="<?php echo base_url(); ?>services#4" class="text-sm text-item-center">
                            <span class="text-primary text-uppercase ls-sm">Discover</span>
                            <span class="long-arrow-icon-css icon-item right arrow-white"></span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-6 digital-tranformation-column long-arrow-hover">
                    <div class="card-image-primary card-home-four ">
                        <h3 class="card-title text-white h3">Embedded & Hardware</h3>
                        <a href="<?php echo base_url(); ?>systems/" class="text-sm text-item-center">
                            <span class="text-primary text-uppercase ls-sm">Discover</span>
                            <span class="long-arrow-icon-css icon-item right arrow-white"></span>
                        </a>
                    </div>
                </div>
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
                            12+ </h3>
                        <p class="counter-desc text-md">
                            Countries Where We Have Happy Customers
                        </p>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md mt-md-0">
                    <div class="counter-block text-center">
                        <h3 class="counter-number h1">
                            1050+ </h3>
                        <p class="counter-desc text-md">
                            Agile Enabled Employees
                        </p>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md mt-md-0">
                    <div class="counter-block text-center">
                        <h3 class="counter-number h1">
                            06 </h3>
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
                                    <source srcset="<?php echo asset('images/gptw_1.webp'); ?>" type="image/webp">
                                    <source srcset="<?php echo asset('images/gptw_1.webp'); ?>" type="image/jpeg">
                                    <img data-src="<?php echo asset('images/gptw_1.webp'); ?>" src="<?php echo asset('images/gptw_1.webp'); ?>" alt="Great Place to Work" title="Great Place to Work" class="lazy d-block w-100">
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
                            KAS PVT LTDrepresents the connected world, offering innovative and
                            customer-centric information technology experiences, enabling Enterprises, Associates
                            and the Society to Rise™.
                        </p>
                        <a href="<?php echo base_url(); ?>about-us"><button class="btn btn-outline-primary  text-uppercase">Know More</button></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-padding bg-graylight home-page-cs" id="case-study">
        <div class="container">
            <div class="row">
                <div class="col-lg-11 mx-auto">
                    <div class="section-title-and-desc">
                        <div class="section-title-block text-center">
                            <h2 class="section-title-text h1">Reasons why we are the best</h2>
                            <p class="text-center text-secondary h3 section-short-desc">We've helped out various clients across several industries, and you could be next!</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row gy-4  gy-lg-0">
                <div class="small-heading col-lg-8">
                    <div class="row gy-4">
                        <div class="col-12">
                            <div class=" bg-white row flex-md-row-reverse gx-0">
                                <div class="col-md-5 position-relative">
                                    <picture>
                                        <source srcset="<?php echo asset('images/verizon.jpg'); ?>" type="image/webp">
                                        <source srcset="<?php echo asset('images/verizon.jpg'); ?>">
                                        <img data-src="<?php echo asset('images/verizon.jpg'); ?>" src="<?php echo asset('images/verizon.webp'); ?>" alt="Verizon Express Store" title="Verizon Express Store" class=" h-100 ob-cover">
                                    </picture>
                                    <picture>
                                        <source srcset="<?php echo asset('images/cs-logo-1.webp'); ?>" type="image/webp">
                                        <source srcset="<?php echo asset('images/cs-logo-1.webp'); ?>" type="image/png">
                                        <!-- <img data-src="<?php echo asset('images/cs-logo-1.webp'); ?>" src="<?php echo asset('images/cs-logo-1.webp'); ?>" alt="Verizon Express Store" title="Verizon Express Store" class=" cs-logo"> -->
                                    </picture>
                                </div>
                                <div class="col-md-7">
                                    <div class="boxed pt-lg-0">
                                        <picture>
                                            <source srcset="<?php echo asset('images/cs-logo-1-new.webp'); ?>" type="image/webp">
                                            <source srcset="<?php echo asset('images/cs-logo-1-new.webp'); ?>" type="image/jpeg">
                                            <img data-src="<?php echo asset('images/cs-logo-1-new.webp'); ?>" src="<?php echo asset('images/cs-logo-1-new.webp'); ?>" alt=" reactjs" class="d-none d-lg-block">
                                        </picture>
                                        <p class="text-primary font-bold text-uppercase mb-2 mt-lg-2">E-COMMERCE</p>
                                        <h2 class="mb-2">Verizon Express Store</h2>
                                        <p class="text-18 cs-paragraph">Verizon is America’s biggest wireless network operator company. The Express store is a commerce project where any user in America can purchase mobile, tablets, connected devices and transfer his device to Verizon. </p>
                                        <a href="case-study/reactjs/express-store" rel="nofollow" class="text-sm text-item-center long-arrow-hover mt-3">
                                            <span class="text-primary text-uppercase ls-xs font-semibold ">Discover </span>
                                            <span class="long-arrow-icon-css icon-item right "></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class=" bg-white row  gx-0">
                                <div class="col-md-5 position-relative">
                                    <picture>
                                        <source srcset="<?php echo asset('images/cs-2.webp'); ?>" type="image/webp">
                                        <source srcset="<?php echo asset('images/cs-2.webp'); ?>" type="image/jpeg">
                                        <img data-src="<?php echo asset('images/cs-2.webp'); ?>" src="<?php echo asset('images/cs-2.webp'); ?>" alt="Academy Sports & Outdoors" title="Academy Sports & Outdoors" class=" h-100 ob-cover">
                                    </picture>
                                    <picture>
                                        <source srcset="<?php echo asset('images/cs-logo-2.webp'); ?>" type="image/webp">
                                        <source srcset="<?php echo asset('images/cs-logo-2.webp'); ?>" type="image/png">
                                        <img data-src="<?php echo asset('images/cs-logo-2.webp'); ?>" src="<?php echo asset('images/cs-logo-2.webp'); ?>" alt="Academy Sports & Outdoors" title="Academy Sports & Outdoors" class=" cs-logo">
                                    </picture>
                                </div>
                                <div class="col-md-7">
                                    <div class="boxed pb-lg-0">
                                        <p class="text-primary font-bold text-uppercase mb-2">Real Estate</p>
                                        <h2 class="mb-2">Academy Sports & Outdoors</h2>
                                        <p class="text-18 cs-paragraph">Academy Sports + Outdoors is country’s biggest sporting goods and outdoor shop. They offer a wide range of quality equipment for fishing, hunting, and camping, along with items for leisure, footwear, clothes, and more. </p>
                                        <a href="case-study/react-native/academy-sports-outdoors" class="text-sm text-item-center long-arrow-hover mt-3" rel="nofollow">
                                            <span class="text-primary text-uppercase ls-xs font-semibold">Discover </span>
                                            <span class="long-arrow-icon-css icon-item right "></span>
                                        </a>
                                        <div class="text-right d-none d-lg-block">
                                            <picture>
                                                <source srcset="<?php echo asset('images/react-native-icon.webp'); ?>" type="image/webp">
                                                <source srcset="<?php echo asset('images/react-native-icon.webp'); ?>" type="image/jpeg">
                                                <img data-src="<?php echo asset('images/react-native-icon.webp'); ?>" src="<?php echo asset('images/react-native-icon.webp'); ?>" alt="react native" class=" ">
                                            </picture>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="small-heading col-lg-4">
                    <div class=" bg-white row flex-md-row-reverse flex-lg-column-reverse h-100 justify-content-between  gx-0">
                        <div class="col-md-5 col-lg-12 position-relative">
                            <picture>
                                <source srcset="<?php echo asset('images/cs-3.webp'); ?>" type="image/webp">
                                <source srcset="<?php echo asset('images/cs-3.webp'); ?>" type="image/jpeg">
                                <img data-src="<?php echo asset('images/cs-3.webp'); ?>" src="<?php echo asset('images/cs-3.webp'); ?>" alt="Bangkok Bank DCS" title="Bangkok Bank DCS" class=" h-100 ob-cover">
                            </picture>
                            <picture>
                                <source srcset="<?php echo asset('images/cs-logo-3.webp'); ?>" type="image/webp">
                                <source srcset="<?php echo asset('images/cs-logo-3.webp'); ?>" type="image/png">
                                <img data-src="<?php echo asset('images/cs-logo-3.webp'); ?>" src="<?php echo asset('images/cs-logo-3.webp'); ?>" alt="Bangkok Bank DCS" title="Bangkok Bank DCS" class=" cs-logo">
                            </picture>
                        </div>
                        <div class="col-md-7 col-lg-12">
                            <div class="boxed pt-lg-0">
                                <div class="text-right mb-3 d-none d-lg-block">
                                    <picture>
                                        <source srcset="<?php echo asset('images/node-icon.webp'); ?>" type="image/webp">
                                        <source srcset="<?php echo asset('images/node-icon.webp'); ?>" type="image/jpeg">
                                        <img data-src="<?php echo asset('images/node-icon.webp'); ?>" src="<?php echo asset('images/node-icon.webp'); ?>" alt="nodejs">
                                    </picture>
                                </div>
                                <p class="text-primary font-bold text-uppercase mb-2">Fintech</p>
                                <h2 class="mb-2">Bangkok Bank DCS – Digital Channel Services</h2>
                                <p class="text-18 paragraph-right">Bangkok Bank wanted to prepare a new solution using ‘New Relic One’ which can replace all the modules of the DCS portal. New Relic One (Telemetry Platform) has been used to resolve the business challenges of physical and digital assets. challenges of physical and digital assets. </p>
                                <a href="case-study/reactjs/bangkokbank" class="text-sm text-item-center long-arrow-hover mt-3" rel="nofollow">
                                    <span class="text-primary text-uppercase ls-xs font-semibold ">Discover </span>
                                    <span class="long-arrow-icon-css icon-item right "></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 text-center mt-lg pt-0">
                    <a href="case-study/" class="btn btn-primary  text-uppercase" rel="nofollow">Case study</a>
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
                        <h3 class="h3 font-medium title-item margin-bottom">KAS PVT LTD Values</h3>
                        <p class="text-secondary text-md desc-item margin-bottom small-heading">
                            You add value to your customer when you deliver a product or service (and the associated
                            brand experience) that has been designed specifically to solve their problem.
                        </p>
                        <a href="<?php echo base_url(); ?>KAS PVT LTD-values" class="text-sm text-item-center long-arrow-hover">
                            <span class="text-primary text-uppercase ls-xs font-semibold">Discover </span>
                            <span class="long-arrow-icon-css icon-item right"></span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="remote-agile-box pr-lg-4 mb-0">
                        <p class="text-md ls-sm text-uppercase text-primary font-semibold category-item">
                            Mindset</p>
                        <h3 class="h3 font-medium title-item margin-bottom">KAS PVT LTD Cultures</h3>
                        <p class="text-secondary text-md desc-item margin-bottom small-heading">
                            Core Team will work as Scrum Team where Team will have quarterly goal to make sure that
                            we run financial, administrative and project management prospective.
                        </p>
                        <a href="<?php echo base_url(); ?>KAS PVT LTD-culture" class="text-sm text-item-center long-arrow-hover">
                            <span class="text-primary text-uppercase ls-xs font-semibold">Discover </span>
                            <span class="long-arrow-icon-css icon-item right"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="fortune-clients-section section-padding section-padding-bottom banner-post">
        <figure class="banner-post-img">
            <picture>
                <source srcset="<?php echo asset('images/fortune-client-bg.webp'); ?>" type="image/webp">
                <source srcset="<?php echo asset('images/fortune-client-bg.webp'); ?>" type="image/jpeg">
                <img data-src="<?php echo asset('images/fortune-client-bg.webp'); ?>" src="<?php echo asset('images/fortune-client-bg.webp'); ?>" alt="Fortune-500 Clients" title="Fortune-500 Clients" class="lazy">
            </picture>
        </figure>
        <div class="container section-padding pt-0">
            <div class="row">
                <div class="col-xl-9">
                    <div class="section-title-and-desc mb-0">
                        <div class="section-title-block text-left">
                            <h2 class="section-title-text h1 text-white ">Fortune-500 Clients</h2>
                            <p class="text-left h3 section-short-desc text-white mb-50">
                                The path to empower startups and serial entrepreneurs with 360°actions start here. We are trusted by the world’s greatest leaders since 2011.
                            </p>
                            <a href="<?php echo base_url(); ?>clientele" class="btn btn-outline-white-text text-uppercase ">Clientele
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="client-list-block  d-inline-block w-100 ">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-6 col-lg-4 section-padding-sm">
                        <div class="row align-items-center gy-4 gy-md-5 text-center">
                            <!-- <div class="col-12">
                                <h3 class="text-primary">Americas</h3>
                            </div> -->
                            <div class="col-6 mt-5">
                                <!-- <picture>
                                    <source srcset="<?php echo asset('images/client-icon-1.webp') ?>" type="image/webp">
                                    <source srcset="<?php echo asset('images/client-icon-1.webp') ?>" type="image/png">
                                    <img data-src="<?php echo asset('images/client-icon-1.webp') ?>" src="<?php echo asset('images/client-icon-1.webp') ?>" class="lazy">
                                </picture> -->
                            </div>
                            <div class="col-6 mt-5">
                                <!-- <picture>
                                    <source srcset="<?php echo asset('images/client-icon-2.webp') ?>" type="image/webp">
                                    <source srcset="<?php echo asset('images/client-icon-2.webp') ?>" type="image/png">
                                    <img data-src="<?php echo asset('images/client-icon-2.webp') ?>" src="<?php echo asset('images/client-icon-2.webp') ?>" class="lazy">
                                </picture> -->
                            </div>
                            <div class="col-6">
                                <!-- <picture>
                                    <source srcset="<?php echo asset('images/client-icon-3.webp') ?>" type="image/webp">
                                    <source srcset="<?php echo asset('images/client-icon-3.webp') ?>" type="image/png">
                                    <img data-src="<?php echo asset('images/client-icon-3.webp') ?>" src="<?php echo asset('images/client-icon-3.webp') ?>" alt="Verizon" title="Verizon" class="lazy">
                                </picture> -->
                            </div>
                            <div class="col-6">
                                <!-- <picture>
                                    <source srcset="<?php echo asset('images/client-icon-4.webp') ?>" type="image/webp">
                                    <source srcset="<?php echo asset('images/client-icon-4.webp') ?>" type="image/png">
                                    <img data-src="<?php echo asset('images/client-icon-4.webp') ?>" src="<?php echo asset('images/client-icon-4.webp') ?>" class="lazy">
                                </picture> -->
                            </div>

                            <div class="col-6">
                                <!-- <picture>
                                    <source srcset="<?php echo asset('images/client-icon-6.webp') ?>" type="image/webp">
                                    <source srcset="<?php echo asset('images/client-icon-6.webp') ?>" type="image/png">
                                    <img data-src="<?php echo asset('images/client-icon-6.webp') ?>" src="<?php echo asset('images/client-icon-6.webp') ?>" class="lazy">
                                </picture> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 section-padding-sm border-lg-left border-lg-right">
                        <div class="row align-items-center gy-4 gy-md-5 text-center ">
                            <!-- <div class="col-12">
                                <h3 class="text-primary">EMEA</h3>
                            </div> -->
                            <div class="col-6 mt-5">
                                <!-- <picture>
                                    <source srcset="<?php echo asset('images/client-6.webp') ?>" type="image/webp">
                                    <source srcset="<?php echo asset('images/client-6.webp') ?>" type="image/png">
                                    <img src="<?php echo asset('images/client-6.webp') ?>" class="lazy">
                                </picture> -->
                            </div>
                            <div class="col-6 mt-5">
                                <!-- <picture>
                                    <source srcset="<?php echo asset('images/client-5.webp') ?>" type="image/webp">
                                    <source srcset="<?php echo asset('images/client-5.webp') ?>" type="image/png">
                                    <img data-src="<?php echo asset('images/client-5.webp') ?>" src="<?php echo asset('images/client-5.webp') ?>" class="lazy">
                                </picture> -->
                            </div>
                            <div class="col-6">
                                <!-- <picture>
                                    <source srcset="<?php echo asset('images/client-icon-7.webp') ?>" type="image/webp">
                                    <source srcset="<?php echo asset('images/client-icon-7.webp') ?>" type="image/png">
                                    <img data-src="<?php echo asset('images/client-icon-7.webp') ?>" src="<?php echo asset('images/client-icon-7.webp') ?>" class="lazy">
                                </picture> -->
                            </div>
                            <div class="col-6">
                                <!-- <picture>
                                    <source srcset="<?php echo asset('images/client-icon-8.webp') ?>" type="image/webp">
                                    <source srcset="<?php echo asset('images/client-icon-8.webp') ?>" type="image/png">
                                    <img data-src="<?php echo asset('images/client-icon-8.webp') ?>" src="<?php echo asset('images/client-icon-8.webp') ?>" class="lazy">
                                </picture> -->
                            </div>
                            <div class="col-6">
                                <!-- <picture>
                                    <source srcset="<?php echo asset('images/client-icon-9.webp') ?>" type="image/webp">
                                    <source srcset="<?php echo asset('images/client-icon-9.webp') ?>" type="image/png">
                                    <img data-src="<?php echo asset('images/client-icon-9.webp') ?>" src="<?php echo asset('images/client-icon-9.webp') ?>" class="lazy">
                                </picture> -->
                            </div>
                            <div class="col-6">
                                <!-- <picture>
                                    <source srcset="<?php echo asset('images/client-icon-10.webp') ?>" type="image/webp">
                                    <source srcset="<?php echo asset('images/client-icon-10.webp') ?>" type="image/png">
                                    <img data-src="<?php echo asset('images/client-icon-10.webp') ?>" src="images/client-icon-10.png" class="lazy">
                                </picture> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 section-padding-sm">
                        <div class="row align-items-center gy-4 gy-md-5 text-center">
                            <!-- <div class="col-12">
                                <h3 class="text-primary">APAC</h3>
                            </div> -->
                            <!-- <div class="col-6 mt-5">
                                <!-- <picture>
                                    <source srcset="<?php echo asset('images/client-icon-11.webp') ?>" type="image/webp">
                                    <source srcset="<?php echo asset('images/client-icon-11.webp') ?>" type="image/webp">
                                    <source srcset="<?php echo asset('images/client-icon-11.webp') ?>" type="image/png">
                                    <img data-src="<?php echo asset('images/client-icon-11.webp') ?>" src="<?php echo asset('images/client-icon-11.webp') ?>" class="lazy">
                                </picture> --> -->
                            </div>
                            <!-- <div class="col-6 mt-5">
                                <!-- <picture>
                                    <source srcset="<?php echo asset('images/client-icon-12.webp') ?>" type="image/webp">
                                    <source srcset="<?php echo asset('images/client-icon-12.webp') ?>" type="image/png">
                                    <img data-src="<?php echo asset('images/client-icon-12.webp') ?>" src="<?php echo asset('images/client-icon-12.webp') ?>" class="lazy">
                                </picture> -->
                            </div> -->
                            <div class="col-6">
                                <!-- <picture>
                                    <source srcset="<?php echo asset('images/client-icon-13.webp') ?>" type="image/webp">
                                    <source srcset="<?php echo asset('images/client-icon-13.webp') ?>" type="image/png">
                                    <img data-src="<?php echo asset('images/client-icon-13.webp') ?>" src="<?php echo asset('images/client-icon-13.webp') ?>" class="lazy">
                                </picture> -->
                            </div>
                            <div class="col-6">
                                <!-- <picture>
                                    <source srcset="<?php echo asset('images/client-icon-14.webp') ?>" type="image/webp">
                                    <source srcset="<?php echo asset('images/client-icon-14.webp') ?>" type="image/png">
                                    <img data-src="<?php echo asset('images/client-icon-14.webp') ?>" src="<?php echo asset('images/client-icon-14.webp') ?>" class="lazy">
                                </picture> -->
                            </div>
                            <div class="col-6">
                                <!-- <picture>
                                    <source srcset="<?php echo asset('images/client-icon-15.webp') ?>" type="image/webp">
                                    <source srcset="<?php echo asset('images/client-icon-15.webp') ?>" type="image/png">
                                    <img data-src="<?php echo asset('images/client-icon-15.webp') ?>" src="<?php echo asset('images/client-icon-15.webp') ?>" class="lazy">
                                </picture> -->
                            </div>
                            <div class="col-6">
                                <!-- <picture>
                                    <source srcset="<?php echo asset('images/client-icon-16.webp') ?>" type="image/webp">
                                    <source srcset="<?php echo asset('images/client-icon-16.webp') ?>">
                                    <img data-src="<?php echo asset('images/client-icon-16.webp') ?>" src="<?php echo asset('images/client-icon-16.webp') ?>" class="lazy">
                                </picture> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
    </section>
    <!-- <section class="section-padding section-paragraph home-page-system-slider">
        <div class="container">
            <div class="row ">
                <div class="col-lg-7">
                    <div class="section-title-and-desc">
                        <div class="section-title-block ">
                            <h2 class="section-title-text h1">KAS PVT LTDSystems' Elite Hardware Products</h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <p>Associate with the innovative team of embedded engineers, designers and consultants to ace your embedded development processes.</p>
                    <a href="<?php echo base_url(); ?>systems/products" class="text-sm text-item-center long-arrow-hover">
                        <span class="text-primary text-uppercase ls-xs font-semibold">discover All </span>
                        <span class="long-arrow-icon-css icon-item right"></span>
                    </a>
                </div>
            </div>
            <div class="row ">
                <div class="col-12">
                    <div class="owl-carousel owl-theme home-slider-system">
                        <div class="item">
                            <picture>
                                <source srcset="<?php echo asset('images/slider-6.webp') ?>" type="image/webp">
                                <source srcset="<?php echo asset('images/slider-6.webp') ?>" type="image/jpeg">
                                <img data-src="<?php echo asset('images/slider-6.webp') ?>" src="<?php echo asset('images/slider-6.webp') ?>" alt="AC Charge Controller" title="AC Charge Controller" class="lazy system-slider-img">
                            </picture>
                            <div class="boxed">
                                <p class="text-primary mb-2 font-bold">E-Mobility</p>
                                <h3 class="h2 font-bold mb-3">AC Charge Controller</h3>
                                <p>With the green EV revolution outburst, consumers have become even more conscious towards the environment and invested in electric vehicles. However, the concern for recharging their EVs hasn’t diminished yet. KAS PVT LTDbrings in a top-notch solution to your consumers’ troubles.</p>
                                <a href="systems/ac-charge-controller" class="btn btn-outline-primary text-uppercase ls-xs">Talk to our expert</a>
                            </div>
                        </div>
                        <div class="item">
                            <picture>
                                <source srcset="<?php echo asset('images/dc-charge.webp') ?>" type="image/webp">
                                <source srcset="<?php echo asset('images/dc-charge.webp') ?>" type="image/jpeg"><img data-src="<?php echo asset('images/dc-charge.webp') ?>" src="<?php echo asset('images/dc-charge.webp') ?>" class="lazy system-slider-img">
                            </picture>
                            <div class="boxed">
                                <p class="text-primary mb-2 font-bold">E-Mobility</p>
                                <h3 class="h2 font-bold mb-3">DC Fast Charger</h3>
                                <p>Reduce the long wait times in charging electric vehicles (EVs) with our DC Fast Charger (DCFC). Charge the EV battery boosting the energy transition for four-wheeler electric vehicles and fleet electrification. Save the installation cost and equipment to convert AC to DC by leveling up your EV charging infrastructure game with KAS PVT LTDtoday!</p>
                                <a href="systems/dc-fast-charger" class="btn btn-outline-primary text-uppercase ls-xs">Talk to our expert</a>
                            </div>
                        </div>
                        <div class="item">
                            <picture>
                                <source srcset="<?php echo asset('images/bms.webp') ?>" type="image/webp">
                                <source srcset="<?php echo asset('images/bms.webp') ?>" type="image/jpeg">
                                <img data-src="<?php echo asset('images/bms.webp') ?>" src="images/bms.jpg" alt="Battery Management System - BMS" title="Battery Management System - BMS" class="lazy system-slider-img">
                            </picture>
                            <div class="boxed">
                                <p class="text-primary mb-2 font-bold">E-Mobility</p>
                                <h3 class="h2 font-bold mb-3">Battery Management System - BMS</h3>
                                <p>KAS PVT LTD’s BMS helps to estimate the battery's State of Health SoH and State of Charge SoC. It identifies the state of the battery, whether active or dead, as well as, supports passive Cell Balancing.</p>
                                <a href="systems/battery-management-system" class="btn btn-outline-primary text-uppercase ls-xs">Talk to our expert</a>
                            </div>
                        </div>
                        <div class="item">
                            <picture>
                                <source srcset="<?php echo asset('images/motor-control.webp') ?>" type="image/webp">
                                <source srcset="<?php echo asset('images/motor-control.webp') ?>" type="image/jpeg">
                                <img data-src="<?php echo asset('images/motor-control.webp') ?>" src="<?php echo asset('images/motor-control.webp') ?>" alt="Motor Controller" title="Motor Controller" class="lazy system-slider-img">
                            </picture>
                            <div class="boxed">
                                <p class="text-primary mb-2 font-bold">E-Mobility</p>
                                <h3 class="h2 font-bold mb-3">Motor Controller</h3>
                                <p>KAS PVT LTD’s Motor controller fine-tunes with the electric motor to improve vehicle performance. Its fine-tuning capability supports various applications for different vehicles, incorporating an optimized control algorithm.</p>
                                <a href="systems/motor-controller" class="btn btn-outline-primary text-uppercase ls-xs">Talk to our expert</a>
                            </div>
                        </div>
                        <div class="item">
                            <picture>
                                <source srcset="<?php echo asset('images/slider-3.webp') ?>" type="image/webp">
                                <source srcset="<?php echo asset('images/slider-3.webp') ?>" type="image/jpeg">
                                <img data-src="<?php echo asset('images/slider-3.webp') ?>" src="<?php echo asset('images/slider-3.webp') ?>" alt="CCS2 Controller" title="CCS2 Controller" class="lazy system-slider-img">
                            </picture>
                            <div class="boxed">
                                <p class="text-primary mb-2 font-bold">E-Mobility</p>
                                <h3 class="h2 font-bold mb-3">CCS2 Controller</h3>
                                <p>KAS PVT LTD’s CCS2CON is the most viable solution to build Level 3 chargers for Electric Vehicles. Compliant with DIN 70121 & ISO-15118 (PnC), it integrates DC fast charging with Power Module, RFID, HMI, etc.</p>
                                <a href="systems/ccs2-controller" class="btn btn-outline-primary text-uppercase ls-xs">Talk to our expert</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <section>
        <div class="container">
            <div class="section-title-and-desc">
                <div class="section-title-block text-center">
                    <h2 class="section-title-text h1">Insights by KAS PVT LTD</h2>
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
            <div class="insight-box-row row justify-content-center g-4 gy-md-0 gx-md-4 mb-xl-3">
                <div class="col-sm-6 col-md-4 insight-box-col">
                    <div class="insight-box">
                        <!-- <div class="img-box">
                            <picture>
                                <source srcset="<?php echo asset('images/insight-box-1.webp') ?>" type="image/webp">
                                <source srcset="<?php echo asset('images/insight-box-1.webp') ?>" type="image/jpeg">
                                <img data-src="<?php echo asset('images/insight-box-1.webp') ?>" src="<?php echo asset('images/insight-box-1.webp') ?>" alt="White Paper" title="White Paper" class="lazy ob-cover ">
                            </picture>
                        </div> -->
                        <div class="text-content text-center">
                            <!-- <h3 class="text-white h4 title my-auto">White Paper</h3>
                            <a href="<?php echo base_url(); ?>resources/" class="text-sm text-item-center cta-item long-arrow-hover">
                                <span class="text-primary text-nowrap text-uppercase ls-sm">know more</span>
                                <span class="long-arrow-icon-css icon-item right arrow-white"></span>
                            </a> -->
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 insight-box-col">
                    <!-- <div class="insight-box">
                        <div class="img-box">
                            <picture>
                                <source srcset="<?php echo asset('images/insight-box-2.webp') ?>" type="image/webp">
                                <source srcset="<?php echo asset('images/insight-box-2.webp') ?>" type="image/jpeg">
                                <img data-src="<?php echo asset('images/insight-box-2.webp') ?>" src="<?php echo asset('images/insight-box-2.webp') ?>" alt="Case Study" title="Case Study" class="lazy ob-cover ">
                            </picture>
                        </div> -->
                        <div class="text-content text-center">
                            <!-- <h3 class="text-white h4 title my-auto">Case Study</h3>
                            <a href="<?php echo base_url(); ?>case-study/" class="text-sm text-item-center cta-item long-arrow-hover" rel="nofollow">
                                <span class="text-primary text-nowrap text-uppercase ls-sm">know more</span>
                                <span class="long-arrow-icon-css icon-item right arrow-white"></span>
                            </a> -->
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 insight-box-col">
                    <div class="insight-box">
                        <!-- <div class="img-box">
                            <!-- <picture>
                                <source srcset="<?php echo asset('images/insight-box-3.webp'); ?>" type="image/webp">
                                <source srcset="<?php echo asset('images/insight-box-3.webp'); ?>" type="image/jpeg"><img data-src="<?php echo asset('images/insight-box-3.webp'); ?>" src="<?php echo asset('images/insight-box-3.webp'); ?>" alt="Blogs" title="Blogs" class="lazy ob-cover ">
                            </picture> -->
                        </div> -->
                        <div class="text-content text-center">
                            <!-- <h3 class="text-white h4 title my-auto">Blogs</h3>
                            <a href="<?php echo base_url(); ?>blog/" class="text-sm text-item-center cta-item long-arrow-hover">
                                <span class="text-primary text-nowrap text-uppercase ls-sm">know more</span>
                                <span class="long-arrow-icon-css icon-item right arrow-white"></span>
                            </a> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="insight-slider-wrapper section-padding pb-0 section-paragraph">
                <div class="insight-slider-navigation" id="insight-navigation-block">
                    <ul class="nav-block">
                        <li class="nav-item active">
                            <a href="javascript:void(0)" class="nav-link text-xxl">
                                <span class="slide-number">01</span>
                                <span class="text">Top 1% IT Talent</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="javascript:void(0)" class="nav-link text-xxl">
                                <span class="slide-number">02</span>
                                <span class="text">Time Zone Aligned</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="javascript:void(0)" class="nav-link text-xxl">
                                <span class="slide-number">03</span>
                                <span class="text">Experienced Team</span>
                            </a>
                        </li>
                        <span class="active-line"></span>
                    </ul>
                </div>
                <div class="insight-slider-main section-padding-md ">
                    <div class="owl-carousel owl-nav-top-right" id="insight-owl-carousel" data-sync="#insight-navigation-block">
                        <div class="item">
                            <div class="row align-items-center">
                                <div class="col-lg-4 offset-lg-1 col-md-4 col-sm-6">
                                    <picture>
                                        <source srcset="<?php echo asset('images/insight-slide-1.webp'); ?>" type="image/webp">
                                        <source srcset="<?php echo asset('images/insight-slide-1.webp'); ?>" type="image/jpeg">
                                        <img data-src="<?php echo asset('images/insight-slide-1.webp'); ?>" src="<?php echo asset('images/insight-slide-1.webp'); ?>" alt="Top 1% IT Talent" title="Top 1% IT Talent" class="lazy slider-img">
                                    </picture>
                                </div>
                                <div class="col-lg-4 offset-lg-1 col-md-8">
                                    <h4 class="h3 slider-title font-semibold">Top 1% IT Talent</h4>
                                    <p class="text-lg text-secondary    ">KAS PVT LTDTechnology is an exclusive hub of top dedicated software developers, UI/UX designers, QA experts, and product managers with incredibly rare and hidden talents you will ever come across. We let you access the top 1% of IT talent worldwide, from independent software developers to fully managed teams.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="row align-items-center">
                                <div class="col-lg-4 offset-lg-1 col-md-4 col-sm-6">
                                    <picture>
                                        <source srcset="<?php echo asset('images/insight-slide-2.webp'); ?>" type="image/webp">
                                        <source srcset="<?php echo asset('images/insight-slide-2.webp'); ?>" type="image/jpeg">
                                        <img data-src="<?php echo asset('images/insight-slide-2.webp'); ?>" alt="Time Zone Aligned" title="Time Zone Aligned" class="lazy slider-img">
                                    </picture>
                                </div>
                                <div class="col-lg-4 offset-lg-1 col-md-8">
                                    <h4 class="h3 slider-title font-semibold">Time Zone Aligned</h4>
                                    <p class="text-lg text-secondary">Timezone is never a constraint when you are working with KAS PVT LTDTechnology. We follow a simple procedure- our developers and your time zone. Hire dedicated software developers from us and collaborate from far away to work according to your time zone, deadline, and milestone.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="row align-items-center">
                                <div class="col-lg-4 offset-lg-1 col-md-4 col-sm-6">
                                    <picture>
                                        <source srcset="<?php echo asset('images/insight-slide-3.webp'); ?>" type="image/webp">
                                        <source srcset="<?php echo asset('images/insight-slide-3.webp'); ?>" type="image/jpeg">
                                        <img data-src="<?php echo asset('images/insight-slide-3.webp'); ?>" src="<?php echo asset('images/insight-slide-3.webp'); ?>" alt="Experienced Team" title="Experienced Team" class="lazy slider-img">
                                    </picture>
                                </div>
                                <div class="col-lg-4 offset-lg-1 col-md-8">
                                    <h4 class="h3 slider-title font-semibold">Experienced Team</h4>
                                    <p class="text-lg text-secondary    ">Whether you are looking for skilled developers in emerging technologies or looking for an extended arm to augment your existing team, we can lend a helping hand in both situations. We are a full-stack software development company with 650+ skilled and experienced software developers whom you can hire at your convenience to address ongoing business challenges.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
<div class="modal scroll-hide fade video-pause h-100 test-video" id="homepageVideoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered mt-0 h-100">
        <div class="modal-content bg-transparent border-0 modal-video">
            <iframe allowfullscreen="allowfullscreen" class="border-0 js-video-src"></iframe>
        </div>
    </div>
</div>
<?php require_once('footer.php'); ?>