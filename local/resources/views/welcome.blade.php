@extends('layouts.app')
@section('title', 'Главная')
@section('description')
    Интернет-магазин цветов FIESTA FLOWERS. Доставка по Бишкеку и пригороду. Оформление праздников и свадеб. Букеты на заказ и в наличии от 350 сом. +996 (550) 806-000
@stop
@section('content')
    @if (session('status'))
        <div  class="alert al-s">
            <div class="p-5">
                <div class="" style="position:absolute; right:80px;">
                    <a href="#" class="close text-white" style="opacity: 1;" data-dismiss="alert" aria-label="close">&times;</a>
                </div>
                <img src="fiesta_img/435019.jpg" class="img-fluid" alt="">
            </div>
        </div>
    @endif
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
                        <div class="col-md-3 col-xs-6 col-sm-6 mb-3 div1">
                            <div class="card  bg-dark text-white rounded-circle  text-center" style="border: 0px;">
                                <img class="card-img rounded-circle " src="/uploads/products/{{ $flower->image_path }}" alt="Card image">
                                <div class="card-img-overlay rounded-circle d-none">
                                    <h4 class="card-title mt-5"><span>{{ $flower->cost }}</span> сом</h4>
                                    <p class="card-text">{{ $flower->name }}</p>
                                </div>
                            </div>
                            <div class="col d-flex justify-content-center">
                                <a href="{{ $flower->id }}" id="{{ $flower->id }}" class="onetwo zakazat btn btn-pos btn-labflower text-dark">Заказать</a>
                            </div>
                            <div class="text-dark text-center">
                                <h4 class=" mt-3" style="font-family: 'Lobster', cursive;"><span class="" >{{ $flower->cost }}</span> сом</h4>
                                <p class="">{{ $flower->name }}</p>
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
                                    <h4 class="card-title mt-5"><span>{{ $box->cost }}</span> сом</h4>
                                    <p class="card-text">{{ $box->name }}</p>
                                </div>
                                <div class="col d-flex justify-content-center">
                                    <a href="{{ $box->id }}" id="{{ $box->id }}" class="onetwo zakazat btn btn-pos btn-labflower text-dark">Заказать</a>
                                </div>
                            </div>
                            <div class="text-dark text-center">
                                <h4 class=" mt-3" style="font-family: 'Lobster', cursive;"><span class="" >{{ $box->cost }}</span> сом</h4>
                                <p class="">{{ $box->name }}</p>
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