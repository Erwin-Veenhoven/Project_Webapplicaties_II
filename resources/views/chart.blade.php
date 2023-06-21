@extends('layout.layout')

@section('content')


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="{{ asset('css/data-page.css') }}">
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script>
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
        let temperatureData = google.visualization.arrayToDataTable([
            ['Time', 'Temperature'],
            @foreach($station->data as $d)
            ['{{ $d->timestamp }}', {{ $d->temperature }}],
            @endforeach
        ]);

        let rainfallData = google.visualization.arrayToDataTable([
            ['Time', 'Rainfall'],
            ['01-06-23', 5],
            ['02-06-23', 0],
            ['03-06-23', 2],
            ['04-06-23', 2],
            ['05-06-23', 3]
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


    window.addEventListener('resize', function() {
        drawChart();
    });
</script>

<script type="text/javascript" src="{{ asset('js/square.js') }}"></script>

<section>
    <div class="container">
        <div class="card item1 stn-info">
            <h1>{{$station->name}}</h1>
            <small>lat: {{$station->latitude}}</small>
            <small>long: {{$station->longitude}}</small>
            <div class="temp square">
                <div class="temp-inner">
                    <span>{{ $station->data[count($station->data)-1]->temperature }}°C</span>
                    <small>most recent</small>
                </div>
            </div>
        </div>
        <div class="card item2">
            <div id="temperature-chart" class="chart"></div>
            <div class="btn-container">
                <button onclick="location.href='/download/xml'" class="btn"><i class="fa fa-download"></i> Download XML</button>
            </div>
        </div>
        <div class="card">
            <div id="rainfall-chart" class="chart"></div>
            <div class="btn-container">
                <button onclick="location.href='/download/xml'" class="btn"><i class="fa fa-download"></i> Download XML</button>
            </div>
        </div>
    </div>
</section>

@endsection

