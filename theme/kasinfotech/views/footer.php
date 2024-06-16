<?php require_once 'partials/footer-top.php' ?>
<div class="footer-wrapper section-wrapper">
    <div class="footer-main section-padding bg-dark">
        <div class="container footer-bg">
            <div class="row g-4 gy-lg-0 align-items-md-center">
                <div class="col-md-12 col-lg-3 d-lg-flex">
                    <div class="get-in-touch-block">
                        <h5 class="h3-2  font-semibold footer-title mb-0 text-white right-content"><a href="<?php echo base_url(); ?>contactus" class="text-white">Get in Touch</a></h5>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 ">
                    <div class="get-in-touch-block">
                        <div class="icon-block">
                            <picture>
                                <source srcset="<?php echo asset('images/call-yellow-icon.webp'); ?>" type="image/webp">
                                <source srcset="<?php echo asset('images/call-yellow-icon.png'); ?>" type="image/png">
                                <img alt="KAS Pvt Ltd" title="KAS Pvt Ltd" class="lazy img-item">
                            </picture>
                        </div>
                        <div class="right-content">
                            <p class="text-dark-secondary text-md">Contact Number</p>
                            <h4 class="h4 text-white">
                                <a href="tel:<?php echo $contact_number; ?>" class="text-white"><?php echo $contact_number; ?></a>

                            </h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="get-in-touch-block">
                        <div class="icon-block">
                            <picture>
                                <source srcset="<?php echo asset('images/gmail-icon.webp'); ?>" type="image/webp">
                                <source srcset="<?php echo asset('images/gmail-icon.png'); ?>" type="image/png">
                            </picture>
                        </div>
                        <div class="right-content">
                            <p class="text-dark-secondary text-md">Email Us</p>
                            <span class="h4 text-white-all"><a href="mailto:<?php echo $contact_email; ?>" class="mail-id">
                                    <span><?php echo $contact_email; ?></span></a></span>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="hr-footer">
            <div class="row flex-lg-row-reverse">
                <div class="col-lg-12 tabs text-center justify-content-center justify-content-lg-end">
                    <a class="col footer-link-item text-sm text-white" target="_blank">
                        &copy; KAS Pvt. Ltd. - All Rights Reserved
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<script data-cfasync="false" src="<?php echo asset('js/email-decode.min.js') ?>"></script>

<script src="<?php echo asset('js/jquery.min.js') ?>" type="text/javascript"></script>
<script src="<?php echo asset('js/bootstrap.bundle.min.js%2Cqv-2.pagespeed.jm.wJ8zk3E_nH.js') ?>" type="text/javascript"></script>
<script src="<?php echo asset('js/owl.carousel.min.js') ?>" crossorigin="anonymous" type="text/javascript"></script>
<script src="<?php echo asset('js/main.js') ?>" type="text/javascript"></script>

