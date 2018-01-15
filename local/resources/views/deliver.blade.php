@extends('layouts.app')
@section('title', 'Доставка и оплата')
@section('content')
    <div class="container">
        <div class="row">
            <h1 class="my-5 text-center text-lg-left corp" >Доставка и оплата</h1>
            <section class="text-with-summary text-with-summary-0 mb-5 ">
                <h2><img src="/uploads/flower.png" width="64" height="34">Как заказать букет:</h2>
                <pre style="font-size: 1rem; font-family: inherit; white-space: pre-wrap">@foreach($apps as $app){{ $app->pay }}@endforeach</pre>
            </section>
            <section class="text-with-summary text-with-summary-1">
                <h2><img src="/uploads/delivery.png" width="64" height="34"> Доставка:</h2>
                <pre style="font-size: 1rem; font-family: inherit; white-space: pre-wrap">@foreach($apps as $app){{ $app->deltext }}@endforeach</pre>
            </section>
        </div>
    </div>
@endsection