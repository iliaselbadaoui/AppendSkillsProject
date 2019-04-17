'use strict';
let canvas = document.getElementById("CoursesGrowth").getContext("2d"),
    chart = new Chart(canvas,{
        type:'line',
        data: {
            labels: ['Janvier', 'Fèvrier', 'Mars', 'Avril', 'Mai', 'Juin','Juillet','Aout','Septembre','Octobre','Novembre','Décembre'],
            datasets: [{
                label: "Ventes",
                data: [8000, 9320, 7040, 10112, 14987, 6021,6988, 3720, 4055, 7807, 5901, 10899,],
                backgroundColor: 'rgba(52, 152, 219,0)',
                borderColor:'rgba(119, 139, 235,1.0)'
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