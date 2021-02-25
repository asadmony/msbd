<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
<meta name="viewport" content="width=device-width" />

@if ($websiteParameter->favicon)

<link rel="shortcut icon" href="{{ asset('storage/favicon/'. $websiteParameter->favicon) }}" type="image/x-icon">
<link rel="icon" href="{{ asset('storage/favicon/'. $websiteParameter->favicon) }}" type="image/x-icon">

@else

<link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}" type="image/x-icon">
<link rel="icon" href="{{ asset('img/favicon.ico') }}" type="image/x-icon">

@endif
<title>
    Signup &#45; {{env('APP_NAME')}}
</title>

<meta name="description" 
content="{{ $websiteParameter->meta_description ?: 'Matrimony Service in Bangladesh
Marriage Media Service provider in Bangladesh
Matchmaker Service in Bangladesh Looing for Marriage Media In Bangladesh? Taslima marriage media is the trustworthy media in Dhaka, Bangladesh. We offer you the best matched life parner according to your profile. Create a free account and search your partner.' }}">

    <meta name="author" content="{{ $websiteParameter->meta_author ?: 'Taslima' }}">
    <meta name="keywords" content="{{ $websiteParameter->meta_keyword ?: 'Matrimony Service in Bangladesh
Marriage Media Service provider in Bangladesh
Matchmaker Service in Bangladesh' }}">

@if ($websiteParameter->google_analytics_code)
{!! $websiteParameter->google_analytics_code !!}
@endif

@if ($websiteParameter->facebook_pixel_code)
{!! $websiteParameter->facebook_pixel_code !!}
@endif

<link href="{{asset('css/w3.css')}}" rel="stylesheet" />

<!-- Theme style -->
<link rel="stylesheet" href="{{asset('cp/dist/css/AdminLTE.css')}}">

<!--     Fonts and icons     -->
<link rel="stylesheet" type="text/css" href="{{asset('https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons')}}" />
<link rel="stylesheet" href="{{asset('https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css')}}" />

<!-- CSS Files -->
<link href="{{ asset('mk/mk2/assets/css/bootstrap.min.css') }}" rel="stylesheet" />
<link href="{{ asset('mk/mk2/assets/css/material-bootstrap-wizard.css') }}" rel="stylesheet" />

<!-- CSS Just for demo purpose, don't include it in your project -->
<link href="{{ asset('mk/mk2/assets/css/demo.css') }}" rel="stylesheet" />
</head>

<body>


<div class="image-container set-full-height" style="background-image: url('mk/mk2/assets/img/wizard-profile.jpg')">
  <!--   Creative Tim Branding   -->
  <a href="{{url('/')}}">
       <div class="logo-container">
           
              <img class="img-responsive rounded w3-round" src="{{ asset($websiteParameter->logo ? 'storage/logo/'.$websiteParameter->logo : 'img/logo.jpg') }}" alt="{{ env('APP_NAME_BIG') }}" style="width: 154px; margin-top: -16px;">
      </div>
  </a>

<!--  Made With Material Kit  -->
<a href="{{ url('/') }}" class="made-with-mk hidden-xs">
  <div class="brand">MS</div>
  <div class="made-with">{{ $websiteParameter->h1 }}</div>
