@extends('layouts.web')

@section('custom_css')
    <style>
        .user-area .user-form-content .user-form{
            box-shadow: rgba(255, 255, 255, 0.1) 0px 1px 1px 0px inset, rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px;
        }
    </style>
@endsection

@section('content')
{{--<div class="container">--}}
{{--    <div class="row justify-content-center">--}}
{{--        <div class="col-md-8">--}}
{{--            <div class="card">--}}
{{--                <div class="card-header">{{ __('Register') }}</div>--}}

{{--                <div class="card-body">--}}
{{--                    <form method="POST" action="{{ route('register') }}">--}}
{{--                        @csrf--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>--}}

{{--                                @error('name')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">--}}

{{--                                @error('email')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}


{{--                        <div class="form-group row">--}}
{{--                            <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Phone') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="phone" type="number" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone">--}}

{{--                                @error('phone')--}}
{{--                                <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">--}}

{{--                                @error('password')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row mb-0">--}}
{{--                            <div class="col-md-6 offset-md-4">--}}
{{--                                <button type="submit" class="btn btn-primary">--}}
{{--                                    {{ __('Register') }}--}}
{{--                                </button>--}}
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
            <h2>Register</h2>

            <ul>
                <li>
                    <a href="index.html">
                        Home
                    </a>
                </li>

                <li class="active">Register</li>
            </ul>
        </div>
    </div>
</div>
<!-- End Page Title Area -->

<!-- Start User Area -->
<section class="user-area ptb-100">
    <div class="container">
        <div class="user-form-content max-width-600">
            <form class="user-form" method="POST" action="{{ route('register') }}">
                @csrf
                <h3>Create an account</h3>
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label>Name</label>
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="form-group">
                            <label>Buet ID</label>
                            <input id="buet_id" type="number" class="form-control @error('buet_id') is-invalid @enderror" name="buet_id" value="{{ old('buet_id') }}" required autocomplete="name" autofocus>
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="form-group">
                            <label>HSC Batch</label>
                            <select id="batch" class="form-select form-control" name="batch">
                                <option>Year</option>
                                <option value="2022">2022</option>
                                <option value="2021">2021</option>
                                <option value="2020">2020</option>
                                <option value="2019">2019</option>
                                <option value="2018">2018</option>
                                <option value="2017">2017</option>
                                <option value="2016">2016</option>
                                <option value="2015">2015</option>
                                <option value="2014">2014</option>
                                <option value="2013">2013</option>
                                <option value="2012">2012</option>
                                <option value="2011">2011</option>
                                <option value="2010">2010</option>
                                <option value="2009">2009</option>
                                <option value="2008">2008</option>
                                <option value="2007">2007</option>
                                <option value="2006">2006</option>
                                <option value="2005">2005</option>
                                <option value="2004">2004</option>
                                <option value="2003">2003</option>
                                <option value="2002">2002</option>
                                <option value="2001">2001</option>
                                <option value="2000">2000</option>
                                <option value="1999">1999</option>
                                <option value="1998">1998</option>
                                <option value="1997">1997</option>
                                <option value="1996">1996</option>
                                <option value="1995">1995</option>
                                <option value="1994">1994</option>
                                <option value="1993">1993</option>
                                <option value="1992">1992</option>
                                <option value="1991">1991</option>
                                <option value="1990">1990</option>
                                <option value="1989">1989</option>
                                <option value="1988">1988</option>
                                <option value="1987">1987</option>
                                <option value="1986">1986</option>
                                <option value="1985">1985</option>
                                <option value="1984">1984</option>
                                <option value="1983">1983</option>
                                <option value="1982">1982</option>
                                <option value="1981">1981</option>
                                <option value="1980">1980</option>
                                <option value="1979">1979</option>
                                <option value="1978">1978</option>
                                <option value="1977">1977</option>
                                <option value="1976">1976</option>
                                <option value="1975">1975</option>
                                <option value="1974">1974</option>
                                <option value="1973">1973</option>
                                <option value="1972">1972</option>
                                <option value="1971">1971</option>
                                <option value="1970">1970</option>

                            </select>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-group">
                            <label>Department</label>
                            <select id="department" name="department" class="form-select form-control" aria-label="Default select example">
                                <option selected>Select Department</option>
                                <option value="Architecture">Architecture</option>
                                <option value="Chemical Engineering">Chemical Engineering</option>
                                <option value="Civil Engineering">Civil Engineering</option>
                                <option value="Computer Science and Engineering">Computer Science and Engineering</option>
                                <option value="Electrical and Electronics Engineering">Electrical and Electronics Engineering</option>
                                <option value="Industrial and Production Engineering">Industrial and Production Engineering</option>
                                <option value="Mechanical Engineering">Mechanical Engineering</option>
                                <option value="Materials and Metallurgical Engineering">Materials and Metallurgical Engineering</option>
                                <option value="Naval Architecture and Marine Engineering">Naval Architecture and Marine Engineering</option>
                                <option value="Petroleum and Mineral Resources Engineering">Petroleum and Mineral Resources Engineering</option>
                                <option value="Urban and Regional Planning">Urban and Regional Planning</option>
                                <option value="Water Resources Engineering">Water Resources Engineering</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-group">
                            <label>Email</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-group">
                            <label>Phone</label>
                            <input id="phone" type="number" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone">
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-group">
                            <label>Password</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-group">
                            <label>Confirm Password</label>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>
                    </div>

{{--                    <div class="col-12">--}}
{{--                        <div class="login-action">--}}
{{--								<span class="log-rem">--}}
{{--									<input id="remember-2" type="checkbox">--}}
{{--									<label>Show password</label>--}}
{{--								</span>--}}
{{--                        </div>--}}
{{--                    </div>--}}

                    <div class="col-12">
                        <button class="default-btn register" type="submit">
                            Register now
                        </button>
                    </div>

{{--                    <div class="col-12">--}}
{{--                        <span class="or">Or</span>--}}
{{--                    </div>--}}

{{--                    <div class="col-lg-6 col-md-6">--}}
{{--                        <a href="#" class="or-login">--}}
{{--                            <i class="ri-facebook-fill"></i>--}}
{{--                            Login with facebook--}}
{{--                        </a>--}}
{{--                    </div>--}}

{{--                    <div class="col-lg-6 col-md-6">--}}
{{--                        <a href="#" class="or-login google">--}}
{{--                            <i class="ri-google-fill"></i>--}}
{{--                            Login with google--}}
{{--                        </a>--}}
{{--                    </div>--}}

                    <div class="col-12">
                        <p class="create">Already have an account? <a href="{{route('login')}}">Log in</a></p>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
<!-- End User Area -->
@endsection
