@extends('welcome.layouts.welcomeMaster')


@push('css')

@endpush

@section('content')
@auth
<?php $me = Auth::user(); ?>
@endauth
@include('welcome.parts.videoGallery')
{{-- @include('welcome.includes.others.videoGalleryForGallery') --}}
@endsection

@push('js') 
@endpush
