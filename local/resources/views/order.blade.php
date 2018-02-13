@extends('layouts.app')
@section('title', 'Оформление заказа')
@section('content')
    <content>
        <div class="container">
            <h1 class="my-5">Оформление Заказа</h1>
            <h4 class='mb-5'>Информация о заказе</h4>
            <div class="order-info">
                @if($products)
                    <div class=" d-none d-lg-flex row text-center justify-content-lg-between p-3">
                        <div class="col-lg-1">
                        </div>
                        <div class="col-auto">
                            Товар
                        </div>
                        <div class="col-auto">
                            Цена
                        </div>
                        <div class="col-auto">
                            Количество
                        </div>
                        <div class="col-auto">
                            Сумма
                        </div>
                        <div class="col-auto">
                            Удалить
                        </div>
                    </div>
                @endif
                @if($products)
                    @foreach($products as $product)
                        <div class="row align-items-center border bg-dark text-light rounded text-center p-3">
                            <div class="col-4 col-lg-2">
                                <div class="row">
                                    <div class="col">
                                        <img class="w-100 rounded-circle" src="/uploads/products/{{ $product['item']['image_path'] }}" alt="" >
                                    </div>
                                </div>
                            </div>
                            <div class="col-8 col-lg-10">
                                <div class="row align-items-center justify-content-center justify-content-lg-between">
                                    <div class="col-12 col-md-auto col-lg-auto">
                                        {{ $product['item']['name'] }}
                                    </div>
                                    <div class="col-auto col-lg-auto d-none d-md-block">
                                        {{ $product['item']['cost'] }} сом
                                    </div>
                                    <div class="col-12 col-lg-auto my-4">
                                        <a href="/remove-from-cart/{{ $product['item']['id'] }}" class="p-2 font-weight-bold bg-danger text-light">-</a>
                                        <span class="mx-1">{{ $product['qty'] }}</span>
                                        <a href="/add-to-cart/{{ $product['item']['id'] }}" class="p-2 font-weight-bold bg-success text-light">+</a>
                                    </div>
                                    <div class="col-auto col-lg-auto">
                                        {{ $product['price'] }} сом
                                    </div>
                                    <div class="col-auto col-lg-auto">
                                        <a href="/delete-from-cart/{{ $product['item']['id'] }}"  class="btn btn-danger">
                                            <i class="fa fa-times" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
                <div class="row">
                    <div class="col d-flex justify-content-end mx-auto mt-3">
                        <b style="font-size: 18px;">Итого: <span>{{ $totalPrice }}</span> сом</b>
                    </div>
                </div>
            </div>
            <h4 class="mb-3">Контактные данные</h4>
            <p class="shrift-ton">Укажите свои контактные данные</p>
            <form action="/store/basket" method="POST">
                {{ csrf_field() }}
                <div class="row mb-4">
                    <div class="col">
                        <label for="name">Ваше имя <span style="color: red;">*</span></label>
                        <input type="text" name="name" value="@if(Session::has('vip')) {{ Session::get('vip')->name }} @endif" class="form-control" placeholder="Ваше Имя" id="name" required>
                    </div>
                    <div class="col">
                        <label for="phone">Ваш телефон <span style="color: red;">*</span></label>
                        <input type="tel" value="@if(Session::has('vip')) {{ Session::get('vip')->phone_number }} @endif"  pattern="+996-[0-9]{3}-[0-9]{3}-[0-9]{3}" name="phone_number" class="form-control" placeholder="+996-777-777-777" id="phone" required>
                    </div>
                </div>
                <h4 class="mb-3">Дата и время заказа</h4>
                <p class="shrift-ton">Укажите нужную дату и время заказа</p>
                <div class="row mb-4">
                    <div class="col">
                        <label for="datepicker">Дата</label>
                        <input type="text" id="datepicker"  name="order_date" width="276" required/>
                    </div>
                    <div class="col justify-content-center">
                        <label class="col p-0" for="inputState">Время <span style="color: red;">*</span></label>
                        <div class="form-check form-check-inline">
                            <select id="inputState" class="form-control" name="order_time_id">
                                @foreach($order_times as $time)
                                    <option value="{{ $time->id }}">{{ $time->interval }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <h4 class="mb-3">Адрес доставки</h4>
                <p class="shrift-ton">Укажите адрес доставки</p>
                <div class="row mb-4">
                    <div class="col-12 col-lg">
                        <label for="city">Город <span style="color: red;">*</span></label>
                        <input type="text" name="city" class="form-control" placeholder="Ваш город" id="city" required>
                    </div>
                    <div class="col-12 col-lg">
                        <label for="street">Улица <span style="color: red;">*</span></label>
                        <input type="text" name="street" class="form-control" placeholder="Ваша улица" id="street" required>
                    </div>
                    <div class="col-12 col-lg">
                        <label for="home">Дом <span style="color: red;">*</span></label>
                        <input type="text" name="house" class="form-control" placeholder="Номер дома" id="home" required>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col">
                        <label for="caption">Подпись</label>
                        <input type="text" name="sign" class="form-control" placeholder="Что написать на карточке к букету?" id="caption">
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <h4>Оплата</h4>
                            </li>
                            <li class="nav-item">
                                <label class="form-check-label row m-0 align-items-center">
                                    <input class="form-check-input col-auto p-0" type="radio" onchange="elsom_function()" name="payment_id" id="exampleRadios1" value="1" checked>
                                    <span class="srift-ton col-auto p-0">Оплата наличными при доставке</span>
                                </label><br>
                                <label class="form-check-label row m-0 align-items-center">
                                    <input class="form-check-input col-auto p-0 elsom" onchange="elsom_function()" type="radio" name="payment_id" id="exampleRadios2" value="2">
                                    <span class="srift-ton col-auto p-0">Оплата Элсом <img src="/uploads/elsom.jpg" class="col-3" alt=""></span>
                                </label><br>
                                <label class="form-check-label row m-0 align-items-center">
                                    <input class="form-check-input col-auto p-0" type="radio" name="payment_id" id="exampleRadios2" value="3" disabled>
                                    <span class="srift-ton col-auto p-0">Оплата онлайн по карте - (Недоступно! В стадии разработки )</span>
                                </label>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row my-5">
                    <div class="col">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <h4>Доставка</h4>
                            </li>
                            <li class="nav-item">
                                <label for="ciity" class="form-check-label">
                                    <input class="form-check-input del" type="radio" name="delivery_id" id="ciity" value="1" >
                                    <span class="strift-ton">ПО ГОРОДУ - 150 сом</span>
                                </label>
                                <br>
                                <label for="notcity" class="form-check-label">
                                    <input class="form-check-input del" type="radio"  name="delivery_id"  id="notcity" value="2">
                                    <span class="strift-ton">ЗА ЧЕРТОЙ ГОРОДА - 300 сом</span>
                                </label>
                            </li>
                        </ul>
                    </div>
                </div>
                <input type="hidden" value="{{ Session::get('cart')->totalPrice }}" name="totalPrice">
                <input type="hidden" value="{{ Session::get('cart')->realPrice }}" name="summ">
                <div class="row">
                    <div class="col d-flex justify-content-end mx-auto mt-3">
                        <b style="font-size: 18px;">Итого: <span class="totalPrice">{{ $totalPrice }}</span> сом</b>
                    </div>
                </div>
                <div class="row">
                    <div class="col d-flex justify-content-end mx-auto mt-3">
                        <button type="submit" class="btn btn-outline-dark ali">Оформить заказ</button>
                    </div>
                </div>
            </form>
        </div>
        <script>
            var ali = document.getElementsByClassName('ali');
            var text = ali[0].innerText;

            function elsom_function() {
                var new_text = "Получить код";
                var elsom = document.getElementsByClassName('elsom');
                var elsom_checked = elsom[0].checked;

                if (elsom_checked) {
                    ali[0].innerText = new_text;
                }
                else {
                    ali[0].innerText = text;
                }
            }
        </script>
    </content>

@endsection