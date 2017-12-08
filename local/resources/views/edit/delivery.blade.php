@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <form action="/update/delivery/{{ $delivery->id }}" method="POST" class="col-8 mx-auto">
                {{ csrf_field() }}

                <input type="text" name="name" value="{{$delivery->name}}">
                <input type="text" name="cost" value="{{$delivery->cost}}">

                <input type="submit" value="Сохранить">
            </form>
        </div>
    </div>
@endsection