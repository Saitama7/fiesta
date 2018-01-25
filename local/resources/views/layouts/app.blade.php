<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="Fiesta, Фиеста, Букеты, Цветы, Бишкек цветы, Бишкек букеты, Бишкек мишки, Бишкек Фиеста, Купить букеты, Купить подарок, Fiesta flowers, Фиеста фловерс, Flowers, 101 роза, 1001 роза, Оформление торжеств, Вигвам" />
    <meta name="description" content="@yield('description')">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
    <link href="http://code.gijgo.com/1.6.1/css/gijgo.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.css" />

    <link rel="stylesheet" type="text/css" href="/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="/slick/slick-theme.css"/>

    <!-- Styles -->
    <link rel="shortcut icon" href="{{{ asset('uploads/logo/icon/fiesta-flowers-black.png') }}}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="/css/main.css">
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
            <i class="fa fa-bars text-white" aria-hidden="true" id="mobile-button-nav"></i>
            @foreach($apps as $app)
            <a class="navbar-brand p-0 col-4 col-md-2 active mx-auto" href="/"><img src="/uploads/logo/{{ $app->logo_path }}" alt="" class="w-100 py-2"><span class="sr-only">(current)</span></a>
            @endforeach
            <div id="backdrop"></div>

            <div class="row" id="mobile-nav">
                <i class="fa fa-times text-white float-right d-xl-none" style="margin-top: 20px; margin-right: 20px;" aria-hidden="true"></i>
                <ul class="navbar-nav mt-5 my-xl-0 ml-5 nav min-menu">
                    <li class="nav-item my-2 my-xs-0">
                        <a class="nav-link" href="/all/flowers"><i class="fa fa-angle-double-right d-xl-none" style="font-size: 15px;" aria-hidden="true"></i> Заказать букет</a>
                    </li>
                    <li class="nav-item my-2 my-xs-0">
                        <a class="nav-link" href="/all/boxes"><i class="fa fa-angle-double-right d-xl-none" style="font-size: 15px;" aria-hidden="true"></i> Подарочные боксы</a>
                    </li>
                    <li class="nav-item my-2 my-xs-0">
                        <a class="nav-link" href="/festivities"><i class="fa fa-angle-double-right d-xl-none" style="font-size: 15px;" aria-hidden="true"></i> Оформление торжеств</a>
                    </li>
                    <li class="nav-item my-2 my-xs-0">
                        <a class="nav-link" href="/contacts"><i class="fa fa-angle-double-right d-xl-none" style="font-size: 15px;" aria-hidden="true"></i> Контакты</a>
                    </li>
                    <li class="nav-item my-2 my-xs-0">
                        <a class="nav-link" href="/deliver"><i class="fa fa-angle-double-right d-xl-none" style="font-size: 15px;" aria-hidden="true"></i> Доставка и оплата</a>
                    </li>
                </ul>

                <ul class="navbar-nav ml-5 ml-xl-0 mr-auto nav max-menu">
                    <li class="nav-item my-2 my-xs-0 active">
                        <a class="nav-link" href="/all/vigvams"><i class="fa fa-angle-double-right d-xl-none" style="font-size: 15px;" aria-hidden="true"></i> Вигвамы</a>
                    </li>
                </ul>
                <!----->


                <ul class="navbar-nav ml-5 ml-xl-0 nav">
                    <li class="nav-item my-2 my-xs-0 active">
                        <a class="nav-link" href="tel:{{ $app->tel }}" target="_blank"><span class="fa fa-phone"></span>{{ $app->tel }}</a>
                    </li>
                </ul>

                <div class="row d-xl-none ml-5 mt-5 ml-xs-0">
                    <div class="col">
                        <a href="{{ $app->facebook }}" target="_blank"><i class="fa fa-facebook-square  text-white isize"></i></a>
                    </div>
                    <div class="col">
                        <a href="{{ $app->odnoklassniki }}" target="_blank"><i class="fa fa-odnoklassniki text-white isize"></i></a>
                    </div>
                    <div class="col">
                        <a href="{{ $app->instagram }}" target="_blank"><i class="fa fa-instagram text-white isize"></i></a>
                    </div>
                    <div class="col">
                        <a href="{{ $app->twitter }}" target="_blank"><i class="fa fa-twitter text-white isize"></i></a>
                    </div>
                </div>

            </div>
                @include('shop.shopping-cart')
        </nav>
    </div>

</header>

        <content>
            <div class="nav-height"></div>
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
                <div class="row justify-content-center">
                    <div class="col-6 col-sm-6 col-md-4 col-lg-2">
                        <img class="mb-4 w-100" src="/uploads/logo/{{ $app->logo_path }}" alt="">
                    </div>
                </div>
                <div class="row justify-content-center">

                    <div class="col-sm-12 col-md-6 col-lg-3 font-italic font-weight-light text-center foot-contact">
                        <p>
                            <span class="fa fa-phone"> ТЕЛЕФОН:</span><br>
                            <a href="tel:{{ $app->tel }}" target="_blank">{{ $app->tel }}</a>
                        </p>
                        <p>
                            <span class="fa fa-whatsapp"> WHATSAPP:</span><br>
                            <a href="tel:{{ $app->tel }}" target="_blank">{{ $app->whatsapp }}</a>
                        </p>
                        <p>
                            <i class="fa fa-address-book" aria-hidden="true"> АДРЕС:</i><br>
                            <span>{{ $app->address }}</span>
                        </p>

                    </div>

                </div>

                <div class="row justify-content-center">
                    Made with&nbsp;&hearts;&nbsp;<a href="#">Mount</a>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.js"></script>
<script type="text/javascript">
    $('#datepicker').datepicker({
        uiLibrary: 'bootstrap4',
        iconsLibrary: 'fontawesome',
        minDate: new Date()
    });
    console.log(new Date())
</script>
<script>
    $('#mobile-button-nav').click(function (e) {
        e.preventDefault(e);
        $('#mobile-nav').toggleClass('row');
        $('#mobile-nav').toggleClass('mobile-nav', 1000);
        $('#backdrop').show();
    });
    $('.fa-times').click(function (e) {
        e.preventDefault(e);
        $('#mobile-nav').toggleClass('mobile-nav', 1000,
        function() {
            $('#mobile-nav').toggleClass('row');
        });

        $('#backdrop').hide(1000);
    });
    $('#backdrop').click(function (e) {
        e.preventDefault(e);
        $('#mobile-nav').toggleClass('mobile-nav', 1000,
            function() {
                $('#mobile-nav').toggleClass('row');
            });

        $('#backdrop').hide(1000);
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
