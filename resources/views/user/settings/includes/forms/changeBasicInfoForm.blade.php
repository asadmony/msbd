<form method="post" class="form-user-setting" action="{{route('user.settingBasicInfoPost')}}">
    {{csrf_field()}}

    <div class="row w3-border w3-border-purple w3-round">
        <div class="col-sm-6">
            <div class="card card-default">
                <div class="card-body">

                    <div class="form-group {{ $errors->has('full_name') ? ' has-danger' : '' }}">
                        <label for="full_name">Full Name</label>
                        <input  
                        type="text" 
                        id="full_name" 
                        class="form-control w3-border w3-border-light-gray" 
                        name="full_name"
                        value="{{ $me->name}}"        
                        placeholder="Your Full Name" 
                        style="border-radius: 4px;padding-left: 8px;" 
                        />
                        @if($errors->has('full_name'))

                        <span class="help-block">
                            <strong>{{ $errors->first('full_name') }}</strong>
                        </span>

                        @endif
                    </div>

                    <div class="form-group {{ $errors->has('mobile') ? ' has-danger' : '' }}">
                        <label for="mobile">{{ __('Mobile') }} *</label>
                        <input  
                        type="text" 
                        id="mobile" 
                        class="form-control w3-border w3-border-light-gray" 
                        name="mobile"
                        value="{{$me->mobile}}"        
                        placeholder="Mobile Number" 
                        style="border-radius: 4px;padding-left: 8px;" 
                        />
                        @if($errors->has('mobile'))

                        <span class="help-block">
                            <strong>{{ $errors->first('mobile') }}</strong>
                        </span>

                        @endif
                    </div>

                    <div class="form-group {{ $errors->has('email') ? ' has-danger' : '' }}">
                        <label for="email">{{ __('Email') }} *</label>
                        <input  
                        type="text" 
                        id="email" 
                        class="form-control w3-border w3-border-light-gray" 
                        name="email"
                        value="{{$me->email}}"        
                        placeholder="Email Address" 
                        style="border-radius: 4px;padding-left: 8px;" 
                        />
                        @if($errors->has('email'))

                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>

                        @endif
                    </div>
<div class="form-group {{ $errors->has('location') ? ' has-danger' : '' }}">
    <label for="location">{{ __('Location') }} *</label>
    <input  
    type="text" 
    required id="location-input" 
    class="form-control w3-border w3-border-light-gray" 
    name="location"
    value="{{$me->location}}"        
    placeholder="Location" 
    style="border-radius: 4px;padding-left: 8px;" 
    />
    @if($errors->has('location'))

    <span class="help-block">
        <strong>{{ $errors->first('location') }}</strong>
    </span>

    @endif
</div>

<input type="hidden" id="lat" name="lat" value="{{ $me->lat }}">
<input type="hidden" id="lng" name="lng" value="{{ $me->lng }}">
<input type="hidden" id="location-selected-text" name="location" value="{{ $me->location }}">


