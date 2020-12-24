<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/starter-template.css') }}" rel="stylesheet">
    @yield('css')
</head>

<body>
    <div id="app">

        <nav id="topNav" class="navbar navbar-expand-md navbar-light bg-light fixed-top">
            <a class="navbar-brand" href="#">
                <img class="lazy logo-ico" width="36" height="35" src="vendor/devdojo/chatter/assets/images/1.png">
                <span>Combate Ambiental</span>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active"><a class="nav-link" href="/home">Home <span class="sr-only">(current)</span></a></li>

                    <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Desarrollo Sostenible</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown01">
                            <ul style="margin-left: -40px">
                                <h6 class="dropdown-header text-primary">1-6</h6>
                                <a class="dropdown-item" href="#">Poner fin a la pobreza</a>
                                <a class="dropdown-item" href="#">Hambre y seguridad alimentaria</a>
                                <a class="dropdown-item" href="#">Salud</a>
                                <a class="dropdown-item" href="#">Educación</a>
                                <a class="dropdown-item" href="#">Igualdad de género y empoderamiento de la mujer</a>
                                <a class="dropdown-item" href="#">Agua y saneamiento</a>

                                <h6 class="dropdown-header text-primary">7-12</h6>
                                <a class="dropdown-item" href="#">Energía</a>
                                <a class="dropdown-item" href="#">Crecimiento económico</a>
                                <a class="dropdown-item" href="#">Infraestructura</a>
                                <a class="dropdown-item" href="#">Reducir las desigualdades entre países</a>
                                <a class="dropdown-item" href="#">Ciudades</a>
                                <a class="dropdown-item" href="#">Producción y consumo sostenibles</a>

                                <h6 class="dropdown-header text-primary">13-17</h6>
                                <a class="dropdown-item" href="#">Cambio climático</a>
                                <a class="dropdown-item" href="#">Océanos</a>
                                <a class="dropdown-item" href="#">Bosques, desertificación y diversidad biológica</a>
                                <a class="dropdown-item" href="#">Paz y justicia</a>
                                <a class="dropdown-item" href="#">Alianzas</a>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="#">Medio Ambiente</a></li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Residuos Solidos</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown01">
                            <a class="dropdown-item" href="#">Separación de basura</a>
                            <a class="dropdown-item" href="#">Reciclaje</a>
                            <a class="dropdown-item" href="#">Reutilizar</a>
                            <a class="dropdown-item" href="#">Reparar</a>
                        </div>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="#">Eco-Retos ODS</a></li>
                    <li class="nav-item"><a class="nav-link" href="/foro">Foro</a></li>
                    <li class="nav-item"><a class="nav-link" href="https://climateclock.world/">Reloj Climatico</a></li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                    @endif
                    @else
                    @if(! is_null(Auth::user()->email_verified_at))
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                    @endif
                    @endguest
                </ul>
            </div>

        </nav>



        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
<script src="{{ asset('js/app.js') }}"></script>
@yield('js')

</html>