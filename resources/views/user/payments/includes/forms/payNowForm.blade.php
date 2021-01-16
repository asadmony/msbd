@include('alerts.alerts')

<form method="post" class="form-user-setting---" action="{{route('user.payNowPost')}}">
    {{csrf_field()}}


    <div class="form-group form-group-sm {{ $errors->has('package') ? ' has-danger' : '' }}">
                <label for="package">Package *</label>
                
                <select class="form-control form-group-sm select2" id="package" name="package">
                <option value="">Select Package </option>
                @if(old('package'))
                <option selected>{{old('package')}}</option>
                @endif
                {{-- packages --}}
                @foreach ($mPackage1 as $package)
                  <option value="{{ $package->id }}">{{ $package->id }} ({{$package->package_title}}, Duration {{$package->package_duration}} Days, {{$package->package_currency}} {{$package->package_amount}})</option>
                @endforeach

                @foreach ($mPackage2 as $package)
                  <option value="{{ $package->id }}">{{ $package->id }} ({{$package->package_title}}, Duration {{$package->package_duration}} Days, {{$package->package_currency}} {{$package->package_amount}})</option>
                @endforeach
              </select>
                @if ($errors->has('package'))
                <span class="help-block">
                    <strong>{{ $errors->first('package') }}</strong>
                </span>
                @endif
            </div>

    <p>Payment Process</p> 
     
            <div class="form-check">
        <label class="form-check-label">
            <input class="form-check-input radio-online" type="radio" name="payment_process" id="payment_process1" value="online" checked> Online Payment
            <span class="circle">
                <span class="check"></span>
            </span>
        </label>
    </div>
 
            <div class="form-check">
        <label class="form-check-label">
            <input class="form-check-input radio-manual" type="radio" name="payment_process" id="payment_process2" value="manual" >Manual Payment
            <span class="circle">
                <span class="check"></span>
            </span>
        </label>
    </div>
    
    <br>     

    <div style="display: none;" class="manual-show">

        <div class="box box-widget w3-border w3-border-purple">
            <div class="box-body">
                <p>Pay to any account and submit the form below</p>

  bKash: <b>+8801720 504 504</b> (Personal)  
  
<hr>
Dutch Bangla Bank Ltd <br>
Account Name: <b>Marriage Solution Bd</b>. <br>

Account Number: <b> 258.110.3970 </b> <br>

Mohammadpur branch, Dhaka-1207


            </div>
        </div>

        <div class="form-group {{ $errors->has('paid_amount') ? ' has-danger' : '' }}">
        <label for="paid_amount">Paid Amount *</label>
        <input  
        type="number" 
        id="paid_amount" 
        class="form-control w3-border w3-border-light-gray" 
        name="paid_amount"
        value="{{old('paid_amount')}}"        
        placeholder="Paid Amount"
        step="1"
        min="1"
        max="10000" 
        style="border-radius: 4px;padding-left: 8px;" 
        />
        @if($errors->has('paid_amount'))

        <span class="help-block">
            <strong>{{ $errors->first('paid_amount') }}</strong>
        </span>
        
        @endif
    </div>

   <p>Currency *</p> 
     
            <div class="form-check">
        <label class="form-check-label">
            <input class="form-check-input" type="radio" name="paid_currency" id="exampleRadios1" value="BDT" checked> BDT
            <span class="circle">
                <span class="check"></span>
            </span>
        </label>
    </div>
 
            <div class="form-check">
        <label class="form-check-label">
            <input class="form-check-input" type="radio" name="paid_currency" id="exampleRadios2" value="USD" > USD
            <span class="circle">
                <span class="check"></span>
            </span>
        </label>
    </div>

<hr>

 <div class="form-group form-group-sm {{ $errors->has('payment_method') ? ' has-danger' : '' }}">
    <label for="payment_method">Payment Method *</label>
    
    <select class="form-control form-group-sm select2" id="payment_method" name="payment_method">
    <option value="">Select Payment Method </option>
    @if(old('payment_method'))
    <option selected>{{old('payment_method')}}</option>
    @endif

    <option>bKash</option>
    {{-- <option>Rocket</option> --}}
    <option>Bank</option>
    {{-- <option>Money Gram</option> --}}
    {{-- <option>Western Union</option> --}}
    {{-- <option>Hand Cash</option> --}}
 
  </select>
    @if ($errors->has('payment_method'))
    <span class="help-block">
        <strong>{{ $errors->first('payment_method') }}</strong>
    </span>
    @endif
</div>

 
 <div class="form-group {{ $errors->has('payment_details') ? ' has-danger' : '' }}">
        <label for="payment_details">Payment Details *</label>
        <textarea 
        class="form-control w3-border w3-border-light-gray" 
        name="payment_details" 
        id="payment_details" 
        cols="30" 
        rows="3" 
        placeholder="Payment Details with transaction information" 
        style="border-radius: 4px;padding-left: 8px;">{{old('payment_details')}}</textarea>
        @if($errors->has('payment_details'))

        <span class="help-block">
            <strong>{{ $errors->first('payment_details') }}</strong>
        </span>

        @endif
    </div> 
        
    <br>

    </div>

    



    <p>(New Package Duration (days) will be added with previous duration)</p>
    <br>


    <div class="">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>  
    


</form>
 			