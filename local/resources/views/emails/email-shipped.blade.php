<h1>Новый заказ</h1>
<p>Поступил новый заказ от: {{ $order->name }}</p>
<p>Адрес: {{ $order->city }},{{ $order->street }},{{ $order->house }}</p>
<p>Номер телефона: {{ $order->phone_number}}</p>
<p>Заказ на: {{ $order->order_date}}</p>
<p>Подпись к товару: {{ $order->sign}}</p>
<p>Сумма заказа: {{$order->totalPrice}}</p><br>
<a href="fiesta/admin" type="button" class="btn btn-info">Перейти на сайт</a>