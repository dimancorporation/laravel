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
                        <input class="input100" type="text" id="login_username" name="login_username" required>
                        <span class="focus-input100" data-placeholder="Логин"></span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Введите пароль">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
                        <input class="input100" type="password" id="login_password" name="login_password"
                               required>
                        <span class="focus-input100" data-placeholder="Пароль"></span>
                    </div>
                    <div style="display: flex;justify-content: center;">
                        <div>
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label" for="remember">
                                Запомнить меня
                            </label>
                        </div>
                    </div>
                    <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>
                            <button class="login100-form-btn">
                                Вход
                            </button>
                        </div>
                    </div>
                    <div style="display: flex;justify-content: center;">
                        @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                Забыли пароль?
                            </a>
                        @endif
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
