@extends('layout.layout')

@section('content')

    <link rel="stylesheet" href="{{ asset('css/home.css') }}">

    <section>
        <div class="info">
            <div class="container left">
                <h1>About</h1>
                <p>We are Ceva.</p>
            </div>

            <div class="container center">
                <img src="{{ asset('img/background.jpg') }}" alt="Ceva" id="ceva">
            </div>

            <div class="container right">
                <h1>Website</h1>
                <p>This is a page where employees can check the weather data. If you are a customer or would like to become one, the button below will lead you to our main page for customers.</p>
                <a href="https://www.cevalogistics.com/" id="ceva-button" class="button">Ceva</a>
            </div>
        </div>
    </section>

@endsection
