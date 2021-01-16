
<div class="box box-widget">
    <div class="box-header with-border">
        <h3 class="box-title">
            Basic Information
        </h3>
    </div>
    <div class="box-body">
        <div class="row">
            <div class="col-sm-3">


                <div class="form-group form-group-sm {{ $errors->has('fullName') ? ' has-error' : '' }}">
                <label for="fullName">Full Name:</label>
                <input 
                type="text"  
                class="form-control" 
                id="fullName"
                name="fullName"
                value="{{ old('fullName') ?: $user->name }}" 
                placeholder="Full Name" 
                />

                @if ($errors->has('fullName'))
                <span class="help-block">
                    <strong>{{ $errors->first('fullName') }}</strong>
                </span>
                @endif
            </div>

                <div class="form-group form-group-sm {{ $errors->has('username') ? ' has-error' : '' }}">
    <label for="username">Username:</label>
    <input 
    type="text"  
    class="form-control" 
    id="username"
    name="username"
    value="{{ old('username') ?: $user->username }}" 
    placeholder="Username" 
    />

    @if ($errors->has('username'))
    <span class="help-block">
        <strong>{{ $errors->first('username') }}</strong>
    </span>
    @endif
</div>


<div class="form-group form-group-sm {{ $errors->has('email') ? ' has-error' : '' }}">
    <label for="email">Email:</label>
    <input 
    type="email"  
    class="form-control" 
    id="email"
    name="email"
    value="{{ old('email') ?: $user->email }}" 
    placeholder="Email" 
    />

    @if ($errors->has('email'))
    <span class="help-block">
        <strong>{{ $errors->first('email') }}</strong>
    </span>
    @endif
</div>

<div class="form-group form-group-sm {{ $errors->has('mobile') ? ' has-error' : '' }}">
    <label for="mobile">Mobile:</label>
    <input 
    type="text"  
    class="form-control" 
    id="mobile"
    name="mobile"
    value="{{ old('mobile') ?: $user->mobile }}" 
    placeholder="Mobile" 
    />

    @if ($errors->has('mobile'))
    <span class="help-block">
        <strong>{{ $errors->first('mobile') }}</strong>
    </span>
    @endif
</div>

<div class="other-area">
<div class="form-group form-group-sm {{ $errors->has('profile_created_by') ? ' has-error' : '' }}">
    <label for="profile_created_by">Profile Created By</label>
    <select class="form-control form-group-sm select2 change-with-other" 
    id="profile_created_by" 
    name="profile_created_by" 
    data-placeholder="Select Option"
    /> 
    <option></option>
    <option selected>{{$user->profile_created_by}}</option>
    {{-- ID: 2     profile_created_by --}}
    @foreach ($userSettingFields[1]->values as $value)

    @if ($user->profile_created_by != $value->title)
    <option>{{ $value->title }}</option>
    @endif
    @endforeach
</select>
</div>
<input  
type="text" 
id="profile_created_by_other" 
class="form-control other-value-field" 
name="profile_created_by_other"        
value="{{$user->profile_created_by_other ?: ''}}"
placeholder="Profile Created by Other (Please Specify here)" 

@if ($user->profile_created_by == 'Other' || $user->profile_created_by == 'Others')
style="border-radius: 4px;padding-left: 8px;margin-bottom: 25px;" 
@else
style="border-radius: 4px;padding-left: 8px; display: none;margin-bottom: 25px;" 
@endif

/>
</div>

<div class="form-group form-group-sm {{ $errors->has('marital_status') ? ' has-error' : '' }}">
            <label for="marital_status">Marital Status:</label>

            <select class="form-control form-group-sm select2" id="marital_status" placeholder="Marital Status" name="marital_status">
                @if(old('marital_status'))
                <option selected>{{old('marital_status')}}</option>
                @elseif($user->marital_status)             
                <option selected>{{$user->marital_status}}</option>
                @else
                <option value="">Select Marital Status</option>
                @endif
                {{-- id:11, title:marital_status --}}
                @foreach ($userSettingFields[10]->values as $value)
                    @if ($user->marital_status != $value->title)
                    <option>{{ $value->title }}</option>
                    @endif
                @endforeach
            </select>

            @if ($errors->has('marital_status'))
            <span class="help-block">
                <strong>{{ $errors->first('marital_status') }}</strong>
            </span>
            @endif
        </div>


     
            </div>
            <div class="col-sm-3">






