<div class="w3-card-2">
  
<div class="box box-widget mb-3 w3-animate-zoom">
  <div class="box-header with-border">



    <div class="progress-group">
                    <span class="progress-text">{{ __('Profile Info currently Completed') }}</span>
                    <span class="progress-number"><b><a data-toggle="tooltip" title="Profile Information {{ $me->profilePoint() }}% Completed" href="">  {{ $me->profilePoint() }}   </a></b>/100</span>

                    <a data-toggle="tooltip" title="Profile Information {{ $me->profilePoint() }}% Completed" href=""> 
                    <div class="progress progress-sm {{ $me->profilePoint() < 100 ? 'active' : '' }} ">
                      <div class="progress-bar
                      @if ($me->profilePoint() < 37)
                         progress-bar-danger
                      @elseif($me->profilePoint() < 81)
                        progress-bar-warning
                      @else
                      progress-bar-success
                      @endif

                      progress-bar-striped" role="progressbar" aria-valuenow="{{ $me->profilePoint() }}" aria-valuemin="0" aria-valuemax="100" style="width: {{ $me->profilePoint() }}%">
                  <span class="sr-only">{{ $me->profilePoint() }}% {{ __('Complete') }}</span>
                </div>
                    </div>
                  </a>
                  </div>
                  <!-- /.progress-group -->
  </div>
    <div class="box-body" style="min-height: 130px;">

      {{ __('User Progress Card') }}

    </div>
</div>
</div>
