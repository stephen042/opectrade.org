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

        $("section.achievement-investment .banner-main-right").slick({
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

    // SLZ.initIsotope = function() {
    //     var g = $('.grid').isotope({
    //         layoutMode: 'packery',
    //         itemSelector: '.grid-item',
    //         percentPosition: true,
    //         packery: {
    //             columnWidth: '.grid-sizer'
    //         },
    //         // getSortData: {
    //         //     size: '[data-size]'
    //         // }
    //     });
    //
    //     $('.portfolio ul.nav-tabs').on('click', 'li > a:not(.default)', function() {
    //         var filterValue = $(this).attr('data-filter');
    //         g.isotope({
    //             filter: filterValue,
    //             sortBy: 'random',
    //             // sortAscending: false
    //         });
    //     });
    //
    //     $('.portfolio ul.nav-tabs > li > a.default').on('click', function() {
    //         var filterValue = $(this).attr('data-filter');
    //         g.isotope({
    //             filter: filterValue,
    //             sortBy: 'original-order',
    //             // sortAscending: true
    //         });
    //     });
    //
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

        // // show gallery
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

    SLZ.dHover = function() {
        $('.grid .grid-item').directionalHover({
            speed: 200
        });
    };

    SLZ.countTo = function() {
        $('.stat .count').text('0');
        setTimeout(function() {
            $('.stat .count').appear(function() {
                var data_value = $(this).attr('data-value');
                $(this).countTo({
                    to: data_value,
                    speed: 3000,
                    refreshInterval: 100
                });
            });
        }, 1000);
    };

    SLZ.marketChart = function(to) {
        SLZ.getHistoricalData('AAPL', to).done(function(response) {
            SLZ.drawChart(SLZ.extractData(response), "#chart-tiny-01");
        }).fail(function(err) {
            SLZ.drawChart(SLZ.dummyData(err.company), "#chart-tiny-01");
        });

        SLZ.getHistoricalData('GOOGL', to).done(function(response) {
            SLZ.drawChart(SLZ.extractData(response), "#chart-tiny-02");
        }).fail(function(err) {
            SLZ.drawChart(SLZ.dummyData(err.company), "#chart-tiny-02");
        });

        SLZ.getHistoricalData('FB', to).done(function(response) {
            SLZ.drawChart(SLZ.extractData(response), "#chart-tiny-03");
        }).fail(function(err) {
            SLZ.drawChart(SLZ.dummyData(err.company), "#chart-tiny-03");
        });
    };

    SLZ.getHistoricalData = function(company, timeOut) {
        var yql_base_uri = 'https://query.yahooapis.com/v1/public/yql?q=';
        var yql_env = 'store://datatables.org/alltableswithkeys';
        var yql_format = 'json';

        var n = moment();
        var lm = moment().subtract(1, 'month');

        var convertDateString = function(d) {
            return d.year() + "-" + ((d.month() + 1) < 10 ? "0" + (d.month() + 1) : (d.month() + 1)) + "-" + (d.date() < 10 ? "0" + d.date() : d.date());
        };

        var today = convertDateString(n);
        var lastmonth = convertDateString(lm);

        var yql_query = 'select * from yahoo.finance.historicaldata where symbol = "' + company + '" and startDate = "' + lastmonth + '" and endDate = "' + today + '"';

        var yql = yql_base_uri + encodeURIComponent(yql_query) + '&format=' + yql_format + '&env=' + encodeURIComponent(yql_env);

        return $.ajax({
            dataType: 'jsonp',
            url: yql,
            timeout: timeOut,
            error: function(xhr) {
                xhr.company = company;
            }
        });
    };

    SLZ.drawChart = function(data, id) {
        var date = data.date.map(function(i) {
            return moment(i).tz("America/New_York");
        });
        var ct = $(id);
        var ctOption = {
            scales: {
                yAxes: [{
                    position: "right"
                }],
                xAxes: [{
                    type: "time",
                    time: {
                        // unitStepSize: 3,
                        unit: "week",
                        displayFormats: {
                            "week": "D"
                        },
                        tooltipFormat: 'ddd, MMM D, kk:mm z'
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
                        var r = item.yLabel.toFixed(2) + ' USD';
                        return r;
                    }
                }
            }
        };
        var draw_ct = new Chart(ct, {
            type: 'line',
            data: {
                labels: date,
                datasets: [{
                    data: data.close,
                    backgroundColor: '#fafff5',
                    borderColor: '#0033cc',
                    pointRadius: 1,
                    pointHitRadius: 5,
                    lineTension: 0,
                    borderWidth: 1,
                }]
            },
            options: ctOption
        });

        /******* CHARST 4 ****/
        var ct4 = $('#chart-md-04');
        var ct4Option = {
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
            },
            responsive: true
        };
        var draw_ct_4 = new Chart(ct4, {
            type: 'bar',
            data: {
                labels: ['Stock', 'Bound', 'Gold', 'Real Estate', 'Fund'],
                datasets: [{
                    type: 'line',
                    data: [5.82, 5.61, 5.99, 8.87, 5.43],
                    backgroundColor: 'transparent',
                    borderColor: '#87b03d',
                    pointBackgroundColor: '#fff',
                    pointBorderWidth: 2,
                    pointRadius: 4,
                    pointHitRadius: 5,
                    lineTension: 0.4,
                    borderWidth: 2
                }, {
                    type: 'line',
                    data: [1.92, 3.36, 2.93, 4.21, 3.64],
                    backgroundColor: 'transparent',
                    borderColor: '#18bdc9',
                    pointBackgroundColor: '#169093',
                    pointBorderWidth: 2,
                    pointRadius: 4,
                    pointHitRadius: 5,
                    lineTension: 0.4,
                    borderWidth: 2
                }]
            },
            options: ct4Option
        });


        /******* CHARST 6 ****/
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

    SLZ.pieChart = function() {
        var h = 230;
        var r = h / 2;
        var arc = d3.svg.arc().outerRadius(r);

        var data = [
            { "label": "Stock", "value": 40 },
            { "label": "Bound", "value": 20 },
            { "label": "Mutual Fund", "value": 10 },
            { "label": "ETF", "value": 8 },
            { "label": "Gold", "value": 5 },
            { "label": "Real Estate", "value": 7 }
        ];


        var colors = [
            '#23c0f1',
            '#fdb912',
            '#f28520',
            '#306e87',
            '#4ba1c4',
            '#77b743'
        ];

        // var ctx = $("#pie-chart");
        // var myPieChart = new Chart(ctx,{
        //     type: 'pie',
        //     data: {
        //         labels: ["Stock", "Bound", "Mutual Fund", "ETF", "Gold", "Real Estate"],
        //         datasets: [{
        //             data: [40, 20, 10, 8, 5, 7],
        //             backgroundColor: [
        //                 '#23c0f1',
        //                 '#fdb912',
        //                 '#f28520',
        //                 '#306e87',
        //                 '#4ba1c4',
        //                 '#77b743'
        //             ]
        //         }]
        //     },
        // });
        //

        // nv.addGraph(function() {
        //     var chart = nv.models.pieChart()
        //         .x(function(d) { return d.label; })
        //         .y(function(d) { return d.value; })
        //         .color(colors)
        //         .showLabels(false)
        //         .tooltips(false);
        //
        //     var $container = $('#pie-chart'),
        //         width = $container.width(),
        //         height = $container.height();
        //         console.warn(width);
        //         console.warn(height);
        //
        //     d3.select("#pie-chart svg")
        //         .attr("width", '100%')
        //         .attr("height", '100%')
        //         // .attr('viewBox','0 0 ' + width +'  ' + height)
        //         // .attr('preserveAspectRatio','xMinYMin')
        //         .attr("transform", "translate(" + Math.min(width,height) / 2 + "," + Math.min(width,height) / 2 + ")")
        //         .datum(data)
        //         .transition().duration(1200)
        //         .call(chart);
        //
        //     d3.selectAll(".nv-label text")
        //         /* Alter SVG attribute (not CSS attributes) */
        //         .attr("transform", function(d) {
        //             d.innerRadius = -250;
        //             d.outerRadius = r;
        //             return "translate(" + arc.centroid(d) + ")";
        //         })
        //         .attr("text-anchor", "middle");
        //
        //     /* Replace bullets with blocks */
        //     d3.selectAll('.nv-series').each(function(d, i) {
        //         var group = d3.select(this),
        //             circle = group.select('circle');
        //         var color = circle.style('fill');
        //         circle.remove();
        //         var symbol = group.append('path')
        //             .attr('d', d3.svg.symbol().type('square'))
        //             .style('stroke', color)
        //             .style('fill', color)
        //             // ADJUST SIZE AND POSITION
        //             .attr('transform', 'scale(1.5) translate(-2,0)');
        //     });
        //
        //     d3.selectAll(".nv-pieWrap .nv-wrap") .attr('transform', 'translate(0, -50)');
        //
        //     var svg = d3.select("#pie-chart svg");
        //
        //     function updateLegendPosition() {
        //       svg.selectAll(".nv-series")[0].forEach(function(d, i) {
        //         // d3.select(d).attr("transform", "translate(-20," + i * 20 + ")");
        //         d3.select(d).attr("transform", "translate(-45," + i * 30 + ")");
        //
        //         });
        //     }
        //     svg.select('.nv-legend').on("click", function() {
        //       updateLegendPosition();
        //     });
        //
        //     svg.select('.nv-legend').on("dblclick", function() {
        //       updateLegendPosition();
        //     });
        //
        //     updateLegendPosition();
        //
        //     nv.utils.windowResize(chart.update);
        //
        //
        //     return chart;
        // });
        nv.addGraph(function() {
            var chart = nv.models.pieChart()
                .x(function(d) {
                    return d.label;
                })
                .y(function(d) {
                    return d.value;
                })
                .color(colors)
                .showLabels(false)
                .tooltips(false);


            d3.select("#pie-chart svg")
                .attr("width", '100%')
                .attr("height", '100%')
                .datum(data)
                .transition().duration(1200)
                .call(chart);

            d3.selectAll(".nv-label text")
                /* Alter SVG attribute (not CSS attributes) */
                .attr("transform", function(d) {
                    d.innerRadius = -250;
                    d.outerRadius = r;
                    return "translate(" + arc.centroid(d) + ")";
                })
                .attr("text-anchor", "middle");

            /* Replace bullets with blocks */
            d3.selectAll('.nv-series').each(function(d, i) {
                var group = d3.select(this),
                    circle = group.select('circle');
                var color = circle.style('fill');
                circle.remove();
                var symbol = group.append('path')
                    .attr('d', d3.svg.symbol().type('square'))
                    .style('stroke', color)
                    .style('fill', color)
                    // ADJUST SIZE AND POSITION
                    .attr('transform', 'scale(1.5) translate(-2,0)');
            });

            return chart;
        });
    };

    SLZ.extractData = function(r) {
        var q = r.query.results.quote;
        var close = [];
        var date = [];
        var temp = {};

        for (var i = 0; i < q.length; i++) {
            close[i] = parseFloat(q[i].Close);
            date[i] = q[i].Date + "T16:00:00-04:00";
        }

        close.reverse();
        date.reverse();

        temp.close = close;
        temp.date = date;
        temp.symbol = q[0].Symbol;

        Cookies.set(temp.symbol, temp);

        return temp;
    };

    SLZ.dummyStockData = function(company) {
        if (Cookies.get(company + 'stockData') !== undefined) {
            return Cookies.getJSON(company + 'stockData');
        } else {
            switch (company) {
                case 'AAPL':
                    return {
                        name: 'APPL',
                        price: 99.86,
                        change: -0.49,
                        changePercent: -0.49,
                        date: '4:54 AM EDT 01/06/2016'
                    };
                case 'GOOGL':
                    return {
                        name: 'GOOGL',
                        price: 748.85,
                        change: 1.25,
                        changePercent: 0.17,
                        date: '4:54 AM EDT 01/06/2016'
                    };
                case 'FB':
                    return {
                        name: 'FB',
                        price: 118.88,
                        change: -0.50,
                        changePercent: -0.42,
                        date: '4:54 AM EDT 01/06/2016'
                    };
                default:
                    return null;
            }
        }
    };

    SLZ.populateStockData = function(to) {
        SLZ.getStockData('AAPL', to).done(function(response) {
            SLZ.ppStockData(SLZ.processReturnedData(response), '#stock-info-1');
        }).fail(function(err) {
            SLZ.ppStockData(SLZ.dummyStockData(err.company), '#stock-info-1');
        });

        SLZ.getStockData('GOOGL', to).done(function(response) {
            SLZ.ppStockData(SLZ.processReturnedData(response), '#stock-info-2');
        }).fail(function(err) {
            SLZ.ppStockData(SLZ.dummyStockData(err.company), '#stock-info-2');
        });

        SLZ.getStockData('FB', to).done(function(response) {
            SLZ.ppStockData(SLZ.processReturnedData(response), '#stock-info-3');
        }).fail(function(err) {
            SLZ.ppStockData(SLZ.dummyStockData(err.company), '#stock-info-3');
        });
    };

    SLZ.getStockData = function(company, timeOut) {
        var yql_base_uri = 'https://query.yahooapis.com/v1/public/yql?q=';
        var yql_env = 'store://datatables.org/alltableswithkeys';
        var yql_format = 'json';

        var yql_query = 'select * from yahoo.finance.quote where symbol = "' + company + '"';

        var yql = yql_base_uri + encodeURIComponent(yql_query) + '&format=' + yql_format + '&env=' + encodeURIComponent(yql_env);

        return $.ajax({
            dataType: 'jsonp',
            url: yql,
            timeout: timeOut,
            error: function(xhr) {
                xhr.company = company;
            }
        });
    };

    SLZ.processReturnedData = function(r) {
        var temp = {};

        var name = r.query.results.quote.Symbol;
        var price = r.query.results.quote.LastTradePriceOnly;
        var change = r.query.results.quote.Change;
        var changePercent = (change >= 0 ? '+' : '') + (change / price * 100).toFixed(2) + '%';
        var date = moment(r.query.created).tz("America/New_York").format('h:mm A zz DD/MM/YYYY');

        temp.name = name;
        temp.price = parseFloat(price).toFixed(2);
        temp.change = parseFloat(change).toFixed(2);
        temp.changePercent = changePercent;
        temp.date = date;

        Cookies.set(name + 'stockData', temp);

        return temp;
    };

    SLZ.ppStockData = function(t, id) {
        $(id).find('.name').html(t.name);
        $(id).find('.price').html(t.price + ' USD');
        if (t.change < 0) {
            $(id).find('.change').css('color', '#d12a2a');
        }
        $(id).find('.change').html(t.change + ' (' + t.changePercent + ')');
        $(id).find('.date').html(t.date);
    };

    SLZ.dummyData = function(company) {
        if (Cookies.get(company) !== undefined) {
            return Cookies.getJSON(company);
        } else {
            switch (company) {
                case 'AAPL':
                    return {
                        close: [105.970001, 105.68, 105.080002, 104.349998, 97.82, 94.830002, 93.739998, 93.639999, 95.18, 94.190002, 93.239998, 92.720001, 92.790001, 93.419998, 92.510002, 90.339996, 90.519997, 93.879997, 93.489998, 94.559998, 94.199997],
                        date: ["2016-04-21T16:00:00-04:00", "2016-04-22T16:00:00-04:00", "2016-04-25T16:00:00-04:00", "2016-04-26T16:00:00-04:00", "2016-04-27T16:00:00-04:00", "2016-04-28T16:00:00-04:00", "2016-04-29T16:00:00-04:00", "2016-05-02T16:00:00-04:00", "2016-05-03T16:00:00-04:00", "2016-05-04T16:00:00-04:00", "2016-05-05T16:00:00-04:00", "2016-05-06T16:00:00-04:00", "2016-05-09T16:00:00-04:00", "2016-05-10T16:00:00-04:00", "2016-05-11T16:00:00-04:00", "2016-05-12T16:00:00-04:00", "2016-05-13T16:00:00-04:00", "2016-05-16T16:00:00-04:00", "2016-05-17T16:00:00-04:00", "2016-05-18T16:00:00-04:00", "2016-05-19T16:00:00-04:00"].map(function(i) {
                            return moment(i).tz("America/New_York");
                        }),
                    };
                case 'GOOGL':
                    return {
                        close: [780, 737.77002, 742.210022, 725.369995, 721.460022, 705.059998, 707.880005, 714.409973, 708.440002, 711.369995, 714.710022, 725.179993, 729.130005, 739.380005, 730.549988, 728.070007, 724.830017, 730.299988, 720.190002, 721.780029, 715.309998],
                        date: ["2016-04-21T16:00:00-04:00", "2016-04-22T16:00:00-04:00", "2016-04-25T16:00:00-04:00", "2016-04-26T16:00:00-04:00", "2016-04-27T16:00:00-04:00", "2016-04-28T16:00:00-04:00", "2016-04-29T16:00:00-04:00", "2016-05-02T16:00:00-04:00", "2016-05-03T16:00:00-04:00", "2016-05-04T16:00:00-04:00", "2016-05-05T16:00:00-04:00", "2016-05-06T16:00:00-04:00", "2016-05-09T16:00:00-04:00", "2016-05-10T16:00:00-04:00", "2016-05-11T16:00:00-04:00", "2016-05-12T16:00:00-04:00", "2016-05-13T16:00:00-04:00", "2016-05-16T16:00:00-04:00", "2016-05-17T16:00:00-04:00", "2016-05-18T16:00:00-04:00", "2016-05-19T16:00:00-04:00"].map(function(i) {
                            return moment(i).tz("America/New_York");
                        }),
                    };
                case 'FB':
                    return {
                        close: [113.440002, 110.559998, 110.099998, 108.760002, 108.889999, 116.730003, 117.580002, 118.57, 117.43, 118.059998, 117.809998, 119.489998, 119.239998, 120.5, 119.519997, 120.279999, 119.809998, 118.669998, 117.349998, 117.650002, 116.809998],
                        date: ["2016-04-21T16:00:00-04:00", "2016-04-22T16:00:00-04:00", "2016-04-25T16:00:00-04:00", "2016-04-26T16:00:00-04:00", "2016-04-27T16:00:00-04:00", "2016-04-28T16:00:00-04:00", "2016-04-29T16:00:00-04:00", "2016-05-02T16:00:00-04:00", "2016-05-03T16:00:00-04:00", "2016-05-04T16:00:00-04:00", "2016-05-05T16:00:00-04:00", "2016-05-06T16:00:00-04:00", "2016-05-09T16:00:00-04:00", "2016-05-10T16:00:00-04:00", "2016-05-11T16:00:00-04:00", "2016-05-12T16:00:00-04:00", "2016-05-13T16:00:00-04:00", "2016-05-16T16:00:00-04:00", "2016-05-17T16:00:00-04:00", "2016-05-18T16:00:00-04:00", "2016-05-19T16:00:00-04:00"].map(function(i) {
                            return moment(i).tz("America/New_York");
                        }),
                    };
                default:
                    return null;
            }
        }
    };
    /*=====  End of SAMPLE FUNCTION  ======*/




    /*======================================
    =            INIT FUNCTIONS            =
    ======================================*/

    $(document).ready(function() {
        SLZ.marketChart(5000);
        SLZ.populateStockData(5000);
        SLZ.mainFunction();
        SLZ.initSlick();
        SLZ.countTo();
        SLZ.dHover();
        SLZ.pieChart();
        // SLZ.drawChart();
    });

    $(window).on("load", function() {
        SLZ.initIsotope();
    });

    /*=====  End of INIT FUNCTIONS  ======*/


});
