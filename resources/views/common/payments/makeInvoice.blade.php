@extends('admin.layouts.adminMaster')

@push('css')
@endpush

@section('content')

  
<section class="content-header">
    <h1>
      Make Invoice
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> User</a></li>
      <li><a href="#"> <i class="fa fa-user"></i> {{ $user->name }}</a></li>
      <li class="active">Invoice</li>
    </ol>
  </section>



  <!-- Main content -->
  <section class="content"> 




<!-- Info boxes -->
    <div class="row">
    <div class="col-md-12">

    @include('alerts.alerts')

      <div class="box box-widget">
          <div class="box-header with-border">
            <h3 class="box-title"><i class="fa fa-th"></i> Invoice for {{ $user->email }}</h3>
          </div>
  </div>
                
            <div class="panel panel-default" >
              <div class="panel-body">
                <form class="form-horizontal" role="form" method="post" action="{{route('common3.saveUserInvoice' , [$user])}}">

                    {{csrf_field()}}
                    
                        <div class="row">
                            <div class="col-sm-6">
                    
                      <div class="form-group">
                        <label class="control-label col-sm-3" for="email">User:</label>
                        <div class=" col-sm-9">
                            <span class="w3-large">{{ $user->email }}</span>
                        </div>
                    </div>
                    <input type="hidden" name="email" value="{{ $user->email }}">
                    
                        <div class="form-group form-group-sm {{ $errors->has('package') ? ' has-error' : '' }}">
                                    <label class="control-label col-sm-3" for="package">Package:</label>
                    
                                    <div class="col-sm-9">
                           <select class="form-control form-group-sm" id="package" name="package">
                                    <option value="">Select Package </option>
                                    @if(old('package'))
                                    <option selected>{{old('package')}}</option>
                                    @endif
                                    {{-- packages --}}
                                    @foreach ($packages as $package)
                                      <option value="{{ $package->id }}">{{ $package->id }} ({{$package->package_title}}, Duration {{$package->package_duration}} Days, {{$package->package_currency}} {{$package->package_amount}})</option>
                                    @endforeach
                                  </select>
                                    @if ($errors->has('package'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('package') }}</strong>
                                    </span>
                                    @endif
                        </div>
                                    
                                    
                                </div>
                    
                    
                    
                        <div class="form-group form-group-sm {{ $errors->has('paid_amount') ? ' has-error' : '' }}">
                            <label class="control-label col-sm-3" for="paid_amount">Paid Amount:</label>
                    
                            <div class="col-sm-9">
                    
                                <input  
                            type="number" 
                            id="paid_amount" 
                            class="form-control" 
                            name="paid_amount"
                            value="{{old('paid_amount')}}"        
                            placeholder="Paid Amount"
                            step="1"
                            />
                     
                            </div>
                    
                            
                            @if($errors->has('paid_amount'))
                    
                            <span class="help-block">
                                <strong>{{ $errors->first('paid_amount') }}</strong>
                            </span>
                            
                            @endif
                        </div>
                    
                    
                        <div class="form-group form-group-sm {{ $errors->has('paid_currency') ? ' has-error' : '' }}">
                            <label class="control-label col-sm-3" for="paid_currency">Currency:</label>
                    
                            <div class="col-sm-9">
                    
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="radio" name="paid_currency" id="exampleRadios1" value="BDT" {{old('paid_currency') == 'BDT' ? 'checked' : ''}} /> BDT
                                        <span class="circle">
                                            <span class="check"></span>
                                        </span>
                                    </label>
                                </div>
                     
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="radio" name="paid_currency" id="exampleRadios2" value="USD" {{old('paid_currency') == 'USD' ? 'checked' : ''}} /> USD
                                        <span class="circle">
                                            <span class="check"></span>
                                        </span>
                                    </label>
                                </div>
                    
                     
                     
                            </div>
                    
                            
                            @if($errors->has('paid_currency'))
                    
                            <span class="help-block">
                                <strong>{{ $errors->first('paid_currency') }}</strong>
                            </span>
                            
                            @endif
                        </div>
                    
                    
                            </div>
                            <div class="col-sm-6">
                    
                    
                        <div class="form-group form-group-sm {{ $errors->has('payment_method') ? ' has-error' : '' }}">
                        <label class="control-label col-sm-3" for="payment_method">Payment Method:</label>
                    
                        <div class="col-sm-9">
                          <select class="form-control form-group-sm" id="payment_method" name="payment_method">
                        <option value="" selected disabled>Select Payment Method </option>
                        @if(old('payment_method'))
                        <option selected>{{old('payment_method')}}</option>
                        @endif
                    
                        <option value="bKash">bKash (by Admin)</option>
                        {{-- <option>Rocket</option> --}}
                        <option value="Bank">Bank (by Admin)</option>
                        {{-- <option>Money Gram</option> --}}
                        {{-- <option>Western Union</option> --}}
                        {{-- <option>Hand Cash</option> --}}
                        <option value="Online">Online (by Customer)</option>
                     
                      </select>
                        </div>
                        
                        
                        @if ($errors->has('payment_method'))
                        <span class="help-block">
                            <strong>{{ $errors->first('payment_method') }}</strong>
                        </span>
                        @endif
                    </div>
                    
                    
                    
                    <div class="form-group {{ $errors->has('payment_details') ? ' has-error' : '' }}">
                            <label class="control-label col-sm-3" for="payment_details">Payment Details:</label>
                    
                        <div class="col-sm-9">
                          <textarea 
                            class="form-control" 
                            name="payment_details" 
                            id="payment_details" 
                            cols="30" 
                            rows="3" 
                            placeholder="Payment Details with transaction information" 
                            />{{old('payment_details')}}</textarea>
                        </div>
                    
                            
                            @if($errors->has('payment_details'))
                    
                            <span class="help-block">
                                <strong>{{ $errors->first('payment_details') }}</strong>
                            </span>
                    
                            @endif
                        </div> 
                    
                    
                        <div class="form-group form-group-sm {{ $errors->has('admin_comment') ? ' has-error' : '' }}">
                            <label class="control-label col-sm-3" for="admin_comment">Admin Comment:</label>
                    
                            <div class="col-sm-9">
                    
                                <input  
                            type="text" 
                            id="admin_comment" 
                            class="form-control" 
                            name="admin_comment"
                            value="{{old('admin_comment')}}"        
                            placeholder="Comment Submitted by Admin"
                            step="1"
                            />
                     
                            </div>
                    
                            
                            @if($errors->has('admin_comment'))
                    
                            <span class="help-block">
                                <strong>{{ $errors->first('admin_comment') }}</strong>
                            </span>
                            
                            @endif
                    
                    
                        </div>
                    
                        <p>(New Package Duration (days) will be added with previous duration)</p>
                    
                    
                    
                         <div class="col-sm-offset-3 col-sm-9">
                              <button type="submit" class="btn btn-primary pull-right">Save & Validate</button>
                    
                         </div>	
                    
                    
                            </div>
                        </div>
                    
                      
                    
                      
                    
                    </form>
                    
              </div>
            </div>

          
            @if ($payments->count() > 0)
                
            @foreach ($payments as $payment)
            <div class="panel panel-default" >
              <div class="panel-body">
                  <div class="w3-large">
                      <table class="table">
                          <tr>
                              <th>Payment Date</th>
                              <th> : </th>
                              <th>{{ now()->parse($payment->created_at)->format('d-M-Y h:m A') }}</th>
                          </tr>
                          <tr>
                              <th>Last Update</th>
                              <th> : </th>
                              <th>{{ now()->parse($payment->updated_at)->format('d-M-Y h:m A') }}</th>
                          </tr>
                          <tr>
                              <th>Payment Status</th>
                              <th> : </th>
                              <th>{{ Str::ucfirst($payment->status) }}</th>
                          </tr>
                          <tr>
                              <th>Package</th>
                              <th> : </th>
                              <th>{{$payment->package_title}}</th>
                          </tr>
                          <tr>
                              <th>Package Description</th>
                              <th> : </th>
                              <th>{{$payment->package_description}}</th>
                          </tr>
                          <tr>
                              <th>Duration</th>
                              <th> : </th>
                              <th> {{$payment->package_duration}} Days</th>
                          </tr>
                          <tr>
                              <th>Package Price</th>
                              <th> : </th>
                              <th> {{$payment->package_currency}}  {{$payment->package_amount}} </th>
                          </tr>
                          <tr>
                              <th>Paid Amount</th>
                              <th> : </th>
                              <th> {{$payment->paid_currency}}  {{$payment->paid_amount}} </th>
                          </tr>
                          <tr>
                              <th>Method</th>
                              <th> : </th>
                              <th> {{$payment->payment_method}} </th>
                          </tr>
                          <tr>
                              <th>Details</th>
                              <th> : </th>
                              <th> {{$payment->payment_details}} </th>
                          </tr>
                          <tr>
                              <th>Note</th>
                              <th> : </th>
                              <th> {{$payment->admin_comment}} </th>
                          </tr>
                      </table>
                  </div>
              </div>
          </div>
            @endforeach
            @endif


      
    </div>        
    </div>
    <!-- /.row -->

    

  </section>

@endsection


@push('js')
<script>
  $(document).ready(function () {
  $('.select2').select2({
    minimumInputLength: 1,
    ajax: {
      data: function (params) {
        return {
          q: params.term, // search term
          page: params.page
        };
      },
      processResults: function (data, params) {
        params.page = params.page || 1;
        // alert(data[0].s);
        var data = $.map(data, function (obj) {
          // obj.id = obj.id || obj.email;
          obj.id =  obj.email;
          return obj;
        });
        var data = $.map(data, function (obj) {
          obj.text = obj.text || obj.email;
          return obj;
        });
        return {
          results: data,
          pagination: {
            more: (params.page * 30) < data.total_count
          }
        };
      }
    },
  });
});
</script>

@endpush
