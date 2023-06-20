@extends('layout.layout')

@section('content')

    <link rel="stylesheet" href="{{ asset('css/home.css') }}">

    <section>
        <div class="container">
            <div class="card">
                <h1>About</h1>
                <p>CEVA Logistics has a global workforce of more than 110,000 people across 1,300 sites and more than 170 countries.</p>
            </div>
            <div class="card">
                <img src="{{ asset('img/background.jpg') }}" alt="Ceva" id="ceva">
            </div>
            <div class="card">
                <h1>Website</h1>
                <p>This is a page where employees can check the weather data. If you are a customer or would like to become one, the button below will lead you to our main page for customers.</p>
                <a href="https://www.cevalogistics.com/" id="ceva-button" class="button">Ceva</a>
            </div>
        </div>
    </section>

@endsection
