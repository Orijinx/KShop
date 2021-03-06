@extends("layouts.panel")
@section("content")

    <!-- Main Content -->
    <section class="content home">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>Добавить продукт
                        <small class="text-muted">Добропожаловать в административную панель!</small>
                    </h2>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <button class="btn btn-primary btn-icon btn-round hidden-sm-down float-right m-l-10" type="button">
                        <i class="zmdi zmdi-plus"></i>
                    </button>
                    {{--<ul class="breadcrumb float-md-right">--}}
                    {{--<li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> Compass</a></li>--}}
                    {{--<li class="breadcrumb-item"><a href="javascript:void(0);">Property</a></li>--}}
                    {{--<li class="breadcrumb-item active">Add Property</li>--}}
                    {{--</ul>--}}
                </div>
            </div>
        </div>
        <form action="/addProduct" method="post" enctype="multipart/form-data">
            @if(session("status"))
                <h2>{{session("status")}}</h2>
            @endif
            @csrf
            <div class="container-fluid">
                <div class="row clearfix">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="header">
                                <h2><strong>Стандартная</strong> Информация
                                    {{--<small>Description text here...</small>--}}
                                </h2>
                                {{--<ul class="header-dropdown m-r--5">--}}
                                {{--<li class="dropdown"><a href="javascript:void(0);" class="dropdown-toggle"--}}
                                {{--data-toggle="dropdown" role="button" aria-haspopup="true"--}}
                                {{--aria-expanded="false"><i class="zmdi zmdi-more-vert"></i></a>--}}
                                {{--<ul class="dropdown-menu pull-right">--}}
                                {{--<li><a href="javascript:void(0);" class=" waves-effect waves-block">Action</a>--}}
                                {{--</li>--}}
                                {{--<li><a href="javascript:void(0);" class=" waves-effect waves-block">Another--}}
                                {{--action</a></li>--}}
                                {{--<li><a href="javascript:void(0);" class=" waves-effect waves-block">Something--}}
                                {{--else here</a></li>--}}
                                {{--</ul>--}}
                                {{--</li>--}}
                                {{--</ul>--}}
                            </div>
                            <div class="body">
                                <div class="row clearfix">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input type="text" name="name" class="form-control"
                                                   placeholder="Наименование">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Цена" name="price">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <div class="form-line">
                                            <textarea rows="4" name="description" class="form-control no-resize"
                                                      placeholder="Описание"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{--<div class="card">--}}
                        {{--<div class="header">--}}
                        {{--<h2><strong>Property</strong> For--}}
                        {{--<small>Description text here...</small>--}}
                        {{--</h2>--}}
                        {{--<ul class="header-dropdown m-r--5">--}}
                        {{--<li class="dropdown"><a href="javascript:void(0);" class="dropdown-toggle"--}}
                        {{--data-toggle="dropdown" role="button" aria-haspopup="true"--}}
                        {{--aria-expanded="false"><i class="zmdi zmdi-more-vert"></i></a>--}}
                        {{--<ul class="dropdown-menu pull-right">--}}
                        {{--<li><a href="javascript:void(0);" class=" waves-effect waves-block">Action</a>--}}
                        {{--</li>--}}
                        {{--<li><a href="javascript:void(0);" class=" waves-effect waves-block">Another--}}
                        {{--action</a></li>--}}
                        {{--<li><a href="javascript:void(0);" class=" waves-effect waves-block">Something--}}
                        {{--else here</a></li>--}}
                        {{--</ul>--}}
                        {{--</li>--}}
                        {{--</ul>--}}
                        {{--</div>--}}
                        {{--<div class="body">--}}
                        {{--<div class="row clearfix">--}}
                        {{--<div class="col-sm-6">--}}
                        {{--<div class="radio inlineblock m-r-25">--}}
                        {{--<input type="radio" name="radio1" id="radio1" value="option1" checked="">--}}
                        {{--<label for="radio1">For Rent</label>--}}
                        {{--</div>--}}
                        {{--<div class="radio inlineblock">--}}
                        {{--<input type="radio" name="radio1" id="radio2" value="option2">--}}
                        {{--<label for="radio2">For Sale</label>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="col-sm-6">--}}
                        {{--<div class="form-group">--}}
                        {{--<input type="text" class="form-control" placeholder="Price / Rent">--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="col-sm-12">--}}
                        {{--<div class="form-group">--}}
                        {{--<textarea rows="4" class="form-control no-resize"--}}
                        {{--placeholder="Property Address"></textarea>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="row clearfix">--}}
                        {{--<div class="col-lg-3 col-dm-3 col-sm-6">--}}
                        {{--<div class="form-group">--}}
                        {{--<input type="text" class="form-control" placeholder="Bedrooms">--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="col-lg-3 col-dm-3 col-sm-6">--}}
                        {{--<div class="form-group">--}}
                        {{--<input type="text" class="form-control" placeholder="Square ft">--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="col-lg-3 col-dm-3 col-sm-6">--}}
                        {{--<div class="form-group">--}}
                        {{--<input type="text" class="form-control" placeholder="Car Parking">--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="col-lg-3 col-dm-3 col-sm-6">--}}
                        {{--<div class="form-group">--}}
                        {{--<input type="text" class="form-control" placeholder="Year Built">--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        <div class="card">
                            <div class="header">
                                <h2><strong>Секция и Тэг</strong>
                                    {{--<small>Description text here...</small>--}}
                                </h2>
                                {{--<ul class="header-dropdown m-r--5">--}}
                                {{--<li class="dropdown"><a href="javascript:void(0);" class="dropdown-toggle"--}}
                                {{--data-toggle="dropdown" role="button" aria-haspopup="true"--}}
                                {{--aria-expanded="false"><i class="zmdi zmdi-more-vert"></i></a>--}}
                                {{--<ul class="dropdown-menu pull-right">--}}
                                {{--<li><a href="javascript:void(0);" class=" waves-effect waves-block">Action</a>--}}
                                {{--</li>--}}
                                {{--<li><a href="javascript:void(0);" class=" waves-effect waves-block">Another--}}
                                {{--action</a></li>--}}
                                {{--<li><a href="javascript:void(0);" class=" waves-effect waves-block">Something--}}
                                {{--else here</a></li>--}}
                                {{--</ul>--}}
                                </li>
                                </ul>
                            </div>
                            <div class="body">
                                <div class="row">
                                    <div class="col-lg-2 col-md-4 col-sm-6">
                                        <div class="form-line">

                                            <select id="asfqwr" name="brand">
                                                @foreach($brands as $brand)
                                                    <option value="{{$brand->id}}">{{$brand->name}}</option>
                                                @endforeach
                                            </select>
                                            {{--<input type="text" class="form-control" placeholder="Бренд">--}}
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-4 col-sm-6">
                                        <div class="form-line">
                                            <select id="asfqwr" name="tag">
                                                @foreach($tags as $tag)
                                                    <option value="{{$tag->id}}">{{$tag->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    {{--<div class="col-lg-2 col-md-4 col-sm-6">--}}
                                    {{--<div class="form-line">--}}
                                    {{--<input type="text" class="form-control" placeholder="Living Room">--}}
                                    {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="col-lg-2 col-md-4 col-sm-6">--}}
                                    {{--<div class="form-group">--}}
                                    {{--<input type="text" class="form-control" placeholder="Master Bedroom">--}}
                                    {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="col-lg-2 col-md-4 col-sm-6">--}}
                                    {{--<div class="form-group">--}}
                                    {{--<input type="text" class="form-control" placeholder="Bedroom 2">--}}
                                    {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="col-lg-2 col-md-4 col-sm-6">--}}
                                    {{--<div class="form-group">--}}
                                    {{--<input type="text" class="form-control" placeholder="Other Room">--}}
                                    {{--</div>--}}
                                    {{--</div>--}}
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="header">
                                <h2><strong>Картинка</strong>
                                    {{--<small>Description text here...</small>--}}
                                </h2>
                                {{--<ul class="header-dropdown m-r--5">--}}
                                {{--<li class="dropdown"><a href="javascript:void(0);" class="dropdown-toggle"--}}
                                {{--data-toggle="dropdown" role="button" aria-haspopup="true"--}}
                                {{--aria-expanded="false"><i class="zmdi zmdi-more-vert"></i></a>--}}
                                {{--<ul class="dropdown-menu pull-right">--}}
                                {{--<li><a href="javascript:void(0);" class=" waves-effect waves-block">Action</a>--}}
                                {{--</li>--}}
                                {{--<li><a href="javascript:void(0);" class=" waves-effect waves-block">Another--}}
                                {{--action</a></li>--}}
                                {{--<li><a href="javascript:void(0);" class=" waves-effect waves-block">Something--}}
                                {{--else here</a></li>--}}
                                {{--</ul>--}}
                                </li>
                                </ul>
                            </div>
                            {{--<div class="body">--}}
                            {{--<div class="row">--}}
                            {{--<div class="col-sm-12">--}}
                            {{--<div class="checkbox inlineblock m-r-20">--}}
                            {{--<input id="checkbox21" type="checkbox">--}}
                            {{--<label for="checkbox21">Swimming pool</label>--}}
                            {{--</div>--}}
                            {{--<div class="checkbox inlineblock m-r-20">--}}
                            {{--<input id="checkbox22" type="checkbox">--}}
                            {{--<label for="checkbox22">Terrace</label>--}}
                            {{--</div>--}}
                            {{--<div class="checkbox inlineblock m-r-20">--}}
                            {{--<input id="checkbox23" type="checkbox" checked="">--}}
                            {{--<label for="checkbox23">Air conditioning</label>--}}
                            {{--</div>--}}
                            {{--<div class="checkbox inlineblock m-r-20">--}}
                            {{--<input id="checkbox24" type="checkbox" checked="">--}}
                            {{--<label for="checkbox24">Internet</label>--}}
                            {{--</div>--}}
                            {{--<div class="checkbox inlineblock m-r-20">--}}
                            {{--<input id="checkbox25" type="checkbox">--}}
                            {{--<label for="checkbox25">Balcony</label>--}}
                            {{--</div>--}}
                            {{--<div class="checkbox inlineblock m-r-20">--}}
                            {{--<input id="checkbox26" type="checkbox">--}}
                            {{--<label for="checkbox26">Cable TV</label>--}}
                            {{--</div>--}}
                            {{--<div class="checkbox inlineblock m-r-20">--}}
                            {{--<input id="checkbox27" type="checkbox">--}}
                            {{--<label for="checkbox27">Computer</label>--}}
                            {{--</div>--}}
                            {{--<div class="checkbox inlineblock m-r-20">--}}
                            {{--<input id="checkbox28" type="checkbox" checked="">--}}
                            {{--<label for="checkbox28">Dishwasher</label>--}}
                            {{--</div>--}}
                            {{--<div class="checkbox inlineblock m-r-20">--}}
                            {{--<input id="checkbox29" type="checkbox" checked="">--}}
                            {{--<label for="checkbox29">Near Green Zone</label>--}}
                            {{--</div>--}}
                            {{--<div class="checkbox inlineblock m-r-20">--}}
                            {{--<input id="checkbox30" type="checkbox">--}}
                            {{--<label for="checkbox30">Near Church</label>--}}
                            {{--</div>--}}
                            {{--<div class="checkbox inlineblock m-r-20">--}}
                            {{--<input id="checkbox31" type="checkbox">--}}
                            {{--<label for="checkbox31">Near Estate</label>--}}
                            {{--</div>--}}
                            {{--<div class="checkbox inlineblock m-r-20">--}}
                            {{--<input id="checkbox32" type="checkbox">--}}
                            {{--<label for="checkbox32">Cofee pot</label>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    {{--<form action="/" id="frmFileUpload" class="dropzone m-b-15 m-t-15" method="post"--}}
                                    {{--enctype="multipart/form-data">--}}
                                    {{--<div class="dz-message">--}}
                                    {{--<div class="drag-icon-cph"><i class="material-icons">touch_app</i></div>--}}
                                    {{--<h3>Drop files here or click to upload.</h3>--}}
                                    {{--<em>(This is just a demo dropzone. Selected files are <strong>not</strong>--}}
                                    {{--actually uploaded.)</em></div>--}}

                                    {{--</form>--}}
                                    <div class="fallback">
                                        <input name="file" name="file" type="file"/>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <button type="submit" class="btn btn-primary btn-round">Добавить</button>
                                    {{--<button type="submit" class="btn btn-default btn-round btn-simple">Cancel--}}
                                    {{--</button>--}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </form>
    </section>
@endsection
