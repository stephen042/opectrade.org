jQuery(function($) {
    "use strict";

    var SLZ = window.SLZ || {};


    /*=======================================
    =            SAMPLE FUNCTION            =
    =======================================*/
    SLZ.drawChart = function() {
        var ct1 = $('#chart-md-01');
        

        var ct1Option = {
            scales: {
                xAxes: [{
                    type: "time",
                    time: {
                        unitStepSize: 14,
                        unit: "year",
                        tooltipFormat: 'Y'
                    },
                    gridLines: {
                        display: false
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

        var draw_ct_1 = new Chart(ct1, {
            type: 'line',
            data: {
                labels: [moment('1962-01'), moment('1966-01'), moment('1976-01'), moment('1986-01'), moment('1996-01'), moment('2006-01'), moment('2016-01')],
                datasets: [{
                    data: [0.87, 2.69, 3.32, 2.64, 2.68, 5.03, 4.45],
                    backgroundColor: 'rgba(0, 189, 201, .6)',
                    borderColor: '#00bdc9',
                    pointBackgroundColor: '#038e91',
                    pointBorderColor: '#038e91',
                    pointRadius: 3,
                    pointHitRadius: 5,
                    lineTension: 0.4,
                    borderWidth: 2,
                    pointStyle: 'triangle'
                }, {
                    data: [2.68, 3.31, 2.64, 5.04, 3.42, 10.08, 12.45],
                    backgroundColor: '#b7d08b',
                    borderColor: '#87b03d',
                    pointBackgroundColor: '#71881d',
                    pointBorderColor: '#71881d',
                    pointRadius: 3,
                    pointHitRadius: 5,
                    lineTension: 0.4,
                    borderWidth: 2
                }]
            },
            options: ct1Option
        });

    };

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

        $('.grid-project-5 .grid-item-project-5').directionalHover({
            speed: 200
        });

        $('.wrapper-gallery .pic').directionalHover({
            speed: 200
        });
    };

    SLZ.initIsotope = function() {
        var $grid = $('.grid-project-5');
        if ($(window).width() > 414) {
            $grid.isotope({
                itemSelector: '.grid-item-project-5',
                layoutMode: 'masonry',
                percentPosition: true,
                masonry: {
                    columnWidth: '.grid-sizer-project-5'
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
        if( $(".portfolio-project-5 .tab-content").length ){
            $(".portfolio-project-5 .tab-content .fancybox").fancybox({
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
        SLZ.drawChart();
    });

    /*=====  End of INIT FUNCTIONS  ======*/


});
