@extends('layouts.lo')

@section('content')
    <div id="content">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">{{ __('Вход') }}</div>

                        <div class="card-body">
                            <hr>
                            <form method="POST" action="{{ route('login') }}" class="cta__form__detail validated-form">
                                @csrf
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

                                <div class="mb-3 form-check" hidden>
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="remember" value="true">
                                    {{--<label class="form-check-label" for="exampleCheck1">Запонить меня</label>--}}

                                    {{--<div class="form-check">--}}
                                    {{--<input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>--}}

                                    <label class="form-check-label" for="remember">
                                        {{ __('Запомнить меня') }}
                                    </label>
                                    {{--</div>--}}
                                </div>
                                <button type="submit" class="btn btn-primary">Войти</button>
                            </form>

                            <hr>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
    </div>

@endsection
