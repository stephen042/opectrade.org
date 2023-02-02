jQuery(function($) {
    "use strict";

    var SLZ = window.SLZ || {};


    /*=======================================
    =            SAMPLE FUNCTION            =
    =======================================*/
    SLZ.initSlick = function() {

        $(".content-gallery").slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            speed: 500,
            dots: true,
        });

        $(".wrapper-project-logo").slick({
            infinite: true,
            slidesToShow: 6,
            slidesToScroll: 1,
            speed: 1000,
            arrows: false,
            dots: false,
            autoplay: true,
            autoplaySpeed: 2000,
            responsive: [
            {
                breakpoint: 601,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 481,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            }]
        });
        
        $(".wrapper-team-accountant").slick({
            infinite: true,
            slidesToShow: 4,
            focusOnSelect: true,
            responsive: [
            {
                breakpoint: 769,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 481,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }]

        });

        $(".testimonial-slider").on('init', function() {
            $(".testimonial-slider ul.slick-dots li button").each(function() {
                if (parseInt($(this).text()) < 10) {
                    $(this).html("0" + $(this).html());
                }
            });
        });
        $(".testimonial-slider").slick({
            arrows: false,
            dots: true,
            infinite: false,
            fade: true,
            adaptiveHeight: true
        });

        $('.grid-accountant .content-grid-accountant').directionalHover({
            speed: 200
        });

        // $('.wrapper-gallery .pic').directionalHover({
        //     speed: 200
        // });
    };

    SLZ.countTo = function() {
        $('section.stats .count').text('0');
        setTimeout(function() {
            $('section.stats .count').appear(function() {
                var data_value = $(this).attr('data-value');
                $(this).countTo({
                    to: data_value,
                    speed: 3000,
                    refreshInterval: 100
                });
            });
        }, 1000);
    };

    SLZ.initIsotope = function() {
        var $grid = $('.grid-accountant');
        if ($(window).width() > 414) {
            $grid.isotope({
                itemSelector: '.content-grid-accountant',
                layoutMode: 'masonry',
                percentPosition: true,
                masonry: {
                    columnWidth: '.item-width-1'
                }

            });
        }

        $('section.portfolio ul.nav-tabs').on('click', 'li > a', function() {
            var filterValue = $(this).attr('data-filter');
            $grid.isotope({
                filter: filterValue
                // sortAscending: false
            });
        });

        // show gallery
        // $(".fancybox").fancybox({
        //     prevEffect  : 'none',
        //     nextEffect  : 'none',
        //     helpers : {
        //         title   : {
        //             type: 'outside'
        //         },
        //         thumbs  : {
        //             width   : 60,
        //             height  : 60
        //         }
        //     }
        // });
        if( $(".portfolio-accountant .tab-content").length ){
            $(".portfolio-accountant .tab-content .fancybox").fancybox({
                prevEffect  : 'none',
                nextEffect  : 'none',
                helpers : {
                    title   : {
                        type: 'outside'
                    },
                    thumbs  : {
                        width   : 60,
                        height  : 60
                    }
                }
            });
            $.fancybox.helpers.thumbs.onUpdate = function( opts, obj ){
                if (this.list) {
                    var center = Math.floor($(window).width() * 0.5 - (obj.group.length / 2 * this.width + this.width * 0.5));
                    this.list.css('left', center);
                }
            };
        }
    };

    // SLZ.dHover = function() {
    //     $('.content-grid-accountant').directionalHover({
    //         speed: 200
    //     });
    // };
    /*=====  End of SAMPLE FUNCTION  ======*/

    /*======================================
    =            INIT FUNCTIONS            =
    ======================================*/

    $(document).ready(function() {
        SLZ.initSlick();
        SLZ.countTo();
        SLZ.initIsotope();
    });

    $(window).on("load", function() {
    });

    /*=====  End of INIT FUNCTIONS  ======*/


});
