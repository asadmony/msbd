<form method="post" class="form-user-setting" action="{{route('user.settingWorkInfoPost')}}">
    {{csrf_field()}}

    <div class="row">
    <div class="col-sm-6">


        <div class="form-group {{ $errors->has('companyName') ? ' has-danger' : '' }}">
    <label for="companyName">Company Name *</label>
    <input  
    type="text" 
    id="companyName" 
    class="form-control w3-border w3-border-light-gray" 
    name="companyName"        
    placeholder="Organization Name" 
    style="border-radius: 4px;padding-left: 8px;" 
    />
    @if($errors->has('companyName'))

    <span class="help-block">
        <strong>{{ $errors->first('companyName') }}</strong>
    </span>
    
    @endif
</div>



<div class="form-group {{ $errors->has('companyAddress') ? ' has-danger' : '' }}">
    <label for="companyAddress">Organization/Institution Full Address *</label>
    <input  
    type="text" 
    id="companyAddress" 
    class="form-control w3-border w3-border-light-gray" 
    name="companyAddress"       
    placeholder="Organization Address" 
    style="border-radius: 4px;padding-left: 8px;" 
    />
    @if($errors->has('companyAddress'))

    <span class="help-block">
        <strong>{{ $errors->first('companyAddress') }}</strong>
    </span>
    
    @endif
</div>


<div class="form-group {{ $errors->has('jobTitle') ? ' has-danger' : '' }}">
    <label for="jobTitle">Job Title *</label>
    <input  
    type="text" 
    id="jobTitle" 
    class="form-control w3-border w3-border-light-gray" 
    name="jobTitle"       
    placeholder="Job Title" 
    style="border-radius: 4px;padding-left: 8px;" 
    />
    @if($errors->has('jobTitle'))

    <span class="help-block">
        <strong>{{ $errors->first('jobTitle') }}</strong>
    </span>
    
    @endif
</div>









        
    </div>
    <div class="col-sm-6">


<div class="form-group {{ $errors->has('joiningDate') ? ' has-danger' : '' }}">
    <label for="joiningDate">Joining Date *</label>
    <input  
    type="date" 
    id="joiningDate" 
    class="form-control w3-border w3-border-light-gray" 
    name="joiningDate"       
    placeholder="Joining Date" 
    style="border-radius: 4px;padding-left: 8px;" 
    />
    @if($errors->has('joiningDate'))

    <span class="help-block">
        <strong>{{ $errors->first('joiningDate') }}</strong>
    </span>
    
    @endif
</div>



<div class="form-group {{ $errors->has('leaveDate') ? ' has-danger' : '' }}">
    <label for="leaveDate">Leave Date (Keep it Blank if you continue your work till now) *</label>
    <input  
    type="date" 
    id="leaveDate" 
    class="form-control w3-border w3-border-light-gray" 
    name="leaveDate"       
    placeholder="Leave Date" 
    style="border-radius: 4px;padding-left: 8px;" 
    />
    @if($errors->has('leaveDate'))

    <span class="help-block">
        <strong>{{ $errors->first('leaveDate') }}</strong>
    </span>
    
    @endif
</div>



    <br>

    <div class="">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>


        

    </div>
</div>




    
</form>
