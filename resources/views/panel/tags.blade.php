@extends("layouts.panel")
@section("content")

    <!-- Main Content -->
    <section class="content home">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>Добавить секции
                        <small class="text-muted">Добро пожаловать в административную панель!</small>
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
        <form action="/addTag" method="post">
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
                            </div>
                            <div class="body">
                                <div class="row clearfix">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input type="text" name="name" class="form-control"
                                                   placeholder="Наименование">
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="card">
                            <div class="col-sm-12">
                                <label for="parent">Отцовская</label>
                                <select  name="parent" id="parent">
                                    <option value="0">Нет</option>
                                    @foreach($tags as $tag)
                                        <option value="{{$tag->id}}">{{$tag->name}}</option>
                                    @endforeach

                                </select>
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
        <form method="post" action="/updateTag" multiple="multiple">
            <div class="container-fluid">
                <div class="row clearfix">
                    <div class="card">
                        <div class="header">
                            <h2><strong>Изменение</strong>
                                {{--<small>Description text here...</small>--}}
                            </h2>
                        </div>
                        <div class="col-sm-12">
                            @csrf

                            <label for="id">Секция</label>
                            <select  name="id">
                                @foreach($tags as $tag)
                                    <option value="{{$tag->id}}">{{$tag->name}}</option>
                                @endforeach

                            </select>
                            {{--<input type="checkbox" value="{{$brand->id}}" id="{{$brand->name}}">--}}
                        </div>

                        <div class="col-sm-12">
                            @csrf

                            <label for="id_parent">Отцовская</label>
                            <select name="id_parent">
                                @foreach($tags as $tag)
                                    <option value="{{$tag->id}}">{{$tag->name}}</option>
                                @endforeach

                            </select>
                            {{--<input type="checkbox" value="{{$brand->id}}" id="{{$brand->name}}">--}}
                            <input type="submit"  class="btn btn-primary btn-round" value="Изменить">
                        </div>
                    </div>
                </div>
            </div>

        </form>
        <form method="post" action="/deleteTag" multiple="multiple">
            <div class="container-fluid">
                <div class="row clearfix">

                    <div class="card">
                        <div class="header">
                            <h2><strong>Удаление</strong>
                                {{--<small>Description text here...</small>--}}
                            </h2>
                        </div>
                        <div class="col-sm-12">
                            @csrf

                            {{--<label for="{{$brand->name}}">{{$brand->name}}</label>--}}
                            <select multiple name="id[]">
                                @foreach($tags as $tag)
                                    <option value="{{$tag->id}}">{{$tag->name}}</option>
                                @endforeach

                            </select>
                            {{--<input type="checkbox" value="{{$brand->id}}" id="{{$brand->name}}">--}}
                            <input type="submit"  class="btn btn-primary btn-round" value="Удалить">
                        </div>
                    </div>
                </div>
            </div>

        </form>

    </section>
@endsection
