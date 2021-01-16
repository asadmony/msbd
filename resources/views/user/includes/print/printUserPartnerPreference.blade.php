<div class="w3-border-top w3-border-light-gray">
<h3 class="mt-0"> <i class="fa fa-cubes"></i> Partner Preference</h3>
<div style="min-height: 200px;">
	
@if($user->searchTerm)


<div class="w3-row">
  <div class="text-left w3-text-gray w3-small w3-col width-140">
  Minimum Age (Years)
</div>
  <div class="w3-rest text-left">
  	: 
  	{{ $user->searchTerm->min_age }}

  </div>
</div>



<div class="w3-row">
  <div class="text-left w3-text-gray w3-small w3-col width-140">
  Maximum Age
</div>
  <div class="w3-rest text-left">
  	: 
  	{{ $user->searchTerm->max_age }}

  </div>
</div>


<div class="w3-row">
  <div class="text-left w3-text-gray w3-small w3-col width-140">
  Minimum Height
</div>
  <div class="w3-rest text-left">
  	: 
  	{{ $user->searchTerm->min_height }}

  </div>
</div>

<div class="w3-row">
  <div class="text-left w3-text-gray w3-small w3-col width-140">
  Maximum Height
</div>
  <div class="w3-rest text-left">
  	: 
  	{{ $user->searchTerm->max_height }}

  </div>
</div>

<div class="w3-row">
  <div class="text-left w3-text-gray w3-small w3-col width-140">
  Marital Status
</div>
  <div class="w3-rest text-left">
  	: 
  	{{ $user->searchTerm->marital_status }}

  </div>
</div>

{{-- <div class="w3-row">
  <div class="text-left w3-text-gray w3-small w3-col width-140">
  Have Children?
</div>
  <div class="w3-rest text-left">
  	: 
  	{{ $user->searchTerm->do_u_have_children }}

  </div>
</div> --}}

<div class="w3-row">
  <div class="text-left w3-text-gray w3-small w3-col width-140">
  Profession
</div>
  <div class="w3-rest text-left">
    : 
    {{ $user->searchTerm->profession }}

  </div>
</div>


<div class="w3-row">
  <div class="text-left w3-text-gray w3-small w3-col width-140">
  Religion / Community
</div>
  <div class="w3-rest text-left">
  	: 

    {{ $user->searchTerm->religion }}

  </div>
</div>

{{-- <div class="w3-row">
  <div class="text-left w3-text-gray w3-small w3-col width-140">
  Caste/Social Order
</div>
  <div class="w3-rest text-left">
  	: 
  	{{ $user->searchTerm->social_order }}

  </div>
</div> --}}


<div class="w3-row">
  <div class="text-left w3-text-gray w3-small w3-col width-140">
  Country
</div>
  <div class="w3-rest text-left">
    : 
    {{ $user->searchTerm->country }}

  </div>
</div>


@endif
</div>
</div>