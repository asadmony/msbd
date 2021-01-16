@extends('welcome.layouts.welcomeMaster')

@push('css') 
@endpush

@section('content')

@auth
<?php $u = Auth::user(); ?>
@endauth
 @include('user.payments.parts.payNowEdit')
@endsection

@push('js') 
<!-- <script>
  $(document).ready(function () {
  $('.select2').select2({});
});
</script> -->
@endpush 