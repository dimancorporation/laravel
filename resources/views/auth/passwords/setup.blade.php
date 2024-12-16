@extends('layouts.app')

@section('content')
    <div class="limiter login">
        <div class="container-login100">
            <div class="wrap-login100">
                <form class="login100-form validate-form" method="POST" action="{{ route('login') }}" name="form">
                    @csrf
                    <span class="login100-form-title p-b-26">
						<img src="{{asset('images/logo_blue_mini.png')}}" height="80" alt="">
						<img src="{{asset('images/logo_bank2.png')}}" height="180" alt="">
					</span>
                    <span class="login100-form-title p-b-26"></span>
                    <div class="wrap-input100 validate-input" data-validate="Введите логин">
                        <input class="input100" type="email" id="email" name="email" value="{{ old('email') }}" required
                               autocomplete="email">
                        <span class="focus-input100" data-placeholder="Email"></span>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                        @enderror
                    </div>
                    <div class="wrap-input100 validate-input">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
                        <input class="input100" type="password" id="password" name="password" required>
                        <span class="focus-input100" data-placeholder="Пароль"></span>
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="wrap-input100 validate-input">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
                        <input class="input100" type="password" id="repeat_password" name="repeat_password" required>
                        <span class="focus-input100" data-placeholder="Повторите пароль"></span>
                        @error('repeat_password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>
                            <button class="login100-form-btn">
                                Вход
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
