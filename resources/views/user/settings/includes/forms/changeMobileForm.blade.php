<form method="post" class="form-user-setting" action="{{route('user.changeMobile')}}">
    {{csrf_field()}}

    <div class="form-group {{ $errors->has('new_mobile') ? ' has-danger' : '' }}">
        <label for="new_mobile">New Mobile *</label>
        <input  
        type="text" 
        id="new_mobile" 
        class="form-control w3-border w3-border-light-gray" 
        name="new_mobile"
        value="{{ old('new_mobile') ?: $me->mobile}}"        
        placeholder="New Mobile Number..." 
        style="border-radius: 4px;padding-left: 8px;" 
        />
        @if($errors->has('new_mobile'))

        <span class="help-block">
            <strong>{{ $errors->first('new_mobile') }}</strong>
        </span>

        @endif
    </div>


    <div class="form-group {{ $errors->has('new_mobile_confirmation') ? ' has-danger' : '' }}">
        <label for="new_mobile_confirmation">Confirm New Username *</label>
        <input  
        type="text" 
        id="new_mobile_confirmation" 
        class="form-control w3-border w3-border-light-gray" 
        name="new_mobile_confirmation"
        value="{{old('new_mobile_confirmation')}}"        
        placeholder="Confirm new username..." 
        style="border-radius: 4px;padding-left: 8px;" 
        />
        @if($errors->has('new_mobile_confirmation'))

        <span class="help-block">
            <strong>{{ $errors->first('new_mobile_confirmation') }}</strong>
        </span>

        @endif
    </div>

    <div class="form-group {{ $errors->has('password') ? ' has-danger' : '' }}">
        <label for="password">Current Password *</label>
        <input  
        type="password" 
        id="password" 
        class="form-control w3-border w3-border-light-gray" 
        name="password"    
        placeholder="Your current password" 
        style="border-radius: 4px;padding-left: 8px;" 
        />
        @if($errors->has('password'))
        <span class="help-block">
            <strong>{{ $errors->first('password') }}</strong>
        </span>
        @endif
    </div>



    <br>

    <div class="">
        <button type="submit" class="btn btn-primary">Update</button>
    </div>

</form>