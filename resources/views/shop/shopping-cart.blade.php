<ul class="navbar-nav mx-auto nav">
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="badge badge-success text-white rounded-circle solt d-none">{{ $totalQty }}</span>
            <i class="fa fa-shopping-cart fa-2x mr-2" aria-hidden="true"></i>

            <span class="korzina" style="font-size: 12px; text-transform: uppercase;font-weight: 500;">Корзина</span>
        </a>
        <div class="dropdown-menu shirina-korz" aria-labelledby="navbarDropdown">
            @if (Session::has('cart'))
                <div class="dropdown-item">
                    <h2 class="text-white text-center">Ваша корзина</h2>
                </div>
                <div class="dropdown-divider"></div>
                <span class="d-none">{{ $i = 1 }}</span>
                <div class="productsInCart">
                    @foreach($products as $product)
                        <div class="dropdown-item">
                            <div class="row text-white">
                                <div class="col-2 count">
                                    {{ $i++ }}
                                </div>
                                <div class="col-6">
                                    <span class="productId d-none">{{ $product['item']['id'] }}</span><span class="qty">{{ $product['qty'] }}</span> x <span class="xname">{{ $product['item']['name'] }}</span>
                                </div>
                                <div class="col-4 cost">
                                    {{ $product['price'] }} сом
                                </div>
                            </div>
                        </div>
                        @if($i > 7)
                            <div class="dropdown-item">
                                <div class="row justify-content-center">
                                    <div class="col-auto text-light font-weight-bold">. . .</div>
                                </div>
                            </div>
                            @break
                        @endif
                    @endforeach
                </div>

                <div class="dropdown-divider"></div>
                <div class="dropdown-item">
                    <div class="row text-white">
                        <div class="col-6 justify-content-start">Всего: <span class="totalPrice">{{ $totalPrice }}</span> сом</div>
                        <div class="col justify-content-end">
                            <button type="button" class="btn btn-color"><a href="/cart">Оформление заказа</a></button>
                        </div>
                    </div>
                </div>
            @else
                <div class="dropdown-divider"></div>
                <div class="dropdown-item">
                    <div class="row text-white">
                        <div class="col-6 justify-content-start">Ваша корзина пуста</div>
                    </div>
                </div>
            @endif
        </div>
    </li>
</ul>