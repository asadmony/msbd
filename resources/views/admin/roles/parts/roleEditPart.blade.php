 
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>
              {{ ucfirst($type) }}
              <small>Edit</small>
            </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">{{ ucfirst($type) }}</a></li>
              <li class="breadcrumb-item active">Edit</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>



    <!-- Main content -->
    <section class="content"> 




<!-- Info cardes -->
      <div class="row">
      <div class="col-md-6">

       @include('alerts.alerts')

      	<div class="card card-widget">
            <div class="card-header with-border">
              <h3 class="card-title"><i class="fa fa-edit"></i> Edit {{ ucfirst($type) }}</h3>
 
            </div>

            <div class="card-body">

 <form  class="" method="post" action="{{route('admin.roleEditPost',['type'=>$type, 'role'=> $admin])}}">
            {{csrf_field()}}

              <div class="form-group has-feedback{{ $errors->has('user') ? ' has-error' : '' }}">
    <label for="user"> {{ __('User') }}:</label>

    <select id="user"
      name="user"
      class="form-control select2-container step2-select select2"
      data-placeholder="Mobile or Email"
      data-ajax-url="{{route('admin.selectNewRole')}}"
      data-ajax-cache="true"
      data-ajax-dataType="json"
      data-ajax-delay="200"
      style="width: 100%;">

      @if($admin->user)
          <option value="{{ $admin->user_id }}">{{$admin->user->mobileOrEmail().' ('.$admin->user->name.')'}}</option>
      @endif
        </select>
      @if( $errors->has('user') )
        <span class="help-block">{{ $errors->first('user') }}</span>
      @endif
  </div>

@if($type == 'depo')

  @if(!$admin->distributors->count())

  <div class="form-group has-feedback{{ $errors->has('division') ? ' has-error' : '' }}">
    <label for="division">{{ __('Division') }}:</label>
     <select class="form-control" name="division" id="division">

      <option value="{{ $admin->division_id }}">{{ $admin->division->name }}</option>
       @foreach($divisions as $division)
       <option value="{{ $division->id }}">{{ $division->name }}</option>
       @endforeach
     </select>
  </div>

  @endif


@elseif($type == 'distributor')

  @if(!$admin->dealers->count())

<div class="form-group has-feedback{{ $errors->has('depo') ? ' has-error' : '' }}">
    <label for="depo">{{ __('Depo') }}:</label>
     
     <select class="form-control" name="depo" id="depo">
      <option value="{{ $admin->depo_id }}">{{ $admin->depo->title }} ({{ $admin->depo->user->name }}, {{ $admin->depo->division->name }})</option>
       @foreach($depos as $depo)
       <option value="{{ $depo->id }}">{{ $depo->title }} ({{ $depo->user->name }}, {{ $depo->division->name }})  </option>
       @endforeach
     </select>
  </div>

<div class="form-group has-feedback{{ $errors->has('district') ? ' has-error' : '' }}">
    <label for="district">{{ __('District') }}:</label>
     
     <select class="form-control select2" name="district" id="district">
      <option value="{{ $admin->district_id }}">{{ $admin->district->name }} ({{ $admin->district->division->name }})</option>
       @foreach($districts as $district)
       <option value="{{ $district->id }}">{{ $district->name }} ({{ $district->division->name }})</option>
       @endforeach
     </select>
  </div>

  @endif

 

  @elseif($type == 'dealer')

  @if(!$admin->agents->count())

<div class="form-group has-feedback{{ $errors->has('distributor') ? ' has-error' : '' }}">
    <label for="distributor">Distributor:</label>
     
     <select class="form-control" name="distributor" id="distributor">
      <option value="{{ $admin->distributor_id }}">{{ $admin->distributor->title }} ({{ $admin->distributor->user ? $admin->distributor->user->name : '' }}({{ $admin->distributor->user ? $admin->distributor->user->mobileOrEmail() : '' }}) >> {{ $admin->distributor->division->name }} >> {{ $admin->distributor->district->name }}) </option>
       @foreach($distributors as $distributor)
       <option value="{{ $distributor->id }}">{{ $distributor->title }} ({{ $distributor->user ? $distributor->user->name : '' }}({{$distributor->user ? $distributor->user->mobileOrEmail() : ''}}) >> {{ $distributor->division->name }} >> {{ $distributor->district->name }})  </option>
       @endforeach
     </select>
  </div>

