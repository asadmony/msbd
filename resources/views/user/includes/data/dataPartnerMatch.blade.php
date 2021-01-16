<div class="w3-border-top w3-border-light-gray">
<h3 class="mt-0"> <i class="fa fa-check-square"></i> Partner Match</h3>
<div style="min-height: 200px;">
	
@if($user->searchTerm)

<div class="row">
	<div class="col-sm-12">








        <div class="box box-widget w3-border w3-border-light-gray  no-margin">

          <div class="box-header with-border text-center">
            <h3 class="box-title">
              You match {{ $user->myPartnerMatchPoint() }}/{{ $user->mySearchPoint() }} of {{ $user->isMale() ? 'his' : 'her'}} Preferences
            </h3>
          </div>
          <div class="box-body">

            <div class="row">
              
              <div class="col-sm-12 text-center">


                <a target="_blank" href="{{ url('/',$user->username) }}">
            <img class="img-rounded img-bordered mb-2" title="{{ $user->username }}" width="80" src="{{ asset($user->latestCheckedPP()) }}" alt="{{ $user->username }}">
          </a>

            <i class="fa fa-angle-double-right  w3-large w3-text-purple"></i> 
            <i class="fa fa-angle-double-right  w3-large w3-text-purple"></i> 
            <i class="fa fa-angle-double-right  w3-large w3-text-purple"></i> 
            <i class="fa fa-angle-double-right  w3-large w3-text-purple"></i> 
            <i class="fa fa-angle-double-right  w3-large w3-text-purple"></i> 
            <i class="fa fa-angle-double-right  w3-large w3-text-purple"></i> 
            <i class="fa fa-angle-double-right  w3-large w3-text-purple"></i> 
            <i class="fa fa-angle-double-right  w3-large w3-text-purple"></i> 
            <i class="fa fa-angle-double-right  w3-large w3-text-purple"></i> 
            <i class="fa fa-angle-double-right  w3-large w3-text-purple"></i> 
            <i class="fa fa-angle-double-right  w3-large w3-text-purple"></i> 
            <i class="fa fa-angle-double-right  w3-large w3-text-purple"></i> 
            <i class="fa fa-angle-double-right  w3-large w3-text-purple"></i> 
            <i class="fa fa-angle-double-right  w3-large w3-text-purple"></i> 
            <i class="fa fa-angle-double-right  w3-large w3-text-purple"></i> 
            <i class="fa fa-angle-double-right  w3-large w3-text-purple"></i> 
            &nbsp; &nbsp;
            <i class="fa fa-arrow-circle-right w3-animate-fading w3-large w3-text-purple"></i> 
            <i class="fa fa-arrow-circle-left w3-animate-fading w3-large w3-text-purple"></i> 
            &nbsp; &nbsp;
            <i class="fa fa-angle-double-left  w3-large w3-text-purple"></i> 
            <i class="fa fa-angle-double-left  w3-large w3-text-purple"></i> 
            <i class="fa fa-angle-double-left  w3-large w3-text-purple"></i> 
            <i class="fa fa-angle-double-left  w3-large w3-text-purple"></i> 
            <i class="fa fa-angle-double-left  w3-large w3-text-purple"></i> 
            <i class="fa fa-angle-double-left  w3-large w3-text-purple"></i> 
            <i class="fa fa-angle-double-left  w3-large w3-text-purple"></i> 
            <i class="fa fa-angle-double-left  w3-large w3-text-purple"></i> 
            <i class="fa fa-angle-double-left  w3-large w3-text-purple"></i> 
            <i class="fa fa-angle-double-left  w3-large w3-text-purple"></i> 
            <i class="fa fa-angle-double-left  w3-large w3-text-purple"></i> 
            <i class="fa fa-angle-double-left  w3-large w3-text-purple"></i> 
            <i class="fa fa-angle-double-left  w3-large w3-text-purple"></i> 
            <i class="fa fa-angle-double-left  w3-large w3-text-purple"></i> 
            <i class="fa fa-angle-double-left  w3-large w3-text-purple"></i> 
            <i class="fa fa-angle-double-left  w3-large w3-text-purple"></i> 
            <a target="_blank" href="{{ url('/',$me->username) }}">
            <img class="img-rounded img-bordered mb-2" title="{{ $me->username }}" width="80" src="{{ asset($me->latestCheckedPP()) }}" alt="{{ $me->username }}">
          </a>

                
              </div>
              
            </div>

          
            
          </div>

          <div class="box-footer table-responsive">


            <table class="table table-striped table-bordered">
              <tbody>
                <tr>
                  <td>
                    <div class="pull-left">
                      <span class="w3-text-gray w3-small">Age</span> <br>
                      {{ $user->searchTerm->min_age }} Years - {{ $user->searchTerm->max_age }} Years
                    </div>
                    <div class="pull-right">
                      <br>

                      @if($user->checkPartnerAge($me))
                       <i class="fa fa-check-circle text-green"></i> You Match
                       @else
                       <b> - - - </b>
                       @endif
                    </div>
                  </td>
                </tr>

                <tr>
                  <td>
                    <div class="pull-left">
                      <span class="w3-text-gray w3-small">Height</span> <br>
                      {{ $user->searchTerm->min_height }}  - {{ $user->searchTerm->max_height }} 
                    </div>
                    <div class="pull-right">
                      <br> 

                      @if($user->checkPartnerHeight($me))
                       <i class="fa fa-check-circle text-green"></i> You Match
                       @else
                       <b> - - - </b>
                       @endif

                    </div>
                  </td>
                </tr>

                <tr>
                  <td>
                    <div class="pull-left">
                      <span class="w3-text-gray w3-small">Marital Status</span> <br>
                      {{ $user->searchTerm->marital_status }} 
                    </div>
                    <div class="pull-right">
                      <br> 

                      @if($user->checkPartnerMaritalStatus($me))
                       <i class="fa fa-check-circle text-green"></i> You Match
                       @else
                       <b> - - - </b>
                       @endif

                    </div>
                  </td>
                </tr>

                <tr>
                  <td>
                    <div class="pull-left">
                      <span class="w3-text-gray w3-small">Profession </span> <br>
                      {{ $user->searchTerm->profession }} 
                    </div>
                    <div class="pull-right">
                      <br> 
                      @if($user->checkPartnerProfession($me))
                       <i class="fa fa-check-circle text-green"></i> You Match
                       @else
                       <b> - - - </b>
                       @endif
                    </div>
                  </td>
                </tr>

                <tr>
                  <td>
                    <div class="pull-left">
                      <span class="w3-text-gray w3-small">Religion</span> <br>
                      {{ $user->searchTerm->religion }} 
                    </div>
                    <div class="pull-right">
                      <br> 

                      @if($user->checkPartnerReligion($me))
                       <i class="fa fa-check-circle text-green"></i> You Match
                       @else
                       <b> - - - </b>
                       @endif
                    </div>
                  </td>
                </tr>

                <tr>
                  <td>
                    <div class="pull-left">
                      <span class="w3-text-gray w3-small">Country</span>  <br>
                      {{ $user->searchTerm->country }} 
                    </div>
                    <div class="pull-right">
                      <br> 
                      @if($user->checkPartnerCountry($me))
                       <i class="fa fa-check-circle text-green"></i> You Match
                       @else
                       <b> - - - </b>
                       @endif
                    </div>
                  </td>
                </tr>

              </tbody>
            </table>
            



            
          </div>
          
        </div>
 























	</div>
</div>

<br>
 

@endif
</div>
</div>