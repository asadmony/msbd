<div class="box box-widget mb-3 w3-animate-zoom">
                <div class="box-body" style="min-height: 200px;">

                    <div class="row">
                        <div class="col-sm-3">
                            {{-- <img class="img-bordered rounded mb-4" src="{{ asset($user->latestCheckedPP()) }}" style="width: 100%;" alt=""> --}}

                            <img src="{{ asset($user->latestCheckedPP()) }}" class="rounded img-bordered mb-4 "  alt="{{ $user->username }}" style="max-width: 150px;">
                        </div>
                        <div class="col-sm-9">



                            <div class="row">
                                <div class="col-sm-8">

                                    <!-- Basic ST -->
                                    <div class="profile_basic">

                                         

<div class="w3-card mb-1">
  
<div class="box box-widget" style="border:1px solid blue;">
  <div class="box-body">


    <div class="w3-row">
  <div class="text-left w3-text-gray w3-small w3-col width-100">
Mobile
</div>
  <div class="w3-rest text-left">
    : 
      {{ $user->mobile }}
  </div>
</div>

  
<div class="w3-row">
  <div class="text-left w3-text-gray w3-small w3-col width-100">
  Email
</div>
  <div class="w3-rest text-left">
    : 
    {{ $user->email }}
  </div>
</div>

 

           
     
    
  </div>
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