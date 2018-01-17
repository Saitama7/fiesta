@extends('layouts.app')
@section('title', 'Корзина')
@section('content')
    <div class="container  d-xl-block d-sm-block">
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
                    {{--<div class="col-4">--}}
                        {{--<img class="w-100 rounded-circle" src="/uploads/products/{{ $product['item']['image_path'] }}" alt="" >--}}
                    {{--</div>--}}
                    {{--<div class="col-auto">--}}
                        {{--{{ $product['item']['name'] }}--}}
                    {{--</div>--}}
                    {{--<div class="col-2 d-none">--}}
                        {{--{{ $product['item']['cost'] }} сом--}}
                    {{--</div>--}}
                    {{--<div class="col-auto">--}}
                        {{--<a href="/remove-from-cart/{{ $product['item']['id'] }}" class="p-2 font-weight-bold bg-danger text-light">-</a>--}}
                        {{--<span class="mx-1">{{ $product['qty'] }}</span>--}}
                        {{--<a href="/add-to-cart/{{ $product['item']['id'] }}" class="p-2 font-weight-bold bg-success text-light">+</a>--}}
                    {{--</div>--}}
                    {{--<div class="col-auto">--}}
                        {{--{{ $product['price'] }} сом--}}
                    {{--</div>--}}
                    {{--<div class="col-12">--}}
                        {{--<a href="/delete-from-cart/{{ $product['item']['id'] }}"  class="btn btn-danger">--}}
                            {{--<i class="fa fa-times" aria-hidden="true"></i>--}}
                        {{--</a>--}}
                    {{--</div>--}}
                </div>
            @endforeach
        @endif
        @if($products)
            <div class="row">
                <div class="col d-flex justify-content-end mx-auto mt-3">
                    <b style="font-size: 18px;">Итого: <span class="totalPrice">{{ $totalPrice }}</span> сом</b>
                </div>
            </div>
            <div class="row">
                <div class="col d-flex justify-content-end mx-auto my-5">
                    <button type="button" class="btn btn-outline-dark ali" data-toggle="modal" data-target="#validatevip">Оформление заказа</button>
                </div>
            </div>
        @else
            <div class="row justify-content-center py-5">
                <h2>Ваша корзина пуста!</h2>
            </div>
            <div class="row justify-content-center">
                <a href="/" class="btn btn-success">Перейти в покупки</a>
            </div>
        @endif
    </div>

@include('modals.validatevip')
@endsection