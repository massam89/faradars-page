@extends('layouts.app')

@section('content')
<div class="container">
    <img src="{{ asset('img/login-main.svg') }}" alt="login main image">

    <form class="register-form" method="POST" action="{{ route('login') }}">
        @csrf

        <h1>ورود به حساب کاربری</h1>
        <div class="row mb-3">
            <label for="email">{{ __('ایمیل') }}</label>

            <div>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="row mb-3">
            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('رمز عبور') }}</label>

            <div class="col-md-6">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="row mb-0">
            <div class="col-md-8 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('ورود') }}
                </button>

                @if (Route::has('password.request'))
                    <a class="btn-link" href="{{ route('password.request') }}">
                        {{ __('رمز عبور خود را فراموش کرده اید؟') }}
                    </a>
                @endif
            </div>
        </div>
    </form>

</div>
@endsection
