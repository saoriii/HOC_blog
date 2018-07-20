<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">    
    @yield('css')
</head>
<body>
    <div id="app">
        @auth
            <ul id="dropdown1" class="dropdown-content">
                <li>
                    <a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                        Logout
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>
            </ul>
        @endauth
        <nav class="cardiff">
            <div class="nav-wrapper">
                <a href="{{ url('/') }}" class="brand-logo">Blog Faresse</a>
                <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
                @guest
                    <ul class="right hide-on-med-and-down">
                        <li><a href="{{ route('login') }}">Login</a></li>
                        <li><a href="{{ route('register') }}">Register</a></li>
                    </ul>
                    <ul class="side-nav" id="mobile-demo">
                        <li><a href="{{ route('login') }}">Login</a></li>
                        <li><a href="{{ route('register') }}">Register</a></li>
                    </ul>
                @else
                    <ul class="right hide-on-med-and-down">
                        <li><a class="dropdown-button" href="#!" data-activates="dropdown1">{{ Auth::user()->name }}<i class="material-icons right">arrow_drop_down</i></a></li>
                    </ul>
                    <!-- <ul class="right hide-on-med-and-down">
                        <li><a class="dropdown-button" href="#!" data-activates="dropdown1">{{ Auth::user()->name }}<i class="material-icons right">arrow_drop_down</i></a></li>
                    </ul>
 -->                @endguest
            </div>
        </nav>
        @yield('content')
    </div>
    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    @yield('scripts')
    <script src="{{ asset('js/app.js') }}"></script>
    <script>
        $(".button-collapse").sideNav()
        $(".dropdown-button").dropdown()
    </script>
</body>
</html>