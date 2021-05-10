<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>KShop</title>
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css2?family=Spartan:wght@300;400;500;700;900&amp;display=swap"/>
    <link rel="shortcut icon" type="image/png" href="{{asset('assets/images/fav.png')}}"/>
    <!--build:css assets/css/styles.min.css-->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>
    <link rel="stylesheet" href="{{asset('assets/css/slick.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/css/fontawesome.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/css/jquery.modal.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('"assets/css/bootstrap-drawer.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}"/>
    <!--endbuild-->
</head>
<body>
<div class="header -one">
    {{--<div class="top-nav -style-1">--}}
    {{--<div class="container">--}}
    {{--<div class="top-nav__wrapper">--}}
    {{--<div class="top-nav-social">--}}
    {{--<div class="social-icons -white">--}}
    {{--<ul>--}}
    {{--<li><a href="https://www.facebook.com/" style="'color: undefined'"><i class="fab fa-facebook-f"></i></a></li>--}}
    {{--<li><a href="https://twitter.com" style="'color: undefined'"><i class="fab fa-twitter"></i></a></li>--}}
    {{--<li><a href="https://instagram.com/" style="'color: undefined'"><i class="fab fa-instagram"> </i></a></li>--}}
    {{--<li><a href="https://www.youtube.com/" style="'color: undefined'"><i class="fab fa-youtube"></i></a></li>--}}
    {{--</ul>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<p class="top-nav-promo">Free shipping on international orders of $120+</p>--}}
    {{--<div class="top-nav-selections">--}}
    {{--<div class="top-nav-selections__item">--}}
    {{--<select class="customed-select -borderless -white" name="cur">--}}
    {{--<option value="USD">USD</option>--}}
    {{--<option value="JPY">JPY</option>--}}
    {{--<option value="VND">VND</option>--}}
    {{--</select>--}}
    {{--</div>--}}
    {{--<div class="top-nav-selections__item">--}}
    {{--<select class="customed-select -borderless -white" name="lang">--}}
    {{--<option value="EN">ENG</option>--}}
    {{--<option value="JP">JAP</option>--}}
    {{--<option value="VI">VIE</option>--}}
    {{--</select>--}}
    {{--</div>--}}
    {{--<div class="top-nav-selections__item"><a href="#">Signin</a></div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    <div class="menu -style-1">
        <div class="container">
            <div class="menu__wrapper">
                {{--<a class="menu-logo" href="/">--}}
                {{--<img--}}
                {{--src="{{asset('assets/images/logo.png')}}" alt="Logo"/>--}}
                <h1>KShop</h1>
                {{--</a>--}}
                <div class="navigator ">
                    <ul>
                        <li class="relative"><a href="/">Главная
                                {{--<span class="dropable-icon">--}}
                                {{--<i--}}
                                {{--class="fas fa-angle-down"></i></span>--}}
                            </a>
                            {{--<ul class="dropdown-menu">--}}
                            {{--<li><a href="/cart">Корзина</a></li>--}}
                            {{--<li><a href="homepage2.html">Makeup Salon</a></li>--}}
                            {{--<li><a href="homepage3.html">Natural Shop</a></li>--}}
                            {{--<li><a href="homepage4.html">Spa Shop</a></li>--}}
                            {{--<li><a href="homepage5.html">Mask Shop</a></li>--}}
                            {{--<li><a href="homepage6.html">Skincare Shop</a></li>--}}
                            {{--</ul>--}}
                        </li>
                        {{--<li><a href="services.html">Services</a></li>--}}
                        {{--<li><a href="about.html">About</a></li>--}}
                        <li><a href="/shop">Магазин
                                {{--<span class="dropable-icon">--}}
                                {{--<i--}}
                                {{--class="fas fa-angle-down"></i></span>--}}
                            </a>
                            {{--<ul class="dropdown-menu -wide">--}}
                            {{--<ul class="dropdown-menu__col">--}}
                            {{--<li><a href="shop-fullwidth-4col.html">Shop Fullwidth 4 Columns</a></li>--}}
                            {{--<li><a href="shop-fullwidth-5col.html">Shop Fullwidth 5 Columns</a></li>--}}
                            {{--<li><a href="shop-fullwidth-left-sidebar.html">Shop Fullwidth Left Sidebar</a></li>--}}
                            {{--<li><a href="shop-fullwidth-right-sidebar.html">Shop Fullwidth Right Sidebar</a>--}}
                            {{--</li>--}}
                            {{--</ul>--}}
                            {{--<ul class="dropdown-menu__col">--}}
                            {{--<li><a href="shop-grid-4col.html">Shop grid 4 Columns</a></li>--}}
                            {{--<li><a href="shop-grid-3col.html">Shop Grid 3 Columns</a></li>--}}
                            {{--<li><a href="shop-grid-sidebar.html">Shop Grid Sideber</a></li>--}}
                            {{--<li><a href="shop-list-sidebar.html">Shop List Sidebar</a></li>--}}
                            {{--</ul>--}}
                            {{--<ul class="dropdown-menu__col">--}}
                            {{--<li><a href="product-detail.html"></a></li>--}}
                            {{--<li><a href="cart.html">Shopping cart</a></li>--}}
                            {{--<li><a href="checkout.html">Checkout</a></li>--}}
                            {{--<li><a href="wishlist.html">Wish list</a></li>--}}
                            {{--</ul>--}}
                            {{--<ul class="dropdown-menu__col -banner"><a href="shop-fullwidth-4col.html"><img--}}
                            {{--src="{{asset('assets/images/header/dropdown-menu-banner.png')}}"--}}
                            {{--alt="New product banner"/></a></ul>--}}
                            {{--</ul>--}}
                        </li>
                        @if(Auth::check())
                            <li><a href="/cart">Корзина</a></li>

                            <li><a href="/orders">Заказы</a></li>
                        @endif
                        {{--<li><a href="contact.html">Contact</a></li>--}}
                    </ul>
                </div>
                <div class="menu-functions "><a class="menu-icon -search" href="#">
                        <img
                            src="{{asset('assets/images/header/search-icon.png')}}" alt="Search icon"/></a>
                    <div class="search-box">
                        <form action="/search" method="get">
                            @csrf
                            <input type="text" name="search" placeholder="What are you looking for?" name="search"/>
                            <button><img src="{{asset('assets/images/header/search-icon.png')}}" alt="Search icon"/>
                            </button>
                        </form>
                    </div>
                        {{--<a class="menu-icon -wishlist" href="/wishlist.html"><img--}}
                        {{--src="{{asset('assets/images/header/wishlist-icon.png')}}" alt="Wishlist icon"/></a>--}}
                        <div class="menu-cart">
                            {{--@if(isset(session("status")))--}}
                            {{--<h2>{{session("status")}}</h2>--}}
                            {{--@endif--}}
                            @if(Auth::check())
                                <a class="menu-icon -cart" href="/cart">
                                    <img
                                        src="{{asset('assets/images/header/cart-icon.png')}}" alt="Wishlist icon"/>
                                    {{--<span--}}
                                    {{--class="cart__quantity">!</span>--}}
                                </a>

                                <h5>Корзина:<span>{{$cart->amount}}₽</span></h5>
                            @else
                                <h5><a href="/register" class="btn btn-primary">Регистрация</a> <a href="/login" class="btn btn-primary">Войти</a></h5>
                            @endif
                        </div>
                        <a class="menu-icon -navbar" href="#">
                            <div class="bar"></div>
                            <div class="bar"></div>
                            <div class="bar"></div>
                        </a>
                </div>
            </div>
        </div>
    </div>
</div>

@yield("content")

<div class="footer-one">
    <div class="container">
        <div class="footer-one__header">
            {{-- <div class="footer-one__header__logo"><a href="/homepages/homepage1"><img --}}
                        {{-- src="{{asset('assets/images/logo.png')}}" alt="Logo"/></a></div> --}}
            <div class="footer-one__header__newsletter"><span>Подпишись:</span>
                <div class="footer-one-newsletter">
                    <div class="subscribe-form">
                        <div class="mc-form">
                            <input type="text" placeholder="Enter your email"/>
                            <button class="btn "><i class="fas fa-paper-plane"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-one__header__social">
                <div class="social-icons -border">
                    <ul>
                        <li><a href="https://www.facebook.com/" style="'color: undefined'"><i
                                    class="fab fa-facebook-f"></i></a></li>
                        <li><a href="https://twitter.com" style="'color: undefined'"><i class="fab fa-twitter"></i></a>
                        </li>
                        <li><a href="https://instagram.com/" style="'color: undefined'"><i
                                    class="fab fa-instagram"> </i></a></li>
                        <li><a href="https://www.youtube.com/" style="'color: undefined'"><i
                                    class="fab fa-youtube"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-one__body">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="footer__section -info">
                        <h5 class="footer-title">Контакты</h5>
                        <p>Адрес:<span>Баженова 2, Калуга, Россия</span></p>
                        <p>Телефон:<span>+7 962 096 66 66</span></p>
                        <p>Email:<span>kshop@gmail.com</span></p>
                        <p>Время работы:<span>8.00 - 23.00</span></p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="footer__section -links">
                        <div class="row">
                            <div class="col-12 col-sm-6">
                                <h5 class="footer-title">Аккаунт</h5>
                                <ul>
                                    <li><a href="#">Мой профиль</a></li>
                                    <li><a href="wishlist.html">Избранное</a></li>
                                    <li><a href="cart">Корзина</a></li>
                                    <li><a href="fullwidth-4col">Магазин</a></li>
                                    <li><a href="checkout">Сделать заказ</a></li>
                                </ul>
                            </div>
                            <div class="col-12 col-sm-6">
                                <h5 class="footer-title">Информация</h5>
                                <ul>
                                    <li><a href="about.html">О нас</a></li>
                                    <li><a href="contact.html">Работа у нас</a></li>
                                    <li><a href="contact.html">Доставка и оплата</a></li>
                                    <li><a href="contact.html">Политика обработки персональных данных</a></li>
                                    <li><a href="contact.html">Условия &amp; положения</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="footer__section -payment">
                        <h5 class="footer-title">Способы оплаты</h5>
                        {{-- <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit gravida facilisis.</p> --}}
                        <div class="payment-methods"><img src="{{asset('assets/images/footer/payment.png')}}"
                                                          alt="Payment methods"/></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-one__footer">
        <div class="container">
            <div class="footer-one__footer__wrapper">
                <p>© KShop, 2021</p>
                <ul>
                    <li><a href="contact.html">Политика обработки персональных данных</a></li>
                    <li><a href="contact.html">Условия &amp; положения</a></li>
                    <li><a href="contact.html">Карта сайта</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
{{--<div class="drawer drawer-right slide" id="cart-drawer" tabindex="-1" role="dialog" aria-labelledby="drawer-demo-title" aria-hidden="true">--}}
{{--<div class="drawer-content drawer-content-scrollable" role="document">--}}
{{--<div class="drawer-body">--}}
{{--<div class="cart-sidebar">--}}
{{--<div class="cart-items__wrapper">--}}
{{--<h2>Shopping cart</h2>--}}
{{--<div class="cart-item">--}}
{{--<div class="cart-item__image"><img src="{{asset('assets/images/product/1.png')}}" alt="Product image"/></div>--}}
{{--<div class="cart-item__info"><a href="/product-detail.html">The expert mascaraa</a>--}}
{{--<h5>$35.00</h5>--}}
{{--<p>Quantity:<span> 1</span></p>--}}
{{--</div><a class="cart-item__remove" href="#"><i class="fal fa-times"></i></a>--}}
{{--</div>--}}
{{--<div class="cart-item">--}}
{{--<div class="cart-item__image"><img src="{{asset('assets/images/product/3.png')}}" alt="Product image"/></div>--}}
{{--<div class="cart-item__info"><a href="/product-detail.html">Velvet Melon High Intensity</a>--}}
{{--<h5>$38.00</h5>--}}
{{--<p>Quantity:<span> 1</span></p>--}}
{{--</div><a class="cart-item__remove" href="#"><i class="fal fa-times"></i></a>--}}
{{--</div>--}}
{{--<div class="cart-items__total">--}}
{{--<div class="cart-items__total__price">--}}
{{--<h5>Total</h5><span>$73.00</span>--}}
{{--</div>--}}
{{--<div class="cart-items__total__buttons"><a class="btn -dark" href="cart.html">View cart</a><a class="btn -red" href="checkout.html">Checkout</a>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--<div class="drawer drawer-right slide" id="mobile-menu-drawer" tabindex="-1" role="dialog" aria-labelledby="drawer-demo-title" aria-hidden="true">--}}
{{--<div class="drawer-content drawer-content-scrollable" role="document">--}}
{{--<div class="drawer-body">--}}
{{--<div class="cart-sidebar">--}}
{{--<div class="cart-items__wrapper">--}}
{{--<div class="navigation-sidebar">--}}
{{--<div class="search-box">--}}
{{--<form>--}}
{{--<input type="text" placeholder="What are you looking for?"/>--}}
{{--<button><img src="{{asset('assets/images/header/search-icon.png')}}" alt="Search icon"/></button>--}}
{{--</form>--}}
{{--</div>--}}
{{--<div class="navigator-mobile">--}}
{{--<ul>--}}
{{--<li class="relative"><a class="dropdown-menu-controller" href="#">Home<span class="dropable-icon"><i class="fas fa-angle-down"></i></span></a>--}}
{{--<ul class="dropdown-menu">--}}
{{--<li><a href="homepages/homepage1.html">Beauty Salon</a></li>--}}
{{--<li><a href="homepages/homepage2.html">Makeup Salon</a></li>--}}
{{--<li><a href="homepages/homepage3.html">Natural Shop</a></li>--}}
{{--<li><a href="homepages/homepage4.html">Spa Shop</a></li>--}}
{{--<li><a href="homepages/homepage5.html">Mask Shop</a></li>--}}
{{--<li><a href="homepages/homepage6.html">Skincare Shop</a></li>--}}
{{--</ul>--}}
{{--</li>--}}
{{--<li><a href="services.html">Services</a></li>--}}
{{--<li><a href="about.html">About</a></li>--}}
{{--<li><a class="dropdown-menu-controller" href="#">Shop<span class="dropable-icon"><i class="fas fa-angle-down"></i></span></a>--}}
{{--<ul class="dropdown-menu">--}}
{{--<ul class="dropdown-menu__col">--}}
{{--<li><a href="shop-fullwidth-4col.html">Shop Fullwidth 4 Columns</a></li>--}}
{{--<li><a href="shop-fullwidth-5col.html">Shop Fullwidth 5 Columns</a></li>--}}
{{--<li><a href="shop-fullwidth-left-sidebar.html">Shop Fullwidth Left Sidebar</a></li>--}}
{{--<li><a href="shop-fullwidth-right-sidebar.html">Shop Fullwidth Right Sidebar</a></li>--}}
{{--</ul>--}}
{{--<ul class="dropdown-menu__col">--}}
{{--<li><a href="shop-grid-4col.html">Shop grid 4 Columns</a></li>--}}
{{--<li><a href="shop-grid-3col.html">Shop Grid 3 Columns</a></li>--}}
{{--<li><a href="shop-grid-sidebar.html">Shop Grid Sideber</a></li>--}}
{{--<li><a href="shop-list-sidebar.html">Shop List Sidebar</a></li>--}}
{{--</ul>--}}
{{--<ul class="dropdown-menu__col">--}}
{{--<li><a href="#">Product Detail</a></li>--}}
{{--<li><a href="cart.html">Shopping cart</a></li>--}}
{{--<li><a href="checkout.html">Checkout</a></li>--}}
{{--<li><a href="wishlist.html">Wish list</a></li>--}}
{{--</ul>--}}
{{--<ul class="dropdown-menu__col -banner"><a href="shop-fullwidth-4col.html"><img src="{{asset('assets/images/header/dropdown-menu-banner.png')}}" alt="New product banner.html"/></a></ul>--}}
{{--</ul>--}}
{{--</li>--}}
{{--<li><a href="blog.html">Blog</a></li>--}}
{{--<li><a href="contact.html">Contact</a></li>--}}
{{--</ul>--}}
{{--</div>--}}
{{--<div class="navigation-sidebar__footer">--}}
{{--<select class="customed-select -borderless" name="currency">--}}
{{--<option value="usd">USD</option>--}}
{{--<option value="vnd">VND</option>--}}
{{--<option value="yen">YEN</option>--}}
{{--</select>--}}
{{--<select class="customed-select -borderless" name="currency">--}}
{{--<option value="en">EN</option>--}}
{{--<option value="vi">VI</option>--}}
{{--<option value="jp">JP</option>--}}
{{--</select>--}}
{{--</div>--}}
{{--<div class="social-icons ">--}}
{{--<ul>--}}
{{--<li><a href="https://www.facebook.com/" style="'color: undefined'"><i class="fab fa-facebook-f"></i></a></li>--}}
{{--<li><a href="https://twitter.com" style="'color: undefined'"><i class="fab fa-twitter"></i></a></li>--}}
{{--<li><a href="https://instagram.com/" style="'color: undefined'"><i class="fab fa-instagram"> </i></a></li>--}}
{{--<li><a href="https://www.youtube.com/" style="'color: undefined'"><i class="fab fa-youtube"></i></a></li>--}}
{{--</ul>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
<div class="modal" id="quick-view-modal">
    <div class="product-quickview">
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="product-detail__slide-one">
                    <div class="slider-wrapper">
                        <div class="slider-item"><img src="{{asset('assets/images/product/1.png')}}"
                                                      alt="Product image"/></div>
                        <div class="slider-item"><img src="{{asset('assets/images/product/2.png')}}"
                                                      alt="Product image"/></div>
                        <div class="slider-item"><img src="{{asset('assets/images/product/3.png')}}"
                                                      alt="Product image"/></div>
                        <div class="slider-item"><img src="{{asset('assets/images/product/4.png')}}"
                                                      alt="Product image"/></div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="product-detail__content">
                    <div class="product-detail__content__header">
                        <h5>eyes</h5>
                        <h2>The expert mascaraa</h2>
                    </div>
                    <div class="product-detail__content__header__comment-block">
                        <div class="rate"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i></div>
                        <p>03 review</p><a href="#">Write a reviews</a>
                    </div>
                    <h3>$35.00</h3>
                    <div class="divider"></div>
                    <div class="product-detail__content__footer">
                        <ul>
                            <li>Brand:gucci
                            </li>
                            <li>Product code: PM 01
                            </li>
                            <li>Reward point: 30
                            </li>
                            <li>Availability: In Stock</li>
                        </ul>
                        <div class="product-detail__colors"><span>Color:</span>
                            <div class="product-detail__colors__item" style="background-color: #8B0000"></div>
                            <div class="product-detail__colors__item" style="background-color: #4169E1"></div>
                        </div>
                        <div class="product-detail__controller">
                            <div class="quantity-controller -border -round">
                                <div class="quantity-controller__btn -descrease">-</div>
                                <div class="quantity-controller__number">2</div>
                                <div class="quantity-controller__btn -increase">+</div>
                            </div>
                            <div class="add-to-cart -dark"><a class="btn -round -red" href="#"><i
                                        class="fas fa-shopping-bag"></i></a>
                                <h5>Add to cart</h5>
                            </div>
                            <div class="product-detail__controler__actions"></div>
                            <a class="btn -round -white" href="#"><i class="fas fa-heart"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!--build:js assets/js/main.min.js-->
<script src="{{asset('assets/js/jquery-3.5.1.min.js')}}"></script>
<script src="{{asset('assets/js/parallax.min.js')}}"></script>
<script src="{{asset('assets/js/slick.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.validate.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.modal.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap-drawer.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.countdown.min.js')}}"></script>
<script src="{{asset('assets/js/main.min.js')}}"></script>
<!--endbuild-->
</body>
</html>

