jQuery(function($) {
    "use strict";

    var SLZ = window.SLZ || {};

    SLZ.bannerSlider = function() {
        $('.page-slider-home-1').slick({
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            speed: 1500,
            arrows: true,
            dots: false,
            autoplay: true,
            autoplaySpeed: 5000,
            useTransform: false,
            pauseOnHover: false,
            pauseOnFocus: false,
            draggable: false,
            fade: true
        });
    };

    /*=====  End of SAMPLE FUNCTION  ======*/


    /*======================================
    =            INIT FUNCTIONS            =
    ======================================*/

    $(document).ready(function() {
        SLZ.bannerSlider();
    });

    /*=====  End of INIT FUNCTIONS  ======*/


});
