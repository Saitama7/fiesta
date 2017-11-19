@extends('layouts.app')

@section('content')

    <div class="container">
        <h1 class="my-5">Оформление Заказа</h1>
        <h4 class='mb-5'>Информация о заказе</h4>
        <h4 class="mb-3">Контактные данные</h4>
        <p class="shrift-ton">Укажите свои контактные данные</p>
        <form action="/">

            <div class="row mb-4">
                <div class="col">
                    <label for="name">Ваше имя <span style="color: red;">*</span></label>
                    <input type="text" class="form-control" placeholder="Ваше Имя" id="name" required>
                </div>
                <div class="col">
                    <label for="phone">Ваш телефон <span style="color: red;">*</span></label>
                    <input type="tel"  pattern="996-[0-9]{3}-[0-9]{3}-[0-9]{3}" class="form-control" placeholder="+996-777-777-777" id="phone" required>
                </div>
            </div>

            <h4 class="mb-3">Дата и время заказа</h4>
            <p class="shrift-ton">Укажите нужную дату и время заказа</p>

            <div class="row mb-4">
                <div class="col">
                    <label for="datepicker">Дата</label>
                    <input id="datepicker" width="276" />

                </div>
                <div class="col justify-content-center">
                    <label class="col p-0" for="inlineCheckbox1">Время <span style="color: red;">*</span></label>
                    <div class="form-check form-check-inline">

                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1"> с 9 до 13 ч.
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option1"> с 13 до 16 ч.
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option1"> с 16 до 19 ч.
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox4" value="option1"> с 19 до 21 ч.
                        </label>
                    </div>
                </div>
            </div>
            <h4 class="mb-3">Адрес доставки</h4>
            <p class="shrift-ton">Укажите адрес доставки</p>
            <div class="row mb-4">
                <div class="col">
                    <label for="city">Город <span style="color: red;">*</span></label>
                    <input type="text" class="form-control" placeholder="Ваш город" id="city" required>
                </div>
                <div class="col">
                    <label for="street">Улица <span style="color: red;">*</span></label>
                    <input type="text" class="form-control" placeholder="Ваша улица" id="street" required>
                </div>
                <div class="col">
                    <label for="home">Дом <span style="color: red;">*</span></label>
                    <input type="text" class="form-control" placeholder="Номер дома" id="home" required>
                </div>
            </div>

            <div class="row mb-4">
                <div class="col">
                    <label for="caption">Подпись</label>
                    <input type="text" class="form-control" placeholder="Что написать на карточке к букету?" id="caption">
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
                            </label>

                        </li>


                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col d-flex justify-content-end mx-auto mt-3">
                    <button type="submit" class="btn btn-outline-dark ali"><a href="index.html">Оформить заказ</a></button>
                </div>
            </div>

        </form>

    </div>

@endsection