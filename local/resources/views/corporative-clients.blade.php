@extends('layouts.app')
@section('title', 'Оформление торжеств')
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