{{-- <div class="form-group form-group-sm {{ $errors->has('guardian_mobile') ? ' has-error' : '' }}">
    <label for="guardian_mobile">Guardian's Mobile:</label>
    <input 
    type="text"  
    class="form-control" 
    id="guardian_mobile"
    name="guardian_mobile"
    value="{{ old('guardian_mobile') ?: $user->guardian_mobile }}" 
    placeholder="guardian_mobile" 
    />

    @if ($errors->has('guardian_mobile'))
    <span class="help-block">
        <strong>{{ $errors->first('guardian_mobile') }}</strong>
    </span>
    @endif
</div> --}}






<div class="form-group form-group-sm {{ $errors->has('location') ? ' has-error' : '' }}">
      <label for="location">Location</label>
      <input required id="location-input" value="{{ old('location') ?: $user->location }}" type="text" class="form-control">
      @if ($errors->has('location'))
          <span class="text-muted">
              <strong>{{ $errors->first('location') }}</strong>
          </span>

          @endif
    </div>

<input type="hidden" id="lat" name="lat" value="{{ old('lat') ?: $user->lat }}">
<input type="hidden" id="lng" name="lng" value="{{ old('lng') ?: $user->lng }}">
<input type="hidden" id="location-selected-text" name="location" value="{{ old('location') ?: $user->location }}">

<div class="form-group form-group-sm {{ $errors->has('state') ? ' has-error' : '' }}">
            <label for="state">State / Division:</label>
            <input 
            type="text"  
            class="form-control" 
            id="state"
            name="state"
            value="{{ old('state') ?: $user->state }}" 
            placeholder="State / Division" 
            />

            @if ($errors->has('state'))
            <span class="help-block">
                <strong>{{ $errors->first('state') }}</strong>
            </span>
            @endif
        </div>

        <div class="form-group form-group-sm {{ $errors->has('city') ? ' has-error' : '' }}">
            <label for="city">City:</label>
            <input 
            type="text"  
            class="form-control" 
            id="city"
            name="city"
            value="{{ old('city') ?: $user->city }}" 
            placeholder="City" 
            />

            @if ($errors->has('city'))
            <span class="help-block">
                <strong>{{ $errors->first('city') }}</strong>
            </span>
            @endif
        </div>

        <div class="form-group form-group-sm {{ $errors->has('post_code') ? ' has-error' : '' }}">
            <label for="post_code">Post Code:</label>
            <input 
            type="text"  
            class="form-control" 
            id="post_code"
            name="post_code"
            value="{{ old('post_code') ?: $user->post_code }}" 
            placeholder="Post Code / Zip Code" 
            />

            @if ($errors->has('post_code'))
            <span class="help-block">
                <strong>{{ $errors->first('post_code') }}</strong>
            </span>
            @endif
        </div>


        <div class="other-area">
<div class="form-group form-group-sm {{ $errors->has('country') ? ' has-error' : '' }}">
    <label for="country">Country</label>
    <select class="form-control form-group-sm select2 change-with-other" 
    id="country" 
    name="country" 
    data-placeholder="Select Option"
    /> 
    <option></option>
    <option selected>{{$user->country}}</option>

    @foreach ($countries as $value)

    @if ($user->country != $value->title)
    <option>{{ $value->title }}</option>
    @endif
    @endforeach
    <option>Other</option>
</select>
</div>
<input  
type="text" 
id="country_other" 
class="form-control other-value-field" 
name="country_other"        
value="{{$user->country_other ?: ''}}"
placeholder="Country Other (Please Specify here)" 

@if ($user->country == 'Other' || $user->country == 'Others')
style="border-radius: 4px;padding-left: 8px;margin-bottom: 25px;" 
@else
style="border-radius: 4px;padding-left: 8px; display: none;margin-bottom: 25px;" 
@endif

/>
</div>


<div class="form-group form-group-sm {{ $errors->has('date_of_birth') ? ' has-error' : '' }}">
    <label for="date_of_birth">Date of Birth:</label>

    <div class="w3-row">

            <div class="w3-col s4">
                <select class="form-control" id="day" name="day" required>

                    @if($user->dob)
                    <option value="{{date('d', strtotime($user->dob))}}">{{date('d', strtotime($user->dob))}}</option>
                    @else
                    <option value="">Day</option>
                    @endif
                    @for ($i = 1; $i <= 31; $i++)
                    <option>{{ $i }}</option>
                    @endfor
                </select>
            </div>

            <div class="w3-col s4">
                <select class="form-control" id="month" name="month" required>

                    @if($user->dob)
                    <option value="{{date('m', strtotime($user->dob))}}">{{date('M', strtotime($user->dob))}}</option>
                    @else
                    <option value="">Month</option>
                    @endif
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
                </select>
            </div>
            <div class="w3-col s4"><select class="form-control" id="year" name="year" required>

               @if($user->dob)
               <option value="{{date('Y', strtotime($user->dob))}}">{{date('Y', strtotime($user->dob))}}</option>
               @else
               <option value="">Year</option>
               @endif

               @for ($i = date('Y') -14; $i >= date('Y') - 60; $i--)
               <option>{{ $i }}</option>
               @endfor
           </select>
       </div>
       </div>

   
    </div>





                

            </div>
            <div class="col-sm-3">




