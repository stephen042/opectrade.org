jQuery(function($) {
    "use strict";

    var SLZ = window.SLZ || {};


    /*=======================================
    =            SAMPLE FUNCTION            =
    =======================================*/

    SLZ.mainFunction = function() {
        $(".content-gallery").slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            speed: 500,
            dots: true,
        });
        $('.accordion .panel .panel-heading').on('click', function() {
            var accor = $(this).closest('.accordion');
            var accor_panel = $(this).parent();
            if (accor_panel.hasClass('active')) {
                accor_panel.removeClass('active');
            } else {
                if ($('.panel-title a.accordion-toggle').hasClass('collapsed')) {
                    $('.panel', accor).removeClass('active');
                    accor_panel.addClass('active');
                } else {
                    accor_panel.removeClass('active');
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
        
    };

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

        $(".team-slider").slick({
            infinite: true,
            slidesToShow: 3,
            centerMode: true,
            centerPadding: '0px',
            focusOnSelect: true,
            responsive: [
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

        //$(".page-banner").css("max-width", $(window).width());
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

        $('.portfolio ul.nav-tabs').on('click', 'li > a:not(.default)', function() {
            var filterValue = $(this).attr('data-filter');
            g.isotope({
                filter: filterValue,
                sortBy: 'random',
                // sortAscending: false
            });
        });

        $('.portfolio ul.nav-tabs > li > a.default').on('click', function() {
            var filterValue = $(this).attr('data-filter');
            g.isotope({
                filter: filterValue,
                sortBy: 'original-order',
                // sortAscending: true
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
        if( $(".work-startup .tab-content").length ){
            $(".work-startup .tab-content .fancybox").fancybox({
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

    SLZ.drawChart = function() {
        var ct2 = $('#chart-md-02');

        var ct2Option = {
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

        var draw_ct_2 = new Chart(ct2, {
            type: 'bar',
            data: {
                labels: ['Stock', 'Bound', 'Gold', 'Real Estate', 'Fund'],
                datasets: [{
                    type: 'line',
                    data: [2.74, 2.30, 2.73, 6.18, 2.89],
                    backgroundColor: 'transparent',
                    borderColor: '#87b03d',
                    pointBackgroundColor: '#fff',
                    pointBorderWidth: 2,
                    pointRadius: 4,
                    pointHitRadius: 5,
                    lineTension: 0.4,
                    borderWidth: 2
                }, {
                    data: [2.77, 1.89, 0.72, 2.64, 3.22],
                    backgroundColor: '#00a4b8',
                    borderColor: '#00a4b8'
                }, {
                    data: [2.28, 2.69, 5.00, 7.43, 5.88],
                    backgroundColor: '#00739a',
                    borderColor: '#00739a'
                }, {
                    data: [3.34, 2.58, 2.60, 8.32, 10.00],
                    backgroundColor: '#95b70a',
                    borderColor: '#95b70a'
                }]
            },
            options: ct2Option
        });
    };

    /*=====  End of SAMPLE FUNCTION  ======*/




    /*======================================
    =            INIT FUNCTIONS            =
    ======================================*/

    $(document).ready(function() {
        SLZ.mainFunction();
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
