
<div class="main main-raiseds "  style="z-index: 400;">
    <div class="section section-basic" style="min-height: 900px;">

        <div class="container">

            <div class="row">
                <div class="col-sm-3">

@if (Browser::isDesktop())
@include('user.includes.others.myLeftMenu')
@endif

</div>
<div class="col-sm-9">

  {{-- @php
  $user = $me;
  @endphp --}}


  

    <div class="box box-widget mb-0">
      <div class="box-header with-border">
        <h3 class="box-title">
           @include('user.includes.timeline.timelineTopBtns')
        </h3>
      </div>
  </div>
  <div class="box box-widget mb-3">
        
        <div class="box-body box-body-container p-0" style="background: #fbfbfb;">
<div class="p-2">
    
 
            {{-- @include('user.includes.others.alertMessage') --}}
            @include('alerts.alerts')
            {{-- @include('user.includes.cards.userCard') --}}


                    


    <div class="row">
    <div class="col-sm-9">
            @include('user.includes.cards.userProgressCard')
            @include('user.includes.timeline.newProfiles')
            @include('user.includes.timeline.myVisitors')
            @include('user.includes.timeline.myMatch')
            @include('user.includes.timeline.myFavourites')
    </div>
    <div class="col-sm-3">

            @include('user.includes.timeline.timelineAd')
            @include('user.includes.timeline.timelineSearch')

      
    </div>
  </div>



               

</div>

        </div>

        <!-- Loading (remove the following to stop the loading)-->
            <div class="overlay my-loading-overlay" style="display: none;">
              <i class="fa fa-circle-o-notch w3-jumbo w3-text-purple fa-spin" style="top: 20%;"></i>

            </div>
            <!-- end loading -->
    </div>


 

 
    

    
</div>
</div>


</div>
</div>
</div>