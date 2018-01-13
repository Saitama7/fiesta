@extends('layouts.admin')
@section('title', 'Административная панель')
    @section('content-admin')
        <div class="row ml-0 mr-0">
            <div class="position-absolute" style="z-index:1;">
                <div class="pos-f-t">
                    <nav class="navbar navbar-light">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#adminmenu" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    </nav>
                    <div class="collapse" id="adminmenu">
                        <div class="bg-light">
                            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Товары</a>
                                <a class="nav-link" id="v-pills-orders-tab" data-toggle="pill" href="#v-pills-orders" role="tab" aria-controls="v-pills-orders" aria-selected="false">Заказы</a>
                                <a class="nav-link" id="v-pills-bankets-tab" data-toggle="pill" href="#v-pills-bankets" role="tab" aria-controls="v-pills-bankets" aria-selected="false">Картинки Оформления торжеств</a>
                                <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Тип товара</a>
                                <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Категории</a>
                                <a class="nav-link" id="v-pills-interval-tab" data-toggle="pill" href="#v-pills-intervals" role="tab" aria-controls="v-pills-intervals" aria-selected="false">Диапазон времени</a>
                                <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-deliv" role="tab" aria-controls="v-pills-deliv" aria-selected="false">Курьеры</a>
                                <a class="nav-link" id="v-pills-button5-tab" data-toggle="pill" href="#v-pills-button5" role="tab" aria-controls="v-pills-button5" aria-selected="false">VIP - клиенты</a>
                                <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Настройки</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                @if (session('status'))
                    <div class="alert alert-success text-center ">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> {{ session('status') }}
                    </div>
                 @endif
                <!-- <div class="container">-->


                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                        <!-- Button trigger modal -->
                        <button type="button" id="prodbtn" class="btn btn-success py-3 mt-2 float-right" data-toggle="modal" data-target="#modalProduct">
                            Создать товар
                        </button>

                        <div class="pt-5">
                                <table class="table table-bordered table-hover table-light">
                                    <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Картина</th>
                                        <th scope="col">Наименование</th>
                                        <th scope="col">Цена</th>
                                        <th scope="col">Тип</th>
                                        {{--<th scope="col">Описание</th>--}}
                                        <th scope="col">Категория</th>
                                        <th scope="col">Популярный</th>
                                        <th scope="col">Видим</th>
                                        <th scope="col">Слайд</th>
                                    </tr>
                                    </thead>
                                    <?php $i = 0 ?>
                                   @if(!empty($products))
                                        @foreach($products as $product)
                                            <?php $i++ ?>
                                            <tbody>
                                            <tr>
                                                <th scope="row" class="align-middle">{{ $product->id }}</th>
                                                <td style="width: 8%;"><img class="img-thumbnail" src="/uploads/products/{{ $product->image_path }}" alt=""></td>
                                                <td class="align-middle">{{ $product->name }}</td>
                                                <td class="align-middle">{{ $product->cost }} сом</td>
                                                @foreach($types as $type)
                                                    @if($product->type_id == $type->id)
                                                        <td class="align-middle" value="{{ $product->type_id }}">{{ $type->name }}</td>
                                                    @endif
                                                @endforeach
                                                {{--<td class="align-middle">{{ $product->desc }}</td>--}}
                                                {{--Категория--}}
                                                @foreach($sizes as $size)
                                                    @if($product->size_id == $size->id)
                                                        <td class="align-middle">{{ $size->name }}</td>
                                                    @endif
                                                @endforeach
                                                {{--Популярный--}}
                                                @foreach($vids as $vid)
                                                    @if($product->vid_id == $vid->id)
                                                        <td class="align-middle">{{ $vid->name }}</td>
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
                                                    <button data-id="{{ $product->id }}" type="submit" class="btn btn-outline-info"  data-toggle="modal" data-target="#modalupproduct">
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
                                    @endif
                                </table>
                        </div>

                    </div>


                    <div class="tab-content" id="v-pills-bankets">
                        <div class="tab-pane fade show active" id="v-pills-bankets" role="tabpanel" aria-labelledby="v-pills-bankets-tab">
                            <!-- Button trigger modal -->
                            <button type="button" id="banketbtn" class="btn btn-success py-3 mt-2 float-right" data-toggle="modal" data-target="#modalBanket">
                                Загрузить картину
                            </button>

                            <div class="pt-5">
                                <div class="row w-100">
                                    @if(!empty($bankets))
                                        @foreach($bankets as $banket)
                                            <div class="col-4 mb-3 mt-5">
                                                <div class="text-white  text-center" style="border: 0px;">
                                                    <img class="card-img " src="/uploads/bankets/{{ $banket->path }}" alt="Оформление торжеств">
                                                    <div class="col d-flex justify-content-center">
                                                        <a href="/delete/banket/{{ $banket->id }} }}" type="button" class="onetwo btn btn-pos btn-labflower text-dark">Удалить</a>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>



                        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                        <button type="button" class="btn btn-success py-3 mt-2 float-right" data-toggle="modal" data-target="#modaltype">
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
                              @if(!empty($types))
                                    @foreach($types as $type)
                                        <tbody>
                                        <tr>
                                            <th scope="row" class="align-middle">{{ $type->id }}</th>
                                            <td class="align-middle col">{{ $type->name }}</td>
                                            <td class="align-middle col">
                                                <button type="submit" class="btn btn-outline-info float-left" data-toggle="modal" data-id="{{ $type->id }}" data-target="#modaluptype">
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
                                @endif
                            </table>

                        </div>
                    </div>

                    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                        <button type="button" class="btn btn-success py-3 mt-2 float-right" data-toggle="modal" data-target="#modalsize">
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
                               @if(!empty($sizes))
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
                                @endif
                            </table>

                        </div>
                    </div>

                    <div class="tab-pane fade" id="v-pills-intervals" role="tabpanel" aria-labelledby="v-pills-intervals-tab">
                        <button type="button" class="btn btn-success py-3 mt-2 float-right" data-toggle="modal" data-target="#modaltime">
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
                                @if(!empty($order_times))
                                    @foreach($order_times as $time)
                                        <tbody>
                                        <tr>
                                            <th scope="row" class="align-middle">{{ $time->id }}</th>
                                            <td class="align-middle col">{{ $time->interval }}</td>
                                            <td class="align-middle col">
                                                <button type="submit" class="btn btn-outline-info float-left" data-toggle="modal" data-target="#modalupintervals" data-id="{{ $time->id }}">
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
                                @endif
                            </table>

                        </div>
                    </div>

                    <div class="tab-pane fade" id="v-pills-deliv" role="tabpanel" aria-labelledby="v-pills-deliv-tab">
                        <button type="button" class="btn btn-success py-3 mt-2 float-right" data-toggle="modal" data-target="#modaldeliv">
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
                               @if(!empty($deliveries))
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
                                @endif
                            </table>

                        </div>
                    </div>

                    <div class="tab-pane fade" id="v-pills-button5" role="tabpanel" aria-labelledby="v-pills-button5-tab">
                        <button type="button" class="btn btn-success py-3 mt-2 float-right" data-toggle="modal" data-target="#modalvip">
                            Новый VIP - клиент
                        </button>

                        <div class="pt-5">

                            <table class="table table-bordered table-hover table-light">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">ФИО</th>
                                        <th scope="col">Номер телефона</th>
                                        <th scope="col">Код</th>
                                        <th scope="col">Размер скидки (%)</th>
                                    </tr>
                                </thead>
                                @if(!empty($vips))
                                    @foreach($vips as $vip)
                                        <tbody>
                                        <tr>
                                            <th scope="row" class="align-middle">{{ $vip->id }}</th>
                                            <td class="align-middle">{{ $vip->name }}</td>
                                            <td class="align-middle">{{ $vip->phone_number }}</td>
                                            <td class="align-middle">{{ $vip->vip_id }}</td>
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
                                @endif
                            </table>

                        </div>
                    </div>

                    <div class="tab-pane fade" id="v-pills-orders" role="tabpanel" aria-labelledby="v-pills-orders-tab">
                        <div class="mt-5 pt-3">

                            <table class="table table-bordered table-hover table-light">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">VIP</th>
                                    <th scope="col">ФИО</th>
                                    <th scope="col">Номер телефона</th>
                                    <th scope="col">Адрес</th>
                                    <th scope="col">Дата</th>
                                    <th scope="col">Время</th>
                                    <th scope="col">Оплата</th>
                                    <th scope="col">Товары</th>
                                    <th scope="col">Доставлено</th>
                                </tr>
                                </thead>
                                @if(!empty($baskets))
                                    @foreach($baskets as $basket)
                                        <tbody>
                                        <tr>
                                            <th scope="row" class="align-middle">{{ $basket->id }}</th>
                                            <td class="align-middle">
                                                @if($basket->vip_id)
                                                    <input type="checkbox" checked disabled><br>
                                                    @foreach($vips as $vip)
                                                        @if($vip->phone_number == $basket->phone_number)
                                                            {{ $vip->vip_id }}
                                                        @endif
                                                    @endforeach
                                                @else
                                                    <input type="checkbox" disabled>
                                                @endif
                                            </td>
                                            <td class="align-middle">{{ $basket->name }}</td>
                                            <td class="align-middle">{{ $basket->phone_number }}</td>
                                            <td class="align-middle">{{ $basket->city }} {{ $basket->street }} {{ $basket->house }}</td>
                                            <td class="align-middle">{{ $basket->order_date}}</td>
                                            @foreach($order_times as $time)
                                                @if($basket->order_time_id == $time->id)
                                                    <td class="align-middle">{{ $time->interval}}</td>
                                                @endif
                                            @endforeach
                                            <td class="align-middle">
                                                Сумма: {{ $basket->summ }} сом<br>
                                                Курьер: {{$basket->totalPrice - $basket->summ}} сом<br>
                                                Итого: {{ $basket->totalPrice }} сом
                                            </td>
                                            <td class="align-middle">
                                                <button type="button" class="btn btn-primary ml-auto" data-toggle="modal" data-id="{{ $basket->id }}" data-target="#modalmore">
                                                    Подробнее
                                                </button>
                                            </td>
                                            <td class="align-middle">
                                                <form action="{{route('toggle.deliver',$basket->id)}}" method="POST" class="pull-right" id="deliver-toggle">
                                                    {{csrf_field()}}
                                                    <label for="delivered"</label>
                                                    <input type="checkbox" value="1" name="delivered"  {{$basket->delivered==1?"checked":"" }}>
                                                    <button class="btn" type="submit">Сохранить</button>
                                                </form>
                                            </td>
                                        </tr>
                                        </tbody>
                                    @endforeach
                                @endif
                            </table>

                        </div>
                    </div>

                    <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                        <div class="pt-5">
                            <button type="button" class="btn btn-success py-3 mt-2 float-right" data-toggle="modal" data-target="#modalapp">
                                Настроить
                            </button>

                            <table class="table table-bordered table-hover table-light">
                                    <tbody>
                                    @if(!empty($apps))
                                        @foreach($apps as $app)
                                            <tr>
                                                <th scope="row" class="align-middle ">Логотип</th>
                                                <td class="col-5">
                                                    <img class="img-thumbnail bg-primary" width="150" height="100" src="/uploads/logo/{{ $app->logo_path }}" alt="">
                                                    <img class="img-thumbnail " width="150" height="100" src="/uploads/logo/{{ $app->logo_path }}" alt="">
                                                </td>

                                            </tr>
                                            <tr>
                                                <th scope="row" class="align-middle  ">Баннер</th>
                                                <td class="col-5"><img class="img-thumbnail" width="250" height="250" src="/uploads/banners/{{ $app->img_path }}" alt=""></td>
                                            </tr>
                                            <tr>
                                                <th scope="row" class="align-middle">facebook</th>
                                                <td>{{$app->facebook}}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row" class="align-middle">Instagram</th>
                                                <td>{{ $app->instagram }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row" class="align-middle">Twitter</th>
                                                <td>{{ $app->twitter }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row" class="align-middle">Odnoklassniki</th>
                                                <td>{{ $app->odnoklassniki }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row" class="align-middle">Адрес</th>
                                                <td>{{ $app->address }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row" class="align-middle">Телефон</th>
                                                <td>{{ $app->tel }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row" class="align-middle">Whatsapp</th>
                                                <td>{{ $app->whatsapp }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row" class="align-middle">Telegram</th>
                                                <td>{{ $app->telegram }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row" class="align-middle">Viber</th>
                                                <td>{{ $app->viber }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row" class="align-middle">Оформление торжеств</th>
                                                <td>{{ $app->party }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row" class="align-middle">Оплата</th>
                                                <td>{{ $app->pay }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row" class="align-middle">Доставка</th>
                                                <td>{{ $app->deltext }}</td>
                                            </tr>
                                        @endforeach
                                    @endif
                                    </tbody>
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
        {{--@include('modals.upvid ')--}}
        @include('modals.uptype')
        @include('modals.size')
        @include('modals.upsize')
        @include('modals.time')
        @include('modals.uptime')
        @include('modals.delivery')
        @include('modals.updelivery')
        @include('modals.vip')
        @include('modals.upvip')
        @include('modals.app')
        @include('modals.banket')
        @include('modals.more')



    @endsection