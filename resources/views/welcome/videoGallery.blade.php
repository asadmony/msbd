@extends('welcome.layouts.welcomeMaster')

@push('css')

@endpush

@section('content')
@auth
<?php $me = Auth::user(); ?>
@endauth
@include('welcome.parts.videoGallery')

@endsection

@push('js') 
@endpush
