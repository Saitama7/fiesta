@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <form action="/store/delivery" method="POST" class="col-8 mx-auto">
                {{ csrf_field() }}

                <input type="text" name="name">
                <input type="text" name="cost">

                <input type="submit">
            </form>
        </div>
    </div>
@endsection
