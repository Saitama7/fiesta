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
                <div class="callback-wrap">
                    <div class="container">
                        <div class="text-center pt-1">
                            <p>Напишите нам</p>
                        </div>
                        <form action="{{ url('contact') }}" method="POST">
                            {{ csrf_field() }}
                            <div class="form-row justify-content-center">
                                <div class="col-12 mb-2">
                                    <label class="sr-only" for="boxes-form-name">Имя</label>
                                    <input type="text" name="name" class="form-control border border-danger" id="callback-form-name" required placeholder="Как вас зовут?">
                                </div>
                                <div class="col-6 mb-2">
                                    <label class="sr-only" for="boxes-form-email">E-mail</label>
                                    <input type="email" name="email" class="form-control border border-danger" id="callback-form-email" required aria-describedby="emailHelp" placeholder="user@gmail.com">
                                </div>
                                <div class="col-6 mb-2">
                                    <label class="sr-only" for="boxes-form-phone"></label>
                                    <input type="tel" name="phone" class="form-control border border-danger" id="callback-form-phone" required aria-describedby="emailHelp" placeholder="996 XXX 123-456">
                                </div>
                                <div class="col-5 mb-2">
                                    <label class="sr-only" for="boxes-form-subject"></label>
                                    <input type="text" name="subject" class="form-control border border-danger" id="callback-form-subject" required aria-describedby="emailHelp" placeholder="Тема сообщения">
                                </div>
                                <div class="col-9 mb-2">
                                    <label for="callback-sms">Сообщение</label>
                                    <textarea  id="callback-sms" name="message" rows="4" accesskey required  class="form-control"></textarea>
                                </div><br>
                                <div class="col-9 mb-2 text-right">
                                    <button type="submit" class="btn btn-outline-danger">Отправить</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection