@extends('layouts.app')

@section('content')

    {{--<div class="container">--}}
        {{--<div class="row">--}}
            {{--@foreach($products as $product)--}}
                {{--<div class="col-3">--}}
                    {{--<p>{{ $product->name }}</p>--}}
                    {{--<a href="/add-to-cart/{{ $product->id }}">Заказать</a>--}}
                {{--</div>--}}
            {{--@endforeach--}}
        {{--</div>--}}
    {{--</div>--}}

    <section class="py-5">
        <div class="h3 text-center mb-3 text-family">Цветы</div>
        <div class="container-fluid">
            <div class="row  slaider">

                @foreach($products as $product)
                    @if($product->type_id == 3 && $product->status == 1 && $product->slide_status == 1)
                        <div class="col-3 mb-3">

                            <div class="card bg-dark text-white rounded-circle  text-center" style="border: 0px;">
                                <img class="card-img rounded-circle " src="/uploads/products/{{ $product->image_path }}" alt="Card image">
                                <div class="card-img-overlay rounded-circle ">
                                    <h4 class="card-title mt-5">{{ $product->cost }} сом</h4>
                                    <p class="card-text">{{ $product->desc }}</p>

                                </div>
                            </div>
                            <div class="col d-flex justify-content-center">
                                <a href="{{ $product->id }}" id="{{ $product->id }}" class="zakazat btn btn-pos btn-labflower text-dark">Заказать</a>
                            </div>

                        </div>
                    @endif
                @endforeach


            </div>
            <div class="row ">

                <div class="col-auto mx-auto">
                    <ul class="nav">
                        <li class="nav-item preve"><i class="fa fa-arrow-left"></i></li>
                        <li class="nav-item nexte"><i class="fa fa-arrow-right"></i></li>
                    </ul>
                </div>

            </div>
        </div>
    </section>
    <section class="py-5">
        <div class="container-fluid">
            <div class="h3 text-center mb-3 text-family">Подарочные боксы</div>


            <div class="row autoplay">

                @foreach($products as $product)
                    @if($product->type_id == 4 && $product->status == 1 && $product->slide_status == 1)
                        <div class="col-3 mb-3">

                            <div class="card bg-dark text-white rounded-circle  text-center" style="border: 0px;">
                                <img class="card-img rounded-circle " src="/uploads/products/{{ $product->image_path }}" alt="Card image">
                                <div class="card-img-overlay rounded-circle ">
                                    <h4 class="card-title mt-5">{{ $product->cost }} сом</h4>
                                    <p class="card-text">{{ $product->desc }}</p>

                                </div>
                                <div class="col d-flex justify-content-center">
                                    <a href="{{ $product->id }}" id="{{ $product->id }}" class="btn btn-pos btn-labflower text-dark">Заказать</a>
                                </div>

                            </div>

                        </div>
                    @endif
                @endforeach

            </div>

            <div class="row ">

                <div class="col-auto mx-auto">
                    <ul class="nav">
                        <li class="nav-item prev"><i class="fa fa-arrow-left"></i></li>
                        <li class="nav-item next"><i class="fa fa-arrow-right"></i></li>
                    </ul>
                </div>

            </div>

        </div>
    </section>

@endsection