@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @if(Session::has('cart'))
                <div class="col-8 mx-auto">
                    <p>Корзина</p>
                    @foreach($products as $product)
                        <div class="row">
                            <div class="col-auto">
                                {{ $product['item']['name'] }}
                            </div>
                            <div class="col-auto">
                                {{ $product['qty'] }}
                            </div>
                        </div>
                    @endforeach

                    <br>
                    <p>Итого: </p> <p>{{ $totalPrice }}</p>
                </div>
            @else
                <p>Корзина пуста</p>
            @endif
        </div>
    </div>

@endsection