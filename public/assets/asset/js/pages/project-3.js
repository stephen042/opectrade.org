jQuery(function($) {
    "use strict";

    var SLZ = window.SLZ || {};


    /*=======================================
    =            SAMPLE FUNCTION            =
    =======================================*/

    SLZ.initSlick = function() {
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

        $('.grid-accountant .content-grid-accountant').directionalHover({
            speed: 200
        });

        $('.wrapper-gallery .pic').directionalHover({
            speed: 200
        });
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
        if( $(".portfolio-project-3 .tab-content").length ){
            $(".portfolio-project-3 .tab-content .fancybox").fancybox({
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
    /*=====  End of SAMPLE FUNCTION  ======*/

    /*======================================
    =            INIT FUNCTIONS            =
    ======================================*/

    $(document).ready(function() {
        SLZ.initSlick();
        
    });

    $(window).on("load", function() {
        SLZ.initIsotope();
    });

    /*=====  End of INIT FUNCTIONS  ======*/


});
