@extends('layouts.app')
@section('title', 'Заказать букет')
@section('content')



        @foreach($sizes as $size)
            <div class="container py-5">
            <h2 class="mb-3">{{ $size->name }}</h2>

                <div class="row">
                    @foreach($tproducts as $product)
                        @if($product->status == 1 && $product->size_id == $size->id)
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
        @endforeach





        {{--@foreach($vids as $vid)--}}
            {{--<div class="container py-5">--}}
            {{--<h2 class="mb-3">{{ $vid->name }}</h2>--}}

            {{--<div class="row">--}}
                {{--@foreach($tproducts as $product)--}}
                        {{--@if($product->status == 1 && $product->vid_id == $vid->id)--}}
                            {{--<div class="col-3 mb-3 div1">--}}
                                {{--<div class="card bg-dark text-white  text-center" style="border: 0px;">--}}
                                    {{--<img class="card-img " src="/uploads/products/{{ $product->image_path }}" alt="Card image">--}}
                                    {{--<div class="card-img-overlay">--}}
                                        {{--<h4 class="card-title mt-5">{{ $product->cost }} сом</h4>--}}
                                        {{--<p class="card-text">{{ $product->desc }}</p>--}}
                                    {{--</div>--}}
                                    {{--<div class="col d-flex justify-content-center">--}}
                                        {{--<a href="{{ $product->id }}" id="{{ $product->id }}" class="onetwo zakazat btn btn-pos btn-labflower text-dark">Заказать</a>--}}
                                    {{--</div>--}}

                                {{--</div>--}}

                            {{--</div>--}}
                        {{--@endif--}}
                {{--@endforeach--}}
            {{--</div>--}}
            {{--</div>--}}
        {{--@endforeach--}}



    {{--<div class="container py-5">--}}
        {{--<h2 class="mb-3">Основные</h2>--}}
            {{--<div class="row">--}}
                {{--@foreach($tproducts as $product)--}}
                    {{--@if($product->status == 1 && $product->vid_id == 0)--}}
                        {{--<div class="col-3 mb-3 div1">--}}
                            {{--<div class="card bg-dark text-white  text-center" style="border: 0px;">--}}
                                {{--<img class="card-img " src="/uploads/products/{{ $product->image_path }}" alt="Card image">--}}
                                {{--<div class="card-img-overlay">--}}
                                    {{--<h4 class="card-title mt-5">{{ $product->cost }} сом</h4>--}}
                                    {{--<p class="card-text">{{ $product->desc }}</p>--}}
                                {{--</div>--}}
                                {{--<div class="col d-flex justify-content-center">--}}
                                    {{--<a href="{{ $product->id }}" id="{{ $product->id }}" class="onetwo zakazat btn btn-pos btn-labflower text-dark">Заказать</a>--}}
                                {{--</div>--}}

                            {{--</div>--}}

                        {{--</div>--}}
                    {{--@endif--}}
                {{--@endforeach--}}
            {{--</div>--}}

    {{--</div>--}}



@endsection