<script type="text/javascript">
    (function($) {
        $(".sidebar-cart-menu").mCustomScrollbar({
            axis: "y",
            theme: "light",
        });
    })(jQuery);

    $(document).ready(function() {
        var user_visit = "<?php echo base_url(); ?>";
        var SCREEN_WIDTH = window.screen.width;
        var RENDER_WIDTH = '';
        var IS_WEBP = '';

        function updateContainer(isfirst) {
            var prev_width = RENDER_WIDTH;
            SCREEN_WIDTH = window.screen.width;
            if (SCREEN_WIDTH <= 768) {
                RENDER_WIDTH = 768;
            } else if (SCREEN_WIDTH <= 991) {
                RENDER_WIDTH = 991;
            } else {
                RENDER_WIDTH = '';
            }
            if (isfirst || prev_width != RENDER_WIDTH) {
                loadImage();
            }
        }

        function WebpIsSupported(callback) {
            if (!window.createImageBitmap) {
                callback(false);
                return;
            }
            var webpdata = 'data:image/webp;base64,UklGRiQAAABXRUJQVlA4IBgAAAAwAQCdASoCAAEAAQAcJaQAA3AA/v3AgAA=';
            fetch(webpdata).then(function(response) {
                return response.blob();
            }).then(function(blob) {
                createImageBitmap(blob).then(function() {
                    callback(true);
                }, function() {
                    callback(false);
                });
            });
        }
        window.onload = function() {
            updateContainer(true);
        };
        window.addEventListener('resize', function(event) {
            updateContainer(false);
        });

        function loadImage() {
            $(".background-image-holder").each(function() {
                let that = this;
                let dataSrc = $(this).children("img").attr("data-src");
                let isResize = $(this).children("img").attr("is-resize");
                let fileFormat = $(this).children("img").attr("img-type");
                if (fileFormat) {
                    fileFormat = "." + fileFormat;
                } else {
                    fileFormat = ".jpg";
                }
                let imageUrl = dataSrc + ".jpg";
                if (dataSrc) {
                    WebpIsSupported(function(isSupported) {
                        if (isSupported) {
                            let imageType = "";
                            if (isResize && RENDER_WIDTH && RENDER_WIDTH != '') {
                                imageType = "_" + RENDER_WIDTH;
                            }
                            let imageTypeResize = imageType + ".webp";
                            imageUrl = dataSrc + imageTypeResize;
                            $(that).children("img").attr("src", imageUrl);
                            $(that).css("background", 'url("' + imageUrl + '")').css("background-position", "initial").css("opacity", "1");
                        } else {
                            let imageType = "";
                            if (isResize && RENDER_WIDTH && RENDER_WIDTH != '') {
                                imageType = "_" + RENDER_WIDTH;
                            }
                            let imageTypeResize = imageType + fileFormat;
                            imageUrl = dataSrc + imageTypeResize;
                            $(that).children("img").attr("src", imageUrl);
                            $(that).css("background", 'url("' + imageUrl + '")').css("background-position", "initial").css("opacity", "1");
                        }
                    });
                }
            })
        }

        if ($('.nav-bar.nav--absolute').length > 0) {
            var stickyOffset = $('.nav-bar.nav--absolute').offset().top;
            $(window).scroll(function() {
                var sticky = $('.nav-bar.nav--absolute'),
                    scroll = $(window).scrollTop();
                if (scroll >= stickyOffset) sticky.addClass('fixed-menu');
                else sticky.removeClass('fixed-menu');
            });
        }
        var speed = 0;
        var autoswitch = true;
        var autoswitch_speed = 50000;

        function caseStudySlider(slider) {
            $("#" + slider + " .slide").first().addClass("active");
            $("#" + slider + " .slide").hide;
            $("#" + slider + " .slide.active").show();
            $('#next' + slider).click(function(e) {
                nextSlide(slider)
            });
            $('#prev' + slider).click(function(e) {
                prevSlide(slider)
            });
            if (autoswitch == true) {
                setInterval(function() {
                    nextSlide(slider);
                }, autoswitch_speed);
            }
        }

        function nextSlide(slider) {
            $("#" + slider + ' .slide.active').removeClass('active').addClass('oldActive');
            if ($("#" + slider + ' .slide.oldActive').is(':last-child')) {
                $("#" + slider + " .slide").first().addClass('active');
            } else {
                $("#" + slider + ' .slide.oldActive').next().addClass('active');
            }
            $("#" + slider + ' .slide.oldActive').removeClass('oldActive');
            $("#" + slider + " .slide").fadeOut(speed);
            $("#" + slider + ' .slide.active').fadeIn(speed);
        }

        function prevSlide(slider) {
            $("#" + slider + ' .slide.active').removeClass('active').addClass('oldActive');
            if ($("#" + slider + ' .slide.oldActive').is(':first-child')) {
                $("#" + slider + " .slide").last().addClass('active');
            } else {
                $("#" + slider + ' .slide.oldActive').prev().addClass('active');
            }
            $("#" + slider + ' .slide.oldActive').removeClass('oldActive');
            $("#" + slider + " .slide").fadeOut(speed);
            $("#" + slider + ' .slide.active').fadeIn(speed);
        }

        function validateForm(e) {
            var email = $(e).find('#email').val();
            if (email === "") {
                $(e).find('#email').addClass('error');
                return false;
            }
        }
    });
</script>

<script type="text/javascript">
    var myModalEl1 = document.getElementById('homepageVideoModal');
    myModalEl1.addEventListener('hide.bs.modal', function(event) {
        $(myModalEl1).find(".js-video-src").attr("src", "")
    });
    $('.home-slider-system').owlCarousel({
        loop: true,
        margin: 0,
        nav: true,
        items: 1,
        dots: true,
        animateOut: 'fadeOut'
    })
    const carouselText = [{
        text: "Software"
    }, {
        text: "Embedded"
    }, {
        text: "Hardware"
    }]
    $(document).ready(async function() {
        carousel(carouselText, "#feature-text")
    });
    async function typeSentence(sentence, eleRef, delay = 100) {
        const letters = sentence.split("");
        let i = 0;
        while (i < letters.length) {
            await waitForMs(delay);
            $(eleRef).append(letters[i]);
            i++
        }
        return;
    }
    async function deleteSentence(eleRef) {
        const sentence = $(eleRef).html();
        const letters = sentence.split("");
        let i = 0;
        while (letters.length > 0) {
            await waitForMs(100);
            letters.pop();
            $(eleRef).html(letters.join(""));
        }
    }
    async function carousel(carouselList, eleRef) {
        var i = 0;
        while (true) {
            updateFontColor(eleRef, carouselList[i].color)
            await typeSentence(carouselList[i].text, eleRef);
            await waitForMs(1500);
            await deleteSentence(eleRef);
            await waitForMs(500);
            i++
            if (i >= carouselList.length) {
                i = 0;
            }
        }
    }

    function updateFontColor(eleRef, color) {
        $(eleRef).css('color', color);
    }

    function waitForMs(ms) {
        return new Promise(resolve => setTimeout(resolve, ms))
    }
</script>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API = Tawk_API || {},
        Tawk_LoadStart = new Date();
    (function() {
        var s1 = document.createElement("script"),
            s0 = document.getElementsByTagName("script")[0];
        s1.async = true;
        s1.src = 'https://embed.tawk.to/666c2836981b6c56477d2988/1i0b7q68v';
        s1.charset = 'UTF-8';
        s1.setAttribute('crossorigin', '*');
        s0.parentNode.insertBefore(s1, s0);
    })();
</script>
<!--End of Tawk.to Script-->
</body>

</html>