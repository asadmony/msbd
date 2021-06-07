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
<style>
    
    .selected{
        border: 4px solid green !important;
    }
</style>
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
        <div class="h2 box-title-">
           {{-- @include('user.includes.timeline.timelineTopBtns') --}}
           <b>Choose our service </b>
        </div>
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
    @include('welcome.parts.chooseServicePart')
    </div>
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
{{-- @include('user.parts.timeline') --}}

{{-- modal is outside of .main .main-raised class --}}
{{-- @include('user.includes.modal.reportModal') --}}

@else

<div class="w3-white">

</div>


@endauth
@endsection

@push('js')

@endpush
