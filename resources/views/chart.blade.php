@extends('layout.layout')

@section('content')


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="{{ asset('css/dataPage.css') }}">
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript" src="{{ asset('js/dataPage.js') }}"></script>

<section>
    <div class="chart">
        <div id="temperatureChart" style="width: 900px; height: 250px"></div>
        <button class="btn"><i class="fa fa-download"></i> Download XML</button>
    </div>
    <div class="chart">
        <div id="rainfallChart" style="width: 900px; height: 250px"></div>
        <button class="btn"><i class="fa fa-download"></i> Download XML</button>
    </div>
</section>

@endsection

