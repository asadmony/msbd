@extends('welcome.layouts.welcomeMaster')

@push('css') 
@endpush

@section('content')

@auth
<?php $u = Auth::user(); ?>
@endauth
 @include('user.payments.parts.payNow')
@endsection

@push('js') 
<script>
  
</script>
@endpush 