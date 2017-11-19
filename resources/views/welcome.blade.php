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

                    <div class="col-3 mb-3">

                        <div class="card bg-dark text-white rounded-circle  text-center" style="border: 0px;">
                            <img class="card-img rounded-circle " src="/uploads/products/{{ $product->image_path }}" alt="Card image">
                            <div class="card-img-overlay rounded-circle ">
                                <h4 class="card-title mt-5">{{ $product->cost }}</h4>
                                <p class="card-text">{{ $product->desc }}</p>

                            </div>
                        </div>
                        <div class="col d-flex justify-content-center">
                            <a href="{{ $product->id }}" id="{{ $product->id }}" class="zakazat btn btn-pos btn-labflower text-dark">Заказать</a>
                        </div>

                    </div>

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

                <div class="col-3 mb-3">

                    <div class="card bg-dark text-white rounded-circle  text-center" style="border: 0px;">
                        <img class="card-img rounded-circle " src="./fiesta_img/3.jpg" alt="Card image">
                        <div class="card-img-overlay rounded-circle ">
                            <h4 class="card-title mt-5">4000 сом</h4>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>

                        </div>
                        <div class="col d-flex justify-content-center">
                            <a href="#" class="btn btn-pos btn-labflower text-dark">Заказать</a>
                        </div>

                    </div>

                </div>

                <div class="col-3 mb-3">

                    <div class="card bg-dark text-white rounded-circle  text-center" style="border: 0px;">
                        <img class="card-img rounded-circle " src="./fiesta_img/3.jpg" alt="Card image">
                        <div class="card-img-overlay rounded-circle ">
                            <h4 class="card-title mt-5">4000 сом</h4>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>

                        </div>
                        <div class="col d-flex justify-content-center">
                            <a href="#" class="btn btn-pos btn-labflower text-dark">Заказать</a>
                        </div>

                    </div>

                </div>

                <div class="col-3 mb-3">

                    <div class="card bg-dark text-white rounded-circle  text-center" style="border: 0px;">
                        <img class="card-img rounded-circle " src="./fiesta_img/3.jpg" alt="Card image">
                        <div class="card-img-overlay rounded-circle ">
                            <h4 class="card-title mt-5">4000 сом</h4>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>

                        </div>
                        <div class="col d-flex justify-content-center">
                            <a href="#" class="btn btn-pos btn-labflower text-dark">Заказать</a>
                        </div>

                    </div>

                </div>

                <div class="col-3 mb-3">

                    <div class="card bg-dark text-white rounded-circle  text-center" style="border: 0px;">
                        <img class="card-img rounded-circle " src="./fiesta_img/3.jpg" alt="Card image">
                        <div class="card-img-overlay rounded-circle ">
                            <h4 class="card-title mt-5">4000 сом</h4>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>

                        </div>
                        <div class="col d-flex justify-content-center">
                            <a href="#" class="btn btn-pos btn-labflower text-dark">Заказать</a>
                        </div>

                    </div>

                </div>


                <div class="col-3 mb-3">

                    <div class="card bg-dark text-white rounded-circle  text-center" style="border: 0px;">
                        <img class="card-img rounded-circle " src="./fiesta_img/3.jpg" alt="Card image">
                        <div class="card-img-overlay rounded-circle ">
                            <h4 class="card-title mt-5">4000 сом</h4>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>

                        </div>
                        <div class="col d-flex justify-content-center">
                            <a href="#" class="btn btn-pos btn-labflower text-dark">Заказать</a>
                        </div>

                    </div>

                </div>






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