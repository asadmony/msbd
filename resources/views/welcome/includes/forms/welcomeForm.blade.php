
      
     {{-- <div class="site-promo custom-shadow">
      <div class="row">
      	<div class="col-md-12 ">
      			<h3 class="site-promo-heading text-center">Register for free and find your perfect marriage partner today.</h3>

      			

      		</div>
      	</div>
     </div> --}}



<div class="promo">
<div class="promo-form">
<form action="{{route('signup')}}" method="post">
  {{csrf_field()}}
  <div class="row">
    <div class="col-sm-3">
      <label>I'm a</label>
      <select class="w3-select  w3-border w3-round w3-large w3-padding" name="gender" required>
        <option value=""> Select your Gender</option>
        {{-- id:1, title:Gender --}}
        {{-- @foreach ($userSettingFields[0]->values as $value)
          <option>{{ $value->title }}</option>
        @endforeach --}}
      </select>
    </div>
    <div class="col-sm-3">
      <label>I live in</label>
      <select class="w3-select  w3-border w3-round w3-large w3-padding" name="location" required>
        <option value=""> Select your country</option>
        {{-- id:3, title:location --}}
        {{-- @foreach ($userSettingFields[2]->values as $value)
          <option>{{ $value->title }}</option>
        @endforeach --}}
      </select>
    </div>
    <div class="col-sm-4">
      <label>My email is</label>
      <input name="email" class="w3-input w3-border w3-round w3-large" placeholder="My email is" type="email" required>
    </div>
    <div class="col-sm-2">
      <button class="btn btn-info btn-block" style="margin-top: 30px;">Register</button>
    </div>
  </div>
</form>
</div>	
  </div>

