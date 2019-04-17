'use strict';
$(document).ready(function () {
    let canvas = document.getElementById("usersGrowth").getContext("2d"),
        chart = new Chart(canvas, {
            type: 'line',
            data: {
                labels: ['Janvier', 'Fèvrier', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Aout', 'Septembre', 'Octobre', 'Novembre', 'Décembre'],
                datasets: [{
                    label: 'Les nouveaux utilisateurs',
                    data: [12000, 12320, 10040, 22112, 17987, 6021, 15988, 13720, 11055, 19807, 32901, 25899],
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