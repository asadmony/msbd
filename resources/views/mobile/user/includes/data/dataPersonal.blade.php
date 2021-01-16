<h5> <i class="fa fa-user"></i> Personal Information</h5>
<div class="container">
    <div class="row">
        <div class="col-sm-7 pb-2">
            <article class="info-detail-wrap pt-3">
                <div class="text-left w3-text-gray w3-small w3-col width-140">
                    Full Name : {{ $user->name }}
                </div>
                <div class="text-left w3-text-gray w3-small w3-col width-140">
                    Gender : {{ $user->gender }}
                </div>
                <div class="text-left w3-text-gray w3-small w3-col width-140">
                    Age : {{ $user->age() }}
                </div>
                <div class="text-left w3-text-gray w3-small w3-col width-140">
                    Height : {{ $user->height }}
                </div>
                <div class="text-left w3-text-gray w3-small w3-col width-140">
                    Weight : {{ $user->weight }}
                </div>
                <div class="text-left w3-text-gray w3-small w3-col width-140">
                    Complexion/Skin Color : {{ $user->skin_color }}
                </div>
                <div class="text-left w3-text-gray w3-small w3-col width-140">
                    Address : {{ $user->city  }}, {{ $user->state }}, {{ $user->country }}
                </div>
                <div class="text-left w3-text-gray w3-small w3-col width-140">
                    Religion : {{ $user->religion }}
                </div>
                <div class="text-left w3-text-gray w3-small w3-col width-140">
                    Social Order : {{ $user->social_order }}
                </div>
                <div class="text-left w3-text-gray w3-small w3-col width-140">
                    Marital Status : {{ $user->marital_status }}
                </div>
                <div class="text-left w3-text-gray w3-small w3-col width-140">
                    Present Location : {{ $user->location }}
                </div>
            </article>
        </div>
        <div class="col-sm-5">
            <div class="w3-card-2>
                <div class="box box-widget w3-hover-shadow">
                    <div class="box-header with-border">
                      <h5 class="box-title"><i class="fa fa-map-marker"></i> {{ $user->location }}</h5>
                  </div>
                  <div class="box-body">
                    
              <iframe src="https://maps.google.com/maps?q={{ $user->lat }},{{ $user->lng }}&z=15&output=embed" width="100%" height="200" frameborder="0" style="border:0;" allowfullscreen></iframe>
                  </div>
                </div>    
            </div>
        </div>
    </div>
</div>
<hr>