<div class="panel panel-default">
          <div class="panel-body">
            <form class="form-horizontal" action="{{ route('admin.addNewBranchPost') }}" method="post">
          
          <div class="form-group {{ $errors->has('branch_name') ? ' has-error' : '' }}">
            <label class="control-label col-sm-3" for="branch_name">Branch Name:</label>
            <div class="col-sm-9">
              <input type="text" name="branch_name"  required class="form-control" value="{{ old('branch_name') }}" id="branch_name" placeholder="Branch Name">

              @if ($errors->has('branch_name'))
                <span class="help-block">
                  <strong>{{ $errors->first('branch_name') }}</strong>
                </span>
                @endif

            </div>
          </div>

          
          <div class="form-group {{ $errors->has('location') ? ' has-error' : '' }}">
            <label class="control-label col-sm-3" for="location">Location:</label>
            <div class="col-sm-9">
              <input type="text" name="location"  class="form-control" value="{{ old('location') }}" id="location-input" placeholder="Location">

              @if ($errors->has('location'))
                <span class="help-block">
                  <strong>{{ $errors->first('location') }}</strong>
                </span>
                @endif

            </div>
          </div>

          
          <div class="form-group {{ $errors->has('lat') ? ' has-error' : '' }}">
            <label class="control-label col-sm-3" for="lat">Latitude:</label>
            <div class="col-sm-9">
              <input type="text" name="lat"  required class="form-control" value="{{ old('lat') }}" id="lat" placeholder="Latitude">

              @if ($errors->has('lat'))
                <span class="help-block">
                  <strong>{{ $errors->first('lat') }}</strong>
                </span>
                @endif

            </div>
          </div>

          
          <div class="form-group {{ $errors->has('lng') ? ' has-error' : '' }}">
            <label class="control-label col-sm-3" for="lng">Longitude:</label>
            <div class="col-sm-9">
              <input type="text" name="lng"  required class="form-control" value="{{ old('lng') }}" id="lng" placeholder="Longitude">

              @if ($errors->has('lng'))
                <span class="help-block">
                  <strong>{{ $errors->first('lng') }}</strong>
                </span>
                @endif

            </div>
          </div>

          <div class="form-group {{ $errors->has('map') ? ' has-error' : '' }}">
            <label class="control-label col-sm-3" for="map">Google Map Code:</label>
            <div class="col-sm-9">
              
              <textarea name="map" id="map" cols="30" rows="4" placeholder="Google Map Full Code" class="form-control">{{ old('map') }}</textarea>

              @if ($errors->has('map'))
                <span class="help-block">
                  <strong>{{ $errors->first('map') }}</strong>
                </span>
                @endif

            </div>
          </div>

          <input type="hidden" id="location-selected-text" name="location_inputed" value="{{ old('location') }}">

          <div class="form-group {{ $errors->has('address') ? ' has-error' : '' }}">
            <label class="control-label col-sm-3" for="address">Address:</label>
            <div class="col-sm-9">
              <input type="text" name="address"  required class="form-control" value="{{ old('address') }}" id="address" placeholder="Address">

              @if ($errors->has('address'))
                <span class="help-block">
                  <strong>{{ $errors->first('address') }}</strong>
                </span>
                @endif

            </div>
          </div>

          
          <div class="form-group {{ $errors->has('state') ? ' has-error' : '' }}">
            <label class="control-label col-sm-3" for="state">State / Division:</label>
            <div class="col-sm-9">
              <input type="text" name="state"  required class="form-control" value="{{ old('state') }}" id="state" placeholder="State / Division">

              @if ($errors->has('state'))
                <span class="help-block">
                  <strong>{{ $errors->first('state') }}</strong>
                </span>
                @endif

            </div>
          </div>

          
          <div class="form-group {{ $errors->has('city') ? ' has-error' : '' }}">
            <label class="control-label col-sm-3" for="city">City:</label>
            <div class="col-sm-9">
              <input type="text" name="city"  required class="form-control" value="{{ old('city') }}" id="city" placeholder="City">

              @if ($errors->has('city'))
                <span class="help-block">
                  <strong>{{ $errors->first('city') }}</strong>
                </span>
                @endif

            </div>
          </div>

          
          <div class="form-group {{ $errors->has('post_code') ? ' has-error' : '' }}">
            <label class="control-label col-sm-3" for="post_code">Post Code:</label>
            <div class="col-sm-9">
              <input type="text" name="post_code"  required class="form-control" value="{{ old('post_code') }}" id="post_code" placeholder="Post Code">

              @if ($errors->has('post_code'))
                <span class="help-block">
                  <strong>{{ $errors->first('post_code') }}</strong>
                </span>
                @endif

            </div>
          </div>

          
          <div class="form-group {{ $errors->has('country') ? ' has-error' : '' }}">
            <label class="control-label col-sm-3" for="country">Country:</label>
            <div class="col-sm-9">
              <input type="text" name="country"  required class="form-control" value="{{ old('country') }}" id="country" placeholder="Country" list="countries">

              <datalist id="countries">
                @foreach($countries as $country)
                <option value="{{ $country->title }}">
                @endforeach
              </datalist>

              @if ($errors->has('country'))
                <span class="help-block">
                  <strong>{{ $errors->first('country') }}</strong>
                </span>
                @endif

            </div>
          </div>

          
          <div class="form-group {{ $errors->has('mobile') ? ' has-error' : '' }}">
            <label class="control-label col-sm-3" for="mobile">Contact Mobile:</label>
            <div class="col-sm-9">
              <input type="text" name="mobile"  required class="form-control" value="{{ old('mobile') }}" id="mobile" placeholder="Contact Mobile">

              @if ($errors->has('mobile'))
                <span class="help-block">
                  <strong>{{ $errors->first('mobile') }}</strong>
                </span>
                @endif

            </div>
          </div>

          <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
            <label class="control-label col-sm-3" for="email">Contact Email:</label>
            <div class="col-sm-9">
              <input type="text" name="email"  required class="form-control" value="{{ old('email') }}" id="email" placeholder="Contact Email">

              @if ($errors->has('email'))
                <span class="help-block">
                  <strong>{{ $errors->first('email') }}</strong>
                </span>
                @endif

            </div>
          </div>


          
          {{ csrf_field() }}

          <div class="form-group">
 
            <div class="col-sm-9 col-sm-offset-3">
              <button class="btn btn-primary btn-sm" type="submit">Submit</button>
            </div>
          </div>





        </form>
          </div>
        </div>