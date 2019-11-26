<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>NormaCheck</title>


    </head>
    <body>
        <div class="card">
          @section('header')
            <h1>Cabecera de la web (master)</h1>
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
          @show
          <hr>
          <div class="container">
            @yield('content')
          </div>

          @section('footer')
            <hr>
            <h2>Footer de la web (master)</h2>
          @show
    </body>
</html>
