@extends('layout.layout')

@section('content')


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="{{ asset('css/data-page.css') }}">
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript" src="{{ asset('js/data-page.js') }}"></script>
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
                <button onclick="location.href='download/xml'" class="btn"><i class="fa fa-download"></i> Download XML</button>
            </div>
        </div>
        <div class="card">
            <div id="rainfall-chart" class="chart"></div>
            <div class="btn-container">
                <button onclick="location.href='download/xml'" class="btn"><i class="fa fa-download"></i> Download XML</button>
            </div>
        </div>
    </div>
</section>

@endsection

