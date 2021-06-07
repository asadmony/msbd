 <!-- Classic Modal -->
<div class="modal fade" id="incompleteProfile" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content" style="background: url({{ asset('img/back2.png') }}) no-repeat center">
            <div class="modal-header">
                <h5 class="modal-title w3-text-white"> Hi {{ auth()->user()->name }},</h5>
                {{-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="material-icons">clear</i>
                </button> --}}
            </div>
            <div class="modal-body text-white lob-font text-center">
                <p class="" style="font-family:'Lobster Two', cursive; color: #ffa500e3; font-style: italic; font-size: 18px;">Welcome to <br> Marriage Solution BD. <br>{{ __('Please create your profile to continue') }}.</p>
                <a href="{{ route('user.incompleteProfile') }}" class="btn btn-success text-dark"  style="background: url({{ asset('img/bg-ribon.jpg') }})">{{ __('Create New Profile') }}</a>
{{-- 
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
 --}}



            </div> 
        </div>
    </div>
</div>
    <!--  End Modal -->