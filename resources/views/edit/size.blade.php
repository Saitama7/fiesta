@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <form action="/update/size/{{ $size->id }}" method="POST" class="col-8 mx-auto">
                {{ csrf_field() }}

                <input type="text" name="name" value="{{$size->name}}">

                <input type="submit" value="Сохранить">
            </form>
        </div>
    </div>
@endsection