$(function() {
    $(".close-btn-ppc").click(function() {
        $(".europe-trip").hide();
        $(".header-spacing.europe-ppc").removeClass("mt-0");
    });
    $('.banner-holder').each(function() {
        var bannerSRC = $(this).find('.banner-holder-img img').attr('src');
        $(this).css('background-image', 'url(' + bannerSRC + ')');
    });
    $('.real-estate .owl-carousel').owlCarousel({
        loop: false,
        center: true,
        margin: 30,
        nav: false,
        responsive: {
            0: {
                items: 1.5
            },
            600: {
                items: 3.5
            },
            1000: {
                items: 6.5
            }
        }
    })
    $('.case-study-full .owl-carousel').owlCarousel({
        nav: false,
        dots: true,
        autoHeight: false,
        autoplay: false,
        autoplayTimeout: 4000,
        margin: 20,
        responsive: {
            0: {
                items: 1
            },
            1197: {
                autoHeight: false,
                items: 1
            }
        }
    });
    $(".case-study-full .owl-carousel .owl-dots").wrap("<div class='container'></div>");
    $('a[href*="#"]:not(.insight-slider-wrapper a)').not('[href="#"]').not('[href="#0"]').click(function(event) {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                $('html, body').animate({
                    scrollTop: target.offset().top
                }, 1000, function() {
                    var $target = $(target);
                    $target.focus();
                    if ($target.is(':focus')) {
                        return false;
                    } else {
                        $target.attr('tabindex', '-1');
                        $target.focus();
                    }
                });
            }
        }
    });
    var slide = $('.custom-acc-tab ');
    slide.find('.accordian-text.active').slideDown();
    slide.click(function() {
        $(this).parent().parent().find('.accordian-text').slideUp();
        $(this).find('.accordian-text').slideToggle();
        equalheight('.small-heading');
    });
    $('.custom-acc-tab  .accordian-tab ').on('click', 'a', function() {
        $('.accordian-tab.active').removeClass('active');
        $(this).parent().addClass('active');
    });
    if (window.matchMedia('(max-width: 767px)').matches) {
        $(".footer-bt-left .panel-collapse").slideUp();
        $(".footer-bt-left .active").removeClass('active');
        $(".footer-bt-left .active .panel-heading").addClass("active")
        $(".footer-bt-left .panel-heading").on("click", function() {
            if ($(this).hasClass("active")) {
                $(this).removeClass("active");
                $(this).siblings(".panel-collapse").slideUp().delay(400);
            } else {
                $(".footer-bt-left .panel-heading").removeClass("active");
                $(this).addClass("active");
                $(".footer-bt-left .panel-collapse").slideUp().delay(400);
                $(this).siblings(".footer-bt-left .panel-collapse").slideDown().delay(400).css({
                    "height": "auto",
                    "max-height": "200px",
                    "overflow": "auto"
                });
            }
        });
        $(".remove-small-heading").find('.small-heading').removeClass("small-heading").css('height', 'auto');
    }
    $(".expertise-tab-container .nav-tabs li").click(function() {
        var indx = $(this).index();
        $(this).closest(".expertise-tab-container").find(".tab-content .tab-pane").removeClass("active").eq(indx).addClass("active");
        $(".expertise-tab-container ul > li").find(".nav-tab-head").removeClass("active").eq(indx).addClass("active");
    })
    if (window.matchMedia('(min-width: 767px)').matches) {
        $(".footer-bt-left .nav-tabs .nav-tab-head").on("click", function() {
            equalheight('.small-heading');
        });
    }
    $(function() {
        $(".faq-outer").find(".accordian-text").slideUp();
        $(".faq-outer").find(".accordian-text.active").slideDown();
        $(".faq-outer .faq-heading").on("click", function() {
            $(this).parent().siblings().removeClass('active').find(".accordion-item,.accordian-text").removeClass("active");
            $(this).parent().siblings().find(".accordian-text").slideUp();
            $(this).parent().find(".accordian-text").slideToggle();
            $(this).parent().find(".accordion-item,.accordian-text").toggleClass("active");
            $(this).parent(".accordion-item").toggleClass("active");
        });
    });
    if (window.matchMedia('(max-width: 991px)').matches) {
        $('.faq-left .btn-link').insertAfter('.faq-outer .accordian-outer');
    }
    if (window.matchMedia('(max-width: 767px)').matches) {
        $('.resp-btn').insertAfter('.resp-btn-outer');
        $('.resp-btn-two').insertAfter('.resp-btn-outer-two');
    }
    var owl = $('[data-sync]');
    $('.insight-slider-navigation .nav-link').click(function() {
        $(this).parent().addClass('active').siblings().removeClass('active');
        owl.trigger('to.owl.carousel', $(this).parent().index());
    });
    $('#insight-owl-carousel').owlCarousel({
        items: 1,
        nav: false,
        dots: true,
        autoHeight: false,
        responsive: {
            767: {
                nav: true,
                dots: false
            }
        },
        navText: ['<span class="long-arrow-hover"><span class="long-arrow-icon-css icon-item icon-left"></span></span>', '<span class="long-arrow-hover"><span class="long-arrow-icon-css icon-item"></span></span>']
    });
    $('[data-sync]').on('changed.owl.carousel', function(e) {
        $($(this).attr('data-sync')).find('.nav-item').removeClass('active').eq(e.item.index).addClass('active');
    });
    $(document).mouseup(function(e) {
        var container = $('.collapse-sidebar');
        if (!container.is(e.target) && container.has(e.target).length === 0) {
            container.removeClass('show');
        }
    });
    $('.autowidth-slider .owl-carousel').owlCarousel({
        margin: 30,
        loop: true,
        autoWidth: true,
        items: 4,
        autoplay: true,
        dots: false,
        nav: false,
        animateOut: 'fadeOut',
        autoplayTimeout: 3000,
        autoplayHoverPause: true
    });

    function countvh() {
        const vh = window.innerHeight * 0.01;
        document.documentElement.style.setProperty('--vh', `${vh}px`);
    }
    countvh();
    window.addEventListener('resize', countvh);
    $('.js-scroll-to-next-section').click(function(e) {
        e.preventDefault();
        $('html,body').animate({
            scrollTop: $($(this).attr('data-target')).offset().top - $('.header-main').outerHeight() * 0.82
        }, 500);
    });
    $(window).on('scroll', function() {
        var $this = $(this),
            $header = $('.header-main');
        if ($this.scrollTop() > $header.outerHeight() * 1.5) {
            $header.addClass('fixed').find('.header-navbar').removeClass('navbar-dark').addClass('navbar-light');
            $('header .submenu.show , header .nav-link.show').removeClass('show');
            $('.sidenav_menu.header_active ,.menu-icon-block.header_active').removeClass('header_active');
        } else {
            $header.removeClass('fixed').find('.header-navbar').addClass('navbar-dark').removeClass('navbar-light');
        }
        if ($this.scrollTop() > $header.outerHeight() * 1.5) {
            $header.find('.header-navbar.light').removeClass('navbar-dark').addClass('navbar-light');
            $('header .submenu.show , header .nav-link.show').removeClass('show');
            $('.sidenav_menu.header_active ,.menu-icon-block.header_active').removeClass('header_active');
        } else {
            $header.removeClass('fixed').find('.header-navbar.light').removeClass('navbar-dark');
        }
    });
    $('.menu-icon-block').click(function() {
        $('.menu-icon-block, .sidenav_menu,body').toggleClass('header_active');
    });
    $(function() {
        $(".sidenav_menu").find(".sub-side,.sub-side-two").slideUp();
        $(".sidenav_menu").find(".sub-side.active").slideDown();
        $(".sidenav_menu .res-submenu,.sidenav_menu .res-submenu").on("click", function() {
            $(this).parent().siblings().removeClass('active').find(".menu_parent,.sub-side,.res-submenu").removeClass("active");
            $(this).parent().siblings().find(".sub-side").slideUp();
            $(this).parent().find(".sub-side").slideToggle();
            $(this).parent().find(".menu_parent, .sub-side,.res-submenu").toggleClass("active");
            $(this).parent(".menu_parent").toggleClass("active");
        });
        $(".res-submenu-two").on("click", function() {
            $(this).parent().siblings().removeClass('active').find(".sub-side,.res-submenu-two").removeClass("active");
            $(this).parent().siblings().find(".sub-side-two").slideUp();
            $(this).parent().find(".sub-side-two").slideToggle();
            $(this).parent().find(".sub-side-two,.res-submenu-two").toggleClass("active");
            $(this).parent(".sub-side").toggleClass("active");
        });
    });
    var owl = $('[data-sync]');
    $('.insight-slider-navigation .nav-link').click(function() {
        $(this).parent().addClass('active').siblings().removeClass('active');
        owl.trigger('to.owl.carousel', $(this).parent().index());
    });
    $('#insight-owl-carousel').owlCarousel({
        items: 1,
        nav: true,
        dots: false,
        navText: ['<span class="long-arrow-hover"><span class="long-arrow-icon-css icon-item icon-left"></span></span>', '<span class="long-arrow-hover"><span class="long-arrow-icon-css icon-item"></span></span>']
    });
    $('[data-sync]').on('changed.owl.carousel', function(e) {
        $($(this).attr('data-sync')).find('.nav-item').removeClass('active').eq(e.item.index).addClass('active');
    });
    $('#contactfullForm, #emailFormbanner').click(function() {
        $('#contactfullForm .focus-class, #emailFormbanner .focus-class').removeClass('focus-class').css('outline', 'none');
    });
    $('#contactfullForm .focus-class, #emailFormbanner .focus-class').css('outline', '2px solid #958f8f');
    $('a[href="#form"]').on('click', function() {
        setTimeout(function() {
            $("#focus-id").focus()
        }, 1500);
        $('#contactfullForm .focus-class, #emailFormbanner .focus-class').css('outline', '2px solid #958f8f');
    });
    const doAdapt = () => {
        allItems.forEach((item) => {
            item.classList.remove('--hidden')
        })
        let stopWidth = moreBtn.offsetWidth
        let hiddenItems = []
        const primaryWidth = primary.offsetWidth
        primaryItems.forEach((item, i) => {
            if (primaryWidth >= stopWidth + item.offsetWidth) {
                stopWidth += item.offsetWidth
            } else {
                item.classList.add('--hidden')
                hiddenItems.push(i)
            }
        })
        if (!hiddenItems.length) {
            moreLi.classList.add('--hidden')
            container.classList.remove('--show-secondary')
            moreBtn.setAttribute('aria-expanded', false)
        } else {
            secondaryItems.forEach((item, i) => {
                if (!hiddenItems.includes(i)) {
                    item.classList.add('--hidden')
                }
            })
        }
    }
    doAdapt()
    window.addEventListener('resize', doAdapt)
    document.addEventListener('click', (e) => {
        let el = e.target
        while (el) {
            if (el === secondary || el === moreBtn) {
                return;
            }
            el = el.parentNode
        }
        container.classList.remove('--show-secondary')
        moreBtn.setAttribute('aria-expanded', false)
    })
});
document.addEventListener('DOMContentLoaded', function() {
    var lazyloadThrottleTimeout;

    function lazyload() {
        var lazyloadImages = document.querySelectorAll('img.lazy');
        if (lazyloadThrottleTimeout) {
            clearTimeout(lazyloadThrottleTimeout);
        }
        lazyloadThrottleTimeout = setTimeout(function() {
            $('.banner-holder-script').each(function() {
                var bannerSRC = jQuery(this).find('img').data('src');
                $(this).css('background-image', 'url(' + bannerSRC + ')');
            });
            var scrollTop = window.pageYOffset;
            lazyloadImages.forEach(function(img) {
                if (img.offsetTop < window.innerHeight + scrollTop) {
                    img.src = img.dataset.src;
                    img.classList.remove('lazy');
                }
            });
            if (lazyloadImages.length == 0) {
                document.removeEventListener('scroll', lazyload);
                window.removeEventListener('resize', lazyload);
                window.removeEventListener('orientationChange', lazyload);
            }
        }, 20);
    }
    document.addEventListener('scroll', lazyload);
    window.addEventListener('resize', lazyload);
    window.addEventListener('orientationChange', lazyload);
});
equalheight = function(container) {
    var currentTallest = 0,
        currentRowStart = 0,
        rowDivs = new Array(),
        $el, topPosition = 0;
    $(container).each(function() {
        $el = $(this);
        $($el).height('auto');
        topPostion = $el.position().top;
        if (currentRowStart != topPostion) {
            for (currentDiv = 0; currentDiv < rowDivs.length; currentDiv++) {
                rowDivs[currentDiv].height(currentTallest);
            }
            rowDivs.length = 0;
            currentRowStart = topPostion;
            currentTallest = $el.height();
            rowDivs.push($el);
        } else {
            rowDivs.push($el);
            currentTallest = currentTallest < $el.height() ? $el.height() : currentTallest;
        }
        for (currentDiv = 0; currentDiv < rowDivs.length; currentDiv++) {
            rowDivs[currentDiv].height(currentTallest);
        }
    });
};
equalheight('.small-heading');
equalheight('.small-heading-two');
equalheight('.small-heading-three');
equalheight('.small-heading-four');
$(window).on('load', function() {
    equalheight('.small-heading');
    equalheight('.small-heading-two');
    equalheight('.small-heading-three');
    equalheight('.small-heading-four');
});
$(window).on('resize', function() {
    equalheight('.small-heading');
    equalheight('.small-heading-two');
    equalheight('.small-heading-three');
    equalheight('.small-heading-four');
});
var myCarousel = document.querySelector('#about-us-carousel');
var carousel = new bootstrap.Carousel(myCarousel, {
    interval: 4500,
    wrap: true,
    pause: false
});
var myCarousel2 = document.querySelector('#about-us-carousel');

