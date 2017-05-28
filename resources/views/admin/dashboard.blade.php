@extends('layouts.master')
@section('content')
    <div class="main-container">

        <div class="row">
            <div class="col-md-6"><canvas id="canvas"></canvas></div>
            <div class="col-md-6">
                <table class="table table-striped">
                    <thead> <tr>
                        <th>#</th>
                        <th>Ime</th>
                        <th>Prosecna ocena</th>
                        <th>Autor</th>
                    </tr> </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Prva pivara u Crnoj Gori</td>
                        <td>4.8</td>
                        <td>Marko Markovic</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Husein-pašina džamija</td>
                        <td>4.5</td>
                        <td>Marko Markovic</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Biblioteka manastira Sveta Trojica iz Pjevlja</td>
                        <td>4.2</td>
                        <td>Marko Markovic</td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td>Srednjevekovni grad Koznik</td>
                        <td>3.1</td>
                        <td>Marko Markovic</td>
                    </tr>
                    </tbody>
                </table>

            </div>
        </div>
    </div>

    <script>

        var stories = [
                {'id' : 1,'name' : "Srednjevekovni grad Koznik"},
                {'id' : 2, 'name': "Biblioteka manastira Sveta Trojica iz Pjevlja"},
                {'id' : 3, 'name': "Husein-pašina džamija"},
                {'id' : 4, 'name' : "Prva pivara u Crnoj Gori"}
        ];
        var MONTHS = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
        var config = {
            type: 'line',
            data: {
                labels: ["3.1", "4.2", "4.5", "4.8"],
                datasets: [{
                    showLine: false,
                    label: "Presek posecenosti i prosecne ocene",
                    backgroundColor: window.chartColors.red,
                    borderColor: window.chartColors.red,
                    pointRadius: 12,
                    pointHoverRadius: 14,
                    data: [
                        50,
                        24,
                        40,
                        38,
                    ],
                    fill: false,
                }]
            },
            options: {
                responsive: true,
                title:{
                    display:true,
                    text:'Presek posecenosti i prosecne ocene'
                },
                /*
                tooltips: {
                    mode: 'index',
                    intersect: false,
                },*/

                tooltips: {
                    callbacks: {
                        label : function(tooltipItem, data) {
                            console.log(tooltipItem, data);
                            return stories[tooltipItem.index].name + '                   ' + tooltipItem.xLabel + " / " + tooltipItem.yLabel;
                        }
                    }
                },
                hover: {
                    mode: 'nearest',
                    intersect: true
                },
                elements: {
                    point: {
                        pointStyle: 'circle'
                    }
                },
                scales: {
                    xAxes: [{
                        display: true,
                        scaleLabel: {
                            display: true,
                            labelString: 'Prosecna ocena korisnika'
                        }
                    }],
                    yAxes: [{
                        display: true,
                        scaleLabel: {
                            display: true,
                            labelString: 'Broj realizovanih poseta'
                        },
                        ticks: {
                            suggestedMin: 0,
                            beginAtZero: true
                        }
                    }]
                }
            }
        };

        window.onload = function() {
            var ctx = document.getElementById("canvas").getContext("2d");
            window.myLine = new Chart(ctx, config);
        };

        document.getElementById('randomizeData').addEventListener('click', function() {
            config.data.datasets.forEach(function(dataset) {
                dataset.data = dataset.data.map(function() {
                    return randomScalingFactor();
                });

            });

            window.myLine.update();
        });

        var colorNames = Object.keys(window.chartColors);
        document.getElementById('addDataset').addEventListener('click', function() {
            var colorName = colorNames[config.data.datasets.length % colorNames.length];
            var newColor = window.chartColors[colorName];
            var newDataset = {
                label: 'Dataset ' + config.data.datasets.length,
                backgroundColor: newColor,
                borderColor: newColor,
                data: [],
                fill: false
            };

            for (var index = 0; index < config.data.labels.length; ++index) {
                newDataset.data.push(randomScalingFactor());
            }

            config.data.datasets.push(newDataset);
            window.myLine.update();
        });

        document.getElementById('addData').addEventListener('click', function() {
            if (config.data.datasets.length > 0) {
                var month = MONTHS[config.data.labels.length % MONTHS.length];
                config.data.labels.push(month);

                config.data.datasets.forEach(function(dataset) {
                    dataset.data.push(randomScalingFactor());
                });

                window.myLine.update();
            }
        });

        document.getElementById('removeDataset').addEventListener('click', function() {
            config.data.datasets.splice(0, 1);
            window.myLine.update();
        });

        document.getElementById('removeData').addEventListener('click', function() {
            config.data.labels.splice(-1, 1); // remove the label first

            config.data.datasets.forEach(function(dataset, datasetIndex) {
                dataset.data.pop();
            });

            window.myLine.update();
        });
    </script>
@stop