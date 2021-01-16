<div class="w3-border-top w3-border-light-gray">
<h3 class="mt-0"> <i class="fa fa-th"></i> Personal Information</h3>
<div style="min-height: 10px;">


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


</div>
</div>