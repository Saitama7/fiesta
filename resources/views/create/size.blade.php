@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <form action="/store/size" method="POST" class="col-8 mx-auto">
                {{ csrf_field() }}

                <input type="text" name="name">

                <input type="submit">
            </form>
        </div>
    </div>
@endsection
