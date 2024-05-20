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
        <?php require_once('menu.php'); ?>
    </div>
</header>
<?php require_once('side-nav.php'); ?>

<section class="home-section hero-banner content-center banner-post header-spacing-padding">
    <figure class="banner-post-img">
        <picture>
            <source srcset="<?php echo asset(); ?>images/infrastructure/banner.webp" type="image/webp" />
            <source srcset="<?php echo asset(); ?>images/infrastructure/banner.jpg" type="image/jpeg" />
            <img
                data-src="<?php echo asset(); ?>images/infrastructure/xbanner.jpg.pagespeed.ic.6a7Wy0iqWs.webp"
                src="<?php echo asset(); ?>images/infrastructure/xbanner.jpg.pagespeed.ic.6a7Wy0iqWs.webp"
                alt="INFRASTRUCTURE @ Bacancy"
                title="INFRASTRUCTURE @ Bacancy"
                data-pagespeed-url-hash="3627330988"
                onload="pagespeed.CriticalImages.checkImageForCriticality(this);"
            />
        </picture>
    </figure>
    <div class="container">
        <div class="text-center">
            <div class="small-text-block text-center">
                <p class="text-sm text-uppercase d-inline-block text-white small-text-item ls-lg">Our State-of-the-art Development Center</p>
            </div>
            <div class="home-section-title-block">
                <h1 class="home-section-title text-white h1 text-uppercase font-weight-bold ls-lg"><span class="font-weight-light d-block">Infrastructure</span> @ Bacancy</h1>
            </div>
        </div>
    </div>
