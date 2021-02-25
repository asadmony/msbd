<form method="post" class="form-user-setting" action="{{route('user.settingFamilyInfoPost')}}">
    {{csrf_field()}}

    <div class="row w3-border w3-border-purple w3-round">
        <div class="col-sm-6">
            <div class="card card-default">
                <div class="card-body">


                    <div class="form-group {{ $errors->has('father_name') ? ' has-danger' : '' }}">
                        <label for="father_name">Father's Name *</label>
                        <input  
                        type="text"
                        id="father_name"
                        class="form-control w3-border w3-border-light-gray" 
                        name="father_name"
                        value="{{$me->familyInfo ? $me->familyInfo->father_name : ''}}"        
                        placeholder="Your Father's Name" 
                        style="border-radius: 4px;padding-left: 8px;" 
                        />
                        @if($errors->has('father_name'))

                        <span class="help-block">
                            <strong>{{ $errors->first('father_name') }}</strong>
                        </span>

                        @endif
                    </div>


                    <div class="form-group {{ $errors->has('father_occupation') ? ' has-danger' : '' }}">
                        <label for="father_occupation">Father's Occupation *</label>
                        <input  
                        type="text" 
                        id="father_occupation" 
                        class="form-control w3-border w3-border-light-gray" 
                        name="father_occupation"
                        value="{{$me->familyInfo ? $me->familyInfo->father_occupation : ''}}"        
                        placeholder="Your Father's Occupation" 
                        style="border-radius: 4px;padding-left: 8px;" 
                        list="profession_father" 

                        />

                        <datalist id="profession_father">
                          

                            {{-- id:12, title:father_profession --}}
                            @foreach ($userSettingFields[11]->values as $value)
                            <option value="{{ $value->title }}">
                            @endforeach

                        </datalist>

                        
                        @if($errors->has('father_occupation'))

                        <span class="help-block">
                            <strong>{{ $errors->first('father_occupation') }}</strong>
                        </span>

                        @endif
                    </div>


                    <div class="form-group {{ $errors->has('mother_name') ? ' has-danger' : '' }}">
                        <label for="mother_name">Mother's Name *</label>
                        <input  
                        type="text" 
                        id="mother_name" 
                        class="form-control w3-border w3-border-light-gray" 
                        name="mother_name"
                        value="{{$me->familyInfo ? $me->familyInfo->mother_name : ''}}"        
                        placeholder="Your Mother's Name" 
                        style="border-radius: 4px;padding-left: 8px;" 
                        />

                        

                        @if($errors->has('mother_name'))

                        <span class="help-block">
                            <strong>{{ $errors->first('mother_name') }}</strong>
                        </span>

                        @endif
                    </div>


                    <div class="form-group {{ $errors->has('mother_occupation') ? ' has-danger' : '' }}">
                        <label for="mother_occupation">Mother's Occupation *</label>
                        <input  
                        type="text" 
                        id="mother_occupation" 
                        class="form-control w3-border w3-border-light-gray" 
                        name="mother_occupation"
                        value="{{$me->familyInfo ? $me->familyInfo->mother_occupation : ''}}"        
                        placeholder="Your Mother's Occupation" 
                        style="border-radius: 4px;padding-left: 8px;" 
                        list="profession_mother" 
                        />

                        <datalist id="profession_mother">
                          

                            {{-- id:12, title:father_profession --}}
                            @foreach ($userSettingFields[12]->values as $value)
                            <option value="{{ $value->title }}">
                            @endforeach

                        </datalist>

                        @if($errors->has('mother_occupation'))

                        <span class="help-block">
                            <strong>{{ $errors->first('mother_occupation') }}</strong>
                        </span>

                        @endif
                    </div>



                    <div class="form-group {{ $errors->has('number_of_brother') ? ' has-danger' : '' }}">
                        <label for="number_of_brother">Number of Brother</label>
                        <input  
                        type="number" 
                        step="1" min="0" 
                        id="number_of_brother" 
                        class="form-control w3-border w3-border-light-gray" 
                        name="number_of_brother"
                        value="{{$me->familyInfo ? $me->familyInfo->number_of_brother : ''}}"        
                        placeholder="e.g. 4" 
                        style="border-radius: 4px;padding-left: 8px;" 
                        />
                        @if($errors->has('number_of_brother'))

                        <span class="help-block">
                            <strong>{{ $errors->first('number_of_brother') }}</strong>
                        </span>

                        @endif
                    </div>


                    <div class="form-group {{ $errors->has('how_many_brother_married') ? ' has-danger' : '' }}">
                        <label for="how_many_brother_married">How many brothers married?</label>
                        <input  
                        type="number" 
                        step="1" min="0" 
                        id="how_many_brother_married" 
                        class="form-control w3-border w3-border-light-gray" 
                        name="how_many_brother_married"
                        value="{{$me->familyInfo ? $me->familyInfo->how_many_brother_married : ''}}"        
                        placeholder="e.g. 2" 
                        style="border-radius: 4px;padding-left: 8px;" 
                        />
                        @if($errors->has('how_many_brother_married'))

                        <span class="help-block">
                            <strong>{{ $errors->first('how_many_brother_married') }}</strong>
                        </span>

                        @endif
                    </div>


                    <div class="form-group {{ $errors->has('number_of_sister') ? ' has-danger' : '' }}">
                        <label for="number_of_sister">Number of Sister</label>
                        <input  
                        type="number" 
                        id="number_of_sister" 
                        step="1" min="0" 
                        class="form-control w3-border w3-border-light-gray" 
                        name="number_of_sister"
                        value="{{$me->familyInfo ? $me->familyInfo->number_of_sister : ''}}"        
                        placeholder="e.g. 4" 
                        style="border-radius: 4px;padding-left: 8px;" 
                        />
                        @if($errors->has('number_of_sister'))

                        <span class="help-block">
                            <strong>{{ $errors->first('number_of_sister') }}</strong>
                        </span>

                        @endif
                    </div>

                    <div class="form-group {{ $errors->has('how_many_brother_married') ? ' has-danger' : '' }}">
                        <label for="how_many_sister_married">How many sisters married?</label>
                        <input  
                        type="number" 
                        step="1" min="0" 
                        id="how_many_sister_married" 
                        class="form-control w3-border w3-border-light-gray" 
                        name="how_many_sister_married"
                        value="{{$me->familyInfo ? $me->familyInfo->how_many_sister_married : ''}}"        
                        placeholder="e.g. 2" 
                        style="border-radius: 4px;padding-left: 8px;" 
                        />
                        @if($errors->has('how_many_sister_married'))

                        <span class="help-block">
                            <strong>{{ $errors->first('how_many_sister_married') }}</strong>
                        </span>

                        @endif
                    </div>

                    <div class="form-group {{ $errors->has('alternative_email') ? ' has-danger' : '' }}">
                        <label for="alternative_email">Alternative Email Address</label>
                        <input  
                        type="text" 
                        id="alternative_email" 
                        class="form-control w3-border w3-border-light-gray" 
                        name="alternative_email"
                        value="{{$me->familyInfo ? $me->familyInfo->alternative_email : ''}}"        
                        placeholder="Alternative Email Address" 
                        style="border-radius: 4px;padding-left: 8px;" 
                        />
                        @if($errors->has('alternative_email'))

                        <span class="help-block">
                            <strong>{{ $errors->first('alternative_email') }}</strong>
                        </span>

                        @endif
                    </div>

                    <div class="form-group {{ $errors->has('alternative_mobile') ? ' has-danger' : '' }}">
                        <label for="alternative_mobile">Alternative Mobile</label>
                        <input  
                        type="text" 
                        id="alternative_mobile" 
                        class="form-control w3-border w3-border-light-gray" 
                        name="alternative_mobile"
                        value="{{$me->familyInfo ? $me->familyInfo->alternative_mobile : ''}}"        
                        placeholder="Alternative Mobile Number" 
                        style="border-radius: 4px;padding-left: 8px;" 
                        />
                        @if($errors->has('alternative_mobile'))

                        <span class="help-block">
                            <strong>{{ $errors->first('alternative_mobile') }}</strong>
                        </span>

                        @endif
                    </div>

                    


                    

 
 

                     

                     
 

 


 





         



         

                     

                    

                    

                     



 


                </div>
            </div>




        </div>
        <div class="col-sm-6">


            <div class="card card-default">
                <div class="card-body">

                    <div class="form-group {{ $errors->has('family_type') ? ' has-danger' : '' }}">
                        <label for="family_type">Family Type *</label>
                        <input  
                        type="text" 
                        id="family_type" 
                        class="form-control w3-border w3-border-light-gray" 
                        name="family_type"
                        value="{{$me->familyInfo ? $me->familyInfo->family_type : ''}}"        
                        placeholder="Your Family Type" 
                        style="border-radius: 4px;padding-left: 8px;" 
                        list="list_family_type"
                        />

                        <datalist id="list_family_type">

                            {{-- id:14, title:family_type --}}
                            @foreach ($userSettingFields[13]->values as $value)
                            <option value="{{ $value->title }}">
                            @endforeach

                        </datalist>

                        @if($errors->has('family_type'))

                        <span class="help-block">
                            <strong>{{ $errors->first('family_type') }}</strong>
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
                        value="{{$me->familyInfo ? $me->familyInfo->convenient_time_to_call : ''}}"        
                        placeholder="Your Free Time for Contact? e.g: 9:00 am to 12:00 pm" 
                        style="border-radius: 4px;padding-left: 8px;" 
                        />
                        @if($errors->has('convenient_time_to_call'))

                        <span class="help-block">
                            <strong>{{ $errors->first('convenient_time_to_call') }}</strong>
                        </span>

                        @endif
                    </div>


                    <div class="form-group {{ $errors->has('name_of_contact_person') ? ' has-danger' : '' }}">
                        <label for="name_of_contact_person">Contact Person's Name *</label>
                        <input  
                        type="text" 
                        id="name_of_contact_person" 
                        class="form-control w3-border w3-border-light-gray" 
                        name="name_of_contact_person"
                        value="{{$me->familyInfo ? $me->familyInfo->name_of_contact_person : ''}}"        
                        placeholder="Name of Contact Person" 
                        style="border-radius: 4px;padding-left: 8px;" 
                        />
                        @if($errors->has('name_of_contact_person'))

                        <span class="help-block">
                            <strong>{{ $errors->first('name_of_contact_person') }}</strong>
                        </span>

                        @endif
                    </div>

                    <div class="form-group {{ $errors->has('contact_person_mobile') ? ' has-danger' : '' }}">
                        <label for="contact_person_mobile">Contact Person's Mobile *</label>
                        <input  
                        type="text" 
                        id="contact_person_mobile" 
                        class="form-control w3-border w3-border-light-gray" 
                        name="contact_person_mobile"
                        value="{{$me->familyInfo ? $me->familyInfo->contact_person_mobile : ''}}"        
                        placeholder="Mobile Number of Contact Person" 
                        style="border-radius: 4px;padding-left: 8px;" 
                        />
                        @if($errors->has('contact_person_mobile'))

                        <span class="help-block">
                            <strong>{{ $errors->first('contact_person_mobile') }}</strong>
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
                        value="{{$me->familyInfo ? $me->familyInfo->relation_with_contact_person : ''}}"        
                        placeholder="Relation with Contact Person" 
                        style="border-radius: 4px;padding-left: 8px;" 
                        />
                        @if($errors->has('relation_with_contact_person'))

                        <span class="help-block">
                            <strong>{{ $errors->first('relation_with_contact_person') }}</strong>
                        </span>

                        @endif
                    </div>

                    <div class="form-group {{ $errors->has('yearly_income') ? ' has-danger' : '' }}">
                        <label for="yearly_income">Yearly Income</label>
                        <input  
                        type="text" 
                        id="yearly_income" 
                        class="form-control w3-border w3-border-light-gray" 
                        name="yearly_income"
                        value="{{$me->familyInfo ? $me->familyInfo->yearly_income : ''}}"        
                        placeholder="e.g: BDT 10,00,000 or USD 30,000" 
                        style="border-radius: 4px;padding-left: 8px;" 
                        />
                        @if($errors->has('yearly_income'))

                        <span class="help-block">
                            <strong>{{ $errors->first('yearly_income') }}</strong>
                        </span>

                        @endif
                    </div>

                    <div class="form-group {{ $errors->has('about_yourself') ? ' has-danger' : '' }}">
                        <label for="about_yourself">Write about yourself *</label>

                        <textarea 
                        class="w3-border form-control w3-padding" 
                        name="about_yourself" 
                        id="about_yourself" 
                        cols="30" 
                        rows="6"
                        placeholder="I am {{ $me->name }}, I am currently live in Dhaka. I like to travelling various places..." 
                        >{{$me->familyInfo ? $me->familyInfo->about_yourself : ''}}</textarea>
                         
                        @if($errors->has('about_yourself'))

                        <span class="help-block">
                            <strong>{{ $errors->first('about_yourself') }}</strong>
                        </span>

                        @endif
                    </div>

                    <div class="form-group {{ $errors->has('extra_queries') ? ' has-danger' : '' }}">
                        <label for="extra_queries">Write Extra Queries (about your Partner) *</label>

                        <textarea 
                        class="w3-border form-control w3-padding" 
                        name="extra_queries" 
                        id="extra_queries" 
                        cols="30" 
                        rows="4"
                        placeholder="I want my life partner will have some virtues like honest, friendly, helpful, will from dhaka only..." 
                        >{{$me->familyInfo ? $me->familyInfo->extra_queries : ''}}</textarea>
                         
                        @if($errors->has('extra_queries'))

                        <span class="help-block">
                            <strong>{{ $errors->first('extra_queries') }}</strong>
                        </span>

                        @endif
                    </div>

                     


                     

                     

                    


                    






                    <br>
                    <div class="d-flex">

                        @if ($me->familyInfo)
                            @if(!$me->familyInfo->can_edit)
                            <b class="w3-text-red">(You have no permission to update, please contact admin)</b>

                            @endif
                        @endif
                        <button class="btn btn-default border mr-2" type="reset">Reset</button>
                        <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
                        <button type="submit" class="btn btn-primary">Submit</button>

                        
                    </div>



                </div>
            </div>

        </div>

    </div>




    
</form>

<script src="{{asset('js/location.js')}}"></script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAcjU4Z83IrRvF3DdDYqsBW66_2eUC8krU&libraries=places&callback=initAutocomplete"
    async defer></script>