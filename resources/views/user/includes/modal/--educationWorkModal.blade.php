
     <!-- Classic Modal -->
    <div class="modal fade" id="educationWorkModal" 
    {{-- tabindex="-1"  --}}
    role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                {{-- <div class="modal-header">
                    <h3 class="modal-title"> Complete your registration process </h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="material-icons">clear</i>
                    </button>
                </div> --}}
                <div class="modal-body">

                    @include('user.includes.forms.education')
                    @include('user.includes.forms.work')
 
                     
                </div>
                <div class="modal-footer">
                    {{-- <button type="button" class="btn btn-danger btn-link" data-dismiss="modal">Close</button> --}}
                </div>
            </div>
        </div>
    </div>
    <!--  End Modal -->