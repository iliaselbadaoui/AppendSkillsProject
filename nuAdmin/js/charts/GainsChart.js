'use strict';
let canvas = document.getElementById("GainsGrowth").getContext("2d"),
    chart = new Chart(canvas,{
        type:'bar',
        data: {
            labels: ['Janvier', 'Fèvrier', 'Mars', 'Avril', 'Mai', 'Juin','Juillet','Aout','Septembre','Octobre','Novembre','Décembre'],
            datasets: [{
                label: 'Les revenue($)',
                data: [6000, 22100.91, 10040, 22112, 17987, 6021,15988, 13720, 22000.197, 19807, 19288, 25899,],
                backgroundColor: [
                    '#28143d','#33194c','#3d1e5b','#47236b',
                    '#51287a','#5b2d89','#663399','#7547a3',
                    '#845bad','#9370b7','#a384c1','#b299cc',
                ],
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