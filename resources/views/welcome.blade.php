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
        <!--<div class="container">-->
        <div class="row card-body slaider">

            <div class="col-3 md-4 py-0">

                <img class ="rounded-circle w-100" src="./fiesta_img/6.jpg" alt="Card image">

            </div>
            <div class="col-3 md-4 py-0">

                <img class ="rounded-circle w-100" src="./fiesta_img/9.jpg" alt="Card image">

            </div>


            <div class="col-3 md-4 py-0">

                <img class ="rounded-circle w-100" src="./fiesta_img/6.jpg" alt="Card image">

            </div>
            <div class="col-3 md-4 py-0">

                <img class ="rounded-circle w-100" src="./fiesta_img/9.jpg" alt="Card image">

            </div>
            <div class="col-3 md-4 py-0">

                <img class ="rounded-circle w-100" src="./fiesta_img/6.jpg" alt="Card image">

            </div>
            <div class="col-3 md-4 py-0">

                <img class ="rounded-circle w-100" src="./fiesta_img/9.jpg" alt="Card image">

            </div>


        </div>
        <div class="row ">

            <div class="col-auto mx-auto">
                <ul class="nav">
                    <li class="nav-item preve"><i class="fa fa-arrow-left"></i></li>
                    <li class="nav-item nexte"><i class="fa fa-arrow-right"></i></li>
                </ul>
            </div>

        </div>
        <!-- </div>-->
    </section>
    <section class="py-5">
        <!--<div class="container">-->
        <div class="h3 text-center mb-3 text-family">Подарочные боксы</div>


        <div class="row card-body autoplay">


            <div class="col-3 md-4">

                <img class ="rounded-circle w-100" src="./fiesta_img/3.jpg" alt="Card image">

            </div>
            <div class="col-3 md-4">

                <img class ="rounded-circle w-100" src="./fiesta_img/2.jpg" alt="Card image">

            </div>
            <div class="col-3 md-4">

                <img class ="rounded-circle w-100" src="./fiesta_img/3.jpg" alt="Card image">

            </div>
            <div class="col-3 md-4 ">

                <img class ="rounded-circle w-100" src="./fiesta_img/4.jpg" alt="Card image">

            </div>
            <div class="col-3 md-4">

                <img class ="rounded-circle w-100" src="./fiesta_img/2.jpg" alt="Card image">

            </div>
            <div class="col-3 md-4 ">

                <img class ="rounded-circle w-100" src="./fiesta_img/4.jpg" alt="Card image">

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

        <!--</div>-->
    </section>

@endsection