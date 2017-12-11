<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
    <link href="http://code.gijgo.com/1.6.1/css/gijgo.css" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" type="text/css" href="/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="/slick/slick-theme.css"/>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/owlcarousel/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="/owlcarousel/dist/assets/owl.theme.default.min.css">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{--<title>{{ config('app.name', 'Fiesta') }}</title>--}}
    <title> @yield('title')</title>

</head>
<body>

<header>
    <!-- Хедер -->
    <div class="header">
        <nav class="navbar navbar-expand-lg fixed-top py-0 nav bg-header">
            @foreach($apps as $app)
            <a class="navbar-brand py-0 mx-auto col-2 active" href="/"><img src="/uploads/logo/{{ $app->logo_path }}" alt="" class="w-100 py-2"><span class="sr-only">(current)</span></a>
            @endforeach
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto nav min-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="/all/flowers">Заказать букет</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/all/boxes">Подарочные боксы</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/festivities">Оформление торжеств</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contacts">Контакты</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/deliver">Доставка и оплата</a>
                    </li>
                </ul>

                <ul class="navbar-nav mr-auto nav max-menu">
                    <li class="nav-item active">
                        <a class="nav-link" href="/vigvams">Вигвамы<span class="sr-only">(current)</span></a>
                    </li>

                </ul>
                <!----->
                @include('shop.shopping-cart')

                <ul class="navbar-nav mx-auto nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="#"><ins>{{ $app->tel }}</ins><span class="sr-only">(current)</span></a>
                    </li>

                </ul>

            </div>
        </nav>
    </div>

</header>

        <content>
            {{--<div class="container my-3">--}}
                {{--<div class="row justify-content-center">--}}
                    {{--<div class="col-7">--}}
                        {{--<img src="{{ asset('fiesta_img/fiesta_logo.png') }}" alt="" class="w-100">--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            <div style="height:72px;"></div>
            <div class="banner">
                <img src="/uploads/banners/{{ $app->img_path }}" alt="">
            </div>
            <div class="buttons">
                <a href="{{ $app->facebook }}" target="_blank"><i class="fa fa-facebook"></i></a>
                <a href="{{ $app->odnoklassniki }}" target="_blank"><i class="fa fa-odnoklassniki"></i></a>
                <a href="{{ $app->instagram }}" target="_blank"><i class="fa fa-instagram"></i></a>
                <a href="{{ $app->twitter }}" target="_blank"><i class="fa fa-twitter"></i></a>
            </div>
            @yield('content')
        </content>

        <footer class="bg-dark py-3">
            <div class="container">
                <div class="row py-5 justify-content-center">

                    <div class="col-3 font-italic font-weight-light text-center foot-contact">
                        <img class="mb-4 w-100" src="/uploads/logo/{{ $app->logo_path }}" alt="">
                        <p>
                            <span class="fa fa-phone"> ТЕЛЕФОН:</span><br>
                            <a href="tel:{{ $app->tel }}" target="_blank">{{ $app->tel }}</a>
                        </p>
                        <p>
                            <span class="fa fa-whatsapp"> WHATSAPP:</span><br>
                            <a href="tel:{{ $app->tel }}" target="_blank">{{ $app->whatsapp }}</a>
                        </p>

                    </div>

                </div>
            </div>
        </footer>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src ="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="{{ asset('js/app.js') }}"></script>

    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="{{ asset('js/headhesive.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('slick/slick.min.js') }}"></script>
    <script src="{{ asset('js/js.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="{{ asset('js/cart.js') }}"></script>
    <script src="/owlcarousel/dist/owl.carousel.min.js"></script>
<!-- BEGIN JIVOSITE CODE {literal} -->
<script type='text/javascript'>
    (function(){ var widget_id = 'JRWbCZDUWR';var d=document;var w=window;function l(){
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = '//code.jivosite.com/script/widget/'+widget_id; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);}if(d.readyState=='complete'){l();}else{if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})();</script>
<!-- {/literal} END JIVOSITE CODE -->
<script src="http://code.gijgo.com/1.6.1/js/gijgo.js" type="text/javascript"></script>
<script>
    $('#datepicker').datepicker({
        uiLibrary: 'bootstrap4',
        iconsLibrary: 'fontawesome'
    });
</script>
        <script src="js/mask.js"></script>
        <script type="text/javascript">
            jQuery(function($){
                $("#phone").mask("+999 (999) 999-999");
            });
        </script>

</body>
</html>