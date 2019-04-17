'use strict';
let canvas = document.getElementById("UsersOsShares").getContext("2d"),
    chart = new Chart(canvas,{
        type:'doughnut',
        data: {
            labels: ['Android','Linux','iOS','MacOS','Windows'],
            datasets: [{
                label: "Le nombre des utilisateur selon leurs système d'exploitaion",
                data: [103899,10981,89716,92324,150780],
                backgroundColor: ['#140a1e','#33194c','#51287a','#7547a3','#a384c1'],
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
    }),
    canvas2 = document.getElementById("UsersnavShares").getContext("2d"),
    chart2 = new Chart(canvas2,{
        type:'doughnut',
        data: {
            labels: ['Chrome','Edge','Firefox','Opera','Safaari'],
            datasets: [{
                label: "Le nombre des utilisateur selon leurs système d'exploitaion",
                data: [103899,10981,89716,92324,150780],
                backgroundColor: ['#140a1e','#33194c','#51287a','#7547a3','#a384c1'],
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