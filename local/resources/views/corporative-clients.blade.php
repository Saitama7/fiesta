@extends('layouts.app')
@section('title', 'Оформление торжеств')
@section('description')
    Команда FIESTA FLOWERS оформит Ваше торжество по высшим стандартам качества!
    Оформление живыми цветами играет большую роль в создании волшебной атмосферы на вашем торжестве! Каждый наш проект создается с душой и огромной любовью для всех наших клиентов!
@stop
@section('content')
    <div class="container">
        <div class="row">
            <span class="brd"></span><br>
            <h1 class="my-5 corp" >оформление торжеств</h1>
            <p>
                @foreach($apps as $app)
                    {{ $app->party }}
                @endforeach
            </p>
        </div>
    </div>
    @if(!empty($bankets))
        <div class="container-fluid">
            <div class="h3 text-center mb-3 text-family">Галерея</div>
            <div class="row  banket-slider">
                @foreach($bankets as $banket)
                    <div class="col-md-4 col-xs-6 col-sm-6 mb-3">
                        <div class="text-white rounded-circle  text-center" style="border: 0px;">
                            <img class="card-img " src="/uploads/bankets/{{ $banket->path }}" alt="Оформление торжеств">
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row ">
                <div class="col-auto mx-auto">
                    <ul class="nav">
                        <li class="nav-item prevb"><i class="fa fa-arrow-left"></i></li>
                        <li class="nav-item nextb"><i class="fa fa-arrow-right"></i></li>
                    </ul>
                </div>
            </div>
        </div>
    @endif
@endsection