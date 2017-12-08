@extends('layouts.app')
@section('title', 'Заказать букет')
@section('content')

    <div class="container py-5">
        @foreach($vids as $vid)
            @if($vid->id == 1)
                <h2 class="mb-3">{{ $vid->name }}</h2>
            @endif
        @endforeach
        <div class="row">
            @foreach($tproducts as $product)
                    @if($product->status == 1 && $product->vid_id == 1)
                        <div class="col-3 mb-3 div1">
                            <div class="card bg-dark text-white  text-center" style="border: 0px;">
                                <img class="card-img " src="/uploads/products/{{ $product->image_path }}" alt="Card image">
                                <div class="card-img-overlay">
                                    <h4 class="card-title mt-5">{{ $product->cost }} сом</h4>
                                    <p class="card-text">{{ $product->desc }}</p>
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
        @foreach($vids as $vid)
            @if($vid->id == 2)
                <h2 class="mb-3" >{{ $vid->name }}</h2>
            @endif
        @endforeach
        <div class="row">
            @foreach($tproducts as $product)
                    @if($product->status == 1 && $product->vid_id == 2)
                        <div class="col-3 mb-3">
                            <div class="card bg-dark text-white  text-center" style="border: 0px;">
                                <img class="card-img " src="/uploads/products/{{ $product->image_path }}" alt="Card image">
                                <div class="card-img-overlay">
                                    <h4 class="card-title mt-5">{{ $product->cost }} сом</h4>
                                    <p class="card-text">{{ $product->desc }}</p>
                                </div>
                                <div class="col d-flex justify-content-center">
                                    <a href="{{ $product->id }}" id="{{ $product->id }}" class="zakazat btn btn-pos btn-labflower text-dark">Заказать</a>
                                </div>

                            </div>

                        </div>
                    @endif
            @endforeach
        </div>
    </div>

    <div class="container py-5">
        @foreach($vids as $vid)
            @if($vid->id == 3)
                <h2 class="mb-3">{{ $vid->name }}</h2>
            @endif
        @endforeach
        <div class="row">
            @foreach($tproducts as $product)
                    @if($product->status == 1 && $product->vid_id == 3)
                        <div class="col-3 mb-3">
                            <div class="card bg-dark text-white  text-center" style="border: 0px;">
                                <img class="card-img " src="/uploads/products/{{ $product->image_path }}" alt="Card image">
                                <div class="card-img-overlay">
                                    <h4 class="card-title mt-5">{{ $product->cost }} сом</h4>
                                    <p class="card-text">{{ $product->desc }}</p>
                                </div>
                                <div class="col d-flex justify-content-center">
                                    <a href="{{ $product->id }}" id="{{ $product->id }}" class="zakazat btn btn-pos btn-labflower text-dark">Заказать</a>
                                </div>

                            </div>

                        </div>
                    @endif
            @endforeach
        </div>
    </div>

@endsection