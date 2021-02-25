@extends('mobile.layout.base')

@push('css')
<link href="{{ asset('msbd/plugins/fancybox/fancybox.min.css') }}" type="text/css" rel="stylesheet">
@endpush

@section('body')
<?php $me = Auth::user(); ?>
@include('mobile.user.parts.userDetails') 
@endsection

@push('js')
<script src="{{ asset('msbd/plugins/fancybox/fancybox.min.js') }}" type="text/javascript"></script>
@endpush