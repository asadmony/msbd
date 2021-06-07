 <!-- Classic Modal -->
<div class="modal fade" id="inactivePayment" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title w3-text-black"> Hi {{ auth()->user()->name }},</h5>
                {{-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="material-icons">clear</i>
                </button> --}}
            </div>
            <div class="modal-body text-dark lob-font text-center">
               <div class="h2">
                   Please Make your Payment
               </div>
               <div class="w3-large">
                
                <table class="table">
                    <tr>
                    <tr>
                        <th>Subscription Duration</th>
                        <th> : </th>
                        <th> {{$inactivePayment->package_duration}} Days</th>
                    </tr>
                    <tr>
                        <th>Fee</th>
                        <th> : </th>
                        <th> {{$inactivePayment->package_currency}}  {{$inactivePayment->package_amount}} </th>
                    </tr>
                    @if ($inactivePayment->payment_details)
                    <tr>
                        <th>Details</th>
                        <th> : </th>
                        <th> {{$inactivePayment->payment_details}} </th>
                    </tr>
                    @endif
                    @if ($inactivePayment->admin_comment)
                    <tr>
                        <th>Note</th>
                        <th> : </th>
                        <th> {{$inactivePayment->admin_comment}} </th>
                    </tr>
                    @endif
                </table>
               </div>
               <div>
                   <a href="#" class="btn btn-parimary px-5"> Make Payment</a>
               </div>
            </div> 
        </div>
    </div>
</div>
    <!--  End Modal -->