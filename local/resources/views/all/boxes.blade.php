@extends('layouts.app')
@section('title', 'Подарочные боксы')
@section('content')


    <div class="container py-5">
        <h2 class="mb-3">Популярные</h2>

        <div class="row">
            @foreach($tproducts as $product)
                @if($product->status == 1 && $product->vid_id == 6 && $product->type_id == 4)
                    <div class="col-3 mb-3 div1">
                        <div class="card bg-dark text-white  text-center" style="border: 0px;">
                            <img class="card-img " src="/uploads/products/{{ $product->image_path }}" alt="Card image">
                            <div class="card-img-overlay">
                                <h4 class="card-title mt-5"><span>{{ $product->cost }}</span> сом</h4>
                                <p class="card-text">{{ $product->name }}</p>
                            </div>
                            <div class="col d-flex justify-content-center">
                                <a href="{{ $product->id }}" id="{{ $product->id }}" class="onetwo zakazat btn btn-pos btn-labflower text-dark">Заказать</a>
                            </div>

                        </div>

                    </div>
                @endif
            @endforeach
        </div>
    </div>

    <div class="container py-5">
        <h2 class="mb-3">Все боксы</h2>
        <div class="row">
            @foreach($tproducts as $product)
                @if($product->status == 1)
                    <div class="col-3 mb-3 div1">
                        <div class="card bg-dark text-white  text-center" style="border: 0px;">
                            <img class="card-img " src="/uploads/products/{{ $product->image_path }}" alt="Card image">
                            <div class="card-img-overlay">
                                <h4 class="card-title mt-5"><span>{{ $product->cost }}</span> сом</h4>
                                <p class="card-text">{{ $product->name }}</p>
                            </div>
                            <div class="col d-flex justify-content-center">
                                <a href="{{ $product->id }}" id="{{ $product->id }}" class="onetwo zakazat btn btn-pos btn-labflower text-dark">Заказать</a>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>

@endsection