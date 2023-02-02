jQuery(function($) {
    "use strict";

    var SLZ = window.SLZ || {};


    /*=======================================
    =            SAMPLE FUNCTION            =
    =======================================*/
    SLZ.drawChart = function() {
        var ct1 = $('#chart-md-01');
        var ct2 = $('#chart-md-02');
        // var ct3 = $('#chart-md-03');
        var ct4 = $('#chart-md-04');
        //var ct5 = $('#chart-md-05');
        var ct6 = $('#chart-md-06');
        // var ct7 = $('#chart-md-07');
        // var ct8 = $('#chart-md-08');

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

        // var ct3Option = {
        //     scales: {
        //         xAxes: [{
        //             gridLines: {
        //                 drawOnChartArea: false
        //             }
        //         }]
        //     },
        //     maintainAspectRatio: false,
        //     legend: {
        //         display: false
        //     },
        //     tooltips: {
        //         backgroundColor: '#0033cc',
        //         callbacks: {
        //             label: function(item) {
        //                 var r = item.yLabel;
        //                 return r;
        //             }
        //         }
        //     }
        // };

        // var draw_ct_3 = new Chart(ct3, {
        //     type: 'bar',
        //     data: {
        //         labels: ['Stock', 'Bound', 'Gold', 'Real Estate', 'Fund'],
        //         datasets: [{
        //             data: [7.38, 3.22, 5.33, 2.18, 8.89],
        //             backgroundColor: '#00a4b8',
        //             pointBorderWidth: 2,
        //             pointRadius: 4,
        //             pointHitRadius: 5,
        //             lineTension: 0.4,
        //             borderWidth: 2,
        //             pointHoverBackgroundColor: "rgba(75,192,192,1)",
        //             pointHoverBorderColor: "rgba(220,220,220,1)",
        //         }]
        //     },
        //     options: ct3Option
        // });

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
            }
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

        /******* CHARST 5 ****/
        // var ct5Option = {
        //     scales: {
        //         xAxes: [{
        //             gridLines: {
        //                 drawOnChartArea: false
        //             }
        //         }]
        //     },
        //     maintainAspectRatio: false,
        //     legend: {
        //         display: false
        //     },
        //     tooltips: {
        //         backgroundColor: '#0033cc',
        //         callbacks: {
        //             label: function(item) {
        //                 var r = item.yLabel;
        //                 return r;
        //             }
        //         }
        //     }
        // };
        // var draw_ct_5 = new Chart(ct5, {
        //     type: 'bar',
        //     data: {
        //         labels: ['Stock', 'Bound', 'Gold', 'Real Estate', 'Fund'],
        //         datasets: [{
        //             data: [2.77, 2.89, 0.72, 4.64, 2.22],
        //             backgroundColor: '#00a4b8',
        //             borderColor: '#00a4b8'
        //         }, {
        //             data: [7.2, 2.22, 2.40, 2.43, 3.88],
        //             backgroundColor: '#00739a',
        //             borderColor: '#00739a'
        //         }, {
        //             data: [2.14, 2.38, 2.45, 6.82, 3.68],
        //             backgroundColor: '#95b70a',
        //             borderColor: '#95b70a'
        //         }]
        //     },
        //     options: ct5Option
        // });

        /******* CHARST 6 ****/
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

        /******* CHARST 7 ****/
        // var ct7Option = {
        //     scales: {
        //         xAxes: [{
        //             gridLines: {
        //                 drawOnChartArea: false
        //             }
        //         }]
        //     },
        //     maintainAspectRatio: false,
        //     legend: {
        //         display: true
        //     },
        //     tooltips: {
        //         backgroundColor: '#0033cc',
        //         callbacks: {
        //             label: function(item) {
        //                 var r = item.yLabel;
        //                 return r;
        //             }
        //         }
        //     }
        // };
        // var draw_ct_7 = new Chart(ct7, {
        //     type: 'pie',
        //     data: {
        //         labels: ['Stock', 'Bound', 'Mutual Fund', 'ETF', 'Gold' ,'Real Estate'],
        //         datasets: [{
        //             data: [200, 150, 70, 40 , 25, 35],
        //             backgroundColor: ['#70a342',"#fdb912","#f28520","#306e87","#4ba1c4","#a8a9ad"]
        //         }]
        //     },
        //     options: ct7Option
        // });

        // ****** CHARST 8 ***
        // var ct8Option = {
        //     scales: {
        //         xAxes: [{
        //             gridLines: {
        //                 drawOnChartArea: false
        //             }
        //         }]
        //     },
        //     maintainAspectRatio: false,
        //     legend: {
        //         display: true
        //     },
        //     tooltips: {
        //         backgroundColor: '#0033cc',
        //         callbacks: {
        //             label: function(item) {
        //                 var r = item.yLabel;
        //                 return r;
        //             }
        //         }
        //     }
        // };
        // var draw_ct_8 = new Chart(ct8, {
        //     type: 'doughnut',
        //     data: {
        //         labels: ['Stock', 'Bound', 'Mutual Fund', 'ETF', 'Gold' ,'Real Estate'],
        //         datasets: [{
        //             data: [200, 150, 70, 40 , 25, 35],
        //             backgroundColor: ['#70a342',"#fdb912","#f28520","#306e87","#4ba1c4","#a8a9ad"]
        //         }]
        //     },
        //     options: ct8Option
        // });
    };

    SLZ.stackBarChart = function() {
        var test_data = stream_layers(3, 5, 2).map(function(data, i) {
            return {
                key: 'Stream' + i,
                values: data
            };
        });
        var data = [{
            key: "Stock",
            color: "#00a4b8",
            values: [
                { x: "A", y: 40 },
                { x: "B", y: 30 },
                { x: "C", y: 20 },
                { x: "D", y: 30 },
                { x: "E", y: 20 }
            ]
        }, {
            key: "Bound",
            color: "#0033cc",
            values: [
                { x: "A", y: 60 },
                { x: "B", y: 50 },
                { x: "C", y: 70 },
                { x: "D", y: 30 },
                { x: "E", y: 20 }
            ]
        }, {
            key: "Gold",
            color: "#00739a",
            values: [
                { x: "A", y: 60 },
                { x: "B", y: 50 },
                { x: "C", y: 70 },
                { x: "D", y: 30 },
                { x: "E", y: 20 }
            ]
        }];
        nv.addGraph({
            generate: function() {

                var chart = nv.models.multiBarChart()
                    .tooltips(false)
                    .showControls(false)
                    .showXAxis(false)
                    .stacked(true);

                var svg = d3.select('#stack-bar-chart svg').datum(data);
                svg.transition().duration(500).call(chart);

                return chart;
            },
            callback: function(graph) {
                nv.utils.windowResize(function() {
                    d3.select('#stack-bar-chart svg')
                        .transition().duration(500)
                        .call(graph);
                });
            }
        });
    };

    SLZ.pieChart = function() {

        var h = 300;
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
            '#70a342',
            '#fdb912',
            '#f28520',
            '#306e87',
            '#4ba1c4',
            '#a8a9ad'
        ];


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

    SLZ.donutPieChart = function() {

        var h = 300;
        var r = h / 2;
        var arc = d3.svg.arc().outerRadius(r);

        var data = [
            { "label": "Stock", "value": 10 },
            { "label": "Bound", "value": 13 },
            { "label": "Mutual Fund", "value": 10 },
            { "label": "ETF", "value": 8 },
            { "label": "Gold", "value": 5 }
        ];


        var colors = [
            '#70a342',
            '#fdb912',
            '#f28520',
            '#306e87',
            '#4ba1c4'
        ];


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
                .donut(true)
                .donutRatio(0.35)
                .tooltips(false)
                .startAngle(function(d) {
                    return d.startAngle / 2 - Math.PI / 2;
                })
                .endAngle(function(d) {
                    return d.endAngle / 2 - Math.PI / 2;
                });


            d3.select("#donut-pie-chart svg")
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

    SLZ.groupBarChart = function() {

         var data = [
            {
                key: 'Series 1',
                values: [
                    {
                        "label" : "Fund" ,
                        "value" : 19
                    } ,
                    {
                        "label" : "Real Estate" ,
                        "value" : 13
                    } ,
                    {
                        "label" : "Gold" ,
                        "value" : 16
                    } ,
                    {
                        "label" : "Bound" ,
                        "value" : 8
                    } ,
                    {
                        "label" : "Stock" ,
                        "value" : 19
                    } 
                ]
            },
            {
                key: 'Series 2',
                values: [
                    {
                        "label" : "Fund" ,
                        "value" : 18
                    } ,
                    {
                        "label" : "Real Estate" ,
                        "value" : 14
                    } ,
                    {
                        "label" : "Gold" ,
                        "value" : 12
                    } ,
                    {
                        "label" : "Bound" ,
                        "value" : 17
                    } ,
                    {
                        "label" : "Stock" ,
                        "value" : 27
                    } 
                ]
            }
        ];

        var chart;
        nv.addGraph(function() {
          chart = nv.models.multiBarHorizontalChart()
              .x(function(d) { return d.label })
              .y(function(d) { return d.value })
              .margin({top: 0, right: 0, bottom: 40, left: 70})
              .showValues(true)
              .tooltips(false)
              .showControls(false)
              .showLegend(false);

          chart.yAxis
              .tickFormat(d3.format(',.2f'));

          d3.select('#group-bar-chart svg')
              .datum(data)
              .transition().duration(500)
              .call(chart);

          nv.utils.windowResize(chart.update);

          return chart;
        });
        
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
                    fill: '#0033cc',
                }
            }
        });
    };



    /*=====  End of SAMPLE FUNCTION  ======*/

    /*======================================
    =            INIT FUNCTIONS            =
    ======================================*/

    $(document).ready(function() {
        SLZ.stackBarChart();
        SLZ.drawChart();
        SLZ.mapFunction();
        SLZ.groupBarChart();
        SLZ.pieChart();
        SLZ.donutPieChart();
    });

    /*=====  End of INIT FUNCTIONS  ======*/


});

