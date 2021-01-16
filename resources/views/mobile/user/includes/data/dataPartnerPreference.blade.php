<div class="container">
    <h5> <i class="fa fa-cubes"></i> Partner Preference</h5>
    @if($user->searchTerm)
    <div class="container">
        <article class="info-detail-wrap pt-3">
            <div class="text-left w3-text-gray w3-small w3-col width-140">
                Minimum Age (Years) : {{ $user->searchTerm->min_age }}
            </div>
            <div class="text-left w3-text-gray w3-small w3-col width-140">
                Maximum Age : {{ $user->searchTerm->max_age }}
            </div>
            <div class="text-left w3-text-gray w3-small w3-col width-140">
                Minimum Height : {{ $user->searchTerm->min_height }}
            </div>
            <div class="text-left w3-text-gray w3-small w3-col width-140">
                Maximum Height : {{ $user->searchTerm->max_height }}
            </div>
            <div class="text-left w3-text-gray w3-small w3-col width-140">
                Marital Status : {{ $user->searchTerm->marital_status }}
            </div>
            <div class="text-left w3-text-gray w3-small w3-col width-140">
                Profession : {{ $user->searchTerm->profession }}
            </div>
            <div class="text-left w3-text-gray w3-small w3-col width-140">
                Religion / Community : {{ $user->searchTerm->religion }}
            </div>
            <div class="text-left w3-text-gray w3-small w3-col width-140">
                Country : {{ $user->searchTerm->country }}
            </div>
            <br> <br>
        </article>
    </div>
    @endif
</div>
<hr>