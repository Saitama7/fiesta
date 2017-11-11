<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Fiesta') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
        {{--<nav class="navbar navbar-default navbar-static-top">--}}
            {{--<div class="container">--}}
                {{--<div class="navbar-header">--}}

                    {{--<!-- Collapsed Hamburger -->--}}
                    {{--<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">--}}
                        {{--<span class="sr-only">Toggle Navigation</span>--}}
                        {{--<span class="icon-bar"></span>--}}
                        {{--<span class="icon-bar"></span>--}}
                        {{--<span class="icon-bar"></span>--}}
                    {{--</button>--}}

                    {{--<!-- Branding Image -->--}}
                    {{--<a class="navbar-brand" href="{{ url('/') }}">--}}
                        {{--{{ config('app.name', 'Laravel') }}--}}
                    {{--</a>--}}
                {{--</div>--}}


                    {{--<!-- Left Side Of Navbar -->--}}
                    {{--<ul class="nav navbar-nav">--}}
                        {{--&nbsp;--}}
                    {{--</ul>--}}

                    {{--<!-- Right Side Of Navbar -->--}}
                    {{--<ul class="nav navbar-nav navbar-right">--}}
                        {{--<!-- Authentication Links -->--}}
                        {{--<li><a href="/getcart">Корзина</a><span class="badge badge-dark">{{ Session::has('cart') ? Session::get('cart')->totalQty : '' }}</span></li>--}}
                        {{--@if (Auth::guest())--}}
                            {{--<li><a href="{{ route('login') }}">Login</a></li>--}}
                            {{--<li><a href="{{ route('register') }}">Register</a></li>--}}
                        {{--@else--}}
                            {{--<li class="dropdown">--}}
                                {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">--}}
                                    {{--{{ Auth::user()->name }} <span class="caret"></span>--}}
                                {{--</a>--}}

                                {{--<ul class="dropdown-menu" role="menu">--}}
                                    {{--<li>--}}
                                        {{--<a href="{{ route('logout') }}"--}}
                                            {{--onclick="event.preventDefault();--}}
                                                     {{--document.getElementById('logout-form').submit();">--}}
                                            {{--Logout--}}
                                        {{--</a>--}}

                                        {{--<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
                                            {{--{{ csrf_field() }}--}}
                                        {{--</form>--}}
                                    {{--</li>--}}
                                {{--</ul>--}}
                            {{--</li>--}}
                        {{--@endif--}}
                    {{--</ul>--}}

            {{--</div>--}}
        {{--</nav>--}}
        <header>
            <!-- Хедер -->
            <div class="img-back"></div>
            <div class="header">
                <nav class="navbar navbar-expand-lg fixed-top py-0 nav bg-header">
                    <a class="navbar-brand py-0 mx-auto" href="#"><img src="{{ asset('fiesta_img/white.flo.png') }}" alt="" class="logo-size"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mx-auto nav min-menu">
                            <li class="nav-item active">
                                <a class="nav-link" href="/">Главная<span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Заказать букет</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Подарочные боксы</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Контакты</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/about-us') }}">О нас</a>
                            </li>
                        </ul>

                        <ul class="navbar-nav ml-auto nav max-menu">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Вигвамы<span class="sr-only">(current)</span></a>
                            </li>

                        </ul>

                        <ul class="navbar-nav ml-auto nav">
                            <li class="nav-item dropdown pad-drop">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-shopping-basket fa-2x" aria-hidden="true"></i>
                                </a>
                                <div class="dropdown-menu shirina-korz" aria-labelledby="navbarDropdown">
                                    <div class="dropdown-item">
                                        <h2 class="text-white text-center">Ваша корзина</h2>
                                    </div>
                                    <div class="dropdown-divider"></div>
                                    <div class="dropdawn-item">
                                        <div class="row text-white">
                                            <div class="col-2">
                                                1
                                            </div>
                                            <div class="col-6">
                                                Цветок цветок
                                            </div>
                                            <div class="col-4">
                                                1000 сом
                                            </div>
                                        </div>
                                    </div>
                                    <div class="dropdawn-item">
                                        <div class="row text-white">
                                            <div class="col-2">
                                                2
                                            </div>
                                            <div class="col-6">
                                                Цветошек
                                            </div>
                                            <div class="col-4">
                                                2000 сом
                                            </div>
                                        </div>
                                    </div>
                                    <div class="dropdawn-item">
                                        <div class="row text-white">
                                            <div class="col-2">
                                                3
                                            </div>
                                            <div class="col-6">
                                                Цфитощка
                                            </div>
                                            <div class="col-4">
                                                4000 сом
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </li>
                        </ul>

                        <ul class="navbar-nav mx-auto nav">
                            <li class="nav-item active">
                                <a class="nav-link" href="#"><ins>+996 700 923-231</ins><span class="sr-only">(current)</span></a>
                            </li>

                        </ul>

                    </div>
                </nav>
            </div>
        </header>

        <content>
            <div class="container my-3">
                <div class="row justify-content-center">
                    <div class="col-7">
                        <img src="{{ asset('fiesta_img/fiesta_logo.png') }}" alt="" class="w-100">
                    </div>

                </div>
            </div>
            @yield('content')
        </content>

        <footer class="bg-dark py-3">
            <div class="container">
                <div class="row py-5">
                    <div class="col-4 d-flex align-items-center">
                        <div style="width: 10px; height: 10px; border-radius: 50%; background-color: #000;">&nbsp;&nbsp;&nbsp;</div>
                        <img src="{{ asset('fiesta_img/fiesta_logo.png') }}" alt="" class="w-100">
                        <div style="width: 10px; height: 10px; border-radius: 50%; background-color: #000;">&nbsp;&nbsp;&nbsp;</div>
                    </div>
                    <div class="col-4 text-center">
                        <ul class="nav flex-column color-text-footer">
                            <li class="nav-item">
                                <a class="nav-link active" href="/">Главная</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Закзать букет</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Подарочные боксы</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Контакты</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="{{ url('/about-us') }}">О нас</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="#">Вигвамы</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-4 d-flex align-items-center">
                        <div style="width: 10px; height: 10px; border-radius: 50%; background-color: #000;">&nbsp;&nbsp;&nbsp;</div>
                        <img src="{{ asset('fiesta_img/fiesta_logo.png') }}" alt="" class="w-100">
                        <div style="width: 10px; height: 10px; border-radius: 50%; background-color: #000;">&nbsp;&nbsp;&nbsp;</div>
                    </div>
                </div>
            </div>
        </footer>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="{{ asset('js/headhesive.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('slick/slick.min.js') }}"></script>
    <script src="{{ asset('js/js.js') }}"></script>
</body>
</html>
