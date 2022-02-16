@extends('layouts.web')

@section('content')
{{--<div class="container">--}}
{{--    <div class="row justify-content-center">--}}
{{--        <div class="col-md-8">--}}
{{--            <div class="card">--}}
{{--                <div class="card-header">{{ __('Login') }}</div>--}}

{{--                <div class="card-body">--}}
{{--                    <div>--}}
{{--                        <ul>--}}
{{--                        <li>--}}
{{--                            email : superadmin@gmail.com--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            password : 1234--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                    </div>--}}
{{--                    <form method="POST" action="{{ route('login') }}">--}}
{{--                        @csrf--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>--}}

{{--                                @error('email')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">--}}

{{--                                @error('password')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row">--}}
{{--                            <div class="col-md-6 offset-md-4">--}}
{{--                                <div class="form-check">--}}
{{--                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>--}}

{{--                                    <label class="form-check-label" for="remember">--}}
{{--                                        {{ __('Remember Me') }}--}}
{{--                                    </label>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row mb-0">--}}
{{--                            <div class="col-md-8 offset-md-4">--}}
{{--                                <button type="submit" class="btn btn-primary">--}}
{{--                                    {{ __('Login') }}--}}
{{--                                </button>--}}

{{--                                @if (Route::has('password.request'))--}}
{{--                                    <a class="btn btn-link" href="{{ route('password.request') }}">--}}
{{--                                        {{ __('Forgot Your Password?') }}--}}
{{--                                    </a>--}}
{{--                                @endif--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}

<!-- Start Page Title Area -->
<div class="page-title-area bg-25">
    <div class="container">
        <div class="page-title-content">
            <h2>Log in</h2>

            <ul>
                <li>
                    <a href="index.html">
                        Home
                    </a>
                </li>

                <li class="active">Log in</li>
            </ul>
        </div>
    </div>
</div>
<!-- End Page Title Area -->

<!-- Start User Area -->
<section class="user-area ptb-100">
    <div class="container">
        <div class="user-form-content max-width-600">
            <form method="POST" action="{{ route('login') }}" class="user-form">
                @csrf
                <h3>Log in to your account</h3>

                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label>Email</label>
                            <input id="email" type="text" name="email" class="form-control" type="text" name="name">
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-group">
                            <label>Password</label>
                            <input id="password" type="password" name="password" class="form-control" type="password" name="password">
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="login-action">
								<span class="log-rem">
									<input id="remember-2" type="checkbox">
									<label>Keep me logged in</label>
								</span>

                            <span class="forgot-login">
									<a href="#">Forgot your password?</a>
								</span>
                        </div>
                    </div>

                    <div class="col-12">
                        <button class="default-btn" type="submit">
                            Log in
                        </button>
                    </div>

                    <div class="col-12">
                        <p class="create">Don’t have an account? <a href="register.html">create</a></p>
                    </div>
                </div>
            </form>
        </div>
</section>
<!-- End User Area -->

@endsection
