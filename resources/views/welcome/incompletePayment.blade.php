

  <div class="w3-card my-2">
    <div class="px-2">
        <h5 class="h3 bold modal-title w3-text-black"> Hi {{ auth()->user()->name }},</h5>
    </div>
    <div class="modal-body text-dark lob-font text-center">
       <div class="h5">
           {{ __('Please Make your Payment') }}
       </div>
       <div class="table-responsive- w3-large">
        
        <table class="table table-sm">
            <tr>
                <td>{{ __('Subscription') }} <br> {{ __('Duration') }}</th>
                <th> : </th>
                <th> {{$inactivePayment->package_duration}} {{ __('Days') }}</th>
            </tr>
            <tr>
                <td>{{ __('Fees') }}</th>
                <th> : </th>
                <th> {{$inactivePayment->paid_currency}}  {{$inactivePayment->paid_amount}} only</th>
            </tr>
            @if ($inactivePayment->payment_details)
            <tr>
                <td>{{ __('Details') }}</th>
                <th> : </th>
                <th> {{$inactivePayment->payment_details}} </th>
            </tr>
            @endif
            @if ($inactivePayment->admin_comment)
            <tr>
                <td>{{ __('Note') }}</th>
                <th> : </th>
                <th> {{$inactivePayment->admin_comment}} </th>
            </tr>
            @endif
        </table>
       </div>
       <div>
           <a href="{{ route('user.choosePackage') }}" class="btn btn-warning ">{{ __('Change package') }}</a>
           <a href="{{ url('ssl/pay', ['payment' => $inactivePayment]) }}" class="btn btn-primary px-3"> {{ __('Make Payment') }}</a>
       </div>
    </div> 
  </div>
  
