@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12 my-5">
                <p>Сумма для оплаты через кошелек "Элсом": {{ $totalPriceOld }} сом</p>
                <p>Код для оплаты через кошелек "Элсом": 10131</p>

                <p>Оплатите по данному реквизиту в <a href="https://web.elsom.kg/">Личном кабинете "Элсом"</a> (<a href="https://web.elsom.kg/">web.elsom.kg</a>) или скачайте обновленное приложение в Google Play по ссылке
                    <a href="https://play.google.com/store/apps/details?id=kg.elsom">ЭЛСОМ 2.0</a>.
                    Номер счета необходимо ввести в пункте «Код продавца» и сумму указанную на сайте.</p>

                <p>C уважением,</p>
                <p>Команда Fiesta Flower</p>
            </div>
        </div>
    </div>

@endsection