<div class="form-group has-feedback{{ $errors->has('upazila') ? ' has-error' : '' }}">
    <label for="upazila">Upazila:</label>
     
     <select style="width: 100%;" class="form-control select2" name="upazila" id="upazila">
      <option value="{{ $admin->upazila_id }}">{{ $admin->upazila->name }} ({{ $admin->upazila->division->name }} >> {{ $admin->upazila->district->name }})</option>
       @foreach($upazilas as $upazila)
       <option value="{{ $upazila->id }}">{{ $upazila->name }} ({{ $upazila->division->name }} >> {{ $upazila->district->name }})</option>
       @endforeach
     </select>
  </div>

  @endif


  @elseif($type == 'agent')


<div class=" form-group has-feedback{{ $errors->has('dealer') ? ' has-error' : '' }}">
    <label for="dealer">Dealer:</label>
     
     <select style="width:100%;" class="form-control select2" name="dealer" id="dealer">
      <option value="{{ $admin->dealer_id }}">{{ $admin->dealer->title }} ({{$admin->dealer->user ? $admin->dealer->user->name : '' }}({{ $admin->dealer->user ? $admin->dealer->user->mobileOrEmail() : '' }}) >> {{ $admin->dealer->division->name }} >> {{ $admin->dealer->district->name }} >> {{ $admin->dealer->upazila->name }})</option>
       @foreach($dealers as $dealer)
       <option value="{{ $dealer->id }}">{{ $dealer->title }} ({{ $dealer->user ?  $dealer->user->name : '' }}({{$dealer->user ? $dealer->user->mobileOrEmail() : ''}}) >> {{ $dealer->division->name }} >> {{ $dealer->district->name }} >> {{ $dealer->upazila->name }})  </option>
       @endforeach
     </select>
  </div>


{{-- <div class="form-group has-feedback{{ $errors->has('union ') ? ' has-error' : '' }}">
    <label for="union">Union/Area:</label>
     
      <input type="text" name="union" value="{{ old('union') }}" class="form-control" placeholder="Union/Area Name">

      @if( $errors->has('union') )
        <span class="help-block">{{ $errors->first('union') }}</span>
      @endif

  </div> --}}
 

@endif


