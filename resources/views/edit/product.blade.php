@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <form action="/update/product/{{ $product->id }}" method="POST" class="col-8 mx-auto">
                {{ csrf_field() }}

                <input type="text" name="name" value="{{$product->name}}">
                <input type="text" name="desc" value="{{$product->desc}}">
                <input type="text" name="image_path" value="{{$product->image_path}}">
                <input type="text" name="size_id" value="{{$product->size_id}}">
                <input type="text" name="type_id" value="{{$product->type_id}}">
                <input type="text" name="cost" value="{{$product->cost}}">
                <input type="text" name="status" value="{{$product->status}}">
                <input type="text" name="slide_status" value="{{$product->slide_status}}">

                <input type="submit" value="Сохранить">
            </form>
        </div>
    </div>
@endsection