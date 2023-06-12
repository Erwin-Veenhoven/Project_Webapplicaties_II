<html>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .chart {
            margin-bottom: 20px;
        }

        .btn {
            background-color: DodgerBlue;
            border: none;
            color: white;
            padding: 12px 30px;
            cursor: pointer;
            font-size: 15px;
            margin-left: 110px;
        }

        /* Darker background on mouse-over */
        .btn:hover {
            background-color: RoyalBlue;
        }
    </style>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);
        function drawChart() {
            let temperatureData = google.visualization.arrayToDataTable([
                ['Time', 'Temperature'],
                ['01:01',  25],
                ['02:02',  22],
                ['03:03',  28],
                ['04:04',  31],
                ['05:05',  27]
            ]);

            let temperatureOptions = {
                title: 'Temperature',
                curveType: 'function',
                legend: { position: 'bottom' },
                colors: ['red'],
                hAxis: { title: 'Time' },
                vAxis: {
                    title: 'Temperature (°C)',
                    baselineColor: 'transparent',
                    // viewWindow: {
                    //     min: 0,
                    //     max: 40
                    // }
                }
            };

            let rainfallData = google.visualization.arrayToDataTable([
                ['Time', 'Rainfall'],
                ['01-06-23',  5],
                ['02-06-23',  0],
                ['03-06-23',  2],
                ['04-06-23',  3],
                ['05-06-23',  0]
            ]);
            let rainfallOptions = {
                title: 'Rainfall',
                curveType: 'function',
                legend: { position: 'bottom' },
                colors: ['blue'],
                hAxis: { title: 'Time' },
                vAxis: {
                    title: 'Rainfall (mm)',
                    baselineColor: 'transparent'}
            };

            let tChart = new google.visualization.LineChart(document.getElementById('temperatureChart'));
            tChart.draw(temperatureData, temperatureOptions);

            let rChart = new google.visualization.LineChart(document.getElementById('rainfallChart'));
            rChart.draw(rainfallData, rainfallOptions);
        }
    </script>
</head>
<body>
<div class="chart">
    <div id="temperatureChart" style="width: 900px; height: 250px"></div>
    <button class="btn"><i class="fa fa-download"></i> Download XML</button>
</div>
<div class="chart">
    <div id="rainfallChart" style="width: 900px; height: 250px"></div>
    <button class="btn"><i class="fa fa-download"></i> Download XML</button>
</div>
</body>
</html>
