@extends('layouts.admin')
    @section('content-admin')
        <div class="row">
            <div class="col-3">
                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" >
                        {{ csrf_field() }}
                        <button type="submit">Выйти</button>
                    </form>
                    <a href="" class="col-5"><img class="w-100" src="{{ asset('fiesta_img/logo-flower.png') }}" alt="image"><h5 class="flower text-dark">Fiesta flower</h5></a>
                    <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">button1</a>
                    <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">button2</a>
                    <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">button3</a>
                    <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">button4</a>
                    <a class="nav-link" id="v-pills-button5-tab" data-toggle="pill" href="#v-pills-button5" role="tab" aria-controls="v-pills-button5" aria-selected="false">button5</a>
                </div>
            </div>
            <div class="col">
                <!-- <div class="container">-->


                <div class="tab-content row" id="v-pills-tabContent">
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
                                <div class="col">
                                    <p>{{ $product->name }}</p>
                                </div>
                                <div class="col">
                                    <p>{{ $product->desc }}</p>
                                </div>
                                <div class="col">
                                    <p>{{ $product->cost }}</p>
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



                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                        Lorem ipsum dolor.
                        <button type="button" class="btn btn-primary ml-auto" data-toggle="modal" data-target="#exampleModal">
                            Launch demo modal
                        </button>
                    </div>


                    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                        Lorem ipsum dolor sit.
                        <button type="button" class="btn btn-primary ml-auto" data-toggle="modal" data-target="#exampleModal">
                            Launch demo modal
                        </button>
                    </div>

                    <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                        Lorem ipsum dolor sit amet.
                        <button type="button" class="btn btn-primary ml-auto" data-toggle="modal" data-target="#exampleModal">
                            Launch demo modal
                        </button>
                    </div>
                    <div class="tab-pane fade" id="v-pills-button5" role="tabpanel" aria-labelledby="v-pills-button5-tab">
                        <button type="button" class="btn btn-primary ml-auto" data-toggle="modal" data-target="#exampleModal">
                            Launch demo modal
                        </button>

                        <div class="pt-5">

                            <div class="row align-items-center border bg-dark rounded p-3">
                                <div class="col-2">
                                    <img class="rad" src="./fiesta_img/1.jpg" alt="">
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control" placeholder="First name" size="25">
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control" placeholder="Last name" size="25">
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control" placeholder="Last name" size="10">
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
                        </div>
                    </div>
                </div>
            </div>
            <!--</div>-->
        </div>

        @include('modals.product')



    @endsection