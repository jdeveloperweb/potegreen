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
                    ['Ganhos', 200, 130, 90, 240, 130, 220],
                    ['Perdas', 300, 200, 160, 400, 250, 250],
                    ['Saques', 200, 130, 90, 240, 130, 220],
                    ['Depositos', 130, 120, 150, 140, 160, 150]
                ],
                types: {
                    Ganhos: 'bar',
                    Perdas: 'bar',
					Saques: 'bar',
                    Depositos: 'bar'
                },
                colors: {
                    Ganhos: '#4ac18e',
                    Perdas: '#ea553d',
                    Saques: '#ffbb44',
                    Depositos: '#6d60b0'
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