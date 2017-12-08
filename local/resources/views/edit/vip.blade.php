@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <form action="/update/vip/{{ $vip->id }}" method="POST" class="col-8 mx-auto">
                {{ csrf_field() }}

                <input type="text" name="name" value="{{$vip->name}}">
                <input type="text" name="phone_number" value="{{$vip->phone_number}}">
                <input type="text" name="address" value="{{$vip->address}}">
                <input type="text" name="discount" value="{{$vip->discount}}">

                <input type="submit" value="Сохранить">
            </form>
        </div>
    </div>
@endsection