<?php require_once('header.php'); ?>
<header class="header-wrapper section-wrapper">
    <div class="header-main dark">
        <?php require_once('menu.php'); ?>
    </div>
</header>
<?php require_once('side-nav.php'); ?>
<section class="section-padding bg-graylight">
    <div class="container">
        <div class="row gy-4">
            <div class="col-lg-8 section-paragraph">
                <style type="text/css">
                    .inquiry-form-block .btn-outline-primary {
                        background-color: #dc3545;
                        color: #fff
                    }

                    .trust-by-1 li {
                        margin-bottom: 25px
                    }

                    .trust-by-1 li:first-child {
                        color: #dc3545
                    }

                    .full-icon-form {
                        border-top: 10px solid #dc3545
                    }
                </style>
                <div class="boxed shadow-custom bg-white full-icon-form">
                    <div class="section-title-and-desc  section-paragraph">
                        <div class="section-title-block">
                            <h1 class="section-title-text h2 mb-lg">Get Quote / Get in Touch with Technical Experts</h1>
                            <form method="post" class="inquiry-form-block form--square tech-form">
                                <div class="row">
                                    <?php show_message(); ?>
                                    <div class="col-12">

                                        <div class="row">
                                            <div class="col-md-6 col-lg-4">
                                                <div class="form-group">
                                                    <label for="name">Name<span class="required">*</span></label>
                                                    <input id="name" name="name" type="text" class="form-control bg-graylight validate-required focus-class">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-4">
                                                <div class="form-group">
                                                    <label for="name">Email<span class="required">*</span></label>
                                                    <input id="email" name="email" type="email" class="form-control bg-graylight validate-required">
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-lg-4">
                                                <div class="form-group">
                                                    <label for="mobile">Mobile Number<span class="required">*</span></label>
                                                    <input id="mobile" name="mobile" type="text" class="form-control bg-graylight validate-required">
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-lg-4">
                                                <div class="form-group">
                                                    <label for="service_id">Service<span class="required">*</span></label>
                                                    <select class="form-select form-select-lg mb-3 " style="background: #f9f9f9;border: 1px solid black;" aria-label="Default select example" id="service_id" name="service_id" required>
                                                        <option value="">Select Service</option>
                                                        <?php
                                                        if (!empty($aService)) {
                                                            foreach ($aService as $row) {
                                                        ?>
                                                                <option value="<?php echo $row->id ?>"><?php echo $row->name ?></option>
                                                        <?php
                                                            }
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="message">Message (Describe Your Requirements)<span class="required">*</span></label>
                                                    <textarea id="message" name="message" class="form-control bg-graylight validate-required" rows="3"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-12 text-center">
                                                <button class="btn btn-primary text-uppercase ls-xs" id="submit" value="Submit" name="submit">Submit</button>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </form>
                            <div class="col-12 text-center mt-5">
                                <p>We guarantee 100% security of your information. We will not share the details you provide above with anyone. Your email won’t be used for spamming.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="boxed bg-white shadow-custom trust-by-1">
                    <div class="row text-center">
                        <div class="col-12">
                            <span class="h4 font-bold text-center d-block d-lg-none mb-3">Trusted By</span>
                            <ul>
                                <li class="h4 font-medium d-none d-lg-block">Trusted By</li>
                                <li>
                                    <picture>
                                        <img src="<?php echo asset('images/logo-1.png'); ?>" alt="mercedes" title="mercedes">
                                    </picture>
                                </li>
                                <li>
                                    <picture>
                                        <img src="<?php echo asset('images/logo-2.png'); ?>" alt="Warner Bros" title="Warner Bros">
                                    </picture>
                                </li>
                                <li>
                                    <picture>
                                        <img src="<?php echo asset('images/logo-3.png'); ?>" alt="disney" title="disney">
                                    </picture>
                                </li>
                                <li>
                                    <picture>
                                        <img src="<?php echo asset('images/logo-4.png'); ?>" alt="dubai bazaar" title="dubai bazaar">
                                    </picture>
                                </li>
                                <li>
                                    <picture>
                                        <img src="<?php echo asset('images/logo-5.png'); ?>" alt="red bull" title="red bull">
                                    </picture>
                                </li>
                                <li>
                                    <picture>
                                        <img src="<?php echo asset('images/logo-6.png'); ?>" alt="3m" title="3m">
                                    </picture>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section-padding">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 section-paragraph">
                <div class="section-title-and-desc  section-paragraph">
                    <div class="section-title-block">
                        <h2 class="section-title-text h3">At KAS, We Have Made it Easy for Clients to Reach Us and Get Their Solutions Weaved</h2>
                    </div>
                </div>
                <ul class="style-check mb-2">
                    <li>
                        <h2 class="h4 font-bold">Put Forward Your Requirement</h2>
                    </li>
                </ul>
                <p>Drop your inquiry in the form given on the right side of this page. And within 24 hours, one of our business development executive will reach you for further communication.</p>
                <ul class="style-check mb-2">
                    <li>
                        <h2 class="h4 font-bold">Sign Non-Disclosure Agreement</h2>
                    </li>
                </ul>
                <p>With the help of an NDA, we make you feel secure. Your idea will be yours. Signing an NDA assures you the privacy of your idea and project.</p>
                <ul class="style-check mb-2">
                    <li>
                        <h2 class="h4 font-bold">Analyzing Your Requirement</h2>
                    </li>
                </ul>
                <p>Once you have signed the NDA, we will analyze the requirements put forward by you. Our team of scrum masters will read and analyze the same, and will get back to you within few hours.</p>
                <ul class="style-check mb-2">
                    <li>
                        <h2 class="h4 font-bold">Estimated Budget</h2>
                    </li>
                </ul>
                <p>Once our team of scrum masters and business development managers are done with analyzing the project and compilation of necessary resources required for the project, we will get back to you with Estimated Budget/Cost and Estimated Time Required for completion of project successfully.</p>
            </div>
            <div class="col-lg-6">
                <div class="section-title-and-desc  section-paragraph text-center">
                    <div class="section-title-block">
                        <h2 class="section-title-text h1">On-Call Support</h2>
                    </div>
                </div>
                <ul class="text-18 text-center">
                    <li class="mx-1 my-1 w-md-auto w-100 text-center mb-4">
                        <picture>
                            <img src="<?php echo asset(); ?>images/call-yellow-icon.webp" alt="KAS Phone" title="KAS Phone" class="mr-3">
                        </picture>
                    </li>
                    <li class="mx-3 my-1 mb-4">
                        <div class="row justify-content-center">
                            <div class="col-lg-3 text-right">
                                <picture>
                                    <img src="<?php echo asset(); ?>images/usa-flag.webp" alt="KAS Phone" title="KAS Phone" class="mr-3">
                                </picture>
                            </div>
                            <div class="col-lg-7 text-left">
                                <a href="tel:+<?php echo $contact_number ?>" class="h4"><?php echo $contact_number ?></a>
                            </div>
                        </div>
                    </li>
                    <li class="mx-3 my-1 mb-4">
                        <div class="row justify-content-center">
                            <div class="col-lg-3 text-right">
                                <picture>
                                    <img src="<?php echo asset(); ?>images/india-flag.webp" alt="KAS Phone" title="KAS Phone" class="mr-3">
                                </picture>
                            </div>
                            <div class="col-lg-7 text-left">
                                <a href="tel:+<?php echo $whatsapp ?>" class="h4"><?php echo $whatsapp ?></a>
                            </div>
                        </div>
                    </li>
                </ul>

                <ul class="text-18 text-center">

                    <li class="mx-3 my-1 mb-4">
                        <div class="row justify-content-center">
                            <div class="col-lg-3 text-right">
                                <picture>
                                    <img src="<?php echo asset(); ?>images/skype-icon.webp" alt="KAS Skype" title="KAS Skype" class="mr-3">
                                </picture>
                            </div>
                            <div class="col-lg-7 text-left">
                                <span class="font-bold h4">Skype : </span> <a href="skype:<?php echo $skype_id ?>?call" class="h4"><?php echo $skype_id ?></a>
                            </div>
                        </div>
                    </li>
                    <li class="mx-3 my-1 mb-4">
                        <div class="row justify-content-center">
                            <div class="col-lg-3 text-right">
                                <picture>
                                    <img src="<?php echo asset(); ?>images/gmail-icon.webp" alt="KAS Sales Mail" title="KAS Sales Mail" class="mr-3">
                                </picture>
                            </div>
                            <div class="col-lg-7 text-left">
                                <span class="font-bold h4">Sales : </span><span class="h4"><a href="mailto:<?php echo $contact_email ?>" class="mail-id"><?php echo $contact_email ?></a></span>
                            </div>
                        </div>
                    </li>
                    <li class="mx-3 my-1 mb-4 mr-4">
                        <div class="row justify-content-center">
                            <div class="col-lg-3 text-right">
                                <picture>
                                    <img src="<?php echo asset(); ?>images/gmail-icon.webp" alt="KAS Sales Mail" title="KAS Sales Mail" class="mr-3">
                                </picture>
                            </div>
                            <div class="col-lg-7 text-left">
                                <span class="font-bold h4">Career : </span><span class="h4"><a href="mailto:<?php echo $career_email ?>"><?php echo $career_email ?></a></span>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="section-padding section-padding-md banner-post company-counting">
    <figure class="banner-post-img">
        <picture>
            <source srcset="<?php echo asset(); ?>images/counting-bg.webp" type="image/webp">
            <source srcset="<?php echo asset(); ?>images/counting-bg.jpg" type="image/jpeg"><img data-src="<?php echo asset(); ?>images/xcounting-bg.jpg.pagespeed.ic.gtQG_MquTp.webp" src="<?php echo asset(); ?>images/xcounting-bg.jpg.pagespeed.ic.gtQG_MquTp.webp" alt="Our Development Center Strength" title="Our Development Center Strength" class="">
        </picture>
    </figure>
    <div class="container">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="section-title-and-desc mb-0">
                    <div class="section-title-block text-center">
                        <h2 class="section-title-text h1">20+ Years and Counting...</h2>
                        <p class="h3 section-title-text-two font-light top-line">By establishing a IT development, we offer our tailored engagement models cater to the unique needs by providing <b>B2B</b> and <b>B2C</b> Dedicated development support.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row text-center align-items-lg-center section-padding section-padding-md">
            <div class="col-lg-6">
                <picture>
                    <source srcset="<?php echo asset(); ?>images/engagement-model/side-img-5.webp" type="image/webp">
                    <source srcset="<?php echo asset(); ?>images/engagement-model/side-img-5.jpg" type="image/jpeg"><img data-src="<?php echo asset(); ?>images/engagement-model/xside-img-5.jpg.pagespeed.ic.8AqLueOKEE.webp" src="<?php echo asset(); ?>images/engagement-model/xside-img-5.jpg.pagespeed.ic.8AqLueOKEE.webp" alt="Our Development Center Strength" title="Our Development Center Strength" class="mb-5 mb-lg-0">
                </picture>
            </div>
            <div class="col-lg-6">
                <h3 class="mb-xl font-bold">Our Development Strength</h3>
                <div class="row justify-content-center">
                    <div class="col-6 col-lg-4 mb-4 mb-lg-0">
                        <picture>
                            <source srcset="<?php echo asset(); ?>images/agile-developer.webp" type="image/webp">
                            <source srcset="<?php echo asset(); ?>images/agile-developer.png" type="image/png"><img data-src="<?php echo asset(); ?>images/xagile-developer.png.pagespeed.ic.13HIIIEYEx.webp" src="<?php echo asset(); ?>images/xagile-developer.png.pagespeed.ic.13HIIIEYEx.webp" alt="Agile Developers" title="Agile Developers" class="">
                        </picture>
                        <h4 class="h1 font-bold mt-3">50+</h4>
                        <p>Agile Developers</p>
                    </div>
                    <div class="col-6 col-lg-4 mb-4 mb-lg-0">
                        <picture>
                            <source srcset="<?php echo asset(); ?>images/agile-coach.webp" type="image/webp">
                            <source srcset="<?php echo asset(); ?>images/agile-coach.png" type="image/png"><img data-src="<?php echo asset(); ?>images/xagile-coach.png.pagespeed.ic.MQdoRh2rbB.webp" src="<?php echo asset(); ?>images/xagile-coach.png.pagespeed.ic.MQdoRh2rbB.webp" alt="Agile Coaches" title="Agile Coaches" class="">
                        </picture>
                        <h4 class="h1 font-bold mt-3">05</h4>
                        <p>Agile Coaches</p>
                    </div>
                    <div class="col-6 col-lg-4 ">
                        <picture>
                            <source srcset="<?php echo asset(); ?>images/certified-scrum-master.webp" type="image/webp">
                            <source srcset="<?php echo asset(); ?>images/certified-scrum-master.png" type="image/png"><img data-src="<?php echo asset(); ?>images/xcertified-scrum-master.png.pagespeed.ic.iAwwUp-Dqu.webp" src="<?php echo asset(); ?>images/xcertified-scrum-master.png.pagespeed.ic.iAwwUp-Dqu.webp" alt="Certified Scrum Masters" title="Certified Scrum Masters" class="">
                        </picture>
                        <h4 class="h1 font-bold mt-3">14</h4>
                        <p>Certified Scrum Masters</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row text-center count-bottom justify-content-center">
            <div class="col">
                <picture>
                    <source srcset="<?php echo asset(); ?>images/country-icon-1.webp" type="image/webp">
                    <source srcset="<?php echo asset(); ?>images/country-icon-1.png" type="image/png"><img data-src="<?php echo asset(); ?>images/xcountry-icon-1.png.pagespeed.ic.BFbev0UkE9.webp" src="<?php echo asset(); ?>images/xcountry-icon-1.png.pagespeed.ic.BFbev0UkE9.webp" alt="Work at Your Time Zone" title="Work at Your Time Zone" class="mb-lg">
                </picture>
                <p>Work at Your Time Zone</p>
            </div>
            <div class="col">
                <picture>
                    <source srcset="<?php echo asset(); ?>images/country-icon-2.webp" type="image/webp">
                    <source srcset="<?php echo asset(); ?>images/country-icon-2.png" type="image/png"><img data-src="<?php echo asset(); ?>images/xcountry-icon-2.png.pagespeed.ic.CD9p7LrMxj.webp" src="<?php echo asset(); ?>images/xcountry-icon-2.png.pagespeed.ic.CD9p7LrMxj.webp" alt="Easy Communication" title="Easy Communication" class="mb-lg">
                </picture>
                <p>Easy Communication</p>
            </div>
            <div class="col">
                <picture>
                    <source srcset="<?php echo asset(); ?>images/country-icon-3.webp" type="image/webp">
                    <source srcset="<?php echo asset(); ?>images/country-icon-3.png" type="image/png"><img data-src="<?php echo asset(); ?>images/xcountry-icon-3.png.pagespeed.ic.OfsrCfoBPY.webp" src="<?php echo asset(); ?>images/xcountry-icon-3.png.pagespeed.ic.OfsrCfoBPY.webp" alt="Hire in 24 Hours" title="Hire in 24 Hours" class="mb-lg">
                </picture>
                <p>Hire in 48 Hours</p>
            </div>
            <div class="col">
                <picture>
                    <source srcset="<?php echo asset(); ?>images/country-icon-4.webp" type="image/webp">
                    <source srcset="<?php echo asset(); ?>images/country-icon-4.png" type="image/png"><img data-src="<?php echo asset(); ?>images/xcountry-icon-4.png.pagespeed.ic.ctr6PWgiYB.webp" src="<?php echo asset(); ?>images/xcountry-icon-4.png.pagespeed.ic.ctr6PWgiYB.webp" alt="In Business Since 2011" title="In Business Since 2011" class="mb-lg">
                </picture>
                <p>In Business Since 2011</p>
            </div>
            <div class="col mb-0">
                <picture>
                    <source srcset="<?php echo asset(); ?>images/country-icon-5.webp" type="image/webp">
                    <source srcset="<?php echo asset(); ?>images/country-icon-5.png" type="image/png"><img data-src="<?php echo asset(); ?>images/xcountry-icon-5.png.pagespeed.ic.oGnKvNIT_c.webp" src="<?php echo asset(); ?>images/xcountry-icon-5.png.pagespeed.ic.oGnKvNIT_c.webp" alt="5/5 Pro User Rating" title="5/5 Pro User Rating" class="mb-lg">
                </picture>
                <p>5/5 Pro User Rating</p>
            </div>
        </div>
    </div>
</section>
<section class="">
    <div class="container">
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
                <div class="owl-carousel owl-nav-top-right owl-loaded owl-drag" id="insight-owl-carousel" data-sync="#insight-navigation-block">



                    <div class="owl-stage-outer">
                        <div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 3888px;">
                            <div class="owl-item active" style="width: 1296px;">
                                <div class="item">
                                    <div class="row align-items-center">
                                        <div class="col-lg-4 offset-lg-1 col-md-4 col-sm-6">
                                            <picture>
                                                <source srcset="<?php echo asset(); ?>images/insight-slide-1.webp" type="image/webp">
                                                <source srcset="<?php echo asset(); ?>images/insight-slide-1.jpg?v-1" type="image/jpeg"><img data-src="<?php echo asset(); ?>images/xinsight-slide-1.jpg,qv-1.pagespeed.ic._FQ1OEjjc1.webp" src="<?php echo asset(); ?>images/xinsight-slide-1.jpg,qv-1.pagespeed.ic._FQ1OEjjc1.webp" alt="Top 1% IT Talent" title="Top 1% IT Talent" class="slider-img">
                                            </picture>
                                        </div>
                                        <div class="col-lg-4 offset-lg-1 col-md-8">
                                            <h4 class="h3 slider-title font-semibold">Top 1% IT Talent</h4>
                                            <p class="text-lg text-secondary    ">KAS Technology is an exclusive hub of top dedicated software developers, UI/UX designers, QA experts, and product managers with incredibly rare and hidden talents you will ever come across. We let you access the top 1% of IT talent worldwide, from independent software developers to fully managed teams.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item" style="width: 1296px;">
                                <div class="item">
                                    <div class="row align-items-center">
                                        <div class="col-lg-4 offset-lg-1 col-md-4 col-sm-6">
                                            <picture>
                                                <source srcset="<?php echo asset(); ?>images/insight-slide-2.webp" type="image/webp">
                                                <source srcset="<?php echo asset(); ?>images/insight-slide-2.jpg?v-1" type="image/jpeg"><img data-src="<?php echo asset(); ?>images/xinsight-slide-2.jpg,qv-1.pagespeed.ic.vEG9u-JiPl.webp" src="<?php echo asset(); ?>images/xinsight-slide-2.jpg,qv-1.pagespeed.ic.vEG9u-JiPl.webp" alt="Time Zone Aligned" title="Time Zone Aligned" class="slider-img">
                                            </picture>
                                        </div>
                                        <div class="col-lg-4 offset-lg-1 col-md-8">
                                            <h4 class="h3 slider-title font-semibold">Time Zone Aligned</h4>
                                            <p class="text-lg text-secondary">Timezone is never a constraint when you are working with KAS Technology. We follow a simple procedure- our developers and your time zone. Hire dedicated software developers from us and collaborate from far away to work according to your time zone, deadline, and milestone.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item" style="width: 1296px;">
                                <div class="item">
                                    <div class="row align-items-center">
                                        <div class="col-lg-4 offset-lg-1 col-md-4 col-sm-6">
                                            <picture>
                                                <source srcset="<?php echo asset(); ?>images/insight-slide-3.webp" type="image/webp">
                                                <source srcset="<?php echo asset(); ?>images/insight-slide-3.jpg?v-1" type="image/jpeg"><img data-src="<?php echo asset(); ?>images/xinsight-slide-3.jpg,qv-1.pagespeed.ic.zwTqXmxv14.webp" src="<?php echo asset(); ?>images/xinsight-slide-3.jpg,qv-1.pagespeed.ic.zwTqXmxv14.webp" alt="Experienced Team" title="Experienced Team" class="slider-img">
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
                    <div class="owl-nav"><button type="button" role="presentation" class="owl-prev disabled"><span class="long-arrow-hover"><span class="long-arrow-icon-css icon-item icon-left"></span></span></button><button type="button" role="presentation" class="owl-next"><span class="long-arrow-hover"><span class="long-arrow-icon-css icon-item"></span></span></button></div>
                    <div class="owl-dots disabled"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php require_once('footer.php'); ?>