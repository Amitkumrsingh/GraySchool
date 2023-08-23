 ! function(e) {
    "use strict";

    function a() {
        if (e(".main-header").length) {
            var a = e(window).scrollTop(),
                t = e(".main-header"),
                n = e(".main-header").height(),
                o = e(".scroll-to-top");
            a >= n ? (t.addClass("fixed-header"), o.fadeIn(300)) : (t.removeClass("fixed-header"), o.fadeOut(300))
        }
    }

    function t() {
        if (e(".bottom-parallax").length) {
            var a = e(window).scrollTop(),
                t = e(".main-footer").height();
            a >= e(".page-wrapper").height() - t - 800 ? e("body").addClass("parallax-visible") : e("body").removeClass("parallax-visible")
        }
    }(a(), t(), e(".main-header .main-menu li.dropdown ul").length && (e(".main-header .main-menu li.dropdown").append('<div class="dropdown-btn"><span class="fa fa-angle-down"></span></div>'), e(".main-header .main-menu li.dropdown .dropdown-btn").on("click", function() {
        e(this).prev("ul").slideToggle(500)
    }), e(".main-header .main-menu .navigation li.dropdown > a,.hidden-bar .side-menu li.dropdown > a").on("click", function(e) {
        e.preventDefault()
    })), e(".dial").length && e(".dial").appear(function() {
        var a = e(this),
            t = (a.attr("data-fgColor"), a.attr("value"));
        a.knob({
            value: 0,
            min: 0,
            max: 100,
            skin: "tron",
            readOnly: !0,
            thickness: .2,
            dynamicDraw: !0,
            displayInput: !1
        }), e({
            value: 0
        }).animate({
            value: t
        }, {
            duration: 2e3,
            easing: "swing",
            progress: function() {
                a.val(Math.ceil(this.value)).trigger("change")
            }
        }), e(this).append(function() {})
    }, {
        accY: 20
    }), e(".time-countdown").length && e(".time-countdown").each(function() {
        var a = e(this),
            t = e(this).data("countdown");
        a.countdown(t, function(a) {
            e(this).html(a.strftime('<div class="counter-column"><span class="count">%D</span>Days</div> <div class="counter-column"><span class="count">%H</span>Hours</div>  <div class="counter-column"><span class="count">%M</span>Mins</div>  <div class="counter-column"><span class="count">%S</span>Secs</div>'))
        })
    }), e(".count-box").length && e(".count-box").appear(function() {
        var a = e(this),
            t = a.find(".count-text").attr("data-stop"),
            n = parseInt(a.find(".count-text").attr("data-speed"), 10);
        a.hasClass("counted") || (a.addClass("counted"), e({
            countNum: a.find(".count-text").text()
        }).animate({
            countNum: t
        }, {
            duration: n,
            easing: "linear",
            step: function() {
                a.find(".count-text").text(Math.floor(this.countNum))
            },
            complete: function() {
                a.find(".count-text").text(this.countNum)
            }
        }))
    }, {
        accY: 0
    }), e('[data-toggle="tooltip"]').length && e('[data-toggle="tooltip"]').tooltip(), e(".single-verticle-carousel").length && e(".single-verticle-carousel").slick({
        dots: !1,
        autoplay: !0,
        loop: !0,
        autoplaySpeed: 5e3,
        infinite: !0,
        responsive: !0,
        slidesToShow: 1,
        vertical: !0,
        slidesToScroll: 1
    }), e(".three-item-carousel").length && e(".three-item-carousel").owlCarousel({
        loop: !1,
        margin: 30,
        nav: !0,
        smartSpeed: 700,
        autoplay: 5e3,
        navText: ['<span class="fa fa-angle-left"></span>', '<span class="fa fa-angle-right"></span>'],
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            780: {
                items: 2
            },
            800: {
                items: 2
            },
            1024: {
                items: 3
            },
            1200: {
                items: 3
            }
        }
    }), e(".accordion-box").length && e(".accordion-box").on("click", ".acc-btn", function() {
        var a = e(this).parents(".accordion-box"),
            t = e(this).parents(".accordion");
        if (!0 !== e(this).hasClass("active") && e(a).find(".accordion .acc-btn").removeClass("active"), e(this).next(".acc-content").is(":visible")) return !1;
        e(this).addClass("active"), e(a).children(".accordion").removeClass("active-block"), e(a).find(".accordion").children(".acc-content").slideUp(300), t.addClass("active-block"), e(this).next(".acc-content").slideDown(300)
    }),  e(".testimonial-carousel").length && e(".testimonial-carousel").owlCarousel({
        loop: !0,
        margin: 2,
        nav: !0,
        smartSpeed: 500,
        autoplay: 5e3,
        navText: ['<span class="fa fa-angle-left"></span>', '<span class="fa fa-angle-right"></span>'],
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            800: {
                items: 1
            },
            1024: {
                items: 1
            },
            1200: {
                items: 1
            }
        }
    }), e(".lightbox-image").length && e(".lightbox-image").fancybox({
        openEffect: "fade",
        closeEffect: "fade",
        helpers: {
            media: {}
        }
    }), e("#contact-form").length && e("#contact-form").validate({
        rules: {
            username: {
                required: !0
            },
            email: {
                required: !0,
                email: !0
            },
            subject: {
                required: !0
            },
            message: {
                required: !0
            }
        }
    }), e(".filter-list").length && e(".filter-list").mixItUp({}), e(".scroll-to-target").length && e(".scroll-to-target").on("click", function() {
        var a = e(this).attr("data-target");
        e("html, body").animate({
            scrollTop: e(a).offset().top
        }, 1500)
    }), e(".wow").length) && new WOW({
        boxClass: "wow",
        animateClass: "animated",
        offset: 0,
        mobile: !1,
        live: !0
    }).init();
    e(window).on("scroll", function() {
        a(), t()
    }), e(window).on("load", function() {
        e(".preloader").length && e(".preloader").delay(200).fadeOut(500)
    })
}(window.jQuery);