(function ($) {
    "use strict";

    $(".banner-carousel").owlCarousel({
        autoplay: true,
        dots: true,
        items: 1,
        smartSpeed: 1000,
        loop: true,
        nav: false,
        autoplayTimeout: 10000,
        autoplayHoverPause: true,
        navText: [
            '<i class="fa fa-angle-left bg-purple-light" aria-hidden="true"></i>',
            '<i class="fa fa-angle-right bg-purple-light" aria-hidden="true"></i>'
        ],
        responsive: {
            0: {
                items: 1
            },
            576: {
                items: 1
            },
            768: {
                items: 1
            }
        }
    });

    //Venobox

    new VenoBox({
        selector: '.venobox',
        numeration: true,
        infinigall: true,
        share: ['facebook', 'twitter', 'linkedin', 'pinterest', 'download'],
        spinner: 'circle-fade'
    });


    $(".news").bootstrapNews({
        newsPerPage: 5,
        autoplay: true,
        pauseOnHover: true,
        direction: 'up',
        newsTickerInterval: 4000,
        onToDo: function () {
            //console.log(this);
        }
    });

})(jQuery);


document.addEventListener("DOMContentLoaded", function () {
    if (window.innerWidth > 992) {
        document.querySelectorAll('.navbar .nav-item').forEach(function (everyitem) {
            everyitem.addEventListener('mouseover', function (e) {
                let el_link = this.querySelector('a[data-bs-toggle]');
                if (el_link != null) {
                    let nextEl = el_link.nextElementSibling;
                    el_link.classList.add('show');
                    nextEl.classList.add('show');
                }
            });
            everyitem.addEventListener('mouseleave', function (e) {
                let el_link = this.querySelector('a[data-bs-toggle]');

                if (el_link != null) {
                    let nextEl = el_link.nextElementSibling;
                    el_link.classList.remove('show');
                    nextEl.classList.remove('show');
                }
            })
        });
    }
});
// Back to Top
$(document).ready(function () {
    $(window).scroll(function () {
        if ($(window).scrollTop() > 300) {
            $('#btnScrollToTop').css({
                "opacity": "1",
                "pointer-events": "auto",
            });
        } else {
            $('#btnScrollToTop').css({
                "opacity": "0",
                "pointer-events": "none",
            });
        }
    });
    $('#btnScrollToTop').click(function () {
        $('html').animate({scrollTop: 0}, 500);
    });
});
