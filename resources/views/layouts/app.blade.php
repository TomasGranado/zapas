<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Zapas</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/animate.css">
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/app.css">
</head>
<body class="cambio">
    <div class="toggle-container">
        <input class="toggle"type="checkbox" id="switch" name="theme" /><label for="switch">Toggle</label>
    </div>
    <button id="back-to-top"><i class="fas fa-arrow-up"></i></button>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light shadow cambioNav">
            <div class="container">
                <a class="navbar-brand cambioNav" href="{{ url('/') }}">
                    Zapas
                </a>
                <button class="navbar-toggler cambioNav" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse cambioNav" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto cambioNav">
                        
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto cambioNav">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item cambioNav">
                                <a class="nav-link" href="{{ route('products') }}">{{ __('Productos') }}</a>
                            </li>
                            <li class="nav-item cambioNav">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Inicia Sesión') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item cambioNav">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Registrate') }}</a>
                                </li>
                            @endif
                       @else
                            @if (Auth::user()->admin_value == 1)
                                <li class="nav-item cambioNav">
                                    <a class="nav-link" href="{{route('crudProduct')}}">{{ __('Agregar') }}</a>
                                </li>
                            @endif
                        <li class="nav-item cambioNav">
                            <a class="nav-link" href="{{ route('products') }}">{{ __('Productos') }}</a>
                        </li>
                        @if (Auth::user())
                        <li class="nav-item cambioNav">
                            <a class="nav-link" href="{{ route('cart') }}">{{ __('Carrito') }}</a>
                        </li>
                            @endif
                        
                        <li class="nav-item cambioNav dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Cerrar sesión') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <main class="cambio">
            @yield('content')
        </main>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/60f9f89d76.js" crossorigin="anonymous"></script>
    <script src="/js/app.js"></script>
</body>
</html>
