<form method="post" class="form-user-setting" action="{{route('user.changeEmail')}}">
    {{csrf_field()}}

    <div class="form-group {{ $errors->has('new_email') ? ' has-danger' : '' }}">
        <label for="new_email">New Email *</label>
        <input  
        type="email" 
        id="new_email" 
        class="form-control w3-border w3-border-light-gray" 
        name="new_email"
        value="{{ $me->email}}"        
        placeholder="New email..." 
        style="border-radius: 4px;padding-left: 8px;" 
        />
        @if($errors->has('new_email'))

        <span class="help-block">
            <strong>{{ $errors->first('new_email') }}</strong>
        </span>

        @endif
    </div>


    <div class="form-group {{ $errors->has('new_email_confirmation') ? ' has-danger' : '' }}">
        <label for="new_email_confirmation">Confirm New Email *</label>
        <input  
        type="email" 
        id="new_email_confirmation" 
        class="form-control w3-border w3-border-light-gray" 
        name="new_email_confirmation"
        value="{{old('new_email_confirmation')}}"        
        placeholder="Confirm new email..." 
        style="border-radius: 4px;padding-left: 8px;" 
        />
        @if($errors->has('new_email_confirmation'))

        <span class="help-block">
            <strong>{{ $errors->first('new_email_confirmation') }}</strong>
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