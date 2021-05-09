@extends("layouts.lo")


@section("content")
    <div id="content">
        <div class="slider -style-1 slider-arrow-middle">
            <div class="slider__carousel">
                <div class="slider__carousel__item slider-1">
                    <div class="container">
                        <div class="slider-background"><img class="slider-background"
                                                            src="{{asset('assets/images/slider/SliderOne/1.gif')}}"
                                                            alt="Slider background"/></div>
                        <div class="slider-content">
                            <h5 class="slider-content__subtitle" data-animation-in="fadeInUp"
                                data-animation-delay="0.1">
                                Только для тебя</h5>
                            <h1 class="slider-content__title" data-animation-in="fadeInUp" data-animation-delay="0.2">
                                Твори красоту вместе с нами
                            </h1>
                            {{--<div data-animation-in="fadeInUp" data-animation-out="fadeInDown" data-animation-delay="0.4"><a--}}
                            {{--class="btn -red" href="#">Appointment</a>--}}
                            {{--</div>--}}
                        </div>
                    </div>
                </div>
                <div class="slider__carousel__item slider-2">
                    <div class="container">
                        <div class="slider-background"><img class="slider-background"
                                                            src="{{asset('assets/images/slider/SliderOne/2.png')}}"
                                                            alt="Slider background"/></div>
                        <div class="slider-content">
                            <h5 class="slider-content__subtitle" data-animation-in="fadeInUp"
                                data-animation-delay="0.1">
                                Выгляди на все сто!</h5>
                            <h1 class="slider-content__title" data-animation-in="fadeInUp" data-animation-delay="0.2">
                                Почувствуй себя желанной
                            </h1>
                            {{--<div data-animation-in="fadeInUp" data-animation-out="fadeInDown" data-animation-delay="0.4"><a--}}
                            {{--class="btn -red" href="#">Appointment</a>--}}
                            {{--</div>--}}
                        </div>
                    </div>
                </div>
                <div class="slider__carousel__item slider-3">
                    <div class="container">
                        <div class="slider-background"><img class="slider-background"
                                                            src="{{asset('assets/images/slider/SliderOne/3.png')}}"
                                                            alt="Slider background"/></div>
                        <div class="slider-content">
                            <h5 class="slider-content__subtitle" data-animation-in="fadeInUp"
                                data-animation-delay="0.1">Создай лучший мейкап вместе с нами!</h5>
                            <h1 class="slider-content__title" data-animation-in="fadeInUp" data-animation-delay="0.2">
                                Профессиональная косметика
                            </h1>
                            {{--<div data-animation-in="fadeInUp" data-animation-out="fadeInDown" data-animation-delay="0.4"><a--}}
                            {{--class="btn -red" href="#">Appointment</a>--}}
                            {{--</div>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="introduction-one">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 col-md-6">
                        <div class="introduction-one-image">
                            <div class="introduction-one-image__detail"><img
                                    src="{{asset('assets/images/introduction/IntroductionOne/img1.png')}}"
                                    alt="background"/><img
                                    src="{{asset('assets/images/introduction/IntroductionOne/img2.png')}}"
                                    alt="background"/></div>
                            <div class="introduction-one-image__background">
                                <div class="background__item">
                                    <div class="wrapper" ref="{bg1}"><img data-depth="0.5"
                                                                          src="{{asset('assets/images/introduction/IntroductionOne/bg1.png')}}"
                                                                          alt="background"/></div>
                                </div>
                                <div class="background__item">
                                    <div class="wrapper" ref="{bg2}"><img data-depth="0.3" data-invert-x=""
                                                                          data-invert-y=""
                                                                          src="{{asset('assets/images/introduction/IntroductionOne/bg2.png')}}"
                                                                          alt="background"/></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="introduction-one-content">
                            <h5><span>О Магазине</span></h5>
                            <div class="section-title " style="margin-bottom: 1.875em">
                                <h2><br>Лучший макияж — это </br>  здоровая сияющая кожа</h2><img
                                    src="{{asset('assets/images/introduction/IntroductionOne/content-deco.png')}}"
                                    alt="Decoration"/>
                            </div>
                            <p>Корейская косметика заблистала на мировом косметическом рынке относительно недавно, но уже успела сделать себе громкое имя, затмив продукцию многих европейских производителей.</p>
                            <h3>Преимущества корейской косметики: </h3>
                            <p> </p>
                            <p> Высокая эффективность: корейская косметика позволяет добиться заметного и устойчивого результата уже после первого применения.
                                Относительно невысокая цена в соотношении с высоким качеством продукции.
                                Широкий ассортимент разнообразных линеек продукции позволяет подобрать то, что необходимо именно вам.
                                Богатый опыт восточной медицины с давних пор эффективно использовавший силу экстрактов различных растений.
                                Кроме того, большая конкуренция между южнокорейскими брендами обуславливает регулярные инновации в косметологии. </p>
                            {{--<a class="btn -white" href="#">Appointment</a>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{--<div class="introduction-two">--}}
        {{--<div class="video-frame" style="height: 500px; width: 888.889px;">--}}
        {{--<div class="video-frame__poster"><img src="{{asset('assets/images/introduction/IntroductionTwo/4.png')}}"--}}
        {{--alt="Video poster"/></div>--}}
        {{--<a class="btn -white -round" href="#" style="height: 50px; width: 50px; line-height: 50px; padding: 0px;"><i--}}
        {{--class="fas fa-play"></i></a>--}}
        {{--</div>--}}
        {{--<div class="introduction-two-content">--}}
        {{--<div class="container">--}}
        {{--<div class="introduction-two-content__item active"--}}
        {{--data-cover="assets/images/introduction/IntroductionTwo/1.png')}}"--}}
        {{--data-src="https://www.youtube.com/embed/80e0QHPYRG4"><span>01</span><a href="#">Body treatment</a>--}}
        {{--</div>--}}
        {{--<div class="introduction-two-content__item"--}}
        {{--data-cover="assets/images/introduction/IntroductionTwo/2.png')}}"--}}
        {{--data-src="'https://www.youtube.com/embed/xn7jfVWWSio"><span>02</span><a href="#">Professinal--}}
        {{--makeup</a></div>--}}
        {{--<div class="introduction-two-content__item"--}}
        {{--data-cover="assets/images/introduction/IntroductionTwo/3.png')}}"--}}
        {{--data-src="'https://www.youtube.com/embed/K3M-czGNUCg"><span>03</span><a href="#">Maincure &amp;--}}
        {{--pedicure</a></div>--}}
        {{--<div class="introduction-two-content__item"--}}
        {{--data-cover="assets/images/introduction/IntroductionTwo/4.png')}}"--}}
        {{--data-src="'https://www.youtube.com/embed/hoPiGLf0ICA"><span>04</span><a href="#">Hair cut &amp;--}}
        {{--Coloring</a></div>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--</div>--}}
        <div class="product-slide">
            <div class="container">
                <div class="section-title -center" style="margin-bottom: 1.875em">
                    <h2>KShop продукты</h2><img
                        src="{{asset('assets/images/introduction/IntroductionOne/content-deco.png')}}"
                        alt="Decoration"/>
                </div>
                <div class="product-slider">
                    <div class="product-slide__wrapper">

                        @foreach($products as $product)
                            <div class="product-slide__item">
                                <div class="product ">
                                    {{--<div class="product-type"><h5 class="-new">New</h5></div>--}}
                                    <div class="product-thumb"><a class="product-thumb__image"
                                                                  href="/product/{{$product->id}}"><img
                                                src="{{asset($product->img_path)}}" alt="Product image"/>
                                            {{--<img--}}
                                                {{--src="{{asset('assets/images/product/2.png')}}" alt="Product image"/></a>--}}
                                        <div class="product-thumb__actions">
                                            <div class="product-btn"><a
                                                    class="btn -white product__actions__item -round product-atc"
                                                    href="#"><i
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
                                            <div class="product-category">{{$product->brand}}</div>
                                            <div class="rate"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                    class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                    class="far fa-star"></i></div>
                                        </div>
                                        <a class="product-name" href="/product/{{$product->id}}">{{$product->name}}</a>
                                        <div class="product-content__footer">
                                            <h5 class="product-price--main">{{$product->price}} ₽</h5>
                                            {{--<div class="product-colors">--}}
                                            {{--<div class="product-colors__item" style="background-color: #8B0000"></div>--}}
                                            {{--<div class="product-colors__item" style="background-color: #4169E1"></div>--}}
                                            {{--</div>--}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        {{--<div class="product-slide__item">--}}
                        {{--<div class="product ">--}}
                        {{--<div class="product-type"></div>--}}
                        {{--<div class="product-thumb"><a class="product-thumb__image" href="/shop/product-detail.html"><img--}}
                        {{--src="{{asset('assets/images/product/2.png')}}" alt="Product image"/><img--}}
                        {{--src="{{asset('assets/images/product/3.png')}}" alt="Product image"/></a>--}}
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
                        {{--<a class="product-name" href="/shop/product-detail.html">Velvet Melon High Intensity</a>--}}
                        {{--<div class="product-content__footer">--}}
                        {{--<h5 class="product-price--main">$38.00</h5>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="product-slide__item">--}}
                        {{--<div class="product ">--}}
                        {{--<div class="product-type"><h5 class="-sale">-15%</h5></div>--}}
                        {{--<div class="product-thumb"><a class="product-thumb__image" href="/shop/product-detail.html"><img--}}
                        {{--src="{{asset('assets/images/product/3.png')}}" alt="Product image"/><img--}}
                        {{--src="{{asset('assets/images/product/4.png')}}" alt="Product image"/></a>--}}
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
                        {{--<div class="product-slide__item">--}}
                        {{--<div class="product ">--}}
                        {{--<div class="product-type"></div>--}}
                        {{--<div class="product-thumb"><a class="product-thumb__image" href="/shop/product-detail.html"><img--}}
                        {{--src="{{asset('assets/images/product/4.png')}}" alt="Product image"/><img--}}
                        {{--src="{{asset('assets/images/product/5.png')}}" alt="Product image"/></a>--}}
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
                        {{--<div class="product-slide__item">--}}
                        {{--<div class="product ">--}}
                        {{--<div class="product-type"><h5 class="-sale">-50%</h5></div>--}}
                        {{--<div class="product-thumb"><a class="product-thumb__image" href="/shop/product-detail.html"><img--}}
                        {{--src="{{asset('assets/images/product/5.png')}}" alt="Product image"/><img--}}
                        {{--src="{{asset('assets/images/product/6.png')}}" alt="Product image"/></a>--}}
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
                        {{--<a class="product-name" href="/shop/product-detail.html">Penpoint seamless beauty</a>--}}
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
                        {{--<div class="product-thumb"><a class="product-thumb__image" href="/shop/product-detail.html"><img--}}
                        {{--src="{{asset('assets/images/product/7.png')}}" alt="Product image"/><img--}}
                        {{--src="{{asset('assets/images/product/8.png')}}" alt="Product image"/></a>--}}
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
                        {{--<div class="product-slide__item">--}}
                        {{--<div class="product ">--}}
                        {{--<div class="product-type"></div>--}}
                        {{--<div class="product-thumb"><a class="product-thumb__image" href="/shop/product-detail.html"><img--}}
                        {{--src="{{asset('assets/images/product/8.png')}}" alt="Product image"/><img--}}
                        {{--src="{{asset('assets/images/product/9.png')}}" alt="Product image"/></a>--}}
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
                        {{--<div class="product-slide__item">--}}
                        {{--<div class="product ">--}}
                        {{--<div class="product-type"></div>--}}
                        {{--<div class="product-thumb"><a class="product-thumb__image" href="/shop/product-detail.html"><img--}}
                        {{--src="{{asset('assets/images/product/9.png')}}" alt="Product image"/><img--}}
                        {{--src="{{asset('assets/images/product/10.png')}}" alt="Product image"/></a>--}}
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
                        {{--</div>--}}
                        <div class="text-center"><a class="btn -transparent -underline" href="/shop">В магазин</a>
                        </div>
                    </div>
                </div>
            </div>
            {{--<div class="testimonial">--}}
                {{--<div class="section-title -center" style="margin-bottom: 3.125rem">--}}
                    {{--<h5>TESTIMONIAL</h5>--}}
                    {{--<h2>What People Say?</h2><img--}}
                        {{--src="{{asset('assets/images/introduction/IntroductionOne/content-deco.png')}}"--}}
                        {{--alt="Decoration"/>--}}
                {{--</div>--}}
                {{--<div class="container">--}}
                    {{--<div class="testimonial-slider">--}}
                        {{--<div class="row">--}}
                            {{--<div class="col-12 col-md-6">--}}
                                {{--<div class="slide-nav">--}}
                                    {{--<div class="slide-nav__wrapper">--}}
                                        {{--<div class="slide-nav__item" key="0"><img--}}
                                                {{--src="{{asset('assets/images/testimonial/TestimonialOne/1.png')}}"--}}
                                                {{--alt="Customer avatar"/></div>--}}
                                        {{--<div class="slide-nav__item" key="1"><img--}}
                                                {{--src="{{asset('assets/images/testimonial/TestimonialOne/2.png')}}"--}}
                                                {{--alt="Customer avatar"/></div>--}}
                                        {{--<div class="slide-nav__item" key="2"><img--}}
                                                {{--src="{{asset('assets/images/testimonial/TestimonialOne/3.png')}}"--}}
                                                {{--alt="Customer avatar"/></div>--}}
                                        {{--<div class="slide-nav__item" key="3"><img--}}
                                                {{--src="{{asset('assets/images/testimonial/TestimonialOne/4.png')}}"--}}
                                                {{--alt="Customer avatar"/></div>--}}
                                        {{--<div class="slide-nav__item" key="4"><img--}}
                                                {{--src="{{asset('assets/images/testimonial/TestimonialOne/5.png')}}"--}}
                                                {{--alt="Customer avatar"/></div>--}}
                                        {{--<div class="slide-nav__item" key="5"><img--}}
                                                {{--src="{{asset('assets/images/testimonial/TestimonialOne/6.png')}}"--}}
                                                {{--alt="Customer avatar"/></div>--}}
                                        {{--<div class="slide-nav__item" key="6"><img--}}
                                                {{--src="{{asset('assets/images/testimonial/TestimonialOne/7.png')}}"--}}
                                                {{--alt="Customer avatar"/></div>--}}
                                        {{--<div class="slide-nav__item" key="7"><img--}}
                                                {{--src="{{asset('assets/images/testimonial/TestimonialOne/8.png')}}"--}}
                                                {{--alt="Customer avatar"/></div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col-12 col-md-6">--}}
                                {{--<div class="slide-for">--}}
                                    {{--<div class="slide-for__wrapper">--}}
                                        {{--<div class="slide-for__item">--}}
                                            {{--<div class="slide-for__item__header">--}}
                                                {{--<div class="quote-icon"><i class="fas fa-quote-right"></i></div>--}}
                                                {{--<div class="customer__info">--}}
                                                    {{--<h3>Alexander Ball</h3>--}}
                                                    {{--<h5>New York</h5>--}}
                                                {{--</div>--}}
                                                {{--<div class="rate"><i class="fas fa-star"></i><i class="fas fa-star"></i><i--}}
                                                        {{--class="fas fa-star"></i><i class="fas fa-star"></i><i--}}
                                                        {{--class="far fa-star"></i></div>--}}
                                            {{--</div>--}}
                                            {{--<p class="slide-for__item__content">I love my lash tint! I don't have--}}
                                                {{--extremely--}}
                                                {{--blonde lashes, but I do like that they can be even darker than they are.--}}
                                                {{--It--}}
                                                {{--makes my eyes stand out more and I love the way it looks! Now, I just--}}
                                                {{--need--}}
                                                {{--to--}}
                                                {{--add on a bit of mascara for length and I am set.</p>--}}
                                        {{--</div>--}}
                                        {{--<div class="slide-for__item">--}}
                                            {{--<div class="slide-for__item__header">--}}
                                                {{--<div class="quote-icon"><i class="fas fa-quote-right"></i></div>--}}
                                                {{--<div class="customer__info">--}}
                                                    {{--<h3>Izabel Watt</h3>--}}
                                                    {{--<h5>Michigan</h5>--}}
                                                {{--</div>--}}
                                                {{--<div class="rate"><i class="fas fa-star"></i><i class="fas fa-star"></i><i--}}
                                                        {{--class="fas fa-star"></i><i class="fas fa-star"></i><i--}}
                                                        {{--class="far fa-star"></i></div>--}}
                                            {{--</div>--}}
                                            {{--<p class="slide-for__item__content">I love my lash tint! I don't have--}}
                                                {{--extremely--}}
                                                {{--blonde lashes, but I do like that they can be even darker than they are.--}}
                                                {{--It--}}
                                                {{--makes my eyes stand out more and I love the way it looks! Now, I just--}}
                                                {{--need--}}
                                                {{--to--}}
                                                {{--add on a bit of mascara for length and I am set.</p>--}}
                                        {{--</div>--}}
                                        {{--<div class="slide-for__item">--}}
                                            {{--<div class="slide-for__item__header">--}}
                                                {{--<div class="quote-icon"><i class="fas fa-quote-right"></i></div>--}}
                                                {{--<div class="customer__info">--}}
                                                    {{--<h3>Rachel Regan</h3>--}}
                                                    {{--<h5>Sydney</h5>--}}
                                                {{--</div>--}}
                                                {{--<div class="rate"><i class="fas fa-star"></i><i class="fas fa-star"></i><i--}}
                                                        {{--class="fas fa-star"></i><i class="fas fa-star"></i><i--}}
                                                        {{--class="far fa-star"></i></div>--}}
                                            {{--</div>--}}
                                            {{--<p class="slide-for__item__content">I love my lash tint! I don't have--}}
                                                {{--extremely--}}
                                                {{--blonde lashes, but I do like that they can be even darker than they are.--}}
                                                {{--It--}}
                                                {{--makes my eyes stand out more and I love the way it looks! Now, I just--}}
                                                {{--need--}}
                                                {{--to--}}
                                                {{--add on a bit of mascara for length and I am set.</p>--}}
                                        {{--</div>--}}
                                        {{--<div class="slide-for__item">--}}
                                            {{--<div class="slide-for__item__header">--}}
                                                {{--<div class="quote-icon"><i class="fas fa-quote-right"></i></div>--}}
                                                {{--<div class="customer__info">--}}
                                                    {{--<h3>Malika Kenny</h3>--}}
                                                    {{--<h5>Ha Noi</h5>--}}
                                                {{--</div>--}}
                                                {{--<div class="rate"><i class="fas fa-star"></i><i class="fas fa-star"></i><i--}}
                                                        {{--class="fas fa-star"></i><i class="fas fa-star"></i><i--}}
                                                        {{--class="far fa-star"></i></div>--}}
                                            {{--</div>--}}
                                            {{--<p class="slide-for__item__content">I love my lash tint! I don't have--}}
                                                {{--extremely--}}
                                                {{--blonde lashes, but I do like that they can be even darker than they are.--}}
                                                {{--It--}}
                                                {{--makes my eyes stand out more and I love the way it looks! Now, I just--}}
                                                {{--need--}}
                                                {{--to--}}
                                                {{--add on a bit of mascara for length and I am set.</p>--}}
                                        {{--</div>--}}
                                        {{--<div class="slide-for__item">--}}
                                            {{--<div class="slide-for__item__header">--}}
                                                {{--<div class="quote-icon"><i class="fas fa-quote-right"></i></div>--}}
                                                {{--<div class="customer__info">--}}
                                                    {{--<h3>Javier Bender</h3>--}}
                                                    {{--<h5>Tokyo</h5>--}}
                                                {{--</div>--}}
                                                {{--<div class="rate"><i class="fas fa-star"></i><i class="fas fa-star"></i><i--}}
                                                        {{--class="fas fa-star"></i><i class="fas fa-star"></i><i--}}
                                                        {{--class="far fa-star"></i></div>--}}
                                            {{--</div>--}}
                                            {{--<p class="slide-for__item__content">I love my lash tint! I don't have--}}
                                                {{--extremely--}}
                                                {{--blonde lashes, but I do like that they can be even darker than they are.--}}
                                                {{--It--}}
                                                {{--makes my eyes stand out more and I love the way it looks! Now, I just--}}
                                                {{--need--}}
                                                {{--to--}}
                                                {{--add on a bit of mascara for length and I am set.</p>--}}
                                        {{--</div>--}}
                                        {{--<div class="slide-for__item">--}}
                                            {{--<div class="slide-for__item__header">--}}
                                                {{--<div class="quote-icon"><i class="fas fa-quote-right"></i></div>--}}
                                                {{--<div class="customer__info">--}}
                                                    {{--<h3>Paul Brookes</h3>--}}
                                                    {{--<h5>Berlin</h5>--}}
                                                {{--</div>--}}
                                                {{--<div class="rate"><i class="fas fa-star"></i><i class="fas fa-star"></i><i--}}
                                                        {{--class="fas fa-star"></i><i class="fas fa-star"></i><i--}}
                                                        {{--class="far fa-star"></i></div>--}}
                                            {{--</div>--}}
                                            {{--<p class="slide-for__item__content">I love my lash tint! I don't have--}}
                                                {{--extremely--}}
                                                {{--blonde lashes, but I do like that they can be even darker than they are.--}}
                                                {{--It--}}
                                                {{--makes my eyes stand out more and I love the way it looks! Now, I just--}}
                                                {{--need--}}
                                                {{--to--}}
                                                {{--add on a bit of mascara for length and I am set.</p>--}}
                                        {{--</div>--}}
                                        {{--<div class="slide-for__item">--}}
                                            {{--<div class="slide-for__item__header">--}}
                                                {{--<div class="quote-icon"><i class="fas fa-quote-right"></i></div>--}}
                                                {{--<div class="customer__info">--}}
                                                    {{--<h3>Bilaal Gunn</h3>--}}
                                                    {{--<h5>Denver</h5>--}}
                                                {{--</div>--}}
                                                {{--<div class="rate"><i class="fas fa-star"></i><i class="fas fa-star"></i><i--}}
                                                        {{--class="fas fa-star"></i><i class="fas fa-star"></i><i--}}
                                                        {{--class="far fa-star"></i></div>--}}
                                            {{--</div>--}}
                                            {{--<p class="slide-for__item__content">I love my lash tint! I don't have--}}
                                                {{--extremely--}}
                                                {{--blonde lashes, but I do like that they can be even darker than they are.--}}
                                                {{--It--}}
                                                {{--makes my eyes stand out more and I love the way it looks! Now, I just--}}
                                                {{--need--}}
                                                {{--to--}}
                                                {{--add on a bit of mascara for length and I am set.</p>--}}
                                        {{--</div>--}}
                                        {{--<div class="slide-for__item">--}}
                                            {{--<div class="slide-for__item__header">--}}
                                                {{--<div class="quote-icon"><i class="fas fa-quote-right"></i></div>--}}
                                                {{--<div class="customer__info">--}}
                                                    {{--<h3>Musab O'Sullivan</h3>--}}
                                                    {{--<h5>Paris</h5>--}}
                                                {{--</div>--}}
                                                {{--<div class="rate"><i class="fas fa-star"></i><i class="fas fa-star"></i><i--}}
                                                        {{--class="fas fa-star"></i><i class="fas fa-star"></i><i--}}
                                                        {{--class="far fa-star"></i></div>--}}
                                            {{--</div>--}}
                                            {{--<p class="slide-for__item__content">I love my lash tint! I don't have--}}
                                                {{--extremely--}}
                                                {{--blonde lashes, but I do like that they can be even darker than they are.--}}
                                                {{--It--}}
                                                {{--makes my eyes stand out more and I love the way it looks! Now, I just--}}
                                                {{--need--}}
                                                {{--to--}}
                                                {{--add on a bit of mascara for length and I am set.</p>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="testimonial-one__slider-control"><a class="prev" href="#"><i--}}
                                                {{--class="far fa-angle-left"> </i>Prev</a><a class="next" href="#">Next<i--}}
                                                {{--class="far fa-angle-right"> </i></a></div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="team-one">--}}
                {{--<div class="container">--}}
                    {{--<div class="section-title -center" style="margin-bottom: 1.875em">--}}
                        {{--<h2>Professional team</h2><img--}}
                            {{--src="{{asset('assets/images/introduction/IntroductionOne/content-deco.png')}}"--}}
                            {{--alt="Decoration"/>--}}
                    {{--</div>--}}
                    {{--<div class="team-one-slider">--}}
                        {{--<div class="slider__item">--}}
                            {{--<div class="team-card">--}}
                                {{--<div class="team-card__avatar"><img src="{{asset('assets/images/team/teamOne/1.png')}}"--}}
                                                                    {{--alt="Danielle Welling"/></div>--}}
                                {{--<div class="team-card__content">--}}
                                    {{--<h3>Danielle Welling</h3>--}}
                                    {{--<h5>Nail master</h5>--}}
                                    {{--<p>Ipsum dolor amet, consectetur adipiscing sedo lacus facilisis.</p>--}}
                                    {{--<socialicons></socialicons>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="slider__item">--}}
                            {{--<div class="team-card">--}}
                                {{--<div class="team-card__avatar"><img src="{{asset('assets/images/team/teamOne/2.png')}}"--}}
                                                                    {{--alt="Cali Lees"/></div>--}}
                                {{--<div class="team-card__content">--}}
                                    {{--<h3>Cali Lees</h3>--}}
                                    {{--<h5>Administrator</h5>--}}
                                    {{--<p>Ipsum dolor amet, consectetur adipiscing sedo lacus facilisis.</p>--}}
                                    {{--<socialicons></socialicons>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="slider__item">--}}
                            {{--<div class="team-card">--}}
                                {{--<div class="team-card__avatar"><img src="{{asset('assets/images/team/teamOne/3.png')}}"--}}
                                                                    {{--alt="Danielle Welling"/></div>--}}
                                {{--<div class="team-card__content">--}}
                                    {{--<h3>Danielle Welling</h3>--}}
                                    {{--<h5>Hair stylish</h5>--}}
                                    {{--<p>Ipsum dolor amet, consectetur adipiscing sedo lacus facilisis.</p>--}}
                                    {{--<socialicons></socialicons>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="cta -style-1" style="background-image: url("{{asset('assets/images/cta/CTAOne/1.png')}}")>--}}
            {{--<div class="container">--}}
                {{--<div class="row">--}}
                    {{--<div class="col-12 col-md-6 mx-auto">--}}
                        {{--<div class="cta__form">--}}
                            {{--<div class="section-title " style="margin-bottom: 1.875em">--}}
                                {{--<h2>Book Service</h2><img--}}
                                    {{--src="{{asset('assets/images/introduction/IntroductionOne/content-deco.png')}}"--}}
                                    {{--alt="Decoration"/>--}}
                            {{--</div>--}}
                            {{--<form class="cta__form__detail validated-form" action="#">--}}
                                {{--<div class="input-validator">--}}
                                    {{--<input type="text" placeholder="Your name" name="name" required="required"/>--}}
                                {{--</div>--}}
                                {{--<div class="input-validator">--}}
                                    {{--<input type="text" placeholder="Your phone" name="phone" required="required"/>--}}
                                {{--</div>--}}
                                {{--<div class="input-validator">--}}
                                    {{--<select class="customed-select required" name="service">--}}
                                        {{--<option value="" hidden="hidden">Choose a services</option>--}}
                                        {{--<option value="Spa">Spa</option>--}}
                                        {{--<option value="Salon">Salon</option>--}}
                                        {{--<option value="Nail">Nail</option>--}}
                                    {{--</select>--}}
                                {{--</div>--}}
                                {{--<div class="input-validator">--}}
                                    {{--<select class="customed-select required" name="date">--}}
                                        {{--<option value="" hidden="hidden">Choose a data</option>--}}
                                        {{--<option value="Yesterday">Yesterday</option>--}}
                                        {{--<option value="Today">Today</option>--}}
                                        {{--<option value="Tomorow">Tomorow</option>--}}
                                    {{--</select>--}}
                                {{--</div>--}}
                                {{--<button class="btn -light-red">Appoitment--}}
                                {{--</button>--}}
                            {{--</form>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        </div>
    </div>

@endsection
