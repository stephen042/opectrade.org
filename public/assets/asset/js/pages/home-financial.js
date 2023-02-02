jQuery(function($) {
    "use strict";

    var SLZ = window.SLZ || {};


    /*=======================================
    =            SAMPLE FUNCTION            =
    =======================================*/
    SLZ.initSlick = function() {
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

        $("section.achievement-dark .banner-main-right").slick({
            infinite: true,
            slidesToShow: 5,
            slidesToScroll: 1,
            speed: 1000,
            arrows: false,
            dots: false,
            autoplay: true,
            autoplaySpeed: 2000,
            responsive: [
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 4,
                }
            }, 
            {
                breakpoint: 769,
                settings: {
                    slidesToShow: 3,
                }
            }, 
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 5,
                }
            }, 
            {
                breakpoint: 601,
                settings: {
                    slidesToShow: 4,
                }
            }, 
            {
                breakpoint: 481,
                settings: {
                    slidesToShow: 4,
                }
            }, 
            {
                breakpoint: 415,
                settings: {
                    slidesToShow: 3,
                }
            }, 
            {
                breakpoint: 321,
                settings: {
                    slidesToShow: 2,
                }
            }]
        });

        $(".content-gallery").slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            speed: 500,
            dots: true,
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

    };


    SLZ.countTo = function() {
        $('.stats-02 .count').text('0');
        setTimeout(function() {
            $('.stats-02 .count').appear(function() {
                var data_value = $(this).attr('data-value');
                $(this).countTo({
                    to: data_value,
                    speed: 3000,
                    refreshInterval: 100
                });
            });
        }, 1000);
    };

    SLZ.mapFunction = function() {
        $('#map').vectorMap({
            map: 'us_aea',
            backgroundColor: 'transparent',
            regionStyle: {
                initial: {
                    fill: '#d5d5d5',
                    "fill-opacity": 1,
                    stroke: 'none',
                    "stroke-width": 0,
                    "stroke-opacity": 1
                },
                hover: {
                    "fill-opacity": 1,
                    cursor: 'pointer',
                    fill: '#1b6f9b',
                }
            }
        });

        if($("#player2").length > 0){
            $("#player2").mediaelementplayer({
                audioWidth: '100%',
                audioHeight: 50
            });
        }
        if($("#player3").length > 0){
            $("#player3").mediaelementplayer({
                audioWidth: '100%',
                audioHeight: 50
            });
        }
    };

    SLZ.initIsotope = function() {
        var g = $('.grid').isotope({
            layoutMode: 'masonry',
            itemSelector: '.grid-item',
            percentPosition: true,
            masonry: {
                columnWidth: '.grid-sizer',
            }
            // getSortData: {
            //     size: '[data-size]'
            // }
        });

        $('section.portfolio ul.nav-tabs').on('click', 'li > a', function() {
            var filterValue = $(this).attr('data-filter');
            g.isotope({
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
        if( $(".portfolio-financial .tab-content").length ){
            $(".portfolio-financial .tab-content .fancybox").fancybox({
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

    SLZ.dHover = function() {
        $('.grid .grid-item').directionalHover({
            speed: 200
        });
    };
    /*=====  End of SAMPLE FUNCTION  ======*/

    /*======================================
    =            INIT FUNCTIONS            =
    ======================================*/

    $(document).ready(function() {
        SLZ.initSlick();
        SLZ.countTo();
        SLZ.mapFunction();
        SLZ.dHover();
    });

    $(window).on("load", function() {
        SLZ.initIsotope();
    });

    /*=====  End of INIT FUNCTIONS  ======*/


});
