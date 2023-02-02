jQuery(function($) {
    "use strict";

    var SLZ = window.SLZ || {};

    SLZ.initSlick = function() {
        $("section.achievement .banner-main-right").slick({
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
        $(".team-slider").slick({
            infinite: true,
            slidesToShow: 3,
            centerMode: true,
            centerPadding: '0px',
            focusOnSelect: true,
            responsive: [{
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
    };

    SLZ.countTo = function() {
        $('.stats-03 .count').text('0');
        setTimeout(function() {
            $('.stats-03 .count').appear(function() {
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
        var g = $('.grid').isotope({
            layoutMode: 'packery',
            itemSelector: '.grid-item',
            percentPosition: true,
            packery: {
                columnWidth: '.grid-sizer'
            },
            // getSortData: {
            //     size: '[data-size]'
            // }
        });

        $('section.portfolio ul.nav-tabs').on('click', 'li > a:not(.default)', function() {
            var filterValue = $(this).attr('data-filter');
            g.isotope({
                filter: filterValue,
                sortBy: 'random',
                // sortAscending: false
            });
        });

        $('section.portfolio ul.nav-tabs > li > a.default').on('click', function() {
            var filterValue = $(this).attr('data-filter');
            g.isotope({
                filter: filterValue,
                sortBy: 'original-order',
                // sortAscending: true
            });
        });

        // show gallery
        if( $(".portfolio-01 .tab-content").length ){
            $(".portfolio-01 .tab-content .fancybox").fancybox({
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

    SLZ.drawChart = function() {
        var ct6 = $('#chart-md-06');

        var ct6Option = {
            scales: {
                xAxes: [{
                    gridLines: {
                        drawOnChartArea: false
                    }
                }]
            },
            maintainAspectRatio: false,
            legend: {
                display: false
            },
            tooltips: {
                backgroundColor: '#0033cc',
                callbacks: {
                    label: function(item) {
                        var r = item.yLabel;
                        return r;
                    }
                }
            }
        };
        var draw_ct_6 = new Chart(ct6, {
            type: 'bar',
            data: {
                rotation: [180],
                labels: ['Stock', 'Bound', 'Gold', 'Real Estate', 'Fund'],
                datasets: [{
                    data: [25.14, 13.38, 20.45, 25.82, 16.68],
                    backgroundColor: '#4ba1c4',
                    borderColor: '#4ba1c4'
                }, {
                    data: [28.2, 18.22, 12.40, 13.43, 17.88],
                    backgroundColor: '#00739a',
                    borderColor: '#00739a'
                }, {
                    data: [19.14, 8.38, 16.45, 13.82, 18.68],
                    backgroundColor: '#95b70a',
                    borderColor: '#95b70a'
                }]
            },
            options: ct6Option
        });
    };

     /*======================================
    =            INIT FUNCTIONS            =
    ======================================*/

    $(document).ready(function() {
        SLZ.initSlick();
        SLZ.countTo();
        SLZ.dHover();
        SLZ.drawChart();
    });

    $(window).on("load", function() {
        SLZ.initIsotope();
    });

    /*=====  End of INIT FUNCTIONS  ======*/
});