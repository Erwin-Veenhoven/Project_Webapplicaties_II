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
                    <div class="card">
                        <div class="card-inner">
                            <div class="card-title">
                                <span>Station 1</span><br>
                                <small>lat: 9.287620</small>
                                <small>long: -79.916139</small>
                            </div>
                            <div class="temp">
                                <span>25°C</span>
                            </div>
                        </div>
                        <button onclick="location.href='/data'">Details <i class="fa fa-arrow-circle-o-right"></i></button>
                    </div>
                </div>
            </div>
            <div class="wrapper">
                <div class="title">
                    <h1>Caribbean Sea</h1>
                </div>
                <div class="list-container">
                </div>
            </div>
        </div>
    </section>

@endsection
