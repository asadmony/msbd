<div class="container">
    <h5> <i class="fa fa-user"></i> Family & Extra Information</h5>

    <div class="row">
        @if($user->familyInfo)
        <article class="info-detail-wrap pt-3">
            <div class="text-left w3-text-gray w3-small w3-col width-140">
                Father's Name : {{ $user->familyInfo->father_name }}
            </div>
            <div class="text-left w3-text-gray w3-small w3-col width-140">
                Father's Occupation : {{ $user->familyInfo->father_occupation }}
            </div>
            <div class="text-left w3-text-gray w3-small w3-col width-140">
                Mother's Name : {{ $user->familyInfo->mother_name }}
            </div>
            <div class="text-left w3-text-gray w3-small w3-col width-140">
                Mother's Occupation : {{ $user->familyInfo->mother_occupation }}
            </div>
            <div class="text-left w3-text-gray w3-small w3-col width-140">
                Number of Brother : {{ $user->familyInfo->number_of_brother }}
            </div>
            <div class="text-left w3-text-gray w3-small w3-col width-140">
                How Many Brother Married : {{ $user->familyInfo->how_many_brother_married }}
            </div>
            <div class="text-left w3-text-gray w3-small w3-col width-140">
                Number of Sister : {{ $user->familyInfo->number_of_sister }}
            </div>
            <div class="text-left w3-text-gray w3-small w3-col width-140">
                How Many Sister Married : {{ $user->familyInfo->how_many_sister_married }}
            </div>
            @if (Auth::user()->isAdmin())
            <div class="text-left w3-text-gray w3-small w3-col width-140">
                Alternative Email : {{ $user->familyInfo->alternative_email }}
            </div>
            <div class="text-left w3-text-gray w3-small w3-col width-140">
                Alternative Mobile : {{ $user->familyInfo->alternative_mobile }}
            </div>
            @endif
            <div class="text-left w3-text-gray w3-small w3-col width-140">
                Family Type : {{ $user->familyInfo->family_type }}
            </div>
            <br> <br>
            <div class="text-left w3-text-gray w3-small w3-col width-140">
                Convenient Time to Call : {{ $user->familyInfo->convenient_time_to_call }}
            </div>
            @if (Auth::user()->isAdmin())
            <div class="text-left w3-text-gray w3-small w3-col width-140">
                Name of Contact Person : {{ $user->familyInfo->name_of_contact_person }}
            </div>
            <div class="text-left w3-text-gray w3-small w3-col width-140">
                Contact Person's Mobile : {{ $user->familyInfo->contact_person_mobile }}
            </div>
            <div class="text-left w3-text-gray w3-small w3-col width-140">
                Relation with Contact Person : {{ $user->familyInfo->relation_with_contact_person }}
            </div>
            <div class="text-left w3-text-gray w3-small w3-col width-140">
                Yearly Income : {{ $user->familyInfo->yearly_income }}
            </div>
            @endif
            <div class="text-left w3-text-gray w3-small w3-col width-140">
                About Yourself : {{ $user->familyInfo->about_yourself }}
            </div>
            <div class="text-left w3-text-gray w3-small w3-col width-140">
                Extra Queries (about Partner) : {{ $user->familyInfo->extra_queries }}
            </div>
            <br> <br>
        </article>
        @endif
    </div>
</div>
<hr>