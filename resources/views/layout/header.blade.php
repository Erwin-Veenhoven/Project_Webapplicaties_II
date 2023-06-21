<style>
</style>

<header>
    <nav>
        <ul class="navbar" >
            <a href="/"><img src="{{ asset('img/logo.png') }}" alt="Ceva" id="logo"></a>
            <li><a href="/data">Weather</a></li>

            {{ Auth::user() }}
            @if(!Auth::user() == null)
                <li style="float: right;"><a href="{{ route("logout") }}">Logout</a></li>
            @else
                <li style="float: right;"><a href="{{ route("login") }}">Login</a></li>
            @endif
        </ul>
    </nav>
</header>
