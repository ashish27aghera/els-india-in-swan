(function ($) {
    'use strict';

    var $window = $(window);

    // :: Preloader Active Code
    $window.on('load', function () {
        $('#preloader').fadeOut('slow', function () {
            $(this).remove();
        });
    });

    // :: Fullscreen Active Code
    $window.on('resizeEnd', function () {
        $(".window-height").height($window.height());
    });

    $window.on('resize', function () {
        if (this.resizeTO) clearTimeout(this.resizeTO);
        this.resizeTO = setTimeout(function () {
            $(this).trigger('resizeEnd');
        }, 0);
    }).trigger("resize");

    // :: Marquee Active Code
    $('#closeMarquee').on('click', function () {
        $('#currMarque').fadeOut()
        $('footer').addClass('footer-marquee-close');
    })

    $('#currMarque').SimpleMarquee({
        duration: 50000,
        padding: 0,
        marquee_class: '.marquee',
        container_class: '.currency-marquee-area',
        sibling_class: 0,
        hover: true
    });

    // :: Welcome Slides Active Code
    if ($.fn.owlCarousel) {

        var welcomeSlider = $('.welcome_slides');

        welcomeSlider.owlCarousel({
            items: 1,
            margin: 0,
            loop: true,
            autoplay: true,
            smartSpeed: 1500,
            nav: true,
            navText: ["<i class='pe-7s-angle-left'</i>", "<i class='pe-7s-angle-right'</i>"],
            dots: true
        })

        welcomeSlider.on('translate.owl.carousel', function () {
            var layer = $("[data-animation]");
            layer.each(function () {
                var anim_name = $(this).data('animation');
                $(this).removeClass('animated ' + anim_name).css('opacity', '0');
            });
        });

        $("[data-delay]").each(function () {
            var anim_del = $(this).data('delay');
            $(this).css('animation-delay', anim_del);
        });

        $("[data-duration]").each(function () {
            var anim_dur = $(this).data('duration');
            $(this).css('animation-duration', anim_dur);
        });

        welcomeSlider.on('translated.owl.carousel', function () {
            var layer = welcomeSlider.find('.owl-item.active').find("[data-animation]");
            layer.each(function () {
                var anim_name = $(this).data('animation');
                $(this).addClass('animated ' + anim_name).css('opacity', '1');
            });
        });

        $(".team-carousel").owlCarousel({
            items: 3,
            loop: true,
            autoplay: true,
            smartSpeed: 800,
            margin: 50,
            center: true,
            nav: true,
            navText: ["<i class='fa fa-angle-left'</i>", "<i class='fa fa-angle-right'</i>"],
            responsive: {
                320: {
                    items: 1
                },
                576: {
                    items: 2
                },
                768: {
                    items: 3
                }
            }
        })

        $(".clients-logo-slider").owlCarousel({
            items: 5,
            loop: true,
            autoplay: true,
            smartSpeed: 300,
            margin: 30,
            center: true,
            dots: true,
            responsive: {
                0: {
                    items: 1
                },
                480: {
                    items: 2
                },
                576: {
                    items: 3
                },
                768: {
                    items: 4
                },
                992: {
                    items: 5
                }
            }
        });

        $(".latest-news-carousel").owlCarousel({
            items: 3,
            loop: true,
            autoplay: true,
            smartSpeed: 800,
            margin: 10,
            responsive: {
                320: {
                    items: 1
                },
                768: {
                    items: 2
                },
                992: {
                    items: 3
                }
            }
        })
    }

    // :: Hover Effects Active Code
    var hoverEffects = $('.why_choose_single_content');

    hoverEffects.on('mouseenter', function () {
        hoverEffects.removeClass('active');
        $(this).addClass('active');
    });

    // :: Sticky Menu Active Code

    $("#coreNav").sticky({
        topSpacing: 0
    });

    // nicescroll Active Code
    if ($.fn.niceScroll) {
        $("textarea").niceScroll({
            cursorcolor: "#111111",
            cursorwidth: "4px",
            background: "transparent",
            cursorborder: "none",
            cursorborderradius: 0
        });
    }

    // :: ScrollUp Active Code
    if ($.fn.scrollUp) {
        $.scrollUp({
            scrollSpeed: 1500,
            scrollText: '<i class="fa fa-angle-up" aria-hidden="true"></i>'
        });
    }

    // :: CounterUp Active Code
    if ($.fn.counterUp) {
        $('.counter').counterUp({
            delay: 12,
            time: 3000
        });
    }

    // matchHeight Active Code
    if ($.fn.matchHeight) {
        $('.equalHeight').matchHeight();
    }

    // :: Magnific-popup Video Active Code
    if ($.fn.magnificPopup) {
        $('.video_btn').magnificPopup({
            disableOn: 0,
            type: 'iframe',
            mainClass: 'mfp-fade',
            removalDelay: 160,
            preloader: true,
            fixedContentPos: false
        });
        $('.gallery_img').magnificPopup({
            type: 'image',
            gallery: {
                enabled: true
            },
            removalDelay: 300,
            mainClass: 'mfp-fade',
            preloader: true
        });
    }

    // :: Jarallax Active Code
    if ($.fn.jarallax) {
        $('.jarallax').jarallax({
            speed: 0.2
        });
    }

    // :: WOW Active Code
    new WOW().init();

})(jQuery);

$(document).ready(function() {
    var href = window.location.href;
    $('.navbar-nav li a').each(function(e, i) {
        $(this).removeClass("active");
        if (href.indexOf($(this).attr('href')) >= 0) {
            $('li.active').removeClass("active");
            $(this).parent('li').addClass("active");
        }
    });
});