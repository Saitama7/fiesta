@extends('layouts.app')
@section('title', 'Вигвамы')
@section('description')
    Вигвам для детей (типи, teepee, игровой домик, детская палатка) купить в Бишкеке – отличный и практичный подарок для Вашего ребенка. Интернет магазин FIESTA KIDS- вигвамы и аксессуары к ним с доставкой.
@stop
@section('content')
    <div class="container">
        <div class="row pt-5">
            @if(!empty($tproducts))
                @foreach($tproducts as $product)
                    @if($product->status == 1)
                        <div class="col-6 col-md-4 col-lg-3 mb-3 div1">
                            <div class="card bg-dark text-white  text-center" style="border: 0px;">
                                <a data-fancybox="gallery" href="/uploads/products/{{ $product->image_path }}"><img class="card-img" src="/uploads/products/{{ $product->image_path }}" alt="{{ $product->name }}"></a>
                                <div class="card-img-overlay d-none">
                                    {{--<h4 class="card-title mt-5"><span>{{ $product->cost }}</span> сом</h4>--}}
                                    <p class="card-text">{{ $product->name }}</p>
                                </div>
                                <div class="col d-flex justify-content-center">
                                    <a href="{{ $product->id }}" id="{{ $product->id }}" class="onetwo zakazat btn btn-pos btn-labflower text-dark">Заказать</a>
                                </div>
                            </div>
                            <div class="text-dark text-center">
                                {{--<h4 class=" mt-3" style="font-family: 'Lobster', cursive;"><span class="" >{{ $product->cost }}</span> сом</h4>--}}
                                <p class="mt-3">{{ $product->name }}</p>
                            </div>
                        </div>
                    @endif
                @endforeach
            @endif
        </div>
    </div>
@endsection