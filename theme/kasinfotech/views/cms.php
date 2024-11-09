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
<header class="header-wrapper section-wrapper">
    <div class="header-main dark">
        <?php include_once('menu.php'); ?>
    </div>
</header>

<div id="mySidenav" class="sidenav_menu">
    <div class="sidenav_menu_inner">
        <div class="sidebar_left_outer d-none d-md-flex">
            <div class="sidebar_left">
                <div class="d-none d-xl-flex row align-items-center gx-0">                   
                    <div class="col-xl-12">
                        <h3 class="font-bold mb-sm">KAS Pvt Ltd </h3>
                        <p class="text-18">KAS Pvt Ltd represents the connected world, offering innovative and customer-centric information technology experiences, enabling Enterprises, Associates and the Society to Rise™.</p>
                    </div>
                </div>
                <div class="header_company">
                    <div class="row gy-md-4 gy-lg-5">
                        <div class="col-lg-3 col-md-6">
                            <h3 class="font-bold mb-2">12+</h3>
                            <p>Countries where we have happy customers</p>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <h3 class="font-bold mb-2">1050+</h3>
                            <p>Agile enabled employees</p>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <h3 class="font-bold mb-2">06</h3>
                            <p>World wide offices</p>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <h3 class="font-bold mb-2">12+</h3>
                            <p>Years of Experience</p>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <h3 class="font-bold mb-2">05</h3>
                            <p>Agile Coaches</p>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <h3 class="font-bold mb-2">14</h3>
                            <p>Certified Scrum Masters</p>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <h3 class="font-bold mb-2">1000+</h3>
                            <p>Clients projects</p>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <h3 class="font-bold mb-2">1458</h3>
                            <p>Happy customers</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-graylight">
                <ul class="social-icon-main flex-wrap ml-auto d-inline-flex ">
                    <li class="social-item">
                        <a href="<?php echo config_item('facebook') ?>" class="social-link" target="_blank">
                            <svg viewBox="0 0 100 100" class="svg-icon">
                                <use xlink:href="#facebook-svg" />
                            </svg>
                        </a>
                    </li>
                    <li class="social-item">
                        <a href="<?php echo config_item('twitter') ?>" class="social-link" target="_blank">
                            <svg viewBox="0 0 100 100" class="svg-icon svg-pt">
                                <use xlink:href="#twitter-svg" />
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
                        <a href="<?php echo config_item('youtube') ?>" class="social-link" target="_blank">
                            <svg viewBox="0 0 100 100" class="svg-icon">
                                <use xlink:href="#youtube-svg" />
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="sidebar_right_outer">
            <ul class="d-xl-none">

                <li class="menu_parent">
                    <a href="#" class="res-submenu">Customers</a>
                    <ul class="sub-side">
                        <a href="#" class=" res-submenu-two">Case Studies</a>
                        <ul class="sub-side-two">
                            <li><a href="<?php echo base_url('case-study/reactjs/'); ?>">React JS</a></li>
                            <li><a href="<?php echo base_url('case-study/angularjs/'); ?>">Angular JS</a></li>
                            <li><a href="<?php echo base_url('case-study/vuejs/'); ?>">Vue JS</a></li>
                            <li><a href="<?php echo base_url('case-study/nodejs/'); ?>">Node JS</a></li>
                            <li><a href="<?php echo base_url('case-study/'); ?>">Explore All</a></li>
                        </ul>
                    </ul>
                    <ul class="sub-side">
                        <a href="#" class=" res-submenu-two">Fortune 500 Clients</a>
                        <ul class="sub-side-two">
                            <li><a href="<?php echo base_url(); ?>case-study/verizon/" rel="nofollow">Verizon </a></li>
                            <li><a href="<?php echo base_url(); ?>case-study/the-container-store/" rel="nofollow">The Container Store</a></li>
                            <li><a href="<?php echo base_url(); ?>case-study/reactjs/kpmg" rel="nofollow">KPMG</a></li>
                            <li><a href="<?php echo base_url(); ?>case-study/react-native/academy-sports-outdoors" rel="nofollow">Academy Sports & Outdoors</a></li>
                            <li><a href="<?php echo base_url(); ?>case-study/reactjs/bangkokbank" rel="nofollow">Bangkok Bank Ltd</a></li>
                            <li><a href="<?php echo base_url(); ?>case-study/react-native/the-childrens-place" rel="nofollow">The Children's Place</a></li>
                            <li><a href="<?php echo base_url(); ?>case-study/reactjs/edward-jones" rel="nofollow">Edward Jones</a></li>
                            <li><a href="<?php echo base_url(); ?>case-study/angularjs/franklintempleton" rel="nofollow">Franklin Templeton </a></li>
                            <li><a href="<?php echo base_url(); ?>case-study/angularjs/adviceworks" rel="nofollow">AdviceWorks</a></li>
                            <li><a href="<?php echo base_url(); ?>case-study/reactjs/natwest-markets" rel="nofollow">NatWest Markets</a></li>
                            <li><a href="<?php echo base_url(); ?>case-study/reactjs/bridgestone" rel="nofollow">Bridgestone</a></li>
                            <li><a href="<?php echo base_url(); ?>case-study/angularjs/ups" rel="nofollow">United Parcel Service</a></li>
                        </ul>
                    </ul>
                    <ul class="sub-side">
                        <a href="#" class=" res-submenu-two">Industries</a>
                        <ul class="sub-side-two">
                            <li><a href="<?php echo base_url(); ?>case-study/information-technology/" rel="nofollow">Information Technology</a></li>
                            <li><a href="<?php echo base_url(); ?>case-study/bfsi/" rel="nofollow">BFSI</a></li>
                            <li><a href="<?php echo base_url(); ?>case-study/education/" rel="nofollow">Education</a></li>
                            <li><a href="<?php echo base_url(); ?>case-study/marketing-advertising/" rel="nofollow">Marketing & Advertising</a></li>
                            <li><a href="<?php echo base_url(); ?>case-study/manufacturing/" rel="nofollow">Manufacturing</a></li>
                            <li><a href="<?php echo base_url(); ?>case-study/retail/" rel="nofollow">Retail</a></li>
                            <li><a href="<?php echo base_url(); ?>case-study/logistics-transportation/" rel="nofollow">Logistics & Transportation</a></li>
                            <li><a href="<?php echo base_url(); ?>case-study/healthcare/" rel="nofollow">Healthcare</a></li>
                            <li><a href="<?php echo base_url(); ?>case-study/ecommerce/" rel="nofollow">eCommerce</a></li>
                            <li><a href="<?php echo base_url(); ?>case-study/public-services/" rel="nofollow">Public Services</a></li>
                            <li><a href="<?php echo base_url(); ?>case-study/travel-hospitality/" rel="nofollow">Travel & Hospitality</a></li>
                            <li><a href="<?php echo base_url(); ?>case-study/cloud/" rel="nofollow">Cloud</a></li>
                            <li><a href="<?php echo base_url(); ?>case-study/telecommunications/" rel="nofollow">Telecommunications</a></li>
                            <li><a href="<?php echo base_url(); ?>case-study/real-estate/" rel="nofollow">Real Estate</a></li>
                        </ul>
                    </ul>
                </li>

                <li class="menu_parent">
                    <a href="#" class="res-submenu">What we do</a>
                    <ul class="sub-side">
                        <a href="#" class=" res-submenu-two">Experience</a>
                        <ul class="sub-side-two">
                            <li><a href="<?php echo base_url(); ?>digital-workplace-services">Digital Workplace Services</a></li>
                            <li><a href="<?php echo base_url(); ?>product-enhancement">Product Enhancement</a></li>
                        </ul>
                    </ul>
                    <ul class="sub-side">
                        <a href="#" class=" res-submenu-two">Insights</a>
                        <ul class="sub-side-two">


                        </ul>
                    </ul>
                    <ul class="sub-side">
                        <a href="#" class=" res-submenu-two">SAP Solutions</a>
                        <ul class="sub-side-two">
                            <li><a href="<?php echo base_url(); ?>sap-consulting-services">SAP Consultation</a></li>
                        </ul>
                    </ul>
                    <ul class="sub-side">
                        <a href="#" class=" res-submenu-two">Innovate</a>
                        <ul class="sub-side-two">
                            <li><a href="<?php echo base_url(); ?>hire-blockchain-developer">Blockchain </a></li>
                            <li><a href="<?php echo base_url(); ?>software-engineering">Software Engineering</a></li>
                            <li><a href="<?php echo base_url(); ?>web-development-services">Web Development</a></li>
                            <li><a href="<?php echo base_url(); ?>internet-of-things-consulting-services">Internet of Things (IoT)</a></li>
                            <li><a href="<?php echo base_url(); ?>hire-data-scientist">Data Scientist</a></li>
                            <li><a href="<?php echo base_url(); ?>hire-ai-developer">AI Developer</a></li>
                            <li><a href="<?php echo base_url(); ?>hire-ml-developer">ML Developer</a></li>
                        </ul>
                    </ul>
                    <ul class="sub-side">
                        <a href="#" class=" res-submenu-two">Accelerate</a>
                        <ul class="sub-side-two">

                            <li><a href="<?php echo base_url(); ?>digital-process-automation">Digital Process Automation </a></li>



                            <li><a href="<?php echo base_url(); ?>customer-experience-transformation">Service Experience Transformation</a></li>
                        </ul>
                    </ul>
                    <ul class="sub-side">
                        <a href="#" class=" res-submenu-two">Assure</a>
                        <ul class="sub-side-two">
                            <li><a href="<?php echo base_url(); ?>quality-assurance-testing-services">Quality Assurance</a></li>
                            <li><a href="<?php echo base_url(); ?>it-staff-augmentation-services">IT Staff Augmentation </a></li>
                        </ul>
                    </ul>
                    <ul class="sub-side">
                        <a href="#" class=" res-submenu-two">Embedded & Hardware</a>
                        <ul class="sub-side-two">
                            <li><a href="<?php echo base_url(); ?>systems/">Product Engineering</a></li>
                            <li><a href="<?php echo base_url(); ?>systems/analog-design-services">Analog Design Services</a></li>
                            <li><a href="<?php echo base_url(); ?>systems/fpga-engineering-service">FPGA Engineering Service</a></li>
                            <li><a href="<?php echo base_url(); ?>systems/wireless-design-services">Wireless Design</a></li>
                            <li><a href="<?php echo base_url(); ?>systems/embedded-software-design">Embedded Software Design</a></li>
                            <li><a href="<?php echo base_url(); ?>systems/hardware-engineering-solutions">Hardware Engineering</a></li>
                            <li><a href="<?php echo base_url(); ?>systems/power-engineering-services">Power Engineering</a></li>
                            <li><a href="<?php echo base_url(); ?>systems/iot-hardware-solutions">IoT Hardware</a></li>
                        </ul>
                    </ul>
                </li>
                <li class="menu_parent">
                    <a href="#" class="res-submenu">who we work with</a>
                    <ul class="sub-side">
                        <a href="#" class=" res-submenu-two">Industries</a>
                        <ul class="sub-side-two">
                            <li><a href="<?php echo base_url(); ?>banking-finance-insurance-software-development">Banking Financial services & Insurance</a></li>
                            <li><a href="<?php echo base_url(); ?>minimum-viable-product-development-service">Startups</a></li>
                            <li><a href="<?php echo base_url(); ?>oil-and-gas-enterprise-mobility-solution">Oil & Gas</a></li>
                            <li><a href="<?php echo base_url(); ?>healthcare-application-software-development">Healthcare Life Science</a></li>
                            <li><a href="<?php echo base_url(); ?>real-estate-software-development">Real Estate & Construction </a></li>
                            <li><a href="<?php echo base_url(); ?>logistics-mobile-application-development">Logistics </a></li>
                        </ul>
                    </ul>
                </li>
                <li class="menu_parent">
                    <a href="#" class="res-submenu">About Us</a>
                    <ul class="sub-side">
                        <a href="#" class=" res-submenu-two">About Company</a>
                        <ul class="sub-side-two">
                            <li><a href="<?php echo base_url(); ?>about-us">About Us</a></li>

                            <li><a href="<?php echo base_url(); ?>awards-recognition">Awards & Recognition</a></li>
                            <li><a href="<?php echo base_url(); ?>infrastructure">Infrastructure </a></li>
                            <li><a href="<?php echo base_url(); ?>locations">Our Locations</a></li>
                            <li><a href="<?php echo base_url(); ?>partnership">Partnership</a></li>
                        </ul>
                    </ul>
                    <ul class="sub-side">
                        <a href="#" class=" res-submenu-two">Culture</a>
                        <ul class="sub-side-two">
                            <li><a href="<?php echo base_url(); ?>agile-mindset">Agile Mindset</a></li>
                            <li><a href="<?php echo base_url(); ?>KAS Pvt Ltd -values">KAS Pvt Ltd Values</a></li>
                            <li><a href="<?php echo base_url(); ?>KAS Pvt Ltd -culture">KAS Pvt Ltd Culture</a></li>
                        </ul>
                    </ul>
                </li>
                <li class="menu_parent">
                    <a href="#" class="res-submenu">Technology</a>
                    <ul class="sub-side">
                        <a href="#" class=" res-submenu-two">Front End</a>
                        <ul class="sub-side-two">
                            <li><a href="<?php echo base_url(); ?>angular-js-development">Angular</a></li>
                            <li><a href="<?php echo base_url(); ?>hire-reactjs-developer">Reactjs</a></li>
                            <li><a href="<?php echo base_url(); ?>hire-vuejs-developer">Vue.js</a></li>
                            <li><a href="<?php echo base_url(); ?>ui-ux-enhancement-service">UI/UX</a></li>
                        </ul>
                    </ul>
                    <ul class="sub-side">
                        <a href="#" class=" res-submenu-two">Platforms</a>
                        <ul class="sub-side-two">
                            <li><a href="<?php echo base_url(); ?>hire-microsoft-dynamics-365-developer">MS Dynamics</a></li>
                            <li><a href="<?php echo base_url(); ?>hire-salesforce-developer">Salesforce</a></li>
                        </ul>
                    </ul>
                    <ul class="sub-side">
                        <a href="#" class=" res-submenu-two">Back End</a>
                        <ul class="sub-side-two">
                            <li><a href="<?php echo base_url(); ?>ruby-on-rails-development">Ruby on Rails</a></li>
                            <li><a href="<?php echo base_url(); ?>hire-node-developer">Node.js</a></li>
                            <li><a href="<?php echo base_url(); ?>hire-golang-developer">Golang</a></li>
                            <li><a href="<?php echo base_url(); ?>hire-laravel-developer">Laravel</a></li>
                            <li><a href="<?php echo base_url(); ?>hire-dot-net-developer">.NET</a></li>
                            <li><a href="<?php echo base_url(); ?>hire-spring-boot-developer">Java </a></li>
                            <li><a href="<?php echo base_url(); ?>hire-python-developer">Python</a></li>
                        </ul>
                    </ul>
                    <ul class="sub-side">
                        <a href="#" class=" res-submenu-two">Mobile</a>
                        <ul class="sub-side-two">
                            <li><a href="<?php echo base_url(); ?>hire-react-native-developer">React Native</a></li>
                            <li><a href="<?php echo base_url(); ?>hire-flutter-developer">Flutter</a></li>
                            <li><a href="<?php echo base_url(); ?>android-application-development">Android</a></li>
                            <li><a href="<?php echo base_url(); ?>mobile-app-development">iOS</a></li>
                        </ul>
                    </ul>
                    <ul class="sub-side">
                        <a href="#" class=" res-submenu-two">Cloud</a>
                        <ul class="sub-side-two">
                            <li><a href="<?php echo base_url(); ?>aws-cloud-consulting-services">AWS</a></li>
                            <li><a href="<?php echo base_url(); ?>hire-devops-developers">DevOps</a></li>
                        </ul>
                    </ul>
                    <ul class="sub-side">
                        <a href="#" class=" res-submenu-two">QA</a>
                        <ul class="sub-side-two">
                            <li><a href="<?php echo base_url(); ?>automation-testing-services">Automation Testing</a></li>
                            <li><a href="<?php echo base_url(); ?>quality-assurance-testing-services">Software Testing </a></li>
                        </ul>
                    </ul>
                    <ul class="sub-side">
                        <a href="#" class=" res-submenu-two">Embedded & Hardware</a>
                        <ul class="sub-side-two">
                            <li><a href="<?php echo base_url(); ?>systems/embedded-developer">Embedded </a></li>
                        </ul>
                    </ul>
                    <ul class="sub-side">
                        <a href="<?php echo base_url(); ?>technologies" class>Explore All</a>
                    </ul>
                </li>
                <li class="menu_parent">
                    <a href="#" class="res-submenu">Products</a>
                    <ul class="sub-side">
                        <li><a href="<?php echo base_url(); ?>systems/battery-management-system">Battery Management System</a></li>
                        <li><a href="<?php echo base_url(); ?>systems/motor-controller">Motor Controller</a></li>
                        <li><a href="<?php echo base_url(); ?>systems/ccs2-controller">CCS2 Controller</a></li>
                        <li><a href="<?php echo base_url(); ?>systems/bms-manufacturers-suppliers">BMS Manufacturers and Suppliers</a></li>
                        <li><a href="<?php echo base_url(); ?>systems/dc-fast-charger">DC Fast Charger</a></li>
                        <li><a href="<?php echo base_url(); ?>systems/ev-components-manufacturers-suppliers">EV Manufacturers and Suppliers</a></li>
                        <li><a href="<?php echo base_url(); ?>systems/ac-fast-charger-manufacturer">AC Charger</a></li>
                        <li><a href="<?php echo base_url(); ?>systems/ac-charge-controller">AC Charge Controller</a></li>
                        <a href="<?php echo base_url(); ?>systems/products" class>Explore All</a>
                    </ul>
                </li>
            </ul>
            <ul>
                <li><a href="<?php echo base_url(); ?>careers">Careers</a></li>
                <li><a href="<?php echo base_url(); ?>careers#workKAS Pvt Ltd ">Work @ KAS Pvt Ltd </a></li>
                <li><a href="<?php echo base_url(); ?>blog/">Blogs</a></li>
                <li><a href="<?php echo base_url(); ?>resources/">Resources</a></li>
                <li><a href="<?php echo base_url(); ?>testimonials">Customer Reviews</a></li>
                <li><a href="<?php echo base_url(); ?>contactus">Contact</a></li>
                <li><a href="https://calendly.com/KAS Pvt Ltd meeting/30-minute-meeting" target="_blank" class="btn btn-outline-white mt-4 d-xl-none book-call-org text-uppercase">book a 30 min call</a></li>
            </ul>
        </div>
    </div>
