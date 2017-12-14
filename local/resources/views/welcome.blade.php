@extends('layouts.app')
@section('title', 'Главная')
@section('content')

    @foreach($apps as $app)
        <div class="banner">
            <img src="/uploads/banners/{{ $app->img_path }}" alt="">
        </div>
    @endforeach

    <section class="py-5">
        <div class="h3 text-center mb-3 text-family">Цветы</div>
        <div class="container-fluid">
            <div class="row  slaider">

                @foreach($flowers as $flower)
                    @if($flower->type_id == 3 && $flower->status == 1 && $flower->slide_status == 1)
                        <div class="col-3 mb-3 div1">

                            <div class="card  bg-dark text-white rounded-circle  text-center" style="border: 0px;">
                                <img class="card-img rounded-circle " src="/uploads/products/{{ $flower->image_path }}" alt="Card image">
                                <div class="card-img-overlay rounded-circle ">
                                    <h4 class="card-title mt-5">{{ $flower->cost }} сом</h4>
                                    <p class="card-text">{{ $flower->desc }}</p>

                                </div>
                            </div>
                            <div class="col d-flex justify-content-center">
                                <a href="{{ $flower->id }}" id="{{ $flower->id }}" class="onetwo zakazat btn btn-pos btn-labflower text-dark">Заказать</a>
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

                @foreach($boxes as $box)
                    @if($box->type_id == 4 && $box->status == 1 && $box->slide_status == 1)
                        <div class="col-3 mb-3 div1">

                            <div class="card bg-dark text-white rounded-circle  text-center" style="border: 0px;">
                                <img class="card-img rounded-circle " src="/uploads/products/{{ $box->image_path }}" alt="Card image">
                                <div class="card-img-overlay rounded-circle ">
                                    <h4 class="card-title mt-5">{{ $box->cost }} сом</h4>
                                    <p class="card-text">{{ $box->desc }}</p>

                                </div>
                                <div class="col d-flex justify-content-center">

                                    <a href="{{ $box->id }}" id="{{ $box->id }}" class="onetwo zakazat btn btn-pos btn-labflower text-dark">Заказать</a>
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