function sliderCounter() {
    var currentIndex = $('#about-us-carousel .carousel-item.active').index();
    $('.js-slider-current-item').text(currentIndex + 1);
    $('.js-slider-total-item').text($('#about-us-carousel .carousel-item').length);
}
sliderCounter();
myCarousel2.addEventListener('slide.bs.carousel', function() {
    var a = Number($('.js-slider-current-item').text()) + 1;
    if (a > $('#about-us-carousel .carousel-item').length) {
        a = 1;
    }
    $('.js-slider-current-item').text(a);
});
var myCarousel = document.querySelector('#about-us-carousel-two');
var carousel = new bootstrap.Carousel(myCarousel, {
    interval: 4500,
    wrap: true,
    pause: false
});
var myCarousel2 = document.querySelector('#about-us-carousel-two');

function sliderCounter() {
    var currentIndex = $('#about-us-carousel-two .carousel-item.active').index();
    $('.js-slider-current-item-two').text(currentIndex + 1);
    $('.js-slider-total-item-two').text($('#about-us-carousel-two .carousel-item').length);
}
sliderCounter();
myCarousel2.addEventListener('slide.bs.carousel', function() {
    var a = Number($('.js-slider-current-item-two').text()) + 1;
    if (a > $('#about-us-carousel-two .carousel-item').length) {
        a = 1;
    }
    $('.js-slider-current-item-two').text(a);
});