</div>
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
                                <source srcset="images/home-cards-one.webp" type="image/webp">
                                <source srcset="images/home-cards-one.jpg" type="image/jpeg"><img data-src="<?php echo base_url(); ?>main-boot-5/images/home/xhome-cards-one.jpg,qv-3.pagespeed.ic.RSKMEBDI9C.webp" src="images/xhome-cards-one.jpg%2Cqv-3.pagespeed.ic.RSKMEBDI9C.webp" alt="KAS Pvt Ltd Tech Agility " title="KAS Pvt Ltd Tech Agility " class="lazy">
                            </picture>
                        </figure>
                        <h3 class="card-title text-white h5-2">KAS Pvt Ltd Tech Agility – Q3, 2023</h3>
                        <a href="<?php echo base_url(); ?>KAS Pvt Ltd -tech-agility" class="text-sm text-item-center long-arrow-hover">
                            <span class="text-primary text-uppercase ls-sm">new edition out now </span>
                            <span class="long-arrow-icon-css icon-item right arrow-white"></span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-6 card-column">
                    <div class="card-image-primary banner-post">
                        <figure class="banner-post-img">
                            <picture>
                                <source srcset="images/home-cards-two.webp" type="image/webp">
                                <source srcset="images/home-cards-two.jpg" type="image/jpeg"><img data-src="<?php echo base_url(); ?>main-boot-5/images/home/home-cards-two.jpg?v-3" src="images/home-cards-two.jpg" alt="Company Fact Sheet" title="Company Fact Sheet" class="lazy">
                            </picture>
                        </figure>
                        <h3 class="card-title text-white h5-2">Company Fact Sheet</h3>
                        <a href="<?php echo base_url(); ?>main-boot-5/images/KAS Pvt Ltd _Technology_Brochure.pdf?v5" class="text-sm text-item-center long-arrow-hover" target="_blank">
                            <span class="text-primary text-uppercase ls-sm">visit now </span>
                            <span class="long-arrow-icon-css icon-item right arrow-white"></span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-6 card-column">
                    <div class="card-image-primary banner-post">
                        <figure class="banner-post-img">
                            <picture>
                                <source srcset="images/home-cards-three.webp" type="image/webp">
                                <source srcset="images/home-cards-three.jpg" type="image/jpeg"><img data-src="<?php echo base_url(); ?>main-boot-5/images/home/xhome-cards-three.jpg,qv-3.pagespeed.ic.lJ7xcE3866.webp" src="images/xhome-cards-three.jpg%2Cqv-3.pagespeed.ic.lJ7xcE3866.webp" alt="We’re Hiring! Come Join Our Team!" title="We’re Hiring! Come Join Our Team!" class="lazy">
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
                                <source srcset="images/home-cards-four.webp" type="image/webp">
                                <source srcset="images/home-cards-four.jpg" type="image/jpeg"><img data-src="<?php echo base_url(); ?>main-boot-5/images/home/xhome-cards-four.jpg,qv-3.pagespeed.ic.r4jJC-e4pI.webp" src="images/xhome-cards-four.jpg%2Cqv-3.pagespeed.ic.r4jJC-e4pI.webp" alt="The Keys to Organizational Agility: From Agile to
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
                                <source srcset="images/home-cards-five.webp" type="image/webp">
                                <source srcset="images/home-cards-five.jpg" type="image/jpeg"><img data-src="<?php echo base_url(); ?>main-boot-5/images/home/xhome-cards-five.jpg,qv-3.pagespeed.ic.WccGZqii7G.webp" src="images/xhome-cards-five.jpg%2Cqv-3.pagespeed.ic.WccGZqii7G.webp" alt="Outsourcing: The Good,The Bad and The Honest Truth" title="Outsourcing: The Good,The Bad and The Honest Truth" class="lazy">
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
                                <source srcset="images/home-cards-six.webp" type="image/webp">
                                <source srcset="images/home-cards-six.jpg" type="image/jpeg"><img data-src="<?php echo base_url(); ?>main-boot-5/images/home/xhome-cards-six.jpg,qv-3.pagespeed.ic.QxVKA118Hd.webp" src="images/xhome-cards-six.jpg%2Cqv-3.pagespeed.ic.QxVKA118Hd.webp" alt="New Agile Development Center, New Chapter" title="New Agile Development Center, New Chapter" class="lazy">
                            </picture>
                        </figure>
                        <h4 class="card-title text-white h5-2">New Agile Development Center, New Chapter</h4>
                        <a href="<?php echo base_url(); ?>development-center-KAS Pvt Ltd " class="text-sm text-item-center long-arrow-hover">
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
                <div class="digital-transformation-bg bg-behind-content" style="background-image:url(<?php echo asset('images/xdigital_transformation_bg_1.jpg') ?>)"></div>
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
                                <img src="<?php echo asset('images/gptw_1.webp') ?>">
                            </div>
                            <div class="carousel-item ">
                                <img src="<?php echo asset('images/abt-1.webp') ?>">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo asset('images/abt-3.jpg') ?>">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo asset('images/abt-4.jpg') ?>">
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
    <section class="fortune-clients-section section-padding section-padding-bottom banner-post">
        <figure class="banner-post-img">
            <picture>
                <source srcset="images/fortune-client-bg.webp" type="image/webp">
                <source srcset="images/fortune-client-bg.jpg" type="image/jpeg"><img data-src="<?php echo base_url(); ?>main-boot-5/images/xfortune-client-bg.jpg.pagespeed.ic.qtDJDgDuY4.webp" src="images/xfortune-client-bg.jpg.pagespeed.ic.qtDJDgDuY4.webp" alt="Fortune-500 Clients" title="Fortune-500 Clients" class="lazy">
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
        <div class="client-list-block  d-inline-block w-100 ">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-6 col-lg-4 section-padding-sm">
                        <div class="row align-items-center gy-4 gy-md-5 text-center">
                            <div class="col-12">
                                <h3 class="text-primary">Americas</h3>
                            </div>
                            <div class="col-6 mt-5">
                                <picture>
                                    <source srcset="images/client-icon-1.webp" type="image/webp">
                                    <source srcset="images/client-icon-1.png" type="image/png"><img data-src="<?php echo base_url(); ?>main-boot-5/images/home/xclient-icon-1.png.pagespeed.ic.oyfyjxbJUJ.png" src="images/xclient-icon-1.png.pagespeed.ic.oyfyjxbJUJ.png" alt="Franklin Templetion Investments" title="Franklin Templetion Investments" class="lazy">
                                </picture>
                            </div>
                            <div class="col-6 mt-5">
                                <picture>
                                    <source srcset="images/client-icon-2.webp" type="image/webp">
                                    <source srcset="images/client-icon-2.png" type="image/png"><img data-src="<?php echo base_url(); ?>main-boot-5/images/home/xclient-icon-2.png.pagespeed.ic.yoFyFBwgW6.png" src="images/xclient-icon-2.png.pagespeed.ic.yoFyFBwgW6.png" alt="KPMG" title="KPMG" class="lazy">
                                </picture>
                            </div>
                            <div class="col-6">
                                <picture>
                                    <source srcset="images/client-icon-3.webp" type="image/webp">
                                    <source srcset="images/client-icon-3.png" type="image/png"><img data-src="<?php echo base_url(); ?>main-boot-5/images/home/xclient-icon-3.png.pagespeed.ic.PCKDT_ZGW1.png" src="images/xclient-icon-3.png.pagespeed.ic.PCKDT_ZGW1.png" alt="Verizon" title="Verizon" class="lazy">
                                </picture>
                            </div>
                            <div class="col-6">
                                <picture>
                                    <source srcset="images/client-icon-4.webp" type="image/webp">
                                    <source srcset="images/client-icon-4.png" type="image/png"><img data-src="<?php echo base_url(); ?>main-boot-5/images/home/xclient-icon-4.png.pagespeed.ic.OFhN25U20z.png" src="images/xclient-icon-4.png.pagespeed.ic.OFhN25U20z.png" alt="Academy sports+outdoors" title="Academy sports+outdoors" class="lazy">
                                </picture>
                            </div>

                            <div class="col-6">
                                <picture>
                                    <source srcset="images/client-icon-6.webp" type="image/webp">
                                    <source srcset="images/client-icon-6.png" type="image/png"><img data-src="<?php echo base_url(); ?>main-boot-5/images/home/client-icon-6.png" src="images/client-icon-6.png" alt="ups" title="ups" class="lazy">
                                </picture>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 section-padding-sm border-lg-left border-lg-right">
                        <div class="row align-items-center gy-4 gy-md-5 text-center ">
                            <div class="col-12">
                                <h3 class="text-primary">EMEA</h3>
                            </div>
                            <div class="col-6 mt-5">
                                <picture>
                                    <source srcset="images/client-6.webp" type="image/webp">
                                    <source srcset="images/client-6.png" type="image/png"><img data-src="<?php echo base_url(); ?>main-boot-5/images/client-6.png" src="images/client-6.png" alt="3m" title="3m" class="lazy">
                                </picture>
                            </div>
                            <div class="col-6 mt-5">
                                <picture>
                                    <source srcset="images/client-5.webp" type="image/webp">
                                    <source srcset="images/client-5.png" type="image/png"><img data-src="<?php echo base_url(); ?>main-boot-5/images/client-5.png" src="images/client-5.png" alt="Renault" title="Renault" class="lazy">
                                </picture>
                            </div>
                            <div class="col-6">
                                <picture>
                                    <source srcset="images/client-icon-7.webp" type="image/webp">
                                    <source srcset="images/client-icon-7.png" type="image/png"><img data-src="<?php echo base_url(); ?>main-boot-5/images/home/xclient-icon-7.png.pagespeed.ic.iDn2cWsC-G.png" src="images/xclient-icon-7.png.pagespeed.ic.iDn2cWsC-G.png" alt="Disney" title="Disney" class="lazy">
                                </picture>
                            </div>
                            <div class="col-6">
                                <picture>
                                    <source srcset="images/client-icon-8.webp" type="image/webp">
                                    <source srcset="images/client-icon-8.png" type="image/png"><img data-src="<?php echo base_url(); ?>main-boot-5/images/home/client-icon-8.png" src="images/client-icon-8.png" alt="Warner Bros" title="Warner Bros" class="lazy">
                                </picture>
                            </div>
                            <div class="col-6">
                                <picture>
                                    <source srcset="images/client-icon-9.webp" type="image/webp">
                                    <source srcset="images/client-icon-9.png" type="image/png"><img data-src="<?php echo base_url(); ?>main-boot-5/images/home/xclient-icon-9.png.pagespeed.ic.4tptHFUDGS.png" src="images/xclient-icon-9.png.pagespeed.ic.4tptHFUDGS.png" alt="Scotch" title="Scotch" class="lazy">
                                </picture>
                            </div>
                            <div class="col-6">
                                <picture>
                                    <source srcset="images/client-icon-10.webp" type="image/webp">
                                    <source srcset="images/client-icon-10.png" type="image/png"><img data-src="<?php echo base_url(); ?>main-boot-5/images/home/client-icon-10.png" src="images/client-icon-10.png" alt="volkswagen" title="volkswagen" class="lazy">
                                </picture>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 section-padding-sm">
                        <div class="row align-items-center gy-4 gy-md-5 text-center">
                            <div class="col-12">
                                <h3 class="text-primary">APAC</h3>
                            </div>
                            <div class="col-6 mt-5">
                                <picture>
                                    <source srcset="images/client-icon-11.webp" type="image/webp">
                                    <source srcset="images/client-icon-11.png" type="image/png"><img data-src="<?php echo base_url(); ?>main-boot-5/images/home/client-icon-11.png" src="images/client-icon-11.png" alt="Publicis Sapient" title="Publicis Sapient" class="lazy">
                                </picture>
                            </div>
                            <div class="col-6 mt-5">
                                <picture>
                                    <source srcset="images/client-icon-12.webp" type="image/webp">
                                    <source srcset="images/client-icon-12.png" type="image/png"><img data-src="<?php echo base_url(); ?>main-boot-5/images/home/xclient-icon-12.png.pagespeed.ic.WI-LW6r2X4.png" src="images/xclient-icon-12.png.pagespeed.ic.WI-LW6r2X4.png" alt="Infosys" title="Infosys" class="lazy">
                                </picture>
                            </div>
                            <div class="col-6">
                                <picture>
                                    <source srcset="images/client-icon-13.webp" type="image/webp">
                                    <source srcset="images/client-icon-13.png" type="image/png"><img data-src="<?php echo base_url(); ?>main-boot-5/images/home/xclient-icon-13.png.pagespeed.ic.oKBKK2RH9k.png" src="images/xclient-icon-13.png.pagespeed.ic.oKBKK2RH9k.png" alt="Bangkok bank" title="Bangkok bank" class="lazy">
                                </picture>
                            </div>
                            <div class="col-6">
                                <picture>
                                    <source srcset="images/client-icon-14.webp" type="image/webp">
                                    <source srcset="images/client-icon-14.png" type="image/png"><img data-src="<?php echo base_url(); ?>main-boot-5/images/home/client-icon-14.png" src="images/client-icon-14.png" alt="Shell" title="Shell" class="lazy">
                                </picture>
                            </div>
                            <div class="col-6">
                                <picture>
                                    <source srcset="images/client-icon-15.webp" type="image/webp">
                                    <source srcset="images/client-icon-15.png" type="image/png"><img data-src="<?php echo base_url(); ?>main-boot-5/images/home/client-icon-15.png" src="images/client-icon-15.png" alt="Swiggy" title="Swiggy" class="lazy">
                                </picture>
                            </div>
                            <div class="col-6">
                                <picture>
                                    <source srcset="images/client-icon-16.webp" type="image/webp">
                                    <source srcset="images/client-icon-16.png" type="image/png"><img data-src="<?php echo base_url(); ?>main-boot-5/images/home/client-icon-16.png" src="images/client-icon-16.png" alt="Wipro" title="Wipro" class="lazy">
                                </picture>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-padding section-paragraph home-page-system-slider">
        <div class="container">
            <div class="row ">
                <div class="col-lg-7">
                    <div class="section-title-and-desc">
                        <div class="section-title-block ">
                            <h2 class="section-title-text h1">KAS Pvt Ltd Systems' Elite Hardware Products</h2>
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
                                <source srcset="images/slider-6.webp" type="image/webp">
                                <source srcset="images/slider-6.jpg" type="image/jpeg"><img data-src="<?php echo base_url(); ?>main-boot-5/images/home/slider-6.jpg?v-2" src="images/slider-6.jpg" alt="AC Charge Controller" title="AC Charge Controller" class="lazy system-slider-img">
                            </picture>
                            <div class="boxed">
                                <p class="text-primary mb-2 font-bold">E-Mobility</p>
                                <h3 class="h2 font-bold mb-3">AC Charge Controller</h3>
                                <p>With the green EV revolution outburst, consumers have become even more conscious towards the environment and invested in electric vehicles. However, the concern for recharging their EVs hasn’t diminished yet. KAS Pvt Ltd brings in a top-notch solution to your consumers’ troubles.</p>
                                <a href="systems/ac-charge-controller" class="btn btn-outline-primary text-uppercase ls-xs">Talk to our expert</a>
                            </div>
                        </div>
                        <div class="item">
                            <picture>
                                <source srcset="images/dc-charge.webp" type="image/webp">
                                <source srcset="images/dc-charge.jpg" type="image/jpeg"><img data-src="<?php echo base_url(); ?>main-boot-5/images/home/dc-charge.jpg?v-2" src="images/dc-charge.jpg" alt="DC Fast Charger" title="DC Fast Charger" class="lazy system-slider-img">
                            </picture>
                            <div class="boxed">
                                <p class="text-primary mb-2 font-bold">E-Mobility</p>
                                <h3 class="h2 font-bold mb-3">DC Fast Charger</h3>
                                <p>Reduce the long wait times in charging electric vehicles (EVs) with our DC Fast Charger (DCFC). Charge the EV battery boosting the energy transition for four-wheeler electric vehicles and fleet electrification. Save the installation cost and equipment to convert AC to DC by leveling up your EV charging infrastructure game with KAS Pvt Ltd today!</p>
                                <a href="systems/dc-fast-charger" class="btn btn-outline-primary text-uppercase ls-xs">Talk to our expert</a>
                            </div>
                        </div>
                        <div class="item">
                            <picture>
                                <source srcset="images/bms.webp" type="image/webp">
                                <source srcset="images/bms.jpg" type="image/jpeg"><img data-src="<?php echo base_url(); ?>main-boot-5/images/home/bms.jpg" src="images/bms.jpg" alt="Battery Management System - BMS" title="Battery Management System - BMS" class="lazy system-slider-img">
                            </picture>
                            <div class="boxed">
                                <p class="text-primary mb-2 font-bold">E-Mobility</p>
                                <h3 class="h2 font-bold mb-3">Battery Management System - BMS</h3>
                                <p>KAS Pvt Ltd ’s BMS helps to estimate the battery's State of Health SoH and State of Charge SoC. It identifies the state of the battery, whether active or dead, as well as, supports passive Cell Balancing.</p>
                                <a href="systems/battery-management-system" class="btn btn-outline-primary text-uppercase ls-xs">Talk to our expert</a>
                            </div>
                        </div>
                        <div class="item">
                            <picture>
                                <source srcset="images/motor-control.webp" type="image/webp">
                                <source srcset="images/motor-control.jpg" type="image/jpeg"><img data-src="<?php echo base_url(); ?>main-boot-5/images/home/motor-control.jpg" src="images/motor-control.jpg" alt="Motor Controller" title="Motor Controller" class="lazy system-slider-img">
                            </picture>
                            <div class="boxed">
                                <p class="text-primary mb-2 font-bold">E-Mobility</p>
                                <h3 class="h2 font-bold mb-3">Motor Controller</h3>
                                <p>KAS Pvt Ltd ’s Motor controller fine-tunes with the electric motor to improve vehicle performance. Its fine-tuning capability supports various applications for different vehicles, incorporating an optimized control algorithm.</p>
                                <a href="systems/motor-controller" class="btn btn-outline-primary text-uppercase ls-xs">Talk to our expert</a>
                            </div>
                        </div>
                        <div class="item">
                            <picture>
                                <source srcset="images/slider-3.webp" type="image/webp">
                                <source srcset="images/slider-3.jpg" type="image/jpeg"><img data-src="<?php echo base_url(); ?>main-boot-5/images/home/xslider-3.jpg.pagespeed.ic.Qx-cTjsFvU.webp" src="images/xslider-3.jpg.pagespeed.ic.Qx-cTjsFvU.webp" alt="CCS2 Controller" title="CCS2 Controller" class="lazy system-slider-img">
                            </picture>
                            <div class="boxed">
                                <p class="text-primary mb-2 font-bold">E-Mobility</p>
                                <h3 class="h2 font-bold mb-3">CCS2 Controller</h3>
                                <p>KAS Pvt Ltd ’s CCS2CON is the most viable solution to build Level 3 chargers for Electric Vehicles. Compliant with DIN 70121 & ISO-15118 (PnC), it integrates DC fast charging with Power Module, RFID, HMI, etc.</p>
                                <a href="systems/ccs2-controller" class="btn btn-outline-primary text-uppercase ls-xs">Talk to our expert</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> 
</div>

<?php require_once('footer.php'); ?>