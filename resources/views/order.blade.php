@extends('layouts.app')
@section('title', 'Оформление заказа')
@section('content')

    <content>
        <div class="container">
            <h1 class="my-5">Оформление Заказа</h1>
            <h4 class='mb-5'>Информация о заказе</h4>
            <div class="order-info">
                @foreach($products as $product)
                    <div class="row align-items-center border bg-dark text-light rounded text-center p-3">
                        <div class="col-2">
                            <img class="w-100 rounded-circle" src="/uploads/products/{{ $product['item']['image_path'] }}" alt="" >
                        </div>
                        <div class="col-4">
                            {{ $product['item']['name'] }}
                        </div>
                        <div class="col-2">
                            {{ $product['item']['cost'] }} сом
                        </div>
                        <div class="col-1">
                            <input type="text" value="{{ $product['qty'] }}"  class="form-control text-center" size="4" maxlength="4">
                        </div>
                        <div class="col-2">
                            {{ $product['price'] }} сом
                        </div>
                        <div class="col-1">
                            <button type="button" class="btn btn-outline-danger">
                                <i class="fa fa-times" aria-hidden="true"></i>
                            </button>
                        </div>
                    </div>
                @endforeach
            </div>
            <h4 class="mb-3">Контактные данные</h4>
            <p class="shrift-ton">Укажите свои контактные данные</p>
            <form action="/store/basket" method="POST">
                {{ csrf_field() }}
                <div class="row mb-4">
                    <div class="col">
                        <label for="name">Ваше имя <span style="color: red;">*</span></label>
                        <input type="text" name="name" class="form-control" placeholder="Ваше Имя" id="name" required>
                    </div>
                    <div class="col">
                        <label for="phone">Ваш телефон <span style="color: red;">*</span></label>
                        <input type="tel"   pattern="+996-[0-9]{3}-[0-9]{3}-[0-9]{3}" name="phone_number" class="form-control" placeholder="+996-777-777-777" id="phone" required>
                    </div>
                </div>

                <h4 class="mb-3">Дата и время заказа</h4>
                <p class="shrift-ton">Укажите нужную дату и время заказа</p>

                <div class="row mb-4">
                    <div class="col">
                        <label for="datepicker">Дата</label>
                        <input type="text" id="datepicker" name="order_date" width="276" />
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
                        {{--<div class="form-check form-check-inline">--}}
                            {{--<label class="form-check-label">--}}
                                {{--<input class="form-check-input" name="order_time" type="checkbox" id="inlineCheckbox2" value="option1"> с 13 до 16 ч.--}}
                            {{--</label>--}}
                        {{--</div>--}}
                        {{--<div class="form-check form-check-inline">--}}
                            {{--<label class="form-check-label">--}}
                                {{--<input class="form-check-input" name="order_time" type="checkbox" id="inlineCheckbox3" value="option1"> с 16 до 19 ч.--}}
                            {{--</label>--}}
                        {{--</div>--}}
                        {{--<div class="form-check form-check-inline">--}}
                            {{--<label class="form-check-label">--}}
                                {{--<input class="form-check-input" name="order_time" type="checkbox" id="inlineCheckbox4" value="option1"> с 19 до 21 ч.--}}
                            {{--</label>--}}
                        {{--</div>--}}
                    </div>
                </div>
                <h4 class="mb-3">Адрес доставки</h4>
                <p class="shrift-ton">Укажите адрес доставки</p>
                <div class="row mb-4">
                    <div class="col">
                        <label for="city">Город <span style="color: red;">*</span></label>
                        <input type="text" name="city" class="form-control" placeholder="Ваш город" id="city" required>
                    </div>
                    <div class="col">
                        <label for="street">Улица <span style="color: red;">*</span></label>
                        <input type="text" name="street" class="form-control" placeholder="Ваша улица" id="street" required>
                    </div>
                    <div class="col">
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
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                    <span class="srift-ton">Оплата наличными при доставке</span>
                                </label><br>
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option1">
                                    <span class="srift-ton">Оплата онлайн по карте</span>
                                </label>
                            </li>
                        </ul>
                    </div>
                </div>
                <input type="hidden" value="{{ Session::get('cart')->totalPrice }}" name="totalPrice">
                <div class="row">
                    <div class="col d-flex justify-content-end mx-auto mt-3">
                        <button type="submit" class="btn btn-outline-dark ali">Оформить заказ</button>
                    </div>
                </div>

            </form>

        </div>
    </content>

@endsection