<div class="form-group form-group-sm {{ $errors->has('gender') ? ' has-error' : '' }}">
            <label for="gender">Gender:</label>
            
            <select class="form-control form-group-sm select2" id="gender" name="gender">
                <option value="">Select Gender </option>
                @if(old('gender'))
                <option selected>{{old('gender')}}</option>
                @else              
                <option selected>{{$user->gender}}</option>
                @endif
                {{-- id:1, title:gender --}}
                @foreach ($userSettingFields[0]->values as $value)
                    @if ($user->gender != $value->title)
                    <option>{{ $value->title }}</option>
                    @endif
                @endforeach
            </select>
            @if ($errors->has('gender'))
            <span class="help-block">
                <strong>{{ $errors->first('gender') }}</strong>
            </span>
            @endif
        </div>



        


                


<div class="form-group form-group-sm {{ $errors->has('looking_for') ? ' has-error' : '' }}">
            <label for="looking_for">Looking For:</label>
            <select class="form-control form-group-sm select2" id="looking_for" name="looking_for">
                @if(old('looking_for'))
                <option selected>{{old('looking_for')}}</option>
                @else              
                <option selected>{{$user->looking_for}}</option>
                @endif
                {{-- id:5, title:looking for --}}
                @foreach ($userSettingFields[4]->values as $value)
                @if ($user->looking_for != $value->title)
                    <option>{{ $value->title }}</option>
                    @endif
                @endforeach
            </select>

            @if ($errors->has('looking_for'))
            <span class="help-block">
                <strong>{{ $errors->first('looking_for') }}</strong>
            </span>
            @endif
        </div>


        

        <div class="form-group form-group-sm {{ $errors->has('skin_color') ? ' has-error' : '' }}">
            <label for="skin_color">Skin Color:</label>

            <select class="form-control form-group-sm select2" id="skin_color" name="skin_color" data-placeholder="Select Option">
                @if(old('skin_color'))
                <option selected>{{old('skin_color')}}</option>
                @else              
                <option selected>{{$user->skin_color}}</option>
                @endif
                {{-- id:8, title:skin_color --}}
                @foreach ($userSettingFields[7]->values as $value)
                    @if ($user->skin_color != $value->title)
                    <option>{{ $value->title }}</option>
                    @endif
                @endforeach
            </select>

            @if ($errors->has('skin_color'))
            <span class="help-block">
                <strong>{{ $errors->first('skin_color') }}</strong>
            </span>
            @endif
        </div>

<div class="other-area">
<div class="form-group form-group-sm {{ $errors->has('education_level') ? ' has-error' : '' }}">
    <label for="education_level">Education Level</label>
    <select class="form-control form-group-sm select2 change-with-other" 
    id="education_level" 
    name="education_level" 
    data-placeholder="Select Option"
    /> 
    <option></option>
    <option selected>{{$user->education_level}}</option>
    {{-- ID: 9     education_level --}}
    @foreach ($userSettingFields[8]->values as $value)

    @if ($user->education_level != $value->title)
    <option>{{ $value->title }}</option>
    @endif
    @endforeach
</select>
</div>
<input  
type="text" 
id="education_level_other" 
class="form-control other-value-field" 
name="education_level_other"        
value="{{$user->education_level_other ?: ''}}"
placeholder="Education Level Other (Please Specify here)" 

@if ($user->education_level == 'Other' || $user->education_level == 'Others')
style="border-radius: 4px;padding-left: 8px;margin-bottom: 25px;" 
@else
style="border-radius: 4px;padding-left: 8px; display: none;margin-bottom: 25px;" 
@endif

/>
</div>


<div class="other-area">
<div class="form-group form-group-sm {{ $errors->has('profession') ? ' has-error' : '' }}">
    <label for="profession">Profession</label>
    <select class="form-control form-group-sm select2 change-with-other" 
    id="profession" 
    name="profession" 
    data-placeholder="Select Option"
    /> 
    <option></option>
    <option selected>{{$user->profession}}</option>
    {{-- ID: 10     profession --}}
    @foreach ($userSettingFields[9]->values as $value)

    @if ($user->profession != $value->title)
    <option>{{ $value->title }}</option>
    @endif
    @endforeach
