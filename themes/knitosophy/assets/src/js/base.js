//Run Functions Theme
import $ from "jquery";
window.$ = window.jQuery = $;
import "slick-carousel";
import "slick-carousel/slick/slick.css";
import "slick-carousel/slick/slick-theme.css";

(function ($) {
    // Slick
    $(".slickhero").slick({
        arrows: false,
        infinite: true,
        slidesToShow: 1,
        dots: false,
        slidesToScroll: 1,
        mobileFirst: true,
        autoplaySpeed: 3000,
        autoplay: false,
        speed: 500,
        fade: true,
    });

    $(".newCollection__products__slide").slick({
        arrows: false,
        infinite: true,
        slidesToShow: 3,
        dots: false,
        slidesToScroll: 1,
        mobileFirst: true,
        autoplaySpeed: 3000,
        autoplay: false,
        speed: 500,

        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                },
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                },
            },
            {
                breakpoint: 0,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    fade: true,
                },
            },
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ],
    });

    $(".testimonials__slide").slick({
        arrows: false,
        infinite: true,
        slidesToShow: 1,
        dots: true,
        slidesToScroll: 1,
        mobileFirst: true,
        autoplaySpeed: 3000,
        autoplay: false,
        speed: 500,
    });

    jQuery(".JS-slick-nextSlider").on("click", () => {
        jQuery(".slickhero").slick("slickPrev");
    });

    jQuery(".JS-slick-prevSlider").on("click", () => {
        jQuery(".slickhero").slick("slickNext");
    });

    jQuery(".newCollectionNextSlider").on("click", () => {
        jQuery(".newCollection__products__slide").slick("slickPrev");
    });

    jQuery(".newCollectionPrevSlider").on("click", () => {
        jQuery(".newCollection__products__slide").slick("slickNext");
    });
})(jQuery);
