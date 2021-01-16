<form method="post" class="form-user-setting" action="{{route('user.changePassword')}}">
    {{csrf_field()}}

    <div class="form-group {{ $errors->has('current_password') ? ' has-danger' : '' }}">
        <label for="current_password">Current Password *</label>
        <input  
        type="password" 
        id="current_password" 
        class="form-control w3-border w3-border-light-gray" 
        name="current_password"        
        placeholder="Current password..." 
        style="border-radius: 4px;padding-left: 8px;" 
        />
        @if($errors->has('current_password'))

        <span class="help-block">
            <strong>{{ $errors->first('current_password') }}</strong>
        </span>

        @endif
    </div>


    <div class="form-group {{ $errors->has('new_password') ? ' has-danger' : '' }}">
        <label for="new_password">New Password *</label>
        <input  
        type="password" 
        id="new_password" 
        class="form-control w3-border w3-border-light-gray" 
        name="new_password"      
        placeholder="New password..." 
        style="border-radius: 4px;padding-left: 8px;" 
        />
        @if($errors->has('new_password'))

        <span class="help-block">
            <strong>{{ $errors->first('new_password') }}</strong>
        </span>

        @endif
    </div>


<div class="form-group {{ $errors->has('new_password_confirmation') ? ' has-danger' : '' }}">
        <label for="new_password_confirmation">Confirm New Password *</label>
        <input  
        type="password" 
        id="new_password_confirmation" 
        class="form-control w3-border w3-border-light-gray" 
        name="new_password_confirmation"      
        placeholder="Confirm new password..." 
        style="border-radius: 4px;padding-left: 8px;" 
        />
        @if($errors->has('new_password_confirmation'))
        <span class="help-block">
            <strong>{{ $errors->first('new_password_confirmation') }}</strong>
        </span>
        @endif
    </div>



    <br>

    <div class="">
        <button type="submit" class="btn btn-primary">Update</button>
    </div>

</form>