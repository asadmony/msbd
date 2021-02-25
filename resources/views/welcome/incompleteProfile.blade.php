@extends('welcome.layouts.welcomeMaster')

@push('css')


@auth
{{-- <link href="{{asset('css/user.css')}}" rel="stylesheet" /> --}}
@else
<link rel="stylesheet" type="text/css" href="{{asset('assets/slideshow/pgwslideshow.css')}}" media="screen" />

<style>
    html {
        background-color: #fff !important;
    }

    .page-header {
        background-color: #fff !important;
    }
</style>
@endauth

@endpush

@section('content')
@auth
<?php $me = Auth::user(); ?>

<div class="main main-raiseds "  style="z-index: 400;">
    <div class="section section-basic" style="min-height: 900px;">

        <div class="container">

            <div class="row">
          {{-- <div class="col-sm-3">
          @if (Browser::isDesktop() && auth()->user()->profile == true)
          @include('user.includes.others.myLeftMenu')
          @endif
          </div> --}}
<div class="col-sm-12">

  {{-- @php
  $user = $me;
  @endphp --}}


  

    <div class="box box-widget mb-0">
      <div class="box-header with-border">
        <h3 class="box-title">
           {{-- @include('user.includes.timeline.timelineTopBtns') --}}
           <b>Complete your profile</b>
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
    <div class="col-sm-12">
      
<div class="container">
  {{-- @include('user.parts.createProfileForm') --}}
@include('user.parts.createProfileForm2')
</div>

    </div>
    {{-- <div class="col-sm-3">

            @include('user.includes.timeline.timelineAd')
            @include('user.includes.timeline.timelineSearch')
      
    </div> --}}
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
{{-- @include('user.parts.timeline') --}}

{{-- modal is outside of .main .main-raised class --}}
{{-- @include('user.includes.modal.reportModal') --}}

@else

<div class="w3-white">

</div>


@endauth
@endsection

@push('js')
<!--   Core JS Files   -->
<script src="{{ asset('mk/mk2/assets/js/jquery-2.2.4.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('mk/mk2/assets/js/bootstrap.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('mk/mk2/assets/js/jquery.bootstrap.js') }}" type="text/javascript"></script>

<!--  Plugin for the Wizard -->
<script src="{{ asset('mk/mk2/assets/js/material-bootstrap-wizard.js') }}"></script>

<!--  More information about jquery.validate here: http://jqueryvalidation.org/  -->
<script src="{{ asset('mk/mk2/assets/js/jquery.validate.min.js') }}"></script>

<script>
    $(document).ready(function(){
    $(document).on('change', '.change-with-other', function(e){
      // e.preventDefault();
      // alert('ok');      
      var that = $(this);
      var val = that.val();
      if((val == 'Other') || (val == 'Others'))
      {
        that.closest('.other-area').find('.other-value-field').slideDown();
      }
      else
      {
        that.closest('.other-area').find('.other-value-field').slideUp();
      }
    });   
  });
    </script>
@endpush
