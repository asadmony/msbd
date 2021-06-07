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
@include('user.parts.timeline')

{{-- modal is outside of .main .main-raised class --}}
{{-- @include('user.includes.modal.reportModal') --}}

@else

<div class="w3-white">
    @include('welcome.parts.welcome')
</div>


@endauth
@endsection

@push('js')
<script type="text/javascript">
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


  $(".featured-professions").click(function(e) {
          e.preventDefault();
          $('html, body').animate({
              scrollTop: $('#featured-professions').offset().top
          }, 1500);
      });



</script>


@auth


@if ((!Auth::user()->hasEducation()) or (!Auth::user()->hasWork()))
{{-- modal is outside of .main .main-raised class --}}
{{-- @include('user.includes.modal.educationWorkModal') --}}

<script>
    $(document).ready(function(){
    // Show the Modal on load
    $("#educationWorkModal").modal({backdrop: "static"});
    $("#educationWorkModal").modal("show");
    // alert('ok');
});
</script>

@endif


@else
<script type="text/javascript" src="{{asset('assets/slideshow/pgwslideshow.min.js')}}"></script>

<script>
    $(document).ready(function() {
      $('.pgwSlideshow').pgwSlideshow();
  });
</script>

@endauth
@endpush
