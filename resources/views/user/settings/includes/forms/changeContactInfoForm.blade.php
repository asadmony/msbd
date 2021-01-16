<form method="post" class="form-user-setting" action="{{route('user.settingContactInfoPost')}}">
    {{csrf_field()}}





    <div class="row">
        <div class="col-sm-6">
            <div class="box box-default">
                <div class="box-body">


                                    <div class="form-group {{ $errors->has('present_address') ? ' has-danger' : '' }}">
                    <label for="present_address">Present Address *</label>
                    <input  
                    type="text" 
                    id="present_address" 
                    class="form-control w3-border w3-border-light-gray" 
                    name="present_address"
                    value="{{$me->contactInfo ? $me->contactInfo->present_address : ''}}"        
                    placeholder="Present Address" 
                    style="border-radius: 4px;padding-left: 8px;" 
                    />
                    @if($errors->has('present_address'))

                    <span class="help-block">
                        <strong>{{ $errors->first('present_address') }}</strong>
                    </span>
                    
                    @endif
                </div>


<div class="form-group {{ $errors->has('permanent_address') ? ' has-danger' : '' }}">
    <label for="permanent_address">Permanent Address *</label>
    <input  
    type="text" 
    id="permanent_address" 
    class="form-control w3-border w3-border-light-gray" 
    name="permanent_address"
    value="{{$me->contactInfo ? $me->contactInfo->permanent_address : ''}}"        
    placeholder="Permanent Address" 
    style="border-radius: 4px;padding-left: 8px;" 
    />
    @if($errors->has('permanent_address'))

    <span class="help-block">
        <strong>{{ $errors->first('permanent_address') }}</strong>
    </span>
    
    @endif
