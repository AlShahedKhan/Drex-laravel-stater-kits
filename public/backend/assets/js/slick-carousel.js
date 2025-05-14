"use strict";

$(document).ready(function () {
    //single item slick
    function isRTLActive() {
        if ($("body").hasClass("rtl")) {
            return true;
        }
        return false;
    }

    $(".single-item").slick({
        rtl: isRTLActive() ?? false,
    });

    //Multiple items slick
    $(".multiple-items").slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 3,
        rtl: isRTLActive() ?? false,
    });

    $(".responsive-slick").slick({
        dots: true,
        infinite: false,
        speed: 300,
        slidesToShow: 4,
        slidesToScroll: 4,
        rtl: isRTLActive() ?? false,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: true,
                },
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                },
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                },
            },
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ],
    });

    //center mode slick
    $(".center-mode").slick({
        centerMode: true,
        centerPadding: "60px",
        slidesToShow: 3,
        rtl: isRTLActive() ?? false,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: "40px",
                    slidesToShow: 3,
                },
            },
            {
                breakpoint: 480,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: "40px",
                    slidesToShow: 1,
                },
            },
        ],
    });

    // with lazy loader

    $(".with-lazy-load").slick({
        lazyLoad: "ondemand",
        slidesToShow: 3,
        slidesToScroll: 1,
        rtl: isRTLActive() ?? false,
    });

    // fade effect

    $(".fade-effect").slick({
        dots: true,
        infinite: true,
        speed: 500,
        fade: true,
        cssEase: "linear",
        rtl: isRTLActive() ?? false,
    });

    // slider syncing

    $(".slider-syncing").slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        asNavFor: ".slider-nav",
        rtl: isRTLActive() ?? false,
    });
    $(".slider-nav").slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        asNavFor: ".slider-syncing",
        dots: true,
        centerMode: true,
        focusOnSelect: true,
        rtl: isRTLActive() ?? false,
    });
});
