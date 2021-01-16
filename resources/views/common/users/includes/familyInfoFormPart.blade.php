
<div class="box box-widget">
    <div class="box-header with-border">
        <h3 class="box-title">
            Family, Contact & Extra Information
        </h3>
    </div>
    <div class="box-body">
        <div class="row">
            <div class="col-sm-3">


                <div class="form-group form-group-sm {{ $errors->has('father_name') ? ' has-error' : '' }}">
                <label for="father_name">Father's Name:</label>
                <input 
                type="text"  
                class="form-control" 
                id="father_name"
                name="father_name"

                @if (old('father_name'))
                value="{{ old('father_name')}}"
                @elseif($user->familyInfo)
                value="{{$user->familyInfo->father_name}}"
                @endif
                 
                placeholder="Father's Name" 
                />

                @if ($errors->has('father_name'))
                <span class="help-block">
                    <strong>{{ $errors->first('father_name') }}</strong>
                </span>
                @endif
            </div>


            <div class="form-group form-group-sm {{ $errors->has('father_occupation') ? ' has-error' : '' }}">
                <label for="father_occupation">Father's Occupation:</label>
                <input 
                type="text"  
                class="form-control" 
                id="father_occupation"
                name="father_occupation"
                
                @if (old('father_occupation'))
                value="{{ old('father_occupation')}}"
                @elseif($user->familyInfo)
                value="{{$user->familyInfo->father_occupation}}"
                @endif
                 
                placeholder="Father's Occupation" 
                list="profession_father" 
                />

                <datalist id="profession_father">
                          

                {{-- id:12, title:father_profession --}}
                @foreach ($userSettingFields[11]->values as $value)
                <option value="{{ $value->title }}">
                @endforeach

            </datalist>

                @if ($errors->has('father_occupation'))
                <span class="help-block">
                    <strong>{{ $errors->first('father_occupation') }}</strong>
                </span>
                @endif
            </div>


            <div class="form-group form-group-sm {{ $errors->has('mother_name') ? ' has-error' : '' }}">
                <label for="mother_name">Mother's Name:</label>
                <input 
                type="text"  
                class="form-control" 
                id="mother_name"
                name="mother_name"
                
                @if (old('mother_name'))
                value="{{ old('mother_name')}}"
                @elseif($user->familyInfo)
                value="{{$user->familyInfo->mother_name}}"
                @endif
                 
                placeholder="Mother's Name" 
                />

                @if ($errors->has('mother_name'))
                <span class="help-block">
                    <strong>{{ $errors->first('mother_name') }}</strong>
                </span>
                @endif
            </div>

            <div class="form-group form-group-sm {{ $errors->has('mother_occupation') ? ' has-error' : '' }}">
                <label for="mother_occupation">Mother's Occupation:</label>
                <input 
                type="text"  
                class="form-control" 
                id="mother_occupation"
                name="mother_occupation"
                
                @if (old('mother_occupation'))
                value="{{ old('mother_occupation')}}"
                @elseif($user->familyInfo)
                value="{{$user->familyInfo->mother_occupation}}"
                @endif
                 
                placeholder="Mother's Occupation" 

                list="profession_mother"
                />

                <datalist id="profession_mother">
                          

                {{-- id:13, title:mother_profession --}}
                @foreach ($userSettingFields[12]->values as $value)
                <option value="{{ $value->title }}">
                @endforeach

            </datalist>

                @if ($errors->has('mother_occupation'))
                <span class="help-block">
                    <strong>{{ $errors->first('mother_occupation') }}</strong>
                </span>
                @endif
            </div>

            <div class="form-group form-group-sm {{ $errors->has('number_of_brother') ? ' has-error' : '' }}">
                <label for="number_of_brother">Number of Brother:</label>
                <input 
                type="text"  
                class="form-control" 
                id="number_of_brother"
                name="number_of_brother"
                
                @if (old('number_of_brother'))
                value="{{ old('number_of_brother')}}"
                @elseif($user->familyInfo)
                value="{{$user->familyInfo->number_of_brother}}"
                @endif
                 
                placeholder="e.g. 4" 
                />

                @if ($errors->has('number_of_brother'))
                <span class="help-block">
                    <strong>{{ $errors->first('number_of_brother') }}</strong>
                </span>
                @endif
            </div>














            


             

            


            

                

            </div>
            <div class="col-sm-3">


                


            <div class="form-group form-group-sm {{ $errors->has('how_many_brother_married') ? ' has-error' : '' }}">
                <label for="how_many_brother_married">How Many Brother Married?:</label>
                <input 
                type="text"  
                class="form-control" 
                id="how_many_brother_married"
                name="how_many_brother_married"
                
                @if (old('how_many_brother_married'))
                value="{{ old('how_many_brother_married')}}"
                @elseif($user->familyInfo)
                value="{{$user->familyInfo->how_many_brother_married}}"
                @endif
                 
                placeholder="e.g. 2" 
                />

                @if ($errors->has('how_many_brother_married'))
                <span class="help-block">
                    <strong>{{ $errors->first('how_many_brother_married') }}</strong>
                </span>
                @endif
            </div>


            <div class="form-group form-group-sm {{ $errors->has('number_of_sister') ? ' has-error' : '' }}">
                <label for="number_of_sister">Number of Sister</label>
                <input 
                type="text"  
                class="form-control" 
                id="number_of_sister"
                name="number_of_sister"
                
                @if (old('number_of_sister'))
                value="{{ old('number_of_sister')}}"
                @elseif($user->familyInfo)
                value="{{$user->familyInfo->number_of_sister}}"
                @endif
                 
                placeholder="e.g. 4" 
                />

                @if ($errors->has('number_of_sister'))
                <span class="help-block">
                    <strong>{{ $errors->first('number_of_sister') }}</strong>
                </span>
                @endif
            </div>


            <div class="form-group form-group-sm {{ $errors->has('how_many_sister_married') ? ' has-error' : '' }}">
                <label for="how_many_sister_married">How Many Sister Married?:</label>
                <input 
                type="text"  
                class="form-control" 
                id="how_many_sister_married"
                name="how_many_sister_married"
                
                @if (old('how_many_sister_married'))
                value="{{ old('how_many_sister_married')}}"
                @elseif($user->familyInfo)
                value="{{$user->familyInfo->how_many_sister_married}}"
                @endif
                 
                placeholder="e.g. 2" 
                />

                @if ($errors->has('how_many_sister_married'))
                <span class="help-block">
                    <strong>{{ $errors->first('how_many_sister_married') }}</strong>
                </span>
                @endif
            </div>


            <div class="form-group form-group-sm {{ $errors->has('alternative_email') ? ' has-error' : '' }}">
                <label for="alternative_email">Alternative Email</label>
                <input 
                type="email"  
                class="form-control" 
                id="alternative_email"
                name="alternative_email"
                
                @if (old('alternative_email'))
                value="{{ old('alternative_email')}}"
                @elseif($user->familyInfo)
                value="{{$user->familyInfo->alternative_email}}"
                @endif
                 
                placeholder="Alternative Email" 
                />

                @if ($errors->has('alternative_email'))
                <span class="help-block">
                    <strong>{{ $errors->first('alternative_email') }}</strong>
                </span>
                @endif
            </div>


            <div class="form-group form-group-sm {{ $errors->has('alternative_mobile') ? ' has-error' : '' }}">
                <label for="alternative_mobile">Alternative Mobile</label>
                <input 
                type="text"  
                class="form-control" 
                id="alternative_mobile"
                name="alternative_mobile"
                
                @if (old('alternative_mobile'))
                value="{{ old('alternative_mobile')}}"
                @elseif($user->familyInfo)
                value="{{$user->familyInfo->alternative_mobile}}"
                @endif
                  
                placeholder="Alternative Mobile" 
                />

                @if ($errors->has('alternative_mobile'))
                <span class="help-block">
                    <strong>{{ $errors->first('alternative_mobile') }}</strong>
                </span>
                @endif
            </div>


 

            </div>
            <div class="col-sm-3">


                

            <div class="form-group form-group-sm {{ $errors->has('family_type') ? ' has-error' : '' }}">
                <label for="family_type">Family Type</label>
                <input 
                type="text"  
                class="form-control" 
                id="family_type"
                name="family_type"
                
                @if (old('family_type'))
                value="{{ old('family_type')}}"
                @elseif($user->familyInfo)
                value="{{$user->familyInfo->family_type}}"
                @endif
                 
                placeholder="Family Type" 

                list="list_family_type"
                />

                <datalist id="list_family_type">

                    {{-- id:14, title:family_type --}}
                    @foreach ($userSettingFields[13]->values as $value)
                    <option value="{{ $value->title }}">
                    @endforeach

                </datalist>

                @if ($errors->has('family_type'))
                <span class="help-block">
                    <strong>{{ $errors->first('family_type') }}</strong>
                </span>
                @endif
            </div>

            <div class="form-group form-group-sm {{ $errors->has('convenient_time_to_call') ? ' has-error' : '' }}">
                <label for="convenient_time_to_call">Convenient Time to Call</label>
                <input 
                type="text"  
                class="form-control" 
                id="convenient_time_to_call"
                name="convenient_time_to_call"
                
                @if (old('convenient_time_to_call'))
                value="{{ old('convenient_time_to_call')}}"
                @elseif($user->familyInfo)
                value="{{$user->familyInfo->convenient_time_to_call}}"
                @endif
                 
                placeholder="Free time for contact" 
                />

                @if ($errors->has('convenient_time_to_call'))
                <span class="help-block">
                    <strong>{{ $errors->first('convenient_time_to_call') }}</strong>
                </span>
                @endif
            </div>


            <div class="form-group form-group-sm {{ $errors->has('name_of_contact_person') ? ' has-error' : '' }}">
                <label for="name_of_contact_person">Name of Contact Person</label>
                <input 
                type="text"  
                class="form-control" 
                id="name_of_contact_person"
                name="name_of_contact_person"
                
                @if (old('name_of_contact_person'))
                value="{{ old('name_of_contact_person')}}"
                @elseif($user->familyInfo)
                value="{{$user->familyInfo->name_of_contact_person}}"
                @endif
                 
                placeholder="Name of Contact Person" 
                />

                @if ($errors->has('name_of_contact_person'))
                <span class="help-block">
                    <strong>{{ $errors->first('name_of_contact_person') }}</strong>
                </span>
                @endif
            </div>


            <div class="form-group form-group-sm {{ $errors->has('contact_person_mobile') ? ' has-error' : '' }}">
                <label for="contact_person_mobile">Contact Person's Mobile</label>
                <input 
                type="text"  
                class="form-control" 
                id="contact_person_mobile"
                name="contact_person_mobile"
                
                @if (old('contact_person_mobile'))
                value="{{ old('contact_person_mobile')}}"
                @elseif($user->familyInfo)
                value="{{$user->familyInfo->contact_person_mobile}}"
                @endif
                 
                placeholder="Contact Person's Mobile" 
                />

                @if ($errors->has('contact_person_mobile'))
                <span class="help-block">
                    <strong>{{ $errors->first('contact_person_mobile') }}</strong>
                </span>
                @endif
            </div>

            <div class="form-group form-group-sm {{ $errors->has('relation_with_contact_person') ? ' has-error' : '' }}">
                <label for="relation_with_contact_person">Relation with Contact Person</label>
                <input 
                type="text"  
                class="form-control" 
                id="relation_with_contact_person"
                name="relation_with_contact_person"
                
                @if (old('relation_with_contact_person'))
                value="{{ old('relation_with_contact_person')}}"
                @elseif($user->familyInfo)
                value="{{$user->familyInfo->relation_with_contact_person}}"
                @endif
                 
                placeholder="Relation with Contact Person" 
                />

                @if ($errors->has('relation_with_contact_person'))
                <span class="help-block">
                    <strong>{{ $errors->first('relation_with_contact_person') }}</strong>
                </span>
                @endif
            </div>


            

 

            </div>
            <div class="col-sm-3">

                <div class="form-group form-group-sm {{ $errors->has('yearly_income') ? ' has-error' : '' }}">
                <label for="yearly_income">Yearly Income</label>
                <input 
                type="text"  
                class="form-control" 
                id="yearly_income"
                name="yearly_income"
                
                @if (old('yearly_income'))
                value="{{ old('yearly_income')}}"
                @elseif($user->familyInfo)
                value="{{$user->familyInfo->yearly_income}}"
                @endif
                 
                placeholder="Yearly Income" 
                />

                @if ($errors->has('yearly_income'))
                <span class="help-block">
                    <strong>{{ $errors->first('yearly_income') }}</strong>
                </span>
                @endif
            </div>


                <div class="form-group form-group-sm {{ $errors->has('about_yourself') ? ' has-error' : '' }}">
                <label for="about_yourself">About Yourself</label>

                <textarea 
                class="  form-control " 
                name="about_yourself" 
                id="about_yourself" 
                cols="30" 
                rows="3"
                placeholder="I am {{ $user->name }}, I am currently live in Dhaka. I like to travelling various places..." 
                >@if (old('about_yourself')){{ old('about_yourself')}}@elseif($user->familyInfo){{$user->familyInfo->about_yourself}}
                @endif</textarea>
                 

                @if ($errors->has('about_yourself'))
                <span class="help-block">
                    <strong>{{ $errors->first('about_yourself') }}</strong>
                </span>
                @endif
            </div>


            <div class="form-group form-group-sm {{ $errors->has('extra_queries') ? ' has-error' : '' }}">
                <label for="extra_queries">Write Extra Queries (about your Partner)</label>

                <textarea 
                class=" form-control " 
                name="extra_queries" 
                id="extra_queries" 
                cols="30" 
                rows="2"
                placeholder="I want my life partner will have some virtues like honest, friendly, helpful, will from dhaka only..." 
                >@if (old('extra_queries')){{ old('extra_queries')}}@elseif($user->familyInfo){{$user->familyInfo->extra_queries}}@endif</textarea>
                 

                @if ($errors->has('extra_queries'))
                <span class="help-block">
                    <strong>{{ $errors->first('extra_queries') }}</strong>
                </span>
                @endif
            </div>

 

        <div class="checkbox">
        <label>
            <input 
            type="checkbox"
            name="family_checked"
            {{$user->isFamilyChecked() ? 'checked' : ''}} 
            /> Data Checked (Family)</label>
        </div>


        <div class="checkbox">
        <label>
            <input 
            type="checkbox"
            name="can_family_edit"
            {{$user->canFamilyEdit() ? 'checked' : ''}} 
            /> Can Edit (Family Info)</label>
        </div>
        
         

            </div>



        </div>
    </div>
</div>