@extends('layouts.app')
@section('title', 'Оформление торжеств')
@section('description')
    Команда FIESTA FLOWERS оформит Ваше торжество по высшим стандартам качества!
    Оформление живыми цветами играет большую роль в создании волшебной атмосферы на вашем торжестве! Каждый наш проект создается с душой и огромной любовью для всех наших клиентов!
@stop
@section('content')
    <div class="container">
        <div>
            <h1 class="my-5 text-center text-lg-left corp" >оформление торжеств</h1>
            <p>
                @foreach($apps as $app)
                    {{ $app->party }}
                @endforeach
            </p>
        </div>
    </div>
    @if(!empty($bankets))
        <div class="container">
            <div class="h3 text-center mb-3">Галерея</div>
            <div class="row">
                @foreach($bankets as $banket)
                    <div class="col-12 col-sm-6 col-md-4 col-lg-4 mb-3">
                        <div class="text-white rounded-circle  text-center" style="border: 0px;">
                            <img class="card-img " src="/uploads/bankets/{{ $banket->path }}" alt="Оформление торжеств">
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endif
@endsection