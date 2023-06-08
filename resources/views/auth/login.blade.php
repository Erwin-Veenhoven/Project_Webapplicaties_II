@extends('layout.layout')

@section('content')

    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link rel="stylesheet" href="{{ asset('login.css') }}">

<section>
    <h1>Login</h1>
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div>
            <label for="email">{{ __('Email') }}</label>
            <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus>
            @error('email')
            <span>{{ $message }}</span>
            @enderror
        </div>
        <div>
            <label for="password">{{ __('Password') }}</label>
            <input id="password" type="password" name="password" required>
            @error('password')
            <span>{{ $message }}</span>
            @enderror
        </div>
        <div>
            <input type="checkbox" name="remember" id="remember">
            <label for="remember">{{ __('Remember Me') }}</label>
        </div>
        <button type="submit">{{ __('Login') }}</button>
    </form>


</section>

@endsection



