<div class="box box-widget mb-3 w3-animate-zoom">
                <div class="box-body" style="min-height: 200px;">

                    <div class="row">
                        <div class="col-sm-3">
                            {{-- <img class="img-bordered rounded mb-4" src="{{ asset($user->latestCheckedPP()) }}" style="width: 100%;" alt=""> --}}

                            <img src="{{ route('imagecache', [ 'template'=>'ppsmbl','filename' => $user->latestCheckedPP() ]) }}" class="rounded img-bordered mb-4 "  alt="{{ $user->username }}" style="max-width: 150px;">
                        </div>
                        <div class="col-sm-9">



                            <div class="row">
                                <div class="col-sm-8">

                                    <!-- Basic ST -->
                                    <div class="profile_basic">

                                         

<div class="w3-row">
  <div class="text-left w3-text-gray w3-small w3-col width-140">
{{ $user->username }} {{ $user->name }}
    @if($user->isOnline())
    <img src="{{ asset('img/online.svg') }}" alt="Online" style="width: 20px;">
    @else
    <i class="fa fa-circle w3-text-light-gray w3-small"></i>
    @endif
</div>
  <div class="w3-rest text-left">
    {{-- @include('user.includes.others.stars') --}}
    
  </div>
</div>

<div class="w3-row">
  <div class="text-left w3-text-gray w3-small w3-col width-140">
Profile created by
</div>
  <div class="w3-rest text-left">
    : 
    {{ $user->profile_created_by ?: '(Not set yet)' }}
  </div>
</div>

<div class="w3-row">
  <div class="text-left w3-text-gray w3-small w3-col width-140">
Age, Gender
</div>
  <div class="w3-rest text-left">
    : 
    {{ $user->age() }},   {{ $user->gender }}
  </div>
</div>

<div class="w3-row">
  <div class="text-left w3-text-gray w3-small w3-col width-140">
Height
</div>
  <div class="w3-rest text-left">
    : 
    {{ $user->height }}
  </div>
</div>




<div class="w3-row">
  <div class="text-left w3-text-gray w3-small w3-col width-140">
Religion/Community
</div>
  <div class="w3-rest text-left">
    : 
    {{ $user->religion }}
  </div>
</div>

<div class="w3-row">
  <div class="text-left w3-text-gray w3-small w3-col width-140">
Education
</div>
  <div class="w3-rest text-left">
    : 
     {{ $user->educationLevel() }}
  </div>
</div>

<div class="w3-row">
  <div class="text-left w3-text-gray w3-small w3-col width-140">
Profession
</div>
  <div class="w3-rest text-left">
    : 
    {{ $user->profession() }}
  </div>
</div>

<div class="w3-row">
  <div class="text-left w3-text-gray w3-small w3-col width-140">
Marital Status
</div>
  <div class="w3-rest text-left">
    : 
 
    {{ $user->marital_status}}
  
  </div>
</div>                                            
                                            
                                        


                                        {{-- <label class="profile-data-label">Height</label><div class="profile-data-info">: 55</div>
                                        <div class="clearfix"></div>  --}}

                                        


                                    </div>

                                </div>
                                <div class="col-sm-4">
                                    
                                    @include('user.includes.others.btnRightArea')



                                </div>
                            </div>

                            <div class="w3-border-top w3-border-light-gray">

                                <span> </span> <a href=" " class="btn btn-primary btn-link no-padding">More</a>

                            </div>
                        </div>
                    </div>

                </div>
            </div>