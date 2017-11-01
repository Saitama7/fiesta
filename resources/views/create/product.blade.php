@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <form action="/store/product" method="POST" class="col-8 mx-auto">
                {{ csrf_field() }}

                <input type="text" name="name">
                <input type="text" name="desc">
                <input type="text" name="image_path">
                <input type="text" name="size_id">
                <input type="text" name="type_id">
                <input type="text" name="cost">

                <input type="submit">
            </form>
        </div>
    </div>
@endsection
