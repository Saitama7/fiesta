@extends('layouts.app')
@section('title', 'Контакты')
@section('content')
    <div class="container">
        <div class="row my-5 justify-content-lg-start justify-content-center">
            <h1 class="text-lg-left text-center corp">Контакты</h1>
        </div>
        <div class="row ">
            <div class="col-6 d-none d-lg-block">
                <a class="dg-widget-link" href="http://2gis.kg/bishkek/firm/70000001028376673/center/74.61611509323122,42.82386161680314/zoom/16?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=bigMap">Посмотреть на карте Бишкека</a>
                <div class="dg-widget-link"><a href="http://2gis.kg/bishkek/firm/70000001028376673/photos/70000001028376673/center/74.61611509323122,42.82386161680314/zoom/17?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=photos">Фотографии компании</a></div>
                <div class="dg-widget-link"><a href="http://2gis.kg/bishkek/center/74.616106,42.823562/zoom/16/routeTab/rsType/bus/to/74.616106,42.823562╎Fiesta Flowers, цветочный магазин?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=route">Найти проезд до Fiesta Flowers, цветочный магазин</a></div>
                <script charset="utf-8" src="https://widgets.2gis.com/js/DGWidgetLoader.js"></script>
                <script charset="utf-8">new DGWidgetLoader({
                        "width":'100%',
                        "height":'540',
                        "borderColor":"#a3a3a3",
                        "pos":{
                                "lat":42.82386161680314,
                                "lon":74.61611509323122,
                                "zoom":16
                        },
                        "opt":{
                                "city":"bishkek"
                        },
                        "org":[{
                                "id":"70000001028376673"
                        }]
                });</script>
                <noscript style="color:#c00;font-size:16px;font-weight:bold;">Виджет карты использует JavaScript. Включите его в настройках вашего браузера.</noscript>
            </div>
            <div class="col-12 col-md-6">

                @foreach($apps as $app)
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <p><span style="font-family: 'Lobster', cursive;">Адрес:</span> {{ $app->address }}</p>
                    </li>
                    <li class="nav-item">
                        <p><span style="font-family: 'Lobster', cursive;">Телефон:</span> {{ $app->tel }}</p>
                    </li>
                    <li class="nav-item">
                        <p><span style="font-family: 'Lobster', cursive;">WhatsApp:</span> {{ $app->whatsapp }}</p>
                    </li>
                    <li class="nav-item">
                        <p><span style="font-family: 'Lobster', cursive;">Оплата:</span> Элсом, Visa</p>
                    </li>
                </ul>
                @endforeach
            </div>
        </div>
    </div>

@endsection