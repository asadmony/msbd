<div class="w3-border-top w3-border-light-gray">
<h3 class="mt-0"> <i class="fa fa-th"></i> Family & Extra Information</h3>
<div style="min-height: 10px;">


 
@if($user->familyInfo)
 
<div class="w3-row">
  <div class="text-left w3-text-gray w3-small w3-col width-140">
  Father's Name
</div>
  <div class="w3-rest text-left">
    : 
    {{ $user->familyInfo->father_name }}
  </div>
</div>


<div class="w3-row">
  <div class="text-left w3-text-gray w3-small w3-col width-140">
  Father's Occupation
</div>
  <div class="w3-rest text-left">
    : 
    {{ $user->familyInfo->father_occupation }}
  </div>
</div>



<div class="w3-row">
  <div class="text-left w3-text-gray w3-small w3-col width-140">
  Mother's Name
</div>
  <div class="w3-rest text-left">
    : 
    {{ $user->familyInfo->mother_name }}
  </div>
</div>


<div class="w3-row">
  <div class="text-left w3-text-gray w3-small w3-col width-140">
  Mother's Occupation
</div>
  <div class="w3-rest text-left">
    : 
    {{ $user->familyInfo->mother_occupation }}
  </div>
</div>


<div class="w3-row">
  <div class="text-left w3-text-gray w3-small w3-col width-140">
  Number of Brother
</div>
  <div class="w3-rest text-left">
    : 
    {{ $user->familyInfo->number_of_brother }}
  </div>
</div>


<div class="w3-row">
  <div class="text-left w3-text-gray w3-small w3-col width-140">
  How Many Brother Married
</div>
  <div class="w3-rest text-left">
    : 
    {{ $user->familyInfo->how_many_brother_married }}
  </div>
</div>

 <div class="w3-row">
  <div class="text-left w3-text-gray w3-small w3-col width-140">
  Number of Sister
</div>
  <div class="w3-rest text-left">
    : 
    {{ $user->familyInfo->number_of_sister }}
  </div>
</div>

 <div class="w3-row">
  <div class="text-left w3-text-gray w3-small w3-col width-140">
  How Many Sister Married
</div>
  <div class="w3-rest text-left">
    : 
    {{ $user->familyInfo->how_many_sister_married }}
  </div>
</div>


<div class="w3-row">
  <div class="text-left w3-text-gray w3-small w3-col width-140">
  Family Type
</div>
  <div class="w3-rest text-left">
    : 
    {{ $user->familyInfo->family_type }}
  </div>
</div>

 <div class="w3-row">
  <div class="text-left w3-text-gray w3-small w3-col width-140">
  Convenient Time to Call
</div>
  <div class="w3-rest text-left">
    : 
    {{ $user->familyInfo->convenient_time_to_call }}
  </div>
</div>

@if (Auth::user()->isAdmin())
 <div class="w3-row">
  <div class="text-left w3-text-gray w3-small w3-col width-140">
  Alternative Email
</div>
  <div class="w3-rest text-left">
    : 
    {{ $user->familyInfo->alternative_email }}
  </div>
</div>

 

 <div class="w3-row">
  <div class="text-left w3-text-gray w3-small w3-col width-140">
  Alternative Mobile
</div>
  <div class="w3-rest text-left">
    : 
    {{ $user->familyInfo->alternative_mobile }}
  </div>
</div>




 

 <div class="w3-row">
  <div class="text-left w3-text-gray w3-small w3-col width-140">
  Name of Contact Person
</div>
  <div class="w3-rest text-left">
    : 
    {{ $user->familyInfo->name_of_contact_person }}
  </div>
</div>


 <div class="w3-row">
  <div class="text-left w3-text-gray w3-small w3-col width-140">
  Contact Person's Mobile
</div>
  <div class="w3-rest text-left">
    : 
    {{ $user->familyInfo->contact_person_mobile }}
  </div>
</div>

 <div class="w3-row">
  <div class="text-left w3-text-gray w3-small w3-col width-140">
  Relation with Contact Person
</div>
  <div class="w3-rest text-left">
    : 
    {{ $user->familyInfo->relation_with_contact_person }}
  </div>
</div>

 
 <div class="w3-row">
  <div class="text-left w3-text-gray w3-small w3-col width-140">
  Yearly Income
</div>
  <div class="w3-rest text-left">
    : 
    {{ $user->familyInfo->yearly_income }}
  </div>
</div>

@endif

  <div class="w3-row">
  <div class="text-left w3-text-gray w3-small w3-col width-140">
  About Yourself
</div>
  <div class="w3-rest text-left">
    : 
    {{ $user->familyInfo->about_yourself }}
  </div>
</div>

 
  <div class="w3-row">
  <div class="text-left w3-text-gray w3-small w3-col width-140">
  Extra Queries (about Partner)
</div>
  <div class="w3-rest text-left">
    : 
    {{ $user->familyInfo->extra_queries }}
  </div>
</div>
 
 

@endif


</div>
</div>