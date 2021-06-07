@extends('layouts.loginMaster')
@section('body')
<section class="w3l-form-36">
    <div class="form-36-mian section-gap">
        <div class="wrapper">
            <div class="form-inner-cont col-md-9">
                <h3>{{ __('Register') }}</h3>
                @include('alerts.alerts')
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="form-group row mt-3">
                        {{-- <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label> --}}
                        <div class="col-md-12">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><span class="fa fa-user" aria-hidden="true"></span>
                            </div>
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="Full Name *" autofocus>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                        
                    </div>
                    
                    <div class="form-group row">
                        <div class="input-group col-md-12">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-graduation-cap"></i>
                            </div>
                            <select name="education_level" id="education_level" class="form-control">
                            <option >Select Education *</option>
                            @foreach ($userSettingFields[8]->values as $value)
                            <option>{{ $value->title }}</option>
                            @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-6  mb-3 mb-md-0">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1"><i class="fa fa-briefcase"></i>
                                </div>
                                <select name="profession" id="profession" class="form-control">
                                <option >Select Occupation *</option>
                                @foreach ($userSettingFields[9]->values as $value)
                                    <option>{{ $value->title }}</option>
                                @endforeach
                                </select>
                            </div>
                        </div>
                         {{-- <div class="col-md-6">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">
                                        <i class="fa fa-money"></i>
                                </div>
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-white" id="basic-addon1">
                                        &#2547;
                                </div>
                                <input type="number" step="0.5" min="50000" name="monthly_income" id="monthly_income" class="form-control" placeholder="Monthly Income (min. 50000)" required>
                                <span  style="display: none;">Tips: Income should be more than &#2547;50000 </span>
                            </div>
                            <small id="monthly_income_tips" style="display: none;">Tips: Income should be more than &#2547;50000</small>
                        </div> --}}
                    </div>

                    <div class="form-group row">
                        <div class="input-group col-md-6 mb-3 mb-md-0">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-users"></i>
                            </div>
                            <input type="text" name="father_name" class="form-control" placeholder="Father's Name / Mother's Name *">
                        </div>
                        <div class="col-md-6">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1"><i class="fa fa-pencil-square-o "></i>
                                </div>
                                <select name="profile_created_by" id="" class="form-control">
                                <option selected disabled>Profile created by *</option>
                                @foreach ($userSettingFields[1]->values as $value)
                                    <option>{{ $value->title }}</option>
                                @endforeach
                                </select>
                            </div>
                        </div>
                        {{-- <div class="col-md-6">
                            <div class="input-group ">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1"><i class="fa fa-users"></i>
                                </div>
                                <input type="text" class="form-control" name="father_education" placeholder="Father's Education Background">
                            </div>

                        </div> --}}
                    </div>
                    <div class="form-group row">
                        {{-- <div class="input-group col-md-6 mb-3 mb-md-0">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-users"></i>
                            </div>
                            <select class="form-control" name="father_occupation" id="father_occupation">
                                <option selected disabled>Select Father's Occupation</option>
                                @foreach ($userSettingFields[11]->values as $value)
                                    <option>{{ $value->title }}</option>
                                @endforeach
                            </select>
                        </div> --}}
                        {{-- <div class="col-md-6">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1"><i class="fa fa-pencil-square-o "></i>
                                </div>
                                <select name="family_type" id="" class="form-control">
                                <option selected disabled>Select Family Class</option>
                                @foreach ($userSettingFields[13]->values as $value)
                                    <option>{{ $value->title }}</option>
                                @endforeach
                                </select>
                            </div>
                        </div> --}}
                    </div>

                    <div class="form-group row">
                        <div class="input-group col-md-6  p-0 ">
                            <div class="form-group label-floating {{ $errors->has('gender') ? ' has-error' : '' }}">
                                <div class="input-group">
                                    <div class="col-md-7"><label class="control-label">Gender * <small></small> </label>
                                    </div>
                                    <div class="col-md-5 p-0">
                                        <select required class="form-control" style="min-width: 130px;"  id="gender" name="gender">
                                                    
                                            @if(old('gender'))
                                            <option selected>{{old('gender')}}</option>
                                            @else 
                                            <option value="" selected disabled>Select Gender</option>
                                            @endif
                                            {{-- id:1, title:gender --}}
                                            @foreach ($userSettingFields[0]->values as $value)
                                              <option>{{ $value->title }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                @if ($errors->has('gender'))
                                    <span class="text-red">
                                        <strong>{{ $errors->first('gender') }}</strong>
                                    </span>
                                    @else
                                    {{-- <span class="text-red">Country is required</span> --}}
                                    @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1"><i class="fa fa-birthday-cake"></i>
                                </div>
                                <input type="date" name="birth_date" class="form-control" placeholder="Birthdate *">
                            </div>
                        </div>
                        
                    </div>

                    
                    <div class="form-group row">
                        {{-- <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label> --}}
                        
                        <div class="input-group col-md-12">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><span class="fa fa-envelope-o" aria-hidden="true"></span>
                            </div>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="E-mail Address" required autocomplete="email">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        {{-- <label for="mobile" class="col-md-4 col-form-label text-md-right">{{ __('Mobile') }}</label> --}}
                        <div class="input-group col-md-12">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><span class="fa fa-phone" aria-hidden="true"></span>
                            </div>
                            <input id="text" type="mobile" class="form-control @error('mobile') is-invalid @enderror" name="mobile" value="{{ old('mobile') }}" required placeholder="Mobile number *" autocomplete="mobile">

                            @error('mobile')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        {{-- <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label> --}}

                        <div class="input-group col-md-12">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><span class="fa fa-key" aria-hidden="true"></span>
                            </div>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password *" name="password" required autocomplete="new-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        {{-- <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label> --}}

                        <div class="input-group col-md-12">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><span class="fa fa-lock" aria-hidden="true"></span>
                            </div>
                            <input id="password-confirm" type="password" class="form-control" placeholder="Confirm Password *" name="password_confirmation" required autocomplete="new-password">
                        </div>
                    </div>
                    <div>
                        <small> * Required</small>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="input-group col-md-12 offset-md-4">
                            <button class="btn btn-default border mr-2" type="reset">Reset</button>
                            <button type="submit" class="btn btn-primary">
                                {{ __('Register') }}
                            </button>
                        </div>
                    </div>
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
                </div> --}}
                <p class="signup">Alredy have an account? <a href="{{ route('login') }}" class="signuplink">Sign In</a>
                </p>
            </div>
        </div>
    </div>
</section>
@endsection

@push('js')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        // $(document).ready(function () {
        //     $("#monthly_income").focus(function () {
        //         $("monthly_income_tips").css("display", "inline").fadeOut(2000);
        //     })

        // })
        $(document).ready(function(){
              $("#monthly_income").focus(function(){
                $("#monthly_income_tips").css("display", "inline")
                // .fadeOut(5000);
              });
            });
    </script>
@endpush