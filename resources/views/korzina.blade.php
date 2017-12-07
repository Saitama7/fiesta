@extends('layouts.app')
@section('title', 'Корзина')
@section('content')

    <div class="container">
        <div class="row text-center p-3">
            <div class="col-2">

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
                Итог
            </div>
            <div class="col-1">
                Удалить
            </div>
        </div>
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
        <div class="row">
            <div class="col d-flex justify-content-end mx-auto my-5">
                <button type="button" class="btn btn-outline-dark ali"><a href="/order">Оформление заказа</a></button>
            </div>
        </div>
    </div>

@endsection