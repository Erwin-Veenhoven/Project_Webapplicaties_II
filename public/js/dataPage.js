google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);
function drawChart() {
    let temperatureData = google.visualization.arrayToDataTable([
        ['Time', 'Temperature'],
        ['01:01', 25],
        ['02:02', 22],
        ['03:03', 28],
        ['04:04', 31],
        ['05:05', 27]
    ]);

    let temperatureOptions = {
        title: 'Temperature, 4 weeks',
        curveType: 'function',
        legend: { position: 'bottom' },
        colors: ['#ff6e6e'],
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
        ['01-06-23', 5],
        ['02-06-23', 0],
        ['03-06-23', 2],
        ['04-06-23', 2],
        ['05-06-23', 3]
    ]);
    let rainfallOptions = {
        title: 'Rainfall, 1 week top 10',
        curveType: 'function',
        legend: { position: 'bottom' },
        colors: ['#49acff'],
        hAxis: { title: 'Time' },
        vAxis: {
            title: 'Rainfall (mm)',
            baselineColor: 'transparent',
            viewWindow: {
                min: 0
            }
        }
    };

    let tChart = new google.visualization.LineChart(document.getElementById('temperature-chart'));
    tChart.draw(temperatureData, temperatureOptions);

    let rChart = new google.visualization.LineChart(document.getElementById('rainfall-chart'));
    rChart.draw(rainfallData, rainfallOptions);
}

function resizeSquare() {
    var square = document.getElementById('square');
    var width = square.offsetWidth;
    square.style.height = width + 'px';
}

window.addEventListener('load', function() {
    resizeSquare();
});

window.addEventListener('resize', function() {
    drawChart();
    resizeSquare();
});
