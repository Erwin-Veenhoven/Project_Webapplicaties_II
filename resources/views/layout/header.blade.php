<style>
</style>

<header>
    <nav>
        <ul class="navbar" >
            <li><a href="/home">Home</a></li>
            <li><a href="/data">Stations</a></li>
            <li><a href="/data">Historical Data</a></li>

            {{ Auth::user() }}
            @if(!Auth::user() == null)
                <li style="float: right;"><a href="{{ route("logout") }}">Logout</a></li>
            @else
                <li style="float: right;"><a href="{{ route("login") }}">Login</a></li>
            @endif
        </ul>
    </nav>
</header>
