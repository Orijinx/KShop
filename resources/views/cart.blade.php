@extends("layouts.lo")
@section("content")
    <div id="content">
        <div class="breadcrumb">
            <div class="container">
                <h2>Корзина</h2>
                <ul>
                    <li>Главная</li>
                    <li class="active">Корзина</li>
                </ul>
            </div>
        </div>
        <div class="shop">
            <div class="container">
                <div class="cart">
                    <div class="container">
                        <div class="cart__table">
                            <div class="cart__table__wrapper">
                                <table>
                                    <colgroup>
                                        <col style="width: 40%"/>
                                        <col style="width: 17%"/>
                                        <col style="width: 17%"/>
                                        <col style="width: 17%"/>
                                        <col style="width: 9%"/>
                                    </colgroup>
                                    <thead>
                                    <tr>
                                        <th>Продукт</th>
                                        <th>Цена</th>
                                        <th>Количество</th>
                                        <th>Общая сумма</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($cart_con as $item)
                                        <tr>
                                            <td>
                                                <div class="cart-product">
                                                    <div class="cart-product__image"><img
                                                            src="{{asset($item->Product->img_path)}}"
                                                            alt="Product image"/></div>
                                                    <div class="cart-product__content">
                                                        <h5>eyes</h5><a
                                                            href="/product/{{$item->id}}">{{$item->Product->name}}</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>{{$item->Product->price}}</td>
                                            <td>
                                                <div class="quantity-controller ">
                                                    <form action="/delItem" method="POST">
                                                        @csrf
                                                        <input type="number" name="id" hidden value="{{$item->id}}">
                                                        <div class="quantity-controller__btn -descrease">
                                                            <button type="submit">-</button>
                                                        </div>
                                                    </form>
                                                    <div class="quantity-controller__number">{{$item->quantity}}</div>
                                                    <form action="/addItem" method="post">
                                                        <div class="quantity-controller__btn -increase">
                                                            @csrf
                                                            <input type="number" name="id" hidden value="{{$item->id}}">
                                                            <button type="submit">+</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </td>
                                            <td>{{$item->Product->price * $item->quantity}}</td>
                                            <td>
                                                <form action="/destroyItem" method="post">
                                                    @csrf
                                                    <input type="number" name="id" hidden value="{{$item->id}}">
                                                    <button type="submit" href="/destroyItem">
                                                        <i class="fal fa-times">

                                                        </i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    {{--<tr>--}}
                                    {{--<td>--}}
                                    {{--<div class="cart-product">--}}
                                    {{--<div class="cart-product__image"><img src="assets/images/product/2.png" alt="Product image"/></div>--}}
                                    {{--<div class="cart-product__content">--}}
                                    {{--<h5>eyes</h5><a href="product-detail.html">Velvet Melon High Intensity</a>--}}
                                    {{--</div>--}}
                                    {{--</div>--}}
                                    {{--</td>--}}
                                    {{--<td>Velvet Melon High Intensity</td>--}}
                                    {{--<td>--}}
                                    {{--<div class="quantity-controller ">--}}
                                    {{--<div class="quantity-controller__btn -descrease">-</div>--}}
                                    {{--<div class="quantity-controller__number">1</div>--}}
                                    {{--<div class="quantity-controller__btn -increase">+</div>--}}
                                    {{--</div>--}}
                                    {{--</td>--}}
                                    {{--<td>38.00</td>--}}
                                    {{--<td><a href="#"><i class="fal fa-times"></i></a></td>--}}
                                    {{--</tr>--}}
                                    {{--<tr>--}}
                                    {{--<td>--}}
                                    {{--<div class="cart-product">--}}
                                    {{--<div class="cart-product__image"><img src="assets/images/product/3.png" alt="Product image"/></div>--}}
                                    {{--<div class="cart-product__content">--}}
                                    {{--<h5>eyes</h5><a href="product-detail.html">Leather shopper bag</a>--}}
                                    {{--</div>--}}
                                    {{--</div>--}}
                                    {{--</td>--}}
                                    {{--<td>Leather shopper bag</td>--}}
                                    {{--<td>--}}
                                    {{--<div class="quantity-controller ">--}}
                                    {{--<div class="quantity-controller__btn -descrease">-</div>--}}
                                    {{--<div class="quantity-controller__number">1</div>--}}
                                    {{--<div class="quantity-controller__btn -increase">+</div>--}}
                                    {{--</div>--}}
                                    {{--</td>--}}
                                    {{--<td>35.00</td>--}}
                                    {{--<td><a href="#"><i class="fal fa-times"></i></a></td>--}}
                                    {{--</tr>--}}
                                    </tbody>
                                </table>
                            </div>
                            <div class="cart__table__footer"><a href="/shop"><i
                                        class="fal fa-long-arrow-left"></i>Вернуться к покупкам</a>
                                {{--<a href="/clearcart"><i--}}
                                {{--class="fal fa-trash"></i>Очистить корзину</a></div>--}}
                            </div>
                            <div class="cart__total">
                                <div class="row">
                                    <div class="col-12 col-md-8">
                                        <div class="cart__total__discount">
                                            <p>Введите купон</p>
                                            <div class="input-validator">
                                                <form action="">
                                                    <input type="text" name="discountCode" placeholder="Ваш код"/>
                                                    <button class="btn -dark">Применить
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4">
                                        <div class="cart__total__content">
                                            <h3>Корзина</h3>
                                            <table>
                                                <tbody>
                                                <tr>
                                                    <th>Цена без скидок</th>
                                                    <td>{{$cart->amount}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Окончательная цена</th>
                                                    <td class="final-price">{{$cart->amount}}</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                            <form action="/makeOrder" method="post">
                                                @csrf
                                                <input type="number" name="cart_id" value="{{$cart->id}}" hidden>
                                                <button type="submit" class="btn -dark" href="/order">Перейти к оплате
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{--<div class="instagram-two">--}}
            {{--<div class="instagram-two-slider"><a class="slider-item" href="https://www.instagram.com/"><img src="assets/images/instagram/InstagramTwo/1.png" alt="Instagram image"/></a><a class="slider-item" href="https://www.instagram.com/"><img src="assets/images/instagram/InstagramTwo/2.png" alt="Instagram image"/></a><a class="slider-item" href="https://www.instagram.com/"><img src="assets/images/instagram/InstagramTwo/3.png" alt="Instagram image"/></a><a class="slider-item" href="https://www.instagram.com/"><img src="assets/images/instagram/InstagramTwo/4.png" alt="Instagram image"/></a><a class="slider-item" href="https://www.instagram.com/"><img src="assets/images/instagram/InstagramTwo/5.png" alt="Instagram image"/></a><a class="slider-item" href="https://www.instagram.com/"><img src="assets/images/instagram/InstagramTwo/6.png" alt="Instagram image"/></a>--}}
            {{--</div>--}}
            {{--</div>--}}
        </div>
    </div>
@endsection
