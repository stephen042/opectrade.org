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
        });

        $('section.portfolio ul.nav-tabs').on('click', 'li > a', function() {
            var filterValue = $(this).attr('data-filter');
            g.isotope({
                filter: filterValue
            });
        });

        // show gallery
        if( $(".portfolio-02 .tab-content").length ){
            $(".portfolio-02 .tab-content .fancybox").fancybox({
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
        SLZ.mainFunction();
    });

    $(window).on("load", function() {
        SLZ.initIsotope();
        
    });

    /*=====  End of INIT FUNCTIONS  ======*/


});
