@extends('layouts.app')
@section('title', 'Подарочные боксы')
@section('description')
    В магазине FIESTA FLOWERS собран огромный каталог подарочных наборов, где Вы можете подобрать для любимых оригинальный подарок из более чем 1000 вариантов подарков. Косметика Organic shop, сладости, апперетивы, сувениры, свечи и многое другие.
@stop
@section('content')
    <div class="container py-5">
        <h2 class="mb-3">Популярные</h2>
        <div class="row">
            @foreach($tproducts as $product)
                @if($product->status == 1 && $product->vid_id == 6 && $product->type_id == 4)
                    <div class="col-6 col-md-4 col-lg-3 mb-3 div1">
                        <div class="card bg-dark text-white  text-center" style="border: 0px;">
                            <a data-fancybox="gallery" href="/uploads/products/{{ $product->image_path }}" data-caption="{{ $product->name }}">
                                <img class="card-img" src="/uploads/products/{{ $product->image_path }}" alt="{{ $product->name }}">
                            </a>
                            <div class="card-img-overlay d-none">
                                <h4 class="card-title mt-5"><span>{{ $product->cost }}</span> сом</h4>
                                <p class="card-text">{{ $product->name }}</p>
                            </div>
                            <div class="col d-flex justify-content-center">
                                <a href="{{ $product->id }}" id="{{ $product->id }}" class="onetwo zakazat btn btn-pos btn-labflower text-dark">Заказать</a>
                            </div>
                        </div>
                        <div class="text-dark text-center">
                            <h4 class=" mt-3" style="font-family: 'Lobster', cursive;"><span class="" >{{ $product->cost }}</span> сом</h4>
                            <p class="">{{ $product->name }}</p>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
    <div class="callback-bg" >
        <div class="container pt-5 pb-5">
            <form action="">
                {{ csrf_field() }}
              <div class="form-row justify-content-center">
                  <div class="col-3 mb-2">
                      <label class="sr-only" for="boxes-form-name"></label>
                      <input type="text" class="form-control border border-danger" id="boxes-form-name" placeholder="Ваше имя">
                  </div>
                  <div class="col-3 mb-2">
                      <label class="sr-only" for="boxes-form-email"></label>
                      <input type="tel" class="form-control border border-danger" id="boxes-form-email" aria-describedby="emailHelp" placeholder="Ваш номер телефона">
                  </div>
                  <div class="col-3 mb-2">
                      <button type="submit" class="btn btn-outline-danger">Заказать звонок</button>
                  </div>
              </div>
            </form>
        </div>
    </div>
    <div class="container py-5">
        <h2 class="mb-3">Все боксы</h2>
        <div class="row">
            @foreach($tproducts as $product)
                @if($product->status == 1)
                    <div class="col-6 col-md-4 col-lg-3 mb-3 div1">
                        <div class="card bg-dark text-white  text-center" style="border: 0px;">
                            <a data-fancybox="gallery" href="/uploads/products/{{ $product->image_path }}" data-caption="{{ $product->name }}">
                                <img class="card-img" src="/uploads/products/{{ $product->image_path }}" alt="{{ $product->name }}">
                            </a>
                            <div class="card-img-overlay d-none">
                                <h4 class="card-title mt-5"><span>{{ $product->cost }}</span> сом</h4>
                                <p class="card-text">{{ $product->name }}</p>
                            </div>
                            <div class="col d-flex justify-content-center">
                                <a href="{{ $product->id }}" id="{{ $product->id }}" class="onetwo zakazat btn btn-pos btn-labflower text-dark">Заказать</a>
                            </div>
                        </div>
                        <div class="text-dark text-center">
                            <h4 class=" mt-3" style="font-family: 'Lobster', cursive;"><span class="" >{{ $product->cost }}</span> сом</h4>
                            <p class="">{{ $product->name }}</p>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
    <div class="callback-form">
        <div class="callback-wrap pt-5 pb-5 m-auto">
            <div class="text-center">
                <p>Есть вопросы?</p>
                <p>Мы с удовольствием ответим на каждую из них!</p>
            </div>
            <form action="">
                {{ csrf_field() }}
                <div class="form-row justify-content-center">
                    <div class="col-3 mb-2">
                        <label class="sr-only" for="boxes-form-name">Имя</label>
                        <input type="text" class="form-control border border-danger" id="callback-form-name" placeholder="Как вас зовут?">
                    </div>
                    <div class="col-3 mb-2">
                        <label class="sr-only" for="boxes-form-email">E-mail</label>
                        <input type="email" class="form-control border border-danger" id="callback-form-email" aria-describedby="emailHelp" placeholder="user@gmail.com">
                    </div>
                    <div class="col-3 mb-2">
                        <label class="sr-only" for="boxes-form-phone"></label>
                        <input type="tel" class="form-control border border-danger" id="callback-form-phone" aria-describedby="emailHelp" placeholder="996 XXX 123-456">
                    </div>
                    <div class="col-9 mb-2">
                        <label for="callback-sms">Сообщение</label>
                        <textarea   id="callback-sms" rows="5" accesskey  class="form-control"></textarea>
                    </div><br>
                    <div class="col-9 mb-2 text-right">
                        <button type="submit" class="btn btn-outline-danger">Отправить</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection