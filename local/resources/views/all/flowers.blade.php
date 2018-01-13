@extends('layouts.app')
@section('title', 'Заказать букет')
@section('description')
    В магазине FIESTA FLOWERS собран огромный каталог, где Вы можете подобрать для любимых оригинальный букет из более чем 1000 вариантов цветка. Пионы, розы, тюльпаны, экзотика и многое другое.
@stop
@section('content')

            <div class="container py-5">
                <h2 class="mb-3">Популярные</h2>

                <div class="row">
                    @foreach($tproducts as $product)
                        @if($product->status == 1 && $product->vid_id == 6 && $product->type_id == 3)
                            <div class="col-3 mb-3 div1">
                                <div class="card bg-dark text-white  text-center" style="border: 0px;">
                                    <img class="card-img " src="/uploads/products/{{ $product->image_path }}" alt="Card image">
                                    <div class="card-img-overlay">
                                        <h4 class="card-title mt-5"><span class="">{{ $product->cost }}</span> сом</h4>
                                        <p class="card-text">{{ $product->name }}</p>
                                    </div>
                                    <div class="col d-flex justify-content-center">
                                        <a href="{{ $product->id }}" id="{{ $product->id }}" class="onetwo zakazat btn btn-pos btn-labflower text-dark">Заказать</a>
                                    </div>

                                </div>

                            </div>
                        @endif
                    @endforeach
                </div>
            </div>

        @foreach($sizes as $size)
            <div class="container py-5">
            <h2 class="mb-3">{{ $size->name }}</h2>

                <div class="row">
                    @foreach($tproducts as $product)
                        @if($product->status == 1 && $product->size_id == $size->id)
                            <div class="col-3 mb-3 div1">
                                <div class="card bg-dark text-white  text-center" style="border: 0px;">
                                    <img class="card-img " src="/uploads/products/{{ $product->image_path }}" alt="Card image">
                                    <div class="card-img-overlay">
                                        <h4 class="card-title mt-5"><span>{{ $product->cost }}</span> сом</h4>
                                        <p class="card-text">{{ $product->name }}</p>
                                    </div>
                                    <div class="col d-flex justify-content-center">
                                        <a href="{{ $product->id }}" id="{{ $product->id }}" class="onetwo zakazat btn btn-pos btn-labflower text-dark">Заказать</a>
                                    </div>

                                </div>

                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        @endforeach

@endsection