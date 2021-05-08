@extends("layouts.lo")
@section("content")
    <div class="shop">
        <div class="container">
            <div class="shop-header">
                <div class="shop-header__view">
                    <div class="shop-header__view__icon">
                        @if(isset($tag))

                            <h3>{{$tag->name}}</h3>

                        @endif

                        {{--@if(isset($parent_tags))--}}
                        {{--<ul name="#">--}}
                        {{--@foreach($parent_tags as $t)--}}
                        {{--@if($t->id == $tag->id)--}}
                        {{--<li><a style="color: red" href="{{$t->id}}">{{$t->name}}</a></li>--}}

                        {{--@else--}}
                        {{--<li><a href="{{$t->id}}">{{$t->name}}</a></li>--}}

                        {{--@endif--}}
                        {{--@endforeach--}}
                        {{--<option value="za">Z to A</option>--}}
                        {{--<option value="low-high">Low to High Price</option>--}}
                        {{--<option value="high-low">High to Low Price</option>--}}
                        {{--</ul>--}}
                        {{--@endif--}}
                        {{--@if(isset($son_tags))--}}
                        {{--<ul name="#">--}}
                        {{--@foreach($son_tags as $t)--}}
                        {{--@if($t->id == $tag->id)--}}
                        {{--<li><a style="color: red" href="{{$t->id}}">{{$t->name}}</a></li>--}}

                        {{--@else--}}
                        {{--<li><a style="color: blue" href="{{$t->id}}">{{$t->name}}</a></li>--}}

                        {{--@endif--}}
                        {{--@endforeach--}}
                        {{--<option value="za">Z to A</option>--}}
                        {{--<option value="low-high">Low to High Price</option>--}}
                        {{--<option value="high-low">High to Low Price</option>--}}
                        {{--</ul>--}}
                        {{--@endif--}}
                    </div>

                </div>
                <div class="shop-header__view">
                    <div class="shop-header__view__icon">

                        <div class="container">
                            @foreach($alltags as $tg)
                                @if(count($tg->Childs))
                                    <div>
                                        <a href="/shop/{{$tg->id}}">
                                            {{ $tg->name }}
                                        </a>
                                    </div>
                                    @include('layouts.childs',['childs' => $tg->Childs])
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>


            </div>
            <div class="shop-products">
                <div class="shop-products__gird">
                    <div class="row mx-n1 mx-lg-n3">
                        @foreach($products as $prod)

                            <div class="col-6 col-md-4 px-1 px-md-3">
                                <div class="product ">
                                    {{--<div class="product-type"><h5 class="-new">New</h5></div>--}}
                                    <div class="product-thumb"><a class="product-thumb__image"
                                                                  href="/product/{{$prod->id}}"><img
                                                src="{{asset($prod->img_path)}}" alt="Product image"/>
                                            {{--<img--}}
                                            {{--src="assets/images/product/2.png" alt="Product image"/></a>--}}
                                            <div class="product-thumb__actions">
                                                <div class="product-btn"><a
                                                        class="btn -white product__actions__item -round product-atc"
                                                        href="/product/{{$prod->id}}"><i
                                                            class="fas fa-shopping-bag"></i></a>
                                                </div>
                                                {{--<div class="product-btn"><a--}}
                                                {{--class="btn -white product__actions__item -round product-qv" href="#"><i--}}
                                                {{--class="fas fa-eye"></i></a>--}}
                                                {{--</div>--}}
                                                {{--<div class="product-btn"><a class="btn -white product__actions__item -round"--}}
                                                {{--href="#"><i class="fas fa-heart"></i></a>--}}
                                                {{--</div>--}}
                                            </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-content__header">
                                            <div class="product-category">eyes</div>
                                            <div class="rate"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                    class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                    class="far fa-star"></i></div>
                                        </div>
                                        <a class="product-name" href="/product/{{$prod->id}}">{{$prod->name}}</a>
                                        <div class="product-content__footer">
                                            <h5 class="product-price--main">{{$prod->price}}</h5>
                                            {{--<div class="product-colors">--}}
                                            {{--<div class="product-colors__item" style="background-color: #8B0000"></div>--}}
                                            {{--<div class="product-colors__item" style="background-color: #4169E1"></div>--}}
                                            {{--</div>--}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        {{--<div class="col-6 col-md-4 px-1 px-md-3">--}}
                        {{--<div class="product ">--}}
                        {{--<div class="product-type"></div>--}}
                        {{--<div class="product-thumb"><a class="product-thumb__image"--}}
                        {{--href="/shop/product-detail.html"><img--}}
                        {{--src="assets/images/product/2.png" alt="Product image"/><img--}}
                        {{--src="assets/images/product/3.png" alt="Product image"/></a>--}}
                        {{--<div class="product-thumb__actions">--}}
                        {{--<div class="product-btn"><a--}}
                        {{--class="btn -white product__actions__item -round product-atc" href="#"><i--}}
                        {{--class="fas fa-shopping-bag"></i></a>--}}
                        {{--</div>--}}
                        {{--<div class="product-btn"><a--}}
                        {{--class="btn -white product__actions__item -round product-qv" href="#"><i--}}
                        {{--class="fas fa-eye"></i></a>--}}
                        {{--</div>--}}
                        {{--<div class="product-btn"><a class="btn -white product__actions__item -round"--}}
                        {{--href="#"><i class="fas fa-heart"></i></a>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="product-content">--}}
                        {{--<div class="product-content__header">--}}
                        {{--<div class="product-category">eyes</div>--}}
                        {{--<div class="rate"><i class="fas fa-star"></i><i class="fas fa-star"></i><i--}}
                        {{--class="fas fa-star"></i><i class="fas fa-star"></i><i--}}
                        {{--class="fas fa-star"></i></div>--}}
                        {{--</div>--}}
                        {{--<a class="product-name" href="/shop/product-detail.html">Velvet Melon High--}}
                        {{--Intensity</a>--}}
                        {{--<div class="product-content__footer">--}}
                        {{--<h5 class="product-price--main">$38.00</h5>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="col-6 col-md-4 px-1 px-md-3">--}}
                        {{--<div class="product ">--}}
                        {{--<div class="product-type"><h5 class="-sale">-15%</h5></div>--}}
                        {{--<div class="product-thumb"><a class="product-thumb__image"--}}
                        {{--href="/shop/product-detail.html"><img--}}
                        {{--src="assets/images/product/3.png" alt="Product image"/><img--}}
                        {{--src="assets/images/product/4.png" alt="Product image"/></a>--}}
                        {{--<div class="product-thumb__actions">--}}
                        {{--<div class="product-btn"><a--}}
                        {{--class="btn -white product__actions__item -round product-atc" href="#"><i--}}
                        {{--class="fas fa-shopping-bag"></i></a>--}}
                        {{--</div>--}}
                        {{--<div class="product-btn"><a--}}
                        {{--class="btn -white product__actions__item -round product-qv" href="#"><i--}}
                        {{--class="fas fa-eye"></i></a>--}}
                        {{--</div>--}}
                        {{--<div class="product-btn"><a class="btn -white product__actions__item -round"--}}
                        {{--href="#"><i class="fas fa-heart"></i></a>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="product-content">--}}
                        {{--<div class="product-content__header">--}}
                        {{--<div class="product-category">eyes</div>--}}
                        {{--<div class="rate"><i class="fas fa-star"></i><i class="fas fa-star"></i><i--}}
                        {{--class="fas fa-star"></i><i class="fas fa-star"></i><i--}}
                        {{--class="far fa-star"></i></div>--}}
                        {{--</div>--}}
                        {{--<a class="product-name" href="/shop/product-detail.html">Leather shopper bag</a>--}}
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
                        {{--<div class="col-6 col-md-4 px-1 px-md-3">--}}
                        {{--<div class="product ">--}}
                        {{--<div class="product-type"></div>--}}
                        {{--<div class="product-thumb"><a class="product-thumb__image"--}}
                        {{--href="/shop/product-detail.html"><img--}}
                        {{--src="assets/images/product/4.png" alt="Product image"/><img--}}
                        {{--src="assets/images/product/5.png" alt="Product image"/></a>--}}
                        {{--<div class="product-thumb__actions">--}}
                        {{--<div class="product-btn"><a--}}
                        {{--class="btn -white product__actions__item -round product-atc" href="#"><i--}}
                        {{--class="fas fa-shopping-bag"></i></a>--}}
                        {{--</div>--}}
                        {{--<div class="product-btn"><a--}}
                        {{--class="btn -white product__actions__item -round product-qv" href="#"><i--}}
                        {{--class="fas fa-eye"></i></a>--}}
                        {{--</div>--}}
                        {{--<div class="product-btn"><a class="btn -white product__actions__item -round"--}}
                        {{--href="#"><i class="fas fa-heart"></i></a>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="product-content">--}}
                        {{--<div class="product-content__header">--}}
                        {{--<div class="product-category">eyes</div>--}}
                        {{--<div class="rate"><i class="fas fa-star"></i><i class="fas fa-star"></i><i--}}
                        {{--class="fas fa-star"></i><i class="fas fa-star"></i><i--}}
                        {{--class="fas fa-star"></i></div>--}}
                        {{--</div>--}}
                        {{--<a class="product-name" href="/shop/product-detail.html">Luxe jewel lipstick</a>--}}
                        {{--<div class="product-content__footer">--}}
                        {{--<h5 class="product-price--main">$38.00</h5>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="col-6 col-md-4 px-1 px-md-3">--}}
                        {{--<div class="product ">--}}
                        {{--<div class="product-type"><h5 class="-sale">-50%</h5></div>--}}
                        {{--<div class="product-thumb"><a class="product-thumb__image"--}}
                        {{--href="/shop/product-detail.html"><img--}}
                        {{--src="assets/images/product/5.png" alt="Product image"/><img--}}
                        {{--src="assets/images/product/6.png" alt="Product image"/></a>--}}
                        {{--<div class="product-thumb__actions">--}}
                        {{--<div class="product-btn"><a--}}
                        {{--class="btn -white product__actions__item -round product-atc" href="#"><i--}}
                        {{--class="fas fa-shopping-bag"></i></a>--}}
                        {{--</div>--}}
                        {{--<div class="product-btn"><a--}}
                        {{--class="btn -white product__actions__item -round product-qv" href="#"><i--}}
                        {{--class="fas fa-eye"></i></a>--}}
                        {{--</div>--}}
                        {{--<div class="product-btn"><a class="btn -white product__actions__item -round"--}}
                        {{--href="#"><i class="fas fa-heart"></i></a>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="product-content">--}}
                        {{--<div class="product-content__header">--}}
                        {{--<div class="product-category">face</div>--}}
                        {{--<div class="rate"><i class="fas fa-star"></i><i class="fas fa-star"></i><i--}}
                        {{--class="fas fa-star"></i><i class="fas fa-star"></i><i--}}
                        {{--class="fas fa-star"></i></div>--}}
                        {{--</div>--}}
                        {{--<a class="product-name" href="/shop/product-detail.html">Penpoint seamless--}}
                        {{--beauty</a>--}}
                        {{--<div class="product-content__footer">--}}
                        {{--<h5 class="product-price--main">$20.00</h5>--}}
                        {{--<h5 class="product-price--discount">$40.00</h5>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="col-6 col-md-4 px-1 px-md-3">--}}
                        {{--<div class="product ">--}}
                        {{--<div class="product-type"></div>--}}
                        {{--<div class="product-thumb"><a class="product-thumb__image"--}}
                        {{--href="/shop/product-detail.html"><img--}}
                        {{--src="assets/images/product/7.png" alt="Product image"/><img--}}
                        {{--src="assets/images/product/8.png" alt="Product image"/></a>--}}
                        {{--<div class="product-thumb__actions">--}}
                        {{--<div class="product-btn"><a--}}
                        {{--class="btn -white product__actions__item -round product-atc" href="#"><i--}}
                        {{--class="fas fa-shopping-bag"></i></a>--}}
                        {{--</div>--}}
                        {{--<div class="product-btn"><a--}}
                        {{--class="btn -white product__actions__item -round product-qv" href="#"><i--}}
                        {{--class="fas fa-eye"></i></a>--}}
                        {{--</div>--}}
                        {{--<div class="product-btn"><a class="btn -white product__actions__item -round"--}}
                        {{--href="#"><i class="fas fa-heart"></i></a>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="product-content">--}}
                        {{--<div class="product-content__header">--}}
                        {{--<div class="product-category">face</div>--}}
                        {{--<div class="rate"><i class="fas fa-star"></i><i class="fas fa-star"></i><i--}}
                        {{--class="fas fa-star"></i><i class="fas fa-star"></i><i--}}
                        {{--class="fas fa-star"></i></div>--}}
                        {{--</div>--}}
                        {{--<a class="product-name" href="/shop/product-detail.html">The Sneaky lips</a>--}}
                        {{--<div class="product-content__footer">--}}
                        {{--<h5 class="product-price--main">$38.00</h5>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="col-6 col-md-4 px-1 px-md-3">--}}
                        {{--<div class="product ">--}}
                        {{--<div class="product-type"></div>--}}
                        {{--<div class="product-thumb"><a class="product-thumb__image"--}}
                        {{--href="/shop/product-detail.html"><img--}}
                        {{--src="assets/images/product/8.png" alt="Product image"/><img--}}
                        {{--src="assets/images/product/9.png" alt="Product image"/></a>--}}
                        {{--<div class="product-thumb__actions">--}}
                        {{--<div class="product-btn"><a--}}
                        {{--class="btn -white product__actions__item -round product-atc" href="#"><i--}}
                        {{--class="fas fa-shopping-bag"></i></a>--}}
                        {{--</div>--}}
                        {{--<div class="product-btn"><a--}}
                        {{--class="btn -white product__actions__item -round product-qv" href="#"><i--}}
                        {{--class="fas fa-eye"></i></a>--}}
                        {{--</div>--}}
                        {{--<div class="product-btn"><a class="btn -white product__actions__item -round"--}}
                        {{--href="#"><i class="fas fa-heart"></i></a>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="product-content">--}}
                        {{--<div class="product-content__header">--}}
                        {{--<div class="product-category">face</div>--}}
                        {{--<div class="rate"><i class="fas fa-star"></i><i class="fas fa-star"></i><i--}}
                        {{--class="fas fa-star"></i><i class="fas fa-star"></i><i--}}
                        {{--class="far fa-star"></i></div>--}}
                        {{--</div>--}}
                        {{--<a class="product-name" href="/shop/product-detail.html">White Facial Cream</a>--}}
                        {{--<div class="product-content__footer">--}}
                        {{--<h5 class="product-price--main">$38.00</h5>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="col-6 col-md-4 px-1 px-md-3">--}}
                        {{--<div class="product ">--}}
                        {{--<div class="product-type"></div>--}}
                        {{--<div class="product-thumb"><a class="product-thumb__image"--}}
                        {{--href="/shop/product-detail.html"><img--}}
                        {{--src="assets/images/product/9.png" alt="Product image"/><img--}}
                        {{--src="assets/images/product/10.png" alt="Product image"/></a>--}}
                        {{--<div class="product-thumb__actions">--}}
                        {{--<div class="product-btn"><a--}}
                        {{--class="btn -white product__actions__item -round product-atc" href="#"><i--}}
                        {{--class="fas fa-shopping-bag"></i></a>--}}
                        {{--</div>--}}
                        {{--<div class="product-btn"><a--}}
                        {{--class="btn -white product__actions__item -round product-qv" href="#"><i--}}
                        {{--class="fas fa-eye"></i></a>--}}
                        {{--</div>--}}
                        {{--<div class="product-btn"><a class="btn -white product__actions__item -round"--}}
                        {{--href="#"><i class="fas fa-heart"></i></a>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="product-content">--}}
                        {{--<div class="product-content__header">--}}
                        {{--<div class="product-category">face</div>--}}
                        {{--<div class="rate"><i class="fas fa-star"></i><i class="fas fa-star"></i><i--}}
                        {{--class="fas fa-star"></i><i class="fas fa-star"></i><i--}}
                        {{--class="far fa-star"></i></div>--}}
                        {{--</div>--}}
                        {{--<a class="product-name" href="/shop/product-detail.html">Orange Massage Cream</a>--}}
                        {{--<div class="product-content__footer">--}}
                        {{--<h5 class="product-price--main">$55.00</h5>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="col-6 col-md-4 px-1 px-md-3">--}}
                        {{--<div class="product ">--}}
                        {{--<div class="product-type"></div>--}}
                        {{--<div class="product-thumb"><a class="product-thumb__image"--}}
                        {{--href="/shop/product-detail.html"><img--}}
                        {{--src="assets/images/product/10.png" alt="Product image"/><img--}}
                        {{--src="assets/images/product/11.png" alt="Product image"/></a>--}}
                        {{--<div class="product-thumb__actions">--}}
                        {{--<div class="product-btn"><a--}}
                        {{--class="btn -white product__actions__item -round product-atc" href="#"><i--}}
                        {{--class="fas fa-shopping-bag"></i></a>--}}
                        {{--</div>--}}
                        {{--<div class="product-btn"><a--}}
                        {{--class="btn -white product__actions__item -round product-qv" href="#"><i--}}
                        {{--class="fas fa-eye"></i></a>--}}
                        {{--</div>--}}
                        {{--<div class="product-btn"><a class="btn -white product__actions__item -round"--}}
                        {{--href="#"><i class="fas fa-heart"></i></a>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="product-content">--}}
                        {{--<div class="product-content__header">--}}
                        {{--<div class="product-category">lips</div>--}}
                        {{--<div class="rate"><i class="fas fa-star"></i><i class="fas fa-star"></i><i--}}
                        {{--class="fas fa-star"></i><i class="fas fa-star"></i><i--}}
                        {{--class="far fa-star"></i></div>--}}
                        {{--</div>--}}
                        {{--<a class="product-name" href="/shop/product-detail.html">Valinta Fairness Massage--}}
                        {{--Cream</a>--}}
                        {{--<div class="product-content__footer">--}}
                        {{--<h5 class="product-price--main">$27.00</h5>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="shop-products__list">--}}
                        {{--<div class="row">--}}
                        {{--<div class="col-12">--}}
                        {{--<div class="product-list">--}}
                        {{--<div class="product-list-thumb">--}}
                        {{--<div class="product-type"><h5 class="-new">New</h5></div>--}}
                        {{--<a class="product-list-thumb__image" href="/shop/product-detail.html"><img--}}
                        {{--src="assets/images/product/1.png" alt="Product image"/><img--}}
                        {{--src="assets/images/product/2.png" alt="Product image"/></a>--}}
                        {{--</div>--}}
                        {{--<div class="product-list-content">--}}
                        {{--<div class="product-list-content__top">--}}
                        {{--<div class="product-category__wrapper">--}}
                        {{--<h5 class="product-category">eyes</h5>--}}
                        {{--<div class="rate"><i class="fas fa-star"></i><i class="fas fa-star"></i><i--}}
                        {{--class="fas fa-star"></i><i class="fas fa-star"></i><i--}}
                        {{--class="far fa-star"></i></div>--}}
                        {{--</div>--}}
                        {{--<a class="product-name" href="/shop/product-detail.html">The expert mascaraa</a>--}}
                        {{--<div class="product__price">--}}
                        {{--<div class="product__price__wrapper">--}}
                        {{--<h5 class="product-price--main">$35.00</h5>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="product-list-content__bottom">--}}
                        {{--<p class="product-description">Lorem ipsum dolor sit amet consectetur--}}
                        {{--adipisicing elit. Eaque ipsa fugiat accusantium reiciendis rem doloribus--}}
                        {{--iste doloremque</p>--}}
                        {{--<div class="product-actions">--}}
                        {{--<div class="product-btn">--}}
                        {{--<div class="add-to-cart "><a class="btn -round -red" href="#"><i--}}
                        {{--class="fas fa-shopping-bag"></i></a>--}}
                        {{--<h5>Add to cart</h5>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="product-btn"><a class="btn -white product__actions__item -round"--}}
                        {{--href="#"><i class="fas fa-eye"></i></a>--}}
                        {{--</div>--}}
                        {{--<div class="product-btn"><a class="btn -white product__actions__item -round"--}}
                        {{--href="#"><i class="fas fa-heart"></i></a>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="col-12">--}}
                        {{--<div class="product-list">--}}
                        {{--<div class="product-list-thumb">--}}
                        {{--<div class="product-type"></div>--}}
                        {{--<a class="product-list-thumb__image" href="/shop/product-detail.html"><img--}}
                        {{--src="assets/images/product/2.png" alt="Product image"/><img--}}
                        {{--src="assets/images/product/3.png" alt="Product image"/></a>--}}
                        {{--</div>--}}
                        {{--<div class="product-list-content">--}}
                        {{--<div class="product-list-content__top">--}}
                        {{--<div class="product-category__wrapper">--}}
                        {{--<h5 class="product-category">eyes</h5>--}}
                        {{--<div class="rate"><i class="fas fa-star"></i><i class="fas fa-star"></i><i--}}
                        {{--class="fas fa-star"></i><i class="fas fa-star"></i><i--}}
                        {{--class="fas fa-star"></i></div>--}}
                        {{--</div>--}}
                        {{--<a class="product-name" href="/shop/product-detail.html">Velvet Melon High--}}
                        {{--Intensity</a>--}}
                        {{--<div class="product__price">--}}
                        {{--<div class="product__price__wrapper">--}}
                        {{--<h5 class="product-price--main">$38.00</h5>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="product-list-content__bottom">--}}
                        {{--<p class="product-description">Lorem ipsum dolor sit amet consectetur--}}
                        {{--adipisicing elit. Eaque ipsa fugiat accusantium reiciendis rem doloribus--}}
                        {{--iste doloremque</p>--}}
                        {{--<div class="product-actions">--}}
                        {{--<div class="product-btn">--}}
                        {{--<div class="add-to-cart "><a class="btn -round -red" href="#"><i--}}
                        {{--class="fas fa-shopping-bag"></i></a>--}}
                        {{--<h5>Add to cart</h5>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="product-btn"><a class="btn -white product__actions__item -round"--}}
                        {{--href="#"><i class="fas fa-eye"></i></a>--}}
                        {{--</div>--}}
                        {{--<div class="product-btn"><a class="btn -white product__actions__item -round"--}}
                        {{--href="#"><i class="fas fa-heart"></i></a>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="col-12">--}}
                        {{--<div class="product-list">--}}
                        {{--<div class="product-list-thumb">--}}
                        {{--<div class="product-type"><h5 class="-sale">-15%</h5></div>--}}
                        {{--<a class="product-list-thumb__image" href="/shop/product-detail.html"><img--}}
                        {{--src="assets/images/product/3.png" alt="Product image"/><img--}}
                        {{--src="assets/images/product/4.png" alt="Product image"/></a>--}}
                        {{--</div>--}}
                        {{--<div class="product-list-content">--}}
                        {{--<div class="product-list-content__top">--}}
                        {{--<div class="product-category__wrapper">--}}
                        {{--<h5 class="product-category">eyes</h5>--}}
                        {{--<div class="rate"><i class="fas fa-star"></i><i class="fas fa-star"></i><i--}}
                        {{--class="fas fa-star"></i><i class="fas fa-star"></i><i--}}
                        {{--class="far fa-star"></i></div>--}}
                        {{--</div>--}}
                        {{--<a class="product-name" href="/shop/product-detail.html">Leather shopper bag</a>--}}
                        {{--<div class="product__price">--}}
                        {{--<div class="product__price__wrapper">--}}
                        {{--<h5 class="product-price--main">$30.00</h5>--}}
                        {{--<h5 class="product-price--discount">$35.00</h5>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="product-list-content__bottom">--}}
                        {{--<p class="product-description">Lorem ipsum dolor sit amet consectetur--}}
                        {{--adipisicing elit. Eaque ipsa fugiat accusantium reiciendis rem doloribus--}}
                        {{--iste doloremque</p>--}}
                        {{--<div class="product-actions">--}}
                        {{--<div class="product-btn">--}}
                        {{--<div class="add-to-cart "><a class="btn -round -red" href="#"><i--}}
                        {{--class="fas fa-shopping-bag"></i></a>--}}
                        {{--<h5>Add to cart</h5>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="product-btn"><a class="btn -white product__actions__item -round"--}}
                        {{--href="#"><i class="fas fa-eye"></i></a>--}}
                        {{--</div>--}}
                        {{--<div class="product-btn"><a class="btn -white product__actions__item -round"--}}
                        {{--href="#"><i class="fas fa-heart"></i></a>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="col-12">--}}
                        {{--<div class="product-list">--}}
                        {{--<div class="product-list-thumb">--}}
                        {{--<div class="product-type"></div>--}}
                        {{--<a class="product-list-thumb__image" href="/shop/product-detail.html"><img--}}
                        {{--src="assets/images/product/4.png" alt="Product image"/><img--}}
                        {{--src="assets/images/product/5.png" alt="Product image"/></a>--}}
                        {{--</div>--}}
                        {{--<div class="product-list-content">--}}
                        {{--<div class="product-list-content__top">--}}
                        {{--<div class="product-category__wrapper">--}}
                        {{--<h5 class="product-category">eyes</h5>--}}
                        {{--<div class="rate"><i class="fas fa-star"></i><i class="fas fa-star"></i><i--}}
                        {{--class="fas fa-star"></i><i class="fas fa-star"></i><i--}}
                        {{--class="fas fa-star"></i></div>--}}
                        {{--</div>--}}
                        {{--<a class="product-name" href="/shop/product-detail.html">Luxe jewel lipstick</a>--}}
                        {{--<div class="product__price">--}}
                        {{--<div class="product__price__wrapper">--}}
                        {{--<h5 class="product-price--main">$38.00</h5>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="product-list-content__bottom">--}}
                        {{--<p class="product-description">Lorem ipsum dolor sit amet consectetur--}}
                        {{--adipisicing elit. Eaque ipsa fugiat accusantium reiciendis rem doloribus--}}
                        {{--iste doloremque</p>--}}
                        {{--<div class="product-actions">--}}
                        {{--<div class="product-btn">--}}
                        {{--<div class="add-to-cart "><a class="btn -round -red" href="#"><i--}}
                        {{--class="fas fa-shopping-bag"></i></a>--}}
                        {{--<h5>Add to cart</h5>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="product-btn"><a class="btn -white product__actions__item -round"--}}
                        {{--href="#"><i class="fas fa-eye"></i></a>--}}
                        {{--</div>--}}
                        {{--<div class="product-btn"><a class="btn -white product__actions__item -round"--}}
                        {{--href="#"><i class="fas fa-heart"></i></a>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="col-12">--}}
                        {{--<div class="product-list">--}}
                        {{--<div class="product-list-thumb">--}}
                        {{--<div class="product-type"><h5 class="-sale">-50%</h5></div>--}}
                        {{--<a class="product-list-thumb__image" href="/shop/product-detail.html"><img--}}
                        {{--src="assets/images/product/5.png" alt="Product image"/><img--}}
                        {{--src="assets/images/product/6.png" alt="Product image"/></a>--}}
                        {{--</div>--}}
                        {{--<div class="product-list-content">--}}
                        {{--<div class="product-list-content__top">--}}
                        {{--<div class="product-category__wrapper">--}}
                        {{--<h5 class="product-category">face</h5>--}}
                        {{--<div class="rate"><i class="fas fa-star"></i><i class="fas fa-star"></i><i--}}
                        {{--class="fas fa-star"></i><i class="fas fa-star"></i><i--}}
                        {{--class="fas fa-star"></i></div>--}}
                        {{--</div>--}}
                        {{--<a class="product-name" href="/shop/product-detail.html">Penpoint seamless--}}
                        {{--beauty</a>--}}
                        {{--<div class="product__price">--}}
                        {{--<div class="product__price__wrapper">--}}
                        {{--<h5 class="product-price--main">$20.00</h5>--}}
                        {{--<h5 class="product-price--discount">$40.00</h5>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="product-list-content__bottom">--}}
                        {{--<p class="product-description">Lorem ipsum dolor sit amet consectetur--}}
                        {{--adipisicing elit. Eaque ipsa fugiat accusantium reiciendis rem doloribus--}}
                        {{--iste doloremque</p>--}}
                        {{--<div class="product-actions">--}}
                        {{--<div class="product-btn">--}}
                        {{--<div class="add-to-cart "><a class="btn -round -red" href="#"><i--}}
                        {{--class="fas fa-shopping-bag"></i></a>--}}
                        {{--<h5>Add to cart</h5>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="product-btn"><a class="btn -white product__actions__item -round"--}}
                        {{--href="#"><i class="fas fa-eye"></i></a>--}}
                        {{--</div>--}}
                        {{--<div class="product-btn"><a class="btn -white product__actions__item -round"--}}
                        {{--href="#"><i class="fas fa-heart"></i></a>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="col-12">--}}
                        {{--<div class="product-list">--}}
                        {{--<div class="product-list-thumb">--}}
                        {{--<div class="product-type"></div>--}}
                        {{--<a class="product-list-thumb__image" href="/shop/product-detail.html"><img--}}
                        {{--src="assets/images/product/7.png" alt="Product image"/><img--}}
                        {{--src="assets/images/product/8.png" alt="Product image"/></a>--}}
                        {{--</div>--}}
                        {{--<div class="product-list-content">--}}
                        {{--<div class="product-list-content__top">--}}
                        {{--<div class="product-category__wrapper">--}}
                        {{--<h5 class="product-category">face</h5>--}}
                        {{--<div class="rate"><i class="fas fa-star"></i><i class="fas fa-star"></i><i--}}
                        {{--class="fas fa-star"></i><i class="fas fa-star"></i><i--}}
                        {{--class="fas fa-star"></i></div>--}}
                        {{--</div>--}}
                        {{--<a class="product-name" href="/shop/product-detail.html">The Sneaky lips</a>--}}
                        {{--<div class="product__price">--}}
                        {{--<div class="product__price__wrapper">--}}
                        {{--<h5 class="product-price--main">$38.00</h5>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="product-list-content__bottom">--}}
                        {{--<p class="product-description">Lorem ipsum dolor sit amet consectetur--}}
                        {{--adipisicing elit. Eaque ipsa fugiat accusantium reiciendis rem doloribus--}}
                        {{--iste doloremque</p>--}}
                        {{--<div class="product-actions">--}}
                        {{--<div class="product-btn">--}}
                        {{--<div class="add-to-cart "><a class="btn -round -red" href="#"><i--}}
                        {{--class="fas fa-shopping-bag"></i></a>--}}
                        {{--<h5>Add to cart</h5>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="product-btn"><a class="btn -white product__actions__item -round"--}}
                        {{--href="#"><i class="fas fa-eye"></i></a>--}}
                        {{--</div>--}}
                        {{--<div class="product-btn"><a class="btn -white product__actions__item -round"--}}
                        {{--href="#"><i class="fas fa-heart"></i></a>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="col-12">--}}
                        {{--<div class="product-list">--}}
                        {{--<div class="product-list-thumb">--}}
                        {{--<div class="product-type"></div>--}}
                        {{--<a class="product-list-thumb__image" href="/shop/product-detail.html"><img--}}
                        {{--src="assets/images/product/8.png" alt="Product image"/><img--}}
                        {{--src="assets/images/product/9.png" alt="Product image"/></a>--}}
                        {{--</div>--}}
                        {{--<div class="product-list-content">--}}
                        {{--<div class="product-list-content__top">--}}
                        {{--<div class="product-category__wrapper">--}}
                        {{--<h5 class="product-category">face</h5>--}}
                        {{--<div class="rate"><i class="fas fa-star"></i><i class="fas fa-star"></i><i--}}
                        {{--class="fas fa-star"></i><i class="fas fa-star"></i><i--}}
                        {{--class="far fa-star"></i></div>--}}
                        {{--</div>--}}
                        {{--<a class="product-name" href="/shop/product-detail.html">White Facial Cream</a>--}}
                        {{--<div class="product__price">--}}
                        {{--<div class="product__price__wrapper">--}}
                        {{--<h5 class="product-price--main">$38.00</h5>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="product-list-content__bottom">--}}
                        {{--<p class="product-description">Lorem ipsum dolor sit amet consectetur--}}
                        {{--adipisicing elit. Eaque ipsa fugiat accusantium reiciendis rem doloribus--}}
                        {{--iste doloremque</p>--}}
                        {{--<div class="product-actions">--}}
                        {{--<div class="product-btn">--}}
                        {{--<div class="add-to-cart "><a class="btn -round -red" href="#"><i--}}
                        {{--class="fas fa-shopping-bag"></i></a>--}}
                        {{--<h5>Add to cart</h5>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="product-btn"><a class="btn -white product__actions__item -round"--}}
                        {{--href="#"><i class="fas fa-eye"></i></a>--}}
                        {{--</div>--}}
                        {{--<div class="product-btn"><a class="btn -white product__actions__item -round"--}}
                        {{--href="#"><i class="fas fa-heart"></i></a>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="col-12">--}}
                        {{--<div class="product-list">--}}
                        {{--<div class="product-list-thumb">--}}
                        {{--<div class="product-type"></div>--}}
                        {{--<a class="product-list-thumb__image" href="/shop/product-detail.html"><img--}}
                        {{--src="assets/images/product/9.png" alt="Product image"/><img--}}
                        {{--src="assets/images/product/10.png" alt="Product image"/></a>--}}
                        {{--</div>--}}
                        {{--<div class="product-list-content">--}}
                        {{--<div class="product-list-content__top">--}}
                        {{--<div class="product-category__wrapper">--}}
                        {{--<h5 class="product-category">face</h5>--}}
                        {{--<div class="rate"><i class="fas fa-star"></i><i class="fas fa-star"></i><i--}}
                        {{--class="fas fa-star"></i><i class="fas fa-star"></i><i--}}
                        {{--class="far fa-star"></i></div>--}}
                        {{--</div>--}}
                        {{--<a class="product-name" href="/shop/product-detail.html">Orange Massage--}}
                        {{--Cream</a>--}}
                        {{--<div class="product__price">--}}
                        {{--<div class="product__price__wrapper">--}}
                        {{--<h5 class="product-price--main">$55.00</h5>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="product-list-content__bottom">--}}
                        {{--<p class="product-description">Lorem ipsum dolor sit amet consectetur--}}
                        {{--adipisicing elit. Eaque ipsa fugiat accusantium reiciendis rem doloribus--}}
                        {{--iste doloremque</p>--}}
                        {{--<div class="product-actions">--}}
                        {{--<div class="product-btn">--}}
                        {{--<div class="add-to-cart "><a class="btn -round -red" href="#"><i--}}
                        {{--class="fas fa-shopping-bag"></i></a>--}}
                        {{--<h5>Add to cart</h5>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="product-btn"><a class="btn -white product__actions__item -round"--}}
                        {{--href="#"><i class="fas fa-eye"></i></a>--}}
                        {{--</div>--}}
                        {{--<div class="product-btn"><a class="btn -white product__actions__item -round"--}}
                        {{--href="#"><i class="fas fa-heart"></i></a>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="col-12">--}}
                        {{--<div class="product-list">--}}
                        {{--<div class="product-list-thumb">--}}
                        {{--<div class="product-type"></div>--}}
                        {{--<a class="product-list-thumb__image" href="/shop/product-detail.html"><img--}}
                        {{--src="assets/images/product/10.png" alt="Product image"/><img--}}
                        {{--src="assets/images/product/11.png" alt="Product image"/></a>--}}
                        {{--</div>--}}
                        {{--<div class="product-list-content">--}}
                        {{--<div class="product-list-content__top">--}}
                        {{--<div class="product-category__wrapper">--}}
                        {{--<h5 class="product-category">lips</h5>--}}
                        {{--<div class="rate"><i class="fas fa-star"></i><i class="fas fa-star"></i><i--}}
                        {{--class="fas fa-star"></i><i class="fas fa-star"></i><i--}}
                        {{--class="far fa-star"></i></div>--}}
                        {{--</div>--}}
                        {{--<a class="product-name" href="/shop/product-detail.html">Valinta Fairness--}}
                        {{--Massage Cream</a>--}}
                        {{--<div class="product__price">--}}
                        {{--<div class="product__price__wrapper">--}}
                        {{--<h5 class="product-price--main">$27.00</h5>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="product-list-content__bottom">--}}
                        {{--<p class="product-description">Lorem ipsum dolor sit amet consectetur--}}
                        {{--adipisicing elit. Eaque ipsa fugiat accusantium reiciendis rem doloribus--}}
                        {{--iste doloremque</p>--}}
                        {{--<div class="product-actions">--}}
                        {{--<div class="product-btn">--}}
                        {{--<div class="add-to-cart "><a class="btn -round -red" href="#"><i--}}
                        {{--class="fas fa-shopping-bag"></i></a>--}}
                        {{--<h5>Add to cart</h5>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="product-btn"><a class="btn -white product__actions__item -round"--}}
                        {{--href="#"><i class="fas fa-eye"></i></a>--}}
                        {{--</div>--}}
                        {{--<div class="product-btn"><a class="btn -white product__actions__item -round"--}}
                        {{--href="#"><i class="fas fa-heart"></i></a>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                    </div>
                </div>
            </div>
        </div>
        <ul class="paginator container">
            {{--<li class="page-item active">--}}
            {{--<button class="page-link">1</button>--}}
            {{--</li>--}}
            {{--<li class="page-item">--}}
            {{--<button class="page-link">2</button>--}}
            {{--</li>--}}
            {{--<li class="page-item">--}}
            {{--<button class="page-link"><i class="far fa-angle-right"></i></button>--}}
            {{--</li>--}}
            <li class="page-item active">
                {{$products->links()}}
            </li>
        </ul>
    </div>
    </div>
@endsection
