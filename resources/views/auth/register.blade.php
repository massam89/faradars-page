@extends('layouts.app')

@section('content')
    <div class="container">

        <img src="{{ asset('img/login-main.svg') }}" alt="login main image">
    
        <form class="register-form" method="POST" action="{{ route('register') }}">
            @csrf
            <h1>ثبت نام</h1>
            <p>لطفا شماره موبایل یا ایمیل خود را با دقت وارد کنید. زیرا به عنوان نام کاربری شما استفاده خواهد شد.</p>

            <div>
                <label for="email" >{{ __('ایمیل') }}</label>

                <div>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div>
                <label for="password">{{ __('رمز عبور') }}</label>

                <div>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div>
                <label for="password-confirm" >{{ __('ورود مجدد رمز عبور') }}</label>

                <div class="col-md-6">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                </div>
            </div>

                <button type="submit" class="btn">
                    {{ __('ثبت نام کنید') }}
                </button>

        </form>

    </div>
@endsection
