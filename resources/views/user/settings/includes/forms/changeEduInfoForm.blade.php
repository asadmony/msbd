
<div class="output-edu-work">
    @includeIf('user.settings.ajax.view.outputEduRecord')
  </div>
  
<form method="post" class="form-user-setting" action="{{route('user.settingEduInfoPost')}}">
    {{csrf_field()}}

    <div class="row w3-border w3-border-purple w3-round pt-2">
    <div class="col-sm-6">


        <div class="form-group {{ $errors->has('orgName') ? ' has-danger' : '' }}">
    <label for="orgName">Organization/Institution Name *</label>
    <input  
    type="text" 
    id="orgName" 
    class="form-control w3-border w3-border-light-gray" 
    name="orgName"
    placeholder="Organization Name" 
    style="border-radius: 4px;padding-left: 8px;" 
    />
    @if($errors->has('orgName'))

    <span class="help-block">
        <strong>{{ $errors->first('orgName') }}</strong>
    </span>
    
    @endif
</div>



<div class="form-group {{ $errors->has('orgAddress') ? ' has-danger' : '' }}">
    <label for="orgAddress">Organization/Institution Full Address *</label>
    <input  
    type="text" 
    id="orgAddress" 
    class="form-control w3-border w3-border-light-gray" 
    name="orgAddress"       
    placeholder="Organization Address" 
    style="border-radius: 4px;padding-left: 8px;" 
    />
    @if($errors->has('orgAddress'))

    <span class="help-block">
        <strong>{{ $errors->first('orgAddress') }}</strong>
    </span>
    
    @endif
</div>






<div class="form-group {{ $errors->has('orgType') ? ' has-danger' : '' }}">
        <label for="orgType">Org / Institution Type *</label>
        <select class="form-control simple-select2 w-100" name="orgType" style="width: 100%;">
            <option></option>
            
            <option >High School</option>
            <option >College</option>
            <option >University</option>
            <option >Madrasha</option>
            
            {{-- ID: 28     How Religious Are You? --}}
            
        </select>
    </div>


<div class="form-group {{ $errors->has('passedDegree') ? ' has-danger' : '' }}">
    <label for="passedDegree">Passed Degree Ex: MSc in Physics *</label>
    <input  
    type="text" 
    id="passedDegree" 
    class="form-control w3-border w3-border-light-gray" 
    name="passedDegree"
      
    placeholder="Passed Degree" 
    style="border-radius: 4px;padding-left: 8px;" 
    />
    @if($errors->has('passedDegree'))

    <span class="help-block">
        <strong>{{ $errors->first('passedDegree') }}</strong>
    </span>
    
    @endif
</div>


<div class="form-group {{ $errors->has('passedDept') ? ' has-danger' : '' }}">
    <label for="passedDept">Department/Field of Study Ex: Science *</label>
    <input  
    type="text" 
    id="passedDept" 
    class="form-control w3-border w3-border-light-gray" 
    name="passedDept"
       
    placeholder="Field of Study" 
    style="border-radius: 4px;padding-left: 8px;" 
    />
    @if($errors->has('passedDept'))

    <span class="help-block">
        <strong>{{ $errors->first('passedDept') }}</strong>
    </span>
    
    @endif
</div>





        
    </div>
    <div class="col-sm-6">





<div class="form-group {{ $errors->has('passedGrade') ? ' has-danger' : '' }}">
    <label for="passedGrade">CGPA or Grade (Others will not see your result) Ex: (A) 3.8 out of 5 </label>
    <input  
    type="text" 
    id="passedGrade" 
    class="form-control w3-border w3-border-light-gray" 
    name="passedGrade"       
    placeholder="CGPA or Grade" 
    style="border-radius: 4px;padding-left: 8px;" 
    />
    @if($errors->has('passedGrade'))

    <span class="help-block">
        <strong>{{ $errors->first('passedGrade') }}</strong>
    </span>
    
    @endif
</div>

<div class="form-group {{ $errors->has('yearFrom') ? ' has-danger' : '' }}">
        <label for="yearFrom">Year From *</label>
        <select class="form-control simple-select2 w-100" name="yearFrom" style="width: 100%;">
            
            
            <option value="">Year From</option>
               

               @for ($i = date('Y'); $i >= date('Y') - 60; $i--)
               <option>{{ $i }}</option>
               @endfor
            
            {{-- ID: 28     How Religious Are You? --}}
            
        </select>
    </div>

<div class="form-group {{ $errors->has('yearTo') ? ' has-danger' : '' }}">
        <label for="yearTo">Year To *</label>
        <select class="form-control simple-select2 w-100" name="yearTo" style="width: 100%;">
           <option value="">Year To</option>
               

               @for ($i = date('Y'); $i >= date('Y') - 60; $i--)
               <option>{{ $i }}</option>
               @endfor
            
            {{-- ID: 28     How Religious Are You? --}}
            
        </select>
    </div>

<div class="form-group {{ $errors->has('passedYear') ? ' has-danger' : '' }}">
        <label for="passedYear">Year of Passed *</label>
        <select class="form-control simple-select2 w-100" name="passedYear" style="width: 100%;">
            <option value="">Passed Year</option>
               

               @for ($i = date('Y'); $i >= date('Y') - 60; $i--)
               <option>{{ $i }}</option>
               @endfor
            
            {{-- ID: 28     How Religious Are You? --}}
            
        </select>
    </div>



    <br>

    <div class="">
        <button class="btn btn-default border mr-2" type="reset">Reset</button>
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
        

    </div>
</div>



    
</form>
