@extends('layouts.app')
@section('title', 'Корзина')
@section('content')
    <div class="container">
        @if($products)
            <div class="row text-center p-3">
                <div class="col-1">
                </div>
                <div class="col-4">
                    Товар
                </div>
                <div class="col-2">
                    Цена
                </div>
                <div class="col-1">
                    Количество
                </div>
                <div class="col-2">
                    Сумма
                </div>
                <div class="col-1">
                    Удалить
                </div>
            </div>
        @endif
        @if($products)
            @foreach($products as $product)
                <div class="row align-items-center border bg-dark text-light rounded text-center p-3">
                    <div class="col-1">
                        <img class="w-100 rounded-circle" src="/uploads/products/{{ $product['item']['image_path'] }}" alt="" >
                    </div>
                    <div class="col-4">
                        {{ $product['item']['name'] }}
                    </div>
                    <div class="col-2">
                        {{ $product['item']['cost'] }} сом
                    </div>
                    <div class="col-auto">
                        <a href="/remove-from-cart/{{ $product['item']['id'] }}" class="p-2 font-weight-bold bg-danger text-light">-</a>
                        <span class="mx-1">{{ $product['qty'] }}</span>
                        <a href="/add-to-cart/{{ $product['item']['id'] }}" class="p-2 font-weight-bold bg-success text-light">+</a>
                    </div>
                    <div class="col-2">
                        {{ $product['price'] }} сом
                    </div>
                    <div class="col-1">
                        <a href="/delete-from-cart/{{ $product['item']['id'] }}"  class="btn btn-danger">
                            <i class="fa fa-times" aria-hidden="true"></i>
                        </a>
                    </div>
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