<div class="form-group {{ $errors->has('state') ? ' has-danger' : '' }}">
            <label for="state">{{ __('State') }} / {{ __('Division') }}</label>
            <input  
            type="text" 
            id="state" 
            class="form-control w3-border w3-border-light-gray" 
            name="state"
            value="{{$me->state}}"        
            placeholder="State / Division" 
            style="border-radius: 4px;padding-left: 8px;" 
            />
            @if($errors->has('state'))

            <span class="help-block">
                <strong>{{ $errors->first('state') }}</strong>
            </span>

            @endif
        </div>





        <div class="form-group {{ $errors->has('city') ? ' has-danger' : '' }}">
            <label for="city">{{ __('City') }}</label>
            <input  
            type="text" 
            id="city" 
            class="form-control w3-border w3-border-light-gray" 
            name="city"
            value="{{$me->city}}"        
            placeholder="Present City" 
            style="border-radius: 4px;padding-left: 8px;" 
            />
            @if($errors->has('city'))

            <span class="help-block">
                <strong>{{ $errors->first('city') }}</strong>
            </span>

            @endif
        </div>



        <div class="form-group {{ $errors->has('post_code') ? ' has-danger' : '' }}">
            <label for="post_code">{{ __('Post Code') }}</label>
            <input  
            type="text" 
            id="post_code" 
            class="form-control w3-border w3-border-light-gray" 
            name="post_code"
            value="{{$me->post_code}}"        
            placeholder="Post Code" 
            style="border-radius: 4px;padding-left: 8px;" 
            />
            @if($errors->has('post_code'))

            <span class="help-block">
                <strong>{{ $errors->first('post_code') }}</strong>
            </span>

            @endif
        </div>

                    <div class="other-area">
                        <div class="form-group {{ $errors->has('country') ? ' has-danger' : '' }}">
                            <label for="country">Country</label>
                            <select class="form-control simple-select2 w-100 change-with-other" name="country" style="width: 100%;">
                                <option></option>

                                <option selected>{{$me->country}}</option>

                                @foreach ($countries as $value)
                                @if ($me->country != $value->title)
                                <option>{{ $value->title }}</option>
                                @endif
                                @endforeach
                            </select>
                        </div>

                        <input  
                        type="text" 
                        id="country_other" 
                        class="form-control w3-border w3-border-light-gray other-value-field" 
                        name="country_other"        
                        value="{{$me->country_other ? $me->country_other : ''}}"
                        placeholder="Country Other (Please Specify here)" 


                        @if ($me->country == 'Other' || $me->country == 'Others')
                        style="border-radius: 4px;padding-left: 8px;margin-bottom: 25px;" 
                        @else
                        style="border-radius: 4px;padding-left: 8px; display: none;margin-bottom: 25px;" 
                        @endif

                        />
                    </div>

                    

                    <div class="other-area">
                        <div class="form-group {{ $errors->has('profile_created_by') ? ' has-danger' : '' }}">
                            <label for="profile_created_by">Profile created by</label>
                            <select class="form-control simple-select2 w-100 change-with-other" name="profile_created_by" style="width: 100%;">
                                <option></option>

                                <option selected>{{$me->profile_created_by}}</option>

                                {{-- ID:2, title:profile created by --}}
                                @foreach ($userSettingFields[1]->values as $value)

                                @if ($me->profile_created_by != $value->title)
                                <option>{{ $value->title }}</option>
                                @endif

                                @endforeach

                            </select>
                        </div>

                        <input  
                        type="text" 
                        id="profile_created_by_other" 
                        class="form-control w3-border w3-border-light-gray other-value-field" 
                        name="profile_created_by_other"        
                        value="{{$me->profile_created_by_other ? $me->profile_created_by_other : ''}}"
                        placeholder="Profile Created by Other (Please Specify here)" 


                        @if ($me->profile_created_by == 'Other' || $me->profile_created_by == 'Others')
                        style="border-radius: 4px;padding-left: 8px;margin-bottom: 25px;" 
                        @else
                        style="border-radius: 4px;padding-left: 8px; display: none;margin-bottom: 25px;" 
                        @endif

                        />
                    </div>



