@extends('mobile.layout.base')
@section('body')
<?php $me = Auth::user(); ?>


@include('mobile.user.parts.userDetails') 
@endsection