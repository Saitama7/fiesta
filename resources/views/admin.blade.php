@extends('layouts.admin')
@section('title', 'Административная панель')
    @section('content-admin')
        <div class="row ml-0 mr-0">
            <div class="col-2">
                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a href="" class="col-5"><img class="w-100" src="{{ asset('fiesta_img/logo-flower.png') }}" alt="image"><h5 class="flower text-dark">Fiesta flower</h5></a>
                    <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Товары</a>
                    <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Тип товара</a>
                    <a class="nav-link" id="v-pills-vid-tab" data-toggle="pill" href="#v-pills-vid" role="tab" aria-controls="v-pills-profile" aria-selected="false">Вид Букета</a>
                    <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Категории</a>
                    <a class="nav-link" id="v-pills-interval-tab" data-toggle="pill" href="#v-pills-intervals" role="tab" aria-controls="v-pills-intervals" aria-selected="false">Диапазон времени</a>
                    <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Курьеры</a>
                    <a class="nav-link" id="v-pills-button5-tab" data-toggle="pill" href="#v-pills-button5" role="tab" aria-controls="v-pills-button5" aria-selected="false">VIP - клиенты</a>
                    <a class="nav-link" id="v-pills-background-tab" data-toggle="pill" href="#v-pills-background" role="tab" aria-controls="v-pills-mainpage" aria-selected="false">Главный фон</a>
                    <a class="nav-link" id="v-pills-orders-tab" data-toggle="pill" href="#v-pills-orders" role="tab" aria-controls="v-pills-orders" aria-selected="false">Заказы</a>
                </div>
            </div>
            <div class="col-10">
                <!-- <div class="container">-->


                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">

                        <!-- Button trigger modal -->
                        <button type="button" id="prodbtn" class="btn btn-success py-3 mt-2" data-toggle="modal" data-target="#modalProduct">
                            Создать товар
                        </button>

                        <form id="logout-form" class="pull-right" action="{{ route('logout') }}" method="POST" >
                            {{ csrf_field() }}
                            <button class="btn btn-secondary mt-2" type="submit">Выйти</button>
                        </form>

                        <div class="pt-5">

                                <table class="table table-bordered table-hover table-light">
                                    <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Картина</th>
                                        <th scope="col">Наименование</th>
                                        <th scope="col">Цена</th>
                                        <th scope="col">Тип</th>
                                        <th scope="col">Описание</th>
                                        <th scope="col">Категория</th>
                                        <th scope="col">Видим</th>
                                        <th scope="col">Слайд</th>
                                    </tr>
                                    </thead>
                                    @foreach($products as $product)
                                        <tbody>
                                        <tr>
                                            <th scope="row" class="align-middle">{{ $product->id }}</th>
                                            <td><img class="img-thumbnail" src="/uploads/products/{{ $product->image_path }}" alt=""></td>
                                            <td class="align-middle">{{ $product->name }}</td>
                                            <td class="align-middle">{{ $product->cost }} сом</td>
                                            @foreach($types as $type)
                                                @if($product->type_id == $type->id)
                                                    <td class="align-middle" value="{{ $product->type_id }}">{{ $type->name }}</td>
                                                @endif
                                            @endforeach
                                            <td class="align-middle">{{ $product->desc }}</td>
                                            @foreach($sizes as $size)
                                                @if($product->size_id == $size->id)
                                                    <td class="align-middle">{{ $size->name }}</td>
                                                @endif
                                            @endforeach

                                                @if($product->status == 1)
                                                    <td class="align-middle">Да</td>
                                                @else
                                                <td class="align-middle">Нет</td>
                                                @endif

                                            @if($product->slide_status == 1)
                                                <td class="align-middle">Да</td>
                                            @else
                                                <td class="align-middle">Нет</td>
                                            @endif
                                            <td class="align-middle">
                                                <button onclick="give(this.id)" type="submit" class="btn btn-outline-info"  data-toggle="modal" data-target="#modalupproduct">
                                                    <i class="fa fa-cog" aria-hidden="true"></i>
                                                </button>
                                            </td>
                                            <td class="align-middle">
                                                <a href="/delete/product/{{ $product->id }}" type="button"   class="btn btn-outline-danger">
                                                    <i class="fa fa-times" aria-hidden="true"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        </tbody>
                                    @endforeach
                                </table>

                        </div>

                    </div>


                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                        <button type="button" class="btn btn-primary ml-auto" data-toggle="modal" data-target="#modaltype">
                            Создать тип
                        </button>

                        <div class="pt-5">

                            <table class="table table-bordered table-hover table-light">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Наименование</th>
                                </tr>
                                </thead>
                                @foreach($types as $type)
                                    <tbody>
                                    <tr>
                                        <th scope="row" class="align-middle">{{ $type->id }}</th>
                                        <td class="align-middle col">{{ $type->name }}</td>
                                        <td class="align-middle col">
                                            <button type="button" class="btn btn-outline-info float-left" data-toggle="modal" data-id="{{ $type->id }}">
                                                <i class="fa fa-cog" aria-hidden="true"></i>
                                            </button>
                                        </td>
                                        <td class="align-middle col">
                                            <a href="/delete/type/{{ $type->id }}" type="button"   class="btn btn-outline-danger float-left">
                                                <i class="fa fa-times" aria-hidden="true"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    </tbody>
                                @endforeach
                            </table>

                        </div>
                    </div>

                    <div class="tab-pane fade" id="v-pills-vid" role="tabpanel" aria-labelledby="v-pills-vid-tab">
                        <button type="button" class="btn btn-primary ml-auto" data-toggle="modal" data-target="#modalvid">
                            Создать вид букета
                        </button>

                        <div class="pt-5">

                            <table class="table table-bordered table-hover table-light">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Наименование</th>
                                </tr>
                                </thead>
                                @foreach($vids as $vid)
                                    <tbody>
                                    <tr>
                                        <th scope="row" class="align-middle">{{ $vid->id }}</th>
                                        <td class="align-middle col">{{ $vid->name }}</td>
                                        <td class="align-middle col">
                                            <button type="button" class="btn btn-outline-info float-left" data-toggle="modal" data-id="{{ $vid->id }}">
                                                <i class="fa fa-cog" aria-hidden="true"></i>
                                            </button>
                                        </td>
                                        <td class="align-middle col">
                                            <a href="/delete/vid/{{ $vid->id }}" type="button"   class="btn btn-outline-danger float-left">
                                                <i class="fa fa-times" aria-hidden="true"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    </tbody>
                                @endforeach
                            </table>

                        </div>
                    </div>


                    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                        <button type="button" class="btn btn-primary ml-auto" data-toggle="modal" data-target="#modalsize">
                            Создать категорию
                        </button>

                        <div class="pt-5">

                            <table class="table table-bordered table-hover table-light">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Наименование</th>
                                    </tr>
                                </thead>
                                @foreach($sizes as $size)
                                    <tbody>
                                    <tr>
                                        <th scope="row" class="align-middle">{{ $size->id }}</th>
                                        <td class="align-middle col">{{ $size->name }}</td>
                                        <td class="align-middle col">
                                            <button type="submit" class="btn btn-outline-info float-left" data-toggle="modal" data-target="#modalupsize" data-id="{{ $size->id }}">
                                                <i class="fa fa-cog" aria-hidden="true"></i>
                                            </button>
                                        </td>
                                        <td class="align-middle col">
                                            <a href="/delete/size/{{ $size->id }}" type="button"   class="btn btn-outline-danger float-left">
                                                <i class="fa fa-times" aria-hidden="true"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    </tbody>
                                @endforeach
                            </table>

                        </div>
                    </div>

                    <div class="tab-pane fade" id="v-pills-intervals" role="tabpanel" aria-labelledby="v-pills-intervals-tab">
                        <button type="button" class="btn btn-primary ml-auto" data-toggle="modal" data-target="#modaltime">
                            Создать диапазон времени
                        </button>

                        <div class="pt-5">

                            <table class="table table-bordered table-hover table-light">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Диапазон</th>
                                </tr>
                                </thead>
                                @foreach($order_times as $time)
                                    <tbody>
                                    <tr>
                                        <th scope="row" class="align-middle">{{ $time->id }}</th>
                                        <td class="align-middle col">{{ $time->interval }}</td>
                                        <td class="align-middle col">
                                            <button type="submit" class="btn btn-outline-info float-left" data-toggle="modal" data-target="#modalupsize" data-id="{{ $time->id }}">
                                                <i class="fa fa-cog" aria-hidden="true"></i>
                                            </button>
                                        </td>
                                        <td class="align-middle col">
                                            <a href="/delete/time/{{ $time->id }}" type="button"   class="btn btn-outline-danger float-left">
                                                <i class="fa fa-times" aria-hidden="true"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    </tbody>
                                @endforeach
                            </table>

                        </div>
                    </div>

                    <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                        <button type="button" class="btn btn-primary ml-auto" data-toggle="modal" data-target="#modaldeliv">
                            Новый курьер
                        </button>

                        <div class="pt-5">

                            <table class="table table-bordered table-hover table-light">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Наименование</th>
                                        <th scope="col">Цена</th>
                                    </tr>
                                </thead>
                                @foreach($deliveries as $delivery)
                                    <tbody>
                                    <tr>
                                        <th scope="row" class="align-middle">{{ $delivery->id }}</th>
                                        <td class="align-middle col">{{ $delivery->name }}</td>
                                        <td class="align-middle col">{{ $delivery->cost }}</td>
                                        <td class="align-middle col">
                                            <button type="submit" class="btn btn-outline-info float-left" data-toggle="modal" data-target="#modalupdeliv" data-id="{{ $delivery->id }}">
                                                <i class="fa fa-cog" aria-hidden="true"></i>
                                            </button>
                                        </td>
                                        <td class="align-middle col">
                                            <a href="/delete/delivery/{{ $delivery->id }}" type="button"   class="btn btn-outline-danger float-left">
                                                <i class="fa fa-times" aria-hidden="true"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    </tbody>
                                @endforeach
                            </table>

                        </div>
                    </div>

                    <div class="tab-pane fade" id="v-pills-button5" role="tabpanel" aria-labelledby="v-pills-button5-tab">
                        <button type="button" class="btn btn-primary ml-auto" data-toggle="modal" data-target="#modalvip">
                            Новый VIP - клиент
                        </button>

                        <div class="pt-5">

                            <table class="table table-bordered table-hover table-light">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">ФИО</th>
                                        <th scope="col">Номер телефона</th>
                                        <th scope="col">Адрес</th>
                                        <th scope="col">Размер скидки (%)</th>
                                    </tr>
                                </thead>
                                @foreach($vips as $vip)
                                    <tbody>
                                    <tr>
                                        <th scope="row" class="align-middle">{{ $vip->id }}</th>
                                        <td class="align-middle">{{ $vip->name }}</td>
                                        <td class="align-middle">{{ $vip->phone_number }}</td>
                                        <td class="align-middle">{{ $vip->address }}</td>
                                        <td class="align-middle">{{ $vip->discount }}</td>
                                        <td class="align-middle">
                                            <button type="submit" class="btn btn-outline-info " data-toggle="modal" data-target="#modalupvip" data-id="{{ $vip->id }}">
                                                <i class="fa fa-cog" aria-hidden="true"></i>
                                            </button>
                                        </td>
                                        <td class="align-middle">
                                            <a href="/delete/vip/{{ $vip->id }}" type="button"   class="btn btn-outline-danger ">
                                                <i class="fa fa-times" aria-hidden="true"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    </tbody>
                                @endforeach
                            </table>

                        </div>
                    </div>

                    <div class="tab-pane fade" id="v-pills-orders" role="tabpanel" aria-labelledby="v-pills-orders-tab">
                        <div class="pt-5">

                            <table class="table table-bordered table-hover table-light">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">VIP</th>
                                    <th scope="col">ФИО</th>
                                    <th scope="col">Номер телефона</th>
                                    <th scope="col">Адрес</th>
                                    <th scope="col">Итоговая сумма</th>
                                    <th scope="col">Товары</th>
                                </tr>
                                </thead>
                                @foreach($baskets as $basket)
                                    <tbody>
                                    <tr>
                                        <th scope="row" class="align-middle">{{ $basket->id }}</th>
                                        <td class="align-middle">
                                            @if($basket->vip)
                                                <input type="checkbox" checked disabled>
                                                @else
                                                <input type="checkbox" disabled>
                                            @endif
                                        </td>
                                        <td class="align-middle">{{ $basket->name }}</td>
                                        <td class="align-middle">{{ $basket->phone_number }}</td>
                                        <td class="align-middle">{{ $basket->city }} {{ $basket->street }} {{ $basket->house }}</td>
                                        <td class="align-middle">{{ $basket->totalPrice }}</td>
                                        <td class="align-middle"><a href="#">Подробнее</a></td>
                                        <td class="align-middle">
                                            
                                        </td>
                                        <td class="align-middle">
                                            <input type="checkbox">
                                        </td>
                                    </tr>
                                    </tbody>
                                @endforeach
                            </table>

                        </div>
                    </div>


                </div>
            </div>
            <!--</div>-->
        </div>


        @include('modals.product')
        @include('modals.upproduct')
        @include('modals.type')
        @include('modals.uptype')
        @include('modals.vid ')
        @include('modals.uptype')
        @include('modals.size')
        @include('modals.upsize')
        @include('modals.time')
        {{--@include('modals.uptime')--}}
        @include('modals.delivery')
        @include('modals.updelivery')
        @include('modals.vip')
        @include('modals.upvip')



    @endsection