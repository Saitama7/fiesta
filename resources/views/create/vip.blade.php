@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <form action="/store/vip" method="POST" class="col-8 mx-auto">
                {{ csrf_field() }}

                <input type="text" name="name">
                <input type="text" name="phone_number">
                <input type="text" name="address">
                <input type="text" name="discount">
                <input type="submit">
            </form>
        </div>
    </div>
@endsection
