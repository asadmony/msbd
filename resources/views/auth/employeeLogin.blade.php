@extends('layouts.loginMaster')
@section('body')
<section class="w3l-form-36">
    <div class="form-36-mian section-gap" style="background-image: linear-gradient(to right, rgba(0, 0, 0, 0.431), rgba(255, 255, 255, 0)), url(../img/work-awesome.jpg);">
        <div class="wrapper">
            <div class="form-inner-cont col-md-4">
                <h3>{{ __('Employee Login') }}</h3>
                
                @include('alerts.alerts')
                
                <form action="{{ route('login') }}" method="post" class="signin-form">
                    @csrf
                    <input type="hidden" name="employee_login" value="1">
                    <div class="form-input">
                        {{-- <span class="fa fa-envelope-o" aria-hidden="true"></span> --}}
                        <span class="fa fa-phone" aria-hidden="true"></span>
                        <input id="email" type="text" name="login"
                            class="{{ $errors->has('login') ? ' is-invalid' : '' }}"
                            placeholder="{{ __('Mobile number') }}" value="{{ old('login') }}" required autofocus />
                    </div>
                    @if ($errors->has('login'))
                    <span class="invalid-feedback" role="alert">
                        <strong class="w3-text-red">{{ $errors->first('login') }}</strong>
                    </span>
                    @endif
                    <div class="form-input">
                        <span class="fa fa-key" aria-hidden="true"></span>
                        <input id="password" type="password" name="password"
                            class="{{ $errors->has('password') ? ' is-invalid' : '' }}"
                            placeholder="{{ __('Password') }}" required />
                    </div>
                    @if ($errors->has('password'))
                    <span class="invalid-feedback w3-text-red" role="alert">
                        <strong class="w3-text-red">{{ $errors->first('password') }}</strong>
                    </span>
                    @endif
                    <input type="hidden" name="remember" value="on">
                    <div class="login-remember d-grid">
                        {{-- <label class="check-remaind">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                {{ old('remember') ? 'checked' : '' }}>
                            <span class="checkmark"></span>
                            <p class="remember">Remember me</p>
                        </label> --}}
                        
                        <button class="btn btn-default border" type="reset">Reset</button>
                        <button class="btn theme-button">{{ __('Login') }}</button>
                    </div>
                    {{-- <div class="new-signup">
                        <a href="{{ route('password.request') }}"
                            class="signuplink">{{ __('Forgot Your Password?') }}</a>
                    </div> --}}
                </form>
                {{-- <div class="social-icons">
                    <p class="continue"><span>Or</span></p>
                    <div class="social-login">
                        <a href="{{ route('socialLogin', 'facebook') }}">
                            <div class="facebook">
                                <span class="fa fa-facebook" aria-hidden="true"></span>
                            </div>
                        </a>
                        <a href="{{ route('socialLogin', 'google') }}">
                            <div class="google">
                                <span class="fa fa-google-plus" aria-hidden="true"></span>
                            </div>
                        </a>
                    </div>
                </div>
                <p class="signup">Don’t have an account? <a href="{{ route('register') }}" class="signuplink">Sign up</a>
                </p> --}}
            </div>
        </div>
    </div>
</section>
@endsection
