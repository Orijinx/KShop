@extends('layouts.lo')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Register') }}</div>

                    <div class="card-body">


                        <hr>
                        <form method="POST" action="{{ route('register') }}" class="cta__form__detail validated-form">
                            @csrf


                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Имя') }}</label>

                            <div class="mb-3">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                       name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email</label>
                                <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                                       aria-describedby="emailHelp">
                                {{--<div class="col-md-6">--}}
                                {{--<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>--}}

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                {{--</div>--}}
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Пароль</label>
                                <input type="password" name="password" class="form-control"
                                       id="exampleInputPassword1">

                                {{--<div class="col-md-6">--}}

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                {{--</div>--}}
                            </div>
                            <div class="mb-3">
                                {{--<label for="exampleInputPassword1" class="form-label">Подтвердите</label>--}}
                                <input type="password" name="password_confirmation">

                                {{--<div class="col-md-6">--}}

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                {{--</div>--}}
                            </div>


                            <button type="submit" class="btn btn-primary">Войти</button>
                        </form>

                        <hr>


                        {{--<form method="POST" action="{{ route('register') }}">--}}
                        {{--@csrf--}}

                        {{--<div class="form-group row">--}}
                        {{--<label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>--}}

                        {{--<div class="col-md-6">--}}
                        {{--<input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>--}}

                        {{--@error('name')--}}
                        {{--<span class="invalid-feedback" role="alert">--}}
                        {{--<strong>{{ $message }}</strong>--}}
                        {{--</span>--}}
                        {{--@enderror--}}
                        {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group row">--}}
                        {{--<label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>--}}

                        {{--<div class="col-md-6">--}}
                        {{--<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">--}}

                        {{--@error('email')--}}
                        {{--<span class="invalid-feedback" role="alert">--}}
                        {{--<strong>{{ $message }}</strong>--}}
                        {{--</span>--}}
                        {{--@enderror--}}
                        {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group row">--}}
                        {{--<label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>--}}

                        {{--<div class="col-md-6">--}}
                        {{--<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">--}}

                        {{--@error('password')--}}
                        {{--<span class="invalid-feedback" role="alert">--}}
                        {{--<strong>{{ $message }}</strong>--}}
                        {{--</span>--}}
                        {{--@enderror--}}
                        {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group row">--}}
                        {{--<label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>--}}

                        {{--<div class="col-md-6">--}}
                        {{--<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">--}}
                        {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group row mb-0">--}}
                        {{--<div class="col-md-6 offset-md-4">--}}
                        {{--<button type="submit" class="btn btn-primary">--}}
                        {{--{{ __('Register') }}--}}
                        {{--</button>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--</form>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
