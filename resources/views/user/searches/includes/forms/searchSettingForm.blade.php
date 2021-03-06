<form method="post" class="form-user-setting" action="{{route('user.settingSearchTermPost')}}">
    {{csrf_field()}}

 

            <div class="w3-border w3-border-purple w3-round w3-white">
                        <div class="w3-container w3-padding">

            <div class="row">
                <div class="col-sm-3">
                    <div class="form-group {{ $errors->has('minimum_age') ? ' has-danger' : '' }}" style="width: 100%;">
        <label for="minimum_age">Minimum Age (Year) *</label>
         
        <select class="form-control  simple-select2 w-100" id="minimum_age" name="minimum_age">

                <option value="">Select Minimum Age </option>
                @if (isset($me->searchTerm->min_age))
                    <option selected>{{ $me->searchTerm->min_age }}</option>
                @endif

                @for ($i = 18; $i <= 60; $i++)
                    {{-- @if ($me->searchTerm->min_age != $i) --}}
                        <option>{{ $i }}</option>
                    {{-- @endif --}}
                    
                @endfor
                
        </select>

        @if($errors->has('minimum_age'))

        <span class="help-block">
            <strong>{{ $errors->first('minimum_age') }}</strong>
        </span>

        @endif
    </div>



    <div class="form-group {{ $errors->has('maximum_age') ? ' has-danger' : '' }}" style="width: 100%;">
        <label for="maximum_age">Maximum Age *</label>

        <select class="form-control  simple-select2 w-100" id="maximum_age" name="maximum_age">

            <option value="">Select Maximum Age </option>
            @if (isset($me->searchTerm->max_age))
                <option selected>{{ $me->searchTerm->max_age }}</option>
            @endif

            @for ($i = 18; $i <= 80; $i++)
                {{-- @if ($me->searchTerm->max_age != $i) --}}
                    <option>{{ $i }}</option>
                {{-- @endif --}}
                
            @endfor
                
        </select>
        
         

        @if($errors->has('maximum_age'))

        <span class="help-block">
            <strong>{{ $errors->first('maximum_age') }}</strong>
        </span>

        @endif
    </div>


                </div>
                <div class="col-sm-3">

    <div class="form-group {{ $errors->has('minimum_height') ? ' has-danger' : '' }}">
        <label for="minimum_height">Minimum Height *</label>
        <select class="form-control simple-select2 w-100" name="minimum_height" style="width: 100%;">
            <option></option>
            @if(isset($me->searchTerm->min_height))
            <option selected>{{$me->searchTerm->min_height}}</option>
            @endif
            {{-- ID: 6     My Height --}}
            @foreach ($userSettingFields[5]->values as $value)
            {{-- @if($me->searchTerm)
            @if ($me->searchTerm->min_height != $value->title)
            <option>{{ $value->title }}</option>
            @endif
            @else --}}
            <option>{{ $value->title }}</option>
            {{-- @endif --}}
            @endforeach
        </select>
    </div>

    <div class="form-group {{ $errors->has('maximum_height') ? ' has-danger' : '' }}">
        <label for="maximum_height">Maximum Height *</label>
        <select class="form-control simple-select2 w-100" name="maximum_height" style="width: 100%;">
            <option></option>
            @if(isset($me->searchTerm->max_height))
            <option selected>{{$me->searchTerm->max_height}}</option>
            @endif
            {{-- ID: 6     My Height --}}
            @foreach ($userSettingFields[5]->values as $value)
            {{-- @if($me->searchTerm)
            @if ($me->searchTerm->max_height != $value->title)
            <option>{{ $value->title }}</option>
            @endif
            @else --}}
            <option>{{ $value->title }}</option>
            {{-- @endif --}}
            @endforeach
        </select>
    </div>
                    



                </div>
                <div class="col-sm-3">
                    

<div class="form-group {{ $errors->has('marital_status') ? ' has-danger' : '' }}">
        <label for="marital_status">Marital Status *</label>
        <select class="form-control simple-select2 w-100" name="marital_status" style="width: 100%;">
            
            <option></option>
            @if(isset($me->searchTerm->marital_status))
            <option selected>{{$me->searchTerm->marital_status}}</option>
            @endif
            {{-- ID: 11     Marital Status --}}
            @foreach ($userSettingFields[10]->values as $value)
            {{-- @if($me->searchTerm)
            @if ($me->searchTerm->marital_status != $value->title)
            <option>{{ $value->title }}</option>
            @endif
            @else --}}
            <option>{{ $value->title }}</option>
            {{-- @endif --}}
            @endforeach
        </select>
    </div>

    {{-- <div class="form-group {{ $errors->has('do_u_have_children') ? ' has-danger' : '' }}">
        <label for="do_u_have_children">Have children?</label>
        <select class="simple-select2 w-100" name="do_u_have_children" style="width: 100%;">
            <option></option>
            @if($me->searchTerm->do_u_have_children)
            <option selected>{{$me->searchTerm->do_u_have_children}}</option>
            @endif
            @foreach ($userSettingFields[12]->values as $value)
            @if($me->searchTerm)
            @if ($me->searchTerm->do_u_have_children != $value->title)
            <option>{{ $value->title }}</option>
            @endif
            @else
            <option>{{ $value->title }}</option>
            @endif
            @endforeach
        </select>
    </div>
 --}}


<div class="form-group {{ $errors->has('profession') ? ' has-danger' : '' }}">
        <label for="profession">Profession *</label>
        <select class="form-control simple-select2 w-100" name="profession" style="width: 100%;">
            
            <option></option>
            @if(isset($me->searchTerm->profession))
            <option selected>{{$me->searchTerm->profession}}</option>
            @endif
            {{-- ID: 10     Profession --}}
            @foreach ($userSettingFields[9]->values as $value)
            {{-- @if($me->searchTerm)
            @if ($me->searchTerm->profession != $value->title)
            <option>{{ $value->title }}</option>
            @endif
            @else --}}
            <option>{{ $value->title }}</option>
            {{-- @endif --}}
            @endforeach
        </select>
    </div>

                </div>
                <div class="col-sm-3">
                    


                    <div class="form-group {{ $errors->has('religion') ? ' has-danger' : '' }}">
                        <label for="religion">Religion/Community</label>
                        <select class="form-control simple-select2 w-100" name="religion" style="width: 100%;">

                            <option></option>

                            @if(isset($me->searchTerm->religion))
                            <option selected>{{$me->searchTerm->religion}}</option>
                            @endif

                            {{-- ID: 3   Religion --}}
                            @foreach ($userSettingFields[2]->values as $value)

                            {{-- @if ($me->searchTerm->religion != $value->title) --}}
                            <option>{{ $value->title }}</option>
                            {{-- @endif --}}

                            @endforeach
                        </select>
                    </div>

                    <div class="form-group {{ $errors->has('country') ? ' has-danger' : '' }}">
                        <label for="country">Present Country</label>
                        <select class="form-control simple-select2 w-100" name="country" style="width: 100%;"> 

                            <option></option> 
                            @if(isset($me->searchTerm->country))
                            <option selected>{{$me->searchTerm->country}}</option>
                            @endif 
                            @foreach ($countries as $value)
                                {{-- @if ($me->searchTerm->country != $value->title) --}}
                                <option>{{ $value->title }}</option>
                                {{-- @endif --}}
                                @endforeach
                            
                        </select>
                    </div>




                </div>
            </div>




    


    <br>
    <div class="pull-right">
        <button class="btn btn-default border" type="reset">Reset</button>
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>

</div>
</div>
</form>