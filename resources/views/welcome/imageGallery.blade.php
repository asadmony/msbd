@extends('welcome.layouts.welcomeMaster')

@push('css') 

<link rel="stylesheet" type="text/css" href="{{asset('assets/slideshow/pgwslideshow.css')}}" media="screen"/>

@endpush

@section('content')
@auth
<?php $me = Auth::user(); ?>
@endauth
@include('welcome.parts.imageGallery')

@endsection

@push('js') 



<script type="text/javascript" src="{{asset('assets/slideshow/pgwslideshow.min.js')}}"></script>

<script>
  $(document).ready(function() {
      $('.pgwSlideshow').pgwSlideshow();
  });
</script>

@endpush
