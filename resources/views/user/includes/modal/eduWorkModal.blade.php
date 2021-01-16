 <!-- Classic Modal -->
<div class="modal fade" id="eduWorkModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"> Update Education, Work and family Information </h5>
                {{-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="material-icons">clear</i>
                </button> --}}
            </div>
            <div class="modal-body">

            @if(!Auth::user()->hasEducation())
            
            <div class="w3-border w3-border-purple">
                
            @include('user.ajax.partViews.setting_education')
            </div>

           
            <div class="pull-right">
                
            <a onclick="return confirm('Do you have completed updating educational info?');" class="btn btn-primary btn-xs"  href="">Next</a>
            </div>

            @elseif(!Auth::user()->hasWork())

                <div class="w3-border w3-border-purple">
            @include('user.ajax.partViews.setting_work')
        </div>

           
            <div class="pull-right">
                
            <a onclick="return confirm('Do you have completed updating work info?');" class="btn btn-primary btn-xs"  href="">Finish</a>
            </div>

            @elseif(!Auth::user()->familyInfo)

             <div class="w3-border w3-border-purple">
            @include('user.ajax.partViews.setting_family')
        </div>

           
            <div class="pull-right">
                
            <a onclick="return confirm('Do you have completed updating family and extra info?');" class="btn btn-primary btn-xs"  href="">Finish</a>
            </div>


            @endif




            </div> 
        </div>
    </div>
</div>
    <!--  End Modal -->