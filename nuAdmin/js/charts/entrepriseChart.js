'use strict';
$(document).ready(function () {
    let canvas = document.getElementById("enterGrowth").getContext("2d"),
        chart = new Chart(canvas, {
            type: 'line',
            data: {
                labels: ['Janvier', 'Fèvrier', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Aout', 'Septembre', 'Octobre', 'Novembre', 'Décembre'],
                datasets: [{
                    label: 'Les nouvelles entreprise',
                    data: [10, 15, 12, 8, 17, 21, 23, 31, 23, 22, 16, 19],
                    backgroundColor: 'rgba(52, 152, 219,0)',
                    borderColor: 'rgba(119, 139, 235,1.0)'
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
});