jQuery(function($) {
    "use strict";

    var SLZ = window.SLZ || {};


    /*=======================================
    =            SAMPLE FUNCTION            =
    =======================================*/

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

    SLZ.ppStockData = function(t, id) {
        $(id).find('.name').html(t.name);
        $(id).find('.price').html(t.price + ' USD');
        if (t.change < 0) {
            $(id).find('.change').css('color', '#d12a2a');
        }
        $(id).find('.change').html(t.change + ' (' + t.changePercent + ')');
        $(id).find('.date').html(t.date);
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
    };

    SLZ.marketChart = function(to) {
        SLZ.getHistoricalData('AAPL', to).done(function(response) {
            SLZ.drawChart(SLZ.extractData(response), "#chart-tiny-01");
        }).fail(function(err) {
            SLZ.drawChart(SLZ.dummyData(err.company), "#chart-tiny-01");
        });
    };

    SLZ.populateStockData = function(to) {
        SLZ.getStockData('AAPL', to).done(function(response) {
            SLZ.ppStockData(SLZ.processReturnedData(response), '#stock-info-1');
        }).fail(function(err) {
            SLZ.ppStockData(SLZ.dummyStockData(err.company), '#stock-info-1');
        });
    };
    /*=====  End of SAMPLE FUNCTION  ======*/




    /*======================================
    =            INIT FUNCTIONS            =
    ======================================*/

    $(document).ready(function() {
        SLZ.marketChart(5000);
        SLZ.populateStockData(5000);
    });


    /*=====  End of INIT FUNCTIONS  ======*/


});