</a>

  <!--   Big container   -->
  <div class="container">
      <div class="row">
        <div class="col-sm-8 col-sm-offset-2">



          @include('alerts.alerts')

 

            <!--      Wizard container        -->
            <div class="wizard-container" style="margin-top: -30px;">
                <div class="card wizard-card" data-color="purple" id="wizardProfile">
                    <form enctype="multipart/form-data" action="{{ route('signupPost') }}" method="post">
                <!--        You can switch " data-color="purple" "  with one of the next bright colors: "green", "orange", "red", "blue"       -->

                      <div class="wizard-header">
                          <h3 class="wizard-title">
                             Submit Your Information
                          </h3>
              {{-- <h5>This information will let us know more about you.</h5> --}}
                      </div>
            <div class="wizard-navigation">
              <ul>
                              <li><a href="#basic" data-toggle="tab">Basic</a></li>
                              <li><a href="#about" data-toggle="tab">About</a></li>
                              <li><a href="#partner" data-toggle="tab">Partner</a></li>
                          </ul>
            </div>

                        <div class="tab-content">
                            <div class="tab-pane" id="basic">
                              <div class="row">
                                  {{-- <h4 class="info-text"> Let's start with the basic information (with validation)</h4> --}}
                                  <div class="col-sm-4">
                                      <div class="picture-container">
                                          <div class="picture">
                                            <img src="{{ asset('mk/mk2/assets/img/default-avatar.png') }}" class="picture-src" id="wizardPicturePreview" title=""/>
                                              <input type="file" required name="file" id="wizard-picture">
                                          </div>
                                          <h6>Choose Picture <small class="w3-text-red">(Required)</small> <br> <small class="text-red">Square Sized Image is Better</small>

                                            @if ($errors->has('file'))
                                            <br>
                                            <span class="w3-text-red">
                                                <strong>{{ $errors->first('file') }} Height minimum 200px and weight minimum 200px</strong>
                                            </span>
                 
                                            @endif
      
                                          </h6>


                                      </div>


                                  </div>
                                  <div class="col-sm-4">


                      <div class="form-group label-floating {{ $errors->has('full_name') ? ' has-error' : '' }}">
                          <label class="control-label">Full Name <small >(required)</small></label>
                          <input name="full_name" value="{{ old('full_name') }}" type="text" required class="form-control">
                          @if ($errors->has('full_name'))
                            <span class="text-red">
                                <strong>{{ $errors->first('full_name') }}</strong>
                            </span>
 
                            @endif
                      </div>


                  
                       
                      <div class="form-group label-floating {{ $errors->has('mobile') ? ' has-error' : '' }}">
                        <label class="control-label">Mobile <small >(required)</small></label>
                        <input required name="mobile" value="{{ old('mobile') }}" type="text" class="form-control">
                        @if ($errors->has('mobile'))
                            <span class="text-red">
                                <strong>{{ $errors->first('mobile') }}</strong>
                            </span>
 
                            @endif
                      </div>
                    
                                  </div>

                    <div class="col-sm-4">

                       
                <div class="form-group label-floating{{ $errors->has('email') ? ' has-error' : '' }}">
                  <label class="control-label">Email <small >(required)</small></label>
                  <input required name="email" value="{{ old('email') }}" type="email" class="form-control">
                  @if ($errors->has('email'))
                  <span class="text-red">
                      <strong>{{ $errors->first('email') }}</strong>
                  </span>

                  @endif
                </div>



<div class="form-group label-floating {{ $errors->has('gender') ? ' has-error' : '' }}">
    <label class="control-label">Gender <small>(Required)</small> </label>
    <select required class="form-control" id="gender" name="gender">
                    
                      @if(old('gender'))
                      <option selected>{{old('gender')}}</option>
                      @else
                      <option disabled="" selected=""></option>
                      @endif
                      {{-- id:1, title:gender --}}
                      @foreach ($userSettingFields[0]->values as $value)
                        <option>{{ $value->title }}</option>
                      @endforeach
    </select>
    @if ($errors->has('gender'))
                      <span class="text-red">
                          <strong>{{ $errors->first('gender') }}</strong>
                      </span>
                      @else
                      {{-- <span class="text-red">Country is required</span> --}}
                      @endif
</div>
                    
                                  </div>

                                </div>


<div class="row">
<div class="col-sm-4"></div>
<div class="col-sm-4">
<div class="form-group label-floating{{ $errors->has('password') ? ' has-error' : '' }}">
    <label class="control-label">Password <small >(required)</small></label>
    <input name="password" type="password" required class="form-control" value="{{ old('password') }}">
    <span class="text-red">Minimum 6 Characters</span>
    @if ($errors->has('password'))
    <span class="text-red">
        <br> <strong>{{ $errors->first('password') }}</strong>
    </span>

    @endif
</div>
</div>
<div class="col-sm-4">
<div class="form-group label-floating{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
    <label class="control-label">Confirm Password <small >(required)</small></label>
    <input name="password_confirmation" type="password" required class="form-control" value="{{ old('password') }}">
    @if ($errors->has('password_confirmation'))
    <span class="text-red">
        <strong>{{ $errors->first('password_confirmation') }}</strong>
    </span>

    @endif
</div>
</div>
</div>



                            </div>
                            <div class="tab-pane" id="about">
                                



                                <div class="row">
                                  <div class="col-sm-6">

                                    <div class="row">
                <div class="col-sm-3">
                  <div class="form-group">
                      <label class="label-control" style="float: right;margin-top: 10px;">Your Date of Birth  </label>
                                </div>
                              </div>

                  <div class="col-sm-9">
                    <div class="row">

                      <div class="col-sm-4"><select style="width: 70px;" required class="form-control" id="day" name="day">
            @if(old('day'))
            <option selected>{{old('day')}}</option>
            @endif
            <option value="">Day</option>
            @for ($i = 1; $i <= 31; $i++)
                <option>{{ $i }}</option>
            @endfor
            
          </select></div>
                <div class="col-sm-4">
                    <select required class="form-control" id="month" name="month" style="width: 85px;">
            @if(old('month'))
            <option selected>{{old('month')}}</option>
            @endif
            <option value="">Month</option>
            <option value="01">January</option>
            <option value="02">February</option>
            <option value="03">March</option>
            <option value="04">April</option>
            <option value="05">May</option>
            <option value="06">Jun</option>
            <option value="07">July</option>
            <option value="08">August</option>
            <option value="09">September</option>
            <option value="10">October</option>
            <option value="11">November</option>
            <option value="12">December</option>
          </select></div>
                <div class="col-sm-4"><select required class="form-control" id="year" name="year" style="width: 70px;">
            <option value="">Year</option>

            @if(old('year'))
            <option selected>{{old('year')}}</option>
            @endif
            @for ($i = date('Y') -17; $i >= date('Y') - 60; $i--)
                <option>{{ $i }}</option>
            @endfor

          </select></div>
                      
                    </div>                    
                  </div>
                
            </div>
                                    
                                  </div>
                                  <div class="col-sm-6">

<div class="row">
  <div class="col-sm-6">


    <div class="form-group {{ $errors->has('height') ? ' has-danger' : '' }}">
                
        <select class="form-control" required id="height" name="height">
        <option value="">Height </option>

        @if (old('height'))
        <option selected value="{{ old('height') }}">{{ old('height') }}</option>
        @endif
        
        {{-- ID:6, title:Height? --}}
        @foreach ($userSettingFields[5]->values as $value)
          <option>{{ $value->title }}</option>
        @endforeach

      </select>
        @if ($errors->has('height'))
        <span class="help-block">
            <strong>{{ $errors->first('height') }}</strong>
        </span>
        @else

        @endif
    </div>
    
  </div>
  <div class="col-sm-6">
    <div class="form-group {{ $errors->has('weight') ? ' has-danger' : '' }}">
                
        <select class="form-control" required id="weight" name="weight">
        <option value="">Weight </option>

        @if (old('weight'))
        <option selected value="{{ old('weight') }}">{{ old('weight') }}</option>
        @endif
        
        {{-- ID:7, title:weight? --}}
        @foreach ($userSettingFields[6]->values as $value)
          <option>{{ $value->title }}</option>
        @endforeach

      </select>
        @if ($errors->has('weight'))
        <span class="help-block">
            <strong>{{ $errors->first('weight') }}</strong>
        </span>
        @else

        @endif
    </div>
    
  </div>
</div>







                                    

                                     
                                  </div>

                                </div>


<div class="row">
  <div class="col-sm-3">



    <div class="form-group {{ $errors->has('religion') ? ' has-danger' : '' }}">
                
        <select class="form-control" required id="religion" name="religion">
        <option value="">Religion/Community </option>

        @if (old('religion'))
        <option selected value="{{ old('religion') }}">{{ old('religion') }}</option>
        @endif
        
        {{-- ID:3, title:Religion/Community? --}}
        @foreach ($userSettingFields[2]->values as $value)
          <option>{{ $value->title }}</option>
        @endforeach

      </select>
        @if ($errors->has('religion'))
        <span class="help-block">
            <strong>{{ $errors->first('religion') }}</strong>
        </span>

        @endif
    </div>

    
    
  </div>
  <div class="col-sm-3">


    <div class="form-group {{ $errors->has('marital_status') ? ' has-danger' : '' }}">
                
        <select class="form-control" required id="marital_status" name="marital_status">
        <option value="">Marital Status </option>

        @if (old('marital_status'))
        <option selected value="{{ old('marital_status') }}">{{ old('marital_status') }}</option>
        @endif
        
        {{-- ID:11, title:marital_status? --}}
        @foreach ($userSettingFields[10]->values as $value)
          <option>{{ $value->title }}</option>
        @endforeach

      </select>
        @if ($errors->has('marital_status'))
        <span class="help-block">
            <strong>{{ $errors->first('marital_status') }}</strong>
        </span>
        @else

        @endif
    </div>


    
    

  </div>
  <div class="col-sm-3">


    <div class="form-group {{ $errors->has('skin_color') ? ' has-danger' : '' }}">
                
        <select class="form-control" required id="skin_color" name="skin_color">
        <option value="">Skin Color/Complexion </option>

        @if (old('skin_color'))
        <option selected value="{{ old('skin_color') }}">{{ old('skin_color') }}</option>
        @endif
        
        {{-- ID:8, title:skin_color? --}}
        @foreach ($userSettingFields[7]->values as $value)
          <option>{{ $value->title }}</option>
        @endforeach

      </select>
        @if ($errors->has('skin_color'))
        <span class="help-block">
            <strong>{{ $errors->first('skin_color') }}</strong>
        </span>
        @else

        @endif
    </div>
    

  </div>

  <div class="col-sm-3">
    
    <div class="form-group {{ $errors->has('created_by') ? ' has-danger' : '' }}">
                
        <select class="form-control" required id="created_by" name="created_by">
        <option value="">Profile Created By </option>

        @if (old('created_by'))
        <option selected value="{{ old('created_by') }}">{{ old('created_by') }}</option>
        @endif
        
        {{-- ID:2, title:created_by? --}}
        @foreach ($userSettingFields[1]->values as $value)
          <option>{{ $value->title }}</option>
        @endforeach

      </select>
        @if ($errors->has('created_by'))
        <span class="help-block">
            <strong>{{ $errors->first('created_by') }}</strong>
        </span>
        @else

        @endif
    </div>


  </div>
</div>





<div class="row">
  <div class="col-sm-3">
    
    <div class="other-area">
    <div class="form-group {{ $errors->has('education_level') ? ' has-danger' : '' }}">
    
    <select class="form-control change-with-other" id="education_level" name="education_level" autocomplete="off">
    <option value="">Education Level </option>
    @if (old('education_level'))
        <option selected value="{{ old('education_level') }}">{{ old('education_level') }}</option>
    @endif
    
    {{-- id:9, title:education_level --}}
    @foreach ($userSettingFields[8]->values as $value)
      <option>{{ $value->title }}</option>
    @endforeach
  </select>
    @if ($errors->has('education_level'))
    <span class="help-block">
        <strong>{{ $errors->first('education_level') }}</strong>
    </span>
    @else
    {{-- <span class="help-block">education_level is required</span> --}}
    @endif
</div>
<input  
title="Education Level Other (Please Specify here)" 
type="text" 
id="education_level_other" 
class="form-control other-value-field" 
name="education_level_other"        
value="{{old('education_level_other')}}"
placeholder="Education Level Other (Please Specify here)" 
@if ((old('education_level') == 'Other') || (old('education_level') == 'Others'))
style="border-radius: 4px;padding-left: 8px;margin-bottom: 25px;" 
@else
style="border-radius: 4px;padding-left: 8px; display: none;margin-bottom: 25px;" 
@endif
 
/>
</div>


  </div>
  <div class="col-sm-2">
    
    <div class="other-area">
    <div class="form-group {{ $errors->has('profession') ? ' has-danger' : '' }}">
    
    <select class="form-control change-with-other" id="profession" name="profession" autocomplete="off">
    <option value="">Profession </option>
    @if (old('profession'))
        <option selected value="{{ old('profession') }}">{{ old('profession') }}</option>
    @endif
    
    {{-- id:10, title:profession --}}
    @foreach ($userSettingFields[9]->values as $value)
      <option>{{ $value->title }}</option>
    @endforeach
  </select>
    @if ($errors->has('profession'))
    <span class="help-block">
        <strong>{{ $errors->first('profession') }}</strong>
    </span>
    @else
    {{-- <span class="help-block">profession is required</span> --}}
    @endif
</div>
<input  
title="Profession Other (Please Specify here)" 
type="text" 
id="profession_other" 
class="form-control other-value-field" 
name="profession_other"        
value="{{old('profession_other')}}"
placeholder="Profession Other (Please Specify here)" 
@if ((old('profession') == 'Other') || (old('profession') == 'Others'))
style="border-radius: 4px;padding-left: 8px;margin-bottom: 25px;" 
@else
style="border-radius: 4px;padding-left: 8px; display: none;margin-bottom: 25px;" 
@endif
 
/>
</div>


  </div>
  <div class="col-sm-3">



<div class="other-area">
    <div class="form-group {{ $errors->has('country') ? ' has-danger' : '' }}">
    
    <select class="form-control change-with-other" id="country" name="country" autocomplete="off">
    <option value="">Present Country </option>
    @if (old('country'))
        <option selected value="{{ old('country') }}">{{ old('country') }}</option>
    @endif
    
     
    @foreach ($countries as $value)
      <option>{{ $value->title }}</option>
    @endforeach
  </select>
    @if ($errors->has('country'))
    <span class="help-block">
        <strong>{{ $errors->first('country') }}</strong>
    </span>
    @else
    {{-- <span class="help-block">Country is required</span> --}}
    @endif
</div>
<input  
type="text" 
id="country_other" 
class="form-control other-value-field" 
name="country_other"        
value="{{old('country_other')}}"
placeholder="Country Other (Please Specify here)" 
@if ((old('country') == 'Other') || (old('country') == 'Others'))
style="border-radius: 4px;padding-left: 8px;margin-bottom: 25px;" 
@else
style="border-radius: 4px;padding-left: 8px; display: none;margin-bottom: 25px;" 
@endif
 
/>
</div>


    


  </div>
  <div class="col-sm-4">
    
<div class="form-group label-floating {{ $errors->has('location') ? ' has-error' : '' }}">
      <label class="control-label"></label>
      <input required id="location-input" value="{{ old('location') }}" type="text" class="form-control">
      @if ($errors->has('location'))
          <span class="text-red">
              <strong>{{ $errors->first('location') }}</strong>
          </span>

          @endif
    </div>

  </div>
</div>

<input type="hidden" id="lat" name="lat" value="{{ old('lat') }}">
<input type="hidden" id="lng" name="lng" value="{{ old('lng') }}">
<input type="hidden" id="location-selected-text" name="location" value="{{ old('location') }}">

{{ csrf_field() }}




                            </div>
                            <div class="tab-pane" id="partner">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <h4 class="info-text">Your Partner Preference</h4>
                                    </div>
 
                                    
                                </div>
                            
                                <div class="row">
                                  <div class="col-sm-4">

                                    <div class="row">
                                      <div class="col-sm-6">

<div class="form-group label-floating {{ $errors->has('height_minimum') ? ' has-error' : '' }}">
    <label class="control-label">Min Height</label>
                
        <select class="form-control" required id="height_minimum" name="height_minimum">

        @if (old('height_minimum'))
        <option selected value="{{ old('height_minimum') }}">{{ old('height_minimum') }}</option>
        @else
        <option selected="" disabled=""></option>
        @endif
        
        {{-- ID:6, title:height? --}}
        @foreach ($userSettingFields[5]->values as $value)
          <option>{{ $value->title }}</option>
        @endforeach

      </select>
        @if ($errors->has('height_minimum'))
        <span class="help-block">
            <strong>{{ $errors->first('height_minimum') }}</strong>
        </span>
        @else

        @endif
    </div>
                                      </div>

                                      <div class="col-sm-6">
                                        

       <div class="form-group label-floating {{ $errors->has('height_maximum') ? ' has-error' : '' }}">
    <label class="control-label">Max Height</label>
                
        <select class="form-control" required id="height_maximum" name="height_maximum">
 

        @if (old('height_maximum'))
        <option selected value="{{ old('height_maximum') }}">{{ old('height_maximum') }}</option>
        @else
        <option selected="" disabled=""></option>
        @endif
        
        {{-- ID:6, title:Height? --}}
        @foreach ($userSettingFields[5]->values as $value)
          <option>{{ $value->title }}</option>
        @endforeach

      </select>
        @if ($errors->has('height_maximum'))
        <span class="help-block">
            <strong>{{ $errors->first('height_maximum') }}</strong>
        </span>
        @else

        @endif
    </div>



                                      </div>
                                    </div>


                                  </div>
                                  <div class="col-sm-4">


                                    <div class="row">
                                      


                                      <div class="col-sm-6">
                                        


          <div class="form-group label-floating {{ $errors->has('minimum_age') ? ' has-error' : '' }}" style="width: 100%;">
        <label for="minimum_age" class="control-label">Min Age(Year)</label>
         
        <select required class="form-control  form-control select2" 
            data-placeholder="Select Option"
        id="minimum_age" name="minimum_age">

 
                @if (old('minimum_age'))
                    <option selected>{{ old('minimum_age') }}</option>
                @else
                <option selected="" disabled=""></option>
                @endif

                @for ($i = 18; $i <= 60; $i++)
 
                        <option>{{ $i }}</option>
 
                    
                @endfor
                
        </select>

        @if($errors->has('minimum_age'))

        <span class="help-block">
            <strong>{{ $errors->first('minimum_age') }}</strong>
        </span>

        @endif
    </div>


                                      </div>

                                      <div class="col-sm-6">
                                        


       <div class="form-group label-floating {{ $errors->has('maximum_age') ? ' has-danger' : '' }}" style="width: 100%;">
 <label for="maximum_age" class="control-label">Max Age(Year)</label>

        <select required class="form-control  form-control select2" 
            data-placeholder="Select Option"
        id="maximum_age" name="maximum_age">
 
            @if (old('maximum_age'))
                <option selected>{{ old('maximum_age') }}</option>
            @else
            <option selected="" disabled=""></option>
            @endif

            @for ($i = 18; $i <= 80; $i++)
 
                    <option>{{ $i }}</option>
 
                
            @endfor
                
        </select>
        
         

        @if($errors->has('maximum_age'))

        <span class="help-block">
            <strong>{{ $errors->first('maximum_age') }}</strong>
        </span>

        @endif
    </div>




                                      </div>
                                    </div>
                                   


                                  </div>
                                  <div class="col-sm-4">
                                    


     <div class="form-group label-floating {{ $errors->has('partner_marital_status') ? ' has-danger' : '' }}">
      <label for="partner_marital_status" class="control-label">Marital Status</label>
                
        <select class="form-control" required id="partner_marital_status" name="partner_marital_status">
         

        @if (old('partner_marital_status'))
        <option selected value="{{ old('partner_marital_status') }}">{{ old('partner_marital_status') }}</option>
        @else
        <option selected="" disabled=""></option>
        @endif
        
        {{-- ID:11, title:marital_status? --}}
        @foreach ($userSettingFields[10]->values as $value)
          <option>{{ $value->title }}</option>
        @endforeach

      </select>
        @if ($errors->has('partner_marital_status'))
        <span class="help-block">
            <strong>{{ $errors->first('partner_marital_status') }}</strong>
        </span>
        @else

        @endif
    </div>



                                  </div>
                                </div>



<div class="row">
  
  <div class="col-sm-4">


<div class="other-area">
    <div class="form-group {{ $errors->has('partner_country') ? ' has-danger' : '' }}">
    
      <select class="form-control change-with-other" id="partner_country" name="partner_country" autocomplete="off">
      <option value="">Present Country </option>
      @if (old('partner_country'))
          <option selected value="{{ old('partner_country') }}">{{ old('partner_country') }}</option>
      @endif
      
      
      @foreach ($countries as $value)
        <option>{{ $value->title }}</option>
      @endforeach
    </select>
      @if ($errors->has('partner_country'))
      <span class="help-block">
          <strong>{{ $errors->first('partner_country') }}</strong>
      </span>
      @else
      {{-- <span class="help-block">partner_country is required</span> --}}
      @endif
</div>
<input  
type="text" 
id="partner_country_other" 
class="form-control other-value-field" 
name="partner_country_other"        
value="{{old('partner_country_other')}}"
placeholder="Country Other (Please Specify here)" 
@if ((old('partner_country') == 'Other') || (old('partner_country') == 'Others'))
style="border-radius: 4px;padding-left: 8px;margin-bottom: 25px;" 
@else
style="border-radius: 4px;padding-left: 8px; display: none;margin-bottom: 25px;" 
@endif
 
/>
</div>

    
  </div>
  <div class="col-sm-4">
    
    <div class="form-group {{ $errors->has('partner_religion') ? ' has-danger' : '' }}">
                
        <select class="form-control" required id="partner_religion" name="partner_religion">
        <option value="">Religion/Community </option>

        @if (old('partner_religion'))
        <option selected value="{{ old('partner_religion') }}">{{ old('partner_religion') }}</option>
        @endif
        
        {{-- ID:4, title:religion/Community? --}}
        @foreach ($userSettingFields[3]->values as $value)
          <option>{{ $value->title }}</option>
        @endforeach

      </select>
        @if ($errors->has('partner_religion'))
        <span class="help-block">
            <strong>{{ $errors->first('partner_religion') }}</strong>
        </span>
        @else

        @endif
    </div>


  </div>
  <div class="col-sm-4">
    

    <div class="other-area">
    <div class="form-group {{ $errors->has('partner_profession') ? ' has-danger' : '' }}">
    
    <select class="form-control change-with-other" id="partner_profession" name="partner_profession" autocomplete="off">
    <option value="">Profession </option>
    @if (old('partner_profession'))
        <option selected value="{{ old('partner_profession') }}">{{ old('partner_profession') }}</option>
    @endif
    
    {{-- id:10, title:partner_profession --}}
    @foreach ($userSettingFields[9]->values as $value)
      <option>{{ $value->title }}</option>
    @endforeach
  </select>
    @if ($errors->has('partner_profession'))
    <span class="help-block">
        <strong>{{ $errors->first('partner_profession') }}</strong>
    </span>
    @else
    {{-- <span class="help-block">partner_profession is required</span> --}}
    @endif
</div>
<input  
title="Profession Other (Please Specify here)" 
type="text" 
id="partner_profession_other" 
class="form-control other-value-field" 
name="partner_profession_other"        
value="{{old('partner_profession_other')}}"
placeholder="Profession Other (Please Specify here)" 
@if ((old('partner_profession') == 'Other') || (old('partner_profession') == 'Others'))
style="border-radius: 4px;padding-left: 8px;margin-bottom: 25px;" 
@else
style="border-radius: 4px;padding-left: 8px; display: none;margin-bottom: 25px;" 
@endif
 
/>
</div>


  </div>
</div>
                            </div>
                        </div>
                        <div class="wizard-footer">
                            <div class="pull-right">
                                <input type='button' class='btn btn-next btn-fill btn-primary btn-wd' name='next' value='Next' />
                                <input type='submit' class='btn btn-finish btn-fill btn-primary btn-wd' name='finish' value='Finish' />
                            </div>

                            <div class="pull-left">

                                <input type='button' class='btn btn-previous btn-fill btn-default btn-wd' name='previous' value='Previous' />
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </form>
                </div>
            </div> <!-- wizard container -->
        </div>
      </div><!-- end row -->
  </div> <!--  big container -->

  <div class="footer">
      <div class="container text-center">
           &copy; <a href="{{ url('/') }}">{{ $websiteParameter->h1 }} all rights reserved</a>
      </div>
  </div>
</div>

</body>
<!--   Core JS Files   -->
<script src="{{ asset('mk/mk2/assets/js/jquery-2.2.4.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('mk/mk2/assets/js/bootstrap.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('mk/mk2/assets/js/jquery.bootstrap.js') }}" type="text/javascript"></script>

<!--  Plugin for the Wizard -->
<script src="{{ asset('mk/mk2/assets/js/material-bootstrap-wizard.js') }}"></script>

<!--  More information about jquery.validate here: http://jqueryvalidation.org/  -->
<script src="{{ asset('mk/mk2/assets/js/jquery.validate.min.js') }}"></script>

<script>
    $(document).ready(function(){
    $(document).on('change', '.change-with-other', function(e){
      // e.preventDefault();
      // alert('ok');      
      var that = $(this);
      var val = that.val();
      if((val == 'Other') || (val == 'Others'))
      {
        that.closest('.other-area').find('.other-value-field').slideDown();
      }
      else
      {
        that.closest('.other-area').find('.other-value-field').slideUp();
      }
    });   
  });
    </script>

    <script src="{{asset('js/location.js')}}"></script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAcjU4Z83IrRvF3DdDYqsBW66_2eUC8krU&libraries=places&callback=initAutocomplete"
    async defer></script>

</html>
