@extends('layouts.loginMaster')
@section('body')
<section class="w3l-form-36">
    <div class="form-36-mian section-gap">
        <div class="wrapper">
            <div class="form-inner-cont">
                <h3>{{ __('Login') }}</h3>
                <form action="{{ route('login') }}" method="post" class="signin-form">
                    @csrf
                    <div class="form-input">
                        <span class="fa fa-envelope-o" aria-hidden="true"></span>
                        <input id="email" type="email" name="email" class="{{ $errors->has('email') ? ' is-invalid' : '' }}"
                            placeholder="{{ __('E-Mail Address') }}" value="{{ old('email') }}" required autofocus />
                    </div>
                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong class="w3-text-red">{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                    <div class="form-input">
                        <span class="fa fa-key" aria-hidden="true"></span>
                        <input id="password" type="password" name="password" 
                        class="{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="{{ __('Password') }}" required />
                    </div>
                    @if ($errors->has('password'))
                        <span class="invalid-feedback w3-text-red" role="alert">
                            <strong class="w3-text-red">{{ $errors->first('password') }}</strong>
                        </span>
                    @endif  
                    <div class="login-remember d-grid">
                        <label class="check-remaind">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <span class="checkmark"></span>
                            <p class="remember">Remember me</p>
                        </label>
                        <button class="btn theme-button">{{ __('Login') }}</button>
                    </div>
                    <div class="new-signup">
                        <a href="{{ route('password.request') }}" class="signuplink">{{ __('Forgot Your Password?') }}</a>
                    </div>
                </form>
                <div class="social-icons">
                    <p class="continue"><span>Or</span></p>
                    <div class="social-login">
                        <a href="#facebook">
                            <div class="facebook">
                                <span class="fa fa-facebook" aria-hidden="true"></span>

                            </div>
                        </a>
                        <a href="#google">
                            <div class="google">
                                <span class="fa fa-google-plus" aria-hidden="true"></span>
                            </div>
                        </a>
                    </div>
                </div>
                <p class="signup">Don’t have an account? <a href="{{ route('signup') }}" class="signuplink">Sign up</a></p>
            </div>
        </div>
    </div>
</section>
@endsection