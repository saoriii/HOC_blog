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
    <link href="path/to/lightbox.css" rel="stylesheet"> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>   
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
        <nav class="navbar navbar-dark bg-dark" >
            <div class="nav-wrapper" style="width: 100%">
                <a href="{{ url('/posts') }}" class="brand-logo">Blog</a>
                <a class="navbar-brand" href="#"></a>
  
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
                @endguest
            </div>
        </nav>
        @yield('content')
    </div>

       
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    @yield('scripts')
    <script src="{{ asset('js/app.js') }}"></script>
    <script>
        $(".button-collapse").sideNav()
        $(".dropdown-button").dropdown()
    </script>
    <script src="path/to/lightbox.js"></script>
</body>
</html>