<div class="form-group form-group-sm {{ $errors->has('date_of_birth') ? ' has-error' : '' }}">
    <label for="date_of_birth">{{ __('Date of Birth') }}:</label>

    <div class="w3-row">

            <div class="w3-col s4">
                <select class="form-control w3-border w3-border-light-gray w3-padding" id="day" name="day" required>

                    @if($me->dob)
                    <option value="{{date('d', strtotime($me->dob))}}">{{date('d', strtotime($me->dob))}}</option>
                    @else
                    <option value="">{{ __('Day') }}</option>
                    @endif
                    @for ($i = 1; $i <= 31; $i++)
                    <option>{{ $i }}</option>
                    @endfor
                </select>
            </div>

            <div class="w3-col s4">
                <select class="form-control w3-border w3-border-light-gray w3-padding" id="month" name="month" required>

                    @if($me->dob)
                    <option value="{{date('m', strtotime($me->dob))}}">{{date('M', strtotime($me->dob))}}</option>
                    @else
                    <option value="">{{ __('Month') }}</option>
                    @endif
                    <option value="01">{{ __('January') }}</option>
                    <option value="02">{{ __('February') }}</option>
                    <option value="03">{{ __('March') }}</option>
                    <option value="04">{{ __('April') }}</option>
                    <option value="05">{{ __('May') }}</option>
                    <option value="06">{{ __('Jun') }}</option>
                    <option value="07">{{ __('July') }}</option>
                    <option value="08">{{ __('August') }}</option>
                    <option value="09">{{ __('September') }}</option>
                    <option value="10">{{ __('October') }}</option>
                    <option value="11">{{ __('November') }}</option>
                    <option value="12">{{ __('December') }}</option>
                </select>
            </div>
            <div class="w3-col s4"><select class="form-control w3-border w3-border-light-gray w3-padding" id="year" name="year" required>

               @if($me->dob)
               <option value="{{date('Y', strtotime($me->dob))}}">{{date('Y', strtotime($me->dob))}}</option>
               @else
               <option value="">{{ __('Year') }}</option>
               @endif

               @for ($i = date('Y') -14; $i >= date('Y') - 60; $i--)
               <option>{{ $i }}</option>
               @endfor
           </select>
       </div>
       </div>

   
    </div>

                </div>
            </div>



        </div>
        <div class="col-sm-6">


            <div class="card card-default">
                <div class="card-body">

                    <div class="form-group {{ $errors->has('marital_status') ? ' has-danger' : '' }}">
                        <label for="marital_status">Marital Status</label>
                        <select class="form-control simple-select2 w-100" name="marital_status" style="width: 100%;">            
                            <option></option> 
                            <option selected>{{$me->marital_status}}</option> 
                            {{-- ID: 9   social order --}}
                            @foreach ($userSettingFields[10]->values as $value)   
                            @if ($me->marital_status != $value->title)
                            <option>{{ $value->title }}</option>
                            @endif 
                            @endforeach
                        </select>
                    </div>


                    <div class="form-group {{ $errors->has('religion') ? ' has-danger' : '' }}">
                        <label for="religion">Religion/Community</label>
                        <select class="form-control simple-select2 w-100" name="religion" style="width: 100%;">

                            <option></option>

                            <option selected>{{$me->religion}}</option>
                            {{-- id:3, title:religion --}}
                            @foreach ($userSettingFields[2]->values as $value)
                                @if ($me->religion != $value->title)
                                <option>{{ $value->title }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group {{ $errors->has('social_order') ? ' has-danger' : '' }}">
                        <label for="social_order">Caste/Social Order</label>
                        <select class="form-control simple-select2 w-100" name="social_order" style="width: 100%;">            
                            <option></option> 
                            <option selected>{{$me->social_order}}</option> 
                            {{-- id:4, title:social_order --}}
                            @foreach ($userSettingFields[3]->values as $value)
                                @if ($me->social_order != $value->title)
                                <option>{{ $value->title }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group {{ $errors->has('height') ? ' has-danger' : '' }}">
                        <label for="height">Height</label>
                        <select class="form-control simple-select2 w-100" name="height" style="width: 100%;">            
                            <option></option> 
                            <option selected>{{$me->height}}</option> 
                            {{-- id:6, title:height --}}
                            @foreach ($userSettingFields[5]->values as $value)
                                @if ($me->height != $value->title)
                                <option>{{ $value->title }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group {{ $errors->has('weight') ? ' has-danger' : '' }}">
                        <label for="weight">Weight</label>
                        <select class="form-control simple-select2 w-100" name="weight" style="width: 100%;">            
                            <option></option> 
                            <option selected>{{$me->weight}}</option> 
                            {{-- id:7, title:weight --}}
                            @foreach ($userSettingFields[6]->values as $value)
                                @if ($me->weight != $value->title)
                                <option>{{ $value->title }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>


                    <div class="form-group {{ $errors->has('gender') ? ' has-danger' : '' }}">
                        <label for="gender">Gender</label>
                        <select class="form-control simple-select2 w-100" name="gender" style="width: 100%;">            
                            <option></option> 
                            <option selected>{{$me->gender}}</option> 
                            {{-- ID: 1   social order --}}
                            @foreach ($userSettingFields[0]->values as $value)   
                            @if ($me->gender != $value->title)
                            <option>{{ $value->title }}</option>
                            @endif 
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group {{ $errors->has('looking_for') ? ' has-danger' : '' }}">
                        <label for="looking_for">Looking for</label>
                        <select class="form-control simple-select2 w-100" name="looking_for" style="width: 100%;">            
                            <option></option> 
                            <option selected>{{$me->looking_for}}</option> 
                            {{-- ID: 6   social order --}}
                            @foreach ($userSettingFields[4]->values as $value)
                            @if ($me->looking_for != $value->title)
                                <option>{{ $value->title }}</option>
                                @endif
                            @endforeach 
                        </select>
                    </div>



                    <div class="form-group {{ $errors->has('skin_color') ? ' has-danger' : '' }}">
                        <label for="skin_color">Skin Color / Complexion</label>
                        <select class="form-control simple-select2 w-100" name="skin_color" style="width: 100%;">            
                            <option></option> 
                            <option selected>{{$me->skin_color}}</option> 
                            {{-- id:8, title:skin_color --}}
                            @foreach ($userSettingFields[7]->values as $value)
                                @if ($me->skin_color != $value->title)
                                <option>{{ $value->title }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>


                    <div class="other-area">
                        <div class="form-group {{ $errors->has('education_level') ? ' has-danger' : '' }}">
                            <label for="education_level">Education Level</label>
                            <select class="form-control simple-select2 w-100 change-with-other" name="education_level" style="width: 100%;">
                                <option></option>

                                <option selected>{{$me->education_level}}</option>
                                {{-- ID: 9    education_level --}}
                                @foreach ($userSettingFields[8]->values as $value)

                                @if ($me->education_level != $value->title)
                                <option>{{ $value->title }}</option>
                                @endif
                                @endforeach
                            </select>
                        </div>

                        <input  
                        type="text" 
                        id="education_level_other" 
                        class="form-control w3-border w3-border-light-gray other-value-field" 
                        name="education_level_other"        
                        value="{{$me->education_level_other ? $me->education_level_other : ''}}"
                        placeholder="Education Level Other (Please Specify here)" 


                        @if ($me->education_level == 'Other' || $me->education_level == 'Others')
                        style="border-radius: 4px;padding-left: 8px;margin-bottom: 25px;" 
                        @else
                        style="border-radius: 4px;padding-left: 8px; display: none;margin-bottom: 25px;" 
                        @endif

                        />
                    </div>


                    <div class="other-area">
                        <div class="form-group {{ $errors->has('profession') ? ' has-danger' : '' }}">
                            <label for="profession">Profession </label>
                            <select class="form-control simple-select2 w-100 change-with-other" name="profession" style="width: 100%;">
                                <option></option>

                                <option selected>{{$me->profession}}</option>
                                {{-- ID: 10     profession --}}
                                @foreach ($userSettingFields[9]->values as $value)

                                @if ($me->profession != $value->title)
                                <option>{{ $value->title }}</option>
                                @endif
                                @endforeach
                            </select>
                        </div>

                        <input  
                        type="text" 
                        id="profession_other" 
                        class="form-control w3-border w3-border-light-gray other-value-field" 
                        name="profession_other"        
                        value="{{$me->profession_other ? $me->profession_other : ''}}"
                        placeholder="Education Level Other (Please Specify here)" 


                        @if ($me->profession == 'Other' || $me->profession == 'Others')
                        style="border-radius: 4px;padding-left: 8px;margin-bottom: 25px;" 
                        @else
                        style="border-radius: 4px;padding-left: 8px; display: none;margin-bottom: 25px;" 
                        @endif

                        />
                    </div>


                    <br>
                    <div class="">
                        <button class="btn btn-default border mr-2 btn-sm" type="reset">Reset</button>
                        <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
                        <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                    </div>



                </div>
            </div>

        </div>

    </div>




    
</form>

<script src="{{asset('js/location.js')}}"></script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAcjU4Z83IrRvF3DdDYqsBW66_2eUC8krU&libraries=places&callback=initAutocomplete"
    async defer></script>