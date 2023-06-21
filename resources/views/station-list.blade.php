@extends('layout.layout')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/station-list.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <section>
        <div class="container">
            <div class="wrapper">
                <div class="title">
                    <h1>Gulf of Mexico</h1>
                </div>
                <div class="list-container">
                    @foreach($gulf as $station)
                    <div class="card">
                        <div class="card-inner">
                            <div class="card-title">
                                <span>{{ $station->name }}</span><br>
                                <small>lat: {{ $station->latitude }}</small>
                                <small>lon: {{ $station->longitude }}</small>
                            </div>
                            <div class="temp">
                                <span>{{ $station->data[count($station->data)-1]->temperature }}°C</span>
                            </div>
                        </div>
                        <button onclick="location.href='/data/{{$station->name}}'">Details <i class="fa fa-arrow-circle-o-right"></i></button>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="wrapper">
                <div class="title">
                    <h1>Caribbean Sea</h1>
                </div>
                <div class="list-container">
                    @foreach($carr as $station)
                        <div class="card">
                            <div class="card-inner">
                                <div class="card-title">
                                    <span>{{ $station->name }}</span><br>
                                    <small>lat: {{ $station->latitude }}</small>
                                    <small>lon: {{ $station->longitude }}</small>
                                </div>
                                <div class="temp">
                                    <span>{{ $station->data[count($station->data)-1]->rainfall }}mm</span>
                                </div>
                            </div>
                            <button onclick="location.href='/data/{{ $station->name }}'">Details <i class="fa fa-arrow-circle-o-right"></i></button>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

@endsection
