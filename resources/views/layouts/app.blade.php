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

    <link rel="stylesheet" type="text/css" href="/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="/slick/slick-theme.css"/>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/owlcarousel/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="/owlcarousel/dist/assets/owl.theme.default.min.css">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Fiesta') }}</title>

</head>
<body>

<header>
    <!-- Хедер -->
    <div class="img-back"></div>
    <div class="header">
        <nav class="navbar navbar-expand-lg fixed-top py-0 nav bg-header">
            <a class="navbar-brand py-0 mx-auto col-2" href="/"><img src="/fiesta_img/fiesta_logofff.png" alt="" class="w-100 py-2"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto nav min-menu">
                    <li class="nav-item active">
                        <a class="nav-link" href="/">Главная<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/all/flowers">Заказать букет</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/all/boxes">Подарочные боксы</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contacts">Контакты</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/about-us">О нас</a>
                    </li>
                </ul>

                <ul class="navbar-nav mr-auto nav max-menu">
                    <li class="nav-item active">
                        <a class="nav-link" href="/vigvams">Вигвамы<span class="sr-only">(current)</span></a>
                    </li>

                </ul>
                <!----->
                <ul class="navbar-nav mx-auto nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="badge badge-success text-white rounded-circle solt">4</span>
                            <i class="fa fa-shopping-cart fa-2x mr-2" aria-hidden="true"></i>

                            <span style="font-size: 12px; text-transform: uppercase;font-weight: 500;">Корзина</span>
                        </a>
                        <div class="dropdown-menu shirina-korz" aria-labelledby="navbarDropdown">
                            <div class="dropdown-item">
                                <h2 class="text-white text-center">Ваша корзина</h2>
                            </div>
                            <div class="dropdown-divider"></div>
                            <div class="dropdown-item">
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
                            <div class="dropdown-item">
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
                            <div class="dropdown-item">
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
                            <div class="dropdown-divider"></div>
                            <div class="dropdown-item">
                                <div class="row text-white">
                                    <div class="col-6 justify-content-start">Всего: 7000 сом</div>
                                    <div class="col justify-content-end">
                                        <button type="button" class="btn btn-color"><a href="/cart">Оформление заказа</a></button>
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
                <div class="row py-5 justify-content-center">

                    <div class="col-3 font-italic font-weight-light text-center text-light">
                        <img class="mb-4 w-100" src="/fiesta_img/fiesta_logofff.png" alt="">
                        <p>
                            <span class="fa fa-phone"> ТЕЛЕФОН:</span><br>
                            <a href="tel:996700923321" target="_blank">+996 (700) 923-321</a>
                        </p>
                        <p>
                            <span class="fa fa-whatsapp"> WHATSAPP:</span><br>
                            <a href="tel:996700923321" target="_blank">+996 (700) 923-321</a>
                        </p>

                    </div>

                </div>
            </div>
        </footer>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="{{ asset('js/app.js') }}"></script>

    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="{{ asset('js/headhesive.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('slick/slick.min.js') }}"></script>
    <script src="{{ asset('js/js.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="/owlcarousel/dist/owl.carousel.min.js"></script>
</body>
</html>
