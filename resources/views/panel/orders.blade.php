@extends("layouts.panel")
@section("content")

    <!-- Main Content -->
    <section class="content home">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>Лист заказов
                        <small class="text-muted">Добро пожаловать в административную панель!</small>
                    </h2>
                </div>
                {{--<div class="col-lg-5 col-md-6 col-sm-12">--}}
                {{--<button class="btn btn-primary btn-icon btn-round hidden-sm-down float-right m-l-10" type="button">--}}
                {{--<i class="zmdi zmdi-plus"></i>--}}
                {{--</button>--}}
                {{--<ul class="breadcrumb float-md-right">--}}
                {{--<li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> Compass</a></li>--}}
                {{--<li class="breadcrumb-item"><a href="javascript:void(0);">Types</a></li>--}}
                {{--<li class="breadcrumb-item active">List</li>--}}
                {{--</ul>--}}
                {{--</div>--}}
            </div>
        </div>
        <div class="container-fluid">
            <div class="row clearfix">
                @foreach($orders as $order)

                    <div class="col-lg-4 col-md-12">
                        <div class="card property_list">
                            {{--<div class="property_image">--}}
                            {{--<img class="img-thumbnail img-fluid" src="{{asset($prod->img_path)}}" alt="img">--}}
                            {{--<span class="badge badge-danger">For Sale</span>--}}
                            {{--</div>--}}
                            <div class="body">
                                <div class="property-content">
                                    <div class="detail">
                                        <h5 class="text-success m-t-0 m-b-0">#{{$order->id}}</h5>
                                        <ul>
                                            <h4>ID Заказчик:{{$order->user->id}}</h4>


                                            @foreach($order->order as $prod)

                                                <li>
                                                    <h4 class="m-t-0"><a href="/product/{{$prod->product->id}}"
                                                                         class="col-blue-grey">{{$prod->product->name}}</a></h4>
                                                    <h5>Кол-во:{{$prod->quantity}}</h5>
                                                </li>
                                            @endforeach
                                        </ul>
                                        {{--@if(isset($prod->Brand))--}}
                                        {{--<p class="text-muted"><i class="zmdi zmdi-pin m-r-5"></i>{{$prod->Brand->name}}</p>--}}
                                        {{--@endif--}}
                                        {{--<p class="text-muted m-b-0">{{$prod->description}}</p>--}}
                                    </div>
                                    {{--<div class="property-action m-t-15">--}}
                                    {{--<a href="#" title="Square Feet"><i--}}
                                    {{--class="zmdi zmdi-view-dashboard"></i><span>280</span></a>--}}
                                    {{--<a href="#" title="Bedroom"><i class="zmdi zmdi-hotel"></i><span>4</span></a>--}}
                                    {{--<a href="#" title="Parking space"><i--}}
                                    {{--class="zmdi zmdi-car-taxi"></i><span>2</span></a>--}}
                                    {{--<a href="#" title="Garages"><i class="zmdi zmdi-home"></i><span> 24H</span></a>--}}
                                    {{--</div>--}}
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                {{--<div class="col-lg-4 col-md-12">--}}
                {{--<div class="card property_list">--}}
                {{--<div class="property_image">--}}
                {{--<img class="img-thumbnail img-fluid" src="assets/images/image-gallery/5.jpg" alt="img">--}}
                {{--<span class="badge badge-warning">For Rent</span>--}}
                {{--</div>--}}
                {{--<div class="body">--}}
                {{--<div class="property-content">--}}
                {{--<div class="detail">--}}
                {{--<h5 class="text-success m-t-0 m-b-0">$390,000 - $430,000</h5>--}}
                {{--<h4 class="m-t-0"><a href="#" class="col-blue-grey">4BHK Alexander Court,New--}}
                {{--York</a></h4>--}}
                {{--<p class="text-muted"><i class="zmdi zmdi-pin m-r-5"></i>245 E 20th St, New York, NY--}}
                {{--201609</p>--}}
                {{--<p class="text-muted m-b-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit--}}
                {{--Aliquam gravida magna et fringilla convallis. Pellentesque habitant morb</p>--}}
                {{--</div>--}}
                {{--<div class="property-action m-t-15">--}}
                {{--<a href="#" title="Square Feet"><i--}}
                {{--class="zmdi zmdi-view-dashboard"></i><span>280</span></a>--}}
                {{--<a href="#" title="Bedroom"><i class="zmdi zmdi-hotel"></i><span>4</span></a>--}}
                {{--<a href="#" title="Parking space"><i--}}
                {{--class="zmdi zmdi-car-taxi"></i><span>2</span></a>--}}
                {{--<a href="#" title="Garages"><i class="zmdi zmdi-home"></i><span> 24H</span></a>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-lg-4 col-md-12">--}}
                {{--<div class="card property_list">--}}
                {{--<div class="property_image">--}}
                {{--<img class="img-thumbnail img-fluid" src="assets/images/image-gallery/5.jpg" alt="img">--}}
                {{--<span class="badge badge-danger">For Sale</span>--}}
                {{--</div>--}}
                {{--<div class="body">--}}
                {{--<div class="property-content">--}}
                {{--<div class="detail">--}}
                {{--<h5 class="text-success m-t-0 m-b-0">$390,000 - $430,000</h5>--}}
                {{--<h4 class="m-t-0"><a href="#" class="col-blue-grey">4BHK Alexander Court,New--}}
                {{--York</a></h4>--}}
                {{--<p class="text-muted"><i class="zmdi zmdi-pin m-r-5"></i>245 E 20th St, New York, NY--}}
                {{--201609</p>--}}
                {{--<p class="text-muted m-b-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit--}}
                {{--Aliquam gravida magna et fringilla convallis. Pellentesque habitant morb</p>--}}
                {{--</div>--}}
                {{--<div class="property-action m-t-15">--}}
                {{--<a href="#" title="Square Feet"><i--}}
                {{--class="zmdi zmdi-view-dashboard"></i><span>280</span></a>--}}
                {{--<a href="#" title="Bedroom"><i class="zmdi zmdi-hotel"></i><span>4</span></a>--}}
                {{--<a href="#" title="Parking space"><i--}}
                {{--class="zmdi zmdi-car-taxi"></i><span>2</span></a>--}}
                {{--<a href="#" title="Garages"><i class="zmdi zmdi-home"></i><span> 24H</span></a>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-lg-4 col-md-12">--}}
                {{--<div class="card property_list">--}}
                {{--<div class="property_image">--}}
                {{--<img class="img-thumbnail img-fluid" src="assets/images/image-gallery/5.jpg" alt="img">--}}
                {{--<span class="badge badge-danger">For Sale</span>--}}
                {{--</div>--}}
                {{--<div class="body">--}}
                {{--<div class="property-content">--}}
                {{--<div class="detail">--}}
                {{--<h5 class="text-success m-t-0 m-b-0">$390,000 - $430,000</h5>--}}
                {{--<h4 class="m-t-0"><a href="#" class="col-blue-grey">4BHK Alexander Court,New--}}
                {{--York</a></h4>--}}
                {{--<p class="text-muted"><i class="zmdi zmdi-pin m-r-5"></i>245 E 20th St, New York, NY--}}
                {{--201609</p>--}}
                {{--<p class="text-muted m-b-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit--}}
                {{--Aliquam gravida magna et fringilla convallis. Pellentesque habitant morb</p>--}}
                {{--</div>--}}
                {{--<div class="property-action m-t-15">--}}
                {{--<a href="#" title="Square Feet"><i--}}
                {{--class="zmdi zmdi-view-dashboard"></i><span>280</span></a>--}}
                {{--<a href="#" title="Bedroom"><i class="zmdi zmdi-hotel"></i><span>4</span></a>--}}
                {{--<a href="#" title="Parking space"><i--}}
                {{--class="zmdi zmdi-car-taxi"></i><span>2</span></a>--}}
                {{--<a href="#" title="Garages"><i class="zmdi zmdi-home"></i><span> 24H</span></a>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-lg-4 col-md-12">--}}
                {{--<div class="card property_list">--}}
                {{--<div class="property_image">--}}
                {{--<img class="img-thumbnail img-fluid" src="assets/images/image-gallery/5.jpg" alt="img">--}}
                {{--<span class="badge badge-danger">For Sale</span>--}}
                {{--</div>--}}
                {{--<div class="body">--}}
                {{--<div class="property-content">--}}
                {{--<div class="detail">--}}
                {{--<h5 class="text-success m-t-0 m-b-0">$390,000 - $430,000</h5>--}}
                {{--<h4 class="m-t-0"><a href="#" class="col-blue-grey">4BHK Alexander Court,New--}}
                {{--York</a></h4>--}}
                {{--<p class="text-muted"><i class="zmdi zmdi-pin m-r-5"></i>245 E 20th St, New York, NY--}}
                {{--201609</p>--}}
                {{--<p class="text-muted m-b-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit--}}
                {{--Aliquam gravida magna et fringilla convallis. Pellentesque habitant morb</p>--}}
                {{--</div>--}}
                {{--<div class="property-action m-t-15">--}}
                {{--<a href="#" title="Square Feet"><i--}}
                {{--class="zmdi zmdi-view-dashboard"></i><span>280</span></a>--}}
                {{--<a href="#" title="Bedroom"><i class="zmdi zmdi-hotel"></i><span>4</span></a>--}}
                {{--<a href="#" title="Parking space"><i--}}
                {{--class="zmdi zmdi-car-taxi"></i><span>2</span></a>--}}
                {{--<a href="#" title="Garages"><i class="zmdi zmdi-home"></i><span> 24H</span></a>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--<h1>--}}
                {{--{{$products->links()}}--}}
                {{--</h1>--}}
                {{--<div class="col-lg-4 col-md-12">--}}
                {{--<div class="card property_list">--}}
                {{--<div class="property_image">--}}
                {{--<img class="img-thumbnail img-fluid" src="assets/images/image-gallery/5.jpg" alt="img">--}}
                {{--<span class="badge badge-danger">For Sale</span>--}}
                {{--</div>--}}
                {{--<div class="body">--}}
                {{--<div class="property-content">--}}
                {{--<div class="detail">--}}
                {{--<h5 class="text-success m-t-0 m-b-0">$390,000 - $430,000</h5>--}}
                {{--<h4 class="m-t-0"><a href="#" class="col-blue-grey">4BHK Alexander Court,New--}}
                {{--York</a></h4>--}}
                {{--<p class="text-muted"><i class="zmdi zmdi-pin m-r-5"></i>245 E 20th St, New York, NY--}}
                {{--201609</p>--}}
                {{--<p class="text-muted m-b-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit--}}
                {{--Aliquam gravida magna et fringilla convallis. Pellentesque habitant morb</p>--}}
                {{--</div>--}}
                {{--<div class="property-action m-t-15">--}}
                {{--<a href="#" title="Square Feet"><i--}}
                {{--class="zmdi zmdi-view-dashboard"></i><span>280</span></a>--}}
                {{--<a href="#" title="Bedroom"><i class="zmdi zmdi-hotel"></i><span>4</span></a>--}}
                {{--<a href="#" title="Parking space"><i--}}
                {{--class="zmdi zmdi-car-taxi"></i><span>2</span></a>--}}
                {{--<a href="#" title="Garages"><i class="zmdi zmdi-home"></i><span> 24H</span></a>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</div>--}}

            </div>
        </div>
        <div class="container">        {{$orders->links()}}
        </div>
    </section>

@endsection
