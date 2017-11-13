@extends('layouts.admin')
    @section('content-admin')
        <div class="row">
            <div class="col-2">
                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" >
                        {{ csrf_field() }}
                        <button type="submit">Выйти</button>
                    </form>
                    <a href="" class="col-5"><img class="w-100" src="{{ asset('fiesta_img/logo-flower.png') }}" alt="image"><h5 class="flower text-dark">Fiesta flower</h5></a>
                    <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Товары</a>
                    <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Тип товара</a>
                    <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Размер товара</a>
                    <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Курьеры</a>
                    <a class="nav-link" id="v-pills-button5-tab" data-toggle="pill" href="#v-pills-button5" role="tab" aria-controls="v-pills-button5" aria-selected="false">VIP - клиенты</a>
                </div>
            </div>
            <div class="col-10">
                <!-- <div class="container">-->


                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">

                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-success py-3" data-toggle="modal" data-target="#modalproduct">
                            Создать букет
                        </button>

                        <div class="pt-5">

                            @foreach($products as $product)

                                <div class="row align-items-center border bg-dark rounded p-3">
                                    <div class="col-2">
                                        <img class="rad" src="./fiesta_img/1.jpg" alt="">
                                    </div>
                                    <div class="col-3">
                                        <label>{{ $product->name }}</label>
                                    </div>
                                    <div class="col-3">
                                        <p>{{ $product->desc }}</p>
                                    </div>
                                    <div class="col-2">
                                        <p>{{ $product->cost }}</p>
                                    </div>
                                    <div class="col-2">
                                        <button type="submit" class="btn btn-outline-info" data-toggle="modal" data-target="#modalupproduct">
                                            <i class="fa fa-cog" aria-hidden="true"></i>
                                        </button>
                                        <a href="/delete/product/{{ $product->id }}" type="button"   class="btn btn-outline-danger">
                                            <i class="fa fa-times" aria-hidden="true"></i>
                                        </a>
                                    </div>

                                </div>

                            @endforeach

                        </div>


                    </div>




                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                        <button type="button" class="btn btn-primary ml-auto" data-toggle="modal" data-target="#modaltype">
                            Создать тип
                        </button>

                        <div class="pt-5">

                            @foreach($types as $type)

                                <div class="row align-items-center border bg-dark rounded p-3">
                                    <div class="col-2">
                                        <img class="rad" src="./fiesta_img/1.jpg" alt="">
                                    </div>
                                    <div class="col">
                                        <p>{{ $type->name }}</p>
                                    </div>
                                    <div class="col">
                                        <button type="button" class="btn btn-outline-info">
                                            <i class="fa fa-cog" aria-hidden="true"></i>
                                        </button>
                                        <button type="button" class="btn btn-outline-danger">
                                            <i class="fa fa-times" aria-hidden="true"></i>
                                        </button>
                                    </div>

                                </div>
                            @endforeach

                        </div>
                    </div>


                    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                        <button type="button" class="btn btn-primary ml-auto" data-toggle="modal" data-target="#modalsize">
                            Создать размер
                        </button>

                        <div class="pt-5">

                            @foreach($sizes as $size)

                                <div class="row align-items-center border bg-dark rounded p-3">
                                    <div class="col-2">
                                        <img class="rad" src="./fiesta_img/1.jpg" alt="">
                                    </div>
                                    <div class="col">
                                        <p>{{ $size->name }}</p>
                                    </div>
                                    <div class="col">
                                        <button type="button" class="btn btn-outline-info">
                                            <i class="fa fa-cog" aria-hidden="true"></i>
                                        </button>
                                        <button type="button" class="btn btn-outline-danger">
                                            <i class="fa fa-times" aria-hidden="true"></i>
                                        </button>
                                    </div>

                                </div>
                            @endforeach

                        </div>
                    </div>

                    <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                        <button type="button" class="btn btn-primary ml-auto" data-toggle="modal" data-target="#modaldeliv">
                            Новый курьер
                        </button>

                        <div class="pt-5">

                            @foreach($deliveries as $delivery)

                                <div class="row align-items-center border bg-dark rounded p-3">
                                    <div class="col-2">
                                        <img class="rad" src="./fiesta_img/1.jpg" alt="">
                                    </div>
                                    <div class="col">
                                        <p>{{ $delivery->name }}</p>
                                    </div>
                                    <div class="col">
                                        <p>{{ $delivery->cost }}</p>
                                    </div>
                                    <div class="col">
                                        <button type="button" class="btn btn-outline-info">
                                            <i class="fa fa-cog" aria-hidden="true"></i>
                                        </button>
                                        <button type="button" class="btn btn-outline-danger">
                                            <i class="fa fa-times" aria-hidden="true"></i>
                                        </button>
                                    </div>

                                </div>
                            @endforeach

                        </div>
                    </div>

                    <div class="tab-pane fade" id="v-pills-button5" role="tabpanel" aria-labelledby="v-pills-button5-tab">
                        <button type="button" class="btn btn-primary ml-auto" data-toggle="modal" data-target="#modalvip">
                            Новый VIP - клиент
                        </button>

                        <div class="pt-5">

                            @foreach($vips as $vip)

                                <div class="row align-items-center border bg-dark rounded p-3">
                                    <div class="col-2">
                                        <img class="rad" src="./fiesta_img/1.jpg" alt="">
                                    </div>
                                    <div class="col">
                                        <p>{{ $vip->name }}</p>
                                    </div>
                                    <div class="col">
                                        <p>{{ $vip->phone_number }}</p>
                                    </div>
                                    <div class="col">
                                        <p>{{ $vip->address }}</p>
                                    </div>
                                    <div class="col">
                                        <p>{{ $vip->discount }}</p>
                                    </div>
                                    <div class="col">
                                        <button type="button" class="btn btn-outline-info">
                                            <i class="fa fa-cog" aria-hidden="true"></i>
                                        </button>
                                        <button type="button" class="btn btn-outline-danger">
                                            <i class="fa fa-times" aria-hidden="true"></i>
                                        </button>
                                    </div>

                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
            <!--</div>-->
        </div>

        @include('modals.product')
        @include('modals.upproduct')
        @include('modals.type')
        @include('modals.size')
        @include('modals.delivery')
        @include('modals.vip')



    @endsection