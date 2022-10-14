/*
 Template Name: Admiria - Bootstrap 4 Admin Dashboard
 Author: Themesbrand
 File: Dashboard Init
*/


!function($) {
    "use strict";

    var Dashboard = function() {};

    Dashboard.prototype.init = function () {

        // Peity line
        $('.peity-line').each(function() {
            $(this).peity("line", $(this).data());
        });

        //Knob chart
        $(".knob").knob();

        //C3 combined chart
        c3.generate({
            bindto: '#combine-chart',
            data: {
				x: 'x',
                columns: [
				    ['x', '2013-10-01', '2013-10-02', '2013-10-03', '2013-10-04', '2013-10-05', '2013-10-06'],
                    ['Investidos', 10, 10, 9, 4, 8, 6],
                    ['Perdas', 10, 5, 6, 4, 5, 5],
                    ['Ganhos', 0.1, 20, 9, 20, 10, 20],
                    ['Saldo', -10, 15, 15, 14, 16, 15]
                ],
                types: {
                    Investidos: 'bar',
                    Perdas: 'bar',
					Ganhos: 'bar',
                    Saldo: 'bar'
                },
                colors: {
                    Investidos: '#ffbb44',
                    Perdas: '#ea553d',
                    Ganhos: '#4ac18e',
                    Saldo: '#6d60b0'
                },

            },
            axis: {
                x: {
            type: 'timeseries',
            tick: {
                format: '%d/%m'
            }
        }
            }
        });

        //C3 Donut Chart
        c3.generate({
            bindto: '#donut-chart',
            data: {
                columns: [
                    ['Vencidas', 88],
                    ['Perdidas', 25]
                ],
                type : 'donut'
            },
            donut: {
                title: "Apostas do dia",
                width: 30,
                label: {
                    show:false
                }
            },
            color: {
                pattern: ["#4ac18e", "#5468da"]
            }
        });

    },
        $.Dashboard = new Dashboard, $.Dashboard.Constructor = Dashboard

}(window.jQuery),

//initializing
    function($) {
        "use strict";
        $.Dashboard.init()
    }(window.jQuery);