</section>
<section class="section-padding pb-0 service-box-row service-box-row-without-cursor">
    <div class="container">
        <div class="row section-padding-sm pt-0">
            <div class="col-12">
                <svg viewBox="0 0 100 100" class="infra__quote-icon">
                    <use xlink:href="#double-quote"></use>
                </svg>
                <h2 class="h1 font-semibold mb-lg">
                    Modernizing and facilitating teams with high-tech advancing infrastructure powerhouse is always top priority considering the type of data rich, performance driven, security centric enterprise grade platforms we deliver.
                </h2>
                <div class="row justify-content-sm-center">
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="service-box text-center">
                            <div class="svg-icon-box">
                                <picture>
                                    <source srcset="<?php echo asset(); ?>images/infrastructure/services-icon-1.webp" type="image/webp" />
                                    <source srcset="<?php echo asset(); ?>images/infrastructure/services-icon-1.png" type="image/png" />
                                    <img
                                        data-src="<?php echo asset(); ?>images/infrastructure/services-icon-1.png"
                                        src="<?php echo asset(); ?>images/infrastructure/services-icon-1.png"
                                        alt="Network Systems"
                                        title="Network Systems"
                                        class="lazy svg-icon"
                                        data-pagespeed-url-hash="1495118570"
                                        onload="pagespeed.CriticalImages.checkImageForCriticality(this);"
                                    />
                                </picture>
                            </div>
                            <h3 class="text-xxl font-bold small-heading" style="height: 30px;">Network Systems</h3>
                            <p class="text-secondary quote-desc small-heading-two" style="height: 48px;">Scalable Network Architecture &amp; systems</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="service-box text-center">
                            <div class="svg-icon-box">
                                <picture>
                                    <source srcset="<?php echo asset(); ?>images/infrastructure/services-icon-2.webp" type="image/webp" />
                                    <source srcset="<?php echo asset(); ?>images/infrastructure/services-icon-2.png" type="image/png" />
                                    <img
                                        data-src="<?php echo asset(); ?>images/infrastructure/services-icon-2.png"
                                        src="<?php echo asset(); ?>images/infrastructure/services-icon-2.png"
                                        alt="Secured Network"
                                        title="Secured Network"
                                        class="lazy svg-icon"
                                        data-pagespeed-url-hash="1789618491"
                                        onload="pagespeed.CriticalImages.checkImageForCriticality(this);"
                                    />
                                </picture>
                            </div>
                            <h3 class="text-xxl font-bold small-heading" style="height: 30px;">Secured Network</h3>
                            <p class="text-secondary quote-desc small-heading-two" style="height: 48px;">vLan for traffic</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="service-box text-center">
                            <div class="svg-icon-box">
                                <picture>
                                    <source srcset="<?php echo asset(); ?>images/infrastructure/services-icon-3.webp" type="image/webp" />
                                    <source srcset="<?php echo asset(); ?>images/infrastructure/services-icon-3.png" type="image/png" />
                                    <img
                                        data-src="<?php echo asset(); ?>images/infrastructure/services-icon-3.png"
                                        src="<?php echo asset(); ?>images/infrastructure/services-icon-3.png"
                                        alt="Regular"
                                        title="Regular"
                                        class="lazy svg-icon"
                                        data-pagespeed-url-hash="2084118412"
                                        onload="pagespeed.CriticalImages.checkImageForCriticality(this);"
                                    />
                                </picture>
                            </div>
                            <h3 class="text-xxl font-bold small-heading" style="height: 30px;">Regular</h3>
                            <p class="text-secondary quote-desc small-heading-two" style="height: 48px;">Data backup</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="service-box text-center">
                            <div class="svg-icon-box">
                                <picture>
                                    <source srcset="<?php echo asset(); ?>images/infrastructure/services-icon-4.webp" type="image/webp" />
                                    <source srcset="<?php echo asset(); ?>images/infrastructure/services-icon-4.png" type="image/png" />
                                    <img
                                        data-src="<?php echo asset(); ?>images/infrastructure/services-icon-4.png"
                                        src="<?php echo asset(); ?>images/infrastructure/services-icon-4.png"
                                        alt="Applications"
                                        title="Applications"
                                        class="lazy svg-icon"
                                        data-pagespeed-url-hash="2378618333"
                                        onload="pagespeed.CriticalImages.checkImageForCriticality(this);"
                                    />
                                </picture>
                            </div>
                            <h3 class="text-xxl font-bold small-heading" style="height: 30px;">Applications</h3>
                            <p class="text-secondary quote-desc small-heading-two" style="height: 48px;">NagIOS to monitor servers &amp; applications</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="service-box text-center">
                            <div class="svg-icon-box">
                                <picture>
                                    <source srcset="<?php echo asset(); ?>images/infrastructure/services-icon-5.webp" type="image/webp" />
                                    <source srcset="<?php echo asset(); ?>images/infrastructure/services-icon-5.png" type="image/png" />
                                    <img
                                        data-src="<?php echo asset(); ?>images/infrastructure/services-icon-5.png"
                                        src="<?php echo asset(); ?>images/infrastructure/services-icon-5.png"
                                        alt="Firewall"
                                        title="Firewall"
                                        class="lazy svg-icon"
                                        data-pagespeed-url-hash="2673118254"
                                        onload="pagespeed.CriticalImages.checkImageForCriticality(this);"
                                    />
                                </picture>
                            </div>
                            <h3 class="text-xxl font-bold small-heading" style="height: 30px;">Firewall</h3>
                            <p class="text-secondary quote-desc small-heading-two" style="height: 24px;">Protection</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="service-box text-center">
                            <div class="svg-icon-box">
                                <picture>
                                    <source srcset="<?php echo asset(); ?>images/infrastructure/services-icon-6.webp" type="image/webp" />
                                    <source srcset="<?php echo asset(); ?>images/infrastructure/services-icon-6.png" type="image/png" />
                                    <img
                                        data-src="<?php echo asset(); ?>images/infrastructure/services-icon-6.png"
                                        src="<?php echo asset(); ?>images/infrastructure/services-icon-6.png"
                                        alt="Internet"
                                        title="Internet"
                                        class="lazy svg-icon"
                                        data-pagespeed-url-hash="2967618175"
                                        onload="pagespeed.CriticalImages.checkImageForCriticality(this);"
                                    />
                                </picture>
                            </div>
                            <h3 class="text-xxl font-bold small-heading" style="height: 30px;">Internet</h3>
                            <p class="text-secondary quote-desc small-heading-two" style="height: 24px;">Internet redundancy</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="service-box text-center">
                            <div class="svg-icon-box">
                                <picture>
                                    <source srcset="<?php echo asset(); ?>images/infrastructure/services-icon-7.webp" type="image/webp" />
                                    <source srcset="<?php echo asset(); ?>images/infrastructure/services-icon-7.png" type="image/png" />
                                    <img
                                        data-src="<?php echo asset(); ?>images/infrastructure/services-icon-7.png"
                                        src="<?php echo asset(); ?>images/infrastructure/services-icon-7.png"
                                        alt="Fully"
                                        title="Fully"
                                        class="lazy svg-icon"
                                        data-pagespeed-url-hash="3262118096"
                                        onload="pagespeed.CriticalImages.checkImageForCriticality(this);"
                                    />
                                </picture>
                            </div>
                            <h3 class="text-xxl font-bold small-heading" style="height: 30px;">Fully</h3>
                            <p class="text-secondary quote-desc small-heading-two" style="height: 24px;">Updated &amp; licensed software</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="service-box text-center">
                            <div class="svg-icon-box">
                                <picture>
                                    <source srcset="<?php echo asset(); ?>images/infrastructure/services-icon-8.webp" type="image/webp" />
                                    <source srcset="<?php echo asset(); ?>images/infrastructure/services-icon-8.png" type="image/png" />
                                    <img
                                        data-src="<?php echo asset(); ?>images/infrastructure/services-icon-8.png"
                                        src="<?php echo asset(); ?>images/infrastructure/services-icon-8.png"
                                        alt="Pantry Areas"
                                        title="Pantry Areas"
                                        class="lazy svg-icon"
                                        data-pagespeed-url-hash="3556618017"
                                        onload="pagespeed.CriticalImages.checkImageForCriticality(this);"
                                    />
                                </picture>
                            </div>
                            <h3 class="text-xxl font-bold small-heading" style="height: 30px;">Pantry Areas</h3>
                            <p class="text-secondary quote-desc small-heading-two" style="height: 24px;">For having lunch/snacks</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section-padding section-padding-md bg-graylight">
    <div class="container">
        <div class="section-title-and-desc">
            <div class="section-title-block text-center">
                <h2 class="section-title-text h1">Our Office</h2>
            </div>
            <p class="text-center text-secondary h3 section-short-desc">Looking for <span class="text-primary font-regular"> Quick Solution? </span></p>
        </div>
        <div class="row mb-lg">
            <div class="col-12">
                <script async="" src="https://fast.wistia.com/embed/medias/dunhnum2fj.jsonp" type="text/javascript"></script>
                <script async="" src="https://fast.wistia.com/assets/external/E-v1.js" type="text/javascript"></script>
                <div class="wistia_responsive_padding" style="padding: 56.25% 0 0 0; position: relative;">
                    <div class="wistia_responsive_wrapper" style="height: 100%; left: 0; position: absolute; top: 0; width: 100%;">
                        <div
                            class="wistia_video_foam_dummy"
                            data-source-container-id="wistia-dunhnum2fj-1"
                            style="border: 0px; display: block; height: 0px; margin: 0px; padding: 0px; position: static; visibility: hidden; width: auto;"
                        ></div>
                        <div class="wistia_embed wistia_async_dunhnum2fj seo=false videoFoam=true wistia_embed_initialized" style="height: 729px; position: relative; width: 1296px;" id="wistia-dunhnum2fj-1">
                            <div
                                id="wistia_chrome_23"
                                class="w-chrome"
                                tabindex="-1"
                                style="
                                    display: inline-block;
                                    height: 729px;
                                    line-height: normal;
                                    margin: 0px;
                                    padding: 0px;
                                    position: relative;
                                    vertical-align: top;
                                    width: 1296px;
                                    outline: none;
                                    overflow: hidden;
                                    box-sizing: content-box;
                                    border-radius: 0px;
                                "
                            >
                                <div id="wistia_grid_29_wrapper" style="display: block; width: 1296px; height: 729px;">
                                    <div id="wistia_grid_29_above" style="height: 0px; font-size: 0px; line-height: 0px;"></div>
                                    <div id="wistia_grid_29_main" style="width: 1296px; left: 0px; height: 729px; margin-top: 0px;">
                                        <div id="wistia_grid_29_behind"></div>
                                        <div id="wistia_grid_29_center" style="width: 100%; height: 100%;">
                                            <div class="w-video-wrapper w-css-reset" style="height: 100%; position: absolute; top: 0px; width: 100%; opacity: 1; background-color: rgb(0, 0, 0);">
                                                <video
                                                    id="wistia_simple_video_62"
                                                    crossorigin="anonymous"
                                                    poster="https://fast.wistia.com/assets/images/blank.gif"
                                                    aria-label="Video"
                                                    src="blob:https://www.bacancytechnology.com/b3386446-58a2-45aa-80dd-8f094e85fedb"
                                                    controlslist="nodownload"
                                                    playsinline=""
                                                    preload="metadata"
                                                    type="video/m3u8"
                                                    x-webkit-airplay="allow"
                                                    style="background: transparent; display: block; height: 100%; max-height: none; max-width: none; position: static; visibility: visible; width: 100%; object-fit: contain;"
                                                ></video>
                                            </div>
                                            <div class="w-ui-container" style="height: 100%; left: 0px; position: absolute; top: 0px; width: 100%; opacity: 1;">
                                                <div
                                                    class="w-vulcan-v2 w-css-reset"
                                                    id="w-vulcan-v2-28"
                                                    style="border-radius: 0px; box-sizing: border-box; cursor: default; direction: ltr; height: 100%; left: 0px; position: absolute; visibility: visible; top: 0px; width: 100%;"
                                                >
                                                    <div class="w-vulcan--background w-css-reset" style="height: 100%; left: 0px; position: absolute; top: 0px; width: 100%;">
                                                        <div class="w-css-reset" data-handle="statusBar"></div>
                                                        <div class="w-css-reset" data-handle="backgroundFocus">
                                                            <button aria-label="Play Video: Bacancy New House" class="w-css-reset w-vulcan-v2-button" tabindex="0" style="width: 0px; height: 0px; pointer-events: none;"></button>
                                                        </div>
                                                        <div class="w-css-reset" data-handle="thumbnail">
                                                            <div>
                                                                <div class="w-css-reset" style="filter: blur(5px); height: 100%; left: 0px; position: absolute; top: 0px; width: 100%; display: block;">
                                                                    <img
                                                                        class="w-css-reset"
                                                                        srcset=""
                                                                        src="https://fast.wistia.com/embed/medias/dunhnum2fj/swatch"
                                                                        alt="Video Thumbnail"
                                                                        aria-hidden="true"
                                                                        style="
                                                                            height: 729px;
                                                                            left: 0px;
                                                                            position: absolute;
                                                                            top: 0px;
                                                                            width: 1296px;
                                                                            clip: auto;
                                                                            display: block;
                                                                            border-radius: 0px;
                                                                            border-width: 0px;
                                                                            border-style: solid;
                                                                            border-color: rgb(0, 0, 0);
                                                                            box-sizing: content-box;
                                                                        "
                                                                    />
                                                                </div>
                                                                <div class="w-css-reset" style="height: 100%; left: 0px; opacity: 1; position: absolute; top: 0px; width: 100%; display: block; transition: opacity 3s ease 0s;">
                                                                    <img
                                                                        class="w-css-reset"
                                                                        srcset="
                                                                            https://embed-ssl.wistia.com/deliveries/812420b16554c9c6988fac5c68792b49.webp?image_crop_resized=640x360    320w,
                                                                            https://embed-ssl.wistia.com/deliveries/812420b16554c9c6988fac5c68792b49.webp?image_crop_resized=640x360    640w,
                                                                            https://embed-ssl.wistia.com/deliveries/812420b16554c9c6988fac5c68792b49.webp?image_crop_resized=960x540    960w,
                                                                            https://embed-ssl.wistia.com/deliveries/812420b16554c9c6988fac5c68792b49.webp?image_crop_resized=1280x720  1280w,
                                                                            https://embed-ssl.wistia.com/deliveries/812420b16554c9c6988fac5c68792b49.webp?image_crop_resized=1920x1080 1920w,
                                                                            https://embed-ssl.wistia.com/deliveries/812420b16554c9c6988fac5c68792b49.webp?image_crop_resized=3840x2160 3840w
                                                                        "
                                                                        src="https://embed-ssl.wistia.com/deliveries/812420b16554c9c6988fac5c68792b49.webp?image_crop_resized=1920x1080"
                                                                        alt="Video Thumbnail"
                                                                        style="
                                                                            height: 729px;
                                                                            left: 0px;
                                                                            position: absolute;
                                                                            top: 0px;
                                                                            width: 1296px;
                                                                            clip: auto;
                                                                            display: block;
                                                                            border-radius: 0px;
                                                                            border-width: 0px;
                                                                            border-style: solid;
                                                                            border-color: rgb(0, 0, 0);
                                                                            box-sizing: content-box;
                                                                        "
                                                                    />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div aria-live="polite" class="w-vulcan--aria-live w-css-reset" aria-atomic="true" style="position: absolute; left: -99999em;"></div>
                                                    <div class="w-vulcan-overlays-table w-css-reset" style="display: table; pointer-events: none; position: absolute; width: 100%;">
                                                        <div class="w-vulcan-overlays--left w-css-reset" style="display: table-cell; vertical-align: top; position: relative; width: 0px;">
                                                            <div class="w-css-reset" style="height: 685px;"></div>
                                                        </div>
                                                        <div class="w-vulcan-overlays--center w-css-reset" style="display: table-cell; vertical-align: top; position: relative; width: 100%;">
                                                            <div class="w-css-reset" style="height: 685px;">
                                                                <div class="w-css-reset" data-handle="bigPlayButton" style="pointer-events: auto;">
                                                                    <div
                                                                        class="w-bpb-wrapper w-css-reset w-css-reset-tree"
                                                                        style="border-radius: 0px; display: block; left: calc(50%); margin-left: -81.25px; margin-top: -52px; overflow: hidden; position: absolute; top: calc(50% - 0px);"
                                                                    >
                                                                        <button
                                                                            class="w-big-play-button w-css-reset-button-important w-vulcan-v2-button"
                                                                            aria-label="Play Video: Bacancy New House"
                                                                            tabindex="0"
                                                                            style="cursor: pointer; height: 104px; box-shadow: none; width: 162.5px;"
                                                                        >
                                                                            <div style="background: rgb(245, 130, 32); display: block; left: 0px; height: 104px; mix-blend-mode: darken; position: absolute; top: 0px; width: 162.5px;"></div>
                                                                            <div
                                                                                style="
                                                                                    background-color: rgba(245, 130, 32, 0.7);
                                                                                    height: 104px;
                                                                                    left: 0px;
                                                                                    position: absolute;
                                                                                    top: 0px;
                                                                                    transition: background-color 150ms ease 0s;
                                                                                    width: 162.5px;
                                                                                "
                                                                            ></div>
                                                                            <svg
                                                                                x="0px"
                                                                                y="0px"
                                                                                viewBox="0 0 125 80"
                                                                                enable-background="new 0 0 125 80"
                                                                                aria-hidden="true"
                                                                                alt=""
                                                                                style="fill: rgb(255, 255, 255); height: 104px; left: 0px; stroke-width: 0px; top: 0px; width: 100%; position: absolute;"
                                                                            >
                                                                                <rect fill-rule="evenodd" clip-rule="evenodd" fill="none" width="125" height="80"></rect>
                                                                                <polygon fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" points="53,22 53,58 79,40"></polygon>
                                                                            </svg>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                                <div class="w-css-reset" data-handle="clickForSoundButton" style="pointer-events: auto;">
                                                                    <div
                                                                        class="w-css-reset w-css-reset-tree"
                                                                        data-handle="click-for-sound-backdrop"
                                                                        style="display: none; height: 100%; left: 0px; pointer-events: auto; position: absolute; top: 0px; width: 100%;"
                                                                    >
                                                                        <button
                                                                            aria-label="Click for sound"
                                                                            class="w-vulcan-v2-button click-for-sound-btn"
                                                                            style="
                                                                                background: rgba(0, 0, 0, 0.8);
                                                                                border: 2px solid transparent;
                                                                                border-radius: 60px;
                                                                                cursor: pointer;
                                                                                display: flex;
                                                                                justify-content: space-between;
                                                                                align-items: center;
                                                                                outline: none;
                                                                                pointer-events: auto;
                                                                                position: absolute;
                                                                                right: 27.25px;
                                                                                top: 27.25px;
                                                                            "
                                                                        >
                                                                            <div
                                                                                style="
                                                                                    display: flex;
                                                                                    align-items: center;
                                                                                    justify-content: flex-end;
                                                                                    white-space: nowrap;
                                                                                    overflow: hidden;
                                                                                    max-width: 0px;
                                                                                    transition: max-width 200ms ease 0s;
                                                                                "
                                                                            >
                                                                                <span style="color: rgb(255, 255, 255); font-family: WistiaPlayerInter, Helvetica, sans-serif; font-size: 18px; font-weight: 500; padding-left: 1em;">
                                                                                    Click for sound
                                                                                </span>
                                                                            </div>
                                                                            <svg viewBox="0 0 237 237" width="68.25" height="68.25">
                                                                                <style>
                                                                                    @keyframes VOLUME_SMALL_WAVE_FLASH {
                                                                                        0% {
                                                                                            opacity: 0;
                                                                                        }
                                                                                        33% {
                                                                                            opacity: 1;
                                                                                        }
                                                                                        66% {
                                                                                            opacity: 1;
                                                                                        }
                                                                                        100% {
                                                                                            opacity: 0;
                                                                                        }
                                                                                    }

                                                                                    @keyframes VOLUME_LARGE_WAVE_FLASH {
                                                                                        0% {
                                                                                            opacity: 0;
                                                                                        }
                                                                                        33% {
                                                                                            opacity: 1;
                                                                                        }
                                                                                        66% {
                                                                                            opacity: 1;
                                                                                        }
                                                                                        100% {
                                                                                            opacity: 0;
                                                                                        }
                                                                                    }

                                                                                    .volume__small-wave {
                                                                                        animation: VOLUME_SMALL_WAVE_FLASH 2s infinite;
                                                                                        opacity: 0;
                                                                                    }

                                                                                    .volume__large-wave {
                                                                                        animation: VOLUME_LARGE_WAVE_FLASH 2s infinite 0.3s;
                                                                                        opacity: 0;
                                                                                    }
                                                                                </style>
                                                                                <path fill="#fff" d="M88 107H65v24h24l23 23V84z"></path>
                                                                                <g fill="none" stroke="#fff" stroke-linecap="round" stroke-width="10">
                                                                                    <path d="M142 86c9 21 9 44 0 65" class="volume__small-wave"></path>
                                                                                    <path d="M165 74c13 23 13 66 0 89" class="volume__large-wave"></path>
                                                                                </g>
                                                                            </svg>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                                <div class="w-css-reset" data-handle="playPauseNotifier" style="pointer-events: auto;"></div>
                                                                <div class="w-css-reset" data-handle="playPauseLoading" style="pointer-events: auto;">
                                                                    <div class="w-css-reset w-css-reset-tree" style="height: 100%; left: 0px; pointer-events: none; position: absolute; top: 0px; width: 100%;">
                                                                        <button
                                                                            aria-label="Play Video"
                                                                            class="w-vulcan-v2-button"
                                                                            style="
                                                                                background: rgba(0, 0, 0, 0.6);
                                                                                border: 0px;
                                                                                border-radius: 50%;
                                                                                cursor: pointer;
                                                                                display: none;
                                                                                height: 182px;
                                                                                left: 50%;
                                                                                margin: 0px;
                                                                                padding: 0px;
                                                                                pointer-events: auto;
                                                                                position: absolute;
                                                                                opacity: 0;
                                                                                outline: none;
                                                                                top: 50%;
                                                                                transform: translate(-50%, -50%) scale(0.8);
                                                                                transition: opacity 200ms ease 0s, transform 600ms ease 0s;
                                                                                -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
                                                                                width: 182px;
                                                                            "
                                                                        >
                                                                            <div style="box-sizing: border-box; height: 100%; padding: 61.425px 61.425px 61.425px 75.075px;">
                                                                                <div style="height: 100%; width: 100%;">
                                                                                    <div style="display: none; height: 100%; width: 100%;">
                                                                                        <svg
                                                                                            x="0px"
                                                                                            y="0px"
                                                                                            viewBox="0 0 11.556 16"
                                                                                            enable-background="new 0 0 11.556 16"
                                                                                            aria-hidden="true"
                                                                                            class="w-css-reset w-css-reset-tree"
                                                                                            style="fill: rgb(255, 255, 255); height: 100%; left: 0px; stroke-width: 0px; top: 0px; width: 100%;"
                                                                                        >
                                                                                            <g>
                                                                                                <rect x="0" y="0" width="3.5" height="12"></rect>
                                                                                                <rect x="6.5" y="0" width="3.5" height="12"></rect>
                                                                                            </g>
                                                                                        </svg>
                                                                                    </div>
                                                                                    <div style="display: block; height: 100%; width: 100%;">
                                                                                        <svg
                                                                                            x="0px"
                                                                                            y="0px"
                                                                                            viewBox="0 0 11.556 16"
                                                                                            enable-background="new 0 0 11.556 16"
                                                                                            aria-hidden="true"
                                                                                            class="w-css-reset w-css-reset-tree"
                                                                                            style="fill: rgb(255, 255, 255); height: 100%; left: 0px; stroke-width: 0px; top: 0px; width: 100%;"
                                                                                        >
                                                                                            <polygon points="11.556,7.5 0,15 0,0"></polygon>
                                                                                        </svg>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="w-vulcan-overlays--right w-css-reset" style="display: table-cell; vertical-align: top; position: relative; width: 0px;">
                                                            <div class="w-css-reset" style="height: 685px;"></div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="w-bottom-bar w-css-reset"
                                                        style="
                                                            bottom: 0px;
                                                            border-radius: 0px;
                                                            border-collapse: collapse;
                                                            display: table;
                                                            height: 44px;
                                                            pointer-events: none;
                                                            position: absolute;
                                                            padding-left: 0px;
                                                            padding-right: 0px;
                                                            right: 0px;
                                                            table-layout: auto;
                                                            transform: unset;
                                                            width: calc(100% - 0px);
                                                        "
                                                    >
                                                        <div class="w-bottom-bar-lower w-css-reset" style="position: relative;">
                                                            <div style="height: 100%; left: 0px; position: absolute; top: 0px; width: 100%;">
                                                                <div
                                                                    style="
                                                                        background: rgb(245, 130, 32);
                                                                        display: none;
                                                                        height: 100%;
                                                                        mix-blend-mode: darken;
                                                                        left: 0px;
                                                                        opacity: 1;
                                                                        position: absolute;
                                                                        top: 0px;
                                                                        transition: opacity 0s ease 0s;
                                                                        width: 100%;
                                                                    "
                                                                ></div>
                                                                <div
                                                                    style="
                                                                        background: rgba(245, 130, 32, 0.85);
                                                                        border-radius: 0px;
                                                                        height: 100%;
                                                                        opacity: 1;
                                                                        left: 0px;
                                                                        position: absolute;
                                                                        top: 0px;
                                                                        transition: opacity 0s ease 0s;
                                                                        width: 100%;
                                                                    "
                                                                ></div>
                                                            </div>
                                                            <div style="display: none;">
                                                                <div
                                                                    style="
                                                                        background: rgb(245, 130, 32);
                                                                        display: none;
                                                                        height: 100%;
                                                                        mix-blend-mode: darken;
                                                                        left: 0px;
                                                                        opacity: 1;
                                                                        position: absolute;
                                                                        top: 0px;
                                                                        transition: opacity 0s ease 0s;
                                                                        width: 100%;
                                                                    "
                                                                ></div>
                                                                <div
                                                                    style="
                                                                        background: rgba(245, 130, 32, 0.85);
                                                                        border-radius: 0px;
                                                                        height: 100%;
                                                                        opacity: 1;
                                                                        left: 0px;
                                                                        position: absolute;
                                                                        top: 0px;
                                                                        transition: opacity 0s ease 0s;
                                                                        width: 100%;
                                                                    "
                                                                ></div>
                                                            </div>
                                                            <div class="w-bottom-bar-left w-css-reset" style="display: table-cell; vertical-align: top; position: relative; width: 0px; opacity: 1; transition: opacity 0s ease 0s;">
                                                                <div class="w-bottom-bar-left-inner w-css-reset" style="height: 44px; position: relative; pointer-events: auto; white-space: nowrap;">
                                                                    <div class="w-css-reset" data-handle="smallPlayButton" style="display: inline-block; vertical-align: top;">
                                                                        <div class="w-vulcan-button-wrapper w-css-reset" style="display: inline-block; height: 44px; position: relative; vertical-align: top; width: 52px;">
                                                                            <button
                                                                                class="w-vulcan-v2-button w-css-reset w-css-reset-tree w-css-reset-button-important"
                                                                                tabindex="0"
                                                                                aria-label="Play Video"
                                                                                title="Play Video"
                                                                                style="
                                                                                    background-color: rgba(0, 0, 0, 0);
                                                                                    border-radius: 0px;
                                                                                    box-shadow: none;
                                                                                    cursor: pointer;
                                                                                    height: 100%;
                                                                                    position: relative;
                                                                                    transition: background-color 150ms ease 0s;
                                                                                    width: calc(100% + 0px);
                                                                                    padding-right: 0px;
                                                                                "
                                                                            >
                                                                                <div
                                                                                    class="w-vulcan-icon-wrapper"
                                                                                    data-handle="smallPlayButton_icon_wrapper"
                                                                                    style="box-sizing: border-box; height: 100%; position: relative; opacity: 1; transform: scale(1.001); transition: transform 200ms ease 0s;"
                                                                                >
                                                                                    <div style="box-sizing: border-box; height: 100%; margin-left: 1.3px; padding: 13px 0px 11.7px; position: relative; width: 100%;">
                                                                                        <div style="height: 100%; width: 100%;">
                                                                                            <div style="display: none; height: 100%; width: 100%;">
                                                                                                <svg
                                                                                                    x="0px"
                                                                                                    y="0px"
                                                                                                    viewBox="0 0 11.556 16"
                                                                                                    enable-background="new 0 0 11.556 16"
                                                                                                    aria-hidden="true"
                                                                                                    class="w-css-reset w-css-reset-tree"
                                                                                                    style="fill: rgb(255, 255, 255); height: 100%; left: 0px; stroke-width: 0px; top: 0px; width: 100%; vertical-align: top;"
                                                                                                >
                                                                                                    <g>
                                                                                                        <rect x="0" y="0" width="3.5" height="12"></rect>
                                                                                                        <rect x="6.5" y="0" width="3.5" height="12"></rect>
                                                                                                    </g>
                                                                                                </svg>
                                                                                            </div>
                                                                                            <div style="display: block; height: 100%; width: 100%;">
                                                                                                <svg
                                                                                                    x="0px"
                                                                                                    y="0px"
                                                                                                    viewBox="0 0 11.556 16"
                                                                                                    enable-background="new 0 0 11.556 16"
                                                                                                    aria-hidden="true"
                                                                                                    class="w-css-reset w-css-reset-tree"
                                                                                                    style="fill: rgb(255, 255, 255); height: 100%; left: 0px; stroke-width: 0px; top: 0px; width: 100%; vertical-align: top;"
                                                                                                >
                                                                                                    <polygon points="11.556,7.5 0,15 0,0"></polygon>
                                                                                                </svg>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="w-bottom-bar-middle w-css-reset" style="display: table-cell; vertical-align: top; position: relative; width: 100%; opacity: 1; transition: opacity 0s ease 0s;">
                                                                <div
                                                                    class="w-bottom-bar-middle-inner w-css-reset"
                                                                    style="
                                                                        height: 44px;
                                                                        position: relative;
                                                                        pointer-events: auto;
                                                                        white-space: nowrap;
                                                                        opacity: 1;
                                                                        transform: translateY(0px);
                                                                        transition: opacity 0ms ease 0s, transform 0ms ease 0s;
                                                                    "
                                                                >
                                                                    <div class="w-css-reset" data-handle="playbar" style="height: 100%; position: relative;">
                                                                        <div class="w-playbar-wrapper w-css-reset w-css-reset-tree" style="display: flex; height: 100%; width: 100%;">
                                                                            <div
                                                                                class="w-playbar__time"
                                                                                style="
                                                                                    box-sizing: content-box;
                                                                                    color: white;
                                                                                    font-family: WistiaPlayerInterNumbersSemiBold, Helvetica, sans-serif;
                                                                                    font-size: 16.9px;
                                                                                    letter-spacing: 0.65px;
                                                                                    line-height: 44px;
                                                                                    padding-left: 6.5px;
                                                                                    pointer-events: none;
                                                                                    position: relative;
                                                                                    text-align: center;
                                                                                    width: 36.4px;
                                                                                "
                                                                            >
                                                                                1:42
                                                                            </div>
                                                                            <div
                                                                                aria-label="Playbar"
                                                                                aria-orientation="horizontal"
                                                                                aria-valuemax="102.059"
                                                                                aria-valuemin="0"
                                                                                aria-valuenow="0"
                                                                                aria-valuetext="0 seconds"
                                                                                role="slider"
                                                                                tabindex="0"
                                                                                style="cursor: pointer; flex: 1 1 0%; height: 44px; outline: none; margin-left: 19.5px; margin-right: 13px; position: relative;"
                                                                            >
                                                                                <canvas height="44" width="1045" style="height: 44px; left: -19.5px; position: absolute; top: 0px; width: 1045.1px;"></canvas>
                                                                                <div style="border-radius: 50%; height: 14.56px; left: -7.28px; opacity: 0; position: absolute; top: 14.72px; width: 14.56px;"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="w-bottom-bar-right w-css-reset"
                                                                style="display: table-cell; vertical-align: top; position: relative; width: 0px; opacity: 1; transition: opacity 0s ease 0s; white-space: nowrap;"
                                                            >
                                                                <div
                                                                    class="w-bottom-bar-right-inner-anchor w-css-reset"
                                                                    style="height: 44px; position: relative; pointer-events: auto; white-space: nowrap; display: inline-block; right: 0px; top: 0px; vertical-align: top;"
                                                                >
                                                                    <div
                                                                        class="w-bottom-bar-right-inner w-css-reset"
                                                                        style="
                                                                            height: 44px;
                                                                            position: relative;
                                                                            pointer-events: auto;
                                                                            white-space: nowrap;
                                                                            display: inline-block;
                                                                            opacity: 1;
                                                                            right: 0px;
                                                                            top: 0px;
                                                                            transform: translateY(0px);
                                                                            transition: opacity 0ms ease 0s, transform 0ms ease 0s;
                                                                            padding-right: 0px;
                                                                        "
                                                                    >
                                                                        <div class="w-css-reset" data-handle="volumeButton" style="display: inline-block; vertical-align: top;">
                                                                            <div class="w-vulcan-button-wrapper w-css-reset" style="display: inline-block; height: 44px; position: relative; vertical-align: top; width: 52px;">
                                                                                <button
                                                                                    class="w-vulcan-v2-button w-css-reset w-css-reset-tree w-css-reset-button-important"
                                                                                    tabindex="0"
                                                                                    aria-label="Mute"
                                                                                    title="Mute"
                                                                                    style="
                                                                                        background-color: rgba(0, 0, 0, 0);
                                                                                        border-radius: 0px;
                                                                                        box-shadow: none;
                                                                                        cursor: pointer;
                                                                                        height: 100%;
                                                                                        position: relative;
                                                                                        transition: background-color 150ms ease 0s;
                                                                                        width: calc(100% + 0px);
                                                                                        padding-right: 0px;
                                                                                    "
                                                                                >
                                                                                    <div
                                                                                        class="w-vulcan-icon-wrapper"
                                                                                        data-handle="volumeButton_icon_wrapper"
                                                                                        style="box-sizing: border-box; height: 100%; position: relative; opacity: 1; transform: scale(1.001); transition: transform 200ms ease 0s;"
                                                                                    >
                                                                                        <svg
                                                                                            x="0px"
                                                                                            y="0px"
                                                                                            viewBox="0 0 40 34"
                                                                                            enable-background="new 0 0 40 34"
                                                                                            aria-hidden="true"
                                                                                            style="fill: rgb(255, 255, 255); height: 100%; left: 0px; stroke-width: 0px; top: 0px; width: 100%;"
                                                                                        >
                                                                                            <g style="transform: translateX(1.25px); transition: transform 100ms ease 0s;">
                                                                                                <g>
                                                                                                    <path
                                                                                                        d="M13.8,14.2c-0.5,0.5-1.4,0.8-2,0.8h-1.6C9.5,15,9,15.5,9,16.2v1.6c0,0.7,0.5,1.2,1.2,1.2h1.6c0.7,0,1.6,0.4,2,0.8l2.3,2.3c0.5,0.5,0.8,0.3,0.8-0.4v-9.6c0-0.7-0.4-0.8-0.8-0.4L13.8,14.2z"
                                                                                                    ></path>
                                                                                                </g>
                                                                                                <g>
                                                                                                    <path
                                                                                                        fill="none"
                                                                                                        stroke="#ffffff"
                                                                                                        stroke-line-cap="round"
                                                                                                        stroke-miterlimit="10"
                                                                                                        stroke-width="2"
                                                                                                        d="M22,11.7c0,0,1.1,2.5,1.1,5s-1.1,5-1.1,5"
                                                                                                        style="opacity: 1; transition: opacity 100ms ease 0s;"
                                                                                                    ></path>
                                                                                                    <path
                                                                                                        fill="none"
                                                                                                        stroke="#ffffff"
                                                                                                        stroke-line-cap="round"
                                                                                                        stroke-miterlimit="10"
                                                                                                        stroke-width="2"
                                                                                                        d="M25.8,9.2c0,0,1.7,3.8,1.7,7.5c0,3.7-1.7,7.5-1.7,7.5"
                                                                                                        style="opacity: 1; transition: opacity 100ms ease 0s;"
                                                                                                    ></path>
                                                                                                </g>
                                                                                                <g style="opacity: 0; transition: opacity 100ms ease 0s;">
                                                                                                    <line
                                                                                                        fill="none"
                                                                                                        stroke="#ffffff"
                                                                                                        stroke-line-cap="round"
                                                                                                        stroke-miterlimit="10"
                                                                                                        stroke-width="1.8102"
                                                                                                        x1="19.2"
                                                                                                        y1="15"
                                                                                                        x2="23.2"
                                                                                                        y2="19"
                                                                                                    ></line>
                                                                                                    <line
                                                                                                        fill="none"
                                                                                                        stroke="#ffffff"
                                                                                                        stroke-line-cap="round"
                                                                                                        stroke-miterlimit="10"
                                                                                                        stroke-width="1.8102"
                                                                                                        x1="19.2"
                                                                                                        y1="19"
                                                                                                        x2="23.2"
                                                                                                        y2="15"
                                                                                                    ></line>
                                                                                                </g>
                                                                                            </g>
                                                                                        </svg>
                                                                                    </div>
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                        <div class="w-css-reset" data-handle="settingsButton" style="display: inline-block; vertical-align: top;">
                                                                            <div class="w-vulcan-button-wrapper w-css-reset" style="display: inline-block; height: 44px; position: relative; vertical-align: top; width: 52px;">
                                                                                <button
                                                                                    class="w-vulcan-v2-button w-css-reset w-css-reset-tree w-css-reset-button-important"
                                                                                    tabindex="0"
                                                                                    aria-expanded="false"
                                                                                    aria-label="Show settings menu"
                                                                                    title="Show settings menu"
                                                                                    style="
                                                                                        background-color: rgba(0, 0, 0, 0);
                                                                                        border-radius: 0px;
                                                                                        box-shadow: none;
                                                                                        cursor: pointer;
                                                                                        height: 100%;
                                                                                        position: relative;
                                                                                        transition: background-color 150ms ease 0s;
                                                                                        width: calc(100% + 0px);
                                                                                        padding-right: 0px;
                                                                                    "
                                                                                >
                                                                                    <div
                                                                                        class="w-vulcan-icon-wrapper"
                                                                                        data-handle="settingsButton_icon_wrapper"
                                                                                        style="box-sizing: border-box; height: 100%; position: relative; opacity: 1; transform: scale(1.001); transition: transform 200ms ease 0s;"
                                                                                    >
                                                                                        <svg
                                                                                            x="0px"
                                                                                            y="0px"
                                                                                            viewBox="0 0 40 34"
                                                                                            enable-background="new 0 0 40 34"
                                                                                            aria-hidden="true"
                                                                                            style="fill: rgb(255, 255, 255); height: 100%; left: 0px; stroke-width: 0px; top: 0px; width: 100%;"
                                                                                        >
                                                                                            <g>
                                                                                                <g>
                                                                                                    <path
                                                                                                        d="M28.3,16.4h-1.9c-0.4,0-0.8-0.3-0.9-0.7l-0.4-1.1c-0.2-0.3-0.1-0.8,0.2-1.1l1.3-1.3c0.3-0.3,0.3-0.7,0-1l-0.4-0.4c-0.3-0.3-0.7-0.3-1,0l-1.3,1.3c-0.3,0.3-0.8,0.3-1.1,0.1l-1.1-0.5c-0.4-0.1-0.7-0.5-0.7-0.9V9.1c0-0.4-0.3-0.7-0.7-0.7h-0.6c-0.4,0-0.7,0.3-0.7,0.7v1.7c0,0.4-0.3,0.8-0.7,0.9l-1.2,0.5c-0.3,0.2-0.8,0.1-1.1-0.2l-1.2-1.2c-0.3-0.3-0.7-0.3-1,0l-0.4,0.4c-0.3,0.3-0.3,0.7,0,1l1.2,1.2c0.3,0.3,0.3,0.8,0.1,1.1l-0.5,1.2c-0.1,0.4-0.5,0.7-0.9,0.7h-1.6c-0.4,0-0.7,0.3-0.7,0.7v0.6c0,0.4,0.3,0.7,0.7,0.7h1.6c0.4,0,0.8,0.3,0.9,0.7l0.5,1.2c0.2,0.3,0.1,0.8-0.1,1.1l-1.2,1.2c-0.3,0.3-0.3,0.7,0,1l0.4,0.4c0.3,0.3,0.7,0.3,1,0l1.2-1.2c0.3-0.3,0.8-0.3,1.1-0.2l1.2,0.5c0.4,0.1,0.7,0.5,0.7,0.9v1.7c0,0.4,0.3,0.7,0.7,0.7h0.6c0.4,0,0.7-0.3,0.7-0.7V24c0-0.4,0.3-0.8,0.7-0.9l1.1-0.5c0.3-0.2,0.8-0.1,1.1,0.1l1.3,1.3c0.3,0.3,0.7,0.3,1,0l0.4-0.4c0.3-0.3,0.3-0.7,0-1l-1.3-1.3C25,21,25,20.5,25.1,20.2l0.4-1.1c0.1-0.4,0.5-0.7,0.9-0.7h1.9c0.4,0,0.7-0.3,0.7-0.7v-0.6C29,16.7,28.7,16.4,28.3,16.4z M23.8,17.5c0,2.2-1.8,3.9-3.9,3.9c-2.2,0-3.9-1.8-3.9-3.9s1.7-3.9,3.9-3.9C22.1,13.6,23.8,15.3,23.8,17.5z"
                                                                                                    ></path>
                                                                                                </g>
                                                                                            </g>
                                                                                        </svg>
                                                                                    </div>
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                        <div class="w-css-reset" data-handle="fullscreenControl" style="display: inline-block; vertical-align: top;">
                                                                            <div class="w-vulcan-button-wrapper w-css-reset" style="display: inline-block; height: 44px; position: relative; vertical-align: top; width: 52px;">
                                                                                <button
                                                                                    class="w-vulcan-v2-button w-css-reset w-css-reset-tree w-css-reset-button-important"
                                                                                    tabindex="0"
                                                                                    aria-label="Fullscreen"
                                                                                    title="Fullscreen"
                                                                                    style="
                                                                                        background-color: rgba(0, 0, 0, 0);
                                                                                        border-radius: 0px;
                                                                                        box-shadow: none;
                                                                                        cursor: pointer;
                                                                                        height: 100%;
                                                                                        position: relative;
                                                                                        transition: background-color 150ms ease 0s;
                                                                                        width: calc(100% + 0px);
                                                                                        padding-right: 0px;
                                                                                    "
                                                                                >
                                                                                    <div
                                                                                        class="w-vulcan-icon-wrapper"
                                                                                        data-handle="fullscreenControl_icon_wrapper"
                                                                                        style="box-sizing: border-box; height: 100%; position: relative; opacity: 1; transform: scale(1.001); transition: transform 200ms ease 0s;"
                                                                                    >
                                                                                        <svg
                                                                                            x="0px"
                                                                                            y="0px"
                                                                                            viewBox="0 0 40 34"
                                                                                            enable-background="new 0 0 40 34"
                                                                                            aria-hidden="true"
                                                                                            style="fill: rgb(255, 255, 255); height: 100%; left: 0px; stroke-width: 0px; top: 0px; width: 100%;"
                                                                                        >
                                                                                            <g>
                                                                                                <g>
                                                                                                    <polyline
                                                                                                        fill="none"
                                                                                                        stroke="#ffffff"
                                                                                                        stroke-width="2"
                                                                                                        stroke-linecap="round"
                                                                                                        stroke-linejoin="round"
                                                                                                        stroke-miterlimit="10"
                                                                                                        points="31.4,12.6 31.4,8.7 25.8,8.7"
                                                                                                    ></polyline>
                                                                                                    <polyline
                                                                                                        fill="none"
                                                                                                        stroke="#ffffff"
                                                                                                        stroke-width="2"
                                                                                                        stroke-linecap="round"
                                                                                                        stroke-linejoin="round"
                                                                                                        stroke-miterlimit="10"
                                                                                                        points="14.7,8.7 9.1,8.7 9.1,12.6"
                                                                                                    ></polyline>
                                                                                                    <polyline
                                                                                                        fill="none"
                                                                                                        stroke="#ffffff"
                                                                                                        stroke-width="2"
                                                                                                        stroke-linecap="round"
                                                                                                        stroke-linejoin="round"
                                                                                                        stroke-miterlimit="10"
                                                                                                        points="25.8,24.8 31.4,24.8 31.4,20.9"
                                                                                                    ></polyline>
                                                                                                    <polyline
                                                                                                        fill="none"
                                                                                                        stroke="#ffffff"
                                                                                                        stroke-width="2"
                                                                                                        stroke-linecap="round"
                                                                                                        stroke-linejoin="round"
                                                                                                        stroke-miterlimit="10"
                                                                                                        points="9.1,20.9 9.1,24.8 14.7,24.8"
                                                                                                    ></polyline>
                                                                                                </g>
                                                                                                <rect
                                                                                                    x="13.7"
                                                                                                    y="12.3"
                                                                                                    fill="none"
                                                                                                    stroke="#ffffff"
                                                                                                    stroke-width="2"
                                                                                                    stroke-linecap="round"
                                                                                                    stroke-linejoin="round"
                                                                                                    stroke-miterlimit="10"
                                                                                                    enable-background="new"
                                                                                                    width="13.3"
                                                                                                    height="8.9"
                                                                                                ></rect>
                                                                                            </g>
                                                                                        </svg>
                                                                                    </div>
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="w-ellipsis w-css-reset" style="height: 44px; position: relative; pointer-events: auto; white-space: nowrap; display: none;"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="w-foreground w-css-reset" style="height: 100%; left: 0px; pointer-events: none; position: absolute; top: 0px; width: 100%;">
                                                        <div class="w-css-reset" data-handle="contextMenu" style="pointer-events: auto;"></div>
                                                        <div class="w-css-reset" data-handle="loadingHourglass" style="pointer-events: auto;"></div>
                                                        <div class="w-css-reset" data-handle="focusOutline" style="pointer-events: auto;">
                                                            <div
                                                                class="w-focus-outline"
                                                                style="
                                                                    box-shadow: rgb(255, 255, 255) 0px 0px 0px 2px inset;
                                                                    border-radius: 0px;
                                                                    display: none;
                                                                    height: 100%;
                                                                    left: 0px;
                                                                    pointer-events: none;
                                                                    position: absolute;
                                                                    right: 0px;
                                                                    width: 100%;
                                                                "
                                                            ></div>
                                                        </div>
                                                        <div class="w-css-reset" data-handle="playbarlessProgressIndicator" style="pointer-events: auto;">
                                                            <div style="bottom: 0px; left: 0px; position: absolute; width: 100%;">
                                                                <div style="background-color: rgb(255, 255, 255); bottom: 0px; display: none; height: 0px; opacity: 0; transition: opacity 1s ease 0s, height 0.5s ease 0s; width: 100%;">
                                                                    <div style="background-color: rgb(245, 130, 32); height: 100%; transition: width 500ms ease-out 500ms; width: 0%;"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <style id="wistia_35_style" type="text/css" class="wistia_injected_style">
                                                    #wistia_chrome_23 #wistia_grid_29_wrapper .w-css-reset {
                                                        font-size: 14px;
                                                    }
                                                    #wistia_chrome_23 #wistia_grid_29_wrapper div.w-css-reset {
                                                        box-sizing: inherit;
                                                        box-shadow: none;
                                                        color: inherit;
                                                        display: block;
                                                        float: none;
                                                        font: inherit;
                                                        font-family: inherit;
                                                        font-style: normal;
                                                        font-weight: normal;
                                                        font-size: inherit;
                                                        letter-spacing: 0;
                                                        line-height: inherit;
                                                        margin: 0;
                                                        max-height: none;
                                                        max-width: none;
                                                        min-height: 0;
                                                        min-width: 0;
                                                        padding: 0;
                                                        position: static;
                                                        text-decoration: none;
                                                        text-transform: none;
                                                        text-shadow: none;
                                                        transition: none;
                                                        word-wrap: normal;
                                                        -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
                                                        -webkit-user-select: none;
                                                        -webkit-font-smoothing: antialiased;
                                                    }
                                                    #wistia_chrome_23 #wistia_grid_29_wrapper span.w-css-reset {
                                                        box-sizing: inherit;
                                                        box-shadow: none;
                                                        color: inherit;
                                                        display: block;
                                                        float: none;
                                                        font: inherit;
                                                        font-family: inherit;
                                                        font-style: normal;
                                                        font-weight: normal;
                                                        font-size: inherit;
                                                        letter-spacing: 0;
                                                        line-height: inherit;
                                                        margin: 0;
                                                        max-height: none;
                                                        max-width: none;
                                                        min-height: 0;
                                                        min-width: 0;
                                                        padding: 0;
                                                        position: static;
                                                        text-decoration: none;
                                                        text-transform: none;
                                                        text-shadow: none;
                                                        transition: none;
                                                        word-wrap: normal;
                                                        -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
                                                        -webkit-user-select: none;
                                                        -webkit-font-smoothing: antialiased;
                                                    }
                                                    #wistia_chrome_23 #wistia_grid_29_wrapper ul.w-css-reset {
                                                        box-sizing: inherit;
                                                        box-shadow: none;
                                                        color: inherit;
                                                        display: block;
                                                        float: none;
                                                        font: inherit;
                                                        font-family: inherit;
                                                        font-style: normal;
                                                        font-weight: normal;
                                                        font-size: inherit;
                                                        letter-spacing: 0;
                                                        line-height: inherit;
                                                        margin: 0;
                                                        max-height: none;
                                                        max-width: none;
                                                        min-height: 0;
                                                        min-width: 0;
                                                        padding: 0;
                                                        position: static;
                                                        text-decoration: none;
                                                        text-transform: none;
                                                        text-shadow: none;
                                                        transition: none;
                                                        word-wrap: normal;
                                                        -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
                                                        -webkit-user-select: none;
                                                        -webkit-font-smoothing: antialiased;
                                                    }
                                                    #wistia_chrome_23 #wistia_grid_29_wrapper li.w-css-reset {
                                                        box-sizing: inherit;
                                                        box-shadow: none;
                                                        color: inherit;
                                                        display: block;
                                                        float: none;
                                                        font: inherit;
                                                        font-family: inherit;
                                                        font-style: normal;
                                                        font-weight: normal;
                                                        font-size: inherit;
                                                        letter-spacing: 0;
                                                        line-height: inherit;
                                                        margin: 0;
                                                        max-height: none;
                                                        max-width: none;
                                                        min-height: 0;
                                                        min-width: 0;
                                                        padding: 0;
                                                        position: static;
                                                        text-decoration: none;
                                                        text-transform: none;
                                                        text-shadow: none;
                                                        transition: none;
                                                        word-wrap: normal;
                                                        -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
                                                        -webkit-user-select: none;
                                                        -webkit-font-smoothing: antialiased;
                                                    }
                                                    #wistia_chrome_23 #wistia_grid_29_wrapper label.w-css-reset {
                                                        box-sizing: inherit;
                                                        box-shadow: none;
                                                        color: inherit;
                                                        display: block;
                                                        float: none;
                                                        font: inherit;
                                                        font-family: inherit;
                                                        font-style: normal;
                                                        font-weight: normal;
                                                        font-size: inherit;
                                                        letter-spacing: 0;
                                                        line-height: inherit;
                                                        margin: 0;
                                                        max-height: none;
                                                        max-width: none;
                                                        min-height: 0;
                                                        min-width: 0;
                                                        padding: 0;
                                                        position: static;
                                                        text-decoration: none;
                                                        text-transform: none;
                                                        text-shadow: none;
                                                        transition: none;
                                                        word-wrap: normal;
                                                        -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
                                                        -webkit-user-select: none;
                                                        -webkit-font-smoothing: antialiased;
                                                    }
                                                    #wistia_chrome_23 #wistia_grid_29_wrapper fieldset.w-css-reset {
                                                        box-sizing: inherit;
                                                        box-shadow: none;
                                                        color: inherit;
                                                        display: block;
                                                        float: none;
                                                        font: inherit;
                                                        font-family: inherit;
                                                        font-style: normal;
                                                        font-weight: normal;
                                                        font-size: inherit;
                                                        letter-spacing: 0;
                                                        line-height: inherit;
                                                        margin: 0;
                                                        max-height: none;
                                                        max-width: none;
                                                        min-height: 0;
                                                        min-width: 0;
                                                        padding: 0;
                                                        position: static;
                                                        text-decoration: none;
                                                        text-transform: none;
                                                        text-shadow: none;
                                                        transition: none;
                                                        word-wrap: normal;
                                                        -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
                                                        -webkit-user-select: none;
                                                        -webkit-font-smoothing: antialiased;
                                                    }
                                                    #wistia_chrome_23 #wistia_grid_29_wrapper button.w-css-reset {
                                                        box-sizing: inherit;
                                                        box-shadow: none;
                                                        color: inherit;
                                                        display: block;
                                                        float: none;
                                                        font: inherit;
                                                        font-family: inherit;
                                                        font-style: normal;
                                                        font-weight: normal;
                                                        font-size: inherit;
                                                        letter-spacing: 0;
                                                        line-height: inherit;
                                                        margin: 0;
                                                        max-height: none;
                                                        max-width: none;
                                                        min-height: 0;
                                                        min-width: 0;
                                                        padding: 0;
                                                        position: static;
                                                        text-decoration: none;
                                                        text-transform: none;
                                                        text-shadow: none;
                                                        transition: none;
                                                        word-wrap: normal;
                                                        -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
                                                        -webkit-user-select: none;
                                                        -webkit-font-smoothing: antialiased;
                                                    }
                                                    #wistia_chrome_23 #wistia_grid_29_wrapper img.w-css-reset {
                                                        box-sizing: inherit;
                                                        box-shadow: none;
                                                        color: inherit;
                                                        display: block;
                                                        float: none;
                                                        font: inherit;
                                                        font-family: inherit;
                                                        font-style: normal;
                                                        font-weight: normal;
                                                        font-size: inherit;
                                                        letter-spacing: 0;
                                                        line-height: inherit;
                                                        margin: 0;
                                                        max-height: none;
                                                        max-width: none;
                                                        min-height: 0;
                                                        min-width: 0;
                                                        padding: 0;
                                                        position: static;
                                                        text-decoration: none;
                                                        text-transform: none;
                                                        text-shadow: none;
                                                        transition: none;
                                                        word-wrap: normal;
                                                        -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
                                                        -webkit-user-select: none;
                                                        -webkit-font-smoothing: antialiased;
                                                    }
                                                    #wistia_chrome_23 #wistia_grid_29_wrapper a.w-css-reset {
                                                        box-sizing: inherit;
                                                        box-shadow: none;
                                                        color: inherit;
                                                        display: block;
                                                        float: none;
                                                        font: inherit;
                                                        font-family: inherit;
                                                        font-style: normal;
                                                        font-weight: normal;
                                                        font-size: inherit;
                                                        letter-spacing: 0;
                                                        line-height: inherit;
                                                        margin: 0;
                                                        max-height: none;
                                                        max-width: none;
                                                        min-height: 0;
                                                        min-width: 0;
                                                        padding: 0;
                                                        position: static;
                                                        text-decoration: none;
                                                        text-transform: none;
                                                        text-shadow: none;
                                                        transition: none;
                                                        word-wrap: normal;
                                                        -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
                                                        -webkit-user-select: none;
                                                        -webkit-font-smoothing: antialiased;
                                                    }
                                                    #wistia_chrome_23 #wistia_grid_29_wrapper svg.w-css-reset {
                                                        box-sizing: inherit;
                                                        box-shadow: none;
                                                        color: inherit;
                                                        display: block;
                                                        float: none;
                                                        font: inherit;
                                                        font-family: inherit;
                                                        font-style: normal;
                                                        font-weight: normal;
                                                        font-size: inherit;
                                                        letter-spacing: 0;
                                                        line-height: inherit;
                                                        margin: 0;
                                                        max-height: none;
                                                        max-width: none;
                                                        min-height: 0;
                                                        min-width: 0;
                                                        padding: 0;
                                                        position: static;
                                                        text-decoration: none;
                                                        text-transform: none;
                                                        text-shadow: none;
                                                        transition: none;
                                                        word-wrap: normal;
                                                        -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
                                                        -webkit-user-select: none;
                                                        -webkit-font-smoothing: antialiased;
                                                    }
                                                    #wistia_chrome_23 #wistia_grid_29_wrapper p.w-css-reset {
                                                        box-sizing: inherit;
                                                        box-shadow: none;
                                                        color: inherit;
                                                        display: block;
                                                        float: none;
                                                        font: inherit;
                                                        font-family: inherit;
                                                        font-style: normal;
                                                        font-weight: normal;
                                                        font-size: inherit;
                                                        letter-spacing: 0;
                                                        line-height: inherit;
                                                        margin: 0;
                                                        max-height: none;
                                                        max-width: none;
                                                        min-height: 0;
                                                        min-width: 0;
                                                        padding: 0;
                                                        position: static;
                                                        text-decoration: none;
                                                        text-transform: none;
                                                        text-shadow: none;
                                                        transition: none;
                                                        word-wrap: normal;
                                                        -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
                                                        -webkit-user-select: none;
                                                        -webkit-font-smoothing: antialiased;
                                                    }
                                                    #wistia_chrome_23 #wistia_grid_29_wrapper a.w-css-reset {
                                                        border: 0;
                                                    }
                                                    #wistia_chrome_23 #wistia_grid_29_wrapper h1.w-css-reset {
                                                        box-sizing: inherit;
                                                        box-shadow: none;
                                                        color: inherit;
                                                        display: block;
                                                        float: none;
                                                        font: inherit;
                                                        font-family: inherit;
                                                        font-style: normal;
                                                        font-weight: normal;
                                                        font-size: 2em;
                                                        letter-spacing: 0;
                                                        line-height: inherit;
                                                        margin: 0;
                                                        max-height: none;
                                                        max-width: none;
                                                        min-height: 0;
                                                        min-width: 0;
                                                        padding: 0;
                                                        position: static;
                                                        text-decoration: none;
                                                        text-transform: none;
                                                        text-shadow: none;
                                                        transition: none;
                                                        word-wrap: normal;
                                                        -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
                                                        -webkit-user-select: none;
                                                        -webkit-font-smoothing: antialiased;
                                                    }
                                                    #wistia_chrome_23 #wistia_grid_29_wrapper h2.w-css-reset {
                                                        box-sizing: inherit;
                                                        box-shadow: none;
                                                        color: inherit;
                                                        display: block;
                                                        float: none;
                                                        font: inherit;
                                                        font-family: inherit;
                                                        font-style: normal;
                                                        font-weight: normal;
                                                        font-size: 1.5em;
                                                        letter-spacing: 0;
                                                        line-height: inherit;
                                                        margin: 0;
                                                        max-height: none;
                                                        max-width: none;
                                                        min-height: 0;
                                                        min-width: 0;
                                                        padding: 0;
                                                        position: static;
                                                        text-decoration: none;
                                                        text-transform: none;
                                                        text-shadow: none;
                                                        transition: none;
                                                        word-wrap: normal;
                                                        -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
                                                        -webkit-user-select: none;
                                                        -webkit-font-smoothing: antialiased;
                                                    }
                                                    #wistia_chrome_23 #wistia_grid_29_wrapper h3.w-css-reset {
                                                        box-sizing: inherit;
                                                        box-shadow: none;
                                                        color: inherit;
                                                        display: block;
                                                        float: none;
                                                        font: inherit;
                                                        font-family: inherit;
                                                        font-style: normal;
                                                        font-weight: normal;
                                                        font-size: 1.17em;
                                                        letter-spacing: 0;
                                                        line-height: inherit;
                                                        margin: 0;
                                                        max-height: none;
                                                        max-width: none;
                                                        min-height: 0;
                                                        min-width: 0;
                                                        padding: 0;
                                                        position: static;
                                                        text-decoration: none;
                                                        text-transform: none;
                                                        text-shadow: none;
                                                        transition: none;
                                                        word-wrap: normal;
                                                        -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
                                                        -webkit-user-select: none;
                                                        -webkit-font-smoothing: antialiased;
                                                    }
                                                    #wistia_chrome_23 #wistia_grid_29_wrapper p.w-css-reset {
                                                        margin: 1.4em 0;
                                                    }
                                                    #wistia_chrome_23 #wistia_grid_29_wrapper a.w-css-reset {
                                                        display: inline;
                                                    }
                                                    #wistia_chrome_23 #wistia_grid_29_wrapper span.w-css-reset {
                                                        display: inline;
                                                    }
                                                    #wistia_chrome_23 #wistia_grid_29_wrapper svg.w-css-reset {
                                                        display: inline;
                                                    }
                                                    #wistia_chrome_23 #wistia_grid_29_wrapper ul.w-css-reset {
                                                        box-sizing: inherit;
                                                        box-shadow: none;
                                                        color: inherit;
                                                        display: block;
                                                        float: none;
                                                        font: inherit;
                                                        font-family: inherit;
                                                        font-style: normal;
                                                        font-weight: normal;
                                                        font-size: inherit;
                                                        letter-spacing: 0;
                                                        line-height: inherit;
                                                        margin: 0;
                                                        max-height: none;
                                                        max-width: none;
                                                        min-height: 0;
                                                        min-width: 0;
                                                        padding: 0;
                                                        position: static;
                                                        text-decoration: none;
                                                        text-transform: none;
                                                        text-shadow: none;
                                                        transition: none;
                                                        word-wrap: normal;
                                                        -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
                                                        -webkit-user-select: none;
                                                        -webkit-font-smoothing: antialiased;
                                                        list-style-type: none;
                                                    }
                                                    #wistia_chrome_23 #wistia_grid_29_wrapper ol.w-css-reset {
                                                        box-sizing: inherit;
                                                        box-shadow: none;
                                                        color: inherit;
                                                        display: block;
                                                        float: none;
                                                        font: inherit;
                                                        font-family: inherit;
                                                        font-style: normal;
                                                        font-weight: normal;
                                                        font-size: inherit;
                                                        letter-spacing: 0;
                                                        line-height: inherit;
                                                        margin: 0;
                                                        max-height: none;
                                                        max-width: none;
                                                        min-height: 0;
                                                        min-width: 0;
                                                        padding: 0;
                                                        position: static;
                                                        text-decoration: none;
                                                        text-transform: none;
                                                        text-shadow: none;
                                                        transition: none;
                                                        word-wrap: normal;
                                                        -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
                                                        -webkit-user-select: none;
                                                        -webkit-font-smoothing: antialiased;
                                                        list-style-type: none;
                                                    }
                                                    #wistia_chrome_23 #wistia_grid_29_wrapper li.w-css-reset {
                                                        box-sizing: inherit;
                                                        box-shadow: none;
                                                        color: inherit;
                                                        display: block;
                                                        float: none;
                                                        font: inherit;
                                                        font-family: inherit;
                                                        font-style: normal;
                                                        font-weight: normal;
                                                        font-size: inherit;
                                                        letter-spacing: 0;
                                                        line-height: inherit;
                                                        margin: 0;
                                                        max-height: none;
                                                        max-width: none;
                                                        min-height: 0;
                                                        min-width: 0;
                                                        padding: 0;
                                                        position: static;
                                                        text-decoration: none;
                                                        text-transform: none;
                                                        text-shadow: none;
                                                        transition: none;
                                                        word-wrap: normal;
                                                        -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
                                                        -webkit-user-select: none;
                                                        -webkit-font-smoothing: antialiased;
                                                        list-style-type: none;
                                                    }
                                                    #wistia_chrome_23 #wistia_grid_29_wrapper ul:before.w-css-reset {
                                                        display: none;
                                                    }
                                                    #wistia_chrome_23 #wistia_grid_29_wrapper ol:before.w-css-reset {
                                                        display: none;
                                                    }
                                                    #wistia_chrome_23 #wistia_grid_29_wrapper li:before.w-css-reset {
                                                        display: none;
                                                    }
                                                    #wistia_chrome_23 #wistia_grid_29_wrapper ul:after.w-css-reset {
                                                        display: none;
                                                    }
                                                    #wistia_chrome_23 #wistia_grid_29_wrapper ol:after.w-css-reset {
                                                        display: none;
                                                    }
                                                    #wistia_chrome_23 #wistia_grid_29_wrapper li:after.w-css-reset {
                                                        display: none;
                                                    }
                                                    #wistia_chrome_23 #wistia_grid_29_wrapper label.w-css-reset {
                                                        background-attachment: scroll;
                                                        background-color: transparent;
                                                        background-image: none;
                                                        background-position: 0 0;
                                                        background-repeat: no-repeat;
                                                        background-size: 100% 100%;
                                                        float: none;
                                                        outline: none;
                                                    }
                                                    #wistia_chrome_23 #wistia_grid_29_wrapper button.w-css-reset {
                                                        background-attachment: scroll;
                                                        background-color: transparent;
                                                        background-image: none;
                                                        background-position: 0 0;
                                                        background-repeat: no-repeat;
                                                        background-size: 100% 100%;
                                                        border: 0;
                                                        border-radius: 0;
                                                        outline: none;
                                                        position: static;
                                                    }
                                                    #wistia_chrome_23 #wistia_grid_29_wrapper img.w-css-reset {
                                                        border: 0;
                                                        display: inline-block;
                                                        vertical-align: top;
                                                        border-radius: 0;
                                                        outline: none;
                                                        position: static;
                                                    }
                                                    #wistia_chrome_23 #wistia_grid_29_wrapper .w-css-reset button::-moz-focus-inner {
                                                        border: 0;
                                                    }
                                                    #wistia_chrome_23 #wistia_grid_29_wrapper .w-css-reset-tree {
                                                        font-size: 14px;
                                                    }
                                                    #wistia_chrome_23 #wistia_grid_29_wrapper .w-css-reset-tree div {
                                                        box-sizing: inherit;
                                                        box-shadow: none;
                                                        color: inherit;
                                                        display: block;
                                                        float: none;
                                                        font: inherit;
                                                        font-family: inherit;
                                                        font-style: normal;
                                                        font-weight: normal;
                                                        font-size: inherit;
                                                        letter-spacing: 0;
                                                        line-height: inherit;
                                                        margin: 0;
                                                        max-height: none;
                                                        max-width: none;
                                                        min-height: 0;
                                                        min-width: 0;
                                                        padding: 0;
                                                        position: static;
                                                        text-decoration: none;
                                                        text-transform: none;
                                                        text-shadow: none;
                                                        transition: none;
                                                        word-wrap: normal;
                                                        -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
                                                        -webkit-user-select: none;
                                                        -webkit-font-smoothing: antialiased;
                                                    }
                                                    #wistia_chrome_23 #wistia_grid_29_wrapper .w-css-reset-tree span {
                                                        box-sizing: inherit;
                                                        box-shadow: none;
                                                        color: inherit;
                                                        display: block;
                                                        float: none;
                                                        font: inherit;
                                                        font-family: inherit;
                                                        font-style: normal;
                                                        font-weight: normal;
                                                        font-size: inherit;
                                                        letter-spacing: 0;
                                                        line-height: inherit;
                                                        margin: 0;
                                                        max-height: none;
                                                        max-width: none;
                                                        min-height: 0;
                                                        min-width: 0;
                                                        padding: 0;
                                                        position: static;
                                                        text-decoration: none;
                                                        text-transform: none;
                                                        text-shadow: none;
                                                        transition: none;
                                                        word-wrap: normal;
                                                        -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
                                                        -webkit-user-select: none;
                                                        -webkit-font-smoothing: antialiased;
                                                    }
                                                    #wistia_chrome_23 #wistia_grid_29_wrapper .w-css-reset-tree ul {
                                                        box-sizing: inherit;
                                                        box-shadow: none;
                                                        color: inherit;
                                                        display: block;
                                                        float: none;
                                                        font: inherit;
                                                        font-family: inherit;
                                                        font-style: normal;
                                                        font-weight: normal;
                                                        font-size: inherit;
                                                        letter-spacing: 0;
                                                        line-height: inherit;
                                                        margin: 0;
                                                        max-height: none;
                                                        max-width: none;
                                                        min-height: 0;
                                                        min-width: 0;
                                                        padding: 0;
                                                        position: static;
                                                        text-decoration: none;
                                                        text-transform: none;
                                                        text-shadow: none;
                                                        transition: none;
                                                        word-wrap: normal;
                                                        -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
                                                        -webkit-user-select: none;
                                                        -webkit-font-smoothing: antialiased;
                                                    }
                                                    #wistia_chrome_23 #wistia_grid_29_wrapper .w-css-reset-tree li {
                                                        box-sizing: inherit;
                                                        box-shadow: none;
                                                        color: inherit;
                                                        display: block;
                                                        float: none;
                                                        font: inherit;
                                                        font-family: inherit;
                                                        font-style: normal;
                                                        font-weight: normal;
                                                        font-size: inherit;
                                                        letter-spacing: 0;
                                                        line-height: inherit;
                                                        margin: 0;
                                                        max-height: none;
                                                        max-width: none;
                                                        min-height: 0;
                                                        min-width: 0;
                                                        padding: 0;
                                                        position: static;
                                                        text-decoration: none;
                                                        text-transform: none;
                                                        text-shadow: none;
                                                        transition: none;
                                                        word-wrap: normal;
                                                        -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
                                                        -webkit-user-select: none;
                                                        -webkit-font-smoothing: antialiased;
                                                    }
                                                    #wistia_chrome_23 #wistia_grid_29_wrapper .w-css-reset-tree label {
                                                        box-sizing: inherit;
                                                        box-shadow: none;
                                                        color: inherit;
                                                        display: block;
                                                        float: none;
                                                        font: inherit;
                                                        font-family: inherit;
                                                        font-style: normal;
                                                        font-weight: normal;
                                                        font-size: inherit;
                                                        letter-spacing: 0;
                                                        line-height: inherit;
                                                        margin: 0;
                                                        max-height: none;
                                                        max-width: none;
                                                        min-height: 0;
                                                        min-width: 0;
                                                        padding: 0;
                                                        position: static;
                                                        text-decoration: none;
                                                        text-transform: none;
                                                        text-shadow: none;
                                                        transition: none;
                                                        word-wrap: normal;
                                                        -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
                                                        -webkit-user-select: none;
                                                        -webkit-font-smoothing: antialiased;
                                                    }
                                                    #wistia_chrome_23 #wistia_grid_29_wrapper .w-css-reset-tree fieldset {
                                                        box-sizing: inherit;
                                                        box-shadow: none;
                                                        color: inherit;
                                                        display: block;
                                                        float: none;
                                                        font: inherit;
                                                        font-family: inherit;
                                                        font-style: normal;
                                                        font-weight: normal;
                                                        font-size: inherit;
                                                        letter-spacing: 0;
                                                        line-height: inherit;
                                                        margin: 0;
                                                        max-height: none;
                                                        max-width: none;
                                                        min-height: 0;
                                                        min-width: 0;
                                                        padding: 0;
                                                        position: static;
                                                        text-decoration: none;
                                                        text-transform: none;
                                                        text-shadow: none;
                                                        transition: none;
                                                        word-wrap: normal;
                                                        -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
                                                        -webkit-user-select: none;
                                                        -webkit-font-smoothing: antialiased;
                                                    }
                                                    #wistia_chrome_23 #wistia_grid_29_wrapper .w-css-reset-tree button {
                                                        box-sizing: inherit;
                                                        box-shadow: none;
                                                        color: inherit;
                                                        display: block;
                                                        float: none;
                                                        font: inherit;
                                                        font-family: inherit;
                                                        font-style: normal;
                                                        font-weight: normal;
                                                        font-size: inherit;
                                                        letter-spacing: 0;
                                                        line-height: inherit;
                                                        margin: 0;
                                                        max-height: none;
                                                        max-width: none;
                                                        min-height: 0;
                                                        min-width: 0;
                                                        padding: 0;
                                                        position: static;
                                                        text-decoration: none;
                                                        text-transform: none;
                                                        text-shadow: none;
                                                        transition: none;
                                                        word-wrap: normal;
                                                        -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
                                                        -webkit-user-select: none;
                                                        -webkit-font-smoothing: antialiased;
                                                    }
                                                    #wistia_chrome_23 #wistia_grid_29_wrapper .w-css-reset-tree img {
                                                        box-sizing: inherit;
                                                        box-shadow: none;
                                                        color: inherit;
                                                        display: block;
                                                        float: none;
                                                        font: inherit;
                                                        font-family: inherit;
                                                        font-style: normal;
                                                        font-weight: normal;
                                                        font-size: inherit;
                                                        letter-spacing: 0;
                                                        line-height: inherit;
                                                        margin: 0;
                                                        max-height: none;
                                                        max-width: none;
                                                        min-height: 0;
                                                        min-width: 0;
                                                        padding: 0;
                                                        position: static;
                                                        text-decoration: none;
                                                        text-transform: none;
                                                        text-shadow: none;
                                                        transition: none;
                                                        word-wrap: normal;
                                                        -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
                                                        -webkit-user-select: none;
                                                        -webkit-font-smoothing: antialiased;
                                                    }
                                                    #wistia_chrome_23 #wistia_grid_29_wrapper .w-css-reset-tree a {
                                                        box-sizing: inherit;
                                                        box-shadow: none;
                                                        color: inherit;
                                                        display: block;
                                                        float: none;
                                                        font: inherit;
                                                        font-family: inherit;
                                                        font-style: normal;
                                                        font-weight: normal;
                                                        font-size: inherit;
                                                        letter-spacing: 0;
                                                        line-height: inherit;
                                                        margin: 0;
                                                        max-height: none;
                                                        max-width: none;
                                                        min-height: 0;
                                                        min-width: 0;
                                                        padding: 0;
                                                        position: static;
                                                        text-decoration: none;
                                                        text-transform: none;
                                                        text-shadow: none;
                                                        transition: none;
                                                        word-wrap: normal;
                                                        -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
                                                        -webkit-user-select: none;
                                                        -webkit-font-smoothing: antialiased;
                                                    }
                                                    #wistia_chrome_23 #wistia_grid_29_wrapper .w-css-reset-tree svg {
                                                        box-sizing: inherit;
                                                        box-shadow: none;
                                                        color: inherit;
                                                        display: block;
                                                        float: none;
                                                        font: inherit;
                                                        font-family: inherit;
                                                        font-style: normal;
                                                        font-weight: normal;
                                                        font-size: inherit;
                                                        letter-spacing: 0;
                                                        line-height: inherit;
                                                        margin: 0;
                                                        max-height: none;
                                                        max-width: none;
                                                        min-height: 0;
                                                        min-width: 0;
                                                        padding: 0;
                                                        position: static;
                                                        text-decoration: none;
                                                        text-transform: none;
                                                        text-shadow: none;
                                                        transition: none;
                                                        word-wrap: normal;
                                                        -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
                                                        -webkit-user-select: none;
                                                        -webkit-font-smoothing: antialiased;
                                                    }
                                                    #wistia_chrome_23 #wistia_grid_29_wrapper .w-css-reset-tree p {
                                                        box-sizing: inherit;
                                                        box-shadow: none;
                                                        color: inherit;
                                                        display: block;
                                                        float: none;
                                                        font: inherit;
                                                        font-family: inherit;
                                                        font-style: normal;
                                                        font-weight: normal;
                                                        font-size: inherit;
                                                        letter-spacing: 0;
                                                        line-height: inherit;
                                                        margin: 0;
                                                        max-height: none;
                                                        max-width: none;
                                                        min-height: 0;
                                                        min-width: 0;
                                                        padding: 0;
                                                        position: static;
                                                        text-decoration: none;
                                                        text-transform: none;
                                                        text-shadow: none;
                                                        transition: none;
                                                        word-wrap: normal;
                                                        -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
                                                        -webkit-user-select: none;
                                                        -webkit-font-smoothing: antialiased;
                                                    }
                                                    #wistia_chrome_23 #wistia_grid_29_wrapper .w-css-reset-tree a {
                                                        border: 0;
                                                    }
                                                    #wistia_chrome_23 #wistia_grid_29_wrapper .w-css-reset-tree h1 {
                                                        box-sizing: inherit;
                                                        box-shadow: none;
                                                        color: inherit;
                                                        display: block;
                                                        float: none;
                                                        font: inherit;
                                                        font-family: inherit;
                                                        font-style: normal;
                                                        font-weight: normal;
                                                        font-size: 2em;
                                                        letter-spacing: 0;
                                                        line-height: inherit;
                                                        margin: 0;
                                                        max-height: none;
                                                        max-width: none;
                                                        min-height: 0;
                                                        min-width: 0;
                                                        padding: 0;
                                                        position: static;
                                                        text-decoration: none;
                                                        text-transform: none;
                                                        text-shadow: none;
                                                        transition: none;
                                                        word-wrap: normal;
                                                        -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
                                                        -webkit-user-select: none;
                                                        -webkit-font-smoothing: antialiased;
                                                    }
                                                    #wistia_chrome_23 #wistia_grid_29_wrapper .w-css-reset-tree h2 {
                                                        box-sizing: inherit;
                                                        box-shadow: none;
                                                        color: inherit;
                                                        display: block;
                                                        float: none;
                                                        font: inherit;
                                                        font-family: inherit;
                                                        font-style: normal;
                                                        font-weight: normal;
                                                        font-size: 1.5em;
                                                        letter-spacing: 0;
                                                        line-height: inherit;
                                                        margin: 0;
                                                        max-height: none;
                                                        max-width: none;
                                                        min-height: 0;
                                                        min-width: 0;
                                                        padding: 0;
                                                        position: static;
                                                        text-decoration: none;
                                                        text-transform: none;
                                                        text-shadow: none;
                                                        transition: none;
                                                        word-wrap: normal;
                                                        -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
                                                        -webkit-user-select: none;
                                                        -webkit-font-smoothing: antialiased;
                                                    }
                                                    #wistia_chrome_23 #wistia_grid_29_wrapper .w-css-reset-tree h3 {
                                                        box-sizing: inherit;
                                                        box-shadow: none;
                                                        color: inherit;
                                                        display: block;
                                                        float: none;
                                                        font: inherit;
                                                        font-family: inherit;
                                                        font-style: normal;
                                                        font-weight: normal;
                                                        font-size: 1.17em;
                                                        letter-spacing: 0;
                                                        line-height: inherit;
                                                        margin: 0;
                                                        max-height: none;
                                                        max-width: none;
                                                        min-height: 0;
                                                        min-width: 0;
                                                        padding: 0;
                                                        position: static;
                                                        text-decoration: none;
                                                        text-transform: none;
                                                        text-shadow: none;
                                                        transition: none;
                                                        word-wrap: normal;
                                                        -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
                                                        -webkit-user-select: none;
                                                        -webkit-font-smoothing: antialiased;
                                                    }
                                                    #wistia_chrome_23 #wistia_grid_29_wrapper .w-css-reset-tree p {
                                                        margin: 1.4em 0;
                                                    }
                                                    #wistia_chrome_23 #wistia_grid_29_wrapper .w-css-reset-tree a {
                                                        display: inline;
                                                    }
                                                    #wistia_chrome_23 #wistia_grid_29_wrapper .w-css-reset-tree span {
                                                        display: inline;
                                                    }
                                                    #wistia_chrome_23 #wistia_grid_29_wrapper .w-css-reset-tree svg {
                                                        display: inline;
                                                    }
                                                    #wistia_chrome_23 #wistia_grid_29_wrapper .w-css-reset-tree ul {
                                                        box-sizing: inherit;
                                                        box-shadow: none;
                                                        color: inherit;
                                                        display: block;
                                                        float: none;
                                                        font: inherit;
                                                        font-family: inherit;
                                                        font-style: normal;
                                                        font-weight: normal;
                                                        font-size: inherit;
                                                        letter-spacing: 0;
                                                        line-height: inherit;
                                                        margin: 0;
                                                        max-height: none;
                                                        max-width: none;
                                                        min-height: 0;
                                                        min-width: 0;
                                                        padding: 0;
                                                        position: static;
                                                        text-decoration: none;
                                                        text-transform: none;
                                                        text-shadow: none;
                                                        transition: none;
                                                        word-wrap: normal;
                                                        -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
                                                        -webkit-user-select: none;
                                                        -webkit-font-smoothing: antialiased;
                                                        list-style-type: none;
                                                    }
                                                    #wistia_chrome_23 #wistia_grid_29_wrapper .w-css-reset-tree ol {
                                                        box-sizing: inherit;
                                                        box-shadow: none;
                                                        color: inherit;
                                                        display: block;
                                                        float: none;
                                                        font: inherit;
                                                        font-family: inherit;
                                                        font-style: normal;
                                                        font-weight: normal;
                                                        font-size: inherit;
                                                        letter-spacing: 0;
                                                        line-height: inherit;
                                                        margin: 0;
                                                        max-height: none;
                                                        max-width: none;
                                                        min-height: 0;
                                                        min-width: 0;
                                                        padding: 0;
                                                        position: static;
                                                        text-decoration: none;
                                                        text-transform: none;
                                                        text-shadow: none;
                                                        transition: none;
                                                        word-wrap: normal;
                                                        -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
                                                        -webkit-user-select: none;
                                                        -webkit-font-smoothing: antialiased;
                                                        list-style-type: none;
                                                    }
                                                    #wistia_chrome_23 #wistia_grid_29_wrapper .w-css-reset-tree li {
                                                        box-sizing: inherit;
                                                        box-shadow: none;
                                                        color: inherit;
                                                        display: block;
                                                        float: none;
                                                        font: inherit;
                                                        font-family: inherit;
                                                        font-style: normal;
                                                        font-weight: normal;
                                                        font-size: inherit;
                                                        letter-spacing: 0;
                                                        line-height: inherit;
                                                        margin: 0;
                                                        max-height: none;
                                                        max-width: none;
                                                        min-height: 0;
                                                        min-width: 0;
                                                        padding: 0;
                                                        position: static;
                                                        text-decoration: none;
                                                        text-transform: none;
                                                        text-shadow: none;
                                                        transition: none;
                                                        word-wrap: normal;
                                                        -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
                                                        -webkit-user-select: none;
                                                        -webkit-font-smoothing: antialiased;
                                                        list-style-type: none;
                                                    }
                                                    #wistia_chrome_23 #wistia_grid_29_wrapper .w-css-reset-tree ul:before {
                                                        display: none;
                                                    }
                                                    #wistia_chrome_23 #wistia_grid_29_wrapper .w-css-reset-tree ol:before {
                                                        display: none;
                                                    }
                                                    #wistia_chrome_23 #wistia_grid_29_wrapper .w-css-reset-tree li:before {
                                                        display: none;
                                                    }
                                                    #wistia_chrome_23 #wistia_grid_29_wrapper .w-css-reset-tree ul:after {
                                                        display: none;
                                                    }
                                                    #wistia_chrome_23 #wistia_grid_29_wrapper .w-css-reset-tree ol:after {
                                                        display: none;
                                                    }
                                                    #wistia_chrome_23 #wistia_grid_29_wrapper .w-css-reset-tree li:after {
                                                        display: none;
                                                    }
                                                    #wistia_chrome_23 #wistia_grid_29_wrapper .w-css-reset-tree label {
                                                        background-attachment: scroll;
                                                        background-color: transparent;
                                                        background-image: none;
                                                        background-position: 0 0;
                                                        background-repeat: no-repeat;
                                                        background-size: 100% 100%;
                                                        float: none;
                                                        outline: none;
                                                    }
                                                    #wistia_chrome_23 #wistia_grid_29_wrapper .w-css-reset-tree button {
                                                        background-attachment: scroll;
                                                        background-color: transparent;
                                                        background-image: none;
                                                        background-position: 0 0;
                                                        background-repeat: no-repeat;
                                                        background-size: 100% 100%;
                                                        border: 0;
                                                        border-radius: 0;
                                                        outline: none;
                                                        position: static;
                                                    }
                                                    #wistia_chrome_23 #wistia_grid_29_wrapper .w-css-reset-tree img {
                                                        border: 0;
                                                        display: inline-block;
                                                        vertical-align: top;
                                                        border-radius: 0;
                                                        outline: none;
                                                        position: static;
                                                    }
                                                    #wistia_chrome_23 #wistia_grid_29_wrapper .w-css-reset-tree button::-moz-focus-inner {
                                                        border: 0;
                                                    }
                                                    #wistia_chrome_23 #wistia_grid_29_wrapper .w-css-reset-max-width-none-important {
                                                        max-width: none !important;
                                                    }
                                                    #wistia_chrome_23 #wistia_grid_29_wrapper .w-css-reset-button-important {
                                                        border-radius: 0 !important;
                                                        color: #fff !important;
                                                    }
                                                </style>
                                            </div>
                                        </div>
                                        <div id="wistia_grid_29_front"></div>
                                        <div id="wistia_grid_29_top_inside"><div id="wistia_grid_29_top" style="height: 0px; font-size: 0px; line-height: 0px;"></div></div>
                                        <div id="wistia_grid_29_bottom_inside"><div id="wistia_grid_29_bottom" style="height: 0px; font-size: 0px; line-height: 0px;"></div></div>
                                        <div id="wistia_grid_29_left_inside"><div id="wistia_grid_29_left" style="height: 0px; font-size: 0px; line-height: 0px;"></div></div>
                                        <div id="wistia_grid_29_right_inside"><div id="wistia_grid_29_right" style="height: 0px; font-size: 0px; line-height: 0px;"></div></div>
                                    </div>
                                    <div id="wistia_grid_29_below" style="height: 0px; font-size: 0px; line-height: 0px;"></div>
                                    <style id="wistia_30_style" type="text/css" class="wistia_injected_style">
                                        #wistia_grid_29_wrapper {
                                            -moz-box-sizing: content-box;
                                            -webkit-box-sizing: content-box;
                                            box-sizing: content-box;
                                            font-family: Arial, sans-serif;
                                            font-size: 14px;
                                            height: 100%;
                                            position: relative;
                                            text-align: left;
                                            width: 100%;
                                        }
                                        #wistia_grid_29_wrapper * {
                                            -moz-box-sizing: content-box;
                                            -webkit-box-sizing: content-box;
                                            box-sizing: content-box;
                                        }
                                        #wistia_grid_29_above {
                                            position: relative;
                                        }
                                        #wistia_grid_29_main {
                                            display: block;
                                            height: 100%;
                                            position: relative;
                                        }
                                        #wistia_grid_29_behind {
                                            height: 100%;
                                            left: 0;
                                            position: absolute;
                                            top: 0;
                                            width: 100%;
                                        }
                                        #wistia_grid_29_center {
                                            height: 100%;
                                            overflow: hidden;
                                            position: relative;
                                            width: 100%;
                                        }
                                        #wistia_grid_29_front {
                                            display: none;
                                            height: 100%;
                                            left: 0;
                                            position: absolute;
                                            top: 0;
                                            width: 100%;
                                        }
                                        #wistia_grid_29_top_inside {
                                            position: absolute;
                                            left: 0;
                                            top: 0;
                                            width: 100%;
                                        }
                                        #wistia_grid_29_top {
                                            width: 100%;
                                            position: absolute;
                                            bottom: 0;
                                            left: 0;
                                        }
                                        #wistia_grid_29_bottom_inside {
                                            position: absolute;
                                            left: 0;
                                            bottom: 0;
                                            width: 100%;
                                        }
                                        #wistia_grid_29_bottom {
                                            width: 100%;
                                            position: absolute;
                                            top: 0;
                                            left: 0;
                                        }
                                        #wistia_grid_29_left_inside {
                                            height: 100%;
                                            position: absolute;
                                            left: 0;
                                            top: 0;
                                        }
                                        #wistia_grid_29_left {
                                            height: 100%;
                                            position: absolute;
                                            right: 0;
                                            top: 0;
                                        }
                                        #wistia_grid_29_right_inside {
                                            height: 100%;
                                            right: 0;
                                            position: absolute;
                                            top: 0;
                                        }
                                        #wistia_grid_29_right {
                                            height: 100%;
                                            left: 0;
                                            position: absolute;
                                            top: 0;
                                        }
                                        #wistia_grid_29_below {
                                            position: relative;
                                        }
                                    </style>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row counter-block-row justify-content-center g-4 section-padding mb-0">
            <div class="col-6 col-sm-4 col-md mt-md-0">
                <div class="counter-block text-center">
                    <h3 class="counter-number h1">
                        7+
                    </h3>
                    <p class="counter-desc text-md">
                        countries where we have
                        <br class="d-sm-none" />
                        happy customers
                    </p>
                </div>
            </div>
            <div class="col-6 col-sm-4 col-md mt-md-0">
                <div class="counter-block text-center">
                    <h4 class="counter-number h1">
                        19k sqft.
                    </h4>
                    <p class="counter-desc text-md">Area</p>
                </div>
            </div>
            <div class="col-6 col-sm-4 col-md mt-md-0">
                <div class="counter-block text-center">
                    <h4 class="counter-number h1">
                        50+
                    </h4>
                    <p class="counter-desc text-md">
                        Strength
                    </p>
                </div>
            </div>
            <div class="col-6 col-sm-4 col-md mt-md-0">
                <div class="counter-block text-center">
                    <h4 class="counter-number h1">
                        1050+
                    </h4>
                    <p class="counter-desc text-md">
                        Expandable Capacity
                    </p>
                </div>
            </div>
            <div class="col-6 col-sm-4 col-md mt-md-0">
                <div class="counter-block text-center">
                    <h3 class="counter-number h1">
                        04
                    </h3>
                    <p class="counter-desc text-md">
                        World wide offices
                    </p>
                </div>
            </div>
        </div>
        <div class="row g-0 mt-lg-3">
            <div class="col-lg-6 col-md-8">
                <div id="about-us-carousel-two" class="carousel slide carousel-fade" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item">
                            <picture>
                                <source srcset="<?php echo asset(); ?>images/infrastructure/office-1.webp" type="image/webp" />
                                <source srcset="<?php echo asset(); ?>images/infrastructure/office-1.jpg" type="image/jpeg" />
                                <img
                                    data-src="<?php echo asset(); ?>images/infrastructure/xoffice-1.jpg.pagespeed.ic.45YCI_xaGh.webp"
                                    src="<?php echo asset(); ?>images/infrastructure/xoffice-1.jpg.pagespeed.ic.45YCI_xaGh.webp"
                                    alt="Our Office"
                                    title="Our Office"
                                    class="d-block w-100"
                                    data-pagespeed-url-hash="1356000928"
                                    onload="pagespeed.CriticalImages.checkImageForCriticality(this);"
                                />
                            </picture>
                        </div>
                        <div class="carousel-item">
                            <picture>
                                <source srcset="<?php echo asset(); ?>images/infrastructure/office-2.webp" type="image/webp" />
                                <source srcset="<?php echo asset(); ?>images/infrastructure/office-2.jpg" type="image/jpeg" />
                                <img
                                    data-src="<?php echo asset(); ?>images/infrastructure/xoffice-2.jpg.pagespeed.ic.k4E0fZk0ac.webp"
                                    src="<?php echo asset(); ?>images/infrastructure/xoffice-2.jpg.pagespeed.ic.k4E0fZk0ac.webp"
                                    alt="Our Office"
                                    title="Our Office"
                                    class="d-block w-100"
                                    data-pagespeed-url-hash="1650500849"
                                    onload="pagespeed.CriticalImages.checkImageForCriticality(this);"
                                />
                            </picture>
                        </div>
                        <div class="carousel-item active">
                            <picture>
                                <source srcset="<?php echo asset(); ?>images/infrastructure/office-3.webp" type="image/webp" />
                                <source srcset="<?php echo asset(); ?>images/infrastructure/office-3.jpg" type="image/jpeg" />
                                <img
                                    data-src="<?php echo asset(); ?>images/infrastructure/xoffice-3.jpg.pagespeed.ic.YMzBEjMvog.webp"
                                    src="<?php echo asset(); ?>images/infrastructure/xoffice-3.jpg.pagespeed.ic.YMzBEjMvog.webp"
                                    alt="Our Office"
                                    title="Our Office"
                                    class="d-block w-100"
                                    data-pagespeed-url-hash="1945000770"
                                    onload="pagespeed.CriticalImages.checkImageForCriticality(this);"
                                />
                            </picture>
                        </div>
                        <div class="carousel-item">
                            <picture>
                                <source srcset="<?php echo asset(); ?>images/infrastructure/office-4.webp" type="image/webp" />
                                <source srcset="<?php echo asset(); ?>images/infrastructure/office-4.jpg" type="image/jpeg" />
                                <img
                                    data-src="<?php echo asset(); ?>images/infrastructure/xoffice-4.jpg.pagespeed.ic.cP0uvA2fkQ.webp"
                                    src="<?php echo asset(); ?>images/infrastructure/xoffice-4.jpg.pagespeed.ic.cP0uvA2fkQ.webp"
                                    alt="Our Office"
                                    title="Our Office"
                                    class="d-block w-100"
                                    data-pagespeed-url-hash="2239500691"
                                    onload="pagespeed.CriticalImages.checkImageForCriticality(this);"
                                />
                            </picture>
                        </div>
                        <div class="carousel-item">
                            <picture>
                                <source srcset="<?php echo asset(); ?>images/infrastructure/office-5.webp" type="image/webp" />
                                <source srcset="<?php echo asset(); ?>images/infrastructure/office-5.jpg" type="image/jpeg" />
                                <img
                                    data-src="<?php echo asset(); ?>images/infrastructure/xoffice-5.jpg.pagespeed.ic.ohVYkteWKp.webp"
                                    src="<?php echo asset(); ?>images/infrastructure/xoffice-5.jpg.pagespeed.ic.ohVYkteWKp.webp"
                                    alt="Our Office"
                                    title="Our Office"
                                    class="d-block w-100"
                                    data-pagespeed-url-hash="2534000612"
                                    onload="pagespeed.CriticalImages.checkImageForCriticality(this);"
                                />
                            </picture>
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
                                    <circle cx="16" cy="16" r="15.9155" class="progress-bar__background"></circle>
                                    <circle cx="16" cy="16" r="15.9155" class="progress-bar__progress"></circle>
                                </svg>
                            </div>
                            <span class="current-item js-slider-current-item-two show">3</span>
                            <span class="total-item text-md js-slider-total-item-two">5</span>
                        </div>
                    </div>
                    <ul class="text-18 text-secondary style-check">
                        <li>Over 19,000 Sq. Ft of state-of-the-art development center</li>
                        <li>Currently housing team of 400+ Bacancyers</li>
                        <li>Expandable capacity of 1050+ employees</li>
                        <li>Open seating for cross team collaboration</li>
                        <li>Green energy conservation systems</li>
                        <li>24 x 7 Power through Torrent (private electric provider)</li>
                        <li>Backup Power via UPS and Generators</li>
                        <li>2000 Sq. Ft of recreation and gaming area</li>
                        <li>Additional 10,000 Sq. Ft+ of scalable office infrastructure</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section-padding">
    <div class="container">
        <div class="section-title-and-desc">
            <div class="section-title-block text-center">
                <h2 class="section-title-text h1">Security &amp; Surveillance</h2>
            </div>
            <p class="text-center text-secondary h3 section-short-desc">
                A global leader in next-generation digital services and consulting
            </p>
        </div>
        <div class="row align-items-center flex-md-row-reverse">
            <div class="col-md-6">
                <picture>
                    <source srcset="<?php echo asset(); ?>images/infrastructure/cctv.webp" type="image/webp" />
                    <source srcset="<?php echo asset(); ?>images/infrastructure/cctv.jpg" type="image/jpeg" />
                    <img
                        data-src="<?php echo asset(); ?>images/infrastructure/xcctv.jpg.pagespeed.ic.ZCkxPclV00.webp"
                        src="<?php echo asset(); ?>images/infrastructure/xcctv.jpg.pagespeed.ic.ZCkxPclV00.webp"
                        alt="Security &amp; Surveillance"
                        title="Security &amp; Surveillance"
                        class="w-100"
                        data-pagespeed-url-hash="1790907570"
                        onload="pagespeed.CriticalImages.checkImageForCriticality(this);"
                    />
                </picture>
            </div>
            <div class="col-md-6 mobile-spacing">
                <ul class="text-18 text-secondary style-check">
                    <li>
                        High Definition CCTV Surveillance
                    </li>
                    <li>
                        Biometric Access control (COSEC PATH DCFx)
                    </li>
                    <li>
                        Certified Security Personnel
                    </li>
                    <li>
                        SVN Implementation
                    </li>
                    <li>
                        Disaster recovery provision
                    </li>
                    <li>
                        Advanced software for monitoring servers
                    </li>
                    <li>
                        RAID (redundant array of independent disks)
                    </li>
                    <li>
                        NagiOS to monitor servers and applications
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="section-padding section-padding-md bg-graylight">
    <div class="container">
        <div class="section-title-and-desc">
            <div class="section-title-block text-center">
                <h2 class="section-title-text h1">Devices</h2>
            </div>
            <p class="text-center text-secondary h3 section-short-desc">
                A global leader in next-generation digital services and consulting
            </p>
        </div>
        <div class="row g-0 mt-lg-3">
            <div class="col-lg-6 col-md-8">
                <div id="about-us-carousel" class="carousel slide carousel-fade" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item">
                            <picture>
                                <source srcset="<?php echo asset(); ?>images/infrastructure/device-1.webp" type="image/webp" />
                                <source srcset="<?php echo asset(); ?>images/infrastructure/device-1.jpg" type="image/jpeg" />
                                <img
                                    data-src="<?php echo asset(); ?>images/infrastructure/xdevice-1.jpg.pagespeed.ic.c4JlV_d8kq.webp"
                                    src="<?php echo asset(); ?>images/infrastructure/xdevice-1.jpg.pagespeed.ic.c4JlV_d8kq.webp"
                                    alt="Our Office"
                                    title="Our Office"
                                    class="d-block w-100"
                                    data-pagespeed-url-hash="1422525150"
                                    onload="pagespeed.CriticalImages.checkImageForCriticality(this);"
                                />
                            </picture>
                        </div>
                        <div class="carousel-item">
                            <picture>
                                <source srcset="<?php echo asset(); ?>images/infrastructure/device-2.webp" type="image/webp" />
                                <source srcset="<?php echo asset(); ?>images/infrastructure/device-2.jpg" type="image/jpeg" />
                                <img
                                    data-src="<?php echo asset(); ?>images/infrastructure/xdevice-2.jpg.pagespeed.ic.XguLu_Oyd8.webp"
                                    src="<?php echo asset(); ?>images/infrastructure/xdevice-2.jpg.pagespeed.ic.XguLu_Oyd8.webp"
                                    alt="Our Office"
                                    title="Our Office"
                                    class="d-block w-100"
                                    data-pagespeed-url-hash="1717025071"
                                    onload="pagespeed.CriticalImages.checkImageForCriticality(this);"
                                />
                            </picture>
                        </div>
                        <div class="carousel-item">
                            <picture>
                                <source srcset="<?php echo asset(); ?>images/infrastructure/device-3.webp" type="image/webp" />
                                <source srcset="<?php echo asset(); ?>images/infrastructure/device-3.jpg" type="image/jpeg" />
                                <img
                                    data-src="<?php echo asset(); ?>images/infrastructure/device-3.jpg"
                                    src="<?php echo asset(); ?>images/infrastructure/device-3.jpg"
                                    alt="Our Office"
                                    title="Our Office"
                                    class="d-block w-100"
                                    data-pagespeed-url-hash="2011524992"
                                    onload="pagespeed.CriticalImages.checkImageForCriticality(this);"
                                />
                            </picture>
                        </div>
                        <div class="carousel-item active">
                            <picture>
                                <source srcset="<?php echo asset(); ?>images/infrastructure/device-4.webp" type="image/webp" />
                                <source srcset="<?php echo asset(); ?>images/infrastructure/device-4.jpg" type="image/jpeg" />
                                <img
                                    data-src="<?php echo asset(); ?>images/infrastructure/device-4.jpg"
                                    src="<?php echo asset(); ?>images/infrastructure/device-4.jpg"
                                    alt="Our Office"
                                    title="Our Office"
                                    class="d-block w-100"
                                    data-pagespeed-url-hash="2306024913"
                                    onload="pagespeed.CriticalImages.checkImageForCriticality(this);"
                                />
                            </picture>
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
                                    <circle cx="16" cy="16" r="15.9155" class="progress-bar__background"></circle>
                                    <circle cx="16" cy="16" r="15.9155" class="progress-bar__progress"></circle>
                                </svg>
                            </div>
                            <span class="current-item js-slider-current-item show">4</span>
                            <span class="total-item text-md js-slider-total-item">4</span>
                        </div>
                    </div>
                    <ul class="text-18 text-secondary style-check">
                        <li>Intel i7, i9 processor based high speed Desktops</li>
                        <li>iMac Pro, iMac, Macbook</li>
                        <li>50+ Smartphones across different OS</li>
                        <li>15+ different tablets across different OS</li>
                        <li>Samsung Gear VR, Oculus Rift,</li>
                        <li>Smart TVs and more</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section-padding pb-0">
    <div class="container">
        <div class="section-title-and-desc">
            <div class="section-title-block text-center">
                <h2 class="section-title-text h1">Networks &amp; Servers</h2>
            </div>
            <p class="text-center text-secondary h3 section-short-desc">
                A global leader in next-generation digital services and consulting
            </p>
        </div>
        <div class="row align-items-center flex-md-row-reverse">
            <div class="col-md-6">
                <picture>
                    <source srcset="<?php echo asset(); ?>images/infrastructure/network.webp" type="image/webp" />
                    <source srcset="<?php echo asset(); ?>images/infrastructure/network.jpg" type="image/jpeg" />
                    <img
                        data-src="<?php echo asset(); ?>images/infrastructure/xnetwork.jpg.pagespeed.ic.wvLq82q3_M.webp"
                        src="<?php echo asset(); ?>images/infrastructure/xnetwork.jpg.pagespeed.ic.wvLq82q3_M.webp"
                        alt="Networks &amp; Servers"
                        title="Networks &amp; Servers"
                        class="w-100"
                        data-pagespeed-url-hash="3270808804"
                        onload="pagespeed.CriticalImages.checkImageForCriticality(this);"
                    />
                </picture>
            </div>
            <div class="col-md-6 mobile-spacing">
                <ul class="text-18 text-secondary style-check">
                    <li class="d-flex list-item">
                        Cisco Firewall 4100 Series
                    </li>
                    <li class="d-flex list-item">
                        Cisco Catalyst 3750-X Series Switches
                    </li>
                    <li class="d-flex list-item">
                        CAT6 Network Cables
                    </li>
                    <li class="d-flex list-item">
                        IBM System x3550 M4
                    </li>
                    <li class="d-flex list-item">
                        Amazon Cloud Infrastructure
                    </li>
                </ul>
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
            <div class="insight-slider-main section-padding-md">
                <div class="owl-carousel owl-nav-top-right owl-loaded owl-drag" id="insight-owl-carousel" data-sync="#insight-navigation-block">
                    <div class="owl-stage-outer">
                        <div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 3888px;">
                            <div class="owl-item active" style="width: 1296px;">
                                <div class="item">
                                    <div class="row align-items-center">
                                        <div class="col-lg-4 offset-lg-1 col-md-4 col-sm-6">
                                            <picture>
                                                <source srcset="<?php echo asset(); ?>images/insight-slide-1.webp" type="image/webp" />
                                                <source srcset="<?php echo asset(); ?>images/insight-slide-1.jpg?v-1" type="image/jpeg" />
                                                <img
                                                    data-src="<?php echo asset(); ?>images/xinsight-slide-1.jpg,qv-1.pagespeed.ic._FQ1OEjjc1.webp"
                                                    src="<?php echo asset(); ?>images/xinsight-slide-1.jpg,qv-1.pagespeed.ic._FQ1OEjjc1.webp"
                                                    alt="Top 1% IT Talent"
                                                    title="Top 1% IT Talent"
                                                    class="slider-img"
                                                    data-pagespeed-url-hash="2883500071"
                                                    onload="pagespeed.CriticalImages.checkImageForCriticality(this);"
                                                />
                                            </picture>
                                        </div>
                                        <div class="col-lg-4 offset-lg-1 col-md-8">
                                            <h4 class="h3 slider-title font-semibold">Top 1% IT Talent</h4>
                                            <p class="text-lg text-secondary">
                                                Bacancy Technology is an exclusive hub of top dedicated software developers, UI/UX designers, QA experts, and product managers with incredibly rare and hidden talents you will ever come
                                                across. We let you access the top 1% of IT talent worldwide, from independent software developers to fully managed teams.
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
                                                <source srcset="<?php echo asset(); ?>images/insight-slide-2.webp" type="image/webp" />
                                                <source srcset="<?php echo asset(); ?>images/insight-slide-2.jpg?v-1" type="image/jpeg" />
                                                <img
                                                    data-src="<?php echo asset(); ?>images/xinsight-slide-2.jpg,qv-1.pagespeed.ic.vEG9u-JiPl.webp"
                                                    src="<?php echo asset(); ?>images/xinsight-slide-2.jpg,qv-1.pagespeed.ic.vEG9u-JiPl.webp"
                                                    alt="Time Zone Aligned"
                                                    title="Time Zone Aligned"
                                                    class="slider-img"
                                                    data-pagespeed-url-hash="3304062408"
                                                    onload="pagespeed.CriticalImages.checkImageForCriticality(this);"
                                                />
                                            </picture>
                                        </div>
                                        <div class="col-lg-4 offset-lg-1 col-md-8">
                                            <h4 class="h3 slider-title font-semibold">Time Zone Aligned</h4>
                                            <p class="text-lg text-secondary">
                                                Timezone is never a constraint when you are working with Bacancy Technology. We follow a simple procedure- our developers and your time zone. Hire dedicated software developers from us and
                                                collaborate from far away to work according to your time zone, deadline, and milestone.
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
                                                <source srcset="<?php echo asset(); ?>images/insight-slide-3.webp" type="image/webp" />
                                                <source srcset="<?php echo asset(); ?>images/insight-slide-3.jpg?v-1" type="image/jpeg" />
                                                <img
                                                    data-src="<?php echo asset(); ?>images/xinsight-slide-3.jpg,qv-1.pagespeed.ic.zwTqXmxv14.webp"
                                                    src="<?php echo asset(); ?>images/xinsight-slide-3.jpg,qv-1.pagespeed.ic.zwTqXmxv14.webp"
                                                    alt="Experienced Team"
                                                    title="Experienced Team"
                                                    class="slider-img"
                                                    data-pagespeed-url-hash="3724624745"
                                                    onload="pagespeed.CriticalImages.checkImageForCriticality(this);"
                                                />
                                            </picture>
                                        </div>
                                        <div class="col-lg-4 offset-lg-1 col-md-8">
                                            <h4 class="h3 slider-title font-semibold">Experienced Team</h4>
                                            <p class="text-lg text-secondary">
                                                Whether you are looking for skilled developers in emerging technologies or looking for an extended arm to augment your existing team, we can lend a helping hand in both situations. We are a
                                                full-stack software development company with 650+ skilled and experienced software developers whom you can hire at your convenience to address ongoing business challenges.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="owl-nav">
                        <button type="button" role="presentation" class="owl-prev disabled">
                            <span class="long-arrow-hover"><span class="long-arrow-icon-css icon-item icon-left"></span></span>
                        </button>
                        <button type="button" role="presentation" class="owl-next">
                            <span class="long-arrow-hover"><span class="long-arrow-icon-css icon-item"></span></span>
                        </button>
                    </div>
                    <div class="owl-dots disabled"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section-padding bg-graylight" id="footer-form-id">
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