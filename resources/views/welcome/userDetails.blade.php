@extends('welcome.layouts.welcomeMaster')

@push('css') 
<link href="{{asset('css/userProfile.css')}}" rel="stylesheet" />



@endpush

@section('content')
<?php $me = Auth::user(); ?>


@include('user.parts.userDetails')


{{-- modal is outside of .main .main-raised class --}}
{{-- @include('user.includes.modal.reportModal') --}}
{{-- @include('user.includes.modal.settingModal') --}}

@endsection

@push('js') 

@endpush