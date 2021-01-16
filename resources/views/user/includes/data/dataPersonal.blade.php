<div class="w3-border-top w3-border-light-gray">
<h3 class="mt-0"> <i class="fa fa-user"></i> Personal Information</h3>
<div style="min-height: 10px;">


  <div class="row">
    <div class="col-sm-7">


      <div class="w3-row">
  <div class="text-left w3-text-gray w3-small w3-col width-140">
  Full Name
</div>
  <div class="w3-rest text-left">
    : 
    {{ $user->name }}
  </div>
</div>


<div class="w3-row">
  <div class="text-left w3-text-gray w3-small w3-col width-140">
  Gender
</div>
  <div class="w3-rest text-left">
    : 
    {{ $user->gender }}
  </div>
</div>

<div class="w3-row">
  <div class="text-left w3-text-gray w3-small w3-col width-140">
  Age
</div>
  <div class="w3-rest text-left">
    : 
    {{ $user->age() }}
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
  Weight
</div>
  <div class="w3-rest text-left">
    : 
    {{ $user->weight }}
  </div>
</div>

<div class="w3-row">
  <div class="text-left w3-text-gray w3-small w3-col width-140">
  Complexion/Skin Color
</div>
  <div class="w3-rest text-left">
    : 
    {{ $user->skin_color }}
  </div>
</div>

<div class="w3-row">
  <div class="text-left w3-text-gray w3-small w3-col width-140">
  Address
</div>
  <div class="w3-rest text-left">
    : 
    {{ $user->city  }}, {{ $user->state }}, {{ $user->country }}
  </div>
</div>

<div class="w3-row">
  <div class="text-left w3-text-gray w3-small w3-col width-140">
Religion
</div>
  <div class="w3-rest text-left">
    : 
    {{ $user->religion }}
  </div>
</div>

<div class="w3-row">
  <div class="text-left w3-text-gray w3-small w3-col width-140">
Social Order
</div>
  <div class="w3-rest text-left">
    : 
    {{ $user->social_order }}
  </div>
</div>

<div class="w3-row">
  <div class="text-left w3-text-gray w3-small w3-col width-140">
Marital Status
</div>
  <div class="w3-rest text-left">
    : 
    {{ $user->marital_status }}
  </div>
</div>

<div class="w3-row">
  <div class="text-left w3-text-gray w3-small w3-col width-140">
Present Location
</div>
  <div class="w3-rest text-left">
    : 
    {{ $user->location }}
  </div>
</div>

<br> <br> <br>

      
    </div>
    <div class="col-sm-5">



      <div class="w3-card-2" style="margin-top: -40px;">
        <div class="box box-widget w3-hover-shadow">
            <div class="box-header with-border">
              <h3 class="box-title"><i class="fa fa-map-marker"></i> {{ $user->location }}</h3>
          </div>
          <div class="box-body">
            
      <iframe src="https://maps.google.com/maps?q={{ $user->lat }},{{ $user->lng }}&z=15&output=embed" width="100%" height="200" frameborder="0" style="border:0;" allowfullscreen></iframe>
          </div>
        </div>
        
      </div>
      

    </div>
  </div>




</div>
</div>