</div>



                    <div class="form-group {{ $errors->has('alternative_email') ? ' has-danger' : '' }}">
                    <label for="alternative_email">Alternative Email *</label>
                    <input  
                    type="email" 
                    id="alternative_email" 
                    class="form-control w3-border w3-border-light-gray" 
                    name="alternative_email"
                    value="{{$me->contactInfo ? $me->contactInfo->alternative_email : ''}}"        
                    placeholder="Alternative Email..." 
                    style="border-radius: 4px;padding-left: 8px;" 
                    />
                    @if($errors->has('alternative_email'))

                    <span class="help-block">
                        <strong>{{ $errors->first('alternative_email') }}</strong>
                    </span>
                    
                    @endif
                </div>


                <div class="form-group {{ $errors->has('alternative_mobile') ? ' has-danger' : '' }}">
                    <label for="alternative_mobile">Alternative Mobile *</label>
                    <input  
                    type="text" 
                    id="alternative_mobile" 
                    class="form-control w3-border w3-border-light-gray" 
                    name="alternative_mobile"
                    value="{{$me->contactInfo ? $me->contactInfo->alternative_mobile : ''}}"        
                    placeholder="Alternative Mobile..." 
                    style="border-radius: 4px;padding-left: 8px;" 
                    />
                    @if($errors->has('alternative_mobile'))

                    <span class="help-block">
                        <strong>{{ $errors->first('alternative_mobile') }}</strong>
                    </span>
                    
                    @endif
                </div>



                <div class="form-group {{ $errors->has('convenient_time_to_call') ? ' has-danger' : '' }}">
                    <label for="convenient_time_to_call">Convenient time to call *</label>
                    <input  
                    type="text" 
                    id="convenient_time_to_call" 
                    class="form-control w3-border w3-border-light-gray" 
                    name="convenient_time_to_call"
                    value="{{$me->contactInfo ? $me->contactInfo->convenient_time_to_call : ''}}"        
                    placeholder="9am to 5pm..." 
                    style="border-radius: 4px;padding-left: 8px;" 
                    />
                    @if($errors->has('convenient_time_to_call'))

                    <span class="help-block">
                        <strong>{{ $errors->first('convenient_time_to_call') }}</strong>
                    </span>
                    
                    @endif
                </div>



                















                </div>
            </div>




        </div>
        <div class="col-sm-6">


            <div class="box box-default">
                <div class="box-body">


                    


                <div class="form-group {{ $errors->has('name_of_contact_person') ? ' has-danger' : '' }}">
                    <label for="name_of_contact_person">Name of Contact Person *</label>
                    <input  
                    type="text" 
                    id="name_of_contact_person" 
                    class="form-control w3-border w3-border-light-gray" 
                    name="name_of_contact_person"
                    value="{{$me->contactInfo ? $me->contactInfo->name_of_contact_person : ''}}"        
                    placeholder="Name of Contact Person" 
                    style="border-radius: 4px;padding-left: 8px;" 
                    />
                    @if($errors->has('name_of_contact_person'))

                    <span class="help-block">
                        <strong>{{ $errors->first('name_of_contact_person') }}</strong>
                    </span>
                    
                    @endif
                </div>


                <div class="form-group {{ $errors->has('relation_with_contact_person') ? ' has-danger' : '' }}">
                    <label for="relation_with_contact_person">Relation with Contact Person *</label>
                    <input  
                    type="text" 
                    id="relation_with_contact_person" 
                    class="form-control w3-border w3-border-light-gray" 
                    name="relation_with_contact_person"
                    value="{{$me->contactInfo ? $me->contactInfo->relation_with_contact_person : ''}}"        
                    placeholder="Relation with Contact Person" 
                    style="border-radius: 4px;padding-left: 8px;" 
                    />
                    @if($errors->has('relation_with_contact_person'))

                    <span class="help-block">
                        <strong>{{ $errors->first('relation_with_contact_person') }}</strong>
                    </span>
                    
                    @endif
                </div>

                <div class="form-group {{ $errors->has('nid') ? ' has-danger' : '' }}">
                    <label for="nid">Your NID / Smart Card Number *</label>
                    <input  
                    type="text" 
                    id="nid" 
                    class="form-control w3-border w3-border-light-gray" 
                    name="nid"
                    value="{{$me->contactInfo ? $me->contactInfo->nid : ''}}"        
                    placeholder="Your NID / Smart Card / Passport Number" 
                    style="border-radius: 4px;padding-left: 8px;" 
                    />
                    @if($errors->has('nid'))

                    <span class="help-block">
                        <strong>{{ $errors->first('nid') }}</strong>
                    </span>
                    
                    @endif
                </div>


                <div class="form-group {{ $errors->has('about_me') ? ' has-danger' : '' }}">
                    <label for="about_me">About Yourself *</label>
                    <input  
                    type="text" 
                    id="about_me" 
                    class="form-control w3-border w3-border-light-gray" 
                    name="about_me"
                    value="{{$me->contactInfo ? $me->contactInfo->about_me : ''}}"        
                    placeholder="Write some information about yourself..." 
                    style="border-radius: 4px;padding-left: 8px;" 
                    />
                    @if($errors->has('about_me'))

                    <span class="help-block">
                        <strong>{{ $errors->first('about_me') }}</strong>
                    </span>
                    
                    @endif
                </div>


                

                <div class="form-group {{ $errors->has('about_family') ? ' has-danger' : '' }}">
                    <label for="about_family">About Your Family *</label>
                    <input  
                    type="text" 
                    id="about_family" 
                    class="form-control w3-border w3-border-light-gray" 
                    name="about_family"
                    value="{{$me->contactInfo ? $me->contactInfo->about_family : ''}}"        
                    placeholder="Write some information about your family..." 
                    style="border-radius: 4px;padding-left: 8px;" 
                    />
                    @if($errors->has('about_family'))

                    <span class="help-block">
                        <strong>{{ $errors->first('about_family') }}</strong>
                    </span>
                    
                    @endif
                </div>

                <br>

                <div class="">
        <button type="submit" class="btn btn-primary">Update</button>
    </div>




                </div>
            </div>

        </div>

    </div>




    
</form>