</select>
</div>
<input  
type="text" 
id="profession_other" 
class="form-control other-value-field" 
name="profession_other"        
value="{{$user->profession_other ?: ''}}"
placeholder="Profession Other (Please Specify here)" 

@if ($user->profession == 'Other' || $user->profession == 'Others')
style="border-radius: 4px;padding-left: 8px;margin-bottom: 25px;" 
@else
style="border-radius: 4px;padding-left: 8px; display: none;margin-bottom: 25px;" 
@endif

/>
</div>





                


            </div>
            <div class="col-sm-3">


<div class="form-group form-group-sm {{ $errors->has('religion') ? ' has-error' : '' }}">
            <label for="religion">Religion:</label>

            <select class="form-control form-group-sm select2" id="religion" name="religion" data-placeholder="Select Option">
                @if(old('religion'))
                <option selected>{{old('religion')}}</option>
                @else              
                <option selected>{{$user->religion}}</option>
                @endif
                {{-- id:3, title:religion --}}
                @foreach ($userSettingFields[2]->values as $value)
                    @if ($user->religion != $value->title)
                    <option>{{ $value->title }}</option>
                    @endif
                @endforeach
            </select>

            @if ($errors->has('religion'))
            <span class="help-block">
                <strong>{{ $errors->first('religion') }}</strong>
            </span>
            @endif
        </div>

        <div class="form-group form-group-sm {{ $errors->has('social_order') ? ' has-error' : '' }}">
            <label for="social_order">Caste / Social Order:</label>

            <select class="form-control form-group-sm select2" id="social_order" placeholder="Caste / Social Order" name="social_order">
                @if(old('social_order'))
                <option selected>{{old('social_order')}}</option>
                @elseif($user->social_order)             
                <option selected>{{$user->social_order}}</option>
                @else
                <option value="">Select Social Order</option>
                @endif
                {{-- id:4, title:social_order --}}
                @foreach ($userSettingFields[3]->values as $value)
                    @if ($user->social_order != $value->title)
                    <option>{{ $value->title }}</option>
                    @endif
                @endforeach
            </select>

            @if ($errors->has('social_order'))
            <span class="help-block">
                <strong>{{ $errors->first('social_order') }}</strong>
            </span>
            @endif
        </div>

        


        <div class="form-group form-group-sm {{ $errors->has('height') ? ' has-error' : '' }}">
            <label for="height">Height:</label>

            <select class="form-control form-group-sm select2" id="height" placeholder="Height" name="height">
                @if(old('height'))
                <option selected>{{old('height')}}</option>
                @elseif($user->height)             
                <option selected>{{$user->height}}</option>
                @else
                <option value="">Select Height</option>
                @endif
                {{-- id:6, title:height --}}
                @foreach ($userSettingFields[5]->values as $value)
                    @if ($user->height != $value->title)
                    <option>{{ $value->title }}</option>
                    @endif
                @endforeach
            </select>

            @if ($errors->has('height'))
            <span class="help-block">
                <strong>{{ $errors->first('height') }}</strong>
            </span>
            @endif
        </div>

        <div class="form-group form-group-sm {{ $errors->has('weight') ? ' has-error' : '' }}">
            <label for="weight">Weight:</label>

            <select class="form-control form-group-sm select2" id="weight" placeholder="Weight" name="weight">
                @if(old('weight'))
                <option selected>{{old('weight')}}</option>
                @elseif($user->weight)             
                <option selected>{{$user->weight}}</option>
                @else
                <option value="">Select weight</option>
                @endif
                {{-- id:7, title:weight --}}
                @foreach ($userSettingFields[6]->values as $value)
                    @if ($user->weight != $value->title)
                    <option>{{ $value->title }}</option>
                    @endif
                @endforeach
            </select>

            @if ($errors->has('weight'))
            <span class="help-block">
                <strong>{{ $errors->first('weight') }}</strong>
            </span>
            @endif
        </div>


        
                

                


    


        

        <div class="checkbox">
        <label>
            <input 
            type="checkbox"
            name="basic_checked"
            {{$user->isChecked() ? 'checked' : ''}} 
            /> Data Checked (Basic) ({{ $user->check_count }} times)</label>
        </div>
        
        <div class="checkbox">
        <label>
            {{-- <input 
            type="checkbox"
            name="basic_can_edit"
            {{$user->canEditByUser() ? 'checked' : ''}} 
            /> --}} 
            Edited (Basic) ({{ $user->edit_count }} times)</label>
        </div>

            </div>
        </div>
    </div>
</div>