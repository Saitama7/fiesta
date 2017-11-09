@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            @foreach($products as $product)
                <div class="col-3">
                    <p>{{ $product->name }}</p>
                    <a href="/add-to-cart/{{ $product->id }}">Заказать</a>
                </div>
            @endforeach
        </div>
    </div>

@endsection