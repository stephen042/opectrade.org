jQuery(function($) {
    "use strict";

    var SLZ = window.SLZ || {};


    /*=======================================
    =            SAMPLE FUNCTION            =
    =======================================*/

    SLZ.mainFunction = function() {
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

        $(".testimonial-slider").slick({
            arrows: false,
            dots: true,
            infinite: false,
            fade: true,
            adaptiveHeight: true
        });

        $('.grid .grid-item').directionalHover({
            speed: 200
        });

        $('.wrapper-gallery .pic').directionalHover({
            speed: 200
        });
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
        if( $(".portfolio .tab-content").length ){
            $(".portfolio .tab-content .fancybox").fancybox({
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

    // SLZ.initIsotope2 = function() {
    //     var g = $('.grid.grid-02').isotope({
    //         layoutMode: 'packery',
    //         itemSelector: '.grid-item',
    //         percentPosition: true,
    //         packery: {
    //             gutter: 10
    //         },
    //         getSortData: {
    //             size: '[data-size]'
    //         }
    //     });

    //     $('section.portfolio.portfolio-02 ul.nav-tabs').on('click', 'li > a', function() {
    //         var filterValue = $(this).attr('data-filter');
    //         g.isotope({
    //             filter: filterValue
    //             // sortAscending: false
    //         });
    //     });

    //     // show gallery
    //     $(".fancybox").fancybox({
    //         prevEffect  : 'none',
    //         nextEffect  : 'none',
    //         helpers : {
    //             title   : {
    //                 type: 'outside'
    //             },
    //             thumbs  : {
    //                 width   : 60,
    //                 height  : 60
    //             }
    //         }
    //     });
    // };

    /*=====  End of SAMPLE FUNCTION  ======*/




    /*======================================
    =            INIT FUNCTIONS            =
    ======================================*/

    $(document).ready(function() {
        SLZ.mainFunction();
    });

    $(window).on("load", function() {
        SLZ.initIsotope();
        // SLZ.initIsotope2();
        
    });

    /*=====  End of INIT FUNCTIONS  ======*/


});
