@extends('layouts.app')

@section('content')
    {{--
    Сброс пароля
    Введите ваш email, чтобы получить инструкцию для сброса пароля
    Вернуться на форму входа
    --}}
    <div class="limiter login">
        <div class="container-login100">
            <div class="wrap-login100">
                <form class="login100-form validate-form" method="POST" action="{{ route('password.email') }}" name="form">
                    @csrf
                    <span class="login100-form-title p-b-26">
						<img src="{{asset('images/logo_blue_mini.png')}}" height="80" alt="">
						<img src="{{asset('images/logo_bank2.png')}}" height="180" alt="">
					</span>
                    <span class="login100-form-title p-b-26"></span>
                    <div class="wrap-input100 validate-input" data-validate="Введите логин">
                        <input id="email" type="email" class="input100 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        <span class="focus-input100" data-placeholder="Email"></span>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>
                            <button class="login100-form-btn">
                                ПРОДОЛЖИТЬ
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
