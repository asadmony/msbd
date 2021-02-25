<form action="{{ route('user.createProfile') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="header pl-3 py-1 border rounded w3-shadow">Personal information</div>
    <div class="input-group py-2">
      <div class="col-md-4">
        <label class="form-control-" for="birthdate">Profile Photo</label>
      </div>
      <div class="col-md-8">
        <div class="picture">
          <img style="max-height: 200px; max-width:200px;" src="{{ asset('mk/mk2/assets/img/default-avatar.png') }}" class="picture-src" id="wizardPicturePreview" title=""/>
            <input type="file" required name="  " id="wizard-picture">
        </div>
        <h6>Choose Picture <small class="w3-text-red">(Required)</small> 
          <br> 
          <small class="text-red">Square Sized Image is Better</small>

          @if ($errors->has('file'))
          <br>
          <span class="w3-text-red">
              <strong>{{ $errors->first('file') }} Height minimum 200px and weight minimum 200px</strong>
          </span>

          @endif

        </h6>
      </div>
    </div>
    <div class="input-group py-2">
      <div class="col-md-4">
        <label class="form-control-" for="birthdate">Birthdate</label>
      </div>
      <div class="col-md-8">
        <input class="form-control" type="date" name="birthdate" value="{{ old('birthdate') ?: $me->dob ?? '' }}" required>
      </div>
    </div>
    <div class="input-group py-2">
      <div class="col-md-4">
        <label class="form-control-" for="gender">Gender</label>
      </div>
      <div class="col-md-8">
        <input class="px-2" type="radio" name="gender" value="Male" checked="true"> Male
        <input class="px-2" type="radio" name="gender" value="Female" @if(old('gender')=='Female' || $me->gender == 'Female')checked @endif> Female
      </div>
    </div>
    <div class="input-group py-2">
      <div class="col-md-4">
        <label class="form-control-" for="height">Height</label>
      </div>
      <div class="col-md-8">
        <select class="form-control" required id="height" name="height">
            
            @if (old('height'))
            <option selected value="{{ old('height') }}">{{ old('height') }}</option>
            @elseif($me->height != '')
            <option selected value="{{ $me->height }}">{{ $me->height }}</option>
            @else
            <option value="" selected disabled>Height </option>
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
    <div class="input-group py-2">
      <div class="col-md-4">
        <label class="form-control-" for="weight">Weight</label>
      </div>
      <div class="col-md-8">
        <select class="form-control" required id="weight" name="weight">
            
            @if (old('weight'))
            <option selected value="{{ old('weight') }}">{{ old('weight') }}</option>
            @elseif($me->weight != '')
            <option selected value="{{ $me->weight }}">{{ $me->weight }}</option>
            @else
            <option value="" selected disabled> Weight </option>
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
          @endif
      </div>
    </div>
    <div class="input-group py-2">
      <div class="col-md-4">
        <label class="form-control-" for="religion">Religion/Community</label>
      </div>
      <div class="col-md-8">
        <select class="form-control" required id="religion" name="religion">
          @if (old('religion'))
          <option selected value="{{ old('religion') }}">{{ old('religion') }}</option>
          @elseif($me->religion != '')
          <option selected value="{{ $me->religion }}">{{ $me->religion }}</option>
          @else
          <option value="" selected disabled> Religion/Community  </option>
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
    <div class="input-group py-2">
      <div class="col-md-4">
        <label class="form-control-" for="marital_status">Marital Status</label>
      </div>
      <div class="col-md-8">
        <select class="form-control" required id="marital_status" name="marital_status">
  
          @if (old('marital_status'))
          <option selected value="{{ old('marital_status') }}">{{ old('marital_status') }}</option>
          @elseif($me->marital_status != '')
          <option selected value="{{ $me->marital_status }}">{{ $me->marital_status }}</option>
          @else
          <option value="" selected disabled> Marital Status  </option>
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
          @endif
      </div>
    </div>
    <div class="input-group py-2">
      <div class="col-md-4">
        <label class="form-control-" for="skin_color">Skin color/Complexion</label>
      </div>
      <div class="col-md-8">
        <select class="form-control" required id="skin_color" name="skin_color">
  
          @if (old('skin_color'))
          <option selected value="{{ old('skin_color') }}">{{ old('skin_color') }}</option>
          @elseif($me->skin_color != '')
          <option selected value="{{ $me->skin_color }}">{{ $me->skin_color }}</option>
          @else
          <option value="" selected disabled> Skin Color/Complexion  </option>
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
  
          @endif
      </div>
    </div>
    <div class="input-group py-2">
      <div class="col-md-4">
        <label class="form-control-" for="country">Present Country</label>
      </div>
      <div class="col-md-8">
        <select class="form-control change-with-other" id="country" name="country" autocomplete="off">
            @if (old('country'))
                <option selected value="{{ old('country') }}">{{ old('country') }}</option>
                @elseif($me->country != '')
                <option selected value="{{ $me->country }}">{{ $me->country }}</option>
                @else
                <option value="" selected disabled> Present Country  </option>
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
            {{-- <span class="help-block">country is required</span> --}}
            @endif
      </div>
    </div>
    <div class="input-group py-2">
      <div class="col-md-4">
        <label class="form-control-" for="gender">Profile created by</label>
      </div>
      <div class="col-md-8">
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
  
          @endif
      </div>
    </div>
    <div class="input-group py-2">
      <div class="col-md-4">
        <label class="form-control-" for="education_level">Education Level</label>
      </div>
      <div class="col-md-8">
        <select class="form-control change-with-other" id="education_level" name="education_level" autocomplete="off">
          @if (old('education_level'))
              <option selected value="{{ old('education_level') }}">{{ old('education_level') }}</option>
              @elseif($me->education_level != '')
              <option selected value="{{ $me->education_level }}">{{ $me->education_level }}</option>
              @else
              <option value="" selected disabled> Education Level  </option>
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
          @endif

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
    <div class="input-group py-2">
      <div class="col-md-4">
        <label class="form-control-" for="profession">Profession</label>
      </div>
      <div class="col-md-8">
        <select class="form-control change-with-other" id="profession" name="profession" autocomplete="off">
          @if (old('profession'))
              <option selected value="{{ old('profession') }}">{{ old('profession') }}</option>
              @elseif($me->profession != '')
              <option selected value="{{ $me->profession }}">{{ $me->profession }}</option>
              @else
              <option value="" selected disabled> Profession  </option>
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
    <div class="header pl-3 py-1 border rounded w3-shadow">Partner preference</div>
    <div class="input-group py-2">
      <div class="col-md-4">
        <label class="form-control-" for="height_minimum">Min height</label>
      </div>
      <div class="col-md-8">
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
          @endif
      </div>
    </div> 
    <div class="input-group py-2">
      <div class="col-md-4">
        <label class="form-control-" for="height_maximum">Max height</label>
      </div>
      <div class="col-md-8">
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
          @endif
      </div>
    </div> 
    <div class="input-group py-2">
      <div class="col-md-4">
        <label class="form-control-" for="minimum_age">Min Age(Year)</label>
      </div>
      <div class="col-md-8">
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
    <div class="input-group py-2">
      <div class="col-md-4">
        <label class="form-control-" for="maximum_age">Max Age</label>
      </div>
      <div class="col-md-8">
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
    <div class="input-group py-2">
      <div class="col-md-4">
        <label class="form-control-" for="partner_marital_status">Marital Status</label>
      </div>
      <div class="col-md-8">
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
          @endif
      </div>
    </div> 
    <div class="input-group py-2">
      <div class="col-md-4">
        <label class="form-control-" for="partner_country">Prefered Country</label>
      </div>
      <div class="col-md-8">
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
    </div> 
    <div class="input-group py-2">
      <div class="col-md-4">
        <label class="form-control-" for="partner_religion">Religion/Community</label>
      </div>
      <div class="col-md-8">
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
          @endif
      </div>
    </div> 
    <div class="input-group py-2">
      <div class="col-md-4">
        <label class="form-control-" for="partner_profession">Profession</label>
      </div>
      <div class="col-md-8">
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
    </div> 
    <div class="input-group py-2">
      <div class="col text-center">
      <button class="btn border" type="submit">Save</button>
      </div>
    </div>

  </form>