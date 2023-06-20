@extends('layout.layout')

@section('content')


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="{{ asset('css/dataPage.css') }}">
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript" src="{{ asset('js/dataPage.js') }}"></script>

<div class="infoBar">
    <h1>Station 0</h1>
</div>

<section>
    <div class="container">
        <div class="card item1"></div>
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

