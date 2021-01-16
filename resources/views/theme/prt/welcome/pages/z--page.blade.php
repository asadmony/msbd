@extends('welcome.layouts.welcomeMaster')

@push('css') 

{{-- <link href="{{asset('css/userProfile.css')}}" rel="stylesheet" /> --}}
@endpush

@section('content')
@auth
<?php $me = Auth::user(); ?>
@endauth
 @include('welcome.pages.parts.page')
@endsection

@push('js') 

{{-- <script src="{{asset('js/userProfile.js')}}"></script> --}}


@endpush
