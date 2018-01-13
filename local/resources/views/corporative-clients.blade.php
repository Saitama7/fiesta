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


@endsection