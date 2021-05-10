@extends("layouts.lo")


@section("content")

    <div id="content">
        <div class="breadcrumb">
            <div class="container">
                <h2>Продукция</h2>
                <ul>
                    <li>Главная</li>
                    <li>Магазин</li>
                    <li class="active">О продукте</li>
                </ul>
            </div>
        </div>
        <div class="shop">
            <div class="container">
                <div class="product-detail__wrapper">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="product-detail__slide-two">
                                <div class="product-detail__slide-two__big">
                                    <div class="slider__item"><img src="{{asset($product->img_path)}}"
                                                                   alt="Product image"/></div>
                                    {{--<div class="slider__item"><img src="assets/images/product/2.png"--}}
                                    {{--alt="Product image"/></div>--}}
                                    {{--<div class="slider__item"><img src="assets/images/product/3.png"--}}
                                    {{--alt="Product image"/></div>--}}
                                    {{--<div class="slider__item"><img src="assets/images/product/4.png"--}}
                                    {{--alt="Product image"/></div>--}}
                                </div>
                                {{--<div class="product-detail__slide-two__small">--}}
                                {{--<div class="slider__item"><img src="{{asset($product->img_path)}}"--}}
                                {{--alt="Product image"/></div>--}}
                                {{--<div class="slider__item"><img src="assets/images/product/2.png"--}}
                                {{--alt="Product image"/></div>--}}
                                {{--<div class="slider__item"><img src="assets/images/product/3.png"--}}
                                {{--alt="Product image"/></div>--}}
                                {{--<div class="slider__item"><img src="assets/images/product/4.png"--}}
                                {{--alt="Product image"/></div>--}}
                                {{--</div>--}}
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="product-detail__content">
                                <div class="product-detail__content">
                                    <div class="product-detail__content__header">
                                        <h5>{{$product->brand->name}}</h5>
                                        <h2>{{$product->name}}</h2>
                                    </div>
                                    {{--<div class="product-detail__content__header__comment-block">--}}
                                    {{--<div class="rate">--}}
                                    {{--<i class="fas fa-star"></i>--}}
                                    {{--<i class="fas fa-star"></i>--}}
                                    {{--<i class="fas fa-star"></i>--}}
                                    {{--<i class="fas fa-star"></i>--}}
                                    {{--<i class="far fa-star"></i>--}}
                                    {{--</div>--}}
                                    {{--<p>03 review</p><a href="#">Write a reviews</a>--}}
                                    {{--</div>--}}
                                    <h3>{{$product->price}}₽</h3>
                                    <div class="divider"></div>
                                    <div class="product-detail__content__footer">
                                        <ul>
                                            Бренд:<a href="/brand/{{$product->brand->id}}">
                                                <li>{{$product->brand->name}}
                                                </li>
                                            </a>
                                            {{--<li>Артикул:{{$product->p_code}}--}}
                                            {{--</li>--}}
                                            {{--<li>Наличие: есть</li>--}}
                                        </ul>
                                        {{--<div class="product-detail__colors"><span>Color:</span>--}}
                                        {{--<div class="product-detail__colors__item" style="background-color: #8B0000"></div>--}}
                                        {{--<div class="product-detail__colors__item" style="background-color: #4169E1"></div>--}}
                                        {{--</div>--}}
                                        <div class="product-detail__controller">
                                            {{--<div class="quantity-controller -border -round">--}}
                                            {{--<div class="quantity-controller__btn -descrease">-</div>--}}
                                            {{--<div class="quantity-controller__number">2</div>--}}
                                            {{--<div class="quantity-controller__btn -increase">+</div>--}}
                                            {{--</div>--}}
                                            <div class="add-to-cart -dark">
                                                <form action="/addtocart" method="post">
                                                    @csrf
                                                    <input type="number" name="id" value="{{$product->id}}" hidden>
                                                    <button type="submit" class="btn -round -red" href="#"><i
                                                            class="fas fa-shopping-bag"></i>
                                                    </button>
                                                    <h5>Добавить в корзину</h5>
                                                    @if(session("status"))
                                                        <h4>{{session("status")}}</h4>
                                                    @endif
                                                </form>
                                            </div>
                                            <div class="product-detail__controler__actions"></div>
                                            {{--<a class="btn -round -white" href="#"><i class="fas fa-heart"></i></a>--}}
                                        </div>
                                        <div class="divider"></div>
                                        <div class="product-detail__content__tab">
                                            <ul class="tab-content__header">
                                                <li class="tab-switcher" data-tab-index="0" tabindex="0">Описание
                                                </li>
                                                {{--<li class="tab-switcher" data-tab-index="1" tabindex="0">Shipping &--}}
                                                {{--Returns--}}
                                                {{--</li>--}}
                                                {{--<li class="tab-switcher" data-tab-index="2" tabindex="0">Reviews ( 03--}}
                                                {{--)--}}
                                                {{--</li>--}}
                                            </ul>
                                            <div id="allTabsContainer">
                                                <div class="tab-content__item -description" data-tab-index="0">
                                                    <p>{{$product->description}}</p>
                                                </div>
                                                <div class="tab-content__item -ship" data-tab-index="1"
                                                     style="display:none;">
                                                    <h5><span>Ship to</span>New york</h5>
                                                    <ul>
                                                        <li>Standard Shipping on order over 0kg - 5kg.
                                                            <span>+10.00</span></li>
                                                        <li>Heavy Goods Shipping on oder over 5kg-10kg .
                                                            <span>+20.00</span></li>
                                                    </ul>
                                                    <h5>Delivery &amp; returns</h5>
                                                    <p>We diliver to over 100 countries around the word. For full
                                                        details of the delivery options we offer, please view our
                                                        Delivery information.</p>
                                                </div>
                                                <div class="tab-content__item -review" data-tab-index="2"
                                                     style="display:none;">
                                                    <div class="review">
                                                        <div class="review__header">
                                                            <div class="review__header__avatar"><img
                                                                    src="https://i1.wp.com/metro.co.uk/wp-content/uploads/2020/03/GettyImages-1211127989.jpg?quality=90&amp;strip=all&amp;zoom=1&amp;resize=644%2C416&amp;ssl=1"
                                                                    alt="Reviewer avatar"/></div>
                                                            <div class="review__header__info">
                                                                <h5>Lionel Messi</h5>
                                                                <p>Mar 17, 2020</p>
                                                            </div>
                                                            <div class="review__header__rate">
                                                                <div class="rate"><i class="fas fa-star"></i><i
                                                                        class="fas fa-star"></i><i
                                                                        class="fas fa-star"></i><i
                                                                        class="fas fa-star"></i><i
                                                                        class="far fa-star"></i></div>
                                                            </div>
                                                        </div>
                                                        <p class="review__content">{{}}</p><a class="review__report"
                                                                                              href="#">Report as
                                                            Inappropriate</a>
                                                    </div>
                                                    <form>
                                                        <h5>Оставьте отзыв</h5>
                                                        <div class="row">
                                                            <div class="col-12 col-md-6">
                                                                <div class="input-validator">
                                                                    <input type="text" name="name" placeholder="Name"/>
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-md-6">
                                                                <div class="input-validator">
                                                                    <input type="text" name="email"
                                                                           placeholder="Email"/>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="input-validator">
                                                                    <textarea name="message" placeholder="Message"
                                                                              rows="5"></textarea>
                                                                </div>
                                                                <span class="input-error"></span>
                                                            </div>
                                                            <div class="col-12">
                                                                <button class="btn -dark">Оставьте отзыв
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    {{--<div class="product-slide">--}}
    {{--<div class="container">--}}
    {{--<div class="section-title -center" style="margin-bottom: 1.875em">--}}
    {{--<h2>Related product</h2>--}}
    {{--</div>--}}
    {{--<div class="product-slider">--}}
    {{--<div class="product-slide__wrapper">--}}
    {{--<div class="product-slide__item">--}}
    {{--<div class="product ">--}}
    {{--<div class="product-type"><h5 class="-new">New</h5></div>--}}
    {{--<div class="product-thumb"><a class="product-thumb__image" href="/shop/product-detail.html"><img src="assets/images/product/1.png" alt="Product image"/><img src="assets/images/product/2.png" alt="Product image"/></a>--}}
    {{--<div class="product-thumb__actions">--}}
    {{--<div class="product-btn"><a class="btn -white product__actions__item -round product-atc" href="#"><i class="fas fa-shopping-bag"></i></a>--}}
    {{--</div>--}}
    {{--<div class="product-btn"><a class="btn -white product__actions__item -round product-qv" href="#"><i class="fas fa-eye"></i></a>--}}
    {{--</div>--}}
    {{--<div class="product-btn"><a class="btn -white product__actions__item -round" href="#"><i class="fas fa-heart"></i></a>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="product-content">--}}
    {{--<div class="product-content__header">--}}
    {{--<div class="product-category">eyes</div>--}}
    {{--<div class="rate"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i></div>--}}
    {{--</div><a class="product-name" href="/shop/product-detail.html">The expert mascaraa</a>--}}
    {{--<div class="product-content__footer">--}}
    {{--<h5 class="product-price--main">$35.00</h5>--}}
    {{--<div class="product-colors">--}}
    {{--<div class="product-colors__item" style="background-color: #8B0000"></div>--}}
    {{--<div class="product-colors__item" style="background-color: #4169E1"></div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="product-slide__item">--}}
    {{--<div class="product ">--}}
    {{--<div class="product-type"></div>--}}
    {{--<div class="product-thumb"><a class="product-thumb__image" href="/shop/product-detail.html"><img src="assets/images/product/2.png" alt="Product image"/><img src="assets/images/product/3.png" alt="Product image"/></a>--}}
    {{--<div class="product-thumb__actions">--}}
    {{--<div class="product-btn"><a class="btn -white product__actions__item -round product-atc" href="#"><i class="fas fa-shopping-bag"></i></a>--}}
    {{--</div>--}}
    {{--<div class="product-btn"><a class="btn -white product__actions__item -round product-qv" href="#"><i class="fas fa-eye"></i></a>--}}
    {{--</div>--}}
    {{--<div class="product-btn"><a class="btn -white product__actions__item -round" href="#"><i class="fas fa-heart"></i></a>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="product-content">--}}
    {{--<div class="product-content__header">--}}
    {{--<div class="product-category">eyes</div>--}}
    {{--<div class="rate"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>--}}
    {{--</div><a class="product-name" href="/shop/product-detail.html">Velvet Melon High Intensity</a>--}}
    {{--<div class="product-content__footer">--}}
    {{--<h5 class="product-price--main">$38.00</h5>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="product-slide__item">--}}
    {{--<div class="product ">--}}
    {{--<div class="product-type"><h5 class="-sale">-15%</h5></div>--}}
    {{--<div class="product-thumb"><a class="product-thumb__image" href="/shop/product-detail.html"><img src="assets/images/product/3.png" alt="Product image"/><img src="assets/images/product/4.png" alt="Product image"/></a>--}}
    {{--<div class="product-thumb__actions">--}}
    {{--<div class="product-btn"><a class="btn -white product__actions__item -round product-atc" href="#"><i class="fas fa-shopping-bag"></i></a>--}}
    {{--</div>--}}
    {{--<div class="product-btn"><a class="btn -white product__actions__item -round product-qv" href="#"><i class="fas fa-eye"></i></a>--}}
    {{--</div>--}}
    {{--<div class="product-btn"><a class="btn -white product__actions__item -round" href="#"><i class="fas fa-heart"></i></a>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="product-content">--}}
    {{--<div class="product-content__header">--}}
    {{--<div class="product-category">eyes</div>--}}
    {{--<div class="rate"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i></div>--}}
    {{--</div><a class="product-name" href="/shop/product-detail.html">Leather shopper bag</a>--}}
    {{--<div class="product-content__footer">--}}
    {{--<h5 class="product-price--main">$30.00</h5>--}}
    {{--<h5 class="product-price--discount">$35.00</h5>--}}
    {{--<div class="product-colors">--}}
    {{--<div class="product-colors__item" style="background-color: #8B0000"></div>--}}
    {{--<div class="product-colors__item" style="background-color: #4169E1"></div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="product-slide__item">--}}
    {{--<div class="product ">--}}
    {{--<div class="product-type"></div>--}}
    {{--<div class="product-thumb"><a class="product-thumb__image" href="/shop/product-detail.html"><img src="assets/images/product/4.png" alt="Product image"/><img src="assets/images/product/5.png" alt="Product image"/></a>--}}
    {{--<div class="product-thumb__actions">--}}
    {{--<div class="product-btn"><a class="btn -white product__actions__item -round product-atc" href="#"><i class="fas fa-shopping-bag"></i></a>--}}
    {{--</div>--}}
    {{--<div class="product-btn"><a class="btn -white product__actions__item -round product-qv" href="#"><i class="fas fa-eye"></i></a>--}}
    {{--</div>--}}
    {{--<div class="product-btn"><a class="btn -white product__actions__item -round" href="#"><i class="fas fa-heart"></i></a>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="product-content">--}}
    {{--<div class="product-content__header">--}}
    {{--<div class="product-category">eyes</div>--}}
    {{--<div class="rate"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>--}}
    {{--</div><a class="product-name" href="/shop/product-detail.html">Luxe jewel lipstick</a>--}}
    {{--<div class="product-content__footer">--}}
    {{--<h5 class="product-price--main">$38.00</h5>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="product-slide__item">--}}
    {{--<div class="product ">--}}
    {{--<div class="product-type"><h5 class="-sale">-50%</h5></div>--}}
    {{--<div class="product-thumb"><a class="product-thumb__image" href="/shop/product-detail.html"><img src="assets/images/product/5.png" alt="Product image"/><img src="assets/images/product/6.png" alt="Product image"/></a>--}}
    {{--<div class="product-thumb__actions">--}}
    {{--<div class="product-btn"><a class="btn -white product__actions__item -round product-atc" href="#"><i class="fas fa-shopping-bag"></i></a>--}}
    {{--</div>--}}
    {{--<div class="product-btn"><a class="btn -white product__actions__item -round product-qv" href="#"><i class="fas fa-eye"></i></a>--}}
    {{--</div>--}}
    {{--<div class="product-btn"><a class="btn -white product__actions__item -round" href="#"><i class="fas fa-heart"></i></a>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="product-content">--}}
    {{--<div class="product-content__header">--}}
    {{--<div class="product-category">face</div>--}}
    {{--<div class="rate"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>--}}
    {{--</div><a class="product-name" href="/shop/product-detail.html">Penpoint seamless beauty</a>--}}
    {{--<div class="product-content__footer">--}}
    {{--<h5 class="product-price--main">$20.00</h5>--}}
    {{--<h5 class="product-price--discount">$40.00</h5>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="product-slide__item">--}}
    {{--<div class="product ">--}}
    {{--<div class="product-type"></div>--}}
    {{--<div class="product-thumb"><a class="product-thumb__image" href="/shop/product-detail.html"><img src="assets/images/product/7.png" alt="Product image"/><img src="assets/images/product/8.png" alt="Product image"/></a>--}}
    {{--<div class="product-thumb__actions">--}}
    {{--<div class="product-btn"><a class="btn -white product__actions__item -round product-atc" href="#"><i class="fas fa-shopping-bag"></i></a>--}}
    {{--</div>--}}
    {{--<div class="product-btn"><a class="btn -white product__actions__item -round product-qv" href="#"><i class="fas fa-eye"></i></a>--}}
    {{--</div>--}}
    {{--<div class="product-btn"><a class="btn -white product__actions__item -round" href="#"><i class="fas fa-heart"></i></a>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="product-content">--}}
    {{--<div class="product-content__header">--}}
    {{--<div class="product-category">face</div>--}}
    {{--<div class="rate"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>--}}
    {{--</div><a class="product-name" href="/shop/product-detail.html">The Sneaky lips</a>--}}
    {{--<div class="product-content__footer">--}}
    {{--<h5 class="product-price--main">$38.00</h5>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="product-slide__item">--}}
    {{--<div class="product ">--}}
    {{--<div class="product-type"></div>--}}
    {{--<div class="product-thumb"><a class="product-thumb__image" href="/shop/product-detail.html"><img src="assets/images/product/8.png" alt="Product image"/><img src="assets/images/product/9.png" alt="Product image"/></a>--}}
    {{--<div class="product-thumb__actions">--}}
    {{--<div class="product-btn"><a class="btn -white product__actions__item -round product-atc" href="#"><i class="fas fa-shopping-bag"></i></a>--}}
    {{--</div>--}}
    {{--<div class="product-btn"><a class="btn -white product__actions__item -round product-qv" href="#"><i class="fas fa-eye"></i></a>--}}
    {{--</div>--}}
    {{--<div class="product-btn"><a class="btn -white product__actions__item -round" href="#"><i class="fas fa-heart"></i></a>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="product-content">--}}
    {{--<div class="product-content__header">--}}
    {{--<div class="product-category">face</div>--}}
    {{--<div class="rate"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i></div>--}}
    {{--</div><a class="product-name" href="/shop/product-detail.html">White Facial Cream</a>--}}
    {{--<div class="product-content__footer">--}}
    {{--<h5 class="product-price--main">$38.00</h5>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="product-slide__item">--}}
    {{--<div class="product ">--}}
    {{--<div class="product-type"></div>--}}
    {{--<div class="product-thumb"><a class="product-thumb__image" href="/shop/product-detail.html"><img src="assets/images/product/9.png" alt="Product image"/><img src="assets/images/product/10.png" alt="Product image"/></a>--}}
    {{--<div class="product-thumb__actions">--}}
    {{--<div class="product-btn"><a class="btn -white product__actions__item -round product-atc" href="#"><i class="fas fa-shopping-bag"></i></a>--}}
    {{--</div>--}}
    {{--<div class="product-btn"><a class="btn -white product__actions__item -round product-qv" href="#"><i class="fas fa-eye"></i></a>--}}
    {{--</div>--}}
    {{--<div class="product-btn"><a class="btn -white product__actions__item -round" href="#"><i class="fas fa-heart"></i></a>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="product-content">--}}
    {{--<div class="product-content__header">--}}
    {{--<div class="product-category">face</div>--}}
    {{--<div class="rate"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i></div>--}}
    {{--</div><a class="product-name" href="/shop/product-detail.html">Orange Massage Cream</a>--}}
    {{--<div class="product-content__footer">--}}
    {{--<h5 class="product-price--main">$55.00</h5>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}

@endsection
