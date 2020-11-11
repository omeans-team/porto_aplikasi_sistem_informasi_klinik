$(document).ready(function () {

    'use strict';

    var brandPrimary = 'rgba(51, 179, 90, 1)';

    var PIECHARTEXMPLE    = $('#pieChartExample');

    var pieChartExample = new Chart(PIECHARTEXMPLE, {
        type: 'doughnut',
        data: {
            labels: [
                "First",
                "Second",
                "Third"
            ],
            datasets: [
                {
                    data: [300, 50, 100],
                    borderWidth: [1, 1, 1],
                    backgroundColor: [
                        brandPrimary,
                        "rgba(75,192,192,1)",
                        "#FFCE56"
                    ],
                    hoverBackgroundColor: [
                        brandPrimary,
                        "rgba(75,192,192,1)",
                        "#FFCE56"
                    ]
                }]
            }
    });

    var pieChartExample = {
        responsive: true
    };
});