<div class="form-group has-feedback{{ $errors->has('title ') ? ' has-error' : '' }}">
    <label for="title">{{ ucfirst($type) }} Name:</label>
     
      <input type="text" name="title" value="{{ old('title') ?: $admin->name }}" class="form-control" placeholder="{{ ucfirst($type)  }} Name">

      @if( $errors->has('title') )
        <span class="help-block">{{ $errors->first('title') }}</span>
      @endif

  </div>

  <div class="form-group has-feedback{{ $errors->has('address ') ? ' has-error' : '' }}">
    <label for="address"> {{ __('Address') }}</label>
     
      <input type="text" name="address" value="{{ old('address')  ?: $admin->address}}" class="form-control" placeholder="{{ __('Address') }}">

      @if( $errors->has('address') )
        <span class="help-block">{{ $errors->first('address') }}</span>
      @endif
  </div>


 <div class="form-group has-feedback{{ $errors->has('contact_numbers ') ? ' has-error' : '' }}">
    <label for="contact_numbers"> {{ __('Contact Numbers') }}</label>
     
      <input type="text" name="contact_numbers" value="{{ old('contact_numbers') ?: $admin->contact_numbers }}" class="form-control" placeholder="{{ __('Contact Numbers') }}">

      @if( $errors->has('contact_numbers') )
        <span class="help-block">{{ $errors->first('contact_numbers') }}</span>
      @endif
  </div>

  <div class="form-group  ">
      <div class="form-check">
          <input class="form-check-input" type="checkbox" name="active" id="active" {{ $admin->active ? 'checked' : '' }}>

          <label class="form-check-label" for="active">
              {{ __('Active') }}
          </label>
      </div>
  </div>

  <button class="btn btn-sm btn-primary">Update {{ ucfirst($type) }}</button>
 



 </form>
            </div>
 
        </div>
      	
      </div>      

      <div class="col-sm-6">

        <div class="card card-widget">
            <div class="card-header with-border">
              <h3 class="card-title"><i class="fas fa-table"></i>
              Balance Transfer to {{ ucfirst($type) }}: (Current Balance: {{ env('CURRENCY_CODE') }} {{ $admin->balance }})</h3>
 
            </div>

            <div class="card-body">

              <form method="post" action="{{ route('admin.paymentAddToRole',['type' => $type, 'role'=> $admin]) }}">

                @csrf
                
                

                <div class="form-group has-feedback{{ $errors->has('amount ') ? ' has-error' : '' }}">
                <label for="amount">Amount: </label>
                 
                  <input type="number" min="1" step="1" max="{{ $wb->system_balance }}" name="amount" value="{{ old('amount') }}" class="form-control" placeholder="New Amount">

                  @if( $errors->has('amount') )
                    <span class="help-block">{{ $errors->first('amount') }}</span> <br>
                  @endif
                  <span class="help-block w3-text-tiny">System Balance: {{ env('CURRENCY_CODE') }} {{ $wb->system_balance }}</span>

              </div>


              <div class="form-group has-feedback{{ $errors->has('description ') ? ' has-error' : '' }}">
                <label for="description"> {{ __('Note') }}</label>
                 
                  <input type="text" name="description" value="{{ old('description')}}" class="form-control" placeholder="{{ __('Note') }}">

                  @if( $errors->has('description') )
                    <span class="help-block">{{ $errors->first('description') }}</span>
                  @endif
              </div>

              <button class="btn btn-sm btn-primary">Add New Amount</button>

              </form>

              <br>

              <div class="text-muted">Last Transaction</div>

              @if ($rtp = $admin->lastSystemBalanceReceived())
                 <div class="text-muted">
                  {{ env('CURRENCY_CODE') }} {{ $rtp->transfer_amount }} ({{ $rtp->created_at }}) ({{ $rtp->note }})
                 </div>
              @endif




            </div>
          </div>



          <div class="card card-widget">
            <div class="card-header with-border">
              <h3 class="card-title"><i class="fas fa-table"></i>
              Balance Receive from {{ ucfirst($type) }}: (Current Balance: {{ env('CURRENCY_CODE') }} {{ $admin->balance }})</h3>
 
            </div>

            <div class="card-body">

              <form method="post" action="{{ route('admin.paymentReceiveFromRole',['type' => $type, 'role'=> $admin]) }}">

                @csrf
                
                

                <div class="form-group has-feedback{{ $errors->has('receive_amount ') ? ' has-error' : '' }}">
                <label for="receive_amount">Amount: </label>
                 
                  <input type="number" min="1" step="1" max="{{ $admin->balance }}" name="receive_amount" value="{{ old('receive_amount') }}" class="form-control" placeholder="Receivable Amount">

                  @if( $errors->has('receive_amount') )
                    <span class="help-block">{{ $errors->first('receive_amount') }}</span> <br>
                  @endif
                  <span class="help-block w3-text-tiny">System Balance: {{ env('CURRENCY_CODE') }} {{ $wb->system_balance }}</span>

              </div>

              <div class="form-group has-feedback{{ $errors->has('note ') ? ' has-error' : '' }}">
                <label for="note"> {{ __('Note') }}</label>
                 
                  <input type="text" name="note" value="{{ old('note')}}" class="form-control" placeholder="{{ __('Note') }}">

                  @if( $errors->has('note') )
                    <span class="help-block">{{ $errors->first('note') }}</span>
                  @endif
              </div>

              <button class="btn btn-sm btn-primary">Receive Amount</button>

              </form>

              <br>

              <div class="text-muted">Last Transaction</div>

              @if ($sfa = $admin->lastSentToSystemBalance())
                 <div class="text-muted">
                  {{ env('CURRENCY_CODE') }} {{ $sfa->transfer_amount }} ({{ $sfa->created_at }}) ({{ $sfa->note }})
                 </div>
              @endif




            </div>
          </div>
        
      </div>  
      </div>
      <!-- /.row -->


 
      

      

    </section>
