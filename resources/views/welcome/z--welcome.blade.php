@extends('welcome.layouts.welcomeMaster')

@push('css') 

@auth
<link href="{{asset('css/user.css')}}" rel="stylesheet" />
@endauth

@endpush

@section('content')
@auth
<?php $me = Auth::user(); ?>

@include('user.parts.timeline')

{{-- modal is outside of .main .main-raised class --}}
{{-- @include('user.includes.modal.reportModal') --}}

@else
@include('welcome.parts.welcome')
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








</script>
@endpush
